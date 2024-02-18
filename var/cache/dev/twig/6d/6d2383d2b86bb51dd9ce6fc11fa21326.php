<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Parent/home.html.twig.twig */
class __TwigTemplate_1a1b19cd721a680911a4094d2c49bd55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Parent/home.html.twig.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Parent/home.html.twig.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>magicMindes</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <meta content=\"\" name=\"keywords\" />
    <meta content=\"\" name=\"description\" />

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\" />

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\"
      rel=\"stylesheet\"
    />
    <link
      href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\"
      rel=\"stylesheet\"
    />

    <!-- Libraries Stylesheet -->
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\" />
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" />

    <!-- Template Stylesheet -->
    <link href=\"css/style.css\" rel=\"stylesheet\" />
  </head>

  <body>
    <div class=\"container-xxl bg-white p-0\">
      <!-- Spinner Start -->
      <div
        id=\"spinner\"
        class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\"
      >
        <div
          class=\"spinner-border text-primary\"
          style=\"width: 3rem; height: 3rem\"
          role=\"status\"
        >
          <span class=\"sr-only\">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar Start -->
      <nav
        class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0\"
      >
        <a href=\"home.html.twig.twig\" class=\"navbar-brand\">
          <img
            src=\"img/logo.png\"
            alt=\"Your Logo\"
            style=\"width: 100px; height: auto\"
          />
        </a>
        <button
          type=\"button\"
          class=\"navbar-toggler\"
          data-bs-toggle=\"collapse\"
          data-bs-target=\"#navbarCollapse\"
 >
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
          <div class=\"navbar-nav mx-auto\">
            <a href=\"home.html.twig.twig\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"about.html\" class=\"nav-item nav-link\">About Us</a>
            <a href=\"courses.html\" class=\"nav-item nav-link\">Courses</a>
            <a href=\"Store.html\" class=\"nav-item nav-link\">Store</a>
            <a href=\"event.html\" class=\"nav-item nav-link\">Event</a>
            <div class=\"nav-item dropdown\">
              <a
                href=\"#\"
                class=\"nav-link dropdown-toggle\"
                data-bs-toggle=\"dropdown\"
                >Pages</a
              >
              <div
                class=\"dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0\"
              >
                <a href=\"facility.html\" class=\"dropdown-item\"
                  >School Facilities</a
                >
                <a href=\"team.html\" class=\"dropdown-item\">Popular Teachers</a>
                <a href=\"call-to-action.html\" class=\"dropdown-item\"
                  >Become A Teachers</a
                >
                <a href=\"appointment.html\" class=\"dropdown-item\"
                  >Make Appointment</a
                >
                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                <a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
              </div>
            </div>
            <a href=\"contact.html\" class=\"nav-item nav-link\">Contact Us</a>
            <a href=\"Store.html\" class=\"nav-item nav-link\"
              ><i class=\"fas fa-shopping-cart cart-icon\"></i
            ></a>
          </div>
           <!-- Nav Item - User Information -->
           <div class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                <img class=\"img-profile rounded-circle\"
                    src=\"img/user.jpg\" width=\"50px\" height=\"50px\">
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profile
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Settings
                </a>
               
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Logout
                </a>
            </div>
       </div>
        </div>
      </nav>
      <!-- Navbar End -->



   

   

      

      <!-- Footer Start -->
      <div
        class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn\"
        data-wow-delay=\"0.1s\"
      >
        <div class=\"container py-5\">
          <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Get In Touch</h3>
              <p class=\"mb-2\">
                <i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York,
                USA
              </p>
              <p class=\"mb-2\">
                <i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890
              </p>
              <p class=\"mb-2\">
                <i class=\"fa fa-envelope me-3\"></i>info@example.com
              </p>
              <div class=\"d-flex pt-2\">
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-twitter\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-facebook-f\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-youtube\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-linkedin-in\"></i
                ></a>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Quick Links</h3>
              <a class=\"btn btn-link text-white-50\" href=\"\">About Us</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Contact Us</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Our Services</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Privacy Policy</a>
              <a class=\"btn btn-link text-white-50\" href=\"\"
                >Terms & Condition</a
              >
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Photo Gallery</h3>
              <div class=\"row g-2 pt-2\">
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-1.jpg\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-2.jpg\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-3.jpg\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-4.jpg\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-5.jpg\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-6.jpg\"
                    alt=\"\"
                  />
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Newsletter</h3>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class=\"position-relative mx-auto\" style=\"max-width: 400px\">
                <input
                  class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\"
                  type=\"text\"
                  placeholder=\"Your email\"
                />
                <button
                  type=\"button\"
                  class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\"
                >
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"container\">
          <div class=\"copyright\">
            <div class=\"row\">
              <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All
                Right Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                Designed By
                <a class=\"border-bottom\" href=\"https://htmlcodex.com\"
                  >HTML Codex</a
                >
              </div>
              <div class=\"col-md-6 text-center text-md-end\">
                <div class=\"footer-menu\">
                  <a href=\"\">Home</a>
                  <a href=\"\">Cookies</a>
                  <a href=\"\">Help</a>
                  <a href=\"\">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"
        ><i class=\"bi bi-arrow-up\"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"lib/wow/wow.min.js\"></script>
    <script src=\"lib/easing/easing.min.js\"></script>
    <script src=\"lib/waypoints/waypoints.min.js\"></script>
    <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Parent/home.html.twig.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <title>magicMindes</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <meta content=\"\" name=\"keywords\" />
    <meta content=\"\" name=\"description\" />

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\" />

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
      href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap\"
      rel=\"stylesheet\"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\"
      rel=\"stylesheet\"
    />
    <link
      href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\"
      rel=\"stylesheet\"
    />

    <!-- Libraries Stylesheet -->
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\" />
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" />

    <!-- Template Stylesheet -->
    <link href=\"css/style.css\" rel=\"stylesheet\" />
  </head>

  <body>
    <div class=\"container-xxl bg-white p-0\">
      <!-- Spinner Start -->
      <div
        id=\"spinner\"
        class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\"
      >
        <div
          class=\"spinner-border text-primary\"
          style=\"width: 3rem; height: 3rem\"
          role=\"status\"
        >
          <span class=\"sr-only\">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar Start -->
      <nav
        class=\"navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0\"
      >
        <a href=\"home.html.twig.twig\" class=\"navbar-brand\">
          <img
            src=\"img/logo.png\"
            alt=\"Your Logo\"
            style=\"width: 100px; height: auto\"
          />
        </a>
        <button
          type=\"button\"
          class=\"navbar-toggler\"
          data-bs-toggle=\"collapse\"
          data-bs-target=\"#navbarCollapse\"
 >
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
          <div class=\"navbar-nav mx-auto\">
            <a href=\"home.html.twig.twig\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"about.html\" class=\"nav-item nav-link\">About Us</a>
            <a href=\"courses.html\" class=\"nav-item nav-link\">Courses</a>
            <a href=\"Store.html\" class=\"nav-item nav-link\">Store</a>
            <a href=\"event.html\" class=\"nav-item nav-link\">Event</a>
            <div class=\"nav-item dropdown\">
              <a
                href=\"#\"
                class=\"nav-link dropdown-toggle\"
                data-bs-toggle=\"dropdown\"
                >Pages</a
              >
              <div
                class=\"dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0\"
              >
                <a href=\"facility.html\" class=\"dropdown-item\"
                  >School Facilities</a
                >
                <a href=\"team.html\" class=\"dropdown-item\">Popular Teachers</a>
                <a href=\"call-to-action.html\" class=\"dropdown-item\"
                  >Become A Teachers</a
                >
                <a href=\"appointment.html\" class=\"dropdown-item\"
                  >Make Appointment</a
                >
                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                <a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
              </div>
            </div>
            <a href=\"contact.html\" class=\"nav-item nav-link\">Contact Us</a>
            <a href=\"Store.html\" class=\"nav-item nav-link\"
              ><i class=\"fas fa-shopping-cart cart-icon\"></i
            ></a>
          </div>
           <!-- Nav Item - User Information -->
           <div class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                <img class=\"img-profile rounded-circle\"
                    src=\"img/user.jpg\" width=\"50px\" height=\"50px\">
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profile
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Settings
                </a>
               
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Logout
                </a>
            </div>
       </div>
        </div>
      </nav>
      <!-- Navbar End -->



   

   

      

      <!-- Footer Start -->
      <div
        class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn\"
        data-wow-delay=\"0.1s\"
      >
        <div class=\"container py-5\">
          <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Get In Touch</h3>
              <p class=\"mb-2\">
                <i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York,
                USA
              </p>
              <p class=\"mb-2\">
                <i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890
              </p>
              <p class=\"mb-2\">
                <i class=\"fa fa-envelope me-3\"></i>info@example.com
              </p>
              <div class=\"d-flex pt-2\">
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-twitter\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-facebook-f\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-youtube\"></i
                ></a>
                <a class=\"btn btn-outline-light btn-social\" href=\"\"
                  ><i class=\"fab fa-linkedin-in\"></i
                ></a>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Quick Links</h3>
              <a class=\"btn btn-link text-white-50\" href=\"\">About Us</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Contact Us</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Our Services</a>
              <a class=\"btn btn-link text-white-50\" href=\"\">Privacy Policy</a>
              <a class=\"btn btn-link text-white-50\" href=\"\"
                >Terms & Condition</a
              >
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Photo Gallery</h3>
              <div class=\"row g-2 pt-2\">
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-1.jpg\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-2.jpg\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-3.jpg\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-4.jpg\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-5.jpg\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                    class=\"img-fluid rounded bg-light p-1\"
                    src=\"img/classes-6.jpg\"
                    alt=\"\"
                  />
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <h3 class=\"text-white mb-4\">Newsletter</h3>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class=\"position-relative mx-auto\" style=\"max-width: 400px\">
                <input
                  class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\"
                  type=\"text\"
                  placeholder=\"Your email\"
                />
                <button
                  type=\"button\"
                  class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\"
                >
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class=\"container\">
          <div class=\"copyright\">
            <div class=\"row\">
              <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All
                Right Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                Designed By
                <a class=\"border-bottom\" href=\"https://htmlcodex.com\"
                  >HTML Codex</a
                >
              </div>
              <div class=\"col-md-6 text-center text-md-end\">
                <div class=\"footer-menu\">
                  <a href=\"\">Home</a>
                  <a href=\"\">Cookies</a>
                  <a href=\"\">Help</a>
                  <a href=\"\">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"
        ><i class=\"bi bi-arrow-up\"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"lib/wow/wow.min.js\"></script>
    <script src=\"lib/easing/easing.min.js\"></script>
    <script src=\"lib/waypoints/waypoints.min.js\"></script>
    <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
  </body>
</html>
", "Parent/home.html.twig.twig", "C:\\Users\\hp\\Desktop\\pidev  projects\\MagicMinds\\templates\\Parent\\home.html.twig.twig");
    }
}
