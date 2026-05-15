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

/* admin/reservations/index.html.twig */
class __TwigTemplate_7adc1a0118465474ffd020c9256fcf5b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservations/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservations/index.html.twig"));

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

        yield "Réservations Hébergements - Admin ASAFAR";
        
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
        yield "    <i class=\"fas fa-calendar-check\"></i> Gestion des Réservations
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

        yield "Réservations";
        
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
        $context["totalReservations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 12, $this->source); })()));
        // line 13
        $context["pendingCount"] = 0;
        // line 14
        $context["confirmedCount"] = 0;
        // line 15
        $context["cancelledCount"] = 0;
        // line 16
        $context["totalAmount"] = 0;
        // line 17
        yield "
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 19
            yield "    ";
            $context["totalAmount"] = ((isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 19, $this->source); })()) + ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", false, false, false, 19), 0)) : (0)));
            // line 20
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 20) == "EN_ATTENTE")) {
                // line 21
                yield "        ";
                $context["pendingCount"] = ((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 21, $this->source); })()) + 1);
                // line 22
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 22) == "CONFIRMEE")) {
                // line 23
                yield "        ";
                $context["confirmedCount"] = ((isset($context["confirmedCount"]) || array_key_exists("confirmedCount", $context) ? $context["confirmedCount"] : (function () { throw new RuntimeError('Variable "confirmedCount" does not exist.', 23, $this->source); })()) + 1);
                // line 24
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 24) == "ANNULEE")) {
                // line 25
                yield "        ";
                $context["cancelledCount"] = ((isset($context["cancelledCount"]) || array_key_exists("cancelledCount", $context) ? $context["cancelledCount"] : (function () { throw new RuntimeError('Variable "cancelledCount" does not exist.', 25, $this->source); })()) + 1);
                // line 26
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\">
            <i class=\"fas fa-calendar-check\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReservations"]) || array_key_exists("totalReservations", $context) ? $context["totalReservations"] : (function () { throw new RuntimeError('Variable "totalReservations" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Total Réservations</div>
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
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["confirmedCount"]) || array_key_exists("confirmedCount", $context) ? $context["confirmedCount"] : (function () { throw new RuntimeError('Variable "confirmedCount" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Confirmées</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-thumbs-up\"></i>
            Validées
        </span>
    </div>
    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\">
            <i class=\"fas fa-hourglass-half\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 56, $this->source); })()), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">En Attente</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-clock\"></i>
            À valider
        </span>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon purple\">
            <i class=\"fas fa-euro-sign\"></i>
        </div>
        <div class=\"stat-value\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 67, $this->source); })()), 0, ".", " "), "html", null, true);
        yield "€</div>
        <div class=\"stat-label\">Montant Total</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-wallet\"></i>
            Tous les montants
        </span>
    </div>
</div>

<div class=\"toolbar\">
    <div class=\"toolbar-left\">
        <button class=\"filter-btn active\" data-filter=\"all\">
            <i class=\"fas fa-list\"></i>
            Tous
        </button>
        <button class=\"filter-btn\" data-filter=\"EN_ATTENTE\">
            <i class=\"fas fa-hourglass-half\"></i>
            En Attente
        </button>
        <button class=\"filter-btn\" data-filter=\"CONFIRMEE\">
            <i class=\"fas fa-check-circle\"></i>
            Confirmée
        </button>
        <button class=\"filter-btn\" data-filter=\"ANNULEE\">
            <i class=\"fas fa-ban\"></i>
            Annulée
        </button>
    </div>
    <div class=\"toolbar-right\">
        <div class=\"search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher une réservation...\" aria-label=\"Rechercher\">
        </div>
    </div>
</div>

";
        // line 103
        if ((($tmp = (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 103, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Réservations
        </div>
        <div class=\"table-info\">
            Affichage de 1-";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 111, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 111, $this->source); })())), "html", null, true);
            yield " réservations
        </div>
    </div>
    <table id=\"reservationsTable\">
        <thead>
            <tr>
                <th>Hébergement</th>
                <th>Client</th>
                <th>Dates</th>
                <th>Nuits</th>
                <th>Personnes</th>
                <th>Montant</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 128, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 129
                yield "            <tr data-status=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 129), "html", null, true);
                yield "\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 129), "html", null, true);
                yield "\">
                <td>
                    <strong style=\"color: var(--text-primary);\">
                        ";
                // line 132
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "hebergement", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 133
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "hebergement", [], "any", false, false, false, 133), "nom", [], "any", false, false, false, 133), "html", null, true);
                    yield "
                        ";
                } else {
                    // line 135
                    yield "                            <span style=\"color: rgba(244, 248, 252, 0.4);\">Hébergement supprimé</span>
                        ";
                }
                // line 137
                yield "                    </strong>
                </td>
                <td>
                    <span style=\"color: var(--text-secondary);\">Utilisateur #";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idUser", [], "any", false, false, false, 140), "html", null, true);
                yield "</span>
                </td>
                <td>
                    <small style=\"color: rgba(244, 248, 252, 0.6);\">
                        ";
                // line 144
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateArrivee", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateArrivee", [], "any", false, false, false, 144), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "
                        → ";
                // line 145
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDepart", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDepart", [], "any", false, false, false, 145), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "
                    </small>
                </td>
                <td>
                    ";
                // line 149
                $context["nbNuits"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDepart", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateArrivee", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDepart", [], "any", false, false, false, 149), "U") - $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateArrivee", [], "any", false, false, false, 149), "U"))) : (0))) : (0));
                // line 150
                yield "                    <span style=\"color: #A7E3FF;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["nbNuits"]) || array_key_exists("nbNuits", $context) ? $context["nbNuits"] : (function () { throw new RuntimeError('Variable "nbNuits" does not exist.', 150, $this->source); })()) / 86400), 0, "floor"), "html", null, true);
                yield "</span>
                </td>
                <td>
                    <span style=\"color: var(--text-secondary);\">
                        ";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbAdultes", [], "any", false, false, false, 154), "html", null, true);
                yield "A + ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbEnfants", [], "any", false, false, false, 154), "html", null, true);
                yield "E + ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbBebes", [], "any", false, false, false, 154), "html", null, true);
                yield "B
                    </span>
                </td>
                <td>
                    <span style=\"color: #34D399; font-weight: 600;\">";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", true, true, false, 158)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", false, false, false, 158), "0")) : ("0")), "html", null, true);
                yield "€</span>
                </td>
                <td>
                    ";
                // line 161
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 161) == "EN_ATTENTE")) {
                    // line 162
                    yield "                        <span class=\"badge badge-warning\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 162), "html", null, true);
                    yield "</span>
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 163
$context["reservation"], "statut", [], "any", false, false, false, 163) == "CONFIRMEE")) {
                    // line 164
                    yield "                        <span class=\"badge badge-success\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 164), "html", null, true);
                    yield "</span>
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 165
$context["reservation"], "statut", [], "any", false, false, false, 165) == "ANNULEE")) {
                    // line 166
                    yield "                        <span class=\"badge badge-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 166), "html", null, true);
                    yield "</span>
                    ";
                } else {
                    // line 168
                    yield "                        <span style=\"color: rgba(244, 248, 252, 0.4);\">N/A</span>
                    ";
                }
                // line 170
                yield "                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 173)]), "html", null, true);
                yield "\" class=\"btn-action btn-edit\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"POST\" action=\"";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 176)]), "html", null, true);
                yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr? Cette action est irréversible.');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 177))), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            yield "        </tbody>
    </table>
