<?php

/* ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig */
class __TwigTemplate_d8e249be926015b29cc84d81f2038820f9827f00e60c5bfd98981a9cbb7ee2e6 extends Twig_Template
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
    <title>Giải thưởng</title>
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
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    \t\t\t\t\t<fieldset>
                            ";
        // line 48
        $context["currentPath"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 49
        echo "                            ";
        if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == $this->env->getExtension('routing')->getPath("project_giaithuong_add", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))))) {
            // line 50
            echo "                                <legend>Thêm Giải Thưởng</legend>
                            ";
        } else {
            // line 52
            echo "                                <legend>Sửa Thông Tin Giải Thưởng</legend>
                            ";
        }
        // line 54
        echo "                                <div class=\"form-group\">
                                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tengiaithuong", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Tên Giải Thưởng"));
        echo "
                                    <div class=\"col-lg-10\">
                                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tengiaithuong", array()), 'widget');
        echo "
                                    </div>
                                </div>
                              
                                
                                <div class=\"form-group\">
                                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ngaydatgiai", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Ngày Đạt Giải"));
        echo "
                                    <div class=\"col-lg-10\">
                                         ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ngaydatgiai", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                       
                               <div class=\"form-group\">
                                    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mota", array()), 'label', array("label_attr" => array("class" => "col-lg-2 control-label"), "label" => "Mô Tả"));
        echo "
                                    <div class=\"col-lg-10\">
                                         <span class=\"help-block\">Mô tả tổng quan về giải thưởng của bạn.</span>
                                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mota", array()), 'widget');
        echo "
                                    </div>
                                </div>
                               
                                <div class=\"form-group\">
                                    <div class=\"col-lg-10\"></div>
                                    <div class=\"col-lg-2\">
                                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "add", array()), 'widget');
        echo "
                                    </div>
                                </div>
                        </fieldset>
                        ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                 
            </div>
        </div>
    </div>
 \t
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/jquery-1.11.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projecthoinhabao/material/js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
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
        return "ProjectHoinhabaoBundle:Giaithuong:giaithuong_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 93,  172 => 92,  168 => 91,  164 => 90,  155 => 84,  148 => 80,  138 => 73,  132 => 70,  124 => 65,  119 => 63,  110 => 57,  105 => 55,  102 => 54,  98 => 52,  94 => 50,  91 => 49,  89 => 48,  84 => 46,  75 => 39,  73 => 38,  62 => 29,  60 => 28,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
