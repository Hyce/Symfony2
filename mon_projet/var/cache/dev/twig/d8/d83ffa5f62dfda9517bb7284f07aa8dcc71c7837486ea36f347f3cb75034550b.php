<?php

/* DevFilmBundle::layout.html.twig */
class __TwigTemplate_6c861bb0769a3c6fee81b53d87e82ed4c49c99ed9bb2087c8fb0e8eb7d511e2b extends Twig_Template
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
        $__internal_daef68061ab5efded8486f1da5e4f120f1aee96e028b92d656d7fa55679e7895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daef68061ab5efded8486f1da5e4f120f1aee96e028b92d656d7fa55679e7895->enter($__internal_daef68061ab5efded8486f1da5e4f120f1aee96e028b92d656d7fa55679e7895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle::layout.html.twig"));

        $__internal_98d9b962086624b9065efa3a6d87bc224e90baabccaf5f7c863288c4efb1c4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d9b962086624b9065efa3a6d87bc224e90baabccaf5f7c863288c4efb1c4dc->enter($__internal_98d9b962086624b9065efa3a6d87bc224e90baabccaf5f7c863288c4efb1c4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
</head>
<body>
<ul class=\"menu\">
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_accueil");
        echo "\">Accueil</a></li>
    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_films");
        echo "\">Films</a></li>
</ul>

<div id=\"content\">
    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "</div>
</body>
</html>";
        
        $__internal_daef68061ab5efded8486f1da5e4f120f1aee96e028b92d656d7fa55679e7895->leave($__internal_daef68061ab5efded8486f1da5e4f120f1aee96e028b92d656d7fa55679e7895_prof);

        
        $__internal_98d9b962086624b9065efa3a6d87bc224e90baabccaf5f7c863288c4efb1c4dc->leave($__internal_98d9b962086624b9065efa3a6d87bc224e90baabccaf5f7c863288c4efb1c4dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6403d0c7e8ec62f9c8b808a6296833cd6d6f3ec23d5bc09bbdc593fd1b9ebde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6403d0c7e8ec62f9c8b808a6296833cd6d6f3ec23d5bc09bbdc593fd1b9ebde->enter($__internal_c6403d0c7e8ec62f9c8b808a6296833cd6d6f3ec23d5bc09bbdc593fd1b9ebde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_769f33ffb55be7fd908f241ff90323d63e9df8a70a9e85a6be0b651664d1fd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769f33ffb55be7fd908f241ff90323d63e9df8a70a9e85a6be0b651664d1fd9a->enter($__internal_769f33ffb55be7fd908f241ff90323d63e9df8a70a9e85a6be0b651664d1fd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dev Filmothèque";
        
        $__internal_769f33ffb55be7fd908f241ff90323d63e9df8a70a9e85a6be0b651664d1fd9a->leave($__internal_769f33ffb55be7fd908f241ff90323d63e9df8a70a9e85a6be0b651664d1fd9a_prof);

        
        $__internal_c6403d0c7e8ec62f9c8b808a6296833cd6d6f3ec23d5bc09bbdc593fd1b9ebde->leave($__internal_c6403d0c7e8ec62f9c8b808a6296833cd6d6f3ec23d5bc09bbdc593fd1b9ebde_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_61bf287abe4f09d0a45e0d249a72d0b883772bef9a87f8b8340a12e414eb74ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61bf287abe4f09d0a45e0d249a72d0b883772bef9a87f8b8340a12e414eb74ef->enter($__internal_61bf287abe4f09d0a45e0d249a72d0b883772bef9a87f8b8340a12e414eb74ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43e080830e977355ecb05b0d05ee5b7da52669c8fb9a045030cfa07275653bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e080830e977355ecb05b0d05ee5b7da52669c8fb9a045030cfa07275653bb1->enter($__internal_43e080830e977355ecb05b0d05ee5b7da52669c8fb9a045030cfa07275653bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_43e080830e977355ecb05b0d05ee5b7da52669c8fb9a045030cfa07275653bb1->leave($__internal_43e080830e977355ecb05b0d05ee5b7da52669c8fb9a045030cfa07275653bb1_prof);

        
        $__internal_61bf287abe4f09d0a45e0d249a72d0b883772bef9a87f8b8340a12e414eb74ef->leave($__internal_61bf287abe4f09d0a45e0d249a72d0b883772bef9a87f8b8340a12e414eb74ef_prof);

    }

    public function getTemplateName()
    {
        return "DevFilmBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  69 => 5,  57 => 16,  55 => 15,  48 => 11,  44 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Dev Filmothèque{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
</head>
<body>
<ul class=\"menu\">
    <li><a href=\"{{ path('page_accueil') }}\">Accueil</a></li>
    <li><a href=\"{{ path('page_films') }}\">Films</a></li>
</ul>

<div id=\"content\">
    {% block body %}{% endblock %}
</div>
</body>
</html>", "DevFilmBundle::layout.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Dev/FilmBundle/Resources/views/layout.html.twig");
    }
}
