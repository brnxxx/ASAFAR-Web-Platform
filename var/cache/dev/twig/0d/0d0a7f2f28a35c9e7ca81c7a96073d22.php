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

/* hebergements.html.twig */
class __TwigTemplate_c6666caec0b5d7a9e05c9ab5ec3eca34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergements.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergements.html.twig"));

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

        yield "Hebergements - ASAFAR";
        
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
    body {
        background: #0B2D4A !important;
    }

    .heb-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 120px 100px 80px;
        overflow: hidden;
    }

    .heb-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .heb-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.3;
    }

    .heb-hero-gradient {
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
    }

    .heb-hero-content {
        position: relative;
        z-index: 2;
        max-width: 780px;
    }

    .heb-hero-badge {
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
        animation: hebFadeDown 0.8s ease;
    }

    @keyframes hebFadeDown {
        from { opacity: 0; transform: translateY(-20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .heb-hero-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 72px;
        font-weight: 800;
        color: #FFC107;
        line-height: 1.1;
        margin: 0 0 25px;
        animation: hebFadeLeft 1s ease 0.2s both;
    }

    @keyframes hebFadeLeft {
        from { opacity: 0; transform: translateX(-40px); }
        to   { opacity: 1; transform: translateX(0); }
    }

    .heb-hero-underline {
        width: 120px;
        height: 5px;
        background: linear-gradient(90deg, #FFC107, #FF9800);
        border-radius: 3px;
        margin: 0 0 30px;
        animation: hebExpand 1s ease 0.5s both;
    }

    @keyframes hebExpand {
        from { width: 0; }
        to   { width: 120px; }
    }

    .heb-hero-description {
        font-size: 18px;
        line-height: 1.8;
        color: rgba(255,255,255,0.9);
        margin: 0 0 30px;
        animation: hebFadeUp 1s ease 0.4s both;
    }

    @keyframes hebFadeUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .heb-search-wrap {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-top: 12px;
        animation: hebFadeUp 1s ease 0.5s both;
    }

    .heb-search-bar {
        display: flex;
        align-items: center;
        background: #ffffff;
        border-radius: 50px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        max-width: 1100px;
        width: 95%;
        margin: auto;
        gap: 5px;
        padding: 8px 12px;
    }

    .heb-search-field {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 14px;
        border-radius: 20px;
        flex: 1;
        min-width: 0;
        transition: 0.3s;
    }

    .heb-search-field:hover {
        background: rgba(0,0,0,0.04);
    }

    .heb-search-field-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(255,193,7,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .heb-search-field-icon svg {
        width: 16px;
        height: 16px;
        fill: #FF9800;
    }

    .heb-search-input-group {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .heb-search-input-group label {
        font-size: 10px;
        font-weight: 600;
        color: #9aa5b0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 2px;
        line-height: 1;
    }

    .heb-search-input-group input,
    .heb-search-input-group select {
        border: none;
        outline: none;
        font-size: 14px;
        font-weight: 500;
        color: #333;
        background: transparent;
        font-family: 'Poppins', sans-serif;
        width: 100%;
        min-width: 0;
        padding-top: 3px;
    }

    .heb-search-separator {
        width: 1px;
        height: 35px;
        background: #e5e8ec;
        flex-shrink: 0;
    }

    .heb-search-btn {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 12px 22px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        border: none;
        cursor: pointer;
        font-size: 14px;
        font-weight: 600;
        color: #0c2a45;
        font-family: 'Poppins', sans-serif;
        border-radius: 25px;
        transition: 0.3s;
        flex-shrink: 0;
    }

    .heb-search-btn svg {
        width: 16px;
        height: 16px;
        fill: #0c2a45;
    }

    .heb-search-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(255,152,0,0.4);
    }

    .heb-hero-buttons {
        display: flex;
        gap: 20px;
        margin-top: 26px;
        animation: hebFadeUp 1s ease 0.6s both;
    }

    .heb-btn-primary {
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
        box-shadow: 0 10px 30px rgba(255,193,7,0.3);
    }

    .heb-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(255,193,7,0.5);
    }

    .heb-btn-secondary {
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

    .heb-btn-secondary:hover {
        background: rgba(255,193,7,0.1);
        transform: translateY(-3px);
    }

    .heb-list {
        padding: 100px;
        background: linear-gradient(180deg, #051621 0%, #08263E 50%, #0B2D4A 100%);
    }

    .heb-section-header {
        text-align: center;
        margin: 0 auto 70px;
    }

    .heb-section-tag {
        display: inline-block;
        font-size: 13px;
        color: #FFC107;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin: 0 0 15px;
    }

    .heb-section-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 48px;
        color: white;
        margin: 0 0 20px;
    }

    .heb-section-line {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #FFC107, #FF9800);
        margin: 0 auto;
        border-radius: 2px;
    }

    .heb-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .heb-card {
        position: relative;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.25);
        transition: all 0.5s cubic-bezier(0.4,0,0.2,1);
        opacity: 1;
        transform: translateY(0);
        display: flex;
        flex-direction: column;
    }

    .heb-card.heb-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .heb-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 70px rgba(0,0,0,0.35);
    }

    .heb-image {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .heb-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .heb-card:hover .heb-image img {
        transform: scale(1.1);
    }

    .heb-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(11,45,74,0.85) 0%, transparent 55%);
    }

    .heb-type {
        position: absolute;
        top: 14px;
        left: 14px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        padding: 5px 14px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .heb-stars {
        position: absolute;
        top: 14px;
        right: 14px;
        background: rgba(11,45,74,0.88);
        color: #fff;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
    }

    .heb-content {
        padding: 20px 22px 18px;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .heb-content h3 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 22px;
        color: #0B2D4A;
        margin: 0;
    }

    .heb-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .heb-meta-item {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 12px;
        color: #6b7a8a;
        font-weight: 500;
    }

    .heb-meta-item svg {
        width: 13px;
        height: 13px;
        fill: #FFC107;
        flex-shrink: 0;
    }

    .heb-rating {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 8px;
        padding-top: 8px;
        border-top: 1px solid #f0f0f0;
    }

    .heb-rating-value {
        font-size: 13px;
        font-weight: 700;
        color: #0B2D4A;
        min-width: 35px;
    }

    .heb-rating-stars {
        display: flex;
        gap: 2px;
        color: #FFB800;
        font-size: 11px;
    }

    .heb-rating-stars i {
        opacity: 0.3;
    }

    .heb-rating-stars i.filled {
        opacity: 1;
    }

    .heb-content p {
        font-size: 13px;
        color: #5a6a78;
        line-height: 1.6;
        margin: 0;
        flex: 1;
    }

    .heb-price-row {
        display: flex;
        border-top: 1px solid #f0f0f0;
        border-bottom: 1px solid #f0f0f0;
        padding: 11px 0;
        justify-content: space-between;
        align-items: center;
    }

    .heb-price-label {
        font-size: 10px;
        font-weight: 700;
        color: #9aa5b0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .heb-price-value {
        font-size: 18px;
        font-weight: 800;
        color: #0B2D4A;
    }

    .heb-card-footer {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .heb-card-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        padding: 10px 16px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 700;
        font-size: 13px;
        white-space: nowrap;
        flex: 1;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .heb-card-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.28), transparent);
        transition: left 0.4s ease;
    }

    .heb-card-btn:hover::before {
        left: 100%;
    }

    .heb-btn-detail {
        background: #eef2f7;
        color: #0c2a45;
        border: 1.5px solid #d0dce8;
    }

    .heb-btn-detail:hover {
        transform: scale(1.04);
        box-shadow: 0 4px 14px rgba(12,42,69,0.12);
    }

    .heb-btn-reserver {
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0c2a45;
    }

    .heb-btn-reserver:hover {
        transform: scale(1.04);
        box-shadow: 0 6px 20px rgba(255,193,7,0.45);
    }

    .heb-card-btn svg {
        width: 14px;
        height: 14px;
        fill: currentColor;
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }

    .heb-card-btn:hover svg {
        transform: translateX(2px);
    }

    .heb-empty {
        color: rgba(255,255,255,0.6);
        text-align: center;
        grid-column: 1/-1;
    }

    @media (max-width: 1200px) {
        .heb-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .heb-hero {
            padding: 120px 50px 80px;
        }

        .heb-hero-title {
            font-size: 56px;
        }

        .heb-list {
            padding: 80px 50px;
        }

        .heb-search-bar {
            width: 100%;
        }

        .heb-search-separator {
            display: block;
        }
    }

    @media (max-width: 768px) {
        .heb-hero {
            padding: 100px 25px 60px;
            min-height: auto;
        }

        .heb-hero-title {
            font-size: 40px;
        }

        .heb-hero-buttons {
            flex-direction: column;
        }

        .heb-list {
            padding: 60px 25px;
        }

        .heb-section-title {
            font-size: 32px;
        }

        .heb-grid {
            grid-template-columns: 1fr;
        }

        .heb-search-field {
            width: 100%;
        }

        .heb-search-btn {
            width: 100%;
            justify-content: center;
            border-radius: 25px;
        }

        .heb-search-bar {
            flex-direction: column;
            border-radius: 20px;
            padding: 15px;
            width: 100%;
        }

        .heb-search-separator {
            width: 100%;
            height: 1px;
        }

        .heb-card-footer {
            flex-direction: column;
        }

        .heb-card-btn {
            width: 100%;
        }
    }
