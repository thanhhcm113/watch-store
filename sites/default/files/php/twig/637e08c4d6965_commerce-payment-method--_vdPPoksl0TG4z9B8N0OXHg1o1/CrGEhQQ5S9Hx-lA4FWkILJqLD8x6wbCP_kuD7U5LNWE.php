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

/* modules/contrib/commerce/modules/payment/templates/commerce-payment-method--credit-card.html.twig */
class __TwigTemplate_ad2596f98152f877af6f03a0d79bd2a6074fe2fdb2ecb4aebfaab0fb1d836e40 extends \Twig\Template
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
        // line 21
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 21, $this->source), "html", null, true);
        echo ">
  <div class=\"field field--name-label\">
    ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["payment_method"] ?? null), "label", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
    <span class=\"payment-method-icon payment-method-icon--";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_method_entity"] ?? null), "card_type", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "\"></span>
  </div>
  ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["payment_method_entity"] ?? null), "isReusable", [], "any", false, false, true, 26) && twig_get_attribute($this->env, $this->source, ($context["payment_method_entity"] ?? null), "expiresTime", [], "any", false, false, true, 26))) {
            // line 27
            echo "    <div class=\"field field--name-expires\">
      ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Expires"));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["payment_method_entity"] ?? null), "expiresTime", [], "any", false, false, true, 28), 28, $this->source), "custom", "n/Y"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 31
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["payment_method"] ?? null), "billing_profile", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/payment/templates/commerce-payment-method--credit-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 31,  59 => 28,  56 => 27,  54 => 26,  49 => 24,  45 => 23,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce/modules/payment/templates/commerce-payment-method--credit-card.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\modules\\contrib\\commerce\\modules\\payment\\templates\\commerce-payment-method--credit-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 26);
        static $filters = array("escape" => 21, "t" => 28, "format_date" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'format_date'],
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
