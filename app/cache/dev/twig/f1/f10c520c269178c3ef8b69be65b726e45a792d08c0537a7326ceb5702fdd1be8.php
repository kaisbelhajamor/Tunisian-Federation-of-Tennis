<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_917b596fa02602d3f306f959918a15be300255f61d6fcf1c9413b2c41a0c65fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Security:login.html.twig", 2);
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
        echo "
    ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 74
        echo "
";
    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "        <section id=\"login\" class=\"container secondary-page\">
            <div class=\"general general-results players\">
                <div class=\"top-score-title right-score col-md-6\">
                    <h3>Bienvenue<span class=\"point-int\"> !</span></h3>
                    <div class=\"col-md-12 login-page login-w-page\">
                        <p class=\"logiin-w-title\">
                            La Fédération tunisienne de tennis (FTT)
                            organise le tennis en Tunisie et met en place un système de classement et de compétition national.
                            La fédération offre plusieurs services à ses fans.

                        </p>
                        <p>

                            Connectez pour accéder au site FTT. Si vous avez des difficultés de connexion,
                            Contacter L'administrateur système.
                            SI VOUS devez avoir votre Password Reset,
                            S'IL VOUS PLAÎT FOURNIR votre email dans le champ ci-dessous. UN NOUVEAU mot de passe sera envoyé.
                        </p>
                        <h3> Si vous n'avez pas de compte ,veuillez S'inscrire
                                    <span class=\"point-int\">
                                        <a style=\"color: #f59123\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">
                                            ici!</a>
                                    </span>
                        </h3>
                    </div>
                </div><!--Close welcome-->
                <!-- LOGIN BOX -->
                <div class=\"top-score-title right-score col-md-6\">
                    <h3>Connectez vous<span> Maintenant</span><span class=\"point-int\"> !</span></h3>
                    <div class=\"col-md-12 login-page\">
                        ";
        // line 38
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 39
            echo "                            <div>
                                <span type=\"span\" class=\"label label-danger\">  ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</span>
                            </div>
                        ";
        }
        // line 43
        echo "                        <form  class=\"login-form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                            <div class=\"name\">
                                <label for=\"name_login\">Email:</label><div class=\"clear\"></div>
                                <input id=\"name_login\" name=\"_username\"  type=\"text\"   value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                            </div>
                            <div class=\"pwd\">
                                <label for=\"password_login\">Password:</label><div class=\"clear\"></div>

                                <input  type=\"password\" id=\"password_login\" name=\"_password\" required=\"required\" />
                            </div>
                            <div id=\"login-submit\">
                                <button  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Se connecter</button>
                            </div>
                        </form>
                        <h4> Mot de passe oublié? Cliquez
                                    <span class=\"point-int\">
                                        <a style=\"color: #f59123\" href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">
                                            ici!</a>
                                    </span>
                        </h4>

                    </div>

                </div><!--Close Login-->

            </div>
        </section>


    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 60,  113 => 55,  102 => 47,  96 => 44,  91 => 43,  85 => 40,  82 => 39,  80 => 38,  67 => 28,  45 => 8,  42 => 7,  37 => 74,  35 => 7,  32 => 6,  29 => 5,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* */
/*     {% block fos_user_content %}*/
/*         <section id="login" class="container secondary-page">*/
/*             <div class="general general-results players">*/
/*                 <div class="top-score-title right-score col-md-6">*/
/*                     <h3>Bienvenue<span class="point-int"> !</span></h3>*/
/*                     <div class="col-md-12 login-page login-w-page">*/
/*                         <p class="logiin-w-title">*/
/*                             La Fédération tunisienne de tennis (FTT)*/
/*                             organise le tennis en Tunisie et met en place un système de classement et de compétition national.*/
/*                             La fédération offre plusieurs services à ses fans.*/
/* */
/*                         </p>*/
/*                         <p>*/
/* */
/*                             Connectez pour accéder au site FTT. Si vous avez des difficultés de connexion,*/
/*                             Contacter L'administrateur système.*/
/*                             SI VOUS devez avoir votre Password Reset,*/
/*                             S'IL VOUS PLAÎT FOURNIR votre email dans le champ ci-dessous. UN NOUVEAU mot de passe sera envoyé.*/
/*                         </p>*/
/*                         <h3> Si vous n'avez pas de compte ,veuillez S'inscrire*/
/*                                     <span class="point-int">*/
/*                                         <a style="color: #f59123" href="{{ path('fos_user_registration_register') }}">*/
/*                                             ici!</a>*/
/*                                     </span>*/
/*                         </h3>*/
/*                     </div>*/
/*                 </div><!--Close welcome-->*/
/*                 <!-- LOGIN BOX -->*/
/*                 <div class="top-score-title right-score col-md-6">*/
/*                     <h3>Connectez vous<span> Maintenant</span><span class="point-int"> !</span></h3>*/
/*                     <div class="col-md-12 login-page">*/
/*                         {% if error %}*/
/*                             <div>*/
/*                                 <span type="span" class="label label-danger">  {{ error.messageKey|trans(error.messageData, 'security') }}</span>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         <form  class="login-form" action="{{ path("fos_user_security_check") }}" method="post">*/
/*                             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                             <div class="name">*/
/*                                 <label for="name_login">Email:</label><div class="clear"></div>*/
/*                                 <input id="name_login" name="_username"  type="text"   value="{{ last_username }}" required="required" />*/
/*                             </div>*/
/*                             <div class="pwd">*/
/*                                 <label for="password_login">Password:</label><div class="clear"></div>*/
/* */
/*                                 <input  type="password" id="password_login" name="_password" required="required" />*/
/*                             </div>*/
/*                             <div id="login-submit">*/
/*                                 <button  type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}">Se connecter</button>*/
/*                             </div>*/
/*                         </form>*/
/*                         <h4> Mot de passe oublié? Cliquez*/
/*                                     <span class="point-int">*/
/*                                         <a style="color: #f59123" href="{{ path('fos_user_resetting_request') }}">*/
/*                                             ici!</a>*/
/*                                     </span>*/
/*                         </h4>*/
/* */
/*                     </div>*/
/* */
/*                 </div><!--Close Login-->*/
/* */
/*             </div>*/
/*         </section>*/
/* */
/* */
/*     {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
/* */
/* */
