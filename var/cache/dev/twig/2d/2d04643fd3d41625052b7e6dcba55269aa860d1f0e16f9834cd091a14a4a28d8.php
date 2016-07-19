<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5ce21d4701e1a6f7e92f78397737d5c6ba59044728bac7151edec3e9fe5468fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_c7c6a8c8e9a31928761375a5fe22329858db68fa1c1f9a0cc7351ff4f5435cf3 = $this->env->getExtension("native_profiler");
        $__internal_c7c6a8c8e9a31928761375a5fe22329858db68fa1c1f9a0cc7351ff4f5435cf3->enter($__internal_c7c6a8c8e9a31928761375a5fe22329858db68fa1c1f9a0cc7351ff4f5435cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c6a8c8e9a31928761375a5fe22329858db68fa1c1f9a0cc7351ff4f5435cf3->leave($__internal_c7c6a8c8e9a31928761375a5fe22329858db68fa1c1f9a0cc7351ff4f5435cf3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80d304b15e457ab9c996261cc59ccdb922a4fa0ac6326b9b1c4bb69b3c80a68e = $this->env->getExtension("native_profiler");
        $__internal_80d304b15e457ab9c996261cc59ccdb922a4fa0ac6326b9b1c4bb69b3c80a68e->enter($__internal_80d304b15e457ab9c996261cc59ccdb922a4fa0ac6326b9b1c4bb69b3c80a68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_80d304b15e457ab9c996261cc59ccdb922a4fa0ac6326b9b1c4bb69b3c80a68e->leave($__internal_80d304b15e457ab9c996261cc59ccdb922a4fa0ac6326b9b1c4bb69b3c80a68e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
