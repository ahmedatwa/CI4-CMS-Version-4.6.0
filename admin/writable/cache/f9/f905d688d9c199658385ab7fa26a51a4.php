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

/* Localisation/language_list.twig */
class __TwigTemplate_91c0714fbb2ac4816eba0ca413fb0747 extends Template
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
        yield ($context["header"] ?? null);
        yield "
";
        // line 2
        yield ($context["column_left"] ?? null);
        yield "
<main id=\"content\">
\t<div class=\"container-fluid px-4\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t<a href=\"";
        // line 8
        yield ($context["add"] ?? null);
        yield "\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 11
        yield ($context["delete"] ?? null);
        yield "\" role=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger disabled\" name=\"button-delete\" form=\"form-language\">
\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<h1>";
        // line 15
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            yield "\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 19
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 26
        yield "\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t";
        // line 29
        yield ($context["text_list"] ?? null);
        yield "
\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"form-language\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 33
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 1, \"asc\" ]]'>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th width=\"1%\" class=\"no-sort\"><input id=\"selectAll\" type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></th>
\t\t\t\t\t\t\t\t\t\t<th>";
        // line 39
        yield ($context["column_name"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
        // line 40
        yield ($context["column_code"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
        // line 41
        yield ($context["column_status"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th width=\"12%\">";
        // line 42
        yield ($context["column_action"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 47
            yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 49
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49), ($context["selected"] ?? null))) {
                // line 50
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50);
                yield "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 52
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52);
                yield "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 54
            yield "\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 55
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 55);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 56
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 56);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 57
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "status", [], "any", false, false, false, 57);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "edit", [], "any", false, false, false, 59);
            yield "\" class=\"btn btn-primary btn-sm\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
            yield ($context["button_edit"] ?? null);
            yield "\"><i class=\"far fa-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
\t";
        // line 72
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Localisation/language_list.twig";
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
        return array (  203 => 72,  192 => 63,  180 => 59,  175 => 57,  171 => 56,  167 => 55,  164 => 54,  158 => 52,  152 => 50,  150 => 49,  146 => 47,  142 => 46,  135 => 42,  131 => 41,  127 => 40,  123 => 39,  112 => 33,  105 => 29,  100 => 26,  95 => 22,  84 => 19,  81 => 18,  77 => 17,  72 => 15,  63 => 11,  55 => 8,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
{{ column_left }}
<main id=\"content\">
\t<div class=\"container-fluid px-4\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t<a href=\"{{ add }}\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_add }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ delete }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_delete }}\" class=\"btn btn-danger disabled\" name=\"button-delete\" form=\"form-language\">
\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t{# </ page header #}
\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t{{ text_list }}
\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"form-language\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 1, \"asc\" ]]'>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th width=\"1%\" class=\"no-sort\"><input id=\"selectAll\" type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\"/></th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_name }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_code }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_status }}</th>
\t\t\t\t\t\t\t\t\t\t<th width=\"12%\">{{ column_action }}</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for language in languages %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if language.language_id in selected %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ language.language_id }}\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ language.language_id }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ language.name }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ language.code }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ language.status }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ language.edit }}\" class=\"btn btn-primary btn-sm\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_edit }}\"><i class=\"far fa-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
\t{{ footer }}
", "Localisation/language_list.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Localisation/language_list.twig");
    }
}
