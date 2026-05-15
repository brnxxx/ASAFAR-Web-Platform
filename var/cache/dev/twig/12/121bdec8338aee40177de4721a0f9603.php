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

/* mes_reservations.html.twig */
class __TwigTemplate_071d81ac068dc3c43c6040a21776c533 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_reservations.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<style>
    /* ============================================
       RÉSERVATIONS LOISIRS - DESIGN PROFESSIONNEL
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

    .promo-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-top: 18px;
        padding: 12px 18px;
        background: linear-gradient(135deg, var(--success-bg), rgba(76, 175, 80, 0.05));
        border: 1px solid var(--success-border);
        border-radius: 12px;
        color: var(--success);
        font-size: 13px;
        font-weight: 500;
    }

    .promo-badge svg {
        width: 18px;
        height: 18px;
        stroke: var(--success);
        fill: none;
        stroke-width: 2;
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

    .original-price {
        font-size: 14px;
        color: var(--text-muted);
        text-decoration: line-through;
        margin-bottom: 4px;
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

    .btn-primary {
        background: linear-gradient(135deg, var(--accent-gold), #FFB300);
        color: #0a0e1a;
        box-shadow: 0 4px 20px rgba(255, 193, 7, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 30px rgba(255, 193, 7, 0.4);
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
        .reservations-container {
            padding: 40px 16px;
        }

        .reservation-card {
            padding: 24px 20px;
        }

        .card-content {
            flex-direction: column;
        }

        .card-meta {
            align-items: flex-start;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            gap: 12px;
        }

        .price-section {
            order: 1;
        }

        .status-badge {
            order: 2;
        }

        .price {
            font-size: 28px;
        }

        .details-grid {
            grid-template-columns: 1fr;
        }

        .card-actions {
            flex-direction: column;
        }

        .btn {
            justify-content: center;
        }

        .stats-bar {
            gap: 12px;
        }

        .stat-item {
            min-width: 100px;
            padding: 12px 16px;
        }

        .stat-value {
            font-size: 22px;
        }
    }
</style>

<div class=\"reservations-container\">

    ";
        // line 560
        yield "    <div class=\"reservations-header\">
        <div class=\"header-badge\">
            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <polygon points=\"12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2\"/>
            </svg>
            Mes Réservations
        </div>
        <h1>Loisirs & Excursions</h1>
        <p>Gérez vos excursions, consultez vos détails et vos factures en toute simplicité.</p>
    </div>

    ";
        // line 572
        yield "    ";
        $context["totalReservations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 572, $this->source); })()));
        // line 573
        yield "    ";
        $context["confirmedCount"] = 0;
        // line 574
        yield "    ";
        $context["totalSpent"] = 0;
        // line 575
        yield "
    ";
        // line 576
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 576, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 577
            yield "        ";
            if ((Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 577)) == "CONFIRMEE")) {
                $context["confirmedCount"] = ((isset($context["confirmedCount"]) || array_key_exists("confirmedCount", $context) ? $context["confirmedCount"] : (function () { throw new RuntimeError('Variable "confirmedCount" does not exist.', 577, $this->source); })()) + 1);
            }
            // line 578
            yield "        ";
            $context["totalSpent"] = ((isset($context["totalSpent"]) || array_key_exists("totalSpent", $context) ? $context["totalSpent"] : (function () { throw new RuntimeError('Variable "totalSpent" does not exist.', 578, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["r"], "montantTotal", [], "any", false, false, false, 578));
            // line 579
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        yield "
    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 583
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReservations"]) || array_key_exists("totalReservations", $context) ? $context["totalReservations"] : (function () { throw new RuntimeError('Variable "totalReservations" does not exist.', 583, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Réservations</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 587
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["confirmedCount"]) || array_key_exists("confirmedCount", $context) ? $context["confirmedCount"] : (function () { throw new RuntimeError('Variable "confirmedCount" does not exist.', 587, $this->source); })()), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Confirmées</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSpent"]) || array_key_exists("totalSpent", $context) ? $context["totalSpent"] : (function () { throw new RuntimeError('Variable "totalSpent" does not exist.', 591, $this->source); })()), "html", null, true);
        yield " TND</div>
            <div class=\"stat-label\">Total dépensé</div>
        </div>
    </div>

    ";
        // line 597
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 597, $this->source); })()), "flashes", ["success"], "method", false, false, false, 597));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 598
            yield "        <div class=\"alert-success\">
            <div class=\"alert-icon\">
                <svg viewBox=\"0 0 24 24\">
                    <polyline points=\"20 6 9 17 4 12\"/>
                </svg>
            </div>
            <span>";
            // line 604
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 607
        yield "
    ";
        // line 609
        yield "    ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 609, $this->source); })()))) {
            // line 610
            yield "        <div class=\"empty-state\">
            <div class=\"empty-icon\">
                <svg viewBox=\"0 0 24 24\">
                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                </svg>
            </div>
            <h3>Aucune réservation de loisirs</h3>
            <p>Vos futures excursions apparaîtront ici.</p>
        </div>

    ";
        } else {
            // line 624
            yield "
        ";
            // line 626
            yield "        <div class=\"reservations-list\">
            ";
            // line 627
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 627, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 628
                yield "                ";
                $context["excursion"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "excursion", [], "any", true, true, false, 628) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "excursion", [], "any", false, false, false, 628)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "excursion", [], "any", false, false, false, 628)) : (null));
                // line 629
                yield "                ";
                $context["statut"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 629));
                // line 630
                yield "
                ";
                // line 631
                $context["statusClass"] = "";
                // line 632
                yield "                ";
                $context["statusLabel"] = (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 632, $this->source); })());
                // line 633
                yield "
                ";
                // line 634
                if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 634, $this->source); })()) == "CONFIRMEE")) {
                    // line 635
                    yield "                    ";
                    $context["statusClass"] = "confirmed";
                    // line 636
                    yield "                ";
                } elseif (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 636, $this->source); })()) == "EN_ATTENTE")) {
                    // line 637
                    yield "                    ";
                    $context["statusClass"] = "pending";
                    // line 638
                    yield "                ";
                } else {
                    // line 639
                    yield "                    ";
                    $context["statusClass"] = "cancelled";
                    // line 640
                    yield "                ";
                }
                // line 641
                yield "
                <div class=\"reservation-card\">
                    <div class=\"card-content\">

                        ";
                // line 646
                yield "                        <div class=\"card-info\">
                            <div class=\"category-badge\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                    <path d=\"M12 6v6l4 2\"/>
                                </svg>
                                Loisirs
                            </div>

                            <h3 class=\"activity-title\">
                                ";
                // line 656
                yield (((($tmp = (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 656, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 656, $this->source); })()), "titre", [], "any", false, false, false, 656), "html", null, true)) : ("Excursion indisponible"));
                yield "
                            </h3>

                            <div class=\"details-grid\">
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
                                        <span class=\"detail-label\">Date</span>
                                        <span class=\"detail-value\">";
                // line 671
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservation", [], "any", false, false, false, 671), "d/m/Y"), "html", null, true);
                yield "</span>
                                    </div>
                                </div>

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
                                        <span class=\"detail-label\">Participants</span>
                                        <span class=\"detail-value\">
                                            ";
                // line 687
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbAdultes", [], "any", false, false, false, 687), "html", null, true);
                yield " adulte(s)
                                            ";
                // line 688
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbEnfants", [], "any", false, false, false, 688) > 0)) {
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbEnfants", [], "any", false, false, false, 688), "html", null, true);
                    yield " enfant(s)";
                }
                // line 689
                yield "                                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbBebes", [], "any", false, false, false, 689) > 0)) {
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbBebes", [], "any", false, false, false, 689), "html", null, true);
                    yield " bébé(s)";
                }
                // line 690
                yield "                                        </span>
                                    </div>
                                </div>
                            </div>

                            ";
                // line 695
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "codePromo", [], "any", false, false, false, 695)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 696
                    yield "                                <div class=\"promo-badge\">
                                    <svg viewBox=\"0 0 24 24\">
                                        <polyline points=\"20 12 20 22 4 22 4 12\"/>
                                        <rect x=\"2\" y=\"7\" width=\"20\" height=\"5\"/>
                                        <line x1=\"12\" y1=\"22\" x2=\"12\" y2=\"7\"/>
                                        <path d=\"M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z\"/>
                                        <path d=\"M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z\"/>
                                    </svg>
                                    Code appliqué: ";
                    // line 704
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "codePromo", [], "any", false, false, false, 704), "html", null, true);
                    yield "
                                </div>
                            ";
                }
                // line 707
                yield "                        </div>

                        ";
                // line 710
                yield "                        <div class=\"card-meta\">
                            <div class=\"price-section\">
                                ";
                // line 712
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reductionPromo", [], "any", false, false, false, 712) > 0)) {
                    // line 713
                    yield "                                    <div class=\"original-price\">
                                        ";
                    // line 714
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", false, false, false, 714) + CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reductionPromo", [], "any", false, false, false, 714)), "html", null, true);
                    yield " TND
                                    </div>
                                ";
                }
                // line 717
                yield "                                <div class=\"price\">
                                    ";
                // line 718
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", false, false, false, 718), "html", null, true);
                yield " <span class=\"price-currency\">TND</span>
                                </div>
                            </div>

                            <div class=\"status-badge ";
                // line 722
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 722, $this->source); })()), "html", null, true);
                yield "\">
                                <span class=\"status-dot\"></span>
                                ";
                // line 724
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusLabel"]) || array_key_exists("statusLabel", $context) ? $context["statusLabel"] : (function () { throw new RuntimeError('Variable "statusLabel" does not exist.', 724, $this->source); })()), "html", null, true);
                yield "
                            </div>
                        </div>

                    </div>

                    ";
                // line 731
                yield "                    <div class=\"card-actions\">
                  <a href=\"";
                // line 732
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 732)]), "html", null, true);
                yield "\" class=\"btn btn-danger\">
    <svg viewBox=\"0 0 24 24\" width=\"18\" height=\"18\" stroke=\"currentColor\" fill=\"none\" stroke-width=\"2\">
        <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"/>
        <polyline points=\"14 2 14 8 20 8\"/>
        <line x1=\"12\" y1=\"18\" x2=\"12\" y2=\"12\"/>
        <line x1=\"9\" y1=\"15\" x2=\"15\" y2=\"15\"/>
    </svg>
    Télécharger PDF
</a>
                        
                    </div>

                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 746
            yield "        </div>

    ";
        }
        // line 749
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
        return "mes_reservations.html.twig";
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
        return array (  962 => 749,  957 => 746,  937 => 732,  934 => 731,  925 => 724,  920 => 722,  913 => 718,  910 => 717,  904 => 714,  901 => 713,  899 => 712,  895 => 710,  891 => 707,  885 => 704,  875 => 696,  873 => 695,  866 => 690,  859 => 689,  853 => 688,  849 => 687,  830 => 671,  812 => 656,  800 => 646,  794 => 641,  791 => 640,  788 => 639,  785 => 638,  782 => 637,  779 => 636,  776 => 635,  774 => 634,  771 => 633,  768 => 632,  766 => 631,  763 => 630,  760 => 629,  757 => 628,  753 => 627,  750 => 626,  747 => 624,  731 => 610,  728 => 609,  725 => 607,  716 => 604,  708 => 598,  703 => 597,  695 => 591,  688 => 587,  681 => 583,  676 => 580,  670 => 579,  667 => 578,  662 => 577,  658 => 576,  655 => 575,  652 => 574,  649 => 573,  646 => 572,  633 => 560,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    /* ============================================
       RÉSERVATIONS LOISIRS - DESIGN PROFESSIONNEL
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

    .promo-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-top: 18px;
        padding: 12px 18px;
        background: linear-gradient(135deg, var(--success-bg), rgba(76, 175, 80, 0.05));
        border: 1px solid var(--success-border);
        border-radius: 12px;
        color: var(--success);
        font-size: 13px;
        font-weight: 500;
    }

    .promo-badge svg {
        width: 18px;
        height: 18px;
        stroke: var(--success);
        fill: none;
        stroke-width: 2;
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

    .original-price {
        font-size: 14px;
        color: var(--text-muted);
        text-decoration: line-through;
        margin-bottom: 4px;
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

    .btn-primary {
        background: linear-gradient(135deg, var(--accent-gold), #FFB300);
        color: #0a0e1a;
        box-shadow: 0 4px 20px rgba(255, 193, 7, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 30px rgba(255, 193, 7, 0.4);
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
        .reservations-container {
            padding: 40px 16px;
        }

        .reservation-card {
            padding: 24px 20px;
        }

        .card-content {
            flex-direction: column;
        }

        .card-meta {
            align-items: flex-start;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            gap: 12px;
        }

        .price-section {
            order: 1;
        }

        .status-badge {
            order: 2;
        }

        .price {
            font-size: 28px;
        }

        .details-grid {
            grid-template-columns: 1fr;
        }

        .card-actions {
            flex-direction: column;
        }

        .btn {
            justify-content: center;
        }

        .stats-bar {
            gap: 12px;
        }

        .stat-item {
            min-width: 100px;
            padding: 12px 16px;
        }

        .stat-value {
            font-size: 22px;
        }
    }
</style>

<div class=\"reservations-container\">

    {# ============ HEADER ============ #}
    <div class=\"reservations-header\">
        <div class=\"header-badge\">
            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <polygon points=\"12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2\"/>
            </svg>
            Mes Réservations
        </div>
        <h1>Loisirs & Excursions</h1>
        <p>Gérez vos excursions, consultez vos détails et vos factures en toute simplicité.</p>
    </div>

    {# ============ STATS (Optionnel - à adapter avec vos données) ============ #}
    {% set totalReservations = reservations|length %}
    {% set confirmedCount = 0 %}
    {% set totalSpent = 0 %}

    {% for r in reservations %}
        {% if r.statut|upper == 'CONFIRMEE' %}{% set confirmedCount = confirmedCount + 1 %}{% endif %}
        {% set totalSpent = totalSpent + r.montantTotal %}
    {% endfor %}

    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ totalReservations }}</div>
            <div class=\"stat-label\">Réservations</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ confirmedCount }}</div>
            <div class=\"stat-label\">Confirmées</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ totalSpent }} TND</div>
            <div class=\"stat-label\">Total dépensé</div>
        </div>
    </div>

    {# ============ FLASH MESSAGES ============ #}
    {% for message in app.flashes('success') %}
        <div class=\"alert-success\">
            <div class=\"alert-icon\">
                <svg viewBox=\"0 0 24 24\">
                    <polyline points=\"20 6 9 17 4 12\"/>
                </svg>
            </div>
            <span>{{ message }}</span>
        </div>
    {% endfor %}

    {# ============ EMPTY STATE ============ #}
    {% if reservations is empty %}
        <div class=\"empty-state\">
            <div class=\"empty-icon\">
                <svg viewBox=\"0 0 24 24\">
                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"/>
                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"/>
                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"/>
                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"/>
                </svg>
            </div>
            <h3>Aucune réservation de loisirs</h3>
            <p>Vos futures excursions apparaîtront ici.</p>
        </div>

    {% else %}

        {# ============ RESERVATIONS LIST ============ #}
        <div class=\"reservations-list\">
            {% for reservation in reservations %}
                {% set excursion = reservation.excursion ?? null %}
                {% set statut = reservation.statut|upper %}

                {% set statusClass = '' %}
                {% set statusLabel = statut %}

                {% if statut == 'CONFIRMEE' %}
                    {% set statusClass = 'confirmed' %}
                {% elseif statut == 'EN_ATTENTE' %}
                    {% set statusClass = 'pending' %}
                {% else %}
                    {% set statusClass = 'cancelled' %}
                {% endif %}

                <div class=\"reservation-card\">
                    <div class=\"card-content\">

                        {# ===== LEFT: Info ===== #}
                        <div class=\"card-info\">
                            <div class=\"category-badge\">
                                <svg width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                                    <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                    <path d=\"M12 6v6l4 2\"/>
                                </svg>
                                Loisirs
                            </div>

                            <h3 class=\"activity-title\">
                                {{ excursion ? excursion.titre : 'Excursion indisponible' }}
                            </h3>

                            <div class=\"details-grid\">
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
                                        <span class=\"detail-label\">Date</span>
                                        <span class=\"detail-value\">{{ reservation.dateReservation|date('d/m/Y') }}</span>
                                    </div>
                                </div>

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
                                        <span class=\"detail-label\">Participants</span>
                                        <span class=\"detail-value\">
                                            {{ reservation.nbAdultes }} adulte(s)
                                            {% if reservation.nbEnfants > 0 %}, {{ reservation.nbEnfants }} enfant(s){% endif %}
                                            {% if reservation.nbBebes > 0 %}, {{ reservation.nbBebes }} bébé(s){% endif %}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {% if reservation.codePromo %}
                                <div class=\"promo-badge\">
                                    <svg viewBox=\"0 0 24 24\">
                                        <polyline points=\"20 12 20 22 4 22 4 12\"/>
                                        <rect x=\"2\" y=\"7\" width=\"20\" height=\"5\"/>
                                        <line x1=\"12\" y1=\"22\" x2=\"12\" y2=\"7\"/>
                                        <path d=\"M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z\"/>
                                        <path d=\"M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z\"/>
                                    </svg>
                                    Code appliqué: {{ reservation.codePromo }}
                                </div>
                            {% endif %}
                        </div>

                        {# ===== RIGHT: Price + Status ===== #}
                        <div class=\"card-meta\">
                            <div class=\"price-section\">
                                {% if reservation.reductionPromo > 0 %}
                                    <div class=\"original-price\">
                                        {{ reservation.montantTotal + reservation.reductionPromo }} TND
                                    </div>
                                {% endif %}
                                <div class=\"price\">
                                    {{ reservation.montantTotal }} <span class=\"price-currency\">TND</span>
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
                  <a href=\"{{ path('facture_pdf', {id: reservation.idReservation}) }}\" class=\"btn btn-danger\">
    <svg viewBox=\"0 0 24 24\" width=\"18\" height=\"18\" stroke=\"currentColor\" fill=\"none\" stroke-width=\"2\">
        <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"/>
        <polyline points=\"14 2 14 8 20 8\"/>
        <line x1=\"12\" y1=\"18\" x2=\"12\" y2=\"12\"/>
        <line x1=\"9\" y1=\"15\" x2=\"15\" y2=\"15\"/>
    </svg>
    Télécharger PDF
</a>
                        
                    </div>

                </div>
            {% endfor %}
        </div>

    {% endif %}
</div>
{% endblock %}", "mes_reservations.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\mes_reservations.html.twig");
    }
}
