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

/* themes/custom/netel/templates/views-view-fields--card-seven--block.html.twig */
class __TwigTemplate_dec858c50a1ac537957413e630a7ef21b8b0a75cb5b031c05e835f292e190082 extends \Twig\Template
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
<div class=\"card-bottom\">
    <div class=\"card-bottom-upper-text\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_seven_title", [], "any", false, false, true, 4), "content", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
    </div>
        <div class=\"card-bottom-lower-text\">
        ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_seven_text", [], "any", false, false, true, 7), "content", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
        </div>

    <div class=\"card-bottom-outer\">
        <div class=\"card-bottom-inner\">
            <div class=\"card-bottom-image\">
                ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_seven_r11", [], "any", false, false, true, 13), "content", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"card-bottom-inner\">
            <div class=\"card-bottom-image\">
                ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_seven_r12", [], "any", false, false, true, 18), "content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"card-bottom-inner\">
            <div class=\"card-bottom-image\">
                ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_seven_r13", [], "any", false, false, true, 23), "content", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
            </div>    
        </div>
    </div>

    <div class=\"card-bottom-outer-two\">
        <div class=\"card-bottom-inner-two\">
            <div class=\"card-bottom-image\">
                ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_seven_r21", [], "any", false, false, true, 31), "content", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"card-bottom-inner-two\">
            <div class=\"card-bottom-image\">
                ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_seven_r22", [], "any", false, false, true, 36), "content", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
            </div>    
        </div>
        <div class=\"card-bottom-inner-two\">
            <div class=\"card-bottom-image\">
                ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_seven_r23", [], "any", false, false, true, 41), "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
            </div>    
        </div>
        <div class=\"card-bottom-inner-two\">
            <div class=\"card-bottom-image\">
                ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_seven_r24", [], "any", false, false, true, 46), "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>

    <div class=\"learn-more-bottom\">
        <div class=\"learn-more-bottom-content\">
            ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_seven_extra_pointer", [], "any", false, false, true, 53), "content", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/netel/templates/views-view-fields--card-seven--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 53,  110 => 46,  102 => 41,  94 => 36,  86 => 31,  75 => 23,  67 => 18,  59 => 13,  50 => 7,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<script src=\"https://kit.fontawesome.com/dd7e4df5bd.js\" crossorigin=\"anonymous\"></script>
<div class=\"card-bottom\">
    <div class=\"card-bottom-upper-text\">{{fields.field_card_seven_title.content}}
    </div>
        <div class=\"card-bottom-lower-text\">
        {{fields.field_card_seven_text.content}}
        </div>

    <div class=\"card-bottom-outer\">
        <div class=\"card-bottom-inner\">
            <div class=\"card-bottom-image\">
                {{fields.field_card_seven_r11.content}}
            </div>
        </div>
        <div class=\"card-bottom-inner\">
            <div class=\"card-bottom-image\">
                {{fields.field_card_seven_r12.content}}
            </div>
        </div>
        <div class=\"card-bottom-inner\">
            <div class=\"card-bottom-image\">
                {{fields.field_card_seven_r13.content}}
            </div>    
        </div>
    </div>

    <div class=\"card-bottom-outer-two\">
        <div class=\"card-bottom-inner-two\">
            <div class=\"card-bottom-image\">
                {{fields.field_card_seven_r21.content}}
            </div>
        </div>
        <div class=\"card-bottom-inner-two\">
            <div class=\"card-bottom-image\">
                {{fields.field_card_seven_r22.content}}
            </div>    
        </div>
        <div class=\"card-bottom-inner-two\">
            <div class=\"card-bottom-image\">
                {{fields.field_card_seven_r23.content}}
            </div>    
        </div>
        <div class=\"card-bottom-inner-two\">
            <div class=\"card-bottom-image\">
                {{fields.field_card_seven_r24.content}}
            </div>
        </div>
    </div>

    <div class=\"learn-more-bottom\">
        <div class=\"learn-more-bottom-content\">
            {{fields.field_card_seven_extra_pointer.content}}
        </div>
    </div>
</div>
", "themes/custom/netel/templates/views-view-fields--card-seven--block.html.twig", "/var/www/html/themes/custom/netel/templates/views-view-fields--card-seven--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
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
