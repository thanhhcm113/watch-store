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

/* modules/contrib/commerce/modules/tax/templates/commerce-tax-resources.html.twig */
class __TwigTemplate_feb8a55e9362678ea111374ca9bb937c2828e18dc71fc61f5e3dd177f8f3d53d extends \Twig\Template
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
        // line 1
        echo "<div class=\"system-status-general-info commerce-tax-info\">
  <h2 class=\"system-status-general-info__header\">";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sales Tax Compliance Resources"));
        echo "</h2>
  <div class=\"system-status-general-info__items\">
    <div class=\"system-status-general-info__item commerce-tax__item\">
      <span class=\"commerce-tax__item-image commerce-tax__item-image--risk-assessment-map\"></span>
      <div class=\"commerce-tax__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sales Tax Risk Assessment"));
        echo "</h3>
        <p>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Get a breakdown of states where you may be obligated to collect sales tax. The free Avalara Sales Tax Risk Assessment can help you determine where your sales have created a need for you to register to collect and remit taxes."));
        echo "</p>
        <p><a href=\"https://avlr.co/2SkjWiX\" target=\"_blank\" class=\"button button--small button--primary\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Take the assessment"));
        echo "</a></p>
      </div>
    </div>
    <div class=\"system-status-general-info__item commerce-tax__item\">
      <span class=\"commerce-tax__item-image commerce-tax__item-image--avalara-logo\"></span>
      <div class=\"commerce-tax__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Try Avalara AvaTax for free"));
        echo "</h3>
        <p>";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Making sure you are charging the right tax rate in every state is hard. Avalara AvaTax helps by sending real-time sales tax calculations to your shopping cart. Drupal Commerce merchants can try AvaTax free with no commitment."));
        echo "</p>
        <p><a href=\"https://avlr.co/37lvVTV\" target=\"_blank\" class=\"button button--small button--primary\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Get started with AvaTax"));
        echo "</a></p>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/tax/templates/commerce-tax-resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  71 => 16,  67 => 15,  58 => 9,  54 => 8,  50 => 7,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/commerce/modules/tax/templates/commerce-tax-resources.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\modules\\contrib\\commerce\\modules\\tax\\templates\\commerce-tax-resources.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
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
