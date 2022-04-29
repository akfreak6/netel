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

/* themes/custom/netel/templates/views-view-fields--card-footer-copyright--block.html.twig */
class __TwigTemplate_41ef070e9b99fb1df8c4cbf2b79567f5ca431046123b7d45fd88a1175114e9de extends \Twig\Template
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
<div class=\"layout-container\">
    <div class=\"copy\">
    ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_card_footer_copyright", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
    </div>
<div class=\"copy-icons\">
    <ul class=\"social-icons\">
\t    <li>
            <a href=\"#\" class=\"fa fa-facebook\" aria-hidden=\"true\"></a>
        </li>
\t    <li>
            <a href=\"#\" class=\"fa fa-twitter\" aria-hidden=\"true\"></a>
        </li>
\t    <li>
            <a href=\"#\" class=\"fa fa-dribbble\" aria-hidden=\"true\"></a>
        </li>
\t    <li>
            <a href=\"#\" class=\"fa fa-pinterest\" aria-hidden=\"true\"></a>
        </li>
\t    <li>
            <a href=\"#\" class=\"fa fa-behance\" aria-hidden=\"true\"></a>
        </li>
\t    <li>
            <a href=\"#\" class=\"fa fa-envelope-o\" aria-hidden=\"true\"></a>
        </li>
</ul>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/netel/templates/views-view-fields--card-footer-copyright--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<script src=\"https://kit.fontawesome.com/dd7e4df5bd.js\" crossorigin=\"anonymous\"></script>
<div class=\"layout-container\">
    <div class=\"copy\">
    {{fields.field_card_footer_copyright.content}}
    </div>
<div class=\"copy-icons\">
    <ul class=\"social-icons\">
\t    <li>
            <a href=\"#\" class=\"fa fa-facebook\" aria-hidden=\"true\"></a>
        </li>
\t    <li>
            <a href=\"#\" class=\"fa fa-twitter\" aria-hidden=\"true\"></a>
        </li>
\t    <li>
            <a href=\"#\" class=\"fa fa-dribbble\" aria-hidden=\"true\"></a>
        </li>
\t    <li>
            <a href=\"#\" class=\"fa fa-pinterest\" aria-hidden=\"true\"></a>
        </li>
\t    <li>
            <a href=\"#\" class=\"fa fa-behance\" aria-hidden=\"true\"></a>
        </li>
\t    <li>
            <a href=\"#\" class=\"fa fa-envelope-o\" aria-hidden=\"true\"></a>
        </li>
</ul>
</div>
</div>
", "themes/custom/netel/templates/views-view-fields--card-footer-copyright--block.html.twig", "/var/www/html/themes/custom/netel/templates/views-view-fields--card-footer-copyright--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
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
