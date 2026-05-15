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

/* admin/reservationtransport/index.html.twig */
class __TwigTemplate_e68acb46c5370470b2437eab75cfad64 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservationtransport/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservationtransport/index.html.twig"));

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

        yield "Réservations Transports";
        
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

        yield "fas fa-plane-departure";
        
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

        yield "Gestion des Réservations - Transports";
        
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

        yield "Transports / Réservations";
        
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
        <div class=\"stat-label\">Total Trajets</div>
    </div>

    <div class=\"stat-card green\">
        <div class=\"stat-icon green\"><i class=\"fas fa-check\"></i></div>
        <div class=\"stat-value\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 19, $this->source); })()), "confirmed", [], "any", false, false, false, 19), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Confirmées</div>
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
    <div class=\"filter-group\">
        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_reservation_index");
        yield "\"
           class=\"filter-btn ";
        // line 33
        yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 33, $this->source); })()))) ? ("active") : (""));
        yield "\">
            Toutes
        </a>

        <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_reservation_index", ["statut" => "CONFIRMEE"]);
        yield "\"
           class=\"filter-btn ";
        // line 38
        yield ((((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 38, $this->source); })()) == "CONFIRMEE")) ? ("active") : (""));
        yield "\">
            Confirmées
        </a>

        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_reservation_index", ["statut" => "EN_ATTENTE"]);
        yield "\"
           class=\"filter-btn ";
        // line 43
        yield ((((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 43, $this->source); })()) == "EN_ATTENTE")) ? ("active") : (""));
        yield "\">
            En attente
        </a>

        <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_reservation_index", ["statut" => "ANNULEE"]);
        yield "\"
           class=\"filter-btn ";
        // line 48
        yield ((((isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 48, $this->source); })()) == "ANNULEE")) ? ("active") : (""));
        yield "\">
            Annulées
        </a>
    </div>

    <div class=\"sort-dropdown\">
        <button class=\"sort-toggle\">
            <i class=\"fas fa-sort\"></i> Trier par
        </button>

        <div class=\"sort-menu\">
            <a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_reservation_index", ["sort" => "date", "statut" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 59, $this->source); })()), "search" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 59, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\">
                Date de départ
            </a>
            <a href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_reservation_index", ["sort" => "prix", "statut" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 62, $this->source); })()), "search" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 62, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\">
                Prix
            </a>
            <a href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_reservation_index", ["sort" => "type", "statut" => (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 65, $this->source); })()), "search" => ((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 65, $this->source); })()), "")) : (""))]), "html", null, true);
        yield "\">
                Type (Avion/Voiture)
            </a>
        </div>
    </div>
</div>

