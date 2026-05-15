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

/* loisirs/detail.html.twig */
class __TwigTemplate_46355fbe4183b1d2758fc908f973bb03 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loisirs/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loisirs/detail.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "
";
        // line 11
        yield "<div class=\"particles-bg\">
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

";
        // line 25
        yield "<section class=\"hero-excursion\">
    <img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 26, $this->source); })()), "imageUrl", [], "any", false, false, false, 26))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), "html", null, true);
        yield "\">
    <div class=\"overlay\"></div>
    <div class=\"hero-content\">
        <span class=\"hero-badge\">
            <i class=\"fas fa-compass\"></i>
            Excursion
        </span>
        <h1>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 33, $this->source); })()), "titre", [], "any", false, false, false, 33), "html", null, true);
        yield "</h1>
        <div class=\"hero-stats\">
            <div class=\"stat-item\">
                <i class=\"fas fa-map-marker-alt\"></i>
                <span>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 37, $this->source); })()), "lieu", [], "any", false, false, false, 37), "html", null, true);
        yield "</span>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-calendar-alt\"></i>
                <span>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 41, $this->source); })()), "date", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true);
        yield "</span>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-clock\"></i>
                <span>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 45, $this->source); })()), "duree", [], "any", false, false, false, 45), "html", null, true);
        yield " heures</span>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-users\"></i>
                <span>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 49, $this->source); })()), "nombrePlacesDisponibles", [], "any", false, false, false, 49), "html", null, true);
        yield " places</span>
            </div>
        </div>

        ";
        // line 54
        yield "        <div class=\"hero-meta\">
            <span class=\"rating-value\">
                ⭐ ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((array_key_exists("userRating", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 56, $this->source); })()), 0)) : (0)), 1), "html", null, true);
        yield "/5
            </span>
            <span id=\"favCount\" class=\"fav-count\">
                ❤️ ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("countFav", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["countFav"]) || array_key_exists("countFav", $context) ? $context["countFav"] : (function () { throw new RuntimeError('Variable "countFav" does not exist.', 59, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "
            </span>
        </div>
    </div>
</section>

";
        // line 66
        yield "<main class=\"main-content\">
    <div class=\"content-grid\">

        ";
        // line 70
        yield "        <div class=\"description-section\">
            <span class=\"section-label\">Description</span>
            <h2 class=\"section-title\">À Propos de Cette Excursion</h2>
            <p class=\"description-text\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73), "html", null, true);
        yield "</p>

            <div class=\"info-cards\">
                <div class=\"info-card\">
                    <div class=\"info-icon\"><i class=\"fas fa-map-marker-alt\"></i></div>
                    <h4>Lieu de départ</h4>
                    <p>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 79, $this->source); })()), "lieu", [], "any", false, false, false, 79), "html", null, true);
        yield "</p>
                </div>
                <div class=\"info-card\">
                    <div class=\"info-icon\"><i class=\"fas fa-calendar-check\"></i></div>
                    <h4>Date de l'excursion</h4>
                    <p>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 84, $this->source); })()), "date", [], "any", false, false, false, 84), "d/m/Y"), "html", null, true);
        yield " — Départ à 14h00</p>
                </div>
                <div class=\"info-card\">
                    <div class=\"info-icon\"><i class=\"fas fa-clock\"></i></div>
                    <h4>Durée totale</h4>
                    <p>";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 89, $this->source); })()), "duree", [], "any", false, false, false, 89), "html", null, true);
        yield " heures d'aventure immersive</p>
                </div>
                <div class=\"info-card\">
                    <div class=\"info-icon\"><i class=\"fas fa-users\"></i></div>
                    <h4>Places disponibles</h4>
                    <p>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 94, $this->source); })()), "nombrePlacesDisponibles", [], "any", false, false, false, 94), "html", null, true);
        yield " places restantes</p>
                </div>
            </div>

            <div class=\"rating-fav-container\">

    <!-- ⭐ NOTATION -->
    <div class=\"rating-section\">
        <span class=\"section-label\">Notation</span>
        <div class=\"rating\" id=\"ratingBox\" data-id=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 103, $this->source); })()), "idExcursion", [], "any", false, false, false, 103), "html", null, true);
        yield "\">
            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 105
            yield "                <span class=\"click-star ";
            yield ((($context["i"] <= (isset($context["userRating"]) || array_key_exists("userRating", $context) ? $context["userRating"] : (function () { throw new RuntimeError('Variable "userRating" does not exist.', 105, $this->source); })()))) ? ("active") : (""));
            yield "\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">★</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "        </div>
    </div>

    <!-- ❤️ FAVORIS -->
    <div class=\"fav-section\">
        ";
        // line 112
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "            <button
                type=\"button\"
                id=\"favBtn\"
                data-id=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 116, $this->source); })()), "idExcursion", [], "any", false, false, false, 116), "html", null, true);
            yield "\"
                class=\"fav-btn ";
            // line 117
            yield (((($tmp = (isset($context["isFavori"]) || array_key_exists("isFavori", $context) ? $context["isFavori"] : (function () { throw new RuntimeError('Variable "isFavori" does not exist.', 117, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
            yield "\">
                ❤️ ";
            // line 118
            yield (((($tmp = (isset($context["isFavori"]) || array_key_exists("isFavori", $context) ? $context["isFavori"] : (function () { throw new RuntimeError('Variable "isFavori" does not exist.', 118, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Retirer des favoris") : ("Ajouter aux favoris"));
            yield "
            </button>
        ";
        } else {
            // line 121
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"fav-btn-link\">
                ❤️ Connectez-vous
            </a>
        ";
        }
        // line 125
        yield "    </div>

</div>
            ";
        // line 129
        yield "            ";
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "galerie", [], "any", true, true, false, 129)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 129, $this->source); })()), "galerie", [], "any", false, false, false, 129), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "            <div class=\"gallery-section\">
                <span class=\"section-label\">Galerie Photos</span>
                <h3 class=\"section-title\">Découvrez les Lieux</h3>
                <div class=\"gallery-grid\">
                    ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 134, $this->source); })()), "galerie", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 135
                yield "                    <div class=\"gallery-item\">
                        <img src=\"";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/galerie/" . $context["photo"])), "html", null, true);
                yield "\" alt=\"Galerie\">
                        <div class=\"gallery-overlay\"><i class=\"fas fa-expand\"></i></div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['photo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "                </div>
            </div>
            ";
        }
        // line 143
        yield "        </div>

        ";
        // line 146
        yield "        <aside class=\"booking-sidebar\">
            <div class=\"booking-card\">

              

    <div class=\"price-section\">


    <p class=\"price-value\">
        <span class=\"price-currency\">TND</span>
        <span id=\"prix-adulte\">
            ";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 157, $this->source); })()), "prix_adulte", [], "any", false, false, false, 157)), "html", null, true);
        yield "
        </span>
    </p>

    <p class=\"price-per\">par adulte</p>

    <div class=\"price-breakdown\">

        <div class=\"price-item\">
            <span>Adulte</span>
            <span id=\"prix-adulte-item\">
                ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 168, $this->source); })()), "prix_adulte", [], "any", false, false, false, 168)), "html", null, true);
        yield " TND
            </span>
        </div>

        <div class=\"price-item\">
            <span>Enfant</span>
            <span id=\"prix-enfant-item\">
                ";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 175, $this->source); })()), "prix_enfant", [], "any", false, false, false, 175)), "html", null, true);
        yield " TND
            </span>
        </div>

        <div class=\"price-item\">
            <span>Bébé</span>
            <span id=\"prix-bebe-item\">
                ";
        // line 182
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 182, $this->source); })()), "prix_bebe", [], "any", false, false, false, 182) > 0)) {
            // line 183
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 183, $this->source); })()), "prix_bebe", [], "any", false, false, false, 183)), "html", null, true);
            yield " TND
                ";
        } else {
            // line 185
            yield "                    Gratuit
                ";
        }
        // line 187
        yield "            </span>
        </div>

    </div>

</div>
                ";
        // line 194
        yield "                <form class=\"booking-form\"
                      action=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reserver_excursion", ["idExcursion" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 195, $this->source); })()), "idExcursion", [], "any", false, false, false, 195)]), "html", null, true);
        yield "\"
                      method=\"POST\"
                      id=\"reservationForm\">

                    ";
        // line 200
        yield "                    <input type=\"hidden\" name=\"_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("reservation"), "html", null, true);
        yield "\">
                    ";
        // line 202
        yield "<input type=\"hidden\" name=\"promo_code\" id=\"hiddenPromo\" value=\"\">
                    ";
        // line 204
        yield "                    <div class=\"form-group\">
                        <label>Date de départ</label>
                        <input type=\"date\"
                               name=\"date\"
                               value=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 208, $this->source); })()), "date", [], "any", false, false, false, 208), "Y-m-d"), "html", null, true);
        yield "\"
                               required>
                    </div>

                    ";
        // line 213
        yield "                    <div class=\"form-group\">
                        <label>Adultes</label>
                        <select id=\"nb_adultes\" name=\"nb_adultes\">
                            ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 216, $this->source); })()), "nombrePlacesDisponibles", [], "any", false, false, false, 216)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 217
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" ";
            if (($context["i"] == 1)) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        yield "                        </select>
                    </div>

                    ";
        // line 223
        yield "                    <div class=\"form-group\">
                        <label>Enfants</label>
                        <select id=\"nb_enfants\" name=\"nb_enfants\">
                            ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 226, $this->source); })()), "nombrePlacesDisponibles", [], "any", false, false, false, 226)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 227
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        yield "                        </select>
                    </div>

                    ";
        // line 233
        yield "                    <div class=\"form-group\">
                        <label>Bébés</label>
                        <select id=\"nb_bebes\" name=\"nb_bebes\">
                            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 236, $this->source); })()), "nombrePlacesDisponibles", [], "any", false, false, false, 236)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 237
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        yield "                        </select>
                    </div>

                    ";
        // line 243
        yield "<div class=\"total-box\" id=\"total-price\" data-base=\"0\">
    ";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "prixAdulte", [], "any", true, true, false, 244)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 244, $this->source); })()), "prixAdulte", [], "any", false, false, false, 244), 0)) : (0)), "html", null, true);
        yield " TND
</div>

                    ";
        // line 248
        yield "                    <div id=\"placesError\" class=\"places-error\" style=\"display:none;\">
                        ⚠️ Nombre de participants dépasse les places disponibles.
                    </div>

                    ";
        // line 253
        yield "
<p onclick=\"togglePromo()\" class=\"promo-toggle\"> Vous avez un code promo ?</p>

<div id=\"promoSection\" class=\"promo-section\" style=\"display:none;\">
    <div class=\"promo-box\">
        <input type=\"text\" id=\"promoInput\" placeholder=\"Code promo\">
        <button type=\"button\" onclick=\"applyPromo()\" class=\"btn-add\">Ajouter</button>
    </div>

    <p id=\"promoMessage\"></p>
    <p onclick=\"togglePromo()\" class=\"close-link\">Fermer ✕</p>
</div>

                    ";
        // line 267
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "user", [], "any", false, false, false, 267)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 268
            yield "<button type=\"button\" id=\"payBtn\" class=\"btn-pay\">
                            Réserver et payer →
                        </button>
                    ";
        } else {
            // line 272
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn-pay\">
                            🔐 Se connecter pour payer →
                        </a>
                    ";
        }
        // line 276
        yield "
                    <div class=\"guarantee-badge\">
                        ✔ Réservation sécurisée — Annulation gratuite
                    </div>
                </form>
            </div>
        </aside>

    </div>
</main>

