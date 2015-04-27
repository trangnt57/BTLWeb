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
        // line 32
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Trang Chủ</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <p style=\"margin: 0px; padding: 0px;\">
                            <img class=\"row-avatar\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/ava.png"), "html", null, true);
        echo "\" alt=\"icon\">";
        echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
        echo "
                            <b class=\"caret\"></b>
                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                      
                        <li><a href=\"\">Sửa thông tin cá nhân</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 49
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
                                ";
        // line 66
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 67
            echo "                                    <li>
                                        <i class=\"mdi-social-person-add\"></i>
                                        <a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("project_hoinhabao_add");
            echo "\">Thêm hội viên</a>
                                    </li>
                                ";
        }
        // line 72
        echo "                                <li>
                                    <i class=\"mdi-action-list\"></i>
                                    <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Danh sách hội viên</a>
                                </li>
                                ";
        // line 76
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 77
            echo "                                    <li>
                                        <i class=\"mdi-image-filter-none\"></i>
                                        <a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("project_hoinhabao_report");
            echo "\">Báo cáo</a>
                                    </li>
                                ";
        }
        // line 82
        echo "                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class=\"col-md-9\" style=\"border-left: 2px solid red; text-align: center;\">
                    <h3>DANH SÁCH HỘI VIÊN</h3>
                    <div class=\"row\">
                        <div class=\"col-md-9\"></div>
                        ";
        // line 91
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 92
            echo "                            <div class=\"col-md-3\" style=\"font-size:20px\">
                                <i class=\"mdi-social-person-add\" style=\"color:blue\"></i>
                                <a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("project_hoinhabao_add");
            echo "\">Thêm hội viên </a>
                            </div>
                        ";
        }
        // line 97
        echo "                    </div>

                     <form action=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("project_hoivien_multidelete");
        echo "\" method=\"post\">
                            
                    <table id=\"table-hoivien\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">

                        <thead>
                            <tr>
                                <th>Mã Hội Viên</th>
                                <th>Tên Đăng Nhập</th>
                                <th>Họ Tên</th>
                               
                                <th>Email</th>
                                <th>CMND</th>
                                ";
        // line 111
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 112
            echo "                                    <th name=\"delete\">
                                        xóa
                                    </th>
                                ";
        }
        // line 116
        echo "                            </tr>
                        </thead>
                        <tbody>

                            ";
        // line 120
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hoivien"]) ? $context["hoivien"] : $this->getContext($context, "hoivien")));
        foreach ($context['_seq'] as $context["_key"] => $context["eachhoivien"]) {
            // line 121
            echo "                                <tr>
                                    <td>
                                        ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "MaHV", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>
                                        ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "HoTen", array()), "html", null, true);
            echo "
                                    </td>
                                    
                                    
                                    <td>
                                        ";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "Email", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "CMND", array()), "html", null, true);
            echo "
                                    </td>
                                    ";
            // line 139
            if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
                // line 140
                echo "                                        <td>
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type='checkbox' name='xoa[]' value='";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "Mahv", array()), "html", null, true);
                echo "'>
                                                </label>
                                            </div>
                                            
                                        </td>
                                    ";
            }
            // line 149
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eachhoivien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                            
                        </tbody>
                        
                    </table>   
                    ";
        // line 155
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 156
            echo "                        <button type='submit'  name='deletehoivien' class=\"btn btn-primary\">
                            <i class=\"mdi-action-delete\" style=\"font-size: 20px; padding-left: 3px; padding-right: 3px;\"></i>
                        
                        </button>
                    ";
        }
        // line 161
        echo "                </form>
                 
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#table-hoivien').DataTable();
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
        return array (  304 => 171,  300 => 170,  296 => 169,  292 => 168,  288 => 167,  280 => 161,  273 => 156,  271 => 155,  265 => 151,  258 => 149,  249 => 143,  244 => 140,  242 => 139,  237 => 137,  231 => 134,  223 => 129,  215 => 126,  209 => 123,  205 => 121,  201 => 120,  195 => 116,  189 => 112,  187 => 111,  172 => 99,  168 => 97,  162 => 94,  158 => 92,  156 => 91,  145 => 82,  139 => 79,  135 => 77,  133 => 76,  128 => 74,  124 => 72,  118 => 69,  114 => 67,  112 => 66,  92 => 49,  78 => 40,  67 => 32,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
