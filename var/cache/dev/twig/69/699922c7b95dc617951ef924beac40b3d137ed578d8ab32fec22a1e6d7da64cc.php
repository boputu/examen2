<?php

/* BorjaBundle:Default:index.html.twig */
class __TwigTemplate_e2e0f671bc25d8ad0cfb6a4adffdd4e4ddd15e578e09cff54b83dd6ab832c394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BorjaBundle:Default:index.html.twig", 1);
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
        $__internal_ef9108d983c96889d648f0690f0c16a70c2958c450dd1a251af40955cd3a1de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9108d983c96889d648f0690f0c16a70c2958c450dd1a251af40955cd3a1de7->enter($__internal_ef9108d983c96889d648f0690f0c16a70c2958c450dd1a251af40955cd3a1de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BorjaBundle:Default:index.html.twig"));

        $__internal_8b4d70d63266565e14d901be46cac3177ae907ec76495d958b40a50cf1db23dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4d70d63266565e14d901be46cac3177ae907ec76495d958b40a50cf1db23dd->enter($__internal_8b4d70d63266565e14d901be46cac3177ae907ec76495d958b40a50cf1db23dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BorjaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef9108d983c96889d648f0690f0c16a70c2958c450dd1a251af40955cd3a1de7->leave($__internal_ef9108d983c96889d648f0690f0c16a70c2958c450dd1a251af40955cd3a1de7_prof);

        
        $__internal_8b4d70d63266565e14d901be46cac3177ae907ec76495d958b40a50cf1db23dd->leave($__internal_8b4d70d63266565e14d901be46cac3177ae907ec76495d958b40a50cf1db23dd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_336b331d11ee3e38db72b5ac214522cbc444136a308bd43a46866e884e016808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_336b331d11ee3e38db72b5ac214522cbc444136a308bd43a46866e884e016808->enter($__internal_336b331d11ee3e38db72b5ac214522cbc444136a308bd43a46866e884e016808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23aac830c2c8c790ec4bea09ac95690d0ccac9ecf20805884bf2289b3a739d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23aac830c2c8c790ec4bea09ac95690d0ccac9ecf20805884bf2289b3a739d8a->enter($__internal_23aac830c2c8c790ec4bea09ac95690d0ccac9ecf20805884bf2289b3a739d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23aac830c2c8c790ec4bea09ac95690d0ccac9ecf20805884bf2289b3a739d8a->leave($__internal_23aac830c2c8c790ec4bea09ac95690d0ccac9ecf20805884bf2289b3a739d8a_prof);

        
        $__internal_336b331d11ee3e38db72b5ac214522cbc444136a308bd43a46866e884e016808->leave($__internal_336b331d11ee3e38db72b5ac214522cbc444136a308bd43a46866e884e016808_prof);

    }

    public function getTemplateName()
    {
        return "BorjaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
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
{% endblock %}
", "BorjaBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\src\\BorjaBundle/Resources/views/Default/index.html.twig");
    }
}
