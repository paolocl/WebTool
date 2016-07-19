<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_13c1dbc9472e14c89918e11bf1d22fd64e66b2a82c950d417b5f312701ba1379 extends Twig_Template
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
        $__internal_b516358b95c9ec98f9f381fa353110cf610529a2c01bc80f4db5f2f280f7b0bc = $this->env->getExtension("native_profiler");
        $__internal_b516358b95c9ec98f9f381fa353110cf610529a2c01bc80f4db5f2f280f7b0bc->enter($__internal_b516358b95c9ec98f9f381fa353110cf610529a2c01bc80f4db5f2f280f7b0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b516358b95c9ec98f9f381fa353110cf610529a2c01bc80f4db5f2f280f7b0bc->leave($__internal_b516358b95c9ec98f9f381fa353110cf610529a2c01bc80f4db5f2f280f7b0bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