<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i> Liste des trajets réservés
        </div>
    </div>

    <table>
        <thead>
        <tr>
            <th>Utilisateur</th>
            <th>Type</th>
            <th>Transport</th>
            <th>Départ le</th>
            <th>Total</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 93, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 94
            yield "            ";
            $context["transport"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "transport", [], "any", true, true, false, 94) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["row"], "transport", [], "any", false, false, false, 94)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "transport", [], "any", false, false, false, 94)) : (null));
            // line 95
            yield "            ";
            $context["res"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "reservation", [], "any", false, false, false, 95);
            // line 96
            yield "            
            <tr>
                <td>
                    <strong>";
            // line 99
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 99), "nom", [], "any", false, false, false, 99) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 99), "prenom", [], "any", false, false, false, 99)), "html", null, true)) : ("Utilisateur inconnu"));
            yield "</strong><br>
                    <small style=\"color: #888;\">";
            // line 100
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "user", [], "any", false, false, false, 100), "email", [], "any", false, false, false, 100), "html", null, true)) : (""));
            yield "</small>
                </td>

                <td>
                    ";
            // line 104
            if (((isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 104, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 104, $this->source); })()), "type", [], "any", false, false, false, 104) == "AVION"))) {
                // line 105
                yield "                        <span style=\"color: #2FA8FF;\"><i class=\"fas fa-plane\"></i> Avion</span>
                    ";
            } elseif ((            // line 106
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 106, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 106, $this->source); })()), "type", [], "any", false, false, false, 106) == "VOITURE"))) {
                // line 107
                yield "                        <span style=\"color: #FFC107;\"><i class=\"fas fa-car\"></i> Voiture</span>
                    ";
            } else {
                // line 109
                yield "                        <span style=\"color: #888;\"><i class=\"fas fa-question-circle\"></i> Inconnu</span>
                    ";
            }
            // line 111
            yield "                </td>

                <td>
                    ";
            // line 114
            yield (((($tmp = (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 114, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 114, $this->source); })()), "nom", [], "any", false, false, false, 114), "html", null, true)) : ("Transport supprimé"));
            yield "
                </td>

                <td>
                    ";
            // line 119
            yield "                    ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 119, $this->source); })()), "dateDepart", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 119, $this->source); })()), "dateDepart", [], "any", false, false, false, 119), "d/m/Y"), "html", null, true)) : ("Non définie"));
            yield "
                </td>

                <td>
                    <strong style=\"color: #FFC107;\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["res"] ?? null), "prixTotal", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 123, $this->source); })()), "prixTotal", [], "any", false, false, false, 123), ((CoreExtension::getAttribute($this->env, $this->source, ($context["res"] ?? null), "montantTotal", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 123, $this->source); })()), "montantTotal", [], "any", false, false, false, 123), 0)) : (0)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["res"] ?? null), "montantTotal", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 123, $this->source); })()), "montantTotal", [], "any", false, false, false, 123), 0)) : (0)))), "html", null, true);
            yield " TND</strong>
                </td>

                <td>
                    ";
            // line 127
            if ((Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 127, $this->source); })()), "statut", [], "any", false, false, false, 127)) == "CONFIRMEE")) {
                // line 128
                yield "                        <span class=\"badge badge-green\">Confirmée</span>
                    ";
            } elseif (((Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 129
(isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 129, $this->source); })()), "statut", [], "any", false, false, false, 129)) == "EN_ATTENTE") || (Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 129, $this->source); })()), "statut", [], "any", false, false, false, 129)) == "PENDING"))) {
                // line 130
                yield "                        <span class=\"badge badge-amber\">En attente</span>
                    ";
            } else {
                // line 132
                yield "                        <span class=\"badge badge-warning\">Annulée</span>
                    ";
            }
            // line 134
            yield "                </td>
                
                <td>
                    <a href=\"#\" class=\"btn-action view\" title=\"Voir les détails\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 142
        if (!$context['_iterated']) {
            // line 143
            yield "            <tr>
                <td colspan=\"7\" style=\"text-align: center; padding: 30px; color: #888;\">
                    Aucune réservation de transport trouvée.
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "        </tbody>
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

.filter-group {
    display: inline-flex;
    gap: 8px;
    flex-wrap: wrap;
}

.filter-btn, .sort-btn {
    padding: 8px 16px;
    border-radius: 20px;
    background: #0f2a3d;
    color: #ccc;
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.05);
}

.filter-btn:hover {
    background: #153a54;
    color: white;
}

.filter-btn.active, .sort-btn.active {
    background: #1E6FA8;
    color: white;
    border-color: #2FA8FF;
    box-shadow: 0 0 10px rgba(47, 168, 255, 0.2);
}

.toolbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    flex-wrap: wrap;
    gap: 15px;
}

.sort-dropdown {
    position: relative;
    display: inline-block;
}

.sort-toggle {
    background: #0f2a3d;
    border: 1px solid rgba(255,255,255,0.1);
    color: white;
    padding: 8px 16px;
    border-radius: 10px;
    cursor: pointer;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.sort-toggle:hover {
    background: #153a54;
}

.sort-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 100%;
    margin-top: 8px;
    background: #0f2a3d;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    padding: 8px 0;
    min-width: 180px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    z-index: 100;
}

.sort-menu a {
    display: block;
    padding: 10px 20px;
    color: #ccc;
    text-decoration: none;
    font-size: 13px;
    transition: all 0.2s ease;
}

.sort-menu a:hover {
    background: rgba(47, 168, 255, 0.15);
    color: #2FA8FF;
    padding-left: 25px; /* Petit effet de slide au survol */
}