</div>
";
        } else {
            // line 190
            yield "<div class=\"empty-state\">
    <i class=\"fas fa-inbox\" style=\"display: block;\"></i>
    <p>Aucune réservation trouvée</p>
    <small style=\"color: rgba(244, 248, 252, 0.4); display: block; margin-bottom: 20px;\">Les réservations apparaîtront ici</small>
</div>
";
        }
        // line 196
        yield "
<style>
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

    @media (max-width: 768px) {
        .toolbar-right {
            width: 100%;
        }

        .search-box,
        .search-box input {
            width: 100%;
            min-width: 0;
        }
    }

    .badge-warning {
        background: rgba(255, 193, 7, 0.2);
        color: #FFC107;
        border: 1px solid #FFC107;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const filterButtons = document.querySelectorAll('.filter-btn[data-filter]');
    const tableBody = document.querySelector('#reservationsTable tbody');
    let activeStatusFilter = 'all';

    function applyFilters() {
        if (!tableBody) return;

        const searchTerm = (searchInput.value || '').toLowerCase();
        const rows = Array.from(tableBody.querySelectorAll('tr'));

        rows.forEach(row => {
            const status = row.dataset.status || '';
            const rowText = row.textContent.toLowerCase();

            const matchesSearch = rowText.includes(searchTerm);
            const matchesFilter = activeStatusFilter === 'all' || status === activeStatusFilter;

            row.style.display = matchesSearch && matchesFilter ? '' : 'none';
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            activeStatusFilter = this.dataset.filter;
            applyFilters();
        });
    });

    applyFilters();
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
        return "admin/reservations/index.html.twig";
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
        return array (  462 => 196,  454 => 190,  448 => 186,  433 => 177,  429 => 176,  423 => 173,  418 => 170,  414 => 168,  408 => 166,  406 => 165,  401 => 164,  399 => 163,  394 => 162,  392 => 161,  386 => 158,  375 => 154,  367 => 150,  365 => 149,  358 => 145,  354 => 144,  347 => 140,  342 => 137,  338 => 135,  332 => 133,  330 => 132,  321 => 129,  317 => 128,  295 => 111,  286 => 104,  284 => 103,  245 => 67,  231 => 56,  217 => 45,  203 => 34,  195 => 28,  188 => 26,  185 => 25,  182 => 24,  179 => 23,  176 => 22,  173 => 21,  170 => 20,  167 => 19,  163 => 18,  160 => 17,  158 => 16,  156 => 15,  154 => 14,  152 => 13,  150 => 12,  137 => 11,  114 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Réservations Hébergements - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-calendar-check\"></i> Gestion des Réservations
{% endblock %}

{% block breadcrumb %}Réservations{% endblock %}

{% block content %}
{% set totalReservations = reservations|length %}
{% set pendingCount = 0 %}
{% set confirmedCount = 0 %}
{% set cancelledCount = 0 %}
{% set totalAmount = 0 %}

{% for reservation in reservations %}
    {% set totalAmount = totalAmount + (reservation.montantTotal|default(0)) %}
    {% if reservation.statut == 'EN_ATTENTE' %}
        {% set pendingCount = pendingCount + 1 %}
    {% elseif reservation.statut == 'CONFIRMEE' %}
        {% set confirmedCount = confirmedCount + 1 %}
    {% elseif reservation.statut == 'ANNULEE' %}
        {% set cancelledCount = cancelledCount + 1 %}
    {% endif %}
{% endfor %}

<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\">
            <i class=\"fas fa-calendar-check\"></i>
        </div>
        <div class=\"stat-value\">{{ totalReservations }}</div>
        <div class=\"stat-label\">Total Réservations</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-layer-group\"></i>
            Collection totale
        </span>
    </div>
    <div class=\"stat-card green\">
        <div class=\"stat-icon green\">
            <i class=\"fas fa-check-circle\"></i>
        </div>
        <div class=\"stat-value\">{{ confirmedCount }}</div>
        <div class=\"stat-label\">Confirmées</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-thumbs-up\"></i>
            Validées
        </span>
    </div>
    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\">
            <i class=\"fas fa-hourglass-half\"></i>
        </div>
        <div class=\"stat-value\">{{ pendingCount }}</div>
        <div class=\"stat-label\">En Attente</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-clock\"></i>
            À valider
        </span>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon purple\">
            <i class=\"fas fa-euro-sign\"></i>
        </div>
        <div class=\"stat-value\">{{ totalAmount|number_format(0, '.', ' ') }}€</div>
        <div class=\"stat-label\">Montant Total</div>
        <span class=\"stat-change positive\">
            <i class=\"fas fa-wallet\"></i>
            Tous les montants
        </span>
    </div>
</div>

<div class=\"toolbar\">
    <div class=\"toolbar-left\">
        <button class=\"filter-btn active\" data-filter=\"all\">
            <i class=\"fas fa-list\"></i>
            Tous
        </button>
        <button class=\"filter-btn\" data-filter=\"EN_ATTENTE\">
            <i class=\"fas fa-hourglass-half\"></i>
            En Attente
        </button>
        <button class=\"filter-btn\" data-filter=\"CONFIRMEE\">
            <i class=\"fas fa-check-circle\"></i>
            Confirmée
        </button>
        <button class=\"filter-btn\" data-filter=\"ANNULEE\">
            <i class=\"fas fa-ban\"></i>
            Annulée
        </button>
    </div>
    <div class=\"toolbar-right\">
        <div class=\"search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher une réservation...\" aria-label=\"Rechercher\">
        </div>
    </div>
</div>

{% if reservations %}
<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Réservations
        </div>
        <div class=\"table-info\">
            Affichage de 1-{{ reservations|length }} sur {{ reservations|length }} réservations
        </div>
    </div>
    <table id=\"reservationsTable\">
        <thead>
            <tr>
                <th>Hébergement</th>
                <th>Client</th>
                <th>Dates</th>
                <th>Nuits</th>
                <th>Personnes</th>
                <th>Montant</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for reservation in reservations %}
            <tr data-status=\"{{ reservation.statut }}\" data-id=\"{{ reservation.idReservation }}\">
                <td>
                    <strong style=\"color: var(--text-primary);\">
                        {% if reservation.hebergement %}
                            {{ reservation.hebergement.nom }}
                        {% else %}
                            <span style=\"color: rgba(244, 248, 252, 0.4);\">Hébergement supprimé</span>
                        {% endif %}
                    </strong>
                </td>
                <td>
                    <span style=\"color: var(--text-secondary);\">Utilisateur #{{ reservation.idUser }}</span>
                </td>
                <td>
                    <small style=\"color: rgba(244, 248, 252, 0.6);\">
                        {{ reservation.dateArrivee ? reservation.dateArrivee|date('d/m/Y') : 'N/A' }}
                        → {{ reservation.dateDepart ? reservation.dateDepart|date('d/m/Y') : 'N/A' }}
                    </small>
                </td>
                <td>
                    {% set nbNuits = reservation.dateDepart ? reservation.dateArrivee ? reservation.dateDepart|date('U') - reservation.dateArrivee|date('U') : 0 : 0 %}
                    <span style=\"color: #A7E3FF;\">{{ (nbNuits / 86400)|round(0, 'floor') }}</span>
                </td>
                <td>
                    <span style=\"color: var(--text-secondary);\">
                        {{ reservation.nbAdultes }}A + {{ reservation.nbEnfants }}E + {{ reservation.nbBebes }}B
                    </span>
                </td>
                <td>
                    <span style=\"color: #34D399; font-weight: 600;\">{{ reservation.montantTotal|default('0') }}€</span>
                </td>
                <td>
                    {% if reservation.statut == 'EN_ATTENTE' %}
                        <span class=\"badge badge-warning\">{{ reservation.statut }}</span>
                    {% elseif reservation.statut == 'CONFIRMEE' %}
                        <span class=\"badge badge-success\">{{ reservation.statut }}</span>
                    {% elseif reservation.statut == 'ANNULEE' %}
                        <span class=\"badge badge-danger\">{{ reservation.statut }}</span>
                    {% else %}
                        <span style=\"color: rgba(244, 248, 252, 0.4);\">N/A</span>
                    {% endif %}
                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"{{ path('admin_reservation_edit', {'id': reservation.idReservation}) }}\" class=\"btn-action btn-edit\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"POST\" action=\"{{ path('admin_reservation_delete', {'id': reservation.idReservation}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr? Cette action est irréversible.');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation.idReservation) }}\">
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
    <p>Aucune réservation trouvée</p>
    <small style=\"color: rgba(244, 248, 252, 0.4); display: block; margin-bottom: 20px;\">Les réservations apparaîtront ici</small>
