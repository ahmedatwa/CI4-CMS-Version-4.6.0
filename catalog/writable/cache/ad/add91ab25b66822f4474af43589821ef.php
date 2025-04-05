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

/* veutify/common/home.twig */
class __TwigTemplate_1b8a35dea44ff46850cb93dd99bd665a extends Template
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
        yield ($context["menu"] ?? null);
        yield " 
<main role=\"main\">
";
        // line 4
        yield ($context["content_top"] ?? null);
        yield "
";
        // line 5
        yield ($context["content_bottom"] ?? null);
        yield "
</main>
";
        // line 7
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
        return "veutify/common/home.twig";
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
        return array (  60 => 7,  55 => 5,  51 => 4,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }} 
{{ menu }} 
<main role=\"main\">
{{ content_top }}
{{ content_bottom }}
</main>
{{ footer }}
", "veutify/common/home.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/veutify/common/home.twig");
    }
}
