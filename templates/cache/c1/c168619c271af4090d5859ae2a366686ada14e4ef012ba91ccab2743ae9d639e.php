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

/* mod/config-editor.html */
class __TwigTemplate_1b903bc291089e63280fa88c3a3cc1d79be6537454e6f4abcaf99c55237a3bef extends \Twig\Template
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
        echo "<p>
\tAny changes you make here will simply be appended to <code>";
        // line 2
        echo ($context["file"] ?? null);
        echo "</code>. If you wish to make the most of Tinyboard's customizability, you can instead edit the file directly. This page is intended for making quick changes and for those who don't have a basic understanding of PHP code.
</p>
";
        // line 4
        if (twig_length_filter($this->env, ($context["boards"] ?? null))) {
            // line 5
            echo "\t<ul>
\t\t";
            // line 6
            if (($context["board"] ?? null)) {
                // line 7
                echo "\t\t\t<li><a href=\"?/config\">Edit site-wide config</a></li>
\t\t";
            }
            // line 9
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["boards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["_board"]) {
                if (($this->getAttribute($context["_board"], "uri", []) != ($context["board"] ?? null))) {
                    // line 10
                    echo "\t\t\t<li>
\t\t\t\t<a href=\"?/config/";
                    // line 11
                    echo $this->getAttribute($context["_board"], "uri", []);
                    echo "\">Edit config for ";
                    echo sprintf($this->getAttribute(($context["config"] ?? null), "board_abbreviation", []), $this->getAttribute($context["_board"], "uri", []));
                    echo "</a>
\t\t\t</li>
\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_board'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t</ul>
";
        }
        // line 16
        echo "<form method=\"post\" action=\"\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 17
        echo ($context["token"] ?? null);
        echo "\">
\t<table class=\"mod config-editor\">
\t\t<tr>
\t\t\t<th class=\"minimal\">";
        // line 20
        echo gettext("Name");
        echo "</th>
\t\t\t<th>";
        // line 21
        echo gettext("Value");
        echo "</th>
\t\t\t<th class=\"minimal\">";
        // line 22
        echo gettext("Type");
        echo "</th>
\t\t\t<th>";
        // line 23
        echo gettext("Description");
        echo "</th>
\t\t</tr>
\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conf"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            if (($this->getAttribute($context["var"], "type", []) != "array")) {
                // line 26
                echo "\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute($context["var"], "name", [])) == 1)) {
                    // line 27
                    echo "\t\t\t\t";
                    $context["name"] = ("cf_" . $this->getAttribute($context["var"], "name", []));
                    // line 28
                    echo "\t\t\t";
                } else {
                    // line 29
                    echo "\t\t\t\t";
                    $context["name"] = ("cf_" . twig_join_filter($this->getAttribute($context["var"], "name", []), "/"));
                    // line 30
                    echo "\t\t\t";
                }
                // line 31
                echo "\t\t\t
\t\t\t<tr>
\t\t\t\t<th class=\"minimal\">
\t\t\t\t\t";
                // line 34
                if ((twig_length_filter($this->env, $this->getAttribute($context["var"], "name", [])) == 1)) {
                    // line 35
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute($context["var"], "name", []);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t\t\t\t";
                    echo twig_join_filter($this->getAttribute($context["var"], "name", []), " &rarr; ");
                    echo "
\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t</th>
\t\t\t\t
\t\t\t\t<td>
\t\t\t\t\t";
                // line 42
                if (($this->getAttribute($context["var"], "type", []) == "string")) {
                    // line 43
                    echo "\t\t\t\t\t\t<input name=\"";
                    echo ($context["name"] ?? null);
                    echo "\" type=\"text\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "value", []));
                    echo "\">
\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 44
$context["var"], "permissions", [])) {
                    // line 45
                    echo "\t\t\t\t\t\t<select name=\"";
                    echo ($context["name"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "groups", []));
                    foreach ($context['_seq'] as $context["group_value"] => $context["group_name"]) {
                        // line 47
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo $context["group_value"];
                        echo "\"";
                        if (($this->getAttribute($context["var"], "value", []) == $context["group_value"])) {
                            echo " selected";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t";
                        // line 48
                        echo $context["group_name"];
                        echo "
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['group_value'], $context['group_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "\t\t\t\t\t\t</select>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 52
$context["var"], "type", []) == "integer")) {
                    // line 53
                    echo "\t\t\t\t\t\t<input name=\"";
                    echo ($context["name"] ?? null);
                    echo "\" type=\"number\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "value", []));
                    echo "\">
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 54
$context["var"], "type", []) == "boolean")) {
                    // line 55
                    echo "\t\t\t\t\t\t<input name=\"";
                    echo ($context["name"] ?? null);
                    echo "\" type=\"checkbox\" ";
                    if ($this->getAttribute($context["var"], "value", [])) {
                        echo "checked";
                    }
                    echo ">
\t\t\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\t\t\t?
\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 60
                if ((($this->getAttribute($context["var"], "type", []) == "integer") || ($this->getAttribute($context["var"], "type", []) == "boolean"))) {
                    // line 61
                    echo "\t\t\t\t\t <small>Default: <code>";
                    echo $this->getAttribute($context["var"], "default", []);
                    echo "</code></small>
\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t</td>
\t\t\t\t
\t\t\t\t<td class=\"minimal\">
\t\t\t\t\t";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["var"], "type", []));
                echo "
\t\t\t\t</td>
\t\t\t\t
\t\t\t\t<td style=\"word-wrap:break-word;width:50%\">
\t\t\t\t\t";
                // line 70
                echo twig_join_filter($this->getAttribute($context["var"], "comment", []), " ");
                echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t</table>
\t
\t<ul style=\"padding:0;text-align:center;list-style:none\">
\t\t<li><input name=\"save\" type=\"submit\" value=\"";
        // line 77
        echo gettext("Save changes");
        echo "\"></li>
\t</ul>
</form>

";
    }

    public function getTemplateName()
    {
        return "mod/config-editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 77,  244 => 74,  233 => 70,  226 => 66,  221 => 63,  215 => 61,  213 => 60,  210 => 59,  206 => 57,  196 => 55,  194 => 54,  187 => 53,  185 => 52,  182 => 51,  173 => 48,  164 => 47,  160 => 46,  155 => 45,  153 => 44,  146 => 43,  144 => 42,  139 => 39,  133 => 37,  127 => 35,  125 => 34,  120 => 31,  117 => 30,  114 => 29,  111 => 28,  108 => 27,  105 => 26,  100 => 25,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  77 => 17,  74 => 16,  70 => 14,  58 => 11,  55 => 10,  49 => 9,  45 => 7,  43 => 6,  40 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/config-editor.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/config-editor.html");
    }
}
