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

/* themes/custom/netel/templates/views-view-fields--card-tile-two--block.html.twig */
class __TwigTemplate_cafc65794a3f98aaad075c2bbb4a2890e2d8c9e4ac8b1c08ddab8add4ad32365 extends \Twig\Template
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
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<script src=\"https://kit.fontawesome.com/dd7e4df5bd.js\" crossorigin=\"anonymous\"></script>
<link href=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path_success"] ?? null), 3, $this->source), "html", null, true);
        echo "/themes/custom/netel/css/style.css\" rel=\"stylesheet\"/>
<div class=\"card-middle\">
    <div class=\"card-middle-one\">
        <div class=\"card-middle-one-body\" style=\"background-color: transparent;\">
            <div class=\"card-middle-image\">
                ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_two_tile_image_left", [], "any", false, false, true, 8), "content", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>

    <div class=\"card-middle-two\" style=\"background-color: #191919;\">
        <div class=\"card-middle-two-body\" style=\"background-color:#191919;\">
            <h3 class=\"card-middle-two-title\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_two_tile_title", [], "any", false, false, true, 15), "content", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</h3> 
            <div class=\"card-middle-two-text\">
                ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_body_one", [], "any", false, false, true, 17), "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
                ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_body_two", [], "any", false, false, true, 18), "content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"learn-more\">
                <div class=\"learn-more-content\">";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_extra_pointer", [], "any", false, false, true, 21), "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/netel/templates/views-view-fields--card-tile-two--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  70 => 18,  66 => 17,  61 => 15,  51 => 8,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<script src=\"https://kit.fontawesome.com/dd7e4df5bd.js\" crossorigin=\"anonymous\"></script>
<link href=\"{{ base_path_success }}/themes/custom/netel/css/style.css\" rel=\"stylesheet\"/>
<div class=\"card-middle\">
    <div class=\"card-middle-one\">
        <div class=\"card-middle-one-body\" style=\"background-color: transparent;\">
            <div class=\"card-middle-image\">
                {{fields.field_two_tile_image_left.content}}
            </div>
        </div>
    </div>

    <div class=\"card-middle-two\" style=\"background-color: #191919;\">
        <div class=\"card-middle-two-body\" style=\"background-color:#191919;\">
            <h3 class=\"card-middle-two-title\">{{fields.field_two_tile_title.content}}</h3> 
            <div class=\"card-middle-two-text\">
                {{fields.field_body_one.content}}
                {{fields.field_body_two.content}}
            </div>
            <div class=\"learn-more\">
                <div class=\"learn-more-content\">{{fields.field_extra_pointer.content}}
                </div>
            </div>
        </div>
    </div>
</div>", "themes/custom/netel/templates/views-view-fields--card-tile-two--block.html.twig", "/var/www/html/themes/custom/netel/templates/views-view-fields--card-tile-two--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
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
