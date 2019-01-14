<?php

/* partials/base.html.twig */
class __TwigTemplate_ea979f1d5f139beb777e32ff4c91df77cbdf8a236cca6dfe094fdeff1de1eeb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'showcase' => array($this, 'block_showcase'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        $context["bsTools"] = $this->loadTemplate("macros/bootstrap_tools.html.twig", "partials/base.html.twig", 2);
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "</head>
<body id=\"top\" class=\"";
        // line 23
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        if ($this->getAttribute(($context["theme_config"] ?? null), "back_to_top_button", array())) {
            // line 74
            echo "    <a id=\"back-to-top\" href=\"#\" class=\"btn btn-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), "primary");
            echo " btn-lg back-to-top\" role=\"button\" title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RETURN_TOP_PAGE");
            echo "\" data-toggle=\"tooltip\"
       data-placement=\"left\"><span class=\"fas fa-chevron-up\"></span></a>
";
        }
        // line 77
        $this->displayBlock('bottom', $context, $blocks);
        // line 80
        echo "</body>
</html>";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "        <meta charset=\"utf-8\"/>
        <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        $context["favicon"] = (($this->getAttribute(($context["theme_config"] ?? null), "favicon", array())) ? (twig_first($this->env, $this->getAttribute(($context["theme_config"] ?? null), "favicon", array()))) : (array("type" => "image/png", "path" => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png"))));
        // line 13
        echo "        <link rel=\"icon\" type=\"";
        echo $this->getAttribute(($context["favicon"] ?? null), "type", array());
        echo "\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["favicon"] ?? null), "path", array()));
        echo "\"/>
        <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        // line 25
        echo "    <nav class=\"navbar navbar-expand-md ";
        echo twig_trim_filter($context["bsTools"]->getnavbarStyle($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "style", array()), $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "override_page_style", array())));
        echo " ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "sticky", array())) {
            echo "fixed-top";
        }
        echo "\"
         role=\"navigation\"
         ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "background_color", array())) {
            echo "style=\"background-color:";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "background_color", array());
            echo "\"";
        }
        echo ">
        <a class=\"navbar-brand\" href=\"";
        // line 28
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
            ";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "image", array())) {
            // line 30
            echo "                ";
            $context["navbar_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "image", array()));
            // line 31
            echo "                <img class=\"d-inline-block align-center\" src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["navbar_image"] ?? null), "path", array()));
            echo "\" alt=\"\"/>
            ";
        }
        // line 33
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "icon", array())) {
            // line 34
            echo "                <i class=\"fas fa-";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "icon", array());
            echo "\"></i>
            ";
        }
        // line 36
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "display_site_name", array())) {
            // line 37
            echo "                ";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
            echo "
            ";
        }
        // line 39
        echo "        </a>
        ";
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 41
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 41)->display($context);
            // line 42
            echo "        ";
        }
        // line 43
        echo "        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mainNavbar\" aria-controls=\"mainNavbar\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
            ";
        // line 48
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 51
        echo "        </div>
    </nav>
";
    }

    // line 48
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 49
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 49)->display($context);
        // line 50
        echo "            ";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "favicon", array()), "name", array());
        echo "
    ";
        // line 57
        $this->displayBlock('showcase', $context, $blocks);
        // line 58
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    // line 57
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "    <footer class=\"footer ";
        echo $context["bsTools"]->getstyle($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", array()), "style", array()));
        echo "\">
        <div class=\"container\">
            <div class=\"d-flex flex-row justify-content-center\">
                ";
        // line 65
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", array()), "legal", array())) {
            // line 66
            echo "                    <div class=\"footer-legal mr-auto\">";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", array()), "legal", array());
            echo "</div>
                ";
        }
        // line 68
        echo "                <div class=\"footer-text\">";
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", array()), "text", array());
        echo "</div>
            </div>
        </div>
    </footer>
