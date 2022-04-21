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

/* themes/custom/Netel/templates/ds-3col-stacked-fluid.html.twig */
class __TwigTemplate_9bd1006a79f13f34e99cb1bf212bec060541017ae3e3ae6344b93b16ca3d6a69 extends \Twig\Template
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
        echo "
<link href=\"";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path_success"] ?? null), 2, $this->source), "html", null, true);
        echo "/themes/custom/Netel/css/style.css\" rel=\"stylesheet\"/>

";
        // line 4
        $context["left"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["left"] ?? null), 4, $this->source));
        // line 5
        $context["middle"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["middle"] ?? null), 5, $this->source));
        // line 6
        $context["right"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["right"] ?? null), 6, $this->source));
        // line 7
        echo "
";
        // line 8
        if (((($context["left"] ?? null) &&  !($context["right"] ?? null)) || (($context["right"] ?? null) &&  !($context["left"] ?? null)))) {
            // line 9
            echo "  ";
            $context["layout_class"] = "group-one-sidebar";
        } elseif ((        // line 10
($context["left"] ?? null) && ($context["right"] ?? null))) {
            // line 11
            echo "  ";
            $context["layout_class"] = "group-two-sidebars";
        } elseif (        // line 12
($context["left"] ?? null)) {
            // line 13
            echo "  ";
            $context["layout_class"] = "group-sidebar-left";
        } elseif (        // line 14
($context["right"] ?? null)) {
            // line 15
            echo "  ";
            $context["layout_class"] = "group-sidebar-right";
        }
        // line 17
        echo "
<";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null), 18, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["layout_class"] ?? null), 1 => "ds-3col-stacked-fluid", 2 => "clearfix"], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">

  ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_suffix"] ?? null), "contextual_links", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "

  <";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_wrapper"] ?? null), 22, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["header_attributes"] ?? null), "addClass", [0 => "group-header"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo ">
    ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 23, $this->source), "html", null, true);
        echo "
  </";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_wrapper"] ?? null), 24, $this->source), "html", null, true);
        echo ">

  ";
        // line 26
        if (($context["left"] ?? null)) {
            // line 27
            echo "    <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left_wrapper"] ?? null), 27, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["left_attributes"] ?? null), "addClass", [0 => "group-left"], "method", false, false, true, 27), 27, $this->source), "html", null, true);
            echo ">
      ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null), 28, $this->source), "html", null, true);
            echo "
    </";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left_wrapper"] ?? null), 29, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if (($context["middle"] ?? null)) {
            // line 33
            echo "    <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_wrapper"] ?? null), 33, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["middle_attributes"] ?? null), "addClass", [0 => "group-middle"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ">
      ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle"] ?? null), 34, $this->source), "html", null, true);
            echo "
    </";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_wrapper"] ?? null), 35, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 37
        echo "
  ";
        // line 38
        if (($context["right"] ?? null)) {
            // line 39
            echo "    <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right_wrapper"] ?? null), 39, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["right_attributes"] ?? null), "addClass", [0 => "group-right"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo ">
      ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null), 40, $this->source), "html", null, true);
            echo "
    </";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right_wrapper"] ?? null), 41, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 43
        echo "
  <";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_wrapper"] ?? null), 44, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["footer_attributes"] ?? null), "addClass", [0 => "group-footer"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo ">
    ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 45, $this->source), "html", null, true);
        echo "
  </";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_wrapper"] ?? null), 46, $this->source), "html", null, true);
        echo ">

<!------------------------------------------------------------------------------------>
      <div class=\"card-top\">
              <div class=\"card-top-one\" style=\"background-color: #c14000;\">
                  <svg class=\"circle\" height=\"100\" width=\"100\">
                      <circle cx=\"50\" cy=\"50\" r=\"35\" stroke=\"white\" stroke-width=\"2\" fill=\"transparent\" />
                  </svg> 
                  <img src=\"/themes/custom/Netel/images/laptop.png\" class=\"icon-image\" alt=\"laptop\" style=\"width:24px;height:24px\">
                  <LaptopIcon></LaptopIcon>
                  <div class=\"card-top-one-body\" style=\"background-color: #c14000;\">
                      <h3 class=\"card-top-one-title\">Time is the Essence</h3>
                      <p class=\"card-top-one-text\">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum magni odit ex voluptas illum aperiam delectus mollitia commodi possimus quidem!</p>
                  </div>
              </div>

              <div class=\"card-top-one\"  style=\"background-color: #009987;\">
                  <svg class=\"circle\" height=\"100\" width=\"100\">
                      <circle cx=\"50\" cy=\"50\" r=\"35\" stroke=\"white\" stroke-width=\"2\" fill=\"transparent\" />
                  </svg>
                  <img src=\"/themes/custom/Netel/images/phone.png\" class=\"icon-image\" alt=\"phone\" style=\"width:24px;height:24px\">
                  <div class=\"card-top-one-body\" style=\"background-color: #009987;\">
                      <h3 class=\"card-top-one-title\">The Best Piano Song</h3>
                      <p class=\"card-top-one-text\">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum magni odit ex voluptas illum aperiam delectus mollitia commodi possimus quidem!</p>
                  </div>
              </div>

              <div class=\"card-top-one\" style=\"background-color: #fea501;\">
                  <svg class=\"circle\" height=\"100\" width=\"100\">
                      <circle cx=\"50\" cy=\"50\" r=\"35\" stroke=\"white\" stroke-width=\"2\" fill=\"transparent\" />
                  </svg>
                  <img src=\"/themes/custom/Netel/images/support.png\" class=\"icon-image\" alt=\"support\" style=\"width:24px;height:24px\">
                  <div class=\"card-top-one-body\" style=\"background-color: #fea501;\">
                      <h3 class=\"card-top-one-title\">Grapes of Wrath</h3>
                      <p class=\"card-top-one-text\">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum magni odit ex voluptas illum aperiam delectus mollitia commodi possimus quidem!  
                      </p>
                  </div>
              </div>
          </div>

