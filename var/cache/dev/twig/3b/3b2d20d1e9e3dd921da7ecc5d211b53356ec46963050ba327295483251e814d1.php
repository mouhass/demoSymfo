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

/* pages/home.html.twig */
class __TwigTemplate_f0cc2ce85b19cf31d737907b3c2ab053aba1f8cdddd896da2eaddc04c2f7ed3b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Agence Lorem Ipsume";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <div style=\"background-color: #D3D3D3\">
         <div class=\"container\">
             <div class=\"jumbotron text-center\" >
                 <h1>Agence Lorem Ipsume</h1>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                     ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                     not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                     1960s with the
                 </p>
             </div>
         </div>
     </div>


<div class=\"container mt-5\">
    <h1>Les derniers biens</h1>
    <div class=\"row flex \">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["propriety"]) || array_key_exists("propriety", $context) ? $context["propriety"] : (function () { throw new RuntimeError('Variable "propriety" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prop"]) {
            // line 22
            echo "        <div class=\"col-3\">
            <div class=\"card mt-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, $context["prop"], "id", [], "any", false, false, false, 26), "slug" => twig_get_attribute($this->env, $this->source, $context["prop"], "slug", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
                    </h5>
                   <p class=\"card-text\">
                       ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop"], "city", [], "any", false, false, false, 29), "html", null, true);
            echo "
                   </p>
                    <div class=\"text-primary\" style=\"font-weight: bold; font-size: 2rem\">
                        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prop"], "price", [], "any", false, false, false, 32), "html", null, true);
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
        // line 38
        echo "    </div>

</div>



 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  116 => 32,  110 => 29,  102 => 26,  96 => 22,  92 => 21,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title 'Agence Lorem Ipsume' %}
 {% block body %}
     <div style=\"background-color: #D3D3D3\">
         <div class=\"container\">
             <div class=\"jumbotron text-center\" >
                 <h1>Agence Lorem Ipsume</h1>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                     ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                     not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                     1960s with the
                 </p>
             </div>
         </div>
     </div>


<div class=\"container mt-5\">
    <h1>Les derniers biens</h1>
    <div class=\"row flex \">
        {% for prop in propriety %}
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

</div>



 {% endblock %}", "pages/home.html.twig", "C:\\wamp64\\www\\projectSymfony\\oldVersion\\projetSymfony\\templates\\pages\\home.html.twig");
    }
}
