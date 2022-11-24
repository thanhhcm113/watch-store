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

/* form--user-form.html.twig */
class __TwigTemplate_88cb06caca4cec3eeda6db889a7601e607f5bb4833d87f4dcce3df9436bb562a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_header' => [$this, 'block_form_header'],
            'form_footer' => [$this, 'block_form_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
<div class=\"auth-user-form\">
  <form";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 17, $this->source), "html", null, true);
        echo ">
    <h2 class=\"form-header\">";
        // line 18
        $this->displayBlock('form_header', $context, $blocks);
        echo "</h2>
    ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 19, $this->source), "html", null, true);
        echo "
  </form>
  <div class=\"auth-user-form--footer\">
    ";
        // line 22
        $this->displayBlock('form_footer', $context, $blocks);
        // line 23
        echo "  </div>
</div>
";
    }

    // line 18
    public function block_form_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 22
    public function block_form_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "form--user-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  67 => 18,  61 => 23,  59 => 22,  53 => 19,  49 => 18,  45 => 17,  41 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "form--user-form.html.twig", "themes/contrib/belgrade/templates/form/form--user-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 18);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                ['escape'],
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
