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

/* Setting/event.twig */
class __TwigTemplate_5b5d9c20259547bf25daecdc5894e737 extends Template
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
                    <div class=\"float-right\">
                    </div>
                    <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                    <ul class=\"breadcrumb\">
                        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "                        <li class=\"breadcrumb-item\">
                            <a href=\"";
            // line 12
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "                    </ul>
                </div>
            </div> ";
        // line 18
        yield "            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <i class=\"fas fa-th-list\"></i>
                    ";
        // line 21
        yield ($context["text_list"] ?? null);
        yield "
                </div>
                <div class=\"card-body\">
                    <form id=\"form-event\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
                    \t<input type=\"hidden\" name=\"";
        // line 25
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\" />
                        <div class=\"table-responsive\">
                            <table id=\"table-list\" class=\"table table-bordered\" data-order='[[ 2, \"desc\" ]]'>
                                <thead>
                                    <tr>
                                        <th>";
        // line 30
        yield ($context["column_code"] ?? null);
        yield "</th>
                                        <th>";
        // line 31
        yield ($context["column_trigger"] ?? null);
        yield "</th>
                                        <th>";
        // line 32
        yield ($context["column_group"] ?? null);
        yield "</th>
                                        <th>";
        // line 33
        yield ($context["column_status"] ?? null);
        yield "</th>
                                        <th>";
        // line 34
        yield ($context["column_priority"] ?? null);
        yield "</th>
                                        <th class=\"text-center no-sort\">";
        // line 35
        yield ($context["column_action"] ?? null);
        yield "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 40
            yield "                                    <tr>
                                        <td>";
            // line 41
            yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "code", [], "any", false, false, false, 41);
            yield "</td>
                                        <td>";
            // line 42
            yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "trigger", [], "any", false, false, false, 42);
            yield " <span class=\"text-primary\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\"
                                                title=\"";
            // line 43
            yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 43);
            yield "\"> <i class=\"fas fa-info-circle\"></i>
                                            </span>
                                        </td>
                                        <td>";
            // line 46
            yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "group", [], "any", false, false, false, 46);
            yield "</td>
                                        <td>";
            // line 47
            yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 47);
            yield "</td>
                                        <td>";
            // line 48
            yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "priority", [], "any", false, false, false, 48);
            yield "</td>
                                        <td class=\"text-center\">
                                            ";
            // line 50
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "enabled", [], "any", false, false, false, 50)) {
                // line 51
                yield "                                            <button type=\"button\" onclick=\"update(";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 51);
                yield ", '0')\" class=\"btn btn-danger btn-sm\"
                                                data-toggle-tooltip=\"tooltip\" data-placement=\"top\"
                                                title=\"";
                // line 53
                yield ($context["button_disable"] ?? null);
                yield "\" id=\"event";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 53);
                yield "\"><i class=\"fas fa-minus-circle\"></i></a>
                                            ";
            } else {
                // line 55
                yield "                                            <button type=\"button\" onclick=\"update(";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 55);
                yield ", '1')\" class=\"btn btn-success btn-sm\"
                                                data-toggle-tooltip=\"tooltip\" data-placement=\"top\"
                                                title=\"";
                // line 57
                yield ($context["button_enable"] ?? null);
                yield "\" id=\"event";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 57);
                yield "\"><i class=\"fas fa-plus-circle\"></i></a>
                                            ";
            }
            // line 59
            yield "                                        </td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<script type=\"text/javascript\">
        function update(event_id, status) {
            Swal.fire({
                title: '";
        // line 73
        yield ($context["text_confirm"] ?? null);
        yield "',
                icon: \"warning\",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
            }).then(result => {
                if (result.isConfirmed) {
                    \$.ajax({
                        url: \"";
        // line 80
        yield ($context["disable"] ?? null);
        yield "\",
                        method: \"POST\",
                        dataType: \"json\",
                        data: {
                            'event_id': event_id, 
                            'status': status,
                            '";
        // line 86
        yield csrf_token();
        yield "': '";
        yield csrf_hash();
        yield "'
                        },
                        headers: {
                            \"X-Requested-With\": \"XMLHttpRequest\",
                            \"Content-Type\": \"application/x-www-form-urlencoded; charset=UTF-8\",
                        },
                        beforeSend: function () {
                            \$('#event' + event_id).html('<i class=\"fas fa-spinner fa-spin\"></i>');
                        },
                        complete: function () {
                            \$('#event' + event_id).html('<i class=\"fas fa-plus-circle\"></i>');
                        },
                        success: function (json) {
                            if (json['success']) {
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

                            if (json['error_warning']) {
                                swal.fire(\"Error!\", json['error_warning'], \"error\");
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            swal.fire(\"Error!\", xhr.statusText, \"error\");
                        }
                    });
                }
            });
        }
</script>
";
        // line 125
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Setting/event.twig";
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
        return array (  276 => 125,  232 => 86,  223 => 80,  213 => 73,  200 => 62,  192 => 59,  185 => 57,  179 => 55,  172 => 53,  166 => 51,  164 => 50,  159 => 48,  155 => 47,  151 => 46,  145 => 43,  141 => 42,  137 => 41,  134 => 40,  130 => 39,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  93 => 25,  86 => 21,  81 => 18,  77 => 15,  66 => 12,  63 => 11,  59 => 10,  54 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }} {{ column_left }}
\t<main id=\"content\">
        <div class=\"container-fluid px-4\">
            <div class=\"page-header\">
                <div class=\"container-fluid\">
                    <div class=\"float-right\">
                    </div>
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
                    <form id=\"form-event\" accept-charset=\"utf-8\" encrypt=\"multipart/form-data\">
                    \t<input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\" />
                        <div class=\"table-responsive\">
                            <table id=\"table-list\" class=\"table table-bordered\" data-order='[[ 2, \"desc\" ]]'>
                                <thead>
                                    <tr>
                                        <th>{{ column_code }}</th>
                                        <th>{{ column_trigger }}</th>
                                        <th>{{ column_group }}</th>
                                        <th>{{ column_status }}</th>
                                        <th>{{ column_priority }}</th>
                                        <th class=\"text-center no-sort\">{{ column_action }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for event in events %}
                                    <tr>
                                        <td>{{ event.code }}</td>
                                        <td>{{ event.trigger }} <span class=\"text-primary\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\"
                                                title=\"{{ event.description }}\"> <i class=\"fas fa-info-circle\"></i>
                                            </span>
                                        </td>
                                        <td>{{ event.group }}</td>
                                        <td>{{ event.status }}</td>
                                        <td>{{ event.priority }}</td>
                                        <td class=\"text-center\">
                                            {% if event.enabled %}
                                            <button type=\"button\" onclick=\"update({{ event.event_id }}, '0')\" class=\"btn btn-danger btn-sm\"
                                                data-toggle-tooltip=\"tooltip\" data-placement=\"top\"
                                                title=\"{{ button_disable }}\" id=\"event{{ event.event_id }}\"><i class=\"fas fa-minus-circle\"></i></a>
                                            {% else %}
                                            <button type=\"button\" onclick=\"update({{ event.event_id }}, '1')\" class=\"btn btn-success btn-sm\"
                                                data-toggle-tooltip=\"tooltip\" data-placement=\"top\"
                                                title=\"{{ button_enable }}\" id=\"event{{ event.event_id }}\"><i class=\"fas fa-plus-circle\"></i></a>
                                            {% endif %}
                                        </td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<script type=\"text/javascript\">
        function update(event_id, status) {
            Swal.fire({
                title: '{{ text_confirm }}',
                icon: \"warning\",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
            }).then(result => {
                if (result.isConfirmed) {
                    \$.ajax({
                        url: \"{{ disable }}\",
                        method: \"POST\",
                        dataType: \"json\",
                        data: {
                            'event_id': event_id, 
                            'status': status,
                            '{{ csrf_token() }}': '{{ csrf_hash() }}'
                        },
                        headers: {
                            \"X-Requested-With\": \"XMLHttpRequest\",
                            \"Content-Type\": \"application/x-www-form-urlencoded; charset=UTF-8\",
                        },
                        beforeSend: function () {
                            \$('#event' + event_id).html('<i class=\"fas fa-spinner fa-spin\"></i>');
                        },
                        complete: function () {
                            \$('#event' + event_id).html('<i class=\"fas fa-plus-circle\"></i>');
                        },
                        success: function (json) {
                            if (json['success']) {
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

                            if (json['error_warning']) {
                                swal.fire(\"Error!\", json['error_warning'], \"error\");
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            swal.fire(\"Error!\", xhr.statusText, \"error\");
                        }
                    });
                }
            });
        }
</script>
{{ footer }}", "Setting/event.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Setting/event.twig");
    }
}
