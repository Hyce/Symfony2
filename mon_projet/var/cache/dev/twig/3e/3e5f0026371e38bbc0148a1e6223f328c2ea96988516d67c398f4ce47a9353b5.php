<?php

/* DevFilmBundle:Film:show.html.twig */
class __TwigTemplate_e091a1afbe9ba38a3d640b3776b40d56f93caa99a12e92f12f005ac0485cf014 extends Twig_Template
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
        $__internal_dcd3308394606afe9a4d26c8540649eede09b79aacb5b3f690f4a7926141f0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd3308394606afe9a4d26c8540649eede09b79aacb5b3f690f4a7926141f0ff->enter($__internal_dcd3308394606afe9a4d26c8540649eede09b79aacb5b3f690f4a7926141f0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle:Film:show.html.twig"));

        $__internal_64efa4d3bc597ec13079730b5df2e570c6d97c299b93d2efe5a44b9fd5d86010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64efa4d3bc597ec13079730b5df2e570c6d97c299b93d2efe5a44b9fd5d86010->enter($__internal_64efa4d3bc597ec13079730b5df2e570c6d97c299b93d2efe5a44b9fd5d86010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle:Film:show.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        echo "</h1>

<span>Réalisé par ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "realisateur", array()), "html", null, true);
        echo "</span>

<p>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "synopsis", array()), "html", null, true);
        echo "</p>

<span>Date de Parution : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "dateParution", array()), "m/d/Y"), "html", null, true);
        echo "</span>


<p><a href=\"../films\">Retour</a></p>

";
        
        $__internal_dcd3308394606afe9a4d26c8540649eede09b79aacb5b3f690f4a7926141f0ff->leave($__internal_dcd3308394606afe9a4d26c8540649eede09b79aacb5b3f690f4a7926141f0ff_prof);

        
        $__internal_64efa4d3bc597ec13079730b5df2e570c6d97c299b93d2efe5a44b9fd5d86010->leave($__internal_64efa4d3bc597ec13079730b5df2e570c6d97c299b93d2efe5a44b9fd5d86010_prof);

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
        return array (  41 => 7,  36 => 5,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ film.titre }}</h1>

<span>Réalisé par {{ film.realisateur }}</span>

<p>{{ film.synopsis }}</p>

<span>Date de Parution : {{ film.dateParution|date(\"m/d/Y\") }}</span>


<p><a href=\"../films\">Retour</a></p>

", "DevFilmBundle:Film:show.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Dev/FilmBundle/Resources/views/Film/show.html.twig");
    }
}
