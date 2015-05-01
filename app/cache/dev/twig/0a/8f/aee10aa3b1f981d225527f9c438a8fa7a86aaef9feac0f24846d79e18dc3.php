<?php

/* ProjectHoinhabaoBundle:Hoivien:hoivien_show_all.html.twig */
class __TwigTemplate_0a8faee10aa3b1f981d225527f9c438a8fa7a86aaef9feac0f24846d79e18dc3 extends Twig_Template
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
    ";
        // line 28
        $this->env->loadTemplate("ProjectHoinhabaoBundle:Template:header.html.twig")->display($context);
        // line 29
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"side-option\">
                        <div class=\"toolbar\">
                            <legend>Chức năng</legend>
                        </div>
                        <div class=\"content\">
                            ";
        // line 38
        $this->env->loadTemplate("ProjectHoinhabaoBundle:Hoivien:hoivien_function.html.twig")->display($context);
        // line 39
        echo "                        </div>
                        <!--end content-->
                    </div>
                    
                </div>
                <div class=\"col-md-9\" style=\"border-left: 2px solid red; text-align: center;\">
                  
                    ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "delete-multi"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "                         <div class=\"alert alert-dismissable alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 49
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "delete-hoivien"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessageh"]) {
            // line 53
            echo "                         <div class=\"alert alert-dismissable alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 55
            echo twig_escape_filter($this->env, $context["flashMessageh"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessageh'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
                  
                    <h3>DANH SÁCH HỘI VIÊN</h3>
                    <div class=\"row\">
                        <div class=\"col-md-9\"></div>
                        ";
        // line 63
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 64
            echo "                            <div class=\"col-md-3\" style=\"font-size:20px\">
                                <i class=\"mdi-social-person-add\" style=\"color:blue\"></i>
                                <a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("project_hoinhabao_add");
            echo "\">Thêm hội viên </a>
                            </div>
                        ";
        }
        // line 69
        echo "                    </div>

                     <form action=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("project_hoivien_multidelete");
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
        // line 83
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 84
            echo "                                    <th name=\"delete\">
                                        <button type='submit'  name='deletehoivien' class=\"btn btn-primary delete-multi-hoivien\">
                                            <i class=\"mdi-action-delete\" style=\"font-size: 20px; padding-left: 3px; padding-right: 3px;\"></i>
                                        
                                        </button>
                                    </th>
                                ";
        }
        // line 91
        echo "                            </tr>
                        </thead>
                        <tbody>

                            ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hoivien"]) ? $context["hoivien"] : $this->getContext($context, "hoivien")));
        foreach ($context['_seq'] as $context["_key"] => $context["eachhoivien"]) {
            // line 96
            echo "                                <tr>
                                    <td>
                                        ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "MaHV", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>
                                        ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "HoTen", array()), "html", null, true);
            echo "
                                    </td>
                                    
                                    
                                    <td>
                                        ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "Email", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 112
            if (($this->getAttribute($context["eachhoivien"], "KichHoat", array()) == 1)) {
                // line 113
                echo "                                            Kích hoạt
                                        ";
            } else {
                // line 115
                echo "                                            Chưa kích hoạt
                                        ";
            }
            // line 117
            echo "                                    </td>
                                    ";
            // line 118
            if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
                // line 119
                echo "                                        <td>
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type='checkbox' name='xoa[]' value='";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "Mahv", array()), "html", null, true);
                echo "'>
                                                </label>
                                            </div>
                                            
                                        </td>
                                    ";
            }
            // line 128
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eachhoivien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                            
                        </tbody>
                        
                    </table>   
                    ";
        // line 134
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 135
            echo "                        <button type='submit'  name='deletehoivien' class=\"btn btn-primary select-all\">
                           Xóa Toàn Bộ
                                        
                        </button>
                    ";
        }
        // line 140
        echo "                </form>
                 
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#table-hoivien').DataTable();

            \$('.select-all').click(function(){
                 \$('input[name=\"xoa[]\"]').attr('checked', true);
            });
            \$('form').submit(function(){
                var atLeastOneIsChecked = \$('input[name=\"xoa[]\"]:checked').length;
                if(atLeastOneIsChecked == 0)
                    alert('Chưa có hội viên nào được chọn.');
                else{
                    if(confirm(\"Bạn thật sự muốn xóa hội viên này?\")){

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
        } );
    </script>

</body>

</html>








";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Hoivien:hoivien_show_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 150,  284 => 149,  280 => 148,  276 => 147,  272 => 146,  264 => 140,  257 => 135,  255 => 134,  249 => 130,  242 => 128,  233 => 122,  228 => 119,  226 => 118,  223 => 117,  219 => 115,  215 => 113,  213 => 112,  207 => 109,  199 => 104,  191 => 101,  185 => 98,  181 => 96,  177 => 95,  171 => 91,  162 => 84,  160 => 83,  145 => 71,  141 => 69,  135 => 66,  131 => 64,  129 => 63,  122 => 58,  113 => 55,  109 => 53,  104 => 52,  95 => 49,  91 => 47,  87 => 46,  78 => 39,  76 => 38,  65 => 29,  63 => 28,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
