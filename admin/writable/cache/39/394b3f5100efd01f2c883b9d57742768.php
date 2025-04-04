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

/* Customer/customer_list.twig */
class __TwigTemplate_74f92eccf228a99a51745adc9eae3cf8 extends Template
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
\t\t\t\t\t\t<a class=\"btn btn-secondary\" data-toggle=\"collapse\" role=\"button\" aria-controls=\"filter\" aria-expanded=\"false\" href=\"#filter\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        // line 8
        yield ($context["button_filter"] ?? null);
        yield "\">
\t\t\t\t\t\t\t<i class=\"fas fa-filter\"></i></a>
\t\t\t\t\t\t<a href=\"";
        // line 10
        yield ($context["add"] ?? null);
        yield "\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 13
        yield ($context["delete"] ?? null);
        yield "\" role=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" name=\"button-delete\" form=\"form-customer\">
\t\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1>";
        // line 17
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
            yield "\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 21
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 21);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 21);
            yield "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 28
        yield "\t\t\t<div
\t\t\t\tclass=\"collapse\" id=\"filter\">
\t\t\t\t";
        // line 31
        yield "\t\t\t\t<div class=\"card mb-3\" id=\"filter\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<i class=\"fas fa-filter\"></i>
\t\t\t\t\t\t";
        // line 34
        yield ($context["text_filter"] ?? null);
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body row\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"filter-name\" class=\"col-form-label\">";
        // line 39
        yield ($context["entry_name"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 40
        yield ($context["entry_name"] ?? null);
        yield "\" name=\"filter_name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"filter-email\" class=\"col-form-label\">";
        // line 43
        yield ($context["entry_email"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 44
        yield ($context["entry_email"] ?? null);
        yield "\" name=\"filter_email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"filter-status\" class=\"col-form-label\">";
        // line 49
        yield ($context["entry_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"filter_status\">
\t\t\t\t\t\t\t\t\t<option selected value=\"\">";
        // line 51
        yield ($context["text_select"] ?? null);
        yield "</option>
\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 52
        yield ($context["text_enabled"] ?? null);
        yield "\">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 53
        yield ($context["text_disabled"] ?? null);
        yield "\">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"filter-date\" class=\"col-form-label\">";
        // line 57
        yield ($context["entry_date_added"] ?? null);
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
        // line 68
        yield "\t\t\t\t</div>
\t\t\t\t";
        // line 70
        yield "\t\t\t</div>
\t\t\t<div class=\"card mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t\t";
        // line 74
        yield ($context["text_list"] ?? null);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"form-customer\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 78
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 1, \"asc\" ]]'>
\t\t\t\t\t\t\t\t<thead class=\"\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th width=\"1%\" class=\"no-sort\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" id=\"selectAll\"/>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"filter_name\">";
        // line 86
        yield ($context["column_name"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"filter_email\">";
        // line 87
        yield ($context["column_email"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"filter_status\">";
        // line 88
        yield ($context["column_status"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"fillter_date_added\">";
        // line 89
        yield ($context["column_date_added"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center no-sort\">";
        // line 90
        yield ($context["column_action"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 95
            yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 97
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 97), ($context["selected"] ?? null))) {
                // line 98
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 98);
                yield "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 100
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 100);
                yield "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 102
            yield "\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 103
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 103);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 104
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 104);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 105
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 105);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 106
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 106);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 109
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 109);
            yield "\" role=\"button\" class=\"btn btn-primary btn-sm\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
            yield ($context["button_edit"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>

<script type=\"text/javascript\">
";
        // line 127
        yield "    \$(\"button[name^=\\'button-purge\\']\").on(\"click\", function () {
        swal.fire({
            title: \"";
        // line 129
        yield ($context["text_confirm"] ?? null);
        yield "\",
            text: \"";
        // line 130
        yield ($context["text_confirmPurge"] ?? null);
        yield "\",
            icon: \"warning\",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            showCloseButton: true,
        }).then(result => {
            if (result.isConfirmed) {
                \$.ajax({
                    url: \"";
        // line 138
        yield ($context["purge"] ?? null);
        yield "\",
                    method: \"POST\",
                    dataType: \"json\",
                    headers: {
                        \"X-Requested-With\": \"XMLHttpRequest\",
                        \"Content-Type\": \"application/x-www-form-urlencoded; charset=UTF-8\",
                    },
                    success: function (json) {
                        if (json['success']) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: json['success'],
                                showConfirmButton: false,
                                timer: 1500
                            }).then((result) => {
                                if (result.isDismissed) {
                                    location = json['redirect'];
                                }
                            });
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        swal.fire(\"Error!\", xhr.statusText, \"error\");
                    }
                });
            }
        })
    });
</script>
";
        // line 168
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Customer/customer_list.twig";
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
        return array (  355 => 168,  322 => 138,  311 => 130,  307 => 129,  303 => 127,  291 => 116,  276 => 109,  270 => 106,  266 => 105,  262 => 104,  258 => 103,  255 => 102,  249 => 100,  243 => 98,  241 => 97,  237 => 95,  233 => 94,  226 => 90,  222 => 89,  218 => 88,  214 => 87,  210 => 86,  197 => 78,  190 => 74,  184 => 70,  181 => 68,  168 => 57,  159 => 53,  153 => 52,  149 => 51,  144 => 49,  136 => 44,  132 => 43,  126 => 40,  122 => 39,  114 => 34,  109 => 31,  105 => 28,  100 => 24,  89 => 21,  86 => 20,  82 => 19,  77 => 17,  68 => 13,  60 => 10,  55 => 8,  46 => 2,  42 => 1,);
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
\t\t\t\t\t\t<a class=\"btn btn-secondary\" data-toggle=\"collapse\" role=\"button\" aria-controls=\"filter\" aria-expanded=\"false\" href=\"#filter\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_filter }}\">
\t\t\t\t\t\t\t<i class=\"fas fa-filter\"></i></a>
\t\t\t\t\t\t<a href=\"{{ add }}\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_add }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ delete }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_delete }}\" class=\"btn btn-danger\" name=\"button-delete\" form=\"form-customer\">
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
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"filter-name\" class=\"col-form-label\">{{ entry_name }}</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"{{ entry_name }}\" name=\"filter_name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"filter-email\" class=\"col-form-label\">{{ entry_email }}</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"{{ entry_email }}\" name=\"filter_email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"filter-status\" class=\"col-form-label\">{{ entry_status }}</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"filter_status\">
\t\t\t\t\t\t\t\t\t<option selected value=\"\">{{ text_select }}</option>
\t\t\t\t\t\t\t\t\t<option value=\"{{ text_enabled }}\">{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t<option value=\"{{ text_disabled }}\">{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"filter-date\" class=\"col-form-label\">{{ entry_date_added }}</label>
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
\t\t\t\t\t<form id=\"form-customer\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 1, \"asc\" ]]'>
\t\t\t\t\t\t\t\t<thead class=\"\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th width=\"1%\" class=\"no-sort\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" id=\"selectAll\"/>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"filter_name\">{{ column_name }}</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"filter_email\">{{ column_email }}</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"filter_status\">{{ column_status }}</th>
\t\t\t\t\t\t\t\t\t\t<th id=\"fillter_date_added\">{{ column_date_added }}</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center no-sort\">{{ column_action }}</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for customer in customers %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if customer.customer_id in selected %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ customer.customer_id }}\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ customer.customer_id }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ customer.name }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ customer.email }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ customer.status }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ customer.date_added }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ customer.edit }}\" role=\"button\" class=\"btn btn-primary btn-sm\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_edit }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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

<script type=\"text/javascript\">
{# Purge Deleted #}
    \$(\"button[name^=\\'button-purge\\']\").on(\"click\", function () {
        swal.fire({
            title: \"{{ text_confirm }}\",
            text: \"{{ text_confirmPurge }}\",
            icon: \"warning\",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            showCloseButton: true,
        }).then(result => {
            if (result.isConfirmed) {
                \$.ajax({
                    url: \"{{ purge }}\",
                    method: \"POST\",
                    dataType: \"json\",
                    headers: {
                        \"X-Requested-With\": \"XMLHttpRequest\",
                        \"Content-Type\": \"application/x-www-form-urlencoded; charset=UTF-8\",
                    },
                    success: function (json) {
                        if (json['success']) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: json['success'],
                                showConfirmButton: false,
                                timer: 1500
                            }).then((result) => {
                                if (result.isDismissed) {
                                    location = json['redirect'];
                                }
                            });
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        swal.fire(\"Error!\", xhr.statusText, \"error\");
                    }
                });
            }
        })
    });
</script>
{{ footer }}", "Customer/customer_list.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Customer/customer_list.twig");
    }
}
