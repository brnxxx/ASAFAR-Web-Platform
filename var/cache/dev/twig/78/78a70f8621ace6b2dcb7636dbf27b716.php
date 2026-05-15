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

/* admin/excursion/index.html.twig */
class __TwigTemplate_fb20f5ef897dc69dab2a2a9810daa596 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/excursion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/excursion/index.html.twig"));

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

        yield "Excursions - Admin";
        
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

        yield "fas fa-map";
        
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

        yield "Gestion des Excursions";
        
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

        yield "Excursions";
        
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
<!-- Stats -->
<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\">
            <i class=\"fas fa-map\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 16, $this->source); })()), "total", [], "any", false, false, false, 16), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Total Excursions</div>
    </div>

    <div class=\"stat-card green\">
        <div class=\"stat-icon green\">
            <i class=\"fas fa-check\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 24, $this->source); })()), "active", [], "any", false, false, false, 24), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Disponibles</div>
    </div>

    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\">
            <i class=\"fas fa-calendar\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 32, $this->source); })()), "newThisMonth", [], "any", false, false, false, 32), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Nouvelles</div>
    </div>
</div>

<div class=\"toolbar\">

    <!-- LEFT : FILTER -->
    <div class=\"filter-group\">

        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_excursion_index");
        yield "\"
           class=\"filter-btn ";
        // line 43
        yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 43, $this->source); })()))) ? ("active") : (""));
        yield "\">
            Tous
        </a>

        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 48
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_excursion_index", ["categorie" => CoreExtension::getAttribute($this->env, $this->source,             // line 49
$context["cat"], "id", [], "any", false, false, false, 49), "search" =>             // line 50
(isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 50, $this->source); })()), "sort" =>             // line 51
(isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 51, $this->source); })())]), "html", null, true);
            // line 52
            yield "\"
               class=\"filter-btn ";
            // line 53
            yield ((((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 53, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 53))) ? ("active") : (""));
            yield "\">
                ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 54), "html", null, true);
            yield "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "
    </div>

    <!-- RIGHT : SEARCH + SORT + ADD -->
    <div class=\"toolbar-right\">

        <form method=\"get\" class=\"search-form\">

            ";
        // line 65
        if ((($tmp = (isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 65, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "                <input type=\"hidden\" name=\"categorie\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 66, $this->source); })()), "html", null, true);
            yield "\">
            ";
        }
        // line 68
        yield "
            ";
        // line 69
        if ((($tmp = (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 69, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "                <input type=\"hidden\" name=\"sort\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "\">
            ";
        }
        // line 72
        yield "
            <div class=\"search-box\">
                <i class=\"fas fa-search\"></i>
                <input
                    type=\"text\"
                    id=\"searchExcursion\"
                    name=\"search\"
                    value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 79, $this->source); })()), "html", null, true);
        yield "\"
                    placeholder=\"Rechercher une excursion...\"
                >
            </div>
        </form>

        <!-- SORT BUTTON -->
        <div class=\"sort-dropdown\">
            <button type=\"button\" class=\"btn-sort\"><i class=\"fas fa-sort\"></i></button>
            <div class=\"sort-menu\">
                <a href=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_excursion_index", ["sort" => "date", "categorie" => (isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 89, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 89, $this->source); })())]), "html", null, true);
        yield "\">Date</a>
                <a href=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_excursion_index", ["sort" => "prix", "categorie" => (isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 90, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 90, $this->source); })())]), "html", null, true);
        yield "\">Prix</a>
                <a href=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_excursion_index", ["sort" => "titre", "categorie" => (isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 91, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 91, $this->source); })())]), "html", null, true);
        yield "\">Titre</a>
            </div>
        </div>

        <!-- ADD BUTTON -->
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"openModal()\">
            <i class=\"fas fa-plus\"></i> Ajouter
        </button>

    </div>

</div>

<!-- Table -->
<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Excursions
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Lieu</th>
                <th>Nombre de place disponibles</th>
                <th>Description</th>
                <th>Prix Adulte</th>
                <th>Prix Enfant</th>
                <th>Prix Bébé</th>
                <th>Date</th>
                <th style=\"text-align: right;\">Actions</th>
            </tr>
        </thead>

        <tbody>
        ";
        // line 131
        if ((array_key_exists("excursions", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 131, $this->source); })())) > 0))) {
            // line 132
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 132, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 133
                yield "                <tr>

                    <td>
                        ";
                // line 136
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "imageUrl", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 137
                    yield "                            ";
                    if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "imageUrl", [], "any", false, false, false, 137)) && is_string($_v1 = "images/") && str_starts_with($_v0, $_v1))) {
                        // line 138
                        yield "                                <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "imageUrl", [], "any", false, false, false, 138)), "html", null, true);
                        yield "\" width=\"60\" style=\"border-radius:8px;\">
                            ";
                    } else {
                        // line 140
                        yield "                                <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["e"], "imageUrl", [], "any", false, false, false, 140))), "html", null, true);
                        yield "\" width=\"60\" style=\"border-radius:8px;\">
                            ";
                    }
                    // line 142
                    yield "                        ";
                } else {
                    // line 143
                    yield "                            <span>—</span>
                        ";
                }
                // line 145
                yield "                    </td>

                    <td>";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 147), "html", null, true);
                yield "</td>

                    <td>
                        ";
                // line 150
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categorie", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 151
                    yield "                            ";
                    $context["colors"] = ["blue", "green", "amber", "purple"];
                    // line 152
                    yield "                            ";
                    $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 152, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categorie", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 152, $this->source); })()))), [], "array", false, false, false, 152);
                    // line 153
                    yield "                            <span class=\"badge badge-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 153, $this->source); })()), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categorie", [], "any", false, false, false, 153), "nom", [], "any", false, false, false, 153), "html", null, true);
                    yield "</span>
                        ";
                } else {
                    // line 155
                    yield "                            <span class=\"badge badge-warning\">Sans catégorie</span>
                        ";
                }
                // line 157
                yield "                    </td>

                    <td>";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "lieu", [], "any", false, false, false, 159), "html", null, true);
                yield "</td>
                    <td>";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "nombrePlacesDisponibles", [], "any", false, false, false, 160), "html", null, true);
                yield "</td>
                    <td>";
                // line 161
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 161), 0, 40) . "..."), "html", null, true)) : ("—"));
                yield "</td>
                    <td class=\"price price-adulte\"><strong>";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixAdulte", [], "any", false, false, false, 162), "html", null, true);
                yield " DT</strong></td>
                    <td class=\"price price-enfant\">";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixEnfant", [], "any", false, false, false, 163), "html", null, true);
                yield " DT</td>
                    <td class=\"price price-bebe\">";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixBebe", [], "any", false, false, false, 164), "html", null, true);
                yield " DT</td>
                    <td>";
                // line 165
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "date", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "date", [], "any", false, false, false, 165), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "</td>

                    <td>
                        <div class=\"action-buttons\">

                            <button type=\"button\" class=\"btn-action btn-edit\"
                                onclick='openEditModal({
                                    id: \"";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "idExcursion", [], "any", false, false, false, 172), "html", null, true);
                yield "\",
                                    titre: \"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 173), "js"), "html", null, true);
                yield "\",
                                    lieu: \"";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "lieu", [], "any", false, false, false, 174), "js"), "html", null, true);
                yield "\",
                                    description: \"";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 175), "js"), "html", null, true);
                yield "\",
                                    date: \"";
                // line 176
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "date", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "date", [], "any", false, false, false, 176), "Y-m-d"), "html", null, true)) : (""));
                yield "\",
                                    duree: \"";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "duree", [], "any", false, false, false, 177), "html", null, true);
                yield "\",
                                    places: \"";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "nombrePlacesDisponibles", [], "any", false, false, false, 178), "html", null, true);
                yield "\",
                                    prixA: \"";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixAdulte", [], "any", false, false, false, 179), "html", null, true);
                yield "\",
                                    prixE: \"";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixEnfant", [], "any", false, false, false, 180), "html", null, true);
                yield "\",
                                    prixB: \"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixBebe", [], "any", false, false, false, 181), "html", null, true);
                yield "\",
                                    categorie: \"";
                // line 182
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categorie", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categorie", [], "any", false, false, false, 182), "id", [], "any", false, false, false, 182), "html", null, true)) : (""));
                yield "\"
                                })'>
                                <i class=\"fas fa-edit\"></i>
                            </button>

                            <a href=\"";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_excursion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["e"], "idExcursion", [], "any", false, false, false, 187)]), "html", null, true);
                yield "\"
                               class=\"btn-action btn-delete\"
                               onclick=\"return confirm('Supprimer cette excursion ?')\">
                                <i class=\"fas fa-trash\"></i>
                            </a>

                        </div>
                    </td>

                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            yield "        ";
        } else {
            // line 199
            yield "            <tr>
                <td colspan=\"11\">
                    <div class=\"empty-state\">
                        <i class=\"fas fa-map\"></i>
                        <h3>Aucune excursion</h3>
                        <p>Il n'y a pas encore d'excursions.</p>
                    </div>
                </td>
            </tr>
        ";
        }
        // line 209
        yield "        </tbody>
    </table>
