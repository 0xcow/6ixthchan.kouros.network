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

/* mod/edit_page.html */
class __TwigTemplate_49b80455d6c137393171decaaddbf64ea588d398edcbadc88ae7d255b3ab4073 extends \Twig\Template
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
        echo "<div style=\"text-align:center\">
<form method=\"POST\">
\t<input name=\"token\" value=\"";
        // line 3
        echo ($context["token"] ?? null);
        echo "\" type=\"hidden\">
\t<table>
\t\t<tr>
\t\t<th>";
        // line 6
        echo gettext("Markup method");
        // line 7
        echo "\t\t\t";
        $context["allowed_html"] = $this->getAttribute(($context["config"] ?? null), "allowed_html", []);
        // line 8
        echo "\t\t\t";
        echo strtr(gettext("<p class=\"unimportant\">\"markdown\" is provided by <a href=\"http://parsedown.org/\">parsedown</a>. Note: images disabled.</p>
\t\t\t<p class=\"unimportant\">\"html\" allows the following tags:<br/>%allowed_html%</p>
\t\t\t<p class=\"unimportant\">\"infinity\" is the same as what is used in posts.</p>
\t\t\t<p class=\"unimportant\">This page will not convert between formats,<br/>choose it once or do the conversion yourself!</p>"), array("%allowed_html%" =>         // line 9
($context["allowed_html"] ?? null), ));
        // line 12
        echo "\t\t</th>
\t\t<td>
\t\t\t<select name=\"method\">
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "markdown", 1 => "html", 2 => "infinity"]);
        foreach ($context['_seq'] as $context["_key"] => $context["markup"]) {
            // line 16
            echo "\t\t\t\t<option value=\"";
            echo $context["markup"];
            echo "\" ";
            if (($this->getAttribute(($context["page"] ?? null), "type", []) == $context["markup"])) {
                echo "selected";
            }
            echo ">";
            echo $context["markup"];
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['markup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t</select>
\t\t</td></tr>
\t\t<tr><th>";
        // line 20
        echo gettext("Page content");
        // line 21
        echo "\t\t<br/>
\t\t<span class=\"unimportant\">";
        // line 22
        echo gettext("Page will appear at:");
        echo " 
\t\t";
        // line 23
        if (($context["board"] ?? null)) {
            echo " <a href=\"/";
            echo $this->getAttribute(($context["board"] ?? null), "uri", []);
            echo "/";
            echo $this->getAttribute(($context["page"] ?? null), "name", []);
            echo ".html\">";
            echo $this->getAttribute(($context["config"] ?? null), "domain", []);
            echo "/";
            echo $this->getAttribute(($context["board"] ?? null), "uri", []);
            echo "/";
            echo $this->getAttribute(($context["page"] ?? null), "name", []);
            echo ".html</a>
\t\t";
        } else {
            // line 24
            echo " <a href=\"/";
            echo $this->getAttribute(($context["page"] ?? null), "name", []);
            echo ".html\">";
            echo $this->getAttribute(($context["config"] ?? null), "site", []);
            echo "/";
            echo $this->getAttribute(($context["page"] ?? null), "name", []);
            echo ".html</a>
\t\t";
        }
        // line 25
        echo "</span></th><td><textarea name=\"content\" style=\"height:500px;width:500px\">";
        echo ($context["content"] ?? null);
        echo "</textarea></td><tr>
\t</table>
\t<input type=\"submit\" value=\"Save page\">
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "mod/edit_page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  104 => 24,  89 => 23,  85 => 22,  82 => 21,  80 => 20,  76 => 18,  61 => 16,  57 => 15,  52 => 12,  50 => 9,  45 => 8,  42 => 7,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/edit_page.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/edit_page.html");
    }
}
