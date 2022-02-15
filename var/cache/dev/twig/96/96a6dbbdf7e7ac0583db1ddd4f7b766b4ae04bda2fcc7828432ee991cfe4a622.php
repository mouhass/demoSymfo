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

/* pages/detailsProperty.html.twig */
class __TwigTemplate_be393fddf5652db1b276d6883fdb1bd232486d67d9d92e467bc3b686ac4cf012 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/detailsProperty.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/detailsProperty.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les details";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\" >
            <div class=\"col-md-8\">
               <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/myhouse.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-4\">
                 <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriety"]) || array_key_exists("propriety", $context) ? $context["propriety"] : (function () { throw new RuntimeError('Variable "propriety" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
                <h1>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriety"]) || array_key_exists("propriety", $context) ? $context["propriety"] : (function () { throw new RuntimeError('Variable "propriety" does not exist.', 12, $this->source); })()), "rooms", [], "any", false, false, false, 12), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriety"]) || array_key_exists("propriety", $context) ? $context["propriety"] : (function () { throw new RuntimeError('Variable "propriety" does not exist.', 12, $this->source); })()), "surface", [], "any", false, false, false, 12), "html", null, true);
        echo " m²</h1>
                <div class=\"text-primary\" style=\"font-size: 4em;font-weight: bold\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriety"]) || array_key_exists("propriety", $context) ? $context["propriety"] : (function () { throw new RuntimeError('Variable "propriety" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14), "html", null, true);
        echo " €
                </div>
                <a href=\"#\" class=\"btn btn-primary\">Contacter l'agence</a>
            </div>
        </div>

        <p>
            ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriety"]) || array_key_exists("propriety", $context) ? $context["propriety"] : (function () { throw new RuntimeError('Variable "propriety" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        echo "
        </p>

        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Les caractéristiques de cette maison</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface</td>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriety"]) || array_key_exists("propriety", $context) ? $context["propriety"] : (function () { throw new RuntimeError('Variable "propriety" does not exist.', 30, $this->source); })()), "surface", [], "any", false, false, false, 30), "html", null, true);
        echo " m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriety"]) || array_key_exists("propriety", $context) ? $context["propriety"] : (function () { throw new RuntimeError('Variable "propriety" does not exist.', 34, $this->source); })()), "rooms", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>

                    </tr>

                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriety"]) || array_key_exists("propriety", $context) ? $context["propriety"] : (function () { throw new RuntimeError('Variable "propriety" does not exist.', 40, $this->source); })()), "bedrooms", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propriety"]) || array_key_exists("propriety", $context) ? $context["propriety"] : (function () { throw new RuntimeError('Variable "propriety" does not exist.', 44, $this->source); })()), "floor", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/detailsProperty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 44,  133 => 40,  124 => 34,  117 => 30,  105 => 21,  95 => 14,  88 => 12,  84 => 11,  78 => 8,  73 => 5,  66 => 4,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Les details{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\" >
            <div class=\"col-md-8\">
               <img src=\"{{ asset('images/myhouse.jpg') }}\">
            </div>
            <div class=\"col-md-4\">
                 <h1>{{ propriety.title }}</h1>
                <h1>{{ propriety.rooms }} pièces - {{ propriety.surface }} m²</h1>
                <div class=\"text-primary\" style=\"font-size: 4em;font-weight: bold\">
                    {{ propriety.price }} €
                </div>
                <a href=\"#\" class=\"btn btn-primary\">Contacter l'agence</a>
            </div>
        </div>

        <p>
            {{ propriety.description }}
        </p>

        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Les caractéristiques de cette maison</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface</td>
                        <td>{{ propriety.surface }} m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ propriety.rooms }}</td>

                    </tr>

                    <tr>
                        <td>Chambres</td>
                        <td>{{ propriety.bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{ propriety.floor }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "pages/detailsProperty.html.twig", "C:\\wamp64\\www\\projectSymfony\\oldVersion\\projetSymfony\\templates\\pages\\detailsProperty.html.twig");
    }
}
