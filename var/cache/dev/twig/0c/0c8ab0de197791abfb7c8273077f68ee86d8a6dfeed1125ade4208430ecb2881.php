<?php

/* usuario/index.html.twig */
class __TwigTemplate_ca3d8603cc3d5ba6268b500d0b687db24c6fdb7de0aee839f89906cd4a3e1227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/index.html.twig", 1);
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
        $__internal_3dee94df845955cdd8c43ca36e9808a9e18ffd5afefd90e5eff8fb85cc6a8c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dee94df845955cdd8c43ca36e9808a9e18ffd5afefd90e5eff8fb85cc6a8c5e->enter($__internal_3dee94df845955cdd8c43ca36e9808a9e18ffd5afefd90e5eff8fb85cc6a8c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $__internal_3e3866423c6368773efe479081154466f98066db5a2ca0522c72eb6c332077d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3866423c6368773efe479081154466f98066db5a2ca0522c72eb6c332077d5->enter($__internal_3e3866423c6368773efe479081154466f98066db5a2ca0522c72eb6c332077d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dee94df845955cdd8c43ca36e9808a9e18ffd5afefd90e5eff8fb85cc6a8c5e->leave($__internal_3dee94df845955cdd8c43ca36e9808a9e18ffd5afefd90e5eff8fb85cc6a8c5e_prof);

        
        $__internal_3e3866423c6368773efe479081154466f98066db5a2ca0522c72eb6c332077d5->leave($__internal_3e3866423c6368773efe479081154466f98066db5a2ca0522c72eb6c332077d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd4f2c77c351f81f2390037736017070748fd4e6c7a502f7a4d5ac4493f7f477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4f2c77c351f81f2390037736017070748fd4e6c7a502f7a4d5ac4493f7f477->enter($__internal_fd4f2c77c351f81f2390037736017070748fd4e6c7a502f7a4d5ac4493f7f477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de3e95ad60406a5b968d79d410c4f27aa032ec0b2434dc53022f3110f264c71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3e95ad60406a5b968d79d410c4f27aa032ec0b2434dc53022f3110f264c71a->enter($__internal_de3e95ad60406a5b968d79d410c4f27aa032ec0b2434dc53022f3110f264c71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Lista de usuarios</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Contrasenya</th>
                <th>Ranking</th>
                <th>Level</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "usuario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "contrasenya", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "ranking", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "level", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">Mostrar usuario</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">Editar usuario</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_new");
            echo "\">Crear usuario</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

";
        
        $__internal_de3e95ad60406a5b968d79d410c4f27aa032ec0b2434dc53022f3110f264c71a->leave($__internal_de3e95ad60406a5b968d79d410c4f27aa032ec0b2434dc53022f3110f264c71a_prof);

        
        $__internal_fd4f2c77c351f81f2390037736017070748fd4e6c7a502f7a4d5ac4493f7f477->leave($__internal_fd4f2c77c351f81f2390037736017070748fd4e6c7a502f7a4d5ac4493f7f477_prof);

    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  114 => 36,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Lista de usuarios</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Contrasenya</th>
                <th>Ranking</th>
                <th>Level</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for usuario in usuarios %}
            <tr>
                <td><a href=\"{{ path('usuario_show', { 'id': usuario.id }) }}\">{{ usuario.id }}</a></td>
                <td>{{ usuario.nombre }}</td>
                <td>{{ usuario.usuario }}</td>
                <td>{{ usuario.contrasenya }}</td>
                <td>{{ usuario.ranking }}</td>
                <td>{{ usuario.level }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('usuario_show', { 'id': usuario.id }) }}\">Mostrar usuario</a>
                        </li>
                        <li>
                            <a href=\"{{ path('usuario_edit', { 'id': usuario.id }) }}\">Editar usuario</a>
                        </li>
                        <li>
                            <a href=\"{{ path('usuario_new') }}\">Crear usuario</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "usuario/index.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\app\\Resources\\views\\usuario\\index.html.twig");
    }
}
