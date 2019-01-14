<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_866db5b930c3e0ff7f12decba28e4414e8f2c2e3dce5264697fd11f5e2d20f24 extends Twig_Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", array()) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", array()))) : ($this->getAttribute(($context["blog"] ?? null), "url", array())));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 5
            echo "    <div class=\"sidebar-content\">
        ";
            // line 6
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 6)->display($context);
            // line 7
            echo "    </div>
";
        }
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 10
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 11
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RELATED_PAGES.HEADLINE");
            echo "</h4>
        ";
            // line 12
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 12)->display($context);
            // line 13
            echo "    </div>
";
        }
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "about", array()), "enabled", array())) {
            // line 16
            echo "    <div class=\"sidebar-content\">
        ";
            // line 17
            $context["about_content"] = $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "about", array());
            // line 18
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "about", array()), "page", array())) {
                // line 19
                echo "            ";
                $context["about_content"] = $this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "about", array()), "page", array())), "method");
                // line 20
                echo "        ";
            }
            // line 21
            echo "        <h4>";
            echo $this->getAttribute(($context["about_content"] ?? null), "title", array());
            echo "</h4>
        <p>";
            // line 22
            echo $this->getAttribute(($context["about_content"] ?? null), "content", array());
            echo "</p>
    </div>
";
        }
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 26
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 27
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RANDOM.HEADLINE");
            echo "</h4>
        <a class=\"btn btn-outline-primary\" href=\"";
            // line 28
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.RANDOM.FEELING_LUCKY");
            echo "
        </a>
    </div>
";
        }
        // line 32
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 33
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 34
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h4>
        ";
            // line 35
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 35)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag")));
            // line 36
            echo "    </div>
";
        }
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 39
            echo "    <div class=\"sidebar-content\">
        <h4>";
            // line 40
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.ARCHIVES.HEADLINE");
            echo "</h4>
        ";
            // line 41
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 41)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null))));
            // line 42
            echo "    </div>
";
        }
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "twitter", array()), "enabled", array())) {
            // line 45
            echo "    <div class=\"sidebar-content\">
        ";
            // line 46
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "https://platform.twitter.com/widgets.js", 1 => array("loading" => "async", "group" => "bottom")), "method");
            // line 47
            echo "        <a class=\"twitter-timeline\" data-height=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array(), "any", false, true), "twitter", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array(), "any", false, true), "twitter", array(), "any", false, true), "height", array()), 600)) : (600));
            echo "\"
           data-theme=\"";
            // line 48
            echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array(), "any", false, true), "twitter", array(), "any", false, true), "theme", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array(), "any", false, true), "twitter", array(), "any", false, true), "theme", array()), "light")) : ("light"));
            echo "\"
           href=\"https://twitter.com/";
            // line 49
            echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array(), "any", false, true), "twitter", array(), "any", false, true), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array(), "any", false, true), "twitter", array(), "any", false, true), "user", array()), "twitter")) : ("twitter"));
            echo "\">
        </a>
    </div>
";
        }
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 54
            echo "    <div class=\"sidebar-content syndicate\">
        <h4>";
            // line 55
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SIDEBAR.SYNDICATE.HEADLINE");
            echo "</h4>
        <a class=\"btn btn-outline-primary\" href=\"";
            // line 56
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
        <a class=\"btn btn-outline-primary\" href=\"";
            // line 57
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 57,  159 => 56,  155 => 55,  152 => 54,  150 => 53,  143 => 49,  139 => 48,  134 => 47,  132 => 46,  129 => 45,  127 => 44,  123 => 42,  121 => 41,  117 => 40,  114 => 39,  112 => 38,  108 => 36,  106 => 35,  102 => 34,  99 => 33,  97 => 32,  88 => 28,  84 => 27,  81 => 26,  79 => 25,  73 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  57 => 17,  54 => 16,  52 => 15,  48 => 13,  46 => 12,  42 => 11,  39 => 10,  37 => 9,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% if config.plugins.simplesearch.enabled %}
    <div class=\"sidebar-content\">
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <div class=\"sidebar-content\">
        <h4>{{ 'SIDEBAR.RELATED_PAGES.HEADLINE'|t }}</h4>
        {% include 'partials/relatedpages.html.twig' %}
    </div>
{% endif %}
{% if theme_config.sidebar.about.enabled %}
    <div class=\"sidebar-content\">
        {% set about_content = theme_config.sidebar.about %}
        {% if theme_config.sidebar.about.page %}
            {% set about_content = page.find( theme_config.sidebar.about.page ) %}
        {% endif %}
        <h4>{{ about_content.title }}</h4>
        <p>{{ about_content.content }}</p>
    </div>
{% endif %}
{% if config.plugins.random.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'SIDEBAR.RANDOM.HEADLINE'|t }}</h4>
        <a class=\"btn btn-outline-primary\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> {{ 'SIDEBAR.RANDOM.FEELING_LUCKY'|t }}
        </a>
    </div>
{% endif %}
{% if config.plugins.taxonomylist.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>
        {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
    </div>
{% endif %}
{% if config.plugins.archives.enabled %}
    <div class=\"sidebar-content\">
        <h4>{{ 'SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>
        {% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}
    </div>
{% endif %}
{% if theme_config.sidebar.twitter.enabled %}
    <div class=\"sidebar-content\">
        {% do assets.addJs('https://platform.twitter.com/widgets.js', { loading:'async', group: 'bottom'}) %}
        <a class=\"twitter-timeline\" data-height=\"{{ theme_config.sidebar.twitter.height|default(600) }}\"
           data-theme=\"{{ theme_config.sidebar.twitter.theme|default('light') }}\"
           href=\"https://twitter.com/{{ theme_config.sidebar.twitter.user|default('twitter') }}\">
        </a>
    </div>
{% endif %}
{% if config.plugins.feed.enabled %}
    <div class=\"sidebar-content syndicate\">
        <h4>{{ 'SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>
        <a class=\"btn btn-outline-primary\" href=\"{{ page.url(true) }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
        <a class=\"btn btn-outline-primary\" href=\"{{ page.url(true) }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
    </div>
{% endif %}
", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\bootstrap-blog\\templates\\partials\\sidebar.html.twig");
    }
}
