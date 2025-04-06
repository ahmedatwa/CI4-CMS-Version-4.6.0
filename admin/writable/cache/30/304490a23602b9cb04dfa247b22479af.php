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

/* User/user_form.twig */
class __TwigTemplate_bf7940d1c7e3d13925111014e67fd411 extends Template
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
        yield "\" class=\"btn btn-primary\" form=\"form-user\">
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
\t\t\t\t\t<form id=\"form-user\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 33
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\" />
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_firstname\" class=\"col-sm-2 col-form-label\">";
        // line 35
        yield ($context["entry_image"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-ci-toggle=\"image\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 38
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" data-ci-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\"
\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" /></a>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"image\" value=\"";
        // line 40
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_firstname\"
\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label required\">";
        // line 45
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" id=\"input-firstname\"
\t\t\t\t\t\t\t\t\taria-describedby=\"input_firstname\" value=\"";
        // line 48
        yield ($context["firstname"] ?? null);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_lastname\"
\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label required\">";
        // line 53
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" class=\"form-control\" id=\"input-lastname\"
\t\t\t\t\t\t\t\t\taria-describedby=\"input_lastname\" value=\"";
        // line 56
        yield ($context["lastname"] ?? null);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_username\"
\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label required\">";
        // line 61
        yield ($context["entry_username"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control\" id=\"input-username\"
\t\t\t\t\t\t\t\t\taria-describedby=\"input_username\" value=\"";
        // line 64
        yield ($context["username"] ?? null);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_email\" class=\"col-sm-2 col-form-label required\">";
        // line 68
        yield ($context["entry_email"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" id=\"input-email\"
\t\t\t\t\t\t\t\t\taria-describedby=\"input_email\" value=\"";
        // line 71
        yield ($context["email"] ?? null);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend class=\"border-bottom mb-3\">";
        // line 75
        yield ($context["entry_password"] ?? null);
        yield "</legend>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_password\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label required\">";
        // line 78
        yield ($context["entry_password"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 80
        yield ($context["password"] ?? null);
        yield "\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\tid=\"input-password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_confirm\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label required\">";
        // line 86
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 88
        yield ($context["password"] ?? null);
        yield "\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\tid=\"input-confirm\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend class=\"border-bottom mb-3\">";
        // line 94
        yield ($context["text_other"] ?? null);
        yield "</legend>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_status\" class=\"col-sm-2 col-form-label\">";
        // line 96
        yield ($context["entry_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\" aria-label=\"select_status\">
\t\t\t\t\t\t\t\t\t\t";
        // line 99
        if (($context["status"] ?? null)) {
            // line 100
            yield "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 101
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 103
            yield "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>";
            // line 104
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 106
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_user_group\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label\">";
        // line 111
        yield ($context["entry_user_group"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"user_group_id\" aria-label=\"select_user_group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["user_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user_group"]) {
            // line 115
            yield "\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 115) == ($context["user_group_id"] ?? null))) {
                // line 116
                yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 116);
                yield "\" selected>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 117
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "name", [], "any", false, false, false, 117);
                yield "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 120
                yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 120);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "name", [], "any", false, false, false, 120);
                yield "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 123
            yield "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<!-- Card Body -->
\t\t\t</div>
\t\t</div>
\t</main>
";
        // line 134
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "User/user_form.twig";
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
        return array (  318 => 134,  306 => 124,  300 => 123,  291 => 120,  285 => 117,  280 => 116,  277 => 115,  273 => 114,  267 => 111,  260 => 106,  255 => 104,  250 => 103,  245 => 101,  240 => 100,  238 => 99,  232 => 96,  227 => 94,  218 => 88,  213 => 86,  204 => 80,  199 => 78,  193 => 75,  186 => 71,  180 => 68,  173 => 64,  167 => 61,  159 => 56,  153 => 53,  145 => 48,  139 => 45,  131 => 40,  124 => 38,  118 => 35,  111 => 33,  104 => 29,  96 => 23,  85 => 20,  82 => 19,  78 => 18,  73 => 16,  63 => 11,  57 => 8,  53 => 7,  42 => 1,);
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
\t\t\t\t\t\t\ttitle=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-user\">
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
\t\t\t\t\t<form id=\"form-user\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\" />
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_firstname\" class=\"col-sm-2 col-form-label\">{{ entry_image }}</label>
\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-ci-toggle=\"image\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ thumb }}\" alt=\"\" title=\"\" data-ci-placeholder=\"{{ placeholder }}\"
\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" /></a>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_firstname\"
\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label required\">{{ entry_firstname }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" id=\"input-firstname\"
\t\t\t\t\t\t\t\t\taria-describedby=\"input_firstname\" value=\"{{ firstname }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_lastname\"
\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label required\">{{ entry_lastname }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" class=\"form-control\" id=\"input-lastname\"
\t\t\t\t\t\t\t\t\taria-describedby=\"input_lastname\" value=\"{{ lastname }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_username\"
\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label required\">{{ entry_username }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control\" id=\"input-username\"
\t\t\t\t\t\t\t\t\taria-describedby=\"input_username\" value=\"{{ username }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"input_email\" class=\"col-sm-2 col-form-label required\">{{ entry_email }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" id=\"input-email\"
\t\t\t\t\t\t\t\t\taria-describedby=\"input_email\" value=\"{{ email }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend class=\"border-bottom mb-3\">{{ entry_password }}</legend>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_password\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label required\">{{ entry_password }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"{{ password }}\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\tid=\"input-password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_confirm\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label required\">{{ entry_confirm }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"{{ password }}\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\tid=\"input-confirm\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend class=\"border-bottom mb-3\">{{ text_other }}</legend>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_status\" class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\" aria-label=\"select_status\">
\t\t\t\t\t\t\t\t\t\t{% if status %}
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input_user_group\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-form-label\">{{ entry_user_group }}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"user_group_id\" aria-label=\"select_user_group\">
\t\t\t\t\t\t\t\t\t\t{% for user_group in user_groups %}
\t\t\t\t\t\t\t\t\t\t{% if user_group.user_group_id == user_group_id %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ user_group.user_group_id }}\" selected>
\t\t\t\t\t\t\t\t\t\t\t{{ user_group.name }}
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ user_group.user_group_id }}\">{{ user_group.name }}
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<!-- Card Body -->
\t\t\t</div>
\t\t</div>
\t</main>
{{ footer }}", "User/user_form.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/User/user_form.twig");
    }
}
