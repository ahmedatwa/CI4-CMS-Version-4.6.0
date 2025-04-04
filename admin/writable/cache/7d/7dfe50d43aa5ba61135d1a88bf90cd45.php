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

/* Common/footer.twig */
class __TwigTemplate_ec579ec91b0c29e8926920e91b922a30 extends Template
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
        yield "<footer id=\"footer\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col text-center\">
\t\t\t";
        // line 4
        yield ($context["footer"] ?? null);
        yield " ";
        yield ($context["version"] ?? null);
        yield "
\t\t</div>
\t</div>
</footer>
</div>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Common/footer.twig";
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
        return array (  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer id=\"footer\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col text-center\">
\t\t\t{{ footer }} {{ version }}
\t\t</div>
\t</div>
</footer>
</div>
</body>
</html>
", "Common/footer.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Common/footer.twig");
    }
}
