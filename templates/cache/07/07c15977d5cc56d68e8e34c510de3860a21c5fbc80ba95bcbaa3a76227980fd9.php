<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/catalog/catalog.html */
class __TwigTemplate_cb885a796d160db009f467e5a550a202d7900b6c25103f525e2212495e1d702f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_4c47bf1ed1ee48bf7571bed9a3295043a652d1a060cabf4e4aabf6ab527668bd' => [$this, 'block___internal_4c47bf1ed1ee48bf7571bed9a3295043a652d1a060cabf4e4aabf6ab527668bd'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo twig_remove_whitespace_filter(        $this->renderBlock("__internal_4c47bf1ed1ee48bf7571bed9a3295043a652d1a060cabf4e4aabf6ab527668bd", $context, $blocks));
    }

    public function block___internal_4c47bf1ed1ee48bf7571bed9a3295043a652d1a060cabf4e4aabf6ab527668bd($context, array $blocks = [])
    {
        // line 2
        echo "<!doctype html>
<html>
<head>
\t<meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
\t<script type='text/javascript'>
\t\tvar active_page = \"catalog\"
\t\t  , board_name = \"";
        // line 8
        echo ($context["board"] ?? null);
        echo "\";
\t</script>
\t";
        // line 10
        $this->loadTemplate("header.html", "themes/catalog/catalog.html", 10)->display($context);
        // line 11
        echo "\t<title>";
        echo ($context["board"] ?? null);
        echo " - Catalog</title>
</head>
<body class=\"8chan vichan ";
        // line 13
        if (($context["mod"] ?? null)) {
            echo "is-moderator";
        } else {
            echo "is-not-moderator";
        }
        echo " theme-catalog active-catalog\" data-stylesheet=\"";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []) != "")) {
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []);
        } else {
            echo "default";
        }
        echo "\">
\t";
        // line 14
        echo $this->getAttribute(($context["boardlist"] ?? null), "top", []);
        echo "
\t<header>
\t\t<h1>";
        // line 16
        echo $this->getAttribute(($context["settings"] ?? null), "title", []);
        echo " (<a href=\"";
        echo ($context["link"] ?? null);
        echo "\">/";
        echo ($context["board"] ?? null);
        echo "/</a>)</h1>
\t\t<div class=\"subtitle\">";
        // line 17
        echo $this->getAttribute(($context["settings"] ?? null), "subtitle", []);
        echo "
\t\t\t";
        // line 18
        if (($context["mod"] ?? null)) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 19
        echo "\t\t</div>
\t</header>

        <span>";
        // line 22
        echo gettext("Sort by");
        echo ": </span>
        <select id=\"sort_by\" style=\"display: inline-block\">
                <option selected value=\"bump:desc\">";
        // line 24
        echo gettext("Bump order");
        echo "</option>
                <option value=\"time:desc\">";
        // line 25
        echo gettext("Creation date");
        echo "</option>
                <option value=\"reply:desc\">";
        // line 26
        echo gettext("Reply count");
        echo "</option>
                <option value=\"random:desc\">";
        // line 27
        echo gettext("Random");
        echo "</option>
        </select>
 
        <span>";
        // line 30
        echo gettext("Image size");
        echo ": </span>
        <select id=\"image_size\" style=\"display: inline-block\">
                <option value=\"vsmall\">";
        // line 32
        echo gettext("Very small");
        echo "</option>
                <option selected value=\"small\">";
        // line 33
        echo gettext("Small");
        echo "</option>
                <option value=\"large\">";
        // line 34
        echo gettext("Large");
        echo "</option>
        </select>
        <div class=\"threads\">
                <div id=\"Grid\">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recent_posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 39
            echo "                        <div class=\"mix\"
\t\t\t\tdata-reply=\"";
            // line 40
            echo $this->getAttribute($context["post"], "reply_count", []);
            echo "\"
\t\t\t\t data-bump=\"";
            // line 41
            echo $this->getAttribute($context["post"], "bump", []);
            echo "\"
\t\t\t\t data-time=\"";
            // line 42
            echo $this->getAttribute($context["post"], "time", []);
            echo "\"
\t\t\t\t data-id=\"";
            // line 43
            echo $this->getAttribute($context["post"], "id", []);
            echo "\"
