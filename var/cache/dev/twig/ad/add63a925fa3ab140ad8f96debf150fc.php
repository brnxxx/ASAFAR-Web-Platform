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

/* admin/utilisateurs/index.html.twig */
class __TwigTemplate_1b1c85d48bd5d8d8087491f3be40ab0d extends Template
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
            'page_icon' => [$this, 'block_page_icon'],
            'page_title' => [$this, 'block_page_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateurs/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateurs/index.html.twig"));

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

        yield "Utilisateurs - Admin ASAFAR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_icon"));

        yield "fas fa-users";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        yield "Gestion des Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        yield "Utilisateurs";
        
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
        yield "<style>
/* Modal Styles */
.modal-overlay {
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background: rgba(5, 20, 33, 0.85);
backdrop-filter: blur(8px);
display: none;
align-items: center;
justify-content: center;
z-index: 9999;
padding: 20px;
}

.modal-overlay.active {
display: flex;
}

.modal {
background: linear-gradient(135deg, rgba(11, 45, 74, 0.98) 0%, rgba(7, 27, 46, 0.98) 100%);
border: 1px solid var(--border-subtle);
border-radius: 20px;
width: 100%;
max-width: 520px;
max-height: 90vh;
overflow: hidden;
box-shadow: 0 25px 80px rgba(0, 0, 0, 0.5), var(--shadow-glow-blue);
animation: modalSlide 0.3s ease;
}

@keyframes modalSlide {
from {
opacity: 0;
transform: translateY(-30px) scale(0.95);
}
to {
opacity: 1;
transform: translateY(0) scale(1);
}
}

.modal-header {
display: flex;
justify-content: space-between;
align-items: center;
padding: 20px 24px;
background: linear-gradient(135deg, rgba(30, 111, 168, 0.2) 0%, rgba(11, 45, 74, 0.4) 100%);
border-bottom: 1px solid var(--border-subtle);
}

.modal-header h3 {
font-size: 18px;
font-weight: 600;
color: var(--text-primary);
display: flex;
align-items: center;
gap: 10px;
}

.modal-header h3 i {
color: var(--amber);
}

.modal-close {
width: 36px;
height: 36px;
display: flex;
align-items: center;
justify-content: center;
background: var(--glass-bg);
border: 1px solid var(--border-subtle);
border-radius: 10px;
color: var(--text-secondary);
cursor: pointer;
transition: all var(--transition-medium);
}

.modal-close:hover {
background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);
color: white;
border-color: transparent;
transform: rotate(90deg);
}

.modal-body {
padding: 24px;
overflow-y: auto;
max-height: calc(90vh - 140px);
}

.form-row {
display: grid;
grid-template-columns: 1fr 1fr;
gap: 16px;
}

.form-group {
margin-bottom: 20px;
}

.form-group label {
display: block;
font-size: 13px;
font-weight: 500;
color: var(--text-secondary);
margin-bottom: 8px;
letter-spacing: 0.3px;
}

.form-group input,
.form-group select {
width: 100%;
padding: 14px 16px;
background: var(--glass-bg);
border: 1px solid var(--border-subtle);
border-radius: 10px;
color: var(--text-primary);
font-size: 14px;
font-family: inherit;
transition: all var(--transition-medium);
}

.form-group input::placeholder {
color: var(--text-muted);
}

.form-group input:focus,
.form-group select:focus {
outline: none;
border-color: var(--sky-blue);
box-shadow: 0 0 0 3px rgba(47, 168, 255, 0.15), var(--shadow-glow-blue);
}

.form-group select {
cursor: pointer;
appearance: none;
background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23A7E3FF' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L3 6h10l-5 5z'/%3E%3C/svg%3E\");
background-repeat: no-repeat;
background-position: right 16px center;
padding-right: 40px;
}

.form-group select option {
background: var(--midnight-blue);
color: var(--text-primary);
}

.form-message {
padding: 12px 16px;
border-radius: 10px;
font-size: 13px;
font-weight: 500;
display: none;
margin-bottom: 16px;
}

.form-message.error {
display: block;
background: rgba(239, 68, 68, 0.15);
color: #EF4444;
border: 1px solid rgba(239, 68, 68, 0.3);
}

.form-message.success {
display: block;
background: rgba(52, 211, 153, 0.15);
color: #34D399;
border: 1px solid rgba(52, 211, 153, 0.3);
}

.modal-footer {
display: flex;
justify-content: flex-end;
gap: 12px;
padding: 20px 24px;
background: linear-gradient(135deg, rgba(30, 111, 168, 0.1) 0%, rgba(11, 45, 74, 0.2) 100%);
border-top: 1px solid var(--border-subtle);
}

.modal-footer .btn {
min-width: 120px;
justify-content: center;
}

.field-error {
color: #e74c3c;
font-size: 12px;
margin-top: 5px;
min-height: 18px;
}

input.error, select.error {
border-color: #e74c3c !important;
}

input.valid, select.valid {
border-color: #2ecc71 !important;
}

.search-box-inline {
position: relative;
display: flex;
align-items: center;
}

.search-box-inline input {
width: 240px;
padding: 12px 16px 12px 42px;
background: var(--glass-bg);
border: 1px solid var(--border-subtle);
border-radius: 10px;
color: var(--text-primary);
transition: all 0.3s ease;
}

.search-box-inline input:focus {
border-color: var(--sky-blue);
box-shadow: 0 0 0 3px rgba(47, 168, 255, 0.15);
width: 300px;
}

@media (max-width: 480px) {
.form-row {
grid-template-columns: 1fr;
}
.modal {
max-width: 100%;
border-radius: 16px 16px 0 0;
}
.modal-overlay {
align-items: flex-end;
}
}
</style>

<div class=\"stats-grid\">
<div class=\"stat-card blue\">
<div class=\"stat-icon blue\">
<i class=\"fas fa-users\"></i>
</div>
<div class=\"stat-value\">";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 253)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 253, $this->source); })()), "total", [], "any", false, false, false, 253), 0)) : (0)), 0, "", " "), "html", null, true);
        yield "</div>
<div class=\"stat-label\">Total Utilisateurs</div>
<span class=\"stat-change ";
        // line 255
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 255, $this->source); })()), "growth", [], "any", false, false, false, 255) >= 0)) ? ("positive") : ("negative"));
        yield "\">
<i class=\"fas fa-arrow-";
        // line 256
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 256, $this->source); })()), "growth", [], "any", false, false, false, 256) >= 0)) ? ("up") : ("down"));
        yield "\"></i>
";
        // line 257
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 257, $this->source); })()), "growth", [], "any", false, false, false, 257) >= 0)) ? ("+") : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "growth", [], "any", true, true, false, 257)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 257, $this->source); })()), "growth", [], "any", false, false, false, 257), 0)) : (0)), "html", null, true);
        yield "% ce mois
</span>
</div>
<div class=\"stat-card green\">
<div class=\"stat-icon green\">
<i class=\"fas fa-user-check\"></i>
</div>
<div class=\"stat-value\">";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active", [], "any", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 264, $this->source); })()), "active", [], "any", false, false, false, 264), 0)) : (0)), 0, "", " "), "html", null, true);
        yield "</div>
<div class=\"stat-label\">Utilisateurs Actifs</div>
<span class=\"stat-change ";
        // line 266
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 266, $this->source); })()), "growth", [], "any", false, false, false, 266) >= 0)) ? ("positive") : ("negative"));
        yield "\">
