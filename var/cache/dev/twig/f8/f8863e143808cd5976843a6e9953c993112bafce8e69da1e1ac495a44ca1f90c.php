<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_413ae31dcf81a1a4083960c8bbdd2f09fab148680ec69a6a4ac071c4fed4d633 extends Twig_Template
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
        $__internal_8d571150e23dfee3e9b988b3a01a321372323d9c0a9405abc6a719754f001b6b = $this->env->getExtension("native_profiler");
        $__internal_8d571150e23dfee3e9b988b3a01a321372323d9c0a9405abc6a719754f001b6b->enter($__internal_8d571150e23dfee3e9b988b3a01a321372323d9c0a9405abc6a719754f001b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8d571150e23dfee3e9b988b3a01a321372323d9c0a9405abc6a719754f001b6b->leave($__internal_8d571150e23dfee3e9b988b3a01a321372323d9c0a9405abc6a719754f001b6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
