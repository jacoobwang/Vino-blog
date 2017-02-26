<?php

/* user.html */
class __TwigTemplate_ad0a42bd71ec088f8d162233df034c58bd1bd3da6fde6a906154c8a136057a0d extends Twig_Template
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
    <title>Welcome Mphp</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta http-equiv=\"Pragma\" content=\"no-cache\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "/css/style.css\">
</head>
<body>
<div class=\"container\">
\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "/img/mphp-logo.png\">
\t<h3 class=\"title\">Welcome ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo ", <span class=\"red\" id=\"user\"></span> this is your page <br><a id=\"js_logout\" href=\"/mphp/logout\">Login out</a></h3>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  35 => 12,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user.html", "D:\\wamp\\www\\Mphp\\templates\\user.html");
    }
}
