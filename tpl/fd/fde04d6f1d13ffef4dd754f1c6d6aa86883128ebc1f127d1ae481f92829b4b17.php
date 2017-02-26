<?php

/* @front/lw-article-fullwidth.html */
class __TwigTemplate_3d60abe9600e98377b91675e532413c4bc738925ff9ed88bcac72d55bd94ad36 extends Twig_Template
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
        echo twig_include($this->env, $context, "@front/header.html");
        echo "

<!-- body -->
<body id=\"blog-article-sidebar\">
<!-- nav start -->
";
        // line 7
        echo twig_include($this->env, $context, "@front/nav.html");
        echo "
<!-- nav end -->
<hr>
<!-- content srart -->
<div class=\"am-g am-g-fixed blog-fixed blog-content\">
    <div class=\"am-u-sm-12\">
      <article class=\"am-article blog-article-p\">
        <div class=\"am-article-hd\">
          <h1 class=\"am-article-title blog-text-center\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
          <p class=\"am-article-meta blog-text-center\">
              <span>
                  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post_cates"]) ? $context["post_cates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 19
            echo "                  <a href=\"../cat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "slug", array()), "html", null, true);
            echo "\" class=\"blog-color\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "name", array()), "html", null, true);
            echo " &nbsp;</a>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "              </span>-
              <span>@";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true);
        echo " &nbsp;</span>-
              <span>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
        echo "</span>
          </p>
        </div>        
        <div class=\"am-article-bd\">
            ";
        // line 27
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
      </article>
        
        <div class=\"am-g blog-article-widget blog-article-margin\">
          <div class=\"am-u-lg-4 am-u-md-5 am-u-sm-7 am-u-sm-centered blog-text-center\">
            <span class=\"am-icon-tags\"> &nbsp;</span>
              ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 35
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["DOMAIN"]) ? $context["DOMAIN"] : null), "html", null, true);
            echo "tag/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "label", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "label", array()), "html", null, true);
            echo "</a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            <hr>
              <a href=\"\"><span class=\"am-icon-github am-icon-fw blog-icon\"></span></a>
              <a href=\"\"><span class=\"am-icon-weibo am-icon-fw blog-icon\"></span></a>
              <a href=\"\"><span class=\"am-icon-weixin am-icon-fw blog-icon\"></span></a>
          </div>
        </div>

        <hr>
        <div class=\"am-g blog-author blog-article-margin\">
          <div class=\"am-u-sm-3 am-u-md-3 am-u-lg-2\">
            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["author_avatar"]) ? $context["author_avatar"] : null), "html", null, true);
        echo "\" alt=\"\" class=\"blog-author-img am-circle\">
          </div>
          <div class=\"am-u-sm-9 am-u-md-9 am-u-lg-10\">
          <h3><span>作者 &nbsp;: &nbsp;</span><span class=\"blog-color\">";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true);
        echo "</span></h3>
            <p>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["author_profile"]) ? $context["author_profile"] : null), "html", null, true);
        echo "</p>
          </div>
        </div>
        <!--<ul class=\"am-pagination blog-article-margin\">-->
          <!--<li class=\"am-pagination-prev\"><a href=\"#\" class=\"\">&laquo; 一切的回顾</a></li>-->
          <!--<li class=\"am-pagination-next\"><a href=\"\">不远的未来 &raquo;</a></li>-->
        <!--</ul>-->
        
        <hr>

        <form class=\"am-form am-g\">
            <h3 class=\"blog-comment\">评论</h3>
          <fieldset>
            <div class=\"am-form-group am-u-sm-4 blog-clear-left\">
              <input type=\"text\" class=\"\" placeholder=\"名字\">
            </div>
            <div class=\"am-form-group am-u-sm-4\">
              <input type=\"email\" class=\"\" placeholder=\"邮箱\">
            </div>

            <div class=\"am-form-group am-u-sm-4 blog-clear-right\">
              <input type=\"password\" class=\"\" placeholder=\"网站\">
            </div>
        
            <div class=\"am-form-group\">
              <textarea class=\"\" rows=\"5\" placeholder=\"一字千金\"></textarea>
            </div>
        
            <p><button type=\"submit\" class=\"am-btn am-btn-default\">发表评论</button></p>
          </fieldset>
        </form>

        <hr>
    </div>
</div>
<!-- content end -->

<!-- footer -->
";
        // line 89
        echo twig_include($this->env, $context, "@front/footer.html");
        echo "

<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src=\"http://libs.baidu.com/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
<!-- <script src=\"assets/js/app.js\"></script> -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@front/lw-article-fullwidth.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 99,  180 => 97,  172 => 92,  166 => 89,  125 => 51,  121 => 50,  115 => 47,  103 => 37,  90 => 35,  86 => 34,  76 => 27,  69 => 23,  65 => 22,  62 => 21,  51 => 19,  47 => 18,  41 => 15,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@front/lw-article-fullwidth.html", "D:\\wamp\\www\\blog2\\templates\\frontend\\lw-article-fullwidth.html");
    }
}
