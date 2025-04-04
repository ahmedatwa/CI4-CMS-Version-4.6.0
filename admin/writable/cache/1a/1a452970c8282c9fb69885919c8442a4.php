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

/* Design/layout_form.twig */
class __TwigTemplate_8e180097c9cdd9c9968eb3182f60d3a9 extends Template
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
        yield ($context["action"] ?? null);
        yield "\" rol=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\" form=\"form-layout\">
\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 11
        yield ($context["back"] ?? null);
        yield "\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-light border\">
\t\t\t\t\t\t<i class=\"fa fa-reply\"></i>
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
\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fas fa-pen\"></i>
\t\t\t\t";
        // line 28
        yield ($context["text_form"] ?? null);
        yield "
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form enctype=\"multipart/form-data\" id=\"form-layout\" accept-charset=\"utf-8\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 32
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-name\">";
        // line 34
        yield ($context["entry_name"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 36
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<table id=\"route\" class=\"table table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 42
        yield ($context["entry_route"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr id=\"route-row\">
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"layout_route\" value=\"";
        // line 48
        yield ($context["layout_route"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_route"] ?? null);
        yield "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table id=\"table-module\" class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\" width=\"40%\">";
        // line 57
        yield ($context["entry_module"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 58
        yield ($context["entry_position"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 59
        yield ($context["entry_sort_order"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 64
        $context["module_row"] = 0;
        // line 65
        yield "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 66
            yield "\t\t\t\t\t\t\t\t\t<tr id=\"module-row";
            yield ($context["module_row"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"layout_module[";
            // line 68
            yield ($context["module_row"] ?? null);
            yield "][code]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 70
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 70)) {
                    // line 71
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 71) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 71))) {
                        // line 72
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 72);
                        yield "\" selected=\"selected\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 72);
                        yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 74
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 74);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 74);
                        yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 76
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 77
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 77);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 78));
                    foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                        // line 79
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 79) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 79))) {
                            // line 80
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 80);
                            yield "\" selected=\"selected\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 80);
                            yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 82
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 82);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 82);
                            yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 84
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 87
                yield "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"layout_module[";
            // line 91
            yield ($context["module_row"] ?? null);
            yield "][position]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 92
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 92) == "content_top")) {
                // line 93
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"content_top\" selected=\"selected\">";
                yield ($context["text_content_top"] ?? null);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 95
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"content_top\">";
                yield ($context["text_content_top"] ?? null);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 97
            yield "\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 97) == "content_bottom")) {
                // line 98
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"content_bottom\" selected=\"selected\">";
                yield ($context["text_content_bottom"] ?? null);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 100
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"content_bottom\">";
                yield ($context["text_content_bottom"] ?? null);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 102
            yield "\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 102) == "column_left")) {
                // line 103
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"column_left\" selected=\"selected\">";
                yield ($context["text_column_left"] ?? null);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 105
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"column_left\">";
                yield ($context["text_column_left"] ?? null);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 107
            yield "\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 107) == "column_right")) {
                // line 108
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"column_right\" selected=\"selected\">";
                yield ($context["text_column_right"] ?? null);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 110
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"column_right\">";
                yield ($context["text_column_right"] ?? null);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 112
            yield "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><input type=\"number\" min=\"0\" name=\"layout_module[";
            // line 114
            yield ($context["module_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 114);
            yield "\" placeholder=\"";
            yield ($context["entry_sort_order"] ?? null);
            yield "\" class=\"form-control\"/></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
            // line 116
            yield ($context["module_row"] ?? null);
            yield "').remove();\" id=\"button-remove\" data-toggle-tooltip=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            // line 121
            $context["module_row"] = (($context["module_row"] ?? null) + 1);
            // line 122
            yield "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout_module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule();\" data-toggle-tooltip=\"tooltip\" title=\"";
        // line 128
        yield ($context["button_module_add"] ?? null);
        yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
        // line 139
        yield "\t\t</div>
\t</div>
</main>

<script type=\"text/javascript\">
var module_row = ";
        // line 144
        yield ($context["module_row"] ?? null);
        yield ";

function addModule() {

  html = '<tr id=\"module-row' + module_row + '\">';
  html += '<td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control\">';
  \t";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 151
            yield "    html += '    <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 151), "js");
            yield "\">';
    ";
            // line 152
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 152)) {
                // line 153
                yield "  html += '<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 153);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 153), "js");
                yield "</option>';
  ";
            } else {
                // line 155
                yield "  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 155));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 156
                    yield "  html += '<option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 156);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 156), "js");
                    yield "</option>';
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                yield "\t";
            }
            // line 159
            yield "\thtml += '</optgroup>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "  html += '  </select></td>';
\thtml += '<td><select name=\"layout_module[' + module_row + '][position]\" class=\"form-control\">';
  html += '<option value=\"content_top\">";
        // line 163
        yield ($context["text_content_top"] ?? null);
        yield "</option>';
  html += '<option value=\"content_bottom\">";
        // line 164
        yield ($context["text_content_bottom"] ?? null);
        yield "</option>';
  html += '<option value=\"column_left\">";
        // line 165
        yield ($context["text_column_left"] ?? null);
        yield "</option>';
  html += '<option value=\"column_right\">";
        // line 166
        yield ($context["text_column_right"] ?? null);
        yield "</option>';
  html += '</select></td>';
  html += '<td><input type=\"number\" min=\"0\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 168
        yield ($context["entry_sort_order"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle-tooltip=\"tooltip\" title=\"";
        // line 169
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';

  html += '</td></tr>';
\t
\t\$('#table-module tbody').append(html);
\tmodule_row++;
}
  </script>
  ";
        // line 177
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
        return "Design/layout_form.twig";
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
        return array (  478 => 177,  467 => 169,  463 => 168,  458 => 166,  454 => 165,  450 => 164,  446 => 163,  442 => 161,  435 => 159,  432 => 158,  421 => 156,  416 => 155,  408 => 153,  406 => 152,  401 => 151,  397 => 150,  388 => 144,  381 => 139,  368 => 128,  361 => 123,  355 => 122,  353 => 121,  343 => 116,  334 => 114,  330 => 112,  324 => 110,  318 => 108,  315 => 107,  309 => 105,  303 => 103,  300 => 102,  294 => 100,  288 => 98,  285 => 97,  279 => 95,  273 => 93,  271 => 92,  267 => 91,  262 => 88,  256 => 87,  252 => 85,  246 => 84,  238 => 82,  230 => 80,  227 => 79,  223 => 78,  218 => 77,  215 => 76,  207 => 74,  199 => 72,  196 => 71,  193 => 70,  189 => 69,  185 => 68,  179 => 66,  174 => 65,  172 => 64,  164 => 59,  160 => 58,  156 => 57,  142 => 48,  133 => 42,  122 => 36,  117 => 34,  110 => 32,  103 => 28,  95 => 22,  84 => 19,  81 => 18,  77 => 17,  72 => 15,  63 => 11,  55 => 8,  46 => 2,  42 => 1,);
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
\t\t\t\t\t<a href=\"{{ action }}\" rol=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\" title=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-layout\">
\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ back }}\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_cancel }}\" class=\"btn btn-light border\">
\t\t\t\t\t\t<i class=\"fa fa-reply\"></i>
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
\t\t\t\t{{ text_form }}
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form enctype=\"multipart/form-data\" id=\"form-layout\" accept-charset=\"utf-8\">
\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-name\">{{ entry_name }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<table id=\"route\" class=\"table table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-left\">{{ entry_route }}</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr id=\"route-row\">
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"layout_route\" value=\"{{ layout_route }}\" placeholder=\"{{ entry_route }}\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table id=\"table-module\" class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\" width=\"40%\">{{ entry_module }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">{{ entry_position }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\">{{ entry_sort_order }}</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% set module_row = 0 %}
\t\t\t\t\t\t\t\t{% for layout_module in layout_modules %}
\t\t\t\t\t\t\t\t\t<tr id=\"module-row{{ module_row }}\">
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"layout_module[{{ module_row }}][code]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for extension in extensions %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if not extension.module %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if extension.code ==  layout_module.code %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ extension.code }}\" selected=\"selected\">{{ extension.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ extension.code }}\">{{ extension.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"{{ extension.name }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for module in extension.module %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if module.code == layout_module.code %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ module.code }}\" selected=\"selected\">{{ module.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ module.code }}\">{{ module.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"layout_module[{{ module_row }}][position]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if layout_module.position ==  'content_top' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"content_top\" selected=\"selected\">{{ text_content_top }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"content_top\">{{ text_content_top }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if layout_module.position ==  'content_bottom' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"content_bottom\" selected=\"selected\">{{ text_content_bottom }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"content_bottom\">{{ text_content_bottom }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if layout_module.position ==  'column_left' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"column_left\" selected=\"selected\">{{ text_column_left }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"column_left\">{{ text_column_left }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if layout_module.position ==  'column_right' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"column_right\" selected=\"selected\">{{ text_column_right }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"column_right\">{{ text_column_right }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><input type=\"number\" min=\"0\" name=\"layout_module[{{ module_row }}][sort_order]\" value=\"{{ layout_module.sort_order }}\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\"/></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row{{ module_row }}').remove();\" id=\"button-remove\" data-toggle-tooltip=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% set module_row = module_row + 1 %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule();\" data-toggle-tooltip=\"tooltip\" title=\"{{ button_module_add }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
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
var module_row = {{ module_row }};

