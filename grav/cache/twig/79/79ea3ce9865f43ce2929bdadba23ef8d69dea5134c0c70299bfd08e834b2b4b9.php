<?php

/* error.html.twig */
class __TwigTemplate_36d1863cee5945dfae3e23c23126017d4d2458a7249a990ad3aa5e7f8e590db4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"row\" style=\"height: 80vh\">
            <div class=\"col my-auto text-center\">
                <i class=\"fas fa-exclamation-triangle fa-3x text-danger py-3\"></i>
                <h1>";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("ERROR");
        echo " ";
        echo $this->getAttribute(($context["header"] ?? null), "http_response_code", array());
        echo "</h1>
                <div class=\"lead py-2\">";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    <div class=\"container\">
        <div class=\"row\" style=\"height: 80vh\">
            <div class=\"col my-auto text-center\">
                <i class=\"fas fa-exclamation-triangle fa-3x text-danger py-3\"></i>
                <h1>{{ 'ERROR'|t }} {{ header.http_response_code }}</h1>
                <div class=\"lead py-2\">{{ page.content }}</div>
            </div>
        </div>
    </div>
{% endblock %}
", "error.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\bootstrap-blog\\templates\\error.html.twig");
    }
}
