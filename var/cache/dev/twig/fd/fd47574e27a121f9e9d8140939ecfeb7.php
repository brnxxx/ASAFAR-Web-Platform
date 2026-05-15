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

/* transports.html.twig */
class __TwigTemplate_46786df90e7060de0616604e87e011ce extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transports.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transports.html.twig"));

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

        yield "Transports - ASAFAR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "<link href=\"https://unpkg.com/maplibre-gl@3.6.2/dist/maplibre-gl.css\" rel=\"stylesheet\" />
<script src=\"https://unpkg.com/maplibre-gl@3.6.2/dist/maplibre-gl.js\"></script>
<style>
    :root {
        --trp-navy-900: #051621;
        --trp-navy-800: #08263E;
        --trp-navy-700: #0B2D4A;
        --trp-navy-600: #1E6FA8;
        --trp-sky: #2FA8FF;
        --trp-sky-soft: #A7E3FF;
        --trp-amber: #FFC107;
        --trp-amber-strong: #FF9800;
        --trp-text-main: #F4F8FC;
        --trp-text-soft: #BED1E0;
    }

    body {
        background: var(--trp-navy-700) !important;
    }

    .trp-hero {
        position: relative;
        min-height: 92vh;
        display: flex;
        align-items: center;
        padding: 118px 90px 70px;
        overflow: hidden;
    }

    .trp-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        background:
            radial-gradient(circle at 18% 24%, rgba(47, 168, 255, 0.2) 0%, rgba(47, 168, 255, 0) 42%),
            radial-gradient(circle at 80% 14%, rgba(255, 193, 7, 0.18) 0%, rgba(255, 193, 7, 0) 38%),
            linear-gradient(135deg, var(--trp-navy-700) 0%, var(--trp-navy-800) 50%, var(--trp-navy-900) 100%);
    }

    .trp-hero-bg::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.035) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
        background-size: 45px 45px;
        opacity: 0.45;
    }

    .trp-hero-content {
        position: relative;
        z-index: 2;
        max-width: 980px;
    }

    .trp-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 18px;
        border-radius: 999px;
        border: 1px solid rgba(255, 193, 7, 0.4);
        background: rgba(255, 193, 7, 0.14);
        color: var(--trp-amber);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .trp-title {
        margin: 18px 0 14px;
        color: var(--trp-text-main);
        font-size: clamp(36px, 6vw, 68px);
        line-height: 1.03;
        font-family: 'Playfair Display', Georgia, serif;
    }

    .trp-title span {
        color: var(--trp-amber);
        text-shadow: 0 8px 24px rgba(255, 193, 7, 0.3);
    }

    .trp-subtitle {
        color: rgba(244, 248, 252, 0.9);
        font-size: 18px;
        line-height: 1.75;
        max-width: 770px;
        margin: 0 0 24px;
    }

    .trp-search-wrap {
        margin-top: 14px;
        border-radius: 22px;
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(255, 255, 255, 0.66);
        box-shadow: 0 18px 44px rgba(2, 17, 32, 0.35);
        overflow: hidden;
    }

    .trp-search {
        display: grid;
        grid-template-columns: repeat(6, minmax(120px, 1fr));
        gap: 0;
    }

    .trp-field {
        padding: 14px 16px;
        border-right: 1px solid #e7edf4;
    }

    .trp-field:last-child {
        border-right: none;
    }

    .trp-field label {
        display: block;
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #7a8998;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .trp-field input,
    .trp-field select {
        width: 100%;
        border: none;
        outline: none;
        background: transparent;
        color: #0f2b44;
        font-size: 14px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
    }

    .trp-actions {
        display: flex;
        align-items: stretch;
        gap: 0;
    }

    .trp-btn {
        border: none;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 14px;
        padding: 0 18px;
        min-height: 76px;
    }

    .trp-btn-search {
        background: linear-gradient(135deg, var(--trp-amber) 0%, var(--trp-amber-strong) 100%);
        color: var(--trp-navy-700);
    }

    .trp-btn-reset {
        background: var(--trp-navy-700);
        color: var(--trp-text-main);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .trp-stats {
        display: grid;
        grid-template-columns: repeat(4, minmax(180px, 1fr));
        gap: 16px;
        margin-top: 22px;
    }

    .trp-stat {
        background: rgba(11, 45, 74, 0.68);
        border: 1px solid rgba(47, 168, 255, 0.4);
        border-radius: 16px;
        padding: 16px 18px;
        color: #e9f4fc;
    }

    .trp-stat .value {
        display: block;
        font-size: 30px;
        line-height: 1;
        font-weight: 800;
        color: var(--trp-amber);
        margin-bottom: 4px;
    }

    .trp-stat .label {
        font-size: 12px;
        letter-spacing: 0.35px;
        text-transform: uppercase;
        color: var(--trp-sky-soft);
    }

    .trp-map-section {
        padding: 50px 0 0;
        max-width: 100%;
        margin: 0;
    }

    .trp-section-head {
        margin-bottom: 20px;
        padding: 0 90px;
        max-width: 1800px;
        margin-left: auto;
        margin-right: auto;
    }

    .trp-section-tag {
        display: inline-block;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.7px;
        color: var(--trp-amber);
        margin-bottom: 8px;
    }

    .trp-section-title {
        margin: 0;
        font-family: 'Playfair Display', Georgia, serif;
        color: var(--trp-text-main);
        font-size: clamp(30px, 4vw, 44px);
    }

    .trp-section-subtitle {
        margin: 10px 0 0;
        color: var(--trp-text-soft);
        line-height: 1.7;
        max-width: 920px;
    }

    .trp-map-panel {
        border-radius: 0;
        border: none;
        border-top: 1px solid rgba(47, 168, 255, 0.15);
        border-bottom: 1px solid rgba(47, 168, 255, 0.15);
        background: transparent;
        overflow: hidden;
        box-shadow: none;
        position: relative;
        min-height: 650px;
        height: 85vh;
        max-height: none;
        width: 100%;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
    }

    .trp-map-toolbar {
        padding: 14px;
        background: rgba(6, 30, 48, 0.94);
        border-bottom: 1px solid rgba(47, 168, 255, 0.28);
        display: grid;
        grid-template-columns: 1.2fr 1.2fr 1fr 1fr auto;
        gap: 10px;
        align-items: end;
    }

    .trp-tool {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .trp-tool label {
        font-size: 11px;
        color: var(--trp-sky-soft);
        text-transform: uppercase;
        letter-spacing: 0.45px;
        font-weight: 700;
    }

    .trp-tool input,
    .trp-tool select {
        border: 1px solid rgba(47, 168, 255, 0.35);
        border-radius: 10px;
        background: rgba(5, 24, 40, 0.86);
        color: var(--trp-text-main);
        font-size: 13px;
        padding: 10px 12px;
        outline: none;
        font-family: 'Poppins', sans-serif;
    }

    .trp-counts {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: flex-end;
    }

    .trp-chip {
        background: rgba(255, 193, 7, 0.14);
        border: 1px solid rgba(255, 193, 7, 0.34);
        border-radius: 999px;
        padding: 8px 12px;
        color: #ffe3a1;
        font-size: 12px;
        white-space: nowrap;
    }

    #transportMap {
        position: relative;
        width: 100%;
        flex: 1;
        min-width: 0;
        min-height: 0;
        background: radial-gradient(circle at 35% 32%, rgba(47, 168, 255, 0.2), rgba(8, 38, 62, 0.96));
        border: none;
        outline: none;
        box-sizing: border-box;
        z-index: 1;
        margin: 0;
        padding: 0;
        display: block;
    }

    #transportMap canvas {
        display: block;
        width: 100%;
        height: 100%;
    }

    .trp-map-popup {
        min-width: 220px;
        max-width: 320px;
        padding: 10px 12px;
        border-radius: 12px;
        background: rgba(11, 45, 74, 0.96);
        color: var(--trp-text-main);
        border: 1px solid rgba(47, 168, 255, 0.45);
        box-shadow: 0 10px 28px rgba(1, 14, 25, 0.35);
        line-height: 1.55;
        font-size: 13px;
        transform: translate(-50%, -100%);
        pointer-events: auto;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 2;
    }

    .trp-map-popup.hidden {
        display: none;
    }

    .trp-map-popup strong {
        color: #ffffff;
    }

    .trp-map-popup a {
        color: var(--trp-amber);
        text-decoration: none;
        font-weight: 700;
    }

    .trp-map-foot {
        padding: 12px 14px;
        border-top: 1px solid rgba(47, 168, 255, 0.25);
        color: var(--trp-text-soft);
        font-size: 13px;
    }

    /* =========================================
       NOUVEAU DESIGN DES CARTES (ÉLÉGANT & ANIMÉ)
       ========================================= */
    .trp-list-section {
        padding: 40px 90px 90px;
    }

    .trp-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 28px; /* Espacement plus aéré */
    }

    .trp-card {
        border-radius: 20px;
        border: 1px solid rgba(47, 168, 255, 0.12);
        background: linear-gradient(160deg, rgba(11, 45, 74, 0.85) 0%, rgba(5, 22, 33, 0.95) 100%);
        backdrop-filter: blur(12px);
        padding: 26px;
        color: var(--trp-text-main);
        display: flex;
        flex-direction: column;
        gap: 16px;
        min-height: 280px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    /* Barre lumineuse animée en haut de la carte au survol */
    .trp-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--trp-sky), var(--trp-amber));
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .trp-card:hover {
        transform: translateY(-8px);
        border-color: rgba(47, 168, 255, 0.4);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 20px rgba(47, 168, 255, 0.15);
    }

    .trp-card:hover::before {
        opacity: 1;
    }

    .trp-card-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 4px;
    }

    .trp-type {
        display: inline-flex;
        align-items: center;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        color: var(--trp-text-main);
        background: rgba(47, 168, 255, 0.15);
        border: 1px solid rgba(47, 168, 255, 0.3);
        box-shadow: inset 0 0 10px rgba(47, 168, 255, 0.1);
    }

    .trp-price {
        font-size: 24px;
        font-weight: 800;
        color: var(--trp-amber);
        text-shadow: 0 2px 10px rgba(255, 193, 7, 0.2);
        letter-spacing: -0.5px;
    }

    .trp-card h3 {
        margin: 0;
        font-size: 22px;
        font-family: 'Playfair Display', Georgia, serif;
        color: #ffffff;
        line-height: 1.3;
    }

    .trp-route {
        border-left: 3px solid var(--trp-sky);
        padding-left: 14px;
        color: var(--trp-text-main);
        font-weight: 600;
        line-height: 1.6;
        font-size: 13px;
        background: rgba(47, 168, 255, 0.04);
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 0 8px 8px 0;
    }

    .trp-desc {
        color: var(--trp-text-soft);
        line-height: 1.6;
        font-size: 14px;
        margin: 0;
        flex-grow: 1; /* Pousse les éléments suivants vers le bas */
    }

    .trp-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 10px;
    }

    .trp-meta span {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        padding: 6px 12px;
        color: var(--trp-text-soft);
        font-size: 11px;
        font-weight: 500;
        transition: all 0.3s;
    }

    .trp-card:hover .trp-meta span {
        border-color: rgba(255, 255, 255, 0.25);
        color: #fff;
        background: rgba(255, 255, 255, 0.06);
    }

    .trp-card-actions {
        margin-top: 20px;
        display: flex;
    }

    .trp-detail-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        border-radius: 12px;
        width: 100%;
        min-height: 48px;
        font-size: 13px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--trp-navy-900);
        background: linear-gradient(135deg, var(--trp-amber) 0%, #FFD54F 100%);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    /* Effet d'éclat sur le bouton au survol */
    .trp-detail-link::after {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(135deg, #FFD54F 0%, var(--trp-amber) 100%);
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .trp-detail-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(255, 193, 7, 0.3);
    }
    
    .trp-detail-link:hover::after {
        opacity: 1;
    }

    .trp-empty {
        text-align: center;
        color: var(--trp-text-soft);
        border: 1px dashed rgba(47, 168, 255, 0.45);
        border-radius: 20px;
        padding: 40px 20px;
        background: rgba(8, 38, 62, 0.68);
        grid-column: 1 / -1;
    }

    @media (max-width: 1200px) {
        .trp-search {
            grid-template-columns: repeat(3, minmax(150px, 1fr));
        }

        .trp-actions {
            grid-column: span 3;
        }

        .trp-map-toolbar {
            grid-template-columns: 1fr 1fr;
        }

        .trp-counts {
            grid-column: span 2;
            justify-content: flex-start;
        }
    }

    @media (max-width: 820px) {
        .trp-hero,
        .trp-list-section {
            padding-left: 20px;
            padding-right: 20px;
        }
        .trp-section-head,
        .trp-map-foot {
            padding-left: 20px;
            padding-right: 20px;
        }

        .trp-search {
            grid-template-columns: 1fr;
        }

        .trp-field,
        .trp-actions {
            border-right: none;
            border-bottom: 1px solid #e7edf4;
        }

        .trp-actions {
            border-bottom: none;
        }

        .trp-btn {
            width: 100%;
        }

        .trp-stats {
            grid-template-columns: repeat(2, minmax(140px, 1fr));
        }

        .trp-map-toolbar {
            grid-template-columns: 1fr;
        }

        .trp-counts {
            grid-column: auto;
        }

        #transportMap {
            height: 500px;
        }
        
        .trp-grid {
            grid-template-columns: 1fr;
        }
    }

    /* --- Styles spécifiques pour MapLibre --- */
    .trp-airport-marker {
        width: 14px;
        height: 14px;
        background-color: var(--trp-amber);
        border-radius: 50%;
        border: 2px solid #FFFFFF;
        box-shadow: 0 0 15px 4px rgba(255, 193, 7, 0.4);
        cursor: pointer;
        transition: transform 0.2s ease;
    }
    .trp-airport-marker:hover {
        transform: scale(1.3);
    }
    .trp-plane-dot {
        width: 6px;
        height: 6px;
        background-color: #FFFFFF;
        border-radius: 50%;
        box-shadow: 0 0 10px 2px var(--trp-sky);
        pointer-events: none;
    }
    /* Surcharge du style de base des popups MapLibre pour coller au design sombre */
    .maplibregl-popup-content {
        background: rgba(11, 45, 74, 0.96) !important;
        border: 1px solid rgba(47, 168, 255, 0.45) !important;
        border-radius: 12px !important;
        color: var(--trp-text-main) !important;
        box-shadow: 0 10px 28px rgba(1, 14, 25, 0.5) !important;
        padding: 12px 14px !important;
    }
    .maplibregl-popup-tip {
        border-top-color: rgba(47, 168, 255, 0.45) !important;
        border-bottom-color: rgba(47, 168, 255, 0.45) !important;
    }
    .maplibregl-popup-close-button {
        color: var(--trp-text-soft);
        padding: 4px 8px;
    }


    /* --- Contrôles Météo sur la carte --- */
    .trp-map-weather-controls {
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 10;
        background: rgba(5, 22, 33, 0.85);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(47, 168, 255, 0.3);
        border-radius: 14px;
        padding: 10px;
        display: flex;
        flex-direction: column;
        gap: 6px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    }
    .weather-title {
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--trp-sky-soft);
        font-weight: 800;
        margin-bottom: 6px;
        padding-left: 4px;
    }
    .trp-weather-btn {
        background: transparent;
        color: var(--trp-text-soft);
        border: 1px solid transparent;
        padding: 8px 14px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 13px;
        font-weight: 600;
        text-align: left;
        transition: all 0.3s ease;
        font-family: 'Poppins', sans-serif;
    }
    .trp-weather-btn:hover {
        background: rgba(47, 168, 255, 0.1);
        color: var(--trp-text-main);
    }
    .trp-weather-btn.active {
        background: rgba(47, 168, 255, 0.2);
        border-color: var(--trp-sky);
        color: #ffffff;
        box-shadow: inset 0 0 10px rgba(47, 168, 255, 0.1);
    }