.btn-action {
    color: #2FA8FF;
    background: rgba(47, 168, 255, 0.1);
    padding: 6px 10px;
    border-radius: 6px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.btn-action:hover {
    background: #2FA8FF;
    color: white;
}
</style>

<script>
document.querySelector('.sort-toggle').addEventListener('click', function (e) {
    e.stopPropagation();
    const menu = document.querySelector('.sort-menu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
});

// fermer si clic ailleurs
document.addEventListener('click', function (e) {
    if (!e.target.closest('.sort-dropdown')) {
        const menu = document.querySelector('.sort-menu');
        if(menu) menu.style.display = 'none';
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
        return "admin/reservationtransport/index.html.twig";
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
        return array (  409 => 149,  398 => 143,  396 => 142,  384 => 134,  380 => 132,  376 => 130,  374 => 129,  371 => 128,  369 => 127,  362 => 123,  354 => 119,  347 => 114,  342 => 111,  338 => 109,  334 => 107,  332 => 106,  329 => 105,  327 => 104,  320 => 100,  316 => 99,  311 => 96,  308 => 95,  305 => 94,  300 => 93,  269 => 65,  263 => 62,  257 => 59,  243 => 48,  239 => 47,  232 => 43,  228 => 42,  221 => 38,  217 => 37,  210 => 33,  206 => 32,  196 => 25,  187 => 19,  178 => 13,  172 => 9,  159 => 8,  136 => 6,  113 => 5,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Réservations Transports{% endblock %}
{% block page_icon %}fas fa-plane-departure{% endblock %}
{% block page_title %}Gestion des Réservations - Transports{% endblock %}
{% block breadcrumb %}Transports / Réservations{% endblock %}

{% block content %}

<div class=\"stats-grid\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon blue\"><i class=\"fas fa-ticket-alt\"></i></div>
        <div class=\"stat-value\">{{ stats.total }}</div>
        <div class=\"stat-label\">Total Trajets</div>
    </div>

    <div class=\"stat-card green\">
        <div class=\"stat-icon green\"><i class=\"fas fa-check\"></i></div>
        <div class=\"stat-value\">{{ stats.confirmed }}</div>
        <div class=\"stat-label\">Confirmées</div>
    </div>

    <div class=\"stat-card amber\">
        <div class=\"stat-icon amber\"><i class=\"fas fa-clock\"></i></div>
        <div class=\"stat-value\">{{ stats.pending }}</div>
        <div class=\"stat-label\">En attente</div>
    </div>
</div>

<div class=\"toolbar\">
    <div class=\"filter-group\">
        <a href=\"{{ path('admin_transport_reservation_index') }}\"
           class=\"filter-btn {{ currentStatus is empty ? 'active' : '' }}\">
            Toutes
        </a>

        <a href=\"{{ path('admin_transport_reservation_index', {statut: 'CONFIRMEE'}) }}\"
           class=\"filter-btn {{ currentStatus == 'CONFIRMEE' ? 'active' : '' }}\">
            Confirmées
        </a>

        <a href=\"{{ path('admin_transport_reservation_index', {statut: 'EN_ATTENTE'}) }}\"
           class=\"filter-btn {{ currentStatus == 'EN_ATTENTE' ? 'active' : '' }}\">
            En attente
        </a>

        <a href=\"{{ path('admin_transport_reservation_index', {statut: 'ANNULEE'}) }}\"
           class=\"filter-btn {{ currentStatus == 'ANNULEE' ? 'active' : '' }}\">
            Annulées
        </a>
    </div>

    <div class=\"sort-dropdown\">
        <button class=\"sort-toggle\">
            <i class=\"fas fa-sort\"></i> Trier par
        </button>

        <div class=\"sort-menu\">
            <a href=\"{{ path('admin_transport_reservation_index', {sort: 'date', statut: currentStatus, search: search|default('') }) }}\">
                Date de départ
            </a>
            <a href=\"{{ path('admin_transport_reservation_index', {sort: 'prix', statut: currentStatus, search: search|default('') }) }}\">
                Prix
            </a>
            <a href=\"{{ path('admin_transport_reservation_index', {sort: 'type', statut: currentStatus, search: search|default('') }) }}\">
                Type (Avion/Voiture)
            </a>
        </div>
    </div>
</div>

<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i> Liste des trajets réservés
        </div>
    </div>

    <table>
        <thead>
        <tr>
            <th>Utilisateur</th>
            <th>Type</th>
            <th>Transport</th>
            <th>Départ le</th>
            <th>Total</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        {% for row in data %}
            {% set transport = row.transport ?? null %}
            {% set res = row.reservation %}
            
            <tr>
                <td>
                    <strong>{{ row.user ? row.user.nom ~ ' ' ~ row.user.prenom : 'Utilisateur inconnu' }}</strong><br>
                    <small style=\"color: #888;\">{{ row.user ? row.user.email : '' }}</small>
                </td>

                <td>
                    {% if transport and transport.type == 'AVION' %}
                        <span style=\"color: #2FA8FF;\"><i class=\"fas fa-plane\"></i> Avion</span>
                    {% elseif transport and transport.type == 'VOITURE' %}
                        <span style=\"color: #FFC107;\"><i class=\"fas fa-car\"></i> Voiture</span>
                    {% else %}
                        <span style=\"color: #888;\"><i class=\"fas fa-question-circle\"></i> Inconnu</span>
                    {% endif %}
                </td>

                <td>
                    {{ transport ? transport.nom : 'Transport supprimé' }}
                </td>

                <td>
                    {# On utilise dateDebut pour les transports #}
                    {{ res.dateDepart ? res.dateDepart|date('d/m/Y') : 'Non définie' }}
                </td>

                <td>
                    <strong style=\"color: #FFC107;\">{{ res.prixTotal|default(res.montantTotal|default(0)) }} TND</strong>
                </td>

                <td>
                    {% if res.statut|upper == 'CONFIRMEE' %}
                        <span class=\"badge badge-green\">Confirmée</span>
                    {% elseif res.statut|upper == 'EN_ATTENTE' or res.statut|upper == 'PENDING' %}
                        <span class=\"badge badge-amber\">En attente</span>
                    {% else %}
                        <span class=\"badge badge-warning\">Annulée</span>
                    {% endif %}
                </td>
                
                <td>
                    <a href=\"#\" class=\"btn-action view\" title=\"Voir les détails\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\" style=\"text-align: center; padding: 30px; color: #888;\">
                    Aucune réservation de transport trouvée.
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

.filter-group {
    display: inline-flex;
    gap: 8px;
    flex-wrap: wrap;
}

.filter-btn, .sort-btn {
    padding: 8px 16px;
    border-radius: 20px;
    background: #0f2a3d;
    color: #ccc;
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.05);
}

.filter-btn:hover {
    background: #153a54;
    color: white;
}

.filter-btn.active, .sort-btn.active {
    background: #1E6FA8;
    color: white;
    border-color: #2FA8FF;
    box-shadow: 0 0 10px rgba(47, 168, 255, 0.2);
}

.toolbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    flex-wrap: wrap;
    gap: 15px;
}

.sort-dropdown {
    position: relative;
    display: inline-block;
}

.sort-toggle {
    background: #0f2a3d;
    border: 1px solid rgba(255,255,255,0.1);
    color: white;
    padding: 8px 16px;
    border-radius: 10px;
    cursor: pointer;
    font-size: 13px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.sort-toggle:hover {
    background: #153a54;
}

.sort-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 100%;
    margin-top: 8px;
    background: #0f2a3d;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    padding: 8px 0;
    min-width: 180px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    z-index: 100;
}

.sort-menu a {
    display: block;
    padding: 10px 20px;
    color: #ccc;
    text-decoration: none;
    font-size: 13px;
    transition: all 0.2s ease;
}

.sort-menu a:hover {
    background: rgba(47, 168, 255, 0.15);
    color: #2FA8FF;
    padding-left: 25px; /* Petit effet de slide au survol */
}

.btn-action {
    color: #2FA8FF;
    background: rgba(47, 168, 255, 0.1);
    padding: 6px 10px;
    border-radius: 6px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.btn-action:hover {
    background: #2FA8FF;
    color: white;
}
</style>

<script>
document.querySelector('.sort-toggle').addEventListener('click', function (e) {
    e.stopPropagation();
    const menu = document.querySelector('.sort-menu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
});

// fermer si clic ailleurs
document.addEventListener('click', function (e) {
    if (!e.target.closest('.sort-dropdown')) {
        const menu = document.querySelector('.sort-menu');
        if(menu) menu.style.display = 'none';
    }
});
</script>

{% endblock %}", "admin/reservationtransport/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\reservationtransport\\index.html.twig");
    }
}
