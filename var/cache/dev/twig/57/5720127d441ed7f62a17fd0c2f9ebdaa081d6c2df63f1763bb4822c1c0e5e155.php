<?php

/* EsqueletoBundle:login:index.html.twig */
class __TwigTemplate_d789eba32ef29a189ca1137cf8ee62e103c0b6b70da5998c8691a4e3264e4ea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:login:index.html.twig", 1);
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
        $__internal_70a801e8395f406d1d71c6e3c282eb8c5818aa405252f73b65d03f7b16c28396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a801e8395f406d1d71c6e3c282eb8c5818aa405252f73b65d03f7b16c28396->enter($__internal_70a801e8395f406d1d71c6e3c282eb8c5818aa405252f73b65d03f7b16c28396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:login:index.html.twig"));

        $__internal_44733ca56127c463ed3ac7ba10c78a956db8e8f35cec7194aae5deef4eb238df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44733ca56127c463ed3ac7ba10c78a956db8e8f35cec7194aae5deef4eb238df->enter($__internal_44733ca56127c463ed3ac7ba10c78a956db8e8f35cec7194aae5deef4eb238df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:login:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70a801e8395f406d1d71c6e3c282eb8c5818aa405252f73b65d03f7b16c28396->leave($__internal_70a801e8395f406d1d71c6e3c282eb8c5818aa405252f73b65d03f7b16c28396_prof);

        
        $__internal_44733ca56127c463ed3ac7ba10c78a956db8e8f35cec7194aae5deef4eb238df->leave($__internal_44733ca56127c463ed3ac7ba10c78a956db8e8f35cec7194aae5deef4eb238df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b0a1d140092f9fd00b9b0022b2584bec8158b7cdc8a2d1b9941254bbb03ddc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0a1d140092f9fd00b9b0022b2584bec8158b7cdc8a2d1b9941254bbb03ddc7->enter($__internal_4b0a1d140092f9fd00b9b0022b2584bec8158b7cdc8a2d1b9941254bbb03ddc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec92723a09a5e4f557d10cd4281865843eaf83548e7bf795fa5f5c143160620d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec92723a09a5e4f557d10cd4281865843eaf83548e7bf795fa5f5c143160620d->enter($__internal_ec92723a09a5e4f557d10cd4281865843eaf83548e7bf795fa5f5c143160620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Logins list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logins"]) ? $context["logins"] : $this->getContext($context, "logins")));
        foreach ($context['_seq'] as $context["_key"] => $context["login"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paco_show", array("id" => $this->getAttribute($context["login"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["login"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["login"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["login"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paco_show", array("id" => $this->getAttribute($context["login"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paco_edit", array("id" => $this->getAttribute($context["login"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['login'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
";
        
        $__internal_ec92723a09a5e4f557d10cd4281865843eaf83548e7bf795fa5f5c143160620d->leave($__internal_ec92723a09a5e4f557d10cd4281865843eaf83548e7bf795fa5f5c143160620d_prof);

        
        $__internal_4b0a1d140092f9fd00b9b0022b2584bec8158b7cdc8a2d1b9941254bbb03ddc7->leave($__internal_4b0a1d140092f9fd00b9b0022b2584bec8158b7cdc8a2d1b9941254bbb03ddc7_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Logins list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for login in logins %}
            <tr>
                <td><a href=\"{{ path('paco_show', { 'id': login.id }) }}\">{{ login.id }}</a></td>
                <td>{{ login.username }}</td>
                <td>{{ login.email }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('paco_show', { 'id': login.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('paco_edit', { 'id': login.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "EsqueletoBundle:login:index.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\src\\EsqueletoBundle/Resources/views/login/index.html.twig");
    }
}
