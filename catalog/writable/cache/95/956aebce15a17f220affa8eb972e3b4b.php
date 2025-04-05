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

/* veutify/module/carousel.twig */
class __TwigTemplate_40465f6dcb44d8a5a55b050d7f184e62 extends Template
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
        yield "<section class=\"container-fluid\">
\t<div class=\"row\">
\t\t";
        // line 3
        if (($context["autoplay"] ?? null)) {
            // line 4
            yield "\t\t\t<div id=\"carousel";
            yield ($context["banner_id"] ?? null);
            yield "\" class=\"carousel slide shadow-sm mb-5 bg-white rounded\" data-ride=\"carousel\">
\t\t\t";
        } else {
            // line 6
            yield "\t\t\t\t<div id=\"carousel";
            yield ($context["banner_id"] ?? null);
            yield "\" class=\"carousel slide shadow-sm mb-5 bg-white rounded\">
\t\t\t\t";
        }
        // line 8
        yield "\t\t\t\t";
        if (($context["indicators"] ?? null)) {
            // line 9
            yield "\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 11
                yield "\t\t\t\t\t\t\t";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 11)) {
                    // line 12
                    yield "\t\t\t\t\t\t\t\t<li data-target=\"#carousel";
                    yield ($context["banner_id"] ?? null);
                    yield "\" data-slide-to=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 12);
                    yield "\" class=\"active\"></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 14
                    yield "\t\t\t\t\t\t\t\t<li data-target=\"#carousel";
                    yield ($context["banner_id"] ?? null);
                    yield "\" data-slide-to=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 14);
                    yield "\"></li>
\t\t\t\t\t\t\t";
                }
                // line 16
                yield "\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "\t\t\t\t\t</ol>
\t\t\t\t";
        }
        // line 19
        yield "\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 21
            yield "\t\t\t\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 21)) {
                // line 22
                yield "\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 23);
                yield "\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t";
                // line 24
                if (CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "caption", [], "any", false, false, false, 24)) {
                    // line 25
                    yield "\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 26
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 26);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 27
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "caption", [], "any", false, false, false, 27);
                    yield "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 30
                yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 32
                yield "\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 33);
                yield "\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t";
                // line 34
                if (CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "caption", [], "any", false, false, false, 34)) {
                    // line 35
                    yield "\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 36
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 36);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 37
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "caption", [], "any", false, false, false, 37);
                    yield "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 40
                yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 43
            yield "\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "\t\t\t\t</div>
\t\t\t\t";
        // line 45
        if (($context["arrows"] ?? null)) {
            // line 46
            yield "\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carousel";
            yield ($context["banner_id"] ?? null);
            yield "\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carousel";
            // line 50
            yield ($context["banner_id"] ?? null);
            yield "\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 55
        yield "\t\t\t</div>
\t\t</div>
\t
\t</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "veutify/module/carousel.twig";
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
        return array (  231 => 55,  223 => 50,  215 => 46,  213 => 45,  210 => 44,  196 => 43,  191 => 40,  185 => 37,  181 => 36,  178 => 35,  176 => 34,  172 => 33,  169 => 32,  165 => 30,  159 => 27,  155 => 26,  152 => 25,  150 => 24,  146 => 23,  143 => 22,  140 => 21,  123 => 20,  120 => 19,  116 => 17,  102 => 16,  94 => 14,  86 => 12,  83 => 11,  66 => 10,  63 => 9,  60 => 8,  54 => 6,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"container-fluid\">
\t<div class=\"row\">
\t\t{% if autoplay %}
\t\t\t<div id=\"carousel{{ banner_id }}\" class=\"carousel slide shadow-sm mb-5 bg-white rounded\" data-ride=\"carousel\">
\t\t\t{% else %}
\t\t\t\t<div id=\"carousel{{ banner_id }}\" class=\"carousel slide shadow-sm mb-5 bg-white rounded\">
\t\t\t\t{% endif %}
\t\t\t\t{% if indicators %}
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t{% for banner in banners %}
\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t<li data-target=\"#carousel{{ banner_id }}\" data-slide-to=\"{{ loop.index0 }}\" class=\"active\"></li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li data-target=\"#carousel{{ banner_id }}\" data-slide-to=\"{{ loop.index0 }}\"></li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ol>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t{% for banner in banners %}
\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t<img src=\"{{ banner.image }}\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t{% if banner.caption %}
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t<h5>{{ banner.title }}</h5>
\t\t\t\t\t\t\t\t\t\t<p>{{ banner.caption }}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t<img src=\"{{ banner.image }}\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t\t{% if banner.caption %}
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t<h5>{{ banner.title }}</h5>
\t\t\t\t\t\t\t\t\t\t<p>{{ banner.caption }}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t{% if arrows %}
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carousel{{ banner_id }}\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carousel{{ banner_id }}\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t
\t</section>
", "veutify/module/carousel.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/veutify/module/carousel.twig");
    }
}
