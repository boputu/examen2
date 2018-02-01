<?php

/* usuario/edit.html.twig */
class __TwigTemplate_7e9d519787a91d2a99e4cf828d9cd5e3cd596400986b0b580e57eba7ca783208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/edit.html.twig", 1);
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
        $__internal_a5f60e3b94890023cb4443bf79ee5f62484b42576d1016506905868cbc28b392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f60e3b94890023cb4443bf79ee5f62484b42576d1016506905868cbc28b392->enter($__internal_a5f60e3b94890023cb4443bf79ee5f62484b42576d1016506905868cbc28b392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/edit.html.twig"));

        $__internal_ae51227563fbba630abb5bb09c49f23ce19f84f59a6831e2da2244acc1633e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae51227563fbba630abb5bb09c49f23ce19f84f59a6831e2da2244acc1633e06->enter($__internal_ae51227563fbba630abb5bb09c49f23ce19f84f59a6831e2da2244acc1633e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5f60e3b94890023cb4443bf79ee5f62484b42576d1016506905868cbc28b392->leave($__internal_a5f60e3b94890023cb4443bf79ee5f62484b42576d1016506905868cbc28b392_prof);

        
        $__internal_ae51227563fbba630abb5bb09c49f23ce19f84f59a6831e2da2244acc1633e06->leave($__internal_ae51227563fbba630abb5bb09c49f23ce19f84f59a6831e2da2244acc1633e06_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3b809a2b60fc949010e962a10bb2c2800c8187467456ee83a8363811b953f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b809a2b60fc949010e962a10bb2c2800c8187467456ee83a8363811b953f27->enter($__internal_b3b809a2b60fc949010e962a10bb2c2800c8187467456ee83a8363811b953f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fb23e6251c39939432830e02fde842aeb500624e44a8a38a16f41739ccbcfe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb23e6251c39939432830e02fde842aeb500624e44a8a38a16f41739ccbcfe2->enter($__internal_5fb23e6251c39939432830e02fde842aeb500624e44a8a38a16f41739ccbcfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5fb23e6251c39939432830e02fde842aeb500624e44a8a38a16f41739ccbcfe2->leave($__internal_5fb23e6251c39939432830e02fde842aeb500624e44a8a38a16f41739ccbcfe2_prof);

        
        $__internal_b3b809a2b60fc949010e962a10bb2c2800c8187467456ee83a8363811b953f27->leave($__internal_b3b809a2b60fc949010e962a10bb2c2800c8187467456ee83a8363811b953f27_prof);

    }

    public function getTemplateName()
    {
        return "usuario/edit.html.twig";
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
", "usuario/edit.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\app\\Resources\\views\\usuario\\edit.html.twig");
    }
}
