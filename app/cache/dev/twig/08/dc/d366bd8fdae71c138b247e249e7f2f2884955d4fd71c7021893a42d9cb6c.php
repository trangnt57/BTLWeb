<?php

/* ProjectHoinhabaoBundle:Tacpham:tacpham_show_all.html.twig */
class __TwigTemplate_08dcd366bd8fdae71c138b247e249e7f2f2884955d4fd71c7021893a42d9cb6c extends Twig_Template
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

    <title>Tác phẩm</title>
    <style type=\"text/css\">
      
        ul{
            list-style: none;
        }
        .mdi-action-launch, .mdi-editor-mode-edit{
            font-size: 20px;
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
        // line 35
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Trang Chủ</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <p style=\"margin: 0px; padding: 0px;\">
                            <img class=\"row-avatar\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/ava.png"), "html", null, true);
        echo "\" alt=\"icon\">";
        echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
        echo "
                            <b class=\"caret\"></b>
                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                      
                        <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_edit", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Sửa thông tin cá nhân</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 52
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
                                    <i class=\"mdi-av-playlist-add\"></i>
                                    <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong_add", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Thêm giải thưởng</a>
                                </li>
                                <li>
                                    <i class=\"mdi-av-playlist-add\"></i>
                                    <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham_add", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Thêm tác phẩm</a>
                                </li>
                                <li>
                                    <i class=\"mdi-action-list\"></i>
                                    <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Danh sách tác phẩm</a>
                                </li>
                                <li>
                                    <i class=\"mdi-action-list\"></i>
                                    <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Danh sách giải thưởng</a>
                                </li>
                                <li>
                                    <i class=\"mdi-image-filter-none\"></i>
                                    <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Thông tin hội viên</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-9\" style=\"border-left: 2px solid red; text-align: center;\">
                    <div class=\"danhsachtacpham\">
                        <h3>DANH SÁCH TÁC PHẨM</h3>
                        <div class=\"row\">
                            <div class=\"col-md-9\"></div>
                            <div class=\"col-md-3\" style=\"font-size:20px\">
                                <i class=\"mdi-av-playlist-add\" style=\"color:blue\"></i>
                                <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham_add", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Thêm tác phẩm </a>
                            </div>
                        </div>
                        <form action=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham_multidelete", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\" method=\"post\">
                        <table id=\"table-tacpham\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                             
                            <thead>
                                <tr>
                                    <th>Mã Tác Phẩm</th>
                                    <th>Tên Tác Phẩm</th>
                                    <th>Thể Loại</th>
                                    <th>Chi Tiết</th>
                                    <th name = \"delete\">
                                        Xóa
                                        
                                    </th>
                                    <th>
                                        Sửa
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                               ";
        // line 123
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tacpham"]) ? $context["tacpham"] : $this->getContext($context, "tacpham")));
        foreach ($context['_seq'] as $context["_key"] => $context["tp"]) {
            // line 124
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham_show", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "matacpham" => $this->getAttribute($context["tp"], "MaTacPham", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "MaTacPham", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "TenTacPham", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "MaTheLoai", array()), "html", null, true);
            echo "</td>
                                        <td><a href='";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "LienKet", array()), "html", null, true);
            echo "' target=\"_blank\"><i class=\"mdi-action-launch\"></i></a></td>
                                        <td>
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type='checkbox' name='xoa[]' value='";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["tp"], "MaTacPham", array()), "html", null, true);
            echo "'>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham_edit", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "matacpham" => $this->getAttribute($context["tp"], "MaTacPham", array()))), "html", null, true);
            echo "\">
                                                <i class=\"mdi-editor-mode-edit\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                
                            </tbody>
                            
                        </table>
                        <button type='submit'  name='deletetacpham' class=\"btn btn-primary\">
                            <i class=\"mdi-action-delete\" style=\"font-size: 20px; padding-left: 3px; padding-right: 3px;\"></i>
                        </button>
                        </form>
                    </div>   
                    
                 
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#table-tacpham').DataTable();
        });
    </script>

</body>

</html>















";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Tacpham:tacpham_show_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 162,  270 => 161,  266 => 160,  262 => 159,  258 => 158,  241 => 143,  229 => 137,  221 => 132,  214 => 128,  210 => 127,  206 => 126,  200 => 125,  197 => 124,  193 => 123,  170 => 103,  164 => 100,  148 => 87,  141 => 83,  134 => 79,  127 => 75,  120 => 71,  98 => 52,  92 => 49,  81 => 43,  70 => 35,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
