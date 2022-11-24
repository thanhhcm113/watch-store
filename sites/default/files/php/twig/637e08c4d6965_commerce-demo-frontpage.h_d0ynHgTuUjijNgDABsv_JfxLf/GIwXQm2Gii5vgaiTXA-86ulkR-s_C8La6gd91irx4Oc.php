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

/* themes/contrib/belgrade/templates/commerce/commerce-demo-frontpage.html.twig */
class __TwigTemplate_640f5a693a63d0887e61bfd49c7f2f984ecd49369491727f07ae86c2fd302d97 extends \Twig\Template
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
        echo "<div class=\"container-fluid\">
  <div class=\"container\">
    <div class=\"featured-products\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h2 class=\"h1 text-align-center line\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Featured products"));
        echo "</h2>
        </div>
      </div>
      <div class=\"row\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["featured_product"]) {
            // line 11
            echo "          <div class=\"featured-seller col-md-4\">
            ";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["featured_product"], 12, $this->source)), "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featured_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </div>
    </div>
  </div>
</div>
<div class=\"testimonial container-fluid well well-lg well-primary\">
  <div class=\"container\">
    <div class=\"text-align-center row\">
      <div class=\"col-xs-10 col-xs-push-1\">
        <p class=\"testimonial__text h2\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Slow-carb paleo bicycle rights bushwick. Tote bag mustache man bun swag, tbh chartreuse synth stumptown portland cray."));
        echo "</p>
        <div class=\"testimonial__rating\">
          <i class=\"glyphicon glyphicon-star\"></i>
          <i class=\"glyphicon glyphicon-star\"></i>
          <i class=\"glyphicon glyphicon-star\"></i>
          <i class=\"glyphicon glyphicon-star\"></i>
          <i class=\"glyphicon glyphicon-star-empty\"></i>
        </div>
        <p>";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Nikola White, customer"));
        echo "</p>
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/contrib/belgrade/templates/commerce/commerce-demo-frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  79 => 23,  69 => 15,  60 => 12,  57 => 11,  53 => 10,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/commerce-demo-frontpage.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\contrib\\belgrade\\templates\\commerce\\commerce-demo-frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 10);
        static $filters = array("t" => 6, "escape" => 12);
        static $functions = array("render_var" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['t', 'escape'],
                ['render_var']
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
