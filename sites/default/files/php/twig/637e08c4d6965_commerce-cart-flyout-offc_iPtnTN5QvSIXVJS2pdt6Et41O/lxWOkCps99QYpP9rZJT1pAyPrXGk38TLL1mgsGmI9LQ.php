<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-offcanvas-contents-items.html.twig */
class __TwigTemplate_6a8dd785eb0bbc13920cb6db378c83132afe097ec030d7abb00336b44cd8ecd8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<table class=\"cart-block--offcanvas-cart-table table\">
  <tbody>
  <% _.each(cart.order_items, function(orderItem, key) { %>
  <tr>
    <td class=\"cart-block--offcanvas-cart-table__title\"><%- orderItem.title %></td>
    <td class=\"cart-block--offcanvas-cart-table__quantity\">
      <input class=\"form-control\" type=\"number\" min=\"0\" data-key=\"<% print(key) %>\" value=\"<% print(parseInt(orderItem.quantity)) %>\" />
    </td>
    <td class=\"cart-block--offcanvas-cart-table__price\"><%= orderItem.total_price.formatted %></td>
    <td class=\"cart-block--offcanvas-cart-table__remove\">
      <button value=\"<% print(JSON.stringify([cart.order_id, orderItem.order_item_id]))  %>\" class=\"btn-link\"><i class=\"glyph glyph-close\"></i></button>
    </td>
  </tr>
  <% }) %>
  </tbody>
  <tfoot>
  <td class=\"text-right\" colspan=\"4\">
    <button type=\"submit\" class=\"cart-block--offcanvas-contents__update btn-link\"><i class=\"glyph glyph-refresh\"></i>";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Update quantities"));
        echo "</button>
  </td>
  </tfoot>
</table>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-offcanvas-contents-items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-offcanvas-contents-items.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\commerce\\cart\\commerce-cart-flyout-offcanvas-contents-items.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
