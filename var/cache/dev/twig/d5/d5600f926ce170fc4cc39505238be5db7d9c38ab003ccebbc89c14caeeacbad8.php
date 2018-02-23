<?php

/* VallbonaWebBundle:Default:index.html.twig */
class __TwigTemplate_7a8f24017402abb96c348b24a95fdf6ffa6cf34db3bab132771f37a80fafbcdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38a308692eaeaaba84aa45a79af88615d7a0b1637562659e2d5d97e0fb162670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a308692eaeaaba84aa45a79af88615d7a0b1637562659e2d5d97e0fb162670->enter($__internal_38a308692eaeaaba84aa45a79af88615d7a0b1637562659e2d5d97e0fb162670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $__internal_e29bfa40bd48ff84400f3c1476aa1b4bda5975c5d1f973032a3b0b32dd6ef22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29bfa40bd48ff84400f3c1476aa1b4bda5975c5d1f973032a3b0b32dd6ef22a->enter($__internal_e29bfa40bd48ff84400f3c1476aa1b4bda5975c5d1f973032a3b0b32dd6ef22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_38a308692eaeaaba84aa45a79af88615d7a0b1637562659e2d5d97e0fb162670->leave($__internal_38a308692eaeaaba84aa45a79af88615d7a0b1637562659e2d5d97e0fb162670_prof);

        
        $__internal_e29bfa40bd48ff84400f3c1476aa1b4bda5975c5d1f973032a3b0b32dd6ef22a->leave($__internal_e29bfa40bd48ff84400f3c1476aa1b4bda5975c5d1f973032a3b0b32dd6ef22a_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "VallbonaWebBundle:Default:index.html.twig", "/opt/lampp/htdocs/M14_symfony/src/Vallbona/WebBundle/Resources/views/Default/index.html.twig");
    }
}
