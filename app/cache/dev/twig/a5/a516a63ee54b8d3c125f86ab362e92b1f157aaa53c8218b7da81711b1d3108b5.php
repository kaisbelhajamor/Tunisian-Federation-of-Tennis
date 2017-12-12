<?php

/* FttBackofficeBundle::accueil_admin.html.twig */
class __TwigTemplate_9167c80608dcb448ed06faaf7ea7dd0c634727ae9a6262a764dddab2b883ddca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'container' => array($this, 'block_container'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>FTT BackOffice</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">

    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/morris/morris.css"), "html", null, true);
        echo "\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>

    <![endif]-->
    ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "</head>
<body class=\"hold-transition skin-blue sidebar-mini\">

<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("ftt_backoffice_homepage");
        echo "\" class=\"logo\">
            ";
        // line 53
        $this->displayBlock('logo', $context, $blocks);
        // line 56
        echo "
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
                            <span class=\"label label-success\">
                                ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('count_extension')->countNotReadedMsg(), "html", null, true);
        echo "</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">Vous avez ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('count_extension')->countNotReadedMsg(), "html", null, true);
        echo " messages non lus</li>
                            <li>
                                <!-- inner menu: bods the actual data -->
                                <ul class=\"menu\">

                                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('count_extension')->entityMsgNotReaded());
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 80
            echo "                                        <li><!-- start message -->
                                            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ftt_backoffice_messages_show", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">

                                                <h4>
                                                    ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "name", array()), "html", null, true);
            echo "

                                                    <small><i class=\"fa fa-clock-o\"></i>";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('date')->diff($this->env, $this->getAttribute($context["i"], "date", array())), "html", null, true);
            echo " </small>
                                                </h4>
                                                <p>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "message", array()), "html", null, true);
            echo "</p>
                                            </a>
                                        </li><!-- end message -->
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("ftt_backoffice_messages_list");
        echo "\">Voir tous les messages</a></li>
                        </ul>
                    </li>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            ";
        // line 102
        if ( !twig_test_empty($this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "path", array()))) {
            // line 103
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "getWebPath", array(), "method")), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
                            ";
        } else {
            // line 105
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/pictures/user.png"), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">

                            ";
        }
        // line 108
        echo "

  <span class=\"hidden-xs\">";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "prenom", array()), "html", null, true);
        echo "</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">

                                ";
        // line 116
        if ( !twig_test_empty($this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "path", array()))) {
            // line 117
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "getWebPath", array(), "method")), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
                                ";
        } else {
            // line 119
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/pictures/user.png"), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">

                                ";
        }
        // line 122
        echo "
                                <p>
                                    ";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "Prenom", array()), "html", null, true);
        echo " - Administrateur FTT
                                    <small>Télephone :";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "tel", array()), "html", null, true);
        echo "</small>
                                </p>
                            </li>

                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Se déconnecter</a>
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
        // line 152
        echo twig_include($this->env, $context, "@FttBackoffice/sidebarLeft.html.twig");
        echo "

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
";
        // line 156
        $this->displayBlock('container', $context, $blocks);
        // line 174
        echo "        <section class=\"content\">
            ";
        // line 175
        $this->displayBlock('content', $context, $blocks);
        // line 244
        echo "        </section>

    </div>






















    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2016 <a>DevCore Esprit</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <!-- Home tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"label label-danger pull-right\">70%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Update Resume
                                <span class=\"label label-success pull-right\">95%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Laravel Integration
                                <span class=\"label label-warning pull-right\">50%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Back End Framework
                                <span class=\"label label-primary pull-right\">68%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Allow mail redirect
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Expose author name in posts
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Show me as online
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Turn off notifications
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Delete chat history
                            <a href=\"javascript::;\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->

