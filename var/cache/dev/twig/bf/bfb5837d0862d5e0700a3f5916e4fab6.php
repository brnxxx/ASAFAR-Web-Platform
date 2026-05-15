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

/* admin/hebergements/list.html.twig */
class __TwigTemplate_acb6774af4cdac4d0be6bc3004b2b61a extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hebergements/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hebergements/list.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Hebergements - Admin ASAFAR";
        
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

        // line 7
        yield "    <i class=\"fas fa-hotel\"></i> Gestion des Hebergements
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        yield "Hebergements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "<!-- Stats Grid -->
<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\">
            <i class=\"fas fa-hotel\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 19, $this->source); })()), "total", [], "any", false, false, false, 19), "0")) : ("0")), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Total Hebergements</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-arrow-up\"></i>
            +";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "growth", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), "growth", [], "any", false, false, false, 23), "0")) : ("0")), "html", null, true);
        yield "% ce mois
        </span>
    </div>
    <div class=\"stat-card green\">
        <div class=\"stat-icon green\">
            <i class=\"fas fa-check-circle\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disponible", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 30, $this->source); })()), "disponible", [], "any", false, false, false, 30), "0")) : ("0")), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Disponibles</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-arrow-up\"></i>
            +";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "availableGrowth", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 34, $this->source); })()), "availableGrowth", [], "any", false, false, false, 34), "0")) : ("0")), "html", null, true);
        yield "% ce mois
        </span>
    </div>
    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\">
            <i class=\"fas fa-euro-sign\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "prix_moyen", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 41, $this->source); })()), "prix_moyen", [], "any", false, false, false, 41), "0")) : ("0")), "html", null, true);
        yield "€</div>
        <div class=\"stat-label\">Prix Moyen</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-arrow-up\"></i>
            +";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "priceGrowth", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 45, $this->source); })()), "priceGrowth", [], "any", false, false, false, 45), "0")) : ("0")), "html", null, true);
        yield "% ce mois
        </span>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon purple\">
            <i class=\"fas fa-ban\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 52, $this->source); })()), "total", [], "any", false, false, false, 52), 0)) : (0)) - ((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "disponible", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 52, $this->source); })()), "disponible", [], "any", false, false, false, 52), 0)) : (0))), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Indisponibles</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-arrow-up\"></i>
            Disponibilite a optimiser
        </span>
    </div>
</div>

<!-- Toolbar -->
<div class=\"toolbar\">
    <div class=\"toolbar-left\">
        <button class=\"filter-btn active\" data-filter=\"all\">
            <i class=\"fas fa-hotel\"></i>
            Tous
        </button>
        <button class=\"filter-btn\" data-filter=\"disponible\">
            <i class=\"fas fa-check-circle\"></i>
            Disponibles
        </button>
        <button class=\"filter-btn\" data-filter=\"hotel\">
            <i class=\"fas fa-building\"></i>
            Hotels
        </button>
        <button class=\"filter-btn\" data-filter=\"appartement\">
            <i class=\"fas fa-home\"></i>
            Appartements
        </button>
    </div>
    <div class=\"toolbar-right\">
        <div class=\"search-box-inline\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"hebSearch\" placeholder=\"Rechercher un hebergement...\">
        </div>
        <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_create");
        yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus\"></i>
            <span>Ajouter</span>
        </a>
    </div>
</div>

