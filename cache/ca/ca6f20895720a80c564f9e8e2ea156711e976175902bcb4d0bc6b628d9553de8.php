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

/* carousel.html */
class __TwigTemplate_9136a252f88439e75aaaace0836fca29b0a523a2fcfd272d0a46a098eb420a52 extends Template
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
        // line 1
        echo "     <!-- carousel -->
    
     <div id=\"carouselExampleDark\" class=\"carousel carousel-dark slide col-12\" data-bs-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"0\" class=\"active\"></li>
          <li data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"1\"></li>
          <li data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"2\"></li>
        </ol>
    
        <div class=\"carousel-inner \">
          <div class=\"carousel-item active\" data-bs-interval=\"10000\">
            <div class=\"\">
              <div class=\"card mb-4 shadow-sm\">
              <div class=\"card-header\">
                <h4 class=\"my-0 fw-normal\">Free</h4>
              </div>
              <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$0 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                  <li>10 users included</li>
                  <li>2 GB of storage</li>
                  <li>Email support</li>
                  <li>Help center access</li>
                </ul>
                <button type=\"button\" class=\"w-100 btn btn-lg btn-outline-primary\" id=\"signfree\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Sign up for free</button>
              </div>
            </div>
            </div>
          </div>
    
          <!-- Modal -->
    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Here a joke for you!</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body jokes-here\">
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    
          <div class=\"carousel-item\" data-bs-interval=\"2000\">
            <div class=\"\">
              <div class=\"card mb-4 shadow-sm\">
              <div class=\"card-header\">
                <h4 class=\"my-0 fw-normal\">Pro</h4>
              </div>
              <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$15 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                  <li>20 users included</li>
                  <li>10 GB of storage</li>
                  <li>Priority email support</li>
                  <li>Help center access</li>
                </ul>
                <button type=\"button\"  id=\"getstarted\" class=\"w-100 btn btn-lg btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Get started</button>
              </div>
            </div>
            </div>
          </div>
    
    
    
          <div class=\"carousel-item\">
            <div class=\"\">
              <div class=\"card mb-4 shadow-sm\">
              <div class=\"card-header\">
                <h4 class=\"my-0 fw-normal\">Enterprise</h4>
              </div>
              <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$29 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                  <li>30 users included</li>
                  <li>15 GB of storage</li>
                  <li>Phone and email support</li>
                  <li>Help center access</li>
                </ul>
                <button type=\"button\" class=\"w-100 btn btn-lg btn-primary\" id=\"contactus\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Contact us</button>
              </div>
            </div>
            </div>
          </div>
        </div>
    
    
        <a class=\"carousel-control-prev\" href=\"#carouselExampleDark\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleDark\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Next</span>
        </a>
      </div>
       <!-- carousel -->";
    }

    public function getTemplateName()
    {
        return "carousel.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("     <!-- carousel -->
    
     <div id=\"carouselExampleDark\" class=\"carousel carousel-dark slide col-12\" data-bs-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"0\" class=\"active\"></li>
          <li data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"1\"></li>
          <li data-bs-target=\"#carouselExampleDark\" data-bs-slide-to=\"2\"></li>
        </ol>
    
        <div class=\"carousel-inner \">
          <div class=\"carousel-item active\" data-bs-interval=\"10000\">
            <div class=\"\">
              <div class=\"card mb-4 shadow-sm\">
              <div class=\"card-header\">
                <h4 class=\"my-0 fw-normal\">Free</h4>
              </div>
              <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$0 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                  <li>10 users included</li>
                  <li>2 GB of storage</li>
                  <li>Email support</li>
                  <li>Help center access</li>
                </ul>
                <button type=\"button\" class=\"w-100 btn btn-lg btn-outline-primary\" id=\"signfree\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Sign up for free</button>
              </div>
            </div>
            </div>
          </div>
    
          <!-- Modal -->
    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Here a joke for you!</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          <div class=\"modal-body jokes-here\">
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    
          <div class=\"carousel-item\" data-bs-interval=\"2000\">
            <div class=\"\">
              <div class=\"card mb-4 shadow-sm\">
              <div class=\"card-header\">
                <h4 class=\"my-0 fw-normal\">Pro</h4>
              </div>
              <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$15 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                  <li>20 users included</li>
                  <li>10 GB of storage</li>
                  <li>Priority email support</li>
                  <li>Help center access</li>
                </ul>
                <button type=\"button\"  id=\"getstarted\" class=\"w-100 btn btn-lg btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Get started</button>
              </div>
            </div>
            </div>
          </div>
    
    
    
          <div class=\"carousel-item\">
            <div class=\"\">
              <div class=\"card mb-4 shadow-sm\">
              <div class=\"card-header\">
                <h4 class=\"my-0 fw-normal\">Enterprise</h4>
              </div>
              <div class=\"card-body\">
                <h1 class=\"card-title pricing-card-title\">\$29 <small class=\"text-muted\">/ mo</small></h1>
                <ul class=\"list-unstyled mt-3 mb-4\">
                  <li>30 users included</li>
                  <li>15 GB of storage</li>
                  <li>Phone and email support</li>
                  <li>Help center access</li>
                </ul>
                <button type=\"button\" class=\"w-100 btn btn-lg btn-primary\" id=\"contactus\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Contact us</button>
              </div>
            </div>
            </div>
          </div>
        </div>
    
    
        <a class=\"carousel-control-prev\" href=\"#carouselExampleDark\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleDark\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Next</span>
        </a>
      </div>
       <!-- carousel -->", "carousel.html", "C:\\xampp\\htdocs\\test\\views\\carousel.html");
    }
}