";
    }

    // line 77
    public function block_bottom($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 78,  283 => 77,  273 => 68,  267 => 66,  265 => 65,  258 => 62,  255 => 61,  250 => 58,  245 => 57,  240 => 58,  238 => 57,  233 => 56,  230 => 55,  226 => 50,  223 => 49,  220 => 48,  214 => 51,  212 => 48,  205 => 43,  202 => 42,  199 => 41,  197 => 40,  194 => 39,  188 => 37,  185 => 36,  179 => 34,  176 => 33,  170 => 31,  167 => 30,  165 => 29,  161 => 28,  153 => 27,  143 => 25,  140 => 24,  135 => 19,  130 => 16,  123 => 20,  121 => 19,  115 => 17,  113 => 16,  108 => 14,  101 => 13,  98 => 12,  96 => 11,  86 => 8,  83 => 7,  80 => 6,  75 => 80,  73 => 77,  64 => 74,  62 => 73,  60 => 61,  57 => 60,  55 => 55,  52 => 54,  50 => 24,  46 => 23,  43 => 22,  41 => 6,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% import \"macros/bootstrap_tools.html.twig\" as bsTools %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\"/>
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% include 'partials/metadata.html.twig' %}
        {% set favicon = theme_config.favicon ? theme_config.favicon|first : { type:'image/png', path: url('theme://images/logo.png') } %}
        <link rel=\"icon\" type=\"{{ favicon.type }}\" href=\"{{ url( favicon.path ) }}\"/>
        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>

        {% block stylesheets %}{% endblock %}
        {{ assets.css() }}

        {% block javascripts %}{% endblock %}
        {{ assets.js() }}
    {% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
{% block header %}
    <nav class=\"navbar navbar-expand-md {{ bsTools.navbarStyle(page.header.style, theme_config.navbar.style, theme_config.navbar.override_page_style)|trim }} {% if theme_config.navbar.sticky %}fixed-top{% endif %}\"
         role=\"navigation\"
         {% if theme_config.navbar.background_color %}style=\"background-color:{{ theme_config.navbar.background_color }}\"{% endif %}>
        <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">
            {% if theme_config.navbar.image %}
                {% set navbar_image = theme_config.navbar.image|first %}
                <img class=\"d-inline-block align-center\" src=\"{{ url(navbar_image.path) }}\" alt=\"\"/>
            {% endif %}
            {% if theme_config.navbar.icon %}
                <i class=\"fas fa-{{ theme_config.navbar.icon }}\"></i>
            {% endif %}
            {% if theme_config.navbar.display_site_name %}
                {{ config.site.title }}
            {% endif %}
        </a>
        {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
        {% endif %}
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mainNavbar\" aria-controls=\"mainNavbar\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
            {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
            {% endblock %}
        </div>
    </nav>
{% endblock %}

{% block body %}
    {{ theme_config.favicon.name }}
    {% block showcase %}{% endblock %}
    {% block content %}{% endblock %}
{% endblock %}

{% block footer %}
    <footer class=\"footer {{ bsTools.style(theme_config.footer.style) }}\">
        <div class=\"container\">
            <div class=\"d-flex flex-row justify-content-center\">
                {% if theme_config.footer.legal %}
                    <div class=\"footer-legal mr-auto\">{{ theme_config.footer.legal|raw }}</div>
                {% endif %}
                <div class=\"footer-text\">{{ theme_config.footer.text|raw }}</div>
            </div>
        </div>
    </footer>
{% endblock %}
{% if theme_config.back_to_top_button %}
    <a id=\"back-to-top\" href=\"#\" class=\"btn btn-{{ page.header.style|defined('primary') }} btn-lg back-to-top\" role=\"button\" title=\"{{ 'RETURN_TOP_PAGE'|t }}\" data-toggle=\"tooltip\"
       data-placement=\"left\"><span class=\"fas fa-chevron-up\"></span></a>
{% endif %}
{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}
</body>
</html>", "partials/base.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\bootstrap-blog\\templates\\partials\\base.html.twig");
    }
}
