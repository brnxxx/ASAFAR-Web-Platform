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

/* admin/whatsapp_sessions/index.html.twig */
class __TwigTemplate_384c9b5a8f5252da0641ade0d27ba850 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/whatsapp_sessions/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/whatsapp_sessions/index.html.twig"));

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

        yield "Sessions WhatsApp - Admin ASAFAR";
        
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

        yield "fab fa-whatsapp";
        
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

        yield "Sessions WhatsApp IA";
        
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

        yield "Sessions WhatsApp";
        
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
   STATS GRID
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

.icon-total    { background: rgba(99,102,241,0.2);  color: #818cf8; }
.icon-active   { background: rgba(52,211,153,0.2);  color: #34d399; }
.icon-termine  { background: rgba(47,168,255,0.2);  color: #60a5fa; }
.icon-annule   { background: rgba(239,68,68,0.2);   color: #f87171; }
.icon-coherent { background: rgba(245,158,11,0.2);  color: #fbbf24; }
.icon-whatsapp { background: rgba(37,211,102,0.2);  color: #25d366; }

/* ══════════════════════════════════════
   TOOLBAR
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
.filter-btn.active         { background: linear-gradient(135deg, var(--sky-blue), #1e6fa8); color: white; border-color: transparent; box-shadow: 0 4px 12px rgba(47,168,255,0.3); }
.filter-btn.active-active  { background: linear-gradient(135deg, #10b981, #059669); color: white; border-color: transparent; }
.filter-btn.active-termine { background: linear-gradient(135deg, #3b82f6, #1d4ed8); color: white; border-color: transparent; }
.filter-btn.active-annule  { background: linear-gradient(135deg, #ef4444, #dc2626); color: white; border-color: transparent; }

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
   TABLE
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
.table-title i { color: #25d366; }
.table-info { font-size: 13px; color: var(--text-secondary); }

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
tbody tr:hover td { background: rgba(47,168,255,0.04); }

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
.badge-active   { background: rgba(52,211,153,0.15);  color: #34d399; border: 1px solid rgba(52,211,153,0.3); }
.badge-termine  { background: rgba(47,168,255,0.15);  color: #60a5fa; border: 1px solid rgba(47,168,255,0.3); }
.badge-annule   { background: rgba(239,68,68,0.15);   color: #f87171; border: 1px solid rgba(239,68,68,0.3); }

.coherent-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
}
.coherent-yes { background: rgba(52,211,153,0.15); color: #34d399; border: 1px solid rgba(52,211,153,0.3); }
.coherent-no  { background: rgba(239,68,68,0.15);  color: #f87171; border: 1px solid rgba(239,68,68,0.3); }
.coherent-null { background: rgba(100,116,139,0.15); color: #94a3b8; border: 1px solid rgba(100,116,139,0.3); }

/* Turn indicator */
.turn-indicator {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px; height: 28px;
    border-radius: 50%;
    font-size: 12px;
    font-weight: 700;
    background: rgba(99,102,241,0.15);
    color: #818cf8;
    border: 1px solid rgba(99,102,241,0.3);
}

/* Phone */
.phone-cell {
    display: flex;
    align-items: center;
    gap: 8px;
    font-family: monospace;
    font-size: 12px;
    color: #25d366;
}
.phone-cell i { font-size: 14px; }

/* Summary preview */
.summary-preview {
    max-width: 200px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 12px;
    color: var(--text-muted);
    font-style: italic;
}

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
.btn-action.btn-view   { color: #818cf8; border-color: rgba(99,102,241,0.3); }
.btn-action.btn-view:hover   { background: rgba(99,102,241,0.12); }
.btn-action.btn-delete { color: #f87171; border-color: rgba(239,68,68,0.3); }
.btn-action.btn-delete:hover { background: rgba(239,68,68,0.12); }

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
.empty-state-icon { font-size: 48px; opacity: 0.2; margin-bottom: 16px; }

/* ══════════════════════════════════════
   MODAL DÉTAIL SESSION
══════════════════════════════════════ */
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
    max-width: 620px;
    max-height: 85vh;
    overflow-y: auto;
    box-shadow: 0 25px 80px rgba(0,0,0,0.5), var(--shadow-glow-blue);
    animation: modalSlide 0.3s ease;
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
    position: sticky;
    top: 0;
    z-index: 10;
}
.modal-header h3 {
    font-size: 17px;
    font-weight: 600;
    color: var(--text-primary);
    display: flex;
    align-items: center;
    gap: 10px;
}
.modal-header h3 i { color: #25d366; }
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

.modal-body { padding: 24px; display: flex; flex-direction: column; gap: 20px; }

/* Info grid inside modal */
.info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}
.info-item {
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 12px;
    padding: 14px;
}
.info-item-label {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--text-muted);
    margin-bottom: 6px;
}
.info-item-value {
    font-size: 14px;
    font-weight: 500;
    color: var(--text-primary);
}

/* Conversation bubbles */
.conversation-block {
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 12px;
    padding: 16px;
}
.conversation-title {
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--text-muted);
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.conversation-title i { color: #25d366; }

.chat-messages { display: flex; flex-direction: column; gap: 10px; }

.chat-bubble {
    max-width: 85%;
    padding: 10px 14px;
    border-radius: 14px;
    font-size: 13px;
    line-height: 1.5;
}
.chat-bubble.user {
    align-self: flex-end;
    background: rgba(37,211,102,0.15);
    border: 1px solid rgba(37,211,102,0.25);
    color: var(--text-primary);
    border-bottom-right-radius: 4px;
}
.chat-bubble.assistant {
    align-self: flex-start;
    background: rgba(47,168,255,0.12);
    border: 1px solid rgba(47,168,255,0.2);
    color: var(--text-primary);
    border-bottom-left-radius: 4px;
}
.chat-role {
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    margin-bottom: 4px;
    opacity: 0.6;
}

/* Summary block */
.summary-block {
    background: rgba(245,158,11,0.08);
    border: 1px solid rgba(245,158,11,0.2);
    border-radius: 12px;
    padding: 16px;
}
.summary-block-title {
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #fbbf24;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.summary-block p {
    font-size: 13px;
    color: var(--text-secondary);
    line-height: 1.6;
    margin: 0;
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
</style>

";
        // line 514
        yield "<div class=\"rec-stats-grid\">
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-total\"><i class=\"fas fa-layer-group\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 517, $this->source); })()), "total", [], "any", false, false, false, 517), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">Total sessions</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-active\"><i class=\"fas fa-circle-dot\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 522, $this->source); })()), "active", [], "any", false, false, false, 522), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">En cours</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-termine\"><i class=\"fas fa-flag-checkered\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 527, $this->source); })()), "termine", [], "any", false, false, false, 527), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">Terminées</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-annule\"><i class=\"fas fa-ban\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 532, $this->source); })()), "annule", [], "any", false, false, false, 532), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">Annulées</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-coherent\"><i class=\"fas fa-brain\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 537, $this->source); })()), "coherent", [], "any", false, false, false, 537), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">Cohérentes</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-whatsapp\"><i class=\"fab fa-whatsapp\"></i></div>
        <div class=\"rec-stat-value\">";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 542, $this->source); })()), "avg_turns", [], "any", false, false, false, 542), "html", null, true);
        yield "</div>
        <div class=\"rec-stat-label\">Tours moyens</div>
    </div>
</div>

";
        // line 548
        yield "<div class=\"toolbar\">
    <div class=\"toolbar-left\">
        <a href=\"";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_whatsapp_sessions", ["filter" => "all", "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 550, $this->source); })())]), "html", null, true);
        yield "\"
           class=\"filter-btn ";
        // line 551
        yield ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 551, $this->source); })()) == "all")) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-border-all\"></i> Toutes
        </a>
        <a href=\"";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_whatsapp_sessions", ["filter" => "active", "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 554, $this->source); })())]), "html", null, true);
        yield "\"
           class=\"filter-btn ";
        // line 555
        yield ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 555, $this->source); })()) == "active")) ? ("active-active") : (""));
        yield "\">
            <i class=\"fas fa-circle-dot\"></i> En cours
        </a>
        <a href=\"";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_whatsapp_sessions", ["filter" => "termine", "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 558, $this->source); })())]), "html", null, true);
        yield "\"
           class=\"filter-btn ";
        // line 559
        yield ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 559, $this->source); })()) == "termine")) ? ("active-termine") : (""));
        yield "\">
            <i class=\"fas fa-flag-checkered\"></i> Terminées
        </a>
        <a href=\"";
        // line 562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_whatsapp_sessions", ["filter" => "annule", "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 562, $this->source); })())]), "html", null, true);
        yield "\"
           class=\"filter-btn ";
        // line 563
        yield ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 563, $this->source); })()) == "annule")) ? ("active-annule") : (""));
        yield "\">
            <i class=\"fas fa-ban\"></i> Annulées
        </a>
    </div>
    <div class=\"toolbar-right\">
        <form method=\"GET\" action=\"";
        // line 568
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_whatsapp_sessions");
        yield "\" style=\"display:flex;\">
            <input type=\"hidden\" name=\"filter\" value=\"";
        // line 569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 569, $this->source); })()), "html", null, true);
        yield "\">
            <div class=\"search-box-inline\">
                <i class=\"fas fa-search\"></i>
                <input type=\"text\" name=\"search\" value=\"";
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 572, $this->source); })()), "html", null, true);
        yield "\"
                       placeholder=\"Rechercher par téléphone...\" onchange=\"this.form.submit()\">
            </div>
        </form>
    </div>
