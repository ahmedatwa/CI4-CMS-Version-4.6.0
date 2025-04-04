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

/* Localisation/language_form.twig */
class __TwigTemplate_09251f2fb0f440fe8e1da2843e8ef4bc extends Template
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
        yield "\" class=\"btn btn-primary\" form=\"form-language\">
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
\t\t\t\t<form id=\"form-language\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 32
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-name\" class=\"col-md-2 col-form-label required\">";
        // line 34
        yield ($context["entry_name"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"input-name\" name=\"name\" value=\"";
        // line 36
        yield ($context["name"] ?? null);
        yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-locale\" class=\"col-md-2 col-form-label required\">
\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"";
        // line 41
        yield ($context["help_code"] ?? null);
        yield "\">";
        yield ($context["entry_code"] ?? null);
        yield "
\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"code\">
\t\t\t\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 48
            yield "\t\t\t\t\t\t\t\t\t";
            if (($context["language"] == ($context["code"] ?? null))) {
                // line 49
                yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield $context["language"];
                yield "\" selected>";
                yield $context["language"];
                yield "</option>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 51
                yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield $context["language"];
                yield "\">";
                yield $context["language"];
                yield "</option>
\t\t\t\t\t\t\t\t\t";
            }
            // line 53
            yield "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-locale\" class=\"col-md-2 col-form-label required\">
\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"";
        // line 59
        yield ($context["help_locale"] ?? null);
        yield "\">";
        yield ($context["entry_locale"] ?? null);
        yield "
\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"input-locale\" name=\"locale\" value=\"";
        // line 64
        yield ($context["locale"] ?? null);
        yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-sort_order\" class=\"col-md-2 col-form-label\">";
        // line 68
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"sort_order\" id=\"input-sort-order\" name=\"sort_order\" value=\"";
        // line 70
        yield ($context["sort_order"] ?? null);
        yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-md-2 col-form-label\">";
        // line 74
        yield ($context["entry_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\">
\t\t\t\t\t\t\t\t";
        // line 77
        if (($context["status"] ?? null)) {
            // line 78
            yield "\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 79
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 81
            yield "\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>";
            // line 82
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 84
        yield "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- Card Body -->
\t\t</div>
\t</div>
</main>
";
        // line 93
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
        return "Localisation/language_form.twig";
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
        return array (  245 => 93,  234 => 84,  229 => 82,  224 => 81,  219 => 79,  214 => 78,  212 => 77,  206 => 74,  199 => 70,  194 => 68,  187 => 64,  177 => 59,  170 => 54,  164 => 53,  156 => 51,  148 => 49,  145 => 48,  141 => 47,  130 => 41,  122 => 36,  117 => 34,  110 => 32,  103 => 28,  95 => 22,  84 => 19,  81 => 18,  77 => 17,  72 => 15,  63 => 11,  55 => 8,  46 => 2,  42 => 1,);
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
\t\t\t\t\t<a href=\"{{ action }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\" title=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-language\">
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
\t\t\t\t<form id=\"form-language\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-name\" class=\"col-md-2 col-form-label required\">{{ entry_name }}</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"input-name\" name=\"name\" value=\"{{ name }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-locale\" class=\"col-md-2 col-form-label required\">
\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"{{ help_code }}\">{{ entry_code }}
\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"code\">
\t\t\t\t\t\t\t\t{% for language in languages %}
\t\t\t\t\t\t\t\t\t{% if language == code %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ language }}\" selected>{{ language }}</option>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ language }}\">{{ language }}</option>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-locale\" class=\"col-md-2 col-form-label required\">
\t\t\t\t\t\t\t<span data-toggle-tooltip=\"tooltip\" title=\"{{ help_locale }}\">{{ entry_locale }}
\t\t\t\t\t\t\t\t<i class=\"fas fa-question-circle\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"input-locale\" name=\"locale\" value=\"{{ locale }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-sort_order\" class=\"col-md-2 col-form-label\">{{ entry_sort_order }}</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"sort_order\" id=\"input-sort-order\" name=\"sort_order\" value=\"{{ sort_order }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-md-2 col-form-label\">{{ entry_status }}</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"status\">
\t\t\t\t\t\t\t\t{% if status %}
\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<option value=\"1\">{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- Card Body -->
\t\t</div>
\t</div>
</main>
{{ footer }}
", "Localisation/language_form.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Localisation/language_form.twig");
    }
}
