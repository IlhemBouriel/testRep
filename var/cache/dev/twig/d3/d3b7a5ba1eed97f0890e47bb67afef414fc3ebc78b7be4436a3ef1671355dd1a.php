<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_27373ca01618067f7f2202fc731be26d908c91ffc7ef6e75ae72b3961cdfeab2 extends Twig_Template
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
        $__internal_793b3ad72ed0c62a7f915f7e6a7af9db593ee91e5b4f7e29da3ab58985c3e2ff = $this->env->getExtension("native_profiler");
        $__internal_793b3ad72ed0c62a7f915f7e6a7af9db593ee91e5b4f7e29da3ab58985c3e2ff->enter($__internal_793b3ad72ed0c62a7f915f7e6a7af9db593ee91e5b4f7e29da3ab58985c3e2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_793b3ad72ed0c62a7f915f7e6a7af9db593ee91e5b4f7e29da3ab58985c3e2ff->leave($__internal_793b3ad72ed0c62a7f915f7e6a7af9db593ee91e5b4f7e29da3ab58985c3e2ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
