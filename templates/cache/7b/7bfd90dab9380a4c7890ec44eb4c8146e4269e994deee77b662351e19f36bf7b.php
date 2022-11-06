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

/* mod/noticeboard.html */
class __TwigTemplate_75eccfe41c287bd78d4f32315c2e5531d143e2b6dcd527d227902137f4f86dca extends \Twig\Template
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
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "noticeboard_post", []))) {
            // line 2
            echo "\t<fieldset>
\t\t<legend>";
            // line 3
            echo gettext("New post");
            echo "</legend>
\t\t<form style=\"margin:0\" action=\"?/noticeboard\" method=\"post\">
\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 5
            echo ($context["token"] ?? null);
            echo "\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 8
            echo gettext("Name");
            echo "</th>
\t\t\t\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["mod"] ?? null), "username", []));
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th><label for=\"subject\">";
            // line 12
            echo gettext("Subject");
            echo "</label></th>
\t\t\t\t\t<td><input type=\"text\" size=\"55\" name=\"subject\" id=\"subject\" /></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
            // line 16
            echo gettext("Body");
            echo "</th>
\t\t\t\t\t<td><textarea name=\"body\" style=\"width:100%;height:100px\"></textarea></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<p style=\"text-align:center\">
\t\t\t\t<input type=\"submit\" value=\"";
            // line 21
            echo gettext("Post to noticeboard");
            echo "\" />
\t\t\t</p>
\t\t</form>
\t</fieldset>
";
        }
        // line 26
        echo "
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["noticeboard"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 28
            echo "\t<div class=\"ban\">
\t\t";
            // line 29
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "noticeboard_delete", []))) {
                // line 30
                echo "\t\t\t<span style=\"float:right;padding:2px\">
\t\t\t\t<a class=\"unimportant\" href=\"?/noticeboard/delete/";
                // line 31
                echo $this->getAttribute($context["post"], "id", []);
                echo "/";
                echo $this->getAttribute($context["post"], "delete_token", []);
                echo "\">[";
                echo gettext("delete");
                echo "]</a>
\t\t\t</span>
\t\t";
            }
            // line 34
            echo "\t\t<h2 id=\"";
            echo $this->getAttribute($context["post"], "id", []);
            echo "\">
\t\t\t<small class=\"unimportant\">
\t\t\t\t<a href=\"#";
            // line 36
            echo $this->getAttribute($context["post"], "id", []);
            echo "\">#</a>
\t\t\t</small> 
\t\t\t";
            // line 38
            if ($this->getAttribute($context["post"], "subject", [])) {
                // line 39
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "subject", []));
                echo "
\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t<em>";
                echo gettext("no subject");
                echo "</em>
\t\t\t";
            }
            // line 42
            echo " 
\t\t\t<small class=\"unimportant\">
\t\t\t\t&mdash; ";
            // line 44
            echo gettext("by");
            echo " 
\t\t\t\t";
            // line 45
            if ($this->getAttribute($context["post"], "username", [])) {
                // line 46
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "username", []));
                echo "
\t\t\t\t";
            } else {
                // line 48
                echo "\t\t\t\t\t<em>";
                echo gettext("deleted?");
                echo "</em>
\t\t\t\t";
            }
            // line 49
            echo " 
\t\t\t\t";
            // line 50
            echo gettext("at");
            echo " 
\t\t\t\t";
            // line 51
            echo twig_date_filter($this->getAttribute($context["post"], "time", []), $this->getAttribute(($context["config"] ?? null), "post_date", []));
            echo " 
\t\t\t</small>
\t\t</h2>
\t\t<p>
\t\t\t";
            // line 55
            echo $this->getAttribute($context["post"], "body", []);
            echo "
\t\t</p>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
";
        // line 60
        if ((($context["count"] ?? null) > count(($context["noticeboard"] ?? null)))) {
            // line 61
            echo "\t<p class=\"unimportant\" style=\"text-align:center;word-wrap:break-word\">
\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((($context["count"] ?? null) - 1) / $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "noticeboard_page", []))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 63
                echo "\t\t\t<a href=\"?/noticeboard/";
                echo ($context["i"] + 1);
                echo "\">[";
                echo ($context["i"] + 1);
                echo "]</a> 
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t</p>
";
        }
    }

    public function getTemplateName()
    {
        return "mod/noticeboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 65,  187 => 63,  183 => 62,  180 => 61,  178 => 60,  175 => 59,  165 => 55,  158 => 51,  154 => 50,  151 => 49,  145 => 48,  139 => 46,  137 => 45,  133 => 44,  129 => 42,  123 => 41,  117 => 39,  115 => 38,  110 => 36,  104 => 34,  94 => 31,  91 => 30,  89 => 29,  86 => 28,  82 => 27,  79 => 26,  71 => 21,  63 => 16,  56 => 12,  50 => 9,  46 => 8,  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/noticeboard.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/noticeboard.html");
    }
}
