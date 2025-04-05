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

/* dustrix/common/header.twig */
class __TwigTemplate_a44d44daebbf316098e1b39a9ef86479 extends Template
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
        yield "<!doctype html>
<html lang=\"";
        // line 2
        yield ($context["lang"] ?? null);
        yield "\" direction=\"";
        yield ($context["direction"] ?? null);
        yield "\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"author\" content=\"";
        // line 6
        yield ($context["author"] ?? null);
        yield "\">
\t\t<base href=\"";
        // line 7
        yield ($context["base"] ?? null);
        yield "\"/>
\t\t<link rel=\"icon\" href=\"";
        // line 8
        yield ($context["ico"] ?? null);
        yield "\">
\t\t<title>";
        // line 9
        yield ($context["title"] ?? null);
        yield "</title>
\t\t";
        // line 10
        if (($context["description"] ?? null)) {
            // line 11
            yield "\t\t\t<meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
\t\t";
        }
        // line 13
        yield "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 14
            yield "\t\t\t<meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
\t\t";
        }
        // line 16
        yield "\t\t<!-- Bootstrap core CSS -->
\t\t\t\t
\t\t<link rel=\"stylesheet\" href=\"dustrix/stylesheet/icons.css\">
    <!--  animate css plugins -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/animate.css\">
    <!--  magnific-popup css plugins -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/magnific-popup.css\">
    <!--  owl carosuel css plugins -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/owl.carousel.min.css\">
    <!-- metis menu css file -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/metismenu.css\">
    <!--  owl theme css plugins -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/owl.theme.css\">
    <!--  Bootstrap css plugins -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/bootstrap.min.css\">
    <!--  main style css file -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield ($context["stylesheet_css"] ?? null);
        yield "\">
\t<link rel=\"stylesheet\" href=\"dustrix/style.css\">

\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 36
            yield "\t\t\t<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 36);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 36);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 36);
            yield "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 39
            yield "\t\t\t<script src=\"";
            yield $context["script"];
            yield "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 42
            yield "\t\t\t<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 42);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 42);
            yield "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 45
            yield "\t\t\t";
            yield $context["analytic"];
            yield "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "\t</head>
\t<body class=\"body-wrapper\">    
    <!-- preloader -->
    <div id=\"preloader\" class=\"preloader\">
        <div class=\"animation-preloader\">
            <div class=\"spinner\">                
            </div>
                <div class=\"txt-loading\">
                    <span data-text-preloader=\"D\" class=\"letters-loading\">
                        D
                    </span>
                    <span data-text-preloader=\"U\" class=\"letters-loading\">
                        U
                    </span>
                    <span data-text-preloader=\"S\" class=\"letters-loading\">
                       S
                    </span>
                    <span data-text-preloader=\"T\" class=\"letters-loading\">
                        T
                    </span>
                    <span data-text-preloader=\"R\" class=\"letters-loading\">
                        R
                    </span>
                    <span data-text-preloader=\"I\" class=\"letters-loading\">
                        I
                    </span>
                    <span data-text-preloader=\"X\" class=\"letters-loading\">
                        X
                    </span>
                </div>
            <p class=\"text-center\">Loading</p>
        </div>
        <div class=\"loader\">
            <div class=\"row\">
                <div class=\"col-3 loader-section section-left\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-left\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-right\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-right\">
                    <div class=\"bg\"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- welcome content start from here -->

    <header class=\"header-wrap header-4\">
        <div class=\"top-header d-none d-lg-block\">
            <div class=\"container-flud\">
                <div class=\"row\">
                    <div class=\"col-md-10 pr-md-0 col-12\">
                        <div class=\"header-cta\">
                            <ul>
                                <li>
                                  <a href=\"mailto:support@example.com\"><i class=\"fal fa-envelope\"></i> support@example.com</a>
                                </li>
                                <li>
                                  <a href=\"tel:+8801700080702\"><i class=\"fal fa-phone\"></i> +012 (345) 67 89</a>
                                </li>
                                <li>
                                  <a href=\"#\"><i class=\"fal fa-clock\"></i> Mon — Sat: 9AM — 6PM</a>
                                </li>
                              </ul>
                        </div>
                    </div>
                    <div class=\"col-md-2 pl-md-0 col-12\">
                        <div class=\"header-right-cta d-flex justify-content-end\">
                            <div class=\"social-profile\">
                                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-behance\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"main-header-wraper\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center justify-content-between\">
                    <div class=\"header-logo\">
                        <div class=\"logo\">
                            <a href=\"index.html\">
                                <img src=\"dustrix/images/logo-4.png\" alt=\"logo\">
                            </a>
                        </div>
                    </div>
                    <div class=\"header-menu d-none d-xl-block\">
                        <div class=\"main-menu\">
                            <ul>
                                <li><a href=\"index.html\">Home</a>
                                </li>
                                <li><a href=\"about.html\">About</a></li>
                                <li><a href=\"#\">Pages</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"team.html\">team</a></li>
                                        <li><a href=\"faq.html\">faq</a></li>
                                        <li><a href=\"projects.html\">projects</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"services.html\">Services</a></li>
                                <li><a href=\"news.html\">News</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"header-right d-flex align-items-center\">
                        <div class=\"header-btn-cta d-none d-sm-block\">
                            <a href=\"contact.html\" class=\"theme-btn\">Get Started <i class=\"fal fa-long-arrow-right\"></i></a>
                        </div>
                        <div class=\"mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none\">
                            <div class=\"mobile-nav-wrap\">                    
                                <div id=\"hamburger\">
                                    <i class=\"fal fa-bars\"></i>
                                </div>
                                <!-- mobile menu - responsive menu  -->
                                <div class=\"mobile-nav\">
                                    <button type=\"button\" class=\"close-nav\">
                                        <i class=\"fal fa-times-circle\"></i>
                                    </button>
                                    <nav class=\"sidebar-nav\">
                                        <ul class=\"metismenu\" id=\"mobile-menu\">
                                            <li><a class=\"has-arrow\" href=\"#\">Homes</a>
                                                <ul class=\"sub-menu\">
                                                    <li><a href=\"index.html\">Homepage 1</a></li>
                                                    <li><a href=\"index-2.html\">Homepage 2</a></li>
                                                    <li><a href=\"index-3.html\">Homepage 3</a></li>
                                                    <li><a href=\"index-4.html\">Homepage 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"about.html\">about</a></li>
                                            <li><a href=\"services.html\">services</a></li>
                                            <li>
                                                <a class=\"has-arrow\" href=\"#\">Pages</a>
                                                <ul class=\"sub-menu\">
                                                    <li><a href=\"faq.html\">faq</a></li>
                                                    <li><a href=\"services-details.html\">services details</a></li>
                                                    <li><a href=\"team.html\">Team</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"news.html\">News</a></li>
                                            <li><a href=\"contact.html\">Contact</a></li>
                                        </ul>
                                    </nav>
        
                                    <div class=\"action-bar\">
                                        <a href=\"mailto:modinatheme@gmail.com\"><i class=\"fal fa-envelope-open-text\"></i>info@webmail.com</a>
                                        <a href=\"tel:123-456-7890\"><i class=\"fal fa-phone\"></i>987-098-098-09</a>
                                        <a href=\"contact.html\" class=\"d-btn theme-btn minimal-btn\">Contact Us</a>
                                    </div>
                                </div>                            
                            </div>
                            <div class=\"overlay\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


