<?php

/* FttFrontOfficeBundle:Club:liste.html.twig */
class __TwigTemplate_e56a8a1bb5bc4f31eafe7ee4a9d3d72a19805f12750c8523bc35927f75470bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FttFrontOfficeBundle:Club:liste.html.twig", 1);
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
        echo "    <section id=\"single_news\" class=\"container secondary-page\">
        <div class=\"general general-results\">
            <div class=\"top-score-title col-md-9\">
                <h3 class=\"tab-match-title secondary-page club-list\">Liste des clubs</h3>

                    <table class=\"match-tbs desc_news\">
                        <tbody>
                        <tr>
                            <td class=\"match-tbs-title\" colspan=\"7\">Club affecté</td>
                        </tr>
                        <tr class=\"match-sets\">
                            <td class=\"fpt\">Nom de club</td>
                            <td class=\"fpt\">Adresse</td>
                            <td class=\"fpt\">Logo</td>
                        </tr>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                            <tr class=\"match-sets\">
                                <td class=\"fpt\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                <td class=\"fpt\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                                <td class=\"fpt\">    ";
            // line 22
            if ( !twig_test_empty($this->getAttribute($context["entity"], "path", array()))) {
                // line 23
                echo "
                                        <center><img
                                                    class=\"profile-user-img img-responsive img-circle logoclub\"
                                                    src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["entity"], "getWebPath", array(), "method")), "html", null, true);
                echo "\"
                                                    alt=\"User profile picture\"></center>

                                    ";
            }
            // line 29
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </tbody>
                    </table>

                    <center>
                        <div class=\"navigation\">";
        // line 36
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo " </div>
                    </center>


            </div><!--Close Top Match-->

            ";
        // line 42
        $this->loadTemplate("@FttGestionActualite/FrontOffice/lastnews.html.twig", "FttFrontOfficeBundle:Club:liste.html.twig", 42)->display($context);
        // line 43
        echo "        </div>

    </section>





    ";
        // line 51
        echo twig_include($this->env, $context, "@FttFrontOffice/Front/sponsor.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:Club:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 51,  102 => 43,  100 => 42,  91 => 36,  85 => 32,  77 => 29,  70 => 26,  65 => 23,  63 => 22,  59 => 21,  55 => 20,  52 => 19,  48 => 18,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     <section id="single_news" class="container secondary-page">*/
/*         <div class="general general-results">*/
/*             <div class="top-score-title col-md-9">*/
/*                 <h3 class="tab-match-title secondary-page club-list">Liste des clubs</h3>*/
/* */
/*                     <table class="match-tbs desc_news">*/
/*                         <tbody>*/
/*                         <tr>*/
/*                             <td class="match-tbs-title" colspan="7">Club affecté</td>*/
/*                         </tr>*/
/*                         <tr class="match-sets">*/
/*                             <td class="fpt">Nom de club</td>*/
/*                             <td class="fpt">Adresse</td>*/
/*                             <td class="fpt">Logo</td>*/
/*                         </tr>*/
/*                         {% for entity in entities %}*/
/*                             <tr class="match-sets">*/
/*                                 <td class="fpt">{{ entity.nom }}</td>*/
/*                                 <td class="fpt">{{ entity.adresse }}</td>*/
/*                                 <td class="fpt">    {% if entity.path is not empty %}*/
/* */
/*                                         <center><img*/
/*                                                     class="profile-user-img img-responsive img-circle logoclub"*/
/*                                                     src="{{ asset(entity.getWebPath()) }}"*/
/*                                                     alt="User profile picture"></center>*/
/* */
/*                                     {% endif %}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                     <center>*/
/*                         <div class="navigation">{{ knp_pagination_render(entities) }} </div>*/
/*                     </center>*/
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
