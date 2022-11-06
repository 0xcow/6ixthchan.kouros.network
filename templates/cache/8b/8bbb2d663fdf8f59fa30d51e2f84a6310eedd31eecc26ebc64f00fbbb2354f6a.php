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

/* post_form.html */
class __TwigTemplate_bc50554c2eeb99e6d4ede4ea4d26a3de341b896b869a57e10768cb6813174c5d extends \Twig\Template
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
        echo "<form name=\"post\" onsubmit=\"return dopost(this);\" enctype=\"multipart/form-data\" action=\"";
        echo $this->getAttribute(($context["config"] ?? null), "post_url", []);
        echo "\" method=\"post\">
";
        // line 2
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
";
        // line 3
        if (($context["id"] ?? null)) {
            echo "<input type=\"hidden\" name=\"thread\" value=\"";
            echo ($context["id"] ?? null);
            echo "\">";
        }
        // line 4
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
<input type=\"hidden\" name=\"board\" value=\"";
        // line 5
        echo $this->getAttribute(($context["board"] ?? null), "uri", []);
        echo "\">
";
        // line 6
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
";
        // line 7
        if (($context["current_page"] ?? null)) {
            // line 8
            echo "\t<input type=\"hidden\" name=\"page\" value=\"";
            echo ($context["current_page"] ?? null);
            echo "\">
";
        }
        // line 10
        if (($context["mod"] ?? null)) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\">";
        }
        // line 11
        echo "\t<table>
