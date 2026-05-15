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

/* admin/transports/index.html.twig */
class __TwigTemplate_3306ac5cc441455af77d3197d258f717 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/transports/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/transports/index.html.twig"));

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

        yield "Transports - Admin ASAFAR";
        
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

        yield "transport-title-no-icon";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        yield "Gestion des Transports";
        
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
        $context["totalTransports"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 9, $this->source); })()));
        // line 10
        $context["avionCount"] = 0;
        // line 11
        $context["voitureCount"] = 0;
        // line 12
        $context["totalPrice"] = 0;
        // line 13
        yield "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 15
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 15) == "AVION")) {
                // line 16
                yield "        ";
                $context["avionCount"] = ((isset($context["avionCount"]) || array_key_exists("avionCount", $context) ? $context["avionCount"] : (function () { throw new RuntimeError('Variable "avionCount" does not exist.', 16, $this->source); })()) + 1);
                // line 17
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 17) == "VOITURE")) {
                // line 18
                yield "        ";
                $context["voitureCount"] = ((isset($context["voitureCount"]) || array_key_exists("voitureCount", $context) ? $context["voitureCount"] : (function () { throw new RuntimeError('Variable "voitureCount" does not exist.', 18, $this->source); })()) + 1);
                // line 19
                yield "    ";
            }
            // line 20
            yield "    ";
            $context["totalPrice"] = ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 20, $this->source); })()) + ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "prix", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "prix", [], "any", false, false, false, 20), 0)) : (0)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
";
        // line 23
        $context["prixMoyen"] = ((((isset($context["totalTransports"]) || array_key_exists("totalTransports", $context) ? $context["totalTransports"] : (function () { throw new RuntimeError('Variable "totalTransports" does not exist.', 23, $this->source); })()) > 0)) ? (((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 23, $this->source); })()) / (isset($context["totalTransports"]) || array_key_exists("totalTransports", $context) ? $context["totalTransports"] : (function () { throw new RuntimeError('Variable "totalTransports" does not exist.', 23, $this->source); })()))) : (0));
        // line 24
        yield "
