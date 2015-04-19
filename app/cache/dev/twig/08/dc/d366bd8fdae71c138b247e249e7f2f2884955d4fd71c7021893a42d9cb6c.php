<?php

/* ProjectHoinhabaoBundle:Tacpham:tacpham_show_all.html.twig */
class __TwigTemplate_08dcd366bd8fdae71c138b247e249e7f2f2884955d4fd71c7021893a42d9cb6c extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
        echo "
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham_multidelete", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\" method=\"post\">
\t<input type='submit' value='xóa' name='deletetacpham'>
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tacpham"]) ? $context["tacpham"] : $this->getContext($context, "tacpham")));
        foreach ($context['_seq'] as $context["_key"] => $context["tp"]) {
            // line 5
            echo "\t<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "TenTacPham", array()), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "MoTa", array()), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tp"], "NgaySangTac", array()), "Y-m-d"), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "MaTheLoai", array()), "html", null, true);
            echo "</h3>
\t<input type='checkbox' name='xoa[]' value='";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "MaTacPham", array()), "html", null, true);
            echo "'>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</form>
<hr/>

<form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong_multidelete", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\" method=\"post\">
\t<input type='submit' value='xóa' name='deletegiaithuong'>
";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["giaithuong"]) ? $context["giaithuong"] : $this->getContext($context, "giaithuong")));
        foreach ($context['_seq'] as $context["_key"] => $context["gt"]) {
            // line 17
            echo "\t<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gt"], "TenGiaiThuong", array()), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["gt"], "NgayDatGiai", array()), "Y-m-d"), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["gt"], "MaTacPham", array()), "html", null, true);
            echo "</h3>
\t<input type='checkbox' name='xoa[]' value='";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["gt"], "MaGiaiThuong", array()), "html", null, true);
            echo "'>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Tacpham:tacpham_show_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  84 => 20,  80 => 19,  76 => 18,  71 => 17,  67 => 16,  62 => 14,  57 => 11,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  32 => 5,  28 => 4,  23 => 2,  19 => 1,);
    }
}
