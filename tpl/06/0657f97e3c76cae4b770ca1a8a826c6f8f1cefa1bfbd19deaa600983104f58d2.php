<?php

/* @front/index.html */
class __TwigTemplate_2da1717d67117df8c57f214764ad714a35757ff0c95255273b250c79f6a1daeb extends Twig_Template
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
<body id=\"blog\">
<!-- nav start -->
";
        // line 7
        echo twig_include($this->env, $context, "@front/nav.html");
        echo "
<!-- nav end -->
<!-- banner start -->
<div class=\"am-g am-g-fixed blog-fixed am-u-sm-centered blog-article-margin\">
    <div data-am-widget=\"slider\" class=\"am-slider am-slider-b1\" data-am-slider='{&quot;controlNav&quot;:false}' >
    <ul class=\"am-slides\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 14
            echo "      <li>
            <img style=\"height:500px; \" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "post_origin", array()), "html", null, true);
            echo "\">
            <div class=\"blog-slider-desc am-slider-desc \">
                <div class=\"blog-text-center blog-slider-con\">
                    <h1 class=\"blog-h-margin\"><a href=\"post/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "post_title", array()), "html", null, true);
            echo "</a></h1>
                    <p class=\"blog-h-desc\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "post_desc", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t<!--<span class=\"blog-bor\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "post_date", array()), "html", null, true);
            echo "</span>-->                
                </div>
            </div>
      </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>
    </div>
</div>
<!-- banner end -->

<!-- content srart -->
<div class=\"am-g am-g-fixed blog-fixed\">
    <div class=\"am-u-md-8 am-u-sm-12\">
        <div id=\"article-container\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 35
            echo "            <article class=\"am-g blog-entry-article\">
                <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img\">
                    <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_origin", array()), "html", null, true);
            echo "\" alt=\"\" class=\"am-u-sm-12\">
                </div>
                <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text\">
                    <span> @";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "user_nickname", array()), "html", null, true);
            echo " &nbsp;</span>
                    <span>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_date", array()), "html", null, true);
            echo "</span>
                    <h1><a target=\"_blank\" href=\"post/";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_title", array()), "html", null, true);
            echo "</a></h1>
                    <p>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_desc", array()), "html", null, true);
            echo "...</p>
                    <p><a target=\"_blank\" href=\"post/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" class=\"blog-continue\">continue reading</a></p>
                </div>
            </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
        
        <ul class=\"am-pagination\">
          <li class=\"am-pagination-prev\"><a href=\"javascript:void(0);\">&laquo; Prev</a></li>
          <li class=\"am-pagination-next\"><a href=\"javascript:void(0);\">Next &raquo;</a></li>
          <li class=\"am-pagination-num\">
              Page <strong class=\"normal\" id=\"page_num\">1</strong> of <strong class=\"normal\" id=\"page_total\">";
        // line 54
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</strong>
          </li>
        </ul>
    </div>

    <div class=\"am-u-md-4 am-u-sm-12 blog-sidebar\">
        <div class=\"blog-sidebar-widget blog-bor\">
            <h2 class=\"blog-text-center blog-title\"><span>About ME</span></h2>
            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["admin_avatar"] ?? null), "html", null, true);
        echo "\" alt=\"about me\" class=\"blog-entry-img\" >
            <p>";
        // line 63
        echo twig_escape_filter($this->env, ($context["admin_name"] ?? null), "html", null, true);
        echo "</p>
            <p>";
        // line 64
        echo ($context["admin_profile"] ?? null);
        echo "</p>
        </div>
        <div class=\"blog-sidebar-widget blog-bor\">
            <h2 class=\"blog-text-center blog-title\"><span>Contact ME</span></h2>
            <p>
                <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["admin_github"] ?? null), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"am-icon-github am-icon-fw blog-icon\"></span></a>
                <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["admin_weibo"] ?? null), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"am-icon-weibo am-icon-fw blog-icon\"></span></a>
            </p>
        </div>
        <div class=\"blog-clear-margin blog-sidebar-widget blog-bor am-g \">
            <h2 class=\"blog-title\"><span>TAG cloud</span></h2>
            <div class=\"am-u-sm-12 blog-clear-padding\">
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["labels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 77
            echo "            <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["DOMAIN"] ?? null), "html", null, true);
            echo "tag/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "label", array()), "html", null, true);
            echo "\" class=\"blog-tag\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "label", array()), "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            </div>
        </div>
    </div>
</div>
<!-- content end -->


<!-- footer -->
";
        // line 87
        echo twig_include($this->env, $context, "@front/footer.html");
        echo "


<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src=\"http://libs.baidu.com/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/js/app.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@front/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 99,  221 => 98,  216 => 96,  208 => 91,  201 => 87,  191 => 79,  178 => 77,  174 => 76,  165 => 70,  161 => 69,  153 => 64,  149 => 63,  145 => 62,  134 => 54,  126 => 48,  116 => 44,  112 => 43,  106 => 42,  102 => 41,  98 => 40,  92 => 37,  88 => 35,  84 => 34,  73 => 25,  62 => 20,  58 => 19,  52 => 18,  46 => 15,  43 => 14,  39 => 13,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@front/index.html", "/Users/wangyong/www/vino-blog/templates/frontend/index.html");
    }
}
