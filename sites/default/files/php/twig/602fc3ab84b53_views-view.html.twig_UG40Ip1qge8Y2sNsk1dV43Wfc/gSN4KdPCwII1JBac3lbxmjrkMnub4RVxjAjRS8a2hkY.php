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

/* themes/covid/templates/views/views-view.html.twig */
class __TwigTemplate_18029bd69f89d9cf4d2bc1e4e0584ebf33594a392905790dc3c0e39b2dd5c4b4 extends \Twig\Template
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
        // line 34
        $context["classes"] = [0 => ((        // line 35
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 35, $this->source))) : (""))];
        // line 38
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo ">
  ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 39, $this->source), "html", null, true);
        echo "
  ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 40, $this->source), "html", null, true);
        echo "
  ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 41, $this->source), "html", null, true);
        echo "

  ";
        // line 43
        if (($context["header"] ?? null)) {
            // line 44
            echo "    <header>
      ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 45, $this->source), "html", null, true);
            echo "
    </header>
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 49, $this->source), "html", null, true);
        echo "
  ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 50, $this->source), "html", null, true);
        echo "

  ";
        // line 52
        if (($context["rows"] ?? null)) {
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 53, $this->source), "html", null, true);
            echo "
  ";
        } elseif (        // line 54
($context["empty"] ?? null)) {
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 55, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 57
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 57, $this->source), "html", null, true);
        echo "

  ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 59, $this->source), "html", null, true);
        echo "
  ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 60, $this->source), "html", null, true);
        echo "

  ";
        // line 62
        if (($context["footer"] ?? null)) {
            // line 63
            echo "    <footer>
      ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 64, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 67
        echo "
  ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 68, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/covid/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 68,  122 => 67,  116 => 64,  113 => 63,  111 => 62,  106 => 60,  102 => 59,  96 => 57,  91 => 55,  89 => 54,  85 => 53,  83 => 52,  78 => 50,  74 => 49,  71 => 48,  65 => 45,  62 => 44,  60 => 43,  55 => 41,  51 => 40,  47 => 39,  42 => 38,  40 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A CSS-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   JavaScript.
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {{ title }}
  {{ title_suffix }}

  {% if header %}
    <header>
      {{ header }}
    </header>
  {% endif %}

  {{ exposed }}
  {{ attachment_before }}

  {% if rows -%}
    {{ rows }}
  {% elseif empty -%}
    {{ empty }}
  {% endif %}
  {{ pager }}

  {{ attachment_after }}
  {{ more }}

  {% if footer %}
    <footer>
      {{ footer }}
    </footer>
  {% endif %}

  {{ feed_icons }}
</div>
", "themes/covid/templates/views/views-view.html.twig", "C:\\wamp64\\www\\corona-website\\covid19\\themes\\covid\\templates\\views\\views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 43);
        static $filters = array("escape" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
