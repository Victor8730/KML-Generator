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

/* admin/logout.twig */
class __TwigTemplate_a2fda27fb276d9657ba62855edaec4beb56d7db0265de138fa7230dd87c4c98c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'logout' => [$this, 'block_logout'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('logout', $context, $blocks);
    }

    public function block_logout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<button url=\"/admin/logout\" class=\"navbar-toggler logout-button\" title=\"Exit\">
    <i class=\"fa fa-sign-out fa-2x\" aria-hidden=\"true\"></i>
</button>
";
    }

    public function getTemplateName()
    {
        return "admin/logout.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/logout.twig", "E:\\Programs\\OpenServer\\domains\\mvc2\\application\\Views\\admin\\logout.twig");
    }
}
