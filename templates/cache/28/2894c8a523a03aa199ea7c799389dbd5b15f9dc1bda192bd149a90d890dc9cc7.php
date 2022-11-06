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

/* mod/board.html */
class __TwigTemplate_9c2626cea51d3b6d8190a493cb7487a0a138fdef2c4f31be32b8069a5383c105 extends \Twig\Template
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
        if (($context["new"] ?? null)) {
            // line 2
            echo "\t";
            $context["action"] = "?/new-board";
        } else {
            // line 4
            echo "\t";
            $context["action"] = ("?/edit/" . $this->getAttribute(($context["board"] ?? null), "uri", []));
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 8
        echo ($context["token"] ?? null);
        echo "\">
\t<table>
\t\t<tr>
\t\t\t<th>";
        // line 11
        echo gettext("URI");
        echo "</th>
\t\t\t<td>
\t\t\t\t";
        // line 13
        if ( !($context["new"] ?? null)) {
            // line 14
            echo "\t\t\t\t\t";
            echo sprintf($this->getAttribute(($context["config"] ?? null), "board_abbreviation", []), $this->getAttribute(($context["board"] ?? null), "uri", []));
            echo "
\t\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t\t/<input size=\"10\" maxlength=\"255\" type=\"text\" name=\"uri\" autocomplete=\"off\">/
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>";
        // line 21
        echo gettext("Title");
        echo "</th>
\t\t\t<td>
\t\t\t\t<input size=\"25\" type=\"text\" name=\"title\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "title", []));
        echo "\" autocomplete=\"off\">
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>";
        // line 27
        echo gettext("Subtitle");
        echo "</th>
\t\t\t<td>
\t\t\t\t<input size=\"25\" type=\"text\" name=\"subtitle\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "subtitle", []));
        echo "\" autocomplete=\"off\">
\t\t\t</td>
\t\t</tr>
\t</table>
\t
\t<ul style=\"padding:0;text-align:center;list-style:none\">
\t\t";
        // line 35
        if (($context["new"] ?? null)) {
            // line 36
            echo "\t\t\t<li><input type=\"submit\" value=\"";
            echo gettext("Create board");
            echo "\"></li>
\t\t";
        } else {
            // line 38
            echo "\t\t\t<li><input type=\"submit\" value=\"";
            echo gettext("Save changes");
            echo "\"></li>
\t\t\t";
            // line 39
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "deleteboard", []))) {
                // line 40
                echo "\t\t\t\t<li><input name=\"delete\" onclick=\"return confirm('Are you sure you want to permanently delete this board?');\" type=\"submit\" value=\"";
                echo gettext("Delete board");
                echo "\"></li>
\t\t\t";
            }
            // line 42
            echo "\t\t";
        }
        // line 43
        echo "\t</ul>
</form>

";
    }

    public function getTemplateName()
    {
        return "mod/board.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  122 => 42,  116 => 40,  114 => 39,  109 => 38,  103 => 36,  101 => 35,  92 => 29,  87 => 27,  80 => 23,  75 => 21,  70 => 18,  66 => 16,  60 => 14,  58 => 13,  53 => 11,  47 => 8,  43 => 7,  40 => 6,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/board.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/board.html");
    }
}
