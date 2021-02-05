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

/* head.html */
class __TwigTemplate_3ed39d908434555d75de100d6ac2fc71dc942fee443146a09d13c4244dbc9275 extends Template
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
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta_tags"] ?? null), "charset", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta_tags"] ?? null), "viewport", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta_tags"] ?? null), "description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta_tags"] ?? null), "author", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"generator\" content=\"Hugo 0.79.0\">

    <title>Pricing example · Bootstrap v5.sssss0</title>
    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/pricing/\">
    <link href=\"https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
    <link rel=\"apple-touch-icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
    <link rel=\"manifest\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json\">
    <link rel=\"mask-icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg\" color=\"#7952b3\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico\">
    <meta name=\"theme-color\" content=\"#7952b3\">
    <link href=\"https://getbootstrap.com/docs/5.0/examples/pricing/pricing.css\" rel=\"stylesheet\">
    <link href=\"css/style.css\" rel=\"stylesheet\">
  </head>


";
    }

    public function getTemplateName()
    {
        return "head.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "head.html", "C:\\xampp\\htdocs\\test\\views\\head.html");
    }
}
