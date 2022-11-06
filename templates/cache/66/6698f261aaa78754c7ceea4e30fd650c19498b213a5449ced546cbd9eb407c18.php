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

/* mod/login.html */
class __TwigTemplate_fc589ed0ceca0eafaae1aab9c4a11b34851e624504951ea9873b17e258bd079c extends \Twig\Template
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
        if (($context["error"] ?? null)) {
            echo "<h2 style=\"text-align:center\">";
            echo ($context["error"] ?? null);
            echo "</h2>";
        }
        // line 2
        echo "<form action=\"\" method=\"post\">
<table style=\"margin-top:25px;\">
\t<tr>
\t\t<th>
\t\t\t";
        // line 6
        echo gettext("Username");
        // line 7
        echo "\t\t</th>
\t\t<td>
\t\t\t<input type=\"text\" name=\"username\" size=\"20\" maxlength=\"30\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["username"] ?? null));
        echo "\">
\t\t</td>
\t</tr>
\t<tr>
\t\t<th>
\t\t\t";
        // line 14
        echo gettext("Password");
        // line 15
        echo "\t\t</th>
\t\t<td>
\t\t\t<input type=\"password\" name=\"password\" size=\"20\" maxlength=\"30\" value=\"\">
\t\t</td>
\t</tr>
\t<tr>
\t\t<td></td>
\t\t<td>
\t\t\t<input type=\"submit\" name=\"login\" value=\"";
        // line 23
        echo gettext("Continue");
        echo "\" />
\t\t</td>
</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "mod/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  58 => 15,  56 => 14,  48 => 9,  44 => 7,  42 => 6,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/login.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/login.html");
    }
}
