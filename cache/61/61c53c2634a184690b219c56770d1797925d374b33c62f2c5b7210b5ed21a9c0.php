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

/* body.html */
class __TwigTemplate_01315c3475b8c54cbabf01b1674ea57acb59092ee1c67efd7f88f54eaa6cd689 extends Template
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
        echo "<body>

    <header class=\"d-none d-sm-flex d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
      <p class=\"h5 my-0 me-md-auto fw-normal\">Company name</p>
    
      <div class=\"dropdown megamenu\">
        <a class=\"btn btn-secondary dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          Dropdown link
        </a>
      
        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
          <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
          <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
    
    
          
        </ul>
      </div>
      <nav class=\"my-2 my-md-0 me-md-3\">
        <a class=\"p-2 text-dark\" href=\"#\">Features</a>
        <a class=\"p-2 text-dark\" href=\"#\">Enterprise</a>
        <a class=\"p-2 text-dark\" href=\"#\">Support</a>
        <a class=\"p-2 text-dark\" href=\"#\">Pricing</a>
      </nav>
      <a class=\"btn btn-outline-primary\" href=\"#\">Sign up</a>
    </header>
    
    
    
    <div class=\"collapse d-sm-none\" id=\"navbarToggleExternalContent\">
      <div class=\"bg-dark p-4\">
        <nav class=\"my-2 my-md-0 me-md-3 navbar-text\">
          <ul class=\"list-group\">
            <li class=\"list-group-item\"> <a href=\"#\" class=\"link-light\">Features</a></li>
            <li class=\"list-group-item\"> <a href=\"#\" class=\"link-light\">Enterprise</a></li>
            <li class=\"list-group-item\"> <a href=\"#\" class=\"link-light\">Support</a></li>
            <li class=\"list-group-item\"> <a href=\"#\" class=\"link-light\">Pricing</a></li>
            <li class=\"list-group-item\"> <a href=\"#\" class=\"link-light\">Sign Up</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <nav class=\"navbar navbar-dark bg-dark d-sm-none\">
      <div class=\"container-fluid\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>
    </nav>
    
    
    
    <main class=\"container\">
      <div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
        <h1 class=\"display-4\">Pricing</h1>
        <p class=\"lead\">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
      </div>
    
        <!-- carousel -->
    
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
       <!-- carousel -->
    
      <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
        <div class=\"row\">
          <div class=\"col-12 col-md\">
            <img class=\"mb-2\" href=\"https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg\" alt=\"\" width=\"24\" height=\"19\">
            <small class=\"d-block mb-3 text-muted\">&copy; 2017-2021</small>
          </div>
          <div class=\"col-6 col-md\">
            <h5>Features</h5>
            <ul class=\"list-unstyled text-small\">
              <li><a class=\"link-secondary\" href=\"#\">Cool stuff</a></li>
              <li><a class=\"link-secondary\" href=\"#\">Random feature</a></li>
              <li><a class=\"link-secondary\" href=\"#\">Team feature</a></li>
              <li><a class=\"link-secondary\" href=\"#\">Stuff for developers</a></li>
              <li><a class=\"link-secondary\" href=\"#\">Another one</a></li>
              <li><a class=\"link-secondary\" href=\"#\">Last time</a></li>
            </ul>
          </div>
          <div class=\"col-6 col-md\">
            <h5>Resources</h5>
            <ul class=\"list-unstyled text-small\">
              <li><a class=\"link-secondary\" href=\"#\">Resource</a></li>
              <li><a class=\"link-secondary\" href=\"#\">Resource name</a></li>
              <li><a class=\"link-secondary\" href=\"#\">Another resource</a></li>
              <li><a class=\"link-secondary\" href=\"#\">Final resource</a></li>
            </ul>
          </div>
          <div class=\"col-6 col-md\">
            <h5>About</h5>
            <ul class=\"list-unstyled text-small\">
              <li><a class=\"link-secondary\" href=\"#\">Team</a></li>
              <li><a class=\"link-secondary\" href=\"#\">Locations</a></li>
              <li><a class=\"link-secondary\" href=\"#\">Privacy</a></li>
              <li><a class=\"link-secondary\" href=\"#\">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </main>
    
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\" integrity=\"sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW\" crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    
     <script>
    
    \$( \"#signfree\" ).click(function() {
      \$( \".jokes-here\" ).empty();
      \$.get( \"https://jokeapi.dev/joke/Any?format=txt&type=single&blacklistFlags=nsfw,racist,sexist&lang=en\", { categories: \"Programming\" } )
      .done(function( data ) {
        \$( \".jokes-here\" ).html( data );
      
      });
    });
    
    
    \$( \"#getstarted\" ).click(function() {
      \$( \".jokes-here\" ).empty();
      \$.get( \"https://jokeapi.dev/joke/Any?format=txt&type=single&blacklistFlags=nsfw,racist,sexist&lang=en\", { categories: \"Christmas\" } )
      .done(function( data ) {
        \$( \".jokes-here\" ).html( data );
      
      });
    });
    
    \$( \"#contactus\" ).click(function() {
      \$( \".jokes-here\" ).empty();
      \$.get( \"https://jokeapi.dev/joke/Any?format=txt&type=single&blacklistFlags=nsfw,racist,sexist&lang=en\", { categories: \"Dark\" } )
      .done(function( data ) {
        \$( \".jokes-here\" ).html( data );
      
      });
    });
    
    
     
     </script>
      </body>
    </html>
    ";
    }

    public function getTemplateName()
    {
        return "body.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "body.html", "C:\\xampp\\htdocs\\test\\views\\body.html");
    }
}
