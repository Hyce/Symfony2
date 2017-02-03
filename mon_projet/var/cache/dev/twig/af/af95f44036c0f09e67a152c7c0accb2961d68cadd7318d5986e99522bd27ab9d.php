<?php

/* DevschoolAdminBundle:Genre:form.html.twig */
class __TwigTemplate_056843ebb2cdc254e008b1878c838595afdad8acd9d4e07c7e86d3225261bbb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DevschoolAdminBundle::layout.html.twig", "DevschoolAdminBundle:Genre:form.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevschoolAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_001f40fe5b16c7dbab78edad5614db5ded1b27c9f84d078c1dd03aa0f4e93393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001f40fe5b16c7dbab78edad5614db5ded1b27c9f84d078c1dd03aa0f4e93393->enter($__internal_001f40fe5b16c7dbab78edad5614db5ded1b27c9f84d078c1dd03aa0f4e93393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Genre:form.html.twig"));

        $__internal_70b0951f2445858a3a87c0cd707d20a2f023d7d406a20d4a7dc8a20a2ece1184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b0951f2445858a3a87c0cd707d20a2f023d7d406a20d4a7dc8a20a2ece1184->enter($__internal_70b0951f2445858a3a87c0cd707d20a2f023d7d406a20d4a7dc8a20a2ece1184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Genre:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_001f40fe5b16c7dbab78edad5614db5ded1b27c9f84d078c1dd03aa0f4e93393->leave($__internal_001f40fe5b16c7dbab78edad5614db5ded1b27c9f84d078c1dd03aa0f4e93393_prof);

        
        $__internal_70b0951f2445858a3a87c0cd707d20a2f023d7d406a20d4a7dc8a20a2ece1184->leave($__internal_70b0951f2445858a3a87c0cd707d20a2f023d7d406a20d4a7dc8a20a2ece1184_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e39b8f3c536721531b1af24713fcdf8b93145ec9b2eca4ac95767a8f69181ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e39b8f3c536721531b1af24713fcdf8b93145ec9b2eca4ac95767a8f69181ae->enter($__internal_9e39b8f3c536721531b1af24713fcdf8b93145ec9b2eca4ac95767a8f69181ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49f3a2444ffeebc5a3a6055d7124970d737c39d5972c6d631a01a7c8b5b6b314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f3a2444ffeebc5a3a6055d7124970d737c39d5972c6d631a01a7c8b5b6b314->enter($__internal_49f3a2444ffeebc5a3a6055d7124970d737c39d5972c6d631a01a7c8b5b6b314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Formulaire Genre :</h1>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <strong>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "</strong> : ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo " ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <br />
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_liste");
        echo "\">Retour</a>
";
        
        $__internal_49f3a2444ffeebc5a3a6055d7124970d737c39d5972c6d631a01a7c8b5b6b314->leave($__internal_49f3a2444ffeebc5a3a6055d7124970d737c39d5972c6d631a01a7c8b5b6b314_prof);

        
        $__internal_9e39b8f3c536721531b1af24713fcdf8b93145ec9b2eca4ac95767a8f69181ae->leave($__internal_9e39b8f3c536721531b1af24713fcdf8b93145ec9b2eca4ac95767a8f69181ae_prof);

    }

    public function getTemplateName()
    {
        return "DevschoolAdminBundle:Genre:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  64 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src\\Devschool\\AdminBundle\\Resources\\views\\Genre\\form.html.twig #}
{% extends 'DevschoolAdminBundle::layout.html.twig' %}
{% block body %}
    <h1>Formulaire Genre :</h1>
    {{ form_start(form) }}
    <strong>{{ form_label(form.nom) }}</strong> : {{ form_widget(form.nom) }} {{ form_widget(form.save) }}
    {{ form_end(form) }}
    <br />
    <a href=\"{{ path('admin_genre_liste') }}\">Retour</a>
{% endblock %}", "DevschoolAdminBundle:Genre:form.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Devschool/AdminBundle/Resources/views/Genre/form.html.twig");
    }
}
