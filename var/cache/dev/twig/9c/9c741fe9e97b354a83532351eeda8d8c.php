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

/* admin/reclamations/view.html.twig */
class __TwigTemplate_95bc0a81b37d1a374bfbf47a438cfec2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamations/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamations/view.html.twig"));

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

        yield "Réclamation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 3, $this->source); })()), "idReclamation", [], "any", false, false, false, 3), "html", null, true);
        yield " — Admin ASAFAR";
        
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

        yield "fas fa-comment-dots";
        
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

        yield "Détail Réclamation";
        
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

        yield "Réclamations";
        
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
.rec-view-grid {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 20px;
}
@media (max-width: 768px) { .rec-view-grid { grid-template-columns: 1fr; } }

.rec-view-card {
    background: linear-gradient(135deg, rgba(11,45,74,0.6) 0%, rgba(7,27,46,0.8) 100%);
    border: 1px solid var(--border-subtle);
    border-radius: 20px;
    padding: 28px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
}

.rec-view-label {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: var(--text-secondary);
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.rec-view-label i { color: var(--amber); font-size: 10px; }

.rec-view-value {
    font-size: 14px;
    color: var(--text-primary);
    line-height: 1.6;
    margin-bottom: 24px;
}

.rec-view-value.description {
    background: var(--glass-bg);
    border-radius: 12px;
    padding: 16px;
    border: 1px solid var(--border-subtle);
    white-space: pre-line;
    font-size: 14px;
    line-height: 1.7;
}

.badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}
.badge-EN_ATTENTE { background: rgba(245,158,11,0.15); color: #fbbf24; border: 1px solid rgba(245,158,11,0.3); }
.badge-TRAITEE    { background: rgba(52,211,153,0.15);  color: #34d399; border: 1px solid rgba(52,211,153,0.3); }
.badge-REFUSEE    { background: rgba(239,68,68,0.15);   color: #f87171; border: 1px solid rgba(239,68,68,0.3); }

.type-badge { padding: 5px 12px; border-radius: 8px; font-size: 11px; font-weight: 600; }
.type-TRANSPORT   { background: rgba(59,130,246,0.15);  color: #60a5fa; }
.type-HEBERGEMENT { background: rgba(168,85,247,0.15);  color: #c084fc; }
.type-LOISIR      { background: rgba(20,184,166,0.15);  color: #2dd4bf; }

.rec-reponse-box {
    background: rgba(52,211,153,0.07);
    border: 1px solid rgba(52,211,153,0.2);
    border-left: 3px solid #34d399;
    border-radius: 0 12px 12px 0;
    padding: 16px;
    font-size: 14px;
    color: var(--text-primary);
    line-height: 1.7;
    white-space: pre-line;
    margin-bottom: 20px;
}

/* Sidebar actions */
.action-card {
    background: linear-gradient(135deg, rgba(11,45,74,0.6) 0%, rgba(7,27,46,0.8) 100%);
    border: 1px solid var(--border-subtle);
    border-radius: 16px;
    padding: 22px;
    margin-bottom: 16px;
}
.action-card:last-child { margin-bottom: 0; }

.action-card-title {
    font-size: 13px;
    font-weight: 600;
    color: var(--text-secondary);
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
    letter-spacing: 0.5px;
}
.action-card-title i { color: var(--amber); }

.statut-select {
    width: 100%;
    padding: 12px 16px;
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 10px;
    color: var(--text-primary);
    font-size: 13px;
    font-family: inherit;
    outline: none;
    cursor: pointer;
    margin-bottom: 12px;
    transition: all 0.2s ease;
    appearance: none;
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23A7E3FF' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L3 6h10l-5 5z'/%3E%3C/svg%3E\");
    background-repeat: no-repeat;
    background-position: right 14px center;
    padding-right: 36px;
}
.statut-select:focus { border-color: var(--sky-blue); box-shadow: 0 0 0 3px rgba(47,168,255,0.15); }
.statut-select option { background: #071b2e; color: var(--text-primary); }

.reply-textarea {
    width: 100%;
    min-height: 110px;
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 10px;
    padding: 12px 14px;
    font-size: 13px;
    font-family: inherit;
    resize: vertical;
    outline: none;
    color: var(--text-primary);
    box-sizing: border-box;
    transition: all 0.2s ease;
    margin-bottom: 12px;
}
.reply-textarea:focus { border-color: var(--sky-blue); box-shadow: 0 0 0 3px rgba(47,168,255,0.15); }
.reply-textarea::placeholder { color: var(--text-muted); }

.admin-toast {
    position: fixed; bottom: 24px; right: 24px;
    padding: 14px 20px; border-radius: 12px;
    font-size: 13px; font-weight: 500; color: white;
    z-index: 9999; transform: translateY(80px); opacity: 0;
    transition: all 0.4s cubic-bezier(0.34,1.56,0.64,1);
    display: flex; align-items: center; gap: 10px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}
.admin-toast.show    { transform: translateY(0); opacity: 1; }
.admin-toast.success { background: linear-gradient(135deg, #059669, #10b981); }
.admin-toast.error   { background: linear-gradient(135deg, #dc2626, #ef4444); }
</style>

";
        // line 165
        yield "<div style=\"margin-bottom:24px; display:flex; align-items:center; gap:12px;\">
    <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations");
        yield "\" class=\"btn btn-secondary\" style=\"display:inline-flex; align-items:center; gap:8px;\">
        <i class=\"fas fa-arrow-left\"></i> Retour
    </a>
    <div>

        <p style=\"font-size:12px; color:var(--text-muted); margin:2px 0 0;\">
            Déposée le ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 172, $this->source); })()), "dateReclamation", [], "any", false, false, false, 172), "d/m/Y"), "html", null, true);
        yield "
        </p>
    </div>
</div>

<div class=\"rec-view-grid\">

    ";
        // line 180
        yield "    <div class=\"rec-view-card\">
        <div class=\"rec-view-label\"><i class=\"fas fa-heading\"></i> Sujet</div>
        <div class=\"rec-view-value\" style=\"font-size:20px; font-weight:700;\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 182, $this->source); })()), "sujet", [], "any", false, false, false, 182), "html", null, true);
        yield "</div>

        <div style=\"display:flex; gap:16px; margin-bottom:24px; flex-wrap:wrap;\">
            <div>
                <div class=\"rec-view-label\"><i class=\"fas fa-tag\"></i> Type</div>
                <span class=\"type-badge type-";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 187, $this->source); })()), "typeReclamation", [], "any", false, false, false, 187), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 187, $this->source); })()), "typeReclamation", [], "any", false, false, false, 187), "html", null, true);
        yield "</span>
            </div>
            <div>
                <div class=\"rec-view-label\"><i class=\"fas fa-circle\"></i> Statut</div>
                <span class=\"badge badge-";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 191, $this->source); })()), "statut", [], "any", false, false, false, 191), "html", null, true);
        yield "\" id=\"statusBadge\">
                    ";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 192, $this->source); })()), "statut", [], "any", false, false, false, 192), ["_" => " "]), "html", null, true);
        yield "
                </span>
            </div>
            <div>
                <div class=\"rec-view-label\"><i class=\"fas fa-user\"></i> Utilisateur</div>
                <span style=\"font-size:13px; color:var(--text-secondary);\">#";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 197, $this->source); })()), "idUser", [], "any", false, false, false, 197), "html", null, true);
        yield "</span>
            </div>
        </div>

        <div class=\"rec-view-label\"><i class=\"fas fa-align-left\"></i> Description</div>
        <div class=\"rec-view-value description\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 202, $this->source); })()), "description", [], "any", false, false, false, 202), "html", null, true);
        yield "</div>

        ";
        // line 204
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 204, $this->source); })()), "reponseAdmin", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 205
            yield "        <div class=\"rec-view-label\" style=\"color:#34d399;\">
            <i class=\"fas fa-reply\"></i> Réponse de l'administrateur
        </div>
        <div class=\"rec-reponse-box\">";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 208, $this->source); })()), "reponseAdmin", [], "any", false, false, false, 208), "html", null, true);
            yield "</div>
        ";
        }
        // line 210
        yield "
    </div>
