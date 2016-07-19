<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_aa86d6d01859b99a0bc8e37f0f213519b48a27703d6cd9b88397d3272cec2f3d extends Twig_Template
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
        $__internal_8dfadaabdb2f04557dd8b3e152a8c83aa38bfd1c462f03ec802a3ef5cb42e4ed = $this->env->getExtension("native_profiler");
        $__internal_8dfadaabdb2f04557dd8b3e152a8c83aa38bfd1c462f03ec802a3ef5cb42e4ed->enter($__internal_8dfadaabdb2f04557dd8b3e152a8c83aa38bfd1c462f03ec802a3ef5cb42e4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8dfadaabdb2f04557dd8b3e152a8c83aa38bfd1c462f03ec802a3ef5cb42e4ed->leave($__internal_8dfadaabdb2f04557dd8b3e152a8c83aa38bfd1c462f03ec802a3ef5cb42e4ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
