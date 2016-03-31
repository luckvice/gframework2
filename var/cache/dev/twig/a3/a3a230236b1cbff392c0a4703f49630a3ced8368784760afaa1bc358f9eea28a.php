<?php

/* adminBundle:pages:form.html.twig */
class __TwigTemplate_04ffcecf247bc323e82b99a38658b32a0b0e950e7612460b9a852f37cdbd0816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "adminBundle:pages:form.html.twig", 2);
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
        $__internal_5ce802438ad9feaa0d96b43a0654010f466e837d00321ea1627e6d8d8e639008 = $this->env->getExtension("native_profiler");
        $__internal_5ce802438ad9feaa0d96b43a0654010f466e837d00321ea1627e6d8d8e639008->enter($__internal_5ce802438ad9feaa0d96b43a0654010f466e837d00321ea1627e6d8d8e639008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:pages:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ce802438ad9feaa0d96b43a0654010f466e837d00321ea1627e6d8d8e639008->leave($__internal_5ce802438ad9feaa0d96b43a0654010f466e837d00321ea1627e6d8d8e639008_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bb394ac10cbb4c1140d8ebe83bce433958204eaf8f19d363d17e6c2127c2d0a = $this->env->getExtension("native_profiler");
        $__internal_3bb394ac10cbb4c1140d8ebe83bce433958204eaf8f19d363d17e6c2127c2d0a->enter($__internal_3bb394ac10cbb4c1140d8ebe83bce433958204eaf8f19d363d17e6c2127c2d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    
    ";
        // line 6
        $this->loadTemplate("adminBundle:sidebar:sidebar.html.twig", "adminBundle:pages:form.html.twig", 6)->display($context);
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
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Cadastro</a></li>
            <li class=\"active\">Painel de Controle</li>
          </ol>
        </section>
        Form1
          </div>
";
        // line 22
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "PATH_INFO"), "method"));
        echo "
";
        
        $__internal_3bb394ac10cbb4c1140d8ebe83bce433958204eaf8f19d363d17e6c2127c2d0a->leave($__internal_3bb394ac10cbb4c1140d8ebe83bce433958204eaf8f19d363d17e6c2127c2d0a_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle:pages:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  45 => 7,  43 => 6,  34 => 4,  11 => 2,);
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
/*             <li><a href="#"><i class="fa fa-dashboard"></i> Cadastro</a></li>*/
/*             <li class="active">Painel de Controle</li>*/
/*           </ol>*/
/*         </section>*/
/*         Form1*/
/*           </div>*/
/* {{ dump(app.request.server.get('PATH_INFO')) }}*/
/* {%endblock%}*/
/* */
/* */