</style>

<section class=\"heb-hero\">
    <div class=\"heb-hero-bg\">
        <img src=\"";
        // line 645
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loisirs-hero.jpg"), "html", null, true);
        yield "\" alt=\"Hebergements\">
        <div class=\"heb-hero-gradient\"></div>
    </div>

    <div class=\"heb-hero-content\">
        <div class=\"heb-hero-badge\">✦ Selection Premium</div>
        <h1 class=\"heb-hero-title\">Hebergements<br>Premium</h1>
        <div class=\"heb-hero-underline\"></div>
        <p class=\"heb-hero-description\">
            Découvrez une sélection exclusive d'établissements de luxe et confortables
        </p>

        <div class=\"heb-search-wrap\">
        <form method=\"GET\" action=\"";
        // line 658
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        yield "\" class=\"heb-search-bar\">

            <div class=\"heb-search-field\">
                <div class=\"heb-search-field-icon\">
                    <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/></svg>
                </div>
                <div class=\"heb-search-input-group\">
                    <label>Destination</label>
                    <input type=\"text\" name=\"lieu\" value=\"";
        // line 666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 666, $this->source); })()), "lieu", [], "any", false, false, false, 666), "html", null, true);
        yield "\" placeholder=\"Où allez-vous ?\">
                </div>
            </div>

            <div class=\"heb-search-separator\"></div>

            <div class=\"heb-search-field\">
                <div class=\"heb-search-field-icon\">
                    <svg viewBox=\"0 0 24 24\"><path d=\"M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z\"/></svg>
                </div>
                <div class=\"heb-search-input-group\">
                    <label>Type</label>
                    <select name=\"type\">
                        <option value=\"\">Tous types</option>
                        ";
        // line 680
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 680, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 681
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 681, $this->source); })()), "type", [], "any", false, false, false, 681) == $context["type"])) {
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
        // line 683
        yield "                    </select>
                </div>
            </div>

            <div class=\"heb-search-separator\"></div>

            <div class=\"heb-search-field\">
                <div class=\"heb-search-field-icon\">
                    <svg viewBox=\"0 0 24 24\"><path d=\"M12 1 4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-4zm1 17.93c-2.83-.48-6-4.04-6-7.93V6.3l6-3 6 3V11c0 3.89-3.17 7.45-6 7.93z\"/></svg>
                </div>
                <div class=\"heb-search-input-group\">
                    <label>Budget</label>
                    <input type=\"number\" min=\"0\" step=\"1\" name=\"max_prix\" value=\"";
        // line 695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 695, $this->source); })()), "max_prix", [], "any", false, false, false, 695), "html", null, true);
        yield "\" placeholder=\"TND / nuit\">
                </div>
            </div>

            <button class=\"heb-search-btn\" type=\"submit\" aria-label=\"Rechercher\" title=\"Rechercher\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5z\"/></svg>
            </button>

        </form>
            <a href=\"";
        // line 704
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ai_rapport_qp");
        yield "\" class=\"heb-search-btn\" style=\"margin-left:16px;display:flex;align-items:center;gap:8px;\">
                <svg viewBox=\"0 0 24 24\" width=\"20\" height=\"20\"><path d=\"M9 21h6v-1H9v1zm3-19C6.48 2 2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V17h-2v-2h2v-1.5c0-2.21 1.79-4 4-4h2v2h-2c-.55 0-1 .45-1 1V15h3l-.5 2H13v3.8c4.56-.93 8-4.96 8-9.8 0-5.52-4.48-10-10-10z\"/></svg>
                <span>AI Rapport Q/P</span>
            </a>
        </div>

        <div class=\"heb-hero-buttons\">
            <a href=\"#hebergements\" class=\"heb-btn-primary\">→ Découvrir les hebergements</a>
            <a href=\"";
        // line 712
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        yield "\" class=\"heb-btn-secondary\">↺ Réinitialiser</a>
        </div>
    </div>
</section>

<section class=\"heb-list\" id=\"hebergements\">
    <div class=\"heb-section-header\">
        <span class=\"heb-section-tag\">Hebergements Phares</span>
        <h2 class=\"heb-section-title\">Nos Meilleures Adresses</h2>
        <div class=\"heb-section-line\"></div>
    </div>

    <div class=\"heb-grid\">
        ";
        // line 725
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 725, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
            // line 726
            yield "            <article class=\"heb-card\">
                <div class=\"heb-image\">
                    ";
            // line 728
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "imageUrl", [], "any", false, false, false, 728)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 729
                yield "                        <img
                            src=\"";
                // line 730
                if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "imageUrl", [], "any", false, false, false, 730)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "imageUrl", [], "any", false, false, false, 730), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "imageUrl", [], "any", false, false, false, 730), "/")), "html", null, true);
                }
                yield "\"
                            alt=\"";
                // line 731
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 731), "html", null, true);
                yield "\"
                            loading=\"lazy\"
                            onerror=\"this.onerror=null;this.src='";
                // line 733
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loisirs/default.jpg"), "html", null, true);
                yield "';\"
                        >
                    ";
            } else {
                // line 736
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loisirs/default.jpg"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 736), "html", null, true);
                yield "\" loading=\"lazy\">
                    ";
            }
            // line 738
            yield "                    <div class=\"heb-overlay\"></div>
                    <span class=\"heb-type\">";
            // line 739
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "type", [], "any", false, false, false, 739)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "type", [], "any", false, false, false, 739), "html", null, true)) : ("Hotel"));
            yield "</span>
                    <span class=\"heb-stars\">";
            // line 740
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "etoiles", [], "any", false, false, false, 740), "html", null, true);
            yield " ★</span>
                </div>

                <div class=\"heb-content\">
                    <h3>";
            // line 744
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 744), "html", null, true);
            yield "</h3>

                    <div class=\"heb-meta\">
                        <span class=\"heb-meta-item\">
                            <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/></svg>
                            ";
            // line 749
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "lieu", [], "any", false, false, false, 749)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "lieu", [], "any", false, false, false, 749), "html", null, true)) : ("Destination a confirmer"));
            yield "
                        </span>
                        <span class=\"heb-meta-item\">
                            <svg viewBox=\"0 0 24 24\"><path d=\"M12 2 4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-4zm1 17.93c-2.83-.48-6-4.04-6-7.93V6.3l6-3 6 3V11c0 3.89-3.17 7.45-6 7.93z\"/></svg>
                            ";
            // line 753
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "disponibilite", [], "any", false, false, false, 753)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "disponibilite", [], "any", false, false, false, 753), "html", null, true)) : ("DISPONIBLE"));
            yield "
                        </span>
                    </div>
                   
                   <div class=\"heb-rating\">
                        ";
            // line 758
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "noteMoyenne", [], "any", false, false, false, 758)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 759
                yield "                            <span class=\"heb-rating-value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "noteMoyenne", [], "any", false, false, false, 759), "html", null, true);
                yield "/5</span>
                            <span class=\"heb-rating-stars\">
                                ";
                // line 761
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 762
                    yield "                                    <i class=\"fas fa-star ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "noteMoyenne", [], "any", false, false, false, 762) >= $context["i"])) {
                        yield "filled";
                    }
                    yield "\"></i>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 764
                yield "                            </span>
                        ";
            } else {
                // line 766
                yield "                            <span class=\"heb-rating-value\" style=\"color:#999;\">Non noté</span>
                        ";
            }
            // line 768
            yield "                    </div>

                    <p>";
            // line 770
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "description", [], "any", true, true, false, 770)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "description", [], "any", false, false, false, 770), "Un hebergement confortable et bien situe pour votre prochain sejour.")) : ("Un hebergement confortable et bien situe pour votre prochain sejour.")), 0, 120), "html", null, true);
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "description", [], "any", false, false, false, 770) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "description", [], "any", false, false, false, 770)) > 120))) {
                yield "...";
            }
            yield "</p>

                    <div class=\"heb-price-row\">
                        <span class=\"heb-price-label\">Prix / nuit</span>
                        <span class=\"heb-price-value\">";
            // line 774
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "prixParNuit", [], "any", false, false, false, 774)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "prixParNuit", [], "any", false, false, false, 774), "html", null, true)) : ("N/A"));
            yield " TND</span>
                    </div>

                    <div class=\"heb-card-footer\">
                        <a href=\"";
            // line 778
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "idHebergement", [], "any", false, false, false, 778)]), "html", null, true);
            yield "\" class=\"heb-card-btn heb-btn-detail\">
                            <span>Voir détails</span>
                            <svg viewBox=\"0 0 24 24\"><path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"/></svg>
                        </a>
                        <a href=\"";
            // line 782
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_create", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "idHebergement", [], "any", false, false, false, 782)]), "html", null, true);
            yield "\" class=\"heb-card-btn heb-btn-reserver\">
                            <span>Réserver</span>
                            <svg viewBox=\"0 0 24 24\"><path d=\"M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z\"/></svg>
                        </a>
                    </div>
                </div>
            </article>
        ";
            $context['_iterated'] = true;
        }
        // line 789
        if (!$context['_iterated']) {
            // line 790
            yield "            <p class=\"heb-empty\">Aucun hebergement trouve pour ces filtres.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hebergement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 792
        yield "    </div>
</section>

<script>
function initHebergementPage() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('heb-visible');
            }
        });
    }, { threshold: 0.08 });

    document.querySelectorAll('.heb-card').forEach((card, i) => {
        setTimeout(() => observer.observe(card), i * 80);
    });

    window.addEventListener('scroll', function () {
        const heroImg = document.querySelector('.heb-hero-bg img');
        if (heroImg) {
            heroImg.style.transform = `translateY(\${window.pageYOffset * 0.28}px)`;
        }
    });
}

