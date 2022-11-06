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

/* mod/news.html */
class __TwigTemplate_659502657be6ed58af8a8d0ec6a70649401111151c3fb900f9d84f5f6e976422 extends \Twig\Template
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
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "news", []))) {
            // line 2
            echo "\t<fieldset>
\t\t<legend>";
            // line 3
            echo gettext("New post");
            echo "</legend>
\t\t<form style=\"margin:0\" action=\"\" method=\"post\">
\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 5
            echo ($context["token"] ?? null);
            echo "\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<th>
\t\t\t\t\t\t";
            // line 9
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "news_custom", []))) {
                // line 10
                echo "\t\t\t\t\t\t\t<label for=\"name\">";
                echo gettext("Name");
                echo "</label>
\t\t\t\t\t\t";
            } else {
                // line 12
                echo "\t\t\t\t\t\t\t";
                echo gettext("Name");
                // line 13
                echo "\t\t\t\t\t\t";
            }
            // line 14
            echo "\t\t\t\t\t</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 16
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "news_custom", []))) {
                // line 17
                echo "\t\t\t\t\t\t\t<input type=\"text\" size=\"55\" name=\"name\" id=\"name\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["mod"] ?? null), "username", []));
                echo "\">
\t\t\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["mod"] ?? null), "username", []));
                echo "
\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th><label for=\"subject\">";
            // line 24
            echo gettext("Subject");
            echo "</label></th>
\t\t\t\t\t<td><input type=\"text\" size=\"55\" name=\"subject\" id=\"subject\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th><label for=\"body\">";
            // line 28
            echo gettext("Body");
            echo "</label></th>
\t\t\t\t\t<td><textarea name=\"body\" id=\"body\" style=\"width:100%;height:100px\"></textarea></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<p style=\"text-align:center\">
\t\t\t\t<input type=\"submit\" value=\"";
            // line 33
            echo gettext("Post news entry");
            echo "\">
\t\t\t</p>
\t\t</form>
\t</fieldset>
";
        }
        // line 38
        echo "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 40
            echo "\t<div class=\"ban\">
\t\t";
            // line 41
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "news_delete", []))) {
                // line 42
                echo "\t\t\t<span style=\"float:right;padding:2px\">
\t\t\t\t<a class=\"unimportant\" href=\"?/edit_news/delete/";
                // line 43
                echo $this->getAttribute($context["post"], "id", []);
                echo "/";
                echo $this->getAttribute($context["post"], "delete_token", []);
                echo "\">[";
                echo gettext("delete");
                echo "]</a>
\t\t\t</span>
\t\t";
            }
            // line 46
            echo "\t\t<h2 id=\"";
            echo $this->getAttribute($context["post"], "id", []);
            echo "\">
\t\t\t<small class=\"unimportant\">
\t\t\t\t<a href=\"#";
            // line 48
            echo $this->getAttribute($context["post"], "id", []);
            echo "\">#</a>
\t\t\t</small> 
\t\t\t";
            // line 50
            if ($this->getAttribute($context["post"], "subject", [])) {
                // line 51
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "subject", []));
                echo "
\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t<em>";
                echo gettext("no subject");
                echo "</em>
\t\t\t";
            }
            // line 54
            echo " 
\t\t\t<small class=\"unimportant\">
\t\t\t\t&mdash; ";
            // line 56
            echo gettext("by");
            echo " ";
            echo $this->getAttribute($context["post"], "name", []);
            echo " ";
            echo gettext("at");
            echo " ";
            echo twig_date_filter($this->getAttribute($context["post"], "time", []), $this->getAttribute(($context["config"] ?? null), "post_date", []));
            echo " 
\t\t\t</small>
\t\t</h2>
\t\t<p>
\t\t\t";
            // line 60
            echo $this->getAttribute($context["post"], "body", []);
            echo "
\t\t</p>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
";
        // line 65
        if ((($context["count"] ?? null) > count(($context["news"] ?? null)))) {
            // line 66
            echo "\t<p class=\"unimportant\" style=\"text-align:center;word-wrap:break-word\">
\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((($context["count"] ?? null) - 1) / $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "news_page", []))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 68
                echo "\t\t\t<a href=\"?/news/";
                echo ($context["i"] + 1);
                echo "\">[";
                echo ($context["i"] + 1);
                echo "]</a> 
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t</p>
";
        }
    }

    public function getTemplateName()
    {
        return "mod/news.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 70,  196 => 68,  192 => 67,  189 => 66,  187 => 65,  184 => 64,  174 => 60,  161 => 56,  157 => 54,  151 => 53,  145 => 51,  143 => 50,  138 => 48,  132 => 46,  122 => 43,  119 => 42,  117 => 41,  114 => 40,  110 => 39,  107 => 38,  99 => 33,  91 => 28,  84 => 24,  79 => 21,  73 => 19,  67 => 17,  65 => 16,  61 => 14,  58 => 13,  55 => 12,  49 => 10,  47 => 9,  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/news.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/news.html");
    }
}
