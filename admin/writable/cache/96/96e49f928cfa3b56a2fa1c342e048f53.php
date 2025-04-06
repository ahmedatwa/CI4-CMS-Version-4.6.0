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

/* Design/translation_list.twig */
class __TwigTemplate_7433b0926624fb7ab474e3918f464cd3 extends Template
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
\t<main id=\"content\">
\t\t<div class=\"container-fluid px-4\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"filter\" aria-expanded=\"false\" data-target=\"#filter\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        // line 8
        yield ($context["button_filter"] ?? null);
        yield "\">
\t\t\t\t\t\t\t<i class=\"fas fa-filter\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a href=\"";
        // line 11
        yield ($context["add"] ?? null);
        yield "\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 14
        yield ($context["delete"] ?? null);
        yield "\" role=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger disabled\" name=\"button-delete\" form=\"form-translation\">
\t\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1>";
        // line 18
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 21
            yield "\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 22
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 22);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 22);
            yield "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 29
        yield "\t\t\t<div
\t\t\t\tclass=\"collapse\" id=\"filter\">
\t\t\t\t";
        // line 32
        yield "\t\t\t\t<div class=\"card mb-3\" id=\"filter\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<i class=\"fas fa-filter\"></i>
\t\t\t\t\t\t";
        // line 35
        yield ($context["text_filter"] ?? null);
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body row\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"filter-name\" class=\"col-form-label\">";
        // line 40
        yield ($context["filter_name"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 41
        yield ($context["filter_name"] ?? null);
        yield "\" name=\"filter_name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"filter-email\" class=\"col-form-label\">";
        // line 44
        yield ($context["filter_email"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 45
        yield ($context["filter_email"] ?? null);
        yield "\" name=\"filter_email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"filter-status\" class=\"col-form-label\">";
        // line 50
        yield ($context["filter_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"fillter_status\">
\t\t\t\t\t\t\t\t\t<option selected value=\"\">";
        // line 52
        yield ($context["text_select"] ?? null);
        yield "</option>
\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 53
        yield ($context["text_enabled"] ?? null);
        yield "\">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 54
        yield ($context["text_disabled"] ?? null);
        yield "\">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"filter-date\" class=\"col-form-label\">";
        // line 58
        yield ($context["filter_date_added"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group flex-nowrap\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"DD/MM/YYYY\" name=\"fillter_date_added\" id=\"datepicker\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i name=\"datepicker\" class=\"fas fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 69
        yield "\t\t\t\t</div>
\t\t\t\t";
        // line 71
        yield "\t\t\t</div>
\t\t\t<div class=\"card mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t\t";
        // line 75
        yield ($context["text_list"] ?? null);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"form-translation\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 79
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 4, \"desc\" ]]'>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th width=\"1%\" class=\"no-sort\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" id=\"selectAll\"/>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"filter_name\">";
        // line 87
        yield ($context["column_language"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"filter_email\">";
        // line 88
        yield ($context["column_route"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"fillter_status\">";
        // line 89
        yield ($context["column_key"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"fillter_date_added\">";
        // line 90
        yield ($context["column_value"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center no-sort\">";
        // line 91
        yield ($context["column_action"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["translations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 96
            yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 98
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "translation_id", [], "any", false, false, false, 98), ($context["selected"] ?? null))) {
                // line 99
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "translation_id", [], "any", false, false, false, 99);
                yield "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 101
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "translation_id", [], "any", false, false, false, 101);
                yield "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 103
            yield "\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 104
            yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "language", [], "any", false, false, false, 104);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 105
            yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "route", [], "any", false, false, false, 105);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 106
            yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "key", [], "any", false, false, false, 106);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 107
            yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "value", [], "any", false, false, false, 107);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 109
            yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "edit", [], "any", false, false, false, 109);
            yield "\" role=\"button\" class=\"btn btn-primary btn-sm\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
            yield ($context["button_edit"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
";
        // line 123
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Design/translation_list.twig";
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
        return array (  300 => 123,  290 => 115,  276 => 109,  271 => 107,  267 => 106,  263 => 105,  259 => 104,  256 => 103,  250 => 101,  244 => 99,  242 => 98,  238 => 96,  234 => 95,  227 => 91,  223 => 90,  219 => 89,  215 => 88,  211 => 87,  198 => 79,  191 => 75,  185 => 71,  182 => 69,  169 => 58,  160 => 54,  154 => 53,  150 => 52,  145 => 50,  137 => 45,  133 => 44,  127 => 41,  123 => 40,  115 => 35,  110 => 32,  106 => 29,  101 => 25,  90 => 22,  87 => 21,  83 => 20,  78 => 18,  69 => 14,  61 => 11,  55 => 8,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
{{ column_left }}
\t<main id=\"content\">
\t\t<div class=\"container-fluid px-4\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"filter\" aria-expanded=\"false\" data-target=\"#filter\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_filter }}\">
\t\t\t\t\t\t\t<i class=\"fas fa-filter\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a href=\"{{ add }}\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_add }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ delete }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_delete }}\" class=\"btn btn-danger disabled\" name=\"button-delete\" form=\"form-translation\">
\t\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# </ page header #}
\t\t\t<div
\t\t\t\tclass=\"collapse\" id=\"filter\">
\t\t\t\t{# Filter Start #}
\t\t\t\t<div class=\"card mb-3\" id=\"filter\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<i class=\"fas fa-filter\"></i>
\t\t\t\t\t\t{{ text_filter }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body row\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"filter-name\" class=\"col-form-label\">{{ filter_name }}</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"{{ filter_name }}\" name=\"filter_name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"filter-email\" class=\"col-form-label\">{{ filter_email }}</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"{{ filter_email }}\" name=\"filter_email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"filter-status\" class=\"col-form-label\">{{ filter_status }}</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"fillter_status\">
\t\t\t\t\t\t\t\t\t<option selected value=\"\">{{ text_select }}</option>
\t\t\t\t\t\t\t\t\t<option value=\"{{ text_enabled }}\">{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t<option value=\"{{ text_disabled }}\">{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"filter-date\" class=\"col-form-label\">{{ filter_date_added }}</label>
\t\t\t\t\t\t\t\t<div class=\"input-group flex-nowrap\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"DD/MM/YYYY\" name=\"fillter_date_added\" id=\"datepicker\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i name=\"datepicker\" class=\"fas fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{# <!-- Card Body --> #}
\t\t\t\t</div>
\t\t\t\t{# Filter End #}
\t\t\t</div>
\t\t\t<div class=\"card mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t\t{{ text_list }}
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"form-translation\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 4, \"desc\" ]]'>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th width=\"1%\" class=\"no-sort\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" id=\"selectAll\"/>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"filter_name\">{{ column_language }}</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"filter_email\">{{ column_route }}</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"fillter_status\">{{ column_key }}</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"fillter_date_added\">{{ column_value }}</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center no-sort\">{{ column_action }}</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for translation in translations %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if translation.translation_id in selected %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ translation.translation_id }}\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ translation.translation_id }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ translation.language }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ translation.route }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ translation.key }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ translation.value }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ translation.edit }}\" role=\"button\" class=\"btn btn-primary btn-sm\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_edit }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{{ footer }}", "Design/translation_list.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Design/translation_list.twig");
    }
}
