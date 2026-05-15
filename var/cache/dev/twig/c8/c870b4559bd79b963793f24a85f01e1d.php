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

/* admin/reservations/edit.html.twig */
class __TwigTemplate_81780570b6b22c9fa87f94d08300b361 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservations/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservations/edit.html.twig"));

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

        yield "Modifier Réservation - Admin ASAFAR";
        
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
        yield "    <i class=\"fas fa-edit\"></i> Modifier Réservation
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

        // line 10
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_reservations");
        yield "\">Réservations</a> / Modifier
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "<div class=\"form-container\" style=\"max-width: 900px;\">
    <div class=\"form-header\">
        <h2>Détails de la Réservation</h2>
        <p style=\"color: rgba(244, 248, 252, 0.6); margin-top: 8px;\">Réservation #";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })()), "idReservation", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
    </div>

    <form method=\"POST\" class=\"admin-form\">
        <div class=\"form-grid\">
            <!-- Hebergement Info -->
            <div class=\"form-section\" style=\"grid-column: 1 / -1;\">
                <h3 style=\"color: #2FA8FF; margin-bottom: 16px;\">Hébergement</h3>
                ";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 25, $this->source); })()), "hebergement", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "                    <div style=\"background: rgba(47, 168, 255, 0.08); padding: 16px; border-radius: 8px; border: 1px solid rgba(47, 168, 255, 0.15);\">
                        <strong style=\"color: var(--text-primary);\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "hebergement", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true);
            yield "</strong>
                        <small style=\"display: block; color: rgba(244, 248, 252, 0.6); margin-top: 4px;\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 28, $this->source); })()), "hebergement", [], "any", false, false, false, 28), "localisation", [], "any", false, false, false, 28), "html", null, true);
            yield "</small>
                    </div>
                ";
        } else {
            // line 31
            yield "                    <div style=\"color: rgba(244, 248, 252, 0.4);\">Hébergement supprimé</div>
                ";
        }
        // line 33
        yield "            </div>

            <!-- Dates -->
            <div class=\"form-section\">
                <label>Date d'Arrivée</label>
                <div class=\"readonly-field\">
                    ";
        // line 39
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 39, $this->source); })()), "dateArrivee", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 39, $this->source); })()), "dateArrivee", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "
                </div>
            </div>

            <div class=\"form-section\">
                <label>Date de Départ</label>
                <div class=\"readonly-field\">
                    ";
        // line 46
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "dateDepart", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "dateDepart", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "
                </div>
            </div>

            <!-- Guest Numbers -->
            <div class=\"form-section\">
                <label for=\"nbAdultes\">Nombre d'Adultes</label>
                <input type=\"number\" id=\"nbAdultes\" name=\"nbAdultes\" min=\"1\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 53, $this->source); })()), "nbAdultes", [], "any", false, false, false, 53), "html", null, true);
        yield "\" class=\"form-input\">
            </div>

            <div class=\"form-section\">
                <label for=\"nbEnfants\">Nombre d'Enfants</label>
                <input type=\"number\" id=\"nbEnfants\" name=\"nbEnfants\" min=\"0\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "nbEnfants", [], "any", false, false, false, 58), "html", null, true);
        yield "\" class=\"form-input\">
            </div>

            <div class=\"form-section\">
                <label for=\"nbBebes\">Nombre de Bébés</label>
                <input type=\"number\" id=\"nbBebes\" name=\"nbBebes\" min=\"0\" value=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 63, $this->source); })()), "nbBebes", [], "any", false, false, false, 63), "html", null, true);
        yield "\" class=\"form-input\">
            </div>

            <!-- Amount and Status -->
            <div class=\"form-section\">
                <label>Montant Total</label>
                <div class=\"readonly-field\" style=\"color: #34D399; font-weight: 600;\">
                    ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 70, $this->source); })()), "montantTotal", [], "any", false, false, false, 70), "html", null, true);
        yield "€
                </div>
            </div>

            <div class=\"form-section\">
                <label for=\"statut\">Statut</label>
                <select id=\"statut\" name=\"statut\" class=\"form-input\">
                    <option value=\"EN_ATTENTE\" ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 77, $this->source); })()), "statut", [], "any", false, false, false, 77) == "EN_ATTENTE")) {
            yield "selected";
        }
        yield ">En Attente</option>
                    <option value=\"CONFIRMEE\" ";
        // line 78
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 78, $this->source); })()), "statut", [], "any", false, false, false, 78) == "CONFIRMEE")) {
            yield "selected";
        }
        yield ">Confirmée</option>
                    <option value=\"ANNULEE\" ";
        // line 79
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 79, $this->source); })()), "statut", [], "any", false, false, false, 79) == "ANNULEE")) {
            yield "selected";
        }
        yield ">Annulée</option>
                </select>
            </div>

            <!-- User Info -->
            <div class=\"form-section\" style=\"grid-column: 1 / -1;\">
                <h3 style=\"color: #2FA8FF; margin-bottom: 16px;\">Client</h3>
                <div style=\"background: rgba(47, 168, 255, 0.08); padding: 16px; border-radius: 8px; border: 1px solid rgba(47, 168, 255, 0.15);\">
                    <p style=\"margin: 0;\">
                        <strong>ID Utilisateur:</strong>
                        <span style=\"color: var(--text-secondary);\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 89, $this->source); })()), "idUser", [], "any", false, false, false, 89), "html", null, true);
        yield "</span>
                    </p>
                </div>
            </div>

            <!-- Reservation Metadata -->
            <div class=\"form-section\" style=\"grid-column: 1 / -1;\">
                <h3 style=\"color: #2FA8FF; margin-bottom: 16px;\">Informations</h3>
                <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 16px;\">
                    <div style=\"background: rgba(47, 168, 255, 0.08); padding: 12px; border-radius: 8px;\">
                        <small style=\"color: rgba(244, 248, 252, 0.6);\">Réservée le</small>
                        <div style=\"color: var(--text-primary); font-weight: 500;\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 100, $this->source); })()), "dateReservation", [], "any", false, false, false, 100), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                    </div>
                    <div style=\"background: rgba(47, 168, 255, 0.08); padding: 12px; border-radius: 8px;\">
                        <small style=\"color: rgba(244, 248, 252, 0.6);\">Type</small>
                        <div style=\"color: var(--text-primary); font-weight: 500;\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 104, $this->source); })()), "typeReservation", [], "any", false, false, false, 104), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-actions\" style=\"margin-top: 32px;\">
            <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_reservations");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i>
                <span>Retour</span>
            </a>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save\"></i>
                <span>Enregistrer les modifications</span>
            </button>
        </div>
    </form>
