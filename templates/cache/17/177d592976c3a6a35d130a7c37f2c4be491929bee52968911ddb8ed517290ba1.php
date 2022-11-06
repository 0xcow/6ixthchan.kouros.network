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

/* mod/recent_posts.html */
class __TwigTemplate_990f86aaf78e1a508172ebb4cc2a392daa03c3c32961a53b7f9d6f198986f170 extends \Twig\Template
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
        echo "<script src=\"";
        echo $this->getAttribute(($context["config"] ?? null), "additional_javascript_url", []);
        echo "js/mod/recent-posts.js\"></script>
";
        // line 2
        if ( !count(($context["posts"] ?? null))) {
            // line 3
            echo "\t<p style=\"text-align:center\" class=\"unimportant\">(";
            echo gettext("There are no active posts.");
            echo ")</p>
";
        } else {
            // line 5
            echo "\t<h4>Viewing last ";
            echo twig_escape_filter($this->env, ($context["limit"] ?? null));
            echo " posts</h4>
\t<p>View <a href=\"?/recent/25\"> 25 </a>|<a href=\"?/recent/50\"> 50 </a>|<a href=\"?/recent/100\"> 100 </a></p>
\t<a href=\"javascript:void(0)\" id=\"erase-local-data\" style=\"float:right; clear:both\">Erase local data</a></div>
\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 9
                echo "\t\t";
                if ( !$this->getAttribute($context["post"], "thread", [])) {
                    // line 10
                    echo "\t\t\t";
                    $context["thread"] = $this->getAttribute($context["post"], "id", []);
                    // line 11
                    echo "\t\t";
                } else {
                    // line 12
                    echo "\t\t\t";
                    $context["thread"] = $this->getAttribute($context["post"], "thread", []);
                    // line 13
                    echo "\t\t";
                }
                // line 14
                echo "\t\t<div class=\"post-wrapper\" data-board=\"";
                echo $this->getAttribute($context["post"], "board", []);
                echo "\"><hr/><a class=\"eita-link\" id=\"eita-";
                echo $this->getAttribute($context["post"], "board", []);
                echo "-";
                echo ($context["thread"] ?? null);
                echo "\" href=\"?/";
                echo $this->getAttribute($context["post"], "board", []);
                echo "/";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "dir", []), "res", []);
                echo ($context["thread"] ?? null);
                echo ".html#";
                echo $this->getAttribute($context["post"], "id", []);
                echo "\">/";
                echo $this->getAttribute($context["post"], "board", []);
                echo "/";
                echo $this->getAttribute($context["post"], "id", []);
                echo "</a><br>
\t\t\t";
                // line 15
                echo $this->getAttribute($context["post"], "built", []);
                echo "
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 19
        echo "<a href=\"";
        echo $this->getAttribute(($context["config"] ?? null), "root", []);
        echo "mod.php?/recent/";
        echo twig_escape_filter($this->env, ($context["limit"] ?? null));
        echo "&amp;last=";
        echo twig_escape_filter($this->env, ($context["last_time"] ?? null));
        echo "\">Next ";
        echo ($context["limit"] ?? null);
        echo " posts</a>
";
    }

    public function getTemplateName()
    {
        return "mod/recent_posts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 19,  89 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  50 => 8,  43 => 5,  37 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mod/recent_posts.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/mod/recent_posts.html");
    }
}
