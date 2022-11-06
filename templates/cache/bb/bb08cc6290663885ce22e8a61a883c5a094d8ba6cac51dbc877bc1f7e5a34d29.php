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

/* mod/users.html */
class __TwigTemplate_c96d1f6a998c56672ca273be3e65f1d15048955f57ad5af703ab199e9e7bd4c7 extends \Twig\Template
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
        echo "<table class=\"modlog\" style=\"width:auto\">
\t<tr>
\t\t<th>";
        // line 3
        echo gettext("ID");
        echo "</th>
\t\t<th>";
        // line 4
        echo gettext("Username");
        echo "</th>
\t\t<th>";
        // line 5
        echo gettext("Type");
        echo "</th>
\t\t<th>";
        // line 6
        echo gettext("Boards");
        echo "</th>
\t\t";
        // line 7
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "modlog", []))) {
            // line 8
            echo "\t\t\t<th>";
            echo gettext("Last action");
            echo "</th>
\t\t";
        }
        // line 10
        echo "\t\t<th>&hellip;</th>
\t</tr>
\t
\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 14
            echo "\t\t<tr>
\t\t\t<td><small>";
            // line 15
            echo $this->getAttribute($context["user"], "id", []);
            echo "</small></td>
\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []));
            echo "</td>
\t\t\t<td>
\t\t\t\t";
            // line 18
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "groups", []), $this->getAttribute($context["user"], "type", []), [], "array")) {
                // line 19
                echo "\t\t\t\t\t";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "groups", []), $this->getAttribute($context["user"], "type", []), [], "array");
                echo "
\t\t\t\t";
            } else {
                // line 21
                echo "\t\t\t\t\t<em>";
                echo gettext("Unknown");
                echo "</em> (";
                echo $this->getAttribute($context["user"], "type", []);
                echo ")
\t\t\t\t";
            }
            // line 23
            echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 25
            if (($this->getAttribute($context["user"], "boards", []) == "")) {
                // line 26
                echo "\t\t\t\t\t<em>";
                echo gettext("none");
                echo "</em>
\t\t\t\t";
            } elseif (($this->getAttribute(            // line 27
$context["user"], "boards", []) == "*")) {
                // line 28
                echo "\t\t\t\t\t<em>";
                echo gettext("all boards");
                echo "</em>
\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t";
                // line 31
                echo "\t\t\t\t\t";
                $context["boards"] = twig_split_filter($this->env, $this->getAttribute($context["user"], "boards", []), ",");
                // line 32
                echo "\t\t\t\t\t";
                $context["_boards"] = [];
                // line 33
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["boards"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
                    // line 34
                    echo "\t\t\t\t\t\t";
                    $context["_boards"] = twig_push_filter(($context["_boards"] ?? null), ((($context["board"] == "*")) ? ("*") : (sprintf($this->getAttribute(($context["config"] ?? null), "board_abbreviation", []), $context["board"]))));
                    // line 35
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t\t\t";
                $context["_boards"] = twig_sort_filter(($context["_boards"] ?? null));
                // line 37
                echo "\t\t\t\t\t";
                echo twig_join_filter(($context["_boards"] ?? null), ", ");
                echo "
\t\t\t\t";
            }
            // line 39
            echo "\t\t\t</td>
\t\t\t";
            // line 40
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "modlog", []))) {
                // line 41
                echo "\t\t\t\t<td>
\t\t\t\t\t";
                // line 42
                if ($this->getAttribute($context["user"], "last", [])) {
                    // line 43
                    echo "\t\t\t\t\t\t<span title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "action", []));
                    echo "\">";
                    echo ago($this->getAttribute($context["user"], "last", []));
                    echo "</span>
\t\t\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t\t\t<em>";
                    echo gettext("never");
                    echo "</em>
\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t</td>
\t\t\t";
            }
            // line 49
            echo "\t\t\t<td>
\t\t\t\t";
            // line 50
            if ((twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "promoteusers", [])) && ($this->getAttribute($context["user"], "type", []) < twig_constant(twig_upper_filter($this->env, twig_last($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "groups", []), 0,  -1))))))) {
                // line 51
                echo "\t\t\t\t\t<a style=\"float:left;text-decoration:none\" href=\"?/users/";
                echo $this->getAttribute($context["user"], "id", []);
                echo "/promote/";
                echo $this->getAttribute($context["user"], "promote_token", []);
                echo "\" title=\"";
                echo gettext("Promote");
                echo "\">&#9650;</a> 
\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t";
            if ((twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "promoteusers", [])) && ($this->getAttribute($context["user"], "type", []) > twig_constant(twig_upper_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "groups", []))))))) {
                // line 54
                echo "\t\t\t\t\t<a style=\"float:left;text-decoration:none\" href=\"?/users/";
                echo $this->getAttribute($context["user"], "id", []);
                echo "/demote/";
                echo $this->getAttribute($context["user"], "demote_token", []);
                echo "\" title=\"";
                echo gettext("Demote");
                echo "\"";
                if (($this->getAttribute(($context["mod"] ?? null), "id", []) == $this->getAttribute($context["user"], "id", []))) {
                    echo " onclick=\"return confirm('";
                    echo gettext("Are you sure you want to demote yourself?");
                    echo "')\"";
                }
                echo ">&#9660;</a> 
\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t";
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "modlog", []))) {
                // line 57
                echo "\t\t\t\t\t<a class=\"unimportant\" style=\"margin-left:5px;float:right\" href=\"?/log:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []));
                echo "\">[";
                echo gettext("log");
                echo "]</a> 
\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t";
            if ((twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "editusers", [])) || (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "change_password", [])) && ($this->getAttribute(($context["mod"] ?? null), "id", []) == $this->getAttribute($context["user"], "id", []))))) {
                // line 60
                echo "\t\t\t\t\t<a class=\"unimportant\" style=\"margin-left:5px;float:right\" href=\"?/users/";
                echo $this->getAttribute($context["user"], "id", []);
                echo "\">[";
                echo gettext("edit");
                echo "]</a> 
\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t";
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "create_pm", []))) {
                // line 63
                echo "\t\t\t\t\t<a class=\"unimportant\" style=\"margin-left:5px;float:right\" href=\"?/new_PM/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []));
                echo "\">[";
                echo gettext("PM");
                echo "]</a>
\t\t\t\t";
            }
            // line 65
            echo "\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</table>

";
        // line 70
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "createusers", []))) {
            // line 71
            echo "\t<p style=\"text-align:center\">
\t\t<a href=\"?/users/new\">Create a new user</a>
\t</p>
";
        }
        // line 75
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod/users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 75,  254 => 71,  252 => 70,  248 => 68,  240 => 65,  232 => 63,  229 => 62,  221 => 60,  218 => 59,  210 => 57,  207 => 56,  191 => 54,  188 => 53,  178 => 51,  176 => 50,  173 => 49,  169 => 47,  163 => 45,  155 => 43,  153 => 42,  150 => 41,  148 => 40,  145 => 39,  139 => 37,  136 => 36,  130 => 35,  127 => 34,  122 => 33,  119 => 32,  116 => 31,  114 => 30,  108 => 28,  106 => 27,  101 => 26,  99 => 25,  95 => 23,  87 => 21,  81 => 19,  79 => 18,  74 => 16,  70 => 15,  67 => 14,  63 => 13,  58 => 10,  52 => 8,  50 => 7,  46 => 6,  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/users.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/users.html");
    }
}
