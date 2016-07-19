<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_13deb34c7720cac47cd162d2b56fa464bc5f0bc872d4d4861614e8d7f0f786c8 extends Twig_Template
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
        $__internal_a64c6f19d867de3f9742315e50b04628fc850e2449acf193cf5b6424f20f04b4 = $this->env->getExtension("native_profiler");
        $__internal_a64c6f19d867de3f9742315e50b04628fc850e2449acf193cf5b6424f20f04b4->enter($__internal_a64c6f19d867de3f9742315e50b04628fc850e2449acf193cf5b6424f20f04b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a64c6f19d867de3f9742315e50b04628fc850e2449acf193cf5b6424f20f04b4->leave($__internal_a64c6f19d867de3f9742315e50b04628fc850e2449acf193cf5b6424f20f04b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
