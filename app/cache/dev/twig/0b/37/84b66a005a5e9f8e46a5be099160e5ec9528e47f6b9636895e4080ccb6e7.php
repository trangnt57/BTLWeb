<?php

/* ProjectHoinhabaoBundle:Template:change_template.html.twig */
class __TwigTemplate_0b3784b66a005a5e9f8e46a5be099160e5ec9528e47f6b9636895e4080ccb6e7 extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
        echo "\" method=\"post\">
\t<div class=\"radio radio-primary\">
        <label>
            <input type=\"radio\" name=\"template\" id=\"optionsRadios1\" value=\"1\"> Mẫu 1
        </label>
    </div>

\t<div class=\"radio radio-primary\">
        <label>
            <input type=\"radio\" name=\"template\" id=\"optionsRadios2\" value=\"2\"> Mẫu 2
        </label>
    </div>

    <div class=\"radio radio-primary\">
        <label>
            <input type=\"radio\" name=\"template\" id=\"optionsRadios3\" value=\"3\"> Mẫu 3
        </label>
    </div>
\t<button class=\"btn btn-primary\" type= \"submit\" name=\"templateForm\">Đổi </button>
</form>";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Template:change_template.html.twig";
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
