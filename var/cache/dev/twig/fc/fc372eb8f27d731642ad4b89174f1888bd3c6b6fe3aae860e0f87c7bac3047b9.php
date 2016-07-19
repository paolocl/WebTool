<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b23bf6b44408e0ee5ef77d2fb9d487a41e4903be728988c1f3fa83d2ac9e28fb extends Twig_Template
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
        $__internal_88afd43224e043b7ca978684f5813273117e0eaa3aab4941394806fa4b5c722e = $this->env->getExtension("native_profiler");
        $__internal_88afd43224e043b7ca978684f5813273117e0eaa3aab4941394806fa4b5c722e->enter($__internal_88afd43224e043b7ca978684f5813273117e0eaa3aab4941394806fa4b5c722e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_88afd43224e043b7ca978684f5813273117e0eaa3aab4941394806fa4b5c722e->leave($__internal_88afd43224e043b7ca978684f5813273117e0eaa3aab4941394806fa4b5c722e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
