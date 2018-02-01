<?php

/* base.html.twig */
class __TwigTemplate_86772047284e53516357911e5f667eafa7a7a01ef5aee93d237fd57d276efa77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e44dc394cdc06bafe0743d22e13ae0abecfb805936b510418f645ecf546a60c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44dc394cdc06bafe0743d22e13ae0abecfb805936b510418f645ecf546a60c1->enter($__internal_e44dc394cdc06bafe0743d22e13ae0abecfb805936b510418f645ecf546a60c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c8b84a9b0b0885684288db8e3d1570d59827f521d86f5e7f8b4763f1a07940c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b84a9b0b0885684288db8e3d1570d59827f521d86f5e7f8b4763f1a07940c7->enter($__internal_c8b84a9b0b0885684288db8e3d1570d59827f521d86f5e7f8b4763f1a07940c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}


</style>
</head>
<body>




<ul>
  <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
  <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Usuarios</a></li>
  <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ranking");
        echo "\">Ranking</a></li>
  <li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Login</a></li>
  <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\">Register</a></li>
  <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cards");
        echo "\">Cards</a></li>
    <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paco_index");
        echo "\">PacoUsers</a></li>
  ";
        // line 49
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 50
            echo "  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a></li>
  ";
        }
        // line 52
        echo "
</ul>
";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "</body>
</html>
";
        
        $__internal_e44dc394cdc06bafe0743d22e13ae0abecfb805936b510418f645ecf546a60c1->leave($__internal_e44dc394cdc06bafe0743d22e13ae0abecfb805936b510418f645ecf546a60c1_prof);

        
        $__internal_c8b84a9b0b0885684288db8e3d1570d59827f521d86f5e7f8b4763f1a07940c7->leave($__internal_c8b84a9b0b0885684288db8e3d1570d59827f521d86f5e7f8b4763f1a07940c7_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_068365f8c6f36b94c14114fd2d9e081597c85971c8e5ffd05ba85d0f103b1cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068365f8c6f36b94c14114fd2d9e081597c85971c8e5ffd05ba85d0f103b1cd2->enter($__internal_068365f8c6f36b94c14114fd2d9e081597c85971c8e5ffd05ba85d0f103b1cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7ed5ce282b94418e1a98094d65c1a2953b017f72a8e55d8a86fc1f91728ad36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ed5ce282b94418e1a98094d65c1a2953b017f72a8e55d8a86fc1f91728ad36->enter($__internal_b7ed5ce282b94418e1a98094d65c1a2953b017f72a8e55d8a86fc1f91728ad36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7ed5ce282b94418e1a98094d65c1a2953b017f72a8e55d8a86fc1f91728ad36->leave($__internal_b7ed5ce282b94418e1a98094d65c1a2953b017f72a8e55d8a86fc1f91728ad36_prof);

        
        $__internal_068365f8c6f36b94c14114fd2d9e081597c85971c8e5ffd05ba85d0f103b1cd2->leave($__internal_068365f8c6f36b94c14114fd2d9e081597c85971c8e5ffd05ba85d0f103b1cd2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 54,  111 => 56,  109 => 54,  105 => 52,  99 => 50,  97 => 49,  93 => 48,  89 => 47,  85 => 46,  81 => 45,  77 => 44,  73 => 43,  69 => 42,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}


</style>
</head>
<body>




<ul>
  <li><a href=\"{{ path('home') }}\">Home</a></li>
  <li><a href=\"{{ path('usuario_index') }}\">Usuarios</a></li>
  <li><a href=\"{{ path('ranking') }}\">Ranking</a></li>
  <li><a href=\"{{ path('login') }}\">Login</a></li>
  <li><a href=\"{{ path('register') }}\">Register</a></li>
  <li><a href=\"{{ path('cards') }}\">Cards</a></li>
    <li><a href=\"{{ path('paco_index') }}\">PacoUsers</a></li>
  {% if app.user %}
  <li><a href=\"{{ path('logout') }}\">Logout</a></li>
  {% endif %}

</ul>
{% block body %}
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\app\\Resources\\views\\base.html.twig");
    }
}
