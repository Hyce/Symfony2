<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_d4655d1c55f11c072405c9ea5ef4e4cb474332d54d20404c97ef2649826243dd extends Twig_Template
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
        $__internal_d0eb90660a93bf382f65e6c4a6cfb05853289c256f9a9688cef55dc1eaf2ac7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0eb90660a93bf382f65e6c4a6cfb05853289c256f9a9688cef55dc1eaf2ac7b->enter($__internal_d0eb90660a93bf382f65e6c4a6cfb05853289c256f9a9688cef55dc1eaf2ac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_d15469e2fdf9a3114d0d3362461dbebaad9b48b3e10c617f32eb784340cc267d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15469e2fdf9a3114d0d3362461dbebaad9b48b3e10c617f32eb784340cc267d->enter($__internal_d15469e2fdf9a3114d0d3362461dbebaad9b48b3e10c617f32eb784340cc267d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d0eb90660a93bf382f65e6c4a6cfb05853289c256f9a9688cef55dc1eaf2ac7b->leave($__internal_d0eb90660a93bf382f65e6c4a6cfb05853289c256f9a9688cef55dc1eaf2ac7b_prof);

        
        $__internal_d15469e2fdf9a3114d0d3362461dbebaad9b48b3e10c617f32eb784340cc267d->leave($__internal_d15469e2fdf9a3114d0d3362461dbebaad9b48b3e10c617f32eb784340cc267d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
