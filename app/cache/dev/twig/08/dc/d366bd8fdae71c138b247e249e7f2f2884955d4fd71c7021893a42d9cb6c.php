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
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tacpham"]) ? $context["tacpham"] : $this->getContext($context, "tacpham")));
        foreach ($context['_seq'] as $context["_key"] => $context["tp"]) {
            // line 3
            echo "\t<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "TenTacPham", array()), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "MoTa", array()), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tp"], "NgaySangTac", array()), "Y-m-d"), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "MaTheLoai", array()), "html", null, true);
            echo "</h3>
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
<hr/>
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["giaithuong"]) ? $context["giaithuong"] : $this->getContext($context, "giaithuong")));
        foreach ($context['_seq'] as $context["_key"] => $context["gt"]) {
            // line 12
            echo "\t<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gt"], "TenGiaiThuong", array()), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["gt"], "NgayDatGiai", array()), "Y-m-d"), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["gt"], "MaTacPham", array()), "html", null, true);
            echo "</h3>
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  66 => 14,  62 => 13,  57 => 12,  53 => 11,  49 => 9,  40 => 6,  36 => 5,  32 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
