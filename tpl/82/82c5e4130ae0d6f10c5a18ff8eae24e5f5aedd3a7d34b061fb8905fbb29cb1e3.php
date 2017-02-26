<?php

/* @admin/post.html */
class __TwigTemplate_1f57b56859f1ec6ea9323e3992c872e1fdd0353a92fb6e5550ccb71e6a0ffbf8 extends Twig_Template
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
        // line 24
        echo twig_include($this->env, $context, "@admin/nav.html");
        echo "
        </div>


        <!-- 内容区域 -->
        <div class=\"tpl-content-wrapper\">
            <div class=\"row-content am-cf\">
                <div class=\"row\">
                    <div class=\"am-u-sm-12 am-u-md-12 am-u-lg-12\">
                        <div class=\"widget am-cf\">
                            <div class=\"widget-head am-cf\">
                                <div class=\"widget-title  am-cf\">文章列表</div>


                            </div>
                            <div class=\"widget-body  am-fr\">

                                <div class=\"am-u-sm-12 am-u-md-6 am-u-lg-6\">
                                    <div class=\"am-form-group\">
                                        <div class=\"am-btn-toolbar\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"am-u-sm-12 am-u-md-6 am-u-lg-3\">
                                    <div class=\"am-form-group tpl-table-list-select\">
                                        <select data-am-selected=\"{btnSize: 'sm'}\">
                                            <option value=\"-1\">所有类别</option>
                                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cates"]) ? $context["cates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 52
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "term_id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "name", array()), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"am-u-sm-12 am-u-md-12 am-u-lg-3\">
                                    <div class=\"am-input-group am-input-group-sm tpl-form-border-form cl-p\">
                                        <input type=\"text\" class=\"am-form-field \">
                                        <span class=\"am-input-group-btn\">
            <button class=\"am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search\" type=\"button\"></button>
          </span>
                                    </div>
                                </div>

                                <div class=\"am-u-sm-12\">
                                    <table width=\"100%\" class=\"am-table am-table-compact am-table-striped tpl-table-black \">
                                        <thead>
                                            <tr>
                                                <th>文章缩略图</th>
                                                <th>文章标题</th>
                                                <th>作者</th>
                                                <th>时间</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"list_container\">
                                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) ? $context["datas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 79
            echo "                                            <tr class=\"gradeX\">
                                                <td>
                                                    <img src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "post_thumb", array()), "html", null, true);
            echo "\" class=\"tpl-table-line-img\" alt=\"\">
                                                </td>
                                                <td class=\"am-text-middle\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "post_title", array()), "html", null, true);
            echo "</td>
                                                <td class=\"am-text-middle\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "user_nickname", array()), "html", null, true);
            echo "</td>
                                                <td class=\"am-text-middle\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "post_date", array()), "html", null, true);
            echo "</td>
                                                <td class=\"am-text-middle\">
                                                    <div class=\"tpl-table-black-operation\">
                                                        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["edit_prefix"]) ? $context["edit_prefix"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\">
                                                            <i class=\"am-icon-pencil\"></i> 编辑
                                                        </a>
                                                        <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["del_prefix"]) ? $context["del_prefix"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" class=\"tpl-table-black-operation-del\">
                                                            <i class=\"am-icon-trash\"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"am-u-lg-12 am-cf\">

                                    <div class=\"am-fr\">
                                        <ul class=\"am-pagination tpl-pagination\">
                                            <li><a class=\"pagination-last\" href=\"javascript:void(0)\">«</a></li>
                                            <!--";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["total"]) ? $context["total"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
            echo "-->
                                            <!--<li ";
            // line 108
            if (($context["num"] == 1)) {
                echo " class=\"am-active\" ";
            }
            echo "><a style=\"cursor: default\" href=\"javascript:void(0)\">";
            echo twig_escape_filter($this->env, $context["num"], "html", null, true);
            echo "</a></li>-->
                                            <!--";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "-->
                                            <li>Page <strong id=\"page_num\">1</strong> of <strong id=\"page_total\">";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "</strong></li>
                                            <li><a class=\"pagination-next\" href=\"javascript:void(0)\">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/sea.js\"></script>
    <script type=\"text/javascript\">
        seajs.use('";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/mblog.main',function(main){
            main.load('mblog.post.list');
        });
    </script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "@admin/post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 126,  218 => 124,  214 => 123,  198 => 110,  195 => 109,  183 => 108,  177 => 107,  166 => 98,  152 => 91,  145 => 88,  139 => 85,  135 => 84,  131 => 83,  126 => 81,  122 => 79,  118 => 78,  92 => 54,  81 => 52,  77 => 51,  47 => 24,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/post.html", "D:\\wamp\\www\\blog2\\templates\\backend\\post.html");
    }
}