\t\t\t\t data-sticky=\"";
            // line 44
            if ($this->getAttribute($context["post"], "sticky", [])) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\"
\t\t\t\t data-locked=\"";
            // line 45
            if ($this->getAttribute($context["post"], "locked", [])) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\"
\t\t\t>
                                <div class=\"thread grid-li grid-size-small\">  
                                        <a href=\"";
            // line 48
            echo $this->getAttribute($context["post"], "link", []);
            echo "\">  
\t\t\t\t\t\t";
            // line 49
            if ($this->getAttribute($context["post"], "youtube", [])) {
                // line 50
                echo "\t\t\t\t\t\t\t<img src=\"//img.youtube.com/vi/";
                echo $this->getAttribute($context["post"], "youtube", []);
                echo "/0.jpg\" 
\t\t\t\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo $this->getAttribute($context["post"], "file", []);
                echo "\" 
\t\t\t\t\t\t";
            }
            // line 54
            echo "                                                 id=\"img-";
            echo $this->getAttribute($context["post"], "id", []);
            echo "\" data-subject=\"";
            if ($this->getAttribute($context["post"], "subject", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "subject", []));
            }
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", []));
            echo "\" data-muhdifference=\"";
            echo $this->getAttribute($context["post"], "muhdifference", []);
            echo "\" class=\"";
            echo $this->getAttribute($context["post"], "board", []);
            echo " thread-image\" title=\"";
            echo twig_date_filter($this->getAttribute($context["post"], "bump", []), "%b %d %H:%M");
            echo "\">
                                        </a>
                                                <div class=\"replies\">
                                                        <strong>R: ";
            // line 57
            echo $this->getAttribute($context["post"], "reply_count", []);
            echo " / I: ";
            echo $this->getAttribute($context["post"], "image_count", []);
            if ($this->getAttribute($context["post"], "sticky", [])) {
                echo " (sticky)";
            }
            echo "</strong>
                                                        ";
            // line 58
            if ($this->getAttribute($context["post"], "subject", [])) {
                // line 59
                echo "\t\t\t\t\t\t\t\t<p class=\"intro\">
\t\t\t\t\t\t\t\t\t<span class=\"subject\">
\t\t\t\t\t\t\t\t\t\t";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "subject", []));
                echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t";
            }
            // line 67
            echo "
\t\t\t\t\t\t\t\t";
            // line 68
            echo $this->getAttribute($context["post"], "body", []);
            echo "
                                                </div>
                                </div>
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </div>
        </div>
\t
\t<hr/>
\t<footer>
\t\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">- Tinyboard + 
\t\t\t<a href=\"https://engine.vichan.net/\">vichan</a> ";
        // line 79
        echo $this->getAttribute(($context["config"] ?? null), "version", []);
        echo " -
\t\t<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group    
\t\t<br><a href=\"https://engine.vichan.net/\">vichan</a> Copyright &copy; 2012-2018 vichan-devel</p>
\t</footer>
\t<script type=\"text/javascript\">";
        // line 85
        echo "
\t\tvar styles = {
\t\t\t";
        echo "
\t\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "stylesheets", []));
        foreach ($context['_seq'] as $context["name"] => $context["uri"]) {
            echo "'";
            echo addslashes($context["name"]);
            echo "' : '";
            echo "/stylesheets/";
            echo addslashes($context["uri"]);
            // line 87
            echo "',
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['uri'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
\t\t}; onready(init);
\t";
        echo "</script>

\t<script type=\"text/javascript\">";
        // line 93
        echo "
\t\tready();
\t";
        echo "</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/catalog/catalog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 93,  298 => 89,  291 => 87,  282 => 86,  276 => 85,  269 => 79,  261 => 73,  250 => 68,  247 => 67,  243 => 65,  236 => 61,  232 => 59,  230 => 58,  221 => 57,  202 => 54,  196 => 52,  190 => 50,  188 => 49,  184 => 48,  174 => 45,  166 => 44,  162 => 43,  158 => 42,  154 => 41,  150 => 40,  147 => 39,  143 => 38,  136 => 34,  132 => 33,  128 => 32,  123 => 30,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  100 => 22,  95 => 19,  89 => 18,  85 => 17,  77 => 16,  72 => 14,  58 => 13,  52 => 11,  50 => 10,  45 => 8,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/catalog/catalog.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/themes/catalog/catalog.html");
    }
}
