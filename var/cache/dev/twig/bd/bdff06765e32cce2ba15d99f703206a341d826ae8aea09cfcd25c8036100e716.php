<?php

/* EsqueletoBundle:login:new.html.twig */
class __TwigTemplate_993f5f93d8ff2aa5e2332c31022d9fc8e7d2ab1e0297fd793debd357957a64e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:login:new.html.twig", 1);
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
        $__internal_f565ef8c27f5938bc057c1ce0c6aea6b6c049c4e0bbfb1fef1d5414cb1a757da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f565ef8c27f5938bc057c1ce0c6aea6b6c049c4e0bbfb1fef1d5414cb1a757da->enter($__internal_f565ef8c27f5938bc057c1ce0c6aea6b6c049c4e0bbfb1fef1d5414cb1a757da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:login:new.html.twig"));

        $__internal_71ed774f14071ab3a9bb8303d2e98ea735e1e7355e5c6b18257dadeea480ce31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ed774f14071ab3a9bb8303d2e98ea735e1e7355e5c6b18257dadeea480ce31->enter($__internal_71ed774f14071ab3a9bb8303d2e98ea735e1e7355e5c6b18257dadeea480ce31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:login:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f565ef8c27f5938bc057c1ce0c6aea6b6c049c4e0bbfb1fef1d5414cb1a757da->leave($__internal_f565ef8c27f5938bc057c1ce0c6aea6b6c049c4e0bbfb1fef1d5414cb1a757da_prof);

        
        $__internal_71ed774f14071ab3a9bb8303d2e98ea735e1e7355e5c6b18257dadeea480ce31->leave($__internal_71ed774f14071ab3a9bb8303d2e98ea735e1e7355e5c6b18257dadeea480ce31_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf10655d6f7e45d35bf27a6f0d7e7a2340a76b7d89c9af3bcdf3b254ad4d3eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf10655d6f7e45d35bf27a6f0d7e7a2340a76b7d89c9af3bcdf3b254ad4d3eb4->enter($__internal_cf10655d6f7e45d35bf27a6f0d7e7a2340a76b7d89c9af3bcdf3b254ad4d3eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_658a95355482494f86145e77dcfce5a239edc0e3e8973eadb18715ab198f1391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658a95355482494f86145e77dcfce5a239edc0e3e8973eadb18715ab198f1391->enter($__internal_658a95355482494f86145e77dcfce5a239edc0e3e8973eadb18715ab198f1391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Login creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paco_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_658a95355482494f86145e77dcfce5a239edc0e3e8973eadb18715ab198f1391->leave($__internal_658a95355482494f86145e77dcfce5a239edc0e3e8973eadb18715ab198f1391_prof);

        
        $__internal_cf10655d6f7e45d35bf27a6f0d7e7a2340a76b7d89c9af3bcdf3b254ad4d3eb4->leave($__internal_cf10655d6f7e45d35bf27a6f0d7e7a2340a76b7d89c9af3bcdf3b254ad4d3eb4_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:login:new.html.twig";
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
    <h1>Login creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('paco_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "EsqueletoBundle:login:new.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\src\\EsqueletoBundle/Resources/views/login/new.html.twig");
    }
}
