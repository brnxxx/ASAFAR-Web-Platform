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

/* admin/reclamations/index.html.twig */
class __TwigTemplate_73addeda713ec4aa21f7883ad3bb6ec3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamations/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reclamations/index.html.twig"));

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

        yield "Réclamations - Admin ASAFAR";
        
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

        yield "Gestion des Réclamations";
        
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
/* ══════════════════════════════════════
   STATS GRID — même style que utilisateurs
══════════════════════════════════════ */
.rec-stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 16px;
    margin-bottom: 28px;
}

.rec-stat-card {
    background: linear-gradient(135deg, rgba(11,45,74,0.6) 0%, rgba(7,27,46,0.8) 100%);
    border: 1px solid var(--border-subtle);
    border-radius: 16px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
}
.rec-stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 28px rgba(0,0,0,0.2), var(--shadow-glow-blue);
    border-color: rgba(47,168,255,0.3);
}

.rec-stat-icon {
    width: 42px; height: 42px;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 18px;
}

.rec-stat-value {
    font-size: 30px;
    font-weight: 700;
    color: var(--text-primary);
    line-height: 1;
}

.rec-stat-label {
    font-size: 12px;
    color: var(--text-secondary);
    font-weight: 500;
    letter-spacing: 0.3px;
}

.icon-total     { background: rgba(99,102,241,0.2);  color: #818cf8; }
.icon-attente   { background: rgba(245,158,11,0.2);  color: #fbbf24; }
.icon-traitee   { background: rgba(52,211,153,0.2);  color: #34d399; }
.icon-refusee   { background: rgba(239,68,68,0.2);   color: #f87171; }
.icon-transport { background: rgba(59,130,246,0.2);  color: #60a5fa; }
.icon-heberg    { background: rgba(168,85,247,0.2);  color: #c084fc; }
.icon-loisir    { background: rgba(20,184,166,0.2);  color: #2dd4bf; }

/* ══════════════════════════════════════
   TOOLBAR — même style que utilisateurs
══════════════════════════════════════ */
.toolbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.toolbar-left, .toolbar-right {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}

.filter-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 14px;
    border-radius: 10px;
    border: 1px solid var(--border-subtle);
    background: var(--glass-bg);
    font-size: 12px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
    color: var(--text-secondary);
    text-decoration: none;
    white-space: nowrap;
}
.filter-btn:hover {
    background: rgba(47,168,255,0.1);
    border-color: rgba(47,168,255,0.3);
    color: var(--text-primary);
}
.filter-btn.active {
    background: linear-gradient(135deg, var(--sky-blue), #1e6fa8);
    color: white;
    border-color: transparent;
    box-shadow: 0 4px 12px rgba(47,168,255,0.3);
}
.filter-btn.active-attente { background: linear-gradient(135deg, #f59e0b, #d97706); color:white; border-color:transparent; }
.filter-btn.active-traitee { background: linear-gradient(135deg, #10b981, #059669); color:white; border-color:transparent; }
.filter-btn.active-refusee { background: linear-gradient(135deg, #ef4444, #dc2626); color:white; border-color:transparent; }

.search-box-inline {
    position: relative;
    display: flex;
    align-items: center;
}
.search-box-inline i {
    position: absolute;
    left: 14px;
    color: var(--text-muted);
    font-size: 13px;
    pointer-events: none;
}
.search-box-inline input {
    width: 220px;
    padding: 10px 16px 10px 38px;
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 10px;
    color: var(--text-primary);
    font-size: 13px;
    font-family: inherit;
    transition: all 0.3s ease;
    outline: none;
}
.search-box-inline input:focus {
    border-color: var(--sky-blue);
    box-shadow: 0 0 0 3px rgba(47,168,255,0.15);
    width: 280px;
}
.search-box-inline input::placeholder { color: var(--text-muted); }

/* ══════════════════════════════════════
   TABLE — même style que utilisateurs
══════════════════════════════════════ */
.table-container {
    background: linear-gradient(135deg, rgba(11,45,74,0.5) 0%, rgba(7,27,46,0.7) 100%);
    border: 1px solid var(--border-subtle);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
}

.table-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 24px;
    border-bottom: 1px solid var(--border-subtle);
    background: linear-gradient(135deg, rgba(30,111,168,0.1) 0%, rgba(11,45,74,0.2) 100%);
}

.table-title {
    font-size: 16px;
    font-weight: 600;
    color: var(--text-primary);
    display: flex;
    align-items: center;
    gap: 10px;
}
.table-title i { color: var(--amber); }

.table-info {
    font-size: 13px;
    color: var(--text-secondary);
}

table { width: 100%; border-collapse: collapse; }

thead th {
    padding: 14px 16px;
    text-align: left;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--text-secondary);
    background: rgba(7,27,46,0.4);
    border-bottom: 1px solid var(--border-subtle);
}

tbody td {
    padding: 16px;
    font-size: 13px;
    color: var(--text-primary);
    border-bottom: 1px solid var(--border-subtle);
    vertical-align: middle;
}

tbody tr:last-child td { border-bottom: none; }
tbody tr:hover td {
    background: rgba(47,168,255,0.04);
}

/* Badges */
.badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.5px;
    white-space: nowrap;
}
.badge-EN_ATTENTE { background: rgba(245,158,11,0.15); color: #fbbf24; border: 1px solid rgba(245,158,11,0.3); }
.badge-TRAITEE    { background: rgba(52,211,153,0.15);  color: #34d399; border: 1px solid rgba(52,211,153,0.3); }
.badge-REFUSEE    { background: rgba(239,68,68,0.15);   color: #f87171; border: 1px solid rgba(239,68,68,0.3); }

.type-badge {
    padding: 4px 10px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 0.5px;
}
.type-TRANSPORT   { background: rgba(59,130,246,0.15);  color: #60a5fa; }
.type-HEBERGEMENT { background: rgba(168,85,247,0.15);  color: #c084fc; }
.type-LOISIR      { background: rgba(20,184,166,0.15);  color: #2dd4bf; }

/* Action buttons */
.action-buttons { display: flex; gap: 6px; align-items: center; justify-content: flex-end; }

.btn-action {
    width: 34px; height: 34px;
    border-radius: 10px;
    border: 1px solid var(--border-subtle);
    background: var(--glass-bg);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    transition: all 0.2s ease;
    text-decoration: none;
    color: var(--text-secondary);
}
.btn-action:hover { transform: scale(1.1); }
.btn-action.btn-view  { color: #818cf8; border-color: rgba(99,102,241,0.3); }
.btn-action.btn-view:hover  { background: rgba(99,102,241,0.12); }
.btn-action.btn-reply { color: #34d399; border-color: rgba(52,211,153,0.3); }
.btn-action.btn-reply:hover { background: rgba(52,211,153,0.12); }
.btn-action.btn-delete { color: #f87171; border-color: rgba(239,68,68,0.3); }
.btn-action.btn-delete:hover { background: rgba(239,68,68,0.12); }

.rec-sujet {
    max-width: 180px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-weight: 500;
    color: var(--text-primary);
}

/* Statut select inline */
.statut-select-inline {
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 8px;
    color: var(--text-secondary);
    font-size: 12px;
    padding: 4px 8px;
    cursor: pointer;
    outline: none;
    transition: all 0.2s ease;
}
.statut-select-inline:focus {
    border-color: var(--sky-blue);
}
.statut-select-inline option { background: #071b2e; color: var(--text-primary); }

/* Pagination */
.pagination-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 24px;
    border-top: 1px solid var(--border-subtle);
}
.pagination-info { font-size: 13px; color: var(--text-secondary); }
.pagination { display: flex; gap: 6px; }

.page-btn {
    width: 36px; height: 36px;
    border-radius: 10px;
    border: 1px solid var(--border-subtle);
    background: var(--glass-bg);
    cursor: pointer;
    font-size: 13px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: var(--text-secondary);
    transition: all 0.2s ease;
}
.page-btn:hover { background: rgba(47,168,255,0.1); color: var(--text-primary); }
.page-btn.current {
    background: linear-gradient(135deg, var(--sky-blue), #1e6fa8);
    color: white;
    border-color: transparent;
    box-shadow: 0 4px 12px rgba(47,168,255,0.3);
}

/* Empty state */
.empty-state {
    text-align: center;
    padding: 60px 20px;
    color: var(--text-muted);
}
.empty-state-icon {
    font-size: 48px;
    opacity: 0.2;
    margin-bottom: 16px;
}

/* Modal */
.modal-overlay {
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(5,20,33,0.85);
    backdrop-filter: blur(8px);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    padding: 20px;
}
.modal-overlay.active { display: flex; }

.modal {
    background: linear-gradient(135deg, rgba(11,45,74,0.98) 0%, rgba(7,27,46,0.98) 100%);
    border: 1px solid var(--border-subtle);
    border-radius: 20px;
    width: 100%;
    max-width: 500px;
    box-shadow: 0 25px 80px rgba(0,0,0,0.5), var(--shadow-glow-blue);
    animation: modalSlide 0.3s ease;
    overflow: hidden;
}
@keyframes modalSlide {
    from { opacity:0; transform: translateY(-30px) scale(0.95); }
    to   { opacity:1; transform: translateY(0) scale(1); }
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 24px;
    background: linear-gradient(135deg, rgba(30,111,168,0.2) 0%, rgba(11,45,74,0.4) 100%);
    border-bottom: 1px solid var(--border-subtle);
}
.modal-header h3 {
    font-size: 17px;
    font-weight: 600;
    color: var(--text-primary);
    display: flex;
    align-items: center;
    gap: 10px;
}
.modal-header h3 i { color: var(--amber); }

.modal-close {
    width: 36px; height: 36px;
    display: flex; align-items: center; justify-content: center;
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 10px;
    color: var(--text-secondary);
    cursor: pointer;
    transition: all 0.3s ease;
}
.modal-close:hover {
    background: linear-gradient(135deg, #EF4444, #DC2626);
    color: white;
    border-color: transparent;
    transform: rotate(90deg);
}

.modal-body { padding: 24px; }

.modal-subtitle {
    font-size: 13px;
    color: var(--text-secondary);
    margin-bottom: 16px;
    padding: 10px 14px;
    background: var(--glass-bg);
    border-radius: 8px;
    border: 1px solid var(--border-subtle);
}

.modal-textarea {
    width: 100%;
    min-height: 130px;
    border: 1px solid var(--border-subtle);
    border-radius: 12px;
    padding: 14px;
    font-size: 14px;
    font-family: inherit;
    resize: vertical;
    outline: none;
    background: var(--glass-bg);
    color: var(--text-primary);
    box-sizing: border-box;
    transition: all 0.2s ease;
}
.modal-textarea:focus {
    border-color: var(--sky-blue);
    box-shadow: 0 0 0 3px rgba(47,168,255,0.15);
}
.modal-textarea::placeholder { color: var(--text-muted); }

.modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 12px;
    padding: 16px 24px;
    border-top: 1px solid var(--border-subtle);
    background: rgba(7,27,46,0.3);
}

/* Toast */
.admin-toast {
    position: fixed;
    bottom: 24px; right: 24px;
    padding: 14px 20px;
    border-radius: 12px;
    font-size: 13px;
    font-weight: 500;
    color: white;
    z-index: 99999;
    transform: translateY(80px);
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.34,1.56,0.64,1);
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}
.admin-toast.show    { transform: translateY(0); opacity: 1; }
.admin-toast.success { background: linear-gradient(135deg, #059669, #10b981); }
.admin-toast.error   { background: linear-gradient(135deg, #dc2626, #ef4444); }
.badge-danger  { background: rgba(239,68,68,0.15);   color: #f87171; border: 1px solid rgba(239,68,68,0.3); }
.badge-info    { background: rgba(47,168,255,0.15);  color: #60a5fa; border: 1px solid rgba(47,168,255,0.3); }
.badge-success { background: rgba(52,211,153,0.15);  color: #34d399; border: 1px solid rgba(52,211,153,0.3); }
</style>
";
        // line 466
        yield "<div class=\"rec-stats-grid\">
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-total\"><i class=\"fas fa-list-alt\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 469, $this->source); })()), "total", [], "any", false, false, false, 469), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">Total</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-attente\"><i class=\"fas fa-clock\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 474, $this->source); })()), "en_attente", [], "any", false, false, false, 474), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">En attente</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-traitee\"><i class=\"fas fa-check-circle\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 479
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 479, $this->source); })()), "traitee", [], "any", false, false, false, 479), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">Traitées</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-refusee\"><i class=\"fas fa-times-circle\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 484, $this->source); })()), "refusee", [], "any", false, false, false, 484), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">Refusées</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-transport\"><i class=\"fas fa-plane\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 489, $this->source); })()), "transport", [], "any", false, false, false, 489), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">Transport</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-heberg\"><i class=\"fas fa-hotel\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 494, $this->source); })()), "hebergement", [], "any", false, false, false, 494), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">Hébergement</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-loisir\"><i class=\"fas fa-compass\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 499, $this->source); })()), "loisir", [], "any", false, false, false, 499), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">Loisirs</div>
    </div>
</div>

";
        // line 504
        $context["currentPageSafe"] = (((($tmp = (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 504, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 504, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 504)) : ((((array_key_exists("currentPage", $context) &&  !(null === $context["currentPage"]))) ? ($context["currentPage"]) : (1))));
        // line 505
        $context["safeFilter"] = (((array_key_exists("filter", $context) &&  !(null === $context["filter"]))) ? ($context["filter"]) : ("all"));
        // line 506
        $context["safeType"] = (((array_key_exists("type", $context) &&  !(null === $context["type"]))) ? ($context["type"]) : ("all"));
        // line 507
        $context["safeSearch"] = (((array_key_exists("search", $context) &&  !(null === $context["search"]))) ? ($context["search"]) : (""));
        // line 508
        yield "
<div class=\"toolbar\">
    <div class=\"toolbar-left\">

        <a href=\"";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations", ["page" =>         // line 513
(isset($context["currentPageSafe"]) || array_key_exists("currentPageSafe", $context) ? $context["currentPageSafe"] : (function () { throw new RuntimeError('Variable "currentPageSafe" does not exist.', 513, $this->source); })()), "filter" => "all", "type" =>         // line 515
(isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 515, $this->source); })()), "search" =>         // line 516
(isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 516, $this->source); })())]), "html", null, true);
        // line 517
        yield "\"
           class=\"filter-btn ";
        // line 518
        yield ((((isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 518, $this->source); })()) == "all")) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-border-all\"></i> Toutes
        </a>

        <a href=\"";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations", ["page" =>         // line 523
(isset($context["currentPageSafe"]) || array_key_exists("currentPageSafe", $context) ? $context["currentPageSafe"] : (function () { throw new RuntimeError('Variable "currentPageSafe" does not exist.', 523, $this->source); })()), "filter" => "EN_ATTENTE", "type" =>         // line 525
(isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 525, $this->source); })()), "search" =>         // line 526
(isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 526, $this->source); })())]), "html", null, true);
        // line 527
        yield "\"
           class=\"filter-btn ";
        // line 528
        yield ((((isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 528, $this->source); })()) == "EN_ATTENTE")) ? ("active-attente") : (""));
        yield "\">
            <i class=\"fas fa-clock\"></i> En attente
        </a>

        <a href=\"";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations", ["page" =>         // line 533
