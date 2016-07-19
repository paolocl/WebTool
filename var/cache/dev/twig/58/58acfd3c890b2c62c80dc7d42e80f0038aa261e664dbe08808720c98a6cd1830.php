<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_74fcb5675e4d4df846180a04767a655bf17305a1b1982a83a2b4d7d882d9e32c extends Twig_Template
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
        $__internal_bbcea3404734a1f296b027bb17e8444a4e82298e5c516c5ad3c1957d6dc7e373 = $this->env->getExtension("native_profiler");
        $__internal_bbcea3404734a1f296b027bb17e8444a4e82298e5c516c5ad3c1957d6dc7e373->enter($__internal_bbcea3404734a1f296b027bb17e8444a4e82298e5c516c5ad3c1957d6dc7e373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bbcea3404734a1f296b027bb17e8444a4e82298e5c516c5ad3c1957d6dc7e373->leave($__internal_bbcea3404734a1f296b027bb17e8444a4e82298e5c516c5ad3c1957d6dc7e373_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
