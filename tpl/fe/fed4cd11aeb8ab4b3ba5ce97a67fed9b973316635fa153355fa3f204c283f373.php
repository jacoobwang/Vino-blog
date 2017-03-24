<?php

/* @admin/markdown-edit.html */
class __TwigTemplate_eb14c871804780ad0db69e79e6ceb958da71871b6e0448f7fe73b726fb12176f extends Twig_Template
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
        echo "        <!-- header -->
        ";
        // line 2
        echo twig_include($this->env, $context, "@admin/header.html");
        echo "

        <!-- 侧边导航栏 -->
        <div class=\"left-sidebar\">
            <!-- 菜单 -->
            ";
        // line 7
        echo twig_include($this->env, $context, "@admin/nav.html");
        echo "
        </div>


        <!-- 内容区域 -->
        <div class=\"tpl-content-wrapper\" style=\"background: #fff;padding: 10px 10px;\">
            <div class=\"row am-cf\">
                <div class=\"am-u-sm-12 am-u-md-10\">
                    <div class=\"widget-head am-cf\" style=\"border: 1px solid #ccc;\">
                        <input id=\"post_id\" type=\"hidden\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" />
                        <input id=\"post_title\" class=\"title\" type=\"text\" placeholder=\"Title\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" style=\"width: 100%;\" />
                        <div style=\"margin-top:10px;\" id=\"test-editormd\"></div>
                    </div>
                </div>

                <div class=\"am-u-sm-12 am-u-md-2\">
                    <div class=\"widget am-cf\" >
                        <div class=\"widget-head am-cf\">
                            <div class=\"widget-title am-fl\">更新</div>
                        </div>
                        <div style=\"text-align: center;margin-top: 20px;\">
                            <button id=\"js_update_btn\" type=\"button\" class=\"am-btn am-btn-default am-btn-success\">UPDATE</button>
                        </div>
                    </div>
                </div>

                <div class=\"am-u-sm-12 am-u-md-2\">
                    <div class=\"widget am-cf\" >
                        <div class=\"widget-head am-cf\">
                            <div class=\"widget-title am-fl\">分类</div>
                        </div>
                        <div class=\"widget-category\" style=\"padding: 10px;\">
                            <ul>
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 41
            echo "                                <li><input name=\"category\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "term_id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "name", array()), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"am-u-sm-12 am-u-md-2\">
                    <div class=\"widget am-cf\" >
                        <div class=\"widget-head am-cf\">
                            <div class=\"widget-title am-fl\">标签</div>
                        </div>
                        <div style=\"padding: 10px;\"><input id=\"tags\" type=\"text\" class=\"am-radius\" placeholder=\"多个标签请用英文逗号（,）分开\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "\" /></div>
                    </div>
                </div>

                <div class=\"am-u-sm-12 am-u-md-2\">
                    <div class=\"widget am-cf\" >
                        <div class=\"widget-head am-cf\">
                            <div class=\"widget-title am-fl\">缩列图</div>
                        </div>
                        <div class=\"widget-category\" style=\"padding-left: 15px;font-size: 12px;overflow: hidden\">
                            <a href=\"javascript:void(0)\" id=\"doc-prompt-toggle\">设为缩略图</a>
                            <div id=\"thumbnail_cotainer\" style=\"padding: 10px 0;padding-right:10px;\">
                                ";
        // line 65
        if ( !(null === ($context["thumb"] ?? null))) {
            // line 66
            echo "                                    <img style=\"width: 100%;height: 100%;\" src=\"";
            echo twig_escape_filter($this->env, ($context["thumb"] ?? null), "html", null, true);
            echo "\" />
                                ";
        }
        // line 68
        echo "                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <link rel=\"stylesheet\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/editor.md/css/editormd.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/css/jquery.tagsinput.css\">
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/jquery.tagsinput.js\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/editor.md/lib/raphael.min.js\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/sea.js\"></script>
        <script type=\"text/javascript\">
            seajs.use('";
        // line 83
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/mblog.main',function(main){
                main.load('mblog.markdown');
            });
        </script>
        <script>
            var post = {
                content : '";
        // line 89
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "',
                category: '";
        // line 90
        echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
        echo "'
            }
            \$('#tags').tagsInput({
                'height':'100px',
                'width' :'100%',
                'defaultText':'添加标签'
            });
        </script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "@admin/markdown-edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 90,  166 => 89,  157 => 83,  152 => 81,  148 => 80,  144 => 79,  140 => 78,  136 => 77,  132 => 76,  122 => 68,  116 => 66,  114 => 65,  99 => 53,  87 => 43,  76 => 41,  72 => 40,  46 => 17,  42 => 16,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/markdown-edit.html", "/Users/wangyong/www/mblog/templates/backend/markdown-edit.html");
    }
}
