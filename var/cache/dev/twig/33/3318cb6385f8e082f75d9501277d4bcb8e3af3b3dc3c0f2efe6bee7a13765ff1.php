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

/* pages/editer.html.twig */
class __TwigTemplate_2b235b2b6a02770fcd671771f4288e87e860a6ebf9d48e9a3206acd00f7227f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/editer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/editer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container mt-4\">
        <h1>Editer les biens</h1>
                ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["propertyForm"]) || array_key_exists("propertyForm", $context) ? $context["propertyForm"] : (function () { throw new RuntimeError('Variable "propertyForm" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col-md-4\">";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propertyForm"]) || array_key_exists("propertyForm", $context) ? $context["propertyForm"] : (function () { throw new RuntimeError('Variable "propertyForm" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), 'row');
        echo "</div>
                    <div class=\"col-md-4\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propertyForm"]) || array_key_exists("propertyForm", $context) ? $context["propertyForm"] : (function () { throw new RuntimeError('Variable "propertyForm" does not exist.', 8, $this->source); })()), "surface", [], "any", false, false, false, 8), 'row');
        echo "</div>
                    <div class=\"col-md-4\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propertyForm"]) || array_key_exists("propertyForm", $context) ? $context["propertyForm"] : (function () { throw new RuntimeError('Variable "propertyForm" does not exist.', 9, $this->source); })()), "price", [], "any", false, false, false, 9), 'row');
        echo "</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propertyForm"]) || array_key_exists("propertyForm", $context) ? $context["propertyForm"] : (function () { throw new RuntimeError('Variable "propertyForm" does not exist.', 12, $this->source); })()), "rooms", [], "any", false, false, false, 12), 'row');
        echo "</div>
                    <div class=\"col-md-4\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propertyForm"]) || array_key_exists("propertyForm", $context) ? $context["propertyForm"] : (function () { throw new RuntimeError('Variable "propertyForm" does not exist.', 13, $this->source); })()), "bedrooms", [], "any", false, false, false, 13), 'row');
        echo "</div>
                    <div class=\"col-md-4\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propertyForm"]) || array_key_exists("propertyForm", $context) ? $context["propertyForm"] : (function () { throw new RuntimeError('Variable "propertyForm" does not exist.', 14, $this->source); })()), "floor", [], "any", false, false, false, 14), 'row');
        echo "</div>
                </div>


                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["propertyForm"]) || array_key_exists("propertyForm", $context) ? $context["propertyForm"] : (function () { throw new RuntimeError('Variable "propertyForm" does not exist.', 18, $this->source); })()), 'widget');
        echo "


                <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["propertyForm"]) || array_key_exists("propertyForm", $context) ? $context["propertyForm"] : (function () { throw new RuntimeError('Variable "propertyForm" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js\"></script>
    <script>\$('select').select2();</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 33,  133 => 32,  125 => 29,  118 => 28,  106 => 22,  99 => 18,  92 => 14,  88 => 13,  84 => 12,  78 => 9,  74 => 8,  70 => 7,  65 => 5,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container mt-4\">
        <h1>Editer les biens</h1>
                {{ form_start(propertyForm) }}
                <div class=\"row\">
                    <div class=\"col-md-4\">{{ form_row(propertyForm.title) }}</div>
                    <div class=\"col-md-4\">{{ form_row(propertyForm.surface) }}</div>
                    <div class=\"col-md-4\">{{ form_row(propertyForm.price) }}</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">{{ form_row(propertyForm.rooms) }}</div>
                    <div class=\"col-md-4\">{{ form_row(propertyForm.bedrooms) }}</div>
                    <div class=\"col-md-4\">{{ form_row(propertyForm.floor) }}</div>
                </div>


                {{ form_widget(propertyForm) }}


                <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                {{ form_end(propertyForm) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css\" rel=\"stylesheet\">
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js\"></script>
    <script>\$('select').select2();</script>
{% endblock %}", "pages/editer.html.twig", "C:\\wamp64\\www\\projectSymfony\\oldVersion\\projetSymfony\\templates\\pages\\editer.html.twig");
    }
}
