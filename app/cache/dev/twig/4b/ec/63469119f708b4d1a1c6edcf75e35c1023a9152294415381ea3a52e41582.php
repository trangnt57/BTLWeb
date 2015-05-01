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
                <div class=\"col-md-9\" style=\"border-left: 2px solid red; \">
                    <h3>Thống kê</h3>
                    <ul class=\"thongke-soluong\">
                       ";
        // line 82
        $context["tongsohoivien"] = twig_length_filter($this->env, (isset($context["R_hoivien"]) ? $context["R_hoivien"] : $this->getContext($context, "R_hoivien")));
        // line 83
        echo "                        <li><b>Tổng số hội viên:</b> ";
        echo twig_escape_filter($this->env, (isset($context["tongsohoivien"]) ? $context["tongsohoivien"] : $this->getContext($context, "tongsohoivien")), "html", null, true);
        echo "</li>

                        ";
        // line 85
        $context["tongsotacpham"] = twig_length_filter($this->env, (isset($context["R_tacpham"]) ? $context["R_tacpham"] : $this->getContext($context, "R_tacpham")));
        // line 86
        echo "                        <li><b>Tổng số tác phẩm:</b> ";
        echo twig_escape_filter($this->env, (isset($context["tongsotacpham"]) ? $context["tongsotacpham"] : $this->getContext($context, "tongsotacpham")), "html", null, true);
        echo "</li>

                        ";
        // line 88
        $context["tongsogiaithuong"] = twig_length_filter($this->env, (isset($context["R_giaithuong"]) ? $context["R_giaithuong"] : $this->getContext($context, "R_giaithuong")));
        // line 89
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

                    <div class='thongketheo-toasoan row' style=\"margin-left: 10px;\">
                        <h3>Thống kê số lượng hội viên theo tòa soạn</h3>
                        <table class=\"table table-bordered\">
                            <tr>
                                <th>Tòa soạn</th>
                                <th>Số lượng</th>
                                <th>Chi tiết</th>
                            </tr>
                            ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["thongketheotoasoan"]) ? $context["thongketheotoasoan"] : $this->getContext($context, "thongketheotoasoan")));
        foreach ($context['_seq'] as $context["_key"] => $context["tk"]) {
            // line 109
            echo "                               <tr>
                                    <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["tk"], "toasoan", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["tk"], "hoivien", array())), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 113
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tk"], "hoivien", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["hoivien_iteam"]) {
                // line 114
                echo "                                             <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => $this->getAttribute($context["hoivien_iteam"], "TenDangNhap", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hoivien_iteam"], "TenDangNhap", array()), "html", null, true);
                echo "</a>
                                            <br/>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hoivien_iteam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                    </td>
                               </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/Chart.js"), "html", null, true);
        echo "\"></script>
    <script>
        var datatp = new Array();
        var datagt = new Array();
        var labelJ = new Array();
        for(var i = 0; i < ";
        // line 138
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["bieudo"]) ? $context["bieudo"] : $this->getContext($context, "bieudo"))), "html", null, true);
        echo "; i++ ){
            var bieudo = ";
        // line 139
        echo twig_jsonencode_filter((isset($context["bieudo"]) ? $context["bieudo"] : $this->getContext($context, "bieudo")));
        echo ";
        }
        for(var i = 0; i < ";
        // line 141
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
        return "ProjectHoinhabaoBundle:Hoivien:hoivien_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 141,  257 => 139,  253 => 138,  245 => 133,  241 => 132,  237 => 131,  233 => 130,  229 => 129,  225 => 128,  216 => 121,  207 => 117,  195 => 114,  191 => 113,  186 => 111,  182 => 110,  179 => 109,  175 => 108,  152 => 89,  150 => 88,  144 => 86,  142 => 85,  136 => 83,  134 => 82,  125 => 75,  123 => 74,  104 => 58,  98 => 55,  87 => 49,  76 => 41,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
