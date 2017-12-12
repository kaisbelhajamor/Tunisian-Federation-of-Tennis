<?php

/* ::base.html.twig */
class __TwigTemplate_1404fb4627fb6f85b4558c69b342887583ab653c2d6737fdfd7ac677ef51a387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'newsletter' => array($this, 'block_newsletter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />

    <meta name=\"author\" content=\"Najd Mrabet\" />
    <meta name=\"keywords\" content=\"Tennis, club, events, Tunisie, non-profit, federation, tennis, sport\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!--<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />-->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'/>-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fonts/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!--Clients-->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/own/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/own/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.jscrollpane.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/minislide/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style_dir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/FTT.jpg"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.transit.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "</head>
<body>
<!--SECTION TOP LOGIN-->
<section class=\"content-top-login\">
    <div class=\"container\">
        <div class=\"col-md-12\">

            <div class=\"box-support\">
                <p class=\"support-info\"><i class=\"fa fa-envelope-o\"></i> ftt@ati.tn </p>
            </div>
            <div class=\"box-login\">
                ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 51
            echo "                    <i class=\"fa fa-shopping-cart\"></i>
                    <a style=\"background-color: #e78315\">Bienvenue ";
            // line 52
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "html", null, true);
            echo "</a>
                    <a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Changer mot de passe</a>
                    <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se deconnecter</a>
                ";
        } else {
            // line 56
            echo "
                    <a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter</a>
                    <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a>
                ";
        }
        // line 60
        echo "            </div>
    </div>
        </div>
</section>


";
        // line 66
        $this->loadTemplate("::menu.html.twig", "::base.html.twig", 66)->display($context);
        // line 67
        echo "<body>
";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "
</body>

<!--SECTION FOOTER-->
<!--SECTION FOOTER-->
<section id=\"footer-tag\">
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"col-md-3\">
                <h3>A propos de nous</h3>
                <p>La Fédération tunisienne de tennis (FTT) organise le tennis en Tunisie et met en place un système de classement et de compétition national. La fédération offre plusieurs services à ses fans.</p>
            </div>
            <div class=\"col-md-3 cat-footer\">
                <div class=\"footer-map\"></div>
                <h3 class='last-cat'>Categories</h3>
                <ul class=\"last-tips\">
                    <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("ftt_gestion_actualite_national_front_list");
        echo "\">Nationales</a></li>
                    <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("ftt_gestion_actualite_international_front_list");
        echo "\">Internationales</a></li>
                </ul>
            </div>
            <div class=\"col-md-3\">
                <h3>Last News</h3>
                <ul class=\"footer-last-news\">

                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('count_extension')->getActus());
        foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
            // line 96
            echo "                         <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["actu"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" alt=\"\" /><p>";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["actu"], "description", array())) > 40)) ? ((twig_slice($this->env, $this->getAttribute($context["actu"], "description", array()), 0, 40) . "...")) : ($this->getAttribute($context["actu"], "description", array()))), "html", null, true);
            echo "</p></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                </ul>
            </div>
            ";
        // line 100
        $this->displayBlock('newsletter', $context, $blocks);
        // line 106
        echo "            <div class=\"col-xs-12\">
                <ul class=\"social\">
                    <li><a href=\"\"><i class=\"fa fa-facebook\"></i></a></li>
                    <li><a href=\"\"><i class=\"fa fa-twitter\"></i></a></li>
                    <li><a href=\"\"><i class=\"fa fa-linkedin\"></i></a></li>
                    <li><a href=\"\"><i class=\"fa fa-digg\"></i></a></li>
                    <li><a href=\"\"><i class=\"fa fa-rss\"></i></a></li>
                    <li><a href=\"\"><i class=\"fa fa-youtube\"></i></a></li>
                    <li><a href=\"\"><i class=\"fa fa-tumblr\"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class=\"col-md-12 content-footer\">
        <p>© 2014 - 2015 wttennis.com. All rights reserved. </p>
    </div>
</footer>





<!--MENU-->
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/menu/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/menu/cbpHorizontalMenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--END MENU-->