<i class=\"fas fa-arrow-";
        // line 267
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 267, $this->source); })()), "growth", [], "any", false, false, false, 267) >= 0)) ? ("up") : ("down"));
        yield "\"></i>
";
        // line 268
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 268, $this->source); })()), "growth", [], "any", false, false, false, 268) >= 0)) ? ("+") : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "growth", [], "any", true, true, false, 268)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 268, $this->source); })()), "growth", [], "any", false, false, false, 268), 0)) : (0)), "html", null, true);
        yield "% ce mois
</span>
</div>
<div class=\"stat-card amber\">
<div class=\"stat-icon amber\">
<i class=\"fas fa-user-clock\"></i>
</div>
<div class=\"stat-value\">";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "newThisMonth", [], "any", true, true, false, 275)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 275, $this->source); })()), "newThisMonth", [], "any", false, false, false, 275), 0)) : (0)), 0, "", " "), "html", null, true);
        yield "</div>
<div class=\"stat-label\">Nouveaux ce mois</div>
<span class=\"stat-change ";
        // line 277
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 277, $this->source); })()), "newGrowth", [], "any", false, false, false, 277) >= 0)) ? ("positive") : ("negative"));
        yield "\">
<i class=\"fas fa-arrow-";
        // line 278
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 278, $this->source); })()), "newGrowth", [], "any", false, false, false, 278) >= 0)) ? ("up") : ("down"));
        yield "\"></i>
";
        // line 279
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 279, $this->source); })()), "newGrowth", [], "any", false, false, false, 279) >= 0)) ? ("+") : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "newGrowth", [], "any", true, true, false, 279)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 279, $this->source); })()), "newGrowth", [], "any", false, false, false, 279), 0)) : (0)), "html", null, true);
        yield "% ce mois
</span>
</div>
<div class=\"stat-card purple\">
<div class=\"stat-icon purple\">
<i class=\"fas fa-user-shield\"></i>
</div>
<div class=\"stat-value\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "admins", [], "any", true, true, false, 286)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 286, $this->source); })()), "admins", [], "any", false, false, false, 286), 0)) : (0)), 0, "", " "), "html", null, true);
        yield "</div>
<div class=\"stat-label\">Administrateurs</div>
<span class=\"stat-change positive\">
<i class=\"fas fa-check\"></i>
";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "admins", [], "any", true, true, false, 290)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 290, $this->source); })()), "admins", [], "any", false, false, false, 290), 0)) : (0)), "html", null, true);
        yield " total
</span>
</div>
</div>

<div class=\"toolbar\">
<div class=\"toolbar-left\">
<a href=\"#\" data-filter=\"all\" class=\"filter-btn ";
        // line 297
        yield ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 297, $this->source); })()) == "all")) ? ("active") : (""));
        yield "\">
<i class=\"fas fa-users\"></i> Tous
</a>
<a href=\"#\" data-filter=\"active\" class=\"filter-btn ";
        // line 300
        yield ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 300, $this->source); })()) == "active")) ? ("active") : (""));
        yield "\">
<i class=\"fas fa-user-check\"></i> Actifs
</a>
<a href=\"#\" data-filter=\"inactive\" class=\"filter-btn ";
        // line 303
        yield ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 303, $this->source); })()) == "inactive")) ? ("active") : (""));
        yield "\">
<i class=\"fas fa-user-clock\"></i> Inactifs
</a>
<a href=\"#\" data-filter=\"blocked\" class=\"filter-btn ";
        // line 306
        yield ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 306, $this->source); })()) == "blocked")) ? ("active") : (""));
        yield "\">
<i class=\"fas fa-user-slash\"></i> Bloques
</a>
<a href=\"#\" data-filter=\"admin\" class=\"filter-btn ";
        // line 309
        yield ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 309, $this->source); })()) == "admin")) ? ("active") : (""));
        yield "\">
<i class=\"fas fa-user-shield\"></i> Admins
</a>
</div>

<div class=\"toolbar-right\">
<button class=\"btn btn-primary\" id=\"addUserBtn\">
<i class=\"fas fa-plus\"></i>
</button>
<button id=\"sortBtn\" class=\"btn btn-primary\">
    <i class=\"fas fa-sort-alpha-down\"></i>
</button>

<div class=\"search-box-inline\">
<i class=\"fas fa-search\"></i>
<input type=\"text\" id=\"searchInput\" value=\"";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 324, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Rechercher un utilisateur...\">
</div>

<a href=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_export", ["filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 327, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 327, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
<i class=\"fas fa-download\"></i> Exporter
</a>
<a href=\"";
        // line 330
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_chatbot");
        yield "\" class=\"btn btn-primary\" title=\"Assistant IA\">
    <i class=\"fas fa-robot\"></i> Assistant IA
</a>
</div>
</div>

<div class=\"modal-overlay\" id=\"addUserModal\">
<div class=\"modal\">
<div class=\"modal-header\">
<h3><i class=\"fas fa-user-plus\"></i> Nouvel Utilisateur</h3>
<button class=\"modal-close\" id=\"closeAddModal\">
<i class=\"fas fa-times\"></i>
</button>
</div>
<div id=\"addFormContainer\">
<div class=\"modal-body\">
<div class=\"text-center\" style=\"padding: 40px;\">
<i class=\"fas fa-spinner fa-spin\" style=\"font-size: 24px; color: var(--text-muted);\"></i>
<p style=\"margin-top: 10px; color: var(--text-muted);\">Chargement...</p>
</div>
</div>
</div>
</div>
</div>

";
        // line 356
        yield "<div class=\"modal-overlay\" id=\"editUserModal\">
<div class=\"modal\">
<div class=\"modal-header\">
<h3><i class=\"fas fa-user-edit\"></i> Modifier Utilisateur</h3>
<button class=\"modal-close\" id=\"closeEditModal\">
<i class=\"fas fa-times\"></i>
</button>
</div>
<div id=\"editFormContainer\">
<div class=\"modal-body\">
<div class=\"text-center\" style=\"padding: 40px;\">
<i class=\"fas fa-spinner fa-spin\" style=\"font-size: 24px; color: var(--text-muted);\"></i>
<p style=\"margin-top: 10px; color: var(--text-muted);\">Chargement...</p>
</div>
</div>
</div>
</div>
</div>

";
        // line 376
        yield "<div class=\"table-container\" id=\"usersTable\">
<div class=\"table-header\">
<div class=\"table-title\">
<i class=\"fas fa-list\"></i>
Liste des Utilisateurs
</div>
<div class=\"table-info\">
";
        // line 383
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 383, $this->source); })()) > 0)) {
            // line 384
            yield "Affichage de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 384, $this->source); })()) - 1) * 10) + 1), "html", null, true);
            yield "-";
            yield (((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 384, $this->source); })()) * 10) > (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 384, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 384, $this->source); })()), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 384, $this->source); })()) * 10), "html", null, true)));
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 384, $this->source); })()), 0, "", " "), "html", null, true);
            yield " utilisateurs
";
        } else {
            // line 386
            yield "Aucun utilisateur trouvé
";
        }
        // line 388
        yield "</div>
</div>

