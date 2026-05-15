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

/* reservation/confirmation.html.twig */
class __TwigTemplate_9829832a006508e73898218d1e4146d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/confirmation.html.twig"));

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

        yield "Réservation Confirmée - ASAFAR";
        
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
    body { background: #0B2D4A !important; }

    .confirm-page {
        min-height: 100vh;
        padding: 120px 24px 80px;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .confirm-container {
        max-width: 650px;
        width: 100%;
        text-align: center;
    }

    /* Success animation */
    .success-icon {
        width: 90px;
        height: 90px;
        margin: 0 auto 24px;
        background: linear-gradient(135deg, #34D399, #10B981);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 42px;
        animation: bounceIn 0.7s ease;
        box-shadow: 0 16px 40px rgba(52,211,153,0.3);
    }

    @keyframes bounceIn {
        0% { transform: scale(0); opacity: 0; }
        60% { transform: scale(1.15); }
        100% { transform: scale(1); opacity: 1; }
    }

    .confirm-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 38px;
        font-weight: 800;
        color: #34D399;
        margin: 0 0 10px;
    }

    .confirm-subtitle {
        font-size: 16px;
        color: rgba(255,255,255,0.65);
        margin: 0 0 32px;
    }

    .confirm-subtitle strong {
        color: #FFC107;
    }

    /* Recap card */
    .recap-card {
        background: rgba(255,255,255,0.05);
        border: 1.5px solid rgba(52,211,153,0.25);
        border-radius: 20px;
        padding: 32px 28px;
        text-align: left;
        margin-bottom: 28px;
    }

    .recap-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 22px;
        color: #FFC107;
        margin: 0 0 20px;
        padding-bottom: 14px;
        border-bottom: 1px solid rgba(255,193,7,0.15);
    }

    .recap-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    .recap-item {
        padding: 12px 14px;
        background: rgba(255,255,255,0.03);
        border-radius: 10px;
    }

    .recap-label {
        font-size: 11px;
        color: rgba(255,255,255,0.4);
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-bottom: 4px;
    }

    .recap-value {
        font-size: 15px;
        font-weight: 700;
        color: #fff;
    }

    .recap-value.price {
        color: #34D399;
        font-size: 22px;
    }

    /* Status badge */
    .status-row {
        margin-top: 16px;
        padding-top: 14px;
        border-top: 1px solid rgba(255,255,255,0.08);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .badge-status {
        padding: 6px 16px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
        background: rgba(255,193,7,0.2);
        color: #FFC107;
    }

    /* Buttons */
    .btn-group {
        display: flex;
        gap: 14px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-primary {
        padding: 14px 28px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        text-decoration: none;
        border-radius: 30px;
        font-weight: 700;
        font-size: 14px;
        transition: all 0.4s ease;
        box-shadow: 0 10px 30px rgba(255,193,7,0.2);
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 50px rgba(255,193,7,0.3);
    }

    .btn-secondary {
        padding: 14px 28px;
        background: rgba(47,168,255,0.12);
        color: #2FA8FF;
        text-decoration: none;
        border-radius: 30px;
        font-weight: 700;
        font-size: 14px;
        border: 1.5px solid rgba(47,168,255,0.3);
        transition: all 0.4s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-secondary:hover {
        background: rgba(47,168,255,0.22);
        transform: translateY(-3px);
    }

    @media (max-width: 600px) {
        .confirm-title { font-size: 28px; }
        .recap-grid { grid-template-columns: 1fr; }
        .btn-group { flex-direction: column; }
    }
</style>

<div class=\"confirm-page\">
    <div class=\"confirm-container\">

        <div class=\"success-icon\">✓</div>

        <h1 class=\"confirm-title\">Réservation confirmée !</h1>
        <p class=\"confirm-subtitle\">
            Votre réservation pour <strong>";
        // line 195
        yield (((($tmp = (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 195, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 195, $this->source); })()), "nom", [], "any", false, false, false, 195), "html", null, true)) : ("cet hébergement"));
        yield "</strong> a été créée avec succès.
        </p>

        <div class=\"recap-card\">
            <h3 class=\"recap-title\">📋 Récapitulatif de votre réservation</h3>

            <div class=\"recap-grid\">
                ";
        // line 202
        if ((($tmp = (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 202, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 203
            yield "                <div class=\"recap-item\">
                    <div class=\"recap-label\">Hébergement</div>
                    <div class=\"recap-value\">";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 205, $this->source); })()), "nom", [], "any", false, false, false, 205), "html", null, true);
            yield "</div>
                </div>
                ";
        }
        // line 208
        yield "
                <div class=\"recap-item\">
                    <div class=\"recap-label\">Numéro de réservation</div>
                    <div class=\"recap-value\">#";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 211, $this->source); })()), "idReservation", [], "any", false, false, false, 211), "html", null, true);
        yield "</div>
                </div>

                ";
        // line 214
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 214, $this->source); })()), "dateArrivee", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 215
            yield "                <div class=\"recap-item\">
                    <div class=\"recap-label\">Date d'arrivée</div>
                    <div class=\"recap-value\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 217, $this->source); })()), "dateArrivee", [], "any", false, false, false, 217), "d/m/Y"), "html", null, true);
            yield "</div>
                </div>
                ";
        }
        // line 220
        yield "
                ";
        // line 221
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 221, $this->source); })()), "dateDepart", [], "any", false, false, false, 221)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 222
            yield "                <div class=\"recap-item\">
                    <div class=\"recap-label\">Date de départ</div>
                    <div class=\"recap-value\">";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 224, $this->source); })()), "dateDepart", [], "any", false, false, false, 224), "d/m/Y"), "html", null, true);
            yield "</div>
                </div>
                ";
        }
        // line 227
        yield "
                <div class=\"recap-item\">
                    <div class=\"recap-label\">Adultes</div>
                    <div class=\"recap-value\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 230, $this->source); })()), "nbAdultes", [], "any", false, false, false, 230), "html", null, true);
        yield "</div>
                </div>

                <div class=\"recap-item\">
                    <div class=\"recap-label\">Enfants</div>
                    <div class=\"recap-value\">";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 235, $this->source); })()), "nbEnfants", [], "any", false, false, false, 235), "html", null, true);
        yield "</div>
                </div>

                <div class=\"recap-item\">
                    <div class=\"recap-label\">Bébés</div>
                    <div class=\"recap-value\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 240, $this->source); })()), "nbBebes", [], "any", false, false, false, 240), "html", null, true);
        yield "</div>
                </div>

                <div class=\"recap-item\">
                    <div class=\"recap-label\">Total à payer</div>
                    <div class=\"recap-value price\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 245, $this->source); })()), "montantTotal", [], "any", false, false, false, 245), "html", null, true);
        yield " TND</div>
                </div>
            </div>

            <div class=\"status-row\">
                <span class=\"recap-label\" style=\"margin:0;\">Statut</span>
                <span class=\"badge-status\">⏳ ";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 251, $this->source); })()), "statut", [], "any", false, false, false, 251), "html", null, true);
        yield "</span>
            </div>
        </div>

        <div class=\"btn-group\">
            <a href=\"";
        // line 256
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_reservations");
        yield "\" class=\"btn-primary\">
                📋 Voir mes réservations
            </a>
            <a href=\"";
        // line 259
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        yield "\" class=\"btn-secondary\">
                🏨 Continuer la navigation
            </a>
        </div>

    </div>