<!------------------------------------------------------------------------------------>
          <div class=\"card-middle\">
            <div class=\"card-middle-one\">
                <div class=\"card-middle-one-body\" style=\"background-color: transparent;\">
                    <img class=\"card-middle-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                </div>
            </div>

            <div class=\"card-middle-one\"  style=\"background-color: #191919;\">
                <div class=\"card-middle-one-body\" style=\"background-color:#191919;\">
                    <h3 class=\"card-middle-one-title\">Startup Business</h3>
                    <p class=\"card-middle-one-text\">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum magni odit ex voluptas illum aperiam delectus mollitia commodi possimus quidem!
                    </p>
                    <p class=\"card-middle-one-text\">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum magni odit ex voluptas illum aperiam delectus mollitia commodi possimus quidem!
                    </p>
                    <div class=\"learn-more\">
                        <div class=\"learn-more-content\">
                            LEARN MORE
                        </div>
                    </div>
                </div>
            </div>
          </div>
<!------------------------------------------------------------------------------------>
          <div class=\"card-bottom\">
            <div class=\"card-bottom-upper-text\">
                Recent Projects
            </div>
              <div class=\"card-bottom-lower-text\">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga aspernatur architecto suscipit debitis ullam repellat consequatur, ab magni hic, vel dolore!
              </div>
            <div class=\"card-bottom-outer\">
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                </div>
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                   </div>
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                   </div>
            </div>
            <div class=\"card-bottom-outer\">    
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                </div>
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                </div>
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                    </div>
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                </div>
            </div>
            <div class=\"learn-more-bottom\">
                <div class=\"learn-more-bottom-content\">
                    LEARN MORE
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------------------>
    <div class=\"card-down\">
        <div class=\"card-down-one\" style=\"background-color:#1c1c1c;\">
            <img src=\"/themes/custom/Netel/images/pogo.png\" class=\"icon-image1\" alt=\"laptop\">
            <div class=\"card-down-one-body\" style=\"background-color:#1c1c1c;\">
            <p class=\"card-down-one-text\">
                Onetel is free Bootstrap v3.3.5 HTML5 layout from templatemo website. Feel free to use it for your website.
            </p>
            <p> <img class=\"svg-icon\" src=\"/themes/custom/Netel/images/phone-solid.svg\"> info@company.com</p>
            <p> <img class=\"svg-icon\" src=\"/themes/custom/Netel/images/earth-asia-solid.svg\"> www.company.com</p>
            <p> <img class=\"svg-icon\" src=\"/themes/custom/Netel/images/envelope-regular.svg\"> 010-020-0340</p>
            </div>
        </div>

        <div class=\"card-down-two\"  style=\"background-color: #1c1c1c;\">
            <div class=\"card-down-two-body\" style=\"background-color: #1c1c1c;\">
                <h3 class=\"card-down-two-title\">Useful Links</h3>
                <p>
                    <p class=\"card-down-two-text\"> HTML5 Templates </p>
                    <p class=\"card-down-two-text\"> CSS3 Tricks </p>
                    <p class=\"card-down-two-text\"> Design Blog </p>
                    <p class=\"card-down-two-text\"> Animations </p>
                </p>
            </div>
        </div>

        <div class=\"card-down-one\" style=\"background-color: #1c1c1c;\">
            <div class=\"card-down-one-body\" style=\"background-color: #1c1c1c;\">
                <h3 class=\"card-down-one-title\">Newsletter</h3>
                <p class=\"card-down-one-text\">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis asperiores error eius?  
                </p>
                <form action=\"#\" method=\"post\">
                    <input class=\"mail-input\" type=\"text\" placeholder=\" Enter your Email\" id=\"fname\" type=\"email\" name=\"fname\">
                    <button class=\"mail-btn\" type=\"submit\" name=\"submit\" class=\"btn email\">Submit</button>
                </form>
            </div>
        </div>
    </div>
