<?php

/* ProjectHoinhabaoBundle:Hoivien:hoivien_show.html.twig */
class __TwigTemplate_0fea416181397e3157adb60d513397d34afc3f958728be4458b6dc6132b20537 extends Twig_Template
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
<html>

<head>

    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/css/ripples.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/css/material-wfont.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/css/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>Hội viên</title>
    <style type=\"text/css\">
      
        ul{
            list-style: none;
        }
        .hoivien-info{
            font-size: 16px;
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
        // line 37
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
                      
                        <li><a href=\"\">Sửa thông tin cá nhân</a>
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
                                    <i class=\"mdi-action-list\"></i>
                                    <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
        echo "\">Danh sách tác phẩm</a>
                                </li>
                                <li>
                                    <i class=\"mdi-action-list\"></i>
                                    <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
        echo "\">Danh sách giải thưởng</a>
                                </li>
                                <li>
                                    <i class=\"mdi-content-create\"></i>
                                    <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_edit", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
        echo "\">Sửa thông tin cá nhân</a>
                                </li>
                                <li>
                                    <i class=\"mdi-action-delete\"></i>
                                    <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_delete", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
        echo "\">Xóa hội viên</a>
                                </li>
                            </ul>
                        </div>
                         <div class=\"toolbar\">
                            <legend>Đổi giao diện</legend>
                        </div>
                        <div class=\"change-template\">
                        ";
        // line 93
        $this->env->loadTemplate("ProjectHoinhabaoBundle:Template:change_template.html.twig")->display($context);
        // line 94
        echo "                    </div>
                    </div>
                </div>
                <div class=\"col-md-9 hoivien-info\" style=\"border-left: 2px solid red;\">
                   <h3>Thông tin hội viên</h3>
                   <div class=\"row\">
                       <div class = \"col-md-1\">
                             <i class=\"mdi-image-filter-1\"></i>
                       </div>
                       <div class=\"col-md-2\">
                           
                            <b>Mã Hội viên</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "MaHV", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class=\"mdi-social-mood\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Tên Đăng Nhập</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class=\"mdi-action-account-box\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            <b>Họ Tên</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "HoTen", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class='row'>
                       <div class=\"col-md-1\">
                            <i class = \"mdi-social-cake\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Ngày Sinh</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 143
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "NgaySinh", array()), "Y-m-d"), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class= 'mdi-social-group'></i>
                       </div>
                       <div class=\"col-md-2\">
                            <b>Giới Tính</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "GioiTinh", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class = \"mdi-social-domain\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Quê Quán</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "QueQuan", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class = \"mdi-communication-email\"></i>
                        </div>
                       <div class=\"col-md-2\">
                            
                            <b>Email</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "Email", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class=\"mdi-maps-beenhere\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            <b>CMND</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "CMND", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-1\">
                            <i class=\"mdi-action-work\"></i>
                        </div>
                       <div class=\"col-md-2\">
                            
                            <b>Tiểu Sử</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TieuSu", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class=\"mdi-hardware-laptop-chromebook\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Tòa Soạn</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "MaToaSoan", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class=\"mdi-action-done\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            <b>Kích Hoạt</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 224
        if (($this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "kichhoat", array()) == 1)) {
            // line 225
            echo "                                Kích hoạt
                            ";
        } else {
            // line 227
            echo "                                Không kích hoạt
                            ";
        }
        // line 229
        echo "                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
</body>

</html>








";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Hoivien:hoivien_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 239,  334 => 238,  330 => 237,  326 => 236,  317 => 229,  313 => 227,  309 => 225,  307 => 224,  293 => 213,  278 => 201,  263 => 189,  249 => 178,  234 => 166,  219 => 154,  205 => 143,  190 => 131,  176 => 120,  161 => 108,  145 => 94,  143 => 93,  132 => 85,  125 => 81,  118 => 77,  111 => 73,  72 => 37,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
