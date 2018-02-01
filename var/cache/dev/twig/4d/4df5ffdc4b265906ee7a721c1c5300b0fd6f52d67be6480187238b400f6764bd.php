<?php

/* EsqueletoBundle:Default:edit.html.twig */
class __TwigTemplate_860a9c0b3a8ccf4b630170157ee628e15f242ae4e0f5410306d733def3b3a5e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:edit.html.twig", 1);
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
        $__internal_f55f02bcf7e8b9072cfb747c0166afa223d3ea349eb06f8b4a76a0ca17716227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55f02bcf7e8b9072cfb747c0166afa223d3ea349eb06f8b4a76a0ca17716227->enter($__internal_f55f02bcf7e8b9072cfb747c0166afa223d3ea349eb06f8b4a76a0ca17716227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:edit.html.twig"));

        $__internal_52dc6acd2c7bc7fa1e5894e4d324e3f04a7e966784aa79018c8a70d828270db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dc6acd2c7bc7fa1e5894e4d324e3f04a7e966784aa79018c8a70d828270db9->enter($__internal_52dc6acd2c7bc7fa1e5894e4d324e3f04a7e966784aa79018c8a70d828270db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f55f02bcf7e8b9072cfb747c0166afa223d3ea349eb06f8b4a76a0ca17716227->leave($__internal_f55f02bcf7e8b9072cfb747c0166afa223d3ea349eb06f8b4a76a0ca17716227_prof);

        
        $__internal_52dc6acd2c7bc7fa1e5894e4d324e3f04a7e966784aa79018c8a70d828270db9->leave($__internal_52dc6acd2c7bc7fa1e5894e4d324e3f04a7e966784aa79018c8a70d828270db9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45ec1894f22f9bbf377d6e98200c41c289ef88176b4f20f87b82f47957ff0a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ec1894f22f9bbf377d6e98200c41c289ef88176b4f20f87b82f47957ff0a96->enter($__internal_45ec1894f22f9bbf377d6e98200c41c289ef88176b4f20f87b82f47957ff0a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f415e7c506a510bf48617133403e0fcd60b02e46785da1658a2317d731c3b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f415e7c506a510bf48617133403e0fcd60b02e46785da1658a2317d731c3b9e->enter($__internal_1f415e7c506a510bf48617133403e0fcd60b02e46785da1658a2317d731c3b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Editar usuario ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuario", array()), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Actualizar usuario\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\" value=\"Borrar usuario\">
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Volver</a>
        </li>
    </ul>
    
";
        
        $__internal_1f415e7c506a510bf48617133403e0fcd60b02e46785da1658a2317d731c3b9e->leave($__internal_1f415e7c506a510bf48617133403e0fcd60b02e46785da1658a2317d731c3b9e_prof);

        
        $__internal_45ec1894f22f9bbf377d6e98200c41c289ef88176b4f20f87b82f47957ff0a96->leave($__internal_45ec1894f22f9bbf377d6e98200c41c289ef88176b4f20f87b82f47957ff0a96_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  73 => 12,  68 => 10,  64 => 9,  59 => 7,  55 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Editar usuario {{ usuario.usuario }}</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Actualizar usuario\" />
    {{ form_end(edit_form) }}
    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Borrar usuario\">
    {{ form_end(delete_form) }}

    <ul>
        <li>
            <a href=\"{{ path('usuario_index') }}\">Volver</a>
        </li>
    </ul>
    
{% endblock %}
", "EsqueletoBundle:Default:edit.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\src\\EsqueletoBundle/Resources/views/Default/edit.html.twig");
    }
}
