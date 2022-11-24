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

/* themes/contrib/belgrade/templates/system/page.html.twig */
class __TwigTemplate_999bc52a9d00846de9d46ddb4e3fc4f79eb6ee3041a38a97602818e0537e7113 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "fluid_container", [], "any", false, false, true, 59)) ? ("container-fluid") : ("container"));
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 61) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_navigation", [], "any", false, false, true, 61))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 97
        echo "
";
        // line 99
        $this->displayBlock('main', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 190)) {
            // line 191
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 62
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["theme"] ?? null), "settings", [], "any", false, false, true, 66), "navbar_inverse", [], "any", false, false, true, 66)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
($context["theme"] ?? null), "settings", [], "any", false, false, true, 67), "navbar_position", [], "any", false, false, true, 67)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 67), "navbar_position", [], "any", false, false, true, 67), 67, $this->source)))) : (($context["container"] ?? null)))];
        // line 70
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 71
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 71)) {
            // line 72
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 72, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 74
        echo "      <div class=\"navbar-header\">
        ";
        // line 76
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 76)) {
            // line 77
            echo "          <button type=\"button\" class=\"toggle-btn\"  data-toggle=\"collapse\" data-target=\"#off-canvas\">
              <div class=\"toggle-btn--bars\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </div>
              <span class=\"toggle-btn--name hidden-xs\">";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
            echo "</span>
          </button>
        ";
        }
        // line 85
        echo "      </div>

      ";
        // line 88
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_navigation", [], "any", false, false, true, 88)) {
            // line 89
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_navigation", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 91
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 91)) {
            // line 92
            echo "        </div>
      ";
        }
        // line 94
        echo "    </header>
  ";
    }

    // line 99
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "  <div role=\"main\" class=\"main-container js-quickedit-main-content\">
      ";
        // line 102
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 102)) {
            // line 103
            echo "        <div id=\"off-canvas\" class=\"side-flyout collapse left\">
          ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 107
        echo "
      ";
        // line 109
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 109)) {
            // line 110
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 113
            echo "      ";
        }
        // line 114
        echo "


    <div class=\"container\">
      ";
        // line 119
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 119)) {
            // line 120
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 123
            echo "      ";
        }
        // line 124
        echo "
      ";
        // line 126
        echo "      ";
        if (($context["breadcrumb"] ?? null)) {
            // line 127
            echo "        ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 130
            echo "      ";
        }
        // line 131
        echo "
      <div class=\"row\">

        ";
        // line 135
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 135)) {
            // line 136
            echo "          ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 141
            echo "        ";
        }
        // line 142
        echo "
        ";
        // line 144
        echo "        ";
        // line 145
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 146
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 146) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 146))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 147
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 147) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 147)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 148
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 148) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 148)))) ? ("col-sm-9") : (""))];
        // line 151
        echo "
        <section";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 152), 152, $this->source), "html", null, true);
        echo ">

          ";
        // line 155
        echo "          ";
        if (($context["action_links"] ?? null)) {
            // line 156
            echo "            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 159
            echo "          ";
        }
        // line 160
        echo "
          ";
        // line 162
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 162)) {
            // line 163
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 166
            echo "          ";
        }
        // line 167
        echo "
          ";
        // line 169
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 175
        echo "        </section>

        ";
        // line 178
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 178)) {
            // line 179
            echo "          ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 184
            echo "        ";
        }
        // line 185
        echo "      </div>
    </div>
  </div>
";
    }

    // line 110
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 120
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "          <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 127
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 128, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 136
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        echo "
            </aside>
          ";
    }

    // line 156
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "              <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 157, $this->source), "html", null, true);
        echo "</ul>
            ";
    }

    // line 163
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "              ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
        echo "
            ";
    }

    // line 169
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        echo "            <a id=\"main-content\"></a>
            <div class=\"container-fluid\">
              ";
        // line 172
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
        echo "
            </div>
          ";
    }

    // line 179
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 180
        echo "            <aside class=\"col-sm-3\" role=\"complementary\">
              ";
        // line 181
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
        echo "
            </aside>
          ";
    }

    // line 191
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "    <footer class=\"footer\" role=\"contentinfo\">
      ";
        // line 193
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 193,  380 => 192,  376 => 191,  369 => 181,  366 => 180,  362 => 179,  355 => 172,  351 => 170,  347 => 169,  340 => 164,  336 => 163,  329 => 157,  325 => 156,  318 => 138,  315 => 137,  311 => 136,  304 => 128,  300 => 127,  293 => 121,  289 => 120,  282 => 111,  278 => 110,  271 => 185,  268 => 184,  265 => 179,  262 => 178,  258 => 175,  255 => 169,  252 => 167,  249 => 166,  246 => 163,  243 => 162,  240 => 160,  237 => 159,  234 => 156,  231 => 155,  226 => 152,  223 => 151,  221 => 148,  220 => 147,  219 => 146,  218 => 145,  216 => 144,  213 => 142,  210 => 141,  207 => 136,  204 => 135,  199 => 131,  196 => 130,  193 => 127,  190 => 126,  187 => 124,  184 => 123,  181 => 120,  178 => 119,  172 => 114,  169 => 113,  166 => 110,  163 => 109,  160 => 107,  154 => 104,  151 => 103,  148 => 102,  145 => 100,  141 => 99,  136 => 94,  132 => 92,  129 => 91,  123 => 89,  120 => 88,  116 => 85,  110 => 82,  103 => 77,  100 => 76,  97 => 74,  91 => 72,  89 => 71,  84 => 70,  82 => 67,  81 => 66,  80 => 64,  78 => 63,  74 => 62,  68 => 191,  66 => 190,  63 => 189,  61 => 99,  58 => 97,  54 => 62,  52 => 61,  50 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/system/page.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 59, "if" => 61, "block" => 62);
        static $filters = array("clean_class" => 67, "escape" => 70, "t" => 82);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
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
