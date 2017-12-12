<?php

/* FttFrontOfficeBundle:Formation:liste.html.twig */
class __TwigTemplate_5ac11f26886c0b777389dd531516b1a92c56f0085c2c18e3b3abcbf3b8f20497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FttFrontOfficeBundle:Formation:liste.html.twig", 1);
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
        echo "                <section id=\"single_news\" class=\"container secondary-page\">
                    <div class=\"general general-results\">
                        <div class=\"top-score-title col-md-9\">
                            <h3 class=\"tab-match-title secondary-page club-list\">Formations des Joueurs</h3>
                            <table class=\"table table-bordered table-hover dataTable\">
                                <thead>
                                <tr>

                                    <th class=\"bg-info\">Lieux</th>
                                    <th class=\"bg-info\">Dateouverture</th>
                                    <th class=\"bg-info\">Datecloture</th>
                                    <th class=\"bg-info\">Cible</th>
                                    <th class=\"bg-info\">Inscription</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities2"]) ? $context["entities2"] : $this->getContext($context, "entities2")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "                                    <tr>

                                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieux", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 23
            if ($this->getAttribute($context["entity"], "dateOuverture", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateOuverture", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 24
            if ($this->getAttribute($context["entity"], "dateCloture", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCloture", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cible", array()), "html", null, true);
            echo "</td>
                                        <td>

                                            <a class=\"btn btn-info\"
                                               href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscrire_formation", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">s'inscrire</a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                </tbody>
                            </table>
                            <div class=\"navigation\">";
        // line 35
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["entities2"]) ? $context["entities2"] : $this->getContext($context, "entities2")));
        echo "</div>








                                <h3 class=\"tab-match-title secondary-page \">Formations des Arbitres</h3>
                                <table class=\"table table-bordered table-hover dataTable\">
                                    <thead>
                                    <tr>

                                        <th class=\"bg-info\">Lieux</th>
                                        <th class=\"bg-info\">Dateouverture</th>
                                        <th class=\"bg-info\">Datecloture</th>
                                        <th class=\"bg-info\">Cible</th>
                                        <th class=\"bg-info\">Inscription</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 58
            echo "                                        <tr>

                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieux", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 61
            if ($this->getAttribute($context["entity"], "dateOuverture", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateOuverture", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                            <td>";
            // line 62
            if ($this->getAttribute($context["entity"], "dateCloture", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCloture", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cible", array()), "html", null, true);
            echo "</td>
                                            <td>

                                                <a class=\"btn btn-info\"
                                                   href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscrire_formation", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">s'inscrire</a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                    </tbody>
                                </table>
                                <div class=\"navigation\">";
        // line 73
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "</div>


                            </div><!--Close Top Match-->

                            ";
        // line 78
        $this->loadTemplate("@FttGestionActualite/FrontOffice/lastnews.html.twig", "FttFrontOfficeBundle:Formation:liste.html.twig", 78)->display($context);
        // line 79
        echo "                        </div>

                </section>





                ";
        // line 87
        echo twig_include($this->env, $context, "@FttFrontOffice/Front/sponsor.html.twig");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:Formation:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 87,  174 => 79,  172 => 78,  164 => 73,  160 => 71,  150 => 67,  143 => 63,  137 => 62,  131 => 61,  127 => 60,  123 => 58,  119 => 57,  94 => 35,  90 => 33,  80 => 29,  73 => 25,  67 => 24,  61 => 23,  57 => 22,  53 => 20,  49 => 19,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/*             {% block body %}*/
/*                 <section id="single_news" class="container secondary-page">*/
/*                     <div class="general general-results">*/
/*                         <div class="top-score-title col-md-9">*/
/*                             <h3 class="tab-match-title secondary-page club-list">Formations des Joueurs</h3>*/
/*                             <table class="table table-bordered table-hover dataTable">*/
/*                                 <thead>*/
/*                                 <tr>*/
/* */
/*                                     <th class="bg-info">Lieux</th>*/
/*                                     <th class="bg-info">Dateouverture</th>*/
/*                                     <th class="bg-info">Datecloture</th>*/
/*                                     <th class="bg-info">Cible</th>*/
/*                                     <th class="bg-info">Inscription</th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for entity in entities2 %}*/
/*                                     <tr>*/
/* */
/*                                         <td>{{ entity.lieux }}</td>*/
/*                                         <td>{% if entity.dateOuverture %}{{ entity.dateOuverture|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                         <td>{% if entity.dateCloture %}{{ entity.dateCloture|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                         <td>{{ entity.cible }}</td>*/
/*                                         <td>*/
/* */
/*                                             <a class="btn btn-info"*/
/*                                                href="{{ path('inscrire_formation', { 'id': entity.id }) }}">s'inscrire</a>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <div class="navigation">{{ knp_pagination_render(entities2) }}</div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                                 <h3 class="tab-match-title secondary-page ">Formations des Arbitres</h3>*/
/*                                 <table class="table table-bordered table-hover dataTable">*/
/*                                     <thead>*/
/*                                     <tr>*/
/* */
/*                                         <th class="bg-info">Lieux</th>*/
/*                                         <th class="bg-info">Dateouverture</th>*/
/*                                         <th class="bg-info">Datecloture</th>*/
/*                                         <th class="bg-info">Cible</th>*/
/*                                         <th class="bg-info">Inscription</th>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for entity in entities %}*/
/*                                         <tr>*/
/* */
/*                                             <td>{{ entity.lieux }}</td>*/
/*                                             <td>{% if entity.dateOuverture %}{{ entity.dateOuverture|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                             <td>{% if entity.dateCloture %}{{ entity.dateCloture|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                             <td>{{ entity.cible }}</td>*/
/*                                             <td>*/
/* */
/*                                                 <a class="btn btn-info"*/
/*                                                    href="{{ path('inscrire_formation', { 'id': entity.id }) }}">s'inscrire</a>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                                 <div class="navigation">{{ knp_pagination_render(entities) }}</div>*/
/* */
/* */
/*                             </div><!--Close Top Match-->*/
/* */
/*                             {% include '@FttGestionActualite/FrontOffice/lastnews.html.twig' %}*/
/*                         </div>*/
/* */
/*                 </section>*/
/* */
/* */
/* */
/* */
/* */
/*                 {{ include('@FttFrontOffice/Front/sponsor.html.twig') }}*/
/*             {% endblock %}*/
/* */
