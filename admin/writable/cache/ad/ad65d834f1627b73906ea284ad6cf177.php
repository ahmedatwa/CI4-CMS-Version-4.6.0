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

/* Common/login.twig */
class __TwigTemplate_3d452831f3443eb9caaecb72a7708209 extends Template
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
<div class=\"container my-2 overflow-hidden\">
\t<div class=\"d-flex align-items-center justify-content-center my-5\">
\t\t<div class=\"card shadow mb-5 bg-body rounded\">
\t\t\t<div class=\"card-header mb-1\">
\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t";
        // line 7
        yield ($context["text_title"] ?? null);
        yield "
\t\t\t</div>
\t\t\t";
        // line 9
        if (($context["warning"] ?? null)) {
            // line 10
            yield "\t\t\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t<i class=\"fas fa-exclamation-circle\"></i>
\t\t\t\t\t";
            // line 12
            yield ($context["warning"] ?? null);
            yield "
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 18
        yield "\t\t\t<div class=\"card-body p-auto mx-4\">
\t\t\t\t<div class=\"row no-gutters h-100\">
\t\t\t\t\t<div class=\"col d-none d-sm-block\">
\t\t\t\t\t\t<div class=\"login100-pic\" data-tilt>
\t\t\t\t\t\t\t<img src=\"images/login.png\" alt=\"IMG\" width=\"250px\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<form id=\"form-login\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 27
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
        // line 28
        yield ($context["redirect"] ?? null);
        yield "\" />
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-email\" class=\"font-weight-bold\">";
        // line 30
        yield ($context["entry_email"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-email\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"input-email\" placeholder=\"";
        // line 35
        yield ($context["entry_email"] ?? null);
        yield "\" aria-label=\"email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-password\" class=\"font-weight-bold\">";
        // line 39
        yield ($context["entry_password"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-password\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" id=\"input-password\" placeholder=\"";
        // line 44
        yield ($context["entry_password"] ?? null);
        yield "\" aria-label=\"password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"m-auto\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-block\" id=\"button-login\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt mr-1\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 50
        yield ($context["button_login"] ?? null);
        yield "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        yield ($context["forgotten"] ?? null);
        yield "\"/>";
        yield ($context["text_forget_password"] ?? null);
        yield "</p>
\t\t\t\t\t\t    </a>
\t\t\t\t\t    </p>
\t\t\t\t    </form>
\t\t\t    </div>
\t\t    </div>
\t    </div>
    </div>
 </div>
</div>
<script type=\"text/javascript\" src=\"vendor/tilt/tilt.jquery.js\"></script>
<script type=\"text/javascript\" src=\"javascript/jquery.countdown.min.js\"></script>
<script type=\"text/javascript\">
\$('#button-login').on('click', function () {
\t\$.ajax({
\t\turl: '";
        // line 69
        yield ($context["authLogin"] ?? null);
        yield "',
\t\theaders: {
\t\t\"X-Requested-With\": \"XMLHttpRequest\",
\t\t\"Content-Type\": \"application/x-www-form-urlencoded; charset=UTF-8\"
\t\t},
\t\tmethod: 'POST',
\t\tdataType: 'json',
\t\tdata: \$('#form-login').serialize(),
\t\tbeforeSend: function () {
\t\t\t\$('#form-login').removeClass('is-invalid');
\t\t\t\$('.alert, .text-danger, .invalid-feedback').remove();
\t\t\t\$(this).prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> Loading...');
\t\t},
\t\tcomplete: function () {
\t\t\t\$(this).prop('disabled', false).html('<i class=\"fas fa-sign-in-alt\"></i>   ";
        // line 83
        yield ($context["button_login"] ?? null);
        yield "');
\t\t},
\t\tsuccess: function (json) {
\t\t\tconsole.log(json);
\t\tif (json['validator']) {
\t\t    for (i in json['validator']) {
\t\t\t\tvar element = \$('#input-' + i);
\t\t\t\telement.addClass('is-invalid');
\t\t\t\telement.after('<div class=\"invalid-feedback d-block\">' + json['validator'][i] + '</div>');
\t\t    }
\t\t    \$('.card-header').after('<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>')
\t\t}
\t\t
\t\t
\t\tif (json['redirect']) {
\t\t    location = json['redirect'];
\t\t}
\t\t},
\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\$('.card-header').after('<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><i class=\"fas fa-exclamation-circle\"></i> ' + xhr.responseJSON.code + ': ' + xhr.responseJSON.message + ' Generating new token in <span id=\"token_countdown_timer\"></span><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>');
\t\t\tvar fiveSeconds = new Date().getTime() + 5000;
\t\t\t\$('#token_countdown_timer').countdown(fiveSeconds, {elapse: true})
\t\t\t.on('update.countdown', function(event) {
\t\t\tvar \$this = \$(this);
\t\t\tif (event.elapsed) {
\t\t\t\t//location.reload(true);
\t\t\t} else {
\t\t\t\t\$this.html(event.strftime('<span>%S</span> Seconds...'));
\t\t\t}
\t\t\t});
\t\t}
\t});
});
</script>
";
        // line 117
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
        return "Common/login.twig";
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
        return array (  206 => 117,  169 => 83,  152 => 69,  132 => 54,  125 => 50,  116 => 44,  108 => 39,  101 => 35,  93 => 30,  88 => 28,  82 => 27,  71 => 18,  62 => 12,  58 => 10,  56 => 9,  51 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div class=\"container my-2 overflow-hidden\">
\t<div class=\"d-flex align-items-center justify-content-center my-5\">
\t\t<div class=\"card shadow mb-5 bg-body rounded\">
\t\t\t<div class=\"card-header mb-1\">
\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t{{ text_title }}
\t\t\t</div>
\t\t\t{% if warning %}
\t\t\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t<i class=\"fas fa-exclamation-circle\"></i>
\t\t\t\t\t{{ warning }}
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"card-body p-auto mx-4\">
\t\t\t\t<div class=\"row no-gutters h-100\">
\t\t\t\t\t<div class=\"col d-none d-sm-block\">
\t\t\t\t\t\t<div class=\"login100-pic\" data-tilt>
\t\t\t\t\t\t\t<img src=\"images/login.png\" alt=\"IMG\" width=\"250px\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<form id=\"form-login\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-email\" class=\"font-weight-bold\">{{ entry_email }}</label>
\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-email\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"input-email\" placeholder=\"{{ entry_email }}\" aria-label=\"email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-password\" class=\"font-weight-bold\">{{ entry_password }}</label>
\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-password\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" id=\"input-password\" placeholder=\"{{ entry_password }}\" aria-label=\"password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"m-auto\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-block\" id=\"button-login\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt mr-1\"></i>
\t\t\t\t\t\t\t\t\t{{ button_login }}</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t\t\t<a href=\"{{ forgotten }}\"/>{{ text_forget_password }}</p>
\t\t\t\t\t\t    </a>
\t\t\t\t\t    </p>
\t\t\t\t    </form>
\t\t\t    </div>
\t\t    </div>
\t    </div>
    </div>
 </div>
</div>
<script type=\"text/javascript\" src=\"vendor/tilt/tilt.jquery.js\"></script>
<script type=\"text/javascript\" src=\"javascript/jquery.countdown.min.js\"></script>
<script type=\"text/javascript\">
\$('#button-login').on('click', function () {
\t\$.ajax({
\t\turl: '{{ authLogin }}',
\t\theaders: {
\t\t\"X-Requested-With\": \"XMLHttpRequest\",
\t\t\"Content-Type\": \"application/x-www-form-urlencoded; charset=UTF-8\"
\t\t},
\t\tmethod: 'POST',
\t\tdataType: 'json',
\t\tdata: \$('#form-login').serialize(),
\t\tbeforeSend: function () {
\t\t\t\$('#form-login').removeClass('is-invalid');
\t\t\t\$('.alert, .text-danger, .invalid-feedback').remove();
\t\t\t\$(this).prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> Loading...');
\t\t},
\t\tcomplete: function () {
\t\t\t\$(this).prop('disabled', false).html('<i class=\"fas fa-sign-in-alt\"></i>   {{ button_login }}');
\t\t},
\t\tsuccess: function (json) {
\t\t\tconsole.log(json);
\t\tif (json['validator']) {
\t\t    for (i in json['validator']) {
\t\t\t\tvar element = \$('#input-' + i);
\t\t\t\telement.addClass('is-invalid');
\t\t\t\telement.after('<div class=\"invalid-feedback d-block\">' + json['validator'][i] + '</div>');
\t\t    }
\t\t    \$('.card-header').after('<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>')
\t\t}
\t\t
\t\t
\t\tif (json['redirect']) {
\t\t    location = json['redirect'];
\t\t}
\t\t},
\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\$('.card-header').after('<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><i class=\"fas fa-exclamation-circle\"></i> ' + xhr.responseJSON.code + ': ' + xhr.responseJSON.message + ' Generating new token in <span id=\"token_countdown_timer\"></span><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>');
\t\t\tvar fiveSeconds = new Date().getTime() + 5000;
\t\t\t\$('#token_countdown_timer').countdown(fiveSeconds, {elapse: true})
\t\t\t.on('update.countdown', function(event) {
\t\t\tvar \$this = \$(this);
\t\t\tif (event.elapsed) {
\t\t\t\t//location.reload(true);
\t\t\t} else {
\t\t\t\t\$this.html(event.strftime('<span>%S</span> Seconds...'));
\t\t\t}
\t\t\t});
\t\t}
\t});
});
</script>
{{ footer }} 
", "Common/login.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Common/login.twig");
    }
}
