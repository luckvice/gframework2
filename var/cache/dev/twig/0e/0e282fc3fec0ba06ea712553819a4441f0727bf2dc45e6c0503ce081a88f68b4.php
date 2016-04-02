<?php

/* adminBundle:Home:index.html.twig */
class __TwigTemplate_28db83693e384d68f4a0a455a9717e68d0d7179e713d35cac165e92d0fd92c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "adminBundle:Home:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48f1c116d25169114e8b5fc18fa1f659c11d11b486fb770222ae344dc9ca31b8 = $this->env->getExtension("native_profiler");
        $__internal_48f1c116d25169114e8b5fc18fa1f659c11d11b486fb770222ae344dc9ca31b8->enter($__internal_48f1c116d25169114e8b5fc18fa1f659c11d11b486fb770222ae344dc9ca31b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48f1c116d25169114e8b5fc18fa1f659c11d11b486fb770222ae344dc9ca31b8->leave($__internal_48f1c116d25169114e8b5fc18fa1f659c11d11b486fb770222ae344dc9ca31b8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_04a85d674a2a332914d6e29acea8f8472d16b14f547e0f4a11d26072535a9eaf = $this->env->getExtension("native_profiler");
        $__internal_04a85d674a2a332914d6e29acea8f8472d16b14f547e0f4a11d26072535a9eaf->enter($__internal_04a85d674a2a332914d6e29acea8f8472d16b14f547e0f4a11d26072535a9eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    
    ";
        // line 6
        $this->loadTemplate("adminBundle:sidebar:sidebar.html.twig", "adminBundle:Home:index.html.twig", 6)->display($context);
        // line 7
        echo "    
          <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li class=\"active\">Dashboard</li>
          </ol>
        </section>
          </div>
";
        // line 21
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "PATH_INFO"), "method"));
        echo "
";
        
        $__internal_04a85d674a2a332914d6e29acea8f8472d16b14f547e0f4a11d26072535a9eaf->leave($__internal_04a85d674a2a332914d6e29acea8f8472d16b14f547e0f4a11d26072535a9eaf_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  45 => 7,  43 => 6,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %} */
/*     */
/*     {% include  "adminBundle:sidebar:sidebar.html.twig" %}*/
/*     */
/*           <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*           <h1>*/
/*             Dashboard*/
/*             <small>Control panel</small>*/
/*           </h1>*/
/*           <ol class="breadcrumb">*/
/*             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*             <li class="active">Dashboard</li>*/
/*           </ol>*/
/*         </section>*/
/*           </div>*/
/* {{ dump(app.request.server.get('PATH_INFO')) }}*/
/* {%endblock%}*/
/* */
/* */
