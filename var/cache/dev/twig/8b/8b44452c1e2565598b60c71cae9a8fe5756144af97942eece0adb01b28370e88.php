<?php

/* EsqueletoBundle:Default:index.html.twig */
class __TwigTemplate_b4c221ef94b860078f7d6918a973d6d987299d5cfbb79d0747ed7fa773d6724d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:index.html.twig", 1);
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
        $__internal_3382ee8f0ea093b13b94c4d2752a2700c5cb0e16343485154e3717aebd97b337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3382ee8f0ea093b13b94c4d2752a2700c5cb0e16343485154e3717aebd97b337->enter($__internal_3382ee8f0ea093b13b94c4d2752a2700c5cb0e16343485154e3717aebd97b337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:index.html.twig"));

        $__internal_83ede112081a335b64246e7765f2d7bbaa56b88610340d5edda1e84dbd7eeff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ede112081a335b64246e7765f2d7bbaa56b88610340d5edda1e84dbd7eeff6->enter($__internal_83ede112081a335b64246e7765f2d7bbaa56b88610340d5edda1e84dbd7eeff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3382ee8f0ea093b13b94c4d2752a2700c5cb0e16343485154e3717aebd97b337->leave($__internal_3382ee8f0ea093b13b94c4d2752a2700c5cb0e16343485154e3717aebd97b337_prof);

        
        $__internal_83ede112081a335b64246e7765f2d7bbaa56b88610340d5edda1e84dbd7eeff6->leave($__internal_83ede112081a335b64246e7765f2d7bbaa56b88610340d5edda1e84dbd7eeff6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_358ad8eb0c46ba22060f073e70b0c45292599ef52e5c386dc2f5fc038ba526c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358ad8eb0c46ba22060f073e70b0c45292599ef52e5c386dc2f5fc038ba526c5->enter($__internal_358ad8eb0c46ba22060f073e70b0c45292599ef52e5c386dc2f5fc038ba526c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ced337b6956f99d047b16839abb8a09eff62ac8b882502435e48421d7109cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ced337b6956f99d047b16839abb8a09eff62ac8b882502435e48421d7109cb3->enter($__internal_9ced337b6956f99d047b16839abb8a09eff62ac8b882502435e48421d7109cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9ced337b6956f99d047b16839abb8a09eff62ac8b882502435e48421d7109cb3->leave($__internal_9ced337b6956f99d047b16839abb8a09eff62ac8b882502435e48421d7109cb3_prof);

        
        $__internal_358ad8eb0c46ba22060f073e70b0c45292599ef52e5c386dc2f5fc038ba526c5->leave($__internal_358ad8eb0c46ba22060f073e70b0c45292599ef52e5c386dc2f5fc038ba526c5_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:index.html.twig";
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
", "EsqueletoBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\src\\EsqueletoBundle/Resources/views/Default/index.html.twig");
    }
}
