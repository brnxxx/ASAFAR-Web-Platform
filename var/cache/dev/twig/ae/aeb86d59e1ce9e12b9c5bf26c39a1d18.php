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

/* loisirs/loisirs.html.twig */
class __TwigTemplate_00f443ab958888b11aa3c725ad51b414 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loisirs/loisirs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loisirs/loisirs.html.twig"));

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
    body {
        background: #0B2D4A !important;
    }

    /* ── HERO ── */
    .loisir-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 120px 100px 80px;
        overflow: hidden;
    }

    .loisir-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .loisir-hero-bg img {
        width: 100%; height: 100%;
        object-fit: cover;
        opacity: 0.3;
    }

    .loisir-hero-gradient {
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
    }

    .loisir-hero-content {
        position: relative;
        z-index: 2;
        max-width: 780px;
    }

    .loisir-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255,193,7,0.15);
        border: 1px solid rgba(255,193,7,0.3);
        padding: 8px 20px;
        border-radius: 30px;
        font-size: 13px;
        color: #FFC107;
        margin-bottom: 25px;
        animation: loisirFadeDown 0.8s ease;
    }

    @keyframes loisirFadeDown {
        from { opacity: 0; transform: translateY(-20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .loisir-hero-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 72px;
        font-weight: 800;
        color: #FFC107;
        line-height: 1.1;
        margin: 0 0 25px;
        animation: loisirFadeLeft 1s ease 0.2s both;
    }

    @keyframes loisirFadeLeft {
        from { opacity: 0; transform: translateX(-40px); }
        to   { opacity: 1; transform: translateX(0); }
    }

    .loisir-hero-underline {
        width: 120px; height: 5px;
        background: linear-gradient(90deg, #FFC107, #FF9800);
        border-radius: 3px;
        margin: 0 0 30px;
        animation: loisirExpand 1s ease 0.5s both;
    }

    @keyframes loisirExpand {
        from { width: 0; }
        to   { width: 120px; }
    }

    .loisir-hero-description {
        font-size: 18px;
        line-height: 1.8;
        color: rgba(255,255,255,0.9);
        margin: 0 0 40px;
        animation: loisirFadeUp 1s ease 0.4s both;
    }

    @keyframes loisirFadeUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* ── BOUTONS HERO ── */
    .loisir-hero-buttons {
        display: flex;
        gap: 20px;
        animation: loisirFadeUp 1s ease 0.7s both;
    }

    .loisir-btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        padding: 16px 35px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(255,193,7,0.3);
    }

    .loisir-btn-primary::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s ease;
    }

    .loisir-btn-primary:hover::before { left: 100%; }
    .loisir-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(255,193,7,0.5);
    }

    .loisir-btn-secondary {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: transparent;
        color: #FFC107;
        padding: 16px 35px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        border: 2px solid #FFC107;
        transition: all 0.4s ease;
    }

    .loisir-btn-secondary:hover {
        background: rgba(255,193,7,0.1);
        transform: translateY(-3px);
    }

    .loisir-category-img {
        width: 100%;
        height: 180px;
        overflow: hidden;
        position: relative;
    }

    .loisir-category-img img {
        width: 100%; height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .loisir-category-card:hover .loisir-category-img img {
        transform: scale(1.08);
    }

    .loisir-category-img-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(8,30,55,0.85) 0%, transparent 60%);
    }

    .loisir-category-body {
        padding: 25px 30px 30px;
    }

    /* ===============================
       SECTION CATEGORIES
    ================================= */
    .loisir-categories {
        padding: 80px 100px;
        background: linear-gradient(180deg, #051621 0%, #08263E 50%, #0B2D4A 100%);
    }

    .loisir-categories-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .loisir-category-card {
        background: rgba(255,255,255,0.04);
        border-radius: 22px;
        overflow: hidden;
        text-decoration: none;
        transition: all 0.4s ease;
        border: 1px solid rgba(255,193,7,0.15);
        position: relative;
    }

    .loisir-category-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255,193,7,0.1), transparent);
        opacity: 0;
        transition: 0.4s;
    }

    .loisir-category-card:hover::before { opacity: 1; }

    .loisir-category-card:hover {
        transform: translateY(-8px) scale(1.02);
        border-color: rgba(255,193,7,0.4);
        box-shadow: 0 20px 60px rgba(0,0,0,0.4);
    }

    .loisir-category-img {
        height: 180px;
        overflow: hidden;
        position: relative;
    }

    .loisir-category-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .loisir-category-card:hover img { transform: scale(1.1); }

    .loisir-category-img-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(8,30,55,0.9), transparent);
    }

    .loisir-category-body { padding: 20px 25px; }

    .loisir-category-card h3 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 22px;
        color: #FFC107;
        margin: 0 0 12px;
        font-weight: 700;
    }

    .loisir-category-card p {
        font-size: 14px;
        color: rgba(255,255,255,0.75);
        line-height: 1.7;
        margin: 0 0 18px;
    }

    .loisir-category-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #FFC107;
        font-weight: 500;
        font-size: 14px;
        transition: gap 0.3s ease;
    }

    .loisir-category-card:hover .loisir-category-link { gap: 14px; }

    /* ── EXCURSIONS ── */
    .loisir-excursions {
        padding: 100px;
        background: #0B2D4A;
    }

    .loisir-excursions-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        position: relative;
    }

    .loisir-excursion-card {
        position: relative;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.25);
        transition: all 0.5s cubic-bezier(0.4,0,0.2,1);
        display: flex;
        flex-direction: column;
    }

    .loisir-excursion-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 70px rgba(0,0,0,0.35);
    }

    .loisir-excursion-image {
        position: relative;
        height: 210px;
        overflow: hidden;
    }

    .loisir-excursion-image img {
        width: 100%; height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .loisir-excursion-card:hover .loisir-excursion-image img { transform: scale(1.1); }

    .loisir-excursion-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(11,45,74,0.85) 0%, transparent 55%);
    }

    .loisir-excursion-badge {
        position: absolute;
        top: 14px; left: 14px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        padding: 5px 14px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .loisir-excursion-places {
        position: absolute;
        top: 14px; right: 14px;
        background: rgba(11,45,74,0.88);
        color: #fff;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .loisir-excursion-content {
        padding: 20px 22px 18px;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .loisir-excursion-content h3 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 19px;
        color: #0B2D4A;
        margin: 0;
        transition: color 0.3s ease;
    }

    .loisir-excursion-card:hover .loisir-excursion-content h3 { color: #FF9800; }

    .loisir-excursion-content p {
        font-size: 13px;
        color: #5a6a78;
        line-height: 1.6;
        margin: 0;
        flex: 1;
    }

    .loisir-excursion-meta-info {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .loisir-meta-item {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 12px;
        color: #6b7a8a;
        font-weight: 500;
    }

    .loisir-meta-item svg {
        width: 13px; height: 13px;
        fill: #FFC107;
        flex-shrink: 0;
    }

    .loisir-prix-row {
        display: flex;
        border-top: 1px solid #f0f0f0;
        border-bottom: 1px solid #f0f0f0;
        padding: 10px 0;
    }

    .loisir-prix-item {
        flex: 1;
        text-align: center;
        border-right: 1px solid #f0f0f0;
    }

    .loisir-prix-item:last-child { border-right: none; }

    .loisir-prix-label {
        display: block;
        font-size: 10px;
        font-weight: 700;
        color: #9aa5b0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 3px;
    }

    .loisir-prix-value {
        display: block;
        font-size: 14px;
        font-weight: 700;
        color: #0B2D4A;
    }

    .loisir-prix-value.enfant { color: #FF9800; }
    .loisir-prix-value.bebe   { color: #26a65b; }

    .loisir-excursion-footer { display: flex; gap: 10px; }

    .loisir-excursion-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        padding: 10px 14px;
        border-radius: 25px;
        font-weight: 700;
        font-size: 13px;
        text-decoration: none;
        flex: 1;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .loisir-excursion-btn::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.25), transparent);
        transition: left 0.4s ease;
    }

    .loisir-excursion-btn:hover::before { left: 100%; }

    .btn-detail {
        background: #eef2f7;
        color: #0B2D4A;
        border: 1.5px solid #d0dce8;
    }

    .btn-detail:hover { transform: scale(1.04); }

    .btn-reserver {
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
    }

    .btn-reserver:hover {
        transform: scale(1.04);
        box-shadow: 0 6px 20px rgba(255,193,7,0.45);
    }

    .loisir-excursion-btn svg {
        width: 13px; height: 13px;
        fill: currentColor;
        flex-shrink: 0;
    }

    .loisir-excursion-card-bottom {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, #FFC107, #FF9800);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.5s ease;
    }

    .loisir-excursion-card:hover .loisir-excursion-card-bottom { transform: scaleX(1); }

    /* ── SECTION HEADER ── */
    .loisir-section-tag {
        display: inline-block;
        font-size: 13px;
        color: #FFC107;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin: 0 0 15px;
    }

    .loisir-section-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 48px;
        color: white;
        margin: 0 0 20px;
    }

    .loisir-section-line {
        width: 80px; height: 4px;
        background: linear-gradient(90deg, #FFC107, #FF9800);
        margin: 0 auto;
        border-radius: 2px;
    }

    .cal-day.disabled {
        color: #ccc;
        pointer-events: none;
        cursor: not-allowed;
    }

    #excursions { scroll-margin-top: 120px; }

    @media (max-width: 1200px) {
        .loisir-categories-grid,
        .loisir-excursions-grid { grid-template-columns: repeat(2, 1fr); }
        .loisir-hero            { padding: 120px 50px 80px; }
        .loisir-hero-title      { font-size: 56px; }
        .loisir-categories,
        .loisir-excursions      { padding: 80px 50px; }
    }

    @media (max-width: 768px) {
        .loisir-hero            { padding: 100px 25px 60px; }
        .loisir-hero-title      { font-size: 40px; }
        .loisir-hero-buttons    { flex-direction: column; }
        .loisir-categories,
        .loisir-excursions      { padding: 60px 25px; }
        .loisir-section-title   { font-size: 32px; }
        .loisir-categories-grid,
        .loisir-excursions-grid { grid-template-columns: 1fr; }
        .loisir-excursion-footer { flex-direction: column; }
        .loisir-search-bar      { flex-direction: column; border-radius: 16px; }
        .loisir-search-separator { width: auto; height: 1px; margin: 0 16px; }
    }
</style>

<style>
    /* ═══════════════════════════════════════
       SEARCH BAR
    ═══════════════════════════════════════ */
    .loisir-search-wrapper {
        display: flex;
        justify-content: center;
        margin-bottom: 60px;
    }

    .loisir-search-bar {
        display: flex;
        align-items: center;
        background: #ffffff;
        border-radius: 50px;
        padding: 8px 12px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        max-width: 1100px;
        width: 95%;
        margin: auto;
        gap: 5px;
    }

    .loisir-search-field {
        flex: 1;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 14px;
        border-radius: 20px;
        transition: 0.3s;
    }

    .loisir-search-field:hover { background: rgba(0,0,0,0.04); }

    .loisir-search-field-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(255,193,7,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .loisir-search-field-icon i { color: #FF9800; font-size: 15px; }

    .loisir-search-input-group {
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex: 1;
        min-width: 0;
    }

    .loisir-search-input-group label {
        font-size: 10px;
        font-weight: 600;
        color: #9aa5b0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 2px;
        line-height: 1;
    }

    .loisir-search-input-group input,
    .search-select {
        border: none;
        outline: none;
        font-size: 14px;
        color: #333;
        background: transparent;
        padding: 4px 0 0 0;
    }

    .search-select {
        appearance: none;
        cursor: pointer;
        font-weight: 500;
        background-image: url(\"data:image/svg+xml;utf8,<svg fill='%23999' height='10' viewBox='0 0 24 24' width='10' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>\");
        background-repeat: no-repeat;
        background-position: right 5px center;
    }

    input[type=\"date\"] { cursor: pointer; }
    input[type=\"date\"]::-webkit-calendar-picker-indicator { filter: invert(60%); cursor: pointer; }

    .loisir-search-separator {
        width: 1px;
        height: 40px;
        background: #e5e8ec;
        flex-shrink: 0;
    }

    .loisir-search-btn {
        background: linear-gradient(135deg, #FFC107, #FF9800);
        border: none;
        border-radius: 25px;
        padding: 12px 22px;
        font-weight: 600;
        color: #0B2D4A;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 6px;
        transition: 0.3s;
        flex-shrink: 0;
    }

    .loisir-search-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(255,152,0,0.4);
    }

    @media (max-width: 768px) {
        .loisir-search-bar { flex-direction: column; border-radius: 20px; padding: 15px; }
        .loisir-search-field { width: 100%; }
        .loisir-search-separator { width: 100%; height: 1px; }
    }

    /* ═══════════════════════════════════════
       CALENDAR
    ═══════════════════════════════════════ */
    #calTrigger {
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        padding: 4px 0;
        gap: 8px;
    }

    #calText { font-size: 14px; color: #aaa; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    #calText.has-value { color: #333; }
    .cal-arrow { width: 14px; height: 14px; flex-shrink: 0; }

    #calPopup {
        position: absolute;
        top: calc(100% + 8px);
        left: -16px;
        width: 300px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        z-index: 9999;
    }

    .cal-header { padding: 1rem 1.25rem 0.75rem; border-bottom: 0.5px solid #eee; }

    .cal-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 0.75rem;
    }

    .cal-nav-btn {
        width: 28px; height: 28px;
        border: 0.5px solid #ddd;
        border-radius: 8px;
        background: transparent;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
    }

    .cal-nav-btn:hover { background: #f5f5f5; }
    .cal-month-label { font-size: 15px; font-weight: 500; color: #333; }

    .cal-weekdays { display: grid; grid-template-columns: repeat(7, 1fr); gap: 2px; }

    .cal-weekday {
        text-align: center;
        font-size: 11px;
        font-weight: 500;
        color: #aaa;
        padding: 4px 0;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .cal-days { display: grid; grid-template-columns: repeat(7, 1fr); gap: 3px; padding: 0.75rem 1rem 1rem; }

    .cal-day {
        text-align: center;
        padding: 8px 4px;
        font-size: 13px;
        cursor: pointer;
        border-radius: 8px;
        transition: all 0.2s;
        color: #333;
    }

    .cal-day:hover { background: rgba(255,193,7,0.1); color: #FF9800; }
    .cal-day.today { background: #f0f0f0; font-weight: 600; }
    .cal-day.selected { background: #FFC107; color: #0B2D4A; font-weight: 600; }
    .cal-day.other-month { color: #ccc; }
    .cal-day.disabled { color: #ccc; pointer-events: none; cursor: not-allowed; }

    .cal-footer {
        padding: 0.75rem 1rem;
        border-top: 0.5px solid #eee;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .cal-selected-info { font-size: 13px; color: #888; }
    .cal-selected-info strong { color: #FF9800; }

    .cal-clear-btn {
        font-size: 12px;
        color: #aaa;
        border: none;
        background: none;
        cursor: pointer;
        padding: 4px 8px;
        border-radius: 6px;
        transition: all 0.2s;
    }

    .cal-clear-btn:hover { background: #f5f5f5; color: #666; }

    /* ═══════════════════════════════════════
       SECTION HEADER — DYNAMIQUE
    ═══════════════════════════════════════ */
    #sectionTag   { display: inline-block; font-size: 13px; color: #FFC107; text-transform: uppercase; letter-spacing: 3px; margin: 0 0 15px; }
    #sectionTitle { font-family: 'Playfair Display', Georgia, serif; font-size: 48px; color: white; margin: 0 0 20px; }
    #sectionCount { color: white; margin-top: 15px; min-height: 24px; }
</style>

";
        // line 794
        yield "<section class=\"loisir-hero\">
    <div class=\"loisir-hero-bg\">
        <img src=\"";
        // line 796
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loisirs-hero.jpg"), "html", null, true);
        yield "\" alt=\"Loisirs\">
        <div class=\"loisir-hero-gradient\"></div>
    </div>

    <div class=\"loisir-hero-content\">
        <div class=\"loisir-hero-badge\">✦ Découvrez l'Authentique</div>
        <h1 class=\"loisir-hero-title\">Loisirs &<br>Expériences</h1>
        <div class=\"loisir-hero-underline\"></div>
        <p class=\"loisir-hero-description\">
            Vivez des moments inoubliables avec nos expériences uniques.
            Des aventures culturelles aux découvertes naturelles, nous vous
            proposons des excursions authentiques qui révèlent la beauté
            cachée de chaque destination.
        </p>

        ";
        // line 812
        yield "        <div class=\"loisir-search-wrapper\">
            <form method=\"GET\"
                  action=\"";
        // line 814
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loisirs");
        yield "\"
                  class=\"loisir-search-bar\"
                  id=\"loisirSearchForm\">

                ";
        // line 819
        yield "                <div class=\"loisir-search-field\">
                    <div class=\"loisir-search-field-icon\">
                        <i class=\"fa-solid fa-location-dot\"></i>
                    </div>
                    <div class=\"loisir-search-input-group\">
                        <label>Destination</label>
                        <input type=\"text\" name=\"lieu\"
                               value=\"";
        // line 826
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 826, $this->source); })()), "request", [], "any", false, false, false, 826), "get", ["lieu"], "method", false, false, false, 826), "html", null, true);
        yield "\"
                               placeholder=\"Douz, Ain Draham...\">
                    </div>
                </div>

                <div class=\"loisir-search-separator\"></div>

                ";
        // line 834
        yield "                <div class=\"loisir-search-field\">
                    <div class=\"loisir-search-field-icon\">
                        <i class=\"fa-solid fa-layer-group\"></i>
                    </div>
                    <div class=\"loisir-search-input-group\">
                        <label>Catégorie</label>
                        <select name=\"categorie\" class=\"search-select\">
                            <option value=\"\">Toutes</option>
                            ";
        // line 842
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 842, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 843
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 843), "html", null, true);
            yield "\"
                                    ";
            // line 844
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 844, $this->source); })()), "request", [], "any", false, false, false, 844), "get", ["categorie"], "method", false, false, false, 844) == (CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 844) . ""))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 845
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 845), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 848
        yield "                        </select>
                    </div>
                </div>

                <div class=\"loisir-search-separator\"></div>

                ";
        // line 855
        yield "                <div class=\"loisir-search-field\">
                    <div class=\"loisir-search-field-icon\">
                        <i class=\"fa-solid fa-calendar-days\"></i>
                    </div>
                    <div class=\"loisir-search-input-group\">
                        <label>Date</label>
                        <input type=\"date\" name=\"date\"
                               value=\"";
        // line 862
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 862, $this->source); })()), "request", [], "any", false, false, false, 862), "get", ["date"], "method", false, false, false, 862), "html", null, true);
        yield "\"
                               min=\"";
        // line 863
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\">
                    </div>
                </div>

                <button type=\"submit\" class=\"loisir-search-btn\">
                    <i class=\"fa-solid fa-magnifying-glass\"></i>
                </button>

            </form>
        </div>

        <div class=\"loisir-hero-buttons\">
            <a href=\"#categories\" class=\"loisir-btn-primary\">
                → Découvrir nos Voyages
            </a>

            ";
        // line 879
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 879, $this->source); })()), "user", [], "any", false, false, false, 879)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 880
            yield "  
