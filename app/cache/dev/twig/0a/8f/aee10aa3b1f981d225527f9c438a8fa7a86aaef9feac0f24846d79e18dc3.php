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
                                    <i class=\"mdi-social-person-add\"></i>
                                    <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_add");
        echo "\">Thêm hội viên</a>
                                </li>
                                <li>
                                    <i class=\"mdi-action-list\"></i>
                                    <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Danh sách hội viên</a>
                                </li>
                                <li>
                                    <i class=\"mdi-image-filter-none\"></i>
                                    <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_report");
        echo "\">Báo cáo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-9\" style=\"border-left: 2px solid red; text-align: center;\">
                    <h3>DANH SÁCH HỘI VIÊN</h3>
                    <div class=\"row\">
                        <div class=\"col-md-9\"></div>
                        <div class=\"col-md-3\" style=\"font-size:20px\">
                            <i class=\"mdi-social-person-add\" style=\"color:blue\"></i>
                            <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_add");
        echo "\">Thêm hội viên </a>
                        </div>
                    </div>

                    <table id=\"table-hoivien\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                         <form action=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("project_hoivien_multidelete");
        echo "\" method=\"post\">
                        <thead>
                            <tr>
                                <th>Mã Hội Viên</th>
                                <th>Tên Đăng Nhập</th>
                                <th>Họ Tên</th>
                               
                                <th>Email</th>
                                <th>CMND</th>
                                <th>
                                    <button type='submit'  name='deletehoivien' class=\"btn btn-primary\">
                                        <i class=\"mdi-action-delete\" style=\"font-size: 20px; padding-left: 3px; padding-right: 3px;\"></i>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            ";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hoivien"]) ? $context["hoivien"] : $this->getContext($context, "hoivien")));
        foreach ($context['_seq'] as $context["_key"] => $context["eachhoivien"]) {
            // line 112
            echo "                                <tr>
                                    <td>
                                        ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "MaHV", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "TenDangNhap", array()), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>
                                        ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "HoTen", array()), "html", null, true);
            echo "
                                    </td>
                                    
                                    
                                    <td>
                                        ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "Email", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "CMND", array()), "html", null, true);
            echo "
                                    </td>
                                    
                                    <td>
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type='checkbox' name='xoa[]' value='";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["eachhoivien"], "Mahv", array()), "html", null, true);
            echo "'>
                                            </label>
                                        </div>
                                        
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eachhoivien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                            
                        </tbody>
                        </form>
                    </table>   
                   
                       
                 
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 156
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
        return array (  251 => 156,  247 => 155,  243 => 154,  239 => 153,  235 => 152,  222 => 141,  209 => 134,  200 => 128,  194 => 125,  186 => 120,  178 => 117,  172 => 114,  168 => 112,  164 => 111,  143 => 93,  135 => 88,  120 => 76,  113 => 72,  106 => 68,  67 => 32,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
