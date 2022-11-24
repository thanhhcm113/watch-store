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

/* themes/contrib/belgrade/templates/block/block--belgrade-powered.html.twig */
class __TwigTemplate_ba9ff5ab21b75f28adef3d8aa847ae85e07f79c647f7d24322bf8d535a7ec2ab extends \Twig\Template
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
        // line 9
        echo "
";
        // line 11
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 13
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 13), 13, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 14
($context["plugin_id"] ?? null), 14, $this->source))), 3 => "clearfix"];
        // line 18
        echo "<section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
  ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "</section>
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <a class=\"footer--logo\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "\" rel=\"home\">
      <img class=\"img-responsive\" src=\"/";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/assets/images/logo-graphics.svg\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "\" />
    </a>
    ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 23, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/block/block--belgrade-powered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  70 => 21,  63 => 20,  59 => 19,  54 => 25,  52 => 19,  47 => 18,  45 => 14,  44 => 13,  43 => 11,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/block/block--belgrade-powered.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\block\\block--belgrade-powered.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "block" => 19);
        static $filters = array("clean_class" => 13, "escape" => 18, "t" => 20);
        static $functions = array("path" => 20, "active_theme_path" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 't'],
                ['path', 'active_theme_path']
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
