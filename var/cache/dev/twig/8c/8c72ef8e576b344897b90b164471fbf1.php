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

/* admin/utilisateurs/users_table.html.twig */
class __TwigTemplate_98368173bc6ce87df236c9f3e16f5cc1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateurs/users_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateurs/users_table.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 2
            $context["avatarColors"] = ["blue", "amber", "purple", "green", "orange"];
            // line 3
            $context["colorIndex"] = (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 3) % 5);
            // line 4
            $context["avatarColor"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarColors"]) || array_key_exists("avatarColors", $context) ? $context["avatarColors"] : (function () { throw new RuntimeError('Variable "avatarColors" does not exist.', 4, $this->source); })()), (isset($context["colorIndex"]) || array_key_exists("colorIndex", $context) ? $context["colorIndex"] : (function () { throw new RuntimeError('Variable "colorIndex" does not exist.', 4, $this->source); })()), [], "array", false, false, false, 4);
            // line 5
            yield "<tr data-role=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 5)), "html", null, true);
            yield "\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 5)), "html", null, true);
            yield "\">
<td>
<div class=\"user-cell\">
<div class=\"user-avatar ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarColor"]) || array_key_exists("avatarColor", $context) ? $context["avatarColor"] : (function () { throw new RuntimeError('Variable "avatarColor" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "\">
";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 9), 0, 1)) . Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 9), 0, 1))), "html", null, true);
            yield "
<span class=\"status-indicator ";
            // line 10
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 10) == "actif")) ? ("online") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 10) == "bloqué")) ? ("busy") : ("offline"))));
            yield "\"></span>
</div>
<div class=\"user-details\">
<h4>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 13), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 13), "html", null, true);
            yield "</h4>
<p>";
            // line 14
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", true, true, false, 14) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 14)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 14), "html", null, true)) : ("Non renseigné"));
            yield "</p>
</div>
</div>
</td>
<td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
<td>
";
            // line 20
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 20) == "admin")) {
                // line 21
                yield "<span class=\"badge badge-primary\">Administrateur</span>
";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 22
$context["user"], "role", [], "any", false, false, false, 22) == "prestataire")) {
                // line 23
                yield "<span class=\"badge badge-purple\">Prestataire</span>
";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 24
$context["user"], "role", [], "any", false, false, false, 24) == "moderateur")) {
                // line 25
                yield "<span class=\"badge badge-info\">Modérateur</span>
";
            } else {
                // line 27
                yield "<span class=\"badge badge-info\">Client</span>
";
            }
            // line 29
            yield "</td>
<td>
";
            // line 31
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 31) == "actif")) {
                // line 32
                yield "<span class=\"badge badge-success\">Actif</span>
";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 33
$context["user"], "statut", [], "any", false, false, false, 33) == "bloqué")) {
                // line 34
                yield "<span class=\"badge badge-danger\">Bloqué</span>
";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 35
$context["user"], "statut", [], "any", false, false, false, 35) == "inactif")) {
                // line 36
                yield "<span class=\"badge badge-warning\">Inactif</span>
";
            } else {
                // line 38
                yield "<span class=\"badge badge-warning\">Inactif</span>
";
            }
            // line 40
            yield "</td>
<td>
";
            // line 42
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateInscription", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateInscription", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
                yield "
";
            } else {
                // line 45
                yield "N/A
";
            }
            // line 47
            yield "</td>
<td>
<div class=\"action-buttons\">

    <!-- MODIFIER -->
    <button type=\"button\"
            class=\"btn-action btn-edit edit-user\"
            data-user-id=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "\"
            title=\"Modifier\">
        <i class=\"fas fa-edit\"></i>
    </button>

    <!-- STATUT -->
    <button type=\"button\"
            class=\"btn-action btn-status toggle-status\"
            data-user-id=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\"
            title=\"Changer le statut\">
        <i class=\"fas fa-sync-alt\"></i>
    </button>

    <!-- SUPPRIMER -->
    <button type=\"button\"
            class=\"btn-action btn-delete delete-user\"
            data-user-id=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 70), "html", null, true);
            yield "\"
            title=\"Supprimer\">
        <i class=\"fas fa-trash\"></i>
    </button>

