<?php

/* usuario/show.html.twig */
class __TwigTemplate_c0b5d727978a74db50730d08066bff8d8442f681953fb064edf6165dbbfa92d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/show.html.twig", 1);
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
        $__internal_28b2fd9af1e7d8ff3298ef31230ad6ad3ec4ca755063aab2c1f0c887aeb6d2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b2fd9af1e7d8ff3298ef31230ad6ad3ec4ca755063aab2c1f0c887aeb6d2aa->enter($__internal_28b2fd9af1e7d8ff3298ef31230ad6ad3ec4ca755063aab2c1f0c887aeb6d2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $__internal_fa8ae9105fc44061af7cc9e62bcd50b32d491fd5bbad84462444a4136955cab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8ae9105fc44061af7cc9e62bcd50b32d491fd5bbad84462444a4136955cab5->enter($__internal_fa8ae9105fc44061af7cc9e62bcd50b32d491fd5bbad84462444a4136955cab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28b2fd9af1e7d8ff3298ef31230ad6ad3ec4ca755063aab2c1f0c887aeb6d2aa->leave($__internal_28b2fd9af1e7d8ff3298ef31230ad6ad3ec4ca755063aab2c1f0c887aeb6d2aa_prof);

        
        $__internal_fa8ae9105fc44061af7cc9e62bcd50b32d491fd5bbad84462444a4136955cab5->leave($__internal_fa8ae9105fc44061af7cc9e62bcd50b32d491fd5bbad84462444a4136955cab5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c998db18aa0ba9825728382a285be73477db8bb7fb4d88e4614de46da9414e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c998db18aa0ba9825728382a285be73477db8bb7fb4d88e4614de46da9414e65->enter($__internal_c998db18aa0ba9825728382a285be73477db8bb7fb4d88e4614de46da9414e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d1d6bbf83b300ef3233baaca7f1677e9879746df2d31f2eb206e87e6eab82bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1d6bbf83b300ef3233baaca7f1677e9879746df2d31f2eb206e87e6eab82bb->enter($__internal_7d1d6bbf83b300ef3233baaca7f1677e9879746df2d31f2eb206e87e6eab82bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Mostrando el usuario ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuario", array()), "html", null, true);
        echo "</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Usuario</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contrasenya</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "contrasenya", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ranking</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "ranking", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Level</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "level", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Volver</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\">Editar usuario</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Borrar usuario\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7d1d6bbf83b300ef3233baaca7f1677e9879746df2d31f2eb206e87e6eab82bb->leave($__internal_7d1d6bbf83b300ef3233baaca7f1677e9879746df2d31f2eb206e87e6eab82bb_prof);

        
        $__internal_c998db18aa0ba9825728382a285be73477db8bb7fb4d88e4614de46da9414e65->leave($__internal_c998db18aa0ba9825728382a285be73477db8bb7fb4d88e4614de46da9414e65_prof);

    }

    public function getTemplateName()
    {
        return "usuario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 43,  110 => 40,  104 => 37,  94 => 30,  87 => 26,  80 => 22,  73 => 18,  66 => 14,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Mostrando el usuario {{ usuario.usuario }}</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ usuario.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ usuario.nombre }}</td>
            </tr>
            <tr>
                <th>Usuario</th>
                <td>{{ usuario.usuario }}</td>
            </tr>
            <tr>
                <th>Contrasenya</th>
                <td>{{ usuario.contrasenya }}</td>
            </tr>
            <tr>
                <th>Ranking</th>
                <td>{{ usuario.ranking }}</td>
            </tr>
            <tr>
                <th>Level</th>
                <td>{{ usuario.level }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('usuario_index') }}\">Volver</a>
        </li>
        <li>
            <a href=\"{{ path('usuario_edit', { 'id': usuario.id }) }}\">Editar usuario</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Borrar usuario\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "usuario/show.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\app\\Resources\\views\\usuario\\show.html.twig");
    }
}