</style>

<section class=\"trp-hero\">
    <div class=\"trp-hero-bg\"></div>

    <div class=\"trp-hero-content\">
        <span class=\"trp-badge\">Reseau aerien et mobilite premium</span>
        <h1 class=\"trp-title\">Section Transport <span>Itineraires reels</span></h1>
        <p class=\"trp-subtitle\">
            Explorez votre catalogue transport avec un filtrage dynamique, une segmentation par
            categorie d'aeroport et une carte en direct qui trace chaque liaison aerienne disponible.
        </p>

        <div class=\"trp-search-wrap\">
            <form method=\"GET\" action=\"";
        // line 745
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transports");
        yield "\" class=\"trp-search\">
                <div class=\"trp-field\">
                    <label>Type de transport</label>
                    <select name=\"type\">
                        <option value=\"\">Tous</option>
                        ";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transportTypes"]) || array_key_exists("transportTypes", $context) ? $context["transportTypes"] : (function () { throw new RuntimeError('Variable "transportTypes" does not exist.', 750, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 751
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 751, $this->source); })()), "type", [], "any", false, false, false, 751) == $context["type"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 753
        yield "                    </select>
                </div>

                <div class=\"trp-field\">
                    <label>Ville de depart</label>
                    <input type=\"text\" name=\"departure_city\" value=\"";
        // line 758
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 758, $this->source); })()), "departure_city", [], "any", false, false, false, 758), "html", null, true);
        yield "\" placeholder=\"ex: Paris\">
                </div>

                <div class=\"trp-field\">
                    <label>Ville d'arrivee</label>
                    <input type=\"text\" name=\"destination_city\" value=\"";
        // line 763
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 763, $this->source); })()), "destination_city", [], "any", false, false, false, 763), "html", null, true);
        yield "\" placeholder=\"ex: Tunis\">
                </div>

                <div class=\"trp-field\">
                    <label>Prix max (TND)</label>
                    <input type=\"number\" step=\"1\" min=\"0\" name=\"max_prix\" value=\"";
        // line 768
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 768, $this->source); })()), "max_prix", [], "any", false, false, false, 768), "html", null, true);
        yield "\" placeholder=\"Budget maximum\">
                </div>

                <div class=\"trp-field\">
                    <label>Categorie d'aeroport</label>
                    <select name=\"airport_type\">
                        <option value=\"\">Toutes categories</option>
                        ";
        // line 775
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["airportTypes"]) || array_key_exists("airportTypes", $context) ? $context["airportTypes"] : (function () { throw new RuntimeError('Variable "airportTypes" does not exist.', 775, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 776
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 776, $this->source); })()), "airport_type", [], "any", false, false, false, 776) == $context["category"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 778
        yield "                    </select>
                 </div>

                <div class=\"trp-actions\">
                    <button type=\"submit\" class=\"trp-btn trp-btn-search\">Rechercher</button>
                    <a href=\"";
        // line 783
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transports");
        yield "\" class=\"trp-btn trp-btn-reset\">Reinitialiser</a>
                </div>
            </form>
        </div>

        <div class=\"trp-stats\">
            <div class=\"trp-stat\">
                <span class=\"value\">";
        // line 790
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 790, $this->source); })())), "html", null, true);
        yield "</span>
                <span class=\"label\">Transports affiches</span>
            </div>
            <div class=\"trp-stat\">
                <span class=\"value\">";
        // line 794
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["mapFlights"]) || array_key_exists("mapFlights", $context) ? $context["mapFlights"] : (function () { throw new RuntimeError('Variable "mapFlights" does not exist.', 794, $this->source); })())), "html", null, true);
        yield "</span>
                <span class=\"label\">Liaisons aeriennes</span>
            </div>
            <div class=\"trp-stat\">
                <span class=\"value\">";
        // line 798
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["mapAirports"]) || array_key_exists("mapAirports", $context) ? $context["mapAirports"] : (function () { throw new RuntimeError('Variable "mapAirports" does not exist.', 798, $this->source); })())), "html", null, true);
        yield "</span>
                <span class=\"label\">Aeroports sur la carte</span>
             </div>
            <div class=\"trp-stat\">
                <span class=\"value\">";
        // line 802
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["airportTypes"]) || array_key_exists("airportTypes", $context) ? $context["airportTypes"] : (function () { throw new RuntimeError('Variable "airportTypes" does not exist.', 802, $this->source); })())), "html", null, true);
        yield "</span>
                <span class=\"label\">Categories d'aeroport</span>
            </div>
        </div>
    </div>
