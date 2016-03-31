<?php

/* adminBundle:noticias:show.html.twig */
class __TwigTemplate_f41345c3db4b67b25f6e2339d7ec517a1764c2acb93f7f95a13535354f9dc214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "adminBundle:noticias:show.html.twig", 1);
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
        $__internal_b5fea545667a87988fccf707115f3c0139a5d62f9cec31abfe2bb2c6f0ed504b = $this->env->getExtension("native_profiler");
        $__internal_b5fea545667a87988fccf707115f3c0139a5d62f9cec31abfe2bb2c6f0ed504b->enter($__internal_b5fea545667a87988fccf707115f3c0139a5d62f9cec31abfe2bb2c6f0ed504b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:noticias:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5fea545667a87988fccf707115f3c0139a5d62f9cec31abfe2bb2c6f0ed504b->leave($__internal_b5fea545667a87988fccf707115f3c0139a5d62f9cec31abfe2bb2c6f0ed504b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc179645991dadd82b1914ec6110b3c55ac753313d4bf3bae9ac734c83b6625e = $this->env->getExtension("native_profiler");
        $__internal_cc179645991dadd82b1914ec6110b3c55ac753313d4bf3bae9ac734c83b6625e->enter($__internal_cc179645991dadd82b1914ec6110b3c55ac753313d4bf3bae9ac734c83b6625e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        ";
        $this->loadTemplate("adminBundle:sidebar:sidebar.html.twig", "adminBundle:noticias:show.html.twig", 4)->display($context);
        // line 5
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
        
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <div id=\"example1_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\"><div class=\"row\"><div class=\"col-sm-6\"><div class=\"dataTables_length\" id=\"example1_length\"><label>Show <select name=\"example1_length\" aria-controls=\"example1\" class=\"form-control input-sm\"><option value=\"10\">10</option><option value=\"25\">25</option><option value=\"50\">50</option><option value=\"100\">100</option></select> entries</label></div></div><div class=\"col-sm-6\"><div id=\"example1_filter\" class=\"dataTables_filter\"><label>Search:<input type=\"search\" class=\"form-control input-sm\" placeholder=\"\" aria-controls=\"example1\"></label></div></div></div><div class=\"row\"><div class=\"col-sm-12\"><table class=\"table table-bordered table-striped dataTable\" id=\"example1\" role=\"grid\" aria-describedby=\"example1_info\">
                    <thead>
                      <tr role=\"row\">
                          <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 294px;\" aria-sort=\"ascending\" aria-label=\"Rendering engine: activate to sort column descending\">Id</th>
                          <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 368px;\" aria-label=\"Browser: activate to sort column ascending\">Titulo</th>
                          <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 316px;\" aria-label=\"Platform(s): activate to sort column ascending\">Conteudo</th>
                          <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 255px;\" aria-label=\"Engine version: activate to sort column ascending\">Data</th>
                                              <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 255px;\" aria-label=\"Engine version: activate to sort column ascending\">Ação</th>
                    </thead>
                    <tbody>
                    <tr role=\"row\" class=\"odd\">

                        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : $this->getContext($context, "noticia")), "id", array()), "html", null, true);
        echo "</td>
                        <td> <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_edit", array("id" => $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : $this->getContext($context, "noticia")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : $this->getContext($context, "noticia")), "titulo", array()), "html", null, true);
        echo "</a></td>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : $this->getContext($context, "noticia")), "conteudo", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 42
        if ($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : $this->getContext($context, "noticia")), "data", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : $this->getContext($context, "noticia")), "data", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                        <td>            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input class=\"btn btn-info btn-xs\" type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "</td>
                      </tr>
                     </tbody>
                    <tfoot>

                    </tfoot>
                  </table></div></div><div class=\"row\"><div class=\"col-sm-5\"><div class=\"dataTables_info\" id=\"example1_info\" role=\"status\" aria-live=\"polite\">Showing 1 to 10 of 57 entries</div></div><div class=\"col-sm-7\"><div class=\"dataTables_paginate paging_simple_numbers\" id=\"example1_paginate\"><ul class=\"pagination\"><li class=\"paginate_button previous disabled\" id=\"example1_previous\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"0\" tabindex=\"0\">Previous</a></li><li class=\"paginate_button active\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"1\" tabindex=\"0\">1</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"2\" tabindex=\"0\">2</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"3\" tabindex=\"0\">3</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"4\" tabindex=\"0\">4</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"5\" tabindex=\"0\">5</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"6\" tabindex=\"0\">6</a></li><li class=\"paginate_button next\" id=\"example1_next\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"7\" tabindex=\"0\">Next</a></li></ul></div></div></div></div>
                </div><!-- /.box-body -->
              </div>
                </div>
            </div>
            
        </section>
        



        
          </div>
                    

    <ul>
        <li>
            <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("noticias_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_edit", array("id" => $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : $this->getContext($context, "noticia")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>

        </li>
    </ul> 
";
        
        $__internal_cc179645991dadd82b1914ec6110b3c55ac753313d4bf3bae9ac734c83b6625e->leave($__internal_cc179645991dadd82b1914ec6110b3c55ac753313d4bf3bae9ac734c83b6625e_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle:noticias:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 71,  130 => 68,  104 => 45,  99 => 43,  93 => 42,  89 => 41,  83 => 40,  79 => 39,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*         {% include  "adminBundle:sidebar:sidebar.html.twig" %}*/
/*         */
/*                   <div class="content-wrapper">*/
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
/*         */
/*         <section class="content">*/
/*             <div class="row">*/
/*                 <div class="col-lg-6">*/
/*                     <div class="box">*/
/*                 <div class="box-header">*/
/*                   <h3 class="box-title">Data Table With Full Features</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                   <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable" id="example1" role="grid" aria-describedby="example1_info">*/
/*                     <thead>*/
/*                       <tr role="row">*/
/*                           <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 294px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Id</th>*/
/*                           <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 368px;" aria-label="Browser: activate to sort column ascending">Titulo</th>*/
/*                           <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 316px;" aria-label="Platform(s): activate to sort column ascending">Conteudo</th>*/
/*                           <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 255px;" aria-label="Engine version: activate to sort column ascending">Data</th>*/
/*                                               <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 255px;" aria-label="Engine version: activate to sort column ascending">Ação</th>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     <tr role="row" class="odd">*/
/* */
/*                         <td>{{ noticia.id }}</td>*/
/*                         <td> <a href="{{ path('noticias_edit', { 'id': noticia.id }) }}">{{noticia.titulo}}</a></td>*/
/*                         <td>{{noticia.conteudo}}</td>*/
/*                         <td>{% if noticia.data %}{{ noticia.data|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                         <td>            {{ form_start(delete_form) }}*/
/*             <input class="btn btn-info btn-xs" type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}</td>*/
/*                       </tr>*/
/*                      </tbody>*/
/*                     <tfoot>*/
/* */
/*                     </tfoot>*/
/*                   </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>*/
/*                 </div><!-- /.box-body -->*/
/*               </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*         </section>*/
/*         */
/* */
/* */
/* */
/*         */
/*           </div>*/
/*                     */
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('noticias_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('noticias_edit', { 'id': noticia.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/* */
/*         </li>*/
/*     </ul> */
/* {% endblock %}*/
/* */
/* */
