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

/* Catalog/category_form.twig */
class __TwigTemplate_e37668401baece961f531844a3258f5a extends Template
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
\t\t<div class=\"container-fluid px-4\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<a href=\"";
        // line 7
        yield ($context["action"] ?? null);
        yield "\" role=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\"
\t\t\t\t\t\t\ttitle=\"";
        // line 8
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\" form=\"form-information\">
\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 11
        yield ($context["back"] ?? null);
        yield "\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\"
\t\t\t\t\t\t\tclass=\"btn btn-light border\">
\t\t\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1>";
        // line 16
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            yield "\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 20
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 20);
            yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<i class=\"fas fa-pen\"></i>
\t\t\t\t\t";
        // line 29
        yield ($context["text_form"] ?? null);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"form-information\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 33
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\" />
\t\t\t\t\t<ul class=\"nav nav-tabs mb-3\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a class=\"nav-link active mr-2\" id=\"general-tab\" data-toggle=\"tab\" href=\"#general\" role=\"tab\" aria-controls=\"general\" aria-selected=\"false\">";
        // line 36
        yield ($context["tab_general"] ?? null);
        yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a class=\"nav-link mr-2\" id=\"data-tab\" data-toggle=\"tab\" href=\"#data\" role=\"tab\" aria-controls=\"data\" aria-selected=\"false\">";
        // line 39
        yield ($context["tab_data"] ?? null);
        yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul> 
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"general\" role=\"tabpanel\" aria-labelledby=\"general-tab\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs mb-3\" id=\"language\" role=\"tablist\">
\t\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 46
            yield "\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link mr-2\" id=\"";
            // line 47
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 47);
            yield "-tab\" data-toggle=\"tab\" href=\"#";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 47);
            yield "\" role=\"tab\" aria-controls=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 47);
            yield "\" aria-selected=\"false\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 47);
            yield "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "\t\t\t\t\t\t\t</ul> 