</div>
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
        return "reservation/confirmation.html.twig";
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
        return array (  403 => 259,  397 => 256,  389 => 251,  380 => 245,  372 => 240,  364 => 235,  356 => 230,  351 => 227,  345 => 224,  341 => 222,  339 => 221,  336 => 220,  330 => 217,  326 => 215,  324 => 214,  318 => 211,  313 => 208,  307 => 205,  303 => 203,  301 => 202,  291 => 195,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réservation Confirmée - ASAFAR{% endblock %}

{% block body %}
<style>
    body { background: #0B2D4A !important; }

    .confirm-page {
        min-height: 100vh;
        padding: 120px 24px 80px;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .confirm-container {
        max-width: 650px;
        width: 100%;
        text-align: center;
    }

    /* Success animation */
    .success-icon {
        width: 90px;
        height: 90px;
        margin: 0 auto 24px;
        background: linear-gradient(135deg, #34D399, #10B981);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 42px;
        animation: bounceIn 0.7s ease;
        box-shadow: 0 16px 40px rgba(52,211,153,0.3);
    }

    @keyframes bounceIn {
        0% { transform: scale(0); opacity: 0; }
        60% { transform: scale(1.15); }
        100% { transform: scale(1); opacity: 1; }
    }

    .confirm-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 38px;
        font-weight: 800;
        color: #34D399;
        margin: 0 0 10px;
    }

    .confirm-subtitle {
        font-size: 16px;
        color: rgba(255,255,255,0.65);
        margin: 0 0 32px;
    }

    .confirm-subtitle strong {
        color: #FFC107;
    }

    /* Recap card */
    .recap-card {
        background: rgba(255,255,255,0.05);
        border: 1.5px solid rgba(52,211,153,0.25);
        border-radius: 20px;
        padding: 32px 28px;
        text-align: left;
        margin-bottom: 28px;
    }

    .recap-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 22px;
        color: #FFC107;
        margin: 0 0 20px;
        padding-bottom: 14px;
        border-bottom: 1px solid rgba(255,193,7,0.15);
    }

    .recap-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    .recap-item {
        padding: 12px 14px;
        background: rgba(255,255,255,0.03);
        border-radius: 10px;
    }

    .recap-label {
        font-size: 11px;
        color: rgba(255,255,255,0.4);
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-bottom: 4px;
    }

    .recap-value {
        font-size: 15px;
        font-weight: 700;
        color: #fff;
    }

    .recap-value.price {
        color: #34D399;
        font-size: 22px;
    }

    /* Status badge */
    .status-row {
        margin-top: 16px;
        padding-top: 14px;
        border-top: 1px solid rgba(255,255,255,0.08);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .badge-status {
        padding: 6px 16px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
        background: rgba(255,193,7,0.2);
        color: #FFC107;
    }

    /* Buttons */
    .btn-group {
        display: flex;
        gap: 14px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-primary {
        padding: 14px 28px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        text-decoration: none;
        border-radius: 30px;
        font-weight: 700;
        font-size: 14px;
        transition: all 0.4s ease;
        box-shadow: 0 10px 30px rgba(255,193,7,0.2);
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 50px rgba(255,193,7,0.3);
    }

    .btn-secondary {
        padding: 14px 28px;
        background: rgba(47,168,255,0.12);
        color: #2FA8FF;
        text-decoration: none;
        border-radius: 30px;
        font-weight: 700;
        font-size: 14px;
        border: 1.5px solid rgba(47,168,255,0.3);
        transition: all 0.4s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-secondary:hover {
        background: rgba(47,168,255,0.22);
        transform: translateY(-3px);
    }

    @media (max-width: 600px) {
        .confirm-title { font-size: 28px; }
        .recap-grid { grid-template-columns: 1fr; }
        .btn-group { flex-direction: column; }
    }
</style>

<div class=\"confirm-page\">
    <div class=\"confirm-container\">

        <div class=\"success-icon\">✓</div>

        <h1 class=\"confirm-title\">Réservation confirmée !</h1>
        <p class=\"confirm-subtitle\">
            Votre réservation pour <strong>{{ hebergement ? hebergement.nom : 'cet hébergement' }}</strong> a été créée avec succès.
        </p>

        <div class=\"recap-card\">
            <h3 class=\"recap-title\">📋 Récapitulatif de votre réservation</h3>

            <div class=\"recap-grid\">
                {% if hebergement %}
                <div class=\"recap-item\">
                    <div class=\"recap-label\">Hébergement</div>
                    <div class=\"recap-value\">{{ hebergement.nom }}</div>
                </div>
                {% endif %}

                <div class=\"recap-item\">
                    <div class=\"recap-label\">Numéro de réservation</div>
                    <div class=\"recap-value\">#{{ reservation.idReservation }}</div>
                </div>

                {% if reservation.dateArrivee %}
                <div class=\"recap-item\">
                    <div class=\"recap-label\">Date d'arrivée</div>
                    <div class=\"recap-value\">{{ reservation.dateArrivee|date('d/m/Y') }}</div>
                </div>
                {% endif %}

                {% if reservation.dateDepart %}
                <div class=\"recap-item\">
                    <div class=\"recap-label\">Date de départ</div>
                    <div class=\"recap-value\">{{ reservation.dateDepart|date('d/m/Y') }}</div>
                </div>
                {% endif %}

                <div class=\"recap-item\">
                    <div class=\"recap-label\">Adultes</div>
                    <div class=\"recap-value\">{{ reservation.nbAdultes }}</div>
                </div>

                <div class=\"recap-item\">
                    <div class=\"recap-label\">Enfants</div>
                    <div class=\"recap-value\">{{ reservation.nbEnfants }}</div>
                </div>

                <div class=\"recap-item\">
                    <div class=\"recap-label\">Bébés</div>
                    <div class=\"recap-value\">{{ reservation.nbBebes }}</div>
                </div>

                <div class=\"recap-item\">
                    <div class=\"recap-label\">Total à payer</div>
                    <div class=\"recap-value price\">{{ reservation.montantTotal }} TND</div>
                </div>
            </div>

            <div class=\"status-row\">
                <span class=\"recap-label\" style=\"margin:0;\">Statut</span>
                <span class=\"badge-status\">⏳ {{ reservation.statut }}</span>
            </div>
        </div>

        <div class=\"btn-group\">
            <a href=\"{{ path('app_mes_reservations') }}\" class=\"btn-primary\">
                📋 Voir mes réservations
            </a>
            <a href=\"{{ path('app_hebergements') }}\" class=\"btn-secondary\">
                🏨 Continuer la navigation
            </a>
        </div>

    </div>
</div>
{% endblock %}", "reservation/confirmation.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\reservation\\confirmation.html.twig");
    }
}
