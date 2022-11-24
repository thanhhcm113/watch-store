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

/* modules/contrib/commerce/modules/order/templates/commerce-order--user.html.twig */
class __TwigTemplate_25d9f3f361bd4499b6e01c2bd61f90a6bcdcd2624cc70ab1e8c1f087851fbc60 extends \Twig\Template
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
        // line 20
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 20, $this->source), "html", null, true);
        echo ">
  <div class=\"customer-information\">
    ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "mail", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipping_information", [], "any", false, false, true, 23)) {
            // line 24
            echo "      <div class=\"customer-information__shipping\">
        <div class=\"field__label\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Shipping information"));
            echo "</div>
        ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipping_information", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 29
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billing_information", [], "any", false, false, true, 29)) {
            // line 30
            echo "      <div class=\"customer-billing\">
        <div class=\"field__label\">";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Billing information"));
            echo "</div>
        ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billing_information", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 35
        echo "  </div>
  <div class=\"order-information\">
    ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "completed", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
    ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "placed", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "
    ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
    ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "order_items", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
    ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total_price", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
    ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["additional_order_fields"] ?? null), 42, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/order/templates/commerce-order--user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 38,  84 => 37,  80 => 35,  74 => 32,  70 => 31,  67 => 30,  64 => 29,  58 => 26,  54 => 25,  51 => 24,  49 => 23,  45 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce/modules/order/templates/commerce-order--user.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\modules\\contrib\\commerce\\modules\\order\\templates\\commerce-order--user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23);
        static $filters = array("escape" => 20, "t" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
