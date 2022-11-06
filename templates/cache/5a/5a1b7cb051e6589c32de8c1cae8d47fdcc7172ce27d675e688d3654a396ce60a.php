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

/* mod/dashboard.html */
class __TwigTemplate_cc8bb98971b75efbb4c4800b990e57d7b1f656cfbf0eb5dc7651d682b4ada313 extends \Twig\Template
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
        echo "<fieldset>
\t<legend>";
        // line 2
        echo gettext("Boards");
        echo "</legend>
\t
\t<ul>
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["boards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
            // line 6
            echo "\t\t\t<li>
\t\t\t\t<a href=\"?/";
            // line 7
            echo sprintf($this->getAttribute(($context["config"] ?? null), "board_path", []), $this->getAttribute($context["board"], "uri", []));
            echo $this->getAttribute(($context["config"] ?? null), "file_index", []);
            echo "\">";
            echo sprintf($this->getAttribute(($context["config"] ?? null), "board_abbreviation", []), $this->getAttribute($context["board"], "uri", []));
            echo "</a>
\t\t\t\t\t - 
\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "title", []));
            echo "
\t\t\t\t";
            // line 10
            if ($this->getAttribute($context["board"], "subtitle", [])) {
                // line 11
                echo "\t\t\t\t\t<small>&mdash; 
\t\t\t\t\t\t";
                // line 12
                if ($this->getAttribute(($context["config"] ?? null), "allow_subtitle_html", [])) {
                    // line 13
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["board"], "subtitle", []);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "subtitle", []));
                    echo "
\t\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t\t</small>
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t";
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "manageboards", []))) {
                // line 20
                echo "\t\t\t\t\t <a href=\"?/edit/";
                echo $this->getAttribute($context["board"], "uri", []);
                echo "\"><small>[";
                echo gettext("edit");
                echo "]</small></a>
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t";
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "edit_pages", []))) {
                // line 23
                echo "\t\t\t\t\t <a href=\"?/edit_pages/";
                echo $this->getAttribute($context["board"], "uri", []);
                echo "\"><small>[";
                echo gettext("pages");
                echo "]</small></a>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t
\t\t";
        // line 28
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "newboard", []))) {
            // line 29
            echo "\t\t\t<li style=\"margin-top:15px\"><a href=\"?/new-board\"><strong>";
            echo gettext("Create new board");
            echo "</strong></a></li>
\t\t";
        }
        // line 31
        echo "\t</ul>
</fieldset>

<fieldset>
\t<legend>";
        // line 35
        echo gettext("Messages");
        echo "</legend>
\t<ul>
\t\t";
        // line 37
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "noticeboard", []))) {
            // line 38
            echo "\t\t\t";
            if ((count(($context["noticeboard"] ?? null)) > 0)) {
                // line 39
                echo "\t\t\t\t<li>
\t\t\t\t\t";
                // line 40
                echo gettext("Noticeboard");
                echo ":
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["noticeboard"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 43
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"?/noticeboard#";
                    // line 44
                    echo $this->getAttribute($context["post"], "id", []);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 45
                    if ($this->getAttribute($context["post"], "subject", [])) {
                        // line 46
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "subject", []));
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t\t\t<em>";
                        echo gettext("no subject");
                        echo "</em>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 50
                    echo "\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t<small class=\"unimportant\">
\t\t\t\t\t\t\t\t\t&mdash; by 
\t\t\t\t\t\t\t\t\t";
                    // line 53
                    if ($this->getAttribute($context["post"], "username", [])) {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "username", []));
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t\t\t<em>deleted?</em>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 57
                    echo " 
\t\t\t\t\t\t\t\t\tat 
\t\t\t\t\t\t\t\t\t";
                    // line 59
                    echo twig_date_filter($this->getAttribute($context["post"], "time", []), $this->getAttribute(($context["config"] ?? null), "post_date", []));
                    echo " 
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t";
            }
            // line 66
            echo "\t\t\t<li><a href=\"?/noticeboard\">";
            echo gettext("View all noticeboard entries");
            echo "</a></li>
\t\t";
        }
        // line 68
        echo "\t\t<li><a href=\"?/edit_news\">";
        echo gettext("News");
        echo "</a></li>
\t\t<li>
\t\t\t<a href=\"?/inbox\">
\t\t\t\t";
        // line 71
        echo gettext("PM inbox");
        echo " 