</div>

";
        // line 580
        yield "<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fab fa-whatsapp\"></i> Sessions d'analyse WhatsApp IA
        </div>
        <div class=\"table-info\">
            ";
        // line 586
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 586, $this->source); })()) > 0)) {
            // line 587
            yield "                Affichage de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 587, $this->source); })()) - 1) * 10) + 1), "html", null, true);
            yield "–";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 587, $this->source); })()) * 10), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 587, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 587, $this->source); })()), "html", null, true);
            yield " sessions
            ";
        } else {
            // line 589
            yield "                Aucune session trouvée
            ";
        }
        // line 591
        yield "        </div>
    </div>

    ";
        // line 594
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 594, $this->source); })())) > 0)) {
            // line 595
            yield "    <table>
        <thead>
            <tr>
                <th>Téléphone</th>
                <th>Réclamation</th>
                <th>Étape</th>
                <th>Cohérence</th>
                <th>Tours</th>
                <th>Résumé IA</th>
                <th>Créée le</th>
                <th style=\"text-align:right;\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 609
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 609, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 610
                yield "
                <td>
                    <div class=\"phone-cell\">
                        <i class=\"fab fa-whatsapp\"></i>
                        ";
                // line 614
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "phone", [], "any", false, false, false, 614), "html", null, true);
                yield "
                    </div>
                </td>

                <td style=\"font-size:12px; color:var(--text-secondary);\">
                    ";
                // line 619
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "reclamationId", [], "any", false, false, false, 619)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 620
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "reclamationId", [], "any", false, false, false, 620)]), "html", null, true);
                    yield "\"
                           style=\"color:#818cf8; text-decoration:none; display:flex; align-items:center; gap:5px;\">
                            <i class=\"fas fa-file-alt\" style=\"font-size:11px;\"></i>
                            #";
                    // line 623
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "reclamationId", [], "any", false, false, false, 623), "html", null, true);
                    yield "
                        </a>
                    ";
                } else {
                    // line 626
                    yield "                        <span style=\"color:var(--text-muted);\">—</span>
                    ";
                }
                // line 628
                yield "                </td>

                <td>
                    ";
                // line 631
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "isActive", [], "any", false, false, false, 631)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 632
                    yield "                        <span class=\"badge badge-active\">
                            <i class=\"fas fa-circle\" style=\"font-size:8px;\"></i> En cours
                        </span>
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 635
$context["session"], "step", [], "any", false, false, false, 635) == "annule")) {
                    // line 636
                    yield "                        <span class=\"badge badge-annule\">
                            <i class=\"fas fa-ban\"></i> Annulée
                        </span>
                    ";
                } else {
                    // line 640
                    yield "                        <span class=\"badge badge-termine\">
                            <i class=\"fas fa-check\"></i> Terminée
                        </span>
                    ";
                }
                // line 644
                yield "                </td>

                <td>
                    ";
                // line 647
                if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coherent", [], "any", false, false, false, 647))) {
                    // line 648
                    yield "                        <span class=\"coherent-badge coherent-null\">
                            <i class=\"fas fa-minus\"></i> N/A
                        </span>
                    ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 651
