<?php

/* FttFrontOfficeBundle:Front:accueil.html.twig */
class __TwigTemplate_35f7886ea9d19482d386ed7d28ad8642bfa2fff8fa34046053ab8790ca884549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FttFrontOfficeBundle:Front:accueil.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'newsletter' => array($this, 'block_newsletter'),
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\"#myModal\").modal('show');
        });
    </script>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    <!-- Section POP up Subcribe now  accueil-->





























































    <section id=\"summary-slider\">
        <div class=\"general\">
            <div class=\"content-result content-result-news col-md-12\" style=\"background: url('";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide2.jpg"), "html", null, true);
        echo "') no-repeat 100% 100%\">
                <div id=\"textslide\" class=\"effect-backcolor\">
                    <div class=\"container\">
                        <div class=\"col-md-12 slide-txt\">
                            <p class=\"sub-result aft-little welcome linetheme-left\" style=\"transform: translate(0px, 0px); opacity: 1;\">La Fédétaion Tunisienne</p>
                            <p class=\"sub-result aft-little linetheme-right\" style=\"transform: translate(0px, 0px); opacity: 1;\">Tennis<span class=\"point-big\">.</span></p>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 90
            echo "                <div id=\"slidematch\" class=\"col-xs-12 col-md-12\">
                    <div class=\"content-match-team-wrapper\">

                        <span class=\"gdlr-left\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "joueur1", array()), "nomJoueur", array()), "html", null, true);
            echo "</span>
                        <span class=\"gdlr-upcoming-match-versus\">VS</span>
                        <span class=\"gdlr-right\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "joueur2", array()), "nomJoueur", array()), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"content-match-team-time\">
                        <span class=\"gdlr-left\">";
            // line 98
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "date", array()), "Y-m-d"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "heure", array()), "H:i:s"), "html", null, true);
            echo "</span>
                        <span class=\"gdlr-right\">";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "terrain", array()), "nomTerrain", array()), "html", null, true);
            echo "</span>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        </div>
    </section>
    <section class=\"news_slide-over-color\">
        <div class=\"news_slide-over\"></div>
        <div class=\"container\">

            <div class=\"col-xs-12 col-md-12 top-slide-info\">
                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 111
            echo "
                    <div class=\"col-xs-6 col-md-6\">
                        <div class=\"col-md-4 slide-cont-img\"><a href=\"\"><img class=\"scale_image\" src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["n"], "getWebPath", array())), "html", null, true);
            echo "\" alt=\"\"/><i class=\"\"></i></a></div>
                        <div class=\"event_date dd-date\">";
            // line 114
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "date", array()), "Y-m-d"), "html", null, true);
            echo " <div class=\"post_theme\">Exlusive</div></div><h4> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "titre", array()), "html", null, true);
            echo "</h4>
                        <p>";
            // line 115
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["n"], "description", array())) > 250)) ? ((twig_slice($this->env, $this->getAttribute($context["n"], "description", array()), 0, 250) . "...")) : ($this->getAttribute($context["n"], "description", array()))), "html", null, true);
            echo ".</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
            </div>

        </div>
    </section>


    ";
        // line 125
        echo twig_include($this->env, $context, "@FttFrontOffice/Front/sponsor.html.twig");
        echo "

