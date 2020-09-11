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

/* main/head.twig */
class __TwigTemplate_7069e815200705df5d79ee59e0e6f13c5e1f71003817be04738d396b80389117 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'listhead' => [$this, 'block_listhead'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('listhead', $context, $blocks);
    }

    public function block_listhead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<li class=\"list-group-item d-flex justify-content-between lh-condensed\">
    <div class=\"col-md-1 text-center\">
        #
    </div>
    <div class=\"col-md-2 text-center\">
        <h6 class=\"my-0 d-inline-block\" >Name</h6>
        <a href=\"/main/index?sort=name&name=";
        // line 8
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "&order=ASC&start=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "start", [], "any", false, false, false, 8), "html", null, true);
        echo "\"><i class=\"fa fa-arrow-up text-info\" aria-hidden=\"true\"></i></a>
        <a href=\"/main/index?sort=name&name=";
        // line 9
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "&order=DESC&start=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "start", [], "any", false, false, false, 9), "html", null, true);
        echo "\"><i class=\"fa fa-arrow-down text-info\" aria-hidden=\"true\"></i></a>
    </div>
    <div class=\"col-md-3 text-center\">
        <h6 class=\"my-0 d-inline-block\">Site</h6>
        <a href=\"/main/index?sort=site&name=";
        // line 13
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "&order=ASC&start=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "start", [], "any", false, false, false, 13), "html", null, true);
        echo "\"><i class=\"fa fa-arrow-up text-info\" aria-hidden=\"true\"></i></a>
        <a href=\"/main/index?sort=site&name=";
        // line 14
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "&order=DESC&start=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "start", [], "any", false, false, false, 14), "html", null, true);
        echo "\"><i class=\"fa fa-arrow-down text-info\" aria-hidden=\"true\"></i></a>
    </div>
    <div class=\"col-md-3 text-center\">
        <h6 class=\"my-0\">Text task</h6>
    </div>
    <div class=\"col-md-2 text-center\">
        <h6 class=\"my-0 d-inline-block\">Status</h6>
        <a href=\"/main/index?sort=status&name=";
        // line 21
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "&order=ASC&start=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "start", [], "any", false, false, false, 21), "html", null, true);
        echo "\"><i class=\"fa fa-arrow-up text-info\" aria-hidden=\"true\"></i></a>
        <a href=\"/main/index?sort=status&name=";
        // line 22
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "&order=DESC&start=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "start", [], "any", false, false, false, 22), "html", null, true);
        echo "\"><i class=\"fa fa-arrow-down text-info\" aria-hidden=\"true\"></i></a>
    </div>
    <div class=\"col-md-1 text-center\">
        <h6 class=\"my-0\"></h6>
    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "main/head.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  86 => 21,  74 => 14,  68 => 13,  59 => 9,  53 => 8,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/head.twig", "E:\\Programs\\OpenServer\\domains\\mvc2\\application\\Views\\main\\head.twig");
    }
}
