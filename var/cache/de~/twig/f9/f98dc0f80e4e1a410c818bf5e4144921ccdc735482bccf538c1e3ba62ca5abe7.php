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
        $__internal_0c8ab58c15be6c561972464f3c5219c062da3740d15b5ad04efe673d666d6e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8ab58c15be6c561972464f3c5219c062da3740d15b5ad04efe673d666d6e15->enter($__internal_0c8ab58c15be6c561972464f3c5219c062da3740d15b5ad04efe673d666d6e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_729b7843d6d98a6086207b70b2f277278da18759df7e27e686baa52ea3a56600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729b7843d6d98a6086207b70b2f277278da18759df7e27e686baa52ea3a56600->enter($__internal_729b7843d6d98a6086207b70b2f277278da18759df7e27e686baa52ea3a56600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c8ab58c15be6c561972464f3c5219c062da3740d15b5ad04efe673d666d6e15->leave($__internal_0c8ab58c15be6c561972464f3c5219c062da3740d15b5ad04efe673d666d6e15_prof);

        
        $__internal_729b7843d6d98a6086207b70b2f277278da18759df7e27e686baa52ea3a56600->leave($__internal_729b7843d6d98a6086207b70b2f277278da18759df7e27e686baa52ea3a56600_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08ff93c0c6000b7a46735ce7e56685ea481096ee4c87d7b83a598c20e91ed1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ff93c0c6000b7a46735ce7e56685ea481096ee4c87d7b83a598c20e91ed1a2->enter($__internal_08ff93c0c6000b7a46735ce7e56685ea481096ee4c87d7b83a598c20e91ed1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_01be701b73ea78d10e5b01417cfee8b1c5c162c80c6bf0dcc614d2164e8025eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01be701b73ea78d10e5b01417cfee8b1c5c162c80c6bf0dcc614d2164e8025eb->enter($__internal_01be701b73ea78d10e5b01417cfee8b1c5c162c80c6bf0dcc614d2164e8025eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_01be701b73ea78d10e5b01417cfee8b1c5c162c80c6bf0dcc614d2164e8025eb->leave($__internal_01be701b73ea78d10e5b01417cfee8b1c5c162c80c6bf0dcc614d2164e8025eb_prof);

        
        $__internal_08ff93c0c6000b7a46735ce7e56685ea481096ee4c87d7b83a598c20e91ed1a2->leave($__internal_08ff93c0c6000b7a46735ce7e56685ea481096ee4c87d7b83a598c20e91ed1a2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1415d048db8631489c7eba7747f4f22c9207179d3aa75968b0c7576be051216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1415d048db8631489c7eba7747f4f22c9207179d3aa75968b0c7576be051216->enter($__internal_d1415d048db8631489c7eba7747f4f22c9207179d3aa75968b0c7576be051216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_90198a018b26d84855ee86cd79034b3f7a5159fbbade0195323d7dfc543378e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90198a018b26d84855ee86cd79034b3f7a5159fbbade0195323d7dfc543378e1->enter($__internal_90198a018b26d84855ee86cd79034b3f7a5159fbbade0195323d7dfc543378e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_90198a018b26d84855ee86cd79034b3f7a5159fbbade0195323d7dfc543378e1->leave($__internal_90198a018b26d84855ee86cd79034b3f7a5159fbbade0195323d7dfc543378e1_prof);

        
        $__internal_d1415d048db8631489c7eba7747f4f22c9207179d3aa75968b0c7576be051216->leave($__internal_d1415d048db8631489c7eba7747f4f22c9207179d3aa75968b0c7576be051216_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbb5200c5ba19868e44534bcaa5e2894906174ca7b9f56624505cf3ce61ecc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb5200c5ba19868e44534bcaa5e2894906174ca7b9f56624505cf3ce61ecc66->enter($__internal_dbb5200c5ba19868e44534bcaa5e2894906174ca7b9f56624505cf3ce61ecc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a2e1284982c25e90ec59af216c6992641867eb682f420e578d48860080c17801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e1284982c25e90ec59af216c6992641867eb682f420e578d48860080c17801->enter($__internal_a2e1284982c25e90ec59af216c6992641867eb682f420e578d48860080c17801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a2e1284982c25e90ec59af216c6992641867eb682f420e578d48860080c17801->leave($__internal_a2e1284982c25e90ec59af216c6992641867eb682f420e578d48860080c17801_prof);

        
        $__internal_dbb5200c5ba19868e44534bcaa5e2894906174ca7b9f56624505cf3ce61ecc66->leave($__internal_dbb5200c5ba19868e44534bcaa5e2894906174ca7b9f56624505cf3ce61ecc66_prof);

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
