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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hoivien"]) ? $context["hoivien"] : $this->getContext($context, "hoivien")));
        foreach ($context['_seq'] as $context["_key"] => $context["eachhoivien"]) {
            // line 2
            echo "\t<h3><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()), "html", null, true);
            echo "</a></h3>
\t<h4>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "HoTen", array()), "html", null, true);
            echo "</h4>
\t<hr/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eachhoivien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  30 => 3,  23 => 2,  19 => 1,);
    }
}
