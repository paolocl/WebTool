<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5bbe622873545156f9a03194a736d7ac966de055af25d8ac6a04924f20ed286e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_7613aec057e9559119eaa0a9352edb653f8f41ca7a5ca6cf060d9c303516e827 = $this->env->getExtension("native_profiler");
        $__internal_7613aec057e9559119eaa0a9352edb653f8f41ca7a5ca6cf060d9c303516e827->enter($__internal_7613aec057e9559119eaa0a9352edb653f8f41ca7a5ca6cf060d9c303516e827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7613aec057e9559119eaa0a9352edb653f8f41ca7a5ca6cf060d9c303516e827->leave($__internal_7613aec057e9559119eaa0a9352edb653f8f41ca7a5ca6cf060d9c303516e827_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee7a392316af28445463388b5d964f0dbacd1896d1ddbbdeafeb9ad73af256a2 = $this->env->getExtension("native_profiler");
        $__internal_ee7a392316af28445463388b5d964f0dbacd1896d1ddbbdeafeb9ad73af256a2->enter($__internal_ee7a392316af28445463388b5d964f0dbacd1896d1ddbbdeafeb9ad73af256a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ee7a392316af28445463388b5d964f0dbacd1896d1ddbbdeafeb9ad73af256a2->leave($__internal_ee7a392316af28445463388b5d964f0dbacd1896d1ddbbdeafeb9ad73af256a2_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
