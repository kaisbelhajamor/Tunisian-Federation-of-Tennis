<?php

/* FttFrontOfficeBundle:Classement:classement.html.twig */
class __TwigTemplate_7ad273085cff992d490ccb36ff1435fe3a98281550fcc90039fd66995a6f42be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "FttFrontOfficeBundle:Classement:classement.html.twig", 2);
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
        echo "    <div class=\"col-md-12 size-img back-img\" style=\"background:transparent url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/top-background.png"), "html", null, true);
        echo ") no-repeat top center;\">
        <div class=\"effect-cover\">
            <h3 class=\"txt-advert animated\">Classement des joueurs</h3>
                <p class=\"txt-advert-sub animated\">Classement des joueurs de la fédération tunisienne de tennis ..</p>
        </div>
    </div>




     ";
        // line 14
        $context["i"] = 0;
        // line 15
        echo "      ";
        $context["i2"] = 0;
        // line 16
        echo "
   <div class=\"general general-results\">
           <div id=\"rrResult\" class=\"top-score-title right-score total-reslts col-md-9\">
               <h3 class=\"tab-match-title secondary-page club-list\">Classsment</h3>
               
                <div class=\"main\" >
                        <div class=\"tabs animated-slide-2\">
                            <ul class=\"tab-links\">
                                <li class=\"\" style=\"width: 50%\"><a href=\"#tab1111\">ATP</a></li>
                                <li class=\"\" style=\"width: 50%\"><a href=\"#tab2222\" >WTA</a></li>
                                
                               
                            </ul>
                            <div class=\"tab-content\">
                               
                                <div id=\"tab1111\" class=\"tab\" style=\"display: block; \">
                                <table class=\"tab-score\" style=\"border-collapse:initial;\">
                                  <tbody><tr class=\"top-scrore-table\"><td class=\"score-position\">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>
                                  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")));
        foreach ($context['_seq'] as $context["_key"] => $context["jr"]) {
            // line 35
            echo "                                        ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 36
            echo "                                        <tr><td class=\"score-position\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " </td><td><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jr"], "nomjoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jr"], "prenomjoueur", array()), "html", null, true);
            echo "</a></td><td>TUN</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jr"], "points", array()), "html", null, true);
            echo "</td></tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                  
                                  </tbody></table>
                                </div>
                                <div id=\"tab2222\" class=\"tab\" style=\"display: none;\">
                                <table class=\"tab-score\">
                                <tbody><tr class=\"top-scrore-table\"><td class=\"score-position\">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>
                                 ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["women"]) ? $context["women"] : $this->getContext($context, "women")));
        foreach ($context['_seq'] as $context["_key"] => $context["jr"]) {
            // line 45
            echo "                                        ";
            $context["i2"] = ((isset($context["i2"]) ? $context["i2"] : $this->getContext($context, "i2")) + 1);
            // line 46
            echo "                                        <tr><td class=\"score-position\">";
            echo twig_escape_filter($this->env, (isset($context["i2"]) ? $context["i2"] : $this->getContext($context, "i2")), "html", null, true);
            echo " </td><td><a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jr"], "nomjoueur", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jr"], "prenomjoueur", array()), "html", null, true);
            echo "</a></td><td>TUN</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["jr"], "points", array()), "html", null, true);
            echo "</td></tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  
                                
                                </tbody>
                                </table>
                                </div> 
                               
                            </div>
                            <div class=\"score-view-all\"></div>
                        </div>
                    </div>
           </div><!--Close Top Match-->
       ";
        // line 58
        $this->loadTemplate("@FttGestionActualite/FrontOffice/lastnews.html.twig", "FttFrontOfficeBundle:Classement:classement.html.twig", 58)->display($context);
        // line 59
        echo "        </div>




    ";
        // line 64
        echo twig_include($this->env, $context, "@FttFrontOffice/Front/sponsor.html.twig");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:Classement:classement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 64,  137 => 59,  135 => 58,  122 => 47,  107 => 46,  104 => 45,  100 => 44,  92 => 38,  77 => 36,  74 => 35,  70 => 34,  50 => 16,  47 => 15,  45 => 14,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     <div class="col-md-12 size-img back-img" style="background:transparent url({{ asset('img/top-background.png') }}) no-repeat top center;">*/
/*         <div class="effect-cover">*/
/*             <h3 class="txt-advert animated">Classement des joueurs</h3>*/
/*                 <p class="txt-advert-sub animated">Classement des joueurs de la fédération tunisienne de tennis ..</p>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/*      {%set i =0 %}*/
/*       {%set i2 =0 %}*/
/* */
/*    <div class="general general-results">*/
/*            <div id="rrResult" class="top-score-title right-score total-reslts col-md-9">*/
/*                <h3 class="tab-match-title secondary-page club-list">Classsment</h3>*/
/*                */
/*                 <div class="main" >*/
/*                         <div class="tabs animated-slide-2">*/
/*                             <ul class="tab-links">*/
/*                                 <li class="" style="width: 50%"><a href="#tab1111">ATP</a></li>*/
/*                                 <li class="" style="width: 50%"><a href="#tab2222" >WTA</a></li>*/
/*                                 */
/*                                */
/*                             </ul>*/
/*                             <div class="tab-content">*/
/*                                */
/*                                 <div id="tab1111" class="tab" style="display: block; ">*/
/*                                 <table class="tab-score" style="border-collapse:initial;">*/
/*                                   <tbody><tr class="top-scrore-table"><td class="score-position">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>*/
/*                                   {% for jr in men  %}*/
/*                                         {%set i =i+1 %}*/
/*                                         <tr><td class="score-position">{{ i }} </td><td><a href="">{{jr.nomjoueur}} {{jr.prenomjoueur}}</a></td><td>TUN</td><td>{{jr.points}}</td></tr>*/
/*                                     {% endfor %}*/
/*                                   */
/*                                   </tbody></table>*/
/*                                 </div>*/
/*                                 <div id="tab2222" class="tab" style="display: none;">*/
/*                                 <table class="tab-score">*/
/*                                 <tbody><tr class="top-scrore-table"><td class="score-position">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>*/
/*                                  {% for jr in women  %}*/
/*                                         {%set i2 =i2+1 %}*/
/*                                         <tr><td class="score-position">{{ i2 }} </td><td><a href="">{{jr.nomjoueur}} {{jr.prenomjoueur}}</a></td><td>TUN</td><td>{{jr.points}}</td></tr>*/
/*                                     {% endfor %}  */
/*                                 */
/*                                 </tbody>*/
/*                                 </table>*/
/*                                 </div> */
/*                                */
/*                             </div>*/
/*                             <div class="score-view-all"></div>*/
/*                         </div>*/
/*                     </div>*/
/*            </div><!--Close Top Match-->*/
/*        {% include '@FttGestionActualite/FrontOffice/lastnews.html.twig' %}*/
/*         </div>*/
/* */
/* */
/* */
/* */
/*     {{ include('@FttFrontOffice/Front/sponsor.html.twig') }}*/
/*     {% endblock %}*/
/*     */
