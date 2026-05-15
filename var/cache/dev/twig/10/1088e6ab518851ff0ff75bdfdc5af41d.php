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

/* admin/posts/form.html.twig */
class __TwigTemplate_9aef601386861014272774de21d37f13 extends Template
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
            'breadcrumb' => [$this, 'block_breadcrumb'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/form.html.twig"));

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
        yield "    <i class=\"fas fa-newspaper\"></i> ";
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
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_publications");
        yield "\">Publications</a> / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "<div style=\"max-width: 980px; margin: 0 auto;\">
    <div style=\"
        background: linear-gradient(135deg, rgba(8, 29, 57, 0.99) 0%, rgba(5, 20, 43, 0.99) 100%);
        border: 1px solid rgba(130, 190, 255, 0.10);
        border-radius: 28px;
        box-shadow: 0 22px 60px rgba(0,0,0,0.28);
        padding: 30px;
    \">
        <div style=\"margin-bottom: 24px;\">
            <h3 style=\"margin: 0; color: #f4f8ff; font-size: 30px; font-weight: 800;\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "</h3>
            <p style=\"margin: 8px 0 0; color: #a8bfdc;\">Page de secours pour la création ou la modification hors popup.</p>
        </div>

        ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 27, $this->source); })()), 'form_start', ["action" => (((        // line 28
array_key_exists("post", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_publication_create"))), "method" => "POST", "multipart" => true]);
        // line 31
        yield "
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 32, $this->source); })()), 'errors');
        yield "

            <div style=\"display:grid; grid-template-columns: 1fr 240px; gap: 16px; margin-bottom: 16px;\">
                <div>
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 36, $this->source); })()), "titre", [], "any", false, false, false, 36), 'label', ["label_attr" => ["style" => "display:block; color:#dbeafe; margin-bottom:8px; font-weight:700;"], "label" => "Titre"]);
        yield "
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 37, $this->source); })()), "titre", [], "any", false, false, false, 37), 'widget', ["attr" => ["placeholder" => "Titre du post...", "class" => "admin-form-input"]]);
        yield "
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 38, $this->source); })()), "titre", [], "any", false, false, false, 38), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), 'label', ["label_attr" => ["style" => "display:block; color:#dbeafe; margin-bottom:8px; font-weight:700;"], "label" => "Type"]);
        yield "
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 43, $this->source); })()), "type", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "admin-form-input"]]);
        yield "
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 44, $this->source); })()), "type", [], "any", false, false, false, 44), 'errors');
        yield "
                </div>
            </div>

            <div style=\"margin-bottom:16px;\">
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 49, $this->source); })()), "contenu", [], "any", false, false, false, 49), 'label', ["label_attr" => ["style" => "display:block; color:#dbeafe; margin-bottom:8px; font-weight:700;"], "label" => "Contenu"]);
        yield "
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 50, $this->source); })()), "contenu", [], "any", false, false, false, 50), 'widget', ["attr" => ["placeholder" => "Texte de la publication...", "rows" => 7, "class" => "admin-form-textarea"]]);
        yield "
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 51, $this->source); })()), "contenu", [], "any", false, false, false, 51), 'errors');
        yield "
            </div>

            <div style=\"
                margin-bottom: 20px;
                border: 2px dashed rgba(0, 213, 166, 0.22);
                background: rgba(255,255,255,0.02);
                border-radius: 20px;
                padding: 18px;
                text-align: center;
            \">
                <div style=\"color:#ffbf1b; font-weight:800; margin-bottom:6px;\">📷 Image</div>
                <div style=\"color:#a8bfdc; font-size:13px; margin-bottom:14px;\">Choisis une image depuis ton appareil</div>

                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 65, $this->source); })()), "imagePath", [], "any", false, false, false, 65), 'widget', ["attr" => ["accept" => "image/*", "class" => "admin-form-file"]]);
        yield "
                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 66, $this->source); })()), "imagePath", [], "any", false, false, false, 66), 'errors');
        yield "
            </div>

            <div style=\"display:flex; justify-content:flex-start; gap:12px; margin-top:24px;\">
                <button type=\"submit\" class=\"admin-form-btn admin-form-btn-primary\">Enregistrer</button>
                <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_publications");
        yield "\" class=\"admin-form-btn admin-form-btn-secondary\">Annuler</a>
            </div>
        ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<style>
.admin-form-input,
.admin-form-textarea,
.admin-form-file {
    width: 100%;
    box-sizing: border-box;
    border: 1px solid rgba(255,255,255,0.09);
    background: rgba(255,255,255,0.05);
    color: #f4f8ff;
    border-radius: 16px;
    padding: 14px 16px;
    outline: none;
    font-size: 14px;
}

.admin-form-textarea {
    min-height: 160px;
    resize: vertical;
}

.admin-form-input::placeholder,
.admin-form-textarea::placeholder {
    color: rgba(244,248,255,0.42);
}

.admin-form-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 14px 22px;
    border-radius: 16px;
    text-decoration: none;
    font-weight: 800;
    font-size: 15px;
    border: none;
    cursor: pointer;
    transition: transform 0.22s ease, box-shadow 0.22s ease;
}

.admin-form-btn:hover {
    transform: translateY(-2px);
}

