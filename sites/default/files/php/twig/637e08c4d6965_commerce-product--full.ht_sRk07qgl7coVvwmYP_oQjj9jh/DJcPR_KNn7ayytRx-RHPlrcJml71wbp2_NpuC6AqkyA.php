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

/* themes/contrib/belgrade/templates/commerce/commerce-product--full.html.twig */
class __TwigTemplate_e45f5b58cb9125be6f9a926f02dc8f7a306416338af83f7b2d7df11e313edaa1 extends \Twig\Template
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
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("belgrade/commerce.product-images"), "html", null, true);
        echo "
";
        // line 24
        $context["classes"] = [0 => "commerce-product", 1 => ("commerce-product--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 26
($context["product_entity"] ?? null), "bundle", [], "any", false, false, true, 26), 26, $this->source))), 2 => "commerce-product--full"];
        // line 30
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo ">
  <div class=\"row\">
    <div class=\"col-md-6\">";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_images", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_field_images", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        // line 35
        echo "</div>
    <div class=\"col-md-6\">
      <div class=\"commerce-product__contents\">";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null), 40, $this->source), "field_images", "variation_attributes", "variation_price", "variation_field_images"), "html", null, true);
        // line 41
        echo "</div>
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/commerce-product--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 41,  64 => 40,  62 => 39,  60 => 38,  56 => 35,  54 => 34,  52 => 33,  46 => 30,  44 => 26,  43 => 24,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/commerce-product--full.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\commerce\\commerce-product--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24);
        static $filters = array("escape" => 22, "clean_class" => 26, "without" => 40);
        static $functions = array("attach_library" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'clean_class', 'without'],
                ['attach_library']
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
