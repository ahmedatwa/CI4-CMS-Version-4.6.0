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

/* dustrix/common/footer.twig */
class __TwigTemplate_f7f9d222227c888699497040dbbe4711 extends Template
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
        yield " <footer class=\"footer-4 footer-wrap bg-cover\" style=\"background-image: url('dustrix/images/home4/footer_bg.jpg')\">
        <div class=\"footer-widgets\">            
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-md-6 col-xl-3 col-12 pr-xl-4\">
                        <div class=\"single-footer-wid site_footer_widget\">
                            <a href=\"index.html\">
                                <img src=\"dustrix/images/logo-4.png\" alt=\"\">
                            </a>
                            <p class=\"mt-4\">Sed ut perspiciatis unde omnis natus voluptatem accusa ntiumy doloremque laudantium.omnis natus voluptatem accusa ntiumy doloremque laudantium</p>
                            <div class=\"social-link mt-30\">
                                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-behance\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class=\"col-md-6 col-xl-2 col-12\">                        
                        <div class=\"single-footer-wid\">
                            <div class=\"wid-title\">
                                <h4>Company</h4>
                            </div>
                            <ul>
                                <li><a href=\"about.html\">About Us</a></li>
                                <li><a href=\"about.html\">Company History</a></li>
                                <li><a href=\"contact.html\">Need a Career</a></li>
                                <li><a href=\"project-details.html\">Working Process</a></li>
                                <li><a href=\"news.html\">Blog Post</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class=\"col-md-6 col-xl-2 col-12\">                        
                        <div class=\"single-footer-wid\">
                            <div class=\"wid-title\">
                                <h4>Useful Links</h4>
                            </div>
                            <ul>
                                <li><a href=\"about.html\">About Us</a></li>
                                <li><a href=\"about.html\">Company History</a></li>
                                <li><a href=\"contact.html\">Need a Career</a></li>
                                <li><a href=\"project-details.html\">Working Process</a></li>
                                <li><a href=\"news.html\">Blog Post</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class=\"col-md-6 col-xl-3 col-12\">
                        <div class=\"single-footer-wid recent_post_widget\">
                            <div class=\"wid-title\">
                                <h4>News News</h4>
                            </div>
                            <div class=\"recent-post-list\">
                                <div class=\"single-recent-post\">
                                    <div class=\"thumb bg-cover\" style=\"background-image: url('assets/img/blog/b1.jpg');\"></div>
                                    <div class=\"post-data\">
                                        <span><i class=\"fal fa-calendar-alt\"></i>24th Nov 2020</span>
                                        <h5><a href=\"news-details.html\">User’s Perspes Using Story Structure</a></h5>
                                    </div>
                                </div>
                                <div class=\"single-recent-post\">
                                    <div class=\"thumb bg-cover\" style=\"background-image: url('assets/img/blog/b2.jpg');\"></div>
                                    <div class=\"post-data\">
                                        <span><i class=\"fal fa-calendar-alt\"></i>15th July 2021</span>
                                        <h5><a href=\"news-details.html\">Optimiz For Assistive Technology Users</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                </div>
            </div>
        </div>

        <div class=\"footer-bottom pt-0\">
            <div class=\"container text-center\">
                <div class=\"footer-bottom-content text-white\">
                    <p>&copy; 2021 <a href=\"index.html\">Dustrix</a>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!--  ALl JS Plugins
    ====================================== -->
    <script src=\"dustrix/javascript/jquery.min.js\"></script>
    <script src=\"dustrix/javascript/modernizr.min.js\"></script>
    <script src=\"dustrix/javascript/jquery.easing.js\"></script>
    <script src=\"dustrix/javascript/popper.min.js\"></script>
    <script src=\"dustrix/javascript/bootstrap.min.js\"></script>
    <script src=\"dustrix/javascript/isotope.pkgd.min.js\"></script>
    <script src=\"dustrix/javascript/imageload.min.js\"></script>
    <script src=\"dustrix/javascript/scrollUp.min.js\"></script>
    <script src=\"dustrix/javascript/owl.carousel.min.js\"></script>
    <script src=\"dustrix/javascript/magnific-popup.min.js\"></script>
    <script src=\"dustrix/javascript/counterup.min.js\"></script>
    <script src=\"dustrix/javascript/wow.min.js\"></script>
    <script src=\"dustrix/javascript/metismenu.js\"></script>
    <script src=\"dustrix/javascript/timeline.min.js\"></script>
    <script src=\"dustrix/javascript/ajax-mail.js\"></script>
    <script src=\"dustrix/javascript/active.js\"></script>
</body>

