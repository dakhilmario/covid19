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

/* themes/covid/page--node--7.html.twig */
class __TwigTemplate_c42e188ae64e61cfe349ebf1401837dbaf760e1aea21b4017b32665fb64bd0ad extends \Twig\Template
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
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/covid/page--node--7.html.twig", 53)->display($context);
        // line 54
        echo "
  <main class=\"container c-body__container\" role=\"main\" id=\"top\">

    
    <div class=\"container js-page\">
      <h1>
        De actuele situatie in <span class=\"js-country\"></span>
        <img class=\"js-countryimg\" src=\"\" alt=\"\" />
      </h1>
      <div class=\"row\">
        <div class=\"col-12 col-xl-4 d-flex justify-content-between flex-column\">
          <h2 class=\"mb-1\">Positieve testen</h2>
          <div class=\"pl-4 js-gevallen\">
            <h3 class=\"js-cases\"></h3>
            <p class=\"js-casestext\"></p>
          </div>
          <div class=\"c-graph--small\">
            <div id=\"totalcaseschart\"></div>
          </div>
        </div>
        <div class=\"col-12 col-xl-4 d-flex justify-content-between flex-column\">
          <h2 class=\"mb-1\">Overlijdens</h2>
          <div class=\"pl-4 js-overlijdens\">
            <h3 class=\"js-deaths\"></h3>
            <p class=\"js-deathstext\"></p>
          </div>
          <div class=\"c-graph--small\">
            <div id=\"totaldeathschart\"></div>
          </div>
        </div>
        <div class=\"col-12 col-xl-4 d-flex justify-content-between flex-column\">
          <h2 class=\"mb-1\">Gezette vaccinaties</h2>
          <div class=\"pl-4 js-vaccinatie\">
            <h3 class=\"js-vac\"></h3>
            <p class=\"js-vactext\"></p>
          </div>
          <div class=\"c-graph--small\">
            <div id=\"vacpiechart\"></div>
          </div>
        </div>
      </div>
      <h2>Aantal besmettingen per dag in <span class=\"js-country\"></span></h2>
      <div class=\"c-graph\">
        <a
          class=\"js-casesbtn c-graph__button c-graph__button--active\"
          data-days=\"7\"
          href=\"#\"
          >Laatste 7 dagen</a
        >
        <a class=\"js-casesbtn c-graph__button ml-1\" data-days=\"14\" href=\"#\"
          >Laatste 14 dagen</a
        >
        <a class=\"js-casesbtn c-graph__button ml-1\" data-days=\"30\" href=\"#\"
          >Laatste 30 dagen</a
        >
        <a class=\"js-casesbtn c-graph__button ml-1\" data-days=\"all\" href=\"#\"
          >Vanaf het begin</a
        >
        <div class=\"c-graph__chart\">
          <div id=\"caseschart\"></div>
        </div>
      </div>
      <h2>Aantal doden per dag in <span class=\"js-country\"></span></h2>
      <div class=\"c-graph\">
        <a
          class=\"js-deathsbtn c-graph__button c-graph__button--active\"
          data-days=\"7\"
          href=\"#\"
          >Laatste 7 dagen</a
        >
        <a class=\"js-deathsbtn c-graph__button ml-1\" data-days=\"14\" href=\"#\"
          >Laatste 14 dagen</a
        >
        <a class=\"js-deathsbtn c-graph__button ml-1\" data-days=\"30\" href=\"#\"
          >Laatste 30 dagen</a
        >
        <a class=\"js-deathsbtn c-graph__button ml-1\" data-days=\"all\" href=\"#\"
          >Vanaf het begin</a
        >
        <div class=\"c-graph__chart\">
          <div id=\"deathschart\"></div>
        </div>
      </div>
    </div>
    <span class='c-top js-top-icon'>
    <i class=\"fa fa-chevron-up\"></i>
    </span>
  </main>

  ";
        // line 143
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "themes/covid/page--node--7.html.twig", 143)->display($context);
        // line 144
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/covid/page--node--7.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 144,  142 => 143,  51 => 54,  49 => 53,  45 => 51,  42 => 49,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/covid/page--node--7.html.twig", "C:\\wamp64\\www\\corona-website\\covid19\\themes\\covid\\page--node--7.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 53);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
