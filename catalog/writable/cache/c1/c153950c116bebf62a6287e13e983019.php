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

/* default/information/contact.twig */
class __TwigTemplate_7eb694fad18f9b802d804dc9d97e81db extends Template
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
<div class=\"jumbotron p-0 text-white bg-transparent\">
\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2461.7357022267965!2d-8.4723965843174!3d51.9022871895744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4844900e7520086f%3A0xd77060c23b6081d1!2sHappy%20Days%20Montessori!5e0!3m2!1sen!2sie!4v1630965370582!5m2!1sen!2sie\" width=\"1437\" height=\"450\" style=\"border:0;\" allowfullscreen=\"true\" loading=\"lazy\"></iframe>
</div>
<main role=\"main\" class=\"container\">
\t<div class=\"row\">";
        // line 6
        yield ($context["column_left"] ?? null);
        yield "
\t\t";
        // line 7
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["column_left"] ?? null)) > 123) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["column_right"] ?? null)) > 123))) {
            // line 8
            yield "\t\t\t";
            $context["class"] = "col-sm-12 col-md-8";
            // line 9
            yield "\t\t";
        } else {
            // line 10
            yield "\t\t\t";
            $context["class"] = "col-12";
            // line 11
            yield "\t\t";
        }
        // line 12
        yield "\t\t<div class=\"";
        yield ($context["class"] ?? null);
        yield "\">