</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dustrix/common/footer.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" <footer class=\"footer-4 footer-wrap bg-cover\" style=\"background-image: url('dustrix/images/home4/footer_bg.jpg')\">
        <div class=\"footer-widgets\">            
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-md-6 col-xl-3 col-12 pr-xl-4\">
                        <div class=\"single-footer-wid site_footer_widget\">
                            <a href=\"index.html\">
                                <img src=\"dustrix/images/logo-4.png\" alt=\"\">
                            </a>
                            <p class=\"mt-4\">Sed ut perspiciatis unde omnis natus voluptatem accusa ntiumy doloremque laudantium.omnis natus voluptatem accusa ntiumy doloremque laudantium</p>
                            <div class=\"social-link mt-30\">
                                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-behance\"></i></a>
                                <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class=\"col-md-6 col-xl-2 col-12\">                        
                        <div class=\"single-footer-wid\">
                            <div class=\"wid-title\">
                                <h4>Company</h4>
                            </div>
                            <ul>
                                <li><a href=\"about.html\">About Us</a></li>
                                <li><a href=\"about.html\">Company History</a></li>
                                <li><a href=\"contact.html\">Need a Career</a></li>
                                <li><a href=\"project-details.html\">Working Process</a></li>
                                <li><a href=\"news.html\">Blog Post</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class=\"col-md-6 col-xl-2 col-12\">                        
                        <div class=\"single-footer-wid\">
                            <div class=\"wid-title\">
                                <h4>Useful Links</h4>
                            </div>
                            <ul>
                                <li><a href=\"about.html\">About Us</a></li>
                                <li><a href=\"about.html\">Company History</a></li>
                                <li><a href=\"contact.html\">Need a Career</a></li>
                                <li><a href=\"project-details.html\">Working Process</a></li>
                                <li><a href=\"news.html\">Blog Post</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class=\"col-md-6 col-xl-3 col-12\">
                        <div class=\"single-footer-wid recent_post_widget\">
                            <div class=\"wid-title\">
                                <h4>News News</h4>
                            </div>
                            <div class=\"recent-post-list\">
                                <div class=\"single-recent-post\">
                                    <div class=\"thumb bg-cover\" style=\"background-image: url('assets/img/blog/b1.jpg');\"></div>
                                    <div class=\"post-data\">
                                        <span><i class=\"fal fa-calendar-alt\"></i>24th Nov 2020</span>
                                        <h5><a href=\"news-details.html\">User’s Perspes Using Story Structure</a></h5>
                                    </div>
                                </div>
                                <div class=\"single-recent-post\">
                                    <div class=\"thumb bg-cover\" style=\"background-image: url('assets/img/blog/b2.jpg');\"></div>
                                    <div class=\"post-data\">
                                        <span><i class=\"fal fa-calendar-alt\"></i>15th July 2021</span>
                                        <h5><a href=\"news-details.html\">Optimiz For Assistive Technology Users</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                </div>
            </div>
        </div>

        <div class=\"footer-bottom pt-0\">
            <div class=\"container text-center\">
                <div class=\"footer-bottom-content text-white\">
                    <p>&copy; 2021 <a href=\"index.html\">Dustrix</a>. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!--  ALl JS Plugins
    ====================================== -->
    <script src=\"dustrix/javascript/jquery.min.js\"></script>
    <script src=\"dustrix/javascript/modernizr.min.js\"></script>
    <script src=\"dustrix/javascript/jquery.easing.js\"></script>
    <script src=\"dustrix/javascript/popper.min.js\"></script>
    <script src=\"dustrix/javascript/bootstrap.min.js\"></script>
    <script src=\"dustrix/javascript/isotope.pkgd.min.js\"></script>
    <script src=\"dustrix/javascript/imageload.min.js\"></script>
    <script src=\"dustrix/javascript/scrollUp.min.js\"></script>
    <script src=\"dustrix/javascript/owl.carousel.min.js\"></script>
    <script src=\"dustrix/javascript/magnific-popup.min.js\"></script>
    <script src=\"dustrix/javascript/counterup.min.js\"></script>
    <script src=\"dustrix/javascript/wow.min.js\"></script>
    <script src=\"dustrix/javascript/metismenu.js\"></script>
    <script src=\"dustrix/javascript/timeline.min.js\"></script>
    <script src=\"dustrix/javascript/ajax-mail.js\"></script>
    <script src=\"dustrix/javascript/active.js\"></script>
</body>

</html>", "dustrix/common/footer.twig", "/Users/ahmedatwa/Sites/project-root/catalog/app/Views/dustrix/common/footer.twig");
    }
}
