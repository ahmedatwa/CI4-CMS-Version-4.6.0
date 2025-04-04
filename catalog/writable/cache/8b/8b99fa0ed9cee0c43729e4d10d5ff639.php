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

/* default/common/header.twig */
class __TwigTemplate_396894bea2bf3b838f32bc8b7f6a78a8 extends Template
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
        yield "<!doctype html>
<html lang=\"";
        // line 2
        yield ($context["lang"] ?? null);
        yield "\" direction=\"";
        yield ($context["direction"] ?? null);
        yield "\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"author\" content=\"";
        // line 6
        yield ($context["author"] ?? null);
        yield "\">
\t\t<base href=\"";
        // line 7
        yield ($context["base"] ?? null);
        yield "\"/>
\t\t<link rel=\"icon\" href=\"";
        // line 8
        yield ($context["ico"] ?? null);
        yield "\">
\t\t<title>";
        // line 9
        yield ($context["title"] ?? null);
        yield "</title>
\t\t";
        // line 10
        if (($context["description"] ?? null)) {
            // line 11
            yield "\t\t\t<meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
\t\t";
        }
        // line 13
        yield "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 14
            yield "\t\t\t<meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
\t\t";
        }
        // line 16
        yield "\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"";
        // line 17
        yield ($context["bootstrap_css"] ?? null);
        yield "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 18
        yield ($context["stylesheet_css"] ?? null);
        yield "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 19
        yield ($context["fontawesome_css"] ?? null);
        yield "\" rel=\"stylesheet\">
\t\t<script type=\"text/javascript\" src=\"default/javascript/jquery-3.6.0.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"default/javascript/parallax.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"default/javascript/common.js\"></script>

\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 25
            yield "\t\t\t<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 25);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 25);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 25);
            yield "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 28
            yield "\t\t\t<script src=\"";
            yield $context["script"];
            yield "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 31
            yield "\t\t\t<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 31);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 31);
            yield "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 34
            yield "\t\t\t";
            yield $context["analytic"];
            yield "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "\t</head>
\t<body>
\t\t";
        // line 38
        if (($context["global_alert"] ?? null)) {
            // line 39
            yield "\t\t\t<div class=\"alert alert-warning text-center border rounded-0 mb-0\" role=\"alert\">
\t\t\t\t<i class=\"fas fa-exclamation-triangle\"></i>
\t\t\t\t";
            // line 41
            yield ($context["global_alert"] ?? null);
            yield "</div>
\t\t";
        }
        // line 43
        yield "\t\t<header>
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark py-2 px-md-4 shadow-sm\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 45
        yield ($context["home"] ?? null);
        yield "\">
\t\t\t\t\t<img src=\"";
        // line 46
        yield ($context["logo"] ?? null);
        yield "\" alt=\"";
        yield ($context["config_name"] ?? null);
        yield "\"></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse pt-2\" id=\"navbarNavDropdown\">
\t\t\t\t\t<ul class=\"navbar-nav w-100\">
\t\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 53
            yield "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 54
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 54);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 54);
            yield "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "\t\t\t\t\t\t";
        if ( !($context["logged"] ?? null)) {
            // line 58
            yield "\t\t\t\t\t\t\t<li class=\"nav-item ml-auto\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 59
            yield ($context["login"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 61
            yield ($context["text_login"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 64
            yield ($context["register"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 66
            yield ($context["text_register"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 69
        yield "\t\t\t\t\t\t";
        if (($context["logged"] ?? null)) {
            // line 70
            yield "\t\t\t\t\t\t\t<li class=\"nav-item dropdown ml-auto\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdownMenu\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-circle\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 73
            yield ($context["username"] ?? null);
            yield "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdownMenu\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 76
            yield ($context["dashboard"] ?? null);
            yield "\">";
            yield ($context["text_dashboard"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 77
            yield ($context["profile"] ?? null);
            yield "\">";
            yield ($context["text_profile"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 79
            yield ($context["logout"] ?? null);
            yield "\">";
            yield ($context["text_logout"] ?? null);
            yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 83
        yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/common/header.twig";
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
        return array (  283 => 83,  274 => 79,  267 => 77,  261 => 76,  255 => 73,  250 => 70,  247 => 69,  241 => 66,  236 => 64,  230 => 61,  225 => 59,  222 => 58,  219 => 57,  208 => 54,  205 => 53,  201 => 52,  190 => 46,  186 => 45,  182 => 43,  177 => 41,  173 => 39,  171 => 38,  167 => 36,  158 => 34,  153 => 33,  142 => 31,  137 => 30,  128 => 28,  123 => 27,  110 => 25,  106 => 24,  98 => 19,  94 => 18,  90 => 17,  87 => 16,  81 => 14,  78 => 13,  72 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"{{ lang }}\" direction=\"{{ direction }}\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"author\" content=\"{{ author }}\">
\t\t<base href=\"{{ base }}\"/>
\t\t<link rel=\"icon\" href=\"{{ ico }}\">
\t\t<title>{{ title }}</title>
\t\t{% if description %}
\t\t\t<meta name=\"description\" content=\"{{ description }}\"/>
\t\t{% endif %}
\t\t{% if keywords %}
\t\t\t<meta name=\"keywords\" content=\"{{ keywords }}\"/>
\t\t{% endif %}
\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"{{ bootstrap_css }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ stylesheet_css }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ fontawesome_css }}\" rel=\"stylesheet\">
\t\t<script type=\"text/javascript\" src=\"default/javascript/jquery-3.6.0.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"default/javascript/parallax.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"default/javascript/common.js\"></script>

\t\t{% for style in styles %}
\t\t\t<link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
\t\t{% endfor %}
\t\t{% for script in scripts %}
\t\t\t<script src=\"{{ script }}\" type=\"text/javascript\"></script>
\t\t{% endfor %}
\t\t{% for link in links %}
\t\t\t<link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
\t\t{% endfor %}
\t\t{% for analytic in analytics %}
\t\t\t{{ analytic }}
\t\t{% endfor %}
\t</head>
\t<body>
\t\t{% if global_alert %}
\t\t\t<div class=\"alert alert-warning text-center border rounded-0 mb-0\" role=\"alert\">
\t\t\t\t<i class=\"fas fa-exclamation-triangle\"></i>
\t\t\t\t{{ global_alert }}</div>
\t\t{% endif %}
\t\t<header>
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark py-2 px-md-4 shadow-sm\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ home }}\">
\t\t\t\t\t<img src=\"{{ logo }}\" alt=\"{{ config_name }}\"></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse pt-2\" id=\"navbarNavDropdown\">
\t\t\t\t\t<ul class=\"navbar-nav w-100\">
\t\t\t\t\t\t{% for information in informations %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ information.href }}\">{{ information.title }}</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% if not logged %}
\t\t\t\t\t\t\t<li class=\"nav-item ml-auto\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ login }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt\"></i>
\t\t\t\t\t\t\t\t\t{{ text_login }}</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ register }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt\"></i>
\t\t\t\t\t\t\t\t\t{{ text_register }}</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if logged %}
\t\t\t\t\t\t\t<li class=\"nav-item dropdown ml-auto\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdownMenu\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-circle\"></i>
\t\t\t\t\t\t\t\t\t{{ username }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdownMenu\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ dashboard }}\">{{ text_dashboard }}</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ profile }}\">{{ text_profile }}</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ logout }}\">{{ text_logout }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>

", "default/common/header.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/default/common/header.twig");
    }
}
