<?php

/* :Template:site.html.twig */
class __TwigTemplate_7ee46c5545c75b1d3f4f6d0996ff9861abee74ed6326e35c0c52baaa31da63ec extends Twig_Template
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
        $__internal_f67df6e4db447bc12e4e886e06c18cc0afdea0c0deee249da583f3c58aee7cd7 = $this->env->getExtension("native_profiler");
        $__internal_f67df6e4db447bc12e4e886e06c18cc0afdea0c0deee249da583f3c58aee7cd7->enter($__internal_f67df6e4db447bc12e4e886e06c18cc0afdea0c0deee249da583f3c58aee7cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Template:site.html.twig"));

        // line 1
        echo "<ul class=\"col-xs-12 list-unstyled\">
    ";
        // line 2
        echo $this->env->getExtension('dump')->dump($this->env, $context, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "affiliation", array()));
        echo "
    <li class=\"col-md-3 col-sm-4\">Name : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "nom", array()), "html", null, true);
        echo "</li>
    ";
        // line 4
        if ( !(null === $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idPageSpeed", array()))) {
            // line 5
            echo "        <li class=\"col-md-3 col-sm-4\">PageSpeed Desktop : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "pageSpeed", array()), "desktop", array()), "html", null, true);
            echo "</li>
        <li class=\"col-md-3 col-sm-4\">PageSpeed Mobile : ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "pageSpeed", array()), "mobile", array()), "html", null, true);
            echo "</li>
        <li class=\"col-md-3 col-sm-4\">PageSpeed Last update : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "pageSpeed", array()), "lastUpdate", array()), "html", null, true);
            echo "</li>
    ";
        }
        // line 9
        echo "    <li class=\"col-md-3 col-sm-4\">FTP Url : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "urls", array()), "url", array()), "html", null, true);
        echo "</li>
    <li class=\"col-md-3 col-sm-4\">FTP Loggin : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "ftps", array()), "user", array()), "html", null, true);
        echo "</li>
    <li class=\"col-md-3 col-sm-4\">FTP Password : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "ftps", array()), "password", array()), "html", null, true);
        echo "</li>
    <li class=\"col-md-3 col-sm-4\">Analitycs code : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "analytics", array()), "html", null, true);
        echo "</li>
    <li class=\"col-md-3 col-sm-4\">Registrar Name : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "registrar", array()), "nom", array()), "html", null, true);
        echo "</li>
    <li class=\"col-md-3 col-sm-4\">Registrar Login : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "registrar", array()), "login", array()), "html", null, true);
        echo "</li>
    <li class=\"col-md-3 col-sm-4\">registrar Password : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "registrar", array()), "password", array()), "html", null, true);
        echo "</li>
    <li class=\"col-md-3 col-sm-4\">DNS1 : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "registrar", array()), "dns1", array()), "html", null, true);
        echo "</li>
    <li class=\"col-md-3 col-sm-4\">DNS2 : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "registrar", array()), "dns2", array()), "html", null, true);
        echo "</li>
    <li class=\"col-md-3 col-sm-4\">Prix : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "registrar", array()), "prix", array()), "html", null, true);
        echo "</li>

    ";
        // line 20
        if ( !(null === $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "sqls", array()))) {
            // line 21
            echo "        <li class=\"col-md-3 col-sm-4\">Data Base Host : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "sqls", array()), "host", array()), "html", null, true);
            echo "</li>
        <li class=\"col-md-3 col-sm-4\">Data Base Name : ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "sqls", array()), "base", array()), "html", null, true);
            echo "</li>
        <li class=\"col-md-3 col-sm-4\">Data Base Login : ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "sqls", array()), "username", array()), "html", null, true);
            echo "</li>
        <li class=\"col-md-3 col-sm-4\">Data Base Password : ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "sqls", array()), "password", array()), "html", null, true);
            echo "</li>
        <li class=\"col-md-3 col-sm-4\">Data Base Url : ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "sqls", array()), "url", array()), "html", null, true);
            echo "</li>
    ";
        }
        // line 27
        echo "
    <li class=\"col-md-3 col-sm-4\">Ips : ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "ips", array()), "ip", array()), "html", null, true);
        echo "</li>
    <li class=\"col-md-3 col-sm-4\">Host : ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "hosts", array()), "nomHost", array()), "html", null, true);
        echo "</li>
    <li class=\"col-md-3 col-sm-4\">Type de projet : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "typeProjet", array()), "value", array()), "html", null, true);
        echo "</li>