</section>

<section class=\"trp-map-section\" id=\"transports-map\">
    <div class=\"trp-section-head\">
        <span class=\"trp-section-tag\">Carte operationnelle</span>
        <h2 class=\"trp-section-title\">Carte des vols en direct</h2>
        <p class=\"trp-section-subtitle\">
            Visualisez chaque liaison aerienne disponible avec animation en temps reel.
        </p>
    </div>
    <div class=\"trp-map-panel\">
        <div id=\"transportMap\"></div>
        
        <div class=\"trp-map-weather-controls\">
            <div class=\"weather-title\">Calques Météo (Direct)</div>
            <button class=\"trp-weather-btn active\" data-layer=\"none\">🌍 Carte Standard</button>
            <button class=\"trp-weather-btn\" data-layer=\"layer-temp\">🌡️ Températures</button>
            <button class=\"trp-weather-btn\" data-layer=\"layer-rain\">🌧️ Précipitations</button>
            <button class=\"trp-weather-btn\" data-layer=\"layer-clouds\">☁️ Nuages</button>
        </div>

        <div class=\"trp-map-foot\">
            Astuce: Les lignes animees representent les vols AVION actifs. Cliquez sur une ligne ou un aeroport pour plus de details.
        </div>
    </div>
</section>

<section class=\"trp-list-section\" id=\"transports-list\">
    <div class=\"trp-section-head\">
        <span class=\"trp-section-tag\">Catalogue</span>
        <h2 class=\"trp-section-title\">Offres de transport</h2>
    </div>

    <div class=\"trp-grid\">
        ";
        // line 841
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 841, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 842
            yield "            <article class=\"trp-card\">
                <div class=\"trp-card-top\">
                     <span class=\"trp-type\">";
            // line 844
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 844), "html", null, true);
            yield "</span>
                    <span class=\"trp-price\">";
            // line 845
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "prix", [], "any", false, false, false, 845), 2, ".", " "), "html", null, true);
            yield " TND</span>
                </div>

                <h3>";
            // line 848
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "nom", [], "any", false, false, false, 848), "html", null, true);
            yield "</h3>

                <div class=\"trp-route\">
                    ";
            // line 851
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "departure", [], "any", false, false, false, 851) && CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "destination", [], "any", false, false, false, 851))) {
                // line 852
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "departure", [], "any", false, false, false, 852), "ville", [], "any", false, false, false, 852), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "departure", [], "any", false, false, false, 852), "codeIata", [], "any", false, false, false, 852), "html", null, true);
                yield ") -> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "destination", [], "any", false, false, false, 852), "ville", [], "any", false, false, false, 852), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "destination", [], "any", false, false, false, 852), "codeIata", [], "any", false, false, false, 852), "html", null, true);
                yield ")
                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 853
