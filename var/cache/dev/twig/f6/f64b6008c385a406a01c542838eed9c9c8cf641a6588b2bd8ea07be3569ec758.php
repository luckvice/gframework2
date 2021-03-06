<?php

/* adminBundle:sidebar:sidebar.html.twig */
class __TwigTemplate_a32f181cb7812d8c250d84c187fb74a0dac780e4a67a38ce65bec5bbe831f9e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b42fb0966e55806785be9651b99fa143329211eac8bb2d19f88211b80c59fe9f = $this->env->getExtension("native_profiler");
        $__internal_b42fb0966e55806785be9651b99fa143329211eac8bb2d19f88211b80c59fe9f->enter($__internal_b42fb0966e55806785be9651b99fa143329211eac8bb2d19f88211b80c59fe9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:sidebar:sidebar.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('sidebar', $context, $blocks);
        
        $__internal_b42fb0966e55806785be9651b99fa143329211eac8bb2d19f88211b80c59fe9f->leave($__internal_b42fb0966e55806785be9651b99fa143329211eac8bb2d19f88211b80c59fe9f_prof);

    }

    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_69918c25a4299232a409a065dca4cf87f057570086595339f426f0253779e080 = $this->env->getExtension("native_profiler");
        $__internal_69918c25a4299232a409a065dca4cf87f057570086595339f426f0253779e080->enter($__internal_69918c25a4299232a409a065dca4cf87f057570086595339f426f0253779e080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 4
        echo "          <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
              <p>Alexander Pierce</p>
              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li class=\"active treeview\">
              <a href=\"#\">
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li class=\"active\"><a href=\"index.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v1</a></li>
                <li><a href=\"index2.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-files-o\"></i>
                <span>Layout Options</span>
                <span class=\"label label-primary pull-right\">4</span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/layout/top-nav.html\"><i class=\"fa fa-circle-o\"></i> Top Navigation</a></li>
                <li><a href=\"pages/layout/boxed.html\"><i class=\"fa fa-circle-o\"></i> Boxed</a></li>
                <li><a href=\"pages/layout/fixed.html\"><i class=\"fa fa-circle-o\"></i> Fixed</a></li>
                <li><a href=\"pages/layout/collapsed-sidebar.html\"><i class=\"fa fa-circle-o\"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href=\"pages/widgets.html\">
                <i class=\"fa fa-th\"></i> <span>Widgets</span> <small class=\"label pull-right bg-green\">new</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-pie-chart\"></i>
                <span>Charts</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/charts/chartjs.html\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
                <li><a href=\"pages/charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
                <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
                <li><a href=\"pages/charts/inline.html\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-laptop\"></i>
                <span>UI Elements</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/UI/general.html\"><i class=\"fa fa-circle-o\"></i> General</a></li>
                <li><a href=\"pages/UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
                <li><a href=\"pages/UI/buttons.html\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
                <li><a href=\"pages/UI/sliders.html\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
                <li><a href=\"pages/UI/timeline.html\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
                <li><a href=\"pages/UI/modals.html\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-edit\"></i> <span>Forms</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                <li><a href=\"pages/forms/advanced.html\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                <li><a href=\"pages/forms/editors.html\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-table\"></i> <span>Tables</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                <li><a href=\"pages/tables/data.html\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
              </ul>
            </li>
            <li>
              <a href=\"pages/calendar.html\">
                <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                <small class=\"label pull-right bg-red\">3</small>
              </a>
            </li>
            <li>
              <a href=\"pages/mailbox/mailbox.html\">
                <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                <small class=\"label pull-right bg-yellow\">12</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-folder\"></i> <span>Examples</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/examples/invoice.html\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
                <li><a href=\"pages/examples/profile.html\"><i class=\"fa fa-circle-o\"></i> Profile</a></li>
                <li><a href=\"pages/examples/login.html\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
                <li><a href=\"pages/examples/register.html\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
                <li><a href=\"pages/examples/lockscreen.html\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
                <li><a href=\"pages/examples/404.html\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
                <li><a href=\"pages/examples/500.html\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
                <li><a href=\"pages/examples/blank.html\"><i class=\"fa fa-circle-o\"></i> Blank Page</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-share\"></i> <span>Multilevel</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
                <li>
                  <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two</a></li>
                    <li>
                      <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two <i class=\"fa fa-angle-left pull-right\"></i></a>
                      <ul class=\"treeview-menu\">
                        <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
              </ul>
            </li>
            <li><a href=\"documentation/index.html\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a></li>
            <li class=\"header\">LABELS</li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>    
";
        
        $__internal_69918c25a4299232a409a065dca4cf87f057570086595339f426f0253779e080->leave($__internal_69918c25a4299232a409a065dca4cf87f057570086595339f426f0253779e080_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle:sidebar:sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }
}
/* */
/* */
/* {% block sidebar %}*/
/*           <!-- Left side column. contains the logo and sidebar -->*/
/*     <aside class="main-sidebar">*/
/*         <!-- sidebar: style can be found in sidebar.less -->*/
/*         <section class="sidebar">*/
/*           <!-- Sidebar user panel -->*/
/*           <div class="user-panel">*/
/*             <div class="pull-left image">*/
/*               <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">*/
/*             </div>*/
/*             <div class="pull-left info">*/
/*               <p>Alexander Pierce</p>*/
/*               <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*             </div>*/
/*           </div>*/
/*           <!-- search form -->*/
/*           <form action="#" method="get" class="sidebar-form">*/
/*             <div class="input-group">*/
/*               <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*               </span>*/
/*             </div>*/
/*           </form>*/
/*           <!-- /.search form -->*/
/*           <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*           <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/*             <li class="active treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>*/
/*                 <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-files-o"></i>*/
/*                 <span>Layout Options</span>*/
/*                 <span class="label label-primary pull-right">4</span>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>*/
/*                 <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>*/
/*                 <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>*/
/*                 <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li>*/
/*               <a href="pages/widgets.html">*/
/*                 <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>*/
/*               </a>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-pie-chart"></i>*/
/*                 <span>Charts</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>*/
/*                 <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>*/
/*                 <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>*/
/*                 <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-laptop"></i>*/
/*                 <span>UI Elements</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>*/
/*                 <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>*/
/*                 <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>*/
/*                 <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>*/
/*                 <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>*/
/*                 <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-edit"></i> <span>Forms</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>*/
/*                 <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>*/
/*                 <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-table"></i> <span>Tables</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>*/
/*                 <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li>*/
/*               <a href="pages/calendar.html">*/
/*                 <i class="fa fa-calendar"></i> <span>Calendar</span>*/
/*                 <small class="label pull-right bg-red">3</small>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="pages/mailbox/mailbox.html">*/
/*                 <i class="fa fa-envelope"></i> <span>Mailbox</span>*/
/*                 <small class="label pull-right bg-yellow">12</small>*/
/*               </a>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-folder"></i> <span>Examples</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>*/
/*                 <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>*/
/*                 <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>*/
/*                 <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>*/
/*                 <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>*/
/*                 <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>*/
/*                 <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>*/
/*                 <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-share"></i> <span>Multilevel</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>*/
/*                 <li>*/
/*                   <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>*/
/*                   <ul class="treeview-menu">*/
/*                     <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>*/
/*                     <li>*/
/*                       <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>*/
/*                       <ul class="treeview-menu">*/
/*                         <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>*/
/*                         <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>*/
/*                       </ul>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>*/
/*             <li class="header">LABELS</li>*/
/*             <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>*/
/*             <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>*/
/*             <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>*/
/*           </ul>*/
/*         </section>*/
/*         <!-- /.sidebar -->*/
/*       </aside>    */
/* {% endblock %}*/
/* */
