<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_cfe4d853c8e188c2742d96618cc02dc22f97b74d8f048c6d4b86251dd4ba819d extends Twig_Template
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
        $__internal_0d036346de8102666a2eb36ff877955bd6b8022e4a252cff8b55815fa82d2bf9 = $this->env->getExtension("native_profiler");
        $__internal_0d036346de8102666a2eb36ff877955bd6b8022e4a252cff8b55815fa82d2bf9->enter($__internal_0d036346de8102666a2eb36ff877955bd6b8022e4a252cff8b55815fa82d2bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0d036346de8102666a2eb36ff877955bd6b8022e4a252cff8b55815fa82d2bf9->leave($__internal_0d036346de8102666a2eb36ff877955bd6b8022e4a252cff8b55815fa82d2bf9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
