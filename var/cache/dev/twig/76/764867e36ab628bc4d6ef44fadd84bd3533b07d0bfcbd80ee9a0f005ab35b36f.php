<?php

/* :default:index.html.twig */
class __TwigTemplate_5535382c9c36dac2f38d395408bd5d3801097728f4a87cdaf7e38b43521bb1a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14408bc90f1266e027d4195d41a440d1e2ec0d6f83f29aece4d1a3f9dbebba29 = $this->env->getExtension("native_profiler");
        $__internal_14408bc90f1266e027d4195d41a440d1e2ec0d6f83f29aece4d1a3f9dbebba29->enter($__internal_14408bc90f1266e027d4195d41a440d1e2ec0d6f83f29aece4d1a3f9dbebba29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14408bc90f1266e027d4195d41a440d1e2ec0d6f83f29aece4d1a3f9dbebba29->leave($__internal_14408bc90f1266e027d4195d41a440d1e2ec0d6f83f29aece4d1a3f9dbebba29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad2da0d0f162855bd322ff68882160ba60bb3455952b1e6c4637589e2cded1cf = $this->env->getExtension("native_profiler");
        $__internal_ad2da0d0f162855bd322ff68882160ba60bb3455952b1e6c4637589e2cded1cf->enter($__internal_ad2da0d0f162855bd322ff68882160ba60bb3455952b1e6c4637589e2cded1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array()), "analytics", array()));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        echo "
    <section class=\"container-fluid\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 8
            echo "        <ul class=\"col-xs-12 list-group list-unstyled\">
            <li class=\"col-xs-12 list-group-item\">
                <ul class=\"col-xs-12 list-group list-unstyled\">
                    <li class=\"col-md-3 col-sm-4 col-xs-6\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["site"], "nom", array()), "html", null, true);
            echo "</li>
                    <li class=\"col-md-3 col-sm-4 col-xs-6\"><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["site"], "backOffice", array()), "urlAdmin", array()), "html", null, true);
            echo "\" target=\"_blank\">Back Office</a></li>
                    <li class=\"col-md-3 col-sm-4 col-xs-6\">Login Back Office : ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["site"], "backOffice", array()), "userAdmin", array()), "html", null, true);
            echo "</li>
                    <li class=\"col-md-3 col-sm-4 col-xs-6\">Password Back Office : ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["site"], "backOffice", array()), "passAdmin", array()), "html", null, true);
            echo "</li>
                </ul>
            </li>
            <li class=\"readMore col-xs-12 list-group-item\" data-url=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("app_bundle_site", array("id" => $this->getAttribute($context["site"], "id", array()))), "html", null, true);
            echo "\">Read More</li>
            <li class=\"col-xs-12 list-group-item\"></li>
        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </section>
";
        
        $__internal_ad2da0d0f162855bd322ff68882160ba60bb3455952b1e6c4637589e2cded1cf->leave($__internal_ad2da0d0f162855bd322ff68882160ba60bb3455952b1e6c4637589e2cded1cf_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9cfca991a72df6d85df9140a6387b35e448bf2f5dfbb6dd4ab73c90dffac7a29 = $this->env->getExtension("native_profiler");
        $__internal_9cfca991a72df6d85df9140a6387b35e448bf2f5dfbb6dd4ab73c90dffac7a29->enter($__internal_9cfca991a72df6d85df9140a6387b35e448bf2f5dfbb6dd4ab73c90dffac7a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ajaxSite.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9cfca991a72df6d85df9140a6387b35e448bf2f5dfbb6dd4ab73c90dffac7a29->leave($__internal_9cfca991a72df6d85df9140a6387b35e448bf2f5dfbb6dd4ab73c90dffac7a29_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  96 => 24,  88 => 21,  78 => 17,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  55 => 8,  51 => 7,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ dump(data.0.analytics) }}*/
/*     {{ dump(data) }}*/
/*     <section class="container-fluid">*/
/*     {% for site in data %}*/
/*         <ul class="col-xs-12 list-group list-unstyled">*/
/*             <li class="col-xs-12 list-group-item">*/
/*                 <ul class="col-xs-12 list-group list-unstyled">*/
/*                     <li class="col-md-3 col-sm-4 col-xs-6">{{ site.nom }}</li>*/
/*                     <li class="col-md-3 col-sm-4 col-xs-6"><a href="{{ site.backOffice.urlAdmin }}" target="_blank">Back Office</a></li>*/
/*                     <li class="col-md-3 col-sm-4 col-xs-6">Login Back Office : {{ site.backOffice.userAdmin }}</li>*/
/*                     <li class="col-md-3 col-sm-4 col-xs-6">Password Back Office : {{ site.backOffice.passAdmin }}</li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="readMore col-xs-12 list-group-item" data-url="{{ url('app_bundle_site', {'id': site.id}) }}">Read More</li>*/
/*             <li class="col-xs-12 list-group-item"></li>*/
/*         </ul>*/
/*     {% endfor %}*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('js/ajaxSite.js') }}"></script>*/
/* {% endblock %}*/
/* */
