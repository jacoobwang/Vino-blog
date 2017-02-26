<?php

/* @admin/markdown.html */
class __TwigTemplate_dd154f09864bd9f4a0976722448e765d2a54a45c3fc7f4dc57c1fe91cdbfaf8b extends Twig_Template
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
                        <input id=\"post_title\" class=\"title\" type=\"text\" placeholder=\"Title\" style=\"width: 100%;\" />
                        <div style=\"margin-top:10px;\" id=\"test-editormd\"></div>
                    </div>
                </div>

                <div class=\"am-u-sm-12 am-u-md-2\">
                    <div class=\"widget am-cf\" >
                        <div class=\"widget-head am-cf\">
                            <div class=\"widget-title am-fl\">发布</div>
                        </div>
                        <div style=\"text-align: center;margin-top: 20px;\">
                            <button id=\"js_save_btn\" type=\"button\" class=\"am-btn am-btn-default am-btn-success\">PUBLISH</button>
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cates"]) ? $context["cates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 40
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
        // line 42
        echo "                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"am-u-sm-12 am-u-md-2\">
                    <div class=\"widget am-cf\" >
                        <div class=\"widget-head am-cf\">
                            <div class=\"widget-title am-fl\">标签</div>
                        </div>
                        <div style=\"padding: 10px;\"><input id=\"tags\" type=\"text\" class=\"am-radius\" placeholder=\"多个标签请用英文逗号（,）分开\" /></div>
                    </div>
                </div>

                <div class=\"am-u-sm-12 am-u-md-2\">
                    <div class=\"widget am-cf\" >
                        <div class=\"widget-head am-cf\">
                            <div class=\"widget-title am-fl\">缩列图</div>
                        </div>
                        <div class=\"widget-category\" style=\"padding-left: 15px;font-size: 12px;overflow: hidden\">
                            <a href=\"javascript:void(0)\" id=\"doc-prompt-toggle\">设为缩略图</a>
                            <div id=\"thumbnail_cotainer\" style=\"padding: 10px 0;\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <link rel=\"stylesheet\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/editor.md/css/editormd.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/css/jquery.tagsinput.css\">
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/jquery.tagsinput.js\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/editor.md/lib/raphael.min.js\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/sea.js\"></script>
        <script type=\"text/javascript\">
            seajs.use('";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/mblog.main',function(main){
                main.load('mblog.markdown');
            });
            \$('#tags').tagsInput({
                width :'100%',
                height:'100px',
                defaultText:'添加标签'
            });
        </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "@admin/markdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 78,  131 => 76,  127 => 75,  123 => 74,  119 => 73,  115 => 72,  111 => 71,  80 => 42,  69 => 40,  65 => 39,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/markdown.html", "D:\\wamp\\www\\blog2\\templates\\backend\\markdown.html");
    }
}
