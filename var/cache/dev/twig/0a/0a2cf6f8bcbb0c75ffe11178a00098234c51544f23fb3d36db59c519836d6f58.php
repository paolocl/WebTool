<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_eacc7401178864e2284a0f5c0ddab3b04ea0504ff1e2f6d196843ba2ae374099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_1b879725f1784100671607ed38bdd60d4a86858fd6c907715cb3e2cc5ced83ac = $this->env->getExtension("native_profiler");
        $__internal_1b879725f1784100671607ed38bdd60d4a86858fd6c907715cb3e2cc5ced83ac->enter($__internal_1b879725f1784100671607ed38bdd60d4a86858fd6c907715cb3e2cc5ced83ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b879725f1784100671607ed38bdd60d4a86858fd6c907715cb3e2cc5ced83ac->leave($__internal_1b879725f1784100671607ed38bdd60d4a86858fd6c907715cb3e2cc5ced83ac_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ed59841de0609decf7fed3483eef1d35d93fd7951ea9347ef9e0e73e7d2e2fa = $this->env->getExtension("native_profiler");
        $__internal_3ed59841de0609decf7fed3483eef1d35d93fd7951ea9347ef9e0e73e7d2e2fa->enter($__internal_3ed59841de0609decf7fed3483eef1d35d93fd7951ea9347ef9e0e73e7d2e2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_3ed59841de0609decf7fed3483eef1d35d93fd7951ea9347ef9e0e73e7d2e2fa->leave($__internal_3ed59841de0609decf7fed3483eef1d35d93fd7951ea9347ef9e0e73e7d2e2fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
