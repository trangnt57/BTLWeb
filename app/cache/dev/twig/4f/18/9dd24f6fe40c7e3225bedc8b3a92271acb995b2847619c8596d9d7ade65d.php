<?php

/* ProjectHoinhabaoBundle:Giaithuong:giaithuong_all.html.twig */
class __TwigTemplate_4f189dd24f6fe40c7e3225bedc8b3a92271acb995b2847619c8596d9d7ade65d extends Twig_Template
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
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/css/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>Hội viên</title>
    <style type=\"text/css\">
      
        ul{
            list-style: none;
        }
        .mdi-editor-mode-edit{
            font-size: 20px;
        }
        .mdi-content-add-circle-outline, .mdi-content-remove-circle-outline{
            color: blue;
        }
        .mdi-content-add-circle-outline:hover, .mdi-content-remove-circle-outline:hover{
            color: orange;
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
        // line 41
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Trang Chủ</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <p style=\"margin: 0px; padding: 0px;\">
                            <img class=\"row-avatar\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/ava.png"), "html", null, true);
        echo "\" alt=\"icon\">";
        echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
        echo "
                            <b class=\"caret\"></b>
                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                      
                        <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Trang cá nhân</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 58
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
        // line 74
        $this->env->loadTemplate("ProjectHoinhabaoBundle:Hoivien:hoivien_function.html.twig")->display($context);
        // line 75
        echo "                        </div>
                        <!--end content-->
                    </div>
                </div>
                <div class=\"col-md-9\" style=\"border-left: 2px solid red; text-align: center;\">
                    ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "delete-multi"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 81
            echo "                         <div class=\"alert alert-dismissable alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 83
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "add-giaithuong"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessagea"]) {
            // line 87
            echo "                         <div class=\"alert alert-dismissable alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 89
            echo twig_escape_filter($this->env, $context["flashMessagea"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessagea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "edit-giaithuong"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessageb"]) {
            // line 93
            echo "                         <div class=\"alert alert-dismissable alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 95
            echo twig_escape_filter($this->env, $context["flashMessageb"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessageb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                    <div class=\"danhsachgiaithuong\" style=\"background:\">
                        <h3>DANH SÁCH GIẢI THƯỞNG</h3>
                        <div class=\"row\">
                            <div class=\"col-md-9\"></div>
                            <div class=\"col-md-3\" style=\"font-size:20px\">
                                <i class=\"mdi-av-playlist-add\" style=\"color:blue\"></i>
                                <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong_add", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Thêm giải thưởng </a>
                            </div>
                        </div>

                        <form action=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong_multidelete", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\" method=\"post\">
                        <table id=\"table-giaithuong\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                             
                            <thead>
                                <tr>
                                    <th>Mã Giải Thưởng</th>
                                    <th>Tên Giải Thưởng</th>
                                    <th>Người Đạt Giải</th>
                                    <th name=\"delete\">
                                       <button type='submit'  name='deletetacpham' class=\"btn btn-primary delete-multi-tacpham\">
                                            <i class=\"mdi-action-delete\" style=\"font-size: 20px; padding-left: 3px; padding-right: 3px;\"></i>
                                        
                                        </button>
                                       
                                    </th>
                                    <th>
                                        Sửa
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 129
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_giaithuong"]) ? $context["all_giaithuong"] : $this->getContext($context, "all_giaithuong")));
        foreach ($context['_seq'] as $context["_key"] => $context["gt"]) {
            // line 130
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["gt"], "MaGiaiThuong", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["gt"], "TenGiaiThuong", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["gt"], "Mahv", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type='checkbox' name='xoa[]' value='";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["gt"], "MaGiaiThuong", array()), "html", null, true);
            echo "'>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong_edit", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "magiaithuong" => $this->getAttribute($context["gt"], "MaGiaiThuong", array()))), "html", null, true);
            echo "\">
                                                <i class=\"mdi-editor-mode-edit\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                
                            </tbody>
                            
                        </table>
                        <button type='submit'  name='deletehoivien' class=\"btn btn-primary select-all\">
                           Xóa Toàn Bộ
                                        
                        </button>
                        </form>   
                    </div>
                           
                 
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            
            \$('#table-giaithuong').DataTable();
        } );

        \$('.select-all').click(function(){
            \$('input[name=\"xoa[]\"]').attr('checked', true);
        });
        \$('form').submit(function(){
            var atLeastOneIsChecked = \$('input[name=\"xoa[]\"]:checked').length;
            if(atLeastOneIsChecked == 0)
                alert('Chưa có giải thưởng nào được chọn.');
            else{
                if(confirm(\"Bạn thật sự muốn xóa giải thưởng này?\")){

                }else{
                    \$('input[name=\"xoa[]\"]').attr('checked', false);
                }
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
        return "ProjectHoinhabaoBundle:Giaithuong:giaithuong_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 174,  302 => 173,  298 => 172,  294 => 171,  290 => 170,  272 => 154,  260 => 148,  252 => 143,  244 => 138,  238 => 135,  232 => 132,  228 => 130,  224 => 129,  200 => 108,  193 => 104,  185 => 98,  176 => 95,  172 => 93,  167 => 92,  158 => 89,  154 => 87,  149 => 86,  140 => 83,  136 => 81,  132 => 80,  125 => 75,  123 => 74,  104 => 58,  98 => 55,  87 => 49,  76 => 41,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
