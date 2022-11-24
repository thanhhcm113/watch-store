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

/* themes/contrib/belgrade/templates/system/page--frontpage.html.twig */
class __TwigTemplate_fb72c623b7bee5646cdb8983984ce3a974610b3f85a797d0ccb7f20140e2217a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("page.html.twig", "themes/contrib/belgrade/templates/system/page--frontpage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <div role=\"main\" class=\"main-container js-quickedit-main-content\">
      ";
        // line 7
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 7)) {
            // line 8
            echo "        <div id=\"off-canvas\" class=\"side-flyout collapse left\">
          ";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 12
        echo "
      ";
        // line 14
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 14)) {
            // line 15
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 18
            echo "      ";
        }
        // line 19
        echo "

      ";
        // line 22
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 22)) {
            // line 23
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 28
            echo "      ";
        }
        // line 29
        echo "
      <div class=\"row\">
        ";
        // line 32
        echo "        <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 32, $this->source), "html", null, true);
        echo ">

          ";
        // line 35
        echo "          ";
        if (($context["action_links"] ?? null)) {
            // line 36
            echo "            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 39
            echo "          ";
        }
        // line 40
        echo "
          ";
        // line 42
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 42)) {
            // line 43
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 46
            echo "          ";
        }
        // line 47
        echo "
          ";
        // line 49
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "        </section>
      </div>
    </div>
  </div>
";
    }

    // line 15
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 23
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "          <div class=\"container\">
            <div class=\"highlighted\">";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "</div>
          </div>
          ";
    }

    // line 36
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "              <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 37, $this->source), "html", null, true);
        echo "</ul>
            ";
    }

    // line 43
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "              ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "
            ";
    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "            <a id=\"main-content\"></a>
            ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 51), 51, $this->source), "belgrade_page_title"), "html", null, true);
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/system/page--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 51,  193 => 50,  189 => 49,  182 => 44,  178 => 43,  171 => 37,  167 => 36,  160 => 25,  157 => 24,  153 => 23,  146 => 16,  142 => 15,  134 => 53,  131 => 49,  128 => 47,  125 => 46,  122 => 43,  119 => 42,  116 => 40,  113 => 39,  110 => 36,  107 => 35,  101 => 32,  97 => 29,  94 => 28,  91 => 23,  88 => 22,  84 => 19,  81 => 18,  78 => 15,  75 => 14,  72 => 12,  66 => 9,  63 => 8,  60 => 7,  57 => 5,  53 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/system/page--frontpage.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\system\\page--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "block" => 15);
        static $filters = array("escape" => 9, "without" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
