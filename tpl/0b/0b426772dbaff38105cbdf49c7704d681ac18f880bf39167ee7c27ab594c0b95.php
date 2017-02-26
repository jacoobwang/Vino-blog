<?php

/* index.html */
class __TwigTemplate_3f310ac47da430b6e19e5dfa5ce377425febad4a6c356d4d557a0ab1629a6b5d extends Twig_Template
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
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
  <title>BLOG index with sidebar & slider  | Amaze UI Examples</title>
  <meta name=\"renderer\" content=\"webkit\">
  <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/favicon.png\">
  <meta name=\"mobile-web-app-capable\" content=\"yes\">
  <link rel=\"icon\" sizes=\"192x192\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/app-icon72x72@2x.png\">
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
  <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
  <meta name=\"apple-mobile-web-app-title\" content=\"Amaze UI\"/>
  <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/app-icon72x72@2x.png\">
  <meta name=\"msapplication-TileImage\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/app-icon72x72@2x.png\">
  <meta name=\"msapplication-TileColor\" content=\"#0e90d2\">
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/css/amazeui.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/css/app.css\">
</head>

<body id=\"blog\">

<header class=\"am-g am-g-fixed blog-fixed blog-text-center blog-header\">
    <div class=\"am-u-sm-8 am-u-sm-centered\">
        <img width=\"200\" src=\"http://s.amazeui.org/media/i/brand/amazeui-b.png\" alt=\"Amaze UI Logo\"/>
        <h2 class=\"am-hide-sm-only\">中国首个开源 HTML5 跨屏前端框架</h2>
    </div>
</header>
<hr>
<!-- nav start -->
<nav class=\"am-g am-g-fixed blog-fixed blog-nav\">
<button class=\"am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button\" data-am-collapse=\"{target: '#blog-collapse'}\" ><span class=\"am-sr-only\">导航切换</span> <span class=\"am-icon-bars\"></span></button>

  <div class=\"am-collapse am-topbar-collapse\" id=\"blog-collapse\">
    <ul class=\"am-nav am-nav-pills am-topbar-nav\">
      <li class=\"am-active\"><a href=\"index.html\">首页</a></li>
      <li class=\"am-dropdown\" data-am-dropdown>
        <a class=\"am-dropdown-toggle\" data-am-dropdown-toggle href=\"javascript:;\">
          首页布局 <span class=\"am-icon-caret-down\"></span>
        </a>
        <ul class=\"am-dropdown-content\">
          <li><a href=\"index.html\">1. blog-index-standard</a></li>
          <li><a href=\"lw-index-nosidebar.html\">2. blog-index-nosidebar</a></li>
          <li><a href=\"lw-index-center.html\">3. blog-index-layout</a></li>
          <li><a href=\"lw-index-noslider.html\">4. blog-index-noslider</a></li>
        </ul>
      </li>
      <li><a href=\"lw-article.html\">标准文章</a></li>
      <li><a href=\"lw-img.html\">图片库</a></li>
      <li><a href=\"lw-article-fullwidth.html\">全宽页面</a></li>
      <li><a href=\"lw-timeline.html\">存档</a></li>
    </ul>
    <form class=\"am-topbar-form am-topbar-right am-form-inline\" role=\"search\">
      <div class=\"am-form-group\">
        <input type=\"text\" class=\"am-form-field am-input-sm\" placeholder=\"搜索\">
      </div>
    </form>
  </div>
