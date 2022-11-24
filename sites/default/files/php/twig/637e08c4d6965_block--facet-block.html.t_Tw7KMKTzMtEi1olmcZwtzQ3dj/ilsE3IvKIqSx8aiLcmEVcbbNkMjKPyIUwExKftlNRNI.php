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

/* themes/contrib/belgrade/templates/block/block--facet-block.html.twig */
class __TwigTemplate_552b73d73b05b9c6f83f011aa4f497c5fada15ae436171ed19336b7419dc7c2c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 51
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 51), 51, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["plugin_id"] ?? null), 52, $this->source))), 3 => "clearfix"];
        // line 56
        echo "
";
        // line 57
        $context["content_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 57), 57, $this->source) . "-content");
        // line 58
        echo "
";
        // line 59
        $context["content_classes"] = [0 => "block-facet__content", 1 => "collapse", 2 => "in"];
        // line 64
        echo "

<section";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
        echo ">
  ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 67, $this->source), "html", null, true);
        echo "
  ";
        // line 68
        if (($context["label"] ?? null)) {
            // line 69
            echo "    <h3";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 69), "setAttribute", [0 => "data-target", 1 => ("#" . $this->sandbox->ensureToStringAllowed(($context["content_id"] ?? null), 69, $this->source))], "method", false, false, true, 69), "setAttribute", [0 => "data-toggle", 1 => "collapse"], "method", false, false, true, 69), "setAttribute", [0 => "aria-expanded", 1 => "true"], "method", false, false, true, 69), 69, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 69, $this->source), "html", null, true);
            echo "</h3>
  ";
        }
        // line 71
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 71, $this->source), "html", null, true);
        echo "

  ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "</section>
";
    }

    // line 73
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "    <div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 74), "setAttribute", [0 => "id", 1 => ($context["content_id"] ?? null)], "method", false, false, true, 74), "setAttribute", [0 => "aria-expanded", 1 => "true"], "method", false, false, true, 74), 74, $this->source), "html", null, true);
        echo ">
      ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 75, $this->source), "html", null, true);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/block/block--facet-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 75,  93 => 74,  89 => 73,  84 => 78,  82 => 73,  76 => 71,  68 => 69,  66 => 68,  62 => 67,  58 => 66,  54 => 64,  52 => 59,  49 => 58,  47 => 57,  44 => 56,  42 => 52,  41 => 51,  40 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/block/block--facet-block.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\block\\block--facet-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 68, "block" => 73);
        static $filters = array("clean_class" => 51, "escape" => 66);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
