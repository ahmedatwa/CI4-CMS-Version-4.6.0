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

/* Common/column_left.twig */
class __TwigTemplate_5d5f4cdc91b4e23ce30027844d7ebbea extends Template
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
        yield "<nav id=\"sidebar\">
\t<div class=\"sidebar-header\" id=\"navigation\">
\t\t<span>
\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t";
        // line 5
        yield ($context["text_navigation"] ?? null);
        yield "</span>
\t</div>
\t<ul id=\"menu\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 9
            yield "\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 9)) {
                // line 10
                yield "\t\t\t\t<li class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 10);
                yield "\">
\t\t\t\t\t<a href=\"#";
                // line 11
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 11);
                yield "\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"parent dropdown-toggle\">
\t\t\t\t\t\t<i class=\"";
                // line 12
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 12);
                yield "\"></i>
\t\t\t\t\t\t";
                // line 13
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 13);
                yield "</a>
\t\t\t\t\t<ul class=\"collapse\" id=\"";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 14);
                yield "\">
\t\t\t\t\t\t";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 15));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 16
                    yield "\t\t\t\t\t\t\t";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 16)) {
                        // line 17
                        yield "\t\t\t\t\t\t\t\t<!--level 2  -->
\t\t\t\t\t\t\t\t<a href=\"#";
                        // line 18
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 18);
                        yield "\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"parent dropdown-toggle\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                        yield "</a>
\t\t\t\t\t\t\t\t<ul class=\"collapse\" id=\"";
                        // line 19
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 19);
                        yield "\">
\t\t\t\t\t\t\t\t\t";
                        // line 20
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 20));
                        foreach ($context['_seq'] as $context["_key"] => $context["child_2"]) {
                            // line 21
                            yield "\t\t\t\t\t\t\t\t\t\t<!-- level 3 -->
\t\t\t\t\t\t\t\t\t\t";
                            // line 22
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["child_2"], "children", [], "any", false, false, false, 22)) {
                                // line 23
                                yield "\t\t\t\t\t\t\t\t\t\t\t<a href=\"#";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["child_2"], "id", [], "any", false, false, false, 23);
                                yield "\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"parent dropdown-toggle\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["child_2"], "name", [], "any", false, false, false, 23);
                                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"collapse\" id=\"";
                                // line 24
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["child_2"], "id", [], "any", false, false, false, 24);
                                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 25
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["child_2"], "children", [], "any", false, false, false, 25));
                                foreach ($context['_seq'] as $context["_key"] => $context["child_3"]) {
                                    // line 26
                                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 27
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["child_3"], "href", [], "any", false, false, false, 27);
                                    yield "\">";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["child_3"], "name", [], "any", false, false, false, 27);
                                    yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['child_3'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 30
                                yield "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 32
                                yield "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 33
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["child_2"], "href", [], "any", false, false, false, 33);
                                yield "\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["child_2"], "name", [], "any", false, false, false, 33);
                                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 36
                            yield "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['child_2'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 37
                        yield "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                    } else {
                        // line 39
                        yield "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 40
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 40);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 40);
                        yield "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    // line 43
                    yield "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                yield "\t\t\t\t\t\t<!-- level 2 ./End -->
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t";
            } else {
                // line 48
                yield "\t\t\t\t<li class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 48);
                yield "\">
\t\t\t\t\t<a href=\"";
                // line 49
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 49);
                yield "\">
\t\t\t\t\t\t<i class=\"";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 50);
                yield "\"></i>
\t\t\t\t\t\t";
                // line 51
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 51);
                yield "</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 54
            yield "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "\t</ul>
</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Common/column_left.twig";
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
        return array (  213 => 55,  207 => 54,  201 => 51,  197 => 50,  193 => 49,  188 => 48,  182 => 44,  176 => 43,  168 => 40,  165 => 39,  161 => 37,  155 => 36,  147 => 33,  144 => 32,  140 => 30,  129 => 27,  126 => 26,  122 => 25,  118 => 24,  111 => 23,  109 => 22,  106 => 21,  102 => 20,  98 => 19,  92 => 18,  89 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  61 => 10,  58 => 9,  54 => 8,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav id=\"sidebar\">
\t<div class=\"sidebar-header\" id=\"navigation\">
\t\t<span>
\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t{{ text_navigation }}</span>
\t</div>
\t<ul id=\"menu\">
\t\t{% for menu in menus %}
\t\t\t{% if menu.children %}
\t\t\t\t<li class=\"{{ menu.id }}\">
\t\t\t\t\t<a href=\"#{{ menu.id }}\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"parent dropdown-toggle\">
\t\t\t\t\t\t<i class=\"{{ menu.icon }}\"></i>
\t\t\t\t\t\t{{  menu.name }}</a>
\t\t\t\t\t<ul class=\"collapse\" id=\"{{ menu.id }}\">
\t\t\t\t\t\t{% for child in menu.children %}
\t\t\t\t\t\t\t{% if child.children %}
\t\t\t\t\t\t\t\t<!--level 2  -->
\t\t\t\t\t\t\t\t<a href=\"#{{ child.id }}\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"parent dropdown-toggle\">{{ child.name }}</a>
\t\t\t\t\t\t\t\t<ul class=\"collapse\" id=\"{{ child.id }}\">
\t\t\t\t\t\t\t\t\t{% for child_2 in child.children %}
\t\t\t\t\t\t\t\t\t\t<!-- level 3 -->
\t\t\t\t\t\t\t\t\t\t{% if child_2.children %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#{{ child_2.id }}\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"parent dropdown-toggle\">{{ child_2.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"collapse\" id=\"{{ child_2.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for child_3 in child_2.children %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ child_3.href }}\">{{ child_3.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ child_2.href }}\">{{ child_2.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ child.href }}\">{{ child.name }}</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<!-- level 2 ./End -->
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"{{ menu.id }}\">
\t\t\t\t\t<a href=\"{{ menu.href }}\">
\t\t\t\t\t\t<i class=\"{{ menu.icon }}\"></i>
\t\t\t\t\t\t{{  menu.name }}</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</ul>
</nav>
", "Common/column_left.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Views/Common/column_left.twig");
    }
}
