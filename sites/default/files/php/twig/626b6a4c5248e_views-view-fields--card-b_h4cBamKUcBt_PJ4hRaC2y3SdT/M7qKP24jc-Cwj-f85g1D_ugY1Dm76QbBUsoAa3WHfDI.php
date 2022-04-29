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

/* themes/custom/netel/templates/views-view-fields--card-bottom-two--block.html.twig */
class __TwigTemplate_22bdad1e0ee0d2d81c29e76e1fef662fdd279707b4684f61a30b316dcc46c6f9 extends \Twig\Template
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
<div class=\"card-down-one\">
    <div class=\"card-down-two\">
        <div class=\"card-down-two-body\">
            <div class=\"card-down-two-title\">
                <h3 class=\"card-down-two-title\">
                    ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_bottom_two_text_1", [], "any", false, false, true, 8), "content", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
                </h3>
            </div>
            <p>
                &nbsp;
            </p>
                <p class=\"card-down-two-text\">";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_bottom_two_link_1", [], "any", false, false, true, 14), "content", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</p>
                <p class=\"card-down-two-text\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_bottom_two_link_2", [], "any", false, false, true, 15), "content", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</p>
                <p class=\"card-down-two-text\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_bottom_two_link_3", [], "any", false, false, true, 16), "content", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</p>
                <p class=\"card-down-two-text\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_bottom_two_link_4", [], "any", false, false, true, 17), "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</p>
            <p>&nbsp;</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/netel/templates/views-view-fields--card-bottom-two--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  65 => 16,  61 => 15,  57 => 14,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<script src=\"https://kit.fontawesome.com/dd7e4df5bd.js\" crossorigin=\"anonymous\"></script>
<div class=\"card-down-one\">
    <div class=\"card-down-two\">
        <div class=\"card-down-two-body\">
            <div class=\"card-down-two-title\">
                <h3 class=\"card-down-two-title\">
                    {{fields.field_card_bottom_two_text_1.content}}
                </h3>
            </div>
            <p>
                &nbsp;
            </p>
                <p class=\"card-down-two-text\">{{fields.field_card_bottom_two_link_1.content}}</p>
                <p class=\"card-down-two-text\">{{fields.field_card_bottom_two_link_2.content}}</p>
                <p class=\"card-down-two-text\">{{fields.field_card_bottom_two_link_3.content}}</p>
                <p class=\"card-down-two-text\">{{fields.field_card_bottom_two_link_4.content}}</p>
            <p>&nbsp;</p>
        </div>
    </div>
</div>", "themes/custom/netel/templates/views-view-fields--card-bottom-two--block.html.twig", "/var/www/html/themes/custom/netel/templates/views-view-fields--card-bottom-two--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 8);
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
