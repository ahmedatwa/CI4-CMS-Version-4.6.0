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

/* Report/report.twig */
class __TwigTemplate_2a4cc1f8dcd4e9c2bab5bc766ba9a711 extends Template
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
\t\t\t\t\t<h1>";
        // line 7
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            yield "\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 11
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 18
        yield "\t\t\t<div class=\"card mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t\t";
        // line 21
        yield ($context["text_type"] ?? null);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<select name=\"report\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 27
            yield "\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "code", [], "any", false, false, false, 27) == ($context["code"] ?? null))) {
                // line 28
                yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "href", [], "any", false, false, false, 28);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "text", [], "any", false, false, false, 28);
                yield "</option>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 30
                yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "href", [], "any", false, false, false, 30);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "text", [], "any", false, false, false, 30);
                yield "</option>
\t\t\t\t\t\t\t\t\t";
            }
            // line 32
            yield "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['report'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t<span class=\"input-group-text\"><i id=\"filter\" class=\"fa fa-filter\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-4\" id=\"module\"></div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
<script type=\"text/javascript\">
\$('select[name=\\'report\\']').on('change', function() {
\t\$.ajax({
\t\turl: \$(this).val(),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#filter').removeClass('fa fa-filter').addClass('fas fa-spinner fa-spin');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#filter').removeClass('fas fa-spinner fa-spin').addClass('fa fa-filter');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#module').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
\$('select[name=\\'report\\']').trigger('change');
</script>
";
        // line 63
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
        return "Report/report.twig";
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
        return array (  156 => 63,  124 => 33,  118 => 32,  110 => 30,  102 => 28,  99 => 27,  95 => 26,  87 => 21,  82 => 18,  77 => 14,  66 => 11,  63 => 10,  59 => 9,  54 => 7,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
{{ column_left }}
\t<main id=\"content\">
\t\t<div class=\"container-fluid px-4\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<div class=\"container-fluid\">
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
\t\t\t\t\t{{ text_type }}
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<select name=\"report\" class=\"form-control\">
\t\t\t\t\t\t\t\t{% for report in reports %}
\t\t\t\t\t\t\t\t\t{% if report.code == code %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ report.href }}\" selected=\"selected\">{{ report.text }}</option>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ report.href }}\">{{ report.text }}</option>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t<span class=\"input-group-text\"><i id=\"filter\" class=\"fa fa-filter\"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-4\" id=\"module\"></div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
<script type=\"text/javascript\">
\$('select[name=\\'report\\']').on('change', function() {
\t\$.ajax({
\t\turl: \$(this).val(),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#filter').removeClass('fa fa-filter').addClass('fas fa-spinner fa-spin');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#filter').removeClass('fas fa-spinner fa-spin').addClass('fa fa-filter');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#module').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
\$('select[name=\\'report\\']').trigger('change');
</script>
{{ footer }}
", "Report/report.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Report/report.twig");
    }
}
