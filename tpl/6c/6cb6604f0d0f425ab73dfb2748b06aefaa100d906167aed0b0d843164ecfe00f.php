<?php

/* @admin/category.html */
class __TwigTemplate_d1b9e19bb8b683ece66dc1eeb9a3f1f15b03682f4c1d255b65e824060661b3f4 extends Twig_Template
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

    <h2 style=\"padding: 1em;\">分类目录</h2>

    <div class=\"cate\">
        <div class=\"cate left\">
            <div class=\"form-wrap\">
                <h2>添加新分类目录</h2>
                <form id=\"addtag\" class=\"validate\">
                    <div class=\"form-field form-required term-name-wrap\">
                        <label for=\"tag-name\">名称</label>
                        <input name=\"tag-name\" id=\"tag-name\" type=\"text\" data-validate=\"true\" value=\"\" size=\"40\">
                        <p>这将是它在站点上显示的名字。</p>
                    </div>
                    <div class=\"form-field term-slug-wrap\">
                        <label for=\"tag-slug\">别名</label>
                        <input name=\"slug\" id=\"tag-slug\" type=\"text\" data-validate=\"true\" value=\"\" size=\"40\">
                        <p>“别名”是在URL中使用的别称，它可以令URL更美观。通常使用小写，只能包含字母，数字和连字符（-）。</p>
                    </div>
                    <div class=\"form-field term-parent-wrap\">
                        <label for=\"parent\">父节点</label>
                        <select name=\"parent\" id=\"parent\" class=\"postform\">
                            <option value=\"-1\">无</option>
                            <!--";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "-->
                            <!--<option value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "term_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</option>-->
                            <!--";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "-->
                        </select>
                        <p>分类目录和标签不同，它可以有层级关系。您可以有一个“音乐”分类目录，在这个目录下可以有叫做“流行”和“古典”的子目录。</p>
                    </div>
                    <button id=\"js_save_btn\" type=\"button\" class=\"am-btn am-btn-success\">添加新分类目录</button>
                </form>
            </div>
        </div>
        <div class=\"cate right\">
            <div class=\"am-u-sm-12\">
                <table width=\"100%\" class=\"am-table am-table-compact am-table-striped tpl-table-black \" id=\"example-r\">
                    <thead>
                    <tr>
                        <th>名称</th>
                        <th>别名</th>
                        <th>总数</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 74
            echo "                    <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "term_id", array()), "html", null, true);
            echo "\">
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "slug", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "term_group", array()), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"tpl-table-black-operation\">
                                <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, ($context["edit_prefix"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "term_id", array()), "html", null, true);
            echo "\">
                                    <i class=\"am-icon-pencil\"></i> 编辑
                                </a>
                                <a href=\"javascript:;\" class=\"tpl-table-black-operation-del js_del_btn\">
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
        // line 90
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/css/category.css\" />
<script c=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["JS_CSS_DsrOMAIN"] ?? null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/sea.js\"></script>
<script type=\"text/javascript\">
    seajs.use('";
        // line 101
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/mblog.main',function(main){
        main.load('mblog.category');
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "@admin/category.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 101,  172 => 99,  168 => 98,  164 => 97,  155 => 90,  138 => 80,  132 => 77,  128 => 76,  124 => 75,  119 => 74,  115 => 73,  93 => 53,  83 => 52,  77 => 51,  46 => 23,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/category.html", "/Users/wangyong/www/mblog/templates/backend/category.html");
    }
}
