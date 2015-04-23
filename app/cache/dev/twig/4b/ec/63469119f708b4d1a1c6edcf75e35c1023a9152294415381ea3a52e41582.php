<?php

/* ProjectHoinhabaoBundle:Hoivien:hoivien_report.html.twig */
class __TwigTemplate_4bec63469119f708b4d1a1c6edcf75e35c1023a9152294415381ea3a52e41582 extends Twig_Template
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
        .thongke-soluong{
            font-size: 14px;
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
        // line 71
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_add");
        echo "\">Thêm hội viên</a>
                                </li>
                                <li>
                                    <i class=\"mdi-action-list\"></i>
                                    <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Danh sách hội viên</a>
                                </li>
                                <li>
                                    <i class=\"mdi-image-filter-none\"></i>
                                    <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_report");
        echo "\">Báo cáo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-9\" style=\"border-left: 2px solid red; \">
                    <h3>Thống kê</h3>
                    <ul class=\"thongke-soluong\">
                       ";
        // line 88
        $context["tongsohoivien"] = twig_length_filter($this->env, (isset($context["hoivien"]) ? $context["hoivien"] : $this->getContext($context, "hoivien")));
        // line 89
        echo "                        <li><b>Tổng số hội viên:</b> ";
        echo twig_escape_filter($this->env, (isset($context["tongsohoivien"]) ? $context["tongsohoivien"] : $this->getContext($context, "tongsohoivien")), "html", null, true);
        echo "</li>

                        ";
        // line 91
        $context["tongsotacpham"] = twig_length_filter($this->env, (isset($context["tacpham"]) ? $context["tacpham"] : $this->getContext($context, "tacpham")));
        // line 92
        echo "                        <li><b>Tổng số tác phẩm:</b> ";
        echo twig_escape_filter($this->env, (isset($context["tongsotacpham"]) ? $context["tongsotacpham"] : $this->getContext($context, "tongsotacpham")), "html", null, true);
        echo "</li>

                        ";
        // line 94
        $context["tongsogiaithuong"] = twig_length_filter($this->env, (isset($context["giaithuong"]) ? $context["giaithuong"] : $this->getContext($context, "giaithuong")));
        // line 95
        echo "                        <li><b>Tổng số giải thưởng:</b> ";
        echo twig_escape_filter($this->env, (isset($context["tongsogiaithuong"]) ? $context["tongsogiaithuong"] : $this->getContext($context, "tongsogiaithuong")), "html", null, true);
        echo "</li>
                    </ul>

                    <div class=\"bieudo\">
                        <canvas id=\"myChart\" width = \"450\" height=\"450\"></canvas> 
                        <br/><span>Biểu đồ thống kê hội viên và số lượng tác phẩm, giải thưởng</span>
                        <br/><span>Chú thích:</span>
                        <br/> <div ><b style=\"color:rgba(220,220,220,1); font-width:40px;\">_____</b>:Tác phẩm</div>
                        <br/> <div ><b style=\"color:rgba(151,187,205,1); font-width:40px;\">_____</b>:Giải thưởng</div>
                </div>
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/Chart.js"), "html", null, true);
        echo "\"></script>
    <script>
        var datatp = new Array();
        var datagt = new Array();
        var labelJ = new Array();
        for(var i = 0; i < ";
        // line 119
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["bieudo"]) ? $context["bieudo"] : $this->getContext($context, "bieudo"))), "html", null, true);
        echo "; i++ ){
            var bieudo = ";
        // line 120
        echo twig_jsonencode_filter((isset($context["bieudo"]) ? $context["bieudo"] : $this->getContext($context, "bieudo")));
        echo ";
        }
        for(var i = 0; i < ";
        // line 122
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["bieudo"]) ? $context["bieudo"] : $this->getContext($context, "bieudo"))), "html", null, true);
        echo "; i++ ){
            labelJ[i] = bieudo[i]['tendangnhap'];
            datatp[i] = bieudo[i]['tacpham'].length;
            datagt[i] = bieudo[i]['giaithuong'].length;
        }
        
        var data = {
            labels: labelJ,
            datasets: [
                {
                    label: \"Tac Pham dataset\",
                    fillColor: \"rgba(220,220,220,0.2)\",
                    strokeColor: \"rgba(220,220,220,1)\",
                    pointColor: \"rgba(220,220,220,1)\",
                    pointStrokeColor: \"#fff\",
                    pointHighlightFill: \"#fff\",
                    pointHighlightStroke: \"rgba(220,220,220,1)\",
                    data: datatp
                },
                {
                    label: \"Giai Thuong dataset\",
                    fillColor: \"rgba(151,187,205,0.2)\",
                    strokeColor: \"rgba(151,187,205,1)\",
                    pointColor: \"rgba(151,187,205,1)\",
                    pointStrokeColor: \"#fff\",
                    pointHighlightFill: \"#fff\",
                    pointHighlightStroke: \"rgba(151,187,205,1)\",
                    data: datagt
                }
            ]
        };
    var myLine = new Chart(document.getElementById(\"myChart\").getContext(\"2d\")).Line(data, {bezierCurve: true});
    </script>

</body>

</html>













";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Hoivien:hoivien_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 122,  203 => 120,  199 => 119,  191 => 114,  187 => 113,  183 => 112,  179 => 111,  175 => 110,  171 => 109,  153 => 95,  151 => 94,  145 => 92,  143 => 91,  137 => 89,  135 => 88,  123 => 79,  116 => 75,  109 => 71,  70 => 35,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
