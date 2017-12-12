<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_3a11c20eeac686db9e774c0c1d3e3204751ffa5cad1877d62dc52438f35ffa68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Resetting:request.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "    <section class=\"drawer\">
        <div class=\"col-md-12 size-img back-img\" style=\"background:transparent url(";
        // line 8
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
                    <h3> Avez vous oublié votre mot de passe ? <span> Changez le maintenant</span><span class=\"point-int\"> !</span></h3>
                    <div class=\"col-md-12 login-page\">



                        <form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"register-form\">
                            <div>

                                    ";
        // line 28
        if (array_key_exists("invalid_username", $context)) {
            // line 29
            echo "                                    <div class=\"alert alert-danger\">
                                        <p>Nom utilisateur invalide</p>
                                    </div>
                                    ";
        }
        // line 33
        echo "
                            </div>
                            <div>
                                <label for=\"username\">*Nom Utilisateur ou Email :</label>
                                <input type=\"text\" id=\"name\" name=\"username\" required=\"required\" />
                            </div>
                            <div>
                                <button type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Envoyer</button>
                            </div>
                        </form>


                        <div class=\"ctn-img\">
                            <img src=\"";
        // line 46
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
        // line 57
        $this->loadTemplate("@FttFrontOffice/Front/sponsor.html.twig", "FOSUserBundle:Resetting:request.html.twig", 57)->display($context);
        // line 58
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 58,  108 => 57,  94 => 46,  85 => 40,  76 => 33,  70 => 29,  68 => 28,  62 => 25,  42 => 8,  39 => 7,  32 => 6,  29 => 5,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block body %}*/
/*     {% block fos_user_content %}*/
/*     <section class="drawer">*/
/*         <div class="col-md-12 size-img back-img" style="background:transparent url({{ asset('images/register.jpg') }}) no-repeat top center;">*/
/*             <div class="effect-cover">*/
/*                 <h3 class="txt-advert animated">Fédération Tunisienne de Tennis</h3>*/
/*                 <p class="txt-advert-sub animated">Inscrivez vous pour faire des paris , acheter des billets ..</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <section id="login" class="container secondary-page">*/
/*             <div class="general general-results players">*/
/* */
/*                 <!-- REGISTER BOX -->*/
/*                 <div class="top-score-title right-score col-md-12">*/
/*                     <h3> Avez vous oublié votre mot de passe ? <span> Changez le maintenant</span><span class="point-int"> !</span></h3>*/
/*                     <div class="col-md-12 login-page">*/
/* */
/* */
/* */
/*                         <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="register-form">*/
/*                             <div>*/
/* */
/*                                     {% if invalid_username is defined %}*/
/*                                     <div class="alert alert-danger">*/
/*                                         <p>Nom utilisateur invalide</p>*/
/*                                     </div>*/
/*                                     {% endif %}*/
/* */
/*                             </div>*/
/*                             <div>*/
/*                                 <label for="username">*Nom Utilisateur ou Email :</label>*/
/*                                 <input type="text" id="name" name="username" required="required" />*/
/*                             </div>*/
/*                             <div>*/
/*                                 <button type="submit" value="{{ 'resetting.request.submit'|trans }}">Envoyer</button>*/
/*                             </div>*/
/*                         </form>*/
/* */
/* */
/*                         <div class="ctn-img">*/
/*                             <img src="{{ asset('images/federer.png') }}" />*/
/*                         </div><!--Close Images-->*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/* */
/*                 </div><!--Close REgistration-->*/
/*             </div>*/
/*         </section>*/
/* */
/*     </section>*/
/* */
/*     {% include "@FttFrontOffice/Front/sponsor.html.twig" %}*/
/*     {% endblock fos_user_content %}*/
/* {% endblock %}*/
/* */
