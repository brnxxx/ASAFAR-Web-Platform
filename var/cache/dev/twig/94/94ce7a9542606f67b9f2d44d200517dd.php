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

/* mes_favoris.html.twig */
class __TwigTemplate_52cabffc67aacf4ba6cf873346df0713 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_favoris.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mes_favoris.html.twig"));

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

        yield "Mes Favoris";
        
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
<section class=\"favorites-page\">

    <div class=\"container\">

     <div class=\"section-header\">

    <div class=\"section-badge\">
        ⭐ MES FAVORIS
    </div>

    <h1 class=\"section-title\">
        Mes Favoris
    </h1>

    <p class=\"section-subtitle\">
        Retrouvez toutes vos excursions préférées en un seul endroit.
    </p>

</div>

    ";
        // line 27
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield "
    <div class=\"favorites-empty\">
        <h3>😕 Aucun favori pour le moment</h3>
        <p>Explorez les excursions et ajoutez-en !</p>

        <a href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loisirs");
            yield "\" class=\"btn-explore\">
            Explorer maintenant →
        </a>

    </div>

";
        } else {
            // line 40
            yield "
            <div class=\"favorites-grid\">

";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fav"]) {
                // line 44
                yield "    ";
                $context["excursion"] = CoreExtension::getAttribute($this->env, $this->source, $context["fav"], "excursion", [], "any", false, false, false, 44);
                // line 45
                yield "
    <div class=\"fav-card\">

        <!-- IMAGE -->
        <div class=\"fav-image\">
            <img src=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 50, $this->source); })()), "imageUrl", [], "any", false, false, false, 50))), "html", null, true);
                yield "\" alt=\"\">
            <div class=\"fav-overlay\"></div>

            <span class=\"fav-badge\">
                ";
                // line 54
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "type", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), "html", null, true)) : ("Aventure"));
                yield "
            </span>
        </div>

        <!-- CONTENT -->
        <div class=\"fav-content\">

            <h3>";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 61, $this->source); })()), "titre", [], "any", false, false, false, 61), "html", null, true);
                yield "</h3>

            <div class=\"fav-meta\">
                📍 ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 64, $this->source); })()), "lieu", [], "any", false, false, false, 64), "html", null, true);
                yield " • ⏱ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 64, $this->source); })()), "duree", [], "any", false, false, false, 64), "html", null, true);
                yield "h • 📅 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 64, $this->source); })()), "date", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
                yield "
            </div>

            <p>
                ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), 0, 90), "html", null, true);
                yield "...
            </p>

            <div class=\"fav-price\">
                Adulte <strong>";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 72, $this->source); })()), "prixAdulte", [], "any", false, false, false, 72), "html", null, true);
                yield " TND</strong>
            </div>

            <!-- ACTIONS -->
            <div class=\"fav-actions\">
                <a href=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 77, $this->source); })()), "idExcursion", [], "any", false, false, false, 77)]), "html", null, true);
                yield "\" class=\"btn-view\">
                    Voir →
                </a>

                <button class=\"btn-remove\" data-id=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 81, $this->source); })()), "idExcursion", [], "any", false, false, false, 81), "html", null, true);
                yield "\">
                    💔 Retirer
                </button>
            </div>

        </div>

    </div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['fav'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "
</div>
        ";
        }
        // line 94
        yield "
    </div>

</section>
<style>
/* GRID */
.favorites-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(320px, 1fr));
    gap: 25px;
}

/* CARD */
.fav-card {
    background: linear-gradient(135deg, #0B2D4A, #021c2d);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,0.4);
    transition: 0.3s;
    margin-top: 50px;
}

.fav-card:hover {
    transform: translateY(-5px);
}

/* IMAGE */
.fav-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.fav-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.fav-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
}

/* BADGE */
.fav-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background: #FFC107;
    color: #0B2D4A;
    padding: 5px 10px;
    border-radius: 10px;
    font-size: 12px;
}