$context["transport"], "pickup", [], "any", false, false, false, 853)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 854
                yield "                        Aeroport de prise en charge: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "pickup", [], "any", false, false, false, 854), "nom", [], "any", false, false, false, 854), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "pickup", [], "any", false, false, false, 854), "codeIata", [], "any", false, false, false, 854), "html", null, true);
                yield ")
                    ";
            } else {
                // line 856
                yield "                        Donnees d'itineraire non renseignees.
                    ";
            }
            // line 858
            yield "                </div>

                <p class=\"trp-desc\">";
            // line 860
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "description", [], "any", true, true, false, 860)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "description", [], "any", false, false, false, 860), "Transport premium avec itineraire optimise et liaison aeroportuaire.")) : ("Transport premium avec itineraire optimise et liaison aeroportuaire.")), 0, 160), "html", null, true);
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "description", [], "any", false, false, false, 860) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "description", [], "any", false, false, false, 860)) > 160))) {
                yield "...";
            }
            yield "</p>

                <div class=\"trp-meta\">
                    ";
            // line 863
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "departure", [], "any", false, false, false, 863)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 864
                yield "                        <span>Depart: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "departure", [], "any", false, false, false, 864), "type", [], "any", false, false, false, 864), "html", null, true);
                yield "</span>
                    ";
            }
            // line 866
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "destination", [], "any", false, false, false, 866)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 867
                yield "                        <span>Destination: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "destination", [], "any", false, false, false, 867), "type", [], "any", false, false, false, 867), "html", null, true);
                yield "</span>
                     ";
            }
            // line 869
            yield "                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "dateCreation", [], "any", false, false, false, 869)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 870
                yield "                        <span>Cree le: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "dateCreation", [], "any", false, false, false, 870), "Y-m-d H:i"), "html", null, true);
                yield "</span>
                    ";
            }
            // line 872
            yield "                </div>

                <div class=\"trp-card-actions\">
                    <a class=\"trp-detail-link\" href=\"";
            // line 875
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 875)]), "html", null, true);
            yield "\">Voir les details</a>
                </div>
            </article>
        ";
            $context['_iterated'] = true;
        }
        // line 878
        if (!$context['_iterated']) {
            // line 879
            yield "            <div class=\"trp-empty\">
                Aucun transport ne correspond a vos filtres. Elargissez le type, la ville ou la plage de prix.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 883
        yield "    </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 888
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

        // line 889
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function () {
    var mapElement = document.getElementById('transportMap');
    if (!mapElement) return;

    // Initialisation de MapLibre (Style sombre vectoriel gratuit CartoDB)
    var map = new maplibregl.Map({
        container: 'transportMap',
        style: 'https://basemaps.cartocdn.com/gl/dark-matter-gl-style/style.json',
        center: [9.0, 34.0], // ATTENTION: MapLibre utilise [Longitude, Latitude]
        zoom: 5,
        pitch: 45, // INCLINAISON 3D pour l'effet \"Pro\"
        bearing: 0,
        attributionControl: false
    });

    map.addControl(new maplibregl.NavigationControl(), 'bottom-right');

    var airports = ";
        // line 908
        yield json_encode((isset($context["mapAirports"]) || array_key_exists("mapAirports", $context) ? $context["mapAirports"] : (function () { throw new RuntimeError('Variable "mapAirports" does not exist.', 908, $this->source); })()));
        yield ";
    var flights = ";
        // line 909
        yield json_encode((isset($context["mapFlights"]) || array_key_exists("mapFlights", $context) ? $context["mapFlights"] : (function () { throw new RuntimeError('Variable "mapFlights" does not exist.', 909, $this->source); })()));
        yield ";
    var airportsById = {};
    
    airports.forEach(function(a) {
        airportsById[String(a.id)] = a;
    });

    // Calcul de la distance réelle (Haversine) pour estimer le temps
    function getDistanceKm(lat1, lon1, lat2, lon2) {
        var R = 6371; 
        var dLat = (lat2 - lat1) * Math.PI / 180;
        var dLon = (lon2 - lon1) * Math.PI / 180;
        var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                Math.sin(dLon/2) * Math.sin(dLon/2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
        return R * c;
    }

    // Générateur de courbes modifié pour sortir du [Longitude, Latitude]
    function createCurveCoords(lat1, lng1, lat2, lng2) {
        var resolution = 100;
        var curveCoords = [];
        var dx = lng2 - lng1;
        var dy = lat2 - lat1;
        var dist = Math.sqrt(dx*dx + dy*dy);
        var nx = -dy / dist;
        var ny = dx / dist;
        
        for (var i = 0; i <= resolution; i++) {
            var fraction = i / resolution;
            var lat = lat1 + dy * fraction;
            var lng = lng1 + dx * fraction;
            var offset = Math.sin(fraction * Math.PI) * (dist * 0.15); 
            lat += nx * offset;
            lng += ny * offset;
            curveCoords.push([lng, lat]); // Format MapLibre: [Lng, Lat]
        }
        return curveCoords;
    }

    var animatedDots = [];

    // On attend que le style de la carte soit chargé pour ajouter les éléments
    map.on('load', function() {
        
        // --- 1. CONFIGURATION MÉTÉO (OpenWeatherMap) ---
        // TODO: Créez un compte gratuit sur openweathermap.org et remplacez cette clé
        const OWM_API_KEY = 'e636928574b9bd1a194958cfb708d25d'; 

        // Sources météo (Tuiles Raster)
        map.addSource('owm-temp', {
            type: 'raster',
            tiles: [`https://tile.openweathermap.org/map/temp_new/{z}/{x}/{y}.png?appid=\${OWM_API_KEY}`],
            tileSize: 256
        });
        map.addSource('owm-rain', {
            type: 'raster',
            tiles: [`https://tile.openweathermap.org/map/precipitation_new/{z}/{x}/{y}.png?appid=\${OWM_API_KEY}`],
            tileSize: 256
        });
        map.addSource('owm-clouds', {
            type: 'raster',
            tiles: [`https://tile.openweathermap.org/map/clouds_new/{z}/{x}/{y}.png?appid=\${OWM_API_KEY}`],
            tileSize: 256
        });

        // Calques météo (Cachés par défaut, opacité ajustée pour être élégant)
        map.addLayer({
            id: 'layer-temp', type: 'raster', source: 'owm-temp',
            layout: { visibility: 'none' }, paint: { 'raster-opacity': 0.6 }
        });
        map.addLayer({
            id: 'layer-rain', type: 'raster', source: 'owm-rain',
            layout: { visibility: 'none' }, paint: { 'raster-opacity': 0.7 }
        });
        map.addLayer({
            id: 'layer-clouds', type: 'raster', source: 'owm-clouds',
            layout: { visibility: 'none' }, paint: { 'raster-opacity': 0.8 }
        });

        // --- 2. PLACEMENT DES AÉROPORTS ---
        airports.forEach(function(a) {
            if (!a.lat || !a.lng) return;
            var html = '<div style=\"margin-bottom: 4px; font-size: 14px;\"><strong>' + (a.nom || a.codeIata || 'Aéroport') + '</strong></div>' +
                '<div style=\"font-size:11px; color:#A7E3FF; margin-bottom:8px;\">' + (a.ville ? a.ville + ', ' : '') + (a.pays || '') + '</div>';
            
            var el = document.createElement('div');
            el.className = 'trp-airport-marker';
            var popup = new maplibregl.Popup({ offset: 15 }).setHTML(html);

            new maplibregl.Marker({ element: el })
                .setLngLat([parseFloat(a.lng), parseFloat(a.lat)])
                .setPopup(popup)
                .addTo(map);
        });

        // --- 3. PRÉPARATION DES VOLS ET ANIMATIONS ---
        var lineFeatures = [];
        flights.forEach(function(f) {
            var from = airportsById[String(f.fromId || (f.from && f.from.id))];
            var to = airportsById[String(f.toId || (f.to && f.to.id))];
            if (!from || !to || !from.lat || !from.lng || !to.lat || !to.lng) return;
            
            var curveCoords = createCurveCoords(parseFloat(from.lat), parseFloat(from.lng), parseFloat(to.lat), parseFloat(to.lng));
            
            // Popups de vol
            var html = '<div style=\"margin-bottom: 5px; font-size: 14px;\"><strong>' + (f.nom || 'Trajet Aérien') + '</strong></div>' +
                '<div style=\"font-size:11px; margin-bottom: 10px; color: var(--trp-sky-soft);\">' +
                (from.ville || '') + ' <span style=\"color:#fff;\">&rarr;</span> ' + (to.ville || '') + '</div>';

            lineFeatures.push({
                'type': 'Feature',
                'geometry': { 'type': 'LineString', 'coordinates': curveCoords },
                'properties': { 'popupHtml': html }
            });

            var dotEl = document.createElement('div');
            dotEl.className = 'trp-plane-dot';
            var dot = new maplibregl.Marker({ element: dotEl }).setLngLat(curveCoords[0]).addTo(map);
            animatedDots.push({ marker: dot, coords: curveCoords });
        });

        // Ajout des lignes de vol SUR LES COUCHES MÉTÉO
        map.addSource('flights-source', {
            'type': 'geojson',
            'data': { 'type': 'FeatureCollection', 'features': lineFeatures }
        });

        map.addLayer({
            'id': 'flights-layer',
            'type': 'line',
            'source': 'flights-source',
            'layout': { 'line-join': 'round', 'line-cap': 'round' },
            'paint': { 'line-color': '#2FA8FF', 'line-width': 2, 'line-dasharray': [3, 4], 'line-opacity': 0.8 }
        });

        // --- 4. LOGIQUE DES BOUTONS MÉTÉO ---
        const weatherButtons = document.querySelectorAll('.trp-weather-btn');
        weatherButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                // Retirer la classe active de tous
                weatherButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const selectedLayer = this.getAttribute('data-layer');

                // Cacher toutes les couches météo
                ['layer-temp', 'layer-rain', 'layer-clouds'].forEach(layer => {
                    map.setLayoutProperty(layer, 'visibility', 'none');
                });

                // Afficher la couche sélectionnée (si ce n'est pas \"none\")
                if (selectedLayer !== 'none') {
                    map.setLayoutProperty(selectedLayer, 'visibility', 'visible');
                }
            });
        });

        // --- 5. ANIMATION DES AVIONS ---
        var duration = 4000;
        var start = Date.now();
        var animate = function() {
            var fraction = ((Date.now() - start) % duration) / duration;
            animatedDots.forEach(function(item) {
                var coords = item.coords;
                var exact = fraction * (coords.length - 1);
                var lower = Math.floor(exact);
                var upper = Math.ceil(exact);
                var weight = exact - lower;
                var lng = coords[lower][0] + (coords[upper][0] - coords[lower][0]) * weight;
                var lat = coords[lower][1] + (coords[upper][1] - coords[lower][1]) * weight;
                item.marker.setLngLat([lng, lat]);
            });
            requestAnimationFrame(animate);
        };
        animate();
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
        return "transports.html.twig";
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
        return array (  1192 => 909,  1188 => 908,  1166 => 889,  1153 => 888,  1139 => 883,  1130 => 879,  1128 => 878,  1120 => 875,  1115 => 872,  1109 => 870,  1106 => 869,  1100 => 867,  1097 => 866,  1091 => 864,  1089 => 863,  1080 => 860,  1076 => 858,  1072 => 856,  1064 => 854,  1062 => 853,  1051 => 852,  1049 => 851,  1043 => 848,  1037 => 845,  1033 => 844,  1029 => 842,  1024 => 841,  982 => 802,  975 => 798,  968 => 794,  961 => 790,  951 => 783,  944 => 778,  929 => 776,  925 => 775,  915 => 768,  907 => 763,  899 => 758,  892 => 753,  877 => 751,  873 => 750,  865 => 745,  128 => 10,  115 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Transports - ASAFAR{% endblock %}

{% block stylesheets %}
{{ parent() }}
{% endblock %}

{% block body %}
<link href=\"https://unpkg.com/maplibre-gl@3.6.2/dist/maplibre-gl.css\" rel=\"stylesheet\" />
<script src=\"https://unpkg.com/maplibre-gl@3.6.2/dist/maplibre-gl.js\"></script>
<style>
    :root {
        --trp-navy-900: #051621;
        --trp-navy-800: #08263E;
        --trp-navy-700: #0B2D4A;
        --trp-navy-600: #1E6FA8;
        --trp-sky: #2FA8FF;
        --trp-sky-soft: #A7E3FF;
        --trp-amber: #FFC107;
        --trp-amber-strong: #FF9800;
        --trp-text-main: #F4F8FC;
        --trp-text-soft: #BED1E0;
    }

    body {
        background: var(--trp-navy-700) !important;
    }

    .trp-hero {
        position: relative;
        min-height: 92vh;
        display: flex;
        align-items: center;
        padding: 118px 90px 70px;
        overflow: hidden;
    }

    .trp-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        background:
            radial-gradient(circle at 18% 24%, rgba(47, 168, 255, 0.2) 0%, rgba(47, 168, 255, 0) 42%),
            radial-gradient(circle at 80% 14%, rgba(255, 193, 7, 0.18) 0%, rgba(255, 193, 7, 0) 38%),
            linear-gradient(135deg, var(--trp-navy-700) 0%, var(--trp-navy-800) 50%, var(--trp-navy-900) 100%);
    }

    .trp-hero-bg::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.035) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
        background-size: 45px 45px;
        opacity: 0.45;
    }

    .trp-hero-content {
        position: relative;
        z-index: 2;
        max-width: 980px;
    }

    .trp-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 18px;
        border-radius: 999px;
        border: 1px solid rgba(255, 193, 7, 0.4);
        background: rgba(255, 193, 7, 0.14);
        color: var(--trp-amber);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .trp-title {
        margin: 18px 0 14px;
        color: var(--trp-text-main);
        font-size: clamp(36px, 6vw, 68px);
        line-height: 1.03;
        font-family: 'Playfair Display', Georgia, serif;
    }

    .trp-title span {
        color: var(--trp-amber);
        text-shadow: 0 8px 24px rgba(255, 193, 7, 0.3);
    }

    .trp-subtitle {
        color: rgba(244, 248, 252, 0.9);
        font-size: 18px;
        line-height: 1.75;
        max-width: 770px;
        margin: 0 0 24px;
    }

    .trp-search-wrap {
        margin-top: 14px;
        border-radius: 22px;
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(255, 255, 255, 0.66);
        box-shadow: 0 18px 44px rgba(2, 17, 32, 0.35);
        overflow: hidden;
    }

    .trp-search {
        display: grid;
        grid-template-columns: repeat(6, minmax(120px, 1fr));
        gap: 0;
    }

    .trp-field {
        padding: 14px 16px;
        border-right: 1px solid #e7edf4;
    }

    .trp-field:last-child {
        border-right: none;
    }

    .trp-field label {
        display: block;
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #7a8998;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .trp-field input,
    .trp-field select {
        width: 100%;
        border: none;
        outline: none;
        background: transparent;
        color: #0f2b44;
        font-size: 14px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
    }

    .trp-actions {
        display: flex;
        align-items: stretch;
        gap: 0;
    }

    .trp-btn {
        border: none;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 14px;
        padding: 0 18px;
        min-height: 76px;
    }

    .trp-btn-search {
        background: linear-gradient(135deg, var(--trp-amber) 0%, var(--trp-amber-strong) 100%);
        color: var(--trp-navy-700);
    }

    .trp-btn-reset {
        background: var(--trp-navy-700);
        color: var(--trp-text-main);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .trp-stats {
        display: grid;
        grid-template-columns: repeat(4, minmax(180px, 1fr));
        gap: 16px;
        margin-top: 22px;
    }

    .trp-stat {
        background: rgba(11, 45, 74, 0.68);
        border: 1px solid rgba(47, 168, 255, 0.4);
        border-radius: 16px;
        padding: 16px 18px;
        color: #e9f4fc;
    }

    .trp-stat .value {
        display: block;
        font-size: 30px;
        line-height: 1;
        font-weight: 800;
        color: var(--trp-amber);
        margin-bottom: 4px;
    }

    .trp-stat .label {
        font-size: 12px;
        letter-spacing: 0.35px;
        text-transform: uppercase;
        color: var(--trp-sky-soft);
    }

    .trp-map-section {
        padding: 50px 0 0;
        max-width: 100%;
        margin: 0;
    }

    .trp-section-head {
        margin-bottom: 20px;
        padding: 0 90px;
        max-width: 1800px;
        margin-left: auto;
        margin-right: auto;
    }

    .trp-section-tag {
        display: inline-block;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.7px;
        color: var(--trp-amber);
        margin-bottom: 8px;
    }

    .trp-section-title {
        margin: 0;
        font-family: 'Playfair Display', Georgia, serif;
        color: var(--trp-text-main);
        font-size: clamp(30px, 4vw, 44px);
    }

    .trp-section-subtitle {
        margin: 10px 0 0;
        color: var(--trp-text-soft);
        line-height: 1.7;
        max-width: 920px;
    }

    .trp-map-panel {
        border-radius: 0;
        border: none;
        border-top: 1px solid rgba(47, 168, 255, 0.15);
        border-bottom: 1px solid rgba(47, 168, 255, 0.15);
        background: transparent;
        overflow: hidden;
        box-shadow: none;
        position: relative;
        min-height: 650px;
        height: 85vh;
        max-height: none;
        width: 100%;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
    }

    .trp-map-toolbar {
        padding: 14px;
        background: rgba(6, 30, 48, 0.94);
        border-bottom: 1px solid rgba(47, 168, 255, 0.28);
        display: grid;
        grid-template-columns: 1.2fr 1.2fr 1fr 1fr auto;
        gap: 10px;
        align-items: end;
    }

    .trp-tool {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .trp-tool label {
        font-size: 11px;
        color: var(--trp-sky-soft);
        text-transform: uppercase;
        letter-spacing: 0.45px;
        font-weight: 700;
    }

    .trp-tool input,
    .trp-tool select {
        border: 1px solid rgba(47, 168, 255, 0.35);
        border-radius: 10px;
        background: rgba(5, 24, 40, 0.86);
        color: var(--trp-text-main);
        font-size: 13px;
        padding: 10px 12px;
        outline: none;
        font-family: 'Poppins', sans-serif;
    }

    .trp-counts {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: flex-end;
    }

    .trp-chip {
        background: rgba(255, 193, 7, 0.14);
        border: 1px solid rgba(255, 193, 7, 0.34);
        border-radius: 999px;
        padding: 8px 12px;
        color: #ffe3a1;
        font-size: 12px;
        white-space: nowrap;
    }

    #transportMap {
        position: relative;
        width: 100%;
        flex: 1;
        min-width: 0;
        min-height: 0;
        background: radial-gradient(circle at 35% 32%, rgba(47, 168, 255, 0.2), rgba(8, 38, 62, 0.96));
        border: none;
        outline: none;
        box-sizing: border-box;
        z-index: 1;
        margin: 0;
        padding: 0;
        display: block;
    }

    #transportMap canvas {
        display: block;
        width: 100%;
        height: 100%;
    }

    .trp-map-popup {
        min-width: 220px;
        max-width: 320px;
        padding: 10px 12px;
        border-radius: 12px;
        background: rgba(11, 45, 74, 0.96);
        color: var(--trp-text-main);
        border: 1px solid rgba(47, 168, 255, 0.45);
        box-shadow: 0 10px 28px rgba(1, 14, 25, 0.35);
        line-height: 1.55;
        font-size: 13px;
        transform: translate(-50%, -100%);
        pointer-events: auto;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 2;
    }

    .trp-map-popup.hidden {
        display: none;
    }

    .trp-map-popup strong {
        color: #ffffff;
    }

    .trp-map-popup a {
        color: var(--trp-amber);
        text-decoration: none;
        font-weight: 700;
    }

    .trp-map-foot {
        padding: 12px 14px;
        border-top: 1px solid rgba(47, 168, 255, 0.25);
        color: var(--trp-text-soft);
        font-size: 13px;
    }

    /* =========================================
       NOUVEAU DESIGN DES CARTES (ÉLÉGANT & ANIMÉ)
       ========================================= */
    .trp-list-section {
        padding: 40px 90px 90px;
    }

    .trp-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 28px; /* Espacement plus aéré */
    }

    .trp-card {
        border-radius: 20px;
        border: 1px solid rgba(47, 168, 255, 0.12);
        background: linear-gradient(160deg, rgba(11, 45, 74, 0.85) 0%, rgba(5, 22, 33, 0.95) 100%);
        backdrop-filter: blur(12px);
        padding: 26px;
        color: var(--trp-text-main);
        display: flex;
        flex-direction: column;
        gap: 16px;
        min-height: 280px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    /* Barre lumineuse animée en haut de la carte au survol */
    .trp-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--trp-sky), var(--trp-amber));
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .trp-card:hover {
        transform: translateY(-8px);
        border-color: rgba(47, 168, 255, 0.4);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 20px rgba(47, 168, 255, 0.15);
    }

    .trp-card:hover::before {
        opacity: 1;
    }

    .trp-card-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 4px;
    }

    .trp-type {
        display: inline-flex;
        align-items: center;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        color: var(--trp-text-main);
        background: rgba(47, 168, 255, 0.15);
        border: 1px solid rgba(47, 168, 255, 0.3);
        box-shadow: inset 0 0 10px rgba(47, 168, 255, 0.1);
    }

    .trp-price {
        font-size: 24px;
        font-weight: 800;
        color: var(--trp-amber);
        text-shadow: 0 2px 10px rgba(255, 193, 7, 0.2);
        letter-spacing: -0.5px;
    }

    .trp-card h3 {
        margin: 0;
        font-size: 22px;
        font-family: 'Playfair Display', Georgia, serif;
        color: #ffffff;
        line-height: 1.3;
    }

    .trp-route {
        border-left: 3px solid var(--trp-sky);
        padding-left: 14px;
        color: var(--trp-text-main);
        font-weight: 600;
        line-height: 1.6;
        font-size: 13px;
        background: rgba(47, 168, 255, 0.04);
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 0 8px 8px 0;
    }

    .trp-desc {
        color: var(--trp-text-soft);
        line-height: 1.6;
        font-size: 14px;
        margin: 0;
        flex-grow: 1; /* Pousse les éléments suivants vers le bas */
    }

    .trp-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 10px;
    }

    .trp-meta span {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        padding: 6px 12px;
        color: var(--trp-text-soft);
        font-size: 11px;
        font-weight: 500;
        transition: all 0.3s;
    }

    .trp-card:hover .trp-meta span {
        border-color: rgba(255, 255, 255, 0.25);
        color: #fff;
        background: rgba(255, 255, 255, 0.06);
    }

    .trp-card-actions {
        margin-top: 20px;
        display: flex;
    }

    .trp-detail-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        border-radius: 12px;
        width: 100%;
        min-height: 48px;
        font-size: 13px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--trp-navy-900);
        background: linear-gradient(135deg, var(--trp-amber) 0%, #FFD54F 100%);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    /* Effet d'éclat sur le bouton au survol */
    .trp-detail-link::after {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(135deg, #FFD54F 0%, var(--trp-amber) 100%);
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .trp-detail-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(255, 193, 7, 0.3);
    }
    
    .trp-detail-link:hover::after {
        opacity: 1;
    }

    .trp-empty {
        text-align: center;
        color: var(--trp-text-soft);
        border: 1px dashed rgba(47, 168, 255, 0.45);
        border-radius: 20px;
        padding: 40px 20px;
        background: rgba(8, 38, 62, 0.68);
        grid-column: 1 / -1;
    }

    @media (max-width: 1200px) {
        .trp-search {
            grid-template-columns: repeat(3, minmax(150px, 1fr));
        }

        .trp-actions {
            grid-column: span 3;
        }

        .trp-map-toolbar {
            grid-template-columns: 1fr 1fr;
        }

        .trp-counts {
            grid-column: span 2;
            justify-content: flex-start;
        }
    }

    @media (max-width: 820px) {
        .trp-hero,
        .trp-list-section {
            padding-left: 20px;
            padding-right: 20px;
        }
        .trp-section-head,
        .trp-map-foot {
            padding-left: 20px;
            padding-right: 20px;
        }

        .trp-search {
            grid-template-columns: 1fr;
        }

        .trp-field,
        .trp-actions {
            border-right: none;
            border-bottom: 1px solid #e7edf4;
        }

        .trp-actions {
            border-bottom: none;
        }

        .trp-btn {
            width: 100%;
        }

        .trp-stats {
            grid-template-columns: repeat(2, minmax(140px, 1fr));
        }

        .trp-map-toolbar {
            grid-template-columns: 1fr;
        }

        .trp-counts {
            grid-column: auto;
        }

        #transportMap {
            height: 500px;
        }
        
        .trp-grid {
            grid-template-columns: 1fr;
        }
    }

    /* --- Styles spécifiques pour MapLibre --- */
    .trp-airport-marker {
        width: 14px;
        height: 14px;
        background-color: var(--trp-amber);
        border-radius: 50%;
        border: 2px solid #FFFFFF;
        box-shadow: 0 0 15px 4px rgba(255, 193, 7, 0.4);
        cursor: pointer;
        transition: transform 0.2s ease;
    }
    .trp-airport-marker:hover {
        transform: scale(1.3);
    }
    .trp-plane-dot {
        width: 6px;
        height: 6px;
        background-color: #FFFFFF;
        border-radius: 50%;
        box-shadow: 0 0 10px 2px var(--trp-sky);
        pointer-events: none;
    }
    /* Surcharge du style de base des popups MapLibre pour coller au design sombre */
    .maplibregl-popup-content {
        background: rgba(11, 45, 74, 0.96) !important;
        border: 1px solid rgba(47, 168, 255, 0.45) !important;
        border-radius: 12px !important;
        color: var(--trp-text-main) !important;
        box-shadow: 0 10px 28px rgba(1, 14, 25, 0.5) !important;
        padding: 12px 14px !important;
    }
    .maplibregl-popup-tip {
        border-top-color: rgba(47, 168, 255, 0.45) !important;
        border-bottom-color: rgba(47, 168, 255, 0.45) !important;
    }
    .maplibregl-popup-close-button {
        color: var(--trp-text-soft);
        padding: 4px 8px;
    }


    /* --- Contrôles Météo sur la carte --- */
    .trp-map-weather-controls {
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 10;
        background: rgba(5, 22, 33, 0.85);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(47, 168, 255, 0.3);
        border-radius: 14px;
        padding: 10px;
        display: flex;
        flex-direction: column;
        gap: 6px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    }
    .weather-title {
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--trp-sky-soft);
        font-weight: 800;
        margin-bottom: 6px;
        padding-left: 4px;
    }
    .trp-weather-btn {
        background: transparent;
        color: var(--trp-text-soft);
        border: 1px solid transparent;
        padding: 8px 14px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 13px;
        font-weight: 600;
        text-align: left;
        transition: all 0.3s ease;
        font-family: 'Poppins', sans-serif;
    }
    .trp-weather-btn:hover {
        background: rgba(47, 168, 255, 0.1);
        color: var(--trp-text-main);
    }
    .trp-weather-btn.active {
        background: rgba(47, 168, 255, 0.2);
        border-color: var(--trp-sky);
        color: #ffffff;
        box-shadow: inset 0 0 10px rgba(47, 168, 255, 0.1);
    }


