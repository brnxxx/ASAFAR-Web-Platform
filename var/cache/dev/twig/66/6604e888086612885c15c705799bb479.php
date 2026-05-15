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

/* admin/hebergements/index.html.twig */
class __TwigTemplate_20f9b9564612cf018370fb4308f6cce2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hebergements/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hebergements/index.html.twig"));

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

        yield "Hebergements - Admin ASAFAR";
        
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

        // line 6
        yield "    <i class=\"fas fa-hotel\"></i> Gestion des Hebergements
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

    // line 11
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

        // line 12
        $context["totalHebergements"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 12, $this->source); })()));
        // line 13
        $context["disponibleCount"] = 0;
        // line 14
        $context["totalPrice"] = 0;
        // line 15
        yield "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
            // line 17
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "disponibilite", [], "any", false, false, false, 17) == "DISPONIBLE")) {
                // line 18
                yield "        ";
                $context["disponibleCount"] = ((isset($context["disponibleCount"]) || array_key_exists("disponibleCount", $context) ? $context["disponibleCount"] : (function () { throw new RuntimeError('Variable "disponibleCount" does not exist.', 18, $this->source); })()) + 1);
                // line 19
                yield "    ";
            }
            // line 20
            yield "    ";
            $context["totalPrice"] = ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 20, $this->source); })()) + ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "prixParNuit", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "prixParNuit", [], "any", false, false, false, 20), 0)) : (0)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hebergement'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
";
        // line 23
        $context["prixMoyen"] = ((((isset($context["totalHebergements"]) || array_key_exists("totalHebergements", $context) ? $context["totalHebergements"] : (function () { throw new RuntimeError('Variable "totalHebergements" does not exist.', 23, $this->source); })()) > 0)) ? (((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 23, $this->source); })()) / (isset($context["totalHebergements"]) || array_key_exists("totalHebergements", $context) ? $context["totalHebergements"] : (function () { throw new RuntimeError('Variable "totalHebergements" does not exist.', 23, $this->source); })()))) : (0));
        // line 24
        $context["indisponibleCount"] = ((isset($context["totalHebergements"]) || array_key_exists("totalHebergements", $context) ? $context["totalHebergements"] : (function () { throw new RuntimeError('Variable "totalHebergements" does not exist.', 24, $this->source); })()) - (isset($context["disponibleCount"]) || array_key_exists("disponibleCount", $context) ? $context["disponibleCount"] : (function () { throw new RuntimeError('Variable "disponibleCount" does not exist.', 24, $this->source); })()));
        // line 25
        yield "
