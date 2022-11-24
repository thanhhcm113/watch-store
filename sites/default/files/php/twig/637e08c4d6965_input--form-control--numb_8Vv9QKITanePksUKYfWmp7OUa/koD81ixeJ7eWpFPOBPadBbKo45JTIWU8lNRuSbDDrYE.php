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

/* themes/contrib/belgrade/templates/form/input--form-control--number.html.twig */
class __TwigTemplate_a1ce29e581cdd0a888ae79a705c4f8c09f050aefe83cc9829ce0b999422cf79e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        ob_start(function () { return ''; });
        // line 25
        $context["classes"] = [0 => "form-control", 1 => "form-number"];
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "themes/contrib/belgrade/templates/form/input--form-control--number.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("belgrade/custom-form-elements"), "html", null, true);
        echo "
      <button class=\"number-btn increment\" type=\"button\">+</button>
      <input";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        echo " />
      <button class=\"number-btn decrement\" type=\"button\">-</button>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/form/input--form-control--number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 33,  58 => 31,  54 => 30,  49 => 1,  46 => 25,  44 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/form/input--form-control--number.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\form\\input--form-control--number.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 23, "set" => 25);
        static $filters = array("escape" => 31);
        static $functions = array("attach_library" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'set'],
                ['escape'],
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
