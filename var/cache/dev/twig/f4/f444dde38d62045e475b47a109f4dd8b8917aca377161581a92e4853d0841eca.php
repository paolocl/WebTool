<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_427a240c2c7be5afb512c4fc3fb25364cf8a18701348b6bae3123ef7b75f38db extends Twig_Template
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
        $__internal_f8c155dc5bb7807135f17cb0d32f6fe3a29b4922517a7c5d5185d975ac2cf259 = $this->env->getExtension("native_profiler");
        $__internal_f8c155dc5bb7807135f17cb0d32f6fe3a29b4922517a7c5d5185d975ac2cf259->enter($__internal_f8c155dc5bb7807135f17cb0d32f6fe3a29b4922517a7c5d5185d975ac2cf259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f8c155dc5bb7807135f17cb0d32f6fe3a29b4922517a7c5d5185d975ac2cf259->leave($__internal_f8c155dc5bb7807135f17cb0d32f6fe3a29b4922517a7c5d5185d975ac2cf259_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bcfbeddeb38990f0e8586903b683a6fe79f573b2ea1e515d33063c1af3e7b412 = $this->env->getExtension("native_profiler");
        $__internal_bcfbeddeb38990f0e8586903b683a6fe79f573b2ea1e515d33063c1af3e7b412->enter($__internal_bcfbeddeb38990f0e8586903b683a6fe79f573b2ea1e515d33063c1af3e7b412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_bcfbeddeb38990f0e8586903b683a6fe79f573b2ea1e515d33063c1af3e7b412->leave($__internal_bcfbeddeb38990f0e8586903b683a6fe79f573b2ea1e515d33063c1af3e7b412_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3b4a43e5ff85384d2cafd325eabc0c5f14047c77fad76b72024302d40104bd95 = $this->env->getExtension("native_profiler");
        $__internal_3b4a43e5ff85384d2cafd325eabc0c5f14047c77fad76b72024302d40104bd95->enter($__internal_3b4a43e5ff85384d2cafd325eabc0c5f14047c77fad76b72024302d40104bd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3b4a43e5ff85384d2cafd325eabc0c5f14047c77fad76b72024302d40104bd95->leave($__internal_3b4a43e5ff85384d2cafd325eabc0c5f14047c77fad76b72024302d40104bd95_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f00e260df8fdf46db6cbf723059b9b89cd45e7279db8456af9ff48b0b38c77f1 = $this->env->getExtension("native_profiler");
        $__internal_f00e260df8fdf46db6cbf723059b9b89cd45e7279db8456af9ff48b0b38c77f1->enter($__internal_f00e260df8fdf46db6cbf723059b9b89cd45e7279db8456af9ff48b0b38c77f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f00e260df8fdf46db6cbf723059b9b89cd45e7279db8456af9ff48b0b38c77f1->leave($__internal_f00e260df8fdf46db6cbf723059b9b89cd45e7279db8456af9ff48b0b38c77f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
