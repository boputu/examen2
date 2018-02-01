<?php

/* EsqueletoBundle:Default:new.html.twig */
class __TwigTemplate_48c5320f8ecb8bedf39d1c1d47720fd587aab5e20183a196f254e5a306aa48d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletoBundle:Default:new.html.twig", 1);
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
        $__internal_760e8095077629e7ff3130021c93d891dfce80062eca3967544a2f4e2c118804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760e8095077629e7ff3130021c93d891dfce80062eca3967544a2f4e2c118804->enter($__internal_760e8095077629e7ff3130021c93d891dfce80062eca3967544a2f4e2c118804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:new.html.twig"));

        $__internal_77b5fc04cb2f7be3cad648dea35d45357e4c9a32e9f4ee6bb536556896a75e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b5fc04cb2f7be3cad648dea35d45357e4c9a32e9f4ee6bb536556896a75e03->enter($__internal_77b5fc04cb2f7be3cad648dea35d45357e4c9a32e9f4ee6bb536556896a75e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletoBundle:Default:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_760e8095077629e7ff3130021c93d891dfce80062eca3967544a2f4e2c118804->leave($__internal_760e8095077629e7ff3130021c93d891dfce80062eca3967544a2f4e2c118804_prof);

        
        $__internal_77b5fc04cb2f7be3cad648dea35d45357e4c9a32e9f4ee6bb536556896a75e03->leave($__internal_77b5fc04cb2f7be3cad648dea35d45357e4c9a32e9f4ee6bb536556896a75e03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44ef4cb831aaee0abc0d7e338adbeed6a7546fb8be17054e5ba2a8af3a3db6ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ef4cb831aaee0abc0d7e338adbeed6a7546fb8be17054e5ba2a8af3a3db6ad->enter($__internal_44ef4cb831aaee0abc0d7e338adbeed6a7546fb8be17054e5ba2a8af3a3db6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a330407ee4e2c74dea1e9f36ad585a0f7cca9d6fc5c39f68d11777f09cda82b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a330407ee4e2c74dea1e9f36ad585a0f7cca9d6fc5c39f68d11777f09cda82b6->enter($__internal_a330407ee4e2c74dea1e9f36ad585a0f7cca9d6fc5c39f68d11777f09cda82b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de usuario</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Crear usuario\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Volver</a>
        </li>
    </ul>
";
        
        $__internal_a330407ee4e2c74dea1e9f36ad585a0f7cca9d6fc5c39f68d11777f09cda82b6->leave($__internal_a330407ee4e2c74dea1e9f36ad585a0f7cca9d6fc5c39f68d11777f09cda82b6_prof);

        
        $__internal_44ef4cb831aaee0abc0d7e338adbeed6a7546fb8be17054e5ba2a8af3a3db6ad->leave($__internal_44ef4cb831aaee0abc0d7e338adbeed6a7546fb8be17054e5ba2a8af3a3db6ad_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletoBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Creación de usuario</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Crear usuario\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('usuario_index') }}\">Volver</a>
        </li>
    </ul>
{% endblock %}
", "EsqueletoBundle:Default:new.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto-04\\src\\EsqueletoBundle/Resources/views/Default/new.html.twig");
    }
}
