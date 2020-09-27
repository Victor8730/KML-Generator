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

/* template.twig */
class __TwigTemplate_b07905da32e982309f7880a5ccb9c6301d6e2faf317e4f020ebddbbf8355a4e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Task List\">
    <meta name=\"author\" content=\"Victor Galiuzov\">
    <link rel=\"icon\" href=\"/img/favicon.ico\">
    <title>KML - генератор</title>
    <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"/css/form-validation.css\" rel=\"stylesheet\">
    <link href=\"/css/font-awesome.css\" rel=\"stylesheet\">
    <link href=\"/css/style.css\" rel=\"stylesheet\">
</head>
<body class=\"bg-light\">
<header>
    <div class=\"bg-dark collapse\" id=\"navbarHeader\" style=\"\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 py-2\">
                    <h4 class=\"text-white\">Kml file generator</h4>
                    <ul>
                        <li class=\"text-white\">Designed to generate google maps import files</li>
                        <li class=\"text-white\">To create a kml file, you need to pass a link to the data, the data can
                            be either in csv or xml format.
                        </li>
                        <li class=\"text-white\">An example of input data can be found on the links <a
                                    href=\"/main/examplecsv\">csv</a>, <a href=\"/main/examplexml\">xml</a></li>
                        <li class=\"text-white\">If your input data has more fields, then you can configure the formation
                            of the array in the corresponding \"createArrayFromCsv\", \"createArrayFromXml\" method in the
                            \"ControllerMain\". Also, do not forget to fix the template, it is located at \"kml/desc.twig\"
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"navbar navbar-dark bg-dark box-shadow\">
        <div class=\"container d-flex justify-content-between\">
            <a href=\"/\" class=\"navbar-toggler\" title=\"Show all task\">
                <i class=\"fa fa-list fa-2x\" aria-hidden=\"true\"></i>
            </a>
            <button class=\"navbar-toggler tooltip-show\" type=\"button\" title=\"Show info\" data-toggle=\"collapse\"
                    data-target=\"#navbarHeader\" aria-controls=\"navbarHeader\" aria-expanded=\"true\"
                    aria-label=\"Toggle navigation\">
                <i class=\"fa fa-info-circle fa-2x mr-4\" aria-hidden=\"true\"></i>
            </button>
        </div>
    </div>
</header>
<div class=\"container\">
    <div class=\"col-md-12\">
        <div class=\"info-block\">

        </div>
    </div>
    <div class=\"py-3 text-center\">
        <img class=\"d-block mx-auto mb-2\" src=\"/img/kml.png\" alt=\"Kml generator\" width=\"300\" height=\"191\">
        <h2>Kml generator</h2>
    </div>

    <div class=\"row content\">
        ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "    </div>

    <footer class=\"my-5 pt-5 text-muted text-center text-small\">
        <p class=\"mb-1\">&copy; 2020 Webpagestudio</p>
        <ul class=\"list-group list-group-horizontal d-inline-flex\">
            <li class=\"list-group-item\"><a href=\"/\" class=\"text-info\">Home</a></li>
            <li class=\"list-group-item\"><a href=\"/main/examplecsv\" class=\"text-info\">Example Csv</a></li>
            <li class=\"list-group-item\"><a href=\"/main/examplexml\" class=\"text-info\">Example Xml</a></li>
        </ul>
    </footer>
</div>

<script src=\"/js/jquery.min.js\"></script>
<script src=\"/js/bootstrap.js\"></script>
<script src=\"/js/bootstrap.bundle.js\"></script>
<script>
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            let forms = document.getElementsByClassName('needs-validation');
            let validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    \$(function () {
        \$('[data-toggle=\"tooltip\"],.tooltip-show').tooltip({'placement': 'bottom'});
    });
    function showAlert(message, type) {
        \$('.info-block').append('<div class=\"alert alert-' + type + '\" role=\"alert\">' + message + '</div>').hide().fadeIn(1000).fadeOut(3000);
        setTimeout(function () {
            \$(\".alert\").alert('close');
        }, 3000);
    }
</script>
</body>
</html>";
    }

    // line 63
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "        ";
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 64,  150 => 63,  104 => 65,  102 => 63,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.twig", "D:\\server20\\domains\\KML-Generator\\application\\Views\\template.twig");
    }
}
