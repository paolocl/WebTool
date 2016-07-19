<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_35f5922643aa4efb1cff5bf92e8f69ce415079f57d18b8f47f3a2a87efb8889f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7bf6e1fd8b25459483d19508b388169a4a98e2e474e41a735f99a2dda2e12e93 = $this->env->getExtension("native_profiler");
        $__internal_7bf6e1fd8b25459483d19508b388169a4a98e2e474e41a735f99a2dda2e12e93->enter($__internal_7bf6e1fd8b25459483d19508b388169a4a98e2e474e41a735f99a2dda2e12e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bf6e1fd8b25459483d19508b388169a4a98e2e474e41a735f99a2dda2e12e93->leave($__internal_7bf6e1fd8b25459483d19508b388169a4a98e2e474e41a735f99a2dda2e12e93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f75ceeee7b940131ac815ecc6916b4be0853aebbb3c5ce7553400afba7c30e2 = $this->env->getExtension("native_profiler");
        $__internal_1f75ceeee7b940131ac815ecc6916b4be0853aebbb3c5ce7553400afba7c30e2->enter($__internal_1f75ceeee7b940131ac815ecc6916b4be0853aebbb3c5ce7553400afba7c30e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1f75ceeee7b940131ac815ecc6916b4be0853aebbb3c5ce7553400afba7c30e2->leave($__internal_1f75ceeee7b940131ac815ecc6916b4be0853aebbb3c5ce7553400afba7c30e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54da4a59130f7dad15646dbbb4ea433de003e3e0cf6e5f1cb1be53c24cf8d4a5 = $this->env->getExtension("native_profiler");
        $__internal_54da4a59130f7dad15646dbbb4ea433de003e3e0cf6e5f1cb1be53c24cf8d4a5->enter($__internal_54da4a59130f7dad15646dbbb4ea433de003e3e0cf6e5f1cb1be53c24cf8d4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_54da4a59130f7dad15646dbbb4ea433de003e3e0cf6e5f1cb1be53c24cf8d4a5->leave($__internal_54da4a59130f7dad15646dbbb4ea433de003e3e0cf6e5f1cb1be53c24cf8d4a5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97cd443ef0054e6defd14ba06ec6cb1fb10e86a5267e1c452b7c45e05aca46fc = $this->env->getExtension("native_profiler");
        $__internal_97cd443ef0054e6defd14ba06ec6cb1fb10e86a5267e1c452b7c45e05aca46fc->enter($__internal_97cd443ef0054e6defd14ba06ec6cb1fb10e86a5267e1c452b7c45e05aca46fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_97cd443ef0054e6defd14ba06ec6cb1fb10e86a5267e1c452b7c45e05aca46fc->leave($__internal_97cd443ef0054e6defd14ba06ec6cb1fb10e86a5267e1c452b7c45e05aca46fc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
