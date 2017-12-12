<?php

/* FttGestionActualiteBundle:FrontOffice:listactualitesInternationales.html.twig */
class __TwigTemplate_f6e0541a39f6206c8fb922734f8d6acb5c89f4a0d205c9563729e8a05be00dc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FttGestionActualiteBundle:FrontOffice:listactualitesInternationales.html.twig", 1);
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
        echo "    <section class=\"drawer\">
        <div class=\"col-md-12 size-img back-img\" style=\"background:transparent url(";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/register.jpg"), "html", null, true);
        echo ") no-repeat top center;\">
            <div class=\"effect-cover\">
                <h3 class=\"txt-advert animated\">Actualités InterNationales</h3>
                <p class=\"txt-advert-sub animated\">Restez branché avec nous pour plus d'actualités ..</p>
            </div>
        </div>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) ? $context["actualites"] : $this->getContext($context, "actualites")));
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 11
            echo "

            <div class=\"col-md-12 news-page\">
                <img class=\"img-djoko\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["actu"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" alt=\"\">


                <div class=\"col-md-10 data-news-pg\">
                    <p class=\"news-dd\">
                        <span class=\"day\">";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actu"], "date", array()), "d"), "html", null, true);
            echo "</span>
                        <span class=\"month\">";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actu"], "date", array()), "F"), "html", null, true);
            echo "</span>
                        <span class=\"year\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["actu"], "date", array()), "Y"), "html", null, true);
            echo "</span>

                    </p>
                    </p>
                    <h3>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["actu"], "titre", array()), "html", null, true);
            echo "</h3>
                    <p>";
            // line 26
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["actu"], "description", array())) > 250)) ? ((twig_slice($this->env, $this->getAttribute($context["actu"], "description", array()), 0, 250) . "...")) : ($this->getAttribute($context["actu"], "description", array()))), "html", null, true);
            echo ".</p>
                    <div class=\"col-md-12 news-more\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ftt_gestion_actualite_front_show", array("id" => $this->getAttribute($context["actu"], "id", array()))), "html", null, true);
            echo "\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>Plus...</a></div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "

    </section>

";
    }

    public function getTemplateName()
    {
        return "FttGestionActualiteBundle:FrontOffice:listactualitesInternationales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  83 => 27,  79 => 26,  75 => 25,  68 => 21,  64 => 20,  60 => 19,  52 => 14,  47 => 11,  43 => 10,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     <section class="drawer">*/
/*         <div class="col-md-12 size-img back-img" style="background:transparent url({{ asset('images/register.jpg') }}) no-repeat top center;">*/
/*             <div class="effect-cover">*/
/*                 <h3 class="txt-advert animated">Actualités InterNationales</h3>*/
/*                 <p class="txt-advert-sub animated">Restez branché avec nous pour plus d'actualités ..</p>*/
/*             </div>*/
/*         </div>*/
/*         {% for actu in actualites %}*/
/* */
/* */
/*             <div class="col-md-12 news-page">*/
/*                 <img class="img-djoko" src="{{ asset(actu.getWebPath()) }}" alt="">*/
/* */
/* */
/*                 <div class="col-md-10 data-news-pg">*/
/*                     <p class="news-dd">*/
/*                         <span class="day">{{ actu.date| date('d') }}</span>*/
/*                         <span class="month">{{ actu.date | date('F') }}</span>*/
/*                         <span class="year">{{ actu.date | date('Y') }}</span>*/
/* */
/*                     </p>*/
/*                     </p>*/
/*                     <h3>{{ actu.titre }}</h3>*/
/*                     <p>{{ actu.description|length > 250 ? actu.description|slice(0, 250) ~ '...' : actu.description  }}.</p>*/
/*                     <div class="col-md-12 news-more"><a href="{{ path('ftt_gestion_actualite_front_show', { 'id': actu.id }) }}" class="ca-more"><i class="fa fa-angle-double-right"></i>Plus...</a></div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/* */
/*     </section>*/
/* */
/* {% endblock %}*/
