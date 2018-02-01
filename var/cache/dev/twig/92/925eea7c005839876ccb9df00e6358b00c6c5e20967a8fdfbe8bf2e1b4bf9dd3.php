<?php

/* EsqueletoBundle:Default:createcard.html.twig */
class __TwigTemplate_eedad40b23ace6ce1d2d30bb20bf0f303d247e79a80e030ac97f216c85d0fbf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:createcard.html.twig", 1);
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
        $__internal_0887eded1bf167a2590664c843c4a4197d91196da8ddc824415bb152d19fa0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0887eded1bf167a2590664c843c4a4197d91196da8ddc824415bb152d19fa0cd->enter($__internal_0887eded1bf167a2590664c843c4a4197d91196da8ddc824415bb152d19fa0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:createcard.html.twig"));

        $__internal_9fcf896e65e015d2a73525aab48f4139208433988764842b6e433142e0942d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcf896e65e015d2a73525aab48f4139208433988764842b6e433142e0942d06->enter($__internal_9fcf896e65e015d2a73525aab48f4139208433988764842b6e433142e0942d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:createcard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0887eded1bf167a2590664c843c4a4197d91196da8ddc824415bb152d19fa0cd->leave($__internal_0887eded1bf167a2590664c843c4a4197d91196da8ddc824415bb152d19fa0cd_prof);

        
        $__internal_9fcf896e65e015d2a73525aab48f4139208433988764842b6e433142e0942d06->leave($__internal_9fcf896e65e015d2a73525aab48f4139208433988764842b6e433142e0942d06_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a6cb6589fc51880fa954abca7925fb6ac5ab55cee982583b50e6228a03d9513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6cb6589fc51880fa954abca7925fb6ac5ab55cee982583b50e6228a03d9513->enter($__internal_2a6cb6589fc51880fa954abca7925fb6ac5ab55cee982583b50e6228a03d9513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcfc8736fc02a99f9fc264983cbf522adf05a59ec98a18261eedc8140296df1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfc8736fc02a99f9fc264983cbf522adf05a59ec98a18261eedc8140296df1d->enter($__internal_fcfc8736fc02a99f9fc264983cbf522adf05a59ec98a18261eedc8140296df1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fcfc8736fc02a99f9fc264983cbf522adf05a59ec98a18261eedc8140296df1d->leave($__internal_fcfc8736fc02a99f9fc264983cbf522adf05a59ec98a18261eedc8140296df1d_prof);

        
        $__internal_2a6cb6589fc51880fa954abca7925fb6ac5ab55cee982583b50e6228a03d9513->leave($__internal_2a6cb6589fc51880fa954abca7925fb6ac5ab55cee982583b50e6228a03d9513_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:createcard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
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
{% endblock %}
", "EsqueletoBundle:Default:createcard.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\src\\EsqueletoBundle/Resources/views/Default/createcard.html.twig");
    }
}