\t    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dustrix/common/header.twig";
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
        return array (  172 => 47,  163 => 45,  158 => 44,  147 => 42,  142 => 41,  133 => 39,  128 => 38,  115 => 36,  111 => 35,  105 => 32,  87 => 16,  81 => 14,  78 => 13,  72 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"{{ lang }}\" direction=\"{{ direction }}\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"author\" content=\"{{ author }}\">
\t\t<base href=\"{{ base }}\"/>
\t\t<link rel=\"icon\" href=\"{{ ico }}\">
\t\t<title>{{ title }}</title>
\t\t{% if description %}
\t\t\t<meta name=\"description\" content=\"{{ description }}\"/>
\t\t{% endif %}
\t\t{% if keywords %}
\t\t\t<meta name=\"keywords\" content=\"{{ keywords }}\"/>
\t\t{% endif %}
\t\t<!-- Bootstrap core CSS -->
\t\t\t\t
\t\t<link rel=\"stylesheet\" href=\"dustrix/stylesheet/icons.css\">
    <!--  animate css plugins -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/animate.css\">
    <!--  magnific-popup css plugins -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/magnific-popup.css\">
    <!--  owl carosuel css plugins -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/owl.carousel.min.css\">
    <!-- metis menu css file -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/metismenu.css\">
    <!--  owl theme css plugins -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/owl.theme.css\">
    <!--  Bootstrap css plugins -->
    <link rel=\"stylesheet\" href=\"dustrix/stylesheet/bootstrap.min.css\">
    <!--  main style css file -->
    <link rel=\"stylesheet\" href=\"{{ stylesheet_css }}\">
\t<link rel=\"stylesheet\" href=\"dustrix/style.css\">

\t\t{% for style in styles %}
\t\t\t<link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
\t\t{% endfor %}
\t\t{% for script in scripts %}
\t\t\t<script src=\"{{ script }}\" type=\"text/javascript\"></script>
\t\t{% endfor %}
\t\t{% for link in links %}
\t\t\t<link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
\t\t{% endfor %}
\t\t{% for analytic in analytics %}
\t\t\t{{ analytic }}
\t\t{% endfor %}
\t</head>
\t<body class=\"body-wrapper\">    
    <!-- preloader -->
    <div id=\"preloader\" class=\"preloader\">
        <div class=\"animation-preloader\">
            <div class=\"spinner\">                
            </div>
                <div class=\"txt-loading\">
                    <span data-text-preloader=\"D\" class=\"letters-loading\">
                        D
                    </span>
                    <span data-text-preloader=\"U\" class=\"letters-loading\">
                        U
                    </span>
                    <span data-text-preloader=\"S\" class=\"letters-loading\">
                       S
                    </span>
                    <span data-text-preloader=\"T\" class=\"letters-loading\">
                        T
                    </span>
                    <span data-text-preloader=\"R\" class=\"letters-loading\">
                        R
                    </span>
                    <span data-text-preloader=\"I\" class=\"letters-loading\">
                        I
                    </span>
                    <span data-text-preloader=\"X\" class=\"letters-loading\">
                        X
                    </span>
                </div>
            <p class=\"text-center\">Loading</p>
        </div>
        <div class=\"loader\">
            <div class=\"row\">
                <div class=\"col-3 loader-section section-left\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-left\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-right\">
                    <div class=\"bg\"></div>
                </div>
                <div class=\"col-3 loader-section section-right\">
                    <div class=\"bg\"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- welcome content start from here -->

    <header class=\"header-wrap header-4\">
        <div class=\"top-header d-none d-lg-block\">
            <div class=\"container-flud\">
                <div class=\"row\">
                    <div class=\"col-md-10 pr-md-0 col-12\">
                        <div class=\"header-cta\">
                            <ul>
                                <li>
                                  <a href=\"mailto:support@example.com\"><i class=\"fal fa-envelope\"></i> support@example.com</a>
                                </li>
                                <li>
                                  <a href=\"tel:+8801700080702\"><i class=\"fal fa-phone\"></i> +012 (345) 67 89</a>
                                </li>
                                <li>
                                  <a href=\"#\"><i class=\"fal fa-clock\"></i> Mon — Sat: 9AM — 6PM</a>
                                </li>
                              </ul>
                        </div>
                    </div>
                    <div class=\"col-md-2 pl-md-0 col-12\">
                        <div class=\"header-right-cta d-flex justify-content-end\">
                            <div class=\"social-profile\">
                                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-behance\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"main-header-wraper\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center justify-content-between\">
                    <div class=\"header-logo\">
                        <div class=\"logo\">
                            <a href=\"index.html\">
                                <img src=\"dustrix/images/logo-4.png\" alt=\"logo\">
                            </a>
                        </div>
                    </div>
                    <div class=\"header-menu d-none d-xl-block\">
                        <div class=\"main-menu\">
                            <ul>
                                <li><a href=\"index.html\">Home</a>
                                </li>
                                <li><a href=\"about.html\">About</a></li>
                                <li><a href=\"#\">Pages</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"team.html\">team</a></li>
                                        <li><a href=\"faq.html\">faq</a></li>
                                        <li><a href=\"projects.html\">projects</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"services.html\">Services</a></li>
                                <li><a href=\"news.html\">News</a></li>
                                <li><a href=\"contact.html\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"header-right d-flex align-items-center\">
                        <div class=\"header-btn-cta d-none d-sm-block\">
                            <a href=\"contact.html\" class=\"theme-btn\">Get Started <i class=\"fal fa-long-arrow-right\"></i></a>
                        </div>
                        <div class=\"mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none\">
                            <div class=\"mobile-nav-wrap\">                    
                                <div id=\"hamburger\">
                                    <i class=\"fal fa-bars\"></i>
                                </div>
                                <!-- mobile menu - responsive menu  -->
                                <div class=\"mobile-nav\">
                                    <button type=\"button\" class=\"close-nav\">
                                        <i class=\"fal fa-times-circle\"></i>
                                    </button>
                                    <nav class=\"sidebar-nav\">
                                        <ul class=\"metismenu\" id=\"mobile-menu\">
                                            <li><a class=\"has-arrow\" href=\"#\">Homes</a>
                                                <ul class=\"sub-menu\">
                                                    <li><a href=\"index.html\">Homepage 1</a></li>
                                                    <li><a href=\"index-2.html\">Homepage 2</a></li>
                                                    <li><a href=\"index-3.html\">Homepage 3</a></li>
                                                    <li><a href=\"index-4.html\">Homepage 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"about.html\">about</a></li>
                                            <li><a href=\"services.html\">services</a></li>
                                            <li>
                                                <a class=\"has-arrow\" href=\"#\">Pages</a>
                                                <ul class=\"sub-menu\">
                                                    <li><a href=\"faq.html\">faq</a></li>
                                                    <li><a href=\"services-details.html\">services details</a></li>
                                                    <li><a href=\"team.html\">Team</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"news.html\">News</a></li>
                                            <li><a href=\"contact.html\">Contact</a></li>
                                        </ul>
                                    </nav>
        
                                    <div class=\"action-bar\">
                                        <a href=\"mailto:modinatheme@gmail.com\"><i class=\"fal fa-envelope-open-text\"></i>info@webmail.com</a>
                                        <a href=\"tel:123-456-7890\"><i class=\"fal fa-phone\"></i>987-098-098-09</a>
                                        <a href=\"contact.html\" class=\"d-btn theme-btn minimal-btn\">Contact Us</a>
                                    </div>
                                </div>                            
                            </div>
                            <div class=\"overlay\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


\t    ", "dustrix/common/header.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/dustrix/common/header.twig");
    }
}