<script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Morris.js charts -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
<script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<!-- jvectormap -->
<script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
<script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- datepicker -->
<script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
<!-- Slimscroll -->
<script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fttbackoffice/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    // line 53
    public function block_logo($context, array $blocks = array())
    {
        // line 54
        echo "                <span class=\"logo-lg\" >Fédération Tunisienne de Tennis</span>
            ";
    }

    // line 156
    public function block_container($context, array $blocks = array())
    {
        // line 157
        echo "
        <section class=\"content-header\">
            <h1>
                Espace Administrateur
                <small>Panneau de configuration</small>
            </h1>


            <ol class=\"breadcrumb\">


                ";
        // line 168
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 171
        echo "            </ol>
        </section>
";
    }

    // line 168
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 169
        echo "                    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ftt_backoffice_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
                ";
    }

    // line 175
    public function block_content($context, array $blocks = array())
    {
        // line 176
        echo "                <div class=\"col-lg-3 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-yellow\">
                        <div class=\"inner\">
                            <h3>";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('count_extension')->countUser(), "html", null, true);
        echo "</h3>
                            <p>Utilisateurs</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-person-add\"></i>
                        </div>
                        <a href=\"";
        // line 186
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>



                <div class=\"col-lg-3 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-green\">
                        <div class=\"inner\">
                            <h3>";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('count_extension')->countNotReadedMsg(), "html", null, true);
        echo "<sup style=\"font-size: 20px\"></sup></h3>
                            <p>Messages non lus</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-envelope-o\"></i>
                        </div>
                        <a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("ftt_backoffice_messages_list");
        echo "\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <!-- USERS LIST -->
                    <div class=\"box box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Derniers utilisateurs</h3>
                            <div class=\"box-tools pull-right\">
                                <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                                <button class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                        </div><!-- /.box-header -->


                        <div class=\"box-body no-padding\">
                            <ul class=\"users-list clearfix\">
                                ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('count_extension')->entityAllUser());
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 221
            echo "
                                <li>
                                    ";
            // line 223
            if ( !twig_test_empty($this->getAttribute($context["user"], "path", array()))) {
                // line 224
                echo "                                        <img class=\"profile-user-img img-responsive img-circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["user"], "getWebPath", array(), "method")), "html", null, true);
                echo "\" alt=\"User profile picture\">
                                    ";
            } else {
                // line 226
                echo "                                        <img class=\"profile-user-img img-responsive img-circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/pictures/user.png"), "html", null, true);
                echo "\" alt=\"User profile picture\">

                                    ";
            }
            // line 229
            echo "                                    <a class=\"users-list-name\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</a>

                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                            </ul><!-- /.users-list -->
                        </div><!-- /.box-body -->
                        <div class=\"box-footer text-center\">
                            <a href=\"";
        // line 236
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\" class=\"uppercase\">Voir les utilisateurs</a>
                        </div><!-- /.box-footer -->
                    </div><!--/.box -->
                </div>



            ";
    }

    public function getTemplateName()
    {
        return "FttBackofficeBundle::accueil_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  748 => 236,  743 => 233,  728 => 229,  721 => 226,  715 => 224,  713 => 223,  709 => 221,  705 => 220,  684 => 202,  675 => 196,  662 => 186,  653 => 180,  647 => 176,  644 => 175,  637 => 169,  634 => 168,  628 => 171,  626 => 168,  613 => 157,  610 => 156,  605 => 54,  602 => 53,  596 => 44,  591 => 9,  583 => 482,  578 => 480,  572 => 477,  567 => 475,  562 => 473,  557 => 471,  552 => 469,  547 => 467,  541 => 464,  536 => 462,  532 => 461,  527 => 459,  522 => 457,  516 => 454,  505 => 446,  301 => 244,  299 => 175,  296 => 174,  294 => 156,  287 => 152,  266 => 134,  260 => 131,  251 => 125,  245 => 124,  241 => 122,  234 => 119,  228 => 117,  226 => 116,  215 => 110,  211 => 108,  204 => 105,  198 => 103,  196 => 102,  186 => 95,  181 => 92,  171 => 88,  166 => 86,  161 => 84,  155 => 81,  152 => 80,  148 => 79,  140 => 74,  134 => 71,  117 => 56,  115 => 53,  111 => 52,  102 => 45,  100 => 44,  88 => 35,  83 => 33,  78 => 31,  73 => 29,  68 => 27,  62 => 24,  57 => 22,  50 => 18,  40 => 11,  37 => 10,  35 => 9,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>FTT BackOffice</title>*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/fttbackoffice/bootstrap/css/bootstrap.min.css') }}">*/
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* */
/*     <!-- Ionicons -->*/
/*     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">*/
/*     <!-- Theme style -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/fttbackoffice/dist/css/AdminLTE.min.css') }}">*/
/* */
/*     <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*          folder instead of downloading all of them to reduce the load. -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/fttbackoffice/dist/css/skins/_all-skins.min.css') }}">*/
/*     <!-- iCheck -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/fttbackoffice/plugins/iCheck/flat/blue.css') }}">*/
/* */
/*     <!-- Morris chart -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/fttbackoffice/plugins/morris/morris.css') }}">*/
/*     <!-- jvectormap -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/fttbackoffice/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">*/
/*     <!-- Date Picker -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/fttbackoffice/plugins/datepicker/datepicker3.css') }}">*/
/*     <!-- Daterange picker -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/fttbackoffice/plugins/daterangepicker/daterangepicker-bs3.css') }}">*/
/*     <!-- bootstrap wysihtml5 - text editor -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/fttbackoffice/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* */
/*     <![endif]-->*/
/*     {% block javascripts %} {% endblock %}*/
/* </head>*/
/* <body class="hold-transition skin-blue sidebar-mini">*/
/* */
/* <div class="wrapper">*/
/* */
/*     <header class="main-header">*/
/*         <!-- Logo -->*/
/*         <a href="{{ path('ftt_backoffice_homepage') }}" class="logo">*/
/*             {% block logo %}*/
/*                 <span class="logo-lg" >Fédération Tunisienne de Tennis</span>*/
/*             {% endblock %}*/
/* */
/*         </a>*/
/*         <!-- Header Navbar: style can be found in header.less -->*/
/*         <nav class="navbar navbar-static-top" role="navigation">*/
/*             <!-- Sidebar toggle button-->*/
/*             <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*             </a>*/
/*             <div class="navbar-custom-menu">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <!-- Messages: style can be found in dropdown.less-->*/
/*                     <li class="dropdown messages-menu">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-envelope-o"></i>*/
/*                             <span class="label label-success">*/
/*                                 {{ countNotReadedMsg() }}</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li class="header">Vous avez {{  countNotReadedMsg() }} messages non lus</li>*/
/*                             <li>*/
/*                                 <!-- inner menu: bods the actual data -->*/
/*                                 <ul class="menu">*/
/* */
/*                                     {% for i in entityMsgNotReaded() %}*/
/*                                         <li><!-- start message -->*/
/*                                             <a href="{{ path('ftt_backoffice_messages_show', { 'id': i.id }) }}">*/
/* */
/*                                                 <h4>*/
/*                                                     {{ i.name }}*/
/* */
/*                                                     <small><i class="fa fa-clock-o"></i>{{ i.date|time_diff }} </small>*/
/*                                                 </h4>*/
/*                                                 <p>{{ i.message }}</p>*/
/*                                             </a>*/
/*                                         </li><!-- end message -->*/
/*                                     {% endfor %}*/
/* */
/*                                 </ul>*/
/*                             </li>*/
/*                             <li class="footer"><a href="{{ path('ftt_backoffice_messages_list') }}">Voir tous les messages</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <!-- User Account: style can be found in dropdown.less -->*/
/*                     <li class="dropdown user user-menu">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             {% if entityUser(app.user.id).path is not empty %}*/
/*                                 <img src="{{ asset(entityUser(app.user.id).getWebPath()) }}" class="user-image" alt="User Image">*/
/*                             {% else %}*/
/*                                 <img src="{{ asset('uploads/pictures/user.png') }}" class="user-image" alt="User Image">*/
/* */
/*                             {% endif %}*/
/* */
/* */
/*   <span class="hidden-xs">{{ entityUser(app.user.id).nom }} {{ entityUser(app.user.id).prenom }}</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <!-- User image -->*/
/*                             <li class="user-header">*/
/* */
/*                                 {% if entityUser(app.user.id).path is not empty %}*/
/*                                     <img src="{{ asset(entityUser(app.user.id).getWebPath()) }}" class="user-image" alt="User Image">*/
/*                                 {% else %}*/
/*                                     <img src="{{ asset('uploads/pictures/user.png') }}" class="user-image" alt="User Image">*/
/* */
/*                                 {% endif %}*/
/* */
/*                                 <p>*/
/*                                     {{ entityUser(app.user.id).nom }} {{ entityUser(app.user.id).Prenom }} - Administrateur FTT*/
/*                                     <small>Télephone :{{ entityUser(app.user.id).tel }}</small>*/
/*                                 </p>*/
/*                             </li>*/
/* */
/*                             <li class="user-footer">*/
/*                                 <div class="pull-left">*/
/*                                     <a href="{{ path('user_edit', { 'id': app.user.id }) }}" class="btn btn-default btn-flat">Profile</a>*/
/*                                 </div>*/
/*                                 <div class="pull-right">*/
/*                                     <a href="{{ path('fos_user_security_logout') }}" class="btn btn-default btn-flat">Se déconnecter</a>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- Control Sidebar Toggle Button -->*/
/*                     <li>*/
/*                         <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </nav>*/
/* */
/* */
/* */
/* */
/* */
/*     </header>*/
/*     {{ include('@FttBackoffice/sidebarLeft.html.twig') }}*/
/* */
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/* {% block container %}*/
/* */
/*         <section class="content-header">*/
/*             <h1>*/
/*                 Espace Administrateur*/
/*                 <small>Panneau de configuration</small>*/
/*             </h1>*/
/* */
/* */
/*             <ol class="breadcrumb">*/
/* */
/* */
/*                 {% block breadcrumb %}*/
/*                     <li><a href="{{ path('ftt_backoffice_homepage') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>*/
/*                 {% endblock %}*/
/*             </ol>*/
/*         </section>*/
/* {% endblock  %}*/
/*         <section class="content">*/
/*             {% block content %}*/
/*                 <div class="col-lg-3 col-xs-6">*/
/*                     <!-- small box -->*/
/*                     <div class="small-box bg-yellow">*/
/*                         <div class="inner">*/
/*                             <h3>{{ countUser() }}</h3>*/
/*                             <p>Utilisateurs</p>*/
/*                         </div>*/
/*                         <div class="icon">*/
/*                             <i class="ion ion-person-add"></i>*/
/*                         </div>*/
/*                         <a href="{{ path('user') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/* */
/*                 <div class="col-lg-3 col-xs-6">*/
/*                     <!-- small box -->*/
/*                     <div class="small-box bg-green">*/
/*                         <div class="inner">*/
/*                             <h3>{{ countNotReadedMsg() }}<sup style="font-size: 20px"></sup></h3>*/
/*                             <p>Messages non lus</p>*/
/*                         </div>*/
/*                         <div class="icon">*/
/*                             <i class="fa fa-envelope-o"></i>*/
/*                         </div>*/
/*                         <a href="{{ path('ftt_backoffice_messages_list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-12">*/
/*                     <!-- USERS LIST -->*/
/*                     <div class="box box-danger">*/
/*                         <div class="box-header with-border">*/
/*                             <h3 class="box-title">Derniers utilisateurs</h3>*/
/*                             <div class="box-tools pull-right">*/
/*                                 <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                                 <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                             </div>*/
/*                         </div><!-- /.box-header -->*/
/* */
/* */
/*                         <div class="box-body no-padding">*/
/*                             <ul class="users-list clearfix">*/
/*                                 {% for user in entityAllUser() %}*/
/* */
/*                                 <li>*/
/*                                     {% if user.path is not empty %}*/
/*                                         <img class="profile-user-img img-responsive img-circle" src="{{ asset(user.getWebPath()) }}" alt="User profile picture">*/
/*                                     {% else %}*/
/*                                         <img class="profile-user-img img-responsive img-circle" src="{{ asset('uploads/pictures/user.png') }}" alt="User profile picture">*/
/* */
/*                                     {% endif %}*/
/*                                     <a class="users-list-name" href="{{ path('user_show', { 'id': user.id }) }}">{{ user.nom }}-{{ user.prenom }}</a>*/
/* */
/*                                 </li>*/
/*                                 {% endfor %}*/
/*                             </ul><!-- /.users-list -->*/
/*                         </div><!-- /.box-body -->*/
/*                         <div class="box-footer text-center">*/
/*                             <a href="{{ path('user') }}" class="uppercase">Voir les utilisateurs</a>*/
/*                         </div><!-- /.box-footer -->*/
/*                     </div><!--/.box -->*/
/*                 </div>*/
/* */
/* */
/* */
/*             {% endblock  %}*/
/*         </section>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     <!-- /.content-wrapper -->*/
/*     <footer class="main-footer">*/
/*         <div class="pull-right hidden-xs">*/
/*             <b>Version</b> 2.3.0*/
/*         </div>*/
/*         <strong>Copyright &copy; 2015-2016 <a>DevCore Esprit</a>.</strong> All rights reserved.*/
/*     </footer>*/
/* */
/*     <!-- Control Sidebar -->*/
/*     <aside class="control-sidebar control-sidebar-dark">*/
/*         <!-- Create the tabs -->*/
/*         <ul class="nav nav-tabs nav-justified control-sidebar-tabs">*/
/*             <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>*/
/*             <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>*/
/*         </ul>*/
/*         <!-- Tab panes -->*/
/*         <div class="tab-content">*/
/*             <!-- Home tab content -->*/
/*             <div class="tab-pane" id="control-sidebar-home-tab">*/
/*                 <h3 class="control-sidebar-heading">Recent Activity</h3>*/
/*                 <ul class="control-sidebar-menu">*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <i class="menu-icon fa fa-birthday-cake bg-red"></i>*/
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>*/
/*                                 <p>Will be 23 on April 24th</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <i class="menu-icon fa fa-user bg-yellow"></i>*/
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>*/
/*                                 <p>New phone +1(800)555-1234</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>*/
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>*/
/*                                 <p>nora@example.com</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <i class="menu-icon fa fa-file-code-o bg-green"></i>*/
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>*/
/*                                 <p>Execution time 5 seconds</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul><!-- /.control-sidebar-menu -->*/
/* */
/*                 <h3 class="control-sidebar-heading">Tasks Progress</h3>*/
/*                 <ul class="control-sidebar-menu">*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Custom Template Design*/
/*                                 <span class="label label-danger pull-right">70%</span>*/
/*                             </h4>*/
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-danger" style="width: 70%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Update Resume*/
/*                                 <span class="label label-success pull-right">95%</span>*/
/*                             </h4>*/
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-success" style="width: 95%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Laravel Integration*/
/*                                 <span class="label label-warning pull-right">50%</span>*/
/*                             </h4>*/
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-warning" style="width: 50%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Back End Framework*/
/*                                 <span class="label label-primary pull-right">68%</span>*/
/*                             </h4>*/
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-primary" style="width: 68%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul><!-- /.control-sidebar-menu -->*/
/* */
/*             </div><!-- /.tab-pane -->*/
/*             <!-- Stats tab content -->*/
/*             <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->*/
/*             <!-- Settings tab content -->*/
/*             <div class="tab-pane" id="control-sidebar-settings-tab">*/
/*                 <form method="post">*/
/*                     <h3 class="control-sidebar-heading">General Settings</h3>*/
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Report panel usage*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/*                         <p>*/
/*                             Some information about this general settings option*/
/*                         </p>*/
/*                     </div><!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Allow mail redirect*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/*                         <p>*/
/*                             Other sets of options are available*/
/*                         </p>*/
/*                     </div><!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Expose author name in posts*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/*                         <p>*/
/*                             Allow the user to show his name in blog posts*/
/*                         </p>*/
/*                     </div><!-- /.form-group -->*/
/* */
/*                     <h3 class="control-sidebar-heading">Chat Settings</h3>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Show me as online*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/*                     </div><!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Turn off notifications*/
/*                             <input type="checkbox" class="pull-right">*/
/*                         </label>*/
/*                     </div><!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Delete chat history*/
/*                             <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>*/
/*                         </label>*/
/*                     </div><!-- /.form-group -->*/
/*                 </form>*/
/*             </div><!-- /.tab-pane -->*/
/*         </div>*/
/*     </aside><!-- /.control-sidebar -->*/
/*     <!-- Add the sidebar's background. This div must be placed*/
/*          immediately after the control sidebar -->*/
/*     <div class="control-sidebar-bg"></div>*/
/* </div><!-- ./wrapper -->*/
/* */
/* <!-- jQuery 2.1.4 -->*/
/* */
/* <script src="{{ asset('bundles/fttbackoffice/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>*/
/* <!-- jQuery UI 1.11.4 -->*/
/* <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>*/
/* <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->*/
/* <script>*/
/*     $.widget.bridge('uibutton', $.ui.button);*/
/* </script>*/
/* <!-- Bootstrap 3.3.5 -->*/
/* <script src="{{ asset('bundles/fttbackoffice/bootstrap/js/bootstrap.min.js') }}"></script>*/
/* <!-- Morris.js charts -->*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>*/
/* <script src="{{ asset('bundles/fttbackoffice/plugins/morris/morris.min.js') }}"></script>*/
/* <!-- Sparkline -->*/
/* <script src="{{ asset('bundles/fttbackoffice/plugins/sparkline/jquery.sparkline.min.js') }}"></script>*/
/* <!-- jvectormap -->*/
/* <script src="{{ asset('bundles/fttbackoffice/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/fttbackoffice/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>*/
/* <!-- jQuery Knob Chart -->*/
/* <script src="{{ asset('bundles/fttbackoffice/plugins/knob/jquery.knob.js') }}"></script>*/
/* <!-- daterangepicker -->*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>*/
/* <script src="{{ asset('bundles/fttbackoffice/plugins/daterangepicker/daterangepicker.js') }}"></script>*/
/* <!-- datepicker -->*/
/* <script src="{{ asset('bundles/fttbackoffice/plugins/datepicker/bootstrap-datepicker.js') }}"></script>*/
/* <!-- Bootstrap WYSIHTML5 -->*/
/* <script src="{{ asset('bundles/fttbackoffice/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>*/
/* <!-- Slimscroll -->*/
/* <script src="{{ asset('bundles/fttbackoffice/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>*/
/* <!-- FastClick -->*/
/* <script src="{{ asset('bundles/fttbackoffice/plugins/fastclick/fastclick.min.js') }}"></script>*/
/* <!-- AdminLTE App -->*/
/* <script src="{{ asset('bundles/fttbackoffice/dist/js/app.min.js') }}"></script>*/
/* */
/* <!-- AdminLTE dashboard demo (This is only for demo purposes) -->*/
/* <script src="{{ asset('bundles/fttbackoffice/dist/js/pages/dashboard.js') }}"></script>*/
/* <!-- AdminLTE for demo purposes -->*/
/* <script src="{{ asset('bundles/fttbackoffice/dist/js/demo.js') }}"></script>*/
/* </body>*/
/* </html>*/
/* */
