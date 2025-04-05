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

/* Common/filemanager.twig */
class __TwigTemplate_bba92601df144a9bc5d3557eff58eccd extends Template
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
        yield "<div id=\"filemanager\" class=\"modal-dialog modal-lg modal-dialog-scrollable\">
\t<div class=\"modal-content\">
\t\t<div class=\"modal-header\">
\t\t\t<h4 class=\"modal-title\">
\t\t\t\t<i class=\"far fa-images\"></i>
\t\t\t\t";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h4>
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<div class=\"row mb-3\">
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<a href=\"";
        // line 14
        yield ($context["back"] ?? null);
        yield "\" data-tooltip=\"true\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" data-placement=\"top\" id=\"button-back\" class=\"btn btn-light border\">
\t\t\t\t\t\t<i class=\"fas fa-level-up-alt\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<button type=\"button\" data-tooltip=\"true\" title=\"";
        // line 17
        yield ($context["button_upload"] ?? null);
        yield "\" data-placement=\"top\" id=\"button-upload\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"fas fa-upload\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"button\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 20
        yield ($context["button_folder"] ?? null);
        yield "\" id=\"button-folder\" class=\"btn btn-light border\">
\t\t\t\t\t\t<i class=\"fas fa-folder\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"button\" data-tooltip=\"true\" title=\"";
        // line 23
        yield ($context["button_delete"] ?? null);
        yield "\" data-placement=\"top\" id=\"button-delete\" class=\"btn btn-danger\">
\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"";
        // line 26
        yield ($context["refresh"] ?? null);
        yield "\" id=\"button-refresh\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 31
            yield "\t\t\t\t\t<div class=\"col-sm-3 col-xs-6 text-center\">
\t\t\t\t\t\t";
            // line 32
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "type", [], "any", false, false, false, 32) == "directory")) {
                // line 33
                yield "\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 34
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "href", [], "any", false, false, false, 34);
                yield "\" class=\"directory\" style=\"vertical-align: middle;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-folder fa-5x\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"path[]\" value=\"";
                // line 38
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 38);
                yield "\"/>
\t\t\t\t\t\t\t\t";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 39);
                yield "</label>
\t\t\t\t\t\t";
            }
            // line 41
            yield "
\t\t\t\t\t\t";
            // line 42
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "type", [], "any", false, false, false, 42) == "image")) {
                // line 43
                yield "\t\t\t\t\t\t\t<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "href", [], "any", false, false, false, 43);
                yield "\" class=\"thumbnail mb-1\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 44);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 44);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 44);
                yield "\" class=\"thumbnail\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<label class=\"mt-1\"><input type=\"checkbox\" name=\"path[]\" value=\"";
                // line 46
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 46);
                yield "\"/>
\t\t\t\t\t\t\t\t";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 47);
                yield "</label>
\t\t\t\t\t\t";
            }
            // line 49
            yield "\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "type", [], "any", false, false, false, 49) == "video")) {
                // line 50
                yield "\t\t\t\t\t\t\t<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "href", [], "any", false, false, false, 50);
                yield "\" class=\"thumbnail mb-1\">
\t\t\t\t\t\t\t<video width=\"120\" height=\"120\" autoplay>
\t\t\t\t\t\t\t\t<source src=\"";
                // line 52
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "href", [], "any", false, false, false, 52);
                yield "\" type=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "mime", [], "any", false, false, false, 52);
                yield "\">
\t\t\t\t\t\t\t\tYour browser does not support the video tag.
\t\t\t\t\t\t\t</video>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<label class=\"mt-1\"><input type=\"checkbox\" name=\"path[]\" value=\"";
                // line 56
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 56);
                yield "\"/>
\t\t\t\t\t\t\t\t";
                // line 57
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 57);
                yield "</label>
\t\t\t\t\t\t";
            }
            // line 59
            yield "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 61
            yield "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
";
        // line 68
        if (($context["target"] ?? null)) {
            // line 69
            yield " \$('#modal-image').on('click', 'a.thumbnail', function(e) {
\te.preventDefault();

   ";
            // line 72
            if (($context["thumb"] ?? null)) {
                // line 73
                yield "      \$('#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["thumb"] ?? null), "js");
                yield "').find('img').attr('src', \$(this).find('img').attr('src'));
\t";
            }
            // line 75
            yield "      \$('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "js");
            yield "').val(\$(this).parent().find('input').val());

\t\$('#modal-image').modal('hide');
});
";
        }
        // line 80
        yield "