\t\t\t\t";
        // line 72
        if ((($context["unread_pms"] ?? null) > 0)) {
            echo "<strong>";
        }
        echo "(";
        echo ($context["unread_pms"] ?? null);
        echo " unread)";
        if ((($context["unread_pms"] ?? null) > 0)) {
            echo "</strong>";
        }
        // line 73
        echo "\t\t\t</a>
\t\t</li>
\t</ul>
</fieldset>

<fieldset>
\t<legend>";
        // line 79
        echo gettext("Administration");
        echo "</legend>
\t
\t<ul>
\t\t";
        // line 82
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "reports", []))) {
            // line 83
            echo "\t\t\t<li>
\t\t\t\t";
            // line 84
            if ((($context["reports"] ?? null) > 0)) {
                echo "<strong>";
            }
            // line 85
            echo "\t\t\t\t\t<a href=\"?/reports\">";
            echo gettext("Report queue");
            echo " (";
            echo ($context["reports"] ?? null);
            echo ")</a>
\t\t\t\t";
            // line 86
            if ((($context["reports"] ?? null) > 0)) {
                echo "</strong>";
            }
            // line 87
            echo "\t\t\t</li>
\t\t";
        }
        // line 89
        echo "\t\t";
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "view_banlist", []))) {
            // line 90
            echo "\t\t\t<li><a href=\"?/bans\">";
            echo gettext("Ban list");
            echo "</a></li>
\t\t";
        }
        // line 92
        echo "\t\t";
        if (($this->getAttribute(($context["config"] ?? null), "ban_appeals", []) && twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "view_ban_appeals", [])))) {
            // line 93
            echo "\t\t\t<li><a href=\"?/ban-appeals\">";
            echo gettext("Ban appeals");
            echo "</a></li>
\t\t";
        }
        // line 95
        echo "\t\t";
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "manageusers", []))) {
            // line 96
            echo "\t\t\t<li><a href=\"?/users\">";
            echo gettext("Manage users");
            echo "</a></li>
\t\t";
        } elseif (twig_hasPermission_filter(        // line 97
($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "change_password", []))) {
            // line 98
            echo "\t\t\t<li><a href=\"?/users/";
            echo $this->getAttribute(($context["mod"] ?? null), "id", []);
            echo "\">";
            echo gettext("Change password");
            echo "</a></li>
\t\t";
        }
        // line 100
        echo "\t\t";
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "themes", []))) {
            // line 101
            echo "\t\t\t<li><a href=\"?/themes\">";
            echo gettext("Manage themes");
            echo "</a></li>
\t\t";
        }
        // line 103
        echo "\t\t";
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "modlog", []))) {
            // line 104
            echo "\t\t\t<li><a href=\"?/log\">";
            echo gettext("Moderation log");
            echo "</a></li>
\t\t";
        }
        // line 106
        echo "\t\t";
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "edit_pages", []))) {
            // line 107
            echo "\t\t\t<li><a href=\"?/edit_pages\">";
            echo gettext("Global static pages");
            echo "</a></li>
\t\t";
        }
        // line 109
        echo "\t\t";
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "recent", []))) {
            // line 110
            echo "\t\t\t<li><a href=\"?/recent/25\">";
            echo gettext("Recent posts");
            echo "</a></li>
\t\t";
        }
        // line 112
        echo "\t\t";
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "rebuild", []))) {
            // line 113
            echo "\t\t\t<li><a href=\"?/rebuild\">";
            echo gettext("Rebuild");
            echo "</a></li>
\t\t";
        }
        // line 115
        echo "\t\t";
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "edit_config", []))) {
            // line 116
            echo "\t\t\t<li><a href=\"?/config\">";
            echo gettext("Configuration");
            echo "</a></li>
\t\t";
        }
        // line 118
        echo "\t\t
\t</ul>
</fieldset>

";
        // line 122
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "search", []))) {
            // line 123
            echo "\t<fieldset>
\t\t<legend>";
            // line 124
            echo gettext("Search");
            echo "</legend>
\t\t
\t\t<ul>
\t\t\t<li>
\t\t\t\t";
            // line 128
            $this->loadTemplate("mod/search_form.html", "mod/dashboard.html", 128)->display($context);
            // line 129
            echo "\t\t\t</li>
\t\t</ul>
\t</fieldset>
";
        }
        // line 133
        echo "
