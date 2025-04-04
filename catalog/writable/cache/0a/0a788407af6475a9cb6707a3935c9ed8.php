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

/* default/common/language.twig */
class __TwigTemplate_61716fc33c7a9a26f62954814f56fa27 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["languages"] ?? null)) > 1)) {
            // line 2
            yield "\t<div class=\"footer-row\">
\t\t<div class=\"footer-row-inner language-switcher\">
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 7
                yield "\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7) == ($context["language_code"] ?? null))) {
                    // line 8
                    yield "\t\t\t\t\t\t\t<span class=\"d-md-inline\"><img src=\"images/flags/";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 8);
                    yield ".png\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                    yield "\">
\t\t\t\t\t\t\t\t";
                    // line 9
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 9);
                    yield "</span>
\t\t\t\t\t\t";
                }
                // line 11
                yield "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            yield "\t\t\t\t</div>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 15
                yield "\t\t\t\t\t\t<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "href", [], "any", false, false, false, 15);
                yield "\" class=\"dropdown-item\"><img src=\"images/flags/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 15);
                yield ".png\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 15);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 15);
                yield "\"/>
\t\t\t\t\t\t\t";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 16);
                yield "</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/common/language.twig";
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
        return array (  104 => 18,  96 => 16,  85 => 15,  81 => 14,  77 => 12,  71 => 11,  66 => 9,  57 => 8,  54 => 7,  50 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if languages|length > 1 %}
\t<div class=\"footer-row\">
\t\t<div class=\"footer-row-inner language-switcher\">
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t{% for language in languages %}
\t\t\t\t\t\t{% if language.code == language_code %}
\t\t\t\t\t\t\t<span class=\"d-md-inline\"><img src=\"images/flags/{{ language.code }}.png\" alt=\"{{ language.name }}\" title=\"{{ language.name }}\">
\t\t\t\t\t\t\t\t{{ language.name }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t{% for language in languages %}
\t\t\t\t\t\t<a href=\"{{ language.href }}\" class=\"dropdown-item\"><img src=\"images/flags/{{ language.code }}.png\" alt=\"{{ language.name }}\" title=\"{{ language.name }}\"/>
\t\t\t\t\t\t\t{{ language.name }}</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}
", "default/common/language.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/default/common/language.twig");
    }
}
