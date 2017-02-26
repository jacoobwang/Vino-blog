<?php

/* @admin/index.html */
class __TwigTemplate_9d42adbf495d55388668029ccd79065464a0a9c01f50256fb51f21161fe2520f extends Twig_Template
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
                        <div class=\"page-header-heading\"><span class=\"am-icon-home page-header-heading-icon\"></span> Mblog 操作台<small>-mphp</small></div>
                    </div>
                </div>

            </div>

            <div class=\"row-content am-cf\">
                <!--<div class=\"row am-cf\">
                    <div class=\"am-u-sm-12 am-u-md-8\">
                        <div class=\"widget am-cf\">
                            <div class=\"widget-head am-cf\">
                                <div class=\"widget-title am-fl\">活跃用户</div>
                                <div class=\"widget-function am-fr\">
                                    <a href=\"javascript:;\" class=\"am-icon-cog\"></a>
                                </div>
                            </div>
                            <div class=\"widget-body-md widget-body tpl-amendment-echarts am-fr\" id=\"tpl-echarts\">
                            </div>
                        </div>
                    </div>

                    <div class=\"am-u-sm-12 am-u-md-4\">
                        <div class=\"widget am-cf\">
                            <div class=\"widget-head am-cf\">
                                <div class=\"widget-title am-fl\">专用服务器负载</div>
                                <div class=\"widget-function am-fr\">
                                    <a href=\"javascript:;\" class=\"am-icon-cog\"></a>
                                </div>
                            </div>
                            <div class=\"widget-body widget-body-md am-fr\">

                                <div class=\"am-progress-title\">CPU Load <span class=\"am-fr am-progress-title-more\">28% / 100%</span></div>
                                <div class=\"am-progress\">
                                    <div class=\"am-progress-bar\" style=\"width: 15%\"></div>
                                </div>
                                <div class=\"am-progress-title\">CPU Load <span class=\"am-fr am-progress-title-more\">28% / 100%</span></div>
                                <div class=\"am-progress\">
                                    <div class=\"am-progress-bar  am-progress-bar-warning\" style=\"width: 75%\"></div>
                                </div>
                                <div class=\"am-progress-title\">CPU Load <span class=\"am-fr am-progress-title-more\">28% / 100%</span></div>
                                <div class=\"am-progress\">
                                    <div class=\"am-progress-bar am-progress-bar-danger\" style=\"width: 35%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->


                <div class=\"row am-cf\">
                    <div class=\"am-u-sm-12 am-u-md-12 am-u-lg-12 widget-margin-bottom-lg \">
                        <div class=\"tpl-user-card am-text-center widget-body-lg\">
                            <div class=\"tpl-user-card-title\">
                                Mblog v1.0.0
                            </div>
                            <div class=\"achievement-subheading\">
                                markdown博客系统
                            </div>
                            <div class=\"achievement-description\">
                                Mblog v1.0.0发布了，与我联系 mail: 531532957@qq.com
                            </div>
                            <div class=\"achievement-description\">
                                欢迎使用Mblog，若使用过程中出现任何问题，可与我联系
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script c=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DsrOMAIN"]) ? $context["JS_CSS_DsrOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/echarts.min.js\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.datatables.min.js\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/dataTables.responsive.min.js\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/sea.js\"></script>
    <script type=\"text/javascript\">
        seajs.use('";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
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
        return array (  152 => 111,  147 => 109,  143 => 108,  139 => 107,  135 => 106,  131 => 105,  46 => 23,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/index.html", "D:\\wamp\\www\\blog2\\templates\\backend\\index.html");
    }
}
