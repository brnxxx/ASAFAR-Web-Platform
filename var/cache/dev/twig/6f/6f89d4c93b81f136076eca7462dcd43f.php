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

/* hebergements/detail.html.twig */
class __TwigTemplate_07064cc5ebaed8eaf54d326caef078f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergements/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergements/detail.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        yield " - ASAFAR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
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
    body { background: #0B2D4A !important; }

    .detail-page {
        min-height: 100vh;
        padding: 120px 24px 80px;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
    }
    .detail-container { max-width: 1100px; margin: 0 auto; }

    .back-link {
        display: inline-flex; align-items: center; gap: 8px;
        color: #2FA8FF; text-decoration: none; margin-bottom: 24px;
        font-size: 14px; font-weight: 600; transition: all 0.3s ease;
    }
    .back-link:hover { color: #FFC107; transform: translateX(-4px); }

    .detail-header { display: grid; grid-template-columns: 1fr 1fr; gap: 32px; margin-bottom: 32px; }
    .detail-img {
        height: 380px; border-radius: 18px; overflow: hidden;
        border: 2px solid rgba(255,193,7,0.15); background: rgba(255,193,7,0.05);
        display: flex; align-items: center; justify-content: center;
    }
    .detail-img img { width: 100%; height: 100%; object-fit: cover; }
    .detail-info { display: flex; flex-direction: column; gap: 16px; }
    .detail-name {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 38px; color: #FFC107; margin: 0;
    }
    .detail-meta { display: flex; gap: 12px; flex-wrap: wrap; }
    .detail-tag {
        padding: 6px 14px; background: rgba(255,193,7,0.1);
        border: 1px solid rgba(255,193,7,0.2); border-radius: 20px;
        font-size: 12px; color: #FFC107; font-weight: 600;
    }
    .detail-price-card {
        background: rgba(255,255,255,0.05); border: 1px solid rgba(52,211,153,0.3);
        border-radius: 16px; padding: 24px; text-align: center;
    }
    .detail-price { font-size: 38px; font-weight: 800; color: #34D399; }
    .detail-price-label { font-size: 13px; color: rgba(255,255,255,0.5); }
    .btn-reserve {
        display: block; text-align: center; padding: 16px;
        background: linear-gradient(135deg, #FFC107, #FF9800); color: #0B2D4A;
        text-decoration: none; border-radius: 14px; font-weight: 700; font-size: 16px;
        transition: all 0.4s ease; box-shadow: 0 10px 30px rgba(255,193,7,0.2);
    }
    .btn-reserve:hover { transform: translateY(-3px); box-shadow: 0 20px 50px rgba(255,193,7,0.3); }
    .section-card {
        background: rgba(255,255,255,0.05); border: 1px solid rgba(255,193,7,0.12);
        border-radius: 18px; padding: 28px; margin-bottom: 24px;
    }
    .section-title { color: #2FA8FF; margin: 0 0 16px; font-size: 18px; display: flex; align-items: center; gap: 8px; }
    .gallery-track {
        display: flex; gap: 14px; overflow-x: auto; overflow-y: hidden;
        padding-bottom: 10px; scroll-snap-type: x mandatory;
    }
    .gallery-track::-webkit-scrollbar { height: 6px; }
    .gallery-track::-webkit-scrollbar-thumb { background: rgba(255,193,7,0.4); border-radius: 10px; }
    .gallery-item {
        flex: 0 0 240px; height: 160px; border-radius: 12px; overflow: hidden;
        border: 1px solid rgba(255,193,7,0.15); scroll-snap-align: start;
    }
    .gallery-item img { width: 100%; height: 100%; object-fit: cover; }
    .converter-row { display: flex; gap: 12px; align-items: end; flex-wrap: wrap; }
    .converter-input, .converter-select {
        padding: 12px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,193,7,0.2);
        border-radius: 10px; color: #fff; font-size: 14px; outline: none;
    }
    .converter-select option { background: #0B2D4A; color: #fff; }
    .converter-result { margin-top: 16px; padding: 16px; background: rgba(52,211,153,0.1); border-radius: 10px; display: none; }
    .map-btn {
        padding: 8px 16px; background: rgba(47,168,255,0.15); border: 1px solid #2FA8FF;
        border-radius: 8px; color: #2FA8FF; cursor: pointer; font-size: 13px; font-weight: 600;
    }
    .map-container { display: none; border-radius: 12px; overflow: hidden; border: 2px solid rgba(47,168,255,0.2); margin-bottom: 24px; }
    .mini-map { width: 100%; height: 350px; }
    .star-interactive { transition: all 0.2s; }
    .star-interactive:hover { transform: scale(1.2); }

    @media (max-width: 768px) {
        .detail-header { grid-template-columns: 1fr; }
        .detail-img { height: 250px; }
        .detail-name { font-size: 28px; }
    }
</style>

<div class=\"detail-page\">
    <div class=\"detail-container\">

        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        yield "\" class=\"back-link\">← Retour aux hébergements</a>

        <div class=\"detail-header\">
            <div class=\"detail-img\">
                ";
        // line 98
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 98, $this->source); })()), "imagePath", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 99, $this->source); })()), "imagePath", [], "any", false, false, false, 99), "/")), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 99, $this->source); })()), "nom", [], "any", false, false, false, 99), "html", null, true);
            yield "\">
                ";
        } else {
            // line 101
            yield "                    <span style=\"font-size:64px;\">🏨</span>
                ";
        }
        // line 103
        yield "            </div>
            <div class=\"detail-info\">
                <h1 class=\"detail-name\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 105, $this->source); })()), "nom", [], "any", false, false, false, 105), "html", null, true);
        yield "</h1>
                <div class=\"detail-meta\">
                    <span class=\"detail-tag\">📍 ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 107, $this->source); })()), "localisation", [], "any", false, false, false, 107), "html", null, true);
        yield "</span>
                    <span class=\"detail-tag\">🏷️ ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 108, $this->source); })()), "type", [], "any", false, false, false, 108), "html", null, true);
        yield "</span>
                    <span class=\"detail-tag\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 109, $this->source); })()), "disponibilite", [], "any", false, false, false, 109), "html", null, true);
        yield "</span>
                </div>

                <div>
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("StarRating", ["rating" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["hebergement"] ?? null), "noteMoyenne", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 113, $this->source); })()), "noteMoyenne", [], "any", false, false, false, 113), 0)) : (0)), "nbNotes" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["hebergement"] ?? null), "nbNotes", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 113, $this->source); })()), "nbNotes", [], "any", false, false, false, 113), 0)) : (0)), "size" => 24, "interactive" => false]);
        yield "
                </div>

                <div class=\"detail-price-card\">
                    <div class=\"detail-price\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 117, $this->source); })()), "prixParNuit", [], "any", false, false, false, 117), "html", null, true);
        yield "€</div>
                    <div class=\"detail-price-label\">par nuit</div>
                </div>
                <a href=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_create", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 120, $this->source); })()), "idHebergement", [], "any", false, false, false, 120)]), "html", null, true);
        yield "\" class=\"btn-reserve\">
                    🛒 Réserver maintenant
                </a>
            </div>
        </div>

        ";
        // line 126
        $context["galleryImages"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["hebergement"] ?? null), "galleryImages", [], "any", true, true, false, 126)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 126, $this->source); })()), "galleryImages", [], "any", false, false, false, 126), [])) : ([]));
        // line 127
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["galleryImages"]) || array_key_exists("galleryImages", $context) ? $context["galleryImages"] : (function () { throw new RuntimeError('Variable "galleryImages" does not exist.', 127, $this->source); })())) > 0)) {
            // line 128
            yield "        <div class=\"section-card\">
            <h2 class=\"section-title\">🖼️ Galerie photos</h2>
            <div class=\"gallery-track\">
                ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["galleryImages"]) || array_key_exists("galleryImages", $context) ? $context["galleryImages"] : (function () { throw new RuntimeError('Variable "galleryImages" does not exist.', 131, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 132
                yield "                    <div class=\"gallery-item\">
                        <img src=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(Twig\Extension\CoreExtension::trim($context["img"], "/")), "html", null, true);
                yield "\" alt=\"Photo ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 133), "html", null, true);
                yield "\">
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            yield "            </div>
        </div>
        ";
        }
        // line 139
        yield "
        ";
        // line 140
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 140, $this->source); })()), "latitude", [], "any", false, false, false, 140) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 140, $this->source); })()), "longitude", [], "any", false, false, false, 140))) {
            // line 141
            yield "        <div style=\"margin-bottom:24px;\">
            <button onclick=\"toggleMap()\" class=\"map-btn\">📍 Afficher sur la carte</button>
        </div>
        <div id=\"mapContainer\" class=\"map-container\">
            <div id=\"miniMap\" class=\"mini-map\"></div>
        </div>
        ";
        }
        // line 148
        yield "
        <div class=\"section-card\">
            <h2 class=\"section-title\">📝 Description</h2>
            <p style=\"color: rgba(255,255,255,0.75); line-height: 1.8; margin: 0; font-size: 15px;\">
                ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 152, $this->source); })()), "description", [], "any", false, false, false, 152), "html", null, true);
        yield "
            </p>
        </div>

        <div class=\"section-card\">
            <h2 class=\"section-title\">💱 Convertisseur de devises</h2>
            <div class=\"converter-row\">
                <input type=\"number\" id=\"convertAmount\" value=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 159, $this->source); })()), "prixParNuit", [], "any", false, false, false, 159), "html", null, true);
        yield "\" class=\"converter-input\" style=\"width:140px;\">
                <select id=\"fromCurrency\" class=\"converter-select\">
                    <option value=\"EUR\">EUR €</option>
                    <option value=\"USD\">USD \$</option>
                    <option value=\"TND\">TND</option>
                </select>
                <span style=\"color:rgba(255,255,255,0.5);\">→</span>
                <select id=\"toCurrency\" class=\"converter-select\">
                    <option value=\"USD\">USD \$</option>
                    <option value=\"EUR\">EUR €</option>
                    <option value=\"TND\">TND</option>
                </select>
                <button onclick=\"convertCurrency()\" style=\"padding:12px 20px; background: linear-gradient(135deg,#FFC107,#FF9800); color:#0B2D4A; border:none; border-radius:10px; font-weight:700; cursor:pointer;\">
                    Convertir
                </button>
            </div>
            <div id=\"convertResult\" class=\"converter-result\">
                <span id=\"resultText\"></span>
                <span id=\"resultAmount\" style=\"font-size:26px; font-weight:800; color:#34D399; display:block;\"></span>
            </div>
        </div>

        <div class=\"section-card\">
            <h2 class=\"section-title\">⭐ Évaluer cet hébergement</h2>

            <div id=\"currentRating\" style=\"margin-bottom:20px; padding:14px; background:rgba(52,211,153,0.1); border-radius:10px; border-left:4px solid #34D399; ";
        // line 184
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 184, $this->source); })()), "noteMoyenne", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "display:none;";
        }
        yield "\">
                ";
        // line 185
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("StarRating", ["rating" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["hebergement"] ?? null), "noteMoyenne", [], "any", true, true, false, 185)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 185, $this->source); })()), "noteMoyenne", [], "any", false, false, false, 185), 0)) : (0)), "nbNotes" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["hebergement"] ?? null), "nbNotes", [], "any", true, true, false, 185)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 185, $this->source); })()), "nbNotes", [], "any", false, false, false, 185), 0)) : (0)), "size" => 28, "interactive" => false]);
        yield "
            </div>

            <div style=\"display:flex; gap:8px; font-size:42px;\" id=\"starRating\">
                ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 190
            yield "                    <span class=\"star star-interactive\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" style=\"opacity:0.3; color:#FFC107;\">★</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        yield "            </div>
            <input type=\"hidden\" id=\"ratingValue\" value=\"0\">

            <button onclick=\"submitRating(";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 195, $this->source); })()), "idHebergement", [], "any", false, false, false, 195), "html", null, true);
        yield ")\"
                    style=\"width:100%; margin-top:16px; padding:14px; background:linear-gradient(135deg,#FFC107,#FF9800); border:none; border-radius:10px; color:#0B2D4A; font-weight:700; cursor:pointer; font-size:16px;\">
                ⭐ Envoyer la note
            </button>
            <div id=\"ratingMessage\" style=\"display:none; margin-top:12px; padding:12px; border-radius:8px; text-align:center; font-size:14px;\"></div>
        </div>

    </div>
