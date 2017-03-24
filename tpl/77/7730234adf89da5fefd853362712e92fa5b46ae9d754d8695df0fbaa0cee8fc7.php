<?php

/* @admin/login.html */
class __TwigTemplate_72a3151e5088438a9eb8e6a410b44f356f4d7694fb0207c27adbf933af551c45 extends Twig_Template
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
    <title>Mblog 登录</title>
    <meta name=\"description\" content=\"Mblog 登录\">
    <meta name=\"keywords\" content=\"index\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/i/favicon.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/i/app-icon72x72@2x.png\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Mblog 登录\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/css/amazeui.min.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/css/amazeui.datatables.min.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/css/app.css\">
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>

</head>

<body data-type=\"login\">
    <div class=\"am-g tpl-g\">
        <!-- 风格切换 -->
        <div class=\"tpl-skiner\">
            <div class=\"tpl-skiner-toggle am-icon-cog\">
            </div>
            <div class=\"tpl-skiner-content\">
                <div class=\"tpl-skiner-content-title\">
                    选择主题
                </div>
                <div class=\"tpl-skiner-content-bar\">
                    <span class=\"skiner-color skiner-white\" data-color=\"theme-white\"></span>
                    <span class=\"skiner-color skiner-black\" data-color=\"theme-black\"></span>
                </div>
            </div>
        </div>
        <div class=\"tpl-login\">
            <div class=\"tpl-login-content\">
                <div class=\"tpl-login-logo\"></div>
                <form class=\"am-form tpl-form-line-form\" action=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["DOMAIN"] ?? null), "html", null, true);
        echo "login\">
                    <div class=\"am-form-group\">
                        <input id=\"user\" type=\"text\" class=\"tpl-form-input\" placeholder=\"请输入账号\">
                    </div>

                    <div class=\"am-form-group\">
                        <input id=\"pwd\" type=\"password\" class=\"tpl-form-input\" placeholder=\"请输入密码\">
                    </div>

                    <div class=\"am-form-group\">
                        <button type=\"button\" class=\"am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn\">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/sea.js\"></script>
    <script type=\"text/javascript\">
        seajs.use('";
        // line 61
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/mblog.main',function(main){
            main.load('mblog.login');
        });
    </script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "@admin/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 61,  103 => 59,  99 => 58,  80 => 42,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  37 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/login.html", "/Users/wangyong/www/vino-blog/templates/backend/login.html");
    }
}
