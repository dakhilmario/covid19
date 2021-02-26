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
class __TwigTemplate_3b738ba5e965ef638fb13048bdda9a90a4c28773ccea5c30191430b967c0bc44 extends \Twig\Template
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
        echo "  <div class=\"c-kaart\">
      <div class=\"c-filter\">
        <header class=\"c-filter__header\">
          <svg
            xmlns=\"http://www.w3.org/2000/svg\"
            viewBox=\"0 0 28.068 28.03\"
            class=\"c-filter__icon\"
          >
            <path
              d=\"M23.827,0H1.173A1.173,1.173,0,0,0,.345,2l9.03,9.032V21.094a1.172,1.172,0,0,0,.5.96l3.906,2.733a1.173,1.173,0,0,0,1.844-.96V11.032L24.656,2A1.173,1.173,0,0,0,23.827,0Z\"
              transform=\"translate(1.534 1.5)\"
              fill=\"none\"
              stroke=\"#344b5e\"
              stroke-width=\"3\"
            />
          </svg>
          <p class=\"c-filter__head-title\">Filter</p>
        </header>
        <form class=\"c-filter__form-items\" autocomplete=\"off\">
          <div class=\"c-filter__form-item\">
            <input
              type=\"checkbox\"
              name=\"checkboxZoekOpLand\"
              id=\"checkboxZoekOpLand\"
              class=\"c-filter__checkbox\"
            />
            <div class=\"c-filter__toggle\"></div>
            <label for=\"checkboxZoekOpLand\" class=\"c-filter__label\">
              Zoek op land
            </label>
            <div class=\"c-filter__dropdown\">
              <input
                type=\"search\"
                name=\"searchZoekOpLand\"
                id=\"searchZoekOpLand\"
                placeholder=\"Typ om een land te zoeken\"
                class=\"c-filter__searchbar js-search-zoek-op-land\"
              />
              <div class=\"c-filter__search-results js-search-results\"></div>
            </div>
          </div>
          <div class=\"c-filter__form-item\">
            <input
              type=\"checkbox\"
              name=\"checkboxAantalBesmettingen\"
              id=\"checkboxAantalBesmettingen\"
              class=\"c-filter__checkbox\"
            />
            <div class=\"c-filter__toggle\"></div>
            <label for=\"checkboxAantalBesmettingen\" class=\"c-filter__label\">
              Aantal besmettingen
            </label>

            <div class=\"c-filter__dropdown\">
              <div class=\"c-filter__range\">
                <div class=\"c-filter__range--middle\">
                  <div class=\"c-filter__range--multirange\">
                    <input
                      class=\"c-filter__range--multirange-left js-range-cases-min\"
                      type=\"range\"
                      id=\"cases-left\"
                      step=\"10\"
                      min=\"0\"
                      max=\"100000\"
                      value=\"20000\"
                    />
                    <input
                      class=\"c-filter__range--multirange-right js-range-cases-max\"
                      type=\"range\"
                      id=\"cases-right\"
                      step=\"10\"
                      min=\"0\"
                      max=\"100000\"
                      value=\"80000\"
                    />
                    <div class=\"c-filter__range--slider\">
                      <div class=\"c-filter__range--slider__track\"></div>
                      <div
                        class=\"c-filter__range--slider__range js-range-cases-range\"
                      ></div>
                      <div
                        class=\"c-filter__range--slider__thumb c-filter__range--slider__thumb--left js-range-cases-left\"
                        data-left=\"584\"
                      ></div>
                      <div
                        class=\"c-filter__range--slider__thumb c-filter__range--slider__thumb--right js-range-cases-right\"
                        data-right=\"584\"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"c-filter__form-item\">
            <input
              type=\"checkbox\"
              name=\"checkboxAantalDoden\"
              id=\"checkboxAantalDoden\"
              class=\"c-filter__checkbox\"
            />
            <div class=\"c-filter__toggle\"></div>
            <label for=\"checkboxAantalDoden\" class=\"c-filter__label\">
              Aantal overlijdens
            </label>

            <div class=\"c-filter__dropdown\">
              <div class=\"c-filter__range\">
                <div class=\"c-filter__range--middle\">
                  <div class=\"c-filter__range--multirange\">
                    <input
                      class=\"c-filter__range--multirange-left js-range-deaths-min\"
                      type=\"range\"
                      id=\"deaths-left\"
                      step=\"10\"
                      min=\"0\"
                      max=\"5000\"
                      value=\"1000\"
                    />
                    <input
                      class=\"c-filter__range--multirange-right js-range-deaths-max\"
                      type=\"range\"
                      id=\"deaths-right\"
                      step=\"10\"
                      min=\"0\"
                      max=\"5000\"
                      value=\"4000\"
                    />
                    <div class=\"c-filter__range--slider\">
                      <div class=\"c-filter__range--slider__track\"></div>
                      <div
                        class=\"c-filter__range--slider__range js-range-deaths-range\"
                      ></div>
                      <div
                        class=\"c-filter__range--slider__thumb c-filter__range--slider__thumb--left js-range-deaths-left\"
                        data-left=\"584\"
                      ></div>
                      <div
                        class=\"c-filter__range--slider__thumb c-filter__range--slider__thumb--right js-range-deaths-right\"
                        data-right=\"584\"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <button class=\"c-filter__form-submit js-submit\">
              Filters toepassen
            </button>
          </div>
        </form>
      </div>
      <div id=\"map\" class=\"c-kaart__kaart\"></div>
  </div> ";
        // line 170
        echo "    <div class=\"container\">
      <div
        class=\"c-kaart__popup c-kaart__popup--small-screen js-kaart-popup d-sm-none\"
      >
        <p class=\"c-kaart__popup__land\">
          <img
            src=\"https://disease.sh/assets/img/flags/be.png\"
            alt=\"\"
            class=\"c-kaart__popup__vlag\"
          />
          België
        </p>
        <div class=\"c-kaart__popup__cijfers\">
          <div>
            <p class=\"c-kaart__popup__title\">Aantal besmettingen:</p>
            <p>1.059</p>
          </div>
          <div>
            <p class=\"c-kaart__popup__title\">Aantal doden:</p>
            <p>60.059.059</p>
          </div>
          <div>
            <p class=\"c-kaart__popup__title\">Aantal herstelde gevallen:</p>
            <p>60</p>
          </div>
        </div>
        <div class=\"c-kaart__popup__link\">
          <a href=\"#\">Bekijk alle cijfers</a>
        </div>
      </div>
    </div>

    
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
      </div> ";
        // line 234
        echo "      <h2>Aantal besmettingen per dag wereldwijd</h2>
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
      </div> ";
        // line 255
        echo "      <h2>Aantal doden per dag wereldwijd</span></h2>
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
      </div>";
        // line 276
        echo "    </div> ";
        // line 277
        echo "  <span class='c-top js-top-icon'>
    <i class=\"fa fa-chevron-up\"></i>
  </span>
  </main>


    ";
        // line 283
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "themes/covid/page--front.html.twig", 283)->display($context);
        // line 284
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
        return array (  327 => 284,  325 => 283,  317 => 277,  315 => 276,  293 => 255,  271 => 234,  206 => 170,  49 => 14,  47 => 13,  44 => 12,  42 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/covid/page--front.html.twig", "C:\\wamp64\\www\\corona-website\\covid19\\themes\\covid\\page--front.html.twig");
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