(isset($context["currentPageSafe"]) || array_key_exists("currentPageSafe", $context) ? $context["currentPageSafe"] : (function () { throw new RuntimeError('Variable "currentPageSafe" does not exist.', 533, $this->source); })()), "filter" => "TRAITEE", "type" =>         // line 535
(isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 535, $this->source); })()), "search" =>         // line 536
(isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 536, $this->source); })())]), "html", null, true);
        // line 537
        yield "\"
           class=\"filter-btn ";
        // line 538
        yield ((((isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 538, $this->source); })()) == "TRAITEE")) ? ("active-traitee") : (""));
        yield "\">
            <i class=\"fas fa-check\"></i> Traitées
        </a>

        <a href=\"";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations", ["page" =>         // line 543
(isset($context["currentPageSafe"]) || array_key_exists("currentPageSafe", $context) ? $context["currentPageSafe"] : (function () { throw new RuntimeError('Variable "currentPageSafe" does not exist.', 543, $this->source); })()), "filter" => "REFUSEE", "type" =>         // line 545
(isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 545, $this->source); })()), "search" =>         // line 546
(isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 546, $this->source); })())]), "html", null, true);
        // line 547
        yield "\"
           class=\"filter-btn ";
        // line 548
        yield ((((isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 548, $this->source); })()) == "REFUSEE")) ? ("active-refusee") : (""));
        yield "\">
            <i class=\"fas fa-times\"></i> Refusées
        </a>

        <span style=\"width:1px; height:20px; background:var(--border-subtle); display:inline-block;\"></span>

        <a href=\"";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations", ["page" =>         // line 555
(isset($context["currentPageSafe"]) || array_key_exists("currentPageSafe", $context) ? $context["currentPageSafe"] : (function () { throw new RuntimeError('Variable "currentPageSafe" does not exist.', 555, $this->source); })()), "filter" =>         // line 556
(isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 556, $this->source); })()), "type" => "all", "search" =>         // line 558
(isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 558, $this->source); })())]), "html", null, true);
        // line 559
        yield "\"
           class=\"filter-btn ";
        // line 560
        yield ((((isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 560, $this->source); })()) == "all")) ? ("active") : (""));
        yield "\">
           Tous types
        </a>

        <a href=\"";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations", ["page" =>         // line 565
