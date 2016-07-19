<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2781b4d1061ce722b8a6f0b6b49a3b39a57d393ca4554d5e25d4ff3a88555e34 extends Twig_Template
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
        $__internal_840f93086a5513f2c45af83527f34fc4ae16ca5d1c5723f1b8564ffece120908 = $this->env->getExtension("native_profiler");
        $__internal_840f93086a5513f2c45af83527f34fc4ae16ca5d1c5723f1b8564ffece120908->enter($__internal_840f93086a5513f2c45af83527f34fc4ae16ca5d1c5723f1b8564ffece120908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_840f93086a5513f2c45af83527f34fc4ae16ca5d1c5723f1b8564ffece120908->leave($__internal_840f93086a5513f2c45af83527f34fc4ae16ca5d1c5723f1b8564ffece120908_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
