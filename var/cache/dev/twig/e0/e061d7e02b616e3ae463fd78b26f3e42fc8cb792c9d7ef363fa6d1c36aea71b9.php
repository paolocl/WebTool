<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a8556899094e172e292405ac9a1cdd7bc7595490313c75d2542646d7ae8479bf extends Twig_Template
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
        $__internal_7463f2e9f1a87a66049d587aa4c32c6a8f6605ca13f27fb4360d369926f072e0 = $this->env->getExtension("native_profiler");
        $__internal_7463f2e9f1a87a66049d587aa4c32c6a8f6605ca13f27fb4360d369926f072e0->enter($__internal_7463f2e9f1a87a66049d587aa4c32c6a8f6605ca13f27fb4360d369926f072e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7463f2e9f1a87a66049d587aa4c32c6a8f6605ca13f27fb4360d369926f072e0->leave($__internal_7463f2e9f1a87a66049d587aa4c32c6a8f6605ca13f27fb4360d369926f072e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
