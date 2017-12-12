<?php

/* FttFrontOfficeBundle:InscrirFormation:add.html.twig */
class __TwigTemplate_439bbf8f08f125fccb2b11f39dbcc014d0a7ba3a5c9897a8f5f3e65168fb30d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FttFrontOfficeBundle:InscrirFormation:add.html.twig", 1);
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
        echo "
    <div class=\"col-md-12 size-img back-img\">
        <div class=\"effect-cover\">
            <h3 class=\"txt-advert animated fadeInUp\">Inscription a la Formation</h3>
            <p class=\"txt-advert-sub\"></p>
        </div>
    </div>


    <div class=\"content-link col-md-12\">
        <div id=\"contact_form\" class=\"top-score-title col-md-9 align-center\">
            <div class=\"box-header with-border\"><h3 class=\"box-title\">Inscription au formation</h3></div>
            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
           

                <div class=\"name\">
                    <label for=\"name\">* Nom:</label><div class=\"clear\"></div>
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "", "id" => "inputEmail3")));
        echo "
                </div>
                <div class=\"name\">
                    <label for=\"name\">* Prenom:</label><div class=\"clear\"></div>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "", "id" => "inputEmail3")));
        echo "
                </div>

                <div class=\"name\">
                    <label for=\"name\">* Cin:</label><div class=\"clear\"></div>
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'widget', array("attr" => array("class" => "resultatMedical", "id" => "inputEmail3")));
        echo "
                </div>
                <div class=\"name\">
                    <label for=\"name\">* Email:</label><div class=\"clear\"></div>
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("class" => "resultatMedical", "id" => "inputEmail3")));
        echo "
                </div>
                <div class=\"name\">
                    <label for=\"name\">* Grade:</label><div class=\"clear\"></div>
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grade", array()), 'widget', array("attr" => array("class" => "", "id" => "inputEmail3")));
        echo "
                </div>

                <div id=\"loader\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "", "id" => "inputPassword3")));
        echo "
                </div>
                <p class=\"success\">Your message has been sent successfully.</p>

          
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <div id=\"info-company\" class=\"top-score-title col-md-3 align-center\">
            <h3>Info+</h3>
            <div class=\"col-md-12\">
                <p><i class=\"fa fa-phone\"></i>(+216)72 009 803 </p>
                <p><i class=\"fa fa-envelope-o\"></i>ftt@gmail.com </p>
                <p><i class=\"fa fa-globe\"></i>Place 10 décembre cité olympique,Ariana, Tunisie</p>

            </div>            
        </div>

    </div>     
    ";
        // line 60
        echo twig_include($this->env, $context, "@FttFrontOffice/Front/sponsor.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:InscrirFormation:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 60,  101 => 47,  97 => 46,  89 => 41,  82 => 37,  75 => 33,  68 => 29,  60 => 24,  53 => 20,  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <div class="col-md-12 size-img back-img">*/
/*         <div class="effect-cover">*/
/*             <h3 class="txt-advert animated fadeInUp">Inscription a la Formation</h3>*/
/*             <p class="txt-advert-sub"></p>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="content-link col-md-12">*/
/*         <div id="contact_form" class="top-score-title col-md-9 align-center">*/
/*             <div class="box-header with-border"><h3 class="box-title">Inscription au formation</h3></div>*/
/*             {{ form_start(form)}}*/
/*            */
/* */
/*                 <div class="name">*/
/*                     <label for="name">* Nom:</label><div class="clear"></div>*/
/*                     {{ form_widget(form.nom, { 'attr': {'class': '', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/*                 <div class="name">*/
/*                     <label for="name">* Prenom:</label><div class="clear"></div>*/
/*                     {{ form_widget(form.prenom, { 'attr': {'class': '', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/* */
/*                 <div class="name">*/
/*                     <label for="name">* Cin:</label><div class="clear"></div>*/
/*                     {{ form_widget(form.cin, { 'attr': {'class': 'resultatMedical', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/*                 <div class="name">*/
/*                     <label for="name">* Email:</label><div class="clear"></div>*/
/*                     {{ form_widget(form.mail, { 'attr': {'class': 'resultatMedical', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/*                 <div class="name">*/
/*                     <label for="name">* Grade:</label><div class="clear"></div>*/
/*                     {{ form_widget(form.grade, { 'attr': {'class': '', 'id': 'inputEmail3'} }) }}*/
/*                 </div>*/
/* */
/*                 <div id="loader">*/
/*                     {{ form_widget(form.Valider, { 'attr': {'class': '', 'id': 'inputPassword3'} }) }}*/
/*                 </div>*/
/*                 <p class="success">Your message has been sent successfully.</p>*/
/* */
/*           */
/*                 {{form_rest(form)}}*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/*         <div id="info-company" class="top-score-title col-md-3 align-center">*/
/*             <h3>Info+</h3>*/
/*             <div class="col-md-12">*/
/*                 <p><i class="fa fa-phone"></i>(+216)72 009 803 </p>*/
/*                 <p><i class="fa fa-envelope-o"></i>ftt@gmail.com </p>*/
/*                 <p><i class="fa fa-globe"></i>Place 10 décembre cité olympique,Ariana, Tunisie</p>*/
/* */
/*             </div>            */
/*         </div>*/
/* */
/*     </div>     */
/*     {{ include('@FttFrontOffice/Front/sponsor.html.twig') }}*/
/* {% endblock %}*/
/* */