</nav>
<hr>
<!-- nav end -->
<!-- banner start -->
<div class=\"am-g am-g-fixed blog-fixed am-u-sm-centered blog-article-margin\">
    <div data-am-widget=\"slider\" class=\"am-slider am-slider-b1\" data-am-slider='{&quot;controlNav&quot;:false}' >
    <ul class=\"am-slides\">
      <li>
            <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/b1.jpg\">
            <div class=\"blog-slider-desc am-slider-desc \">
                <div class=\"blog-text-center blog-slider-con\">
                    <span><a href=\"\" class=\"blog-color\">Article &nbsp;</a></span>               
                    <h1 class=\"blog-h-margin\"><a href=\"\">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span class=\"blog-bor\">2015/10/9</span>
                    <br><br><br><br><br><br><br>                
                </div>
            </div>
      </li>
      <li>
            <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/b2.jpg\">
            <div class=\"am-slider-desc blog-slider-desc\">
                <div class=\"blog-text-center blog-slider-con\">
                    <span><a href=\"\" class=\"blog-color\">Article &nbsp;</a></span>               
                    <h1 class=\"blog-h-margin\"><a href=\"\">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>                
                </div>
            </div>
      </li>
      <li>
            <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/b3.jpg\">
            <div class=\"am-slider-desc blog-slider-desc\">
                <div class=\"blog-text-center blog-slider-con\">
                    <span><a href=\"\" class=\"blog-color\">Article &nbsp;</a></span>               
                    <h1 class=\"blog-h-margin\"><a href=\"\">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>                
                </div>
            </div>
      </li>
      <li>
            <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/b2.jpg\">
            <div class=\"am-slider-desc blog-slider-desc\">
                <div class=\"blog-text-center blog-slider-con\">
                    <span><a href=\"\" class=\"blog-color\">Article &nbsp;</a></span>               
                    <h1 class=\"blog-h-margin\"><a href=\"\">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>                
                </div>
            </div>
      </li>
    </ul>
    </div>
</div>
<!-- banner end -->

<!-- content srart -->
<div class=\"am-g am-g-fixed blog-fixed\">
    <div class=\"am-u-md-8 am-u-sm-12\">

        <article class=\"am-g blog-entry-article\">
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img\">
                <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/f10.jpg\" alt=\"\" class=\"am-u-sm-12\">
            </div>
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text\">
                <span><a href=\"\" class=\"blog-color\">article &nbsp;</a></span>
                <span> @amazeUI &nbsp;</span>
                <span>2015/10/9</span>
                <h1><a target=\"_blank\" href=\"http://localhost/blog2/index2\">我本楚狂人，凤歌笑孔丘</a></h1>
                <p>我们一直在坚持着，不是为了改变这个世界，而是希望不被这个世界所改变。
                </p>
                <p><a href=\"\" class=\"blog-continue\">continue reading</a></p>
            </div>
        </article>

        <article class=\"am-g blog-entry-article\">
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img\">
                <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/f6.jpg\" alt=\"\" class=\"am-u-sm-12\">
            </div>
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text\">
                <span><a href=\"http://localhost/blog2/index2\" class=\"blog-color\">article&nbsp;</a></span>
                <span>@amazeUI &nbsp;</span>
                <span>2015/10/9</span>
                <h1><a href=\"http://localhost/blog2/index2\">世间所有的相遇，都是久别重逢。</a></h1>
                <p>你可以选择在原处不停地跟周遭不解的人解释你为何这么做，让他们理解你，你可以选择什么都不讲，自顾自往前走。
                </p>
                <p><a href=\"\" class=\"blog-continue\">continue</a></p>
            </div>
        </article>

        <article class=\"am-g blog-entry-article\">
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img\">
                <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/f12.jpg\" alt=\"\" class=\"am-u-sm-12\">
            </div>
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text\">
                <span><a href=\"http://localhost/blog2/index2\" class=\"blog-color\">article&nbsp;</a></span>
                <span>@amazeUI</span>
                <span>2015/10/9</span>
                <h1><a href=\"http://localhost/blog2/index2\">陌上花开，可缓缓归矣。</a></h1>
                <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。我们就在骑楼下躲雨，看绿色的邮筒孤独地站在街的对面。
                </p>
                <p><a href=\"\" class=\"blog-continue\">continue</a></p>
            </div>
        </article>

        <article class=\"am-g blog-entry-article\">
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img\">
                <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/f22.jpg\" alt=\"\" class=\"am-u-sm-12\">
            </div>
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text\">
                <span><a href=\"\" class=\"blog-color\">article&nbsp;</a></span>
                <span>@amazeUI</span>
                <span>2015/10/9</span>
                <h1><a href=\"\">爱自己是终生浪漫的开始</a></h1>
                <p>the whole of life becomes an act of letting go, but what always hurts the most is not taking a moment to say goodbye
                </p>
                <p><a href=\"\" class=\"blog-continue\">continue</a></p>
            </div>
        </article>

        <article class=\"am-g blog-entry-article\">
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img\">
                <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/f18.jpg\" alt=\"\" class=\"am-u-sm-12\">
            </div>
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text\">
                <span><a href=\"\" class=\"blog-color\">article&nbsp;</a></span>
                <span> @amazeUI &nbsp;</span>
                <span>2015/10/9</span>
                <h1><a href=\"http://localhost/blog2/index2\">My dear amazeUI, Hello </a></h1>
                <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。我们就在骑楼下躲雨，看绿色的邮筒孤独地站在街的对面。
                </p>
                <p><a href=\"\" class=\"blog-continue\">continue reading</a></p>
            </div>
        </article>

        <article class=\"am-g blog-entry-article\">
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img\">
                <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/f20.jpg\" alt=\"\" class=\"am-u-sm-12\">
            </div>
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text\">
                <span><a href=\"\" class=\"blog-color\">article&nbsp;</a></span>
                <span> @amazeUI &nbsp;</span>
                <span>2015/10/9</span>
                <h1><a href=\"http://localhost/blog2/index2\">My way or the highway</a></h1>
                <p>A big wind rises， clouds are driven away. Home am Inow the world is under my sway. Where are brave men to guard the four frontiers today！ 
                </p>
                <p><a href=\"\" class=\"blog-continue\">continue reading</a></p>
            </div>
        </article>

         <article class=\"am-g blog-entry-article\">
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img\">
                <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/f19.jpg\" alt=\"\" class=\"am-u-sm-12\">
            </div>
            <div class=\"am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text\">
                <span><a href=\"\" class=\"blog-color\">article&nbsp;</a></span>
                <span> @amazeUI &nbsp;</span>
                <span>2015/10/9</span>
                <h1><a href=\"\">一想到你，我这张丑脸上就泛起微笑</a></h1>
                <p>那一天我二十一岁，在我一生的黄金时代。我有好多奢望。我想爱，想吃，还想在一瞬间变成天上半明半暗的云。
                </p>
                <p><a href=\"\" class=\"blog-continue\">continue reading</a></p>
            </div>
        </article>
        
        <ul class=\"am-pagination\">
  <li class=\"am-pagination-prev\"><a href=\"\">&laquo; Prev</a></li>
  <li class=\"am-pagination-next\"><a href=\"\">Next &raquo;</a></li>
