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

/* reservation/mes_reservations.html.twig */
class __TwigTemplate_ba3d592e5ca4b2cd24c3dfe57e55a6e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/mes_reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/mes_reservations.html.twig"));

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

        yield "Mes Hébergements - ASAFAR";
        
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
        font-size: 40px;
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
        font-size: 20px;
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

    @media (max-width: 768px) {
        .reservations-container { padding: 40px 16px; }
        .reservation-card { padding: 24px 20px; }
        .card-content { flex-direction: column; }
        .card-meta { align-items: flex-start; flex-direction: row; flex-wrap: wrap; width: 100%; gap: 12px; }
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

    <div class=\"reservations-header\">
        <div class=\"header-badge\">
            🏨 Mes Hébergements
        </div>
        <h1>Hébergements Réservés</h1>
        <p>Gérez vos réservations d'hébergements et consultez les détails.</p>
    </div>

    ";
        // line 425
        if (array_key_exists("stats", $context)) {
            // line 426
            yield "    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
            // line 428
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 428, $this->source); })()), "total", [], "any", false, false, false, 428), "html", null, true);
            yield "</div>
            <div class=\"stat-label\">Total</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
            // line 432
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 432, $this->source); })()), "confirmees", [], "any", false, false, false, 432), "html", null, true);
            yield "</div>
            <div class=\"stat-label\">Confirmées</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 436, $this->source); })()), "enAttente", [], "any", false, false, false, 436), "html", null, true);
            yield "</div>
            <div class=\"stat-label\">En Attente</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">";
            // line 440
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 440, $this->source); })()), "annulees", [], "any", false, false, false, 440), "html", null, true);
            yield "</div>
            <div class=\"stat-label\">Annulées</div>
        </div>
    </div>
    ";
        }
        // line 445
        yield "
    ";
        // line 446
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 446, $this->source); })()))) {
            // line 447
            yield "        <div class=\"empty-state\">
            <div class=\"empty-icon\">🏨</div>
            <h3>Aucune réservation d'hébergement</h3>
            <p>Vos futures réservations d'hébergements apparaîtront ici.</p>
        </div>
    ";
        } else {
            // line 453
            yield "        <div class=\"reservations-list\">
            ";
            // line 454
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 454, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 455
                yield "                ";
                $context["statut"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 455));
                // line 456
                yield "                ";
                $context["statusClass"] = ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 456, $this->source); })()) == "CONFIRMEE")) ? ("confirmed") : (((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 456, $this->source); })()) == "EN_ATTENTE")) ? ("pending") : ("cancelled"))));
                // line 457
                yield "
                <div class=\"reservation-card\">
                    <div class=\"card-content\">
                        <div class=\"card-info\">
                            <div class=\"category-badge\">
                                🏨 Hébergement
                            </div>

                            <h3 class=\"activity-title\">
                                ";
                // line 466
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "hebergement", [], "any", false, false, false, 466)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "hebergement", [], "any", false, false, false, 466), "nom", [], "any", false, false, false, 466), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Réservation #" . CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 466)), "html", null, true)));
                yield "
                            </h3>

                            <div class=\"details-grid\">
                                <div class=\"detail-item\">
                                    <div class=\"detail-icon\">📅</div>
                                    <div class=\"detail-content\">
                                        <span class=\"detail-label\">Date réservation</span>
                                        <span class=\"detail-value\">";
                // line 474
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "date", [], "any", false, false, false, 474), "html", null, true);
                yield "</span>
                                    </div>
                                </div>

                                ";
                // line 478
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateArrivee", [], "any", false, false, false, 478)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 479
                    yield "                                <div class=\"detail-item\">
                                    <div class=\"detail-icon\">🏁</div>
                                    <div class=\"detail-content\">
                                        <span class=\"detail-label\">Séjour</span>
                                        <span class=\"detail-value\">";
                    // line 483
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateArrivee", [], "any", false, false, false, 483), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateDepart", [], "any", false, false, false, 483), "html", null, true);
                    yield "</span>
                                    </div>
                                </div>
                                ";
                }
                // line 487
                yield "
                                ";
                // line 488
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "hebergement", [], "any", false, false, false, 488) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "hebergement", [], "any", false, false, false, 488), "localisation", [], "any", false, false, false, 488))) {
                    // line 489
                    yield "                                <div class=\"detail-item\">
                                    <div class=\"detail-icon\">📍</div>
                                    <div class=\"detail-content\">
                                        <span class=\"detail-label\">Localisation</span>
                                        <span class=\"detail-value\">";
                    // line 493
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "hebergement", [], "any", false, false, false, 493), "localisation", [], "any", false, false, false, 493), "html", null, true);
                    yield "</span>
                                    </div>
                                </div>
                                ";
                }
                // line 497
                yield "                            </div>
                        </div>

                        <div class=\"card-meta\">
                            <div class=\"price-section\">
                                <div class=\"price\">
                                    ";
                // line 503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "montant", [], "any", false, false, false, 503), "html", null, true);
                yield " <span class=\"price-currency\">TND</span>
                                </div>
                            </div>

                            <div class=\"status-badge ";
                // line 507
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 507, $this->source); })()), "html", null, true);
                yield "\">
                                <span class=\"status-dot\"></span>
                                ";
                // line 509
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 509, $this->source); })()), "html", null, true);
                yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"card-actions\">
                        ";
                // line 515
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "hebergement", [], "any", false, false, false, 515)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 516
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "hebergement", [], "any", false, false, false, 516), "id", [], "any", false, false, false, 516)]), "html", null, true);
                    yield "\" class=\"btn btn-primary\">
                                Voir détails
                            </a>
                        ";
                }
                // line 520
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 523
            yield "        </div>
    ";
        }
        // line 525
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
        return "reservation/mes_reservations.html.twig";
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
        return array (  697 => 525,  693 => 523,  685 => 520,  677 => 516,  675 => 515,  666 => 509,  661 => 507,  654 => 503,  646 => 497,  639 => 493,  633 => 489,  631 => 488,  628 => 487,  619 => 483,  613 => 479,  611 => 478,  604 => 474,  593 => 466,  582 => 457,  579 => 456,  576 => 455,  572 => 454,  569 => 453,  561 => 447,  559 => 446,  556 => 445,  548 => 440,  541 => 436,  534 => 432,  527 => 428,  523 => 426,  521 => 425,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Hébergements - ASAFAR{% endblock %}

{% block body %}
<style>
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
        font-size: 40px;
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
        font-size: 20px;
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

    @media (max-width: 768px) {
        .reservations-container { padding: 40px 16px; }
        .reservation-card { padding: 24px 20px; }
        .card-content { flex-direction: column; }
        .card-meta { align-items: flex-start; flex-direction: row; flex-wrap: wrap; width: 100%; gap: 12px; }
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

    <div class=\"reservations-header\">
        <div class=\"header-badge\">
            🏨 Mes Hébergements
        </div>
        <h1>Hébergements Réservés</h1>
        <p>Gérez vos réservations d'hébergements et consultez les détails.</p>
    </div>

    {% if stats is defined %}
    <div class=\"stats-bar\">
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ stats.total }}</div>
            <div class=\"stat-label\">Total</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ stats.confirmees }}</div>
            <div class=\"stat-label\">Confirmées</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ stats.enAttente }}</div>
            <div class=\"stat-label\">En Attente</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\">{{ stats.annulees }}</div>
            <div class=\"stat-label\">Annulées</div>
        </div>
    </div>
    {% endif %}

    {% if reservations is empty %}
        <div class=\"empty-state\">
            <div class=\"empty-icon\">🏨</div>
            <h3>Aucune réservation d'hébergement</h3>
            <p>Vos futures réservations d'hébergements apparaîtront ici.</p>
        </div>
    {% else %}
        <div class=\"reservations-list\">
            {% for r in reservations %}
                {% set statut = r.statut|upper %}
                {% set statusClass = statut == 'CONFIRMEE' ? 'confirmed' : (statut == 'EN_ATTENTE' ? 'pending' : 'cancelled') %}

                <div class=\"reservation-card\">
                    <div class=\"card-content\">
                        <div class=\"card-info\">
                            <div class=\"category-badge\">
                                🏨 Hébergement
                            </div>

                            <h3 class=\"activity-title\">
                                {{ r.hebergement ? r.hebergement.nom : 'Réservation #' ~ r.id }}
                            </h3>

                            <div class=\"details-grid\">
                                <div class=\"detail-item\">
                                    <div class=\"detail-icon\">📅</div>
                                    <div class=\"detail-content\">
                                        <span class=\"detail-label\">Date réservation</span>
                                        <span class=\"detail-value\">{{ r.date }}</span>
                                    </div>
                                </div>

                                {% if r.dateArrivee %}
                                <div class=\"detail-item\">
                                    <div class=\"detail-icon\">🏁</div>
                                    <div class=\"detail-content\">
                                        <span class=\"detail-label\">Séjour</span>
                                        <span class=\"detail-value\">{{ r.dateArrivee }} → {{ r.dateDepart }}</span>
                                    </div>
                                </div>
                                {% endif %}

                                {% if r.hebergement and r.hebergement.localisation %}
                                <div class=\"detail-item\">
                                    <div class=\"detail-icon\">📍</div>
                                    <div class=\"detail-content\">
                                        <span class=\"detail-label\">Localisation</span>
                                        <span class=\"detail-value\">{{ r.hebergement.localisation }}</span>
                                    </div>
                                </div>
                                {% endif %}
                            </div>
                        </div>

                        <div class=\"card-meta\">
                            <div class=\"price-section\">
                                <div class=\"price\">
                                    {{ r.montant }} <span class=\"price-currency\">TND</span>
                                </div>
                            </div>

                            <div class=\"status-badge {{ statusClass }}\">
                                <span class=\"status-dot\"></span>
                                {{ statut }}
                            </div>
                        </div>
                    </div>

                    <div class=\"card-actions\">
                        {% if r.hebergement %}
                            <a href=\"{{ path('app_hebergement_detail', {'id': r.hebergement.id}) }}\" class=\"btn btn-primary\">
                                Voir détails
                            </a>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>
{% endblock %}", "reservation/mes_reservations.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\reservation\\mes_reservations.html.twig");
    }
}
