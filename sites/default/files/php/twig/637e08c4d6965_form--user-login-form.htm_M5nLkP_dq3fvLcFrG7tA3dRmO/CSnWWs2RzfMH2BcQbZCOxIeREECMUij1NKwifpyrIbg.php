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

/* themes/contrib/belgrade/templates/form/form--user-login-form.html.twig */
class __TwigTemplate_02d7e9381e0d359413464e955fdb1941551dce3183669830ec8dc30d714f30f7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_header' => [$this, 'block_form_header'],
            'form_footer' => [$this, 'block_form_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return "form--user-form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("form--user-form.html.twig", "themes/contrib/belgrade/templates/form/form--user-login-form.html.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_form_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Log in"));
        echo "
";
    }

    // line 19
    public function block_form_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "  <h3>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Not a member yet?"));
        echo "</h3>
  <a class=\"btn btn-white\" href=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("user.register"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sign up"));
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/form/form--user-login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  64 => 20,  60 => 19,  53 => 17,  49 => 16,  38 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/form/form--user-login-form.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\form\\form--user-login-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 17);
        static $functions = array("path" => 21);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
                ['path']
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