<a href=\"#excursions\" id=\"btnReco\" class=\"loisir-btn-secondary\">
    ✨ Nos recommandations pour vous
</a>
            ";
        } else {
            // line 885
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"loisir-btn-secondary\">
                    ✨ Recommandations IA
                </a>
            ";
        }
        // line 889
        yield "        </div>
    </div>
</section>

";
        // line 894
        yield "<section class=\"loisir-categories\" id=\"categories\">
    <div class=\"loisir-section-header\">
        <span class=\"loisir-section-tag\">Nos Univers</span>
        <h2 class=\"loisir-section-title\">Choisissez Votre Aventure</h2>
        <div class=\"loisir-section-line\"></div>
    </div>

    <div class=\"loisir-categories-grid\">
        ";
        // line 902
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 902, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 903
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursions_by_categorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 903)]), "html", null, true);
            yield "\"
               class=\"loisir-category-card\">
                <div class=\"loisir-category-img\">
                    <img src=\"";
            // line 906
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/loisirs/" . CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "image", [], "any", false, false, false, 906))), "html", null, true);
            yield "\"
                         alt=\"";
            // line 907
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 907), "html", null, true);
            yield "\" loading=\"lazy\">
                    <div class=\"loisir-category-img-overlay\"></div>
                </div>
                <div class=\"loisir-category-body\">
                    <h3>";
            // line 911
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 911), "html", null, true);
            yield "</h3>
                    <p>";
            // line 912
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 912), 0, 100), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 912)) > 100)) {
                yield "...";
            }
            yield "</p>
                    <span class=\"loisir-category-link\">Explorer →</span>
                </div>
            </a>
        ";
            $context['_iterated'] = true;
        }
        // line 916
        if (!$context['_iterated']) {
            // line 917
            yield "            <p style=\"color:rgba(255,255,255,0.5); text-align:center; grid-column:1/-1;\">
                Aucune catégorie disponible.
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 921
        yield "    </div>
</section>

";
        // line 925
        yield "<section class=\"loisir-excursions\" id=\"excursions\">
    <div class=\"loisir-excursions-grid\" id=\"excursionsGrid\">

        ";
        // line 928
        if ((($tmp = (isset($context["isSearch"]) || array_key_exists("isSearch", $context) ? $context["isSearch"] : (function () { throw new RuntimeError('Variable "isSearch" does not exist.', 928, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 929
            yield "
            ";
            // line 931
            yield "            ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 931, $this->source); })()))) {
                // line 932
                yield "                <p style=\"color:rgba(255,255,255,0.7); text-align:center; grid-column:1/-1;\">
                    ❌ Aucun résultat trouvé
                </p>
            ";
            }
            // line 936
            yield "
            ";
            // line 937
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 937, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["excursion"]) {
                // line 938
                yield "
                <article class=\"loisir-excursion-card\">

                    <div class=\"loisir-excursion-image\">
                        <img src=\"";
                // line 942
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "imageUrl", [], "any", false, false, false, 942))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 942), "html", null, true);
                yield "\">
                        <div class=\"loisir-excursion-overlay\"></div>
                        <span class=\"loisir-excursion-badge\">";
                // line 944
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", true, true, false, 944) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", false, false, false, 944)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", false, false, false, 944), "html", null, true)) : ("Outdoor"));
                yield "</span>
                        <span class=\"loisir-excursion-places\">";
                // line 945
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "nombrePlacesDisponibles", [], "any", false, false, false, 945), "html", null, true);
                yield " places</span>
                    </div>

                    <div class=\"loisir-excursion-content\">
                        <h3>";
                // line 949
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 949), "html", null, true);
                yield "</h3>

                        <div class=\"loisir-excursion-meta-info\">
                            <span class=\"loisir-meta-item\">📍 ";
                // line 952
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "lieu", [], "any", false, false, false, 952), "html", null, true);
                yield "</span>
                            <span class=\"loisir-meta-item\">⏱ ";
                // line 953
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "duree", [], "any", false, false, false, 953), "html", null, true);
                yield "h</span>
                            <span class=\"loisir-meta-item\">📅 ";
                // line 954
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "date", [], "any", false, false, false, 954), "d/m/Y"), "html", null, true);
                yield "</span>
                        </div>

                     ";
                // line 957
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "weather", [], "any", false, false, false, 957) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "weather", [], "any", false, true, false, 957), "weather", [], "any", true, true, false, 957)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "weather", [], "any", false, false, false, 957), "weather", [], "any", false, false, false, 957)) > 0))) {
                    // line 958
                    yield "<div class=\"loisir-weather\">
    <img 
        src=\"https://openweathermap.org/img/wn/";
                    // line 960
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "weather", [], "any", false, false, false, 960), "weather", [], "any", false, false, false, 960), 0, [], "array", false, false, false, 960), "icon", [], "any", false, false, false, 960), "html", null, true);
                    yield "@2x.png\" 
        alt=\"Weather icon\" 
        class=\"weather-icon\"
    >

    <span class=\"weather-temp\">
        ";
                    // line 966
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "weather", [], "any", false, false, false, 966), "main", [], "any", false, false, false, 966), "temp", [], "any", false, false, false, 966), 1), "html", null, true);
                    yield "°C
    </span>

    <span class=\"weather-desc\">
        ";
                    // line 970
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "weather", [], "any", false, false, false, 970), "weather", [], "any", false, false, false, 970), 0, [], "array", false, false, false, 970), "description", [], "any", false, false, false, 970)), "html", null, true);
                    yield "
    </span>