function addModule() {

  html = '<tr id=\"module-row' + module_row + '\">';
  html += '<td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control\">';
  \t{% for extension in extensions %}
    html += '    <optgroup label=\"{{ extension.name|escape('js') }}\">';
    {% if not extension.module %}
  html += '<option value=\"{{ extension.code }}\">{{ extension.name|escape('js') }}</option>';
  {% else %}
  {% for module in extension.module %}
  html += '<option value=\"{{ module.code }}\">{{ module.name|escape('js') }}</option>';
\t{% endfor %}
\t{% endif %}
\thtml += '</optgroup>';
\t{% endfor %}
  html += '  </select></td>';
\thtml += '<td><select name=\"layout_module[' + module_row + '][position]\" class=\"form-control\">';
  html += '<option value=\"content_top\">{{ text_content_top }}</option>';
  html += '<option value=\"content_bottom\">{{ text_content_bottom }}</option>';
  html += '<option value=\"column_left\">{{ text_column_left }}</option>';
  html += '<option value=\"column_right\">{{ text_column_right }}</option>';
  html += '</select></td>';
  html += '<td><input type=\"number\" min=\"0\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle-tooltip=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';

  html += '</td></tr>';
\t
\t\$('#table-module tbody').append(html);
\tmodule_row++;
}
  </script>
  {{ footer }}
", "Design/layout_form.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Design/layout_form.twig");
    }
}
