<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_09145f28c8f27f711ac6cfe589366085a07778248f11cd4245d0831693883575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_dceedaafc131625817f84ef959c758a86db04fc631e82320adb783c53cb4c389 = $this->env->getExtension("native_profiler");
        $__internal_dceedaafc131625817f84ef959c758a86db04fc631e82320adb783c53cb4c389->enter($__internal_dceedaafc131625817f84ef959c758a86db04fc631e82320adb783c53cb4c389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dceedaafc131625817f84ef959c758a86db04fc631e82320adb783c53cb4c389->leave($__internal_dceedaafc131625817f84ef959c758a86db04fc631e82320adb783c53cb4c389_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11447cb02d2d0dfe033306351aa1edc90773df83779bc685a1fa0a105996b120 = $this->env->getExtension("native_profiler");
        $__internal_11447cb02d2d0dfe033306351aa1edc90773df83779bc685a1fa0a105996b120->enter($__internal_11447cb02d2d0dfe033306351aa1edc90773df83779bc685a1fa0a105996b120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_11447cb02d2d0dfe033306351aa1edc90773df83779bc685a1fa0a105996b120->leave($__internal_11447cb02d2d0dfe033306351aa1edc90773df83779bc685a1fa0a105996b120_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
