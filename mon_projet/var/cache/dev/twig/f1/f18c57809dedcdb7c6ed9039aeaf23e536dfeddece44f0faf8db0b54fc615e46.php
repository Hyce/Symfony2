<?php

/* DevschoolBiblioBundle::layout.html.twig */
class __TwigTemplate_18b45e2a5c013c87c80b92b565dcaecfa20333a52b0d1d61c2a124ffe051a04a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ec37d9e7a1cb962ac06143d474e900a3e81829e5420c041f7e5e47fed8fc8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec37d9e7a1cb962ac06143d474e900a3e81829e5420c041f7e5e47fed8fc8c0->enter($__internal_1ec37d9e7a1cb962ac06143d474e900a3e81829e5420c041f7e5e47fed8fc8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolBiblioBundle::layout.html.twig"));

        $__internal_7531bca3556a550b9318843e2d4bc163b138613f179f129a5fd041e1fa874b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7531bca3556a550b9318843e2d4bc163b138613f179f129a5fd041e1fa874b5e->enter($__internal_7531bca3556a550b9318843e2d4bc163b138613f179f129a5fd041e1fa874b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolBiblioBundle::layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <ul class=\"menu\">
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_accueil");
        echo "\">Accueil</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_livres");
        echo "\">Livres</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_livre_liste");
        echo "\">Admin</a></li>
        </ul>

        <div id=\"content\">
            ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        </div>
    </body>
</html>";
        
        $__internal_1ec37d9e7a1cb962ac06143d474e900a3e81829e5420c041f7e5e47fed8fc8c0->leave($__internal_1ec37d9e7a1cb962ac06143d474e900a3e81829e5420c041f7e5e47fed8fc8c0_prof);

        
        $__internal_7531bca3556a550b9318843e2d4bc163b138613f179f129a5fd041e1fa874b5e->leave($__internal_7531bca3556a550b9318843e2d4bc163b138613f179f129a5fd041e1fa874b5e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_277c9bdb73c49e11b72e2517732b3938efa9a9cdb9227aa3a3612b116e8afc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277c9bdb73c49e11b72e2517732b3938efa9a9cdb9227aa3a3612b116e8afc42->enter($__internal_277c9bdb73c49e11b72e2517732b3938efa9a9cdb9227aa3a3612b116e8afc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb9d419d67091328e361bbb526c9fda386a2056c8c4bf6b1929708c9d7d30b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9d419d67091328e361bbb526c9fda386a2056c8c4bf6b1929708c9d7d30b67->enter($__internal_cb9d419d67091328e361bbb526c9fda386a2056c8c4bf6b1929708c9d7d30b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Devschool Bibliothèque";
        
        $__internal_cb9d419d67091328e361bbb526c9fda386a2056c8c4bf6b1929708c9d7d30b67->leave($__internal_cb9d419d67091328e361bbb526c9fda386a2056c8c4bf6b1929708c9d7d30b67_prof);

        
        $__internal_277c9bdb73c49e11b72e2517732b3938efa9a9cdb9227aa3a3612b116e8afc42->leave($__internal_277c9bdb73c49e11b72e2517732b3938efa9a9cdb9227aa3a3612b116e8afc42_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_92175d9b178063e0351461c5c3d090c80553cd519a0f0f11ffe3323e68db8e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92175d9b178063e0351461c5c3d090c80553cd519a0f0f11ffe3323e68db8e5d->enter($__internal_92175d9b178063e0351461c5c3d090c80553cd519a0f0f11ffe3323e68db8e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea468e63c6cf9ddc5575d84e28cbf265d37b7d7acf8ff6522615fc87a53d282c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea468e63c6cf9ddc5575d84e28cbf265d37b7d7acf8ff6522615fc87a53d282c->enter($__internal_ea468e63c6cf9ddc5575d84e28cbf265d37b7d7acf8ff6522615fc87a53d282c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea468e63c6cf9ddc5575d84e28cbf265d37b7d7acf8ff6522615fc87a53d282c->leave($__internal_ea468e63c6cf9ddc5575d84e28cbf265d37b7d7acf8ff6522615fc87a53d282c_prof);

        
        $__internal_92175d9b178063e0351461c5c3d090c80553cd519a0f0f11ffe3323e68db8e5d->leave($__internal_92175d9b178063e0351461c5c3d090c80553cd519a0f0f11ffe3323e68db8e5d_prof);

    }

    public function getTemplateName()
    {
        return "DevschoolBiblioBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 17,  73 => 6,  61 => 18,  59 => 17,  52 => 13,  48 => 12,  44 => 11,  37 => 7,  33 => 6,  27 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src\\Devschool\\BiblioBundle\\Resources\\views\\layout.html.twig #}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Devschool Bibliothèque{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
    </head>
    <body>
        <ul class=\"menu\">
            <li><a href=\"{{ path('page_accueil') }}\">Accueil</a></li>
            <li><a href=\"{{ path('page_livres') }}\">Livres</a></li>
            <li><a href=\"{{ path('admin_livre_liste') }}\">Admin</a></li>
        </ul>

        <div id=\"content\">
            {% block body %}{% endblock %}
        </div>
    </body>
</html>", "DevschoolBiblioBundle::layout.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Devschool/BiblioBundle/Resources/views/layout.html.twig");
    }
}
