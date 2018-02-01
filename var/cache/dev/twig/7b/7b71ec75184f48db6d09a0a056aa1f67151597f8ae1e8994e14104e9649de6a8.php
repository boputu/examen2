<?php

/* EsqueletoBundle:login:show.html.twig */
class __TwigTemplate_5ab03e04f6032f4a2c20eff2763684f4640545c71d862ff20c13eb701b222988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:login:show.html.twig", 1);
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
        $__internal_0a12cc2c8ceda30528b60edee62f636c09f63e7afa811220a679b70657d1732a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a12cc2c8ceda30528b60edee62f636c09f63e7afa811220a679b70657d1732a->enter($__internal_0a12cc2c8ceda30528b60edee62f636c09f63e7afa811220a679b70657d1732a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:login:show.html.twig"));

        $__internal_c04ad23742fac8e32793650caad0aa2f49bd23e4bd5199cba61c2c5e6dec8d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04ad23742fac8e32793650caad0aa2f49bd23e4bd5199cba61c2c5e6dec8d57->enter($__internal_c04ad23742fac8e32793650caad0aa2f49bd23e4bd5199cba61c2c5e6dec8d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:login:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a12cc2c8ceda30528b60edee62f636c09f63e7afa811220a679b70657d1732a->leave($__internal_0a12cc2c8ceda30528b60edee62f636c09f63e7afa811220a679b70657d1732a_prof);

        
        $__internal_c04ad23742fac8e32793650caad0aa2f49bd23e4bd5199cba61c2c5e6dec8d57->leave($__internal_c04ad23742fac8e32793650caad0aa2f49bd23e4bd5199cba61c2c5e6dec8d57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76a506f5f8c7d5ae198f65905a10f2ae3a77c045afa8fb7de549cdae706e77dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a506f5f8c7d5ae198f65905a10f2ae3a77c045afa8fb7de549cdae706e77dc->enter($__internal_76a506f5f8c7d5ae198f65905a10f2ae3a77c045afa8fb7de549cdae706e77dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1de6fce1bed6c4f50e1fe2f3e6b7cce8255d3489e8cf69644465c1995987b8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de6fce1bed6c4f50e1fe2f3e6b7cce8255d3489e8cf69644465c1995987b8f1->enter($__internal_1de6fce1bed6c4f50e1fe2f3e6b7cce8255d3489e8cf69644465c1995987b8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Login</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paco_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paco_edit", array("id" => $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1de6fce1bed6c4f50e1fe2f3e6b7cce8255d3489e8cf69644465c1995987b8f1->leave($__internal_1de6fce1bed6c4f50e1fe2f3e6b7cce8255d3489e8cf69644465c1995987b8f1_prof);

        
        $__internal_76a506f5f8c7d5ae198f65905a10f2ae3a77c045afa8fb7de549cdae706e77dc->leave($__internal_76a506f5f8c7d5ae198f65905a10f2ae3a77c045afa8fb7de549cdae706e77dc_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:login:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Login</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ login.id }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ login.username }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ login.email }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('paco_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('paco_edit', { 'id': login.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EsqueletoBundle:login:show.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\src\\EsqueletoBundle/Resources/views/login/show.html.twig");
    }
}
