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

/* loisirs/categorie.html.twig */
class __TwigTemplate_9f7f6b7ff66715e960a6c37e8a7d2f61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loisirs/categorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loisirs/categorie.html.twig"));

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
        yield "
<div class=\"particles\">
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
</div>

<!-- barriere -->
<section class=\"categorie-banner\">
    <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/loisirs/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "\">
    <div class=\"overlay\">
        <h1>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        yield "</h1>
        <div class=\"decorative-line\"></div>
        <p>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
    </div>
    <div class=\"scroll-indicator\">
        <span></span>
    </div>
</section>

<!-- excursions -->
<section class=\"main-section\">
    <div class=\"section-title-wrapper\" id=\"sectionTitle\">
        <h2 class=\"section-title\">Nos excursions ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), "html", null, true);
        yield "</h2>
        <div class=\"title-underline\"></div>
    </div>

    ";
        // line 38
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 38, $this->source); })()))) {
            // line 39
            yield "        <div class=\"empty-state\">
            <div class=\"empty-icon\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z\"/></svg>
            </div>
            <h3>Aucune excursion disponible</h3>
            <p>Revenez bientôt, de nouvelles excursions seront ajoutées.</p>
        </div>
    ";
        } else {
            // line 47
            yield "        <div class=\"grid\">
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["excursion"]) {
                // line 49
                yield "                <article class=\"card\">

                    <!-- Image -->
                    <div class=\"card-img-container\">
    ";
                // line 53
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "imageUrl", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 54
                    yield "        ";
                    if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "imageUrl", [], "any", false, false, false, 54)) && is_string($_v1 = "images/") && str_starts_with($_v0, $_v1))) {
                        // line 55
                        yield "            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "imageUrl", [], "any", false, false, false, 55)), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 55), "html", null, true);
                        yield "\">
        ";
                    } else {
                        // line 57
                        yield "            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "imageUrl", [], "any", false, false, false, 57))), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 57), "html", null, true);
                        yield "\">
        ";
                    }
                    // line 59
                    yield "    ";
                } else {
                    // line 60
                    yield "        <div class=\"card-img-placeholder\">
            <svg viewBox=\"0 0 24 24\"><path d=\"M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z\"/></svg>
        </div>
    ";
                }
                // line 64
                yield "                        

                        <!-- Badge type -->
                        <span class=\"card-badge card-badge--";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", false, false, false, 67)), "html", null, true);
                yield "\">
                            ";
                // line 68
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", true, true, false, 68) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", false, false, false, 68)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", false, false, false, 68), "html", null, true)) : ("Outdoor"));
                yield "
                        </span>

                        <!-- Places disponibles -->
                        <span class=\"card-places\">
                            <svg viewBox=\"0 0 24 24\"><path d=\"M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z\"/></svg>
                            ";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "nombrePlacesDisponibles", [], "any", false, false, false, 74), "html", null, true);
                yield " places
                        </span>
                    </div>

                    <!--corps-->
                    <div class=\"card-body\">
                        <h3>";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 80), "html", null, true);
                yield "</h3>

                        <div class=\"card-meta\">
                            <span class=\"meta-item\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/></svg>
                                ";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "lieu", [], "any", false, false, false, 85), "html", null, true);
                yield "
                            </span>
                            <span class=\"meta-item\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm4.24 16L12 15.45 7.77 18l1.12-4.81-3.73-3.23 4.92-.42L12 5l1.92 4.53 4.92.42-3.73 3.23L16.23 18z\"/></svg>
                                ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "duree", [], "any", false, false, false, 89), "html", null, true);
                yield "h
                            </span>
                            <span class=\"meta-item\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z\"/></svg>
                                ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "date", [], "any", false, false, false, 93), "d/m/Y"), "html", null, true);
                yield "
                            </span>
                        </div>

                        <p class=\"card-description\">
                            ";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "description", [], "any", false, false, false, 98), 0, 100), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "description", [], "any", false, false, false, 98)) > 100)) {
                    yield "...";
                }
                // line 99
                yield "                        </p>

                        <!--prix -->
                        <div class=\"card-prix\">
                            <div class=\"prix-group\">
                                <span class=\"prix-label\">Adulte</span>
                                <span class=\"prix-value\">";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixAdulte", [], "any", false, false, false, 105), "html", null, true);
                yield " TND</span>
                            </div>
                            <div class=\"prix-group\">
                                <span class=\"prix-label\">Enfant</span>
                                <span class=\"prix-value prix-value--enfant\">";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixEnfant", [], "any", false, false, false, 109), "html", null, true);
                yield " TND</span>
                            </div>
                            <div class=\"prix-group\">
                                <span class=\"prix-label\">Bébé</span>
                                <span class=\"prix-value prix-value--bebe\">";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixBebe", [], "any", false, false, false, 113), "html", null, true);
                yield " TND</span>
                            </div>
                        </div>
