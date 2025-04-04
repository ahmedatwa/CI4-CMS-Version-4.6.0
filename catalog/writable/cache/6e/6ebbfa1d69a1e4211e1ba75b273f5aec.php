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

/* default/product/category.twig */
class __TwigTemplate_d8298f313f1445d96c3b5cf97ecf20b2 extends Template
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
        yield ($context["menu"] ?? null);
        yield "
<div class=\"jumbotron\">
\t<div class=\"container-fluid\">
\t\t<h2 class=\"display-5\">";
        // line 4
        yield ($context["heading_title"] ?? null);
        yield "</h2>
\t</div>
</div>
<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-12\">
\t\t\t<nav id=\"breadcrumbs\">
\t\t\t\t<ul>
\t\t\t\t\t<?php foreach (\$breadcrumbs as \$breadcrumb) { ?>
\t\t\t\t\t\t<li><a href=\"";
        // line 13
        yield (($_v0 = ($context["breadcrumb"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["href"] ?? null) : null);
        yield "\">";
        yield (($_v1 = ($context["breadcrumb"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["text"] ?? null) : null);
        yield "</a></li>
\t\t\t\t\t<?php } ?>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
</div>
<!-- Page Content -->
<div class=\"container\">
\t<div class=\"row\">

\t\t<div class=\"col-12\">
\t\t\t<div class=\"companies-list\">
\t\t\t\t<?php foreach (\$categories as \$category) { ?>
\t\t\t\t<a href=\"";
        // line 27
        yield (($_v2 = ($context["category"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["href"] ?? null) : null);
        yield "\" class=\"company\">
\t\t\t\t\t<div class=\"company-inner-alignment\">
\t\t\t\t\t\t<span class=\"company-logo\"><i class=\"";
        // line 29
        yield (($_v3 = ($context["category"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["icon"] ?? null) : null);
        yield " fa-5x\"></i></span>
\t\t\t\t\t\t<h4>";
        // line 30
        yield (($_v4 = ($context["category"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["name"] ?? null) : null);
        yield "</h4>
\t\t\t\t\t\t<small>";
        // line 31
        yield (($_v5 = ($context["category"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["description"] ?? null) : null);
        yield "</small>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t<?php } ?>
\t\t\t</div>
\t\t</div>
\t\t<hr />
\t\t<div class=\"col-12 margin-top-40 margin-bottom-25\">
\t\t\t<h3>";
        // line 39
        yield ($context["heading_title"] ?? null);
        yield "</h3>
\t\t\t<div class=\"row\">
\t\t\t <?php foreach (\$categories as \$category) { ?>
\t\t\t \t<?php if (\$category['children']) { ?>
\t\t\t \t<div class=\"col\">\t
\t\t\t \t<div class=\"section-headline border-top margin-top-40 padding-top-45 margin-bottom-25\">
\t\t\t\t    <h4>";
        // line 45
        yield (($_v6 = ($context["category"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["name"] ?? null) : null);
        yield "</h4>
\t\t\t   </div>
\t\t\t   
\t\t\t\t\t<ul class=\"list-1\">
\t\t\t\t\t\t<?php foreach (\$category['children'] as \$child) { ?>
\t\t\t\t\t\t<li><a href=\"";
        // line 50
        yield (($_v7 = ($context["child"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["href"] ?? null) : null);
        yield "\">";
        yield (($_v8 = ($context["child"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["name"] ?? null) : null);
        yield "</a></li>
\t\t\t\t\t\t<?php } ?>
\t\t\t\t\t</ul>
\t\t\t\t</div>\t
\t\t\t\t<?php } ?>
\t\t<?php } ?>
\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 60
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/product/category.twig";
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
        return array (  137 => 60,  122 => 50,  114 => 45,  105 => 39,  94 => 31,  90 => 30,  86 => 29,  81 => 27,  62 => 13,  50 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }} {{ menu }}
<div class=\"jumbotron\">
\t<div class=\"container-fluid\">
\t\t<h2 class=\"display-5\">{{ heading_title }}</h2>
\t</div>
</div>
<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-12\">
\t\t\t<nav id=\"breadcrumbs\">
\t\t\t\t<ul>
\t\t\t\t\t<?php foreach (\$breadcrumbs as \$breadcrumb) { ?>
\t\t\t\t\t\t<li><a href=\"{{ breadcrumb['href'] }}\">{{ breadcrumb['text'] }}</a></li>
\t\t\t\t\t<?php } ?>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
</div>
<!-- Page Content -->
<div class=\"container\">
\t<div class=\"row\">

\t\t<div class=\"col-12\">
\t\t\t<div class=\"companies-list\">
\t\t\t\t<?php foreach (\$categories as \$category) { ?>
\t\t\t\t<a href=\"{{ category['href'] }}\" class=\"company\">
\t\t\t\t\t<div class=\"company-inner-alignment\">
\t\t\t\t\t\t<span class=\"company-logo\"><i class=\"{{ category['icon'] }} fa-5x\"></i></span>
\t\t\t\t\t\t<h4>{{ category['name'] }}</h4>
\t\t\t\t\t\t<small>{{ category['description'] }}</small>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t<?php } ?>
\t\t\t</div>
\t\t</div>
\t\t<hr />
\t\t<div class=\"col-12 margin-top-40 margin-bottom-25\">
\t\t\t<h3>{{ heading_title }}</h3>
\t\t\t<div class=\"row\">
\t\t\t <?php foreach (\$categories as \$category) { ?>
\t\t\t \t<?php if (\$category['children']) { ?>
\t\t\t \t<div class=\"col\">\t
\t\t\t \t<div class=\"section-headline border-top margin-top-40 padding-top-45 margin-bottom-25\">
\t\t\t\t    <h4>{{ category['name'] }}</h4>
\t\t\t   </div>
\t\t\t   
\t\t\t\t\t<ul class=\"list-1\">
\t\t\t\t\t\t<?php foreach (\$category['children'] as \$child) { ?>
\t\t\t\t\t\t<li><a href=\"{{ child['href'] }}\">{{ child['name'] }}</a></li>
\t\t\t\t\t\t<?php } ?>
\t\t\t\t\t</ul>
\t\t\t\t</div>\t
\t\t\t\t<?php } ?>
\t\t<?php } ?>
\t\t</div>
\t\t</div>
\t</div>
</div>
{{ footer }}", "default/product/category.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/default/product/category.twig");
    }
}
