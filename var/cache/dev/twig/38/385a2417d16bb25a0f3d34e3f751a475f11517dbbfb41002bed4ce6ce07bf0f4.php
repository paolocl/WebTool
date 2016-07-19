<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_1b54a237c26195f60d20af27d65cefe64ca3d954a0411bcc07592f6123f2aed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b506dce734c16f0d8b72e3f707cea1765735567db1b3ee84ea5213e3213aa30d = $this->env->getExtension("native_profiler");
        $__internal_b506dce734c16f0d8b72e3f707cea1765735567db1b3ee84ea5213e3213aa30d->enter($__internal_b506dce734c16f0d8b72e3f707cea1765735567db1b3ee84ea5213e3213aa30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b506dce734c16f0d8b72e3f707cea1765735567db1b3ee84ea5213e3213aa30d->leave($__internal_b506dce734c16f0d8b72e3f707cea1765735567db1b3ee84ea5213e3213aa30d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18adef95287fc79184fab2ba9a367ae9936af2e98720213ba7238edd7eb609f3 = $this->env->getExtension("native_profiler");
        $__internal_18adef95287fc79184fab2ba9a367ae9936af2e98720213ba7238edd7eb609f3->enter($__internal_18adef95287fc79184fab2ba9a367ae9936af2e98720213ba7238edd7eb609f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_18adef95287fc79184fab2ba9a367ae9936af2e98720213ba7238edd7eb609f3->leave($__internal_18adef95287fc79184fab2ba9a367ae9936af2e98720213ba7238edd7eb609f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
