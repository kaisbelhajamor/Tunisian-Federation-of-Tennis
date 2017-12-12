<?php

/* ::menu.html.twig */
class __TwigTemplate_41a5d52d42adf492a7c4e8f2a2b7bc173dc1bd19f3a11b75e8b103ca4682e92d extends Twig_Template
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

                        ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                            ";
            if (($this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())), "typeUser", array()) == "ROLE_MEMBRE")) {
                // line 23
                echo "                                <li>
                                    <a class=\"lnk-menu\" href=\"#\">Tickets</a>
                                    <div class=\"cbp-hrsub sub-little\">
                                        <div class=\"cbp-hrsub-inner\">
                                            <div class=\"content-sub-menu\">
                                                <ul class=\"menu-pages\">
                                                    <li><a href=\"";
                // line 29
                echo $this->env->getExtension('routing')->getPath("reser_tick");
                echo "\"><span>Reservation Ticket</span></a></li>
                                                    <li><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aff_res", array("log" => $this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())), "username", array()))), "html", null, true);
                echo "\"><span>Afficher les Réservations</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li><a href=\"";
                // line 37
                echo $this->env->getExtension('routing')->getPath("match_intern");
                echo "\"><span>Parier sur un Match</span></a></li>
                            ";
            }
            // line 39
            echo "                        ";
        }
        // line 40
        echo "                        ";
        $this->displayBlock('mainmenu', $context, $blocks);
        // line 74
        echo "                    </ul>
                </nav>
            </div>
        </div>
    </header>
</section>
";
    }

    // line 40
    public function block_mainmenu($context, array $blocks = array())
    {
        // line 41
        echo "                            <li>
                                <a class=\"lnk-menu\" href=\"#\">Actualités</a>
                                <div class=\"cbp-hrsub sub-little\">
                                    <div class=\"cbp-hrsub-inner\">
                                        <div class=\"content-sub-menu\">
                                            <ul class=\"menu-pages\">
                                                <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("ftt_gestion_actualite_national_front_list");
        echo "\"><span> Nationales</span></a></li>
                                                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("ftt_gestion_actualite_international_front_list");
        echo "\"><span>Internationales</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            ";
        // line 54
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 55
            echo "                                ";
            if (($this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())), "typeUser", array()) == "ROLE_MEDECIN")) {
                // line 56
                echo "                                    <li>
                                        <a class=\"lnk-menu\" href=\"#\">Resutat Medical</a>
                                        <div class=\"cbp-hrsub sub-little\">
                                            <div class=\"cbp-hrsub-inner\">
                                                <div class=\"content-sub-menu\">
                                                    <ul class=\"menu-pages\">
                                                        <li><a href=\"";
                // line 62
                echo $this->env->getExtension('routing')->getPath("add_resutltat_medical");
                echo "\"><span> Ajouter Resutats</span></a></li>
                                                        <li><a href=\"";
                // line 63
                echo $this->env->getExtension('routing')->getPath("ftt_gestion_actualite_international_front_list");
                echo "\"><span>Voir Resutats </span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                ";
            }
            // line 70
            echo "                            ";
        }
        // line 71
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
        return array (  153 => 71,  150 => 70,  140 => 63,  136 => 62,  128 => 56,  125 => 55,  123 => 54,  114 => 48,  110 => 47,  102 => 41,  99 => 40,  89 => 74,  86 => 40,  83 => 39,  78 => 37,  68 => 30,  64 => 29,  56 => 23,  53 => 22,  51 => 21,  46 => 19,  42 => 18,  30 => 9,  20 => 1,);
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
/*                                 <li><a href="{{path('match_intern')}}"><span>Parier sur un Match</span></a></li>*/
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
/*                                                         <li><a href="{{ path('ftt_gestion_actualite_international_front_list') }}"><span>Voir Resutats </span></a></li>*/
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
