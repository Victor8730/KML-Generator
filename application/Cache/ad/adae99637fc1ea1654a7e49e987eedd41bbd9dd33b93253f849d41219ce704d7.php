<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* kml/desc.twig */
class __TwigTemplate_73d80b17cd2a67a094c9524718cac557cf6e305569aea005907a9314c47f0e31 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div>
    <p>";
        // line 2
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, ($context["lng"] ?? null), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, ($context["lat"] ?? null), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "kml/desc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kml/desc.twig", "D:\\server20\\domains\\KML-Generator\\application\\Views\\kml\\desc.twig");
    }
}
