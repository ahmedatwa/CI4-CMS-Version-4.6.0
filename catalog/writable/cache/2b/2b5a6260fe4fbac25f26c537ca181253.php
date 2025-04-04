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

/* default/account/login.twig */
class __TwigTemplate_dddd2c62265e8c5c9a502bc9e9822d2d extends Template
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
\t\t<div class=\"col-sm-12 col-md-6 mx-auto\">
\t\t\t<div class=\"card shadow mb-5 bg-white rounded\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t";
        // line 21
        yield ($context["text_title"] ?? null);
        yield "
\t\t\t\t</div>
\t\t\t\t<section id=\"login\">
\t\t\t\t\t<div class=\"card-body mx-4\">
\t\t\t\t\t\t<form enctype=\"multipart/form-data\" id=\"form-login\" accept-charset=\"utf-8\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-email\">";
        // line 27
        yield ($context["entry_email"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" id=\"input-email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-password\">";
        // line 31
        yield ($context["entry_password"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" id=\"input-password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row justify-content-center my-3 px-3\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-login\" class=\"btn btn-primary btn-block\" data-loading-text=\"Loading...\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 37
        yield ($context["button_login"] ?? null);
        yield "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row justify-content-center my-2\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Forgot Password?</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<div class=\"bottom text-center mb-5\">
\t\t\t\t\t\t\t\t<p class=\"sm-text mx-auto\">";
        // line 46
        yield ($context["register"] ?? null);
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
\$(\"#button-login\").on(\"click\", function() {
\tlet \$node = this;
\t\$.ajax({
\t\turl: \"";
        // line 60
        yield ($context["login"] ?? null);
        yield "\",
\t\tmethod: \"POST\",
\t\tdataType: \"json\",
\t\tdata: \$('#form-login').serialize(),
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
\t\t\tif(json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}

\t\t\tif (json[\"validator\"]) {
\t\t\t\tfor (i in json[\"validator\"]) {
\t\t\t\t\t\$(\"#input-\" + i).addClass('is-invalid');
\t\t\t\t\t\$(\"#input-\" + i).after('<div class=\"invalid-feedback\">' + json[\"validator\"][i] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json[\"error_warning\"]) {
\t\t\t\t\$(\"#login\").before('<div class=\"alert alert-danger alert-dismissible fade show m-2\" role=\"alert\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error_warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>')
\t\t\t}

\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\tconsole.log(thrownError)
\t\t\tconsole.log(xhr.statusText)
      }
\t})
});
</script>
";
        // line 101
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
        return "default/account/login.twig";
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
        return array (  182 => 101,  138 => 60,  121 => 46,  109 => 37,  100 => 31,  93 => 27,  84 => 21,  73 => 12,  62 => 9,  59 => 8,  55 => 7,  49 => 4,  42 => 1,);
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
\t\t<div class=\"col-sm-12 col-md-6 mx-auto\">
\t\t\t<div class=\"card shadow mb-5 bg-white rounded\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t{{ text_title }}
\t\t\t\t</div>
\t\t\t\t<section id=\"login\">
\t\t\t\t\t<div class=\"card-body mx-4\">
\t\t\t\t\t\t<form enctype=\"multipart/form-data\" id=\"form-login\" accept-charset=\"utf-8\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-email\">{{ entry_email}}</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" id=\"input-email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-password\">{{ entry_password }}</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" id=\"input-password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row justify-content-center my-3 px-3\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-login\" class=\"btn btn-primary btn-block\" data-loading-text=\"Loading...\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt\"></i>
\t\t\t\t\t\t\t\t\t{{ button_login }}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row justify-content-center my-2\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Forgot Password?</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<div class=\"bottom text-center mb-5\">
\t\t\t\t\t\t\t\t<p class=\"sm-text mx-auto\">{{ register }}</p>
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
\$(\"#button-login\").on(\"click\", function() {
\tlet \$node = this;
\t\$.ajax({
\t\turl: \"{{ login }}\",
\t\tmethod: \"POST\",
\t\tdataType: \"json\",
\t\tdata: \$('#form-login').serialize(),
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
\t\t\tif(json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}

\t\t\tif (json[\"validator\"]) {
\t\t\t\tfor (i in json[\"validator\"]) {
\t\t\t\t\t\$(\"#input-\" + i).addClass('is-invalid');
\t\t\t\t\t\$(\"#input-\" + i).after('<div class=\"invalid-feedback\">' + json[\"validator\"][i] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json[\"error_warning\"]) {
\t\t\t\t\$(\"#login\").before('<div class=\"alert alert-danger alert-dismissible fade show m-2\" role=\"alert\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error_warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>')
\t\t\t}

\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\tconsole.log(thrownError)
\t\t\tconsole.log(xhr.statusText)
      }
\t})
});
</script>
{{ footer }}
", "default/account/login.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/default/account/login.twig");
    }
}
