<?php

/* @FttFrontOffice/ResultatMedical/ListeResultatMedica.html.twig */
class __TwigTemplate_dca3d86b3491c6f3555bbe62eb6cc8bdb1d9f565a888d0cf918df18f780d4546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FttFrontOffice/ResultatMedical/ListeResultatMedica.html.twig", 1);
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
        echo "    <section id=\"single_news\" class=\"container secondary-page\">
        <div class=\"general general-results\">
            <div class=\"top-score-title col-md-9\">
                <h3 class=\"tab-match-title secondary-page club-list\">Résultats Médicals Joueurs</h3>

                <table class=\"match-tbs desc_news\">
                    <tbody>
                    <tr>
                        <td class=\"match-tbs-title\" colspan=\"7\">Mes resultats medicals</td>
                    </tr>
                    <tr class=\"match-sets\">
                        <td class=\"fpt\">Numero Echantillon</td>
                        <td class=\"fpt\">Date Prelevement</td>
                        <td class=\"fpt\">Joueur</td>
                        <td class=\"fpt\">Resultat Test</td>
                    </tr>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "                    <tr class=\"match-sets\">
                        <td class=\"fpt\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numeroEchantillon", array()), "html", null, true);
            echo "</td>
                        <td class=\"fpt\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datePrelevement", array()), "y/m/d"), "html", null, true);
            echo "</td>
                        <td class=\"fpt\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('count_extension')->getJoueur($this->getAttribute($this->getAttribute($context["entity"], "joueur", array()), "id", array())), "nomJoueur", array()), "html", null, true);
            echo "</td>

                        <td class=\"fpt\">";
            // line 25
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["entity"], "resultatTest", array())) > 30)) ? ((twig_slice($this->env, $this->getAttribute($context["entity"], "resultatTest", array()), 0, 30) . "...")) : ($this->getAttribute($context["entity"], "resultatTest", array()))), "html", null, true);
            echo "</td>
                        </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </tbody>
                </table>
                <a class=\"btn btn-info pull-right\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("list_resutltat_medical_pdf");
        echo "\"> Certificat</a>



            </div><!--Close Top Match-->

            ";
        // line 36
        $this->loadTemplate("@FttGestionActualite/FrontOffice/lastnews.html.twig", "@FttFrontOffice/ResultatMedical/ListeResultatMedica.html.twig", 36)->display($context);
        // line 37
        echo "        </div>

    </section>





    ";
        // line 45
        echo twig_include($this->env, $context, "@FttFrontOffice/Front/sponsor.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@FttFrontOffice/ResultatMedical/ListeResultatMedica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 45,  93 => 37,  91 => 36,  82 => 30,  78 => 28,  69 => 25,  64 => 23,  60 => 22,  56 => 21,  53 => 20,  49 => 19,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     <section id="single_news" class="container secondary-page">*/
/*         <div class="general general-results">*/
/*             <div class="top-score-title col-md-9">*/
/*                 <h3 class="tab-match-title secondary-page club-list">Résultats Médicals Joueurs</h3>*/
/* */
/*                 <table class="match-tbs desc_news">*/
/*                     <tbody>*/
/*                     <tr>*/
/*                         <td class="match-tbs-title" colspan="7">Mes resultats medicals</td>*/
/*                     </tr>*/
/*                     <tr class="match-sets">*/
/*                         <td class="fpt">Numero Echantillon</td>*/
/*                         <td class="fpt">Date Prelevement</td>*/
/*                         <td class="fpt">Joueur</td>*/
/*                         <td class="fpt">Resultat Test</td>*/
/*                     </tr>*/
/*                     {% for entity in entities %}*/
/*                     <tr class="match-sets">*/
/*                         <td class="fpt">{{ entity.numeroEchantillon }}</td>*/
/*                         <td class="fpt">{{ entity.datePrelevement|date('y/m/d') }}</td>*/
/*                         <td class="fpt">{{ getJoueur(entity.joueur.id).nomJoueur }}</td>*/
/* */
/*                         <td class="fpt">{{ entity.resultatTest|length > 30 ?  entity.resultatTest|slice(0, 30) ~ '...' :  entity.resultatTest  }}</td>*/
/*                         </tr>*/
/*                      {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*                 <a class="btn btn-info pull-right" href="{{ path('list_resutltat_medical_pdf')}}"> Certificat</a>*/
/* */
/* */
/* */
/*             </div><!--Close Top Match-->*/
/* */
/*             {% include '@FttGestionActualite/FrontOffice/lastnews.html.twig' %}*/
/*         </div>*/
/* */
/*     </section>*/
/* */
/* */
/* */
/* */
/* */
/*     {{ include('@FttFrontOffice/Front/sponsor.html.twig') }}*/
/* {% endblock %}*/
/* */
