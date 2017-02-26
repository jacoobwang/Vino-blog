<?php

/* index.html */
class __TwigTemplate_4f3630af6fdf102fcd3dc64a24a0de91ebfeecac99598c9b487aa31a1ee65bb2 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta http-equiv=\"Pragma\" content=\"no-cache\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "/css/style.css\">
</head>
<body>
<div class=\"container\">
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "/img/mphp-logo.png\">
    <h1 class=\"title\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
    <p>非常感谢您选择了mphp，下面就开始您的web之旅吧！</p>
    <p>技术交流或合作，欢迎与我联系qq531532957</p>
    <p>Created By <span>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true);
        echo "</span></p>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  42 => 13,  38 => 12,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/Users/wangyong/www/mphp/templates/index.html");
    }
}
