<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_c6bd9a92125b8f6a7039df49fcb14bae1e0e1af72cfecd3c90af8970611901d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_b618fb1a186b9812178033b0d77794d2d0679c2b0139151306f5cf9908a662cf = $this->env->getExtension("native_profiler");
        $__internal_b618fb1a186b9812178033b0d77794d2d0679c2b0139151306f5cf9908a662cf->enter($__internal_b618fb1a186b9812178033b0d77794d2d0679c2b0139151306f5cf9908a662cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b618fb1a186b9812178033b0d77794d2d0679c2b0139151306f5cf9908a662cf->leave($__internal_b618fb1a186b9812178033b0d77794d2d0679c2b0139151306f5cf9908a662cf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ef495cb112389ea5a8e827c9f368e691bab139166cc530636bd80f1bafd8e78 = $this->env->getExtension("native_profiler");
        $__internal_6ef495cb112389ea5a8e827c9f368e691bab139166cc530636bd80f1bafd8e78->enter($__internal_6ef495cb112389ea5a8e827c9f368e691bab139166cc530636bd80f1bafd8e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6ef495cb112389ea5a8e827c9f368e691bab139166cc530636bd80f1bafd8e78->leave($__internal_6ef495cb112389ea5a8e827c9f368e691bab139166cc530636bd80f1bafd8e78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
