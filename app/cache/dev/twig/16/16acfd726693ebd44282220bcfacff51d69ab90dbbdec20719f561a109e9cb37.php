<?php

/* FttNewsletterBundle::listnewsletterContent.html.twig */
class __TwigTemplate_0deb641b6e2a93998596e244b357fca46fb369f609625294201a58b7f46bbdad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FttBackofficeBundle::accueil_admin.html.twig", "FttNewsletterBundle::listnewsletterContent.html.twig", 1);
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

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "

    <li class=\"active\">newsletter enovyés</li>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"box box-success\">

        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Liste des newsletter envoyés</h3>
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
                            style=\"width: 210px;\">date
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">voir
                        </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                            style=\"width: 142px;\">Supprimer
                        </th>



                    </tr>
                    </thead>
                    <tbody>

                    ";
        // line 43
        $context["num"] = 1;
        // line 44
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            echo "
                        ";
            // line 46
            if ((0 == (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) % 2)) {
                // line 47
                echo "                            <tr role=\"row\" class=\"odd\">
                        ";
            } else {
                // line 49
                echo "                            <tr role=\"row\" class=\"even\">
                        ";
            }
            // line 51
            echo "                        <td class=\"sorting_1\">";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "</td>
                        <td> ";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ftt_backoffice_newsletter_show_newsletter_content", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">voir</a></td>
                        <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ftt_backoffice_newsletter_delete_newsletter_content", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Confirmer la suppression?')\">Supprimer</a></td>
                        </tr>
                        ";
            // line 56
            $context["num"] = ((isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) + 1);
            // line 57
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
                    </tbody>
                    <tfoot>
                    <tr>
                        <th rowspan=\"1\" colspan=\"1\">Id</th>
                        <th rowspan=\"1\" colspan=\"1\">Nom</th>
                        <th rowspan=\"1\" colspan=\"1\">Mail(s)</th>
                        <th rowspan=\"1\" colspan=\"1\">Date inscription </th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FttNewsletterBundle::listnewsletterContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 58,  117 => 57,  115 => 56,  110 => 54,  106 => 53,  102 => 52,  97 => 51,  93 => 49,  89 => 47,  87 => 46,  84 => 45,  79 => 44,  77 => 43,  44 => 12,  41 => 11,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'FttBackofficeBundle::accueil_admin.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/* */
/*     <li class="active">newsletter enovyés</li>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block content %}*/
/*     <div class="box box-success">*/
/* */
/*         <div class="box-header with-border">*/
/*             <h3 class="box-title">Liste des newsletter envoyés</h3>*/
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
/*                             style="width: 210px;">date*/
/*                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">voir*/
/*                         </th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                             style="width: 142px;">Supprimer*/
/*                         </th>*/
/* */
/* */
/* */
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/* */
/*                     {% set num = 1 %}*/
/*                     {% for i in modeles %}*/
/* */
/*                         {% if num is divisible by(2) %}*/
/*                             <tr role="row" class="odd">*/
/*                         {% else %}*/
/*                             <tr role="row" class="even">*/
/*                         {% endif %}*/
/*                         <td class="sorting_1">{{ num }}</td>*/
/*                         <td> {{ i.date|date('Y-m-d')}}</td>*/
/*                         <td><a href="{{ path('ftt_backoffice_newsletter_show_newsletter_content', { 'id': i.id }) }}">voir</a></td>*/
/*                         <td><a href="{{ path('ftt_backoffice_newsletter_delete_newsletter_content', { 'id': i.id }) }}" onclick="return confirm('Confirmer la suppression?')">Supprimer</a></td>*/
/*                         </tr>*/
/*                         {% set num = num + 1 %}*/
/*                     {% endfor %}*/
/* */
/*                     </tbody>*/
/*                     <tfoot>*/
/*                     <tr>*/
/*                         <th rowspan="1" colspan="1">Id</th>*/
/*                         <th rowspan="1" colspan="1">Nom</th>*/
/*                         <th rowspan="1" colspan="1">Mail(s)</th>*/
/*                         <th rowspan="1" colspan="1">Date inscription </th>*/
/*                     </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
