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

/* reservations_transports.html.twig */
class __TwigTemplate_64f39c4b832f57eb7e493d102944a3dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservations_transports.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservations_transports.html.twig"));

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

        yield "Mes Réservations de Transports";
        
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
        yield "<style>
    /* ============================================
       RÉSERVATIONS TRANSPORTS - DESIGN PROFESSIONNEL
       ============================================ */

    :root {
        --bg-primary: #0a0e1a;
        --bg-secondary: #141b2d;
        --accent-gold: #FFC107;
        --accent-gold-light: rgba(255, 193, 7, 0.12);
        --accent-gold-border: rgba(255, 193, 7, 0.3);
        --success: #4CAF50;
        --success-bg: rgba(76, 175, 80, 0.15);
        --success-border: rgba(76, 175, 80, 0.3);
        --warning: #FF9800;
        --warning-bg: rgba(255, 152, 0, 0.15);
        --warning-border: rgba(255, 152, 0, 0.3);
        --danger: #F44336;
        --danger-bg: rgba(244, 67, 54, 0.15);
        --danger-border: rgba(244, 67, 54, 0.3);
        --text-primary: #ffffff;
        --text-secondary: rgba(255, 255, 255, 0.5);
        --text-muted: rgba(255, 255, 255, 0.35);
        --card-bg: rgba(255, 255, 255, 0.04);
        --card-border: rgba(255, 255, 255, 0.08);
    }

    .reservations-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 60px 24px;
    }

    /* Header Section */
    .reservations-header {
        text-align: center;
        margin-bottom: 48px;
    }

    .header-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--accent-gold-light);
        border: 1px solid var(--accent-gold-border);
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: var(--accent-gold);
        margin-bottom: 20px;
    }

    .reservations-header h1 {
        font-family: 'Playfair Display', serif;
        font-size: clamp(28px, 4vw, 40px);
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 12px;
        letter-spacing: -0.5px;
    }

    .reservations-header p {
        color: var(--text-secondary);
        font-size: 16px;
        font-weight: 300;
    }

    /* Statistics Bar */
    .stats-bar {
        display: flex;
        justify-content: center;
        gap: 24px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
        padding: 16px 28px;
        background: var(--card-bg);
        border: 1px solid var(--card-border);
        border-radius: 16px;
        min-width: 130px;
        transition: all 0.3s ease;
    }

    .stat-item:hover {
        border-color: var(--accent-gold-border);
        transform: translateY(-2px);
    }

    .stat-value {
        font-size: 26px;
        font-weight: 700;
        color: var(--accent-gold);
        margin-bottom: 4px;
    }

    .stat-label {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--text-secondary);
    }

    /* Success Alert */
    .alert-success {
        background: linear-gradient(135deg, var(--success-bg), rgba(76, 175, 80, 0.05));
        border: 1px solid var(--success-border);
        border-radius: 16px;
        padding: 20px 24px;
        margin-bottom: 32px;
        display: flex;
        align-items: center;
        gap: 16px;
        color: var(--success);
        font-weight: 500;
    }

    .alert-icon {
        width: 48px;
        height: 48px;
        background: rgba(76, 175, 80, 0.2);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .alert-icon svg {
        width: 24px;
        height: 24px;
        stroke: var(--success);
        fill: none;
        stroke-width: 2;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 80px 40px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px dashed rgba(255, 255, 255, 0.1);
        border-radius: 24px;
    }

    .empty-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 24px;
        background: var(--accent-gold-light);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .empty-icon svg {
        width: 40px;
        height: 40px;
        stroke: var(--accent-gold);
        fill: none;
        stroke-width: 1.5;
    }

    .empty-state h3 {
        font-size: 20px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 8px;
    }

    .empty-state p {
        color: var(--text-secondary);
        font-size: 15px;
    }

    /* Reservation Cards */
    .reservations-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .reservation-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.02));
        border: 1px solid var(--card-border);
        border-radius: 24px;
        padding: 28px 32px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .reservation-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent, var(--accent-gold), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .reservation-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 193, 7, 0.3);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4), 0 0 40px rgba(255, 193, 7, 0.05);
    }

    .reservation-card:hover::before {
        opacity: 1;
    }

    .card-content {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 24px;
        flex-wrap: wrap;
    }

    /* Card Info Section */
    .card-info {
        flex: 1;
        min-width: 280px;
    }

    .category-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--accent-gold-light);
        border: 1px solid var(--accent-gold-border);
        padding: 6px 14px;
        border-radius: 8px;
        font-size: 10px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        color: var(--accent-gold);
        margin-bottom: 16px;
    }

    .activity-title {
        font-size: 22px;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 20px;
        letter-spacing: -0.3px;
    }

    .details-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 14px 18px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 14px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
    }

    .detail-item:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: rgba(255, 255, 255, 0.1);
    }

    .detail-icon {
        width: 44px;
        height: 44px;
        background: var(--accent-gold-light);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .detail-icon svg {
        width: 22px;
        height: 22px;
        stroke: var(--accent-gold);
        fill: none;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .detail-content {
        display: flex;
        flex-direction: column;
    }

    .detail-label {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: var(--text-secondary);
        margin-bottom: 3px;
    }

    .detail-value {
        font-size: 15px;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.95);
    }

    /* Card Meta Section */
    .card-meta {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 16px;
        min-width: 180px;
    }

    .price-section {
        text-align: right;
    }

    .price {
        font-size: 34px;
        font-weight: 700;
        background: linear-gradient(135deg, var(--accent-gold), #FFB300);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        letter-spacing: -1px;
    }

    .price-currency {
        font-size: 16px;
        font-weight: 500;
        opacity: 0.7;
    }

    /* Status Badge */
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .status-badge.confirmed {
        background: linear-gradient(135deg, var(--success-bg), rgba(76, 175, 80, 0.08));
        border: 1px solid var(--success-border);
        color: var(--success);
    }

    .status-badge.pending {
        background: linear-gradient(135deg, var(--warning-bg), rgba(255, 152, 0, 0.08));
        border: 1px solid var(--warning-border);
        color: var(--warning);
    }

    .status-badge.cancelled {
        background: linear-gradient(135deg, var(--danger-bg), rgba(244, 67, 54, 0.08));
        border: 1px solid var(--danger-border);
        color: var(--danger);
    }

    .status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    .status-badge.confirmed .status-dot { background: var(--success); }
    .status-badge.pending .status-dot { background: var(--warning); }
    .status-badge.cancelled .status-dot { background: var(--danger); }

    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.6; transform: scale(0.9); }
    }

    /* Card Actions */
    .card-actions {
        display: flex;
        gap: 12px;
        margin-top: 24px;
        padding-top: 24px;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
        flex-wrap: wrap;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 24px;
        border-radius: 14px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        border: none;
    }

    .btn svg {
        width: 18px;
        height: 18px;
        stroke: currentColor;
        fill: none;
        stroke-width: 2;
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.08);
        color: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(255, 255, 255, 0.15);
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.12);
        border-color: rgba(255, 255, 255, 0.25);
        transform: translateY(-2px);
    }

    .btn-danger {
        background: linear-gradient(135deg, var(--danger-bg), rgba(244, 67, 54, 0.05));
        color: var(--danger);
        border: 1px solid var(--danger-border);
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, rgba(244, 67, 54, 0.25), rgba(244, 67, 54, 0.1));
        border-color: rgba(244, 67, 54, 0.5);
        transform: translateY(-2px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .reservations-container { padding: 40px 16px; }
        .reservation-card { padding: 24px 20px; }
        .card-content { flex-direction: column; }
        .card-meta { align-items: flex-start; flex-direction: row; flex-wrap: wrap; width: 100%; gap: 12px; }
        .price-section { order: 1; }
        .status-badge { order: 2; }
        .price { font-size: 28px; }
        .details-grid { grid-template-columns: 1fr; }
        .card-actions { flex-direction: column; }
        .btn { justify-content: center; }
        .stats-bar { gap: 12px; }
        .stat-item { min-width: 100px; padding: 12px 16px; }
        .stat-value { font-size: 22px; }
    }
