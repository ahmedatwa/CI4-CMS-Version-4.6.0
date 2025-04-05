<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Extension/theme.twig */
class __TwigTemplate_36096b33eebb53a10437c0c9d01014a2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<fieldset>
\t<legend>";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield "</legend>
\t";
        // line 3
        if (($context["success"] ?? null)) {
            // line 4
            yield "\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
\t\t\t<i class=\"fas fa-check-circle\"></i>
\t\t\t";
            // line 6
            yield ($context["success"] ?? null);
            yield "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t</button>
\t\t</div>
\t";
        }
        // line 12
        yield "\t";
        if (($context["error_warning"] ?? null)) {
            // line 13
            yield "\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
\t\t\t<i class=\"fas fa-exclamation-circle\"></i>
\t\t\t";
            // line 15
            yield ($context["error_warning"] ?? null);
            yield "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t</button>
\t\t</div>
\t";
        }
        // line 21
        yield "\t<div class=\"table-responsive\">
\t\t<table class=\"table table-bordered table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-left\" width=\"50%\">";
        // line 25
        yield ($context["column_name"] ?? null);
        yield "</td>
\t\t\t\t\t<td class=\"text-left\">";
        // line 26
        yield ($context["column_status"] ?? null);
        yield "</td>
\t\t\t\t\t<td class=\"text-right\">";
        // line 27
        yield ($context["column_action"] ?? null);
        yield "</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 31
        if (($context["extensions"] ?? null)) {
            // line 32
            yield "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 33
                yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t<b>";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 35);
                yield "</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t<b>";
                // line 38
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 38);
                yield "</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t";
                // line 41
                if (CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 41)) {
                    // line 42
                    yield "\t\t\t\t\t\t\t\t\t<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 42);
                    yield "\" data-toggle-tooltip=\"tooltip\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 46
                    yield "\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" disabled=\"disabled\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t";
                }
                // line 50
                yield "\t\t\t\t\t\t\t\t";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 50)) {
                    // line 51
                    yield "\t\t\t\t\t\t\t\t\t<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 51);
                    yield "\" data-toggle-tooltip=\"tooltip\" title=\"";
                    yield ($context["button_install"] ?? null);
                    yield "\" class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 55
                    yield "\t\t\t\t\t\t\t\t\t<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 55);
                    yield "\" data-toggle-tooltip=\"tooltip\" title=\"";
                    yield ($context["button_uninstall"] ?? null);
                    yield "\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 59
                yield "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "\t\t\t\t";
        } else {
            // line 63
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"3\">";
            // line 64
            yield ($context["text_no_results"] ?? null);
            yield "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 67
        yield "\t\t\t</tbody>
\t\t</table>
\t</div>
</fieldset>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Extension/theme.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  185 => 67,  179 => 64,  176 => 63,  173 => 62,  165 => 59,  155 => 55,  145 => 51,  142 => 50,  136 => 46,  126 => 42,  124 => 41,  118 => 38,  112 => 35,  108 => 33,  103 => 32,  101 => 31,  94 => 27,  90 => 26,  86 => 25,  80 => 21,  71 => 15,  67 => 13,  64 => 12,  55 => 6,  51 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<fieldset>
\t<legend>{{ heading_title }}</legend>
\t{% if success %}
\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
\t\t\t<i class=\"fas fa-check-circle\"></i>
\t\t\t{{ success }}
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t</button>
\t\t</div>
\t{% endif %}
\t{% if error_warning %}
\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
\t\t\t<i class=\"fas fa-exclamation-circle\"></i>
\t\t\t{{ error_warning }}
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t</button>
\t\t</div>
\t{% endif %}
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-bordered table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-left\" width=\"50%\">{{ column_name }}</td>
\t\t\t\t\t<td class=\"text-left\">{{ column_status }}</td>
\t\t\t\t\t<td class=\"text-right\">{{ column_action }}</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% if extensions %}
\t\t\t\t\t{% for extension in extensions %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t<b>{{ extension.name }}</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t<b>{{ extension.status }}</b>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t{% if extension.installed %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ extension.edit }}\" data-toggle-tooltip=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\" disabled=\"disabled\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if not extension.installed %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ extension.install }}\" data-toggle-tooltip=\"tooltip\" title=\"{{ button_install }}\" class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ extension.uninstall }}\" data-toggle-tooltip=\"tooltip\" title=\"{{ button_uninstall }}\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endif %}
\t\t\t</tbody>
\t\t</table>
\t</div>
</fieldset>
", "Extension/theme.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Extension/theme.twig");
    }
}