";
        // line 213
        if ((($tmp = (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 213, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 214
            yield "<div class=\"rec-view-card\" style=\"margin-top: 20px; grid-column: 1 / -1;\">
    <div class=\"rec-view-label\">
        <i class=\"fab fa-whatsapp\" style=\"color:#25d366;\"></i> Analyse WhatsApp IA
    </div>

    <div style=\"display:flex; gap:12px; flex-wrap:wrap; margin-bottom:20px;\">
        <div>
            <div class=\"rec-view-label\">Statut session</div>
            ";
            // line 222
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 222, $this->source); })()), "isActive", [], "any", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 223
                yield "                <span class=\"badge\" style=\"background:rgba(52,211,153,0.15); color:#34d399; border:1px solid rgba(52,211,153,0.3);\">
                    <i class=\"fas fa-circle\" style=\"font-size:8px;\"></i> En cours
                </span>
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 226
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 226, $this->source); })()), "step", [], "any", false, false, false, 226) == "annule")) {
                // line 227
                yield "                <span class=\"badge\" style=\"background:rgba(239,68,68,0.15); color:#f87171; border:1px solid rgba(239,68,68,0.3);\">
                    <i class=\"fas fa-ban\"></i> Annulée
                </span>
            ";
            } else {
                // line 231
                yield "                <span class=\"badge\" style=\"background:rgba(47,168,255,0.15); color:#60a5fa; border:1px solid rgba(47,168,255,0.3);\">
                    <i class=\"fas fa-check\"></i> Terminée
                </span>
            ";
            }
            // line 235
            yield "        </div>
        <div>
            <div class=\"rec-view-label\">Cohérence</div>
            ";
            // line 238
            if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 238, $this->source); })()), "coherent", [], "any", false, false, false, 238))) {
                // line 239
                yield "                <span class=\"badge\" style=\"background:rgba(100,116,139,0.15); color:#94a3b8; border:1px solid rgba(100,116,139,0.3);\">
                    <i class=\"fas fa-minus\"></i> N/A
                </span>
            ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 242
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 242, $this->source); })()), "coherent", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 243
                yield "                <span class=\"badge\" style=\"background:rgba(52,211,153,0.15); color:#34d399; border:1px solid rgba(52,211,153,0.3);\">
                    <i class=\"fas fa-check-circle\"></i> Valide
                </span>
            ";
            } else {
                // line 247
                yield "                <span class=\"badge\" style=\"background:rgba(239,68,68,0.15); color:#f87171; border:1px solid rgba(239,68,68,0.3);\">
                    <i class=\"fas fa-times-circle\"></i> Invalide
                </span>
            ";
            }
            // line 251
            yield "        </div>
        <div>
            <div class=\"rec-view-label\">Tours</div>
            <span style=\"font-size:14px; font-weight:700; color:#818cf8;\">";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 254, $this->source); })()), "turn", [], "any", false, false, false, 254), "html", null, true);
            yield " / 4</span>
        </div>
        <div>
            <div class=\"rec-view-label\">Téléphone</div>
            <span style=\"font-size:13px; color:#25d366; font-family:monospace;\">
                <i class=\"fab fa-whatsapp\"></i> ";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 259, $this->source); })()), "phone", [], "any", false, false, false, 259), "html", null, true);
            yield "
            </span>
        </div>
    </div>

    ";
            // line 264
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 264, $this->source); })()), "reason", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 265
                yield "    <div class=\"rec-view-label\"><i class=\"fas fa-gavel\"></i> Raison du verdict</div>
    <div class=\"rec-view-value description\" style=\"border-color:rgba(99,102,241,0.2); background:rgba(99,102,241,0.06);\">
        ";
                // line 267
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 267, $this->source); })()), "reason", [], "any", false, false, false, 267), "html", null, true);
                yield "
    </div>
    ";
            }
            // line 270
            yield "
    ";
            // line 271
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 271, $this->source); })()), "analysisSummary", [], "any", false, false, false, 271)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 272
                yield "    <div class=\"rec-view-label\"><i class=\"fas fa-robot\"></i> Résumé IA</div>
    <div class=\"rec-view-value description\" style=\"border-color:rgba(245,158,11,0.2); background:rgba(245,158,11,0.06);\">
        ";
                // line 274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 274, $this->source); })()), "analysisSummary", [], "any", false, false, false, 274), "html", null, true);
                yield "
    </div>
    ";
            }
            // line 277
            yield "
