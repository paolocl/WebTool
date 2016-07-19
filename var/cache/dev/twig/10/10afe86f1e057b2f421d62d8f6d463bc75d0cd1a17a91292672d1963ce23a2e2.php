<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4015a2d8f5854986f9bb384b7483e9a255a063ac417cb8c2df623036285b313c extends Twig_Template
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
        $__internal_cfeb09553e0b3340914378b7b10c6dbcd2e308de44b96e0a2f2d4f8819bda462 = $this->env->getExtension("native_profiler");
        $__internal_cfeb09553e0b3340914378b7b10c6dbcd2e308de44b96e0a2f2d4f8819bda462->enter($__internal_cfeb09553e0b3340914378b7b10c6dbcd2e308de44b96e0a2f2d4f8819bda462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cfeb09553e0b3340914378b7b10c6dbcd2e308de44b96e0a2f2d4f8819bda462->leave($__internal_cfeb09553e0b3340914378b7b10c6dbcd2e308de44b96e0a2f2d4f8819bda462_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
