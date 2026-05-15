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

/* transports/detail.html.twig */
class __TwigTemplate_429c1cb23ee1d825c198e8976a308b54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transports/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transports/detail.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " - Transport";
        
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
        yield "

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>


<div class=\"particles-bg\">
    <div class=\"particle\" style=\"left: 5%;\"></div>
    <div class=\"particle\" style=\"left: 15%; animation-delay: 2s; width: 8px; height: 8px;\"></div>
    <div class=\"particle\" style=\"left: 25%; animation-delay: 4s;\"></div>
    <div class=\"particle\" style=\"left: 35%; animation-delay: 1s; width: 5px; height: 5px;\"></div>
    <div class=\"particle\" style=\"left: 45%; animation-delay: 3s;\"></div>
    <div class=\"particle\" style=\"left: 55%; animation-delay: 5s; width: 7px; height: 7px;\"></div>
    <div class=\"particle\" style=\"left: 65%; animation-delay: 2.5s;\"></div>
    <div class=\"particle\" style=\"left: 75%; animation-delay: 4.5s; width: 6px; height: 6px;\"></div>
    <div class=\"particle\" style=\"left: 85%; animation-delay: 1.5s;\"></div>
    <div class=\"particle\" style=\"left: 95%; animation-delay: 3.5s;\"></div>
</div>

<style>
    :root {
        --td-navy-900: #051621;
        --td-navy-800: #08263E;
        --td-navy-700: #0B2D4A;
        --td-sky: #2FA8FF;
        --td-sky-soft: #A7E3FF;
        --td-amber: #FFC107;
        --td-amber-strong: #FF9800;
        --td-text-main: #F4F8FC;
        --td-text-soft: #BED1E0;
        --td-success: #34D399;
    }

    body { background: var(--td-navy-800) !important; }

    .td-hero {
        position: relative;
        margin-top: 76px;
        min-height: 62vh;
        padding: 58px 86px 44px;
        overflow: hidden;
    }

.td-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: 
        radial-gradient(circle at 15% 20%, rgba(5, 22, 33, 0.4) 0%, rgba(5, 22, 33, 0) 40%),
        linear-gradient(135deg, var(--td-navy-900) 0%, var(--td-navy-800) 100%);
}

    .td-hero::after {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.032) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.032) 1px, transparent 1px);
        background-size: 44px 44px;
        opacity: 0.45;
    }

    .td-hero-content {
        position: relative;
        z-index: 2;
        max-width: 1100px;
        margin: 0 auto;
    }

    .td-topline {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    .td-badge {
        display: inline-flex;
        align-items: center;
        border: 1px solid rgba(255, 193, 7, 0.35);
        background: rgba(255, 193, 7, 0.14);
        color: var(--td-amber);
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.4px;
        text-transform: uppercase;
        padding: 8px 14px;
    }

    .td-link-back {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        color: var(--td-text-soft);
        border: 1px solid rgba(47, 168, 255, 0.28);
        background: rgba(11, 45, 74, 0.45);
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        padding: 8px 14px;
    }

    .td-title {
        margin: 0 0 14px;
        color: var(--td-text-main);
        font-size: clamp(34px, 5vw, 62px);
        line-height: 1.05;
        font-family: 'Playfair Display', Georgia, serif;
    }

    .td-title span {
        color: var(--td-amber);
        text-shadow: 0 8px 24px rgba(255, 193, 7, 0.26);
    }

    .td-route {
        margin: 0;
        color: rgba(244, 248, 252, 0.95);
        font-size: 17px;
        line-height: 1.7;
        max-width: 900px;
    }

    .td-kpis {
        margin-top: 22px;
        display: grid;
        grid-template-columns: repeat(4, minmax(150px, 1fr));
        gap: 12px;
    }

    .td-kpi {
        border-radius: 14px;
        border: 1px solid rgba(47, 168, 255, 0.3);
        background: rgba(11, 45, 74, 0.68);
        padding: 14px;
    }

    .td-kpi strong {
        display: block;
        color: var(--td-amber);
        font-size: 24px;
        line-height: 1;
        margin-bottom: 5px;
    }

    .td-kpi span {
        color: var(--td-sky-soft);
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        font-weight: 700;
    }

    .td-main {
        position: relative;
        z-index: 2;
        padding: 44px 86px 34px;
    }

    .td-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.7fr) minmax(320px, 1fr);
        gap: 56px;
        align-items: start;
        max-width: 1200px;
        margin: 0 auto;
    }

    .td-panel {
        border-radius: 18px;
        border: 1px solid rgba(47, 168, 255, 0.28);
        background: linear-gradient(180deg, rgba(11, 45, 74, 0.95) 0%, rgba(8, 38, 62, 0.96) 100%);
        box-shadow: 0 14px 36px rgba(1, 14, 25, 0.3);
        padding: 40px;
    }

    .td-head {
        margin: 0;
        color: var(--td-text-main);
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 30px;
    }

    .td-block { margin-top: 30px; }

    .td-section-title {
        margin: 0 0 24px;
        color: #e6f4ff;
        font-size: 20px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        border-bottom: 2px solid rgba(47, 168, 255, 0.15);
        padding-bottom: 12px;
    }

    .td-info-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 24px;
    }

    .td-info {
        position: relative;
        overflow: hidden;
        border-radius: 14px;
        border: 1px solid rgba(47, 168, 255, 0.32);
        background: linear-gradient(165deg, rgba(9, 35, 55, 0.9) 0%, rgba(5, 24, 39, 0.9) 100%);
        padding: 32px;
        max-width: 100%;
        transition: transform 0.25s cubic-bezier(.4,2,.3,1), box-shadow 0.2s;
        will-change: transform;
    }
    .td-info:hover {
        transform: scale(1.08);
        z-index: 2;
        box-shadow: 0 8px 32px 0 rgba(47,168,255,0.18);
    }

    .td-info::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; height: 2px;
        background: linear-gradient(90deg, rgba(47, 168, 255, 0.75), rgba(255, 193, 7, 0.35));
    }

    .td-info .label {
        display: block;
        color: var(--td-sky-soft);
        font-size: 14px;
        letter-spacing: 0.3px;
        text-transform: uppercase;
        margin-bottom: 12px;
        font-weight: 700;
    }

    .td-info .value {
        color: var(--td-text-main);
        font-weight: 600;
        font-size: 28px;
        line-height: 1.25;
    }

    .td-airports {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 24px;
    }

    .td-airport {
        border-radius: 14px;
        border: 1px solid rgba(255, 193, 7, 0.26);
        background: linear-gradient(165deg, rgba(255, 193, 7, 0.14) 0%, rgba(255, 193, 7, 0.05) 100%);
        padding: 32px;
        color: #ffedbf;
        max-width: 100%;
        transition: transform 0.25s cubic-bezier(.4,2,.3,1), box-shadow 0.2s;
        will-change: transform;
    }
    .td-airport:hover {
        transform: scale(1.08);
        z-index: 2;
        box-shadow: 0 8px 32px 0 rgba(255,193,7,0.18);
    }

    .td-airport h4 { margin: 0 0 16px; font-size: 20px; color: var(--td-amber); }
    .td-airport p { margin: 0; line-height: 1.7; font-size: 16px; }

    .td-sidebar {
        position: sticky;
        top: 94px;
        min-width: 260px;
        max-width: 320px;
        margin-left: 48px;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .td-booking {
        background: rgba(255,255,255,0.06);
        box-shadow: 0 2px 18px 0 rgba(47,168,255,0.10);
        border: 2px solid rgba(47,168,255,0.18);
        padding: 28px 20px 28px 20px;
    }

    .td-booking .price {
        margin: 0;
        color: var(--td-amber);
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 46px;
        line-height: 1;
    }
    .td-booking .price small { font-size: 17px; color: #ffe9b0; }

    .td-description {
        margin-top: 30px;
        border-radius: 14px;
        border: 1px solid rgba(47, 168, 255, 0.24);
        background: rgba(6, 30, 48, 0.68);
        padding: 32px;
    }
    .td-description h3 { margin: 0 0 8px; color: var(--td-amber); font-size: 22px; }
    .td-description p { margin: 0; color: var(--td-text-soft); line-height: 1.8; font-size: 16px; }

    /* --- ASAFAR AI Predictor Styles --- */
    .td-ai-panel {
        border-radius: 14px;
        background: linear-gradient(135deg, rgba(6, 26, 43, 0.9), rgba(11, 45, 74, 0.95));
        border: 1px solid rgba(47, 168, 255, 0.35);
        padding: 20px; position: relative; overflow: hidden;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
        min-width: 320px; max-width: 100%; flex: 0 0 auto; cursor: pointer;
        transition: transform 0.25s cubic-bezier(.4,2,.3,1), box-shadow 0.2s;
    }
    .td-ai-panel:hover { transform: scale(1.08); z-index: 2; box-shadow: 0 8px 32px 0 rgba(47,168,255,0.18); }
    .td-ai-panel::after {
        content: ''; position: absolute; top: 0; left: -100%; width: 50%; height: 2px;
        background: linear-gradient(90deg, transparent, var(--td-sky), transparent);
        animation: td-ai-scan 2.5s infinite linear;
    }
    @keyframes td-ai-scan { 100% { left: 200%; } }
    .td-ai-header { display: flex; align-items: center; gap: 12px; margin-bottom: 18px; border-bottom: 1px solid rgba(47, 168, 255, 0.15); padding-bottom: 12px; }
    .td-ai-icon { width: 36px; height: 36px; background: rgba(47, 168, 255, 0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: var(--td-sky); font-weight: bold; border: 1px solid rgba(47, 168, 255, 0.3); }
    .td-ai-title { margin: 0; font-size: 16px; color: var(--td-text-main); font-weight: 700; }
    .td-ai-subtitle { font-size: 11px; color: var(--td-amber); text-transform: uppercase; letter-spacing: 0.5px; }
    .td-ai-loading { display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 30px 0; gap: 15px; color: var(--td-sky-soft); font-size: 13px; text-align: center; }
    .td-ai-spinner { width: 40px; height: 40px; border: 3px solid rgba(47, 168, 255, 0.2); border-top-color: var(--td-sky); border-radius: 50%; animation: spin 1s infinite linear; }
    @keyframes spin { to { transform: rotate(360deg); } }
    .td-ai-result { display: none; }
    .td-ai-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
    .td-ai-factor { background: rgba(4, 18, 30, 0.6); border-radius: 10px; padding: 12px; border-left: 3px solid var(--td-sky); }
    .td-ai-factor.risk-high { border-left-color: #ef4444; }
    .td-ai-factor.risk-low { border-left-color: var(--td-success); }
    .td-ai-factor.risk-medium { border-left-color: var(--td-amber); }
    .td-ai-factor span { display: block; font-size: 11px; color: var(--td-text-soft); margin-bottom: 4px; text-transform: uppercase;}
    .td-ai-factor strong { font-size: 14px; color: #fff; }
    .td-ai-score-wrap { text-align: center; margin-bottom: 20px; }
    .td-ai-score-val { font-size: 42px; font-weight: 800; color: var(--td-success); line-height: 1; font-family: 'Playfair Display', serif;}
    .td-ai-hint { text-align: center; font-size: 11px; color: rgba(167, 227, 255, 0.6); margin-top: 18px; text-transform: uppercase; letter-spacing: 0.5px; border-top: 1px dashed rgba(47, 168, 255, 0.2); padding-top: 12px; transition: color 0.2s; }
    .td-ai-panel:hover .td-ai-hint { color: var(--td-sky); }

    /* --- AI Modal Styles --- */
    .td-modal-overlay { position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(4, 18, 30, 0.85); backdrop-filter: blur(8px); z-index: 9999; display: none; align-items: center; justify-content: center; padding: 20px; opacity: 0; transition: opacity 0.3s ease; }
    .td-modal-overlay.active { opacity: 1; }
    .td-modal { background: linear-gradient(165deg, var(--td-navy-800) 0%, var(--td-navy-900) 100%); border: 1px solid rgba(47, 168, 255, 0.3); border-radius: 20px; width: 100%; max-width: 850px; max-height: 90vh; overflow-y: auto; box-shadow: 0 24px 48px rgba(0, 0, 0, 0.6); transform: translateY(30px) scale(0.95); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
    .td-modal-overlay.active .td-modal { transform: translateY(0) scale(1); }
    .td-modal-header { padding: 24px 30px; border-bottom: 1px solid rgba(47, 168, 255, 0.15); display: flex; justify-content: space-between; align-items: center; background: rgba(0,0,0,0.1); }
    .td-modal-title { margin: 0; color: var(--td-text-main); font-family: 'Playfair Display', serif; font-size: 26px; display: flex; align-items: center; gap: 12px; }
    .td-modal-title i { color: var(--td-sky); font-size: 22px; }
    .td-modal-close { background: rgba(47, 168, 255, 0.1); border: 1px solid rgba(47, 168, 255, 0.3); color: var(--td-sky); width: 36px; height: 36px; border-radius: 50%; font-size: 20px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s; }
    .td-modal-close:hover { background: var(--td-sky); color: #fff; transform: rotate(90deg); }
    .td-modal-body { padding: 30px; }
    .td-modal-top-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 24px; }
    .td-modal-chart-section { background: rgba(6, 30, 48, 0.6); border: 1px solid rgba(47, 168, 255, 0.15); border-radius: 14px; padding: 24px; position: relative; }
    .td-modal-card { background: rgba(6, 30, 48, 0.6); border: 1px solid rgba(47, 168, 255, 0.15); border-radius: 14px; padding: 20px; position: relative; overflow: hidden; }
    .td-modal-card h4, .td-modal-chart-section h4 { margin: 0 0 12px; color: var(--td-amber); font-size: 16px; display: flex; align-items: center; gap: 8px; font-family: 'Poppins', sans-serif;}
    .td-modal-card p { margin: 0 0 15px; color: var(--td-text-soft); font-size: 14px; line-height: 1.5; min-height: 42px;}
    .td-progress { height: 6px; background: rgba(255, 255, 255, 0.1); border-radius: 4px; overflow: hidden; box-shadow: inset 0 1px 3px rgba(0,0,0,0.3); }
    .td-progress-fill { height: 100%; border-radius: 4px; width: 0%; transition: width 1.5s cubic-bezier(.4,2,.3,1); box-shadow: 0 0 10px currentColor; }
    .td-chart-container { position: relative; height: 220px; width: 100%; margin-top: 16px; }
    .td-pulse-dot { width: 8px; height: 8px; background: var(--td-success); border-radius: 50%; display: inline-block; box-shadow: 0 0 8px var(--td-success); animation: pulse 2s infinite; }

    @media (max-width: 768px) {
        .td-modal-top-stats { grid-template-columns: 1fr; }
    }

    /* --- BORDURES ULTRA-VISIBLES DU FORMULAIRE DE RESERVATION --- */
 .booking-card { 
    background: rgba(8, 38, 62, 0.95) !important; /* Même base que les panneaux de détails */
    border: 3px solid #FFC107 !important;
    border-radius: 30px !important;
    padding: 45px !important; 
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6) !important;
}

    .booking-form { margin-top: 30px; }
    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; font-size: 14px; color: rgba(255, 255, 255, 0.9); margin-bottom: 10px; font-weight: 500; }

    /* Forcer les bordures sur TOUS les inputs dans le form */
    .booking-form input, .booking-form select { 
        width: 100% !important;
        padding: 14px 20px !important; 
        background: rgba(0, 0, 0, 0.25) !important; 
        border: 2px solid rgba(255, 255, 255, 0.4) !important; /* Bordure Blanche bien épaisse */
        border-radius: 12px !important; 
        color: white !important;
        font-size: 15px !important; 
        transition: all 0.3s ease !important; 
        font-family: 'Poppins', sans-serif !important; 
        box-sizing: border-box !important;
    }

    .booking-form input:focus, .booking-form select:focus {
        border: 2px solid #FFC107 !important; /* Bordure Jaune au focus */
        background: rgba(255, 193, 7, 0.05) !important;
        outline: none !important;
    }

    .price-section { text-align: center; padding-bottom: 25px; margin-bottom: 25px; border-bottom: 1px solid rgba(255, 255, 255, 0.1); position: relative; }
    .price-label { font-size: 14px; color: rgba(255, 255, 255, 0.6); margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;}
    .price-value { font-family: 'Playfair Display', serif; font-size: 56px; font-weight: 700; background: linear-gradient(135deg, #FFC107, #FF9800); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin: 0; }
    
    /* HACK CSS POUR MASQUER LE \"mm/dd/yyyy\" natif */
    .date-input-clean::-webkit-datetime-edit { color: transparent; }
    .date-input-clean:focus::-webkit-datetime-edit, .date-input-clean.has-value::-webkit-datetime-edit { color: white; }
    
    /* --- DESIGN DES CHECKBOX BAGAGES --- */
    .luggage-options { display: flex; flex-direction: column; gap: 12px; margin-top: 15px; margin-bottom: 20px; }
    .luggage-option { 
        display: flex; align-items: center; padding: 14px 18px; 
        background: rgba(0, 0, 0, 0.2); 
        border: 2px solid rgba(255, 255, 255, 0.2) !important; /* Bordure par défaut */
        border-radius: 12px; cursor: pointer; transition: all 0.3s ease; 
    }
    .luggage-option:hover { border-color: rgba(255, 255, 255, 0.5) !important; }
    .luggage-option.selected { 
        background: rgba(255, 193, 7, 0.1); 
        border: 2px solid #FFC107 !important; /* Bordure Jaune de sélection */
    }
    .luggage-option input[type=\"checkbox\"] { display: none; }
    .luggage-icon { font-size: 20px; color: var(--td-sky); width: 34px; text-align: center; margin-right: 12px; transition: color 0.3s ease; }
    .luggage-option.selected .luggage-icon { color: #FFC107; }
    .luggage-text { flex: 1; font-size: 14px; color: white; font-weight: 500; }
    .luggage-price { font-size: 14px; font-weight: 700; color: var(--td-amber); }

    .btn-reserve { width: 100%; padding: 20px 35px; background: linear-gradient(135deg, #FFC107, #FF9800); color: #0B2D4A; border: none; border-radius: 18px; font-size: 17px; font-weight: 700; cursor: pointer; transition: all 0.4s ease; display: flex; align-items: center; justify-content: center; gap: 12px; box-shadow: 0 12px 35px rgba(255, 193, 7, 0.35); margin-top: 30px; text-decoration: none; }
    .btn-reserve:hover { transform: translateY(-4px); box-shadow: 0 18px 50px rgba(255, 193, 7, 0.5); }
    .btn-reserve i { transition: transform 0.3s ease; }
    .btn-reserve:hover i { transform: translateX(5px); }
    .guarantee-badge { display: flex; align-items: center; gap: 12px; padding: 18px; background: rgba(76, 175, 80, 0.1); border: 1px solid rgba(76, 175, 80, 0.3); border-radius: 15px; margin-top: 20px; }
    .guarantee-badge i { color: #4CAF50; font-size: 24px; }
    .guarantee-badge span { font-size: 13px; color: rgba(255, 255, 255, 0.85); line-height: 1.5; }
    * { will-change: auto; }

    /* --- SECTION TRANSPORTS SIMILAIRES --- */
    .td-related { padding: 60px 86px 80px; clear: both; display: block; width: 100%; box-sizing: border-box; }
    .td-related .td-head { text-align: center; margin-bottom: 40px; color: var(--td-text-main); font-size: 36px; }
    .td-related-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; }
    .td-related-card { display: flex; flex-direction: column; text-decoration: none !important; border-radius: 20px; border: 1px solid rgba(47, 168, 255, 0.2); background: linear-gradient(145deg, rgba(11, 45, 74, 0.8) 0%, rgba(5, 24, 39, 0.9) 100%); padding: 24px; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; }
    .td-related-card, .td-related-card:link, .td-related-card:visited, .td-related-card:active { color: var(--td-text-main) !important; }
    .td-related-card:hover { transform: translateY(-8px); border-color: rgba(255, 193, 7, 0.5); box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4), 0 0 20px rgba(255, 193, 7, 0.1); }
    .td-related-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, var(--td-sky), var(--td-amber)); opacity: 0; transition: opacity 0.3s ease; }
    .td-related-card:hover::before { opacity: 1; }
    .td-related-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; }
    .td-related-card h3 { margin: 0 0 16px; font-size: 22px; color: #ffffff !important; font-family: 'Playfair Display', Georgia, serif; line-height: 1.3; }
    .td-related-route { display: flex; flex-direction: column; gap: 10px; margin-bottom: 24px; flex-grow: 1; }
    .td-route-item { display: flex; align-items: center; gap: 12px; color: var(--td-text-soft) !important; font-size: 14px; }
    .td-route-item i { color: var(--td-sky); width: 16px; text-align: center; font-size: 16px; }
    .td-related-footer { display: flex; justify-content: space-between; align-items: flex-end; padding-top: 16px; border-top: 1px solid rgba(255,255,255,0.08); }
    .td-related-price { margin: 0; color: var(--td-amber) !important; font-size: 24px; font-weight: 800; font-family: 'Playfair Display', serif; }
    .td-related-price span { font-size: 13px; color: rgba(255,193,7,0.7); text-transform: uppercase; font-family: 'Poppins', sans-serif; }
    .td-related-action { color: var(--td-sky) !important; font-size: 14px; font-weight: 600; display: flex; align-items: center; gap: 6px; transition: gap 0.2s, color 0.2s; }
    .td-related-card:hover .td-related-action { gap: 10px; color: var(--td-amber) !important; }


    /* --- ANIMATIONS ET PARTICULES (CORRIGÉ ET ÉLÉGANT) --- */
    .particles-bg { 
        position: fixed; 
        top: 0; 
        left: 0; 
        width: 100%; 
        height: 100%; 
        pointer-events: none; 
        z-index: 1; /* Augmenté pour passer au-dessus du fond du body */
        overflow: hidden; 
    }

    .particles-bg .particle { 
        position: absolute; 
        width: 4px; 
        height: 4px; 
        background: var(--td-amber); 
        border-radius: 50%; 
        opacity: 0; 
        /* Ajout d'une lueur pour l'élégance */
        box-shadow: 0 0 10px var(--td-amber), 0 0 20px var(--td-amber);
        animation: particleFloat 12s infinite ease-in-out; 
    }

    @keyframes particleFloat { 
        0% { 
            transform: translateY(110vh) translateX(0) scale(0.5); 
            opacity: 0; 
        } 
        20% { 
            opacity: 0.6; /* Plus visible sur fond sombre */
        }
        80% { 
            opacity: 0.6; 
        }
        100% { 
            transform: translateY(-10vh) translateX(50px) scale(1.2); 
            opacity: 0; 
        } 
    }

    /* Ajustement des délais pour un flux continu */
    .particle:nth-child(1) { left: 5%; animation-delay: 0s; }
    .particle:nth-child(2) { left: 15%; animation-delay: 2s; width: 6px; height: 6px; }
    .particle:nth-child(3) { left: 25%; animation-delay: 4s; }
    .particle:nth-child(4) { left: 35%; animation-delay: 1s; width: 3px; height: 3px; }
    .particle:nth-child(5) { left: 45%; animation-delay: 7s; }
    .particle:nth-child(6) { left: 55%; animation-delay: 3s; width: 5px; height: 5px; }
    .particle:nth-child(7) { left: 65%; animation-delay: 5s; }
    .particle:nth-child(8) { left: 75%; animation-delay: 8s; width: 4px; height: 4px; }
    .particle:nth-child(9) { left: 85%; animation-delay: 2s; }
    .particle:nth-child(10) { left: 95%; animation-delay: 6s; }



    .transport-header-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba(11, 45, 74, 0.4);
        border: 1px solid rgba(47, 168, 255, 0.2);
        padding: 20px 30px;
        border-radius: 20px;
        margin-bottom: 30px;
        backdrop-filter: blur(10px);
    }

    .transport-info-main {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .trp-price-badge {
        background: rgba(255, 193, 7, 0.15);
        color: var(--trp-amber);
        padding: 8px 16px;
        border-radius: 999px;
        font-weight: 800;
        font-size: 18px;
        border: 1px solid rgba(255, 193, 7, 0.3);
    }

    .trp-btn-qr-elegant {
        display: flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, var(--trp-sky) 0%, #1E6FA8 100%);
        color: #fff;
        border: none;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 15px rgba(47, 168, 255, 0.3);
    }

    .trp-btn-qr-elegant:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(47, 168, 255, 0.5);
    }

    /* --- Modal stylisée --- */
    .qr-modal {
        display: none; 
        position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%;
        background-color: rgba(5, 22, 33, 0.85);
        backdrop-filter: blur(8px);
    }
    
    .qr-modal-content {
        background: linear-gradient(160deg, var(--trp-navy-800), var(--trp-navy-900));
        margin: 8% auto; 
        padding: 40px;
        border: 1px solid rgba(47, 168, 255, 0.3);
        width: 90%; max-width: 420px;
        text-align: center; 
        border-radius: 24px;
        color: white;
        position: relative;
        box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        animation: modalFadeIn 0.3s ease-out;
    }

    .close-modal {
        position: absolute;
        top: 20px;
        right: 25px;
        color: var(--trp-text-soft);
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
        transition: color 0.2s;
    }

    .close-modal:hover { color: var(--trp-amber); }

    .modal-title {
        font-family: 'Playfair Display', serif;
        font-size: 24px;
        margin: 0 0 10px;
    }
    
    .modal-title span { color: var(--trp-amber); }
    
    .modal-subtitle {
        color: var(--trp-text-soft);
        font-size: 14px;
        margin-bottom: 25px;
        line-height: 1.5;
    }

    .qr-frame {
        background: white; 
        padding: 15px; 
        border-radius: 20px;
        display: inline-block; 
        margin-bottom: 20px;
        border: 4px solid rgba(47, 168, 255, 0.2);
    }

    .qr-frame img { 
        width: 250px; 
        height: 250px; 
        display: block; 
        border-radius: 10px;
    }

    .qr-footer {
        font-size: 12px;
        color: var(--trp-sky-soft);
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    @keyframes modalFadeIn {
        from { opacity: 0; transform: scale(0.95) translateY(-20px); }
        to { opacity: 1; transform: scale(1) translateY(0); }
    }

/* --- SECTION MAP OPENSTREETMAP DIRECT --- */
    .td-osm-container {
        position: relative;
        border-radius: 20px; /* Harmonisation avec vos panels [cite: 108] */
        overflow: hidden;
        border: 2px solid rgba(47, 168, 255, 0.3);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
        height: 400px;
        margin-top: 30px;
        background: var(--td-navy-900);
    }

    /* Le \"Hack\" perfectionniste pour le Dark Mode sur OSM */
    .td-osm-iframe {
        width: 100%;
        height: 100%;
        border: none;
        filter: invert(90%) hue-rotate(180deg) brightness(95%) contrast(90%);
        /* Ce filtre inverse les couleurs claires en foncées et ajuste les teintes vers le bleu  */
    }

    .td-map-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 1px solid rgba(255, 193, 7, 0.2);
    }

    .td-isochrone-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        pointer-events: none;
        z-index: 5;
    }

    .td-reach-zone {
        fill: rgba(47, 168, 255, 0.2);
        stroke: var(--td-sky);
        stroke-width: 2;
        stroke-dasharray: 5;
        filter: drop-shadow(0 0 10px var(--td-sky));
        animation: zone-pulse 4s infinite ease-in-out;
        transform-origin: center;
    }

    @keyframes zone-pulse {
        0%, 100% { opacity: 0.4; transform: scale(1); }
        50% { opacity: 0.7; transform: scale(1.02); }
    }



    /* --- STATIC OSM MAP & AI ISOCHRONE --- */
.td-static-map-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    border: 2px solid rgba(47, 168, 255, 0.3);
    height: 400px;
    margin-top: 30px;
    background: var(--td-navy-900);
}

.td-static-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: invert(90%) hue-rotate(180deg) brightness(95%) contrast(90%);
    transition: transform 0.5s ease;
}

.td-static-map-wrapper:hover .td-static-img {
    transform: scale(1.05);
}

/* Calque SVG pour la zone d'autonomie */
.td-isochrone-overlay {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    pointer-events: none;
    z-index: 5;
}

.td-reach-zone {
    fill: rgba(47, 168, 255, 0.15);
    stroke: var(--td-sky);
    stroke-width: 2;
    stroke-dasharray: 5;
    filter: drop-shadow(0 0 10px var(--td-sky));
    animation: zone-pulse 4s infinite ease-in-out;
    transform-origin: center;
}

@keyframes zone-pulse {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 0.6; transform: scale(1.02); }
}

/* Marqueur CSS */
.td-css-marker {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -100%);
    z-index: 10;
}

.td-marker-pin {
    width: 30px; height: 30px;
    border-radius: 50% 50% 50% 0;
    background: var(--td-amber);
    transform: rotate(-45deg);
    border: 2px solid #fff;
    box-shadow: 0 0 15px rgba(255, 193, 7, 0.6);
}

.td-marker-pulse {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 15px; height: 15px;
    background: rgba(47, 168, 255, 0.5);
    border-radius: 50%;
    animation: map-pulse 2s infinite;
}

@keyframes map-pulse {
    0% { width: 15px; height: 15px; opacity: 1; }
    100% { width: 50px; height: 50px; opacity: 0; }
}

.td-map-legend {
    position: absolute;
    top: 15px; left: 15px;
    background: rgba(5, 22, 33, 0.9);
    border: 1px solid var(--td-sky);
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 10px;
    color: var(--td-sky-soft);
    text-transform: uppercase;
    z-index: 11;
}

/* --- MAP INTERACTIVE IA (DYNAMIC) --- */
.td-map-full-section {
    padding: 40px 86px;
    clear: both;
}

.td-map-wrapper {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    border: 2px solid rgba(47, 168, 255, 0.3);
    height: 500px;
    background: #051621;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
    z-index: 10;
}

#interactiveMap {
    width: 100%;
    height: 100%;
    z-index: 1;
}

