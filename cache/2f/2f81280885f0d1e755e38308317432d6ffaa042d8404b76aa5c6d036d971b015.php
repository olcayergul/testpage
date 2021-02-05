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

/* drawer.html */
class __TwigTemplate_d89bac1e7e6205dda0a49ea0d9488904501ee461edca6a309320faac372301e4 extends Template
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
        echo "    
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
    </nav>";
    }

    public function getTemplateName()
    {
        return "drawer.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    
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
    </nav>", "drawer.html", "C:\\xampp\\htdocs\\test\\views\\drawer.html");
    }
}
