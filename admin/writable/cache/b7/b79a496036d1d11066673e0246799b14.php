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

/* Setting/extension.twig */
class __TwigTemplate_e53fa51bc37adb3ddf3897ab0f9c5881 extends Template
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
        yield " ";
        yield ($context["column_left"] ?? null);
        yield "
\t<main id=\"content\">
    <div class=\"container-fluid px-4\">
        <div class=\"page-header\">
            <div class=\"container-fluid\">
                <h1>";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                <ul class=\"breadcrumb\">
                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "                    <li class=\"breadcrumb-item\">
                        <a href=\"";
            // line 10
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            yield "</a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "                </ul>
            </div>
        </div> ";
        // line 16
        yield "        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-th-list\"></i>
                ";
        // line 19
        yield ($context["text_list"] ?? null);
        yield "
            </div>
            <div class=\"card-body\">
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>";
        // line 23
        yield ($context["text_type"] ?? null);
        yield "</legend>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"type\" class=\"form-control\">
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "code", [], "any", false, false, false, 27) == ($context["type"] ?? null))) {
                // line 28
                yield "                        <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 28);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 28);
                yield "</option>
                        ";
            } else {
                // line 30
                yield "                           <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 30);
                yield "</option> 
                        ";
            }
            // line 31
            yield "    
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<span class=\"input-group-text\"><i id=\"filter\" class=\"fa fa-filter\"></i></span>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<div id=\"extension\" class=\"mt-3\"></div>
\t\t\t </div>
        </div>
    </div>