\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"myTabContent\">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 52
            yield "\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 52);
            yield "\" role=\"tabpanel\" aria-labelledby=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 52);
            yield "-tab\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-name\" class=\"col-md-2 col-form-label required\">";
            // line 54
            yield ($context["entry_name"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category_description[";
            // line 56
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
            yield "][name]\" value=\"";
            yield (((($_v0 = ($context["category_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["category_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56)] ?? null) : null), "name", [], "any", false, false, false, 56)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
            yield "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-description\" class=\"col-md-2 col-form-label\">";
            // line 60
            yield ($context["entry_description"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"category_description[";
            // line 62
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62);
            yield "][description]\" placeholder=\"";
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-description";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62);
            yield "\" data-ci-toggle=\"summernote\" data-lang=\"";
            yield ($context["summernote"] ?? null);
            yield "\" class=\"form-control\">";
            yield (((($_v2 = ($context["category_description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["category_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null), "description", [], "any", false, false, false, 62)) : (""));
            yield "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-meta-name\" class=\"col-md-2 col-form-label required\">";
            // line 66
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category_description[";
            // line 68
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68);
            yield "][meta_title]\" value=\"";
            yield (((($_v4 = ($context["category_description"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["category_description"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68)] ?? null) : null), "meta_title", [], "any", false, false, false, 68)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68);
            yield "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-meta-description\" class=\"col-md-2 col-form-label\">";
            // line 72
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"category_description[";
            // line 74
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            yield "\" class=\"form-control\">";
            yield (((($_v6 = ($context["category_description"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["category_description"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74)] ?? null) : null), "meta_description", [], "any", false, false, false, 74)) : (""));
            yield "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-meta-keyword\" class=\"col-md-2 col-form-label\">";
            // line 78
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"category_description[";
            // line 80
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            yield "\" class=\"form-control\">";
            yield (((($_v8 = ($context["category_description"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v9 = ($context["category_description"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 80)) : (""));
            yield "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"data\" role=\"tabpanel\" aria-labelledby=\"data-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-sort-order\" class=\"col-md-2 col-form-label\">";
        // line 89
        yield ($context["entry_icon"] ?? null);
        yield " <span data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        yield ($context["help_icon"] ?? null);
        yield "\"><i class=\"fas fa-info-circle\"></i></span></label>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"fas fa-sign-in-alt\" id=\"input-icon\" name=\"icon\" value=\"";
        // line 91
        yield ($context["icon"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-sort-order\" class=\"col-md-2 col-form-label\">";
        // line 95
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" min=\"0\" type=\"number\" id=\"input-sort-order\" name=\"sort_order\" value=\"";
        // line 97
        yield ($context["sort_order"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-parent-id\" class=\"col-md-2 col-form-label\">";
        // line 101
        yield ($context["entry_parent"] ?? null);
        yield " 
\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        // line 102
        yield ($context["help_filter"] ?? null);
        yield "\"><i class=\"fas fa-info-circle\"></i>
\t\t\t\t\t\t\t\t</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"parent_id\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["parents"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 108
            yield "\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["parent"], "category_id", [], "any", false, false, false, 108) == ($context["parent_id"] ?? null))) {
                // line 109
                yield "\t\t\t\t\t\t\t\t\t\t<option value='";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["parent"], "category_id", [], "any", false, false, false, 109);
                yield "' selected>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["parent"], "name", [], "any", false, false, false, 109);
                yield " </option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 111
                yield "\t\t\t\t\t\t\t\t\t\t\t<option value='";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["parent"], "category_id", [], "any", false, false, false, 111);
                yield "'>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["parent"], "name", [], "any", false, false, false, 111);
                yield " </option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 112
            yield "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['parent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-md-2 col-form-label\">";
        // line 118
        yield ($context["entry_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\">
\t\t\t\t\t\t\t\t\t\t";
        // line 121
        if (($context["status"] ?? null)) {
            // line 122
            yield "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 123
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 125
            yield "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>";
            // line 126
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 128
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t    </div>
\t</div>
</main>
<script src=\"vendor/summernote/summernote-bs4.js\"></script> 
<script src=\"javascript/summernote.js\"></script> 
<link href=\"vendor/summernote/summernote-bs4.css\" rel=\"stylesheet\">\t

<script type=\"text/javascript\">
\t\$('#language li:first a').tab('show');
</script>
";
        // line 145
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Catalog/category_form.twig";
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
        return array (  394 => 145,  375 => 128,  370 => 126,  365 => 125,  360 => 123,  355 => 122,  353 => 121,  347 => 118,  341 => 114,  334 => 112,  326 => 111,  318 => 109,  315 => 108,  311 => 107,  303 => 102,  299 => 101,  292 => 97,  287 => 95,  280 => 91,  273 => 89,  267 => 85,  250 => 80,  245 => 78,  232 => 74,  227 => 72,  214 => 68,  209 => 66,  194 => 62,  189 => 60,  176 => 56,  171 => 54,  163 => 52,  159 => 51,  156 => 50,  141 => 47,  138 => 46,  134 => 45,  125 => 39,  119 => 36,  111 => 33,  104 => 29,  96 => 23,  85 => 20,  82 => 19,  78 => 18,  73 => 16,  63 => 11,  57 => 8,  53 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }} {{ column_left }}
\t<main id=\"content\">
\t\t<div class=\"container-fluid px-4\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t<a href=\"{{ action }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\"
\t\t\t\t\t\t\ttitle=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-information\">
\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ back }}\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_cancel }}\"
\t\t\t\t\t\t\tclass=\"btn btn-light border\">
\t\t\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t\t\t</a>
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
\t\t\t<div class=\"card mb-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<i class=\"fas fa-pen\"></i>
\t\t\t\t\t{{ text_form }}
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"form-information\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\" />
\t\t\t\t\t<ul class=\"nav nav-tabs mb-3\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a class=\"nav-link active mr-2\" id=\"general-tab\" data-toggle=\"tab\" href=\"#general\" role=\"tab\" aria-controls=\"general\" aria-selected=\"false\">{{ tab_general }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a class=\"nav-link mr-2\" id=\"data-tab\" data-toggle=\"tab\" href=\"#data\" role=\"tab\" aria-controls=\"data\" aria-selected=\"false\">{{ tab_data }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul> 
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"general\" role=\"tabpanel\" aria-labelledby=\"general-tab\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs mb-3\" id=\"language\" role=\"tablist\">
\t\t\t\t\t\t\t{% for language in languages %}
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link mr-2\" id=\"{{ language.code }}-tab\" data-toggle=\"tab\" href=\"#{{ language.code }}\" role=\"tab\" aria-controls=\"{{ language.code }}\" aria-selected=\"false\">{{ language.name }}</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul> 
\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"myTabContent\">{% for language in languages %}
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"{{ language.code }}\" role=\"tabpanel\" aria-labelledby=\"{{ language.code }}-tab\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-name\" class=\"col-md-2 col-form-label required\">{{ entry_name }}</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category_description[{{ language.language_id }}][name]\" value=\"{{ category_description[language.language_id] ? category_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name{{ language.language_id }}\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-description\" class=\"col-md-2 col-form-label\">{{ entry_description }}</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"category_description[{{ language.language_id }}][description]\" placeholder=\"{{ entry_description }}\" id=\"input-description{{ language.language_id }}\" data-ci-toggle=\"summernote\" data-lang=\"{{ summernote }}\" class=\"form-control\">{{ category_description[language.language_id] ? category_description[language.language_id].description }}</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-meta-name\" class=\"col-md-2 col-form-label required\">{{ entry_meta_title }}</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category_description[{{ language.language_id }}][meta_title]\" value=\"{{ category_description[language.language_id] ? category_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title{{ language.language_id }}\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-meta-description\" class=\"col-md-2 col-form-label\">{{ entry_meta_description }}</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"category_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description{{ language.language_id }}\" class=\"form-control\">{{ category_description[language.language_id] ? category_description[language.language_id].meta_description }}</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-meta-keyword\" class=\"col-md-2 col-form-label\">{{ entry_meta_keyword }}</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"category_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword{{ language.language_id }}\" class=\"form-control\">{{ category_description[language.language_id] ? category_description[language.language_id].meta_keyword }}</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"data\" role=\"tabpanel\" aria-labelledby=\"data-tab\">
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-sort-order\" class=\"col-md-2 col-form-label\">{{ entry_icon }} <span data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ help_icon }}\"><i class=\"fas fa-info-circle\"></i></span></label>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"fas fa-sign-in-alt\" id=\"input-icon\" name=\"icon\" value=\"{{ icon }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-sort-order\" class=\"col-md-2 col-form-label\">{{ entry_sort_order }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" min=\"0\" type=\"number\" id=\"input-sort-order\" name=\"sort_order\" value=\"{{ sort_order }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-parent-id\" class=\"col-md-2 col-form-label\">{{ entry_parent }} 
\t\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ help_filter }}\"><i class=\"fas fa-info-circle\"></i>
\t\t\t\t\t\t\t\t</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"parent_id\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t{% for parent in parents %}
\t\t\t\t\t\t\t\t\t\t{% if parent.category_id ==  parent_id %}
\t\t\t\t\t\t\t\t\t\t<option value='{{ parent.category_id }}' selected>{{ parent.name }} </option>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<option value='{{ parent.category_id }}'>{{ parent.name }} </option>
\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label class=\"col-md-2 col-form-label\">{{ entry_status }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\">
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
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t    </div>
\t</div>
</main>
<script src=\"vendor/summernote/summernote-bs4.js\"></script> 
<script src=\"javascript/summernote.js\"></script> 
<link href=\"vendor/summernote/summernote-bs4.css\" rel=\"stylesheet\">\t

<script type=\"text/javascript\">
\t\$('#language li:first a').tab('show');
</script>
{{ footer }}", "Catalog/category_form.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Catalog/category_form.twig");
    }
}
