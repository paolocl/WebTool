<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4db3d6e8de03d9371912e5a9ddc2c1c712bcb20d421a2efe4d7618feded7b46f extends Twig_Template
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
        $__internal_7dad6e25787f2df05faa1eb7982029ad88d26d05bedbc4bd1612a519b6d6ac18 = $this->env->getExtension("native_profiler");
        $__internal_7dad6e25787f2df05faa1eb7982029ad88d26d05bedbc4bd1612a519b6d6ac18->enter($__internal_7dad6e25787f2df05faa1eb7982029ad88d26d05bedbc4bd1612a519b6d6ac18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7dad6e25787f2df05faa1eb7982029ad88d26d05bedbc4bd1612a519b6d6ac18->leave($__internal_7dad6e25787f2df05faa1eb7982029ad88d26d05bedbc4bd1612a519b6d6ac18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
