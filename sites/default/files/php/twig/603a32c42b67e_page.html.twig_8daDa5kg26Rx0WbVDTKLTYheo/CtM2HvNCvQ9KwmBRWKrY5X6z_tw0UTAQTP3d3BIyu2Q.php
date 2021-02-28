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
class __TwigTemplate_6a38a4dff7229c7d22ff971588376d4a42409c2c18e5f27d6adac799f6800249 extends \Twig\Template
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
  <main class=\"container c-body__container\" role=\"main\" id=\"top\">

    
    <div class=\"layout-content\">
      ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
    </div>";
        // line 58
        echo "    <span class='c-top js-top-icon'>
    <i class=\"fa fa-chevron-up\"></i>
    </span>
  </main>

  ";
        // line 63
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "themes/covid/page.html.twig", 63)->display($context);
        // line 64
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
        return array (  65 => 64,  63 => 63,  56 => 58,  52 => 56,  45 => 51,  43 => 50,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/covid/page.html.twig", "C:\\wamp64\\www\\corona-website\\covid19\\themes\\covid\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 50);
        static $filters = array("escape" => 56);
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
