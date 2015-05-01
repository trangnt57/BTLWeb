<?php

/* ProjectHoinhabaoBundle:Template:header.html.twig */
class __TwigTemplate_a67e7839e4e7a9aa422daecf253e6855437230ad4fe937e95f1dc85656cafb6a extends Twig_Template
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
        echo "<div class=\"navbar navbar-default\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>
        <div class=\"navbar-collapse collapse navbar-responsive-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Hội nhà báo VN</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                
                <li class=\"dropdown\">
                   
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-target=\"#\" aria-expanded=\"true\">
                        <p style=\"margin: 0px; padding: 0px;\">
                            ";
        // line 20
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 21
            echo "                                <img class=\"row-avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/ava.png"), "html", null, true);
            echo "\" alt=\"icon\">";
            echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
            echo "
                                <b class=\"caret\"></b>
                            ";
        } else {
            // line 24
            echo "                                <img class=\"row-avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/avatar.png"), "html", null, true);
            echo "\" alt=\"icon\">";
            echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
            echo "
                                <b class=\"caret\"></b>
                            ";
        }
        // line 27
        echo "                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                      
                        <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Trang cá nhân</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("project_logout");
        echo "\">Thoát</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Template:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 34,  69 => 31,  63 => 27,  54 => 24,  45 => 21,  43 => 20,  31 => 11,  19 => 1,);
    }
}