/* Custom Marker Styling */
.custom-ai-marker {
    background: var(--td-amber);
    width: 15px;
    height: 15px;
    border-radius: 50%;
    border: 3px solid #fff;
    box-shadow: 0 0 20px var(--td-amber);
}

/* Fix pour les popups Leaflet en Dark Mode */
.leaflet-popup-content-wrapper {
    background: var(--td-navy-800) !important;
    color: #fff !important;
    border: 1px solid var(--td-sky) !important;
    border-radius: 12px !important;
}
.leaflet-popup-tip { background: var(--td-navy-800) !important; }

/* Style pour le tracé du trajet IA */
.ai-path-line {
    stroke-dasharray: 10, 15;
    animation: dash-flow 2s infinite linear;
    filter: drop-shadow(0 0 8px var(--td-sky));
}

@keyframes dash-flow {
    to { stroke-dashoffset: -25; }
}

/* Bulle de Tarif IA */
.ai-fare-bubble {
    background: rgba(11, 45, 74, 0.95);
    border: 1px solid var(--td-amber);
    border-radius: 8px;
    padding: 10px;
    color: white;
    font-family: 'Poppins', sans-serif;
    box-shadow: 0 4px 15px rgba(0,0,0,0.5);
}



</style>




<section class=\"td-hero\">
    <div class=\"td-hero-content\">
        <div class=\"td-topline\">
            <a class=\"td-link-back\" href=\"";
        // line 872
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transports");
        yield "\">Retour aux transports</a>
            <span class=\"td-badge\">";
        // line 873
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 873, $this->source); })()), "type", [], "any", false, false, false, 873), "html", null, true);
        yield "</span>
        </div>
        <h1 class=\"td-title\"><span>A propos</span> ";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 875, $this->source); })()), "nom", [], "any", false, false, false, 875), "html", null, true);
        yield "</h1>
        <p class=\"td-route\">
            ";
        // line 877
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 877, $this->source); })()), "departure", [], "any", false, false, false, 877) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 877, $this->source); })()), "destination", [], "any", false, false, false, 877))) {
            // line 878
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 878, $this->source); })()), "departure", [], "any", false, false, false, 878), "ville", [], "any", false, false, false, 878), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 878, $this->source); })()), "departure", [], "any", false, false, false, 878), "codeIata", [], "any", false, false, false, 878), "html", null, true);
            yield ") -> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 878, $this->source); })()), "destination", [], "any", false, false, false, 878), "ville", [], "any", false, false, false, 878), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 878, $this->source); })()), "destination", [], "any", false, false, false, 878), "codeIata", [], "any", false, false, false, 878), "html", null, true);
            yield ")
            ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 879
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 879, $this->source); })()), "pickup", [], "any", false, false, false, 879)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 880
            yield "                Aeroport de prise en charge: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 880, $this->source); })()), "pickup", [], "any", false, false, false, 880), "nom", [], "any", false, false, false, 880), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 880, $this->source); })()), "pickup", [], "any", false, false, false, 880), "codeIata", [], "any", false, false, false, 880), "html", null, true);
            yield ")
            ";
        } else {
            // line 882
            yield "                Les donnees d'itineraire ne sont pas completes pour ce transport.
            ";
        }
        // line 884
        yield "        </p>
        <div class=\"td-kpis\">
            <div class=\"td-kpi\">
                <strong>";
        // line 887
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 887, $this->source); })()), "prix", [], "any", false, false, false, 887), 2, ".", " "), "html", null, true);
        yield " TND</strong>
                <span>Prix actuel</span>
            </div>
            <div class=\"td-kpi\">
                <strong>";
        // line 891
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 891, $this->source); })()), "type", [], "any", false, false, false, 891), "html", null, true);
        yield "</strong>
                <span>Type de transport</span>
            </div>
            <div class=\"td-kpi\">
                <strong>";
        // line 895
        if ((($tmp =  !(null === (isset($context["routeDistanceKm"]) || array_key_exists("routeDistanceKm", $context) ? $context["routeDistanceKm"] : (function () { throw new RuntimeError('Variable "routeDistanceKm" does not exist.', 895, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["routeDistanceKm"]) || array_key_exists("routeDistanceKm", $context) ? $context["routeDistanceKm"] : (function () { throw new RuntimeError('Variable "routeDistanceKm" does not exist.', 895, $this->source); })()), "html", null, true);
            yield " km";
        } else {
            yield "N/A";
        }
        yield "</strong>
                <span>Distance estimee</span>
            </div>
            <div class=\"td-kpi\">
                <strong>";
        // line 899
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 899, $this->source); })()), "dateCreation", [], "any", false, false, false, 899)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 899, $this->source); })()), "dateCreation", [], "any", false, false, false, 899), "html", null, true)) : ("N/A"));
        yield "</strong>
                <span>Date de creation</span>
            </div>
        </div>
    </div>
</section>

<main class=\"td-main\">
    ";
        // line 907
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 907, $this->source); })()), "flashes", ["success"], "method", false, false, false, 907));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 908
            yield "        <div style=\"background: rgba(52, 211, 153, 0.15); border: 1px solid var(--td-success); color: var(--td-success); padding: 15px; border-radius: 10px; margin-bottom: 20px; text-align: center; font-weight: bold;\">
            <i class=\"fas fa-check-circle\"></i> ";
            // line 909
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 912
        yield "    <div class=\"transport-header-actions\">
    <div class=\"transport-info-main\">
        <h1 class=\"trp-title-sm\">";
        // line 914
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 914, $this->source); })()), "nom", [], "any", false, false, false, 914), "html", null, true);
        yield "</h1>
        <span class=\"trp-price-badge\">";
        // line 915
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 915, $this->source); })()), "prix", [], "any", false, false, false, 915), "html", null, true);
        yield " TND</span>
    </div>
    
    <button id=\"showQrBtn\" class=\"trp-btn-qr-elegant\">
        <svg width=\"20\" height=\"20\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm13-2h3v2h-3v-2zm-3 0h2v2h-2v-2zm3 3h3v2h-3v-2zm-2 3h2v2h-2v-2zm-3-3h2v2h-2v-2zm3 3h-2v2h-3v-2h2v-2h3v2z\"/></svg>
        Pass Mobile
    </button>
</div>

<div id=\"qrModal\" class=\"qr-modal\">
    <div class=\"qr-modal-content\">
        <span class=\"close-modal\">&times;</span>
        <h2 class=\"modal-title\">Pass Mobile <span>ASAFAR</span></h2>
        
        ";
        // line 930
        yield "        ";
        $context["vCardData"] = (((((((((((((((((((("BEGIN:VCARD
" . "VERSION:3.0
") . "FN:PASS ") . Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 933
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 933, $this->source); })()), "type", [], "any", false, false, false, 933))) . " - ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 933, $this->source); })()), "nom", [], "any", false, false, false, 933)) . "
") . "ORG:ASAFAR Mobility
") . "TITLE:Ref: #ASF-") . CoreExtension::getAttribute($this->env, $this->source,         // line 935
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 935, $this->source); })()), "id", [], "any", false, false, false, 935)) . "
") . "NOTE:ITINERAIRE : ") . (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 936
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 936, $this->source); })()), "departure", [], "any", false, false, false, 936)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 936, $this->source); })()), "departure", [], "any", false, false, false, 936), "ville", [], "any", false, false, false, 936)) : ("N/A"))) . " -> ") . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 936, $this->source); })()), "destination", [], "any", false, false, false, 936)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 936, $this->source); })()), "destination", [], "any", false, false, false, 936), "ville", [], "any", false, false, false, 936)) : ("N/A"))) . "\\n") . "PRIX : ") . CoreExtension::getAttribute($this->env, $this->source,         // line 937
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 937, $this->source); })()), "prix", [], "any", false, false, false, 937)) . " TND\\n") . "STATUS : Confirme
") . "END:VCARD");
        // line 941
        yield "
        <div class=\"qr-frame\">
           ";
        // line 944
        yield "           <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Endroid\QrCodeBundle\Twig\QrCodeRuntime')->qrCodeDataUriFunction((isset($context["vCardData"]) || array_key_exists("vCardData", $context) ? $context["vCardData"] : (function () { throw new RuntimeError('Variable "vCardData" does not exist.', 944, $this->source); })())), "html", null, true);
        yield "\" alt=\"QR Code ASAFAR\">
        </div>
        
        <div class=\"qr-footer\">
            Scan immédiat • 100% Hors-ligne
        </div>
    </div>
</div>

    <div class=\"td-grid\">
        <section class=\"td-panel\">
            <div class=\"td-details-stack\">
                <div class=\"td-block\">
                    <h3 class=\"td-section-title\">Details principaux</h3>
                    <div class=\"td-info-cards\">
                        <article class=\"td-info\">
                            <span class=\"label\">Type de transport</span>
                            <span class=\"value\">";
        // line 961
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 961, $this->source); })()), "type", [], "any", false, false, false, 961), "html", null, true);
        yield "</span>
                        </article>
                        <article class=\"td-info\">
                            <span class=\"label\">Coordonnees de l'entree</span>
                            <span class=\"value\">
                                ";
        // line 966
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 966, $this->source); })()), "latitude", [], "any", false, false, false, 966)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 966, $this->source); })()), "longitude", [], "any", false, false, false, 966)))) {
            // line 967
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 967, $this->source); })()), "latitude", [], "any", false, false, false, 967), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 967, $this->source); })()), "longitude", [], "any", false, false, false, 967), "html", null, true);
            yield "
                                ";
        } else {
            // line 969
            yield "                                    Non specifie
                                ";
        }
        // line 971
        yield "                            </span>
                        </article>
                        <article class=\"td-info\">
                            <span class=\"label\">Distance estimee</span>
                            <span class=\"value\">
                                ";
        // line 976
        if ((($tmp =  !(null === (isset($context["routeDistanceKm"]) || array_key_exists("routeDistanceKm", $context) ? $context["routeDistanceKm"] : (function () { throw new RuntimeError('Variable "routeDistanceKm" does not exist.', 976, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["routeDistanceKm"]) || array_key_exists("routeDistanceKm", $context) ? $context["routeDistanceKm"] : (function () { throw new RuntimeError('Variable "routeDistanceKm" does not exist.', 976, $this->source); })()), "html", null, true);
            yield " km";
        } else {
            yield "Non disponible";
        }
        // line 977
        yield "                            </span>
                        </article>
                    </div>
                </div>

                ";
        // line 982
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 982, $this->source); })()), "departure", [], "any", false, false, false, 982) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 982, $this->source); })()), "destination", [], "any", false, false, false, 982)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 982, $this->source); })()), "pickup", [], "any", false, false, false, 982))) {
            // line 983
            yield "                <div class=\"td-block\">
                    <h3 class=\"td-section-title\"><i class=\"fas fa-map-marked-alt\" style=\"margin-right: 10px; color: var(--td-amber);\"></i>Correspondance des aéroports</h3>
                    <div class=\"td-airports\">
                        ";
            // line 986
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 986, $this->source); })()), "departure", [], "any", false, false, false, 986)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 987
                yield "                        <article class=\"td-airport\">
                            <h4>Aeroport de depart</h4>
                            <p>";
                // line 989
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 989, $this->source); })()), "departure", [], "any", false, false, false, 989), "nom", [], "any", false, false, false, 989), "html", null, true);
                yield "<br>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 989, $this->source); })()), "departure", [], "any", false, false, false, 989), "ville", [], "any", false, false, false, 989), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 989, $this->source); })()), "departure", [], "any", false, false, false, 989), "pays", [], "any", false, false, false, 989), "html", null, true);
                yield "<br>IATA: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 989, $this->source); })()), "departure", [], "any", false, false, false, 989), "codeIata", [], "any", false, false, false, 989), "html", null, true);
                yield "<br>Categorie: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 989, $this->source); })()), "departure", [], "any", false, false, false, 989), "type", [], "any", false, false, false, 989), "html", null, true);
                yield "</p>
                        </article>
                        ";
            }
            // line 992
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 992, $this->source); })()), "destination", [], "any", false, false, false, 992)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 993
                yield "                        <article class=\"td-airport\">
                            <h4>Aeroport de destination</h4>
                            <p>";
                // line 995
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 995, $this->source); })()), "destination", [], "any", false, false, false, 995), "nom", [], "any", false, false, false, 995), "html", null, true);
                yield "<br>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 995, $this->source); })()), "destination", [], "any", false, false, false, 995), "ville", [], "any", false, false, false, 995), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 995, $this->source); })()), "destination", [], "any", false, false, false, 995), "pays", [], "any", false, false, false, 995), "html", null, true);
                yield "<br>IATA: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 995, $this->source); })()), "destination", [], "any", false, false, false, 995), "codeIata", [], "any", false, false, false, 995), "html", null, true);
                yield "<br>Categorie: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 995, $this->source); })()), "destination", [], "any", false, false, false, 995), "type", [], "any", false, false, false, 995), "html", null, true);
                yield "</p>
                        </article>
                        ";
            }
            // line 998
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 998, $this->source); })()), "pickup", [], "any", false, false, false, 998)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 999
                yield "                        <article class=\"td-airport\">
                            <h4>Aeroport de prise en charge</h4>
                            <p>";
                // line 1001
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1001, $this->source); })()), "pickup", [], "any", false, false, false, 1001), "nom", [], "any", false, false, false, 1001), "html", null, true);
                yield "<br>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1001, $this->source); })()), "pickup", [], "any", false, false, false, 1001), "ville", [], "any", false, false, false, 1001), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1001, $this->source); })()), "pickup", [], "any", false, false, false, 1001), "pays", [], "any", false, false, false, 1001), "html", null, true);
                yield "<br>IATA: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1001, $this->source); })()), "pickup", [], "any", false, false, false, 1001), "codeIata", [], "any", false, false, false, 1001), "html", null, true);
                yield "<br>Categorie: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1001, $this->source); })()), "pickup", [], "any", false, false, false, 1001), "type", [], "any", false, false, false, 1001), "html", null, true);
                yield "</p>
                        </article>
                        ";
            }
            // line 1004
            yield "                    </div>
                </div>
                ";
        }
        // line 1007
        yield "
                <div class=\"td-description\">
                    <h3 style=\"margin-bottom: 16px;\"><i class=\"fas fa-align-left\" style=\"margin-right: 10px; color: var(--td-amber);\"></i>Description</h3>
                    <p>";
        // line 1010
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "description", [], "any", true, true, false, 1010)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1010, $this->source); })()), "description", [], "any", false, false, false, 1010), "Aucune description detaillee n a encore ete ajoutee pour ce transport.")) : ("Aucune description detaillee n a encore ete ajoutee pour ce transport.")), "html", null, true);
        yield "</p>
                </div>
            </div>

        </section>

        <aside class=\"td-sidebar\">
            ";
        // line 1017
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1017, $this->source); })()), "type", [], "any", false, false, false, 1017) == "AVION")) {
            // line 1018
            yield "                <div class=\"td-ai-panel\" id=\"aiPredictorPanel\">
                    <div class=\"td-ai-header\">
                        <div class=\"td-ai-icon\">IA</div>
                        <div>
                            <h4 class=\"td-ai-title\">Intelligence Avancée</h4>
                            <div class=\"td-ai-subtitle\">Prédiction de Retard & Ponctualité</div>
                        </div>
                    </div>
                    <div id=\"aiLoading\" class=\"td-ai-loading\">
                        <div class=\"td-ai-spinner\"></div>
                        <p id=\"aiLoadingText\">Initialisation du réseau neuronal...</p>
                    </div>
                    <div id=\"aiResult\" class=\"td-ai-result\"></div>
                </div>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1032
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1032, $this->source); })()), "type", [], "any", false, false, false, 1032) == "VOITURE")) {
            // line 1033
            yield "                <div class=\"td-ai-panel\" id=\"aiCarCarbonPanel\">
                    <div class=\"td-ai-header\">
                        <div class=\"td-ai-icon\" style=\"color: var(--td-success); background: rgba(52, 211, 153, 0.15); border-color: rgba(52, 211, 153, 0.3);\">IA</div>
                        <div>
                            <h4 class=\"td-ai-title\">Éco-IA Analytique</h4>
                            <div class=\"td-ai-subtitle\">Analyse d'Emissions Carbone</div>
                        </div>
                    </div>
                    <div id=\"aiCarLoading\" class=\"td-ai-loading\">
                        <div class=\"td-ai-spinner\" style=\"border-top-color: var(--td-success);\"></div>
                        <p id=\"aiCarLoadingText\">Analyse NLP de la description...</p>
                    </div>
                    <div id=\"aiCarResult\" class=\"td-ai-result\"></div>
                </div>
            ";
        }
        // line 1048
        yield "
            <div class=\"booking-card\" id=\"reservation\">
    <div class=\"price-section\">
        ";
        // line 1051
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1051, $this->source); })()), "statut", [], "any", false, false, false, 1051) == "flash")) {
            // line 1052
            yield "            <div style=\"position: absolute; top: -15px; right: -15px; background: #ef4444; color: white; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: bold; animation: pulse 2s infinite; box-shadow: 0 0 15px rgba(239, 68, 68, 0.4);\">
                <i class=\"fas fa-bolt\"></i> OFFRE FLASH -";
            // line 1053
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(abs(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1053, $this->source); })()), "variation_pourcentage", [], "any", false, false, false, 1053)), "html", null, true);
            yield "%
            </div>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1055
(isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1055, $this->source); })()), "statut", [], "any", false, false, false, 1055) == "high_demand")) {
            // line 1056
            yield "            <div style=\"position: absolute; top: -15px; right: -15px; background: #FF9800; color: white; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: bold; box-shadow: 0 0 15px rgba(255, 152, 0, 0.4);\">
                <i class=\"fas fa-fire\"></i> TRÈS DEMANDÉ
            </div>
        ";
        }
        // line 1060
        yield "
        <p class=\"price-label\">Total Estimé</p>

        <div style=\"display: flex; justify-content: center; align-items: baseline; gap: 10px; margin: 10px 0;\">
            ";
        // line 1064
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1064, $this->source); })()), "statut", [], "any", false, false, false, 1064) == "flash")) {
            // line 1065
            yield "                <span style=\"text-decoration: line-through; color: rgba(255,255,255,0.4); font-size: 20px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1065, $this->source); })()), "prix_base", [], "any", false, false, false, 1065), "html", null, true);
            yield "</span>
            ";
        }
        // line 1067
        yield "            <p class=\"price-value\" style=\"margin: 0; ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1067, $this->source); })()), "statut", [], "any", false, false, false, 1067) == "flash")) {
            yield "background: linear-gradient(135deg, #ff6b6b, #ef4444); -webkit-background-clip: text;";
        }
        yield "\">
                <span id=\"live-price\">";
        // line 1068
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1068, $this->source); })()), "prix_actuel", [], "any", false, false, false, 1068), "html", null, true);
        yield "</span> <span style=\"font-size: 24px;\">TND</span>
            </p>
        </div>

        <p style=\"font-size: 13px; color: ";
        // line 1072
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1072, $this->source); })()), "statut", [], "any", false, false, false, 1072) == "flash")) {
            yield "#ff8787";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1072, $this->source); })()), "statut", [], "any", false, false, false, 1072) == "high_demand")) {
            yield "#ffb74d";
        } else {
            yield "var(--td-sky-soft)";
        }
        yield "; margin: 8px 0 15px 0; font-weight: 500;\">
            ";
        // line 1073
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1073, $this->source); })()), "message", [], "any", false, false, false, 1073), "html", null, true);
        yield "
        </p>

        ";
        // line 1076
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1076, $this->source); })()), "metrics", [], "any", false, false, false, 1076))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1077
            yield "        <div style=\"background: rgba(0,0,0,0.2); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 10px; text-align: left; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-top: 15px;\">
            <div style=\"font-size: 11px; color: var(--td-text-soft);\"><i class=\"fas fa-hourglass-half\" style=\"color: var(--td-sky); width: 14px;\"></i> Pression: <strong style=\"color: white;\">";
            // line 1078
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1078, $this->source); })()), "metrics", [], "any", false, false, false, 1078), "temps_pression", [], "any", false, false, false, 1078), "html", null, true);
            yield "</strong></div>
            <div style=\"font-size: 11px; color: var(--td-text-soft);\"><i class=\"fas fa-users\" style=\"color: var(--td-amber); width: 14px;\"></i> Demande: <strong style=\"color: white;\">";
            // line 1079
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1079, $this->source); })()), "metrics", [], "any", false, false, false, 1079), "remplissage", [], "any", false, false, false, 1079), "html", null, true);
            yield "</strong></div>
        </div>
        ";
        }
        // line 1082
        yield "    </div>                
    
    ";
        // line 1084
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1084, $this->source); })()), 'form_start', ["attr" => ["class" => "booking-form"]]);
        yield "
        
        ";
        // line 1086
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1086, $this->source); })()), "type", [], "any", false, false, false, 1086) == "AVION")) {
            // line 1087
            yield "            ";
            // line 1088
            yield "            <div class=\"form-group\">
                <label>Date de départ</label>
                <div class=\"date-input-clean\" style=\"display: flex; align-items: center; background: rgba(255,255,255,0.05); padding: 10px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1);\">
                    <i class=\"fas fa-calendar-alt\" style=\"margin-right: 10px; color: var(--td-sky);\"></i>
                    ";
            // line 1092
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1092, $this->source); })()), "dateDepart", [], "any", false, false, false, 1092), 'widget', ["attr" => ["style" => "background: transparent; border: none; color: white; outline: none; width: 100%;", "min" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]]);
            // line 1097
            yield "
                </div>
            </div>

            <div style=\"display: flex; gap: 10px; margin-top: 15px;\">
                <div class=\"form-group\" style=\"flex: 1;\">";
            // line 1102
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1102, $this->source); })()), "nbAdultes", [], "any", false, false, false, 1102), 'label', ["label" => "Adultes"]);
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1102, $this->source); })()), "nbAdultes", [], "any", false, false, false, 1102), 'widget');
            yield "</div>
                <div class=\"form-group\" style=\"flex: 1;\">";
            // line 1103
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1103, $this->source); })()), "nbEnfants", [], "any", false, false, false, 1103), 'label', ["label" => "Enfants"]);
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1103, $this->source); })()), "nbEnfants", [], "any", false, false, false, 1103), 'widget');
            yield "</div>
                <div class=\"form-group\" style=\"flex: 1;\">";
            // line 1104
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1104, $this->source); })()), "nbBebes", [], "any", false, false, false, 1104), 'label', ["label" => "Bébés"]);
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1104, $this->source); })()), "nbBebes", [], "any", false, false, false, 1104), 'widget');
            yield "</div>
            </div>
            
            <div class=\"form-group\">
                <label style=\"margin-top: 15px;\">Options de Bagages</label>
                <div class=\"luggage-options\">
                    <label class=\"luggage-option selected\">
                        <input type=\"checkbox\" class=\"luggage-chk\" data-price=\"0\" checked disabled>
                        <i class=\"fas fa-suitcase-rolling luggage-icon\"></i>
                        <span class=\"luggage-text\">Bagage à main (10kg)</span>
                        <span class=\"luggage-price\">Inclus</span>
                    </label>
                    <label class=\"luggage-option\">
                        <input type=\"checkbox\" class=\"luggage-chk\" data-price=\"80\">
                        <i class=\"fas fa-suitcase luggage-icon\"></i>
                        <span class=\"luggage-text\">Bagage lourd (23kg)</span>
                        <span class=\"luggage-price\">+80 TND</span>
                    </label>
                </div>
            </div>
            
            ";
            // line 1126
            yield "            <div style=\"display: none;\">
                ";
            // line 1127
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1127, $this->source); })()), "dateArrivee", [], "any", false, false, false, 1127), 'widget');
            yield "
            </div>

        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1130
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1130, $this->source); })()), "type", [], "any", false, false, false, 1130) == "VOITURE")) {
            // line 1131
            yield "            ";
            // line 1132
            yield "            <div class=\"form-group\" style=\"margin-top: 15px;\">
                <label>Date de retour (Arrivée)</label>
                <div class=\"date-input-clean\" style=\"display: flex; align-items: center; background: rgba(255,255,255,0.05); padding: 10px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1);\">
                    <i class=\"fas fa-calendar-check\" style=\"margin-right: 10px; color: var(--td-sky);\"></i>
                    ";
            // line 1136
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1136, $this->source); })()), "dateArrivee", [], "any", false, false, false, 1136), 'widget', ["attr" => ["style" => "background: transparent; border: none; color: white; outline: none; width: 100%;", "min" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]]);
            // line 1141
            yield "
                </div>
            </div>
            
            ";
            // line 1146
            yield "            <div style=\"display: none;\">
                ";
            // line 1147
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1147, $this->source); })()), "dateDepart", [], "any", false, false, false, 1147), 'widget');
            yield "
                ";
            // line 1148
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1148, $this->source); })()), "nbAdultes", [], "any", false, false, false, 1148), 'widget');
            yield "
                ";
            // line 1149
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1149, $this->source); })()), "nbEnfants", [], "any", false, false, false, 1149), 'widget');
            yield "
                ";
            // line 1150
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1150, $this->source); })()), "nbBebes", [], "any", false, false, false, 1150), 'widget');
            yield "
            </div>
        ";
        }
        // line 1153
        yield "        
        <button type=\"submit\" class=\"btn-reserve\" style=\"margin-top: 20px;\"><span>Confirmer la réservation</span><i class=\"fas fa-arrow-right\"></i></button>
        <div class=\"guarantee-badge\">
            <i class=\"fas fa-shield-alt\"></i>
            <span>Réservation sécurisée - Annulation gratuite jusqu'à 48 heures avant le départ</span>
        </div>
    ";
        // line 1159
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1159, $this->source); })()), 'form_end');
        yield "
</div>
        </aside>
    </div>
</main>



";
        // line 1168
        if ((Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1168, $this->source); })()), "type", [], "any", false, false, false, 1168)) == "VOITURE")) {
            // line 1169
            yield "    ";
            // line 1170
            yield "    ";
            $context["airport"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1170, $this->source); })()), "pickup", [], "any", false, false, false, 1170);
            // line 1171
            yield "    ";
            $context["mapLat"] = ((((isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1171, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1171, $this->source); })()), "lat", [], "any", false, false, false, 1171))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1171, $this->source); })()), "lat", [], "any", false, false, false, 1171)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1171, $this->source); })()), "latitude", [], "any", false, false, false, 1171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1171, $this->source); })()), "latitude", [], "any", false, false, false, 1171)) : (36.8516))));
            // line 1172
            yield "    ";
            $context["mapLng"] = ((((isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1172, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1172, $this->source); })()), "lng", [], "any", false, false, false, 1172))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1172, $this->source); })()), "lng", [], "any", false, false, false, 1172)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1172, $this->source); })()), "longitude", [], "any", false, false, false, 1172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1172, $this->source); })()), "longitude", [], "any", false, false, false, 1172)) : (10.2272))));
            // line 1173
            yield "    ";
            $context["airportName"] = (((($tmp = (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1173, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1173, $this->source); })()), "nom", [], "any", false, false, false, 1173)) : ("Aéroport de prise en charge"));
            // line 1174
            yield "
    <style>
        .btn-route {
    background: rgba(52, 152, 219, 0.1) !important;
    color: #3498db !important;
    border: 1px solid #3498db !important;
    padding: 10px 20px !important;
    border-radius: 8px !important;
    cursor: pointer !important;
    font-weight: 700 !important;
    font-size: 13px !important;
    transition: all 0.3s ease !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
}

.btn-route:hover {
    background: rgba(52, 152, 219, 0.3) !important;
    transform: translateY(-2px);
}

.btn-route.active {
    background: #2ed573 !important;
    color: #fff !important;
    border-color: #2ed573 !important;
    box-shadow: 0 0 15px rgba(46, 213, 115, 0.4) !important;
}
    </style>
    <hr style=\"border-color: rgba(255,255,255,0.1);\">

    <div class=\"td-map-full-section\" style=\"position: relative; margin-top: 50px;\">
        <div class=\"td-map-header\" style=\"display: flex; flex-direction: column; gap: 10px; margin-bottom: 25px;\">
            <div style=\"display: flex; align-items: center; gap: 15px;\">
             
            </div>
            ";
            // line 1211
            yield "            <div id=\"route-selector\" style=\"display: flex; gap: 12px; flex-wrap: wrap; margin-top: 10px; min-height: 45px;\">
    ";
            // line 1213
            yield "    <span id=\"route-loading-status\" style=\"color: #888; font-size: 13px;\">Initialisation des tracés IA...</span>
</div>
        </div>

        <div class=\"td-map-wrapper\" style=\"position: relative; border-radius: 16px; overflow: hidden; height: 600px; border: 1px solid rgba(255,255,255,0.1);\">
            ";
            // line 1219
            yield "            <div id=\"interactiveMap\" style=\"width: 100%; height: 100%; background: #0b0e14;\"></div>
            
            ";
            // line 1222
            yield "            <div style=\"position: absolute; top: 20px; right: 20px; z-index: 1000; background: rgba(5, 22, 33, 0.9); backdrop-filter: blur(8px); padding: 15px 20px; border-radius: 12px; border: 1px solid var(--td-sky);\">
                <span style=\"color: var(--td-sky-soft); font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;\">Localisation</span>
                <div style=\"color: #fff; font-size: 14px; margin-top: 4px; font-weight: 600;\">
                    <i class=\"fas fa-car-side\" style=\"color: var(--td-amber); margin-right: 8px;\"></i> ";
            // line 1225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["airportName"]) || array_key_exists("airportName", $context) ? $context["airportName"] : (function () { throw new RuntimeError('Variable "airportName" does not exist.', 1225, $this->source); })()), "html", null, true);
            yield "
                </div>
            </div>

            ";
            // line 1230
            yield "            <div id=\"ia-dashboard\" style=\"display: none; position: absolute; top: 20px; left: 20px; z-index: 1000; background: rgba(5, 22, 33, 0.9); backdrop-filter: blur(8px); padding: 18px; border-radius: 12px; border: 1px solid #2ed573; min-width: 260px; box-shadow: 0 8px 32px rgba(0,0,0,0.5);\">
                <div style=\"display: flex; align-items: center; gap: 10px; margin-bottom: 12px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px;\">
                    <i class=\"fas fa-brain\" style=\"color: #2ed573; font-size: 18px;\"></i>
                    <span style=\"color: #fff; font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;\">IA Navigation System</span>
                </div>
                
                <div id=\"ia-alert\" style=\"display: none; background: rgba(255, 71, 87, 0.15); border-left: 3px solid #ff4757; padding: 8px; margin-bottom: 12px; color: #ff4757; font-size: 11px; font-weight: 600;\"></div>

              <div style=\"display: flex; flex-direction: column; gap: 9px;\">

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-traffic-light\"></i> Trafic :</span>
        <strong id=\"ia-trafic\" style=\"font-size: 13px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-clock\"></i> Arrivée :</span>
        <strong id=\"ia-eta\" style=\"color: #fff; font-size: 13px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-stopwatch\"></i> Fourchette :</span>
        <strong id=\"ia-eta-range\" style=\"color: #aaa; font-size: 12px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-tachometer-alt\"></i> Vitesse moy. :</span>
        <strong id=\"ia-vitesse\" style=\"color: #fff; font-size: 13px;\">-</strong>
    </div>

    <div style=\"border-top: 1px solid rgba(255,255,255,0.07); margin: 2px 0;\"></div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-gas-pump\"></i> Conso :</span>
        <strong id=\"ia-conso\" style=\"color: #fff; font-size: 13px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-tint\"></i> L/100km :</span>
        <strong id=\"ia-l100\" style=\"color: #fff; font-size: 13px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-euro-sign\"></i> Coût est. :</span>
        <strong id=\"ia-cout\" style=\"color: #ffa502; font-size: 13px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-leaf\"></i> CO₂ :</span>
        <strong id=\"ia-co2\" style=\"color: #2ed573; font-size: 13px;\">-</strong>
    </div>

    <div style=\"border-top: 1px solid rgba(255,255,255,0.07); margin: 2px 0;\"></div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-bullseye\"></i> Fiabilité :</span>
        <div style=\"display: flex; align-items: center; gap: 6px;\">
            <div style=\"width: 60px; height: 5px; background: rgba(255,255,255,0.1); border-radius: 3px; overflow: hidden;\">
                <div id=\"ia-fiab-bar\" style=\"height: 100%; background: #2ed573; width: 0%; transition: width 0.6s ease; border-radius: 3px;\"></div>
            </div>
            <strong id=\"ia-fiab\" style=\"color: #fff; font-size: 12px;\">-</strong>
        </div>
    </div>

</div>
            </div>
            
            ";
            // line 1298
            yield "            <div id=\"map-loader\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1001; background: rgba(5, 22, 33, 0.95); border: 1px solid var(--td-sky); padding: 20px 40px; border-radius: 12px; color: white; text-align: center; box-shadow: 0 0 30px rgba(0,0,0,0.5);\">
                <i class=\"fas fa-sync fa-spin\" style=\"color: var(--td-sky); font-size: 24px; margin-bottom: 10px;\"></i>
                <div style=\"font-size: 14px; font-weight: 600;\">Calcul des options de route...</div>
            </div>
        </div>
    </div>

    
";
        }
        // line 1307
        yield "<section class=\"td-related\">
    <h2 class=\"td-head\">Transports similaires</h2>
    
    ";
        // line 1310
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["relatedTransports"]) || array_key_exists("relatedTransports", $context) ? $context["relatedTransports"] : (function () { throw new RuntimeError('Variable "relatedTransports" does not exist.', 1310, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1311
            yield "        <div class=\"td-related-grid\">
            ";
            // line 1312
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["relatedTransports"]) || array_key_exists("relatedTransports", $context) ? $context["relatedTransports"] : (function () { throw new RuntimeError('Variable "relatedTransports" does not exist.', 1312, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1313
                yield "                <a class=\"td-related-card\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 1313)]), "html", null, true);
                yield "\">
                    
                    <div class=\"td-related-header\">
                        <span class=\"td-badge\">
                            ";
                // line 1317
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 1317) == "AVION")) {
                    // line 1318
                    yield "                                <i class=\"fas fa-plane\"></i>
                            ";
                } else {
                    // line 1320
                    yield "                                <i class=\"fas fa-car\"></i>
                            ";
                }
                // line 1322
                yield "                            &nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 1322), "html", null, true);
                yield "
                        </span>
                    </div>
                    
                    <h3>";
                // line 1326
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 1326), "html", null, true);
                yield "</h3>
                    
                    <div class=\"td-related-route\">
                        ";
                // line 1329
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "departure", [], "any", false, false, false, 1329) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destination", [], "any", false, false, false, 1329))) {
                    // line 1330
                    yield "                            <div class=\"td-route-item\"><i class=\"fas fa-plane-departure\"></i><span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "departure", [], "any", false, false, false, 1330), "ville", [], "any", false, false, false, 1330), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "departure", [], "any", false, false, false, 1330), "codeIata", [], "any", false, false, false, 1330), "html", null, true);
                    yield ")</span></div>
                            <div class=\"td-route-item\"><i class=\"fas fa-plane-arrival\"></i><span>";
                    // line 1331
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destination", [], "any", false, false, false, 1331), "ville", [], "any", false, false, false, 1331), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destination", [], "any", false, false, false, 1331), "codeIata", [], "any", false, false, false, 1331), "html", null, true);
                    yield ")</span></div>
                        ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 1332
$context["item"], "pickup", [], "any", false, false, false, 1332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1333
                    yield "                            <div class=\"td-route-item\"><i class=\"fas fa-map-marker-alt\"></i><span>Prise en charge : ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "pickup", [], "any", false, false, false, 1333), "nom", [], "any", false, false, false, 1333), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "pickup", [], "any", false, false, false, 1333), "codeIata", [], "any", false, false, false, 1333), "html", null, true);
                    yield ")</span></div>
                        ";
                } else {
                    // line 1335
                    yield "                            <div class=\"td-route-item\"><i class=\"fas fa-route\"></i><span>Itinéraire détaillé sur demande</span></div>
                        ";
                }
                // line 1337
                yield "                    </div>

                    <div class=\"td-related-footer\">
                        <p class=\"td-related-price\">";
                // line 1340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 1340), 2, ".", " "), "html", null, true);
                yield " <span>TND</span></p>
                        <span class=\"td-related-action\">Voir détails <i class=\"fas fa-arrow-right\"></i></span>
                    </div>
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1345
            yield "        </div>
    ";
        } else {
            // line 1347
            yield "        <div class=\"td-empty\" style=\"padding: 40px; border: 1px dashed rgba(47, 168, 255, 0.4); border-radius: 14px; text-align: center; color: var(--td-text-soft);\">
            <i class=\"fas fa-search\" style=\"font-size: 38px; color: var(--td-sky-soft); margin-bottom: 16px; display: block; opacity: 0.6;\"></i>
            <p style=\"margin: 0; font-size: 16px;\">Aucun transport similaire n'a encore été trouvé pour ce type.</p>
        </div>
    ";
        }
        // line 1352
        yield "</section>

