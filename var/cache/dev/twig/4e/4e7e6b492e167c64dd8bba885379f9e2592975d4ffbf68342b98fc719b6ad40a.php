<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dad2fb705305bc487ebe9530bb2c269b3433832ebbcca4440a3852e6dc76f456 extends Twig_Template
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
        $__internal_c53b4ea354d018a28bd653fbaf10ab432b724302004b8c2a8c2109e922e9b96a = $this->env->getExtension("native_profiler");
        $__internal_c53b4ea354d018a28bd653fbaf10ab432b724302004b8c2a8c2109e922e9b96a->enter($__internal_c53b4ea354d018a28bd653fbaf10ab432b724302004b8c2a8c2109e922e9b96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c53b4ea354d018a28bd653fbaf10ab432b724302004b8c2a8c2109e922e9b96a->leave($__internal_c53b4ea354d018a28bd653fbaf10ab432b724302004b8c2a8c2109e922e9b96a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
