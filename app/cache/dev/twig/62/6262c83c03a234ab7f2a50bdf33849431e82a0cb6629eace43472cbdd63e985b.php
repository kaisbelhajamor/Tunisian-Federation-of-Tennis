<?php

/* ::menu.html.twig */
class __TwigTemplate_e24266c84c7a9ac83f688c1b71c316b65e038c245fafb748a95bd91dafdd46e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'mainmenu' => array($this, 'block_mainmenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!--SECTION MENU -->
<section class=\"container box-logo\">
    <header>
        <div class=\"content-logo col-md-12\">
            <div class=\"col-md-1\">

                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/FTT.jpg"), "html", null, true);
        echo "\" alt=\"\" />
            </div>

            <div class=\"bt-menu\"><a href=\"#\" class=\"menu\"><span>&equiv;</span> Menu</a></div>

            <div class=\"box-menu\">

                <nav id=\"cbp-hrmenu\" class=\"cbp-hrmenu\">
                    <ul id=\"menu\">
                        <li><a class=\"lnk-menu active\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("frontoffice_homepage");
        echo "\">Accueil</a></li>
                        <li><a class=\"lnk-menu\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("contact_homepage");
        echo "\">Contact</a></li>
                        <li>
                            <a class=\"lnk-menu\" href=\"#\">Joueurs</a>
                            <div class=\"cbp-hrsub sub-little\">
                                <div class=\"cbp-hrsub-inner\">
                                    <div class=\"content-sub-menu\">
                                        <ul class=\"menu-pages\">
                                            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("classement_list");
        echo "\"><span>Classement</span></a></li>
                                            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("best_player");
        echo "\"><span>Meilleurs Joueurs</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class=\"lnk-menu\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("club_list");
        echo "\">Clubs</a></li>

                        <li>
                            <a class=\"lnk-menu\" href=\"#\">Matches et Paris</a>
                            <div class=\"cbp-hrsub sub-little\">
                                <div class=\"cbp-hrsub-inner\">
                                    <div class=\"content-sub-menu\">
                                        <ul class=\"menu-pages\">

                                            <li><a class=\"\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("match_list");
        echo "\"> Liste des Matches</a></li>
                                            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("match_intern");
        echo "\"><span>Parier sur un Match</span></a></li>
                                            <li><a class=\"\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("terrain_list");
        echo "\">Terrains</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 51
            echo "                            ";
            if (($this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "typeUser", array()) == "ROLE_JOUEUR")) {
                // line 52
                echo "                                <li><a class=\"lnk-menu active\" href=\"";
                echo $this->env->getExtension('routing')->getPath("liste_formation");
                echo "\">FORMATION</a></li>


                            ";
            }
            // line 56
            echo "                        ";
        }
        // line 57
        echo "



                        ";
        // line 61
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 62
            echo "                            ";
            if (($this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "typeUser", array()) == "ROLE_MEMBRE")) {
                // line 63
                echo "                                <li>
                                    <a class=\"lnk-menu\" href=\"#\">Tickets</a>
                                    <div class=\"cbp-hrsub sub-little\">
                                        <div class=\"cbp-hrsub-inner\">
                                            <div class=\"content-sub-menu\">
                                                <ul class=\"menu-pages\">
                                                    <li><a href=\"";
                // line 69
                echo $this->env->getExtension('routing')->getPath("reser_tick");
                echo "\"><span>Reservation Ticket</span></a></li>
                                                    <li><a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aff_res", array("log" => $this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "username", array()))), "html", null, true);
                echo "\"><span>Afficher les Réservations</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                            ";
            }
            // line 79
            echo "                        ";
        }
        // line 80
        echo "                        ";
        $this->displayBlock('mainmenu', $context, $blocks);
        // line 114
        echo "                    </ul>
                </nav>
            </div>
        </div>
    </header>
