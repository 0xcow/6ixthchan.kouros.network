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

/* posts.sql */
class __TwigTemplate_3dabf1ccb02ca953eb4d421cd25b30df38dfd3c9fcd3b44f065472132d31cf26 extends \Twig\Template
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
        echo "CREATE TABLE IF NOT EXISTS ``posts_";
        echo ($context["board"] ?? null);
        echo "`` (
   `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
   `thread` int(11) DEFAULT NULL,
   `subject` varchar(100) DEFAULT NULL,
   `email` varchar(30) DEFAULT NULL,
   `name` varchar(35) DEFAULT NULL,
   `trip` varchar(15) DEFAULT NULL,
   `capcode` varchar(50) DEFAULT NULL,
   `body` text NOT NULL,
   `body_nomarkup` text,
   `time` int(11) NOT NULL,
   `bump` int(11) DEFAULT NULL,
   `files` text DEFAULT NULL,
   `num_files` int(11) DEFAULT 0,
   `filehash` text CHARACTER SET ascii,
   `password` varchar(20) DEFAULT NULL,
   `ip` varchar(39) CHARACTER SET ascii NOT NULL,
   `sticky` int(1) NOT NULL,
   `locked` int(1) NOT NULL,
   `cycle` int(1) NOT NULL,
   `sage` int(1) NOT NULL,
   `embed` text,
   `slug` varchar(256) DEFAULT NULL,
   UNIQUE KEY `id` (`id`),
   KEY `thread_id` (`thread`,`id`),
   KEY `filehash` (`filehash`(40)),
   KEY `time` (`time`),
   KEY `ip` (`ip`),
   KEY `list_threads` (`thread`, `sticky`, `bump`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;
 
";
    }

    public function getTemplateName()
    {
        return "posts.sql";
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
        return new Source("", "posts.sql", "/home/kourqwlm/6ixthchan.kouros.network/templates/posts.sql");
    }
}