$context["session"], "coherent", [], "any", false, false, false, 651)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 652
                    yield "                        <span class=\"coherent-badge coherent-yes\">
                            <i class=\"fas fa-check-circle\"></i> Valide
                        </span>
                    ";
                } else {
                    // line 656
                    yield "                        <span class=\"coherent-badge coherent-no\">
                            <i class=\"fas fa-times-circle\"></i> Invalide
                        </span>
                    ";
                }
                // line 660
                yield "                </td>

                <td>
                    <div class=\"turn-indicator\">";
                // line 663
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "turn", [], "any", false, false, false, 663), "html", null, true);
                yield "</div>
                </td>

                <td>
                    ";
                // line 667
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["session"], "analysisSummary", [], "any", false, false, false, 667)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 668
                    yield "                        <div class=\"summary-preview\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "analysisSummary", [], "any", false, false, false, 668), "html", null, true);
                    yield "\">
                            ";
                    // line 669
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["session"], "analysisSummary", [], "any", false, false, false, 669), 0, 60), "html", null, true);
                    yield "...
                        </div>
                    ";
                } else {
                    // line 672
                    yield "                        <span style=\"font-size:11px; color:var(--text-muted);\">—</span>
                    ";
                }
                // line 674
                yield "                </td>

                <td style=\"font-size:12px; color:var(--text-secondary); white-space:nowrap;\">
                    ";
                // line 677
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "createdAt", [], "any", false, false, false, 677), "d/m/Y H:i"), "html", null, true);
                yield "
                </td>

                <td>
                    <div class=\"action-buttons\">
                        <button class=\"btn-action btn-view\" title=\"Voir la conversation\"
                                onclick=\"openSessionModal(";
                // line 683
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 683), "html", null, true);
                yield ")\">
                            <i class=\"fas fa-eye\"></i>
                        </button>
                        <button class=\"btn-action btn-delete\" title=\"Supprimer\"
                                onclick=\"deleteSession(";
                // line 687
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 687), "html", null, true);
                yield ")\">
                            <i class=\"fas fa-trash-alt\"></i>
                        </button>
                    </div>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 694
            yield "        </tbody>
    </table>

    <div class=\"pagination-container\">
        <div class=\"pagination-info\">Page ";
            // line 698
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 698, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 698, $this->source); })()), "html", null, true);
            yield "</div>
        <div class=\"pagination\">
            <a href=\"";
            // line 700
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_whatsapp_sessions", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 700, $this->source); })()) - 1), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 700, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 700, $this->source); })())]), "html", null, true);
            yield "\"
               class=\"page-btn\" style=\"";
            // line 701
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 701, $this->source); })()) <= 1)) ? ("opacity:0.4; pointer-events:none;") : (""));
            yield "\">
                <i class=\"fas fa-chevron-left\"></i>
            </a>
            ";
            // line 704
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 704, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 705
                yield "                ";
                if (($context["p"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 705, $this->source); })()))) {
                    // line 706
                    yield "                    <span class=\"page-btn current\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "</span>
                ";
                } elseif ((((                // line 707
$context["p"] == 1) || ($context["p"] == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 707, $this->source); })()))) || (($context["p"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 707, $this->source); })()) - 1)) && ($context["p"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 707, $this->source); })()) + 1))))) {
                    // line 708
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_whatsapp_sessions", ["page" => $context["p"], "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 708, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 708, $this->source); })())]), "html", null, true);
                    yield "\"
                       class=\"page-btn\">";
                    // line 709
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                    yield "</a>
                ";
                } elseif (((                // line 710
$context["p"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 710, $this->source); })()) - 2)) || ($context["p"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 710, $this->source); })()) + 2)))) {
                    // line 711
                    yield "                    <span class=\"page-btn\" style=\"pointer-events:none; opacity:0.5;\">…</span>
                ";
                }
                // line 713
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 714
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_whatsapp_sessions", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 714, $this->source); })()) + 1), "filter" => (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 714, $this->source); })()), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 714, $this->source); })())]), "html", null, true);
            yield "\"
               class=\"page-btn\" style=\"";
            // line 715
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 715, $this->source); })()) >= (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 715, $this->source); })()))) ? ("opacity:0.4; pointer-events:none;") : (""));
            yield "\">
                <i class=\"fas fa-chevron-right\"></i>
            </a>
        </div>
    </div>

    ";
        } else {
            // line 722
            yield "    <div class=\"empty-state\">
        <div class=\"empty-state-icon\"><i class=\"fab fa-whatsapp\"></i></div>
        <h3 style=\"color:var(--text-secondary); margin:0 0 8px;\">Aucune session trouvée</h3>
        <p style=\"font-size:13px; margin:0;\">Modifiez vos filtres ou revenez plus tard.</p>
    </div>
    ";
        }
        // line 728
        yield "</div>

