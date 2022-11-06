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

/* mod/user.html */
class __TwigTemplate_e40718dd48b1a5fa25107860f05f53bdc905b75996cc4e8e0a60e75a77e13f16 extends \Twig\Template
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
            $context["action"] = "?/users/new";
        } else {
            // line 4
            echo "\t";
            $context["action"] = ("?/users/" . $this->getAttribute(($context["user"] ?? null), "id", []));
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
        echo gettext("Username");
        echo "</th>
\t\t\t<td>
\t\t\t\t";
        // line 13
        if ((($context["new"] ?? null) || twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "editusers", [])))) {
            // line 14
            echo "\t\t\t\t\t<input size=\"20\" maxlength=\"30\" type=\"text\" name=\"username\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", []));
            echo "\" autocomplete=\"off\">
\t\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", []));
            echo "
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>";
        // line 21
        echo gettext("Password");
        if ( !($context["new"] ?? null)) {
            echo " <small style=\"font-weight:normal\">(";
            echo gettext("new; optional");
            echo ")</small>";
        }
        echo "</th>
\t\t\t<td>
\t\t\t\t";
        // line 23
        if ((($context["new"] ?? null) || (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "editusers", [])) || (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "change_password", [])) && ($this->getAttribute(($context["user"] ?? null), "id", []) == $this->getAttribute(($context["mod"] ?? null), "id", [])))))) {
            // line 24
            echo "\t\t\t\t\t<input size=\"20\" maxlength=\"30\" type=\"password\" name=\"password\" value=\"\" autocomplete=\"off\">
\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t-
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t</td>
\t\t</tr>
\t\t";
        // line 30
        if (($context["new"] ?? null)) {
            // line 31
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 32
            echo gettext("Group");
            echo "</th>
\t\t\t\t<td>
\t\t\t\t\t<ul style=\"padding:5px 8px;list-style:none\">
\t\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "groups", []));
            foreach ($context['_seq'] as $context["group_value"] => $context["group_name"]) {
                if (($context["group_name"] != "Disabled")) {
                    // line 36
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type\" id=\"group_";
                    // line 37
                    echo $context["group_name"];
                    echo "\" value=\"";
                    echo $context["group_value"];
                    echo "\"> 
\t\t\t\t\t\t\t\t<label for=\"group_";
                    // line 38
                    echo $context["group_name"];
                    echo "\">";
                    echo gettext($context["group_name"]);
                    echo "</label>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['group_value'], $context['group_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t\t</ul>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 45
        echo "\t\t<tr>
\t\t\t<th>";
        // line 46
        echo gettext("Boards");
        echo "</th>
\t\t\t<td>
\t\t\t\t<ul style=\"padding:0 5px;list-style:none\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"allboards\" name=\"allboards\"
\t\t\t\t\t\t";
        // line 51
        if (twig_in_filter("*", $this->getAttribute(($context["user"] ?? null), "boards", []))) {
            echo " checked";
        }
        // line 52
        echo "\t\t\t\t\t\t";
        if ( !twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "editusers", []))) {
            // line 53
            echo "\t\t\t\t\t\t disabled
\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t> 
\t\t\t\t\t\t<label for=\"allboards\">\"*\" - ";
        // line 56
        echo gettext("All boards");
        echo "</label>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["boards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
            // line 59
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"board_";
            // line 60
            echo $this->getAttribute($context["board"], "uri", []);
            echo "\" name=\"board_";
            echo $this->getAttribute($context["board"], "uri", []);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 61
            if (twig_in_filter($this->getAttribute($context["board"], "uri", []), $this->getAttribute(($context["user"] ?? null), "boards", []))) {
                echo " checked";
            }
            // line 62
            echo "\t\t\t\t\t\t\t\t";
            if ( !twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "editusers", []))) {
                // line 63
                echo "\t\t\t\t\t\t\t\t disabled
\t\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t\t> 
\t\t\t\t\t\t\t<label for=\"board_";
            // line 66
            echo $this->getAttribute($context["board"], "uri", []);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 67
            echo sprintf($this->getAttribute(($context["config"] ?? null), "board_abbreviation", []), $this->getAttribute($context["board"], "uri", []));
            echo "
\t\t\t\t\t\t\t\t - 
\t\t\t\t\t\t\t\t";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "title", []));
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t</table>
\t
\t<ul style=\"padding:0;text-align:center;list-style:none\">
\t\t";
        // line 79
        if (($context["new"] ?? null)) {
            // line 80
            echo "\t\t\t<li><input type=\"submit\" value=\"";
            echo gettext("Create user");
            echo "\"></li>
\t\t";
        } else {
            // line 82
            echo "\t\t\t<li><input type=\"submit\" value=\"";
            echo gettext("Save changes");
            echo "\"></li>
\t\t\t";
            // line 83
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "deleteusers", []))) {
                // line 84
                echo "\t\t\t\t<li><input name=\"delete\" onclick=\"return confirm('Are you sure you want to permanently delete this user?');\" type=\"submit\" value=\"";
                echo gettext("Delete user");
                echo "\"></li>
\t\t\t";
            }
            // line 86
            echo "\t\t";
        }
        // line 87
        echo "\t</ul>
