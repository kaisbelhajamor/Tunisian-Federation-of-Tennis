<?php

/* @FttBackoffice/Messages/listMessages.html.twig */
class __TwigTemplate_c1fcd4446f6903e7450d0dc3505867270f42db3886f4516e779bccfa849d3fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FttBackofficeBundle::accueil_admin.html.twig", "@FttBackoffice/Messages/listMessages.html.twig", 1);
        $this->blocks = array(
            'numNews' => array($this, 'block_numNews'),
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

    // line 2
    public function block_numNews($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["numNews"]) ? $context["numNews"] : $this->getContext($context, "numNews")), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "

    <li class=\"active\">Messages envoyés </li>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "SuccessDeleteMsg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"alert alert-success fade in\">
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>

            <strong>Succés!</strong> ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "

    <div class=\"box box-success\">

        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des Messages</h3>
        </div><!-- /.box-header -->


        <div class=\"row\">
            <div class=\"col-sm-12\">
                <table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\"
                       aria-describedby=\"example1_info\">
                    <thead>
                    <tr role=\"row\">
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 165px;\">Id
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 210px;\">Date ennvoie
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 210px;\">Nom
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 210px;\">Mail
                        </th>

                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 192px;\">Type message
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">Répondre
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">Status
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">Supprimer
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    ";
        // line 63
        $context["num"] = 1;
        // line 64
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 65
            echo "
                        ";
            // line 66
            if ((0 == (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) % 2)) {
                // line 67
                echo "                            <tr role=\"row\" class=\"odd\">
                        ";
            } else {
                // line 69
                echo "                            <tr role=\"row\" class=\"even\">
                        ";
            }
            // line 71
            echo "                        <td class=\"sorting_1\">";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "</td>
                        <td> ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('date')->diff($this->env, $this->getAttribute($context["i"], "date", array())), "html", null, true);
            echo "</td>
                        <td> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "name", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "mail", array()), "html", null, true);
            echo "</td>
                        ";
            // line 75
            if (($this->getAttribute($context["i"], "readed", array()) == 1)) {
                // line 76
                echo "                        <td><span class=\"label label-success\">Message Lu</span></td>
                        ";
            } else {
                // line 78
                echo "                        <td><span class=\"label label-warning\">Message Non Lu</span></td>
                        ";
            }
            // line 80
            echo "
                       <td><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ftt_backoffice_messages_show", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">Répondre</a></td>

                        ";
            // line 83
            if (($this->getAttribute($context["i"], "reply", array()) == 1)) {
                // line 84
                echo "                            <td><span class=\"label label-success\">Message répondu</span></td>
                        ";
            } else {
                // line 86
                echo "                            <td><span class=\"label label-warning\">Message non répondu</span></td>
                        ";
            }
            // line 88
            echo "                        <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ftt_backoffice_messages_delete", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Confirmer la suppression?')\">Supprimer</a></td>

                        </tr>

                        ";
            // line 92
            $context["num"] = ((isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) + 1);
            // line 93
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
                    </tbody>
                    <tfoot>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                        style=\"width: 165px;\">Id
                    </th>
                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                        style=\"width: 210px;\">Date ennvoie
                    </th>
                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                        style=\"width: 210px;\">Nom
                    </th>
                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                        style=\"width: 210px;\">Mail
                    </th>

                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                        style=\"width: 192px;\">Type message
                    </th>
                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                        style=\"width: 142px;\">Répondre
                    </th>
                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                        style=\"width: 142px;\">Supprimer
                    </th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@FttBackoffice/Messages/listMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 94,  193 => 93,  191 => 92,  183 => 88,  179 => 86,  175 => 84,  173 => 83,  168 => 81,  165 => 80,  161 => 78,  157 => 76,  155 => 75,  151 => 74,  147 => 73,  143 => 72,  138 => 71,  134 => 69,  130 => 67,  128 => 66,  125 => 65,  120 => 64,  118 => 63,  72 => 19,  63 => 16,  58 => 13,  53 => 12,  50 => 11,  41 => 4,  38 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'FttBackofficeBundle::accueil_admin.html.twig' %}*/
/* {% block numNews %} {{ numNews }} {% endblock %}*/
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/* */
/*     <li class="active">Messages envoyés </li>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block content %}*/
/*     {% for flashMessage in app.session.flashbag.get('SuccessDeleteMsg') %}*/
/*         <div class="alert alert-success fade in">*/
/*             <a href="#" class="close" data-dismiss="alert">&times;</a>*/
/* */
/*             <strong>Succés!</strong> {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* */
/*     <div class="box box-success">*/
/* */
/*         <div class="box-header with-border">*/
/*             <h3 class="box-title">Liste des Messages</h3>*/
/*         </div><!-- /.box-header -->*/
/* */
/* */
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <table id="example1" class="table table-bordered table-striped dataTable" role="grid"*/
/*                        aria-describedby="example1_info">*/
/*                     <thead>*/
/*                     <tr role="row">*/
/*                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 165px;">Id*/
/*                         </th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 210px;">Date ennvoie*/
/*                         </th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 210px;">Nom*/
/*                         </th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 210px;">Mail*/
/*                         </th>*/
/* */
/*                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 192px;">Type message*/
/*                         </th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">Répondre*/
/*                         </th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">Status*/
/*                         </th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">Supprimer*/
/*                         </th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/* */
/*                     {% set num = 1 %}*/
/*                     {% for i in data %}*/
/* */
/*                         {% if num is divisible by(2) %}*/
/*                             <tr role="row" class="odd">*/
/*                         {% else %}*/
/*                             <tr role="row" class="even">*/
/*                         {% endif %}*/
/*                         <td class="sorting_1">{{ num }}</td>*/
/*                         <td> {{ i.date|time_diff }}</td>*/
/*                         <td> {{ i.name }}</td>*/
/*                         <td> {{ i.mail }}</td>*/
/*                         {% if i.readed==1 %}*/
/*                         <td><span class="label label-success">Message Lu</span></td>*/
/*                         {% else %}*/
/*                         <td><span class="label label-warning">Message Non Lu</span></td>*/
/*                         {% endif %}*/
/* */
/*                        <td><a href="{{ path('ftt_backoffice_messages_show', { 'id': i.id }) }}">Répondre</a></td>*/
/* */
/*                         {% if i.reply==1 %}*/
/*                             <td><span class="label label-success">Message répondu</span></td>*/
/*                         {% else %}*/
/*                             <td><span class="label label-warning">Message non répondu</span></td>*/
/*                         {% endif %}*/
/*                         <td><a href="{{ path('ftt_backoffice_messages_delete', { 'id': i.id }) }}" onclick="return confirm('Confirmer la suppression?')">Supprimer</a></td>*/
/* */
/*                         </tr>*/
/* */
/*                         {% set num = num + 1 %}*/
/*                     {% endfor %}*/
/* */
/*                     </tbody>*/
/*                     <tfoot>*/
/*                     <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                         style="width: 165px;">Id*/
/*                     </th>*/
/*                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                         style="width: 210px;">Date ennvoie*/
/*                     </th>*/
/*                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                         style="width: 210px;">Nom*/
/*                     </th>*/
/*                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                         style="width: 210px;">Mail*/
/*                     </th>*/
/* */
/*                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                         style="width: 192px;">Type message*/
/*                     </th>*/
/*                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                         style="width: 142px;">Répondre*/
/*                     </th>*/
/*                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                         style="width: 142px;">Supprimer*/
/*                     </th>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