<table>
<thead>
<tr>
";
        // line 395
        yield "<th id=\"sortNom\" style=\"cursor:pointer;\">
    Nom
    <i id=\"sortIcon\" class=\"fas fa-sort\" style=\"margin-left:5px;\"></i>
</th>
<th>Email</th>
<th>Rôle</th>
<th>Statut</th>
<th id=\"sortDate\" style=\"cursor:pointer;\">
    Date d'inscription
    <i id=\"sortDateIcon\" class=\"fas fa-sort\" style=\"margin-left:5px;\"></i>
</th>
<th style=\"text-align: right;\">Actions</th>
</tr>
</thead>
<tbody id=\"usersTableBody\">
";
        // line 410
        if ((array_key_exists("users", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 410, $this->source); })())) > 0))) {
            // line 411
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 411, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 412
                $context["avatarColors"] = ["blue", "amber", "purple", "green", "orange"];
                // line 413
                $context["colorIndex"] = (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 413) % 5);
                // line 414
                $context["avatarColor"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarColors"]) || array_key_exists("avatarColors", $context) ? $context["avatarColors"] : (function () { throw new RuntimeError('Variable "avatarColors" does not exist.', 414, $this->source); })()), (isset($context["colorIndex"]) || array_key_exists("colorIndex", $context) ? $context["colorIndex"] : (function () { throw new RuntimeError('Variable "colorIndex" does not exist.', 414, $this->source); })()), [], "array", false, false, false, 414);
                // line 415
                yield "<tr data-role=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 415)), "html", null, true);
                yield "\" data-status=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 415)), "html", null, true);
                yield "\">

    ";
                // line 418
                yield "    <td>
        <div style=\"display: flex; align-items: center; gap: 10px;\">
            <div class=\"avatar avatar-";
                // line 420
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarColor"]) || array_key_exists("avatarColor", $context) ? $context["avatarColor"] : (function () { throw new RuntimeError('Variable "avatarColor" does not exist.', 420, $this->source); })()), "html", null, true);
                yield "\" style=\"width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:600;\">
                ";
                // line 421
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", true, true, false, 421)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 421), "?")) : ("?")), 0, 1)), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", true, true, false, 421)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 421), "")) : ("")), 0, 1)), "html", null, true);
                yield "
            </div>
            <div>
                <div style=\"font-weight: 500;\">";
                // line 424
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", true, true, false, 424)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 424), "")) : ("")), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", true, true, false, 424)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 424), "")) : ("")), "html", null, true);
                yield "</div>
            </div>
        </div>
    </td>

    <td>";
                // line 429
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 429), "html", null, true);
                yield "</td>

    <td>
        ";
                // line 432
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 432) == "admin")) {
                    // line 433
                    yield "        <span class=\"badge badge-primary\">Administrateur</span>
        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 434
$context["user"], "role", [], "any", false, false, false, 434) == "prestataire")) {
                    // line 435
                    yield "        <span class=\"badge badge-purple\">Prestataire</span>
        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 436
$context["user"], "role", [], "any", false, false, false, 436) == "moderateur")) {
                    // line 437
                    yield "        <span class=\"badge badge-info\">Modérateur</span>
        ";
                } else {
                    // line 439
                    yield "        <span class=\"badge badge-info\">Client</span>
        ";
                }
                // line 441
                yield "    </td>

    <td>
        ";
                // line 444
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 444) == "actif")) {
                    // line 445
                    yield "        <span class=\"badge badge-success\">Actif</span>
        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 446
$context["user"], "statut", [], "any", false, false, false, 446) == "bloque")) {
                    // line 447
                    yield "        <span class=\"badge badge-danger\">Bloqué</span>
        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 448
$context["user"], "statut", [], "any", false, false, false, 448) == "inactif")) {
                    // line 449
                    yield "        <span class=\"badge badge-warning\">Inactif</span>
        ";
                } else {
                    // line 451
                    yield "        <span class=\"badge badge-warning\">Inactif</span>
        ";
                }
                // line 453
                yield "    </td>

    <td>
        ";
                // line 456
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateInscription", [], "any", false, false, false, 456)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 457
                    yield "        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateInscription", [], "any", false, false, false, 457), "d/m/Y"), "html", null, true);
                    yield "
        ";
                } else {
                    // line 459
                    yield "        N/A
        ";
                }
                // line 461
                yield "    </td>

    <td>
        <div class=\"action-buttons\">
            <button class=\"btn-action btn-edit edit-user\" data-user-id=\"";
                // line 465
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 465), "html", null, true);
                yield "\" title=\"Modifier\">
                <i class=\"fas fa-edit\"></i>
            </button>
            <button class=\"btn-action btn-edit toggle-status\" data-user-id=\"";
                // line 468
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 468), "html", null, true);
                yield "\" title=\"Changer le statut\">
                <i class=\"fas fa-sync-alt\"></i>
            </button>
            <button class=\"btn-action btn-delete delete-user\" data-user-id=\"";
                // line 471
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 471), "html", null, true);
                yield "\" title=\"Supprimer\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </div>
    </td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 479
            yield "<tr>
<td colspan=\"6\">
<div class=\"empty-state\">
<div class=\"empty-state-icon\">
<i class=\"fas fa-users\"></i>
</div>
<h3>Aucun utilisateur trouvé</h3>
<p>
";
            // line 487
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 487, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 488
                yield "Aucun résultat pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 488, $this->source); })()), "html", null, true);
                yield "\"
";
            } else {
                // line 490
                yield "Il n'y a pas encore d'utilisateurs.
";
            }
            // line 492
            yield "</p>
</div>
</td>
</tr>
";
        }
        // line 497
        yield "</tbody>
</table>

";
        // line 500
        if ((array_key_exists("pages", $context) && ((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 500, $this->source); })()) > 1))) {
            // line 501
            yield "<div class=\"pagination-container\">
<div class=\"pagination-info\">
Page ";
            // line 503
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 503, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 503, $this->source); })()), "html", null, true);
            yield "
</div>
<div class=\"pagination\">
";
            // line 506
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 506, $this->source); })()) > 1)) {
                // line 507
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 507, $this->source); })()) - 1), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 507, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 507, $this->source); })())]), "html", null, true);
                yield "\" class=\"page-btn\">
<i class=\"fas fa-chevron-left\"></i>
</a>
";
            } else {
                // line 511
                yield "<span class=\"page-btn\" style=\"opacity: 0.4; cursor: not-allowed;\">
<i class=\"fas fa-chevron-left\"></i>
</span>
";
            }
            // line 515
            yield "
";
            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 516, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 517
                if (((($context["i"] == 1) || ($context["i"] == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 517, $this->source); })()))) || (($context["i"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 517, $this->source); })()) - 1)) && ($context["i"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 517, $this->source); })()) + 1))))) {
                    // line 518
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["page" => $context["i"], "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 518, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 518, $this->source); })())]), "html", null, true);
                    yield "\" class=\"page-btn ";
                    yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 518, $this->source); })()))) ? ("active") : (""));
                    yield "\">
    ";
                    // line 519
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "
</a>
";
                } elseif (((                // line 521
$context["i"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 521, $this->source); })()) - 2)) || ($context["i"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 521, $this->source); })()) + 2)))) {
                    // line 522
                    yield "<span class=\"page-btn\">...</span>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 525
            yield "
";
            // line 526
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 526, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 526, $this->source); })()))) {
                // line 527
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 527, $this->source); })()) + 1), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 527, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 527, $this->source); })())]), "html", null, true);
                yield "\" class=\"page-btn\">
