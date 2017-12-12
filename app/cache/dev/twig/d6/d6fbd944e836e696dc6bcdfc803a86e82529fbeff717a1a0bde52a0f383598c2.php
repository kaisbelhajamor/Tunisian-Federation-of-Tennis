<?php

/* FttFrontOfficeBundle:Ticket:showReserv.html.twig */
class __TwigTemplate_c28edf94ab718eb678afff817c0f6d2e3bd69f8fb8de5628ecb8e0a03c888e8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::base.html.twig", "FttFrontOfficeBundle:Ticket:showReserv.html.twig", 4);
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <section id=\"single_news\" class=\"container secondary-page\">
        <div class=\"general general-results\">
            <div class=\"top-score-title col-md-9\">
                <h3 class=\"tab-match-title secondary-page club-list\">Reservation Ticket</h3>

                <table class=\"match-tbs desc_news\">
                    <tr>
                        <th class=\"match-tbs-title\"><center>login</center></th>
                        <th class=\"match-tbs-title\"><center>date</center></th>
                        <th class=\"match-tbs-title\"><center>Match</center></th>
                    </tr>
                    <tbody>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                        <tr class=\"match-sets\">

                            <td class=\"fpt\"><center>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "login", array()), "html", null, true);
            echo "</center></td>

                            <td class=\"fpt\"><center>";
            // line 23
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "d-m-Y"), "html", null, true);
            }
            echo "</center></td>
                            <td class=\"fpt\"><center> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "matchs", array()), "html", null, true);
            echo "</center></td>



                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    <tr><td class=\"match-more\" colspan=\"7\"></td></tr>
                    </tbody>
                </table>



            </div><!--Close Top Match-->

            ";
        // line 38
        $this->loadTemplate("@FttGestionActualite/FrontOffice/lastnews.html.twig", "FttFrontOfficeBundle:Ticket:showReserv.html.twig", 38)->display($context);
        // line 39
        echo "        </div>

    </section>





    ";
        // line 47
        echo twig_include($this->env, $context, "@FttFrontOffice/Front/sponsor.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:Ticket:showReserv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 47,  88 => 39,  86 => 38,  76 => 30,  64 => 24,  58 => 23,  53 => 21,  49 => 19,  45 => 18,  31 => 6,  28 => 5,  11 => 4,);
    }
}
/* */
/* */
/* */
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     <section id="single_news" class="container secondary-page">*/
/*         <div class="general general-results">*/
/*             <div class="top-score-title col-md-9">*/
/*                 <h3 class="tab-match-title secondary-page club-list">Reservation Ticket</h3>*/
/* */
/*                 <table class="match-tbs desc_news">*/
/*                     <tr>*/
/*                         <th class="match-tbs-title"><center>login</center></th>*/
/*                         <th class="match-tbs-title"><center>date</center></th>*/
/*                         <th class="match-tbs-title"><center>Match</center></th>*/
/*                     </tr>*/
/*                     <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr class="match-sets">*/
/* */
/*                             <td class="fpt"><center>{{ entity.login }}</center></td>*/
/* */
/*                             <td class="fpt"><center>{% if entity.date %}{{ entity.date|date('d-m-Y') }}{% endif %}</center></td>*/
/*                             <td class="fpt"><center> {{ entity.matchs }}</center></td>*/
/* */
/* */
/* */
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     <tr><td class="match-more" colspan="7"></td></tr>*/
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
