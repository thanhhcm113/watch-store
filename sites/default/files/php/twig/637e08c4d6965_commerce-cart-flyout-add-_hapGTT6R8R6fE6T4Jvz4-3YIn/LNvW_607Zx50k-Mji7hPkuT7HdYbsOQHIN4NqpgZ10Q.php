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

/* themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-select.html.twig */
class __TwigTemplate_eb9cf6ff437d98b90ce08290f9d300c2669c827ac52c50785a0564cb83edfdc9 extends \Twig\Template
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
        echo "<div class=\"form-item js-form-item form-type-select js-form-type-select form-item-purchased-entity-attributes-attribute-<%= attributeId %> js-form-item-purchased-entity-attributes-attribute-<%= attributeId %> form-group\">
  <label for=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>\" class=\"control-label js-form-required form-required\"><%= label %></label>
  <div class=\"select-wrapper\">
    <select id=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>\" name=\"attribute_<%= attributeId %>\" class=\"form-select required form-control\" required=\"required\" aria-required=\"true\">
      <% _.each(attributeValues, function(currentValue, key) { %>
      <option value=\"<%= currentValue.attribute_value_id %>\" <%= (activeValue === currentValue.attribute_value_id) ? 'selected=\"selected\"' : '' %>>
      <%= currentValue.name %>
      </option>
      <% }); %>
    </select>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-select.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-select.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\commerce\\cart\\commerce-cart-flyout-add-to-cart-attributes-select.html.twig");
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