</div>
";
                } else {
                    // line 974
                    yield "<div class=\"loisir-weather-empty\">
    🌤️ Météo indisponible
</div>
";
                }
                // line 978
                yield "
                        <p>
                            ";
                // line 980
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "description", [], "any", false, false, false, 980), 0, 90), "html", null, true);
                yield "
                            ";
                // line 981
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "description", [], "any", false, false, false, 981)) > 90)) {
                    yield "...";
                }
                // line 982
                yield "                        </p>

                        <div class=\"loisir-prix-row\">
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Adulte</span>
                                <span class=\"loisir-prix-value\">";
                // line 987
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixData", [], "any", false, false, false, 987), "prix_adulte", [], "any", false, false, false, 987)), "html", null, true);
                yield " TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Enfant</span>
                                <span class=\"loisir-prix-value enfant\">";
                // line 991
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixData", [], "any", false, false, false, 991), "prix_enfant", [], "any", false, false, false, 991)), "html", null, true);
                yield " TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Bébé</span>
                                <span class=\"loisir-prix-value bebe\">
                                    ";
                // line 996
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixData", [], "any", false, false, false, 996), "prix_bebe", [], "any", false, false, false, 996) > 0)) {
                    // line 997
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixData", [], "any", false, false, false, 997), "prix_bebe", [], "any", false, false, false, 997)), "html", null, true);
                    yield " TND
                                    ";
                } else {
                    // line 999
                    yield "                                        Gratuit
                                    ";
                }
                // line 1001
                yield "                                </span>
                            </div>
                        </div>

                        <div class=\"loisir-rating\">
                            ";
                // line 1006
                $context["rating"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "rating", [], "any", true, true, false, 1006) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "rating", [], "any", false, false, false, 1006)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "rating", [], "any", false, false, false, 1006)) : (4.0));
                // line 1007
                yield "                            ";
                $context["stars"] = Twig\Extension\CoreExtension::round((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 1007, $this->source); })()));
                // line 1008
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 1009
                    yield "                                ";
                    if (($context["i"] <= (isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new RuntimeError('Variable "stars" does not exist.', 1009, $this->source); })()))) {
                        // line 1010
                        yield "                                    ⭐
                                ";
                    } else {
                        // line 1012
                        yield "                                    ☆
                                ";
                    }
                    // line 1014
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1015
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 1015, $this->source); })()), "html", null, true);
                yield "/5
                        </div>

                        <div class=\"loisir-excursion-footer\">
                            <a href=\"";
                // line 1019
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "idExcursion", [], "any", false, false, false, 1019)]), "html", null, true);
                yield "\"
                               class=\"loisir-excursion-btn btn-reserver\">Voir détails →</a>
                           
                        </div>
                    </div>

                </article>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['excursion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1028
            yield "

        ";
        } elseif (( !(null ===         // line 1030
(isset($context["recommandations"]) || array_key_exists("recommandations", $context) ? $context["recommandations"] : (function () { throw new RuntimeError('Variable "recommandations" does not exist.', 1030, $this->source); })())) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["recommandations"]) || array_key_exists("recommandations", $context) ? $context["recommandations"] : (function () { throw new RuntimeError('Variable "recommandations" does not exist.', 1030, $this->source); })())))) {
            // line 1031
            yield "
            ";
            // line 1033
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommandations"]) || array_key_exists("recommandations", $context) ? $context["recommandations"] : (function () { throw new RuntimeError('Variable "recommandations" does not exist.', 1033, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1034
                yield "                ";
                $context["excursion"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "excursion", [], "any", false, false, false, 1034);
                // line 1035
                yield "
                <article class=\"loisir-excursion-card\">

                    <div class=\"loisir-excursion-image\">
                        <img src=\"";
                // line 1039
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1039, $this->source); })()), "imageUrl", [], "any", false, false, false, 1039))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1039, $this->source); })()), "titre", [], "any", false, false, false, 1039), "html", null, true);
                yield "\">
                        <div class=\"loisir-excursion-overlay\"></div>
                        <span class=\"loisir-excursion-badge\">";
                // line 1041
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "type", [], "any", true, true, false, 1041) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1041, $this->source); })()), "type", [], "any", false, false, false, 1041)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1041, $this->source); })()), "type", [], "any", false, false, false, 1041), "html", null, true)) : ("Outdoor"));
                yield "</span>
                        <span class=\"loisir-excursion-places\">";
                // line 1042
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1042, $this->source); })()), "nombrePlacesDisponibles", [], "any", false, false, false, 1042), "html", null, true);
                yield " places</span>
                    </div>

                    <div class=\"loisir-excursion-content\">
                        <h3>";
                // line 1046
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1046, $this->source); })()), "titre", [], "any", false, false, false, 1046), "html", null, true);
                yield "</h3>

                        <div class=\"loisir-excursion-meta-info\">
                            <span class=\"loisir-meta-item\">📍 ";
                // line 1049
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1049, $this->source); })()), "lieu", [], "any", false, false, false, 1049), "html", null, true);
                yield "</span>
                            <span class=\"loisir-meta-item\">⏱ ";
                // line 1050
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1050, $this->source); })()), "duree", [], "any", false, false, false, 1050), "html", null, true);
                yield "h</span>
                            <span class=\"loisir-meta-item\">📅 ";
                // line 1051
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1051, $this->source); })()), "date", [], "any", false, false, false, 1051), "d/m/Y"), "html", null, true);
                yield "</span>
                        </div>

                        ";
                // line 1054
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1054, $this->source); })()), "weather", [], "any", false, false, false, 1054)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1055
                    yield "                        <div class=\"loisir-weather\">
                            <img src=\"http://openweathermap.org/img/wn/";
                    // line 1056
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1056, $this->source); })()), "weather", [], "any", false, false, false, 1056), "weather", [], "any", false, false, false, 1056), 0, [], "array", false, false, false, 1056), "icon", [], "any", false, false, false, 1056), "html", null, true);
                    yield "@2x.png\" alt=\"Weather icon\" class=\"weather-icon\">
                            <span class=\"weather-temp\">";
                    // line 1057
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1057, $this->source); })()), "weather", [], "any", false, false, false, 1057), "main", [], "any", false, false, false, 1057), "temp", [], "any", false, false, false, 1057)), "html", null, true);
                    yield "°C</span>
                            <span class=\"weather-desc\">";
                    // line 1058
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1058, $this->source); })()), "weather", [], "any", false, false, false, 1058), "weather", [], "any", false, false, false, 1058), 0, [], "array", false, false, false, 1058), "description", [], "any", false, false, false, 1058)), "html", null, true);
                    yield "</span>
                        </div>
                        ";
                }
                // line 1061
                yield "
                        <p>
                            ";
                // line 1063
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1063, $this->source); })()), "description", [], "any", false, false, false, 1063), 0, 90), "html", null, true);
                yield "
                            ";
                // line 1064
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1064, $this->source); })()), "description", [], "any", false, false, false, 1064)) > 90)) {
                    yield "...";
                }
                // line 1065
                yield "                        </p>

                        <div class=\"loisir-prix-row\">
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Adulte</span>
                                <span class=\"loisir-prix-value\">";
                // line 1070
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1070, $this->source); })()), "prixData", [], "any", false, false, false, 1070), "prix_adulte", [], "any", false, false, false, 1070)), "html", null, true);
                yield " TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Enfant</span>
                                <span class=\"loisir-prix-value enfant\">";
                // line 1074
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1074, $this->source); })()), "prixData", [], "any", false, false, false, 1074), "prix_enfant", [], "any", false, false, false, 1074)), "html", null, true);
                yield " TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Bébé</span>
                                <span class=\"loisir-prix-value bebe\">
                                    ";
                // line 1079
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1079, $this->source); })()), "prixData", [], "any", false, false, false, 1079), "prix_bebe", [], "any", false, false, false, 1079) > 0)) {
                    // line 1080
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1080, $this->source); })()), "prixData", [], "any", false, false, false, 1080), "prix_bebe", [], "any", false, false, false, 1080)), "html", null, true);
                    yield " TND
                                    ";
                } else {
                    // line 1082
                    yield "                                        Gratuit
                                    ";
                }
                // line 1084
                yield "                                </span>
                            </div>
                        </div>

                        <div class=\"loisir-rating\">
                            ";
                // line 1089
                $context["rating"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "rating", [], "any", true, true, false, 1089) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1089, $this->source); })()), "rating", [], "any", false, false, false, 1089)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1089, $this->source); })()), "rating", [], "any", false, false, false, 1089)) : (4.0));
                // line 1090
                yield "                            ";
                $context["stars"] = Twig\Extension\CoreExtension::round((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 1090, $this->source); })()));
                // line 1091
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 1092
                    yield "                                ";
                    if (($context["i"] <= (isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new RuntimeError('Variable "stars" does not exist.', 1092, $this->source); })()))) {
                        // line 1093
                        yield "                                    ⭐
                                ";
                    } else {
                        // line 1095
                        yield "                                    ☆
                                ";
                    }
                    // line 1097
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1098
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 1098, $this->source); })()), "html", null, true);
                yield "/5
                        </div>

                        ";
                // line 1102
                yield "                        <div style=\"margin-bottom:15px;\">
                            <span style=\"
                                display:inline-block;
                                padding:6px 14px;
                                background:rgba(255,193,7,0.1);
                                border:1px solid rgba(255,193,7,0.3);
                                color:#FFC107;
                                border-radius:20px;
                                font-size:12px;\">
                                ✨ ";
                // line 1111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "raison", [], "any", false, false, false, 1111), "html", null, true);
                yield "
                            </span>
                        </div>

                        <div class=\"loisir-excursion-footer\">
                            <a href=\"";
                // line 1116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1116, $this->source); })()), "idExcursion", [], "any", false, false, false, 1116)]), "html", null, true);
                yield "\"
                               class=\"loisir-excursion-btn btn-reserver\">Voir détails →</a>
                           
                        </div>
                    </div>

                </article>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1125
            yield "

        ";
        } else {
            // line 1128
            yield "
            ";
            // line 1130
            yield "            ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 1130, $this->source); })()))) {
                // line 1131
                yield "                <p style=\"color:rgba(255,255,255,0.7); text-align:center; grid-column:1/-1;\">
                    🗺️ Aucune excursion disponible
                </p>
            ";
            }
            // line 1135
            yield "
            ";
            // line 1136
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 1136, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["excursion"]) {
                // line 1137
                yield "
                <article class=\"loisir-excursion-card\">

                    <div class=\"loisir-excursion-image\">
                        <img src=\"";
                // line 1141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "imageUrl", [], "any", false, false, false, 1141))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 1141), "html", null, true);
                yield "\">
                        <div class=\"loisir-excursion-overlay\"></div>
                        <span class=\"loisir-excursion-badge\">";
                // line 1143
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", true, true, false, 1143) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", false, false, false, 1143)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", false, false, false, 1143), "html", null, true)) : ("Outdoor"));
                yield "</span>
                        <span class=\"loisir-excursion-places\">";
                // line 1144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "nombrePlacesDisponibles", [], "any", false, false, false, 1144), "html", null, true);
                yield " places</span>
                    </div>

                    <div class=\"loisir-excursion-content\">
                        <h3>";
                // line 1148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 1148), "html", null, true);
                yield "</h3>

                        <div class=\"loisir-excursion-meta-info\">
                            <span class=\"loisir-meta-item\">📍 ";
                // line 1151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "lieu", [], "any", false, false, false, 1151), "html", null, true);
                yield "</span>
                            <span class=\"loisir-meta-item\">⏱ ";
                // line 1152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "duree", [], "any", false, false, false, 1152), "html", null, true);
                yield "h</span>
                            <span class=\"loisir-meta-item\">📅 ";
                // line 1153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "date", [], "any", false, false, false, 1153), "d/m/Y"), "html", null, true);
                yield "</span>
                        </div>

                        ";
                // line 1156
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "weather", [], "any", false, false, false, 1156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1157
                    yield "                        <div class=\"loisir-weather\">
                            <img src=\"http://openweathermap.org/img/wn/";
                    // line 1158
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "weather", [], "any", false, false, false, 1158), "weather", [], "any", false, false, false, 1158), 0, [], "array", false, false, false, 1158), "icon", [], "any", false, false, false, 1158), "html", null, true);
                    yield "@2x.png\" alt=\"Weather icon\" class=\"weather-icon\">
                            <span class=\"weather-temp\">";
                    // line 1159
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "weather", [], "any", false, false, false, 1159), "main", [], "any", false, false, false, 1159), "temp", [], "any", false, false, false, 1159)), "html", null, true);
                    yield "°C</span>
                            <span class=\"weather-desc\">";
                    // line 1160
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "weather", [], "any", false, false, false, 1160), "weather", [], "any", false, false, false, 1160), 0, [], "array", false, false, false, 1160), "description", [], "any", false, false, false, 1160)), "html", null, true);
                    yield "</span>
                        </div>
                        ";
                }
                // line 1163
                yield "
                        <p>
                            ";
                // line 1165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "description", [], "any", false, false, false, 1165), 0, 90), "html", null, true);
                yield "
                            ";
                // line 1166
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "description", [], "any", false, false, false, 1166)) > 90)) {
                    yield "...";
                }
                // line 1167
                yield "                        </p>

                        <div class=\"loisir-prix-row\">
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Adulte</span>
                                <span class=\"loisir-prix-value\">";
                // line 1172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixData", [], "any", false, false, false, 1172), "prix_adulte", [], "any", false, false, false, 1172)), "html", null, true);
                yield " TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Enfant</span>
                                <span class=\"loisir-prix-value enfant\">";
                // line 1176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixData", [], "any", false, false, false, 1176), "prix_enfant", [], "any", false, false, false, 1176)), "html", null, true);
                yield " TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Bébé</span>
                                <span class=\"loisir-prix-value bebe\">
                                    ";
                // line 1181
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixData", [], "any", false, false, false, 1181), "prix_bebe", [], "any", false, false, false, 1181) > 0)) {
                    // line 1182
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixData", [], "any", false, false, false, 1182), "prix_bebe", [], "any", false, false, false, 1182)), "html", null, true);
                    yield " TND
                                    ";
                } else {
                    // line 1184
                    yield "                                        Gratuit
                                    ";
                }
                // line 1186
                yield "                                </span>
                            </div>
                        </div>

   <div class=\"loisir-rating\">
    ";
                // line 1191
                $context["rating"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "rating", [], "any", true, true, false, 1191)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "rating", [], "any", false, false, false, 1191), 0)) : (0));
                // line 1192
                yield "    ";
                $context["stars"] = Twig\Extension\CoreExtension::round((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 1192, $this->source); })()), 0, "floor");
                // line 1193
                yield "
    <div class=\"stars\">
        ";
                // line 1195
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 1196
                    yield "            ";
                    if (($context["i"] <= (isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new RuntimeError('Variable "stars" does not exist.', 1196, $this->source); })()))) {
                        // line 1197
                        yield "                <span class=\"star-full\">★</span>
            ";
                    } else {
                        // line 1199
                        yield "                <span class=\"star-empty\">★</span>
            ";
                    }
                    // line 1201
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1202
                yield "    </div>

    <span class=\"rating-value\">
        ";
                // line 1205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 1205, $this->source); })()), 1), "html", null, true);
                yield "/5
    </span>
</div>

                        <div class=\"loisir-excursion-footer\">
                            <a href=\"";
                // line 1210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "idExcursion", [], "any", false, false, false, 1210)]), "html", null, true);
                yield "\"
                               class=\"loisir-excursion-btn btn-reserver\">Voir détails →</a>
                            
                        </div>
                    </div>

                </article>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['excursion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1219
            yield "
        ";
        }
        // line 1221
        yield "
    </div>
</section>

