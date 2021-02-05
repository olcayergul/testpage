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
class __TwigTemplate_67df8f45b7d7ad2d25527418b8dae49c806688b9add1e004503218d7fb3a75c0 extends Template
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
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meta_tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["meta_tag"]) {
            // line 5
            echo "    <meta charset=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meta_tag"], "charset", [], "any", false, false, false, 5), "html", null, true);
            echo "\">
    <meta name=\"viewport\" content=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meta_tag"], "viewport", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
    <meta name=\"description\" content=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meta_tag"], "description", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
    <meta name=\"author\" content=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meta_tag"], "author", [], "any", false, false, false, 8), "html", null, true);
            echo "\">    
    <title>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["meta_tag"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</title>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta_tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/pricing/\">
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
        return array (  71 => 11,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    {% for meta_tag in meta_tags %}
    <meta charset=\"{{ meta_tag.charset }}\">
    <meta name=\"viewport\" content=\"{{ meta_tag.viewport }}\">
    <meta name=\"description\" content=\"{{ meta_tag.description }}\">
    <meta name=\"author\" content=\"{{ meta_tag.author }}\">    
    <title>{{ meta_tag.title }}</title>
    {% endfor %}
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


", "head.html", "C:\\xampp\\htdocs\\test\\views\\head.html");
    }
}
