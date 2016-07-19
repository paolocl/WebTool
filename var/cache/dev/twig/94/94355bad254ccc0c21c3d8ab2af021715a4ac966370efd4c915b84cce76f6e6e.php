<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_215610ebda5fb637b0cb9e3734023044b2284fe2468918e2f4cae2327e023173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3a15b3945547d026e12dd3d3a50b895d3ac89930b66832d5951513349ec8377 = $this->env->getExtension("native_profiler");
        $__internal_a3a15b3945547d026e12dd3d3a50b895d3ac89930b66832d5951513349ec8377->enter($__internal_a3a15b3945547d026e12dd3d3a50b895d3ac89930b66832d5951513349ec8377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a3a15b3945547d026e12dd3d3a50b895d3ac89930b66832d5951513349ec8377->leave($__internal_a3a15b3945547d026e12dd3d3a50b895d3ac89930b66832d5951513349ec8377_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_07f79973fe218d8b896f38bc211060ef37e07c69948e00fe026f150c6ffadff1 = $this->env->getExtension("native_profiler");
        $__internal_07f79973fe218d8b896f38bc211060ef37e07c69948e00fe026f150c6ffadff1->enter($__internal_07f79973fe218d8b896f38bc211060ef37e07c69948e00fe026f150c6ffadff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_07f79973fe218d8b896f38bc211060ef37e07c69948e00fe026f150c6ffadff1->leave($__internal_07f79973fe218d8b896f38bc211060ef37e07c69948e00fe026f150c6ffadff1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
