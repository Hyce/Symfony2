<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_887dcbe8937bb10f6829e990987366ef77824016204fcf282235bf9f9c764d71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff495f76a339b134b9f917b85aa01674dbaa8f719f4d587824b66573b84acb7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff495f76a339b134b9f917b85aa01674dbaa8f719f4d587824b66573b84acb7c->enter($__internal_ff495f76a339b134b9f917b85aa01674dbaa8f719f4d587824b66573b84acb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0de94c8073d30ff12e203efb3b1eddde0e981c4096c2c9801e6b73b60340f13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de94c8073d30ff12e203efb3b1eddde0e981c4096c2c9801e6b73b60340f13c->enter($__internal_0de94c8073d30ff12e203efb3b1eddde0e981c4096c2c9801e6b73b60340f13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff495f76a339b134b9f917b85aa01674dbaa8f719f4d587824b66573b84acb7c->leave($__internal_ff495f76a339b134b9f917b85aa01674dbaa8f719f4d587824b66573b84acb7c_prof);

        
        $__internal_0de94c8073d30ff12e203efb3b1eddde0e981c4096c2c9801e6b73b60340f13c->leave($__internal_0de94c8073d30ff12e203efb3b1eddde0e981c4096c2c9801e6b73b60340f13c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0c87ecf856562fc059ab4358cd83b15b49247353bdf8dda023ea0794af4f590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c87ecf856562fc059ab4358cd83b15b49247353bdf8dda023ea0794af4f590->enter($__internal_b0c87ecf856562fc059ab4358cd83b15b49247353bdf8dda023ea0794af4f590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca450987eadaf434aff274faddf8ec73aa234f8b9dd7685fdf7ad8017aa613e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca450987eadaf434aff274faddf8ec73aa234f8b9dd7685fdf7ad8017aa613e4->enter($__internal_ca450987eadaf434aff274faddf8ec73aa234f8b9dd7685fdf7ad8017aa613e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ca450987eadaf434aff274faddf8ec73aa234f8b9dd7685fdf7ad8017aa613e4->leave($__internal_ca450987eadaf434aff274faddf8ec73aa234f8b9dd7685fdf7ad8017aa613e4_prof);

        
        $__internal_b0c87ecf856562fc059ab4358cd83b15b49247353bdf8dda023ea0794af4f590->leave($__internal_b0c87ecf856562fc059ab4358cd83b15b49247353bdf8dda023ea0794af4f590_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbb713825d8ce5d2d85d6779b0a663deafa910da6e9afdb4df17edac1b4537a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb713825d8ce5d2d85d6779b0a663deafa910da6e9afdb4df17edac1b4537a9->enter($__internal_dbb713825d8ce5d2d85d6779b0a663deafa910da6e9afdb4df17edac1b4537a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9be3cd2c29195fc517b89bf65b1807551a53b399f7a36dd588c1cb0ccfc97b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be3cd2c29195fc517b89bf65b1807551a53b399f7a36dd588c1cb0ccfc97b06->enter($__internal_9be3cd2c29195fc517b89bf65b1807551a53b399f7a36dd588c1cb0ccfc97b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9be3cd2c29195fc517b89bf65b1807551a53b399f7a36dd588c1cb0ccfc97b06->leave($__internal_9be3cd2c29195fc517b89bf65b1807551a53b399f7a36dd588c1cb0ccfc97b06_prof);

        
        $__internal_dbb713825d8ce5d2d85d6779b0a663deafa910da6e9afdb4df17edac1b4537a9->leave($__internal_dbb713825d8ce5d2d85d6779b0a663deafa910da6e9afdb4df17edac1b4537a9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed4ae4d983212f197a76417a2261eb3c5c1c983fb8d4e96c180114c83ffbcab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4ae4d983212f197a76417a2261eb3c5c1c983fb8d4e96c180114c83ffbcab6->enter($__internal_ed4ae4d983212f197a76417a2261eb3c5c1c983fb8d4e96c180114c83ffbcab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5aaefc8e462cef4ccf6017f95c008665b327d29fa3583c97606c802e908f0dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aaefc8e462cef4ccf6017f95c008665b327d29fa3583c97606c802e908f0dd0->enter($__internal_5aaefc8e462cef4ccf6017f95c008665b327d29fa3583c97606c802e908f0dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5aaefc8e462cef4ccf6017f95c008665b327d29fa3583c97606c802e908f0dd0->leave($__internal_5aaefc8e462cef4ccf6017f95c008665b327d29fa3583c97606c802e908f0dd0_prof);

        
        $__internal_ed4ae4d983212f197a76417a2261eb3c5c1c983fb8d4e96c180114c83ffbcab6->leave($__internal_ed4ae4d983212f197a76417a2261eb3c5c1c983fb8d4e96c180114c83ffbcab6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
