<?php

/* @front/header.html */
class __TwigTemplate_8596cf1c891182f7d64ab95e7c16a1c73d2790d0f31c0a0a5a094212babc5d78 extends Twig_Template
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
        echo "<!Doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/favicon.png\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta name=\"msapplication-TileColor\" content=\"#0e90d2\">
    <meta name=\"description\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/css/amazeui.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/css/app.css\">
</head>";
    }

    public function getTemplateName()
    {
        return "@front/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  47 => 18,  43 => 17,  35 => 12,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@front/header.html", "D:\\wamp\\www\\blog2\\templates\\frontend\\header.html");
    }
}
