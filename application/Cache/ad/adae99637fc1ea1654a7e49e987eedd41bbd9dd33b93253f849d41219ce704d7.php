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
    <h2>Навантаження (ваг/тис.тон)</h2>
    <ul>
        <li>";
        // line 4
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["countLoad"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["weightLoad"] ?? null), "html", null, true);
        echo "</li>
        <li>";
        // line 5
        echo twig_escape_filter($this->env, ($context["yearOld"] ?? null), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["countLoadOld"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["weightLoadOld"] ?? null), "html", null, true);
        echo "</li>
    </ul>
</div>
<div>
    <h2>Відсоток до минулого року (тис.тонн): ";
        // line 9
        echo twig_escape_filter($this->env, ($context["percentWeightLoad"] ?? null), "html", null, true);
        echo "%</h2>
</div>
<div>
    <h2>Вивантаження (ваг)</h2>
    <ul>
        <li>";
        // line 14
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["countUnload"] ?? null), "html", null, true);
        echo "</li>
        <li>";
        // line 15
        echo twig_escape_filter($this->env, ($context["yearOld"] ?? null), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["cuntUnloadOld"] ?? null), "html", null, true);
        echo "</li>
    </ul>
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
        return array (  75 => 15,  69 => 14,  61 => 9,  50 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kml/desc.twig", "C:\\os\\domains\\kml\\application\\Views\\kml\\desc.twig");
    }
}
