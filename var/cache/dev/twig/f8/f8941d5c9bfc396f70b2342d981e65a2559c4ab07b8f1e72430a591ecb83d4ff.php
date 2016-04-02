<?php

/* ::base.html.twig */
class __TwigTemplate_33b5fa0001f7a5a1ae882e832b030b35c2b9f0ea4bb8f2959114a357cf9c345a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a42e6c02de9741057cc1ac21f846e53301ad484b20ec7e0cba01011d644eeb2 = $this->env->getExtension("native_profiler");
        $__internal_4a42e6c02de9741057cc1ac21f846e53301ad484b20ec7e0cba01011d644eeb2->enter($__internal_4a42e6c02de9741057cc1ac21f846e53301ad484b20ec7e0cba01011d644eeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        

    </head>
    <body class=\"hold-transition skin-blue sidebar-mini\">
           <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class=\"logo-mini\"><b>g</b>FW</span>
          <!-- logo for regular state and mobile devices -->
          <span class=\"logo-lg\"><b>gFrameWork</b> 2.0</span> <small>Powered By Symfony</small>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
              <!-- Messages: style can be found in dropdown.less-->
              <li class=\"dropdown messages-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-envelope-o\"></i>
                  <span class=\"label label-success\">4</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li><!-- start message -->
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                          </div>
                          <h4>
                            Support Team
                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class=\"dropdown notifications-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-bell-o\"></i>
                  <span class=\"label label-warning\">10</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-users text-red\"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-user text-red\"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class=\"dropdown tasks-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-flag-o\"></i>
                  <span class=\"label label-danger\">9</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Design some buttons
                            <small class=\"pull-right\">20%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Create a nice theme
                            <small class=\"pull-right\">40%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Some task I need to do
                            <small class=\"pull-right\">60%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <h3>
                            Make beautiful transitions
                            <small class=\"pull-right\">80%</small>
                          </h3>
                          <div class=\"progress xs\">
                            <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class=\"footer\">
                    <a href=\"#\">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                  <span class=\"hidden-xs\">Alexander Pierce</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class=\"user-body\">
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Followers</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Sales</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>  
        ";
        // line 261
        $this->displayBlock('body', $context, $blocks);
        // line 265
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 304
        echo "    </body>
</html>
";
        
        $__internal_4a42e6c02de9741057cc1ac21f846e53301ad484b20ec7e0cba01011d644eeb2->leave($__internal_4a42e6c02de9741057cc1ac21f846e53301ad484b20ec7e0cba01011d644eeb2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f67ee49b5d39b278f44bbfb8945899cf7d1f11ac96765e4e424ed0c007348de9 = $this->env->getExtension("native_profiler");
        $__internal_f67ee49b5d39b278f44bbfb8945899cf7d1f11ac96765e4e424ed0c007348de9->enter($__internal_f67ee49b5d39b278f44bbfb8945899cf7d1f11ac96765e4e424ed0c007348de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f67ee49b5d39b278f44bbfb8945899cf7d1f11ac96765e4e424ed0c007348de9->leave($__internal_f67ee49b5d39b278f44bbfb8945899cf7d1f11ac96765e4e424ed0c007348de9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2caab8609a02b3e37b00e6c0d9997b0d9d27a8875f635aaa030478fc456b653b = $this->env->getExtension("native_profiler");
        $__internal_2caab8609a02b3e37b00e6c0d9997b0d9d27a8875f635aaa030478fc456b653b->enter($__internal_2caab8609a02b3e37b00e6c0d9997b0d9d27a8875f635aaa030478fc456b653b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.5 -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
        <!-- iCheck -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
        <!-- Morris chart 
       <link rel=\"stylesheet\" href=bundles/framework/plugins/morris/morris.css\">-->
        <!-- jvectormap -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
        <!-- Date Picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        ";
        
        $__internal_2caab8609a02b3e37b00e6c0d9997b0d9d27a8875f635aaa030478fc456b653b->leave($__internal_2caab8609a02b3e37b00e6c0d9997b0d9d27a8875f635aaa030478fc456b653b_prof);

    }

    // line 261
    public function block_body($context, array $blocks = array())
    {
        $__internal_625b6929f3850c37b72cfd5792db9361b3ee5f791b5a2f503be733a73f5282ba = $this->env->getExtension("native_profiler");
        $__internal_625b6929f3850c37b72cfd5792db9361b3ee5f791b5a2f503be733a73f5282ba->enter($__internal_625b6929f3850c37b72cfd5792db9361b3ee5f791b5a2f503be733a73f5282ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 262
        echo "         
            
        ";
        
        $__internal_625b6929f3850c37b72cfd5792db9361b3ee5f791b5a2f503be733a73f5282ba->leave($__internal_625b6929f3850c37b72cfd5792db9361b3ee5f791b5a2f503be733a73f5282ba_prof);

    }

    // line 265
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65cb392dc577ac7532edf7a29d5a3c2618ecae3171abf2243b0b422b9bd7c556 = $this->env->getExtension("native_profiler");
        $__internal_65cb392dc577ac7532edf7a29d5a3c2618ecae3171abf2243b0b422b9bd7c556->enter($__internal_65cb392dc577ac7532edf7a29d5a3c2618ecae3171abf2243b0b422b9bd7c556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 266
        echo "                <!-- jQuery 2.1.4 -->
            <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
              \$.widget.bridge('uibutton', \$.ui.button);
            </script>
            <!-- Bootstrap 3.3.5 -->
            <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Morris.js charts -->
            <script src=https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
           ";
        // line 279
        echo "            <!-- Sparkline -->
            <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
            <!-- jvectormap -->
            <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
            <!-- jQuery Knob Chart -->
            <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
            <!-- daterangepicker -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
            <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
            <!-- datepicker -->
            <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Slimscroll -->
            <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
            <!-- FastClick -->
            <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
            <!-- AdminLTE App -->
            <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
            <!-- AdminLTE for demo purposes -->
            <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_65cb392dc577ac7532edf7a29d5a3c2618ecae3171abf2243b0b422b9bd7c556->leave($__internal_65cb392dc577ac7532edf7a29d5a3c2618ecae3171abf2243b0b422b9bd7c556_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 302,  464 => 300,  459 => 298,  454 => 296,  449 => 294,  444 => 292,  439 => 290,  434 => 288,  428 => 285,  423 => 283,  419 => 282,  414 => 280,  411 => 279,  405 => 275,  394 => 267,  391 => 266,  385 => 265,  376 => 262,  370 => 261,  354 => 33,  349 => 31,  344 => 29,  339 => 27,  332 => 23,  327 => 21,  321 => 18,  312 => 12,  305 => 7,  299 => 6,  287 => 5,  278 => 304,  275 => 265,  273 => 261,  233 => 224,  224 => 218,  93 => 90,  78 => 78,  38 => 42,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* */
/*         */
/*         <!-- Tell the browser to be responsive to screen width -->*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         <!-- Bootstrap 3.3.5 -->*/
/*         <link rel="stylesheet" href="{{ asset("bundles/framework/bootstrap/css/bootstrap.min.css")}}">*/
/*         <!-- Font Awesome -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         <!-- Ionicons -->*/
/*         <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">*/
/*         <!-- Theme style -->*/
/*         <link rel="stylesheet" href="{{ asset("bundles/framework/dist/css/AdminLTE.min.css")}}">*/
/*         <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*              folder instead of downloading all of them to reduce the load. -->*/
/*         <link rel="stylesheet" href="{{ asset("bundles/framework/dist/css/skins/_all-skins.min.css")}}">*/
/*         <!-- iCheck -->*/
/*         <link rel="stylesheet" href="{{ asset("bundles/framework/plugins/iCheck/flat/blue.css")}}">*/
/*         <!-- Morris chart */
/*        <link rel="stylesheet" href=bundles/framework/plugins/morris/morris.css">-->*/
/*         <!-- jvectormap -->*/
/*         <link rel="stylesheet" href="{{ asset("bundles/framework/plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}">*/
/*         <!-- Date Picker -->*/
/*         <link rel="stylesheet" href="{{ asset("bundles/framework/plugins/datepicker/datepicker3.css")}}">*/
/*         <!-- Daterange picker -->*/
/*         <link rel="stylesheet" href="{{ asset("bundles/framework/plugins/daterangepicker/daterangepicker-bs3.css")}}">*/
/*         <!-- bootstrap wysihtml5 - text editor -->*/
/*         <link rel="stylesheet" href="{{ asset("bundles/framework/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*             <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         */
/*         */
/* */
/*     </head>*/
/*     <body class="hold-transition skin-blue sidebar-mini">*/
/*            <header class="main-header">*/
/*         <!-- Logo -->*/
/*         <a href="index2.html" class="logo">*/
/*           <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*           <span class="logo-mini"><b>g</b>FW</span>*/
/*           <!-- logo for regular state and mobile devices -->*/
/*           <span class="logo-lg"><b>gFrameWork</b> 2.0</span> <small>Powered By Symfony</small>*/
/*         </a>*/
/*         <!-- Header Navbar: style can be found in header.less -->*/
/*         <nav class="navbar navbar-static-top" role="navigation">*/
/*           <!-- Sidebar toggle button-->*/
/*           <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*           </a>*/
/*           <div class="navbar-custom-menu">*/
/*             <ul class="nav navbar-nav">*/
/*               <!-- Messages: style can be found in dropdown.less-->*/
/*               <li class="dropdown messages-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <i class="fa fa-envelope-o"></i>*/
/*                   <span class="label label-success">4</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li class="header">You have 4 messages</li>*/
/*                   <li>*/
/*                     <!-- inner menu: contains the actual data -->*/
/*                     <ul class="menu">*/
/*                       <li><!-- start message -->*/
/*                         <a href="#">*/
/*                           <div class="pull-left">*/
/*                             <img src="{{asset("bundles/framework/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">*/
/*                           </div>*/
/*                           <h4>*/
/*                             Support Team*/
/*                             <small><i class="fa fa-clock-o"></i> 5 mins</small>*/
/*                           </h4>*/
/*                           <p>Why not buy a new awesome theme?</p>*/
/*                         </a>*/
/*                       </li><!-- end message -->*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <div class="pull-left">*/
/*                             <img src="{{asset("bundles/framework/dist/img/user3-128x128.jpg")}}" class="img-circle" alt="User Image">*/
/*                           </div>*/
/*                           <h4>*/
/*                             AdminLTE Design Team*/
/*                             <small><i class="fa fa-clock-o"></i> 2 hours</small>*/
/*                           </h4>*/
/*                           <p>Why not buy a new awesome theme?</p>*/
/*                         </a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li class="footer"><a href="#">See All Messages</a></li>*/
/*                 </ul>*/
/*               </li>*/
/*               <!-- Notifications: style can be found in dropdown.less -->*/
/*               <li class="dropdown notifications-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <i class="fa fa-bell-o"></i>*/
/*                   <span class="label label-warning">10</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li class="header">You have 10 notifications</li>*/
/*                   <li>*/
/*                     <!-- inner menu: contains the actual data -->*/
/*                     <ul class="menu">*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <i class="fa fa-users text-aqua"></i> 5 new members joined today*/
/*                         </a>*/
/*                       </li>*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems*/
/*                         </a>*/
/*                       </li>*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <i class="fa fa-users text-red"></i> 5 new members joined*/
/*                         </a>*/
/*                       </li>*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <i class="fa fa-shopping-cart text-green"></i> 25 sales made*/
/*                         </a>*/
/*                       </li>*/
/*                       <li>*/
/*                         <a href="#">*/
/*                           <i class="fa fa-user text-red"></i> You changed your username*/
/*                         </a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li class="footer"><a href="#">View all</a></li>*/
/*                 </ul>*/
/*               </li>*/
/*               <!-- Tasks: style can be found in dropdown.less -->*/
/*               <li class="dropdown tasks-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <i class="fa fa-flag-o"></i>*/
/*                   <span class="label label-danger">9</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li class="header">You have 9 tasks</li>*/
/*                   <li>*/
/*                     <!-- inner menu: contains the actual data -->*/
/*                     <ul class="menu">*/
/*                       <li><!-- Task item -->*/
/*                         <a href="#">*/
/*                           <h3>*/
/*                             Design some buttons*/
/*                             <small class="pull-right">20%</small>*/
/*                           </h3>*/
/*                           <div class="progress xs">*/
/*                             <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                               <span class="sr-only">20% Complete</span>*/
/*                             </div>*/
/*                           </div>*/
/*                         </a>*/
/*                       </li><!-- end task item -->*/
/*                       <li><!-- Task item -->*/
/*                         <a href="#">*/
/*                           <h3>*/
/*                             Create a nice theme*/
/*                             <small class="pull-right">40%</small>*/
/*                           </h3>*/
/*                           <div class="progress xs">*/
/*                             <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                               <span class="sr-only">40% Complete</span>*/
/*                             </div>*/
/*                           </div>*/
/*                         </a>*/
/*                       </li><!-- end task item -->*/
/*                       <li><!-- Task item -->*/
/*                         <a href="#">*/
/*                           <h3>*/
/*                             Some task I need to do*/
/*                             <small class="pull-right">60%</small>*/
/*                           </h3>*/
/*                           <div class="progress xs">*/
/*                             <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                               <span class="sr-only">60% Complete</span>*/
/*                             </div>*/
/*                           </div>*/
/*                         </a>*/
/*                       </li><!-- end task item -->*/
/*                       <li><!-- Task item -->*/
/*                         <a href="#">*/
/*                           <h3>*/
/*                             Make beautiful transitions*/
/*                             <small class="pull-right">80%</small>*/
/*                           </h3>*/
/*                           <div class="progress xs">*/
/*                             <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                               <span class="sr-only">80% Complete</span>*/
/*                             </div>*/
/*                           </div>*/
/*                         </a>*/
/*                       </li><!-- end task item -->*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li class="footer">*/
/*                     <a href="#">View all tasks</a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <!-- User Account: style can be found in dropdown.less -->*/
/*               <li class="dropdown user user-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <img src="{{asset("bundles/framework/dist/img/user2-160x160.jpg")}}" class="user-image" alt="User Image">*/
/*                   <span class="hidden-xs">Alexander Pierce</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <!-- User image -->*/
/*                   <li class="user-header">*/
/*                     <img src="{{asset("bundles/framework/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">*/
/*                     <p>*/
/*                       Alexander Pierce - Web Developer*/
/*                       <small>Member since Nov. 2012</small>*/
/*                     </p>*/
/*                   </li>*/
/*                   <!-- Menu Body -->*/
/*                   <li class="user-body">*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Followers</a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Sales</a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Friends</a>*/
/*                     </div>*/
/*                   </li>*/
/*                   <!-- Menu Footer-->*/
/*                   <li class="user-footer">*/
/*                     <div class="pull-left">*/
/*                       <a href="#" class="btn btn-default btn-flat">Profile</a>*/
/*                     </div>*/
/*                     <div class="pull-right">*/
/*                       <a href="#" class="btn btn-default btn-flat">Sign out</a>*/
/*                     </div>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <!-- Control Sidebar Toggle Button -->*/
/*               <li>*/
/*                 <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*               </li>*/
/*             </ul>*/
/*           </div>*/
/*         </nav>*/
/*       </header>  */
/*         {% block body %}*/
/*          */
/*             */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*                 <!-- jQuery 2.1.4 -->*/
/*             <script src="{{ asset("bundles/framework/plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>*/
/*             <!-- jQuery UI 1.11.4 -->*/
/*             <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>*/
/*             <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->*/
/*             <script>*/
/*               $.widget.bridge('uibutton', $.ui.button);*/
/*             </script>*/
/*             <!-- Bootstrap 3.3.5 -->*/
/*             <script src="{{ asset("bundles/framework/bootstrap/js/bootstrap.min.js")}}"></script>*/
/*             <!-- Morris.js charts -->*/
/*             <script src=https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>*/
/*            {# <script src="{{ asset("bundles/framework/plugins/morris/morris.min.js")}}"></script>#}*/
/*             <!-- Sparkline -->*/
/*             <script src="{{ asset("bundles/framework/plugins/sparkline/jquery.sparkline.min.js")}}"></script>*/
/*             <!-- jvectormap -->*/
/*             <script src="{{ asset("bundles/framework/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>*/
/*             <script src="{{ asset("bundles/framework/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>*/
/*             <!-- jQuery Knob Chart -->*/
/*             <script src="{{ asset("bundles/framework/plugins/knob/jquery.knob.js")}}"></script>*/
/*             <!-- daterangepicker -->*/
/*             <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>*/
/*             <script src="{{ asset("bundles/framework/plugins/daterangepicker/daterangepicker.js")}}"></script>*/
/*             <!-- datepicker -->*/
/*             <script src="{{ asset("bundles/framework/plugins/datepicker/bootstrap-datepicker.js")}}"></script>*/
/*             <!-- Bootstrap WYSIHTML5 -->*/
/*             <script src="{{ asset("bundles/framework/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>*/
/*             <!-- Slimscroll -->*/
/*             <script src="{{ asset("bundles/framework/plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>*/
/*             <!-- FastClick -->*/
/*             <script src="{{ asset("bundles/framework/plugins/fastclick/fastclick.min.js")}}"></script>*/
/*             <!-- AdminLTE App -->*/
/*             <script src="{{ asset("bundles/framework/dist/js/app.min.js")}}"></script>*/
/*             <!-- AdminLTE dashboard demo (This is only for demo purposes) -->*/
/*             <script src="{{ asset("bundles/framework/dist/js/pages/dashboard.js")}}"></script>*/
/*             <!-- AdminLTE for demo purposes -->*/
/*             <script src="{{ asset("bundles/framework/dist/js/demo.js")}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
