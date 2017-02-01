<?php

/* DevschoolAdminBundle:Livre:list.html.twig */
class __TwigTemplate_82e4ad8b1acd430719cb5d636ab7a5e17b69134f11177a1b35bbe9e30913809f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DevschoolAdminBundle::layout.html.twig", "DevschoolAdminBundle:Livre:list.html.twig", 2);
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
        $__internal_a3c717441f124b45eb6c5484e6d08f63968d97b78eadd79a28079be222be41ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c717441f124b45eb6c5484e6d08f63968d97b78eadd79a28079be222be41ab->enter($__internal_a3c717441f124b45eb6c5484e6d08f63968d97b78eadd79a28079be222be41ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Livre:list.html.twig"));

        $__internal_9421a07483f767e343ad13a28c8639c0d3366ca65cd67a1ed0a0ac906fa75f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9421a07483f767e343ad13a28c8639c0d3366ca65cd67a1ed0a0ac906fa75f6f->enter($__internal_9421a07483f767e343ad13a28c8639c0d3366ca65cd67a1ed0a0ac906fa75f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle:Livre:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3c717441f124b45eb6c5484e6d08f63968d97b78eadd79a28079be222be41ab->leave($__internal_a3c717441f124b45eb6c5484e6d08f63968d97b78eadd79a28079be222be41ab_prof);

        
        $__internal_9421a07483f767e343ad13a28c8639c0d3366ca65cd67a1ed0a0ac906fa75f6f->leave($__internal_9421a07483f767e343ad13a28c8639c0d3366ca65cd67a1ed0a0ac906fa75f6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bb420bb97d8636c19ca370367d9faac33c8ce443bae2b42b1cf78bc89e7219a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb420bb97d8636c19ca370367d9faac33c8ce443bae2b42b1cf78bc89e7219a->enter($__internal_9bb420bb97d8636c19ca370367d9faac33c8ce443bae2b42b1cf78bc89e7219a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ac2d96eb23b5a5a2f113ac5e184b38382601213c9941c2025af397c01df7797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac2d96eb23b5a5a2f113ac5e184b38382601213c9941c2025af397c01df7797->enter($__internal_3ac2d96eb23b5a5a2f113ac5e184b38382601213c9941c2025af397c01df7797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Liste des livres :</h1>
<ul>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 7
            echo "        <li>
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_livre_modif", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "titre", array()), "html", null, true);
            echo "</a>
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_livre_supprimer", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\">(x)</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
<a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_livre_ajout");
        echo "\">Ajouter</a>
";
        
        $__internal_3ac2d96eb23b5a5a2f113ac5e184b38382601213c9941c2025af397c01df7797->leave($__internal_3ac2d96eb23b5a5a2f113ac5e184b38382601213c9941c2025af397c01df7797_prof);

        
        $__internal_9bb420bb97d8636c19ca370367d9faac33c8ce443bae2b42b1cf78bc89e7219a->leave($__internal_9bb420bb97d8636c19ca370367d9faac33c8ce443bae2b42b1cf78bc89e7219a_prof);

    }

    public function getTemplateName()
    {
        return "DevschoolAdminBundle:Livre:list.html.twig";
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
        return new Twig_Source("{# src\\Devschool\\AdminBundle\\Resources\\views\\Livre\\list.html.twig #}
{% extends 'DevschoolAdminBundle::layout.html.twig' %}
{% block body %}
<h1>Liste des livres :</h1>
<ul>
    {% for livre in livres %}
        <li>
            <a href=\"{{ path('admin_livre_modif', {'id': livre.id}) }}\">{{ livre.titre }}</a>
            <a href=\"{{ path('admin_livre_supprimer', {'id': livre.id}) }}\">(x)</a>
        </li>
    {% endfor %}
</ul>
<a href=\"{{ path('admin_livre_ajout') }}\">Ajouter</a>
{% endblock %}", "DevschoolAdminBundle:Livre:list.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Devschool/AdminBundle/Resources/views/Livre/list.html.twig");
    }
}
