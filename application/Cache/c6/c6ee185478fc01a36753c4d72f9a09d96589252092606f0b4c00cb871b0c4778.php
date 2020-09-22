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

/* main/main.twig */
class __TwigTemplate_072919fa5d8c672658f8f010fb26aca46ba0383b43d07be427fc5bf7010f9b50 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.twig", "main/main.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"col-md-12 order-md-2\">
        <div class=\"card text-center\">
            <form action=\"/main/kml\" method=\"post\" class=\"my-2\">
                <div class=\"input-group px-4 py-2\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"url-data\"><i class=\"fa fa-share-alt pr-2\" aria-hidden=\"true\"></i>Data</span>
                    </div>
                    <input type=\"text\" name=\"url-data\" class=\"form-control\" placeholder=\"Url with csv or xml data\" aria-describedby=\"url-data\" value=\"\">
                </div>
                <div class=\"input-group px-4 py-2\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"url-type\"><i class=\"fa fa-file-text pr-2\" aria-hidden=\"true\"></i>Type of data</span>
                    </div>
                    <select name=\"type\" class=\"form-control\" id=\"url-type\">
                        <option value=\"0\">XML</option>
                        <option value=\"1\">CSV</option>
                    </select>
                </div>
                <div class=\"form-group row\">
                    <div class=\"col-sm-12 py-2\">
                        <button type=\"submit\" class=\"btn btn-success\">Generate kml</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "main/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/main.twig", "D:\\server20\\domains\\KML-Generator\\application\\Views\\main\\main.twig");
    }
}