</ul>";
        
        $__internal_f67df6e4db447bc12e4e886e06c18cc0afdea0c0deee249da583f3c58aee7cd7->leave($__internal_f67df6e4db447bc12e4e886e06c18cc0afdea0c0deee249da583f3c58aee7cd7_prof);

    }

    public function getTemplateName()
    {
        return ":Template:site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 30,  122 => 29,  118 => 28,  115 => 27,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  93 => 21,  91 => 20,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  49 => 9,  44 => 7,  40 => 6,  35 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="col-xs-12 list-unstyled">*/
/*     {{ dump(data.affiliation) }}*/
/*     <li class="col-md-3 col-sm-4">Name : {{ data.nom }}</li>*/
/*     {% if data.idPageSpeed is not null %}*/
/*         <li class="col-md-3 col-sm-4">PageSpeed Desktop : {{ data.pageSpeed.desktop }}</li>*/
/*         <li class="col-md-3 col-sm-4">PageSpeed Mobile : {{ data.pageSpeed.mobile }}</li>*/
/*         <li class="col-md-3 col-sm-4">PageSpeed Last update : {{ data.pageSpeed.lastUpdate }}</li>*/
/*     {% endif %}*/
/*     <li class="col-md-3 col-sm-4">FTP Url : {{ data.urls.url }}</li>*/
/*     <li class="col-md-3 col-sm-4">FTP Loggin : {{ data.ftps.user }}</li>*/
/*     <li class="col-md-3 col-sm-4">FTP Password : {{ data.ftps.password }}</li>*/
/*     <li class="col-md-3 col-sm-4">Analitycs code : {{ data.analytics }}</li>*/
/*     <li class="col-md-3 col-sm-4">Registrar Name : {{ data.registrar.nom }}</li>*/
/*     <li class="col-md-3 col-sm-4">Registrar Login : {{ data.registrar.login }}</li>*/
/*     <li class="col-md-3 col-sm-4">registrar Password : {{ data.registrar.password }}</li>*/
/*     <li class="col-md-3 col-sm-4">DNS1 : {{ data.registrar.dns1 }}</li>*/
/*     <li class="col-md-3 col-sm-4">DNS2 : {{ data.registrar.dns2 }}</li>*/
/*     <li class="col-md-3 col-sm-4">Prix : {{ data.registrar.prix }}</li>*/
/* */
/*     {% if data.sqls is not null %}*/
/*         <li class="col-md-3 col-sm-4">Data Base Host : {{ data.sqls.host }}</li>*/
/*         <li class="col-md-3 col-sm-4">Data Base Name : {{ data.sqls.base }}</li>*/
/*         <li class="col-md-3 col-sm-4">Data Base Login : {{ data.sqls.username }}</li>*/
/*         <li class="col-md-3 col-sm-4">Data Base Password : {{ data.sqls.password }}</li>*/
/*         <li class="col-md-3 col-sm-4">Data Base Url : {{ data.sqls.url }}</li>*/
/*     {% endif %}*/
/* */
/*     <li class="col-md-3 col-sm-4">Ips : {{ data.ips.ip }}</li>*/
/*     <li class="col-md-3 col-sm-4">Host : {{ data.hosts.nomHost }}</li>*/
/*     <li class="col-md-3 col-sm-4">Type de projet : {{ data.typeProjet.value }}</li>*/
/* </ul>*/