";
            // line 279
            if ((array_key_exists("history", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 279, $this->source); })())) > 0))) {
                // line 280
                yield "<div class=\"rec-view-label\"><i class=\"fas fa-comments\"></i> Conversation (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 280, $this->source); })())), "html", null, true);
                yield " messages)</div>
<div style=\"display:flex; flex-direction:column; gap:10px;\">
    ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 282, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 283
                    yield "        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "role", [], "any", false, false, false, 283) == "user")) {
                        // line 284
                        yield "        <div style=\"align-self:flex-end; max-width:80%; background:rgba(37,211,102,0.12); border:1px solid rgba(37,211,102,0.2); border-radius:14px 14px 4px 14px; padding:12px 16px;\">
            <div style=\"font-size:10px; font-weight:600; text-transform:uppercase; color:#25d366; margin-bottom:4px;\">👤 Utilisateur</div>
            <div style=\"font-size:13px; color:var(--text-primary);\">";
                        // line 286
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "content", [], "any", false, false, false, 286), "html", null, true);
                        yield "</div>
        </div>
        ";
                    } else {
                        // line 289
                        yield "        <div style=\"align-self:flex-start; max-width:80%; background:rgba(47,168,255,0.10); border:1px solid rgba(47,168,255,0.2); border-radius:14px 14px 14px 4px; padding:12px 16px;\">
            <div style=\"font-size:10px; font-weight:600; text-transform:uppercase; color:#60a5fa; margin-bottom:4px;\">🤖 Assistant IA</div>
            <div style=\"font-size:13px; color:var(--text-primary);\">";
                        // line 291
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "content", [], "any", false, false, false, 291), "html", null, true);
                        yield "</div>
        </div>
        ";
                    }
                    // line 294
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 295
                yield "</div>
