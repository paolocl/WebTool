<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fe891623a6e70e56632c95b0330253a46305e0f341aec8f5dc5fe2515df405af extends Twig_Template
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
        $__internal_cd6b9dfa1ab674f5a97df4d530493439d736689a04304c9d877d2db0e80d4f46 = $this->env->getExtension("native_profiler");
        $__internal_cd6b9dfa1ab674f5a97df4d530493439d736689a04304c9d877d2db0e80d4f46->enter($__internal_cd6b9dfa1ab674f5a97df4d530493439d736689a04304c9d877d2db0e80d4f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cd6b9dfa1ab674f5a97df4d530493439d736689a04304c9d877d2db0e80d4f46->leave($__internal_cd6b9dfa1ab674f5a97df4d530493439d736689a04304c9d877d2db0e80d4f46_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
