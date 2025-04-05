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

/* veutify/common/header.twig */
class __TwigTemplate_e4919066f0b6c29c25218a86d032a93b extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield ($context["lang"] ?? null);
        yield "\" direction=\"";
        yield ($context["direction"] ?? null);
        yield "\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />
    <meta name=\"author\" content=\"";
        // line 9
        yield ($context["author"] ?? null);
        yield "\" />
    <meta name=\"theme\" content=\"";
        // line 10
        yield ($context["theme"] ?? null);
        yield "\" />
    <base href=\"";
        // line 11
        yield ($context["base"] ?? null);
        yield "\" />
    <link rel=\"icon\" href=\"";
        // line 12
        yield ($context["ico"] ?? null);
        yield "\" />
    <title>";
        // line 13
        yield ($context["title"] ?? null);
        yield "</title>
    ";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\" />
    ";
        }
        // line 16
        yield " ";
        if (($context["keywords"] ?? null)) {
            // line 17
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\" />
    ";
        }
        // line 19
        yield "    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/vuetify@3.8.0/dist/vuetify.min.css\"
    />
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css\"
    />
    <link
      rel=\"stylesheet\"
      href=\"https://fonts.bunny.net/css?family=roboto:400,500,700\"
    />
    <script type=\"importmap\">
      {
        \"imports\": {
          \"vue\": \"https://cdn.jsdelivr.net/npm/vue@latest/dist/vue.esm-browser.js\",
          \"vuetify\": \"https://cdn.jsdelivr.net/npm/vuetify@";
        // line 35
        yield ($context["version"] ?? null);
        yield "/dist/vuetify.esm.js\"
        }
      }
    </script>
  </head>
  <body>
    
    <header></header>

    <div id=\"app\">
      ";
        // line 45
        yield ($context["welcome"] ?? null);
        yield "
    </div>

\t<script type=\"module\">
\t\timport { createApp, ref, computed } from \"vue\";
\t\timport { createVuetify } from \"vuetify\";
\t\t// ... setup as usual
\t\tconst vuetify = createVuetify();
\t
\t\tconst app = createApp();
\t\tapp.use(vuetify).mount(\"#app\");
\t
\t
\t\tconst welcome = ref('Welcome veutify')
\t  </script>
\t  
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
        return "veutify/common/header.twig";
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
        return array (  125 => 45,  112 => 35,  94 => 19,  88 => 17,  85 => 16,  79 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ lang }}\" direction=\"{{ direction }}\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />
    <meta name=\"author\" content=\"{{ author }}\" />
    <meta name=\"theme\" content=\"{{ theme }}\" />
    <base href=\"{{ base }}\" />
    <link rel=\"icon\" href=\"{{ ico }}\" />
    <title>{{ title }}</title>
    {% if description %}
    <meta name=\"description\" content=\"{{ description }}\" />
    {% endif %} {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\" />
    {% endif %}
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/vuetify@3.8.0/dist/vuetify.min.css\"
    />
    <link
      rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css\"
    />
    <link
      rel=\"stylesheet\"
      href=\"https://fonts.bunny.net/css?family=roboto:400,500,700\"
    />
    <script type=\"importmap\">
      {
        \"imports\": {
          \"vue\": \"https://cdn.jsdelivr.net/npm/vue@latest/dist/vue.esm-browser.js\",
          \"vuetify\": \"https://cdn.jsdelivr.net/npm/vuetify@{{ version }}/dist/vuetify.esm.js\"
        }
      }
    </script>
  </head>
  <body>
    
    <header></header>

    <div id=\"app\">
      {{ welcome }}
    </div>

\t<script type=\"module\">
\t\timport { createApp, ref, computed } from \"vue\";
\t\timport { createVuetify } from \"vuetify\";
\t\t// ... setup as usual
\t\tconst vuetify = createVuetify();
\t
\t\tconst app = createApp();
\t\tapp.use(vuetify).mount(\"#app\");
\t
\t
\t\tconst welcome = ref('Welcome veutify')
\t  </script>
\t  
  </body>
 
</html>
", "veutify/common/header.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/veutify/common/header.twig");
    }
}
