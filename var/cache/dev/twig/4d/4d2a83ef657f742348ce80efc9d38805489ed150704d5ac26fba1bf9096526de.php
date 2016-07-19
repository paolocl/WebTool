<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a3147f32e538d15dfb9d90535d08b1096c146fb1f41d7b07a1a58c1496c15f65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_248aa49e7be70459c01df2de62bd54d24000b1b796344d7903a56b0308e6811f = $this->env->getExtension("native_profiler");
        $__internal_248aa49e7be70459c01df2de62bd54d24000b1b796344d7903a56b0308e6811f->enter($__internal_248aa49e7be70459c01df2de62bd54d24000b1b796344d7903a56b0308e6811f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_248aa49e7be70459c01df2de62bd54d24000b1b796344d7903a56b0308e6811f->leave($__internal_248aa49e7be70459c01df2de62bd54d24000b1b796344d7903a56b0308e6811f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c11ed0b1bdee489bba3c59f0e939844ac91881717304ff10b504cac0deb159c = $this->env->getExtension("native_profiler");
        $__internal_4c11ed0b1bdee489bba3c59f0e939844ac91881717304ff10b504cac0deb159c->enter($__internal_4c11ed0b1bdee489bba3c59f0e939844ac91881717304ff10b504cac0deb159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c11ed0b1bdee489bba3c59f0e939844ac91881717304ff10b504cac0deb159c->leave($__internal_4c11ed0b1bdee489bba3c59f0e939844ac91881717304ff10b504cac0deb159c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b2297d59506072849333a92b556205a27e6576a7d48266beba2870e4ecfbe36 = $this->env->getExtension("native_profiler");
        $__internal_5b2297d59506072849333a92b556205a27e6576a7d48266beba2870e4ecfbe36->enter($__internal_5b2297d59506072849333a92b556205a27e6576a7d48266beba2870e4ecfbe36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5b2297d59506072849333a92b556205a27e6576a7d48266beba2870e4ecfbe36->leave($__internal_5b2297d59506072849333a92b556205a27e6576a7d48266beba2870e4ecfbe36_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb695b73260298c11b20b149b3577ede57c0cba1a3befea0f34398868e837960 = $this->env->getExtension("native_profiler");
        $__internal_cb695b73260298c11b20b149b3577ede57c0cba1a3befea0f34398868e837960->enter($__internal_cb695b73260298c11b20b149b3577ede57c0cba1a3befea0f34398868e837960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cb695b73260298c11b20b149b3577ede57c0cba1a3befea0f34398868e837960->leave($__internal_cb695b73260298c11b20b149b3577ede57c0cba1a3befea0f34398868e837960_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
