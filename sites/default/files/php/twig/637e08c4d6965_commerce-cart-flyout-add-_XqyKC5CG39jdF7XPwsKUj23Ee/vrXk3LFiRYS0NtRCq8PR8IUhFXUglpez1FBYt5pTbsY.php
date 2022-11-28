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

/* modules/contrib/commerce_cart_flyout/templates/commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig */
class __TwigTemplate_a5115f03b2d9953eee06d12a45403cf316a209406ab19ae220fd3c48b81dcaec extends \Twig\Template
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
        echo "<fieldset class=\"product--rendered-attribute fieldgroup form-composite required js-form-item form-item js-form-wrapper form-wrapper\" aria-required=\"true\">
  <legend>
    <span class=\"fieldset-legend js-form-required form-required\"><%= label %></span>
  </legend>
  <div class=\"fieldset-wrapper\">
    <div class=\"form-radios\">
      <% _.each(attributeValues, function(currentValue, key) { %>
      <div class=\"js-form-item form-item js-form-type-radio form-type-radio js-form-item-purchased-entity-attributes-attribute-<%= attributeId %> form-item-purchased-entity-attributes-attribute-<%= attributeId %>\">
        <input type=\"radio\" class=\"form-radio\" name=\"attribute_<%= attributeId %>\" id=\"attribute_<%= attributeId %>_<%= currentValue.attribute_value_id %>\" value=\"<%= currentValue.attribute_value_id %>\" <%= (activeValue === currentValue.attribute_value_id) ? 'checked' : '' %>/>
        <label class=\"control-label option\" for=\"attribute_<%= attributeId %>_<%= currentValue.attribute_value_id %>\">
          <% print (currentValue.output) %>
        </label>
      </div>
      <% }); %>
    </div>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce_cart_flyout/templates/commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce_cart_flyout/templates/commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\modules\\contrib\\commerce_cart_flyout\\templates\\commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig");
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
