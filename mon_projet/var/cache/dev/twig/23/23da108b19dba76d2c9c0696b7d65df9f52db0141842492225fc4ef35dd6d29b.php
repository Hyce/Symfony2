<?php

/* DevschoolBiblioBundle:Livre:list.html.twig */
class __TwigTemplate_29b7d2ac39a9394efb317f75174849229f6f53b938558ff6386b0e18b71a84bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DevschoolBiblioBundle::layout.html.twig", "DevschoolBiblioBundle:Livre:list.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevschoolBiblioBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81ece2973fee5f471bd195d5cbafa96527699151ee17ab21aa941471b165e7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ece2973fee5f471bd195d5cbafa96527699151ee17ab21aa941471b165e7fb->enter($__internal_81ece2973fee5f471bd195d5cbafa96527699151ee17ab21aa941471b165e7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolBiblioBundle:Livre:list.html.twig"));

        $__internal_a0cc4565d6d61bea64b33694fa44835bf007c9940f27a65943bb2c7fe926bb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cc4565d6d61bea64b33694fa44835bf007c9940f27a65943bb2c7fe926bb21->enter($__internal_a0cc4565d6d61bea64b33694fa44835bf007c9940f27a65943bb2c7fe926bb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolBiblioBundle:Livre:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ece2973fee5f471bd195d5cbafa96527699151ee17ab21aa941471b165e7fb->leave($__internal_81ece2973fee5f471bd195d5cbafa96527699151ee17ab21aa941471b165e7fb_prof);

        
        $__internal_a0cc4565d6d61bea64b33694fa44835bf007c9940f27a65943bb2c7fe926bb21->leave($__internal_a0cc4565d6d61bea64b33694fa44835bf007c9940f27a65943bb2c7fe926bb21_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d7e4d33aaac685af01f6e02a51694d74f5b5bb3edb3fd4b6c7c4a05f16e0c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7e4d33aaac685af01f6e02a51694d74f5b5bb3edb3fd4b6c7c4a05f16e0c38->enter($__internal_8d7e4d33aaac685af01f6e02a51694d74f5b5bb3edb3fd4b6c7c4a05f16e0c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ef73c2ddaa4a35c0c7372c9103c099b497432522057614e307b1e986aa1b718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef73c2ddaa4a35c0c7372c9103c099b497432522057614e307b1e986aa1b718->enter($__internal_5ef73c2ddaa4a35c0c7372c9103c099b497432522057614e307b1e986aa1b718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des livres";
        
        $__internal_5ef73c2ddaa4a35c0c7372c9103c099b497432522057614e307b1e986aa1b718->leave($__internal_5ef73c2ddaa4a35c0c7372c9103c099b497432522057614e307b1e986aa1b718_prof);

        
        $__internal_8d7e4d33aaac685af01f6e02a51694d74f5b5bb3edb3fd4b6c7c4a05f16e0c38->leave($__internal_8d7e4d33aaac685af01f6e02a51694d74f5b5bb3edb3fd4b6c7c4a05f16e0c38_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_75da4036a0331c25e658cb37cd7d42a35778e6903abfecac2c1318883fd5551f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75da4036a0331c25e658cb37cd7d42a35778e6903abfecac2c1318883fd5551f->enter($__internal_75da4036a0331c25e658cb37cd7d42a35778e6903abfecac2c1318883fd5551f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2454b864add88a19a1b88e54ac17e348c81d2a74aa02136fbc0c1ead7610072f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2454b864add88a19a1b88e54ac17e348c81d2a74aa02136fbc0c1ead7610072f->enter($__internal_2454b864add88a19a1b88e54ac17e348c81d2a74aa02136fbc0c1ead7610072f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre"))), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres"))), "html", null, true);
        echo ")</h1>

    <ul class=\"liste\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) ? $context["livres"] : $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 11
            echo "            <li>
                <h2><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_livre", array("id" => $this->getAttribute($context["livre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "titre", array()), "html", null, true);
            echo "</a></h2>
                ";
            // line 13
            if (($this->getAttribute($context["livre"], "auteur", array()) == "J. K. Rowling")) {
                // line 14
                echo "                    <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "auteur", array()), "html", null, true);
                echo "</strong>
                ";
            } else {
                // line 16
                echo "                    <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "auteur", array()), "html", null, true);
                echo "</span>
                ";
            }
            // line 18
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
";
        
        $__internal_2454b864add88a19a1b88e54ac17e348c81d2a74aa02136fbc0c1ead7610072f->leave($__internal_2454b864add88a19a1b88e54ac17e348c81d2a74aa02136fbc0c1ead7610072f_prof);

        
        $__internal_75da4036a0331c25e658cb37cd7d42a35778e6903abfecac2c1318883fd5551f->leave($__internal_75da4036a0331c25e658cb37cd7d42a35778e6903abfecac2c1318883fd5551f_prof);

    }

    public function getTemplateName()
    {
        return "DevschoolBiblioBundle:Livre:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 20,  104 => 18,  98 => 16,  92 => 14,  90 => 13,  84 => 12,  81 => 11,  77 => 10,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src\\Devschool\\BiblioBundle\\Resources\\views\\Livre\\list.html.twig #}
{% extends 'DevschoolBiblioBundle::layout.html.twig' %}

{% block title %}Liste des livres{% endblock %}

{% block body %}
    <h1>{{ titre|upper }} ({{ livres|length }})</h1>

    <ul class=\"liste\">
        {% for livre in livres %}
            <li>
                <h2><a href=\"{{ path('page_livre', {'id': livre.id}) }}\">{{ livre.titre }}</a></h2>
                {% if livre.auteur == \"J. K. Rowling\" %}
                    <strong>{{ livre.auteur }}</strong>
                {% else %}
                    <span>{{ livre.auteur }}</span>
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}", "DevschoolBiblioBundle:Livre:list.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Devschool/BiblioBundle/Resources/views/Livre/list.html.twig");
    }
}
