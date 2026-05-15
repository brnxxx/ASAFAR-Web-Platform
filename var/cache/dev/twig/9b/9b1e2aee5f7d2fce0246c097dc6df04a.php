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

/* transports/sjs.html.twig */
class __TwigTemplate_9f26236e9e80acdeab377f7fc4edda27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transports/sjs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transports/sjs.html.twig"));

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

        yield "Smart Journey Synchronizer - ASAFAR";
        
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
<style>
    :root {
        --sjs-bg: #051621;
        --sjs-card: #0B2D4A;
        --sjs-card-hover: #08263E;
        --sjs-gold: #FFC107;
        --sjs-gold-glow: rgba(255, 193, 7, 0.3);
        --sjs-cyan: #2FA8FF;
        --sjs-cyan-glow: rgba(47, 168, 255, 0.3);
        --sjs-success: #4CAF50;
        --sjs-text: #F4F8FC;
        --sjs-text-muted: #BED1E0;
    }

    .sjs-container {
        padding: 120px 40px 60px;
        max-width: 1200px;
        margin: 0 auto;
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
    }

    .sjs-header {
        text-align: center;
        margin-bottom: 50px;
        animation: fadeInDown 0.8s ease-out;
    }

    .sjs-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(47, 168, 255, 0.15);
        border: 1px solid var(--sjs-cyan);
        color: var(--sjs-cyan);
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 20px;
        box-shadow: 0 0 15px var(--sjs-cyan-glow);
    }

    .sjs-title {
        font-family: 'Playfair Display', serif;
        font-size: 42px;
        color: var(--sjs-text);
        margin-bottom: 15px;
    }

    .sjs-title span {
        color: var(--sjs-gold);
    }

    /* --- TIMELINE (Vol -> Hub -> Voiture) --- */
    .sjs-timeline {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 60px;
        position: relative;
        animation: fadeInUp 0.8s ease-out 0.2s both;
    }

    .sjs-timeline::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 10%;
        right: 10%;
        height: 2px;
        background: linear-gradient(90deg, var(--sjs-cyan), var(--sjs-gold));
        z-index: 1;
        opacity: 0.5;
        border-radius: 2px;
    }

    .sjs-node {
        background: var(--sjs-card);
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 25px;
        width: 30%;
        text-align: center;
        position: relative;
        z-index: 2;
        transition: all 0.4s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .sjs-node.active-cyan { border-color: var(--sjs-cyan); box-shadow: 0 10px 30px var(--sjs-cyan-glow); }
    .sjs-node.active-gold { border-color: var(--sjs-gold); box-shadow: 0 10px 30px var(--sjs-gold-glow); }

    .sjs-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin: 0 auto 15px;
        background: rgba(0, 0, 0, 0.2);
    }

    .icon-cyan { color: var(--sjs-cyan); border: 1px solid var(--sjs-cyan); }
    .icon-gold { color: var(--sjs-gold); border: 1px solid var(--sjs-gold); }

    .sjs-node h3 { color: var(--sjs-text); font-size: 18px; margin-bottom: 8px; }
    .sjs-node p { color: var(--sjs-text-muted); font-size: 13px; margin: 0; }

    /* --- IA CALCULATOR BOX --- */
    .sjs-calculator {
        background: linear-gradient(145deg, rgba(11, 45, 74, 0.9), rgba(5, 22, 33, 0.95));
        border: 1px solid rgba(255, 193, 7, 0.2);
        border-radius: 24px;
        padding: 40px;
        text-align: center;
        animation: fadeInUp 0.8s ease-out 0.4s both;
        position: relative;
        overflow: hidden;
    }

    .sjs-calc-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 30px;
    }

    .sjs-metric {
        background: rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        padding: 20px;
    }

    .sjs-metric-val { font-size: 24px; font-weight: 700; color: var(--sjs-cyan); margin-bottom: 5px; }
    .sjs-metric-label { font-size: 11px; text-transform: uppercase; color: var(--sjs-text-muted); letter-spacing: 1px; }

    .sjs-final-time {
        font-size: 56px;
        font-weight: 800;
        color: var(--sjs-gold);
        letter-spacing: -2px;
        margin: 20px 0;
        text-shadow: 0 0 30px var(--sjs-gold-glow);
    }

    .sjs-btn-return {
        display: inline-block;
        padding: 14px 30px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        margin-top: 40px;
    }
    .sjs-btn-return:hover { background: rgba(255, 255, 255, 0.1); transform: translateY(-2px); }

    /* Animations */
    @keyframes fadeInDown { from { opacity: 0; transform: translateY(-20px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    
    .loading-pulse { animation: pulse 1.5s infinite; }
    @keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.4; } }
</style>

<div class=\"sjs-container\">
    <div class=\"sjs-header\">
        <div class=\"sjs-badge\">
            <i class=\"fas fa-satellite-dish pulse\"></i> Pont ASAFAR Actif
        </div>
        <h1 class=\"sjs-title\">Smart Journey <span>Synchronizer</span></h1>
        <p style=\"color: var(--sjs-text-muted); font-size: 16px; max-width: 600px; margin: 0 auto;\">
            Votre vol et votre véhicule ont été détectés sur le même aéroport. Notre IA orchestre maintenant la préparation de votre voiture pour qu'elle soit prête à la minute exacte où vous en aurez besoin.
        </p>
    </div>

    <div class=\"sjs-timeline\">
        <div class=\"sjs-node active-cyan\">
            <div class=\"sjs-icon icon-cyan\"><i class=\"fas fa-plane-arrival\"></i></div>
            <h3>Vol Détecté</h3>
            <p>";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["avion"] ?? null), "idTransport", [], "any", false, true, false, 195), "nom", [], "any", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avion"]) || array_key_exists("avion", $context) ? $context["avion"] : (function () { throw new RuntimeError('Variable "avion" does not exist.', 195, $this->source); })()), "idTransport", [], "any", false, false, false, 195), "nom", [], "any", false, false, false, 195), "Votre Vol")) : ("Votre Vol")), "html", null, true);
        yield "</p>
            <p style=\"font-size:11px; margin-top:5px; color:var(--sjs-cyan);\">Arrivée imminente</p>
        </div>

        <div class=\"sjs-node\" style=\"border-color: rgba(255,255,255,0.3);\">
            <div class=\"sjs-icon\" style=\"color: white; border: 1px solid rgba(255,255,255,0.3);\"><i class=\"fas fa-map-marker-alt\"></i></div>
            <h3>Hub de Connexion</h3>
            <p>";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["aeroport"] ?? null), "nom", [], "any", true, true, false, 202)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aeroport"]) || array_key_exists("aeroport", $context) ? $context["aeroport"] : (function () { throw new RuntimeError('Variable "aeroport" does not exist.', 202, $this->source); })()), "nom", [], "any", false, false, false, 202), "Aéroport")) : ("Aéroport")), "html", null, true);
        yield "</p>
            <p style=\"font-size:11px; margin-top:5px;\">Code IATA: <strong>";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["aeroport"] ?? null), "codeIata", [], "any", true, true, false, 203)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["aeroport"]) || array_key_exists("aeroport", $context) ? $context["aeroport"] : (function () { throw new RuntimeError('Variable "aeroport" does not exist.', 203, $this->source); })()), "codeIata", [], "any", false, false, false, 203), "N/A")) : ("N/A")), "html", null, true);
        yield "</strong></p>
        </div>

        <div class=\"sjs-node active-gold\">
            <div class=\"sjs-icon icon-gold\"><i class=\"fas fa-car\"></i></div>
            <h3>Véhicule IoT</h3>
            <p>";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["voiture"] ?? null), "idTransport", [], "any", false, true, false, 209), "nom", [], "any", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 209, $this->source); })()), "idTransport", [], "any", false, false, false, 209), "nom", [], "any", false, false, false, 209), "Votre Voiture")) : ("Votre Voiture")), "html", null, true);
        yield "</p>
            <p style=\"font-size:11px; margin-top:5px; color:var(--sjs-gold);\">En attente du signal</p>
        </div>
    </div>

    <div class=\"sjs-calculator\">
        <h3 style=\"color: white; font-family: 'Playfair Display', serif; margin-bottom: 30px; font-size: 28px;\">
            <i class=\"fas fa-microchip\" style=\"color: var(--sjs-gold);\"></i> Calcul du <span style=\"color:var(--sjs-gold);\">Time-to-Steering-Wheel</span>
        </h3>

        <div class=\"sjs-calc-grid\">
            <div class=\"sjs-metric\">
                <div class=\"sjs-metric-val\" id=\"val-taxi\"><span class=\"loading-pulse\">--</span></div>
                <div class=\"sjs-metric-label\">Roulage & Débarquement</div>
            </div>
            <div class=\"sjs-metric\">
                <div class=\"sjs-metric-val\" id=\"val-customs\"><span class=\"loading-pulse\">--</span></div>
                <div class=\"sjs-metric-label\">Passage en Douane</div>
            </div>
            <div class=\"sjs-metric\">
                <div class=\"sjs-metric-val\" id=\"val-baggage\"><span class=\"loading-pulse\">--</span></div>
                <div class=\"sjs-metric-label\">Retrait des Bagages</div>
            </div>
        </div>

        <div style=\"border-top: 1px solid rgba(255,255,255,0.1); padding-top: 30px; margin-top: 20px;\">
            <p style=\"color: var(--sjs-text-muted); font-size: 14px; text-transform: uppercase; letter-spacing: 2px;\">
                Heure estimée au volant (Préchauffage auto activé)
            </p>
            <div class=\"sjs-final-time\" id=\"final-time\">
                <span class=\"loading-pulse\" style=\"font-size: 40px;\">Analyse en cours...</span>
            </div>
            <p style=\"color: var(--sjs-success); font-weight: 600; font-size: 14px; margin-top: 10px;\" id=\"success-msg\" style=\"display:none;\">
                <i class=\"fas fa-check-circle\"></i> Le signal IoT a été transmis au véhicule avec succès.
            </p>
        </div>
    </div>

    <div style=\"text-align: center;\">
        <a href=\"";
        // line 248
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_reservations_transports");
        yield "\" class=\"sjs-btn-return\">
            <i class=\"fas fa-arrow-left\"></i> Retour à mes trajets
        </a>
    </div>
