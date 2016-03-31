<?php

/* adminBundle:Home:index.html.twig */
class __TwigTemplate_10d1245bcb113d85cc04ef2a9536bb26233cd2fb78306962e707901acee7fb14 extends Twig_Template
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
        $__internal_99dc36ed88c3618f0be7a6dfbca5736ae0dc2db73db0dc840d6c67da2af4ddbe = $this->env->getExtension("native_profiler");
        $__internal_99dc36ed88c3618f0be7a6dfbca5736ae0dc2db73db0dc840d6c67da2af4ddbe->enter($__internal_99dc36ed88c3618f0be7a6dfbca5736ae0dc2db73db0dc840d6c67da2af4ddbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99dc36ed88c3618f0be7a6dfbca5736ae0dc2db73db0dc840d6c67da2af4ddbe->leave($__internal_99dc36ed88c3618f0be7a6dfbca5736ae0dc2db73db0dc840d6c67da2af4ddbe_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_65a256919f0687537aa92b66876c61b1fedb0639428ca3b1eeca71ded82926d2 = $this->env->getExtension("native_profiler");
        $__internal_65a256919f0687537aa92b66876c61b1fedb0639428ca3b1eeca71ded82926d2->enter($__internal_65a256919f0687537aa92b66876c61b1fedb0639428ca3b1eeca71ded82926d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_65a256919f0687537aa92b66876c61b1fedb0639428ca3b1eeca71ded82926d2->leave($__internal_65a256919f0687537aa92b66876c61b1fedb0639428ca3b1eeca71ded82926d2_prof);

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
