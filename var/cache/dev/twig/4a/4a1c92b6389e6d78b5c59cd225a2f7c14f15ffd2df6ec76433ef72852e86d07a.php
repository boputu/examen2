<?php

/* EsqueletoBundle:Default:cards.html.twig */
class __TwigTemplate_76cf1ca8c469f2844f2af9e727f1b2b8599f85ec32bd4f0a3c7eb783f1db329a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:cards.html.twig", 1);
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
        $__internal_3dd4e9f264fe0b9dedf0d9b8f993722843d6654ad55bb1c854a6014823ebf2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd4e9f264fe0b9dedf0d9b8f993722843d6654ad55bb1c854a6014823ebf2af->enter($__internal_3dd4e9f264fe0b9dedf0d9b8f993722843d6654ad55bb1c854a6014823ebf2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:cards.html.twig"));

        $__internal_206a9b5514e4760f8d6fffc278b310bebeaf8b9d01defa131c4756dbff2b8765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206a9b5514e4760f8d6fffc278b310bebeaf8b9d01defa131c4756dbff2b8765->enter($__internal_206a9b5514e4760f8d6fffc278b310bebeaf8b9d01defa131c4756dbff2b8765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:cards.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd4e9f264fe0b9dedf0d9b8f993722843d6654ad55bb1c854a6014823ebf2af->leave($__internal_3dd4e9f264fe0b9dedf0d9b8f993722843d6654ad55bb1c854a6014823ebf2af_prof);

        
        $__internal_206a9b5514e4760f8d6fffc278b310bebeaf8b9d01defa131c4756dbff2b8765->leave($__internal_206a9b5514e4760f8d6fffc278b310bebeaf8b9d01defa131c4756dbff2b8765_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e02c08c58a6d9a08684d0aed11ffec2e6b311c93099e94807dbc625b3757ebd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02c08c58a6d9a08684d0aed11ffec2e6b311c93099e94807dbc625b3757ebd1->enter($__internal_e02c08c58a6d9a08684d0aed11ffec2e6b311c93099e94807dbc625b3757ebd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5993ca6cdaef3b3c344d8cfba902278a685453a7bb5f1771d1d889886f7add05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5993ca6cdaef3b3c344d8cfba902278a685453a7bb5f1771d1d889886f7add05->enter($__internal_5993ca6cdaef3b3c344d8cfba902278a685453a7bb5f1771d1d889886f7add05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["royale"]) ? $context["royale"] : $this->getContext($context, "royale")));
        foreach ($context['_seq'] as $context["_key"] => $context["croyale"]) {
            // line 4
            echo "ID: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["croyale"], "id", array()), "html", null, true);
            echo "<br>
Nombre: ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["croyale"], "nombre", array()), "html", null, true);
            echo "<br>
Tipo: ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["croyale"], "tipo", array()), "html", null, true);
            echo "<br><br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['croyale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5993ca6cdaef3b3c344d8cfba902278a685453a7bb5f1771d1d889886f7add05->leave($__internal_5993ca6cdaef3b3c344d8cfba902278a685453a7bb5f1771d1d889886f7add05_prof);

        
        $__internal_e02c08c58a6d9a08684d0aed11ffec2e6b311c93099e94807dbc625b3757ebd1->leave($__internal_e02c08c58a6d9a08684d0aed11ffec2e6b311c93099e94807dbc625b3757ebd1_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:cards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 6,  58 => 5,  53 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
{% for croyale in royale %}
ID: {{ croyale.id}}<br>
Nombre: {{ croyale.nombre}}<br>
Tipo: {{ croyale.tipo}}<br><br>
{% endfor %}
{% endblock %}
", "EsqueletoBundle:Default:cards.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\src\\EsqueletoBundle/Resources/views/Default/cards.html.twig");
    }
}