(isset($context["currentPageSafe"]) || array_key_exists("currentPageSafe", $context) ? $context["currentPageSafe"] : (function () { throw new RuntimeError('Variable "currentPageSafe" does not exist.', 565, $this->source); })()), "filter" =>         // line 566
(isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 566, $this->source); })()), "type" => "TRANSPORT", "search" =>         // line 568
(isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 568, $this->source); })())]), "html", null, true);
        // line 569
        yield "\"
           class=\"filter-btn ";
        // line 570
        yield ((((isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 570, $this->source); })()) == "TRANSPORT")) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-plane\"></i> Transport
        </a>

        <a href=\"";
        // line 574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations", ["page" =>         // line 575
(isset($context["currentPageSafe"]) || array_key_exists("currentPageSafe", $context) ? $context["currentPageSafe"] : (function () { throw new RuntimeError('Variable "currentPageSafe" does not exist.', 575, $this->source); })()), "filter" =>         // line 576
(isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 576, $this->source); })()), "type" => "HEBERGEMENT", "search" =>         // line 578
(isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 578, $this->source); })())]), "html", null, true);
        // line 579
        yield "\"
           class=\"filter-btn ";
        // line 580
        yield ((((isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 580, $this->source); })()) == "HEBERGEMENT")) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-hotel\"></i> Hébergement
        </a>

        <a href=\"";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations", ["page" =>         // line 585
(isset($context["currentPageSafe"]) || array_key_exists("currentPageSafe", $context) ? $context["currentPageSafe"] : (function () { throw new RuntimeError('Variable "currentPageSafe" does not exist.', 585, $this->source); })()), "filter" =>         // line 586
(isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 586, $this->source); })()), "type" => "LOISIR", "search" =>         // line 588
(isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 588, $this->source); })())]), "html", null, true);
        // line 589
        yield "\"
           class=\"filter-btn ";
        // line 590
        yield ((((isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 590, $this->source); })()) == "LOISIR")) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-compass\"></i> Loisirs
        </a>

    </div>

    <div class=\"toolbar-right\">

        <form method=\"GET\" action=\"";
        // line 598
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations");
        yield "\" style=\"display:flex;\">
            <input type=\"hidden\" name=\"filter\" value=\"";
        // line 599
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 599, $this->source); })()), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"type\" value=\"";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 600, $this->source); })()), "html", null, true);
        yield "\">
            <input type=\"hidden\" name=\"page\" value=\"";
        // line 601
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPageSafe"]) || array_key_exists("currentPageSafe", $context) ? $context["currentPageSafe"] : (function () { throw new RuntimeError('Variable "currentPageSafe" does not exist.', 601, $this->source); })()), "html", null, true);
        yield "\"> ";
        // line 602
        yield "
            <div class=\"search-box-inline\">
                <i class=\"fas fa-search\"></i>
                <input type=\"text\" name=\"search\" value=\"";
        // line 605
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 605, $this->source); })()), "html", null, true);
        yield "\"
                       placeholder=\"Rechercher...\" onchange=\"this.form.submit()\">
            </div>
        </form>

<a href=\"";
        // line 610
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations_export");
        yield "\" class=\"export-btn\">
    <i class=\"fas fa-file-excel\"></i> Export Excel
</a>

<style>
.export-btn {
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 10px;
    text-decoration: none;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 6px;
    box-shadow: 0 4px 12px rgba(16,185,129,0.3);
    transition: all 0.2s ease;
}
.export-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(16,185,129,0.4);
}
</style>

    </div>
</div>
";
        // line 638
        yield "<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-comment-dots\"></i> Liste des Réclamations
        </div>
        <div class=\"table-info\">
            ";
        // line 644
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 644, $this->source); })()) > 0)) {
            // line 645
            yield "    ";
            if ((($tmp = (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 645, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 646
                yield "        Affichage de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 646, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 646) - 1) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 646, $this->source); })()), "itemNumberPerPage", [], "any", false, false, false, 646)) + 1), "html", null, true);
                yield "
        – ";
                // line 647
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 647, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 647) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 647, $this->source); })()), "itemNumberPerPage", [], "any", false, false, false, 647)), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 647, $this->source); })())), "html", null, true);
                yield "
    ";
            } else {
                // line 649
                yield "        Affichage de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 649, $this->source); })()) - 1) * 10) + 1), "html", null, true);
                yield "
        – ";
                // line 650
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 650, $this->source); })()) * 10), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 650, $this->source); })())), "html", null, true);
                yield "
    ";
            }
        } else {
            // line 653
            yield "    Aucune réclamation trouvée
";
        }
        // line 655
        yield "        </div>
    </div>

    ";
        // line 658
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 658, $this->source); })())) > 0)) {
            // line 659
            yield "    <table>
        <thead>
            <tr>
                <th>Sujet</th>
                <th>Type</th>
                <th>Statut</th>
                <th>Priorité</th>
                <th>Date</th>
                <th>Utilisateur</th>
<th>Réponse</th>
<th>Satisfaction</th>
<th style=\"text-align:right;\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 674
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 674, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
                // line 675
                yield "            <tr id=\"row-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "idReclamation", [], "any", false, false, false, 675), "html", null, true);
                yield "\">
                <td>
                    <div class=\"rec-sujet\" title=\"";
                // line 677
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "sujet", [], "any", false, false, false, 677), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "sujet", [], "any", false, false, false, 677), "html", null, true);
                yield "</div>
                    <div style=\"font-size:11px; color:var(--text-muted); margin-top:3px;\">
                        ";
                // line 679
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "description", [], "any", false, false, false, 679), 0, 55), "html", null, true);
                yield "...
                    </div>
                </td>
                <td>
                    <span class=\"type-badge type-";
                // line 683
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "typeReclamation", [], "any", false, false, false, 683), "html", null, true);
                yield "\">
                        ";
                // line 684
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "typeReclamation", [], "any", false, false, false, 684), "html", null, true);
                yield "
                    </span>
                </td>
                <td>
                    <span class=\"badge badge-";
                // line 688
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statut", [], "any", false, false, false, 688), "html", null, true);
                yield "\" id=\"badge-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "idReclamation", [], "any", false, false, false, 688), "html", null, true);
                yield "\">
                        <i class=\"fas ";
                // line 689
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statut", [], "any", false, false, false, 689) == "EN_ATTENTE")) ? ("fa-clock") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statut", [], "any", false, false, false, 689) == "TRAITEE")) ? ("fa-check") : ("fa-times"))));
                yield "\"></i>
                        ";
                // line 690
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statut", [], "any", false, false, false, 690), ["_" => " "]), "html", null, true);
                yield "
                    </span>
                </td>
                <td>
                    <span class=\"badge ";
                // line 694
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "priorite", [], "any", false, false, false, 694) == "URGENT")) ? ("badge-danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "priorite", [], "any", false, false, false, 694) == "NORMAL")) ? ("badge-info") : ("badge-success"))));
                yield "\">
                        <i class=\"fas ";
                // line 695
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "priorite", [], "any", false, false, false, 695) == "URGENT")) ? ("fa-arrow-up") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "priorite", [], "any", false, false, false, 695) == "NORMAL")) ? ("fa-minus") : ("fa-arrow-down"))));
                yield "\"></i>
                        ";
                // line 696
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "priorite", [], "any", false, false, false, 696), "html", null, true);
                yield "
                    </span>
                </td>
                <td style=\"font-size:12px; color:var(--text-secondary); white-space:nowrap;\">
                    ";
                // line 700
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateReclamation", [], "any", false, false, false, 700), "d/m/Y"), "html", null, true);
                yield "
                </td>
                <td style=\"font-size:12px; color:var(--text-secondary);\">
                    ";
                // line 703
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["userEmail"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "idReclamation", [], "any", false, false, false, 703), [], "array", true, true, false, 703) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEmail"]) || array_key_exists("userEmail", $context) ? $context["userEmail"] : (function () { throw new RuntimeError('Variable "userEmail" does not exist.', 703, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "idReclamation", [], "any", false, false, false, 703), [], "array", false, false, false, 703)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEmail"]) || array_key_exists("userEmail", $context) ? $context["userEmail"] : (function () { throw new RuntimeError('Variable "userEmail" does not exist.', 703, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "idReclamation", [], "any", false, false, false, 703), [], "array", false, false, false, 703), "html", null, true)) : ("—"));
                yield "
                </td>
                <td>
                    ";
                // line 706
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "reponseAdmin", [], "any", false, false, false, 706)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 707
                    yield "                        <span style=\"font-size:11px; color:#34d399; display:flex; align-items:center; gap:4px;\">
                            <i class=\"fas fa-check-circle\"></i> Répondu
                        </span>
                    ";
                } else {
                    // line 711
                    yield "                        <span style=\"font-size:11px; color:var(--text-muted);\">—</span>
                    ";
                }
                // line 713
                yield "                </td>
                <td>
                    ";
                // line 715
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statut", [], "any", false, false, false, 715) == "TRAITEE")) {
                    // line 716
                    yield "                        ";
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "satisfait", [], "any", false, false, false, 716))) {
                        // line 717
                        yield "                            <span style=\"color:rgba(255,255,255,0.4); font-size:12px;\">—</span>
                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 718
$context["rec"], "satisfait", [], "any", false, false, false, 718) == true)) {
                        // line 719
                        yield "                            <span style=\"color:#34d399; font-size:12px;\">👍 Satisfait</span>
                        ";
                    } else {
                        // line 721
                        yield "                            <span style=\"color:#f87171; font-size:12px;\">👎 Insatisfait</span>
                        ";
                    }
                    // line 723
                    yield "                    ";
                } else {
                    // line 724
                    yield "                        <span style=\"color:rgba(255,255,255,0.3); font-size:12px;\">—</span>
                    ";
                }
                // line 726
                yield "                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"";
                // line 729
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "idReclamation", [], "any", false, false, false, 729)]), "html", null, true);
                yield "\"
                           class=\"btn-action btn-view\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <button class=\"btn-action btn-reply\"
                                onclick=\"openReplyModal(";
                // line 734
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "idReclamation", [], "any", false, false, false, 734), "html", null, true);
                yield ", '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "sujet", [], "any", false, false, false, 734), "js"), "html", null, true);
                yield "', '";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "reponseAdmin", [], "any", false, false, false, 734)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "reponseAdmin", [], "any", false, false, false, 734), "js"), "html", null, true)) : (""));
                yield "')\">
                            <i class=\"fas fa-reply\"></i>
                        </button>
                        <button class=\"btn-action btn-delete\"
                                onclick=\"deleteRec(";
                // line 738
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "idReclamation", [], "any", false, false, false, 738), "html", null, true);
                yield ")\">
                            <i class=\"fas fa-trash-alt\"></i>
                        </button>
                    </div>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rec'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 745
            yield "        </tbody>
    </table>

 ";
            // line 749
            $context["current"] = (((($tmp = (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 749, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 749, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 749)) : ((((array_key_exists("currentPage", $context) &&  !(null === $context["currentPage"]))) ? ($context["currentPage"]) : (1))));
            // line 750
            $context["maxPages"] = (((($tmp = (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 750, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 750, $this->source); })()), "pageCount", [], "any", false, false, false, 750)) : ((((array_key_exists("pages", $context) &&  !(null === $context["pages"]))) ? ($context["pages"]) : (1))));
            // line 751
            $context["perPage"] = (((($tmp = (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 751, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 751, $this->source); })()), "itemNumberPerPage", [], "any", false, false, false, 751)) : (10));
            // line 752
            $context["safeFilter"] = (((array_key_exists("filter", $context) &&  !(null === $context["filter"]))) ? ($context["filter"]) : ("all"));
            // line 753
            $context["safeType"] = (((array_key_exists("type", $context) &&  !(null === $context["type"]))) ? ($context["type"]) : ("all"));
            // line 754
            $context["safeSearch"] = (((array_key_exists("search", $context) &&  !(null === $context["search"]))) ? ($context["search"]) : (""));
            // line 755
            yield "
