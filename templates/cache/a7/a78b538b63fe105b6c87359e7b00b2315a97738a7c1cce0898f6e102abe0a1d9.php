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

/* index.html */
class __TwigTemplate_9f3f73e036272138fd09f5a85682516424543f55f1d78391cddc073fce584310 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">

        <script type=\"text/javascript\">
\t  var
          ";
        // line 8
        if ( !($context["no_post_form"] ?? null)) {
            // line 9
            echo "              active_page = \"index\"
            , board_name = \"";
            // line 10
            echo $this->getAttribute(($context["board"] ?? null), "uri", []);
            echo "\";
\t  ";
        } else {
            // line 12
            echo "              active_page = \"ukko\";
          ";
        }
        // line 14
        echo "        </script>

\t";
        // line 16
        $this->loadTemplate("header.html", "index.html", 16)->display($context);
        // line 17
        echo "\t<title>";
        echo $this->getAttribute(($context["board"] ?? null), "url", []);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "title", []));
        echo "</title>
</head>
<body class=\"8chan vichan ";
        // line 19
        if (($context["mod"] ?? null)) {
            echo "is-moderator";
        } else {
            echo "is-not-moderator";
        }
        echo " active-";
        if ( !($context["no_post_form"] ?? null)) {
            echo "index";
        } else {
            echo "ukko";
        }
        echo "\" data-stylesheet=\"";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []) != "")) {
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []);
        } else {
            echo "default";
        }
        echo "\">
\t";
        // line 20
        echo $this->getAttribute(($context["boardlist"] ?? null), "top", []);
        echo "
\t
\t";
        // line 22
        if (($context["pm"] ?? null)) {
            echo "<div class=\"top_notice\">You have <a href=\"?/PM/";
            echo $this->getAttribute(($context["pm"] ?? null), "id", []);
            echo "\">an unread PM</a>";
            if (($this->getAttribute(($context["pm"] ?? null), "waiting", []) > 0)) {
                echo ", plus ";
                echo $this->getAttribute(($context["pm"] ?? null), "waiting", []);
                echo " more waiting";
            }
            echo ".</div><hr />";
        }
        // line 23
        echo "\t";
        if ($this->getAttribute(($context["config"] ?? null), "url_banner", [])) {
            echo "<img class=\"board_image\" src=\"";
            echo $this->getAttribute(($context["config"] ?? null), "url_banner", []);
            echo "\" ";
            if (($this->getAttribute(($context["config"] ?? null), "banner_width", []) || $this->getAttribute(($context["config"] ?? null), "banner_height", []))) {
                echo "style=\"";
                if ($this->getAttribute(($context["config"] ?? null), "banner_width", [])) {
                    echo "width:";
                    echo $this->getAttribute(($context["config"] ?? null), "banner_width", []);
                    echo "px";
                }
                echo ";";
                if ($this->getAttribute(($context["config"] ?? null), "banner_width", [])) {
                    echo "height:";
                    echo $this->getAttribute(($context["config"] ?? null), "banner_height", []);
                    echo "px";
                }
                echo "\" ";
            }
            echo "alt=\"\" />";
        }
        // line 24
        echo "\t
\t<header>
\t\t<h1>";
        // line 26
        echo $this->getAttribute(($context["board"] ?? null), "url", []);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "title", []));
        echo "</h1>
\t\t<div class=\"subtitle\">
\t\t\t";
        // line 28
        if ($this->getAttribute(($context["board"] ?? null), "subtitle", [])) {
            // line 29
            echo "\t\t\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "allow_subtitle_html", [])) {
                // line 30
                echo "\t\t\t\t\t";
                echo $this->getAttribute(($context["board"] ?? null), "subtitle", []);
                echo "
\t\t\t\t";
            } else {
                // line 32
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "subtitle", []));
                echo "
\t\t\t\t";
            }
            // line 34
            echo "\t\t\t";
        }
        // line 35
        echo "\t\t\t";
        if (($context["mod"] ?? null)) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 36
        echo "\t\t</div>
\t</header>

\t";
        // line 39
        $this->loadTemplate("attention_bar.html", "index.html", 39)->display($context);
        // line 40
        echo "
\t";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "ad", []), "top", []);
        echo "

\t";
        // line 43
        if ( !($context["no_post_form"] ?? null)) {
            // line 44
            echo "\t\t";
            $this->loadTemplate("post_form.html", "index.html", 44)->display($context);
            // line 45
            echo "\t";
        } else {
            // line 46
            echo "\t\t";
            $this->loadTemplate("boardlist.html", "index.html", 46)->display($context);
            // line 47
            echo "\t";
        }
        // line 48
        echo "
\t";
        // line 49
        if ($this->getAttribute(($context["config"] ?? null), "page_nav_top", [])) {
            // line 50
            echo "\t\t<div class=\"pages top\">
\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 52
                echo "\t\t\t [<a ";
                if ($this->getAttribute($context["page"], "selected", [])) {
                    echo "class=\"selected\"";
                }
                if ( !$this->getAttribute($context["page"], "selected", [])) {
                    echo "href=\"";
                    echo $this->getAttribute($context["page"], "link", []);
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["page"], "num", []);
                echo "</a>]";
                if ($this->getAttribute($context["loop"], "last", [])) {
                    echo " ";
                }
                // line 53
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t";
            echo $this->getAttribute(($context["btn"] ?? null), "next", []);
            echo "
\t\t</div>
\t";
        }
        // line 57
        echo "\t
