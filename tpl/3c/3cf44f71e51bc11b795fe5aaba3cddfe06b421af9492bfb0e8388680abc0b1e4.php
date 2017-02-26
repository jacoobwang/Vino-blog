<?php

/* @front/category.html */
class __TwigTemplate_a4c44c605588cfacf9d2cd2393d5fea0beb7bbdc053aa02ac2ab4d97b9203383 extends Twig_Template
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


<body id=\"blog\">
<!-- nav start -->
";
        // line 7
        echo twig_include($this->env, $context, "@front/nav.html");
        echo "
<!-- nav end -->

<!-- content srart -->
<div class=\"am-g am-g-fixed blog-fixed\">
    <div class=\"am-u-md-12 am-u-sm-12\">
        <div id=\"article-container\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 15
            echo "        <article class=\"am-g blog-entry-article\">
            <div class=\"am-u-md-12 am-u-sm-12 blog-entry-text\">
                <span> @";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "user_nickname", array()), "html", null, true);
            echo " &nbsp;</span>
                <span>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_date", array()), "html", null, true);
            echo "</span>
                <h1><a target=\"_blank\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["DOMAIN"]) ? $context["DOMAIN"] : null), "html", null, true);
            echo "post/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_title", array()), "html", null, true);
            echo "</a></h1>
                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "post_desc", array()), "html", null, true);
            echo "...</p>
            </div>
        </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>

        <ul class=\"am-pagination\">
          <li class=\"am-pagination-prev\"><a href=\"javascript:void(0)\">&laquo; Prev</a></li>
          <li class=\"am-pagination-num\">
            Page <strong class=\"normal\" id=\"page_num\">1</strong> of <strong class=\"normal\" id=\"page_total\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "</strong>
          </li>
          <li class=\"am-pagination-next\"><a href=\"javascript:void(0)\">Next &raquo;</a></li>
        </ul>
    </div>

</div>
<div id=\"category_id\" style=\"display: none;\">";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["catId"]) ? $context["catId"] : null), "html", null, true);
        echo "</div>
<!-- content end -->

<!-- footer -->
";
        // line 40
        echo twig_include($this->env, $context, "@front/footer.html");
        echo "

<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src=\"http://libs.baidu.com/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/app.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@front/category.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  117 => 50,  112 => 48,  104 => 43,  98 => 40,  91 => 36,  81 => 29,  74 => 24,  64 => 20,  56 => 19,  52 => 18,  48 => 17,  44 => 15,  40 => 14,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@front/category.html", "D:\\wamp\\www\\blog2\\templates\\frontend\\category.html");
    }
}
