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

/* Extensions\Views\Dashboard\customer_activity_info.twig */
class __TwigTemplate_fc36e429d4932a7e31508c200b25e693 extends Template
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
        yield "<div class=\"card mb-3\">
  <div class=\"card-header p-2\">
    <i class=\"fas fa-calendar-alt\"></i> ";
        // line 3
        yield ($context["heading_title"] ?? null);
        yield " 
  </div>
  <div class=\"card-body p-0\">
    <ul class=\"list-group list-group-flush\">
     ";
        // line 7
        if (($context["activities"] ?? null)) {
            // line 8
            yield "\t ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["activities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 9
                yield "        <li class=\"list-group-item py-2\"> <p class=\"p-0 m-0\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "comment", [], "any", false, false, false, 9);
                yield "</p>
        <span class=\"badge badge-link badge-pill\"> <i class=\"fas fa-history\"></i> ";
                // line 10
                yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date_added", [], "any", false, false, false, 10);
                yield "</span>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "      ";
        } else {
            // line 14
            yield "        <li class=\"list-group-item text-center\"> ";
            yield ($context["text_no_results"] ?? null);
            yield "</li>
      ";
        }
        // line 16
        yield "    </ul>
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
        return "Extensions\\Views\\Dashboard\\customer_activity_info.twig";
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
        return array (  83 => 16,  77 => 14,  74 => 13,  65 => 10,  60 => 9,  55 => 8,  53 => 7,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card mb-3\">
  <div class=\"card-header p-2\">
    <i class=\"fas fa-calendar-alt\"></i> {{ heading_title }} 
  </div>
  <div class=\"card-body p-0\">
    <ul class=\"list-group list-group-flush\">
     {% if activities %}
\t {% for activity in activities %}
        <li class=\"list-group-item py-2\"> <p class=\"p-0 m-0\">{{ activity.comment }}</p>
        <span class=\"badge badge-link badge-pill\"> <i class=\"fas fa-history\"></i> {{ activity.date_added }}</span>
        </li>
        {% endfor %}
      {% else %}
        <li class=\"list-group-item text-center\"> {{ text_no_results }}</li>
      {% endif %}
    </ul>
  </div>
</div>
", "Extensions\\Views\\Dashboard\\customer_activity_info.twig", "/Users/ahmedatwa/Sites/project-root/admin/app/Extensions/Views/Dashboard/customer_activity_info.twig");
    }
}
