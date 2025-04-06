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

/* Design/translation_form.twig */
class __TwigTemplate_71724cbf8e5eab535961e297a2c3aca0 extends Template
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
        yield "\" class=\"btn btn-primary\" form=\"form-translation\">
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
        yield ($context["text_form"] ?? null);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"form-translation\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 33
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\" />
\t\t\t\t\t\t <div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 35
        yield ($context["entry_language"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"language_id\" id=\"input-language\" class=\"form-control\">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 39
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39) == ($context["language_id"] ?? null))) {
                // line 40
                yield "                <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 40);
                yield "</option>
                ";
            } else {
                // line 42
                yield "                <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
                yield "</option>
                ";
            }
            // line 44
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "              </select>
            </div>
          </div>
\t\t\t\t\t\t<div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\" for=\"input-route\">";
        // line 49
        yield ($context["entry_route"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"route\" id=\"input-route\" class=\"form-control\">
                ";
        // line 52
        if (($context["route"] ?? null)) {
            // line 53
            yield "                <option value=\"";
            yield ($context["route"] ?? null);
            yield "\" selected=\"selected\">";
            yield ($context["route"] ?? null);
            yield "</option>
                ";
        }
        // line 55
        yield "              </select>
            </div>
          </div>
\t\t\t\t\t<div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 59
        yield ($context["entry_key"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"key\" id=\"input-key\" class=\"form-control\">
                ";
        // line 62
        if (($context["key"] ?? null)) {
            // line 63
            yield "                <option value=\"";
            yield ($context["key"] ?? null);
            yield "\" selected=\"selected\">";
            yield ($context["key"] ?? null);
            yield "</option>
                ";
        }
        // line 65
        yield "              </select>
              <input type=\"text\" name=\"key\" value=\"";
        // line 66
        yield ($context["key"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_key"] ?? null);
        yield "\" class=\"form-control\" />
              ";
        // line 67
        if (($context["error_key"] ?? null)) {
            // line 68
            yield "              <div class=\"text-danger\">";
            yield ($context["error_key"] ?? null);
            yield "</div>
              ";
        }
        // line 70
        yield "            </div>
          </div>
\t\t\t\t\t\t<div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\" for=\"input-default\">";
        // line 73
        yield ($context["entry_default"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"default\" placeholder=\"";
        // line 75
        yield ($context["entry_default"] ?? null);
        yield "\" rows=\"5\" id=\"input-default\" class=\"form-control\" disabled=\"disabled\">";
        if (($context["default"] ?? null)) {
            yield ($context["default"] ?? null);
        }
        yield "</textarea>
            </div>
          </div>
\t\t\t\t\t\t <div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\" for=\"input-value\">";
        // line 79
        yield ($context["entry_value"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"value\" rows=\"5\" placeholder=\"";
        // line 81
        yield ($context["entry_value"] ?? null);
        yield "\" id=\"input-value\" class=\"form-control\">";
        yield ($context["value"] ?? null);
        yield "</textarea>
            </div>
          </div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<!-- Card Body -->
\t\t\t</div>
\t\t</div>
\t</main>
    <script type=\"text/javascript\"><!--
    ";
        // line 91
        if (($context["key"] ?? null)) {
            // line 92
            yield "    \$('select[name=\"store_id\"]').prop('disabled', true);
    \$('select[name=\"language_id\"]').prop('disabled', true);
    \$('select[name=\"route\"]').prop('disabled', true);
    \$('select[name=\"key\"]').prop('disabled', true);
    \$('input[name=\"key\"]').prop('disabled', true);
    ";
        } else {
            // line 98
            yield "    \$('select[name=\"language_id\"]').on('change', function() {
      \$.ajax({
        url: '";
            // line 100
            yield ($context["path"] ?? null);
            yield "&language_id=' + \$('select[name=\"language_id\"]').val(),
        dataType: 'json',
        beforeSend: function() {
          \$('select[name=\"route\"]').html('');
          \$('select[name=\"key\"]').html('');
          \$('input[name=\"key\"]').val('');
          \$('textarea[name=\"default\"]').val('');
          \$('select[name=\"store_id\"]').prop('disabled', true);
          \$('select[name=\"language_id\"]').prop('disabled', true);
          \$('select[name=\"route\"]').prop('disabled', true);
          \$('select[name=\"key\"]').prop('disabled', true);
          \$('input[name=\"key\"]').prop('disabled', true);
          \$('textarea[name=\"value\"]').prop('disabled', true);
        },
        complete: function() {
          \$('select[name=\"store_id\"]').prop('disabled', false);
          \$('select[name=\"language_id\"]').prop('disabled', false);
          \$('select[name=\"route\"]').prop('disabled', false);
        },
        success: function(json) {
          html = '<option value=\"\"></option>';

          if (json) {
            for (i = 0; i < json.length; i++) {
              if (i == 0) {
                html += '<option value=\"' + json[i] + '\" selected=\"selected\">' + json[i] + '</option>';
              } else {
                html += '<option value=\"' + json[i] + '\">' + json[i] + '</option>';
              }
            }
          }

          \$('select[name=\"route\"]').html(html);

          \$('select[name=\"route\"]').trigger('change');
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

    var translation = [];

    \$('select[name=\"route\"]').on('change', function() {
      \$.ajax({
        url: 'index.php/design/translation/translation?user_token=";
            // line 146
            yield ($context["user_token"] ?? null);
            yield "&language_id=' + \$('select[name=\"language_id\"]').val() + '&path=' + \$('select[name=\"route\"]').val(),
        dataType: 'json',
        ";
            // line 148
            if ( !($context["key"] ?? null)) {
                // line 149
                yield "        beforeSend: function() {
          \$('select[name=\"key\"]').html('');
          \$('input[name=\"key\"]').val('');
          \$('textarea[name=\"default\"]').val('');
          \$('textarea[name=\"value\"]').val('');
          \$('select[name=\"store_id\"]').prop('disabled', true);
          \$('select[name=\"language_id\"]').prop('disabled', true);
          \$('select[name=\"route\"]').prop('disabled', true);
          \$('select[name=\"key\"]').prop('disabled', true);
          \$('textarea[name=\"value\"]').prop('disabled', true);
        },
        complete: function() {
          \$('select[name=\"store_id\"]').prop('disabled', false);
          \$('select[name=\"language_id\"]').prop('disabled', false);
          \$('select[name=\"route\"]').prop('disabled', false);
          \$('select[name=\"key\"]').prop('disabled', false);
          \$('textarea[name=\"value\"]').prop('disabled', false);
        },
        ";
            }
            // line 168
            yield "        success: function(json) {
          translation = [];

          html = '<option value=\"\"></option>';

          if (json) {
            for (i = 0; i < json.length; i++) {
              translation[json[i]['key']] = json[i]['value'];

              if (i == 0) {
                html += '<option value=\"' + json[i]['key'] + '\" selected=\"selected\">' + json[i]['key'] + '</option>';
              } else {
                html += '<option value=\"' + json[i]['key'] + '\">' + json[i]['key'] + '</option>';
              }
            }
          }

          \$('select[name=\"key\"]').html(html);

          \$('select[name=\"key\"]').trigger('change');
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

    \$('select[name=\"language_id\"]').trigger('change');

    \$('select[name=\"key\"]').on('change', function() {
      if (\$(this).val()) {
        \$('textarea[name=\"default\"]').val(translation[\$('select[name=\"key\"]').val()]);
        \$('input[name=\"key\"]').val(\$('select[name=\"key\"]').val());

        \$('input[name=\"key\"]').prop('disabled', true);
      } else {
        \$('textarea[name=\"default\"]').val('');

        \$('input[name=\"key\"]').prop('disabled', false);
      }
    });
    ";
        }
        // line 210
        yield "  //--></script> 
";
        // line 211
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Design/translation_form.twig";
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
        return array (  393 => 211,  390 => 210,  346 => 168,  325 => 149,  323 => 148,  318 => 146,  269 => 100,  265 => 98,  257 => 92,  255 => 91,  240 => 81,  235 => 79,  224 => 75,  219 => 73,  214 => 70,  208 => 68,  206 => 67,  200 => 66,  197 => 65,  189 => 63,  187 => 62,  181 => 59,  175 => 55,  167 => 53,  165 => 52,  159 => 49,  153 => 45,  147 => 44,  139 => 42,  131 => 40,  128 => 39,  124 => 38,  118 => 35,  111 => 33,  104 => 29,  96 => 23,  85 => 20,  82 => 19,  78 => 18,  73 => 16,  63 => 11,  57 => 8,  53 => 7,  42 => 1,);
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
\t\t\t\t\t\t\ttitle=\"{{ button_save }}\" class=\"btn btn-primary\" form=\"form-translation\">
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
\t\t\t\t\t{{ text_form }}
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"form-translation\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\" />
\t\t\t\t\t\t <div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\" for=\"input-language\">{{ entry_language }}</label>
            <div class=\"col-sm-10\">
              <select name=\"language_id\" id=\"input-language\" class=\"form-control\">
                {% for language in languages %}
                {% if language.language_id == language_id %}
                <option value=\"{{ language.language_id }}\" selected=\"selected\">{{ language.name }}</option>
                {% else %}
                <option value=\"{{ language.language_id }}\">{{ language.name }}</option>
                {% endif %}
                {% endfor %}
              </select>
            </div>
          </div>
\t\t\t\t\t\t<div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\" for=\"input-route\">{{ entry_route }}</label>
            <div class=\"col-sm-10\">
              <select name=\"route\" id=\"input-route\" class=\"form-control\">
                {% if route %}
                <option value=\"{{ route }}\" selected=\"selected\">{{ route }}</option>
                {% endif %}
              </select>
            </div>
          </div>
\t\t\t\t\t<div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\" for=\"input-key\">{{ entry_key }}</label>
            <div class=\"col-sm-10\">
              <select name=\"key\" id=\"input-key\" class=\"form-control\">
                {% if key %}
                <option value=\"{{ key }}\" selected=\"selected\">{{ key }}</option>
                {% endif %}
              </select>
              <input type=\"text\" name=\"key\" value=\"{{ key }}\" placeholder=\"{{ entry_key }}\" class=\"form-control\" />
              {% if error_key %}
              <div class=\"text-danger\">{{ error_key }}</div>
              {% endif %}
            </div>
          </div>
\t\t\t\t\t\t<div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\" for=\"input-default\">{{ entry_default }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"default\" placeholder=\"{{ entry_default }}\" rows=\"5\" id=\"input-default\" class=\"form-control\" disabled=\"disabled\">{% if default %}{{ default }}{% endif %}</textarea>
            </div>
          </div>
\t\t\t\t\t\t <div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\" for=\"input-value\">{{ entry_value }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"value\" rows=\"5\" placeholder=\"{{ entry_value }}\" id=\"input-value\" class=\"form-control\">{{ value }}</textarea>
            </div>
          </div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<!-- Card Body -->
\t\t\t</div>
\t\t</div>
\t</main>
    <script type=\"text/javascript\"><!--
    {% if key %}
    \$('select[name=\"store_id\"]').prop('disabled', true);
    \$('select[name=\"language_id\"]').prop('disabled', true);
    \$('select[name=\"route\"]').prop('disabled', true);
    \$('select[name=\"key\"]').prop('disabled', true);
    \$('input[name=\"key\"]').prop('disabled', true);
    {% else %}
    \$('select[name=\"language_id\"]').on('change', function() {
      \$.ajax({
        url: '{{ path }}&language_id=' + \$('select[name=\"language_id\"]').val(),
        dataType: 'json',
        beforeSend: function() {
          \$('select[name=\"route\"]').html('');
          \$('select[name=\"key\"]').html('');
          \$('input[name=\"key\"]').val('');
          \$('textarea[name=\"default\"]').val('');
          \$('select[name=\"store_id\"]').prop('disabled', true);
          \$('select[name=\"language_id\"]').prop('disabled', true);
          \$('select[name=\"route\"]').prop('disabled', true);
          \$('select[name=\"key\"]').prop('disabled', true);
          \$('input[name=\"key\"]').prop('disabled', true);
          \$('textarea[name=\"value\"]').prop('disabled', true);
        },
        complete: function() {
          \$('select[name=\"store_id\"]').prop('disabled', false);
          \$('select[name=\"language_id\"]').prop('disabled', false);
          \$('select[name=\"route\"]').prop('disabled', false);
        },
        success: function(json) {
          html = '<option value=\"\"></option>';

          if (json) {
            for (i = 0; i < json.length; i++) {
              if (i == 0) {
                html += '<option value=\"' + json[i] + '\" selected=\"selected\">' + json[i] + '</option>';
              } else {
                html += '<option value=\"' + json[i] + '\">' + json[i] + '</option>';
              }
            }
          }

          \$('select[name=\"route\"]').html(html);

          \$('select[name=\"route\"]').trigger('change');
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

    var translation = [];

    \$('select[name=\"route\"]').on('change', function() {
      \$.ajax({
        url: 'index.php/design/translation/translation?user_token={{ user_token }}&language_id=' + \$('select[name=\"language_id\"]').val() + '&path=' + \$('select[name=\"route\"]').val(),
        dataType: 'json',
        {% if not key %}
        beforeSend: function() {
          \$('select[name=\"key\"]').html('');
          \$('input[name=\"key\"]').val('');
          \$('textarea[name=\"default\"]').val('');
          \$('textarea[name=\"value\"]').val('');
          \$('select[name=\"store_id\"]').prop('disabled', true);
          \$('select[name=\"language_id\"]').prop('disabled', true);
          \$('select[name=\"route\"]').prop('disabled', true);
          \$('select[name=\"key\"]').prop('disabled', true);
          \$('textarea[name=\"value\"]').prop('disabled', true);
        },
        complete: function() {
          \$('select[name=\"store_id\"]').prop('disabled', false);
          \$('select[name=\"language_id\"]').prop('disabled', false);
          \$('select[name=\"route\"]').prop('disabled', false);
          \$('select[name=\"key\"]').prop('disabled', false);
          \$('textarea[name=\"value\"]').prop('disabled', false);
        },
        {% endif %}
        success: function(json) {
          translation = [];

          html = '<option value=\"\"></option>';

          if (json) {
            for (i = 0; i < json.length; i++) {
              translation[json[i]['key']] = json[i]['value'];

              if (i == 0) {
                html += '<option value=\"' + json[i]['key'] + '\" selected=\"selected\">' + json[i]['key'] + '</option>';
              } else {
                html += '<option value=\"' + json[i]['key'] + '\">' + json[i]['key'] + '</option>';
              }
            }
          }

          \$('select[name=\"key\"]').html(html);

          \$('select[name=\"key\"]').trigger('change');
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

    \$('select[name=\"language_id\"]').trigger('change');

    \$('select[name=\"key\"]').on('change', function() {
      if (\$(this).val()) {
        \$('textarea[name=\"default\"]').val(translation[\$('select[name=\"key\"]').val()]);
        \$('input[name=\"key\"]').val(\$('select[name=\"key\"]').val());

        \$('input[name=\"key\"]').prop('disabled', true);
      } else {
        \$('textarea[name=\"default\"]').val('');

        \$('input[name=\"key\"]').prop('disabled', false);
      }
    });
    {% endif %}
  //--></script> 
{{ footer }}", "Design/translation_form.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Design/translation_form.twig");
    }
}