document.addEventListener('DOMContentLoaded', initHebergementPage);
document.addEventListener('turbo:load', initHebergementPage);
</script>
<script>
// --- AI Rapport Q/P Popup Logic ---
document.addEventListener('DOMContentLoaded', function() {
    const aiBtn = document.getElementById('ai-rapport-btn');
    const aiModal = document.getElementById('ai-rapport-modal');
    const aiClose = document.getElementById('ai-rapport-close');
    const aiForm = document.getElementById('ai-rapport-form');
    const aiLieu = document.getElementById('ai-rapport-lieu');
    const aiBudget = document.getElementById('ai-rapport-budget');
    const aiResult = document.getElementById('ai-rapport-result');

    if (!aiBtn || !aiModal) return;

    aiBtn.addEventListener('click', () => {
        // Récupère toutes les localisations uniques des hébergements affichés
        const lieux = Array.from(document.querySelectorAll('.heb-card .heb-meta-item:first-child'))
            .map(e => e.textContent.trim())
            .filter(l => l && l !== 'Destination a confirmer');
        const uniqueLieux = [...new Set(lieux)];
        aiLieu.innerHTML = uniqueLieux.map(l => `<option value=\"\${l}\">\${l}</option>`).join('');
        aiBudget.value = '';
        aiResult.style.display = 'none';
        aiResult.textContent = '';
        aiModal.style.display = 'flex';
    });
    aiClose.addEventListener('click', () => { aiModal.style.display = 'none'; });
    aiModal.addEventListener('click', e => { if (e.target === aiModal) aiModal.style.display = 'none'; });

    aiForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        aiResult.style.display = 'block';
        aiResult.textContent = 'Analyse en cours...';
        try {
            const response = await fetch('/ai/hebergement/recommend', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ localisation: aiLieu.value, budget: aiBudget.value })
            });
            const data = await response.json();
            if (data && data.result) {
                aiResult.innerHTML = data.result;
            } else {
                aiResult.textContent = 'Aucune analyse AI disponible.';
            }
        } catch (e) {
            aiResult.textContent = 'Erreur lors de l’analyse AI.';
        }
    });
});
</script>
<script>
document.querySelectorAll('.ai-rapport-btn').forEach(btn => {
    btn.addEventListener('click', async function() {
        const id = this.dataset.id;
        const resultDiv = this.parentElement.querySelector('.ai-rapport-result');
        resultDiv.style.display = 'block';
        resultDiv.textContent = 'Analyse en cours...';
        try {
            const response = await fetch('/ai/hebergement/recommend', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ idHebergement: id })
            });
            const data = await response.json();
            if (data && data.result) {
                resultDiv.textContent = data.result;
            } else {
                resultDiv.textContent = 'Aucune analyse AI disponible.';
            }
        } catch (e) {
            resultDiv.textContent = 'Erreur lors de l’analyse AI.';
        }
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
        return "hebergements.html.twig";
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
        return array (  1015 => 792,  1008 => 790,  1006 => 789,  994 => 782,  987 => 778,  980 => 774,  970 => 770,  966 => 768,  962 => 766,  958 => 764,  947 => 762,  943 => 761,  937 => 759,  935 => 758,  927 => 753,  920 => 749,  912 => 744,  905 => 740,  901 => 739,  898 => 738,  890 => 736,  884 => 733,  879 => 731,  871 => 730,  868 => 729,  866 => 728,  862 => 726,  857 => 725,  841 => 712,  830 => 704,  818 => 695,  804 => 683,  789 => 681,  785 => 680,  768 => 666,  757 => 658,  741 => 645,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hebergements - ASAFAR{% endblock %}

{% block body %}
<style>
    body {
        background: #0B2D4A !important;
    }

    .heb-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 120px 100px 80px;
        overflow: hidden;
    }

    .heb-hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .heb-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.3;
    }

    .heb-hero-gradient {
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
    }

    .heb-hero-content {
        position: relative;
        z-index: 2;
        max-width: 780px;
    }

    .heb-hero-badge {
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
        animation: hebFadeDown 0.8s ease;
    }

    @keyframes hebFadeDown {
        from { opacity: 0; transform: translateY(-20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .heb-hero-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 72px;
        font-weight: 800;
        color: #FFC107;
        line-height: 1.1;
        margin: 0 0 25px;
        animation: hebFadeLeft 1s ease 0.2s both;
    }

    @keyframes hebFadeLeft {
        from { opacity: 0; transform: translateX(-40px); }
        to   { opacity: 1; transform: translateX(0); }
    }

    .heb-hero-underline {
        width: 120px;
        height: 5px;
        background: linear-gradient(90deg, #FFC107, #FF9800);
        border-radius: 3px;
        margin: 0 0 30px;
        animation: hebExpand 1s ease 0.5s both;
    }

    @keyframes hebExpand {
        from { width: 0; }
        to   { width: 120px; }
    }

    .heb-hero-description {
        font-size: 18px;
        line-height: 1.8;
        color: rgba(255,255,255,0.9);
        margin: 0 0 30px;
        animation: hebFadeUp 1s ease 0.4s both;
    }

    @keyframes hebFadeUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .heb-search-wrap {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-top: 12px;
        animation: hebFadeUp 1s ease 0.5s both;
    }

    .heb-search-bar {
        display: flex;
        align-items: center;
        background: #ffffff;
        border-radius: 50px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        max-width: 1100px;
        width: 95%;
        margin: auto;
        gap: 5px;
        padding: 8px 12px;
    }

    .heb-search-field {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 14px;
        border-radius: 20px;
        flex: 1;
        min-width: 0;
        transition: 0.3s;
    }

    .heb-search-field:hover {
        background: rgba(0,0,0,0.04);
    }

    .heb-search-field-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(255,193,7,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .heb-search-field-icon svg {
        width: 16px;
        height: 16px;
        fill: #FF9800;
    }

    .heb-search-input-group {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .heb-search-input-group label {
        font-size: 10px;
        font-weight: 600;
        color: #9aa5b0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 2px;
        line-height: 1;
    }

    .heb-search-input-group input,
    .heb-search-input-group select {
        border: none;
        outline: none;
        font-size: 14px;
        font-weight: 500;
        color: #333;
        background: transparent;
        font-family: 'Poppins', sans-serif;
        width: 100%;
        min-width: 0;
        padding-top: 3px;
    }

    .heb-search-separator {
        width: 1px;
        height: 35px;
        background: #e5e8ec;
        flex-shrink: 0;
    }

    .heb-search-btn {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 12px 22px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        border: none;
        cursor: pointer;
        font-size: 14px;
        font-weight: 600;
        color: #0c2a45;
        font-family: 'Poppins', sans-serif;
        border-radius: 25px;
        transition: 0.3s;
        flex-shrink: 0;
    }

    .heb-search-btn svg {
        width: 16px;
        height: 16px;
        fill: #0c2a45;
    }

    .heb-search-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(255,152,0,0.4);
    }

    .heb-hero-buttons {
        display: flex;
        gap: 20px;
        margin-top: 26px;
        animation: hebFadeUp 1s ease 0.6s both;
    }

    .heb-btn-primary {
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
        box-shadow: 0 10px 30px rgba(255,193,7,0.3);
    }

    .heb-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(255,193,7,0.5);
    }

    .heb-btn-secondary {
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

    .heb-btn-secondary:hover {
        background: rgba(255,193,7,0.1);
        transform: translateY(-3px);
    }

    .heb-list {
        padding: 100px;
        background: linear-gradient(180deg, #051621 0%, #08263E 50%, #0B2D4A 100%);
    }

    .heb-section-header {
        text-align: center;
        margin: 0 auto 70px;
    }

    .heb-section-tag {
        display: inline-block;
        font-size: 13px;
        color: #FFC107;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin: 0 0 15px;
    }

    .heb-section-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 48px;
        color: white;
        margin: 0 0 20px;
    }

    .heb-section-line {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #FFC107, #FF9800);
        margin: 0 auto;
        border-radius: 2px;
    }

    .heb-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .heb-card {
        position: relative;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.25);
        transition: all 0.5s cubic-bezier(0.4,0,0.2,1);
        opacity: 1;
        transform: translateY(0);
        display: flex;
        flex-direction: column;
    }

    .heb-card.heb-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .heb-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 70px rgba(0,0,0,0.35);
    }

    .heb-image {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .heb-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .heb-card:hover .heb-image img {
        transform: scale(1.1);
    }

    .heb-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(11,45,74,0.85) 0%, transparent 55%);
    }

    .heb-type {
        position: absolute;
        top: 14px;
        left: 14px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        padding: 5px 14px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .heb-stars {
        position: absolute;
        top: 14px;
        right: 14px;
        background: rgba(11,45,74,0.88);
        color: #fff;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
    }

    .heb-content {
        padding: 20px 22px 18px;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .heb-content h3 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 22px;
        color: #0B2D4A;
        margin: 0;
    }

    .heb-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .heb-meta-item {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 12px;
        color: #6b7a8a;
        font-weight: 500;
    }

    .heb-meta-item svg {
        width: 13px;
        height: 13px;
        fill: #FFC107;
        flex-shrink: 0;
    }

    .heb-rating {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 8px;
        padding-top: 8px;
        border-top: 1px solid #f0f0f0;
    }

    .heb-rating-value {
        font-size: 13px;
        font-weight: 700;
        color: #0B2D4A;
        min-width: 35px;
    }

    .heb-rating-stars {
        display: flex;
        gap: 2px;
        color: #FFB800;
        font-size: 11px;
    }

    .heb-rating-stars i {
        opacity: 0.3;
    }

    .heb-rating-stars i.filled {
        opacity: 1;
    }

    .heb-content p {
        font-size: 13px;
        color: #5a6a78;
        line-height: 1.6;
        margin: 0;
        flex: 1;
    }

    .heb-price-row {
        display: flex;
        border-top: 1px solid #f0f0f0;
        border-bottom: 1px solid #f0f0f0;
        padding: 11px 0;
        justify-content: space-between;
        align-items: center;
    }

    .heb-price-label {
        font-size: 10px;
        font-weight: 700;
        color: #9aa5b0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .heb-price-value {
        font-size: 18px;
        font-weight: 800;
        color: #0B2D4A;
    }

    .heb-card-footer {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .heb-card-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        padding: 10px 16px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 700;
        font-size: 13px;
        white-space: nowrap;
        flex: 1;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .heb-card-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.28), transparent);
        transition: left 0.4s ease;
    }

    .heb-card-btn:hover::before {
        left: 100%;
    }

    .heb-btn-detail {
        background: #eef2f7;
        color: #0c2a45;
        border: 1.5px solid #d0dce8;
    }

    .heb-btn-detail:hover {
        transform: scale(1.04);
        box-shadow: 0 4px 14px rgba(12,42,69,0.12);
    }

    .heb-btn-reserver {
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0c2a45;
    }

    .heb-btn-reserver:hover {
        transform: scale(1.04);
        box-shadow: 0 6px 20px rgba(255,193,7,0.45);
    }

    .heb-card-btn svg {
        width: 14px;
        height: 14px;
        fill: currentColor;
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }

    .heb-card-btn:hover svg {
        transform: translateX(2px);
    }

    .heb-empty {
        color: rgba(255,255,255,0.6);
        text-align: center;
        grid-column: 1/-1;
    }

    @media (max-width: 1200px) {
        .heb-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .heb-hero {
            padding: 120px 50px 80px;
        }

        .heb-hero-title {
            font-size: 56px;
        }

        .heb-list {
            padding: 80px 50px;
        }

        .heb-search-bar {
            width: 100%;
        }

        .heb-search-separator {
            display: block;
        }
    }

    @media (max-width: 768px) {
        .heb-hero {
            padding: 100px 25px 60px;
            min-height: auto;
        }

        .heb-hero-title {
            font-size: 40px;
        }

        .heb-hero-buttons {
            flex-direction: column;
        }

        .heb-list {
            padding: 60px 25px;
        }

        .heb-section-title {
            font-size: 32px;
        }

        .heb-grid {
            grid-template-columns: 1fr;
        }

        .heb-search-field {
            width: 100%;
        }

        .heb-search-btn {
            width: 100%;
            justify-content: center;
            border-radius: 25px;
        }

        .heb-search-bar {
            flex-direction: column;
            border-radius: 20px;
            padding: 15px;
            width: 100%;
        }

        .heb-search-separator {
            width: 100%;
            height: 1px;
        }

        .heb-card-footer {
            flex-direction: column;
        }

        .heb-card-btn {
            width: 100%;
        }
    }