<div class=\"pagination-container\">

    <div class=\"pagination-info\">
        ";
            // line 759
            if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 759, $this->source); })()) > 0)) {
                // line 760
                yield "            Affichage de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 760, $this->source); })()) - 1) * (isset($context["perPage"]) || array_key_exists("perPage", $context) ? $context["perPage"] : (function () { throw new RuntimeError('Variable "perPage" does not exist.', 760, $this->source); })())) + 1), "html", null, true);
                yield "
            – ";
                // line 761
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 761, $this->source); })()) * (isset($context["perPage"]) || array_key_exists("perPage", $context) ? $context["perPage"] : (function () { throw new RuntimeError('Variable "perPage" does not exist.', 761, $this->source); })())), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 761, $this->source); })())), "html", null, true);
                yield "
            sur ";
                // line 762
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 762, $this->source); })()), "html", null, true);
                yield " réclamations
        ";
            } else {
                // line 764
                yield "            Aucune réclamation trouvée
        ";
            }
            // line 766
            yield "    </div>

    <div class=\"pagination\">

        ";
            // line 771
            yield "        <a href=\"?page=";
            yield ((((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 771, $this->source); })()) > 1)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 771, $this->source); })()) - 1), "html", null, true)) : (1));
            yield "&filter=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 771, $this->source); })()), "html", null, true);
            yield "&type=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 771, $this->source); })()), "html", null, true);
            yield "&search=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 771, $this->source); })()), "html", null, true);
            yield "\"
           class=\"page-btn ";
            // line 772
            yield ((((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 772, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\"
           style=\"";
            // line 773
            yield ((((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 773, $this->source); })()) <= 1)) ? ("opacity:0.4;") : (""));
            yield "\">
            <i class=\"fas fa-chevron-left\"></i>
        </a>

        ";
            // line 778
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 778, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 779
                yield "
    ";
                // line 780
                if (($context["p"] == (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 780, $this->source); })()))) {
                    // line 781
                    yield "        <span class=\"page-btn current\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "</span>

    ";
                } elseif ((((                // line 783
$context["p"] == 1) || ($context["p"] == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 783, $this->source); })()))) || (($context["p"] >= ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 783, $this->source); })()) - 1)) && ($context["p"] <= ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 783, $this->source); })()) + 1))))) {
                    // line 784
                    yield "        <a href=\"?page=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "&filter=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 784, $this->source); })()), "html", null, true);
                    yield "&type=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 784, $this->source); })()), "html", null, true);
                    yield "&search=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 784, $this->source); })()), "html", null, true);
                    yield "\"
           class=\"page-btn\">
            ";
                    // line 786
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "
        </a>

    ";
                } elseif (((                // line 789
$context["p"] == ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 789, $this->source); })()) - 2)) || ($context["p"] == ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 789, $this->source); })()) + 2)))) {
                    // line 790
                    yield "        <span class=\"page-btn\" style=\"opacity:0.5;\">…</span>
    ";
                }
                // line 792
                yield "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 794
            yield "
        ";
            // line 796
            yield "        <a href=\"?page=";
            yield ((((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 796, $this->source); })()) < (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 796, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 796, $this->source); })()) + 1), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 796, $this->source); })()), "html", null, true)));
            yield "&filter=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeFilter"]) || array_key_exists("safeFilter", $context) ? $context["safeFilter"] : (function () { throw new RuntimeError('Variable "safeFilter" does not exist.', 796, $this->source); })()), "html", null, true);
            yield "&type=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeType"]) || array_key_exists("safeType", $context) ? $context["safeType"] : (function () { throw new RuntimeError('Variable "safeType" does not exist.', 796, $this->source); })()), "html", null, true);
            yield "&search=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["safeSearch"]) || array_key_exists("safeSearch", $context) ? $context["safeSearch"] : (function () { throw new RuntimeError('Variable "safeSearch" does not exist.', 796, $this->source); })()), "html", null, true);
            yield "\"
           class=\"page-btn\"
           style=\"";
            // line 798
            yield ((((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 798, $this->source); })()) >= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new RuntimeError('Variable "maxPages" does not exist.', 798, $this->source); })()))) ? ("opacity:0.4;") : (""));
            yield "\">
            <i class=\"fas fa-chevron-right\"></i>
        </a>

    </div>
</div>

    ";
        } else {
            // line 806
            yield "    <div class=\"empty-state\">
        <div class=\"empty-state-icon\"><i class=\"fas fa-inbox\"></i></div>
        <h3 style=\"color:var(--text-secondary); margin:0 0 8px;\">Aucune réclamation trouvée</h3>
        <p style=\"font-size:13px; margin:0;\">Modifiez vos filtres ou revenez plus tard.</p>
    </div>
    ";
        }
        // line 812
        yield "</div>

";
        // line 815
        yield "<div class=\"modal-overlay\" id=\"replyModal\">
    <div class=\"modal\">
        <div class=\"modal-header\">
            <h3><i class=\"fas fa-reply\"></i> Répondre à la réclamation</h3>
            <button class=\"modal-close\" onclick=\"closeReplyModal()\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div class=\"modal-body\">
            <div class=\"modal-subtitle\" id=\"modalSubtitle\">—</div>
            <textarea class=\"modal-textarea\" id=\"replyText\"
                      placeholder=\"Rédigez votre réponse à l'utilisateur...\"></textarea>
        </div>
        <div class=\"modal-footer\">
            <button class=\"btn btn-secondary\" onclick=\"closeReplyModal()\">Annuler</button>
            <button class=\"btn btn-primary\" id=\"replyConfirmBtn\" onclick=\"submitReply()\">
                <i class=\"fas fa-paper-plane\"></i> Envoyer
            </button>
        </div>
    </div>
</div>

";
        // line 838
        yield "<div class=\"admin-toast\" id=\"adminToast\">
    <i id=\"toastIcon\" class=\"fas fa-check-circle\"></i>
    <span id=\"toastMsg\"></span>
</div>
<script>
document.querySelectorAll('.page-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        console.log(\"CLICK OK\");
    });
});
</script>
<script>
let currentRecId = null;

