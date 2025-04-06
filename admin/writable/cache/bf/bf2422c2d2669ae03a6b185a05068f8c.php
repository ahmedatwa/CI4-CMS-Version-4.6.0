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

/* Tool/log.twig */
class __TwigTemplate_240a745aff3032b9602df29d4c79793a extends Template
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
";
        // line 2
        yield ($context["column_left"] ?? null);
        yield "
    <main id=\"content\">
        <div class=\"container-fluid px-4\">
            <div class=\"page-header\">
                <div class=\"container-fluid\">
                    <div class=\"float-right\">
                        <button type=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
        // line 8
        yield ($context["button_delete"] ?? null);
        yield "\"
                            class=\"btn btn-danger\" id=\"button-delete\" form=\"form-log\"><i class=\"far fa-trash-alt\"></i>
                        </button>
                    </div>
                    <h1>";
        // line 12
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                    <ul class=\"breadcrumb\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            yield "                        <li class=\"breadcrumb-item\">
                            <a href=\"";
            // line 16
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            yield "</a>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "                    </ul>
                </div>
            </div>
            ";
        // line 23
        yield "            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <i class=\"fas fa-th-list\"></i>
                    ";
        // line 26
        yield ($context["text_list"] ?? null);
        yield "
                </div>
                <div class=\"card-body\">
                    <form enctype=\"multipart/form-data\" id=\"form-log\">
                        <input type=\"hidden\" name=\"";
        // line 30
        yield csrf_token();
        yield "\" value=\"";
        yield csrf_hash();
        yield "\" />
                        <textarea wrap=\"off\" rows=\"20\" readonly class=\"form-control\">";
        // line 31
        yield ($context["log"] ?? null);
        yield "</textarea>
                    </form>
                </div>
            </div>
        </div>
    </main>
<script type=\"text/javascript\">
\$('#button-delete').on('click', function (e) {
    e.preventDefault();
    swal.fire({
            icon: 'question',
            title: '";
        // line 42
        yield ($context["text_confirm"] ?? null);
        yield "',
            text: '";
        // line 43
        yield ($context["text_no_recover"] ?? null);
        yield "',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            confirmButtonColor: '#3085d6',
        }).then((result) => {
            if (result.isConfirmed) {
                \$.ajax({
                    url: '";
        // line 51
        yield ($context["delete"] ?? null);
        yield "',
                    method: 'post',
                    dataType: 'json',
                    data: \$(\"input[type=\\'hidden\\']\"),
                    success: function (json) {
                        console.log(json);
                        
                        if (json[\"error_warning\"]) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: json['error_warning'],
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                        if (json['success']) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: json['success'],
                                showConfirmButton: false,
                                timer: 1500
                            }).then((result) => {
                                if(result.isDismissed) {
                                    location = json['redirect'];
                                }
                            })
                        }
                    }, // success
                    error: function (xhr, ajaxOptions, thrownError) {
                        swal(\"Error!\", thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" +
                            xhr.responseText, \"error\");
                    }
                });    
            }   
    });
});
</script>
";
        // line 90
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Tool/log.twig";
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
        return array (  179 => 90,  137 => 51,  126 => 43,  122 => 42,  108 => 31,  102 => 30,  95 => 26,  90 => 23,  85 => 19,  74 => 16,  71 => 15,  67 => 14,  62 => 12,  55 => 8,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
{{ column_left }}
    <main id=\"content\">
        <div class=\"container-fluid px-4\">
            <div class=\"page-header\">
                <div class=\"container-fluid\">
                    <div class=\"float-right\">
                        <button type=\"button\" data-toggle-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ button_delete }}\"
                            class=\"btn btn-danger\" id=\"button-delete\" form=\"form-log\"><i class=\"far fa-trash-alt\"></i>
                        </button>
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
            </div>
            {# </ page header #}
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <i class=\"fas fa-th-list\"></i>
                    {{ text_list }}
                </div>
                <div class=\"card-body\">
                    <form enctype=\"multipart/form-data\" id=\"form-log\">
                        <input type=\"hidden\" name=\"{{ csrf_token() }}\" value=\"{{ csrf_hash() }}\" />
                        <textarea wrap=\"off\" rows=\"20\" readonly class=\"form-control\">{{ log }}</textarea>
                    </form>
                </div>
            </div>
        </div>
    </main>
<script type=\"text/javascript\">
\$('#button-delete').on('click', function (e) {
    e.preventDefault();
    swal.fire({
            icon: 'question',
            title: '{{ text_confirm }}',
            text: '{{ text_no_recover }}',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            confirmButtonColor: '#3085d6',
        }).then((result) => {
            if (result.isConfirmed) {
                \$.ajax({
                    url: '{{ delete }}',
                    method: 'post',
                    dataType: 'json',
                    data: \$(\"input[type=\\'hidden\\']\"),
                    success: function (json) {
                        console.log(json);
                        
                        if (json[\"error_warning\"]) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: json['error_warning'],
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                        if (json['success']) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: json['success'],
                                showConfirmButton: false,
                                timer: 1500
                            }).then((result) => {
                                if(result.isDismissed) {
                                    location = json['redirect'];
                                }
                            })
                        }
                    }, // success
                    error: function (xhr, ajaxOptions, thrownError) {
                        swal(\"Error!\", thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" +
                            xhr.responseText, \"error\");
                    }
                });    
            }   
    });
});
</script>
{{ footer }}", "Tool/log.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Tool/log.twig");
    }
}