<i class=\"fas fa-chevron-right\"></i>
</a>
";
            } else {
                // line 531
                yield "<span class=\"page-btn\" style=\"opacity: 0.4; cursor: not-allowed;\">
<i class=\"fas fa-chevron-right\"></i>
</span>
";
            }
            // line 535
            yield "</div>
</div>
";
        }
        // line 538
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 541
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

        // line 542
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function () {
    let currentSort = 'ASC';
    let dateSortDir = null;

    const searchInput = document.getElementById('searchInput');
    const tableBody = document.getElementById('usersTableBody');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const addUserModal = document.getElementById('addUserModal');
    const editUserModal = document.getElementById('editUserModal');
    const addFormContainer = document.getElementById('addFormContainer');
    const editFormContainer = document.getElementById('editFormContainer');
    const sortNom = document.getElementById('sortNom');
    const sortIcon = document.getElementById('sortIcon');
    const sortDate = document.getElementById('sortDate');
    const sortDateIcon = document.getElementById('sortDateIcon');

    let timeout = null;
    let currentFilter = \"";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("filter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 561, $this->source); })()), "all")) : ("all")), "html", null, true);
        yield "\";

    function loadUsers() {
        const searchValue = searchInput ? searchInput.value : '';
        fetch(`/admin/users/search?search=\${encodeURIComponent(searchValue)}&filter=\${currentFilter}&sort=\${currentSort}`)
            .then(r => r.text())
            .then(html => {
                if (tableBody) tableBody.innerHTML = html;
            })
            .catch(() => {});
    }

    document.getElementById('addUserBtn')?.addEventListener('click', () => {
        addFormContainer.innerHTML = `
        <div class=\"modal-body\">
        <div class=\"text-center\" style=\"padding: 40px;\">
        <i class=\"fas fa-spinner fa-spin\" style=\"font-size: 24px; color: var(--text-muted);\"></i>
        <p style=\"margin-top: 10px; color: var(--text-muted);\">Chargement...</p>
        </div>
        </div>`;

        fetch('/admin/user/form/add')
            .then(r => r.text())
            .then(html => {
                addFormContainer.innerHTML = html;
                addUserModal.classList.add('active');
                initForm('add');
            })
            .catch(err => {
                addFormContainer.innerHTML = '<div class=\"modal-body\"><div class=\"form-message error\">Erreur de chargement</div></div>';
            });
    });

    window.openEditModal = function (id) {
        editFormContainer.innerHTML = `
        <div class=\"modal-body\">
        <div class=\"text-center\" style=\"padding: 40px;\">
        <i class=\"fas fa-spinner fa-spin\" style=\"font-size: 24px; color: var(--text-muted);\"></i>
        <p style=\"margin-top: 10px; color: var(--text-muted);\">Chargement...</p>
        </div>
        </div>`;

        fetch(`/admin/user/form/\${id}/edit`)
            .then(r => r.text())
            .then(html => {
                editFormContainer.innerHTML = html;
                editUserModal.classList.add('active');
                initForm('edit');
            })
            .catch(err => {
                editFormContainer.innerHTML = '<div class=\"modal-body\"><div class=\"form-message error\">Erreur de chargement</div></div>';
            });
    };

    document.getElementById('closeAddModal')?.addEventListener('click', () => {
        addUserModal.classList.remove('active');
    });

    document.getElementById('closeEditModal')?.addEventListener('click', () => {
        editUserModal.classList.remove('active');
    });

    [addUserModal, editUserModal].forEach(modal => {
        modal?.addEventListener('click', e => {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });
    });

    document.addEventListener('click', function (e) {

        const toggleBtn = e.target.closest('.toggle-status');
        if (toggleBtn) {
            const id = toggleBtn.dataset.userId;
            fetch(`/admin/user/\${id}/toggle-status`, { method: 'POST' })
                .then(r => r.json())
                .then(res => {
                    if (res.success) loadUsers();
                });
        }

        const deleteBtn = e.target.closest('.delete-user');
        if (deleteBtn) {
            const id = deleteBtn.dataset.userId;
            showConfirmModal('Êtes-vous sûr de vouloir supprimer cet utilisateur ?', () => {
                fetch(`/admin/user/\${id}/delete`, { method: 'POST' })
                    .then(r => r.json())
                    .then(res => {
                        if (res.success) loadUsers();
                    });
            });
        }

        const editBtn = e.target.closest('.edit-user');
        if (editBtn) {
            openEditModal(editBtn.dataset.userId);
        }
    });

    searchInput?.addEventListener('keyup', () => {
        clearTimeout(timeout);
        timeout = setTimeout(loadUsers, 300);
    });

    filterButtons.forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentFilter = btn.dataset.filter;
            loadUsers();
        });
    });

    // Tri par nom
    sortNom?.addEventListener('click', () => {
        dateSortDir = null;
        if (sortDateIcon) sortDateIcon.className = 'fas fa-sort';

        currentSort = currentSort === 'ASC' ? 'DESC' : 'ASC';
        if (sortIcon) sortIcon.className = currentSort === 'ASC' ? 'fas fa-arrow-up' : 'fas fa-arrow-down';

        loadUsers();
    });

    // Tri par date
    sortDate?.addEventListener('click', () => {
        if (sortIcon) sortIcon.className = 'fas fa-sort';

        dateSortDir = dateSortDir === 'date_asc' ? 'date_desc' : 'date_asc';
        if (sortDateIcon) sortDateIcon.className = dateSortDir === 'date_asc'
            ? 'fas fa-arrow-up'
            : 'fas fa-arrow-down';

        currentSort = dateSortDir;
        loadUsers();
    });

    // Bouton tri
    document.getElementById('sortBtn')?.addEventListener('click', () => {
        dateSortDir = null;
        if (sortDateIcon) sortDateIcon.className = 'fas fa-sort';

        currentSort = currentSort === 'DESC' ? 'ASC' : 'DESC';
        if (sortIcon) sortIcon.className = currentSort === 'ASC' ? 'fas fa-arrow-up' : 'fas fa-arrow-down';

        loadUsers();
    });

});

function initForm(mode) {
    const form = document.getElementById('backofficeUserForm');
    if (!form) return;

    const messageContainer = document.getElementById('formMessage');
    const addUserModal = document.getElementById('addUserModal');
    const editUserModal = document.getElementById('editUserModal');

    form.noValidate = true;
    form.setAttribute('novalidate', 'novalidate');

    form.onsubmit = function (e) {
        e.preventDefault();
        e.stopPropagation();

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(r => r.json())
        .then(res => {

            if (res.success) {
                showMessage(messageContainer, true, res.message);

                setTimeout(() => {
                    if (mode === 'add') {
                        addUserModal.classList.remove('active');
                    } else {
                        editUserModal.classList.remove('active');
                    }

                    const searchInput = document.getElementById('searchInput');
                    const tableBody = document.getElementById('usersTableBody');
                    const currentFilter = document.querySelector('.filter-btn.active')?.dataset.filter || 'all';
                    const searchValue = searchInput ? searchInput.value : '';

                    fetch(`/admin/users/search?search=\${encodeURIComponent(searchValue)}&filter=\${currentFilter}&sort=ASC`)
                        .then(r => r.text())
                        .then(html => {
                            if (tableBody) tableBody.innerHTML = html;
                        });

                }, 1500);

            } else {
                showMessage(messageContainer, false, res.message);

                if (res.errors) {
                    displayFieldErrors(res.errors);
                }
            }

        })
        .catch(err => {
            console.error(err);
            showMessage(messageContainer, false, 'Erreur serveur');
        });

        return false;
    };
}