";
        // line 1354
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1354, $this->source); })()), "type", [], "any", false, false, false, 1354) == "AVION")) {
            // line 1355
            yield "<div class=\"td-modal-overlay\" id=\"aiDetailsModal\">
    <div class=\"td-modal\">
        <div class=\"td-modal-header\">
            <h3 class=\"td-modal-title\"><i class=\"fas fa-brain\"></i> Rapport Analytique de l'IA</h3>
            <button class=\"td-modal-close\" id=\"closeAiModal\">&times;</button>
        </div>
        <div class=\"td-modal-body\">
            <div class=\"td-modal-top-stats\">
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-cloud-sun\"></i> Météo Aéronautique</h4>
                    <p id=\"modalWeatherDesc\">Analyse en cours...</p>
                    <div class=\"td-progress\"><div class=\"td-progress-fill\" id=\"modalWeatherBar\"></div></div>
                </div>
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-satellite-dish\"></i> Trafic & Encombrement</h4>
                    <p id=\"modalTrafficDesc\">Analyse en cours...</p>
                    <div class=\"td-progress\"><div class=\"td-progress-fill\" id=\"modalTrafficBar\"></div></div>
                </div>
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-route\"></i> Profil de la Route</h4>
                    <p id=\"modalRouteDesc\" style=\"font-size: 18px; font-weight: bold; color: white; margin-top: 10px;\">Analyse en cours...</p>
                    <span style=\"font-size: 12px; color: var(--td-sky-soft);\"><span class=\"td-pulse-dot\"></span> Connexion satellite active</span>
                </div>
            </div>

            <div class=\"td-modal-chart-section\">
                <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                    <h4><i class=\"fas fa-chart-line\"></i> Évolution Historique de la Ponctualité (6 derniers mois)</h4>
                    <div style=\"text-align: right;\">
                        <span style=\"font-size: 12px; color: var(--td-text-soft); text-transform: uppercase;\">Moyenne globale</span><br>
                        <strong id=\"modalHistoricalDesc\" style=\"font-size: 24px; color: var(--td-success); font-family: 'Playfair Display', serif;\">--%</strong>
                    </div>
                </div>
                <div class=\"td-chart-container\">
                    <canvas id=\"punctualityChart\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 1395
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1395, $this->source); })()), "type", [], "any", false, false, false, 1395) == "VOITURE")) {
            // line 1396
            yield "<div class=\"td-modal-overlay\" id=\"aiCarDetailsModal\">
    <div class=\"td-modal\">
        <div class=\"td-modal-header\">
            <h3 class=\"td-modal-title\"><i class=\"fas fa-leaf\"></i> Bilan Éco-Responsable ASAFAR</h3>
            <button class=\"td-modal-close\" id=\"closeAiCarModal\">&times;</button>
        </div>
        <div class=\"td-modal-body\">
            <div class=\"td-modal-top-stats\">
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-car\"></i> Modèle Analysé</h4>
                    <div id=\"modalCarBrandVal\" class=\"td-modal-val\" style=\"color: var(--td-sky);\">...</div>
                    <p id=\"modalCarBrandSub\" class=\"td-modal-sub\">Détection via description...</p>
                </div>
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-smog\"></i> Empreinte Totale</h4>
                    <div id=\"modalCarTotalVal\" class=\"td-modal-val\" style=\"color: #ef4444;\">...</div>
                    <p id=\"modalCarTotalDesc\" class=\"td-modal-sub\">Sur la durée du trajet</p>
                </div>
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-tree\"></i> Compensation</h4>
                    <div id=\"modalCarTreesVal\" class=\"td-modal-val\" style=\"color: var(--td-success);\">0.0</div>
                    <p class=\"td-modal-sub\">Arbres à planter pour compenser</p>
                </div>
            </div>

            <div class=\"td-modal-chart-section\">
                <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;\">
                    <h4><i class=\"fas fa-balance-scale\"></i> Comparaison des émissions (g/km)</h4>
                    <div id=\"modalCarEmissionVal\" style=\"font-size: 22px; font-weight: 800; color: white; font-family: 'Playfair Display', serif;\">...</div>
                </div>
                <div class=\"td-chart-container\" style=\"height: 180px;\">
                    <canvas id=\"carEmissionChart\"></canvas>
                </div>
                <div id=\"modalCarEcoDesc\" class=\"td-eco-advice\" style=\"margin-top: 20px; background: rgba(52, 211, 153, 0.1); border-left-color: var(--td-success);\">
                    Chargement des recommandations...
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 1437
        yield "
<script>
document.addEventListener('DOMContentLoaded', () => {
    const type = \"";
        // line 1440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1440, $this->source); })()), "type", [], "any", false, false, false, 1440), "html", null, true);
        yield "\";
    const distStr = \"";
        // line 1441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("routeDistanceKm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["routeDistanceKm"]) || array_key_exists("routeDistanceKm", $context) ? $context["routeDistanceKm"] : (function () { throw new RuntimeError('Variable "routeDistanceKm" does not exist.', 1441, $this->source); })()), "0")) : ("0")), "html", null, true);
        yield "\";
    const dist = parseFloat(distStr) || 0;
    const id = parseInt(\"";
        // line 1443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "id", [], "any", true, true, false, 1443)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1443, $this->source); })()), "id", [], "any", false, false, false, 1443), "0")) : ("0")), "html", null, true);
        yield "\");
    const today = new Date().toISOString().split('T')[0];

    // --- GESTION VISUELLE DE L'INPUT DATE (Masquer mm/dd/yyyy) ---
    const dateInputs = document.querySelectorAll('input[type=\"date\"]');
    dateInputs.forEach(input => {
        if(input.value) input.classList.add('has-value');
        input.addEventListener('input', function() {
            if (this.value) this.classList.add('has-value');
            else this.classList.remove('has-value');
        });
    });

    // --- GESTION UI DES CHECKBOX BAGAGES ---
    const luggageCheckboxes = document.querySelectorAll('.luggage-chk');
    luggageCheckboxes.forEach(chk => {
        chk.addEventListener('change', function() {
            const parent = this.closest('.luggage-option');
            if (this.checked) parent.classList.add('selected');
            else parent.classList.remove('selected');
            
            if (typeof updateFlightPrice === \"function\") updateFlightPrice();
        });
    });

    // --- VALIDATION DES DATES ---
    const startInput = document.getElementById('transport_reservation_dateDebut');
    const endInput = document.getElementById('transport_reservation_dateFin');
    
    if (startInput) {
        startInput.setAttribute('min', today);
        startInput.addEventListener('change', () => {
            if (endInput) {
                endInput.setAttribute('min', startInput.value);
                if (endInput.value && endInput.value < startInput.value) {
                    endInput.value = startInput.value;
                }
                if (typeof updateCarPrice === \"function\") updateCarPrice();
            }
        });
    }
    if (endInput) { endInput.setAttribute('min', today); }

    // --- IA AVION ---
    if (type === 'AVION') {
        const panel = document.getElementById('aiPredictorPanel');
        if(panel) {
            let baseProb = 98 - (dist / 1200) - (id % 7);
            if(baseProb > 99) baseProb = 99;
            if(baseProb < 65) baseProb = 65 + (id % 20);
            let probColor = baseProb < 70 ? '#ef4444' : (baseProb < 80 ? 'var(--td-amber)' : 'var(--td-success)');
            let trafficFactor = (dist > 2000 || id % 3 === 0) ? { label: 'Congestion modérée', class: 'risk-medium' } : { label: 'Trafic fluide', class: 'risk-low' };
            let weatherFactor = (id % 12 === 0) ? { label: 'Alerte vents violents', class: 'risk-high' } : (id % 5 === 0 ? { label: 'Perturbations possibles', class: 'risk-medium' } : { label: 'Conditions optimales', class: 'risk-low' });
            
            const texts = [\"Analyse des historiques...\", \"Évaluation du trafic...\", \"Corrélation météo...\", \"Modélisation...\"];
            let step = 0;
            const loadingText = document.getElementById('aiLoadingText');
            let isLoaded = false;
            
            const interval = setInterval(() => {
                step++;
                if(step < texts.length) { loadingText.innerText = texts[step]; }
                else {
                    clearInterval(interval);
                    document.getElementById('aiLoading').style.display = 'none';
                    isLoaded = true;
                    
                    const res = document.getElementById('aiResult');
                    res.style.display = 'block';
                    res.innerHTML = `<div class=\"td-ai-score-wrap\"><div class=\"td-ai-score-val\" style=\"color: \${probColor}\">\${baseProb.toFixed(1)}%</div><div style=\"font-size: 13px; color: var(--td-text-soft);\">Probabilité d'arrivée à l'heure</div></div><div class=\"td-ai-grid\"><div class=\"td-ai-factor \${trafficFactor.class}\"><span>Trafic Route</span><strong>\${trafficFactor.label}</strong></div><div class=\"td-ai-factor \${weatherFactor.class}\"><span>Météo Estimée</span><strong>\${weatherFactor.label}</strong></div></div><div class=\"td-ai-hint\">Cliquez pour voir la courbe détaillée</div>`;
                    
                    document.getElementById('modalWeatherDesc').innerText = `\${weatherFactor.label}. Visibilité satisfaisante.`;
                    document.getElementById('modalTrafficDesc').innerText = `\${trafficFactor.label} prévu sur les couloirs aériens.`;
                    document.getElementById('modalHistoricalDesc').innerText = `\${(85 + (id % 15))}%`;
                    document.getElementById('modalRouteDesc').innerText = dist > 0 ? `Itinéraire de \${dist} km` : `Plan de vol standard`;

                    const modal = document.getElementById('aiDetailsModal');
                    let chartInstance = null;

                    panel.addEventListener('click', () => { 
                        if(isLoaded) { 
                            modal.style.display = 'flex'; 
                            void modal.offsetWidth; 
                            modal.classList.add('active'); 
                            document.body.style.overflow = 'hidden'; 
                            
                            setTimeout(() => {
                                const wBar = document.getElementById('modalWeatherBar');
                                wBar.style.width = weatherFactor.class === 'risk-high' ? '30%' : (weatherFactor.class === 'risk-medium' ? '60%' : '95%');
                                wBar.style.background = weatherFactor.class === 'risk-high' ? '#ef4444' : (weatherFactor.class === 'risk-medium' ? 'var(--td-amber)' : 'var(--td-success)');
                                
                                const tBar = document.getElementById('modalTrafficBar');
                                tBar.style.width = trafficFactor.class === 'risk-high' ? '40%' : (trafficFactor.class === 'risk-medium' ? '70%' : '90%');
                                tBar.style.background = trafficFactor.class === 'risk-high' ? '#ef4444' : (trafficFactor.class === 'risk-medium' ? 'var(--td-amber)' : 'var(--td-success)');
                            }, 300);

                            setTimeout(() => {
                                if (typeof Chart === 'undefined') return;
                                const canvas = document.getElementById('punctualityChart');
                                if(!chartInstance && canvas) {
                                    const ctx = canvas.getContext('2d');
                                    const dataPoints = [baseProb - 12, baseProb - 5, baseProb + 4, baseProb - 8, baseProb + 2, baseProb].map(v => Math.min(100, Math.max(0, v)));
                                    const gradient = ctx.createLinearGradient(0, 0, 0, 200);
                                    gradient.addColorStop(0, 'rgba(47, 168, 255, 0.4)');
                                    gradient.addColorStop(1, 'rgba(47, 168, 255, 0.0)');
                                    chartInstance = new Chart(ctx, {
                                        type: 'line',
                                        data: { labels: ['M-5', 'M-4', 'M-3', 'M-2', 'M-1', 'Ce mois'], datasets: [{ data: dataPoints, borderColor: '#2FA8FF', backgroundColor: gradient, borderWidth: 3, pointBackgroundColor: '#FFC107', pointBorderColor: '#fff', pointBorderWidth: 2, pointRadius: 5, pointHoverRadius: 7, fill: true, tension: 0.4 }] },
                                        options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { min: 40, max: 100, grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { color: '#BED1E0' } }, x: { grid: { display: false }, ticks: { color: '#BED1E0' } } } }
                                    });
                                }
                            }, 150);
                        } 
                    });
                    
                    document.getElementById('closeAiModal').addEventListener('click', () => { 
                        modal.classList.remove('active'); 
                        document.body.style.overflow = ''; 
                        setTimeout(() => { if(!modal.classList.contains('active')) modal.style.display = 'none'; }, 300); 
                    });
                }
            }, 800);
        }
    } 
    // --- IA VOITURE ---
    else if (type === 'VOITURE') {
        const panelCar = document.getElementById('aiCarCarbonPanel');
        if(panelCar) {
            const desc = \"";
        // line 1571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "description", [], "any", true, true, false, 1571)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1571, $this->source); })()), "description", [], "any", false, false, false, 1571), "")) : ("")), "js"), "html", null, true);
        yield "\".toLowerCase();
            const brandKeywords = {'peugeot': 'Peugeot', 'renault': 'Renault', 'mercedes': 'Mercedes', 'bmw': 'BMW', 'audi': 'Audi', 'toyota': 'Toyota', 'tesla': 'Tesla', 'ford': 'Ford'};
            let detectedBrand = 'Véhicule Standard';
            let isElectric = false;
            
            for (const [key, value] of Object.entries(brandKeywords)) { 
                if (desc.includes(key)) { detectedBrand = value; break; } 
            }
            if (desc.includes('électrique') || detectedBrand === 'Tesla') isElectric = true;

            let baseEmission = isElectric ? 0 : (110 + (id % 30));
            const totalDistance = dist > 0 ? dist : 50;
            const totalCarbon = ((baseEmission * totalDistance) / 1000).toFixed(2);
            let ecoColor = baseEmission > 130 ? '#ef4444' : (baseEmission > 95 ? 'var(--td-amber)' : 'var(--td-success)');
            
            let stepCar = 0;
            const loadingTextCar = document.getElementById('aiCarLoadingText');
            let isCarLoaded = false;
            
            const intervalCar = setInterval(() => {
                stepCar++;
                if(stepCar < 4) { 
                    loadingTextCar.innerText = [\"Analyse textuelle...\", \"Extraction modèle...\", \"Corrélation WLTP...\", \"Calcul bilan...\"][stepCar]; 
                } else {
                    clearInterval(intervalCar);
                    document.getElementById('aiCarLoading').style.display = 'none';
                    isCarLoaded = true;
                    
                    const resCar = document.getElementById('aiCarResult');
                    resCar.style.display = 'block';
                    resCar.innerHTML = `<div class=\"td-ai-score-wrap\"><div class=\"td-ai-score-val\" style=\"color: \${ecoColor}\">\${baseEmission} <span style=\"font-size: 20px;\">g/km</span></div><div style=\"font-size: 13px; color: var(--td-text-soft);\">Émissions CO₂ estimées</div></div><div class=\"td-ai-grid\"><div class=\"td-ai-factor risk-low\"><span>Véhicule</span><strong>\${detectedBrand}</strong></div><div class=\"td-ai-factor\"><span>Bilan Trajet</span><strong>\${totalCarbon} kg</strong></div></div><div class=\"td-ai-hint\">Cliquez pour le bilan détaillé</div>`;
                    
                    document.getElementById('modalCarBrandVal').innerText = detectedBrand;
                    document.getElementById('modalCarBrandSub').innerText = isElectric ? 'Moteur 100% électrique.' : 'Moteur thermique/hybride.';
                    document.getElementById('modalCarEmissionVal').innerText = `\${baseEmission} g/km`;
                    document.getElementById('modalCarTotalVal').innerHTML = `<span style=\"color:\${ecoColor}\">\${totalCarbon}</span> kg CO₂`;
                    
                    const ecoDescElement = document.getElementById('modalCarEcoDesc');
                    if (isElectric) {
                        ecoDescElement.innerHTML = \"<strong>Excellent choix !</strong> Ce véhicule n'émet aucun gaz à effet de serre direct en roulant.\";
                        ecoDescElement.style.borderLeftColor = \"var(--td-success)\";
                    } else if (baseEmission <= 120) {
                        ecoDescElement.innerHTML = \"<strong>Véhicule efficient.</strong> Ses émissions sont dans la moyenne basse de sa catégorie.\";
                        ecoDescElement.style.borderLeftColor = \"var(--td-success)\";
                    } else {
                        ecoDescElement.innerHTML = \"<strong>Attention à l'éco-conduite.</strong> Ce véhicule a une empreinte carbone supérieure à la moyenne.\";
                        ecoDescElement.style.borderLeftColor = \"var(--td-amber)\";
                        ecoDescElement.style.background = \"rgba(255, 193, 7, 0.1)\";
                    }
                }
            }, 800);

            const modalCar = document.getElementById('aiCarDetailsModal');
            let carChartInstance = null;

            panelCar.addEventListener('click', () => { 
                if(isCarLoaded) { 
                    modalCar.style.display = 'flex'; 
                    void modalCar.offsetWidth; 
                    modalCar.classList.add('active'); 
                    document.body.style.overflow = 'hidden'; 

                    const treesNeeded = (parseFloat(totalCarbon) / 22).toFixed(2);
                    document.getElementById('modalCarTreesVal').innerText = treesNeeded;

                    setTimeout(() => {
                        if (typeof Chart === 'undefined') return;
                        if(!carChartInstance && window.Chart) {
                            const ctxCar = document.getElementById('carEmissionChart').getContext('2d');
                            carChartInstance = new Chart(ctxCar, {
                                type: 'bar',
                                data: { labels: ['Ce véhicule', 'Moyenne', 'Objectif Éco'], datasets: [{ data: [baseEmission, 120, 95], backgroundColor: [baseEmission > 120 ? 'rgba(239, 68, 68, 0.6)' : 'rgba(52, 211, 153, 0.6)', 'rgba(180, 180, 180, 0.3)', 'rgba(47, 168, 255, 0.4)'], borderColor: [baseEmission > 120 ? '#ef4444' : '#34D399', '#ffffff', '#2FA8FF'], borderWidth: 2, borderRadius: 8 }] },
                                options: { indexAxis: 'y', responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { x: { max: 250, grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { color: '#BED1E0' } }, y: { grid: { display: false }, ticks: { color: '#ffffff' } } } }
                            });
                        }
                    }, 150);
                } 
            });

            document.getElementById('closeAiCarModal').addEventListener('click', () => { 
                modalCar.classList.remove('active'); 
                document.body.style.overflow = ''; 
                setTimeout(() => { if(!modalCar.classList.contains('active')) modalCar.style.display = 'none'; }, 300); 
            });
        }
    }

    // === LOGIQUE DE RESERVATION (LIVE PRICE CALCULATOR) ===
    const livePriceDisplay = document.getElementById('live-price');
    if (livePriceDisplay) {
        // Le prix de base envoyé par le PHP (Algorithme)
        const livePriceBase = parseFloat(\"";
        // line 1662
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pricing"] ?? null), "prix_actuel", [], "any", true, true, false, 1662)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 1662, $this->source); })()), "prix_actuel", [], "any", false, false, false, 1662), CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1662, $this->source); })()), "prix", [], "any", false, false, false, 1662))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1662, $this->source); })()), "prix", [], "any", false, false, false, 1662))), "html", null, true);
        yield "\");

        if (type === 'AVION') {
            const adultsInput = document.getElementById('transport_reservation_nbAdultes');
            const childrenInput = document.getElementById('transport_reservation_nbEnfants');
            const babiesInput = document.getElementById('transport_reservation_nbBebes');
            const bagages = document.querySelectorAll('.luggage-chk');

            window.updateFlightPrice = function() {
                const numAdults = parseInt(adultsInput ? adultsInput.value : 1) || 0;
                const numChildren = parseInt(childrenInput ? childrenInput.value : 0) || 0;
                const numBabies = parseInt(babiesInput ? babiesInput.value : 0) || 0;

                // Calcul : Adultes (100%), Enfants (-33% donc 67%), Bébés (10%)
                let total = (numAdults * livePriceBase) + 
                            (numChildren * livePriceBase * 0.67) + 
                            (numBabies * livePriceBase * 0.10);

                // Bagages : Seulement pour les adultes et enfants
                let payingPassengers = numAdults + numChildren;
                if(payingPassengers === 0) payingPassengers = 1; // Sécurité

                bagages.forEach(chk => {
                    if (chk.checked && !chk.disabled) {
                        total += (parseFloat(chk.dataset.price) * payingPassengers);
                    }
                });

                // Update uniquement le numéro, pas le texte TND
                livePriceDisplay.innerText = total.toFixed(2);
            };
            
            if(adultsInput) adultsInput.addEventListener('input', updateFlightPrice);
            if(childrenInput) childrenInput.addEventListener('input', updateFlightPrice);
            if(babiesInput) babiesInput.addEventListener('input', updateFlightPrice);
            
            updateFlightPrice(); // Initialisation
            
        } else if (type === 'VOITURE') {
            const startInput = document.getElementById('transport_reservation_dateDebut');
            const endInput = document.getElementById('transport_reservation_dateFin');
            
            window.updateCarPrice = function() {
                if (startInput && endInput && startInput.value && endInput.value) {
                    const start = new Date(startInput.value);
                    const end = new Date(endInput.value);
                    let diffDays = Math.ceil(Math.abs(end - start) / (1000 * 60 * 60 * 24));
                    if (diffDays === 0) diffDays = 1; // Minimum 1 jour de facturation
                    
                    // Update uniquement le numéro
                    livePriceDisplay.innerText = (diffDays * livePriceBase).toFixed(2);
                }
            }
            if(startInput) startInput.addEventListener('change', updateCarPrice);
            if(endInput) endInput.addEventListener('change', updateCarPrice);
        }
    }
});
</script>

<script>
window.addEventListener(\"load\", () => document.body.classList.add(\"loaded\"));
document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const heroContent = document.querySelector('.td-hero-content');
        if (heroContent && scrolled < 600) {
            heroContent.style.transform = `translateY(\${scrolled * 0.3}px)`;
            heroContent.style.opacity = 1 - (scrolled / 500);
        }
    });
});
</script>

<script>
    const modal = document.getElementById(\"qrModal\");
    const btn = document.getElementById(\"showQrBtn\");
    const span = document.getElementsByClassName(\"close-modal\")[0];

    btn.onclick = () => modal.style.display = \"block\";
    span.onclick = () => modal.style.display = \"none\";
    window.onclick = (event) => { if (event.target == modal) modal.style.display = \"none\"; }
</script>
";
        // line 1745
        if ((Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1745, $this->source); })()), "type", [], "any", false, false, false, 1745)) == "VOITURE")) {
            // line 1746
            yield "<script>
document.addEventListener('DOMContentLoaded', () => {
    // 1. Récupération dynamique des coordonnées de l'aéroport (pickup)
    // On utilise 'lat' et 'lng' car 'latitude' n'existe pas dans ton entité
    ";
            // line 1750
            $context["airport"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1750, $this->source); })()), "pickup", [], "any", false, false, false, 1750);
            // line 1751
            yield "    const lat = ";
            yield ((((isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1751, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1751, $this->source); })()), "lat", [], "any", false, false, false, 1751))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1751, $this->source); })()), "lat", [], "any", false, false, false, 1751), "html", null, true)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1751, $this->source); })()), "latitude", [], "any", false, false, false, 1751)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1751, $this->source); })()), "latitude", [], "any", false, false, false, 1751), "html", null, true)) : (36.8516))));
            yield ";
    const lng = ";
            // line 1752
            yield ((((isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1752, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1752, $this->source); })()), "lng", [], "any", false, false, false, 1752))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1752, $this->source); })()), "lng", [], "any", false, false, false, 1752), "html", null, true)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1752, $this->source); })()), "longitude", [], "any", false, false, false, 1752)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1752, $this->source); })()), "longitude", [], "any", false, false, false, 1752), "html", null, true)) : (10.2272))));
            yield ";
    
    const vehicleName = \"";
            // line 1754
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 1754, $this->source); })()), "nom", [], "any", false, false, false, 1754), "js"), "html", null, true);
            yield "\";
    const airportName = \"";
            // line 1755
            yield (((($tmp = (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1755, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["airport"]) || array_key_exists("airport", $context) ? $context["airport"] : (function () { throw new RuntimeError('Variable "airport" does not exist.', 1755, $this->source); })()), "nom", [], "any", false, false, false, 1755), "js"), "html", null, true)) : ("Point de retrait"));
            yield "\";

    // 2. Initialisation de la map (optimisée pour tes 8 Go de RAM)
    const map = L.map('interactiveMap', {
        center: [lat, lng],
        zoom: 15, // Zoom plus précis pour l'aéroport
        zoomControl: false,
        fadeAnimation: true
    });

    // 3. Tiles Dark Mode (CartoDB) - Le look \"Perfectionniste\" pour ASAFAR [cite: 1, 60]
    L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap',
        subdomains: 'abcd',
        maxZoom: 19
    }).addTo(map);

    // 4. FIX CRUCIAL : Invalidation de la taille pour ton i9-13900H
    setTimeout(() => {
        map.invalidateSize();
    }, 400);

    // 5. Zone d'impact IA (Cercle pulsant)
    const reachZone = L.circle([lat, lng], {
        color: '#2FA8FF',
        fillColor: '#2FA8FF',
        fillOpacity: 0.1,
        radius: 3000,
        weight: 1,
        dashArray: '5, 10'
    }).addTo(map);

    // 6. Marqueur et Popup avec le nom de l'aéroport spécifique
    const customIcon = L.divIcon({ className: 'custom-ai-marker' });
    L.marker([lat, lng], { icon: customIcon })
        .addTo(map)
        .bindPopup(`
            <div style=\"text-align:center; font-family:'Poppins', sans-serif;\">
                <b style=\"color:#051621; display:block; margin-bottom:4px;\">\${vehicleName}</b>
                <span style=\"color:#1E6FA8; font-size:12px;\">
                    <i class=\"fas fa-map-marker-alt\"></i> \${airportName}
                </span>
            </div>
        `)
        .openPopup();
});
</script>

