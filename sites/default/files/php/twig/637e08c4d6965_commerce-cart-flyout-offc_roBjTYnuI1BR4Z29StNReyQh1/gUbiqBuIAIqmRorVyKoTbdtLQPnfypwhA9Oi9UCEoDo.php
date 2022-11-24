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

/* themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-offcanvas.html.twig */
class __TwigTemplate_af7840559f87785044be567c97a3313123efafef9ef5ffeea1eed2ff32aa8b21 extends \Twig\Template
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
        echo "<div class=\"cart--cart-offcanvas well well-lg well-primary\">
  <div class=\"cart--cart-offcanvas__close\">
    <button type=\"button\" class=\"button btn close-btn\"><span class=\"visually-hidden\">";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close cart"));
        echo "</span></button>
  </div>
  <% if (count > 0) { %>
  <div class=\"cart-block--offcanvas-contents\">
    <div class=\"cart-block--offcanvas-contents__inner\">
      <h2>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Shopping bag"));
        echo "</h2>
      <div class=\"cart-block--offcanvas-contents__items\"></div>
      <div class=\"cart-block--offcanvas-contents__links\">
        <%= links %>
      </div>
      <div class=\"cart--cart-offcanvas__close visible-xs visible-sm text-align-center\">
        <button type=\"button\" class=\"button btn-link\">";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Continue shopping"));
        echo "</button>
      </div>
    </div>
  </div>
  <% } else { %>
  <div>";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Your cart is empty."));
        echo "</div>
  <% } %>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  60 => 14,  51 => 8,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-offcanvas.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\commerce\\cart\\commerce-cart-flyout-offcanvas.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 3);
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