function openReplyModal(id, sujet, existingReply) {
    currentRecId = id;
    document.getElementById('modalSubtitle').textContent = '📋 ' + sujet;
    document.getElementById('replyText').value = existingReply || '';
    document.getElementById('replyModal').classList.add('active');
    setTimeout(() => document.getElementById('replyText').focus(), 300);
}

function closeReplyModal() {
    document.getElementById('replyModal').classList.remove('active');
}

document.getElementById('replyModal').addEventListener('click', function(e) {
    if (e.target === this) closeReplyModal();
});

function submitReply() {
    const reponse = document.getElementById('replyText').value.trim();
    const btn     = document.getElementById('replyConfirmBtn');

    if (!reponse || reponse.length < 5) {
        showToast('La réponse est trop courte (min 5 caractères)', 'error'); return;
    }

    btn.disabled    = true;
    btn.innerHTML   = '<i class=\"fas fa-spinner fa-spin\"></i> Envoi...';

fetch(`/admin/reclamations/\${currentRecId}/repondre`, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ reponse })
})
    .then(r => r.json())
    .then(data => {
        btn.disabled  = false;
        btn.innerHTML = '<i class=\"fas fa-paper-plane\"></i> Envoyer';
        if (data.success) {
            closeReplyModal();
            showToast('Réponse envoyée avec succès ✅', 'success');
            updateBadge(currentRecId, 'TRAITEE');
            setTimeout(() => location.reload(), 1600);
        } else {
            showToast(data.message || 'Erreur', 'error');
        }
    })
    .catch(() => {
        btn.disabled  = false;
        btn.innerHTML = '<i class=\"fas fa-paper-plane\"></i> Envoyer';
        showToast('Erreur de connexion', 'error');
    });
}

function changeStatut(id, statut) {
fetch(`/admin/reclamations/reclamation/\${id}/statut`, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ statut })
})
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            updateBadge(id, statut);
            showToast('Statut mis à jour', 'success');
        } else {
            showToast('Erreur', 'error');
        }
    });
}

function updateBadge(id, statut) {
    const badge = document.getElementById('badge-' + id);
    if (!badge) return;
    const icons  = { EN_ATTENTE: 'fa-clock', TRAITEE: 'fa-check', REFUSEE: 'fa-times' };
    const labels = { EN_ATTENTE: 'EN ATTENTE', TRAITEE: 'TRAITEE', REFUSEE: 'REFUSEE' };
    badge.className = `badge badge-\${statut}`;
    badge.innerHTML = `<i class=\"fas \${icons[statut]}\"></i> \${labels[statut]}`;
}

function deleteRec(id) {
    if (!confirm('Supprimer définitivement cette réclamation ?')) return;
fetch(`/admin/reclamations/reclamation/\${id}/delete`, {
    method: 'POST'
})        .then(r => r.json())
        .then(data => {
            if (data.success) {
                const row = document.getElementById('row-' + id);
                if (row) {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '0';
                    row.style.transform = 'translateX(20px)';
                    setTimeout(() => row.remove(), 300);
                }
                showToast('Réclamation supprimée', 'success');
            } else {
                showToast('Erreur lors de la suppression', 'error');
            }
        });
}

let toastTimer = null;
function showToast(message, type = 'success') {
    const toast = document.getElementById('adminToast');
    toast.className = `admin-toast \${type}`;
    document.getElementById('toastMsg').textContent = message;
    document.getElementById('toastIcon').className  = type === 'success'
        ? 'fas fa-check-circle' : 'fas fa-times-circle';
    toast.classList.add('show');
    if (toastTimer) clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('show'), 3500);
}

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeReplyModal();
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
        return "admin/reclamations/index.html.twig";
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
        return array (  1289 => 838,  1265 => 815,  1261 => 812,  1253 => 806,  1242 => 798,  1230 => 796,  1227 => 794,  1220 => 792,  1216 => 790,  1214 => 789,  1208 => 786,  1196 => 784,  1194 => 783,  1188 => 781,  1186 => 780,  1183 => 779,  1178 => 778,  1171 => 773,  1167 => 772,  1156 => 771,  1150 => 766,  1146 => 764,  1141 => 762,  1137 => 761,  1132 => 760,  1130 => 759,  1124 => 755,  1122 => 754,  1120 => 753,  1118 => 752,  1116 => 751,  1114 => 750,  1112 => 749,  1107 => 745,  1094 => 738,  1083 => 734,  1075 => 729,  1070 => 726,  1066 => 724,  1063 => 723,  1059 => 721,  1055 => 719,  1053 => 718,  1050 => 717,  1047 => 716,  1045 => 715,  1041 => 713,  1037 => 711,  1031 => 707,  1029 => 706,  1023 => 703,  1017 => 700,  1010 => 696,  1006 => 695,  1002 => 694,  995 => 690,  991 => 689,  985 => 688,  978 => 684,  974 => 683,  967 => 679,  960 => 677,  954 => 675,  950 => 674,  933 => 659,  931 => 658,  926 => 655,  922 => 653,  916 => 650,  911 => 649,  906 => 647,  901 => 646,  898 => 645,  896 => 644,  888 => 638,  858 => 610,  850 => 605,  845 => 602,  842 => 601,  838 => 600,  834 => 599,  830 => 598,  819 => 590,  816 => 589,  814 => 588,  813 => 586,  812 => 585,  811 => 584,  804 => 580,  801 => 579,  799 => 578,  798 => 576,  797 => 575,  796 => 574,  789 => 570,  786 => 569,  784 => 568,  783 => 566,  782 => 565,  781 => 564,  774 => 560,  771 => 559,  769 => 558,  768 => 556,  767 => 555,  766 => 554,  757 => 548,  754 => 547,  752 => 546,  751 => 545,  750 => 543,  749 => 542,  742 => 538,  739 => 537,  737 => 536,  736 => 535,  735 => 533,  734 => 532,  727 => 528,  724 => 527,  722 => 526,  721 => 525,  720 => 523,  719 => 522,  712 => 518,  709 => 517,  707 => 516,  706 => 515,  705 => 513,  704 => 512,  698 => 508,  696 => 507,  694 => 506,  692 => 505,  690 => 504,  682 => 499,  674 => 494,  666 => 489,  658 => 484,  650 => 479,  642 => 474,  634 => 469,  629 => 466,  172 => 10,  159 => 9,  136 => 7,  113 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Réclamations - Admin ASAFAR{% endblock %}

{% block page_icon %}fas fa-comment-dots{% endblock %}
{% block page_title %}Gestion des Réclamations{% endblock %}
{% block breadcrumb %}Réclamations{% endblock %}

{% block content %}
<style>
/* ══════════════════════════════════════
   STATS GRID — même style que utilisateurs
══════════════════════════════════════ */
.rec-stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 16px;
    margin-bottom: 28px;
}

.rec-stat-card {
    background: linear-gradient(135deg, rgba(11,45,74,0.6) 0%, rgba(7,27,46,0.8) 100%);
    border: 1px solid var(--border-subtle);
    border-radius: 16px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
}
.rec-stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 28px rgba(0,0,0,0.2), var(--shadow-glow-blue);
    border-color: rgba(47,168,255,0.3);
}

.rec-stat-icon {
    width: 42px; height: 42px;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 18px;
}

.rec-stat-value {
    font-size: 30px;
    font-weight: 700;
    color: var(--text-primary);
    line-height: 1;
}

.rec-stat-label {
    font-size: 12px;
    color: var(--text-secondary);
    font-weight: 500;
    letter-spacing: 0.3px;
}

