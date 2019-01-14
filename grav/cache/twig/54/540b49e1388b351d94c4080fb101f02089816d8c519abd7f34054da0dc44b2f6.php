<?php

/* forms/fields/select/select.html.twig */
class __TwigTemplate_f257621e75bdc22092f419c3b16a47ffccac7e56c88d20220653a219314fcf22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/select/select.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute(($context["field"] ?? null), "selectize", array(), "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    ";
        // line 5
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_input($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-select-wrapper")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array()), "html", null, true);
        echo "\">
        <select name=\"";
        // line 10
        echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))) . (($this->getAttribute(($context["field"] ?? null), "multiple", array())) ? ("[]") : (""))), "html", null, true);
        echo "\"
                class=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["form_field_select_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
        echo "\"
                ";
        // line 12
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        // line 13
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 14
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "disabled", array())) {
            echo "disabled=\"disabled\"";
        }
        // line 15
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 16
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 17
        echo "                ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 18
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 19
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 20
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "form", array())) {
            echo "form=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "form", array()), "html", null, true);
            echo "\"";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "key", array())) {
            // line 22
            echo "                    data-key-observe=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\"
                ";
        }
        // line 24
        echo "                >
            ";
        // line 25
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "<option value=\"\" disabled selected>";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "placeholder", array()));
            } else {
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "placeholder", array()));
            }
            echo "</option>";
        }
        // line 26
        echo "
            ";
        // line 27
        $context["options"] = $this->getAttribute(($context["field"] ?? null), "options", array());
        // line 28
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["field"] ?? null), "selectize", array()), "create", array()) && $this->getAttribute(($context["field"] ?? null), "multiple", array()))) {
            // line 29
            echo "                ";
            $context["options"] = array_unique(twig_array_merge(($context["options"] ?? null), (((isset($context["value"]) || array_key_exists("value", $context))) ? (_twig_default_filter(($context["value"] ?? null), array())) : (array()))));
            // line 30
            echo "            ";
        }
        // line 31
        echo "
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item_value"]) {
            // line 33
            echo "                ";
            if ((twig_test_iterable($context["item_value"]) && $this->getAttribute($context["item_value"], "value", array()))) {
                // line 34
                echo "                    ";
                $context["akey"] = ((($this->getAttribute(($context["field"] ?? null), "selectize", array()) && $this->getAttribute(($context["field"] ?? null), "multiple", array()))) ? ($context["item_value"]) : ($context["key"]));
                // line 35
                echo "                    ";
                $context["avalue"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["item_value"], "value", array()))) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["item_value"], "value", array()))));
                // line 36
                echo "                    <option ";
                echo (($this->getAttribute($context["item_value"], "disabled", array())) ? ("disabled=\"disabled\"") : (""));
                echo "
\t\t\t    ";
                // line 37
                echo (($this->getAttribute($context["item_value"], "selected", array())) ? ("selected=\"selected\"") : (""));
                echo "
\t\t\t    ";
                // line 38
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item_value"], "label", array())) ? (("label=" . $this->getAttribute($context["item_value"], "label", array()))) : ("")), "html", null, true);
                echo "
