<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* sidebar.html.twig */
class __TwigTemplate_d5d80c398f98fb5e641f96b93cadbe30 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        yield "<section id=\"sidebar\">
\t<div id=\"logo\" class=\"text-center\">
\t\t<img src=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-white.png"), "html", null, true);
        yield "\" alt=\"GYH logo\">
\t</div>
\t<div class=\"menu\">
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_index");
        yield "\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1\">
\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-10 col-lg-10 col-md-10 col-sm-11\">
\t\t\t\t\t\t\t<span>Projets</span>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clients_index");
        yield "\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1\">
\t\t\t\t\t\t\t<i class=\"fas fa-cogs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-10 col-lg-10 col-md-10 col-sm-11\">
\t\t\t\t\t\t\t<span>Clients</span>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sidebar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  75 => 20,  60 => 8,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"sidebar\">
\t<div id=\"logo\" class=\"text-center\">
\t\t<img src=\"{{ asset('assets/img/logo-white.png') }}\" alt=\"GYH logo\">
\t</div>
\t<div class=\"menu\">
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('projets_index') }}\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1\">
\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-10 col-lg-10 col-md-10 col-sm-11\">
\t\t\t\t\t\t\t<span>Projets</span>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('clients_index') }}\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1\">
\t\t\t\t\t\t\t<i class=\"fas fa-cogs\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-10 col-lg-10 col-md-10 col-sm-11\">
\t\t\t\t\t\t\t<span>Clients</span>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</section>
", "sidebar.html.twig", "/Users/theoalanore/Documents/GitHub/GYH_App/templates/sidebar.html.twig");
    }
}
