<?php

/* DevschoolBiblioBundle:Default:index.html.twig */
class __TwigTemplate_9500096ad4cc5f28c9ab90d9a99a019b688ee49065504e9efa160f3d2a21f00e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevschoolBiblioBundle::layout.html.twig", "DevschoolBiblioBundle:Default:index.html.twig", 1);
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
        $__internal_4d4fffabceea55cfd5b84ac8ae078fc2cd807b0a030bbbea7eb32043a92d608b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4fffabceea55cfd5b84ac8ae078fc2cd807b0a030bbbea7eb32043a92d608b->enter($__internal_4d4fffabceea55cfd5b84ac8ae078fc2cd807b0a030bbbea7eb32043a92d608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolBiblioBundle:Default:index.html.twig"));

        $__internal_ca74ac291e4f279c128f4b8927645869e27af6b2ca6d910391d555eb190e9b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca74ac291e4f279c128f4b8927645869e27af6b2ca6d910391d555eb190e9b91->enter($__internal_ca74ac291e4f279c128f4b8927645869e27af6b2ca6d910391d555eb190e9b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolBiblioBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d4fffabceea55cfd5b84ac8ae078fc2cd807b0a030bbbea7eb32043a92d608b->leave($__internal_4d4fffabceea55cfd5b84ac8ae078fc2cd807b0a030bbbea7eb32043a92d608b_prof);

        
        $__internal_ca74ac291e4f279c128f4b8927645869e27af6b2ca6d910391d555eb190e9b91->leave($__internal_ca74ac291e4f279c128f4b8927645869e27af6b2ca6d910391d555eb190e9b91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58a21c7900e8cb922827f4b286e533bb7d09d352315864707d778363effe1618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a21c7900e8cb922827f4b286e533bb7d09d352315864707d778363effe1618->enter($__internal_58a21c7900e8cb922827f4b286e533bb7d09d352315864707d778363effe1618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f748ec89641df3aa28eee1842b5083843092209c7eea6a540aba2c5aae1a86f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f748ec89641df3aa28eee1842b5083843092209c7eea6a540aba2c5aae1a86f6->enter($__internal_f748ec89641df3aa28eee1842b5083843092209c7eea6a540aba2c5aae1a86f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_f748ec89641df3aa28eee1842b5083843092209c7eea6a540aba2c5aae1a86f6->leave($__internal_f748ec89641df3aa28eee1842b5083843092209c7eea6a540aba2c5aae1a86f6_prof);

        
        $__internal_58a21c7900e8cb922827f4b286e533bb7d09d352315864707d778363effe1618->leave($__internal_58a21c7900e8cb922827f4b286e533bb7d09d352315864707d778363effe1618_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8ec1db201eaa431a2a8fec73e583be27dc4f468e8f96265ba410c81acf6f279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ec1db201eaa431a2a8fec73e583be27dc4f468e8f96265ba410c81acf6f279->enter($__internal_d8ec1db201eaa431a2a8fec73e583be27dc4f468e8f96265ba410c81acf6f279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_445eb78810893715ba6a46fe60d60427406055993c48c8e675d0c54bdaf7c60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445eb78810893715ba6a46fe60d60427406055993c48c8e675d0c54bdaf7c60c->enter($__internal_445eb78810893715ba6a46fe60d60427406055993c48c8e675d0c54bdaf7c60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <p>Bienvenue sur le site Devschool Symfony</p>
";
        
        $__internal_445eb78810893715ba6a46fe60d60427406055993c48c8e675d0c54bdaf7c60c->leave($__internal_445eb78810893715ba6a46fe60d60427406055993c48c8e675d0c54bdaf7c60c_prof);

        
        $__internal_d8ec1db201eaa431a2a8fec73e583be27dc4f468e8f96265ba410c81acf6f279->leave($__internal_d8ec1db201eaa431a2a8fec73e583be27dc4f468e8f96265ba410c81acf6f279_prof);

    }

    public function getTemplateName()
    {
        return "DevschoolBiblioBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'DevschoolBiblioBundle::layout.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <p>Bienvenue sur le site Devschool Symfony</p>
{% endblock %}
", "DevschoolBiblioBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Devschool/BiblioBundle/Resources/views/Default/index.html.twig");
    }
}
