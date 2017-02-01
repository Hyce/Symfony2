<?php

/* DevFilmBundle:Default:index.html.twig */
class __TwigTemplate_e8471af908efcfdda2307a3978833c6517260fff4a4cf320eeac3bb0687f63c3 extends Twig_Template
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
        $__internal_4f69e1ddf7cb64bd749fb2fd59f12f23bbab05bbeae6efd3005cdc998d803c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f69e1ddf7cb64bd749fb2fd59f12f23bbab05bbeae6efd3005cdc998d803c72->enter($__internal_4f69e1ddf7cb64bd749fb2fd59f12f23bbab05bbeae6efd3005cdc998d803c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle:Default:index.html.twig"));

        $__internal_90f1d7695530da461db9f781657bafc10d99d88e94f08c32a794535a605ad8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f1d7695530da461db9f781657bafc10d99d88e94f08c32a794535a605ad8e1->enter($__internal_90f1d7695530da461db9f781657bafc10d99d88e94f08c32a794535a605ad8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevFilmBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_4f69e1ddf7cb64bd749fb2fd59f12f23bbab05bbeae6efd3005cdc998d803c72->leave($__internal_4f69e1ddf7cb64bd749fb2fd59f12f23bbab05bbeae6efd3005cdc998d803c72_prof);

        
        $__internal_90f1d7695530da461db9f781657bafc10d99d88e94f08c32a794535a605ad8e1->leave($__internal_90f1d7695530da461db9f781657bafc10d99d88e94f08c32a794535a605ad8e1_prof);

    }

    public function getTemplateName()
    {
        return "DevFilmBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "DevFilmBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/src/Dev/FilmBundle/Resources/views/Default/index.html.twig");
    }
}
