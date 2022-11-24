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

/* themes/contrib/belgrade/templates/menu/menu--social.html.twig */
class __TwigTemplate_dc42a6bd3e5b937b2aa53b010d532c8a73a88bd0a1b0ae3c17493c5ed85f7aed extends \Twig\Template
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
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => ("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 30, $this->source))), 2 => "list-unstyled"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 32
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
                    echo ">
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
                    $context["item_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 37
($context["menu_name"] ?? null), 37, $this->source))) . "__item"), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 38
$context["item"], "is_expanded", [], "any", false, false, true, 38)) ? ("expanded") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,                     // line 39
$context["item"], "is_expanded", [], "any", false, false, true, 39) && (($context["menu_level"] ?? null) == 0))) ? ("dropdown") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 40
$context["item"], "in_active_trail", [], "any", false, false, true, 40)) ? ("active") : (""))];
                    // line 43
                    echo "      ";
                    // line 44
                    $context["link_classes"] = [0 => (("menu-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(                    // line 45
($context["menu_name"] ?? null), 45, $this->source))) . "__link")];
                    // line 48
                    echo "      ";
                    // line 49
                    $context["icon_classes"] = [0 => "glyph", 1 => ("glyph-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 51
$context["item"], "title", [], "any", false, false, true, 51), 51, $this->source))), 2 => "glyph__circled"];
                    // line 55
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 55))) {
                        // line 56
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 56), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                        echo ">
        <a href=\"";
                        // line 57
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                        echo "\" class=\"dropdown-toggle\" data-target=\"#\" data-toggle=\"dropdown\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                        echo " <span class=\"caret\"></span></a>
      ";
                    } else {
                        // line 59
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 59), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo ">

        ";
                        // line 61
                        ob_start(function () { return ''; });
                        // line 62
                        echo "          <i ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 62), "removeClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 62), "addClass", [0 => ($context["icon_classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
                        echo " ></i> <span class=\"sr-only\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                        echo "</span>
        ";
                        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 64
                        echo "
        ";
                        // line 65
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(                        // line 67
($context["title"] ?? null), 67, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 68
$context["item"], "url", [], "any", false, false, true, 68), 68, $this->source)), "html", null, true);
                        // line 70
                        echo "

      ";
                    }
                    // line 73
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 73)) {
                        // line 74
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 74), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => "nav"], "method", false, false, true, 74), (($context["menu_level"] ?? null) + 1)], 74, $context, $this->getSourceContext()));
                        echo "
      ";
                    }
                    // line 76
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
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
        return "themes/contrib/belgrade/templates/menu/menu--social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 78,  163 => 76,  157 => 74,  154 => 73,  149 => 70,  147 => 68,  146 => 67,  145 => 65,  142 => 64,  134 => 62,  132 => 61,  126 => 59,  119 => 57,  114 => 56,  111 => 55,  109 => 51,  108 => 49,  106 => 48,  104 => 45,  103 => 44,  101 => 43,  99 => 40,  98 => 39,  97 => 38,  96 => 37,  95 => 36,  93 => 35,  88 => 34,  82 => 32,  76 => 30,  73 => 29,  70 => 28,  67 => 27,  51 => 26,  44 => 24,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/menu/menu--social.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\menu\\menu--social.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 34, "set" => 36);
        static $filters = array("escape" => 30, "clean_class" => 30);
        static $functions = array("link" => 66);

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
