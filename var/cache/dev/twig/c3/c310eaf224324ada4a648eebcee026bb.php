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

/* loisirs/_results.html.twig */
class __TwigTemplate_11f0b64f1ea318f765686a0462f4e6e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loisirs/_results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loisirs/_results.html.twig"));

        // line 1
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "    <p style=\"color:rgba(255,255,255,0.7); text-align:center; grid-column:1/-1;\">
        ❌ Aucun résultat trouvé
    </p>
";
        }
        // line 6
        yield "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["excursion"]) {
            // line 8
            yield "<article class=\"loisir-excursion-card\">

    <div class=\"loisir-excursion-image\">
        <img src=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/loisirs/" . CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "imageUrl", [], "any", false, false, false, 11))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 11), "html", null, true);
            yield "\">
        <div class=\"loisir-excursion-overlay\"></div>

        <span class=\"loisir-excursion-badge\">
            ";
            // line 15
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", true, true, false, 15) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", false, false, false, 15)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "type", [], "any", false, false, false, 15), "html", null, true)) : ("Outdoor"));
            yield "
        </span>

        <span class=\"loisir-excursion-places\">
            ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "nombrePlacesDisponibles", [], "any", false, false, false, 19), "html", null, true);
            yield " places
        </span>
    </div>

    <div class=\"loisir-excursion-content\">

        <h3>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 25), "html", null, true);
            yield "</h3>

        <div class=\"loisir-excursion-meta-info\">
            <span class=\"loisir-meta-item\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "lieu", [], "any", false, false, false, 28), "html", null, true);
            yield "</span>
            <span class=\"loisir-meta-item\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "duree", [], "any", false, false, false, 29), "html", null, true);
            yield "h</span>
            <span class=\"loisir-meta-item\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "date", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            yield "</span>
        </div>

        <p>
            ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "description", [], "any", false, false, false, 34), 0, 90), "html", null, true);
            yield "
            ";
            // line 35
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "description", [], "any", false, false, false, 35)) > 90)) {
                yield "...";
            }
            // line 36
            yield "        </p>

        <div class=\"loisir-prix-row\">
            <div class=\"loisir-prix-item\">
                <span class=\"loisir-prix-label\">Adulte</span>
                <span class=\"loisir-prix-value\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixAdulte", [], "any", false, false, false, 41), "html", null, true);
            yield " TND</span>
            </div>
            <div class=\"loisir-prix-item\">
                <span class=\"loisir-prix-label\">Enfant</span>
                <span class=\"loisir-prix-value enfant\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixEnfant", [], "any", false, false, false, 45), "html", null, true);
            yield " TND</span>
            </div>
            <div class=\"loisir-prix-item\">
                <span class=\"loisir-prix-label\">Bébé</span>
                <span class=\"loisir-prix-value bebe\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "prixBebe", [], "any", false, false, false, 49), "html", null, true);
            yield " TND</span>
            </div>
        </div>

        <div class=\"loisir-excursion-footer\">
            <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "idExcursion", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\"
               class=\"loisir-excursion-btn btn-detail\">
                Voir détails
            </a>

            <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excursion_reserver", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["excursion"], "idExcursion", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\"
               class=\"loisir-excursion-btn btn-reserver\">
                Réserver
            </a>
        </div>

    </div>

    <div class=\"loisir-excursion-card-bottom\"></div>

</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['excursion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "loisirs/_results.html.twig";
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
        return array (  159 => 59,  151 => 54,  143 => 49,  136 => 45,  129 => 41,  122 => 36,  118 => 35,  114 => 34,  107 => 30,  103 => 29,  99 => 28,  93 => 25,  84 => 19,  77 => 15,  68 => 11,  63 => 8,  59 => 7,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if excursions is empty %}
    <p style=\"color:rgba(255,255,255,0.7); text-align:center; grid-column:1/-1;\">
        ❌ Aucun résultat trouvé
    </p>
{% endif %}

{% for excursion in excursions %}
<article class=\"loisir-excursion-card\">

    <div class=\"loisir-excursion-image\">
        <img src=\"{{ asset('images/loisirs/' ~ excursion.imageUrl) }}\" alt=\"{{ excursion.titre }}\">
        <div class=\"loisir-excursion-overlay\"></div>

        <span class=\"loisir-excursion-badge\">
            {{ excursion.type ?? 'Outdoor' }}
        </span>

        <span class=\"loisir-excursion-places\">
            {{ excursion.nombrePlacesDisponibles }} places
        </span>
    </div>

    <div class=\"loisir-excursion-content\">

        <h3>{{ excursion.titre }}</h3>

        <div class=\"loisir-excursion-meta-info\">
            <span class=\"loisir-meta-item\">{{ excursion.lieu }}</span>
            <span class=\"loisir-meta-item\">{{ excursion.duree }}h</span>
            <span class=\"loisir-meta-item\">{{ excursion.date|date('d/m/Y') }}</span>
        </div>

        <p>
            {{ excursion.description|slice(0, 90) }}
            {% if excursion.description|length > 90 %}...{% endif %}
        </p>

        <div class=\"loisir-prix-row\">
            <div class=\"loisir-prix-item\">
                <span class=\"loisir-prix-label\">Adulte</span>
                <span class=\"loisir-prix-value\">{{ excursion.prixAdulte }} TND</span>
            </div>
            <div class=\"loisir-prix-item\">
                <span class=\"loisir-prix-label\">Enfant</span>
                <span class=\"loisir-prix-value enfant\">{{ excursion.prixEnfant }} TND</span>
            </div>
            <div class=\"loisir-prix-item\">
                <span class=\"loisir-prix-label\">Bébé</span>
                <span class=\"loisir-prix-value bebe\">{{ excursion.prixBebe }} TND</span>
            </div>
        </div>

        <div class=\"loisir-excursion-footer\">
            <a href=\"{{ path('excursion_detail', {'id': excursion.idExcursion}) }}\"
               class=\"loisir-excursion-btn btn-detail\">
                Voir détails
            </a>

            <a href=\"{{ path('excursion_reserver', {'id': excursion.idExcursion}) }}\"
               class=\"loisir-excursion-btn btn-reserver\">
                Réserver
            </a>
        </div>

    </div>

    <div class=\"loisir-excursion-card-bottom\"></div>

</article>
{% endfor %}", "loisirs/_results.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\loisirs\\_results.html.twig");
    }
}