</div>
</td>
</tr>
";
            $context['_iterated'] = true;
        }
        // line 78
        if (!$context['_iterated']) {
            // line 79
            yield "<tr>
<td colspan=\"6\">
<div class=\"empty-state\">
<div class=\"empty-state-icon\">
<i class=\"fas fa-users\"></i>
</div>
<h3>Aucun utilisateur trouvé</h3>
<p>Modifiez vos critères de recherche</p>
</div>
</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
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
        return "admin/utilisateurs/users_table.html.twig";
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
        return array (  205 => 79,  203 => 78,  190 => 70,  179 => 62,  168 => 54,  159 => 47,  155 => 45,  150 => 43,  148 => 42,  144 => 40,  140 => 38,  136 => 36,  134 => 35,  131 => 34,  129 => 33,  126 => 32,  124 => 31,  120 => 29,  116 => 27,  112 => 25,  110 => 24,  107 => 23,  105 => 22,  102 => 21,  100 => 20,  95 => 18,  88 => 14,  82 => 13,  76 => 10,  72 => 9,  68 => 8,  59 => 5,  57 => 4,  55 => 3,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for user in users %}
{% set avatarColors = ['blue', 'amber', 'purple', 'green', 'orange'] %}
{% set colorIndex = (user.id % 5) %}
{% set avatarColor = avatarColors[colorIndex] %}
<tr data-role=\"{{ user.role|lower }}\" data-status=\"{{ user.statut|lower }}\">
<td>
<div class=\"user-cell\">
<div class=\"user-avatar {{ avatarColor }}\">
{{ user.prenom|slice(0,1)|upper ~ user.nom|slice(0,1)|upper }}
<span class=\"status-indicator {{ user.statut == 'actif' ? 'online' : (user.statut == 'bloqué' ? 'busy' : 'offline') }}\"></span>
</div>
<div class=\"user-details\">
<h4>{{ user.prenom }} {{ user.nom }}</h4>
<p>{{ user.telephone ?? 'Non renseigné' }}</p>
</div>
</div>
</td>
<td>{{ user.email }}</td>
<td>
{% if user.role == 'admin' %}
<span class=\"badge badge-primary\">Administrateur</span>
{% elseif user.role == 'prestataire' %}
<span class=\"badge badge-purple\">Prestataire</span>
{% elseif user.role == 'moderateur' %}
<span class=\"badge badge-info\">Modérateur</span>
{% else %}
<span class=\"badge badge-info\">Client</span>
{% endif %}
</td>
<td>
{% if user.statut == 'actif' %}
<span class=\"badge badge-success\">Actif</span>
{% elseif user.statut == 'bloqué' %}
<span class=\"badge badge-danger\">Bloqué</span>
{% elseif user.statut == 'inactif' %}
<span class=\"badge badge-warning\">Inactif</span>
{% else %}
<span class=\"badge badge-warning\">Inactif</span>
{% endif %}
</td>
<td>
{% if user.dateInscription %}
{{ user.dateInscription|date('d/m/Y') }}
{% else %}
N/A
{% endif %}
</td>
<td>
<div class=\"action-buttons\">

    <!-- MODIFIER -->
    <button type=\"button\"
            class=\"btn-action btn-edit edit-user\"
            data-user-id=\"{{ user.id }}\"
            title=\"Modifier\">
        <i class=\"fas fa-edit\"></i>
    </button>

    <!-- STATUT -->
    <button type=\"button\"
            class=\"btn-action btn-status toggle-status\"
            data-user-id=\"{{ user.id }}\"
            title=\"Changer le statut\">
        <i class=\"fas fa-sync-alt\"></i>
    </button>

    <!-- SUPPRIMER -->
    <button type=\"button\"
            class=\"btn-action btn-delete delete-user\"
            data-user-id=\"{{ user.id }}\"
            title=\"Supprimer\">
        <i class=\"fas fa-trash\"></i>
    </button>

</div>
</td>
</tr>
{% else %}
<tr>
<td colspan=\"6\">
<div class=\"empty-state\">
<div class=\"empty-state-icon\">
<i class=\"fas fa-users\"></i>
</div>
<h3>Aucun utilisateur trouvé</h3>
<p>Modifiez vos critères de recherche</p>
</div>
</td>
</tr>
{% endfor %}
", "admin/utilisateurs/users_table.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\utilisateurs\\users_table.html.twig");
    }
}
