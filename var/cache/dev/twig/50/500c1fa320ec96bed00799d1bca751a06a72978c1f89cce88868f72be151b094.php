<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a20da2d26ef646c508348f2df27ec73f24778a2f9edef1dca8110ca82ef3da96 extends Twig_Template
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
        $__internal_5cef43cf5db6fc4057437b0dc34d5be3739fe214dcc5fcf8df98a54b959ed277 = $this->env->getExtension("native_profiler");
        $__internal_5cef43cf5db6fc4057437b0dc34d5be3739fe214dcc5fcf8df98a54b959ed277->enter($__internal_5cef43cf5db6fc4057437b0dc34d5be3739fe214dcc5fcf8df98a54b959ed277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5cef43cf5db6fc4057437b0dc34d5be3739fe214dcc5fcf8df98a54b959ed277->leave($__internal_5cef43cf5db6fc4057437b0dc34d5be3739fe214dcc5fcf8df98a54b959ed277_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
