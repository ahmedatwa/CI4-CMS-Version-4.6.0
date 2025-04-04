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

/* Setting/module.twig */
class __TwigTemplate_ab290cd36504cee7df12742695d893ba extends Template
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
    <div class=\"container-fluid px-4\">
      <div class=\"page-header\">
        <div class=\"container-fluid\">
          <h1>";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <ul class=\"breadcrumb\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "            <li class=\"breadcrumb-item\">
              <a href=\"";
            // line 10
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            yield "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "          </ul>
        </div>
      </div> ";
        // line 16
        yield "      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <i class=\"fas fa-th-list\"></i>
          ";
        // line 19
        yield ($context["text_list"] ?? null);
        yield "
        </div>
        <div class=\"card-body\">
          <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 22
        yield ($context["text_layout"] ?? null);
        yield "</div>
          <div id=\"module-wrapper\">
          <table class=\"table table-bordered table-striped\" id=\"module\">
            <thead>
              <tr>
                <td class=\"text-left\" width=\"70%\">";
        // line 27
        yield ($context["column_name"] ?? null);
        yield "</td>
                <td class=\"text-left\">";
        // line 28
        yield ($context["column_status"] ?? null);
        yield "</td>
                <td class=\"text-right\">";
        // line 29
        yield ($context["column_action"] ?? null);
        yield "</td>
              </tr>
            </thead>
            <tbody>
              ";
        // line 33
        if (($context["extensions"] ?? null)) {
            // line 34
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 35
                yield "              <tr>
                <td><b>";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 36);
                yield "</b></td>
                <td>";
                // line 37
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 37);
                yield "</td>
                <td class=\"text-right\">";
                // line 38
                if (CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 38)) {
                    // line 39
                    yield "                  ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 39)) {
                        yield " <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 39);
                        yield "\" data-toggle-tooltip=\"tooltip\"
                    title=\"";
                        // line 40
                        yield ($context["button_add"] ?? null);
                        yield "\" class=\"btn btn-primary btn-sm btn-add\"><i class=\"fa fa-plus-circle\"></i></a> ";
                    } else {
                        yield " <a
                    href=\"";
                        // line 41
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 41);
                        yield "\" data-toggle-tooltip=\"tooltip\" title=\"";
                        yield ($context["button_edit"] ?? null);
                        yield "\"
                    class=\"btn btn-primary btn-sm\"><i class=\"far fa-edit\"></i></a> ";
                    }
                    // line 43
                    yield "                  ";
                } else {
                    // line 44
                    yield "                  <button type=\"button\" class=\"btn btn-primary btn-sm\" disabled=\"disabled\"><i
                      class=\"far fa-edit\"></i></button>
                  ";
                }
                // line 47
                yield "                  ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 47)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 47);
                    yield "\" data-toggle-tooltip=\"tooltip\"
                    title=\"";
                    // line 48
                    yield ($context["button_install"] ?? null);
                    yield "\" class=\"btn btn-success btn-sm btn-install\"><i class=\"fas fa-plus-circle\"></i></a>
                  ";
                } else {
                    // line 49
                    yield " <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 49);
                    yield "\" data-toggle-tooltip=\"tooltip\" title=\"";
                    yield ($context["button_uninstall"] ?? null);
                    yield "\"
                    class=\"btn btn-danger btn-sm btn-uninstall\"><i class=\"fas fa-minus-circle\"></i></a>";
                }
                // line 50
                yield "</td>
              </tr>
              ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 52));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 53
                    yield "              <tr>
                <td class=\"text-left\"><p class=\"ml-4\"><i class=\"fas fa-level-up-alt fa-rotate-90\"></i> ";
                    // line 54
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 54);
                    yield "</p></td>
                <td class=\"text-left\">";
                    // line 55
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "status", [], "any", false, false, false, 55);
                    yield "</td>
                <td class=\"text-right\"><a href=\"";
                    // line 56
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "edit", [], "any", false, false, false, 56);
                    yield "\" data-toggle-tooltip=\"tooltip\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\"
                    class=\"btn btn-info btn-sm\"><i class=\"far fa-edit\"></i></a> <a href=\"";
                    // line 57
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "delete", [], "any", false, false, false, 57);
                    yield "\"
                    data-toggle-tooltip=\"tooltip\" title=\"";
                    // line 58
                    yield ($context["button_delete"] ?? null);
                    yield "\" class=\"btn btn-warning btn-sm btn-delete\"><i
                      class=\"fas fa-trash-alt\"></i></a></td>
              </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "              ";
        } else {
            // line 64
            yield "              <tr>
                <td class=\"text-center\" colspan=\"3\">";
            // line 65
            yield ($context["text_no_results"] ?? null);
            yield "</td>
              </tr>
              ";
        }
        // line 68
        yield "            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script type=\"text/javascript\">
  // install
  \$('#module').on('click', '.btn-install', function(e) {
\te.preventDefault();
\tvar element = this;
\tswal.fire({
\t\ttitle: '";
        // line 81
        yield ($context["text_confirm"] ?? null);
        yield "',
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\ticon: 'question',
\t}).then((result) => {
\t\tif (result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\t\turl: \$(element).attr('href'),
\t\t\t\tdataType: \"json\",
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).html('<i class=\"fas fa-spinner fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif (json['success']) {
              Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: json['success'],
                  showConfirmButton: false,
                  timer: 1500
              }).then((result) => {
                  if (result.isDismissed) {
                    location = json['redirect'];
                  }
              });
          }
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
});
// Uninstall
\$('#module').on('click', '.btn-uninstall', function(e) {
\te.preventDefault();
\tvar element = this;
\tswal.fire({
\t\ttitle: '";
        // line 123
        yield ($context["text_confirm"] ?? null);
        yield "',
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\ticon: 'question',
\t}).then(result => {
\t\tif (result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\t\turl: \$(element).attr('href'),
\t\t\t\tdataType: \"json\",
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).html('<i class=\"fas fa-spinner fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif (json['success']) {
              Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: json['success'],
                  showConfirmButton: false,
                  timer: 1500
              }).then((result) => {
                  if (result.isDismissed) {
                    location = json['redirect'];
                  }
              });
          }
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
});
// Delete
\$('#module').on('click', '.btn-delete', function(e) {
\te.preventDefault();
\tvar element = this;
\tswal.fire({
\t\ttitle: '";
        // line 165
        yield ($context["text_confirm"] ?? null);
        yield "',
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\ticon: 'question',
\t}).then(result => {
\t\tif (result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\t\turl: \$(element).attr('href'),
\t\t\t\tdataType: \"json\",
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).html('<i class=\"fas fa-spinner fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif (json['success']) {
              Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: json['success'],
                  showConfirmButton: false,
                  timer: 1500
              }).then((result) => {
                  if (result.isDismissed) {
                    location = json['redirect'];
                  }
              });
          }
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
});
</script>
";
        // line 203
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Setting/module.twig";
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
        return array (  384 => 203,  343 => 165,  298 => 123,  253 => 81,  238 => 68,  232 => 65,  229 => 64,  226 => 63,  220 => 62,  210 => 58,  206 => 57,  200 => 56,  196 => 55,  192 => 54,  189 => 53,  185 => 52,  181 => 50,  173 => 49,  168 => 48,  161 => 47,  156 => 44,  153 => 43,  146 => 41,  140 => 40,  133 => 39,  131 => 38,  127 => 37,  123 => 36,  120 => 35,  115 => 34,  113 => 33,  106 => 29,  102 => 28,  98 => 27,  90 => 22,  84 => 19,  79 => 16,  75 => 13,  64 => 10,  61 => 9,  57 => 8,  52 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }} {{ column_left }}
