<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_412930169cab5812e4c6f9ba98c814a7b0977534048d3ddfcdd45ed6e523db62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7071b6b9005314d020d64fb6773a60b87c0be07158652d92867ecb942d19ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7071b6b9005314d020d64fb6773a60b87c0be07158652d92867ecb942d19ffa->enter($__internal_e7071b6b9005314d020d64fb6773a60b87c0be07158652d92867ecb942d19ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_233a27f8d9f596805c930e7b63b6b687ed0fbb7bc6f9eefe05eafbd3c5f1af55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233a27f8d9f596805c930e7b63b6b687ed0fbb7bc6f9eefe05eafbd3c5f1af55->enter($__internal_233a27f8d9f596805c930e7b63b6b687ed0fbb7bc6f9eefe05eafbd3c5f1af55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e7071b6b9005314d020d64fb6773a60b87c0be07158652d92867ecb942d19ffa->leave($__internal_e7071b6b9005314d020d64fb6773a60b87c0be07158652d92867ecb942d19ffa_prof);

        
        $__internal_233a27f8d9f596805c930e7b63b6b687ed0fbb7bc6f9eefe05eafbd3c5f1af55->leave($__internal_233a27f8d9f596805c930e7b63b6b687ed0fbb7bc6f9eefe05eafbd3c5f1af55_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4fa8f63e0bae1cb720112307ad8ac1508aa7517bf7d1c0fb008f21d7e991faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4fa8f63e0bae1cb720112307ad8ac1508aa7517bf7d1c0fb008f21d7e991faa->enter($__internal_d4fa8f63e0bae1cb720112307ad8ac1508aa7517bf7d1c0fb008f21d7e991faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8509882cc1baa881823a81a895fb0db1789895d78e9d8aefb693b6a2709231a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8509882cc1baa881823a81a895fb0db1789895d78e9d8aefb693b6a2709231a2->enter($__internal_8509882cc1baa881823a81a895fb0db1789895d78e9d8aefb693b6a2709231a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8509882cc1baa881823a81a895fb0db1789895d78e9d8aefb693b6a2709231a2->leave($__internal_8509882cc1baa881823a81a895fb0db1789895d78e9d8aefb693b6a2709231a2_prof);

        
        $__internal_d4fa8f63e0bae1cb720112307ad8ac1508aa7517bf7d1c0fb008f21d7e991faa->leave($__internal_d4fa8f63e0bae1cb720112307ad8ac1508aa7517bf7d1c0fb008f21d7e991faa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a19e362cc8c87f84c87f8e2842c752d931e375c0eab09357590a384de7335e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a19e362cc8c87f84c87f8e2842c752d931e375c0eab09357590a384de7335e8->enter($__internal_8a19e362cc8c87f84c87f8e2842c752d931e375c0eab09357590a384de7335e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3015dca68fe0a9afdb2862360af78c8589e02d2909c329cdbe6d155d10f4687e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3015dca68fe0a9afdb2862360af78c8589e02d2909c329cdbe6d155d10f4687e->enter($__internal_3015dca68fe0a9afdb2862360af78c8589e02d2909c329cdbe6d155d10f4687e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3015dca68fe0a9afdb2862360af78c8589e02d2909c329cdbe6d155d10f4687e->leave($__internal_3015dca68fe0a9afdb2862360af78c8589e02d2909c329cdbe6d155d10f4687e_prof);

        
        $__internal_8a19e362cc8c87f84c87f8e2842c752d931e375c0eab09357590a384de7335e8->leave($__internal_8a19e362cc8c87f84c87f8e2842c752d931e375c0eab09357590a384de7335e8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5c137785cc1cb95217228226c8462241c72abe753c33d4c42b489a44f9b4f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c137785cc1cb95217228226c8462241c72abe753c33d4c42b489a44f9b4f21->enter($__internal_b5c137785cc1cb95217228226c8462241c72abe753c33d4c42b489a44f9b4f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf9dfd7816d486a96d1d8e6525ae4084f5dcfbb1b48d4c8c23b78c5f035e2875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9dfd7816d486a96d1d8e6525ae4084f5dcfbb1b48d4c8c23b78c5f035e2875->enter($__internal_bf9dfd7816d486a96d1d8e6525ae4084f5dcfbb1b48d4c8c23b78c5f035e2875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bf9dfd7816d486a96d1d8e6525ae4084f5dcfbb1b48d4c8c23b78c5f035e2875->leave($__internal_bf9dfd7816d486a96d1d8e6525ae4084f5dcfbb1b48d4c8c23b78c5f035e2875_prof);

        
        $__internal_b5c137785cc1cb95217228226c8462241c72abe753c33d4c42b489a44f9b4f21->leave($__internal_b5c137785cc1cb95217228226c8462241c72abe753c33d4c42b489a44f9b4f21_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\symfony\\Proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
