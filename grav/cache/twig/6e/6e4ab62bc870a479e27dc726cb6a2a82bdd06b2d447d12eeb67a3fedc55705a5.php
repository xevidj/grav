<?php

/* item.html.twig */
class __TwigTemplate_4f1ae32071d62347d04463ab43a177dbea701e7a3e655c2c8d8fdf9f0e591cf5 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "591939233")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% block content %}

        {% set item_columns = '' %}
        {% set sidebar = false %}
        {% if theme_config.sidebar.enabled is not sameas(false) and page.header.sidebar.enabled is not sameas(false) %}
            {% set sidebar = true %}
            {% set item_columns = 'col-md-8' %}
        {% endif %}

        {% if config.plugins.breadcrumbs.enabled %}
            <div class=\"container\">
                <div class=\"row\">
                    {% include 'partials/breadcrumbs.html.twig' %}
                </div>
            </div>
        {% endif %}

        <div class=\"container\">
            <div class=\"row\">
                <div id=\"item\" class=\"item-content col-12 {{ item_columns }}\">
                    {% include 'partials/partial_item.html.twig' with {'parent':page.parent, 'truncate':false} %}
                </div>
                {% if sidebar %}
                    <div id=\"sidebar\" class=\"col-12 col-md-4 {% if theme_config.sidebar.align == 'left' %}order-md-first{% endif %}\">
                        <div class=\"sidebar-content {% if theme_config.sidebar.border %}border-{{ theme_config.sidebar.border }}{% endif %}\">
                            {% include 'partials/sidebar.html.twig' with { 'blog':page.parent } %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "item.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\bootstrap-blog\\templates\\item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_4f1ae32071d62347d04463ab43a177dbea701e7a3e655c2c8d8fdf9f0e591cf5_591939233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
        ";
        // line 5
        $context["item_columns"] = "";
        // line 6
        echo "        ";
        $context["sidebar"] = false;
        // line 7
        echo "        ";
        if (( !($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "enabled", array()) === false) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sidebar", array()), "enabled", array()) === false))) {
            // line 8
            echo "            ";
            $context["sidebar"] = true;
            // line 9
            echo "            ";
            $context["item_columns"] = "col-md-8";
            // line 10
            echo "        ";
        }
        // line 11
        echo "
        ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 13
            echo "            <div class=\"container\">
                <div class=\"row\">
                    ";
            // line 15
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 15)->display($context);
            // line 16
            echo "                </div>
            </div>
        ";
        }
        // line 19
        echo "
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"item\" class=\"item-content col-12 ";
        // line 22
        echo ($context["item_columns"] ?? null);
        echo "\">
                    ";
        // line 23
        $this->loadTemplate("partials/partial_item.html.twig", "item.html.twig", 23)->display(array_merge($context, array("parent" => $this->getAttribute(($context["page"] ?? null), "parent", array()), "truncate" => false)));
        // line 24
        echo "                </div>
                ";
        // line 25
        if (($context["sidebar"] ?? null)) {
            // line 26
            echo "                    <div id=\"sidebar\" class=\"col-12 col-md-4 ";
            if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "align", array()) == "left")) {
                echo "order-md-first";
            }
            echo "\">
                        <div class=\"sidebar-content ";
            // line 27
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "border", array())) {
                echo "border-";
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "border", array());
            }
            echo "\">
                            ";
            // line 28
            $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 28)->display(array_merge($context, array("blog" => $this->getAttribute(($context["page"] ?? null), "parent", array()))));
            // line 29
            echo "                        </div>
                    </div>
                ";
        }
        // line 32
        echo "            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 32,  178 => 29,  176 => 28,  169 => 27,  162 => 26,  160 => 25,  157 => 24,  155 => 23,  151 => 22,  146 => 19,  141 => 16,  139 => 15,  135 => 13,  133 => 12,  130 => 11,  127 => 10,  124 => 9,  121 => 8,  118 => 7,  115 => 6,  113 => 5,  110 => 4,  107 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% block content %}

        {% set item_columns = '' %}
        {% set sidebar = false %}
        {% if theme_config.sidebar.enabled is not sameas(false) and page.header.sidebar.enabled is not sameas(false) %}
            {% set sidebar = true %}
            {% set item_columns = 'col-md-8' %}
        {% endif %}

        {% if config.plugins.breadcrumbs.enabled %}
            <div class=\"container\">
                <div class=\"row\">
                    {% include 'partials/breadcrumbs.html.twig' %}
                </div>
            </div>
        {% endif %}

        <div class=\"container\">
            <div class=\"row\">
                <div id=\"item\" class=\"item-content col-12 {{ item_columns }}\">
                    {% include 'partials/partial_item.html.twig' with {'parent':page.parent, 'truncate':false} %}
                </div>
                {% if sidebar %}
                    <div id=\"sidebar\" class=\"col-12 col-md-4 {% if theme_config.sidebar.align == 'left' %}order-md-first{% endif %}\">
                        <div class=\"sidebar-content {% if theme_config.sidebar.border %}border-{{ theme_config.sidebar.border }}{% endif %}\">
                            {% include 'partials/sidebar.html.twig' with { 'blog':page.parent } %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "item.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\bootstrap-blog\\templates\\item.html.twig");
    }
}
