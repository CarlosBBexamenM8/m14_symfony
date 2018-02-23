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
        $__internal_7041094b6837a6fa3611a30298f02171787ab67c7617383a40e78347dbf1647a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7041094b6837a6fa3611a30298f02171787ab67c7617383a40e78347dbf1647a->enter($__internal_7041094b6837a6fa3611a30298f02171787ab67c7617383a40e78347dbf1647a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b7e425713d31f6ee45948d6303c9df859eab0605bcb38d4c54b55b2bbf2988bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e425713d31f6ee45948d6303c9df859eab0605bcb38d4c54b55b2bbf2988bb->enter($__internal_b7e425713d31f6ee45948d6303c9df859eab0605bcb38d4c54b55b2bbf2988bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7041094b6837a6fa3611a30298f02171787ab67c7617383a40e78347dbf1647a->leave($__internal_7041094b6837a6fa3611a30298f02171787ab67c7617383a40e78347dbf1647a_prof);

        
        $__internal_b7e425713d31f6ee45948d6303c9df859eab0605bcb38d4c54b55b2bbf2988bb->leave($__internal_b7e425713d31f6ee45948d6303c9df859eab0605bcb38d4c54b55b2bbf2988bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8bc2b1129cd8e19cbe8a81beb2e231fb45e0feca0bfc785975f9ef9dc0016ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8bc2b1129cd8e19cbe8a81beb2e231fb45e0feca0bfc785975f9ef9dc0016ca->enter($__internal_f8bc2b1129cd8e19cbe8a81beb2e231fb45e0feca0bfc785975f9ef9dc0016ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba2540dd21c2eef45dceffd4266bc128c84128d6c78d44d53cc4e8026d8b837d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2540dd21c2eef45dceffd4266bc128c84128d6c78d44d53cc4e8026d8b837d->enter($__internal_ba2540dd21c2eef45dceffd4266bc128c84128d6c78d44d53cc4e8026d8b837d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ba2540dd21c2eef45dceffd4266bc128c84128d6c78d44d53cc4e8026d8b837d->leave($__internal_ba2540dd21c2eef45dceffd4266bc128c84128d6c78d44d53cc4e8026d8b837d_prof);

        
        $__internal_f8bc2b1129cd8e19cbe8a81beb2e231fb45e0feca0bfc785975f9ef9dc0016ca->leave($__internal_f8bc2b1129cd8e19cbe8a81beb2e231fb45e0feca0bfc785975f9ef9dc0016ca_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_adf55610a7d864aa7ec17fa6958240d6432c65e2fd73303ec6ea80b998f10aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf55610a7d864aa7ec17fa6958240d6432c65e2fd73303ec6ea80b998f10aea->enter($__internal_adf55610a7d864aa7ec17fa6958240d6432c65e2fd73303ec6ea80b998f10aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c99d9b7d97dd132d3d88a338ab77dfcdf859fb0f39f5933c7403a310f705f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c99d9b7d97dd132d3d88a338ab77dfcdf859fb0f39f5933c7403a310f705f14->enter($__internal_8c99d9b7d97dd132d3d88a338ab77dfcdf859fb0f39f5933c7403a310f705f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8c99d9b7d97dd132d3d88a338ab77dfcdf859fb0f39f5933c7403a310f705f14->leave($__internal_8c99d9b7d97dd132d3d88a338ab77dfcdf859fb0f39f5933c7403a310f705f14_prof);

        
        $__internal_adf55610a7d864aa7ec17fa6958240d6432c65e2fd73303ec6ea80b998f10aea->leave($__internal_adf55610a7d864aa7ec17fa6958240d6432c65e2fd73303ec6ea80b998f10aea_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_471a61be37f67a81e23f59529863a1c825f7b0cb3e14e310aa8815971330e208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471a61be37f67a81e23f59529863a1c825f7b0cb3e14e310aa8815971330e208->enter($__internal_471a61be37f67a81e23f59529863a1c825f7b0cb3e14e310aa8815971330e208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_404a7dee312d4b5752a4e1582381ee6e0e0cc0ba1a565c4536e8f383f98965d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404a7dee312d4b5752a4e1582381ee6e0e0cc0ba1a565c4536e8f383f98965d2->enter($__internal_404a7dee312d4b5752a4e1582381ee6e0e0cc0ba1a565c4536e8f383f98965d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_404a7dee312d4b5752a4e1582381ee6e0e0cc0ba1a565c4536e8f383f98965d2->leave($__internal_404a7dee312d4b5752a4e1582381ee6e0e0cc0ba1a565c4536e8f383f98965d2_prof);

        
        $__internal_471a61be37f67a81e23f59529863a1c825f7b0cb3e14e310aa8815971330e208->leave($__internal_471a61be37f67a81e23f59529863a1c825f7b0cb3e14e310aa8815971330e208_prof);

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
