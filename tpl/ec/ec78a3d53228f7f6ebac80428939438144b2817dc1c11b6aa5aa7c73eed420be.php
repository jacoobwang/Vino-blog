<?php

/* @front/reg.html */
class __TwigTemplate_cc55ee1869d641e16a74f83e2041d281695705dc0be471be2317afb3f85667e0 extends Twig_Template
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
        echo "<!doctype html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">
  <meta name=\"viewport\"
        content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
  <title>LOG-IN | Amaze UI Examples</title>

  <!-- Set render engine for 360 browser -->
  <meta name=\"renderer\" content=\"webkit\">

  <!-- No Baidu Siteapp-->
  <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>

  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/favicon.png\">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name=\"mobile-web-app-capable\" content=\"yes\">
  <link rel=\"icon\" sizes=\"192x192\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/app-icon72x72@2x.png\">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
  <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
  <meta name=\"apple-mobile-web-app-title\" content=\"Amaze UI\"/>
  <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/app-icon72x72@2x.png\">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name=\"msapplication-TileImage\" content=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/app-icon72x72@2x.png\">
  <meta name=\"msapplication-TileColor\" content=\"#0e90d2\">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel=\"canonical\" href=\"http://www.example.com/\">
  -->

  <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/css/amazeui.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/css/app.css\">
</head>
<body>
<header>
  <div class=\"log-re\">
    <a href=\"http://localhost/blog2/admin/login\" style=\"color: #fff\" class=\"am-btn am-btn-default am-radius log-button\">登 录</a>
  </div> 
</header>

<div class=\"log\"> 
  <div class=\"am-g\">
  <div class=\"am-u-lg-3 am-u-md-6 am-u-sm-8 am-u-sm-centered log-content\">
    <h1 class=\"log-title am-animation-slide-top\">Mblog</h1>
    <br>
    <form class=\"am-form\" id=\"log-form\" method=\"POST\" action=\"/blog2/api/user/reg\">
        <div class=\"am-input-group am-radius am-animation-slide-left\">
            <input name=\"user\" type=\"text\" class=\"am-radius\" data-validation-message=\"请输入英文用户名\" placeholder=\"用户名\" required/>
            <span class=\"am-input-group-label log-icon am-radius\"><i class=\"am-icon-user am-icon-sm am-icon-fw\"></i></span>
        </div>
        <br>
      <div class=\"am-input-group am-radius am-animation-slide-left\">       
        <input name=\"email\" type=\"email\" id=\"doc-vld-email-2-1\" class=\"am-radius\" data-validation-message=\"请输入正确邮箱地址\" placeholder=\"邮箱\" required/>
        <span class=\"am-input-group-label log-icon am-radius\"><i class=\"am-icon-user am-icon-sm am-icon-fw\"></i></span>
      </div>
      <br>
      <div class=\"am-input-group am-animation-slide-left log-animation-delay\">       
        <input name=\"pwd\" type=\"password\" id=\"log-password\" class=\"am-form-field am-radius log-input\" placeholder=\"密码\" minlength=\"8\" required>
        <span class=\"am-input-group-label log-icon am-radius\"><i class=\"am-icon-lock am-icon-sm am-icon-fw\"></i></span>
      </div>
      <br>   
      <div class=\"am-input-group am-animation-slide-left log-animation-delay-a\">       
        <input type=\"password\" data-equal-to=\"#log-password\" class=\"am-form-field am-radius log-input\" placeholder=\"确认密码\" data-validation-message=\"请确认密码一致\" required>
        <span class=\"am-input-group-label log-icon am-radius\"><i class=\"am-icon-lock am-icon-sm am-icon-fw\"></i></span>
      </div>
      <br>
      <button type=\"submit\" class=\"am-btn am-btn-primary am-btn-block am-btn-lg am-radius am-animation-slide-bottom log-animation-delay-b\">注 册</button>
      <br>
    </form>
  </div>
  </div>
  <footer class=\"log-footer\">   
    © 2014 AllMobilize, Inc. Licensed under MIT license.
  </footer>
</div>



<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src=\"http://libs.baidu.com/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/app.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@front/reg.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 96,  139 => 95,  134 => 93,  126 => 88,  75 => 40,  71 => 39,  60 => 31,  54 => 28,  45 => 22,  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@front/reg.html", "D:\\wamp\\www\\blog2\\templates\\frontend\\reg.html");
    }
}
