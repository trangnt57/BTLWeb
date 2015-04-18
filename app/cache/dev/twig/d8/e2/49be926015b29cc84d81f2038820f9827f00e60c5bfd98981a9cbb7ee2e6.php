<?php

/* ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig */
class __TwigTemplate_d8e249be926015b29cc84d81f2038820f9827f00e60c5bfd98981a9cbb7ee2e6 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
