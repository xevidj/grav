<?php

/* partials/partial_item.html.twig */
class __TwigTemplate_7ff1a7e72c06b66c12b2c264a7b717b56abf870c51f2f7e4a8e57c386c1d095c extends Twig_Template
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
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_width", array()), 1024);
        // line 2
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_height", array()), 600);
        echo "  ";
        // line 3
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_file", array());
        // line 4
        if (($context["header_image_file"] ?? null)) {
            // line 5
            echo "    ";
            $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["header_image_file"] ?? null), array(), "array");
        } else {
            // line 7
            echo "    ";
            $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        }
        // line 9
        echo "
<div class=\"item-heading\">
  <time data-toggle=\"tooltip\" title=\"";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "dateformat", array()), "long", array()));
        echo "\" class=\"text-secondary\"
        datetime=\"";
        // line 12
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "c");
        echo "\">
    <small><i class=\"far fa-clock\"></i>&nbsp;";
        // line 13
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "dateformat", array()), "short", array()));
        echo "</small>
  </time>
  <h2 class=\"item-title\">
      ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 17
            echo "        <a class=\"btn btn-outline-secondary\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\" target=\"_blank\"><i class=\"fas fa-link fa-md\"></i></a>
      ";
        }
        // line 19
        echo "      ";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "
  </h2>
  <div class=\"item-categories\">
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "category", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "        <a data-toggle=\"tooltip\" title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("TAXONOMY.SEE_OTHER_PAGES_OF", twig_capitalize_string_filter($this->env, $context["category"]));
            echo "\"
           class=\"badge badge-pill badge-";
            // line 24
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), "secondary");
            echo " text-uppercase font-weight-normal\"
           href=\"";
            // line 25
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["parent"] ?? null), "url", array()), "/");
            echo "/category";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
            echo $context["category"];
            echo "\">";
            echo $context["category"];
            echo "</a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </div>
</div>
";
        // line 29
        if (($context["header_image_media"] ?? null)) {
            // line 30
            echo "  <div class=\"featured-image text-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_align", array()), "center");
            echo "\">
      ";
            // line 31
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropResize", array(0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)), "method"), "html", array());
            echo "
  </div>
";
        }
        // line 34
        echo "<div class=\"item-content text-justify\">
    ";
        // line 35
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
</div>
<div class=\"btn-toolbar justify-content-between\" role=\"toolbar\" aria-label=\"Item toolbar buttons\">
    ";
        // line 38
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 39
            echo "      <div class=\"item-tags d-inline-block\">
        <i class=\"fas fa-tags text-";
            // line 40
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), "primary");
            echo "\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("TAXONOMY.TAGS");
            echo ":
          ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 42
                echo "            <a class=\"btn btn-sm ";
                echo $this->getAttribute(($context["bsTools"] ?? null), "buttonStyle", array(0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), 1 => true, 2 => false, 3 => "dark"), "method");
                echo "\"
               href=\"";
                // line 43
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["parent"] ?? null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      </div>
    ";
        }
        // line 47
        echo "  <div class=\"btn-group\">
      ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 49
            echo "        <a href=\"";
            echo (((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $this->getAttribute($context["button"], "url", array())) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "http") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) ? ($this->getAttribute($context["button"], "url", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", array()))));
            echo "\"
           class=\"btn ";
            // line 50
            echo $this->getAttribute(($context["bsTools"] ?? null), "buttonStyle", array(0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), 1 => true, 2 => false, 3 => "dark"), "method");
            echo " ";
            echo $this->getAttribute($context["button"], "class", array());
            echo "\">
            ";
            // line 51
            if ($this->getAttribute($context["button"], "icon", array())) {
                // line 52
                echo "              <i class=\"fas fa-";
                echo $this->getAttribute($context["button"], "icon", array());
                echo "\"></i>
            ";
            }
            // line 54
            echo "            ";
            echo $this->getAttribute($context["button"], "text", array());
            echo "
        </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "  </div>
</div>

";
        // line 60
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "item", array()), "show_prev_next", array())) {
            // line 61
            echo "  <div class=\"d-flex flex-row py-3 mt-3\">
      ";
            // line 62
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 63
                echo "        <a class=\"btn ";
                echo $this->getAttribute(($context["bsTools"] ?? null), "buttonStyle", array(0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), 1 => true, 2 => false, 3 => "primary"), "method");
                echo "\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\"><i
              class=\"fas fa-chevron-left\"></i> ";
                // line 64
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("ITEM.PREVIOUS");
                echo "</a>
      ";
            }
            // line 66
            echo "      ";
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 67
                echo "        <a class=\"ml-auto btn ";
                echo $this->getAttribute(($context["bsTools"] ?? null), "buttonStyle", array(0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "style", array()), 1 => true, 2 => false, 3 => "primary"), "method");
                echo "\"
           href=\"";
                // line 68
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("ITEM.NEXT");
                echo " <i class=\"fas fa-chevron-right\"></i></a>
      ";
            }
            // line 70
            echo "  </div>
";
        }
        // line 72
        echo "
