<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_2e226d537122db81b0e8e6d674ed9e9cde48ac488db4ab2b3d2ca3bc63be53c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"drawer\">
    <div class=\"col-md-12 size-img back-img\" style=\"background:transparent url(";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/register.jpg"), "html", null, true);
        echo ") no-repeat top center;\">
        <div class=\"effect-cover\">
            <h3 class=\"txt-advert animated\">Fédération Tunisienne de Tennis</h3>
            <p class=\"txt-advert-sub animated\">Inscrivez vous pour faire des paris , acheter des billets ..</p>
        </div>
    </div>

    <section id=\"login\" class=\"container secondary-page\">
        <div class=\"general general-results players\">

            <!-- REGISTER BOX -->
            <div class=\"top-score-title right-score col-md-12\">
                <h3>Inscrivez vous <span>Maintenant</span><span class=\"point-int\"> !</span></h3>
                <div class=\"col-md-12 login-page\">



                    <form  action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"register-form\">


                        <div class=\"name\">
                            <label for=\"lastname\">* Nom:</label><div class=\"clear\"></div>
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "", "id" => "name")));
        echo "
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                        </div>

                        <div class=\"name\">
                            <label for=\"lastname\">* Prénom:</label><div class=\"clear\"></div>
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "", "id" => "lastname")));
        echo "
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                            <span class=\"color-red\"></span>
                        </div>

                        <div class=\"name\">
                            <label for=\"name\">* Nom Utiisateur:</label><div class=\"clear\"></div>
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "", "id" => "name")));
        echo "
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                        </div>


                        <div class=\"name\">
                            <label for=\"email\">* Email:</label><div class=\"clear\"></div>
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "email-register", "id" => "confirm")));
        echo "
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        </div>

                        <div class=\"name\">
                            <label for=\"password\">* Password:</label><div class=\"clear\"></div>
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "", "id" => "password")));
        echo "
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        </div>
                        <div class=\"confirm_password\">
                            <label for=\"confirm_password\">* Confirmation  Password:</label><div class=\"clear\"></div>
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "", "id" => "confirm_password")));
        echo "
                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        </div>
                        <div id=\"register-submit\">
                            <input type=\"submit\" value=\"Enregistrer\"/>
                        </div>
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    </form>
                    <div class=\"ctn-img\">
                        <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/federer.png"), "html", null, true);
        echo "\" />
                    </div><!--Close Images-->
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
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 64,  125 => 61,  117 => 56,  113 => 55,  106 => 51,  102 => 50,  94 => 45,  90 => 44,  81 => 38,  77 => 37,  68 => 31,  64 => 30,  56 => 25,  52 => 24,  42 => 19,  22 => 2,  19 => 1,);
    }
}
/* <section class="drawer">*/
/*     <div class="col-md-12 size-img back-img" style="background:transparent url({{ asset('images/register.jpg') }}) no-repeat top center;">*/
/*         <div class="effect-cover">*/
/*             <h3 class="txt-advert animated">Fédération Tunisienne de Tennis</h3>*/
/*             <p class="txt-advert-sub animated">Inscrivez vous pour faire des paris , acheter des billets ..</p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <section id="login" class="container secondary-page">*/
/*         <div class="general general-results players">*/
/* */
/*             <!-- REGISTER BOX -->*/
/*             <div class="top-score-title right-score col-md-12">*/
/*                 <h3>Inscrivez vous <span>Maintenant</span><span class="point-int"> !</span></h3>*/
/*                 <div class="col-md-12 login-page">*/
/* */
/* */
/* */
/*                     <form  action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="register-form">*/
/* */
/* */
/*                         <div class="name">*/
/*                             <label for="lastname">* Nom:</label><div class="clear"></div>*/
/*                             {{ form_widget(form.nom, { 'attr': {'class': '', 'id': 'name'} }) }}*/
/*                             {{ form_errors(form.nom)}}*/
/*                         </div>*/
/* */
/*                         <div class="name">*/
/*                             <label for="lastname">* Prénom:</label><div class="clear"></div>*/
/*                             {{ form_widget(form.prenom, { 'attr': {'class': '', 'id': 'lastname'} }) }}*/
/*                             {{ form_errors(form.prenom) }}*/
/*                             <span class="color-red"></span>*/
/*                         </div>*/
/* */
/*                         <div class="name">*/
/*                             <label for="name">* Nom Utiisateur:</label><div class="clear"></div>*/
/*                             {{ form_widget(form.username, { 'attr': {'class': '', 'id': 'name'} }) }}*/
/*                             {{ form_errors(form.username) }}*/
/*                         </div>*/
/* */
/* */
/*                         <div class="name">*/
/*                             <label for="email">* Email:</label><div class="clear"></div>*/
/*                             {{ form_widget(form.email, { 'attr': {'class': 'email-register', 'id': 'confirm'} }) }}*/
/*                             {{ form_errors(form.email) }}*/
/*                         </div>*/
/* */
/*                         <div class="name">*/
/*                             <label for="password">* Password:</label><div class="clear"></div>*/
/*                             {{ form_widget(form.plainPassword.first, { 'attr': {'class': '', 'id': 'password'} }) }}*/
/*                             {{ form_errors(form.plainPassword.first) }}*/
/*                         </div>*/
/*                         <div class="confirm_password">*/
/*                             <label for="confirm_password">* Confirmation  Password:</label><div class="clear"></div>*/
/*                             {{ form_widget(form.plainPassword.second, { 'attr': {'class': '', 'id': 'confirm_password'} }) }}*/
/*                             {{ form_errors(form.plainPassword.second) }}*/
/*                         </div>*/
/*                         <div id="register-submit">*/
/*                             <input type="submit" value="Enregistrer"/>*/
/*                         </div>*/
/*                         {{form_rest(form)}}*/
/*                     </form>*/
/*                     <div class="ctn-img">*/
/*                         <img src="{{ asset('images/federer.png') }}" />*/
/*                     </div><!--Close Images-->*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/* */
/*             </div><!--Close REgistration-->*/
/*         </div>*/
/*     </section>*/
/* */
/* </section>*/
/* */
