<?php

/* @FttGestionActualite/FrontOffice/lastnews.html.twig */
class __TwigTemplate_42271cc75cad503f295fd43a0082e9b9928c74e1f33afbedfd46fc6f9e95a111 extends Twig_Template
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
        echo "<div class=\"col-md-3 right-column\">
    <div class=\"top-score-title col-md-12 right-title\">
        <h3>Derniéres Actualités</h3>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('count_extension')->getActus());
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 5
            echo "            <div class=\"right-content\">
                <p class=\"news-title-right\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["act"], "titre", array()), "html", null, true);
            echo "</p>
                <p class=\"txt-right\">";
            // line 7
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["act"], "description", array())) > 103)) ? ((twig_slice($this->env, $this->getAttribute($context["act"], "description", array()), 0, 103) . "...")) : ($this->getAttribute($context["act"], "description", array()))), "html", null, true);
            echo "</p>
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ftt_gestion_actualite_front_show", array("id" => $this->getAttribute($context["act"], "id", array()))), "html", null, true);
            echo "\" class=\"ca-more\"><i
                            class=\"fa fa-angle-double-right\"></i>Plus...</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    </div>
    <div class=\"top-score-title col-md-12 right-title\">
        <h3>Photos</h3>
        <ul class=\"right-last-photo\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('count_extension')->getActus());
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 18
            echo "                <li>
                    <div class=\"jm-item second\">
                        <div class=\"jm-item-wrapper\">
                            <div class=\"jm-item-image\">
                                ";
            // line 22
            if ( !twig_test_empty($this->getAttribute($context["img"], "getWebPath", array(), "method"))) {
                // line 23
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["img"], "getWebPath", array(), "method")), "html", null, true);
                echo "\" alt=\"\">
                                ";
            }
            // line 25
            echo "                                <div class=\"jm-item-description\">
                                    <div class=\"jm-item-button\">
                                        <i class=\"fa fa-plus\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@FttGestionActualite/FrontOffice/lastnews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  74 => 25,  68 => 23,  66 => 22,  60 => 18,  56 => 17,  49 => 12,  39 => 8,  35 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="col-md-3 right-column">*/
/*     <div class="top-score-title col-md-12 right-title">*/
/*         <h3>Derniéres Actualités</h3>*/
/*         {% for act in getActus() %}*/
/*             <div class="right-content">*/
/*                 <p class="news-title-right">{{ act.titre }}</p>*/
/*                 <p class="txt-right">{{ act.description|length > 103 ? act.description|slice(0, 103) ~ '...' : act.description }}</p>*/
/*                 <a href="{{ path('ftt_gestion_actualite_front_show', { 'id': act.id }) }}" class="ca-more"><i*/
/*                             class="fa fa-angle-double-right"></i>Plus...</a>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*     </div>*/
/*     <div class="top-score-title col-md-12 right-title">*/
/*         <h3>Photos</h3>*/
/*         <ul class="right-last-photo">*/
/*             {% for img in getActus() %}*/
/*                 <li>*/
/*                     <div class="jm-item second">*/
/*                         <div class="jm-item-wrapper">*/
/*                             <div class="jm-item-image">*/
/*                                 {% if img.getWebPath() is not empty %}*/
/*                                     <img src="{{ asset(img.getWebPath()) }}" alt="">*/
/*                                 {% endif %}*/
/*                                 <div class="jm-item-description">*/
/*                                     <div class="jm-item-button">*/
/*                                         <i class="fa fa-plus"></i>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