\t";
        // line 58
        if ($this->getAttribute(($context["config"] ?? null), "global_message", [])) {
            echo "<hr /><div class=\"blotter\">";
            echo $this->getAttribute(($context["config"] ?? null), "global_message", []);
            echo "</div>";
        }
        // line 59
        echo "\t<hr />
\t";
        // line 60
        if ($this->getAttribute(($context["config"] ?? null), "board_search", [])) {
            // line 61
            echo "\t<!-- Start Search Form -->
        \t<form style=\"display:inline\" action=\"/search.php\">
                \t<p style=\"margin: 10px;\">
                    \t\t<input type=\"text\" name=\"search\" placeholder=\"";
            // line 64
            echo $this->getAttribute(($context["board"] ?? null), "uri", []);
            echo " search\">
                    \t\t<input type=\"hidden\" name=\"board\" value=\"";
            // line 65
            echo $this->getAttribute(($context["board"] ?? null), "uri", []);
            echo "\">
                    \t\t<input type=\"submit\" value=\"Search\">
                \t</p>
        \t</form>
    \t<!-- End Search Form -->
    \t";
        }
        // line 71
        echo "\t<form name=\"postcontrols\" action=\"";
        echo $this->getAttribute(($context["config"] ?? null), "post_url", []);
        echo "\" method=\"post\">
\t<input type=\"hidden\" name=\"board\" value=\"";
        // line 72
        echo $this->getAttribute(($context["board"] ?? null), "uri", []);
        echo "\" />
\t";
        // line 73
        if (($context["mod"] ?? null)) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\" />";
        }
        // line 74
        echo "\t";
        echo ($context["body"] ?? null);
        echo "
\t";
        // line 75
        $this->loadTemplate("report_delete.html", "index.html", 75)->display($context);
        // line 76
        echo "\t</form>
\t
\t<div class=\"pages\">
\t\t";
        // line 79
        echo $this->getAttribute(($context["btn"] ?? null), "prev", []);
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 80
            echo "\t\t [<a ";
            if ($this->getAttribute($context["page"], "selected", [])) {
                echo "class=\"selected\"";
            }
            if ( !$this->getAttribute($context["page"], "selected", [])) {
                echo "href=\"";
                echo $this->getAttribute($context["page"], "link", []);
                echo "\"";
            }
            echo ">";
            echo $this->getAttribute($context["page"], "num", []);
            echo "</a>]";
            if ($this->getAttribute($context["loop"], "last", [])) {
                echo " ";
            }
            // line 81
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        echo $this->getAttribute(($context["btn"] ?? null), "next", []);
        echo "
\t\t";
        // line 82
        if ($this->getAttribute(($context["config"] ?? null), "catalog_link", [])) {
            // line 83
            echo "\t\t\t | <a href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "root", []);
            if (($context["mod"] ?? null)) {
                echo $this->getAttribute(($context["config"] ?? null), "file_mod", []);
                echo "?/";
            }
            echo $this->getAttribute(($context["board"] ?? null), "dir", []);
            echo $this->getAttribute(($context["config"] ?? null), "catalog_link", []);
            echo "\">";
            echo gettext("Catalog");
            echo "</a>
\t\t";
        }
        // line 85
        echo "\t</div>
\t
\t";
        // line 87
        echo $this->getAttribute(($context["boardlist"] ?? null), "bottom", []);
        echo "

\t";
        // line 89
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "ad", []), "bottom", []);
        echo "

\t<footer>
\t\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">- Tinyboard + 
\t\t\t<a href=\"https://engine.vichan.net/\">vichan</a> ";
        // line 93
        echo $this->getAttribute(($context["config"] ?? null), "version", []);
        echo " -
\t\t<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group
\t\t<br><a href=\"https://engine.vichan.net/\">vichan</a> Copyright &copy; 2012-2018 vichan-devel</p>

\t\t";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "footer", []));
        foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
            echo "<p class=\"unimportant\" style=\"text-align:center;\">";
            echo $context["footer"];
            echo "</p>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t</footer>
\t<script type=\"text/javascript\">";
        // line 101
        echo "
\t\tready();
\t";
        echo "</script>
\t
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
        return array (  419 => 101,  416 => 98,  405 => 97,  398 => 93,  391 => 89,  386 => 87,  382 => 85,  368 => 83,  366 => 82,  348 => 81,  332 => 80,  313 => 79,  308 => 76,  306 => 75,  301 => 74,  297 => 73,  293 => 72,  288 => 71,  279 => 65,  275 => 64,  270 => 61,  268 => 60,  265 => 59,  259 => 58,  256 => 57,  249 => 54,  235 => 53,  219 => 52,  202 => 51,  199 => 50,  197 => 49,  194 => 48,  191 => 47,  188 => 46,  185 => 45,  182 => 44,  180 => 43,  175 => 41,  172 => 40,  170 => 39,  165 => 36,  158 => 35,  155 => 34,  149 => 32,  143 => 30,  140 => 29,  138 => 28,  131 => 26,  127 => 24,  104 => 23,  92 => 22,  87 => 20,  67 => 19,  59 => 17,  57 => 16,  53 => 14,  49 => 12,  44 => 10,  41 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/index.html");
    }
}
