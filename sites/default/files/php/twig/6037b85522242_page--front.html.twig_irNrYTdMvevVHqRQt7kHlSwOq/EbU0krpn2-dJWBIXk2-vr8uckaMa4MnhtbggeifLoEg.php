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

/* themes/covid/page--front.html.twig */
class __TwigTemplate_2e545b35ffda4d3c8cde9ab800ed5cb2eaa34f7ee05c6af9339c70119289fde9 extends \Twig\Template
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
        echo "<!DOCTYPE html>
";
        // line 11
        echo "  ";
        // line 12
        echo "
  ";
        // line 13
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/covid/page--front.html.twig", 13)->display($context);
        // line 14
        echo "
  <main class=\"container c-body__container\">
    
 <div class=\"container js-page\">
 <h1>Covid-19 in cijfers <i class=\"fa fa-globe\"></i></h1>
       <p>Laatst bijgewerkt op <span class=\"js-today\"></span></p>
      <div class=\"row\">
        <div class=\"col-12 col-xl-4 d-flex justify-content-between flex-column\">
          <h2 class=\"mb-1\">Positieve testen</h2>
          <div class=\"pl-4 js-gevallen\">
            <h3 class=\"js-cases\"></h3>
            <p class=\"js-casestext\"></p>
          </div>
 
          
        </div>
        <div class=\"col-12 col-xl-4 d-flex justify-content-between flex-column\">
          <h2 class=\"mb-1\">Overlijdens</h2>
          <div class=\"pl-4 js-overlijdens\">
            <h3 class=\"js-deaths\"></h3>
            <p class=\"js-deathstext\"></p>
          </div>
 
          
        </div>
        <div class=\"col-12 col-xl-4 d-flex justify-content-between flex-column\">
          <h2 class=\"mb-1\">Gezette vaccinaties</h2>
          <div class=\"pl-4 js-vaccinatie\">
            <h3 class=\"js-vac\"></h3>
            <p class=\"js-vactext\"></p>
          </div>
 
        </div>
      </div>
      <h2>Aantal besmettingen per dag wereldwijd</h2>
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
      <h2>Aantal doden per dag wereldwijd</span></h2>
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
        // line 97
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "themes/covid/page--front.html.twig", 97)->display($context);
        // line 98
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/covid/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 98,  134 => 97,  49 => 14,  47 => 13,  44 => 12,  42 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{# <html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Covid-19 in kaart</title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

  </head> #}
  {# <body> #}

  {% include directory ~  '/partials/header.html.twig' %}

  <main class=\"container c-body__container\">
    
 <div class=\"container js-page\">
 <h1>Covid-19 in cijfers <i class=\"fa fa-globe\"></i></h1>
       <p>Laatst bijgewerkt op <span class=\"js-today\"></span></p>
      <div class=\"row\">
        <div class=\"col-12 col-xl-4 d-flex justify-content-between flex-column\">
          <h2 class=\"mb-1\">Positieve testen</h2>
          <div class=\"pl-4 js-gevallen\">
            <h3 class=\"js-cases\"></h3>
            <p class=\"js-casestext\"></p>
          </div>
 
          
        </div>
        <div class=\"col-12 col-xl-4 d-flex justify-content-between flex-column\">
          <h2 class=\"mb-1\">Overlijdens</h2>
          <div class=\"pl-4 js-overlijdens\">
            <h3 class=\"js-deaths\"></h3>
            <p class=\"js-deathstext\"></p>
          </div>
 
          
        </div>
        <div class=\"col-12 col-xl-4 d-flex justify-content-between flex-column\">
          <h2 class=\"mb-1\">Gezette vaccinaties</h2>
          <div class=\"pl-4 js-vaccinatie\">
            <h3 class=\"js-vac\"></h3>
            <p class=\"js-vactext\"></p>
          </div>
 
        </div>
      </div>
      <h2>Aantal besmettingen per dag wereldwijd</h2>
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
      <h2>Aantal doden per dag wereldwijd</span></h2>
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


    {% include directory ~  '/partials/footer.html.twig' %}

  </body>
</html>
", "themes/covid/page--front.html.twig", "C:\\wamp64\\www\\corona-website\\covid19\\themes\\covid\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 13);
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