";
    }

    // line 130
    public function block_newsletter($context, array $blocks = array())
    {
        // line 131
        echo "    <div class=\"col-md-3 footer-newsletters\">
        <h3>Newsletters</h3>
        ";
        // line 133
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_newsletter"]) ? $context["form_newsletter"] : $this->getContext($context, "form_newsletter")), 'form_start');
        echo "
        <div class=\"name\">
            <label for=\"name\">* Nom:</label><div class=\"clear\"></div>
            ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_newsletter"]) ? $context["form_newsletter"] : $this->getContext($context, "form_newsletter")), 'errors');
        echo "
            ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_newsletter"]) ? $context["form_newsletter"] : $this->getContext($context, "form_newsletter")), "nom", array()), 'widget', array("id" => "name", "attr" => array("class" => "")));
        echo "
        </div>
        <div class=\"email\">
            <label for=\"email\">* Email:</label><div class=\"clear\"></div>
            ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_newsletter"]) ? $context["form_newsletter"] : $this->getContext($context, "form_newsletter")), 'errors');
        echo "
            ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_newsletter"]) ? $context["form_newsletter"] : $this->getContext($context, "form_newsletter")), "mail", array()), 'widget', array("id" => "email", "attr" => array("class" => "")));
        echo "
        </div>
        <div id=\"loader\">
            ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_newsletter"]) ? $context["form_newsletter"] : $this->getContext($context, "form_newsletter")), 'rest');
        echo "
        </div>

        ";
        // line 148
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_newsletter"]) ? $context["form_newsletter"] : $this->getContext($context, "form_newsletter")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:Front:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 148,  253 => 145,  247 => 142,  243 => 141,  236 => 137,  232 => 136,  226 => 133,  222 => 131,  219 => 130,  212 => 125,  203 => 118,  194 => 115,  188 => 114,  184 => 113,  180 => 111,  176 => 110,  167 => 103,  157 => 99,  151 => 98,  145 => 95,  140 => 93,  135 => 90,  131 => 89,  118 => 79,  52 => 15,  49 => 14,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*             $("#myModal").modal('show');*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <!-- Section POP up Subcribe now  accueil-->*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     <section id="summary-slider">*/
/*         <div class="general">*/
/*             <div class="content-result content-result-news col-md-12" style="background: url('{{asset('images/slide2.jpg')  }}') no-repeat 100% 100%">*/
/*                 <div id="textslide" class="effect-backcolor">*/
/*                     <div class="container">*/
/*                         <div class="col-md-12 slide-txt">*/
/*                             <p class="sub-result aft-little welcome linetheme-left" style="transform: translate(0px, 0px); opacity: 1;">La Fédétaion Tunisienne</p>*/
/*                             <p class="sub-result aft-little linetheme-right" style="transform: translate(0px, 0px); opacity: 1;">Tennis<span class="point-big">.</span></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% for m in match %}*/
/*                 <div id="slidematch" class="col-xs-12 col-md-12">*/
/*                     <div class="content-match-team-wrapper">*/
/* */
/*                         <span class="gdlr-left">{{m.joueur1.nomJoueur}}</span>*/
/*                         <span class="gdlr-upcoming-match-versus">VS</span>*/
/*                         <span class="gdlr-right">{{m.joueur2.nomJoueur}}</span>*/
/*                     </div>*/
/*                     <div class="content-match-team-time">*/
/*                         <span class="gdlr-left">{{m.date|date('Y-m-d')}} - {{m.heure|date('H:i:s')}}</span>*/
/*                         <span class="gdlr-right">{{m.terrain.nomTerrain}}</span>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </section>*/
/*     <section class="news_slide-over-color">*/
/*         <div class="news_slide-over"></div>*/
/*         <div class="container">*/
/* */
/*             <div class="col-xs-12 col-md-12 top-slide-info">*/
/*                 {% for n in news %}*/
/* */
/*                     <div class="col-xs-6 col-md-6">*/
/*                         <div class="col-md-4 slide-cont-img"><a href=""><img class="scale_image" src="{{ asset(n.getWebPath)}}" alt=""/><i class=""></i></a></div>*/
/*                         <div class="event_date dd-date">{{n.date|date('Y-m-d')}} <div class="post_theme">Exlusive</div></div><h4> {{ n.titre }}</h4>*/
/*                         <p>{{ n.description|length > 250 ? n.description|slice(0, 250) ~ '...' : n.description  }}.</p>*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*     </section>*/
/* */
/* */
/*     {{ include('@FttFrontOffice/Front/sponsor.html.twig') }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block newsletter %}*/
/*     <div class="col-md-3 footer-newsletters">*/
/*         <h3>Newsletters</h3>*/
/*         {{ form_start(form_newsletter) }}*/
/*         <div class="name">*/
/*             <label for="name">* Nom:</label><div class="clear"></div>*/
/*             {{ form_errors(form_newsletter) }}*/
/*             {{ form_widget(form_newsletter.nom, { 'id': 'name',  'attr': { 'class' : '' }} )}}*/
/*         </div>*/
/*         <div class="email">*/
/*             <label for="email">* Email:</label><div class="clear"></div>*/
/*             {{ form_errors(form_newsletter) }}*/
/*             {{ form_widget(form_newsletter.mail, { 'id': 'email',  'attr': { 'class' : '' }} )}}*/
/*         </div>*/
/*         <div id="loader">*/
/*             {{ form_rest(form_newsletter) }}*/
/*         </div>*/
/* */
/*         {{ form_end(form_newsletter) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
