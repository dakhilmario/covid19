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
        echo "  ";
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "themes/covid/page--front.html.twig", 12)->display($context);
        // line 13
        echo "
  <div class=\"container\">
    ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "

  </div>
    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 18)) {
            // line 19
            echo "    <footer class=\"c-footer\" role=\"contentinfo\">
    <div class='container'>
      ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 25
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
        return array (  70 => 25,  63 => 21,  59 => 19,  57 => 18,  51 => 15,  47 => 13,  44 => 12,  42 => 11,  39 => 1,);
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

  <div class=\"container\">
    {{page.content}}

  </div>
    {% if page.footer %}
    <footer class=\"c-footer\" role=\"contentinfo\">
    <div class='container'>
      {{ page.footer }}
      </div>
    </footer>
  {% endif %}

  </body>
</html>
", "themes/covid/page--front.html.twig", "C:\\wamp64\\www\\project3\\covid19\\themes\\covid\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 12, "if" => 18);
        static $filters = array("escape" => 15);
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