<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\">
            <i class=\"fas fa-plane\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalTransports"]) || array_key_exists("totalTransports", $context) ? $context["totalTransports"] : (function () { throw new RuntimeError('Variable "totalTransports" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Total Transports</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-layer-group\"></i>
            Collection totale
        </span>
    </div>
    <div class=\"stat-card green\">
        <div class=\"stat-icon green\">
            <i class=\"fas fa-plane-departure\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avionCount"]) || array_key_exists("avionCount", $context) ? $context["avionCount"] : (function () { throw new RuntimeError('Variable "avionCount" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Avions</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-flying\"></i>
            Transport aérien
        </span>
    </div>
    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\">
            <i class=\"fas fa-euro-sign\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["prixMoyen"]) || array_key_exists("prixMoyen", $context) ? $context["prixMoyen"] : (function () { throw new RuntimeError('Variable "prixMoyen" does not exist.', 52, $this->source); })()), 0, ".", " "), "html", null, true);
        yield "€</div>
        <div class=\"stat-label\">Prix Moyen</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-wallet\"></i>
            Par trajet
        </span>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon purple\">
            <i class=\"fas fa-car\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["voitureCount"]) || array_key_exists("voitureCount", $context) ? $context["voitureCount"] : (function () { throw new RuntimeError('Variable "voitureCount" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Voitures</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-road\"></i>
            Transport routier
        </span>
    </div>
</div>

<div class=\"toolbar\">
    <div class=\"toolbar-left\">
        <button class=\"filter-btn active\" data-filter=\"all\">
            <i class=\"fas fa-plane\"></i>
            Tous
        </button>
        <button class=\"filter-btn\" data-filter=\"avion\">
            <i class=\"fas fa-plane-departure\"></i>
            Avion
        </button>
        <button class=\"filter-btn\" data-filter=\"voiture\">
            <i class=\"fas fa-car\"></i>
            Voiture
        </button>
    </div>
    <div class=\"toolbar-right\">
        <form class=\"search-form\" onsubmit=\"return false;\">
            <div class=\"search-box\">
                <i class=\"fas fa-search\"></i>
                <input
                    type=\"text\"
                    id=\"searchInput\"
                    placeholder=\"Rechercher un transport...\"
                    aria-label=\"Rechercher un transport\"
                >
            </div>
        </form>

        <div class=\"sort-dropdown\">
            <button type=\"button\" class=\"btn-sort\" aria-label=\"Trier les transports\">
                <i class=\"fas fa-sort\"></i>
            </button>
            <div class=\"sort-menu\">
                <button type=\"button\" class=\"sort-option active\" data-sort=\"nom-asc\">Nom A-Z</button>
                <button type=\"button\" class=\"sort-option\" data-sort=\"nom-desc\">Nom Z-A</button>
                <button type=\"button\" class=\"sort-option\" data-sort=\"prix-asc\">Prix croissant</button>
                <button type=\"button\" class=\"sort-option\" data-sort=\"prix-desc\">Prix decroissant</button>
            </div>
        </div>

        <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_create");
        yield "\" class=\"btn btn-primary toolbar-add-btn js-open-transport-modal\" data-modal-title=\"Ajouter un Transport\">
            <i class=\"fas fa-plus\"></i>
            <span>Ajouter</span>
        </a>
    </div>
</div>

";
        // line 119
        if ((($tmp = (isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 119, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Transports
        </div>
        <div class=\"table-info\">
            Affichage de 1-";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 127, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 127, $this->source); })())), "html", null, true);
            yield " transports
        </div>
    </div>
    <table id=\"transportsTable\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Prix</th>
                <th>Départ</th>
                <th>Destination</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 143, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 144
                yield "            <tr data-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 144), "")) : ("")), "html", null, true);
                yield "\" data-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "nom", [], "any", false, false, false, 144)), "html", null, true);
                yield "\" data-price=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "prix", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "prix", [], "any", false, false, false, 144), 0)) : (0)), "html", null, true);
                yield "\">
                <td>
                    <strong style=\"color: var(--text-primary);\">";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "nom", [], "any", false, false, false, 146), "html", null, true);
                yield "</strong>
                </td>
                <td>
                    <span class=\"badge ";
                // line 149
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 149) == "AVION")) {
                    yield "badge-success";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 149) == "VOITURE")) {
                    yield "badge-info-custom";
                } else {
                    yield "badge-danger";
                }
                yield "\">
                        ";
                // line 150
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 150) == "AVION")) {
                    // line 151
                    yield "                            <i class=\"fas fa-plane-departure\"></i>
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 152
$context["transport"], "type", [], "any", false, false, false, 152) == "VOITURE")) {
                    // line 153
                    yield "                            <i class=\"fas fa-car\"></i>
                        ";
                }
                // line 155
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", true, true, false, 155)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 155), "N/A")) : ("N/A")), "html", null, true);
                yield "
                    </span>
                </td>
                <td>
                    <span style=\"color: #34D399; font-weight: 600;\">";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "prix", [], "any", true, true, false, 159)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "prix", [], "any", false, false, false, 159), "0")) : ("0")), "html", null, true);
                yield "€</span>
                </td>
                ";
                // line 161
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 161) == "AVION")) {
                    // line 162
                    yield "                    <td>
                        ";
                    // line 163
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportDepart", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 164
                        yield "                            <small style=\"color: rgba(244, 248, 252, 0.7);\">
                                ";
                        // line 165
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportDepart", [], "any", false, false, false, 165), "nom", [], "any", false, false, false, 165), "html", null, true);
                        yield "<br>
                                <span style=\"opacity: 0.6;\">";
                        // line 166
                        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportDepart", [], "any", false, true, false, 166), "codeIata", [], "any", true, true, false, 166) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportDepart", [], "any", false, false, false, 166), "codeIata", [], "any", false, false, false, 166)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportDepart", [], "any", false, false, false, 166), "codeIata", [], "any", false, false, false, 166), "html", null, true)) : ("N/A"));
                        yield "</span>
                            </small>
                        ";
                    } else {
                        // line 169
                        yield "                            <small style=\"color: rgba(244, 248, 252, 0.4);\">-</small>
                        ";
                    }
                    // line 171
                    yield "                    </td>
                    <td>
                        ";
                    // line 173
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportDestination", [], "any", false, false, false, 173)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 174
                        yield "                            <small style=\"color: rgba(244, 248, 252, 0.7);\">
                                ";
                        // line 175
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportDestination", [], "any", false, false, false, 175), "nom", [], "any", false, false, false, 175), "html", null, true);
                        yield "<br>
                                <span style=\"opacity: 0.6;\">";
                        // line 176
                        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportDestination", [], "any", false, true, false, 176), "codeIata", [], "any", true, true, false, 176) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportDestination", [], "any", false, false, false, 176), "codeIata", [], "any", false, false, false, 176)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportDestination", [], "any", false, false, false, 176), "codeIata", [], "any", false, false, false, 176), "html", null, true)) : ("N/A"));
                        yield "</span>
                            </small>
                        ";
                    } else {
                        // line 179
                        yield "                            <small style=\"color: rgba(244, 248, 252, 0.4);\">-</small>
                        ";
                    }
                    // line 181
                    yield "                    </td>
                ";
                } else {
                    // line 183
                    yield "                    <td colspan=\"2\">
                        ";
                    // line 184
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportPriseEnCharge", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 185
                        yield "                            <small style=\"color: rgba(244, 248, 252, 0.7);\">
                                <i class=\"fas fa-map-pin\"></i> ";
                        // line 186
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportPriseEnCharge", [], "any", false, false, false, 186), "nom", [], "any", false, false, false, 186), "html", null, true);
                        yield "<br>
                                <span style=\"opacity: 0.6;\">";
                        // line 187
                        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportPriseEnCharge", [], "any", false, true, false, 187), "codeIata", [], "any", true, true, false, 187) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportPriseEnCharge", [], "any", false, false, false, 187), "codeIata", [], "any", false, false, false, 187)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "aeroportPriseEnCharge", [], "any", false, false, false, 187), "codeIata", [], "any", false, false, false, 187), "html", null, true)) : ("N/A"));
                        yield "</span>
                            </small>
                        ";
                    } else {
                        // line 190
                        yield "                            <small style=\"color: rgba(244, 248, 252, 0.4);\">-</small>
                        ";
                    }
                    // line 192
                    yield "                    </td>
                ";
                }
                // line 194
                yield "                <td>
                    <small class=\"table-description\">";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "description", [], "any", false, false, false, 195), 0, 45), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "description", [], "any", false, false, false, 195)) > 45)) {
                    yield "...";
                }
                yield "</small>
                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "idTransport", [], "any", false, false, false, 199)]), "html", null, true);
                yield "\" class=\"btn-small btn-edit js-open-transport-modal\" data-modal-title=\"Modifier Transport\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"POST\" action=\"";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "idTransport", [], "any", false, false, false, 202)]), "html", null, true);
                yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr? Cette action est irréversible.');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "idTransport", [], "any", false, false, false, 203))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn-small btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            yield "        </tbody>
    </table>
