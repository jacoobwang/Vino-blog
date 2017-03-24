<?php

/* @front/nav.html */
class __TwigTemplate_f8e881f000e7c2688d66e99efb95e403573d4dc2c6d8f653f08d545f645852a5 extends Twig_Template
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
        echo "<div style=\"background: #000;\">
    <nav class=\"am-g am-g-fixed blog-fixed blog-nav\">
        <button class=\"am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button\" data-am-collapse=\"{target: '#blog-collapse'}\" ><span class=\"am-sr-only\">导航切换</span> <span class=\"am-icon-bars\"></span></button>

        <div class=\"am-collapse am-topbar-collapse\" id=\"blog-collapse\">
            <ul class=\"am-nav am-nav-pills am-topbar-nav\">
                <li ";
        // line 7
        if ((($context["page"] ?? null) == "home")) {
            echo " class=\"am-active\" ";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, ((($context["DOMAIN"] ?? null)) ? (($context["DOMAIN"] ?? null)) : ("/")), "html", null, true);
        echo "\">首页</a></li>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 9
            echo "                <li ";
            if ((($context["page"] ?? null) == $this->getAttribute($context["cate"], "slug", array()))) {
                echo " class=\"am-active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, ($context["DOMAIN"] ?? null), "html", null, true);
            echo "/cat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </ul>
            <div class=\"am-topbar-right-link\">
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["DOMAIN"] ?? null), "html", null, true);
        echo "admin/home\"><i class=\"am-icon-home admin-link\"></i>Admin Panle</a>
            </div>
        </div>
    </nav>
</div>
<div style=\"background-color: #261414\">
    <header class=\"am-g am-g-fixed blog-fixed blog-text-center blog-header\">
        <div class=\"am-u-sm-8 am-u-sm-centered\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["logo"] ?? null), "html", null, true);
        echo "\" alt=\"Logo\"/>
            <h2 style=\"margin-top: 1em\" class=\"am-hide-sm-only\">学海无涯苦作舟，书山有路勤为径</h2>
        </div>
    </header>
</div>";
    }

    public function getTemplateName()
    {
        return "@front/nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  60 => 13,  56 => 11,  39 => 9,  35 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@front/nav.html", "/Users/wangyong/www/vino-blog/templates/frontend/nav.html");
    }
}
