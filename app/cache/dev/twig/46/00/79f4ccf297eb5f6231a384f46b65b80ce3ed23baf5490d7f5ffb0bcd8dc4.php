<?php

/* ProjectHoinhabaoBundle:tacpham:tacpham_add.html.twig */
class __TwigTemplate_460079f4ccf297eb5f6231a384f46b65b80ce3ed23baf5490d7f5ffb0bcd8dc4 extends Twig_Template
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
            echo "\tBạn có chắc chắn muốn xóa tác phẩm này: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "tentacpham", array()), "html", null, true);
            echo "?
";
        }
        // line 4
        echo "

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:tacpham:tacpham_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
