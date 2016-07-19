<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_9ad6d8799a125889b0c3609a8b16ceafc480b813c1bad83bc3fb01b8659e9680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_45076e3a0e4e1cc6cf07c631f2c4cd095c6f20425463abd1ea4d4a118620f120 = $this->env->getExtension("native_profiler");
        $__internal_45076e3a0e4e1cc6cf07c631f2c4cd095c6f20425463abd1ea4d4a118620f120->enter($__internal_45076e3a0e4e1cc6cf07c631f2c4cd095c6f20425463abd1ea4d4a118620f120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45076e3a0e4e1cc6cf07c631f2c4cd095c6f20425463abd1ea4d4a118620f120->leave($__internal_45076e3a0e4e1cc6cf07c631f2c4cd095c6f20425463abd1ea4d4a118620f120_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_218a5e2d88e722f1c6ff90cf4617950e5b60caeb4eec653cef49c70f57d53575 = $this->env->getExtension("native_profiler");
        $__internal_218a5e2d88e722f1c6ff90cf4617950e5b60caeb4eec653cef49c70f57d53575->enter($__internal_218a5e2d88e722f1c6ff90cf4617950e5b60caeb4eec653cef49c70f57d53575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_218a5e2d88e722f1c6ff90cf4617950e5b60caeb4eec653cef49c70f57d53575->leave($__internal_218a5e2d88e722f1c6ff90cf4617950e5b60caeb4eec653cef49c70f57d53575_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
