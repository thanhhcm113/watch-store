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

/* modules/contrib/facets/templates/facets-item-list.html.twig */
class __TwigTemplate_1eb266223fc0ad206eba89a07e682847d3152711c8e4019062646e1e1fac962a extends \Twig\Template
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
        // line 27
        echo "<div class=\"facets-widget-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "widget", [], "any", false, false, true, 27), "type", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "\">
  ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "widget", [], "any", false, false, true, 28), "type", [], "any", false, false, true, 28)) {
            // line 29
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ("item-list__" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "widget", [], "any", false, false, true, 29), "type", [], "any", false, false, true, 29), 29, $this->source))], "method", false, false, true, 29);
            // line 30
            echo "  ";
        }
        // line 31
        echo "  ";
        if ((($context["items"] ?? null) || ($context["empty"] ?? null))) {
            // line 32
            if ( !twig_test_empty(($context["title"] ?? null))) {
                // line 33
                echo "<h3>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 33, $this->source), "html", null, true);
                echo "</h3>";
            }
            // line 36
            if (($context["items"] ?? null)) {
                // line 37
                echo "<";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 37, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 37, $this->source), "html", null, true);
                echo ">";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "<li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 41, $this->source), "html", null, true);
                echo ">";
            } else {
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 43, $this->source), "html", null, true);
            }
        }
        // line 46
        echo "
";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "widget", [], "any", false, false, true, 47), "type", [], "any", false, false, true, 47) == "dropdown")) {
            // line 48
            echo "  <label id=\"facet_";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "id", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "_label\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Facet"));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "label", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</label>";
        }
        // line 50
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/facets/templates/facets-item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 50,  96 => 48,  94 => 47,  91 => 46,  87 => 43,  82 => 41,  72 => 39,  68 => 38,  63 => 37,  61 => 36,  56 => 33,  54 => 32,  51 => 31,  48 => 30,  46 => 29,  44 => 28,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/facets/templates/facets-item-list.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\modules\\contrib\\facets\\templates\\facets-item-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 28, "set" => 29, "for" => 38);
        static $filters = array("escape" => 27, "t" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 't'],
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
