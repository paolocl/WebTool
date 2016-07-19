<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e834eb0a99ad7ec207de68e99331ecb6a165b572f08e55c51c042a5fc4873e35 extends Twig_Template
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
        $__internal_9c27080accd59747dc6d7ac31963d81ccb6449609b8cc718e41e993395cbdb32 = $this->env->getExtension("native_profiler");
        $__internal_9c27080accd59747dc6d7ac31963d81ccb6449609b8cc718e41e993395cbdb32->enter($__internal_9c27080accd59747dc6d7ac31963d81ccb6449609b8cc718e41e993395cbdb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9c27080accd59747dc6d7ac31963d81ccb6449609b8cc718e41e993395cbdb32->leave($__internal_9c27080accd59747dc6d7ac31963d81ccb6449609b8cc718e41e993395cbdb32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