</div>

<style>
    .form-container {
        background: rgba(11, 45, 74, 0.5);
        border: 1px solid rgba(47, 168, 255, 0.15);
        border-radius: 12px;
        padding: 28px;
        margin: 0 auto;
    }

    .form-header {
        margin-bottom: 28px;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(47, 168, 255, 0.15);
    }

    .form-header h2 {
        color: var(--text-primary);
        font-size: 22px;
        margin: 0;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-section {
        display: flex;
        flex-direction: column;
    }

    .form-section label {
        color: #A7E3FF;
        font-weight: 600;
        margin-bottom: 8px;
        font-size: 14px;
    }

    .form-input,
    .readonly-field {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(47, 168, 255, 0.2);
        border-radius: 8px;
        padding: 12px;
        color: var(--text-primary);
        font-size: 14px;
        transition: all 0.2s ease;
    }

    .form-input:focus {
        outline: none;
        border-color: #2FA8FF;
        background: rgba(47, 168, 255, 0.08);
        box-shadow: 0 0 0 3px rgba(47, 168, 255, 0.12);
    }

    .readonly-field {
        background: rgba(47, 168, 255, 0.05);
        color: var(--text-secondary);
    }

    .form-actions {
        display: flex;
        gap: 12px;
        justify-content: flex-end;
    }

    .btn {
        padding: 12px 20px;
        border-radius: 8px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        transition: all 0.2s ease;
        font-size: 14px;
    }

    .btn-primary {
        background: linear-gradient(135deg, #2FA8FF 0%, #1E6FA8 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(47, 168, 255, 0.3);
    }

    .btn-secondary {
        background: rgba(47, 168, 255, 0.1);
        color: #A7E3FF;
        border: 1px solid rgba(47, 168, 255, 0.3);
    }

    .btn-secondary:hover {
        background: rgba(47, 168, 255, 0.2);
    }

    select.form-input {
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }

        .form-actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
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
        return "admin/reservations/edit.html.twig";
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
        return array (  311 => 111,  301 => 104,  294 => 100,  280 => 89,  265 => 79,  259 => 78,  253 => 77,  243 => 70,  233 => 63,  225 => 58,  217 => 53,  207 => 46,  197 => 39,  189 => 33,  185 => 31,  179 => 28,  175 => 27,  172 => 26,  170 => 25,  159 => 17,  154 => 14,  141 => 13,  127 => 10,  114 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Modifier Réservation - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-edit\"></i> Modifier Réservation
{% endblock %}

{% block breadcrumb %}
    <a href=\"{{ path('admin_hebergement_reservations') }}\">Réservations</a> / Modifier
{% endblock %}

{% block content %}
<div class=\"form-container\" style=\"max-width: 900px;\">
    <div class=\"form-header\">
        <h2>Détails de la Réservation</h2>
        <p style=\"color: rgba(244, 248, 252, 0.6); margin-top: 8px;\">Réservation #{{ reservation.idReservation }}</p>
    </div>

    <form method=\"POST\" class=\"admin-form\">
        <div class=\"form-grid\">
            <!-- Hebergement Info -->
            <div class=\"form-section\" style=\"grid-column: 1 / -1;\">
                <h3 style=\"color: #2FA8FF; margin-bottom: 16px;\">Hébergement</h3>
                {% if reservation.hebergement %}
                    <div style=\"background: rgba(47, 168, 255, 0.08); padding: 16px; border-radius: 8px; border: 1px solid rgba(47, 168, 255, 0.15);\">
                        <strong style=\"color: var(--text-primary);\">{{ reservation.hebergement.nom }}</strong>
                        <small style=\"display: block; color: rgba(244, 248, 252, 0.6); margin-top: 4px;\">{{ reservation.hebergement.localisation }}</small>
                    </div>
                {% else %}
                    <div style=\"color: rgba(244, 248, 252, 0.4);\">Hébergement supprimé</div>
                {% endif %}
            </div>

            <!-- Dates -->
            <div class=\"form-section\">
                <label>Date d'Arrivée</label>
                <div class=\"readonly-field\">
                    {{ reservation.dateArrivee ? reservation.dateArrivee|date('d/m/Y') : 'N/A' }}
                </div>
            </div>

            <div class=\"form-section\">
                <label>Date de Départ</label>
                <div class=\"readonly-field\">
                    {{ reservation.dateDepart ? reservation.dateDepart|date('d/m/Y') : 'N/A' }}
                </div>
            </div>

            <!-- Guest Numbers -->
            <div class=\"form-section\">
                <label for=\"nbAdultes\">Nombre d'Adultes</label>
                <input type=\"number\" id=\"nbAdultes\" name=\"nbAdultes\" min=\"1\" value=\"{{ reservation.nbAdultes }}\" class=\"form-input\">
            </div>

            <div class=\"form-section\">
                <label for=\"nbEnfants\">Nombre d'Enfants</label>
                <input type=\"number\" id=\"nbEnfants\" name=\"nbEnfants\" min=\"0\" value=\"{{ reservation.nbEnfants }}\" class=\"form-input\">
            </div>

            <div class=\"form-section\">
                <label for=\"nbBebes\">Nombre de Bébés</label>
                <input type=\"number\" id=\"nbBebes\" name=\"nbBebes\" min=\"0\" value=\"{{ reservation.nbBebes }}\" class=\"form-input\">
            </div>

            <!-- Amount and Status -->
            <div class=\"form-section\">
                <label>Montant Total</label>
                <div class=\"readonly-field\" style=\"color: #34D399; font-weight: 600;\">
                    {{ reservation.montantTotal }}€
                </div>
            </div>

            <div class=\"form-section\">
                <label for=\"statut\">Statut</label>
                <select id=\"statut\" name=\"statut\" class=\"form-input\">
                    <option value=\"EN_ATTENTE\" {% if reservation.statut == 'EN_ATTENTE' %}selected{% endif %}>En Attente</option>
                    <option value=\"CONFIRMEE\" {% if reservation.statut == 'CONFIRMEE' %}selected{% endif %}>Confirmée</option>
                    <option value=\"ANNULEE\" {% if reservation.statut == 'ANNULEE' %}selected{% endif %}>Annulée</option>
                </select>
            </div>

            <!-- User Info -->
            <div class=\"form-section\" style=\"grid-column: 1 / -1;\">
                <h3 style=\"color: #2FA8FF; margin-bottom: 16px;\">Client</h3>
                <div style=\"background: rgba(47, 168, 255, 0.08); padding: 16px; border-radius: 8px; border: 1px solid rgba(47, 168, 255, 0.15);\">
                    <p style=\"margin: 0;\">
                        <strong>ID Utilisateur:</strong>
                        <span style=\"color: var(--text-secondary);\">{{ reservation.idUser }}</span>
                    </p>
                </div>
            </div>

            <!-- Reservation Metadata -->
            <div class=\"form-section\" style=\"grid-column: 1 / -1;\">
                <h3 style=\"color: #2FA8FF; margin-bottom: 16px;\">Informations</h3>
                <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 16px;\">
                    <div style=\"background: rgba(47, 168, 255, 0.08); padding: 12px; border-radius: 8px;\">
                        <small style=\"color: rgba(244, 248, 252, 0.6);\">Réservée le</small>
                        <div style=\"color: var(--text-primary); font-weight: 500;\">{{ reservation.dateReservation|date('d/m/Y H:i') }}</div>
                    </div>
                    <div style=\"background: rgba(47, 168, 255, 0.08); padding: 12px; border-radius: 8px;\">
                        <small style=\"color: rgba(244, 248, 252, 0.6);\">Type</small>
                        <div style=\"color: var(--text-primary); font-weight: 500;\">{{ reservation.typeReservation }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-actions\" style=\"margin-top: 32px;\">
            <a href=\"{{ path('admin_hebergement_reservations') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i>
                <span>Retour</span>
            </a>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save\"></i>
                <span>Enregistrer les modifications</span>
            </button>
        </div>
    </form>
</div>

<style>
    .form-container {
        background: rgba(11, 45, 74, 0.5);
        border: 1px solid rgba(47, 168, 255, 0.15);
        border-radius: 12px;
        padding: 28px;
        margin: 0 auto;
    }

    .form-header {
        margin-bottom: 28px;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(47, 168, 255, 0.15);
    }

    .form-header h2 {
        color: var(--text-primary);
        font-size: 22px;
        margin: 0;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-section {
        display: flex;
        flex-direction: column;
    }

    .form-section label {
        color: #A7E3FF;
        font-weight: 600;
        margin-bottom: 8px;
        font-size: 14px;
    }

    .form-input,
    .readonly-field {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(47, 168, 255, 0.2);
        border-radius: 8px;
        padding: 12px;
        color: var(--text-primary);
        font-size: 14px;
        transition: all 0.2s ease;
    }

    .form-input:focus {
        outline: none;
        border-color: #2FA8FF;
        background: rgba(47, 168, 255, 0.08);
        box-shadow: 0 0 0 3px rgba(47, 168, 255, 0.12);
    }

    .readonly-field {
        background: rgba(47, 168, 255, 0.05);
        color: var(--text-secondary);
    }

    .form-actions {
        display: flex;
        gap: 12px;
        justify-content: flex-end;
    }

    .btn {
        padding: 12px 20px;
        border-radius: 8px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        transition: all 0.2s ease;
        font-size: 14px;
    }

    .btn-primary {
        background: linear-gradient(135deg, #2FA8FF 0%, #1E6FA8 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(47, 168, 255, 0.3);
    }

    .btn-secondary {
        background: rgba(47, 168, 255, 0.1);
        color: #A7E3FF;
        border: 1px solid rgba(47, 168, 255, 0.3);
    }

    .btn-secondary:hover {
        background: rgba(47, 168, 255, 0.2);
    }

    select.form-input {
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }

        .form-actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
{% endblock %}
", "admin/reservations/edit.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\reservations\\edit.html.twig");
    }
}
