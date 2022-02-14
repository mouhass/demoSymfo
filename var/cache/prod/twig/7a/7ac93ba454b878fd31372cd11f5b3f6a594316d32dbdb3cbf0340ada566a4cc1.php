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

/* myTemplates/login.html.twig */
class __TwigTemplate_223896d79e4b664a8fd8212768f34db8c0afc9bd7475f7466731624aaaaa9e63 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "myTemplates/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log In!";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"login-form bg-light mt-4 p-4\">
                <form method=\"post\" class=\"row g-3\">
                    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                    <div class=\"col-12\">
                        <label for=\"inputEmail\">Email</label>
                        <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                    </div>
                    <div class=\"col-12\">
                        <label for=\"inputPassword\">Password</label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
                    </div>
                    <div class=\"col-12\">
                        <button class=\"btn btn-lg btn-primary float-end\" type=\"submit\" >
                            Sign in
                        </button>

                    </div>
                </form>
                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">
                    Create new account
                </a>
            </div>


        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "myTemplates/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "myTemplates/login.html.twig", "C:\\wamp64\\www\\projectSymfony\\oldVersion\\projetSymfony\\templates\\myTemplates\\login.html.twig");
    }
}
