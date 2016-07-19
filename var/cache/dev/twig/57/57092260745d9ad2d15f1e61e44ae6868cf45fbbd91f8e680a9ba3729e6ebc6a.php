<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_063aa621c5b801c4820f36f508c1da9e9f6d5a7770dc4b6042c574615e5273ba extends Twig_Template
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
        $__internal_2bd09208184c346d1126466abd48e421ea4ff113deba5f274150d02b6b32cb9b = $this->env->getExtension("native_profiler");
        $__internal_2bd09208184c346d1126466abd48e421ea4ff113deba5f274150d02b6b32cb9b->enter($__internal_2bd09208184c346d1126466abd48e421ea4ff113deba5f274150d02b6b32cb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2bd09208184c346d1126466abd48e421ea4ff113deba5f274150d02b6b32cb9b->leave($__internal_2bd09208184c346d1126466abd48e421ea4ff113deba5f274150d02b6b32cb9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
