<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f05383f332d2b064a6d6dc0baca122df5a10e77170adf664dbe723831a2fe385 extends Twig_Template
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
        $__internal_611b0467a7fa42c5ace1338d83a27736cf302b509b43fee8bc1108320041bfe8 = $this->env->getExtension("native_profiler");
        $__internal_611b0467a7fa42c5ace1338d83a27736cf302b509b43fee8bc1108320041bfe8->enter($__internal_611b0467a7fa42c5ace1338d83a27736cf302b509b43fee8bc1108320041bfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_611b0467a7fa42c5ace1338d83a27736cf302b509b43fee8bc1108320041bfe8->leave($__internal_611b0467a7fa42c5ace1338d83a27736cf302b509b43fee8bc1108320041bfe8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
