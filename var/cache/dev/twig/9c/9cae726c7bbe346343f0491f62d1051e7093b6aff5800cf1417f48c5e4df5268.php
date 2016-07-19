<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d19a4711d7cc2c306a45e6ec4ae744d8888617c682f15985286d0bed28864cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_821b03afdcf28fac02a510e49c17dfb7704217bbb9c6fe22102b4f28129f185e = $this->env->getExtension("native_profiler");
        $__internal_821b03afdcf28fac02a510e49c17dfb7704217bbb9c6fe22102b4f28129f185e->enter($__internal_821b03afdcf28fac02a510e49c17dfb7704217bbb9c6fe22102b4f28129f185e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_821b03afdcf28fac02a510e49c17dfb7704217bbb9c6fe22102b4f28129f185e->leave($__internal_821b03afdcf28fac02a510e49c17dfb7704217bbb9c6fe22102b4f28129f185e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_abb8cbe7ef7a7a40682c335f4c223baa8b143384023381abd902195df484abd5 = $this->env->getExtension("native_profiler");
        $__internal_abb8cbe7ef7a7a40682c335f4c223baa8b143384023381abd902195df484abd5->enter($__internal_abb8cbe7ef7a7a40682c335f4c223baa8b143384023381abd902195df484abd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_abb8cbe7ef7a7a40682c335f4c223baa8b143384023381abd902195df484abd5->leave($__internal_abb8cbe7ef7a7a40682c335f4c223baa8b143384023381abd902195df484abd5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5fc2dcbfb5a09a1d12f1bdbf3a79aefcd57872ef3f1829856ebe20807b6efc48 = $this->env->getExtension("native_profiler");
        $__internal_5fc2dcbfb5a09a1d12f1bdbf3a79aefcd57872ef3f1829856ebe20807b6efc48->enter($__internal_5fc2dcbfb5a09a1d12f1bdbf3a79aefcd57872ef3f1829856ebe20807b6efc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5fc2dcbfb5a09a1d12f1bdbf3a79aefcd57872ef3f1829856ebe20807b6efc48->leave($__internal_5fc2dcbfb5a09a1d12f1bdbf3a79aefcd57872ef3f1829856ebe20807b6efc48_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_45e7157b5aac5cb20fd8382b7f349a9d0df37ee5eb942bd5dee7096d71032ac0 = $this->env->getExtension("native_profiler");
        $__internal_45e7157b5aac5cb20fd8382b7f349a9d0df37ee5eb942bd5dee7096d71032ac0->enter($__internal_45e7157b5aac5cb20fd8382b7f349a9d0df37ee5eb942bd5dee7096d71032ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_45e7157b5aac5cb20fd8382b7f349a9d0df37ee5eb942bd5dee7096d71032ac0->leave($__internal_45e7157b5aac5cb20fd8382b7f349a9d0df37ee5eb942bd5dee7096d71032ac0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
