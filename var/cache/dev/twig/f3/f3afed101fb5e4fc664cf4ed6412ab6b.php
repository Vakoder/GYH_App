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

/* projets/index.html.twig */
class __TwigTemplate_1c378eb1f067146e74d12b189e5a9b42 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projets/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projets/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Projets index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Projets index</h1>

    <a class=\"btn btn-primary\" href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_new");
        yield "\">Créer un projet</a>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Statut du projet</th>
                <th>Id</th>
                <th>Nom</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>Client</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 24
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "etat", [], "any", false, true, false, 24), "id", [], "any", true, true, false, 24) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "etat", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24) == 1))) {
                // line 25
                yield "               ";
                $context["colorClass"] = "text-warning";
                // line 26
                yield "            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "etat", [], "any", false, true, false, 26), "id", [], "any", true, true, false, 26) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "etat", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26) == 2))) {
                // line 27
                yield "               ";
                $context["colorClass"] = "client";
                // line 28
                yield "            ";
            } else {
                // line 29
                yield "               ";
                $context["colorClass"] = "text-success";
                // line 30
                yield "            ";
            }
            // line 31
            yield "            <tr>
                <td> 
                    <i class=\"fas fa-circle ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 33, $this->source); })()), "html", null, true);
            yield "\"></i>
                    ";
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "etat", [], "any", false, true, false, 34), "libelle", [], "any", true, true, false, 34)) {
                // line 35
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "etat", [], "any", false, false, false, 35), "libelle", [], "any", false, false, false, 35), "html", null, true);
                yield "
                    ";
            }
            // line 37
            yield "                </td>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "nom", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td>";
            // line 40
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateDebut", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateDebut", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 41
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateFin", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateFin", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "Client", [], "any", false, false, false, 42), "Nom", [], "any", false, false, false, 42), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "Client", [], "any", false, false, false, 42), "Prenom", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\"><i class=\"fas fa-edit\"></i></a>
                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\"><i class=\"fas fa-trash\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['projet'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "        </tbody>
    </table>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "projets/index.html.twig";
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
        return array (  213 => 53,  204 => 49,  202 => 48,  194 => 45,  190 => 44,  183 => 42,  179 => 41,  175 => 40,  171 => 39,  167 => 38,  164 => 37,  158 => 35,  156 => 34,  152 => 33,  148 => 31,  145 => 30,  142 => 29,  139 => 28,  136 => 27,  133 => 26,  130 => 25,  127 => 24,  122 => 23,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Projets index{% endblock %}

{% block body %}
    <h1>Projets index</h1>

    <a class=\"btn btn-primary\" href=\"{{ path('projets_new') }}\">Créer un projet</a>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Statut du projet</th>
                <th>Id</th>
                <th>Nom</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>Client</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
            {% if projet.etat.id is defined and projet.etat.id == 1 %}
               {% set colorClass = 'text-warning' %}
            {% elseif projet.etat.id is defined and projet.etat.id == 2 %}
               {% set colorClass = 'client' %}
            {% else %}
               {% set colorClass = 'text-success' %}
            {% endif %}
            <tr>
                <td> 
                    <i class=\"fas fa-circle {{colorClass}}\"></i>
                    {% if projet.etat.libelle is defined%}
                        {{ projet.etat.libelle }}
                    {% endif %}
                </td>
                <td>{{ projet.id }}</td>
                <td>{{ projet.nom }}</td>
                <td>{{ projet.dateDebut ? projet.dateDebut|date('Y-m-d') : '' }}</td>
                <td>{{ projet.dateFin ? projet.dateFin|date('Y-m-d') : '' }}</td>
                <td>{{ projet.Client.Nom }} {{ projet.Client.Prenom }}</td>
                <td>
                    <a href=\"{{ path('projets_show', {'id': projet.id}) }}\"><i class=\"fas fa-edit\"></i></a>
                    <a href=\"{{ path('projets_edit', {'id': projet.id}) }}\"><i class=\"fas fa-trash\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
{% endblock %}
", "projets/index.html.twig", "/Users/theoalanore/Documents/GitHub/GYH_App/templates/projets/index.html.twig");
    }
}
