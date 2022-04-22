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

/* themes/custom/Netel/templates/page--netel.html.twig */
class __TwigTemplate_d70f10a024361fe6bd6b63e0403a97c9a90ab2557d191834c4c6a764e11ead4f extends \Twig\Template
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
        // line 53
        echo "<script src=\"https://kit.fontawesome.com/dd7e4df5bd.js\" crossorigin=\"anonymous\"></script>
<div id=\"page-wrapper\">
  <div id=\"page\"  style=\"background-color: #101010\">
      <div class=\"section layout-container clearfix\">
        ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
        ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
        ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
      </div>
    </header>
     <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
        <div class=\"navbar-header\">
          <a href=\"#\" class=\"navbar-brand\"><img src=\"/themes/custom/Netel/images/pogo.png\" class=\"img-responsive\" alt=\"logo\"></a>
        </div>
        <div class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"index.html\" class=\"active\">HOME</a></li>
            <li><a href=\"about.html\">ABOUT US</a></li>
            <li><a href=\"portfolio.html\">PORTFOLIO</a></li>
            <li><a href=\"contact.html\">CONTACT</a></li>
          </ul>
        </div>
\t  </div>
    ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 75)) {
            // line 76
            echo "      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 82
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 82)) {
            // line 83
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 89
        echo "    <img src=\"/themes/custom/Netel/images/new-home.jpg\" class=\"card-top-image\" alt=\"card top image\" />
      <div class=\"top-image-text\">
        <h3>welcome to</h3>
        <h1>Onetel Design Studios</h1> 
    </div>
    <div id=\"main-wrapper\"  style=\"background-color: #101010\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 103)) {
            // line 104
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 110
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 110)) {
            // line 111
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 117
        echo "      </div>
    </div>
    ";
        // line 119
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 119) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 119)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 119))) {
            // line 120
            echo "      <div class=\"featured-bottom\">
        <aside class=\"layout-container clearfix\" role=\"complementary\">
          ";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "
          ";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
          ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 127
        echo " 
    <footer class=\"site-footer\" style=\"display: block;font-size: 87.5%;line-height: 1.5;\">
      <div class=\"layout-container\">
        <div class=\"copy\">
          Copyright © 2084 Company Name
        </div>
        <div class=\"copy-icons\">
          <ul class=\"social-icons\">
            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
            <li><a href=\"#\" class=\"fa fa-dribbble\"></a></li>
            <li><a href=\"#\" class=\"fa fa-pinterest\"></a></li>
            <li><a href=\"#\" class=\"fa fa-behance\"></a></li>
            <li><a href=\"#\" class=\"fa fa-envelope-o\"></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/Netel/templates/page--netel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 127,  166 => 124,  162 => 123,  158 => 122,  154 => 120,  152 => 119,  148 => 117,  141 => 113,  137 => 111,  134 => 110,  127 => 106,  123 => 104,  121 => 103,  115 => 100,  108 => 96,  99 => 89,  92 => 85,  88 => 83,  85 => 82,  78 => 78,  74 => 76,  72 => 75,  53 => 59,  49 => 58,  45 => 57,  39 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bartik's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
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
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<script src=\"https://kit.fontawesome.com/dd7e4df5bd.js\" crossorigin=\"anonymous\"></script>
<div id=\"page-wrapper\">
  <div id=\"page\"  style=\"background-color: #101010\">
      <div class=\"section layout-container clearfix\">
        {{ page.secondary_menu }}
        {{ page.header }}
        {{ page.primary_menu }}
      </div>
    </header>
     <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
        <div class=\"navbar-header\">
          <a href=\"#\" class=\"navbar-brand\"><img src=\"/themes/custom/Netel/images/pogo.png\" class=\"img-responsive\" alt=\"logo\"></a>
        </div>
        <div class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"index.html\" class=\"active\">HOME</a></li>
            <li><a href=\"about.html\">ABOUT US</a></li>
            <li><a href=\"portfolio.html\">PORTFOLIO</a></li>
            <li><a href=\"contact.html\">CONTACT</a></li>
          </ul>
        </div>
\t  </div>
    {% if page.highlighted %}
      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          {{ page.highlighted }}
        </aside>
      </div>
    {% endif %}
    {% if page.featured_top %}
      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          {{ page.featured_top }}
        </aside>
      </div>
    {% endif %}
    <img src=\"/themes/custom/Netel/images/new-home.jpg\" class=\"card-top-image\" alt=\"card top image\" />
      <div class=\"top-image-text\">
        <h3>welcome to</h3>
        <h1>Onetel Design Studios</h1> 
    </div>
    <div id=\"main-wrapper\"  style=\"background-color: #101010\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        {{ page.breadcrumb }}
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            {{ page.content }}
          </section>
        </main>
        {% if page.sidebar_first %}
          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              {{ page.sidebar_first }}
            </aside>
          </div>
        {% endif %}
        {% if page.sidebar_second %}
          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              {{ page.sidebar_second }}
            </aside>
          </div>
        {% endif %}
      </div>
    </div>
    {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
      <div class=\"featured-bottom\">
        <aside class=\"layout-container clearfix\" role=\"complementary\">
          {{ page.featured_bottom_first }}
          {{ page.featured_bottom_second }}
          {{ page.featured_bottom_third }}
        </aside>
      </div>
    {% endif %} 
    <footer class=\"site-footer\" style=\"display: block;font-size: 87.5%;line-height: 1.5;\">
      <div class=\"layout-container\">
        <div class=\"copy\">
          Copyright © 2084 Company Name
        </div>
        <div class=\"copy-icons\">
          <ul class=\"social-icons\">
            <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
            <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
            <li><a href=\"#\" class=\"fa fa-dribbble\"></a></li>
            <li><a href=\"#\" class=\"fa fa-pinterest\"></a></li>
            <li><a href=\"#\" class=\"fa fa-behance\"></a></li>
            <li><a href=\"#\" class=\"fa fa-envelope-o\"></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
", "themes/custom/Netel/templates/page--netel.html.twig", "/var/www/html/themes/custom/Netel/templates/page--netel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 75);
        static $filters = array("escape" => 57);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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