<?php

/* @admin/category-edit.html */
class __TwigTemplate_35f62146872107724a9f4919658a9a63ef1e03268698063c0818cc9437cc5e4b extends Twig_Template
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
        <div class=\"cate\">
            <div class=\"form-wrap\">
                <h2>编辑新分类目录</h2>
                <form id=\"addtag\" class=\"validate\">
                    <input id=\"term_id\" type=\"hidden\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["term_id"]) ? $context["term_id"] : null), "html", null, true);
        echo "\">
                    <div class=\"form-field form-required term-name-wrap\">
                        <label for=\"tag-name\">名称</label>
                        <input name=\"tag-name\" id=\"tag-name\" type=\"text\" data-validate=\"true\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" size=\"40\">
                        <p>这将是它在站点上显示的名字。</p>
                    </div>
                    <div class=\"form-field term-slug-wrap\">
                        <label for=\"tag-slug\">别名</label>
                        <input name=\"slug\" id=\"tag-slug\" type=\"text\" data-validate=\"true\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
        echo "\" size=\"40\">
                        <p>“别名”是在URL中使用的别称，它可以令URL更美观。通常使用小写，只能包含字母，数字和连字符（-）。</p>
                    </div>
                    <div class=\"form-field term-parent-wrap\">
                        <label for=\"parent\">父节点</label>
                        <select name=\"parent\" id=\"parent\" class=\"postform\">
                            <option value=\"-1\">无</option>
                        </select>
                        <p>分类目录和标签不同，它可以有层级关系。您可以有一个“音乐”分类目录，在这个目录下可以有叫做“流行”和“古典”的子目录。</p>
                    </div>
                    <button id=\"js_update_btn\" type=\"button\" class=\"am-btn am-btn-success\">更新分类目录</button>
                </form>
            </div>
        </div>
    </div>

</div>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/css/category.css\" />
<script c=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DsrOMAIN"]) ? $context["JS_CSS_DsrOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/sea.js\"></script>
<script type=\"text/javascript\">
    seajs.use('";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/mblog.main',function(main){
        main.load('mblog.category');
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "@admin/category-edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 66,  105 => 64,  101 => 63,  97 => 62,  77 => 45,  69 => 40,  63 => 37,  46 => 23,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/category-edit.html", "D:\\wamp\\www\\blog2\\templates\\backend\\category-edit.html");
    }
}
