<?php

/* ProjectHoinhabaoBundle:Hoivien:hoivien_function.html.twig */
class __TwigTemplate_dae8453aabf60f9d78af91e50b6c39603490a26394c059ebe82f35f6917d9e7a extends Twig_Template
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
    
   
    
            
                <ul>
                    ";
        // line 7
        if (((isset($context["vaitro"]) ? $context["vaitro"] : $this->getContext($context, "vaitro")) == "admin")) {
            // line 8
            echo "                    <li>
                        <i class=\"mdi-content-add-circle-outline first\"></i>
                        <i class=\"mdi-content-remove-circle-outline first\" style=\"display:none\"></i>
                        Quản lý hội viên
                        <ul id=\"first\" style=\"display:none\">
                            <li>
                                <i class=\"mdi-social-person-add\"></i>
                                <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("project_hoinhabao_add");
            echo "\">Thêm hội viên</a>
                            </li>
                            <li>
                                <i class=\"mdi-action-list\"></i>
                                <a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("project_hoinhabao_homepage");
            echo "\">Danh sách hội viên <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["hoivien"]) ? $context["hoivien"] : $this->getContext($context, "hoivien"))), "html", null, true);
            echo "</span></a>
                            </li>
                            <li>
                                <i class=\"mdi-communication-dnd-on\"></i>
                                <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("project_hoinhabao_inactive");
            echo "\">Chưa kích hoạt <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["inactive"]) ? $context["inactive"] : $this->getContext($context, "inactive"))), "html", null, true);
            echo "</span></a>
                            </li>
                            <li>
                                <i class=\"mdi-action-receipt\"></i>
                                 <a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("project_tacpham_all");
            echo "\">Tác phẩm <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["toanbotacpham"]) ? $context["toanbotacpham"] : $this->getContext($context, "toanbotacpham"))), "html", null, true);
            echo "</span></a>
                            </li>
                            <li>
                                <i class=\"mdi-maps-local-florist\"></i>
                                <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("project_giaithuong_all");
            echo "\">Giải thưởng <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["toanbogiaithuong"]) ? $context["toanbogiaithuong"] : $this->getContext($context, "toanbogiaithuong"))), "html", null, true);
            echo "</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <i class=\"mdi-content-add-circle-outline second\"></i>
                        <i class=\"mdi-content-remove-circle-outline second\" style=\"display:none\"></i>
                        Tác phẩm
                        <ul id=\"second\" style=\"display:none\">
                            <li>
                                <i class=\"mdi-av-playlist-add\"></i>
                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham_add", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
            echo "\">Thêm tác phẩm</a>
                            </li>
                            <li>
                                <i class=\"mdi-action-list\"></i>
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
            echo "\">Danh sách tác phẩm <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tacpham"]) ? $context["tacpham"] : $this->getContext($context, "tacpham"))), "html", null, true);
            echo "</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <i class=\"mdi-content-add-circle-outline third\"></i>
                        <i class=\"mdi-content-remove-circle-outline third\" style=\"display:none\"></i>
                        Giải thưởng
                        <ul id=\"third\" style=\"display:none\">
                            <li>
                                <i class=\"mdi-av-playlist-add\"></i>
                                <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong_add", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
            echo "\">Thêm giải thưởng </a>
                            </li>
                            <li>
                                <i class=\"mdi-action-list\"></i>
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
            echo "\">Danh sách giải thưởng <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["giaithuong"]) ? $context["giaithuong"] : $this->getContext($context, "giaithuong"))), "html", null, true);
            echo "</span></a>

                            </li>
                        </ul>
                    </li>

                    <li>
                        <i class=\"mdi-content-add-circle-outline fourth\"></i>
                        <i class=\"mdi-content-remove-circle-outline fourth\" style=\"display:none\"></i>
                        <a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("project_hoinhabao_report");
            echo "\">Báo cáo</a>
                    </li>
                    ";
        } else {
            // line 73
            echo "                    <li>
                        <i class=\"mdi-content-add-circle-outline second\"></i>
                        <i class=\"mdi-content-remove-circle-outline second\" style=\"display:none\"></i>
                        Tác phẩm
                        <ul id=\"second\" style=\"display:none\">
                            <li>
                                <i class=\"mdi-av-playlist-add\"></i>
                                <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham_add", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
            echo "\">Thêm tác phẩm</a>
                            </li>
                            <li>
                                <i class=\"mdi-action-list\"></i>
                                <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_tacpham", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
            echo "\">Danh sách tác phẩm</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <i class=\"mdi-content-add-circle-outline third\"></i>
                        <i class=\"mdi-content-remove-circle-outline third\" style=\"display:none\"></i>
                        Giải thưởng
                        <ul id=\"third\" style=\"display:none\">
                            <li>
                                <i class=\"mdi-av-playlist-add\"></i>
                                <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong_add", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
            echo "\">Thêm giải thưởng</a>
                            </li>
                            <li>
                                <i class=\"mdi-action-list\"></i>
                                <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_giaithuong", array("tendangnhap" => (isset($context["tendangnhap"]) ? $context["tendangnhap"] : $this->getContext($context, "tendangnhap")))), "html", null, true);
            echo "\">Danh sách giải thưởng</a>

                            </li>
                        </ul>
                    </li>

                    ";
        }
        // line 106
        echo "                                
                </ul>
            
        <!--end content-->
                    
                 
         
    
    
  





";
    }

    public function getTemplateName()
    {
        return "ProjectHoinhabaoBundle:Hoivien:hoivien_function.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 106,  175 => 99,  168 => 95,  154 => 84,  147 => 80,  138 => 73,  132 => 70,  118 => 61,  111 => 57,  95 => 46,  88 => 42,  72 => 31,  63 => 27,  54 => 23,  45 => 19,  38 => 15,  29 => 8,  27 => 7,  19 => 1,);
    }
}