</style>

<section class=\"heb-hero\">
    <div class=\"heb-hero-bg\">
        <img src=\"{{ asset('images/loisirs-hero.jpg') }}\" alt=\"Hebergements\">
        <div class=\"heb-hero-gradient\"></div>
    </div>

    <div class=\"heb-hero-content\">
        <div class=\"heb-hero-badge\">✦ Selection Premium</div>
        <h1 class=\"heb-hero-title\">Hebergements<br>Premium</h1>
        <div class=\"heb-hero-underline\"></div>
        <p class=\"heb-hero-description\">
            Découvrez une sélection exclusive d'établissements de luxe et confortables
        </p>

        <div class=\"heb-search-wrap\">
        <form method=\"GET\" action=\"{{ path('app_hebergements') }}\" class=\"heb-search-bar\">

            <div class=\"heb-search-field\">
                <div class=\"heb-search-field-icon\">
                    <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/></svg>
                </div>
                <div class=\"heb-search-input-group\">
                    <label>Destination</label>
                    <input type=\"text\" name=\"lieu\" value=\"{{ filters.lieu }}\" placeholder=\"Où allez-vous ?\">
                </div>
            </div>

            <div class=\"heb-search-separator\"></div>

            <div class=\"heb-search-field\">
                <div class=\"heb-search-field-icon\">
                    <svg viewBox=\"0 0 24 24\"><path d=\"M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z\"/></svg>
                </div>
                <div class=\"heb-search-input-group\">
                    <label>Type</label>
                    <select name=\"type\">
                        <option value=\"\">Tous types</option>
                        {% for type in types %}
                            <option value=\"{{ type }}\" {% if filters.type == type %}selected{% endif %}>{{ type }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"heb-search-separator\"></div>

            <div class=\"heb-search-field\">
                <div class=\"heb-search-field-icon\">
                    <svg viewBox=\"0 0 24 24\"><path d=\"M12 1 4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-4zm1 17.93c-2.83-.48-6-4.04-6-7.93V6.3l6-3 6 3V11c0 3.89-3.17 7.45-6 7.93z\"/></svg>
                </div>
                <div class=\"heb-search-input-group\">
                    <label>Budget</label>
                    <input type=\"number\" min=\"0\" step=\"1\" name=\"max_prix\" value=\"{{ filters.max_prix }}\" placeholder=\"TND / nuit\">
                </div>
            </div>

            <button class=\"heb-search-btn\" type=\"submit\" aria-label=\"Rechercher\" title=\"Rechercher\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5z\"/></svg>
            </button>

        </form>
            <a href=\"{{ path('ai_rapport_qp') }}\" class=\"heb-search-btn\" style=\"margin-left:16px;display:flex;align-items:center;gap:8px;\">
                <svg viewBox=\"0 0 24 24\" width=\"20\" height=\"20\"><path d=\"M9 21h6v-1H9v1zm3-19C6.48 2 2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V17h-2v-2h2v-1.5c0-2.21 1.79-4 4-4h2v2h-2c-.55 0-1 .45-1 1V15h3l-.5 2H13v3.8c4.56-.93 8-4.96 8-9.8 0-5.52-4.48-10-10-10z\"/></svg>
                <span>AI Rapport Q/P</span>
            </a>
        </div>

        <div class=\"heb-hero-buttons\">
            <a href=\"#hebergements\" class=\"heb-btn-primary\">→ Découvrir les hebergements</a>
            <a href=\"{{ path('app_hebergements') }}\" class=\"heb-btn-secondary\">↺ Réinitialiser</a>
        </div>
    </div>
