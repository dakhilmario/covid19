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

/* themes/covid/partials/header.html.twig */
class __TwigTemplate_76df973593066bc1b6841d063f503c7396a9ed488508e06b4aa5d5620806895a extends \Twig\Template
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
        echo "<header>
  ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "
   <nav class=\"c-navbar\">
    <div class=\"container c-navbar__container\">
       ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
         <span class=\"c-hammenu\">
          <span class=\"c-hammenu__bar c-hammenu__bar--1\"></span>
          <span class=\"c-hammenu__bar c-hammenu__bar--2\"></span>
          <span class=\"c-hammenu__bar c-hammenu__bar--3\"></span>
        </span>
    ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_navigation", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
      </div>
  </header>";
    }

    public function getTemplateName()
    {
        return "themes/covid/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  48 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
  {{ page.header }}
   <nav class=\"c-navbar\">
    <div class=\"container c-navbar__container\">
       {{page.site}}
         <span class=\"c-hammenu\">
          <span class=\"c-hammenu__bar c-hammenu__bar--1\"></span>
          <span class=\"c-hammenu__bar c-hammenu__bar--2\"></span>
          <span class=\"c-hammenu__bar c-hammenu__bar--3\"></span>
        </span>
    {{page.main_navigation}}
      </div>
  </header>", "themes/covid/partials/header.html.twig", "C:\\wamp64\\www\\corona-website\\covid19\\themes\\covid\\partials\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
