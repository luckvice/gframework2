<?php

/* adminBundle:noticias:new.html.twig */
class __TwigTemplate_883af8ae89f036c2aec1d0dc1e899028566a8d2e21457a53ea926f4c6288c6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adminBundle:noticias:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d224f885e9399baf9808aa3d1d74c08bf2abeaf5329dbcd13e85da07b690ffb6 = $this->env->getExtension("native_profiler");
        $__internal_d224f885e9399baf9808aa3d1d74c08bf2abeaf5329dbcd13e85da07b690ffb6->enter($__internal_d224f885e9399baf9808aa3d1d74c08bf2abeaf5329dbcd13e85da07b690ffb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:noticias:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d224f885e9399baf9808aa3d1d74c08bf2abeaf5329dbcd13e85da07b690ffb6->leave($__internal_d224f885e9399baf9808aa3d1d74c08bf2abeaf5329dbcd13e85da07b690ffb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db1904fe3c825155d5cf6b286bcdfc4323ec06948d954713cb2c6715fb730e49 = $this->env->getExtension("native_profiler");
        $__internal_db1904fe3c825155d5cf6b286bcdfc4323ec06948d954713cb2c6715fb730e49->enter($__internal_db1904fe3c825155d5cf6b286bcdfc4323ec06948d954713cb2c6715fb730e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>noticias creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("noticias_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_db1904fe3c825155d5cf6b286bcdfc4323ec06948d954713cb2c6715fb730e49->leave($__internal_db1904fe3c825155d5cf6b286bcdfc4323ec06948d954713cb2c6715fb730e49_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle:noticias:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>noticias creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('noticias_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