</section>

<section class=\"heb-list\" id=\"hebergements\">
    <div class=\"heb-section-header\">
        <span class=\"heb-section-tag\">Hebergements Phares</span>
        <h2 class=\"heb-section-title\">Nos Meilleures Adresses</h2>
        <div class=\"heb-section-line\"></div>
    </div>

    <div class=\"heb-grid\">
        {% for hebergement in hebergements %}
            <article class=\"heb-card\">
                <div class=\"heb-image\">
                    {% if hebergement.imageUrl %}
                        <img
                            src=\"{% if hebergement.imageUrl starts with 'http' %}{{ hebergement.imageUrl }}{% else %}{{ asset(hebergement.imageUrl|trim('/')) }}{% endif %}\"
                            alt=\"{{ hebergement.nom }}\"
                            loading=\"lazy\"
                            onerror=\"this.onerror=null;this.src='{{ asset('images/loisirs/default.jpg') }}';\"
                        >
                    {% else %}
                        <img src=\"{{ asset('images/loisirs/default.jpg') }}\" alt=\"{{ hebergement.nom }}\" loading=\"lazy\">
                    {% endif %}
                    <div class=\"heb-overlay\"></div>
                    <span class=\"heb-type\">{{ hebergement.type ?: 'Hotel' }}</span>
                    <span class=\"heb-stars\">{{ hebergement.etoiles }} ★</span>
                </div>

                <div class=\"heb-content\">
                    <h3>{{ hebergement.nom }}</h3>

                    <div class=\"heb-meta\">
                        <span class=\"heb-meta-item\">
                            <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/></svg>
                            {{ hebergement.lieu ?: 'Destination a confirmer' }}
                        </span>
                        <span class=\"heb-meta-item\">
                            <svg viewBox=\"0 0 24 24\"><path d=\"M12 2 4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-4zm1 17.93c-2.83-.48-6-4.04-6-7.93V6.3l6-3 6 3V11c0 3.89-3.17 7.45-6 7.93z\"/></svg>
                            {{ hebergement.disponibilite ?: 'DISPONIBLE' }}
                        </span>
                    </div>
                   
                   <div class=\"heb-rating\">
                        {% if hebergement.noteMoyenne %}
                            <span class=\"heb-rating-value\">{{ hebergement.noteMoyenne }}/5</span>
                            <span class=\"heb-rating-stars\">
                                {% for i in 1..5 %}
                                    <i class=\"fas fa-star {% if hebergement.noteMoyenne >= i %}filled{% endif %}\"></i>
                                {% endfor %}
                            </span>
                        {% else %}
                            <span class=\"heb-rating-value\" style=\"color:#999;\">Non noté</span>
                        {% endif %}
                    </div>

                    <p>{{ hebergement.description|default('Un hebergement confortable et bien situe pour votre prochain sejour.')|slice(0, 120) }}{% if hebergement.description and hebergement.description|length > 120 %}...{% endif %}</p>

                    <div class=\"heb-price-row\">
                        <span class=\"heb-price-label\">Prix / nuit</span>
                        <span class=\"heb-price-value\">{{ hebergement.prixParNuit ?: 'N/A' }} TND</span>
                    </div>

                    <div class=\"heb-card-footer\">
                        <a href=\"{{ path('app_hebergement_detail', {'id': hebergement.idHebergement}) }}\" class=\"heb-card-btn heb-btn-detail\">
                            <span>Voir détails</span>
                            <svg viewBox=\"0 0 24 24\"><path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"/></svg>
                        </a>
                        <a href=\"{{ path('app_reservation_create', {'id': hebergement.idHebergement}) }}\" class=\"heb-card-btn heb-btn-reserver\">
                            <span>Réserver</span>
                            <svg viewBox=\"0 0 24 24\"><path d=\"M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z\"/></svg>
                        </a>
                    </div>
                </div>
            </article>
        {% else %}
            <p class=\"heb-empty\">Aucun hebergement trouve pour ces filtres.</p>
        {% endfor %}
    </div>
