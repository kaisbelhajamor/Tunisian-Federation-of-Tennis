<?php

/* FttBackofficeBundle:InscritList:InscritFormationList.html.twig */
class __TwigTemplate_c61ef74b7ce5c1812f63d757b6657a0a2f0f85cfc924d5a873f25fa2776ac3f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FttBackofficeBundle::accueil_admin.html.twig", "FttBackofficeBundle:InscritList:InscritFormationList.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FttBackofficeBundle::accueil_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

    <div class=\"box\">
        <div class=\"box-header with-border\"><h3 class=\"box-title\">Liste des Inscrits</h3></div>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "confimerFormation"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "            <div class=\"alert alert-success fade in\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
                <strong>Succés!</strong> ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
        <div class=\"box-body\">
            <table class=\"table table-bordered table-hover dataTable\">
                <thead>
                    <tr>
                        <th class=\"bg-info\">Nom</th>
                        <th class=\"bg-info\">Prenom</th>
                        <th class=\"bg-info\">Cin</th>
                        <th class=\"bg-info\">Mail</th>
                        <th class=\"bg-info\">Grade</th>
                        <th class=\"bg-info\">Etat</th>
                        <th class=\"bg-info\">Id Formation</th>
                        <th class=\"bg-info\">Action</th>

                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "                        <tr>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cin", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "mail", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "grade", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etat", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idformation", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 41
            if (($this->getAttribute($context["entity"], "etat", array()) == "en cours")) {
                // line 42
                echo "                                    <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("confirmer_formation", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Confirmer</a>
                                ";
            } else {
                // line 44
                echo "                                    <a class=\"btn btn-danger disabled\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("confirmer_formation", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Confirmer</a>


                                ";
            }
            // line 48
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </tbody>
            </table>
        </div></div>

    <div class=\"navigation\">";
        // line 55
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
    </div> 

";
    }

    public function getTemplateName()
    {
        return "FttBackofficeBundle:InscritList:InscritFormationList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 55,  133 => 51,  125 => 48,  117 => 44,  111 => 42,  109 => 41,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  77 => 32,  73 => 31,  54 => 14,  45 => 11,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FttBackofficeBundle::accueil_admin.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* */
/*     <div class="box">*/
/*         <div class="box-header with-border"><h3 class="box-title">Liste des Inscrits</h3></div>*/
/*         {% for flashMessage in app.session.flashbag.get('confimerFormation') %}*/
/*             <div class="alert alert-success fade in">*/
/*                 <a href="#" class="close" data-dismiss="alert">&times;</a>*/
/*                 <strong>Succés!</strong> {{ flashMessage }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="box-body">*/
/*             <table class="table table-bordered table-hover dataTable">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th class="bg-info">Nom</th>*/
/*                         <th class="bg-info">Prenom</th>*/
/*                         <th class="bg-info">Cin</th>*/
/*                         <th class="bg-info">Mail</th>*/
/*                         <th class="bg-info">Grade</th>*/
/*                         <th class="bg-info">Etat</th>*/
/*                         <th class="bg-info">Id Formation</th>*/
/*                         <th class="bg-info">Action</th>*/
/* */
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td>{{ entity.nom}}</a></td>*/
/*                             <td>{{ entity.prenom }}</td>*/
/*                             <td>{{ entity.cin }}</td>*/
/*                             <td>{{ entity.mail }}</td>*/
/*                             <td>{{ entity.grade }}</td>*/
/*                             <td>{{ entity.etat }}</td>*/
/*                             <td>{{ entity.idformation }}</td>*/
/*                             <td>*/
/*                                 {% if entity.etat == "en cours" %}*/
/*                                     <a class="btn btn-success" href="{{ path('confirmer_formation', { 'id': entity.id }) }}">Confirmer</a>*/
/*                                 {% else %}*/
/*                                     <a class="btn btn-danger disabled"  href="{{ path('confirmer_formation', { 'id': entity.id }) }}">Confirmer</a>*/
/* */
/* */
/*                                 {% endif %}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div></div>*/
/* */
/*     <div class="navigation">{{ knp_pagination_render(entities) }}*/
/*     </div> */
/* */
/* {% endblock %}*/
/* */
