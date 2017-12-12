<?php

/* FttFrontOfficeBundle:Ticket:res_tick.html.twig */
class __TwigTemplate_4c7ff0e9ac72877bc480a9d919dd50b873f235a7b018943a78d78b2b67ef9b3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "FttFrontOfficeBundle:Ticket:res_tick.html.twig", 2);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <section id=\"single_news\" class=\"container secondary-page\">
        <div class=\"general general-results\">
            <div class=\"top-score-title col-md-9\">
                <h3 class=\"tab-match-title secondary-page club-list\">Reservation Ticket</h3>

                <table class=\"match-tbs desc_news\">
                    <tbody>
                    <tr>
                        <td class=\"match-tbs-title\">Match</td>
                        <td class=\"match-tbs-title\">Prix</td>
                        <td class=\"match-tbs-title\">Date</td>
                        <td class=\"match-tbs-title\">Nombre de place disponibles</td>
                        <td class=\"match-tbs-title\">Réservation Ticket</td>
                    </tr>

                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "                        <tr class=\"match-sets\">
                            <td class=\"fpt\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "matchs", array()), "html", null, true);
            echo "</td>
                            <td class=\"fpt\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                            <td class=\"fpt\">";
            // line 23
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "d-m-y"), "html", null, true);
            }
            echo "</td>
                            <td class=\"fpt\">
                                <center>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbplacdisp", array()), "html", null, true);
            echo "</center>
                            </td>
                            <td class=\"fpt\">
                                <center>
                                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ReservTick", array("m" => $this->getAttribute($context["entity"], "matchs", array()), "d" => twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "d-m-Y"), "id" => $this->getAttribute($context["entity"], "id", array()), "pd" => $this->getAttribute($context["entity"], "nbplacdisp", array()))), "html", null, true);
            echo " \"
                                       class=\"btn btn-primary active\" role=\"button\">Reserver</a></center>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    <tr>
                        <td class=\"match-more\" colspan=\"7\"></td>
                    </tr>
                    </tbody>
                </table>



            </div><!--Close Top Match-->

            ";
        // line 44
        $this->loadTemplate("@FttGestionActualite/FrontOffice/lastnews.html.twig", "FttFrontOfficeBundle:Ticket:res_tick.html.twig", 44)->display($context);
        // line 45
        echo "        </div>

    </section>





    ";
        // line 53
        echo twig_include($this->env, $context, "@FttFrontOffice/Front/sponsor.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:Ticket:res_tick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 53,  102 => 45,  100 => 44,  88 => 34,  77 => 29,  70 => 25,  63 => 23,  59 => 22,  55 => 21,  52 => 20,  48 => 19,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     <section id="single_news" class="container secondary-page">*/
/*         <div class="general general-results">*/
/*             <div class="top-score-title col-md-9">*/
/*                 <h3 class="tab-match-title secondary-page club-list">Reservation Ticket</h3>*/
/* */
/*                 <table class="match-tbs desc_news">*/
/*                     <tbody>*/
/*                     <tr>*/
/*                         <td class="match-tbs-title">Match</td>*/
/*                         <td class="match-tbs-title">Prix</td>*/
/*                         <td class="match-tbs-title">Date</td>*/
/*                         <td class="match-tbs-title">Nombre de place disponibles</td>*/
/*                         <td class="match-tbs-title">Réservation Ticket</td>*/
/*                     </tr>*/
/* */
/*                     {% for entity in entities %}*/
/*                         <tr class="match-sets">*/
/*                             <td class="fpt">{{ entity.matchs }}</td>*/
/*                             <td class="fpt">{{ entity.prix }}</td>*/
/*                             <td class="fpt">{% if entity.date %}{{ entity.date|date('d-m-y') }}{% endif %}</td>*/
/*                             <td class="fpt">*/
/*                                 <center>{{ entity.nbplacdisp }}</center>*/
/*                             </td>*/
/*                             <td class="fpt">*/
/*                                 <center>*/
/*                                     <a href="{{ path('ReservTick',{'m':entity.matchs,'d':entity.date|date('d-m-Y'),'id':entity.id,'pd':entity.nbplacdisp}) }} "*/
/*                                        class="btn btn-primary active" role="button">Reserver</a></center>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     <tr>*/
/*                         <td class="match-more" colspan="7"></td>*/
/*                     </tr>*/
/*                     </tbody>*/
/*                 </table>*/
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