\t\t";
        // line 12
        if (( !$this->getAttribute(($context["config"] ?? null), "field_disable_name", []) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            echo "<tr>
\t\t\t<th>
\t\t\t\t";
            // line 14
            echo gettext("Name");
            // line 15
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"name\" size=\"25\" maxlength=\"35\" autocomplete=\"off\"> ";
            // line 18
            if (($this->getAttribute(($context["config"] ?? null), "allow_no_country", []) && $this->getAttribute(($context["config"] ?? null), "country_flags", []))) {
                echo "<input id=\"no_country\" name=\"no_country\" type=\"checkbox\"> <label for=\"no_country\">";
                echo gettext("Don't show my flag");
                echo "</label>";
            }
            // line 19
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</td>
\t\t</tr>";
        }
        // line 22
        echo "\t\t";
        if (( !$this->getAttribute(($context["config"] ?? null), "field_disable_email", []) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            echo "<tr>
\t\t\t<th>
\t\t\t\t";
            // line 24
            echo gettext("Email");
            // line 25
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t";
            // line 28
            if ($this->getAttribute(($context["config"] ?? null), "field_email_selectbox", [])) {
                // line 29
                echo "\t\t\t\t<select name=\"email\" id=\"email_selectbox\" autocomplete=\"off\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t<option value=\"sage\">sage</option>
\t\t\t\t\t";
                // line 32
                if ( !$this->getAttribute(($context["config"] ?? null), "always_noko", [])) {
                    echo "<option value=\"noko\">noko</option>";
                }
                // line 33
                echo "\t\t\t\t</select>
\t\t\t\t";
            } else {
                // line 35
                echo "\t\t\t\t<input type=\"text\" name=\"email\" size=\"25\" maxlength=\"40\" autocomplete=\"off\">
\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t\t";
            // line 38
            if ( !( !($this->getAttribute(($context["config"] ?? null), "field_disable_subject", []) || (($context["id"] ?? null) && $this->getAttribute(($context["config"] ?? null), "field_disable_reply_subject", []))) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
                // line 39
                echo "\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"";
                if (($context["id"] ?? null)) {
                    echo $this->getAttribute(($context["config"] ?? null), "button_reply", []);
                } else {
                    echo $this->getAttribute(($context["config"] ?? null), "button_newtopic", []);
                }
                echo "\" />";
                if ($this->getAttribute(($context["config"] ?? null), "spoiler_images", [])) {
                    echo " <input id=\"spoiler\" name=\"spoiler\" type=\"checkbox\"> <label for=\"spoiler\">";
                    echo gettext("Spoiler Image");
                    echo "</label>\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</td>
\t\t</tr>";
        }
        // line 44
        echo "\t\t";
        if (( !($this->getAttribute(($context["config"] ?? null), "field_disable_subject", []) || (($context["id"] ?? null) && $this->getAttribute(($context["config"] ?? null), "field_disable_reply_subject", []))) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            echo "<tr>
\t\t\t<th>
\t\t\t\t";
            // line 46
            echo gettext("Subject");
            // line 47
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input style=\"float:left;\" type=\"text\" name=\"subject\" size=\"25\" maxlength=\"100\" autocomplete=\"off\">
\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"";
            // line 51
            if (($context["id"] ?? null)) {
                echo $this->getAttribute(($context["config"] ?? null), "button_reply", []);
            } else {
                echo $this->getAttribute(($context["config"] ?? null), "button_newtopic", []);
            }
            echo "\" />";
            if ($this->getAttribute(($context["config"] ?? null), "spoiler_images", [])) {
                echo " <input id=\"spoiler\" name=\"spoiler\" type=\"checkbox\"> <label for=\"spoiler\">";
                echo gettext("Spoiler Image");
                echo "</label>";
            }
            // line 52
            echo "\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 55
        echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t";
        // line 57
        echo gettext("Comment");
        // line 58
        echo "\t\t\t\t";
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<textarea name=\"body\" id=\"body\" rows=\"5\" cols=\"35\"></textarea>
\t\t\t\t";
        // line 62
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
\t\t\t\t";
        // line 63
        if ( !( !($this->getAttribute(($context["config"] ?? null), "field_disable_subject", []) || (($context["id"] ?? null) && $this->getAttribute(($context["config"] ?? null), "field_disable_reply_subject", []))) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            // line 64
            echo "\t\t\t\t";
            if ( !( !$this->getAttribute(($context["config"] ?? null), "field_disable_email", []) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
                // line 65
                echo "\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"";
                if (($context["id"] ?? null)) {
                    echo $this->getAttribute(($context["config"] ?? null), "button_reply", []);
                } else {
                    echo $this->getAttribute(($context["config"] ?? null), "button_newtopic", []);
                }
                echo "\" />";
                if ($this->getAttribute(($context["config"] ?? null), "spoiler_images", [])) {
                    echo " <input id=\"spoiler\" name=\"spoiler\" type=\"checkbox\"> <label for=\"spoiler\">";
                    echo gettext("Spoiler Image");
                    echo "</label>";
                }
                // line 66
                echo "\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t";
        }
        // line 68
        echo "\t\t\t</td>
\t\t</tr>
\t\t";
        // line 70
        if ($this->getAttribute(($context["config"] ?? null), "recaptcha", [])) {
            // line 71
            echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t";
            // line 73
            echo gettext("Verification");
            // line 74
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 77
            echo $this->getAttribute(($context["config"] ?? null), "recaptcha_public", []);
            echo "\"></div>
\t\t\t\t";
            // line 78
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 82
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "enabled", [])) {
            // line 83
            echo "\t\t<tr class='captcha'>
\t\t\t<th>
\t\t\t\t";
            // line 85
            echo gettext("Verification");
            // line 86
            echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t<script>load_captcha(\"";
            // line 88
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "provider_get", []);
            echo "\", \"";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "extra", []);
            echo "\");</script>
\t\t\t\t<noscript>
\t\t\t\t\t<input class='captcha_text' type='text' name='captcha_text' size='32' maxlength='6' autocomplete='off'>
\t\t\t\t\t<div class=\"captcha_html\">
\t\t\t\t\t\t<img src=\"/";
            // line 92
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "provider_get", []);
            echo "?mode=get&raw=1\">
\t\t\t\t\t</div>
\t\t\t\t</noscript>
\t\t\t</td>
\t\t</tr>
\t\t\t";
        } elseif ($this->getAttribute(        // line 97
($context["config"] ?? null), "new_thread_capt", [])) {
            // line 98
            echo " \t\t\t";
            if ( !($context["id"] ?? null)) {
                echo " 
 \t\t\t<tr class='captcha'>
                        <th>
                                ";
                // line 101
                echo gettext("Verification");
                // line 102
                echo "                        </th>
                        <td>
                                <script>load_captcha(\"";
                // line 104
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "provider_get", []);
                echo "\", \"";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "extra", []);
                echo "\");</script>
\t\t\t\t<noscript>
\t\t\t\t\t<input class='captcha_text' type='text' name='captcha_text' size='32' maxlength='6' autocomplete='off'>
\t\t\t\t\t<div class=\"captcha_html\">
\t\t\t\t\t\t<img src=\"/";
                // line 108
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "provider_get", []);
                echo "?mode=get&raw=1\">
\t\t\t\t\t</div>
\t\t\t\t</noscript>
                        </td>
                \t</tr>
\t\t\t";
            }
            // line 114
            echo "\t\t";
        }
        // line 115
        echo "\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "user_flag", [])) {
            // line 116
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 117
            echo gettext("Flag");
            echo "</th>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"user_flag\" id=\"user_flag\">
\t\t\t\t\t\t<option value=\"\">";
            // line 120
            echo gettext("None");
            echo "</option>
\t\t\t\t\t\t";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "user_flags", []));
            foreach ($context['_seq'] as $context["flag"] => $context["text"]) {
                // line 122
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo $context["flag"];
                echo "\">";
                echo $context["text"];
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 128
        echo "\t\t";
        if (($this->getAttribute(($context["config"] ?? null), "allowed_tags", []) &&  !($context["id"] ?? null))) {
            // line 129
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 130
            echo gettext("Tag");
            echo "</th>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"tag\">
\t\t\t\t\t\t";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "allowed_tags", []));
            foreach ($context['_seq'] as $context["id"] => $context["tag"]) {
                // line 134
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["id"]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["tag"]);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 140
        echo "\t\t<tr id=\"upload\">
\t\t\t<th>
\t\t\t\t";
        // line 142
        echo gettext("File");
        // line 143
        echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"file\" name=\"file\" id=\"upload_file\">

\t\t\t\t<script type=\"text/javascript\">if (typeof init_file_selector !== 'undefined') init_file_selector(";
        // line 147
        echo $this->getAttribute(($context["config"] ?? null), "max_images", []);
        echo ");</script>

\t\t\t\t";
        // line 149
        if ($this->getAttribute(($context["config"] ?? null), "allow_upload_by_url", [])) {
            // line 150
            echo "\t\t\t\t\t<div style=\"float:none;text-align:left\" id=\"upload_url\">
\t\t\t\t\t\t<label for=\"file_url\">";
            // line 151
            echo gettext("Or URL");
            echo "</label>: 
\t\t\t\t\t\t<input style=\"display:inline\" type=\"text\" id=\"file_url\" name=\"file_url\" size=\"35\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t";
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 158
        if ($this->getAttribute(($context["config"] ?? null), "enable_embedding", [])) {
            // line 159
            echo "\t\t<tr id=\"upload_embed\">
\t\t\t<th>
\t\t\t\t";
            // line 161
            echo gettext("Embed");
            // line 162
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"embed\" value=\"\" size=\"30\" maxlength=\"120\" autocomplete=\"off\">
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 169
        echo "\t\t";
        if ((($context["mod"] ?? null) && ((( !($context["id"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "sticky", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) || ( !($context["id"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "lock", []), $this->getAttribute(($context["board"] ?? null), "uri", [])))) || twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "rawhtml", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            // line 170
            echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t";
            // line 172
            echo gettext("Flags");
            // line 173
            echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t";
            // line 175
            if (( !($context["id"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "sticky", []), $this->getAttribute(($context["board"] ?? null), "uri", [])))) {
                echo "<div class=\"center\">
\t\t\t\t\t<label for=\"sticky\">";
                // line 176
                echo gettext("Sticky");
                echo "</label>
\t\t\t\t\t<input title=\"";
                // line 177
                echo gettext("Sticky");
                echo "\" type=\"checkbox\" name=\"sticky\" id=\"sticky\"><br>
\t\t\t\t</div>";
            }
            // line 179
            echo "\t\t\t\t";
            if (( !($context["id"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "lock", []), $this->getAttribute(($context["board"] ?? null), "uri", [])))) {
                echo "<div class=\"center\">
\t\t\t\t\t<label for=\"lock\">";
                // line 180
                echo gettext("Lock");
                echo "</label><br>
\t\t\t\t\t<input title=\"";
                // line 181
                echo gettext("Lock");
                echo "\" type=\"checkbox\" name=\"lock\" id=\"lock\">
\t\t\t\t</div>";
            }
            // line 183
            echo "\t\t\t\t";
            if (twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "rawhtml", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                echo "<div class=\"center\">
\t\t\t\t\t<label for=\"raw\">";
                // line 184
                echo gettext("Raw HTML");
                echo "</label><br>
\t\t\t\t\t<input title=\"";
                // line 185
                echo gettext("Raw HTML");
                echo "\" type=\"checkbox\" name=\"raw\" id=\"raw\">
\t\t\t\t</div>";
            }
            // line 187
            echo "\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 190
        echo "\t\t";
        if (( !$this->getAttribute(($context["config"] ?? null), "field_disable_password", []) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            echo "<tr>
\t\t\t<th>
\t\t\t\t";
            // line 192
            echo gettext("Password");
            // line 193
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"password\" value=\"\" size=\"12\" maxlength=\"18\" autocomplete=\"off\"> 
\t\t\t\t<span class=\"unimportant\">";
            // line 197
            echo gettext("(For file deletion.)");
            echo "</span>
\t\t\t\t";
            // line 198
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</td>
\t\t</tr>";
        }
        // line 201
        echo "\t</table>
";
        // line 202
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [0 => true], "method");
        echo "
<input type=\"hidden\" name=\"hash\" value=\"";
        // line 203
        echo $this->getAttribute(($context["antibot"] ?? null), "hash", [], "method");
        echo "\">
</form>

<script type=\"text/javascript\">";
        // line 208
        echo "
\trememberStuff();
";
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "post_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 208,  551 => 203,  547 => 202,  544 => 201,  538 => 198,  534 => 197,  526 => 193,  524 => 192,  518 => 190,  513 => 187,  508 => 185,  504 => 184,  499 => 183,  494 => 181,  490 => 180,  485 => 179,  480 => 177,  476 => 176,  472 => 175,  468 => 173,  466 => 172,  462 => 170,  459 => 169,  448 => 162,  446 => 161,  442 => 159,  440 => 158,  433 => 155,  426 => 151,  423 => 150,  421 => 149,  416 => 147,  410 => 143,  408 => 142,  404 => 140,  398 => 136,  387 => 134,  383 => 133,  377 => 130,  374 => 129,  371 => 128,  365 => 124,  354 => 122,  350 => 121,  346 => 120,  340 => 117,  337 => 116,  334 => 115,  331 => 114,  322 => 108,  313 => 104,  309 => 102,  307 => 101,  300 => 98,  298 => 97,  290 => 92,  281 => 88,  277 => 86,  275 => 85,  271 => 83,  268 => 82,  261 => 78,  257 => 77,  250 => 74,  248 => 73,  244 => 71,  242 => 70,  238 => 68,  235 => 67,  232 => 66,  219 => 65,  216 => 64,  214 => 63,  210 => 62,  202 => 58,  200 => 57,  196 => 55,  191 => 52,  179 => 51,  171 => 47,  169 => 46,  163 => 44,  156 => 41,  153 => 40,  140 => 39,  138 => 38,  133 => 37,  129 => 35,  125 => 33,  121 => 32,  116 => 29,  114 => 28,  107 => 25,  105 => 24,  99 => 22,  92 => 19,  86 => 18,  79 => 15,  77 => 14,  72 => 12,  69 => 11,  65 => 10,  59 => 8,  57 => 7,  53 => 6,  49 => 5,  45 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post_form.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/post_form.html");
    }
}
