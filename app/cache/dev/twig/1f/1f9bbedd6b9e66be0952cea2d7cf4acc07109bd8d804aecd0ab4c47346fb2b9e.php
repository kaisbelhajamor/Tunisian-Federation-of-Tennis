<?php

/* FttFrontOfficeBundle:ResultatMedical:pdf.html.twig */
class __TwigTemplate_5b1283e5a4d2eaaf16a20b00091c7e0336e006b0f91357089fc86440134e565c extends Twig_Template
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
        // line 2
        echo "<div style=\"width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878\">
<div style=\"width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878\">
       <span style=\"font-size:50px; font-weight:bold\">resultat Medical</span>
       <br><br>
       <span style=\"font-size:30px \" ><p>Ce document atteste que </p></span>
       <br><br>
       <span style=\"font-size:30px\" ><b>malek jazi </b></span><br/><br/>
       <span style=\"font-size:25px\"><p>a passe son test AntiDopage Taux d hemoglobine, proteines servant au transport du dioxygene. Taux normal :12 à 18g/dL,
Hematocrite : pourcentage du volume des cellules par rapport a celui du sang. Taux normal : 40 à 50%,
Taux de reticulocytes, jeunes globules rouges. Taux normal : 0,5 à 1,5%. </p></span> <br/><br/>
       <span style=\"font-size:30px\">Resultat Negative</span> <br/><br/>
       <span style=\"font-size:25px\"><i> delivre le ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/y"), "html", null, true);
        echo "</i></span><br>
       
      <span style=\"font-size:30px\"></span>
      
      
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:ResultatMedical:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 13,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">*/
/* <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">*/
/*        <span style="font-size:50px; font-weight:bold">resultat Medical</span>*/
/*        <br><br>*/
/*        <span style="font-size:30px " ><p>Ce document atteste que </p></span>*/
/*        <br><br>*/
/*        <span style="font-size:30px" ><b>malek jazi </b></span><br/><br/>*/
/*        <span style="font-size:25px"><p>a passe son test AntiDopage Taux d hemoglobine, proteines servant au transport du dioxygene. Taux normal :12 à 18g/dL,*/
/* Hematocrite : pourcentage du volume des cellules par rapport a celui du sang. Taux normal : 40 à 50%,*/
/* Taux de reticulocytes, jeunes globules rouges. Taux normal : 0,5 à 1,5%. </p></span> <br/><br/>*/
/*        <span style="font-size:30px">Resultat Negative</span> <br/><br/>*/
/*        <span style="font-size:25px"><i> delivre le {{"now"|date("d/m/y")}}</i></span><br>*/
/*        */
/*       <span style="font-size:30px"></span>*/
/*       */
/*       */
/* </div>*/
/* </div>*/
/* */
/* */