</section>
";
    }

    // line 80
    public function block_mainmenu($context, array $blocks = array())
    {
        // line 81
        echo "                            <li>
                                <a class=\"lnk-menu\" href=\"#\">Actualités</a>
                                <div class=\"cbp-hrsub sub-little\">
                                    <div class=\"cbp-hrsub-inner\">
                                        <div class=\"content-sub-menu\">
                                            <ul class=\"menu-pages\">
                                                <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("ftt_gestion_actualite_national_front_list");
        echo "\"><span> Nationales</span></a></li>
                                                <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("ftt_gestion_actualite_international_front_list");
        echo "\"><span>Internationales</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            ";
        // line 94
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 95
            echo "                                ";
            if (($this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())), "typeUser", array()) == "ROLE_MEDECIN")) {
                // line 96
                echo "                                    <li>
                                        <a class=\"lnk-menu\" href=\"#\">Resutat Medical</a>
                                        <div class=\"cbp-hrsub sub-little\">
                                            <div class=\"cbp-hrsub-inner\">
                                                <div class=\"content-sub-menu\">
                                                    <ul class=\"menu-pages\">
                                                        <li><a href=\"";
                // line 102
                echo $this->env->getExtension('routing')->getPath("add_resutltat_medical");
                echo "\"><span> Ajouter Resutats</span></a></li>
                                                        <li><a href=\"";
                // line 103
                echo $this->env->getExtension('routing')->getPath("list_resutltat_medical_ajoute");
                echo "\"><span>Voir Resutats </span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                ";
            }
            // line 110
            echo "                            ";
        }
        // line 111
        echo "

                        ";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 111,  216 => 110,  206 => 103,  202 => 102,  194 => 96,  191 => 95,  189 => 94,  180 => 88,  176 => 87,  168 => 81,  165 => 80,  155 => 114,  152 => 80,  149 => 79,  137 => 70,  133 => 69,  125 => 63,  122 => 62,  120 => 61,  114 => 57,  111 => 56,  103 => 52,  100 => 51,  98 => 50,  89 => 44,  85 => 43,  81 => 42,  69 => 33,  60 => 27,  56 => 26,  46 => 19,  42 => 18,  30 => 9,  20 => 1,);
    }
}
/* */
/* */
/* <!--SECTION MENU -->*/
/* <section class="container box-logo">*/
/*     <header>*/
/*         <div class="content-logo col-md-12">*/
/*             <div class="col-md-1">*/
/* */
/*                 <img src="{{ asset('img/FTT.jpg') }}" alt="" />*/
/*             </div>*/
/* */
/*             <div class="bt-menu"><a href="#" class="menu"><span>&equiv;</span> Menu</a></div>*/
/* */
/*             <div class="box-menu">*/
/* */
/*                 <nav id="cbp-hrmenu" class="cbp-hrmenu">*/
/*                     <ul id="menu">*/
/*                         <li><a class="lnk-menu active" href="{{ path('frontoffice_homepage') }}">Accueil</a></li>*/
/*                         <li><a class="lnk-menu" href="{{ path('contact_homepage') }}">Contact</a></li>*/
/*                         <li>*/
/*                             <a class="lnk-menu" href="#">Joueurs</a>*/
/*                             <div class="cbp-hrsub sub-little">*/
/*                                 <div class="cbp-hrsub-inner">*/
/*                                     <div class="content-sub-menu">*/
/*                                         <ul class="menu-pages">*/
/*                                             <li><a href="{{path('classement_list')}}"><span>Classement</span></a></li>*/
/*                                             <li><a href="{{path('best_player')}}"><span>Meilleurs Joueurs</span></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li><a class="lnk-menu" href="{{ path('club_list') }}">Clubs</a></li>*/
/* */
/*                         <li>*/
/*                             <a class="lnk-menu" href="#">Matches et Paris</a>*/
/*                             <div class="cbp-hrsub sub-little">*/
/*                                 <div class="cbp-hrsub-inner">*/
/*                                     <div class="content-sub-menu">*/
/*                                         <ul class="menu-pages">*/
/* */
/*                                             <li><a class="" href="{{ path('match_list') }}"> Liste des Matches</a></li>*/
/*                                             <li><a href="{{path('match_intern')}}"><span>Parier sur un Match</span></a></li>*/
/*                                             <li><a class="" href="{{ path('terrain_list') }}">Terrains</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                             {% if  entityUser(app.user.id).typeUser == "ROLE_JOUEUR" %}*/
/*                                 <li><a class="lnk-menu active" href="{{ path('liste_formation') }}">FORMATION</a></li>*/
/* */
/* */
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/* */
/* */
/* */
/*                         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                             {% if  entityUser(app.user.id).typeUser == "ROLE_MEMBRE" %}*/
/*                                 <li>*/
/*                                     <a class="lnk-menu" href="#">Tickets</a>*/
/*                                     <div class="cbp-hrsub sub-little">*/
/*                                         <div class="cbp-hrsub-inner">*/
/*                                             <div class="content-sub-menu">*/
/*                                                 <ul class="menu-pages">*/
/*                                                     <li><a href="{{path('reser_tick')}}"><span>Reservation Ticket</span></a></li>*/
/*                                                     <li><a href="{{path('aff_res',{'log':entityUser(app.user.id).username} )}}"><span>Afficher les Réservations</span></a></li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/* */
/* */
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                         {% block mainmenu %}*/
/*                             <li>*/
/*                                 <a class="lnk-menu" href="#">Actualités</a>*/
/*                                 <div class="cbp-hrsub sub-little">*/
/*                                     <div class="cbp-hrsub-inner">*/
/*                                         <div class="content-sub-menu">*/
/*                                             <ul class="menu-pages">*/
/*                                                 <li><a href="{{ path('ftt_gestion_actualite_national_front_list') }}"><span> Nationales</span></a></li>*/
/*                                                 <li><a href="{{ path('ftt_gestion_actualite_international_front_list') }}"><span>Internationales</span></a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                 {% if  entityUser(app.user.id).typeUser == "ROLE_MEDECIN" %}*/
/*                                     <li>*/
/*                                         <a class="lnk-menu" href="#">Resutat Medical</a>*/
/*                                         <div class="cbp-hrsub sub-little">*/
/*                                             <div class="cbp-hrsub-inner">*/
/*                                                 <div class="content-sub-menu">*/
/*                                                     <ul class="menu-pages">*/
/*                                                         <li><a href="{{ path('add_resutltat_medical') }}"><span> Ajouter Resutats</span></a></li>*/
/*                                                         <li><a href="{{ path('list_resutltat_medical_ajoute') }}"><span>Voir Resutats </span></a></li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/* */
/* */
/*                         {% endblock %}*/
/*                     </ul>*/
/*                 </nav>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* </section>*/
/* */
