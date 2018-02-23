<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_da13199148abd8c5680d9238f97557656c734a1929fc191adcccf2c8faface3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da13199148abd8c5680d9238f97557656c734a1929fc191adcccf2c8faface3f->enter($__internal_da13199148abd8c5680d9238f97557656c734a1929fc191adcccf2c8faface3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_18a36849cf08b192154cc85a2d57bf944137e68beec6182c0ae164eab06a9a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a36849cf08b192154cc85a2d57bf944137e68beec6182c0ae164eab06a9a3c->enter($__internal_18a36849cf08b192154cc85a2d57bf944137e68beec6182c0ae164eab06a9a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da13199148abd8c5680d9238f97557656c734a1929fc191adcccf2c8faface3f->leave($__internal_da13199148abd8c5680d9238f97557656c734a1929fc191adcccf2c8faface3f_prof);

        
        $__internal_18a36849cf08b192154cc85a2d57bf944137e68beec6182c0ae164eab06a9a3c->leave($__internal_18a36849cf08b192154cc85a2d57bf944137e68beec6182c0ae164eab06a9a3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3dfc9f623dde427bff7949440185905f98492e93f3b7175764f4f8cc695b5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3dfc9f623dde427bff7949440185905f98492e93f3b7175764f4f8cc695b5a1->enter($__internal_a3dfc9f623dde427bff7949440185905f98492e93f3b7175764f4f8cc695b5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7958b922866fd063359a2e4eb4fca3c94982f5bc2f2c6770a73a3e93ad9f63bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7958b922866fd063359a2e4eb4fca3c94982f5bc2f2c6770a73a3e93ad9f63bd->enter($__internal_7958b922866fd063359a2e4eb4fca3c94982f5bc2f2c6770a73a3e93ad9f63bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7958b922866fd063359a2e4eb4fca3c94982f5bc2f2c6770a73a3e93ad9f63bd->leave($__internal_7958b922866fd063359a2e4eb4fca3c94982f5bc2f2c6770a73a3e93ad9f63bd_prof);

        
        $__internal_a3dfc9f623dde427bff7949440185905f98492e93f3b7175764f4f8cc695b5a1->leave($__internal_a3dfc9f623dde427bff7949440185905f98492e93f3b7175764f4f8cc695b5a1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e9a7a6386403734ac9fa3a5924421d35ca387b59c5eb5d874a2a16613f98227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9a7a6386403734ac9fa3a5924421d35ca387b59c5eb5d874a2a16613f98227->enter($__internal_8e9a7a6386403734ac9fa3a5924421d35ca387b59c5eb5d874a2a16613f98227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f50d1f77edc57d49fcbd5c853cd0178ac6fc8b39c66c556390e9fd81df2ab131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50d1f77edc57d49fcbd5c853cd0178ac6fc8b39c66c556390e9fd81df2ab131->enter($__internal_f50d1f77edc57d49fcbd5c853cd0178ac6fc8b39c66c556390e9fd81df2ab131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f50d1f77edc57d49fcbd5c853cd0178ac6fc8b39c66c556390e9fd81df2ab131->leave($__internal_f50d1f77edc57d49fcbd5c853cd0178ac6fc8b39c66c556390e9fd81df2ab131_prof);

        
        $__internal_8e9a7a6386403734ac9fa3a5924421d35ca387b59c5eb5d874a2a16613f98227->leave($__internal_8e9a7a6386403734ac9fa3a5924421d35ca387b59c5eb5d874a2a16613f98227_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d7d43c778e0652a431833d2168dd60489d8029a6951c7389f2f2604fb576fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7d43c778e0652a431833d2168dd60489d8029a6951c7389f2f2604fb576fcd->enter($__internal_6d7d43c778e0652a431833d2168dd60489d8029a6951c7389f2f2604fb576fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dcf54953cdc423649f916405d95284c49479cbbaed2b115e3c7302019c1eb96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf54953cdc423649f916405d95284c49479cbbaed2b115e3c7302019c1eb96b->enter($__internal_dcf54953cdc423649f916405d95284c49479cbbaed2b115e3c7302019c1eb96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dcf54953cdc423649f916405d95284c49479cbbaed2b115e3c7302019c1eb96b->leave($__internal_dcf54953cdc423649f916405d95284c49479cbbaed2b115e3c7302019c1eb96b_prof);

        
        $__internal_6d7d43c778e0652a431833d2168dd60489d8029a6951c7389f2f2604fb576fcd->leave($__internal_6d7d43c778e0652a431833d2168dd60489d8029a6951c7389f2f2604fb576fcd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/M14_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
