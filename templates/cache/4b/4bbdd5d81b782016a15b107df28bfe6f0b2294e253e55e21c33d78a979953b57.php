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

/* page.html */
class __TwigTemplate_93a19a81f6ea5da919ceafeab3f9bb58a4851f1ff8db352ef4d4684f00e27640 extends \Twig\Template
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
\t<script type=\"text/javascript\">
\t\tvar active_page = \"page\";
\t</script>
\t";
        // line 8
        $this->loadTemplate("header.html", "page.html", 8)->display($context);
        // line 9
        echo "\t<title>";
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body class=\"8chan vichan ";
        // line 11
        if (($context["mod"] ?? null)) {
            echo "is-moderator";
        } else {
            echo "is-not-moderator";
        }
        echo " active-page\" data-stylesheet=\"";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []) != "")) {
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []);
        } else {
            echo "default";
        }
        echo "\">
        ";
        // line 12
        echo $this->getAttribute(($context["boardlist"] ?? null), "top", []);
        echo "

\t";
        // line 14
        if (($context["pm"] ?? null)) {
            echo "<div class=\"top_notice\">You have <a href=\"?/PM/";
            echo $this->getAttribute(($context["pm"] ?? null), "id", []);
            echo "\">an unread PM</a>";
            if (($this->getAttribute(($context["pm"] ?? null), "waiting", []) > 0)) {
                echo ", plus ";
                echo $this->getAttribute(($context["pm"] ?? null), "waiting", []);
                echo " more waiting";
            }
            echo ".</div><hr>";
        }
        // line 15
        echo "\t<header>
\t\t<h1>";
        // line 16
        echo ($context["title"] ?? null);
        echo "</h1>
\t\t<div class=\"subtitle\">
\t\t\t";
        // line 18
        if (($context["subtitle"] ?? null)) {
            // line 19
            echo "\t\t\t\t";
            echo ($context["subtitle"] ?? null);
            echo "
\t\t\t";
        }
        // line 21
        echo "\t\t\t";
        if ((($context["mod"] ?? null) &&  !($context["hide_dashboard_link"] ?? null))) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 22
        echo "\t\t</div>
\t</header>
\t";
        // line 24
        echo ($context["body"] ?? null);
        echo "
\t<hr>
\t<footer>
\t\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">- Tinyboard + 
\t\t\t<a href=\"https://engine.vichan.net/\">vichan</a> ";
        // line 28
        echo $this->getAttribute(($context["config"] ?? null), "version", []);
        echo " -
\t\t<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group    
\t\t<br><a href=\"https://engine.vichan.net/\">vichan</a> Copyright &copy; 2012-2018 vichan-devel</p>
\t</footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  105 => 24,  101 => 22,  94 => 21,  88 => 19,  86 => 18,  81 => 16,  78 => 15,  66 => 14,  61 => 12,  47 => 11,  41 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "page.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/page.html");
    }
}