<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\">
            <i class=\"fas fa-hotel\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalHebergements"]) || array_key_exists("totalHebergements", $context) ? $context["totalHebergements"] : (function () { throw new RuntimeError('Variable "totalHebergements" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Total Hebergements</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-layer-group\"></i>
            Collection totale
        </span>
    </div>
    <div class=\"stat-card green\">
        <div class=\"stat-icon green\">
            <i class=\"fas fa-check-circle\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["disponibleCount"]) || array_key_exists("disponibleCount", $context) ? $context["disponibleCount"] : (function () { throw new RuntimeError('Variable "disponibleCount" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Disponibles</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-bed\"></i>
            Prets a reserver
        </span>
    </div>
    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\">
            <i class=\"fas fa-euro-sign\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["prixMoyen"]) || array_key_exists("prixMoyen", $context) ? $context["prixMoyen"] : (function () { throw new RuntimeError('Variable "prixMoyen" does not exist.', 53, $this->source); })()), 0, ".", " "), "html", null, true);
        yield "€</div>
        <div class=\"stat-label\">Prix Moyen</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-wallet\"></i>
            Par nuit
        </span>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon purple\">
            <i class=\"fas fa-ban\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["indisponibleCount"]) || array_key_exists("indisponibleCount", $context) ? $context["indisponibleCount"] : (function () { throw new RuntimeError('Variable "indisponibleCount" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Indisponibles</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-calendar-times\"></i>
            Actuellement non dispo
        </span>
    </div>
</div>

<div class=\"toolbar\">
    <div class=\"toolbar-left\">
        <button class=\"filter-btn active\" data-filter=\"all\">
            <i class=\"fas fa-hotel\"></i>
            Tous
        </button>
        <button class=\"filter-btn\" data-filter=\"hotel\">
            <i class=\"fas fa-building\"></i>
            Hotel
        </button>
        <button class=\"filter-btn\" data-filter=\"maison\">
            <i class=\"fas fa-house\"></i>
            Maison
        </button>
        <button class=\"filter-btn\" data-filter=\"appartement\">
            <i class=\"fas fa-city\"></i>
            Appartement
        </button>
    </div>
    <div class=\"toolbar-right\">
        <div class=\"search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un hebergement...\" aria-label=\"Rechercher par nom\">
        </div>
        <div class=\"sort-dropdown\">
            <button type=\"button\" id=\"sortBtn\" class=\"btn-sort\" title=\"Trier\">
                <i class=\"fas fa-sort\"></i>
            </button>
            <div id=\"sortMenu\" class=\"sort-menu\">
                <button type=\"button\" data-sort=\"id_desc\" class=\"active\">Plus recents</button>
                <button type=\"button\" data-sort=\"id_asc\">Plus anciens</button>
                <button type=\"button\" data-sort=\"name_asc\">Nom A-Z</button>
                <button type=\"button\" data-sort=\"name_desc\">Nom Z-A</button>
                <button type=\"button\" data-sort=\"price_asc\">Prix croissant</button>
                <button type=\"button\" data-sort=\"price_desc\">Prix decroissant</button>
            </div>
        </div>
        <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_create");
        yield "\" class=\"btn btn-primary js-open-hebergement-modal\" data-modal-title=\"Ajouter un Hebergement\">
            <i class=\"fas fa-plus\"></i>
            <span>Ajouter</span>
        </a>
    </div>
</div>

";
        // line 117
        if ((($tmp = (isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 117, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Hebergements
        </div>
        <div class=\"table-info\">
            Affichage de 1-";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 125, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 125, $this->source); })())), "html", null, true);
            yield " hebergements
        </div>
    </div>
    <table id=\"hebergementsTable\">
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Localisation</th>
                <th>Categorie</th>
                <th>Prix / Nuit</th>
                <th>Disponibilite</th>
                <th>Évaluations</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 143, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
                // line 144
                yield "            <tr data-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "type", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "type", [], "any", false, false, false, 144), "")) : ("")), "html", null, true);
                yield "\" data-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 144)), "html", null, true);
                yield "\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "idHebergement", [], "any", false, false, false, 144), "html", null, true);
                yield "\" data-price=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "prixParNuit", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "prixParNuit", [], "any", false, false, false, 144), "0")) : ("0")), "html", null, true);
                yield "\">
                <td>
                    ";
                // line 146
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "imagePath", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 147
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "imagePath", [], "any", false, false, false, 147), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 147), "html", null, true);
                    yield "\" class=\"hebergement-thumb\">
                    ";
                } else {
                    // line 149
                    yield "                        <div class=\"hebergement-thumb placeholder\">
                            <i class=\"fas fa-image\"></i>
                        </div>
                    ";
                }
                // line 153
                yield "                </td>
                <td>
                    <strong style=\"color: var(--text-primary);\">";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 155), "html", null, true);
                yield "</strong>
                    <small class=\"table-description\">";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "description", [], "any", false, false, false, 156), 0, 45), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "description", [], "any", false, false, false, 156)) > 45)) {
                    yield "...";
                }
                yield "</small>
                </td>
                <td>
                    <span class=\"badge ";
                // line 159
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "type", [], "any", false, false, false, 159) == "HOTEL")) {
                    yield "badge-success";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "type", [], "any", false, false, false, 159) == "MAISON")) {
                    yield "badge-warning";
                } else {
                    yield "badge-info-custom";
                }
                yield "\">
                        ";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "type", [], "any", true, true, false, 160)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "type", [], "any", false, false, false, 160), "N/A")) : ("N/A")), "html", null, true);
                yield "
                    </span>
                </td>
                <td>";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "localisation", [], "any", true, true, false, 163)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "localisation", [], "any", false, false, false, 163), "N/A")) : ("N/A")), "html", null, true);
                yield "</td>
                <td>";
                // line 164
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "categorieHebergement", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "categorieHebergement", [], "any", false, false, false, 164), "nom", [], "any", false, false, false, 164), "html", null, true)) : ("N/A"));
                yield "</td>
                <td>
                    <span style=\"color: #34D399; font-weight: 600;\">";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "prixParNuit", [], "any", true, true, false, 166)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "prixParNuit", [], "any", false, false, false, 166), "0")) : ("0")), "html", null, true);
                yield "€</span>
                </td>
                <td>
                    ";
                // line 169
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "disponibilite", [], "any", false, false, false, 169) == "DISPONIBLE")) {
                    // line 170
                    yield "                        <span class=\"badge badge-success\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "disponibilite", [], "any", false, false, false, 170), "html", null, true);
                    yield "</span>
                    ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 171
$context["hebergement"], "disponibilite", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 172
                    yield "                        <span class=\"badge badge-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "disponibilite", [], "any", false, false, false, 172), "html", null, true);
                    yield "</span>
                    ";
                } else {
                    // line 174
                    yield "                        <span style=\"color: rgba(244, 248, 252, 0.4);\">N/A</span>
                    ";
                }
                // line 176
                yield "                </td>
                                  <td>
                    ";
                // line 178
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "noteMoyenne", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 179
                    yield "                        <div style=\"color:#FFC107; font-size:16px; cursor:pointer;\" onclick=\"openRatingModal('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 179), "js"), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "noteMoyenne", [], "any", false, false, false, 179), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nbNotes", [], "any", true, true, false, 179)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nbNotes", [], "any", false, false, false, 179), 0)) : (0)), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "lastRating", [], "any", true, true, false, 179)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "lastRating", [], "any", false, false, false, 179), "-")) : ("-")), "html", null, true);
                    yield "', '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "lastRaterName", [], "any", true, true, false, 179)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "lastRaterName", [], "any", false, false, false, 179), "Anonyme")) : ("Anonyme")), "js"), "html", null, true);
                    yield "')\">
                            ";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 181
                        yield "                                ";
                        if (($context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "noteMoyenne", [], "any", false, false, false, 181)))) {
                            yield "★";
                        } else {
                            yield "☆";
                        }
                        // line 182
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    yield "                        </div>
                        <small style=\"color:rgba(255,255,255,0.5);\">";
                    // line 184
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "noteMoyenne", [], "any", false, false, false, 184), "html", null, true);
                    yield "/5</small>
                        ";
                    // line 185
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nbNotes", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 186
                        yield "                            <br><small style=\"color:#2FA8FF; cursor:pointer; text-decoration:underline;\" onclick=\"openRatingModal('";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 186), "js"), "html", null, true);
                        yield "', '";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "noteMoyenne", [], "any", false, false, false, 186), "html", null, true);
                        yield "', '";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nbNotes", [], "any", true, true, false, 186)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nbNotes", [], "any", false, false, false, 186), 0)) : (0)), "html", null, true);
                        yield "', '";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "lastRating", [], "any", true, true, false, 186)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "lastRating", [], "any", false, false, false, 186), "-")) : ("-")), "html", null, true);
                        yield "', '";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "lastRaterName", [], "any", true, true, false, 186)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "lastRaterName", [], "any", false, false, false, 186), "Anonyme")) : ("Anonyme")), "js"), "html", null, true);
                        yield "')\">
                                👁️ ";
                        // line 187
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nbNotes", [], "any", false, false, false, 187), "html", null, true);
                        yield " avis
                            </small>
                        ";
                    }
                    // line 190
                    yield "                    ";
                } else {
                    // line 191
                    yield "                        <span style=\"color:rgba(255,255,255,0.3);\">Non noté</span>
                    ";
                }
                // line 193
                yield "                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "idHebergement", [], "any", false, false, false, 196)]), "html", null, true);
                yield "\" class=\"btn-action btn-edit js-open-hebergement-modal\" data-modal-title=\"Modifier Hebergement\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"POST\" action=\"";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "idHebergement", [], "any", false, false, false, 199)]), "html", null, true);
                yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Etes-vous sur? Cette action est irreversible.');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "idHebergement", [], "any", false, false, false, 200))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn-action btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </div>
                </td>
                
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hebergement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            yield "        </tbody>
    </table>
