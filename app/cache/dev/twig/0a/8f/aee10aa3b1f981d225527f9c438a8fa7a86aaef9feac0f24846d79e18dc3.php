<?php

/* ProjectHoinhabaoBundle:Hoivien:hoivien_show_all.html.twig */
class __TwigTemplate_0a8faee10aa3b1f981d225527f9c438a8fa7a86aaef9feac0f24846d79e18dc3 extends Twig_Template
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
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_add");
        echo "\">Thêm hội viên </a>
<form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("project_hoivien_multidelete");
        echo "\" method=\"post\">
\t<input type='submit' value='xóa' name='deletehoivien'>
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hoivien"]) ? $context["hoivien"] : $this->getContext($context, "hoivien")));
        foreach ($context['_seq'] as $context["_key"] => $context["eachhoivien"]) {
            // line 5
            echo "\t<h3><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()), "html", null, true);
            echo "</a></h3>
\t<h4>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "HoTen", array()), "html", null, true);
            echo "</h4>
\t<a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_edit", array("tendangnhap" => $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()))), "html", null, true);
            echo "\">Sửa</a>|
\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_delete", array("tendangnhap" => $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()))), "html", null, true);
            echo "\">Xóa</a>
\t<input type='checkbox' name='xoa[]' value='";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "Mahv", array()), "html", null, true);
            echo "'>
\t<hr/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eachhoivien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Hoivien:hoivien_show_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
