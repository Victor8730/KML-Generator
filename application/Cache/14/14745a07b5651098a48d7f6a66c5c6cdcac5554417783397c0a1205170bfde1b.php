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

/* main/list.twig */
class __TwigTemplate_3593b0e0b0909b5e0f4efb76e049b63dc82def98574ac5e17660a64a4f2d0679 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataList"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 2
            echo "    <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
        <div class=\"col-md-1 text-center\">
            <p class=\"my-0\">";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 4), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-md-2 text-center\">
            <p class=\"my-0\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-md-3 text-center\">
            <p class=\"my-0\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "site", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-md-3 text-center\">
            <p class=\"my-0\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "task", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-md-2 text-center\">
            <p class=\"my-0\">
                ";
            // line 17
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 17), 1))) {
                // line 18
                echo "                    <i class=\"fa fa-check text-success px-1 pointer\" aria-hidden=\"true\" data-toggle=\"tooltip\"
                       data-placement=\"top\"
                       title=\"Task complete\"></i>
                ";
            } else {
                // line 22
                echo "                    <i class=\"fa fa-minus-circle px-1 pointer\" aria-hidden=\"true\" data-toggle=\"tooltip\"
                       data-placement=\"top\"
                       title=\"Task in progress\"></i>
                ";
            }
            // line 26
            echo "
                ";
            // line 27
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "checkAdmin", [], "any", false, false, false, 27), 1))) {
                // line 28
                echo "                    <i class=\"fa fa-pencil px-1 pointer tooltip-show\" aria-hidden=\"true\"
                       title=\"Task has been updated\"></i>
                ";
            }
            // line 31
            echo "            </p>
        </div>
        <div class=\"col-md-1 text-center\">
            <p class=\"my-0\">
                ";
            // line 35
            if ((0 === twig_compare(($context["adm"] ?? null), 1))) {
                // line 36
                echo "                    <a href=\"/add/edit/?id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "\"><i class=\"fa fa-pencil-square-o tooltip-show text-info\"
                                                             title=\"Change task\"></i></a>
                    <a href=\"/add/del/?id=";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" class=\"delete-task\"><i class=\"fa fa-ban tooltip-show text-danger\" title=\"Delete task\"></i></a>
                ";
            }
            // line 40
            echo "            </p>
        </div>
    </li>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "main/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 44,  126 => 40,  121 => 38,  115 => 36,  113 => 35,  107 => 31,  102 => 28,  100 => 27,  97 => 26,  91 => 22,  85 => 18,  83 => 17,  76 => 13,  70 => 10,  64 => 7,  58 => 4,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/list.twig", "E:\\Programs\\OpenServer\\domains\\mvc2\\application\\Views\\main\\list.twig");
    }
}
