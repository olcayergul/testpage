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

/* footer.html */
class __TwigTemplate_0dfc58861afe0198f71b1b2f2bc4b5808edb8c677b84a6e049fc709fc7719508 extends Template
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
        echo "<footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
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
  </footer>";
    }

    public function getTemplateName()
    {
        return "footer.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
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
  </footer>", "footer.html", "C:\\xampp\\htdocs\\test\\views\\footer.html");
    }
}
