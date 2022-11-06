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

/* post/time.html */
class __TwigTemplate_9b7de508a7be97d3205992ef176595c8d6d8def1719a359da16f8621b737a92f extends \Twig\Template
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
        echo " <time datetime=\"";
        echo twig_date_filter($this->getAttribute(($context["post"] ?? null), "time", []), "%Y-%m-%dT%H:%M:%S");
        echo twig_timezone_function();
        echo "\">";
        echo twig_date_filter($this->getAttribute(($context["post"] ?? null), "time", []), $this->getAttribute(($context["config"] ?? null), "post_date", []));
        echo "</time>
";
    }

    public function getTemplateName()
    {
        return "post/time.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/time.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/post/time.html");
    }
}
