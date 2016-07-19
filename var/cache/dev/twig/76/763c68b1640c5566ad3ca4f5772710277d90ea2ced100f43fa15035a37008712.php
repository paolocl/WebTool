<?php

/* base.html.twig */
class __TwigTemplate_b86b176651e09f5bd0f2ca35dd1770f8c3fdc1b016601ec1859097540830713b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6504afe2cc29deba5aba010a8ae457ebf3b131fd7257bb03f375dbefe75cd5ea = $this->env->getExtension("native_profiler");
        $__internal_6504afe2cc29deba5aba010a8ae457ebf3b131fd7257bb03f375dbefe75cd5ea->enter($__internal_6504afe2cc29deba5aba010a8ae457ebf3b131fd7257bb03f375dbefe75cd5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "
        <script   src=\"https://code.jquery.com/jquery-2.2.4.min.js\"   integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\"   crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "

    </body>
</html>
";
        
        $__internal_6504afe2cc29deba5aba010a8ae457ebf3b131fd7257bb03f375dbefe75cd5ea->leave($__internal_6504afe2cc29deba5aba010a8ae457ebf3b131fd7257bb03f375dbefe75cd5ea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4336c367c94f3e09a04c3d54aa769825f66cbfe76cf9f2185b4c5570af5ed36f = $this->env->getExtension("native_profiler");
        $__internal_4336c367c94f3e09a04c3d54aa769825f66cbfe76cf9f2185b4c5570af5ed36f->enter($__internal_4336c367c94f3e09a04c3d54aa769825f66cbfe76cf9f2185b4c5570af5ed36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4336c367c94f3e09a04c3d54aa769825f66cbfe76cf9f2185b4c5570af5ed36f->leave($__internal_4336c367c94f3e09a04c3d54aa769825f66cbfe76cf9f2185b4c5570af5ed36f_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62dd409963b98dbd490048e60910fa486513f2f3ba4560d9ed6a1516492239c8 = $this->env->getExtension("native_profiler");
        $__internal_62dd409963b98dbd490048e60910fa486513f2f3ba4560d9ed6a1516492239c8->enter($__internal_62dd409963b98dbd490048e60910fa486513f2f3ba4560d9ed6a1516492239c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        
        $__internal_62dd409963b98dbd490048e60910fa486513f2f3ba4560d9ed6a1516492239c8->leave($__internal_62dd409963b98dbd490048e60910fa486513f2f3ba4560d9ed6a1516492239c8_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_f149eeea0aab29365c803d73463ac3b927274d3e47097fe28cb90a784356555a = $this->env->getExtension("native_profiler");
        $__internal_f149eeea0aab29365c803d73463ac3b927274d3e47097fe28cb90a784356555a->enter($__internal_f149eeea0aab29365c803d73463ac3b927274d3e47097fe28cb90a784356555a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "        ";
        
        $__internal_f149eeea0aab29365c803d73463ac3b927274d3e47097fe28cb90a784356555a->leave($__internal_f149eeea0aab29365c803d73463ac3b927274d3e47097fe28cb90a784356555a_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a071b3d381eb9fe6a93e18547c292620ed8c6389a074b57d2b9da320ecf82160 = $this->env->getExtension("native_profiler");
        $__internal_a071b3d381eb9fe6a93e18547c292620ed8c6389a074b57d2b9da320ecf82160->enter($__internal_a071b3d381eb9fe6a93e18547c292620ed8c6389a074b57d2b9da320ecf82160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "        ";
        
        $__internal_a071b3d381eb9fe6a93e18547c292620ed8c6389a074b57d2b9da320ecf82160->leave($__internal_a071b3d381eb9fe6a93e18547c292620ed8c6389a074b57d2b9da320ecf82160_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 25,  118 => 24,  111 => 19,  105 => 18,  98 => 13,  92 => 12,  80 => 7,  69 => 26,  67 => 24,  62 => 22,  58 => 20,  56 => 18,  50 => 15,  47 => 14,  45 => 12,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/* */
/*         {% block stylesheets %}*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*         {% endblock %}*/
/* */
/*         <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>*/
/*         <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/* */
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/* */
/* */
/*     </body>*/
/* </html>*/
/* */
