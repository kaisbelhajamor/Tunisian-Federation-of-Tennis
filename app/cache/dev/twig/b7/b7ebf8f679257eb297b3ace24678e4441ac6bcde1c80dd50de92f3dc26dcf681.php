<?php

/* FttBackofficeBundle:InscritList:envoiMail.html.twig */
class __TwigTemplate_f190b7d059d071471ed8bbf5c77f033f03b392436c719bd2d4d57ec6b9d99f04 extends Twig_Template
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
        echo "
<h3 style=\"text-align: center;\"><img alt=\"\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : $this->getContext($context, "logo")), "html", null, true);
        echo "\" style=\"float:left; height:100px; margin-right:10px; width:100px\" /></h3>

<h1 style=\"text-align: center;\"><span style=\"font-family:courier new,courier,monospace\">Fédération Tunisienne de Tennis</span></h1>

<p style=\"text-align: center;\"><span style=\"font-family:courier new,courier,monospace\">Departement des formations";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["current_date"]) ? $context["current_date"] : $this->getContext($context, "current_date")), "Y-m-d"), "html", null, true);
        echo "</span></p>

<hr />
<p></p>
Nous avons confirmé votre participation à la formation sous le nom de ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "</p>
<p> description: ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        echo " </p>
<p>date d'ouverture : ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateov"]) ? $context["dateov"] : $this->getContext($context, "dateov")), "Y-m-d H:i:s"), "html", null, true);
        echo " </p>
<p>Date de cloture : ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateclot"]) ? $context["dateclot"] : $this->getContext($context, "dateclot")), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>

<p>Lieux : ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["lieux"]) ? $context["lieux"] : $this->getContext($context, "lieux")), "html", null, true);
        echo "</p>
<p></p>
<p></p>
<p></p>
<p>Cordialement, </p>
<p>Responsable des formations FTT </p>

";
    }

    public function getTemplateName()
    {
        return "FttBackofficeBundle:InscritList:envoiMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* */
/* <h3 style="text-align: center;"><img alt="" src="{{ logo }}" style="float:left; height:100px; margin-right:10px; width:100px" /></h3>*/
/* */
/* <h1 style="text-align: center;"><span style="font-family:courier new,courier,monospace">Fédération Tunisienne de Tennis</span></h1>*/
/* */
/* <p style="text-align: center;"><span style="font-family:courier new,courier,monospace">Departement des formations{{ current_date|date('Y-m-d') }}</span></p>*/
/* */
/* <hr />*/
/* <p></p>*/
/* Nous avons confirmé votre participation à la formation sous le nom de {{nom}}</p>*/
/* <p> description: {{description}} </p>*/
/* <p>date d'ouverture : {{dateov|date('Y-m-d H:i:s') }} </p>*/
/* <p>Date de cloture : {{dateclot|date('Y-m-d H:i:s') }}</p>*/
/* */
/* <p>Lieux : {{lieux}}</p>*/
/* <p></p>*/
/* <p></p>*/
/* <p></p>*/
/* <p>Cordialement, </p>*/
/* <p>Responsable des formations FTT </p>*/
/* */
/* */
