<?php

/* DevFilmBundle:Film:show.html.twig */
class __TwigTemplate_e091a1afbe9ba38a3d640b3776b40d56f93caa99a12e92f12f005ac0485cf014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevFilmBundle::layout.html.twig", "DevFilmBundle:Film:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevFilmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc71023f532be3b3fd55c99afb6c478b86072b1cbbabad56da22e3876d9e8b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc71023f532be3b3fd55c99afb6c478b86072b1cbbabad56da22e3876d9e8b74->enter($__internal_cc71023f532be3b3fd55c99afb6c478b86072b1cbbabad56da22e3876d9e8b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle:Film:show.html.twig"));

        $__internal_0ea543c1438bffb622bb0c6d10a19559b7769eebd87954ec8868907f8b17902b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea543c1438bffb622bb0c6d10a19559b7769eebd87954ec8868907f8b17902b->enter($__internal_0ea543c1438bffb622bb0c6d10a19559b7769eebd87954ec8868907f8b17902b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle:Film:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc71023f532be3b3fd55c99afb6c478b86072b1cbbabad56da22e3876d9e8b74->leave($__internal_cc71023f532be3b3fd55c99afb6c478b86072b1cbbabad56da22e3876d9e8b74_prof);

        
        $__internal_0ea543c1438bffb622bb0c6d10a19559b7769eebd87954ec8868907f8b17902b->leave($__internal_0ea543c1438bffb622bb0c6d10a19559b7769eebd87954ec8868907f8b17902b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_369f4318906d977f41bbe04ea26b26b6cf890a1280ca4ab243113c8859001696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369f4318906d977f41bbe04ea26b26b6cf890a1280ca4ab243113c8859001696->enter($__internal_369f4318906d977f41bbe04ea26b26b6cf890a1280ca4ab243113c8859001696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58d045e03979001b8459241135cbf57c81778c4ee8ff8622ddeec1150e1ff58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d045e03979001b8459241135cbf57c81778c4ee8ff8622ddeec1150e1ff58a->enter($__internal_58d045e03979001b8459241135cbf57c81778c4ee8ff8622ddeec1150e1ff58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        
        $__internal_58d045e03979001b8459241135cbf57c81778c4ee8ff8622ddeec1150e1ff58a->leave($__internal_58d045e03979001b8459241135cbf57c81778c4ee8ff8622ddeec1150e1ff58a_prof);

        
        $__internal_369f4318906d977f41bbe04ea26b26b6cf890a1280ca4ab243113c8859001696->leave($__internal_369f4318906d977f41bbe04ea26b26b6cf890a1280ca4ab243113c8859001696_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7008112dbf5a526c4fe0b63425bbb22e91095fc9773f0de3f541d411c7c8a697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7008112dbf5a526c4fe0b63425bbb22e91095fc9773f0de3f541d411c7c8a697->enter($__internal_7008112dbf5a526c4fe0b63425bbb22e91095fc9773f0de3f541d411c7c8a697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc9e928707c8c532e89864987a64d8bc8f00e30a29548db320f125cd3ce126de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9e928707c8c532e89864987a64d8bc8f00e30a29548db320f125cd3ce126de->enter($__internal_bc9e928707c8c532e89864987a64d8bc8f00e30a29548db320f125cd3ce126de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        echo "</h1>

<span>Réalisé par ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "realisateur", array()), "html", null, true);
        echo "</span>

<p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "synopsis", array()), "html", null, true);
        echo "</p>

<span>Date de Parution : ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "dateParution", array()), "m/d/Y"), "html", null, true);
        echo "</span>


<p><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "\">Retour</a></p>
";
        
        $__internal_bc9e928707c8c532e89864987a64d8bc8f00e30a29548db320f125cd3ce126de->leave($__internal_bc9e928707c8c532e89864987a64d8bc8f00e30a29548db320f125cd3ce126de_prof);

        
        $__internal_7008112dbf5a526c4fe0b63425bbb22e91095fc9773f0de3f541d411c7c8a697->leave($__internal_7008112dbf5a526c4fe0b63425bbb22e91095fc9773f0de3f541d411c7c8a697_prof);

    }

    public function getTemplateName()
    {
        return "DevFilmBundle:Film:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  79 => 10,  74 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'DevFilmBundle::layout.html.twig' %}

{% block title %}{{ film.titre }}{% endblock %}

{% block body %}
<h1>{{ film.titre }}</h1>

<span>Réalisé par {{ film.realisateur }}</span>

<p>{{ film.synopsis }}</p>

<span>Date de Parution : {{ film.dateParution|date(\"m/d/Y\") }}</span>


<p><a href=\"{{ path('page_films') }}\">Retour</a></p>
{% endblock %}

", "DevFilmBundle:Film:show.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Dev/FilmBundle/Resources/views/Film/show.html.twig");
    }
}
