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

/* modules/contrib/commerce_cart_flyout/templates/commerce-cart-flyout-add-to-cart-attributes-select.html.twig */
class __TwigTemplate_6f9235ba4f2e14effa8ce2c21cc26bb5175d2b00b1534e88a94c4fea59d00a17 extends \Twig\Template
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
        echo "<div class=\"js-form-item form-item js-form-type-select form-type-select js-form-item-purchased-entity-attributes-attribute-<%= attributeId %> form-item-purchased-entity-attributes-attribute-<%= attributeId %>\">
  <label for=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>\" class=\"js-form-required form-required\"><%= label %></label>
  <select id=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>\" name=\"attribute_<%= attributeId %>\" class=\"form-select required\" required=\"required\" aria-required=\"true\">
    <% _.each(attributeValues, function(currentValue, key) { %>
    <option value=\"<%= currentValue.attribute_value_id %>\" <%= (activeValue === currentValue.attribute_value_id) ? 'selected' : '' %>>
    <%= currentValue.name %>
    </option>
    <% }); %>
  </select>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce_cart_flyout/templates/commerce-cart-flyout-add-to-cart-attributes-select.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce_cart_flyout/templates/commerce-cart-flyout-add-to-cart-attributes-select.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\modules\\contrib\\commerce_cart_flyout\\templates\\commerce-cart-flyout-add-to-cart-attributes-select.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
