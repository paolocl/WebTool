<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_70d44331ec8d09e5f98b1cc953cc2c5c85c3d988de550bd64444c1ffa0cfca17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_912f0fa1d55f0a9bec7997530ca76965adc88d41406a540073da7983cce6c2f5 = $this->env->getExtension("native_profiler");
        $__internal_912f0fa1d55f0a9bec7997530ca76965adc88d41406a540073da7983cce6c2f5->enter($__internal_912f0fa1d55f0a9bec7997530ca76965adc88d41406a540073da7983cce6c2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_912f0fa1d55f0a9bec7997530ca76965adc88d41406a540073da7983cce6c2f5->leave($__internal_912f0fa1d55f0a9bec7997530ca76965adc88d41406a540073da7983cce6c2f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8437c11bda8a31239510e619f8ab981812295229ccce2b5e06078d740c0dbfe3 = $this->env->getExtension("native_profiler");
        $__internal_8437c11bda8a31239510e619f8ab981812295229ccce2b5e06078d740c0dbfe3->enter($__internal_8437c11bda8a31239510e619f8ab981812295229ccce2b5e06078d740c0dbfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_8437c11bda8a31239510e619f8ab981812295229ccce2b5e06078d740c0dbfe3->leave($__internal_8437c11bda8a31239510e619f8ab981812295229ccce2b5e06078d740c0dbfe3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
