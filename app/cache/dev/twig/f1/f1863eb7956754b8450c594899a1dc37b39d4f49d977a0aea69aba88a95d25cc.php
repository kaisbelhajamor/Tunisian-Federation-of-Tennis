<?php

/* FttNewsletterBundle::listNewsletter.html.twig */
class __TwigTemplate_fdeaca43c122e7d27a5e0fcb010f2420544f79769a027934e592964be10e662e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FttBackofficeBundle::accueil_admin.html.twig", "FttNewsletterBundle::listNewsletter.html.twig", 1);
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

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "

    <li class=\"active\">Liste de Newsletter</li>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"box box-success\">

    <div class=\"box-header with-border\">
        <h3 class=\"box-title\">Liste des inscrits au Newsletter</h3>
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
                         style=\"width: 210px;\">Nom
                    </th>
                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                         style=\"width: 192px;\">Mail(s)
                    </th>
                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\"
                       style=\"width: 142px;\">Date inscription
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
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            echo "
                    ";
            // line 46
            if ((0 == (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) % 2)) {
                // line 47
                echo "                        <tr role=\"row\" class=\"odd\">
                    ";
            } else {
                // line 49
                echo "                        <tr role=\"row\" class=\"even\">
                    ";
            }
            // line 51
            echo "                    <td class=\"sorting_1\">";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "</td>
                    <td> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "mail", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ftt_backoffice_newsletter_delete_mail", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Confirmer la suppression?')\">Supprimer</a></td>
                    </tr>
                    ";
            // line 57
            $context["num"] = ((isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) + 1);
            // line 58
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
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
        return "FttNewsletterBundle::listNewsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 59,  122 => 58,  120 => 57,  115 => 55,  111 => 54,  107 => 53,  103 => 52,  98 => 51,  94 => 49,  90 => 47,  88 => 46,  85 => 45,  80 => 44,  78 => 43,  44 => 11,  41 => 10,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'FttBackofficeBundle::accueil_admin.html.twig' %}*/
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/* */
/*     <li class="active">Liste de Newsletter</li>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block content %}*/
/* <div class="box box-success">*/
/* */
/*     <div class="box-header with-border">*/
/*         <h3 class="box-title">Liste des inscrits au Newsletter</h3>*/
/*     </div><!-- /.box-header -->*/
/* */
/* */
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/*             <table id="example1" class="table table-bordered table-striped dataTable" role="grid"*/
/*                    aria-describedby="example1_info">*/
/*                 <thead>*/
/*                 <tr role="row">*/
/*                     <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                         style="width: 165px;">Id*/
/*                     </th>*/
/*                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                          style="width: 210px;">Nom*/
/*                     </th>*/
/*                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                          style="width: 192px;">Mail(s)*/
/*                     </th>*/
/*                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                        style="width: 142px;">Date inscription*/
/*                     </th>*/
/*                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"*/
/*                         style="width: 142px;">Supprimer*/
/*                     </th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {% set num = 1 %}*/
/*                 {% for i in modeles %}*/
/* */
/*                     {% if num is divisible by(2) %}*/
/*                         <tr role="row" class="odd">*/
/*                     {% else %}*/
/*                         <tr role="row" class="even">*/
/*                     {% endif %}*/
/*                     <td class="sorting_1">{{ num }}</td>*/
/*                     <td> {{ i.nom }}</td>*/
/*                     <td>{{ i.mail }}</td>*/
/*                     <td>{{ i.date|date('Y-m-d') }}</td>*/
/*                     <td><a href="{{ path('ftt_backoffice_newsletter_delete_mail', { 'id': i.id }) }}" onclick="return confirm('Confirmer la suppression?')">Supprimer</a></td>*/
/*                     </tr>*/
/*                     {% set num = num + 1 %}*/
/*                 {% endfor %}*/
/* */
/*                 </tbody>*/
/*                 <tfoot>*/
/*                 <tr>*/
/*                     <th rowspan="1" colspan="1">Id</th>*/
/*                     <th rowspan="1" colspan="1">Nom</th>*/
/*                     <th rowspan="1" colspan="1">Mail(s)</th>*/
/*                     <th rowspan="1" colspan="1">Date inscription </th>*/
/*                 </tr>*/
/*                 </tfoot>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
