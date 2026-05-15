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

/* hebergements/categorie.html.twig */
class __TwigTemplate_ea6ff4921d583d5a0fb52f10992b10d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergements/categorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergements/categorie.html.twig"));

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

        yield "Categorie Hebergement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
        background: #0b2d4a !important;
    }

    .heb-cat-banner {
        position: relative;
        width: 100%;
        height: 420px;
        overflow: hidden;
    }

    .heb-cat-banner > img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        animation: hebCatZoom 20s ease-in-out infinite alternate;
    }

    @keyframes hebCatZoom {
        from { transform: scale(1); }
        to { transform: scale(1.08); }
    }

    .heb-cat-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(8,30,55,0.93) 0%, rgba(15,60,95,0.8) 50%, rgba(8,30,55,0.7) 100%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 34px;
    }

    .heb-cat-overlay h1 {
        margin: 0;
        color: #ffc107;
        font-size: 56px;
        font-family: 'Playfair Display', Georgia, serif;
        font-weight: 800;
        line-height: 1.1;
    }

    .heb-cat-line {
        width: 110px;
        height: 4px;
        margin: 18px 0 20px;
        border-radius: 2px;
        background: linear-gradient(90deg, #ffc107, #ff9800, #ffc107);
        background-size: 220% 100%;
        animation: hebCatLine 2.4s linear infinite;
    }

    @keyframes hebCatLine {
        from { background-position: -220% 0; }
        to { background-position: 220% 0; }
    }

    .heb-cat-overlay p {
        margin: 0;
        max-width: 760px;
        color: rgba(255,255,255,0.92);
        font-size: 18px;
        line-height: 1.8;
    }

    .heb-cat-main {
        padding: 70px 60px 90px;
    }

    .heb-cat-head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
        margin-bottom: 34px;
    }

    .heb-cat-title {
        margin: 0;
        color: #ffffff;
        font-size: 34px;
        font-weight: 800;
        line-height: 1.2;
    }

    .heb-back-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        color: #0b2d4a;
        background: linear-gradient(90deg, #ffc107, #ff9800);
        border-radius: 999px;
        padding: 10px 18px;
        font-size: 14px;
        font-weight: 700;
        box-shadow: 0 14px 26px rgba(255, 193, 7, 0.24);
        transition: transform 0.22s ease, box-shadow 0.22s ease;
    }

    .heb-back-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 18px 30px rgba(255, 193, 7, 0.34);
    }

    .heb-cat-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 28px;
    }

    .heb-card {
        overflow: hidden;
        border-radius: 22px;
        background: #f7f9fc;
        box-shadow: 0 20px 50px rgba(2, 23, 39, 0.36);
        transition: transform 0.26s ease, box-shadow 0.26s ease;
    }

    .heb-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 28px 56px rgba(2, 23, 39, 0.5);
    }

    .heb-card-img {
        position: relative;
        height: 230px;
    }

    .heb-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .heb-type {
        position: absolute;
        top: 14px;
        left: 14px;
        background: rgba(255, 193, 7, 0.94);
        color: #0b2d4a;
        border-radius: 999px;
        padding: 6px 14px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .heb-rating {
        position: absolute;
        top: 14px;
        right: 14px;
        background: rgba(11, 45, 74, 0.9);
        color: #ffc107;
        border-radius: 999px;
        padding: 6px 12px;
        font-size: 12px;
        font-weight: 700;
    }

    .heb-card-body {
        padding: 22px;
    }

    .heb-card-body h3 {
        margin: 0 0 10px;
        color: #0b2d4a;
        font-size: 23px;
        font-weight: 800;
        line-height: 1.22;
    }

    .heb-location {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
        color: #38556e;
        font-size: 13px;
        font-weight: 700;
    }

    .heb-location svg {
        width: 16px;
        height: 16px;
        fill: #ff9800;
    }

    .heb-card-body p {
        margin: 0;
        color: #4d6174;
        font-size: 14px;
        line-height: 1.7;
        min-height: 72px;
    }

    .heb-price-row {
        margin-top: 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #deebf3;
        padding-top: 14px;
    }

    .heb-price-label {
        color: #91a1af;
        text-transform: uppercase;
        font-size: 11px;
        letter-spacing: 0.5px;
        font-weight: 700;
    }

    .heb-price-value {
        color: #0b2d4a;
        font-size: 18px;
        font-weight: 800;
    }

    .heb-card-footer {
        display: flex;
        gap: 10px;
        align-items: center;
        margin-top: 14px;
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
        margin: 0;
        text-align: center;
        color: rgba(255,255,255,0.8);
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.14);
        border-radius: 16px;
        padding: 24px;
    }

    @media (max-width: 1100px) {
        .heb-cat-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .heb-cat-main {
            padding: 64px 34px 84px;
        }

        .heb-cat-overlay h1 {
            font-size: 46px;
        }
    }

    @media (max-width: 760px) {
        .heb-cat-banner {
            height: 330px;
        }

        .heb-cat-overlay h1 {
            font-size: 34px;
        }

        .heb-cat-overlay p {
            font-size: 15px;
            line-height: 1.6;
        }

        .heb-cat-main {
            padding: 50px 20px 70px;
        }

        .heb-cat-title {
            font-size: 26px;
        }

        .heb-cat-grid {
            grid-template-columns: 1fr;
        }

        .heb-card-footer {
            flex-direction: column;
        }

        .heb-card-btn {
            width: 100%;
        }
    }
