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

/* mod/search_form.html */
class __TwigTemplate_af14f97d5fdef2b32ce8e26662eefec4108e213f4e4959e46d4fae5b69d0fa24 extends \Twig\Template
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
        echo "<form style=\"display:inline\" action=\"?/search\" method=\"post\">
\t<label style=\"display:inline\" for=\"search\">";
        // line 2
        echo gettext("Phrase:");
        echo "</label> 
\t<input id=\"search\" name=\"query\" type=\"text\" size=\"60\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["search_query"] ?? null));
        echo "\">
\t<select name=\"type\">
\t\t<option value=\"posts\"";
        // line 5
        if ((($context["search_type"] ?? null) == "posts")) {
            echo " selected";
        }
        echo ">";
        echo gettext("Posts");
        echo "</option>
\t\t";
        // line 6
        if ((twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "view_notes", [])) && twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "show_ip", [])))) {
            // line 7
            echo "\t\t\t<option value=\"IP_notes\"";
            if ((($context["search_type"] ?? null) == "IP_notes")) {
                echo " selected";
            }
            echo ">";
            echo gettext("IP address notes");
            echo "</option>
\t\t";
        }
        // line 9
        echo "\t\t";
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "view_banlist", []))) {
            // line 10
            echo "\t\t\t<option value=\"bans\"";
            if ((($context["search_type"] ?? null) == "bans")) {
                echo " selected";
            }
            echo ">";
            echo gettext("Bans");
            echo "</option>
\t\t";
        }
        // line 12
        echo "\t\t";
        if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "modlog", []))) {
            // line 13
            echo "\t\t\t<option value=\"log\"";
            if ((($context["search_type"] ?? null) == "log")) {
                echo " selected";
            }
            echo ">";
            echo gettext("Moderation log");
            echo "</option>
\t\t";
        }
        // line 15
        echo "\t</select>
\t<input type=\"submit\" value=\"";
        // line 16
        echo gettext("Search");
        echo "\">
</form>
<p class=\"unimportant\">";
        // line 18
        echo gettext("(Search is case-insensitive and based on keywords. To match exact phrases, use \"quotes\". Use an asterisk (*) for wildcard.)");
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "mod/search_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  91 => 16,  88 => 15,  78 => 13,  75 => 12,  65 => 10,  62 => 9,  52 => 7,  50 => 6,  42 => 5,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/search_form.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/search_form.html");
    }
}
