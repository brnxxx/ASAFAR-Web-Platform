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

/* admin/reservation/index.html.twig */
class __TwigTemplate_a4bf095c6afe3477f55bc7c4ea619817 extends Template
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
            'page_icon' => [$this, 'block_page_icon'],
            'page_title' => [$this, 'block_page_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/index.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield "Réservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_icon"));

        yield "fas fa-ticket-alt";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Gestion des Réservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        yield "Réservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        yield "
<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\"><i class=\"fas fa-ticket-alt\"></i></div>
        <div class=\"stat-value\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 13, $this->source); })()), "total", [], "any", false, false, false, 13), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Total</div>
    </div>

    <div class=\"stat-card green\">
        <div class=\"stat-icon green\"><i class=\"fas fa-check\"></i></div>
        <div class=\"stat-value\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 19, $this->source); })()), "confirmed", [], "any", false, false, false, 19), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Payées</div>
    </div>

    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\"><i class=\"fas fa-clock\"></i></div>
        <div class=\"stat-value\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 25, $this->source); })()), "pending", [], "any", false, false, false, 25), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">En attente</div>
    </div>
</div>
<div class=\"toolbar\">

    

    <!-- 🎯 FILTRES -->
    <div class=\"filter-group\">

        <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\"
           class=\"filter-btn ";
        // line 37
        yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 37, $this->source); })()))) ? ("active") : (""));
        yield "\">
            Toutes
        </a>

        <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["statut" => "CONFIRMEE"]);
        yield "\"
           class=\"filter-btn ";
        // line 42
        yield ((((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 42, $this->source); })()) == "CONFIRMEE")) ? ("active") : (""));
        yield "\">
            Confirmées
        </a>

        <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["statut" => "EN_ATTENTE"]);
        yield "\"
           class=\"filter-btn ";
        // line 47
        yield ((((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 47, $this->source); })()) == "EN_ATTENTE")) ? ("active") : (""));
        yield "\">
            En attente
        </a>

        <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["statut" => "ANNULEE"]);
        yield "\"
           class=\"filter-btn ";
        // line 52
        yield ((((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 52, $this->source); })()) == "ANNULEE")) ? ("active") : (""));
        yield "\">
            Annulées
        </a>
    </div>

    <!-- 🔽 TRI -->
    <div class=\"sort-dropdown\">

    <button class=\"sort-toggle\">
        <i class=\"fas fa-sort\"></i>
    </button>

    <div class=\"sort-menu\">
        <a href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["sort" => "date", "statut" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 65, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 65, $this->source); })())]), "html", null, true);
        yield "\">
            Date
        </a>

        <a href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["sort" => "prix", "statut" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 69, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 69, $this->source); })())]), "html", null, true);
        yield "\">
            Prix
        </a>

        <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["sort" => "titre", "statut" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 73, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 73, $this->source); })())]), "html", null, true);
        yield "\">
            Titre
        </a>
    </div>

</div>

</div>
<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i> Liste des réservations
        </div>
    </div>

    <table>
        <thead>
        <tr>
            <th>Utilisateur</th>
            <th>Excursion</th>
            <th>Date</th>
            <th>Total</th>
            <th>Statut</th>
        </tr>
        </thead>

        <tbody>
";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 101
            yield "    <tr>

        <td>
            ";
            // line 104
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 104), "nom", [], "any", false, false, false, 104) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 104), "prenom", [], "any", false, false, false, 104)), "html", null, true)) : ("Utilisateur inconnu"));
            yield "
        </td>

        <td>
            ";
            // line 108
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "excursion", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "excursion", [], "any", false, false, false, 108), "titre", [], "any", false, false, false, 108), "html", null, true)) : ("Excursion supprimée"));
            yield "
        </td>

        <td>
            ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "reservation", [], "any", false, false, false, 112), "dateReservation", [], "any", false, false, false, 112), "d/m/Y"), "html", null, true);
            yield "
        </td>

        <td>
            ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "reservation", [], "any", false, false, false, 116), "montantTotal", [], "any", false, false, false, 116), "html", null, true);
            yield " TND
        </td>

        <td>
            ";
            // line 120
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "reservation", [], "any", false, false, false, 120), "statut", [], "any", false, false, false, 120) == "CONFIRMEE")) {
                // line 121
                yield "                <span class=\"badge badge-green\">Payée</span>
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 122
$context["row"], "reservation", [], "any", false, false, false, 122), "statut", [], "any", false, false, false, 122) == "EN_ATTENTE")) {
                // line 123
                yield "                <span class=\"badge badge-amber\">En attente</span>
            ";
            } else {
                // line 125
                yield "                <span class=\"badge badge-warning\">Annulée</span>
            ";
            }
            // line 127
            yield "        </td>

    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "</tbody>
    </table>
