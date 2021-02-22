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

/* themes/covid/page.html.twig */
class __TwigTemplate_9f38b1745dd2e35cf9b659a831149f167e20645773f9b6fec7ad535bea73f7ad extends \Twig\Template
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
        // line 48
        echo "<div class=\"layout-container\">

  ";
        // line 50
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/covid/page.html.twig", 50)->display($context);
        // line 51
        echo "
  <main class=\"container c-body__container\" role=\"main\">

    <span class='c-top'>
    <i class=\"fas fa-chevron-circle-up\"></i>
    
    </span>
    <div class=\"layout-content\">
      ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
    </div>";
        // line 61
        echo "    <i class=\"fas fa-chevron-circle-up\"></i>
    ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 62)) {
            // line 63
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 67
        echo "
    ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 68)) {
            // line 69
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 73
        echo "
  </main>

  ";
        // line 76
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "themes/covid/page.html.twig", 76)->display($context);
        // line 77
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/covid/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 77,  92 => 76,  87 => 73,  81 => 70,  78 => 69,  76 => 68,  73 => 67,  67 => 64,  64 => 63,  62 => 62,  59 => 61,  55 => 59,  45 => 51,  43 => 50,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
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
<div class=\"layout-container\">

  {% include directory ~  '/partials/header.html.twig' %}

  <main class=\"container c-body__container\" role=\"main\">

    <span class='c-top'>
    <i class=\"fas fa-chevron-circle-up\"></i>
    
    </span>
    <div class=\"layout-content\">
      {{ page.content }}
    </div>{# /.layout-content #}
    <i class=\"fas fa-chevron-circle-up\"></i>
    {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>

  {% include directory ~  '/partials/footer.html.twig' %}

</div>{# /.layout-container #}
", "themes/covid/page.html.twig", "C:\\wamp64\\www\\corona-website\\covid19\\themes\\covid\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 50, "if" => 62);
        static $filters = array("escape" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
