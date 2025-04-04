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

/* Report/online.twig */
class __TwigTemplate_cca40a64c48f9dfcbc8ef3d55bcad7cf extends Template
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
\t\t\t\t\t\t";
        // line 12
        yield "\t\t\t\t\t</div>
\t\t\t\t\t<h1>";
        // line 13
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            yield "\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 17
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 24
        yield "\t\t\t<div class=\"card mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t\t";
        // line 27
        yield ($context["text_list"] ?? null);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form enctype=\"multipart/form-data\" id=\"form-online\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 31
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered\" data-order='[[ 1, \"asc\" ]]'>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 39
        yield "\t\t\t\t\t\t\t\t\t\t<th>";
        yield ($context["column_ip"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
        // line 40
        yield ($context["column_customer"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
        // line 41
        yield ($context["column_url"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
        // line 42
        yield ($context["column_referer"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
        // line 43
        yield ($context["column_date_added"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
        // line 44
        yield ($context["column_action"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 48
        if (($context["customers"] ?? null)) {
            // line 49
            yield "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 50
                yield "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 58
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "ip", [], "any", false, false, false, 58);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 59
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer", [], "any", false, false, false, 59);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-break\">";
                // line 60
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "url", [], "any", false, false, false, 60);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-break\">";
                // line 61
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "referer", [], "any", false, false, false, 61);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 62
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 62);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 64
                if (CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 64)) {
                    // line 65
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 65);
                    yield "\" class=\"btn btn-primary btn-sm\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 70
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-sm disabled\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 74
                yield "\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "\t\t\t\t\t\t\t\t";
        }
        // line 78
        yield "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
        // line 86
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
        return "Report/online.twig";
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
        return array (  210 => 86,  200 => 78,  197 => 77,  189 => 74,  181 => 70,  170 => 65,  168 => 64,  163 => 62,  159 => 61,  155 => 60,  151 => 59,  146 => 58,  143 => 50,  138 => 49,  136 => 48,  129 => 44,  125 => 43,  121 => 42,  117 => 41,  113 => 40,  108 => 39,  98 => 31,  91 => 27,  86 => 24,  81 => 20,  70 => 17,  67 => 16,  63 => 15,  58 => 13,  55 => 12,  46 => 2,  42 => 1,);
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
\t\t\t\t\t\t{# <a href=\"{{ action }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-delete\" data-placement=\"top\"
\t\t\t\t\t\t\ttitle=\"{{ button_delete }}\" class=\"btn btn-danger\" form=\"form-online\">
\t\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t\t</a> #}
\t\t\t\t\t</div>
\t\t\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# </ page header #}
\t\t\t<div class=\"card mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t\t{{ text_list }}
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form enctype=\"multipart/form-data\" id=\"form-online\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered\" data-order='[[ 1, \"asc\" ]]'>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t{# <th width=\"1%\" class=\"no-sort\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" id=\"selectAll\"/>
\t\t\t\t\t\t\t\t\t\t</th> #}
\t\t\t\t\t\t\t\t\t\t<th>{{ column_ip }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_customer }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_url }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_referer }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_date_added }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_action }}</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% if customers %}
\t\t\t\t\t\t\t\t\t\t{% for customer in customers %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t{# <th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if customer.ip in selected %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ customer.ip }}\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ customer.ip }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</th> #}
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ customer.ip }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ customer.customer }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-break\">{{ customer.url }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-break\">{{ customer.referer }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ customer.date_added}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if customer.customer_id %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ customer.edit }}\" class=\"btn btn-primary btn-sm\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_edit }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-sm disabled\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_edit }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
{{ footer }}
", "Report/online.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Report/online.twig");
    }
}