</style>

<section class=\"trp-hero\">
    <div class=\"trp-hero-bg\"></div>

    <div class=\"trp-hero-content\">
        <span class=\"trp-badge\">Reseau aerien et mobilite premium</span>
        <h1 class=\"trp-title\">Section Transport <span>Itineraires reels</span></h1>
        <p class=\"trp-subtitle\">
            Explorez votre catalogue transport avec un filtrage dynamique, une segmentation par
            categorie d'aeroport et une carte en direct qui trace chaque liaison aerienne disponible.
        </p>

        <div class=\"trp-search-wrap\">
            <form method=\"GET\" action=\"{{ path('app_transports') }}\" class=\"trp-search\">
                <div class=\"trp-field\">
                    <label>Type de transport</label>
                    <select name=\"type\">
                        <option value=\"\">Tous</option>
                        {% for type in transportTypes %}
                            <option value=\"{{ type }}\" {% if filters.type == type %}selected{% endif %}>{{ type }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"trp-field\">
                    <label>Ville de depart</label>
                    <input type=\"text\" name=\"departure_city\" value=\"{{ filters.departure_city }}\" placeholder=\"ex: Paris\">
                </div>

                <div class=\"trp-field\">
                    <label>Ville d'arrivee</label>
                    <input type=\"text\" name=\"destination_city\" value=\"{{ filters.destination_city }}\" placeholder=\"ex: Tunis\">
                </div>

                <div class=\"trp-field\">
                    <label>Prix max (TND)</label>
                    <input type=\"number\" step=\"1\" min=\"0\" name=\"max_prix\" value=\"{{ filters.max_prix }}\" placeholder=\"Budget maximum\">
                </div>

                <div class=\"trp-field\">
                    <label>Categorie d'aeroport</label>
                    <select name=\"airport_type\">
                        <option value=\"\">Toutes categories</option>
                        {% for category in airportTypes %}
                            <option value=\"{{ category }}\" {% if filters.airport_type == category %}selected{% endif %}>{{ category }}</option>
                        {% endfor %}
                    </select>
                 </div>

                <div class=\"trp-actions\">
                    <button type=\"submit\" class=\"trp-btn trp-btn-search\">Rechercher</button>
                    <a href=\"{{ path('app_transports') }}\" class=\"trp-btn trp-btn-reset\">Reinitialiser</a>
                </div>
            </form>
        </div>

        <div class=\"trp-stats\">
            <div class=\"trp-stat\">
                <span class=\"value\">{{ transports|length }}</span>
                <span class=\"label\">Transports affiches</span>
            </div>
            <div class=\"trp-stat\">
                <span class=\"value\">{{ mapFlights|length }}</span>
                <span class=\"label\">Liaisons aeriennes</span>
            </div>
            <div class=\"trp-stat\">
                <span class=\"value\">{{ mapAirports|length }}</span>
                <span class=\"label\">Aeroports sur la carte</span>
             </div>
            <div class=\"trp-stat\">
                <span class=\"value\">{{ airportTypes|length }}</span>
                <span class=\"label\">Categories d'aeroport</span>
            </div>
        </div>
    </div>
