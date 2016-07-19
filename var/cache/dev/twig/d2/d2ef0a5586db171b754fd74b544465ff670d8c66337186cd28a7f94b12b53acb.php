<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c05b39bb59dacad78787c80d35893c2eee2f5bac8b3335601b6ee471f428bab1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e5462b55e552dc4bb4706eb23d905a438d050f8a9bc19d467df21c14c5bd569 = $this->env->getExtension("native_profiler");
        $__internal_9e5462b55e552dc4bb4706eb23d905a438d050f8a9bc19d467df21c14c5bd569->enter($__internal_9e5462b55e552dc4bb4706eb23d905a438d050f8a9bc19d467df21c14c5bd569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e5462b55e552dc4bb4706eb23d905a438d050f8a9bc19d467df21c14c5bd569->leave($__internal_9e5462b55e552dc4bb4706eb23d905a438d050f8a9bc19d467df21c14c5bd569_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8087402fb9ead78fdc9aa8753b724d6f03b109c187f05252f21e4732f3154a73 = $this->env->getExtension("native_profiler");
        $__internal_8087402fb9ead78fdc9aa8753b724d6f03b109c187f05252f21e4732f3154a73->enter($__internal_8087402fb9ead78fdc9aa8753b724d6f03b109c187f05252f21e4732f3154a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8087402fb9ead78fdc9aa8753b724d6f03b109c187f05252f21e4732f3154a73->leave($__internal_8087402fb9ead78fdc9aa8753b724d6f03b109c187f05252f21e4732f3154a73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