</div>
";
        } else {
            // line 216
            yield "<div class=\"empty-state\">
    <i class=\"fas fa-inbox\" style=\"display: block;\"></i>
    <p>Aucun transport trouvé</p>
    <small style=\"color: rgba(244, 248, 252, 0.4); display: block; margin-bottom: 20px;\">Commencez par créer votre premier transport</small>
    <a href=\"";
            // line 220
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_create");
            yield "\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus\"></i>
        <span>Créer le premier transport</span>
    </a>
</div>
";
        }
        // line 226
        yield "
<div id=\"transportModal\" class=\"transport-modal-overlay\" aria-hidden=\"true\">
    <div class=\"transport-modal-card\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"transportModalTitle\">
        <div class=\"transport-modal-header\">
            <h3 id=\"transportModalTitle\">Transport</h3>
            <button type=\"button\" id=\"transportModalClose\" class=\"transport-modal-close\" aria-label=\"Fermer\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div class=\"transport-modal-body\">
            <iframe id=\"transportModalFrame\" title=\"Formulaire Transport\"></iframe>
        </div>
    </div>
</div>

<style>
    .top-bar-title .transport-title-no-icon {
        display: none;
    }

    .table-description {
        display: block;
        color: rgba(244, 248, 252, 0.6);
        margin-top: 4px;
        font-size: 12px;
    }

    .search-form {
        margin: 0;
        min-width: 260px;
        flex: 1;
    }

    .toolbar-right {
        margin-left: auto;
    }

    .toolbar-right .search-box {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 15px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .toolbar-right .search-box i {
        color: #A7E3FF;
        font-size: 14px;
    }

    .toolbar-right .search-box input {
        width: 220px;
        min-width: 0;
        background: transparent;
        border: none;
        color: var(--text-primary);
        outline: none;
        font-size: 14px;
    }

    .toolbar-right .search-box input::placeholder {
        color: rgba(167, 227, 255, 0.5);
    }

    .sort-dropdown {
        width: 100%;
        max-width: max-content;
        position: relative;
    }

    .btn-sort {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        padding: 10px 14px;
        border-radius: 10px;
        color: #A7E3FF;
        cursor: pointer;
        transition: 0.2s;
    }

    .btn-sort:hover {
        background: rgba(47, 168, 255, 0.15);
        color: #2FA8FF;
    }

    .sort-menu {
        position: absolute;
        top: calc(100% + 8px);
        right: 0;
        background: #0B2D4A;
        border-radius: 10px;
        display: none;
        flex-direction: column;
        min-width: 170px;
        z-index: 3000;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(47, 168, 255, 0.2);
        overflow: hidden;
    }

    .sort-menu.open {
        display: flex;
    }

    .sort-option {
        border: none;
        background: transparent;
        padding: 11px 16px;
        color: #A7E3FF;
        text-align: left;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        transition: background 0.2s;
        cursor: pointer;
    }

    .sort-option:hover,
    .sort-option.active {
        background: rgba(47, 168, 255, 0.15);
        color: #2FA8FF;
    }

    .toolbar-add-btn {
        margin-left: 2px;
        white-space: nowrap;
    }

    .badge-info-custom {
        background: rgba(255, 193, 7, 0.2);
        color: #FFC107;
        border: 1px solid #FFC107;
    }

    .transport-modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(5, 20, 33, 0.72);
        backdrop-filter: blur(6px);
        display: none;
        align-items: center;
        justify-content: center;
        padding: 24px;
        z-index: 1900;
    }

    .transport-modal-overlay.active {
        display: flex;
    }

    .transport-modal-card {
        width: min(1100px, 100%);
        max-height: calc(100vh - 48px);
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(255, 193, 7, 0.28);
        box-shadow: 0 30px 90px rgba(0, 0, 0, 0.45);
        background: rgba(11, 45, 74, 0.98);
        animation: modalIn 0.22s ease;
    }

    @keyframes modalIn {
        from {
            transform: translateY(16px) scale(0.98);
            opacity: 0;
        }
        to {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }

    .transport-modal-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 18px;
        border-bottom: 1px solid rgba(255, 193, 7, 0.2);
        background: rgba(7, 27, 46, 0.95);
    }

    .transport-modal-header h3 {
        margin: 0;
        color: var(--text-primary);
        font-size: 16px;
        font-weight: 700;
    }

    .transport-modal-close {
        width: 34px;
        height: 34px;
        border-radius: 8px;
        border: 1px solid rgba(255, 193, 7, 0.3);
        background: rgba(255, 255, 255, 0.03);
        color: var(--text-secondary);
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .transport-modal-close:hover {
        color: var(--text-primary);
        border-color: rgba(255, 193, 7, 0.6);
        background: rgba(255, 193, 7, 0.12);
    }

    .transport-modal-body {
        height: calc(100vh - 126px);
        min-height: 520px;
        background: rgba(5, 20, 33, 0.9);
    }

    #transportModalFrame {
        width: 100%;
        height: 100%;
        border: 0;
        background: transparent;
    }

    .action-buttons .btn-small {
        min-width: 36px;
        justify-content: center;
        padding: 8px 10px;
    }

    @media (max-width: 768px) {
        .toolbar-right {
            width: 100%;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .search-form {
            width: 100%;
            order: 1;
        }

        .toolbar-right .search-box input {
            width: 100%;
        }

        .sort-dropdown {
            order: 2;
        }

        .toolbar-add-btn {
            order: 3;
            margin-left: auto;
        }

        .action-buttons {
            flex-direction: column;
            gap: 6px;
        }

        .btn-small span {
            display: none;
        }

        .transport-modal-overlay {
            padding: 10px;
        }

        .transport-modal-body {
            min-height: 420px;
            height: calc(100vh - 110px);
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const filterButtons = document.querySelectorAll('.filter-btn[data-filter]');
    const tbody = document.querySelector('#transportsTable tbody');
    const rows = Array.from(document.querySelectorAll('#transportsTable tbody tr'));
    const sortBtn = document.querySelector('.btn-sort');
    const sortMenu = document.querySelector('.sort-menu');
    const sortOptions = document.querySelectorAll('.sort-option');
    const modalTriggers = document.querySelectorAll('.js-open-transport-modal');
    const modal = document.getElementById('transportModal');
    const modalTitle = document.getElementById('transportModalTitle');
    const modalClose = document.getElementById('transportModalClose');
    const modalFrame = document.getElementById('transportModalFrame');
    let activeToolbarFilter = 'all';
    let activeSort = 'nom-asc';
    let modalOpened = false;

    function sortRows(sortKey) {
        if (!tbody || rows.length === 0) {
            return;
        }

        const sortedRows = [...rows].sort((a, b) => {
            const nameA = a.dataset.name || '';
            const nameB = b.dataset.name || '';
            const priceA = parseFloat(a.dataset.price || '0');
            const priceB = parseFloat(b.dataset.price || '0');

            switch (sortKey) {
                case 'nom-desc':
                    return nameB.localeCompare(nameA, 'fr', { sensitivity: 'base' });
                case 'prix-asc':
                    return priceA - priceB;
                case 'prix-desc':
                    return priceB - priceA;
                case 'nom-asc':
                default:
                    return nameA.localeCompare(nameB, 'fr', { sensitivity: 'base' });
            }
        });

        sortedRows.forEach(row => tbody.appendChild(row));
    }

    if (searchInput) {
        searchInput.addEventListener('input', function() {
            applyFilters();
        });
    }

    function applyFilters() {
        const searchTerm = (searchInput ? searchInput.value : '').toLowerCase().trim();

        rows.forEach(row => {
            const name = row.dataset.name || '';
            const type = row.dataset.type || '';
            const typeLower = type.toLowerCase();

            const matchesSearch = name.includes(searchTerm);
            const matchesToolbar = activeToolbarFilter === 'all' || typeLower === activeToolbarFilter;

            row.style.display = matchesSearch && matchesToolbar ? '' : 'none';
        });

        sortRows(activeSort);
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            activeToolbarFilter = this.dataset.filter;
            applyFilters();
        });
    });

    if (sortBtn && sortMenu) {
        sortBtn.addEventListener('click', function(event) {
            event.stopPropagation();
            sortMenu.classList.toggle('open');
        });

        sortOptions.forEach(option => {
            option.addEventListener('click', function() {
                sortOptions.forEach(item => item.classList.remove('active'));
                this.classList.add('active');
                activeSort = this.dataset.sort;
                sortMenu.classList.remove('open');
                applyFilters();
            });
        });

        document.addEventListener('click', function(event) {
            if (!sortMenu.contains(event.target) && !sortBtn.contains(event.target)) {
                sortMenu.classList.remove('open');
            }
        });
    }

    applyFilters();

    function openModal(url, title) {
        if (!modal || !modalFrame) {
            window.location.href = url;
            return;
        }

        modalTitle.textContent = title || 'Transport';
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        modalOpened = true;
        modalFrame.src = url;
    }

    function closeModal() {
        if (!modal || !modalFrame) {
            return;
        }

        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        modalFrame.src = 'about:blank';
        document.body.style.overflow = '';
        modalOpened = false;
    }

    modalTriggers.forEach(function(trigger) {
        trigger.addEventListener('click', function(event) {
            event.preventDefault();
            openModal(this.href, this.dataset.modalTitle || 'Transport');
        });
    });

    if (modalClose) {
        modalClose.addEventListener('click', closeModal);
    }

    if (modal) {
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modalOpened) {
            closeModal();
        }
    });

    if (modalFrame) {
        modalFrame.addEventListener('load', function() {
            try {
                const frameDocument = modalFrame.contentDocument;
                if (frameDocument && !frameDocument.getElementById('transport-modal-frame-style')) {
                    const cleanupStyle = frameDocument.createElement('style');
                    cleanupStyle.id = 'transport-modal-frame-style';
                    cleanupStyle.textContent = [
                        '.sidebar, .top-bar { display: none !important; }',
                        '.main-content { margin-left: 0 !important; width: 100% !important; }',
                        '.page-content { padding: 18px !important; }',
                        '.content-header, .breadcrumb { display: none !important; }',
                        '.search-box, .notification-btn, .settings-btn { display: none !important; }'
                    ].join(' ');

                    frameDocument.head.appendChild(cleanupStyle);

                    const cancelButton = frameDocument.querySelector('.btn-cancel');
                    if (cancelButton) {
                        cancelButton.addEventListener('click', function(event) {
                            event.preventDefault();
                            closeModal();
                        });
                    }
                }

                const frameUrl = new URL(modalFrame.contentWindow.location.href);
                const isBackToIndex = frameUrl.pathname.endsWith('/admin/transports');

                if (modalOpened && isBackToIndex) {
                    closeModal();
                    window.location.reload();
                }
            } catch (e) {
                // Keep modal open if iframe URL cannot be inspected.
            }
        });
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
        return "admin/transports/index.html.twig";
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
        return array (  524 => 226,  515 => 220,  509 => 216,  503 => 212,  488 => 203,  484 => 202,  478 => 199,  468 => 195,  465 => 194,  461 => 192,  457 => 190,  451 => 187,  447 => 186,  444 => 185,  442 => 184,  439 => 183,  435 => 181,  431 => 179,  425 => 176,  421 => 175,  418 => 174,  416 => 173,  412 => 171,  408 => 169,  402 => 166,  398 => 165,  395 => 164,  393 => 163,  390 => 162,  388 => 161,  383 => 159,  375 => 155,  371 => 153,  369 => 152,  366 => 151,  364 => 150,  354 => 149,  348 => 146,  338 => 144,  334 => 143,  313 => 127,  304 => 120,  302 => 119,  292 => 112,  240 => 63,  226 => 52,  212 => 41,  198 => 30,  190 => 24,  188 => 23,  185 => 22,  178 => 20,  175 => 19,  172 => 18,  169 => 17,  166 => 16,  163 => 15,  159 => 14,  156 => 13,  154 => 12,  152 => 11,  150 => 10,  148 => 9,  135 => 8,  112 => 6,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Transports - Admin ASAFAR{% endblock %}
{% block page_icon %}transport-title-no-icon{% endblock %}

{% block page_title %}Gestion des Transports{% endblock %}

{% block content %}
{% set totalTransports = transports|length %}
{% set avionCount = 0 %}
{% set voitureCount = 0 %}
{% set totalPrice = 0 %}

{% for transport in transports %}
    {% if transport.type == 'AVION' %}
        {% set avionCount = avionCount + 1 %}
    {% elseif transport.type == 'VOITURE' %}
        {% set voitureCount = voitureCount + 1 %}
    {% endif %}
    {% set totalPrice = totalPrice + (transport.prix|default(0)) %}
{% endfor %}

{% set prixMoyen = totalTransports > 0 ? (totalPrice / totalTransports) : 0 %}

<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\">
            <i class=\"fas fa-plane\"></i>
        </div>
        <div class=\"stat-value\">{{ totalTransports }}</div>
        <div class=\"stat-label\">Total Transports</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-layer-group\"></i>
            Collection totale
        </span>
    </div>
    <div class=\"stat-card green\">
        <div class=\"stat-icon green\">
            <i class=\"fas fa-plane-departure\"></i>
        </div>
        <div class=\"stat-value\">{{ avionCount }}</div>
        <div class=\"stat-label\">Avions</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-flying\"></i>
            Transport aérien
        </span>
    </div>
    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\">
            <i class=\"fas fa-euro-sign\"></i>
        </div>
        <div class=\"stat-value\">{{ prixMoyen|number_format(0, '.', ' ') }}€</div>
        <div class=\"stat-label\">Prix Moyen</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-wallet\"></i>
            Par trajet
        </span>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon purple\">
            <i class=\"fas fa-car\"></i>
        </div>
        <div class=\"stat-value\">{{ voitureCount }}</div>
        <div class=\"stat-label\">Voitures</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-road\"></i>
            Transport routier
        </span>
    </div>
</div>

<div class=\"toolbar\">
    <div class=\"toolbar-left\">
        <button class=\"filter-btn active\" data-filter=\"all\">
            <i class=\"fas fa-plane\"></i>
            Tous
        </button>
        <button class=\"filter-btn\" data-filter=\"avion\">
            <i class=\"fas fa-plane-departure\"></i>
            Avion
        </button>
        <button class=\"filter-btn\" data-filter=\"voiture\">
            <i class=\"fas fa-car\"></i>
            Voiture
        </button>
    </div>
    <div class=\"toolbar-right\">
        <form class=\"search-form\" onsubmit=\"return false;\">
            <div class=\"search-box\">
                <i class=\"fas fa-search\"></i>
                <input
                    type=\"text\"
                    id=\"searchInput\"
                    placeholder=\"Rechercher un transport...\"
                    aria-label=\"Rechercher un transport\"
                >
            </div>
        </form>

        <div class=\"sort-dropdown\">
            <button type=\"button\" class=\"btn-sort\" aria-label=\"Trier les transports\">
                <i class=\"fas fa-sort\"></i>
            </button>
            <div class=\"sort-menu\">
                <button type=\"button\" class=\"sort-option active\" data-sort=\"nom-asc\">Nom A-Z</button>
                <button type=\"button\" class=\"sort-option\" data-sort=\"nom-desc\">Nom Z-A</button>
                <button type=\"button\" class=\"sort-option\" data-sort=\"prix-asc\">Prix croissant</button>
                <button type=\"button\" class=\"sort-option\" data-sort=\"prix-desc\">Prix decroissant</button>
            </div>
        </div>

        <a href=\"{{ path('admin_transport_create') }}\" class=\"btn btn-primary toolbar-add-btn js-open-transport-modal\" data-modal-title=\"Ajouter un Transport\">
            <i class=\"fas fa-plus\"></i>
            <span>Ajouter</span>
        </a>
    </div>
</div>

{% if transports %}
<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Transports
        </div>
        <div class=\"table-info\">
            Affichage de 1-{{ transports|length }} sur {{ transports|length }} transports
        </div>
    </div>
    <table id=\"transportsTable\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Prix</th>
                <th>Départ</th>
                <th>Destination</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for transport in transports %}
            <tr data-type=\"{{ transport.type|default('') }}\" data-name=\"{{ transport.nom|lower }}\" data-price=\"{{ transport.prix|default(0) }}\">
                <td>
                    <strong style=\"color: var(--text-primary);\">{{ transport.nom }}</strong>
                </td>
                <td>
                    <span class=\"badge {% if transport.type == 'AVION' %}badge-success{% elseif transport.type == 'VOITURE' %}badge-info-custom{% else %}badge-danger{% endif %}\">
                        {% if transport.type == 'AVION' %}
                            <i class=\"fas fa-plane-departure\"></i>
                        {% elseif transport.type == 'VOITURE' %}
                            <i class=\"fas fa-car\"></i>
                        {% endif %}
                        {{ transport.type|default('N/A') }}
                    </span>
                </td>
                <td>
                    <span style=\"color: #34D399; font-weight: 600;\">{{ transport.prix|default('0') }}€</span>
                </td>
                {% if transport.type == 'AVION' %}
                    <td>
                        {% if transport.aeroportDepart %}
                            <small style=\"color: rgba(244, 248, 252, 0.7);\">
                                {{ transport.aeroportDepart.nom }}<br>
                                <span style=\"opacity: 0.6;\">{{ transport.aeroportDepart.codeIata ?? 'N/A' }}</span>
                            </small>
                        {% else %}
                            <small style=\"color: rgba(244, 248, 252, 0.4);\">-</small>
                        {% endif %}
                    </td>
                    <td>
                        {% if transport.aeroportDestination %}
                            <small style=\"color: rgba(244, 248, 252, 0.7);\">
                                {{ transport.aeroportDestination.nom }}<br>
                                <span style=\"opacity: 0.6;\">{{ transport.aeroportDestination.codeIata ?? 'N/A' }}</span>
                            </small>
                        {% else %}
                            <small style=\"color: rgba(244, 248, 252, 0.4);\">-</small>
                        {% endif %}
                    </td>
                {% else %}
                    <td colspan=\"2\">
                        {% if transport.aeroportPriseEnCharge %}
                            <small style=\"color: rgba(244, 248, 252, 0.7);\">
                                <i class=\"fas fa-map-pin\"></i> {{ transport.aeroportPriseEnCharge.nom }}<br>
                                <span style=\"opacity: 0.6;\">{{ transport.aeroportPriseEnCharge.codeIata ?? 'N/A' }}</span>
                            </small>
                        {% else %}
                            <small style=\"color: rgba(244, 248, 252, 0.4);\">-</small>
                        {% endif %}
                    </td>
                {% endif %}
                <td>
                    <small class=\"table-description\">{{ transport.description|slice(0, 45) }}{% if transport.description|length > 45 %}...{% endif %}</small>
                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"{{ path('admin_transport_edit', {'id': transport.idTransport}) }}\" class=\"btn-small btn-edit js-open-transport-modal\" data-modal-title=\"Modifier Transport\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"POST\" action=\"{{ path('admin_transport_delete', {'id': transport.idTransport}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr? Cette action est irréversible.');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ transport.idTransport) }}\">
                            <button type=\"submit\" class=\"btn-small btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% else %}
<div class=\"empty-state\">
    <i class=\"fas fa-inbox\" style=\"display: block;\"></i>
    <p>Aucun transport trouvé</p>
    <small style=\"color: rgba(244, 248, 252, 0.4); display: block; margin-bottom: 20px;\">Commencez par créer votre premier transport</small>
    <a href=\"{{ path('admin_transport_create') }}\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus\"></i>
        <span>Créer le premier transport</span>
    </a>
</div>
{% endif %}

<div id=\"transportModal\" class=\"transport-modal-overlay\" aria-hidden=\"true\">
    <div class=\"transport-modal-card\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"transportModalTitle\">
        <div class=\"transport-modal-header\">
            <h3 id=\"transportModalTitle\">Transport</h3>
            <button type=\"button\" id=\"transportModalClose\" class=\"transport-modal-close\" aria-label=\"Fermer\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div class=\"transport-modal-body\">
            <iframe id=\"transportModalFrame\" title=\"Formulaire Transport\"></iframe>
        </div>
    </div>
</div>

<style>
    .top-bar-title .transport-title-no-icon {
        display: none;
    }

    .table-description {
        display: block;
        color: rgba(244, 248, 252, 0.6);
        margin-top: 4px;
        font-size: 12px;
    }

    .search-form {
        margin: 0;
        min-width: 260px;
        flex: 1;
    }

    .toolbar-right {
        margin-left: auto;
    }

    .toolbar-right .search-box {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 15px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .toolbar-right .search-box i {
        color: #A7E3FF;
        font-size: 14px;
    }

    .toolbar-right .search-box input {
        width: 220px;
        min-width: 0;
        background: transparent;
        border: none;
        color: var(--text-primary);
        outline: none;
        font-size: 14px;
    }

    .toolbar-right .search-box input::placeholder {
        color: rgba(167, 227, 255, 0.5);
    }

    .sort-dropdown {
        width: 100%;
        max-width: max-content;
        position: relative;
    }

    .btn-sort {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        padding: 10px 14px;
        border-radius: 10px;
        color: #A7E3FF;
        cursor: pointer;
        transition: 0.2s;
    }

    .btn-sort:hover {
        background: rgba(47, 168, 255, 0.15);
        color: #2FA8FF;
    }

    .sort-menu {
        position: absolute;
        top: calc(100% + 8px);
        right: 0;
        background: #0B2D4A;
        border-radius: 10px;
        display: none;
        flex-direction: column;
        min-width: 170px;
        z-index: 3000;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(47, 168, 255, 0.2);
        overflow: hidden;
    }

    .sort-menu.open {
        display: flex;
    }

    .sort-option {
        border: none;
        background: transparent;
        padding: 11px 16px;
        color: #A7E3FF;
        text-align: left;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        transition: background 0.2s;
        cursor: pointer;
    }

    .sort-option:hover,
    .sort-option.active {
        background: rgba(47, 168, 255, 0.15);
        color: #2FA8FF;
    }

    .toolbar-add-btn {
        margin-left: 2px;
        white-space: nowrap;
    }

    .badge-info-custom {
        background: rgba(255, 193, 7, 0.2);
        color: #FFC107;
        border: 1px solid #FFC107;
    }

    .transport-modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(5, 20, 33, 0.72);
        backdrop-filter: blur(6px);
        display: none;
        align-items: center;
        justify-content: center;
        padding: 24px;
        z-index: 1900;
    }

    .transport-modal-overlay.active {
        display: flex;
    }

    .transport-modal-card {
        width: min(1100px, 100%);
        max-height: calc(100vh - 48px);
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(255, 193, 7, 0.28);
        box-shadow: 0 30px 90px rgba(0, 0, 0, 0.45);
        background: rgba(11, 45, 74, 0.98);
        animation: modalIn 0.22s ease;
    }

    @keyframes modalIn {
        from {
            transform: translateY(16px) scale(0.98);
            opacity: 0;
        }
        to {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }

    .transport-modal-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 18px;
        border-bottom: 1px solid rgba(255, 193, 7, 0.2);
        background: rgba(7, 27, 46, 0.95);
    }

    .transport-modal-header h3 {
        margin: 0;
        color: var(--text-primary);
        font-size: 16px;
        font-weight: 700;
    }

    .transport-modal-close {
        width: 34px;
        height: 34px;
        border-radius: 8px;
        border: 1px solid rgba(255, 193, 7, 0.3);
        background: rgba(255, 255, 255, 0.03);
        color: var(--text-secondary);
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .transport-modal-close:hover {
        color: var(--text-primary);
        border-color: rgba(255, 193, 7, 0.6);
        background: rgba(255, 193, 7, 0.12);
    }

    .transport-modal-body {
        height: calc(100vh - 126px);
        min-height: 520px;
        background: rgba(5, 20, 33, 0.9);
    }

    #transportModalFrame {
        width: 100%;
        height: 100%;
        border: 0;
        background: transparent;
    }

    .action-buttons .btn-small {
        min-width: 36px;
        justify-content: center;
        padding: 8px 10px;
    }

    @media (max-width: 768px) {
        .toolbar-right {
            width: 100%;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .search-form {
            width: 100%;
            order: 1;
        }

        .toolbar-right .search-box input {
            width: 100%;
        }

        .sort-dropdown {
            order: 2;
        }

        .toolbar-add-btn {
            order: 3;
            margin-left: auto;
        }

        .action-buttons {
            flex-direction: column;
            gap: 6px;
        }

        .btn-small span {
            display: none;
        }

        .transport-modal-overlay {
            padding: 10px;
        }

        .transport-modal-body {
            min-height: 420px;
            height: calc(100vh - 110px);
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const filterButtons = document.querySelectorAll('.filter-btn[data-filter]');
    const tbody = document.querySelector('#transportsTable tbody');
    const rows = Array.from(document.querySelectorAll('#transportsTable tbody tr'));
    const sortBtn = document.querySelector('.btn-sort');
    const sortMenu = document.querySelector('.sort-menu');
    const sortOptions = document.querySelectorAll('.sort-option');
    const modalTriggers = document.querySelectorAll('.js-open-transport-modal');
    const modal = document.getElementById('transportModal');
    const modalTitle = document.getElementById('transportModalTitle');
    const modalClose = document.getElementById('transportModalClose');
    const modalFrame = document.getElementById('transportModalFrame');
    let activeToolbarFilter = 'all';
    let activeSort = 'nom-asc';
    let modalOpened = false;

    function sortRows(sortKey) {
        if (!tbody || rows.length === 0) {
            return;
        }

        const sortedRows = [...rows].sort((a, b) => {
            const nameA = a.dataset.name || '';
            const nameB = b.dataset.name || '';
            const priceA = parseFloat(a.dataset.price || '0');
            const priceB = parseFloat(b.dataset.price || '0');

            switch (sortKey) {
                case 'nom-desc':
                    return nameB.localeCompare(nameA, 'fr', { sensitivity: 'base' });
                case 'prix-asc':
                    return priceA - priceB;
                case 'prix-desc':
                    return priceB - priceA;
                case 'nom-asc':
                default:
                    return nameA.localeCompare(nameB, 'fr', { sensitivity: 'base' });
            }
        });

        sortedRows.forEach(row => tbody.appendChild(row));
    }

    if (searchInput) {
        searchInput.addEventListener('input', function() {
            applyFilters();
        });
    }

    function applyFilters() {
        const searchTerm = (searchInput ? searchInput.value : '').toLowerCase().trim();

        rows.forEach(row => {
            const name = row.dataset.name || '';
            const type = row.dataset.type || '';
            const typeLower = type.toLowerCase();

            const matchesSearch = name.includes(searchTerm);
            const matchesToolbar = activeToolbarFilter === 'all' || typeLower === activeToolbarFilter;

            row.style.display = matchesSearch && matchesToolbar ? '' : 'none';
        });

        sortRows(activeSort);
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            activeToolbarFilter = this.dataset.filter;
            applyFilters();
        });
    });

    if (sortBtn && sortMenu) {
        sortBtn.addEventListener('click', function(event) {
            event.stopPropagation();
            sortMenu.classList.toggle('open');
        });

        sortOptions.forEach(option => {
            option.addEventListener('click', function() {
                sortOptions.forEach(item => item.classList.remove('active'));
                this.classList.add('active');
                activeSort = this.dataset.sort;
                sortMenu.classList.remove('open');
                applyFilters();
            });
        });

        document.addEventListener('click', function(event) {
            if (!sortMenu.contains(event.target) && !sortBtn.contains(event.target)) {
                sortMenu.classList.remove('open');
            }
        });
    }

    applyFilters();

    function openModal(url, title) {
        if (!modal || !modalFrame) {
            window.location.href = url;
            return;
        }

        modalTitle.textContent = title || 'Transport';
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        modalOpened = true;
        modalFrame.src = url;
    }

    function closeModal() {
        if (!modal || !modalFrame) {
            return;
        }

        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        modalFrame.src = 'about:blank';
        document.body.style.overflow = '';
        modalOpened = false;
    }

    modalTriggers.forEach(function(trigger) {
        trigger.addEventListener('click', function(event) {
            event.preventDefault();
            openModal(this.href, this.dataset.modalTitle || 'Transport');
        });
    });

    if (modalClose) {
        modalClose.addEventListener('click', closeModal);
    }

    if (modal) {
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modalOpened) {
            closeModal();
        }
    });

    if (modalFrame) {
        modalFrame.addEventListener('load', function() {
            try {
                const frameDocument = modalFrame.contentDocument;
                if (frameDocument && !frameDocument.getElementById('transport-modal-frame-style')) {
                    const cleanupStyle = frameDocument.createElement('style');
                    cleanupStyle.id = 'transport-modal-frame-style';
                    cleanupStyle.textContent = [
                        '.sidebar, .top-bar { display: none !important; }',
                        '.main-content { margin-left: 0 !important; width: 100% !important; }',
                        '.page-content { padding: 18px !important; }',
                        '.content-header, .breadcrumb { display: none !important; }',
                        '.search-box, .notification-btn, .settings-btn { display: none !important; }'
                    ].join(' ');

                    frameDocument.head.appendChild(cleanupStyle);

                    const cancelButton = frameDocument.querySelector('.btn-cancel');
                    if (cancelButton) {
                        cancelButton.addEventListener('click', function(event) {
                            event.preventDefault();
                            closeModal();
                        });
                    }
                }

                const frameUrl = new URL(modalFrame.contentWindow.location.href);
                const isBackToIndex = frameUrl.pathname.endsWith('/admin/transports');

                if (modalOpened && isBackToIndex) {
                    closeModal();
                    window.location.reload();
                }
            } catch (e) {
                // Keep modal open if iframe URL cannot be inspected.
            }
        });
    }
});
</script>
{% endblock %}
", "admin/transports/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\transports\\index.html.twig");
    }
}
