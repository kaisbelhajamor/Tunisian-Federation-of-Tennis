<?php

/* FttUserBundle:User:edit.html.twig */
class __TwigTemplate_22548c45ba2a475a6a42f8243198359305229021e2196bef69843f891dd51553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FttBackofficeBundle::accueil_admin.html.twig", "FttUserBundle:User:edit.html.twig", 1);
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

    <li class=\"active\">Modifier utilisateur</li>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
    <div class=\"box box-info\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Modifier utilisateur</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        <div class=\"box-body\">

            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">UserName*</label>

                <div class=\"col-sm-3\">
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail3")));
        echo "
                </div>
            </div>


            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Nom*</label>

                <div class=\"col-sm-3\">
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail3")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Prenom*</label>

                <div class=\"col-sm-3\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail3")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Cin*</label>

                <div class=\"col-sm-3\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cin", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail3")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">N° Telephone</label>

                <div class=\"col-sm-3\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail3")));
        echo "
                </div>
            </div>


            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email*</label>

                <div class=\"col-sm-3\">
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail3")));
        echo "
                </div>
            </div>



            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Type Utilisateur*</label>

                <div class=\"col-sm-3\">
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeUser", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail3")));
        echo "
                </div>
            </div>


            <div class=\"form-group\">
                <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password*</label>
                <div class=\"col-sm-3\">
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputPassword3")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Verification Password*</label>
                <div class=\"col-sm-3\">
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputPassword3")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Télecharger avatar*</label>
                <div class=\"col-sm-3\">
                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "")));
        echo "
                </div>
            </div>

        </div><!-- /.box-body -->
        <div class=\"box-footer\">
            ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-info pull-left", "id" => "inputPassword3")));
        echo "
            <a class=\"btn btn-info pull-right\" href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">Retourner</a>
        </div><!-- /.box-footer -->
        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'rest');
        echo "
        ";
        // line 107
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>


";
    }

    public function getTemplateName()
    {
        return "FttUserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 107,  180 => 106,  175 => 104,  171 => 103,  162 => 97,  153 => 91,  143 => 84,  132 => 76,  119 => 66,  107 => 57,  96 => 49,  85 => 41,  74 => 33,  62 => 24,  52 => 17,  44 => 11,  41 => 10,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'FttBackofficeBundle::accueil_admin.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/* */
/*     <li class="active">Modifier utilisateur</li>*/
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="box box-info">*/
/*         <div class="box-header with-border">*/
/*             <h3 class="box-title">Modifier utilisateur</h3>*/
/*         </div><!-- /.box-header -->*/
/*         <!-- form start -->*/
/*         {{ form_start(edit_form,{ 'attr': {'class': 'form-horizontal'} })}}*/
/*         <div class="box-body">*/
/* */
/*             <div class="form-group">*/
/*                 <label for="inputEmail3" class="col-sm-2 control-label">UserName*</label>*/
/* */
/*                 <div class="col-sm-3">*/
/*                     {{ form_widget(edit_form.username, { 'attr': {'class': 'form-control', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="form-group">*/
/*                 <label for="inputEmail3" class="col-sm-2 control-label">Nom*</label>*/
/* */
/*                 <div class="col-sm-3">*/
/*                     {{ form_widget(edit_form.nom, { 'attr': {'class': 'form-control', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="inputEmail3" class="col-sm-2 control-label">Prenom*</label>*/
/* */
/*                 <div class="col-sm-3">*/
/*                     {{ form_widget(edit_form.prenom, { 'attr': {'class': 'form-control', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="inputEmail3" class="col-sm-2 control-label">Cin*</label>*/
/* */
/*                 <div class="col-sm-3">*/
/*                     {{ form_widget(edit_form.cin, { 'attr': {'class': 'form-control', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="inputEmail3" class="col-sm-2 control-label">N° Telephone</label>*/
/* */
/*                 <div class="col-sm-3">*/
/*                     {{ form_widget(edit_form.tel, { 'attr': {'class': 'form-control', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="form-group">*/
/*                 <label for="inputEmail3" class="col-sm-2 control-label">Email*</label>*/
/* */
/*                 <div class="col-sm-3">*/
/*                     {{ form_widget(edit_form.email, { 'attr': {'class': 'form-control', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/* */
/*             <div class="form-group">*/
/*                 <label for="inputEmail3" class="col-sm-2 control-label">Type Utilisateur*</label>*/
/* */
/*                 <div class="col-sm-3">*/
/*                     {{ form_widget(edit_form.typeUser, { 'attr': {'class': 'form-control', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="form-group">*/
/*                 <label for="inputPassword3" class="col-sm-2 control-label">Password*</label>*/
/*                 <div class="col-sm-3">*/
/*                     {{ form_widget(edit_form.plainPassword.first, { 'attr': {'class': 'form-control', 'id': 'inputPassword3'} }) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="inputPassword3" class="col-sm-2 control-label">Verification Password*</label>*/
/*                 <div class="col-sm-3">*/
/*                     {{ form_widget(edit_form.plainPassword.second, { 'attr': {'class': 'form-control', 'id': 'inputPassword3'} }) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="inputPassword3" class="col-sm-2 control-label">Télecharger avatar*</label>*/
/*                 <div class="col-sm-3">*/
/*                     {{ form_widget(edit_form.file, { 'attr': {'class': 'form-control', 'id': ''} }) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div><!-- /.box-body -->*/
/*         <div class="box-footer">*/
/*             {{ form_widget(edit_form.submit, { 'attr': {'class': 'btn btn-info pull-left', 'id': 'inputPassword3'} }) }}*/
/*             <a class="btn btn-info pull-right" href="{{ path('user') }}">Retourner</a>*/
/*         </div><!-- /.box-footer -->*/
/*         {{ form_rest(edit_form._token) }}*/
/*         {{ form_end(edit_form) }}*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