</div>
{% endif %}

<style>
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

    @media (max-width: 768px) {
        .toolbar-right {
            width: 100%;
        }

        .search-box,
        .search-box input {
            width: 100%;
            min-width: 0;
        }
    }

    .badge-warning {
        background: rgba(255, 193, 7, 0.2);
        color: #FFC107;
        border: 1px solid #FFC107;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const filterButtons = document.querySelectorAll('.filter-btn[data-filter]');
    const tableBody = document.querySelector('#reservationsTable tbody');
    let activeStatusFilter = 'all';

    function applyFilters() {
        if (!tableBody) return;

        const searchTerm = (searchInput.value || '').toLowerCase();
        const rows = Array.from(tableBody.querySelectorAll('tr'));

        rows.forEach(row => {
            const status = row.dataset.status || '';
            const rowText = row.textContent.toLowerCase();

            const matchesSearch = rowText.includes(searchTerm);
            const matchesFilter = activeStatusFilter === 'all' || status === activeStatusFilter;

            row.style.display = matchesSearch && matchesFilter ? '' : 'none';
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            activeStatusFilter = this.dataset.filter;
            applyFilters();
        });
    });

    applyFilters();
});
</script>
{% endblock %}
", "admin/reservations/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\reservations\\index.html.twig");
    }
}