\$('#modal-image').on('click', 'a.directory', function(e) {

\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#modal-image').on('click', '#button-back', function(e) {

\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#modal-image').on('click', '#button-refresh', function(e) {

\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

</script>
<script type=\"text/javascript\">
\$('#modal-image').on('click', '#button-upload', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\" /></form>');

\t\$('#form-upload input[name=\\'file[]\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file[]\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php/common/filemanager/upload?user_token=";
        // line 120
        yield ($context["user_token"] ?? null);
        yield "&directory=";
        yield ($context["directory"] ?? null);
        yield "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', true);
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-upload\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\t\ticon: 'error',
\t\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\t\ttitle: json['error'],
\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\ticon: 'success',
\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\ttitle: json['success'],
\t\t\t\t\t}).then((result) => {
\t\t\t\t\t\tif(result.isConfirmed) {
\t\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('#modal-image').on('click', '#button-folder', function(e) {
   e.preventDefault();
 Swal.fire({
  title: 'Create New Folder!',
  input: \"text\",
  inputPlaceholder: '";
        // line 169
        yield ($context["entry_folder"] ?? null);
        yield "',
  showCancelButton: true,
  confirmButtonText: 'Create',
  confirmButtonColor: '#3085d6',
  focusConfirm: false,
  }).then((result) => {
\t\tif (!result.value) {
\t\t\treturn false;
\t\t}
        if(result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\turl: '";
        // line 180
        yield ($context["folder"] ?? null);
        yield "',
\t\t\theaders: {
\t\t\t\t\"X-Requested-With\": \"XMLHttpRequest\",
\t\t\t\t'";
        // line 183
        yield csrf_header();
        yield "': '";
        yield csrf_hash();
        yield "'
\t\t\t},
\t\t\ttype: 'POST',
\t\t\tdataType: 'json',
\t\t\tdata: {folder: encodeURIComponent(result.value)},
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-folder').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-folder').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tSwal.fire({
\t\t\t\t\t\ticon: 'error',
\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\ttitle: json['error'],
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tSwal.fire({
\t\t\t\t\t\ticon: 'success',
\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\ttitle: json['success'],
\t\t\t\t\t}).then((result) => {
\t\t\t\t\t\tif(result.isConfirmed) {
\t\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});\t
\t\t}
\t});
});

\$('#modal-image').on('click', '#button-delete', function(e) {
\te.preventDefault();
\tswal.fire({
\t\ttitle: \"Are you sure?\",
\t\ticon: \"question\",
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\tshowCloseButton: true,
\t}).then(result => {
        if (result.isConfirmed) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 234
        yield ($context["delete"] ?? null);
        yield "',
\t\t\theaders: {
\t\t\t\t\"X-Requested-With\": \"XMLHttpRequest\",
\t\t\t\t'";
        // line 237
        yield csrf_header();
        yield "': '";
        yield csrf_hash();
        yield "'
\t\t\t},
\t\t\ttype: 'POST',
\t\t\tdataType: 'json',
\t\t\tdata: \$('input[name^=\\'path\\']:checked'),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-delete').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-delete').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tSwal.fire({
\t\t\t\t\t\ticon: 'error',
\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\ttitle: json['error'],
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tSwal.fire({
\t\t\t\t\t\ticon: 'success',
\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\ttitle: json['success'],
\t\t\t\t\t}).then((result) => {
\t\t\t\t\t\tif(result.isConfirmed) {
\t\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
});
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Common/filemanager.twig";
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
        return array (  395 => 237,  389 => 234,  333 => 183,  327 => 180,  313 => 169,  259 => 120,  217 => 80,  208 => 75,  202 => 73,  200 => 72,  195 => 69,  193 => 68,  185 => 62,  179 => 61,  176 => 59,  171 => 57,  167 => 56,  158 => 52,  152 => 50,  149 => 49,  144 => 47,  140 => 46,  131 => 44,  126 => 43,  124 => 42,  121 => 41,  116 => 39,  112 => 38,  105 => 34,  102 => 33,  100 => 32,  97 => 31,  93 => 30,  86 => 26,  80 => 23,  74 => 20,  68 => 17,  60 => 14,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"filemanager\" class=\"modal-dialog modal-lg modal-dialog-scrollable\">
\t<div class=\"modal-content\">
\t\t<div class=\"modal-header\">
\t\t\t<h4 class=\"modal-title\">
\t\t\t\t<i class=\"far fa-images\"></i>
\t\t\t\t{{ heading_title }}</h4>
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<div class=\"row mb-3\">
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<a href=\"{{ back }}\" data-tooltip=\"true\" title=\"{{ button_back }}\" data-placement=\"top\" id=\"button-back\" class=\"btn btn-light border\">
\t\t\t\t\t\t<i class=\"fas fa-level-up-alt\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<button type=\"button\" data-tooltip=\"true\" title=\"{{ button_upload }}\" data-placement=\"top\" id=\"button-upload\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"fas fa-upload\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"button\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ button_folder }}\" id=\"button-folder\" class=\"btn btn-light border\">
\t\t\t\t\t\t<i class=\"fas fa-folder\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"button\" data-tooltip=\"true\" title=\"{{ button_delete }}\" data-placement=\"top\" id=\"button-delete\" class=\"btn btn-danger\">
\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"{{ refresh }}\" id=\"button-refresh\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t{% for image in images %}
\t\t\t\t\t<div class=\"col-sm-3 col-xs-6 text-center\">
\t\t\t\t\t\t{% if image.type == \"directory\" %}
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<a href=\"{{ image.href }}\" class=\"directory\" style=\"vertical-align: middle;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-folder fa-5x\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"path[]\" value=\"{{ image.path }}\"/>
\t\t\t\t\t\t\t\t{{ image.name }}</label>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if image.type == \"image\" %}
\t\t\t\t\t\t\t<a href=\"{{ image.href }}\" class=\"thumbnail mb-1\">
\t\t\t\t\t\t\t\t<img src=\"{{ image.thumb }}\" alt=\"{{ image.name }}\" title=\"{{ image.name }}\" class=\"thumbnail\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<label class=\"mt-1\"><input type=\"checkbox\" name=\"path[]\" value=\"{{ image.path }}\"/>
\t\t\t\t\t\t\t\t{{ image.name }}</label>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if image.type == \"video\" %}
\t\t\t\t\t\t\t<a href=\"{{ image.href }}\" class=\"thumbnail mb-1\">
\t\t\t\t\t\t\t<video width=\"120\" height=\"120\" autoplay>
\t\t\t\t\t\t\t\t<source src=\"{{ image.href }}\" type=\"{{ image.mime }}\">
\t\t\t\t\t\t\t\tYour browser does not support the video tag.
\t\t\t\t\t\t\t</video>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<label class=\"mt-1\"><input type=\"checkbox\" name=\"path[]\" value=\"{{ image.path }}\"/>
\t\t\t\t\t\t\t\t{{ image.name }}</label>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t{# col-sm-3 col-xs-6 text-center #}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
{% if target %}
 \$('#modal-image').on('click', 'a.thumbnail', function(e) {
\te.preventDefault();

   {% if thumb %}
      \$('#{{ thumb|escape('js') }}').find('img').attr('src', \$(this).find('img').attr('src'));
\t{% endif %}
      \$('#{{ target|escape('js') }}').val(\$(this).parent().find('input').val());

\t\$('#modal-image').modal('hide');
});
{% endif %}

\$('#modal-image').on('click', 'a.directory', function(e) {

\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#modal-image').on('click', '#button-back', function(e) {

\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#modal-image').on('click', '#button-refresh', function(e) {

\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

</script>
<script type=\"text/javascript\">
\$('#modal-image').on('click', '#button-upload', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\" /></form>');

\t\$('#form-upload input[name=\\'file[]\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file[]\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php/common/filemanager/upload?user_token={{ user_token }}&directory={{ directory }}',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', true);
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-upload\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\t\ticon: 'error',
\t\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\t\ttitle: json['error'],
\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\tSwal.fire({
\t\t\t\t\t\ticon: 'success',
\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\ttitle: json['success'],
\t\t\t\t\t}).then((result) => {
\t\t\t\t\t\tif(result.isConfirmed) {
\t\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('#modal-image').on('click', '#button-folder', function(e) {
   e.preventDefault();
 Swal.fire({
  title: 'Create New Folder!',
  input: \"text\",
  inputPlaceholder: '{{ entry_folder }}',
  showCancelButton: true,
  confirmButtonText: 'Create',
  confirmButtonColor: '#3085d6',
  focusConfirm: false,
  }).then((result) => {
\t\tif (!result.value) {
\t\t\treturn false;
\t\t}
        if(result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\turl: '{{ folder }}',
\t\t\theaders: {
\t\t\t\t\"X-Requested-With\": \"XMLHttpRequest\",
\t\t\t\t'{{ csrf_header() }}': '{{ csrf_hash() }}'
\t\t\t},
\t\t\ttype: 'POST',
\t\t\tdataType: 'json',
\t\t\tdata: {folder: encodeURIComponent(result.value)},
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-folder').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-folder').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tSwal.fire({
\t\t\t\t\t\ticon: 'error',
\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\ttitle: json['error'],
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tSwal.fire({
\t\t\t\t\t\ticon: 'success',
\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\ttitle: json['success'],
\t\t\t\t\t}).then((result) => {
\t\t\t\t\t\tif(result.isConfirmed) {
\t\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});\t
\t\t}
\t});
});

\$('#modal-image').on('click', '#button-delete', function(e) {
\te.preventDefault();
\tswal.fire({
\t\ttitle: \"Are you sure?\",
\t\ticon: \"question\",
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\tshowCloseButton: true,
\t}).then(result => {
        if (result.isConfirmed) {
\t\t\$.ajax({
\t\t\turl: '{{ delete }}',
\t\t\theaders: {
\t\t\t\t\"X-Requested-With\": \"XMLHttpRequest\",
\t\t\t\t'{{ csrf_header() }}': '{{ csrf_hash() }}'
\t\t\t},
\t\t\ttype: 'POST',
\t\t\tdataType: 'json',
\t\t\tdata: \$('input[name^=\\'path\\']:checked'),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-delete').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-delete').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tSwal.fire({
\t\t\t\t\t\ticon: 'error',
\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\ttitle: json['error'],
\t\t\t\t\t});
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tSwal.fire({
\t\t\t\t\t\ticon: 'success',
\t\t\t\t\t\tconfirmButtonColor: '#3085d6',
\t\t\t\t\t\ttitle: json['success'],
\t\t\t\t\t}).then((result) => {
\t\t\t\t\t\tif(result.isConfirmed) {
\t\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
});
</script>", "Common/filemanager.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Common/filemanager.twig");
    }
}
