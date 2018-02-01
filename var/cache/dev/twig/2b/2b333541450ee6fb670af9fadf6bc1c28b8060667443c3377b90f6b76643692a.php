<?php

/* EsqueletoBundle:Default:register.html.twig */
class __TwigTemplate_637271521785492343839ac6fe9f0a125e75c29f53d93b1a78a72b5d7023db75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:register.html.twig", 1);
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
        $__internal_49439868e32a3349231a59ef203402e497b74b4ff5ddf6dbb78a9f3945c49a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49439868e32a3349231a59ef203402e497b74b4ff5ddf6dbb78a9f3945c49a7b->enter($__internal_49439868e32a3349231a59ef203402e497b74b4ff5ddf6dbb78a9f3945c49a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:register.html.twig"));

        $__internal_963db842f0569f000efe8a5e5b767f3e433ce44863f5f77e0d6eff2b56b3d3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963db842f0569f000efe8a5e5b767f3e433ce44863f5f77e0d6eff2b56b3d3f5->enter($__internal_963db842f0569f000efe8a5e5b767f3e433ce44863f5f77e0d6eff2b56b3d3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49439868e32a3349231a59ef203402e497b74b4ff5ddf6dbb78a9f3945c49a7b->leave($__internal_49439868e32a3349231a59ef203402e497b74b4ff5ddf6dbb78a9f3945c49a7b_prof);

        
        $__internal_963db842f0569f000efe8a5e5b767f3e433ce44863f5f77e0d6eff2b56b3d3f5->leave($__internal_963db842f0569f000efe8a5e5b767f3e433ce44863f5f77e0d6eff2b56b3d3f5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c2660417e76fa9bcf2b9f029ee010743de588509150cc97c130c2b6ab91c4e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2660417e76fa9bcf2b9f029ee010743de588509150cc97c130c2b6ab91c4e3->enter($__internal_4c2660417e76fa9bcf2b9f029ee010743de588509150cc97c130c2b6ab91c4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24840c5507fa1e7a007a8d0b787e8c5775ef92339d013c2b59f9a55bd40d2bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24840c5507fa1e7a007a8d0b787e8c5775ef92339d013c2b59f9a55bd40d2bd9->enter($__internal_24840c5507fa1e7a007a8d0b787e8c5775ef92339d013c2b59f9a55bd40d2bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Registrar", array()), 'row');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_24840c5507fa1e7a007a8d0b787e8c5775ef92339d013c2b59f9a55bd40d2bd9->leave($__internal_24840c5507fa1e7a007a8d0b787e8c5775ef92339d013c2b59f9a55bd40d2bd9_prof);

        
        $__internal_4c2660417e76fa9bcf2b9f029ee010743de588509150cc97c130c2b6ab91c4e3->leave($__internal_4c2660417e76fa9bcf2b9f029ee010743de588509150cc97c130c2b6ab91c4e3_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  53 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}
    {{ form_row(form.Registrar) }}
{{ form_end(form) }}
{% endblock %}
", "EsqueletoBundle:Default:register.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\src\\EsqueletoBundle/Resources/views/Default/register.html.twig");
    }
}
