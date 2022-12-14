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

/* post/poster_id.html */
class __TwigTemplate_c0ebf8257768e4947ad79a14f71efa8fa81200bb8b829ff04621967e34d86a77 extends \Twig\Template
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
        if ($this->getAttribute(($context["config"] ?? null), "poster_ids", [])) {
            // line 2
            echo "\t";
            if ($this->getAttribute(($context["post"] ?? null), "thread", [])) {
                // line 3
                echo "\t\t <span class=\"poster_id\">";
                echo poster_id($this->getAttribute(($context["post"] ?? null), "ip", []), $this->getAttribute(($context["post"] ?? null), "thread", []));
                echo "</span>
\t";
            } else {
                // line 5
                echo "\t\t <span class=\"poster_id\">";
                echo poster_id($this->getAttribute(($context["post"] ?? null), "ip", []), $this->getAttribute(($context["post"] ?? null), "id", []));
                echo "</span>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "post/poster_id.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/poster_id.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/post/poster_id.html");
    }
}