";
            }
            // line 297
            yield "
    <div style=\"margin-top:16px; text-align:right;\">
<a href=\"";
            // line 299
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_whatsapp_sessions");
            yield "?search=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 299, $this->source); })()), "id", [], "any", false, false, false, 299), "html", null, true);
            yield "\"
           class=\"btn btn-secondary\" style=\"font-size:12px;\">
            <i class=\"fab fa-whatsapp\"></i> Voir toutes les sessions de ce numéro
        </a>
    </div>
</div>
";
        }
        // line 306
        yield "    ";
        // line 307
        yield "    <div>



<div class=\"admin-toast\" id=\"adminToast\">
    <i id=\"toastIcon\" class=\"fas fa-check-circle\"></i>
    <span id=\"toastMsg\"></span>
</div>

<script>
const recId = ";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rec"]) || array_key_exists("rec", $context) ? $context["rec"] : (function () { throw new RuntimeError('Variable "rec" does not exist.', 317, $this->source); })()), "idReclamation", [], "any", false, false, false, 317), "html", null, true);
        yield ";

function saveStatut() {
    const statut = document.getElementById('statutSelect').value;
    fetch(`/admin/reclamations/\${recId}/statut`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ statut })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            showToast('Statut mis à jour ', 'success');
            const badge = document.getElementById('statusBadge');
            if (badge) { badge.className = `badge badge-\${statut}`; badge.textContent = statut.replace('_', ' '); }
        } else { showToast('Erreur', 'error'); }
    });
}

function sendReply() {
    const reponse = document.getElementById('replyText').value.trim();
    const btn     = document.getElementById('replyBtn');
    if (!reponse || reponse.length < 5) { showToast('Réponse trop courte', 'error'); return; }

    btn.disabled    = true;
    btn.innerHTML   = '<i class=\"fas fa-spinner fa-spin\"></i> Envoi...';

    fetch(`/admin/reclamations/\${recId}/repondre`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ reponse })
    })
    .then(r => r.json())
    .then(data => {
        btn.disabled  = false;
        btn.innerHTML = '<i class=\"fas fa-paper-plane\"></i> Envoyer la réponse';
        if (data.success) {
            showToast('Réponse envoyée avec succès !', 'success');
            document.getElementById('statutSelect').value = 'TRAITEE';
            const badge = document.getElementById('statusBadge');
            if (badge) { badge.className = 'badge badge-TRAITEE'; badge.textContent = 'TRAITEE'; }
        } else { showToast(data.message || 'Erreur', 'error'); }
    })
    .catch(() => {
        btn.disabled  = false;
        btn.innerHTML = '<i class=\"fas fa-paper-plane\"></i> Envoyer la réponse';
        showToast('Erreur de connexion', 'error');
    });
}

