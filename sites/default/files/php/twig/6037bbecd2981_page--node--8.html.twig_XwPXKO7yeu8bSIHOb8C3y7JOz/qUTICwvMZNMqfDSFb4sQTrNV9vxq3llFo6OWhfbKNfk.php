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

/* themes/covid/page--node--8.html.twig */
class __TwigTemplate_87c487befb08401d2e987093c80380efa5a64abcea35f9eade92f75ec0147368 extends \Twig\Template
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
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/covid/page--node--8.html.twig", 53)->display($context);
        // line 54
        echo "
  <main class=\"container c-body__container\" role=\"main\" id=\"top\">
    
    <div class=\"layout-content\">
        ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "

    ";
        // line 61
        echo "     <div class=\"c-graph\">
        <span class=\"c-graph__label\">Besmettingen per continent</span>
        <div class=\"c-graph__chart\">
          <div id=\"continentbarchart\"></div>
        </div>
      </div>

      ";
        // line 69
        echo "
      ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "eerste_graf", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "

    ";
        // line 73
        echo "    <div class=\"container\">
        <div id=\"mymap\" class=\"c-kleurkaart\"></div>
    </div>

    ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "kleur_kaart", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "

    ";
        // line 80
        echo "    <div class=\"c-graph\">
        <span class=\"c-graph__label\">Nieuwe besmettingen per land</span>
        <div class=\"c-graph__chart\">
          <div id=\"countrybarchart\"></div>
        </div>
      </div>
      
      ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tweede_graf", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "

      ";
        // line 90
        echo "      <div class=\"c-graph\">
        <span class=\"c-graph__label\"
          >Gemiddeld aantal sterfgevallen van de voorbije 7 dagen per
          continent</span
        >
        <div class=\"c-graph__chart c-graph__chart--lines\">
          <div id=\"continentschart\"></div>
        </div>
      </div>

    <span class='c-top js-top-icon'>
    <i class=\"fa fa-chevron-up\"></i>
    </span>
  </main>

  ";
        // line 105
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "themes/covid/page--node--8.html.twig", 105)->display($context);
        // line 106
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/covid/page--node--8.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 106,  121 => 105,  104 => 90,  99 => 87,  90 => 80,  85 => 77,  79 => 73,  74 => 70,  71 => 69,  62 => 61,  57 => 58,  51 => 54,  49 => 53,  45 => 51,  42 => 49,  39 => 1,);
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

{# actuele info pagina #}
<div class=\"layout-container\">

  {% include directory ~  '/partials/header.html.twig' %}

  <main class=\"container c-body__container\" role=\"main\" id=\"top\">
    
    <div class=\"layout-content\">
        {{ page.content }}

    {# eerste grafiek #}
     <div class=\"c-graph\">
        <span class=\"c-graph__label\">Besmettingen per continent</span>
        <div class=\"c-graph__chart\">
          <div id=\"continentbarchart\"></div>
        </div>
      </div>

      {# block eerste_graf  #}

      {{ page.eerste_graf }}

    {# gekleurde kaart #}
    <div class=\"container\">
        <div id=\"mymap\" class=\"c-kleurkaart\"></div>
    </div>

    {{ page.kleur_kaart }}

    {# 2de grafiek #}
    <div class=\"c-graph\">
        <span class=\"c-graph__label\">Nieuwe besmettingen per land</span>
        <div class=\"c-graph__chart\">
          <div id=\"countrybarchart\"></div>
        </div>
      </div>
      
      {{ page.tweede_graf }}

      {# 3de grafiek #}
      <div class=\"c-graph\">
        <span class=\"c-graph__label\"
          >Gemiddeld aantal sterfgevallen van de voorbije 7 dagen per
          continent</span
        >
        <div class=\"c-graph__chart c-graph__chart--lines\">
          <div id=\"continentschart\"></div>
        </div>
      </div>

    <span class='c-top js-top-icon'>
    <i class=\"fa fa-chevron-up\"></i>
    </span>
  </main>

  {% include directory ~  '/partials/footer.html.twig' %}

</div>{# /.layout-container #}
", "themes/covid/page--node--8.html.twig", "C:\\wamp64\\www\\corona-website\\covid19\\themes\\covid\\page--node--8.html.twig");
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
