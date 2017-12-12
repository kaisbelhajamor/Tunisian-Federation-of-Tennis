<?php

/* FttBackofficeBundle:Terrain:index.html.twig */
class __TwigTemplate_6b35659e73a7475404e48c8eeba7ea18e23cd3d3e74a135cb25fd943b8c00a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FttBackofficeBundle::accueil_admin.html.twig", "FttBackofficeBundle:Terrain:index.html.twig", 2);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"box\">
        <div class=\"box-header with-border\"><h3 class=\"box-title\">Liste des Matchs </h3></div>
        <div class=\"box-body\">
            <table class=\"table table-bordered table-hover dataTable\">
                <thead>
                    <tr>
                       <th>Id</th>
                <th>Nomterrain</th>
                <th>Adresseterrain</th>
                <th>Capacite</th>
                <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "
                        <tr>

                           <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terrain_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomTerrain", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresseTerrain", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "capacite", array()), "html", null, true);
            echo "</td>
                            <td>


                                <a class=\"btn btn-danger\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terrain_delete2", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
                                <a class=\"btn btn-info\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terrain_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>


                            </td>


                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tbody>
            </table>
            <p>        </p>

            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("terrain_new");
        echo "\" class=\"btn btn-info\" role=\"boutton\" > Ajouter un Terrain </a>
          
        </div></div>



";
    }

    public function getTemplateName()
    {
        return "FttBackofficeBundle:Terrain:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 44,  96 => 40,  82 => 32,  78 => 31,  71 => 27,  67 => 26,  63 => 25,  57 => 24,  52 => 21,  48 => 20,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/*    */
/* {% extends "FttBackofficeBundle::accueil_admin.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="box">*/
/*         <div class="box-header with-border"><h3 class="box-title">Liste des Matchs </h3></div>*/
/*         <div class="box-body">*/
/*             <table class="table table-bordered table-hover dataTable">*/
/*                 <thead>*/
/*                     <tr>*/
/*                        <th>Id</th>*/
/*                 <th>Nomterrain</th>*/
/*                 <th>Adresseterrain</th>*/
/*                 <th>Capacite</th>*/
/*                 <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/* */
/*                         <tr>*/
/* */
/*                            <td><a href="{{ path('terrain_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.nomTerrain }}</td>*/
/*                 <td>{{ entity.adresseTerrain }}</td>*/
/*                 <td>{{ entity.capacite }}</td>*/
/*                             <td>*/
/* */
/* */
/*                                 <a class="btn btn-danger" href="{{ path('terrain_delete2', { 'id': entity.id }) }}">Supprimer</a>*/
/*                                 <a class="btn btn-info" href="{{ path('terrain_edit', { 'id': entity.id }) }}">Modifier</a>*/
/* */
/* */
/*                             </td>*/
/* */
/* */
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <p>        </p>*/
/* */
/*             <a href="{{ path('terrain_new') }}" class="btn btn-info" role="boutton" > Ajouter un Terrain </a>*/
/*           */
/*         </div></div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/*     */
/* */
