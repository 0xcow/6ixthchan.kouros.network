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

/* mod/rebuild.html */
class __TwigTemplate_2b09707bf13f868d9b87587a55155603651742424208edce17b56a09038bbdd4 extends \Twig\Template
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
        echo "<form style=\"width:300px;margin:auto\" action=\"?/rebuild\" method=\"post\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 2
        echo ($context["token"] ?? null);
        echo "\">
\t<ul id=\"rebuild\">
\t\t<li style=\"margin-bottom:8px\">
\t\t\t<input type=\"checkbox\" name=\"rebuild_all\" id=\"rebuild_all\" onchange=\"toggleall(this.checked)\"> 
\t\t\t<label for=\"rebuild_all\"><strong>";
        // line 6
        echo gettext("Toggle all");
        echo "</strong></label>
\t\t\t<script>
\t\t\t\tfunction toggleall(val) {
\t\t\t\t\t/* TODO: something more suitable for all browsers? */
\t\t\t\t\tvar elements = document.getElementById('rebuild').querySelectorAll('input');
\t\t\t\t\tfor (i in elements) {
\t\t\t\t\t\telements[i].checked = val;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t</script>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_cache\" id=\"rebuild_cache\" checked> 
\t\t\t<label for=\"rebuild_cache\">";
        // line 19
        echo gettext("Flush cache");
        echo "</label>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_javascript\" id=\"rebuild_javascript\" checked> 
\t\t\t<label for=\"rebuild_javascript\">";
        // line 23
        echo gettext("Rebuild Javascript");
        echo "</label>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_index\" id=\"rebuild_index\" checked> 
\t\t\t<label for=\"rebuild_index\">";
        // line 27
        echo gettext("Rebuild index pages");
        echo "</label>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_thread\" id=\"rebuild_thread\" checked> 
\t\t\t<label for=\"rebuild_thread\">";
        // line 31
        echo gettext("Rebuild thread pages");
        echo "</label>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_themes\" id=\"rebuild_themes\" checked> 
\t\t\t<label for=\"rebuild_themes\">";
        // line 35
        echo gettext("Rebuild themes");
        echo "</label>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_posts\" id=\"rebuild_posts\"> 
\t\t\t<label for=\"rebuild_posts\">";
        // line 39
        echo gettext("Rebuild replies");
        echo "</label>
\t\t</li>
\t</ul>
\t
\t<hr>
\t
\t<ul id=\"boards\">
\t\t<li style=\"margin-bottom:8px\">
\t\t\t<input type=\"checkbox\" name=\"boards_all\" id=\"boards_all\" onchange=\"toggleallboards(this.checked)\" checked> 
\t\t\t<label for=\"boards_all\"><strong>";
        // line 48
        echo gettext("All boards");
        echo "</strong></label>
\t\t\t<script>
\t\t\t\tfunction toggleallboards(val) {
\t\t\t\t\t/* TODO: something more suitable for all browsers? */
\t\t\t\t\tvar elements = document.getElementById('boards').querySelectorAll('input');
\t\t\t\t\tfor (i in elements) {
\t\t\t\t\t\telements[i].checked = val;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t</script>
\t\t</li>
\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["boards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
            // line 60
            echo "\t\t\t<li>
\t\t\t\t<input type=\"checkbox\" name=\"board_";
            // line 61
            echo $this->getAttribute($context["board"], "uri", []);
            echo "\" id=\"board-";
            echo $this->getAttribute($context["board"], "uri", []);
            echo "\" checked> 
\t\t\t\t<label for=\"board-";
            // line 62
            echo $this->getAttribute($context["board"], "uri", []);
            echo "\">
\t\t\t\t\t";
            // line 63
            echo sprintf($this->getAttribute(($context["config"] ?? null), "board_abbreviation", []), $this->getAttribute($context["board"], "uri", []));
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "title", []));
            echo "
\t\t\t\t</label>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t</ul>
\t
\t<p style=\"text-align:center\">
\t\t<input type=\"submit\" value=\"";
        // line 70
        echo gettext("Rebuild");
        echo "\" name=\"rebuild\">
\t</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "mod/rebuild.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 70,  146 => 67,  134 => 63,  130 => 62,  124 => 61,  121 => 60,  117 => 59,  103 => 48,  91 => 39,  84 => 35,  77 => 31,  70 => 27,  63 => 23,  56 => 19,  40 => 6,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/rebuild.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/rebuild.html");
    }
}
