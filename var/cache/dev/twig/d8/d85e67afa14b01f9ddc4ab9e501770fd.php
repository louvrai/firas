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

/* Visiteur/home.html.twig */
class __TwigTemplate_d2574ecec4cb21a4e79426783e2cc554 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/home.html.twig"));

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
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\" />

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
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
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
        <a href=\"base.html.twig\" class=\"navbar-brand\">
          <img
                  src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/logo.png"), "html", null, true);
        echo "\"
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
            <a href=\"#\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"#\" class=\"nav-item nav-link\">Products</a>
            <a href=\"#\" class=\"nav-item nav-link\">Courses</a>
            <a href=\"#\" class=\"nav-item nav-link\">About Us</a>
            <a href=\"#\" class=\"nav-item nav-link\">Contact Us</a>

            <a href=\"Store.html\" class=\"nav-item nav-link\"
              ><i class=\"fas fa-shopping-cart cart-icon\"></i
            ></a>
          </div>
          <a href=\"\" class=\"btn btn-primary rounded-pill px-3 d-none d-lg-block\"
            >Join Us<i class=\"fa fa-arrow-right ms-3\"></i
          ></a>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Carousel Start -->
      <div class=\"container-fluid p-0 mb-5\">
        <div class=\"owl-carousel header-carousel position-relative\">
          <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/i1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
            <div
              class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\"
              style=\"background: rgba(0, 0, 0, 0.2)\"
            >
              <div class=\"container\">
                <div class=\"row justify-content-start\">
                  <div class=\"col-10 col-lg-8\">
                    <h1 class=\"display-2 text-white animated slideInDown mb-4\">
                      The best e-learning school for your Child
                    </h1>
                    <p class=\"fs-5 fw-medium text-white mb-4 pb-2\">
                      Vero elitr justo clita lorem. Ipsum dolor at sed stet sit
                      diam no. Kasd rebum ipsum et diam justo clita et kasd
                      rebum sea elitr.
                    </p>
                    <a
                      href=\"\"
                      class=\"btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft\"
                      >Learn More</a
                    >
                    <a
                      href=\"\"
                      class=\"btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight\"
                      >best Courses</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/i1.2.png"), "html", null, true);
        echo "\" alt=\"\" />
            <div
              class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\"
              style=\"background: rgba(0, 0, 0, 0.2)\"
            >
              <div class=\"container\">
                <div class=\"row justify-content-start\">
                  <div class=\"col-10 col-lg-8\">
                    <h1 class=\"display-2 text-white animated slideInDown mb-4\">
                      The best e-learning school for your Child
                    </h1>
                    <p class=\"fs-5 fw-medium text-white mb-4 pb-2\">
                      Vero elitr justo clita lorem. Ipsum dolor at sed stet sit
                      diam no. Kasd rebum ipsum et diam justo clita et kasd
                      rebum sea elitr.
                    </p>
                    <a
                      href=\"\"
                      class=\"btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft\"
                      >Learn More</a
                    >
                    <a
                      href=\"\"
                      class=\"btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight\"
                      >Our Classes</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel End -->

      <!-- Facilities Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div
            class=\"text-center mx-auto mb-5 wow fadeInUp\"
            data-wow-delay=\"0.1s\"
            style=\"max-width: 600px\"
          >
            <h1 class=\"mb-3\">Our Goals</h1>
            <p>
              Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
              dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
              rebum vero dolor duo.
            </p>
          </div>
          <div class=\"row g-4\">
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
              <div class=\"facility-item\">
                <div class=\"facility-icon bg-primary\">
                  <span class=\"bg-primary\"></span>
                  <i class=\"fa fa-chalkboard-teacher fa-3x text-primary\"></i>
                  <span class=\"bg-primary\"></span>
                </div>
                <div class=\"facility-text bg-primary\">
                  <h3 class=\"text-primary mb-3\">Make learning easier</h3>
                  <p class=\"mb-0\">
                    Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                    ipsum sit
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
              <div class=\"facility-item\">
                <div class=\"facility-icon bg-success\">
                  <span class=\"bg-success\"></span>
                  <i class=\"fa fa-chalkboard-teacher fa-3x text-success\"></i>
                  <span class=\"bg-success\"></span>
                </div>
                <div class=\"facility-text bg-success\">
                  <h3 class=\"text-success mb-3\">Make learning fun</h3>
                  <p class=\"mb-0\">
                    Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                    ipsum sit
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
              <div class=\"facility-item\">
                <div class=\"facility-icon bg-warning\">
                  <span class=\"bg-warning\"></span>
                  <i class=\"fa fa-chalkboard-teacher fa-3x text-warning\"></i>
                  <span class=\"bg-warning\"></span>
                </div>
                <div class=\"facility-text bg-warning\">
                  <h3 class=\"text-warning mb-3\">ensure Accesibility for all</h3>
                  <p class=\"mb-0\">
                    Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                    ipsum sit
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
              <div class=\"facility-item\">
                <div class=\"facility-icon bg-info\">
                  <span class=\"bg-info\"></span>
                  <i class=\"fa fa-chalkboard-teacher fa-3x text-info\"></i>
                  <span class=\"bg-info\"></span>
                </div>
                <div class=\"facility-text bg-info\">
                  <h3 class=\"text-info mb-3\">emphasize practice</h3>
                  <p class=\"mb-0\">
                    Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                    ipsum sit
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Facilities End -->

      <!-- About Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div class=\"row g-5 align-items-center\">
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
              <h1 class=\"mb-4\">
                Learn More About Our Work And Our Cultural Activities
              </h1>
              <p>
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              <p class=\"mb-4\">
                Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No
                stet est diam rebum amet diam ipsum. Clita clita labore, dolor
                duo nonumy clita sit at, sed sit sanctus dolor eos, ipsum labore
                duo duo sit no sea diam. Et dolor et kasd ea. Eirmod diam at
                dolor est vero nonumy magna.
              </p>
              <div class=\"row g-4 align-items-center\">
                <div class=\"col-sm-6\">
                  <a class=\"btn btn-primary rounded-pill py-3 px-5\" href=\"\"
                    >Read More</a
                  >
                </div>
                <div class=\"col-sm-6\">
                  <div class=\"d-flex align-items-center\">
                    <img
                      class=\"rounded-circle flex-shrink-0\"
                      src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/user.jpg"), "html", null, true);
        echo "\"
                      alt=\"\"
                      style=\"width: 45px; height: 45px\"
                    />
                    <div class=\"ms-3\">
                      <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                      <small>CEO & Founder</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6 about-img wow fadeInUp\" data-wow-delay=\"0.5s\">
              <div class=\"row\">
                <div class=\"col-12 text-center\">
                  <img
                    class=\"img-fluid w-75 rounded-circle bg-light p-3\"
                    src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/f1.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-6 text-start\" style=\"margin-top: -150px\">
                  <img
                    class=\"img-fluid w-100 rounded-circle bg-light p-3\"
                    src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/i4.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-6 text-end\" style=\"margin-top: -150px\">
                  <img
                    class=\"img-fluid w-100 rounded-circle bg-light p-3\"
                    src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/i3.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

      <!-- Call To Action Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div class=\"bg-light rounded\">
            <div class=\"row g-0\">
              <div
                class=\"col-lg-6 wow fadeIn\"
                data-wow-delay=\"0.1s\"
                style=\"min-height: 400px\"
              >
                <div class=\"position-relative h-100\">
                  <img
                    class=\"position-absolute w-100 h-100 rounded\"
                    src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/i2.png"), "html", null, true);
        echo "\"
                    style=\"object-fit: cover\"
                  />
                </div>
              </div>
              <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                <div
                  class=\"h-100 d-flex flex-column justify-content-center p-5\"
                >
                  <h1 class=\"mb-4\">Become A Teacher</h1>
                  <p class=\"mb-4\">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                    sit, sed stet lorem sit clita duo justo magna dolore erat
                    amet
                  </p>
                  <a class=\"btn btn-primary py-3 px-5\" href=\"\"
                    >Get Started Now<i class=\"fa fa-arrow-right ms-2\"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Call To Action End -->

      <!-- Classes Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div
            class=\"text-center mx-auto mb-5 wow fadeInUp\"
            data-wow-delay=\"0.1s\"
            style=\"max-width: 600px\"
          >
            <h1 class=\"mb-3\">Best Courses</h1>
            <p>
              Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
              dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
              rebum vero dolor duo.
            </p>
          </div>
          <div class=\"row g-4\">
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-1.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >Art & Drawing</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/user.jpg"), "html", null, true);
        echo "\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-warning pt-2\"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-2.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >Color Management</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/user.jpg"), "html", null, true);
        echo "\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-warning pt-2\">
                        <h6 class=\"text-warning mb-1\">Participant:</h6>
                        <small>30 Kids</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-3.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >Athletic & Dance</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/user.jpg"), "html", null, true);
        echo "\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-warning pt-2\">
                        <h6 class=\"text-warning mb-1\">Participant:</h6>
                        <small>30 Kids</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-4.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >Language & Speaking</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/user.jpg"), "html", null, true);
        echo "\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-warning pt-2\">
                        <h6 class=\"text-warning mb-1\">Participant:</h6>
                        <small>30 Kids</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-5.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >Religion & History</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/user.jpg"), "html", null, true);
        echo "\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-warning pt-2\">
                        <h6 class=\"text-warning mb-1\">Participant:</h6>
                        <small>30 Kids</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-6.jpg"), "html", null, true);
        echo "\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >General Knowledge</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/user.jpg"), "html", null, true);
        echo "\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-warning pt-2\">
                        <h6 class=\"text-warning mb-1\">Participant:</h6>
                        <small>30 Kids</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Classes End -->

      <!-- Appointment Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div class=\"bg-light rounded\">
            <div class=\"row g-0\">
              <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                <div
                  class=\"h-100 d-flex flex-column justify-content-center p-5\"
                >
                  <h1 class=\"mb-4\">Make Appointment</h1>
                  <form>
                    <div class=\"row g-3\">
                      <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                          <input
                            type=\"text\"
                            class=\"form-control border-0\"
                            id=\"gname\"
                            placeholder=\"Gurdian Name\"
                          />
                          <label for=\"gname\">Gurdian Name</label>
                        </div>
                      </div>
                      <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                          <input
                            type=\"email\"
                            class=\"form-control border-0\"
                            id=\"gmail\"
                            placeholder=\"Gurdian Email\"
                          />
                          <label for=\"gmail\">Gurdian Email</label>
                        </div>
                      </div>
                      <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                          <input
                            type=\"text\"
                            class=\"form-control border-0\"
                            id=\"cname\"
                            placeholder=\"Child Name\"
                          />
                          <label for=\"cname\">Child Name</label>
                        </div>
                      </div>
                      <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                          <input
                            type=\"text\"
                            class=\"form-control border-0\"
                            id=\"cage\"
                            placeholder=\"Child Age\"
                          />
                          <label for=\"cage\">Child Age</label>
                        </div>
                      </div>
                      <div class=\"col-12\">
                        <div class=\"form-floating\">
                          <textarea
                            class=\"form-control border-0\"
                            placeholder=\"Leave a message here\"
                            id=\"message\"
                            style=\"height: 100px\"
                          ></textarea>
                          <label for=\"message\">Message</label>
                        </div>
                      </div>
                      <div class=\"col-12\">
                        <button
                          class=\"btn btn-primary w-100 py-3\"
                          type=\"submit\"
                        >
                          Submit
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div
                class=\"col-lg-6 wow fadeIn\"
                data-wow-delay=\"0.5s\"
                style=\"min-height: 400px\"
              >
                <div class=\"position-relative h-100\">
                  <img
                    class=\"position-absolute w-100 h-100 rounded\"
                    src=\"";
        // line 808
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/appointment.jpg"), "html", null, true);
        echo "\"
                    style=\"object-fit: cover\"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Appointment End -->

      <!-- Team Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div
            class=\"text-center mx-auto mb-5 wow fadeInUp\"
            data-wow-delay=\"0.1s\"
            style=\"max-width: 600px\"
          >
            <h1 class=\"mb-3\">Popular Teachers</h1>
            <p>
              Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
              dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
              rebum vero dolor duo.
            </p>
          </div>
          <div class=\"row g-4\">
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
              <div class=\"team-item position-relative\">
                <img
                  class=\"img-fluid rounded-circle w-75\"
                  src=\"";
        // line 839
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/team-1.jpg"), "html", null, true);
        echo "\"
                  alt=\"\"
                />
                <div class=\"team-text\">
                  <h3>Full Name</h3>
                  <p>Designation</p>
                  <div class=\"d-flex align-items-center\">
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-facebook-f\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-twitter\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-instagram\"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
              <div class=\"team-item position-relative\">
                <img
                  class=\"img-fluid rounded-circle w-75\"
                  src=\"";
        // line 863
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/team-2.jpg"), "html", null, true);
        echo "\"
                  alt=\"\"
                />
                <div class=\"team-text\">
                  <h3>Full Name</h3>
                  <p>Designation</p>
                  <div class=\"d-flex align-items-center\">
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-facebook-f\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-twitter\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-instagram\"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
              <div class=\"team-item position-relative\">
                <img
                  class=\"img-fluid rounded-circle w-75\"
                  src=\"";
        // line 887
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/team-3.jpg"), "html", null, true);
        echo "\"
                  alt=\"\"
                />
                <div class=\"team-text\">
                  <h3>Full Name</h3>
                  <p>Designation</p>
                  <div class=\"d-flex align-items-center\">
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-facebook-f\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-twitter\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-instagram\"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->

      <!-- Testimonial Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div
            class=\"text-center mx-auto mb-5 wow fadeInUp\"
            data-wow-delay=\"0.1s\"
            style=\"max-width: 600px\"
          >
            <h1 class=\"mb-3\">Our Clients Say!</h1>
            <p>
              Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
              dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
              rebum vero dolor duo.
            </p>
          </div>
          <div
            class=\"owl-carousel testimonial-carousel wow fadeInUp\"
            data-wow-delay=\"0.1s\"
          >
            <div class=\"testimonial-item bg-light rounded p-5\">
              <p class=\"fs-5\">
                Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                est kasd kasd erat eos
              </p>
              <div
                class=\"d-flex align-items-center bg-white me-n5\"
                style=\"border-radius: 50px 0 0 50px\"
              >
                <img
                  class=\"img-fluid flex-shrink-0 rounded-circle\"
                  src=\"";
        // line 943
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/testimonial-1.jpg"), "html", null, true);
        echo "\"
                  style=\"width: 90px; height: 90px\"
                />
                <div class=\"ps-3\">
                  <h3 class=\"mb-1\">Client Name</h3>
                  <span>Profession</span>
                </div>
                <i
                  class=\"fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex\"
                ></i>
              </div>
            </div>
            <div class=\"testimonial-item bg-light rounded p-5\">
              <p class=\"fs-5\">
                Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                est kasd kasd erat eos
              </p>
              <div
                class=\"d-flex align-items-center bg-white me-n5\"
                style=\"border-radius: 50px 0 0 50px\"
              >
                <img
                  class=\"img-fluid flex-shrink-0 rounded-circle\"
                  src=\"";
        // line 967
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/testimonial-2.jpg"), "html", null, true);
        echo "\"
                  style=\"width: 90px; height: 90px\"
                />
                <div class=\"ps-3\">
                  <h3 class=\"mb-1\">Client Name</h3>
                  <span>Profession</span>
                </div>
                <i
                  class=\"fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex\"
                ></i>
              </div>
            </div>
            <div class=\"testimonial-item bg-light rounded p-5\">
              <p class=\"fs-5\">
                Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                est kasd kasd erat eos
              </p>
              <div
                class=\"d-flex align-items-center bg-white me-n5\"
                style=\"border-radius: 50px 0 0 50px\"
              >
                <img
                  class=\"img-fluid flex-shrink-0 rounded-circle\"
                  src=\"";
        // line 991
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/testimonial-3.jpg"), "html", null, true);
        echo "\"
                  style=\"width: 90px; height: 90px\"
                />
                <div class=\"ps-3\">
                  <h3 class=\"mb-1\">Client Name</h3>
                  <span>Profession</span>
                </div>
                <i
                  class=\"fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex\"
                ></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->

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
                          src=\"";
        // line 1058
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-1.jpg"), "html", null, true);
        echo "\"
                          alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                          class=\"img-fluid rounded bg-light p-1\"
                          src=\"";
        // line 1065
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-2.jpg"), "html", null, true);
        echo "\"
                          alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                          class=\"img-fluid rounded bg-light p-1\"
                          src=\"";
        // line 1072
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-3.jpg"), "html", null, true);
        echo "\"
                          alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                          class=\"img-fluid rounded bg-light p-1\"
                          src=\"";
        // line 1079
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-4.jpg"), "html", null, true);
        echo "\"
                          alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                          class=\"img-fluid rounded bg-light p-1\"
                          src=\"";
        // line 1086
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-5.jpg"), "html", null, true);
        echo "\"
                          alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                          class=\"img-fluid rounded bg-light p-1\"
                          src=\"";
        // line 1093
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/img/classes-6.jpg"), "html", null, true);
        echo "\"
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
    <script src=\"";
        // line 1154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 1160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/User/js/main.js"), "html", null, true);
        echo "\"></script>
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
        return "Visiteur/home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1330 => 1160,  1324 => 1157,  1320 => 1156,  1316 => 1155,  1312 => 1154,  1248 => 1093,  1238 => 1086,  1228 => 1079,  1218 => 1072,  1208 => 1065,  1198 => 1058,  1128 => 991,  1101 => 967,  1074 => 943,  1015 => 887,  988 => 863,  961 => 839,  927 => 808,  795 => 679,  778 => 665,  733 => 623,  716 => 609,  671 => 567,  654 => 553,  609 => 511,  592 => 497,  547 => 455,  530 => 441,  486 => 400,  469 => 386,  418 => 338,  391 => 314,  381 => 307,  371 => 300,  351 => 283,  198 => 133,  163 => 101,  124 => 65,  95 => 39,  89 => 36,  83 => 33,  79 => 32,  55 => 11,  43 => 1,);
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
    <link href=\"{{ asset('asset/User/img/favicon.ico')}}\" rel=\"icon\" />

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
    <link href=\"{{ asset('asset/User/lib/animate/animate.min.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('asset/User/lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('asset/User/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('asset/User/css/style.css')}}\" rel=\"stylesheet\" />
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
        <a href=\"base.html.twig\" class=\"navbar-brand\">
          <img
                  src=\"{{ asset('asset/User/img/logo.png') }}\"
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
            <a href=\"#\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"#\" class=\"nav-item nav-link\">Products</a>
            <a href=\"#\" class=\"nav-item nav-link\">Courses</a>
            <a href=\"#\" class=\"nav-item nav-link\">About Us</a>
            <a href=\"#\" class=\"nav-item nav-link\">Contact Us</a>

            <a href=\"Store.html\" class=\"nav-item nav-link\"
              ><i class=\"fas fa-shopping-cart cart-icon\"></i
            ></a>
          </div>
          <a href=\"\" class=\"btn btn-primary rounded-pill px-3 d-none d-lg-block\"
            >Join Us<i class=\"fa fa-arrow-right ms-3\"></i
          ></a>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Carousel Start -->
      <div class=\"container-fluid p-0 mb-5\">
        <div class=\"owl-carousel header-carousel position-relative\">
          <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"{{ asset('asset/User/img/i1.jpg') }}\" alt=\"\" />
            <div
              class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\"
              style=\"background: rgba(0, 0, 0, 0.2)\"
            >
              <div class=\"container\">
                <div class=\"row justify-content-start\">
                  <div class=\"col-10 col-lg-8\">
                    <h1 class=\"display-2 text-white animated slideInDown mb-4\">
                      The best e-learning school for your Child
                    </h1>
                    <p class=\"fs-5 fw-medium text-white mb-4 pb-2\">
                      Vero elitr justo clita lorem. Ipsum dolor at sed stet sit
                      diam no. Kasd rebum ipsum et diam justo clita et kasd
                      rebum sea elitr.
                    </p>
                    <a
                      href=\"\"
                      class=\"btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft\"
                      >Learn More</a
                    >
                    <a
                      href=\"\"
                      class=\"btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight\"
                      >best Courses</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"{{ asset('asset/User/img/i1.2.png') }}\" alt=\"\" />
            <div
              class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\"
              style=\"background: rgba(0, 0, 0, 0.2)\"
            >
              <div class=\"container\">
                <div class=\"row justify-content-start\">
                  <div class=\"col-10 col-lg-8\">
                    <h1 class=\"display-2 text-white animated slideInDown mb-4\">
                      The best e-learning school for your Child
                    </h1>
                    <p class=\"fs-5 fw-medium text-white mb-4 pb-2\">
                      Vero elitr justo clita lorem. Ipsum dolor at sed stet sit
                      diam no. Kasd rebum ipsum et diam justo clita et kasd
                      rebum sea elitr.
                    </p>
                    <a
                      href=\"\"
                      class=\"btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft\"
                      >Learn More</a
                    >
                    <a
                      href=\"\"
                      class=\"btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight\"
                      >Our Classes</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel End -->

      <!-- Facilities Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div
            class=\"text-center mx-auto mb-5 wow fadeInUp\"
            data-wow-delay=\"0.1s\"
            style=\"max-width: 600px\"
          >
            <h1 class=\"mb-3\">Our Goals</h1>
            <p>
              Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
              dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
              rebum vero dolor duo.
            </p>
          </div>
          <div class=\"row g-4\">
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
              <div class=\"facility-item\">
                <div class=\"facility-icon bg-primary\">
                  <span class=\"bg-primary\"></span>
                  <i class=\"fa fa-chalkboard-teacher fa-3x text-primary\"></i>
                  <span class=\"bg-primary\"></span>
                </div>
                <div class=\"facility-text bg-primary\">
                  <h3 class=\"text-primary mb-3\">Make learning easier</h3>
                  <p class=\"mb-0\">
                    Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                    ipsum sit
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
              <div class=\"facility-item\">
                <div class=\"facility-icon bg-success\">
                  <span class=\"bg-success\"></span>
                  <i class=\"fa fa-chalkboard-teacher fa-3x text-success\"></i>
                  <span class=\"bg-success\"></span>
                </div>
                <div class=\"facility-text bg-success\">
                  <h3 class=\"text-success mb-3\">Make learning fun</h3>
                  <p class=\"mb-0\">
                    Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                    ipsum sit
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
              <div class=\"facility-item\">
                <div class=\"facility-icon bg-warning\">
                  <span class=\"bg-warning\"></span>
                  <i class=\"fa fa-chalkboard-teacher fa-3x text-warning\"></i>
                  <span class=\"bg-warning\"></span>
                </div>
                <div class=\"facility-text bg-warning\">
                  <h3 class=\"text-warning mb-3\">ensure Accesibility for all</h3>
                  <p class=\"mb-0\">
                    Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                    ipsum sit
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
              <div class=\"facility-item\">
                <div class=\"facility-icon bg-info\">
                  <span class=\"bg-info\"></span>
                  <i class=\"fa fa-chalkboard-teacher fa-3x text-info\"></i>
                  <span class=\"bg-info\"></span>
                </div>
                <div class=\"facility-text bg-info\">
                  <h3 class=\"text-info mb-3\">emphasize practice</h3>
                  <p class=\"mb-0\">
                    Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero
                    ipsum sit
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Facilities End -->

      <!-- About Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div class=\"row g-5 align-items-center\">
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
              <h1 class=\"mb-4\">
                Learn More About Our Work And Our Cultural Activities
              </h1>
              <p>
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              <p class=\"mb-4\">
                Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No
                stet est diam rebum amet diam ipsum. Clita clita labore, dolor
                duo nonumy clita sit at, sed sit sanctus dolor eos, ipsum labore
                duo duo sit no sea diam. Et dolor et kasd ea. Eirmod diam at
                dolor est vero nonumy magna.
              </p>
              <div class=\"row g-4 align-items-center\">
                <div class=\"col-sm-6\">
                  <a class=\"btn btn-primary rounded-pill py-3 px-5\" href=\"\"
                    >Read More</a
                  >
                </div>
                <div class=\"col-sm-6\">
                  <div class=\"d-flex align-items-center\">
                    <img
                      class=\"rounded-circle flex-shrink-0\"
                      src=\"{{ asset('asset/User/img/user.jpg') }}\"
                      alt=\"\"
                      style=\"width: 45px; height: 45px\"
                    />
                    <div class=\"ms-3\">
                      <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                      <small>CEO & Founder</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6 about-img wow fadeInUp\" data-wow-delay=\"0.5s\">
              <div class=\"row\">
                <div class=\"col-12 text-center\">
                  <img
                    class=\"img-fluid w-75 rounded-circle bg-light p-3\"
                    src=\"{{ asset('asset/User/img/f1.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-6 text-start\" style=\"margin-top: -150px\">
                  <img
                    class=\"img-fluid w-100 rounded-circle bg-light p-3\"
                    src=\"{{ asset('asset/User/img/i4.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"col-6 text-end\" style=\"margin-top: -150px\">
                  <img
                    class=\"img-fluid w-100 rounded-circle bg-light p-3\"
                    src=\"{{ asset('asset/User/img/i3.jpg') }}\"
                    alt=\"\"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

      <!-- Call To Action Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div class=\"bg-light rounded\">
            <div class=\"row g-0\">
              <div
                class=\"col-lg-6 wow fadeIn\"
                data-wow-delay=\"0.1s\"
                style=\"min-height: 400px\"
              >
                <div class=\"position-relative h-100\">
                  <img
                    class=\"position-absolute w-100 h-100 rounded\"
                    src=\"{{ asset('asset/User/img/i2.png') }}\"
                    style=\"object-fit: cover\"
                  />
                </div>
              </div>
              <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                <div
                  class=\"h-100 d-flex flex-column justify-content-center p-5\"
                >
                  <h1 class=\"mb-4\">Become A Teacher</h1>
                  <p class=\"mb-4\">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                    sit, sed stet lorem sit clita duo justo magna dolore erat
                    amet
                  </p>
                  <a class=\"btn btn-primary py-3 px-5\" href=\"\"
                    >Get Started Now<i class=\"fa fa-arrow-right ms-2\"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Call To Action End -->

      <!-- Classes Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div
            class=\"text-center mx-auto mb-5 wow fadeInUp\"
            data-wow-delay=\"0.1s\"
            style=\"max-width: 600px\"
          >
            <h1 class=\"mb-3\">Best Courses</h1>
            <p>
              Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
              dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
              rebum vero dolor duo.
            </p>
          </div>
          <div class=\"row g-4\">
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"{{ asset('asset/User/img/classes-1.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >Art & Drawing</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"{{ asset('asset/User/img/user.jpg') }}\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-warning pt-2\"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"{{ asset('asset/User/img/classes-2.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >Color Management</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"{{ asset('asset/User/img/user.jpg') }}\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-warning pt-2\">
                        <h6 class=\"text-warning mb-1\">Participant:</h6>
                        <small>30 Kids</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"{{ asset('asset/User/img/classes-3.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >Athletic & Dance</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"{{ asset('asset/User/img/user.jpg') }}\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-warning pt-2\">
                        <h6 class=\"text-warning mb-1\">Participant:</h6>
                        <small>30 Kids</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"{{ asset('asset/User/img/classes-4.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >Language & Speaking</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"{{ asset('asset/User/img/user.jpg') }}\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-warning pt-2\">
                        <h6 class=\"text-warning mb-1\">Participant:</h6>
                        <small>30 Kids</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"{{ asset('asset/User/img/classes-5.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >Religion & History</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"{{ asset('asset/User/img/user.jpg') }}\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-warning pt-2\">
                        <h6 class=\"text-warning mb-1\">Participant:</h6>
                        <small>30 Kids</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
              <div class=\"classes-item\">
                <div class=\"bg-light rounded-circle w-75 mx-auto p-3\">
                  <img
                    class=\"img-fluid rounded-circle\"
                    src=\"{{ asset('asset/User/img/classes-6.jpg') }}\"
                    alt=\"\"
                  />
                </div>
                <div class=\"bg-light rounded p-4 pt-5 mt-n5\">
                  <a class=\"d-block text-center h3 mt-3 mb-4\" href=\"\"
                    >General Knowledge</a
                  >
                  <div
                    class=\"d-flex align-items-center justify-content-between mb-4\"
                  >
                    <div class=\"d-flex align-items-center\">
                      <img
                        class=\"rounded-circle flex-shrink-0\"
                        src=\"{{ asset('asset/User/img/user.jpg') }}\"
                        alt=\"\"
                        style=\"width: 45px; height: 45px\"
                      />
                      <div class=\"ms-3\">
                        <h6 class=\"text-primary mb-1\">Jhon Doe</h6>
                        <small>Teacher</small>
                      </div>
                    </div>
                    <span
                      class=\"bg-primary text-white rounded-pill py-2 px-3\"
                      href=\"\"
                      >\$99</span
                    >
                  </div>
                  <div class=\"row g-1\">
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-primary pt-2\">
                        <h6 class=\"text-primary mb-1\">Age:</h6>
                        <small>3-5 Years</small>
                      </div>
                    </div>
                    <div class=\"col-4\">
                      <div
                        class=\"border-top border-3 border-success pt-2\"
                      ></div>
                    </div>
                    <div class=\"col-4\">
                      <div class=\"border-top border-3 border-warning pt-2\">
                        <h6 class=\"text-warning mb-1\">Participant:</h6>
                        <small>30 Kids</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Classes End -->

      <!-- Appointment Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div class=\"bg-light rounded\">
            <div class=\"row g-0\">
              <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                <div
                  class=\"h-100 d-flex flex-column justify-content-center p-5\"
                >
                  <h1 class=\"mb-4\">Make Appointment</h1>
                  <form>
                    <div class=\"row g-3\">
                      <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                          <input
                            type=\"text\"
                            class=\"form-control border-0\"
                            id=\"gname\"
                            placeholder=\"Gurdian Name\"
                          />
                          <label for=\"gname\">Gurdian Name</label>
                        </div>
                      </div>
                      <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                          <input
                            type=\"email\"
                            class=\"form-control border-0\"
                            id=\"gmail\"
                            placeholder=\"Gurdian Email\"
                          />
                          <label for=\"gmail\">Gurdian Email</label>
                        </div>
                      </div>
                      <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                          <input
                            type=\"text\"
                            class=\"form-control border-0\"
                            id=\"cname\"
                            placeholder=\"Child Name\"
                          />
                          <label for=\"cname\">Child Name</label>
                        </div>
                      </div>
                      <div class=\"col-sm-6\">
                        <div class=\"form-floating\">
                          <input
                            type=\"text\"
                            class=\"form-control border-0\"
                            id=\"cage\"
                            placeholder=\"Child Age\"
                          />
                          <label for=\"cage\">Child Age</label>
                        </div>
                      </div>
                      <div class=\"col-12\">
                        <div class=\"form-floating\">
                          <textarea
                            class=\"form-control border-0\"
                            placeholder=\"Leave a message here\"
                            id=\"message\"
                            style=\"height: 100px\"
                          ></textarea>
                          <label for=\"message\">Message</label>
                        </div>
                      </div>
                      <div class=\"col-12\">
                        <button
                          class=\"btn btn-primary w-100 py-3\"
                          type=\"submit\"
                        >
                          Submit
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div
                class=\"col-lg-6 wow fadeIn\"
                data-wow-delay=\"0.5s\"
                style=\"min-height: 400px\"
              >
                <div class=\"position-relative h-100\">
                  <img
                    class=\"position-absolute w-100 h-100 rounded\"
                    src=\"{{ asset('asset/User/img/appointment.jpg') }}\"
                    style=\"object-fit: cover\"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Appointment End -->

      <!-- Team Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div
            class=\"text-center mx-auto mb-5 wow fadeInUp\"
            data-wow-delay=\"0.1s\"
            style=\"max-width: 600px\"
          >
            <h1 class=\"mb-3\">Popular Teachers</h1>
            <p>
              Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
              dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
              rebum vero dolor duo.
            </p>
          </div>
          <div class=\"row g-4\">
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
              <div class=\"team-item position-relative\">
                <img
                  class=\"img-fluid rounded-circle w-75\"
                  src=\"{{ asset('asset/User/img/team-1.jpg') }}\"
                  alt=\"\"
                />
                <div class=\"team-text\">
                  <h3>Full Name</h3>
                  <p>Designation</p>
                  <div class=\"d-flex align-items-center\">
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-facebook-f\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-twitter\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-instagram\"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
              <div class=\"team-item position-relative\">
                <img
                  class=\"img-fluid rounded-circle w-75\"
                  src=\"{{ asset('asset/User/img/team-2.jpg') }}\"
                  alt=\"\"
                />
                <div class=\"team-text\">
                  <h3>Full Name</h3>
                  <p>Designation</p>
                  <div class=\"d-flex align-items-center\">
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-facebook-f\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-twitter\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-instagram\"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
              <div class=\"team-item position-relative\">
                <img
                  class=\"img-fluid rounded-circle w-75\"
                  src=\"{{ asset('asset/User/img/team-3.jpg') }}\"
                  alt=\"\"
                />
                <div class=\"team-text\">
                  <h3>Full Name</h3>
                  <p>Designation</p>
                  <div class=\"d-flex align-items-center\">
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-facebook-f\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-twitter\"></i
                    ></a>
                    <a class=\"btn btn-square btn-primary mx-1\" href=\"\"
                      ><i class=\"fab fa-instagram\"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->

      <!-- Testimonial Start -->
      <div class=\"container-xxl py-5\">
        <div class=\"container\">
          <div
            class=\"text-center mx-auto mb-5 wow fadeInUp\"
            data-wow-delay=\"0.1s\"
            style=\"max-width: 600px\"
          >
            <h1 class=\"mb-3\">Our Clients Say!</h1>
            <p>
              Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
              dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
              rebum vero dolor duo.
            </p>
          </div>
          <div
            class=\"owl-carousel testimonial-carousel wow fadeInUp\"
            data-wow-delay=\"0.1s\"
          >
            <div class=\"testimonial-item bg-light rounded p-5\">
              <p class=\"fs-5\">
                Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                est kasd kasd erat eos
              </p>
              <div
                class=\"d-flex align-items-center bg-white me-n5\"
                style=\"border-radius: 50px 0 0 50px\"
              >
                <img
                  class=\"img-fluid flex-shrink-0 rounded-circle\"
                  src=\"{{ asset('asset/User/img/testimonial-1.jpg') }}\"
                  style=\"width: 90px; height: 90px\"
                />
                <div class=\"ps-3\">
                  <h3 class=\"mb-1\">Client Name</h3>
                  <span>Profession</span>
                </div>
                <i
                  class=\"fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex\"
                ></i>
              </div>
            </div>
            <div class=\"testimonial-item bg-light rounded p-5\">
              <p class=\"fs-5\">
                Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                est kasd kasd erat eos
              </p>
              <div
                class=\"d-flex align-items-center bg-white me-n5\"
                style=\"border-radius: 50px 0 0 50px\"
              >
                <img
                  class=\"img-fluid flex-shrink-0 rounded-circle\"
                  src=\"{{ asset('asset/User/img/testimonial-2.jpg') }}\"
                  style=\"width: 90px; height: 90px\"
                />
                <div class=\"ps-3\">
                  <h3 class=\"mb-1\">Client Name</h3>
                  <span>Profession</span>
                </div>
                <i
                  class=\"fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex\"
                ></i>
              </div>
            </div>
            <div class=\"testimonial-item bg-light rounded p-5\">
              <p class=\"fs-5\">
                Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                est kasd kasd erat eos
              </p>
              <div
                class=\"d-flex align-items-center bg-white me-n5\"
                style=\"border-radius: 50px 0 0 50px\"
              >
                <img
                  class=\"img-fluid flex-shrink-0 rounded-circle\"
                  src=\"{{ asset('asset/User/img/testimonial-3.jpg') }}\"
                  style=\"width: 90px; height: 90px\"
                />
                <div class=\"ps-3\">
                  <h3 class=\"mb-1\">Client Name</h3>
                  <span>Profession</span>
                </div>
                <i
                  class=\"fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex\"
                ></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->

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
                          src=\"{{ asset('asset/User/img/classes-1.jpg') }}\"
                          alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                          class=\"img-fluid rounded bg-light p-1\"
                          src=\"{{ asset('asset/User/img/classes-2.jpg') }}\"
                          alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                          class=\"img-fluid rounded bg-light p-1\"
                          src=\"{{ asset('asset/User/img/classes-3.jpg') }}\"
                          alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                          class=\"img-fluid rounded bg-light p-1\"
                          src=\"{{ asset('asset/User/img/classes-4.jpg') }}\"
                          alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                          class=\"img-fluid rounded bg-light p-1\"
                          src=\"{{ asset('asset/User/img/classes-5.jpg') }}\"
                          alt=\"\"
                  />
                </div>
                <div class=\"col-4\">
                  <img
                          class=\"img-fluid rounded bg-light p-1\"
                          src=\"{{ asset('asset/User/img/classes-6.jpg') }}\"
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
    <script src=\"{{ asset('asset/User/lib/wow/wow.min.js')}}\"></script>
    <script src=\"{{ asset('asset/User/lib/easing/easing.min.js')}}\"></script>
    <script src=\"{{ asset('asset/User/lib/waypoints/waypoints.min.js')}}\"></script>
    <script src=\"{{ asset('asset/User/lib/owlcarousel/owl.carousel.min.js')}}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{ asset('asset/User/js/main.js')}}\"></script>
  </body>
</html>
", "Visiteur/home.html.twig", "C:\\Users\\hp\\Desktop\\pidev  projects\\MagicMinds\\templates\\Visiteur\\home.html.twig");
    }
}
