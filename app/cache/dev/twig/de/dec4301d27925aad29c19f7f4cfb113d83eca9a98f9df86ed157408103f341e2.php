<?php

/* @FttBackoffice/sidebarLeft.html.twig */
class __TwigTemplate_64ccac752975019ae179a5ee2173f85e06cc6aee70b676e1a9b63d30c9df9877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Left side column. contains the logo and sidebar -->
<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <!-- Sidebar user panel -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                ";
        // line 8
        if ( !twig_test_empty($this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "path", array()))) {
            // line 9
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "getWebPath", array(), "method")), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
                ";
        } else {
            // line 11
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/pictures/user.png"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">


                ";
        }
        // line 15
        echo "

         </div>
            <div class=\"pull-left info\">

                <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </p>
                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
        </div>
        <!-- search form
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
                    <i class=\"fa fa-dashboard\"></i> <span>Interface</span> <i class=\"fa fa-angle-left pull-right\"></i>

                </a>
                <ul class=\"treeview-menu\">
                    <li class=\"active\"><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("frontoffice_homepage");
        echo "\"><i class=\"fa fa-circle-o text-success\"></i>Front office</a></li>
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("ftt_backoffice_homepage");
        echo "\"><i class=\"fa fa-circle-o text-warning\"></i>Back office</a></li>
                </ul>

            </li>


            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-files-o\"></i>
                    <span>Gestions</span>
                    <span class=\"label label-primary pull-right\"></span>
                </a>
                <ul class=\"treeview-menu\">
                    <li class=\"active\"><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\"><i class=\"glyphicon glyphicon-user text-warning\"></i>Utilisateurs</a></li>
                    <li class=\"active\"><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("ftt_gestion_actualite_admin_list");
        echo "\"><i class=\"glyphicon glyphicon-list-alt text-success\"></i>Actualités</a></li>
                    <li class=\"active\"><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("ftt_backoffice_medecin_list");
        echo "\"><i class=\"fa fa-fw fa-ambulance text-warning\"></i>Medecins</a></li>
                    <li class=\"active\"><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("club");
        echo "\"><i class=\"fa fa-circle-o text-success\"></i> Club</a></li>
                    <li class=\"active\"><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("afficher_joueur");
        echo "\"><i class=\"fa fa-circle-o text-success\"></i> Joueurs</a></li>
                    <li class=\"active\"><a href=\"\"><i class=\"fa fa-circle-o text-warning\"></i> Arbitres</a></li>
                    <li class=\"active\"><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("matchs");
        echo "\"><i class=\"fa fa-circle-o text-success\"></i> Matchs</a></li>
                    <li class=\"active\"><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("ticket_affich");
        echo "\"><i class=\"fa fa-fw fa-ticket text-warning\"></i> Tickets</a></li>
                    <li class=\"active\"><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("formation");
        echo "\"><i class=\"fa fa-fw fa-wrench text-success\"></i> Formations</a></li>
                    <li class=\"active\"><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("paris_affich");
        echo "\"><i class=\"fa fa-fw fa-eur text-warning\"></i> Paris</a></li>
                    <li class=\"active\"><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("terrain");
        echo "\"><i class=\"fa fa-fw fa-eur text-warning\"></i> Terrains</a></li>

                    <li class=\"active\"><a href=\"\"><i class=\"fa fa-fw fa-servertext-success\"></i> Resultats médicales</a></li>

              </ul>
            </li>


            <li class=\"treeview active\">
                <a href=\"#\">
                    <i class=\"fa fa-files-o\"></i>
                    <span>Newsletter</span>

                </a>
                <ul class=\"treeview-menu menu-open\" style=\"display: block;\">
                    <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("ftt_backoffice_newsletter_list_mail");
        echo "\"><i class=\"fa fa-circle-o\"></i> Utilisateurs newsletter                         <span class=\"label label-primary pull-right bg-green\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('count_extension')->getNewsCount(), "html", null, true);
        echo "</span></a></li>
                    <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("ftt_backoffice_newsletter_add_newsletter");
        echo "\"><i class=\"fa fa-circle-o\"></i> Envoyer Newsletter</a></li>
                    <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("ftt_backoffice_newsletter_list_newsletter_content");
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste de Newsletter</a></li>

                </ul>
            </li>

            <li>
                <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("ftt_backoffice_messages_list");
        echo "\">
                    <i class=\"fa fa-envelope\"></i> <span>Boite de réception</span>
                    <small class=\"label pull-right bg-yellow\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('count_extension')->countNotReadedMsg(), "html", null, true);
        echo "</small>
                </a>
            </li>



            <li class=\"treeview\">
                <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("inscription_liste");
        echo "\">
                    <i class=\"fa fa-edit\"></i>
                    <span>Liste des inscrits</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>";
    }

    public function getTemplateName()
    {
        return "@FttBackoffice/sidebarLeft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 102,  179 => 95,  174 => 93,  165 => 87,  161 => 86,  155 => 85,  137 => 70,  133 => 69,  129 => 68,  125 => 67,  121 => 66,  116 => 64,  112 => 63,  108 => 62,  104 => 61,  100 => 60,  84 => 47,  80 => 46,  51 => 20,  44 => 15,  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!-- Left side column. contains the logo and sidebar -->*/
/* <aside class="main-sidebar">*/
/*     <!-- sidebar: style can be found in sidebar.less -->*/
/*     <section class="sidebar">*/
/*         <!-- Sidebar user panel -->*/
/*         <div class="user-panel">*/
/*             <div class="pull-left image">*/
/*                 {% if entityUser(app.user.id).path is not empty %}*/
/*                     <img src="{{ asset(entityUser(app.user.id).getWebPath()) }}" class="img-circle" alt="User Image">*/
/*                 {% else %}*/
/*                     <img src="{{ asset('uploads/pictures/user.png') }}" class="img-circle" alt="User Image">*/
/* */
/* */
/*                 {% endif %}*/
/* */
/* */
/*          </div>*/
/*             <div class="pull-left info">*/
/* */
/*                 <p>{{ app.user.username }} </p>*/
/*                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*             </div>*/
/*         </div>*/
/*         <!-- search form*/
/*         <form action="#" method="get" class="sidebar-form">*/
/*             <div class="input-group">*/
/*                 <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*               </span>*/
/*             </div>*/
/*         </form>*/
/*         <!-- /.search form -->*/
/* */
/* */
/*         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*         <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/* */
/*             <li class="active treeview">*/
/*                 <a href="#">*/
/*                     <i class="fa fa-dashboard"></i> <span>Interface</span> <i class="fa fa-angle-left pull-right"></i>*/
/* */
/*                 </a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li class="active"><a href="{{ path('frontoffice_homepage') }}"><i class="fa fa-circle-o text-success"></i>Front office</a></li>*/
/*                     <li><a href="{{ path('ftt_backoffice_homepage') }}"><i class="fa fa-circle-o text-warning"></i>Back office</a></li>*/
/*                 </ul>*/
/* */
/*             </li>*/
/* */
/* */
/*             <li class="treeview">*/
/*                 <a href="#">*/
/*                     <i class="fa fa-files-o"></i>*/
/*                     <span>Gestions</span>*/
/*                     <span class="label label-primary pull-right"></span>*/
/*                 </a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li class="active"><a href="{{ path('user') }}"><i class="glyphicon glyphicon-user text-warning"></i>Utilisateurs</a></li>*/
/*                     <li class="active"><a href="{{ path('ftt_gestion_actualite_admin_list') }}"><i class="glyphicon glyphicon-list-alt text-success"></i>Actualités</a></li>*/
/*                     <li class="active"><a href="{{ path('ftt_backoffice_medecin_list') }}"><i class="fa fa-fw fa-ambulance text-warning"></i>Medecins</a></li>*/
/*                     <li class="active"><a href="{{ path('club') }}"><i class="fa fa-circle-o text-success"></i> Club</a></li>*/
/*                     <li class="active"><a href="{{ path('afficher_joueur') }}"><i class="fa fa-circle-o text-success"></i> Joueurs</a></li>*/
/*                     <li class="active"><a href=""><i class="fa fa-circle-o text-warning"></i> Arbitres</a></li>*/
/*                     <li class="active"><a href="{{ path('matchs') }}"><i class="fa fa-circle-o text-success"></i> Matchs</a></li>*/
/*                     <li class="active"><a href="{{ path('ticket_affich') }}"><i class="fa fa-fw fa-ticket text-warning"></i> Tickets</a></li>*/
/*                     <li class="active"><a href="{{ path('formation') }}"><i class="fa fa-fw fa-wrench text-success"></i> Formations</a></li>*/
/*                     <li class="active"><a href="{{ path('paris_affich') }}"><i class="fa fa-fw fa-eur text-warning"></i> Paris</a></li>*/
/*                     <li class="active"><a href="{{ path('terrain') }}"><i class="fa fa-fw fa-eur text-warning"></i> Terrains</a></li>*/
/* */
/*                     <li class="active"><a href=""><i class="fa fa-fw fa-servertext-success"></i> Resultats médicales</a></li>*/
/* */
/*               </ul>*/
/*             </li>*/
/* */
/* */
/*             <li class="treeview active">*/
/*                 <a href="#">*/
/*                     <i class="fa fa-files-o"></i>*/
/*                     <span>Newsletter</span>*/
/* */
/*                 </a>*/
/*                 <ul class="treeview-menu menu-open" style="display: block;">*/
/*                     <li><a href="{{ path('ftt_backoffice_newsletter_list_mail') }}"><i class="fa fa-circle-o"></i> Utilisateurs newsletter                         <span class="label label-primary pull-right bg-green">{{ getNewsCount() }}</span></a></li>*/
/*                     <li><a href="{{ path('ftt_backoffice_newsletter_add_newsletter') }}"><i class="fa fa-circle-o"></i> Envoyer Newsletter</a></li>*/
/*                     <li><a href="{{ path('ftt_backoffice_newsletter_list_newsletter_content') }}"><i class="fa fa-circle-o"></i> Liste de Newsletter</a></li>*/
/* */
/*                 </ul>*/
/*             </li>*/
/* */
/*             <li>*/
/*                 <a href="{{ path('ftt_backoffice_messages_list') }}">*/
/*                     <i class="fa fa-envelope"></i> <span>Boite de réception</span>*/
/*                     <small class="label pull-right bg-yellow">{{ countNotReadedMsg() }}</small>*/
/*                 </a>*/
/*             </li>*/
/* */
/* */
/* */
/*             <li class="treeview">*/
/*                 <a href="{{ path('inscription_liste') }}">*/
/*                     <i class="fa fa-edit"></i>*/
/*                     <span>Liste des inscrits</span>*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*             </li>*/
/* */
/*         </ul>*/
/*     </section>*/
/*     <!-- /.sidebar -->*/
/* </aside>*/
