<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_5ec284893ef7a42a78739c14327cd2f2bba6f06447a27cc9217519ef98dc1e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo " <section class=\"drawer\">
  <div class=\"col-md-12 size-img back-img\" style=\"background:transparent url(";
        // line 6
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

     <div class=\"col-md-12 login-page\">

<br><br>
      <h3>Un message a été enovyé à votre courrier <br><br><span class=\"point-int\">Merci de confimer votre compte !</span></h3>


      <div class=\"ctn-img\">
       <img src=\"";
        // line 26
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
        // line 36
        $this->loadTemplate("@FttFrontOffice/Front/sponsor.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 36)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 36,  57 => 26,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block body %}*/
/*  <section class="drawer">*/
/*   <div class="col-md-12 size-img back-img" style="background:transparent url({{ asset('images/register.jpg') }}) no-repeat top center;">*/
/*    <div class="effect-cover">*/
/*     <h3 class="txt-advert animated">Fédération Tunisienne de Tennis</h3>*/
/*     <p class="txt-advert-sub animated">Inscrivez vous pour faire des paris , acheter des billets ..</p>*/
/*    </div>*/
/*   </div>*/
/* */
/*   <section id="login" class="container secondary-page">*/
/*    <div class="general general-results players">*/
/* */
/*     <!-- REGISTER BOX -->*/
/*     <div class="top-score-title right-score col-md-12">*/
/* */
/*      <div class="col-md-12 login-page">*/
/* */
/* <br><br>*/
/*       <h3>Un message a été enovyé à votre courrier <br><br><span class="point-int">Merci de confimer votre compte !</span></h3>*/
/* */
/* */
/*       <div class="ctn-img">*/
/*        <img src="{{ asset('images/federer.png') }}" />*/
/*       </div><!--Close Images-->*/
/*       <div class="clear"></div>*/
/*      </div>*/
/* */
/*     </div><!--Close REgistration-->*/
/*    </div>*/
/*   </section>*/
/* */
/*  </section>*/
/*     {% include "@FttFrontOffice/Front/sponsor.html.twig" %}*/
/* {% endblock %}*/
/* */
