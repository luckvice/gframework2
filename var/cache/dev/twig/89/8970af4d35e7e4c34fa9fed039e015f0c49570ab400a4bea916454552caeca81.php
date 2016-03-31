<?php

/* adminBundle:Default:index.html.twig */
class __TwigTemplate_7611a5ff8ee41c0763e252bb7e33866822678df67c5ae4abe82f6cf2aee37e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "adminBundle:Default:index.html.twig", 2);
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
        $__internal_5ec23704e0370a3211eed77cb1874ca8a266c999d9c0f507a41fe7482149588f = $this->env->getExtension("native_profiler");
        $__internal_5ec23704e0370a3211eed77cb1874ca8a266c999d9c0f507a41fe7482149588f->enter($__internal_5ec23704e0370a3211eed77cb1874ca8a266c999d9c0f507a41fe7482149588f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec23704e0370a3211eed77cb1874ca8a266c999d9c0f507a41fe7482149588f->leave($__internal_5ec23704e0370a3211eed77cb1874ca8a266c999d9c0f507a41fe7482149588f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_30222d5889ccba8b01e27d1eed6ba8c41003fbb2a72626ddf3b0750dd277bc0c = $this->env->getExtension("native_profiler");
        $__internal_30222d5889ccba8b01e27d1eed6ba8c41003fbb2a72626ddf3b0750dd277bc0c->enter($__internal_30222d5889ccba8b01e27d1eed6ba8c41003fbb2a72626ddf3b0750dd277bc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
    
Testes
";
        // line 8
        $this->loadTemplate("adminBundle:sidebar:teste.html.twig", "adminBundle:Default:index.html.twig", 8)->display($context);
        
        $__internal_30222d5889ccba8b01e27d1eed6ba8c41003fbb2a72626ddf3b0750dd277bc0c->leave($__internal_30222d5889ccba8b01e27d1eed6ba8c41003fbb2a72626ddf3b0750dd277bc0c_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     */
/*     */
/* Testes*/
/* {% include  "adminBundle:sidebar:teste.html.twig" %}*/
/* {%endblock%}*/
/* */
/* */