/* CONTENT */
.fav-content {
    padding: 15px;
    color: white;
}

.fav-content h3 {
    margin-bottom: 10px;
}

/* META */
.fav-meta {
    font-size: 13px;
    color: rgba(255,255,255,0.7);
    margin-bottom: 10px;
}

/* PRICE */
.fav-price {
    margin-top: 10px;
    color: #FFC107;
}

/* ACTIONS */
.fav-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
}

/* BUTTONS */
.btn-view {
    border: 1px solid #FFC107;
    color: #FFC107;
    padding: 8px 15px;
    border-radius: 20px;
    text-decoration: none;
}

.btn-view:hover {
    background: #FFC107;
    color: #0B2D4A;
}

.btn-remove {
    border: 1px solid #ff4d6d;
    color: #ff4d6d;
    background: transparent;
    padding: 8px 15px;
    border-radius: 20px;
    cursor: pointer;
}

.btn-remove:hover {
    background: #ff4d6d;
    color: white;
}

.section-header {
    text-align: center;
    padding: 60px 20px;
    color: white;
}

/* 🔥 BADGE */
.section-badge {
    display: inline-block;
    padding: 8px 20px;
    border: 1px solid #FFC107;
    border-radius: 25px;
    color: #FFC107;
    font-size: 13px;
    letter-spacing: 2px;
    margin-bottom: 20px;
}

/* 💎 TITRE */
.section-title {
    font-size: 48px;
    font-weight: 700;
    font-family: 'Playfair Display', serif; /* style luxe */
    margin-bottom: 15px;
}

/* 📝 SOUS-TITRE */
.section-subtitle {
    font-size: 18px;
    color: rgba(255,255,255,0.7);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.btn-remove').forEach(function (btn) {

        btn.addEventListener('click', function () {

            const id = this.dataset.id;
            const card = this.closest('.fav-card');

            fetch('/favoris/' + id, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(res => res.json())
            .then(data => {

                if (data.success) {

                    card.style.opacity = '0';

                    setTimeout(() => {
                        card.remove();
                    }, 300);

                } else {
                    alert('Erreur suppression');
                }

            })
            .catch(() => alert('Erreur serveur'));

        });

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
        return "mes_favoris.html.twig";
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
        return array (  238 => 94,  233 => 91,  217 => 81,  210 => 77,  202 => 72,  195 => 68,  184 => 64,  178 => 61,  168 => 54,  161 => 50,  154 => 45,  151 => 44,  147 => 43,  142 => 40,  132 => 33,  125 => 28,  123 => 27,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Favoris{% endblock %}

{% block body %}

<section class=\"favorites-page\">

    <div class=\"container\">

     <div class=\"section-header\">

    <div class=\"section-badge\">
        ⭐ MES FAVORIS
    </div>

    <h1 class=\"section-title\">
        Mes Favoris
    </h1>

    <p class=\"section-subtitle\">
        Retrouvez toutes vos excursions préférées en un seul endroit.
    </p>

</div>

    {% if favoris is empty %}

    <div class=\"favorites-empty\">
        <h3>😕 Aucun favori pour le moment</h3>
        <p>Explorez les excursions et ajoutez-en !</p>

        <a href=\"{{ path('app_loisirs') }}\" class=\"btn-explore\">
            Explorer maintenant →
        </a>

    </div>

{% else %}

            <div class=\"favorites-grid\">

{% for fav in favoris %}
    {% set excursion = fav.excursion %}

    <div class=\"fav-card\">

        <!-- IMAGE -->
        <div class=\"fav-image\">
            <img src=\"{{ asset('uploads/' ~ excursion.imageUrl) }}\" alt=\"\">
            <div class=\"fav-overlay\"></div>

            <span class=\"fav-badge\">
                {{ excursion.type ?? 'Aventure' }}
            </span>
        </div>

        <!-- CONTENT -->
        <div class=\"fav-content\">

            <h3>{{ excursion.titre }}</h3>

            <div class=\"fav-meta\">
                📍 {{ excursion.lieu }} • ⏱ {{ excursion.duree }}h • 📅 {{ excursion.date|date('d/m/Y') }}
            </div>

            <p>
                {{ excursion.description|slice(0, 90) }}...
            </p>

            <div class=\"fav-price\">
                Adulte <strong>{{ excursion.prixAdulte }} TND</strong>
            </div>

            <!-- ACTIONS -->
            <div class=\"fav-actions\">
                <a href=\"{{ path('excursion_detail', {'id': excursion.idExcursion}) }}\" class=\"btn-view\">
                    Voir →
                </a>

                <button class=\"btn-remove\" data-id=\"{{ excursion.idExcursion }}\">
                    💔 Retirer
                </button>
            </div>

        </div>

    </div>

{% endfor %}

</div>
        {% endif %}

    </div>

</section>
<style>
/* GRID */
.favorites-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(320px, 1fr));
    gap: 25px;
}

/* CARD */
.fav-card {
    background: linear-gradient(135deg, #0B2D4A, #021c2d);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,0.4);
    transition: 0.3s;
    margin-top: 50px;
}

.fav-card:hover {
    transform: translateY(-5px);
}

/* IMAGE */
.fav-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.fav-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.fav-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
}

/* BADGE */
.fav-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background: #FFC107;
    color: #0B2D4A;
    padding: 5px 10px;
    border-radius: 10px;
    font-size: 12px;
}

