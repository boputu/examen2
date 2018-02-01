<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18a10034c55b02801a491e085e5a3482cead2c11f6970adec6f95cba1586c266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a10034c55b02801a491e085e5a3482cead2c11f6970adec6f95cba1586c266->enter($__internal_18a10034c55b02801a491e085e5a3482cead2c11f6970adec6f95cba1586c266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6692d2e056e4b18cb47feb612756ff62b8b4416477de045fc2e6672b9b6d3e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6692d2e056e4b18cb47feb612756ff62b8b4416477de045fc2e6672b9b6d3e96->enter($__internal_6692d2e056e4b18cb47feb612756ff62b8b4416477de045fc2e6672b9b6d3e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a10034c55b02801a491e085e5a3482cead2c11f6970adec6f95cba1586c266->leave($__internal_18a10034c55b02801a491e085e5a3482cead2c11f6970adec6f95cba1586c266_prof);

        
        $__internal_6692d2e056e4b18cb47feb612756ff62b8b4416477de045fc2e6672b9b6d3e96->leave($__internal_6692d2e056e4b18cb47feb612756ff62b8b4416477de045fc2e6672b9b6d3e96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df25ce7a900071b161fe66b758044522054f32db3cab7ca4a4d39744a13a7dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df25ce7a900071b161fe66b758044522054f32db3cab7ca4a4d39744a13a7dc6->enter($__internal_df25ce7a900071b161fe66b758044522054f32db3cab7ca4a4d39744a13a7dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_763922e6f460a582a912db4d3ff4c6277f423801e02269d88ef667e6cf6efc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763922e6f460a582a912db4d3ff4c6277f423801e02269d88ef667e6cf6efc7e->enter($__internal_763922e6f460a582a912db4d3ff4c6277f423801e02269d88ef667e6cf6efc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_763922e6f460a582a912db4d3ff4c6277f423801e02269d88ef667e6cf6efc7e->leave($__internal_763922e6f460a582a912db4d3ff4c6277f423801e02269d88ef667e6cf6efc7e_prof);

        
        $__internal_df25ce7a900071b161fe66b758044522054f32db3cab7ca4a4d39744a13a7dc6->leave($__internal_df25ce7a900071b161fe66b758044522054f32db3cab7ca4a4d39744a13a7dc6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36a5b62b6825dc0ac44a7a7d648ff5f98ee1d34df11aaf3e4a182482f912de2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a5b62b6825dc0ac44a7a7d648ff5f98ee1d34df11aaf3e4a182482f912de2e->enter($__internal_36a5b62b6825dc0ac44a7a7d648ff5f98ee1d34df11aaf3e4a182482f912de2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_56a44365ed21b92443e434f31de11ba9879d95fe7ae7a9c004177e10c3a02850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a44365ed21b92443e434f31de11ba9879d95fe7ae7a9c004177e10c3a02850->enter($__internal_56a44365ed21b92443e434f31de11ba9879d95fe7ae7a9c004177e10c3a02850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_56a44365ed21b92443e434f31de11ba9879d95fe7ae7a9c004177e10c3a02850->leave($__internal_56a44365ed21b92443e434f31de11ba9879d95fe7ae7a9c004177e10c3a02850_prof);

        
        $__internal_36a5b62b6825dc0ac44a7a7d648ff5f98ee1d34df11aaf3e4a182482f912de2e->leave($__internal_36a5b62b6825dc0ac44a7a7d648ff5f98ee1d34df11aaf3e4a182482f912de2e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_719b5f23e65138e84c7c30286bb8539fdcbb2120c4f28cc8f57c027279584d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719b5f23e65138e84c7c30286bb8539fdcbb2120c4f28cc8f57c027279584d3f->enter($__internal_719b5f23e65138e84c7c30286bb8539fdcbb2120c4f28cc8f57c027279584d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4dd56c29e314a550ab16223e77b99c98f1b10cb8724685c4a54d2a81c47ff1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd56c29e314a550ab16223e77b99c98f1b10cb8724685c4a54d2a81c47ff1fa->enter($__internal_4dd56c29e314a550ab16223e77b99c98f1b10cb8724685c4a54d2a81c47ff1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4dd56c29e314a550ab16223e77b99c98f1b10cb8724685c4a54d2a81c47ff1fa->leave($__internal_4dd56c29e314a550ab16223e77b99c98f1b10cb8724685c4a54d2a81c47ff1fa_prof);

        
        $__internal_719b5f23e65138e84c7c30286bb8539fdcbb2120c4f28cc8f57c027279584d3f->leave($__internal_719b5f23e65138e84c7c30286bb8539fdcbb2120c4f28cc8f57c027279584d3f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