</div>

<script>
// Stars
document.querySelectorAll('.star').forEach(star => {
    star.addEventListener('mouseover', function() {
        const v = this.dataset.value;
        document.querySelectorAll('.star').forEach(s => {
            s.style.opacity = s.dataset.value <= v ? '1' : '0.3';
            s.style.transform = s.dataset.value <= v ? 'scale(1.2)' : 'scale(1)';
        });
    });
    star.addEventListener('mouseout', function() {
        const val = document.getElementById('ratingValue').value;
        document.querySelectorAll('.star').forEach(s => {
            s.style.opacity = s.dataset.value <= val ? '1' : '0.3';
            s.style.transform = 'scale(1)';
        });
    });
    star.addEventListener('click', function() {
        document.getElementById('ratingValue').value = this.dataset.value;
        document.querySelectorAll('.star').forEach(s => {
            s.style.opacity = s.dataset.value <= this.dataset.value ? '1' : '0.3';
        });
    });
});

function submitRating(hebergementId) {
    const rating = document.getElementById('ratingValue').value;
    const msgDiv = document.getElementById('ratingMessage');
    if (rating == 0) {
        msgDiv.style.display = 'block';
        msgDiv.style.background = 'rgba(239,68,68,0.15)';
        msgDiv.style.color = '#EF4444';
        msgDiv.textContent = '❌ Sélectionnez une note.';
        return;
    }
    msgDiv.style.display = 'block';
    msgDiv.style.background = 'rgba(255,193,7,0.1)';
    msgDiv.style.color = '#FFC107';
    msgDiv.textContent = '⏳ Envoi...';

    fetch('/hebergement/' + hebergementId + '/rate', {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        body: new URLSearchParams({ rating: rating })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            msgDiv.style.background = 'rgba(52,211,153,0.15)';
            msgDiv.style.color = '#34D399';
            msgDiv.textContent = '✅ ' + data.message;
            document.getElementById('currentRating').style.display = 'block';
            location.reload();
        }
    })
    .catch(() => {
        msgDiv.style.background = 'rgba(239,68,68,0.15)';
        msgDiv.style.color = '#EF4444';
        msgDiv.textContent = '❌ Erreur réseau.';
    });
}

