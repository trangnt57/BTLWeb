<?php

/* ProjectHoinhabaoBundle:Hoivien:hoivien_inactive_all.html.twig */
class __TwigTemplate_61b2de382f0ab00579dcbb3082ea9b811349e916f31bf4bc83d582dccd83776e extends Twig_Template
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
        // line 38
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Hội nhà báo VN</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <p style=\"margin: 0px; padding: 0px;\">
                            <img class=\"row-avatar\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/ava.png"), "html", null, true);
        echo "\" alt=\"icon\">";
        echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
        echo "
                            <b class=\"caret\"></b>
                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                      
                        <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Trang cá nhân</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 55
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
        // line 71
        $this->env->loadTemplate("ProjectHoinhabaoBundle:Hoivien:hoivien_function.html.twig")->display($context);
        // line 72
        echo "                        </div>
                        <!--end content-->
                    </div>
                    
                </div>
                <div class=\"col-md-9\" style=\"border-left: 2px solid red; text-align: center;\">
                  
                    ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "kichhoat"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 80
            echo "                        <div class=\"alert alert-dismissable alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 82
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                
                    <h3>DANH SÁCH HỘI VIÊN</h3>
                   

                     <form action=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_active");
        echo "\" method=\"post\">
                            
                    <table id=\"table-hoivien\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">

                        <thead>
                            <tr>
                                <th>Mã Hội Viên</th>
                                <th>Tên Đăng Nhập</th>
                                <th>Họ Tên</th>
                               
                                <th>Email</th>
                                <th>Kích hoạt</th>
                                ";
        // line 101
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 102
            echo "                                    <th name=\"delete\">
                                        <button type='submit'  name='deletehoivien' class=\"btn btn-primary\">
                                            Kích hoạt
                                        </button>
                                    </th>
                                ";
        }
        // line 108
        echo "                            </tr>
                        </thead>
                        <tbody>

                            ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inactive"]) ? $context["inactive"] : $this->getContext($context, "inactive")));
        foreach ($context['_seq'] as $context["_key"] => $context["eachhoivien"]) {
            // line 113
            echo "                                <tr>
                                    <td>
                                        ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "MaHV", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>
                                        ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "HoTen", array()), "html", null, true);
            echo "
                                    </td>
                                    
                                    
                                    <td>
                                        ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "Email", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 129
            if (($this->getAttribute($context["eachhoivien"], "KichHoat", array()) == 1)) {
                // line 130
                echo "                                            Kích hoạt
                                        ";
            } else {
                // line 132
                echo "                                            Chưa kích hoạt
                                        ";
            }
            // line 134
            echo "                                    </td>
                                    ";
            // line 135
            if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
                // line 136
                echo "                                        <td>
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type='checkbox' name='kichhoat[]' value='";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "Mahv", array()), "html", null, true);
                echo "'>
                                                </label>
                                            </div>
                                            
                                        </td>
                                    ";
            }
            // line 145
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eachhoivien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                            
                        </tbody>
                        
                    </table>   
                    ";
        // line 151
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 152
            echo "                        <button type='submit'  name='kichhoathoivien' class=\"btn btn-primary select-all\">
                           Kích hoạt toàn bộ
                                        
                        </button>
                    ";
        }
        // line 157
        echo "                </form>
                 
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#table-hoivien').DataTable();

            \$('.select-all').click(function(){
                 \$('input[name=\"kichhoat[]\"]').attr('checked', true);
            });
            \$('form').submit(function(){
                var atLeastOneIsChecked = \$('input[name=\"kichhoat[]\"]:checked').length;
                if(atLeastOneIsChecked == 0)
                    alert('Chưa có hội viên nào được chọn.');
                else{
                    if(confirm(\"Bạn thật sự muốn kích hoạt hội viên này?\")){

                    }else{
                        \$('input[name=\"kichhoat[]\"]').attr('checked', false);
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
        } );
    </script>

</body>

</html>








";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Hoivien:hoivien_inactive_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 167,  292 => 166,  288 => 165,  284 => 164,  280 => 163,  272 => 157,  265 => 152,  263 => 151,  257 => 147,  250 => 145,  241 => 139,  236 => 136,  234 => 135,  231 => 134,  227 => 132,  223 => 130,  221 => 129,  215 => 126,  207 => 121,  199 => 118,  193 => 115,  189 => 113,  185 => 112,  179 => 108,  171 => 102,  169 => 101,  154 => 89,  148 => 85,  139 => 82,  135 => 80,  131 => 79,  122 => 72,  120 => 71,  101 => 55,  95 => 52,  84 => 46,  73 => 38,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
