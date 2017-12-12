<?php

/* FttFrontOfficeBundle:Front:contact.html.twig */
class __TwigTemplate_776f20070100eec41fab9da90550061739317b68bc459f4cb18cc5657ca308bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FttFrontOfficeBundle:Front:contact.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 3
        echo "
    <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyBlpD1XtETw0jfGx7DlkThFXBVSr5uY9-0\"></script>
    <script type=\"text/javascript\">
        /********************************************
         GOOGLE MAPS
         ********************************************/

            // The following example creates a marker in Stockholm, Sweden
            // using a DROP animation. Clicking on the marker will toggle
            // the animation between a BOUNCE animation and no animation.
        \$(document).ready(function (\$) {
            \"use strict\";
            var stockholm = new google.maps.LatLng(36.843697, 10.1835453);
            var parliament = new google.maps.LatLng(36.843697, 10.1835453);
            var image = '';
            var marker;
            var map;

            function initialize() {
                var styleArray = [
                    {
                        featureType: 'all',
                        stylers: [
                            { saturation: -1000 }
                        ]
                    }, {
                        featureType: 'road.arterial',
                        elementType: 'geometry',
                        stylers: [
                            { hue: '#00ffee' },
                            { saturation: -100 },
                            { \"lightness\": -8 },
                            { \"gamma\": 1.18 }
                        ]
                    }
                ];
                var mapOptions = {
                    zoom: 15,
                    styles: styleArray,
                    center: stockholm
                };

                map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

                marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    icon: image,
                    position: parliament
                });
                google.maps.event.addListener(marker, 'click', toggleBounce);
            }

            function toggleBounce() {

                if (marker.getAnimation() != null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

            google.maps.event.addDomListener(window, 'load', initialize);

        });
    </script>
";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "    <section class=\"drawer\">
        <section id=\"contact\" class=\"secondary-page\">
            <div class=\"general\">

                <div class=\"container\">

                    <!--Google Maps-->
                    <div id=\"map_container\">
                        <div id=\"map_canvas\"></div>
                    </div>



                    <div class=\"content-link col-md-12\">
                        <div id=\"contact_form\" class=\"top-score-title col-md-9 align-center\">
                            <h3>Contact <span>form</span><span class=\"point-little\">.</span></h3>


                                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Contactsuccess"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 93
            echo "                                    <div class=\"alert alert-success fade in\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>

                                    <strong>Succés!</strong> ";
            // line 96
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "


                            ";
        // line 102
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                            <div class=\"name\">
                                <label for=\"name\">* Name:</label><div class=\"clear\"></div>
                                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("id" => "name", "attr" => array("class" => "")));
        echo "
                            </div>
                            <div class=\"email\">
                                <label for=\"email\">* Email:</label><div class=\"clear\"></div>
                                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("id" => "email", "attr" => array("class" => "")));
        echo "
                                ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'errors');
        echo "
                            </div>
                            <div class=\"message\">
                                <label for=\"message\"> Message:</label>
                                ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget', array("id" => "message", "attr" => array("class" => "txt-area")));
        echo "
                            </div>

                            <div id=\"loader\">
                                ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            </div>

                            <p class=\"error\">";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
                            ";
        // line 123
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>


                        <div id=\"info-company\" class=\"top-score-title col-md-3 align-center\">
                            <h3>Info</h3>
                            <div class=\"col-md-12\">
                                <p><i class=\"fa fa-phone\"></i>Fax : (+216) 71 798844  </p>
                                <p><i class=\"fa fa-phone\"></i>Tél : (+216) 71 844144  </p>
                                <p><i class=\"fa fa-envelope-o\"></i>E-mail : ftt@ati.tn  </p>
                                <p><i class=\"fa fa-globe\"></i>Cité Nationale Sportive El Menzah </p>
                                <p><i class=\"fa fa-map-marker\"></i>B.P 350 Tunis 1004 </p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>


    </section>

    ";
        // line 148
        echo twig_include($this->env, $context, "@FttFrontOffice/Front/sponsor.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "FttFrontOfficeBundle:Front:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 148,  191 => 123,  187 => 122,  181 => 119,  174 => 115,  167 => 111,  163 => 110,  156 => 106,  149 => 102,  144 => 99,  135 => 96,  130 => 93,  126 => 92,  106 => 74,  103 => 73,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block javascripts %}*/