</style>

<div class=\"reservations-container\">

    ";
        // line 479
        yield "    <div class=\"reservations-header\">
        <div class=\"header-badge\">
            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                <path d=\"M16 12l-4-4-4 4\"></path>
                <path d=\"M12 16V8\"></path>
            </svg>
            Mes Billets & Trajets
        </div>
        <h1>Mobilité & Transports</h1>
        <p>Gérez vos vols, vos locations de véhicules, consultez vos détails et vos billets en toute simplicité.</p>
    </div>

    ";
        // line 493
        yield "    ";
        $context["totalReservations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 493, $this->source); })()));
        // line 494
        yield "    ";
        $context["confirmedCount"] = 0;
        // line 495
        yield "    ";
        $context["totalSpent"] = 0;
        // line 496
        yield "
    ";
        // line 497
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 497, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 498
            yield "        ";
            if ((Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 498)) == "CONFIRMEE")) {
                $context["confirmedCount"] = ((isset($context["confirmedCount"]) || array_key_exists("confirmedCount", $context) ? $context["confirmedCount"] : (function () { throw new RuntimeError('Variable "confirmedCount" does not exist.', 498, $this->source); })()) + 1);
            }
            // line 499
            yield "        ";
            $context["totalSpent"] = ((isset($context["totalSpent"]) || array_key_exists("totalSpent", $context) ? $context["totalSpent"] : (function () { throw new RuntimeError('Variable "totalSpent" does not exist.', 499, $this->source); })()) + ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "prixTotal", [], "any", true, true, false, 499)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "prixTotal", [], "any", false, false, false, 499), ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "montantTotal", [], "any", true, true, false, 499)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "montantTotal", [], "any", false, false, false, 499), 0)) : (0)))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "montantTotal", [], "any", true, true, false, 499)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "montantTotal", [], "any", false, false, false, 499), 0)) : (0)))));
            // line 500
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 501
        yield "
    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReservations"]) || array_key_exists("totalReservations", $context) ? $context["totalReservations"] : (function () { throw new RuntimeError('Variable "totalReservations" does not exist.', 504, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Trajets réservés</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["confirmedCount"]) || array_key_exists("confirmedCount", $context) ? $context["confirmedCount"] : (function () { throw new RuntimeError('Variable "confirmedCount" does not exist.', 508, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Confirmés</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalSpent"]) || array_key_exists("totalSpent", $context) ? $context["totalSpent"] : (function () { throw new RuntimeError('Variable "totalSpent" does not exist.', 512, $this->source); })()), 2, ".", " "), "html", null, true);
        yield " TND</div>
            <div class=\"stat-label\">Total dépensé</div>
        </div>
    </div>
    ";
        // line 516
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 516, $this->source); })())) >= 2)) {
            // line 517
            yield "    <div style=\"display: flex; justify-content: flex-end; margin-bottom: 25px;\">
        <a href=\"";
            // line 518
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_sjs");
            yield "\" class=\"btn\" style=\"background: linear-gradient(135deg, rgba(47, 168, 255, 0.15), rgba(11, 45, 74, 0.8)); border: 1px solid var(--td-sky, #2FA8FF); color: white; box-shadow: 0 0 20px rgba(47, 168, 255, 0.3); transition: all 0.3s ease; position: relative; overflow: hidden;\">
            <svg viewBox=\"0 0 24 24\" width=\"18\" height=\"18\" stroke=\"#2FA8FF\" fill=\"none\" stroke-width=\"2\">
                <path d=\"M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2\"/>
            </svg>
            <span style=\"font-weight: 700; letter-spacing: 0.5px;\">Activer la Synchronisation SJS</span>
            
            ";
            // line 525
            yield "            <span style=\"position: absolute; top: 10px; right: 10px; width: 6px; height: 6px; background: #2FA8FF; border-radius: 50%; box-shadow: 0 0 8px #2FA8FF; animation: pulse 2s infinite;\"></span>
        </a>
    </div>
    ";
        }
        // line 529
        yield "
    ";
        // line 531
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 531, $this->source); })()), "flashes", ["success"], "method", false, false, false, 531));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 532
            yield "        <div class=\"alert-success\">
            <div class=\"alert-icon\">
                <svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"/></svg>
            </div>
            <span>";
            // line 536
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 539
        yield "
    ";
        // line 541
        yield "    ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 541, $this->source); })()))) {
            // line 542
            yield "        <div class=\"empty-state\">
            <div class=\"empty-icon\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <path d=\"M22 12h-4l-3 9L9 3l-3 9H2\"></path>
                </svg>
            </div>
            <h3>Aucun trajet programmé</h3>
            <p>Vos futures réservations de vols et locations de voitures apparaîtront ici.</p>
        </div>

    ";
        } else {
            // line 553
            yield "
        ";
            // line 555
            yield "        <div class=\"reservations-list\">
            ";
            // line 556
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 556, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 557
                yield "                ";
                $context["transport"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "transport", [], "any", true, true, false, 557) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "transport", [], "any", false, false, false, 557)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "transport", [], "any", false, false, false, 557)) : (null));
                // line 558
                yield "                ";
                $context["statut"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 558));
                // line 559
                yield "
                ";
                // line 560
                $context["statusClass"] = "";
                // line 561
                yield "                ";
                $context["statusLabel"] = (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 561, $this->source); })());
                // line 562
                yield "
                ";
                // line 563
                if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 563, $this->source); })()) == "CONFIRMEE")) {
                    // line 564
                    yield "                    ";
                    $context["statusClass"] = "confirmed";
                    // line 565
                    yield "                ";
                } elseif ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 565, $this->source); })()) == "EN_ATTENTE") || ((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 565, $this->source); })()) == "PENDING"))) {
                    // line 566
                    yield "                    ";
                    $context["statusClass"] = "pending";
                    // line 567
                    yield "                ";
                } else {
                    // line 568
                    yield "                    ";
                    $context["statusClass"] = "cancelled";
                    // line 569
                    yield "                ";
                }
                // line 570
                yield "
                <div class=\"reservation-card\">
                    <div class=\"card-content\">

                        ";
                // line 575
                yield "                        <div class=\"card-info\">
                            <div class=\"category-badge\">
                                ";
                // line 577
                if (((isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 577, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 577, $this->source); })()), "type", [], "any", false, false, false, 577) == "AVION"))) {
                    // line 578
                    yield "                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <path d=\"M17.8 19.2L16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.2-1.1.6L3 8l6 4-3 3-3-1-1.5 1.5L6 19l2.5-1.5 1.5-1.5-1-3 3-3 4 6l1.2-.7c.4-.2.7-.6.6-1.1z\"></path>
                                    </svg>
                                    Vol
                                ";
                } else {
                    // line 583
                    yield "                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <path d=\"M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2\"></path><circle cx=\"7\" cy=\"17\" r=\"2\"></circle><path d=\"M9 17h6\"></path><circle cx=\"17\" cy=\"17\" r=\"2\"></circle>
                                    </svg>
                                    Location Voiture
                                ";
                }
                // line 588
                yield "                            </div>

                            <h3 class=\"activity-title\">
                                ";
                // line 591
                yield (((($tmp = (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 591, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 591, $this->source); })()), "nom", [], "any", false, false, false, 591), "html", null, true)) : ("Transport indisponible"));
                yield "
                            </h3>

                            <div class=\"details-grid\">
                                ";
                // line 596
                yield "                                <div class=\"detail-item\">
                                    <div class=\"detail-icon\">
                                        <svg viewBox=\"0 0 24 24\">
                                            <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                            <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                            <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                            <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                                        </svg>
                                    </div>
                                    <div class=\"detail-content\">
                                        <span class=\"detail-label\">Départ le</span>
                                        <span class=\"detail-value\">";
                // line 607
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDepart", [], "any", false, false, false, 607)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDepart", [], "any", false, false, false, 607), "d/m/Y"), "html", null, true)) : ("Non définie"));
                yield "</span>
                                    </div>
                                </div>

                                ";
                // line 611
                if (((isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 611, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 611, $this->source); })()), "type", [], "any", false, false, false, 611) == "AVION"))) {
                    // line 612
                    yield "                                    ";
                    // line 613
                    yield "                                    <div class=\"detail-item\">
                                        <div class=\"detail-icon\">
                                            <svg viewBox=\"0 0 24 24\">
                                                <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                                                <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                                <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                                                <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                                            </svg>
                                        </div>
                                        <div class=\"detail-content\">
                                            <span class=\"detail-label\">Passagers</span>
                                            <span class=\"detail-value\">
                                                ";
                    // line 625
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbAdultes", [], "any", true, true, false, 625)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbAdultes", [], "any", false, false, false, 625), 1)) : (1)), "html", null, true);
                    yield " Adulte(s)
                                                ";
                    // line 626
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbEnfants", [], "any", false, false, false, 626) > 0)) {
                        yield ", ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbEnfants", [], "any", false, false, false, 626), "html", null, true);
                        yield " Enfant(s)";
                    }
                    // line 627
                    yield "                                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbBebes", [], "any", false, false, false, 627) > 0)) {
                        yield ", ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbBebes", [], "any", false, false, false, 627), "html", null, true);
                        yield " Bébé(s)";
                    }
                    // line 628
                    yield "                                            </span>
                                        </div>
                                    </div>
                                ";
                } elseif ((                // line 631
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 631, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 631, $this->source); })()), "type", [], "any", false, false, false, 631) == "VOITURE"))) {
                    // line 632
                    yield "                                    ";
                    // line 633
                    yield "                                    <div class=\"detail-item\">
                                        <div class=\"detail-icon\">
                                            <svg viewBox=\"0 0 24 24\">
                                                <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                                <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                                <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                                <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                                            </svg>
                                        </div>
                                        <div class=\"detail-content\">
                                            <span class=\"detail-label\">Retour le</span>
                                            <span class=\"detail-value\">";
                    // line 644
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 644)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateFin", [], "any", false, false, false, 644), "d/m/Y"), "html", null, true)) : ("Non définie"));
                    yield "</span>
                                        </div>
                                    </div>
                                ";
                }
                // line 648
                yield "                            </div>
                        </div>

                        ";
                // line 652
                yield "                        <div class=\"card-meta\">
                            <div class=\"price-section\">
                                <div class=\"price\">
                                    ";
                // line 655
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "prixTotal", [], "any", true, true, false, 655)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "prixTotal", [], "any", false, false, false, 655), ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", true, true, false, 655)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", false, false, false, 655), 0)) : (0)))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", true, true, false, 655)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", false, false, false, 655), 0)) : (0)))), 2, ".", " "), "html", null, true);
                yield " <span class=\"price-currency\">TND</span>
                                </div>
                            </div>

                            <div class=\"status-badge ";
                // line 659
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 659, $this->source); })()), "html", null, true);
                yield "\">
                                <span class=\"status-dot\"></span>
                                ";
                // line 661
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusLabel"]) || array_key_exists("statusLabel", $context) ? $context["statusLabel"] : (function () { throw new RuntimeError('Variable "statusLabel" does not exist.', 661, $this->source); })()), "html", null, true);
                yield "
                            </div>
                        </div>

                    </div>

                    ";
                // line 668
                yield "                    <div class=\"card-actions\">
                        ";
                // line 669
                if ((($tmp = (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 669, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 670
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_detail", ["id" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "id", [], "any", true, true, false, 670)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 670, $this->source); })()), "id", [], "any", false, false, false, 670), CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 670, $this->source); })()), "idTransport", [], "any", false, false, false, 670))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 670, $this->source); })()), "idTransport", [], "any", false, false, false, 670)))]), "html", null, true);
                    yield "\" class=\"btn btn-secondary\">
                                <svg viewBox=\"0 0 24 24\">
                                    <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"></path>
                                    <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>
                                </svg>
                                Voir le transport
                            </a>
                        ";
                }
                // line 678
                yield "                        
                        ";
                // line 680
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_pdf", ["id" => ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", true, true, false, 680)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 680), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 680))) : (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 680)))]), "html", null, true);
                yield "\" class=\"btn btn-danger\">
                            <svg viewBox=\"0 0 24 24\">
                                <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"/>
                                <polyline points=\"14 2 14 8 20 8\"/>
                                <line x1=\"12\" y1=\"18\" x2=\"12\" y2=\"12\"/>
                                <line x1=\"9\" y1=\"15\" x2=\"15\" y2=\"15\"/>
                            </svg>
                            Télécharger le Billet (PDF)
                        </a>
                    </div>

                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 693
            yield "        </div>

    ";
        }
        // line 696
        yield "</div>
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
        return "reservations_transports.html.twig";
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
        return array (  952 => 696,  947 => 693,  927 => 680,  924 => 678,  912 => 670,  910 => 669,  907 => 668,  898 => 661,  893 => 659,  886 => 655,  881 => 652,  876 => 648,  869 => 644,  856 => 633,  854 => 632,  852 => 631,  847 => 628,  840 => 627,  834 => 626,  830 => 625,  816 => 613,  814 => 612,  812 => 611,  805 => 607,  792 => 596,  785 => 591,  780 => 588,  773 => 583,  766 => 578,  764 => 577,  760 => 575,  754 => 570,  751 => 569,  748 => 568,  745 => 567,  742 => 566,  739 => 565,  736 => 564,  734 => 563,  731 => 562,  728 => 561,  726 => 560,  723 => 559,  720 => 558,  717 => 557,  713 => 556,  710 => 555,  707 => 553,  694 => 542,  691 => 541,  688 => 539,  679 => 536,  673 => 532,  668 => 531,  665 => 529,  659 => 525,  650 => 518,  647 => 517,  645 => 516,  638 => 512,  631 => 508,  624 => 504,  619 => 501,  613 => 500,  610 => 499,  605 => 498,  601 => 497,  598 => 496,  595 => 495,  592 => 494,  589 => 493,  574 => 479,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Réservations de Transports{% endblock %}

{% block body %}
<style>
    /* ============================================
       RÉSERVATIONS TRANSPORTS - DESIGN PROFESSIONNEL
       ============================================ */

    :root {
        --bg-primary: #0a0e1a;
        --bg-secondary: #141b2d;
        --accent-gold: #FFC107;
        --accent-gold-light: rgba(255, 193, 7, 0.12);
        --accent-gold-border: rgba(255, 193, 7, 0.3);
        --success: #4CAF50;
        --success-bg: rgba(76, 175, 80, 0.15);
        --success-border: rgba(76, 175, 80, 0.3);
        --warning: #FF9800;
        --warning-bg: rgba(255, 152, 0, 0.15);
        --warning-border: rgba(255, 152, 0, 0.3);
        --danger: #F44336;
        --danger-bg: rgba(244, 67, 54, 0.15);
        --danger-border: rgba(244, 67, 54, 0.3);
        --text-primary: #ffffff;
        --text-secondary: rgba(255, 255, 255, 0.5);
        --text-muted: rgba(255, 255, 255, 0.35);
        --card-bg: rgba(255, 255, 255, 0.04);
        --card-border: rgba(255, 255, 255, 0.08);
    }

    .reservations-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 60px 24px;
    }

    /* Header Section */
    .reservations-header {
        text-align: center;
        margin-bottom: 48px;
    }

    .header-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--accent-gold-light);
        border: 1px solid var(--accent-gold-border);
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: var(--accent-gold);
        margin-bottom: 20px;
    }

    .reservations-header h1 {
        font-family: 'Playfair Display', serif;
        font-size: clamp(28px, 4vw, 40px);
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 12px;
        letter-spacing: -0.5px;
    }

    .reservations-header p {
        color: var(--text-secondary);
        font-size: 16px;
        font-weight: 300;
    }

    /* Statistics Bar */
    .stats-bar {
        display: flex;
        justify-content: center;
        gap: 24px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
        padding: 16px 28px;
        background: var(--card-bg);
        border: 1px solid var(--card-border);
        border-radius: 16px;
        min-width: 130px;
        transition: all 0.3s ease;
    }

    .stat-item:hover {
        border-color: var(--accent-gold-border);
        transform: translateY(-2px);
    }

    .stat-value {
        font-size: 26px;
        font-weight: 700;
        color: var(--accent-gold);
        margin-bottom: 4px;
    }

    .stat-label {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--text-secondary);
    }

    /* Success Alert */
    .alert-success {
        background: linear-gradient(135deg, var(--success-bg), rgba(76, 175, 80, 0.05));
        border: 1px solid var(--success-border);
        border-radius: 16px;
        padding: 20px 24px;
        margin-bottom: 32px;
        display: flex;
        align-items: center;
        gap: 16px;
        color: var(--success);
        font-weight: 500;
    }

    .alert-icon {
        width: 48px;
        height: 48px;
        background: rgba(76, 175, 80, 0.2);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .alert-icon svg {
        width: 24px;
        height: 24px;
        stroke: var(--success);
        fill: none;
        stroke-width: 2;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 80px 40px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px dashed rgba(255, 255, 255, 0.1);
        border-radius: 24px;
    }

    .empty-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 24px;
        background: var(--accent-gold-light);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .empty-icon svg {
        width: 40px;
        height: 40px;
        stroke: var(--accent-gold);
        fill: none;
        stroke-width: 1.5;
    }

    .empty-state h3 {
        font-size: 20px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 8px;
    }

    .empty-state p {
        color: var(--text-secondary);
        font-size: 15px;
    }

    /* Reservation Cards */
    .reservations-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .reservation-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.02));
        border: 1px solid var(--card-border);
        border-radius: 24px;
        padding: 28px 32px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .reservation-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent, var(--accent-gold), transparent);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .reservation-card:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 193, 7, 0.3);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4), 0 0 40px rgba(255, 193, 7, 0.05);
    }

    .reservation-card:hover::before {
        opacity: 1;
    }

    .card-content {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 24px;
        flex-wrap: wrap;
    }

    /* Card Info Section */
    .card-info {
        flex: 1;
        min-width: 280px;
    }

    .category-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--accent-gold-light);
        border: 1px solid var(--accent-gold-border);
        padding: 6px 14px;
        border-radius: 8px;
        font-size: 10px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        color: var(--accent-gold);
        margin-bottom: 16px;
    }

    .activity-title {
        font-size: 22px;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 20px;
        letter-spacing: -0.3px;
    }

    .details-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 14px 18px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 14px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
    }

    .detail-item:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: rgba(255, 255, 255, 0.1);
    }

    .detail-icon {
        width: 44px;
        height: 44px;
        background: var(--accent-gold-light);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .detail-icon svg {
        width: 22px;
        height: 22px;
        stroke: var(--accent-gold);
        fill: none;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .detail-content {
        display: flex;
        flex-direction: column;
    }

    .detail-label {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: var(--text-secondary);
        margin-bottom: 3px;
    }

    .detail-value {
        font-size: 15px;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.95);
    }

    /* Card Meta Section */
    .card-meta {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 16px;
        min-width: 180px;
    }

    .price-section {
        text-align: right;
    }

    .price {
        font-size: 34px;
        font-weight: 700;
        background: linear-gradient(135deg, var(--accent-gold), #FFB300);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        letter-spacing: -1px;
    }

    .price-currency {
        font-size: 16px;
        font-weight: 500;
        opacity: 0.7;
    }

    /* Status Badge */
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .status-badge.confirmed {
        background: linear-gradient(135deg, var(--success-bg), rgba(76, 175, 80, 0.08));
        border: 1px solid var(--success-border);
        color: var(--success);
    }

    .status-badge.pending {
        background: linear-gradient(135deg, var(--warning-bg), rgba(255, 152, 0, 0.08));
        border: 1px solid var(--warning-border);
        color: var(--warning);
    }

    .status-badge.cancelled {
        background: linear-gradient(135deg, var(--danger-bg), rgba(244, 67, 54, 0.08));
        border: 1px solid var(--danger-border);
        color: var(--danger);
    }

    .status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    .status-badge.confirmed .status-dot { background: var(--success); }
    .status-badge.pending .status-dot { background: var(--warning); }
    .status-badge.cancelled .status-dot { background: var(--danger); }

    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.6; transform: scale(0.9); }
    }

    /* Card Actions */
    .card-actions {
        display: flex;
        gap: 12px;
        margin-top: 24px;
        padding-top: 24px;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
        flex-wrap: wrap;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 24px;
        border-radius: 14px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        border: none;
    }

    .btn svg {
        width: 18px;
        height: 18px;
        stroke: currentColor;
        fill: none;
        stroke-width: 2;
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.08);
        color: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(255, 255, 255, 0.15);
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.12);
        border-color: rgba(255, 255, 255, 0.25);
        transform: translateY(-2px);
    }

    .btn-danger {
        background: linear-gradient(135deg, var(--danger-bg), rgba(244, 67, 54, 0.05));
        color: var(--danger);
        border: 1px solid var(--danger-border);
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, rgba(244, 67, 54, 0.25), rgba(244, 67, 54, 0.1));
        border-color: rgba(244, 67, 54, 0.5);
        transform: translateY(-2px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .reservations-container { padding: 40px 16px; }
        .reservation-card { padding: 24px 20px; }
        .card-content { flex-direction: column; }
        .card-meta { align-items: flex-start; flex-direction: row; flex-wrap: wrap; width: 100%; gap: 12px; }
        .price-section { order: 1; }
        .status-badge { order: 2; }
        .price { font-size: 28px; }
        .details-grid { grid-template-columns: 1fr; }
        .card-actions { flex-direction: column; }
        .btn { justify-content: center; }
        .stats-bar { gap: 12px; }
        .stat-item { min-width: 100px; padding: 12px 16px; }
        .stat-value { font-size: 22px; }
    }
