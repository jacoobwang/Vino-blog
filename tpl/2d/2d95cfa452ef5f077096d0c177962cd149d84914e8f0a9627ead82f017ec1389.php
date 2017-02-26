<?php

/* @front/footer.html */
class __TwigTemplate_f6e31b94d55def1f68fd8d2c52463b0cc0fb31eabf6fc84f761ac5f76f3e1509 extends Twig_Template
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
        echo "<footer class=\"blog-footer\">

    <div class=\"blog-text-center\">© 2017 Licensed under MIT license. Created by Mblog</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "@front/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@front/footer.html", "D:\\wamp\\www\\blog2\\templates\\frontend\\footer.html");
    }
}
