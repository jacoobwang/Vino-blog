<?php

/* @admin/header.html */
class __TwigTemplate_c6305c376bd0a835110d5f256deed43e059dd6571e5317ef1e51356ef8b8c88c extends Twig_Template
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
    <title>后台管理界面</title>
    <meta name=\"description\" content=\"这是一个 index 页面\">
    <meta name=\"keywords\" content=\"index\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/i/app-icon72x72@2x.png\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/css/amazeui.min.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/css/amazeui.datatables.min.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/css/app.css\">
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>

</head>

<body data-type=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">
<div class=\"am-g tpl-g\">
    <!-- 头部 -->
    <header>
        <!-- logo -->
        <div class=\"am-fl tpl-header-logo\">
            <a class=\"logo-text\" href=\"javascript:;\">Vino-blog</a>
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
        // line 39
        echo twig_escape_filter($this->env, ((($context["DOMAIN"] ?? null)) ? (($context["DOMAIN"] ?? null)) : ("/")), "html", null, true);
        echo "\" target=\"_blank\">查看我的博客</a>
            </div>
            <!-- 其它功能-->
            <div class=\"am-fr tpl-header-navbar\">
                <ul>
                    <!-- 欢迎语 -->
                    <li class=\"am-text-sm tpl-header-navbar-welcome\">
                        <a href=\"javascript:;\">欢迎你, <span>";
        // line 46
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo "</span> </a>
                    </li>

                    <!-- 退出 -->
                    <li class=\"am-text-sm\">
                        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["DOMAIN"] ?? null), "html", null, true);
        echo "/admin/logout\">
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
        return array (  95 => 51,  87 => 46,  77 => 39,  56 => 21,  49 => 17,  45 => 16,  41 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/header.html", "/Users/wangyong/www/vino-blog/templates/backend/header.html");
    }
}