function showMessage(container, success, message) {
    if (!container) return;

    container.className = 'form-message ' + (success ? 'success' : 'error');
    container.textContent = message;
    container.style.display = 'block';
}

function showConfirmModal(message, onConfirm) {
    const modal = document.createElement('div');
    modal.className = 'modal-overlay active';

    modal.innerHTML = `
        <div class=\"modal\">
            <div class=\"modal-body\">
                <p style=\"margin-bottom:20px;\">\${message}</p>
                <div style=\"display:flex; justify-content:flex-end; gap:10px;\">
                    <button class=\"btn btn-secondary\" id=\"cancelBtn\">Annuler</button>
                    <button class=\"btn btn-primary\" id=\"okBtn\">Confirmer</button>
                </div>
            </div>
        </div>
    `;

    document.body.appendChild(modal);

    modal.querySelector('#cancelBtn').onclick = () => {
        modal.remove();
    };

    modal.querySelector('#okBtn').onclick = () => {
        modal.remove();
        onConfirm();
    };
}

function displayFieldErrors(errors) {
    document.querySelectorAll('.field-error').forEach(el => el.textContent = '');

    for (const field in errors) {
        let errorElement = null;

        switch (field) {
            case 'prenom':
                errorElement = document.getElementById('prenomError');
                break;
            case 'nom':
                errorElement = document.getElementById('nomError');
                break;
            case 'email':
                errorElement = document.getElementById('emailError');
                break;
            case 'telephone':
                errorElement = document.getElementById('telephoneError');
                break;
            case 'plainPassword':
            case 'first':
                errorElement = document.getElementById('plainPasswordFirstError');
                break;
            case 'second':
                errorElement = document.getElementById('plainPasswordSecondError');
                break;
        }

        if (errorElement) {
            errorElement.textContent = errors[field];
        }
    }
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
        return "admin/utilisateurs/index.html.twig";
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
        return array (  971 => 561,  949 => 542,  936 => 541,  924 => 538,  919 => 535,  913 => 531,  905 => 527,  903 => 526,  900 => 525,  892 => 522,  890 => 521,  885 => 519,  878 => 518,  876 => 517,  872 => 516,  869 => 515,  863 => 511,  855 => 507,  853 => 506,  845 => 503,  841 => 501,  839 => 500,  834 => 497,  827 => 492,  823 => 490,  817 => 488,  815 => 487,  805 => 479,  791 => 471,  785 => 468,  779 => 465,  773 => 461,  769 => 459,  763 => 457,  761 => 456,  756 => 453,  752 => 451,  748 => 449,  746 => 448,  743 => 447,  741 => 446,  738 => 445,  736 => 444,  731 => 441,  727 => 439,  723 => 437,  721 => 436,  718 => 435,  716 => 434,  713 => 433,  711 => 432,  705 => 429,  695 => 424,  688 => 421,  684 => 420,  680 => 418,  672 => 415,  670 => 414,  668 => 413,  666 => 412,  662 => 411,  660 => 410,  643 => 395,  635 => 388,  631 => 386,  621 => 384,  619 => 383,  610 => 376,  589 => 356,  561 => 330,  555 => 327,  549 => 324,  531 => 309,  525 => 306,  519 => 303,  513 => 300,  507 => 297,  497 => 290,  490 => 286,  479 => 279,  475 => 278,  471 => 277,  466 => 275,  455 => 268,  451 => 267,  447 => 266,  442 => 264,  431 => 257,  427 => 256,  423 => 255,  418 => 253,  173 => 10,  160 => 9,  137 => 7,  114 => 6,  91 => 5,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Utilisateurs - Admin ASAFAR{% endblock %}

{% block page_icon %}fas fa-users{% endblock %}
{% block page_title %}Gestion des Utilisateurs{% endblock %}
{% block breadcrumb %}Utilisateurs{% endblock %}

{% block content %}
<style>
/* Modal Styles */
.modal-overlay {
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background: rgba(5, 20, 33, 0.85);
backdrop-filter: blur(8px);
display: none;
align-items: center;
justify-content: center;
z-index: 9999;
padding: 20px;
}

.modal-overlay.active {
display: flex;
}

.modal {
background: linear-gradient(135deg, rgba(11, 45, 74, 0.98) 0%, rgba(7, 27, 46, 0.98) 100%);
border: 1px solid var(--border-subtle);
border-radius: 20px;
width: 100%;
max-width: 520px;
max-height: 90vh;
overflow: hidden;
box-shadow: 0 25px 80px rgba(0, 0, 0, 0.5), var(--shadow-glow-blue);
animation: modalSlide 0.3s ease;
}

@keyframes modalSlide {
from {
opacity: 0;
transform: translateY(-30px) scale(0.95);
}
to {
opacity: 1;
transform: translateY(0) scale(1);
}
}

.modal-header {
display: flex;
justify-content: space-between;
align-items: center;
padding: 20px 24px;
background: linear-gradient(135deg, rgba(30, 111, 168, 0.2) 0%, rgba(11, 45, 74, 0.4) 100%);
border-bottom: 1px solid var(--border-subtle);
}

.modal-header h3 {
font-size: 18px;
font-weight: 600;
color: var(--text-primary);
display: flex;
align-items: center;
gap: 10px;
}

.modal-header h3 i {
color: var(--amber);
}

.modal-close {
width: 36px;
height: 36px;
display: flex;
align-items: center;
justify-content: center;
background: var(--glass-bg);
border: 1px solid var(--border-subtle);
border-radius: 10px;
color: var(--text-secondary);
cursor: pointer;
transition: all var(--transition-medium);
}

.modal-close:hover {
background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);
color: white;
border-color: transparent;
transform: rotate(90deg);
}

.modal-body {
padding: 24px;
overflow-y: auto;
max-height: calc(90vh - 140px);
}

.form-row {
display: grid;
grid-template-columns: 1fr 1fr;
gap: 16px;
}

.form-group {
margin-bottom: 20px;
}

.form-group label {
display: block;
font-size: 13px;
font-weight: 500;
color: var(--text-secondary);
margin-bottom: 8px;
letter-spacing: 0.3px;
}

.form-group input,
.form-group select {
width: 100%;
padding: 14px 16px;
background: var(--glass-bg);
border: 1px solid var(--border-subtle);
border-radius: 10px;
color: var(--text-primary);
font-size: 14px;
font-family: inherit;
transition: all var(--transition-medium);
}

.form-group input::placeholder {
color: var(--text-muted);
}

.form-group input:focus,
.form-group select:focus {
outline: none;
border-color: var(--sky-blue);
box-shadow: 0 0 0 3px rgba(47, 168, 255, 0.15), var(--shadow-glow-blue);
}

.form-group select {
cursor: pointer;
appearance: none;
background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23A7E3FF' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L3 6h10l-5 5z'/%3E%3C/svg%3E\");
background-repeat: no-repeat;
background-position: right 16px center;
padding-right: 40px;
}

.form-group select option {
background: var(--midnight-blue);
color: var(--text-primary);
}

.form-message {
padding: 12px 16px;
border-radius: 10px;
font-size: 13px;
font-weight: 500;
display: none;
margin-bottom: 16px;
}

.form-message.error {
display: block;
background: rgba(239, 68, 68, 0.15);
color: #EF4444;
border: 1px solid rgba(239, 68, 68, 0.3);
}

.form-message.success {
display: block;
background: rgba(52, 211, 153, 0.15);
color: #34D399;
border: 1px solid rgba(52, 211, 153, 0.3);
}

.modal-footer {
display: flex;
justify-content: flex-end;
gap: 12px;
padding: 20px 24px;
background: linear-gradient(135deg, rgba(30, 111, 168, 0.1) 0%, rgba(11, 45, 74, 0.2) 100%);
border-top: 1px solid var(--border-subtle);
}

.modal-footer .btn {
min-width: 120px;
justify-content: center;
}

.field-error {
color: #e74c3c;
font-size: 12px;
margin-top: 5px;
min-height: 18px;
}

input.error, select.error {
border-color: #e74c3c !important;
}

input.valid, select.valid {
border-color: #2ecc71 !important;
}

.search-box-inline {
position: relative;
display: flex;
align-items: center;
}

.search-box-inline input {
width: 240px;
padding: 12px 16px 12px 42px;
background: var(--glass-bg);
border: 1px solid var(--border-subtle);
border-radius: 10px;
color: var(--text-primary);
transition: all 0.3s ease;
}

.search-box-inline input:focus {
border-color: var(--sky-blue);
box-shadow: 0 0 0 3px rgba(47, 168, 255, 0.15);
width: 300px;
}

@media (max-width: 480px) {
.form-row {
grid-template-columns: 1fr;
}
.modal {
max-width: 100%;
border-radius: 16px 16px 0 0;
}
.modal-overlay {
align-items: flex-end;
}
}
</style>

<div class=\"stats-grid\">
<div class=\"stat-card blue\">
<div class=\"stat-icon blue\">
<i class=\"fas fa-users\"></i>
</div>
<div class=\"stat-value\">{{ stats.total|default(0)|number_format(0, '', ' ') }}</div>
<div class=\"stat-label\">Total Utilisateurs</div>
<span class=\"stat-change {{ stats.growth >= 0 ? 'positive' : 'negative' }}\">
<i class=\"fas fa-arrow-{{ stats.growth >= 0 ? 'up' : 'down' }}\"></i>
{{ stats.growth >= 0 ? '+' : '' }}{{ stats.growth|default(0) }}% ce mois
</span>
</div>
<div class=\"stat-card green\">
<div class=\"stat-icon green\">
<i class=\"fas fa-user-check\"></i>
</div>
<div class=\"stat-value\">{{ stats.active|default(0)|number_format(0, '', ' ') }}</div>
<div class=\"stat-label\">Utilisateurs Actifs</div>
<span class=\"stat-change {{ stats.growth >= 0 ? 'positive' : 'negative' }}\">
<i class=\"fas fa-arrow-{{ stats.growth >= 0 ? 'up' : 'down' }}\"></i>
{{ stats.growth >= 0 ? '+' : '' }}{{ stats.growth|default(0) }}% ce mois
</span>
</div>
<div class=\"stat-card amber\">
<div class=\"stat-icon amber\">
<i class=\"fas fa-user-clock\"></i>
</div>
<div class=\"stat-value\">{{ stats.newThisMonth|default(0)|number_format(0, '', ' ') }}</div>
<div class=\"stat-label\">Nouveaux ce mois</div>
<span class=\"stat-change {{ stats.newGrowth >= 0 ? 'positive' : 'negative' }}\">
<i class=\"fas fa-arrow-{{ stats.newGrowth >= 0 ? 'up' : 'down' }}\"></i>
{{ stats.newGrowth >= 0 ? '+' : '' }}{{ stats.newGrowth|default(0) }}% ce mois
</span>
</div>
<div class=\"stat-card purple\">
<div class=\"stat-icon purple\">
<i class=\"fas fa-user-shield\"></i>
</div>
<div class=\"stat-value\">{{ stats.admins|default(0)|number_format(0, '', ' ') }}</div>
<div class=\"stat-label\">Administrateurs</div>
<span class=\"stat-change positive\">
<i class=\"fas fa-check\"></i>
{{ stats.admins|default(0) }} total
</span>
</div>
</div>

<div class=\"toolbar\">
<div class=\"toolbar-left\">
<a href=\"#\" data-filter=\"all\" class=\"filter-btn {{ filter == 'all' ? 'active' : '' }}\">
<i class=\"fas fa-users\"></i> Tous
</a>
<a href=\"#\" data-filter=\"active\" class=\"filter-btn {{ filter == 'active' ? 'active' : '' }}\">
<i class=\"fas fa-user-check\"></i> Actifs
</a>
<a href=\"#\" data-filter=\"inactive\" class=\"filter-btn {{ filter == 'inactive' ? 'active' : '' }}\">
<i class=\"fas fa-user-clock\"></i> Inactifs
</a>
<a href=\"#\" data-filter=\"blocked\" class=\"filter-btn {{ filter == 'blocked' ? 'active' : '' }}\">
<i class=\"fas fa-user-slash\"></i> Bloques
</a>
<a href=\"#\" data-filter=\"admin\" class=\"filter-btn {{ filter == 'admin' ? 'active' : '' }}\">
<i class=\"fas fa-user-shield\"></i> Admins
</a>
</div>

<div class=\"toolbar-right\">
<button class=\"btn btn-primary\" id=\"addUserBtn\">
<i class=\"fas fa-plus\"></i>
</button>
<button id=\"sortBtn\" class=\"btn btn-primary\">
    <i class=\"fas fa-sort-alpha-down\"></i>
</button>

<div class=\"search-box-inline\">
<i class=\"fas fa-search\"></i>
<input type=\"text\" id=\"searchInput\" value=\"{{ search }}\" placeholder=\"Rechercher un utilisateur...\">
</div>

<a href=\"{{ path('admin_users_export', {filter: filter, search: search}) }}\" class=\"btn btn-primary\">
<i class=\"fas fa-download\"></i> Exporter
</a>
<a href=\"{{ path('admin_chatbot') }}\" class=\"btn btn-primary\" title=\"Assistant IA\">
    <i class=\"fas fa-robot\"></i> Assistant IA
</a>
</div>
</div>

<div class=\"modal-overlay\" id=\"addUserModal\">
<div class=\"modal\">
<div class=\"modal-header\">
<h3><i class=\"fas fa-user-plus\"></i> Nouvel Utilisateur</h3>
<button class=\"modal-close\" id=\"closeAddModal\">
<i class=\"fas fa-times\"></i>
</button>
</div>
<div id=\"addFormContainer\">
<div class=\"modal-body\">
<div class=\"text-center\" style=\"padding: 40px;\">
<i class=\"fas fa-spinner fa-spin\" style=\"font-size: 24px; color: var(--text-muted);\"></i>
<p style=\"margin-top: 10px; color: var(--text-muted);\">Chargement...</p>
</div>
</div>
</div>
</div>
</div>

{# Modal modifier utilisateur #}
<div class=\"modal-overlay\" id=\"editUserModal\">
<div class=\"modal\">
<div class=\"modal-header\">
<h3><i class=\"fas fa-user-edit\"></i> Modifier Utilisateur</h3>
<button class=\"modal-close\" id=\"closeEditModal\">
<i class=\"fas fa-times\"></i>
</button>
</div>
<div id=\"editFormContainer\">
<div class=\"modal-body\">
<div class=\"text-center\" style=\"padding: 40px;\">
<i class=\"fas fa-spinner fa-spin\" style=\"font-size: 24px; color: var(--text-muted);\"></i>
<p style=\"margin-top: 10px; color: var(--text-muted);\">Chargement...</p>
</div>
</div>
</div>
</div>
</div>

{# Table Container #}
<div class=\"table-container\" id=\"usersTable\">
<div class=\"table-header\">
<div class=\"table-title\">
<i class=\"fas fa-list\"></i>
Liste des Utilisateurs
</div>
<div class=\"table-info\">
{% if total > 0 %}
Affichage de {{ ((currentPage - 1) * 10) + 1 }}-{{ (currentPage * 10) > total ? total : (currentPage * 10) }} sur {{ total|number_format(0, '', ' ') }} utilisateurs
{% else %}
Aucun utilisateur trouvé
{% endif %}
</div>
</div>

<table>
<thead>
<tr>
{# FIX : colonnes correctes pour les utilisateurs (sans colonne \"priorité\") #}
<th id=\"sortNom\" style=\"cursor:pointer;\">
    Nom
    <i id=\"sortIcon\" class=\"fas fa-sort\" style=\"margin-left:5px;\"></i>
</th>
<th>Email</th>
<th>Rôle</th>
<th>Statut</th>
<th id=\"sortDate\" style=\"cursor:pointer;\">
    Date d'inscription
    <i id=\"sortDateIcon\" class=\"fas fa-sort\" style=\"margin-left:5px;\"></i>
</th>
<th style=\"text-align: right;\">Actions</th>
</tr>
</thead>
<tbody id=\"usersTableBody\">
{% if users is defined and users|length > 0 %}
{% for user in users %}
{% set avatarColors = ['blue', 'amber', 'purple', 'green', 'orange'] %}
{% set colorIndex = (user.id % 5) %}
{% set avatarColor = avatarColors[colorIndex] %}
<tr data-role=\"{{ user.role|lower }}\" data-status=\"{{ user.statut|lower }}\">

    {# FIX : colonne Nom — affiche le prénom + nom de l'utilisateur (pas rec.priorite) #}
    <td>
        <div style=\"display: flex; align-items: center; gap: 10px;\">
            <div class=\"avatar avatar-{{ avatarColor }}\" style=\"width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:600;\">
                {{ user.prenom|default('?')|slice(0,1)|upper }}{{ user.nom|default('')|slice(0,1)|upper }}
            </div>
            <div>
                <div style=\"font-weight: 500;\">{{ user.prenom|default('') }} {{ user.nom|default('') }}</div>
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
        {% elseif user.statut == 'bloque' %}
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
            <button class=\"btn-action btn-edit edit-user\" data-user-id=\"{{ user.id }}\" title=\"Modifier\">
                <i class=\"fas fa-edit\"></i>
            </button>
            <button class=\"btn-action btn-edit toggle-status\" data-user-id=\"{{ user.id }}\" title=\"Changer le statut\">
                <i class=\"fas fa-sync-alt\"></i>
            </button>
            <button class=\"btn-action btn-delete delete-user\" data-user-id=\"{{ user.id }}\" title=\"Supprimer\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </div>
    </td>
</tr>
{% endfor %}
{% else %}
<tr>
<td colspan=\"6\">
<div class=\"empty-state\">
<div class=\"empty-state-icon\">
<i class=\"fas fa-users\"></i>
</div>
<h3>Aucun utilisateur trouvé</h3>
<p>
{% if search %}
Aucun résultat pour \"{{ search }}\"
{% else %}
Il n'y a pas encore d'utilisateurs.
{% endif %}
</p>
</div>
</td>
</tr>
{% endif %}
</tbody>
</table>

{% if pages is defined and pages > 1 %}
<div class=\"pagination-container\">
<div class=\"pagination-info\">
Page {{ currentPage }} sur {{ pages }}
</div>
<div class=\"pagination\">
{% if currentPage > 1 %}
<a href=\"{{ path('admin_users', {page: currentPage - 1, filter: filter, search: search}) }}\" class=\"page-btn\">
<i class=\"fas fa-chevron-left\"></i>
</a>
{% else %}
<span class=\"page-btn\" style=\"opacity: 0.4; cursor: not-allowed;\">
<i class=\"fas fa-chevron-left\"></i>
</span>
{% endif %}

{% for i in 1..pages %}
{% if i == 1 or i == pages or (i >= currentPage - 1 and i <= currentPage + 1) %}
<a href=\"{{ path('admin_users', {page: i, filter: filter, search: search}) }}\" class=\"page-btn {{ i == currentPage ? 'active' : '' }}\">
    {{ i }}
</a>
{% elseif i == currentPage - 2 or i == currentPage + 2 %}
<span class=\"page-btn\">...</span>
{% endif %}
{% endfor %}

{% if currentPage < pages %}
<a href=\"{{ path('admin_users', {page: currentPage + 1, filter: filter, search: search}) }}\" class=\"page-btn\">
<i class=\"fas fa-chevron-right\"></i>
</a>
{% else %}
<span class=\"page-btn\" style=\"opacity: 0.4; cursor: not-allowed;\">
<i class=\"fas fa-chevron-right\"></i>
</span>
{% endif %}
</div>
</div>
{% endif %}
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function () {
    let currentSort = 'ASC';
    let dateSortDir = null;

    const searchInput = document.getElementById('searchInput');
    const tableBody = document.getElementById('usersTableBody');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const addUserModal = document.getElementById('addUserModal');
    const editUserModal = document.getElementById('editUserModal');
    const addFormContainer = document.getElementById('addFormContainer');
    const editFormContainer = document.getElementById('editFormContainer');
    const sortNom = document.getElementById('sortNom');
    const sortIcon = document.getElementById('sortIcon');
    const sortDate = document.getElementById('sortDate');
    const sortDateIcon = document.getElementById('sortDateIcon');

    let timeout = null;
    let currentFilter = \"{{ filter|default('all') }}\";

    function loadUsers() {
        const searchValue = searchInput ? searchInput.value : '';
        fetch(`/admin/users/search?search=\${encodeURIComponent(searchValue)}&filter=\${currentFilter}&sort=\${currentSort}`)
            .then(r => r.text())
            .then(html => {
                if (tableBody) tableBody.innerHTML = html;
            })
            .catch(() => {});
    }

    document.getElementById('addUserBtn')?.addEventListener('click', () => {
        addFormContainer.innerHTML = `
        <div class=\"modal-body\">
        <div class=\"text-center\" style=\"padding: 40px;\">
        <i class=\"fas fa-spinner fa-spin\" style=\"font-size: 24px; color: var(--text-muted);\"></i>
        <p style=\"margin-top: 10px; color: var(--text-muted);\">Chargement...</p>
        </div>
        </div>`;

        fetch('/admin/user/form/add')
            .then(r => r.text())
            .then(html => {
                addFormContainer.innerHTML = html;
                addUserModal.classList.add('active');
                initForm('add');
            })
            .catch(err => {
                addFormContainer.innerHTML = '<div class=\"modal-body\"><div class=\"form-message error\">Erreur de chargement</div></div>';
            });
    });

    window.openEditModal = function (id) {
        editFormContainer.innerHTML = `
        <div class=\"modal-body\">
        <div class=\"text-center\" style=\"padding: 40px;\">
        <i class=\"fas fa-spinner fa-spin\" style=\"font-size: 24px; color: var(--text-muted);\"></i>
        <p style=\"margin-top: 10px; color: var(--text-muted);\">Chargement...</p>
        </div>
        </div>`;

        fetch(`/admin/user/form/\${id}/edit`)
            .then(r => r.text())
            .then(html => {
                editFormContainer.innerHTML = html;
                editUserModal.classList.add('active');
                initForm('edit');
            })
            .catch(err => {
                editFormContainer.innerHTML = '<div class=\"modal-body\"><div class=\"form-message error\">Erreur de chargement</div></div>';
            });
    };

    document.getElementById('closeAddModal')?.addEventListener('click', () => {
        addUserModal.classList.remove('active');
    });

    document.getElementById('closeEditModal')?.addEventListener('click', () => {
        editUserModal.classList.remove('active');
    });

    [addUserModal, editUserModal].forEach(modal => {
        modal?.addEventListener('click', e => {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });
    });

    document.addEventListener('click', function (e) {

        const toggleBtn = e.target.closest('.toggle-status');
        if (toggleBtn) {
            const id = toggleBtn.dataset.userId;
            fetch(`/admin/user/\${id}/toggle-status`, { method: 'POST' })
                .then(r => r.json())
                .then(res => {
                    if (res.success) loadUsers();
                });
        }

        const deleteBtn = e.target.closest('.delete-user');
        if (deleteBtn) {
            const id = deleteBtn.dataset.userId;
            showConfirmModal('Êtes-vous sûr de vouloir supprimer cet utilisateur ?', () => {
                fetch(`/admin/user/\${id}/delete`, { method: 'POST' })
                    .then(r => r.json())
                    .then(res => {
                        if (res.success) loadUsers();
                    });
            });
        }

        const editBtn = e.target.closest('.edit-user');
        if (editBtn) {
            openEditModal(editBtn.dataset.userId);
        }
    });

    searchInput?.addEventListener('keyup', () => {
        clearTimeout(timeout);
        timeout = setTimeout(loadUsers, 300);
    });

    filterButtons.forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            currentFilter = btn.dataset.filter;
            loadUsers();
        });
    });

    // Tri par nom
    sortNom?.addEventListener('click', () => {
        dateSortDir = null;
        if (sortDateIcon) sortDateIcon.className = 'fas fa-sort';

        currentSort = currentSort === 'ASC' ? 'DESC' : 'ASC';
        if (sortIcon) sortIcon.className = currentSort === 'ASC' ? 'fas fa-arrow-up' : 'fas fa-arrow-down';

        loadUsers();
    });

    // Tri par date
    sortDate?.addEventListener('click', () => {
        if (sortIcon) sortIcon.className = 'fas fa-sort';

        dateSortDir = dateSortDir === 'date_asc' ? 'date_desc' : 'date_asc';
        if (sortDateIcon) sortDateIcon.className = dateSortDir === 'date_asc'
            ? 'fas fa-arrow-up'
            : 'fas fa-arrow-down';

        currentSort = dateSortDir;
        loadUsers();
    });

    // Bouton tri
    document.getElementById('sortBtn')?.addEventListener('click', () => {
        dateSortDir = null;
        if (sortDateIcon) sortDateIcon.className = 'fas fa-sort';

        currentSort = currentSort === 'DESC' ? 'ASC' : 'DESC';
        if (sortIcon) sortIcon.className = currentSort === 'ASC' ? 'fas fa-arrow-up' : 'fas fa-arrow-down';

        loadUsers();
    });

});