</div>
";
        } else {
            // line 214
            yield "<div class=\"empty-state\">
    <i class=\"fas fa-inbox\" style=\"display: block;\"></i>
    <p>Aucun hebergement trouve</p>
    <small style=\"color: rgba(244, 248, 252, 0.4); display: block; margin-bottom: 20px;\">Commencez par creer votre premier hebergement</small>
    <a href=\"";
            // line 218
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_create");
            yield "\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus\"></i>
        <span>Creer le premier hebergement</span>
    </a>
</div>
";
        }
        // line 224
        yield "
<div id=\"hebergementModal\" class=\"hebergement-modal-overlay\" aria-hidden=\"true\">
    <div class=\"hebergement-modal-card\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"hebergementModalTitle\">
        <div class=\"hebergement-modal-header\">
            <h3 id=\"hebergementModalTitle\">Hebergement</h3>
            <button type=\"button\" id=\"hebergementModalClose\" class=\"hebergement-modal-close\" aria-label=\"Fermer\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div class=\"hebergement-modal-body\">
            <iframe id=\"hebergementModalFrame\" title=\"Formulaire Hebergement\"></iframe>
        </div>
    </div>
</div>

<style>
    .hebergement-thumb {
        width: 64px;
        height: 48px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid rgba(47, 168, 255, 0.25);
    }

    .hebergement-thumb.placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(47, 168, 255, 0.08);
        color: rgba(47, 168, 255, 0.5);
    }

    .table-description {
        display: block;
        color: rgba(244, 248, 252, 0.6);
        margin-top: 4px;
        font-size: 12px;
    }

    .toolbar-right {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .search-box {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 15px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .search-box i {
        color: #A7E3FF;
        font-size: 14px;
    }

    .search-box input {
        background: transparent;
        border: none;
        color: white;
        outline: none;
        font-size: 14px;
        width: 220px;
    }

    .search-box input::placeholder {
        color: rgba(167, 227, 255, 0.5);
    }

    .search-box:focus-within {
        border-color: rgba(47, 168, 255, 0.4);
        box-shadow: 0 0 0 3px rgba(47, 168, 255, 0.12);
    }

    .sort-dropdown {
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
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        border: 1px solid rgba(47,168,255,0.2);
        overflow: hidden;
    }

    .sort-menu.open {
        display: flex;
    }

    .sort-menu button {
        padding: 11px 14px;
        color: #A7E3FF;
        background: transparent;
        border: none;
        text-align: left;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.2s;
    }

    .sort-menu button:hover,
    .sort-menu button.active {
        background: rgba(47,168,255,0.15);
        color: #2FA8FF;
    }

    .badge-info-custom {
        background: rgba(47, 168, 255, 0.2);
        color: #2FA8FF;
        border: 1px solid #2FA8FF;
    }

    .hebergement-modal-overlay {
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

    .hebergement-modal-overlay.active {
        display: flex;
    }

    .hebergement-modal-card {
        width: min(1100px, 100%);
        max-height: calc(100vh - 48px);
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(47, 168, 255, 0.28);
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

    .hebergement-modal-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 18px;
        border-bottom: 1px solid rgba(47, 168, 255, 0.2);
        background: rgba(7, 27, 46, 0.95);
    }

    .hebergement-modal-header h3 {
        margin: 0;
        color: var(--text-primary);
        font-size: 16px;
        font-weight: 700;
    }

    .hebergement-modal-close {
        width: 34px;
        height: 34px;
        border-radius: 8px;
        border: 1px solid rgba(47, 168, 255, 0.3);
        background: rgba(255, 255, 255, 0.03);
        color: var(--text-secondary);
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .hebergement-modal-close:hover {
        color: var(--text-primary);
        border-color: rgba(47, 168, 255, 0.6);
        background: rgba(47, 168, 255, 0.12);
    }

    .hebergement-modal-body {
        height: calc(100vh - 126px);
        min-height: 520px;
        background: rgba(5, 20, 33, 0.9);
    }

    #hebergementModalFrame {
        width: 100%;
        height: 100%;
        border: 0;
        background: transparent;
    }

    @media (max-width: 768px) {
        .search-box,
        .search-box input {
            width: 100%;
            min-width: 0;
        }

        .toolbar-right {
            width: 100%;
            flex-wrap: wrap;
        }

        .action-buttons {
            justify-content: center;
        }

        .hebergement-modal-overlay {
            padding: 10px;
        }

        .hebergement-modal-body {
            min-height: 420px;
            height: calc(100vh - 110px);
        }

        .score-details-modal {
            padding: 10px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const filterButtons = document.querySelectorAll('.filter-btn[data-filter]');
    const tableBody = document.querySelector('#hebergementsTable tbody');
    const sortBtn = document.getElementById('sortBtn');
    const sortMenu = document.getElementById('sortMenu');
    const sortOptions = document.querySelectorAll('#sortMenu button[data-sort]');
    const modalTriggers = document.querySelectorAll('.js-open-hebergement-modal');
    const modal = document.getElementById('hebergementModal');
    const modalTitle = document.getElementById('hebergementModalTitle');
    const modalClose = document.getElementById('hebergementModalClose');
    const modalFrame = document.getElementById('hebergementModalFrame');
    let activeToolbarFilter = 'all';
    let activeSort = 'id_desc';
    let modalOpened = false;

    function parsePrice(value) {
        const normalized = String(value || '0').replace(',', '.').trim();
        const parsed = parseFloat(normalized);
        return Number.isFinite(parsed) ? parsed : 0;
    }

    // Tri
    function sortRows() {
        if (!tableBody) {
            return;
        }

        const rows = Array.from(tableBody.querySelectorAll('tr'));

        rows.sort(function(a, b) {
            const aId = parseInt(a.dataset.id || '0', 10);
            const bId = parseInt(b.dataset.id || '0', 10);
            const aName = (a.dataset.name || '').toLowerCase();
            const bName = (b.dataset.name || '').toLowerCase();
            const aPrice = parsePrice(a.dataset.price);
            const bPrice = parsePrice(b.dataset.price);

            switch (activeSort) {
                case 'id_asc':
                    return aId - bId;
                case 'name_asc':
                    return aName.localeCompare(bName);
                case 'name_desc':
                    return bName.localeCompare(aName);
                case 'price_asc':
                    return aPrice - bPrice;
                case 'price_desc':
                    return bPrice - aPrice;
                case 'id_desc':
                default:
                    return bId - aId;
            }
        });

        rows.forEach(function(row) {
            tableBody.appendChild(row);
        });
    }

    // Recherche et filtrage
    function applyFilters() {
        if (!tableBody) {
            return;
        }

        const searchTerm = (searchInput.value || '').toLowerCase();
        const rows = Array.from(tableBody.querySelectorAll('tr'));

        rows.forEach(row => {
            const name = row.dataset.name || '';
            const type = row.dataset.type || '';
            const typeLower = type.toLowerCase();
            const localisation = (row.children[3]?.textContent || '').toLowerCase();
            const categorie = (row.children[4]?.textContent || '').toLowerCase();

            const matchesSearch =
                name.includes(searchTerm) ||
                typeLower.includes(searchTerm) ||
                localisation.includes(searchTerm) ||
                categorie.includes(searchTerm);
            const matchesToolbar = activeToolbarFilter === 'all' || typeLower === activeToolbarFilter;

            row.style.display = matchesSearch && matchesToolbar ? '' : 'none';
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
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

        sortOptions.forEach(function(option) {
            option.addEventListener('click', function() {
                activeSort = this.dataset.sort || 'id_desc';
                sortOptions.forEach(function(item) { item.classList.remove('active'); });
                this.classList.add('active');
                sortRows();
                applyFilters();
                sortMenu.classList.remove('open');
            });
        });

        document.addEventListener('click', function(event) {
            if (!sortMenu.contains(event.target) && event.target !== sortBtn && !sortBtn.contains(event.target)) {
                sortMenu.classList.remove('open');
            }
        });
    }

    sortRows();
    applyFilters();

    function openModal(url, title) {
        if (!modal || !modalFrame) {
            window.location.href = url;
            return;
        }

        modalTitle.textContent = title || 'Hebergement';
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
            openModal(this.href, this.dataset.modalTitle || 'Hebergement');
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
                if (frameDocument && !frameDocument.getElementById('hebergement-modal-frame-style')) {
                    const cleanupStyle = frameDocument.createElement('style');
                    cleanupStyle.id = 'hebergement-modal-frame-style';
                    cleanupStyle.textContent = [
                        '.sidebar, .top-bar { display: none !important; }',
                        '.main-content { margin-left: 0 !important; width: 100% !important; }',
                        '.page-content { padding: 18px !important; }',
                        '.content-header, .breadcrumb { display: none !important; }',
                        '.search-box, .notification-btn, .settings-btn { display: none !important; }'
                    ].join(' ');

                    frameDocument.head.appendChild(cleanupStyle);

                    const cancelButton = frameDocument.querySelector('a.btn-cancel[href*=\"/admin/hebergements\"]');
                    if (cancelButton) {
                        cancelButton.addEventListener('click', function(event) {
                            event.preventDefault();
                            closeModal();
                        });
                    }
                }

                const frameUrl = new URL(modalFrame.contentWindow.location.href);
                const isBackToIndex = frameUrl.pathname.endsWith('/admin/hebergements');

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
<div id=\"ratingInfoModal\" class=\"hebergement-modal-overlay\" aria-hidden=\"true\">
    <div class=\"hebergement-modal-card\" style=\"max-width:500px;\">
        <div class=\"hebergement-modal-header\">
            <h3>⭐ Détails de la note</h3>
            <button onclick=\"document.getElementById('ratingInfoModal').classList.remove('active')\" class=\"hebergement-modal-close\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div style=\"padding:24px; color:#fff;\">
            <p><strong>Hébergement :</strong> <span id=\"modalRatingName\"></span></p>
            <p><strong>Note moyenne :</strong> <span id=\"modalRatingAvg\" style=\"color:#FFC107; font-size:24px;\"></span></p>
            <p><strong>Nombre d'avis :</strong> <span id=\"modalRatingCount\"></span></p>
            <p><strong>Dernier avis :</strong> <span id=\"modalLastRating\"></span>/5 par <span id=\"modalLastName\"></span></p>
        </div>
    </div>
</div>

<script>
function openRatingModal(name, avg, count, lastRating, lastName) {
    document.getElementById('modalRatingName').textContent = name;
    document.getElementById('modalRatingAvg').textContent = avg + '/5';
    document.getElementById('modalRatingCount').textContent = count + ' avis';
    document.getElementById('modalLastRating').textContent = lastRating;
    document.getElementById('modalLastName').textContent = lastName;
    document.getElementById('ratingInfoModal').classList.add('active');
}
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
        return "admin/hebergements/index.html.twig";
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
        return array (  551 => 224,  542 => 218,  536 => 214,  530 => 210,  514 => 200,  510 => 199,  504 => 196,  499 => 193,  495 => 191,  492 => 190,  486 => 187,  473 => 186,  471 => 185,  467 => 184,  464 => 183,  458 => 182,  451 => 181,  447 => 180,  434 => 179,  432 => 178,  428 => 176,  424 => 174,  418 => 172,  416 => 171,  411 => 170,  409 => 169,  403 => 166,  398 => 164,  394 => 163,  388 => 160,  378 => 159,  369 => 156,  365 => 155,  361 => 153,  355 => 149,  347 => 147,  345 => 146,  333 => 144,  329 => 143,  306 => 125,  297 => 118,  295 => 117,  285 => 110,  236 => 64,  222 => 53,  208 => 42,  194 => 31,  186 => 25,  184 => 24,  182 => 23,  179 => 22,  172 => 20,  169 => 19,  166 => 18,  163 => 17,  159 => 16,  156 => 15,  154 => 14,  152 => 13,  150 => 12,  137 => 11,  114 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Hebergements - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-hotel\"></i> Gestion des Hebergements
{% endblock %}

{% block breadcrumb %}Hebergements{% endblock %}

{% block content %}
{% set totalHebergements = hebergements|length %}
{% set disponibleCount = 0 %}
{% set totalPrice = 0 %}

{% for hebergement in hebergements %}
    {% if hebergement.disponibilite == 'DISPONIBLE' %}
        {% set disponibleCount = disponibleCount + 1 %}
    {% endif %}
    {% set totalPrice = totalPrice + (hebergement.prixParNuit|default(0)) %}
{% endfor %}

{% set prixMoyen = totalHebergements > 0 ? (totalPrice / totalHebergements) : 0 %}
{% set indisponibleCount = totalHebergements - disponibleCount %}

<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\">
            <i class=\"fas fa-hotel\"></i>
        </div>
        <div class=\"stat-value\">{{ totalHebergements }}</div>
        <div class=\"stat-label\">Total Hebergements</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-layer-group\"></i>
            Collection totale
        </span>
    </div>
    <div class=\"stat-card green\">
        <div class=\"stat-icon green\">
            <i class=\"fas fa-check-circle\"></i>
        </div>
        <div class=\"stat-value\">{{ disponibleCount }}</div>
        <div class=\"stat-label\">Disponibles</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-bed\"></i>
            Prets a reserver
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
            Par nuit
        </span>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon purple\">
            <i class=\"fas fa-ban\"></i>
        </div>
        <div class=\"stat-value\">{{ indisponibleCount }}</div>
        <div class=\"stat-label\">Indisponibles</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-calendar-times\"></i>
            Actuellement non dispo
        </span>
    </div>
</div>

<div class=\"toolbar\">
    <div class=\"toolbar-left\">
        <button class=\"filter-btn active\" data-filter=\"all\">
            <i class=\"fas fa-hotel\"></i>
            Tous
        </button>
        <button class=\"filter-btn\" data-filter=\"hotel\">
            <i class=\"fas fa-building\"></i>
            Hotel
        </button>
        <button class=\"filter-btn\" data-filter=\"maison\">
            <i class=\"fas fa-house\"></i>
            Maison
        </button>
        <button class=\"filter-btn\" data-filter=\"appartement\">
            <i class=\"fas fa-city\"></i>
            Appartement
        </button>
    </div>
    <div class=\"toolbar-right\">
        <div class=\"search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un hebergement...\" aria-label=\"Rechercher par nom\">
        </div>
        <div class=\"sort-dropdown\">
            <button type=\"button\" id=\"sortBtn\" class=\"btn-sort\" title=\"Trier\">
                <i class=\"fas fa-sort\"></i>
            </button>
            <div id=\"sortMenu\" class=\"sort-menu\">
                <button type=\"button\" data-sort=\"id_desc\" class=\"active\">Plus recents</button>
                <button type=\"button\" data-sort=\"id_asc\">Plus anciens</button>
                <button type=\"button\" data-sort=\"name_asc\">Nom A-Z</button>
                <button type=\"button\" data-sort=\"name_desc\">Nom Z-A</button>
                <button type=\"button\" data-sort=\"price_asc\">Prix croissant</button>
                <button type=\"button\" data-sort=\"price_desc\">Prix decroissant</button>
            </div>
        </div>
        <a href=\"{{ path('admin_hebergement_create') }}\" class=\"btn btn-primary js-open-hebergement-modal\" data-modal-title=\"Ajouter un Hebergement\">
            <i class=\"fas fa-plus\"></i>
            <span>Ajouter</span>
        </a>
    </div>
</div>

{% if hebergements %}
<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Hebergements
        </div>
        <div class=\"table-info\">
            Affichage de 1-{{ hebergements|length }} sur {{ hebergements|length }} hebergements
        </div>
    </div>
    <table id=\"hebergementsTable\">
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Localisation</th>
                <th>Categorie</th>
                <th>Prix / Nuit</th>
                <th>Disponibilite</th>
                <th>Évaluations</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for hebergement in hebergements %}
            <tr data-type=\"{{ hebergement.type|default('') }}\" data-name=\"{{ hebergement.nom|lower }}\" data-id=\"{{ hebergement.idHebergement }}\" data-price=\"{{ hebergement.prixParNuit|default('0') }}\">
                <td>
                    {% if hebergement.imagePath %}
                        <img src=\"{{ hebergement.imagePath }}\" alt=\"{{ hebergement.nom }}\" class=\"hebergement-thumb\">
                    {% else %}
                        <div class=\"hebergement-thumb placeholder\">
                            <i class=\"fas fa-image\"></i>
                        </div>
                    {% endif %}
                </td>
                <td>
                    <strong style=\"color: var(--text-primary);\">{{ hebergement.nom }}</strong>
                    <small class=\"table-description\">{{ hebergement.description|slice(0, 45) }}{% if hebergement.description|length > 45 %}...{% endif %}</small>
                </td>
                <td>
                    <span class=\"badge {% if hebergement.type == 'HOTEL' %}badge-success{% elseif hebergement.type == 'MAISON' %}badge-warning{% else %}badge-info-custom{% endif %}\">
                        {{ hebergement.type|default('N/A') }}
                    </span>
                </td>
                <td>{{ hebergement.localisation|default('N/A') }}</td>
                <td>{{ hebergement.categorieHebergement ? hebergement.categorieHebergement.nom : 'N/A' }}</td>
                <td>
                    <span style=\"color: #34D399; font-weight: 600;\">{{ hebergement.prixParNuit|default('0') }}€</span>
                </td>
                <td>
                    {% if hebergement.disponibilite == 'DISPONIBLE' %}
                        <span class=\"badge badge-success\">{{ hebergement.disponibilite }}</span>
                    {% elseif hebergement.disponibilite %}
                        <span class=\"badge badge-danger\">{{ hebergement.disponibilite }}</span>
                    {% else %}
                        <span style=\"color: rgba(244, 248, 252, 0.4);\">N/A</span>
                    {% endif %}
                </td>
                                  <td>
                    {% if hebergement.noteMoyenne %}
                        <div style=\"color:#FFC107; font-size:16px; cursor:pointer;\" onclick=\"openRatingModal('{{ hebergement.nom|escape('js') }}', '{{ hebergement.noteMoyenne }}', '{{ hebergement.nbNotes|default(0) }}', '{{ hebergement.lastRating|default('-') }}', '{{ hebergement.lastRaterName|default('Anonyme')|escape('js') }}')\">
                            {% for i in 1..5 %}
                                {% if i <= hebergement.noteMoyenne|round %}★{% else %}☆{% endif %}
                            {% endfor %}
                        </div>
                        <small style=\"color:rgba(255,255,255,0.5);\">{{ hebergement.noteMoyenne }}/5</small>
                        {% if hebergement.nbNotes %}
                            <br><small style=\"color:#2FA8FF; cursor:pointer; text-decoration:underline;\" onclick=\"openRatingModal('{{ hebergement.nom|escape('js') }}', '{{ hebergement.noteMoyenne }}', '{{ hebergement.nbNotes|default(0) }}', '{{ hebergement.lastRating|default('-') }}', '{{ hebergement.lastRaterName|default('Anonyme')|escape('js') }}')\">
                                👁️ {{ hebergement.nbNotes }} avis
                            </small>
                        {% endif %}
                    {% else %}
                        <span style=\"color:rgba(255,255,255,0.3);\">Non noté</span>
                    {% endif %}
                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"{{ path('admin_hebergement_edit', {'id': hebergement.idHebergement}) }}\" class=\"btn-action btn-edit js-open-hebergement-modal\" data-modal-title=\"Modifier Hebergement\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"POST\" action=\"{{ path('admin_hebergement_delete', {'id': hebergement.idHebergement}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Etes-vous sur? Cette action est irreversible.');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ hebergement.idHebergement) }}\">
                            <button type=\"submit\" class=\"btn-action btn-delete\" title=\"Supprimer\">
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
    <p>Aucun hebergement trouve</p>
    <small style=\"color: rgba(244, 248, 252, 0.4); display: block; margin-bottom: 20px;\">Commencez par creer votre premier hebergement</small>
    <a href=\"{{ path('admin_hebergement_create') }}\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus\"></i>
        <span>Creer le premier hebergement</span>
    </a>
</div>
{% endif %}

<div id=\"hebergementModal\" class=\"hebergement-modal-overlay\" aria-hidden=\"true\">
    <div class=\"hebergement-modal-card\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"hebergementModalTitle\">
        <div class=\"hebergement-modal-header\">
            <h3 id=\"hebergementModalTitle\">Hebergement</h3>
            <button type=\"button\" id=\"hebergementModalClose\" class=\"hebergement-modal-close\" aria-label=\"Fermer\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div class=\"hebergement-modal-body\">
            <iframe id=\"hebergementModalFrame\" title=\"Formulaire Hebergement\"></iframe>
        </div>
    </div>
</div>

<style>
    .hebergement-thumb {
        width: 64px;
        height: 48px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid rgba(47, 168, 255, 0.25);
    }

    .hebergement-thumb.placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(47, 168, 255, 0.08);
        color: rgba(47, 168, 255, 0.5);
    }

    .table-description {
        display: block;
        color: rgba(244, 248, 252, 0.6);
        margin-top: 4px;
        font-size: 12px;
    }

    .toolbar-right {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .search-box {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 15px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .search-box i {
        color: #A7E3FF;
        font-size: 14px;
    }

    .search-box input {
        background: transparent;
        border: none;
        color: white;
        outline: none;
        font-size: 14px;
        width: 220px;
    }

    .search-box input::placeholder {
        color: rgba(167, 227, 255, 0.5);
    }

    .search-box:focus-within {
        border-color: rgba(47, 168, 255, 0.4);
        box-shadow: 0 0 0 3px rgba(47, 168, 255, 0.12);
    }

    .sort-dropdown {
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
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        border: 1px solid rgba(47,168,255,0.2);
        overflow: hidden;
    }

    .sort-menu.open {
        display: flex;
    }

    .sort-menu button {
        padding: 11px 14px;
        color: #A7E3FF;
        background: transparent;
        border: none;
        text-align: left;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.2s;
    }

    .sort-menu button:hover,
    .sort-menu button.active {
        background: rgba(47,168,255,0.15);
        color: #2FA8FF;
    }

    .badge-info-custom {
        background: rgba(47, 168, 255, 0.2);
        color: #2FA8FF;
        border: 1px solid #2FA8FF;
    }

    .hebergement-modal-overlay {
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

    .hebergement-modal-overlay.active {
        display: flex;
    }

    .hebergement-modal-card {
        width: min(1100px, 100%);
        max-height: calc(100vh - 48px);
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(47, 168, 255, 0.28);
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

    .hebergement-modal-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 18px;
        border-bottom: 1px solid rgba(47, 168, 255, 0.2);
        background: rgba(7, 27, 46, 0.95);
    }

    .hebergement-modal-header h3 {
        margin: 0;
        color: var(--text-primary);
        font-size: 16px;
        font-weight: 700;
    }

    .hebergement-modal-close {
        width: 34px;
        height: 34px;
        border-radius: 8px;
        border: 1px solid rgba(47, 168, 255, 0.3);
        background: rgba(255, 255, 255, 0.03);
        color: var(--text-secondary);
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .hebergement-modal-close:hover {
        color: var(--text-primary);
        border-color: rgba(47, 168, 255, 0.6);
        background: rgba(47, 168, 255, 0.12);
    }

    .hebergement-modal-body {
        height: calc(100vh - 126px);
        min-height: 520px;
        background: rgba(5, 20, 33, 0.9);
    }

    #hebergementModalFrame {
        width: 100%;
        height: 100%;
        border: 0;
        background: transparent;
    }

    @media (max-width: 768px) {
        .search-box,
        .search-box input {
            width: 100%;
            min-width: 0;
        }

        .toolbar-right {
            width: 100%;
            flex-wrap: wrap;
        }

        .action-buttons {
            justify-content: center;
        }

        .hebergement-modal-overlay {
            padding: 10px;
        }

        .hebergement-modal-body {
            min-height: 420px;
            height: calc(100vh - 110px);
        }

        .score-details-modal {
            padding: 10px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const filterButtons = document.querySelectorAll('.filter-btn[data-filter]');
    const tableBody = document.querySelector('#hebergementsTable tbody');
    const sortBtn = document.getElementById('sortBtn');
    const sortMenu = document.getElementById('sortMenu');
    const sortOptions = document.querySelectorAll('#sortMenu button[data-sort]');
    const modalTriggers = document.querySelectorAll('.js-open-hebergement-modal');
    const modal = document.getElementById('hebergementModal');
    const modalTitle = document.getElementById('hebergementModalTitle');
    const modalClose = document.getElementById('hebergementModalClose');
    const modalFrame = document.getElementById('hebergementModalFrame');
    let activeToolbarFilter = 'all';
    let activeSort = 'id_desc';
    let modalOpened = false;

    function parsePrice(value) {
        const normalized = String(value || '0').replace(',', '.').trim();
        const parsed = parseFloat(normalized);
        return Number.isFinite(parsed) ? parsed : 0;
    }

    // Tri
    function sortRows() {
        if (!tableBody) {
            return;
        }

        const rows = Array.from(tableBody.querySelectorAll('tr'));

        rows.sort(function(a, b) {
            const aId = parseInt(a.dataset.id || '0', 10);
            const bId = parseInt(b.dataset.id || '0', 10);
            const aName = (a.dataset.name || '').toLowerCase();
            const bName = (b.dataset.name || '').toLowerCase();
            const aPrice = parsePrice(a.dataset.price);
            const bPrice = parsePrice(b.dataset.price);

            switch (activeSort) {
                case 'id_asc':
                    return aId - bId;
                case 'name_asc':
                    return aName.localeCompare(bName);
                case 'name_desc':
                    return bName.localeCompare(aName);
                case 'price_asc':
                    return aPrice - bPrice;
                case 'price_desc':
                    return bPrice - aPrice;
                case 'id_desc':
                default:
                    return bId - aId;
            }
        });

        rows.forEach(function(row) {
            tableBody.appendChild(row);
        });
    }

    // Recherche et filtrage
    function applyFilters() {
        if (!tableBody) {
            return;
        }

        const searchTerm = (searchInput.value || '').toLowerCase();
        const rows = Array.from(tableBody.querySelectorAll('tr'));

        rows.forEach(row => {
            const name = row.dataset.name || '';
            const type = row.dataset.type || '';
            const typeLower = type.toLowerCase();
            const localisation = (row.children[3]?.textContent || '').toLowerCase();
            const categorie = (row.children[4]?.textContent || '').toLowerCase();

            const matchesSearch =
                name.includes(searchTerm) ||
                typeLower.includes(searchTerm) ||
                localisation.includes(searchTerm) ||
                categorie.includes(searchTerm);
            const matchesToolbar = activeToolbarFilter === 'all' || typeLower === activeToolbarFilter;

            row.style.display = matchesSearch && matchesToolbar ? '' : 'none';
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
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

        sortOptions.forEach(function(option) {
            option.addEventListener('click', function() {
                activeSort = this.dataset.sort || 'id_desc';
                sortOptions.forEach(function(item) { item.classList.remove('active'); });
                this.classList.add('active');
                sortRows();
                applyFilters();
                sortMenu.classList.remove('open');
            });
        });

        document.addEventListener('click', function(event) {
            if (!sortMenu.contains(event.target) && event.target !== sortBtn && !sortBtn.contains(event.target)) {
                sortMenu.classList.remove('open');
            }
        });
    }

    sortRows();
    applyFilters();

    function openModal(url, title) {
        if (!modal || !modalFrame) {
            window.location.href = url;
            return;
        }

        modalTitle.textContent = title || 'Hebergement';
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
            openModal(this.href, this.dataset.modalTitle || 'Hebergement');
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
                if (frameDocument && !frameDocument.getElementById('hebergement-modal-frame-style')) {
                    const cleanupStyle = frameDocument.createElement('style');
                    cleanupStyle.id = 'hebergement-modal-frame-style';
                    cleanupStyle.textContent = [
                        '.sidebar, .top-bar { display: none !important; }',
                        '.main-content { margin-left: 0 !important; width: 100% !important; }',
                        '.page-content { padding: 18px !important; }',
                        '.content-header, .breadcrumb { display: none !important; }',
                        '.search-box, .notification-btn, .settings-btn { display: none !important; }'
                    ].join(' ');

                    frameDocument.head.appendChild(cleanupStyle);

                    const cancelButton = frameDocument.querySelector('a.btn-cancel[href*=\"/admin/hebergements\"]');
                    if (cancelButton) {
                        cancelButton.addEventListener('click', function(event) {
                            event.preventDefault();
                            closeModal();
                        });
                    }
                }

                const frameUrl = new URL(modalFrame.contentWindow.location.href);
                const isBackToIndex = frameUrl.pathname.endsWith('/admin/hebergements');

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
<div id=\"ratingInfoModal\" class=\"hebergement-modal-overlay\" aria-hidden=\"true\">
    <div class=\"hebergement-modal-card\" style=\"max-width:500px;\">
        <div class=\"hebergement-modal-header\">
            <h3>⭐ Détails de la note</h3>
            <button onclick=\"document.getElementById('ratingInfoModal').classList.remove('active')\" class=\"hebergement-modal-close\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div style=\"padding:24px; color:#fff;\">
            <p><strong>Hébergement :</strong> <span id=\"modalRatingName\"></span></p>
            <p><strong>Note moyenne :</strong> <span id=\"modalRatingAvg\" style=\"color:#FFC107; font-size:24px;\"></span></p>
            <p><strong>Nombre d'avis :</strong> <span id=\"modalRatingCount\"></span></p>
            <p><strong>Dernier avis :</strong> <span id=\"modalLastRating\"></span>/5 par <span id=\"modalLastName\"></span></p>
        </div>
    </div>
</div>

<script>
function openRatingModal(name, avg, count, lastRating, lastName) {
    document.getElementById('modalRatingName').textContent = name;
    document.getElementById('modalRatingAvg').textContent = avg + '/5';
    document.getElementById('modalRatingCount').textContent = count + ' avis';
    document.getElementById('modalLastRating').textContent = lastRating;
    document.getElementById('modalLastName').textContent = lastName;
    document.getElementById('ratingInfoModal').classList.add('active');
}
</script>
{% endblock %}
", "admin/hebergements/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\hebergements\\index.html.twig");
    }
}