</section>

<script>
function initHebergementPage() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('heb-visible');
            }
        });
    }, { threshold: 0.08 });

    document.querySelectorAll('.heb-card').forEach((card, i) => {
        setTimeout(() => observer.observe(card), i * 80);
    });

    window.addEventListener('scroll', function () {
        const heroImg = document.querySelector('.heb-hero-bg img');
        if (heroImg) {
            heroImg.style.transform = `translateY(\${window.pageYOffset * 0.28}px)`;
        }
    });
}

document.addEventListener('DOMContentLoaded', initHebergementPage);
document.addEventListener('turbo:load', initHebergementPage);
</script>
<script>
// --- AI Rapport Q/P Popup Logic ---
document.addEventListener('DOMContentLoaded', function() {
    const aiBtn = document.getElementById('ai-rapport-btn');
    const aiModal = document.getElementById('ai-rapport-modal');
    const aiClose = document.getElementById('ai-rapport-close');
    const aiForm = document.getElementById('ai-rapport-form');
    const aiLieu = document.getElementById('ai-rapport-lieu');
    const aiBudget = document.getElementById('ai-rapport-budget');
    const aiResult = document.getElementById('ai-rapport-result');

    if (!aiBtn || !aiModal) return;

    aiBtn.addEventListener('click', () => {
        // Récupère toutes les localisations uniques des hébergements affichés
        const lieux = Array.from(document.querySelectorAll('.heb-card .heb-meta-item:first-child'))
            .map(e => e.textContent.trim())
            .filter(l => l && l !== 'Destination a confirmer');
        const uniqueLieux = [...new Set(lieux)];
        aiLieu.innerHTML = uniqueLieux.map(l => `<option value=\"\${l}\">\${l}</option>`).join('');
        aiBudget.value = '';
        aiResult.style.display = 'none';
        aiResult.textContent = '';
        aiModal.style.display = 'flex';
    });
    aiClose.addEventListener('click', () => { aiModal.style.display = 'none'; });
    aiModal.addEventListener('click', e => { if (e.target === aiModal) aiModal.style.display = 'none'; });

    aiForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        aiResult.style.display = 'block';
        aiResult.textContent = 'Analyse en cours...';
        try {
            const response = await fetch('/ai/hebergement/recommend', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ localisation: aiLieu.value, budget: aiBudget.value })
            });
            const data = await response.json();
            if (data && data.result) {
                aiResult.innerHTML = data.result;
            } else {
                aiResult.textContent = 'Aucune analyse AI disponible.';
            }
        } catch (e) {
            aiResult.textContent = 'Erreur lors de l’analyse AI.';
        }
    });
});
</script>
<script>
document.querySelectorAll('.ai-rapport-btn').forEach(btn => {
    btn.addEventListener('click', async function() {
        const id = this.dataset.id;
        const resultDiv = this.parentElement.querySelector('.ai-rapport-result');
        resultDiv.style.display = 'block';
        resultDiv.textContent = 'Analyse en cours...';
        try {
            const response = await fetch('/ai/hebergement/recommend', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ idHebergement: id })
            });
            const data = await response.json();
            if (data && data.result) {
                resultDiv.textContent = data.result;
            } else {
                resultDiv.textContent = 'Aucune analyse AI disponible.';
            }
        } catch (e) {
            resultDiv.textContent = 'Erreur lors de l’analyse AI.';
        }
    });
});
</script>
{% endblock %}
", "hebergements.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\hebergements.html.twig");
    }
}
