<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f1d52010c7880201997a9920d170858d72f03dfeace3ca4f92cf02cc9dae5512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_73cef9a07fa468c7961a705d0ccd6d58376b9a397c0b1fb50793dbb72b1b04a1 = $this->env->getExtension("native_profiler");
        $__internal_73cef9a07fa468c7961a705d0ccd6d58376b9a397c0b1fb50793dbb72b1b04a1->enter($__internal_73cef9a07fa468c7961a705d0ccd6d58376b9a397c0b1fb50793dbb72b1b04a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73cef9a07fa468c7961a705d0ccd6d58376b9a397c0b1fb50793dbb72b1b04a1->leave($__internal_73cef9a07fa468c7961a705d0ccd6d58376b9a397c0b1fb50793dbb72b1b04a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbaafb0880cb1924a1ea6cb92216952f31f2920f499ce99fd424b2ce612f1056 = $this->env->getExtension("native_profiler");
        $__internal_dbaafb0880cb1924a1ea6cb92216952f31f2920f499ce99fd424b2ce612f1056->enter($__internal_dbaafb0880cb1924a1ea6cb92216952f31f2920f499ce99fd424b2ce612f1056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_dbaafb0880cb1924a1ea6cb92216952f31f2920f499ce99fd424b2ce612f1056->leave($__internal_dbaafb0880cb1924a1ea6cb92216952f31f2920f499ce99fd424b2ce612f1056_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
