<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_643f6fff092a3316727b8d74327485b38ac4ae7446884799e620a88f6d273e98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:register.html.twig", 4);
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
                ";
        // line 9
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 9)->display($context);
        // line 10
        echo "                ";
        $this->loadTemplate("@FttFrontOffice/Front/sponsor.html.twig", "FOSUserBundle:Registration:register.html.twig", 10)->display($context);
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  36 => 10,  34 => 9,  31 => 8,  28 => 7,  11 => 4,);
    }
}
/* */
/* */
/* */
/* {% extends "::base.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* */
/*                 {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/*                 {% include "@FttFrontOffice/Front/sponsor.html.twig" %}*/
/* */
/* {% endblock %}*/
