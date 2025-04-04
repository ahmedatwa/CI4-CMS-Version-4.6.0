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

/* Catalog/information_list.twig */
class __TwigTemplate_67409c2f41f3ae03693047f2917da190 extends Template
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
\t\t\t\t\t\t<a href=\"";
        // line 8
        yield ($context["add"] ?? null);
        yield "\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 11
        yield ($context["delete"] ?? null);
        yield "\" role=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger disabled\" name=\"button-delete\" form=\"form-information\">
\t\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1>";
        // line 15
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            yield "\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 19
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            yield "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 26
        yield "\t\t\t<div class=\"card mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t\t";
        // line 29
        yield ($context["text_list"] ?? null);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"form-information\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 33
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 1, \"asc\" ]]'>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th width=\"1%\" class=\"no-sort\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" id=\"selectAll\"/>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th width=\"50%\">";
        // line 41
        yield ($context["column_title"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
        // line 42
        yield ($context["column_status"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center no-sort\">";
        // line 43
        yield ($context["column_action"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 48
            yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 50
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 50), ($context["selected"] ?? null))) {
                // line 51
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 51);
                yield "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 53
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 53);
                yield "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 55
            yield "\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 56
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 56);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 57
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "status", [], "any", false, false, false, 57);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "edit", [], "any", false, false, false, 60);
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
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
\t";
        // line 75
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
        return "Catalog/information_list.twig";
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
        return array (  200 => 75,  190 => 67,  175 => 60,  169 => 57,  165 => 56,  162 => 55,  156 => 53,  150 => 51,  148 => 50,  144 => 48,  140 => 47,  133 => 43,  129 => 42,  125 => 41,  112 => 33,  105 => 29,  100 => 26,  95 => 22,  84 => 19,  81 => 18,  77 => 17,  72 => 15,  63 => 11,  55 => 8,  46 => 2,  42 => 1,);
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
\t\t\t\t\t\t<a href=\"{{ add }}\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_add }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ delete }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_delete }}\" class=\"btn btn-danger disabled\" name=\"button-delete\" form=\"form-information\">
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
\t\t\t<div class=\"card mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t\t{{ text_list }}
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"form-information\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 1, \"asc\" ]]'>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th width=\"1%\" class=\"no-sort\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" id=\"selectAll\"/>
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th width=\"50%\">{{ column_title }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_status }}</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center no-sort\">{{ column_action }}</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for information in informations %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if information.information_id in selected %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ information.information_id }}\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ information.information_id }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ information.title }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ information.status }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ information.edit }}\" role=\"button\" class=\"btn btn-primary btn-sm\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_edit }}\">
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
\t{{ footer }}
", "Catalog/information_list.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Catalog/information_list.twig");
    }
}