<script>
        (function() {
            let map;
            let currentRoutes = [];
            let routeLayers = [];

function displayRoute(index) {
    if (!currentRoutes || !currentRoutes[index]) return;

    // Nettoyer les tracés existants
    routeLayers.forEach(l => { if (map.hasLayer(l)) map.removeLayer(l); });
    routeLayers = [];

    // Dessiner toutes les routes, sélectionnée en dernier (z-index le plus haut)
    const drawOrder = currentRoutes
        .map((_, i) => i)
        .filter(i => i !== index)
        .concat([index]); // route active dessinée en dernier = au-dessus

    drawOrder.forEach(i => {
        const route = currentRoutes[i];
        const isSelected = (i === index);
        const color = route.color || '#888';

        const layer = L.geoJSON(route.geometry, {
            style: {
                color:      color,
                weight:     isSelected ? 8 : 5,
                opacity:    isSelected ? 1.0 : 0.65,
                dashArray:  isSelected ? null : '10 6',
                lineJoin:   'round',
                lineCap:    'round',
            }
        }).addTo(map);

        layer.on('click', () => displayRoute(i));
        routeLayers[i] = layer; // stocké par index réel
    });

    // fitBounds sur la route active uniquement
    if (routeLayers[index]) {
        map.fitBounds(routeLayers[index].getBounds(), { padding: [60, 60] });
    }

    // Dashboard
    const route = currentRoutes[index];
    const preds = route.predictions.predictions;
    const stats = route.predictions.analyse_metier;
    const color = route.color || '#3498db';

    const dashboard = document.getElementById('ia-dashboard');
    if (dashboard) { dashboard.style.display = 'block'; dashboard.style.borderColor = color; }

    document.getElementById('ia-trafic').innerText   = stats.statut_trafic;
document.getElementById('ia-trafic').style.color = stats.couleur_trafic || color;

document.getElementById('ia-eta').innerText      = preds.eta_reel_min + ' min';
document.getElementById('ia-eta-range').innerText =
    (preds.eta_optimiste_min ?? '-') + ' – ' + (preds.eta_pessimiste_min ?? '-') + ' min';

document.getElementById('ia-vitesse').innerText  =
    (stats.vitesse_reelle ?? '-') + ' km/h';

document.getElementById('ia-conso').innerText    =
    preds.consommation_estimee_litres + ' L';

document.getElementById('ia-l100').innerText     =
    (preds.consommation_l100 ?? '-') + ' L/100km';

document.getElementById('ia-cout').innerText     =
    '~' + (preds.cout_estime_eur ?? '-') + ' €';

document.getElementById('ia-co2').innerText      =
    (preds.co2_grammes ?? '-') + ' g CO₂';

// Barre de fiabilité animée
const fiab = preds.fiabilite_pct ?? 70;
document.getElementById('ia-fiab').innerText     = fiab + '%';
document.getElementById('ia-fiab-bar').style.width = fiab + '%';
document.getElementById('ia-fiab-bar').style.background =
    fiab >= 85 ? '#2ed573' : fiab >= 65 ? '#ffa502' : '#ff4757';

    const alertBox = document.getElementById('ia-alert');
    if (alertBox) {
        alertBox.style.display = stats.alerte_securite ? 'block' : 'none';
        if (stats.alerte_securite) alertBox.innerText = stats.alerte_securite;
    }

    // Boutons
    document.querySelectorAll('.btn-route').forEach((btn, i) => {
        const active = (i === index);
        const c = currentRoutes[i]?.color || '#888';
        btn.style.background   = active ? c : 'transparent';
        btn.style.color        = active ? '#fff' : c;
        btn.style.borderColor  = c;
    });
}

            function initMap() {
                const mapContainer = document.getElementById('interactiveMap');
                if (!mapContainer) return;

                // Nettoyage Leaflet pour Turbo
                mapContainer._leaflet_id = null;
                mapContainer.innerHTML = \"\";

                const startLat = ";
            // line 1909
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mapLat"]) || array_key_exists("mapLat", $context) ? $context["mapLat"] : (function () { throw new RuntimeError('Variable "mapLat" does not exist.', 1909, $this->source); })()), "html", null, true);
            yield ";
                const startLng = ";
            // line 1910
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mapLng"]) || array_key_exists("mapLng", $context) ? $context["mapLng"] : (function () { throw new RuntimeError('Variable "mapLng" does not exist.', 1910, $this->source); })()), "html", null, true);
            yield ";

                map = L.map('interactiveMap').setView([startLat, startLng], 12);
                L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png').addTo(map);

                L.marker([startLat, startLng]).addTo(map).bindPopup(\"<b>";
            // line 1915
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["airportName"]) || array_key_exists("airportName", $context) ? $context["airportName"] : (function () { throw new RuntimeError('Variable "airportName" does not exist.', 1915, $this->source); })()), "html", null, true);
            yield "</b>\");

                fetch('/api/optimize-route', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ start_lat: startLat, start_lng: startLng })
                })
                .then(res => res.json())
                .then(data => {
                    document.getElementById('map-loader').style.display = 'none';
                    if (data.error) throw new Error(data.error);

                    currentRoutes = data.routes;
                    
                    // Générer les boutons
                    const selector = document.getElementById('route-selector');

    if (selector && data.routes && data.routes.length > 0) {
        selector.innerHTML = \"\"; // On vire le texte \"Analyse en cours...\"

        data.routes.forEach((route, i) => {
            const btn = document.createElement('button');
            btn.type = \"button\";
            btn.className = \"btn-route\"; // Assure-toi d'avoir le CSS pour cette classe
            btn.innerHTML = `<i class=\"fas fa-directions\"></i> \${route.label}`;
            
            btn.onclick = function() {
                displayRoute(i); // Cette fonction doit exister pour tracer la ligne
            };

            selector.appendChild(btn);
        });
        
        console.log(\"Boutons générés avec succès !\"); 
    } else {
        console.error(\"Problème de sélecteur ou routes vides\");
    }

                    // Marqueur d'Arrivée
                    if(data.destination) {
                        L.marker([data.destination.lat, data.destination.lng]).addTo(map)
                            .bindPopup(`<b>Arrivée : \${data.city_name}</b><br>Météo : \${data.weather}`);
                    }

                    displayRoute(0);
                })
                .catch(err => {
                    document.getElementById('map-loader').innerHTML = `<span style=\"color:#ff4757\">Erreur : \${err.message}</span>`;
                });
            }

            // Support Symfony Turbo + Standard
            document.addEventListener('turbo:load', initMap);
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initMap);
            } else {
                initMap();
            }
        })();

function chercherKiosques(map, lat, lng) {
    const query = `[out:json];node[\"amenity\"=\"fuel\"](around:3000, \${lat}, \${lng});out;`;
    fetch(`https://overpass-api.de/api/interpreter?data=\${encodeURIComponent(query)}`)
        .then(res => res.json())
        .then(data => {
            const gasIcon = L.divIcon({
                html: '<i class=\"fas fa-gas-pump\" style=\"color:#fff; background:#eccc68; padding:6px; border-radius:50%;\"></i>',
                className: 'custom-gas-icon', iconSize: [30, 30]
            });
            data.elements.forEach(s => {
                L.marker([s.lat, s.lon], {icon: gasIcon}).addTo(map).bindPopup(s.tags.name || \"Station\");
            });
        });
}
function openSJS() {
    // 1. On récupère la route actuellement sélectionnée sur la carte
    // 'currentRoutes' est la variable globale qu'on a définie avant
    const selectedRoute = currentRoutes[0]; // Ou celle active

    if (!selectedRoute) {
        alert(\"Veuillez d'abord sélectionner un trajet.\");
        return;
    }

    // 2. On prépare les données pour ton module SJS
    const syncData = {
        distance: selectedRoute.distance_km,
        duree: selectedRoute.predictions.predictions.eta_reel_min,
        conso: selectedRoute.predictions.predictions.consommation_estimee_litres,
        label: selectedRoute.label
    };

    // 3. LOGIQUE SJS : Ici, tu appelles la fonction principale de ton sjs.html.twig
    // Exemple : Si ton SJS est une modale Bootstrap
    console.log(\"Synchronisation en cours avec SJS...\", syncData);
    
    // Si tu as une fonction 'startSync' dans sjs.html.twig :
    if (typeof startSync === \"function\") {
        startSync(syncData);
    } else {
        // Si tu n'as pas de fonction, on peut juste afficher le wrapper
        document.getElementById('sjs-wrapper').style.display = 'block';
    }
}
</script>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "transports/detail.html.twig";
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
        return array (  2385 => 1915,  2377 => 1910,  2373 => 1909,  2216 => 1755,  2212 => 1754,  2207 => 1752,  2202 => 1751,  2200 => 1750,  2194 => 1746,  2192 => 1745,  2106 => 1662,  2012 => 1571,  1881 => 1443,  1876 => 1441,  1872 => 1440,  1867 => 1437,  1824 => 1396,  1822 => 1395,  1780 => 1355,  1778 => 1354,  1774 => 1352,  1767 => 1347,  1763 => 1345,  1752 => 1340,  1747 => 1337,  1743 => 1335,  1735 => 1333,  1733 => 1332,  1727 => 1331,  1720 => 1330,  1718 => 1329,  1712 => 1326,  1704 => 1322,  1700 => 1320,  1696 => 1318,  1694 => 1317,  1686 => 1313,  1682 => 1312,  1679 => 1311,  1677 => 1310,  1672 => 1307,  1661 => 1298,  1592 => 1230,  1585 => 1225,  1580 => 1222,  1576 => 1219,  1569 => 1213,  1566 => 1211,  1528 => 1174,  1525 => 1173,  1522 => 1172,  1519 => 1171,  1516 => 1170,  1514 => 1169,  1512 => 1168,  1501 => 1159,  1493 => 1153,  1487 => 1150,  1483 => 1149,  1479 => 1148,  1475 => 1147,  1472 => 1146,  1466 => 1141,  1464 => 1136,  1458 => 1132,  1456 => 1131,  1454 => 1130,  1448 => 1127,  1445 => 1126,  1420 => 1104,  1415 => 1103,  1410 => 1102,  1403 => 1097,  1401 => 1092,  1395 => 1088,  1393 => 1087,  1391 => 1086,  1386 => 1084,  1382 => 1082,  1376 => 1079,  1372 => 1078,  1369 => 1077,  1367 => 1076,  1361 => 1073,  1351 => 1072,  1344 => 1068,  1337 => 1067,  1331 => 1065,  1329 => 1064,  1323 => 1060,  1317 => 1056,  1315 => 1055,  1310 => 1053,  1307 => 1052,  1305 => 1051,  1300 => 1048,  1283 => 1033,  1281 => 1032,  1265 => 1018,  1263 => 1017,  1253 => 1010,  1248 => 1007,  1243 => 1004,  1229 => 1001,  1225 => 999,  1222 => 998,  1208 => 995,  1204 => 993,  1201 => 992,  1187 => 989,  1183 => 987,  1181 => 986,  1176 => 983,  1174 => 982,  1167 => 977,  1160 => 976,  1153 => 971,  1149 => 969,  1141 => 967,  1139 => 966,  1131 => 961,  1110 => 944,  1106 => 941,  1103 => 937,  1102 => 936,  1100 => 935,  1097 => 933,  1093 => 930,  1076 => 915,  1072 => 914,  1068 => 912,  1059 => 909,  1056 => 908,  1052 => 907,  1041 => 899,  1029 => 895,  1022 => 891,  1015 => 887,  1010 => 884,  1006 => 882,  998 => 880,  996 => 879,  985 => 878,  983 => 877,  978 => 875,  973 => 873,  969 => 872,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ transport.nom }} - Transport{% endblock %}

{% block body %}


<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>


<div class=\"particles-bg\">
    <div class=\"particle\" style=\"left: 5%;\"></div>
    <div class=\"particle\" style=\"left: 15%; animation-delay: 2s; width: 8px; height: 8px;\"></div>
    <div class=\"particle\" style=\"left: 25%; animation-delay: 4s;\"></div>
    <div class=\"particle\" style=\"left: 35%; animation-delay: 1s; width: 5px; height: 5px;\"></div>
    <div class=\"particle\" style=\"left: 45%; animation-delay: 3s;\"></div>
    <div class=\"particle\" style=\"left: 55%; animation-delay: 5s; width: 7px; height: 7px;\"></div>
    <div class=\"particle\" style=\"left: 65%; animation-delay: 2.5s;\"></div>
    <div class=\"particle\" style=\"left: 75%; animation-delay: 4.5s; width: 6px; height: 6px;\"></div>
    <div class=\"particle\" style=\"left: 85%; animation-delay: 1.5s;\"></div>
    <div class=\"particle\" style=\"left: 95%; animation-delay: 3.5s;\"></div>
</div>

<style>
    :root {
        --td-navy-900: #051621;
        --td-navy-800: #08263E;
        --td-navy-700: #0B2D4A;
        --td-sky: #2FA8FF;
        --td-sky-soft: #A7E3FF;
        --td-amber: #FFC107;
        --td-amber-strong: #FF9800;
        --td-text-main: #F4F8FC;
        --td-text-soft: #BED1E0;
        --td-success: #34D399;
    }

    body { background: var(--td-navy-800) !important; }

    .td-hero {
        position: relative;
        margin-top: 76px;
        min-height: 62vh;
        padding: 58px 86px 44px;
        overflow: hidden;
    }

.td-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: 
        radial-gradient(circle at 15% 20%, rgba(5, 22, 33, 0.4) 0%, rgba(5, 22, 33, 0) 40%),
        linear-gradient(135deg, var(--td-navy-900) 0%, var(--td-navy-800) 100%);
}

    .td-hero::after {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.032) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.032) 1px, transparent 1px);
        background-size: 44px 44px;
        opacity: 0.45;
    }

    .td-hero-content {
        position: relative;
        z-index: 2;
        max-width: 1100px;
        margin: 0 auto;
    }

    .td-topline {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    .td-badge {
        display: inline-flex;
        align-items: center;
        border: 1px solid rgba(255, 193, 7, 0.35);
        background: rgba(255, 193, 7, 0.14);
        color: var(--td-amber);
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.4px;
        text-transform: uppercase;
        padding: 8px 14px;
    }

    .td-link-back {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        color: var(--td-text-soft);
        border: 1px solid rgba(47, 168, 255, 0.28);
        background: rgba(11, 45, 74, 0.45);
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        padding: 8px 14px;
    }

    .td-title {
        margin: 0 0 14px;
        color: var(--td-text-main);
        font-size: clamp(34px, 5vw, 62px);
        line-height: 1.05;
        font-family: 'Playfair Display', Georgia, serif;
    }

    .td-title span {
        color: var(--td-amber);
        text-shadow: 0 8px 24px rgba(255, 193, 7, 0.26);
    }

    .td-route {
        margin: 0;
        color: rgba(244, 248, 252, 0.95);
        font-size: 17px;
        line-height: 1.7;
        max-width: 900px;
    }

    .td-kpis {
        margin-top: 22px;
        display: grid;
        grid-template-columns: repeat(4, minmax(150px, 1fr));
        gap: 12px;
    }

    .td-kpi {
        border-radius: 14px;
        border: 1px solid rgba(47, 168, 255, 0.3);
        background: rgba(11, 45, 74, 0.68);
        padding: 14px;
    }

    .td-kpi strong {
        display: block;
        color: var(--td-amber);
        font-size: 24px;
        line-height: 1;
        margin-bottom: 5px;
    }

    .td-kpi span {
        color: var(--td-sky-soft);
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        font-weight: 700;
    }

    .td-main {
        position: relative;
        z-index: 2;
        padding: 44px 86px 34px;
    }

    .td-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.7fr) minmax(320px, 1fr);
        gap: 56px;
        align-items: start;
        max-width: 1200px;
        margin: 0 auto;
    }

    .td-panel {
        border-radius: 18px;
        border: 1px solid rgba(47, 168, 255, 0.28);
        background: linear-gradient(180deg, rgba(11, 45, 74, 0.95) 0%, rgba(8, 38, 62, 0.96) 100%);
        box-shadow: 0 14px 36px rgba(1, 14, 25, 0.3);
        padding: 40px;
    }

    .td-head {
        margin: 0;
        color: var(--td-text-main);
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 30px;
    }

    .td-block { margin-top: 30px; }

    .td-section-title {
        margin: 0 0 24px;
        color: #e6f4ff;
        font-size: 20px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        border-bottom: 2px solid rgba(47, 168, 255, 0.15);
        padding-bottom: 12px;
    }

    .td-info-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 24px;
    }

    .td-info {
        position: relative;
        overflow: hidden;
        border-radius: 14px;
        border: 1px solid rgba(47, 168, 255, 0.32);
        background: linear-gradient(165deg, rgba(9, 35, 55, 0.9) 0%, rgba(5, 24, 39, 0.9) 100%);
        padding: 32px;
        max-width: 100%;
        transition: transform 0.25s cubic-bezier(.4,2,.3,1), box-shadow 0.2s;
        will-change: transform;
    }
    .td-info:hover {
        transform: scale(1.08);
        z-index: 2;
        box-shadow: 0 8px 32px 0 rgba(47,168,255,0.18);
    }

    .td-info::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; height: 2px;
        background: linear-gradient(90deg, rgba(47, 168, 255, 0.75), rgba(255, 193, 7, 0.35));
    }

    .td-info .label {
        display: block;
        color: var(--td-sky-soft);
        font-size: 14px;
        letter-spacing: 0.3px;
        text-transform: uppercase;
        margin-bottom: 12px;
        font-weight: 700;
    }

    .td-info .value {
        color: var(--td-text-main);
        font-weight: 600;
        font-size: 28px;
        line-height: 1.25;
    }

    .td-airports {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 24px;
    }

    .td-airport {
        border-radius: 14px;
        border: 1px solid rgba(255, 193, 7, 0.26);
        background: linear-gradient(165deg, rgba(255, 193, 7, 0.14) 0%, rgba(255, 193, 7, 0.05) 100%);
        padding: 32px;
        color: #ffedbf;
        max-width: 100%;
        transition: transform 0.25s cubic-bezier(.4,2,.3,1), box-shadow 0.2s;
        will-change: transform;
    }
    .td-airport:hover {
        transform: scale(1.08);
        z-index: 2;
        box-shadow: 0 8px 32px 0 rgba(255,193,7,0.18);
    }

    .td-airport h4 { margin: 0 0 16px; font-size: 20px; color: var(--td-amber); }
    .td-airport p { margin: 0; line-height: 1.7; font-size: 16px; }

    .td-sidebar {
        position: sticky;
        top: 94px;
        min-width: 260px;
        max-width: 320px;
        margin-left: 48px;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .td-booking {
        background: rgba(255,255,255,0.06);
        box-shadow: 0 2px 18px 0 rgba(47,168,255,0.10);
        border: 2px solid rgba(47,168,255,0.18);
        padding: 28px 20px 28px 20px;
    }

    .td-booking .price {
        margin: 0;
        color: var(--td-amber);
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 46px;
        line-height: 1;
    }
    .td-booking .price small { font-size: 17px; color: #ffe9b0; }

    .td-description {
        margin-top: 30px;
        border-radius: 14px;
        border: 1px solid rgba(47, 168, 255, 0.24);
        background: rgba(6, 30, 48, 0.68);
        padding: 32px;
    }
    .td-description h3 { margin: 0 0 8px; color: var(--td-amber); font-size: 22px; }
    .td-description p { margin: 0; color: var(--td-text-soft); line-height: 1.8; font-size: 16px; }

    /* --- ASAFAR AI Predictor Styles --- */
    .td-ai-panel {
        border-radius: 14px;
        background: linear-gradient(135deg, rgba(6, 26, 43, 0.9), rgba(11, 45, 74, 0.95));
        border: 1px solid rgba(47, 168, 255, 0.35);
        padding: 20px; position: relative; overflow: hidden;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
        min-width: 320px; max-width: 100%; flex: 0 0 auto; cursor: pointer;
        transition: transform 0.25s cubic-bezier(.4,2,.3,1), box-shadow 0.2s;
    }
    .td-ai-panel:hover { transform: scale(1.08); z-index: 2; box-shadow: 0 8px 32px 0 rgba(47,168,255,0.18); }
    .td-ai-panel::after {
        content: ''; position: absolute; top: 0; left: -100%; width: 50%; height: 2px;
        background: linear-gradient(90deg, transparent, var(--td-sky), transparent);
        animation: td-ai-scan 2.5s infinite linear;
    }
    @keyframes td-ai-scan { 100% { left: 200%; } }
    .td-ai-header { display: flex; align-items: center; gap: 12px; margin-bottom: 18px; border-bottom: 1px solid rgba(47, 168, 255, 0.15); padding-bottom: 12px; }
    .td-ai-icon { width: 36px; height: 36px; background: rgba(47, 168, 255, 0.15); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: var(--td-sky); font-weight: bold; border: 1px solid rgba(47, 168, 255, 0.3); }
    .td-ai-title { margin: 0; font-size: 16px; color: var(--td-text-main); font-weight: 700; }
    .td-ai-subtitle { font-size: 11px; color: var(--td-amber); text-transform: uppercase; letter-spacing: 0.5px; }
    .td-ai-loading { display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 30px 0; gap: 15px; color: var(--td-sky-soft); font-size: 13px; text-align: center; }
    .td-ai-spinner { width: 40px; height: 40px; border: 3px solid rgba(47, 168, 255, 0.2); border-top-color: var(--td-sky); border-radius: 50%; animation: spin 1s infinite linear; }
    @keyframes spin { to { transform: rotate(360deg); } }
    .td-ai-result { display: none; }
    .td-ai-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
    .td-ai-factor { background: rgba(4, 18, 30, 0.6); border-radius: 10px; padding: 12px; border-left: 3px solid var(--td-sky); }
    .td-ai-factor.risk-high { border-left-color: #ef4444; }
    .td-ai-factor.risk-low { border-left-color: var(--td-success); }
    .td-ai-factor.risk-medium { border-left-color: var(--td-amber); }
    .td-ai-factor span { display: block; font-size: 11px; color: var(--td-text-soft); margin-bottom: 4px; text-transform: uppercase;}
    .td-ai-factor strong { font-size: 14px; color: #fff; }
    .td-ai-score-wrap { text-align: center; margin-bottom: 20px; }
    .td-ai-score-val { font-size: 42px; font-weight: 800; color: var(--td-success); line-height: 1; font-family: 'Playfair Display', serif;}
    .td-ai-hint { text-align: center; font-size: 11px; color: rgba(167, 227, 255, 0.6); margin-top: 18px; text-transform: uppercase; letter-spacing: 0.5px; border-top: 1px dashed rgba(47, 168, 255, 0.2); padding-top: 12px; transition: color 0.2s; }
    .td-ai-panel:hover .td-ai-hint { color: var(--td-sky); }

    /* --- AI Modal Styles --- */
    .td-modal-overlay { position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(4, 18, 30, 0.85); backdrop-filter: blur(8px); z-index: 9999; display: none; align-items: center; justify-content: center; padding: 20px; opacity: 0; transition: opacity 0.3s ease; }
    .td-modal-overlay.active { opacity: 1; }
    .td-modal { background: linear-gradient(165deg, var(--td-navy-800) 0%, var(--td-navy-900) 100%); border: 1px solid rgba(47, 168, 255, 0.3); border-radius: 20px; width: 100%; max-width: 850px; max-height: 90vh; overflow-y: auto; box-shadow: 0 24px 48px rgba(0, 0, 0, 0.6); transform: translateY(30px) scale(0.95); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
    .td-modal-overlay.active .td-modal { transform: translateY(0) scale(1); }
    .td-modal-header { padding: 24px 30px; border-bottom: 1px solid rgba(47, 168, 255, 0.15); display: flex; justify-content: space-between; align-items: center; background: rgba(0,0,0,0.1); }
    .td-modal-title { margin: 0; color: var(--td-text-main); font-family: 'Playfair Display', serif; font-size: 26px; display: flex; align-items: center; gap: 12px; }
    .td-modal-title i { color: var(--td-sky); font-size: 22px; }
    .td-modal-close { background: rgba(47, 168, 255, 0.1); border: 1px solid rgba(47, 168, 255, 0.3); color: var(--td-sky); width: 36px; height: 36px; border-radius: 50%; font-size: 20px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s; }
    .td-modal-close:hover { background: var(--td-sky); color: #fff; transform: rotate(90deg); }
    .td-modal-body { padding: 30px; }
    .td-modal-top-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 24px; }
    .td-modal-chart-section { background: rgba(6, 30, 48, 0.6); border: 1px solid rgba(47, 168, 255, 0.15); border-radius: 14px; padding: 24px; position: relative; }
    .td-modal-card { background: rgba(6, 30, 48, 0.6); border: 1px solid rgba(47, 168, 255, 0.15); border-radius: 14px; padding: 20px; position: relative; overflow: hidden; }
    .td-modal-card h4, .td-modal-chart-section h4 { margin: 0 0 12px; color: var(--td-amber); font-size: 16px; display: flex; align-items: center; gap: 8px; font-family: 'Poppins', sans-serif;}
    .td-modal-card p { margin: 0 0 15px; color: var(--td-text-soft); font-size: 14px; line-height: 1.5; min-height: 42px;}
    .td-progress { height: 6px; background: rgba(255, 255, 255, 0.1); border-radius: 4px; overflow: hidden; box-shadow: inset 0 1px 3px rgba(0,0,0,0.3); }
    .td-progress-fill { height: 100%; border-radius: 4px; width: 0%; transition: width 1.5s cubic-bezier(.4,2,.3,1); box-shadow: 0 0 10px currentColor; }
    .td-chart-container { position: relative; height: 220px; width: 100%; margin-top: 16px; }
    .td-pulse-dot { width: 8px; height: 8px; background: var(--td-success); border-radius: 50%; display: inline-block; box-shadow: 0 0 8px var(--td-success); animation: pulse 2s infinite; }

    @media (max-width: 768px) {
        .td-modal-top-stats { grid-template-columns: 1fr; }
    }

    /* --- BORDURES ULTRA-VISIBLES DU FORMULAIRE DE RESERVATION --- */
 .booking-card { 
    background: rgba(8, 38, 62, 0.95) !important; /* Même base que les panneaux de détails */
    border: 3px solid #FFC107 !important;
    border-radius: 30px !important;
    padding: 45px !important; 
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6) !important;
}

    .booking-form { margin-top: 30px; }
    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; font-size: 14px; color: rgba(255, 255, 255, 0.9); margin-bottom: 10px; font-weight: 500; }

    /* Forcer les bordures sur TOUS les inputs dans le form */
    .booking-form input, .booking-form select { 
        width: 100% !important;
        padding: 14px 20px !important; 
        background: rgba(0, 0, 0, 0.25) !important; 
        border: 2px solid rgba(255, 255, 255, 0.4) !important; /* Bordure Blanche bien épaisse */
        border-radius: 12px !important; 
        color: white !important;
        font-size: 15px !important; 
        transition: all 0.3s ease !important; 
        font-family: 'Poppins', sans-serif !important; 
        box-sizing: border-box !important;
    }

    .booking-form input:focus, .booking-form select:focus {
        border: 2px solid #FFC107 !important; /* Bordure Jaune au focus */
        background: rgba(255, 193, 7, 0.05) !important;
        outline: none !important;
    }

    .price-section { text-align: center; padding-bottom: 25px; margin-bottom: 25px; border-bottom: 1px solid rgba(255, 255, 255, 0.1); position: relative; }
    .price-label { font-size: 14px; color: rgba(255, 255, 255, 0.6); margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;}
    .price-value { font-family: 'Playfair Display', serif; font-size: 56px; font-weight: 700; background: linear-gradient(135deg, #FFC107, #FF9800); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin: 0; }
    
    /* HACK CSS POUR MASQUER LE \"mm/dd/yyyy\" natif */
    .date-input-clean::-webkit-datetime-edit { color: transparent; }
    .date-input-clean:focus::-webkit-datetime-edit, .date-input-clean.has-value::-webkit-datetime-edit { color: white; }
    
    /* --- DESIGN DES CHECKBOX BAGAGES --- */
    .luggage-options { display: flex; flex-direction: column; gap: 12px; margin-top: 15px; margin-bottom: 20px; }
    .luggage-option { 
        display: flex; align-items: center; padding: 14px 18px; 
        background: rgba(0, 0, 0, 0.2); 
        border: 2px solid rgba(255, 255, 255, 0.2) !important; /* Bordure par défaut */
        border-radius: 12px; cursor: pointer; transition: all 0.3s ease; 
    }
    .luggage-option:hover { border-color: rgba(255, 255, 255, 0.5) !important; }
    .luggage-option.selected { 
        background: rgba(255, 193, 7, 0.1); 
        border: 2px solid #FFC107 !important; /* Bordure Jaune de sélection */
    }
    .luggage-option input[type=\"checkbox\"] { display: none; }
    .luggage-icon { font-size: 20px; color: var(--td-sky); width: 34px; text-align: center; margin-right: 12px; transition: color 0.3s ease; }
    .luggage-option.selected .luggage-icon { color: #FFC107; }
    .luggage-text { flex: 1; font-size: 14px; color: white; font-weight: 500; }
    .luggage-price { font-size: 14px; font-weight: 700; color: var(--td-amber); }

    .btn-reserve { width: 100%; padding: 20px 35px; background: linear-gradient(135deg, #FFC107, #FF9800); color: #0B2D4A; border: none; border-radius: 18px; font-size: 17px; font-weight: 700; cursor: pointer; transition: all 0.4s ease; display: flex; align-items: center; justify-content: center; gap: 12px; box-shadow: 0 12px 35px rgba(255, 193, 7, 0.35); margin-top: 30px; text-decoration: none; }
    .btn-reserve:hover { transform: translateY(-4px); box-shadow: 0 18px 50px rgba(255, 193, 7, 0.5); }
    .btn-reserve i { transition: transform 0.3s ease; }
    .btn-reserve:hover i { transform: translateX(5px); }
    .guarantee-badge { display: flex; align-items: center; gap: 12px; padding: 18px; background: rgba(76, 175, 80, 0.1); border: 1px solid rgba(76, 175, 80, 0.3); border-radius: 15px; margin-top: 20px; }
    .guarantee-badge i { color: #4CAF50; font-size: 24px; }
    .guarantee-badge span { font-size: 13px; color: rgba(255, 255, 255, 0.85); line-height: 1.5; }
    * { will-change: auto; }

    /* --- SECTION TRANSPORTS SIMILAIRES --- */
    .td-related { padding: 60px 86px 80px; clear: both; display: block; width: 100%; box-sizing: border-box; }
    .td-related .td-head { text-align: center; margin-bottom: 40px; color: var(--td-text-main); font-size: 36px; }
    .td-related-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; }
    .td-related-card { display: flex; flex-direction: column; text-decoration: none !important; border-radius: 20px; border: 1px solid rgba(47, 168, 255, 0.2); background: linear-gradient(145deg, rgba(11, 45, 74, 0.8) 0%, rgba(5, 24, 39, 0.9) 100%); padding: 24px; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; }
    .td-related-card, .td-related-card:link, .td-related-card:visited, .td-related-card:active { color: var(--td-text-main) !important; }
    .td-related-card:hover { transform: translateY(-8px); border-color: rgba(255, 193, 7, 0.5); box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4), 0 0 20px rgba(255, 193, 7, 0.1); }
    .td-related-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, var(--td-sky), var(--td-amber)); opacity: 0; transition: opacity 0.3s ease; }
    .td-related-card:hover::before { opacity: 1; }
    .td-related-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; }
    .td-related-card h3 { margin: 0 0 16px; font-size: 22px; color: #ffffff !important; font-family: 'Playfair Display', Georgia, serif; line-height: 1.3; }
    .td-related-route { display: flex; flex-direction: column; gap: 10px; margin-bottom: 24px; flex-grow: 1; }
    .td-route-item { display: flex; align-items: center; gap: 12px; color: var(--td-text-soft) !important; font-size: 14px; }
    .td-route-item i { color: var(--td-sky); width: 16px; text-align: center; font-size: 16px; }
    .td-related-footer { display: flex; justify-content: space-between; align-items: flex-end; padding-top: 16px; border-top: 1px solid rgba(255,255,255,0.08); }
    .td-related-price { margin: 0; color: var(--td-amber) !important; font-size: 24px; font-weight: 800; font-family: 'Playfair Display', serif; }
    .td-related-price span { font-size: 13px; color: rgba(255,193,7,0.7); text-transform: uppercase; font-family: 'Poppins', sans-serif; }
    .td-related-action { color: var(--td-sky) !important; font-size: 14px; font-weight: 600; display: flex; align-items: center; gap: 6px; transition: gap 0.2s, color 0.2s; }
    .td-related-card:hover .td-related-action { gap: 10px; color: var(--td-amber) !important; }


    /* --- ANIMATIONS ET PARTICULES (CORRIGÉ ET ÉLÉGANT) --- */
    .particles-bg { 
        position: fixed; 
        top: 0; 
        left: 0; 
        width: 100%; 
        height: 100%; 
        pointer-events: none; 
        z-index: 1; /* Augmenté pour passer au-dessus du fond du body */
        overflow: hidden; 
    }

    .particles-bg .particle { 
        position: absolute; 
        width: 4px; 
        height: 4px; 
        background: var(--td-amber); 
        border-radius: 50%; 
        opacity: 0; 
        /* Ajout d'une lueur pour l'élégance */
        box-shadow: 0 0 10px var(--td-amber), 0 0 20px var(--td-amber);
        animation: particleFloat 12s infinite ease-in-out; 
    }

    @keyframes particleFloat { 
        0% { 
            transform: translateY(110vh) translateX(0) scale(0.5); 
            opacity: 0; 
        } 
        20% { 
            opacity: 0.6; /* Plus visible sur fond sombre */
        }
        80% { 
            opacity: 0.6; 
        }
        100% { 
            transform: translateY(-10vh) translateX(50px) scale(1.2); 
            opacity: 0; 
        } 
    }

    /* Ajustement des délais pour un flux continu */
    .particle:nth-child(1) { left: 5%; animation-delay: 0s; }
    .particle:nth-child(2) { left: 15%; animation-delay: 2s; width: 6px; height: 6px; }
    .particle:nth-child(3) { left: 25%; animation-delay: 4s; }
    .particle:nth-child(4) { left: 35%; animation-delay: 1s; width: 3px; height: 3px; }
    .particle:nth-child(5) { left: 45%; animation-delay: 7s; }
    .particle:nth-child(6) { left: 55%; animation-delay: 3s; width: 5px; height: 5px; }
    .particle:nth-child(7) { left: 65%; animation-delay: 5s; }
    .particle:nth-child(8) { left: 75%; animation-delay: 8s; width: 4px; height: 4px; }
    .particle:nth-child(9) { left: 85%; animation-delay: 2s; }
    .particle:nth-child(10) { left: 95%; animation-delay: 6s; }



    .transport-header-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba(11, 45, 74, 0.4);
        border: 1px solid rgba(47, 168, 255, 0.2);
        padding: 20px 30px;
        border-radius: 20px;
        margin-bottom: 30px;
        backdrop-filter: blur(10px);
    }

    .transport-info-main {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .trp-price-badge {
        background: rgba(255, 193, 7, 0.15);
        color: var(--trp-amber);
        padding: 8px 16px;
        border-radius: 999px;
        font-weight: 800;
        font-size: 18px;
        border: 1px solid rgba(255, 193, 7, 0.3);
    }

    .trp-btn-qr-elegant {
        display: flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, var(--trp-sky) 0%, #1E6FA8 100%);
        color: #fff;
        border: none;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 4px 15px rgba(47, 168, 255, 0.3);
    }

    .trp-btn-qr-elegant:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(47, 168, 255, 0.5);
    }

    /* --- Modal stylisée --- */
    .qr-modal {
        display: none; 
        position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%;
        background-color: rgba(5, 22, 33, 0.85);
        backdrop-filter: blur(8px);
    }
    
    .qr-modal-content {
        background: linear-gradient(160deg, var(--trp-navy-800), var(--trp-navy-900));
        margin: 8% auto; 
        padding: 40px;
        border: 1px solid rgba(47, 168, 255, 0.3);
        width: 90%; max-width: 420px;
        text-align: center; 
        border-radius: 24px;
        color: white;
        position: relative;
        box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        animation: modalFadeIn 0.3s ease-out;
    }

    .close-modal {
        position: absolute;
        top: 20px;
        right: 25px;
        color: var(--trp-text-soft);
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
        transition: color 0.2s;
    }

    .close-modal:hover { color: var(--trp-amber); }

    .modal-title {
        font-family: 'Playfair Display', serif;
        font-size: 24px;
        margin: 0 0 10px;
    }
    
    .modal-title span { color: var(--trp-amber); }
    
    .modal-subtitle {
        color: var(--trp-text-soft);
        font-size: 14px;
        margin-bottom: 25px;
        line-height: 1.5;
    }

    .qr-frame {
        background: white; 
        padding: 15px; 
        border-radius: 20px;
        display: inline-block; 
        margin-bottom: 20px;
        border: 4px solid rgba(47, 168, 255, 0.2);
    }

    .qr-frame img { 
        width: 250px; 
        height: 250px; 
        display: block; 
        border-radius: 10px;
    }

    .qr-footer {
        font-size: 12px;
        color: var(--trp-sky-soft);
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    @keyframes modalFadeIn {
        from { opacity: 0; transform: scale(0.95) translateY(-20px); }
        to { opacity: 1; transform: scale(1) translateY(0); }
    }

/* --- SECTION MAP OPENSTREETMAP DIRECT --- */
    .td-osm-container {
        position: relative;
        border-radius: 20px; /* Harmonisation avec vos panels [cite: 108] */
        overflow: hidden;
        border: 2px solid rgba(47, 168, 255, 0.3);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
        height: 400px;
        margin-top: 30px;
        background: var(--td-navy-900);
    }

    /* Le \"Hack\" perfectionniste pour le Dark Mode sur OSM */
    .td-osm-iframe {
        width: 100%;
        height: 100%;
        border: none;
        filter: invert(90%) hue-rotate(180deg) brightness(95%) contrast(90%);
        /* Ce filtre inverse les couleurs claires en foncées et ajuste les teintes vers le bleu  */
    }

    .td-map-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 1px solid rgba(255, 193, 7, 0.2);
    }

    .td-isochrone-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        pointer-events: none;
        z-index: 5;
    }

    .td-reach-zone {
        fill: rgba(47, 168, 255, 0.2);
        stroke: var(--td-sky);
        stroke-width: 2;
        stroke-dasharray: 5;
        filter: drop-shadow(0 0 10px var(--td-sky));
        animation: zone-pulse 4s infinite ease-in-out;
        transform-origin: center;
    }

    @keyframes zone-pulse {
        0%, 100% { opacity: 0.4; transform: scale(1); }
        50% { opacity: 0.7; transform: scale(1.02); }
    }



    /* --- STATIC OSM MAP & AI ISOCHRONE --- */
.td-static-map-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    border: 2px solid rgba(47, 168, 255, 0.3);
    height: 400px;
    margin-top: 30px;
    background: var(--td-navy-900);
}

.td-static-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: invert(90%) hue-rotate(180deg) brightness(95%) contrast(90%);
    transition: transform 0.5s ease;
}

.td-static-map-wrapper:hover .td-static-img {
    transform: scale(1.05);
}

/* Calque SVG pour la zone d'autonomie */
.td-isochrone-overlay {
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    pointer-events: none;
    z-index: 5;
}

.td-reach-zone {
    fill: rgba(47, 168, 255, 0.15);
    stroke: var(--td-sky);
    stroke-width: 2;
    stroke-dasharray: 5;
    filter: drop-shadow(0 0 10px var(--td-sky));
    animation: zone-pulse 4s infinite ease-in-out;
    transform-origin: center;
}

@keyframes zone-pulse {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 0.6; transform: scale(1.02); }
}

/* Marqueur CSS */
.td-css-marker {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -100%);
    z-index: 10;
}