</div>

<!-- ==================== MODAL ==================== -->
<div id=\"modalExcursion\" class=\"modal-overlay\">
    <div class=\"modal\">

        ";
        // line 217
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), 'form_start', ["attr" => ["id" => "excursionForm", "enctype" => "multipart/form-data", "novalidate" => "novalidate"]]);
        // line 223
        yield "

        ";
        // line 226
        yield "        <input type=\"hidden\" id=\"lieu-lat\" name=\"lieu_lat\">
        <input type=\"hidden\" id=\"lieu-lon\" name=\"lieu_lon\">
        <input type=\"hidden\" id=\"excursionId\" name=\"id\">

        <div class=\"modal-header\">
            <h3>
                <i class=\"fas fa-map\"></i>
                <span id=\"modalTitle\">Ajouter une excursion</span>
            </h3>
            <div class=\"modal-close\" onclick=\"closeModal()\">✕</div>
        </div>

        <div class=\"modal-body\">

            <!-- TITRE + LIEU -->
            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 243
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "titre", [], "any", false, false, false, 243), 'label');
        yield "
                    ";
        // line 244
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "titre", [], "any", false, false, false, 244), 'widget');
        yield "
                    <div class=\"error\">";
        // line 245
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "titre", [], "any", false, false, false, 245), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group\" style=\"position:relative;\">
                    ";
        // line 249
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "lieu", [], "any", false, false, false, 249), 'label');
        yield "
                    ";
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "lieu", [], "any", false, false, false, 250), 'widget', ["attr" => ["id" => "lieu-input", "autocomplete" => "off", "placeholder" => "Rechercher un lieu..."]]);
        // line 252
        yield "
                    <div class=\"error\">";
        // line 253
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "lieu", [], "any", false, false, false, 253), 'errors');
        yield "</div>
                    <div id=\"lieu-suggestions\" class=\"lieu-suggestions-box\"></div>
                </div>
            </div>

            <!-- CARTE LEAFLET -->
            <div class=\"lieu-map-wrap\">
                <div id=\"lieu-map\"></div>
            </div>

            <!-- DESCRIPTION -->
            <div class=\"form-group\">
                ";
        // line 265
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "description", [], "any", false, false, false, 265), 'label');
        yield "
                ";
        // line 266
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "description", [], "any", false, false, false, 266), 'widget');
        yield "
                <div class=\"error\">";
        // line 267
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "description", [], "any", false, false, false, 267), 'errors');
        yield "</div>
            </div>

            <!-- DATE + DUREE -->
            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 273
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "date", [], "any", false, false, false, 273), 'label');
        yield "
                    ";
        // line 274
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "date", [], "any", false, false, false, 274), 'widget', ["attr" => ["class" => "date-picker"]]);
        yield "
                    <div class=\"error\">";
        // line 275
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "date", [], "any", false, false, false, 275), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 279
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 279, $this->source); })()), "duree", [], "any", false, false, false, 279), 'label');
        yield "
                    ";
        // line 280
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "duree", [], "any", false, false, false, 280), 'widget');
        yield "
                    <div class=\"error\">";
        // line 281
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 281, $this->source); })()), "duree", [], "any", false, false, false, 281), 'errors');
        yield "</div>
                </div>
            </div>

            <!-- PLACES + CATEGORIE -->
            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 288
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "nombrePlacesDisponibles", [], "any", false, false, false, 288), 'label');
        yield "
                    ";
        // line 289
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "nombrePlacesDisponibles", [], "any", false, false, false, 289), 'widget');
        yield "
                    <div class=\"error\">";
        // line 290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "nombrePlacesDisponibles", [], "any", false, false, false, 290), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 294
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "categorie", [], "any", false, false, false, 294), 'label');
        yield "
                    ";
        // line 295
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "categorie", [], "any", false, false, false, 295), 'widget');
        yield "
                    <div class=\"error\">";
        // line 296
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), "categorie", [], "any", false, false, false, 296), 'errors');
        yield "</div>
                </div>
            </div>

            <!-- PRIX -->
            <div class=\"form-row\">
                <div class=\"form-group\">
                    ";
        // line 303
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "prixAdulte", [], "any", false, false, false, 303), 'label');
        yield "
                    ";
        // line 304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "prixAdulte", [], "any", false, false, false, 304), 'widget');
        yield "
                    <div class=\"error\">";
        // line 305
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 305, $this->source); })()), "prixAdulte", [], "any", false, false, false, 305), 'errors');
        yield "</div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 309
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "prixEnfant", [], "any", false, false, false, 309), 'label');
        yield "
                    ";
        // line 310
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "prixEnfant", [], "any", false, false, false, 310), 'widget');
        yield "
                    <div class=\"error\">";
        // line 311
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "prixEnfant", [], "any", false, false, false, 311), 'errors');
        yield "</div>
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "prixBebe", [], "any", false, false, false, 316), 'label');
        yield "
                ";
        // line 317
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "prixBebe", [], "any", false, false, false, 317), 'widget');
        yield "
                <div class=\"error\">";
        // line 318
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "prixBebe", [], "any", false, false, false, 318), 'errors');
        yield "</div>
            </div>

            <!-- IMAGE -->
            <div class=\"form-group\">
                ";
        // line 323
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "imageFile", [], "any", false, false, false, 323), 'label');
        yield "
                ";
        // line 324
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 324, $this->source); })()), "imageFile", [], "any", false, false, false, 324), 'widget', ["attr" => ["onchange" => "previewImage(event)"]]);
        // line 326
        yield "
                <img id=\"imagePreview\" src=\"\" style=\"display:none; margin-top:8px; border-radius:8px; max-width:100%;\">
            </div>

        </div>

        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal()\">Annuler</button>
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        </div>

        ";
        // line 337
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 337, $this->source); })()), 'form_end');
        yield "

    </div>
</div>

