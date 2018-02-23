<?php

/* base.html.twig */
class __TwigTemplate_70f2ea4d9ba6befff2419e33e81e4263a6a39804101f8049eb9b3bfd1f26a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_153f4e2f98d80124c697625a9c8c4a3a7982073102afdea388ce6433f3760c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153f4e2f98d80124c697625a9c8c4a3a7982073102afdea388ce6433f3760c5d->enter($__internal_153f4e2f98d80124c697625a9c8c4a3a7982073102afdea388ce6433f3760c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2b29516542477387e95c2daad181a4374bb7d20cbfd5652dca6b1f16516efc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b29516542477387e95c2daad181a4374bb7d20cbfd5652dca6b1f16516efc8d->enter($__internal_2b29516542477387e95c2daad181a4374bb7d20cbfd5652dca6b1f16516efc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_153f4e2f98d80124c697625a9c8c4a3a7982073102afdea388ce6433f3760c5d->leave($__internal_153f4e2f98d80124c697625a9c8c4a3a7982073102afdea388ce6433f3760c5d_prof);

        
        $__internal_2b29516542477387e95c2daad181a4374bb7d20cbfd5652dca6b1f16516efc8d->leave($__internal_2b29516542477387e95c2daad181a4374bb7d20cbfd5652dca6b1f16516efc8d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a24d0d09fe7bab013f6ad1dfff110eb989c267f961075830a70d18107f64f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a24d0d09fe7bab013f6ad1dfff110eb989c267f961075830a70d18107f64f51->enter($__internal_2a24d0d09fe7bab013f6ad1dfff110eb989c267f961075830a70d18107f64f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_747fd8a6cf52c4b1d49cc0b0715844f1dc7a9fb55466ad980c1790045f0b8b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747fd8a6cf52c4b1d49cc0b0715844f1dc7a9fb55466ad980c1790045f0b8b49->enter($__internal_747fd8a6cf52c4b1d49cc0b0715844f1dc7a9fb55466ad980c1790045f0b8b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_747fd8a6cf52c4b1d49cc0b0715844f1dc7a9fb55466ad980c1790045f0b8b49->leave($__internal_747fd8a6cf52c4b1d49cc0b0715844f1dc7a9fb55466ad980c1790045f0b8b49_prof);

        
        $__internal_2a24d0d09fe7bab013f6ad1dfff110eb989c267f961075830a70d18107f64f51->leave($__internal_2a24d0d09fe7bab013f6ad1dfff110eb989c267f961075830a70d18107f64f51_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_122fd901c159325d65817b2aa6a69f565eb48d872240c9fb12d2a97e98e82e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122fd901c159325d65817b2aa6a69f565eb48d872240c9fb12d2a97e98e82e95->enter($__internal_122fd901c159325d65817b2aa6a69f565eb48d872240c9fb12d2a97e98e82e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9324adb6dfd247f341e70f4a77dbd4cfe2307cabdf6df44366ffd5c6005b31f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9324adb6dfd247f341e70f4a77dbd4cfe2307cabdf6df44366ffd5c6005b31f4->enter($__internal_9324adb6dfd247f341e70f4a77dbd4cfe2307cabdf6df44366ffd5c6005b31f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9324adb6dfd247f341e70f4a77dbd4cfe2307cabdf6df44366ffd5c6005b31f4->leave($__internal_9324adb6dfd247f341e70f4a77dbd4cfe2307cabdf6df44366ffd5c6005b31f4_prof);

        
        $__internal_122fd901c159325d65817b2aa6a69f565eb48d872240c9fb12d2a97e98e82e95->leave($__internal_122fd901c159325d65817b2aa6a69f565eb48d872240c9fb12d2a97e98e82e95_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b8dd001ca6b8f710475d6da96931e7016d58932f0c678e617692b152f973348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8dd001ca6b8f710475d6da96931e7016d58932f0c678e617692b152f973348->enter($__internal_3b8dd001ca6b8f710475d6da96931e7016d58932f0c678e617692b152f973348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_191aeb09801d4ad506e8fc390d5990ec36d5d7e4604ad56e50b70b9ec784c5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191aeb09801d4ad506e8fc390d5990ec36d5d7e4604ad56e50b70b9ec784c5d8->enter($__internal_191aeb09801d4ad506e8fc390d5990ec36d5d7e4604ad56e50b70b9ec784c5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_191aeb09801d4ad506e8fc390d5990ec36d5d7e4604ad56e50b70b9ec784c5d8->leave($__internal_191aeb09801d4ad506e8fc390d5990ec36d5d7e4604ad56e50b70b9ec784c5d8_prof);

        
        $__internal_3b8dd001ca6b8f710475d6da96931e7016d58932f0c678e617692b152f973348->leave($__internal_3b8dd001ca6b8f710475d6da96931e7016d58932f0c678e617692b152f973348_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f84e5fbc546d5876f83c3dcfc7f9444df5aa0c0e2b24f62820dba4aa8c0a2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f84e5fbc546d5876f83c3dcfc7f9444df5aa0c0e2b24f62820dba4aa8c0a2b3->enter($__internal_9f84e5fbc546d5876f83c3dcfc7f9444df5aa0c0e2b24f62820dba4aa8c0a2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_29d5f4290797473b84a2c58ca98527139ad264e9a8200d19dadffcc6002dce72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d5f4290797473b84a2c58ca98527139ad264e9a8200d19dadffcc6002dce72->enter($__internal_29d5f4290797473b84a2c58ca98527139ad264e9a8200d19dadffcc6002dce72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_29d5f4290797473b84a2c58ca98527139ad264e9a8200d19dadffcc6002dce72->leave($__internal_29d5f4290797473b84a2c58ca98527139ad264e9a8200d19dadffcc6002dce72_prof);

        
        $__internal_9f84e5fbc546d5876f83c3dcfc7f9444df5aa0c0e2b24f62820dba4aa8c0a2b3->leave($__internal_9f84e5fbc546d5876f83c3dcfc7f9444df5aa0c0e2b24f62820dba4aa8c0a2b3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/M14_symfony/app/Resources/views/base.html.twig");
    }
}
