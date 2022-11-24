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

/* themes/contrib/belgrade/templates/block/block--commerce-cart.html.twig */
class __TwigTemplate_0ef1b3ddd4b043dcd3b8e41839af94c368436de7a5b9bfeb5592b3ae4863ff21 extends \Twig\Template
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
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "
";
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 49, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/block/block--commerce-cart.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 49,  47 => 48,  42 => 51,  40 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/block/block--commerce-cart.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\block\\block--commerce-cart.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 48);
        static $filters = array("escape" => 49);
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
