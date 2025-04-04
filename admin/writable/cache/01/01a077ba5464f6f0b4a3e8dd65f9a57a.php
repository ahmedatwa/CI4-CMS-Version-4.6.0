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

/* Catalog/information_form.twig */
class __TwigTemplate_7277bed162e34db4054b0c0a2cd1c4de extends Template
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
        yield "\" class=\"btn btn-primary\" form=\"form-information\">
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
\t\t\t\t<form id=\"form-information\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 32
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t<ul class=\"nav nav-tabs mb-3\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a class=\"nav-link active mr-2\" id=\"";
        // line 35
        yield ($context["tab_general"] ?? null);
        yield "-tab\" data-toggle=\"tab\" href=\"#";
        yield ($context["tab_general"] ?? null);
        yield "\" role=\"tab\" aria-controls=\"";
        yield ($context["tab_general"] ?? null);
        yield "\" aria-selected=\"false\">";
        yield ($context["tab_general"] ?? null);
        yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a class=\"nav-link mr-2\" id=\"";
        // line 38
        yield ($context["tab_data"] ?? null);
        yield "-tab\" data-toggle=\"tab\" href=\"#";
        yield ($context["tab_data"] ?? null);
        yield "\" role=\"tab\" aria-controls=\"";
        yield ($context["tab_data"] ?? null);
        yield "\" aria-selected=\"false\">";
        yield ($context["tab_data"] ?? null);
        yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a class=\"nav-link mr-2\" id=\"";
        // line 41
        yield ($context["tab_seo"] ?? null);
        yield "-tab\" data-toggle=\"tab\" href=\"#";
        yield ($context["tab_seo"] ?? null);
        yield "\" role=\"tab\" aria-controls=\"";
        yield ($context["tab_seo"] ?? null);
        yield "\" aria-selected=\"false\">";
        yield ($context["tab_seo"] ?? null);
        yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"";
        // line 45
        yield ($context["tab_general"] ?? null);
        yield "\" role=\"tabpanel\" aria-labelledby=\"";
        yield ($context["tab_general"] ?? null);
        yield "-tab\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs mb-3\" id=\"language\" role=\"tablist\">
