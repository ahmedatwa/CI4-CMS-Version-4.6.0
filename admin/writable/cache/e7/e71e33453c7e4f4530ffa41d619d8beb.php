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

/* Setting/setting.twig */
class __TwigTemplate_241c70160dc01467f4e9c03fd8d9a135 extends Template
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
        yield "\" role=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\" form=\"form-setting\">
\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
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
\t\t";
        // line 23
        yield "\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t";
        // line 26
        yield ($context["text_form"] ?? null);
        yield "
\t\t\t</div>
\t\t\t<ul class=\"nav nav-tabs mx-2 mt-3\" id=\"myTab\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t<a class=\"nav-link active\" id=\"general-tab\" data-toggle=\"tab\" href=\"#general\" role=\"tab\" aria-controls=\"general\" aria-selected=\"true\">";
        // line 30
        yield ($context["tab_general"] ?? null);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t<a class=\"nav-link\" id=\"site-tab\" data-toggle=\"tab\" href=\"#site\" role=\"tab\" aria-controls=\"site\" aria-selected=\"false\">";
        // line 33
        yield ($context["tab_site"] ?? null);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t<a class=\"nav-link\" id=\"option-tab\" data-toggle=\"tab\" href=\"#option\" role=\"tab\" aria-controls=\"option\" aria-selected=\"false\">";
        // line 36
        yield ($context["tab_local"] ?? null);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t<a class=\"nav-link\" id=\"social-tab\" data-toggle=\"tab\" href=\"#social\" role=\"tab\" aria-controls=\"social\" aria-selected=\"false\">";
        // line 39
        yield ($context["tab_social"] ?? null);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t<a class=\"nav-link\" id=\"server-tab\" data-toggle=\"tab\" href=\"#server\" role=\"tab\" aria-controls=\"server\" aria-selected=\"false\">";
        // line 42
        yield ($context["tab_server"] ?? null);
        yield "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form id=\"form-setting\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 47
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"general\" role=\"tabpanel\" aria-labelledby=\"general-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"config-meta-title\">";
        // line 51
        yield ($context["entry_meta_title"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"config-meta-title\" name=\"config_meta_title\" value=\"";
        // line 54
        yield ($context["config_meta_title"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_meta_title"] ?? null);
        yield "\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 58
        yield ($context["entry_meta_description"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea id=\"config-meta-description\" name=\"config_meta_description\" row=\"5\" class=\"form-control\" placeholder=\"";
        // line 61
        yield ($context["entry_meta_description"] ?? null);
        yield "\">";
        yield ($context["config_meta_description"] ?? null);
        yield "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 65
        yield ($context["entry_meta_keyword"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea id=\"input-meta-keyword\" name=\"config_meta_keyword\" row=\"5\" class=\"form-control\" placeholder=\"";
        // line 68
        yield ($context["entry_meta_keyword"] ?? null);
        yield "\" data-toggle=\"tagsinput\">";
        yield ($context["config_meta_keyword"] ?? null);
        yield "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 72
        yield ($context["entry_theme"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"config_theme\">
\t\t\t\t\t\t\t\t\t\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 77
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 77) == ($context["config_theme"] ?? null))) {
                // line 78
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 78);
                yield "\" selected>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 78);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 80
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 80);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 80);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 82
            yield "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-template-engine\">";
        // line 87
        yield ($context["entry_template_engine"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"config_template_engine\">
\t\t\t\t\t\t\t\t\t\t";
        // line 91
        if ((($context["config_template_engine"] ?? null) == "twig")) {
            // line 92
            yield "\t\t\t\t\t\t\t\t\t\t\t<option value=\"twig\" selected>";
            yield ($context["text_twig"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"template\">";
            // line 93
            yield ($context["text_template"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 95
            yield "\t\t\t\t\t\t\t\t\t\t\t<option value=\"twig\">";
            yield ($context["text_twig"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"template\" selected>";
            // line 96
            yield ($context["text_template"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 98
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<small id=\"engineHelp\" class=\"form-text text-muted\">";
        // line 99
        yield ($context["help_template_engine"] ?? null);
        yield "</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_logo\" class=\"col-sm-2 col-form-label\">";
        // line 103
        yield ($context["entry_logo"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-ci-toggle=\"image\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 106
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-thumbnail\"/></a>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 107
        yield ($context["config_logo"] ?? null);
        yield "\" id=\"input-image\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 112
        yield "\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"site\" role=\"tabpanel\" aria-labelledby=\"site-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-name\">";
        // line 114
        yield ($context["entry_name"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-name\" name=\"config_name\" class=\"form-control\" placeholder=\"";
        // line 117
        yield ($context["entry_name"] ?? null);
        yield "\" value=\"";
        yield ($context["config_name"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-owner\">";
        // line 121
        yield ($context["entry_owner"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-owner\" name=\"config_owner\" class=\"form-control\" placeholder=\"";
        // line 124
        yield ($context["entry_owner"] ?? null);
        yield "\" value=\"";
        yield ($context["config_owner"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-address\">";
        // line 128
        yield ($context["entry_address"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-address\" name=\"config_address\" class=\"form-control\" placeholder=\"";
        // line 131
        yield ($context["entry_address"] ?? null);
        yield "\" value=\"";
        yield ($context["config_address"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-email\">";
        // line 135
        yield ($context["entry_email"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-email\" name=\"config_email\" class=\"form-control\" placeholder=\"";
        // line 138
        yield ($context["entry_email"] ?? null);
        yield "\" value=\"";
        yield ($context["config_email"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-telephone\">";
        // line 142
        yield ($context["entry_telephone"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-telephone\" name=\"config_telephone\" class=\"form-control\" placeholder=\"";
        // line 145
        yield ($context["entry_telephone"] ?? null);
        yield "\" value=\"";
        yield ($context["config_telephone"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-opening-times\">";
        // line 149
        yield ($context["entry_opening_times"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea type=\"text\" id=\"input-opening-times\" name=\"config_opening_times\" class=\"form-control\" rows=\"5\" placeholder=\"";
        // line 152
        yield ($context["entry_opening_times"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t\t\t";
        // line 153
        yield ($context["config_opening_times"] ?? null);
        yield "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 158
        yield "\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"option\" role=\"tabpanel\" aria-labelledby=\"option-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-language\">";
        // line 160
        yield ($context["entry_language"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<select name=\"config_language\" id=\"input-language\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 164
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 164) == ($context["config_language"] ?? null))) {
                // line 165
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 165);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 165);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 167
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 167);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 167);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 169
            yield "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-admin-language\">";
        // line 174
        yield ($context["entry_admin_language"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 178
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 178) == ($context["config_admin_language"] ?? null))) {
                // line 179
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 179);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 179);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 181
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 181);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 181);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 183
            yield "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-language\">";
        // line 188
        yield ($context["entry_currency"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<select name=\"config_currency\" id=\"input-language\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 192
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 192) == ($context["config_currency"] ?? null))) {
                // line 193
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 193);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 193);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 195
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 195);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 195);
                yield "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 197
            yield "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label required\" for=\"input-config-admin-limit\">";
        // line 202
        yield ($context["entry_admin_limit"] ?? null);
        yield "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-admin-limit\" name=\"config_admin_limit\" class=\"form-control\" placeholder=\"";
        // line 205
        yield ($context["entry_admin_limit"] ?? null);
        yield "\" value=\"";
        yield ($context["config_admin_limit"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label required\" for=\"input-login-attempts\">";
        // line 209
        yield ($context["entry_login_attempts"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        // line 210
        yield ($context["help_login_attempts"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-login-attempts\" name=\"config_login_attempts\" class=\"form-control\" placeholder=\"";
        // line 215
        yield ($context["entry_login_attempts"] ?? null);
        yield "\" value=\"";
        yield ($context["config_login_attempts"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 219
        yield ($context["text_customer"] ?? null);
        yield "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-customer-activity\">";
        // line 221
        yield ($context["entry_customer_activity"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t";
        // line 224
        if ((($context["config_customer_activity"] ?? null) == 1)) {
            // line 225
            yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 227
            yield ($context["text_yes"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 231
            yield ($context["text_no"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 234
            yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 236
            yield ($context["text_yes"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 240
            yield ($context["text_no"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 243
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-customer-activity\">";
        // line 246
        yield ($context["entry_customer_online"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t";
        // line 249
        if ((($context["config_customer_online"] ?? null) == 1)) {
            // line 250
            yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"1\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 252
            yield ($context["text_yes"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 256
            yield ($context["text_no"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 259
            yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 261
            yield ($context["text_yes"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"0\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 265
            yield ($context["text_no"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 268
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 272
        yield ($context["text_chat_widget"] ?? null);
        yield "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"chat_widget_code\">";
        // line 274
        yield ($context["entry_config_chat_widget"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"config_chat_widget\" id=\"config_chat_widget\" rows=\"5\">";
        // line 276
        yield ($context["config_chat_widget"] ?? null);
        yield "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./End tab_option -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"social\" role=\"tabpanel\" aria-labelledby=\"social-tab\" aria-labelledby=\"nav-social-tab\">
\t\t\t\t\t\t\t";
        // line 283
        $context["social_row"] = 0;
        // line 284
        yield "\t\t\t\t\t\t\t<table class=\"table table-bordered\" id=\"table-social-networks\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t<th>Link</th>
\t\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["config_social_networks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 294
            yield "\t\t\t\t\t\t\t\t\t\t<tr id=\"social-row";
            yield ($context["social_row"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\"><input name=\"config_social_networks[";
            // line 295
            yield ($context["social_row"] ?? null);
            yield "][name]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["social"], "name", [], "any", false, false, false, 295);
            yield "\" class=\"form-control\" id=\"input-social-name";
            yield ($context["social_row"] ?? null);
            yield "\"/>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td><input name=\"config_social_networks[";
            // line 297
            yield ($context["social_row"] ?? null);
            yield "][href]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["social"], "href", [], "any", false, false, false, 297);
            yield "\" class=\"form-control\" id=\"input-social-name";
            yield ($context["social_row"] ?? null);
            yield "\"/>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td width=\"4%\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#social-row";
            // line 300
            yield ($context["social_row"] ?? null);
            yield ", .tooltip').remove();\" data-toggle-tooltip=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            // line 305
            $context["social_row"] = (($context["social_row"] ?? null) + 1);
            // line 306
            yield "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['social'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        yield "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"button-social-add\" type=\"button\" class=\"btn btn-primary float-right\" data-toggle-tooltip=\"tooltip\" title=\"";
        // line 311
        yield ($context["button_add"] ?? null);
        yield "\" data-placement=\"top\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 320
        yield "\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"server\" role=\"tabpanel\" aria-labelledby=\"server-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-maintenance\" class=\"col-sm-3 col-form-label\">";
        // line 322
        yield ($context["entry_maintenance"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t";
        // line 324
        if ((($context["config_maintenance"] ?? null) == 1)) {
            // line 325
            yield "\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_maintenance\" value=\"1\" checked>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 327
            yield ($context["text_yes"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_maintenance\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 331
            yield ($context["text_no"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 334
            yield "\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_maintenance\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 336
            yield ($context["text_yes"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_maintenance\" value=\"0\" checked>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 340
            yield ($context["text_no"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 343
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"global-alert\" class=\"col-sm-3 col-form-label\">";
        // line 346
        yield ($context["entry_global_alert"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"config_global_alert\" value=\"";
        // line 348
        yield ($context["config_global_alert"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["config_global_alert_help"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-file-ext-allowed\">";
        // line 352
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"";
        // line 353
        yield ($context["help_file_ext_allowed"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 358
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        yield ($context["config_file_ext_allowed"] ?? null);
        yield "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-file-mime-allowed\">";
        // line 362
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"";
        // line 363
        yield ($context["help_file_mime_allowed"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 368
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        yield ($context["config_file_mime_allowed"] ?? null);
        yield "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 373
        yield "\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</main>


<script type=\"text/javascript\">
\tvar social_row = ";
        // line 382
        yield ($context["social_row"] ?? null);
        yield ";
\$('#button-social-add').on('click', function () {
html = '<tr id=\"social-row' + social_row + '\">';
html += '<td width=\"20%\"><input type=\"text\" class=\"form-control\" name=\"config_social_networks[' + social_row + '][name]\"/></td>';
html += '<td><input type=\"text\" class=\"form-control\" name=\"config_social_networks[' + social_row + '][href]\"/></td>';
html += '<td><button type=\"button\" class=\"btn btn-danger\" id=\"button-delete\" onclick=\"\$(\\'#social-row' + social_row + ', .tooltip\\').remove();\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';
\$('#table-social-networks').append(html);
social_row++;
});
\$('#button-delete').remove();
</script>
";
        // line 394
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
        return "Setting/setting.twig";
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
        return array (  877 => 394,  862 => 382,  851 => 373,  842 => 368,  834 => 363,  830 => 362,  821 => 358,  813 => 353,  809 => 352,  800 => 348,  795 => 346,  790 => 343,  784 => 340,  777 => 336,  773 => 334,  767 => 331,  760 => 327,  756 => 325,  754 => 324,  749 => 322,  745 => 320,  734 => 311,  728 => 307,  722 => 306,  720 => 305,  710 => 300,  700 => 297,  691 => 295,  686 => 294,  682 => 293,  671 => 284,  669 => 283,  659 => 276,  654 => 274,  649 => 272,  643 => 268,  637 => 265,  630 => 261,  626 => 259,  620 => 256,  613 => 252,  609 => 250,  607 => 249,  601 => 246,  596 => 243,  590 => 240,  583 => 236,  579 => 234,  573 => 231,  566 => 227,  562 => 225,  560 => 224,  554 => 221,  549 => 219,  540 => 215,  532 => 210,  528 => 209,  519 => 205,  513 => 202,  507 => 198,  501 => 197,  493 => 195,  485 => 193,  482 => 192,  478 => 191,  472 => 188,  466 => 184,  460 => 183,  452 => 181,  444 => 179,  441 => 178,  437 => 177,  431 => 174,  425 => 170,  419 => 169,  411 => 167,  403 => 165,  400 => 164,  396 => 163,  390 => 160,  386 => 158,  379 => 153,  375 => 152,  369 => 149,  360 => 145,  354 => 142,  345 => 138,  339 => 135,  330 => 131,  324 => 128,  315 => 124,  309 => 121,  300 => 117,  294 => 114,  290 => 112,  283 => 107,  277 => 106,  271 => 103,  264 => 99,  261 => 98,  256 => 96,  251 => 95,  246 => 93,  241 => 92,  239 => 91,  232 => 87,  226 => 83,  220 => 82,  212 => 80,  204 => 78,  201 => 77,  197 => 76,  190 => 72,  181 => 68,  175 => 65,  166 => 61,  160 => 58,  151 => 54,  145 => 51,  136 => 47,  128 => 42,  122 => 39,  116 => 36,  110 => 33,  104 => 30,  97 => 26,  92 => 23,  87 => 19,  76 => 16,  73 => 15,  69 => 14,  64 => 12,  55 => 8,  46 => 2,  42 => 1,);
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
\t\t\t\t\t<a href=\"{{ action }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\" title=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-setting\">
\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
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
\t\t{# </ page header #}
\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fas fa-th-list\"></i>
\t\t\t\t{{ text_form }}
\t\t\t</div>
\t\t\t<ul class=\"nav nav-tabs mx-2 mt-3\" id=\"myTab\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t<a class=\"nav-link active\" id=\"general-tab\" data-toggle=\"tab\" href=\"#general\" role=\"tab\" aria-controls=\"general\" aria-selected=\"true\">{{ tab_general }}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t<a class=\"nav-link\" id=\"site-tab\" data-toggle=\"tab\" href=\"#site\" role=\"tab\" aria-controls=\"site\" aria-selected=\"false\">{{ tab_site }}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t<a class=\"nav-link\" id=\"option-tab\" data-toggle=\"tab\" href=\"#option\" role=\"tab\" aria-controls=\"option\" aria-selected=\"false\">{{ tab_local }}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t<a class=\"nav-link\" id=\"social-tab\" data-toggle=\"tab\" href=\"#social\" role=\"tab\" aria-controls=\"social\" aria-selected=\"false\">{{ tab_social }}</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t<a class=\"nav-link\" id=\"server-tab\" data-toggle=\"tab\" href=\"#server\" role=\"tab\" aria-controls=\"server\" aria-selected=\"false\">{{ tab_server }}</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form id=\"form-setting\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"general\" role=\"tabpanel\" aria-labelledby=\"general-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"config-meta-title\">{{ entry_meta_title }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"config-meta-title\" name=\"config_meta_title\" value=\"{{ config_meta_title }}\" placeholder=\"{{ entry_meta_title }}\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-meta-description\">{{ entry_meta_description }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea id=\"config-meta-description\" name=\"config_meta_description\" row=\"5\" class=\"form-control\" placeholder=\"{{ entry_meta_description }}\">{{ config_meta_description }}</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">{{ entry_meta_keyword }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea id=\"input-meta-keyword\" name=\"config_meta_keyword\" row=\"5\" class=\"form-control\" placeholder=\"{{ entry_meta_keyword }}\" data-toggle=\"tagsinput\">{{ config_meta_keyword }}</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-theme\">{{ entry_theme }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"config_theme\">
\t\t\t\t\t\t\t\t\t\t{% for theme in themes %}
\t\t\t\t\t\t\t\t\t\t\t{% if theme.value == config_theme %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ theme.value }}\" selected>{{ theme.text }}</option>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ theme.value }}\">{{ theme.text }}</option>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-template-engine\">{{ entry_template_engine }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"config_template_engine\">
\t\t\t\t\t\t\t\t\t\t{% if config_template_engine == 'twig' %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"twig\" selected>{{ text_twig }}</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"template\">{{ text_template }}</option>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"twig\">{{ text_twig }}</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"template\" selected>{{ text_template }}</option>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<small id=\"engineHelp\" class=\"form-text text-muted\">{{ help_template_engine }}</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_logo\" class=\"col-sm-2 col-form-label\">{{ entry_logo }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-ci-toggle=\"image\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ logo }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" class=\"img-thumbnail\"/></a>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"config_logo\" value=\"{{ config_logo }}\" id=\"input-image\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# ...</div general Tab  #}
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"site\" role=\"tabpanel\" aria-labelledby=\"site-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-name\">{{ entry_name }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-name\" name=\"config_name\" class=\"form-control\" placeholder=\"{{ entry_name }}\" value=\"{{ config_name }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-owner\">{{ entry_owner }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-owner\" name=\"config_owner\" class=\"form-control\" placeholder=\"{{ entry_owner }}\" value=\"{{ config_owner }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-address\">{{ entry_address }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-address\" name=\"config_address\" class=\"form-control\" placeholder=\"{{ entry_address }}\" value=\"{{ config_address }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-email\">{{ entry_email }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-email\" name=\"config_email\" class=\"form-control\" placeholder=\"{{ entry_email }}\" value=\"{{ config_email }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-telephone\">{{ entry_telephone }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-telephone\" name=\"config_telephone\" class=\"form-control\" placeholder=\"{{ entry_telephone }}\" value=\"{{ config_telephone }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label required\" for=\"input-opening-times\">{{ entry_opening_times }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea type=\"text\" id=\"input-opening-times\" name=\"config_opening_times\" class=\"form-control\" rows=\"5\" placeholder=\"{{ entry_opening_times }}\">
\t\t\t\t\t\t\t\t\t\t{{ config_opening_times }}</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# ...</div site Tab  #}
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"option\" role=\"tabpanel\" aria-labelledby=\"option-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-language\">{{ entry_language }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<select name=\"config_language\" id=\"input-language\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t{% for language in languages %}
\t\t\t\t\t\t\t\t\t\t\t{% if language.code == config_language %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ language.code }}\" selected=\"selected\">{{ language.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ language.code }}\">{{ language.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-admin-language\">{{ entry_admin_language }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t{% for language in languages %}
\t\t\t\t\t\t\t\t\t\t\t{% if language.code == config_admin_language %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ language.code }}\" selected=\"selected\">{{ language.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ language.code }}\">{{ language.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-language\">{{ entry_currency }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<select name=\"config_currency\" id=\"input-language\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t{% for currency in currencies %}
\t\t\t\t\t\t\t\t\t\t\t{% if currency.code == config_currency %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ currency.code }}\" selected=\"selected\">{{ currency.title }}</option>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ currency.code }}\">{{ currency.title }}</option>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label required\" for=\"input-config-admin-limit\">{{ entry_admin_limit }}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-admin-limit\" name=\"config_admin_limit\" class=\"form-control\" placeholder=\"{{ entry_admin_limit }}\" value=\"{{ config_admin_limit }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label required\" for=\"input-login-attempts\">{{ entry_login_attempts }}
\t\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ help_login_attempts }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-login-attempts\" name=\"config_login_attempts\" class=\"form-control\" placeholder=\"{{ entry_login_attempts }}\" value=\"{{ config_login_attempts }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>{{ text_customer }}</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-customer-activity\">{{ entry_customer_activity }}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t{% if config_customer_activity  == 1 %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_yes }}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_no }}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_yes }}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_no }}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-customer-activity\">{{ entry_customer_online }}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t{% if config_customer_online == 1 %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"1\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_yes }}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_no }}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_yes }}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_online\" value=\"0\" checked>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_no }}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>{{ text_chat_widget }}</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"chat_widget_code\">{{ entry_config_chat_widget }}</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"config_chat_widget\" id=\"config_chat_widget\" rows=\"5\">{{ config_chat_widget }}</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- ./End tab_option -->
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"social\" role=\"tabpanel\" aria-labelledby=\"social-tab\" aria-labelledby=\"nav-social-tab\">
\t\t\t\t\t\t\t{% set social_row = 0 %}
\t\t\t\t\t\t\t<table class=\"table table-bordered\" id=\"table-social-networks\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t<th>Link</th>
\t\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for social in config_social_networks %}
\t\t\t\t\t\t\t\t\t\t<tr id=\"social-row{{ social_row }}\">
\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\"><input name=\"config_social_networks[{{ social_row }}][name]\" value=\"{{ social.name }}\" class=\"form-control\" id=\"input-social-name{{ social_row }}\"/>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td><input name=\"config_social_networks[{{ social_row }}][href]\" value=\"{{ social.href }}\" class=\"form-control\" id=\"input-social-name{{ social_row }}\"/>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td width=\"4%\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#social-row{{ social_row }}, .tooltip').remove();\" data-toggle-tooltip=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% set social_row = social_row + 1 %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<button id=\"button-social-add\" type=\"button\" class=\"btn btn-primary float-right\" data-toggle-tooltip=\"tooltip\" title=\"{{ button_add }}\" data-placement=\"top\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# ...</div local Tab  #}
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"server\" role=\"tabpanel\" aria-labelledby=\"server-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-maintenance\" class=\"col-sm-3 col-form-label\">{{ entry_maintenance }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t{% if config_maintenance == 1 %}
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_maintenance\" value=\"1\" checked>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_yes }}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_maintenance\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_no }}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_maintenance\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_yes }}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_maintenance\" value=\"0\" checked>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_no }}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"global-alert\" class=\"col-sm-3 col-form-label\">{{ entry_global_alert }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"config_global_alert\" value=\"{{ config_global_alert }}\" placeholder=\"{{ config_global_alert_help }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-file-ext-allowed\">{{ entry_file_ext_allowed }}
\t\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"{{ help_file_ext_allowed }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"{{ entry_file_ext_allowed }}\" id=\"input-file-ext-allowed\" class=\"form-control\">{{ config_file_ext_allowed }}</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-file-mime-allowed\">{{ entry_file_mime_allowed }}
\t\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"{{ help_file_mime_allowed }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"{{ entry_file_mime_allowed }}\" id=\"input-file-mime-allowed\" class=\"form-control\">{{ config_file_mime_allowed }}</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# </div server tab #}
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</main>


<script type=\"text/javascript\">
\tvar social_row = {{ social_row }};
\$('#button-social-add').on('click', function () {
html = '<tr id=\"social-row' + social_row + '\">';
html += '<td width=\"20%\"><input type=\"text\" class=\"form-control\" name=\"config_social_networks[' + social_row + '][name]\"/></td>';
html += '<td><input type=\"text\" class=\"form-control\" name=\"config_social_networks[' + social_row + '][href]\"/></td>';
html += '<td><button type=\"button\" class=\"btn btn-danger\" id=\"button-delete\" onclick=\"\$(\\'#social-row' + social_row + ', .tooltip\\').remove();\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"Delete\"><i class=\"fa fa-minus-circle\"></i></button></td>';
html += '</tr>';
\$('#table-social-networks').append(html);
social_row++;
});
\$('#button-delete').remove();
</script>
{{ footer }}
", "Setting/setting.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Setting/setting.twig");
    }
}
