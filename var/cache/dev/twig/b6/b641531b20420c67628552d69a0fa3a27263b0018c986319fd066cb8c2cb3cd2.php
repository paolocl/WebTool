<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d8c730dcaa4201e0bbaa6a72f5b39a12a2db7d7fdf83356896d0882c79bfe125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8abddb1b88430b88de6764d67ad15276d081422bf430a6b5713f0cc1022a9eea = $this->env->getExtension("native_profiler");
        $__internal_8abddb1b88430b88de6764d67ad15276d081422bf430a6b5713f0cc1022a9eea->enter($__internal_8abddb1b88430b88de6764d67ad15276d081422bf430a6b5713f0cc1022a9eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abddb1b88430b88de6764d67ad15276d081422bf430a6b5713f0cc1022a9eea->leave($__internal_8abddb1b88430b88de6764d67ad15276d081422bf430a6b5713f0cc1022a9eea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5e42c91d215a96f66c5b416a094d526da29bbb1231d5bf8d47f96e77d873191 = $this->env->getExtension("native_profiler");
        $__internal_d5e42c91d215a96f66c5b416a094d526da29bbb1231d5bf8d47f96e77d873191->enter($__internal_d5e42c91d215a96f66c5b416a094d526da29bbb1231d5bf8d47f96e77d873191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d5e42c91d215a96f66c5b416a094d526da29bbb1231d5bf8d47f96e77d873191->leave($__internal_d5e42c91d215a96f66c5b416a094d526da29bbb1231d5bf8d47f96e77d873191_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfd7b8459b8855cee3859b3d069adc1f047c1ab0e3af593ce801ed2b8cab740e = $this->env->getExtension("native_profiler");
        $__internal_dfd7b8459b8855cee3859b3d069adc1f047c1ab0e3af593ce801ed2b8cab740e->enter($__internal_dfd7b8459b8855cee3859b3d069adc1f047c1ab0e3af593ce801ed2b8cab740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dfd7b8459b8855cee3859b3d069adc1f047c1ab0e3af593ce801ed2b8cab740e->leave($__internal_dfd7b8459b8855cee3859b3d069adc1f047c1ab0e3af593ce801ed2b8cab740e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
