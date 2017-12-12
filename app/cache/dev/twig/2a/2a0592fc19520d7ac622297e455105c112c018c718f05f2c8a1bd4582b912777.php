<?php

/* FttFrontOfficeBundle:ResultatMedical:ResultatMedical.html.twig */
class __TwigTemplate_c652af2cf5a81c2c6656c0d430dbc02c7656202b33c420a2bbf97e0bcc1fc0db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FttFrontOfficeBundle:ResultatMedical:ResultatMedical.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"drawer\">
    <div class=\"col-md-12 size-img back-img\" style=\"background:transparent url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/register.jpg"), "html", null, true);
        echo ") no-repeat top center;\">
        <div class=\"effect-cover\">
            <h3 class=\"txt-advert animated\">Fédération Tunisienne de Tennis</h3>
            <p class=\"txt-advert-sub animated\">Merci de remplir ce Formulaire ..</p>
        </div>
    </div>

    <section id=\"login\" class=\"container secondary-page\">
        <div class=\"general general-results players\">

            <!-- REGISTER BOX -->
            <div class=\"top-score-title right-score col-md-12\">
                <h3>Resultat Medical <span>de joueur</span><span class=\"point-int\"> !</span></h3>
                <div class=\"col-md-12 login-page\">


                    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"name\">
                            <label for=\"lastname\">* Numero Echantillon:</label><div class=\"clear\"></div>
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroEchantillon", array()), 'widget', array("attr" => array("class" => "resultatMedical", "id" => "name")));
        echo "
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroEchantillon", array()), 'errors');
        echo "
                        </div>

                        <div class=\"name\">
                            <label for=\"lastname\">* Date Prélevement:</label><div class=\"clear\"></div>
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePrelevement", array()), 'widget', array("attr" => array("class" => "resultatMedical", "id" => "lastname")));
        echo "
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePrelevement", array()), 'errors');
        echo "
                            <span class=\"color-red\"></span>
                        </div>

                    <div class=\"name\">
                        <label for=\"lastname\">* Joueur:</label><div class=\"clear\"></div>
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "joueur", array()), 'widget', array("attr" => array("class" => "resultatMedical", "id" => "lastname")));
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "joueur", array()), 'errors');
        echo "
                        <span class=\"color-red\"></span>
                    </div>


                    <div class=\"name\">
                        <label for=\"lastname\">* Resultat de test:</label><div class=\"clear\"></div>
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ResultatTest", array()), 'widget', array("attr" => array("class" => "txt-area", "id" => "message")));
        echo "
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ResultatTest", array()), 'errors');
        echo "
                        <span class=\"color-red\"></span>
                    </div>

                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    </form>

                    <div class=\"clear\"></div>
                </div>

            </div><!--Close REgistration-->
        </div>
    </section>

</section>
    ";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:ResultatMedical:ResultatMedical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 50,  102 => 46,  98 => 45,  88 => 38,  84 => 37,  75 => 31,  71 => 30,  63 => 25,  59 => 24,  53 => 21,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <section class="drawer">*/
/*     <div class="col-md-12 size-img back-img" style="background:transparent url({{ asset('images/register.jpg') }}) no-repeat top center;">*/
/*         <div class="effect-cover">*/
/*             <h3 class="txt-advert animated">Fédération Tunisienne de Tennis</h3>*/
/*             <p class="txt-advert-sub animated">Merci de remplir ce Formulaire ..</p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <section id="login" class="container secondary-page">*/
/*         <div class="general general-results players">*/
/* */
/*             <!-- REGISTER BOX -->*/
/*             <div class="top-score-title right-score col-md-12">*/
/*                 <h3>Resultat Medical <span>de joueur</span><span class="point-int"> !</span></h3>*/
/*                 <div class="col-md-12 login-page">*/
/* */
/* */
/*                     {{ form_start(form) }}*/
/*                         <div class="name">*/
/*                             <label for="lastname">* Numero Echantillon:</label><div class="clear"></div>*/
/*                             {{ form_widget(form.numeroEchantillon, { 'attr': {'class': 'resultatMedical', 'id': 'name'} }) }}*/
/*                             {{ form_errors(form.numeroEchantillon)}}*/
/*                         </div>*/
/* */
/*                         <div class="name">*/
/*                             <label for="lastname">* Date Prélevement:</label><div class="clear"></div>*/
/*                             {{ form_widget(form.datePrelevement, { 'attr': {'class': 'resultatMedical', 'id': 'lastname'} }) }}*/
/*                             {{ form_errors(form.datePrelevement) }}*/
/*                             <span class="color-red"></span>*/
/*                         </div>*/
/* */
/*                     <div class="name">*/
/*                         <label for="lastname">* Joueur:</label><div class="clear"></div>*/
/*                         {{ form_widget(form.joueur, { 'attr': {'class': 'resultatMedical', 'id': 'lastname'} }) }}*/
/*                         {{ form_errors(form.joueur) }}*/
/*                         <span class="color-red"></span>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="name">*/
/*                         <label for="lastname">* Resultat de test:</label><div class="clear"></div>*/
/*                         {{ form_widget(form.ResultatTest, { 'attr': {'class': 'txt-area', 'id': 'message'} }) }}*/
/*                         {{ form_errors(form.ResultatTest) }}*/
/*                         <span class="color-red"></span>*/
/*                     </div>*/
/* */
/*                         {{form_rest(form)}}*/
/*                     </form>*/
/* */
/*                     <div class="clear"></div>*/
/*                 </div>*/
/* */
/*             </div><!--Close REgistration-->*/
/*         </div>*/
/*     </section>*/
/* */
/* </section>*/
/*     {% endblock body %}*/
