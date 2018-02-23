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
        $__internal_e27aabbda86456b9e6cfd08059d52d8826a007e6f70d74d29edb90d449101d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e27aabbda86456b9e6cfd08059d52d8826a007e6f70d74d29edb90d449101d51->enter($__internal_e27aabbda86456b9e6cfd08059d52d8826a007e6f70d74d29edb90d449101d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a3517f50de90146c33d9f00d1ee8f7943ec3afb0188bef31d3480dee9b4e45e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3517f50de90146c33d9f00d1ee8f7943ec3afb0188bef31d3480dee9b4e45e8->enter($__internal_a3517f50de90146c33d9f00d1ee8f7943ec3afb0188bef31d3480dee9b4e45e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e27aabbda86456b9e6cfd08059d52d8826a007e6f70d74d29edb90d449101d51->leave($__internal_e27aabbda86456b9e6cfd08059d52d8826a007e6f70d74d29edb90d449101d51_prof);

        
        $__internal_a3517f50de90146c33d9f00d1ee8f7943ec3afb0188bef31d3480dee9b4e45e8->leave($__internal_a3517f50de90146c33d9f00d1ee8f7943ec3afb0188bef31d3480dee9b4e45e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0bbfeeee8101b5a9b09809b9632a9b1367febe0a2a1a4f1bcd2e6f547bb3c83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bbfeeee8101b5a9b09809b9632a9b1367febe0a2a1a4f1bcd2e6f547bb3c83d->enter($__internal_0bbfeeee8101b5a9b09809b9632a9b1367febe0a2a1a4f1bcd2e6f547bb3c83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_88c813e0b88feef39dd2b89467946b2a067b76ba7c72abc20d676c1b2eb2b8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c813e0b88feef39dd2b89467946b2a067b76ba7c72abc20d676c1b2eb2b8ab->enter($__internal_88c813e0b88feef39dd2b89467946b2a067b76ba7c72abc20d676c1b2eb2b8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_88c813e0b88feef39dd2b89467946b2a067b76ba7c72abc20d676c1b2eb2b8ab->leave($__internal_88c813e0b88feef39dd2b89467946b2a067b76ba7c72abc20d676c1b2eb2b8ab_prof);

        
        $__internal_0bbfeeee8101b5a9b09809b9632a9b1367febe0a2a1a4f1bcd2e6f547bb3c83d->leave($__internal_0bbfeeee8101b5a9b09809b9632a9b1367febe0a2a1a4f1bcd2e6f547bb3c83d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a82ed85fbaef23e626d0f204ce977df65be5542c201c64b5ee90780d6ec2cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a82ed85fbaef23e626d0f204ce977df65be5542c201c64b5ee90780d6ec2cac->enter($__internal_2a82ed85fbaef23e626d0f204ce977df65be5542c201c64b5ee90780d6ec2cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_573cd89120abbb771aa4b4ece6a86bf1d6d81101fe4e50d35f463800dd4a198a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573cd89120abbb771aa4b4ece6a86bf1d6d81101fe4e50d35f463800dd4a198a->enter($__internal_573cd89120abbb771aa4b4ece6a86bf1d6d81101fe4e50d35f463800dd4a198a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_573cd89120abbb771aa4b4ece6a86bf1d6d81101fe4e50d35f463800dd4a198a->leave($__internal_573cd89120abbb771aa4b4ece6a86bf1d6d81101fe4e50d35f463800dd4a198a_prof);

        
        $__internal_2a82ed85fbaef23e626d0f204ce977df65be5542c201c64b5ee90780d6ec2cac->leave($__internal_2a82ed85fbaef23e626d0f204ce977df65be5542c201c64b5ee90780d6ec2cac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_056046d0f525cce611d02c14800596433b12eae270d5e837726a0768902c11a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056046d0f525cce611d02c14800596433b12eae270d5e837726a0768902c11a3->enter($__internal_056046d0f525cce611d02c14800596433b12eae270d5e837726a0768902c11a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27b1354811c00faec8c2e672c062a42996f3612145396c8e020149d088d0931d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b1354811c00faec8c2e672c062a42996f3612145396c8e020149d088d0931d->enter($__internal_27b1354811c00faec8c2e672c062a42996f3612145396c8e020149d088d0931d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27b1354811c00faec8c2e672c062a42996f3612145396c8e020149d088d0931d->leave($__internal_27b1354811c00faec8c2e672c062a42996f3612145396c8e020149d088d0931d_prof);

        
        $__internal_056046d0f525cce611d02c14800596433b12eae270d5e837726a0768902c11a3->leave($__internal_056046d0f525cce611d02c14800596433b12eae270d5e837726a0768902c11a3_prof);

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
