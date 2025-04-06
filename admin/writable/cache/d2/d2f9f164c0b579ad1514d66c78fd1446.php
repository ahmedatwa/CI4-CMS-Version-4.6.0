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

/* Extensions\Views\Dashboard\customer_online_info.twig */
class __TwigTemplate_68195d94537fee06d695b3d8ce5d6c4d extends Template
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
        yield "<div class=\"card text-white bg-primary mb-3\">
    <div class=\"card-header p-2\">
        ";
        // line 3
        yield ($context["heading_title"] ?? null);
        yield "
    </div>
    <div class=\"card-body\">
        <div class=\"mb-2\">
            <h6 class=\"card-subtitle\"><i class=\"fas fa-plug fa-3x\"></i></h6>
            <p class=\"card-text float-right\">";
        // line 8
        yield ($context["total"] ?? null);
        yield "</p>
        </div>
        <a class=\"card-link text-white\" href=\"";
        // line 10
        yield ($context["online"] ?? null);
        yield "\">";
        yield ($context["text_view"] ?? null);
        yield "</a>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Extensions\\Views\\Dashboard\\customer_online_info.twig";
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
        return array (  59 => 10,  54 => 8,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card text-white bg-primary mb-3\">
    <div class=\"card-header p-2\">
        {{ heading_title }}
    </div>
    <div class=\"card-body\">
        <div class=\"mb-2\">
            <h6 class=\"card-subtitle\"><i class=\"fas fa-plug fa-3x\"></i></h6>
            <p class=\"card-text float-right\">{{ total }}</p>
        </div>
        <a class=\"card-link text-white\" href=\"{{ online }}\">{{ text_view }}</a>
    </div>
</div>
", "Extensions\\Views\\Dashboard\\customer_online_info.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Extensions/Views/Dashboard/customer_online_info.twig");
    }
}