.icon-total     { background: rgba(99,102,241,0.2);  color: #818cf8; }
.icon-attente   { background: rgba(245,158,11,0.2);  color: #fbbf24; }
.icon-traitee   { background: rgba(52,211,153,0.2);  color: #34d399; }
.icon-refusee   { background: rgba(239,68,68,0.2);   color: #f87171; }
.icon-transport { background: rgba(59,130,246,0.2);  color: #60a5fa; }
.icon-heberg    { background: rgba(168,85,247,0.2);  color: #c084fc; }
.icon-loisir    { background: rgba(20,184,166,0.2);  color: #2dd4bf; }

/* ══════════════════════════════════════
   TOOLBAR — même style que utilisateurs
══════════════════════════════════════ */
.toolbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.toolbar-left, .toolbar-right {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}

.filter-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 14px;
    border-radius: 10px;
    border: 1px solid var(--border-subtle);
    background: var(--glass-bg);
    font-size: 12px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
    color: var(--text-secondary);
    text-decoration: none;
    white-space: nowrap;
}
.filter-btn:hover {
    background: rgba(47,168,255,0.1);
    border-color: rgba(47,168,255,0.3);
    color: var(--text-primary);
}
.filter-btn.active {
    background: linear-gradient(135deg, var(--sky-blue), #1e6fa8);
    color: white;
    border-color: transparent;
    box-shadow: 0 4px 12px rgba(47,168,255,0.3);
}
.filter-btn.active-attente { background: linear-gradient(135deg, #f59e0b, #d97706); color:white; border-color:transparent; }
.filter-btn.active-traitee { background: linear-gradient(135deg, #10b981, #059669); color:white; border-color:transparent; }
.filter-btn.active-refusee { background: linear-gradient(135deg, #ef4444, #dc2626); color:white; border-color:transparent; }

.search-box-inline {
    position: relative;
    display: flex;
    align-items: center;
}
.search-box-inline i {
    position: absolute;
    left: 14px;
    color: var(--text-muted);
    font-size: 13px;
    pointer-events: none;
}
.search-box-inline input {
    width: 220px;
    padding: 10px 16px 10px 38px;
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 10px;
    color: var(--text-primary);
    font-size: 13px;
    font-family: inherit;
    transition: all 0.3s ease;
    outline: none;
}
.search-box-inline input:focus {
    border-color: var(--sky-blue);
    box-shadow: 0 0 0 3px rgba(47,168,255,0.15);
    width: 280px;
}
.search-box-inline input::placeholder { color: var(--text-muted); }

/* ══════════════════════════════════════
   TABLE — même style que utilisateurs
══════════════════════════════════════ */
.table-container {
    background: linear-gradient(135deg, rgba(11,45,74,0.5) 0%, rgba(7,27,46,0.7) 100%);
    border: 1px solid var(--border-subtle);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
}

.table-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 24px;
    border-bottom: 1px solid var(--border-subtle);
    background: linear-gradient(135deg, rgba(30,111,168,0.1) 0%, rgba(11,45,74,0.2) 100%);
}

.table-title {
    font-size: 16px;
    font-weight: 600;
    color: var(--text-primary);
    display: flex;
    align-items: center;
    gap: 10px;
}
.table-title i { color: var(--amber); }

.table-info {
    font-size: 13px;
    color: var(--text-secondary);
}

table { width: 100%; border-collapse: collapse; }

thead th {
    padding: 14px 16px;
    text-align: left;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--text-secondary);
    background: rgba(7,27,46,0.4);
    border-bottom: 1px solid var(--border-subtle);
}

tbody td {
    padding: 16px;
    font-size: 13px;
    color: var(--text-primary);
    border-bottom: 1px solid var(--border-subtle);
    vertical-align: middle;
}

tbody tr:last-child td { border-bottom: none; }
tbody tr:hover td {
    background: rgba(47,168,255,0.04);
}

/* Badges */
.badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.5px;
    white-space: nowrap;
}
.badge-EN_ATTENTE { background: rgba(245,158,11,0.15); color: #fbbf24; border: 1px solid rgba(245,158,11,0.3); }
.badge-TRAITEE    { background: rgba(52,211,153,0.15);  color: #34d399; border: 1px solid rgba(52,211,153,0.3); }
.badge-REFUSEE    { background: rgba(239,68,68,0.15);   color: #f87171; border: 1px solid rgba(239,68,68,0.3); }

.type-badge {
    padding: 4px 10px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 0.5px;
}
.type-TRANSPORT   { background: rgba(59,130,246,0.15);  color: #60a5fa; }
.type-HEBERGEMENT { background: rgba(168,85,247,0.15);  color: #c084fc; }
.type-LOISIR      { background: rgba(20,184,166,0.15);  color: #2dd4bf; }

/* Action buttons */
.action-buttons { display: flex; gap: 6px; align-items: center; justify-content: flex-end; }

.btn-action {
    width: 34px; height: 34px;
    border-radius: 10px;
    border: 1px solid var(--border-subtle);
    background: var(--glass-bg);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    transition: all 0.2s ease;
    text-decoration: none;
    color: var(--text-secondary);
}
.btn-action:hover { transform: scale(1.1); }
.btn-action.btn-view  { color: #818cf8; border-color: rgba(99,102,241,0.3); }
.btn-action.btn-view:hover  { background: rgba(99,102,241,0.12); }
.btn-action.btn-reply { color: #34d399; border-color: rgba(52,211,153,0.3); }
.btn-action.btn-reply:hover { background: rgba(52,211,153,0.12); }
.btn-action.btn-delete { color: #f87171; border-color: rgba(239,68,68,0.3); }
.btn-action.btn-delete:hover { background: rgba(239,68,68,0.12); }

.rec-sujet {
    max-width: 180px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-weight: 500;
    color: var(--text-primary);
}

/* Statut select inline */
.statut-select-inline {
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 8px;
    color: var(--text-secondary);
    font-size: 12px;
    padding: 4px 8px;
    cursor: pointer;
    outline: none;
    transition: all 0.2s ease;
}
.statut-select-inline:focus {
    border-color: var(--sky-blue);
}
.statut-select-inline option { background: #071b2e; color: var(--text-primary); }

/* Pagination */
.pagination-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 24px;
    border-top: 1px solid var(--border-subtle);
}
.pagination-info { font-size: 13px; color: var(--text-secondary); }
.pagination { display: flex; gap: 6px; }

.page-btn {
    width: 36px; height: 36px;
    border-radius: 10px;
    border: 1px solid var(--border-subtle);
    background: var(--glass-bg);
    cursor: pointer;
    font-size: 13px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: var(--text-secondary);
    transition: all 0.2s ease;
}
.page-btn:hover { background: rgba(47,168,255,0.1); color: var(--text-primary); }
.page-btn.current {
    background: linear-gradient(135deg, var(--sky-blue), #1e6fa8);
    color: white;
    border-color: transparent;
    box-shadow: 0 4px 12px rgba(47,168,255,0.3);
}

/* Empty state */
.empty-state {
    text-align: center;
    padding: 60px 20px;
    color: var(--text-muted);
}
.empty-state-icon {
    font-size: 48px;
    opacity: 0.2;
    margin-bottom: 16px;
}

/* Modal */
.modal-overlay {
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(5,20,33,0.85);
    backdrop-filter: blur(8px);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    padding: 20px;
}
.modal-overlay.active { display: flex; }

.modal {
    background: linear-gradient(135deg, rgba(11,45,74,0.98) 0%, rgba(7,27,46,0.98) 100%);
    border: 1px solid var(--border-subtle);
    border-radius: 20px;
    width: 100%;
    max-width: 500px;
    box-shadow: 0 25px 80px rgba(0,0,0,0.5), var(--shadow-glow-blue);
    animation: modalSlide 0.3s ease;
    overflow: hidden;
}
@keyframes modalSlide {
    from { opacity:0; transform: translateY(-30px) scale(0.95); }
    to   { opacity:1; transform: translateY(0) scale(1); }
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 24px;
    background: linear-gradient(135deg, rgba(30,111,168,0.2) 0%, rgba(11,45,74,0.4) 100%);
    border-bottom: 1px solid var(--border-subtle);
}
.modal-header h3 {
    font-size: 17px;
    font-weight: 600;
    color: var(--text-primary);
    display: flex;
    align-items: center;
    gap: 10px;
}
.modal-header h3 i { color: var(--amber); }

.modal-close {
    width: 36px; height: 36px;
    display: flex; align-items: center; justify-content: center;
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 10px;
    color: var(--text-secondary);
    cursor: pointer;
    transition: all 0.3s ease;
}
.modal-close:hover {
    background: linear-gradient(135deg, #EF4444, #DC2626);
    color: white;
    border-color: transparent;
    transform: rotate(90deg);
}

.modal-body { padding: 24px; }

.modal-subtitle {
    font-size: 13px;
    color: var(--text-secondary);
    margin-bottom: 16px;
    padding: 10px 14px;
    background: var(--glass-bg);
    border-radius: 8px;
    border: 1px solid var(--border-subtle);
}

.modal-textarea {
    width: 100%;
    min-height: 130px;
    border: 1px solid var(--border-subtle);
    border-radius: 12px;
    padding: 14px;
    font-size: 14px;
    font-family: inherit;
    resize: vertical;
    outline: none;
    background: var(--glass-bg);
    color: var(--text-primary);
    box-sizing: border-box;
    transition: all 0.2s ease;
}
.modal-textarea:focus {
    border-color: var(--sky-blue);
    box-shadow: 0 0 0 3px rgba(47,168,255,0.15);
}
.modal-textarea::placeholder { color: var(--text-muted); }

.modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 12px;
    padding: 16px 24px;
    border-top: 1px solid var(--border-subtle);
    background: rgba(7,27,46,0.3);
}

/* Toast */
.admin-toast {
    position: fixed;
    bottom: 24px; right: 24px;
    padding: 14px 20px;
    border-radius: 12px;
    font-size: 13px;
    font-weight: 500;
    color: white;
    z-index: 99999;
    transform: translateY(80px);
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.34,1.56,0.64,1);
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}
.admin-toast.show    { transform: translateY(0); opacity: 1; }
.admin-toast.success { background: linear-gradient(135deg, #059669, #10b981); }
.admin-toast.error   { background: linear-gradient(135deg, #dc2626, #ef4444); }
.badge-danger  { background: rgba(239,68,68,0.15);   color: #f87171; border: 1px solid rgba(239,68,68,0.3); }
.badge-info    { background: rgba(47,168,255,0.15);  color: #60a5fa; border: 1px solid rgba(47,168,255,0.3); }
.badge-success { background: rgba(52,211,153,0.15);  color: #34d399; border: 1px solid rgba(52,211,153,0.3); }
</style>
{# ════ STATS ════ #}
<div class=\"rec-stats-grid\">
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-total\"><i class=\"fas fa-list-alt\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.total }}</div>
        <div class=\"rec-stat-label\">Total</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-attente\"><i class=\"fas fa-clock\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.en_attente }}</div>
        <div class=\"rec-stat-label\">En attente</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-traitee\"><i class=\"fas fa-check-circle\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.traitee }}</div>
        <div class=\"rec-stat-label\">Traitées</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-refusee\"><i class=\"fas fa-times-circle\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.refusee }}</div>
        <div class=\"rec-stat-label\">Refusées</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-transport\"><i class=\"fas fa-plane\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.transport }}</div>
        <div class=\"rec-stat-label\">Transport</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-heberg\"><i class=\"fas fa-hotel\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.hebergement }}</div>
        <div class=\"rec-stat-label\">Hébergement</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-loisir\"><i class=\"fas fa-compass\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.loisir }}</div>
        <div class=\"rec-stat-label\">Loisirs</div>
    </div>
</div>

{% set currentPageSafe = pagination ? pagination.currentPageNumber : (currentPage ?? 1) %}
{% set safeFilter = filter ?? 'all' %}
{% set safeType = type ?? 'all' %}
{% set safeSearch = search ?? '' %}

<div class=\"toolbar\">
    <div class=\"toolbar-left\">

        <a href=\"{{ path('admin_reclamations', {
            page: currentPageSafe,
            filter:'all',
            type:safeType,
            search:safeSearch
        }) }}\"
           class=\"filter-btn {{ safeFilter == 'all' ? 'active' : '' }}\">
            <i class=\"fas fa-border-all\"></i> Toutes
        </a>

        <a href=\"{{ path('admin_reclamations', {
            page: currentPageSafe,
            filter:'EN_ATTENTE',
            type:safeType,
            search:safeSearch
        }) }}\"
           class=\"filter-btn {{ safeFilter == 'EN_ATTENTE' ? 'active-attente' : '' }}\">
            <i class=\"fas fa-clock\"></i> En attente
        </a>

        <a href=\"{{ path('admin_reclamations', {
            page: currentPageSafe,
            filter:'TRAITEE',
            type:safeType,
            search:safeSearch
        }) }}\"
           class=\"filter-btn {{ safeFilter == 'TRAITEE' ? 'active-traitee' : '' }}\">
            <i class=\"fas fa-check\"></i> Traitées
        </a>

        <a href=\"{{ path('admin_reclamations', {
            page: currentPageSafe,
            filter:'REFUSEE',
            type:safeType,
            search:safeSearch
        }) }}\"
           class=\"filter-btn {{ safeFilter == 'REFUSEE' ? 'active-refusee' : '' }}\">
            <i class=\"fas fa-times\"></i> Refusées
        </a>

        <span style=\"width:1px; height:20px; background:var(--border-subtle); display:inline-block;\"></span>

        <a href=\"{{ path('admin_reclamations', {
            page: currentPageSafe,
            filter:safeFilter,
            type:'all',
            search:safeSearch
        }) }}\"
           class=\"filter-btn {{ safeType == 'all' ? 'active' : '' }}\">
           Tous types
        </a>

        <a href=\"{{ path('admin_reclamations', {
            page: currentPageSafe,
            filter:safeFilter,
            type:'TRANSPORT',
            search:safeSearch
        }) }}\"
           class=\"filter-btn {{ safeType == 'TRANSPORT' ? 'active' : '' }}\">
            <i class=\"fas fa-plane\"></i> Transport
        </a>

        <a href=\"{{ path('admin_reclamations', {
            page: currentPageSafe,
            filter:safeFilter,
            type:'HEBERGEMENT',
            search:safeSearch
        }) }}\"
           class=\"filter-btn {{ safeType == 'HEBERGEMENT' ? 'active' : '' }}\">
            <i class=\"fas fa-hotel\"></i> Hébergement
        </a>

        <a href=\"{{ path('admin_reclamations', {
            page: currentPageSafe,
            filter:safeFilter,
            type:'LOISIR',
            search:safeSearch
        }) }}\"
           class=\"filter-btn {{ safeType == 'LOISIR' ? 'active' : '' }}\">
            <i class=\"fas fa-compass\"></i> Loisirs
        </a>

    </div>

    <div class=\"toolbar-right\">

        <form method=\"GET\" action=\"{{ path('admin_reclamations') }}\" style=\"display:flex;\">
            <input type=\"hidden\" name=\"filter\" value=\"{{ safeFilter }}\">
            <input type=\"hidden\" name=\"type\" value=\"{{ safeType }}\">
            <input type=\"hidden\" name=\"page\" value=\"{{ currentPageSafe }}\"> {# 🔥 IMPORTANT #}

            <div class=\"search-box-inline\">
                <i class=\"fas fa-search\"></i>
                <input type=\"text\" name=\"search\" value=\"{{ safeSearch }}\"
                       placeholder=\"Rechercher...\" onchange=\"this.form.submit()\">
            </div>
        </form>

