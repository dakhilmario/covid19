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

/* themes/covid/page--node--4.html.twig */
class __TwigTemplate_297c673f52401d619ce42fd8ec2141ace5a2903187f99a4ed1f9ec3a9d7b7e34 extends \Twig\Template
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
        echo "
";
        // line 49
        echo "
";
        // line 51
        echo "<div class=\"layout-container\">

  ";
        // line 53
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/covid/page--node--4.html.twig", 53)->display($context);
        // line 54
        echo "
  <main class=\"container c-body__container\" role=\"main\" id=\"top\">

    <div class=\"layout-content\">
        ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "

      <div class=\"c-graph\">

        <a
          class=\"js-vacbtn c-graph__button c-graph__button--active\"
          data-days=\"7\"
          href=\"#\"
          >Laatste 7 dagen</a
        >
        <a class=\"js-vacbtn c-graph__button ml-1\" data-days=\"14\" href=\"#\"
          >Laatste 14 dagen</a
        >
        <a class=\"js-vacbtn c-graph__button ml-1\" data-days=\"30\" href=\"#\"
          >Laatste 30 dagen</a
        >
        <a class=\"js-vacbtn c-graph__button ml-1\" data-days=\"all\" href=\"#\"
          >Vanaf het begin</a
        >
        <div class=\"c-graph__chart\">
          <div id=\"vacchart\"></div>
        </div>
    </div>
    ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "vaccinatie", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "

    ";
        // line 83
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/topicon.html.twig"), "themes/covid/page--node--4.html.twig", 83)->display($context);
        // line 84
        echo "    </div>";
        // line 85
        echo "

  </main>

  ";
        // line 89
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "themes/covid/page--node--4.html.twig", 89)->display($context);
        // line 90
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/covid/page--node--4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 90,  98 => 89,  92 => 85,  90 => 84,  88 => 83,  83 => 81,  57 => 58,  51 => 54,  49 => 53,  45 => 51,  42 => 49,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/covid/page--node--4.html.twig", "C:\\wamp64\\www\\corona-website\\covid19\\themes\\covid\\page--node--4.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 53);
        static $filters = array("escape" => 58);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
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
