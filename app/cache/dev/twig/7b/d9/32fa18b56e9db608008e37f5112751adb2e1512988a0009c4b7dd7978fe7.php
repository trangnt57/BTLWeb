<?php

/* ProjectHoinhabaoBundle:Login:login.html.twig */
class __TwigTemplate_7bd932fa18b56e9db608008e37f5112751adb2e1512988a0009c4b7dd7978fe7 extends Twig_Template
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
        echo "<html>

<head>

    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/css/ripples.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/css/material-wfont.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <title>Đăng nhập</title>

</head>

<body>
    <div class=\"navbar navbar-default\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"javascript:void(0)\">Hội Nhà Báo VN</a>
        </div>
       
    </div>
    <div class=\"container\" style=\"margin-top: 100px;\">
        <div id=\"login-area\" class=\"row col-md-5 col-md-offset-2\">
            <div class=\"well\">
                <form class=\"form-horizontal\"  method=\"POST\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("project_login");
        echo "\">
                    <fieldset>
                        <legend><b>Đăng nhập vào hệ thống</b></legend>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\">
                                <input type=\"text\" class=\"form-control\" id=\"inputUsername\" placeholder=\"Tên đăng nhập\" name=\"tendangnhap\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-lg-12\">
                                <input type=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Mật khẩu\" name=\"matkhau\">
                            </div>
                        </div>

                      
                       
                        <button type=\"submit\" class=\"btn btn-primary btn-fab btn-raised mdi-action-exit-to-app\" style=\"position: absolute; bottom: 25px; right: 25px;\"></button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 54,  94 => 53,  90 => 52,  86 => 51,  60 => 28,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
