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

/* recommandation/index.html.twig */
class __TwigTemplate_07b42f74aa7a4d0849ad7986648029db extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recommandation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recommandation/index.html.twig"));

        // line 1
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["recommandations"]) || array_key_exists("recommandations", $context) ? $context["recommandations"] : (function () { throw new RuntimeError('Variable "recommandations" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "
    <p style=\"color:rgba(255,255,255,0.7); text-align:center; grid-column:1/-1;\">
        🗺️ Aucune recommandation disponible
    </p>

";
        } else {
            // line 8
            yield "
";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommandations"]) || array_key_exists("recommandations", $context) ? $context["recommandations"] : (function () { throw new RuntimeError('Variable "recommandations" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                yield "    ";
                $context["excursion"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "excursion", [], "any", false, false, false, 10);
                // line 11
                yield "
    <article class=\"loisir-excursion-card\">

        <div class=\"loisir-excursion-image\">
            <img src=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 15, $this->source); })()), "imageUrl", [], "any", false, false, false, 15))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), "html", null, true);
                yield "\">
            <div class=\"loisir-excursion-overlay\"></div>
            <span class=\"loisir-excursion-badge\">";
                // line 17
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "type", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17), "html", null, true)) : ("Outdoor"));
                yield "</span>
            <span class=\"loisir-excursion-places\">";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 18, $this->source); })()), "nombrePlacesDisponibles", [], "any", false, false, false, 18), "html", null, true);
                yield " places</span>
        </div>

        <div class=\"loisir-excursion-content\">

            <h3>";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 23, $this->source); })()), "titre", [], "any", false, false, false, 23), "html", null, true);
                yield "</h3>

            <div class=\"loisir-excursion-meta-info\">
                <span class=\"loisir-meta-item\">📍 ";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 26, $this->source); })()), "lieu", [], "any", false, false, false, 26), "html", null, true);
                yield "</span>
                <span class=\"loisir-meta-item\">⏱ ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 27, $this->source); })()), "duree", [], "any", false, false, false, 27), "html", null, true);
                yield "h</span>
                <span class=\"loisir-meta-item\">📅 ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
                yield "</span>
            </div>

            ";
                // line 32
                yield "            ";
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 32, $this->source); })()), "weather", [], "any", false, false, false, 32) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "weather", [], "any", false, true, false, 32), "weather", [], "any", true, true, false, 32)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 32, $this->source); })()), "weather", [], "any", false, false, false, 32), "weather", [], "any", false, false, false, 32)) > 0))) {
                    // line 33
                    yield "                <div class=\"loisir-weather\">
                    <img src=\"https://openweathermap.org/img/wn/";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 34, $this->source); })()), "weather", [], "any", false, false, false, 34), "weather", [], "any", false, false, false, 34), 0, [], "array", false, false, false, 34), "icon", [], "any", false, false, false, 34), "html", null, true);
                    yield "@2x.png\">
                    <span>";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 35, $this->source); })()), "weather", [], "any", false, false, false, 35), "main", [], "any", false, false, false, 35), "temp", [], "any", false, false, false, 35), 1), "html", null, true);
                    yield "°C</span>
                    <span>";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 36, $this->source); })()), "weather", [], "any", false, false, false, 36), "weather", [], "any", false, false, false, 36), 0, [], "array", false, false, false, 36), "description", [], "any", false, false, false, 36)), "html", null, true);
                    yield "</span>
                </div>
            ";
                } else {
                    // line 39
                    yield "                <div class=\"loisir-weather-empty\">🌤️ Météo indisponible</div>
            ";
                }
                // line 41
                yield "
            <p>
                ";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), 0, 90), "html", null, true);
                yield "
                ";
                // line 44
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44)) > 90)) {
                    yield "...";
                }
                // line 45
                yield "            </p>

            <div class=\"loisir-prix-row\">
                <div class=\"loisir-prix-item\">
                    <span class=\"loisir-prix-label\">Adulte</span>
                    <span class=\"loisir-prix-value\">
                        ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "prixData", [], "any", false, true, false, 51), "prix_adulte", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 51, $this->source); })()), "prixData", [], "any", false, false, false, 51), "prix_adulte", [], "any", false, false, false, 51), CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 51, $this->source); })()), "prixAdulte", [], "any", false, false, false, 51))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 51, $this->source); })()), "prixAdulte", [], "any", false, false, false, 51)))), "html", null, true);
                yield " TND
                    </span>
                </div>

                <div class=\"loisir-prix-item\">
                    <span class=\"loisir-prix-label\">Enfant</span>
                    <span class=\"loisir-prix-value enfant\">
                        ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "prixData", [], "any", false, true, false, 58), "prix_enfant", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 58, $this->source); })()), "prixData", [], "any", false, false, false, 58), "prix_enfant", [], "any", false, false, false, 58), 0)) : (0))), "html", null, true);
                yield " TND
                    </span>
                </div>

                <div class=\"loisir-prix-item\">
                    <span class=\"loisir-prix-label\">Bébé</span>
                    <span class=\"loisir-prix-value bebe\">
                        ";
                // line 65
                if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "prixData", [], "any", false, true, false, 65), "prix_bebe", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 65, $this->source); })()), "prixData", [], "any", false, false, false, 65), "prix_bebe", [], "any", false, false, false, 65), 0)) : (0)) > 0)) {
                    // line 66
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 66, $this->source); })()), "prixData", [], "any", false, false, false, 66), "prix_bebe", [], "any", false, false, false, 66)), "html", null, true);
                    yield " TND
                        ";
                } else {
                    // line 68
                    yield "                            Gratuit
                        ";
                }
                // line 70
                yield "                    </span>
                </div>
            </div>

            ";
                // line 75
                yield "            <div class=\"loisir-rating\">
                ";
                // line 76
                $context["rating"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "rating", [], "any", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 76, $this->source); })()), "rating", [], "any", false, false, false, 76)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 76, $this->source); })()), "rating", [], "any", false, false, false, 76)) : (4.0));
                // line 77
                yield "                ";
                $context["stars"] = Twig\Extension\CoreExtension::round((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 77, $this->source); })()));
                // line 78
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 79
                    yield "                    ";
                    if (($context["i"] <= (isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new RuntimeError('Variable "stars" does not exist.', 79, $this->source); })()))) {
                        yield "⭐";
                    } else {
                        yield "☆";
                    }
                    // line 80
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 81, $this->source); })()), "html", null, true);
                yield "/5
            </div>

            ";
                // line 85
                yield "            <div style=\"margin-bottom:10px;\">
                <span style=\"color:#FFC107;\"> ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "raison", [], "any", false, false, false, 86), "html", null, true);
                yield "</span>
            </div>

            <div class=\"loisir-excursion-footer\">
                <a href=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 90, $this->source); })()), "idExcursion", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\"
                   class=\"loisir-excursion-btn btn-reserver\">Voir détails →</a>

            
            </div>

        </div>

    </article>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "recommandation/index.html.twig";
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
        return array (  255 => 101,  238 => 90,  231 => 86,  228 => 85,  221 => 81,  215 => 80,  208 => 79,  203 => 78,  200 => 77,  198 => 76,  195 => 75,  189 => 70,  185 => 68,  179 => 66,  177 => 65,  167 => 58,  157 => 51,  149 => 45,  145 => 44,  141 => 43,  137 => 41,  133 => 39,  127 => 36,  123 => 35,  119 => 34,  116 => 33,  113 => 32,  107 => 28,  103 => 27,  99 => 26,  93 => 23,  85 => 18,  81 => 17,  74 => 15,  68 => 11,  65 => 10,  61 => 9,  58 => 8,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if recommandations is empty %}

    <p style=\"color:rgba(255,255,255,0.7); text-align:center; grid-column:1/-1;\">
        🗺️ Aucune recommandation disponible
    </p>