\t\t\t    value=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["item_value"], "akey", array()), "html", null, true);
                echo "\">";
                echo ($context["avalue"] ?? null);
                echo "</option>
                ";
            } elseif (twig_test_iterable(            // line 40
$context["item_value"])) {
                // line 41
                echo "                    <optgroup label=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["item_value"]);
                foreach ($context['_seq'] as $context["subkey"] => $context["suboption"]) {
                    // line 43
                    echo "                            ";
                    $context["selected"] = (($this->getAttribute(($context["field"] ?? null), "selectize", array())) ? ($context["suboption"]) : ($context["subkey"]));
                    // line 44
                    echo "                            ";
                    $context["item_value"] = ((($this->getAttribute(($context["field"] ?? null), "selectize", array()) && $this->getAttribute(($context["field"] ?? null), "multiple", array()))) ? ($context["suboption"]) : ($context["subkey"]));
                    // line 45
                    echo "                            <option ";
                    if ((($context["subkey"] == ($context["value"] ?? null)) || ($this->getAttribute(($context["field"] ?? null), "multiple", array()) && twig_in_filter(($context["selected"] ?? null), ($context["value"] ?? null))))) {
                        echo "selected=\"selected\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["suboption"], "html", null, true);
                    echo "\">
                                ";
                    // line 46
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                        // line 47
                        echo "                                    ";
                        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["suboption"]);
                    } else {
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["suboption"]);
                        echo "
                                ";
                    }
                    // line 49
                    echo "                            </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['subkey'], $context['suboption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                    </optgroup>
                ";
            } else {
                // line 53
                echo "                    ";
                $context["selected"] = (($this->getAttribute(($context["field"] ?? null), "selectize", array())) ? ($context["item_value"]) : ($context["key"]));
                // line 54
                echo "                    ";
                $context["val"] = ((($this->getAttribute(($context["field"] ?? null), "selectize", array()) && $this->getAttribute(($context["field"] ?? null), "multiple", array()))) ? ($context["item_value"]) : ($context["key"]));
                // line 55
                echo "                    <option ";
                if ((($context["key"] == ($context["value"] ?? null)) || ($this->getAttribute(($context["field"] ?? null), "multiple", array()) && twig_in_filter(($context["selected"] ?? null), ($context["value"] ?? null))))) {
                    echo "selected=\"selected\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, ($context["val"] ?? null), "html", null, true);
                echo "\">";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                    echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["item_value"]);
                } else {
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["item_value"]);
                }
                echo "</option>
                ";
            }
            // line 57
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
        </select>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/select/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 58,  255 => 57,  239 => 55,  236 => 54,  233 => 53,  229 => 51,  222 => 49,  214 => 47,  212 => 46,  203 => 45,  200 => 44,  197 => 43,  193 => 42,  188 => 41,  186 => 40,  180 => 39,  176 => 38,  172 => 37,  167 => 36,  164 => 35,  161 => 34,  158 => 33,  154 => 32,  151 => 31,  148 => 30,  145 => 29,  142 => 28,  140 => 27,  137 => 26,  127 => 25,  124 => 24,  118 => 22,  115 => 21,  108 => 20,  103 => 19,  98 => 18,  93 => 17,  88 => 16,  83 => 15,  78 => 14,  71 => 13,  65 => 12,  59 => 11,  55 => 10,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% block global_attributes %}
    data-grav-selectize=\"{{ (field.selectize is defined ? field.selectize : {})|json_encode()|e('html_attr') }}\"
    {{ parent() }}
{% endblock %}

{% block input %}
    <div class=\"{{ form_field_wrapper_classes ?: 'form-select-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
        <select name=\"{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}\"
                class=\"{{ form_field_select_classes }} {{ field.classes }}\"
                {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled %}disabled=\"disabled\"{% endif %}
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
                {% if field.multiple in ['on', 'true', 1] %}multiple=\"multiple\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.form %}form=\"{{ field.form }}\"{% endif %}
                {% if field.key %}
                    data-key-observe=\"{{ (scope ~ field.name)|fieldName }}\"
                {% endif %}
                >
            {% if field.placeholder %}<option value=\"\" disabled selected>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.placeholder|tu|raw }}{% else %}{{ field.placeholder|t|raw }}{% endif %}</option>{% endif %}

            {% set options = field.options %}
            {% if field.selectize.create and field.multiple %}
                {% set options = options|merge(value|default([]))|array_unique %}
            {% endif %}

            {% for key, item_value in options %}
                {% if item_value is iterable and item_value.value %}
                    {% set akey = field.selectize and field.multiple ? item_value : key %}
                    {% set avalue = grav.twig.twig.filters['tu'] is defined ? item_value.value|tu : item_value.value|t %}
                    <option {{ item_value.disabled ? 'disabled=\"disabled\"' : '' }}
\t\t\t    {{ item_value.selected ? 'selected=\"selected\"' : '' }}
\t\t\t    {{ item_value.label    ? 'label=' ~ item_value.label : '' }}
\t\t\t    value=\"{{ item_value.akey }}\">{{ avalue|raw }}</option>
                {% elseif item_value is iterable %}
                    <optgroup label=\"{{ key }}\">
                        {%for subkey, suboption in item_value %}
                            {% set selected = field.selectize ? suboption : subkey %}
                            {% set item_value = field.selectize and field.multiple ? suboption : subkey %}
                            <option {% if subkey == value or (field.multiple and selected in value) %}selected=\"selected\"{% endif %} value=\"{{ suboption }}\">
                                {% if grav.twig.twig.filters['tu'] is defined %}
                                    {{ suboption|tu|raw }}{% else %}{{ suboption|t|raw }}
                                {% endif %}
                            </option>
                        {% endfor %}
                    </optgroup>
                {% else %}
                    {% set selected = field.selectize ? item_value : key %}
                    {% set val = field.selectize and field.multiple ? item_value : key %}
                    <option {% if key == value or (field.multiple and selected in value) %}selected=\"selected\"{% endif %} value=\"{{ val }}\">{%- if grav.twig.twig.filters['tu'] is defined -%}{{ item_value|tu|raw }}{% else %}{{ item_value|t|raw }}{%- endif -%}</option>
                {% endif %}
            {% endfor %}

        </select>
    </div>
{% endblock %}
", "forms/fields/select/select.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\form\\templates\\forms\\fields\\select\\select.html.twig");
    }
}
