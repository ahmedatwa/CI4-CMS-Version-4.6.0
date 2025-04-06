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

/* Tool/mail.twig */
class __TwigTemplate_e3864e0afa18b29b66e2eb799e275184 extends Template
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
        yield "\" class=\"btn btn-primary\" form=\"form-mail\">
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
        yield ($context["text_mail"] ?? null);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t<form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 32
        yield ($context["action"] ?? null);
        yield "\" id=\"form-mail\" accept-charset=\"utf-8\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 33
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-from\" class=\"col-md-2 col-form-label\">";
        // line 35
        yield ($context["entry_from"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"input-from\" name=\"from\" value=\"";
        // line 37
        yield ($context["from"] ?? null);
        yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-to\" class=\"col-md-2 col-form-label\">";
        // line 41
        yield ($context["entry_to"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t<select name=\"to\" id=\"input-to\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"newsletter\">";
        // line 44
        yield ($context["text_newsletter"] ?? null);
        yield "</option>
\t\t\t\t\t\t\t<option value=\"customer_all\">";
        // line 45
        yield ($context["text_customer_all"] ?? null);
        yield "</option>
\t\t\t\t\t\t\t<option value=\"customer_group\">";
        // line 46
        yield ($context["text_customer_group"] ?? null);
        yield "</option>
\t\t\t\t\t\t\t<option value=\"customer\">";
        // line 47
        yield ($context["text_customer"] ?? null);
        yield "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row to\" id=\"to-customer-group\">
\t\t\t\t\t\t<label for=\"input-customer-group\" class=\"col-md-2 col-form-label\">";
        // line 52
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"customer_group_id\" aria-label=\"select_customer_group\">
\t\t\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 56
            yield "\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 56) == ($context["customer_group_id"] ?? null))) {
                // line 57
                yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 57);
                yield "\" selected>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 58
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 58);
                yield "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 61
                yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 61);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 61);
                yield "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t";
            }
            // line 64
            yield "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row to\" id=\"to-customer\">