function initForm(mode) {
    const form = document.getElementById('backofficeUserForm');
    if (!form) return;

    const messageContainer = document.getElementById('formMessage');
    const addUserModal = document.getElementById('addUserModal');
    const editUserModal = document.getElementById('editUserModal');

    form.noValidate = true;
    form.setAttribute('novalidate', 'novalidate');

    form.onsubmit = function (e) {
        e.preventDefault();
        e.stopPropagation();

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(r => r.json())
        .then(res => {

            if (res.success) {
                showMessage(messageContainer, true, res.message);

                setTimeout(() => {
                    if (mode === 'add') {
                        addUserModal.classList.remove('active');
                    } else {
                        editUserModal.classList.remove('active');
                    }

                    const searchInput = document.getElementById('searchInput');
                    const tableBody = document.getElementById('usersTableBody');
                    const currentFilter = document.querySelector('.filter-btn.active')?.dataset.filter || 'all';
                    const searchValue = searchInput ? searchInput.value : '';

                    fetch(`/admin/users/search?search=\${encodeURIComponent(searchValue)}&filter=\${currentFilter}&sort=ASC`)
                        .then(r => r.text())
                        .then(html => {
                            if (tableBody) tableBody.innerHTML = html;
                        });

                }, 1500);

            } else {
                showMessage(messageContainer, false, res.message);

                if (res.errors) {
                    displayFieldErrors(res.errors);
                }
            }

        })
        .catch(err => {
            console.error(err);
            showMessage(messageContainer, false, 'Erreur serveur');
        });

        return false;
    };
}

