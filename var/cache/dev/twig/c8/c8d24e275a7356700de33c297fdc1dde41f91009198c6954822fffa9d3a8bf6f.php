<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cc7544033efd6ece78e1eff8d2955f5815da7178610861abeb7db9cfb6995c03 extends Twig_Template
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
        $__internal_d55a6f956c290e75619751c572445e7a2b8ae864c47be2e58428489d50a6c7b5 = $this->env->getExtension("native_profiler");
        $__internal_d55a6f956c290e75619751c572445e7a2b8ae864c47be2e58428489d50a6c7b5->enter($__internal_d55a6f956c290e75619751c572445e7a2b8ae864c47be2e58428489d50a6c7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d55a6f956c290e75619751c572445e7a2b8ae864c47be2e58428489d50a6c7b5->leave($__internal_d55a6f956c290e75619751c572445e7a2b8ae864c47be2e58428489d50a6c7b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
