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

/* navbar.html */
class __TwigTemplate_e46b7de4e0ba278fbb646eda76a2743086b65afe9201ffe24093c9cc4fb2a1ba extends Template
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
        echo "<header class=\"d-none d-sm-flex d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
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
";
    }

    public function getTemplateName()
    {
        return "navbar.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"d-none d-sm-flex d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
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
", "navbar.html", "C:\\xampp\\htdocs\\test\\views\\navbar.html");
    }
}
