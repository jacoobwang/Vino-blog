<?php

/* @admin/nav.html */
class __TwigTemplate_dd028695390f10fc908383f0c032433072a9f3cc938485cbb9371b370205222e extends Twig_Template
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
        echo "<!-- 用户信息 -->
<div class=\"tpl-sidebar-user-panel\">
    <div class=\"tpl-user-panel-slide-toggleable\">
        <div class=\"tpl-user-panel-profile-picture\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["JS_CSS_DOMAIN"] ?? null), "html", null, true);
        echo "assets/img/user01.png\" alt=\"\">
        </div>
                    <span class=\"user-panel-logged-in-text\">
              <i class=\"am-icon-circle-o am-text-success tpl-user-panel-status-icon\"></i>
              Jacoob
          </span>
    </div>
</div>

<ul class=\"sidebar-nav\">
    <li class=\"sidebar-nav-link\">
        <a ";
        // line 16
        if ((($context["page"] ?? null) == "home")) {
            echo " class=\"active\" ";
        }
        echo " href=\"/mblog/admin/home\">
            <i class=\"am-icon-home sidebar-nav-link-logo\"></i> Home
        </a>
    </li>
    <li class=\"sidebar-nav-link\">
        <a ";
        // line 21
        if ((($context["page"] ?? null) == "new")) {
            echo " class=\"active\" ";
        }
        echo " href=\"/mblog/admin/new-post\">
            <i class=\"am-icon-pencil sidebar-nav-link-logo\"></i> New Post
        </a>
    </li>
    <li class=\"sidebar-nav-link\">
        <a ";
        // line 26
        if ((($context["page"] ?? null) == "post")) {
            echo " class=\"active\" ";
        }
        echo " href=\"/mblog/admin/post\">
            <i class=\"am-icon-wpforms sidebar-nav-link-logo\"></i> Posts
        </a>
    </li>
    <li class=\"sidebar-nav-link\">
        <a ";
        // line 31
        if ((($context["page"] ?? null) == "category")) {
            echo " class=\"active\" ";
        }
        echo " href=\"/mblog/admin/category\">
            <i class=\"am-icon-list-alt sidebar-nav-link-logo\"></i> Category
        </a>
    </li>
    <li class=\"sidebar-nav-link\">
        <a ";
        // line 36
        if ((($context["page"] ?? null) == "setting")) {
            echo " class=\"active\" ";
        }
        echo " href=\"/mblog/admin/setting\">
        <i class=\"am-icon-cog sidebar-nav-link-logo\"></i> Setting
        </a>
    </li>
    <li class=\"sidebar-nav-link\">
        <a ";
        // line 41
        if ((($context["page"] ?? null) == "user")) {
            echo " class=\"active\" ";
        }
        echo " href=\"/mblog/admin/user\">
        <i class=\"am-icon-user sidebar-nav-link-logo\"></i> User
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "@admin/nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 41,  79 => 36,  69 => 31,  59 => 26,  49 => 21,  39 => 16,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/nav.html", "/Users/wangyong/www/mblog/templates/backend/nav.html");
    }
}
