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
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 2
            echo " Bạn có chắc chắn muốn xóa giải thưởng: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "tengiaithuong", array()), "html", null, true);
            echo "
";
        }
        // line 4
        echo "
";
        // line 5
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
        return array (  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
