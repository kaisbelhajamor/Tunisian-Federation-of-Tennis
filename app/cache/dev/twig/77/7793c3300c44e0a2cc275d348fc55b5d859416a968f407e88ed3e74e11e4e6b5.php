<?php

/* FttBackofficeBundle:Terrain:new.html.twig */
class __TwigTemplate_ccc8f8cb8d68c76f77738b5b9d98ff343e91d3f88622c0dfafebb336d1c71003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FttBackofficeBundle::accueil_admin.html.twig", "FttBackofficeBundle:Terrain:new.html.twig", 2);
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
        echo "    <div class=\"col-md-8\">
        <div class=\"box box-info\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Ajouter un Terrain</h3>
                ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            </div>
            <div class=\"form-horizontal\"> <div class=\"box-body\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Nom du terrain: </label>

                        <div class=\"col-sm-10\">
                            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomTerrain", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail3")));
        echo "
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Adresse du Terrain:  </label>

                        <div class=\"col-sm-10\">
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseTerrain", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail3")));
        echo "
                        </div>
                    </div>



                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\"> Capacite:</label>

                        <div class=\"col-sm-10\">
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacite", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail3")));
        echo "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"box-footer\">
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-info pull-right", "id" => "inputPassword3")));
        echo "
                <a class=\"btn btn-info\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("matchs");
        echo "\"> Retour a la liste </a> 
            </div>

            ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FttBackofficeBundle:Terrain:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 46,  86 => 43,  82 => 42,  72 => 35,  59 => 25,  47 => 16,  37 => 9,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "FttBackofficeBundle::accueil_admin.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <div class="col-md-8">*/
/*         <div class="box box-info">*/
/*             <div class="box-header with-border">*/
/*                 <h3 class="box-title">Ajouter un Terrain</h3>*/
/*                 {{ form_start(form)}}*/
/*             </div>*/
/*             <div class="form-horizontal"> <div class="box-body">*/
/*                     <div class="form-group">*/
/*                         <label for="inputEmail3" class="col-sm-2 control-label">Nom du terrain: </label>*/
/* */
/*                         <div class="col-sm-10">*/
/*                             {{ form_widget(form.nomTerrain, { 'attr': {'class': 'form-control', 'id': 'inputEmail3'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="form-group">*/
/*                         <label for="inputEmail3" class="col-sm-2 control-label">Adresse du Terrain:  </label>*/
/* */
/*                         <div class="col-sm-10">*/
/*                             {{ form_widget(form.adresseTerrain, { 'attr': {'class': 'form-control', 'id': 'inputEmail3'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/* */
/*                     <div class="form-group">*/
/*                         <label for="inputEmail3" class="col-sm-2 control-label"> Capacite:</label>*/
/* */
/*                         <div class="col-sm-10">*/
/*                             {{ form_widget(form.capacite, { 'attr': {'class': 'form-control', 'id': 'inputEmail3'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="box-footer">*/
/*                 {{ form_widget(form.submit, { 'attr': {'class': 'btn btn-info pull-right', 'id': 'inputPassword3'} }) }}*/
/*                 <a class="btn btn-info" href="{{ path('matchs') }}"> Retour a la liste </a> */
/*             </div>*/
/* */
/*             {{ form_end(form) }}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
