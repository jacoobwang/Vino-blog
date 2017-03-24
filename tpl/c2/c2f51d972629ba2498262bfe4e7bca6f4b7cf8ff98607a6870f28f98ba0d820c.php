<?php

/* @front/footer.html */
class __TwigTemplate_2e0b5ecae10c9e77260076dbdaeed76025301a9bf769e408efa86153a0eecbee extends Twig_Template
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

    <div class=\"blog-text-center\">© 2017 Licensed under MIT license. Created by Vino-blog</div>
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
        return new Twig_Source("", "@front/footer.html", "/Users/wangyong/www/vino-blog/templates/frontend/footer.html");
    }
}
