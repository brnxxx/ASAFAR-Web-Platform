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

/* admin/excursion/_table.html.twig */
class __TwigTemplate_0f97100b90bb2f06ce04d9e76c88d01d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/excursion/_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/excursion/_table.html.twig"));

        // line 1
        yield "<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Excursions
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Lieu</th>
                <th>Nombre de place disponibles</th>
                <th>Description</th>
                <th>Prix Adulte</th>
                <th>Prix Enfant</th>
                <th>Prix Bébé</th>
                <th>Date</th>
                <th style=\"text-align: right;\">Actions</th>
            </tr>
        </thead>

        <tbody>
        ";
        // line 27
        if ((array_key_exists("excursions", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 27, $this->source); })())) > 0))) {
            // line 28
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 29
                yield "                <tr>

                    <td>
                        <img src=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/loisirs/" . CoreExtension::getAttribute($this->env, $this->source, $context["e"], "imageUrl", [], "any", false, false, false, 32))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 32), "html", null, true);
                yield "\"
                             width=\"60\"
                             style=\"border-radius:8px;\">
                    </td>

                    <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>

                    <td>
                        ";
                // line 40
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categorie", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 41
                    yield "                            ";
                    $context["colors"] = ["blue", "green", "amber", "purple"];
                    // line 42
                    yield "                            ";
                    $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 42, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categorie", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 42, $this->source); })()))), [], "array", false, false, false, 42);
                    // line 43
                    yield "                            <span class=\"badge badge-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 43, $this->source); })()), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categorie", [], "any", false, false, false, 43), "nom", [], "any", false, false, false, 43), "html", null, true);
                    yield "</span>
                        ";
                } else {
                    // line 45
                    yield "                            <span class=\"badge badge-warning\">Sans catégorie</span>
                        ";
                }
                // line 47
                yield "                    </td>

                    <td>";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "lieu", [], "any", false, false, false, 49), "html", null, true);
                yield "</td>

                    <td>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "nombrePlacesDisponibles", [], "any", false, false, false, 51), "html", null, true);
                yield "</td>

                    <td>";
                // line 53
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 53), 0, 40) . "..."), "html", null, true)) : ("—"));
                yield "</td>

                    <td class=\"price price-adulte\"><strong>";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixAdulte", [], "any", false, false, false, 55), "html", null, true);
                yield " DT</strong></td>
                    <td class=\"price price-enfant\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixEnfant", [], "any", false, false, false, 56), "html", null, true);
                yield " DT</td>
                    <td class=\"price price-bebe\">";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixBebe", [], "any", false, false, false, 57), "html", null, true);
                yield " DT</td>

                    <td>";
                // line 59
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "date", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "date", [], "any", false, false, false, 59), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "</td>

                    <td>
                        <div class=\"action-buttons\">

                            <button type=\"button\" class=\"btn-action btn-edit\"
                                onclick='openEditModal({
                                    id: \"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "idExcursion", [], "any", false, false, false, 66), "html", null, true);
                yield "\",
                                    titre: \"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "titre", [], "any", false, false, false, 67), "js"), "html", null, true);
                yield "\",
                                    lieu: \"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "lieu", [], "any", false, false, false, 68), "js"), "html", null, true);
                yield "\",
                                    description: \"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 69), "js"), "html", null, true);
                yield "\",
                                    date: \"";
                // line 70
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "date", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "date", [], "any", false, false, false, 70), "Y-m-d"), "html", null, true)) : (""));
                yield "\",
                                    duree: \"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "duree", [], "any", false, false, false, 71), "html", null, true);
                yield "\",
                                    places: \"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "nombrePlacesDisponibles", [], "any", false, false, false, 72), "html", null, true);
                yield "\",
                                    prixA: \"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixAdulte", [], "any", false, false, false, 73), "html", null, true);
                yield "\",
                                    prixE: \"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixEnfant", [], "any", false, false, false, 74), "html", null, true);
                yield "\",
                                    prixB: \"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "prixBebe", [], "any", false, false, false, 75), "html", null, true);
                yield "\",
                                    categorie: \"";
                // line 76
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categorie", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "categorie", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true)) : (""));
                yield "\"
                                })'>
                                <i class=\"fas fa-edit\"></i>
                            </button>

                            <a href=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_excursion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["e"], "idExcursion", [], "any", false, false, false, 81)]), "html", null, true);
                yield "\"
                               class=\"btn-action btn-delete\"
                               onclick=\"return confirm('Supprimer cette excursion ?')\">
                                <i class=\"fas fa-trash\"></i>
                            </a>

                        </div>
                    </td>

                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "        ";
        } else {
            // line 93
            yield "            <tr>
                <td colspan=\"11\">
                    <div class=\"empty-state\">
                        <i class=\"fas fa-map\"></i>
                        <h3>Aucune excursion</h3>
                        <p>Il n'y a pas encore d'excursions.</p>
                    </div>
                </td>
            </tr>
        ";
        }
        // line 103
        yield "        </tbody>
    </table>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/excursion/_table.html.twig";
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
        return array (  246 => 103,  234 => 93,  231 => 92,  214 => 81,  206 => 76,  202 => 75,  198 => 74,  194 => 73,  190 => 72,  186 => 71,  182 => 70,  178 => 69,  174 => 68,  170 => 67,  166 => 66,  156 => 59,  151 => 57,  147 => 56,  143 => 55,  138 => 53,  133 => 51,  128 => 49,  124 => 47,  120 => 45,  112 => 43,  109 => 42,  106 => 41,  104 => 40,  98 => 37,  88 => 32,  83 => 29,  78 => 28,  76 => 27,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Excursions
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Lieu</th>
                <th>Nombre de place disponibles</th>
                <th>Description</th>
                <th>Prix Adulte</th>
                <th>Prix Enfant</th>
                <th>Prix Bébé</th>
                <th>Date</th>
                <th style=\"text-align: right;\">Actions</th>
            </tr>
        </thead>

        <tbody>
        {% if excursions is defined and excursions|length > 0 %}
            {% for e in excursions %}
                <tr>

                    <td>
                        <img src=\"{{ asset('images/loisirs/' ~ e.imageUrl) }}\" alt=\"{{ e.titre }}\"
                             width=\"60\"
                             style=\"border-radius:8px;\">
                    </td>

                    <td>{{ e.titre }}</td>

                    <td>
                        {% if e.categorie %}
                            {% set colors = ['blue', 'green', 'amber', 'purple'] %}
                            {% set color = colors[e.categorie.id % colors|length] %}
                            <span class=\"badge badge-{{ color }}\">{{ e.categorie.nom }}</span>
                        {% else %}
                            <span class=\"badge badge-warning\">Sans catégorie</span>
                        {% endif %}
                    </td>

                    <td>{{ e.lieu }}</td>

                    <td>{{ e.nombrePlacesDisponibles }}</td>

                    <td>{{ e.description ? e.description|slice(0, 40) ~ '...' : '—' }}</td>

                    <td class=\"price price-adulte\"><strong>{{ e.prixAdulte }} DT</strong></td>
                    <td class=\"price price-enfant\">{{ e.prixEnfant }} DT</td>
                    <td class=\"price price-bebe\">{{ e.prixBebe }} DT</td>

                    <td>{{ e.date ? e.date|date('d/m/Y') : 'N/A' }}</td>

                    <td>
                        <div class=\"action-buttons\">

                            <button type=\"button\" class=\"btn-action btn-edit\"
                                onclick='openEditModal({
                                    id: \"{{ e.idExcursion }}\",
                                    titre: \"{{ e.titre|e('js') }}\",
                                    lieu: \"{{ e.lieu|e('js') }}\",
                                    description: \"{{ e.description|e('js') }}\",
                                    date: \"{{ e.date ? e.date|date('Y-m-d') : '' }}\",
                                    duree: \"{{ e.duree }}\",
                                    places: \"{{ e.nombrePlacesDisponibles }}\",
                                    prixA: \"{{ e.prixAdulte }}\",
                                    prixE: \"{{ e.prixEnfant }}\",
                                    prixB: \"{{ e.prixBebe }}\",
                                    categorie: \"{{ e.categorie ? e.categorie.id : '' }}\"
                                })'>
                                <i class=\"fas fa-edit\"></i>
                            </button>

                            <a href=\"{{ path('admin_excursion_delete', {id: e.idExcursion}) }}\"
                               class=\"btn-action btn-delete\"
                               onclick=\"return confirm('Supprimer cette excursion ?')\">
                                <i class=\"fas fa-trash\"></i>
                            </a>

                        </div>
                    </td>

                </tr>
            {% endfor %}
        {% else %}
            <tr>
                <td colspan=\"11\">
                    <div class=\"empty-state\">
                        <i class=\"fas fa-map\"></i>
                        <h3>Aucune excursion</h3>
                        <p>Il n'y a pas encore d'excursions.</p>
                    </div>
                </td>
            </tr>
        {% endif %}
        </tbody>
    </table>
</div>
", "admin/excursion/_table.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\excursion\\_table.html.twig");
    }
}
