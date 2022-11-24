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

/* themes/contrib/belgrade/templates/menu/menu--main.html.twig */
class __TwigTemplate_ade9f6e9178ae16b46a683cc1c8edc313b1a210e62f7f0d68cd10c47589783a1 extends \Twig\Template
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
        // line 18
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 24, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 26
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            echo "  ";
            $macros["menus"] = $this;
            // line 28
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 29
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 30
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => "nav", 2 => ("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 30, $this->source)))], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 32
                    echo "      <ul class=\"dropdown-menu\">
    ";
                }
                // line 34
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "      ";
                    // line 36
                    $context["item_classes"] = [0 => ((twig_get_attribute($this->env, $this->source,                     // line 37
$context["item"], "is_expanded", [], "any", false, false, true, 37)) ? ("expanded") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,                     // line 38
$context["item"], "is_expanded", [], "any", false, false, true, 38) && (($context["menu_level"] ?? null) == 0))) ? ("dropdown") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 39
$context["item"], "in_active_trail", [], "any", false, false, true, 39)) ? ("active") : ("")), 3 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 40
($context["menu_name"] ?? null), 40, $this->source))) . "__item"), 4 => "menu__item"];
                    // line 44
                    echo "      ";
                    // line 45
                    $context["link_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 46
($context["menu_name"] ?? null), 46, $this->source))) . "__link"), 1 => "menu__link"];
                    // line 50
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 50))) {
                        // line 51
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 51), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                        echo ">
          ";
                        // line 52
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 54
$context["item"], "title", [], "any", false, false, true, 54), 54, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 55
$context["item"], "url", [], "any", false, false, true, 55), 55, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 56
$context["item"], "attributes", [], "any", false, false, true, 56), "removeClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 56), "addClass", [0 => ($context["link_classes"] ?? null)], "method", false, false, true, 56), 56, $this->source)), "html", null, true);
                        // line 58
                        echo "
         <span class=\"dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"15\" viewBox=\"0 0 10.6 6\">
            <path d=\"M5.3 6L0 .7.7 0l4.6 4.6L9.9 0l.7.7z\"/>
          </svg>
        </span>
      ";
                    } else {
                        // line 65
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 65), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
                        echo ">
        ";
                        // line 66
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 68
$context["item"], "title", [], "any", false, false, true, 68), 68, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 69
$context["item"], "url", [], "any", false, false, true, 69), 69, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 70
$context["item"], "attributes", [], "any", false, false, true, 70), "removeClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 70), "addClass", [0 => ($context["link_classes"] ?? null)], "method", false, false, true, 70), 70, $this->source)), "html", null, true);
                        // line 72
                        echo "
        ";
                    }
                    // line 74
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 74)) {
                        // line 75
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 75), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => "nav"], "method", false, false, true, 75), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)], 75, $context, $this->getSourceContext()));
                        echo "
      ";
                    }
                    // line 77
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 79,  149 => 77,  143 => 75,  140 => 74,  136 => 72,  134 => 70,  133 => 69,  132 => 68,  131 => 66,  126 => 65,  117 => 58,  115 => 56,  114 => 55,  113 => 54,  112 => 52,  107 => 51,  104 => 50,  102 => 46,  101 => 45,  99 => 44,  97 => 40,  96 => 39,  95 => 38,  94 => 37,  93 => 36,  91 => 35,  86 => 34,  82 => 32,  76 => 30,  73 => 29,  70 => 28,  67 => 27,  51 => 26,  44 => 24,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/menu/menu--main.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\menu\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 34, "set" => 36);
        static $filters = array("escape" => 30, "clean_class" => 30);
        static $functions = array("link" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'clean_class'],
                ['link']
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
