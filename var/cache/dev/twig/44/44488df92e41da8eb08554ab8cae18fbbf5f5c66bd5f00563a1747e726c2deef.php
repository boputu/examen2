<?php

/* usuario/new.html.twig */
class __TwigTemplate_6fdf96fde985ad978523a4099c98667e9f825fad6d1fa98cf8a3e9ad37ee0e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/new.html.twig", 1);
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
        $__internal_7bfe40ad0269308c976cb643c755778e0b83a33a3fc9f3f3ab9c8d42c850a90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bfe40ad0269308c976cb643c755778e0b83a33a3fc9f3f3ab9c8d42c850a90d->enter($__internal_7bfe40ad0269308c976cb643c755778e0b83a33a3fc9f3f3ab9c8d42c850a90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $__internal_94e4563e499c73c467927dcc5ac2ff1227dc12aacca3b35cb981931f2821f8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e4563e499c73c467927dcc5ac2ff1227dc12aacca3b35cb981931f2821f8a5->enter($__internal_94e4563e499c73c467927dcc5ac2ff1227dc12aacca3b35cb981931f2821f8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bfe40ad0269308c976cb643c755778e0b83a33a3fc9f3f3ab9c8d42c850a90d->leave($__internal_7bfe40ad0269308c976cb643c755778e0b83a33a3fc9f3f3ab9c8d42c850a90d_prof);

        
        $__internal_94e4563e499c73c467927dcc5ac2ff1227dc12aacca3b35cb981931f2821f8a5->leave($__internal_94e4563e499c73c467927dcc5ac2ff1227dc12aacca3b35cb981931f2821f8a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c259ade39e1eea858ceb9343d6a2a57584f1b962b4f28c8e47ec8a4477d8878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c259ade39e1eea858ceb9343d6a2a57584f1b962b4f28c8e47ec8a4477d8878->enter($__internal_5c259ade39e1eea858ceb9343d6a2a57584f1b962b4f28c8e47ec8a4477d8878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9480a72ae85103b5d726d0e906803b8ae5950abd144820851593139c46474ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9480a72ae85103b5d726d0e906803b8ae5950abd144820851593139c46474ca->enter($__internal_a9480a72ae85103b5d726d0e906803b8ae5950abd144820851593139c46474ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de usuario</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Crear usuario\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Volver</a>
        </li>
    </ul>
";
        
        $__internal_a9480a72ae85103b5d726d0e906803b8ae5950abd144820851593139c46474ca->leave($__internal_a9480a72ae85103b5d726d0e906803b8ae5950abd144820851593139c46474ca_prof);

        
        $__internal_5c259ade39e1eea858ceb9343d6a2a57584f1b962b4f28c8e47ec8a4477d8878->leave($__internal_5c259ade39e1eea858ceb9343d6a2a57584f1b962b4f28c8e47ec8a4477d8878_prof);

    }

    public function getTemplateName()
    {
        return "usuario/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Creación de usuario</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Crear usuario\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('usuario_index') }}\">Volver</a>
        </li>
    </ul>
{% endblock %}
", "usuario/new.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\app\\Resources\\views\\usuario\\new.html.twig");
    }
}
