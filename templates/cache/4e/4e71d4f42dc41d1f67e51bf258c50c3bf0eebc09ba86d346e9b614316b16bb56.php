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

/* mod/themes.html */
class __TwigTemplate_113f941116c4826e924595031c1b06d33d150b718601d94e60372545d722d659 extends \Twig\Template
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
        if ((count(($context["themes"] ?? null)) == 0)) {
            // line 2
            echo "\t<p style=\"text-align:center\" class=\"unimportant\">(";
            echo gettext("There are no themes available.");
            echo ")</p>
";
        } else {
            // line 4
            echo "\t<table class=\"modlog\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
            foreach ($context['_seq'] as $context["theme_name"] => $context["theme"]) {
                // line 6
                echo "\t\t\t<tr>
\t\t\t\t<th class=\"minimal\">";
                // line 7
                echo gettext("Name");
                echo "</th>
\t\t\t\t\t<td>";
                // line 8
                echo $this->getAttribute($context["theme"], "name", []);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"minimal\">";
                // line 11
                echo gettext("Version");
                echo "</th>
\t\t\t\t\t<td>";
                // line 12
                echo $this->getAttribute($context["theme"], "version", []);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"minimal\">";
                // line 15
                echo gettext("Description");
                echo "</th>
\t\t\t\t\t<td>";
                // line 16
                echo $this->getAttribute($context["theme"], "description", []);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"minimal\">";
                // line 19
                echo gettext("Thumbnail");
                echo "</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img style=\"float:none;margin:4px";
                // line 21
                if (twig_in_filter($context["theme_name"], ($context["themes_in_use"] ?? null))) {
                    echo ";border:2px solid red;padding:4px";
                }
                echo "\" src=\"";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "dir", []), "themes_uri", []);
                echo "/";
                echo $context["theme_name"];
                echo "/thumb.png\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"minimal\">";
                // line 25
                echo gettext("Actions");
                echo "</th>
\t\t\t\t\t<td><ul style=\"padding:0 20px\">
\t\t\t\t\t\t<li><a title=\" ";
                // line 27
                echo gettext("Use theme");
                echo "\" href=\"?/themes/";
                echo $context["theme_name"];
                echo "\">
\t\t\t\t\t\t\t";
                // line 28
                if (twig_in_filter($context["theme_name"], ($context["themes_in_use"] ?? null))) {
                    echo gettext("Reconfigure");
                } else {
                    echo gettext("Install");
                }
                // line 29
                echo "\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t";
                // line 30
                if (twig_in_filter($context["theme_name"], ($context["themes_in_use"] ?? null))) {
                    // line 31
                    echo "\t\t\t\t\t\t\t<li><a href=\"?/themes/";
                    echo $context["theme_name"];
                    echo "/rebuild/";
                    echo $this->getAttribute($context["theme"], "rebuild_token", []);
                    echo "\">";
                    echo gettext("Rebuild");
                    echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"?/themes/";
                    // line 32
                    echo $context["theme_name"];
                    echo "/uninstall/";
                    echo $this->getAttribute($context["theme"], "uninstall_token", []);
                    echo "\" onclick=\"return confirm('Are you sure you want to uninstall this theme?');\">";
                    echo gettext("Uninstall");
                    echo "</a></li>
\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t</ul></td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"height:40px\"><td colspan=\"2\"><hr/></td></tr>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['theme_name'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t</table>
";
        }
    }

    public function getTemplateName()
    {
        return "mod/themes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 39,  136 => 34,  127 => 32,  118 => 31,  116 => 30,  113 => 29,  107 => 28,  101 => 27,  96 => 25,  83 => 21,  78 => 19,  72 => 16,  68 => 15,  62 => 12,  58 => 11,  52 => 8,  48 => 7,  45 => 6,  41 => 5,  38 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/themes.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/themes.html");
    }
}