";
        // line 1226
        yield "<div id=\"chatbot-bubble\" onclick=\"toggleChatbot()\" style=\"
    position:fixed; bottom:30px; right:30px; z-index:9999;
    width:60px; height:60px;
    background:linear-gradient(135deg,#7C3AED,#4F46E5);
    border-radius:50%; cursor:pointer;
    display:flex; align-items:center; justify-content:center;
    box-shadow:0 8px 25px rgba(124,58,237,0.5);
    transition:all 0.3s ease; font-size:26px;\">
    🤖
</div>

<div id=\"chatbot-panel\" style=\"
    position:fixed; bottom:105px; right:30px; z-index:9998;
    width:380px; max-height:600px;
    background:rgba(8,20,40,0.97);
    border:1px solid rgba(124,58,237,0.4);
    border-radius:24px; overflow:hidden;
    box-shadow:0 20px 60px rgba(0,0,0,0.5);
    display:none; flex-direction:column;\">

    <div style=\"padding:20px 24px; background:linear-gradient(135deg,#7C3AED,#4F46E5); display:flex; align-items:center; gap:12px;\">
        <span style=\"font-size:28px;\">🤖</span>
        <div>
            <div style=\"color:white; font-weight:700; font-size:15px;\">Assistant Voyage</div>
            <div style=\"color:rgba(255,255,255,0.7); font-size:12px;\">Powered by Gemini AI</div>
        </div>
        <span onclick=\"toggleChatbot()\" style=\"margin-left:auto; cursor:pointer; color:rgba(255,255,255,0.7); font-size:20px;\">✕</span>
    </div>

    <div id=\"chatbot-messages\" style=\"
        flex:1; overflow-y:auto; padding:20px;
        display:flex; flex-direction:column; gap:12px;
        max-height:350px;
        scrollbar-width:thin; scrollbar-color:rgba(124,58,237,0.3) transparent;\">
        <div class=\"bot-msg\" style=\"
            background:rgba(124,58,237,0.15);
            border:1px solid rgba(124,58,237,0.3);
            border-radius:16px 16px 16px 4px;
            padding:14px 16px; font-size:13px; color:rgba(255,255,255,0.9);\">
            👋 Bonjour ! Je suis votre assistant voyage.<br><br>
            Dites-moi :<br>
            • Combien de personnes ?<br>
            • Votre budget total (TND) ?<br>
            • Une destination préférée ? (optionnel)
        </div>
    </div>

    <div style=\"padding:16px; border-top:1px solid rgba(255,255,255,0.06);\">
        <div style=\"display:grid; grid-template-columns:1fr 1fr; gap:8px; margin-bottom:10px;\">
            <input type=\"number\" id=\"cb-nb\" placeholder=\"👥 Nb personnes\" min=\"1\" style=\"padding:10px 12px; border-radius:10px; font-size:13px; background:rgba(255,255,255,0.07); border:1px solid rgba(124,58,237,0.3); color:white; outline:none;\">
            <input type=\"number\" id=\"cb-budget\" placeholder=\"💰 Budget TND\" min=\"0\" style=\"padding:10px 12px; border-radius:10px; font-size:13px; background:rgba(255,255,255,0.07); border:1px solid rgba(124,58,237,0.3); color:white; outline:none;\">
        </div>
        <input type=\"text\" id=\"cb-lieu\" placeholder=\"📍 Destination (optionnel)\" style=\"width:100%; padding:10px 12px; border-radius:10px; font-size:13px; background:rgba(255,255,255,0.07); border:1px solid rgba(124,58,237,0.3); color:white; outline:none; margin-bottom:10px; box-sizing:border-box;\">
        <div style=\"display:flex; gap:8px;\">
            <input type=\"text\" id=\"cb-message\" placeholder=\"💬 Question ou précision...\" style=\"flex:1; padding:10px 14px; border-radius:10px; font-size:13px; background:rgba(255,255,255,0.07); border:1px solid rgba(124,58,237,0.3); color:white; outline:none;\">
            <button onclick=\"sendChatbot()\" style=\"padding:10px 18px; background:linear-gradient(135deg,#7C3AED,#4F46E5); color:white; border:none; border-radius:10px; font-weight:700; cursor:pointer; font-size:16px;\">➤</button>
        </div>
    </div>
</div>
</section>
<style>
.loisir-rating {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 14px;
    font-weight: 500;
    color: #0B2D4A;
}

/* étoiles */
.loisir-rating .stars {
    display: flex;
    gap: 2px;
}

/* étoile pleine */
.loisir-rating .star-full {
    color: #FFC107; /* doré */
    font-size: 16px;
}

/* étoile vide */
.loisir-rating .star-empty {
    color: #ddd;
    font-size: 16px;
}

/* texte de note */
.loisir-rating .rating-value {
    font-size: 13px;
    color: #0B2D4A;
}
.loisir-rating .star-full:hover,
.loisir-rating .star-empty:hover {
    transform: scale(1.2);
    transition: 0.2s;
}

/* Weather display */
.loisir-weather {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 10px 0;
    padding: 8px 12px;
    background: rgba(255,255,255,0.1);
    border-radius: 8px;
    font-size: 14px;
    color: #fff;
}

.weather-icon {
    width: 30px;
    height: 30px;
}

.weather-temp {
    font-weight: bold;
    color: #FFC107;
}

.weather-desc {
    font-size: 12px;
    opacity: 0.9;
}

.loisir-excursions-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    width: 100%;
}

.loisir-prix-row {
    display: flex;
    gap: 16px;
    align-items: flex-start;
    flex-wrap: wrap;
    margin: 12px 0;
}

.loisir-prix-item {
    display: flex;
    flex-direction: column;
    gap: 4px;
    min-width: 70px;
}
    .bot-msg { animation: fadeInMsg 0.3s ease; }
    .user-msg { animation: fadeInMsg 0.3s ease; }
    @keyframes fadeInMsg {
        from { opacity:0; transform:translateY(10px); }
        to   { opacity:1; transform:translateY(0); }
    }
    .exc-card-cb {
        background: rgba(255,193,7,0.08);
        border: 1px solid rgba(255,193,7,0.25);
        border-radius: 12px; padding: 12px;
        margin-top: 6px; transition: all 0.2s;
    }
    .exc-card-cb:hover {
        background: rgba(255,193,7,0.15);
        border-color: rgba(255,193,7,0.5);
    }
</style>


<script>
/* ============================================================
   1. CHATBOT
   ============================================================ */

function toggleChatbot() {
    const panel  = document.getElementById('chatbot-panel');
    const bubble = document.getElementById('chatbot-bubble');
    const isOpen = panel.style.display === 'flex';
    panel.style.display      = isOpen ? 'none' : 'flex';
    bubble.style.transform   = isOpen ? 'scale(1)' : 'scale(0.9)';
}

function appendMessage(html, type) {
    const container = document.getElementById('chatbot-messages');
    const div       = document.createElement('div');
    div.className   = type === 'bot' ? 'bot-msg' : 'user-msg';
    div.style.cssText = type === 'bot'
        ? 'background:rgba(124,58,237,0.15);border:1px solid rgba(124,58,237,0.3);border-radius:16px 16px 16px 4px;padding:14px 16px;font-size:13px;color:rgba(255,255,255,0.9);'
        : 'background:rgba(255,193,7,0.1);border:1px solid rgba(255,193,7,0.25);border-radius:16px 16px 4px 16px;padding:14px 16px;font-size:13px;color:rgba(255,255,255,0.9);align-self:flex-end;max-width:80%;';
    div.innerHTML = html;
    container.appendChild(div);
    container.scrollTop = container.scrollHeight;
}

function appendLoading() {
    const container   = document.getElementById('chatbot-messages');
    const div         = document.createElement('div');
    div.id            = 'cb-loading';
    div.style.cssText = 'background:rgba(124,58,237,0.15);border:1px solid rgba(124,58,237,0.3);border-radius:16px 16px 16px 4px;padding:14px 16px;font-size:13px;color:rgba(255,255,255,0.6);';
    div.innerHTML     = '⏳ Analyse en cours...';
    container.appendChild(div);
    container.scrollTop = container.scrollHeight;
}

