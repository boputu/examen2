<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d7d809948606e9739f4ca3f467e0012770b63b66a806ee7143a10eb0584888ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d809948606e9739f4ca3f467e0012770b63b66a806ee7143a10eb0584888ef->enter($__internal_d7d809948606e9739f4ca3f467e0012770b63b66a806ee7143a10eb0584888ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_73c1378da43ec8793f2b95ba331b8164932383cd07a1e366411a5fca1f588807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c1378da43ec8793f2b95ba331b8164932383cd07a1e366411a5fca1f588807->enter($__internal_73c1378da43ec8793f2b95ba331b8164932383cd07a1e366411a5fca1f588807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7d809948606e9739f4ca3f467e0012770b63b66a806ee7143a10eb0584888ef->leave($__internal_d7d809948606e9739f4ca3f467e0012770b63b66a806ee7143a10eb0584888ef_prof);

        
        $__internal_73c1378da43ec8793f2b95ba331b8164932383cd07a1e366411a5fca1f588807->leave($__internal_73c1378da43ec8793f2b95ba331b8164932383cd07a1e366411a5fca1f588807_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07ea0f4343fb40a0c1f218d13a658eed4dbf6846b3e4a81a469023fff22036d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ea0f4343fb40a0c1f218d13a658eed4dbf6846b3e4a81a469023fff22036d4->enter($__internal_07ea0f4343fb40a0c1f218d13a658eed4dbf6846b3e4a81a469023fff22036d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f242baa29ebcbb7fe4416be512d3cd8e9401d6929490023419e3c66f470b08b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f242baa29ebcbb7fe4416be512d3cd8e9401d6929490023419e3c66f470b08b4->enter($__internal_f242baa29ebcbb7fe4416be512d3cd8e9401d6929490023419e3c66f470b08b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f242baa29ebcbb7fe4416be512d3cd8e9401d6929490023419e3c66f470b08b4->leave($__internal_f242baa29ebcbb7fe4416be512d3cd8e9401d6929490023419e3c66f470b08b4_prof);

        
        $__internal_07ea0f4343fb40a0c1f218d13a658eed4dbf6846b3e4a81a469023fff22036d4->leave($__internal_07ea0f4343fb40a0c1f218d13a658eed4dbf6846b3e4a81a469023fff22036d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3e4de8abc2e7ddd8e13e2d8c470ef43228c2fc3ad7b5b6eeec82cce58f83716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e4de8abc2e7ddd8e13e2d8c470ef43228c2fc3ad7b5b6eeec82cce58f83716->enter($__internal_c3e4de8abc2e7ddd8e13e2d8c470ef43228c2fc3ad7b5b6eeec82cce58f83716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_99eef6015b643daccf5063e0a9f4ff77d51e45e6e7bed896f0b0e983ce5a77bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99eef6015b643daccf5063e0a9f4ff77d51e45e6e7bed896f0b0e983ce5a77bd->enter($__internal_99eef6015b643daccf5063e0a9f4ff77d51e45e6e7bed896f0b0e983ce5a77bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99eef6015b643daccf5063e0a9f4ff77d51e45e6e7bed896f0b0e983ce5a77bd->leave($__internal_99eef6015b643daccf5063e0a9f4ff77d51e45e6e7bed896f0b0e983ce5a77bd_prof);

        
        $__internal_c3e4de8abc2e7ddd8e13e2d8c470ef43228c2fc3ad7b5b6eeec82cce58f83716->leave($__internal_c3e4de8abc2e7ddd8e13e2d8c470ef43228c2fc3ad7b5b6eeec82cce58f83716_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffada723c636846a6724ad95d0044b7e10a672475667c81c864584b3fee3b94c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffada723c636846a6724ad95d0044b7e10a672475667c81c864584b3fee3b94c->enter($__internal_ffada723c636846a6724ad95d0044b7e10a672475667c81c864584b3fee3b94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bcdd4e1b08bc19055363ed384fb2c1fb7232e5d00310087449f0bf6aef3f2014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdd4e1b08bc19055363ed384fb2c1fb7232e5d00310087449f0bf6aef3f2014->enter($__internal_bcdd4e1b08bc19055363ed384fb2c1fb7232e5d00310087449f0bf6aef3f2014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bcdd4e1b08bc19055363ed384fb2c1fb7232e5d00310087449f0bf6aef3f2014->leave($__internal_bcdd4e1b08bc19055363ed384fb2c1fb7232e5d00310087449f0bf6aef3f2014_prof);

        
        $__internal_ffada723c636846a6724ad95d0044b7e10a672475667c81c864584b3fee3b94c->leave($__internal_ffada723c636846a6724ad95d0044b7e10a672475667c81c864584b3fee3b94c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
