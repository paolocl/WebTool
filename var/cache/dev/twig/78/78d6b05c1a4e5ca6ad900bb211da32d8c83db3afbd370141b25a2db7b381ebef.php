<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_908514d5ca158e7e27c73e4aefdd357e4a0dd5ad1920f75301c358bd06251597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b1cee9039a0ee31c0f6348a5128b89c04a559f347c75e30f12ba5a84cce43fb = $this->env->getExtension("native_profiler");
        $__internal_7b1cee9039a0ee31c0f6348a5128b89c04a559f347c75e30f12ba5a84cce43fb->enter($__internal_7b1cee9039a0ee31c0f6348a5128b89c04a559f347c75e30f12ba5a84cce43fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b1cee9039a0ee31c0f6348a5128b89c04a559f347c75e30f12ba5a84cce43fb->leave($__internal_7b1cee9039a0ee31c0f6348a5128b89c04a559f347c75e30f12ba5a84cce43fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_adf6d2040dfecd42b0d07df7835e9f2e94b25c8b1db67c89f5cf35fa400a5f21 = $this->env->getExtension("native_profiler");
        $__internal_adf6d2040dfecd42b0d07df7835e9f2e94b25c8b1db67c89f5cf35fa400a5f21->enter($__internal_adf6d2040dfecd42b0d07df7835e9f2e94b25c8b1db67c89f5cf35fa400a5f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_adf6d2040dfecd42b0d07df7835e9f2e94b25c8b1db67c89f5cf35fa400a5f21->leave($__internal_adf6d2040dfecd42b0d07df7835e9f2e94b25c8b1db67c89f5cf35fa400a5f21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20d73a372a94737bdbb864846e7aa1a3a33bb80c460b2ed8caff6a30a4321152 = $this->env->getExtension("native_profiler");
        $__internal_20d73a372a94737bdbb864846e7aa1a3a33bb80c460b2ed8caff6a30a4321152->enter($__internal_20d73a372a94737bdbb864846e7aa1a3a33bb80c460b2ed8caff6a30a4321152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20d73a372a94737bdbb864846e7aa1a3a33bb80c460b2ed8caff6a30a4321152->leave($__internal_20d73a372a94737bdbb864846e7aa1a3a33bb80c460b2ed8caff6a30a4321152_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d7721da657e487f0fd46bc2ae74fe337996946de5a3131f77ce6ed94b1bf783 = $this->env->getExtension("native_profiler");
        $__internal_9d7721da657e487f0fd46bc2ae74fe337996946de5a3131f77ce6ed94b1bf783->enter($__internal_9d7721da657e487f0fd46bc2ae74fe337996946de5a3131f77ce6ed94b1bf783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d7721da657e487f0fd46bc2ae74fe337996946de5a3131f77ce6ed94b1bf783->leave($__internal_9d7721da657e487f0fd46bc2ae74fe337996946de5a3131f77ce6ed94b1bf783_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