</section>

<section class=\"trp-map-section\" id=\"transports-map\">
    <div class=\"trp-section-head\">
        <span class=\"trp-section-tag\">Carte operationnelle</span>
        <h2 class=\"trp-section-title\">Carte des vols en direct</h2>
        <p class=\"trp-section-subtitle\">
            Visualisez chaque liaison aerienne disponible avec animation en temps reel.
        </p>
    </div>
    <div class=\"trp-map-panel\">
        <div id=\"transportMap\"></div>
        
        <div class=\"trp-map-weather-controls\">
            <div class=\"weather-title\">Calques Météo (Direct)</div>
            <button class=\"trp-weather-btn active\" data-layer=\"none\">🌍 Carte Standard</button>
            <button class=\"trp-weather-btn\" data-layer=\"layer-temp\">🌡️ Températures</button>
            <button class=\"trp-weather-btn\" data-layer=\"layer-rain\">🌧️ Précipitations</button>
            <button class=\"trp-weather-btn\" data-layer=\"layer-clouds\">☁️ Nuages</button>
        </div>

        <div class=\"trp-map-foot\">
            Astuce: Les lignes animees representent les vols AVION actifs. Cliquez sur une ligne ou un aeroport pour plus de details.
        </div>
    </div>
</section>

<section class=\"trp-list-section\" id=\"transports-list\">
    <div class=\"trp-section-head\">
        <span class=\"trp-section-tag\">Catalogue</span>
        <h2 class=\"trp-section-title\">Offres de transport</h2>
    </div>

    <div class=\"trp-grid\">
        {% for transport in transports %}
            <article class=\"trp-card\">
                <div class=\"trp-card-top\">
                     <span class=\"trp-type\">{{ transport.type }}</span>
                    <span class=\"trp-price\">{{ transport.prix|number_format(2, '.', ' ') }} TND</span>
                </div>

                <h3>{{ transport.nom }}</h3>

                <div class=\"trp-route\">
                    {% if transport.departure and transport.destination %}
                        {{ transport.departure.ville }} ({{ transport.departure.codeIata }}) -> {{ transport.destination.ville }} ({{ transport.destination.codeIata }})
                    {% elseif transport.pickup %}
                        Aeroport de prise en charge: {{ transport.pickup.nom }} ({{ transport.pickup.codeIata }})
                    {% else %}
                        Donnees d'itineraire non renseignees.
                    {% endif %}
                </div>

                <p class=\"trp-desc\">{{ transport.description|default('Transport premium avec itineraire optimise et liaison aeroportuaire.')|slice(0, 160) }}{% if transport.description and transport.description|length > 160 %}...{% endif %}</p>

                <div class=\"trp-meta\">
                    {% if transport.departure %}
                        <span>Depart: {{ transport.departure.type }}</span>
                    {% endif %}
                    {% if transport.destination %}
                        <span>Destination: {{ transport.destination.type }}</span>
                     {% endif %}
                    {% if transport.dateCreation %}
                        <span>Cree le: {{ transport.dateCreation|date('Y-m-d H:i') }}</span>
                    {% endif %}
                </div>

                <div class=\"trp-card-actions\">
                    <a class=\"trp-detail-link\" href=\"{{ path('app_transport_detail', {'id': transport.id}) }}\">Voir les details</a>
                </div>
            </article>
        {% else %}
            <div class=\"trp-empty\">
                Aucun transport ne correspond a vos filtres. Elargissez le type, la ville ou la plage de prix.
            </div>
        {% endfor %}
    </div>
