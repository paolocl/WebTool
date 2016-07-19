<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ceeebe210d6a10298bd2d50f204eb9f625af251d02de8ca244a3cccb650497dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e67e45367cbf38e9e2dcb1fd7b49c019efcc231d3c0915eb17ca4b2fa6969bc9 = $this->env->getExtension("native_profiler");
        $__internal_e67e45367cbf38e9e2dcb1fd7b49c019efcc231d3c0915eb17ca4b2fa6969bc9->enter($__internal_e67e45367cbf38e9e2dcb1fd7b49c019efcc231d3c0915eb17ca4b2fa6969bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e67e45367cbf38e9e2dcb1fd7b49c019efcc231d3c0915eb17ca4b2fa6969bc9->leave($__internal_e67e45367cbf38e9e2dcb1fd7b49c019efcc231d3c0915eb17ca4b2fa6969bc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61c754254f4dc8107436402a13f66b27c4b5c0a1cd72f4c22af16ff722f398b3 = $this->env->getExtension("native_profiler");
        $__internal_61c754254f4dc8107436402a13f66b27c4b5c0a1cd72f4c22af16ff722f398b3->enter($__internal_61c754254f4dc8107436402a13f66b27c4b5c0a1cd72f4c22af16ff722f398b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_61c754254f4dc8107436402a13f66b27c4b5c0a1cd72f4c22af16ff722f398b3->leave($__internal_61c754254f4dc8107436402a13f66b27c4b5c0a1cd72f4c22af16ff722f398b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