<!-- Cards Grid Container -->
<div class=\"cards-grid\" id=\"hebTable\">
    ";
        // line 95
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 95, $this->source); })())) > 0)) {
            // line 96
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["heb"]) {
                // line 97
                yield "            <div class=\"heb-card\" data-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "type", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "type", [], "any", false, false, false, 97), "hotel")) : ("hotel"))), "html", null, true);
                yield "\" data-availability=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "disponibilite", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "disponibilite", [], "any", false, false, false, 97), "N/A")) : ("N/A"))), "html", null, true);
                yield "\">
                <!-- Card Image Section -->
                <div class=\"card-image-wrapper\">
                    ";
                // line 100
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "imagePath", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 101
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "imagePath", [], "any", false, false, false, 101), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "nom", [], "any", false, false, false, 101), "html", null, true);
                    yield "\" class=\"card-image\">
                    ";
                } else {
                    // line 103
                    yield "                        <div class=\"card-image-placeholder\">
                            <i class=\"fas fa-image\"></i>
                            <p>No image</p>
                        </div>
                    ";
                }
                // line 108
                yield "
                    <!-- Card Header Badge -->
                    <div class=\"card-header-badge\">
                        <span class=\"card-id\">#";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "idHebergement", [], "any", false, false, false, 111), "html", null, true);
                yield "</span>
                        ";
                // line 112
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "type", [], "any", false, false, false, 112) == "HOTEL")) {
                    // line 113
                    yield "                            <span class=\"card-type-badge hotel\">HOTEL</span>
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 114
$context["heb"], "type", [], "any", false, false, false, 114) == "MAISON")) {
                    // line 115
                    yield "                            <span class=\"card-type-badge maison\">MAISON</span>
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 116
$context["heb"], "type", [], "any", false, false, false, 116) == "APPARTEMENT")) {
                    // line 117
                    yield "                            <span class=\"card-type-badge appartement\">APPARTEMENT</span>
                        ";
                }
                // line 119
                yield "                    </div>

                </div>

                <!-- Card Content -->
                <div class=\"card-content\">
                    <h3 class=\"card-nom\">";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "nom", [], "any", false, false, false, 125), "html", null, true);
                yield "</h3>

                    <div class=\"card-info\">
                        <div class=\"info-item\">
                            <i class=\"fas fa-map-marker-alt\"></i>
                            <span>";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "localisation", [], "any", true, true, false, 130)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "localisation", [], "any", false, false, false, 130), "N/A")) : ("N/A")), "html", null, true);
                yield "</span>
                        </div>
                    </div>

                    ";
                // line 134
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "categorieHebergement", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 135
                    yield "                        <span class=\"card-categorie\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "categorieHebergement", [], "any", false, false, false, 135), "nom", [], "any", false, false, false, 135), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 137
                yield "
                    <div class=\"card-prix\">
                        <strong>";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "prixParNuit", [], "any", true, true, false, 139)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "prixParNuit", [], "any", false, false, false, 139), "N/A")) : ("N/A")), "html", null, true);
                yield "€</strong>
                        <span>/ nuit</span>
                    </div>

                    <div class=\"card-disponibilite\">
                        <span>Disponibilité:</span>
                        ";
                // line 145
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "disponibilite", [], "any", false, false, false, 145) == "DISPONIBLE")) {
                    // line 146
                    yield "                            <span class=\"status-disponible\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "disponibilite", [], "any", false, false, false, 146), "html", null, true);
                    yield "</span>
                        ";
                } else {
                    // line 148
                    yield "                            <span class=\"status-indisponible\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "disponibilite", [], "any", true, true, false, 148)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "disponibilite", [], "any", false, false, false, 148), "N/A")) : ("N/A")), "html", null, true);
                    yield "</span>
                        ";
                }
                // line 150
                yield "                    </div>

                    <div class=\"card-description\">";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "description", [], "any", false, false, false, 152), 0, 60), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "description", [], "any", false, false, false, 152)) > 60)) {
                    yield "...";
                }
                yield "</div>
                </div>

                <!-- Card Actions -->
                <div class=\"card-actions\">
                    <a href=\"";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "idHebergement", [], "any", false, false, false, 157)]), "html", null, true);
                yield "\" class=\"btn-action btn-edit\" title=\"Modifier\">
                        <i class=\"fas fa-edit\"></i>
                    </a>
                    <form method=\"POST\" action=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "idHebergement", [], "any", false, false, false, 160)]), "html", null, true);
                yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce hebergement?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["heb"], "idHebergement", [], "any", false, false, false, 161))), "html", null, true);
                yield "\">
                        <button type=\"submit\" class=\"btn-action btn-delete\" title=\"Supprimer\">
                            <i class=\"fas fa-trash\"></i>
                        </button>
                    </form>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['heb'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            yield "    ";
        } else {
            // line 170
            yield "        <!-- Empty State -->
        <div class=\"empty-state-full\">
            <div class=\"empty-state-icon\">
                <i class=\"fas fa-hotel\"></i>
            </div>
            <h3>Aucun hebergement trouvé</h3>
            <p>Il n'y a pas encore d'hebergements dans le système.</p>
            <a href=\"";
            // line 177
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_create");
            yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus\"></i>
                <span>Ajouter un Hebergement</span>
            </a>
        </div>
    ";
        }
        // line 183
        yield "</div>