\t\t\t\t\t\t<label for=\"input-customer\" class=\"col-md-2 col-form-label\">";
        // line 69
        yield ($context["entry_customer"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"customer[]\" data-width=\"100%\" multiple=\"multiple\">
\t\t\t\t\t\t\t\t<option value=\"";
        // line 72
        yield ($context["name"] ?? null);
        yield "\">";
        yield ($context["name"] ?? null);
        yield "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-subject\" class=\"col-md-2 col-form-label required\">";
        // line 77
        yield ($context["entry_subject"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"subject\" id=\"input-subject\" name=\"subject\" value=\"";
        // line 79
        yield ($context["subject"] ?? null);
        yield "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-subject\" class=\"col-md-2 col-form-label required\">";
        // line 83
        yield ($context["entry_message"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" type=\"message\" id=\"input-message\" data-ci-toggle=\"summernote\" name=\"message\">";
        // line 85
        yield ($context["message"] ?? null);
        yield "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t\t<!-- Card Body -->
\t\t\t</div>
\t\t</div>
\t</main>
<script src=\"vendor/summernote/summernote-bs4.js\"></script>

<script src=\"javascript/summernote.js\"></script>
<link href=\"vendor/summernote/summernote-bs4.css\" rel=\"stylesheet\">
<script src=\"vendor/select2/js/select2.min.js\"></script>
<link href=\"vendor/select2/css/select2.min.css\" rel=\"stylesheet\">
  <script type=\"text/javascript\">
\$('select[name=\\'to\\']').on('change', function() {
\t\$('.to').hide();
\t\$('#to-' + this.value.replace('_', '-')).show();
});
\$('select[name=\\'to\\']').trigger('change');


\$(\"select[name*=\\'customer\\']\").select2({
\tajax: {
    url: \"index.php/customer/customer/autocomplete?user_token=";
        // line 110
        yield ($context["user_token"] ?? null);
        yield "\",
    dataType: 'json',
    delay: 250,
    data: function (params) {
\treturn {
\t\tname: params.term,
\t};
},
    processResults: function (data, params) {
\tvar results = \$.map(data, function (item) {
\t\titem.id = item.customer_id;
\t\titem.text = item.name;
\t\treturn item;
\t});
\t   return {
\t\tresults: results,
\t};
},
cache: true
},
minimumInputLength: 1,
placeholder: '";
        // line 131
        yield ($context["text_select"] ?? null);
        yield "',
allowClear: true,
minimumResultsForSearch: 1,
width: '100%'
});
</script>
";
        // line 137
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
        return "Tool/mail.twig";
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
        return array (  298 => 137,  289 => 131,  265 => 110,  237 => 85,  232 => 83,  225 => 79,  220 => 77,  210 => 72,  204 => 69,  198 => 65,  192 => 64,  183 => 61,  177 => 58,  172 => 57,  169 => 56,  165 => 55,  159 => 52,  151 => 47,  147 => 46,  143 => 45,  139 => 44,  133 => 41,  126 => 37,  121 => 35,  114 => 33,  110 => 32,  104 => 29,  96 => 23,  85 => 20,  82 => 19,  78 => 18,  73 => 16,  63 => 11,  57 => 8,  53 => 7,  42 => 1,);
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
\t\t\t\t\t\t\ttitle=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-mail\">
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
\t\t\t\t\t{{ text_mail }}
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t<form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ action }}\" id=\"form-mail\" accept-charset=\"utf-8\">
\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-from\" class=\"col-md-2 col-form-label\">{{ entry_from }}</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"input-from\" name=\"from\" value=\"{{ from }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-to\" class=\"col-md-2 col-form-label\">{{ entry_to }}</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t<select name=\"to\" id=\"input-to\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"newsletter\">{{ text_newsletter }}</option>
\t\t\t\t\t\t\t<option value=\"customer_all\">{{ text_customer_all }}</option>
\t\t\t\t\t\t\t<option value=\"customer_group\">{{ text_customer_group }}</option>
\t\t\t\t\t\t\t<option value=\"customer\">{{ text_customer }}</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row to\" id=\"to-customer-group\">
\t\t\t\t\t\t<label for=\"input-customer-group\" class=\"col-md-2 col-form-label\">{{ entry_customer_group }}</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"customer_group_id\" aria-label=\"select_customer_group\">
\t\t\t\t\t\t\t\t{% for customer_group in customer_groups %}
\t\t\t\t\t\t\t\t\t{% if customer_group.customer_group_id == customer_group_id %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ customer_group.customer_group_id }}\" selected>
\t\t\t\t\t\t\t\t\t\t\t{{ customer_group.name }}
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row to\" id=\"to-customer\">
\t\t\t\t\t\t<label for=\"input-customer\" class=\"col-md-2 col-form-label\">{{ entry_customer }}</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"customer[]\" data-width=\"100%\" multiple=\"multiple\">
\t\t\t\t\t\t\t\t<option value=\"{{ name }}\">{{ name }}</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-subject\" class=\"col-md-2 col-form-label required\">{{ entry_subject }}</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"subject\" id=\"input-subject\" name=\"subject\" value=\"{{ subject }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"input-subject\" class=\"col-md-2 col-form-label required\">{{ entry_message }}</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<textarea class=\"form-control\" type=\"message\" id=\"input-message\" data-ci-toggle=\"summernote\" name=\"message\">{{ message }}</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t\t<!-- Card Body -->
\t\t\t</div>
\t\t</div>
\t</main>
<script src=\"vendor/summernote/summernote-bs4.js\"></script>

<script src=\"javascript/summernote.js\"></script>
<link href=\"vendor/summernote/summernote-bs4.css\" rel=\"stylesheet\">
<script src=\"vendor/select2/js/select2.min.js\"></script>
<link href=\"vendor/select2/css/select2.min.css\" rel=\"stylesheet\">
  <script type=\"text/javascript\">
\$('select[name=\\'to\\']').on('change', function() {
\t\$('.to').hide();
\t\$('#to-' + this.value.replace('_', '-')).show();
});
\$('select[name=\\'to\\']').trigger('change');


\$(\"select[name*=\\'customer\\']\").select2({
\tajax: {
    url: \"index.php/customer/customer/autocomplete?user_token={{ user_token }}\",
    dataType: 'json',
    delay: 250,
    data: function (params) {
\treturn {
\t\tname: params.term,
\t};
},
    processResults: function (data, params) {
\tvar results = \$.map(data, function (item) {
\t\titem.id = item.customer_id;
\t\titem.text = item.name;
\t\treturn item;
\t});
\t   return {
\t\tresults: results,
\t};
},
cache: true
},
minimumInputLength: 1,
placeholder: '{{ text_select }}',
allowClear: true,
minimumResultsForSearch: 1,
width: '100%'
});
</script>
{{ footer }}
", "Tool/mail.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Tool/mail.twig");
    }
}