\t\t\t\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 48
            yield "\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link mr-2\" id=\"";
            // line 49
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 49);
            yield "-tab\" data-toggle=\"tab\" href=\"#";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 49);
            yield "\" role=\"tab\" aria-controls=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 49);
            yield "\" aria-selected=\"false\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 49);
            yield "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 55
            yield "\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 55);
            yield "\" role=\"tabpanel\" aria-labelledby=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 55);
            yield "-tab\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input_title\" class=\"col-sm-2 col-form-label required\">";
            // line 57
            yield ($context["entry_title"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"information_description[";
            // line 59
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            yield "][title]\" value=\"";
            yield (((($_v0 = ($context["information_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["information_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59)] ?? null) : null), "title", [], "any", false, false, false, 59)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_title"] ?? null);
            yield "\" id=\"input-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            yield "-title\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input_description\" class=\"col-sm-2 col-form-label required\">";
            // line 63
            yield ($context["entry_description"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"information_description[";
            // line 65
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            yield "][description]\" placeholder=\"";
            yield ($context["entry_description"] ?? null);
            yield "\"  data-ci-toggle=\"summernote\" class=\"form-control\">";
            yield (((($_v2 = ($context["information_description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["information_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65)] ?? null) : null), "description", [], "any", false, false, false, 65)) : (""));
            yield "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"input-";
            // line 66
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
            yield "-description\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input_meta_title\" class=\"col-sm-2 col-form-label required\">";
            // line 70
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"information_description[";
            // line 72
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            yield "][meta_title]\" value=\"";
            yield (((($_v4 = ($context["information_description"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["information_description"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null), "meta_title", [], "any", false, false, false, 72)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            yield "-meta_title\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input_meta_description\" class=\"col-sm-2 col-form-label\">";
            // line 76
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"information_description[";
            // line 78
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" class=\"form-control\">";
            yield (((($_v6 = ($context["information_description"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["information_description"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null), "meta_description", [], "any", false, false, false, 78)) : (""));
            yield "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input_meta_keyword\" class=\"col-sm-2 col-form-label\">";
            // line 82
            yield ($context["entry_meta_keywords"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"information_description[";
            // line 84
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keywords"] ?? null);
            yield "\" class=\"form-control\">";
            yield (((($_v8 = ($context["information_description"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v9 = ($context["information_description"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 84)) : (""));
            yield "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"";
        // line 91
        yield ($context["tab_data"] ?? null);
        yield "\" role=\"tabpanel\" aria-labelledby=\"";
        yield ($context["tab_data"] ?? null);
        yield "-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_sort_order\" class=\"col-sm-2 col-form-label\">";
        // line 93
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" min=\"0\" name=\"sort_order\" class=\"form-control\" id=\"input-sort_order\" aria-describedby=\"input_sort_order\" value=\"";
        // line 95
        yield ($context["sort_order"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">
\t\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"";
        // line 100
        yield ($context["help_bottom"] ?? null);
        yield "\">";
        yield ($context["entry_bottom"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 106
        if (($context["bottom"] ?? null)) {
            // line 107
            yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"bottom\" value=\"1\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 108
            yield ($context["text_yes"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 110
            yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"bottom\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 111
            yield ($context["text_yes"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 113
        yield "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 115
        if ( !($context["bottom"] ?? null)) {
            // line 116
            yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"bottom\" value=\"0\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 117
            yield ($context["text_no"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 119
            yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"bottom\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 120
            yield ($context["text_no"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 122
        yield "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">
\t\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"";
        // line 127
        yield ($context["help_top"] ?? null);
        yield "\">";
        yield ($context["entry_top"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 133
        if (($context["top"] ?? null)) {
            // line 134
            yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"top\" value=\"1\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 135
            yield ($context["text_yes"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 137
            yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"top\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 138
            yield ($context["text_yes"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 140
        yield "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t";
        // line 142
        if ( !($context["top"] ?? null)) {
            // line 143
            yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"top\" value=\"0\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 144
            yield ($context["text_no"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 146
            yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"top\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 147
            yield ($context["text_no"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 149
        yield "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_status\" class=\"col-sm-2 col-form-label\">";
        // line 153
        yield ($context["entry_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\" aria-label=\"select_status\">
\t\t\t\t\t\t\t\t\t\t";
        // line 156
        if (($context["status"] ?? null)) {
            // line 157
            yield "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 158
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 160
            yield "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>";
            // line 161
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 163
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"";
        // line 168
        yield ($context["tab_seo"] ?? null);
        yield "\" role=\"tabpanel\" aria-labelledby=\"";
        yield ($context["tab_seo"] ?? null);
        yield "-tab\">
\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 169
        yield ($context["text_keyword"] ?? null);
        yield "</div>
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 174
        yield ($context["entry_keyword"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 180
            yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">";
            // line 182
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 182);
            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"information_seo_url[";
            // line 184
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
            yield "]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 185
            yield (((($_v10 = ($context["information_description"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 185)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v11 = ($context["information_description"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 185)] ?? null) : null), "keyword", [], "any", false, false, false, 185)) : (""));
            yield "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 186
            yield ($context["entry_keyword"] ?? null);
            yield "\" class=\"form-control\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 188
            if ((($_v12 = ($context["error_keyword"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 188)] ?? null) : null)) {
                // line 189
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                yield (($_v13 = ($context["error_keyword"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 189)] ?? null) : null);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 191
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        yield "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- Card Body -->
\t\t</div>
\t</div>
</main>
<script src=\"vendor/summernote/summernote-bs4.js\"></script>
<script src=\"javascript/summernote.js\"></script>
<link href=\"vendor/summernote/summernote-bs4.css\" rel=\"stylesheet\">
<script type=\"text/javascript\">
\t\$('#language a:first').tab('show');
</script>
";
        // line 211
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
        return "Catalog/information_form.twig";
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
        return array (  549 => 211,  528 => 192,  522 => 191,  516 => 189,  514 => 188,  509 => 186,  505 => 185,  501 => 184,  496 => 182,  492 => 180,  488 => 179,  480 => 174,  472 => 169,  466 => 168,  459 => 163,  454 => 161,  449 => 160,  444 => 158,  439 => 157,  437 => 156,  431 => 153,  425 => 149,  420 => 147,  417 => 146,  412 => 144,  409 => 143,  407 => 142,  403 => 140,  398 => 138,  395 => 137,  390 => 135,  387 => 134,  385 => 133,  374 => 127,  367 => 122,  362 => 120,  359 => 119,  354 => 117,  351 => 116,  349 => 115,  345 => 113,  340 => 111,  337 => 110,  332 => 108,  329 => 107,  327 => 106,  316 => 100,  308 => 95,  303 => 93,  296 => 91,  292 => 89,  277 => 84,  272 => 82,  261 => 78,  256 => 76,  243 => 72,  238 => 70,  231 => 66,  223 => 65,  218 => 63,  205 => 59,  200 => 57,  192 => 55,  188 => 54,  184 => 52,  169 => 49,  166 => 48,  162 => 47,  155 => 45,  142 => 41,  130 => 38,  118 => 35,  110 => 32,  103 => 28,  95 => 22,  84 => 19,  81 => 18,  77 => 17,  72 => 15,  63 => 11,  55 => 8,  46 => 2,  42 => 1,);
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
\t\t\t\t\t<a href=\"{{ action }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\" title=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-information\">
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
\t\t\t\t<form id=\"form-information\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t<ul class=\"nav nav-tabs mb-3\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a class=\"nav-link active mr-2\" id=\"{{ tab_general }}-tab\" data-toggle=\"tab\" href=\"#{{ tab_general }}\" role=\"tab\" aria-controls=\"{{ tab_general }}\" aria-selected=\"false\">{{ tab_general }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a class=\"nav-link mr-2\" id=\"{{ tab_data }}-tab\" data-toggle=\"tab\" href=\"#{{ tab_data }}\" role=\"tab\" aria-controls=\"{{ tab_data }}\" aria-selected=\"false\">{{ tab_data }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a class=\"nav-link mr-2\" id=\"{{ tab_seo }}-tab\" data-toggle=\"tab\" href=\"#{{ tab_seo }}\" role=\"tab\" aria-controls=\"{{ tab_seo }}\" aria-selected=\"false\">{{ tab_seo }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"{{ tab_general }}\" role=\"tabpanel\" aria-labelledby=\"{{ tab_general }}-tab\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs mb-3\" id=\"language\" role=\"tablist\">
\t\t\t\t\t\t\t\t{% for language in languages %}
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link mr-2\" id=\"{{ language.code }}-tab\" data-toggle=\"tab\" href=\"#{{ language.code }}\" role=\"tab\" aria-controls=\"{{ language.code }}\" aria-selected=\"false\">{{ language.name }}</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t{% for language in languages %}
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"{{ language.code }}\" role=\"tabpanel\" aria-labelledby=\"{{ language.code }}-tab\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input_title\" class=\"col-sm-2 col-form-label required\">{{ entry_title }}</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"information_description[{{ language.language_id }}][title]\" value=\"{{ information_description[language.language_id] ? information_description[language.language_id].title }}\" placeholder=\"{{ entry_title }}\" id=\"input-{{ language.language_id }}-title\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input_description\" class=\"col-sm-2 col-form-label required\">{{ entry_description }}</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"information_description[{{ language.language_id }}][description]\" placeholder=\"{{ entry_description }}\"  data-ci-toggle=\"summernote\" class=\"form-control\">{{ information_description[language.language_id] ? information_description[language.language_id].description }}</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"input-{{ language.language_id }}-description\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input_meta_title\" class=\"col-sm-2 col-form-label required\">{{ entry_meta_title }}</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"information_description[{{ language.language_id }}][meta_title]\" value=\"{{ information_description[language.language_id] ? information_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-{{ language.language_id }}-meta_title\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input_meta_description\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"information_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" class=\"form-control\">{{ information_description[language.language_id] ? information_description[language.language_id].meta_description }}</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input_meta_keyword\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keywords }}</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"information_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keywords }}\" class=\"form-control\">{{ information_description[language.language_id] ? information_description[language.language_id].meta_keyword }}</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"{{ tab_data }}\" role=\"tabpanel\" aria-labelledby=\"{{ tab_data }}-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_sort_order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" min=\"0\" name=\"sort_order\" class=\"form-control\" id=\"input-sort_order\" aria-describedby=\"input_sort_order\" value=\"{{ sort_order }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">
\t\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"{{ help_bottom }}\">{{ entry_bottom }}
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t{% if bottom %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"bottom\" value=\"1\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t{{ text_yes }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"bottom\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t{{ text_yes }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t{% if not bottom %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"bottom\" value=\"0\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t{{ text_no }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"bottom\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t{{ text_no }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">
\t\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"{{ help_top }}\">{{ entry_top }}
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t{% if top %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"top\" value=\"1\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t{{ text_yes }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"top\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t\t\t{{ text_yes }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t{% if not top %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"top\" value=\"0\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t{{ text_no }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"top\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t{{ text_no }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_status\" class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\" aria-label=\"select_status\">
\t\t\t\t\t\t\t\t\t\t{% if status %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"{{ tab_seo }}\" role=\"tabpanel\" aria-labelledby=\"{{ tab_seo }}-tab\">
\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> {{ text_keyword }}</div>
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">{{ entry_keyword }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">{% for language in languages %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">{{ language.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"information_seo_url[{{ language.language_id }}]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"{{ information_description[language.language_id] ? information_description[language.language_id].keyword }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"{{ entry_keyword }}\" class=\"form-control\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t{% if error_keyword[language.language_id] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{ error_keyword[language.language_id] }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- Card Body -->
\t\t</div>
\t</div>
</main>
<script src=\"vendor/summernote/summernote-bs4.js\"></script>
<script src=\"javascript/summernote.js\"></script>
<link href=\"vendor/summernote/summernote-bs4.css\" rel=\"stylesheet\">
<script type=\"text/javascript\">
\t\$('#language a:first').tab('show');
</script>
{{ footer }}
", "Catalog/information_form.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Catalog/information_form.twig");
    }
}
