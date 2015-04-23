<?php

/* ProjectHoinhabaoBundle:Hoivien:hoivien_add.html.twig */
class __TwigTemplate_c69900a0808c35e85e9bafef986472ef20b68977a6641466b916ef629e9d4055 extends Twig_Template
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
   \t<link href=\"";
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
    <title>Thêm hội viên</title>
    <style type=\"text/css\">
        #addhoivien-button{
            font-size: 18px;
        }
        ul{
              list-style: none;
        }

    </style>

</head>

<body>
    <div class=\"navbar navbar-default\">
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
        // line 33
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Trang Chủ</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <p style=\"margin: 0px; padding: 0px;\">
                            <img class=\"row-avatar\" src=\"http://lorempixel.com/56/56/people/6\" alt=\"icon\">Admin
                            <b class=\"caret\"></b>
                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                      
                        <li><a href=\"javascript:void(0)\">Sửa thông tin cá nhân</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"javascript:void(0)\">Thoát</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"jumbotron\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"side-option\">
                        <div class=\"toolbar\">
                            <legend>Chức năng</legend>
                        </div>
                        <div class=\"content\">
                            <ul>
                                <li>
                                    <i class=\"mdi-social-person-add\"></i>
                                    <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_add");
        echo "\">Thêm hội viên</a>
                                </li>
                                <li>
                                    <i class=\"mdi-action-list\"></i>
                                    <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Danh sách hội viên</a>
                                </li>
                                <li>
                                    <i class=\"mdi-image-filter-none\"></i>
                                    <a>Báo cáo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-9\" style=\"border-left: 2px solid red;\">
                    
                   
                        ";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    \t\t\t\t\t<fieldset>
                            ";
        // line 88
        $context["currentPath"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 89
        echo "                            ";
        if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == $this->env->getExtension('routing')->getPath("project_hoinhabao_add"))) {
            // line 90
            echo "                                <legend>Thêm Hội Viên</legend>
                            ";
        } else {
            // line 92
            echo "                                <legend>Sửa Thông Tin Hội Viên</legend>
                            ";
        }
        // line 94
        echo "                            
                                
                                <div class=\"form-group\">
                                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tendangnhap", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Tên Đăng Nhập"));
        echo "
                                    <div class=\"col-lg-10\">
                                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tendangnhap", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matkhau", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Mật Khẩu"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matkhau", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hoten", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Họ Tên"));
        echo "
                                    <div class=\"col-lg-10\">
                                        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hoten", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ngaysinh", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Ngày Sinh"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ngaysinh", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gioitinh", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Giới Tính"));
        echo "
                                    <div class=\"col-lg-10\">
                                        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gioitinh", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quequan", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Quê Quán"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quequan", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Email"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cmnd", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "CMND"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cmnd", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tieusu", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Tiểu Sử"));
        echo "
                                    <div class=\"col-lg-10\">
                                        <span class=\"help-block\">Các thông tin về tiểu sử của hội viên.</span>
                                        ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tieusu", array()), 'widget');
        echo "
                                          
                                    </div>
                                </div>
                                
                               <div class=\"form-group\">
                                    ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matoasoan", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Tòa Soạn"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matoasoan", array()), 'widget');
        echo "
                                    </div>
                                </div> 
                                <div style=\"color: white;\">a</div>
                                <div class=\"form-group\">
                                    ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kichhoat", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Kích Hoạt"));
        echo "
                                    <div class=\"col-lg-10\" >
                                         ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kichhoat", array()), 'widget');
        echo "
                                    </div>
                                </div>  
                              
                                

                                <div class=\"form-group\">
                                    <div class=\"col-lg-10\"></div>
                                    <div class=\"col-lg-2\">
                                        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "create", array()), 'widget');
        echo "
                                    </div>
                                </div>
                        </fieldset>
                        ";
        // line 176
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                 
            </div>
        </div>
    </div>
 \t
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Hoivien:hoivien_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 185,  315 => 184,  311 => 183,  307 => 182,  298 => 176,  291 => 172,  279 => 163,  274 => 161,  266 => 156,  261 => 154,  252 => 148,  246 => 145,  239 => 141,  234 => 139,  227 => 135,  222 => 133,  215 => 129,  210 => 127,  203 => 123,  198 => 121,  191 => 117,  186 => 115,  179 => 111,  174 => 109,  167 => 105,  162 => 103,  155 => 99,  150 => 97,  145 => 94,  141 => 92,  137 => 90,  134 => 89,  132 => 88,  127 => 86,  111 => 73,  104 => 69,  65 => 33,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
