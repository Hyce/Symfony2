<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_91de4eb4df75090f6b7d5c4b5ab43030bd05b670ca2c5dff399c901c6a887ee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bad167aa9970fdb2d7acd6fe2d8fa4a62265824ce88688e8d8e1f846f37c148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bad167aa9970fdb2d7acd6fe2d8fa4a62265824ce88688e8d8e1f846f37c148->enter($__internal_6bad167aa9970fdb2d7acd6fe2d8fa4a62265824ce88688e8d8e1f846f37c148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_51dea39a1e18e11a04759e9b1d67b9bf858d2479726d41b5e22f06fc22c27fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dea39a1e18e11a04759e9b1d67b9bf858d2479726d41b5e22f06fc22c27fb5->enter($__internal_51dea39a1e18e11a04759e9b1d67b9bf858d2479726d41b5e22f06fc22c27fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bad167aa9970fdb2d7acd6fe2d8fa4a62265824ce88688e8d8e1f846f37c148->leave($__internal_6bad167aa9970fdb2d7acd6fe2d8fa4a62265824ce88688e8d8e1f846f37c148_prof);

        
        $__internal_51dea39a1e18e11a04759e9b1d67b9bf858d2479726d41b5e22f06fc22c27fb5->leave($__internal_51dea39a1e18e11a04759e9b1d67b9bf858d2479726d41b5e22f06fc22c27fb5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_abc32ba2fcfb268be63fa42ddc81b024725a742aa25ea4889831f570d7d54424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc32ba2fcfb268be63fa42ddc81b024725a742aa25ea4889831f570d7d54424->enter($__internal_abc32ba2fcfb268be63fa42ddc81b024725a742aa25ea4889831f570d7d54424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bd7a6ce48d26d8c345dd2e83f89be44a7d84441789cdac9241b46d9453a6997b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7a6ce48d26d8c345dd2e83f89be44a7d84441789cdac9241b46d9453a6997b->enter($__internal_bd7a6ce48d26d8c345dd2e83f89be44a7d84441789cdac9241b46d9453a6997b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bd7a6ce48d26d8c345dd2e83f89be44a7d84441789cdac9241b46d9453a6997b->leave($__internal_bd7a6ce48d26d8c345dd2e83f89be44a7d84441789cdac9241b46d9453a6997b_prof);

        
        $__internal_abc32ba2fcfb268be63fa42ddc81b024725a742aa25ea4889831f570d7d54424->leave($__internal_abc32ba2fcfb268be63fa42ddc81b024725a742aa25ea4889831f570d7d54424_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/Symfony2/mon_projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