async function sendChatbot() {
    const nb      = document.getElementById('cb-nb').value;
    const budget  = document.getElementById('cb-budget').value;
    const lieu    = document.getElementById('cb-lieu').value;
    const message = document.getElementById('cb-message').value;

    if (!nb || !budget) {
        appendMessage('⚠️ Veuillez renseigner le nombre de personnes et votre budget.', 'bot');
        return;
    }

    // Afficher le message utilisateur
    appendMessage(
        `👥 \${nb} personne(s) | 💰 \${budget} TND\${lieu ? ' | 📍 ' + lieu : ''}\${message ? '<br>💬 ' + message : ''}`,
        'user'
    );

    appendLoading();

    try {
        const res = await fetch('/chatbot/recommander', {
            method:  'POST',
            headers: { 'Content-Type': 'application/json' },
            body:    JSON.stringify({
                nb_personnes: parseInt(nb),
                budget:       parseFloat(budget),
                lieu:         lieu,
                message:      message
            })
        });

        const data = await res.json();

        document.getElementById('cb-loading')?.remove();

        // Réponse texte
        appendMessage(data.reply.replace(/\\n/g, '<br>'), 'bot');

        // Cartes excursions recommandées
        if (data.excursions && data.excursions.length > 0) {
            let cardsHtml = '<div style=\"margin-top:8px; display:flex; flex-direction:column; gap:8px;\">';
            data.excursions.forEach(exc => {
                cardsHtml += `
                    <a href=\"/excursion/\${exc.id}\" class=\"exc-card-cb\" style=\"text-decoration:none; display:block;\">
                        <div style=\"display:flex; gap:10px; align-items:center;\">
                            \${exc.image ? `<img src=\"/uploads/\${exc.image}\" style=\"width:50px;height:50px;object-fit:cover;border-radius:8px;\" onerror=\"this.style.display='none'\">` : ''}
                            <div style=\"flex:1;\">
                                <div style=\"color:#FFC107; font-weight:700; font-size:13px;\">\${exc.titre}</div>
                                <div style=\"color:rgba(255,255,255,0.6); font-size:11px;\">📍 \${exc.lieu} | ⏱ \${exc.duree}h</div>
                                <div style=\"color:#FFC107; font-size:12px; margin-top:3px;\">
                                    💰 Total: \${exc.total.toFixed(0)} TND
                                </div>
                            </div>
                            <span style=\"color:#FFC107; font-size:18px;\">→</span>
                        </div>
                    </a>`;
            });
            cardsHtml += '</div>';
            appendMessage(cardsHtml, 'bot');
        }

        document.getElementById('cb-message').value = '';

    } catch (e) {
        document.getElementById('cb-loading')?.remove();
        appendMessage('❌ Erreur de connexion. Réessayez.', 'bot');
    }
}

// Envoi avec la touche Entrée
document.getElementById('cb-message')?.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') sendChatbot();
});


/* ============================================================
   2. CALENDRIER  —  variables partagées
   ============================================================ */

const monthsFr = [
    'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
    'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
];

let currentDate  = new Date();
let selectedDate = null;

function renderCalendar() {
    const year  = currentDate.getFullYear();
    const month = currentDate.getMonth();

    const monthLabel = document.getElementById('monthLabel');
    const daysGrid   = document.getElementById('daysGrid');
    const calText    = document.getElementById('calText');
    const inputDate  = document.getElementById('inputDate');
    const selectedVal = document.getElementById('selectedVal');
    const calPopup   = document.getElementById('calPopup');

    if (monthLabel) {
        monthLabel.textContent = monthsFr[month] + ' ' + year;
    }

    const firstDay  = new Date(year, month, 1);
    const lastDay   = new Date(year, month + 1, 0);
    const startDay  = (firstDay.getDay() + 6) % 7;
    const totalDays = lastDay.getDate();

    const today = new Date();
    today.setHours(0, 0, 0, 0);

    let html = '';

    // Cases vides en début de grille
    for (let i = 0; i < startDay; i++) {
        html += '<div class=\"cal-day other-month\"></div>';
    }

    for (let day = 1; day <= totalDays; day++) {
        let classes             = 'cal-day';
        const currentDayDate   = new Date(year, month, day);

        if (currentDayDate < today) classes += ' disabled';

        if (
            day   === today.getDate()  &&
            month === today.getMonth() &&
            year  === today.getFullYear()
        ) {
            classes += ' today';
        }

        if (
            selectedDate &&
            day   === selectedDate.getDate()  &&
            month === selectedDate.getMonth() &&
            year  === selectedDate.getFullYear()
        ) {
            classes += ' selected';
        }

        html += `<div class=\"\${classes}\" data-day=\"\${day}\">\${day}</div>`;
    }

    if (daysGrid) {
        daysGrid.innerHTML = html;

        daysGrid
            .querySelectorAll('.cal-day:not(.other-month):not(.disabled)')
            .forEach(function (dayEl) {
                dayEl.addEventListener('click', function () {
                    if (this.classList.contains('disabled')) return;

                    const day    = parseInt(this.getAttribute('data-day'));
                    selectedDate = new Date(year, month, day);

                    const dateStr = year + '-' +
                        String(month + 1).padStart(2, '0') + '-' +
                        String(day).padStart(2, '0');

                    const formatted =
                        String(day).padStart(2, '0') + ' ' +
                        monthsFr[month].substring(0, 3) + ' ' +
                        year;

                    if (inputDate)    inputDate.value        = dateStr;
                    if (calText)    { calText.textContent    = formatted; calText.classList.add('has-value'); }
                    if (selectedVal)  selectedVal.textContent = formatted;
                    if (calPopup)     calPopup.style.display  = 'none';

                    renderCalendar();
                });
            });
    }
}


/* ============================================================
   3. DOM READY
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {

const btn = document.getElementById('btnReco');
if (btn) {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        fetch('/recommandations/ajax')
            .then(res => res.text())
            .then(html => {
                document.getElementById('excursionsGrid').innerHTML = html;
                setTimeout(() => {
                    document.getElementById('excursions').scrollIntoView({ behavior: 'smooth' });
                }, 100);
            });
    });
}

    /* --- Scroll automatique via localStorage --------------- */
    if (localStorage.getItem('scrollToExcursions') === 'true') {
        const section = document.getElementById('excursions');
        if (section) {
            setTimeout(() => section.scrollIntoView({ behavior: 'smooth' }), 200);
        }
        localStorage.removeItem('scrollToExcursions');
    }

    /* --- Formulaire de recherche --------------------------- */
    const form = document.getElementById('loisirSearchForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const params = new URLSearchParams(new FormData(this));

            fetch('/loisirs/search?' + params.toString())
                .then(res => res.text())
                .then(html => {
                    const grid = document.getElementById('excursionsGrid');

                    // Vérifier si des résultats ont été trouvés
                    // On crée un élément temporaire pour analyser le HTML retourné
                    const temp = document.createElement('div');
                    temp.innerHTML = html;
                    const hasResults = temp.querySelector('[data-excursion], .excursion-card, .card, .loisir-item') !== null
                                    || temp.children.length > 0 && temp.textContent.trim() !== '';

                    if (hasResults) {
                        // ✅ Des résultats existent → on les affiche
                        grid.innerHTML = html;
                        document.getElementById('excursions').scrollIntoView({ behavior: 'smooth' });
                    } else {
                        // ❌ Aucun résultat → on charge les recommandations IA
                        fetch('/recommandations/ajax')
                            .then(res => res.text())
                            .then(recoHtml => {
                                grid.innerHTML = recoHtml;
                                document.getElementById('excursions').scrollIntoView({ behavior: 'smooth' });
                            });
                    }
                })
                .catch(() => {
                    // En cas d'erreur réseau → fallback recommandations IA
                    fetch('/recommandations/ajax')
                        .then(res => res.text())
                        .then(recoHtml => {
                            document.getElementById('excursionsGrid').innerHTML = recoHtml;
                            document.getElementById('excursions').scrollIntoView({ behavior: 'smooth' });
                        });
                });
        });
    }

    /* --- Dropdown Catégorie --------------------------------- */
    const categorieSelected = document.getElementById('categorieSelected');
    const categorieOptions  = document.getElementById('categorieOptions');
    const categorieValue    = document.getElementById('categorieValue');
    const calPopup          = document.getElementById('calPopup');

    if (categorieSelected) {
        categorieSelected.addEventListener('click', function (e) {
            e.stopPropagation();
            if (calPopup) calPopup.style.display = 'none';
            categorieOptions.classList.toggle('show');
        });
    }

    document.querySelectorAll('#categorieOptions div').forEach(function (option) {
        option.addEventListener('click', function () {
            categorieSelected.textContent = this.textContent;
            categorieValue.value          = this.getAttribute('data-value');
            categorieOptions.classList.remove('show');
            document.querySelectorAll('#categorieOptions div').forEach(d => d.classList.remove('same-as-selected'));
            this.classList.add('same-as-selected');
        });
    });

    /* --- Calendrier ---------------------------------------- */
    const calTrigger  = document.getElementById('calTrigger');
    const prevBtn     = document.getElementById('prevBtn');
    const nextBtn     = document.getElementById('nextBtn');
    const clearBtn    = document.getElementById('clearBtn');
    const calText     = document.getElementById('calText');
    const inputDate   = document.getElementById('inputDate');
    const selectedVal = document.getElementById('selectedVal');

    if (calTrigger) {
        calTrigger.addEventListener('click', function (e) {
            e.stopPropagation();
            if (categorieOptions) categorieOptions.classList.remove('show');
            if (calPopup) calPopup.style.display = calPopup.style.display === 'block' ? 'none' : 'block';
            renderCalendar();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
        });
    }

    if (clearBtn) {
        clearBtn.addEventListener('click', function () {
            selectedDate        = null;
            inputDate.value     = '';
            calText.textContent = 'Choisir une date';
            calText.classList.remove('has-value');
            selectedVal.textContent    = '—';
            if (calPopup) calPopup.style.display = 'none';
            renderCalendar();
        });
    }

    /* --- Fermeture au clic extérieur ----------------------- */
    document.addEventListener('click', function () {
        if (categorieOptions) categorieOptions.classList.remove('show');
        if (calPopup)         calPopup.style.display = 'none';
    });

    if (calPopup) {
        calPopup.addEventListener('click', e => e.stopPropagation());
    }

    if (categorieOptions) {
        categorieOptions.addEventListener('click', e => e.stopPropagation());
    }

    /* --- Rendu initial du calendrier ----------------------- */
    renderCalendar();
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
        return "loisirs/loisirs.html.twig";
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
        return array (  1696 => 1226,  1690 => 1221,  1686 => 1219,  1671 => 1210,  1663 => 1205,  1658 => 1202,  1652 => 1201,  1648 => 1199,  1644 => 1197,  1641 => 1196,  1637 => 1195,  1633 => 1193,  1630 => 1192,  1628 => 1191,  1621 => 1186,  1617 => 1184,  1611 => 1182,  1609 => 1181,  1601 => 1176,  1594 => 1172,  1587 => 1167,  1583 => 1166,  1579 => 1165,  1575 => 1163,  1569 => 1160,  1565 => 1159,  1561 => 1158,  1558 => 1157,  1556 => 1156,  1550 => 1153,  1546 => 1152,  1542 => 1151,  1536 => 1148,  1529 => 1144,  1525 => 1143,  1518 => 1141,  1512 => 1137,  1508 => 1136,  1505 => 1135,  1499 => 1131,  1496 => 1130,  1493 => 1128,  1488 => 1125,  1473 => 1116,  1465 => 1111,  1454 => 1102,  1447 => 1098,  1441 => 1097,  1437 => 1095,  1433 => 1093,  1430 => 1092,  1425 => 1091,  1422 => 1090,  1420 => 1089,  1413 => 1084,  1409 => 1082,  1403 => 1080,  1401 => 1079,  1393 => 1074,  1386 => 1070,  1379 => 1065,  1375 => 1064,  1371 => 1063,  1367 => 1061,  1361 => 1058,  1357 => 1057,  1353 => 1056,  1350 => 1055,  1348 => 1054,  1342 => 1051,  1338 => 1050,  1334 => 1049,  1328 => 1046,  1321 => 1042,  1317 => 1041,  1310 => 1039,  1304 => 1035,  1301 => 1034,  1296 => 1033,  1293 => 1031,  1291 => 1030,  1287 => 1028,  1272 => 1019,  1264 => 1015,  1258 => 1014,  1254 => 1012,  1250 => 1010,  1247 => 1009,  1242 => 1008,  1239 => 1007,  1237 => 1006,  1230 => 1001,  1226 => 999,  1220 => 997,  1218 => 996,  1210 => 991,  1203 => 987,  1196 => 982,  1192 => 981,  1188 => 980,  1184 => 978,  1178 => 974,  1171 => 970,  1164 => 966,  1155 => 960,  1151 => 958,  1149 => 957,  1143 => 954,  1139 => 953,  1135 => 952,  1129 => 949,  1122 => 945,  1118 => 944,  1111 => 942,  1105 => 938,  1101 => 937,  1098 => 936,  1092 => 932,  1089 => 931,  1086 => 929,  1084 => 928,  1079 => 925,  1074 => 921,  1065 => 917,  1063 => 916,  1051 => 912,  1047 => 911,  1040 => 907,  1036 => 906,  1029 => 903,  1024 => 902,  1014 => 894,  1008 => 889,  1000 => 885,  993 => 880,  991 => 879,  972 => 863,  968 => 862,  959 => 855,  951 => 848,  942 => 845,  938 => 844,  933 => 843,  929 => 842,  919 => 834,  909 => 826,  900 => 819,  893 => 814,  889 => 812,  871 => 796,  867 => 794,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    body {
        background: #0B2D4A !important;
    }

    /* ── HERO ── */
    .loisir-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 120px 100px 80px;
        overflow: hidden;
    }

    .loisir-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .loisir-hero-bg img {
        width: 100%; height: 100%;
        object-fit: cover;
        opacity: 0.3;
    }

    .loisir-hero-gradient {
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
    }

    .loisir-hero-content {
        position: relative;
        z-index: 2;
        max-width: 780px;
    }

    .loisir-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255,193,7,0.15);
        border: 1px solid rgba(255,193,7,0.3);
        padding: 8px 20px;
        border-radius: 30px;
        font-size: 13px;
        color: #FFC107;
        margin-bottom: 25px;
        animation: loisirFadeDown 0.8s ease;
    }

    @keyframes loisirFadeDown {
        from { opacity: 0; transform: translateY(-20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .loisir-hero-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 72px;
        font-weight: 800;
        color: #FFC107;
        line-height: 1.1;
        margin: 0 0 25px;
        animation: loisirFadeLeft 1s ease 0.2s both;
    }

    @keyframes loisirFadeLeft {
        from { opacity: 0; transform: translateX(-40px); }
        to   { opacity: 1; transform: translateX(0); }
    }

    .loisir-hero-underline {
        width: 120px; height: 5px;
        background: linear-gradient(90deg, #FFC107, #FF9800);
        border-radius: 3px;
        margin: 0 0 30px;
        animation: loisirExpand 1s ease 0.5s both;
    }

    @keyframes loisirExpand {
        from { width: 0; }
        to   { width: 120px; }
    }

    .loisir-hero-description {
        font-size: 18px;
        line-height: 1.8;
        color: rgba(255,255,255,0.9);
        margin: 0 0 40px;
        animation: loisirFadeUp 1s ease 0.4s both;
    }

    @keyframes loisirFadeUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* ── BOUTONS HERO ── */
    .loisir-hero-buttons {
        display: flex;
        gap: 20px;
        animation: loisirFadeUp 1s ease 0.7s both;
    }

    .loisir-btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        padding: 16px 35px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(255,193,7,0.3);
    }

    .loisir-btn-primary::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s ease;
    }

    .loisir-btn-primary:hover::before { left: 100%; }
    .loisir-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(255,193,7,0.5);
    }

    .loisir-btn-secondary {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: transparent;
        color: #FFC107;
        padding: 16px 35px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        border: 2px solid #FFC107;
        transition: all 0.4s ease;
    }

    .loisir-btn-secondary:hover {
        background: rgba(255,193,7,0.1);
        transform: translateY(-3px);
    }

    .loisir-category-img {
        width: 100%;
        height: 180px;
        overflow: hidden;
        position: relative;
    }

    .loisir-category-img img {
        width: 100%; height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .loisir-category-card:hover .loisir-category-img img {
        transform: scale(1.08);
    }

    .loisir-category-img-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(8,30,55,0.85) 0%, transparent 60%);
    }

    .loisir-category-body {
        padding: 25px 30px 30px;
    }

    /* ===============================
       SECTION CATEGORIES
    ================================= */
    .loisir-categories {
        padding: 80px 100px;
        background: linear-gradient(180deg, #051621 0%, #08263E 50%, #0B2D4A 100%);
    }

    .loisir-categories-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .loisir-category-card {
        background: rgba(255,255,255,0.04);
        border-radius: 22px;
        overflow: hidden;
        text-decoration: none;
        transition: all 0.4s ease;
        border: 1px solid rgba(255,193,7,0.15);
        position: relative;
    }

    .loisir-category-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255,193,7,0.1), transparent);
        opacity: 0;
        transition: 0.4s;
    }

    .loisir-category-card:hover::before { opacity: 1; }

    .loisir-category-card:hover {
        transform: translateY(-8px) scale(1.02);
        border-color: rgba(255,193,7,0.4);
        box-shadow: 0 20px 60px rgba(0,0,0,0.4);
    }

    .loisir-category-img {
        height: 180px;
        overflow: hidden;
        position: relative;
    }

    .loisir-category-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .loisir-category-card:hover img { transform: scale(1.1); }

    .loisir-category-img-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(8,30,55,0.9), transparent);
    }

    .loisir-category-body { padding: 20px 25px; }

    .loisir-category-card h3 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 22px;
        color: #FFC107;
        margin: 0 0 12px;
        font-weight: 700;
    }

    .loisir-category-card p {
        font-size: 14px;
        color: rgba(255,255,255,0.75);
        line-height: 1.7;
        margin: 0 0 18px;
    }

    .loisir-category-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #FFC107;
        font-weight: 500;
        font-size: 14px;
        transition: gap 0.3s ease;
    }

    .loisir-category-card:hover .loisir-category-link { gap: 14px; }

    /* ── EXCURSIONS ── */
    .loisir-excursions {
        padding: 100px;
        background: #0B2D4A;
    }

    .loisir-excursions-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        position: relative;
    }

    .loisir-excursion-card {
        position: relative;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.25);
        transition: all 0.5s cubic-bezier(0.4,0,0.2,1);
        display: flex;
        flex-direction: column;
    }

    .loisir-excursion-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 70px rgba(0,0,0,0.35);
    }

    .loisir-excursion-image {
        position: relative;
        height: 210px;
        overflow: hidden;
    }

    .loisir-excursion-image img {
        width: 100%; height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .loisir-excursion-card:hover .loisir-excursion-image img { transform: scale(1.1); }

    .loisir-excursion-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(11,45,74,0.85) 0%, transparent 55%);
    }

    .loisir-excursion-badge {
        position: absolute;
        top: 14px; left: 14px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        padding: 5px 14px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .loisir-excursion-places {
        position: absolute;
        top: 14px; right: 14px;
        background: rgba(11,45,74,0.88);
        color: #fff;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .loisir-excursion-content {
        padding: 20px 22px 18px;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .loisir-excursion-content h3 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 19px;
        color: #0B2D4A;
        margin: 0;
        transition: color 0.3s ease;
    }

    .loisir-excursion-card:hover .loisir-excursion-content h3 { color: #FF9800; }

    .loisir-excursion-content p {
        font-size: 13px;
        color: #5a6a78;
        line-height: 1.6;
        margin: 0;
        flex: 1;
    }

    .loisir-excursion-meta-info {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .loisir-meta-item {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 12px;
        color: #6b7a8a;
        font-weight: 500;
    }

    .loisir-meta-item svg {
        width: 13px; height: 13px;
        fill: #FFC107;
        flex-shrink: 0;
    }

    .loisir-prix-row {
        display: flex;
        border-top: 1px solid #f0f0f0;
        border-bottom: 1px solid #f0f0f0;
        padding: 10px 0;
    }

    .loisir-prix-item {
        flex: 1;
        text-align: center;
        border-right: 1px solid #f0f0f0;
    }

    .loisir-prix-item:last-child { border-right: none; }

    .loisir-prix-label {
        display: block;
        font-size: 10px;
        font-weight: 700;
        color: #9aa5b0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 3px;
    }

    .loisir-prix-value {
        display: block;
        font-size: 14px;
        font-weight: 700;
        color: #0B2D4A;
    }

    .loisir-prix-value.enfant { color: #FF9800; }
    .loisir-prix-value.bebe   { color: #26a65b; }

    .loisir-excursion-footer { display: flex; gap: 10px; }

    .loisir-excursion-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        padding: 10px 14px;
        border-radius: 25px;
        font-weight: 700;
        font-size: 13px;
        text-decoration: none;
        flex: 1;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .loisir-excursion-btn::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.25), transparent);
        transition: left 0.4s ease;
    }

    .loisir-excursion-btn:hover::before { left: 100%; }

    .btn-detail {
        background: #eef2f7;
        color: #0B2D4A;
        border: 1.5px solid #d0dce8;
    }

    .btn-detail:hover { transform: scale(1.04); }

    .btn-reserver {
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
    }

    .btn-reserver:hover {
        transform: scale(1.04);
        box-shadow: 0 6px 20px rgba(255,193,7,0.45);
    }

    .loisir-excursion-btn svg {
        width: 13px; height: 13px;
        fill: currentColor;
        flex-shrink: 0;
    }

    .loisir-excursion-card-bottom {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, #FFC107, #FF9800);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.5s ease;
    }

    .loisir-excursion-card:hover .loisir-excursion-card-bottom { transform: scaleX(1); }

    /* ── SECTION HEADER ── */
    .loisir-section-tag {
        display: inline-block;
        font-size: 13px;
        color: #FFC107;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin: 0 0 15px;
    }

    .loisir-section-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 48px;
        color: white;
        margin: 0 0 20px;
    }

    .loisir-section-line {
        width: 80px; height: 4px;
        background: linear-gradient(90deg, #FFC107, #FF9800);
        margin: 0 auto;
        border-radius: 2px;
    }

    .cal-day.disabled {
        color: #ccc;
        pointer-events: none;
        cursor: not-allowed;
    }

    #excursions { scroll-margin-top: 120px; }

    @media (max-width: 1200px) {
        .loisir-categories-grid,
        .loisir-excursions-grid { grid-template-columns: repeat(2, 1fr); }
        .loisir-hero            { padding: 120px 50px 80px; }
        .loisir-hero-title      { font-size: 56px; }
        .loisir-categories,
        .loisir-excursions      { padding: 80px 50px; }
    }

    @media (max-width: 768px) {
        .loisir-hero            { padding: 100px 25px 60px; }
        .loisir-hero-title      { font-size: 40px; }
        .loisir-hero-buttons    { flex-direction: column; }
        .loisir-categories,
        .loisir-excursions      { padding: 60px 25px; }
        .loisir-section-title   { font-size: 32px; }
        .loisir-categories-grid,
        .loisir-excursions-grid { grid-template-columns: 1fr; }
        .loisir-excursion-footer { flex-direction: column; }
        .loisir-search-bar      { flex-direction: column; border-radius: 16px; }
        .loisir-search-separator { width: auto; height: 1px; margin: 0 16px; }
    }
</style>

<style>
    /* ═══════════════════════════════════════
       SEARCH BAR
    ═══════════════════════════════════════ */
    .loisir-search-wrapper {
        display: flex;
        justify-content: center;
        margin-bottom: 60px;
    }

    .loisir-search-bar {
        display: flex;
        align-items: center;
        background: #ffffff;
        border-radius: 50px;
        padding: 8px 12px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        max-width: 1100px;
        width: 95%;
        margin: auto;
        gap: 5px;
    }

    .loisir-search-field {
        flex: 1;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 14px;
        border-radius: 20px;
        transition: 0.3s;
    }

    .loisir-search-field:hover { background: rgba(0,0,0,0.04); }

    .loisir-search-field-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(255,193,7,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .loisir-search-field-icon i { color: #FF9800; font-size: 15px; }

    .loisir-search-input-group {
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex: 1;
        min-width: 0;
    }

    .loisir-search-input-group label {
        font-size: 10px;
        font-weight: 600;
        color: #9aa5b0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 2px;
        line-height: 1;
    }

    .loisir-search-input-group input,
    .search-select {
        border: none;
        outline: none;
        font-size: 14px;
        color: #333;
        background: transparent;
        padding: 4px 0 0 0;
    }

    .search-select {
        appearance: none;
        cursor: pointer;
        font-weight: 500;
        background-image: url(\"data:image/svg+xml;utf8,<svg fill='%23999' height='10' viewBox='0 0 24 24' width='10' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>\");
        background-repeat: no-repeat;
        background-position: right 5px center;
    }

    input[type=\"date\"] { cursor: pointer; }
    input[type=\"date\"]::-webkit-calendar-picker-indicator { filter: invert(60%); cursor: pointer; }

    .loisir-search-separator {
        width: 1px;
        height: 40px;
        background: #e5e8ec;
        flex-shrink: 0;
    }

    .loisir-search-btn {
        background: linear-gradient(135deg, #FFC107, #FF9800);
        border: none;
        border-radius: 25px;
        padding: 12px 22px;
        font-weight: 600;
        color: #0B2D4A;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 6px;
        transition: 0.3s;
        flex-shrink: 0;
    }

    .loisir-search-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(255,152,0,0.4);
    }

    @media (max-width: 768px) {
        .loisir-search-bar { flex-direction: column; border-radius: 20px; padding: 15px; }
        .loisir-search-field { width: 100%; }
        .loisir-search-separator { width: 100%; height: 1px; }
    }

    /* ═══════════════════════════════════════
       CALENDAR
    ═══════════════════════════════════════ */
    #calTrigger {
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        padding: 4px 0;
        gap: 8px;
    }

    #calText { font-size: 14px; color: #aaa; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    #calText.has-value { color: #333; }
    .cal-arrow { width: 14px; height: 14px; flex-shrink: 0; }

    #calPopup {
        position: absolute;
        top: calc(100% + 8px);
        left: -16px;
        width: 300px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        z-index: 9999;
    }

    .cal-header { padding: 1rem 1.25rem 0.75rem; border-bottom: 0.5px solid #eee; }

    .cal-nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 0.75rem;
    }

    .cal-nav-btn {
        width: 28px; height: 28px;
        border: 0.5px solid #ddd;
        border-radius: 8px;
        background: transparent;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
    }

    .cal-nav-btn:hover { background: #f5f5f5; }
    .cal-month-label { font-size: 15px; font-weight: 500; color: #333; }

    .cal-weekdays { display: grid; grid-template-columns: repeat(7, 1fr); gap: 2px; }

    .cal-weekday {
        text-align: center;
        font-size: 11px;
        font-weight: 500;
        color: #aaa;
        padding: 4px 0;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .cal-days { display: grid; grid-template-columns: repeat(7, 1fr); gap: 3px; padding: 0.75rem 1rem 1rem; }

    .cal-day {
        text-align: center;
        padding: 8px 4px;
        font-size: 13px;
        cursor: pointer;
        border-radius: 8px;
        transition: all 0.2s;
        color: #333;
    }

    .cal-day:hover { background: rgba(255,193,7,0.1); color: #FF9800; }
    .cal-day.today { background: #f0f0f0; font-weight: 600; }
    .cal-day.selected { background: #FFC107; color: #0B2D4A; font-weight: 600; }
    .cal-day.other-month { color: #ccc; }
    .cal-day.disabled { color: #ccc; pointer-events: none; cursor: not-allowed; }

    .cal-footer {
        padding: 0.75rem 1rem;
        border-top: 0.5px solid #eee;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .cal-selected-info { font-size: 13px; color: #888; }
    .cal-selected-info strong { color: #FF9800; }

    .cal-clear-btn {
        font-size: 12px;
        color: #aaa;
        border: none;
        background: none;
        cursor: pointer;
        padding: 4px 8px;
        border-radius: 6px;
        transition: all 0.2s;
    }

    .cal-clear-btn:hover { background: #f5f5f5; color: #666; }

    /* ═══════════════════════════════════════
       SECTION HEADER — DYNAMIQUE
    ═══════════════════════════════════════ */
    #sectionTag   { display: inline-block; font-size: 13px; color: #FFC107; text-transform: uppercase; letter-spacing: 3px; margin: 0 0 15px; }
    #sectionTitle { font-family: 'Playfair Display', Georgia, serif; font-size: 48px; color: white; margin: 0 0 20px; }
    #sectionCount { color: white; margin-top: 15px; min-height: 24px; }
</style>

{# ── HERO ── #}
<section class=\"loisir-hero\">
    <div class=\"loisir-hero-bg\">
        <img src=\"{{ asset('images/loisirs-hero.jpg') }}\" alt=\"Loisirs\">
        <div class=\"loisir-hero-gradient\"></div>
    </div>

    <div class=\"loisir-hero-content\">
        <div class=\"loisir-hero-badge\">✦ Découvrez l'Authentique</div>
        <h1 class=\"loisir-hero-title\">Loisirs &<br>Expériences</h1>
        <div class=\"loisir-hero-underline\"></div>
        <p class=\"loisir-hero-description\">
            Vivez des moments inoubliables avec nos expériences uniques.
            Des aventures culturelles aux découvertes naturelles, nous vous
            proposons des excursions authentiques qui révèlent la beauté
            cachée de chaque destination.
        </p>

        {# ── BARRE DE RECHERCHE ── #}
        <div class=\"loisir-search-wrapper\">
            <form method=\"GET\"
                  action=\"{{ path('app_loisirs') }}\"
                  class=\"loisir-search-bar\"
                  id=\"loisirSearchForm\">

                {# DESTINATION #}
                <div class=\"loisir-search-field\">
                    <div class=\"loisir-search-field-icon\">
                        <i class=\"fa-solid fa-location-dot\"></i>
                    </div>
                    <div class=\"loisir-search-input-group\">
                        <label>Destination</label>
                        <input type=\"text\" name=\"lieu\"
                               value=\"{{ app.request.get('lieu') }}\"
                               placeholder=\"Douz, Ain Draham...\">
                    </div>
                </div>

                <div class=\"loisir-search-separator\"></div>

                {# CATEGORIE #}
                <div class=\"loisir-search-field\">
                    <div class=\"loisir-search-field-icon\">
                        <i class=\"fa-solid fa-layer-group\"></i>
                    </div>
                    <div class=\"loisir-search-input-group\">
                        <label>Catégorie</label>
                        <select name=\"categorie\" class=\"search-select\">
                            <option value=\"\">Toutes</option>
                            {% for categorie in categories %}
                                <option value=\"{{ categorie.id }}\"
                                    {{ app.request.get('categorie') == categorie.id ~ '' ? 'selected' }}>
                                    {{ categorie.nom }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>

                <div class=\"loisir-search-separator\"></div>

                {# DATE #}
                <div class=\"loisir-search-field\">
                    <div class=\"loisir-search-field-icon\">
                        <i class=\"fa-solid fa-calendar-days\"></i>
                    </div>
                    <div class=\"loisir-search-input-group\">
                        <label>Date</label>
                        <input type=\"date\" name=\"date\"
                               value=\"{{ app.request.get('date') }}\"
                               min=\"{{ \"now\"|date('Y-m-d') }}\">
                    </div>
                </div>

                <button type=\"submit\" class=\"loisir-search-btn\">
                    <i class=\"fa-solid fa-magnifying-glass\"></i>
                </button>

            </form>
        </div>

        <div class=\"loisir-hero-buttons\">
            <a href=\"#categories\" class=\"loisir-btn-primary\">
                → Découvrir nos Voyages
            </a>

            {% if app.user %}
  
<a href=\"#excursions\" id=\"btnReco\" class=\"loisir-btn-secondary\">
    ✨ Nos recommandations pour vous
</a>
            {% else %}
                <a href=\"{{ path('app_login') }}\" class=\"loisir-btn-secondary\">
                    ✨ Recommandations IA
                </a>
            {% endif %}
        </div>
    </div>
</section>

{# ── CATEGORIES ── #}
<section class=\"loisir-categories\" id=\"categories\">
    <div class=\"loisir-section-header\">
        <span class=\"loisir-section-tag\">Nos Univers</span>
        <h2 class=\"loisir-section-title\">Choisissez Votre Aventure</h2>
        <div class=\"loisir-section-line\"></div>
    </div>

    <div class=\"loisir-categories-grid\">
        {% for categorie in categories %}
            <a href=\"{{ path('excursions_by_categorie', {'id': categorie.id}) }}\"
               class=\"loisir-category-card\">
                <div class=\"loisir-category-img\">
                    <img src=\"{{ asset('images/loisirs/' ~ categorie.image) }}\"
                         alt=\"{{ categorie.nom }}\" loading=\"lazy\">
                    <div class=\"loisir-category-img-overlay\"></div>
                </div>
                <div class=\"loisir-category-body\">
                    <h3>{{ categorie.nom }}</h3>
                    <p>{{ categorie.description|slice(0, 100) }}{% if categorie.description|length > 100 %}...{% endif %}</p>
                    <span class=\"loisir-category-link\">Explorer →</span>
                </div>
            </a>
        {% else %}
            <p style=\"color:rgba(255,255,255,0.5); text-align:center; grid-column:1/-1;\">
                Aucune catégorie disponible.
            </p>
        {% endfor %}
    </div>
</section>

{# ── EXCURSIONS ── #}
<section class=\"loisir-excursions\" id=\"excursions\">
    <div class=\"loisir-excursions-grid\" id=\"excursionsGrid\">

        {% if isSearch %}

            {# 🔍 RECHERCHE #}
            {% if excursions is empty %}
                <p style=\"color:rgba(255,255,255,0.7); text-align:center; grid-column:1/-1;\">
                    ❌ Aucun résultat trouvé
                </p>
            {% endif %}

            {% for excursion in excursions %}

                <article class=\"loisir-excursion-card\">

                    <div class=\"loisir-excursion-image\">
                        <img src=\"{{ asset('uploads/' ~ excursion.imageUrl) }}\" alt=\"{{ excursion.titre }}\">
                        <div class=\"loisir-excursion-overlay\"></div>
                        <span class=\"loisir-excursion-badge\">{{ excursion.type ?? 'Outdoor' }}</span>
                        <span class=\"loisir-excursion-places\">{{ excursion.nombrePlacesDisponibles }} places</span>
                    </div>

                    <div class=\"loisir-excursion-content\">
                        <h3>{{ excursion.titre }}</h3>

                        <div class=\"loisir-excursion-meta-info\">
                            <span class=\"loisir-meta-item\">📍 {{ excursion.lieu }}</span>
                            <span class=\"loisir-meta-item\">⏱ {{ excursion.duree }}h</span>
                            <span class=\"loisir-meta-item\">📅 {{ excursion.date|date('d/m/Y') }}</span>
                        </div>

                     {% if excursion.weather and excursion.weather.weather is defined and excursion.weather.weather|length > 0 %}
<div class=\"loisir-weather\">
    <img 
        src=\"https://openweathermap.org/img/wn/{{ excursion.weather.weather[0].icon }}@2x.png\" 
        alt=\"Weather icon\" 
        class=\"weather-icon\"
    >

    <span class=\"weather-temp\">
        {{ excursion.weather.main.temp|round(1) }}°C
    </span>

    <span class=\"weather-desc\">
        {{ excursion.weather.weather[0].description|capitalize }}
    </span>
</div>
{% else %}
<div class=\"loisir-weather-empty\">
    🌤️ Météo indisponible
</div>
{% endif %}

                        <p>
                            {{ excursion.description|slice(0, 90) }}
                            {% if excursion.description|length > 90 %}...{% endif %}
                        </p>

                        <div class=\"loisir-prix-row\">
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Adulte</span>
                                <span class=\"loisir-prix-value\">{{ excursion.prixData.prix_adulte|round }} TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Enfant</span>
                                <span class=\"loisir-prix-value enfant\">{{ excursion.prixData.prix_enfant|round }} TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Bébé</span>
                                <span class=\"loisir-prix-value bebe\">
                                    {% if excursion.prixData.prix_bebe > 0 %}
                                        {{ excursion.prixData.prix_bebe|round }} TND
                                    {% else %}
                                        Gratuit
                                    {% endif %}
                                </span>
                            </div>
                        </div>

                        <div class=\"loisir-rating\">
                            {% set rating = excursion.rating ?? 4.0 %}
                            {% set stars = rating | round %}
                            {% for i in 1..5 %}
                                {% if i <= stars %}
                                    ⭐
                                {% else %}
                                    ☆
                                {% endif %}
                            {% endfor %}
                            {{ rating }}/5
                        </div>

                        <div class=\"loisir-excursion-footer\">
                            <a href=\"{{ path('excursion_detail', {'id': excursion.idExcursion}) }}\"
                               class=\"loisir-excursion-btn btn-reserver\">Voir détails →</a>
                           
                        </div>
                    </div>

                </article>

            {% endfor %}


        {% elseif recommandations is not null and recommandations is not empty %}

            {# ✨ RECOMMANDATIONS IA #}
            {% for item in recommandations %}
                {% set excursion = item.excursion %}

                <article class=\"loisir-excursion-card\">

                    <div class=\"loisir-excursion-image\">
                        <img src=\"{{ asset('uploads/' ~ excursion.imageUrl) }}\" alt=\"{{ excursion.titre }}\">
                        <div class=\"loisir-excursion-overlay\"></div>
                        <span class=\"loisir-excursion-badge\">{{ excursion.type ?? 'Outdoor' }}</span>
                        <span class=\"loisir-excursion-places\">{{ excursion.nombrePlacesDisponibles }} places</span>
                    </div>

                    <div class=\"loisir-excursion-content\">
                        <h3>{{ excursion.titre }}</h3>

                        <div class=\"loisir-excursion-meta-info\">
                            <span class=\"loisir-meta-item\">📍 {{ excursion.lieu }}</span>
                            <span class=\"loisir-meta-item\">⏱ {{ excursion.duree }}h</span>
                            <span class=\"loisir-meta-item\">📅 {{ excursion.date|date('d/m/Y') }}</span>
                        </div>

                        {% if excursion.weather %}
                        <div class=\"loisir-weather\">
                            <img src=\"http://openweathermap.org/img/wn/{{ excursion.weather.weather[0].icon }}@2x.png\" alt=\"Weather icon\" class=\"weather-icon\">
                            <span class=\"weather-temp\">{{ excursion.weather.main.temp|round }}°C</span>
                            <span class=\"weather-desc\">{{ excursion.weather.weather[0].description|capitalize }}</span>
                        </div>
                        {% endif %}

                        <p>
                            {{ excursion.description|slice(0, 90) }}
                            {% if excursion.description|length > 90 %}...{% endif %}
                        </p>

                        <div class=\"loisir-prix-row\">
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Adulte</span>
                                <span class=\"loisir-prix-value\">{{ excursion.prixData.prix_adulte|round }} TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Enfant</span>
                                <span class=\"loisir-prix-value enfant\">{{ excursion.prixData.prix_enfant|round }} TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Bébé</span>
                                <span class=\"loisir-prix-value bebe\">
                                    {% if excursion.prixData.prix_bebe > 0 %}
                                        {{ excursion.prixData.prix_bebe|round }} TND
                                    {% else %}
                                        Gratuit
                                    {% endif %}
                                </span>
                            </div>
                        </div>

                        <div class=\"loisir-rating\">
                            {% set rating = excursion.rating ?? 4.0 %}
                            {% set stars = rating | round %}
                            {% for i in 1..5 %}
                                {% if i <= stars %}
                                    ⭐
                                {% else %}
                                    ☆
                                {% endif %}
                            {% endfor %}
                            {{ rating }}/5
                        </div>

                        {# RAISON IA #}
                        <div style=\"margin-bottom:15px;\">
                            <span style=\"
                                display:inline-block;
                                padding:6px 14px;
                                background:rgba(255,193,7,0.1);
                                border:1px solid rgba(255,193,7,0.3);
                                color:#FFC107;
                                border-radius:20px;
                                font-size:12px;\">
                                ✨ {{ item.raison }}
                            </span>
                        </div>

                        <div class=\"loisir-excursion-footer\">
                            <a href=\"{{ path('excursion_detail', {'id': excursion.idExcursion}) }}\"
                               class=\"loisir-excursion-btn btn-reserver\">Voir détails →</a>
                           
                        </div>
                    </div>

                </article>

            {% endfor %}


        {% else %}

            {# 🌍 DEFAULT — toutes les excursions #}
            {% if excursions is empty %}
                <p style=\"color:rgba(255,255,255,0.7); text-align:center; grid-column:1/-1;\">
                    🗺️ Aucune excursion disponible
                </p>
            {% endif %}

            {% for excursion in excursions %}

                <article class=\"loisir-excursion-card\">

                    <div class=\"loisir-excursion-image\">
                        <img src=\"{{ asset('uploads/' ~ excursion.imageUrl) }}\" alt=\"{{ excursion.titre }}\">
                        <div class=\"loisir-excursion-overlay\"></div>
                        <span class=\"loisir-excursion-badge\">{{ excursion.type ?? 'Outdoor' }}</span>
                        <span class=\"loisir-excursion-places\">{{ excursion.nombrePlacesDisponibles }} places</span>
                    </div>

                    <div class=\"loisir-excursion-content\">
                        <h3>{{ excursion.titre }}</h3>

                        <div class=\"loisir-excursion-meta-info\">
                            <span class=\"loisir-meta-item\">📍 {{ excursion.lieu }}</span>
                            <span class=\"loisir-meta-item\">⏱ {{ excursion.duree }}h</span>
                            <span class=\"loisir-meta-item\">📅 {{ excursion.date|date('d/m/Y') }}</span>
                        </div>

                        {% if excursion.weather %}
                        <div class=\"loisir-weather\">
                            <img src=\"http://openweathermap.org/img/wn/{{ excursion.weather.weather[0].icon }}@2x.png\" alt=\"Weather icon\" class=\"weather-icon\">
                            <span class=\"weather-temp\">{{ excursion.weather.main.temp|round }}°C</span>
                            <span class=\"weather-desc\">{{ excursion.weather.weather[0].description|capitalize }}</span>
                        </div>
                        {% endif %}

                        <p>
                            {{ excursion.description|slice(0, 90) }}
                            {% if excursion.description|length > 90 %}...{% endif %}
                        </p>

                        <div class=\"loisir-prix-row\">
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Adulte</span>
                                <span class=\"loisir-prix-value\">{{ excursion.prixData.prix_adulte|round }} TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Enfant</span>
                                <span class=\"loisir-prix-value enfant\">{{ excursion.prixData.prix_enfant|round }} TND</span>
                            </div>
                            <div class=\"loisir-prix-item\">
                                <span class=\"loisir-prix-label\">Bébé</span>
                                <span class=\"loisir-prix-value bebe\">
                                    {% if excursion.prixData.prix_bebe > 0 %}
                                        {{ excursion.prixData.prix_bebe|round }} TND
                                    {% else %}
                                        Gratuit
                                    {% endif %}
                                </span>
                            </div>
                        </div>

   <div class=\"loisir-rating\">
    {% set rating = excursion.rating|default(0) %}
    {% set stars = rating|round(0, 'floor') %}

    <div class=\"stars\">
        {% for i in 1..5 %}
            {% if i <= stars %}
                <span class=\"star-full\">★</span>
            {% else %}
                <span class=\"star-empty\">★</span>
            {% endif %}
        {% endfor %}
    </div>

    <span class=\"rating-value\">
        {{ rating|number_format(1) }}/5
    </span>
</div>

                        <div class=\"loisir-excursion-footer\">
                            <a href=\"{{ path('excursion_detail', {'id': excursion.idExcursion}) }}\"
                               class=\"loisir-excursion-btn btn-reserver\">Voir détails →</a>
                            
                        </div>
                    </div>

                </article>

            {% endfor %}

        {% endif %}

    </div>
</section>

{# ===== CHATBOT FLOTTANT ===== #}
<div id=\"chatbot-bubble\" onclick=\"toggleChatbot()\" style=\"
    position:fixed; bottom:30px; right:30px; z-index:9999;
    width:60px; height:60px;
    background:linear-gradient(135deg,#7C3AED,#4F46E5);
    border-radius:50%; cursor:pointer;
    display:flex; align-items:center; justify-content:center;
    box-shadow:0 8px 25px rgba(124,58,237,0.5);
    transition:all 0.3s ease; font-size:26px;\">
    🤖
</div>

<div id=\"chatbot-panel\" style=\"
    position:fixed; bottom:105px; right:30px; z-index:9998;
    width:380px; max-height:600px;
    background:rgba(8,20,40,0.97);
    border:1px solid rgba(124,58,237,0.4);
    border-radius:24px; overflow:hidden;
    box-shadow:0 20px 60px rgba(0,0,0,0.5);
    display:none; flex-direction:column;\">

    <div style=\"padding:20px 24px; background:linear-gradient(135deg,#7C3AED,#4F46E5); display:flex; align-items:center; gap:12px;\">
        <span style=\"font-size:28px;\">🤖</span>
        <div>
            <div style=\"color:white; font-weight:700; font-size:15px;\">Assistant Voyage</div>
            <div style=\"color:rgba(255,255,255,0.7); font-size:12px;\">Powered by Gemini AI</div>
        </div>
        <span onclick=\"toggleChatbot()\" style=\"margin-left:auto; cursor:pointer; color:rgba(255,255,255,0.7); font-size:20px;\">✕</span>
    </div>

    <div id=\"chatbot-messages\" style=\"
        flex:1; overflow-y:auto; padding:20px;
        display:flex; flex-direction:column; gap:12px;
        max-height:350px;
        scrollbar-width:thin; scrollbar-color:rgba(124,58,237,0.3) transparent;\">
        <div class=\"bot-msg\" style=\"
            background:rgba(124,58,237,0.15);
            border:1px solid rgba(124,58,237,0.3);
            border-radius:16px 16px 16px 4px;
            padding:14px 16px; font-size:13px; color:rgba(255,255,255,0.9);\">
            👋 Bonjour ! Je suis votre assistant voyage.<br><br>
            Dites-moi :<br>
            • Combien de personnes ?<br>
            • Votre budget total (TND) ?<br>
            • Une destination préférée ? (optionnel)
        </div>
    </div>

    <div style=\"padding:16px; border-top:1px solid rgba(255,255,255,0.06);\">
        <div style=\"display:grid; grid-template-columns:1fr 1fr; gap:8px; margin-bottom:10px;\">
            <input type=\"number\" id=\"cb-nb\" placeholder=\"👥 Nb personnes\" min=\"1\" style=\"padding:10px 12px; border-radius:10px; font-size:13px; background:rgba(255,255,255,0.07); border:1px solid rgba(124,58,237,0.3); color:white; outline:none;\">
            <input type=\"number\" id=\"cb-budget\" placeholder=\"💰 Budget TND\" min=\"0\" style=\"padding:10px 12px; border-radius:10px; font-size:13px; background:rgba(255,255,255,0.07); border:1px solid rgba(124,58,237,0.3); color:white; outline:none;\">
        </div>
        <input type=\"text\" id=\"cb-lieu\" placeholder=\"📍 Destination (optionnel)\" style=\"width:100%; padding:10px 12px; border-radius:10px; font-size:13px; background:rgba(255,255,255,0.07); border:1px solid rgba(124,58,237,0.3); color:white; outline:none; margin-bottom:10px; box-sizing:border-box;\">
        <div style=\"display:flex; gap:8px;\">
            <input type=\"text\" id=\"cb-message\" placeholder=\"💬 Question ou précision...\" style=\"flex:1; padding:10px 14px; border-radius:10px; font-size:13px; background:rgba(255,255,255,0.07); border:1px solid rgba(124,58,237,0.3); color:white; outline:none;\">
            <button onclick=\"sendChatbot()\" style=\"padding:10px 18px; background:linear-gradient(135deg,#7C3AED,#4F46E5); color:white; border:none; border-radius:10px; font-weight:700; cursor:pointer; font-size:16px;\">➤</button>
        </div>
    </div>
</div>
</section>
<style>
.loisir-rating {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 14px;
    font-weight: 500;
    color: #0B2D4A;
}

/* étoiles */
.loisir-rating .stars {
    display: flex;
    gap: 2px;
}

/* étoile pleine */
.loisir-rating .star-full {
    color: #FFC107; /* doré */
    font-size: 16px;
}

/* étoile vide */
.loisir-rating .star-empty {
    color: #ddd;
    font-size: 16px;
}

/* texte de note */
.loisir-rating .rating-value {
    font-size: 13px;
    color: #0B2D4A;
}
.loisir-rating .star-full:hover,
.loisir-rating .star-empty:hover {
    transform: scale(1.2);
    transition: 0.2s;
}

/* Weather display */
.loisir-weather {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 10px 0;
    padding: 8px 12px;
    background: rgba(255,255,255,0.1);
    border-radius: 8px;
    font-size: 14px;
    color: #fff;
}

.weather-icon {
    width: 30px;
    height: 30px;
}

.weather-temp {
    font-weight: bold;
    color: #FFC107;
}

.weather-desc {
    font-size: 12px;
    opacity: 0.9;
}

.loisir-excursions-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    width: 100%;
}

.loisir-prix-row {
    display: flex;
    gap: 16px;
    align-items: flex-start;
    flex-wrap: wrap;
    margin: 12px 0;
}

.loisir-prix-item {
    display: flex;
    flex-direction: column;
    gap: 4px;
    min-width: 70px;
}
    .bot-msg { animation: fadeInMsg 0.3s ease; }
    .user-msg { animation: fadeInMsg 0.3s ease; }
    @keyframes fadeInMsg {
        from { opacity:0; transform:translateY(10px); }
        to   { opacity:1; transform:translateY(0); }
    }
    .exc-card-cb {
        background: rgba(255,193,7,0.08);
        border: 1px solid rgba(255,193,7,0.25);
        border-radius: 12px; padding: 12px;
        margin-top: 6px; transition: all 0.2s;
    }
    .exc-card-cb:hover {
        background: rgba(255,193,7,0.15);
        border-color: rgba(255,193,7,0.5);
    }
</style>


<script>
/* ============================================================
   1. CHATBOT
   ============================================================ */

function toggleChatbot() {
    const panel  = document.getElementById('chatbot-panel');
    const bubble = document.getElementById('chatbot-bubble');
    const isOpen = panel.style.display === 'flex';
    panel.style.display      = isOpen ? 'none' : 'flex';
    bubble.style.transform   = isOpen ? 'scale(1)' : 'scale(0.9)';
}

function appendMessage(html, type) {
    const container = document.getElementById('chatbot-messages');
    const div       = document.createElement('div');
    div.className   = type === 'bot' ? 'bot-msg' : 'user-msg';
    div.style.cssText = type === 'bot'
        ? 'background:rgba(124,58,237,0.15);border:1px solid rgba(124,58,237,0.3);border-radius:16px 16px 16px 4px;padding:14px 16px;font-size:13px;color:rgba(255,255,255,0.9);'
        : 'background:rgba(255,193,7,0.1);border:1px solid rgba(255,193,7,0.25);border-radius:16px 16px 4px 16px;padding:14px 16px;font-size:13px;color:rgba(255,255,255,0.9);align-self:flex-end;max-width:80%;';
    div.innerHTML = html;
    container.appendChild(div);
    container.scrollTop = container.scrollHeight;
}

function appendLoading() {
    const container   = document.getElementById('chatbot-messages');
    const div         = document.createElement('div');
    div.id            = 'cb-loading';
    div.style.cssText = 'background:rgba(124,58,237,0.15);border:1px solid rgba(124,58,237,0.3);border-radius:16px 16px 16px 4px;padding:14px 16px;font-size:13px;color:rgba(255,255,255,0.6);';
    div.innerHTML     = '⏳ Analyse en cours...';
    container.appendChild(div);
    container.scrollTop = container.scrollHeight;
}

async function sendChatbot() {
    const nb      = document.getElementById('cb-nb').value;
    const budget  = document.getElementById('cb-budget').value;
    const lieu    = document.getElementById('cb-lieu').value;
    const message = document.getElementById('cb-message').value;

    if (!nb || !budget) {
        appendMessage('⚠️ Veuillez renseigner le nombre de personnes et votre budget.', 'bot');
        return;
    }

    // Afficher le message utilisateur
    appendMessage(
        `👥 \${nb} personne(s) | 💰 \${budget} TND\${lieu ? ' | 📍 ' + lieu : ''}\${message ? '<br>💬 ' + message : ''}`,
        'user'
    );

    appendLoading();

    try {
        const res = await fetch('/chatbot/recommander', {
            method:  'POST',
            headers: { 'Content-Type': 'application/json' },
            body:    JSON.stringify({
                nb_personnes: parseInt(nb),
                budget:       parseFloat(budget),
                lieu:         lieu,
                message:      message
            })
        });

        const data = await res.json();

        document.getElementById('cb-loading')?.remove();

        // Réponse texte
        appendMessage(data.reply.replace(/\\n/g, '<br>'), 'bot');

        // Cartes excursions recommandées
        if (data.excursions && data.excursions.length > 0) {
            let cardsHtml = '<div style=\"margin-top:8px; display:flex; flex-direction:column; gap:8px;\">';
            data.excursions.forEach(exc => {
                cardsHtml += `
                    <a href=\"/excursion/\${exc.id}\" class=\"exc-card-cb\" style=\"text-decoration:none; display:block;\">
                        <div style=\"display:flex; gap:10px; align-items:center;\">
                            \${exc.image ? `<img src=\"/uploads/\${exc.image}\" style=\"width:50px;height:50px;object-fit:cover;border-radius:8px;\" onerror=\"this.style.display='none'\">` : ''}
                            <div style=\"flex:1;\">
                                <div style=\"color:#FFC107; font-weight:700; font-size:13px;\">\${exc.titre}</div>
                                <div style=\"color:rgba(255,255,255,0.6); font-size:11px;\">📍 \${exc.lieu} | ⏱ \${exc.duree}h</div>
                                <div style=\"color:#FFC107; font-size:12px; margin-top:3px;\">
                                    💰 Total: \${exc.total.toFixed(0)} TND
                                </div>
                            </div>
                            <span style=\"color:#FFC107; font-size:18px;\">→</span>
                        </div>
                    </a>`;
            });
            cardsHtml += '</div>';
            appendMessage(cardsHtml, 'bot');
        }

        document.getElementById('cb-message').value = '';

    } catch (e) {
        document.getElementById('cb-loading')?.remove();
        appendMessage('❌ Erreur de connexion. Réessayez.', 'bot');
    }
}

// Envoi avec la touche Entrée
document.getElementById('cb-message')?.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') sendChatbot();
});


/* ============================================================
   2. CALENDRIER  —  variables partagées
   ============================================================ */

const monthsFr = [
    'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
    'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
];

let currentDate  = new Date();
let selectedDate = null;

function renderCalendar() {
    const year  = currentDate.getFullYear();
    const month = currentDate.getMonth();

    const monthLabel = document.getElementById('monthLabel');
    const daysGrid   = document.getElementById('daysGrid');
    const calText    = document.getElementById('calText');
    const inputDate  = document.getElementById('inputDate');
    const selectedVal = document.getElementById('selectedVal');
    const calPopup   = document.getElementById('calPopup');

    if (monthLabel) {
        monthLabel.textContent = monthsFr[month] + ' ' + year;
    }

    const firstDay  = new Date(year, month, 1);
    const lastDay   = new Date(year, month + 1, 0);
    const startDay  = (firstDay.getDay() + 6) % 7;
    const totalDays = lastDay.getDate();

    const today = new Date();
    today.setHours(0, 0, 0, 0);

    let html = '';

    // Cases vides en début de grille
    for (let i = 0; i < startDay; i++) {
        html += '<div class=\"cal-day other-month\"></div>';
    }

    for (let day = 1; day <= totalDays; day++) {
        let classes             = 'cal-day';
        const currentDayDate   = new Date(year, month, day);

        if (currentDayDate < today) classes += ' disabled';

        if (
            day   === today.getDate()  &&
            month === today.getMonth() &&
            year  === today.getFullYear()
        ) {
            classes += ' today';
        }

        if (
            selectedDate &&
            day   === selectedDate.getDate()  &&
            month === selectedDate.getMonth() &&
            year  === selectedDate.getFullYear()
        ) {
            classes += ' selected';
        }

        html += `<div class=\"\${classes}\" data-day=\"\${day}\">\${day}</div>`;
    }

    if (daysGrid) {
        daysGrid.innerHTML = html;

        daysGrid
            .querySelectorAll('.cal-day:not(.other-month):not(.disabled)')
            .forEach(function (dayEl) {
                dayEl.addEventListener('click', function () {
                    if (this.classList.contains('disabled')) return;

                    const day    = parseInt(this.getAttribute('data-day'));
                    selectedDate = new Date(year, month, day);

                    const dateStr = year + '-' +
                        String(month + 1).padStart(2, '0') + '-' +
                        String(day).padStart(2, '0');

                    const formatted =
                        String(day).padStart(2, '0') + ' ' +
                        monthsFr[month].substring(0, 3) + ' ' +
                        year;

                    if (inputDate)    inputDate.value        = dateStr;
                    if (calText)    { calText.textContent    = formatted; calText.classList.add('has-value'); }
                    if (selectedVal)  selectedVal.textContent = formatted;
                    if (calPopup)     calPopup.style.display  = 'none';

                    renderCalendar();
                });
            });
    }
}


/* ============================================================
   3. DOM READY
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {

const btn = document.getElementById('btnReco');
if (btn) {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        fetch('/recommandations/ajax')
            .then(res => res.text())
            .then(html => {
                document.getElementById('excursionsGrid').innerHTML = html;
                setTimeout(() => {
                    document.getElementById('excursions').scrollIntoView({ behavior: 'smooth' });
                }, 100);
            });
    });
}

    /* --- Scroll automatique via localStorage --------------- */
    if (localStorage.getItem('scrollToExcursions') === 'true') {
        const section = document.getElementById('excursions');
        if (section) {
            setTimeout(() => section.scrollIntoView({ behavior: 'smooth' }), 200);
        }
        localStorage.removeItem('scrollToExcursions');
    }

    /* --- Formulaire de recherche --------------------------- */
    const form = document.getElementById('loisirSearchForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const params = new URLSearchParams(new FormData(this));

            fetch('/loisirs/search?' + params.toString())
                .then(res => res.text())
                .then(html => {
                    const grid = document.getElementById('excursionsGrid');

                    // Vérifier si des résultats ont été trouvés
                    // On crée un élément temporaire pour analyser le HTML retourné
                    const temp = document.createElement('div');
                    temp.innerHTML = html;
                    const hasResults = temp.querySelector('[data-excursion], .excursion-card, .card, .loisir-item') !== null
                                    || temp.children.length > 0 && temp.textContent.trim() !== '';

                    if (hasResults) {
                        // ✅ Des résultats existent → on les affiche
                        grid.innerHTML = html;
                        document.getElementById('excursions').scrollIntoView({ behavior: 'smooth' });
                    } else {
                        // ❌ Aucun résultat → on charge les recommandations IA
                        fetch('/recommandations/ajax')
                            .then(res => res.text())
                            .then(recoHtml => {
                                grid.innerHTML = recoHtml;
                                document.getElementById('excursions').scrollIntoView({ behavior: 'smooth' });
                            });
                    }
                })
                .catch(() => {
                    // En cas d'erreur réseau → fallback recommandations IA
                    fetch('/recommandations/ajax')
                        .then(res => res.text())
                        .then(recoHtml => {
                            document.getElementById('excursionsGrid').innerHTML = recoHtml;
                            document.getElementById('excursions').scrollIntoView({ behavior: 'smooth' });
                        });
                });
        });
    }

    /* --- Dropdown Catégorie --------------------------------- */
    const categorieSelected = document.getElementById('categorieSelected');
    const categorieOptions  = document.getElementById('categorieOptions');
    const categorieValue    = document.getElementById('categorieValue');
    const calPopup          = document.getElementById('calPopup');

    if (categorieSelected) {
        categorieSelected.addEventListener('click', function (e) {
            e.stopPropagation();
            if (calPopup) calPopup.style.display = 'none';
            categorieOptions.classList.toggle('show');
        });
    }

    document.querySelectorAll('#categorieOptions div').forEach(function (option) {
        option.addEventListener('click', function () {
            categorieSelected.textContent = this.textContent;
            categorieValue.value          = this.getAttribute('data-value');
            categorieOptions.classList.remove('show');
            document.querySelectorAll('#categorieOptions div').forEach(d => d.classList.remove('same-as-selected'));
            this.classList.add('same-as-selected');
        });
    });

    /* --- Calendrier ---------------------------------------- */
    const calTrigger  = document.getElementById('calTrigger');
    const prevBtn     = document.getElementById('prevBtn');
    const nextBtn     = document.getElementById('nextBtn');
    const clearBtn    = document.getElementById('clearBtn');
    const calText     = document.getElementById('calText');
    const inputDate   = document.getElementById('inputDate');
    const selectedVal = document.getElementById('selectedVal');

    if (calTrigger) {
        calTrigger.addEventListener('click', function (e) {
            e.stopPropagation();
            if (categorieOptions) categorieOptions.classList.remove('show');
            if (calPopup) calPopup.style.display = calPopup.style.display === 'block' ? 'none' : 'block';
            renderCalendar();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
        });
    }

    if (clearBtn) {
        clearBtn.addEventListener('click', function () {
            selectedDate        = null;
            inputDate.value     = '';
            calText.textContent = 'Choisir une date';
            calText.classList.remove('has-value');
            selectedVal.textContent    = '—';
            if (calPopup) calPopup.style.display = 'none';
            renderCalendar();
        });
    }

    /* --- Fermeture au clic extérieur ----------------------- */
    document.addEventListener('click', function () {
        if (categorieOptions) categorieOptions.classList.remove('show');
        if (calPopup)         calPopup.style.display = 'none';
    });

    if (calPopup) {
        calPopup.addEventListener('click', e => e.stopPropagation());
    }

    if (categorieOptions) {
        categorieOptions.addEventListener('click', e => e.stopPropagation());
    }

    /* --- Rendu initial du calendrier ----------------------- */
    renderCalendar();
});

</script>
{% endblock %}", "loisirs/loisirs.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\loisirs\\loisirs.html.twig");
    }
}
