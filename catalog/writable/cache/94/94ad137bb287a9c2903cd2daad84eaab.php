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

/* default/account/register.twig */
class __TwigTemplate_295d4bfd5157e3b2d1c31630f4b4652e extends Template
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
        yield ($context["menu"] ?? null);
        yield "
<div class=\"jumbotron p-5 rounded shadow-sm jumbotron-image\" data-background-image=\"images/catalog/single-task.jpg\">
\t<div class=\"col-md-6 px-0 header-details \">
\t\t<h3 class=\"display-4 font-italic\">";
        // line 4
        yield ($context["heading_title"] ?? null);
        yield "</h3>
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"";
            // line 9
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            yield "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "\t\t\t</ol>
\t\t</nav>
\t</div>
</div>
<main role=\"main\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-6 mx-auto\">
\t\t\t<div class=\"card shadow mb-5 bg-white rounded\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t";
        // line 21
        yield ($context["text_register"] ?? null);
        yield "
\t\t\t\t</div>
\t\t\t\t<section id=\"register\">
\t\t\t\t\t<div class=\"card-body mx-4\">
\t\t\t\t\t\t<form enctype=\"multipart/form-data\" id=\"form-register\" accept-charset=\"utf-8\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-firstname\">";
        // line 27
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" id=\"input-firstname\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-lastname\">";
        // line 31
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" class=\"form-control\" id=\"input-lastname\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-email\">";
        // line 35
        yield ($context["entry_email"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" id=\"input-email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-password\">";
        // line 39
        yield ($context["entry_password"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" id=\"input-password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-password\">";
        // line 43
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" class=\"form-control\" id=\"input-confirm\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row justify-content-center my-3 px-3\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-register\" class=\"btn btn-primary btn-block\" data-loading-text=\"Loading...\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 49
        yield ($context["button_register"] ?? null);
        yield "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<div class=\"bottom text-center mb-5\">
\t\t\t\t\t\t\t\t<p class=\"sm-text mx-auto\">";
        // line 53
        yield ($context["login"] ?? null);
        yield "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /.row -->
</main>
<script type=\"text/javascript\">
\$(\"#button-register\").on(\"click\", function() {
\tlet \$node = this;
\t\$.ajax({
\t\turl: \"";
        // line 67
        yield ($context["register"] ?? null);
        yield "\",
\t\tmethod: \"POST\",
\t\tdataType: \"json\",
\t\tdata: \$('#form-register').serialize(),
\t\theaders: {
\t\t\t\"X-Requested-With\": \"XMLHttpRequest\",
\t\t\t\"Content-Type\": \"application/x-www-form-urlencoded; charset=UTF-8\",
\t\t},
\t\tbeforeSend: function() {
\t\t\t\$(\$node).button(\"loading\");
\t\t\t\$('#login input').removeClass('is-invalid');
\t\t\t\$('.alert, .invalid-feedback').remove();
\t\t},
\t\tcomplete: function() {
\t\t\t\$(\$node).button(\"reset\");
\t\t},
\t\tsuccess: function (json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation  = json['redirect'];
\t\t\t}
\t\t\tif (json[\"errors\"]) {
\t\t\t\tfor (i in json[\"errors\"]) {
\t\t\t\t\t\$(\"#input-\" + i).addClass('is-invalid');
\t\t\t\t\t\$(\"#input-\" + i).after('<div class=\"invalid-feedback\">' + json[\"errors\"][i] + '</div>');
\t\t\t\t}
\t\t\t}
\t\t\tif (json[\"error_warning\"]) {
\t\t\t\t\$(\"#login\").before('<div class=\"alert alert-danger alert-dismissible fade show m-2\" role=\"alert\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error_warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>')
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
</script>
";
        // line 103
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
        return "default/account/register.twig";
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
        return array (  193 => 103,  154 => 67,  137 => 53,  130 => 49,  121 => 43,  114 => 39,  107 => 35,  100 => 31,  93 => 27,  84 => 21,  73 => 12,  62 => 9,  59 => 8,  55 => 7,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header}}{{ menu }}
<div class=\"jumbotron p-5 rounded shadow-sm jumbotron-image\" data-background-image=\"images/catalog/single-task.jpg\">
\t<div class=\"col-md-6 px-0 header-details \">
\t\t<h3 class=\"display-4 font-italic\">{{ heading_title }}</h3>
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ol>
\t\t</nav>
\t</div>
</div>
<main role=\"main\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-6 mx-auto\">
\t\t\t<div class=\"card shadow mb-5 bg-white rounded\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t{{ text_register }}
\t\t\t\t</div>
\t\t\t\t<section id=\"register\">
\t\t\t\t\t<div class=\"card-body mx-4\">
\t\t\t\t\t\t<form enctype=\"multipart/form-data\" id=\"form-register\" accept-charset=\"utf-8\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-firstname\">{{ entry_firstname }}</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"form-control\" id=\"input-firstname\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-lastname\">{{ entry_lastname }}</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" class=\"form-control\" id=\"input-lastname\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-email\">{{ entry_email}}</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" id=\"input-email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-password\">{{ entry_password }}</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" id=\"input-password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-password\">{{ entry_confirm }}</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" class=\"form-control\" id=\"input-confirm\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row justify-content-center my-3 px-3\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-register\" class=\"btn btn-primary btn-block\" data-loading-text=\"Loading...\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt\"></i>
\t\t\t\t\t\t\t\t\t{{ button_register }}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<div class=\"bottom text-center mb-5\">
\t\t\t\t\t\t\t\t<p class=\"sm-text mx-auto\">{{ login }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /.row -->
</main>
<script type=\"text/javascript\">
\$(\"#button-register\").on(\"click\", function() {
\tlet \$node = this;
\t\$.ajax({
\t\turl: \"{{ register }}\",
\t\tmethod: \"POST\",
\t\tdataType: \"json\",
\t\tdata: \$('#form-register').serialize(),
\t\theaders: {
\t\t\t\"X-Requested-With\": \"XMLHttpRequest\",
\t\t\t\"Content-Type\": \"application/x-www-form-urlencoded; charset=UTF-8\",
\t\t},
\t\tbeforeSend: function() {
\t\t\t\$(\$node).button(\"loading\");
\t\t\t\$('#login input').removeClass('is-invalid');
\t\t\t\$('.alert, .invalid-feedback').remove();
\t\t},
\t\tcomplete: function() {
\t\t\t\$(\$node).button(\"reset\");
\t\t},
\t\tsuccess: function (json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation  = json['redirect'];
\t\t\t}
\t\t\tif (json[\"errors\"]) {
\t\t\t\tfor (i in json[\"errors\"]) {
\t\t\t\t\t\$(\"#input-\" + i).addClass('is-invalid');
\t\t\t\t\t\$(\"#input-\" + i).after('<div class=\"invalid-feedback\">' + json[\"errors\"][i] + '</div>');
\t\t\t\t}
\t\t\t}
\t\t\tif (json[\"error_warning\"]) {
\t\t\t\t\$(\"#login\").before('<div class=\"alert alert-danger alert-dismissible fade show m-2\" role=\"alert\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error_warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>')
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
</script>
{{ footer }}
", "default/account/register.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/default/account/register.twig");
    }
}
