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

/* main/pagination.twig */
class __TwigTemplate_952cf46fe53d599308e559cc1950e908e86cc0c02de56dfe871deb73ce39f04e extends Template
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
        echo "<nav aria-label=\"navigation example text-center\">
    ";
        // line 3
        echo "    ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "numPages", [], "any", false, false, false, 3), 1))) {
            // line 4
            echo "        <ul class=\"pagination\">
            ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "prevUrl", [], "any", false, false, false, 5)) {
                // line 6
                echo "                <li class=\"page-item\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "prevUrl", [], "any", false, false, false, 6), "html", null, true);
                echo "\" class=\"page-link text-info\">Previous</a></li>
            ";
            }
            // line 8
            echo "
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "pages", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 10
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "                    <li ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["page"], "isCurrent", [], "any", false, false, false, 11)) ? ("class=\"page-item active disabled\"") : (""));
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 11), "html", null, true);
                    echo "\"
                                                                                           class=\"page-link ";
                    // line 12
                    echo ((twig_get_attribute($this->env, $this->source, $context["page"], "isCurrent", [], "any", false, false, false, 12)) ? ("") : ("text-info"));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 12), "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 15
                    echo "                    <li class=\"page-item disabled\"><span class=\"page-link text-info\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 15), "html", null, true);
                    echo "</span></li>
                ";
                }
                // line 17
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
            ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nextUrl", [], "any", false, false, false, 19)) {
                // line 20
                echo "                <li class=\"page-item\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nextUrl", [], "any", false, false, false, 20), "html", null, true);
                echo "\" class=\"page-link text-info\">Next</a></li>
            ";
            }
            // line 22
            echo "        </ul>
    ";
        }
        // line 24
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "main/pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  102 => 22,  96 => 20,  94 => 19,  91 => 18,  85 => 17,  79 => 15,  71 => 12,  64 => 11,  61 => 10,  57 => 9,  54 => 8,  48 => 6,  46 => 5,  43 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/pagination.twig", "E:\\Programs\\OpenServer\\domains\\mvc2\\application\\Views\\main\\pagination.twig");
    }
}
