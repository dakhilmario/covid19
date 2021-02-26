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
class __TwigTemplate_5a136348fd964736aa8c2eac026e6de01abd7cfe6506fc3205dd612c7b0827ad extends \Twig\Template
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
      <h3>Aantal besmettingen per dag in <span class=\"js-country\"></span></h3>
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
      <h3>Aantal doden per dag in <span class=\"js-country\"></span></h3>
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
        return new Source("
{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}

{# detail pagina #}
<div class=\"layout-container\">

  {% include directory ~  '/partials/header.html.twig' %}

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
      <h3>Aantal besmettingen per dag in <span class=\"js-country\"></span></h3>
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
      <h3>Aantal doden per dag in <span class=\"js-country\"></span></h3>
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

</div>{# /.layout-container #}
", "themes/covid/page--node--7.html.twig", "C:\\wamp64\\www\\corona-website\\covid19\\themes\\covid\\page--node--7.html.twig");
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
