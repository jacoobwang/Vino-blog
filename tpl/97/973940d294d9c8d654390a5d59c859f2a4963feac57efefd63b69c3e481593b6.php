<?php

/* @admin/index.html */
class __TwigTemplate_31019bf02ffe129032ad3554a78b625a1b0d14503a98401085fc374bc8e3e79e extends Twig_Template
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
        <!-- header -->
        ";
        // line 3
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
        <div class=\"tpl-content-wrapper\">

            <div class=\"container-fluid am-cf\">
                <div class=\"row\">
                    <div class=\"am-u-sm-12 am-u-md-12 am-u-lg-9\">
                        <div class=\"page-header-heading\"><span class=\"am-icon-home page-header-heading-icon\"></span> Vino-blog 操作台<small>-vino</small></div>
                    </div>
                </div>

            </div>

            <div class=\"row-content am-cf\">

                <div class=\"row am-cf\">
                    <div class=\"am-u-sm-12 am-u-md-12 am-u-lg-12 widget-margin-bottom-lg \">
                        <div class=\"tpl-user-card am-text-center widget-body-lg\">
                            <div class=\"tpl-user-card-title\">
                                Vino-blog v1.0.0
                            </div>
                            <div class=\"achievement-subheading\">
                                markdown博客系统
                            </div>
                            <div class=\"achievement-description\">
                                Vino-blog v1.0.0发布了，与我联系 mail: 531532957@qq.com
                            </div>
                            <div class=\"achievement-description\">
                                欢迎使用Vino-blog，若使用过程中出现任何问题，可与我联系
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script c=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["JS_CSS_DsrOMAIN"] ?? null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/echarts.min.js\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/amazeui.datatables.min.js\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/dataTables.responsive.min.js\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/sea.js\"></script>
    <script type=\"text/javascript\">
        seajs.use('";
        // line 70
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/mblog.main',function(main){
            main.load('mblog.home');
        });
    </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "@admin/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 70,  106 => 68,  102 => 67,  98 => 66,  94 => 65,  90 => 64,  46 => 23,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/index.html", "/Users/wangyong/www/vino-blog/templates/backend/index.html");
    }
}