<style>
    .cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 24px;
        margin-bottom: 40px;
    }

    .heb-card {
        background: rgba(30, 41, 59, 0.4);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .heb-card:hover {
        transform: translateY(-4px);
        border-color: rgba(47, 168, 255, 0.3);
        box-shadow: 0 12px 40px rgba(47, 168, 255, 0.1);
    }

    .card-image-wrapper {
        position: relative;
        width: 100%;
        height: 200px;
        overflow: hidden;
        background: rgba(47, 168, 255, 0.05);
    }

    .card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-image-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: rgba(47, 168, 255, 0.08);
        color: rgba(47, 168, 255, 0.4);
    }

    .card-image-placeholder i {
        font-size: 48px;
        margin-bottom: 8px;
    }

    .card-image-placeholder p {
        font-size: 12px;
        margin: 0;
    }

    .card-header-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        right: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 8px;
    }

    .card-id {
        display: inline-block;
        background: rgba(11, 45, 74, 0.8);
        color: #2FA8FF;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 700;
        backdrop-filter: blur(8px);
    }

    .card-type-badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        backdrop-filter: blur(8px);
    }

    .card-type-badge.hotel {
        background: rgba(52, 211, 153, 0.8);
        color: #1a3a2d;
    }

    .card-type-badge.maison {
        background: rgba(255, 193, 7, 0.8);
        color: #3d2f0a;
    }

    .card-type-badge.appartement {
        background: rgba(59, 130, 246, 0.8);
        color: #1e3a8a;
    }

    .card-rating {
        position: absolute;
        bottom: 12px;
        right: 12px;
        background: rgba(11, 45, 74, 0.8);
        color: #FFC107;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 4px;
        backdrop-filter: blur(8px);
    }

    .card-content {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .card-nom {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-primary);
        margin: 0 0 12px 0;
    }

    .card-info {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 8px;
        font-size: 13px;
        color: var(--text-secondary);
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .card-categorie {
        display: inline-block;
        background: rgba(255, 193, 7, 0.15);
        color: #FFC107;
        padding: 4px 10px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .card-prix {
        font-size: 15px;
        font-weight: 700;
        color: #34D399;
        margin-bottom: 8px;
    }

    .card-prix span {
        font-size: 12px;
        font-weight: 500;
        color: var(--text-secondary);
    }

    .card-disponibilite {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        color: var(--text-secondary);
        margin-bottom: 12px;
    }

    .status-disponible {
        color: #34D399;
        font-weight: 600;
    }

    .status-indisponible {
        color: #EF4444;
        font-weight: 600;
    }

    .card-description {
        font-size: 12px;
        color: var(--text-secondary);
        line-height: 1.4;
        flex-grow: 1;
        margin-bottom: 16px;
    }

    .card-actions {
        display: flex;
        gap: 8px;
        padding: 0 20px 20px 20px;
        border-top: 1px solid rgba(47, 168, 255, 0.1);
        padding-top: 16px;
    }

    .btn-action {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 6px;
        border: 1px solid rgba(47, 168, 255, 0.2);
        background: rgba(47, 168, 255, 0.1);
        color: #2FA8FF;
        cursor: pointer;
        transition: all 0.2s ease;
        font-size: 14px;
        text-decoration: none;
        flex: 1;
    }

    .btn-action:hover {
        background: rgba(47, 168, 255, 0.2);
        border-color: #2FA8FF;
    }

    .btn-action.btn-delete:hover {
        background: rgba(239, 68, 68, 0.2);
        border-color: #EF4444;
        color: #EF4444;
    }

    .empty-state-full {
        grid-column: 1 / -1;
        text-align: center;
        padding: 60px 20px;
    }

    .empty-state-icon {
        font-size: 64px;
        color: rgba(47, 168, 255, 0.2);
        margin-bottom: 16px;
    }

    .empty-state-full h3 {
        font-size: 18px;
        color: var(--text-primary);
        margin-bottom: 8px;
    }

    .empty-state-full p {
        color: var(--text-secondary);
        font-size: 14px;
        margin-bottom: 24px;
    }

    @media (max-width: 1024px) {
        .cards-grid {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        }
    }

    @media (max-width: 768px) {
        .cards-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 464
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 465
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.heb-card');
    const searchInput = document.getElementById('hebSearch');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.dataset.filter;
            const searchTerm = searchInput.value.toLowerCase().trim();

            cards.forEach(card => {
                let display = true;

                if (filter === 'all') {
                    display = true;
                } else if (filter === 'disponible') {
                    display = card.dataset.availability === 'disponible';
                } else {
                    display = card.dataset.type === filter;
                }

                const text = card.textContent.toLowerCase();
                if (display && searchTerm && !text.includes(searchTerm)) {
                    display = false;
                }

                card.style.display = display ? '' : 'none';
            });
        });
    });

    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase().trim();
        const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;

        cards.forEach(card => {
            const text = card.textContent.toLowerCase();
            let display = text.includes(query);

            if (display && activeFilter !== 'all') {
                if (activeFilter === 'disponible') {
                    display = card.dataset.availability === 'disponible';
                } else {
                    display = card.dataset.type === activeFilter;
                }
            }

            card.style.display = display ? '' : 'none';
        });
    });
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
        return "admin/hebergements/list.html.twig";
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
        return array (  738 => 465,  725 => 464,  435 => 183,  426 => 177,  417 => 170,  414 => 169,  400 => 161,  396 => 160,  390 => 157,  379 => 152,  375 => 150,  369 => 148,  363 => 146,  361 => 145,  352 => 139,  348 => 137,  342 => 135,  340 => 134,  333 => 130,  325 => 125,  317 => 119,  313 => 117,  311 => 116,  308 => 115,  306 => 114,  303 => 113,  301 => 112,  297 => 111,  292 => 108,  285 => 103,  277 => 101,  275 => 100,  266 => 97,  261 => 96,  259 => 95,  247 => 86,  210 => 52,  200 => 45,  193 => 41,  183 => 34,  176 => 30,  166 => 23,  159 => 19,  151 => 13,  138 => 12,  115 => 10,  103 => 7,  90 => 6,  67 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Template Twig pour la page Hebergements - Admin ASAFAR #}
{% extends 'admin/base.html.twig' %}

{% block title %}Hebergements - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-hotel\"></i> Gestion des Hebergements
{% endblock %}

{% block breadcrumb %}Hebergements{% endblock %}

{% block content %}
<!-- Stats Grid -->
<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\">
            <i class=\"fas fa-hotel\"></i>
        </div>
        <div class=\"stat-value\">{{ stats.total|default('0') }}</div>
        <div class=\"stat-label\">Total Hebergements</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-arrow-up\"></i>
            +{{ stats.growth|default('0') }}% ce mois
        </span>
    </div>
    <div class=\"stat-card green\">
        <div class=\"stat-icon green\">
            <i class=\"fas fa-check-circle\"></i>
        </div>
        <div class=\"stat-value\">{{ stats.disponible|default('0') }}</div>
        <div class=\"stat-label\">Disponibles</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-arrow-up\"></i>
            +{{ stats.availableGrowth|default('0') }}% ce mois
        </span>
    </div>
    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\">
            <i class=\"fas fa-euro-sign\"></i>
        </div>
        <div class=\"stat-value\">{{ stats.prix_moyen|default('0') }}€</div>
        <div class=\"stat-label\">Prix Moyen</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-arrow-up\"></i>
            +{{ stats.priceGrowth|default('0') }}% ce mois
        </span>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon purple\">
            <i class=\"fas fa-ban\"></i>
        </div>
        <div class=\"stat-value\">{{ (stats.total|default(0)) - (stats.disponible|default(0)) }}</div>
        <div class=\"stat-label\">Indisponibles</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-arrow-up\"></i>
            Disponibilite a optimiser
        </span>
    </div>
</div>

<!-- Toolbar -->
<div class=\"toolbar\">
    <div class=\"toolbar-left\">
        <button class=\"filter-btn active\" data-filter=\"all\">
            <i class=\"fas fa-hotel\"></i>
            Tous
        </button>
        <button class=\"filter-btn\" data-filter=\"disponible\">
            <i class=\"fas fa-check-circle\"></i>
            Disponibles
        </button>
        <button class=\"filter-btn\" data-filter=\"hotel\">
            <i class=\"fas fa-building\"></i>
            Hotels
        </button>
        <button class=\"filter-btn\" data-filter=\"appartement\">
            <i class=\"fas fa-home\"></i>
            Appartements
        </button>
    </div>
    <div class=\"toolbar-right\">
        <div class=\"search-box-inline\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"hebSearch\" placeholder=\"Rechercher un hebergement...\">
        </div>
        <a href=\"{{ path('admin_hebergement_create') }}\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus\"></i>
            <span>Ajouter</span>
        </a>
    </div>
</div>

<!-- Cards Grid Container -->
<div class=\"cards-grid\" id=\"hebTable\">
    {% if hebergements|length > 0 %}
        {% for heb in hebergements %}
            <div class=\"heb-card\" data-type=\"{{ heb.type|default('hotel')|lower }}\" data-availability=\"{{ heb.disponibilite|default('N/A')|lower }}\">
                <!-- Card Image Section -->
                <div class=\"card-image-wrapper\">
                    {% if heb.imagePath %}
                        <img src=\"{{ heb.imagePath }}\" alt=\"{{ heb.nom }}\" class=\"card-image\">
                    {% else %}
                        <div class=\"card-image-placeholder\">
                            <i class=\"fas fa-image\"></i>
                            <p>No image</p>
                        </div>
                    {% endif %}

                    <!-- Card Header Badge -->
                    <div class=\"card-header-badge\">
                        <span class=\"card-id\">#{{ heb.idHebergement }}</span>
                        {% if heb.type == 'HOTEL' %}
                            <span class=\"card-type-badge hotel\">HOTEL</span>
                        {% elseif heb.type == 'MAISON' %}
                            <span class=\"card-type-badge maison\">MAISON</span>
                        {% elseif heb.type == 'APPARTEMENT' %}
                            <span class=\"card-type-badge appartement\">APPARTEMENT</span>
                        {% endif %}
                    </div>

                </div>

                <!-- Card Content -->
                <div class=\"card-content\">
                    <h3 class=\"card-nom\">{{ heb.nom }}</h3>

                    <div class=\"card-info\">
                        <div class=\"info-item\">
                            <i class=\"fas fa-map-marker-alt\"></i>
                            <span>{{ heb.localisation|default('N/A') }}</span>
                        </div>
                    </div>

                    {% if heb.categorieHebergement %}
                        <span class=\"card-categorie\">{{ heb.categorieHebergement.nom }}</span>
                    {% endif %}

                    <div class=\"card-prix\">
                        <strong>{{ heb.prixParNuit|default('N/A') }}€</strong>
                        <span>/ nuit</span>
                    </div>

                    <div class=\"card-disponibilite\">
                        <span>Disponibilité:</span>
                        {% if heb.disponibilite == 'DISPONIBLE' %}
                            <span class=\"status-disponible\">{{ heb.disponibilite }}</span>
                        {% else %}
                            <span class=\"status-indisponible\">{{ heb.disponibilite|default('N/A') }}</span>
                        {% endif %}
                    </div>

                    <div class=\"card-description\">{{ heb.description|slice(0, 60) }}{% if heb.description|length > 60 %}...{% endif %}</div>
                </div>

                <!-- Card Actions -->
                <div class=\"card-actions\">
                    <a href=\"{{ path('admin_hebergement_edit', {'id': heb.idHebergement}) }}\" class=\"btn-action btn-edit\" title=\"Modifier\">
                        <i class=\"fas fa-edit\"></i>
                    </a>
                    <form method=\"POST\" action=\"{{ path('admin_hebergement_delete', {'id': heb.idHebergement}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce hebergement?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ heb.idHebergement) }}\">
                        <button type=\"submit\" class=\"btn-action btn-delete\" title=\"Supprimer\">
                            <i class=\"fas fa-trash\"></i>
                        </button>
                    </form>
                </div>
            </div>
        {% endfor %}
    {% else %}
        <!-- Empty State -->
        <div class=\"empty-state-full\">
            <div class=\"empty-state-icon\">
                <i class=\"fas fa-hotel\"></i>
            </div>
            <h3>Aucun hebergement trouvé</h3>
            <p>Il n'y a pas encore d'hebergements dans le système.</p>
            <a href=\"{{ path('admin_hebergement_create') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus\"></i>
                <span>Ajouter un Hebergement</span>
            </a>
        </div>
    {% endif %}
</div>

<style>
    .cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 24px;
        margin-bottom: 40px;
    }

    .heb-card {
        background: rgba(30, 41, 59, 0.4);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .heb-card:hover {
        transform: translateY(-4px);
        border-color: rgba(47, 168, 255, 0.3);
        box-shadow: 0 12px 40px rgba(47, 168, 255, 0.1);
    }

    .card-image-wrapper {
        position: relative;
        width: 100%;
        height: 200px;
        overflow: hidden;
        background: rgba(47, 168, 255, 0.05);
    }

    .card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-image-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: rgba(47, 168, 255, 0.08);
        color: rgba(47, 168, 255, 0.4);
    }

    .card-image-placeholder i {
        font-size: 48px;
        margin-bottom: 8px;
    }

    .card-image-placeholder p {
        font-size: 12px;
        margin: 0;
    }

    .card-header-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        right: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 8px;
    }

    .card-id {
        display: inline-block;
        background: rgba(11, 45, 74, 0.8);
        color: #2FA8FF;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 700;
        backdrop-filter: blur(8px);
    }

    .card-type-badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        backdrop-filter: blur(8px);
    }

    .card-type-badge.hotel {
        background: rgba(52, 211, 153, 0.8);
        color: #1a3a2d;
    }

    .card-type-badge.maison {
        background: rgba(255, 193, 7, 0.8);
        color: #3d2f0a;
    }

    .card-type-badge.appartement {
        background: rgba(59, 130, 246, 0.8);
        color: #1e3a8a;
    }

    .card-rating {
        position: absolute;
        bottom: 12px;
        right: 12px;
        background: rgba(11, 45, 74, 0.8);
        color: #FFC107;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 4px;
        backdrop-filter: blur(8px);
    }

    .card-content {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .card-nom {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-primary);
        margin: 0 0 12px 0;
    }

    .card-info {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 8px;
        font-size: 13px;
        color: var(--text-secondary);
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .card-categorie {
        display: inline-block;
        background: rgba(255, 193, 7, 0.15);
        color: #FFC107;
        padding: 4px 10px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .card-prix {
        font-size: 15px;
        font-weight: 700;
        color: #34D399;
        margin-bottom: 8px;
    }

    .card-prix span {
        font-size: 12px;
        font-weight: 500;
        color: var(--text-secondary);
    }

    .card-disponibilite {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        color: var(--text-secondary);
        margin-bottom: 12px;
    }

    .status-disponible {
        color: #34D399;
        font-weight: 600;
    }

    .status-indisponible {
        color: #EF4444;
        font-weight: 600;
    }

    .card-description {
        font-size: 12px;
        color: var(--text-secondary);
        line-height: 1.4;
        flex-grow: 1;
        margin-bottom: 16px;
    }

    .card-actions {
        display: flex;
        gap: 8px;
        padding: 0 20px 20px 20px;
        border-top: 1px solid rgba(47, 168, 255, 0.1);
        padding-top: 16px;
    }

    .btn-action {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 6px;
        border: 1px solid rgba(47, 168, 255, 0.2);
        background: rgba(47, 168, 255, 0.1);
        color: #2FA8FF;
        cursor: pointer;
        transition: all 0.2s ease;
        font-size: 14px;
        text-decoration: none;
        flex: 1;
    }

    .btn-action:hover {
        background: rgba(47, 168, 255, 0.2);
        border-color: #2FA8FF;
    }

    .btn-action.btn-delete:hover {
        background: rgba(239, 68, 68, 0.2);
        border-color: #EF4444;
        color: #EF4444;
    }

    .empty-state-full {
        grid-column: 1 / -1;
        text-align: center;
        padding: 60px 20px;
    }

    .empty-state-icon {
        font-size: 64px;
        color: rgba(47, 168, 255, 0.2);
        margin-bottom: 16px;
    }

    .empty-state-full h3 {
        font-size: 18px;
        color: var(--text-primary);
        margin-bottom: 8px;
    }

    .empty-state-full p {
        color: var(--text-secondary);
        font-size: 14px;
        margin-bottom: 24px;
    }

    @media (max-width: 1024px) {
        .cards-grid {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        }
    }

    @media (max-width: 768px) {
        .cards-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.heb-card');
    const searchInput = document.getElementById('hebSearch');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.dataset.filter;
            const searchTerm = searchInput.value.toLowerCase().trim();

            cards.forEach(card => {
                let display = true;

                if (filter === 'all') {
                    display = true;
                } else if (filter === 'disponible') {
                    display = card.dataset.availability === 'disponible';
                } else {
                    display = card.dataset.type === filter;
                }

                const text = card.textContent.toLowerCase();
                if (display && searchTerm && !text.includes(searchTerm)) {
                    display = false;
                }

                card.style.display = display ? '' : 'none';
            });
        });
    });

    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase().trim();
        const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;

        cards.forEach(card => {
            const text = card.textContent.toLowerCase();
            let display = text.includes(query);

            if (display && activeFilter !== 'all') {
                if (activeFilter === 'disponible') {
                    display = card.dataset.availability === 'disponible';
                } else {
                    display = card.dataset.type === activeFilter;
                }
            }

            card.style.display = display ? '' : 'none';
        });
    });
});
</script>
{% endblock %}
", "admin/hebergements/list.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\hebergements\\list.html.twig");
    }
}
