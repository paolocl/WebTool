<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1101ec1c9eabcada09a20cce306eb84704c426b4550fe30ffa06f8a71ab499ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54c39866822963e179440aff84a573965c5c6277d345af913ee6da604cb8cc63 = $this->env->getExtension("native_profiler");
        $__internal_54c39866822963e179440aff84a573965c5c6277d345af913ee6da604cb8cc63->enter($__internal_54c39866822963e179440aff84a573965c5c6277d345af913ee6da604cb8cc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_54c39866822963e179440aff84a573965c5c6277d345af913ee6da604cb8cc63->leave($__internal_54c39866822963e179440aff84a573965c5c6277d345af913ee6da604cb8cc63_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
