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

/* post/subject.html */
class __TwigTemplate_6b178397d4e705871bc1c1cf79aaea171fc241feb3931a8e6d0a7960878e09d4 extends \Twig\Template
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
        if ((twig_length_filter($this->env, $this->getAttribute(($context["post"] ?? null), "subject", [])) > 0)) {
            // line 2
            echo "\t";
            // line 3
            echo "\t<span class=\"subject\">";
            echo bidi_cleanup($this->getAttribute(($context["post"] ?? null), "subject", []));
            echo "</span> 
";
        }
        // line 5
        echo "
";
    }

    public function getTemplateName()
    {
        return "post/subject.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/subject.html", "/home/kourqwlm/6ixthchan.kouros.network/templates/post/subject.html");
    }
}
