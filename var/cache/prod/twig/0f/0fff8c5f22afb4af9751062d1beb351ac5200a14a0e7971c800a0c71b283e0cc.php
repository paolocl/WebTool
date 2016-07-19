<?php

/* PageSpeedApiBundle:Table:table.html.twig */
class __TwigTemplate_36eeaa2ef103e1d33f0ca1fc2d2e22c9e0bda6c0e5d59d6c4da26a3f900f7236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PageSpeedApiBundle:Table:table.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Les pagespeeds de Pullmedia</h1>
    ";
        // line 5
        if (array_key_exists("data", $context)) {
            // line 6
            echo "        <table>
            <thead>
            <tr>
                <th>URL</th>
                <th>PS DESKTOP</th>
                <th>PS MOBILE</th>
                <th>PS ANCIEN DESKTOP</th>
                <th>PS ANCIEN MOBILE</th>
                <th>Dernier mise à jour</th>
            </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
                // line 19
                echo "                    <tr>
                        ";
                // line 20
                if ($this->getAttribute($context["url"], "url", array(), "any", true, true)) {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["url"], "url", array()), "html", null, true);
                    echo "</td>";
                }
                // line 21
                echo "                        ";
                if ($this->getAttribute($context["url"], "desktop", array(), "any", true, true)) {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["url"], "desktop", array()), "html", null, true);
                    echo "</td>";
                }
                // line 22
                echo "                        ";
                if ($this->getAttribute($context["url"], "mobile", array(), "any", true, true)) {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["url"], "mobile", array()), "html", null, true);
                    echo "</td>";
                }
                // line 23
                echo "                        ";
                if ($this->getAttribute($context["url"], "oldMobile", array(), "any", true, true)) {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["url"], "oldMobile", array()), "html", null, true);
                    echo "</td>";
                }
                // line 24
                echo "                        ";
                if ($this->getAttribute($context["url"], "oldDesktop", array(), "any", true, true)) {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["url"], "oldDesktop", array()), "html", null, true);
                    echo "</td>";
                }
                // line 25
                echo "                        ";
                if ($this->getAttribute($context["url"], "lastUpdate", array(), "any", true, true)) {
                    echo "<td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["url"], "lastUpdate", array()), "d/m/Y"), "html", null, true);
                    echo "</td>";
                }
                // line 26
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            </tbody>
        </table>
    ";
        }
        // line 31
        echo "<p>Ca prend du temps</p>
<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("page_speed_api_craw_result");
        echo "\">Refresh</a>
";
    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 36
        echo "    <style>
        table tbody tr:nth-child(odd){
            background: darkgrey;
        }
    </style>
    
    
";
    }

    public function getTemplateName()
    {
        return "PageSpeedApiBundle:Table:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  120 => 35,  114 => 32,  111 => 31,  106 => 28,  99 => 26,  92 => 25,  85 => 24,  78 => 23,  71 => 22,  64 => 21,  58 => 20,  55 => 19,  51 => 18,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Les pagespeeds de Pullmedia</h1>*/
/*     {% if data is defined %}*/
/*         <table>*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>URL</th>*/
/*                 <th>PS DESKTOP</th>*/
/*                 <th>PS MOBILE</th>*/
/*                 <th>PS ANCIEN DESKTOP</th>*/
/*                 <th>PS ANCIEN MOBILE</th>*/
/*                 <th>Dernier mise à jour</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for url in data %}*/
/*                     <tr>*/
/*                         {% if url.url is defined %}<td>{{ url.url }}</td>{% endif %}*/
/*                         {% if url.desktop is defined %}<td>{{ url.desktop }}</td>{% endif %}*/
/*                         {% if url.mobile is defined %}<td>{{ url.mobile }}</td>{% endif %}*/
/*                         {% if url.oldMobile is defined %}<td>{{ url.oldMobile }}</td>{% endif %}*/
/*                         {% if url.oldDesktop is defined %}<td>{{ url.oldDesktop }}</td>{% endif %}*/
/*                         {% if url.lastUpdate is defined %}<td>{{ url.lastUpdate|date("d/m/Y") }}</td>{% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* <p>Ca prend du temps</p>*/
/* <a href="{{ url('page_speed_api_craw_result') }}">Refresh</a>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         table tbody tr:nth-child(odd){*/
/*             background: darkgrey;*/
/*         }*/
/*     </style>*/
/*     */
/*     */
/* {% endblock %}*/
