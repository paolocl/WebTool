<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0b71b1f5353b6ed87073e440c98d4ff716564f417154166ce1c15c5bbee832ae extends Twig_Template
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
        $__internal_18430482da385293ea2ceb6b69e82169a47b3819049c6edba8e1a917f657a1d6 = $this->env->getExtension("native_profiler");
        $__internal_18430482da385293ea2ceb6b69e82169a47b3819049c6edba8e1a917f657a1d6->enter($__internal_18430482da385293ea2ceb6b69e82169a47b3819049c6edba8e1a917f657a1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_18430482da385293ea2ceb6b69e82169a47b3819049c6edba8e1a917f657a1d6->leave($__internal_18430482da385293ea2ceb6b69e82169a47b3819049c6edba8e1a917f657a1d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
