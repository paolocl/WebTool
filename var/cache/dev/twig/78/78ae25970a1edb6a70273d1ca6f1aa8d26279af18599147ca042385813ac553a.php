<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2b513f77f2c21bc4d1ecd4edbe9f8fdbb03c6472526441423f48cbec050c678b extends Twig_Template
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
        $__internal_23e0a8fd213124bf91566bee1f00ab13c57e95f52b4bb695172592ab76a26c50 = $this->env->getExtension("native_profiler");
        $__internal_23e0a8fd213124bf91566bee1f00ab13c57e95f52b4bb695172592ab76a26c50->enter($__internal_23e0a8fd213124bf91566bee1f00ab13c57e95f52b4bb695172592ab76a26c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_23e0a8fd213124bf91566bee1f00ab13c57e95f52b4bb695172592ab76a26c50->leave($__internal_23e0a8fd213124bf91566bee1f00ab13c57e95f52b4bb695172592ab76a26c50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
