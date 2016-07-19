<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_62b4f1d180b8ace7a416b3d22e4ede230b16d84311a360cda1e6e83e2270a72b extends Twig_Template
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
        $__internal_7d3c8fde50d1e703f8891dfc9a1c7344a547f4f62903ae9e68105c8757a3572e = $this->env->getExtension("native_profiler");
        $__internal_7d3c8fde50d1e703f8891dfc9a1c7344a547f4f62903ae9e68105c8757a3572e->enter($__internal_7d3c8fde50d1e703f8891dfc9a1c7344a547f4f62903ae9e68105c8757a3572e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7d3c8fde50d1e703f8891dfc9a1c7344a547f4f62903ae9e68105c8757a3572e->leave($__internal_7d3c8fde50d1e703f8891dfc9a1c7344a547f4f62903ae9e68105c8757a3572e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