.td-marker-pin {
    width: 30px; height: 30px;
    border-radius: 50% 50% 50% 0;
    background: var(--td-amber);
    transform: rotate(-45deg);
    border: 2px solid #fff;
    box-shadow: 0 0 15px rgba(255, 193, 7, 0.6);
}

.td-marker-pulse {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 15px; height: 15px;
    background: rgba(47, 168, 255, 0.5);
    border-radius: 50%;
    animation: map-pulse 2s infinite;
}

@keyframes map-pulse {
    0% { width: 15px; height: 15px; opacity: 1; }
    100% { width: 50px; height: 50px; opacity: 0; }
}

.td-map-legend {
    position: absolute;
    top: 15px; left: 15px;
    background: rgba(5, 22, 33, 0.9);
    border: 1px solid var(--td-sky);
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 10px;
    color: var(--td-sky-soft);
    text-transform: uppercase;
    z-index: 11;
}

/* --- MAP INTERACTIVE IA (DYNAMIC) --- */
.td-map-full-section {
    padding: 40px 86px;
    clear: both;
}

.td-map-wrapper {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    border: 2px solid rgba(47, 168, 255, 0.3);
    height: 500px;
    background: #051621;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
    z-index: 10;
}

#interactiveMap {
    width: 100%;
    height: 100%;
    z-index: 1;
}

/* Custom Marker Styling */
.custom-ai-marker {
    background: var(--td-amber);
    width: 15px;
    height: 15px;
    border-radius: 50%;
    border: 3px solid #fff;
    box-shadow: 0 0 20px var(--td-amber);
}

/* Fix pour les popups Leaflet en Dark Mode */
.leaflet-popup-content-wrapper {
    background: var(--td-navy-800) !important;
    color: #fff !important;
    border: 1px solid var(--td-sky) !important;
    border-radius: 12px !important;
}
.leaflet-popup-tip { background: var(--td-navy-800) !important; }

/* Style pour le tracé du trajet IA */
.ai-path-line {
    stroke-dasharray: 10, 15;
    animation: dash-flow 2s infinite linear;
    filter: drop-shadow(0 0 8px var(--td-sky));
}

@keyframes dash-flow {
    to { stroke-dashoffset: -25; }
}

/* Bulle de Tarif IA */
.ai-fare-bubble {
    background: rgba(11, 45, 74, 0.95);
    border: 1px solid var(--td-amber);
    border-radius: 8px;
    padding: 10px;
    color: white;
    font-family: 'Poppins', sans-serif;
    box-shadow: 0 4px 15px rgba(0,0,0,0.5);
}



</style>




<section class=\"td-hero\">
    <div class=\"td-hero-content\">
        <div class=\"td-topline\">
            <a class=\"td-link-back\" href=\"{{ path('app_transports') }}\">Retour aux transports</a>
            <span class=\"td-badge\">{{ transport.type }}</span>
        </div>
        <h1 class=\"td-title\"><span>A propos</span> {{ transport.nom }}</h1>
        <p class=\"td-route\">
            {% if transport.departure and transport.destination %}
                {{ transport.departure.ville }} ({{ transport.departure.codeIata }}) -> {{ transport.destination.ville }} ({{ transport.destination.codeIata }})
            {% elseif transport.pickup %}
                Aeroport de prise en charge: {{ transport.pickup.nom }} ({{ transport.pickup.codeIata }})
            {% else %}
                Les donnees d'itineraire ne sont pas completes pour ce transport.
            {% endif %}
        </p>
        <div class=\"td-kpis\">
            <div class=\"td-kpi\">
                <strong>{{ transport.prix|number_format(2, '.', ' ') }} TND</strong>
                <span>Prix actuel</span>
            </div>
            <div class=\"td-kpi\">
                <strong>{{ transport.type }}</strong>
                <span>Type de transport</span>
            </div>
            <div class=\"td-kpi\">
                <strong>{% if routeDistanceKm is not null %}{{ routeDistanceKm }} km{% else %}N/A{% endif %}</strong>
                <span>Distance estimee</span>
            </div>
            <div class=\"td-kpi\">
                <strong>{{ transport.dateCreation ?: 'N/A' }}</strong>
                <span>Date de creation</span>
            </div>
        </div>
    </div>
</section>

<main class=\"td-main\">
    {% for message in app.flashes('success') %}
        <div style=\"background: rgba(52, 211, 153, 0.15); border: 1px solid var(--td-success); color: var(--td-success); padding: 15px; border-radius: 10px; margin-bottom: 20px; text-align: center; font-weight: bold;\">
            <i class=\"fas fa-check-circle\"></i> {{ message }}
        </div>
    {% endfor %}
    <div class=\"transport-header-actions\">
    <div class=\"transport-info-main\">
        <h1 class=\"trp-title-sm\">{{ transport.nom }}</h1>
        <span class=\"trp-price-badge\">{{ transport.prix }} TND</span>
    </div>
    
    <button id=\"showQrBtn\" class=\"trp-btn-qr-elegant\">
        <svg width=\"20\" height=\"20\" fill=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm13-2h3v2h-3v-2zm-3 0h2v2h-2v-2zm3 3h3v2h-3v-2zm-2 3h2v2h-2v-2zm-3-3h2v2h-2v-2zm3 3h-2v2h-3v-2h2v-2h3v2z\"/></svg>
        Pass Mobile
    </button>
</div>

