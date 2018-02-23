<?php

/* VallbonaWebBundle:Default:articlesDetall.html.twig */
class __TwigTemplate_f27c91f25a655c99055393af8dc83393d6f5ad35f9e3707c6fa15cc9aadd249e extends Twig_Template
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
        $__internal_60c7433c3259f9a035920661d877e1a0a9182d05036852170ffad7167fb68b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c7433c3259f9a035920661d877e1a0a9182d05036852170ffad7167fb68b52->enter($__internal_60c7433c3259f9a035920661d877e1a0a9182d05036852170ffad7167fb68b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:articlesDetall.html.twig"));

        $__internal_a41d2c54a22b27d45a523cd2fc944b79acdfb8226687e2e112deadf13d8cbf64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41d2c54a22b27d45a523cd2fc944b79acdfb8226687e2e112deadf13d8cbf64->enter($__internal_a41d2c54a22b27d45a523cd2fc944b79acdfb8226687e2e112deadf13d8cbf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:articlesDetall.html.twig"));

        // line 1
        echo "<h1>Articles Detall</h1>
nom:";
        // line 2
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "<br>
preu:";
        // line 3
        echo twig_escape_filter($this->env, ($context["preu"] ?? $this->getContext($context, "preu")), "html", null, true);
        
        $__internal_60c7433c3259f9a035920661d877e1a0a9182d05036852170ffad7167fb68b52->leave($__internal_60c7433c3259f9a035920661d877e1a0a9182d05036852170ffad7167fb68b52_prof);

        
        $__internal_a41d2c54a22b27d45a523cd2fc944b79acdfb8226687e2e112deadf13d8cbf64->leave($__internal_a41d2c54a22b27d45a523cd2fc944b79acdfb8226687e2e112deadf13d8cbf64_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:Default:articlesDetall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Articles Detall</h1>
nom:{{nom}}<br>
preu:{{preu}}", "VallbonaWebBundle:Default:articlesDetall.html.twig", "/opt/lampp/htdocs/M14_symfony/src/Vallbona/WebBundle/Resources/views/Default/articlesDetall.html.twig");
    }
}
