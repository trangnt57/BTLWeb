<?php

/* ProjectHoinhabaoBundle:Tacpham:tacpham_show.html.twig */
class __TwigTemplate_370463ecb9bcb115937fd9bad5c25312f1e1714517232ac8da6429fe9d61d242 extends Twig_Template
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

    <title>Tác phẩm</title>
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
        // line 36
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Trang Chủ</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <p style=\"margin: 0px; padding: 0px;\">
                            <img class=\"row-avatar\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/ava.png"), "html", null, true);
        echo "\" alt=\"icon\">";
        echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
        echo "
                            <b class=\"caret\"></b>
                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                      
                        <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_edit", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Thông tin cá nhân</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("project_logout");
        echo "\">Thoát</a>
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
                                    <i class=\"mdi-image-filter-none\"></i>
                                    <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Thông tin hội viên</a>
                                </li>
                                <li>
                                    <i class=\"mdi-action-list\"></i>
                                    <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Danh sách tác phẩm</a>
                                </li>
                                <li>
                                    <i class=\"mdi-action-list\"></i>
                                    <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Danh sách giải thưởng</a>
                                </li>
                                <li>
                                    <i class=\"mdi-content-create\"></i>
                                    <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham_edit", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "matacpham" => $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "matacpham", array()))), "html", null, true);
        echo "\">Sửa thông tin tác phẩm</a>
                                </li>
                                <li>
                                    <i class=\"mdi-action-delete\"></i>
                                    <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham_delete", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "matacpham" => $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "matacpham", array()))), "html", null, true);
        echo "\">Xóa tác phẩm</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-9 hoivien-info\" style=\"border-left: 2px solid red;\">
                   <h3>Thông tin tác phẩm</h3>
                   <div class=\"row\">
                       <div class = \"col-md-1\">
                             <i class=\"mdi-image-filter-1\"></i>
                       </div>
                       <div class=\"col-md-2\">
                           
                            <b>Mã Tác Phẩm</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "matacpham", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class=\"mdi-social-mood\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Tên Tác Phẩm</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "tentacpham", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class='row'>
                       <div class=\"col-md-1\">
                            <i class = \"mdi-action-today\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Ngày Sáng Tác</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 130
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "NgaySangTac", array()), "Y-m-d"), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class= 'mdi-action-receipt'></i>
                       </div>
                       <div class=\"col-md-2\">
                            <b>Mô Tả</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "MoTa", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class = \"mdi-av-my-library-books\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Thể Loại</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "MaTheLoai", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class = \"mdi-social-share\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Liên Kết</b>
                       </div>
                       <div class=\"col-md-9\">
                            <a>";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "LienKet", array()), "html", null, true);
        echo "</a>
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class = \"mdi-social-person\"></i>
                        </div>
                       <div class=\"col-md-2\">
                            
                            <b>Tác Giả</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "MaHV", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
</body>

</html>








";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Tacpham:tacpham_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 188,  278 => 187,  274 => 186,  270 => 185,  259 => 177,  244 => 165,  229 => 153,  214 => 141,  200 => 130,  185 => 118,  170 => 106,  149 => 88,  142 => 84,  135 => 80,  128 => 76,  121 => 72,  99 => 53,  93 => 50,  82 => 44,  71 => 36,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
