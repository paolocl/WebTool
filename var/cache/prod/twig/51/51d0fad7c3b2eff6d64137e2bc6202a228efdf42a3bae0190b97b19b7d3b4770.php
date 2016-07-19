<?php

/* :Template:site.html.twig */
class __TwigTemplate_90fb505f866edf98c7c8a192c7c4f621289dd024e4962d422190ce481ddb54b5 extends Twig_Template
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
        // line 1
        echo "<li>Name : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "nom", array()), "html", null, true);
        echo "</li>
<li>PageSpeed Desktop : ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pageSpeed", array()), "desktop", array()), "html", null, true);
        echo "</li>
<li>PageSpeed Mobile : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pageSpeed", array()), "mobile", array()), "html", null, true);
        echo "</li>
<li>PageSpeed Last update : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pageSpeed", array()), "lastUpdate", array()), "html", null, true);
        echo "</li>
<li>FTP Url : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "urls", array()), "url", array()), "html", null, true);
        echo "</li>
<li>FTP Loggin : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ftps", array()), "user", array()), "html", null, true);
        echo "</li>
<li>FTP Password : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ftps", array()), "password", array()), "html", null, true);
        echo "</li>
<li>Analitycs code : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "analytics", array()), "html", null, true);
        echo "</li>
<li>Registrar Name : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "registrar", array()), "nom", array()), "html", null, true);
        echo "</li>
<li>Registrar Login : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "registrar", array()), "login", array()), "html", null, true);
        echo "</li>
<li>registrar Password : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "registrar", array()), "password", array()), "html", null, true);
        echo "</li>
<li>DNS1 : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "registrar", array()), "dns1", array()), "html", null, true);
        echo "</li>
<li>DNS2 : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "registrar", array()), "dns2", array()), "html", null, true);
        echo "</li>
<li>Prix : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "registrar", array()), "prix", array()), "html", null, true);
        echo "</li>

";
        // line 16
        if ( !(null === $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sqls", array()))) {
            // line 17
            echo "<li>Data Base Host : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sqls", array()), "host", array()), "html", null, true);
            echo "</li>
<li>Data Base Name : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sqls", array()), "base", array()), "html", null, true);
            echo "</li>
<li>Data Base Login : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sqls", array()), "username", array()), "html", null, true);
            echo "</li>
<li>Data Base Password : ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sqls", array()), "password", array()), "html", null, true);
            echo "</li>
<li>Data Base Url : ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sqls", array()), "url", array()), "html", null, true);
            echo "</li>
";
        }
        // line 23
        echo "
<li>Ips : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ips", array()), "ip", array()), "html", null, true);
        echo "</li>
<li>Host : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hosts", array()), "nomHost", array()), "html", null, true);
        echo "</li>
<li>Type de projet : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "typeProjet", array()), "value", array()), "html", null, true);
        echo "</li>
<li>Bask Office url : ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "backOffice", array()), "urlAdmin", array()), "html", null, true);
        echo "</li>
<li>Bask Office Login : ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "backOffice", array()), "userAdmin", array()), "html", null, true);
        echo "</li>
<li>Back Office Password : ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "backOffice", array()), "passAdmin", array()), "html", null, true);
        echo "</li>";
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
        return array (  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  101 => 23,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  79 => 17,  77 => 16,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <li>Name : {{ data.nom }}</li>*/
/* <li>PageSpeed Desktop : {{ data.pageSpeed.desktop }}</li>*/
/* <li>PageSpeed Mobile : {{ data.pageSpeed.mobile }}</li>*/
/* <li>PageSpeed Last update : {{ data.pageSpeed.lastUpdate }}</li>*/
/* <li>FTP Url : {{ data.urls.url }}</li>*/
/* <li>FTP Loggin : {{ data.ftps.user }}</li>*/
/* <li>FTP Password : {{ data.ftps.password }}</li>*/
/* <li>Analitycs code : {{ data.analytics }}</li>*/
/* <li>Registrar Name : {{ data.registrar.nom }}</li>*/
/* <li>Registrar Login : {{ data.registrar.login }}</li>*/
/* <li>registrar Password : {{ data.registrar.password }}</li>*/
/* <li>DNS1 : {{ data.registrar.dns1 }}</li>*/
/* <li>DNS2 : {{ data.registrar.dns2 }}</li>*/
/* <li>Prix : {{ data.registrar.prix }}</li>*/
/* */
/* {% if data.sqls is not null %}*/
/* <li>Data Base Host : {{ data.sqls.host }}</li>*/
/* <li>Data Base Name : {{ data.sqls.base }}</li>*/
/* <li>Data Base Login : {{ data.sqls.username }}</li>*/
/* <li>Data Base Password : {{ data.sqls.password }}</li>*/
/* <li>Data Base Url : {{ data.sqls.url }}</li>*/
/* {% endif %}*/
/* */
/* <li>Ips : {{ data.ips.ip }}</li>*/
/* <li>Host : {{ data.hosts.nomHost }}</li>*/
/* <li>Type de projet : {{ data.typeProjet.value }}</li>*/
/* <li>Bask Office url : {{ data.backOffice.urlAdmin }}</li>*/
/* <li>Bask Office Login : {{ data.backOffice.userAdmin }}</li>*/
/* <li>Back Office Password : {{ data.backOffice.passAdmin }}</li>*/
