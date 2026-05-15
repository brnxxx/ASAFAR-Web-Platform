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

/* reservation/create.html.twig */
class __TwigTemplate_f3e69b8401e4d20eadd971619dbe346c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/create.html.twig"));

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

        yield "Réserver - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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

    .create-page {
        min-height: 100vh;
        padding: 120px 24px 80px;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
    }

    .create-container {
        max-width: 900px;
        margin: 0 auto;
    }

    /* Back link */
    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #2FA8FF;
        text-decoration: none;
        margin-bottom: 24px;
        font-size: 14px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .back-link:hover { color: #FFC107; transform: translateX(-4px); }

    /* Hebergement info card */
    .heb-info-card {
        background: rgba(255,255,255,0.05);
        border: 1.5px solid rgba(255,193,7,0.15);
        border-radius: 18px;
        padding: 28px;
        margin-bottom: 30px;
        display: flex;
        gap: 24px;
        align-items: center;
    }

    .heb-info-img {
        width: 140px;
        height: 105px;
        border-radius: 12px;
        overflow: hidden;
        flex-shrink: 0;
        background: rgba(255,193,7,0.08);
    }

    .heb-info-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .heb-info-content h3 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 26px;
        color: #FFC107;
        margin: 0 0 6px;
    }

    .heb-info-meta {
        display: flex;
        gap: 18px;
        font-size: 13px;
        color: rgba(255,255,255,0.6);
        margin-bottom: 8px;
    }

    .heb-info-price {
        font-size: 22px;
        font-weight: 800;
        color: #34D399;
    }

    .heb-info-desc {
        font-size: 13px;
        color: rgba(255,255,255,0.5);
        line-height: 1.6;
        margin: 0;
    }

    /* Form card */
    .form-card {
        background: rgba(255,255,255,0.05);
        border: 1.5px solid rgba(255,193,7,0.15);
        border-radius: 18px;
        padding: 32px;
    }

    .form-card-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 28px;
        color: #FFC107;
        margin: 0 0 24px;
        padding-bottom: 16px;
        border-bottom: 1px solid rgba(255,193,7,0.15);
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-label {
        font-size: 12px;
        font-weight: 700;
        color: rgba(255,193,7,0.8);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .form-input {
        padding: 14px 16px;
        background: rgba(255,255,255,0.06);
        border: 1.5px solid rgba(255,193,7,0.2);
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s ease;
        outline: none;
    }

    .form-input:focus {
        border-color: #FFC107;
        box-shadow: 0 0 20px rgba(255,193,7,0.1);
        background: rgba(255,255,255,0.1);
    }

    .form-input option {
        background: #0B2D4A;
        color: #fff;
    }

    .form-select {
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='%23FFC107'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 16px center;
        padding-right: 40px;
    }

    .submit-btn {
        margin-top: 28px;
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        border: none;
        border-radius: 14px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.4s ease;
        box-shadow: 0 10px 30px rgba(255,193,7,0.2);
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 50px rgba(255,193,7,0.3);
    }

    /* Flash messages */
    .flash-error {
        background: rgba(239,68,68,0.15);
        border: 1px solid rgba(239,68,68,0.3);
        color: #EF4444;
        padding: 14px 20px;
        border-radius: 12px;
        margin-bottom: 20px;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .create-page { padding: 100px 16px 60px; }
        .heb-info-card { flex-direction: column; text-align: center; }
        .form-grid { grid-template-columns: 1fr; }
    }
</style>

<div class=\"create-page\">
    <div class=\"create-container\">

        <a href=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 206, $this->source); })()), "idHebergement", [], "any", false, false, false, 206)]), "html", null, true);
        yield "\" class=\"back-link\">
            ← Retour à l'hébergement
        </a>

        ";
        // line 211
        yield "        <div class=\"heb-info-card\">
            <div class=\"heb-info-img\">
                ";
        // line 213
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 213, $this->source); })()), "imagePath", [], "any", false, false, false, 213)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 214
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 214, $this->source); })()), "imagePath", [], "any", false, false, false, 214), "/")), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 214, $this->source); })()), "nom", [], "any", false, false, false, 214), "html", null, true);
            yield "\">
                ";
        } else {
            // line 216
            yield "                    <span style=\"font-size:42px;\">🏨</span>
                ";
        }
        // line 218
        yield "            </div>
            <div class=\"heb-info-content\">
                <h3>";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 220, $this->source); })()), "nom", [], "any", false, false, false, 220), "html", null, true);
        yield "</h3>
                <div class=\"heb-info-meta\">
                    <span>📍 ";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 222, $this->source); })()), "localisation", [], "any", false, false, false, 222), "html", null, true);
        yield "</span>
                    <span>🏷️ ";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 223, $this->source); })()), "type", [], "any", false, false, false, 223), "html", null, true);
        yield "</span>
                </div>
                <div class=\"heb-info-price\">";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 225, $this->source); })()), "prixParNuit", [], "any", false, false, false, 225), "html", null, true);
        yield "€ / nuit</div>
                <p class=\"heb-info-desc\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 226, $this->source); })()), "description", [], "any", false, false, false, 226), 0, 200), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 226, $this->source); })()), "description", [], "any", false, false, false, 226)) > 200)) {
            yield "...";
        }
        yield "</p>
            </div>
        </div>

        ";
        // line 231
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "flashes", ["error"], "method", false, false, false, 231));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 232
            yield "            <div class=\"flash-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        yield "
        ";
        // line 236
        yield "        <div class=\"form-card\">
            <h2 class=\"form-card-title\">📅 Votre Réservation</h2>

            ";
        // line 239
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label class=\"form-label\">📅 Date d'arrivée</label>
                        ";
        // line 243
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "dateArrivee", [], "any", false, false, false, 243), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">📅 Date de départ</label>
                        ";
        // line 247
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "dateDepart", [], "any", false, false, false, 247), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">👤 Adultes</label>
                        ";
        // line 251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "nbAdultes", [], "any", false, false, false, 251), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">👶 Enfants</label>
                        ";
        // line 255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "nbEnfants", [], "any", false, false, false, 255), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">🍼 Bébés</label>
                        ";
        // line 259
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "nbBebes", [], "any", false, false, false, 259), 'widget', ["attr" => ["class" => "form-input"]]);
        yield "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">";
        // line 262
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "statut", [], "any", false, false, false, 262), 'label');
        yield "</label>
                        ";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "statut", [], "any", false, false, false, 263), 'widget', ["attr" => ["class" => "form-input form-select"]]);
        yield "
                    </div>
                </div>

                <button type=\"submit\" class=\"submit-btn\">✅ Confirmer la Réservation</button>
            ";
        // line 268
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), 'form_end');
        yield "
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
        return "reservation/create.html.twig";
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
        return array (  435 => 268,  427 => 263,  423 => 262,  417 => 259,  410 => 255,  403 => 251,  396 => 247,  389 => 243,  382 => 239,  377 => 236,  374 => 234,  365 => 232,  360 => 231,  350 => 226,  346 => 225,  341 => 223,  337 => 222,  332 => 220,  328 => 218,  324 => 216,  316 => 214,  314 => 213,  310 => 211,  303 => 206,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réserver - {{ hebergement.nom }}{% endblock %}

{% block body %}
<style>
    body { background: #0B2D4A !important; }

    .create-page {
        min-height: 100vh;
        padding: 120px 24px 80px;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
    }

    .create-container {
        max-width: 900px;
        margin: 0 auto;
    }

    /* Back link */
    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #2FA8FF;
        text-decoration: none;
        margin-bottom: 24px;
        font-size: 14px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .back-link:hover { color: #FFC107; transform: translateX(-4px); }

    /* Hebergement info card */
    .heb-info-card {
        background: rgba(255,255,255,0.05);
        border: 1.5px solid rgba(255,193,7,0.15);
        border-radius: 18px;
        padding: 28px;
        margin-bottom: 30px;
        display: flex;
        gap: 24px;
        align-items: center;
    }

    .heb-info-img {
        width: 140px;
        height: 105px;
        border-radius: 12px;
        overflow: hidden;
        flex-shrink: 0;
        background: rgba(255,193,7,0.08);
    }

    .heb-info-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .heb-info-content h3 {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 26px;
        color: #FFC107;
        margin: 0 0 6px;
    }

    .heb-info-meta {
        display: flex;
        gap: 18px;
        font-size: 13px;
        color: rgba(255,255,255,0.6);
        margin-bottom: 8px;
    }

    .heb-info-price {
        font-size: 22px;
        font-weight: 800;
        color: #34D399;
    }

    .heb-info-desc {
        font-size: 13px;
        color: rgba(255,255,255,0.5);
        line-height: 1.6;
        margin: 0;
    }

    /* Form card */
    .form-card {
        background: rgba(255,255,255,0.05);
        border: 1.5px solid rgba(255,193,7,0.15);
        border-radius: 18px;
        padding: 32px;
    }

    .form-card-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 28px;
        color: #FFC107;
        margin: 0 0 24px;
        padding-bottom: 16px;
        border-bottom: 1px solid rgba(255,193,7,0.15);
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-label {
        font-size: 12px;
        font-weight: 700;
        color: rgba(255,193,7,0.8);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .form-input {
        padding: 14px 16px;
        background: rgba(255,255,255,0.06);
        border: 1.5px solid rgba(255,193,7,0.2);
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s ease;
        outline: none;
    }

    .form-input:focus {
        border-color: #FFC107;
        box-shadow: 0 0 20px rgba(255,193,7,0.1);
        background: rgba(255,255,255,0.1);
    }

    .form-input option {
        background: #0B2D4A;
        color: #fff;
    }

    .form-select {
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='%23FFC107'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 16px center;
        padding-right: 40px;
    }

    .submit-btn {
        margin-top: 28px;
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        border: none;
        border-radius: 14px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.4s ease;
        box-shadow: 0 10px 30px rgba(255,193,7,0.2);
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 50px rgba(255,193,7,0.3);
    }

    /* Flash messages */
    .flash-error {
        background: rgba(239,68,68,0.15);
        border: 1px solid rgba(239,68,68,0.3);
        color: #EF4444;
        padding: 14px 20px;
        border-radius: 12px;
        margin-bottom: 20px;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .create-page { padding: 100px 16px 60px; }
        .heb-info-card { flex-direction: column; text-align: center; }
        .form-grid { grid-template-columns: 1fr; }
    }
</style>

<div class=\"create-page\">
    <div class=\"create-container\">

        <a href=\"{{ path('app_hebergement_detail', {'id': hebergement.idHebergement}) }}\" class=\"back-link\">
            ← Retour à l'hébergement
        </a>

        {# Hebergement Info #}
        <div class=\"heb-info-card\">
            <div class=\"heb-info-img\">
                {% if hebergement.imagePath %}
                    <img src=\"{{ asset(hebergement.imagePath|trim('/')) }}\" alt=\"{{ hebergement.nom }}\">
                {% else %}
                    <span style=\"font-size:42px;\">🏨</span>
                {% endif %}
            </div>
            <div class=\"heb-info-content\">
                <h3>{{ hebergement.nom }}</h3>
                <div class=\"heb-info-meta\">
                    <span>📍 {{ hebergement.localisation }}</span>
                    <span>🏷️ {{ hebergement.type }}</span>
                </div>
                <div class=\"heb-info-price\">{{ hebergement.prixParNuit }}€ / nuit</div>
                <p class=\"heb-info-desc\">{{ hebergement.description|slice(0, 200) }}{% if hebergement.description|length > 200 %}...{% endif %}</p>
            </div>
        </div>

        {# Flash Errors #}
        {% for message in app.flashes('error') %}
            <div class=\"flash-error\">{{ message }}</div>
        {% endfor %}

        {# Reservation Form #}
        <div class=\"form-card\">
            <h2 class=\"form-card-title\">📅 Votre Réservation</h2>

            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        <label class=\"form-label\">📅 Date d'arrivée</label>
                        {{ form_widget(form.dateArrivee, {'attr': {'class': 'form-input'}}) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">📅 Date de départ</label>
                        {{ form_widget(form.dateDepart, {'attr': {'class': 'form-input'}}) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">👤 Adultes</label>
                        {{ form_widget(form.nbAdultes, {'attr': {'class': 'form-input'}}) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">👶 Enfants</label>
                        {{ form_widget(form.nbEnfants, {'attr': {'class': 'form-input'}}) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">🍼 Bébés</label>
                        {{ form_widget(form.nbBebes, {'attr': {'class': 'form-input'}}) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\">{{ form_label(form.statut) }}</label>
                        {{ form_widget(form.statut, {'attr': {'class': 'form-input form-select'}}) }}
                    </div>
                </div>

                <button type=\"submit\" class=\"submit-btn\">✅ Confirmer la Réservation</button>
            {{ form_end(form) }}
        </div>

    </div>
</div>
{% endblock %}", "reservation/create.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\reservation\\create.html.twig");
    }
}
