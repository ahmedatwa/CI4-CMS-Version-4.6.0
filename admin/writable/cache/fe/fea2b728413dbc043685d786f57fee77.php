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

/* Extensions\Views\report\user_activity_info.twig */
class __TwigTemplate_ec7ba98a3cb9c76220da04053dee48cb extends Template
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
\t<div class=\"float-right\">
\t\t<a href=\"";
        // line 3
        yield ($context["delete"] ?? null);
        yield "\" role=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" name=\"button-delete\" form=\"form-user-activity\"><i class=\"far fa-trash-alt\"></i> ";
        yield ($context["button_delete"] ?? null);
        yield "</a>
\t</div>
\t<form id=\"form-user-activity\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t<input type=\"hidden\" name=\"";
        // line 6
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 2, \"desc\" ]]'>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"1%\" class=\"no-sort\">
\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" id=\"selectAll\"/>
\t\t\t\t\t</th>

\t\t\t\t\t<td>";
        // line 14
        yield ($context["column_comment"] ?? null);
        yield "</td>
\t\t\t\t\t<td>";
        // line 15
        yield ($context["column_ip"] ?? null);
        yield "</td>
\t\t\t\t\t<td>";
        // line 16
        yield ($context["column_date_added"] ?? null);
        yield "</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["activities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 21
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t";
            // line 23
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "activity_id", [], "any", false, false, false, 23), ($context["selected"] ?? null))) {
                // line 24
                yield "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "activity_id", [], "any", false, false, false, 24);
                yield "\" checked=\"checked\"/>
\t\t\t\t\t\t\t";
            } else {
                // line 26
                yield "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "activity_id", [], "any", false, false, false, 26);
                yield "\"/>
\t\t\t\t\t\t\t";
            }
            // line 28
            yield "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<td>";
            // line 29
            yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "comment", [], "any", false, false, false, 29);
            yield "</td>
\t\t\t\t\t\t<td class=\"text-left\">";
            // line 30
            yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "ip", [], "any", false, false, false, 30);
            yield "</td>
\t\t\t\t\t\t<td class=\"text-left\">";
            // line 31
            yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date_added", [], "any", false, false, false, 31);
            yield "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "\t\t\t</tbody>
\t\t</table>
\t</form>
</fieldset>
<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\t\$('#table-list').DataTable({
\t\t\"conditionalPaging\": true,
\t\t\"sDom\": 'lrtip',
\t\t\"responsive\": true,
\t\t\"pageLength\": 20,
\t\t\"lengthMenu\": [20, 35, 50, 100]
\t});
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Extensions\\Views\\report\\user_activity_info.twig";
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
        return array (  126 => 34,  117 => 31,  113 => 30,  109 => 29,  106 => 28,  100 => 26,  94 => 24,  92 => 23,  88 => 21,  84 => 20,  77 => 16,  73 => 15,  69 => 14,  56 => 6,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<fieldset>
\t<div class=\"float-right\">
\t\t<a href=\"{{ delete }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_delete }}\" class=\"btn btn-danger\" name=\"button-delete\" form=\"form-user-activity\"><i class=\"far fa-trash-alt\"></i> {{ button_delete }}</a>
\t</div>
\t<form id=\"form-user-activity\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t<table id=\"table-list\" class=\"table table-bordered table-striped\" data-order='[[ 2, \"desc\" ]]'>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"1%\" class=\"no-sort\">
\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" id=\"selectAll\"/>
\t\t\t\t\t</th>

\t\t\t\t\t<td>{{ column_comment }}</td>
\t\t\t\t\t<td>{{ column_ip }}</td>
\t\t\t\t\t<td>{{ column_date_added }}</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for activity in activities %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t{% if activity.activity_id in selected %}
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ activity.activity_id }}\" checked=\"checked\"/>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"{{ activity.activity_id }}\"/>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<td>{{ activity.comment }}</td>
\t\t\t\t\t\t<td class=\"text-left\">{{ activity.ip }}</td>
\t\t\t\t\t\t<td class=\"text-left\">{{ activity.date_added }}</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</form>
</fieldset>
<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\t\$('#table-list').DataTable({
\t\t\"conditionalPaging\": true,
\t\t\"sDom\": 'lrtip',
\t\t\"responsive\": true,
\t\t\"pageLength\": 20,
\t\t\"lengthMenu\": [20, 35, 50, 100]
\t});
});
</script>
", "Extensions\\Views\\report\\user_activity_info.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Extensions/Views/report/user_activity_info.twig");
    }
}
