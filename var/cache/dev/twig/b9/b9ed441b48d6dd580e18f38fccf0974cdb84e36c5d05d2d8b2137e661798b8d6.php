<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9a83ca61aa56d04913ed9a8faac3a56a1cd54cff723184cd0a4d05e51d06192b extends Twig_Template
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
        $__internal_ce39b0fff3cc65db4ca7df9d46ce408db97dcf9e2691bac140eb92136d4fade3 = $this->env->getExtension("native_profiler");
        $__internal_ce39b0fff3cc65db4ca7df9d46ce408db97dcf9e2691bac140eb92136d4fade3->enter($__internal_ce39b0fff3cc65db4ca7df9d46ce408db97dcf9e2691bac140eb92136d4fade3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce39b0fff3cc65db4ca7df9d46ce408db97dcf9e2691bac140eb92136d4fade3->leave($__internal_ce39b0fff3cc65db4ca7df9d46ce408db97dcf9e2691bac140eb92136d4fade3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07d394561b52da73ea2753de0f5ec38615d610002dadec5baaa075bb413fbdd1 = $this->env->getExtension("native_profiler");
        $__internal_07d394561b52da73ea2753de0f5ec38615d610002dadec5baaa075bb413fbdd1->enter($__internal_07d394561b52da73ea2753de0f5ec38615d610002dadec5baaa075bb413fbdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07d394561b52da73ea2753de0f5ec38615d610002dadec5baaa075bb413fbdd1->leave($__internal_07d394561b52da73ea2753de0f5ec38615d610002dadec5baaa075bb413fbdd1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15cb6b08c0a632a7fd317be4a0974055e9a3679c3a56cd3221e36bbc5b26989f = $this->env->getExtension("native_profiler");
        $__internal_15cb6b08c0a632a7fd317be4a0974055e9a3679c3a56cd3221e36bbc5b26989f->enter($__internal_15cb6b08c0a632a7fd317be4a0974055e9a3679c3a56cd3221e36bbc5b26989f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_15cb6b08c0a632a7fd317be4a0974055e9a3679c3a56cd3221e36bbc5b26989f->leave($__internal_15cb6b08c0a632a7fd317be4a0974055e9a3679c3a56cd3221e36bbc5b26989f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_428084dd67dcd307416667d291fd9c0344639b5a063e4aa933928c01d3dd5466 = $this->env->getExtension("native_profiler");
        $__internal_428084dd67dcd307416667d291fd9c0344639b5a063e4aa933928c01d3dd5466->enter($__internal_428084dd67dcd307416667d291fd9c0344639b5a063e4aa933928c01d3dd5466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_428084dd67dcd307416667d291fd9c0344639b5a063e4aa933928c01d3dd5466->leave($__internal_428084dd67dcd307416667d291fd9c0344639b5a063e4aa933928c01d3dd5466_prof);

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
