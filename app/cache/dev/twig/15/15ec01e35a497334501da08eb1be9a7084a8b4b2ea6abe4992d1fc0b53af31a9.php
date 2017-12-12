<?php

/* FttUserBundle:User:index.html.twig */
class __TwigTemplate_51acf312811be9d16a5a8f26074eb23a6cca121966d09880df14deeda48e4ff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FttBackofficeBundle::accueil_admin.html.twig", "FttUserBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
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
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "

    <li class=\"active\">Liste des utilisateurs</li>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"box box-success\">

        <div class=\"box-header\">
            <h3 class=\"box-title\">Liste des utilisateurs</h3>
            <center>
                <a class=\"fa fa-user btn-lg btn-info\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">
                    Ajouter utilisateur
                </a>
            </center>



        <div class=\"box-tools\">
            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_search"]) ? $context["form_search"] : $this->getContext($context, "form_search")), 'form_start', array("attr" => array("class" => "sidebar-form", "id" => "")));
        echo "

            <div class=\"input-group\" style=\"width: 150px;\">
                   ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_search"]) ? $context["form_search"] : $this->getContext($context, "form_search")), "cin", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "")));
        echo "
              <span class=\"input-group-btn\">
                 ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_search"]) ? $context["form_search"] : $this->getContext($context, "form_search")), "submit", array()), 'widget', array("attr" => array("class" => "hidden", "id" => "")));
        echo "

                  <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
                </div>
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_search"]) ? $context["form_search"] : $this->getContext($context, "form_search")), 'rest');
        echo "
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_search"]) ? $context["form_search"] : $this->getContext($context, "form_search")), 'form_end');
        echo "
        </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-12\">
                <table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\"
                       aria-describedby=\"example1_info\">
                    <thead>
                    <tr role=\"row\">
                        <th class=\"info\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 165px;\">Id
                        </th>
                        <th class=\"info\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 210px;\">Username
                        </th>
                        <th class=\"info\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 192px;\">Nom
                        </th>
                        <th class=\"info\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 192px;\">Prenom
                        </th>
                        <th class=\"info\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">Cin
                        </th>
                        <th class=\"info\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">Tel
                        <th class=\"info\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">Email
                        </th>
                        <th class=\"info\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">Type
                        </th>
                        <th class=\"info\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">Status
                        </th>
                        <th class=\"info\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">Activer/Bloquer
                        </th>
                        <th class=\"info\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">Action
                        </th>

                    </tr>
                    </thead>
                    <tbody>

                    ";
        // line 82
        $context["num"] = 1;
        // line 83
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 84
            echo "
                        ";
            // line 85
            if ((0 == (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) % 2)) {
                // line 86
                echo "                            <tr role=\"row\" class=\"odd\">
                        ";
            } else {
                // line 88
                echo "                            <tr role=\"row\" class=\"even\">
                        ";
            }
            // line 90
            echo "                        <td class=\"info_1\">";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "</td>
                        <td> ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "cin", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "tel", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeUser", array()), "html", null, true);
            echo "</td>
                        ";
            // line 98
            if ($this->getAttribute($context["i"], "enabled", array())) {
                // line 99
                echo "                            <td ><span class=\"label label-success\">Activé</span></td>
                        ";
            } else {
                // line 101
                echo "                            <td ><span class=\"label label-danger\">Non activé</span></td>
                        ";
            }
            // line 103
            echo "

                        <td>
                            <div class=\"btn-group-vertical\">
                                <a class=\"btn btn-success\"  href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_activate", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">Activer</a>
                                <a class=\"btn btn-warning\"  href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_block", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">Bloquer</a>
                            </div>
                        </td>
                        <td>
                            <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-eye\">Voir</i></a>
                            <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\">Modifier</i></a>
                            <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa fa-trash \">Supprimer</i></a>
                        </td>

                        ";
            // line 117
            $context["num"] = ((isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) + 1);
            // line 118
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
                    </tbody>

                </table>



                <div class=\"box-footer\">
                    <center>
                        <a class=\"fa fa-user btn btn-info\" href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">
                            Ajouter utilisateur
                        </a>
                    </center>
              </div><!-- /.box-footer -->
            </div>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "FttUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 128,  237 => 119,  231 => 118,  229 => 117,  223 => 114,  219 => 113,  215 => 112,  208 => 108,  204 => 107,  198 => 103,  194 => 101,  190 => 99,  188 => 98,  184 => 97,  180 => 96,  176 => 95,  172 => 94,  168 => 93,  164 => 92,  160 => 91,  155 => 90,  151 => 88,  147 => 86,  145 => 85,  142 => 84,  137 => 83,  135 => 82,  85 => 35,  81 => 34,  73 => 29,  68 => 27,  62 => 24,  51 => 16,  44 => 11,  41 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'FttBackofficeBundle::accueil_admin.html.twig' %}*/
