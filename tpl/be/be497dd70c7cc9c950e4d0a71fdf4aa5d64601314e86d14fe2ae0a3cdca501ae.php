<?php

/* @admin/header.html */
class __TwigTemplate_4d6edcec10a42e7ffae2af579fcf446c3bcab8e5399a38747acb04d8015c7f6f extends Twig_Template
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
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Mblog后台管理界面</title>
    <meta name=\"description\" content=\"这是一个 index 页面\">
    <meta name=\"keywords\" content=\"index\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/favicon.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/app-icon72x72@2x.png\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Amaze UI\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/css/amazeui.min.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/css/amazeui.datatables.min.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/css/app.css\">
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>

</head>

<body data-type=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
<div class=\"am-g tpl-g\">
    <!-- 头部 -->
    <header>
        <!-- logo -->
        <div class=\"am-fl tpl-header-logo\">
            <a href=\"javascript:;\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/img/logo.png\" alt=\"\"></a>
        </div>
        <!-- 右侧内容 -->
        <div class=\"tpl-header-fluid\">
            <!-- 侧边切换 -->
            <div class=\"am-fl tpl-header-switch-button am-icon-list\">
                    <span>

                </span>
            </div>
            <!-- 搜索 -->
            <div class=\"am-fl tpl-header-navbar\">
                <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["DOMAIN"]) ? $context["DOMAIN"] : null), "html", null, true);
        echo "\" target=\"_blank\">查看我的博客</a>
            </div>
            <!-- 其它功能-->
            <div class=\"am-fr tpl-header-navbar\">
                <ul>
                    <!-- 欢迎语 -->
                    <li class=\"am-text-sm tpl-header-navbar-welcome\">
                        <a href=\"javascript:;\">欢迎你, <span>";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "</span> </a>
                    </li>

                    <!-- 退出 -->
                    <li class=\"am-text-sm\">
                        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["DOMAIN"]) ? $context["DOMAIN"] : null), "html", null, true);
        echo "admin/logout\">
                            <span class=\"am-icon-sign-out\"></span> 退出
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </header>";
    }

    public function getTemplateName()
    {
        return "@admin/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 53,  95 => 48,  85 => 41,  70 => 29,  61 => 23,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  37 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/header.html", "D:\\wamp\\www\\blog2\\templates\\backend\\header.html");
    }
}
