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

/* default/common/currency.twig */
class __TwigTemplate_dbd1f581c5f008eaf77b3df72bcfe744 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currencies"] ?? null)) > 1)) {
            // line 2
            yield "\t<div class=\"footer-row\">
\t\t<div class=\"footer-row-inner language-switcher\">
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                yield "\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 7) && (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 7) == ($context["currency_code"] ?? null)))) {
                    yield " 
\t\t\t\t\t\t<span class=\"d-md-inline\"><strong>";
                    // line 8
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 8);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 8);
                    yield "</strong></span>
\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 9
$context["currency"], "symbol_right", [], "any", false, false, false, 9) && (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 9) == ($context["currency_code"] ?? null)))) {
                    yield " 
\t\t\t\t\t\t<span class=\"d-md-inline\"><strong>";
                    // line 10
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 10);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 10);
                    yield "</strong></span>
\t\t\t\t\t\t ";
                }
                // line 12
                yield "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "\t\t\t\t</div>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 16
                yield "\t\t\t\t\t";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 16)) {
                    // line 17
                    yield "\t\t\t\t\t\t<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "href", [], "any", false, false, false, 17);
                    yield "\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 17);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 17);
                    yield "</a>
\t\t\t\t\t\t";
                } else {
                    // line 19
                    yield "\t\t\t\t\t\t<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "href", [], "any", false, false, false, 19);
                    yield "\" class=\"dropdown-item\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 19);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 19);
                    yield "</a>
\t\t\t\t\t\t";
                }
                // line 21
                yield "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "\t\t\t\t\t</form>
\t\t\t\t</div>
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
        return "default/common/currency.twig";
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
        return array (  119 => 22,  113 => 21,  103 => 19,  93 => 17,  90 => 16,  86 => 15,  82 => 13,  76 => 12,  69 => 10,  65 => 9,  59 => 8,  54 => 7,  50 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if currencies|length > 1 %}
\t<div class=\"footer-row\">
\t\t<div class=\"footer-row-inner language-switcher\">
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t{% for currency in currencies %}
\t\t\t\t\t\t{% if currency.symbol_left and currency.code == currency_code %} 
\t\t\t\t\t\t<span class=\"d-md-inline\"><strong>{{ currency.symbol_left }} {{ currency.title }}</strong></span>
\t\t\t\t\t\t{% elseif currency.symbol_right and currency.code == currency_code %} 
\t\t\t\t\t\t<span class=\"d-md-inline\"><strong>{{ currency.symbol_right }} {{ currency.title }}</strong></span>
\t\t\t\t\t\t {% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t{% for currency in currencies %}
\t\t\t\t\t{% if currency.symbol_left %}
\t\t\t\t\t\t<a href=\"{{ currency.href }}\" class=\"dropdown-item\">{{ currency.symbol_left }} {{ currency.title }}</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{ currency.href }}\" class=\"dropdown-item\">{{ currency.symbol_right }} {{ currency.title }}</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}", "default/common/currency.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/default/common/currency.twig");
    }
}