function showMessage(container, success, message) {
    if (!container) return;

    container.className = 'form-message ' + (success ? 'success' : 'error');
    container.textContent = message;
    container.style.display = 'block';
}

function showConfirmModal(message, onConfirm) {
    const modal = document.createElement('div');
    modal.className = 'modal-overlay active';

    modal.innerHTML = `
        <div class=\"modal\">
            <div class=\"modal-body\">
                <p style=\"margin-bottom:20px;\">\${message}</p>
                <div style=\"display:flex; justify-content:flex-end; gap:10px;\">
                    <button class=\"btn btn-secondary\" id=\"cancelBtn\">Annuler</button>
                    <button class=\"btn btn-primary\" id=\"okBtn\">Confirmer</button>
                </div>
            </div>
        </div>
    `;

    document.body.appendChild(modal);

    modal.querySelector('#cancelBtn').onclick = () => {
        modal.remove();
    };

    modal.querySelector('#okBtn').onclick = () => {
        modal.remove();
        onConfirm();
    };
}

function displayFieldErrors(errors) {
    document.querySelectorAll('.field-error').forEach(el => el.textContent = '');

    for (const field in errors) {
        let errorElement = null;

        switch (field) {
            case 'prenom':
                errorElement = document.getElementById('prenomError');
                break;
            case 'nom':
                errorElement = document.getElementById('nomError');
                break;
            case 'email':
                errorElement = document.getElementById('emailError');
                break;
            case 'telephone':
                errorElement = document.getElementById('telephoneError');
                break;
            case 'plainPassword':
            case 'first':
                errorElement = document.getElementById('plainPasswordFirstError');
                break;
            case 'second':
                errorElement = document.getElementById('plainPasswordSecondError');
                break;
        }

        if (errorElement) {
            errorElement.textContent = errors[field];
        }
    }
}
</script>
{% endblock %}
", "admin/utilisateurs/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\utilisateurs\\index.html.twig");
    }
}
