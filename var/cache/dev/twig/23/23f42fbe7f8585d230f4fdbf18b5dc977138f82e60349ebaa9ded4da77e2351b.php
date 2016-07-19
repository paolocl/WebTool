<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f9551f9ba11808088d637366711dae3308a0aa31012b1ea6447c1a3fecfd56b3 extends Twig_Template
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
        $__internal_1b57df2519ee65f5c36888bec9f343358bebfa8c8ac8bc099ee8352627024295 = $this->env->getExtension("native_profiler");
        $__internal_1b57df2519ee65f5c36888bec9f343358bebfa8c8ac8bc099ee8352627024295->enter($__internal_1b57df2519ee65f5c36888bec9f343358bebfa8c8ac8bc099ee8352627024295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1b57df2519ee65f5c36888bec9f343358bebfa8c8ac8bc099ee8352627024295->leave($__internal_1b57df2519ee65f5c36888bec9f343358bebfa8c8ac8bc099ee8352627024295_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
