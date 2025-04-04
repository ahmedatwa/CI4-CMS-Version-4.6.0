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

/* default/information/information.twig */
class __TwigTemplate_3213ceb1c68c18d7eb6f3970d782d0a3 extends Template
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
<div class=\"jumbotron p-4 p-md-5 rounded shadow-sm jumbotron-image\" data-background-image=\"images/catalog/single-task.jpg\">
\t<div class=\"col-md-6 px-0 header-details \">
\t\t<h3 class=\"display-4 font-italic\">";
        // line 4
        yield ($context["heading_title"] ?? null);
        yield "</h3>
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"";
            // line 9
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            yield "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "\t\t\t</ol>
\t\t</nav>
\t</div>
</div>
<main role=\"main\" class=\"container\">
\t<div class=\"row\">";
        // line 17
        yield ($context["column_left"] ?? null);
        yield "
\t\t";
        // line 18
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["column_left"] ?? null)) > 123) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["column_right"] ?? null)) > 123))) {
            // line 19
            yield "\t\t\t";
            $context["class"] = "col-sm-12 col-md-8";
            // line 20
            yield "\t\t";
        } else {
            // line 21
            yield "\t\t\t";
            $context["class"] = "col-12";
            // line 22
            yield "\t\t";
        }
        // line 23
        yield "\t\t<div class=\"";
        yield ($context["class"] ?? null);
        yield "\">
\t\t\t<h3 class=\"pb-4 mb-4 font-italic border-bottom\">
\t\t\t\t";
        // line 25
        yield ($context["heading_title"] ?? null);
        yield "
\t\t\t</h3>
\t\t\t<section>
\t\t\t\t<p>";
        // line 28
        yield ($context["description"] ?? null);
        yield "</p>
\t\t\t</section>
\t\t</div>
\t\t";
        // line 31
        yield ($context["column_right"] ?? null);
        yield "
\t</div>
</main>
";
        // line 34
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
        return "default/information/information.twig";
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
        return array (  122 => 34,  116 => 31,  110 => 28,  104 => 25,  98 => 23,  95 => 22,  92 => 21,  89 => 20,  86 => 19,  84 => 18,  80 => 17,  73 => 12,  62 => 9,  59 => 8,  55 => 7,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header}}{{ menu }}
<div class=\"jumbotron p-4 p-md-5 rounded shadow-sm jumbotron-image\" data-background-image=\"images/catalog/single-task.jpg\">
\t<div class=\"col-md-6 px-0 header-details \">
\t\t<h3 class=\"display-4 font-italic\">{{ heading_title }}</h3>
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ol>
\t\t</nav>
\t</div>
</div>
<main role=\"main\" class=\"container\">
\t<div class=\"row\">{{ column_left }}
\t\t{% if column_left|length > 123 or column_right|length > 123 %}
\t\t\t{% set class = 'col-sm-12 col-md-8' %}
\t\t{% else %}
\t\t\t{% set class = 'col-12' %}
\t\t{% endif %}
\t\t<div class=\"{{ class }}\">
\t\t\t<h3 class=\"pb-4 mb-4 font-italic border-bottom\">
\t\t\t\t{{ heading_title }}
\t\t\t</h3>
\t\t\t<section>
\t\t\t\t<p>{{ description }}</p>
\t\t\t</section>
\t\t</div>
\t\t{{ column_right }}
\t</div>
</main>
{{ footer }}
", "default/information/information.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/default/information/information.twig");
    }
}
