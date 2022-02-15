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

/* pages/gererProp.html.twig */
class __TwigTemplate_f71dec7e0f488268fd0f58f6dbb65dfd8248649848227017935e4819ed197ca6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/gererProp.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/gererProp.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gérer tous les produits";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container mt-4\">

        <h1>Mes produits</h1>
        <div class=\"row\">
            <div class=\" col-md-9 \">
                <table class=\"table table-striped mt-4\">
                    <tr>
                        <td style=\"font-weight: bold;\">Id </td>
                        <td style=\"font-weight: bold;\">Title</td>
                        <td></td>
                    </tr>
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["propriety"]) || array_key_exists("propriety", $context) ? $context["propriety"] : (function () { throw new RuntimeError('Variable "propriety" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prop"]) {
            // line 16
            echo "                        <tr>
                            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                            <td> <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminPropGereID", ["id" => twig_get_attribute($this->env, $this->source, $context["prop"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Update </a>
                                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleted", ["id" => twig_get_attribute($this->env, $this->source, $context["prop"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete </a>
                            </td>

                        </tr>



                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
                </table>
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CreateNewProperty");
        echo "\" class=\"btn btn-primary\">Créer un nouveau bien</a>

            </div>


        </div>


    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/gererProp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 30,  119 => 28,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  90 => 16,  86 => 15,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title 'Gérer tous les produits' %}
{% block body %}
    <div class=\"container mt-4\">

        <h1>Mes produits</h1>
        <div class=\"row\">
            <div class=\" col-md-9 \">
                <table class=\"table table-striped mt-4\">
                    <tr>
                        <td style=\"font-weight: bold;\">Id </td>
                        <td style=\"font-weight: bold;\">Title</td>
                        <td></td>
                    </tr>
                    {% for prop in propriety %}
                        <tr>
                            <td>{{ prop.id }}</td>
                            <td>{{ prop.title }}</td>
                            <td> <a href=\"{{ path('AdminPropGereID',{id:prop.id}) }}\" class=\"btn btn-primary\">Update </a>
                                <a href=\"{{ path('deleted',{id:prop.id}) }}\" class=\"btn btn-danger\">Delete </a>
                            </td>

                        </tr>



                    {% endfor %}

                </table>
                <a href=\"{{ path('CreateNewProperty') }}\" class=\"btn btn-primary\">Créer un nouveau bien</a>

            </div>


        </div>


    </div>
{% endblock %}", "pages/gererProp.html.twig", "C:\\wamp64\\www\\projectSymfony\\oldVersion\\projetSymfony\\templates\\pages\\gererProp.html.twig");
    }
}
