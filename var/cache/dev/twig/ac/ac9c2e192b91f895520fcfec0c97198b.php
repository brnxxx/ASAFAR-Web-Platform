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

/* admin/categories/form.html.twig */
class __TwigTemplate_61ce127f50d8d2a9507cc3b05d97509e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/form.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        yield " - Admin ASAFAR";
        
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
        yield "    <i class=\"fas fa-tags\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "
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
        yield "<div style=\"max-width: 800px; margin: 0 auto;\">
    <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px solid rgba(255, 193, 7, 0.15); border-radius: 16px; padding: 40px; overflow: hidden;\">

        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "categorie-form", "novalidate" => "novalidate"]]);
        yield "

        <!-- Nom -->
        <div class=\"form-group\">
            <label for=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Nom de la Categorie
                <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
            </label>
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "placeholder" => "Nom de la categorie"]]);
        yield "
        </div>

        <!-- Description -->
        <div class=\"form-group\">
            <label for=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Description
            </label>
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "rows" => 4, "placeholder" => "Description de la categorie"]]);
        yield "
        </div>

        <!-- Form Actions -->
        <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 20px; border-top: 2px solid rgba(255, 193, 7, 0.1);\">
            <button type=\"submit\" class=\"btn-submit\">
                <i class=\"fas fa-save\"></i>
                <span>";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Mettre a Jour";
        } else {
            yield "Creer";
        }
        yield "</span>
            </button>

            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories");
        yield "\" class=\"btn-cancel\">
                <i class=\"fas fa-times\"></i>
                <span>Annuler</span>
            </a>
        </div>

        ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<style>
    .form-group {
        margin-bottom: 24px;
    }

    input[type=\"text\"],
    textarea {
        width: 100%;
        padding: 12px 16px;
        background: rgba(255, 255, 255, 0.05);
        border: 2px solid rgba(255, 193, 7, 0.2);
        border-radius: 8px;
        color: var(--text-primary);
        font-family: 'Inter', sans-serif;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    input:focus, textarea:focus {
        outline: none !important;
        background: rgba(255, 255, 255, 0.08);
        border-color: #FFC107;
        box-shadow: 0 0 15px rgba(255, 193, 7, 0.2);
    }

    .btn-submit {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
        color: #0B2D4A;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(255, 193, 7, 0.35);
    }

    .btn-cancel {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: rgba(255, 193, 7, 0.1);
        color: var(--accent-amber);
        border: 2px solid var(--accent-amber);
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-cancel:hover {
        background: var(--accent-amber);
        color: #0B2D4A;
        transform: translateY(-3px);
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
        return "admin/categories/form.html.twig";
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
        return array (  191 => 45,  182 => 39,  172 => 36,  162 => 29,  156 => 26,  148 => 21,  141 => 17,  134 => 13,  129 => 10,  116 => 9,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}{{ title }} - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-tags\"></i> {{ title }}
{% endblock %}

{% block content %}
<div style=\"max-width: 800px; margin: 0 auto;\">
    <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px solid rgba(255, 193, 7, 0.15); border-radius: 16px; padding: 40px; overflow: hidden;\">

        {{ form_start(form, {'attr': {'class': 'categorie-form', 'novalidate': 'novalidate'}}) }}

        <!-- Nom -->
        <div class=\"form-group\">
            <label for=\"{{ form.nom.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Nom de la Categorie
                <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
            </label>
            {{ form_widget(form.nom, {'attr': {'id': form.nom.vars.id, 'placeholder': 'Nom de la categorie'}}) }}
        </div>

        <!-- Description -->
        <div class=\"form-group\">
            <label for=\"{{ form.description.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Description
            </label>
            {{ form_widget(form.description, {'attr': {'id': form.description.vars.id, 'rows': 4, 'placeholder': 'Description de la categorie'}}) }}
        </div>

        <!-- Form Actions -->
        <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 20px; border-top: 2px solid rgba(255, 193, 7, 0.1);\">
            <button type=\"submit\" class=\"btn-submit\">
                <i class=\"fas fa-save\"></i>
                <span>{% if categorie.id %}Mettre a Jour{% else %}Creer{% endif %}</span>
            </button>

            <a href=\"{{ path('admin_categories') }}\" class=\"btn-cancel\">
                <i class=\"fas fa-times\"></i>
                <span>Annuler</span>
            </a>
        </div>

        {{ form_end(form) }}
    </div>
</div>

<style>
    .form-group {
        margin-bottom: 24px;
    }

    input[type=\"text\"],
    textarea {
        width: 100%;
        padding: 12px 16px;
        background: rgba(255, 255, 255, 0.05);
        border: 2px solid rgba(255, 193, 7, 0.2);
        border-radius: 8px;
        color: var(--text-primary);
        font-family: 'Inter', sans-serif;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    input:focus, textarea:focus {
        outline: none !important;
        background: rgba(255, 255, 255, 0.08);
        border-color: #FFC107;
        box-shadow: 0 0 15px rgba(255, 193, 7, 0.2);
    }

    .btn-submit {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
        color: #0B2D4A;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(255, 193, 7, 0.35);
    }

    .btn-cancel {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: rgba(255, 193, 7, 0.1);
        color: var(--accent-amber);
        border: 2px solid var(--accent-amber);
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-cancel:hover {
        background: var(--accent-amber);
        color: #0B2D4A;
        transform: translateY(-3px);
    }
</style>
{% endblock %}
", "admin/categories/form.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\categories\\form.html.twig");
    }
}
