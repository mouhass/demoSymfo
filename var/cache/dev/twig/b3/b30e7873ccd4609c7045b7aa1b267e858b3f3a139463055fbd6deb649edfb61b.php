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

/* property/index.html.twig */
class __TwigTemplate_9020ba0c345c15318f9e2648fc36773f53ea812bf44abb35b0fbe5e5beb58423 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tous nos produits";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container mt-4\">
        <div class=\"jumbotron\">
            <div class=\"container\">
                ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col-md-4\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "maxPrice", [], "any", false, false, false, 9), 'row');
        echo "</div>
                    <div class=\"col-md-4\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "minSurface", [], "any", false, false, false, 10), 'row');
        echo "</div>
                    <div class=\"col-md-4\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "submit", [], "any", false, false, false, 11), 'row');
        echo "</div>
                </div>
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>

        <h1>Les produits</h1>

    <div class=\"row flex \">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prop"]) {
            // line 21
            echo "            <div class=\"col-3\">
                <div class=\"card mt-3\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, $context["prop"], "id", [], "any", false, false, false, 25), "slug" => twig_get_attribute($this->env, $this->source, $context["prop"], "slug", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</a>
                        </h5>
                        <p class=\"card-text\">
                            ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop"], "city", [], "any", false, false, false, 28), "html", null, true);
            echo "
                        </p>
                        <div class=\"text-primary\" style=\"font-weight: bold; font-size: 2rem\">
                            ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop"], "price", [], "any", false, false, false, 31), "html", null, true);
            echo " €
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>

    <div class=\"navigation mt-5\">
        ";
        // line 40
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()));
        echo "
    </div>

    <br>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "property/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  142 => 37,  130 => 31,  124 => 28,  116 => 25,  110 => 21,  106 => 20,  96 => 13,  91 => 11,  87 => 10,  83 => 9,  78 => 7,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title 'Tous nos produits' %}
{% block body %}
<div class=\"container mt-4\">
        <div class=\"jumbotron\">
            <div class=\"container\">
                {{ form_start(form) }}
                <div class=\"row\">
                    <div class=\"col-md-4\">{{ form_row(form.maxPrice) }}</div>
                    <div class=\"col-md-4\">{{ form_row(form.minSurface) }}</div>
                    <div class=\"col-md-4\">{{ form_row(form.submit) }}</div>
                </div>
                {{ form_end(form) }}
            </div>
        </div>

        <h1>Les produits</h1>

    <div class=\"row flex \">
        {% for prop in product %}
            <div class=\"col-3\">
                <div class=\"card mt-3\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            <a href=\"{{ path('property.show',{id:prop.id,slug: prop.slug}) }}\">{{ prop.title }}</a>
                        </h5>
                        <p class=\"card-text\">
                            {{ prop.city }}
                        </p>
                        <div class=\"text-primary\" style=\"font-weight: bold; font-size: 2rem\">
                            {{ prop.price }} €
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <div class=\"navigation mt-5\">
        {{ knp_pagination_render(product) }}
    </div>

    <br>
</div>
{% endblock %}", "property/index.html.twig", "C:\\wamp64\\www\\projectSymfony\\oldVersion\\projetSymfony\\templates\\property\\index.html.twig");
    }
}
