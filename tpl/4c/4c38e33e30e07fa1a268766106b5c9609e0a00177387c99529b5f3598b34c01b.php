<?php

/* @front/post.html */
class __TwigTemplate_f080cc26e9ed759abc01afcebba489e035fd74c801254d34c9564f47ab571b62 extends Twig_Template
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
<!-- content srart -->
<div class=\"am-g am-g-fixed blog-fixed blog-content\">
    <div class=\"am-u-sm-12\">
      <article class=\"am-article blog-article-p\">
        <div class=\"am-article-hd\">
          <h1 class=\"am-article-title blog-text-center\">";
        // line 14
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
          <p class=\"am-article-meta blog-text-center\">
              <span>
                  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["post_cates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 18
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
        // line 20
        echo "              </span>-
              <span>@";
        // line 21
        echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
        echo " &nbsp;</span>-
              <span>";
        // line 22
        echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
        echo "</span>
          </p>
        </div>        
        <div class=\"am-article-bd\">
            ";
        // line 26
        echo ($context["content"] ?? null);
        echo "
        </div>
      </article>
        
        <div class=\"am-g blog-article-widget blog-article-margin\">
          <div class=\"am-u-lg-4 am-u-md-5 am-u-sm-7 am-u-sm-centered blog-text-center\">
            <span class=\"am-icon-tags\"> &nbsp;</span>
              ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["labels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 34
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, ($context["DOMAIN"] ?? null), "html", null, true);
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
        // line 36
        echo "          </div>
        </div>

        <hr>
        <div class=\"am-g blog-author blog-article-margin\">
          <div class=\"am-u-sm-3 am-u-md-3 am-u-lg-2\">
            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["author_avatar"] ?? null), "html", null, true);
        echo "\" alt=\"\" class=\"blog-author-img am-circle\">
          </div>
          <div class=\"am-u-sm-9 am-u-md-9 am-u-lg-10\">
          <h3><span>作者 &nbsp;: &nbsp;</span><span class=\"blog-color\">";
        // line 45
        echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
        echo "</span></h3>
            <p>";
        // line 46
        echo twig_escape_filter($this->env, ($context["author_profile"] ?? null), "html", null, true);
        echo "</p>
          </div>
        </div>
        <ul class=\"am-pagination blog-article-margin\">
          <li class=\"am-pagination-prev\"><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["last_id"] ?? null), "html", null, true);
        echo "\" class=\"\">&laquo; ";
        echo twig_escape_filter($this->env, ($context["last_title"] ?? null), "html", null, true);
        echo "</a></li>
          <li class=\"am-pagination-next\"><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["next_id"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["next_title"] ?? null), "html", null, true);
        echo " &raquo;</a></li>
        </ul>

        <!-- UY BEGIN -->
        <div id=\"uyan_frame\"></div>
        <script type=\"text/javascript\" src=\"http://v2.uyan.cc/code/uyan.js\"></script>
        <!-- UY END -->
    </div>
</div>
<!-- content end -->

<!-- footer -->
";
        // line 63
        echo twig_include($this->env, $context, "@front/footer.html");
        echo "
<link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/default.min.css\">
<script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js\"></script>
<script>hljs.initHighlightingOnLoad();</script>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src=\"http://libs.baidu.com/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
<!-- <script src=\"assets/js/app.js\"></script> -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@front/post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 75,  166 => 73,  158 => 68,  150 => 63,  133 => 51,  127 => 50,  120 => 46,  116 => 45,  110 => 42,  102 => 36,  89 => 34,  85 => 33,  75 => 26,  68 => 22,  64 => 21,  61 => 20,  50 => 18,  46 => 17,  40 => 14,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@front/post.html", "/Users/wangyong/www/vino-blog/templates/frontend/post.html");
    }
}
