<?php

/* macros/bootstrap_tools.html.twig */
class __TwigTemplate_cfbfdf7f84e54d63393f1ae78d5043fbe4e23f5c6234d44f560619164153a709 extends Twig_Template
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
        // line 5
        echo "
";
        // line 9
        echo "
";
        // line 13
        echo "
";
        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 44
        echo "
";
        // line 54
        echo "
";
    }

    // line 2
    public function getstyle($__style__ = null, $__noTextClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "noTextClass" => $__noTextClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    ";
            echo twig_trim_filter($this->getAttribute($this, "backgroundStyle", array(0 => ($context["style"] ?? null), 1 => ($context["noTextClass"] ?? null)), "method"));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getbackgroundStyle($__style__ = null, $__noTextClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "noTextClass" => $__noTextClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    ";
            echo (((($context["style"] ?? null)) ? (("bg-" . ($context["style"] ?? null))) : ("")) . ((($context["noTextClass"] ?? null)) ? (($context["noTextClass"] ?? null)) : ((" " . twig_trim_filter($this->getAttribute($this, "textStyle", array(0 => ($context["style"] ?? null)), "method"))))));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function gettextStyle($__style__ = null, $__default__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            echo ("text-" . twig_trim_filter($this->getAttribute($this, "processStyle", array(0 => ($context["style"] ?? null), 1 => true, 2 => ($context["default"] ?? null)), "method")));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getnavbarStyle($__style__ = null, $__default__ = null, $__override_page_style__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "default" => $__default__,
            "override_page_style" => $__override_page_style__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    ";
            if ( !($context["override_page_style"] ?? null)) {
                // line 16
                echo "        ";
                $context["style"] = ($context["default"] ?? null);
                // line 17
                echo "    ";
            } else {
                // line 18
                echo "        ";
                $context["style"] = (((isset($context["style"]) || array_key_exists("style", $context))) ? (_twig_default_filter(($context["style"] ?? null), ($context["default"] ?? null))) : (($context["default"] ?? null)));
                // line 19
                echo "    ";
            }
            // line 20
            echo "    ";
            $context["output"] = "navbar-";
            // line 21
            echo "    ";
            if (!twig_in_filter(($context["style"] ?? null), array(0 => "primary", 1 => "success", 2 => "danger", 3 => "secondary", 4 => "info", 5 => "dark", 6 => "faded", 7 => "blue", 8 => "indigo", 9 => "purple", 10 => "pink", 11 => "red", 12 => "green", 13 => "teal", 14 => "cyan"))) {
                // line 22
                echo "        ";
                $context["output"] = (($context["output"] ?? null) . "light");
                // line 23
                echo "    ";
            } else {
                // line 24
                echo "        ";
                $context["output"] = (($context["output"] ?? null) . "dark");
                // line 25
                echo "    ";
            }
            // line 26
            echo "    ";
            echo (((($context["output"] ?? null) . " ") . "bg-") . ($context["style"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getbuttonStyle($__style__ = null, $__isOutline__ = null, $__darkOrLight__ = null, $__default__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "isOutline" => $__isOutline__,
            "darkOrLight" => $__darkOrLight__,
            "default" => $__default__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    ";
            echo ((("btn-" . ((($context["isOutline"] ?? null)) ? ("outline-") : (""))) . twig_trim_filter($this->getAttribute($this, "processStyle", array(0 => ($context["style"] ?? null), 1 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter(($context["darkOrLight"] ?? null), true), 2 => ($context["default"] ?? null)), "method"))) . ((($context["size"] ?? null)) ? ((" btn-" . ($context["size"] ?? null))) : ("")));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getprocessStyle($__style__ = null, $__inversed__ = null, $__default__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "style" => $__style__,
            "inversed" => $__inversed__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            $context["output"] = null;
            // line 35
            echo "    ";
            if (($context["inversed"] ?? null)) {
                // line 36
                echo "        ";
                if (twig_in_filter(($context["style"] ?? null), array(0 => "primary", 1 => "success", 2 => "danger", 3 => "info", 4 => "dark", 5 => "faded", 6 => "blue", 7 => "indigo", 8 => "purple", 9 => "pink", 10 => "red", 11 => "green", 12 => "teal", 13 => "cyan"))) {
                    // line 37
                    echo "            ";
                    $context["output"] = "light";
                    // line 38
                    echo "        ";
                } else {
                    // line 39
                    echo "            ";
                    $context["output"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter(($context["default"] ?? null), "dark");
                    // line 40
                    echo "        ";
                }
                // line 41
                echo "    ";
            }
            // line 42
            echo "    ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter(($context["output"] ?? null), ($context["style"] ?? null)), ($context["default"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 45
    public function getbutton($__url__ = null, $__text__ = null, $__icon__ = null, $__style__ = null, $__outline__ = null, $__darkOrLight__ = null, $__default__ = null, $__size__ = null, $__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "text" => $__text__,
            "icon" => $__icon__,
            "style" => $__style__,
            "outline" => $__outline__,
            "darkOrLight" => $__darkOrLight__,
            "default" => $__default__,
            "size" => $__size__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 46
            echo "  <a href=\"";
            echo (((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["url"] ?? null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "http") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) ? (($context["url"] ?? null)) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["url"] ?? null))));
            echo "\" alt=\"";
            echo ($context["text"] ?? null);
            echo "\"
     class=\"btn ";
            // line 47
            echo twig_trim_filter($this->getAttribute($this, "buttonStyle", array(0 => ($context["style"] ?? null), 1 => ($context["outline"] ?? null), 2 => ($context["darkOrLight"] ?? null), 3 => ($context["default"] ?? null), 4 => ($context["size"] ?? null)), "method"));
            echo " ";
            echo ($context["classes"] ?? null);
            echo "\">
      ";
            // line 48
            if (($context["icon"] ?? null)) {
                // line 49
                echo "        <i class=\"fas fa-";
                echo ($context["icon"] ?? null);
                echo "\"></i>
      ";
            }
            // line 51
            echo "      ";
            echo ($context["text"] ?? null);
            echo "
  </a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getbuttons($__buttons__ = null, $__style__ = null, $__outline__ = null, $__darkOrLight__ = null, $__default__ = null, $__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "buttons" => $__buttons__,
            "style" => $__style__,
            "outline" => $__outline__,
            "darkOrLight" => $__darkOrLight__,
            "default" => $__default__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 57
                echo "        ";
                echo twig_trim_filter($this->getAttribute($this, "button", array(0 => $this->getAttribute($context["button"], "url", array()), 1 => $this->getAttribute($context["button"], "text", array()), 2 => $this->getAttribute($context["button"], "icon", array()), 3 => ($context["style"] ?? null), 4 => ($context["outline"] ?? null), 5 => ($context["darkOrLight"] ?? null), 6 => ($context["default"] ?? null), 7 => $this->getAttribute($context["button"], "size", array()), 8 => ($context["classes"] ?? null)), "method"));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
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
        return "macros/bootstrap_tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 57,  367 => 56,  350 => 55,  331 => 51,  325 => 49,  323 => 48,  317 => 47,  310 => 46,  290 => 45,  272 => 42,  269 => 41,  266 => 40,  263 => 39,  260 => 38,  257 => 37,  254 => 36,  251 => 35,  248 => 34,  234 => 33,  216 => 30,  200 => 29,  182 => 26,  179 => 25,  176 => 24,  173 => 23,  170 => 22,  167 => 21,  164 => 20,  161 => 19,  158 => 18,  155 => 17,  152 => 16,  149 => 15,  135 => 14,  117 => 11,  104 => 10,  86 => 7,  73 => 6,  55 => 3,  42 => 2,  37 => 54,  34 => 44,  31 => 32,  28 => 28,  25 => 13,  22 => 9,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Alias to backgroundStyle() #}
{% macro style(style, noTextClass) %}
    {{ _self.backgroundStyle(style, noTextClass)|trim }}
{% endmacro %}

{% macro backgroundStyle(style, noTextClass) %}
    {{ (style ? 'bg-' ~ style) ~ ( noTextClass ?: ' ' ~ _self.textStyle(style)|trim ) }}
{% endmacro %}

{% macro textStyle(style, default) %}
    {{ 'text-' ~ _self.processStyle(style, true, default)|trim }}
{% endmacro %}

{% macro navbarStyle(style, default, override_page_style) %}
    {% if not override_page_style %}
        {% set style = default %}
    {% else %}
        {% set style = style|default(default) %}
    {% endif %}
    {% set output = 'navbar-' %}
    {% if style not in ['primary', 'success', 'danger', 'secondary', 'info', 'dark', 'faded', 'blue', 'indigo', 'purple', 'pink', 'red', 'green', 'teal', 'cyan'] %}
        {% set output = output ~ 'light' %}
    {% else %}
        {% set output = output ~ 'dark' %}
    {% endif %}
    {{ output ~ ' ' ~ 'bg-' ~ style }}
{% endmacro %}

{% macro buttonStyle(style, isOutline, darkOrLight, default, size) %}
    {{ 'btn-' ~ (isOutline ? 'outline-') ~ _self.processStyle(style, darkOrLight|defined(true), default)|trim ~ (size ? ' btn-' ~ size) }}
{% endmacro %}

{% macro processStyle(style, inversed, default) %}
    {% set output = null %}
    {% if inversed %}
        {% if style in ['primary', 'success', 'danger', 'info', 'dark', 'faded', 'blue', 'indigo', 'purple', 'pink', 'red', 'green', 'teal', 'cyan'] %}
            {% set output = 'light' %}
        {% else %}
            {% set output = default|defined('dark') %}
        {% endif %}
    {% endif %}
    {{ output|defined(style)|defined(default) }}
{% endmacro %}

{% macro button(url, text, icon, style, outline, darkOrLight, default, size, classes) %}
  <a href=\"{{ url starts with 'http' ? url : url(url) }}\" alt=\"{{ text }}\"
     class=\"btn {{ _self.buttonStyle(style, outline, darkOrLight, default, size)|trim }} {{ classes }}\">
      {% if icon %}
        <i class=\"fas fa-{{ icon }}\"></i>
      {% endif %}
      {{ text }}
  </a>
{% endmacro %}

{% macro buttons(buttons, style, outline, darkOrLight, default, classes) %}
    {% for button in buttons %}
        {{ _self.button(button.url, button.text, button.icon, style, outline, darkOrLight, default, button.size, classes)|trim }}
    {% endfor %}
{% endmacro %}
", "macros/bootstrap_tools.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\bootstrap-blog\\templates\\macros\\bootstrap_tools.html.twig");
    }
}