.admin-form-btn-primary {
    background: linear-gradient(135deg, #ffbf1b 0%, #ff9f0a 100%);
    color: #08233f;
    box-shadow: 0 14px 30px rgba(255, 191, 27, 0.24);
}

.admin-form-btn-secondary {
    background: rgba(255,255,255,0.04);
    color: #dbeafe;
    border: 1px solid rgba(255,255,255,0.08);
}

@media (max-width: 768px) {
    div[style*=\"grid-template-columns: 1fr 240px\"] {
        grid-template-columns: 1fr !important;
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
        return "admin/posts/form.html.twig";
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
        return array (  263 => 73,  258 => 71,  250 => 66,  246 => 65,  229 => 51,  225 => 50,  221 => 49,  213 => 44,  209 => 43,  205 => 42,  198 => 38,  194 => 37,  190 => 36,  183 => 32,  180 => 31,  178 => 28,  177 => 27,  170 => 23,  159 => 14,  146 => 13,  130 => 10,  117 => 9,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}{{ title }} - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-newspaper\"></i> {{ title }}
{% endblock %}

{% block breadcrumb %}
    <a href=\"{{ path('admin_publications') }}\">Publications</a> / {{ title }}
{% endblock %}

{% block content %}
<div style=\"max-width: 980px; margin: 0 auto;\">
    <div style=\"
        background: linear-gradient(135deg, rgba(8, 29, 57, 0.99) 0%, rgba(5, 20, 43, 0.99) 100%);
        border: 1px solid rgba(130, 190, 255, 0.10);
        border-radius: 28px;
        box-shadow: 0 22px 60px rgba(0,0,0,0.28);
        padding: 30px;
    \">
        <div style=\"margin-bottom: 24px;\">
            <h3 style=\"margin: 0; color: #f4f8ff; font-size: 30px; font-weight: 800;\">{{ title }}</h3>
            <p style=\"margin: 8px 0 0; color: #a8bfdc;\">Page de secours pour la création ou la modification hors popup.</p>
        </div>

        {{ form_start(postForm, {
            'action': post is defined and post.id is not null ? path('admin_publication_edit', {'id': post.id}) : path('admin_publication_create'),
            'method': 'POST',
            'multipart': true
        }) }}
            {{ form_errors(postForm) }}

            <div style=\"display:grid; grid-template-columns: 1fr 240px; gap: 16px; margin-bottom: 16px;\">
                <div>
                    {{ form_label(postForm.titre, 'Titre', {'label_attr': {'style': 'display:block; color:#dbeafe; margin-bottom:8px; font-weight:700;'}}) }}
                    {{ form_widget(postForm.titre, {'attr': {'placeholder': 'Titre du post...', 'class': 'admin-form-input'}}) }}
                    {{ form_errors(postForm.titre) }}
                </div>

                <div>
                    {{ form_label(postForm.type, 'Type', {'label_attr': {'style': 'display:block; color:#dbeafe; margin-bottom:8px; font-weight:700;'}}) }}
                    {{ form_widget(postForm.type, {'attr': {'class': 'admin-form-input'}}) }}
                    {{ form_errors(postForm.type) }}
                </div>
            </div>

            <div style=\"margin-bottom:16px;\">
                {{ form_label(postForm.contenu, 'Contenu', {'label_attr': {'style': 'display:block; color:#dbeafe; margin-bottom:8px; font-weight:700;'}}) }}
                {{ form_widget(postForm.contenu, {'attr': {'placeholder': 'Texte de la publication...', 'rows': 7, 'class': 'admin-form-textarea'}}) }}
                {{ form_errors(postForm.contenu) }}
            </div>

            <div style=\"
                margin-bottom: 20px;
                border: 2px dashed rgba(0, 213, 166, 0.22);
                background: rgba(255,255,255,0.02);
                border-radius: 20px;
                padding: 18px;
                text-align: center;
            \">
                <div style=\"color:#ffbf1b; font-weight:800; margin-bottom:6px;\">📷 Image</div>
                <div style=\"color:#a8bfdc; font-size:13px; margin-bottom:14px;\">Choisis une image depuis ton appareil</div>

                {{ form_widget(postForm.imagePath, {'attr': {'accept': 'image/*', 'class': 'admin-form-file'}}) }}
                {{ form_errors(postForm.imagePath) }}
            </div>

            <div style=\"display:flex; justify-content:flex-start; gap:12px; margin-top:24px;\">
                <button type=\"submit\" class=\"admin-form-btn admin-form-btn-primary\">Enregistrer</button>
                <a href=\"{{ path('admin_publications') }}\" class=\"admin-form-btn admin-form-btn-secondary\">Annuler</a>
            </div>
        {{ form_end(postForm) }}
    </div>
</div>

<style>
.admin-form-input,
.admin-form-textarea,
.admin-form-file {
    width: 100%;
    box-sizing: border-box;
    border: 1px solid rgba(255,255,255,0.09);
    background: rgba(255,255,255,0.05);
    color: #f4f8ff;
    border-radius: 16px;
    padding: 14px 16px;
    outline: none;
    font-size: 14px;
}

.admin-form-textarea {
    min-height: 160px;
    resize: vertical;
}

.admin-form-input::placeholder,
.admin-form-textarea::placeholder {
    color: rgba(244,248,255,0.42);
}

.admin-form-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 14px 22px;
    border-radius: 16px;
    text-decoration: none;
    font-weight: 800;
    font-size: 15px;
    border: none;
    cursor: pointer;
    transition: transform 0.22s ease, box-shadow 0.22s ease;
}

.admin-form-btn:hover {
    transform: translateY(-2px);
}

.admin-form-btn-primary {
    background: linear-gradient(135deg, #ffbf1b 0%, #ff9f0a 100%);
    color: #08233f;
    box-shadow: 0 14px 30px rgba(255, 191, 27, 0.24);
}

.admin-form-btn-secondary {
    background: rgba(255,255,255,0.04);
    color: #dbeafe;
    border: 1px solid rgba(255,255,255,0.08);
}

@media (max-width: 768px) {
    div[style*=\"grid-template-columns: 1fr 240px\"] {
        grid-template-columns: 1fr !important;
    }
}
</style>
{% endblock %}", "admin/posts/form.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\posts\\form.html.twig");
    }
}
