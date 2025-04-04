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

/* Module/html.twig */
class __TwigTemplate_b2ec69f8a737f52ffffc30effaf589a5 extends Template
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
\t\t\t\t\t<a role=\"button\" href=\"";
        // line 8
        yield ($context["action"] ?? null);
        yield "\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\" form=\"form-module\">
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
        yield ($context["text_edit"] ?? null);
        yield "
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 32
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 34
        yield ($context["entry_name"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"name\" value=\"";
        // line 36
        yield ($context["name"] ?? null);
        yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 40
        yield ($context["entry_title"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"module_description[title]\" value=\"";
        // line 42
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["module_description"] ?? null), "title", [], "any", false, false, false, 42);
        yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-module_description\">";
        // line 46
        yield ($context["entry_description"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea data-ci-toggle=\"summernote\" class=\"form-control\" name=\"module_description[description]\" data-toggle=\"summernote\">";
        // line 48
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["module_description"] ?? null), "description", [], "any", false, false, false, 48);
        yield "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 52
        yield ($context["entry_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 55
        if (($context["status"] ?? null)) {
            // line 56
            yield "\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 57
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 59
            yield "\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 60
            yield ($context["text_disabled"] ?? null);
            yield "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 62
        yield "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!-- Card Body -->
\t\t</div>
\t</div>
</main>
<script src=\"vendor/summernote/summernote-bs4.js\"></script>
<script src=\"javascript/summernote.js\"></script>
<link href=\"vendor/summernote/summernote-bs4.css\" rel=\"stylesheet\">
";
        // line 74
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
        return "Module/html.twig";
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
        return array (  195 => 74,  181 => 62,  176 => 60,  171 => 59,  166 => 57,  161 => 56,  159 => 55,  153 => 52,  146 => 48,  141 => 46,  134 => 42,  129 => 40,  122 => 36,  117 => 34,  110 => 32,  103 => 28,  95 => 22,  84 => 19,  81 => 18,  77 => 17,  72 => 15,  63 => 11,  55 => 8,  46 => 2,  42 => 1,);
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
\t\t\t\t\t<a role=\"button\" href=\"{{ action }}\" data-toggle-tooltip=\"tooltip\" name=\"button-save\" data-placement=\"top\" title=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-module\">
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
\t\t\t\t{{ text_edit }}
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">{{ entry_name }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"name\" value=\"{{ name }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title\">{{ entry_title }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"module_description[title]\" value=\"{{ module_description.title }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-module_description\">{{ entry_description }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea data-ci-toggle=\"summernote\" class=\"form-control\" name=\"module_description[description]\" data-toggle=\"summernote\">{{ module_description.description }}</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">{{ entry_status }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t{% if status %}
\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">{{ text_disabled }}</option>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<option value=\"1\">{{ text_enabled }}</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">{{ text_disabled }}</option>
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
<script src=\"vendor/summernote/summernote-bs4.js\"></script>
<script src=\"javascript/summernote.js\"></script>
<link href=\"vendor/summernote/summernote-bs4.css\" rel=\"stylesheet\">
{{ footer }}
", "Module/html.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Module/html.twig");
    }
}
