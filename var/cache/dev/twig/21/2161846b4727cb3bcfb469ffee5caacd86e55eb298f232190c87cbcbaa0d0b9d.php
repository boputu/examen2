<?php

/* EsqueletoBundle:Default:usuarios.html.twig */
class __TwigTemplate_6d80cf1b61af1ecfcd196c10204a99d734a9897d05eb539d6e7b0f9d482c0cad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:usuarios.html.twig", 1);
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
        $__internal_9f6dc483ae5c74d78ab9fa87ee6bf1600e70969a149bb35abe1d6db7dc7357de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6dc483ae5c74d78ab9fa87ee6bf1600e70969a149bb35abe1d6db7dc7357de->enter($__internal_9f6dc483ae5c74d78ab9fa87ee6bf1600e70969a149bb35abe1d6db7dc7357de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:usuarios.html.twig"));

        $__internal_967db51f245c11f892095be248c65b3f137d8d175d00091e311b075158996d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967db51f245c11f892095be248c65b3f137d8d175d00091e311b075158996d3a->enter($__internal_967db51f245c11f892095be248c65b3f137d8d175d00091e311b075158996d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:usuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f6dc483ae5c74d78ab9fa87ee6bf1600e70969a149bb35abe1d6db7dc7357de->leave($__internal_9f6dc483ae5c74d78ab9fa87ee6bf1600e70969a149bb35abe1d6db7dc7357de_prof);

        
        $__internal_967db51f245c11f892095be248c65b3f137d8d175d00091e311b075158996d3a->leave($__internal_967db51f245c11f892095be248c65b3f137d8d175d00091e311b075158996d3a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee13efe7ecbccc2f11cff5606d0e545dfee5624142c6f0b9ad9165e2c2ddb4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee13efe7ecbccc2f11cff5606d0e545dfee5624142c6f0b9ad9165e2c2ddb4d2->enter($__internal_ee13efe7ecbccc2f11cff5606d0e545dfee5624142c6f0b9ad9165e2c2ddb4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20d480bef81e156f0759c42d25e50460cb2d60c5ecf8f8ec1f92488df6955a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d480bef81e156f0759c42d25e50460cb2d60c5ecf8f8ec1f92488df6955a7c->enter($__internal_20d480bef81e156f0759c42d25e50460cb2d60c5ecf8f8ec1f92488df6955a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_20d480bef81e156f0759c42d25e50460cb2d60c5ecf8f8ec1f92488df6955a7c->leave($__internal_20d480bef81e156f0759c42d25e50460cb2d60c5ecf8f8ec1f92488df6955a7c_prof);

        
        $__internal_ee13efe7ecbccc2f11cff5606d0e545dfee5624142c6f0b9ad9165e2c2ddb4d2->leave($__internal_ee13efe7ecbccc2f11cff5606d0e545dfee5624142c6f0b9ad9165e2c2ddb4d2_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:usuarios.html.twig";
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
", "EsqueletoBundle:Default:usuarios.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\src\\EsqueletoBundle/Resources/views/Default/usuarios.html.twig");
    }
}
