<?php

/* EsqueletoBundle:Default:login.html.twig */
class __TwigTemplate_b5d5fe8605085a47b578bd941628d836f9ee560b2830e7898dca33486c169f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca60ca4a7a2edb084dc798bfaf8078dcfb2c6c340cfc3f42d10c6c2c45ed306b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca60ca4a7a2edb084dc798bfaf8078dcfb2c6c340cfc3f42d10c6c2c45ed306b->enter($__internal_ca60ca4a7a2edb084dc798bfaf8078dcfb2c6c340cfc3f42d10c6c2c45ed306b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:login.html.twig"));

        $__internal_11019f24949d932a411b7647ee9e8c053f42c89e56560b2a5416410039390c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11019f24949d932a411b7647ee9e8c053f42c89e56560b2a5416410039390c5c->enter($__internal_11019f24949d932a411b7647ee9e8c053f42c89e56560b2a5416410039390c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca60ca4a7a2edb084dc798bfaf8078dcfb2c6c340cfc3f42d10c6c2c45ed306b->leave($__internal_ca60ca4a7a2edb084dc798bfaf8078dcfb2c6c340cfc3f42d10c6c2c45ed306b_prof);

        
        $__internal_11019f24949d932a411b7647ee9e8c053f42c89e56560b2a5416410039390c5c->leave($__internal_11019f24949d932a411b7647ee9e8c053f42c89e56560b2a5416410039390c5c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_56494f957635785f00f07323357d0a994d7c676592b1ac9a3b5ebd94f3bc58a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56494f957635785f00f07323357d0a994d7c676592b1ac9a3b5ebd94f3bc58a9->enter($__internal_56494f957635785f00f07323357d0a994d7c676592b1ac9a3b5ebd94f3bc58a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49924e89cc0c7ee8556d37ecb1934e09770186fce0098a0cc1a2ab6e22eeca79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49924e89cc0c7ee8556d37ecb1934e09770186fce0098a0cc1a2ab6e22eeca79->enter($__internal_49924e89cc0c7ee8556d37ecb1934e09770186fce0098a0cc1a2ab6e22eeca79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 19
        echo "
    <button type=\"submit\">login</button>
</form>

";
        
        $__internal_49924e89cc0c7ee8556d37ecb1934e09770186fce0098a0cc1a2ab6e22eeca79->leave($__internal_49924e89cc0c7ee8556d37ecb1934e09770186fce0098a0cc1a2ab6e22eeca79_prof);

        
        $__internal_56494f957635785f00f07323357d0a994d7c676592b1ac9a3b5ebd94f3bc58a9->leave($__internal_56494f957635785f00f07323357d0a994d7c676592b1ac9a3b5ebd94f3bc58a9_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  65 => 9,  60 => 7,  57 => 6,  51 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>

{% endblock %}
", "EsqueletoBundle:Default:login.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\src\\EsqueletoBundle/Resources/views/Default/login.html.twig");
    }
}
