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

/* themes/contrib/belgrade/templates/commerce/commerce-product--catalog.html.twig */
class __TwigTemplate_e22b8c71298081e2c3277d05da33864be50ab9168ab34e68aa9f9aeab11856c0 extends \Twig\Template
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
        // line 23
        $context["classes"] = [0 => "commerce-product", 1 => ("commerce-product--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 25
($context["product_entity"] ?? null), "bundle", [], "any", false, false, true, 25), 25, $this->source))), 2 => "commerce-product--catalog"];
        // line 29
        echo "
<article";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo ">
  <div class=\"commerce-product--catalog__image\">";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_images", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_field_images", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        // line 34
        echo "<a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null), 34, $this->source), "html", null, true);
        echo "\" class=\"commerce-product--catalog__hover-text\"><i class=\"glyph glyph-look\"></i>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("View product"));
        echo "</a>
  </div>
  <div class=\"commerce-product--catalog__info\">";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null), 37, $this->source), "variation_attributes", "field_images", "variation_field_images"), "html", null, true);
        // line 38
        echo "</div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/commerce-product--catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 38,  61 => 37,  53 => 34,  51 => 33,  49 => 32,  45 => 30,  42 => 29,  40 => 25,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/commerce-product--catalog.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\commerce\\commerce-product--catalog.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23);
        static $filters = array("clean_class" => 25, "escape" => 30, "t" => 34, "without" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 't', 'without'],
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
