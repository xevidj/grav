<?php

/* blog.html.twig */
class __TwigTemplate_6d28a607bfe2c14c38d1f7e601dd0ef5521254ea6c2f44bf1684291d2c366e8d extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "4128914")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
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

    {% set collection = page.collection() %}

    {% block content %}

        {% if theme_config.sidebar.enabled is not sameas(false) and page.header.sidebar.enabled is not sameas(false) %}
            {% set sidebar = true %}
        {% else %}
            {% set sidebar = false %}
        {% endif %}

        {% include 'partials/showcase.html.twig' with { 'content':page.content } %}

        <div class=\"container\">
            {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"row items\">
                        {% for child in collection %}
                            {% include 'partials/layouts/' ~ page.header.layout|defined('boxed') ~ '.html.twig' with {'parent': page, 'page': child } %}
                        {% endfor %}
                    </div>
                    {% if config.plugins.pagination.enabled and collection.params.pagination %}
                        {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                    {% endif %}
                </div>
                {% if sidebar %}
                    <div id=\"sidebar\" class=\"col-12 col-md-4 {% if theme_config.sidebar.align == 'left' %}order-md-first{% endif %}\">
                        <div class=\"sidebar-content {% if theme_config.sidebar.border %}border-{{ theme_config.sidebar.border }}{% endif %}\">
                            {% include 'partials/sidebar.html.twig' with { 'blog':page } %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "blog.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\bootstrap-blog\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_6d28a607bfe2c14c38d1f7e601dd0ef5521254ea6c2f44bf1684291d2c366e8d_4128914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
        ";
        // line 7
        if (( !($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "enabled", array()) === false) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sidebar", array()), "enabled", array()) === false))) {
            // line 8
            echo "            ";
            $context["sidebar"] = true;
            // line 9
            echo "        ";
        } else {
            // line 10
            echo "            ";
            $context["sidebar"] = false;
            // line 11
            echo "        ";
        }
        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("partials/showcase.html.twig", "blog.html.twig", 13)->display(array_merge($context, array("content" => $this->getAttribute(($context["page"] ?? null), "content", array()))));
        // line 14
        echo "
        <div class=\"container\">
            ";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 17
            echo "                ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 17)->display($context);
            // line 18
            echo "            ";
        }
        // line 19
        echo "            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"row items\">
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "                            ";
            $this->loadTemplate((("partials/layouts/" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "layout", array()), "boxed")) . ".html.twig"), "blog.html.twig", 23)->display(array_merge($context, array("parent" => ($context["page"] ?? null), "page" => $context["child"])));
            // line 24
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </div>
                    ";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 27
            echo "                        ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 27)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 28
            echo "                    ";
        }
        // line 29
        echo "                </div>
                ";
        // line 30
        if (($context["sidebar"] ?? null)) {
            // line 31
            echo "                    <div id=\"sidebar\" class=\"col-12 col-md-4 ";
            if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "align", array()) == "left")) {
                echo "order-md-first";
            }
            echo "\">
                        <div class=\"sidebar-content ";
            // line 32
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "border", array())) {
                echo "border-";
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", array()), "border", array());
            }
            echo "\">
                            ";
            // line 33
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 33)->display(array_merge($context, array("blog" => ($context["page"] ?? null))));
            // line 34
            echo "                        </div>
                    </div>
                ";
        }
        // line 37
        echo "            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 37,  223 => 34,  221 => 33,  214 => 32,  207 => 31,  205 => 30,  202 => 29,  199 => 28,  196 => 27,  194 => 26,  191 => 25,  177 => 24,  174 => 23,  157 => 22,  152 => 19,  149 => 18,  146 => 17,  144 => 16,  140 => 14,  138 => 13,  135 => 12,  132 => 11,  129 => 10,  126 => 9,  123 => 8,  121 => 7,  118 => 6,  115 => 5,  111 => 1,  109 => 3,  19 => 1,);
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

    {% set collection = page.collection() %}

    {% block content %}

        {% if theme_config.sidebar.enabled is not sameas(false) and page.header.sidebar.enabled is not sameas(false) %}
            {% set sidebar = true %}
        {% else %}
            {% set sidebar = false %}
        {% endif %}

        {% include 'partials/showcase.html.twig' with { 'content':page.content } %}

        <div class=\"container\">
            {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"row items\">
                        {% for child in collection %}
                            {% include 'partials/layouts/' ~ page.header.layout|defined('boxed') ~ '.html.twig' with {'parent': page, 'page': child } %}
                        {% endfor %}
                    </div>
                    {% if config.plugins.pagination.enabled and collection.params.pagination %}
                        {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                    {% endif %}
                </div>
                {% if sidebar %}
                    <div id=\"sidebar\" class=\"col-12 col-md-4 {% if theme_config.sidebar.align == 'left' %}order-md-first{% endif %}\">
                        <div class=\"sidebar-content {% if theme_config.sidebar.border %}border-{{ theme_config.sidebar.border }}{% endif %}\">
                            {% include 'partials/sidebar.html.twig' with { 'blog':page } %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "blog.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\bootstrap-blog\\templates\\blog.html.twig");
    }
}