</style>

<section class=\"heb-cat-banner\">
    ";
        // line 365
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 365, $this->source); })()), "imagePath", [], "any", false, false, false, 365)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 366
            yield "        <img
            src=\"";
            // line 367
            if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 367, $this->source); })()), "imagePath", [], "any", false, false, false, 367)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 367, $this->source); })()), "imagePath", [], "any", false, false, false, 367), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 367, $this->source); })()), "imagePath", [], "any", false, false, false, 367), "/")), "html", null, true);
            }
            yield "\"
            alt=\"";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 368, $this->source); })()), "nom", [], "any", false, false, false, 368), "html", null, true);
            yield "\"
            loading=\"lazy\"
            onerror=\"this.onerror=null;this.src='";
            // line 370
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loisirs/default.jpg"), "html", null, true);
            yield "';\"
        >
    ";
        } else {
            // line 373
            yield "        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loisirs/default.jpg"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 373, $this->source); })()), "nom", [], "any", false, false, false, 373), "html", null, true);
            yield "\" loading=\"lazy\">
    ";
        }
        // line 375
        yield "
    <div class=\"heb-cat-overlay\">
        <h1>";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 377, $this->source); })()), "nom", [], "any", false, false, false, 377), "html", null, true);
        yield "</h1>
        <div class=\"heb-cat-line\"></div>
        <p>";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "description", [], "any", true, true, false, 379)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 379, $this->source); })()), "description", [], "any", false, false, false, 379), "Decouvrez nos hebergements de cette categorie.")) : ("Decouvrez nos hebergements de cette categorie.")), "html", null, true);
        yield "</p>
    </div>
</section>