</section>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function () {
    var mapElement = document.getElementById('transportMap');
    if (!mapElement) return;

    // Initialisation de MapLibre (Style sombre vectoriel gratuit CartoDB)
    var map = new maplibregl.Map({
        container: 'transportMap',
        style: 'https://basemaps.cartocdn.com/gl/dark-matter-gl-style/style.json',
        center: [9.0, 34.0], // ATTENTION: MapLibre utilise [Longitude, Latitude]
        zoom: 5,
        pitch: 45, // INCLINAISON 3D pour l'effet \"Pro\"
        bearing: 0,
        attributionControl: false
    });

    map.addControl(new maplibregl.NavigationControl(), 'bottom-right');

    var airports = {{ mapAirports|json_encode|raw }};
    var flights = {{ mapFlights|json_encode|raw }};
    var airportsById = {};
    
    airports.forEach(function(a) {
        airportsById[String(a.id)] = a;
    });

    // Calcul de la distance réelle (Haversine) pour estimer le temps
    function getDistanceKm(lat1, lon1, lat2, lon2) {
        var R = 6371; 
        var dLat = (lat2 - lat1) * Math.PI / 180;
        var dLon = (lon2 - lon1) * Math.PI / 180;
        var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                Math.sin(dLon/2) * Math.sin(dLon/2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
        return R * c;
    }

    // Générateur de courbes modifié pour sortir du [Longitude, Latitude]
    function createCurveCoords(lat1, lng1, lat2, lng2) {
        var resolution = 100;
        var curveCoords = [];
        var dx = lng2 - lng1;
        var dy = lat2 - lat1;
        var dist = Math.sqrt(dx*dx + dy*dy);
        var nx = -dy / dist;
        var ny = dx / dist;
        
        for (var i = 0; i <= resolution; i++) {
            var fraction = i / resolution;
            var lat = lat1 + dy * fraction;
            var lng = lng1 + dx * fraction;
            var offset = Math.sin(fraction * Math.PI) * (dist * 0.15); 
            lat += nx * offset;
            lng += ny * offset;
            curveCoords.push([lng, lat]); // Format MapLibre: [Lng, Lat]
        }
        return curveCoords;
    }

    var animatedDots = [];

    // On attend que le style de la carte soit chargé pour ajouter les éléments
    map.on('load', function() {
        
        // --- 1. CONFIGURATION MÉTÉO (OpenWeatherMap) ---
        // TODO: Créez un compte gratuit sur openweathermap.org et remplacez cette clé
        const OWM_API_KEY = 'e636928574b9bd1a194958cfb708d25d'; 

        // Sources météo (Tuiles Raster)
        map.addSource('owm-temp', {
            type: 'raster',
            tiles: [`https://tile.openweathermap.org/map/temp_new/{z}/{x}/{y}.png?appid=\${OWM_API_KEY}`],
            tileSize: 256
        });
        map.addSource('owm-rain', {
            type: 'raster',
            tiles: [`https://tile.openweathermap.org/map/precipitation_new/{z}/{x}/{y}.png?appid=\${OWM_API_KEY}`],
            tileSize: 256
        });
        map.addSource('owm-clouds', {
            type: 'raster',
            tiles: [`https://tile.openweathermap.org/map/clouds_new/{z}/{x}/{y}.png?appid=\${OWM_API_KEY}`],
            tileSize: 256
        });

        // Calques météo (Cachés par défaut, opacité ajustée pour être élégant)
        map.addLayer({
            id: 'layer-temp', type: 'raster', source: 'owm-temp',
            layout: { visibility: 'none' }, paint: { 'raster-opacity': 0.6 }
        });
        map.addLayer({
            id: 'layer-rain', type: 'raster', source: 'owm-rain',
            layout: { visibility: 'none' }, paint: { 'raster-opacity': 0.7 }
        });
        map.addLayer({
            id: 'layer-clouds', type: 'raster', source: 'owm-clouds',
            layout: { visibility: 'none' }, paint: { 'raster-opacity': 0.8 }
        });

        // --- 2. PLACEMENT DES AÉROPORTS ---
        airports.forEach(function(a) {
            if (!a.lat || !a.lng) return;
            var html = '<div style=\"margin-bottom: 4px; font-size: 14px;\"><strong>' + (a.nom || a.codeIata || 'Aéroport') + '</strong></div>' +
                '<div style=\"font-size:11px; color:#A7E3FF; margin-bottom:8px;\">' + (a.ville ? a.ville + ', ' : '') + (a.pays || '') + '</div>';
            
            var el = document.createElement('div');
            el.className = 'trp-airport-marker';
            var popup = new maplibregl.Popup({ offset: 15 }).setHTML(html);

            new maplibregl.Marker({ element: el })
                .setLngLat([parseFloat(a.lng), parseFloat(a.lat)])
                .setPopup(popup)
                .addTo(map);
        });

        // --- 3. PRÉPARATION DES VOLS ET ANIMATIONS ---
        var lineFeatures = [];
        flights.forEach(function(f) {
            var from = airportsById[String(f.fromId || (f.from && f.from.id))];
            var to = airportsById[String(f.toId || (f.to && f.to.id))];
            if (!from || !to || !from.lat || !from.lng || !to.lat || !to.lng) return;
            
            var curveCoords = createCurveCoords(parseFloat(from.lat), parseFloat(from.lng), parseFloat(to.lat), parseFloat(to.lng));
            
            // Popups de vol
            var html = '<div style=\"margin-bottom: 5px; font-size: 14px;\"><strong>' + (f.nom || 'Trajet Aérien') + '</strong></div>' +
                '<div style=\"font-size:11px; margin-bottom: 10px; color: var(--trp-sky-soft);\">' +
                (from.ville || '') + ' <span style=\"color:#fff;\">&rarr;</span> ' + (to.ville || '') + '</div>';

            lineFeatures.push({
                'type': 'Feature',
                'geometry': { 'type': 'LineString', 'coordinates': curveCoords },
                'properties': { 'popupHtml': html }
            });

            var dotEl = document.createElement('div');
            dotEl.className = 'trp-plane-dot';
            var dot = new maplibregl.Marker({ element: dotEl }).setLngLat(curveCoords[0]).addTo(map);
            animatedDots.push({ marker: dot, coords: curveCoords });
        });

        // Ajout des lignes de vol SUR LES COUCHES MÉTÉO
        map.addSource('flights-source', {
            'type': 'geojson',
            'data': { 'type': 'FeatureCollection', 'features': lineFeatures }
        });

        map.addLayer({
            'id': 'flights-layer',
            'type': 'line',
            'source': 'flights-source',
            'layout': { 'line-join': 'round', 'line-cap': 'round' },
            'paint': { 'line-color': '#2FA8FF', 'line-width': 2, 'line-dasharray': [3, 4], 'line-opacity': 0.8 }
        });

        // --- 4. LOGIQUE DES BOUTONS MÉTÉO ---
        const weatherButtons = document.querySelectorAll('.trp-weather-btn');
        weatherButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                // Retirer la classe active de tous
                weatherButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const selectedLayer = this.getAttribute('data-layer');

                // Cacher toutes les couches météo
                ['layer-temp', 'layer-rain', 'layer-clouds'].forEach(layer => {
                    map.setLayoutProperty(layer, 'visibility', 'none');
                });

                // Afficher la couche sélectionnée (si ce n'est pas \"none\")
                if (selectedLayer !== 'none') {
                    map.setLayoutProperty(selectedLayer, 'visibility', 'visible');
                }
            });
        });

        // --- 5. ANIMATION DES AVIONS ---
        var duration = 4000;
        var start = Date.now();
        var animate = function() {
            var fraction = ((Date.now() - start) % duration) / duration;
            animatedDots.forEach(function(item) {
                var coords = item.coords;
                var exact = fraction * (coords.length - 1);
                var lower = Math.floor(exact);
                var upper = Math.ceil(exact);
                var weight = exact - lower;
                var lng = coords[lower][0] + (coords[upper][0] - coords[lower][0]) * weight;
                var lat = coords[lower][1] + (coords[upper][1] - coords[lower][1]) * weight;
                item.marker.setLngLat([lng, lat]);
            });
            requestAnimationFrame(animate);
        };
        animate();
    });
});
</script>
{% endblock %}", "transports.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\transports.html.twig");
    }
}
