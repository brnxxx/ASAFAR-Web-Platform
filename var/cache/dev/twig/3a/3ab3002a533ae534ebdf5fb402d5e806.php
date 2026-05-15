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

/* admin/categories/index.html.twig */
class __TwigTemplate_f313f4fc47a99ed20e1dfba97a58a6d1 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/index.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield "Categories - Admin ASAFAR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 6
        yield "    <i class=\"fas fa-tags\"></i> Gestion des Categories
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        yield "<div class=\"content-header\">
    <h1 class=\"content-title\">
        ";
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })())) == 0)) {
            // line 13
            yield "            Aucune categorie
        ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 14
(isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 14, $this->source); })())) == 1)) {
            // line 15
            yield "            1 categorie
        ";
        } else {
            // line 17
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 17, $this->source); })())), "html", null, true);
            yield " categories
        ";
        }
        // line 19
        yield "    </h1>
    <div class=\"content-actions\">
        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_create");
        yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus\"></i>
            <span>Ajouter une Categorie</span>
        </a>
    </div>
</div>

";
        // line 28
        if ((($tmp = (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "<div class=\"table-container\">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 41
                yield "            <tr>
                <td>
                    <span style=\"background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 600;\">
                        #";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 44), "html", null, true);
                yield "
                    </span>
                </td>
                <td>
                    <strong style=\"color: var(--text-primary);\">";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 48), "html", null, true);
                yield "</strong>
                </td>
                <td>
                    <small style=\"color: rgba(244, 248, 252, 0.7);\">
                        ";
                // line 52
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 53
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 53), 0, 50), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 53)) > 50)) {
                        yield "...";
                    }
                    // line 54
                    yield "                        ";
                } else {
                    // line 55
                    yield "                            <span style=\"color: rgba(244, 248, 252, 0.4);\">-</span>
                        ";
                }
                // line 57
                yield "                    </small>
                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                yield "\" class=\"btn-small btn-edit\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                            <span>Modifier</span>
                        </a>
                        <form method=\"POST\" action=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Etes-vous sur? Cette action est irreversible.');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 66))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn-small btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                                <span>Supprimer</span>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            yield "        </tbody>
    </table>
</div>
";
        } else {
            // line 80
            yield "<div class=\"empty-state\">
    <i class=\"fas fa-inbox\" style=\"display: block;\"></i>
    <p>Aucune categorie trouvee</p>
    <small style=\"color: rgba(244, 248, 252, 0.4); display: block; margin-bottom: 20px;\">Commencez par creer votre premiere categorie</small>
    <a href=\"";
            // line 84
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_create");
            yield "\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus\"></i>
        <span>Creer la premiere categorie</span>
    </a>
</div>
";
        }
        // line 90
        yield "
<style>
    .action-buttons {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .btn-small {
        padding: 8px 14px;
        font-size: 12px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
    }

    .btn-edit {
        background: rgba(59, 130, 246, 0.2);
        color: #3B82F6;
        border: 1px solid #3B82F6;
    }

    .btn-edit:hover {
        background: #3B82F6;
        color: var(--text-primary);
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }

    .btn-delete {
        background: rgba(239, 68, 68, 0.2);
        color: #EF4444;
        border: 1px solid #EF4444;
    }

    .btn-delete:hover {
        background: #EF4444;
        color: var(--text-primary);
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
    }

    @media (max-width: 768px) {
        .btn-small span {
            display: none;
        }

        .action-buttons {
            flex-direction: column;
            gap: 6px;
        }

        .btn-small {
            padding: 6px 12px;
            font-size: 11px;
        }
    }
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
        return "admin/categories/index.html.twig";
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
        return array (  268 => 90,  259 => 84,  253 => 80,  247 => 76,  231 => 66,  227 => 65,  220 => 61,  214 => 57,  210 => 55,  207 => 54,  201 => 53,  199 => 52,  192 => 48,  185 => 44,  180 => 41,  176 => 40,  163 => 29,  161 => 28,  151 => 21,  147 => 19,  141 => 17,  137 => 15,  135 => 14,  132 => 13,  130 => 12,  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Categories - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-tags\"></i> Gestion des Categories
{% endblock %}

{% block content %}
<div class=\"content-header\">
    <h1 class=\"content-title\">
        {% if categories|length == 0 %}
            Aucune categorie
        {% elseif categories|length == 1 %}
            1 categorie
        {% else %}
            {{ categories|length }} categories
        {% endif %}
    </h1>
    <div class=\"content-actions\">
        <a href=\"{{ path('admin_categorie_create') }}\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus\"></i>
            <span>Ajouter une Categorie</span>
        </a>
    </div>
</div>

{% if categories %}
<div class=\"table-container\">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for categorie in categories %}
            <tr>
                <td>
                    <span style=\"background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 600;\">
                        #{{ categorie.id }}
                    </span>
                </td>
                <td>
                    <strong style=\"color: var(--text-primary);\">{{ categorie.nom }}</strong>
                </td>
                <td>
                    <small style=\"color: rgba(244, 248, 252, 0.7);\">
                        {% if categorie.description %}
                            {{ categorie.description|slice(0, 50) }}{% if categorie.description|length > 50 %}...{% endif %}
                        {% else %}
                            <span style=\"color: rgba(244, 248, 252, 0.4);\">-</span>
                        {% endif %}
                    </small>
                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"{{ path('admin_categorie_edit', {'id': categorie.id}) }}\" class=\"btn-small btn-edit\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                            <span>Modifier</span>
                        </a>
                        <form method=\"POST\" action=\"{{ path('admin_categorie_delete', {'id': categorie.id}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Etes-vous sur? Cette action est irreversible.');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ categorie.id) }}\">
                            <button type=\"submit\" class=\"btn-small btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                                <span>Supprimer</span>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% else %}
<div class=\"empty-state\">
    <i class=\"fas fa-inbox\" style=\"display: block;\"></i>
    <p>Aucune categorie trouvee</p>
    <small style=\"color: rgba(244, 248, 252, 0.4); display: block; margin-bottom: 20px;\">Commencez par creer votre premiere categorie</small>
    <a href=\"{{ path('admin_categorie_create') }}\" class=\"btn btn-primary\">
        <i class=\"fas fa-plus\"></i>
        <span>Creer la premiere categorie</span>
    </a>
</div>
{% endif %}

<style>
    .action-buttons {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .btn-small {
        padding: 8px 14px;
        font-size: 12px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
    }

    .btn-edit {
        background: rgba(59, 130, 246, 0.2);
        color: #3B82F6;
        border: 1px solid #3B82F6;
    }

    .btn-edit:hover {
        background: #3B82F6;
        color: var(--text-primary);
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }

    .btn-delete {
        background: rgba(239, 68, 68, 0.2);
        color: #EF4444;
        border: 1px solid #EF4444;
    }

    .btn-delete:hover {
        background: #EF4444;
        color: var(--text-primary);
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
    }

    @media (max-width: 768px) {
        .btn-small span {
            display: none;
        }

        .action-buttons {
            flex-direction: column;
            gap: 6px;
        }

        .btn-small {
            padding: 6px 12px;
            font-size: 11px;
        }
    }
</style>
{% endblock %}
", "admin/categories/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\categories\\index.html.twig");
    }
}