</div>
<style>
.badge {
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    display: inline-block;
}

.badge-green {
    background: rgba(40, 167, 69, 0.15);
    color: #28a745;
    border: 1px solid rgba(40, 167, 69, 0.4);
}

.badge-amber {
    background: rgba(255, 193, 7, 0.15);
    color: #ffc107;
    border: 1px solid rgba(255, 193, 7, 0.4);
}

.badge-warning {
    background: rgba(220, 53, 69, 0.15);
    color: #dc3545;
    border: 1px solid rgba(220, 53, 69, 0.4);
}


.filter-btn, .sort-btn {
    padding: 6px 12px;
    border-radius: 20px;
    margin-right: 5px;
    background: #0f2a3d;
    color: #ccc;
    text-decoration: none;
}

.filter-btn.active, .sort-btn.active {
    background: #1E6FA8;
    color: white;
}
.sort-dropdown {
    position: relative;
    display: inline-block;
}

.sort-toggle {
    background: #0f2a3d;
    border: none;
    color: white;
    padding: 10px;
    border-radius: 10px;
    cursor: pointer;
}

.sort-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 45px;
    background: #0f2a3d;
    border-radius: 12px;
    padding: 10px 0;
    min-width: 150px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    z-index: 100;
}

.sort-menu a {
    display: block;
    padding: 10px 15px;
    color: #ccc;
    text-decoration: none;
}

.sort-menu a:hover {
    background: #1E6FA8;
    color: white;
}


</style>

