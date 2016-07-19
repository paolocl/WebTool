<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_87a52021b54b43651bf53d2888322c008b79c5e1dd5ea207e77c5f996bb51471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1cfab07de8b332fa0b342d234bb85c5e73ba083ba75903e4213ffdb18feb4f12 = $this->env->getExtension("native_profiler");
        $__internal_1cfab07de8b332fa0b342d234bb85c5e73ba083ba75903e4213ffdb18feb4f12->enter($__internal_1cfab07de8b332fa0b342d234bb85c5e73ba083ba75903e4213ffdb18feb4f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cfab07de8b332fa0b342d234bb85c5e73ba083ba75903e4213ffdb18feb4f12->leave($__internal_1cfab07de8b332fa0b342d234bb85c5e73ba083ba75903e4213ffdb18feb4f12_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_746b9bb3c52b38b0b531be3a1bed327b194ba7cd7cd4b18d097f887f7a834323 = $this->env->getExtension("native_profiler");
        $__internal_746b9bb3c52b38b0b531be3a1bed327b194ba7cd7cd4b18d097f887f7a834323->enter($__internal_746b9bb3c52b38b0b531be3a1bed327b194ba7cd7cd4b18d097f887f7a834323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_746b9bb3c52b38b0b531be3a1bed327b194ba7cd7cd4b18d097f887f7a834323->leave($__internal_746b9bb3c52b38b0b531be3a1bed327b194ba7cd7cd4b18d097f887f7a834323_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