<section class=\"heb-cat-main\">
    <div class=\"heb-cat-head\">
        <h2 class=\"heb-cat-title\">Nos hebergements ";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 385, $this->source); })()), "nom", [], "any", false, false, false, 385), "html", null, true);
        yield "</h2>
        <a href=\"";
        // line 386
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        yield "#categories\" class=\"heb-back-btn\">Retour aux categories</a>
    </div>

    ";
        // line 389
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 389, $this->source); })()))) {
            // line 390
            yield "        <p class=\"heb-empty\">Aucun hebergement disponible pour cette categorie.</p>
    ";
        } else {
            // line 392
            yield "        <div class=\"heb-cat-grid\">
            ";
            // line 393
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 393, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
                // line 394
                yield "                <article class=\"heb-card\">
                    <div class=\"heb-card-img\">
                        ";
                // line 396
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "imagePath", [], "any", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 397
                    yield "                            <img
                                src=\"";
                    // line 398
                    if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "imagePath", [], "any", false, false, false, 398)) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "imagePath", [], "any", false, false, false, 398), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "imagePath", [], "any", false, false, false, 398), "/")), "html", null, true);
                    }
                    yield "\"
                                alt=\"";
                    // line 399
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 399), "html", null, true);
                    yield "\"
                                loading=\"lazy\"
                                onerror=\"this.onerror=null;this.src='";
                    // line 401
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loisirs/default.jpg"), "html", null, true);
                    yield "';\"
                            >
                        ";
                } else {
                    // line 404
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/loisirs/default.jpg"), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 404), "html", null, true);
                    yield "\" loading=\"lazy\">
                        ";
                }
                // line 406
                yield "
                        <span class=\"heb-type\">";
                // line 407
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "type", [], "any", false, false, false, 407)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "type", [], "any", false, false, false, 407), "html", null, true)) : ("HOTEL"));
                yield "</span>
                        <span class=\"heb-rating\">";
                // line 408
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "noteMoyenne", [], "any", false, false, false, 408)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "noteMoyenne", [], "any", false, false, false, 408), "html", null, true)) : ("4.8"));
                yield " ★</span>
                    </div>

                    <div class=\"heb-card-body\">
                        <h3>";
                // line 412
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 412), "html", null, true);
                yield "</h3>

                        <span class=\"heb-location\">
                            <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z\"/></svg>
                            ";
                // line 416
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "localisation", [], "any", false, false, false, 416)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "localisation", [], "any", false, false, false, 416), "html", null, true)) : ("Destination a confirmer"));
                yield "
                        </span>

                        <p>";
                // line 419
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "description", [], "any", true, true, false, 419)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "description", [], "any", false, false, false, 419), "Un hebergement confortable et bien situe pour votre prochain sejour.")) : ("Un hebergement confortable et bien situe pour votre prochain sejour.")), 0, 120), "html", null, true);
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "description", [], "any", false, false, false, 419) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "description", [], "any", false, false, false, 419)) > 120))) {
                    yield "...";
                }
                yield "</p>

                        <div class=\"heb-price-row\">
                            <span class=\"heb-price-label\">Prix / nuit</span>
                            <span class=\"heb-price-value\">";
                // line 423
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "prixParNuit", [], "any", false, false, false, 423)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "prixParNuit", [], "any", false, false, false, 423), "html", null, true)) : ("N/A"));
                yield " TND</span>
                        </div>

                        <div class=\"heb-card-footer\">
                            <a href=\"";
                // line 427
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "idHebergement", [], "any", false, false, false, 427)]), "html", null, true);
                yield "\" class=\"heb-card-btn heb-btn-detail\">
                                <span>Voir détails</span>
                                <svg viewBox=\"0 0 24 24\"><path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"/></svg>
                            </a>
                            <a href=\"";
                // line 431
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "idHebergement", [], "any", false, false, false, 431)]), "html", null, true);
                yield "#reservation\" class=\"heb-card-btn heb-btn-reserver\">
                                <span>Réserver</span>
                                <svg viewBox=\"0 0 24 24\"><path d=\"M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z\"/></svg>
                            </a>
                        </div>
                    </div>
                </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['hebergement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 439
            yield "        </div>
    ";
        }
        // line 441
        yield "</section>
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
        return "hebergements/categorie.html.twig";
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
        return array (  640 => 441,  636 => 439,  622 => 431,  615 => 427,  608 => 423,  598 => 419,  592 => 416,  585 => 412,  578 => 408,  574 => 407,  571 => 406,  563 => 404,  557 => 401,  552 => 399,  544 => 398,  541 => 397,  539 => 396,  535 => 394,  531 => 393,  528 => 392,  524 => 390,  522 => 389,  516 => 386,  512 => 385,  503 => 379,  498 => 377,  494 => 375,  486 => 373,  480 => 370,  475 => 368,  467 => 367,  464 => 366,  462 => 365,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categorie Hebergement - {{ categorie.nom }}{% endblock %}

{% block body %}
<style>
    body {
        background: #0b2d4a !important;
    }

    .heb-cat-banner {
        position: relative;
        width: 100%;
        height: 420px;
        overflow: hidden;
    }

    .heb-cat-banner > img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        animation: hebCatZoom 20s ease-in-out infinite alternate;
    }

    @keyframes hebCatZoom {
        from { transform: scale(1); }
        to { transform: scale(1.08); }
    }

    .heb-cat-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(8,30,55,0.93) 0%, rgba(15,60,95,0.8) 50%, rgba(8,30,55,0.7) 100%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 34px;
    }

    .heb-cat-overlay h1 {
        margin: 0;
        color: #ffc107;
        font-size: 56px;
        font-family: 'Playfair Display', Georgia, serif;
        font-weight: 800;
        line-height: 1.1;
    }

    .heb-cat-line {
        width: 110px;
        height: 4px;
        margin: 18px 0 20px;
        border-radius: 2px;
        background: linear-gradient(90deg, #ffc107, #ff9800, #ffc107);
        background-size: 220% 100%;
        animation: hebCatLine 2.4s linear infinite;
    }

    @keyframes hebCatLine {
        from { background-position: -220% 0; }
        to { background-position: 220% 0; }
    }

    .heb-cat-overlay p {
        margin: 0;
        max-width: 760px;
        color: rgba(255,255,255,0.92);
        font-size: 18px;
        line-height: 1.8;
    }

    .heb-cat-main {
        padding: 70px 60px 90px;
    }

    .heb-cat-head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
        margin-bottom: 34px;
    }

    .heb-cat-title {
        margin: 0;
        color: #ffffff;
        font-size: 34px;
        font-weight: 800;
        line-height: 1.2;
    }

    .heb-back-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        color: #0b2d4a;
        background: linear-gradient(90deg, #ffc107, #ff9800);
        border-radius: 999px;
        padding: 10px 18px;
        font-size: 14px;
        font-weight: 700;
        box-shadow: 0 14px 26px rgba(255, 193, 7, 0.24);
        transition: transform 0.22s ease, box-shadow 0.22s ease;
    }

    .heb-back-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 18px 30px rgba(255, 193, 7, 0.34);
    }

    .heb-cat-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 28px;
    }

    .heb-card {
        overflow: hidden;
        border-radius: 22px;
        background: #f7f9fc;
        box-shadow: 0 20px 50px rgba(2, 23, 39, 0.36);
        transition: transform 0.26s ease, box-shadow 0.26s ease;
    }

    .heb-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 28px 56px rgba(2, 23, 39, 0.5);
    }

    .heb-card-img {
        position: relative;
        height: 230px;
    }

    .heb-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .heb-type {
        position: absolute;
        top: 14px;
        left: 14px;
        background: rgba(255, 193, 7, 0.94);
        color: #0b2d4a;
        border-radius: 999px;
        padding: 6px 14px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .heb-rating {
        position: absolute;
        top: 14px;
        right: 14px;
        background: rgba(11, 45, 74, 0.9);
        color: #ffc107;
        border-radius: 999px;
        padding: 6px 12px;
        font-size: 12px;
        font-weight: 700;
    }

    .heb-card-body {
        padding: 22px;
    }

    .heb-card-body h3 {
        margin: 0 0 10px;
        color: #0b2d4a;
        font-size: 23px;
        font-weight: 800;
        line-height: 1.22;
    }

    .heb-location {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
        color: #38556e;
        font-size: 13px;
        font-weight: 700;
    }

    .heb-location svg {
        width: 16px;
        height: 16px;
        fill: #ff9800;
    }

    .heb-card-body p {
        margin: 0;
        color: #4d6174;
        font-size: 14px;
        line-height: 1.7;
        min-height: 72px;
    }

    .heb-price-row {
        margin-top: 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #deebf3;
        padding-top: 14px;
    }

    .heb-price-label {
        color: #91a1af;
        text-transform: uppercase;
        font-size: 11px;
        letter-spacing: 0.5px;
        font-weight: 700;
    }

    .heb-price-value {
        color: #0b2d4a;
        font-size: 18px;
        font-weight: 800;
    }

    .heb-card-footer {
        display: flex;
        gap: 10px;
        align-items: center;
        margin-top: 14px;
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
        margin: 0;
        text-align: center;
        color: rgba(255,255,255,0.8);
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.14);
        border-radius: 16px;
        padding: 24px;
    }

    @media (max-width: 1100px) {
        .heb-cat-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .heb-cat-main {
            padding: 64px 34px 84px;
        }

        .heb-cat-overlay h1 {
            font-size: 46px;
        }
    }

    @media (max-width: 760px) {
        .heb-cat-banner {
            height: 330px;
        }

        .heb-cat-overlay h1 {
            font-size: 34px;
        }

        .heb-cat-overlay p {
            font-size: 15px;
            line-height: 1.6;
        }

        .heb-cat-main {
            padding: 50px 20px 70px;
        }

        .heb-cat-title {
            font-size: 26px;
        }

        .heb-cat-grid {
            grid-template-columns: 1fr;
        }

        .heb-card-footer {
            flex-direction: column;
        }

        .heb-card-btn {
            width: 100%;
        }
    }
