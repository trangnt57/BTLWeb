<?php

/* ProjectHoinhabaoBundle:Hoivien:hoivien.html.twig */
class __TwigTemplate_4c79f794afb3025568d00d02975c4bfe9ac1e30fe174d112b2e4c4e1ee23d95e extends Twig_Template
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
        echo "dfghjkl;''
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hoivien"]) ? $context["hoivien"] : $this->getContext($context, "hoivien")));
        foreach ($context['_seq'] as $context["_key"] => $context["eachhoivien"]) {
            // line 3
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eachhoivien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Hoivien:hoivien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
