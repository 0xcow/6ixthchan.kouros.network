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

/* mod/edit_post_form.html */
class __TwigTemplate_56de9949ea9739f47cdf30f501f70eaeeaa91122e5639c8439a0d178f392c81b extends \Twig\Template
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
        echo "<form action=\"\" method=\"post\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 2
        echo ($context["token"] ?? null);
        echo "\">
\t
\t<table>
\t\t<tr>
\t\t\t<th>
\t\t\t\t";
        // line 7
        echo gettext("Name");
        // line 8
        echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"name\" size=\"25\" maxlength=\"35\" autocomplete=\"off\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "name", []));
        echo "\">
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>
\t\t\t\t";
        // line 15
        echo gettext("Email");
        // line 16
        echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"email\" size=\"25\" maxlength=\"40\" autocomplete=\"off\" value=\"";
        // line 18
        echo $this->getAttribute(($context["post"] ?? null), "email", []);
        echo "\">
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>
\t\t\t\t";
        // line 23
        echo gettext("Subject");
        // line 24
        echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input style=\"float:left;\" type=\"text\" name=\"subject\" size=\"25\" maxlength=\"100\" autocomplete=\"off\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "subject", []));
        echo "\">
\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"";
        // line 27
        echo gettext("Update");
        echo "\">
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>
\t\t\t\t";
        // line 32
        echo gettext("Comment");
        // line 33
        echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t<textarea name=\"body\" id=\"body\" rows=\"8\" cols=\"35\">";
        // line 35
        if (($context["raw"] ?? null)) {
            echo $this->getAttribute(($context["post"] ?? null), "body", []);
        } else {
            echo $this->getAttribute(($context["post"] ?? null), "body_nomarkup", []);
        }
        echo "</textarea>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<p style=\"text-align:center\">
\t\t";
        // line 40
        if (($context["raw"] ?? null)) {
            // line 41
            echo "\t\t\t";
            echo gettext("Currently editing raw HTML.");
            echo " 
\t\t\t<a href=\"?/";
            // line 42
            echo ($context["board"] ?? null);
            echo "/edit/";
            echo $this->getAttribute(($context["post"] ?? null), "id", []);
            echo "\">";
            echo gettext("Edit markup instead?");
            echo "</a>
\t\t";
        } else {
            // line 44
            echo "\t\t\t<a href=\"?/";
            echo ($context["board"] ?? null);
            echo "/edit_raw/";
            echo $this->getAttribute(($context["post"] ?? null), "id", []);
            echo "\">";
            echo gettext("Edit raw HTML instead?");
            echo "</a>
\t\t";
        }
        // line 46
        echo "\t</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "mod/edit_post_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  121 => 44,  112 => 42,  107 => 41,  105 => 40,  93 => 35,  89 => 33,  87 => 32,  79 => 27,  75 => 26,  71 => 24,  69 => 23,  61 => 18,  57 => 16,  55 => 15,  47 => 10,  43 => 8,  41 => 7,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/edit_post_form.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/edit_post_form.html");
    }
}
