<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9486b13b5c112c25394ab1fb244e0d1150d8a7f92caf5c154db9552cccbe594e extends Twig_Template
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
        $__internal_1b110b6d6a52c19b2a94f098d65e116c8311426a6d6410eb056a6a6997bf9019 = $this->env->getExtension("native_profiler");
        $__internal_1b110b6d6a52c19b2a94f098d65e116c8311426a6d6410eb056a6a6997bf9019->enter($__internal_1b110b6d6a52c19b2a94f098d65e116c8311426a6d6410eb056a6a6997bf9019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1b110b6d6a52c19b2a94f098d65e116c8311426a6d6410eb056a6a6997bf9019->leave($__internal_1b110b6d6a52c19b2a94f098d65e116c8311426a6d6410eb056a6a6997bf9019_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