";
                // line 116
                $context["avg"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["averages"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "idExcursion", [], "any", false, false, false, 116), [], "array", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["averages"]) || array_key_exists("averages", $context) ? $context["averages"] : (function () { throw new RuntimeError('Variable "averages" does not exist.', 116, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "idExcursion", [], "any", false, false, false, 116), [], "array", false, false, false, 116), 0)) : (0));
                // line 117
                yield "
<div class=\"rating-box\">
    <div class=\"stars\">
        ";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 121
                    yield "            ";
                    if (($context["i"] <= (isset($context["avg"]) || array_key_exists("avg", $context) ? $context["avg"] : (function () { throw new RuntimeError('Variable "avg" does not exist.', 121, $this->source); })()))) {
                        // line 122
                        yield "                <span class=\"star filled\">★</span>
            ";
                    } else {
                        // line 124
                        yield "                <span class=\"star\">★</span>
            ";
                    }
                    // line 126
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                yield "    </div>

    <span class=\"rating-value\">
        ";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["avg"]) || array_key_exists("avg", $context) ? $context["avg"] : (function () { throw new RuntimeError('Variable "avg" does not exist.', 130, $this->source); })()), 1), "html", null, true);
                yield "/5
    </span>
</div>
<style>
.rating-box {
    display: flex;
    align-items: center;
    gap: 8px;
}

.stars {
    display: flex;
}

.star {
    font-size: 18px;
    color: #ccc;
    transition: 0.2s;
}

.star.filled {
    color: #FFD700; /* jaune or */
}

.rating-value {
    font-size: 14px;
    color: #0c2a45;
}
</style>
                        <div class=\"card-footer\">
                            <a href=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "idExcursion", [], "any", false, false, false, 160)]), "html", null, true);
                yield "\" class=\"btn-card btn-detail\">
                                <span>Voir détails</span>
                                <svg viewBox=\"0 0 24 24\"><path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"/></svg>
                            </a>
                            <a href=\"";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_reserver", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "idExcursion", [], "any", false, false, false, 164)]), "html", null, true);
                yield "\" class=\"btn-card btn-reserver\">
                                <span>Réserver</span>
                                <svg viewBox=\"0 0 24 24\"><path d=\"M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11zm-7-7h-2v2h2v-2zm4 0h-2v2h2v-2zm-8 0H6v2h2v-2z\"/></svg>
                            </a>
                        </div>
                    </div>

                </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['excursion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            yield "        </div>
    ";
        }
        // line 175
        yield "</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 179
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

        // line 180
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap');

    * { margin: 0; padding: 0; box-sizing: border-box; }

    html, body {
        width: 100%;
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
        background: #0c2a45;
        min-height: 100vh;
    }

    .particles {
        position: fixed;
        inset: 0;
        pointer-events: none;
        overflow: hidden;
        z-index: 0;
    }

    .particle {
        position: absolute;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        border-radius: 50%;
        opacity: 0.18;
        animation: floatUp 18s infinite ease-in-out;
    }

    .particle:nth-child(1)  { left:  5%; width:  6px; height:  6px; animation-delay: 0s;   }
    .particle:nth-child(2)  { left: 15%; width: 10px; height: 10px; animation-delay: 2s;   }
    .particle:nth-child(3)  { left: 25%; width:  7px; height:  7px; animation-delay: 4s;   }
    .particle:nth-child(4)  { left: 35%; width:  9px; height:  9px; animation-delay: 1s;   }
    .particle:nth-child(5)  { left: 45%; width:  5px; height:  5px; animation-delay: 3s;   }
    .particle:nth-child(6)  { left: 55%; width: 11px; height: 11px; animation-delay: 5s;   }
    .particle:nth-child(7)  { left: 65%; width:  8px; height:  8px; animation-delay: 2.5s; }
    .particle:nth-child(8)  { left: 75%; width:  6px; height:  6px; animation-delay: 4.5s; }
    .particle:nth-child(9)  { left: 85%; width:  9px; height:  9px; animation-delay: 1.5s; }
    .particle:nth-child(10) { left: 95%; width:  7px; height:  7px; animation-delay: 3.5s; }

    @keyframes floatUp {
        0%   { transform: translateY(110vh) rotate(0deg);   opacity: 0;   }
        10%  { opacity: 0.22; }
        90%  { opacity: 0.22; }
        100% { transform: translateY(-10vh) rotate(720deg); opacity: 0;   }
    }

    /*barriere */
    .categorie-banner {
        position: relative;
        width: 100%;
        height: 420px;
        overflow: hidden;
        z-index: 1;
    }

    .categorie-banner > img {
        position: absolute;
        inset: 0;
        width: 100%; height: 100%;
        object-fit: cover;
        object-position: center;
        animation: zoomBanner 20s ease-in-out infinite alternate;
    }

    @keyframes zoomBanner {
        0%   { transform: scale(1); }
        100% { transform: scale(1.08); }
    }

    .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg,
            rgba(8,30,55,0.93) 0%,
            rgba(15,60,95,0.80) 50%,
            rgba(8,30,55,0.68) 100%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 40px 60px;
        animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .overlay h1 {
        font-family: 'Playfair Display', serif;
        font-size: 56px;
        font-weight: 700;
        color: #FFC107;
        text-shadow: 2px 4px 14px rgba(0,0,0,0.45);
        animation: slideInLeft 1s ease-out 0.3s both;
    }

    @keyframes slideInLeft {
        from { opacity: 0; transform: translateX(-60px); }
        to   { opacity: 1; transform: translateX(0); }
    }

    .overlay p {
        font-size: 18px;
        color: rgba(255,255,255,0.92);
        max-width: 680px;
        line-height: 1.8;
        animation: slideInRight 1s ease-out 0.5s both;
    }

    @keyframes slideInRight {
        from { opacity: 0; transform: translateX(60px); }
        to   { opacity: 1; transform: translateX(0); }
    }

    .decorative-line {
        width: 110px; height: 4px;
        background: linear-gradient(90deg, #FFC107, #FF9800, #FFC107);
        background-size: 200% 100%;
        margin: 20px 0;
        border-radius: 2px;
        animation: shimmer 2.2s linear infinite;
    }

    @keyframes shimmer {
        0%   { background-position: -200% 0; }
        100% { background-position:  200% 0; }
    }

    .scroll-indicator {
        position: absolute;
        bottom: 24px; left: 50%;
        transform: translateX(-50%);
        animation: bounce 2s infinite;
        z-index: 2;
    }

    .scroll-indicator span {
        display: block;
        width: 28px; height: 46px;
        border: 2px solid rgba(255,193,7,0.75);
        border-radius: 18px;
        position: relative;
    }

    .scroll-indicator span::before {
        content: '';
        position: absolute;
        top: 8px; left: 50%;
        transform: translateX(-50%);
        width: 5px; height: 5px;
        background: #FFC107;
        border-radius: 50%;
        animation: scrollDown 2s infinite;
    }

    @keyframes bounce {
        0%,20%,50%,80%,100% { transform: translateX(-50%) translateY(0); }
        40% { transform: translateX(-50%) translateY(-12px); }
        60% { transform: translateX(-50%) translateY(-6px); }
    }

    @keyframes scrollDown {
        0%   { top: 8px;  opacity: 1; }
        100% { top: 26px; opacity: 0; }
    }

    /* ──sect princ */
    .main-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        background: #0c2a45;
        padding: 70px 60px 90px;
        position: relative;
        z-index: 1;
    }

    /*titre*/
