<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1cbb3d98faea8cb5ab86391f43a03e80ba5027f9ea0be646c55cfc2056f27c90 extends Twig_Template
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
        $__internal_c7ca16955baacc4ca2bfb7d6c95a92b114124b560c52db98a4ac22192072ae31 = $this->env->getExtension("native_profiler");
        $__internal_c7ca16955baacc4ca2bfb7d6c95a92b114124b560c52db98a4ac22192072ae31->enter($__internal_c7ca16955baacc4ca2bfb7d6c95a92b114124b560c52db98a4ac22192072ae31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c7ca16955baacc4ca2bfb7d6c95a92b114124b560c52db98a4ac22192072ae31->leave($__internal_c7ca16955baacc4ca2bfb7d6c95a92b114124b560c52db98a4ac22192072ae31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