";
        // line 288
        yield "<section class=\"excursion-map-section\">

    <div class=\"map-header\">
        <div class=\"map-header-left\">
            <span class=\"map-badge-label\">📍 Autour de cette excursion</span>
            <h3>Carte des services à proximité</h3>
            <p>Découvrez les cafés, restaurants et parkings proches du lieu.</p>
        </div>
        <div class=\"map-toolbar\">
            <div class=\"filter-group\">
                <button type=\"button\" class=\"map-filter-btn active\" data-type=\"cafe\">☕ Cafés</button>
                <button type=\"button\" class=\"map-filter-btn active\" data-type=\"restaurant\">🍽️ Restaurants</button>
                <button type=\"button\" class=\"map-filter-btn active\" data-type=\"parking\">🅿️ Parkings</button>
            </div>
            <select id=\"map-radius\" class=\"map-radius-select\">
                <option value=\"500\">500 m</option>
                <option value=\"1000\" selected>1 km</option>
                <option value=\"2000\">2 km</option>
                <option value=\"5000\">5 km</option>
            </select>
        </div>
    </div>

    <div class=\"map-body\">
        <div class=\"map-panel\">
            <div id=\"excursion-map\"></div>
            <div id=\"map-loading\" class=\"map-loading-overlay hidden\">⏳ Chargement des lieux…</div>
        </div>
        <div class=\"nearby-panel\">
            <div class=\"nearby-panel-header\">
                <h4>Lieux trouvés</h4>
                <span id=\"nearby-count\" class=\"nearby-count-badge\">0</span>
            </div>
            <div id=\"nearby-list\" class=\"nearby-list\">
                <div class=\"nearby-empty\">
                    <p>Aucun lieu chargé pour le moment.</p>
                    <p>Sélectionnez un type et un rayon pour lancer la recherche.</p>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 332
        yield "<div id=\"toast\" class=\"toast\"></div>

";
        // line 335
        yield "<style>

/* 🔥 CONTAINER FLEX */
.rating-fav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    margin-top: 20px;
}

/* ⭐ NOTATION */
.rating-section {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

/* ⭐ STARS */
.rating {
    display: flex;
    gap: 6px;
}

.click-star {
    font-size: 22px;
    cursor: pointer;
    color: #ccc;
    transition: 0.2s;
}

.click-star.active,
.click-star:hover {
    color: #FFC107;
    transform: scale(1.2);
}

/* ❤️ FAVORIS */
.fav-section {
    display: flex;
    align-items: center;
}

/* ❤️ BUTTON */
.fav-btn {
    background: transparent;
    border: 1px solid #ff4d6d;
    color: #ff4d6d;
    padding: 10px 18px;
    border-radius: 25px;
    cursor: pointer;
    transition: 0.3s;
    font-weight: 500;
}

.fav-btn:hover {
    background: #ff4d6d;
    color: white;
    transform: translateY(-2px);
}

/* ❤️ ACTIVE */
.fav-btn.active {
    background: #ff4d6d;
    color: white;
    border-color: #ff4d6d;
}

/* 🔗 lien */
.fav-btn-link {
    color: #FFC107;
    text-decoration: none;
}

/* 📱 RESPONSIVE */
@media (max-width: 600px) {
    .rating-fav-container {
        flex-direction: column;
        align-items: flex-start;
    }

    .fav-section {
        width: 100%;
    }

    .fav-btn {
        width: 100%;
        text-align: center;
    }
}






.btn-pay {
    width: 100%;
    padding: 14px 20px;
    border: none;
    border-radius: 30px;

    background: linear-gradient(135deg, #FFC107, #FF8F00);
    color: #0B2D4A;

    font-weight: 700;
    font-size: 16px;
    letter-spacing: 0.5px;

    cursor: pointer;
    transition: all 0.3s ease;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-top:50px;
    box-shadow: 0 8px 20px rgba(255, 193, 7, 0.3);
}

.btn-pay:hover {
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 12px 30px rgba(255, 193, 7, 0.5);
}

.btn-pay:active {
    transform: scale(0.98);
}

.btn-pay:disabled {
    background: #ccc;
    cursor: not-allowed;
    box-shadow: none;
}

.btn-icon {
    font-size: 18px;
}
/* ─── Variables ─── */
:root {
    --gold: #FFC107;
    --gold-dark: #FF9800;
    --navy: #0B2D4A;
    --navy-deep: #08263E;
    --white-60: rgba(255,255,255,0.6);
    --white-85: rgba(255,255,255,0.85);
    --border-gold: rgba(255,193,7,0.2);
}

/* ─── Particles ─── */
.particles-bg {
    position: fixed; top: 0; left: 0;
    width: 100%; height: 100%;
    pointer-events: none; z-index: 0; overflow: hidden;
}
.particle {
    position: absolute; width: 6px; height: 6px;
    background: var(--gold); border-radius: 50%;
    opacity: 0.1; animation: particleFloat 15s infinite linear;
}
@keyframes particleFloat {
    0%   { transform: translateY(100vh) rotate(0deg); opacity: 0; }
    10%  { opacity: 0.15; }
    90%  { opacity: 0.15; }
    100% { transform: translateY(-100vh) rotate(720deg); opacity: 0; }
}

/* ─── Hero ─── */
.hero-excursion {
    position: relative; height: 70vh; min-height: 500px;
    overflow: hidden; margin-top: 80px;
}
.hero-excursion img {
    width: 100%; height: 100%; object-fit: cover; transform: scale(1.05);
}
.hero-excursion .overlay {
    position: absolute; inset: 0;
    background: linear-gradient(180deg,
        rgba(11,45,74,0.4) 0%,
        rgba(11,45,74,0.2) 40%,
        rgba(11,45,74,0.9) 100%);
}
.hero-content {
    position: absolute; bottom: 80px; left: 80px; right: 80px; z-index: 2;
}
.hero-badge {
    display: inline-flex; align-items: center; gap: 10px;
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    color: var(--navy); padding: 10px 25px; border-radius: 30px;
    font-size: 14px; font-weight: 600; text-transform: uppercase;
    letter-spacing: 1px; margin-bottom: 25px;
}
.hero-content h1 {
    font-family: 'Playfair Display', serif; font-size: 64px;
    font-weight: 800; color: white; margin: 0 0 25px 0;
    text-shadow: 0 4px 30px rgba(0,0,0,0.3); line-height: 1.1;
}
.hero-stats { display: flex; gap: 25px; flex-wrap: wrap; margin-bottom: 20px; }
.stat-item {
    display: flex; align-items: center; gap: 12px;
    background: rgba(255,255,255,0.1); padding: 15px 25px;
    border-radius: 18px; border: 1px solid rgba(255,193,7,0.25);
    transition: all 0.3s ease;
}
.stat-item:hover {
    background: rgba(255,193,7,0.15);
    border-color: rgba(255,193,7,0.5); transform: translateY(-3px);
}
.stat-item i { color: var(--gold); font-size: 20px; }
.stat-item span { font-size: 15px; font-weight: 500; color: white; }

/* Hero meta (rating + fav) */
.hero-meta {
    display: flex; align-items: center; gap: 20px; margin-top: 8px;
}
.rating-value {
    font-size: 15px; font-weight: 600; color: white;
    background: rgba(255,255,255,0.1);
    padding: 8px 18px; border-radius: 20px;
    border: 1px solid rgba(255,193,7,0.25);
}
.fav-count {
    font-size: 15px; font-weight: 600; color: white;
    background: rgba(255,255,255,0.1);
    padding: 8px 18px; border-radius: 20px;
    border: 1px solid rgba(255,100,100,0.3);
    transition: transform 0.2s;
}

/* ─── Main content ─── */
.main-content {
    position: relative; z-index: 2;
    padding: 80px; max-width: 1600px; margin: 0 auto;
}
.content-grid {
    display: grid; grid-template-columns: 1fr 420px; gap: 60px;
}
.description-section { animation: fadeUp 1s ease 0.6s both; }
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(40px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* ─── Labels & titres ─── */
.section-label {
    display: inline-flex; align-items: center; gap: 12px;
    font-size: 14px; color: var(--gold); text-transform: uppercase;
    letter-spacing: 3px; margin-bottom: 20px; font-weight: 500;
}
.section-label::before {
    content: ''; width: 40px; height: 3px;
    background: linear-gradient(90deg, var(--gold), var(--gold-dark));
    border-radius: 3px;
}
.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 40px; color: white; margin: 0 0 30px 0;
}
.description-text {
    font-size: 18px; line-height: 2;
    color: var(--white-85); margin: 0 0 50px 0;
}

/* ─── Info cards ─── */
.info-cards {
    display: grid; grid-template-columns: repeat(2, 1fr);
    gap: 25px; margin-bottom: 40px;
}
.info-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid var(--border-gold);
    border-radius: 20px; padding: 30px;
    transition: all 0.4s ease; position: relative; overflow: hidden;
}
.info-card::before {
    content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px;
    background: linear-gradient(90deg, var(--gold), var(--gold-dark));
    transform: scaleX(0); transition: transform 0.4s ease;
}
.info-card:hover::before { transform: scaleX(1); }
.info-card:hover {
    transform: translateY(-8px);
    border-color: rgba(255,193,7,0.35);
}
.info-icon {
    width: 60px; height: 60px;
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    border-radius: 16px; display: flex; align-items: center;
    justify-content: center; margin: 0 0 20px 0;
    box-shadow: 0 10px 30px rgba(255,193,7,0.25);
}
.info-icon i { font-size: 24px; color: var(--navy); }
.info-card h4 {
    font-family: 'Playfair Display', serif;
    font-size: 20px; color: var(--gold); margin: 0 0 10px 0;
}
.info-card p { font-size: 15px; color: rgba(255,255,255,0.75); line-height: 1.6; margin: 0; }

/* ─── Rating ─── */
.rating-section { margin-bottom: 30px; }
.click-star {
    font-size: 32px; cursor: pointer; color: #ccc;
    transition: all 0.2s ease; display: inline-block;
}
.click-star.active  { color: var(--gold); }
.click-star.hovered { color: #FFD700; transform: scale(1.2); }
.click-star.animate { animation: popStar 0.3s ease; }
@keyframes popStar {
    0%   { transform: scale(1); }
    50%  { transform: scale(1.5); }
    100% { transform: scale(1); }
}

/* ─── Favoris ─── */
.fav-section { margin-bottom: 40px; }
.fav-btn {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 12px 24px; border-radius: 30px;
    border: 1px solid rgba(255,100,100,0.4);
    background: transparent; color: rgba(255,255,255,0.7);
    font-size: 15px; font-weight: 500; cursor: pointer;
    transition: all 0.3s;
}
.fav-btn:hover, .fav-btn.active {
    background: rgba(220,50,50,0.15);
    border-color: rgba(255,80,80,0.6);
    color: #ff6b6b;
}
.fav-btn-link {
    display: inline-block; color: rgba(255,255,255,0.5);
    font-size: 14px; text-decoration: none; margin-bottom: 10px;
}

/* ─── Gallery ─── */
.gallery-section { margin-bottom: 50px; }
.gallery-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; }
.gallery-item { position: relative; aspect-ratio: 1; border-radius: 15px; overflow: hidden; cursor: pointer; }
.gallery-item img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
.gallery-item:hover img { transform: scale(1.15); }
.gallery-overlay {
    position: absolute; inset: 0;
    background: rgba(11,45,74,0.5);
    display: flex; align-items: center; justify-content: center;
    opacity: 0; transition: opacity 0.3s ease;
}
.gallery-item:hover .gallery-overlay { opacity: 1; }
.gallery-overlay i { color: var(--gold); font-size: 28px; }

/* ─── Booking sidebar ─── */
.booking-sidebar { position: sticky; top: 120px; animation: fadeRight 1s ease 0.8s both; }
@keyframes fadeRight {
    from { opacity: 0; transform: translateX(50px); }
    to   { opacity: 1; transform: translateX(0); }
}
.booking-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid var(--border-gold);
    border-radius: 30px; padding: 45px;
}
.price-section {
    text-align: center; padding-bottom: 30px;
    margin-bottom: 30px; border-bottom: 1px solid rgba(255,193,7,0.15);
}
.price-label { font-size: 14px; color: var(--white-60); margin-bottom: 10px; }
.price-value {
    font-family: 'Playfair Display', serif; font-size: 56px; font-weight: 700;
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text; margin: 0;
}
.price-currency { font-size: 24px; }
.price-per { font-size: 16px; color: var(--white-60); }
.price-breakdown { margin-top: 20px; display: flex; flex-direction: column; gap: 12px; }
.price-item {
    display: flex; justify-content: space-between; align-items: center;
    padding: 12px 15px; background: rgba(255,255,255,0.03); border-radius: 12px;
    font-size: 14px; color: rgba(255,255,255,0.7);
}
.price-item span:last-child { color: var(--gold); font-weight: 600; }