";
        // line 73
        $context["comments"] = array_merge($this->getAttribute(($context["theme_config"] ?? null), "comments", array()), (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "comments", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "comments", array()), array())) : (array())));
        // line 74
        if ($this->getAttribute(($context["comments"] ?? null), "enabled", array())) {
            // line 75
            echo "  <div class=\"comments\">
      ";
            // line 76
            $this->loadTemplate("partials/comments.html.twig", "partials/partial_item.html.twig", 76)->display(array_merge($context, array("page" => ($context["page"] ?? null), "config" => ($context["comments"] ?? null))));
            // line 77
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/partial_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 77,  247 => 76,  244 => 75,  242 => 74,  240 => 73,  237 => 72,  233 => 70,  226 => 68,  221 => 67,  218 => 66,  213 => 64,  206 => 63,  204 => 62,  201 => 61,  199 => 60,  194 => 57,  184 => 54,  178 => 52,  176 => 51,  170 => 50,  165 => 49,  161 => 48,  158 => 47,  154 => 45,  141 => 43,  136 => 42,  132 => 41,  126 => 40,  123 => 39,  121 => 38,  115 => 35,  112 => 34,  106 => 31,  101 => 30,  99 => 29,  95 => 27,  82 => 25,  78 => 24,  73 => 23,  69 => 22,  62 => 19,  56 => 17,  54 => 16,  48 => 13,  44 => 12,  40 => 11,  36 => 9,  32 => 7,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set header_image_width  = page.header.image_width|defined(1024) %}
{% set header_image_height = page.header.image_height|defined(600) %}  {# Default aspect ratio 2:1 #}
{% set header_image_file = page.header.image_file %}
{% if header_image_file %}
    {% set header_image_media = page.media.images[header_image_file] %}
{% else %}
    {% set header_image_media = page.media.images|first %}
{% endif %}

<div class=\"item-heading\">
  <time data-toggle=\"tooltip\" title=\"{{ page.date|date(config.system.pages.dateformat.long) }}\" class=\"text-secondary\"
        datetime=\"{{ page.date|date(\"c\") }}\">
    <small><i class=\"far fa-clock\"></i>&nbsp;{{ page.date|date(config.system.pages.dateformat.short) }}</small>
  </time>
  <h2 class=\"item-title\">
      {% if page.header.link %}
        <a class=\"btn btn-outline-secondary\" href=\"{{ page.header.link }}\" target=\"_blank\"><i class=\"fas fa-link fa-md\"></i></a>
      {% endif %}
      {{ page.title }}
  </h2>
  <div class=\"item-categories\">
      {% for category in page.taxonomy.category %}
        <a data-toggle=\"tooltip\" title=\"{{ 'TAXONOMY.SEE_OTHER_PAGES_OF'|t(category|capitalize) }}\"
           class=\"badge badge-pill badge-{{ page.header.style|defined('secondary') }} text-uppercase font-weight-normal\"
           href=\"{{ parent.url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\">{{ category }}</a>
      {% endfor %}
  </div>
</div>
{% if header_image_media %}
  <div class=\"featured-image text-{{ page.header.header_image_align|defined('center') }}\">
      {{ header_image_media.cropResize(header_image_width, header_image_height).html }}
  </div>
{% endif %}
<div class=\"item-content text-justify\">
    {{ page.content }}
</div>
<div class=\"btn-toolbar justify-content-between\" role=\"toolbar\" aria-label=\"Item toolbar buttons\">
    {% if page.taxonomy.tag %}
      <div class=\"item-tags d-inline-block\">
        <i class=\"fas fa-tags text-{{ page.header.style|defined('primary') }}\"></i> {{ 'TAXONOMY.TAGS'|t }}:
          {% for tag in page.taxonomy.tag %}
            <a class=\"btn btn-sm {{ bsTools.buttonStyle(page.header.style, true, false, 'dark') }}\"
               href=\"{{ parent.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>
          {% endfor %}
      </div>
    {% endif %}
  <div class=\"btn-group\">
      {% for button in page.header.buttons %}
        <a href=\"{{ button.url starts with 'http' ? button.url : url(button.url) }}\"
           class=\"btn {{ bsTools.buttonStyle(page.header.style, true, false, 'dark') }} {{ button.class }}\">
            {% if button.icon %}
              <i class=\"fas fa-{{ button.icon }}\"></i>
            {% endif %}
            {{ button.text }}
        </a>
      {% endfor %}
  </div>
</div>

{% if theme_config.item.show_prev_next %}
  <div class=\"d-flex flex-row py-3 mt-3\">
      {% if not page.isLast %}
        <a class=\"btn {{ bsTools.buttonStyle(page.header.style, true, false, 'primary') }}\" href=\"{{ page.prevSibling.url }}\"><i
              class=\"fas fa-chevron-left\"></i> {{ 'ITEM.PREVIOUS'|t }}</a>
      {% endif %}
      {% if not page.isFirst %}
        <a class=\"ml-auto btn {{ bsTools.buttonStyle(page.header.style, true, false, 'primary') }}\"
           href=\"{{ page.nextSibling.url }}\">{{ 'ITEM.NEXT'|t }} <i class=\"fas fa-chevron-right\"></i></a>
      {% endif %}
  </div>
{% endif %}

{% set comments = array_merge(theme_config.comments, page.header.comments|default({})) %}
{% if comments.enabled %}
  <div class=\"comments\">
      {% include 'partials/comments.html.twig' with {'page':page, 'config': comments} %}
  </div>
{% endif %}
", "partials/partial_item.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\bootstrap-blog\\templates\\partials\\partial_item.html.twig");
    }
}
