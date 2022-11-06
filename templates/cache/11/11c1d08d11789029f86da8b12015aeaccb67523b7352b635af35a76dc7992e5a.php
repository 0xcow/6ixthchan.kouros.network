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

/* post/ip.html */
class __TwigTemplate_7154d2962c76ba39a11a28d93d449290fd7b94d88ed677da9e3f3ef07b23c0b0 extends \Twig\Template
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
        if (($this->getAttribute(($context["post"] ?? null), "mod", []) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "show_ip", []), $this->getAttribute(($context["board"] ?? null), "uri", [])))) {
            echo "  
\t [<a class=\"ip-link\" style=\"margin:0;\" href=\"?/IP/";
            // line 2
            echo cloak_ip($this->getAttribute(($context["post"] ?? null), "ip", []));
            echo "\">";
            echo cloak_ip($this->getAttribute(($context["post"] ?? null), "ip", []));
            echo "</a>]
";
        }
    }

    public function getTemplateName()
    {
        return "post/ip.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/ip.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/post/ip.html");
    }
}