<a href=\"{{ path('admin_reclamations_export') }}\" class=\"export-btn\">
    <i class=\"fas fa-file-excel\"></i> Export Excel
</a>

<style>
.export-btn {
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 10px;
    text-decoration: none;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 6px;
    box-shadow: 0 4px 12px rgba(16,185,129,0.3);
    transition: all 0.2s ease;
}
.export-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(16,185,129,0.4);
}
</style>

    </div>
</div>
{# ════ TABLE ════ #}
<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-comment-dots\"></i> Liste des Réclamations
        </div>
        <div class=\"table-info\">
            {% if total > 0 %}
    {% if pagination %}
        Affichage de {{ ((pagination.currentPageNumber-1)*pagination.itemNumberPerPage)+1 }}
        – {{ min(pagination.currentPageNumber*pagination.itemNumberPerPage, total) }}
    {% else %}
        Affichage de {{ ((currentPage-1)*10)+1 }}
        – {{ min(currentPage*10, total) }}
    {% endif %}
{% else %}
    Aucune réclamation trouvée
{% endif %}
        </div>
    </div>

    {% if reclamations|length > 0 %}
    <table>
        <thead>
            <tr>
                <th>Sujet</th>
                <th>Type</th>
                <th>Statut</th>
                <th>Priorité</th>
                <th>Date</th>
                <th>Utilisateur</th>
<th>Réponse</th>
<th>Satisfaction</th>
<th style=\"text-align:right;\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for rec in reclamations %}
            <tr id=\"row-{{ rec.idReclamation }}\">
                <td>
                    <div class=\"rec-sujet\" title=\"{{ rec.sujet }}\">{{ rec.sujet }}</div>
                    <div style=\"font-size:11px; color:var(--text-muted); margin-top:3px;\">
                        {{ rec.description|slice(0,55) }}...
                    </div>
                </td>
                <td>
                    <span class=\"type-badge type-{{ rec.typeReclamation }}\">
                        {{ rec.typeReclamation }}
                    </span>
                </td>
                <td>
                    <span class=\"badge badge-{{ rec.statut }}\" id=\"badge-{{ rec.idReclamation }}\">
                        <i class=\"fas {{ rec.statut == 'EN_ATTENTE' ? 'fa-clock' : (rec.statut == 'TRAITEE' ? 'fa-check' : 'fa-times') }}\"></i>
                        {{ rec.statut|replace({'_': ' '}) }}
                    </span>
                </td>
                <td>
                    <span class=\"badge {{ rec.priorite == 'URGENT' ? 'badge-danger' : (rec.priorite == 'NORMAL' ? 'badge-info' : 'badge-success') }}\">
                        <i class=\"fas {{ rec.priorite == 'URGENT' ? 'fa-arrow-up' : (rec.priorite == 'NORMAL' ? 'fa-minus' : 'fa-arrow-down') }}\"></i>
                        {{ rec.priorite }}
                    </span>
                </td>
                <td style=\"font-size:12px; color:var(--text-secondary); white-space:nowrap;\">
                    {{ rec.dateReclamation|date('d/m/Y') }}
                </td>
                <td style=\"font-size:12px; color:var(--text-secondary);\">
                    {{ userEmail[rec.idReclamation] ?? '—' }}
                </td>
                <td>
                    {% if rec.reponseAdmin %}
                        <span style=\"font-size:11px; color:#34d399; display:flex; align-items:center; gap:4px;\">
                            <i class=\"fas fa-check-circle\"></i> Répondu
                        </span>
                    {% else %}
                        <span style=\"font-size:11px; color:var(--text-muted);\">—</span>
                    {% endif %}
                </td>
                <td>
                    {% if rec.statut == 'TRAITEE' %}
                        {% if rec.satisfait is null %}
                            <span style=\"color:rgba(255,255,255,0.4); font-size:12px;\">—</span>
                        {% elseif rec.satisfait == true %}
                            <span style=\"color:#34d399; font-size:12px;\">👍 Satisfait</span>
                        {% else %}
                            <span style=\"color:#f87171; font-size:12px;\">👎 Insatisfait</span>
                        {% endif %}
                    {% else %}
                        <span style=\"color:rgba(255,255,255,0.3); font-size:12px;\">—</span>
                    {% endif %}
                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"{{ path('admin_reclamation_view', {id: rec.idReclamation}) }}\"
                           class=\"btn-action btn-view\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <button class=\"btn-action btn-reply\"
                                onclick=\"openReplyModal({{ rec.idReclamation }}, '{{ rec.sujet|e('js') }}', '{{ rec.reponseAdmin ? rec.reponseAdmin|e('js') : '' }}')\">
                            <i class=\"fas fa-reply\"></i>
                        </button>
                        <button class=\"btn-action btn-delete\"
                                onclick=\"deleteRec({{ rec.idReclamation }})\">
                            <i class=\"fas fa-trash-alt\"></i>
                        </button>
                    </div>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

 {# ==== VARIABLES SAFE ==== #}
{% set current = pagination ? pagination.currentPageNumber : (currentPage ?? 1) %}
{% set maxPages = pagination ? pagination.pageCount : (pages ?? 1) %}
{% set perPage = pagination ? pagination.itemNumberPerPage : 10 %}
{% set safeFilter = filter ?? 'all' %}
{% set safeType = type ?? 'all' %}
{% set safeSearch = search ?? '' %}

<div class=\"pagination-container\">

    <div class=\"pagination-info\">
        {% if total > 0 %}
            Affichage de {{ ((current-1)*perPage)+1 }}
            – {{ min(current*perPage, total) }}
            sur {{ total }} réclamations
        {% else %}
            Aucune réclamation trouvée
        {% endif %}
    </div>

    <div class=\"pagination\">

        {# PREVIOUS #}
        <a href=\"?page={{ current > 1 ? current-1 : 1 }}&filter={{ safeFilter }}&type={{ safeType }}&search={{ safeSearch }}\"
           class=\"page-btn {{ current <= 1 ? 'disabled' : '' }}\"
           style=\"{{ current <= 1 ? 'opacity:0.4;' : '' }}\">
            <i class=\"fas fa-chevron-left\"></i>
        </a>

        {# NUMÉROS #}
        {% for p in 1..maxPages %}

    {% if p == current %}
        <span class=\"page-btn current\">{{ p }}</span>

    {% elseif p == 1 or p == maxPages or (p >= current-1 and p <= current+1) %}
        <a href=\"?page={{ p }}&filter={{ safeFilter }}&type={{ safeType }}&search={{ safeSearch }}\"
           class=\"page-btn\">
            {{ p }}
        </a>

    {% elseif p == current-2 or p == current+2 %}
        <span class=\"page-btn\" style=\"opacity:0.5;\">…</span>
    {% endif %}

{% endfor %}

        {# NEXT #}
        <a href=\"?page={{ current < maxPages ? current+1 : maxPages }}&filter={{ safeFilter }}&type={{ safeType }}&search={{ safeSearch }}\"
           class=\"page-btn\"
           style=\"{{ current >= maxPages ? 'opacity:0.4;' : '' }}\">
            <i class=\"fas fa-chevron-right\"></i>
        </a>

    </div>
</div>

    {% else %}
    <div class=\"empty-state\">
        <div class=\"empty-state-icon\"><i class=\"fas fa-inbox\"></i></div>
        <h3 style=\"color:var(--text-secondary); margin:0 0 8px;\">Aucune réclamation trouvée</h3>
        <p style=\"font-size:13px; margin:0;\">Modifiez vos filtres ou revenez plus tard.</p>
    </div>
    {% endif %}
</div>

{# ════ MODAL RÉPONSE ════ #}
<div class=\"modal-overlay\" id=\"replyModal\">
    <div class=\"modal\">
        <div class=\"modal-header\">
            <h3><i class=\"fas fa-reply\"></i> Répondre à la réclamation</h3>
            <button class=\"modal-close\" onclick=\"closeReplyModal()\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div class=\"modal-body\">
            <div class=\"modal-subtitle\" id=\"modalSubtitle\">—</div>
            <textarea class=\"modal-textarea\" id=\"replyText\"
                      placeholder=\"Rédigez votre réponse à l'utilisateur...\"></textarea>
        </div>
        <div class=\"modal-footer\">
            <button class=\"btn btn-secondary\" onclick=\"closeReplyModal()\">Annuler</button>
            <button class=\"btn btn-primary\" id=\"replyConfirmBtn\" onclick=\"submitReply()\">
                <i class=\"fas fa-paper-plane\"></i> Envoyer
            </button>
        </div>
    </div>
</div>

{# Toast #}
<div class=\"admin-toast\" id=\"adminToast\">
    <i id=\"toastIcon\" class=\"fas fa-check-circle\"></i>
    <span id=\"toastMsg\"></span>
</div>
<script>
document.querySelectorAll('.page-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        console.log(\"CLICK OK\");
    });
});
</script>
<script>
let currentRecId = null;

function openReplyModal(id, sujet, existingReply) {
    currentRecId = id;
    document.getElementById('modalSubtitle').textContent = '📋 ' + sujet;
    document.getElementById('replyText').value = existingReply || '';
    document.getElementById('replyModal').classList.add('active');
    setTimeout(() => document.getElementById('replyText').focus(), 300);
}

function closeReplyModal() {
    document.getElementById('replyModal').classList.remove('active');
}

document.getElementById('replyModal').addEventListener('click', function(e) {
    if (e.target === this) closeReplyModal();
});

function submitReply() {
    const reponse = document.getElementById('replyText').value.trim();
    const btn     = document.getElementById('replyConfirmBtn');

    if (!reponse || reponse.length < 5) {
        showToast('La réponse est trop courte (min 5 caractères)', 'error'); return;
    }

    btn.disabled    = true;
    btn.innerHTML   = '<i class=\"fas fa-spinner fa-spin\"></i> Envoi...';

fetch(`/admin/reclamations/\${currentRecId}/repondre`, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ reponse })
})
    .then(r => r.json())
    .then(data => {
        btn.disabled  = false;
        btn.innerHTML = '<i class=\"fas fa-paper-plane\"></i> Envoyer';
        if (data.success) {
            closeReplyModal();
            showToast('Réponse envoyée avec succès ✅', 'success');
            updateBadge(currentRecId, 'TRAITEE');
            setTimeout(() => location.reload(), 1600);
        } else {
            showToast(data.message || 'Erreur', 'error');
        }
    })
    .catch(() => {
        btn.disabled  = false;
        btn.innerHTML = '<i class=\"fas fa-paper-plane\"></i> Envoyer';
        showToast('Erreur de connexion', 'error');
    });
}

function changeStatut(id, statut) {
fetch(`/admin/reclamations/reclamation/\${id}/statut`, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ statut })
})
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            updateBadge(id, statut);
            showToast('Statut mis à jour', 'success');
        } else {
            showToast('Erreur', 'error');
        }
    });
}

