<?php

/* EsqueletoBundle:Usuario:index.html.twig */
class __TwigTemplate_1af525ed3f43678001cc5e2e6b2ca2972690082e4ec8de085469b42bb57d1582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Usuario:index.html.twig", 1);
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
        $__internal_7c060941073085e9afb7e1d0821343344142e6abbe934814a996640c61398c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c060941073085e9afb7e1d0821343344142e6abbe934814a996640c61398c87->enter($__internal_7c060941073085e9afb7e1d0821343344142e6abbe934814a996640c61398c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Usuario:index.html.twig"));

        $__internal_a32fbcc7ce3c1e388d750b9769ca02c5390bec328b9fbb1336228cff6b548f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32fbcc7ce3c1e388d750b9769ca02c5390bec328b9fbb1336228cff6b548f35->enter($__internal_a32fbcc7ce3c1e388d750b9769ca02c5390bec328b9fbb1336228cff6b548f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Usuario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c060941073085e9afb7e1d0821343344142e6abbe934814a996640c61398c87->leave($__internal_7c060941073085e9afb7e1d0821343344142e6abbe934814a996640c61398c87_prof);

        
        $__internal_a32fbcc7ce3c1e388d750b9769ca02c5390bec328b9fbb1336228cff6b548f35->leave($__internal_a32fbcc7ce3c1e388d750b9769ca02c5390bec328b9fbb1336228cff6b548f35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90e2c86e70b6fc4ed8f42b67091644af6c969fb86165008fbe91430b43f2f4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e2c86e70b6fc4ed8f42b67091644af6c969fb86165008fbe91430b43f2f4e7->enter($__internal_90e2c86e70b6fc4ed8f42b67091644af6c969fb86165008fbe91430b43f2f4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37a48a3ed26d98c067b264c3c762e642284e06e454006c41c0ffcd0d304f08b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a48a3ed26d98c067b264c3c762e642284e06e454006c41c0ffcd0d304f08b7->enter($__internal_37a48a3ed26d98c067b264c3c762e642284e06e454006c41c0ffcd0d304f08b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_37a48a3ed26d98c067b264c3c762e642284e06e454006c41c0ffcd0d304f08b7->leave($__internal_37a48a3ed26d98c067b264c3c762e642284e06e454006c41c0ffcd0d304f08b7_prof);

        
        $__internal_90e2c86e70b6fc4ed8f42b67091644af6c969fb86165008fbe91430b43f2f4e7->leave($__internal_90e2c86e70b6fc4ed8f42b67091644af6c969fb86165008fbe91430b43f2f4e7_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Usuario:index.html.twig";
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
", "EsqueletoBundle:Usuario:index.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\src\\EsqueletoBundle/Resources/views/Usuario/index.html.twig");
    }
}