// Map
";
        // line 268
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 268, $this->source); })()), "latitude", [], "any", false, false, false, 268) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 268, $this->source); })()), "longitude", [], "any", false, false, false, 268))) {
            // line 269
            yield "let miniMap = null;
function toggleMap() {
    const mc = document.getElementById('mapContainer');
    if (mc.style.display === 'block') { mc.style.display = 'none'; return; }
    mc.style.display = 'block';
    if (!miniMap) {
        miniMap = L.map('miniMap').setView([";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 275, $this->source); })()), "latitude", [], "any", false, false, false, 275), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 275, $this->source); })()), "longitude", [], "any", false, false, false, 275), "html", null, true);
            yield "], 15);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19 }).addTo(miniMap);
        L.marker([";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 277, $this->source); })()), "latitude", [], "any", false, false, false, 277), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 277, $this->source); })()), "longitude", [], "any", false, false, false, 277), "html", null, true);
            yield "]).addTo(miniMap);
    }
    setTimeout(() => miniMap.invalidateSize(), 200);
}
";
        }
        // line 282
        yield "
// Converter
function convertCurrency() {
    const amount = document.getElementById('convertAmount').value;
    const from = document.getElementById('fromCurrency').value;
    const to = document.getElementById('toCurrency').value;
    
    fetch('";
        // line 289
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_convert_currency");
        yield "', {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        body: new URLSearchParams({ amount: amount, from: from, to: to })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            document.getElementById('convertResult').style.display = 'block';
            document.getElementById('resultText').textContent = data.amount + ' ' + data.from + ' = ';
            document.getElementById('resultAmount').textContent = data.converted + ' ' + data.to;
        }
    });
}
</script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
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
        return "hebergements/detail.html.twig";
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
        return array (  515 => 289,  506 => 282,  496 => 277,  489 => 275,  481 => 269,  479 => 268,  403 => 195,  398 => 192,  389 => 190,  385 => 189,  378 => 185,  372 => 184,  344 => 159,  334 => 152,  328 => 148,  319 => 141,  317 => 140,  314 => 139,  309 => 136,  290 => 133,  287 => 132,  270 => 131,  265 => 128,  262 => 127,  260 => 126,  251 => 120,  245 => 117,  238 => 113,  231 => 109,  227 => 108,  223 => 107,  218 => 105,  214 => 103,  210 => 101,  202 => 99,  200 => 98,  193 => 94,  101 => 4,  88 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}{{ hebergement.nom }} - ASAFAR{% endblock %}
{% block body %}
<style>
    body { background: #0B2D4A !important; }

    .detail-page {
        min-height: 100vh;
        padding: 120px 24px 80px;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
    }
    .detail-container { max-width: 1100px; margin: 0 auto; }

    .back-link {
        display: inline-flex; align-items: center; gap: 8px;
        color: #2FA8FF; text-decoration: none; margin-bottom: 24px;
        font-size: 14px; font-weight: 600; transition: all 0.3s ease;
    }
    .back-link:hover { color: #FFC107; transform: translateX(-4px); }

    .detail-header { display: grid; grid-template-columns: 1fr 1fr; gap: 32px; margin-bottom: 32px; }
    .detail-img {
        height: 380px; border-radius: 18px; overflow: hidden;
        border: 2px solid rgba(255,193,7,0.15); background: rgba(255,193,7,0.05);
        display: flex; align-items: center; justify-content: center;
    }
    .detail-img img { width: 100%; height: 100%; object-fit: cover; }
    .detail-info { display: flex; flex-direction: column; gap: 16px; }
    .detail-name {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 38px; color: #FFC107; margin: 0;
    }
    .detail-meta { display: flex; gap: 12px; flex-wrap: wrap; }
    .detail-tag {
        padding: 6px 14px; background: rgba(255,193,7,0.1);
        border: 1px solid rgba(255,193,7,0.2); border-radius: 20px;
        font-size: 12px; color: #FFC107; font-weight: 600;
    }
    .detail-price-card {
        background: rgba(255,255,255,0.05); border: 1px solid rgba(52,211,153,0.3);
        border-radius: 16px; padding: 24px; text-align: center;
    }
    .detail-price { font-size: 38px; font-weight: 800; color: #34D399; }
    .detail-price-label { font-size: 13px; color: rgba(255,255,255,0.5); }
    .btn-reserve {
        display: block; text-align: center; padding: 16px;
        background: linear-gradient(135deg, #FFC107, #FF9800); color: #0B2D4A;
        text-decoration: none; border-radius: 14px; font-weight: 700; font-size: 16px;
        transition: all 0.4s ease; box-shadow: 0 10px 30px rgba(255,193,7,0.2);
    }
    .btn-reserve:hover { transform: translateY(-3px); box-shadow: 0 20px 50px rgba(255,193,7,0.3); }
    .section-card {
        background: rgba(255,255,255,0.05); border: 1px solid rgba(255,193,7,0.12);
        border-radius: 18px; padding: 28px; margin-bottom: 24px;
    }
    .section-title { color: #2FA8FF; margin: 0 0 16px; font-size: 18px; display: flex; align-items: center; gap: 8px; }
    .gallery-track {
        display: flex; gap: 14px; overflow-x: auto; overflow-y: hidden;
        padding-bottom: 10px; scroll-snap-type: x mandatory;
    }
    .gallery-track::-webkit-scrollbar { height: 6px; }
    .gallery-track::-webkit-scrollbar-thumb { background: rgba(255,193,7,0.4); border-radius: 10px; }
    .gallery-item {
        flex: 0 0 240px; height: 160px; border-radius: 12px; overflow: hidden;
        border: 1px solid rgba(255,193,7,0.15); scroll-snap-align: start;
    }
    .gallery-item img { width: 100%; height: 100%; object-fit: cover; }
    .converter-row { display: flex; gap: 12px; align-items: end; flex-wrap: wrap; }
    .converter-input, .converter-select {
        padding: 12px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,193,7,0.2);
        border-radius: 10px; color: #fff; font-size: 14px; outline: none;
    }
    .converter-select option { background: #0B2D4A; color: #fff; }
    .converter-result { margin-top: 16px; padding: 16px; background: rgba(52,211,153,0.1); border-radius: 10px; display: none; }
    .map-btn {
        padding: 8px 16px; background: rgba(47,168,255,0.15); border: 1px solid #2FA8FF;
        border-radius: 8px; color: #2FA8FF; cursor: pointer; font-size: 13px; font-weight: 600;
    }
    .map-container { display: none; border-radius: 12px; overflow: hidden; border: 2px solid rgba(47,168,255,0.2); margin-bottom: 24px; }
    .mini-map { width: 100%; height: 350px; }
    .star-interactive { transition: all 0.2s; }
    .star-interactive:hover { transform: scale(1.2); }

    @media (max-width: 768px) {
        .detail-header { grid-template-columns: 1fr; }
        .detail-img { height: 250px; }
        .detail-name { font-size: 28px; }
    }
</style>

<div class=\"detail-page\">
    <div class=\"detail-container\">

        <a href=\"{{ path('app_hebergements') }}\" class=\"back-link\">← Retour aux hébergements</a>

        <div class=\"detail-header\">
            <div class=\"detail-img\">
                {% if hebergement.imagePath %}
                    <img src=\"{{ asset(hebergement.imagePath|trim('/')) }}\" alt=\"{{ hebergement.nom }}\">
                {% else %}
                    <span style=\"font-size:64px;\">🏨</span>
                {% endif %}
            </div>
            <div class=\"detail-info\">
                <h1 class=\"detail-name\">{{ hebergement.nom }}</h1>
                <div class=\"detail-meta\">
                    <span class=\"detail-tag\">📍 {{ hebergement.localisation }}</span>
                    <span class=\"detail-tag\">🏷️ {{ hebergement.type }}</span>
                    <span class=\"detail-tag\">{{ hebergement.disponibilite }}</span>
                </div>

                <div>
                    {{ component('StarRating', { rating: hebergement.noteMoyenne|default(0), nbNotes: hebergement.nbNotes|default(0), size: 24, interactive: false }) }}
                </div>

                <div class=\"detail-price-card\">
                    <div class=\"detail-price\">{{ hebergement.prixParNuit }}€</div>
                    <div class=\"detail-price-label\">par nuit</div>
                </div>
                <a href=\"{{ path('app_reservation_create', {'id': hebergement.idHebergement}) }}\" class=\"btn-reserve\">
                    🛒 Réserver maintenant
                </a>
            </div>
        </div>

        {% set galleryImages = hebergement.galleryImages|default([]) %}
        {% if galleryImages|length > 0 %}
        <div class=\"section-card\">
            <h2 class=\"section-title\">🖼️ Galerie photos</h2>
            <div class=\"gallery-track\">
                {% for img in galleryImages %}
                    <div class=\"gallery-item\">
                        <img src=\"{{ asset(img|trim('/')) }}\" alt=\"Photo {{ loop.index }}\">
                    </div>
                {% endfor %}
            </div>
        </div>
        {% endif %}

        {% if hebergement.latitude and hebergement.longitude %}
        <div style=\"margin-bottom:24px;\">
            <button onclick=\"toggleMap()\" class=\"map-btn\">📍 Afficher sur la carte</button>
        </div>
        <div id=\"mapContainer\" class=\"map-container\">
            <div id=\"miniMap\" class=\"mini-map\"></div>
        </div>
        {% endif %}

        <div class=\"section-card\">
            <h2 class=\"section-title\">📝 Description</h2>
            <p style=\"color: rgba(255,255,255,0.75); line-height: 1.8; margin: 0; font-size: 15px;\">
                {{ hebergement.description }}
            </p>
        </div>

        <div class=\"section-card\">
            <h2 class=\"section-title\">💱 Convertisseur de devises</h2>
            <div class=\"converter-row\">
                <input type=\"number\" id=\"convertAmount\" value=\"{{ hebergement.prixParNuit }}\" class=\"converter-input\" style=\"width:140px;\">
                <select id=\"fromCurrency\" class=\"converter-select\">
                    <option value=\"EUR\">EUR €</option>
                    <option value=\"USD\">USD \$</option>
                    <option value=\"TND\">TND</option>
                </select>
                <span style=\"color:rgba(255,255,255,0.5);\">→</span>
                <select id=\"toCurrency\" class=\"converter-select\">
                    <option value=\"USD\">USD \$</option>
                    <option value=\"EUR\">EUR €</option>
                    <option value=\"TND\">TND</option>
                </select>
                <button onclick=\"convertCurrency()\" style=\"padding:12px 20px; background: linear-gradient(135deg,#FFC107,#FF9800); color:#0B2D4A; border:none; border-radius:10px; font-weight:700; cursor:pointer;\">
                    Convertir
                </button>
            </div>
            <div id=\"convertResult\" class=\"converter-result\">
                <span id=\"resultText\"></span>
                <span id=\"resultAmount\" style=\"font-size:26px; font-weight:800; color:#34D399; display:block;\"></span>
            </div>
        </div>

        <div class=\"section-card\">
            <h2 class=\"section-title\">⭐ Évaluer cet hébergement</h2>

            <div id=\"currentRating\" style=\"margin-bottom:20px; padding:14px; background:rgba(52,211,153,0.1); border-radius:10px; border-left:4px solid #34D399; {% if not hebergement.noteMoyenne %}display:none;{% endif %}\">
                {{ component('StarRating', { rating: hebergement.noteMoyenne|default(0), nbNotes: hebergement.nbNotes|default(0), size: 28, interactive: false }) }}
            </div>

            <div style=\"display:flex; gap:8px; font-size:42px;\" id=\"starRating\">
                {% for i in 1..5 %}
                    <span class=\"star star-interactive\" data-value=\"{{ i }}\" style=\"opacity:0.3; color:#FFC107;\">★</span>
                {% endfor %}
            </div>
            <input type=\"hidden\" id=\"ratingValue\" value=\"0\">

            <button onclick=\"submitRating({{ hebergement.idHebergement }})\"
                    style=\"width:100%; margin-top:16px; padding:14px; background:linear-gradient(135deg,#FFC107,#FF9800); border:none; border-radius:10px; color:#0B2D4A; font-weight:700; cursor:pointer; font-size:16px;\">
                ⭐ Envoyer la note
            </button>
            <div id=\"ratingMessage\" style=\"display:none; margin-top:12px; padding:12px; border-radius:8px; text-align:center; font-size:14px;\"></div>
        </div>

    </div>
</div>

<script>
// Stars
document.querySelectorAll('.star').forEach(star => {
    star.addEventListener('mouseover', function() {
        const v = this.dataset.value;
        document.querySelectorAll('.star').forEach(s => {
            s.style.opacity = s.dataset.value <= v ? '1' : '0.3';
            s.style.transform = s.dataset.value <= v ? 'scale(1.2)' : 'scale(1)';
        });
    });
    star.addEventListener('mouseout', function() {
        const val = document.getElementById('ratingValue').value;
        document.querySelectorAll('.star').forEach(s => {
            s.style.opacity = s.dataset.value <= val ? '1' : '0.3';
            s.style.transform = 'scale(1)';
        });
    });
    star.addEventListener('click', function() {
        document.getElementById('ratingValue').value = this.dataset.value;
        document.querySelectorAll('.star').forEach(s => {
            s.style.opacity = s.dataset.value <= this.dataset.value ? '1' : '0.3';
        });
    });
});

function submitRating(hebergementId) {
    const rating = document.getElementById('ratingValue').value;
    const msgDiv = document.getElementById('ratingMessage');
    if (rating == 0) {
        msgDiv.style.display = 'block';
        msgDiv.style.background = 'rgba(239,68,68,0.15)';
        msgDiv.style.color = '#EF4444';
        msgDiv.textContent = '❌ Sélectionnez une note.';
        return;
    }
    msgDiv.style.display = 'block';
    msgDiv.style.background = 'rgba(255,193,7,0.1)';
    msgDiv.style.color = '#FFC107';
    msgDiv.textContent = '⏳ Envoi...';

    fetch('/hebergement/' + hebergementId + '/rate', {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        body: new URLSearchParams({ rating: rating })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            msgDiv.style.background = 'rgba(52,211,153,0.15)';
            msgDiv.style.color = '#34D399';
            msgDiv.textContent = '✅ ' + data.message;
            document.getElementById('currentRating').style.display = 'block';
            location.reload();
        }
    })
    .catch(() => {
        msgDiv.style.background = 'rgba(239,68,68,0.15)';
        msgDiv.style.color = '#EF4444';
        msgDiv.textContent = '❌ Erreur réseau.';
    });
}

// Map
{% if hebergement.latitude and hebergement.longitude %}
let miniMap = null;
function toggleMap() {
    const mc = document.getElementById('mapContainer');
    if (mc.style.display === 'block') { mc.style.display = 'none'; return; }
    mc.style.display = 'block';
    if (!miniMap) {
        miniMap = L.map('miniMap').setView([{{ hebergement.latitude }}, {{ hebergement.longitude }}], 15);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19 }).addTo(miniMap);
        L.marker([{{ hebergement.latitude }}, {{ hebergement.longitude }}]).addTo(miniMap);
    }
    setTimeout(() => miniMap.invalidateSize(), 200);
}
{% endif %}

// Converter
function convertCurrency() {
    const amount = document.getElementById('convertAmount').value;
    const from = document.getElementById('fromCurrency').value;
    const to = document.getElementById('toCurrency').value;
    
    fetch('{{ path(\"api_convert_currency\") }}', {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        body: new URLSearchParams({ amount: amount, from: from, to: to })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            document.getElementById('convertResult').style.display = 'block';
            document.getElementById('resultText').textContent = data.amount + ' ' + data.from + ' = ';
            document.getElementById('resultAmount').textContent = data.converted + ' ' + data.to;
        }
    });
}
</script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
{% endblock %}", "hebergements/detail.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\hebergements\\detail.html.twig");
    }
}