</style>

<section class=\"heb-cat-banner\">
    {% if categorie.imagePath %}
        <img
            src=\"{% if categorie.imagePath starts with 'http' %}{{ categorie.imagePath }}{% else %}{{ asset(categorie.imagePath|trim('/')) }}{% endif %}\"
            alt=\"{{ categorie.nom }}\"
            loading=\"lazy\"
            onerror=\"this.onerror=null;this.src='{{ asset('images/loisirs/default.jpg') }}';\"
        >
    {% else %}
        <img src=\"{{ asset('images/loisirs/default.jpg') }}\" alt=\"{{ categorie.nom }}\" loading=\"lazy\">
    {% endif %}

    <div class=\"heb-cat-overlay\">
        <h1>{{ categorie.nom }}</h1>
        <div class=\"heb-cat-line\"></div>
        <p>{{ categorie.description|default('Decouvrez nos hebergements de cette categorie.') }}</p>
    </div>
</section>

<section class=\"heb-cat-main\">
    <div class=\"heb-cat-head\">
        <h2 class=\"heb-cat-title\">Nos hebergements {{ categorie.nom }}</h2>
        <a href=\"{{ path('app_hebergements') }}#categories\" class=\"heb-back-btn\">Retour aux categories</a>
    </div>

    {% if hebergements is empty %}
        <p class=\"heb-empty\">Aucun hebergement disponible pour cette categorie.</p>
    {% else %}
        <div class=\"heb-cat-grid\">
            {% for hebergement in hebergements %}
                <article class=\"heb-card\">
                    <div class=\"heb-card-img\">
                        {% if hebergement.imagePath %}
                            <img
                                src=\"{% if hebergement.imagePath starts with 'http' %}{{ hebergement.imagePath }}{% else %}{{ asset(hebergement.imagePath|trim('/')) }}{% endif %}\"
                                alt=\"{{ hebergement.nom }}\"
                                loading=\"lazy\"
                                onerror=\"this.onerror=null;this.src='{{ asset('images/loisirs/default.jpg') }}';\"
                            >
                        {% else %}
                            <img src=\"{{ asset('images/loisirs/default.jpg') }}\" alt=\"{{ hebergement.nom }}\" loading=\"lazy\">
                        {% endif %}

                        <span class=\"heb-type\">{{ hebergement.type ?: 'HOTEL' }}</span>
                        <span class=\"heb-rating\">{{ hebergement.noteMoyenne ?: '4.8' }} ★</span>
                    </div>

                    <div class=\"heb-card-body\">
                        <h3>{{ hebergement.nom }}</h3>

                        <span class=\"heb-location\">
                            <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z\"/></svg>
                            {{ hebergement.localisation ?: 'Destination a confirmer' }}
                        </span>

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
                            <a href=\"{{ path('app_hebergement_detail', {'id': hebergement.idHebergement}) }}#reservation\" class=\"heb-card-btn heb-btn-reserver\">
                                <span>Réserver</span>
                                <svg viewBox=\"0 0 24 24\"><path d=\"M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z\"/></svg>
                            </a>
                        </div>
                    </div>
                </article>
            {% endfor %}
        </div>
    {% endif %}
</section>
{% endblock %}
", "hebergements/categorie.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\hebergements\\categorie.html.twig");
    }
}
