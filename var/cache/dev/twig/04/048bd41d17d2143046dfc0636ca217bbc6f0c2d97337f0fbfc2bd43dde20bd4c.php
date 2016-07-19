<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_92e293c9b152cd62ca623bbc9eab268afb9e42e11c61d4865ad8eea6bbd367c2 extends Twig_Template
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
        $__internal_18062d2708f563fb90c95124e1a0f48cf09370c349e7babde7b8e45c0d81a893 = $this->env->getExtension("native_profiler");
        $__internal_18062d2708f563fb90c95124e1a0f48cf09370c349e7babde7b8e45c0d81a893->enter($__internal_18062d2708f563fb90c95124e1a0f48cf09370c349e7babde7b8e45c0d81a893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_18062d2708f563fb90c95124e1a0f48cf09370c349e7babde7b8e45c0d81a893->leave($__internal_18062d2708f563fb90c95124e1a0f48cf09370c349e7babde7b8e45c0d81a893_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
