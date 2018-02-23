<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
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
        $__internal_9281c0d6ee0f586956dbdf7de4ee62faaf7d740c501682fab883fe7fc7af7782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9281c0d6ee0f586956dbdf7de4ee62faaf7d740c501682fab883fe7fc7af7782->enter($__internal_9281c0d6ee0f586956dbdf7de4ee62faaf7d740c501682fab883fe7fc7af7782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_78166608a6d404c2dc46364a58bb0ac1bb31022012297bec14a826553bf116e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78166608a6d404c2dc46364a58bb0ac1bb31022012297bec14a826553bf116e3->enter($__internal_78166608a6d404c2dc46364a58bb0ac1bb31022012297bec14a826553bf116e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9281c0d6ee0f586956dbdf7de4ee62faaf7d740c501682fab883fe7fc7af7782->leave($__internal_9281c0d6ee0f586956dbdf7de4ee62faaf7d740c501682fab883fe7fc7af7782_prof);

        
        $__internal_78166608a6d404c2dc46364a58bb0ac1bb31022012297bec14a826553bf116e3->leave($__internal_78166608a6d404c2dc46364a58bb0ac1bb31022012297bec14a826553bf116e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2302e72319bdda9073784e7026f9c73349ff5f1a7a2b223dd02724e2867d101e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2302e72319bdda9073784e7026f9c73349ff5f1a7a2b223dd02724e2867d101e->enter($__internal_2302e72319bdda9073784e7026f9c73349ff5f1a7a2b223dd02724e2867d101e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_30e2758815fd582ef37ec13c1be024671ccb46150ef7e9cfa794bd081973e104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e2758815fd582ef37ec13c1be024671ccb46150ef7e9cfa794bd081973e104->enter($__internal_30e2758815fd582ef37ec13c1be024671ccb46150ef7e9cfa794bd081973e104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_30e2758815fd582ef37ec13c1be024671ccb46150ef7e9cfa794bd081973e104->leave($__internal_30e2758815fd582ef37ec13c1be024671ccb46150ef7e9cfa794bd081973e104_prof);

        
        $__internal_2302e72319bdda9073784e7026f9c73349ff5f1a7a2b223dd02724e2867d101e->leave($__internal_2302e72319bdda9073784e7026f9c73349ff5f1a7a2b223dd02724e2867d101e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b1616414824d9dd611692668e9a0f08413ab3683c32660d36e656a20a706d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1616414824d9dd611692668e9a0f08413ab3683c32660d36e656a20a706d9e->enter($__internal_9b1616414824d9dd611692668e9a0f08413ab3683c32660d36e656a20a706d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf2f61f6523b937999c59ce3d2a81eb6e9a9fdf32e8d73a565b0b1f62ca5daa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2f61f6523b937999c59ce3d2a81eb6e9a9fdf32e8d73a565b0b1f62ca5daa0->enter($__internal_cf2f61f6523b937999c59ce3d2a81eb6e9a9fdf32e8d73a565b0b1f62ca5daa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cf2f61f6523b937999c59ce3d2a81eb6e9a9fdf32e8d73a565b0b1f62ca5daa0->leave($__internal_cf2f61f6523b937999c59ce3d2a81eb6e9a9fdf32e8d73a565b0b1f62ca5daa0_prof);

        
        $__internal_9b1616414824d9dd611692668e9a0f08413ab3683c32660d36e656a20a706d9e->leave($__internal_9b1616414824d9dd611692668e9a0f08413ab3683c32660d36e656a20a706d9e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_60f3e1cb1e2a026b4dcf2964ef16fce7f577330b3edfe871f10cc99242b2c238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f3e1cb1e2a026b4dcf2964ef16fce7f577330b3edfe871f10cc99242b2c238->enter($__internal_60f3e1cb1e2a026b4dcf2964ef16fce7f577330b3edfe871f10cc99242b2c238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c3729406500871897928d747399c2b9138c29639788dd94c22f320e882765fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3729406500871897928d747399c2b9138c29639788dd94c22f320e882765fb->enter($__internal_2c3729406500871897928d747399c2b9138c29639788dd94c22f320e882765fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c3729406500871897928d747399c2b9138c29639788dd94c22f320e882765fb->leave($__internal_2c3729406500871897928d747399c2b9138c29639788dd94c22f320e882765fb_prof);

        
        $__internal_60f3e1cb1e2a026b4dcf2964ef16fce7f577330b3edfe871f10cc99242b2c238->leave($__internal_60f3e1cb1e2a026b4dcf2964ef16fce7f577330b3edfe871f10cc99242b2c238_prof);

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
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/M14_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