/* ─── Booking form ─── */
.booking-form { margin-top: 10px; }
.form-group { margin-bottom: 20px; }
.form-group label {
    display: block; font-size: 14px;
    color: rgba(255,255,255,0.8); margin-bottom: 10px; font-weight: 500;
}
.form-group input,
.form-group select {
    width: 100%; padding: 16px 20px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,193,7,0.2);
    border-radius: 15px; color: white; font-size: 15px;
    transition: all 0.3s ease;
    box-sizing: border-box;
}
.form-group input:focus,
.form-group select:focus {
    outline: none; border-color: var(--gold);
    background: rgba(255,193,7,0.08);
    box-shadow: 0 0 20px rgba(255,193,7,0.15);
}
.form-group select option { background: var(--navy); color: white; }

/* ─── Total box ─── */
.total-box {
    margin: 20px 0; padding: 20px;
    background: rgba(255,193,7,0.07);
    border: 1px solid rgba(255,193,7,0.25);
    border-radius: 16px; text-align: center;
    min-height: 60px; display: flex;
    align-items: center; justify-content: center;
    transition: all 0.3s;
}

/* ─── Erreur places ─── */
.places-error {
    background: rgba(220,50,50,0.1);
    border: 1px solid rgba(220,50,50,0.3);
    color: #ff6b6b; border-radius: 12px;
    padding: 12px 16px; font-size: 13px;
    margin-bottom: 10px; text-align: center;
}

/* ─── Code promo ─── */
.promo-toggle {
    color: #4dd0e1; cursor: pointer; font-size: 14px;
    margin-top: 8px; transition: 0.3s; user-select: none;
}
.promo-toggle:hover { color: #81d4fa; }
.promo-section {
    margin-top: 15px; padding: 20px; border-radius: 16px;
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,193,7,0.2);
}
.promo-box { display: flex; gap: 10px; }
#promoInput {
    flex: 1; padding: 12px;
    background: transparent;
    border: 1px solid rgba(255,193,7,0.3);
    border-radius: 10px; color: white; outline: none; transition: 0.3s;
    box-sizing: border-box;
}
#promoInput::placeholder { color: rgba(255,255,255,0.4); }
#promoInput:focus { border-color: var(--gold); }
.btn-add {
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    color: #111; border: none; padding: 12px 18px;
    border-radius: 10px; font-weight: 600; cursor: pointer; transition: 0.3s;
}
.btn-add:hover { transform: translateY(-2px); box-shadow: 0 4px 10px rgba(255,193,7,0.4); }
#promoMessage { margin-top: 10px; font-size: 13px; }
.close-link {
    margin-top: 10px; color: #64b5f6;
    cursor: pointer; font-size: 13px; user-select: none;
}
.close-link:hover { color: #90caf9; }

/* ─── Bouton réserver ─── */
.btn-reserve {
    width: 100%; padding: 20px 35px;
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    color: var(--navy); border: none; border-radius: 18px;
    font-size: 17px; font-weight: 700; cursor: pointer;
    transition: all 0.4s ease;
    display: flex; align-items: center; justify-content: center; gap: 12px;
    box-shadow: 0 12px 35px rgba(255,193,7,0.35);
    margin-top: 20px; text-decoration: none;
}
.btn-reserve:hover { transform: translateY(-4px); box-shadow: 0 18px 50px rgba(255,193,7,0.5); }
.btn-reserve:disabled { background: grey; cursor: not-allowed; transform: none; box-shadow: none; }

.guarantee-badge {
    display: flex; align-items: center; gap: 12px; padding: 18px;
    background: rgba(76,175,80,0.1);
    border: 1px solid rgba(76,175,80,0.3);
    border-radius: 15px; margin-top: 20px;
    font-size: 13px; color: rgba(255,255,255,0.85);
}

/* ─── Toast ─── */
.toast {
    position: fixed; bottom: 30px; right: 30px;
    background: rgba(0,0,0,0.85); color: white;
    padding: 14px 22px; border-radius: 12px; font-size: 14px;
    opacity: 0; transform: translateY(20px);
    transition: 0.4s; z-index: 9999;
    border: 1px solid rgba(255,255,255,0.1);
}
.toast.show { opacity: 1; transform: translateY(0); }

/* ─── Map ─── */
.excursion-map-section {
    max-width: 1600px; margin: 0 auto;
    padding: 0 80px 80px;
    position: relative; z-index: 2;
    display: flex; flex-direction: column;
}
.excursion-map-section > .map-header {
    display: flex; justify-content: space-between;
    align-items: flex-end; flex-wrap: wrap;
    gap: 20px; margin-bottom: 24px; width: 100%;
}
.map-header-left .map-badge-label {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,193,7,0.1); border: 1px solid rgba(255,193,7,0.35);
    color: var(--gold); padding: 6px 18px; border-radius: 30px;
    font-size: 13px; font-weight: 600; margin-bottom: 12px;
    margin-top:80px;
}
.map-header-left h3 {
    font-family: 'Playfair Display', serif; font-size: 32px; color: white; margin: 0 0 8px;
}
.map-header-left p { font-size: 15px; color: var(--white-60); margin: 0; }
.map-toolbar { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; flex-shrink: 0; }
.filter-group { display: flex; gap: 8px; flex-wrap: wrap; }
.map-filter-btn {
    padding: 10px 18px; background: transparent;
    border: 1px solid rgba(255,255,255,0.2);
    color: rgba(255,255,255,0.75); border-radius: 30px;
    font-size: 13px; font-weight: 600; cursor: pointer;
    transition: all 0.25s ease;
}
.map-filter-btn.active {
    background: rgba(255,193,7,0.15);
    border-color: rgba(255,193,7,0.5); color: var(--gold);
}
.map-filter-btn:hover { border-color: rgba(255,193,7,0.4); color: var(--gold); }
.map-radius-select {
    padding: 10px 16px; background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,193,7,0.25);
    color: white; border-radius: 12px; font-size: 13px; cursor: pointer;
}
.map-radius-select option { background: var(--navy); }
.map-body {
    display: grid; grid-template-columns: 1fr 420px;
    grid-template-rows: 560px; border-radius: 20px;
    overflow: hidden; border: 1px solid rgba(255,193,7,0.15);
    background: rgba(255,255,255,0.02); width: 100%;
}
.map-panel { position: relative; min-width: 0; height: 560px; }
#excursion-map { width: 100% !important; height: 560px; display: block; }
.map-loading-overlay {
    position: absolute; bottom: 14px; left: 14px;
    background: rgba(11,45,74,0.85); color: var(--gold);
    padding: 8px 16px; border-radius: 10px; font-size: 13px;
    font-weight: 500; border: 1px solid rgba(255,193,7,0.3); z-index: 500;
}
.map-loading-overlay.hidden { display: none; }
.nearby-panel {
    background: rgba(8,30,50,0.95);
    border-left: 1px solid rgba(255,193,7,0.1);
    display: flex; flex-direction: column; height: 560px; overflow: hidden;
}
.nearby-panel-header {
    display: flex; justify-content: space-between; align-items: center;
    padding: 18px 20px 14px;
    border-bottom: 1px solid rgba(255,255,255,0.06); flex-shrink: 0;
}
.nearby-panel-header h4 { font-size: 15px; font-weight: 600; color: white; margin: 0; }
.nearby-count-badge {
    background: var(--gold); color: var(--navy); border-radius: 20px;
    padding: 3px 12px; font-size: 13px; font-weight: 700;
    min-width: 28px; text-align: center;
}
.nearby-list {
    overflow-y: auto; flex: 1;
    scrollbar-width: thin; scrollbar-color: rgba(255,193,7,0.3) transparent;
}
.nearby-list::-webkit-scrollbar { width: 5px; }
.nearby-list::-webkit-scrollbar-thumb { background: rgba(255,193,7,0.3); border-radius: 10px; }
.nearby-empty { padding: 40px 20px; text-align: center; font-size: 13px; color: rgba(255,255,255,0.4); line-height: 1.8; }
.nearby-card {
    display: flex; align-items: flex-start; gap: 12px;
    padding: 14px 18px; border-bottom: 1px solid rgba(255,255,255,0.04);
    transition: background 0.2s;
}
.nearby-card:hover { background: rgba(255,193,7,0.05); }
.nearby-content { flex: 1; min-width: 0; }
.nearby-top { display: flex; justify-content: space-between; align-items: flex-start; gap: 8px; margin-bottom: 4px; }
.nearby-top h5 { font-size: 13px; font-weight: 600; color: white; margin: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.nearby-distance { font-size: 12px; font-weight: 700; color: var(--gold); white-space: nowrap; flex-shrink: 0; }
.nearby-type { font-size: 11px; color: rgba(255,255,255,0.55); margin-bottom: 6px; }
.nearby-actions { display: flex; gap: 8px; flex-wrap: wrap; }
.focus-place-btn {
    padding: 5px 12px; font-size: 11px; font-weight: 600;
    background: linear-gradient(135deg, rgba(255,193,7,0.15), rgba(255,152,0,0.1));
    border: 1px solid rgba(255,193,7,0.4); color: var(--gold);
    border-radius: 20px; cursor: pointer; transition: all 0.25s ease;
}
.focus-place-btn:hover {
    background: rgba(255,193,7,0.25); color: white; transform: translateY(-1px);
}

/* ─── Responsive ─── */
@media (max-width: 1200px) {
    .content-grid { grid-template-columns: 1fr; }
    .booking-sidebar { position: static; }
    .hero-content { left: 40px; right: 40px; }
    .hero-content h1 { font-size: 48px; }
    .main-content { padding: 60px 40px; }
    .gallery-grid { grid-template-columns: repeat(2, 1fr); }
    .info-cards { grid-template-columns: 1fr; }
    .excursion-map-section { padding: 0 40px 60px; }
    .map-body { grid-template-columns: 1fr; grid-template-rows: 380px auto; }
    .map-panel { height: 380px; }
    #excursion-map { height: 380px !important; }
    .nearby-panel { height: auto; border-left: none; border-top: 1px solid rgba(255,193,7,0.1); }
    .nearby-list { max-height: 300px; }
}
@media (max-width: 768px) {
    .hero-content { left: 25px; right: 25px; bottom: 50px; }
    .hero-content h1 { font-size: 36px; }
    .hero-stats { flex-direction: column; gap: 15px; }
    .main-content { padding: 40px 25px; }
    .section-title { font-size: 32px; }
    .gallery-grid { grid-template-columns: repeat(2, 1fr); }
    .excursion-map-section { padding: 0 20px 40px; }
    .excursion-map-section > .map-header { flex-direction: column; }
    .map-header-left h3 { font-size: 24px; }
    .map-toolbar { width: 100%; }
    .map-filter-btn, .map-radius-select { width: 100%; }
    .map-panel { height: 260px; }
    #excursion-map { height: 260px !important; }
}
</style>

";
        // line 964
        yield "<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>

";
        // line 967
        yield "<script>
let activeDiscount = 0;

// 🎟️ GESTION CODE PROMO
function applyPromo() {
    const input = document.getElementById('promoInput');
    const message = document.getElementById('promoMessage');

    if (!input.value) {
        message.style.color = \"red\";
        message.innerText = \"❌ Entrez un code\";
        return;
    }

    const code = input.value.toUpperCase();

    const discountMap = {
        'BRONZE10': 10,
        'SILVER15': 15,
        'GOLD20': 20
    };

    activeDiscount = discountMap[code] || 0;

    if (!activeDiscount) {
        message.style.color = \"red\";
        message.innerText = \"❌ Code invalide\";
        return;
    }

    message.style.color = \"#4caf50\";
    message.innerText = \"✅ -\" + activeDiscount + \"% appliqué !\";

    updatePrix(); // 🔥 recalcul total
}

// 💰 CALCUL TOTAL (source = backend)
async function updatePrix() {

    const totalEl = document.getElementById('total-price');

    let a = parseInt(document.getElementById('nb_adultes').value) || 0;
    let e = parseInt(document.getElementById('nb_enfants').value) || 0;
    let b = parseInt(document.getElementById('nb_bebes').value) || 0;

    try {
        let response = await fetch('/prix-intelligent', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body:
                'id=";
        // line 1017
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1017, $this->source); })()), "idExcursion", [], "any", false, false, false, 1017), "html", null, true);
        yield "' +
                '&adultes=' + a +
                '&enfants=' + e +
                '&bebes=' + b
        });

        let data = await response.json();

        if (!data || data.error) {
            totalEl.innerHTML = \"<span style='color:red'>Erreur calcul</span>\";
            return;
        }

        // 🔥 TOTAL BACKEND
        let total = data.total;

        // 🔥 APPLIQUER PROMO
        if (activeDiscount > 0) {
            total = total * (1 - activeDiscount / 100);
        }

        // 🔥 AFFICHAGE
        totalEl.innerHTML = `
            <div>
                <strong>\${total.toFixed(2)} TND</strong><br>
                <small>
                    \${a} adulte(s), \${e} enfant(s), \${b} bébé(s)
                    \${activeDiscount > 0 ? ' — 🎟️ -' + activeDiscount + '%' : ''}
                </small>
            </div>
        `;

    } catch (error) {
        console.error(error);
        totalEl.innerHTML = \"<span style='color:red'>Erreur serveur</span>\";
    }
}