/* */
/*     <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBlpD1XtETw0jfGx7DlkThFXBVSr5uY9-0"></script>*/
/*     <script type="text/javascript">*/
/*         /*********************************************/
/*          GOOGLE MAPS*/
/*          ********************************************//* */
/* */
/*             // The following example creates a marker in Stockholm, Sweden*/
/*             // using a DROP animation. Clicking on the marker will toggle*/
/*             // the animation between a BOUNCE animation and no animation.*/
/*         $(document).ready(function ($) {*/
/*             "use strict";*/
/*             var stockholm = new google.maps.LatLng(36.843697, 10.1835453);*/
/*             var parliament = new google.maps.LatLng(36.843697, 10.1835453);*/
/*             var image = '';*/
/*             var marker;*/
/*             var map;*/
/* */
/*             function initialize() {*/
/*                 var styleArray = [*/
/*                     {*/
/*                         featureType: 'all',*/
/*                         stylers: [*/
/*                             { saturation: -1000 }*/
/*                         ]*/
/*                     }, {*/
/*                         featureType: 'road.arterial',*/
/*                         elementType: 'geometry',*/
/*                         stylers: [*/
/*                             { hue: '#00ffee' },*/
/*                             { saturation: -100 },*/
/*                             { "lightness": -8 },*/
/*                             { "gamma": 1.18 }*/
/*                         ]*/
/*                     }*/
/*                 ];*/
/*                 var mapOptions = {*/
/*                     zoom: 15,*/
/*                     styles: styleArray,*/
/*                     center: stockholm*/
/*                 };*/
/* */
/*                 map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);*/
/* */
/*                 marker = new google.maps.Marker({*/
/*                     map: map,*/
/*                     draggable: true,*/
/*                     animation: google.maps.Animation.DROP,*/
/*                     icon: image,*/
/*                     position: parliament*/
/*                 });*/
/*                 google.maps.event.addListener(marker, 'click', toggleBounce);*/
/*             }*/
/* */
/*             function toggleBounce() {*/
/* */
/*                 if (marker.getAnimation() != null) {*/
/*                     marker.setAnimation(null);*/
/*                 } else {*/
/*                     marker.setAnimation(google.maps.Animation.BOUNCE);*/
/*                 }*/
/*             }*/
/* */
/*             google.maps.event.addDomListener(window, 'load', initialize);*/
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <section class="drawer">*/
/*         <section id="contact" class="secondary-page">*/
/*             <div class="general">*/
/* */
/*                 <div class="container">*/
/* */
/*                     <!--Google Maps-->*/
/*                     <div id="map_container">*/
/*                         <div id="map_canvas"></div>*/
/*                     </div>*/
/* */
/* */
/* */
/*                     <div class="content-link col-md-12">*/
/*                         <div id="contact_form" class="top-score-title col-md-9 align-center">*/
/*                             <h3>Contact <span>form</span><span class="point-little">.</span></h3>*/
/* */
/* */
/*                                 {% for flashMessage in app.session.flashbag.get('Contactsuccess') %}*/
/*                                     <div class="alert alert-success fade in">*/
/*                                     <a href="#" class="close" data-dismiss="alert">&times;</a>*/
/* */
/*                                     <strong>Succés!</strong> {{ flashMessage }}*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/* */
/* */
/* */
/*                             {{ form_start(form) }}*/
/* */
/*                             <div class="name">*/
/*                                 <label for="name">* Name:</label><div class="clear"></div>*/
/*                                 {{ form_widget(form.name, { 'id': 'name',  'attr': { 'class' : '' }} )}}*/
/*                             </div>*/
/*                             <div class="email">*/
/*                                 <label for="email">* Email:</label><div class="clear"></div>*/
/*                                 {{ form_widget(form.mail, { 'id': 'email',  'attr': { 'class' : '' }} )}}*/
/*                                 {{ form_errors(form.mail) }}*/
/*                             </div>*/
/*                             <div class="message">*/
/*                                 <label for="message"> Message:</label>*/
/*                                 {{ form_widget(form.message, { 'id': 'message',  'attr': { 'class' : 'txt-area' }} )}}*/
/*                             </div>*/
/* */
/*                             <div id="loader">*/
/*                                 {{ form_rest(form)}}*/
/*                             </div>*/
/* */
/*                             <p class="error">{{ form_errors(form) }}</p>*/
/*                             {{ form_end(form) }}*/
/*                         </div>*/
/* */
/* */
/*                         <div id="info-company" class="top-score-title col-md-3 align-center">*/
/*                             <h3>Info</h3>*/
/*                             <div class="col-md-12">*/
/*                                 <p><i class="fa fa-phone"></i>Fax : (+216) 71 798844  </p>*/
/*                                 <p><i class="fa fa-phone"></i>Tél : (+216) 71 844144  </p>*/
/*                                 <p><i class="fa fa-envelope-o"></i>E-mail : ftt@ati.tn  </p>*/
/*                                 <p><i class="fa fa-globe"></i>Cité Nationale Sportive El Menzah </p>*/
/*                                 <p><i class="fa fa-map-marker"></i>B.P 350 Tunis 1004 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/* */
/*             </div>*/
/*         </section>*/
/* */
/* */
/*     </section>*/
/* */
/*     {{ include('@FttFrontOffice/Front/sponsor.html.twig') }}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
