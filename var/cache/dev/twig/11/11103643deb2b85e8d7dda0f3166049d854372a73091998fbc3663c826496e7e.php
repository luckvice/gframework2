<?php

/* adminBundle:noticias:index.html.twig */
class __TwigTemplate_2016417b2c8e602d8b3da1d730cf84a9ec73bd47232539f664a0004688dce161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "adminBundle:noticias:index.html.twig", 1);
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
        $__internal_8b0d830c39a18f45fd7a3a9ef84a7067a20cbcb092679875ebe844267944b8b1 = $this->env->getExtension("native_profiler");
        $__internal_8b0d830c39a18f45fd7a3a9ef84a7067a20cbcb092679875ebe844267944b8b1->enter($__internal_8b0d830c39a18f45fd7a3a9ef84a7067a20cbcb092679875ebe844267944b8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:noticias:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b0d830c39a18f45fd7a3a9ef84a7067a20cbcb092679875ebe844267944b8b1->leave($__internal_8b0d830c39a18f45fd7a3a9ef84a7067a20cbcb092679875ebe844267944b8b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbeca63e0a08e4105b0be69946021a5e8ce361bd06643244c487fea28f4cdb09 = $this->env->getExtension("native_profiler");
        $__internal_dbeca63e0a08e4105b0be69946021a5e8ce361bd06643244c487fea28f4cdb09->enter($__internal_dbeca63e0a08e4105b0be69946021a5e8ce361bd06643244c487fea28f4cdb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        ";
        $this->loadTemplate("adminBundle:sidebar:sidebar.html.twig", "adminBundle:noticias:index.html.twig", 4)->display($context);
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
                   ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : $this->getContext($context, "noticias")));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 37
            echo "                
                    <tr role=\"row\" class=\"odd\">

                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "id", array()), "html", null, true);
            echo "</td>
                        <td> <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_edit", array("id" => $this->getAttribute($context["noticia"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "titulo", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "conteudo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            if ($this->getAttribute($context["noticia"], "data", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["noticia"], "data", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>   
                            
                            <form action=\"/gframeworkv2/web/app_dev.php/noticias/6/delete\" method=\"post\" name=\"form\">
<input type=\"hidden\" value=\"DELETE\" name=\"_method\">
<input type=\"submit\" value=\"Delete\">

</form>    ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "id", array()), "html", null, true);
            echo " 
            <input class=\"btn btn-info btn-xs\" type=\"submit\" value=\"Delete\">
           </td>
                      </tr>
          
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                     </tbody>
                    <tfoot>

                    </tfoot>
                  </table></div></div><div class=\"row\"><div class=\"col-sm-5\"><div class=\"dataTables_info\" id=\"example1_info\" role=\"status\" aria-live=\"polite\">Showing 1 to 10 of 57 entries</div></div><div class=\"col-sm-7\"><div class=\"dataTables_paginate paging_simple_numbers\" id=\"example1_paginate\"><ul class=\"pagination\"><li class=\"paginate_button previous disabled\" id=\"example1_previous\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"0\" tabindex=\"0\">Previous</a></li><li class=\"paginate_button active\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"1\" tabindex=\"0\">1</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"2\" tabindex=\"0\">2</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"3\" tabindex=\"0\">3</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"4\" tabindex=\"0\">4</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"5\" tabindex=\"0\">5</a></li><li class=\"paginate_button \"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"6\" tabindex=\"0\">6</a></li><li class=\"paginate_button next\" id=\"example1_next\"><a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"7\" tabindex=\"0\">Next</a></li></ul></div></div></div></div>
                </div><!-- /.box-body -->
              </div>
                </div>
            </div>
            
        </section>
          </div>
                    
      <!--      <a href=\"";
        // line 69
        echo "\">Create a new entry</a>-->
";
        
        $__internal_dbeca63e0a08e4105b0be69946021a5e8ce361bd06643244c487fea28f4cdb09->leave($__internal_dbeca63e0a08e4105b0be69946021a5e8ce361bd06643244c487fea28f4cdb09_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle:noticias:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 69,  123 => 56,  111 => 50,  99 => 43,  95 => 42,  89 => 41,  85 => 40,  80 => 37,  76 => 36,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*         {% include  "adminBundle:sidebar:sidebar.html.twig" %}*/
/*         */
/*        <div class="content-wrapper">*/
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
/*                    {% for noticia in noticias %}*/
/*                 */
/*                     <tr role="row" class="odd">*/
/* */
/*                         <td>{{ noticia.id }}</td>*/
/*                         <td> <a href="{{ path('noticias_edit', { 'id': noticia.id }) }}">{{noticia.titulo}}</a></td>*/
/*                         <td>{{noticia.conteudo}}</td>*/
/*                         <td>{% if noticia.data %}{{ noticia.data|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                         <td>   */
/*                             */
/*                             <form action="/gframeworkv2/web/app_dev.php/noticias/6/delete" method="post" name="form">*/
/* <input type="hidden" value="DELETE" name="_method">*/
/* <input type="submit" value="Delete">*/
/* */
/* </form>    {{ noticia.id }} */
/*             <input class="btn btn-info btn-xs" type="submit" value="Delete">*/
/*            </td>*/
/*                       </tr>*/
/*           */
/*                  {% endfor %}*/
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
/*           </div>*/
/*                     */
/*       <!--      <a href="{#{ path('noticias_new') }#}">Create a new entry</a>-->*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
