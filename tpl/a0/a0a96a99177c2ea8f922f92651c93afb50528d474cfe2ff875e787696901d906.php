<?php

/* @admin/user.html */
class __TwigTemplate_d285bec863376ab9e45930705084b36c947b44c2b84cc98971a284a7d09b02c6 extends Twig_Template
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
        echo "<!-- header -->
";
        // line 2
        echo twig_include($this->env, $context, "@admin/header.html");
        echo "

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

<!-- 侧边导航栏 -->
<div class=\"left-sidebar\">
    <!-- 菜单 -->
    ";
        // line 22
        echo twig_include($this->env, $context, "@admin/nav.html");
        echo "
</div>


<!-- 内容区域 -->
<div class=\"tpl-content-wrapper\" style=\"background: #f1f1f1;\">

    <div class=\"\" style=\"margin-left: 20px;padding-top: 20px;\">
        <form class=\"am-form\">
            <fieldset>
                <legend>帐号设置</legend>

                <div class=\"am-form-group\">
                    <label>管理界面配色方案</label>
                    <div class=\"tpl-skiner-content-bar\" style=\"height: 40px;\">
                        <span class=\"skiner-color skiner-white\" data-color=\"theme-white\"></span>
                        <span class=\"skiner-color skiner-black\" data-color=\"theme-black\"></span>
                    </div>
                </div>

                <div class=\"am-form-group\">
                    <label>昵称</label>
                    <input id=\"nickname\" type=\"text\" placeholder=\"Kobe\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["nickname"] ?? null), "html", null, true);
        echo "\">
                </div>

                <div class=\"am-form-group\">
                    <label>邮件</label>
                    <input type=\"email\" id=\"email\" placeholder=\"xxxx@xx.com\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\">
                </div>

                <div class=\"am-form-group\">
                    <label>个人说明</label>
                    <textarea id=\"user_profile\" rows=\"5\" placeholder=\"分享关于您的一些信息。可能会被公开\">";
        // line 54
        echo twig_escape_filter($this->env, ($context["profile"] ?? null), "html", null, true);
        echo "</textarea>
                </div>

                <div class=\"am-form-group am-form-file\">
                    <label>个人头像</label>
                    <input type=\"text\" id=\"avatar\" placeholder=\"http:/www.xxx.com/ss.jpg\"  value=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["avatar"] ?? null), "html", null, true);
        echo "\">
                </div>

                <div class=\"am-form-group\">
                    <label>社交地址</label>
                    <p><span class=\"am-icon-github am-icon-fw blog-icon\"></span>Github<input id=\"github\" type=\"text\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["github"] ?? null), "html", null, true);
        echo "\"></p>
                    <p><span class=\"am-icon-weibo am-icon-fw blog-icon\"></span>微博<input id=\"weibo\" type=\"text\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["weibo"] ?? null), "html", null, true);
        echo "\"></p>
                </div>

                <p><button id=\"js_save_btn\" type=\"button\" class=\"am-btn am-btn-success\">更新个人资料</button></p>
            </fieldset>
        </form>

    </div>

</div>
<script c=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["JS_CSS_DsrOMAIN"] ?? null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/sea.js\"></script>
<script type=\"text/javascript\">
    seajs.use('";
        // line 78
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/mblog.main',function(main){
        main.load('mblog.user');
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "@admin/user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 78,  123 => 76,  119 => 75,  106 => 65,  102 => 64,  94 => 59,  86 => 54,  78 => 49,  70 => 44,  45 => 22,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/user.html", "/Users/wangyong/www/vino-blog/templates/backend/user.html");
    }
}