";
        // line 731
        yield "<div class=\"modal-overlay\" id=\"sessionModal\">
    <div class=\"modal\">
        <div class=\"modal-header\">
            <h3><i class=\"fab fa-whatsapp\"></i> Détail de la session</h3>
            <button class=\"modal-close\" onclick=\"closeModal()\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div class=\"modal-body\" id=\"modalContent\">
            <div style=\"text-align:center; padding:40px; color:var(--text-muted);\">
                <i class=\"fas fa-spinner fa-spin\" style=\"font-size:24px;\"></i>
                <p style=\"margin-top:12px;\">Chargement...</p>
            </div>
        </div>
    </div>
</div>

";
        // line 749
        yield "<div class=\"admin-toast\" id=\"adminToast\">
    <i id=\"toastIcon\" class=\"fas fa-check-circle\"></i>
    <span id=\"toastMsg\"></span>
</div>

<script>
// ── Sessions data passées depuis le contrôleur ────────────────────────────
const sessionsData = ";
        // line 756
        yield (isset($context["sessionsJson"]) || array_key_exists("sessionsJson", $context) ? $context["sessionsJson"] : (function () { throw new RuntimeError('Variable "sessionsJson" does not exist.', 756, $this->source); })());
        yield ";

function openSessionModal(id) {
    document.getElementById('sessionModal').classList.add('active');
    const s = sessionsData[id];
    if (!s) { return; }

    // Parser l'historique
    let history = [];
    try { history = JSON.parse(s.collectedData || '{}').history || []; } catch(e) {}

    // Construire le contenu
    let html = `
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <div class=\"info-item-label\">Téléphone</div>
                <div class=\"info-item-value\" style=\"color:#25d366; font-family:monospace;\">
                    <i class=\"fab fa-whatsapp\"></i> \${s.phone}
                </div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-item-label\">Réclamation</div>
                <div class=\"info-item-value\">#\${s.reclamationId || '—'}</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-item-label\">Étape</div>
                <div class=\"info-item-value\">\${s.step}</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-item-label\">Tours</div>
                <div class=\"info-item-value\">\${s.turn} / 4</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-item-label\">Cohérence</div>
                <div class=\"info-item-value\">
                    \${s.coherent === null ? '<span style=\"color:#94a3b8;\">N/A</span>'
                    : s.coherent ? '<span style=\"color:#34d399;\"><i class=\"fas fa-check-circle\"></i> Valide</span>'
                    : '<span style=\"color:#f87171;\"><i class=\"fas fa-times-circle\"></i> Invalide</span>'}
                </div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-item-label\">Créée le</div>
                <div class=\"info-item-value\" style=\"font-size:12px; color:var(--text-secondary);\">\${s.createdAt}</div>
            </div>
        </div>`;

    // Raison
    if (s.reason) {
        html += `
        <div class=\"info-item\" style=\"background:rgba(99,102,241,0.08); border-color:rgba(99,102,241,0.2);\">
            <div class=\"info-item-label\" style=\"color:#818cf8;\">Raison du verdict</div>
            <div class=\"info-item-value\" style=\"font-size:13px; color:var(--text-secondary);\">\${s.reason}</div>
        </div>`;
    }

    // Résumé IA
    if (s.analysisSummary) {
        html += `
        <div class=\"summary-block\">
            <div class=\"summary-block-title\"><i class=\"fas fa-robot\"></i> Résumé IA</div>
            <p>\${s.analysisSummary}</p>
        </div>`;
    }

    // Conversation
    if (history.length > 0) {
        html += `
        <div class=\"conversation-block\">
            <div class=\"conversation-title\"><i class=\"fab fa-whatsapp\"></i> Conversation (\${history.length} messages)</div>
            <div class=\"chat-messages\">`;
        history.forEach(msg => {
            const isUser = msg.role === 'user';
            html += `
                <div class=\"chat-bubble \${isUser ? 'user' : 'assistant'}\">
                    <div class=\"chat-role\">\${isUser ? '👤 Utilisateur' : '🤖 Assistant IA'}</div>
                    \${msg.content}
                </div>`;
        });
        html += `</div></div>`;
    } else {
        html += `
        <div class=\"conversation-block\">
            <div class=\"conversation-title\"><i class=\"fab fa-whatsapp\"></i> Conversation</div>
            <p style=\"color:var(--text-muted); font-size:13px; text-align:center; padding:20px 0;\">
                Aucun message enregistré
            </p>
        </div>`;
    }

    document.getElementById('modalContent').innerHTML = html;
}

function closeModal() {
    document.getElementById('sessionModal').classList.remove('active');
}

document.getElementById('sessionModal').addEventListener('click', function(e) {
    if (e.target === this) closeModal();
});