let toastTimer = null;
function showToast(message, type = 'success') {
    const toast = document.getElementById('adminToast');
    toast.className = `admin-toast \${type}`;
    document.getElementById('toastMsg').textContent = message;
    document.getElementById('toastIcon').className  = type === 'success' ? 'fas fa-check-circle' : 'fas fa-times-circle';
    toast.classList.add('show');
    if (toastTimer) clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('show'), 3500);
}

function sendNewReply() {
    const text = document.getElementById('newReplyText').value.trim();

    if (!text || text.length < 5) {
        showToast('Réponse trop courte', 'error');
        return;
    }

    fetch(`/admin/reclamations/\${recId}/repondre`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ reponse: text })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            showToast('Nouvelle réponse envoyée', 'success');
            location.reload();
        } else {
            showToast(data.message || 'Erreur', 'error');
        }
    })
    .catch(err => {
        console.error(err);
        showToast('Erreur serveur', 'error');
    });
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
        return "admin/reclamations/view.html.twig";
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
        return array (  599 => 317,  587 => 307,  585 => 306,  573 => 299,  569 => 297,  565 => 295,  559 => 294,  553 => 291,  549 => 289,  543 => 286,  539 => 284,  536 => 283,  532 => 282,  526 => 280,  524 => 279,  521 => 277,  515 => 274,  511 => 272,  509 => 271,  506 => 270,  500 => 267,  496 => 265,  494 => 264,  486 => 259,  478 => 254,  473 => 251,  467 => 247,  461 => 243,  459 => 242,  454 => 239,  452 => 238,  447 => 235,  441 => 231,  435 => 227,  433 => 226,  428 => 223,  426 => 222,  416 => 214,  414 => 213,  410 => 210,  405 => 208,  400 => 205,  398 => 204,  393 => 202,  385 => 197,  377 => 192,  373 => 191,  364 => 187,  356 => 182,  352 => 180,  342 => 172,  333 => 166,  330 => 165,  174 => 10,  161 => 9,  138 => 7,  115 => 6,  92 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Réclamation #{{ rec.idReclamation }} — Admin ASAFAR{% endblock %}

{% block page_icon %}fas fa-comment-dots{% endblock %}
{% block page_title %}Détail Réclamation{% endblock %}
{% block breadcrumb %}Réclamations{% endblock %}

{% block content %}
<style>
.rec-view-grid {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 20px;
}
@media (max-width: 768px) { .rec-view-grid { grid-template-columns: 1fr; } }

.rec-view-card {
    background: linear-gradient(135deg, rgba(11,45,74,0.6) 0%, rgba(7,27,46,0.8) 100%);
    border: 1px solid var(--border-subtle);
    border-radius: 20px;
    padding: 28px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
}

.rec-view-label {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: var(--text-secondary);
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.rec-view-label i { color: var(--amber); font-size: 10px; }

.rec-view-value {
    font-size: 14px;
    color: var(--text-primary);
    line-height: 1.6;
    margin-bottom: 24px;
}

.rec-view-value.description {
    background: var(--glass-bg);
    border-radius: 12px;
    padding: 16px;
    border: 1px solid var(--border-subtle);
    white-space: pre-line;
    font-size: 14px;
    line-height: 1.7;
}

.badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}
.badge-EN_ATTENTE { background: rgba(245,158,11,0.15); color: #fbbf24; border: 1px solid rgba(245,158,11,0.3); }
.badge-TRAITEE    { background: rgba(52,211,153,0.15);  color: #34d399; border: 1px solid rgba(52,211,153,0.3); }
.badge-REFUSEE    { background: rgba(239,68,68,0.15);   color: #f87171; border: 1px solid rgba(239,68,68,0.3); }

.type-badge { padding: 5px 12px; border-radius: 8px; font-size: 11px; font-weight: 600; }
.type-TRANSPORT   { background: rgba(59,130,246,0.15);  color: #60a5fa; }
.type-HEBERGEMENT { background: rgba(168,85,247,0.15);  color: #c084fc; }
.type-LOISIR      { background: rgba(20,184,166,0.15);  color: #2dd4bf; }

.rec-reponse-box {
    background: rgba(52,211,153,0.07);
    border: 1px solid rgba(52,211,153,0.2);
    border-left: 3px solid #34d399;
    border-radius: 0 12px 12px 0;
    padding: 16px;
    font-size: 14px;
    color: var(--text-primary);
    line-height: 1.7;
    white-space: pre-line;
    margin-bottom: 20px;
}

/* Sidebar actions */
.action-card {
    background: linear-gradient(135deg, rgba(11,45,74,0.6) 0%, rgba(7,27,46,0.8) 100%);
    border: 1px solid var(--border-subtle);
    border-radius: 16px;
    padding: 22px;
    margin-bottom: 16px;
}
.action-card:last-child { margin-bottom: 0; }

.action-card-title {
    font-size: 13px;
    font-weight: 600;
    color: var(--text-secondary);
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
    letter-spacing: 0.5px;
}
.action-card-title i { color: var(--amber); }

.statut-select {
    width: 100%;
    padding: 12px 16px;
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 10px;
    color: var(--text-primary);
    font-size: 13px;
    font-family: inherit;
    outline: none;
    cursor: pointer;
    margin-bottom: 12px;
    transition: all 0.2s ease;
    appearance: none;
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23A7E3FF' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L3 6h10l-5 5z'/%3E%3C/svg%3E\");
    background-repeat: no-repeat;
    background-position: right 14px center;
    padding-right: 36px;
}
.statut-select:focus { border-color: var(--sky-blue); box-shadow: 0 0 0 3px rgba(47,168,255,0.15); }
.statut-select option { background: #071b2e; color: var(--text-primary); }

.reply-textarea {
    width: 100%;
    min-height: 110px;
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 10px;
    padding: 12px 14px;
    font-size: 13px;
    font-family: inherit;
    resize: vertical;
    outline: none;
    color: var(--text-primary);
    box-sizing: border-box;
    transition: all 0.2s ease;
    margin-bottom: 12px;
}
.reply-textarea:focus { border-color: var(--sky-blue); box-shadow: 0 0 0 3px rgba(47,168,255,0.15); }
.reply-textarea::placeholder { color: var(--text-muted); }

.admin-toast {
    position: fixed; bottom: 24px; right: 24px;
    padding: 14px 20px; border-radius: 12px;
    font-size: 13px; font-weight: 500; color: white;
    z-index: 9999; transform: translateY(80px); opacity: 0;
    transition: all 0.4s cubic-bezier(0.34,1.56,0.64,1);
    display: flex; align-items: center; gap: 10px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}
.admin-toast.show    { transform: translateY(0); opacity: 1; }
.admin-toast.success { background: linear-gradient(135deg, #059669, #10b981); }
.admin-toast.error   { background: linear-gradient(135deg, #dc2626, #ef4444); }
</style>

{# Breadcrumb retour #}
<div style=\"margin-bottom:24px; display:flex; align-items:center; gap:12px;\">
    <a href=\"{{ path('admin_reclamations') }}\" class=\"btn btn-secondary\" style=\"display:inline-flex; align-items:center; gap:8px;\">
        <i class=\"fas fa-arrow-left\"></i> Retour
    </a>
    <div>

        <p style=\"font-size:12px; color:var(--text-muted); margin:2px 0 0;\">
            Déposée le {{ rec.dateReclamation|date('d/m/Y') }}
        </p>
    </div>
</div>

<div class=\"rec-view-grid\">

    {# ═══ DÉTAIL ═══ #}
    <div class=\"rec-view-card\">
        <div class=\"rec-view-label\"><i class=\"fas fa-heading\"></i> Sujet</div>
        <div class=\"rec-view-value\" style=\"font-size:20px; font-weight:700;\">{{ rec.sujet }}</div>

        <div style=\"display:flex; gap:16px; margin-bottom:24px; flex-wrap:wrap;\">
            <div>
                <div class=\"rec-view-label\"><i class=\"fas fa-tag\"></i> Type</div>
                <span class=\"type-badge type-{{ rec.typeReclamation }}\">{{ rec.typeReclamation }}</span>
            </div>
            <div>
                <div class=\"rec-view-label\"><i class=\"fas fa-circle\"></i> Statut</div>
                <span class=\"badge badge-{{ rec.statut }}\" id=\"statusBadge\">
                    {{ rec.statut|replace({'_': ' '}) }}
                </span>
            </div>
            <div>
                <div class=\"rec-view-label\"><i class=\"fas fa-user\"></i> Utilisateur</div>
                <span style=\"font-size:13px; color:var(--text-secondary);\">#{{ rec.idUser }}</span>
            </div>
        </div>

        <div class=\"rec-view-label\"><i class=\"fas fa-align-left\"></i> Description</div>
        <div class=\"rec-view-value description\">{{ rec.description }}</div>

        {% if rec.reponseAdmin %}
        <div class=\"rec-view-label\" style=\"color:#34d399;\">
            <i class=\"fas fa-reply\"></i> Réponse de l'administrateur
        </div>
        <div class=\"rec-reponse-box\">{{ rec.reponseAdmin }}</div>
        {% endif %}

    </div>
{# ═══ SESSION WHATSAPP IA ═══ #}
{% if session %}
<div class=\"rec-view-card\" style=\"margin-top: 20px; grid-column: 1 / -1;\">
    <div class=\"rec-view-label\">
        <i class=\"fab fa-whatsapp\" style=\"color:#25d366;\"></i> Analyse WhatsApp IA
    </div>

    <div style=\"display:flex; gap:12px; flex-wrap:wrap; margin-bottom:20px;\">
        <div>
            <div class=\"rec-view-label\">Statut session</div>
            {% if session.isActive %}
                <span class=\"badge\" style=\"background:rgba(52,211,153,0.15); color:#34d399; border:1px solid rgba(52,211,153,0.3);\">
                    <i class=\"fas fa-circle\" style=\"font-size:8px;\"></i> En cours
                </span>
            {% elseif session.step == 'annule' %}
                <span class=\"badge\" style=\"background:rgba(239,68,68,0.15); color:#f87171; border:1px solid rgba(239,68,68,0.3);\">
                    <i class=\"fas fa-ban\"></i> Annulée
                </span>
            {% else %}
                <span class=\"badge\" style=\"background:rgba(47,168,255,0.15); color:#60a5fa; border:1px solid rgba(47,168,255,0.3);\">
                    <i class=\"fas fa-check\"></i> Terminée
                </span>
            {% endif %}
        </div>
        <div>
            <div class=\"rec-view-label\">Cohérence</div>
            {% if session.coherent is null %}
                <span class=\"badge\" style=\"background:rgba(100,116,139,0.15); color:#94a3b8; border:1px solid rgba(100,116,139,0.3);\">
                    <i class=\"fas fa-minus\"></i> N/A
                </span>
            {% elseif session.coherent %}
                <span class=\"badge\" style=\"background:rgba(52,211,153,0.15); color:#34d399; border:1px solid rgba(52,211,153,0.3);\">
                    <i class=\"fas fa-check-circle\"></i> Valide
                </span>
            {% else %}
                <span class=\"badge\" style=\"background:rgba(239,68,68,0.15); color:#f87171; border:1px solid rgba(239,68,68,0.3);\">
                    <i class=\"fas fa-times-circle\"></i> Invalide
                </span>
            {% endif %}
        </div>
        <div>
            <div class=\"rec-view-label\">Tours</div>
            <span style=\"font-size:14px; font-weight:700; color:#818cf8;\">{{ session.turn }} / 4</span>
        </div>
        <div>
            <div class=\"rec-view-label\">Téléphone</div>
            <span style=\"font-size:13px; color:#25d366; font-family:monospace;\">
                <i class=\"fab fa-whatsapp\"></i> {{ session.phone }}
            </span>
        </div>
    </div>

    {% if session.reason %}
    <div class=\"rec-view-label\"><i class=\"fas fa-gavel\"></i> Raison du verdict</div>
    <div class=\"rec-view-value description\" style=\"border-color:rgba(99,102,241,0.2); background:rgba(99,102,241,0.06);\">
        {{ session.reason }}
    </div>
    {% endif %}

    {% if session.analysisSummary %}
    <div class=\"rec-view-label\"><i class=\"fas fa-robot\"></i> Résumé IA</div>
    <div class=\"rec-view-value description\" style=\"border-color:rgba(245,158,11,0.2); background:rgba(245,158,11,0.06);\">
        {{ session.analysisSummary }}
    </div>
    {% endif %}

{# Conversation #}
{% if history is defined and history|length > 0 %}
<div class=\"rec-view-label\"><i class=\"fas fa-comments\"></i> Conversation ({{ history|length }} messages)</div>
<div style=\"display:flex; flex-direction:column; gap:10px;\">
    {% for msg in history %}
        {% if msg.role == 'user' %}
        <div style=\"align-self:flex-end; max-width:80%; background:rgba(37,211,102,0.12); border:1px solid rgba(37,211,102,0.2); border-radius:14px 14px 4px 14px; padding:12px 16px;\">
            <div style=\"font-size:10px; font-weight:600; text-transform:uppercase; color:#25d366; margin-bottom:4px;\">👤 Utilisateur</div>
            <div style=\"font-size:13px; color:var(--text-primary);\">{{ msg.content }}</div>
        </div>
        {% else %}
        <div style=\"align-self:flex-start; max-width:80%; background:rgba(47,168,255,0.10); border:1px solid rgba(47,168,255,0.2); border-radius:14px 14px 14px 4px; padding:12px 16px;\">
            <div style=\"font-size:10px; font-weight:600; text-transform:uppercase; color:#60a5fa; margin-bottom:4px;\">🤖 Assistant IA</div>
            <div style=\"font-size:13px; color:var(--text-primary);\">{{ msg.content }}</div>
        </div>
        {% endif %}
    {% endfor %}
</div>
{% endif %}

    <div style=\"margin-top:16px; text-align:right;\">
<a href=\"{{ path('admin_whatsapp_sessions') }}?search={{ session.id }}\"
           class=\"btn btn-secondary\" style=\"font-size:12px;\">
            <i class=\"fab fa-whatsapp\"></i> Voir toutes les sessions de ce numéro
        </a>
    </div>
</div>
{% endif %}
    {# ═══ ACTIONS SIDEBAR ═══ #}
    <div>



<div class=\"admin-toast\" id=\"adminToast\">
    <i id=\"toastIcon\" class=\"fas fa-check-circle\"></i>
    <span id=\"toastMsg\"></span>
</div>

<script>
const recId = {{ rec.idReclamation }};

function saveStatut() {
    const statut = document.getElementById('statutSelect').value;
    fetch(`/admin/reclamations/\${recId}/statut`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ statut })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            showToast('Statut mis à jour ', 'success');
            const badge = document.getElementById('statusBadge');
            if (badge) { badge.className = `badge badge-\${statut}`; badge.textContent = statut.replace('_', ' '); }
        } else { showToast('Erreur', 'error'); }
    });
}

function sendReply() {
    const reponse = document.getElementById('replyText').value.trim();
    const btn     = document.getElementById('replyBtn');
    if (!reponse || reponse.length < 5) { showToast('Réponse trop courte', 'error'); return; }

    btn.disabled    = true;
    btn.innerHTML   = '<i class=\"fas fa-spinner fa-spin\"></i> Envoi...';

    fetch(`/admin/reclamations/\${recId}/repondre`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ reponse })
    })
    .then(r => r.json())
    .then(data => {
        btn.disabled  = false;
        btn.innerHTML = '<i class=\"fas fa-paper-plane\"></i> Envoyer la réponse';
        if (data.success) {
            showToast('Réponse envoyée avec succès !', 'success');
            document.getElementById('statutSelect').value = 'TRAITEE';
            const badge = document.getElementById('statusBadge');
            if (badge) { badge.className = 'badge badge-TRAITEE'; badge.textContent = 'TRAITEE'; }
        } else { showToast(data.message || 'Erreur', 'error'); }
    })
    .catch(() => {
        btn.disabled  = false;
        btn.innerHTML = '<i class=\"fas fa-paper-plane\"></i> Envoyer la réponse';
        showToast('Erreur de connexion', 'error');
    });
}

let toastTimer = null;
function showToast(message, type = 'success') {
    const toast = document.getElementById('adminToast');
    toast.className = `admin-toast \${type}`;
    document.getElementById('toastMsg').textContent = message;
    document.getElementById('toastIcon').className  = type === 'success' ? 'fas fa-check-circle' : 'fas fa-times-circle';
    toast.classList.add('show');
    if (toastTimer) clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('show'), 3500);
}

function sendNewReply() {
    const text = document.getElementById('newReplyText').value.trim();

    if (!text || text.length < 5) {
        showToast('Réponse trop courte', 'error');
        return;
    }

    fetch(`/admin/reclamations/\${recId}/repondre`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ reponse: text })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            showToast('Nouvelle réponse envoyée', 'success');
            location.reload();
        } else {
            showToast(data.message || 'Erreur', 'error');
        }
    })
    .catch(err => {
        console.error(err);
        showToast('Erreur serveur', 'error');
    });
}
</script>
{% endblock %}
", "admin/reclamations/view.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\reclamations\\view.html.twig");
    }
}
