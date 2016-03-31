<?php

/* noticias/index.html.twig */
class __TwigTemplate_edcd6819a9ab0f668b178a2a169e011ffc6a62029fccd205f0dfe8977fbd5fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "noticias/index.html.twig", 1);
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
        $__internal_6601db8d4f568672f2011f4f56ba5b4bbd32781be6b9e1a5de95cc69bccaf1ae = $this->env->getExtension("native_profiler");
        $__internal_6601db8d4f568672f2011f4f56ba5b4bbd32781be6b9e1a5de95cc69bccaf1ae->enter($__internal_6601db8d4f568672f2011f4f56ba5b4bbd32781be6b9e1a5de95cc69bccaf1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "noticias/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6601db8d4f568672f2011f4f56ba5b4bbd32781be6b9e1a5de95cc69bccaf1ae->leave($__internal_6601db8d4f568672f2011f4f56ba5b4bbd32781be6b9e1a5de95cc69bccaf1ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60d3b20b108e04867cfa730c76e5f053d3b1283f8f07c553c7ce127dc0049a2a = $this->env->getExtension("native_profiler");
        $__internal_60d3b20b108e04867cfa730c76e5f053d3b1283f8f07c553c7ce127dc0049a2a->enter($__internal_60d3b20b108e04867cfa730c76e5f053d3b1283f8f07c553c7ce127dc0049a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>noticias list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Conteudo</th>
                <th>Data</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : $this->getContext($context, "noticias")));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_show", array("id" => $this->getAttribute($context["noticia"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "conteudo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["noticia"], "data", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["noticia"], "data", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_show", array("id" => $this->getAttribute($context["noticia"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_edit", array("id" => $this->getAttribute($context["noticia"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("noticias_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_60d3b20b108e04867cfa730c76e5f053d3b1283f8f07c553c7ce127dc0049a2a->leave($__internal_60d3b20b108e04867cfa730c76e5f053d3b1283f8f07c553c7ce127dc0049a2a_prof);

    }

    public function getTemplateName()
    {
        return "noticias/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>noticias list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titulo</th>*/
/*                 <th>Conteudo</th>*/
/*                 <th>Data</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for noticia in noticias %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('noticias_show', { 'id': noticia.id }) }}">{{ noticia.id }}</a></td>*/
/*                 <td>{{ noticia.titulo }}</td>*/
/*                 <td>{{ noticia.conteudo }}</td>*/
/*                 <td>{% if noticia.data %}{{ noticia.data|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('noticias_show', { 'id': noticia.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('noticias_edit', { 'id': noticia.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('noticias_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
