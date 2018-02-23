<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ccf06df31639b7c9b2857bbf3c5e82ca65ad8846bad8b03705b504d691c84a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64ff4f0c33945197316a4d52585581be00d7024b1bdf9c99bdc1baf1d5dcc704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ff4f0c33945197316a4d52585581be00d7024b1bdf9c99bdc1baf1d5dcc704->enter($__internal_64ff4f0c33945197316a4d52585581be00d7024b1bdf9c99bdc1baf1d5dcc704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_15ce7c4305f2493f30e4a0d32682e329eba87a3c1c1520451630cd94bccef7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ce7c4305f2493f30e4a0d32682e329eba87a3c1c1520451630cd94bccef7d9->enter($__internal_15ce7c4305f2493f30e4a0d32682e329eba87a3c1c1520451630cd94bccef7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64ff4f0c33945197316a4d52585581be00d7024b1bdf9c99bdc1baf1d5dcc704->leave($__internal_64ff4f0c33945197316a4d52585581be00d7024b1bdf9c99bdc1baf1d5dcc704_prof);

        
        $__internal_15ce7c4305f2493f30e4a0d32682e329eba87a3c1c1520451630cd94bccef7d9->leave($__internal_15ce7c4305f2493f30e4a0d32682e329eba87a3c1c1520451630cd94bccef7d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f53e4a4fb8a97f34e5c7115569b5c1cf75dd7e55cb5a16dff0048540d978722f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53e4a4fb8a97f34e5c7115569b5c1cf75dd7e55cb5a16dff0048540d978722f->enter($__internal_f53e4a4fb8a97f34e5c7115569b5c1cf75dd7e55cb5a16dff0048540d978722f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05d0bd1036f8977d4c2befe7e1af79f6a688983ff22752dd4e1251d5c0a219d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d0bd1036f8977d4c2befe7e1af79f6a688983ff22752dd4e1251d5c0a219d8->enter($__internal_05d0bd1036f8977d4c2befe7e1af79f6a688983ff22752dd4e1251d5c0a219d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_05d0bd1036f8977d4c2befe7e1af79f6a688983ff22752dd4e1251d5c0a219d8->leave($__internal_05d0bd1036f8977d4c2befe7e1af79f6a688983ff22752dd4e1251d5c0a219d8_prof);

        
        $__internal_f53e4a4fb8a97f34e5c7115569b5c1cf75dd7e55cb5a16dff0048540d978722f->leave($__internal_f53e4a4fb8a97f34e5c7115569b5c1cf75dd7e55cb5a16dff0048540d978722f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cbe23dca2bc6a27be8014a403648d68e95a52223fdd6bc4aeff38e33bc6205d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cbe23dca2bc6a27be8014a403648d68e95a52223fdd6bc4aeff38e33bc6205d->enter($__internal_3cbe23dca2bc6a27be8014a403648d68e95a52223fdd6bc4aeff38e33bc6205d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5de5b9435f0d61e99457df493219c1fed553ad03d6a8649c867531769023cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5de5b9435f0d61e99457df493219c1fed553ad03d6a8649c867531769023cfe->enter($__internal_a5de5b9435f0d61e99457df493219c1fed553ad03d6a8649c867531769023cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a5de5b9435f0d61e99457df493219c1fed553ad03d6a8649c867531769023cfe->leave($__internal_a5de5b9435f0d61e99457df493219c1fed553ad03d6a8649c867531769023cfe_prof);

        
        $__internal_3cbe23dca2bc6a27be8014a403648d68e95a52223fdd6bc4aeff38e33bc6205d->leave($__internal_3cbe23dca2bc6a27be8014a403648d68e95a52223fdd6bc4aeff38e33bc6205d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8549351779ff35865ad01c0ba38ef76d75f75b42611d443177229e6eb840bf53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8549351779ff35865ad01c0ba38ef76d75f75b42611d443177229e6eb840bf53->enter($__internal_8549351779ff35865ad01c0ba38ef76d75f75b42611d443177229e6eb840bf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d0177018d3874fff7d08a6887c03c7d3dd693e16e588c31f87c2a8dac77d5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0177018d3874fff7d08a6887c03c7d3dd693e16e588c31f87c2a8dac77d5d2->enter($__internal_3d0177018d3874fff7d08a6887c03c7d3dd693e16e588c31f87c2a8dac77d5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3d0177018d3874fff7d08a6887c03c7d3dd693e16e588c31f87c2a8dac77d5d2->leave($__internal_3d0177018d3874fff7d08a6887c03c7d3dd693e16e588c31f87c2a8dac77d5d2_prof);

        
        $__internal_8549351779ff35865ad01c0ba38ef76d75f75b42611d443177229e6eb840bf53->leave($__internal_8549351779ff35865ad01c0ba38ef76d75f75b42611d443177229e6eb840bf53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/M14_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