</div>

";
        // line 254
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 255
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simulation visuelle de l'IA (Puisque le contrôleur a déjà fait la validation backend)
    
    setTimeout(() => {
        // Génération de temps réalistes
        const taxiTime = Math.floor(Math.random() * 10) + 10; // 10-20 min
        const customsTime = Math.floor(Math.random() * 20) + 15; // 15-35 min
        const baggageTime = Math.floor(Math.random() * 15) + 10; // 10-25 min
        
        const totalWait = taxiTime + customsTime + baggageTime;
        
        // Calcul de l'heure finale (Heure actuelle + 2h de vol simulé + attente)
        let now = new Date();
        now.setHours(now.getHours() + 2); // Simule l'arrivée du vol
        now.setMinutes(now.getMinutes() + totalWait);
        
        const finalTimeStr = now.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' });

        // Animations d'affichage
        document.getElementById('val-taxi').innerHTML = taxiTime + ' <span style=\"font-size:14px; color:#BED1E0;\">min</span>';
        
        setTimeout(() => {
            document.getElementById('val-customs').innerHTML = customsTime + ' <span style=\"font-size:14px; color:#BED1E0;\">min</span>';
        }, 600);

        setTimeout(() => {
            document.getElementById('val-baggage').innerHTML = baggageTime + ' <span style=\"font-size:14px; color:#BED1E0;\">min</span>';
        }, 1200);

        setTimeout(() => {
            const timeEl = document.getElementById('final-time');
            timeEl.style.opacity = '0';
            
            setTimeout(() => {
                timeEl.innerHTML = finalTimeStr;
                timeEl.style.transition = 'opacity 0.5s ease';
                timeEl.style.opacity = '1';
                
                document.getElementById('success-msg').style.display = 'block';
            }, 300);
        }, 2000);

    }, 1500); // Début de l'animation après 1.5s
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
        return "transports/sjs.html.twig";
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
        return array (  390 => 255,  367 => 254,  358 => 248,  316 => 209,  307 => 203,  303 => 202,  293 => 195,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Smart Journey Synchronizer - ASAFAR{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --sjs-bg: #051621;
        --sjs-card: #0B2D4A;
        --sjs-card-hover: #08263E;
        --sjs-gold: #FFC107;
        --sjs-gold-glow: rgba(255, 193, 7, 0.3);
        --sjs-cyan: #2FA8FF;
        --sjs-cyan-glow: rgba(47, 168, 255, 0.3);
        --sjs-success: #4CAF50;
        --sjs-text: #F4F8FC;
        --sjs-text-muted: #BED1E0;
    }

    .sjs-container {
        padding: 120px 40px 60px;
        max-width: 1200px;
        margin: 0 auto;
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
    }

    .sjs-header {
        text-align: center;
        margin-bottom: 50px;
        animation: fadeInDown 0.8s ease-out;
    }

    .sjs-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(47, 168, 255, 0.15);
        border: 1px solid var(--sjs-cyan);
        color: var(--sjs-cyan);
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 20px;
        box-shadow: 0 0 15px var(--sjs-cyan-glow);
    }

    .sjs-title {
        font-family: 'Playfair Display', serif;
        font-size: 42px;
        color: var(--sjs-text);
        margin-bottom: 15px;
    }

    .sjs-title span {
        color: var(--sjs-gold);
    }

    /* --- TIMELINE (Vol -> Hub -> Voiture) --- */
    .sjs-timeline {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 60px;
        position: relative;
        animation: fadeInUp 0.8s ease-out 0.2s both;
    }

    .sjs-timeline::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 10%;
        right: 10%;
        height: 2px;
        background: linear-gradient(90deg, var(--sjs-cyan), var(--sjs-gold));
        z-index: 1;
        opacity: 0.5;
        border-radius: 2px;
    }

    .sjs-node {
        background: var(--sjs-card);
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 25px;
        width: 30%;
        text-align: center;
        position: relative;
        z-index: 2;
        transition: all 0.4s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .sjs-node.active-cyan { border-color: var(--sjs-cyan); box-shadow: 0 10px 30px var(--sjs-cyan-glow); }
    .sjs-node.active-gold { border-color: var(--sjs-gold); box-shadow: 0 10px 30px var(--sjs-gold-glow); }

    .sjs-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin: 0 auto 15px;
        background: rgba(0, 0, 0, 0.2);
    }

    .icon-cyan { color: var(--sjs-cyan); border: 1px solid var(--sjs-cyan); }
    .icon-gold { color: var(--sjs-gold); border: 1px solid var(--sjs-gold); }

    .sjs-node h3 { color: var(--sjs-text); font-size: 18px; margin-bottom: 8px; }
    .sjs-node p { color: var(--sjs-text-muted); font-size: 13px; margin: 0; }

    /* --- IA CALCULATOR BOX --- */
    .sjs-calculator {
        background: linear-gradient(145deg, rgba(11, 45, 74, 0.9), rgba(5, 22, 33, 0.95));
        border: 1px solid rgba(255, 193, 7, 0.2);
        border-radius: 24px;
        padding: 40px;
        text-align: center;
        animation: fadeInUp 0.8s ease-out 0.4s both;
        position: relative;
        overflow: hidden;
    }

    .sjs-calc-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 30px;
    }

    .sjs-metric {
        background: rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        padding: 20px;
    }

    .sjs-metric-val { font-size: 24px; font-weight: 700; color: var(--sjs-cyan); margin-bottom: 5px; }
    .sjs-metric-label { font-size: 11px; text-transform: uppercase; color: var(--sjs-text-muted); letter-spacing: 1px; }

    .sjs-final-time {
        font-size: 56px;
        font-weight: 800;
        color: var(--sjs-gold);
        letter-spacing: -2px;
        margin: 20px 0;
        text-shadow: 0 0 30px var(--sjs-gold-glow);
    }

    .sjs-btn-return {
        display: inline-block;
        padding: 14px 30px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        margin-top: 40px;
    }
    .sjs-btn-return:hover { background: rgba(255, 255, 255, 0.1); transform: translateY(-2px); }

    /* Animations */
    @keyframes fadeInDown { from { opacity: 0; transform: translateY(-20px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    
    .loading-pulse { animation: pulse 1.5s infinite; }
    @keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.4; } }
</style>

<div class=\"sjs-container\">
    <div class=\"sjs-header\">
        <div class=\"sjs-badge\">
            <i class=\"fas fa-satellite-dish pulse\"></i> Pont ASAFAR Actif
        </div>
        <h1 class=\"sjs-title\">Smart Journey <span>Synchronizer</span></h1>
        <p style=\"color: var(--sjs-text-muted); font-size: 16px; max-width: 600px; margin: 0 auto;\">
            Votre vol et votre véhicule ont été détectés sur le même aéroport. Notre IA orchestre maintenant la préparation de votre voiture pour qu'elle soit prête à la minute exacte où vous en aurez besoin.
        </p>
    </div>

    <div class=\"sjs-timeline\">
        <div class=\"sjs-node active-cyan\">
            <div class=\"sjs-icon icon-cyan\"><i class=\"fas fa-plane-arrival\"></i></div>
            <h3>Vol Détecté</h3>
            <p>{{ avion.idTransport.nom|default('Votre Vol') }}</p>
            <p style=\"font-size:11px; margin-top:5px; color:var(--sjs-cyan);\">Arrivée imminente</p>
        </div>

        <div class=\"sjs-node\" style=\"border-color: rgba(255,255,255,0.3);\">
            <div class=\"sjs-icon\" style=\"color: white; border: 1px solid rgba(255,255,255,0.3);\"><i class=\"fas fa-map-marker-alt\"></i></div>
            <h3>Hub de Connexion</h3>
            <p>{{ aeroport.nom|default('Aéroport') }}</p>
            <p style=\"font-size:11px; margin-top:5px;\">Code IATA: <strong>{{ aeroport.codeIata|default('N/A') }}</strong></p>
        </div>

        <div class=\"sjs-node active-gold\">
            <div class=\"sjs-icon icon-gold\"><i class=\"fas fa-car\"></i></div>
            <h3>Véhicule IoT</h3>
            <p>{{ voiture.idTransport.nom|default('Votre Voiture') }}</p>
            <p style=\"font-size:11px; margin-top:5px; color:var(--sjs-gold);\">En attente du signal</p>
        </div>
    </div>

    <div class=\"sjs-calculator\">
        <h3 style=\"color: white; font-family: 'Playfair Display', serif; margin-bottom: 30px; font-size: 28px;\">
            <i class=\"fas fa-microchip\" style=\"color: var(--sjs-gold);\"></i> Calcul du <span style=\"color:var(--sjs-gold);\">Time-to-Steering-Wheel</span>
        </h3>

        <div class=\"sjs-calc-grid\">
            <div class=\"sjs-metric\">
                <div class=\"sjs-metric-val\" id=\"val-taxi\"><span class=\"loading-pulse\">--</span></div>
                <div class=\"sjs-metric-label\">Roulage & Débarquement</div>
            </div>
            <div class=\"sjs-metric\">
                <div class=\"sjs-metric-val\" id=\"val-customs\"><span class=\"loading-pulse\">--</span></div>
                <div class=\"sjs-metric-label\">Passage en Douane</div>
            </div>
            <div class=\"sjs-metric\">
                <div class=\"sjs-metric-val\" id=\"val-baggage\"><span class=\"loading-pulse\">--</span></div>
                <div class=\"sjs-metric-label\">Retrait des Bagages</div>
            </div>
        </div>

        <div style=\"border-top: 1px solid rgba(255,255,255,0.1); padding-top: 30px; margin-top: 20px;\">
            <p style=\"color: var(--sjs-text-muted); font-size: 14px; text-transform: uppercase; letter-spacing: 2px;\">
                Heure estimée au volant (Préchauffage auto activé)
            </p>
            <div class=\"sjs-final-time\" id=\"final-time\">
                <span class=\"loading-pulse\" style=\"font-size: 40px;\">Analyse en cours...</span>
            </div>
            <p style=\"color: var(--sjs-success); font-weight: 600; font-size: 14px; margin-top: 10px;\" id=\"success-msg\" style=\"display:none;\">
                <i class=\"fas fa-check-circle\"></i> Le signal IoT a été transmis au véhicule avec succès.
            </p>
        </div>
    </div>

    <div style=\"text-align: center;\">
        <a href=\"{{ path('app_mes_reservations_transports') }}\" class=\"sjs-btn-return\">
            <i class=\"fas fa-arrow-left\"></i> Retour à mes trajets
        </a>
    </div>
</div>

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simulation visuelle de l'IA (Puisque le contrôleur a déjà fait la validation backend)
    
    setTimeout(() => {
        // Génération de temps réalistes
        const taxiTime = Math.floor(Math.random() * 10) + 10; // 10-20 min
        const customsTime = Math.floor(Math.random() * 20) + 15; // 15-35 min
        const baggageTime = Math.floor(Math.random() * 15) + 10; // 10-25 min
        
        const totalWait = taxiTime + customsTime + baggageTime;
        
        // Calcul de l'heure finale (Heure actuelle + 2h de vol simulé + attente)
        let now = new Date();
        now.setHours(now.getHours() + 2); // Simule l'arrivée du vol
        now.setMinutes(now.getMinutes() + totalWait);
        
        const finalTimeStr = now.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' });

        // Animations d'affichage
        document.getElementById('val-taxi').innerHTML = taxiTime + ' <span style=\"font-size:14px; color:#BED1E0;\">min</span>';
        
        setTimeout(() => {
            document.getElementById('val-customs').innerHTML = customsTime + ' <span style=\"font-size:14px; color:#BED1E0;\">min</span>';
        }, 600);

        setTimeout(() => {
            document.getElementById('val-baggage').innerHTML = baggageTime + ' <span style=\"font-size:14px; color:#BED1E0;\">min</span>';
        }, 1200);

        setTimeout(() => {
            const timeEl = document.getElementById('final-time');
            timeEl.style.opacity = '0';
            
            setTimeout(() => {
                timeEl.innerHTML = finalTimeStr;
                timeEl.style.transition = 'opacity 0.5s ease';
                timeEl.style.opacity = '1';
                
                document.getElementById('success-msg').style.display = 'block';
            }, 300);
        }, 2000);

    }, 1500); // Début de l'animation après 1.5s
});
</script>
{% endblock %}
{% endblock %}", "transports/sjs.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\transports\\sjs.html.twig");
    }
}
