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

/* Common/forgotten.twig */
class __TwigTemplate_597ace8433728217afb4273b581177de extends Template
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
        yield ($context["heading_title"] ?? null);
        yield "
\t\t\t</div>
\t\t\t<div class=\"card-body p-auto mx-4\">
\t\t\t\t<div class=\"row no-gutters h-100\">
\t\t\t\t\t<div class=\"col d-none d-sm-block\">
\t\t\t\t\t\t<div class=\"login100-pic\" data-tilt>
\t\t\t\t\t\t\t<img src=\"images/forgot.png\" alt=\"IMG\" width=\"250px\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<form class=\"login100-form\" id=\"form-forgot\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
                        <input type=\"hidden\" name=\"";
        // line 18
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\" />
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-email\" class=\"font-weight-bold\">";
        // line 20
        yield ($context["text_email"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-email\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"input-email\" placeholder=\"";
        // line 25
        yield ($context["entry_email"] ?? null);
        yield "\" aria-label=\"email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary text-center\" id=\"button-forgot\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt mr-1\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 31
        yield ($context["button_reset"] ?? null);
        yield "</button>
\t\t\t\t\t\t\t\t<a role=\"button\" href=\"";
        // line 32
        yield ($context["cancel"] ?? null);
        yield "\" class=\"btn btn-light\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
<script type=\"text/javascript\" src=\"vendor/tilt/tilt.jquery.js\"></script>
<script type=\"text/javascript\">
\$('#button-forgot').on('click', function() {
    \$.ajax({
        url: '";
        // line 47
        yield ($context["forgotten"] ?? null);
        yield "',
        headers: {
            \"X-Requested-With\": \"XMLHttpRequest\",
\t\t\t\"Content-Type\": \"application/x-www-form-urlencoded; charset=UTF-8\",
        },
        method: 'POST',
        dataType: 'json',
        data: \$('#form-forgot').serialize(),
        beforeSend: function() {
            \$('#form-forgot').removeClass('is-invalid');
            \$('.alert, .text-danger, .invalid-feedback').remove();
            \$(this).prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> Loading...');
        },
        complete: function() {
            \$(this).prop('disabled', false).html('<i class=\"fas fa-sign-in-alt\"></i> ";
        // line 61
        yield ($context["button_reset"] ?? null);
        yield "');
        },
        success: function(json) {
            if (json['error']) {
                \$('#input-email').addClass('is-invalid');
                \$('#input-email').after('<div class=\"invalid-feedback\">' + json['error'] + '</div>');
            }

            if (json['error_record']) {
                \$('.card-header').after('<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error_record'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>')
            }

            if (json['success']) {
                location = json['redirect'];
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
</script>
";
        // line 83
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Common/forgotten.twig";
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
        return array (  153 => 83,  128 => 61,  111 => 47,  93 => 32,  89 => 31,  80 => 25,  72 => 20,  65 => 18,  51 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div class=\"container my-2 overflow-hidden\">
\t<div class=\"d-flex align-items-center justify-content-center my-5\">
\t\t<div class=\"card shadow mb-5 bg-body rounded\">
\t\t\t<div class=\"card-header mb-1\">
\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t{{ heading_title }}
\t\t\t</div>
\t\t\t<div class=\"card-body p-auto mx-4\">
\t\t\t\t<div class=\"row no-gutters h-100\">
\t\t\t\t\t<div class=\"col d-none d-sm-block\">
\t\t\t\t\t\t<div class=\"login100-pic\" data-tilt>
\t\t\t\t\t\t\t<img src=\"images/forgot.png\" alt=\"IMG\" width=\"250px\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<form class=\"login100-form\" id=\"form-forgot\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
                        <input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\" />
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t<label for=\"input-email\" class=\"font-weight-bold\">{{ text_email }}</label>
\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-email\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"input-email\" placeholder=\"{{ entry_email }}\" aria-label=\"email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary text-center\" id=\"button-forgot\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt mr-1\"></i>
\t\t\t\t\t\t\t\t\t{{ button_reset }}</button>
\t\t\t\t\t\t\t\t<a role=\"button\" href=\"{{ cancel }}\" class=\"btn btn-light\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
<script type=\"text/javascript\" src=\"vendor/tilt/tilt.jquery.js\"></script>
<script type=\"text/javascript\">
\$('#button-forgot').on('click', function() {
    \$.ajax({
        url: '{{ forgotten }}',
        headers: {
            \"X-Requested-With\": \"XMLHttpRequest\",
\t\t\t\"Content-Type\": \"application/x-www-form-urlencoded; charset=UTF-8\",
        },
        method: 'POST',
        dataType: 'json',
        data: \$('#form-forgot').serialize(),
        beforeSend: function() {
            \$('#form-forgot').removeClass('is-invalid');
            \$('.alert, .text-danger, .invalid-feedback').remove();
            \$(this).prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> Loading...');
        },
        complete: function() {
            \$(this).prop('disabled', false).html('<i class=\"fas fa-sign-in-alt\"></i> {{ button_reset }}');
        },
        success: function(json) {
            if (json['error']) {
                \$('#input-email').addClass('is-invalid');
                \$('#input-email').after('<div class=\"invalid-feedback\">' + json['error'] + '</div>');
            }

            if (json['error_record']) {
                \$('.card-header').after('<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error_record'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>')
            }

            if (json['success']) {
                location = json['redirect'];
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
</script>
{{ footer }}", "Common/forgotten.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Common/forgotten.twig");
    }
}
