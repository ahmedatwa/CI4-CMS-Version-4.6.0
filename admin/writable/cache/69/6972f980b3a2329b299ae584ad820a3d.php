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

/* Customer/customer_group_form.twig */
class __TwigTemplate_ca9bfa56f273736f3b304dfa7c5dd3ec extends Template
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
        yield "\" role=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\"
\t\t\t\t\t\ttitle=\"";
        // line 8
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\" form=\"form-customer-group\">
\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 11
        yield ($context["back"] ?? null);
        yield "\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\"
\t\t\t\t\t\ttitle=\"";
        // line 12
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-light border\">
\t\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<h1>";
        // line 16
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            yield "\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"";
            // line 20
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 20);
            yield "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fas fa-pen\"></i>
\t\t\t\t";
        // line 29
        yield ($context["text_form"] ?? null);
        yield "
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form id=\"form-customer-group\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t<input type=\"hidden\" name=\"";
        // line 33
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\" />
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_name\" class=\"col-sm-2 col-form-label required\">";
        // line 35
        yield ($context["entry_name"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"input-name\" placeholder=\"";
        // line 37
        yield ($context["entry_name"] ?? null);
        yield "\" value=\"";
        yield ($context["name"] ?? null);
        yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_description\" class=\"col-sm-2 col-form-label\">";
        // line 41
        yield ($context["entry_description"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea type=\"text\" name=\"description\" class=\"form-control\" rows=\"5\" id=\"input-description\" placeholder=\"";
        // line 43
        yield ($context["entry_description"] ?? null);
        yield "\">";
        yield ($context["description"] ?? null);
        yield "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- Card Body -->
\t\t</div>
\t</div>
</main>
";
        // line 52
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Customer/customer_group_form.twig";
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
        return array (  152 => 52,  138 => 43,  133 => 41,  124 => 37,  119 => 35,  112 => 33,  105 => 29,  97 => 23,  86 => 20,  83 => 19,  79 => 18,  74 => 16,  67 => 12,  63 => 11,  57 => 8,  53 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }} {{ column_left }}
\t<main id=\"content\">
\t<div class=\"container-fluid px-4\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t<a href=\"{{ action }}\" role=\"button\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\"
\t\t\t\t\t\ttitle=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-customer-group\">
\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ back }}\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\"
\t\t\t\t\t\ttitle=\"{{ button_cancel }}\" class=\"btn btn-light border\">
\t\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t\t</a>
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
\t\t\t\t<form id=\"form-customer-group\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\" />
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_name\" class=\"col-sm-2 col-form-label required\">{{ entry_name }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"input-name\" placeholder=\"{{ entry_name }}\" value=\"{{ name }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input_description\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea type=\"text\" name=\"description\" class=\"form-control\" rows=\"5\" id=\"input-description\" placeholder=\"{{ entry_description }}\">{{ description }}</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- Card Body -->
\t\t</div>
\t</div>
</main>
{{ footer }}", "Customer/customer_group_form.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Customer/customer_group_form.twig");
    }
}
