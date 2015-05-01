<?php

/* ProjectHoinhabaoBundle:Hoivien:hoivien_show2.html.twig */
class __TwigTemplate_2809fc096ec7a3f4b7b1069ff1423855fd138cda4bae4c3e6460e2d0275ba85e extends Twig_Template
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
        .mdi-content-add-circle-outline, .mdi-content-remove-circle-outline{
            color: blue;
        }
        .mdi-content-add-circle-outline:hover, .mdi-content-remove-circle-outline:hover{
            color: orange;
        }
        .navbar{
          background: #009587;
        }
        body{
          background-image: url(\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/newspaper.png"), "html", null, true);
        echo "\");
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
        // line 48
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Hội nhà báo VN</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <p style=\"margin: 0px; padding: 0px;\">
                            ";
        // line 56
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 57
            echo "                                <img class=\"row-avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/ava.png"), "html", null, true);
            echo "\" alt=\"icon\">";
            echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
            echo "
                            ";
        } else {
            // line 59
            echo "                                 <img class=\"row-avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/avatar.png"), "html", null, true);
            echo "\" alt=\"icon\">";
            echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
            echo "
                            ";
        }
        // line 61
        echo "                            <b class=\"caret\"></b>
                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                      
                        <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Trang cá nhân</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 69
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
                            ";
        // line 85
        $this->env->loadTemplate("ProjectHoinhabaoBundle:Hoivien:hoivien_function.html.twig")->display($context);
        // line 86
        echo "                        </div>
                        <!--end content-->
                        ";
        // line 88
        if ((((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin") || ((isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")) == $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array())))) {
            // line 89
            echo "                         <div class=\"toolbar\">
                            <legend>Đổi giao diện</legend>
                        </div>
                        <div class=\"change-template\">
                          ";
            // line 93
            $this->env->loadTemplate("ProjectHoinhabaoBundle:Template:change_template.html.twig")->display($context);
            // line 94
            echo "                        </div>
                        ";
        }
        // line 96
        echo "                    </div>
                </div>
                <div class=\"col-md-9 hoivien-info\" style=\"border-left: 2px solid red;\">
                   ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "edit-hoivien"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessageh"]) {
            // line 100
            echo "                         <div class=\"alert alert-dismissable alert-primary\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 102
            echo twig_escape_filter($this->env, $context["flashMessageh"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessageh'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                   <h3>Thông tin hội viên</h3>
                   <div class=\"row\">
                       <div class = \"col-md-1\">
                             <i class=\"mdi-image-filter-1\"></i>
                       </div>
                       <div class=\"col-md-2\">
                           
                            <b>Mã Hội viên</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 115
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
        // line 127
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
        // line 138
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
        // line 150
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
        // line 161
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
        // line 173
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
        // line 185
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
        // line 196
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
        // line 208
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
        // line 220
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
        // line 231
        if (($this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "kichhoat", array()) == 1)) {
            // line 232
            echo "                                Kích hoạt
                            ";
        } else {
            // line 234
            echo "                                Không kích hoạt
                            ";
        }
        // line 236
        echo "                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class=\"mdi-hardware-laptop-chromebook\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Tác phẩm</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 247
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["hv_tacpham"]) ? $context["hv_tacpham"] : $this->getContext($context, "hv_tacpham"))), "html", null, true);
        echo " tác phẩm
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class=\"mdi-hardware-laptop-chromebook\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Giải thưởng</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 259
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["hv_giaithuong"]) ? $context["hv_giaithuong"] : $this->getContext($context, "hv_giaithuong"))), "html", null, true);
        echo " giải thưởng
                       </div>
                    </div>
                    
                    ";
        // line 263
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 264
            echo "                      <div class=\"row\">
                        <div class=\"col-md-1\">
                          <i class=\"mdi-av-playlist-add\"></i>
                        </div>
                        <div class=\"col-md-10\">
                            
                          
                          <a href=\"";
            // line 271
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong_add", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
            echo "\">Thêm giải thưởng</a>
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-md-1\">
                          <i class=\"mdi-av-playlist-add\"></i>
                        </div>
                        <div class=\"col-md-10\">
                            
                          <a href=\"";
            // line 280
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham_add", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
            echo "\">Thêm tác phẩm</a>
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-md-1\">
                          <i class=\"mdi-content-create\"></i>
                        </div>
                        <div class=\"col-md-10\">
                            
                          <a href=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_edit", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
            echo "\">Sửa thông tin</a>
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-md-1\">
                          <i class=\"mdi-action-delete\"></i>
                        </div>
                        <div class=\"col-md-10\">
                            
                          <form action=\"";
            // line 298
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_delete", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
            echo "\" method = \"post\">
                              <a class=\"delete-hoivien\">Xóa hội viên này</a>
                          </form>
                        </div>
                      </div>
                      
                    ";
        } elseif ((        // line 304
(isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")) == $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))) {
            // line 305
            echo "                      <div class=\"row\">
                        <div class=\"col-md-1\">
                          <i class=\"mdi-content-create\"></i>
                        </div>
                        <div class=\"col-md-10\">
                            
                          <a href=\"";
            // line 311
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_edit", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
            echo "\">Sửa thông tin</a>
                        </div>
                      </div>
                    ";
        }
        // line 315
        echo "                   
                </div>
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script>
      \$('.delete-hoivien').click(function(){
                
        if(confirm(\"Bạn thật sự muốn xóa hội viên này?\")){
          var url      = window.location.href;
          url += \"/delete\";
          window.location = url;

        }else{
            location.reload();
        }
              
      });
      \$('.mdi-content-add-circle-outline').click(function(){
                \$(this).hide();
                \$(this).parent().find('.mdi-content-remove-circle-outline').show();
                var thisid = \$(this).attr('class').split(' ')[1];
                \$('#'+ thisid).show();
            });
            \$('.mdi-content-remove-circle-outline').click(function(){
                \$(this).hide();
                \$(this).parent().find('.mdi-content-add-circle-outline').show();
                var thisid = \$(this).attr('class').split(' ')[1];
                \$('#'+ thisid).hide();
            });
    </script>
</body>

</html>








";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Hoivien:hoivien_show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 324,  481 => 323,  477 => 322,  473 => 321,  465 => 315,  458 => 311,  450 => 305,  448 => 304,  439 => 298,  427 => 289,  415 => 280,  403 => 271,  394 => 264,  392 => 263,  385 => 259,  370 => 247,  357 => 236,  353 => 234,  349 => 232,  347 => 231,  333 => 220,  318 => 208,  303 => 196,  289 => 185,  274 => 173,  259 => 161,  245 => 150,  230 => 138,  216 => 127,  201 => 115,  189 => 105,  180 => 102,  176 => 100,  172 => 99,  167 => 96,  163 => 94,  161 => 93,  155 => 89,  153 => 88,  149 => 86,  147 => 85,  128 => 69,  122 => 66,  115 => 61,  107 => 59,  99 => 57,  97 => 56,  86 => 48,  66 => 31,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
