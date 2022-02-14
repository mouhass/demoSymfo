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

/* myTemplates/inscription.html.twig */
class __TwigTemplate_6bb668f86a41bc3be651772f66d8a2ff1eb6487cb8aca16c3c9dff753f892a1c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "myTemplates/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inscription!";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">


";
        // line 9
        echo "            <div class=\"login-form bg-light mt-4 p-4\">
                <form method=\"post\" class=\"row g-3\">
                    <h1 class=\"h3 mb-3 font-weight-normal\">S'il vous plait fait inscrivez vous</h1>

                    <div class=\"col-12\">
                        <label for=\"inputUsername\">username</label>

                        <input type=\"text\" name=\"username\" id=\"inputUsername\" class=\"form-control\" required autofocus>
                    </div>

                    <div class=\"col-12\">
                        <label for=\"inputEmail\">Email</label>
                        <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                    </div>

                    <div class=\"col-12\">
                        <label for=\"inputPassword\">Password</label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
                    </div>

                    <div class=\"col-12\">
                        <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Home");
        echo "\">
                        <button class=\"btn btn-lg btn-primary float-end\" type=\"submit\">
                           Confirmer
                        </button>
                        </a>

                    </div>
                </form>
                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Login");
        echo "\">
                    retourner à l'inscription
                </a>
                <br>
                <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message");
        echo "\">
                    Afficher le message
                </a>
            </div>


        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "myTemplates/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 42,  98 => 38,  87 => 30,  64 => 9,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "myTemplates/inscription.html.twig", "C:\\wamp64\\www\\projectSymfony\\oldVersion\\projetSymfony\\templates\\myTemplates\\inscription.html.twig");
    }
}