</";
        // line 192
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null), 192, $this->source), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "themes/custom/Netel/templates/ds-3col-stacked-fluid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 192,  174 => 46,  170 => 45,  165 => 44,  162 => 43,  157 => 41,  153 => 40,  147 => 39,  145 => 38,  142 => 37,  137 => 35,  133 => 34,  127 => 33,  125 => 32,  122 => 31,  117 => 29,  113 => 28,  107 => 27,  105 => 26,  100 => 24,  96 => 23,  91 => 22,  86 => 20,  80 => 18,  77 => 17,  73 => 15,  71 => 14,  68 => 13,  66 => 12,  63 => 11,  61 => 10,  58 => 9,  56 => 8,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<link href=\"{{ base_path_success }}/themes/custom/Netel/css/style.css\" rel=\"stylesheet\"/>

{% set left = left|render %}
{% set middle = middle|render %}
{% set right = right|render %}

{% if (left and not right) or (right and not left) %}
  {% set layout_class = 'group-one-sidebar' %}
{% elseif (left and right) %}
  {% set layout_class = 'group-two-sidebars' %}
{% elseif (left) %}
  {% set layout_class = 'group-sidebar-left' %}
{% elseif (right) %}
  {% set layout_class = 'group-sidebar-right' %}
{% endif %}

<{{ outer_wrapper }}{{ attributes.addClass(layout_class, 'ds-3col-stacked-fluid', 'clearfix') }}>

  {{ title_suffix.contextual_links }}

  <{{ header_wrapper }}{{ header_attributes.addClass('group-header') }}>
    {{ header }}
  </{{ header_wrapper }}>

  {% if left %}
    <{{ left_wrapper }}{{ left_attributes.addClass('group-left') }}>
      {{ left }}
    </{{ left_wrapper }}>
  {% endif %}

  {% if middle %}
    <{{ middle_wrapper }}{{ middle_attributes.addClass('group-middle') }}>
      {{ middle }}
    </{{ middle_wrapper }}>
  {% endif %}

  {% if right %}
    <{{ right_wrapper }}{{ right_attributes.addClass('group-right') }}>
      {{ right }}
    </{{ right_wrapper }}>
  {% endif %}

  <{{ footer_wrapper }}{{ footer_attributes.addClass('group-footer') }}>
    {{ footer }}
  </{{ footer_wrapper }}>

<!------------------------------------------------------------------------------------>
      <div class=\"card-top\">
              <div class=\"card-top-one\" style=\"background-color: #c14000;\">
                  <svg class=\"circle\" height=\"100\" width=\"100\">
                      <circle cx=\"50\" cy=\"50\" r=\"35\" stroke=\"white\" stroke-width=\"2\" fill=\"transparent\" />
                  </svg> 
                  <img src=\"/themes/custom/Netel/images/laptop.png\" class=\"icon-image\" alt=\"laptop\" style=\"width:24px;height:24px\">
                  <LaptopIcon></LaptopIcon>
                  <div class=\"card-top-one-body\" style=\"background-color: #c14000;\">
                      <h3 class=\"card-top-one-title\">Time is the Essence</h3>
                      <p class=\"card-top-one-text\">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum magni odit ex voluptas illum aperiam delectus mollitia commodi possimus quidem!</p>
                  </div>
              </div>

              <div class=\"card-top-one\"  style=\"background-color: #009987;\">
                  <svg class=\"circle\" height=\"100\" width=\"100\">
                      <circle cx=\"50\" cy=\"50\" r=\"35\" stroke=\"white\" stroke-width=\"2\" fill=\"transparent\" />
                  </svg>
                  <img src=\"/themes/custom/Netel/images/phone.png\" class=\"icon-image\" alt=\"phone\" style=\"width:24px;height:24px\">
                  <div class=\"card-top-one-body\" style=\"background-color: #009987;\">
                      <h3 class=\"card-top-one-title\">The Best Piano Song</h3>
                      <p class=\"card-top-one-text\">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum magni odit ex voluptas illum aperiam delectus mollitia commodi possimus quidem!</p>
                  </div>
              </div>

              <div class=\"card-top-one\" style=\"background-color: #fea501;\">
                  <svg class=\"circle\" height=\"100\" width=\"100\">
                      <circle cx=\"50\" cy=\"50\" r=\"35\" stroke=\"white\" stroke-width=\"2\" fill=\"transparent\" />
                  </svg>
                  <img src=\"/themes/custom/Netel/images/support.png\" class=\"icon-image\" alt=\"support\" style=\"width:24px;height:24px\">
                  <div class=\"card-top-one-body\" style=\"background-color: #fea501;\">
                      <h3 class=\"card-top-one-title\">Grapes of Wrath</h3>
                      <p class=\"card-top-one-text\">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum magni odit ex voluptas illum aperiam delectus mollitia commodi possimus quidem!  
                      </p>
                  </div>
              </div>
          </div>

