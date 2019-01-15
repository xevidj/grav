<?php

/* partials/showcase.html.twig */
class __TwigTemplate_25f4b72a4c14809dde7956bfa0bf91419a798beada46a38e8f7e389eb8de26e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["bsTools"] = $this->loadTemplate("macros/bootstrap_tools.html.twig", "partials/showcase.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["showcase_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_width", array()), 1200);
        // line 4
        $context["showcase_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_height", array()), 800);
        // line 5
        $context["showcase_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_file", array());
        // line 6
        $context["showcase_image_actions"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_actions", array());
        // line 7
        echo "
";
        // line 8
        if (($context["showcase_image_file"] ?? null)) {
            // line 9
            echo "    ";
            $context["showcase_image"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["showcase_image_file"] ?? null), array(), "array");
        } else {
            // line 11
            echo "    ";
            $context["showcase_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        }
        // line 13
        echo "
";
        // line 14
        if (($context["showcase_image"] ?? null)) {
            // line 15
            echo "    ";
            if (($context["showcase_image_actions"] ?? null)) {
                // line 16
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["showcase_image_actions"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["arg"]) {
                    // line 17
                    echo "            ";
                    $context["showcase_image"] = $this->getAttribute(($context["showcase_image"] ?? null), $context["key"], _twig_default_filter(twig_split_filter($this->env, $context["arg"], ","), array()));
                    // line 18
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['arg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "    ";
            } else {
                // line 20
                echo "        ";
                $context["showcase_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["showcase_image"] ?? null), "cropResize", array(0 => ($context["showcase_image_width"] ?? null), 1 => ($context["showcase_image_height"] ?? null)), "method"), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -125), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
                // line 21
                echo "    ";
            }
            // line 22
            echo "<div class=\"modular-row showcase text-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), "light");
            echo "\" style=\"background-image: url(";
            echo $this->getAttribute(($context["showcase_image"] ?? null), "url", array());
            echo ");\">
    ";
        } else {
            // line 24
            echo "    <div class=\"modular-row box-inset-shadow showcase-text ";
            echo $context["bsTools"]->getstyle($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), "primary"));
            echo "\">
        ";
        }
        // line 26
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-";
        // line 28
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "align", array()), "center");
        echo "\">
                    ";
        // line 29
        echo ($context["content"] ?? null);
        echo "
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 31
            echo "                        <a class=\"btn btn-";
            if (($this->getAttribute($context["button"], "no_outline", array()) != true)) {
                echo "outline-";
            }
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["button"], "style", array()), "light");
            echo " btn-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["button"], "size", array()), "lg");
            echo "\" href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "partials/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 33,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 26,  84 => 24,  76 => 22,  73 => 21,  70 => 20,  67 => 19,  61 => 18,  58 => 17,  53 => 16,  50 => 15,  48 => 14,  45 => 13,  41 => 11,  37 => 9,  35 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"macros/bootstrap_tools.html.twig\" as bsTools %}

{% set showcase_image_width  = page.header.image_width|defined(1200) %}
{% set showcase_image_height = page.header.image_height|defined(800) %}
{% set showcase_image_file = page.header.image_file %}
{% set showcase_image_actions = page.header.image_actions %}

{% if showcase_image_file %}
    {% set showcase_image = page.media.images[showcase_image_file] %}
{% else %}
    {% set showcase_image = page.media.images|first %}
{% endif %}

{% if showcase_image %}
    {% if showcase_image_actions %}
        {% for key, arg in showcase_image_actions %}
            {% set showcase_image = attribute( showcase_image, key, arg|split(',')|default([]) ) %}
        {% endfor %}
    {% else %}
        {% set showcase_image = showcase_image.cropResize(showcase_image_width,showcase_image_height).grayscale().contrast(20).brightness(-125).colorize(-35,81,122) %}
    {% endif %}
<div class=\"modular-row showcase text-{{ page.header.style|defined('light') }}\" style=\"background-image: url({{ showcase_image.url }});\">
    {% else %}
    <div class=\"modular-row box-inset-shadow showcase-text {{ bsTools.style(page.header.style|defined('primary')) }}\">
        {% endif %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-{{ page.header.align|defined('center')}}\">
                    {{ content }}
                    {% for button in page.header.buttons %}
                        <a class=\"btn btn-{% if button.no_outline != true %}outline-{% endif %}{{ button.style|defined('light') }} btn-{{ button.size|defined('lg') }}\" href=\"{{ button.url }}\">{{ button.text }}</a>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
", "partials/showcase.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\bootstrap-blog\\templates\\partials\\showcase.html.twig");
    }
}