\t\t\t<section>
\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"card bg-white mb-3\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t";
        // line 19
        yield ($context["text_location"] ?? null);
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>";
        // line 23
        yield ($context["text_address"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t\t";
        // line 25
        yield ($context["address"] ?? null);
        yield "</li>
\t\t\t\t\t\t\t\t\t<li>";
        // line 26
        yield ($context["text_telephone"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t\t";
        // line 28
        yield ($context["telephone"] ?? null);
        yield "</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"card text-white bg-info mb-3\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t";
        // line 38
        yield ($context["text_open"] ?? null);
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["open_hours"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
            // line 43
            yield "\t\t\t\t\t\t\t\t\t\t<li>";
            yield $context["time"];
            yield "</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['time'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card mb-5\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<i class=\"far fa-envelope\"></i>
\t\t\t\t\t\t";
        // line 53
        yield ($context["text_contact_form"] ?? null);
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<form id=\"form-contact\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 57
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\"/>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-name\">";
        // line 59
        yield ($context["entry_name"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"input-name\" aria-describedby=\"emailHelp\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-email\">";
        // line 63
        yield ($context["entry_email"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" id=\"input-email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-enquiry\">";
        // line 67
        yield ($context["entry_enquiry"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t<textarea name=\"inquiry\" class=\"form-control\" id=\"input-inquiry\" rows=\"7\" cols=\"5\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-contact\" class=\"btn btn-primary\" data-loading-text=\"Loading...\">
\t\t\t\t\t\t\t\t<i class=\"far fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t";
        // line 72
        yield ($context["button_submit"] ?? null);
        yield "</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t\t";
        // line 78
        yield ($context["column_right"] ?? null);
        yield "
\t</div>
</main>

<script type=\"text/javascript\">
\$('#button-contact').on('click', function() {
\t\tlet \$node = this;
\t\t\$.ajax({
\t\t\turl: '";
        // line 86
        yield ($context["send"] ?? null);
        yield "',
\t\t\theaders: {
              \"X-Requested-With\": \"XMLHttpRequest\"
           },
\t\t   dataType: 'json',
\t\t   method: 'POST',
\t\t   data:\$(\"#form-contact\").serialize(),
\t\t   beforeSend: function() {
\t\t\t\t\$('.alert, .invalid-feedback').remove();
\t\t\t\t\$('form-contact-us input').removeClass('is-invalid');
\t\t\t\t\$(\$node).button(\"loading\");
\t\t   },
\t\t   complete: function() {
\t\t\t\t\$(\$node).button(\"reset\");
\t\t   },
\t\t   success: function(json) {
\t\t   \tif (json['errors']) {
\t\t   \t\tfor (i in json['errors']) {
\t\t   \t\t\tvar el = \$('#input-' + i );
\t\t   \t\t\tel.addClass('is-invalid');
\t\t   \t\t\tel.after('<div class=\"invalid-feedback\">' + json['errors'][i] + '</div>');
\t\t   \t\t}
\t\t   \t}

\t\t   \tif (json['success']) {
\t\t   \t\t\$('#form-contact-us').before('<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] +'<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>')
\t\t   \t}
\t\t   },
\t\t   error: function(xhr, ajaxOptions, thrownError) {
\t\t      alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t   }
\t\t});
\t});
</script>
";
        // line 120
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
        return "default/information/contact.twig";
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
        return array (  237 => 120,  200 => 86,  189 => 78,  180 => 72,  172 => 67,  165 => 63,  158 => 59,  151 => 57,  144 => 53,  134 => 45,  125 => 43,  121 => 42,  114 => 38,  101 => 28,  96 => 26,  92 => 25,  87 => 23,  80 => 19,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header}}{{ menu }}
<div class=\"jumbotron p-0 text-white bg-transparent\">
\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2461.7357022267965!2d-8.4723965843174!3d51.9022871895744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4844900e7520086f%3A0xd77060c23b6081d1!2sHappy%20Days%20Montessori!5e0!3m2!1sen!2sie!4v1630965370582!5m2!1sen!2sie\" width=\"1437\" height=\"450\" style=\"border:0;\" allowfullscreen=\"true\" loading=\"lazy\"></iframe>
</div>
<main role=\"main\" class=\"container\">
\t<div class=\"row\">{{ column_left }}
\t\t{% if column_left|length > 123 or column_right|length > 123 %}
\t\t\t{% set class = 'col-sm-12 col-md-8' %}
\t\t{% else %}
\t\t\t{% set class = 'col-12' %}
\t\t{% endif %}
\t\t<div class=\"{{ class }}\">
\t\t\t<section>
\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"card bg-white mb-3\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>
\t\t\t\t\t\t\t\t{{ text_location }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>{{ text_address }}
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t\t{{ address }}</li>
\t\t\t\t\t\t\t\t\t<li>{{ text_telephone }}
\t\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t\t\t{{ telephone }}</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"card text-white bg-info mb-3\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t{{ text_open }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t{% for time in open_hours %}
\t\t\t\t\t\t\t\t\t\t<li>{{ time }}</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card mb-5\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<i class=\"far fa-envelope\"></i>
\t\t\t\t\t\t{{ text_contact_form }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<form id=\"form-contact\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\"/>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-name\">{{ entry_name }}</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"input-name\" aria-describedby=\"emailHelp\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-email\">{{ entry_email }}</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" id=\"input-email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-enquiry\">{{ entry_enquiry }}</label>
\t\t\t\t\t\t\t\t<textarea name=\"inquiry\" class=\"form-control\" id=\"input-inquiry\" rows=\"7\" cols=\"5\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-contact\" class=\"btn btn-primary\" data-loading-text=\"Loading...\">
\t\t\t\t\t\t\t\t<i class=\"far fa-paper-plane\"></i>
\t\t\t\t\t\t\t\t{{ button_submit }}</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t\t{{ column_right }}
\t</div>
</main>

<script type=\"text/javascript\">
\$('#button-contact').on('click', function() {
\t\tlet \$node = this;
\t\t\$.ajax({
\t\t\turl: '{{ send }}',
\t\t\theaders: {
              \"X-Requested-With\": \"XMLHttpRequest\"
           },
\t\t   dataType: 'json',
\t\t   method: 'POST',
\t\t   data:\$(\"#form-contact\").serialize(),
\t\t   beforeSend: function() {
\t\t\t\t\$('.alert, .invalid-feedback').remove();
\t\t\t\t\$('form-contact-us input').removeClass('is-invalid');
\t\t\t\t\$(\$node).button(\"loading\");
\t\t   },
\t\t   complete: function() {
\t\t\t\t\$(\$node).button(\"reset\");
\t\t   },
\t\t   success: function(json) {
\t\t   \tif (json['errors']) {
\t\t   \t\tfor (i in json['errors']) {
\t\t   \t\t\tvar el = \$('#input-' + i );
\t\t   \t\t\tel.addClass('is-invalid');
\t\t   \t\t\tel.after('<div class=\"invalid-feedback\">' + json['errors'][i] + '</div>');
\t\t   \t\t}
\t\t   \t}

\t\t   \tif (json['success']) {
\t\t   \t\t\$('#form-contact-us').before('<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] +'<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>')
\t\t   \t}
\t\t   },
\t\t   error: function(xhr, ajaxOptions, thrownError) {
\t\t      alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t   }
\t\t});
\t});
</script>
{{ footer }}
", "default/information/contact.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/default/information/contact.twig");
    }
}
