<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_33cdd94e69f0bddb2b8dc3185fb98696d36b01a561bff166af7fdd6ee3a892e1 extends Twig_Template
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
        $__internal_dbd498209e0e7613c7f2a084991cb03119e4838777cb01ad4d9c20bd3452ff75 = $this->env->getExtension("native_profiler");
        $__internal_dbd498209e0e7613c7f2a084991cb03119e4838777cb01ad4d9c20bd3452ff75->enter($__internal_dbd498209e0e7613c7f2a084991cb03119e4838777cb01ad4d9c20bd3452ff75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_dbd498209e0e7613c7f2a084991cb03119e4838777cb01ad4d9c20bd3452ff75->leave($__internal_dbd498209e0e7613c7f2a084991cb03119e4838777cb01ad4d9c20bd3452ff75_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
