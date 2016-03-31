<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6b4a2f2914a3ec51b388b8cc97ee114358007eea61cd8b47399207a0191345f5 extends Twig_Template
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
        $__internal_6f3bbd997a064491c49199ef12cabfd453534ca1fca33f9de66b7e9cc90809bb = $this->env->getExtension("native_profiler");
        $__internal_6f3bbd997a064491c49199ef12cabfd453534ca1fca33f9de66b7e9cc90809bb->enter($__internal_6f3bbd997a064491c49199ef12cabfd453534ca1fca33f9de66b7e9cc90809bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f3bbd997a064491c49199ef12cabfd453534ca1fca33f9de66b7e9cc90809bb->leave($__internal_6f3bbd997a064491c49199ef12cabfd453534ca1fca33f9de66b7e9cc90809bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_243486452106ba40ee0b44809c8fbe6893aab3be56b1e693067d4644739d9e2b = $this->env->getExtension("native_profiler");
        $__internal_243486452106ba40ee0b44809c8fbe6893aab3be56b1e693067d4644739d9e2b->enter($__internal_243486452106ba40ee0b44809c8fbe6893aab3be56b1e693067d4644739d9e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_243486452106ba40ee0b44809c8fbe6893aab3be56b1e693067d4644739d9e2b->leave($__internal_243486452106ba40ee0b44809c8fbe6893aab3be56b1e693067d4644739d9e2b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f865cef3c54e718313cd12833c79c2a41553902011ec6abca11cc94f2fa807c = $this->env->getExtension("native_profiler");
        $__internal_7f865cef3c54e718313cd12833c79c2a41553902011ec6abca11cc94f2fa807c->enter($__internal_7f865cef3c54e718313cd12833c79c2a41553902011ec6abca11cc94f2fa807c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7f865cef3c54e718313cd12833c79c2a41553902011ec6abca11cc94f2fa807c->leave($__internal_7f865cef3c54e718313cd12833c79c2a41553902011ec6abca11cc94f2fa807c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2bb51f8f760bfd44cbd23ddf240c0b2e655ed218af35b87a7f9ccdcbce568af = $this->env->getExtension("native_profiler");
        $__internal_a2bb51f8f760bfd44cbd23ddf240c0b2e655ed218af35b87a7f9ccdcbce568af->enter($__internal_a2bb51f8f760bfd44cbd23ddf240c0b2e655ed218af35b87a7f9ccdcbce568af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a2bb51f8f760bfd44cbd23ddf240c0b2e655ed218af35b87a7f9ccdcbce568af->leave($__internal_a2bb51f8f760bfd44cbd23ddf240c0b2e655ed218af35b87a7f9ccdcbce568af_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
