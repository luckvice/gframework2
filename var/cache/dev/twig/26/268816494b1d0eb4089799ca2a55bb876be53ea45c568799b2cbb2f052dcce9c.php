<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b6860d978701ef0c6db73d0b79145481c958d34a07079abe1479ce933b9abd6a extends Twig_Template
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
        $__internal_cf9e49cf54f0dc1d4b9b8c96244530a02fbdd113091a17ee30033ae8638a6e0b = $this->env->getExtension("native_profiler");
        $__internal_cf9e49cf54f0dc1d4b9b8c96244530a02fbdd113091a17ee30033ae8638a6e0b->enter($__internal_cf9e49cf54f0dc1d4b9b8c96244530a02fbdd113091a17ee30033ae8638a6e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf9e49cf54f0dc1d4b9b8c96244530a02fbdd113091a17ee30033ae8638a6e0b->leave($__internal_cf9e49cf54f0dc1d4b9b8c96244530a02fbdd113091a17ee30033ae8638a6e0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21d6339d25d56f5efc88d7e3c918ef432efda4278e15b2a6c788f41ecd689f2c = $this->env->getExtension("native_profiler");
        $__internal_21d6339d25d56f5efc88d7e3c918ef432efda4278e15b2a6c788f41ecd689f2c->enter($__internal_21d6339d25d56f5efc88d7e3c918ef432efda4278e15b2a6c788f41ecd689f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_21d6339d25d56f5efc88d7e3c918ef432efda4278e15b2a6c788f41ecd689f2c->leave($__internal_21d6339d25d56f5efc88d7e3c918ef432efda4278e15b2a6c788f41ecd689f2c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c7dd88ac83367f8b9d400b49fc5298c21c42221fe651e03858d44e54b091929 = $this->env->getExtension("native_profiler");
        $__internal_9c7dd88ac83367f8b9d400b49fc5298c21c42221fe651e03858d44e54b091929->enter($__internal_9c7dd88ac83367f8b9d400b49fc5298c21c42221fe651e03858d44e54b091929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9c7dd88ac83367f8b9d400b49fc5298c21c42221fe651e03858d44e54b091929->leave($__internal_9c7dd88ac83367f8b9d400b49fc5298c21c42221fe651e03858d44e54b091929_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a62fa071ce2b7b92fa7fc2d1493a964a3305e360ab47f79baac2ed3e39d5ba5 = $this->env->getExtension("native_profiler");
        $__internal_6a62fa071ce2b7b92fa7fc2d1493a964a3305e360ab47f79baac2ed3e39d5ba5->enter($__internal_6a62fa071ce2b7b92fa7fc2d1493a964a3305e360ab47f79baac2ed3e39d5ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6a62fa071ce2b7b92fa7fc2d1493a964a3305e360ab47f79baac2ed3e39d5ba5->leave($__internal_6a62fa071ce2b7b92fa7fc2d1493a964a3305e360ab47f79baac2ed3e39d5ba5_prof);

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