// 🚀 INIT + EVENTS
document.addEventListener('DOMContentLoaded', function () {

    const adultes = document.getElementById('nb_adultes');
    const enfants = document.getElementById('nb_enfants');
    const bebes   = document.getElementById('nb_bebes');

    const payBtn = document.getElementById('payBtn');
    const form   = document.getElementById('reservationForm');

    let isSubmitting = false;

    // 🔥 EVENTS
    adultes.addEventListener('change', updatePrix);
    enfants.addEventListener('change', updatePrix);
    bebes.addEventListener('change', updatePrix);

    // 🔥 STRIPE (anti double clic)
    if (payBtn && form) {
        payBtn.addEventListener('click', function () {
            if (isSubmitting) return;

            isSubmitting = true;
            this.disabled = true;
            this.innerText = \"⏳ Redirection...\";

            form.submit();
        });
    }

    // 🔥 INITIALISATION
    updatePrix();
});
document.addEventListener('DOMContentLoaded', function () {

    const adultes = document.getElementById('nb_adultes');
    const enfants = document.getElementById('nb_enfants');
    const bebes   = document.getElementById('nb_bebes');

    const payBtn = document.getElementById('payBtn');
    const form   = document.getElementById('reservationForm');

    let isSubmitting = false;

    // 🔥 EVENTS
    adultes.addEventListener('change', updatePrix);
    enfants.addEventListener('change', updatePrix);
    bebes.addEventListener('change', updatePrix);

payBtn.addEventListener('click', function () {
    if (isSubmitting) return;

    isSubmitting = true;
    this.disabled = true;
    this.innerText = \"⏳ Redirection...\";

    // 🔥 RÉCUPÉRER LE CODE PROMO
    const promoInput = document.getElementById('promoInput');
    const code = promoInput.value.trim().toUpperCase();

    // 🔥 AJOUTER AU FORMULAIRE
    if (code) {
        let hidden = document.createElement('input');
        hidden.type = 'hidden';
        hidden.name = 'promo_code';
        hidden.value = code;
        form.appendChild(hidden);
    }

    form.submit();
});

    // 🔥 INIT
    updatePrix();
});
document.addEventListener('DOMContentLoaded', function () {
    var ratingBox = document.getElementById('ratingBox');
    var stars     = document.querySelectorAll('.click-star');

    if (!ratingBox) return;

    var currentRating = 0;

    stars.forEach(function(star) {
        star.addEventListener('click', function () {
            var value    = parseInt(this.dataset.value);
            var id       = ratingBox.dataset.id;
            var final    = (currentRating === value) ? 0 : value;

            fetch('/excursion/' + id + '/rate', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'rating=' + final
            })
            .then(function(res) {
                if (res.status === 401) { window.location.href = \"/login\"; return null; }
                return res.json();
            })
            .then(function(data) {
                if (!data || !data.success) return;
                currentRating = final;
                stars.forEach(function(s) { s.classList.remove('active', 'animate'); });
                stars.forEach(function(s) {
                    if (s.dataset.value <= final) {
                        s.classList.add('active', 'animate');
                        setTimeout(function() { s.classList.remove('animate'); }, 300);
                    }
                });
                showToast(final > 0 ? '⭐ Note enregistrée !' : 'Note supprimée');
            });
        });

        star.addEventListener('mouseover', function () {
            var val = this.dataset.value;
            stars.forEach(function(s) {
                s.classList.remove('hovered');
                if (s.dataset.value <= val) s.classList.add('hovered');
            });
        });

        star.addEventListener('mouseout', function () {
            stars.forEach(function(s) { s.classList.remove('hovered'); });
        });
    });
});
</script>

";
        // line 1186
        yield "<script>
document.addEventListener('DOMContentLoaded', function () {
    var btn     = document.getElementById('favBtn');
    var countEl = document.getElementById('favCount');

    if (!btn) return;

    btn.addEventListener('click', function () {
        var id = btn.dataset.id;
        if (!id) { window.location.href = \"/login\"; return; }
        if (btn.disabled) return;
        btn.disabled = true;

        fetch('/favoris/' + id, {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(function(res) {
            if (res.status === 401) { window.location.href = \"/login\"; return null; }
            if (!res.ok) throw new Error('Erreur HTTP');
            return res.json();
        })
        .then(function(data) {
            if (!data || !data.success) return;

            if (data.isFavori) {
                btn.classList.add('active');
                btn.innerHTML = '❤️ Retirer des favoris';
                showToast('❤️ Ajouté aux favoris !');
            } else {
                btn.classList.remove('active');
                btn.innerHTML = '❤️ Ajouter aux favoris';
                showToast('💔 Retiré des favoris');
            }

            if (countEl) {
                countEl.innerHTML = '❤️ ' + data.count;
                countEl.style.transform = 'scale(1.3)';
                setTimeout(function() { countEl.style.transform = 'scale(1)'; }, 200);
            }
        })
        .catch(function() { console.error('Erreur favoris'); })
        .finally(function() { btn.disabled = false; });
    });
});
</script>

<script>
function togglePromo() {
    const section = document.getElementById('promoSection');

    if (!section) return;

    if (section.style.display === \"none\" || section.style.display === \"\") {
        section.style.display = \"block\";
    } else {
        section.style.display = \"none\";
    }
}
</script>
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', async function () {
    const lieu = ";
        // line 1249
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1249, $this->source); })()), "lieu", [], "any", false, false, false, 1249));
        yield ";
    const title = ";
        // line 1250
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 1250, $this->source); })()), "titre", [], "any", false, false, false, 1250));
        yield ";

    const listDiv = document.getElementById('nearby-list');
    const countDiv = document.getElementById('nearby-count');
    const radiusSelect = document.getElementById('map-radius');
    const filterButtons = document.querySelectorAll('.map-filter-btn');

    let lat = null;
    let lon = null;

    let map = null;
    let markers = [];
    let allPlaces = [];

    const activeFilters = {
        cafe: true,
        restaurant: true,
        parking: true
    };

    // =========================
    // 🔎 GEOCODE
    // =========================
    try {
        const res = await fetch(`/map/geocode?lieu=\${encodeURIComponent(lieu)}`);
        const data = await res.json();

        if (data.success) {
            lat = parseFloat(data.lat);
            lon = parseFloat(data.lon);
        }
    } catch (e) {
        console.error('Erreur geocode :', e);
    }

    if (!lat || !lon) {
        lat = 36.8065;
        lon = 10.1815;
    }

    // =========================
    // 🗺️ INIT MAP
    // =========================
    function initMap() {
        if (map) return;

        map = L.map('excursion-map').setView([lat, lon], 14);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        L.marker([lat, lon])
            .addTo(map)
            .bindPopup(\"📍 \" + title)
            .openPopup();

        setTimeout(() => map.invalidateSize(), 300);
    }

    // =========================
    // 🧹 CLEAR MARKERS
    // =========================
    function clearMarkers() {
        if (!map) return;
        markers.forEach(marker => map.removeLayer(marker));
        markers = [];
    }

    // =========================
    // 🎯 ICONES
    // =========================
    function getIcon(type) {
        let emoji = \"📍\";
        if (type === \"cafe\") emoji = \"☕\";
        if (type === \"restaurant\") emoji = \"🍽️\";
        if (type === \"parking\") emoji = \"🅿️\";

        return L.divIcon({
            html: `<div style=\"font-size:18px\">\${emoji}</div>`,
            className: ''
        });
    }

    // =========================
    // 🔍 FILTRAGE
    // =========================
    function getFilteredPlaces() {
        return allPlaces.filter(place => activeFilters[place.type]);
    }

    // =========================
    // 🗺️ MARKERS
    // =========================
    function renderMarkers() {
        clearMarkers();

        const visiblePlaces = getFilteredPlaces();

        visiblePlaces.forEach(place => {
            const marker = L.marker([place.lat, place.lon], {
                icon: getIcon(place.type)
            });

            marker.bindPopup(`
                <b>\${place.name}</b><br>
                \${place.type}<br>
                \${place.distance} m
            `);

            marker.addTo(map);
            markers.push(marker);
        });
    }

    // =========================
    // 📋 LISTE
    // =========================
    function renderList() {
        const visiblePlaces = getFilteredPlaces();

        if (!visiblePlaces.length) {
            listDiv.innerHTML = `<div class=\"nearby-empty\">Aucun lieu trouvé pour les filtres sélectionnés.</div>`;
            countDiv.innerText = \"0\";
            return;
        }

        countDiv.innerText = visiblePlaces.length;

        listDiv.innerHTML = visiblePlaces.map(place => `
            <div class=\"nearby-card\">
                <div class=\"nearby-content\">
                    <div class=\"nearby-top\">
                        <h5>\${place.name}</h5>
                        <span class=\"nearby-distance\">\${place.distance} m</span>
                    </div>
                    <div class=\"nearby-type\">\${place.type}</div>
                    <div class=\"nearby-actions\">
                        <button class=\"focus-place-btn\"
                                data-lat=\"\${place.lat}\"
                                data-lon=\"\${place.lon}\">
                            Voir sur la carte
                        </button>
                    </div>
                </div>
            </div>
        `).join('');

        document.querySelectorAll('.focus-place-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const targetLat = parseFloat(this.dataset.lat);
                const targetLon = parseFloat(this.dataset.lon);

                if (!map) return;

                map.setView([targetLat, targetLon], 17);

                const foundMarker = markers.find(marker => {
                    const pos = marker.getLatLng();
                    return pos.lat === targetLat && pos.lng === targetLon;
                });

                if (foundMarker) {
                    foundMarker.openPopup();
                }
            });
        });
    }

    function renderAll() {
        renderMarkers();
        renderList();
    }

    // =========================
    // 🔎 LOAD PLACES
    // =========================
    async function loadPlaces() {
        const radius = radiusSelect ? radiusSelect.value : 1000;

        try {
            const res = await fetch(`/map/nearby?lat=\${lat}&lon=\${lon}&radius=\${radius}`);
            const data = await res.json();

            if (!data.success) {
                listDiv.innerHTML = `<div class=\"nearby-empty\">Impossible de charger les lieux à proximité.</div>`;
                countDiv.innerText = \"0\";
                clearMarkers();
                return;
            }

            allPlaces = data.places || [];
            renderAll();

        } catch (e) {
            console.error('Erreur chargement lieux :', e);
            listDiv.innerHTML = `<div class=\"nearby-empty\">Erreur serveur.</div>`;
            countDiv.innerText = \"0\";
            clearMarkers();
        }
    }

    // =========================
    // 🔘 BOUTONS FILTRES
    // =========================
    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const type = this.dataset.type;
            activeFilters[type] = !activeFilters[type];
            this.classList.toggle('active');
            renderAll();
        });
    });

    // =========================
    // 🔄 RADIUS
    // =========================
    if (radiusSelect) {
        radiusSelect.addEventListener('change', loadPlaces);
    }

    // =========================
    // 🚀 INIT GLOBAL
    // =========================
    initMap();
    loadPlaces();
});


