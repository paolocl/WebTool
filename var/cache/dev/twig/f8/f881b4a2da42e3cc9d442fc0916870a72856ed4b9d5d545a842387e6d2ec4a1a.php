<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_456dd78218215fdb940c63e5c1eae59a367388a1e502d1230f4da605cb635230 extends Twig_Template
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
        $__internal_0e6b6d9cec1567059ebb4b07afab381b98505665861b5756b55184c6f7df4154 = $this->env->getExtension("native_profiler");
        $__internal_0e6b6d9cec1567059ebb4b07afab381b98505665861b5756b55184c6f7df4154->enter($__internal_0e6b6d9cec1567059ebb4b07afab381b98505665861b5756b55184c6f7df4154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0e6b6d9cec1567059ebb4b07afab381b98505665861b5756b55184c6f7df4154->leave($__internal_0e6b6d9cec1567059ebb4b07afab381b98505665861b5756b55184c6f7df4154_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