.section-title-wrapper {
    width: 100%;
    text-align: center;
    margin-bottom: 55px;
    opacity: 1;              
    transform: translateY(0); 
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

/*carte */
.card {
    background: #ffffff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.35);
    transition: transform 0.4s cubic-bezier(0.4,0,0.2,1), box-shadow 0.4s ease;
    opacity: 1;              /* ✅ visible par défaut */
    transform: translateY(0); /* ✅ position normale par défaut */
    display: flex;
    flex-direction: column;
}

    .section-title-wrapper.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 44px;
        font-weight: 700;
        color: #FFC107;
        letter-spacing: 0.3px;
    }

    .title-underline {
        width: 120px; height: 3px;
        background: #FFC107;
        margin: 16px auto 0;
        border-radius: 2px;
    }

    .empty-state {
        text-align: center;
        padding: 80px 20px;
    }

    .empty-icon svg {
        width: 70px; height: 70px;
        fill: rgba(255,193,7,0.35);
        margin-bottom: 24px;
    }

    .empty-state h3 {
        font-size: 22px;
        font-weight: 700;
        color: #FFC107;
        margin-bottom: 10px;
    }

    .empty-state p {
        font-size: 15px;
        color: rgba(255,255,255,0.55);
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
        width: 100%;
    }

    /*carte */
    

    .card.visible           { opacity: 1; transform: translateY(0); }
    .card:nth-child(1)      { transition-delay: 0.10s; }
    .card:nth-child(2)      { transition-delay: 0.20s; }
    .card:nth-child(3)      { transition-delay: 0.30s; }
    .card:nth-child(4)      { transition-delay: 0.40s; }
    .card:nth-child(5)      { transition-delay: 0.50s; }
    .card:nth-child(6)      { transition-delay: 0.60s; }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 22px 60px rgba(0,0,0,0.50);
    }

    /*image */
    .card-img-container {
        width: 100%;
        height: 210px;
        overflow: hidden;
        flex-shrink: 0;
        background: #1a3a56;
        position: relative;
    }

    .card-img-container img {
        width: 100%; height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s cubic-bezier(0.4,0,0.2,1);
    }

    .card:hover .card-img-container img { transform: scale(1.08); }

    .card-img-placeholder {
        width: 100%; height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #1a3a56, #0c2a45);
    }

    .card-img-placeholder svg {
        width: 52px; height: 52px;
        fill: rgba(255,193,7,0.25);
    }

    /* badge type */
    .card-badge {
        position: absolute;
        top: 14px; left: 14px;
        padding: 5px 13px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        background: rgba(255,193,7,0.92);
        color: #0c2a45;
    }

    .card-badge--indoor   { background: rgba(30,120,200,0.88);  color: #fff; }
    .card-badge--cultural { background: rgba(140,50,200,0.88);  color: #fff; }
    .card-badge--outdoor  { background: rgba(255,193,7,0.92);   color: #0c2a45; }

    /* places */
    .card-places {
        position: absolute;
        top: 14px; right: 14px;
        display: flex;
        align-items: center;
        gap: 5px;
        background: rgba(12,42,69,0.85);
        color: #fff;
        font-size: 11px;
        font-weight: 600;
        padding: 5px 12px;
        border-radius: 20px;
    }

    .card-places svg {
        width: 13px; height: 13px;
        fill: #FFC107;
    }

    /*corps */
    .card-body {
        padding: 20px 22px 18px;
        background: #ffffff;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .card-body h3 {
        font-size: 18px;
        font-weight: 700;
        color: #0c2a45;
        line-height: 1.3;
        transition: color 0.3s ease;
    }

    .card:hover .card-body h3 { color: #FF9800; }

    /* meta */
    .card-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 12px;
        color: #6b7a8a;
        font-weight: 500;
    }

    .meta-item svg {
        width: 13px; height: 13px;
        fill: #FFC107;
        flex-shrink: 0;
    }

    /* descrip*/
    .card-description {
        color: #5a6a78;
        font-size: 13px;
        line-height: 1.6;
        flex: 1;
    }

    /*prix */
    .card-prix {
        display: flex;
        gap: 0;
        border-top: 1px solid #f0f0f0;
        border-bottom: 1px solid #f0f0f0;
        padding: 12px 0;
    }

    .prix-group {
        flex: 1;
        text-align: center;
        border-right: 1px solid #f0f0f0;
    }

    .prix-group:last-child { border-right: none; }

    .prix-label {
        display: block;
        font-size: 10px;
        font-weight: 700;
        color: #9aa5b0;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        margin-bottom: 4px;
    }

    .prix-value {
        display: block;
        font-size: 15px;
        font-weight: 700;
        color: #0c2a45;
    }

    .prix-value--enfant { color: #FF9800; }
    .prix-value--bebe   { color: #26a65b; }

    /* footer */
    .card-footer {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    /*btn*/
    .btn-card {
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

    .btn-card::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.28), transparent);
        transition: left 0.4s ease;
    }

    .btn-card:hover::before { left: 100%; }

    .btn-detail {
        background: #eef2f7;
        color: #0c2a45;
        border: 1.5px solid #d0dce8;
    }

    .btn-detail:hover {
        transform: scale(1.04);
        box-shadow: 0 4px 14px rgba(12,42,69,0.12);
    }

    .btn-reserver {
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0c2a45;
    }

    .btn-reserver:hover {
        transform: scale(1.04);
        box-shadow: 0 6px 20px rgba(255,193,7,0.45);
    }

    .btn-card svg {
        width: 14px; height: 14px;
        fill: currentColor;
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }

    .btn-card:hover svg { transform: translateX(2px); }

    @media (max-width: 1100px) {
        .grid { grid-template-columns: repeat(2, 1fr); }
        .main-section { padding: 60px 35px 80px; }
    }

    @media (max-width: 650px) {
        .grid { grid-template-columns: 1fr; gap: 22px; }
        .categorie-banner { height: 300px; }
        .overlay h1 { font-size: 32px; }
        .overlay p  { font-size: 15px; }
        .section-title { font-size: 26px; }
        .main-section { padding: 40px 16px 60px; }
        .card-img-container { height: 180px; }
        .card-footer { flex-direction: column; }
        .btn-card { width: 100%; }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 694
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

        // line 695
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.08, rootMargin: '0px 0px -10px 0px' });

        const titleEl = document.getElementById('sectionTitle');
        if (titleEl) observer.observe(titleEl);
        document.querySelectorAll('.card').forEach(c => observer.observe(c));

        setTimeout(() => {
            const titleEl = document.getElementById('sectionTitle');
            if (titleEl) {
                const rect = titleEl.getBoundingClientRect();
                if (rect.top < window.innerHeight) titleEl.classList.add('visible');
            }
            document.querySelectorAll('.card').forEach(c => {
                const rect = c.getBoundingClientRect();
                if (rect.top < window.innerHeight) c.classList.add('visible');
            });
        }, 100);

        window.addEventListener('scroll', function () {
            const img = document.querySelector('.categorie-banner > img');
            const s = window.pageYOffset;
            if (img && s < 500) {
                img.style.transform = `scale(\${1 + s * 0.00008}) translateY(\${s * 0.22}px)`;
            }
        });

        document.querySelectorAll('.btn-card').forEach(btn => {
            btn.addEventListener('click', function (e) {
                const r = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                Object.assign(r.style, {
                    position: 'absolute',
                    width: size + 'px', height: size + 'px',
                    background: 'rgba(255,255,255,0.35)',
                    borderRadius: '50%',
                    transform: 'scale(0)',
                    animation: 'ripple 0.6s linear',
                    pointerEvents: 'none',
                    left: (e.clientX - rect.left - size / 2) + 'px',
                    top:  (e.clientY - rect.top  - size / 2) + 'px',
                });
                this.appendChild(r);
                setTimeout(() => r.remove(), 620);
            });
        });
    });
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.amaz-exc-card');

    cards.forEach((card) => {
        card.classList.add('amaz-animated');
    });
});
</script>
<style>
    @keyframes ripple { to { transform: scale(4); opacity: 0; } }
