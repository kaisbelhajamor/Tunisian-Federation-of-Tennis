<?php

/* @FttGestionActualite/FrontOffice/showActualite.html.twig */
class __TwigTemplate_aaa030e02c0717740054bd314d21cfd553188a57ab18d5ebee73ba5b32966c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FttGestionActualite/FrontOffice/showActualite.html.twig", 1);
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
        echo "<section id=\"single_news\" class=\"container secondary-page\">
    <div class=\"general general-results\">
        <div class=\"top-score-title col-md-9\">
            <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "titre", array()), "html", null, true);
        echo "<span class=\"point-little\">.</span></h3>
            <center></center>
            ";
        // line 8
        $context["parags"] = twig_split_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "description", array()), ".");
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parags"]) ? $context["parags"] : $this->getContext($context, "parags")));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 10
            echo "                <p class=\"desc_news\">";
            echo twig_escape_filter($this->env, $context["para"], "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "

            ";
        // line 14
        if ( !$this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : null), "auteur", array(), "any", true, true)) {
            // line 15
            echo "            <p class=\"desc_news important_news data\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('count_extension')->entityUser($this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "auteur", array())), "username", array()), "html", null, true);
            echo " <i class=\"fa fa-calendar\"></i>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "date", array()), "d/m/y"), "html", null, true);
            echo "</p>
            ";
        }
        // line 17
        echo "                ";
        $context["tags"] = twig_split_filter($this->env, $this->getAttribute((isset($context["actualite"]) ? $context["actualite"] : $this->getContext($context, "actualite")), "tags", array()), " ");
        // line 18
        echo "
            <div class=\"tab_news\"><i class=\"fa fa-tag\"></i><span>TAGS:</span>

                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 22
            echo "                    <a href=\"#\" class=\"tag\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "


            </div>
            <div class=\"tab_news\">
            ";
        // line 29
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
            </div>




        </div><!--Close Top Match-->


";
        // line 38
        $this->loadTemplate("@FttGestionActualite/FrontOffice/lastnews.html.twig", "@FttGestionActualite/FrontOffice/showActualite.html.twig", 38)->display($context);
        // line 39
        echo "    </div></section>


    ";
        // line 42
        $this->loadTemplate("@FttFrontOffice/Front/sponsor.html.twig", "@FttGestionActualite/FrontOffice/showActualite.html.twig", 42)->display($context);
    }

    public function getTemplateName()
    {
        return "@FttGestionActualite/FrontOffice/showActualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 42,  113 => 39,  111 => 38,  99 => 29,  92 => 24,  83 => 22,  79 => 21,  74 => 18,  71 => 17,  63 => 15,  61 => 14,  57 => 12,  48 => 10,  43 => 9,  41 => 8,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%  extends '::base.html.twig' %}*/
/* {% block body %}*/
/* <section id="single_news" class="container secondary-page">*/
/*     <div class="general general-results">*/
/*         <div class="top-score-title col-md-9">*/
/*             <h3>{{ actualite.titre }}<span class="point-little">.</span></h3>*/
/*             <center></center>*/
/*             {% set parags =  actualite.description|split('.')  %}*/
/*             {%   for para in parags %}*/
/*                 <p class="desc_news">{{ para }}</p>*/
/*             {% endfor %}*/
/* */
/* */
/*             {% if actualite.auteur is not defined   %}*/
/*             <p class="desc_news important_news data">{{ entityUser(actualite.auteur).username }} <i class="fa fa-calendar"></i>{{ actualite.date|date('d/m/y') }}</p>*/
/*             {% endif %}*/
/*                 {% set tags =  actualite.tags|split(' ')  %}*/
/* */
/*             <div class="tab_news"><i class="fa fa-tag"></i><span>TAGS:</span>*/
/* */
/*                 {%   for tag in tags %}*/
/*                     <a href="#" class="tag">{{ tag }}</a>*/
/*                 {% endfor %}*/
/* */
/* */
/* */
/*             </div>*/
/*             <div class="tab_news">*/
/*             {{ socialButtons() }}*/
/*             </div>*/
/* */
/* */
/* */
/* */
/*         </div><!--Close Top Match-->*/
/* */
/* */
/* {% include '@FttGestionActualite/FrontOffice/lastnews.html.twig' %}*/
/*     </div></section>*/
/* */
/* */
/*     {% include "@FttFrontOffice/Front/sponsor.html.twig" %}*/
/* {%  endblock  %}*/
