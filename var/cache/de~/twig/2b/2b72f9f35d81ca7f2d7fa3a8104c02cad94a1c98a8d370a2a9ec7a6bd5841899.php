<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3f89800e0e6b7cd6a44b631d47f3c469adaf75e31346471ec92d8dfbd5c1fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f89800e0e6b7cd6a44b631d47f3c469adaf75e31346471ec92d8dfbd5c1fd6->enter($__internal_c3f89800e0e6b7cd6a44b631d47f3c469adaf75e31346471ec92d8dfbd5c1fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ef7f29b07921851d74c32b4f60e9284c94f7ce96cf5653eeb743ced0bfec7b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7f29b07921851d74c32b4f60e9284c94f7ce96cf5653eeb743ced0bfec7b59->enter($__internal_ef7f29b07921851d74c32b4f60e9284c94f7ce96cf5653eeb743ced0bfec7b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f89800e0e6b7cd6a44b631d47f3c469adaf75e31346471ec92d8dfbd5c1fd6->leave($__internal_c3f89800e0e6b7cd6a44b631d47f3c469adaf75e31346471ec92d8dfbd5c1fd6_prof);

        
        $__internal_ef7f29b07921851d74c32b4f60e9284c94f7ce96cf5653eeb743ced0bfec7b59->leave($__internal_ef7f29b07921851d74c32b4f60e9284c94f7ce96cf5653eeb743ced0bfec7b59_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96e6a9a6a5154ecdf698ef1d42c2cbfd3a3ada2e7e8ddc83b0dd5f8c1218c0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e6a9a6a5154ecdf698ef1d42c2cbfd3a3ada2e7e8ddc83b0dd5f8c1218c0d4->enter($__internal_96e6a9a6a5154ecdf698ef1d42c2cbfd3a3ada2e7e8ddc83b0dd5f8c1218c0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e01222b612bd2e953183a35c3b51f90e120fde78bb90c77541ef861d1fc5aedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01222b612bd2e953183a35c3b51f90e120fde78bb90c77541ef861d1fc5aedc->enter($__internal_e01222b612bd2e953183a35c3b51f90e120fde78bb90c77541ef861d1fc5aedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e01222b612bd2e953183a35c3b51f90e120fde78bb90c77541ef861d1fc5aedc->leave($__internal_e01222b612bd2e953183a35c3b51f90e120fde78bb90c77541ef861d1fc5aedc_prof);

        
        $__internal_96e6a9a6a5154ecdf698ef1d42c2cbfd3a3ada2e7e8ddc83b0dd5f8c1218c0d4->leave($__internal_96e6a9a6a5154ecdf698ef1d42c2cbfd3a3ada2e7e8ddc83b0dd5f8c1218c0d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c021b324591d60c65a41fc4658e815bb61ec2630161e5943c40d0920774d954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c021b324591d60c65a41fc4658e815bb61ec2630161e5943c40d0920774d954->enter($__internal_2c021b324591d60c65a41fc4658e815bb61ec2630161e5943c40d0920774d954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ceecfc1a6c12dd6dc782e6bc600e056c7d2beb5592c65ff36176ecba0013ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ceecfc1a6c12dd6dc782e6bc600e056c7d2beb5592c65ff36176ecba0013ead->enter($__internal_1ceecfc1a6c12dd6dc782e6bc600e056c7d2beb5592c65ff36176ecba0013ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ceecfc1a6c12dd6dc782e6bc600e056c7d2beb5592c65ff36176ecba0013ead->leave($__internal_1ceecfc1a6c12dd6dc782e6bc600e056c7d2beb5592c65ff36176ecba0013ead_prof);

        
        $__internal_2c021b324591d60c65a41fc4658e815bb61ec2630161e5943c40d0920774d954->leave($__internal_2c021b324591d60c65a41fc4658e815bb61ec2630161e5943c40d0920774d954_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8119d016f3a3b7fb3467536d04aba339ce27fd3e2524a13cfbfefa682d4a788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8119d016f3a3b7fb3467536d04aba339ce27fd3e2524a13cfbfefa682d4a788->enter($__internal_f8119d016f3a3b7fb3467536d04aba339ce27fd3e2524a13cfbfefa682d4a788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee068ac3e59477beea60945fce6c667943a6cefebecb5e4d3215d2deba482000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee068ac3e59477beea60945fce6c667943a6cefebecb5e4d3215d2deba482000->enter($__internal_ee068ac3e59477beea60945fce6c667943a6cefebecb5e4d3215d2deba482000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee068ac3e59477beea60945fce6c667943a6cefebecb5e4d3215d2deba482000->leave($__internal_ee068ac3e59477beea60945fce6c667943a6cefebecb5e4d3215d2deba482000_prof);

        
        $__internal_f8119d016f3a3b7fb3467536d04aba339ce27fd3e2524a13cfbfefa682d4a788->leave($__internal_f8119d016f3a3b7fb3467536d04aba339ce27fd3e2524a13cfbfefa682d4a788_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/M14_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