<div id=\"qrModal\" class=\"qr-modal\">
    <div class=\"qr-modal-content\">
        <span class=\"close-modal\">&times;</span>
        <h2 class=\"modal-title\">Pass Mobile <span>ASAFAR</span></h2>
        
        {# On prépare les données structurées (Format VCard) #}
        {% set vCardData = 
            \"BEGIN:VCARD\\n\" ~
            \"VERSION:3.0\\n\" ~
            \"FN:PASS \" ~ transport.type|upper ~ \" - \" ~ transport.nom ~ \"\\n\" ~
            \"ORG:ASAFAR Mobility\\n\" ~
            \"TITLE:Ref: #ASF-\" ~ transport.id ~ \"\\n\" ~
            \"NOTE:ITINERAIRE : \" ~ (transport.departure ? transport.departure.ville : 'N/A') ~ \" -> \" ~ (transport.destination ? transport.destination.ville : 'N/A') ~ \"\\\\n\" ~
            \"PRIX : \" ~ transport.prix ~ \" TND\\\\n\" ~
            \"STATUS : Confirme\\n\" ~
            \"END:VCARD\"
        %}

        <div class=\"qr-frame\">
           {# On génère le QR Code avec la VCard au lieu de l'URL #}
           <img src=\"{{ qr_code_data_uri(vCardData) }}\" alt=\"QR Code ASAFAR\">
        </div>
        
        <div class=\"qr-footer\">
            Scan immédiat • 100% Hors-ligne
        </div>
    </div>
</div>

    <div class=\"td-grid\">
        <section class=\"td-panel\">
            <div class=\"td-details-stack\">
                <div class=\"td-block\">
                    <h3 class=\"td-section-title\">Details principaux</h3>
                    <div class=\"td-info-cards\">
                        <article class=\"td-info\">
                            <span class=\"label\">Type de transport</span>
                            <span class=\"value\">{{ transport.type }}</span>
                        </article>
                        <article class=\"td-info\">
                            <span class=\"label\">Coordonnees de l'entree</span>
                            <span class=\"value\">
                                {% if transport.latitude is not null and transport.longitude is not null %}
                                    {{ transport.latitude }}, {{ transport.longitude }}
                                {% else %}
                                    Non specifie
                                {% endif %}
                            </span>
                        </article>
                        <article class=\"td-info\">
                            <span class=\"label\">Distance estimee</span>
                            <span class=\"value\">
                                {% if routeDistanceKm is not null %}{{ routeDistanceKm }} km{% else %}Non disponible{% endif %}
                            </span>
                        </article>
                    </div>
                </div>

                {% if transport.departure or transport.destination or transport.pickup %}
                <div class=\"td-block\">
                    <h3 class=\"td-section-title\"><i class=\"fas fa-map-marked-alt\" style=\"margin-right: 10px; color: var(--td-amber);\"></i>Correspondance des aéroports</h3>
                    <div class=\"td-airports\">
                        {% if transport.departure %}
                        <article class=\"td-airport\">
                            <h4>Aeroport de depart</h4>
                            <p>{{ transport.departure.nom }}<br>{{ transport.departure.ville }}, {{ transport.departure.pays }}<br>IATA: {{ transport.departure.codeIata }}<br>Categorie: {{ transport.departure.type }}</p>
                        </article>
                        {% endif %}
                        {% if transport.destination %}
                        <article class=\"td-airport\">
                            <h4>Aeroport de destination</h4>
                            <p>{{ transport.destination.nom }}<br>{{ transport.destination.ville }}, {{ transport.destination.pays }}<br>IATA: {{ transport.destination.codeIata }}<br>Categorie: {{ transport.destination.type }}</p>
                        </article>
                        {% endif %}
                        {% if transport.pickup %}
                        <article class=\"td-airport\">
                            <h4>Aeroport de prise en charge</h4>
                            <p>{{ transport.pickup.nom }}<br>{{ transport.pickup.ville }}, {{ transport.pickup.pays }}<br>IATA: {{ transport.pickup.codeIata }}<br>Categorie: {{ transport.pickup.type }}</p>
                        </article>
                        {% endif %}
                    </div>
                </div>
                {% endif %}

                <div class=\"td-description\">
                    <h3 style=\"margin-bottom: 16px;\"><i class=\"fas fa-align-left\" style=\"margin-right: 10px; color: var(--td-amber);\"></i>Description</h3>
                    <p>{{ transport.description|default('Aucune description detaillee n a encore ete ajoutee pour ce transport.') }}</p>
                </div>
            </div>

        </section>

        <aside class=\"td-sidebar\">
            {% if transport.type == 'AVION' %}
                <div class=\"td-ai-panel\" id=\"aiPredictorPanel\">
                    <div class=\"td-ai-header\">
                        <div class=\"td-ai-icon\">IA</div>
                        <div>
                            <h4 class=\"td-ai-title\">Intelligence Avancée</h4>
                            <div class=\"td-ai-subtitle\">Prédiction de Retard & Ponctualité</div>
                        </div>
                    </div>
                    <div id=\"aiLoading\" class=\"td-ai-loading\">
                        <div class=\"td-ai-spinner\"></div>
                        <p id=\"aiLoadingText\">Initialisation du réseau neuronal...</p>
                    </div>
                    <div id=\"aiResult\" class=\"td-ai-result\"></div>
                </div>
            {% elseif transport.type == 'VOITURE' %}
                <div class=\"td-ai-panel\" id=\"aiCarCarbonPanel\">
                    <div class=\"td-ai-header\">
                        <div class=\"td-ai-icon\" style=\"color: var(--td-success); background: rgba(52, 211, 153, 0.15); border-color: rgba(52, 211, 153, 0.3);\">IA</div>
                        <div>
                            <h4 class=\"td-ai-title\">Éco-IA Analytique</h4>
                            <div class=\"td-ai-subtitle\">Analyse d'Emissions Carbone</div>
                        </div>
                    </div>
                    <div id=\"aiCarLoading\" class=\"td-ai-loading\">
                        <div class=\"td-ai-spinner\" style=\"border-top-color: var(--td-success);\"></div>
                        <p id=\"aiCarLoadingText\">Analyse NLP de la description...</p>
                    </div>
                    <div id=\"aiCarResult\" class=\"td-ai-result\"></div>
                </div>
            {% endif %}

            <div class=\"booking-card\" id=\"reservation\">
    <div class=\"price-section\">
        {% if pricing.statut == 'flash' %}
            <div style=\"position: absolute; top: -15px; right: -15px; background: #ef4444; color: white; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: bold; animation: pulse 2s infinite; box-shadow: 0 0 15px rgba(239, 68, 68, 0.4);\">
                <i class=\"fas fa-bolt\"></i> OFFRE FLASH -{{ pricing.variation_pourcentage|abs }}%
            </div>
        {% elseif pricing.statut == 'high_demand' %}
            <div style=\"position: absolute; top: -15px; right: -15px; background: #FF9800; color: white; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: bold; box-shadow: 0 0 15px rgba(255, 152, 0, 0.4);\">
                <i class=\"fas fa-fire\"></i> TRÈS DEMANDÉ
            </div>
        {% endif %}

        <p class=\"price-label\">Total Estimé</p>

        <div style=\"display: flex; justify-content: center; align-items: baseline; gap: 10px; margin: 10px 0;\">
            {% if pricing.statut == 'flash' %}
                <span style=\"text-decoration: line-through; color: rgba(255,255,255,0.4); font-size: 20px;\">{{ pricing.prix_base }}</span>
            {% endif %}
            <p class=\"price-value\" style=\"margin: 0; {% if pricing.statut == 'flash' %}background: linear-gradient(135deg, #ff6b6b, #ef4444); -webkit-background-clip: text;{% endif %}\">
                <span id=\"live-price\">{{ pricing.prix_actuel }}</span> <span style=\"font-size: 24px;\">TND</span>
            </p>
        </div>

        <p style=\"font-size: 13px; color: {% if pricing.statut == 'flash' %}#ff8787{% elseif pricing.statut == 'high_demand' %}#ffb74d{% else %}var(--td-sky-soft){% endif %}; margin: 8px 0 15px 0; font-weight: 500;\">
            {{ pricing.message }}
        </p>

        {% if pricing.metrics is not empty %}
        <div style=\"background: rgba(0,0,0,0.2); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 10px; text-align: left; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-top: 15px;\">
            <div style=\"font-size: 11px; color: var(--td-text-soft);\"><i class=\"fas fa-hourglass-half\" style=\"color: var(--td-sky); width: 14px;\"></i> Pression: <strong style=\"color: white;\">{{ pricing.metrics.temps_pression }}</strong></div>
            <div style=\"font-size: 11px; color: var(--td-text-soft);\"><i class=\"fas fa-users\" style=\"color: var(--td-amber); width: 14px;\"></i> Demande: <strong style=\"color: white;\">{{ pricing.metrics.remplissage }}</strong></div>
        </div>
        {% endif %}
    </div>                
    
    {{ form_start(form, {'attr': {'class': 'booking-form'}}) }}
        
        {% if transport.type == 'AVION' %}
            {# --- BLOC AVION : Uniquement Date de Départ --- #}
            <div class=\"form-group\">
                <label>Date de départ</label>
                <div class=\"date-input-clean\" style=\"display: flex; align-items: center; background: rgba(255,255,255,0.05); padding: 10px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1);\">
                    <i class=\"fas fa-calendar-alt\" style=\"margin-right: 10px; color: var(--td-sky);\"></i>
                    {{ form_widget(form.dateDepart, {
                        'attr': {
                            'style': 'background: transparent; border: none; color: white; outline: none; width: 100%;',
                            'min': \"now\"|date(\"Y-m-d\")
                        }
                    }) }}
                </div>
            </div>

            <div style=\"display: flex; gap: 10px; margin-top: 15px;\">
                <div class=\"form-group\" style=\"flex: 1;\">{{ form_label(form.nbAdultes, 'Adultes') }}{{ form_widget(form.nbAdultes) }}</div>
                <div class=\"form-group\" style=\"flex: 1;\">{{ form_label(form.nbEnfants, 'Enfants') }}{{ form_widget(form.nbEnfants) }}</div>
                <div class=\"form-group\" style=\"flex: 1;\">{{ form_label(form.nbBebes, 'Bébés') }}{{ form_widget(form.nbBebes) }}</div>
            </div>
            
            <div class=\"form-group\">
                <label style=\"margin-top: 15px;\">Options de Bagages</label>
                <div class=\"luggage-options\">
                    <label class=\"luggage-option selected\">
                        <input type=\"checkbox\" class=\"luggage-chk\" data-price=\"0\" checked disabled>
                        <i class=\"fas fa-suitcase-rolling luggage-icon\"></i>
                        <span class=\"luggage-text\">Bagage à main (10kg)</span>
                        <span class=\"luggage-price\">Inclus</span>
                    </label>
                    <label class=\"luggage-option\">
                        <input type=\"checkbox\" class=\"luggage-chk\" data-price=\"80\">
                        <i class=\"fas fa-suitcase luggage-icon\"></i>
                        <span class=\"luggage-text\">Bagage lourd (23kg)</span>
                        <span class=\"luggage-price\">+80 TND</span>
                    </label>
                </div>
            </div>
            
            {# On cache la Date d'Arrivée pour l'Avion pour éviter les soumissions vides si non souhaité #}
            <div style=\"display: none;\">
                {{ form_widget(form.dateArrivee) }}
            </div>

        {% elseif transport.type == 'VOITURE' %}
            {# --- BLOC VOITURE : Uniquement Date d'Arrivée (Retour) --- #}
            <div class=\"form-group\" style=\"margin-top: 15px;\">
                <label>Date de retour (Arrivée)</label>
                <div class=\"date-input-clean\" style=\"display: flex; align-items: center; background: rgba(255,255,255,0.05); padding: 10px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1);\">
                    <i class=\"fas fa-calendar-check\" style=\"margin-right: 10px; color: var(--td-sky);\"></i>
                    {{ form_widget(form.dateArrivee, {
                        'attr': {
                            'style': 'background: transparent; border: none; color: white; outline: none; width: 100%;',
                            'min': \"now\"|date(\"Y-m-d\")
                        }
                    }) }}
                </div>
            </div>
            
            {# On cache les autres champs générés par le formBuilder pour éviter les crashs de rendu #}
            <div style=\"display: none;\">
                {{ form_widget(form.dateDepart) }}
                {{ form_widget(form.nbAdultes) }}
                {{ form_widget(form.nbEnfants) }}
                {{ form_widget(form.nbBebes) }}
            </div>
        {% endif %}
        
        <button type=\"submit\" class=\"btn-reserve\" style=\"margin-top: 20px;\"><span>Confirmer la réservation</span><i class=\"fas fa-arrow-right\"></i></button>
        <div class=\"guarantee-badge\">
            <i class=\"fas fa-shield-alt\"></i>
            <span>Réservation sécurisée - Annulation gratuite jusqu'à 48 heures avant le départ</span>
        </div>
    {{ form_end(form) }}
</div>
        </aside>
    </div>
</main>



{# --- SECTION MAP IA MULTI-ROUTAGE --- #}
{% if transport.type|upper == 'VOITURE' %}
    {# Variables de positionnement #}
    {% set airport = transport.pickup %}
    {% set mapLat = airport and airport.lat ? airport.lat : (transport.latitude ? transport.latitude : 36.8516) %}
    {% set mapLng = airport and airport.lng ? airport.lng : (transport.longitude ? transport.longitude : 10.2272) %}
    {% set airportName = airport ? airport.nom : 'Aéroport de prise en charge' %}

    <style>
        .btn-route {
    background: rgba(52, 152, 219, 0.1) !important;
    color: #3498db !important;
    border: 1px solid #3498db !important;
    padding: 10px 20px !important;
    border-radius: 8px !important;
    cursor: pointer !important;
    font-weight: 700 !important;
    font-size: 13px !important;
    transition: all 0.3s ease !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
}

.btn-route:hover {
    background: rgba(52, 152, 219, 0.3) !important;
    transform: translateY(-2px);
}

.btn-route.active {
    background: #2ed573 !important;
    color: #fff !important;
    border-color: #2ed573 !important;
    box-shadow: 0 0 15px rgba(46, 213, 115, 0.4) !important;
}
    </style>
    <hr style=\"border-color: rgba(255,255,255,0.1);\">

    <div class=\"td-map-full-section\" style=\"position: relative; margin-top: 50px;\">
        <div class=\"td-map-header\" style=\"display: flex; flex-direction: column; gap: 10px; margin-bottom: 25px;\">
            <div style=\"display: flex; align-items: center; gap: 15px;\">
             
            </div>
            {# NOUVEAU : Le sélecteur de trajets #}
            <div id=\"route-selector\" style=\"display: flex; gap: 12px; flex-wrap: wrap; margin-top: 10px; min-height: 45px;\">
    {# Le span sera effacé par le JS dès que les boutons arrivent #}
    <span id=\"route-loading-status\" style=\"color: #888; font-size: 13px;\">Initialisation des tracés IA...</span>
</div>
        </div>

        <div class=\"td-map-wrapper\" style=\"position: relative; border-radius: 16px; overflow: hidden; height: 600px; border: 1px solid rgba(255,255,255,0.1);\">
            {# Le conteneur de la carte #}
            <div id=\"interactiveMap\" style=\"width: 100%; height: 100%; background: #0b0e14;\"></div>
            
            {# Indicateur de disponibilité (Droite) #}
            <div style=\"position: absolute; top: 20px; right: 20px; z-index: 1000; background: rgba(5, 22, 33, 0.9); backdrop-filter: blur(8px); padding: 15px 20px; border-radius: 12px; border: 1px solid var(--td-sky);\">
                <span style=\"color: var(--td-sky-soft); font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;\">Localisation</span>
                <div style=\"color: #fff; font-size: 14px; margin-top: 4px; font-weight: 600;\">
                    <i class=\"fas fa-car-side\" style=\"color: var(--td-amber); margin-right: 8px;\"></i> {{ airportName }}
                </div>
            </div>

            {# Dashboard IA (Gauche) #}
            <div id=\"ia-dashboard\" style=\"display: none; position: absolute; top: 20px; left: 20px; z-index: 1000; background: rgba(5, 22, 33, 0.9); backdrop-filter: blur(8px); padding: 18px; border-radius: 12px; border: 1px solid #2ed573; min-width: 260px; box-shadow: 0 8px 32px rgba(0,0,0,0.5);\">
                <div style=\"display: flex; align-items: center; gap: 10px; margin-bottom: 12px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px;\">
                    <i class=\"fas fa-brain\" style=\"color: #2ed573; font-size: 18px;\"></i>
                    <span style=\"color: #fff; font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;\">IA Navigation System</span>
                </div>
                
                <div id=\"ia-alert\" style=\"display: none; background: rgba(255, 71, 87, 0.15); border-left: 3px solid #ff4757; padding: 8px; margin-bottom: 12px; color: #ff4757; font-size: 11px; font-weight: 600;\"></div>

              <div style=\"display: flex; flex-direction: column; gap: 9px;\">

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-traffic-light\"></i> Trafic :</span>
        <strong id=\"ia-trafic\" style=\"font-size: 13px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-clock\"></i> Arrivée :</span>
        <strong id=\"ia-eta\" style=\"color: #fff; font-size: 13px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-stopwatch\"></i> Fourchette :</span>
        <strong id=\"ia-eta-range\" style=\"color: #aaa; font-size: 12px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-tachometer-alt\"></i> Vitesse moy. :</span>
        <strong id=\"ia-vitesse\" style=\"color: #fff; font-size: 13px;\">-</strong>
    </div>

    <div style=\"border-top: 1px solid rgba(255,255,255,0.07); margin: 2px 0;\"></div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-gas-pump\"></i> Conso :</span>
        <strong id=\"ia-conso\" style=\"color: #fff; font-size: 13px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-tint\"></i> L/100km :</span>
        <strong id=\"ia-l100\" style=\"color: #fff; font-size: 13px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-euro-sign\"></i> Coût est. :</span>
        <strong id=\"ia-cout\" style=\"color: #ffa502; font-size: 13px;\">-</strong>
    </div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-leaf\"></i> CO₂ :</span>
        <strong id=\"ia-co2\" style=\"color: #2ed573; font-size: 13px;\">-</strong>
    </div>

    <div style=\"border-top: 1px solid rgba(255,255,255,0.07); margin: 2px 0;\"></div>

    <div style=\"display: flex; justify-content: space-between; align-items: center;\">
        <span style=\"color: #888; font-size: 12px;\"><i class=\"fas fa-bullseye\"></i> Fiabilité :</span>
        <div style=\"display: flex; align-items: center; gap: 6px;\">
            <div style=\"width: 60px; height: 5px; background: rgba(255,255,255,0.1); border-radius: 3px; overflow: hidden;\">
                <div id=\"ia-fiab-bar\" style=\"height: 100%; background: #2ed573; width: 0%; transition: width 0.6s ease; border-radius: 3px;\"></div>
            </div>
            <strong id=\"ia-fiab\" style=\"color: #fff; font-size: 12px;\">-</strong>
        </div>
    </div>

</div>
            </div>
            
            {# Loader #}
            <div id=\"map-loader\" style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1001; background: rgba(5, 22, 33, 0.95); border: 1px solid var(--td-sky); padding: 20px 40px; border-radius: 12px; color: white; text-align: center; box-shadow: 0 0 30px rgba(0,0,0,0.5);\">
                <i class=\"fas fa-sync fa-spin\" style=\"color: var(--td-sky); font-size: 24px; margin-bottom: 10px;\"></i>
                <div style=\"font-size: 14px; font-weight: 600;\">Calcul des options de route...</div>
            </div>
        </div>
    </div>

    
{% endif %}
<section class=\"td-related\">
    <h2 class=\"td-head\">Transports similaires</h2>
    
    {% if relatedTransports is not empty %}
        <div class=\"td-related-grid\">
            {% for item in relatedTransports %}
                <a class=\"td-related-card\" href=\"{{ path('app_transport_detail', {'id': item.id}) }}\">
                    
                    <div class=\"td-related-header\">
                        <span class=\"td-badge\">
                            {% if item.type == 'AVION' %}
                                <i class=\"fas fa-plane\"></i>
                            {% else %}
                                <i class=\"fas fa-car\"></i>
                            {% endif %}
                            &nbsp;{{ item.type }}
                        </span>
                    </div>
                    
                    <h3>{{ item.nom }}</h3>
                    
                    <div class=\"td-related-route\">
                        {% if item.departure and item.destination %}
                            <div class=\"td-route-item\"><i class=\"fas fa-plane-departure\"></i><span>{{ item.departure.ville }} ({{ item.departure.codeIata }})</span></div>
                            <div class=\"td-route-item\"><i class=\"fas fa-plane-arrival\"></i><span>{{ item.destination.ville }} ({{ item.destination.codeIata }})</span></div>
                        {% elseif item.pickup %}
                            <div class=\"td-route-item\"><i class=\"fas fa-map-marker-alt\"></i><span>Prise en charge : {{ item.pickup.nom }} ({{ item.pickup.codeIata }})</span></div>
                        {% else %}
                            <div class=\"td-route-item\"><i class=\"fas fa-route\"></i><span>Itinéraire détaillé sur demande</span></div>
                        {% endif %}
                    </div>

                    <div class=\"td-related-footer\">
                        <p class=\"td-related-price\">{{ item.prix|number_format(2, '.', ' ') }} <span>TND</span></p>
                        <span class=\"td-related-action\">Voir détails <i class=\"fas fa-arrow-right\"></i></span>
                    </div>
                </a>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"td-empty\" style=\"padding: 40px; border: 1px dashed rgba(47, 168, 255, 0.4); border-radius: 14px; text-align: center; color: var(--td-text-soft);\">
            <i class=\"fas fa-search\" style=\"font-size: 38px; color: var(--td-sky-soft); margin-bottom: 16px; display: block; opacity: 0.6;\"></i>
            <p style=\"margin: 0; font-size: 16px;\">Aucun transport similaire n'a encore été trouvé pour ce type.</p>
        </div>
    {% endif %}
</section>

{% if transport.type == 'AVION' %}
<div class=\"td-modal-overlay\" id=\"aiDetailsModal\">
    <div class=\"td-modal\">
        <div class=\"td-modal-header\">
            <h3 class=\"td-modal-title\"><i class=\"fas fa-brain\"></i> Rapport Analytique de l'IA</h3>
            <button class=\"td-modal-close\" id=\"closeAiModal\">&times;</button>
        </div>
        <div class=\"td-modal-body\">
            <div class=\"td-modal-top-stats\">
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-cloud-sun\"></i> Météo Aéronautique</h4>
                    <p id=\"modalWeatherDesc\">Analyse en cours...</p>
                    <div class=\"td-progress\"><div class=\"td-progress-fill\" id=\"modalWeatherBar\"></div></div>
                </div>
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-satellite-dish\"></i> Trafic & Encombrement</h4>
                    <p id=\"modalTrafficDesc\">Analyse en cours...</p>
                    <div class=\"td-progress\"><div class=\"td-progress-fill\" id=\"modalTrafficBar\"></div></div>
                </div>
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-route\"></i> Profil de la Route</h4>
                    <p id=\"modalRouteDesc\" style=\"font-size: 18px; font-weight: bold; color: white; margin-top: 10px;\">Analyse en cours...</p>
                    <span style=\"font-size: 12px; color: var(--td-sky-soft);\"><span class=\"td-pulse-dot\"></span> Connexion satellite active</span>
                </div>
            </div>

            <div class=\"td-modal-chart-section\">
                <div style=\"display: flex; justify-content: space-between; align-items: center;\">
                    <h4><i class=\"fas fa-chart-line\"></i> Évolution Historique de la Ponctualité (6 derniers mois)</h4>
                    <div style=\"text-align: right;\">
                        <span style=\"font-size: 12px; color: var(--td-text-soft); text-transform: uppercase;\">Moyenne globale</span><br>
                        <strong id=\"modalHistoricalDesc\" style=\"font-size: 24px; color: var(--td-success); font-family: 'Playfair Display', serif;\">--%</strong>
                    </div>
                </div>
                <div class=\"td-chart-container\">
                    <canvas id=\"punctualityChart\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
{% elseif transport.type == 'VOITURE' %}
<div class=\"td-modal-overlay\" id=\"aiCarDetailsModal\">
    <div class=\"td-modal\">
        <div class=\"td-modal-header\">
            <h3 class=\"td-modal-title\"><i class=\"fas fa-leaf\"></i> Bilan Éco-Responsable ASAFAR</h3>
            <button class=\"td-modal-close\" id=\"closeAiCarModal\">&times;</button>
        </div>
        <div class=\"td-modal-body\">
            <div class=\"td-modal-top-stats\">
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-car\"></i> Modèle Analysé</h4>
                    <div id=\"modalCarBrandVal\" class=\"td-modal-val\" style=\"color: var(--td-sky);\">...</div>
                    <p id=\"modalCarBrandSub\" class=\"td-modal-sub\">Détection via description...</p>
                </div>
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-smog\"></i> Empreinte Totale</h4>
                    <div id=\"modalCarTotalVal\" class=\"td-modal-val\" style=\"color: #ef4444;\">...</div>
                    <p id=\"modalCarTotalDesc\" class=\"td-modal-sub\">Sur la durée du trajet</p>
                </div>
                <div class=\"td-modal-card\">
                    <h4><i class=\"fas fa-tree\"></i> Compensation</h4>
                    <div id=\"modalCarTreesVal\" class=\"td-modal-val\" style=\"color: var(--td-success);\">0.0</div>
                    <p class=\"td-modal-sub\">Arbres à planter pour compenser</p>
                </div>
            </div>

            <div class=\"td-modal-chart-section\">
                <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;\">
                    <h4><i class=\"fas fa-balance-scale\"></i> Comparaison des émissions (g/km)</h4>
                    <div id=\"modalCarEmissionVal\" style=\"font-size: 22px; font-weight: 800; color: white; font-family: 'Playfair Display', serif;\">...</div>
                </div>
                <div class=\"td-chart-container\" style=\"height: 180px;\">
                    <canvas id=\"carEmissionChart\"></canvas>
                </div>
                <div id=\"modalCarEcoDesc\" class=\"td-eco-advice\" style=\"margin-top: 20px; background: rgba(52, 211, 153, 0.1); border-left-color: var(--td-success);\">
                    Chargement des recommandations...
                </div>
            </div>
        </div>
    </div>
</div>
{% endif %}

<script>
document.addEventListener('DOMContentLoaded', () => {
    const type = \"{{ transport.type }}\";
    const distStr = \"{{ routeDistanceKm|default('0') }}\";
    const dist = parseFloat(distStr) || 0;
    const id = parseInt(\"{{ transport.id|default('0') }}\");
    const today = new Date().toISOString().split('T')[0];

    // --- GESTION VISUELLE DE L'INPUT DATE (Masquer mm/dd/yyyy) ---
    const dateInputs = document.querySelectorAll('input[type=\"date\"]');
    dateInputs.forEach(input => {
        if(input.value) input.classList.add('has-value');
        input.addEventListener('input', function() {
            if (this.value) this.classList.add('has-value');
            else this.classList.remove('has-value');
        });
    });

    // --- GESTION UI DES CHECKBOX BAGAGES ---
    const luggageCheckboxes = document.querySelectorAll('.luggage-chk');
    luggageCheckboxes.forEach(chk => {
        chk.addEventListener('change', function() {
            const parent = this.closest('.luggage-option');
            if (this.checked) parent.classList.add('selected');
            else parent.classList.remove('selected');
            
            if (typeof updateFlightPrice === \"function\") updateFlightPrice();
        });
    });

    // --- VALIDATION DES DATES ---
    const startInput = document.getElementById('transport_reservation_dateDebut');
    const endInput = document.getElementById('transport_reservation_dateFin');
    
    if (startInput) {
        startInput.setAttribute('min', today);
        startInput.addEventListener('change', () => {
            if (endInput) {
                endInput.setAttribute('min', startInput.value);
                if (endInput.value && endInput.value < startInput.value) {
                    endInput.value = startInput.value;
                }
                if (typeof updateCarPrice === \"function\") updateCarPrice();
            }
        });
    }
    if (endInput) { endInput.setAttribute('min', today); }

    // --- IA AVION ---
    if (type === 'AVION') {
        const panel = document.getElementById('aiPredictorPanel');
        if(panel) {
            let baseProb = 98 - (dist / 1200) - (id % 7);
            if(baseProb > 99) baseProb = 99;
            if(baseProb < 65) baseProb = 65 + (id % 20);
            let probColor = baseProb < 70 ? '#ef4444' : (baseProb < 80 ? 'var(--td-amber)' : 'var(--td-success)');
            let trafficFactor = (dist > 2000 || id % 3 === 0) ? { label: 'Congestion modérée', class: 'risk-medium' } : { label: 'Trafic fluide', class: 'risk-low' };
            let weatherFactor = (id % 12 === 0) ? { label: 'Alerte vents violents', class: 'risk-high' } : (id % 5 === 0 ? { label: 'Perturbations possibles', class: 'risk-medium' } : { label: 'Conditions optimales', class: 'risk-low' });
            
            const texts = [\"Analyse des historiques...\", \"Évaluation du trafic...\", \"Corrélation météo...\", \"Modélisation...\"];
            let step = 0;
            const loadingText = document.getElementById('aiLoadingText');
            let isLoaded = false;
            
            const interval = setInterval(() => {
                step++;
                if(step < texts.length) { loadingText.innerText = texts[step]; }
                else {
                    clearInterval(interval);
                    document.getElementById('aiLoading').style.display = 'none';
                    isLoaded = true;
                    
                    const res = document.getElementById('aiResult');
                    res.style.display = 'block';
                    res.innerHTML = `<div class=\"td-ai-score-wrap\"><div class=\"td-ai-score-val\" style=\"color: \${probColor}\">\${baseProb.toFixed(1)}%</div><div style=\"font-size: 13px; color: var(--td-text-soft);\">Probabilité d'arrivée à l'heure</div></div><div class=\"td-ai-grid\"><div class=\"td-ai-factor \${trafficFactor.class}\"><span>Trafic Route</span><strong>\${trafficFactor.label}</strong></div><div class=\"td-ai-factor \${weatherFactor.class}\"><span>Météo Estimée</span><strong>\${weatherFactor.label}</strong></div></div><div class=\"td-ai-hint\">Cliquez pour voir la courbe détaillée</div>`;
                    
                    document.getElementById('modalWeatherDesc').innerText = `\${weatherFactor.label}. Visibilité satisfaisante.`;
                    document.getElementById('modalTrafficDesc').innerText = `\${trafficFactor.label} prévu sur les couloirs aériens.`;
                    document.getElementById('modalHistoricalDesc').innerText = `\${(85 + (id % 15))}%`;
                    document.getElementById('modalRouteDesc').innerText = dist > 0 ? `Itinéraire de \${dist} km` : `Plan de vol standard`;

                    const modal = document.getElementById('aiDetailsModal');
                    let chartInstance = null;

                    panel.addEventListener('click', () => { 
                        if(isLoaded) { 
                            modal.style.display = 'flex'; 
                            void modal.offsetWidth; 
                            modal.classList.add('active'); 
                            document.body.style.overflow = 'hidden'; 
                            
                            setTimeout(() => {
                                const wBar = document.getElementById('modalWeatherBar');
                                wBar.style.width = weatherFactor.class === 'risk-high' ? '30%' : (weatherFactor.class === 'risk-medium' ? '60%' : '95%');
                                wBar.style.background = weatherFactor.class === 'risk-high' ? '#ef4444' : (weatherFactor.class === 'risk-medium' ? 'var(--td-amber)' : 'var(--td-success)');
                                
                                const tBar = document.getElementById('modalTrafficBar');
                                tBar.style.width = trafficFactor.class === 'risk-high' ? '40%' : (trafficFactor.class === 'risk-medium' ? '70%' : '90%');
                                tBar.style.background = trafficFactor.class === 'risk-high' ? '#ef4444' : (trafficFactor.class === 'risk-medium' ? 'var(--td-amber)' : 'var(--td-success)');
                            }, 300);

                            setTimeout(() => {
                                if (typeof Chart === 'undefined') return;
                                const canvas = document.getElementById('punctualityChart');
                                if(!chartInstance && canvas) {
                                    const ctx = canvas.getContext('2d');
                                    const dataPoints = [baseProb - 12, baseProb - 5, baseProb + 4, baseProb - 8, baseProb + 2, baseProb].map(v => Math.min(100, Math.max(0, v)));
                                    const gradient = ctx.createLinearGradient(0, 0, 0, 200);
                                    gradient.addColorStop(0, 'rgba(47, 168, 255, 0.4)');
                                    gradient.addColorStop(1, 'rgba(47, 168, 255, 0.0)');
                                    chartInstance = new Chart(ctx, {
                                        type: 'line',
                                        data: { labels: ['M-5', 'M-4', 'M-3', 'M-2', 'M-1', 'Ce mois'], datasets: [{ data: dataPoints, borderColor: '#2FA8FF', backgroundColor: gradient, borderWidth: 3, pointBackgroundColor: '#FFC107', pointBorderColor: '#fff', pointBorderWidth: 2, pointRadius: 5, pointHoverRadius: 7, fill: true, tension: 0.4 }] },
                                        options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { min: 40, max: 100, grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { color: '#BED1E0' } }, x: { grid: { display: false }, ticks: { color: '#BED1E0' } } } }
                                    });
                                }
                            }, 150);
                        } 
                    });
                    
                    document.getElementById('closeAiModal').addEventListener('click', () => { 
                        modal.classList.remove('active'); 
                        document.body.style.overflow = ''; 
                        setTimeout(() => { if(!modal.classList.contains('active')) modal.style.display = 'none'; }, 300); 
                    });
                }
            }, 800);
        }
    } 
    // --- IA VOITURE ---
    else if (type === 'VOITURE') {
        const panelCar = document.getElementById('aiCarCarbonPanel');
        if(panelCar) {
            const desc = \"{{ transport.description|default('')|escape('js') }}\".toLowerCase();
            const brandKeywords = {'peugeot': 'Peugeot', 'renault': 'Renault', 'mercedes': 'Mercedes', 'bmw': 'BMW', 'audi': 'Audi', 'toyota': 'Toyota', 'tesla': 'Tesla', 'ford': 'Ford'};
            let detectedBrand = 'Véhicule Standard';
            let isElectric = false;
            
            for (const [key, value] of Object.entries(brandKeywords)) { 
                if (desc.includes(key)) { detectedBrand = value; break; } 
            }
            if (desc.includes('électrique') || detectedBrand === 'Tesla') isElectric = true;

            let baseEmission = isElectric ? 0 : (110 + (id % 30));
            const totalDistance = dist > 0 ? dist : 50;
            const totalCarbon = ((baseEmission * totalDistance) / 1000).toFixed(2);
            let ecoColor = baseEmission > 130 ? '#ef4444' : (baseEmission > 95 ? 'var(--td-amber)' : 'var(--td-success)');
            
            let stepCar = 0;
            const loadingTextCar = document.getElementById('aiCarLoadingText');
            let isCarLoaded = false;
            
            const intervalCar = setInterval(() => {
                stepCar++;
                if(stepCar < 4) { 
                    loadingTextCar.innerText = [\"Analyse textuelle...\", \"Extraction modèle...\", \"Corrélation WLTP...\", \"Calcul bilan...\"][stepCar]; 
                } else {
                    clearInterval(intervalCar);
                    document.getElementById('aiCarLoading').style.display = 'none';
                    isCarLoaded = true;
                    
                    const resCar = document.getElementById('aiCarResult');
                    resCar.style.display = 'block';
                    resCar.innerHTML = `<div class=\"td-ai-score-wrap\"><div class=\"td-ai-score-val\" style=\"color: \${ecoColor}\">\${baseEmission} <span style=\"font-size: 20px;\">g/km</span></div><div style=\"font-size: 13px; color: var(--td-text-soft);\">Émissions CO₂ estimées</div></div><div class=\"td-ai-grid\"><div class=\"td-ai-factor risk-low\"><span>Véhicule</span><strong>\${detectedBrand}</strong></div><div class=\"td-ai-factor\"><span>Bilan Trajet</span><strong>\${totalCarbon} kg</strong></div></div><div class=\"td-ai-hint\">Cliquez pour le bilan détaillé</div>`;
                    
                    document.getElementById('modalCarBrandVal').innerText = detectedBrand;
                    document.getElementById('modalCarBrandSub').innerText = isElectric ? 'Moteur 100% électrique.' : 'Moteur thermique/hybride.';
                    document.getElementById('modalCarEmissionVal').innerText = `\${baseEmission} g/km`;
                    document.getElementById('modalCarTotalVal').innerHTML = `<span style=\"color:\${ecoColor}\">\${totalCarbon}</span> kg CO₂`;
                    
                    const ecoDescElement = document.getElementById('modalCarEcoDesc');
                    if (isElectric) {
                        ecoDescElement.innerHTML = \"<strong>Excellent choix !</strong> Ce véhicule n'émet aucun gaz à effet de serre direct en roulant.\";
                        ecoDescElement.style.borderLeftColor = \"var(--td-success)\";
                    } else if (baseEmission <= 120) {
                        ecoDescElement.innerHTML = \"<strong>Véhicule efficient.</strong> Ses émissions sont dans la moyenne basse de sa catégorie.\";
                        ecoDescElement.style.borderLeftColor = \"var(--td-success)\";
                    } else {
                        ecoDescElement.innerHTML = \"<strong>Attention à l'éco-conduite.</strong> Ce véhicule a une empreinte carbone supérieure à la moyenne.\";
                        ecoDescElement.style.borderLeftColor = \"var(--td-amber)\";
                        ecoDescElement.style.background = \"rgba(255, 193, 7, 0.1)\";
                    }
                }
            }, 800);

            const modalCar = document.getElementById('aiCarDetailsModal');
            let carChartInstance = null;

            panelCar.addEventListener('click', () => { 
                if(isCarLoaded) { 
                    modalCar.style.display = 'flex'; 
                    void modalCar.offsetWidth; 
                    modalCar.classList.add('active'); 
                    document.body.style.overflow = 'hidden'; 

                    const treesNeeded = (parseFloat(totalCarbon) / 22).toFixed(2);
                    document.getElementById('modalCarTreesVal').innerText = treesNeeded;

                    setTimeout(() => {
                        if (typeof Chart === 'undefined') return;
                        if(!carChartInstance && window.Chart) {
                            const ctxCar = document.getElementById('carEmissionChart').getContext('2d');
                            carChartInstance = new Chart(ctxCar, {
                                type: 'bar',
                                data: { labels: ['Ce véhicule', 'Moyenne', 'Objectif Éco'], datasets: [{ data: [baseEmission, 120, 95], backgroundColor: [baseEmission > 120 ? 'rgba(239, 68, 68, 0.6)' : 'rgba(52, 211, 153, 0.6)', 'rgba(180, 180, 180, 0.3)', 'rgba(47, 168, 255, 0.4)'], borderColor: [baseEmission > 120 ? '#ef4444' : '#34D399', '#ffffff', '#2FA8FF'], borderWidth: 2, borderRadius: 8 }] },
                                options: { indexAxis: 'y', responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { x: { max: 250, grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { color: '#BED1E0' } }, y: { grid: { display: false }, ticks: { color: '#ffffff' } } } }
                            });
                        }
                    }, 150);
                } 
            });

            document.getElementById('closeAiCarModal').addEventListener('click', () => { 
                modalCar.classList.remove('active'); 
                document.body.style.overflow = ''; 
                setTimeout(() => { if(!modalCar.classList.contains('active')) modalCar.style.display = 'none'; }, 300); 
            });
        }
    }

    // === LOGIQUE DE RESERVATION (LIVE PRICE CALCULATOR) ===
    const livePriceDisplay = document.getElementById('live-price');
    if (livePriceDisplay) {
        // Le prix de base envoyé par le PHP (Algorithme)
        const livePriceBase = parseFloat(\"{{ pricing.prix_actuel|default(transport.prix) }}\");

        if (type === 'AVION') {
            const adultsInput = document.getElementById('transport_reservation_nbAdultes');
            const childrenInput = document.getElementById('transport_reservation_nbEnfants');
            const babiesInput = document.getElementById('transport_reservation_nbBebes');
            const bagages = document.querySelectorAll('.luggage-chk');

            window.updateFlightPrice = function() {
                const numAdults = parseInt(adultsInput ? adultsInput.value : 1) || 0;
                const numChildren = parseInt(childrenInput ? childrenInput.value : 0) || 0;
                const numBabies = parseInt(babiesInput ? babiesInput.value : 0) || 0;

                // Calcul : Adultes (100%), Enfants (-33% donc 67%), Bébés (10%)
                let total = (numAdults * livePriceBase) + 
                            (numChildren * livePriceBase * 0.67) + 
                            (numBabies * livePriceBase * 0.10);

                // Bagages : Seulement pour les adultes et enfants
                let payingPassengers = numAdults + numChildren;
                if(payingPassengers === 0) payingPassengers = 1; // Sécurité

                bagages.forEach(chk => {
                    if (chk.checked && !chk.disabled) {
                        total += (parseFloat(chk.dataset.price) * payingPassengers);
                    }
                });

                // Update uniquement le numéro, pas le texte TND
                livePriceDisplay.innerText = total.toFixed(2);
            };
            
            if(adultsInput) adultsInput.addEventListener('input', updateFlightPrice);
            if(childrenInput) childrenInput.addEventListener('input', updateFlightPrice);
            if(babiesInput) babiesInput.addEventListener('input', updateFlightPrice);
            
            updateFlightPrice(); // Initialisation
            
        } else if (type === 'VOITURE') {
            const startInput = document.getElementById('transport_reservation_dateDebut');
            const endInput = document.getElementById('transport_reservation_dateFin');
            
            window.updateCarPrice = function() {
                if (startInput && endInput && startInput.value && endInput.value) {
                    const start = new Date(startInput.value);
                    const end = new Date(endInput.value);
                    let diffDays = Math.ceil(Math.abs(end - start) / (1000 * 60 * 60 * 24));
                    if (diffDays === 0) diffDays = 1; // Minimum 1 jour de facturation
                    
                    // Update uniquement le numéro
                    livePriceDisplay.innerText = (diffDays * livePriceBase).toFixed(2);
                }
            }
            if(startInput) startInput.addEventListener('change', updateCarPrice);
            if(endInput) endInput.addEventListener('change', updateCarPrice);
        }
    }
});
</script>

<script>
window.addEventListener(\"load\", () => document.body.classList.add(\"loaded\"));
document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const heroContent = document.querySelector('.td-hero-content');
        if (heroContent && scrolled < 600) {
            heroContent.style.transform = `translateY(\${scrolled * 0.3}px)`;
            heroContent.style.opacity = 1 - (scrolled / 500);
        }
    });
});
</script>

<script>
    const modal = document.getElementById(\"qrModal\");
    const btn = document.getElementById(\"showQrBtn\");
    const span = document.getElementsByClassName(\"close-modal\")[0];

    btn.onclick = () => modal.style.display = \"block\";
    span.onclick = () => modal.style.display = \"none\";
    window.onclick = (event) => { if (event.target == modal) modal.style.display = \"none\"; }
</script>
{% if transport.type|upper == 'VOITURE' %}
<script>
document.addEventListener('DOMContentLoaded', () => {
    // 1. Récupération dynamique des coordonnées de l'aéroport (pickup)
    // On utilise 'lat' et 'lng' car 'latitude' n'existe pas dans ton entité
    {% set airport = transport.pickup %}
    const lat = {{ airport and airport.lat ? airport.lat : (transport.latitude ? transport.latitude : 36.8516) }};
    const lng = {{ airport and airport.lng ? airport.lng : (transport.longitude ? transport.longitude : 10.2272) }};
    
    const vehicleName = \"{{ transport.nom|escape('js') }}\";
    const airportName = \"{{ airport ? airport.nom|escape('js') : 'Point de retrait' }}\";

    // 2. Initialisation de la map (optimisée pour tes 8 Go de RAM)
    const map = L.map('interactiveMap', {
        center: [lat, lng],
        zoom: 15, // Zoom plus précis pour l'aéroport
        zoomControl: false,
        fadeAnimation: true
    });

    // 3. Tiles Dark Mode (CartoDB) - Le look \"Perfectionniste\" pour ASAFAR [cite: 1, 60]
    L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap',
        subdomains: 'abcd',
        maxZoom: 19
    }).addTo(map);

    // 4. FIX CRUCIAL : Invalidation de la taille pour ton i9-13900H
    setTimeout(() => {
        map.invalidateSize();
    }, 400);

    // 5. Zone d'impact IA (Cercle pulsant)
    const reachZone = L.circle([lat, lng], {
        color: '#2FA8FF',
        fillColor: '#2FA8FF',
        fillOpacity: 0.1,
        radius: 3000,
        weight: 1,
        dashArray: '5, 10'
    }).addTo(map);

    // 6. Marqueur et Popup avec le nom de l'aéroport spécifique
    const customIcon = L.divIcon({ className: 'custom-ai-marker' });
    L.marker([lat, lng], { icon: customIcon })
        .addTo(map)
        .bindPopup(`
            <div style=\"text-align:center; font-family:'Poppins', sans-serif;\">
                <b style=\"color:#051621; display:block; margin-bottom:4px;\">\${vehicleName}</b>
                <span style=\"color:#1E6FA8; font-size:12px;\">
                    <i class=\"fas fa-map-marker-alt\"></i> \${airportName}
                </span>
            </div>
        `)
        .openPopup();
});
</script>

<script>
        (function() {
            let map;
            let currentRoutes = [];
            let routeLayers = [];

function displayRoute(index) {
    if (!currentRoutes || !currentRoutes[index]) return;

    // Nettoyer les tracés existants
    routeLayers.forEach(l => { if (map.hasLayer(l)) map.removeLayer(l); });
    routeLayers = [];

    // Dessiner toutes les routes, sélectionnée en dernier (z-index le plus haut)
    const drawOrder = currentRoutes
        .map((_, i) => i)
        .filter(i => i !== index)
        .concat([index]); // route active dessinée en dernier = au-dessus

    drawOrder.forEach(i => {
        const route = currentRoutes[i];
        const isSelected = (i === index);
        const color = route.color || '#888';

        const layer = L.geoJSON(route.geometry, {
            style: {
                color:      color,
                weight:     isSelected ? 8 : 5,
                opacity:    isSelected ? 1.0 : 0.65,
                dashArray:  isSelected ? null : '10 6',
                lineJoin:   'round',
                lineCap:    'round',
            }
        }).addTo(map);

        layer.on('click', () => displayRoute(i));
        routeLayers[i] = layer; // stocké par index réel
    });

    // fitBounds sur la route active uniquement
    if (routeLayers[index]) {
        map.fitBounds(routeLayers[index].getBounds(), { padding: [60, 60] });
    }

    // Dashboard
    const route = currentRoutes[index];
    const preds = route.predictions.predictions;
    const stats = route.predictions.analyse_metier;
    const color = route.color || '#3498db';

    const dashboard = document.getElementById('ia-dashboard');
    if (dashboard) { dashboard.style.display = 'block'; dashboard.style.borderColor = color; }

    document.getElementById('ia-trafic').innerText   = stats.statut_trafic;
document.getElementById('ia-trafic').style.color = stats.couleur_trafic || color;

document.getElementById('ia-eta').innerText      = preds.eta_reel_min + ' min';
document.getElementById('ia-eta-range').innerText =
    (preds.eta_optimiste_min ?? '-') + ' – ' + (preds.eta_pessimiste_min ?? '-') + ' min';

document.getElementById('ia-vitesse').innerText  =
    (stats.vitesse_reelle ?? '-') + ' km/h';

document.getElementById('ia-conso').innerText    =
    preds.consommation_estimee_litres + ' L';

document.getElementById('ia-l100').innerText     =
    (preds.consommation_l100 ?? '-') + ' L/100km';

document.getElementById('ia-cout').innerText     =
    '~' + (preds.cout_estime_eur ?? '-') + ' €';

document.getElementById('ia-co2').innerText      =
    (preds.co2_grammes ?? '-') + ' g CO₂';

// Barre de fiabilité animée
const fiab = preds.fiabilite_pct ?? 70;
document.getElementById('ia-fiab').innerText     = fiab + '%';
document.getElementById('ia-fiab-bar').style.width = fiab + '%';
document.getElementById('ia-fiab-bar').style.background =
    fiab >= 85 ? '#2ed573' : fiab >= 65 ? '#ffa502' : '#ff4757';

    const alertBox = document.getElementById('ia-alert');
    if (alertBox) {
        alertBox.style.display = stats.alerte_securite ? 'block' : 'none';
        if (stats.alerte_securite) alertBox.innerText = stats.alerte_securite;
    }

    // Boutons
    document.querySelectorAll('.btn-route').forEach((btn, i) => {
        const active = (i === index);
        const c = currentRoutes[i]?.color || '#888';
        btn.style.background   = active ? c : 'transparent';
        btn.style.color        = active ? '#fff' : c;
        btn.style.borderColor  = c;
    });
}

            function initMap() {
                const mapContainer = document.getElementById('interactiveMap');
                if (!mapContainer) return;

                // Nettoyage Leaflet pour Turbo
                mapContainer._leaflet_id = null;
                mapContainer.innerHTML = \"\";

                const startLat = {{ mapLat }};
                const startLng = {{ mapLng }};

                map = L.map('interactiveMap').setView([startLat, startLng], 12);
                L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png').addTo(map);

                L.marker([startLat, startLng]).addTo(map).bindPopup(\"<b>{{ airportName }}</b>\");

                fetch('/api/optimize-route', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ start_lat: startLat, start_lng: startLng })
                })
                .then(res => res.json())
                .then(data => {
                    document.getElementById('map-loader').style.display = 'none';
                    if (data.error) throw new Error(data.error);

                    currentRoutes = data.routes;
                    
                    // Générer les boutons
                    const selector = document.getElementById('route-selector');

    if (selector && data.routes && data.routes.length > 0) {
        selector.innerHTML = \"\"; // On vire le texte \"Analyse en cours...\"

        data.routes.forEach((route, i) => {
            const btn = document.createElement('button');
            btn.type = \"button\";
            btn.className = \"btn-route\"; // Assure-toi d'avoir le CSS pour cette classe
            btn.innerHTML = `<i class=\"fas fa-directions\"></i> \${route.label}`;
            
            btn.onclick = function() {
                displayRoute(i); // Cette fonction doit exister pour tracer la ligne
            };

            selector.appendChild(btn);
        });
        
        console.log(\"Boutons générés avec succès !\"); 
    } else {
        console.error(\"Problème de sélecteur ou routes vides\");
    }

                    // Marqueur d'Arrivée
                    if(data.destination) {
                        L.marker([data.destination.lat, data.destination.lng]).addTo(map)
                            .bindPopup(`<b>Arrivée : \${data.city_name}</b><br>Météo : \${data.weather}`);
                    }

                    displayRoute(0);
                })
                .catch(err => {
                    document.getElementById('map-loader').innerHTML = `<span style=\"color:#ff4757\">Erreur : \${err.message}</span>`;
                });
            }

            // Support Symfony Turbo + Standard
            document.addEventListener('turbo:load', initMap);
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initMap);
            } else {
                initMap();
            }
        })();

function chercherKiosques(map, lat, lng) {
    const query = `[out:json];node[\"amenity\"=\"fuel\"](around:3000, \${lat}, \${lng});out;`;
    fetch(`https://overpass-api.de/api/interpreter?data=\${encodeURIComponent(query)}`)
        .then(res => res.json())
        .then(data => {
            const gasIcon = L.divIcon({
                html: '<i class=\"fas fa-gas-pump\" style=\"color:#fff; background:#eccc68; padding:6px; border-radius:50%;\"></i>',
                className: 'custom-gas-icon', iconSize: [30, 30]
            });
            data.elements.forEach(s => {
                L.marker([s.lat, s.lon], {icon: gasIcon}).addTo(map).bindPopup(s.tags.name || \"Station\");
            });
        });
}
function openSJS() {
    // 1. On récupère la route actuellement sélectionnée sur la carte
    // 'currentRoutes' est la variable globale qu'on a définie avant
    const selectedRoute = currentRoutes[0]; // Ou celle active

    if (!selectedRoute) {
        alert(\"Veuillez d'abord sélectionner un trajet.\");
        return;
    }

    // 2. On prépare les données pour ton module SJS
    const syncData = {
        distance: selectedRoute.distance_km,
        duree: selectedRoute.predictions.predictions.eta_reel_min,
        conso: selectedRoute.predictions.predictions.consommation_estimee_litres,
        label: selectedRoute.label
    };

    // 3. LOGIQUE SJS : Ici, tu appelles la fonction principale de ton sjs.html.twig
    // Exemple : Si ton SJS est une modale Bootstrap
    console.log(\"Synchronisation en cours avec SJS...\", syncData);
    
    // Si tu as une fonction 'startSync' dans sjs.html.twig :
    if (typeof startSync === \"function\") {
        startSync(syncData);
    } else {
        // Si tu n'as pas de fonction, on peut juste afficher le wrapper
        document.getElementById('sjs-wrapper').style.display = 'block';
    }
}
</script>
{% endif %}
{% endblock %}", "transports/detail.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\transports\\detail.html.twig");
    }
}
