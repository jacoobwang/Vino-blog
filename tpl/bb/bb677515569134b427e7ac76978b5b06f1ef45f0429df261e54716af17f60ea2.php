<?php

/* @admin/setting.html */
class __TwigTemplate_054695ec4a4843ea6e88d632f4850b5a306a472d015148025a97706955379f3c extends Twig_Template
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
        // line 23
        echo twig_include($this->env, $context, "@admin/nav.html");
        echo "
</div>


<!-- 内容区域 -->
<div class=\"tpl-content-wrapper\" style=\"background: #f1f1f1;\">

    <div class=\"\" style=\"margin-left: 20px;padding-top: 20px;\">
        <form class=\"am-form\">
            <fieldset>
                <legend>站点设置</legend>

                <div class=\"am-form-group\">
                    <label>站点标题</label>
                    <input name=\"title\" type=\"text\" placeholder=\"站点标题\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\">
                </div>

                <div class=\"am-form-group\">
                    <label>副标题</label>
                    <input name=\"desc\" type=\"text\" placeholder=\"用简洁的文字描述本站点。\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["desc"]) ? $context["desc"] : null), "html", null, true);
        echo "\">
                </div>

                <div class=\"am-form-group\">
                    <label>邮件</label>
                    <input name=\"email\" type=\"email\" placeholder=\"输入电子邮件\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\">
                </div>

                <div class=\"am-form-group\">
                    <label>成员资格</label>
                    &nbsp;&nbsp;&nbsp;<input type=\"radio\" name=\"register_open\" value=\"1\" checked>&nbsp;任何人都可以注册
                </div>

                <div class=\"am-form-group am-form-file\">
                    <label>站点logo</label>
                    <input name=\"logo\" type=\"text\" placeholder=\"http://localhost/blog2/templates/frontend/images/amazeui-b.png\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
        echo "\">
                </div>

                <div class=\"am-form-group am-form-file\">
                    <label>文章默认缩略图</label>
                    <input type=\"text\" name=\"thumbnail\" placeholder=\"https://placeholdit.imgix.net/~text?txtsize=33&txt=400%C3%97200&w=400&h=200\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["thumbnai"]) ? $context["thumbnai"] : null), "html", null, true);
        echo "\">
                </div>

                <div class=\"am-form-group\">
                    <label>Banner文章1</label>
                    <input type=\"text\" name=\"banner1\" placeholder=\"填写post地址\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["banner1"]) ? $context["banner1"] : null), "html", null, true);
        echo "\">
                </div>

                <div class=\"am-form-group\">
                    <label>Banner文章2</label>
                    <input type=\"text\" name=\"banner2\" placeholder=\"填写post地址\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["banner2"]) ? $context["banner2"] : null), "html", null, true);
        echo "\">
                </div>

                <div class=\"am-form-group\">
                    <label>Banner文章3</label>
                    <input type=\"text\" name=\"banner3\" placeholder=\"填写post地址\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["banner3"]) ? $context["banner3"] : null), "html", null, true);
        echo "\">
                </div>

                <div class=\"am-form-group\">
                    <label>Banner文章4</label>
                    <input type=\"text\" name=\"banner4\" placeholder=\"填写post地址\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["banner4"]) ? $context["banner4"] : null), "html", null, true);
        echo "\">
                </div>

                <p><button id=\"js_save_btn\" type=\"button\" class=\"am-btn am-btn-success\">保存变更</button></p>
            </fieldset>
        </form>

    </div>

</div>
<script c=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DsrOMAIN"]) ? $context["JS_CSS_DsrOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/sea.js\"></script>
<script type=\"text/javascript\">
    seajs.use('";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/mblog.main',function(main){
        main.load('mblog.setting');
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "@admin/setting.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 95,  149 => 93,  145 => 92,  132 => 82,  124 => 77,  116 => 72,  108 => 67,  100 => 62,  92 => 57,  79 => 47,  71 => 42,  63 => 37,  46 => 23,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/setting.html", "D:\\wamp\\www\\blog2\\templates\\backend\\setting.html");
    }
}