/* CONTENT */
.fav-content {
    padding: 15px;
    color: white;
}

.fav-content h3 {
    margin-bottom: 10px;
}

/* META */
.fav-meta {
    font-size: 13px;
    color: rgba(255,255,255,0.7);
    margin-bottom: 10px;
}

/* PRICE */
.fav-price {
    margin-top: 10px;
    color: #FFC107;
}

/* ACTIONS */
.fav-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
}

/* BUTTONS */
.btn-view {
    border: 1px solid #FFC107;
    color: #FFC107;
    padding: 8px 15px;
    border-radius: 20px;
    text-decoration: none;
}

.btn-view:hover {
    background: #FFC107;
    color: #0B2D4A;
}

.btn-remove {
    border: 1px solid #ff4d6d;
    color: #ff4d6d;
    background: transparent;
    padding: 8px 15px;
    border-radius: 20px;
    cursor: pointer;
}

.btn-remove:hover {
    background: #ff4d6d;
    color: white;
}

.section-header {
    text-align: center;
    padding: 60px 20px;
    color: white;
}

/* 🔥 BADGE */
.section-badge {
    display: inline-block;
    padding: 8px 20px;
    border: 1px solid #FFC107;
    border-radius: 25px;
    color: #FFC107;
    font-size: 13px;
    letter-spacing: 2px;
    margin-bottom: 20px;
}

/* 💎 TITRE */
.section-title {
    font-size: 48px;
    font-weight: 700;
    font-family: 'Playfair Display', serif; /* style luxe */
    margin-bottom: 15px;
}

/* 📝 SOUS-TITRE */
.section-subtitle {
    font-size: 18px;
    color: rgba(255,255,255,0.7);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.btn-remove').forEach(function (btn) {

        btn.addEventListener('click', function () {

            const id = this.dataset.id;
            const card = this.closest('.fav-card');

            fetch('/favoris/' + id, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(res => res.json())
            .then(data => {

                if (data.success) {

                    card.style.opacity = '0';

                    setTimeout(() => {
                        card.remove();
                    }, 300);

                } else {
                    alert('Erreur suppression');
                }

            })
            .catch(() => alert('Erreur serveur'));

        });

    });
});
</script>
{% endblock %}", "mes_favoris.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\mes_favoris.html.twig");
    }
}