{% else %}

{% for item in recommandations %}
    {% set excursion = item.excursion %}

    <article class=\"loisir-excursion-card\">

        <div class=\"loisir-excursion-image\">
            <img src=\"{{ asset('uploads/' ~ excursion.imageUrl) }}\" alt=\"{{ excursion.titre }}\">
            <div class=\"loisir-excursion-overlay\"></div>
            <span class=\"loisir-excursion-badge\">{{ excursion.type ?? 'Outdoor' }}</span>
            <span class=\"loisir-excursion-places\">{{ excursion.nombrePlacesDisponibles }} places</span>
        </div>

        <div class=\"loisir-excursion-content\">

            <h3>{{ excursion.titre }}</h3>

            <div class=\"loisir-excursion-meta-info\">
                <span class=\"loisir-meta-item\">📍 {{ excursion.lieu }}</span>
                <span class=\"loisir-meta-item\">⏱ {{ excursion.duree }}h</span>
                <span class=\"loisir-meta-item\">📅 {{ excursion.date|date('d/m/Y') }}</span>
            </div>

            {# 🔥 AJOUT MÉTÉO COMME L'AUTRE #}
            {% if excursion.weather and excursion.weather.weather is defined and excursion.weather.weather|length > 0 %}
                <div class=\"loisir-weather\">
                    <img src=\"https://openweathermap.org/img/wn/{{ excursion.weather.weather[0].icon }}@2x.png\">
                    <span>{{ excursion.weather.main.temp|round(1) }}°C</span>
                    <span>{{ excursion.weather.weather[0].description|capitalize }}</span>
                </div>
            {% else %}
                <div class=\"loisir-weather-empty\">🌤️ Météo indisponible</div>
            {% endif %}

            <p>
                {{ excursion.description|slice(0, 90) }}
                {% if excursion.description|length > 90 %}...{% endif %}
            </p>

            <div class=\"loisir-prix-row\">
                <div class=\"loisir-prix-item\">
                    <span class=\"loisir-prix-label\">Adulte</span>
                    <span class=\"loisir-prix-value\">
                        {{ excursion.prixData.prix_adulte|default(excursion.prixAdulte)|round }} TND
                    </span>
                </div>

                <div class=\"loisir-prix-item\">
                    <span class=\"loisir-prix-label\">Enfant</span>
                    <span class=\"loisir-prix-value enfant\">
                        {{ excursion.prixData.prix_enfant|default(0)|round }} TND
                    </span>
                </div>

                <div class=\"loisir-prix-item\">
                    <span class=\"loisir-prix-label\">Bébé</span>
                    <span class=\"loisir-prix-value bebe\">
                        {% if excursion.prixData.prix_bebe|default(0) > 0 %}
                            {{ excursion.prixData.prix_bebe|round }} TND
                        {% else %}
                            Gratuit
                        {% endif %}
                    </span>
                </div>
            </div>

            {# ⭐ RATING IDENTIQUE #}
            <div class=\"loisir-rating\">
                {% set rating = excursion.rating ?? 4.0 %}
                {% set stars = rating | round %}
                {% for i in 1..5 %}
                    {% if i <= stars %}⭐{% else %}☆{% endif %}
                {% endfor %}
                {{ rating }}/5
            </div>

            {# 🔥 RAISON (BONUS RECO) #}
            <div style=\"margin-bottom:10px;\">
                <span style=\"color:#FFC107;\"> {{ item.raison }}</span>
            </div>

            <div class=\"loisir-excursion-footer\">
                <a href=\"{{ path('excursion_detail', {'id': excursion.idExcursion}) }}\"
                   class=\"loisir-excursion-btn btn-reserver\">Voir détails →</a>

            
            </div>

        </div>

    </article>

{% endfor %}

{% endif %}", "recommandation/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\recommandation\\index.html.twig");
    }
}
