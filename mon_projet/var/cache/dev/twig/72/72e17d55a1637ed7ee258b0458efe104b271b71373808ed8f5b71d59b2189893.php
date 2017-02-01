<?php

/* DevschoolAdminBundle::layout.html.twig */
class __TwigTemplate_3b5c8fe490c908d5990b7416306a00e553f6a727da21189b26594b0ff36e94c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de29b6f759b06d54b56bf7e1c7acea4d3b443c073dca87f8fbfed24d1253faaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de29b6f759b06d54b56bf7e1c7acea4d3b443c073dca87f8fbfed24d1253faaf->enter($__internal_de29b6f759b06d54b56bf7e1c7acea4d3b443c073dca87f8fbfed24d1253faaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle::layout.html.twig"));

        $__internal_bb601779dd8cc67f2b9677cdd5165b17570a2f4591a287ee775ba9b7a7984a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb601779dd8cc67f2b9677cdd5165b17570a2f4591a287ee775ba9b7a7984a33->enter($__internal_bb601779dd8cc67f2b9677cdd5165b17570a2f4591a287ee775ba9b7a7984a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevschoolAdminBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <style>
        body {margin:0;}

        ul.menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }

        ul.menu li {
            float: left;
        }

        ul.menu li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.menu li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }

        div.content { padding:20px; margin-top:30px; }
    </style>
    <title>Admin</title>
</head>
<body>

<ul class=\"menu\">
    <li><a";
        // line 45
        if (twig_in_filter("livre", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo " href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_livre_liste");
        echo "\">Livres</a></li>
    <li><a";
        // line 46
        if (twig_in_filter("genre", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo " href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_liste");
        echo "\">Genres</a></li>
    <li><a";
        // line 47
        if (twig_in_filter("page_accueil", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo " class=\"active\"";
        }
        echo " href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_accueil");
        echo "\">Retour au site</a></li>
</ul>

<div class=\"content\">
    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "</div>

</body>
</html>";
        
        $__internal_de29b6f759b06d54b56bf7e1c7acea4d3b443c073dca87f8fbfed24d1253faaf->leave($__internal_de29b6f759b06d54b56bf7e1c7acea4d3b443c073dca87f8fbfed24d1253faaf_prof);

        
        $__internal_bb601779dd8cc67f2b9677cdd5165b17570a2f4591a287ee775ba9b7a7984a33->leave($__internal_bb601779dd8cc67f2b9677cdd5165b17570a2f4591a287ee775ba9b7a7984a33_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_22692da1a5f2a4e2d3d757238119dbd30891d9274c933c50db5803068944cfd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22692da1a5f2a4e2d3d757238119dbd30891d9274c933c50db5803068944cfd8->enter($__internal_22692da1a5f2a4e2d3d757238119dbd30891d9274c933c50db5803068944cfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e9e7ba286db6a62454ebab6460fc6ea04aed41d26ffb389738b3d3d5fc02933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9e7ba286db6a62454ebab6460fc6ea04aed41d26ffb389738b3d3d5fc02933->enter($__internal_2e9e7ba286db6a62454ebab6460fc6ea04aed41d26ffb389738b3d3d5fc02933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2e9e7ba286db6a62454ebab6460fc6ea04aed41d26ffb389738b3d3d5fc02933->leave($__internal_2e9e7ba286db6a62454ebab6460fc6ea04aed41d26ffb389738b3d3d5fc02933_prof);

        
        $__internal_22692da1a5f2a4e2d3d757238119dbd30891d9274c933c50db5803068944cfd8->leave($__internal_22692da1a5f2a4e2d3d757238119dbd30891d9274c933c50db5803068944cfd8_prof);

    }

    public function getTemplateName()
    {
        return "DevschoolAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 51,  101 => 52,  99 => 51,  88 => 47,  80 => 46,  72 => 45,  26 => 1,);
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
    <style>
        body {margin:0;}

        ul.menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }

        ul.menu li {
            float: left;
        }

        ul.menu li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.menu li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }

        div.content { padding:20px; margin-top:30px; }
    </style>
    <title>Admin</title>
</head>
<body>

<ul class=\"menu\">
    <li><a{% if 'livre' in app.request.attributes.get('_route')  %} class=\"active\"{% endif %} href=\"{{ path('admin_livre_liste') }}\">Livres</a></li>
    <li><a{% if 'genre' in app.request.attributes.get('_route') %} class=\"active\"{% endif %} href=\"{{ path('admin_genre_liste') }}\">Genres</a></li>
    <li><a{% if 'page_accueil' in app.request.attributes.get('_route')  %} class=\"active\"{% endif %} href=\"{{ path('page_accueil') }}\">Retour au site</a></li>
</ul>

<div class=\"content\">
    {% block body %}{% endblock %}
</div>

</body>
</html>", "DevschoolAdminBundle::layout.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Devschool/AdminBundle/Resources/views/layout.html.twig");
    }
}
