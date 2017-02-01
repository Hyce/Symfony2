<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_22427cf9a2428ac70711a4e584624d2afd36a737b689cb5cf81cd0bd11818715 extends Twig_Template
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
        $__internal_5bb080650e0f7deddf394d7d0546a2d16d2cde04c47fb4316b2d58f825c427d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb080650e0f7deddf394d7d0546a2d16d2cde04c47fb4316b2d58f825c427d0->enter($__internal_5bb080650e0f7deddf394d7d0546a2d16d2cde04c47fb4316b2d58f825c427d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_80ffc9c753c6103a72dadc1b69167169606591242db53425357ab6fadf6cbf29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ffc9c753c6103a72dadc1b69167169606591242db53425357ab6fadf6cbf29->enter($__internal_80ffc9c753c6103a72dadc1b69167169606591242db53425357ab6fadf6cbf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bb080650e0f7deddf394d7d0546a2d16d2cde04c47fb4316b2d58f825c427d0->leave($__internal_5bb080650e0f7deddf394d7d0546a2d16d2cde04c47fb4316b2d58f825c427d0_prof);

        
        $__internal_80ffc9c753c6103a72dadc1b69167169606591242db53425357ab6fadf6cbf29->leave($__internal_80ffc9c753c6103a72dadc1b69167169606591242db53425357ab6fadf6cbf29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_417157020703ad14833797d155757957d77bf072c6370e31dfa79ef329e99a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417157020703ad14833797d155757957d77bf072c6370e31dfa79ef329e99a5c->enter($__internal_417157020703ad14833797d155757957d77bf072c6370e31dfa79ef329e99a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49a9049f6ca81a66cce7d0e4d91badd6081982b38e869f6de966fd5d8dc2bfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a9049f6ca81a66cce7d0e4d91badd6081982b38e869f6de966fd5d8dc2bfea->enter($__internal_49a9049f6ca81a66cce7d0e4d91badd6081982b38e869f6de966fd5d8dc2bfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_49a9049f6ca81a66cce7d0e4d91badd6081982b38e869f6de966fd5d8dc2bfea->leave($__internal_49a9049f6ca81a66cce7d0e4d91badd6081982b38e869f6de966fd5d8dc2bfea_prof);

        
        $__internal_417157020703ad14833797d155757957d77bf072c6370e31dfa79ef329e99a5c->leave($__internal_417157020703ad14833797d155757957d77bf072c6370e31dfa79ef329e99a5c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f19fcf3013617b8f0d5ee37a4cc7888e77832256286074c3d91b54defea75ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19fcf3013617b8f0d5ee37a4cc7888e77832256286074c3d91b54defea75ebf->enter($__internal_f19fcf3013617b8f0d5ee37a4cc7888e77832256286074c3d91b54defea75ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b98ef2a1759a99ee501ae8af1558204163456822f02abc905e3625ee4e858d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98ef2a1759a99ee501ae8af1558204163456822f02abc905e3625ee4e858d9f->enter($__internal_b98ef2a1759a99ee501ae8af1558204163456822f02abc905e3625ee4e858d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b98ef2a1759a99ee501ae8af1558204163456822f02abc905e3625ee4e858d9f->leave($__internal_b98ef2a1759a99ee501ae8af1558204163456822f02abc905e3625ee4e858d9f_prof);

        
        $__internal_f19fcf3013617b8f0d5ee37a4cc7888e77832256286074c3d91b54defea75ebf->leave($__internal_f19fcf3013617b8f0d5ee37a4cc7888e77832256286074c3d91b54defea75ebf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad56fd4264035bbbd800b87c74d97e0f84c37f5017aef67c909ffd6f2ef894a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad56fd4264035bbbd800b87c74d97e0f84c37f5017aef67c909ffd6f2ef894a5->enter($__internal_ad56fd4264035bbbd800b87c74d97e0f84c37f5017aef67c909ffd6f2ef894a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5fd724bfcbd67bf0889671d924d6db4ae37d52a19e6a805cd78376a3fbf868ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd724bfcbd67bf0889671d924d6db4ae37d52a19e6a805cd78376a3fbf868ad->enter($__internal_5fd724bfcbd67bf0889671d924d6db4ae37d52a19e6a805cd78376a3fbf868ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5fd724bfcbd67bf0889671d924d6db4ae37d52a19e6a805cd78376a3fbf868ad->leave($__internal_5fd724bfcbd67bf0889671d924d6db4ae37d52a19e6a805cd78376a3fbf868ad_prof);

        
        $__internal_ad56fd4264035bbbd800b87c74d97e0f84c37f5017aef67c909ffd6f2ef894a5->leave($__internal_ad56fd4264035bbbd800b87c74d97e0f84c37f5017aef67c909ffd6f2ef894a5_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
