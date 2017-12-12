<?php

/* FttFrontOfficeBundle:Front:accueil.html.twig */
class __TwigTemplate_25a333b54c58ddbf5408126bb0d619fca522e7fc3211777959d90710b080ea9c extends Twig_Template
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
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
     <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
     <script type=\"text/javascript\">
         \$(document).ready(function(){
             \$(\"#myModal\").modal('show');
         });
     </script>
 ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "<!-- Section POP up Subcribe now  accueil-->


    <section id=\"summary-slider\">
        <div class=\"general\">
            <div class=\"content-result content-result-news col-md-12\" style=\"background: url('";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide2.jpg"), "html", null, true);
        echo "') no-repeat 100% 100%\">
                <div id=\"textslide\" class=\"effect-backcolor\">
                    <div class=\"container\">
                        <div class=\"col-md-12 slide-txt\">
                            <p class=\"sub-result aft-little welcome linetheme-left\" style=\"transform: translate(0px, 0px); opacity: 1;\">La Fédération Tunisienne</p>
                            <p class=\"sub-result aft-little linetheme-right\" style=\"transform: translate(0px, 0px); opacity: 1;\">Tennis<span class=\"point-big\">.</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"slidematch\" class=\"col-xs-12 col-md-12\">
                <div class=\"content-match-team-wrapper\">
                    <span class=\"gdlr-left\">Real Tennis</span>
                    <span class=\"gdlr-upcoming-match-versus\">VS</span>
                    <span class=\"gdlr-right\">Wednesday Club</span>
                </div>
                <div class=\"content-match-team-time\">
                    <span class=\"gdlr-left\">23 Sep 2016 - 14:00</span>
                    <span class=\"gdlr-right\">Real Stadium</span>
                </div>
            </div>
        </div>
    </section>




    <!-- SECTION NEWS SLIDER -->
    <section class=\"news_slide-over-color\">
        <div class=\"news_slide-over\"></div>
        <div class=\"container\">
            <div class=\"col-xs-12 col-md-12 top-first-info\">
                <div class=\"col-md-4\">
                    <section class=\"slider\">
                        <div id=\"slider\" class=\"flexslider flexslider-attachments\">
                            <ul class=\"slides\">
                                <li data-thumb=\"images/slider/mini-slider/thumb1.jpg\"><img src=\"http://placehold.it/1024x700\" alt=\"\"/></li>
                                <li data-thumb=\"images/slider/mini-slider/thumb2.jpg\"><img src=\"http://placehold.it/1024x700\" alt=\"\"/></li>
                                <li data-thumb=\"images/slider/mini-slider/thumb3.jpg\"><img src=\"http://placehold.it/1024x700\" alt=\"\"/></li>
                            </ul>
                        </div>
                        <div class=\"slide-news-bottom\"><a href=\"#\">Slide News</a><a class=\"i-ico\" href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a></div>
                    </section>
                </div>
                <div class=\"col-md-4\">
                    <img src=\"http://placehold.it/1024x700\" alt=\"\"/>
                    <div class=\"slide-news-bottom\"><a href=\"#\">Atp Europe Tour</a><a class=\"i-ico\" href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a></div>
                </div>
                <div class=\"col-md-4\">
                    <img src=\"http://placehold.it/1024x700\" alt=\"\"/>
                    <div class=\"slide-news-bottom\"><a href=\"#\">Wtp Tokyo Stadium</a><a class=\"i-ico\" href=\"#\"><i class=\"fa fa-angle-double-right\"></i></a></div>
                </div>
            </div>
            <div class=\"col-xs-12 col-md-12 top-slide-info\">
                <div class=\"col-xs-6 col-md-6\">
                    <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"http://placehold.it/614x428\" alt=\"\"/><i class=\"fa fa-video-camera\"></i></a></div>
                    <div class=\"event_date dd-date\">May 01, 2014 5:50 am <div class=\"post_theme\">Exlusive</div></div><h4> Stay Ahead of the curve</h4>
                    <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis. Nulla venenatis, quam vitae pellentesque sollicitudin.</p>
                </div>
                <div class=\"col-xs-6 col-md-6\">
                    <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"http://placehold.it/614x428\" alt=\"\"/><i class=\"fa fa-picture-o\"></i></a></div>
                    <div class=\"event_date dd-date\">May 01, 2014 5:50 am <div class=\"post_theme\">Interview</div></div><h4> Stay Ahead of the curve</h4>
                    <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis. Nulla venenatis, quam vitae pellentesque sollicitudin.</p>

                </div>
                <div class=\"col-xs-6 col-md-6 box-top-txt\">
                    <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"http://placehold.it/614x428\" alt=\"\"/><i class=\"fa fa-picture-o\"></i></a></div>
                    <div class=\"event_date dd-date\">May 01, 2014 5:50 am</div><h4> Stay Ahead of the curve</h4>
                    <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis. Nulla venenatis, quam vitae pellentesque sollicitudin.</p>

                </div>
                <div class=\"col-xs-6 col-md-6 box-top-txt\">
                    <div class=\"col-md-4 slide-cont-img\"><a href=\"single_news.html\"><img class=\"scale_image\" src=\"http://placehold.it/614x428\" alt=\"\"/><i class=\"fa fa-video-camera\"></i></a></div>
                    <div class=\"event_date dd-date\">May 01, 2014 5:50 am</div><h4> Stay Ahead of the curve</h4>
                    <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis. Nulla venenatis, quam vitae pellentesque sollicitudin.</p>

                </div>
            </div>
        </div>
    </section>

    <section id=\"parallaxTraining\">

    </section>
    <!--SECTION Match TOP SCORE-->
    <section id=\"atp-match\">
        <div class=\"container\">
            <div id=\"people-top\" class=\"top-match col-xs-12 col-md-12\">
                <h3 class=\"news-title n-match\">Last <span>Match</span><span class=\"point-little\">.</span></h3>
                <p class=\"subtitle\">A small creative team, trying to enrich the lives of others and build brands
                    that a normal humans can understand.</p>
                <!--SECTION ATP MATCH-->
                <div class=\"next-match-co col-xs-8 col-md-8\">
                    <div id=\"nextmatch-content\" class=\"experience\">
                        <div class=\"col-xs-12 atphead\"><div class=\"match-sing-title\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sub-ball.png"), "html", null, true);
        echo "\" alt=\"\" />ATP.HEAD2</div></div>
                        <div class=\"col-xs-4 pht-1 pht-left\">
                            <div class=\"img-face-home\">
                                <img src=\"http://placehold.it/235x224\" alt=\"\" />
                                <p class=\"name-mc\">Nikol Brian</p>
                            </div>
                        </div>
                        <div class=\"col-xs-4 pl-point \">
                            <p class=\"col-xs-12 name-mc-title\">BEIJING - FIRST ROUND</p>
                            <div class=\"col-xs-4 nm-result\">
                                <p class=\"nr1 ris1\"> 0 </p>
                                <p class=\"nr2\"> 0% </p>
                            </div>
                            <div class=\"col-xs-4 nm-result-vs\">
                                <p class=\"nrvs\"> - VS - </p>
                            </div>
                            <div class=\"col-xs-4 nm-result\">
                                <p class=\"nr1 ris2\"> 1 </p>
                                <p class=\"nr2\"> 100% </p>
                            </div>

                        </div>
                        <div class=\"col-xs-4 pht-1 pht-right\">
                            <div class=\"img-face-home\">
                                <img src=\"http://placehold.it/235x224\" alt=\"\" />
                                <p class=\"name-mc\">Roial Mink</p>
                            </div>

                        </div>
                        <div class=\"col-xs-12 atphead\"><div class=\"match-sing-title inf-bottom\">
                                <p><i class=\"fa fa-calendar-o\"></i>May 16, 2012 14:30 - 16:00 <i class=\"fa fa-map-marker\"></i> London Brion Stadium</p>
                            </div></div>
                    </div>
                </div>
                <div class=\"col-md-4 home-page\">
                    <div class=\"main\">
                        <div class=\"tabs animated-slide-2\">
                            <div class=\"result-filter\">
                                <ul class=\"tab-links\">
                                    <li class=\"active\"><a href=\"#tab1111\">ATP</a></li>
                                    <li><a href=\"#tab2222\">WTA</a></li>
                                    <li><a href=\"#tab3333\">DBL</a></li>
                                </ul>
                            </div>
                            <div class=\"tab-content-point\">
                                <div id=\"tab1111\" class=\"tab active\">
                                    <table class=\"tab-score\">
                                        <tr class=\"top-scrore-table\"><td class=\"score-position\">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>
                                        <tr><td class=\"score-position\">1.</td><td><a href=\"single_player.html\">Nicol Dorian</a></td><td><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/serbia.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>12770</td></tr>
                                        <tr><td class=\"score-position\">2.</td><td><a href=\"single_player.html\">Rafael Milk</a></td><td><img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/argentina.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>10670</td></tr>
                                        <tr><td class=\"score-position\">3.</td><td><a href=\"single_player.html\">Roger Figo</a></td><td><img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/uk.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>7490</td></tr>
                                        <tr><td class=\"score-position\">4.</td><td><a href=\"single_player.html\">St. Waiker</a></td><td><img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/brazil.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>5985</td></tr>
                                        <tr><td class=\"score-position\">5.</td><td><a href=\"single_player.html\">David Ruby</a></td><td><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/japan.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>4765</td></tr>

                                    </table>
                                </div>
                                <div id=\"tab2222\" class=\"tab\">
                                    <table class=\"tab-score\">
                                        <tr class=\"top-scrore-table\"><td class=\"score-position\">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>
                                        <tr><td class=\"score-position\">1.</td><td><a href=\"single_player.html\">Serena Brain</a></td><td><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/usa.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                        <tr><td class=\"score-position\">2.</td><td><a href=\"single_player.html\">Simona Figo</a></td><td><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/uk.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                        <tr><td class=\"score-position\">3.</td><td><a href=\"single_player.html\">Nio Red</a></td><td><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/italy.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                        <tr><td class=\"score-position\">4.</td><td><a href=\"single_player.html\">Petra Curt</a></td><td><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/denmark.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                        <tr><td class=\"score-position\">5.</td><td><a href=\"single_player.html\">Ag. Rader</a></td><td><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/flags/uk.png"), "html", null, true);
        echo "\" alt=\"\" /></td><td>1234</td></tr>
                                    </table>
                                </div>
                                <div id=\"tab3333\" class=\"tab\">
                                    <table class=\"tab-score\">
                                        <tr class=\"top-scrore-table\"><td class=\"score-position\">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>
                                        <tr><td class=\"score-position\">1.</td><td><a href=\"single_player.html\">name1</a></td><td>-</td><td>1234</td></tr>
                                        <tr><td class=\"score-position\">2.</td><td><a href=\"single_player.html\">name2</a></td><td>-</td><td>1234</td></tr>
                                        <tr><td class=\"score-position\">3.</td><td><a href=\"single_player.html\">name3</a></td><td>-</td><td>1234</td></tr>
                                        <tr><td class=\"score-position\">4.</td><td><a href=\"single_player.html\">name4</a></td><td>-</td><td>1234</td></tr>
                                        <tr><td class=\"score-position\">5.</td><td><a href=\"single_player.html\">name5</a></td><td>-</td><td>1234</td></tr>
                                    </table>
                                </div>
                            </div>
                            <div class=\"score-view-all\"><a class=\"pl-point-button\" href=\"results.html\">View All</a></div>
                        </div>
                    </div>
                </div>
            </div><!--Close Top Match-->
        </div>
    </section>
    <!--SECTION NEXT MATCH-->
    <section id=\"next-match\">
        <div  class=\"container\">
            <div class=\"next-match-news top-match col-xs-12 col-md-12\">
                <h3 class=\"news-title n-match\">Next <span>Match</span><span class=\"point-little\">.</span></h3>
                <p class=\"subtitle\">A small creative team, trying to enrich the lives of others and build brands
                    that a normal humans can understand.</p>
                <div class=\"other-match col-md-4\">
                    <div class=\"score-next-time\">
                        <div class=\"circle-ico\"><p>ATP</p></div>
                    </div>
                    <div id=\"getting-started\"></div>
                    <div class=\"col-xs-5 col-md-5 match-team\">
                        <img class=\"\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/team1.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <p>Fernand</p>
                    </div>
                    <div class=\"col-xs-2 col-md-2 match-team-vs\">
                        <span class=\"txt-vs\"> - vs - </span>
                    </div>
                    <div class=\"col-xs-5 col-md-5 match-team\">
                        <img class=\"\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/team2.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <p>Brain</p>
                    </div>
                    <div class=\"next-match-place\">
                        <p class='sub-result'>Qatar ExonMobil</p>
                        <p class=\"dd-news-date\">April 22, 2016 ~ 2:30pm Canada Stadium</p>
                    </div>

                </div>
                <div class=\"other-match col-md-4\">
                    <div class=\"match-team-list\">
                        <img class=\"t-img1\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <span>Fernand</span>
                        <span class=\"txt-vs\"> - vs - </span>
                        <span>Brain</span>
                        <img class=\"t-img2\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <p>22/06/2015 14:30 - 16:00</p>
                    </div>
                    <div class=\"match-team-list\">
                        <img class=\"t-img1\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <span>Fernand</span>
                        <span class=\"txt-vs\"> - vs - </span>
                        <span>Brain</span>
                        <img class=\"t-img2\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <p>22/06/2015 14:30 - 16:00</p>
                    </div>
                    <div class=\"match-team-list\">
                        <img class=\"t-img1\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <span>Fernand</span>
                        <span class=\"txt-vs\"> - vs - </span>
                        <span>Brain</span>
                        <img class=\"t-img2\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/team1_small.png"), "html", null, true);
        echo "\" alt=\"\"/>
                        <p>22/06/2015 14:30 - 16:00</p>
                    </div>
                    <div class=\"team-view-all\">
                        <p>View all</p>
                    </div>
                </div>
                <div class=\"other-match col-md-4 other-last\">
                    <img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/adwertise.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                </div>

            </div>
        </div>
    </section>
    <!--SECTION STATISTIC RESULTS-->
    <section id=\"resultsPoint\">
        <div class=\"container\">
            <div class=\"top-match col-xs-12 col-md-12\">
                <div class=\"top-score-title\">
                    <h3>Statistics<span class=\"point-little\">.</span></h3>
                    <p class=\"subtitle\">A small creative team, trying to enrich the lives of others and build brands
                        that a normal humans can understand.</p>
                    <div class=\"col-xs-12 circle-percentage\">
                        <div class=\"col-xs-3\">
                            <div class=\"pie_progress\" role=\"progressbar\" data-goal=\"83\" data-barcolor=\"#f59123\" data-barsize=\"10\">
                                <div class=\"pie_content\">
                                    <div class=\"pie_progress__number\">0%</div>
                                    <div class=\"pie_progress__content\">Super-Senior</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-3\">
                            <div class=\"pie_progress\" role=\"progressbar\" data-goal=\"65\" data-barcolor=\"#2c333b\" data-barsize=\"10\">
                                <div class=\"pie_content\">
                                    <div class=\"pie_progress__number\">0%</div>
                                    <div class=\"pie_progress__content\">Senior</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-3\">
                            <div class=\"pie_progress\" role=\"progressbar\" data-goal=\"32\" data-barcolor=\"#f59123\" data-barsize=\"10\">
                                <div class=\"pie_content\">
                                    <div class=\"pie_progress__number\">0%</div>
                                    <div class=\"pie_progress__content\">Pro</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-3\">
                            <div class=\"pie_progress\" role=\"progressbar\" data-goal=\"73\" data-barcolor=\"#2c333b\" data-barsize=\"10\">
                                <div class=\"pie_content\">
                                    <div class=\"pie_progress__number\">0%</div>
                                    <div class=\"pie_progress__content\">Junior</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>

                </div>
            </div>
        </div>
    </section>

    <!-- SECTION SUBSCRIPTIONS-->
    <section class=\"bbtxt-content-subscription\">
        <div class=\"container\">
            <div class=\"col-xs-12 bbtxt-box\">
                <h4><i class=\"fa fa-quote-left\"></i><span class=\"middle-txt\">Enter in</span> <span class=\"point-big\">WT</span> Tennis<i class=\"fa fa-quote-right\"></i></h4>
                <p class=\"subin\">The best tennis tour around the europe step by step.</p>
                <div class=\"subscription-content\">
                    <div class=\"col-md-4\">
                        <div class=\"subscription-tennis\">

                            <h3>subscription<span> Free</span></h3>

                            <p class=\"desc-subscription\">A Responsive Online Shopping website can attract its more is buyers as the user.</p>
                            <a class=\"pl-point-button\" href=\"\">Read more</a>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"subscription-tennis\">

                            <h3>subscription<span> Gold</span></h3>

                            <p class=\"desc-subscription\">A Responsive Online Shopping website can attract its more is buyers as the user.</p>
                            <a class=\"pl-point-button\" href=\"\">Read more</a>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"subscription-tennis\">

                            <h3>subscription<span> Premium</span></h3>

                            <p class=\"desc-subscription\">A Responsive Online Shopping website can attract its more is buyers as the user.</p>
                            <a class=\"pl-point-button\" href=\"\">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION LAST PHOTO-->
    <section id=\"news-section\">
        <div class=\"container\">
            <div class=\"top-match col-xs-12 col-md-12\">
                <div class=\"news-content\">
                    <h3 class=\"news-title\">Latest <span>Photo</span><span class=\"point-little\">.</span></h3>
                    <p class=\"subtitle\">A small creative team, trying to enrich the lives of others and build brands
                        that a normal humans can understand.</p>
                    <div id=\"container-vert-n\">
                        <dl class=\"group\">
                            <dt></dt>
                            <dd>
                                <ul class=\"filter group albumFilter\">
                                    <li data-filter=\"*\" class=\"current\"><a  href=\"#\">ALL</a></li>
                                    <li data-filter=\".cat1\"><a  href=\"#\">ATP</a></li>
                                    <li data-filter=\".cat2\"><a  href=\"#\">WTP</a></li>
                                    <li data-filter=\".cat3\"><a  href=\"#\">BEAUTY</a></li>
                                    <li data-filter=\".cat4\"><a  href=\"#\">MEETING</a></li>
                                </ul>
                            </dd>
                        </dl>
                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div>
        </div>

        <ul class=\"portfolio group albumContainer\">
            <li class=\"item block cat2 col-xs-3\">
                <a href=\"http://placehold.it/1600x1000\" data-gal=\"prettyPhoto[portfolio]\"><img src=\"http://placehold.it/1280x800\"  alt=\"Yulia Gorbachenko, Hannah 1\" /></a>
            </li>
            <li class=\"item block cat1 col-xs-3\">
                <a href=\"http://placehold.it/1600x1000\" data-gal=\"prettyPhoto[portfolio]\"><img src=\"http://placehold.it/1280x800\"  alt=\"Yulia Gorbachenko, Hair 1\" /></a>
            </li>
            <li class=\"item block cat1 col-xs-3\">
                <a href=\"http://placehold.it/1600x1000\" data-gal=\"prettyPhoto[portfolio]\"><img src=\"http://placehold.it/1280x800\"  alt=\"Yulia Gorbachenko, Hair 2\" /></a>
            </li>
            <li class=\"item block cat3 col-xs-3\">
                <a href=\"http://placehold.it/1600x1000\" data-gal=\"prettyPhoto[portfolio]\"><img src=\"http://placehold.it/1280x800\"  alt=\"Yulia Gorbachenko, Traction 1\" /></a>
            </li>
            <li class=\"item block cat1 cat3 col-xs-3\">
                <a href=\"http://placehold.it/1600x1000\" data-gal=\"prettyPhoto[portfolio]\"><img src=\"http://placehold.it/1280x800\"  alt=\"Yulia Gorbachenko, Traction 1\" /></a>
            </li>
            <li class=\"item block cat2 col-xs-3\">
                <a href=\"http://placehold.it/1600x1000\" data-gal=\"prettyPhoto[portfolio]\"><img src=\"http://placehold.it/1280x800\"  alt=\"Yulia Gorbachenko, Beauty 2\" /></a>
            </li>
            <li class=\"item block cat1 col-xs-3\">
                <a href=\"http://placehold.it/1600x1000\" data-gal=\"prettyPhoto[portfolio]\"><img src=\"http://placehold.it/1280x800\"  alt=\"Yulia Gorbachenko, Hair 1\" /></a>
            </li>
            <li class=\"item block cat1 cat3 col-xs-3\">
                <a href=\"http://placehold.it/1600x1000\" data-gal=\"prettyPhoto[portfolio]\"><img src=\"http://placehold.it/1280x800\"  alt=\"Yulia Gorbachenko, Traction 1\" /></a>
            </li>
        </ul>
    </section>
    <!--SECTION CLIENTS-->
    <section class=\"container\">
        <div class=\"top-video col-xs-12 col-md-12\">
            <h3>OUR <span>CLIENT</span><span class=\"point-little\">.</span></h3>
            <p class=\"subtitle\">A small creative team, trying to enrich the lives of others and build brands
                that a normal humans can understand.</p>

            <div id=\"testimonials\">

                <div id=\"owl-demo\" class=\"owl-carousel\">
                    <div class=\"item\">
                        <img src=\"http://placehold.it/235x224\" alt=\"\" />
                        <div class=\"testimon-desc\">
                            <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                            <p>A small <span>creative</span> team, trying to enrich the lives of others</p>
                            <p class=\"nm-name\">- Brian Rood</p>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"http://placehold.it/235x224\" alt=\"\" />
                        <div class=\"testimon-desc\">
                            <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                            <p>A small <span>creative</span> team, trying to enrich the lives of others</p>
                            <p class=\"nm-name\">- Miki Rood</p>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"http://placehold.it/235x224\" alt=\"\" />
                        <div class=\"testimon-desc\">
                            <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>
                            <p>A small <span>creative</span> team, trying to enrich the lives of others</p>
                            <p class=\"nm-name\">- Robert Rood</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION SPONSOR-->
    ";
        // line 444
        echo twig_include($this->env, $context, "@FttFrontOffice/Front/sponsor.html.twig");
        echo "

