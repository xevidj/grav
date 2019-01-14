<?php

/* partials/navigation.html.twig */
class __TwigTemplate_6253acaa76e77d465cb584c504c930580edae20c50bf013f1ee5a311e733bf65 extends Twig_Template
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
        // line 52
        echo "
<ul class=\"navbar-nav ml-auto\">
    ";
        // line 54
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", array()), "dropdown", array()) == true)) {
            // line 55
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
            echo "
    ";
        } else {
            // line 57
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 58
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 59
                echo "            <li class=\"nav-item ";
                echo ($context["current_page"] ?? null);
                echo "\">
                <a class=\"nav-link\" href=\"";
                // line 60
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 61
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fas fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 62
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "    ";
        }
        // line 67
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 68
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 69
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 70
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fas fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 71
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 76
            echo "        <li class=\"nav-item\"><i class=\"fas fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 76)->display($context);
            echo "</li>
    ";
        }
        // line 78
        echo "</ul>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 5
                    echo "            ";
                    $context["dropdown_separator"] = $this->getAttribute($this->getAttribute($context["p"], "header", array()), "split_menu", array());
                    // line 6
                    echo "            ";
                    if (($context["dropdown_separator"] ?? null)) {
                        // line 7
                        echo "                <li class=\"nav-item dropdown dropdown-split-menu ";
                        echo ($context["current_page"] ?? null);
                        echo "\">
                    <div class=\"btn-group\">
                        <a class=\"nav-link\" href=\"";
                        // line 9
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\">
                            ";
                        // line 10
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                            echo "<i class=\"fas fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                            echo "\"></i>";
                        }
                        // line 11
                        echo "                            ";
                        echo $this->getAttribute($context["p"], "menu", array());
                        echo "
                        </a>
                        <a href=\"#\" id=\"dropdown-";
                        // line 13
                        echo $this->getAttribute($context["p"], "id", array());
                        echo "\" class=\"nav-link dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"></a>
                        <div class=\"dropdown-menu\" arial-labelledby=\"dropdown-";
                        // line 15
                        echo $this->getAttribute($context["p"], "id", array());
                        echo "\">
                            ";
                        // line 16
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            // line 17
                            echo "                                <a class=\"dropdown-item\" href=\"";
                            echo $this->getAttribute($context["c"], "url", array());
                            echo "\">
                                    ";
                            // line 18
                            if ($this->getAttribute($this->getAttribute($context["c"], "header", array()), "icon", array())) {
                                echo "<i class=\"fas fa-";
                                echo $this->getAttribute($this->getAttribute($context["c"], "header", array()), "icon", array());
                                echo "\"></i>";
                            }
                            // line 19
                            echo "                                    ";
                            echo $this->getAttribute($context["c"], "menu", array());
                            echo "
                                </a>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "                        </div>
                    </div>
                </li>
            ";
                    } else {
                        // line 26
                        echo "                <li class=\"nav-item dropdown ";
                        echo ($context["current_page"] ?? null);
                        echo "\">
                    <a id=\"dropdown-";
                        // line 27
                        echo $this->getAttribute($context["p"], "id", array());
                        echo "\" class=\"nav-link dropdown-toggle\" href=\"";
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">
                        ";
                        // line 29
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                            echo "<i class=\"fas fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                            echo "\"></i>";
                        }
                        // line 30
                        echo "                        ";
                        echo $this->getAttribute($context["p"], "menu", array());
                        echo "
                    </a>
                    <div class=\"dropdown-menu\" arial-labelledby=\"dropdown-";
                        // line 32
                        echo $this->getAttribute($context["p"], "id", array());
                        echo "\">
                        ";
                        // line 33
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            // line 34
                            echo "                            <a class=\"dropdown-item\" href=\"";
                            echo $this->getAttribute($context["c"], "url", array());
                            echo "\">
                                ";
                            // line 35
                            if ($this->getAttribute($this->getAttribute($context["c"], "header", array()), "icon", array())) {
                                echo "<i class=\"fas fa-";
                                echo $this->getAttribute($this->getAttribute($context["c"], "header", array()), "icon", array());
                                echo "\"></i>";
                            }
                            // line 36
                            echo "                                ";
                            echo $this->getAttribute($context["c"], "menu", array());
                            echo "
                            </a>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                    </div>
                </li>
            ";
                    }
                    // line 42
                    echo "        ";
                } else {
                    // line 43
                    echo "            <li class=\"nav-item ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a class=\"nav-link\" href=\"";
                    // line 44
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
                    ";
                    // line 45
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fas fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 46
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
            </li>
        ";
                }
                // line 50
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 50,  278 => 46,  272 => 45,  268 => 44,  263 => 43,  260 => 42,  255 => 39,  245 => 36,  239 => 35,  234 => 34,  230 => 33,  226 => 32,  220 => 30,  214 => 29,  207 => 27,  202 => 26,  196 => 22,  186 => 19,  180 => 18,  175 => 17,  171 => 16,  167 => 15,  162 => 13,  156 => 11,  150 => 10,  146 => 9,  140 => 7,  137 => 6,  134 => 5,  131 => 4,  128 => 3,  123 => 2,  111 => 1,  106 => 78,  100 => 76,  97 => 75,  86 => 71,  80 => 70,  76 => 69,  73 => 68,  68 => 67,  65 => 66,  54 => 62,  48 => 61,  44 => 60,  39 => 59,  36 => 58,  31 => 57,  25 => 55,  23 => 54,  19 => 52,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            {% set dropdown_separator = p.header.split_menu %}
            {% if dropdown_separator %}
                <li class=\"nav-item dropdown dropdown-split-menu {{ current_page }}\">
                    <div class=\"btn-group\">
                        <a class=\"nav-link\" href=\"{{ p.url }}\">
                            {% if p.header.icon %}<i class=\"fas fa-{{ p.header.icon }}\"></i>{% endif %}
                            {{ p.menu }}
                        </a>
                        <a href=\"#\" id=\"dropdown-{{ p.id }}\" class=\"nav-link dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"></a>
                        <div class=\"dropdown-menu\" arial-labelledby=\"dropdown-{{ p.id }}\">
                            {% for c in p.children.visible %}
                                <a class=\"dropdown-item\" href=\"{{ c.url }}\">
                                    {% if c.header.icon %}<i class=\"fas fa-{{ c.header.icon }}\"></i>{% endif %}
                                    {{ c.menu }}
                                </a>
                            {% endfor %}
                        </div>
                    </div>
                </li>
            {% else %}
                <li class=\"nav-item dropdown {{ current_page }}\">
                    <a id=\"dropdown-{{ p.id }}\" class=\"nav-link dropdown-toggle\" href=\"{{ p.url }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">
                        {% if p.header.icon %}<i class=\"fas fa-{{ p.header.icon }}\"></i>{% endif %}
                        {{ p.menu }}
                    </a>
                    <div class=\"dropdown-menu\" arial-labelledby=\"dropdown-{{ p.id }}\">
                        {% for c in p.children.visible %}
                            <a class=\"dropdown-item\" href=\"{{ c.url }}\">
                                {% if c.header.icon %}<i class=\"fas fa-{{ c.header.icon }}\"></i>{% endif %}
                                {{ c.menu }}
                            </a>
                        {% endfor %}
                    </div>
                </li>
            {% endif %}
        {% else %}
            <li class=\"nav-item {{ current_page }}\">
                <a class=\"nav-link\" href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fas fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul class=\"navbar-nav ml-auto\">
    {% if theme_config.navbar.dropdown == true %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <li class=\"nav-item {{ current_page }}\">
                <a class=\"nav-link\" href=\"{{ page.url }}\">
                    {% if page.header.icon %}<i class=\"fas fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ mitem.url }}\">
                {% if mitem.icon %}<i class=\"fas fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>
        </li>
    {% endfor %}
    {% if config.plugins.login.enabled and grav.user.username %}
        <li class=\"nav-item\"><i class=\"fas fa-lock\"></i> {% include 'partials/login-status.html.twig' %}</li>
    {% endif %}
</ul>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\bootstrap-blog\\templates\\partials\\navigation.html.twig");
    }
}
