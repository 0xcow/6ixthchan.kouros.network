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

/* mod/pages.html */
class __TwigTemplate_85a3455ca26d4cb50126ac3724106d1498d291b9991c9aab7f2409a86e51ff9c extends \Twig\Template
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
        echo "<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
<div style=\"text-align:center\">
<p class=\"unimportant\">
";
        // line 4
        if (($context["board"] ?? null)) {
            // line 5
            $context["page_max"] = $this->getAttribute(($context["config"] ?? null), "pages_max", []);
            // line 6
            echo strtr(gettext("This page allows you to create static pages for your board. The limit is %page_max% pages per board. You will still have to link to your pages somewhere in your board, for example in a sticky or in the board's announcement. To make links in the board's announcement, use &lt;a&gt; HTML tags."), array("%page_max%" => ($context["page_max"] ?? null), ));
        } else {
            // line 8
            echo gettext("This page allows you to create static pages for your imageboard.");
        }
        // line 10
        echo "<h2>";
        echo gettext("Existing pages");
        echo "</h2>
";
        // line 11
        if (($context["pages"] ?? null)) {
            // line 12
            echo "<form>
<table style=\"margin:auto\">
<tr><th>";
            // line 14
            echo gettext("URL");
            echo "</th><th>";
            echo gettext("Title");
            echo "</th><th>";
            echo gettext("Edit");
            echo "</th><th>";
            echo gettext("Delete");
            echo "</tr>
";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 16
                echo "<tr><td>";
                echo $this->getAttribute($context["page"], "name", []);
                echo "</td><td>";
                echo $this->getAttribute($context["page"], "title", []);
                echo "</td><td><a href=\"?/edit_page/";
                echo $this->getAttribute($context["page"], "id", []);
                echo "\">";
                echo gettext("Edit");
                echo "</a></td><td><a href=\"?/edit_pages/delete/";
                echo $this->getAttribute($context["page"], "name", []);
                if (($context["board"] ?? null)) {
                    echo "/";
                    echo ($context["board"] ?? null);
                }
                echo "/";
                echo $this->getAttribute($context["page"], "delete_token", []);
                echo "\">";
                echo gettext("Delete");
                echo "</a></td>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "<em>No pages yet!</em>
";
        }
        // line 21
        echo "</table>
</form>
<hr/>
<h2>";
        // line 24
        echo gettext("Create a new page");
        echo "</h2>
<form method=\"POST\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 26
        echo ($context["token"] ?? null);
        echo "\">
<table>
<tr><th>";
        // line 28
        echo gettext("URL");
        echo "</th><th>";
        echo gettext("Title");
        echo "</th></tr>
<tr><td><input type=\"text\" name=\"page\"></td><td><input type=\"text\" name=\"title\"></td>
</table>\t
<input type=\"submit\" value=\"";
        // line 31
        echo gettext("Create");
        echo "\">
</form>

</div>
";
    }

    public function getTemplateName()
    {
        return "mod/pages.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 31,  115 => 28,  110 => 26,  105 => 24,  100 => 21,  96 => 19,  70 => 16,  66 => 15,  56 => 14,  52 => 12,  50 => 11,  45 => 10,  42 => 8,  39 => 6,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/pages.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/pages.html");
    }
}
