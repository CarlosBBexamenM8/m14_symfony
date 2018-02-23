<?php

/* VallbonaWebBundle:Default:articles.html.twig */
class __TwigTemplate_f80c278206be157793e49fa5586aea9c81b32c7e4f3a2fde4aae41ff6621759e extends Twig_Template
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
        $__internal_2ded4bd415dc1b014070d9034b762b10753403a59407d93447da44d8c04ee100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ded4bd415dc1b014070d9034b762b10753403a59407d93447da44d8c04ee100->enter($__internal_2ded4bd415dc1b014070d9034b762b10753403a59407d93447da44d8c04ee100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:articles.html.twig"));

        $__internal_0759769c37c2132276673a98b34f49a72d3e99f21f87ed1843a93d34795e7298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0759769c37c2132276673a98b34f49a72d3e99f21f87ed1843a93d34795e7298->enter($__internal_0759769c37c2132276673a98b34f49a72d3e99f21f87ed1843a93d34795e7298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:articles.html.twig"));

        // line 1
        echo "<h1>Articles</h1>";
        
        $__internal_2ded4bd415dc1b014070d9034b762b10753403a59407d93447da44d8c04ee100->leave($__internal_2ded4bd415dc1b014070d9034b762b10753403a59407d93447da44d8c04ee100_prof);

        
        $__internal_0759769c37c2132276673a98b34f49a72d3e99f21f87ed1843a93d34795e7298->leave($__internal_0759769c37c2132276673a98b34f49a72d3e99f21f87ed1843a93d34795e7298_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:Default:articles.html.twig";
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
        return new Twig_Source("<h1>Articles</h1>", "VallbonaWebBundle:Default:articles.html.twig", "/opt/lampp/htdocs/M14_symfony/src/Vallbona/WebBundle/Resources/views/Default/articles.html.twig");
    }
}
