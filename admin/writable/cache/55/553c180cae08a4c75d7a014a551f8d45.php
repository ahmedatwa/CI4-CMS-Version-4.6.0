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

/* Common/profile.twig */
class __TwigTemplate_917ebe2db9a3a3c41cad37c33703e5bd extends Template
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
        yield ($context["edit"] ?? null);
        yield "\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_edit"] ?? null);
        yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"fas fa-user-edit\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<h1>";
        // line 12
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            yield "\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 16
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fas fa-pen\"></i>
\t\t\t\t";
        // line 25
        yield ($context["text_edit"] ?? null);
        yield "
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<ul class=\"nav nav-tabs mb-3\" id=\"profile\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"general-tab\" data-toggle=\"tab\" href=\"#general\" role=\"tab\" aria-controls=\"general\" aria-selected=\"true\">";
        // line 30
        yield ($context["tab_general"] ?? null);
        yield "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"activity-tab\" data-toggle=\"tab\" href=\"#activity\" role=\"tab\" aria-controls=\"activity\" aria-selected=\"false\">";
        // line 33
        yield ($context["tab_activity"] ?? null);
        yield "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"general\" role=\"tabpanel\" aria-labelledby=\"general-tab\">
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_firstname\" class=\"col-sm-2 col-form-label\">";
        // line 39
        yield ($context["entry_image"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 41
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" data-ci-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_firstname\" class=\"col-sm-2 col-form-label\">";
        // line 45
        yield ($context["entry_fullname"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">";
        // line 46
        yield ($context["firstname"] ?? null);
        yield "
\t\t\t\t\t\t\t\t";
        // line 47
        yield ($context["lastname"] ?? null);
        yield "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_username\" class=\"col-sm-2 col-form-label\">";
        // line 50
        yield ($context["entry_username"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">";
        // line 51
        yield ($context["username"] ?? null);
        yield "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_email\" class=\"col-sm-2 col-form-label\">";
        // line 54
        yield ($context["entry_email"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">";
        // line 55
        yield ($context["email"] ?? null);
        yield "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend class=\"border-bottom mb-3\">";
        // line 58
        yield ($context["text_other"] ?? null);
        yield "</legend>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_status\" class=\"col-sm-2 col-form-label\">";
        // line 60
        yield ($context["entry_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">";
        // line 61
        yield ($context["status"] ?? null);
        yield "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_user_group\" class=\"col-sm-2 col-form-label\">";
        // line 64
        yield ($context["entry_user_group"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">";
        // line 65
        yield ($context["user_group"] ?? null);
        yield "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 70
        yield "\t\t\t\t\t<div class=\"tab-pane fade\" id=\"activity\" role=\"tabpanel\" aria-labelledby=\"activity-tab\">
\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 2, \"desc\" ]]'>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 74
        yield ($context["column_comment"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 75
        yield ($context["column_ip"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 76
        yield ($context["column_date_added"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["activities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 81
            yield "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 82
            yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "comment", [], "any", false, false, false, 82);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 83
            yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "ip", [], "any", false, false, false, 83);
            yield "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 84
            yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date_added", [], "any", false, false, false, 84);
            yield "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 91
        yield "\t\t\t\t</div>
\t\t\t\t";
        // line 93
        yield "\t\t\t</div>
\t\t\t<!-- Card Body -->
\t\t</div>
\t</div>
</main>
";
        // line 98
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
        return "Common/profile.twig";
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
        return array (  252 => 98,  245 => 93,  242 => 91,  237 => 87,  228 => 84,  224 => 83,  220 => 82,  217 => 81,  213 => 80,  206 => 76,  202 => 75,  198 => 74,  192 => 70,  185 => 65,  181 => 64,  175 => 61,  171 => 60,  166 => 58,  160 => 55,  156 => 54,  150 => 51,  146 => 50,  140 => 47,  136 => 46,  132 => 45,  123 => 41,  118 => 39,  109 => 33,  103 => 30,  95 => 25,  87 => 19,  76 => 16,  73 => 15,  69 => 14,  64 => 12,  55 => 8,  46 => 2,  42 => 1,);
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
\t\t\t\t\t<a href=\"{{ edit }}\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_edit }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"fas fa-user-edit\"></i>
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
\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fas fa-pen\"></i>
\t\t\t\t{{ text_edit }}
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<ul class=\"nav nav-tabs mb-3\" id=\"profile\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"general-tab\" data-toggle=\"tab\" href=\"#general\" role=\"tab\" aria-controls=\"general\" aria-selected=\"true\">{{ tab_general }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t<a class=\"nav-link\" id=\"activity-tab\" data-toggle=\"tab\" href=\"#activity\" role=\"tab\" aria-controls=\"activity\" aria-selected=\"false\">{{ tab_activity }}</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"general\" role=\"tabpanel\" aria-labelledby=\"general-tab\">
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_firstname\" class=\"col-sm-2 col-form-label\">{{ entry_image }}</label>
\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t<img src=\"{{ thumb }}\" alt=\"\" title=\"\" data-ci-placeholder=\"{{ placeholder }}\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_firstname\" class=\"col-sm-2 col-form-label\">{{ entry_fullname }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">{{ firstname }}
\t\t\t\t\t\t\t\t{{ lastname }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_username\" class=\"col-sm-2 col-form-label\">{{ entry_username }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">{{ username }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">{{ email }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend class=\"border-bottom mb-3\">{{ text_other }}</legend>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_status\" class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">{{ status }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_user_group\" class=\"col-sm-2 col-form-label\">{{ entry_user_group }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">{{ user_group }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</div>
\t\t\t\t\t{# general #}
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"activity\" role=\"tabpanel\" aria-labelledby=\"activity-tab\">
\t\t\t\t\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 2, \"desc\" ]]'>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ column_comment }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ column_ip }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ column_date_added }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for activity in activities %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>{{ activity.comment }}</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">{{ activity.ip }}</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">{{ activity.date_added }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t{# activity #}
\t\t\t\t</div>
\t\t\t\t{# myTabContent #}
\t\t\t</div>
\t\t\t<!-- Card Body -->
\t\t</div>
\t</div>
</main>
{{ footer }}
", "Common/profile.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Common/profile.twig");
    }
}
