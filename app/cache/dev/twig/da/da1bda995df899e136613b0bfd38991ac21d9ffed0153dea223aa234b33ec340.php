<?php

/* FttFrontOfficeBundle:Matchs:ListeMatchs.html.twig */
class __TwigTemplate_1fdc7b44aa2ddafc598c693b5bf9d550807b6ade3ffea2054b89a2d53c650047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FttFrontOfficeBundle:Matchs:ListeMatchs.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"general general-results players\">
        <div class=\"top-score-title right-score col-md-9\">
            <div class=\"top-score-title player-vs\">

                <div class=\"tabs standard single-pl\">

                    <div class=\"tab-content single-match\">
                        <div id=\"tab1\" class=\"tab active\">

                            <h3 class=\"tab-match-title club-list\">Liste des Matchs </h3>
                            <center>
                                <iframe width=\"560\" height=\"315\" align=\"\"
                                        src=\"https://www.youtube.com/embed/3tHdi6s9Tdw\"
                                        frameborder=\"10\" allowfullscreen></iframe>
                            </center>
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "                                <div id=\"tab1111\" class=\"tab active\">
                                    <table class=\"match-tbs\">
                                        <tbody>
                                        <tr>
                                            <td class=\"match-tbs-title\" colspan=\"7\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "terrain", array()), "nomTerrain", array()), "html", null, true);
            echo "
                                                - ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tournoi", array()), "html", null, true);
            echo "
                                                - ";
            // line 26
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
            }
            // line 27
            echo "                                                - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "heure", array()), "H:i:s"), "html", null, true);
            echo "</td>
                                        </tr>

                                        <tr class=\"match-sets\">
                                            <td class=\"fpt\">Joueur 1</td>
                                            <td class=\"fpt\">Joueur 2</td>
                                            <td class=\"fpt\">Resultat</td>
                                        </tr>
                                        <tr>
                                            <td class=\"fpt\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "joueur1", array()), "nomJoueur", array()), "html", null, true);
            echo "</td>
                                            <td class=\"fpt\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "joueur2", array()), "nomJoueur", array()), "html", null, true);
            echo "</td>
                                            <td class=\"fpt\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "resultat", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <br><br>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 51
        $this->loadTemplate("@FttGestionActualite/FrontOffice/lastnews.html.twig", "FttFrontOfficeBundle:Matchs:ListeMatchs.html.twig", 51)->display($context);
        // line 52
        echo "    </div>

    ";
        // line 54
        echo twig_include($this->env, $context, "@FttFrontOffice/Front/sponsor.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:Matchs:ListeMatchs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  115 => 52,  113 => 51,  106 => 46,  92 => 38,  88 => 37,  84 => 36,  71 => 27,  67 => 26,  63 => 25,  59 => 24,  53 => 20,  49 => 19,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <div class="general general-results players">*/
/*         <div class="top-score-title right-score col-md-9">*/
/*             <div class="top-score-title player-vs">*/
/* */
/*                 <div class="tabs standard single-pl">*/
/* */
/*                     <div class="tab-content single-match">*/
/*                         <div id="tab1" class="tab active">*/
/* */
/*                             <h3 class="tab-match-title club-list">Liste des Matchs </h3>*/
/*                             <center>*/
/*                                 <iframe width="560" height="315" align=""*/
/*                                         src="https://www.youtube.com/embed/3tHdi6s9Tdw"*/
/*                                         frameborder="10" allowfullscreen></iframe>*/
/*                             </center>*/
/*                             {% for entity in entities %}*/
/*                                 <div id="tab1111" class="tab active">*/
/*                                     <table class="match-tbs">*/
/*                                         <tbody>*/
/*                                         <tr>*/
/*                                             <td class="match-tbs-title" colspan="7">{{ entity.terrain.nomTerrain }}*/
/*                                                 - {{ entity.tournoi }}*/
/*                                                 - {% if entity.date %}{{ entity.date|date('Y-m-d') }}{% endif %}*/
/*                                                 - {{ entity.heure|date('H:i:s') }}</td>*/
/*                                         </tr>*/
/* */
/*                                         <tr class="match-sets">*/
/*                                             <td class="fpt">Joueur 1</td>*/
/*                                             <td class="fpt">Joueur 2</td>*/
/*                                             <td class="fpt">Resultat</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td class="fpt">{{ entity.joueur1.nomJoueur }}</td>*/
/*                                             <td class="fpt">{{ entity.joueur2.nomJoueur }}</td>*/
/*                                             <td class="fpt">{{ entity.resultat }}</td>*/
/*                                         </tr>*/
/*                                         </tbody>*/
/*                                     </table>*/
/* */
/*                                 </div>*/
/*                                 <br><br>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% include '@FttGestionActualite/FrontOffice/lastnews.html.twig' %}*/
/*     </div>*/
/* */
/*     {{ include('@FttFrontOffice/Front/sponsor.html.twig') }}*/
/* {% endblock %}*/
/*                   */
/*                             */
/*                             */
