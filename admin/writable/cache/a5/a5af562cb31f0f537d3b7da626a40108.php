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

/* Design/banner_form.twig */
class __TwigTemplate_a1f876d84d05b8ebfe4eba1558d903bf extends Template
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
\t<div class=\"container-fluid px-4\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t<a href=\"";
        // line 7
        yield ($context["action"] ?? null);
        yield "\" rol=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\"
\t\t\t\t\t\ttitle=\"";
        // line 8
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\" form=\"form-banner\">
\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 11
        yield ($context["back"] ?? null);
        yield "\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\"
\t\t\t\t\t\tclass=\"btn btn-light border\">
\t\t\t\t\t\t<i class=\"fa fa-reply\"></i></a>
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
            yield "\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"";
            // line 19
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            yield "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fas fa-pen\"></i>
\t\t\t\t";
        // line 28
        yield ($context["text_form"] ?? null);
        yield "
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form id=\"form-banner\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t<input type=\"hidden\" name=\"";
        // line 32
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\" />
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_name\" class=\"col-sm-2 col-form-label required\">";
        // line 34
        yield ($context["entry_name"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"input-name\"
\t\t\t\t\t\t\t\taria-describedby=\"input_name\" value=\"";
        // line 37
        yield ($context["name"] ?? null);
        yield "\">
\t\t\t\t\t\t\t";
        // line 38
        if (($context["error_name"] ?? null)) {
            // line 39
            yield "\t\t\t\t\t\t\t<div class=\"invalid-feedback\">";
            yield ($context["error_name"] ?? null);
            yield "</div>
\t\t\t\t\t\t\t";
        }
        // line 41
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_status\" class=\"col-sm-2 col-form-label\">";
        // line 44
        yield ($context["entry_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\" aria-label=\"select_status\">
\t\t\t\t\t\t\t\t";
        // line 47
        if (($context["status"] ?? null)) {
            // line 48
            yield "\t\t\t\t\t\t\t\t<option value=\"1\" selected>";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 49
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 51
            yield "\t\t\t\t\t\t\t\t<option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected>";
            // line 52
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 54
        yield "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t";
        // line 58
        $context["social_row"] = 0;
        // line 59
        yield "\t\t\t\t\t\t<table class=\"table table-bordered table-striped\" id=\"table-banner-images\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
        // line 62
        yield ($context["column_title"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 63
        yield ($context["column_caption"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 64
        yield ($context["column_link"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 65
        yield ($context["column_sort_order"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 66
        yield ($context["column_image"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["banner_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner_image"]) {
            // line 72
            yield "\t\t\t\t\t\t\t\t<tr id=\"image-row";
            yield ($context["social_row"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t<td><input name=\"banner_image[";
            // line 73
            yield ($context["social_row"] ?? null);
            yield "][title]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 74
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "title", [], "any", false, false, false, 74);
            yield "\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-title\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td><input name=\"banner_image[";
            // line 77
            yield ($context["social_row"] ?? null);
            yield "][caption]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 78
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "caption", [], "any", false, false, false, 78);
            yield "\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-caption\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td><input name=\"banner_image[";
            // line 81
            yield ($context["social_row"] ?? null);
            yield "][link]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 82
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "link", [], "any", false, false, false, 82);
            yield "\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-link";
            // line 83
            yield ($context["social_row"] ?? null);
            yield "\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td width=\"10%\"><input name=\"banner_image[";
            // line 85
            yield ($context["social_row"] ?? null);
            yield "][sort_order]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 86
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "sort_order", [], "any", false, false, false, 86);
            yield "\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-sort-order";
            // line 87
            yield ($context["social_row"] ?? null);
            yield "\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td><a href=\"\" id=\"thumb-image";
            // line 89
            yield ($context["social_row"] ?? null);
            yield "\" data-ci-toggle=\"image\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 90
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "thumb", [], "any", false, false, false, 90);
            yield "\" alt=\"\" title=\"\" data-ci-placeholder=\"";
            yield ($context["placeholder"] ?? null);
            yield "\" class=\"img-thumbnail\" /></a>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"banner_image[";
            // line 91
            yield ($context["social_row"] ?? null);
            yield "][image]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 92
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner_image"], "image", [], "any", false, false, false, 92);
            yield "\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-image";
            // line 93
            yield ($context["social_row"] ?? null);
            yield "\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td width=\"4%\"><button type=\"button\"
\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$('#image-row";
            // line 96
            yield ($context["social_row"] ?? null);
            yield ", .tooltip').remove();\"
\t\t\t\t\t\t\t\t\t\t\tdata-toggle-tooltip=\"tooltip\" title=\"";
            // line 97
            yield ($context["button_remove"] ?? null);
            yield "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            // line 101
            $context["social_row"] = (($context["social_row"] ?? null) + 1);
            // line 102
            yield "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['banner_image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t<button id=\"button-banner-add\" type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\t\t\t\t\tdata-toggle-tooltip=\"tooltip\" title=\"";
        // line 108
        yield ($context["button_add"] ?? null);
        yield "\" data-placement=\"top\"><i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fas fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
        // line 118
        yield "\t\t</div>
\t</div>
</main>
<script type=\"text/javascript\">
\tvar social_row = ";
        // line 122
        yield ($context["social_row"] ?? null);
        yield ";
\t\$('#button-banner-add').on('click', function () {
\t\thtml = '<tr id=\"image-row' + social_row + '\">';
\t\thtml += '<td><input type=\"text\" class=\"form-control\" name=\"banner_image[' + social_row + '][title]\" id=\"input-title\"/></td>';
\t\thtml += '<td><input type=\"text\" class=\"form-control\" name=\"banner_image[' + social_row + '][caption]\" id=\"input-caption\"/></td>';
\t\thtml += '<td><input type=\"text\" class=\"form-control\" name=\"banner_image[' + social_row + '][link]\"/></td>';
\t\thtml += '<td width=\"10%\"><input type=\"text\" class=\"form-control\" name=\"banner_image[' + social_row + '][sort_order]\"/></td>';\t
\t\thtml += '<td><a href=\"\" id=\"thumb-image'+ social_row +'\" data-ci-toggle=\"image\" class=\"img-fluid\"><img src=\"";
        // line 129
        yield ($context["placeholder"] ?? null);
        yield "\" alt=\"\" title=\"\" data-ci-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-thumbnail\" /></a><input type=\"hidden\" name=\"banner_image[' + social_row + '][image]\" value=\"\" class=\"form-control\" id=\"input-banner-name' + social_row + '\" /></td>';
\t\thtml += '<td><button type=\"button\" class=\"btn btn-danger\" id=\"button-delete\" onclick=\"\$(\\'#image-row' + social_row + ', .tooltip\\').remove();\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fas fa-trash-alt\"></i></button></td>';
\t\thtml += '</tr>';
\t\t\$('#table-banner-images').append(html);
\t\tsocial_row++;
\t});
\t\$('#button-delete').remove();
</script>
";
        // line 137
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Design/banner_form.twig";
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
        return array (  351 => 137,  338 => 129,  328 => 122,  322 => 118,  310 => 108,  303 => 103,  297 => 102,  295 => 101,  288 => 97,  284 => 96,  278 => 93,  274 => 92,  270 => 91,  264 => 90,  260 => 89,  255 => 87,  251 => 86,  247 => 85,  242 => 83,  238 => 82,  234 => 81,  228 => 78,  224 => 77,  218 => 74,  214 => 73,  209 => 72,  205 => 71,  197 => 66,  193 => 65,  189 => 64,  185 => 63,  181 => 62,  176 => 59,  174 => 58,  168 => 54,  163 => 52,  158 => 51,  153 => 49,  148 => 48,  146 => 47,  140 => 44,  135 => 41,  129 => 39,  127 => 38,  123 => 37,  117 => 34,  110 => 32,  103 => 28,  95 => 22,  84 => 19,  81 => 18,  77 => 17,  72 => 15,  63 => 11,  57 => 8,  53 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }} {{ column_left }}
\t<main id=\"content\">
\t<div class=\"container-fluid px-4\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t<a href=\"{{ action }}\" rol=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\"
\t\t\t\t\t\ttitle=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-banner\">
\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ back }}\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_cancel }}\"
\t\t\t\t\t\tclass=\"btn btn-light border\">
\t\t\t\t\t\t<i class=\"fa fa-reply\"></i></a>
\t\t\t\t</div>
\t\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fas fa-pen\"></i>
\t\t\t\t{{ text_form }}
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form id=\"form-banner\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\" />
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_name\" class=\"col-sm-2 col-form-label required\">{{ entry_name }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"input-name\"
\t\t\t\t\t\t\t\taria-describedby=\"input_name\" value=\"{{ name }}\">
\t\t\t\t\t\t\t{% if error_name %}
\t\t\t\t\t\t\t<div class=\"invalid-feedback\">{{ error_name }}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_status\" class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\" aria-label=\"select_status\">
\t\t\t\t\t\t\t\t{% if status %}
\t\t\t\t\t\t\t\t<option value=\"1\" selected>{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t<option value=\"0\">{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<option value=\"1\">{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected>{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t{% set social_row = 0 %}
\t\t\t\t\t\t<table class=\"table table-bordered table-striped\" id=\"table-banner-images\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>{{ column_title }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ column_caption }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ column_link }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ column_sort_order }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ column_image }}</th>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for banner_image in banner_images %}
\t\t\t\t\t\t\t\t<tr id=\"image-row{{ social_row }}\">
\t\t\t\t\t\t\t\t\t<td><input name=\"banner_image[{{ social_row }}][title]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"{{ banner_image.title }}\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-title\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td><input name=\"banner_image[{{ social_row }}][caption]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"{{ banner_image.caption }}\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-caption\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td><input name=\"banner_image[{{ social_row }}][link]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"{{ banner_image.link }}\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-link{{ social_row }}\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td width=\"10%\"><input name=\"banner_image[{{ social_row }}][sort_order]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"{{ banner_image.sort_order }}\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-sort-order{{ social_row }}\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td><a href=\"\" id=\"thumb-image{{ social_row }}\" data-ci-toggle=\"image\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ banner_image.thumb }}\" alt=\"\" title=\"\" data-ci-placeholder=\"{{ placeholder }}\" class=\"img-thumbnail\" /></a>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"banner_image[{{ social_row }}][image]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"{{ banner_image.image }}\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-image{{ social_row }}\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td width=\"4%\"><button type=\"button\"
\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$('#image-row{{ social_row }}, .tooltip').remove();\"
\t\t\t\t\t\t\t\t\t\t\tdata-toggle-tooltip=\"tooltip\" title=\"{{ button_remove }}\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% set social_row = social_row + 1 %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t<button id=\"button-banner-add\" type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\t\t\t\t\tdata-toggle-tooltip=\"tooltip\" title=\"{{ button_add }}\" data-placement=\"top\"><i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fas fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t{# <!-- Card Body --> #}
\t\t</div>
\t</div>
</main>
<script type=\"text/javascript\">
\tvar social_row = {{ social_row }};
\t\$('#button-banner-add').on('click', function () {
\t\thtml = '<tr id=\"image-row' + social_row + '\">';
\t\thtml += '<td><input type=\"text\" class=\"form-control\" name=\"banner_image[' + social_row + '][title]\" id=\"input-title\"/></td>';
\t\thtml += '<td><input type=\"text\" class=\"form-control\" name=\"banner_image[' + social_row + '][caption]\" id=\"input-caption\"/></td>';
\t\thtml += '<td><input type=\"text\" class=\"form-control\" name=\"banner_image[' + social_row + '][link]\"/></td>';
\t\thtml += '<td width=\"10%\"><input type=\"text\" class=\"form-control\" name=\"banner_image[' + social_row + '][sort_order]\"/></td>';\t
\t\thtml += '<td><a href=\"\" id=\"thumb-image'+ social_row +'\" data-ci-toggle=\"image\" class=\"img-fluid\"><img src=\"{{ placeholder }}\" alt=\"\" title=\"\" data-ci-placeholder=\"{{ placeholder }}\" class=\"img-thumbnail\" /></a><input type=\"hidden\" name=\"banner_image[' + social_row + '][image]\" value=\"\" class=\"form-control\" id=\"input-banner-name' + social_row + '\" /></td>';
\t\thtml += '<td><button type=\"button\" class=\"btn btn-danger\" id=\"button-delete\" onclick=\"\$(\\'#image-row' + social_row + ', .tooltip\\').remove();\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fas fa-trash-alt\"></i></button></td>';
\t\thtml += '</tr>';
\t\t\$('#table-banner-images').append(html);
\t\tsocial_row++;
\t});
\t\$('#button-delete').remove();
</script>
{{ footer }}", "Design/banner_form.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Design/banner_form.twig");
    }
}
