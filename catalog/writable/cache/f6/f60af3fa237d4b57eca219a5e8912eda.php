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

/* default/common/footer.twig */
class __TwigTemplate_38e80a2a52bcad2d17f75bf624daed57 extends Template
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
        yield "<footer>
\t<div id=\"footer\">
\t\t<div class=\"footer-top-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t<div class=\"footer-rows-container\">
\t\t\t\t\t\t\t<div class=\"footer-rows-left\">
\t\t\t\t\t\t\t\t<div class=\"footer-row\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-row-inner footer-logo\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 11
        yield ($context["logo"] ?? null);
        yield "\" alt=\"";
        yield ($context["config_name"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"footer-rows-right\">
\t\t\t\t\t\t\t\t<div class=\"footer-row\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-row-inner\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"footer-social-links\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["social_networks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 20
            yield "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 21
            yield CoreExtension::getAttribute($this->env, $this->source, $context["social"], "href", [], "any", false, false, false, 21);
            yield "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["social"], "name", [], "any", false, false, false, 21);
            yield "\" data-placement=\"bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-";
            // line 22
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["social"], "name", [], "any", false, false, false, 22));
            yield "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['social'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 30
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["language"] ?? null)) > 0)) {
            // line 31
            yield "\t\t\t\t\t\t\t\t\t";
            yield ($context["language"] ?? null);
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 33
        yield "\t\t\t\t\t\t\t\t";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currency"] ?? null)) > 0)) {
            // line 34
            yield "\t\t\t\t\t\t\t\t\t";
            yield ($context["currency"] ?? null);
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 36
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-middle-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t\t<div class=\"footer-links\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled ml-2\">
\t\t\t\t\t\t\t\t<li>";
        // line 48
        yield ($context["config_owner"] ?? null);
        yield "</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-phone-square\"></i> <a href=\"tel:";
        // line 50
        yield ($context["config_telephone"] ?? null);
        yield "\">";
        yield ($context["config_telephone"] ?? null);
        yield "</a></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"far fa-envelope\"></i> <a href=\"mailto:";
        // line 52
        yield ($context["config_email"] ?? null);
        yield "\">";
        yield ($context["config_email"] ?? null);
        yield "</a></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt text-danger\"></i> <a href=\"https://goo.gl/maps/V844ZzopcNaThWtf9\">";
        // line 54
        yield ($context["config_address"] ?? null);
        yield "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"card bg-transparent border-0\">
\t\t\t\t\t\t\t\t<div class=\"card-body p-1\">
\t\t\t\t\t\t\t\t\t";
        // line 58
        yield ($context["text_content"] ?? null);
        yield "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 62
        if (($context["informations"] ?? null)) {
            // line 63
            yield "\t\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">
\t\t\t\t\t\t\t<div class=\"footer-links\">
\t\t\t\t\t\t\t\t<h3>";
            // line 65
            yield ($context["text_terms"] ?? null);
            yield " ";
            yield ($context["config_name"] ?? null);
            yield "</h3>
\t\t\t\t\t\t\t\t<ul class=\"ml-2\">
\t\t\t\t\t\t\t\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 68
                yield "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 69
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 69);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 70
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 70);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "\t\t\t\t\t\t\t\t\t";
            if (($context["contact"] ?? null)) {
                // line 75
                yield "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 76
                yield ($context["contact"] ?? null);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 77
                yield ($context["text_contact"] ?? null);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 81
            yield "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 85
        yield "\t\t\t\t\t";
        if (($context["categories"] ?? null)) {
            // line 86
            yield "\t\t\t\t\t\t<div class=\"col-sm-12 col-md-2\">
\t\t\t\t\t\t\t<div class=\"footer-links\">
\t\t\t\t\t\t\t\t<h3>";
            // line 88
            yield ($context["text_categories"] ?? null);
            yield "</h3>
\t\t\t\t\t\t\t\t<ul class=\"ml-2\">
\t\t\t\t\t\t\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 91
                yield "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 92
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 92);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 93
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 93);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 101
        yield "\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">
\t\t\t\t\t\t<div class=\"footer-links\">
\t\t\t\t\t\t\t<h3>";
        // line 103
        yield ($context["text_opening"] ?? null);
        yield "</h3>
