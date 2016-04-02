<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_96c025600dddc47ac624a0952b0e5facb420b389da08d409b74ad2a4c8c1bfc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e44f201e92748da7f1ba8cd9f73ba009d2e438a4c67c8fa5e29dd9ca2d1a96ff = $this->env->getExtension("native_profiler");
        $__internal_e44f201e92748da7f1ba8cd9f73ba009d2e438a4c67c8fa5e29dd9ca2d1a96ff->enter($__internal_e44f201e92748da7f1ba8cd9f73ba009d2e438a4c67c8fa5e29dd9ca2d1a96ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e44f201e92748da7f1ba8cd9f73ba009d2e438a4c67c8fa5e29dd9ca2d1a96ff->leave($__internal_e44f201e92748da7f1ba8cd9f73ba009d2e438a4c67c8fa5e29dd9ca2d1a96ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7d32e646de3a95fdbf6c7e2039d67c520058b6dc07aa634281d0f5b85274590 = $this->env->getExtension("native_profiler");
        $__internal_e7d32e646de3a95fdbf6c7e2039d67c520058b6dc07aa634281d0f5b85274590->enter($__internal_e7d32e646de3a95fdbf6c7e2039d67c520058b6dc07aa634281d0f5b85274590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e7d32e646de3a95fdbf6c7e2039d67c520058b6dc07aa634281d0f5b85274590->leave($__internal_e7d32e646de3a95fdbf6c7e2039d67c520058b6dc07aa634281d0f5b85274590_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d8c76a108d31c764dfb1d125d53b3a1664e8f747adf9789968bfd188ac30ace = $this->env->getExtension("native_profiler");
        $__internal_4d8c76a108d31c764dfb1d125d53b3a1664e8f747adf9789968bfd188ac30ace->enter($__internal_4d8c76a108d31c764dfb1d125d53b3a1664e8f747adf9789968bfd188ac30ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d8c76a108d31c764dfb1d125d53b3a1664e8f747adf9789968bfd188ac30ace->leave($__internal_4d8c76a108d31c764dfb1d125d53b3a1664e8f747adf9789968bfd188ac30ace_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_874cb6bbf53337ba1b31fbf2f5b3dd4714aece7895c50261e482b1a728e6f847 = $this->env->getExtension("native_profiler");
        $__internal_874cb6bbf53337ba1b31fbf2f5b3dd4714aece7895c50261e482b1a728e6f847->enter($__internal_874cb6bbf53337ba1b31fbf2f5b3dd4714aece7895c50261e482b1a728e6f847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_874cb6bbf53337ba1b31fbf2f5b3dd4714aece7895c50261e482b1a728e6f847->leave($__internal_874cb6bbf53337ba1b31fbf2f5b3dd4714aece7895c50261e482b1a728e6f847_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
