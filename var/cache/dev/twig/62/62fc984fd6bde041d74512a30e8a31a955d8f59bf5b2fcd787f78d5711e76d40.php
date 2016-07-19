<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_345a56c86fc30fc2a21935bacacdc3bb5a4e6e5727c29badddcd3cb437f67d4d extends Twig_Template
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
        $__internal_d40871f144a514d6020251715b6460441ebcff8045bd4cdf60789613b172c1c9 = $this->env->getExtension("native_profiler");
        $__internal_d40871f144a514d6020251715b6460441ebcff8045bd4cdf60789613b172c1c9->enter($__internal_d40871f144a514d6020251715b6460441ebcff8045bd4cdf60789613b172c1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d40871f144a514d6020251715b6460441ebcff8045bd4cdf60789613b172c1c9->leave($__internal_d40871f144a514d6020251715b6460441ebcff8045bd4cdf60789613b172c1c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
