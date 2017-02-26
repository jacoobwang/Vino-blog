<?php

/* @admin/markdown2.html */
class __TwigTemplate_0e02e718ea7c9bab8aded19ec1e881e5d4141096a2a20a423d34e66d16fb31a2 extends Twig_Template
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
<head lang=\"en\">
    <meta charset=\"UTF-8\">
    <title></title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/editor.md/css/editormd.min.css\">
</head>
<body>
    <div id=\"test-editormd\"></div>
</body>

<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/editor.md/lib/raphael.min.js\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/sea.js\"></script>
<script type=\"text/javascript\">
    seajs.use('";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/mblog.main',function(main){
        main.load('mblog.markdown');
    });
</script>
</html>";
    }

    public function getTemplateName()
    {
        return "@admin/markdown2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  39 => 13,  35 => 12,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/markdown2.html", "D:\\wamp\\www\\blog2\\templates\\backend\\markdown2.html");
    }
}
