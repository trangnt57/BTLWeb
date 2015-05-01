<?php

/* ProjectHoinhabaoBundle:Hoivien:login.html.twig */
class __TwigTemplate_dd8655c261ab7f8e00e174ef7869028285abbd10de70a68cc6656d733815f848 extends Twig_Template
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
        echo "
<form class=\"form-signin\" method=\"POST\" action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("project_login");
        echo "\">
\t<h2>Please sign in</h2>
\t<input type='text' name=\"tendangnhap\" placeholder=\"username\"><br/>
\t<input type=\"password\" name=\"matkhau\" placeholder=\"password\">
\t<button type=\"submit\">sign in </button>
</form>

";
        // line 9
        if (array_key_exists("name", $context)) {
            // line 10
            echo "\t<div class=\"alert-info fade in\">
\t\t<strong>hello ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Hoivien:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  34 => 10,  32 => 9,  22 => 2,  19 => 1,);
    }
}