function updateBadge(id, statut) {
    const badge = document.getElementById('badge-' + id);
    if (!badge) return;
    const icons  = { EN_ATTENTE: 'fa-clock', TRAITEE: 'fa-check', REFUSEE: 'fa-times' };
    const labels = { EN_ATTENTE: 'EN ATTENTE', TRAITEE: 'TRAITEE', REFUSEE: 'REFUSEE' };
    badge.className = `badge badge-\${statut}`;
    badge.innerHTML = `<i class=\"fas \${icons[statut]}\"></i> \${labels[statut]}`;
}

function deleteRec(id) {
    if (!confirm('Supprimer définitivement cette réclamation ?')) return;
fetch(`/admin/reclamations/reclamation/\${id}/delete`, {
    method: 'POST'
})        .then(r => r.json())
        .then(data => {
            if (data.success) {
                const row = document.getElementById('row-' + id);
                if (row) {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '0';
                    row.style.transform = 'translateX(20px)';
                    setTimeout(() => row.remove(), 300);
                }
                showToast('Réclamation supprimée', 'success');
            } else {
                showToast('Erreur lors de la suppression', 'error');
            }
        });
}

let toastTimer = null;
function showToast(message, type = 'success') {
    const toast = document.getElementById('adminToast');
    toast.className = `admin-toast \${type}`;
    document.getElementById('toastMsg').textContent = message;
    document.getElementById('toastIcon').className  = type === 'success'
        ? 'fas fa-check-circle' : 'fas fa-times-circle';
    toast.classList.add('show');
    if (toastTimer) clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('show'), 3500);
}

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeReplyModal();
});
</script>
{% endblock %}
", "admin/reclamations/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\reclamations\\index.html.twig");
    }
}