";
        // line 342
        if ((($tmp = (isset($context["showModal"]) || array_key_exists("showModal", $context) ? $context["showModal"] : (function () { throw new RuntimeError('Variable "showModal" does not exist.', 342, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 343
            yield "<script>
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('modalExcursion').classList.add('active');
});
</script>
";
        }
        // line 349
        yield "
<!-- ==================== CSS ==================== -->
<style>
.modal-overlay {
    position: fixed; top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(5, 20, 33, 0.85);
    backdrop-filter: blur(8px);
    display: none; align-items: center; justify-content: center;
    z-index: 9999;
}
.modal-overlay.active { display: flex; }
.modal {
    width: 100%; max-width: 520px; border-radius: 20px;
    background: linear-gradient(135deg, #0B2D4A, #071B2E);
    box-shadow: 0 20px 60px rgba(0,0,0,0.6);
    color: white; display: flex; flex-direction: column;
    max-height: 95vh;
}
.modal-header {
    display: flex; justify-content: space-between; align-items: center;
    padding: 20px; border-bottom: 1px solid rgba(255,255,255,0.08);
    flex-shrink: 0;
}
.modal-header h3 { margin: 0; font-size: 18px; }
.modal-close { cursor: pointer; font-size: 20px; opacity: 0.7; }
.modal-close:hover { opacity: 1; }
.modal-body { padding: 20px; max-height: 75vh; overflow-y: auto; display: flex; flex-direction: column; gap: 16px; }
.modal-footer { display: flex; justify-content: flex-end; gap: 10px; padding: 20px; border-top: 1px solid rgba(255,255,255,0.08); flex-shrink: 0; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.form-group { display: flex; flex-direction: column; gap: 6px; }
.form-group label { font-size: 13px; color: #A7E3FF; }
.form-group input,
.form-group select,
.form-group textarea {
    width: 100%; padding: 12px 14px; border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.1);
    background: rgba(255,255,255,0.05);
    color: white; transition: 0.3s; font-size: 14px;
    box-sizing: border-box;
}
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #2FA8FF;
    box-shadow: 0 0 0 3px rgba(47,168,255,0.15);
    outline: none;
}
.form-group select option { background: #0B2D4A; color: white; }
textarea { resize: none; }
input[type=\"file\"] { color: white; }
input[type=\"file\"]::file-selector-button {
    background: linear-gradient(135deg, #2FA8FF, #1E6FA8);
    border: none; padding: 8px 14px; border-radius: 8px;
    color: white; cursor: pointer; margin-right: 10px; transition: 0.3s;
}
input[type=\"file\"]::file-selector-button:hover {
    background: linear-gradient(135deg, #FFC107, #FF8F00); color: black;
}
.error { color: #ff4d4d; font-size: 12px; min-height: 16px; }
.input-error { border: 1px solid #ff4d4d !important; }

.filter-group { display: flex; gap: 10px; flex-wrap: wrap; }
.filter-btn {
    background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08);
    padding: 8px 14px; border-radius: 10px; color: #A7E3FF;
    cursor: pointer; transition: 0.3s; font-size: 13px; text-decoration: none;
}
.filter-btn.active, .filter-btn:hover {
    background: linear-gradient(135deg, #2FA8FF, #1E6FA8);
    color: white; border-color: transparent;
}

.toolbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; gap: 12px; flex-wrap: wrap; }
.toolbar-right { display: flex; align-items: center; gap: 12px; }

.search-box {
    display: flex; align-items: center; gap: 10px;
    padding: 10px 15px; border-radius: 12px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.08);
}
.search-box i { color: #A7E3FF; font-size: 14px; }
.search-box input { background: transparent; border: none; color: white; outline: none; font-size: 14px; width: 200px; }
.search-box input::placeholder { color: rgba(167,227,255,0.5); }

.sort-dropdown { position: relative; }
.btn-sort {
    background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08);
    padding: 10px 14px; border-radius: 10px; color: #A7E3FF; cursor: pointer; transition: 0.2s;
}
.btn-sort:hover { background: rgba(47,168,255,0.15); color: #2FA8FF; }
.sort-menu {
    position: absolute; top: calc(100% + 8px); right: 0;
    background: #0B2D4A; border-radius: 10px;
    display: none; flex-direction: column;
    min-width: 140px; z-index: 3000;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    border: 1px solid rgba(47,168,255,0.2); overflow: hidden;
}
.sort-menu.open { display: flex; }
.sort-menu a {
    padding: 11px 16px; color: #A7E3FF; text-decoration: none;
    font-size: 13px; font-weight: 500; transition: background 0.2s; display: flex; align-items: center; gap: 8px;
}
.sort-menu a:hover { background: rgba(47,168,255,0.15); color: #2FA8FF; }

.badge { padding: 5px 10px; border-radius: 20px; font-size: 12px; font-weight: 600; }
.badge-blue   { background: rgba(47,168,255,0.15);  color: #2FA8FF; }
.badge-green  { background: rgba(52,211,153,0.15);  color: #34D399; }
.badge-amber  { background: rgba(255,193,7,0.15);   color: #FFC107; }
.badge-purple { background: rgba(167,139,250,0.15); color: #A78BFA; }
.badge-warning { background: rgba(251,191,36,0.15); color: #FBBF24; }

.flatpickr-calendar { background: #0B2D4A; border-radius: 16px; border: 1px solid rgba(47,168,255,0.2); }
.flatpickr-day.selected { background: #FFC107; color: black; }
.flatpickr-day:hover { background: rgba(47,168,255,0.2); }

.price { font-weight: 600; font-size: 14px; }
.price-adulte { color: #2FA8FF; }
.price-enfant { color: #34D399; }
.price-bebe   { color: #A78BFA; }

/* ── CARTE ── */
.lieu-map-wrap {
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.1);
    height: 260px;
    min-height: 260px;
    flex-shrink: 0;
    /* PAS de overflow:hidden — il coupe les tuiles Leaflet qui débordent légèrement */
    overflow: visible;
    position: relative;
}
#lieu-map {
    width: 100%;
    height: 260px;
    border-radius: 12px;
    /* Contexte de stacking isolé pour que les tuiles ne soient pas masquées */
    isolation: isolate;
}

/* Neutraliser les styles globaux qui cassent les tuiles Leaflet.
   Le CSS .form-group img (background, border-radius, etc.) ne doit pas
   s'appliquer aux <img> internes de Leaflet. */
#lieu-map img,
#lieu-map canvas {
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    padding: 0 !important;
    box-shadow: none !important;
    max-width: none !important;
    width: auto !important;
    height: auto !important;
}
/* S'assurer que le pane de tuiles est bien visible */
#lieu-map .leaflet-tile-pane    { opacity: 1 !important; }
#lieu-map .leaflet-tile         { opacity: 1 !important; }
#lieu-map .leaflet-layer        { opacity: 1 !important; }
#lieu-map .leaflet-tile-loaded  { opacity: 1 !important; }

/* ── SUGGESTIONS ── */
.lieu-suggestions-box {
    display: none;
    position: absolute;
    top: 100%; left: 0; right: 0;
    background: #0b2d4a;
    border: 1px solid rgba(47,168,255,0.2);
    border-radius: 10px;
    max-height: 180px;
    overflow-y: auto;
    z-index: 10000;
    box-shadow: 0 8px 24px rgba(0,0,0,0.5);
    margin-top: 4px;
}
.lieu-suggestions-box.open { display: block; }
.lieu-suggestion-item {
    padding: 10px 14px; font-size: 13px; color: #A7E3FF;
    cursor: pointer; border-bottom: 1px solid rgba(255,255,255,0.05);
}
.lieu-suggestion-item:last-child { border-bottom: none; }
.lieu-suggestion-item:hover,
.lieu-suggestion-item:focus { background: rgba(47,168,255,0.15); color: white; outline: none; }
</style>

<!-- Leaflet CSS chargé EN PREMIER, avant tout script -->
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"/>
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/dark.css\">

<!-- Leaflet JS synchrone — doit être disponible quand DOMContentLoaded se déclenche -->
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

<!-- ==================== JS ==================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ── éléments existants ── */
    var modal       = document.getElementById('modalExcursion');
    var form        = document.getElementById('excursionForm');
    var modalTitle  = document.getElementById('modalTitle');
    var preview     = document.getElementById('imagePreview');
    var searchInput = document.getElementById('searchExcursion');
    var sortBtn     = document.querySelector('.btn-sort');
    var sortMenu    = document.querySelector('.sort-menu');

    if (!modal || !form) return;

    /* ── gestion erreurs ── */
    function clearErrors() {
        form.querySelectorAll('.error').forEach(function (el) { el.innerHTML = ''; });
        form.querySelectorAll('.input-error').forEach(function (el) { el.classList.remove('input-error'); });
    }

    function markServerErrors() {
        form.querySelectorAll('.form-group').forEach(function (group) {
            var errorDiv = group.querySelector('.error');
            var input    = group.querySelector('input, textarea, select');
            if (errorDiv && input && errorDiv.textContent.trim() !== '') {
                input.classList.add('input-error');
            }
        });
    }

    function resetPreview() {
        if (preview) { preview.src = ''; preview.style.display = 'none'; }
    }

    function clearFileInput() {
        var fileInput = form.querySelector('input[type=\"file\"]');
        if (fileInput) fileInput.value = '';
    }

    markServerErrors();

    form.querySelectorAll('input, textarea, select').forEach(function (field) {
        ['input', 'change'].forEach(function (evt) {
            field.addEventListener(evt, function () {
                if (field.type === 'file') return;
                var group    = field.closest('.form-group');
                var errorDiv = group ? group.querySelector('.error') : null;
                field.classList.remove('input-error');
                if (errorDiv) errorDiv.innerHTML = '';
            });
        });
    });

    /* ══════════════════════════════════════════════════════
       CARTE LEAFLET
    ══════════════════════════════════════════════════════ */
    var lmMap     = null;
    var lmMarker  = null;
    var lmReady   = false;
    var lmTimer   = null;

    /* Ces éléments existent dès le chargement du DOM */
    var lmSuggest = document.getElementById('lieu-suggestions');
    var lmLatEl   = document.getElementById('lieu-lat');
    var lmLonEl   = document.getElementById('lieu-lon');

    /* lmInput résolu ICI — après que le DOM est prêt —
       on essaie l'id forcé, puis les sélecteurs de name Symfony */
    var lmInput = document.getElementById('lieu-input')
               || document.querySelector('[name\$=\"[lieu]\"]')
               || document.querySelector('[name=\"lieu\"]');

    /* Affiche dans la console l'id réel du champ pour debug */
    if (lmInput) {
        console.log('[MAP] champ lieu trouvé — id:', lmInput.id, '| name:', lmInput.name);
    } else {
        console.warn('[MAP] champ lieu INTROUVABLE — vérifier le DOM');
    }

    function lmInit() {
        if (lmReady) return;
        lmReady = true;

        /* Re-résoudre lmInput ici au cas où il n'était pas dans le DOM
           au moment de DOMContentLoaded (edge case SSR) */
        if (!lmInput) {
            lmInput = document.getElementById('lieu-input')
                   || document.querySelector('[name\$=\"[lieu]\"]')
                   || document.querySelector('[name=\"lieu\"]');
        }

        lmMap = L.map('lieu-map', { preferCanvas: false, zoomControl: true })
                 .setView([36.8065, 10.1815], 6);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a>',
            maxZoom: 19,
            crossOrigin: true
        }).addTo(lmMap);

        /* Clic sur la carte → marqueur + reverse geocoding */
        lmMap.on('click', function (e) {
            lmSetMarker(e.latlng.lat, e.latlng.lng);
            fetch('https://nominatim.openstreetmap.org/reverse?lat=' + e.latlng.lat
                  + '&lon=' + e.latlng.lng + '&format=json')
                .then(function (r) { return r.json(); })
                .then(function (d) { if (lmInput && d.display_name) lmInput.value = d.display_name; })
                .catch(function () {});
        });

        /* ── AUTOCOMPLETE ── */
        if (!lmInput || !lmSuggest) {
            console.warn('[MAP] autocomplete désactivé — champ lieu ou suggestions introuvable');
            return;
        }

        function lmDoSearch(q, autoSelect) {
            if (!q || q.length < 2) {
                lmSuggest.innerHTML = '';
                lmSuggest.classList.remove('open');
                return;
            }
            fetch('https://nominatim.openstreetmap.org/search?q='
                  + encodeURIComponent(q) + '&format=json&limit=5')
                .then(function (r) { return r.json(); })
                .then(function (data) {
                    lmSuggest.innerHTML = '';
                    if (!data.length) { lmSuggest.classList.remove('open'); return; }

                    if (autoSelect) {
                        /* Enter → on prend le 1er résultat directement */
                        lmSetMarker(parseFloat(data[0].lat), parseFloat(data[0].lon), data[0].display_name);
                        lmSuggest.classList.remove('open');
                        return;
                    }

                    data.forEach(function (place) {
                        var div = document.createElement('div');
                        div.className = 'lieu-suggestion-item';
                        div.setAttribute('tabindex', '0');
                        div.textContent = place.display_name;

                        /* mousedown : avant le blur, évite la fermeture prématurée */
                        div.addEventListener('mousedown', function (e) {
                            e.preventDefault();
                            lmSetMarker(parseFloat(place.lat), parseFloat(place.lon), place.display_name);
                            lmSuggest.innerHTML = '';
                            lmSuggest.classList.remove('open');
                        });

                        lmSuggest.appendChild(div);
                    });
                    lmSuggest.classList.add('open');
                })
                .catch(function (err) { console.error('[MAP] Nominatim:', err); });
        }

        /* Frappe → debounce 400ms */
        lmInput.addEventListener('input', function () {
            clearTimeout(lmTimer);
            var q = lmInput.value.trim();
            lmTimer = setTimeout(function () { lmDoSearch(q, false); }, 400);
        });

        /* Enter → recherche immédiate + auto-sélection 1er résultat */
        lmInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                clearTimeout(lmTimer);
                lmDoSearch(lmInput.value.trim(), true);
            }
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                var first = lmSuggest.querySelector('.lieu-suggestion-item');
                if (first) first.focus();
            }
            if (e.key === 'Escape') {
                lmSuggest.innerHTML = '';
                lmSuggest.classList.remove('open');
            }
        });

        /* Navigation ↑↓ dans la liste */
        lmSuggest.addEventListener('keydown', function (e) {
            var items = Array.from(lmSuggest.querySelectorAll('.lieu-suggestion-item'));
            var idx   = items.indexOf(document.activeElement);
            if (e.key === 'ArrowDown') { e.preventDefault(); if (idx < items.length - 1) items[idx + 1].focus(); }
            if (e.key === 'ArrowUp')   { e.preventDefault(); idx > 0 ? items[idx - 1].focus() : lmInput.focus(); }
            if (e.key === 'Enter' && idx >= 0) { e.preventDefault(); items[idx].dispatchEvent(new MouseEvent('mousedown')); }
            if (e.key === 'Escape') { lmSuggest.classList.remove('open'); lmInput.focus(); }
        });

        /* Clic ailleurs → fermer */
        document.addEventListener('click', function (e) {
            if (lmInput && !lmInput.contains(e.target) && !lmSuggest.contains(e.target)) {
                lmSuggest.classList.remove('open');
            }
        });
    }

    /* Invalide la taille après que le modal est visible à l'écran.
       On utilise le double-rAF : le 1er frame applique display:flex,
       le 2e frame garantit que le layout a été calculé. */
    function lmRefresh() {
        requestAnimationFrame(function () {
            requestAnimationFrame(function () {
                if (lmMap) lmMap.invalidateSize();
            });
        });
    }

    function lmSetMarker(lat, lon, label) {
        if (!lmMap) return;
        if (lmMarker) lmMap.removeLayer(lmMarker);
        lmMarker = L.marker([lat, lon]).addTo(lmMap);
        lmMap.setView([lat, lon], 13);
        if (lmLatEl) lmLatEl.value = lat;
        if (lmLonEl) lmLonEl.value = lon;
        if (label && lmInput) lmInput.value = label;
    }

    function lmReset() {
        if (!lmMap) return;
        if (lmMarker) { lmMap.removeLayer(lmMarker); lmMarker = null; }
        lmMap.setView([36.8065, 10.1815], 6);
        if (lmLatEl)   lmLatEl.value = '';
        if (lmLonEl)   lmLonEl.value = '';
        if (lmSuggest) { lmSuggest.innerHTML = ''; lmSuggest.classList.remove('open'); }
        if (lmInput)   lmInput.value = '';
    }
    /* ══════════════════════════════════════════════════════ */

    /* ── openModal ── */
    window.openModal = function () {
        form.reset();
        clearErrors();
        clearFileInput();
        resetPreview();

        modalTitle.innerText = 'Ajouter une excursion';
        form.action = \"";
        // line 783
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_excursion_index");
        yield "\";

        var hiddenId = document.getElementById('excursionId');
        if (hiddenId) hiddenId.value = '';

        modal.classList.add('active');

        lmInit();    /* init Leaflet si pas encore fait */
        lmReset();   /* remet la vue à la Tunisie       */
        lmRefresh(); /* recalcule la taille du canvas   */
    };

    /* ── openEditModal ── */
    window.openEditModal = function (data) {
        form.reset();
        clearErrors();
        clearFileInput();
        resetPreview();

        modalTitle.innerText = 'Modifier une excursion';

        var titre       = document.querySelector('[name\$=\"[titre]\"]');
        var lieu        = document.querySelector('[name\$=\"[lieu]\"]');
        var description = document.querySelector('[name\$=\"[description]\"]');
        var date        = document.querySelector('[name\$=\"[date]\"]');
        var duree       = document.querySelector('[name\$=\"[duree]\"]');
        var places      = document.querySelector('[name\$=\"[nombrePlacesDisponibles]\"]');
        var prixAdulte  = document.querySelector('[name\$=\"[prixAdulte]\"]');
        var prixEnfant  = document.querySelector('[name\$=\"[prixEnfant]\"]');
        var prixBebe    = document.querySelector('[name\$=\"[prixBebe]\"]');
        var categorie   = document.querySelector('[name\$=\"[categorie]\"]');

        if (titre)      titre.value      = data.titre       || '';
        if (lieu)       lieu.value       = data.lieu        || '';
        if (description)description.value= data.description || '';
        if (date)       date.value       = data.date        || '';
        if (duree)      duree.value      = data.duree       || '';
        if (places)     places.value     = data.places      || '';
        if (prixAdulte) prixAdulte.value = data.prixA       || '';
        if (prixEnfant) prixEnfant.value = data.prixE       || '';
        if (prixBebe)   prixBebe.value   = data.prixB       || '';
        if (categorie)  categorie.value  = data.categorie   || '';

        var hiddenId = document.getElementById('excursionId');
        if (hiddenId) hiddenId.value = data.id || '';

        form.action = '/admin/excursion/edit/' + data.id;
        modal.classList.add('active');

        lmInit();
        lmReset();
        lmRefresh();

        /* Si l'entité a des coordonnées (data.lat / data.lon passés depuis Twig) */
        if (data.lat && data.lon) {
            requestAnimationFrame(function () {
                requestAnimationFrame(function () {
                    lmSetMarker(parseFloat(data.lat), parseFloat(data.lon), data.lieu);
                });
            });
        }
    };

    /* ── closeModal ── */
    window.closeModal = function () {
        modal.classList.remove('active');
        clearErrors();
        resetPreview();
        lmReset();
    };

    window.previewImage = function (event) {
        if (!preview) return;
        var file = event.target.files[0];
        if (file) { preview.src = URL.createObjectURL(file); preview.style.display = 'block'; }
        else resetPreview();
    };

    if (typeof flatpickr !== 'undefined') {
        flatpickr('.date-picker', { dateFormat: 'Y-m-d', minDate: 'today' });
    }

    modal.addEventListener('click', function (e) {
        if (e.target === modal) closeModal();
    });

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            var value = this.value;
            var url = new URL(window.location.href);
            if (value.trim() === '') { url.searchParams.delete('search'); }
            else { url.searchParams.set('search', value); }

            fetch(url.toString(), { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
                .then(function (res) { return res.text(); })
                .then(function (html) {
                    var parser = new DOMParser();
                    var doc = parser.parseFromString(html, 'text/html');
                    var newTable = doc.querySelector('.table-container');
                    var currentTable = document.querySelector('.table-container');
                    if (newTable && currentTable) currentTable.innerHTML = newTable.innerHTML;
                })
                .catch(function (error) { console.error(error); });
        });
    }

    if (sortBtn && sortMenu) {
        sortBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            sortMenu.classList.toggle('open');
        });
        document.addEventListener('click', function (e) {
            if (!sortBtn.contains(e.target) && !sortMenu.contains(e.target)) {
                sortMenu.classList.remove('open');
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
        return "admin/excursion/index.html.twig";
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
        return array (  1216 => 783,  780 => 349,  772 => 343,  770 => 342,  762 => 337,  749 => 326,  747 => 324,  743 => 323,  735 => 318,  731 => 317,  727 => 316,  719 => 311,  715 => 310,  711 => 309,  704 => 305,  700 => 304,  696 => 303,  686 => 296,  682 => 295,  678 => 294,  671 => 290,  667 => 289,  663 => 288,  653 => 281,  649 => 280,  645 => 279,  638 => 275,  634 => 274,  630 => 273,  621 => 267,  617 => 266,  613 => 265,  598 => 253,  595 => 252,  593 => 250,  589 => 249,  582 => 245,  578 => 244,  574 => 243,  555 => 226,  551 => 223,  549 => 217,  539 => 209,  527 => 199,  524 => 198,  507 => 187,  499 => 182,  495 => 181,  491 => 180,  487 => 179,  483 => 178,  479 => 177,  475 => 176,  471 => 175,  467 => 174,  463 => 173,  459 => 172,  449 => 165,  445 => 164,  441 => 163,  437 => 162,  433 => 161,  429 => 160,  425 => 159,  421 => 157,  417 => 155,  409 => 153,  406 => 152,  403 => 151,  401 => 150,  395 => 147,  391 => 145,  387 => 143,  384 => 142,  378 => 140,  372 => 138,  369 => 137,  367 => 136,  362 => 133,  357 => 132,  355 => 131,  312 => 91,  308 => 90,  304 => 89,  291 => 79,  282 => 72,  276 => 70,  274 => 69,  271 => 68,  265 => 66,  263 => 65,  253 => 57,  244 => 54,  240 => 53,  237 => 52,  235 => 51,  234 => 50,  233 => 49,  231 => 48,  227 => 47,  220 => 43,  216 => 42,  203 => 32,  192 => 24,  181 => 16,  172 => 9,  159 => 8,  136 => 6,  113 => 5,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Excursions - Admin{% endblock %}
{% block page_icon %}fas fa-map{% endblock %}
{% block page_title %}Gestion des Excursions{% endblock %}
{% block breadcrumb %}Excursions{% endblock %}

{% block content %}

<!-- Stats -->
<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\">
            <i class=\"fas fa-map\"></i>
        </div>
        <div class=\"stat-value\">{{ stats.total }}</div>
        <div class=\"stat-label\">Total Excursions</div>
    </div>

    <div class=\"stat-card green\">
        <div class=\"stat-icon green\">
            <i class=\"fas fa-check\"></i>
        </div>
        <div class=\"stat-value\">{{ stats.active }}</div>
        <div class=\"stat-label\">Disponibles</div>
    </div>

    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\">
            <i class=\"fas fa-calendar\"></i>
        </div>
        <div class=\"stat-value\">{{ stats.newThisMonth }}</div>
        <div class=\"stat-label\">Nouvelles</div>
    </div>
</div>

<div class=\"toolbar\">

    <!-- LEFT : FILTER -->
    <div class=\"filter-group\">

        <a href=\"{{ path('admin_excursion_index') }}\"
           class=\"filter-btn {{ currentCategorie is empty ? 'active' : '' }}\">
            Tous
        </a>

        {% for cat in categories %}
            <a href=\"{{ path('admin_excursion_index', {
                categorie: cat.id,
                search: search,
                sort: sort
            }) }}\"
               class=\"filter-btn {{ currentCategorie == cat.id ? 'active' : '' }}\">
                {{ cat.nom }}
            </a>
        {% endfor %}

    </div>

    <!-- RIGHT : SEARCH + SORT + ADD -->
    <div class=\"toolbar-right\">

        <form method=\"get\" class=\"search-form\">

            {% if currentCategorie %}
                <input type=\"hidden\" name=\"categorie\" value=\"{{ currentCategorie }}\">
            {% endif %}

            {% if sort %}
                <input type=\"hidden\" name=\"sort\" value=\"{{ sort }}\">
            {% endif %}

            <div class=\"search-box\">
                <i class=\"fas fa-search\"></i>
                <input
                    type=\"text\"
                    id=\"searchExcursion\"
                    name=\"search\"
                    value=\"{{ search }}\"
                    placeholder=\"Rechercher une excursion...\"
                >
            </div>
        </form>

        <!-- SORT BUTTON -->
        <div class=\"sort-dropdown\">
            <button type=\"button\" class=\"btn-sort\"><i class=\"fas fa-sort\"></i></button>
            <div class=\"sort-menu\">
                <a href=\"{{ path('admin_excursion_index', {sort: 'date', categorie: currentCategorie, search: search}) }}\">Date</a>
                <a href=\"{{ path('admin_excursion_index', {sort: 'prix', categorie: currentCategorie, search: search}) }}\">Prix</a>
                <a href=\"{{ path('admin_excursion_index', {sort: 'titre', categorie: currentCategorie, search: search}) }}\">Titre</a>
            </div>
        </div>

        <!-- ADD BUTTON -->
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"openModal()\">
            <i class=\"fas fa-plus\"></i> Ajouter
        </button>

    </div>

</div>

<!-- Table -->
<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Excursions
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Lieu</th>
                <th>Nombre de place disponibles</th>
                <th>Description</th>
                <th>Prix Adulte</th>
                <th>Prix Enfant</th>
                <th>Prix Bébé</th>
                <th>Date</th>
                <th style=\"text-align: right;\">Actions</th>
            </tr>
        </thead>

        <tbody>
        {% if excursions is defined and excursions|length > 0 %}
            {% for e in excursions %}
                <tr>

                    <td>
                        {% if e.imageUrl %}
                            {% if e.imageUrl starts with 'images/' %}
                                <img src=\"{{ asset(e.imageUrl) }}\" width=\"60\" style=\"border-radius:8px;\">
                            {% else %}
                                <img src=\"{{ asset('uploads/' ~ e.imageUrl) }}\" width=\"60\" style=\"border-radius:8px;\">
                            {% endif %}
                        {% else %}
                            <span>—</span>
                        {% endif %}
                    </td>

                    <td>{{ e.titre }}</td>

                    <td>
                        {% if e.categorie %}
                            {% set colors = ['blue', 'green', 'amber', 'purple'] %}
                            {% set color = colors[e.categorie.id % colors|length] %}
                            <span class=\"badge badge-{{ color }}\">{{ e.categorie.nom }}</span>
                        {% else %}
                            <span class=\"badge badge-warning\">Sans catégorie</span>
                        {% endif %}
                    </td>

                    <td>{{ e.lieu }}</td>
                    <td>{{ e.nombrePlacesDisponibles }}</td>
                    <td>{{ e.description ? e.description|slice(0, 40) ~ '...' : '—' }}</td>
                    <td class=\"price price-adulte\"><strong>{{ e.prixAdulte }} DT</strong></td>
                    <td class=\"price price-enfant\">{{ e.prixEnfant }} DT</td>
                    <td class=\"price price-bebe\">{{ e.prixBebe }} DT</td>
                    <td>{{ e.date ? e.date|date('d/m/Y') : 'N/A' }}</td>

                    <td>
                        <div class=\"action-buttons\">

                            <button type=\"button\" class=\"btn-action btn-edit\"
                                onclick='openEditModal({
                                    id: \"{{ e.idExcursion }}\",
                                    titre: \"{{ e.titre|e('js') }}\",
                                    lieu: \"{{ e.lieu|e('js') }}\",
                                    description: \"{{ e.description|e('js') }}\",
                                    date: \"{{ e.date ? e.date|date('Y-m-d') : '' }}\",
                                    duree: \"{{ e.duree }}\",
                                    places: \"{{ e.nombrePlacesDisponibles }}\",
                                    prixA: \"{{ e.prixAdulte }}\",
                                    prixE: \"{{ e.prixEnfant }}\",
                                    prixB: \"{{ e.prixBebe }}\",
                                    categorie: \"{{ e.categorie ? e.categorie.id : '' }}\"
                                })'>
                                <i class=\"fas fa-edit\"></i>
                            </button>

                            <a href=\"{{ path('admin_excursion_delete', {id: e.idExcursion}) }}\"
                               class=\"btn-action btn-delete\"
                               onclick=\"return confirm('Supprimer cette excursion ?')\">
                                <i class=\"fas fa-trash\"></i>
                            </a>

                        </div>
                    </td>

                </tr>
            {% endfor %}
        {% else %}
            <tr>
                <td colspan=\"11\">
                    <div class=\"empty-state\">
                        <i class=\"fas fa-map\"></i>
                        <h3>Aucune excursion</h3>
                        <p>Il n'y a pas encore d'excursions.</p>
                    </div>
                </td>
            </tr>
        {% endif %}
        </tbody>
    </table>
</div>

<!-- ==================== MODAL ==================== -->
<div id=\"modalExcursion\" class=\"modal-overlay\">
    <div class=\"modal\">

        {{ form_start(form, {
            attr: {
                id: 'excursionForm',
                enctype: 'multipart/form-data',
                novalidate: 'novalidate'
            }
        }) }}

        {# --- champs cachés lat/lon : simples input HTML, sans dépendance FormType --- #}
        <input type=\"hidden\" id=\"lieu-lat\" name=\"lieu_lat\">
        <input type=\"hidden\" id=\"lieu-lon\" name=\"lieu_lon\">
        <input type=\"hidden\" id=\"excursionId\" name=\"id\">

        <div class=\"modal-header\">
            <h3>
                <i class=\"fas fa-map\"></i>
                <span id=\"modalTitle\">Ajouter une excursion</span>
            </h3>
            <div class=\"modal-close\" onclick=\"closeModal()\">✕</div>
        </div>

        <div class=\"modal-body\">

            <!-- TITRE + LIEU -->
            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.titre) }}
                    {{ form_widget(form.titre) }}
                    <div class=\"error\">{{ form_errors(form.titre) }}</div>
                </div>

                <div class=\"form-group\" style=\"position:relative;\">
                    {{ form_label(form.lieu) }}
                    {{ form_widget(form.lieu, {
                        attr: { id: 'lieu-input', autocomplete: 'off', placeholder: 'Rechercher un lieu...' }
                    }) }}
                    <div class=\"error\">{{ form_errors(form.lieu) }}</div>
                    <div id=\"lieu-suggestions\" class=\"lieu-suggestions-box\"></div>
                </div>
            </div>

            <!-- CARTE LEAFLET -->
            <div class=\"lieu-map-wrap\">
                <div id=\"lieu-map\"></div>
            </div>

            <!-- DESCRIPTION -->
            <div class=\"form-group\">
                {{ form_label(form.description) }}
                {{ form_widget(form.description) }}
                <div class=\"error\">{{ form_errors(form.description) }}</div>
            </div>

            <!-- DATE + DUREE -->
            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.date) }}
                    {{ form_widget(form.date, { attr: { class: 'date-picker' } }) }}
                    <div class=\"error\">{{ form_errors(form.date) }}</div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.duree) }}
                    {{ form_widget(form.duree) }}
                    <div class=\"error\">{{ form_errors(form.duree) }}</div>
                </div>
            </div>

            <!-- PLACES + CATEGORIE -->
            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.nombrePlacesDisponibles) }}
                    {{ form_widget(form.nombrePlacesDisponibles) }}
                    <div class=\"error\">{{ form_errors(form.nombrePlacesDisponibles) }}</div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.categorie) }}
                    {{ form_widget(form.categorie) }}
                    <div class=\"error\">{{ form_errors(form.categorie) }}</div>
                </div>
            </div>

            <!-- PRIX -->
            <div class=\"form-row\">
                <div class=\"form-group\">
                    {{ form_label(form.prixAdulte) }}
                    {{ form_widget(form.prixAdulte) }}
                    <div class=\"error\">{{ form_errors(form.prixAdulte) }}</div>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.prixEnfant) }}
                    {{ form_widget(form.prixEnfant) }}
                    <div class=\"error\">{{ form_errors(form.prixEnfant) }}</div>
                </div>
            </div>

            <div class=\"form-group\">
                {{ form_label(form.prixBebe) }}
                {{ form_widget(form.prixBebe) }}
                <div class=\"error\">{{ form_errors(form.prixBebe) }}</div>
            </div>

            <!-- IMAGE -->
            <div class=\"form-group\">
                {{ form_label(form.imageFile) }}
                {{ form_widget(form.imageFile, {
                    attr: { onchange: 'previewImage(event)' }
                }) }}
                <img id=\"imagePreview\" src=\"\" style=\"display:none; margin-top:8px; border-radius:8px; max-width:100%;\">
            </div>

        </div>

        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal()\">Annuler</button>
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        </div>

        {{ form_end(form) }}

    </div>
