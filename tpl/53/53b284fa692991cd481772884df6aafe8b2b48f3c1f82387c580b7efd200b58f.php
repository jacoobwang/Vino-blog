<?php

/* register.html */
class __TwigTemplate_6cd17c77dbc3a203b384ec950c5d290074656adb40dc9fbeb7caabde9bc7d99a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>vino-注册页面测试</title>
    <!--用百度的静态资源库的cdn安装bootstrap环境-->
    <!-- Bootstrap 核心 CSS 文件 -->
    <link href=\"http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!--font-awesome 核心我CSS 文件-->
    <link href=\"//cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- 在bootstrap.min.js 之前引入 -->
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "/js/jquery.min.js\"></script>
    <script src=\"http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js\"></script>
    <!-- Bootstrap 核心 JavaScript 文件 -->
    <script src=\"http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
    <style type=\"text/css\">
        body{background: #ccc;}
        .form{background: rgba(255,255,255,0.2);width:400px;margin:100px auto;}
        #login_form{display: block;}
        #register_form{display: none;}
        .fa{display: inline-block;top: 27px;left: 6px;position: relative;color: #ccc;}
        input[type=\"text\"],input[type=\"password\"]{padding-left:26px;}
        .checkbox{padding-left:21px;}
    </style>
</head>
<body>
<!--
    基础知识：
    网格系统:通过行和列布局
    行必须放在container内
    手机用col-xs-*
    平板用col-sm-*
    笔记本或普通台式电脑用col-md-*
    大型设备台式电脑用col-lg-*
    为了兼容多个设备，可以用多个col-*-*来控制；
-->
<div class=\"container\">
    <div class=\"form row\">
        <form class=\"form-horizontal col-sm-offset-3 col-md-offset-3\" id=\"login_form\">
            <h3 class=\"form-title\">Login to your account</h3>
            <div class=\"col-sm-9 col-md-9\">
                <div class=\"form-group\">
                    <i class=\"fa fa-user fa-lg\"></i>
                    <input class=\"form-control required\" type=\"text\" placeholder=\"Username\" name=\"username\" autofocus=\"autofocus\" maxlength=\"20\"/>
                </div>
                <div class=\"form-group\">
                    <i class=\"fa fa-lock fa-lg\"></i>
                    <input class=\"form-control required\" type=\"password\" placeholder=\"Password\" name=\"password\"/>
                </div>
                <div class=\"form-group\">
                    <label class=\"checkbox\">
                        <input type=\"checkbox\" name=\"remember\" value=\"1\"/> Remember me
                    </label>
                    <hr />
                    <a href=\"javascript:;\" id=\"register_btn\" class=\"\">Create an account</a>
                </div>
                <div class=\"form-group\">
                    <input type=\"submit\" class=\"btn btn-success pull-right\" value=\"Login \"/>
                </div>
            </div>
        </form>
    </div>

    <div class=\"form row\">
        <form class=\"form-horizontal col-sm-offset-3 col-md-offset-3\" id=\"register_form\">
            <h3 class=\"form-title\">Sign up your account</h3>
            <div class=\"col-sm-9 col-md-9\">
                <div class=\"form-group\">
                    <i class=\"fa fa-user fa-lg\"></i>
                    <input class=\"form-control required\" type=\"text\" placeholder=\"Username\" name=\"reg_username\" autofocus=\"autofocus\"/>
                </div>
                <div class=\"form-group\">
                    <i class=\"fa fa-lock fa-lg\"></i>
                    <input class=\"form-control required\" type=\"password\" placeholder=\"Password\" id=\"register_password\" name=\"reg_password\"/>
                </div>
                <div class=\"form-group\">
                    <i class=\"fa fa-check fa-lg\"></i>
                    <input class=\"form-control required\" type=\"password\" placeholder=\"Re-type Your Password\" name=\"reg_rpassword\"/>
                </div>
                <div class=\"form-group\">
                    <i class=\"fa fa-envelope fa-lg\"></i>
                    <input class=\"form-control eamil\" type=\"text\" placeholder=\"Email\" name=\"reg_email\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"submit\" class=\"btn btn-success pull-right\" id=\"js_sign_up\" value=\"Sign Up \"/>
                    <input type=\"button\" class=\"btn btn-info pull-left\" id=\"back_btn\" value=\"Back\"/>
                </div>
            </div>
        </form>
    </div>
</div>
<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "/js/reg.js\" ></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 92,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "register.html", "/Users/wangyong/www/vino/templates/register.html");
    }
}
