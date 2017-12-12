<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_3b6c97b28e39ce9550182cc5b49fbc7ccbbcc0f599875345d6a21edf8aa6bf85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo "Création de compte :



";
    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        // line 10
        echo "
";
    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        // line 15
        echo "
Fédération Tunisienne de Tennis


Bonjour ";
        // line 19
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array());
        echo " !


Vous pouvez confirmer votre compte en cliquant sur ce lien ";
        // line 22
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"));
        echo "

Merci de changer votre mot de passe lorsque vous confirmez votre compte.


Cordialement
Equipe-FTT
";
        // line 30
        echo "

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  64 => 22,  58 => 19,  52 => 15,  49 => 13,  44 => 10,  41 => 8,  33 => 3,  30 => 2,  26 => 13,  24 => 8,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* Création de compte :*/
/* */
/* */
/* */
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* */
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}*/
/* {% autoescape false %}*/
/* */
/* Fédération Tunisienne de Tennis*/
/* */
/* */
/* Bonjour {{ user.username }} !*/
/* */
/* */
/* Vous pouvez confirmer votre compte en cliquant sur ce lien {{ confirmationUrl }}*/
/* */
/* Merci de changer votre mot de passe lorsque vous confirmez votre compte.*/
/* */
/* */
/* Cordialement*/
/* Equipe-FTT*/
/* {% endautoescape %}*/
/* */
/* */
/* {% endblock %}*/
/* */
