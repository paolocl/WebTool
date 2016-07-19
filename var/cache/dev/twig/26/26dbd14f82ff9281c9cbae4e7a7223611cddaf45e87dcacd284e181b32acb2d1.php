<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_90a0c85dd797b2e487b42a9d29921fa8042868013b262f5716a28ae3914ce52b extends Twig_Template
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
        $__internal_f9629b6824b2e38ff35de76e48270e437a223679ec0eac40ad1a52ab4f52bd3a = $this->env->getExtension("native_profiler");
        $__internal_f9629b6824b2e38ff35de76e48270e437a223679ec0eac40ad1a52ab4f52bd3a->enter($__internal_f9629b6824b2e38ff35de76e48270e437a223679ec0eac40ad1a52ab4f52bd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f9629b6824b2e38ff35de76e48270e437a223679ec0eac40ad1a52ab4f52bd3a->leave($__internal_f9629b6824b2e38ff35de76e48270e437a223679ec0eac40ad1a52ab4f52bd3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
