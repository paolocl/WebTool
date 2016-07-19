<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c7091f7d552e39afb566335adef29547ab5b0c3daababa6e1f631b0a6f37d294 extends Twig_Template
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
        $__internal_fd14c1549f349357373d07554dad045f93ad5e6cd387237bc781fc36ffc21742 = $this->env->getExtension("native_profiler");
        $__internal_fd14c1549f349357373d07554dad045f93ad5e6cd387237bc781fc36ffc21742->enter($__internal_fd14c1549f349357373d07554dad045f93ad5e6cd387237bc781fc36ffc21742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fd14c1549f349357373d07554dad045f93ad5e6cd387237bc781fc36ffc21742->leave($__internal_fd14c1549f349357373d07554dad045f93ad5e6cd387237bc781fc36ffc21742_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
