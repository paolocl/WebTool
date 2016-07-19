<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a9073b6a5459430ec67da8ef4eae20c4dbba87013b34918e9472f23fe7a568b6 extends Twig_Template
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
        $__internal_a23372697e6b4f7cf5e04dc2ec8fad1d1cba03454ca9c224f0abb60d698791e5 = $this->env->getExtension("native_profiler");
        $__internal_a23372697e6b4f7cf5e04dc2ec8fad1d1cba03454ca9c224f0abb60d698791e5->enter($__internal_a23372697e6b4f7cf5e04dc2ec8fad1d1cba03454ca9c224f0abb60d698791e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a23372697e6b4f7cf5e04dc2ec8fad1d1cba03454ca9c224f0abb60d698791e5->leave($__internal_a23372697e6b4f7cf5e04dc2ec8fad1d1cba03454ca9c224f0abb60d698791e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