<!--Mini Flexslide-->
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/minislide/jquery.flexslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- Percentace circolar -->
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/circle/jquery-asPieProgress.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/circle/rainbow.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--Gallery-->
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gallery/jquery.prettyPhoto.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gallery/isotope.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- Button Anchor Top-->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.totop.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--Carousel News-->
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mousewheel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--Carousel Clients-->
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/own/owl.carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--Count down-->
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.countdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom_ini.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


</body>
</html>
";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "- Fédération Tunisienne de Tennis";
    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        // line 69
        echo "<h1>test body</h1>
";
    }

    // line 100
    public function block_newsletter($context, array $blocks = array())
    {
        // line 101
        echo "                <div class=\"col-md-3 footer-newsletters\">
                    <h3>Newsletters</h3>

                </div>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 101,  365 => 100,  360 => 69,  357 => 68,  351 => 38,  345 => 34,  339 => 3,  329 => 162,  324 => 160,  318 => 157,  312 => 154,  308 => 153,  302 => 150,  298 => 149,  294 => 148,  288 => 145,  284 => 144,  278 => 141,  274 => 140,  268 => 137,  261 => 133,  257 => 132,  229 => 106,  227 => 100,  223 => 98,  212 => 96,  208 => 95,  198 => 88,  194 => 87,  176 => 71,  174 => 68,  171 => 67,  169 => 66,  161 => 60,  156 => 58,  152 => 57,  149 => 56,  144 => 54,  140 => 53,  136 => 52,  133 => 51,  131 => 50,  118 => 39,  116 => 38,  112 => 37,  108 => 36,  103 => 35,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  68 => 25,  64 => 24,  58 => 21,  54 => 20,  49 => 18,  38 => 10,  28 => 3,  24 => 1,);
    }
}
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     <title>{% block title %}- Fédération Tunisienne de Tennis{% endblock %} </title>*/
/*     <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />*/
/* */
/*     <meta name="author" content="Najd Mrabet" />*/
/*     <meta name="keywords" content="Tennis, club, events, Tunisie, non-profit, federation, tennis, sport" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* */
/*     <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />*/
/*     <!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->*/
/* */
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>*/
/*     <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'/>-->*/
/*     <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>*/
/*     <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>*/
/* */
/*     <link href="{{ asset('css/fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <!--Clients-->*/
/*     <link href="{{ asset('css/own/owl.carousel.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('css/own/owl.theme.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/* */
/*     <link href="{{ asset('css/jquery.bxslider.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('css/jquery.jscrollpane.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/*     <link href="{{ asset('css/minislide/flexslider.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('css/component.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('css/style_dir.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link rel="shortcut icon" type="image/png" href="{{ asset('img/FTT.jpg') }}" />*/
/*     <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />*/
/*     {% block stylesheets %} {% endblock %}*/
/*     <script src="{{ asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/jquery.transit.min.js') }}" type="text/javascript"></script>*/
/*     {% block javascripts %} {% endblock %}*/
/* </head>*/
/* <body>*/
/* <!--SECTION TOP LOGIN-->*/
/* <section class="content-top-login">*/
/*     <div class="container">*/
/*         <div class="col-md-12">*/
/* */
/*             <div class="box-support">*/
/*                 <p class="support-info"><i class="fa fa-envelope-o"></i> ftt@ati.tn </p>*/
/*             </div>*/
/*             <div class="box-login">*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     <i class="fa fa-shopping-cart"></i>*/
/*                     <a style="background-color: #e78315">Bienvenue {{ app.user.username| upper }}</a>*/
/*                     <a href="{{ path('fos_user_change_password') }}">Changer mot de passe</a>*/
/*                     <a href="{{ path('fos_user_security_logout') }}">Se deconnecter</a>*/
/*                 {% else %}*/
/* */
/*                     <a href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/*                     <a href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/*                 {% endif %}*/
/*             </div>*/
/*     </div>*/
/*         </div>*/
/* </section>*/
/* */
/* */
/* {% include '::menu.html.twig' %}*/
/* <body>*/
/* {% block body %}*/
/* <h1>test body</h1>*/
/* {% endblock %}*/
/* */
/* </body>*/
/* */
/* <!--SECTION FOOTER-->*/
/* <!--SECTION FOOTER-->*/
/* <section id="footer-tag">*/
/*     <div class="container">*/
/*         <div class="col-md-12">*/
/*             <div class="col-md-3">*/
/*                 <h3>A propos de nous</h3>*/
/*                 <p>La Fédération tunisienne de tennis (FTT) organise le tennis en Tunisie et met en place un système de classement et de compétition national. La fédération offre plusieurs services à ses fans.</p>*/
/*             </div>*/
/*             <div class="col-md-3 cat-footer">*/
/*                 <div class="footer-map"></div>*/
/*                 <h3 class='last-cat'>Categories</h3>*/
/*                 <ul class="last-tips">*/
/*                     <li><a href="{{ path('ftt_gestion_actualite_national_front_list') }}">Nationales</a></li>*/
/*                     <li><a href="{{ path('ftt_gestion_actualite_international_front_list') }}">Internationales</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-md-3">*/
/*                 <h3>Last News</h3>*/
/*                 <ul class="footer-last-news">*/
/* */
/*                         {% for actu in  getActus() %}*/
/*                          <li><img src="{{ asset(actu.getWebPath()) }}" alt="" /><p>{{ actu.description|length > 40 ? actu.description|slice(0, 40) ~ '...' : actu.description  }}</p></li>*/
/*                         {% endfor%}*/
/*                 </ul>*/
/*             </div>*/
/*             {% block newsletter %}*/
/*                 <div class="col-md-3 footer-newsletters">*/
/*                     <h3>Newsletters</h3>*/
/* */
/*                 </div>*/
/*             {% endblock  %}*/
/*             <div class="col-xs-12">*/
/*                 <ul class="social">*/
/*                     <li><a href=""><i class="fa fa-facebook"></i></a></li>*/
/*                     <li><a href=""><i class="fa fa-twitter"></i></a></li>*/
/*                     <li><a href=""><i class="fa fa-linkedin"></i></a></li>*/
/*                     <li><a href=""><i class="fa fa-digg"></i></a></li>*/
/*                     <li><a href=""><i class="fa fa-rss"></i></a></li>*/
/*                     <li><a href=""><i class="fa fa-youtube"></i></a></li>*/
/*                     <li><a href=""><i class="fa fa-tumblr"></i></a></li>*/
/* */
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <footer>*/
/*     <div class="col-md-12 content-footer">*/
/*         <p>© 2014 - 2015 wttennis.com. All rights reserved. </p>*/
/*     </div>*/
/* </footer>*/
/* */
/* */
/* */
/* */
/* */
/* <!--MENU-->*/
/* <script src="{{ asset('js/menu/modernizr.custom.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('js/menu/cbpHorizontalMenu.js') }}" type="text/javascript"></script>*/
/* <!--END MENU-->*/
/* */
/* <!--Mini Flexslide-->*/
/* <script src="{{ asset('js/minislide/jquery.flexslider.js') }}" type="text/javascript"></script>*/
/* */
/* <!-- Percentace circolar -->*/
/* <script src="{{ asset('js/circle/jquery-asPieProgress.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('js/circle/rainbow.min.js') }}" type="text/javascript"></script>*/
/* */
/* <!--Gallery-->*/
/* <script src="{{ asset('js/gallery/jquery.prettyPhoto.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('js/gallery/isotope.js') }}" type="text/javascript"></script>*/
/* */
/* <!-- Button Anchor Top-->*/
/* <script src="{{ asset('js/jquery.ui.totop.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('js/jquery.bxslider.js') }}" type="text/javascript"></script>*/
/* */
/* <!--Carousel News-->*/
/* <script src="{{ asset('js/jquery.easing.1.3.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('js/jquery.mousewheel.js') }}" type="text/javascript"></script>*/
/* */
/* <!--Carousel Clients-->*/
/* <script src="{{ asset('js/own/owl.carousel.js') }}" type="text/javascript"></script>*/
/* */
/* <!--Count down-->*/
/* <script src="{{ asset('js/jquery.countdown.js') }}" type="text/javascript"></script>*/
/* */
/* <script src="{{ asset('js/custom_ini.js') }}" type="text/javascript"></script>*/
/* */
/* */
/* </body>*/
/* </html>*/
/* */