";
    }

    // line 449
    public function block_newsletter($context, array $blocks = array())
    {
        // line 450
        echo "        <div class=\"col-md-3 footer-newsletters\">
            <h3>Newsletters</h3>
            ";
        // line 452
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_newsletter"]) ? $context["form_newsletter"] : null), 'form_start');
        echo "
                <div class=\"name\">
                    <label for=\"name\">* Nom:</label><div class=\"clear\"></div>
                    ";
        // line 455
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_newsletter"]) ? $context["form_newsletter"] : null), 'errors');
        echo "
                    ";
        // line 456
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_newsletter"]) ? $context["form_newsletter"] : null), "nom", array()), 'widget', array("id" => "name", "attr" => array("class" => "")));
        echo "
                </div>
                <div class=\"email\">
                    <label for=\"email\">* Email:</label><div class=\"clear\"></div>
                    ";
        // line 460
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_newsletter"]) ? $context["form_newsletter"] : null), 'errors');
        echo "
                    ";
        // line 461
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_newsletter"]) ? $context["form_newsletter"] : null), "mail", array()), 'widget', array("id" => "email", "attr" => array("class" => "")));
        echo "
                </div>
                <div id=\"loader\">
                    ";
        // line 464
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_newsletter"]) ? $context["form_newsletter"] : null), 'rest');
        echo "
                </div>

            ";
        // line 467
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_newsletter"]) ? $context["form_newsletter"] : null), 'form_end');
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
        return array (  593 => 467,  587 => 464,  581 => 461,  577 => 460,  570 => 456,  566 => 455,  560 => 452,  556 => 450,  553 => 449,  546 => 444,  356 => 257,  345 => 249,  338 => 245,  331 => 241,  324 => 237,  317 => 233,  310 => 229,  296 => 218,  286 => 211,  249 => 177,  245 => 176,  241 => 175,  237 => 174,  233 => 173,  223 => 166,  219 => 165,  215 => 164,  211 => 163,  207 => 162,  156 => 114,  59 => 20,  52 => 15,  49 => 14,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block javascripts %}*/
/*      <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>*/
/*      <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*      <script type="text/javascript">*/
/*          $(document).ready(function(){*/
/*              $("#myModal").modal('show');*/
/*          });*/
/*      </script>*/
/*  {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <!-- Section POP up Subcribe now  accueil-->*/
/* */
/* */
/*     <section id="summary-slider">*/
/*         <div class="general">*/
/*             <div class="content-result content-result-news col-md-12" style="background: url('{{asset('images/slide2.jpg')  }}') no-repeat 100% 100%">*/
/*                 <div id="textslide" class="effect-backcolor">*/
/*                     <div class="container">*/
/*                         <div class="col-md-12 slide-txt">*/
/*                             <p class="sub-result aft-little welcome linetheme-left" style="transform: translate(0px, 0px); opacity: 1;">La Fédération Tunisienne</p>*/
/*                             <p class="sub-result aft-little linetheme-right" style="transform: translate(0px, 0px); opacity: 1;">Tennis<span class="point-big">.</span></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="slidematch" class="col-xs-12 col-md-12">*/
/*                 <div class="content-match-team-wrapper">*/
/*                     <span class="gdlr-left">Real Tennis</span>*/
/*                     <span class="gdlr-upcoming-match-versus">VS</span>*/
/*                     <span class="gdlr-right">Wednesday Club</span>*/
/*                 </div>*/
/*                 <div class="content-match-team-time">*/
/*                     <span class="gdlr-left">23 Sep 2016 - 14:00</span>*/
/*                     <span class="gdlr-right">Real Stadium</span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* */
/* */
/* */
/*     <!-- SECTION NEWS SLIDER -->*/
/*     <section class="news_slide-over-color">*/
/*         <div class="news_slide-over"></div>*/
/*         <div class="container">*/
/*             <div class="col-xs-12 col-md-12 top-first-info">*/
/*                 <div class="col-md-4">*/
/*                     <section class="slider">*/
/*                         <div id="slider" class="flexslider flexslider-attachments">*/
/*                             <ul class="slides">*/
/*                                 <li data-thumb="images/slider/mini-slider/thumb1.jpg"><img src="http://placehold.it/1024x700" alt=""/></li>*/
/*                                 <li data-thumb="images/slider/mini-slider/thumb2.jpg"><img src="http://placehold.it/1024x700" alt=""/></li>*/
/*                                 <li data-thumb="images/slider/mini-slider/thumb3.jpg"><img src="http://placehold.it/1024x700" alt=""/></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="slide-news-bottom"><a href="#">Slide News</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*                     </section>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <img src="http://placehold.it/1024x700" alt=""/>*/
/*                     <div class="slide-news-bottom"><a href="#">Atp Europe Tour</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <img src="http://placehold.it/1024x700" alt=""/>*/
/*                     <div class="slide-news-bottom"><a href="#">Wtp Tokyo Stadium</a><a class="i-ico" href="#"><i class="fa fa-angle-double-right"></i></a></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-12 col-md-12 top-slide-info">*/
/*                 <div class="col-xs-6 col-md-6">*/
/*                     <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="http://placehold.it/614x428" alt=""/><i class="fa fa-video-camera"></i></a></div>*/
/*                     <div class="event_date dd-date">May 01, 2014 5:50 am <div class="post_theme">Exlusive</div></div><h4> Stay Ahead of the curve</h4>*/
/*                     <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis. Nulla venenatis, quam vitae pellentesque sollicitudin.</p>*/
/*                 </div>*/
/*                 <div class="col-xs-6 col-md-6">*/
/*                     <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="http://placehold.it/614x428" alt=""/><i class="fa fa-picture-o"></i></a></div>*/
/*                     <div class="event_date dd-date">May 01, 2014 5:50 am <div class="post_theme">Interview</div></div><h4> Stay Ahead of the curve</h4>*/
/*                     <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis. Nulla venenatis, quam vitae pellentesque sollicitudin.</p>*/
/* */
/*                 </div>*/
/*                 <div class="col-xs-6 col-md-6 box-top-txt">*/
/*                     <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="http://placehold.it/614x428" alt=""/><i class="fa fa-picture-o"></i></a></div>*/
/*                     <div class="event_date dd-date">May 01, 2014 5:50 am</div><h4> Stay Ahead of the curve</h4>*/
/*                     <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis. Nulla venenatis, quam vitae pellentesque sollicitudin.</p>*/
/* */
/*                 </div>*/
/*                 <div class="col-xs-6 col-md-6 box-top-txt">*/
/*                     <div class="col-md-4 slide-cont-img"><a href="single_news.html"><img class="scale_image" src="http://placehold.it/614x428" alt=""/><i class="fa fa-video-camera"></i></a></div>*/
/*                     <div class="event_date dd-date">May 01, 2014 5:50 am</div><h4> Stay Ahead of the curve</h4>*/
/*                     <p>Quisque gravida libero sodales augue luctus elementum. In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis. Nulla venenatis, quam vitae pellentesque sollicitudin.</p>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <section id="parallaxTraining">*/
/* */
/*     </section>*/
/*     <!--SECTION Match TOP SCORE-->*/
/*     <section id="atp-match">*/
/*         <div class="container">*/
/*             <div id="people-top" class="top-match col-xs-12 col-md-12">*/
/*                 <h3 class="news-title n-match">Last <span>Match</span><span class="point-little">.</span></h3>*/
/*                 <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands*/
/*                     that a normal humans can understand.</p>*/
/*                 <!--SECTION ATP MATCH-->*/
/*                 <div class="next-match-co col-xs-8 col-md-8">*/
/*                     <div id="nextmatch-content" class="experience">*/
/*                         <div class="col-xs-12 atphead"><div class="match-sing-title"><img src="{{ asset('images/sub-ball.png') }}" alt="" />ATP.HEAD2</div></div>*/
/*                         <div class="col-xs-4 pht-1 pht-left">*/
/*                             <div class="img-face-home">*/
/*                                 <img src="http://placehold.it/235x224" alt="" />*/
/*                                 <p class="name-mc">Nikol Brian</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-xs-4 pl-point ">*/
/*                             <p class="col-xs-12 name-mc-title">BEIJING - FIRST ROUND</p>*/
/*                             <div class="col-xs-4 nm-result">*/
/*                                 <p class="nr1 ris1"> 0 </p>*/
/*                                 <p class="nr2"> 0% </p>*/
/*                             </div>*/
/*                             <div class="col-xs-4 nm-result-vs">*/
/*                                 <p class="nrvs"> - VS - </p>*/
/*                             </div>*/
/*                             <div class="col-xs-4 nm-result">*/
/*                                 <p class="nr1 ris2"> 1 </p>*/
/*                                 <p class="nr2"> 100% </p>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="col-xs-4 pht-1 pht-right">*/
/*                             <div class="img-face-home">*/
/*                                 <img src="http://placehold.it/235x224" alt="" />*/
/*                                 <p class="name-mc">Roial Mink</p>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="col-xs-12 atphead"><div class="match-sing-title inf-bottom">*/
/*                                 <p><i class="fa fa-calendar-o"></i>May 16, 2012 14:30 - 16:00 <i class="fa fa-map-marker"></i> London Brion Stadium</p>*/
/*                             </div></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-4 home-page">*/
/*                     <div class="main">*/
/*                         <div class="tabs animated-slide-2">*/
/*                             <div class="result-filter">*/
/*                                 <ul class="tab-links">*/
/*                                     <li class="active"><a href="#tab1111">ATP</a></li>*/
/*                                     <li><a href="#tab2222">WTA</a></li>*/
/*                                     <li><a href="#tab3333">DBL</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="tab-content-point">*/
/*                                 <div id="tab1111" class="tab active">*/
/*                                     <table class="tab-score">*/
/*                                         <tr class="top-scrore-table"><td class="score-position">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>*/
/*                                         <tr><td class="score-position">1.</td><td><a href="single_player.html">Nicol Dorian</a></td><td><img src="{{ asset('images/flags/serbia.png') }}" alt="" /></td><td>12770</td></tr>*/
/*                                         <tr><td class="score-position">2.</td><td><a href="single_player.html">Rafael Milk</a></td><td><img src="{{ asset('images/flags/argentina.png') }}" alt="" /></td><td>10670</td></tr>*/
/*                                         <tr><td class="score-position">3.</td><td><a href="single_player.html">Roger Figo</a></td><td><img src="{{ asset('images/flags/uk.png') }}" alt="" /></td><td>7490</td></tr>*/
/*                                         <tr><td class="score-position">4.</td><td><a href="single_player.html">St. Waiker</a></td><td><img src="{{ asset('images/flags/brazil.png') }}" alt="" /></td><td>5985</td></tr>*/
/*                                         <tr><td class="score-position">5.</td><td><a href="single_player.html">David Ruby</a></td><td><img src="{{ asset('images/flags/japan.png') }}" alt="" /></td><td>4765</td></tr>*/
/* */
/*                                     </table>*/
/*                                 </div>*/
/*                                 <div id="tab2222" class="tab">*/
/*                                     <table class="tab-score">*/
/*                                         <tr class="top-scrore-table"><td class="score-position">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>*/
/*                                         <tr><td class="score-position">1.</td><td><a href="single_player.html">Serena Brain</a></td><td><img src="{{ asset('images/flags/usa.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                         <tr><td class="score-position">2.</td><td><a href="single_player.html">Simona Figo</a></td><td><img src="{{ asset('images/flags/uk.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                         <tr><td class="score-position">3.</td><td><a href="single_player.html">Nio Red</a></td><td><img src="{{ asset('images/flags/italy.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                         <tr><td class="score-position">4.</td><td><a href="single_player.html">Petra Curt</a></td><td><img src="{{ asset('images/flags/denmark.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                         <tr><td class="score-position">5.</td><td><a href="single_player.html">Ag. Rader</a></td><td><img src="{{ asset('images/flags/uk.png') }}" alt="" /></td><td>1234</td></tr>*/
/*                                     </table>*/
/*                                 </div>*/
/*                                 <div id="tab3333" class="tab">*/
/*                                     <table class="tab-score">*/
/*                                         <tr class="top-scrore-table"><td class="score-position">POS.</td><td>PLAYER</td><td>NAT.</td><td>POINTS</td></tr>*/
/*                                         <tr><td class="score-position">1.</td><td><a href="single_player.html">name1</a></td><td>-</td><td>1234</td></tr>*/
/*                                         <tr><td class="score-position">2.</td><td><a href="single_player.html">name2</a></td><td>-</td><td>1234</td></tr>*/
/*                                         <tr><td class="score-position">3.</td><td><a href="single_player.html">name3</a></td><td>-</td><td>1234</td></tr>*/
/*                                         <tr><td class="score-position">4.</td><td><a href="single_player.html">name4</a></td><td>-</td><td>1234</td></tr>*/
/*                                         <tr><td class="score-position">5.</td><td><a href="single_player.html">name5</a></td><td>-</td><td>1234</td></tr>*/
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="score-view-all"><a class="pl-point-button" href="results.html">View All</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!--Close Top Match-->*/
/*         </div>*/
/*     </section>*/
/*     <!--SECTION NEXT MATCH-->*/
/*     <section id="next-match">*/
/*         <div  class="container">*/
/*             <div class="next-match-news top-match col-xs-12 col-md-12">*/
/*                 <h3 class="news-title n-match">Next <span>Match</span><span class="point-little">.</span></h3>*/
/*                 <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands*/
/*                     that a normal humans can understand.</p>*/
/*                 <div class="other-match col-md-4">*/
/*                     <div class="score-next-time">*/
/*                         <div class="circle-ico"><p>ATP</p></div>*/
/*                     </div>*/
/*                     <div id="getting-started"></div>*/
/*                     <div class="col-xs-5 col-md-5 match-team">*/
/*                         <img class="" src="{{ asset('images/team1.png') }}" alt=""/>*/
/*                         <p>Fernand</p>*/
/*                     </div>*/
/*                     <div class="col-xs-2 col-md-2 match-team-vs">*/
/*                         <span class="txt-vs"> - vs - </span>*/
/*                     </div>*/
/*                     <div class="col-xs-5 col-md-5 match-team">*/
/*                         <img class="" src="{{ asset('images/team2.png') }}" alt=""/>*/
/*                         <p>Brain</p>*/
/*                     </div>*/
/*                     <div class="next-match-place">*/
/*                         <p class='sub-result'>Qatar ExonMobil</p>*/
/*                         <p class="dd-news-date">April 22, 2016 ~ 2:30pm Canada Stadium</p>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="other-match col-md-4">*/
/*                     <div class="match-team-list">*/
/*                         <img class="t-img1" src="{{ asset('images/team1_small.png') }}" alt=""/>*/
/*                         <span>Fernand</span>*/
/*                         <span class="txt-vs"> - vs - </span>*/
/*                         <span>Brain</span>*/
/*                         <img class="t-img2" src="{{ asset('images/team1_small.png') }}" alt=""/>*/
/*                         <p>22/06/2015 14:30 - 16:00</p>*/
/*                     </div>*/
/*                     <div class="match-team-list">*/
/*                         <img class="t-img1" src="{{ asset('images/team1_small.png') }}" alt=""/>*/
/*                         <span>Fernand</span>*/
/*                         <span class="txt-vs"> - vs - </span>*/
/*                         <span>Brain</span>*/
/*                         <img class="t-img2" src="{{ asset('images/team1_small.png') }}" alt=""/>*/
/*                         <p>22/06/2015 14:30 - 16:00</p>*/
/*                     </div>*/
/*                     <div class="match-team-list">*/
/*                         <img class="t-img1" src="{{ asset('images/team1_small.png') }}" alt=""/>*/
/*                         <span>Fernand</span>*/
/*                         <span class="txt-vs"> - vs - </span>*/
/*                         <span>Brain</span>*/
/*                         <img class="t-img2" src="{{ asset('images/team1_small.png') }}" alt=""/>*/
/*                         <p>22/06/2015 14:30 - 16:00</p>*/
/*                     </div>*/
/*                     <div class="team-view-all">*/
/*                         <p>View all</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="other-match col-md-4 other-last">*/
/*                     <img src="{{ asset('images/adwertise.jpg') }}" alt="" />*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!--SECTION STATISTIC RESULTS-->*/
/*     <section id="resultsPoint">*/
/*         <div class="container">*/
/*             <div class="top-match col-xs-12 col-md-12">*/
/*                 <div class="top-score-title">*/
/*                     <h3>Statistics<span class="point-little">.</span></h3>*/
/*                     <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands*/
/*                         that a normal humans can understand.</p>*/
/*                     <div class="col-xs-12 circle-percentage">*/
/*                         <div class="col-xs-3">*/
/*                             <div class="pie_progress" role="progressbar" data-goal="83" data-barcolor="#f59123" data-barsize="10">*/
/*                                 <div class="pie_content">*/
/*                                     <div class="pie_progress__number">0%</div>*/
/*                                     <div class="pie_progress__content">Super-Senior</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-xs-3">*/
/*                             <div class="pie_progress" role="progressbar" data-goal="65" data-barcolor="#2c333b" data-barsize="10">*/
/*                                 <div class="pie_content">*/
/*                                     <div class="pie_progress__number">0%</div>*/
/*                                     <div class="pie_progress__content">Senior</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-xs-3">*/
/*                             <div class="pie_progress" role="progressbar" data-goal="32" data-barcolor="#f59123" data-barsize="10">*/
/*                                 <div class="pie_content">*/
/*                                     <div class="pie_progress__number">0%</div>*/
/*                                     <div class="pie_progress__content">Pro</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-xs-3">*/
/*                             <div class="pie_progress" role="progressbar" data-goal="73" data-barcolor="#2c333b" data-barsize="10">*/
/*                                 <div class="pie_content">*/
/*                                     <div class="pie_progress__number">0%</div>*/
/*                                     <div class="pie_progress__content">Junior</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <!-- SECTION SUBSCRIPTIONS-->*/
/*     <section class="bbtxt-content-subscription">*/
/*         <div class="container">*/
/*             <div class="col-xs-12 bbtxt-box">*/
/*                 <h4><i class="fa fa-quote-left"></i><span class="middle-txt">Enter in</span> <span class="point-big">WT</span> Tennis<i class="fa fa-quote-right"></i></h4>*/
/*                 <p class="subin">The best tennis tour around the europe step by step.</p>*/
/*                 <div class="subscription-content">*/
/*                     <div class="col-md-4">*/
/*                         <div class="subscription-tennis">*/
/* */
/*                             <h3>subscription<span> Free</span></h3>*/
/* */
/*                             <p class="desc-subscription">A Responsive Online Shopping website can attract its more is buyers as the user.</p>*/
/*                             <a class="pl-point-button" href="">Read more</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <div class="subscription-tennis">*/
/* */
/*                             <h3>subscription<span> Gold</span></h3>*/
/* */
/*                             <p class="desc-subscription">A Responsive Online Shopping website can attract its more is buyers as the user.</p>*/
/*                             <a class="pl-point-button" href="">Read more</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <div class="subscription-tennis">*/
/* */
/*                             <h3>subscription<span> Premium</span></h3>*/
/* */
/*                             <p class="desc-subscription">A Responsive Online Shopping website can attract its more is buyers as the user.</p>*/
/*                             <a class="pl-point-button" href="">Read more</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!--SECTION LAST PHOTO-->*/
/*     <section id="news-section">*/
/*         <div class="container">*/
/*             <div class="top-match col-xs-12 col-md-12">*/
/*                 <div class="news-content">*/
/*                     <h3 class="news-title">Latest <span>Photo</span><span class="point-little">.</span></h3>*/
/*                     <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands*/
/*                         that a normal humans can understand.</p>*/
/*                     <div id="container-vert-n">*/
/*                         <dl class="group">*/
/*                             <dt></dt>*/
/*                             <dd>*/
/*                                 <ul class="filter group albumFilter">*/
/*                                     <li data-filter="*" class="current"><a  href="#">ALL</a></li>*/
/*                                     <li data-filter=".cat1"><a  href="#">ATP</a></li>*/
/*                                     <li data-filter=".cat2"><a  href="#">WTP</a></li>*/
/*                                     <li data-filter=".cat3"><a  href="#">BEAUTY</a></li>*/
/*                                     <li data-filter=".cat4"><a  href="#">MEETING</a></li>*/
/*                                 </ul>*/
/*                             </dd>*/
/*                         </dl>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <ul class="portfolio group albumContainer">*/
/*             <li class="item block cat2 col-xs-3">*/
/*                 <a href="http://placehold.it/1600x1000" data-gal="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Hannah 1" /></a>*/
/*             </li>*/
/*             <li class="item block cat1 col-xs-3">*/
/*                 <a href="http://placehold.it/1600x1000" data-gal="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Hair 1" /></a>*/
/*             </li>*/
/*             <li class="item block cat1 col-xs-3">*/
/*                 <a href="http://placehold.it/1600x1000" data-gal="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Hair 2" /></a>*/
/*             </li>*/
/*             <li class="item block cat3 col-xs-3">*/
/*                 <a href="http://placehold.it/1600x1000" data-gal="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Traction 1" /></a>*/
/*             </li>*/
/*             <li class="item block cat1 cat3 col-xs-3">*/
/*                 <a href="http://placehold.it/1600x1000" data-gal="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Traction 1" /></a>*/
/*             </li>*/
/*             <li class="item block cat2 col-xs-3">*/
/*                 <a href="http://placehold.it/1600x1000" data-gal="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Beauty 2" /></a>*/
/*             </li>*/
/*             <li class="item block cat1 col-xs-3">*/
/*                 <a href="http://placehold.it/1600x1000" data-gal="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Hair 1" /></a>*/
/*             </li>*/
/*             <li class="item block cat1 cat3 col-xs-3">*/
/*                 <a href="http://placehold.it/1600x1000" data-gal="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Traction 1" /></a>*/
/*             </li>*/
/*         </ul>*/
/*     </section>*/
/*     <!--SECTION CLIENTS-->*/
/*     <section class="container">*/
/*         <div class="top-video col-xs-12 col-md-12">*/
/*             <h3>OUR <span>CLIENT</span><span class="point-little">.</span></h3>*/
/*             <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands*/
/*                 that a normal humans can understand.</p>*/
/* */
/*             <div id="testimonials">*/
/* */
/*                 <div id="owl-demo" class="owl-carousel">*/
/*                     <div class="item">*/
/*                         <img src="http://placehold.it/235x224" alt="" />*/
/*                         <div class="testimon-desc">*/
/*                             <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>*/
/*                             <p>A small <span>creative</span> team, trying to enrich the lives of others</p>*/
/*                             <p class="nm-name">- Brian Rood</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img src="http://placehold.it/235x224" alt="" />*/
/*                         <div class="testimon-desc">*/
/*                             <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>*/
/*                             <p>A small <span>creative</span> team, trying to enrich the lives of others</p>*/
/*                             <p class="nm-name">- Miki Rood</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img src="http://placehold.it/235x224" alt="" />*/
/*                         <div class="testimon-desc">*/
/*                             <p>Fusce risus metus, placerat in <span>consectetur</span> eu, porttitor a est sed sed dolor lorem cras adipiscing</p>*/
/*                             <p>A small <span>creative</span> team, trying to enrich the lives of others</p>*/
/*                             <p class="nm-name">- Robert Rood</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <!--SECTION SPONSOR-->*/
/*     {{ include('@FttFrontOffice/Front/sponsor.html.twig') }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/*     {% block newsletter %}*/
/*         <div class="col-md-3 footer-newsletters">*/
/*             <h3>Newsletters</h3>*/
/*             {{ form_start(form_newsletter) }}*/
/*                 <div class="name">*/
/*                     <label for="name">* Nom:</label><div class="clear"></div>*/
/*                     {{ form_errors(form_newsletter) }}*/
/*                     {{ form_widget(form_newsletter.nom, { 'id': 'name',  'attr': { 'class' : '' }} )}}*/
/*                 </div>*/
/*                 <div class="email">*/
/*                     <label for="email">* Email:</label><div class="clear"></div>*/
/*                     {{ form_errors(form_newsletter) }}*/
/*                     {{ form_widget(form_newsletter.mail, { 'id': 'email',  'attr': { 'class' : '' }} )}}*/
/*                 </div>*/
/*                 <div id="loader">*/
/*                     {{ form_rest(form_newsletter) }}*/
/*                 </div>*/
/* */
/*             {{ form_end(form_newsletter) }}*/
/*         </div>*/
/*         {% endblock %}*/
/* */