<!------------------------------------------------------------------------------------>
          <div class=\"card-middle\">
            <div class=\"card-middle-one\">
                <div class=\"card-middle-one-body\" style=\"background-color: transparent;\">
                    <img class=\"card-middle-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                </div>
            </div>

            <div class=\"card-middle-one\"  style=\"background-color: #191919;\">
                <div class=\"card-middle-one-body\" style=\"background-color:#191919;\">
                    <h3 class=\"card-middle-one-title\">Startup Business</h3>
                    <p class=\"card-middle-one-text\">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum magni odit ex voluptas illum aperiam delectus mollitia commodi possimus quidem!
                    </p>
                    <p class=\"card-middle-one-text\">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum magni odit ex voluptas illum aperiam delectus mollitia commodi possimus quidem!
                    </p>
                    <div class=\"learn-more\">
                        <div class=\"learn-more-content\">
                            LEARN MORE
                        </div>
                    </div>
                </div>
            </div>
          </div>
<!------------------------------------------------------------------------------------>
          <div class=\"card-bottom\">
            <div class=\"card-bottom-upper-text\">
                Recent Projects
            </div>
              <div class=\"card-bottom-lower-text\">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga aspernatur architecto suscipit debitis ullam repellat consequatur, ab magni hic, vel dolore!
              </div>
            <div class=\"card-bottom-outer\">
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                </div>
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                   </div>
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                   </div>
            </div>
            <div class=\"card-bottom-outer\">    
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                </div>
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                </div>
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                    </div>
                <div class=\"card-bottom-inner\">
                        <img class=\"card-bottom-image\" src=\"/themes/custom/Netel/images/Man-with-Laptop.jpg\" alt=\"man-with-laptop\">
                </div>
            </div>
            <div class=\"learn-more-bottom\">
                <div class=\"learn-more-bottom-content\">
                    LEARN MORE
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------------------>
    <div class=\"card-down\">
        <div class=\"card-down-one\" style=\"background-color:#1c1c1c;\">
            <img src=\"/themes/custom/Netel/images/pogo.png\" class=\"icon-image1\" alt=\"laptop\">
            <div class=\"card-down-one-body\" style=\"background-color:#1c1c1c;\">
            <p class=\"card-down-one-text\">
                Onetel is free Bootstrap v3.3.5 HTML5 layout from templatemo website. Feel free to use it for your website.
            </p>
            <p> <img class=\"svg-icon\" src=\"/themes/custom/Netel/images/phone-solid.svg\"> info@company.com</p>
            <p> <img class=\"svg-icon\" src=\"/themes/custom/Netel/images/earth-asia-solid.svg\"> www.company.com</p>
            <p> <img class=\"svg-icon\" src=\"/themes/custom/Netel/images/envelope-regular.svg\"> 010-020-0340</p>
            </div>
        </div>

        <div class=\"card-down-two\"  style=\"background-color: #1c1c1c;\">
            <div class=\"card-down-two-body\" style=\"background-color: #1c1c1c;\">
                <h3 class=\"card-down-two-title\">Useful Links</h3>
                <p>
                    <p class=\"card-down-two-text\"> HTML5 Templates </p>
                    <p class=\"card-down-two-text\"> CSS3 Tricks </p>
                    <p class=\"card-down-two-text\"> Design Blog </p>
                    <p class=\"card-down-two-text\"> Animations </p>
                </p>
            </div>
        </div>

        <div class=\"card-down-one\" style=\"background-color: #1c1c1c;\">
            <div class=\"card-down-one-body\" style=\"background-color: #1c1c1c;\">
                <h3 class=\"card-down-one-title\">Newsletter</h3>
                <p class=\"card-down-one-text\">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis asperiores error eius?  
                </p>
                <form action=\"#\" method=\"post\">
                    <input class=\"mail-input\" type=\"text\" placeholder=\" Enter your Email\" id=\"fname\" type=\"email\" name=\"fname\">
                    <button class=\"mail-btn\" type=\"submit\" name=\"submit\" class=\"btn email\">Submit</button>
                </form>
            </div>
        </div>
    </div>
</{{ outer_wrapper }}>
", "themes/custom/Netel/templates/ds-3col-stacked-fluid.html.twig", "/var/www/html/themes/custom/Netel/templates/ds-3col-stacked-fluid.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 8);
        static $filters = array("escape" => 2, "render" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'render'],
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