function deleteSession(id) {
    if (!confirm('Supprimer définitivement cette session WhatsApp ?')) return;
    fetch(`/admin/whatsapp-sessions/\${id}/delete`, { method: 'POST' })
        .then(r => r.json())
        .then(data => {
            if (data.success) {
                const row = document.getElementById('row-' + id);
                if (row) {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '0';
                    row.style.transform = 'translateX(20px)';
                    setTimeout(() => row.remove(), 300);
                }
                showToast('Session supprimée', 'success');
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
    document.getElementById('toastIcon').className = type === 'success'
        ? 'fas fa-check-circle' : 'fas fa-times-circle';
    toast.classList.add('show');
    if (toastTimer) clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('show'), 3500);
}

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeModal();
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
        return "admin/whatsapp_sessions/index.html.twig";
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
        return array (  1108 => 756,  1099 => 749,  1080 => 731,  1076 => 728,  1068 => 722,  1058 => 715,  1053 => 714,  1047 => 713,  1043 => 711,  1041 => 710,  1037 => 709,  1032 => 708,  1030 => 707,  1025 => 706,  1022 => 705,  1018 => 704,  1012 => 701,  1008 => 700,  1001 => 698,  995 => 694,  982 => 687,  975 => 683,  966 => 677,  961 => 674,  957 => 672,  951 => 669,  946 => 668,  944 => 667,  937 => 663,  932 => 660,  926 => 656,  920 => 652,  918 => 651,  913 => 648,  911 => 647,  906 => 644,  900 => 640,  894 => 636,  892 => 635,  887 => 632,  885 => 631,  880 => 628,  876 => 626,  870 => 623,  863 => 620,  861 => 619,  853 => 614,  847 => 610,  843 => 609,  827 => 595,  825 => 594,  820 => 591,  816 => 589,  806 => 587,  804 => 586,  796 => 580,  786 => 572,  780 => 569,  776 => 568,  768 => 563,  764 => 562,  758 => 559,  754 => 558,  748 => 555,  744 => 554,  738 => 551,  734 => 550,  730 => 548,  722 => 542,  714 => 537,  706 => 532,  698 => 527,  690 => 522,  682 => 517,  677 => 514,  172 => 10,  159 => 9,  136 => 7,  113 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Sessions WhatsApp - Admin ASAFAR{% endblock %}

{% block page_icon %}fab fa-whatsapp{% endblock %}
{% block page_title %}Sessions WhatsApp IA{% endblock %}
{% block breadcrumb %}Sessions WhatsApp{% endblock %}

{% block content %}
<style>
/* ══════════════════════════════════════
   STATS GRID
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

.icon-total    { background: rgba(99,102,241,0.2);  color: #818cf8; }
.icon-active   { background: rgba(52,211,153,0.2);  color: #34d399; }
.icon-termine  { background: rgba(47,168,255,0.2);  color: #60a5fa; }
.icon-annule   { background: rgba(239,68,68,0.2);   color: #f87171; }
.icon-coherent { background: rgba(245,158,11,0.2);  color: #fbbf24; }
.icon-whatsapp { background: rgba(37,211,102,0.2);  color: #25d366; }

/* ══════════════════════════════════════
   TOOLBAR
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
.filter-btn.active         { background: linear-gradient(135deg, var(--sky-blue), #1e6fa8); color: white; border-color: transparent; box-shadow: 0 4px 12px rgba(47,168,255,0.3); }
.filter-btn.active-active  { background: linear-gradient(135deg, #10b981, #059669); color: white; border-color: transparent; }
.filter-btn.active-termine { background: linear-gradient(135deg, #3b82f6, #1d4ed8); color: white; border-color: transparent; }
.filter-btn.active-annule  { background: linear-gradient(135deg, #ef4444, #dc2626); color: white; border-color: transparent; }

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
   TABLE
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
.table-title i { color: #25d366; }
.table-info { font-size: 13px; color: var(--text-secondary); }

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
tbody tr:hover td { background: rgba(47,168,255,0.04); }

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
.badge-active   { background: rgba(52,211,153,0.15);  color: #34d399; border: 1px solid rgba(52,211,153,0.3); }
.badge-termine  { background: rgba(47,168,255,0.15);  color: #60a5fa; border: 1px solid rgba(47,168,255,0.3); }
.badge-annule   { background: rgba(239,68,68,0.15);   color: #f87171; border: 1px solid rgba(239,68,68,0.3); }

.coherent-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
}
.coherent-yes { background: rgba(52,211,153,0.15); color: #34d399; border: 1px solid rgba(52,211,153,0.3); }
.coherent-no  { background: rgba(239,68,68,0.15);  color: #f87171; border: 1px solid rgba(239,68,68,0.3); }
.coherent-null { background: rgba(100,116,139,0.15); color: #94a3b8; border: 1px solid rgba(100,116,139,0.3); }

/* Turn indicator */
.turn-indicator {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px; height: 28px;
    border-radius: 50%;
    font-size: 12px;
    font-weight: 700;
    background: rgba(99,102,241,0.15);
    color: #818cf8;
    border: 1px solid rgba(99,102,241,0.3);
}

/* Phone */
.phone-cell {
    display: flex;
    align-items: center;
    gap: 8px;
    font-family: monospace;
    font-size: 12px;
    color: #25d366;
}
.phone-cell i { font-size: 14px; }

/* Summary preview */
.summary-preview {
    max-width: 200px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 12px;
    color: var(--text-muted);
    font-style: italic;
}

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
.btn-action.btn-view   { color: #818cf8; border-color: rgba(99,102,241,0.3); }
.btn-action.btn-view:hover   { background: rgba(99,102,241,0.12); }
.btn-action.btn-delete { color: #f87171; border-color: rgba(239,68,68,0.3); }
.btn-action.btn-delete:hover { background: rgba(239,68,68,0.12); }

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
.empty-state-icon { font-size: 48px; opacity: 0.2; margin-bottom: 16px; }

/* ══════════════════════════════════════
   MODAL DÉTAIL SESSION
══════════════════════════════════════ */
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
    max-width: 620px;
    max-height: 85vh;
    overflow-y: auto;
    box-shadow: 0 25px 80px rgba(0,0,0,0.5), var(--shadow-glow-blue);
    animation: modalSlide 0.3s ease;
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
    position: sticky;
    top: 0;
    z-index: 10;
}
.modal-header h3 {
    font-size: 17px;
    font-weight: 600;
    color: var(--text-primary);
    display: flex;
    align-items: center;
    gap: 10px;
}
.modal-header h3 i { color: #25d366; }
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

.modal-body { padding: 24px; display: flex; flex-direction: column; gap: 20px; }

/* Info grid inside modal */
.info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}
.info-item {
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 12px;
    padding: 14px;
}
.info-item-label {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--text-muted);
    margin-bottom: 6px;
}
.info-item-value {
    font-size: 14px;
    font-weight: 500;
    color: var(--text-primary);
}

/* Conversation bubbles */
.conversation-block {
    background: var(--glass-bg);
    border: 1px solid var(--border-subtle);
    border-radius: 12px;
    padding: 16px;
}
.conversation-title {
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--text-muted);
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.conversation-title i { color: #25d366; }

.chat-messages { display: flex; flex-direction: column; gap: 10px; }

.chat-bubble {
    max-width: 85%;
    padding: 10px 14px;
    border-radius: 14px;
    font-size: 13px;
    line-height: 1.5;
}
.chat-bubble.user {
    align-self: flex-end;
    background: rgba(37,211,102,0.15);
    border: 1px solid rgba(37,211,102,0.25);
    color: var(--text-primary);
    border-bottom-right-radius: 4px;
}
.chat-bubble.assistant {
    align-self: flex-start;
    background: rgba(47,168,255,0.12);
    border: 1px solid rgba(47,168,255,0.2);
    color: var(--text-primary);
    border-bottom-left-radius: 4px;
}
.chat-role {
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    margin-bottom: 4px;
    opacity: 0.6;
}

/* Summary block */
.summary-block {
    background: rgba(245,158,11,0.08);
    border: 1px solid rgba(245,158,11,0.2);
    border-radius: 12px;
    padding: 16px;
}
.summary-block-title {
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #fbbf24;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.summary-block p {
    font-size: 13px;
    color: var(--text-secondary);
    line-height: 1.6;
    margin: 0;
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
</style>

{# ════ STATS ════ #}
<div class=\"rec-stats-grid\">
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-total\"><i class=\"fas fa-layer-group\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.total }}</div>
        <div class=\"rec-stat-label\">Total sessions</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-active\"><i class=\"fas fa-circle-dot\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.active }}</div>
        <div class=\"rec-stat-label\">En cours</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-termine\"><i class=\"fas fa-flag-checkered\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.termine }}</div>
        <div class=\"rec-stat-label\">Terminées</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-annule\"><i class=\"fas fa-ban\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.annule }}</div>
        <div class=\"rec-stat-label\">Annulées</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-coherent\"><i class=\"fas fa-brain\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.coherent }}</div>
        <div class=\"rec-stat-label\">Cohérentes</div>
    </div>
    <div class=\"rec-stat-card\">
        <div class=\"rec-stat-icon icon-whatsapp\"><i class=\"fab fa-whatsapp\"></i></div>
        <div class=\"rec-stat-value\">{{ stats.avg_turns }}</div>
        <div class=\"rec-stat-label\">Tours moyens</div>
    </div>
</div>

{# ════ TOOLBAR ════ #}
<div class=\"toolbar\">
    <div class=\"toolbar-left\">
        <a href=\"{{ path('admin_whatsapp_sessions', {filter:'all', search:search}) }}\"
           class=\"filter-btn {{ filter == 'all' ? 'active' : '' }}\">
            <i class=\"fas fa-border-all\"></i> Toutes
        </a>
        <a href=\"{{ path('admin_whatsapp_sessions', {filter:'active', search:search}) }}\"
           class=\"filter-btn {{ filter == 'active' ? 'active-active' : '' }}\">
            <i class=\"fas fa-circle-dot\"></i> En cours
        </a>
        <a href=\"{{ path('admin_whatsapp_sessions', {filter:'termine', search:search}) }}\"
           class=\"filter-btn {{ filter == 'termine' ? 'active-termine' : '' }}\">
            <i class=\"fas fa-flag-checkered\"></i> Terminées
        </a>
        <a href=\"{{ path('admin_whatsapp_sessions', {filter:'annule', search:search}) }}\"
           class=\"filter-btn {{ filter == 'annule' ? 'active-annule' : '' }}\">
            <i class=\"fas fa-ban\"></i> Annulées
        </a>
    </div>
    <div class=\"toolbar-right\">
        <form method=\"GET\" action=\"{{ path('admin_whatsapp_sessions') }}\" style=\"display:flex;\">
            <input type=\"hidden\" name=\"filter\" value=\"{{ filter }}\">
            <div class=\"search-box-inline\">
                <i class=\"fas fa-search\"></i>
                <input type=\"text\" name=\"search\" value=\"{{ search }}\"
                       placeholder=\"Rechercher par téléphone...\" onchange=\"this.form.submit()\">
            </div>
        </form>
    </div>
</div>

{# ════ TABLE ════ #}
<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fab fa-whatsapp\"></i> Sessions d'analyse WhatsApp IA
        </div>
        <div class=\"table-info\">
            {% if total > 0 %}
                Affichage de {{ ((currentPage-1)*10)+1 }}–{{ min(currentPage*10, total) }} sur {{ total }} sessions
            {% else %}
                Aucune session trouvée
            {% endif %}
        </div>
    </div>

    {% if sessions|length > 0 %}
    <table>
        <thead>
            <tr>
                <th>Téléphone</th>
                <th>Réclamation</th>
                <th>Étape</th>
                <th>Cohérence</th>
                <th>Tours</th>
                <th>Résumé IA</th>
                <th>Créée le</th>
                <th style=\"text-align:right;\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for session in sessions %}

                <td>
                    <div class=\"phone-cell\">
                        <i class=\"fab fa-whatsapp\"></i>
                        {{ session.phone }}
                    </div>
                </td>

                <td style=\"font-size:12px; color:var(--text-secondary);\">
                    {% if session.reclamationId %}
                        <a href=\"{{ path('admin_reclamation_view', {id: session.reclamationId}) }}\"
                           style=\"color:#818cf8; text-decoration:none; display:flex; align-items:center; gap:5px;\">
                            <i class=\"fas fa-file-alt\" style=\"font-size:11px;\"></i>
                            #{{ session.reclamationId }}
                        </a>
                    {% else %}
                        <span style=\"color:var(--text-muted);\">—</span>
                    {% endif %}
                </td>

                <td>
                    {% if session.isActive %}
                        <span class=\"badge badge-active\">
                            <i class=\"fas fa-circle\" style=\"font-size:8px;\"></i> En cours
                        </span>
                    {% elseif session.step == 'annule' %}
                        <span class=\"badge badge-annule\">
                            <i class=\"fas fa-ban\"></i> Annulée
                        </span>
                    {% else %}
                        <span class=\"badge badge-termine\">
                            <i class=\"fas fa-check\"></i> Terminée
                        </span>
                    {% endif %}
                </td>

                <td>
                    {% if session.coherent is null %}
                        <span class=\"coherent-badge coherent-null\">
                            <i class=\"fas fa-minus\"></i> N/A
                        </span>
                    {% elseif session.coherent %}
                        <span class=\"coherent-badge coherent-yes\">
                            <i class=\"fas fa-check-circle\"></i> Valide
                        </span>
                    {% else %}
                        <span class=\"coherent-badge coherent-no\">
                            <i class=\"fas fa-times-circle\"></i> Invalide
                        </span>
                    {% endif %}
                </td>

                <td>
                    <div class=\"turn-indicator\">{{ session.turn }}</div>
                </td>

                <td>
                    {% if session.analysisSummary %}
                        <div class=\"summary-preview\" title=\"{{ session.analysisSummary }}\">
                            {{ session.analysisSummary|slice(0,60) }}...
                        </div>
                    {% else %}
                        <span style=\"font-size:11px; color:var(--text-muted);\">—</span>
                    {% endif %}
                </td>

                <td style=\"font-size:12px; color:var(--text-secondary); white-space:nowrap;\">
                    {{ session.createdAt|date('d/m/Y H:i') }}
                </td>

                <td>
                    <div class=\"action-buttons\">
                        <button class=\"btn-action btn-view\" title=\"Voir la conversation\"
                                onclick=\"openSessionModal({{ session.id }})\">
                            <i class=\"fas fa-eye\"></i>
                        </button>
                        <button class=\"btn-action btn-delete\" title=\"Supprimer\"
                                onclick=\"deleteSession({{ session.id }})\">
                            <i class=\"fas fa-trash-alt\"></i>
                        </button>
                    </div>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"pagination-container\">
        <div class=\"pagination-info\">Page {{ currentPage }} sur {{ pages }}</div>
        <div class=\"pagination\">
            <a href=\"{{ path('admin_whatsapp_sessions', {page: currentPage-1, filter:filter, search:search}) }}\"
               class=\"page-btn\" style=\"{{ currentPage <= 1 ? 'opacity:0.4; pointer-events:none;' : '' }}\">
                <i class=\"fas fa-chevron-left\"></i>
            </a>
            {% for p in 1..pages %}
                {% if p == currentPage %}
                    <span class=\"page-btn current\">{{ p }}</span>
                {% elseif p == 1 or p == pages or (p >= currentPage-1 and p <= currentPage+1) %}
                    <a href=\"{{ path('admin_whatsapp_sessions', {page:p, filter:filter, search:search}) }}\"
                       class=\"page-btn\">{{ p }}</a>
                {% elseif p == currentPage-2 or p == currentPage+2 %}
                    <span class=\"page-btn\" style=\"pointer-events:none; opacity:0.5;\">…</span>
                {% endif %}
            {% endfor %}
            <a href=\"{{ path('admin_whatsapp_sessions', {page: currentPage+1, filter:filter, search:search}) }}\"
               class=\"page-btn\" style=\"{{ currentPage >= pages ? 'opacity:0.4; pointer-events:none;' : '' }}\">
                <i class=\"fas fa-chevron-right\"></i>
            </a>
        </div>
    </div>

    {% else %}
    <div class=\"empty-state\">
        <div class=\"empty-state-icon\"><i class=\"fab fa-whatsapp\"></i></div>
        <h3 style=\"color:var(--text-secondary); margin:0 0 8px;\">Aucune session trouvée</h3>
        <p style=\"font-size:13px; margin:0;\">Modifiez vos filtres ou revenez plus tard.</p>
    </div>
    {% endif %}
</div>

{# ════ MODAL DÉTAIL ════ #}
<div class=\"modal-overlay\" id=\"sessionModal\">
    <div class=\"modal\">
        <div class=\"modal-header\">
            <h3><i class=\"fab fa-whatsapp\"></i> Détail de la session</h3>
            <button class=\"modal-close\" onclick=\"closeModal()\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div class=\"modal-body\" id=\"modalContent\">
            <div style=\"text-align:center; padding:40px; color:var(--text-muted);\">
                <i class=\"fas fa-spinner fa-spin\" style=\"font-size:24px;\"></i>
                <p style=\"margin-top:12px;\">Chargement...</p>
            </div>
        </div>
    </div>
</div>

{# Toast #}
<div class=\"admin-toast\" id=\"adminToast\">
    <i id=\"toastIcon\" class=\"fas fa-check-circle\"></i>
    <span id=\"toastMsg\"></span>
</div>

<script>
// ── Sessions data passées depuis le contrôleur ────────────────────────────
const sessionsData = {{ sessionsJson|raw }};

function openSessionModal(id) {
    document.getElementById('sessionModal').classList.add('active');
    const s = sessionsData[id];
    if (!s) { return; }

    // Parser l'historique
    let history = [];
    try { history = JSON.parse(s.collectedData || '{}').history || []; } catch(e) {}

    // Construire le contenu
    let html = `
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <div class=\"info-item-label\">Téléphone</div>
                <div class=\"info-item-value\" style=\"color:#25d366; font-family:monospace;\">
                    <i class=\"fab fa-whatsapp\"></i> \${s.phone}
                </div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-item-label\">Réclamation</div>
                <div class=\"info-item-value\">#\${s.reclamationId || '—'}</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-item-label\">Étape</div>
                <div class=\"info-item-value\">\${s.step}</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-item-label\">Tours</div>
                <div class=\"info-item-value\">\${s.turn} / 4</div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-item-label\">Cohérence</div>
                <div class=\"info-item-value\">
                    \${s.coherent === null ? '<span style=\"color:#94a3b8;\">N/A</span>'
                    : s.coherent ? '<span style=\"color:#34d399;\"><i class=\"fas fa-check-circle\"></i> Valide</span>'
                    : '<span style=\"color:#f87171;\"><i class=\"fas fa-times-circle\"></i> Invalide</span>'}
                </div>
            </div>
            <div class=\"info-item\">
                <div class=\"info-item-label\">Créée le</div>
                <div class=\"info-item-value\" style=\"font-size:12px; color:var(--text-secondary);\">\${s.createdAt}</div>
            </div>
        </div>`;

    // Raison
    if (s.reason) {
        html += `
        <div class=\"info-item\" style=\"background:rgba(99,102,241,0.08); border-color:rgba(99,102,241,0.2);\">
            <div class=\"info-item-label\" style=\"color:#818cf8;\">Raison du verdict</div>
            <div class=\"info-item-value\" style=\"font-size:13px; color:var(--text-secondary);\">\${s.reason}</div>
        </div>`;
    }

    // Résumé IA
    if (s.analysisSummary) {
        html += `
        <div class=\"summary-block\">
            <div class=\"summary-block-title\"><i class=\"fas fa-robot\"></i> Résumé IA</div>
            <p>\${s.analysisSummary}</p>
        </div>`;
    }

    // Conversation
    if (history.length > 0) {
        html += `
        <div class=\"conversation-block\">
            <div class=\"conversation-title\"><i class=\"fab fa-whatsapp\"></i> Conversation (\${history.length} messages)</div>
            <div class=\"chat-messages\">`;
        history.forEach(msg => {
            const isUser = msg.role === 'user';
            html += `
                <div class=\"chat-bubble \${isUser ? 'user' : 'assistant'}\">
                    <div class=\"chat-role\">\${isUser ? '👤 Utilisateur' : '🤖 Assistant IA'}</div>
                    \${msg.content}
                </div>`;
        });
        html += `</div></div>`;
    } else {
        html += `
        <div class=\"conversation-block\">
            <div class=\"conversation-title\"><i class=\"fab fa-whatsapp\"></i> Conversation</div>
            <p style=\"color:var(--text-muted); font-size:13px; text-align:center; padding:20px 0;\">
                Aucun message enregistré
            </p>
        </div>`;
    }

    document.getElementById('modalContent').innerHTML = html;
}

function closeModal() {
    document.getElementById('sessionModal').classList.remove('active');
}

document.getElementById('sessionModal').addEventListener('click', function(e) {
    if (e.target === this) closeModal();
});

function deleteSession(id) {
    if (!confirm('Supprimer définitivement cette session WhatsApp ?')) return;
    fetch(`/admin/whatsapp-sessions/\${id}/delete`, { method: 'POST' })
        .then(r => r.json())
        .then(data => {
            if (data.success) {
                const row = document.getElementById('row-' + id);
                if (row) {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '0';
                    row.style.transform = 'translateX(20px)';
                    setTimeout(() => row.remove(), 300);
                }
                showToast('Session supprimée', 'success');
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
    document.getElementById('toastIcon').className = type === 'success'
        ? 'fas fa-check-circle' : 'fas fa-times-circle';
    toast.classList.add('show');
    if (toastTimer) clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('show'), 3500);
}

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeModal();
});
</script>
{% endblock %}
", "admin/whatsapp_sessions/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\whatsapp_sessions\\index.html.twig");
    }
}