";
        // line 134
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "dashboard_links", []) && count($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "dashboard_links", [])))) {
            // line 135
            echo "\t<fieldset>
\t\t<legend>";
            // line 136
            echo gettext("Other");
            echo "</legend>
\t
\t\t<ul>
\t\t\t";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "dashboard_links", []));
            foreach ($context['_seq'] as $context["label"] => $context["link"]) {
                // line 140
                echo "\t\t\t\t<li><a href=\"";
                echo $context["link"];
                echo "\">";
                echo $context["label"];
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t</ul>
\t</fieldset>
";
        }
        // line 145
        echo "
";
        // line 146
        if ($this->getAttribute(($context["config"] ?? null), "debug", [])) {
            // line 147
            echo "\t<fieldset>
\t\t<legend>";
            // line 148
            echo gettext("Debug");
            echo "</legend>
\t\t<ul>
\t\t\t<li><a href=\"?/debug/antispam\">";
            // line 150
            echo gettext("Anti-spam");
            echo "</a></li>
\t\t\t<li><a href=\"?/debug/recent\">";
            // line 151
            echo gettext("Recent posts");
            echo "</a></li>
\t\t\t";
            // line 152
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "debug_sql", []))) {
                // line 153
                echo "\t\t\t\t<li><a href=\"?/debug/sql\">";
                echo gettext("SQL");
                echo "</a></li>
\t\t\t";
            }
            // line 155
            echo "\t\t</ul>
\t</fieldset>
";
        }
        // line 158
        echo "
";
        // line 159
        if (($context["newer_release"] ?? null)) {
            // line 160
            echo "\t<fieldset>
\t\t<legend>Update</legend>
\t\t<ul>
\t\t\t<li>
\t\t\t\tA newer version of vichan 
\t\t\t\t(<strong>v";
            // line 165
            echo $this->getAttribute(($context["newer_release"] ?? null), "massive", []);
            echo ".";
            echo $this->getAttribute(($context["newer_release"] ?? null), "major", []);
            echo ".";
            echo $this->getAttribute(($context["newer_release"] ?? null), "minor", []);
            echo "</strong>) is available! 
\t\t\t\tSee <a href=\"https://engine.vichan.net\">https://engine.vichan.net/</a> for upgrade instructions.
\t\t\t</li>
\t\t</ul>
\t</fieldset>
";
        }
        // line 171
        echo "
<fieldset>
\t<legend>";
        // line 173
        echo gettext("User account");
        echo "</legend>
\t
\t<ul>
\t\t<li><a href=\"?/logout/";
        // line 176
        echo ($context["logout_token"] ?? null);
        echo "\">";
        echo gettext("Logout");
        echo "</a></li>
\t</ul>
</fieldset>

";
    }

    public function getTemplateName()
    {
        return "mod/dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 176,  484 => 173,  480 => 171,  467 => 165,  460 => 160,  458 => 159,  455 => 158,  450 => 155,  444 => 153,  442 => 152,  438 => 151,  434 => 150,  429 => 148,  426 => 147,  424 => 146,  421 => 145,  416 => 142,  405 => 140,  401 => 139,  395 => 136,  392 => 135,  390 => 134,  387 => 133,  381 => 129,  379 => 128,  372 => 124,  369 => 123,  367 => 122,  361 => 118,  355 => 116,  352 => 115,  346 => 113,  343 => 112,  337 => 110,  334 => 109,  328 => 107,  325 => 106,  319 => 104,  316 => 103,  310 => 101,  307 => 100,  299 => 98,  297 => 97,  292 => 96,  289 => 95,  283 => 93,  280 => 92,  274 => 90,  271 => 89,  267 => 87,  263 => 86,  256 => 85,  252 => 84,  249 => 83,  247 => 82,  241 => 79,  233 => 73,  223 => 72,  219 => 71,  212 => 68,  206 => 66,  201 => 63,  191 => 59,  187 => 57,  183 => 56,  177 => 54,  175 => 53,  170 => 50,  164 => 48,  158 => 46,  156 => 45,  152 => 44,  149 => 43,  145 => 42,  140 => 40,  137 => 39,  134 => 38,  132 => 37,  127 => 35,  121 => 31,  115 => 29,  113 => 28,  110 => 27,  103 => 25,  95 => 23,  92 => 22,  84 => 20,  81 => 19,  77 => 17,  71 => 15,  65 => 13,  63 => 12,  60 => 11,  58 => 10,  54 => 9,  46 => 7,  43 => 6,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/dashboard.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/dashboard.html");
    }
}