\t<main id=\"content\">
    <div class=\"container-fluid px-4\">
      <div class=\"page-header\">
        <div class=\"container-fluid\">
          <h1>{{ heading_title }}</h1>
          <ul class=\"breadcrumb\">
            {% for breadcrumb in breadcrumbs %}
            <li class=\"breadcrumb-item\">
              <a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
            </li>
            {% endfor %}
          </ul>
        </div>
      </div> {# </ page header #}
      <div class=\"card mb-4\">
        <div class=\"card-header\">
          <i class=\"fas fa-th-list\"></i>
          {{ text_list }}
        </div>
        <div class=\"card-body\">
          <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> {{ text_layout }}</div>
          <div id=\"module-wrapper\">
          <table class=\"table table-bordered table-striped\" id=\"module\">
            <thead>
              <tr>
                <td class=\"text-left\" width=\"70%\">{{ column_name }}</td>
                <td class=\"text-left\">{{ column_status }}</td>
                <td class=\"text-right\">{{ column_action }}</td>
              </tr>
            </thead>
            <tbody>
              {% if extensions %}
              {% for extension in extensions %}
              <tr>
                <td><b>{{ extension.name }}</b></td>
                <td>{{ extension.status }}</td>
                <td class=\"text-right\">{% if extension.installed %}
                  {% if extension.module %} <a href=\"{{ extension.edit }}\" data-toggle-tooltip=\"tooltip\"
                    title=\"{{ button_add }}\" class=\"btn btn-primary btn-sm btn-add\"><i class=\"fa fa-plus-circle\"></i></a> {% else %} <a
                    href=\"{{ extension.edit }}\" data-toggle-tooltip=\"tooltip\" title=\"{{ button_edit }}\"
                    class=\"btn btn-primary btn-sm\"><i class=\"far fa-edit\"></i></a> {% endif %}
                  {% else %}
                  <button type=\"button\" class=\"btn btn-primary btn-sm\" disabled=\"disabled\"><i
                      class=\"far fa-edit\"></i></button>
                  {% endif %}
                  {% if not extension.installed %}<a href=\"{{ extension.install }}\" data-toggle-tooltip=\"tooltip\"
                    title=\"{{ button_install }}\" class=\"btn btn-success btn-sm btn-install\"><i class=\"fas fa-plus-circle\"></i></a>
                  {% else %} <a href=\"{{ extension.uninstall }}\" data-toggle-tooltip=\"tooltip\" title=\"{{ button_uninstall }}\"
                    class=\"btn btn-danger btn-sm btn-uninstall\"><i class=\"fas fa-minus-circle\"></i></a>{% endif %}</td>
              </tr>
              {% for module in extension.module %}
              <tr>
                <td class=\"text-left\"><p class=\"ml-4\"><i class=\"fas fa-level-up-alt fa-rotate-90\"></i> {{ module.name }}</p></td>
                <td class=\"text-left\">{{ module.status }}</td>
                <td class=\"text-right\"><a href=\"{{ module.edit }}\" data-toggle-tooltip=\"tooltip\" title=\"{{ button_edit }}\"
                    class=\"btn btn-info btn-sm\"><i class=\"far fa-edit\"></i></a> <a href=\"{{ module.delete }}\"
                    data-toggle-tooltip=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-warning btn-sm btn-delete\"><i
                      class=\"fas fa-trash-alt\"></i></a></td>
              </tr>
              {% endfor %}
              {% endfor %}
              {% else %}
              <tr>
                <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
              </tr>
              {% endif %}
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script type=\"text/javascript\">
  // install
  \$('#module').on('click', '.btn-install', function(e) {
\te.preventDefault();
\tvar element = this;
\tswal.fire({
\t\ttitle: '{{ text_confirm }}',
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\ticon: 'question',
\t}).then((result) => {
\t\tif (result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\t\turl: \$(element).attr('href'),
\t\t\t\tdataType: \"json\",
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).html('<i class=\"fas fa-spinner fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif (json['success']) {
              Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: json['success'],
                  showConfirmButton: false,
                  timer: 1500
              }).then((result) => {
                  if (result.isDismissed) {
                    location = json['redirect'];
                  }
              });
          }
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
});
// Uninstall
\$('#module').on('click', '.btn-uninstall', function(e) {
\te.preventDefault();
\tvar element = this;
\tswal.fire({
\t\ttitle: '{{ text_confirm }}',
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\ticon: 'question',
\t}).then(result => {
\t\tif (result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\t\turl: \$(element).attr('href'),
\t\t\t\tdataType: \"json\",
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).html('<i class=\"fas fa-spinner fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif (json['success']) {
              Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: json['success'],
                  showConfirmButton: false,
                  timer: 1500
              }).then((result) => {
                  if (result.isDismissed) {
                    location = json['redirect'];
                  }
              });
          }
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
});
// Delete
\$('#module').on('click', '.btn-delete', function(e) {
\te.preventDefault();
\tvar element = this;
\tswal.fire({
\t\ttitle: '{{ text_confirm }}',
\t\tshowCancelButton: true,
\t\tconfirmButtonColor: '#3085d6',
\t\ticon: 'question',
\t}).then(result => {
\t\tif (result.isConfirmed) {
\t\t\t\$.ajax({
\t\t\t\turl: \$(element).attr('href'),
\t\t\t\tdataType: \"json\",
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).html('<i class=\"fas fa-spinner fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif (json['success']) {
              Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: json['success'],
                  showConfirmButton: false,
                  timer: 1500
              }).then((result) => {
                  if (result.isDismissed) {
                    location = json['redirect'];
                  }
              });
          }
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
});
</script>
{{ footer }}", "Setting/module.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Setting/module.twig");
    }
}
