<?php

/* FttFrontOfficeBundle:Matchs:ListeTerrains.html.twig */
class __TwigTemplate_543acc4a3e3f2be4b246b1c4445ae935206f5a95065e143e2f8d6b4789f70593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FttFrontOfficeBundle:Matchs:ListeTerrains.html.twig", 1);
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
        echo "    <center>
    <div class=\"general general-results players\">  
       
        <div class=\"top-score-title right-score col-md-9\">
            <div class=\"top-score-title player-vs\">

                <div class=\"tabs standard single-pl\">

                    <div class=\"tab-content single-match\">
                        <div id=\"tab1\" class=\"tab active\">

                            <h3 class=\"tab-match-title\">Liste des Terrains </h3>


                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "                                <div id=\"tab1111\" class=\"tab active\">
                                    <table class=\"match-tbs table table-bordered hover\">
                                        <tbody>
                                            <tr >
                                                <td class=\"match-tbs-title\" colspan=\"7\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomTerrain", array()), "html", null, true);
            echo "</td></tr>

                                            <tr class=\"match-sets\">
                                                <td class=\"fpt\">Adresse</td><td class=\"fpt\">Capacité</td>
                                            </tr>
                                            <tr>
                                                <td class=\"fpt\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresseTerrain", array()), "html", null, true);
            echo "</td><td class=\"fpt\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "capacite", array()), "html", null, true);
            echo "</td>

                                            </tr>    

                                        </tbody>
                                         </table>
                                    <iframe
                                        width=\"600\"
                                        height=\"450\"
                                        frameborder=\"0\" style=\"border:0\"
                                        src=\"https://www.google.com/maps/embed/v1/place?key=AIzaSyASsmCtLKYuThBXUSk7DSv01sMst58kUwI 
                                        &q=";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomTerrain", array()), "html", null, true);
            echo "\" allowfullscreen>
                                    </iframe>
                                </div>
                                <br><br>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    
                        </div> </div> </div> </div> </div>

    </div>

</center>
";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:Matchs:ListeTerrains.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 43,  82 => 39,  66 => 28,  57 => 22,  51 => 18,  47 => 17,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     <center>*/
/*     <div class="general general-results players">  */
/*        */
/*         <div class="top-score-title right-score col-md-9">*/
/*             <div class="top-score-title player-vs">*/
/* */
/*                 <div class="tabs standard single-pl">*/
/* */
/*                     <div class="tab-content single-match">*/
/*                         <div id="tab1" class="tab active">*/
/* */
/*                             <h3 class="tab-match-title">Liste des Terrains </h3>*/
/* */
/* */
/*                             {% for entity in entities %}*/
/*                                 <div id="tab1111" class="tab active">*/
/*                                     <table class="match-tbs table table-bordered hover">*/
/*                                         <tbody>*/
/*                                             <tr >*/
/*                                                 <td class="match-tbs-title" colspan="7">{{ entity.nomTerrain }}</td></tr>*/
/* */
/*                                             <tr class="match-sets">*/
/*                                                 <td class="fpt">Adresse</td><td class="fpt">Capacité</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td class="fpt">{{ entity.adresseTerrain }}</td><td class="fpt">{{ entity.capacite }}</td>*/
/* */
/*                                             </tr>    */
/* */
/*                                         </tbody>*/
/*                                          </table>*/
/*                                     <iframe*/
/*                                         width="600"*/
/*                                         height="450"*/
/*                                         frameborder="0" style="border:0"*/
/*                                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyASsmCtLKYuThBXUSk7DSv01sMst58kUwI */
/*                                         &q={{ entity.nomTerrain }}" allowfullscreen>*/
/*                                     </iframe>*/
/*                                 </div>*/
/*                                 <br><br>*/
/*                             {% endfor %}    */
/*                         </div> </div> </div> </div> </div>*/
/* */
/*     </div>*/
/* */
/* </center>*/
/* {% endblock %}*/
/* */
/* */
/* */
