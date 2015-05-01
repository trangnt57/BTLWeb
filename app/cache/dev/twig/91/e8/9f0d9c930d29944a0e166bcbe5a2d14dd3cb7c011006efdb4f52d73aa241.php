<?php

/* ProjectHoinhabaoBundle:Hoivien:hoivien_show3.html.twig */
class __TwigTemplate_91e89f0d9c930d29944a0e166bcbe5a2d14dd3cb7c011006efdb4f52d73aa241 extends Twig_Template
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

        body{
          background: white;
          width: 97%;
        }
        .hoivien-infomation{
          margin-top: 100px;
        }
        .navbar{
          background: #F68A2B;
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
        // line 53
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Hội nhà báo VN</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <p style=\"margin: 0px; padding: 0px;\">
                            ";
        // line 61
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 62
            echo "                                <img class=\"row-avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/ava.png"), "html", null, true);
            echo "\" alt=\"icon\">";
            echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
            echo "
                            ";
        } else {
            // line 64
            echo "                                 <img class=\"row-avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/avatar.png"), "html", null, true);
            echo "\" alt=\"icon\">";
            echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
            echo "
                            ";
        }
        // line 66
        echo "                            <b class=\"caret\"></b>
                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                      
                        <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Trang cá nhân</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("project_logout");
        echo "\">Thoát</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"\">
            <div class=\"row\">
                
                <div class=\"col-md-9 hoivien-info\" style=\"border-right: 2px solid red;\">
                   ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "edit-hoivien"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessageh"]) {
            // line 87
            echo "                         <div class=\"alert alert-dismissable alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 89
            echo twig_escape_filter($this->env, $context["flashMessageh"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessageh'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
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
        // line 102
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
        // line 114
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
        // line 125
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
        // line 137
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
        // line 148
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
        // line 160
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
        // line 172
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
        // line 183
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
        // line 195
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
        // line 207
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
        // line 218
        if (($this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "kichhoat", array()) == 1)) {
            // line 219
            echo "                                Kích hoạt
                            ";
        } else {
            // line 221
            echo "                                Không kích hoạt
                            ";
        }
        // line 223
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
        // line 234
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
        // line 246
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["hv_giaithuong"]) ? $context["hv_giaithuong"] : $this->getContext($context, "hv_giaithuong"))), "html", null, true);
        echo " giải thưởng
                       </div>
                    </div>
                    
                    ";
        // line 250
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 251
            echo "                      <div class=\"row\">
                        <div class=\"col-md-1\">
                          <i class=\"mdi-av-playlist-add\"></i>
                        </div>
                        <div class=\"col-md-10\">
                            
                          
                          <a href=\"";
            // line 258
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
            // line 267
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
            // line 276
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
            // line 285
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_delete", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
            echo "\" method = \"post\">
                              <a class=\"delete-hoivien\">Xóa hội viên này</a>
                          </form>
                        </div>
                      </div>
                      
                    ";
        } elseif ((        // line 291
(isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")) == $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))) {
            // line 292
            echo "                      <div class=\"row\">
                        <div class=\"col-md-1\">
                          <i class=\"mdi-content-create\"></i>
                        </div>
                        <div class=\"col-md-10\">
                            
                          <a href=\"";
            // line 298
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_edit", array("tendangnhap" => $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array()))), "html", null, true);
            echo "\">Sửa thông tin</a>
                        </div>
                      </div>
                    ";
        }
        // line 302
        echo "                   
                </div>
                <div class=\"col-md-3\">
                    <div class=\"side-option\">
                        <div class=\"toolbar\">
                            <legend>Chức năng</legend>
                        </div>
                        <div class=\"content\">
                            ";
        // line 310
        $this->env->loadTemplate("ProjectHoinhabaoBundle:Hoivien:hoivien_function.html.twig")->display($context);
        // line 311
        echo "                        </div>
                        <!--end content-->
                        ";
        // line 313
        if ((((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin") || ((isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")) == $this->getAttribute((isset($context["hoivien_item"]) ? $context["hoivien_item"] : $this->getContext($context, "hoivien_item")), "TenDangNhap", array())))) {
            // line 314
            echo "                         <div class=\"toolbar\">
                            <legend>Đổi giao diện</legend>
                        </div>
                        <div class=\"change-template\">
                          ";
            // line 318
            $this->env->loadTemplate("ProjectHoinhabaoBundle:Template:change_template.html.twig")->display($context);
            // line 319
            echo "                        </div>
                        ";
        }
        // line 321
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 330
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
        return "ProjectHoinhabaoBundle:Hoivien:hoivien_show3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 330,  484 => 329,  480 => 328,  476 => 327,  468 => 321,  464 => 319,  462 => 318,  456 => 314,  454 => 313,  450 => 311,  448 => 310,  438 => 302,  431 => 298,  423 => 292,  421 => 291,  412 => 285,  400 => 276,  388 => 267,  376 => 258,  367 => 251,  365 => 250,  358 => 246,  343 => 234,  330 => 223,  326 => 221,  322 => 219,  320 => 218,  306 => 207,  291 => 195,  276 => 183,  262 => 172,  247 => 160,  232 => 148,  218 => 137,  203 => 125,  189 => 114,  174 => 102,  162 => 92,  153 => 89,  149 => 87,  145 => 86,  130 => 74,  124 => 71,  117 => 66,  109 => 64,  101 => 62,  99 => 61,  88 => 53,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