</main>
";
        // line 42
        if (($context["categories"] ?? null)) {
            // line 43
            yield "<script type=\"text/javascript\">
\$('select[name=\\'type\\']').on('change', function() {
\t\$.ajax({
\t\turl: \$('select[name=\\'type\\']').val(),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#filter').removeClass('fa fa-filter').addClass('fas fa-spinner fa-spin');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#filter').removeClass('fas fa-spinner fa-spin').addClass('fa fa-filter');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#extension').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
\$('select[name=\\'type\\']').trigger('change');
// Install
\$('#extension').on('click', '.btn-success', function(e) {
\te.preventDefault();
\tvar element = this;
\tswal.fire({
\t\ttitle: '";
            // line 68
            yield ($context["text_confirm"] ?? null);
            yield "',
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\ticon: 'question',
\t}).then((result) => {
\t\tif (result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\t\turl: \$(element).attr('href'),
\t\t\t\tdataType: \"json\",
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).html('<i class=\"fas fa-spinner fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif(json['success']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\t\tposition: 'top-end',
\t\t\t\t\t\t\ticon: 'success',
\t\t\t\t\t\t\ttitle: json['success'],
\t\t\t\t\t\t\tshowConfirmButton: false,
\t\t\t\t\t\t\ttimer: 1500
\t\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t\tif(json['error']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\t\tposition: 'top-end',
\t\t\t\t\t\t\ticon: 'error',
\t\t\t\t\t\t\ttitle: json['error'],
\t\t\t\t\t\t\tshowConfirmButton: false,
\t\t\t\t\t\t\ttimer: 1500
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t\$('select[name=\\'type\\']').trigger('change');
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
            \t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
});
";
            // line 113
            yield "\$('#extension').on('click', '.btn-danger', function(e) {
\te.preventDefault();
\tvar element = this;
\tswal.fire({
\t\ttitle: '";
            // line 117
            yield ($context["text_confirm"] ?? null);
            yield "',
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\ticon: 'question',
\t}).then(result => {
\t\tif (result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\t\turl: \$(element).attr('href'),
\t\t\t\tdataType: \"json\",
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).html('<i class=\"fas fa-spinner fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif(json['success']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\t\tposition: 'top-end',
\t\t\t\t\t\t\ticon: 'success',
\t\t\t\t\t\t\ttitle: json['success'],
\t\t\t\t\t\t\tshowConfirmButton: false,
\t\t\t\t\t\t\ttimer: 1500
\t\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t\tif(json['error']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\t\tposition: 'top-end',
\t\t\t\t\t\t\ticon: 'error',
\t\t\t\t\t\t\ttitle: json['error'],
\t\t\t\t\t\t\tshowConfirmButton: false,
\t\t\t\t\t\t\ttimer: 1500
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t\$('select[name=\\'type\\']').trigger('change');\t\t\t\t\t
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\tswal.fire(\"Error!\", xhr.statusText, \"error\");
\t\t\t\t}
\t\t\t});
\t\t}
\t});
});

</script>\t
";
        }
        // line 164
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Setting/extension.twig";
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
        return array (  270 => 164,  220 => 117,  214 => 113,  167 => 68,  140 => 43,  138 => 42,  127 => 33,  120 => 31,  112 => 30,  104 => 28,  101 => 27,  97 => 26,  91 => 23,  84 => 19,  79 => 16,  75 => 13,  64 => 10,  61 => 9,  57 => 8,  52 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }} {{ column_left }}
\t<main id=\"content\">
    <div class=\"container-fluid px-4\">
        <div class=\"page-header\">
            <div class=\"container-fluid\">
                <h1>{{ heading_title }}</h1>
                <ul class=\"breadcrumb\">
                    {% for breadcrumb in breadcrumbs %}
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div> {# </ page header #}
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-th-list\"></i>
                {{ text_list }}
            </div>
            <div class=\"card-body\">
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>{{ text_type }}</legend>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"type\" class=\"form-control\">
                        {% for category in categories %}
                        {% if category.code == type %}
                        <option value=\"{{ category.href }}\" selected=\"selected\">{{ category.text }}</option>
                        {% else %}
                           <option value=\"{{ category.href }}\">{{ category.text }}</option> 
                        {% endif %}    
                        {% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<span class=\"input-group-text\"><i id=\"filter\" class=\"fa fa-filter\"></i></span>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<div id=\"extension\" class=\"mt-3\"></div>
\t\t\t </div>
        </div>
    </div>
</main>
{% if categories %}
<script type=\"text/javascript\">
\$('select[name=\\'type\\']').on('change', function() {
\t\$.ajax({
\t\turl: \$('select[name=\\'type\\']').val(),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#filter').removeClass('fa fa-filter').addClass('fas fa-spinner fa-spin');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#filter').removeClass('fas fa-spinner fa-spin').addClass('fa fa-filter');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#extension').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
\$('select[name=\\'type\\']').trigger('change');
// Install
\$('#extension').on('click', '.btn-success', function(e) {
\te.preventDefault();
\tvar element = this;
\tswal.fire({
\t\ttitle: '{{ text_confirm }}',
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\ticon: 'question',
\t}).then((result) => {
\t\tif (result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\t\turl: \$(element).attr('href'),
\t\t\t\tdataType: \"json\",
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).html('<i class=\"fas fa-spinner fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif(json['success']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\t\tposition: 'top-end',
\t\t\t\t\t\t\ticon: 'success',
\t\t\t\t\t\t\ttitle: json['success'],
\t\t\t\t\t\t\tshowConfirmButton: false,
\t\t\t\t\t\t\ttimer: 1500
\t\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t\tif(json['error']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\t\tposition: 'top-end',
\t\t\t\t\t\t\ticon: 'error',
\t\t\t\t\t\t\ttitle: json['error'],
\t\t\t\t\t\t\tshowConfirmButton: false,
\t\t\t\t\t\t\ttimer: 1500
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t\$('select[name=\\'type\\']').trigger('change');
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
            \t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
});
{# Delete #}
\$('#extension').on('click', '.btn-danger', function(e) {
\te.preventDefault();
\tvar element = this;
\tswal.fire({
\t\ttitle: '{{ text_confirm }}',
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\ticon: 'question',
\t}).then(result => {
\t\tif (result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\t\turl: \$(element).attr('href'),
\t\t\t\tdataType: \"json\",
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).html('<i class=\"fas fa-spinner fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif(json['success']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\t\tposition: 'top-end',
\t\t\t\t\t\t\ticon: 'success',
\t\t\t\t\t\t\ttitle: json['success'],
\t\t\t\t\t\t\tshowConfirmButton: false,
\t\t\t\t\t\t\ttimer: 1500
\t\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t\tif(json['error']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\t\tposition: 'top-end',
\t\t\t\t\t\t\ticon: 'error',
\t\t\t\t\t\t\ttitle: json['error'],
\t\t\t\t\t\t\tshowConfirmButton: false,
\t\t\t\t\t\t\ttimer: 1500
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t\$('select[name=\\'type\\']').trigger('change');\t\t\t\t\t
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\tswal.fire(\"Error!\", xhr.statusText, \"error\");
\t\t\t\t}
\t\t\t});
\t\t}
\t});
});

</script>\t
{% endif %}
{{ footer }}", "Setting/extension.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Setting/extension.twig");
    }
}