<script>
document.querySelector('.sort-toggle').addEventListener('click', function () {
    const menu = document.querySelector('.sort-menu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
});

// fermer si clic ailleurs
document.addEventListener('click', function (e) {
    if (!e.target.closest('.sort-dropdown')) {
        document.querySelector('.sort-menu').style.display = 'none';
    }
});
</script>
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
        return "admin/reservation/index.html.twig";
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
        return array (  368 => 131,  359 => 127,  355 => 125,  351 => 123,  349 => 122,  346 => 121,  344 => 120,  337 => 116,  330 => 112,  323 => 108,  316 => 104,  311 => 101,  307 => 100,  277 => 73,  270 => 69,  263 => 65,  247 => 52,  243 => 51,  236 => 47,  232 => 46,  225 => 42,  221 => 41,  214 => 37,  210 => 36,  196 => 25,  187 => 19,  178 => 13,  172 => 9,  159 => 8,  136 => 6,  113 => 5,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Réservations{% endblock %}
{% block page_icon %}fas fa-ticket-alt{% endblock %}
{% block page_title %}Gestion des Réservations{% endblock %}
{% block breadcrumb %}Réservations{% endblock %}

{% block content %}

<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\"><i class=\"fas fa-ticket-alt\"></i></div>
        <div class=\"stat-value\">{{ stats.total }}</div>
        <div class=\"stat-label\">Total</div>
    </div>

    <div class=\"stat-card green\">
        <div class=\"stat-icon green\"><i class=\"fas fa-check\"></i></div>
        <div class=\"stat-value\">{{ stats.confirmed }}</div>
        <div class=\"stat-label\">Payées</div>
    </div>

    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\"><i class=\"fas fa-clock\"></i></div>
        <div class=\"stat-value\">{{ stats.pending }}</div>
        <div class=\"stat-label\">En attente</div>
    </div>
</div>
<div class=\"toolbar\">

    

    <!-- 🎯 FILTRES -->
    <div class=\"filter-group\">

        <a href=\"{{ path('admin_reservation_index') }}\"
           class=\"filter-btn {{ currentStatus is empty ? 'active' : '' }}\">
            Toutes
        </a>

        <a href=\"{{ path('admin_reservation_index', {statut: 'CONFIRMEE'}) }}\"
           class=\"filter-btn {{ currentStatus == 'CONFIRMEE' ? 'active' : '' }}\">
            Confirmées
        </a>

        <a href=\"{{ path('admin_reservation_index', {statut: 'EN_ATTENTE'}) }}\"
           class=\"filter-btn {{ currentStatus == 'EN_ATTENTE' ? 'active' : '' }}\">
            En attente
        </a>

        <a href=\"{{ path('admin_reservation_index', {statut: 'ANNULEE'}) }}\"
           class=\"filter-btn {{ currentStatus == 'ANNULEE' ? 'active' : '' }}\">
            Annulées
        </a>
    </div>

    <!-- 🔽 TRI -->
    <div class=\"sort-dropdown\">

    <button class=\"sort-toggle\">
        <i class=\"fas fa-sort\"></i>
    </button>

    <div class=\"sort-menu\">
        <a href=\"{{ path('admin_reservation_index', {sort: 'date', statut: currentStatus, search: search}) }}\">
            Date
        </a>

        <a href=\"{{ path('admin_reservation_index', {sort: 'prix', statut: currentStatus, search: search}) }}\">
            Prix
        </a>

        <a href=\"{{ path('admin_reservation_index', {sort: 'titre', statut: currentStatus, search: search}) }}\">
            Titre
        </a>
    </div>

</div>

</div>
<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i> Liste des réservations
        </div>
    </div>

    <table>
        <thead>
        <tr>
            <th>Utilisateur</th>
            <th>Excursion</th>
            <th>Date</th>
            <th>Total</th>
            <th>Statut</th>
        </tr>
        </thead>

        <tbody>
{% for row in data %}
    <tr>

        <td>
            {{ row.user ? row.user.nom ~ ' ' ~ row.user.prenom : 'Utilisateur inconnu' }}
        </td>

        <td>
            {{ row.excursion ? row.excursion.titre : 'Excursion supprimée' }}
        </td>

        <td>
            {{ row.reservation.dateReservation|date('d/m/Y') }}
        </td>

        <td>
            {{ row.reservation.montantTotal }} TND
        </td>

        <td>
            {% if row.reservation.statut == 'CONFIRMEE' %}
                <span class=\"badge badge-green\">Payée</span>
            {% elseif row.reservation.statut == 'EN_ATTENTE' %}
                <span class=\"badge badge-amber\">En attente</span>
            {% else %}
                <span class=\"badge badge-warning\">Annulée</span>
            {% endif %}
        </td>

    </tr>
{% endfor %}
</tbody>
    </table>
</div>
<style>
.badge {
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    display: inline-block;
}

.badge-green {
    background: rgba(40, 167, 69, 0.15);
    color: #28a745;
    border: 1px solid rgba(40, 167, 69, 0.4);
}

.badge-amber {
    background: rgba(255, 193, 7, 0.15);
    color: #ffc107;
    border: 1px solid rgba(255, 193, 7, 0.4);
}

.badge-warning {
    background: rgba(220, 53, 69, 0.15);
    color: #dc3545;
    border: 1px solid rgba(220, 53, 69, 0.4);
}


.filter-btn, .sort-btn {
    padding: 6px 12px;
    border-radius: 20px;
    margin-right: 5px;
    background: #0f2a3d;
    color: #ccc;
    text-decoration: none;
}

.filter-btn.active, .sort-btn.active {
    background: #1E6FA8;
    color: white;
}
.sort-dropdown {
    position: relative;
    display: inline-block;
}

.sort-toggle {
    background: #0f2a3d;
    border: none;
    color: white;
    padding: 10px;
    border-radius: 10px;
    cursor: pointer;
}

.sort-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 45px;
    background: #0f2a3d;
    border-radius: 12px;
    padding: 10px 0;
    min-width: 150px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    z-index: 100;
}

.sort-menu a {
    display: block;
    padding: 10px 15px;
    color: #ccc;
    text-decoration: none;
}

.sort-menu a:hover {
    background: #1E6FA8;
    color: white;
}


</style>

<script>
document.querySelector('.sort-toggle').addEventListener('click', function () {
    const menu = document.querySelector('.sort-menu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
});

// fermer si clic ailleurs
document.addEventListener('click', function (e) {
    if (!e.target.closest('.sort-dropdown')) {
        document.querySelector('.sort-menu').style.display = 'none';
    }
});
</script>
{% endblock %}", "admin/reservation/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\reservation\\index.html.twig");
    }
}
