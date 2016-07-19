<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fcfa06bcf4a37f35b39e61852db5d588df7cced8e0a685cf33facaa5ce98093c extends Twig_Template
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
        $__internal_6d21c58e10a7485178d440ad69b16ffb0fc5aed7e1aa0403feff44ee889d7623 = $this->env->getExtension("native_profiler");
        $__internal_6d21c58e10a7485178d440ad69b16ffb0fc5aed7e1aa0403feff44ee889d7623->enter($__internal_6d21c58e10a7485178d440ad69b16ffb0fc5aed7e1aa0403feff44ee889d7623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6d21c58e10a7485178d440ad69b16ffb0fc5aed7e1aa0403feff44ee889d7623->leave($__internal_6d21c58e10a7485178d440ad69b16ffb0fc5aed7e1aa0403feff44ee889d7623_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