</div>

{% if showModal %}
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('modalExcursion').classList.add('active');
});
</script>
{% endif %}

<!-- ==================== CSS ==================== -->
<style>
.modal-overlay {
    position: fixed; top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(5, 20, 33, 0.85);
    backdrop-filter: blur(8px);
    display: none; align-items: center; justify-content: center;
    z-index: 9999;
}
.modal-overlay.active { display: flex; }
.modal {
    width: 100%; max-width: 520px; border-radius: 20px;
    background: linear-gradient(135deg, #0B2D4A, #071B2E);
    box-shadow: 0 20px 60px rgba(0,0,0,0.6);
    color: white; display: flex; flex-direction: column;
    max-height: 95vh;
}
.modal-header {
    display: flex; justify-content: space-between; align-items: center;
    padding: 20px; border-bottom: 1px solid rgba(255,255,255,0.08);
    flex-shrink: 0;
}
.modal-header h3 { margin: 0; font-size: 18px; }
.modal-close { cursor: pointer; font-size: 20px; opacity: 0.7; }
.modal-close:hover { opacity: 1; }
.modal-body { padding: 20px; max-height: 75vh; overflow-y: auto; display: flex; flex-direction: column; gap: 16px; }
.modal-footer { display: flex; justify-content: flex-end; gap: 10px; padding: 20px; border-top: 1px solid rgba(255,255,255,0.08); flex-shrink: 0; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.form-group { display: flex; flex-direction: column; gap: 6px; }
.form-group label { font-size: 13px; color: #A7E3FF; }
.form-group input,
.form-group select,
.form-group textarea {
    width: 100%; padding: 12px 14px; border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.1);
    background: rgba(255,255,255,0.05);
    color: white; transition: 0.3s; font-size: 14px;
    box-sizing: border-box;
}
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #2FA8FF;
    box-shadow: 0 0 0 3px rgba(47,168,255,0.15);
    outline: none;
}
.form-group select option { background: #0B2D4A; color: white; }
textarea { resize: none; }
input[type=\"file\"] { color: white; }
input[type=\"file\"]::file-selector-button {
    background: linear-gradient(135deg, #2FA8FF, #1E6FA8);
    border: none; padding: 8px 14px; border-radius: 8px;
    color: white; cursor: pointer; margin-right: 10px; transition: 0.3s;
}
input[type=\"file\"]::file-selector-button:hover {
    background: linear-gradient(135deg, #FFC107, #FF8F00); color: black;
}
.error { color: #ff4d4d; font-size: 12px; min-height: 16px; }
.input-error { border: 1px solid #ff4d4d !important; }

.filter-group { display: flex; gap: 10px; flex-wrap: wrap; }
.filter-btn {
    background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08);
    padding: 8px 14px; border-radius: 10px; color: #A7E3FF;
    cursor: pointer; transition: 0.3s; font-size: 13px; text-decoration: none;
}
.filter-btn.active, .filter-btn:hover {
    background: linear-gradient(135deg, #2FA8FF, #1E6FA8);
    color: white; border-color: transparent;
}

.toolbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; gap: 12px; flex-wrap: wrap; }
.toolbar-right { display: flex; align-items: center; gap: 12px; }

.search-box {
    display: flex; align-items: center; gap: 10px;
    padding: 10px 15px; border-radius: 12px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.08);
}
.search-box i { color: #A7E3FF; font-size: 14px; }
.search-box input { background: transparent; border: none; color: white; outline: none; font-size: 14px; width: 200px; }
.search-box input::placeholder { color: rgba(167,227,255,0.5); }

.sort-dropdown { position: relative; }
.btn-sort {
    background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08);
    padding: 10px 14px; border-radius: 10px; color: #A7E3FF; cursor: pointer; transition: 0.2s;
}
.btn-sort:hover { background: rgba(47,168,255,0.15); color: #2FA8FF; }
.sort-menu {
    position: absolute; top: calc(100% + 8px); right: 0;
    background: #0B2D4A; border-radius: 10px;
    display: none; flex-direction: column;
    min-width: 140px; z-index: 3000;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    border: 1px solid rgba(47,168,255,0.2); overflow: hidden;
}
.sort-menu.open { display: flex; }
.sort-menu a {
    padding: 11px 16px; color: #A7E3FF; text-decoration: none;
    font-size: 13px; font-weight: 500; transition: background 0.2s; display: flex; align-items: center; gap: 8px;
}
.sort-menu a:hover { background: rgba(47,168,255,0.15); color: #2FA8FF; }

.badge { padding: 5px 10px; border-radius: 20px; font-size: 12px; font-weight: 600; }
.badge-blue   { background: rgba(47,168,255,0.15);  color: #2FA8FF; }
.badge-green  { background: rgba(52,211,153,0.15);  color: #34D399; }
.badge-amber  { background: rgba(255,193,7,0.15);   color: #FFC107; }
.badge-purple { background: rgba(167,139,250,0.15); color: #A78BFA; }
.badge-warning { background: rgba(251,191,36,0.15); color: #FBBF24; }

.flatpickr-calendar { background: #0B2D4A; border-radius: 16px; border: 1px solid rgba(47,168,255,0.2); }
.flatpickr-day.selected { background: #FFC107; color: black; }
.flatpickr-day:hover { background: rgba(47,168,255,0.2); }

.price { font-weight: 600; font-size: 14px; }
.price-adulte { color: #2FA8FF; }
.price-enfant { color: #34D399; }
.price-bebe   { color: #A78BFA; }

/* ── CARTE ── */
.lieu-map-wrap {
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.1);
    height: 260px;
    min-height: 260px;
    flex-shrink: 0;
    /* PAS de overflow:hidden — il coupe les tuiles Leaflet qui débordent légèrement */
    overflow: visible;
    position: relative;
}
#lieu-map {
    width: 100%;
    height: 260px;
    border-radius: 12px;
    /* Contexte de stacking isolé pour que les tuiles ne soient pas masquées */
    isolation: isolate;
}

/* Neutraliser les styles globaux qui cassent les tuiles Leaflet.
   Le CSS .form-group img (background, border-radius, etc.) ne doit pas
   s'appliquer aux <img> internes de Leaflet. */
#lieu-map img,
#lieu-map canvas {
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    padding: 0 !important;
    box-shadow: none !important;
    max-width: none !important;
    width: auto !important;
    height: auto !important;
}
/* S'assurer que le pane de tuiles est bien visible */
#lieu-map .leaflet-tile-pane    { opacity: 1 !important; }
#lieu-map .leaflet-tile         { opacity: 1 !important; }
#lieu-map .leaflet-layer        { opacity: 1 !important; }
#lieu-map .leaflet-tile-loaded  { opacity: 1 !important; }

/* ── SUGGESTIONS ── */
.lieu-suggestions-box {
    display: none;
    position: absolute;
    top: 100%; left: 0; right: 0;
    background: #0b2d4a;
    border: 1px solid rgba(47,168,255,0.2);
    border-radius: 10px;
    max-height: 180px;
    overflow-y: auto;
    z-index: 10000;
    box-shadow: 0 8px 24px rgba(0,0,0,0.5);
    margin-top: 4px;
}
.lieu-suggestions-box.open { display: block; }
.lieu-suggestion-item {
    padding: 10px 14px; font-size: 13px; color: #A7E3FF;
    cursor: pointer; border-bottom: 1px solid rgba(255,255,255,0.05);
}
.lieu-suggestion-item:last-child { border-bottom: none; }
.lieu-suggestion-item:hover,
.lieu-suggestion-item:focus { background: rgba(47,168,255,0.15); color: white; outline: none; }
</style>

<!-- Leaflet CSS chargé EN PREMIER, avant tout script -->
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"/>
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/dark.css\">

<!-- Leaflet JS synchrone — doit être disponible quand DOMContentLoaded se déclenche -->
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>

<!-- ==================== JS ==================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ── éléments existants ── */
    var modal       = document.getElementById('modalExcursion');
    var form        = document.getElementById('excursionForm');
    var modalTitle  = document.getElementById('modalTitle');
    var preview     = document.getElementById('imagePreview');
    var searchInput = document.getElementById('searchExcursion');
    var sortBtn     = document.querySelector('.btn-sort');
    var sortMenu    = document.querySelector('.sort-menu');

    if (!modal || !form) return;

    /* ── gestion erreurs ── */
    function clearErrors() {
        form.querySelectorAll('.error').forEach(function (el) { el.innerHTML = ''; });
        form.querySelectorAll('.input-error').forEach(function (el) { el.classList.remove('input-error'); });
    }

    function markServerErrors() {
        form.querySelectorAll('.form-group').forEach(function (group) {
            var errorDiv = group.querySelector('.error');
            var input    = group.querySelector('input, textarea, select');
            if (errorDiv && input && errorDiv.textContent.trim() !== '') {
                input.classList.add('input-error');
            }
        });
    }

    function resetPreview() {
        if (preview) { preview.src = ''; preview.style.display = 'none'; }
    }

    function clearFileInput() {
        var fileInput = form.querySelector('input[type=\"file\"]');
        if (fileInput) fileInput.value = '';
    }

    markServerErrors();

    form.querySelectorAll('input, textarea, select').forEach(function (field) {
        ['input', 'change'].forEach(function (evt) {
            field.addEventListener(evt, function () {
                if (field.type === 'file') return;
                var group    = field.closest('.form-group');
                var errorDiv = group ? group.querySelector('.error') : null;
                field.classList.remove('input-error');
                if (errorDiv) errorDiv.innerHTML = '';
            });
        });
    });

    /* ══════════════════════════════════════════════════════
       CARTE LEAFLET
    ══════════════════════════════════════════════════════ */
    var lmMap     = null;
    var lmMarker  = null;
    var lmReady   = false;
    var lmTimer   = null;

    /* Ces éléments existent dès le chargement du DOM */
    var lmSuggest = document.getElementById('lieu-suggestions');
    var lmLatEl   = document.getElementById('lieu-lat');
    var lmLonEl   = document.getElementById('lieu-lon');

    /* lmInput résolu ICI — après que le DOM est prêt —
       on essaie l'id forcé, puis les sélecteurs de name Symfony */
    var lmInput = document.getElementById('lieu-input')
               || document.querySelector('[name\$=\"[lieu]\"]')
               || document.querySelector('[name=\"lieu\"]');

    /* Affiche dans la console l'id réel du champ pour debug */
    if (lmInput) {
        console.log('[MAP] champ lieu trouvé — id:', lmInput.id, '| name:', lmInput.name);
    } else {
        console.warn('[MAP] champ lieu INTROUVABLE — vérifier le DOM');
    }

    function lmInit() {
        if (lmReady) return;
        lmReady = true;

        /* Re-résoudre lmInput ici au cas où il n'était pas dans le DOM
           au moment de DOMContentLoaded (edge case SSR) */
        if (!lmInput) {
            lmInput = document.getElementById('lieu-input')
                   || document.querySelector('[name\$=\"[lieu]\"]')
                   || document.querySelector('[name=\"lieu\"]');
        }

        lmMap = L.map('lieu-map', { preferCanvas: false, zoomControl: true })
                 .setView([36.8065, 10.1815], 6);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a>',
            maxZoom: 19,
            crossOrigin: true
        }).addTo(lmMap);

        /* Clic sur la carte → marqueur + reverse geocoding */
        lmMap.on('click', function (e) {
            lmSetMarker(e.latlng.lat, e.latlng.lng);
            fetch('https://nominatim.openstreetmap.org/reverse?lat=' + e.latlng.lat
                  + '&lon=' + e.latlng.lng + '&format=json')
                .then(function (r) { return r.json(); })
                .then(function (d) { if (lmInput && d.display_name) lmInput.value = d.display_name; })
                .catch(function () {});
        });

        /* ── AUTOCOMPLETE ── */
        if (!lmInput || !lmSuggest) {
            console.warn('[MAP] autocomplete désactivé — champ lieu ou suggestions introuvable');
            return;
        }

        function lmDoSearch(q, autoSelect) {
            if (!q || q.length < 2) {
                lmSuggest.innerHTML = '';
                lmSuggest.classList.remove('open');
                return;
            }
            fetch('https://nominatim.openstreetmap.org/search?q='
                  + encodeURIComponent(q) + '&format=json&limit=5')
                .then(function (r) { return r.json(); })
                .then(function (data) {
                    lmSuggest.innerHTML = '';
                    if (!data.length) { lmSuggest.classList.remove('open'); return; }

                    if (autoSelect) {
                        /* Enter → on prend le 1er résultat directement */
                        lmSetMarker(parseFloat(data[0].lat), parseFloat(data[0].lon), data[0].display_name);
                        lmSuggest.classList.remove('open');
                        return;
                    }

                    data.forEach(function (place) {
                        var div = document.createElement('div');
                        div.className = 'lieu-suggestion-item';
                        div.setAttribute('tabindex', '0');
                        div.textContent = place.display_name;

                        /* mousedown : avant le blur, évite la fermeture prématurée */
                        div.addEventListener('mousedown', function (e) {
                            e.preventDefault();
                            lmSetMarker(parseFloat(place.lat), parseFloat(place.lon), place.display_name);
                            lmSuggest.innerHTML = '';
                            lmSuggest.classList.remove('open');
                        });

                        lmSuggest.appendChild(div);
                    });
                    lmSuggest.classList.add('open');
                })
                .catch(function (err) { console.error('[MAP] Nominatim:', err); });
        }

        /* Frappe → debounce 400ms */
        lmInput.addEventListener('input', function () {
            clearTimeout(lmTimer);
            var q = lmInput.value.trim();
            lmTimer = setTimeout(function () { lmDoSearch(q, false); }, 400);
        });

        /* Enter → recherche immédiate + auto-sélection 1er résultat */
        lmInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                clearTimeout(lmTimer);
                lmDoSearch(lmInput.value.trim(), true);
            }
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                var first = lmSuggest.querySelector('.lieu-suggestion-item');
                if (first) first.focus();
            }
            if (e.key === 'Escape') {
                lmSuggest.innerHTML = '';
                lmSuggest.classList.remove('open');
            }
        });

        /* Navigation ↑↓ dans la liste */
        lmSuggest.addEventListener('keydown', function (e) {
            var items = Array.from(lmSuggest.querySelectorAll('.lieu-suggestion-item'));
            var idx   = items.indexOf(document.activeElement);
            if (e.key === 'ArrowDown') { e.preventDefault(); if (idx < items.length - 1) items[idx + 1].focus(); }
            if (e.key === 'ArrowUp')   { e.preventDefault(); idx > 0 ? items[idx - 1].focus() : lmInput.focus(); }
            if (e.key === 'Enter' && idx >= 0) { e.preventDefault(); items[idx].dispatchEvent(new MouseEvent('mousedown')); }
            if (e.key === 'Escape') { lmSuggest.classList.remove('open'); lmInput.focus(); }
        });

        /* Clic ailleurs → fermer */
        document.addEventListener('click', function (e) {
            if (lmInput && !lmInput.contains(e.target) && !lmSuggest.contains(e.target)) {
                lmSuggest.classList.remove('open');
            }
        });
    }

    /* Invalide la taille après que le modal est visible à l'écran.
       On utilise le double-rAF : le 1er frame applique display:flex,
       le 2e frame garantit que le layout a été calculé. */
    function lmRefresh() {
        requestAnimationFrame(function () {
            requestAnimationFrame(function () {
                if (lmMap) lmMap.invalidateSize();
            });
        });
    }

    function lmSetMarker(lat, lon, label) {
        if (!lmMap) return;
        if (lmMarker) lmMap.removeLayer(lmMarker);
        lmMarker = L.marker([lat, lon]).addTo(lmMap);
        lmMap.setView([lat, lon], 13);
        if (lmLatEl) lmLatEl.value = lat;
        if (lmLonEl) lmLonEl.value = lon;
        if (label && lmInput) lmInput.value = label;
    }

    function lmReset() {
        if (!lmMap) return;
        if (lmMarker) { lmMap.removeLayer(lmMarker); lmMarker = null; }
        lmMap.setView([36.8065, 10.1815], 6);
        if (lmLatEl)   lmLatEl.value = '';
        if (lmLonEl)   lmLonEl.value = '';
        if (lmSuggest) { lmSuggest.innerHTML = ''; lmSuggest.classList.remove('open'); }
        if (lmInput)   lmInput.value = '';
    }
    /* ══════════════════════════════════════════════════════ */

    /* ── openModal ── */
    window.openModal = function () {
        form.reset();
        clearErrors();
        clearFileInput();
        resetPreview();

        modalTitle.innerText = 'Ajouter une excursion';
        form.action = \"{{ path('admin_excursion_index') }}\";

        var hiddenId = document.getElementById('excursionId');
        if (hiddenId) hiddenId.value = '';

        modal.classList.add('active');

        lmInit();    /* init Leaflet si pas encore fait */
        lmReset();   /* remet la vue à la Tunisie       */
        lmRefresh(); /* recalcule la taille du canvas   */
    };

    /* ── openEditModal ── */
    window.openEditModal = function (data) {
        form.reset();
        clearErrors();
        clearFileInput();
        resetPreview();

        modalTitle.innerText = 'Modifier une excursion';

        var titre       = document.querySelector('[name\$=\"[titre]\"]');
        var lieu        = document.querySelector('[name\$=\"[lieu]\"]');
        var description = document.querySelector('[name\$=\"[description]\"]');
        var date        = document.querySelector('[name\$=\"[date]\"]');
        var duree       = document.querySelector('[name\$=\"[duree]\"]');
        var places      = document.querySelector('[name\$=\"[nombrePlacesDisponibles]\"]');
        var prixAdulte  = document.querySelector('[name\$=\"[prixAdulte]\"]');
        var prixEnfant  = document.querySelector('[name\$=\"[prixEnfant]\"]');
        var prixBebe    = document.querySelector('[name\$=\"[prixBebe]\"]');
        var categorie   = document.querySelector('[name\$=\"[categorie]\"]');

        if (titre)      titre.value      = data.titre       || '';
        if (lieu)       lieu.value       = data.lieu        || '';
        if (description)description.value= data.description || '';
        if (date)       date.value       = data.date        || '';
        if (duree)      duree.value      = data.duree       || '';
        if (places)     places.value     = data.places      || '';
        if (prixAdulte) prixAdulte.value = data.prixA       || '';
        if (prixEnfant) prixEnfant.value = data.prixE       || '';
        if (prixBebe)   prixBebe.value   = data.prixB       || '';
        if (categorie)  categorie.value  = data.categorie   || '';

        var hiddenId = document.getElementById('excursionId');
        if (hiddenId) hiddenId.value = data.id || '';

        form.action = '/admin/excursion/edit/' + data.id;
        modal.classList.add('active');

        lmInit();
        lmReset();
        lmRefresh();

        /* Si l'entité a des coordonnées (data.lat / data.lon passés depuis Twig) */
        if (data.lat && data.lon) {
            requestAnimationFrame(function () {
                requestAnimationFrame(function () {
                    lmSetMarker(parseFloat(data.lat), parseFloat(data.lon), data.lieu);
                });
            });
        }
    };

    /* ── closeModal ── */
    window.closeModal = function () {
        modal.classList.remove('active');
        clearErrors();
        resetPreview();
        lmReset();
    };

    window.previewImage = function (event) {
        if (!preview) return;
        var file = event.target.files[0];
        if (file) { preview.src = URL.createObjectURL(file); preview.style.display = 'block'; }
        else resetPreview();
    };

    if (typeof flatpickr !== 'undefined') {
        flatpickr('.date-picker', { dateFormat: 'Y-m-d', minDate: 'today' });
    }

    modal.addEventListener('click', function (e) {
        if (e.target === modal) closeModal();
    });

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            var value = this.value;
            var url = new URL(window.location.href);
            if (value.trim() === '') { url.searchParams.delete('search'); }
            else { url.searchParams.set('search', value); }

            fetch(url.toString(), { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
                .then(function (res) { return res.text(); })
                .then(function (html) {
                    var parser = new DOMParser();
                    var doc = parser.parseFromString(html, 'text/html');
                    var newTable = doc.querySelector('.table-container');
                    var currentTable = document.querySelector('.table-container');
                    if (newTable && currentTable) currentTable.innerHTML = newTable.innerHTML;
                })
                .catch(function (error) { console.error(error); });
        });
    }

    if (sortBtn && sortMenu) {
        sortBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            sortMenu.classList.toggle('open');
        });
        document.addEventListener('click', function (e) {
            if (!sortBtn.contains(e.target) && !sortMenu.contains(e.target)) {
                sortMenu.classList.remove('open');
            }
        });
    }

});
</script>

{% endblock %}
", "admin/excursion/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\excursion\\index.html.twig");
    }
}
