<?php

/* EsqueletoBundle:Default:show.html.twig */
class __TwigTemplate_b7ecdfdf48e9c252047492cf1c94d1bba1f00237b56784ce594bd93bbc4e69a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:show.html.twig", 1);
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
        $__internal_83f786b7f31e759dac767b5e176a99472fa4659f3017c0ef20d5f2add156f0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f786b7f31e759dac767b5e176a99472fa4659f3017c0ef20d5f2add156f0fb->enter($__internal_83f786b7f31e759dac767b5e176a99472fa4659f3017c0ef20d5f2add156f0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:show.html.twig"));

        $__internal_b9125c028761c9be041e3e81f2364971042588791d0cb895af0f2971de145977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9125c028761c9be041e3e81f2364971042588791d0cb895af0f2971de145977->enter($__internal_b9125c028761c9be041e3e81f2364971042588791d0cb895af0f2971de145977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83f786b7f31e759dac767b5e176a99472fa4659f3017c0ef20d5f2add156f0fb->leave($__internal_83f786b7f31e759dac767b5e176a99472fa4659f3017c0ef20d5f2add156f0fb_prof);

        
        $__internal_b9125c028761c9be041e3e81f2364971042588791d0cb895af0f2971de145977->leave($__internal_b9125c028761c9be041e3e81f2364971042588791d0cb895af0f2971de145977_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76c8653f916cf903638815628a2428dc4dc2aa1d5e87119a06959fe4d0855c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c8653f916cf903638815628a2428dc4dc2aa1d5e87119a06959fe4d0855c68->enter($__internal_76c8653f916cf903638815628a2428dc4dc2aa1d5e87119a06959fe4d0855c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1638f52f13aeeef4a614228c2aa247aeb160aa6fc37f49df43c2a300dec6deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1638f52f13aeeef4a614228c2aa247aeb160aa6fc37f49df43c2a300dec6deb->enter($__internal_d1638f52f13aeeef4a614228c2aa247aeb160aa6fc37f49df43c2a300dec6deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1638f52f13aeeef4a614228c2aa247aeb160aa6fc37f49df43c2a300dec6deb->leave($__internal_d1638f52f13aeeef4a614228c2aa247aeb160aa6fc37f49df43c2a300dec6deb_prof);

        
        $__internal_76c8653f916cf903638815628a2428dc4dc2aa1d5e87119a06959fe4d0855c68->leave($__internal_76c8653f916cf903638815628a2428dc4dc2aa1d5e87119a06959fe4d0855c68_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:show.html.twig";
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
", "EsqueletoBundle:Default:show.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\src\\EsqueletoBundle/Resources/views/Default/show.html.twig");
    }
}