</form>

";
        // line 90
        if ((($context["logs"] ?? null) && (count(($context["logs"] ?? null)) > 0))) {
            // line 91
            echo "\t<table class=\"modlog\" style=\"width:600px\">
\t\t<tr>
\t\t\t<th>";
            // line 93
            echo gettext("IP address");
            echo "</th>\t\t\t
\t\t\t<th>";
            // line 94
            echo gettext("Time");
            echo "</th>
\t\t\t<th>";
            // line 95
            echo gettext("Board");
            echo "</th>
\t\t\t<th>";
            // line 96
            echo gettext("Action");
            echo "</th>
\t\t</tr>
\t\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 99
                echo "\t\t\t<tr>
\t\t\t\t<td class=\"minimal\">
\t\t\t\t\t<a href=\"?/IP/";
                // line 101
                echo cloak_ip($this->getAttribute($context["log"], "ip", []));
                echo "\">";
                echo cloak_ip($this->getAttribute($context["log"], "ip", []));
                echo "</a>
\t\t\t\t</td>
\t\t\t\t<td class=\"minimal\">
\t\t\t\t\t<span title=\"";
                // line 104
                echo twig_date_filter($this->getAttribute($context["log"], "time", []), $this->getAttribute(($context["config"] ?? null), "post_date", []));
                echo "\">";
                echo ago($this->getAttribute($context["log"], "time", []));
                echo "</span>
\t\t\t\t</td>
\t\t\t\t<td class=\"minimal\">
\t\t\t\t\t";
                // line 107
                if ($this->getAttribute($context["log"], "board", [])) {
                    // line 108
                    echo "\t\t\t\t\t\t<a href=\"?/";
                    echo sprintf($this->getAttribute(($context["config"] ?? null), "board_path", []), $this->getAttribute($context["log"], "board", []));
                    echo $this->getAttribute(($context["config"] ?? null), "file_index", []);
                    echo "\">";
                    echo sprintf($this->getAttribute(($context["config"] ?? null), "board_abbreviation", []), $this->getAttribute($context["log"], "board", []));
                    echo "</a>
\t\t\t\t\t";
                } else {
                    // line 110
                    echo "\t\t\t\t\t\t-
\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
                // line 114
                echo $this->getAttribute($context["log"], "text", []);
                echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "\t</table>
\t<p style=\"text-align:center\" class=\"unimportant\">
\t\t<a href=\"?/log:";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", []));
            echo "\">";
            echo gettext("View more logs for this user.");
            echo "</a>
\t</p>
";
        }
        // line 123
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod/user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 123,  337 => 120,  333 => 118,  323 => 114,  319 => 112,  315 => 110,  306 => 108,  304 => 107,  296 => 104,  288 => 101,  284 => 99,  280 => 98,  275 => 96,  271 => 95,  267 => 94,  263 => 93,  259 => 91,  257 => 90,  252 => 87,  249 => 86,  243 => 84,  241 => 83,  236 => 82,  230 => 80,  228 => 79,  220 => 73,  210 => 69,  205 => 67,  201 => 66,  198 => 65,  194 => 63,  191 => 62,  187 => 61,  181 => 60,  178 => 59,  174 => 58,  169 => 56,  166 => 55,  162 => 53,  159 => 52,  155 => 51,  147 => 46,  144 => 45,  138 => 41,  126 => 38,  120 => 37,  117 => 36,  112 => 35,  106 => 32,  103 => 31,  101 => 30,  97 => 28,  93 => 26,  89 => 24,  87 => 23,  77 => 21,  72 => 18,  66 => 16,  60 => 14,  58 => 13,  53 => 11,  47 => 8,  43 => 7,  40 => 6,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/user.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/user.html");
    }
}
