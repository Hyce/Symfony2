<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34b129d34ce08f48985acad233409cc1345f626b0e0b44999451672c44b7efc5 extends Twig_Template
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
        $__internal_24ff2ca2bf5e5b3e717aa3042ddfc84900f19e8ba15e187bcc66bcb1c010c563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ff2ca2bf5e5b3e717aa3042ddfc84900f19e8ba15e187bcc66bcb1c010c563->enter($__internal_24ff2ca2bf5e5b3e717aa3042ddfc84900f19e8ba15e187bcc66bcb1c010c563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7992b94370050c490b8fedd54cb34affbac5dfd37e05d1f7a123f6d0dce073b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7992b94370050c490b8fedd54cb34affbac5dfd37e05d1f7a123f6d0dce073b9->enter($__internal_7992b94370050c490b8fedd54cb34affbac5dfd37e05d1f7a123f6d0dce073b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24ff2ca2bf5e5b3e717aa3042ddfc84900f19e8ba15e187bcc66bcb1c010c563->leave($__internal_24ff2ca2bf5e5b3e717aa3042ddfc84900f19e8ba15e187bcc66bcb1c010c563_prof);

        
        $__internal_7992b94370050c490b8fedd54cb34affbac5dfd37e05d1f7a123f6d0dce073b9->leave($__internal_7992b94370050c490b8fedd54cb34affbac5dfd37e05d1f7a123f6d0dce073b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5cfe553778de619a414042e247f7e3393e4c07a0d4ce1762961bf22d8ff4328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5cfe553778de619a414042e247f7e3393e4c07a0d4ce1762961bf22d8ff4328->enter($__internal_b5cfe553778de619a414042e247f7e3393e4c07a0d4ce1762961bf22d8ff4328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e146740882e5815035d0e37842e16c853f27a8393ea9bd0385b39ddfd6c43e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e146740882e5815035d0e37842e16c853f27a8393ea9bd0385b39ddfd6c43e0c->enter($__internal_e146740882e5815035d0e37842e16c853f27a8393ea9bd0385b39ddfd6c43e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e146740882e5815035d0e37842e16c853f27a8393ea9bd0385b39ddfd6c43e0c->leave($__internal_e146740882e5815035d0e37842e16c853f27a8393ea9bd0385b39ddfd6c43e0c_prof);

        
        $__internal_b5cfe553778de619a414042e247f7e3393e4c07a0d4ce1762961bf22d8ff4328->leave($__internal_b5cfe553778de619a414042e247f7e3393e4c07a0d4ce1762961bf22d8ff4328_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a211bacc04def053aaebd0c308396d99bbbb7aa88e985adca40f159f7777cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a211bacc04def053aaebd0c308396d99bbbb7aa88e985adca40f159f7777cfc->enter($__internal_0a211bacc04def053aaebd0c308396d99bbbb7aa88e985adca40f159f7777cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13bb83fb69b8f70f6e4bcee06b5961f263536757bf51eba4b34070a8c3a9c762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bb83fb69b8f70f6e4bcee06b5961f263536757bf51eba4b34070a8c3a9c762->enter($__internal_13bb83fb69b8f70f6e4bcee06b5961f263536757bf51eba4b34070a8c3a9c762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13bb83fb69b8f70f6e4bcee06b5961f263536757bf51eba4b34070a8c3a9c762->leave($__internal_13bb83fb69b8f70f6e4bcee06b5961f263536757bf51eba4b34070a8c3a9c762_prof);

        
        $__internal_0a211bacc04def053aaebd0c308396d99bbbb7aa88e985adca40f159f7777cfc->leave($__internal_0a211bacc04def053aaebd0c308396d99bbbb7aa88e985adca40f159f7777cfc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_798d2d02336beff4967e3ed94e6448bec4c6d0fcdf2120a209a46493c9701a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798d2d02336beff4967e3ed94e6448bec4c6d0fcdf2120a209a46493c9701a0d->enter($__internal_798d2d02336beff4967e3ed94e6448bec4c6d0fcdf2120a209a46493c9701a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e511f6bb71e78fb5cef9d74d34137dd4696d1830826f2f5eef19da62ac68080d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e511f6bb71e78fb5cef9d74d34137dd4696d1830826f2f5eef19da62ac68080d->enter($__internal_e511f6bb71e78fb5cef9d74d34137dd4696d1830826f2f5eef19da62ac68080d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e511f6bb71e78fb5cef9d74d34137dd4696d1830826f2f5eef19da62ac68080d->leave($__internal_e511f6bb71e78fb5cef9d74d34137dd4696d1830826f2f5eef19da62ac68080d_prof);

        
        $__internal_798d2d02336beff4967e3ed94e6448bec4c6d0fcdf2120a209a46493c9701a0d->leave($__internal_798d2d02336beff4967e3ed94e6448bec4c6d0fcdf2120a209a46493c9701a0d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
