<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2d124d00f18d0ada2ae5b123596c0372c88cb3cf5ac6f8063b8767a9c5afabf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4b4d1b6ea50ef6abe7170828136b3ca4e6dd109c21b9f30b9a25d656628f3d86 = $this->env->getExtension("native_profiler");
        $__internal_4b4d1b6ea50ef6abe7170828136b3ca4e6dd109c21b9f30b9a25d656628f3d86->enter($__internal_4b4d1b6ea50ef6abe7170828136b3ca4e6dd109c21b9f30b9a25d656628f3d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b4d1b6ea50ef6abe7170828136b3ca4e6dd109c21b9f30b9a25d656628f3d86->leave($__internal_4b4d1b6ea50ef6abe7170828136b3ca4e6dd109c21b9f30b9a25d656628f3d86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2c8a1c7d19a93e2ecae7370ec5bb0080ba96e0434066be7d1be02ab5cf29ae2 = $this->env->getExtension("native_profiler");
        $__internal_c2c8a1c7d19a93e2ecae7370ec5bb0080ba96e0434066be7d1be02ab5cf29ae2->enter($__internal_c2c8a1c7d19a93e2ecae7370ec5bb0080ba96e0434066be7d1be02ab5cf29ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c2c8a1c7d19a93e2ecae7370ec5bb0080ba96e0434066be7d1be02ab5cf29ae2->leave($__internal_c2c8a1c7d19a93e2ecae7370ec5bb0080ba96e0434066be7d1be02ab5cf29ae2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