</style>

<div class=\"reservations-container\">

    {# ============ HEADER ============ #}
    <div class=\"reservations-header\">
        <div class=\"header-badge\">
            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                <path d=\"M16 12l-4-4-4 4\"></path>
                <path d=\"M12 16V8\"></path>
            </svg>
            Mes Billets & Trajets
        </div>
        <h1>Mobilité & Transports</h1>
        <p>Gérez vos vols, vos locations de véhicules, consultez vos détails et vos billets en toute simplicité.</p>
    </div>

    {# ============ STATS ============ #}
    {% set totalReservations = reservations|length %}
    {% set confirmedCount = 0 %}
    {% set totalSpent = 0 %}

    {% for r in reservations %}
        {% if r.statut|upper == 'CONFIRMEE' %}{% set confirmedCount = confirmedCount + 1 %}{% endif %}
        {% set totalSpent = totalSpent + (r.prixTotal|default(r.montantTotal|default(0))) %}
    {% endfor %}

    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ totalReservations }}</div>
            <div class=\"stat-label\">Trajets réservés</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ confirmedCount }}</div>
            <div class=\"stat-label\">Confirmés</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ totalSpent|number_format(2, '.', ' ') }} TND</div>
            <div class=\"stat-label\">Total dépensé</div>
        </div>
    </div>
    {% if reservations|length >= 2 %}
    <div style=\"display: flex; justify-content: flex-end; margin-bottom: 25px;\">
        <a href=\"{{ path('app_front_sjs') }}\" class=\"btn\" style=\"background: linear-gradient(135deg, rgba(47, 168, 255, 0.15), rgba(11, 45, 74, 0.8)); border: 1px solid var(--td-sky, #2FA8FF); color: white; box-shadow: 0 0 20px rgba(47, 168, 255, 0.3); transition: all 0.3s ease; position: relative; overflow: hidden;\">
            <svg viewBox=\"0 0 24 24\" width=\"18\" height=\"18\" stroke=\"#2FA8FF\" fill=\"none\" stroke-width=\"2\">
                <path d=\"M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2\"/>
            </svg>
            <span style=\"font-weight: 700; letter-spacing: 0.5px;\">Activer la Synchronisation SJS</span>
            
            {# Petit point d'animation pour l'effet IA #}
            <span style=\"position: absolute; top: 10px; right: 10px; width: 6px; height: 6px; background: #2FA8FF; border-radius: 50%; box-shadow: 0 0 8px #2FA8FF; animation: pulse 2s infinite;\"></span>
        </a>
    </div>
    {% endif %}

    {# ============ FLASH MESSAGES ============ #}
    {% for message in app.flashes('success') %}
        <div class=\"alert-success\">
            <div class=\"alert-icon\">
                <svg viewBox=\"0 0 24 24\"><polyline points=\"20 6 9 17 4 12\"/></svg>
            </div>
            <span>{{ message }}</span>
        </div>
    {% endfor %}

    {# ============ EMPTY STATE ============ #}
    {% if reservations is empty %}
        <div class=\"empty-state\">
            <div class=\"empty-icon\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                    <path d=\"M22 12h-4l-3 9L9 3l-3 9H2\"></path>
                </svg>
            </div>
            <h3>Aucun trajet programmé</h3>
            <p>Vos futures réservations de vols et locations de voitures apparaîtront ici.</p>
        </div>

    {% else %}

        {# ============ RESERVATIONS LIST ============ #}
        <div class=\"reservations-list\">
            {% for reservation in reservations %}
                {% set transport = reservation.transport ?? null %}
                {% set statut = reservation.statut|upper %}

                {% set statusClass = '' %}
                {% set statusLabel = statut %}

                {% if statut == 'CONFIRMEE' %}
                    {% set statusClass = 'confirmed' %}
                {% elseif statut == 'EN_ATTENTE' or statut == 'PENDING' %}
                    {% set statusClass = 'pending' %}
                {% else %}
                    {% set statusClass = 'cancelled' %}
                {% endif %}

                <div class=\"reservation-card\">
                    <div class=\"card-content\">

                        {# ===== LEFT: Info ===== #}
                        <div class=\"card-info\">
                            <div class=\"category-badge\">
                                {% if transport and transport.type == 'AVION' %}
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <path d=\"M17.8 19.2L16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.2-1.1.6L3 8l6 4-3 3-3-1-1.5 1.5L6 19l2.5-1.5 1.5-1.5-1-3 3-3 4 6l1.2-.7c.4-.2.7-.6.6-1.1z\"></path>
                                    </svg>
                                    Vol
                                {% else %}
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                        <path d=\"M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2\"></path><circle cx=\"7\" cy=\"17\" r=\"2\"></circle><path d=\"M9 17h6\"></path><circle cx=\"17\" cy=\"17\" r=\"2\"></circle>
                                    </svg>
                                    Location Voiture
                                {% endif %}
                            </div>

                            <h3 class=\"activity-title\">
                                {{ transport ? transport.nom : 'Transport indisponible' }}
                            </h3>

                            <div class=\"details-grid\">
                                {# Date de Départ (Commune aux deux types) #}
                                <div class=\"detail-item\">
                                    <div class=\"detail-icon\">
                                        <svg viewBox=\"0 0 24 24\">
                                            <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                            <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                            <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                            <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                                        </svg>
                                    </div>
                                    <div class=\"detail-content\">
                                        <span class=\"detail-label\">Départ le</span>
                                        <span class=\"detail-value\">{{ reservation.dateDepart ? reservation.dateDepart|date('d/m/Y') : 'Non définie' }}</span>
                                    </div>
                                </div>

                                {% if transport and transport.type == 'AVION' %}
                                    {# Passagers pour Avion #}
                                    <div class=\"detail-item\">
                                        <div class=\"detail-icon\">
                                            <svg viewBox=\"0 0 24 24\">
                                                <path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"/>
                                                <circle cx=\"9\" cy=\"7\" r=\"4\"/>
                                                <path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"/>
                                                <path d=\"M16 3.13a4 4 0 0 1 0 7.75\"/>
                                            </svg>
                                        </div>
                                        <div class=\"detail-content\">
                                            <span class=\"detail-label\">Passagers</span>
                                            <span class=\"detail-value\">
                                                {{ reservation.nbAdultes|default(1) }} Adulte(s)
                                                {% if reservation.nbEnfants > 0 %}, {{ reservation.nbEnfants }} Enfant(s){% endif %}
                                                {% if reservation.nbBebes > 0 %}, {{ reservation.nbBebes }} Bébé(s){% endif %}
                                            </span>
                                        </div>
                                    </div>
                                {% elseif transport and transport.type == 'VOITURE' %}
                                    {# Date de retour pour Voiture #}
                                    <div class=\"detail-item\">
                                        <div class=\"detail-icon\">
                                            <svg viewBox=\"0 0 24 24\">
                                                <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                                                <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                                                <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                                                <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                                            </svg>
                                        </div>
                                        <div class=\"detail-content\">
                                            <span class=\"detail-label\">Retour le</span>
                                            <span class=\"detail-value\">{{ reservation.dateFin ? reservation.dateFin|date('d/m/Y') : 'Non définie' }}</span>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {# ===== RIGHT: Price + Status ===== #}
                        <div class=\"card-meta\">
                            <div class=\"price-section\">
                                <div class=\"price\">
                                    {{ reservation.prixTotal|default(reservation.montantTotal|default(0))|number_format(2, '.', ' ') }} <span class=\"price-currency\">TND</span>
                                </div>
                            </div>

                            <div class=\"status-badge {{ statusClass }}\">
                                <span class=\"status-dot\"></span>
                                {{ statusLabel }}
                            </div>
                        </div>

                    </div>

                    {# ===== ACTIONS ===== #}
                    <div class=\"card-actions\">
                        {% if transport %}
                            <a href=\"{{ path('app_transport_detail', {'id': transport.id|default(transport.idTransport)}) }}\" class=\"btn btn-secondary\">
                                <svg viewBox=\"0 0 24 24\">
                                    <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"></path>
                                    <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>
                                </svg>
                                Voir le transport
                            </a>
                        {% endif %}
                        
                        {# Le lien ci-dessous correspond à la route de téléchargement de votre facture PDF #}
                        <a href=\"{{ path('facture_pdf', {id: reservation.id|default(reservation.idReservation)}) }}\" class=\"btn btn-danger\">
                            <svg viewBox=\"0 0 24 24\">
                                <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"/>
                                <polyline points=\"14 2 14 8 20 8\"/>
                                <line x1=\"12\" y1=\"18\" x2=\"12\" y2=\"12\"/>
                                <line x1=\"9\" y1=\"15\" x2=\"15\" y2=\"15\"/>
                            </svg>
                            Télécharger le Billet (PDF)
                        </a>
                    </div>

                </div>
            {% endfor %}
        </div>

    {% endif %}
</div>
{% endblock %}", "reservations_transports.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\reservations_transports.html.twig");
    }
}
