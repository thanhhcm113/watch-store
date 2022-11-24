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

/* field--commerce-product--field-images--full.html.twig */
class __TwigTemplate_0e52ee465e478a8c872668521809d5e79ade35bb3db8abc5ab976bccb16187c7 extends \Twig\Template
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
        // line 42
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_name"] ?? null), 44, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 45
($context["field_type"] ?? null), 45, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 46
($context["label_display"] ?? null), 46, $this->source))];
        // line 50
        $context["title_classes"] = [0 => "field--label", 1 => (((        // line 52
($context["label_display"] ?? null) == "visually_hidden")) ? ("sr-only") : (""))];
        // line 55
        echo "
<div";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
        echo ">
  ";
        // line 57
        if ( !($context["label_hidden"] ?? null)) {
            // line 58
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 58), 58, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 58, $this->source), "html", null, true);
            echo "</div>
  ";
        }
        // line 60
        echo "

  ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "
    ";
            // line 64
            $context["image_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 64)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#item"] ?? null) : null), "entity", [], "any", false, false, true, 64), "uri", [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64), 64, $this->source));
            // line 65
            echo "    ";
            $context["style"] = (("background-image:url(" . $this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 65, $this->source)) . ")");
            // line 66
            echo "
    ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 67)) {
                // line 68
                echo "      ";
                // line 69
                echo "      <div class=\"product-img--main\" data-scale=\"1.6\" data-image=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 69, $this->source), "html", null, true);
                echo "\"></div>
      ";
                // line 70
                if ((twig_length_filter($this->env, ($context["items"] ?? null)) > 1)) {
                    // line 71
                    echo "        ";
                    // line 72
                    echo "        <div class=\"product-img--thumbs\">
        <a class=\"product-img--thumb__switcher\"><i class=\"glyph glyph-arrows\"></i></a>
        <div";
                    // line 74
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 74), "addClass", [0 => "product-img--thumb"], "method", false, false, true, 74), "setAttribute", [0 => "style", 1 => ($context["style"] ?? null)], "method", false, false, true, 74), 74, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                    echo "</div>
      ";
                }
                // line 76
                echo "    ";
            } else {
                // line 77
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 77), "addClass", [0 => "product-img--thumb"], "method", false, false, true, 77), "setAttribute", [0 => "style", 1 => ($context["style"] ?? null)], "method", false, false, true, 77), 77, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            // line 79
            echo "
    ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 80) && (twig_length_filter($this->env, ($context["items"] ?? null)) > 1))) {
                // line 81
                echo "      </div>
    ";
            }
            // line 83
            echo "
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "field--commerce-product--field-images--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 85,  140 => 83,  136 => 81,  134 => 80,  131 => 79,  123 => 77,  120 => 76,  113 => 74,  109 => 72,  107 => 71,  105 => 70,  100 => 69,  98 => 68,  96 => 67,  93 => 66,  90 => 65,  88 => 64,  85 => 63,  68 => 62,  64 => 60,  56 => 58,  54 => 57,  50 => 56,  47 => 55,  45 => 52,  44 => 50,  42 => 46,  41 => 45,  40 => 44,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "field--commerce-product--field-images--full.html.twig", "themes/contrib/belgrade/templates/commerce/field/field--commerce-product--field-images--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 57, "for" => 62);
        static $filters = array("clean_class" => 44, "escape" => 56, "length" => 70);
        static $functions = array("file_url" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'length'],
                ['file_url']
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
