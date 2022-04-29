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

/* themes/custom/netel/templates/views-view-fields--card-bottom-three--block.html.twig */
class __TwigTemplate_e8878ba0c9d4ee0b20871fe0f741d686d44df1f54b81dfd37d25b6c212f6799e extends \Twig\Template
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
<div class=\"card-down-one-two\">
    <div class=\"card-down-one-two-body\">
        <h3 class=\"card-down-one-two-title\">
            ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_bottom_three_title", [], "any", false, false, true, 6), "content", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
        </h3>
        <p class=\"card-down-one-two-text\">
            ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_bottom_three_body", [], "any", false, false, true, 9), "content", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
        </p>
        <form action=\"#\" method=\"post\">
            <input class=\"mail-input\" id=\"fname\" name=\"fname\" placeholder=\" Enter your Email\" type=\"text\" />
            <button class=\"mail-btn\" name=\"submit\" type=\"submit\">Submit</button>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/netel/templates/views-view-fields--card-bottom-three--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<script src=\"https://kit.fontawesome.com/dd7e4df5bd.js\" crossorigin=\"anonymous\"></script>
<div class=\"card-down-one-two\">
    <div class=\"card-down-one-two-body\">
        <h3 class=\"card-down-one-two-title\">
            {{fields.field_card_bottom_three_title.content}}
        </h3>
        <p class=\"card-down-one-two-text\">
            {{fields.field_card_bottom_three_body.content}}
        </p>
        <form action=\"#\" method=\"post\">
            <input class=\"mail-input\" id=\"fname\" name=\"fname\" placeholder=\" Enter your Email\" type=\"text\" />
            <button class=\"mail-btn\" name=\"submit\" type=\"submit\">Submit</button>
        </form>
    </div>
</div>
", "themes/custom/netel/templates/views-view-fields--card-bottom-three--block.html.twig", "/var/www/html/themes/custom/netel/templates/views-view-fields--card-bottom-three--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
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