</script>

";
        // line 1482
        yield "<script>
function showToast(msg) {
    var t = document.getElementById('toast');
    if (!t) return;
    t.innerText = msg;
    t.classList.add('show');
    setTimeout(function() { t.classList.remove('show'); }, 3000);
}
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
        return "loisirs/detail.html.twig";
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
        return array (  1788 => 1482,  1554 => 1250,  1550 => 1249,  1485 => 1186,  1314 => 1017,  1262 => 967,  1258 => 964,  628 => 335,  624 => 332,  579 => 288,  566 => 276,  558 => 272,  552 => 268,  549 => 267,  534 => 253,  528 => 248,  522 => 244,  519 => 243,  514 => 239,  503 => 237,  499 => 236,  494 => 233,  489 => 229,  478 => 227,  474 => 226,  469 => 223,  464 => 219,  449 => 217,  445 => 216,  440 => 213,  433 => 208,  427 => 204,  424 => 202,  419 => 200,  412 => 195,  409 => 194,  401 => 187,  397 => 185,  391 => 183,  389 => 182,  379 => 175,  369 => 168,  355 => 157,  342 => 146,  338 => 143,  333 => 140,  323 => 136,  320 => 135,  316 => 134,  310 => 130,  307 => 129,  302 => 125,  294 => 121,  288 => 118,  284 => 117,  280 => 116,  275 => 113,  273 => 112,  266 => 107,  255 => 105,  251 => 104,  247 => 103,  235 => 94,  227 => 89,  219 => 84,  211 => 79,  202 => 73,  197 => 70,  192 => 66,  183 => 59,  177 => 56,  173 => 54,  166 => 49,  159 => 45,  152 => 41,  145 => 37,  138 => 33,  126 => 26,  123 => 25,  108 => 11,  105 => 9,  92 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
{% endblock %}

{% block body %}

{# ===== PARTICLES ===== #}
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

{# ===== HERO ===== #}
<section class=\"hero-excursion\">
    <img src=\"{{ asset('uploads/' ~ excursion.imageUrl) }}\" alt=\"{{ excursion.titre }}\">
    <div class=\"overlay\"></div>
    <div class=\"hero-content\">
        <span class=\"hero-badge\">
            <i class=\"fas fa-compass\"></i>
            Excursion
        </span>
        <h1>{{ excursion.titre }}</h1>
        <div class=\"hero-stats\">
            <div class=\"stat-item\">
                <i class=\"fas fa-map-marker-alt\"></i>
                <span>{{ excursion.lieu }}</span>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-calendar-alt\"></i>
                <span>{{ excursion.date|date('d/m/Y') }}</span>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-clock\"></i>
                <span>{{ excursion.duree }} heures</span>
            </div>
            <div class=\"stat-item\">
                <i class=\"fas fa-users\"></i>
                <span>{{ excursion.nombrePlacesDisponibles }} places</span>
            </div>
        </div>

        {# Rating + Favoris dans le hero #}
        <div class=\"hero-meta\">
            <span class=\"rating-value\">
                ⭐ {{ userRating|default(0)|number_format(1) }}/5
            </span>
            <span id=\"favCount\" class=\"fav-count\">
                ❤️ {{ countFav|default(0) }}
            </span>
        </div>
    </div>
</section>

{# ===== MAIN CONTENT ===== #}
<main class=\"main-content\">
    <div class=\"content-grid\">

        {# ── Colonne gauche ── #}
        <div class=\"description-section\">
            <span class=\"section-label\">Description</span>
            <h2 class=\"section-title\">À Propos de Cette Excursion</h2>
            <p class=\"description-text\">{{ excursion.description }}</p>

            <div class=\"info-cards\">
                <div class=\"info-card\">
                    <div class=\"info-icon\"><i class=\"fas fa-map-marker-alt\"></i></div>
                    <h4>Lieu de départ</h4>
                    <p>{{ excursion.lieu }}</p>
                </div>
                <div class=\"info-card\">
                    <div class=\"info-icon\"><i class=\"fas fa-calendar-check\"></i></div>
                    <h4>Date de l'excursion</h4>
                    <p>{{ excursion.date|date('d/m/Y') }} — Départ à 14h00</p>
                </div>
                <div class=\"info-card\">
                    <div class=\"info-icon\"><i class=\"fas fa-clock\"></i></div>
                    <h4>Durée totale</h4>
                    <p>{{ excursion.duree }} heures d'aventure immersive</p>
                </div>
                <div class=\"info-card\">
                    <div class=\"info-icon\"><i class=\"fas fa-users\"></i></div>
                    <h4>Places disponibles</h4>
                    <p>{{ excursion.nombrePlacesDisponibles }} places restantes</p>
                </div>
            </div>

            <div class=\"rating-fav-container\">

    <!-- ⭐ NOTATION -->
    <div class=\"rating-section\">
        <span class=\"section-label\">Notation</span>
        <div class=\"rating\" id=\"ratingBox\" data-id=\"{{ excursion.idExcursion }}\">
            {% for i in 1..5 %}
                <span class=\"click-star {{ i <= userRating ? 'active' : '' }}\" data-value=\"{{ i }}\">★</span>
            {% endfor %}
        </div>
    </div>

    <!-- ❤️ FAVORIS -->
    <div class=\"fav-section\">
        {% if app.user %}
            <button
                type=\"button\"
                id=\"favBtn\"
                data-id=\"{{ excursion.idExcursion }}\"
                class=\"fav-btn {{ isFavori ? 'active' : '' }}\">
                ❤️ {{ isFavori ? 'Retirer des favoris' : 'Ajouter aux favoris' }}
            </button>
        {% else %}
            <a href=\"{{ path('app_login') }}\" class=\"fav-btn-link\">
                ❤️ Connectez-vous
            </a>
        {% endif %}
    </div>

</div>
            {# ── Galerie ── #}
            {% if excursion.galerie|default(false) %}
            <div class=\"gallery-section\">
                <span class=\"section-label\">Galerie Photos</span>
                <h3 class=\"section-title\">Découvrez les Lieux</h3>
                <div class=\"gallery-grid\">
                    {% for photo in excursion.galerie %}
                    <div class=\"gallery-item\">
                        <img src=\"{{ asset('uploads/galerie/' ~ photo) }}\" alt=\"Galerie\">
                        <div class=\"gallery-overlay\"><i class=\"fas fa-expand\"></i></div>
                    </div>
                    {% endfor %}
                </div>
            </div>
            {% endif %}
        </div>

        {# ── Sidebar réservation ── #}
        <aside class=\"booking-sidebar\">
            <div class=\"booking-card\">

              

    <div class=\"price-section\">


    <p class=\"price-value\">
        <span class=\"price-currency\">TND</span>
        <span id=\"prix-adulte\">
            {{ prix.prix_adulte|round }}
        </span>
    </p>

    <p class=\"price-per\">par adulte</p>

    <div class=\"price-breakdown\">

        <div class=\"price-item\">
            <span>Adulte</span>
            <span id=\"prix-adulte-item\">
                {{ prix.prix_adulte|round }} TND
            </span>
        </div>

        <div class=\"price-item\">
            <span>Enfant</span>
            <span id=\"prix-enfant-item\">
                {{ prix.prix_enfant|round }} TND
            </span>
        </div>

        <div class=\"price-item\">
            <span>Bébé</span>
            <span id=\"prix-bebe-item\">
                {% if prix.prix_bebe > 0 %}
                    {{ prix.prix_bebe|round }} TND
                {% else %}
                    Gratuit
                {% endif %}
            </span>
        </div>

    </div>

</div>
                {# ── FORMULAIRE DE RÉSERVATION / PAIEMENT ── #}
                <form class=\"booking-form\"
                      action=\"{{ path('app_reserver_excursion', {idExcursion: excursion.idExcursion}) }}\"
                      method=\"POST\"
                      id=\"reservationForm\">

                    {# CSRF #}
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reservation') }}\">
                    {# Code promo caché #}
<input type=\"hidden\" name=\"promo_code\" id=\"hiddenPromo\" value=\"\">
                    {# Date #}
                    <div class=\"form-group\">
                        <label>Date de départ</label>
                        <input type=\"date\"
                               name=\"date\"
                               value=\"{{ excursion.date|date('Y-m-d') }}\"
                               required>
                    </div>

                    {# Adultes #}
                    <div class=\"form-group\">
                        <label>Adultes</label>
                        <select id=\"nb_adultes\" name=\"nb_adultes\">
                            {% for i in 0..excursion.nombrePlacesDisponibles %}
                                <option value=\"{{ i }}\" {% if i == 1 %}selected{% endif %}>{{ i }}</option>
                            {% endfor %}
                        </select>
                    </div>

                    {# Enfants #}
                    <div class=\"form-group\">
                        <label>Enfants</label>
                        <select id=\"nb_enfants\" name=\"nb_enfants\">
                            {% for i in 0..excursion.nombrePlacesDisponibles %}
                                <option value=\"{{ i }}\">{{ i }}</option>
                            {% endfor %}
                        </select>
                    </div>

                    {# Bébés #}
                    <div class=\"form-group\">
                        <label>Bébés</label>
                        <select id=\"nb_bebes\" name=\"nb_bebes\">
                            {% for i in 0..excursion.nombrePlacesDisponibles %}
                                <option value=\"{{ i }}\">{{ i }}</option>
                            {% endfor %}
                        </select>
                    </div>

                    {# Total dynamique #}
<div class=\"total-box\" id=\"total-price\" data-base=\"0\">
    {{ excursion.prixAdulte|default(0) }} TND
</div>

                    {# Message d'erreur places #}
                    <div id=\"placesError\" class=\"places-error\" style=\"display:none;\">
                        ⚠️ Nombre de participants dépasse les places disponibles.
                    </div>

                    {# Code promo #}

<p onclick=\"togglePromo()\" class=\"promo-toggle\"> Vous avez un code promo ?</p>

<div id=\"promoSection\" class=\"promo-section\" style=\"display:none;\">
    <div class=\"promo-box\">
        <input type=\"text\" id=\"promoInput\" placeholder=\"Code promo\">
        <button type=\"button\" onclick=\"applyPromo()\" class=\"btn-add\">Ajouter</button>
    </div>

    <p id=\"promoMessage\"></p>
    <p onclick=\"togglePromo()\" class=\"close-link\">Fermer ✕</p>
</div>

                    {# Bouton payer #}
                    {% if app.user %}
<button type=\"button\" id=\"payBtn\" class=\"btn-pay\">
                            Réserver et payer →
                        </button>
                    {% else %}
                        <a href=\"{{ path('app_login') }}\" class=\"btn-pay\">
                            🔐 Se connecter pour payer →
                        </a>
                    {% endif %}

                    <div class=\"guarantee-badge\">
                        ✔ Réservation sécurisée — Annulation gratuite
                    </div>
                </form>
            </div>
        </aside>

    </div>
</main>

{# ===== SECTION CARTE ===== #}
<section class=\"excursion-map-section\">

    <div class=\"map-header\">
        <div class=\"map-header-left\">
            <span class=\"map-badge-label\">📍 Autour de cette excursion</span>
            <h3>Carte des services à proximité</h3>
            <p>Découvrez les cafés, restaurants et parkings proches du lieu.</p>
        </div>
        <div class=\"map-toolbar\">
            <div class=\"filter-group\">
                <button type=\"button\" class=\"map-filter-btn active\" data-type=\"cafe\">☕ Cafés</button>
                <button type=\"button\" class=\"map-filter-btn active\" data-type=\"restaurant\">🍽️ Restaurants</button>
                <button type=\"button\" class=\"map-filter-btn active\" data-type=\"parking\">🅿️ Parkings</button>
            </div>
            <select id=\"map-radius\" class=\"map-radius-select\">
                <option value=\"500\">500 m</option>
                <option value=\"1000\" selected>1 km</option>
                <option value=\"2000\">2 km</option>
                <option value=\"5000\">5 km</option>
            </select>
        </div>
    </div>

    <div class=\"map-body\">
        <div class=\"map-panel\">
            <div id=\"excursion-map\"></div>
            <div id=\"map-loading\" class=\"map-loading-overlay hidden\">⏳ Chargement des lieux…</div>
        </div>
        <div class=\"nearby-panel\">
            <div class=\"nearby-panel-header\">
                <h4>Lieux trouvés</h4>
                <span id=\"nearby-count\" class=\"nearby-count-badge\">0</span>
            </div>
            <div id=\"nearby-list\" class=\"nearby-list\">
                <div class=\"nearby-empty\">
                    <p>Aucun lieu chargé pour le moment.</p>
                    <p>Sélectionnez un type et un rayon pour lancer la recherche.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{# ===== TOAST ===== #}
<div id=\"toast\" class=\"toast\"></div>

{# ===== STYLES ===== #}
<style>

/* 🔥 CONTAINER FLEX */
.rating-fav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    margin-top: 20px;
}

/* ⭐ NOTATION */
.rating-section {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

/* ⭐ STARS */
.rating {
    display: flex;
    gap: 6px;
}

.click-star {
    font-size: 22px;
    cursor: pointer;
    color: #ccc;
    transition: 0.2s;
}

.click-star.active,
.click-star:hover {
    color: #FFC107;
    transform: scale(1.2);
}

/* ❤️ FAVORIS */
.fav-section {
    display: flex;
    align-items: center;
}

/* ❤️ BUTTON */
.fav-btn {
    background: transparent;
    border: 1px solid #ff4d6d;
    color: #ff4d6d;
    padding: 10px 18px;
    border-radius: 25px;
    cursor: pointer;
    transition: 0.3s;
    font-weight: 500;
}

.fav-btn:hover {
    background: #ff4d6d;
    color: white;
    transform: translateY(-2px);
}

/* ❤️ ACTIVE */
.fav-btn.active {
    background: #ff4d6d;
    color: white;
    border-color: #ff4d6d;
}

/* 🔗 lien */
.fav-btn-link {
    color: #FFC107;
    text-decoration: none;
}

/* 📱 RESPONSIVE */
@media (max-width: 600px) {
    .rating-fav-container {
        flex-direction: column;
        align-items: flex-start;
    }

    .fav-section {
        width: 100%;
    }

    .fav-btn {
        width: 100%;
        text-align: center;
    }
}






.btn-pay {
    width: 100%;
    padding: 14px 20px;
    border: none;
    border-radius: 30px;

    background: linear-gradient(135deg, #FFC107, #FF8F00);
    color: #0B2D4A;

    font-weight: 700;
    font-size: 16px;
    letter-spacing: 0.5px;

    cursor: pointer;
    transition: all 0.3s ease;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-top:50px;
    box-shadow: 0 8px 20px rgba(255, 193, 7, 0.3);
}

.btn-pay:hover {
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 12px 30px rgba(255, 193, 7, 0.5);
}

.btn-pay:active {
    transform: scale(0.98);
}

.btn-pay:disabled {
    background: #ccc;
    cursor: not-allowed;
    box-shadow: none;
}

.btn-icon {
    font-size: 18px;
}
/* ─── Variables ─── */
:root {
    --gold: #FFC107;
    --gold-dark: #FF9800;
    --navy: #0B2D4A;
    --navy-deep: #08263E;
    --white-60: rgba(255,255,255,0.6);
    --white-85: rgba(255,255,255,0.85);
    --border-gold: rgba(255,193,7,0.2);
}

/* ─── Particles ─── */
.particles-bg {
    position: fixed; top: 0; left: 0;
    width: 100%; height: 100%;
    pointer-events: none; z-index: 0; overflow: hidden;
}
.particle {
    position: absolute; width: 6px; height: 6px;
    background: var(--gold); border-radius: 50%;
    opacity: 0.1; animation: particleFloat 15s infinite linear;
}
@keyframes particleFloat {
    0%   { transform: translateY(100vh) rotate(0deg); opacity: 0; }
    10%  { opacity: 0.15; }
    90%  { opacity: 0.15; }
    100% { transform: translateY(-100vh) rotate(720deg); opacity: 0; }
}

/* ─── Hero ─── */
.hero-excursion {
    position: relative; height: 70vh; min-height: 500px;
    overflow: hidden; margin-top: 80px;
}
.hero-excursion img {
    width: 100%; height: 100%; object-fit: cover; transform: scale(1.05);
}
.hero-excursion .overlay {
    position: absolute; inset: 0;
    background: linear-gradient(180deg,
        rgba(11,45,74,0.4) 0%,
        rgba(11,45,74,0.2) 40%,
        rgba(11,45,74,0.9) 100%);
}
.hero-content {
    position: absolute; bottom: 80px; left: 80px; right: 80px; z-index: 2;
}
.hero-badge {
    display: inline-flex; align-items: center; gap: 10px;
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    color: var(--navy); padding: 10px 25px; border-radius: 30px;
    font-size: 14px; font-weight: 600; text-transform: uppercase;
    letter-spacing: 1px; margin-bottom: 25px;
}
.hero-content h1 {
    font-family: 'Playfair Display', serif; font-size: 64px;
    font-weight: 800; color: white; margin: 0 0 25px 0;
    text-shadow: 0 4px 30px rgba(0,0,0,0.3); line-height: 1.1;
}
.hero-stats { display: flex; gap: 25px; flex-wrap: wrap; margin-bottom: 20px; }
.stat-item {
    display: flex; align-items: center; gap: 12px;
    background: rgba(255,255,255,0.1); padding: 15px 25px;
    border-radius: 18px; border: 1px solid rgba(255,193,7,0.25);
    transition: all 0.3s ease;
}
.stat-item:hover {
    background: rgba(255,193,7,0.15);
    border-color: rgba(255,193,7,0.5); transform: translateY(-3px);
}
.stat-item i { color: var(--gold); font-size: 20px; }
.stat-item span { font-size: 15px; font-weight: 500; color: white; }

/* Hero meta (rating + fav) */
.hero-meta {
    display: flex; align-items: center; gap: 20px; margin-top: 8px;
}
.rating-value {
    font-size: 15px; font-weight: 600; color: white;
    background: rgba(255,255,255,0.1);
    padding: 8px 18px; border-radius: 20px;
    border: 1px solid rgba(255,193,7,0.25);
}
.fav-count {
    font-size: 15px; font-weight: 600; color: white;
    background: rgba(255,255,255,0.1);
    padding: 8px 18px; border-radius: 20px;
    border: 1px solid rgba(255,100,100,0.3);
    transition: transform 0.2s;
}

/* ─── Main content ─── */
.main-content {
    position: relative; z-index: 2;
    padding: 80px; max-width: 1600px; margin: 0 auto;
}
.content-grid {
    display: grid; grid-template-columns: 1fr 420px; gap: 60px;
}
.description-section { animation: fadeUp 1s ease 0.6s both; }
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(40px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* ─── Labels & titres ─── */
.section-label {
    display: inline-flex; align-items: center; gap: 12px;
    font-size: 14px; color: var(--gold); text-transform: uppercase;
    letter-spacing: 3px; margin-bottom: 20px; font-weight: 500;
}
.section-label::before {
    content: ''; width: 40px; height: 3px;
    background: linear-gradient(90deg, var(--gold), var(--gold-dark));
    border-radius: 3px;
}
.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 40px; color: white; margin: 0 0 30px 0;
}
.description-text {
    font-size: 18px; line-height: 2;
    color: var(--white-85); margin: 0 0 50px 0;
}

/* ─── Info cards ─── */
.info-cards {
    display: grid; grid-template-columns: repeat(2, 1fr);
    gap: 25px; margin-bottom: 40px;
}
.info-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid var(--border-gold);
    border-radius: 20px; padding: 30px;
    transition: all 0.4s ease; position: relative; overflow: hidden;
}
.info-card::before {
    content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px;
    background: linear-gradient(90deg, var(--gold), var(--gold-dark));
    transform: scaleX(0); transition: transform 0.4s ease;
}
.info-card:hover::before { transform: scaleX(1); }
.info-card:hover {
    transform: translateY(-8px);
    border-color: rgba(255,193,7,0.35);
}
.info-icon {
    width: 60px; height: 60px;
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    border-radius: 16px; display: flex; align-items: center;
    justify-content: center; margin: 0 0 20px 0;
    box-shadow: 0 10px 30px rgba(255,193,7,0.25);
}
.info-icon i { font-size: 24px; color: var(--navy); }
.info-card h4 {
    font-family: 'Playfair Display', serif;
    font-size: 20px; color: var(--gold); margin: 0 0 10px 0;
}
.info-card p { font-size: 15px; color: rgba(255,255,255,0.75); line-height: 1.6; margin: 0; }

/* ─── Rating ─── */
.rating-section { margin-bottom: 30px; }
.click-star {
    font-size: 32px; cursor: pointer; color: #ccc;
    transition: all 0.2s ease; display: inline-block;
}
.click-star.active  { color: var(--gold); }
.click-star.hovered { color: #FFD700; transform: scale(1.2); }
.click-star.animate { animation: popStar 0.3s ease; }
@keyframes popStar {
    0%   { transform: scale(1); }
    50%  { transform: scale(1.5); }
    100% { transform: scale(1); }
}

/* ─── Favoris ─── */
.fav-section { margin-bottom: 40px; }
.fav-btn {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 12px 24px; border-radius: 30px;
    border: 1px solid rgba(255,100,100,0.4);
    background: transparent; color: rgba(255,255,255,0.7);
    font-size: 15px; font-weight: 500; cursor: pointer;
    transition: all 0.3s;
}
.fav-btn:hover, .fav-btn.active {
    background: rgba(220,50,50,0.15);
    border-color: rgba(255,80,80,0.6);
    color: #ff6b6b;
}
.fav-btn-link {
    display: inline-block; color: rgba(255,255,255,0.5);
    font-size: 14px; text-decoration: none; margin-bottom: 10px;
}

/* ─── Gallery ─── */
.gallery-section { margin-bottom: 50px; }
.gallery-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; }
.gallery-item { position: relative; aspect-ratio: 1; border-radius: 15px; overflow: hidden; cursor: pointer; }
.gallery-item img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
.gallery-item:hover img { transform: scale(1.15); }
.gallery-overlay {
    position: absolute; inset: 0;
    background: rgba(11,45,74,0.5);
    display: flex; align-items: center; justify-content: center;
    opacity: 0; transition: opacity 0.3s ease;
}
.gallery-item:hover .gallery-overlay { opacity: 1; }
.gallery-overlay i { color: var(--gold); font-size: 28px; }

/* ─── Booking sidebar ─── */
.booking-sidebar { position: sticky; top: 120px; animation: fadeRight 1s ease 0.8s both; }
@keyframes fadeRight {
    from { opacity: 0; transform: translateX(50px); }
    to   { opacity: 1; transform: translateX(0); }
}
.booking-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid var(--border-gold);
    border-radius: 30px; padding: 45px;
}
.price-section {
    text-align: center; padding-bottom: 30px;
    margin-bottom: 30px; border-bottom: 1px solid rgba(255,193,7,0.15);
}
.price-label { font-size: 14px; color: var(--white-60); margin-bottom: 10px; }
.price-value {
    font-family: 'Playfair Display', serif; font-size: 56px; font-weight: 700;
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text; margin: 0;
}
.price-currency { font-size: 24px; }
.price-per { font-size: 16px; color: var(--white-60); }
.price-breakdown { margin-top: 20px; display: flex; flex-direction: column; gap: 12px; }
.price-item {
    display: flex; justify-content: space-between; align-items: center;
    padding: 12px 15px; background: rgba(255,255,255,0.03); border-radius: 12px;
    font-size: 14px; color: rgba(255,255,255,0.7);
}
.price-item span:last-child { color: var(--gold); font-weight: 600; }

/* ─── Booking form ─── */
.booking-form { margin-top: 10px; }
.form-group { margin-bottom: 20px; }
.form-group label {
    display: block; font-size: 14px;
    color: rgba(255,255,255,0.8); margin-bottom: 10px; font-weight: 500;
}
.form-group input,
.form-group select {
    width: 100%; padding: 16px 20px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,193,7,0.2);
    border-radius: 15px; color: white; font-size: 15px;
    transition: all 0.3s ease;
    box-sizing: border-box;
}
.form-group input:focus,
.form-group select:focus {
    outline: none; border-color: var(--gold);
    background: rgba(255,193,7,0.08);
    box-shadow: 0 0 20px rgba(255,193,7,0.15);
}
.form-group select option { background: var(--navy); color: white; }

/* ─── Total box ─── */
.total-box {
    margin: 20px 0; padding: 20px;
    background: rgba(255,193,7,0.07);
    border: 1px solid rgba(255,193,7,0.25);
    border-radius: 16px; text-align: center;
    min-height: 60px; display: flex;
    align-items: center; justify-content: center;
    transition: all 0.3s;
}

/* ─── Erreur places ─── */
.places-error {
    background: rgba(220,50,50,0.1);
    border: 1px solid rgba(220,50,50,0.3);
    color: #ff6b6b; border-radius: 12px;
    padding: 12px 16px; font-size: 13px;
    margin-bottom: 10px; text-align: center;
}

/* ─── Code promo ─── */
.promo-toggle {
    color: #4dd0e1; cursor: pointer; font-size: 14px;
    margin-top: 8px; transition: 0.3s; user-select: none;
}
.promo-toggle:hover { color: #81d4fa; }
.promo-section {
    margin-top: 15px; padding: 20px; border-radius: 16px;
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,193,7,0.2);
}
.promo-box { display: flex; gap: 10px; }
#promoInput {
    flex: 1; padding: 12px;
    background: transparent;
    border: 1px solid rgba(255,193,7,0.3);
    border-radius: 10px; color: white; outline: none; transition: 0.3s;
    box-sizing: border-box;
}
#promoInput::placeholder { color: rgba(255,255,255,0.4); }
#promoInput:focus { border-color: var(--gold); }
.btn-add {
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    color: #111; border: none; padding: 12px 18px;
    border-radius: 10px; font-weight: 600; cursor: pointer; transition: 0.3s;
}
.btn-add:hover { transform: translateY(-2px); box-shadow: 0 4px 10px rgba(255,193,7,0.4); }
#promoMessage { margin-top: 10px; font-size: 13px; }
.close-link {
    margin-top: 10px; color: #64b5f6;
    cursor: pointer; font-size: 13px; user-select: none;
}
.close-link:hover { color: #90caf9; }

/* ─── Bouton réserver ─── */
.btn-reserve {
    width: 100%; padding: 20px 35px;
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    color: var(--navy); border: none; border-radius: 18px;
    font-size: 17px; font-weight: 700; cursor: pointer;
    transition: all 0.4s ease;
    display: flex; align-items: center; justify-content: center; gap: 12px;
    box-shadow: 0 12px 35px rgba(255,193,7,0.35);
    margin-top: 20px; text-decoration: none;
}
.btn-reserve:hover { transform: translateY(-4px); box-shadow: 0 18px 50px rgba(255,193,7,0.5); }
.btn-reserve:disabled { background: grey; cursor: not-allowed; transform: none; box-shadow: none; }

.guarantee-badge {
    display: flex; align-items: center; gap: 12px; padding: 18px;
    background: rgba(76,175,80,0.1);
    border: 1px solid rgba(76,175,80,0.3);
    border-radius: 15px; margin-top: 20px;
    font-size: 13px; color: rgba(255,255,255,0.85);
}

/* ─── Toast ─── */
.toast {
    position: fixed; bottom: 30px; right: 30px;
    background: rgba(0,0,0,0.85); color: white;
    padding: 14px 22px; border-radius: 12px; font-size: 14px;
    opacity: 0; transform: translateY(20px);
    transition: 0.4s; z-index: 9999;
    border: 1px solid rgba(255,255,255,0.1);
}
.toast.show { opacity: 1; transform: translateY(0); }

/* ─── Map ─── */
.excursion-map-section {
    max-width: 1600px; margin: 0 auto;
    padding: 0 80px 80px;
    position: relative; z-index: 2;
    display: flex; flex-direction: column;
}
.excursion-map-section > .map-header {
    display: flex; justify-content: space-between;
    align-items: flex-end; flex-wrap: wrap;
    gap: 20px; margin-bottom: 24px; width: 100%;
}
.map-header-left .map-badge-label {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,193,7,0.1); border: 1px solid rgba(255,193,7,0.35);
    color: var(--gold); padding: 6px 18px; border-radius: 30px;
    font-size: 13px; font-weight: 600; margin-bottom: 12px;
    margin-top:80px;
}
.map-header-left h3 {
    font-family: 'Playfair Display', serif; font-size: 32px; color: white; margin: 0 0 8px;
}
.map-header-left p { font-size: 15px; color: var(--white-60); margin: 0; }
.map-toolbar { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; flex-shrink: 0; }
.filter-group { display: flex; gap: 8px; flex-wrap: wrap; }
.map-filter-btn {
    padding: 10px 18px; background: transparent;
    border: 1px solid rgba(255,255,255,0.2);
    color: rgba(255,255,255,0.75); border-radius: 30px;
    font-size: 13px; font-weight: 600; cursor: pointer;
    transition: all 0.25s ease;
}
.map-filter-btn.active {
    background: rgba(255,193,7,0.15);
    border-color: rgba(255,193,7,0.5); color: var(--gold);
}
.map-filter-btn:hover { border-color: rgba(255,193,7,0.4); color: var(--gold); }
.map-radius-select {
    padding: 10px 16px; background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,193,7,0.25);
    color: white; border-radius: 12px; font-size: 13px; cursor: pointer;
}
.map-radius-select option { background: var(--navy); }
.map-body {
    display: grid; grid-template-columns: 1fr 420px;
    grid-template-rows: 560px; border-radius: 20px;
    overflow: hidden; border: 1px solid rgba(255,193,7,0.15);
    background: rgba(255,255,255,0.02); width: 100%;
}
.map-panel { position: relative; min-width: 0; height: 560px; }
#excursion-map { width: 100% !important; height: 560px; display: block; }
.map-loading-overlay {
    position: absolute; bottom: 14px; left: 14px;
    background: rgba(11,45,74,0.85); color: var(--gold);
    padding: 8px 16px; border-radius: 10px; font-size: 13px;
    font-weight: 500; border: 1px solid rgba(255,193,7,0.3); z-index: 500;
}
.map-loading-overlay.hidden { display: none; }
.nearby-panel {
    background: rgba(8,30,50,0.95);
    border-left: 1px solid rgba(255,193,7,0.1);
    display: flex; flex-direction: column; height: 560px; overflow: hidden;
}
.nearby-panel-header {
    display: flex; justify-content: space-between; align-items: center;
    padding: 18px 20px 14px;
    border-bottom: 1px solid rgba(255,255,255,0.06); flex-shrink: 0;
}
.nearby-panel-header h4 { font-size: 15px; font-weight: 600; color: white; margin: 0; }
.nearby-count-badge {
    background: var(--gold); color: var(--navy); border-radius: 20px;
    padding: 3px 12px; font-size: 13px; font-weight: 700;
    min-width: 28px; text-align: center;
}
.nearby-list {
    overflow-y: auto; flex: 1;
    scrollbar-width: thin; scrollbar-color: rgba(255,193,7,0.3) transparent;
}
.nearby-list::-webkit-scrollbar { width: 5px; }
.nearby-list::-webkit-scrollbar-thumb { background: rgba(255,193,7,0.3); border-radius: 10px; }
.nearby-empty { padding: 40px 20px; text-align: center; font-size: 13px; color: rgba(255,255,255,0.4); line-height: 1.8; }
.nearby-card {
    display: flex; align-items: flex-start; gap: 12px;
    padding: 14px 18px; border-bottom: 1px solid rgba(255,255,255,0.04);
    transition: background 0.2s;
}
.nearby-card:hover { background: rgba(255,193,7,0.05); }
.nearby-content { flex: 1; min-width: 0; }
.nearby-top { display: flex; justify-content: space-between; align-items: flex-start; gap: 8px; margin-bottom: 4px; }
.nearby-top h5 { font-size: 13px; font-weight: 600; color: white; margin: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.nearby-distance { font-size: 12px; font-weight: 700; color: var(--gold); white-space: nowrap; flex-shrink: 0; }
.nearby-type { font-size: 11px; color: rgba(255,255,255,0.55); margin-bottom: 6px; }
.nearby-actions { display: flex; gap: 8px; flex-wrap: wrap; }
.focus-place-btn {
    padding: 5px 12px; font-size: 11px; font-weight: 600;
    background: linear-gradient(135deg, rgba(255,193,7,0.15), rgba(255,152,0,0.1));
    border: 1px solid rgba(255,193,7,0.4); color: var(--gold);
    border-radius: 20px; cursor: pointer; transition: all 0.25s ease;
}
.focus-place-btn:hover {
    background: rgba(255,193,7,0.25); color: white; transform: translateY(-1px);
}

/* ─── Responsive ─── */
@media (max-width: 1200px) {
    .content-grid { grid-template-columns: 1fr; }
    .booking-sidebar { position: static; }
    .hero-content { left: 40px; right: 40px; }
    .hero-content h1 { font-size: 48px; }
    .main-content { padding: 60px 40px; }
    .gallery-grid { grid-template-columns: repeat(2, 1fr); }
    .info-cards { grid-template-columns: 1fr; }
    .excursion-map-section { padding: 0 40px 60px; }
    .map-body { grid-template-columns: 1fr; grid-template-rows: 380px auto; }
    .map-panel { height: 380px; }
    #excursion-map { height: 380px !important; }
    .nearby-panel { height: auto; border-left: none; border-top: 1px solid rgba(255,193,7,0.1); }
    .nearby-list { max-height: 300px; }
}
@media (max-width: 768px) {
    .hero-content { left: 25px; right: 25px; bottom: 50px; }
    .hero-content h1 { font-size: 36px; }
    .hero-stats { flex-direction: column; gap: 15px; }
    .main-content { padding: 40px 25px; }
    .section-title { font-size: 32px; }
    .gallery-grid { grid-template-columns: repeat(2, 1fr); }
    .excursion-map-section { padding: 0 20px 40px; }
    .excursion-map-section > .map-header { flex-direction: column; }
    .map-header-left h3 { font-size: 24px; }
    .map-toolbar { width: 100%; }
    .map-filter-btn, .map-radius-select { width: 100%; }
    .map-panel { height: 260px; }
    #excursion-map { height: 260px !important; }
}
</style>

{# ===== SCRIPTS ===== #}
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>

{# ── Script 1 : Calcul total + Code promo (PAIEMENT) ── #}
<script>
let activeDiscount = 0;

// 🎟️ GESTION CODE PROMO
function applyPromo() {
    const input = document.getElementById('promoInput');
    const message = document.getElementById('promoMessage');

    if (!input.value) {
        message.style.color = \"red\";
        message.innerText = \"❌ Entrez un code\";
        return;
    }

    const code = input.value.toUpperCase();

    const discountMap = {
        'BRONZE10': 10,
        'SILVER15': 15,
        'GOLD20': 20
    };

    activeDiscount = discountMap[code] || 0;

    if (!activeDiscount) {
        message.style.color = \"red\";
        message.innerText = \"❌ Code invalide\";
        return;
    }

    message.style.color = \"#4caf50\";
    message.innerText = \"✅ -\" + activeDiscount + \"% appliqué !\";

    updatePrix(); // 🔥 recalcul total
}

// 💰 CALCUL TOTAL (source = backend)
async function updatePrix() {

    const totalEl = document.getElementById('total-price');

    let a = parseInt(document.getElementById('nb_adultes').value) || 0;
    let e = parseInt(document.getElementById('nb_enfants').value) || 0;
    let b = parseInt(document.getElementById('nb_bebes').value) || 0;

    try {
        let response = await fetch('/prix-intelligent', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body:
                'id={{ excursion.idExcursion }}' +
                '&adultes=' + a +
                '&enfants=' + e +
                '&bebes=' + b
        });

        let data = await response.json();

        if (!data || data.error) {
            totalEl.innerHTML = \"<span style='color:red'>Erreur calcul</span>\";
            return;
        }

        // 🔥 TOTAL BACKEND
        let total = data.total;

        // 🔥 APPLIQUER PROMO
        if (activeDiscount > 0) {
            total = total * (1 - activeDiscount / 100);
        }

        // 🔥 AFFICHAGE
        totalEl.innerHTML = `
            <div>
                <strong>\${total.toFixed(2)} TND</strong><br>
                <small>
                    \${a} adulte(s), \${e} enfant(s), \${b} bébé(s)
                    \${activeDiscount > 0 ? ' — 🎟️ -' + activeDiscount + '%' : ''}
                </small>
            </div>
        `;

    } catch (error) {
        console.error(error);
        totalEl.innerHTML = \"<span style='color:red'>Erreur serveur</span>\";
    }
}

// 🚀 INIT + EVENTS
document.addEventListener('DOMContentLoaded', function () {

    const adultes = document.getElementById('nb_adultes');
    const enfants = document.getElementById('nb_enfants');
    const bebes   = document.getElementById('nb_bebes');

    const payBtn = document.getElementById('payBtn');
    const form   = document.getElementById('reservationForm');

    let isSubmitting = false;

    // 🔥 EVENTS
    adultes.addEventListener('change', updatePrix);
    enfants.addEventListener('change', updatePrix);
    bebes.addEventListener('change', updatePrix);

    // 🔥 STRIPE (anti double clic)
    if (payBtn && form) {
        payBtn.addEventListener('click', function () {
            if (isSubmitting) return;

            isSubmitting = true;
            this.disabled = true;
            this.innerText = \"⏳ Redirection...\";

            form.submit();
        });
    }

    // 🔥 INITIALISATION
    updatePrix();
});
document.addEventListener('DOMContentLoaded', function () {

    const adultes = document.getElementById('nb_adultes');
    const enfants = document.getElementById('nb_enfants');
    const bebes   = document.getElementById('nb_bebes');

    const payBtn = document.getElementById('payBtn');
    const form   = document.getElementById('reservationForm');

    let isSubmitting = false;

    // 🔥 EVENTS
    adultes.addEventListener('change', updatePrix);
    enfants.addEventListener('change', updatePrix);
    bebes.addEventListener('change', updatePrix);

payBtn.addEventListener('click', function () {
    if (isSubmitting) return;

    isSubmitting = true;
    this.disabled = true;
    this.innerText = \"⏳ Redirection...\";

    // 🔥 RÉCUPÉRER LE CODE PROMO
    const promoInput = document.getElementById('promoInput');
    const code = promoInput.value.trim().toUpperCase();

    // 🔥 AJOUTER AU FORMULAIRE
    if (code) {
        let hidden = document.createElement('input');
        hidden.type = 'hidden';
        hidden.name = 'promo_code';
        hidden.value = code;
        form.appendChild(hidden);
    }

    form.submit();
});

    // 🔥 INIT
    updatePrix();
});
document.addEventListener('DOMContentLoaded', function () {
    var ratingBox = document.getElementById('ratingBox');
    var stars     = document.querySelectorAll('.click-star');

    if (!ratingBox) return;

    var currentRating = 0;

    stars.forEach(function(star) {
        star.addEventListener('click', function () {
            var value    = parseInt(this.dataset.value);
            var id       = ratingBox.dataset.id;
            var final    = (currentRating === value) ? 0 : value;

            fetch('/excursion/' + id + '/rate', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'rating=' + final
            })
            .then(function(res) {
                if (res.status === 401) { window.location.href = \"/login\"; return null; }
                return res.json();
            })
            .then(function(data) {
                if (!data || !data.success) return;
                currentRating = final;
                stars.forEach(function(s) { s.classList.remove('active', 'animate'); });
                stars.forEach(function(s) {
                    if (s.dataset.value <= final) {
                        s.classList.add('active', 'animate');
                        setTimeout(function() { s.classList.remove('animate'); }, 300);
                    }
                });
                showToast(final > 0 ? '⭐ Note enregistrée !' : 'Note supprimée');
            });
        });

        star.addEventListener('mouseover', function () {
            var val = this.dataset.value;
            stars.forEach(function(s) {
                s.classList.remove('hovered');
                if (s.dataset.value <= val) s.classList.add('hovered');
            });
        });

        star.addEventListener('mouseout', function () {
            stars.forEach(function(s) { s.classList.remove('hovered'); });
        });
    });
});
</script>

{# ── Script 3 : Favoris ── #}
<script>
document.addEventListener('DOMContentLoaded', function () {
    var btn     = document.getElementById('favBtn');
    var countEl = document.getElementById('favCount');

    if (!btn) return;

    btn.addEventListener('click', function () {
        var id = btn.dataset.id;
        if (!id) { window.location.href = \"/login\"; return; }
        if (btn.disabled) return;
        btn.disabled = true;

        fetch('/favoris/' + id, {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(function(res) {
            if (res.status === 401) { window.location.href = \"/login\"; return null; }
            if (!res.ok) throw new Error('Erreur HTTP');
            return res.json();
        })
        .then(function(data) {
            if (!data || !data.success) return;

            if (data.isFavori) {
                btn.classList.add('active');
                btn.innerHTML = '❤️ Retirer des favoris';
                showToast('❤️ Ajouté aux favoris !');
            } else {
                btn.classList.remove('active');
                btn.innerHTML = '❤️ Ajouter aux favoris';
                showToast('💔 Retiré des favoris');
            }

            if (countEl) {
                countEl.innerHTML = '❤️ ' + data.count;
                countEl.style.transform = 'scale(1.3)';
                setTimeout(function() { countEl.style.transform = 'scale(1)'; }, 200);
            }
        })
        .catch(function() { console.error('Erreur favoris'); })
        .finally(function() { btn.disabled = false; });
    });
});
</script>

<script>
function togglePromo() {
    const section = document.getElementById('promoSection');

    if (!section) return;

    if (section.style.display === \"none\" || section.style.display === \"\") {
        section.style.display = \"block\";
    } else {
        section.style.display = \"none\";
    }
}
</script>
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', async function () {
    const lieu = {{ excursion.lieu|json_encode|raw }};
    const title = {{ excursion.titre|json_encode|raw }};

    const listDiv = document.getElementById('nearby-list');
    const countDiv = document.getElementById('nearby-count');
    const radiusSelect = document.getElementById('map-radius');
    const filterButtons = document.querySelectorAll('.map-filter-btn');

    let lat = null;
    let lon = null;

    let map = null;
    let markers = [];
    let allPlaces = [];

    const activeFilters = {
        cafe: true,
        restaurant: true,
        parking: true
    };

    // =========================
    // 🔎 GEOCODE
    // =========================
    try {
        const res = await fetch(`/map/geocode?lieu=\${encodeURIComponent(lieu)}`);
        const data = await res.json();

        if (data.success) {
            lat = parseFloat(data.lat);
            lon = parseFloat(data.lon);
        }
    } catch (e) {
        console.error('Erreur geocode :', e);
    }

    if (!lat || !lon) {
        lat = 36.8065;
        lon = 10.1815;
    }

    // =========================
    // 🗺️ INIT MAP
    // =========================
    function initMap() {
        if (map) return;

        map = L.map('excursion-map').setView([lat, lon], 14);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        L.marker([lat, lon])
            .addTo(map)
            .bindPopup(\"📍 \" + title)
            .openPopup();

        setTimeout(() => map.invalidateSize(), 300);
    }

    // =========================
    // 🧹 CLEAR MARKERS
    // =========================
    function clearMarkers() {
        if (!map) return;
        markers.forEach(marker => map.removeLayer(marker));
        markers = [];
    }

    // =========================
    // 🎯 ICONES
    // =========================
    function getIcon(type) {
        let emoji = \"📍\";
        if (type === \"cafe\") emoji = \"☕\";
        if (type === \"restaurant\") emoji = \"🍽️\";
        if (type === \"parking\") emoji = \"🅿️\";

        return L.divIcon({
            html: `<div style=\"font-size:18px\">\${emoji}</div>`,
            className: ''
        });
    }

    // =========================
    // 🔍 FILTRAGE
    // =========================
    function getFilteredPlaces() {
        return allPlaces.filter(place => activeFilters[place.type]);
    }

    // =========================
    // 🗺️ MARKERS
    // =========================
    function renderMarkers() {
        clearMarkers();

        const visiblePlaces = getFilteredPlaces();

        visiblePlaces.forEach(place => {
            const marker = L.marker([place.lat, place.lon], {
                icon: getIcon(place.type)
            });

            marker.bindPopup(`
                <b>\${place.name}</b><br>
                \${place.type}<br>
                \${place.distance} m
            `);

            marker.addTo(map);
            markers.push(marker);
        });
    }

    // =========================
    // 📋 LISTE
    // =========================
    function renderList() {
        const visiblePlaces = getFilteredPlaces();

        if (!visiblePlaces.length) {
            listDiv.innerHTML = `<div class=\"nearby-empty\">Aucun lieu trouvé pour les filtres sélectionnés.</div>`;
            countDiv.innerText = \"0\";
            return;
        }

        countDiv.innerText = visiblePlaces.length;

        listDiv.innerHTML = visiblePlaces.map(place => `
            <div class=\"nearby-card\">
                <div class=\"nearby-content\">
                    <div class=\"nearby-top\">
                        <h5>\${place.name}</h5>
                        <span class=\"nearby-distance\">\${place.distance} m</span>
                    </div>
                    <div class=\"nearby-type\">\${place.type}</div>
                    <div class=\"nearby-actions\">
                        <button class=\"focus-place-btn\"
                                data-lat=\"\${place.lat}\"
                                data-lon=\"\${place.lon}\">
                            Voir sur la carte
                        </button>
                    </div>
                </div>
            </div>
        `).join('');

        document.querySelectorAll('.focus-place-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const targetLat = parseFloat(this.dataset.lat);
                const targetLon = parseFloat(this.dataset.lon);

                if (!map) return;

                map.setView([targetLat, targetLon], 17);

                const foundMarker = markers.find(marker => {
                    const pos = marker.getLatLng();
                    return pos.lat === targetLat && pos.lng === targetLon;
                });

                if (foundMarker) {
                    foundMarker.openPopup();
                }
            });
        });
    }

    function renderAll() {
        renderMarkers();
        renderList();
    }

    // =========================
    // 🔎 LOAD PLACES
    // =========================
    async function loadPlaces() {
        const radius = radiusSelect ? radiusSelect.value : 1000;

        try {
            const res = await fetch(`/map/nearby?lat=\${lat}&lon=\${lon}&radius=\${radius}`);
            const data = await res.json();

            if (!data.success) {
                listDiv.innerHTML = `<div class=\"nearby-empty\">Impossible de charger les lieux à proximité.</div>`;
                countDiv.innerText = \"0\";
                clearMarkers();
                return;
            }

            allPlaces = data.places || [];
            renderAll();

        } catch (e) {
            console.error('Erreur chargement lieux :', e);
            listDiv.innerHTML = `<div class=\"nearby-empty\">Erreur serveur.</div>`;
            countDiv.innerText = \"0\";
            clearMarkers();
        }
    }

    // =========================
    // 🔘 BOUTONS FILTRES
    // =========================
    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const type = this.dataset.type;
            activeFilters[type] = !activeFilters[type];
            this.classList.toggle('active');
            renderAll();
        });
    });

    // =========================
    // 🔄 RADIUS
    // =========================
    if (radiusSelect) {
        radiusSelect.addEventListener('change', loadPlaces);
    }

    // =========================
    // 🚀 INIT GLOBAL
    // =========================
    initMap();
    loadPlaces();
});


</script>

{# ── Script 5 : Toast helper ── #}
<script>
function showToast(msg) {
    var t = document.getElementById('toast');
    if (!t) return;
    t.innerText = msg;
    t.classList.add('show');
    setTimeout(function() { t.classList.remove('show'); }, 3000);
}
</script>

{% endblock %}
", "loisirs/detail.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\loisirs\\detail.html.twig");
    }
}