/* */
/* */
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/* */
/*     <li class="active">Liste des utilisateurs</li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="box box-success">*/
/* */
/*         <div class="box-header">*/
/*             <h3 class="box-title">Liste des utilisateurs</h3>*/
/*             <center>*/
/*                 <a class="fa fa-user btn-lg btn-info" href="{{ path('user_new') }}">*/
/*                     Ajouter utilisateur*/
/*                 </a>*/
/*             </center>*/
/* */
/* */
/* */
/*         <div class="box-tools">*/
/*             {{ form_start(form_search, { 'attr': {'class': 'sidebar-form', 'id': ''} }) }}*/
/* */
/*             <div class="input-group" style="width: 150px;">*/
/*                    {{ form_widget(form_search.cin, { 'attr': {'class': 'form-control', 'id': ''} }) }}*/
/*               <span class="input-group-btn">*/
/*                  {{ form_widget(form_search.submit, { 'attr': {'class': 'hidden', 'id': ''} }) }}*/
/* */
/*                   <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*               </span>*/
/*                 </div>*/
/*             {{ form_rest(form_search) }}*/
/*             {{ form_end(form_search) }}*/
/*         </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <table id="example1" class="table table-bordered table-striped dataTable" role="grid"*/
/*                        aria-describedby="example1_info">*/
/*                     <thead>*/
/*                     <tr role="row">*/
/*                         <th class="info" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 165px;">Id*/
/*                         </th>*/
/*                         <th class="info" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 210px;">Username*/
/*                         </th>*/
/*                         <th class="info" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 192px;">Nom*/
/*                         </th>*/
/*                         <th class="info" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 192px;">Prenom*/
/*                         </th>*/
/*                         <th class="info" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">Cin*/
/*                         </th>*/
/*                         <th class="info" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">Tel*/
/*                         <th class="info" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">Email*/
/*                         </th>*/
/*                         <th class="info" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">Type*/
/*                         </th>*/
/*                         <th class="info" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">Status*/
/*                         </th>*/
/*                         <th class="info" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">Activer/Bloquer*/
/*                         </th>*/
/*                         <th class="info" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">Action*/
/*                         </th>*/
/* */
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/* */
/*                     {% set num = 1 %}*/
/*                     {% for i in entities %}*/
/* */
/*                         {% if num is divisible by(2) %}*/
/*                             <tr role="row" class="odd">*/
/*                         {% else %}*/
/*                             <tr role="row" class="even">*/
/*                         {% endif %}*/
/*                         <td class="info_1">{{ num }}</td>*/
/*                         <td> {{ i.username }}</td>*/
/*                         <td>{{ i.nom }}</td>*/
/*                         <td>{{ i.prenom }}</td>*/
/*                         <td>{{ i.cin }}</td>*/
/*                         <td>{{ i.tel }}</td>*/
/*                         <td>{{ i.email }}</td>*/
/*                         <td>{{ i.typeUser }}</td>*/
/*                         {% if  i.enabled  %}*/
/*                             <td ><span class="label label-success">Activé</span></td>*/
/*                         {% else %}*/
/*                             <td ><span class="label label-danger">Non activé</span></td>*/
/*                         {% endif %}*/
/* */
/* */
/*                         <td>*/
/*                             <div class="btn-group-vertical">*/
/*                                 <a class="btn btn-success"  href="{{ path('user_activate', { 'id': i.id }) }}">Activer</a>*/
/*                                 <a class="btn btn-warning"  href="{{ path('user_block', { 'id': i.id }) }}">Bloquer</a>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td>*/
/*                             <a href="{{ path('user_show', { 'id': i.id }) }}"><i class="fa fa-eye">Voir</i></a>*/
/*                             <a href="{{ path('user_edit', { 'id': i.id }) }}"><i class="fa fa-edit">Modifier</i></a>*/
/*                             <a href="{{ path('user_delete', { 'id': i.id }) }}"><i class="fa fa fa-trash ">Supprimer</i></a>*/
/*                         </td>*/
/* */
/*                         {% set num = num + 1 %}*/
/*                     {% endfor %}*/
/* */
/*                     </tbody>*/
/* */
/*                 </table>*/
/* */
/* */
/* */
/*                 <div class="box-footer">*/
/*                     <center>*/
/*                         <a class="fa fa-user btn btn-info" href="{{ path('user_new') }}">*/
/*                             Ajouter utilisateur*/
/*                         </a>*/
/*                     </center>*/
/*               </div><!-- /.box-footer -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
