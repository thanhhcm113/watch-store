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

/* themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig */
class __TwigTemplate_e2e73fc4a1a42efaab8122c00525a7c805cbdd909808d80ed6464b80e9a8afdd extends \Twig\Template
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
        echo "<div class=\"product--rendered-attribute fieldgroup form-composite form-item js-form-item form-wrapper js-form-wrapper panel panel-default\">
  <div class=\"panel-heading\">
    <div class=\"panel-title form-required\"><%= label %></div>
  </div>
  <div class=\"panel-body\">
    <div>
      <% _.each(attributeValues, function(currentValue, key) { %>
      <div class=\"form-item js-form-item form-type-radio js-form-type-radio form-item-purchased-entity-attributes-attribute-<%= attributeId %> js-form-item-purchased-entity-attributes-attribute-<%= attributeId %> radio\">
        <input data-drupal-selector=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>\" class=\"form-radio\" type=\"radio\" id=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>-<%= currentValue.attribute_value_id %>\" name=\"attribute_<%= attributeId %>\" value=\"<%= currentValue.attribute_value_id %>\" <%= (activeValue === currentValue.attribute_value_id) ? 'checked' : '' %>>
        <label for=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>-<%= currentValue.attribute_value_id %>\" class=\"control-label option\">
          <% print (currentValue.output) %>
        </label>
      </div>
      <% }); %>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\commerce\\cart\\commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig");
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
