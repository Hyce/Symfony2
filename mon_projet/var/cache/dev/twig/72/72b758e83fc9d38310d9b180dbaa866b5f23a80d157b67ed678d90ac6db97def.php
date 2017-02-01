<?php

/* DevFilmBundle:Film:list.html.twig */
class __TwigTemplate_37a209a490fdfe53ac73d7133e4619eff39837078561f5664617c350afa90ac6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevFilmBundle::layout.html.twig", "DevFilmBundle:Film:list.html.twig", 1);
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
        $__internal_17a60e06f7ae902e439c1f5b13eafeeab17ad5dca457823ed0be4379ec0d8ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a60e06f7ae902e439c1f5b13eafeeab17ad5dca457823ed0be4379ec0d8ddc->enter($__internal_17a60e06f7ae902e439c1f5b13eafeeab17ad5dca457823ed0be4379ec0d8ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle:Film:list.html.twig"));

        $__internal_64cf8f59a04c7c9d7649fe28c36b27245515953f538eaa764b35a7084ca2ccff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cf8f59a04c7c9d7649fe28c36b27245515953f538eaa764b35a7084ca2ccff->enter($__internal_64cf8f59a04c7c9d7649fe28c36b27245515953f538eaa764b35a7084ca2ccff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17a60e06f7ae902e439c1f5b13eafeeab17ad5dca457823ed0be4379ec0d8ddc->leave($__internal_17a60e06f7ae902e439c1f5b13eafeeab17ad5dca457823ed0be4379ec0d8ddc_prof);

        
        $__internal_64cf8f59a04c7c9d7649fe28c36b27245515953f538eaa764b35a7084ca2ccff->leave($__internal_64cf8f59a04c7c9d7649fe28c36b27245515953f538eaa764b35a7084ca2ccff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_adb0474420c039cc7ef6c29d944749d81dcd144ef0c09a64836a045d06ad1dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb0474420c039cc7ef6c29d944749d81dcd144ef0c09a64836a045d06ad1dde->enter($__internal_adb0474420c039cc7ef6c29d944749d81dcd144ef0c09a64836a045d06ad1dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2208fef2dae9e7bd1e28a0202154036d64e4fcbb5fda1577f2196c8fa46e51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2208fef2dae9e7bd1e28a0202154036d64e4fcbb5fda1577f2196c8fa46e51c->enter($__internal_c2208fef2dae9e7bd1e28a0202154036d64e4fcbb5fda1577f2196c8fa46e51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des films";
        
        $__internal_c2208fef2dae9e7bd1e28a0202154036d64e4fcbb5fda1577f2196c8fa46e51c->leave($__internal_c2208fef2dae9e7bd1e28a0202154036d64e4fcbb5fda1577f2196c8fa46e51c_prof);

        
        $__internal_adb0474420c039cc7ef6c29d944749d81dcd144ef0c09a64836a045d06ad1dde->leave($__internal_adb0474420c039cc7ef6c29d944749d81dcd144ef0c09a64836a045d06ad1dde_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e90f4d9f516ab961ad6ae1a9c54ab79c832f59719ef8d11bd04ff3cd19b3652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e90f4d9f516ab961ad6ae1a9c54ab79c832f59719ef8d11bd04ff3cd19b3652->enter($__internal_3e90f4d9f516ab961ad6ae1a9c54ab79c832f59719ef8d11bd04ff3cd19b3652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed219ba9ae491354389decf53544ff0180c9ef08a4e723ca4d2a83acaaaeda65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed219ba9ae491354389decf53544ff0180c9ef08a4e723ca4d2a83acaaaeda65->enter($__internal_ed219ba9ae491354389decf53544ff0180c9ef08a4e723ca4d2a83acaaaeda65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre"))), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["films"]) ? $context["films"] : $this->getContext($context, "films"))), "html", null, true);
        echo ")</h1>

<ul class=\"liste\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) ? $context["films"] : $this->getContext($context, "films")));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 11
            echo "        <li>
            <h2><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dev_film_default_show", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</a></h2>
            ";
            // line 13
            if (($this->getAttribute($context["film"], "realisateur", array()) == "James Cameron")) {
                // line 14
                echo "                <strong>Réalisé par ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "realisateur", array()), "html", null, true);
                echo "</strong>
            ";
            } else {
                // line 16
                echo "                <span>Réalisé par ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "realisateur", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 18
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
";
        
        $__internal_ed219ba9ae491354389decf53544ff0180c9ef08a4e723ca4d2a83acaaaeda65->leave($__internal_ed219ba9ae491354389decf53544ff0180c9ef08a4e723ca4d2a83acaaaeda65_prof);

        
        $__internal_3e90f4d9f516ab961ad6ae1a9c54ab79c832f59719ef8d11bd04ff3cd19b3652->leave($__internal_3e90f4d9f516ab961ad6ae1a9c54ab79c832f59719ef8d11bd04ff3cd19b3652_prof);

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
        return array (  113 => 20,  106 => 18,  100 => 16,  94 => 14,  92 => 13,  86 => 12,  83 => 11,  79 => 10,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Liste des films{% endblock %}

{% block body %}

<h1>{{ titre|upper }} ({{ films|length }})</h1>

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
</ul>
{% endblock %}", "DevFilmBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Dev/FilmBundle/Resources/views/Film/list.html.twig");
    }
}
