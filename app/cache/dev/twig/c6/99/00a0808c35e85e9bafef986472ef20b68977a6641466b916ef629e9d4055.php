<?php

/* ProjectHoinhabaoBundle:Hoivien:hoivien_add.html.twig */
class __TwigTemplate_c69900a0808c35e85e9bafef986472ef20b68977a6641466b916ef629e9d4055 extends Twig_Template
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
   \t<link href=\"";
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
    <title>Thêm hội viên</title>
    <style type=\"text/css\">
        #addhoivien-button{
            font-size: 18px;
        }
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
                <div class=\"col-md-9\" style=\"border-left: 2px solid red;\">
                    
                        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "add-hoivien"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 46
            echo "                             <div class=\"alert alert-dismissable alert-success\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    \t\t\t\t\t<fieldset>
                            ";
        // line 53
        $context["currentPath"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 54
        echo "                            ";
        if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == $this->env->getExtension('routing')->getPath("project_hoinhabao_add"))) {
            // line 55
            echo "                                <legend>Thêm Hội Viên</legend>
                            ";
        } else {
            // line 57
            echo "                                <legend>Sửa Thông Tin Hội Viên</legend>
                            ";
        }
        // line 59
        echo "                            
                                
                                <div class=\"form-group\">
                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tendangnhap", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Tên Đăng Nhập"));
        echo "
                                    <div class=\"col-lg-10\">
                                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tendangnhap", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matkhau", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Mật Khẩu"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matkhau", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hoten", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Họ Tên"));
        echo "
                                    <div class=\"col-lg-10\">
                                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hoten", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ngaysinh", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Ngày Sinh"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ngaysinh", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gioitinh", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Giới Tính"));
        echo "
                                    <div class=\"col-lg-10\">
                                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gioitinh", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quequan", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Quê Quán"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quequan", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Email"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cmnd", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "CMND"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cmnd", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tieusu", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Tiểu Sử"));
        echo "
                                    <div class=\"col-lg-10\">
                                        <span class=\"help-block\">Các thông tin về tiểu sử của hội viên.</span>
                                        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tieusu", array()), 'widget');
        echo "
                                          
                                    </div>
                                </div>
                                
                               <div class=\"form-group\">
                                    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matoasoan", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Tòa Soạn"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matoasoan", array()), 'widget');
        echo "
                                    </div>
                                </div> 
                                <div style=\"color: white;\">a</div>
                                <div class=\"form-group\">
                                    ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kichhoat", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Kích Hoạt"));
        echo "
                                    <div class=\"col-lg-10\" >
                                         ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kichhoat", array()), 'widget');
        echo "
                                    </div>
                                </div>  
                              
                                

                                <div class=\"form-group\">
                                    <div class=\"col-lg-10\"></div>
                                    <div class=\"col-lg-2\">
                                        ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "create", array()), 'widget');
        echo "
                                    </div>
                                </div>
                        </fieldset>
                        ";
        // line 141
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                 
            </div>
        </div>
    </div>
 \t
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script>
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
        return "ProjectHoinhabaoBundle:Hoivien:hoivien_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 150,  289 => 149,  285 => 148,  281 => 147,  272 => 141,  265 => 137,  253 => 128,  248 => 126,  240 => 121,  235 => 119,  226 => 113,  220 => 110,  213 => 106,  208 => 104,  201 => 100,  196 => 98,  189 => 94,  184 => 92,  177 => 88,  172 => 86,  165 => 82,  160 => 80,  153 => 76,  148 => 74,  141 => 70,  136 => 68,  129 => 64,  124 => 62,  119 => 59,  115 => 57,  111 => 55,  108 => 54,  106 => 53,  100 => 51,  91 => 48,  87 => 46,  83 => 45,  75 => 39,  73 => 38,  62 => 29,  60 => 28,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