\t\t\t\t\t\t\t<ul class=\"ml-2\">
\t\t\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["open_hours"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 106
            yield "\t\t\t\t\t\t\t\t<li>";
            yield $context["item"];
            yield "</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-bottom-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t";
        // line 118
        yield ($context["text_footer"] ?? null);
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<div id=\"preloader\" class=\"preloader\">
    <div id=\"preloader_image\" class=\"preloader_image\"></div>
</div>
<script type=\"text/javascript\" src=\"default/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 131
            yield "\t<script type=\"text/javascript\" src=\"";
            yield $context["script"];
            yield "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "
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
        return "default/common/footer.twig";
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
        return array (  318 => 133,  309 => 131,  305 => 130,  290 => 118,  278 => 108,  269 => 106,  265 => 105,  260 => 103,  256 => 101,  250 => 97,  240 => 93,  236 => 92,  233 => 91,  229 => 90,  224 => 88,  220 => 86,  217 => 85,  211 => 81,  204 => 77,  200 => 76,  197 => 75,  194 => 74,  184 => 70,  180 => 69,  177 => 68,  173 => 67,  166 => 65,  162 => 63,  160 => 62,  153 => 58,  146 => 54,  139 => 52,  132 => 50,  127 => 48,  113 => 36,  107 => 34,  104 => 33,  98 => 31,  96 => 30,  90 => 26,  80 => 22,  74 => 21,  71 => 20,  67 => 19,  54 => 11,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer>
\t<div id=\"footer\">
\t\t<div class=\"footer-top-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t<div class=\"footer-rows-container\">
\t\t\t\t\t\t\t<div class=\"footer-rows-left\">
\t\t\t\t\t\t\t\t<div class=\"footer-row\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-row-inner footer-logo\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ logo }}\" alt=\"{{ config_name }}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"footer-rows-right\">
\t\t\t\t\t\t\t\t<div class=\"footer-row\">
\t\t\t\t\t\t\t\t\t<div class=\"footer-row-inner\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"footer-social-links\">
\t\t\t\t\t\t\t\t\t\t\t{% for social in social_networks %}
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ social.href }}\" target=\"_blank\" data-toggle=\"tooltip\" title=\"{{ social.name }}\" data-placement=\"bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-{{ social.name|lower }}\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if language|length > 0 %}
\t\t\t\t\t\t\t\t\t{{ language }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if currency|length > 0 %}
\t\t\t\t\t\t\t\t\t{{ currency }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-middle-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t\t<div class=\"footer-links\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled ml-2\">
\t\t\t\t\t\t\t\t<li>{{ config_owner }}</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-phone-square\"></i> <a href=\"tel:{{ config_telephone }}\">{{ config_telephone }}</a></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"far fa-envelope\"></i> <a href=\"mailto:{{ config_email }}\">{{ config_email }}</a></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt text-danger\"></i> <a href=\"https://goo.gl/maps/V844ZzopcNaThWtf9\">{{ config_address }}</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"card bg-transparent border-0\">
\t\t\t\t\t\t\t\t<div class=\"card-body p-1\">
\t\t\t\t\t\t\t\t\t{{ text_content }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if informations %}
\t\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">
\t\t\t\t\t\t\t<div class=\"footer-links\">
\t\t\t\t\t\t\t\t<h3>{{ text_terms }} {{ config_name }}</h3>
\t\t\t\t\t\t\t\t<ul class=\"ml-2\">
\t\t\t\t\t\t\t\t\t{% for information in informations %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ information.href }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ information.title }}</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% if contact %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ contact }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ text_contact }}</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if categories %}
\t\t\t\t\t\t<div class=\"col-sm-12 col-md-2\">
\t\t\t\t\t\t\t<div class=\"footer-links\">
\t\t\t\t\t\t\t\t<h3>{{ text_categories }}</h3>
\t\t\t\t\t\t\t\t<ul class=\"ml-2\">
\t\t\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ category.href }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ category.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"col-sm-12 col-md-3\">
\t\t\t\t\t\t<div class=\"footer-links\">
\t\t\t\t\t\t\t<h3>{{ text_opening }}</h3>
\t\t\t\t\t\t\t<ul class=\"ml-2\">
\t\t\t\t\t\t\t{% for item in open_hours %}
\t\t\t\t\t\t\t\t<li>{{ item }}</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-bottom-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t{{ text_footer }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<div id=\"preloader\" class=\"preloader\">
    <div id=\"preloader_image\" class=\"preloader_image\"></div>
</div>
<script type=\"text/javascript\" src=\"default/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

{% for script in scripts %}
\t<script type=\"text/javascript\" src=\"{{ script }}\"></script>
{% endfor %}

</body>
</html>
", "default/common/footer.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/default/common/footer.twig");
    }
}