</ul>
    </div>

    <div class=\"am-u-md-4 am-u-sm-12 blog-sidebar\">
        <div class=\"blog-sidebar-widget blog-bor\">
            <h2 class=\"blog-text-center blog-title\"><span>About ME</span></h2>
            <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/i/f14.jpg\" alt=\"about me\" class=\"blog-entry-img\" >
            <p>妹纸</p>
            <p>
        我是妹子UI，中国首个开源 HTML5 跨屏前端框架
        </p><p>我不想成为一个庸俗的人。十年百年后，当我们死去，质疑我们的人同样死去，后人看到的是裹足不前、原地打转的你，还是一直奔跑、走到远方的我？</p>
        </div>
        <div class=\"blog-sidebar-widget blog-bor\">
            <h2 class=\"blog-text-center blog-title\"><span>Contact ME</span></h2>
            <p>
                <a href=\"\"><span class=\"am-icon-qq am-icon-fw am-primary blog-icon\"></span></a>
                <a href=\"\"><span class=\"am-icon-github am-icon-fw blog-icon\"></span></a>
                <a href=\"\"><span class=\"am-icon-weibo am-icon-fw blog-icon\"></span></a>
                <a href=\"\"><span class=\"am-icon-reddit am-icon-fw blog-icon\"></span></a>
                <a href=\"\"><span class=\"am-icon-weixin am-icon-fw blog-icon\"></span></a>
            </p>
        </div>
        <div class=\"blog-clear-margin blog-sidebar-widget blog-bor am-g \">
            <h2 class=\"blog-title\"><span>TAG cloud</span></h2>
            <div class=\"am-u-sm-12 blog-clear-padding\">
            <a href=\"\" class=\"blog-tag\">amaze</a>
            <a href=\"\" class=\"blog-tag\">妹纸 UI</a>
            <a href=\"\" class=\"blog-tag\">HTML5</a>
            <a href=\"\" class=\"blog-tag\">这是标签</a>
            <a href=\"\" class=\"blog-tag\">Impossible</a>
            <a href=\"\" class=\"blog-tag\">开源前端框架</a>
            </div>
        </div>
        <div class=\"blog-sidebar-widget blog-bor\">
            <h2 class=\"blog-title\"><span>么么哒</span></h2>
            <ul class=\"am-list\">
                <li><a href=\"#\">每个人都有一个死角， 自己走不出来，别人也闯不进去。</a></li>
                <li><a href=\"#\">我把最深沉的秘密放在那里。</a></li>
                <li><a href=\"#\">你不懂我，我不怪你。</a></li>
                <li><a href=\"#\">每个人都有一道伤口， 或深或浅，盖上布，以为不存在。</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- content end -->



  <footer class=\"blog-footer\">
    <div class=\"am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding\">
        <div class=\"am-u-sm-12 am-u-md-4- am-u-lg-4\">
            <h3>模板简介</h3>
            <p class=\"am-text-sm\">这是一个使用amazeUI做的简单的前端模板。<br> 博客/ 资讯类 前端模板 <br> 支持响应式，多种布局，包括主页、文章页、媒体页、分类页等<br>嗯嗯嗯，不知道说啥了。外面的世界真精彩<br><br>
            Amaze UI 使用 MIT 许可证发布，用户可以自由使用、复制、修改、合并、出版发行、散布、再授权及贩售 Amaze UI 及其副本。</p>
        </div>
        <div class=\"am-u-sm-12 am-u-md-4- am-u-lg-4\">
            <h3>社交账号</h3>
            <p>
                <a href=\"\"><span class=\"am-icon-qq am-icon-fw am-primary blog-icon blog-icon\"></span></a>
                <a href=\"\"><span class=\"am-icon-github am-icon-fw blog-icon blog-icon\"></span></a>
                <a href=\"\"><span class=\"am-icon-weibo am-icon-fw blog-icon blog-icon\"></span></a>
                <a href=\"\"><span class=\"am-icon-reddit am-icon-fw blog-icon blog-icon\"></span></a>
                <a href=\"\"><span class=\"am-icon-weixin am-icon-fw blog-icon blog-icon\"></span></a>
            </p>
            <h3>Credits</h3>
            <p>我们追求卓越，然时间、经验、能力有限。Amaze UI 有很多不足的地方，希望大家包容、不吝赐教，给我们提意见、建议。感谢你们！</p>          
        </div>
        <div class=\"am-u-sm-12 am-u-md-4- am-u-lg-4\">
              <h1>我们站在巨人的肩膀上</h1>
             <h3>Heroes</h3>
            <p>
                <ul>
                    <li>jQuery</li>
                    <li>Zepto.js</li>
                    <li>Seajs</li>
                    <li>LESS</li>
                    <li>...</li>
                </ul>
            </p>
        </div>
    </div>    
    <div class=\"blog-text-center\">© 2015 AllMobilize, Inc. Licensed under MIT license. Made with love By LWXYFER</div>    
  </footer>





<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"";
        // line 325
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/jquery.min.js\"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src=\"http://libs.baidu.com/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"";
        // line 330
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->
<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, (isset($context["JS_CSS_DOMAIN"]) ? $context["JS_CSS_DOMAIN"] : null), "html", null, true);
        echo "assets/js/amazeui.min.js\"></script>
</body>
</html>";
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
        return array (  412 => 332,  407 => 330,  399 => 325,  313 => 242,  288 => 220,  270 => 205,  252 => 190,  234 => 175,  216 => 160,  198 => 145,  180 => 130,  155 => 108,  140 => 96,  125 => 84,  109 => 71,  57 => 22,  53 => 21,  48 => 19,  44 => 18,  37 => 14,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "D:\\wamp\\www\\blog2\\templates\\index.html");
    }
}
