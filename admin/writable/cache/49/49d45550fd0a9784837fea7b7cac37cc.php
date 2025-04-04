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

/* Customer/customer_form.twig */
class __TwigTemplate_1f630aa55a3255463685d3fee77abef2 extends Template
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
        yield "\" class=\"btn btn-primary\" form=\"form-customer\">
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
\t\t\t\t<form id=\"form-customer\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 32
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_firstname\" class=\"col-sm-2 col-form-label required\">";
        // line 34
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" id=\"input-firstname\" value=\"";
        // line 36
        yield ($context["firstname"] ?? null);
        yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_lastname\" class=\"col-sm-2 col-form-label required\">";
        // line 40
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" class=\"form-control\" id=\"input-lastname\" value=\"";
        // line 42
        yield ($context["lastname"] ?? null);
        yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_email\" class=\"col-sm-2 col-form-label required\">";
        // line 46
        yield ($context["entry_email"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" id=\"input-email\" value=\"";
        // line 48
        yield ($context["email"] ?? null);
        yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend class=\"border-bottom mb-3\">";
        // line 52
        yield ($context["entry_password"] ?? null);
        yield "</legend>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_password\" class=\"col-sm-2 col-form-label required\">";
        // line 54
        yield ($context["entry_password"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 56
        yield ($context["password"] ?? null);
        yield "\" class=\"form-control\" id=\"input-password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_confirm\" class=\"col-sm-2 col-form-label required\">";
        // line 60
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 62
        yield ($context["password"] ?? null);
        yield "\" class=\"form-control\" id=\"input-confirm\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend class=\"border-bottom mb-3\">";
        // line 67
        yield ($context["text_other"] ?? null);
        yield "</legend>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_status\" class=\"col-sm-2 col-form-label\">";
        // line 69
        yield ($context["entry_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\" aria-label=\"select_status\">
\t\t\t\t\t\t\t\t\t";
        // line 72
        if (($context["status"] ?? null)) {
            // line 73
            yield "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 74
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 76
            yield "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>";
            // line 77
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 79
        yield "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_customer_group\" class=\"col-sm-2 col-form-label\">";
        // line 83
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"customer_group_id\" aria-label=\"select_customer_group\">
\t\t\t\t\t\t\t\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 87
            yield "\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 87) == ($context["customer_group_id"] ?? null))) {
                // line 88
                yield "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 88);
                yield "\" selected>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 89
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 89);
                yield "
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 92
                yield "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 92);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 92);
                yield "
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 95
            yield "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-newsletter\">";
        // line 100
        yield ($context["entry_newsletter"] ?? null);
        yield "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 103
        if ((($context["newsletter"] ?? null) == 1)) {
            // line 104
            yield "\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 106
            yield ($context["text_yes"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 110
            yield ($context["text_no"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 113
            yield "\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 115
            yield ($context["text_yes"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">";
            // line 119
            yield ($context["text_no"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 122
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- Card Body -->
\t\t</div>
\t</div>
</main>
";
        // line 131
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
        return "Customer/customer_form.twig";
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
        return array (  320 => 131,  309 => 122,  303 => 119,  296 => 115,  292 => 113,  286 => 110,  279 => 106,  275 => 104,  273 => 103,  267 => 100,  261 => 96,  255 => 95,  246 => 92,  240 => 89,  235 => 88,  232 => 87,  228 => 86,  222 => 83,  216 => 79,  211 => 77,  206 => 76,  201 => 74,  196 => 73,  194 => 72,  188 => 69,  183 => 67,  175 => 62,  170 => 60,  163 => 56,  158 => 54,  153 => 52,  146 => 48,  141 => 46,  134 => 42,  129 => 40,  122 => 36,  117 => 34,  110 => 32,  103 => 28,  95 => 22,  84 => 19,  81 => 18,  77 => 17,  72 => 15,  63 => 11,  55 => 8,  46 => 2,  42 => 1,);
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
\t\t\t\t\t<a href=\"{{ action }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\" title=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-customer\">
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
\t\t\t\t<form id=\"form-customer\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_firstname\" class=\"col-sm-2 col-form-label required\">{{ entry_firstname }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" id=\"input-firstname\" value=\"{{ firstname }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_lastname\" class=\"col-sm-2 col-form-label required\">{{ entry_lastname }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" class=\"form-control\" id=\"input-lastname\" value=\"{{ lastname }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_email\" class=\"col-sm-2 col-form-label required\">{{ entry_email }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" id=\"input-email\" value=\"{{ email }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend class=\"border-bottom mb-3\">{{ entry_password }}</legend>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_password\" class=\"col-sm-2 col-form-label required\">{{ entry_password }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"{{ password }}\" class=\"form-control\" id=\"input-password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_confirm\" class=\"col-sm-2 col-form-label required\">{{ entry_confirm }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"{{ password }}\" class=\"form-control\" id=\"input-confirm\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend class=\"border-bottom mb-3\">{{ text_other }}</legend>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_status\" class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\" aria-label=\"select_status\">
\t\t\t\t\t\t\t\t\t{% if status %}
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_customer_group\" class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"customer_group_id\" aria-label=\"select_customer_group\">
\t\t\t\t\t\t\t\t\t{% for customer_group in customer_groups %}
\t\t\t\t\t\t\t\t\t\t{% if customer_group.customer_group_id == customer_group_id %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ customer_group.customer_group_id }}\" selected>
\t\t\t\t\t\t\t\t\t\t\t\t{{ customer_group.name }}
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-newsletter\">{{ entry_newsletter }}
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{% if newsletter  == 1 %}
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_yes }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"0\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_no }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_yes }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"inlineRadio1\">{{ text_no }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- Card Body -->
\t\t</div>
\t</div>
</main>
{{ footer }}
", "Customer/customer_form.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Customer/customer_form.twig");
    }
}
