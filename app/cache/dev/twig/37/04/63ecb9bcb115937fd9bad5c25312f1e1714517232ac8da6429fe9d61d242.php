<?php

/* ProjectHoinhabaoBundle:Tacpham:tacpham_show.html.twig */
class __TwigTemplate_370463ecb9bcb115937fd9bad5c25312f1e1714517232ac8da6429fe9d61d242 extends Twig_Template
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

    <title>Tác phẩm</title>
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
        // line 42
        echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
        echo "\">Trang Chủ</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                
                <li class=\"dropdown\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <p style=\"margin: 0px; padding: 0px;\">
                            <img class=\"row-avatar\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/images/ava.png"), "html", null, true);
        echo "\" alt=\"icon\">";
        echo twig_escape_filter($this->env, (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")), "html", null, true);
        echo "
                            <b class=\"caret\"></b>
                        </p>
                    </a>
                    <ul class=\"dropdown-menu\">
                      
                        <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_hoinhabao_show", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
        echo "\">Trang cá nhân</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
        // line 59
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
        // line 75
        $this->env->loadTemplate("ProjectHoinhabaoBundle:Hoivien:hoivien_function.html.twig")->display($context);
        // line 76
        echo "                        </div>
                        <!--end content-->
                    </div>
                </div>
                <div class=\"col-md-9 hoivien-info\" style=\"border-left: 2px solid red;\">
                   ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "edit-tacpham"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessageb"]) {
            // line 82
            echo "                         <div class=\"alert alert-dismissable alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                            ";
            // line 84
            echo twig_escape_filter($this->env, $context["flashMessageb"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessageb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                   <h3>Thông tin tác phẩm</h3>
                   <div class=\"row\">
                       <div class = \"col-md-1\">
                             <i class=\"mdi-image-filter-1\"></i>
                       </div>
                       <div class=\"col-md-2\">
                           
                            <b>Mã Tác Phẩm</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "matacpham", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class=\"mdi-social-mood\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Tên Tác Phẩm</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "tentacpham", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class='row'>
                       <div class=\"col-md-1\">
                            <i class = \"mdi-action-today\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Ngày Sáng Tác</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "NgaySangTac", array()), "Y-m-d"), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class= 'mdi-action-receipt'></i>
                       </div>
                       <div class=\"col-md-2\">
                            <b>Mô Tả</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "MoTa", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class = \"mdi-av-my-library-books\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Thể Loại</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "MaTheLoai", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class = \"mdi-social-share\"></i>
                       </div>
                       <div class=\"col-md-2\">
                            
                            <b>Liên Kết</b>
                       </div>
                       <div class=\"col-md-9\">
                            <a>";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "LienKet", array()), "html", null, true);
        echo "</a>
                       </div>
                    </div>
                    <div class=\"row\">
                       <div class=\"col-md-1\">
                            <i class = \"mdi-social-person\"></i>
                        </div>
                       <div class=\"col-md-2\">
                            
                            <b>Tác Giả</b>
                       </div>
                       <div class=\"col-md-9\">
                            ";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tacpham_item"]) ? $context["tacpham_item"] : $this->getContext($context, "tacpham_item")), "MaHV", array()), "html", null, true);
        echo "
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script>
       \$('.delete-tacpham').click(function(){
                
        if(confirm(\"Bạn thật sự muốn xóa tác phẩm này?\")){
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
        return "ProjectHoinhabaoBundle:Tacpham:tacpham_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 179,  270 => 178,  266 => 177,  262 => 176,  251 => 168,  236 => 156,  221 => 144,  206 => 132,  192 => 121,  177 => 109,  162 => 97,  150 => 87,  141 => 84,  137 => 82,  133 => 81,  126 => 76,  124 => 75,  105 => 59,  99 => 56,  88 => 50,  77 => 42,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