</style>
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
        return "loisirs/categorie.html.twig";
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
        return array (  928 => 695,  915 => 694,  391 => 180,  378 => 179,  365 => 175,  361 => 173,  346 => 164,  339 => 160,  306 => 130,  301 => 127,  295 => 126,  291 => 124,  287 => 122,  284 => 121,  280 => 120,  275 => 117,  273 => 116,  267 => 113,  260 => 109,  253 => 105,  245 => 99,  240 => 98,  232 => 93,  225 => 89,  218 => 85,  210 => 80,  201 => 74,  192 => 68,  188 => 67,  183 => 64,  177 => 60,  174 => 59,  166 => 57,  158 => 55,  155 => 54,  153 => 53,  147 => 49,  143 => 48,  140 => 47,  130 => 39,  128 => 38,  121 => 34,  108 => 24,  103 => 22,  96 => 20,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"particles\">
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
    <div class=\"particle\"></div>
</div>

<!-- barriere -->
<section class=\"categorie-banner\">
    <img src=\"{{ asset('images/loisirs/' ~ categorie.image) }}\" alt=\"{{ categorie.nom }}\">
    <div class=\"overlay\">
        <h1>{{ categorie.nom }}</h1>
        <div class=\"decorative-line\"></div>
        <p>{{ categorie.description }}</p>
    </div>
    <div class=\"scroll-indicator\">
        <span></span>
    </div>
</section>

<!-- excursions -->
<section class=\"main-section\">
    <div class=\"section-title-wrapper\" id=\"sectionTitle\">
        <h2 class=\"section-title\">Nos excursions {{ categorie.nom }}</h2>
        <div class=\"title-underline\"></div>
    </div>

    {% if excursions is empty %}
        <div class=\"empty-state\">
            <div class=\"empty-icon\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z\"/></svg>
            </div>
            <h3>Aucune excursion disponible</h3>
            <p>Revenez bientôt, de nouvelles excursions seront ajoutées.</p>
        </div>
    {% else %}
        <div class=\"grid\">
            {% for excursion in excursions %}
                <article class=\"card\">

                    <!-- Image -->
                    <div class=\"card-img-container\">
    {% if excursion.imageUrl %}
        {% if excursion.imageUrl starts with 'images/' %}
            <img src=\"{{ asset(excursion.imageUrl) }}\" alt=\"{{ excursion.titre }}\">
        {% else %}
            <img src=\"{{ asset('uploads/' ~ excursion.imageUrl) }}\" alt=\"{{ excursion.titre }}\">
        {% endif %}
    {% else %}
        <div class=\"card-img-placeholder\">
            <svg viewBox=\"0 0 24 24\"><path d=\"M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z\"/></svg>
        </div>
    {% endif %}
                        

                        <!-- Badge type -->
                        <span class=\"card-badge card-badge--{{ excursion.type|lower }}\">
                            {{ excursion.type ?? 'Outdoor' }}
                        </span>

                        <!-- Places disponibles -->
                        <span class=\"card-places\">
                            <svg viewBox=\"0 0 24 24\"><path d=\"M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z\"/></svg>
                            {{ excursion.nombrePlacesDisponibles }} places
                        </span>
                    </div>

                    <!--corps-->
                    <div class=\"card-body\">
                        <h3>{{ excursion.titre }}</h3>

                        <div class=\"card-meta\">
                            <span class=\"meta-item\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/></svg>
                                {{ excursion.lieu }}
                            </span>
                            <span class=\"meta-item\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm4.24 16L12 15.45 7.77 18l1.12-4.81-3.73-3.23 4.92-.42L12 5l1.92 4.53 4.92.42-3.73 3.23L16.23 18z\"/></svg>
                                {{ excursion.duree }}h
                            </span>
                            <span class=\"meta-item\">
                                <svg viewBox=\"0 0 24 24\"><path d=\"M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z\"/></svg>
                                {{ excursion.date|date('d/m/Y') }}
                            </span>
                        </div>

                        <p class=\"card-description\">
                            {{ excursion.description|slice(0, 100) }}{% if excursion.description|length > 100 %}...{% endif %}
                        </p>

                        <!--prix -->
                        <div class=\"card-prix\">
                            <div class=\"prix-group\">
                                <span class=\"prix-label\">Adulte</span>
                                <span class=\"prix-value\">{{ excursion.prixAdulte }} TND</span>
                            </div>
                            <div class=\"prix-group\">
                                <span class=\"prix-label\">Enfant</span>
                                <span class=\"prix-value prix-value--enfant\">{{ excursion.prixEnfant }} TND</span>
                            </div>
                            <div class=\"prix-group\">
                                <span class=\"prix-label\">Bébé</span>
                                <span class=\"prix-value prix-value--bebe\">{{ excursion.prixBebe }} TND</span>
                            </div>
                        </div>
{% set avg = averages[excursion.idExcursion]|default(0) %}

<div class=\"rating-box\">
    <div class=\"stars\">
        {% for i in 1..5 %}
            {% if i <= avg %}
                <span class=\"star filled\">★</span>
            {% else %}
                <span class=\"star\">★</span>
            {% endif %}
        {% endfor %}
    </div>

    <span class=\"rating-value\">
        {{ avg|number_format(1) }}/5
    </span>
</div>
<style>
.rating-box {
    display: flex;
    align-items: center;
    gap: 8px;
}

.stars {
    display: flex;
}

.star {
    font-size: 18px;
    color: #ccc;
    transition: 0.2s;
}

.star.filled {
    color: #FFD700; /* jaune or */
}

.rating-value {
    font-size: 14px;
    color: #0c2a45;
}
</style>
                        <div class=\"card-footer\">
                            <a href=\"{{ path('excursion_detail', {'id': excursion.idExcursion}) }}\" class=\"btn-card btn-detail\">
                                <span>Voir détails</span>
                                <svg viewBox=\"0 0 24 24\"><path d=\"M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z\"/></svg>
                            </a>
                            <a href=\"{{ path('excursion_reserver', {'id': excursion.idExcursion}) }}\" class=\"btn-card btn-reserver\">
                                <span>Réserver</span>
                                <svg viewBox=\"0 0 24 24\"><path d=\"M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11zm-7-7h-2v2h2v-2zm4 0h-2v2h2v-2zm-8 0H6v2h2v-2z\"/></svg>
                            </a>
                        </div>
                    </div>

                </article>
            {% endfor %}
        </div>
    {% endif %}
</section>

{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap');

    * { margin: 0; padding: 0; box-sizing: border-box; }

    html, body {
        width: 100%;
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
        background: #0c2a45;
        min-height: 100vh;
    }

    .particles {
        position: fixed;
        inset: 0;
        pointer-events: none;
        overflow: hidden;
        z-index: 0;
    }

    .particle {
        position: absolute;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        border-radius: 50%;
        opacity: 0.18;
        animation: floatUp 18s infinite ease-in-out;
    }

    .particle:nth-child(1)  { left:  5%; width:  6px; height:  6px; animation-delay: 0s;   }
    .particle:nth-child(2)  { left: 15%; width: 10px; height: 10px; animation-delay: 2s;   }
    .particle:nth-child(3)  { left: 25%; width:  7px; height:  7px; animation-delay: 4s;   }
    .particle:nth-child(4)  { left: 35%; width:  9px; height:  9px; animation-delay: 1s;   }
    .particle:nth-child(5)  { left: 45%; width:  5px; height:  5px; animation-delay: 3s;   }
    .particle:nth-child(6)  { left: 55%; width: 11px; height: 11px; animation-delay: 5s;   }
    .particle:nth-child(7)  { left: 65%; width:  8px; height:  8px; animation-delay: 2.5s; }
    .particle:nth-child(8)  { left: 75%; width:  6px; height:  6px; animation-delay: 4.5s; }
    .particle:nth-child(9)  { left: 85%; width:  9px; height:  9px; animation-delay: 1.5s; }
    .particle:nth-child(10) { left: 95%; width:  7px; height:  7px; animation-delay: 3.5s; }

    @keyframes floatUp {
        0%   { transform: translateY(110vh) rotate(0deg);   opacity: 0;   }
        10%  { opacity: 0.22; }
        90%  { opacity: 0.22; }
        100% { transform: translateY(-10vh) rotate(720deg); opacity: 0;   }
    }

    /*barriere */
    .categorie-banner {
        position: relative;
        width: 100%;
        height: 420px;
        overflow: hidden;
        z-index: 1;
    }

    .categorie-banner > img {
        position: absolute;
        inset: 0;
        width: 100%; height: 100%;
        object-fit: cover;
        object-position: center;
        animation: zoomBanner 20s ease-in-out infinite alternate;
    }

    @keyframes zoomBanner {
        0%   { transform: scale(1); }
        100% { transform: scale(1.08); }
    }

    .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg,
            rgba(8,30,55,0.93) 0%,
            rgba(15,60,95,0.80) 50%,
            rgba(8,30,55,0.68) 100%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 40px 60px;
        animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .overlay h1 {
        font-family: 'Playfair Display', serif;
        font-size: 56px;
        font-weight: 700;
        color: #FFC107;
        text-shadow: 2px 4px 14px rgba(0,0,0,0.45);
        animation: slideInLeft 1s ease-out 0.3s both;
    }

    @keyframes slideInLeft {
        from { opacity: 0; transform: translateX(-60px); }
        to   { opacity: 1; transform: translateX(0); }
    }

    .overlay p {
        font-size: 18px;
        color: rgba(255,255,255,0.92);
        max-width: 680px;
        line-height: 1.8;
        animation: slideInRight 1s ease-out 0.5s both;
    }

    @keyframes slideInRight {
        from { opacity: 0; transform: translateX(60px); }
        to   { opacity: 1; transform: translateX(0); }
    }

    .decorative-line {
        width: 110px; height: 4px;
        background: linear-gradient(90deg, #FFC107, #FF9800, #FFC107);
        background-size: 200% 100%;
        margin: 20px 0;
        border-radius: 2px;
        animation: shimmer 2.2s linear infinite;
    }

    @keyframes shimmer {
        0%   { background-position: -200% 0; }
        100% { background-position:  200% 0; }
    }

    .scroll-indicator {
        position: absolute;
        bottom: 24px; left: 50%;
        transform: translateX(-50%);
        animation: bounce 2s infinite;
        z-index: 2;
    }

    .scroll-indicator span {
        display: block;
        width: 28px; height: 46px;
        border: 2px solid rgba(255,193,7,0.75);
        border-radius: 18px;
        position: relative;
    }

    .scroll-indicator span::before {
        content: '';
        position: absolute;
        top: 8px; left: 50%;
        transform: translateX(-50%);
        width: 5px; height: 5px;
        background: #FFC107;
        border-radius: 50%;
        animation: scrollDown 2s infinite;
    }

    @keyframes bounce {
        0%,20%,50%,80%,100% { transform: translateX(-50%) translateY(0); }
        40% { transform: translateX(-50%) translateY(-12px); }
        60% { transform: translateX(-50%) translateY(-6px); }
    }

    @keyframes scrollDown {
        0%   { top: 8px;  opacity: 1; }
        100% { top: 26px; opacity: 0; }
    }

    /* ──sect princ */
    .main-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        background: #0c2a45;
        padding: 70px 60px 90px;
        position: relative;
        z-index: 1;
    }

    /*titre*/
.section-title-wrapper {
    width: 100%;
    text-align: center;
    margin-bottom: 55px;
    opacity: 1;              
    transform: translateY(0); 
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

/*carte */
.card {
    background: #ffffff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.35);
    transition: transform 0.4s cubic-bezier(0.4,0,0.2,1), box-shadow 0.4s ease;
    opacity: 1;              /* ✅ visible par défaut */
    transform: translateY(0); /* ✅ position normale par défaut */
    display: flex;
    flex-direction: column;
}

    .section-title-wrapper.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 44px;
        font-weight: 700;
        color: #FFC107;
        letter-spacing: 0.3px;
    }

    .title-underline {
        width: 120px; height: 3px;
        background: #FFC107;
        margin: 16px auto 0;
        border-radius: 2px;
    }

    .empty-state {
        text-align: center;
        padding: 80px 20px;
    }

    .empty-icon svg {
        width: 70px; height: 70px;
        fill: rgba(255,193,7,0.35);
        margin-bottom: 24px;
    }

    .empty-state h3 {
        font-size: 22px;
        font-weight: 700;
        color: #FFC107;
        margin-bottom: 10px;
    }

    .empty-state p {
        font-size: 15px;
        color: rgba(255,255,255,0.55);
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
        width: 100%;
    }

    /*carte */
    

    .card.visible           { opacity: 1; transform: translateY(0); }
    .card:nth-child(1)      { transition-delay: 0.10s; }
    .card:nth-child(2)      { transition-delay: 0.20s; }
    .card:nth-child(3)      { transition-delay: 0.30s; }
    .card:nth-child(4)      { transition-delay: 0.40s; }
    .card:nth-child(5)      { transition-delay: 0.50s; }
    .card:nth-child(6)      { transition-delay: 0.60s; }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 22px 60px rgba(0,0,0,0.50);
    }

    /*image */
    .card-img-container {
        width: 100%;
        height: 210px;
        overflow: hidden;
        flex-shrink: 0;
        background: #1a3a56;
        position: relative;
    }

    .card-img-container img {
        width: 100%; height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s cubic-bezier(0.4,0,0.2,1);
    }

    .card:hover .card-img-container img { transform: scale(1.08); }

    .card-img-placeholder {
        width: 100%; height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #1a3a56, #0c2a45);
    }

    .card-img-placeholder svg {
        width: 52px; height: 52px;
        fill: rgba(255,193,7,0.25);
    }

    /* badge type */
    .card-badge {
        position: absolute;
        top: 14px; left: 14px;
        padding: 5px 13px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        background: rgba(255,193,7,0.92);
        color: #0c2a45;
    }

    .card-badge--indoor   { background: rgba(30,120,200,0.88);  color: #fff; }
    .card-badge--cultural { background: rgba(140,50,200,0.88);  color: #fff; }
    .card-badge--outdoor  { background: rgba(255,193,7,0.92);   color: #0c2a45; }

    /* places */
    .card-places {
        position: absolute;
        top: 14px; right: 14px;
        display: flex;
        align-items: center;
        gap: 5px;
        background: rgba(12,42,69,0.85);
        color: #fff;
        font-size: 11px;
        font-weight: 600;
        padding: 5px 12px;
        border-radius: 20px;
    }

    .card-places svg {
        width: 13px; height: 13px;
        fill: #FFC107;
    }

    /*corps */
    .card-body {
        padding: 20px 22px 18px;
        background: #ffffff;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .card-body h3 {
        font-size: 18px;
        font-weight: 700;
        color: #0c2a45;
        line-height: 1.3;
        transition: color 0.3s ease;
    }

    .card:hover .card-body h3 { color: #FF9800; }

    /* meta */
    .card-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 12px;
        color: #6b7a8a;
        font-weight: 500;
    }

    .meta-item svg {
        width: 13px; height: 13px;
        fill: #FFC107;
        flex-shrink: 0;
    }

    /* descrip*/
    .card-description {
        color: #5a6a78;
        font-size: 13px;
        line-height: 1.6;
        flex: 1;
    }

    /*prix */
    .card-prix {
        display: flex;
        gap: 0;
        border-top: 1px solid #f0f0f0;
        border-bottom: 1px solid #f0f0f0;
        padding: 12px 0;
    }

    .prix-group {
        flex: 1;
        text-align: center;
        border-right: 1px solid #f0f0f0;
    }

    .prix-group:last-child { border-right: none; }

    .prix-label {
        display: block;
        font-size: 10px;
        font-weight: 700;
        color: #9aa5b0;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        margin-bottom: 4px;
    }

    .prix-value {
        display: block;
        font-size: 15px;
        font-weight: 700;
        color: #0c2a45;
    }

    .prix-value--enfant { color: #FF9800; }
    .prix-value--bebe   { color: #26a65b; }

    /* footer */
    .card-footer {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    /*btn*/
    .btn-card {
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

    .btn-card::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.28), transparent);
        transition: left 0.4s ease;
    }

    .btn-card:hover::before { left: 100%; }

    .btn-detail {
        background: #eef2f7;
        color: #0c2a45;
        border: 1.5px solid #d0dce8;
    }

    .btn-detail:hover {
        transform: scale(1.04);
        box-shadow: 0 4px 14px rgba(12,42,69,0.12);
    }

    .btn-reserver {
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0c2a45;
    }

    .btn-reserver:hover {
        transform: scale(1.04);
        box-shadow: 0 6px 20px rgba(255,193,7,0.45);
    }

    .btn-card svg {
        width: 14px; height: 14px;
        fill: currentColor;
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }

    .btn-card:hover svg { transform: translateX(2px); }

    @media (max-width: 1100px) {
        .grid { grid-template-columns: repeat(2, 1fr); }
        .main-section { padding: 60px 35px 80px; }
    }

    @media (max-width: 650px) {
        .grid { grid-template-columns: 1fr; gap: 22px; }
        .categorie-banner { height: 300px; }
        .overlay h1 { font-size: 32px; }
        .overlay p  { font-size: 15px; }
        .section-title { font-size: 26px; }
        .main-section { padding: 40px 16px 60px; }
        .card-img-container { height: 180px; }
        .card-footer { flex-direction: column; }
        .btn-card { width: 100%; }
    }
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.08, rootMargin: '0px 0px -10px 0px' });

        const titleEl = document.getElementById('sectionTitle');
        if (titleEl) observer.observe(titleEl);
        document.querySelectorAll('.card').forEach(c => observer.observe(c));

        setTimeout(() => {
            const titleEl = document.getElementById('sectionTitle');
            if (titleEl) {
                const rect = titleEl.getBoundingClientRect();
                if (rect.top < window.innerHeight) titleEl.classList.add('visible');
            }
            document.querySelectorAll('.card').forEach(c => {
                const rect = c.getBoundingClientRect();
                if (rect.top < window.innerHeight) c.classList.add('visible');
            });
        }, 100);

        window.addEventListener('scroll', function () {
            const img = document.querySelector('.categorie-banner > img');
            const s = window.pageYOffset;
            if (img && s < 500) {
                img.style.transform = `scale(\${1 + s * 0.00008}) translateY(\${s * 0.22}px)`;
            }
        });

        document.querySelectorAll('.btn-card').forEach(btn => {
            btn.addEventListener('click', function (e) {
                const r = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                Object.assign(r.style, {
                    position: 'absolute',
                    width: size + 'px', height: size + 'px',
                    background: 'rgba(255,255,255,0.35)',
                    borderRadius: '50%',
                    transform: 'scale(0)',
                    animation: 'ripple 0.6s linear',
                    pointerEvents: 'none',
                    left: (e.clientX - rect.left - size / 2) + 'px',
                    top:  (e.clientY - rect.top  - size / 2) + 'px',
                });
                this.appendChild(r);
                setTimeout(() => r.remove(), 620);
            });
        });
    });
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.amaz-exc-card');

    cards.forEach((card) => {
        card.classList.add('amaz-animated');
    });
});
</script>
<style>
    @keyframes ripple { to { transform: scale(4); opacity: 0; } }
</style>
{% endblock %}", "loisirs/categorie.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\loisirs\\categorie.html.twig");
    }
}
