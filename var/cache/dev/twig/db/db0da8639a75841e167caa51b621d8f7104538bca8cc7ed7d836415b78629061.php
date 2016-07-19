<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5708a208871cab2107c0989d3dc58f983f647714ed287a7c0ccbec494a92a4bf extends Twig_Template
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
        $__internal_cbc0d1a0bd1fa7425b38e8a52d41ae949a2fe21c1e277a5d3f17973205dbfb2b = $this->env->getExtension("native_profiler");
        $__internal_cbc0d1a0bd1fa7425b38e8a52d41ae949a2fe21c1e277a5d3f17973205dbfb2b->enter($__internal_cbc0d1a0bd1fa7425b38e8a52d41ae949a2fe21c1e277a5d3f17973205dbfb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_cbc0d1a0bd1fa7425b38e8a52d41ae949a2fe21c1e277a5d3f17973205dbfb2b->leave($__internal_cbc0d1a0bd1fa7425b38e8a52d41ae949a2fe21c1e277a5d3f17973205dbfb2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
