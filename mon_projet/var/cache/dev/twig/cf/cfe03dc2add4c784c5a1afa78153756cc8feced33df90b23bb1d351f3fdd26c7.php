<?php

/* DevschoolAdminBundle:Genre:list.html.twig */
class __TwigTemplate_d36226b5b58e31e9dec995b507bf19275f5af632201c579674751c1c35e25dbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DevschoolAdminBundle::layout.html.twig", "DevschoolAdminBundle:Genre:list.html.twig", 2);
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
        $__internal_e19dc1174d90f3e52752c7590edd2dad92c33408b55295563f7d63b80e55cf24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19dc1174d90f3e52752c7590edd2dad92c33408b55295563f7d63b80e55cf24->enter($__internal_e19dc1174d90f3e52752c7590edd2dad92c33408b55295563f7d63b80e55cf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Genre:list.html.twig"));

        $__internal_e06824e6d879e790401bcae7cb6da3f1a16ad0b30f0f3d1f8387f58b1722c6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06824e6d879e790401bcae7cb6da3f1a16ad0b30f0f3d1f8387f58b1722c6fa->enter($__internal_e06824e6d879e790401bcae7cb6da3f1a16ad0b30f0f3d1f8387f58b1722c6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Genre:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e19dc1174d90f3e52752c7590edd2dad92c33408b55295563f7d63b80e55cf24->leave($__internal_e19dc1174d90f3e52752c7590edd2dad92c33408b55295563f7d63b80e55cf24_prof);

        
        $__internal_e06824e6d879e790401bcae7cb6da3f1a16ad0b30f0f3d1f8387f58b1722c6fa->leave($__internal_e06824e6d879e790401bcae7cb6da3f1a16ad0b30f0f3d1f8387f58b1722c6fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8313f2afdac7e43b8adeec39492f0cb6bb52e258e21477d0e86f7ce6abdc37a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8313f2afdac7e43b8adeec39492f0cb6bb52e258e21477d0e86f7ce6abdc37a0->enter($__internal_8313f2afdac7e43b8adeec39492f0cb6bb52e258e21477d0e86f7ce6abdc37a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78ee3cfdd2282eb5e485ae1f82c4222199acdf2e7fa790c36c9c8a3318634b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ee3cfdd2282eb5e485ae1f82c4222199acdf2e7fa790c36c9c8a3318634b87->enter($__internal_78ee3cfdd2282eb5e485ae1f82c4222199acdf2e7fa790c36c9c8a3318634b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Liste des genres :</h1>
<ul>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 7
            echo "    <li>
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_modif", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "nom", array()), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_supprimer", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">(x)</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
<a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_ajout");
        echo "\">Ajouter</a>
";
        
        $__internal_78ee3cfdd2282eb5e485ae1f82c4222199acdf2e7fa790c36c9c8a3318634b87->leave($__internal_78ee3cfdd2282eb5e485ae1f82c4222199acdf2e7fa790c36c9c8a3318634b87_prof);

        
        $__internal_8313f2afdac7e43b8adeec39492f0cb6bb52e258e21477d0e86f7ce6abdc37a0->leave($__internal_8313f2afdac7e43b8adeec39492f0cb6bb52e258e21477d0e86f7ce6abdc37a0_prof);

    }

    public function getTemplateName()
    {
        return "DevschoolAdminBundle:Genre:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  75 => 12,  66 => 9,  60 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src\\Devschool\\AdminBundle\\Resources\\views\\Genre\\list.html.twig #}
{% extends 'DevschoolAdminBundle::layout.html.twig' %}
{% block body %}
<h1>Liste des genres :</h1>
<ul>
{% for genre in genres %}
    <li>
        <a href=\"{{ path('admin_genre_modif', {'id': genre.id}) }}\">{{ genre.nom }}</a>
        <a href=\"{{ path('admin_genre_supprimer', {'id': genre.id}) }}\">(x)</a>
    </li>
{% endfor %}
</ul>
<a href=\"{{ path('admin_genre_ajout') }}\">Ajouter</a>
{% endblock %}", "DevschoolAdminBundle:Genre:list.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Devschool/AdminBundle/Resources/views/Genre/list.html.twig");
    }
}
