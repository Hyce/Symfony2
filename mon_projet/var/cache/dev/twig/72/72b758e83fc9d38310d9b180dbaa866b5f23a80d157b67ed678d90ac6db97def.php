<?php

/* DevFilmBundle:Film:list.html.twig */
class __TwigTemplate_37a209a490fdfe53ac73d7133e4619eff39837078561f5664617c350afa90ac6 extends Twig_Template
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
        $__internal_cfbc95997384b426080b828818baf34895797b1532551aeb55b910c805a60861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfbc95997384b426080b828818baf34895797b1532551aeb55b910c805a60861->enter($__internal_cfbc95997384b426080b828818baf34895797b1532551aeb55b910c805a60861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle:Film:list.html.twig"));

        $__internal_c8107816ffcff47641f095d37d466c77074804f3974d539014597fa68c01b190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8107816ffcff47641f095d37d466c77074804f3974d539014597fa68c01b190->enter($__internal_c8107816ffcff47641f095d37d466c77074804f3974d539014597fa68c01b190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle:Film:list.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre"))), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["films"]) ? $context["films"] : $this->getContext($context, "films"))), "html", null, true);
        echo ")</h1>

<ul class=\"liste\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 5
            echo "        <li>
            <h2><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dev_film_default_show", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></h2>
            ";
            // line 7
            if (($this->getAttribute($context["film"], "realisateur", array()) == "James Cameron")) {
                // line 8
                echo "                <strong>Réalisé par ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "realisateur", array()), "html", null, true);
                echo "</strong>
            ";
            } else {
                // line 10
                echo "                <span>Réalisé par ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "realisateur", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 12
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
        
        $__internal_cfbc95997384b426080b828818baf34895797b1532551aeb55b910c805a60861->leave($__internal_cfbc95997384b426080b828818baf34895797b1532551aeb55b910c805a60861_prof);

        
        $__internal_c8107816ffcff47641f095d37d466c77074804f3974d539014597fa68c01b190->leave($__internal_c8107816ffcff47641f095d37d466c77074804f3974d539014597fa68c01b190_prof);

    }

    public function getTemplateName()
    {
        return "DevFilmBundle:Film:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  61 => 12,  55 => 10,  49 => 8,  47 => 7,  41 => 6,  38 => 5,  34 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ titre|upper }} ({{ films|length }})</h1>

<ul class=\"liste\">
    {% for film in films %}
        <li>
            <h2><a href=\"{{ path('dev_film_default_show', {'id': film.id}) }}\">{{ film.titre }}</a></h2>
            {% if film.realisateur == \"James Cameron\" %}
                <strong>Réalisé par {{ film.realisateur }}</strong>
            {% else %}
                <span>Réalisé par {{ film.realisateur }}</span>
            {% endif %}
        </li>
    {% endfor %}
</ul>", "DevFilmBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Dev/FilmBundle/Resources/views/Film/list.html.twig");
    }
}
