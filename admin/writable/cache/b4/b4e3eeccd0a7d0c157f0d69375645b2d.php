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

/* Common/header.twig */
class __TwigTemplate_cc0a69040d7a4053fac9a879ad326bbc extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<meta name=\"description\" content=\"\"/>
\t\t<meta name=\"author\" content=\"A0twa\"/>
\t\t<title>";
        // line 9
        yield ($context["title"] ?? null);
        yield "</title>
\t\t<base href=\"";
        // line 10
        yield ($context["base"] ?? null);
        yield "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/sweetalert2/sweetalert2.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/fontawesome-free/css/all.min.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/bootstrap/css/bootstrap.min.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/gijgo/css/gijgo.min.css\"/>
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 17
            yield "\t\t<link rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 17);
            yield "\" type=\"text/css\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 17);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 17);
            yield "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet/styles.css\"/>
\t\t";
        // line 21
        yield "\t\t<script type=\"text/javascript\" src=\"vendor/jquery/jquery.js\"></script>
\t\t<script type=\"text/javascript\" src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"vendor/sweetalert2/sweetalert2.min.js\"></script>
\t\t";
        // line 25
        yield "\t\t<script type=\"text/javascript\" src=\"vendor/DataTables/DataTables-1.10.25/js/jquery.dataTables.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"vendor/DataTables/DataTables-1.10.25/js/dataTables.bootstrap4.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"vendor/DataTables/plugins/dataTables.conditionalPaging.js\"></script>
\t\t<script type=\"text/javascript\" src=\"javascript/datatables.js\"></script>
\t\t<script type=\"text/javascript\" src=\"vendor/gijgo/js/gijgo.min.js\"></script>
\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            yield "\t\t\t<script type=\"text/javascript\" src=\"";
            yield $context["script"];
            yield "\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "\t\t<script type=\"text/javascript\" src=\"javascript/common.js\"></script>
\t</head>
\t<body>
\t\t<div id=\"container\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg\" id=\"header-nav\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<a id=\"header-logo\" class=\"navbar-header\" href=\"";
        // line 39
        yield ($context["home"] ?? null);
        yield "\">
\t\t\t\t\t\t\t<img src=\"images/logo.svg\" alt=\"";
        // line 40
        yield ($context["configName"] ?? null);
        yield "\" title=\"";
        yield ($context["configName"] ?? null);
        yield "\" width=\"180\" height=\"35\" class=\"my-auto\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button type=\"button\" id=\"button-menu\" class=\"btn btn-white\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t\t<span>Toggle Sidebar</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t";
        // line 47
        if (($context["logged"] ?? null)) {
            // line 48
            yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"mainDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 51
            yield ($context["image"] ?? null);
            yield "\" alt=\"";
            yield Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), ((($context["firstname"] ?? null) . " ") . ($context["lastname"] ?? null)));
            yield "\" title=\"";
            yield ($context["username"] ?? null);
            yield "\" class=\"rounded\" width=\"45\" height=\"45\" id=\"user-profile\">
\t\t\t\t\t\t\t\t\t\t";
            // line 52
            yield Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), ((($context["firstname"] ?? null) . " ") . ($context["lastname"] ?? null)));
            yield "
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-down\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"mainDropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 56
            yield ($context["profile"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 58
            yield ($context["text_profile"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 60
            yield ($context["site_url"] ?? null);
            yield "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 62
            yield ($context["text_site"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 63
            yield ($context["setting"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 65
            yield ($context["text_setting"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 70
            yield ($context["logout"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 72
            yield ($context["text_logout"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 75
        yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t <span class=\"rounded-circle p-2 mb-2 bg-secondary text-white mx-auto\">";
        // line 77
        yield ($context["locale"] ?? null);
        yield "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Common/header.twig";
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
        return array (  203 => 77,  199 => 75,  193 => 72,  188 => 70,  180 => 65,  175 => 63,  171 => 62,  166 => 60,  161 => 58,  156 => 56,  149 => 52,  141 => 51,  136 => 48,  134 => 47,  122 => 40,  118 => 39,  110 => 33,  101 => 31,  97 => 30,  90 => 25,  85 => 21,  82 => 19,  69 => 17,  65 => 16,  56 => 10,  52 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<meta name=\"description\" content=\"\"/>
\t\t<meta name=\"author\" content=\"A0twa\"/>
\t\t<title>{{ title }}</title>
\t\t<base href=\"{{ base }}\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/sweetalert2/sweetalert2.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/fontawesome-free/css/all.min.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/bootstrap/css/bootstrap.min.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/gijgo/css/gijgo.min.css\"/>
\t\t{% for style in styles %}
\t\t<link rel=\"{{ style.rel }}\" type=\"text/css\" href=\"{{ style.href }}\" media=\"{{ style.media }}\"/>
\t\t{% endfor %}
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet/styles.css\"/>
\t\t{# Scripts #}
\t\t<script type=\"text/javascript\" src=\"vendor/jquery/jquery.js\"></script>
\t\t<script type=\"text/javascript\" src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"vendor/sweetalert2/sweetalert2.min.js\"></script>
\t\t{# DataTables #}
\t\t<script type=\"text/javascript\" src=\"vendor/DataTables/DataTables-1.10.25/js/jquery.dataTables.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"vendor/DataTables/DataTables-1.10.25/js/dataTables.bootstrap4.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"vendor/DataTables/plugins/dataTables.conditionalPaging.js\"></script>
\t\t<script type=\"text/javascript\" src=\"javascript/datatables.js\"></script>
\t\t<script type=\"text/javascript\" src=\"vendor/gijgo/js/gijgo.min.js\"></script>
\t\t{% for script in scripts %}
\t\t\t<script type=\"text/javascript\" src=\"{{ script }}\"></script>
\t\t{% endfor %}
\t\t<script type=\"text/javascript\" src=\"javascript/common.js\"></script>
\t</head>
\t<body>
\t\t<div id=\"container\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg\" id=\"header-nav\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<a id=\"header-logo\" class=\"navbar-header\" href=\"{{ home }}\">
\t\t\t\t\t\t\t<img src=\"images/logo.svg\" alt=\"{{ configName }}\" title=\"{{ configName }}\" width=\"180\" height=\"35\" class=\"my-auto\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button type=\"button\" id=\"button-menu\" class=\"btn btn-white\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t\t<span>Toggle Sidebar</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t{% if logged %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"mainDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ image }}\" alt=\"{{ \"#{firstname} #{lastname}\" | title }}\" title=\"{{ username }}\" class=\"rounded\" width=\"45\" height=\"45\" id=\"user-profile\">
\t\t\t\t\t\t\t\t\t\t{{ \"#{firstname} #{lastname}\" | title }}
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-down\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"mainDropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ profile }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t{{ text_profile }}</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ site_url }}\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t{{ text_site }}</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ setting }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t\t{{ text_setting }}</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ logout }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt\"></i>
\t\t\t\t\t\t\t\t\t{{ text_logout }}</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t <span class=\"rounded-circle p-2 mb-2 bg-secondary text-white mx-auto\">{{ locale }}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t
", "Common/header.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Common/header.twig");
    }
}
