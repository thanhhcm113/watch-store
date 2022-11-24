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

/* themes/contrib/commerce_bootstrap/templates/commerce/commerce-checkout-form--with-sidebar.html.twig */
class __TwigTemplate_7a3c63de0d04a183ed4329558902e2aed3fc93cb1dac9de8ae3fe8608805c541 extends \Twig\Template
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
        // line 12
        echo "<div class=\"layout-checkout-form container-fluid clearfix\">
  <div class=\"row\">
    <div class=\"layout-region layout-region-checkout-main col-xs-12 col-md-8\">
      ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 15, $this->source), "sidebar", "actions"), "html", null, true);
        echo "
    </div>
    <div class=\"layout-region layout-region-checkout-secondary col-xs-12 col-md-4\">
      <h3>";
        // line 18
        echo t("Order Summary", array());
        echo "</h3>
      ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sidebar", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
    </div>
  </div>
  <div class=\"row\">
    <div class=\"layout-region layout-region-checkout-footer col-xs-12\">
      ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/commerce_bootstrap/templates/commerce/commerce-checkout-form--with-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 24,  54 => 19,  50 => 18,  44 => 15,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/commerce_bootstrap/templates/commerce/commerce-checkout-form--with-sidebar.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\commerce_bootstrap\\templates\\commerce\\commerce-checkout-form--with-sidebar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 18);
        static $filters = array("escape" => 15, "without" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                ['escape', 'without'],
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
