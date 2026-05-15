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

/* admin/posts/index.html.twig */
class __TwigTemplate_d5b256dd27bbd0c0a3748355ab1ae842 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/index.html.twig"));

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

        yield "Publications - Admin ASAFAR";
        
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
        yield "    <i class=\"fas fa-newspaper\"></i> Gestion des Publications
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

        yield "Publications";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        yield "<style>
:root {
    --pub-bg-main: #071a34;
    --pub-bg-card: linear-gradient(135deg, rgba(7, 33, 61, 0.98) 0%, rgba(5, 20, 46, 0.98) 100%);
    --pub-bg-soft: rgba(255, 255, 255, 0.045);
    --pub-border: rgba(130, 190, 255, 0.10);
    --pub-border-strong: rgba(47, 168, 255, 0.20);
    --pub-text: #f4f8ff;
    --pub-text-soft: #a8bfdc;
    --pub-text-muted: rgba(168, 191, 220, 0.72);
    --pub-accent: #ffbf1b;
    --pub-accent-2: #2ea8ff;
    --pub-accent-3: #00d5a6;
    --pub-danger: #ff5b6e;
    --pub-danger-dark: #e63d56;
    --pub-success: #34d399;
    --pub-shadow: 0 22px 60px rgba(0, 0, 0, 0.28);
    --pub-shadow-blue: 0 0 0 3px rgba(47, 168, 255, 0.15), 0 12px 30px rgba(47, 168, 255, 0.12);
    --pub-transition: 0.28s ease;
}

@keyframes modalSlide {
    from {
        opacity: 0;
        transform: translateY(-28px) scale(0.96);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

@keyframes fadeSoft {
    from { opacity: 0; }
    to { opacity: 1; }
}

.admin-publications-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 360px;
    gap: 24px;
    align-items: start;
}

.admin-publications-main,
.admin-publications-side {
    min-width: 0;
}

.publications-shell,
.side-shell {
    background: var(--pub-bg-card);
    border: 1px solid var(--pub-border);
    border-radius: 28px;
    box-shadow: var(--pub-shadow);
    overflow: hidden;
    transition: transform var(--pub-transition), box-shadow var(--pub-transition), border-color var(--pub-transition);
}

.publications-shell:hover,
.side-shell:hover {
    border-color: rgba(47, 168, 255, 0.14);
    box-shadow: 0 26px 70px rgba(0, 0, 0, 0.34);
}

.shell-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    padding: 28px 28px 18px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    background: linear-gradient(135deg, rgba(30, 111, 168, 0.10) 0%, rgba(11, 45, 74, 0.06) 100%);
}

.shell-head h2,
.side-title,
.modal-title {
    margin: 0;
    color: var(--pub-text);
    font-weight: 800;
    letter-spacing: -0.02em;
}

.shell-head p,
.side-subtitle,
.modal-subtitle {
    margin: 8px 0 0;
    color: var(--pub-text-soft);
    font-size: 14px;
}

.shell-body {
    padding: 24px 28px 28px;
}

.publication-toolbar {
    display: flex;
    gap: 12px;
    align-items: center;
    flex-wrap: wrap;
}

.pub-btn,
.pub-btn-link,
.modal-close,
.post-row,
.comment-item,
.side-block {
    transition: all var(--pub-transition);
}

.pub-btn:hover,
.pub-btn-link:hover {
    transform: translateY(-2px);
}

.pub-btn:active,
.pub-btn-link:active {
    transform: translateY(0);
}

.pub-btn {
    border: none;
    border-radius: 16px;
    padding: 14px 22px;
    font-weight: 800;
    font-size: 15px;
    cursor: pointer;
    box-shadow: 0 10px 25px rgba(0,0,0,0.18);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 52px;
    text-decoration: none;
}

.pub-btn-primary {
    background: linear-gradient(135deg, #ffbf1b 0%, #ff9f0a 100%);
    color: #08233f;
}

.pub-btn-primary:hover {
    box-shadow: 0 18px 35px rgba(255, 191, 27, 0.30);
}

.pub-btn-secondary {
    background: linear-gradient(135deg, #2ea8ff 0%, #1d7fe2 100%);
    color: #ffffff;
    border: 1px solid rgba(120, 200, 255, 0.22);
}

.pub-btn-secondary:hover {
    box-shadow: 0 18px 35px rgba(46, 168, 255, 0.22);
}

.pub-btn-stats {
    background: linear-gradient(135deg, #00d5a6 0%, #0ea5e9 100%);
    color: #ffffff;
    border: 1px solid rgba(0, 213, 166, 0.24);
}

.pub-btn-stats:hover {
    box-shadow: 0 18px 35px rgba(0, 213, 166, 0.22);
}

.pub-btn-danger {
    background: linear-gradient(135deg, var(--pub-danger) 0%, var(--pub-danger-dark) 100%);
    color: #ffffff;
    border: 1px solid rgba(255, 91, 110, 0.24);
}

.pub-btn-danger:hover {
    box-shadow: 0 18px 35px rgba(255, 91, 110, 0.22);
}

.pub-btn-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 18px;
    border-radius: 16px;
    text-decoration: none;
    font-weight: 800;
    font-size: 14px;
    border: 1px solid rgba(255, 191, 27, 0.22);
    background: linear-gradient(135deg, rgba(255,191,27,0.16) 0%, rgba(255,159,10,0.10) 100%);
    color: #ffcf57;
    cursor: pointer;
    min-height: 52px;
}

.pub-btn-link:hover {
    box-shadow: 0 18px 35px rgba(255, 191, 27, 0.16);
    border-color: rgba(255, 191, 27, 0.34);
}

.pub-filter-card {
    margin-bottom: 20px;
    background: linear-gradient(135deg, rgba(11, 32, 62, 0.92) 0%, rgba(9, 24, 48, 0.92) 100%);
    border: 1px solid rgba(130, 190, 255, 0.08);
    border-radius: 24px;
    padding: 20px;
}

.pub-filter-grid {
    display: grid;
    grid-template-columns: 1.3fr 1fr 1fr 1fr auto;
    gap: 14px;
    align-items: end;
}

.pub-filter-label {
    display: flex;
    flex-direction: column;
    gap: 8px;
    color: var(--pub-text-soft);
    font-size: 13px;
    font-weight: 600;
}

.pub-input,
.pub-select,
.pub-textarea,
.pub-file {
    width: 100%;
    border: 1px solid rgba(255,255,255,0.09);
    background: rgba(255,255,255,0.05);
    color: var(--pub-text);
    border-radius: 14px;
    padding: 14px 16px;
    outline: none;
    font-size: 14px;
    box-sizing: border-box;
    transition: all var(--pub-transition);
}

.pub-input::placeholder,
.pub-textarea::placeholder {
    color: rgba(244,248,255,0.42);
}

.pub-input:focus,
.pub-select:focus,
.pub-textarea:focus,
.pub-file:focus {
    border-color: var(--pub-accent-2);
    box-shadow: var(--pub-shadow-blue);
}

.pub-select option {
    color: #08233f;
}

.pub-filter-actions {
    display: flex;
    gap: 10px;
    justify-content: flex-end;
}

.pub-table-wrap {
    overflow: auto;
    border-radius: 22px;
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.04);
}

.pub-table {
    width: 100%;
    min-width: 980px;
    border-collapse: collapse;
}

.pub-table thead th {
    position: sticky;
    top: 0;
    z-index: 1;
    background: rgba(6, 23, 46, 0.98);
    color: #8fd2ff;
    padding: 18px 16px;
    text-align: left;
    font-size: 13px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    border-bottom: 1px solid rgba(255,255,255,0.06);
}

.pub-table tbody tr {
    border-bottom: 1px solid rgba(255,255,255,0.05);
    cursor: pointer;
}

.pub-table tbody tr:hover {
    background: rgba(99, 180, 255, 0.05);
}

.pub-table tbody tr.is-selected {
    background: linear-gradient(135deg, rgba(0, 213, 166, 0.10) 0%, rgba(99, 180, 255, 0.08) 100%);
    box-shadow: inset 4px 0 0 rgba(255, 191, 27, 0.9);
}

.pub-table td {
    padding: 18px 16px;
    color: #e5eefc;
    vertical-align: middle;
}

.pub-thumb,
.pub-thumb-placeholder {
    width: 62px;
    height: 62px;
    border-radius: 16px;
    object-fit: cover;
    display: block;
}

.pub-thumb-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,0.06);
    color: rgba(255,255,255,0.45);
    font-size: 11px;
    font-weight: 700;
    border: 1px dashed rgba(255,255,255,0.10);
}

.pub-title-cell {
    font-weight: 800;
    color: var(--pub-text);
    font-size: 18px;
}

.pub-meta-soft {
    color: var(--pub-text-soft);
    font-size: 13px;
}

.pub-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 9px 14px;
    border-radius: 999px;
    font-weight: 800;
    font-size: 12px;
    color: #072441;
    background: linear-gradient(135deg, var(--pub-accent) 0%, #ff9f0a 100%);
    white-space: nowrap;
    box-shadow: 0 8px 20px rgba(255, 191, 27, 0.18);
}

.pub-comment-count {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 38px;
    height: 38px;
    padding: 0 12px;
    border-radius: 999px;
    background: rgba(99, 180, 255, 0.12);
    color: #d9edff;
    font-weight: 800;
}

.pub-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.side-shell {
    padding: 22px;
    position: sticky;
    top: 20px;
}

.side-block {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 22px;
    padding: 20px;
    margin-bottom: 18px;
}

.side-block:hover {
    border-color: rgba(47, 168, 255, 0.12);
    background: rgba(255,255,255,0.04);
}

.side-block:last-child {
    margin-bottom: 0;
}

.side-post-summary {
    display: flex;
    gap: 14px;
    align-items: flex-start;
    margin-bottom: 18px;
}

.side-post-summary img {
    width: 84px;
    height: 84px;
    object-fit: cover;
    border-radius: 18px;
}

.side-post-title {
    margin: 0 0 6px;
    color: var(--pub-text);
    font-size: 20px;
    font-weight: 800;
}

.side-post-meta {
    margin: 0;
    color: var(--pub-text-soft);
    font-size: 13px;
    line-height: 1.6;
}

.side-post-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-top: 14px;
}

.comments-list {
    display: grid;
    gap: 14px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.comment-item {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 18px;
    padding: 16px;
}

.comment-item:hover {
    border-color: rgba(47, 168, 255, 0.14);
    transform: translateY(-1px);
}

.comment-head {
    display: flex;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 8px;
    color: var(--pub-text-soft);
    font-size: 12px;
}

.comment-body {
    margin: 0 0 14px;
    color: #edf4ff;
    line-height: 1.65;
}

.comment-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.comment-empty {
    color: var(--pub-text-soft);
    padding: 6px 0 4px;
}

.modal-backdrop {
    position: fixed;
    inset: 0;
    background: rgba(5, 20, 33, 0.84);
    backdrop-filter: blur(8px);
    z-index: 1200;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    animation: fadeSoft 0.2s ease;
}

.modal-backdrop.is-open {
    display: flex;
}

.pub-modal {
    width: min(100%, 760px);
    max-height: 90vh;
    overflow: auto;
    border-radius: 24px;
    border: 1px solid rgba(130, 190, 255, 0.14);
    background: linear-gradient(135deg, rgba(11, 45, 74, 0.98) 0%, rgba(7, 27, 46, 0.98) 100%);
    box-shadow: 0 25px 80px rgba(0, 0, 0, 0.5);
    padding: 26px;
    animation: modalSlide 0.3s ease;
}

.pub-modal-small {
    width: min(100%, 620px);
}

.modal-head {
    display: flex;
    justify-content: space-between;
    gap: 16px;
    align-items: flex-start;
    margin-bottom: 18px;
    padding-bottom: 14px;
    border-bottom: 1px solid rgba(255,255,255,0.06);
}

.modal-close {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.08);
    background: rgba(255,255,255,0.04);
    color: #dbeafe;
    font-size: 18px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.modal-close:hover {
    background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);
    color: white;
    border-color: transparent;
    transform: rotate(90deg);
}

.modal-grid {
    display: grid;
    grid-template-columns: 1fr 220px;
    gap: 14px;
}

.modal-block {
    margin-top: 14px;
}

.pub-textarea {
    min-height: 140px;
    resize: vertical;
}

.pub-upload-box {
    border: 2px dashed rgba(0, 213, 166, 0.22);
    background: rgba(255,255,255,0.02);
    border-radius: 20px;
    padding: 18px;
    text-align: center;
    transition: all var(--pub-transition);
}

.pub-upload-box:hover {
    border-color: rgba(47, 168, 255, 0.24);
    background: rgba(255,255,255,0.03);
}

.pub-upload-title {
    color: var(--pub-accent);
    font-weight: 800;
    margin-bottom: 6px;
}

.pub-upload-sub {
    color: var(--pub-text-soft);
    font-size: 13px;
    margin-bottom: 14px;
}

.pub-selected-file {
    display: inline-block;
    margin-top: 14px;
    padding: 8px 14px;
    border-radius: 999px;
    background: rgba(255,255,255,0.06);
    color: #fff;
    font-size: 13px;
}

.pub-preview {
    width: 100%;
    max-height: 260px;
    object-fit: cover;
    border-radius: 18px;
    border: 1px solid rgba(255,255,255,0.08);
    margin-top: 14px;
    display: none;
}

.modal-actions {
    display: flex;
    justify-content: flex-end;
    gap: 12px;
    margin-top: 18px;
    padding-top: 8px;
}

.hidden-storage {
    display: none;
}

.pub-table-wrap::-webkit-scrollbar,
.pub-modal::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}
.pub-table-wrap::-webkit-scrollbar-thumb,
.pub-modal::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,0.14);
    border-radius: 999px;
}

@media (max-width: 1200px) {
    .admin-publications-layout {
        grid-template-columns: 1fr;
    }

    .side-shell {
        position: static;
    }
}

@media (max-width: 860px) {
    .shell-head {
        flex-direction: column;
        align-items: stretch;
    }

    .pub-filter-grid,
    .modal-grid {
        grid-template-columns: 1fr;
    }

    .pub-filter-actions,
    .modal-actions,
    .side-post-actions,
    .comment-actions {
        flex-direction: column;
    }

    .pub-btn,
    .pub-btn-link {
        width: 100%;
        justify-content: center;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 675
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

        // line 676
        yield "<div class=\"admin-publications-layout\">
    <section class=\"admin-publications-main\">
        <div class=\"publications-shell\">
            <div class=\"shell-head\">
                <div>
                    <h2>Publications</h2>
                    <p>Gestion moderne des publications avec édition et commentaire en popup.</p>
                </div>

                <div class=\"publication-toolbar\">
                    <button type=\"button\" class=\"pub-btn pub-btn-primary\" id=\"open-create-post-modal\">
                        <i class=\"fas fa-plus\"></i>
                        Créer une publication
                    </button>
                <button type=\"button\" class=\"pub-btn pub-btn-secondary\" id=\"open-reports-modal\">
                         <i class=\"fas fa-triangle-exclamation\"></i>
                         Signalements
                    </button>
                    <button type=\"button\" class=\"pub-btn pub-btn-stats\" id=\"open-statistics-modal\">
                        <i class=\"fas fa-chart-line\"></i>
                        Statistiques
                    </button>
                    <button type=\"button\" class=\"pub-btn pub-btn-danger\" id=\"open-ai-optimize-modal\">
                        <i class=\"fas fa-robot\"></i>
                         AI Optimize
                    </button>
                </div>
            </div>

            <div class=\"shell-body\">
                <form method=\"get\" class=\"pub-filter-card\">
                    <div class=\"pub-filter-grid\">
                        <label class=\"pub-filter-label\">
                            Rechercher
                            <input class=\"pub-input\" type=\"search\" name=\"search\" value=\"";
        // line 710
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 710, $this->source); })()), "search", [], "any", false, false, false, 710), "html", null, true);
        yield "\" placeholder=\"Titre ou contenu\">
                        </label>

                        <label class=\"pub-filter-label\">
                            Type
                            <select class=\"pub-select\" name=\"type\">
                                <option value=\"\">Tous</option>
                                ";
        // line 717
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 717, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["typeName"]) {
            // line 718
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 718, $this->source); })()), "type", [], "any", false, false, false, 718) == $context["typeName"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['typeName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 720
        yield "                            </select>
                        </label>

                        <label class=\"pub-filter-label\">
                            Auteur
                            <select class=\"pub-select\" name=\"author\">
                                <option value=\"\">Tous</option>
                                ";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 727, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["authorName"]) {
            // line 728
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["authorName"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 728, $this->source); })()), "author", [], "any", false, false, false, 728) == $context["authorName"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["authorName"], "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['authorName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 730
        yield "                            </select>
                        </label>

                        <label class=\"pub-filter-label\">
                            Trier
                            <select class=\"pub-select\" name=\"sort\">
                                <option value=\"desc\" ";
        // line 736
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 736, $this->source); })()), "sort", [], "any", false, false, false, 736) == "desc")) ? ("selected") : (""));
        yield ">Plus récent</option>
                                <option value=\"asc\" ";
        // line 737
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 737, $this->source); })()), "sort", [], "any", false, false, false, 737) == "asc")) ? ("selected") : (""));
        yield ">Plus ancien</option>
                            </select>
                        </label>

                        <div class=\"pub-filter-actions\">
                            <button type=\"submit\" class=\"pub-btn pub-btn-secondary\">
                                <i class=\"fas fa-sliders-h\"></i>
                                Appliquer
                            </button>
                            <a href=\"";
        // line 746
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_publications");
        yield "\" class=\"pub-btn-link\">
                                <i class=\"fas fa-rotate-left\"></i>
                                Réinitialiser
                            </a>
                        </div>
                    </div>
                </form>

                <div class=\"pub-table-wrap\">
                    <table class=\"pub-table\">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Auteur</th>
                                <th>Date</th>
                                <th>Commentaires</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 768
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 768, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 769
            yield "                                 ";
            $context["postAuthorName"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 769)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 769), "nom", [], "any", false, false, false, 769) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 769), "prenom", [], "any", false, false, false, 769))) : ("Auteur inconnu"));
            // line 770
            yield "                                <tr
                                     class=\"post-row ";
            // line 771
            yield ((((isset($context["selectedPostId"]) || array_key_exists("selectedPostId", $context) ? $context["selectedPostId"] : (function () { throw new RuntimeError('Variable "selectedPostId" does not exist.', 771, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 771))) ? ("is-selected") : (""));
            yield "\"
                                     data-post-id=\"";
            // line 772
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 772), "html", null, true);
            yield "\"
                                     data-post-title=\"";
            // line 773
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 773), "html_attr");
            yield "\"
                                     data-post-type=\"";
            // line 774
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "type", [], "any", false, false, false, 774), "html_attr");
            yield "\"
                                      data-post-author=\"";
            // line 775
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["postAuthorName"]) || array_key_exists("postAuthorName", $context) ? $context["postAuthorName"] : (function () { throw new RuntimeError('Variable "postAuthorName" does not exist.', 775, $this->source); })()), "html_attr");
            yield "\"
                                      data-post-date=\"";
            // line 776
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 776)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 776), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "\"
                                      data-post-content=\"";
            // line 777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contenu", [], "any", false, false, false, 777), "html_attr");
            yield "\"
                                      data-post-image=\"";
            // line 778
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "imagePath", [], "any", false, false, false, 778)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "imagePath", [], "any", false, false, false, 778)), "html", null, true)) : (""));
            yield "\"
                                 >
                                    <td>
                                        ";
            // line 781
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "imagePath", [], "any", false, false, false, 781)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 782
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "imagePath", [], "any", false, false, false, 782)), "html", null, true);
                yield "\" alt=\"Miniature\" class=\"pub-thumb\">
                                        ";
            } else {
                // line 784
                yield "                                            <div class=\"pub-thumb-placeholder\">No img</div>
                                        ";
            }
            // line 786
            yield "                                    </td>
                                    <td><div class=\"pub-title-cell\">";
            // line 787
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 787), "html", null, true);
            yield "</div></td>
                                    <td><span class=\"pub-badge\">";
            // line 788
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "type", [], "any", false, false, false, 788), "html", null, true);
            yield "</span></td>
                                   <td>
                                      <div>";
            // line 790
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["postAuthorName"]) || array_key_exists("postAuthorName", $context) ? $context["postAuthorName"] : (function () { throw new RuntimeError('Variable "postAuthorName" does not exist.', 790, $this->source); })()), "html", null, true);
            yield "</div>
                                     <div class=\"pub-meta-soft\">Auteur</div>
                                    </td>
                                    <td>";
            // line 793
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 793)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 793), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</td>
                                    <td><span class=\"pub-comment-count\">";
            // line 794
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["commentsByPost"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 794), [], "array", true, true, false, 794)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentsByPost"]) || array_key_exists("commentsByPost", $context) ? $context["commentsByPost"] : (function () { throw new RuntimeError('Variable "commentsByPost" does not exist.', 794, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 794), [], "array", false, false, false, 794), [])) : ([]))), "html", null, true);
            yield "</span></td>
                                    <td>
                                        <div class=\"pub-actions\">
                                            <button
                                                type=\"button\"
                                                class=\"pub-btn-link open-edit-post-modal-btn\"
                                                data-post-id=\"";
            // line 800
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 800), "html", null, true);
            yield "\"
                                                data-post-title=\"";
            // line 801
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 801), "html_attr");
            yield "\"
                                                data-post-type=\"";
            // line 802
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "type", [], "any", false, false, false, 802), "html_attr");
            yield "\"
                                                data-post-content=\"";
            // line 803
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contenu", [], "any", false, false, false, 803), "html_attr");
            yield "\"
                                                data-post-image=\"";
            // line 804
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "imagePath", [], "any", false, false, false, 804)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "imagePath", [], "any", false, false, false, 804)), "html", null, true)) : (""));
            yield "\"
                                            >
                                                <i class=\"fas fa-pen-to-square\"></i>
                                                Modifier
                                            </button>

                                            <form method=\"post\" action=\"";
            // line 810
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_publication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 810)]), "html", null, true);
            yield "\" class=\"inline-form\" onsubmit=\"return confirm('Supprimer cette publication ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 811
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-post" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 811))), "html", null, true);
            yield "\">
                                                <button type=\"submit\" class=\"pub-btn pub-btn-danger\">
                                                    <i class=\"fas fa-trash\"></i>
                                                    Supprimer
                                                </button>
                                            </form>

                                            <button
                                                type=\"button\"
                                                class=\"pub-btn pub-btn-secondary open-comment-modal-btn\"
                                                data-post-id=\"";
            // line 821
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 821), "html", null, true);
            yield "\"
                                                data-post-title=\"";
            // line 822
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 822), "html_attr");
            yield "\"
                                            >
                                                <i class=\"fas fa-comment-dots\"></i>
                                                Commenter
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 830
        if (!$context['_iterated']) {
            // line 831
            yield "                                <tr>
                                    <td colspan=\"7\" class=\"comment-empty\">Aucune publication trouvée.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 835
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <aside class=\"admin-publications-side\">
        <div class=\"side-shell\">
            <div class=\"side-block\">
                <h3 class=\"side-title\">Aperçu sélectionné</h3>
                <p class=\"side-subtitle\">Sélectionne une publication puis modifie-la en popup.</p>
            </div>

            <div class=\"side-block\">
                ";
        // line 850
        if ((($tmp = (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 850, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 851
            yield "    ";
            $context["selectedPostAuthorName"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 851, $this->source); })()), "user", [], "any", false, false, false, 851)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 851, $this->source); })()), "user", [], "any", false, false, false, 851), "nom", [], "any", false, false, false, 851) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 851, $this->source); })()), "user", [], "any", false, false, false, 851), "prenom", [], "any", false, false, false, 851))) : ("Auteur inconnu"));
            // line 852
            yield "    <div class=\"side-post-summary\">
        ";
            // line 853
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 853, $this->source); })()), "imagePath", [], "any", false, false, false, 853)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 854
                yield "            <img id=\"selected-post-image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 854, $this->source); })()), "imagePath", [], "any", false, false, false, 854)), "html", null, true);
                yield "\" alt=\"Image du post\">
        ";
            } else {
                // line 856
                yield "            <img id=\"selected-post-image\" src=\"\" alt=\"Image du post\" style=\"display:none;\">
        ";
            }
            // line 858
            yield "
        <div>
            <h4 class=\"side-post-title\" id=\"selected-post-title\">";
            // line 860
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 860, $this->source); })()), "titre", [], "any", false, false, false, 860), "html", null, true);
            yield "</h4>
            <p class=\"side-post-meta\" id=\"selected-post-meta\">
                ";
            // line 862
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedPostAuthorName"]) || array_key_exists("selectedPostAuthorName", $context) ? $context["selectedPostAuthorName"] : (function () { throw new RuntimeError('Variable "selectedPostAuthorName" does not exist.', 862, $this->source); })()), "html", null, true);
            yield " · ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 862, $this->source); })()), "type", [], "any", false, false, false, 862), "html", null, true);
            yield " · ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 862, $this->source); })()), "createdAt", [], "any", false, false, false, 862)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 862, $this->source); })()), "createdAt", [], "any", false, false, false, 862), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "
            </p>
        </div>
    </div>

                    <div class=\"side-post-actions\">
                        <button
                            type=\"button\"
                            class=\"pub-btn-link\"
                            id=\"open-side-edit-post-modal\"
                            data-post-id=\"";
            // line 872
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 872, $this->source); })()), "id", [], "any", false, false, false, 872), "html", null, true);
            yield "\"
                            data-post-title=\"";
            // line 873
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 873, $this->source); })()), "titre", [], "any", false, false, false, 873), "html_attr");
            yield "\"
                            data-post-type=\"";
            // line 874
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 874, $this->source); })()), "type", [], "any", false, false, false, 874), "html_attr");
            yield "\"
                            data-post-content=\"";
            // line 875
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 875, $this->source); })()), "contenu", [], "any", false, false, false, 875), "html_attr");
            yield "\"
                            data-post-image=\"";
            // line 876
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 876, $this->source); })()), "imagePath", [], "any", false, false, false, 876)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 876, $this->source); })()), "imagePath", [], "any", false, false, false, 876)), "html", null, true)) : (""));
            yield "\"
                        >
                            <i class=\"fas fa-pen-to-square\"></i>
                            Modifier la publication
                        </button>

                        <button type=\"button\" class=\"pub-btn pub-btn-primary\" id=\"open-side-comment-modal\" data-post-id=\"";
            // line 882
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 882, $this->source); })()), "id", [], "any", false, false, false, 882), "html", null, true);
            yield "\" data-post-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 882, $this->source); })()), "titre", [], "any", false, false, false, 882), "html_attr");
            yield "\">
                            <i class=\"fas fa-plus\"></i>
                            Ajouter un commentaire
                        </button>
                    </div>
                ";
        } else {
            // line 888
            yield "                    <div class=\"comment-empty\">Sélectionnez une publication.</div>
                ";
        }
        // line 890
        yield "            </div>

            <div class=\"side-block\">
                <h3 class=\"side-title\">Commentaires</h3>
                <p class=\"side-subtitle\">Sélectionne un commentaire puis modifie-le en popup.</p>

                <div id=\"comments-container\">
                    ";
        // line 897
        if ((($tmp = (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 897, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 898
            yield "                        ";
            $context["currentComments"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["commentsByPost"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 898, $this->source); })()), "id", [], "any", false, false, false, 898), [], "array", true, true, false, 898)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentsByPost"]) || array_key_exists("commentsByPost", $context) ? $context["commentsByPost"] : (function () { throw new RuntimeError('Variable "commentsByPost" does not exist.', 898, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 898, $this->source); })()), "id", [], "any", false, false, false, 898), [], "array", false, false, false, 898), [])) : ([]));
            // line 899
            yield "                        ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["currentComments"]) || array_key_exists("currentComments", $context) ? $context["currentComments"] : (function () { throw new RuntimeError('Variable "currentComments" does not exist.', 899, $this->source); })()))) {
                // line 900
                yield "                            <div class=\"comment-empty\">Pas encore de commentaires pour cette publication.</div>
                        ";
            } else {
                // line 902
                yield "                            <ul class=\"comments-list\">
                                ";
                // line 903
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["currentComments"]) || array_key_exists("currentComments", $context) ? $context["currentComments"] : (function () { throw new RuntimeError('Variable "currentComments" does not exist.', 903, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 904
                    yield "                                    <li class=\"comment-item\">
                                        <div class=\"comment-head\">
                                            <span>";
                    // line 906
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 906)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 906), "nom", [], "any", false, false, false, 906) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 906), "prenom", [], "any", false, false, false, 906)), "html", null, true)) : ("Utilisateur supprimé"));
                    yield "</span>
                                            <span>";
                    // line 907
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 907)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 907), "d/m/Y H:i"), "html", null, true)) : ("-"));
                    yield "</span>
                                        </div>
                                        <p class=\"comment-body\">";
                    // line 909
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 909), "html", null, true);
                    yield "</p>
                                        <div class=\"comment-actions\">
                                            <button
                                                type=\"button\"
                                                class=\"pub-btn-link open-edit-comment-modal-btn\"
                                                data-comment-id=\"";
                    // line 914
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 914), "html", null, true);
                    yield "\"
                                                data-comment-content=\"";
                    // line 915
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 915), "html_attr");
                    yield "\"
                                                data-post-id=\"";
                    // line 916
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedPost"]) || array_key_exists("selectedPost", $context) ? $context["selectedPost"] : (function () { throw new RuntimeError('Variable "selectedPost" does not exist.', 916, $this->source); })()), "id", [], "any", false, false, false, 916), "html", null, true);
                    yield "\"
                                            >
                                                <i class=\"fas fa-pen-to-square\"></i>
                                                Modifier
                                            </button>

                                            <form method=\"post\" action=\"";
                    // line 922
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_publication_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 922)]), "html", null, true);
                    yield "\" class=\"inline-form\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 923
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-comment" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 923))), "html", null, true);
                    yield "\">
                                                <button type=\"submit\" class=\"pub-btn pub-btn-danger\">
                                                    <i class=\"fas fa-trash\"></i>
                                                    Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 932
                yield "                            </ul>
                        ";
            }
            // line 934
            yield "                    ";
        } else {
            // line 935
            yield "                        <div class=\"comment-empty\">Sélectionnez une publication pour afficher les commentaires.</div>
                    ";
        }
        // line 937
        yield "                </div>
            </div>
        </div>
    </aside>
</div>

<div id=\"comments-data-storage\" class=\"hidden-storage\">
    ";
        // line 944
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 944, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 945
            yield "        <div id=\"comments-data-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 945), "html", null, true);
            yield "\">
            ";
            // line 946
            $context["postComments"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["commentsByPost"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 946), [], "array", true, true, false, 946)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentsByPost"]) || array_key_exists("commentsByPost", $context) ? $context["commentsByPost"] : (function () { throw new RuntimeError('Variable "commentsByPost" does not exist.', 946, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 946), [], "array", false, false, false, 946), [])) : ([]));
            // line 947
            yield "            ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["postComments"]) || array_key_exists("postComments", $context) ? $context["postComments"] : (function () { throw new RuntimeError('Variable "postComments" does not exist.', 947, $this->source); })()))) {
                // line 948
                yield "                <div class=\"comment-empty\">Pas encore de commentaires pour cette publication.</div>
            ";
            } else {
                // line 950
                yield "                <ul class=\"comments-list\">
                    ";
                // line 951
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postComments"]) || array_key_exists("postComments", $context) ? $context["postComments"] : (function () { throw new RuntimeError('Variable "postComments" does not exist.', 951, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 952
                    yield "                        <li class=\"comment-item\">
                            <div class=\"comment-head\">
                                <span>";
                    // line 954
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 954)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 954), "nom", [], "any", false, false, false, 954) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 954), "prenom", [], "any", false, false, false, 954)), "html", null, true)) : ("Utilisateur supprimé"));
                    yield "</span>
                                <span>";
                    // line 955
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 955)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 955), "d/m/Y H:i"), "html", null, true)) : ("-"));
                    yield "</span>
                            </div>
                            <p class=\"comment-body\">";
                    // line 957
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 957), "html", null, true);
                    yield "</p>
                            <div class=\"comment-actions\">
                                <button
                                    type=\"button\"
                                    class=\"pub-btn-link open-edit-comment-modal-btn\"
                                    data-comment-id=\"";
                    // line 962
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 962), "html", null, true);
                    yield "\"
                                    data-comment-content=\"";
                    // line 963
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 963), "html_attr");
                    yield "\"
                                    data-post-id=\"";
                    // line 964
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 964), "html", null, true);
                    yield "\"
                                >
                                    <i class=\"fas fa-pen-to-square\"></i>
                                    Modifier
                                </button>

                                <form method=\"post\" action=\"";
                    // line 970
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_publication_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 970)]), "html", null, true);
                    yield "\" class=\"inline-form\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 971
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-comment" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 971))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"pub-btn pub-btn-danger\">
                                        <i class=\"fas fa-trash\"></i>
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 980
                yield "                </ul>
            ";
            }
            // line 982
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 984
        yield "</div>

<div class=\"modal-backdrop\" id=\"create-post-modal\">
    <div class=\"pub-modal\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Créer une publication</h3>
                <p class=\"modal-subtitle\">Ajout rapide.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"create-post-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        ";
        // line 998
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 998, $this->source); })()), 'form_start', ["method" => "POST", "multipart" => true]);
        yield "
            ";
        // line 999
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 999, $this->source); })()), 'errors');
        yield "

            <div class=\"modal-grid\">
                <div>
                    ";
        // line 1003
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 1003, $this->source); })()), "titre", [], "any", false, false, false, 1003), 'label', ["label" => "Titre"]);
        yield "
                    ";
        // line 1004
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 1004, $this->source); })()), "titre", [], "any", false, false, false, 1004), 'widget', ["attr" => ["placeholder" => "Titre du post...", "class" => "pub-input"]]);
        yield "
                </div>

                <div>
                    ";
        // line 1008
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 1008, $this->source); })()), "type", [], "any", false, false, false, 1008), 'label', ["label" => "Type"]);
        yield "
                    ";
        // line 1009
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 1009, $this->source); })()), "type", [], "any", false, false, false, 1009), 'widget', ["attr" => ["class" => "pub-select"]]);
        yield "
                </div>
            </div>

            <div class=\"modal-block\">
                ";
        // line 1014
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 1014, $this->source); })()), "contenu", [], "any", false, false, false, 1014), 'label', ["label" => "Contenu"]);
        yield "
                ";
        // line 1015
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 1015, $this->source); })()), "contenu", [], "any", false, false, false, 1015), 'widget', ["attr" => ["placeholder" => "Texte de la publication...", "rows" => 6, "class" => "pub-textarea"]]);
        yield "
            </div>

            <div class=\"modal-block\">
                <div class=\"pub-upload-box\">
                    <div class=\"pub-upload-title\">📷 Ajouter une image</div>
                    <div class=\"pub-upload-sub\">Choisis une image depuis ton appareil</div>

                    ";
        // line 1023
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 1023, $this->source); })()), "imagePath", [], "any", false, false, false, 1023), 'widget', ["attr" => ["accept" => "image/*", "class" => "pub-file", "id" => "admin-post-image-input"]]);
        yield "

                    <div id=\"admin-post-selected-file\" class=\"pub-selected-file\">Aucun fichier sélectionné</div>
                    <img id=\"admin-post-preview\" class=\"pub-preview\" alt=\"Aperçu image\">
                </div>
            </div>

            <div class=\"modal-actions\">
                <button type=\"button\" class=\"pub-btn-link\" data-close-modal=\"create-post-modal\">
                    <i class=\"fas fa-xmark\"></i>
                    Annuler
                </button>
                <button type=\"submit\" class=\"pub-btn pub-btn-primary\">
                    <i class=\"fas fa-plus\"></i>
                    Créer
                </button>
            </div>
        ";
        // line 1040
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 1040, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<div class=\"modal-backdrop\" id=\"comment-modal\">
    <div class=\"pub-modal pub-modal-small\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Ajouter un commentaire</h3>
                <p class=\"modal-subtitle\" id=\"comment-modal-subtitle\">Publication sélectionnée</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"comment-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <form id=\"admin-comment-modal-form\" method=\"post\">
            <div class=\"modal-block\">
                <label class=\"pub-filter-label\" style=\"font-size:14px;\">
                    Commentaire
                    <textarea name=\"content\" class=\"pub-textarea\" rows=\"5\" placeholder=\"Votre commentaire...\" required></textarea>
                </label>
            </div>

            <div class=\"modal-actions\">
                <button type=\"button\" class=\"pub-btn-link\" data-close-modal=\"comment-modal\">
                    <i class=\"fas fa-xmark\"></i>
                    Annuler
                </button>
                <button type=\"submit\" class=\"pub-btn pub-btn-primary\">
                    <i class=\"fas fa-paper-plane\"></i>
                    Publier
                </button>
            </div>
        </form>
    </div>
</div>

<div class=\"modal-backdrop\" id=\"edit-post-modal\">
    <div class=\"pub-modal\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Modifier la publication</h3>
                <p class=\"modal-subtitle\">Modification rapide sans quitter la page.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"edit-post-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <form id=\"admin-edit-post-form\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"modal-grid\">
                <div>
                    <label class=\"pub-filter-label\" style=\"font-size:14px;\">
                        Titre
                        <input type=\"text\" name=\"titre\" id=\"edit-post-title\" class=\"pub-input\" placeholder=\"Titre du post...\" required>
                    </label>
                </div>

                <div>
                    <label class=\"pub-filter-label\" style=\"font-size:14px;\">
                        Type
                        <select name=\"type\" id=\"edit-post-type\" class=\"pub-select\" required>
                            <option value=\"Promotion\">Promotion</option>
                            <option value=\"Actualité\">Actualité</option>
                            <option value=\"Conseil\">Conseil</option>
                            <option value=\"Bon plan\">Bon plan</option>
                        </select>
                    </label>
                </div>
            </div>

            <div class=\"modal-block\">
                <label class=\"pub-filter-label\" style=\"font-size:14px;\">
                    Contenu
                    <textarea name=\"contenu\" id=\"edit-post-content\" class=\"pub-textarea\" rows=\"6\" placeholder=\"Texte de la publication...\"></textarea>
                </label>
            </div>

            <div id=\"edit-post-current-image-wrap\" class=\"modal-block\" style=\"display:none;\">
                <div class=\"pub-upload-title\">Image actuelle</div>
                <img id=\"edit-post-current-image\" class=\"pub-preview\" style=\"display:block;\" alt=\"Image actuelle\">
            </div>

            <div class=\"modal-block\">
                <div class=\"pub-upload-box\">
                    <div class=\"pub-upload-title\">📷 Changer l’image</div>
                    <div class=\"pub-upload-sub\">Choisis une nouvelle image si tu veux remplacer l’ancienne</div>

                    <input type=\"file\" name=\"imagePath\" id=\"edit-post-image-input\" class=\"pub-file\" accept=\"image/*\">
                    <div id=\"edit-post-selected-file\" class=\"pub-selected-file\">Aucun nouveau fichier sélectionné</div>
                    <img id=\"edit-post-preview\" class=\"pub-preview\" alt=\"Nouvelle image\">
                </div>
            </div>

            <div class=\"modal-actions\">
                <button type=\"button\" class=\"pub-btn-link\" data-close-modal=\"edit-post-modal\">
                    <i class=\"fas fa-xmark\"></i>
                    Annuler
                </button>
                <button type=\"submit\" class=\"pub-btn pub-btn-primary\">
                    <i class=\"fas fa-floppy-disk\"></i>
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>

<div class=\"modal-backdrop\" id=\"edit-comment-modal\">
    <div class=\"pub-modal pub-modal-small\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Modifier le commentaire</h3>
                <p class=\"modal-subtitle\">Modification rapide sans quitter la page.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"edit-comment-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <form id=\"admin-edit-comment-form\" method=\"post\">
            <div class=\"modal-block\">
                <label class=\"pub-filter-label\" style=\"font-size:14px;\">
                    Commentaire
                    <textarea name=\"content\" id=\"edit-comment-content\" class=\"pub-textarea\" rows=\"5\" placeholder=\"Modifier le commentaire...\" required></textarea>
                </label>
            </div>

            <div class=\"modal-actions\">
                <button type=\"button\" class=\"pub-btn-link\" data-close-modal=\"edit-comment-modal\">
                    <i class=\"fas fa-xmark\"></i>
                    Annuler
                </button>
                <button type=\"submit\" class=\"pub-btn pub-btn-primary\">
                    <i class=\"fas fa-floppy-disk\"></i>
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>

<div class=\"modal-backdrop\" id=\"statistics-modal\">
    <div class=\"pub-modal\" style=\"width:min(100%, 1200px); max-height:90vh;\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Statistiques avancées</h3>
                <p class=\"modal-subtitle\">Analyse détaillée des publications du front.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"statistics-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <div id=\"statistics-modal-content\" style=\"color:#dbeafe;\">
            <div style=\"padding:30px; text-align:center;\">Chargement des statistiques...</div>
        </div>
    </div>
</div>
<div class=\"modal-backdrop\" id=\"reports-modal\">
    <div class=\"pub-modal\" style=\"width:min(100%, 1100px); max-height:90vh;\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Signalements</h3>
                <p class=\"modal-subtitle\">Liste des publications signalées par les utilisateurs.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"reports-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <div id=\"reports-modal-content\" style=\"color:#dbeafe;\">
            <div style=\"padding:30px; text-align:center;\">Chargement des signalements...</div>
        </div>
    </div>
</div>
<div class=\"modal-backdrop\" id=\"ai-optimize-modal\">
    <div class=\"pub-modal\" style=\"width:min(100%, 980px); max-height:90vh;\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">AI Optimize</h3>
                <p class=\"modal-subtitle\">Scan intelligent des commentaires toxiques avec Python local.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"ai-optimize-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <div style=\"display:flex; justify-content:flex-end; margin-bottom:18px;\">
            <button type=\"button\" class=\"pub-btn pub-btn-danger\" id=\"run-ai-optimize-btn\">
                <i class=\"fas fa-play\"></i>
                Lancer le scan
            </button>
        </div>

        <div id=\"ai-optimize-content\" style=\"color:#dbeafe;\">
            <div style=\"padding:30px; text-align:center;\">
                Clique sur <strong>Lancer le scan</strong> pour analyser les commentaires.
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1246
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

        // line 1247
        yield "<script>
    const postRows = Array.from(document.querySelectorAll('.post-row'));
    const commentsContainer = document.getElementById('comments-container');
    const commentActionBase = '";
        // line 1250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["commentActionBase"]) || array_key_exists("commentActionBase", $context) ? $context["commentActionBase"] : (function () { throw new RuntimeError('Variable "commentActionBase" does not exist.', 1250, $this->source); })()), "html", null, true);
        yield "';
    const postQuickEditBase = '";
        // line 1251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["postQuickEditBase"]) || array_key_exists("postQuickEditBase", $context) ? $context["postQuickEditBase"] : (function () { throw new RuntimeError('Variable "postQuickEditBase" does not exist.', 1251, $this->source); })()), "html", null, true);
        yield "';
    const selectedPostId = ";
        // line 1252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("selectedPostId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["selectedPostId"]) || array_key_exists("selectedPostId", $context) ? $context["selectedPostId"] : (function () { throw new RuntimeError('Variable "selectedPostId" does not exist.', 1252, $this->source); })()), 0)) : (0)), "html", null, true);
        yield ";

    const selectedPostTitle = document.getElementById('selected-post-title');
    const selectedPostMeta = document.getElementById('selected-post-meta');
    const selectedPostImage = document.getElementById('selected-post-image');
    const sideEditPostBtn = document.getElementById('open-side-edit-post-modal');
    const sideCommentBtn = document.getElementById('open-side-comment-modal');

    function formatCommentAction(postId) {
        return commentActionBase.replace('/0/comment', '/' + postId + '/comment');
    }

    function formatQuickEditAction(postId) {
        return postQuickEditBase.replace('/0/quick-edit', '/' + postId + '/quick-edit');
    }

    function bindCommentEditButtons() {
        document.querySelectorAll('.open-edit-comment-modal-btn').forEach(btn => {
            btn.onclick = function () {
                const commentId = this.dataset.commentId;
                const commentContent = this.dataset.commentContent || '';
                const postId = this.dataset.postId;

                const form = document.getElementById('admin-edit-comment-form');
                const textarea = document.getElementById('edit-comment-content');

                form.action = '/admin/publications/comment/' + commentId + '/edit';
                textarea.value = commentContent;
                document.getElementById('edit-comment-modal').classList.add('is-open');

                if (postId) {
                    window.history.replaceState(null, '', '?selected=' + postId);
                }
            };
        });
    }

    function renderSelectedPost(postId) {
        const row = document.querySelector(`.post-row[data-post-id=\"\${postId}\"]`);
        if (!row) return;

        document.querySelectorAll('.post-row').forEach(r => r.classList.remove('is-selected'));
        row.classList.add('is-selected');

        const commentsData = document.getElementById(`comments-data-\${postId}`);
        if (commentsData && commentsContainer) {
            commentsContainer.innerHTML = commentsData.innerHTML;
            bindCommentEditButtons();
        }

        if (selectedPostTitle) {
            selectedPostTitle.textContent = row.dataset.postTitle || '';
        }

        if (selectedPostMeta) {
            selectedPostMeta.textContent = `\${row.dataset.postAuthor} · \${row.dataset.postType} · \${row.dataset.postDate}`;
        }

        if (selectedPostImage) {
            if (row.dataset.postImage) {
                selectedPostImage.src = row.dataset.postImage;
                selectedPostImage.style.display = 'block';
            } else {
                selectedPostImage.src = '';
                selectedPostImage.style.display = 'none';
            }
        }

        if (sideCommentBtn) {
            sideCommentBtn.dataset.postId = row.dataset.postId;
            sideCommentBtn.dataset.postTitle = row.dataset.postTitle;
        }

        if (sideEditPostBtn) {
            sideEditPostBtn.dataset.postId = row.dataset.postId;
            sideEditPostBtn.dataset.postTitle = row.dataset.postTitle;
            sideEditPostBtn.dataset.postType = row.dataset.postType;
            sideEditPostBtn.dataset.postContent = row.dataset.postContent;
            sideEditPostBtn.dataset.postImage = row.dataset.postImage;
        }
    }

    postRows.forEach(row => {
        row.addEventListener('click', (e) => {
            if (e.target.closest('button, a, form')) return;
            renderSelectedPost(row.dataset.postId);
            window.history.replaceState(null, '', `?selected=\${row.dataset.postId}`);
        });
    });

    if (selectedPostId > 0) {
        renderSelectedPost(selectedPostId);
    }

    const createPostModal = document.getElementById('create-post-modal');
const commentModal = document.getElementById('comment-modal');
const editPostModal = document.getElementById('edit-post-modal');
const editCommentModal = document.getElementById('edit-comment-modal');

const statisticsModal = document.getElementById('statistics-modal');
const statisticsModalContent = document.getElementById('statistics-modal-content');
const openStatisticsModalBtn = document.getElementById('open-statistics-modal');

const reportsModal = document.getElementById('reports-modal');
const reportsModalContent = document.getElementById('reports-modal-content');
const openReportsModalBtn = document.getElementById('open-reports-modal');

const aiOptimizeModal = document.getElementById('ai-optimize-modal');
const aiOptimizeContent = document.getElementById('ai-optimize-content');
const openAiOptimizeModalBtn = document.getElementById('open-ai-optimize-modal');
const runAiOptimizeBtn = document.getElementById('run-ai-optimize-btn');

    document.getElementById('open-create-post-modal')?.addEventListener('click', () => {
        createPostModal.classList.add('is-open');
    });

    document.querySelectorAll('[data-close-modal]').forEach(btn => {
        btn.addEventListener('click', () => {
            const modalId = btn.getAttribute('data-close-modal');
            document.getElementById(modalId)?.classList.remove('is-open');
        });
    });
 [createPostModal, commentModal, editPostModal, editCommentModal, statisticsModal, reportsModal, aiOptimizeModal].forEach(modal => {
    modal?.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('is-open');

            if (modal === statisticsModal) {
                destroyStatisticsCharts();
            }
        }
    });
});
    const adminPostImageInput = document.getElementById('admin-post-image-input');
    const adminPostSelectedFile = document.getElementById('admin-post-selected-file');
    const adminPostPreview = document.getElementById('admin-post-preview');

    adminPostImageInput?.addEventListener('change', function () {
        const file = this.files && this.files[0];

        if (!file) {
            adminPostSelectedFile.textContent = 'Aucun fichier sélectionné';
            adminPostPreview.style.display = 'none';
            adminPostPreview.src = '';
            return;
        }

        adminPostSelectedFile.textContent = file.name;

        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function (e) {
                adminPostPreview.src = e.target.result;
                adminPostPreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });

    const commentModalForm = document.getElementById('admin-comment-modal-form');
    const commentModalSubtitle = document.getElementById('comment-modal-subtitle');

    function openCommentModal(postId, postTitle) {
        if (!postId) return;
        commentModalForm.action = formatCommentAction(postId);
        commentModalSubtitle.textContent = `Publication : \${postTitle || ''}`;
        commentModal.classList.add('is-open');
    }

    document.querySelectorAll('.open-comment-modal-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            openCommentModal(btn.dataset.postId, btn.dataset.postTitle);
        });
    });

    sideCommentBtn?.addEventListener('click', function () {
        openCommentModal(this.dataset.postId, this.dataset.postTitle);
    });

    const editPostForm = document.getElementById('admin-edit-post-form');
    const editPostTitle = document.getElementById('edit-post-title');
    const editPostType = document.getElementById('edit-post-type');
    const editPostContent = document.getElementById('edit-post-content');
    const editPostCurrentImageWrap = document.getElementById('edit-post-current-image-wrap');
    const editPostCurrentImage = document.getElementById('edit-post-current-image');
    const editPostImageInput = document.getElementById('edit-post-image-input');
    const editPostSelectedFile = document.getElementById('edit-post-selected-file');
    const editPostPreview = document.getElementById('edit-post-preview');

    function openEditPostModal(postId, title, type, content, image) {
        if (!postId) return;

        editPostForm.action = formatQuickEditAction(postId);
        editPostTitle.value = title || '';
        editPostType.value = type || 'Promotion';
        editPostContent.value = content || '';

        if (image) {
            editPostCurrentImage.src = image;
            editPostCurrentImageWrap.style.display = 'block';
        } else {
            editPostCurrentImage.src = '';
            editPostCurrentImageWrap.style.display = 'none';
        }

        editPostImageInput.value = '';
        editPostSelectedFile.textContent = 'Aucun nouveau fichier sélectionné';
        editPostPreview.style.display = 'none';
        editPostPreview.src = '';

        editPostModal.classList.add('is-open');
    }

    document.querySelectorAll('.open-edit-post-modal-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            openEditPostModal(
                btn.dataset.postId,
                btn.dataset.postTitle,
                btn.dataset.postType,
                btn.dataset.postContent,
                btn.dataset.postImage
            );
        });
    });

    sideEditPostBtn?.addEventListener('click', function () {
        openEditPostModal(
            this.dataset.postId,
            this.dataset.postTitle,
            this.dataset.postType,
            this.dataset.postContent,
            this.dataset.postImage
        );
    });

    editPostImageInput?.addEventListener('change', function () {
        const file = this.files && this.files[0];

        if (!file) {
            editPostSelectedFile.textContent = 'Aucun nouveau fichier sélectionné';
            editPostPreview.style.display = 'none';
            editPostPreview.src = '';
            return;
        }

        editPostSelectedFile.textContent = file.name;

        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function (e) {
                editPostPreview.src = e.target.result;
                editPostPreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });

    let statisticsCharts = [];

function destroyStatisticsCharts() {
    statisticsCharts.forEach(chart => {
        if (chart) {
            chart.destroy();
        }
    });
    statisticsCharts = [];
}

function animateCounters() {
    document.querySelectorAll('#statistics-modal-content [data-counter]').forEach(counter => {
        const target = parseFloat(counter.getAttribute('data-counter')) || 0;
        const isFloat = String(target).includes('.');
        let current = 0;
        const increment = target / 40;

        const updateCounter = () => {
            current += increment;

            if (current >= target) {
                counter.textContent = isFloat ? target.toFixed(2) : Math.round(target);
                return;
            }

            counter.textContent = isFloat ? current.toFixed(2) : Math.round(current);
            requestAnimationFrame(updateCounter);
        };

        updateCounter();
    });
}

async function ensureChartJsLoaded() {
    if (window.Chart) {
        return;
    }

    await new Promise((resolve, reject) => {
        const script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/chart.js';
        script.onload = resolve;
        script.onerror = reject;
        document.head.appendChild(script);
    });
}

function parseStatsJson(id) {
    const el = document.getElementById(id);
    if (!el) return { labels: [], values: [] };

    try {
        return JSON.parse(el.textContent);
    } catch (e) {
        return { labels: [], values: [] };
    }
}

async function initStatisticsCharts() {
    await ensureChartJsLoaded();
    destroyStatisticsCharts();
    animateCounters();

    const monthly = parseStatsJson('stats-monthly-data');
    const types = parseStatsJson('stats-type-data');
    const liked = parseStatsJson('stats-liked-data');
    const commented = parseStatsJson('stats-commented-data');
    const performance = parseStatsJson('stats-performance-data');
    
    

    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
        animation: {
            duration: 1400,
            easing: 'easeOutQuart'
        },
        plugins: {
            legend: {
                labels: {
                    color: '#dbeafe',
                    font: {
                        family: 'Poppins'
                    }
                }
            }
        },
        scales: {
            x: {
                ticks: { color: '#a8bfdc' },
                grid: { color: 'rgba(255,255,255,0.05)' }
            },
            y: {
                ticks: { color: '#a8bfdc' },
                grid: { color: 'rgba(255,255,255,0.05)' }
            }
        }
    };

    const monthlyCtx = document.getElementById('monthlyPostsChart');
    if (monthlyCtx) {
        statisticsCharts.push(new Chart(monthlyCtx, {
            type: 'line',
            data: {
                labels: monthly.labels,
                datasets: [{
                    label: 'Publications',
                    data: monthly.values,
                    tension: 0.4,
                    fill: true,
                    borderWidth: 3,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: commonOptions
        }));
    }

    const typeCtx = document.getElementById('postsTypeChart');
    if (typeCtx) {
        statisticsCharts.push(new Chart(typeCtx, {
            type: 'doughnut',
            data: {
                labels: types.labels,
                datasets: [{
                    data: types.values,
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 1400,
                    easing: 'easeOutExpo'
                },
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#dbeafe',
                            font: {
                                family: 'Poppins'
                            }
                        }
                    }
                }
            }
        }));
    }

    const likedCtx = document.getElementById('topLikedChart');
    if (likedCtx) {
        statisticsCharts.push(new Chart(likedCtx, {
            type: 'bar',
            data: {
                labels: liked.labels,
                datasets: [{
                    label: 'Likes',
                    data: liked.values,
                    borderRadius: 10
                }]
            },
            options: commonOptions
        }));
    }

    const commentedCtx = document.getElementById('topCommentedChart');
    if (commentedCtx) {
        statisticsCharts.push(new Chart(commentedCtx, {
            type: 'bar',
            data: {
                labels: commented.labels,
                datasets: [{
                    label: 'Commentaires',
                    data: commented.values,
                    borderRadius: 10
                }]
            },
            options: commonOptions
        }));
    }

    const radarCtx = document.getElementById('performanceRadarChart');
    if (radarCtx) {
        statisticsCharts.push(new Chart(radarCtx, {
            type: 'radar',
            data: {
                labels: performance.labels,
                datasets: [{
                    label: 'Score performance',
                    data: performance.values,
                    fill: true,
                    borderWidth: 2,
                    pointRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 1400,
                    easing: 'easeOutBack'
                },
                plugins: {
                    legend: {
                        labels: {
                            color: '#dbeafe'
                        }
                    }
                },
                scales: {
                    r: {
                        angleLines: { color: 'rgba(255,255,255,0.08)' },
                        grid: { color: 'rgba(255,255,255,0.08)' },
                        pointLabels: { color: '#dbeafe' },
                        ticks: {
                            color: '#dbeafe',
                            backdropColor: 'transparent'
                        }
                    }
                }
            }
        }));
    }
}

openStatisticsModalBtn?.addEventListener('click', async () => {
    statisticsModal.classList.add('is-open');
    statisticsModalContent.innerHTML = '<div style=\"padding:30px; text-align:center; color:#dbeafe;\">Chargement des statistiques...</div>';

    try {
        const response = await fetch('";
        // line 1746
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_publication_statistics");
        yield "', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        });

        const html = await response.text();
        statisticsModalContent.innerHTML = html;

        if (!response.ok) {
            return;
        }

        await initStatisticsCharts();
    } catch (error) {
        statisticsModalContent.innerHTML = '<div style=\"padding:30px; text-align:center; color:#ff8c8c;\">Impossible de charger les statistiques.</div>';
        console.error(error);
    }
});
document.querySelectorAll('[data-close-modal=\"statistics-modal\"]').forEach(btn => {
    btn.addEventListener('click', () => {
        destroyStatisticsCharts();
    });
});
openReportsModalBtn?.addEventListener('click', async () => {
    reportsModal.classList.add('is-open');
    reportsModalContent.innerHTML = '<div style=\"padding:30px; text-align:center; color:#dbeafe;\">Chargement des signalements...</div>';

    try {
        const response = await fetch('/admin/publications/signalements', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        });

        const html = await response.text();
        reportsModalContent.innerHTML = html;

        if (!response.ok) {
            return;
        }

        bindReportActionButtons();
    } catch (error) {
        reportsModalContent.innerHTML = '<div style=\"padding:30px; text-align:center; color:#ff8c8c;\">Impossible de charger les signalements.</div>';
        console.error(error);
    }
});

function bindReportActionButtons() {
    document.querySelectorAll('.mark-report-treated-btn').forEach(btn => {
        btn.addEventListener('click', async () => {
            const reportId = btn.dataset.reportId;

            try {
                const response = await fetch('/admin/publications/signalement/' + reportId + '/traiter', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                if (response.ok) {
                    openReportsModalBtn?.click();
                } else {
                    alert(data.error || 'Erreur lors du traitement.');
                }
            } catch (error) {
                console.error(error);
                alert('Erreur serveur.');
            }
        });
    });

    document.querySelectorAll('.delete-report-btn').forEach(btn => {
        btn.addEventListener('click', async () => {
            const reportId = btn.dataset.reportId;

            if (!confirm('Supprimer ce signalement ?')) {
                return;
            }

            try {
                const response = await fetch('/admin/publications/signalement/' + reportId + '/delete', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                if (response.ok) {
                    openReportsModalBtn?.click();
                } else {
                    alert(data.error || 'Erreur lors de la suppression.');
                }
            } catch (error) {
                console.error(error);
                alert('Erreur serveur.');
            }
        });
    });
}

    bindCommentEditButtons();
    openAiOptimizeModalBtn?.addEventListener('click', () => {
    aiOptimizeModal.classList.add('is-open');
    aiOptimizeContent.innerHTML = `
        <div style=\"padding:30px; text-align:center;\">
            Clique sur <strong>Lancer le scan</strong> pour analyser les commentaires.
        </div>
    `;
});
function escapeHtml(value) {
    return String(value ?? '')
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/\"/g, '&quot;')
        .replace(/'/g, '&#039;');
}

runAiOptimizeBtn?.addEventListener('click', async () => {
    aiOptimizeContent.innerHTML = `
        <div style=\"padding:30px; text-align:center; color:#dbeafe;\">
            <div style=\"font-size:18px; font-weight:700; margin-bottom:10px;\">Analyse en cours...</div>
            <div>Le moteur Python local scanne tous les commentaires.</div>
        </div>
    `;

    try {
        const response = await fetch('/admin/publications/ai-optimize-comments', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        });

        const rawText = await response.text();

        let data;
        try {
            data = JSON.parse(rawText);
        } catch (e) {
            aiOptimizeContent.innerHTML = `
                <div style=\"padding:30px; text-align:center; color:#ff8c8c;\">
                    <div style=\"font-size:18px; font-weight:700; margin-bottom:12px;\">
                        Erreur serveur pendant le scan IA.
                    </div>
                    <div style=\"margin-bottom:10px;\">
                        Le backend a renvoyé du HTML au lieu de JSON.
                    </div>
                    <div style=\"white-space:pre-wrap; font-size:13px; color:#ffd0d0; text-align:left; background:rgba(255,255,255,0.04); padding:12px; border-radius:12px; max-height:260px; overflow:auto;\">
                        \${escapeHtml(rawText)}
                    </div>
                </div>
            `;
            return;
        }

        if (!response.ok) {
            aiOptimizeContent.innerHTML = `
                <div style=\"padding:30px; text-align:center; color:#ff8c8c;\">
                    <div style=\"font-size:18px; font-weight:700; margin-bottom:12px;\">
                        \${escapeHtml(data.error || 'Erreur pendant le scan IA.')}
                    </div>
                    <div style=\"white-space:pre-wrap; font-size:13px; color:#ffd0d0;\">
                        \${escapeHtml(data.details || 'Aucun détail.')}
                    </div>
                </div>
            `;
            return;
        }

        const details = Array.isArray(data.details) ? data.details : [];

        aiOptimizeContent.innerHTML = `
            <div style=\"display:grid; grid-template-columns:repeat(4,1fr); gap:16px; margin-bottom:24px;\">
                <div class=\"side-block\">
                    <div style=\"font-size:13px; color:#a8bfdc;\">Total scanné</div>
                    <div style=\"font-size:28px; font-weight:800; color:#fff;\">\${data.total}</div>
                </div>
                <div class=\"side-block\">
                    <div style=\"font-size:13px; color:#a8bfdc;\">Toxiques détectés</div>
                    <div style=\"font-size:28px; font-weight:800; color:#ff6b7d;\">\${data.flaggedCount}</div>
                </div>
                <div class=\"side-block\">
                    <div style=\"font-size:13px; color:#a8bfdc;\">Commentaires non toxiques</div>
                    <div style=\"font-size:28px; font-weight:800; color:#34d399;\">\${data.kept}</div>
                </div>
                <div class=\"side-block\">
                    <div style=\"font-size:13px; color:#a8bfdc;\">Seuil toxicité</div>
                    <div style=\"font-size:28px; font-weight:800; color:#2ea8ff;\">\${data.threshold_toxic ?? '0.60'}</div>
                </div>
            </div>

            <div class=\"side-block\">
                <h3 class=\"side-title\" style=\"margin-bottom:14px;\">Commentaires détectés par l’IA</h3>
                \${
                    details.length === 0
                        ? '<div class=\"comment-empty\">Aucun commentaire toxique détecté.</div>'
                        : `
                            <div style=\"display:grid; gap:14px;\">
                                \${details.map(item => `
                                    <div class=\"comment-item ai-flagged-comment\" data-comment-id=\"\${item.id}\">
                                        <div class=\"comment-head\" style=\"flex-wrap:wrap;\">
                                            <span><strong>ID commentaire :</strong> #\${item.id}</span>
                                            <span><strong>Score :</strong> \${(item.score * 100).toFixed(1)}%</span>
                                        </div>

                                        <div style=\"font-size:13px; color:#a8bfdc; margin-bottom:8px;\">
                                            <strong>Auteur :</strong> \${escapeHtml(item.author || 'Inconnu')}<br>
                                            <strong>Post :</strong> \${escapeHtml(item.postTitle || 'Post inconnu')}\${item.postId ? ` (#\${item.postId})` : ''}<br>
                                            <strong>Date :</strong> \${escapeHtml(item.createdAt || '-')}<br>
                                            <strong>Label :</strong> \${escapeHtml(item.label || 'toxic')}
                                        </div>

                                        <p class=\"comment-body\">\${escapeHtml(item.content ?? '')}</p>

                                        <div class=\"comment-actions\">
                                            <button
                                                type=\"button\"
                                                class=\"pub-btn pub-btn-danger ai-delete-comment-btn\"
                                                data-comment-id=\"\${item.id}\"
                                            >
                                                <i class=\"fas fa-trash\"></i>
                                                Supprimer
                                            </button>
                                        </div>
                                    </div>
                                `).join('')}
                            </div>
                        `
                }
            </div>
        `;

        bindAiDeleteButtons();

    } catch (error) {
        console.error('Erreur fetch AI:', error);
        aiOptimizeContent.innerHTML = `
            <div style=\"padding:30px; text-align:center; color:#ff8c8c;\">
                Erreur serveur pendant le scan IA.<br><br>
                <small>\${escapeHtml(error.message)}</small>
            </div>
        `;
    }
});
function bindAiDeleteButtons() {
    document.querySelectorAll('.ai-delete-comment-btn').forEach(btn => {
        btn.addEventListener('click', async () => {
            const commentId = btn.dataset.commentId;

            if (!commentId) {
                return;
            }

            if (!confirm('Supprimer ce commentaire détecté comme toxique ?')) {
                return;
            }

            btn.disabled = true;
            btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Suppression...';

            try {
                const response = await fetch('/admin/publications/ai-delete-comment/' + commentId, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                if (!response.ok) {
                    alert(data.error || 'Erreur lors de la suppression.');
                    btn.disabled = false;
                    btn.innerHTML = '<i class=\"fas fa-trash\"></i> Supprimer';
                    return;
                }

                const card = document.querySelector('.ai-flagged-comment[data-comment-id=\"' + commentId + '\"]');
                if (card) {
                    card.remove();
                }
            } catch (error) {
                console.error(error);
                alert('Erreur serveur lors de la suppression.');
                btn.disabled = false;
                btn.innerHTML = '<i class=\"fas fa-trash\"></i> Supprimer';
            }
        });
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
        return "admin/posts/index.html.twig";
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
        return array (  2257 => 1746,  1760 => 1252,  1756 => 1251,  1752 => 1250,  1747 => 1247,  1734 => 1246,  1519 => 1040,  1499 => 1023,  1488 => 1015,  1484 => 1014,  1476 => 1009,  1472 => 1008,  1465 => 1004,  1461 => 1003,  1454 => 999,  1450 => 998,  1434 => 984,  1427 => 982,  1423 => 980,  1408 => 971,  1404 => 970,  1395 => 964,  1391 => 963,  1387 => 962,  1379 => 957,  1374 => 955,  1370 => 954,  1366 => 952,  1362 => 951,  1359 => 950,  1355 => 948,  1352 => 947,  1350 => 946,  1345 => 945,  1341 => 944,  1332 => 937,  1328 => 935,  1325 => 934,  1321 => 932,  1306 => 923,  1302 => 922,  1293 => 916,  1289 => 915,  1285 => 914,  1277 => 909,  1272 => 907,  1268 => 906,  1264 => 904,  1260 => 903,  1257 => 902,  1253 => 900,  1250 => 899,  1247 => 898,  1245 => 897,  1236 => 890,  1232 => 888,  1221 => 882,  1212 => 876,  1208 => 875,  1204 => 874,  1200 => 873,  1196 => 872,  1179 => 862,  1174 => 860,  1170 => 858,  1166 => 856,  1160 => 854,  1158 => 853,  1155 => 852,  1152 => 851,  1150 => 850,  1133 => 835,  1124 => 831,  1122 => 830,  1109 => 822,  1105 => 821,  1092 => 811,  1088 => 810,  1079 => 804,  1075 => 803,  1071 => 802,  1067 => 801,  1063 => 800,  1054 => 794,  1050 => 793,  1044 => 790,  1039 => 788,  1035 => 787,  1032 => 786,  1028 => 784,  1022 => 782,  1020 => 781,  1014 => 778,  1010 => 777,  1006 => 776,  1002 => 775,  998 => 774,  994 => 773,  990 => 772,  986 => 771,  983 => 770,  980 => 769,  975 => 768,  950 => 746,  938 => 737,  934 => 736,  926 => 730,  913 => 728,  909 => 727,  900 => 720,  887 => 718,  883 => 717,  873 => 710,  837 => 676,  824 => 675,  152 => 12,  139 => 11,  116 => 9,  104 => 6,  91 => 5,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Publications - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-newspaper\"></i> Gestion des Publications
{% endblock %}

{% block breadcrumb %}Publications{% endblock %}

{% block stylesheets %}
<style>
:root {
    --pub-bg-main: #071a34;
    --pub-bg-card: linear-gradient(135deg, rgba(7, 33, 61, 0.98) 0%, rgba(5, 20, 46, 0.98) 100%);
    --pub-bg-soft: rgba(255, 255, 255, 0.045);
    --pub-border: rgba(130, 190, 255, 0.10);
    --pub-border-strong: rgba(47, 168, 255, 0.20);
    --pub-text: #f4f8ff;
    --pub-text-soft: #a8bfdc;
    --pub-text-muted: rgba(168, 191, 220, 0.72);
    --pub-accent: #ffbf1b;
    --pub-accent-2: #2ea8ff;
    --pub-accent-3: #00d5a6;
    --pub-danger: #ff5b6e;
    --pub-danger-dark: #e63d56;
    --pub-success: #34d399;
    --pub-shadow: 0 22px 60px rgba(0, 0, 0, 0.28);
    --pub-shadow-blue: 0 0 0 3px rgba(47, 168, 255, 0.15), 0 12px 30px rgba(47, 168, 255, 0.12);
    --pub-transition: 0.28s ease;
}

@keyframes modalSlide {
    from {
        opacity: 0;
        transform: translateY(-28px) scale(0.96);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

@keyframes fadeSoft {
    from { opacity: 0; }
    to { opacity: 1; }
}

.admin-publications-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 360px;
    gap: 24px;
    align-items: start;
}

.admin-publications-main,
.admin-publications-side {
    min-width: 0;
}

.publications-shell,
.side-shell {
    background: var(--pub-bg-card);
    border: 1px solid var(--pub-border);
    border-radius: 28px;
    box-shadow: var(--pub-shadow);
    overflow: hidden;
    transition: transform var(--pub-transition), box-shadow var(--pub-transition), border-color var(--pub-transition);
}

.publications-shell:hover,
.side-shell:hover {
    border-color: rgba(47, 168, 255, 0.14);
    box-shadow: 0 26px 70px rgba(0, 0, 0, 0.34);
}

.shell-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    padding: 28px 28px 18px;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    background: linear-gradient(135deg, rgba(30, 111, 168, 0.10) 0%, rgba(11, 45, 74, 0.06) 100%);
}

.shell-head h2,
.side-title,
.modal-title {
    margin: 0;
    color: var(--pub-text);
    font-weight: 800;
    letter-spacing: -0.02em;
}

.shell-head p,
.side-subtitle,
.modal-subtitle {
    margin: 8px 0 0;
    color: var(--pub-text-soft);
    font-size: 14px;
}

.shell-body {
    padding: 24px 28px 28px;
}

.publication-toolbar {
    display: flex;
    gap: 12px;
    align-items: center;
    flex-wrap: wrap;
}

.pub-btn,
.pub-btn-link,
.modal-close,
.post-row,
.comment-item,
.side-block {
    transition: all var(--pub-transition);
}

.pub-btn:hover,
.pub-btn-link:hover {
    transform: translateY(-2px);
}

.pub-btn:active,
.pub-btn-link:active {
    transform: translateY(0);
}

.pub-btn {
    border: none;
    border-radius: 16px;
    padding: 14px 22px;
    font-weight: 800;
    font-size: 15px;
    cursor: pointer;
    box-shadow: 0 10px 25px rgba(0,0,0,0.18);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 52px;
    text-decoration: none;
}

.pub-btn-primary {
    background: linear-gradient(135deg, #ffbf1b 0%, #ff9f0a 100%);
    color: #08233f;
}

.pub-btn-primary:hover {
    box-shadow: 0 18px 35px rgba(255, 191, 27, 0.30);
}

.pub-btn-secondary {
    background: linear-gradient(135deg, #2ea8ff 0%, #1d7fe2 100%);
    color: #ffffff;
    border: 1px solid rgba(120, 200, 255, 0.22);
}

.pub-btn-secondary:hover {
    box-shadow: 0 18px 35px rgba(46, 168, 255, 0.22);
}

.pub-btn-stats {
    background: linear-gradient(135deg, #00d5a6 0%, #0ea5e9 100%);
    color: #ffffff;
    border: 1px solid rgba(0, 213, 166, 0.24);
}

.pub-btn-stats:hover {
    box-shadow: 0 18px 35px rgba(0, 213, 166, 0.22);
}

.pub-btn-danger {
    background: linear-gradient(135deg, var(--pub-danger) 0%, var(--pub-danger-dark) 100%);
    color: #ffffff;
    border: 1px solid rgba(255, 91, 110, 0.24);
}

.pub-btn-danger:hover {
    box-shadow: 0 18px 35px rgba(255, 91, 110, 0.22);
}

.pub-btn-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 18px;
    border-radius: 16px;
    text-decoration: none;
    font-weight: 800;
    font-size: 14px;
    border: 1px solid rgba(255, 191, 27, 0.22);
    background: linear-gradient(135deg, rgba(255,191,27,0.16) 0%, rgba(255,159,10,0.10) 100%);
    color: #ffcf57;
    cursor: pointer;
    min-height: 52px;
}

.pub-btn-link:hover {
    box-shadow: 0 18px 35px rgba(255, 191, 27, 0.16);
    border-color: rgba(255, 191, 27, 0.34);
}

.pub-filter-card {
    margin-bottom: 20px;
    background: linear-gradient(135deg, rgba(11, 32, 62, 0.92) 0%, rgba(9, 24, 48, 0.92) 100%);
    border: 1px solid rgba(130, 190, 255, 0.08);
    border-radius: 24px;
    padding: 20px;
}

.pub-filter-grid {
    display: grid;
    grid-template-columns: 1.3fr 1fr 1fr 1fr auto;
    gap: 14px;
    align-items: end;
}

.pub-filter-label {
    display: flex;
    flex-direction: column;
    gap: 8px;
    color: var(--pub-text-soft);
    font-size: 13px;
    font-weight: 600;
}

.pub-input,
.pub-select,
.pub-textarea,
.pub-file {
    width: 100%;
    border: 1px solid rgba(255,255,255,0.09);
    background: rgba(255,255,255,0.05);
    color: var(--pub-text);
    border-radius: 14px;
    padding: 14px 16px;
    outline: none;
    font-size: 14px;
    box-sizing: border-box;
    transition: all var(--pub-transition);
}

.pub-input::placeholder,
.pub-textarea::placeholder {
    color: rgba(244,248,255,0.42);
}

.pub-input:focus,
.pub-select:focus,
.pub-textarea:focus,
.pub-file:focus {
    border-color: var(--pub-accent-2);
    box-shadow: var(--pub-shadow-blue);
}

.pub-select option {
    color: #08233f;
}

.pub-filter-actions {
    display: flex;
    gap: 10px;
    justify-content: flex-end;
}

.pub-table-wrap {
    overflow: auto;
    border-radius: 22px;
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.04);
}

.pub-table {
    width: 100%;
    min-width: 980px;
    border-collapse: collapse;
}

.pub-table thead th {
    position: sticky;
    top: 0;
    z-index: 1;
    background: rgba(6, 23, 46, 0.98);
    color: #8fd2ff;
    padding: 18px 16px;
    text-align: left;
    font-size: 13px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    border-bottom: 1px solid rgba(255,255,255,0.06);
}

.pub-table tbody tr {
    border-bottom: 1px solid rgba(255,255,255,0.05);
    cursor: pointer;
}

.pub-table tbody tr:hover {
    background: rgba(99, 180, 255, 0.05);
}

.pub-table tbody tr.is-selected {
    background: linear-gradient(135deg, rgba(0, 213, 166, 0.10) 0%, rgba(99, 180, 255, 0.08) 100%);
    box-shadow: inset 4px 0 0 rgba(255, 191, 27, 0.9);
}

.pub-table td {
    padding: 18px 16px;
    color: #e5eefc;
    vertical-align: middle;
}

.pub-thumb,
.pub-thumb-placeholder {
    width: 62px;
    height: 62px;
    border-radius: 16px;
    object-fit: cover;
    display: block;
}

.pub-thumb-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,0.06);
    color: rgba(255,255,255,0.45);
    font-size: 11px;
    font-weight: 700;
    border: 1px dashed rgba(255,255,255,0.10);
}

.pub-title-cell {
    font-weight: 800;
    color: var(--pub-text);
    font-size: 18px;
}

.pub-meta-soft {
    color: var(--pub-text-soft);
    font-size: 13px;
}

.pub-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 9px 14px;
    border-radius: 999px;
    font-weight: 800;
    font-size: 12px;
    color: #072441;
    background: linear-gradient(135deg, var(--pub-accent) 0%, #ff9f0a 100%);
    white-space: nowrap;
    box-shadow: 0 8px 20px rgba(255, 191, 27, 0.18);
}

.pub-comment-count {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 38px;
    height: 38px;
    padding: 0 12px;
    border-radius: 999px;
    background: rgba(99, 180, 255, 0.12);
    color: #d9edff;
    font-weight: 800;
}

.pub-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.side-shell {
    padding: 22px;
    position: sticky;
    top: 20px;
}

.side-block {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 22px;
    padding: 20px;
    margin-bottom: 18px;
}

.side-block:hover {
    border-color: rgba(47, 168, 255, 0.12);
    background: rgba(255,255,255,0.04);
}

.side-block:last-child {
    margin-bottom: 0;
}

.side-post-summary {
    display: flex;
    gap: 14px;
    align-items: flex-start;
    margin-bottom: 18px;
}

.side-post-summary img {
    width: 84px;
    height: 84px;
    object-fit: cover;
    border-radius: 18px;
}

.side-post-title {
    margin: 0 0 6px;
    color: var(--pub-text);
    font-size: 20px;
    font-weight: 800;
}

.side-post-meta {
    margin: 0;
    color: var(--pub-text-soft);
    font-size: 13px;
    line-height: 1.6;
}

.side-post-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-top: 14px;
}

.comments-list {
    display: grid;
    gap: 14px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.comment-item {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 18px;
    padding: 16px;
}

.comment-item:hover {
    border-color: rgba(47, 168, 255, 0.14);
    transform: translateY(-1px);
}

.comment-head {
    display: flex;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 8px;
    color: var(--pub-text-soft);
    font-size: 12px;
}

.comment-body {
    margin: 0 0 14px;
    color: #edf4ff;
    line-height: 1.65;
}

.comment-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.comment-empty {
    color: var(--pub-text-soft);
    padding: 6px 0 4px;
}

.modal-backdrop {
    position: fixed;
    inset: 0;
    background: rgba(5, 20, 33, 0.84);
    backdrop-filter: blur(8px);
    z-index: 1200;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    animation: fadeSoft 0.2s ease;
}

.modal-backdrop.is-open {
    display: flex;
}

.pub-modal {
    width: min(100%, 760px);
    max-height: 90vh;
    overflow: auto;
    border-radius: 24px;
    border: 1px solid rgba(130, 190, 255, 0.14);
    background: linear-gradient(135deg, rgba(11, 45, 74, 0.98) 0%, rgba(7, 27, 46, 0.98) 100%);
    box-shadow: 0 25px 80px rgba(0, 0, 0, 0.5);
    padding: 26px;
    animation: modalSlide 0.3s ease;
}

.pub-modal-small {
    width: min(100%, 620px);
}

.modal-head {
    display: flex;
    justify-content: space-between;
    gap: 16px;
    align-items: flex-start;
    margin-bottom: 18px;
    padding-bottom: 14px;
    border-bottom: 1px solid rgba(255,255,255,0.06);
}

.modal-close {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.08);
    background: rgba(255,255,255,0.04);
    color: #dbeafe;
    font-size: 18px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.modal-close:hover {
    background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);
    color: white;
    border-color: transparent;
    transform: rotate(90deg);
}

.modal-grid {
    display: grid;
    grid-template-columns: 1fr 220px;
    gap: 14px;
}

.modal-block {
    margin-top: 14px;
}

.pub-textarea {
    min-height: 140px;
    resize: vertical;
}

.pub-upload-box {
    border: 2px dashed rgba(0, 213, 166, 0.22);
    background: rgba(255,255,255,0.02);
    border-radius: 20px;
    padding: 18px;
    text-align: center;
    transition: all var(--pub-transition);
}

.pub-upload-box:hover {
    border-color: rgba(47, 168, 255, 0.24);
    background: rgba(255,255,255,0.03);
}

.pub-upload-title {
    color: var(--pub-accent);
    font-weight: 800;
    margin-bottom: 6px;
}

.pub-upload-sub {
    color: var(--pub-text-soft);
    font-size: 13px;
    margin-bottom: 14px;
}

.pub-selected-file {
    display: inline-block;
    margin-top: 14px;
    padding: 8px 14px;
    border-radius: 999px;
    background: rgba(255,255,255,0.06);
    color: #fff;
    font-size: 13px;
}

.pub-preview {
    width: 100%;
    max-height: 260px;
    object-fit: cover;
    border-radius: 18px;
    border: 1px solid rgba(255,255,255,0.08);
    margin-top: 14px;
    display: none;
}

.modal-actions {
    display: flex;
    justify-content: flex-end;
    gap: 12px;
    margin-top: 18px;
    padding-top: 8px;
}

.hidden-storage {
    display: none;
}

.pub-table-wrap::-webkit-scrollbar,
.pub-modal::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}
.pub-table-wrap::-webkit-scrollbar-thumb,
.pub-modal::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,0.14);
    border-radius: 999px;
}

@media (max-width: 1200px) {
    .admin-publications-layout {
        grid-template-columns: 1fr;
    }

    .side-shell {
        position: static;
    }
}

@media (max-width: 860px) {
    .shell-head {
        flex-direction: column;
        align-items: stretch;
    }

    .pub-filter-grid,
    .modal-grid {
        grid-template-columns: 1fr;
    }

    .pub-filter-actions,
    .modal-actions,
    .side-post-actions,
    .comment-actions {
        flex-direction: column;
    }

    .pub-btn,
    .pub-btn-link {
        width: 100%;
        justify-content: center;
    }
}
</style>
{% endblock %}

{% block content %}
<div class=\"admin-publications-layout\">
    <section class=\"admin-publications-main\">
        <div class=\"publications-shell\">
            <div class=\"shell-head\">
                <div>
                    <h2>Publications</h2>
                    <p>Gestion moderne des publications avec édition et commentaire en popup.</p>
                </div>

                <div class=\"publication-toolbar\">
                    <button type=\"button\" class=\"pub-btn pub-btn-primary\" id=\"open-create-post-modal\">
                        <i class=\"fas fa-plus\"></i>
                        Créer une publication
                    </button>
                <button type=\"button\" class=\"pub-btn pub-btn-secondary\" id=\"open-reports-modal\">
                         <i class=\"fas fa-triangle-exclamation\"></i>
                         Signalements
                    </button>
                    <button type=\"button\" class=\"pub-btn pub-btn-stats\" id=\"open-statistics-modal\">
                        <i class=\"fas fa-chart-line\"></i>
                        Statistiques
                    </button>
                    <button type=\"button\" class=\"pub-btn pub-btn-danger\" id=\"open-ai-optimize-modal\">
                        <i class=\"fas fa-robot\"></i>
                         AI Optimize
                    </button>
                </div>
            </div>

            <div class=\"shell-body\">
                <form method=\"get\" class=\"pub-filter-card\">
                    <div class=\"pub-filter-grid\">
                        <label class=\"pub-filter-label\">
                            Rechercher
                            <input class=\"pub-input\" type=\"search\" name=\"search\" value=\"{{ filters.search }}\" placeholder=\"Titre ou contenu\">
                        </label>

                        <label class=\"pub-filter-label\">
                            Type
                            <select class=\"pub-select\" name=\"type\">
                                <option value=\"\">Tous</option>
                                {% for typeName in types %}
                                    <option value=\"{{ typeName }}\" {{ filters.type == typeName ? 'selected' : '' }}>{{ typeName }}</option>
                                {% endfor %}
                            </select>
                        </label>

                        <label class=\"pub-filter-label\">
                            Auteur
                            <select class=\"pub-select\" name=\"author\">
                                <option value=\"\">Tous</option>
                                {% for authorName in authors %}
                                    <option value=\"{{ authorName }}\" {{ filters.author == authorName ? 'selected' : '' }}>{{ authorName }}</option>
                                {% endfor %}
                            </select>
                        </label>

                        <label class=\"pub-filter-label\">
                            Trier
                            <select class=\"pub-select\" name=\"sort\">
                                <option value=\"desc\" {{ filters.sort == 'desc' ? 'selected' : '' }}>Plus récent</option>
                                <option value=\"asc\" {{ filters.sort == 'asc' ? 'selected' : '' }}>Plus ancien</option>
                            </select>
                        </label>

                        <div class=\"pub-filter-actions\">
                            <button type=\"submit\" class=\"pub-btn pub-btn-secondary\">
                                <i class=\"fas fa-sliders-h\"></i>
                                Appliquer
                            </button>
                            <a href=\"{{ path('admin_publications') }}\" class=\"pub-btn-link\">
                                <i class=\"fas fa-rotate-left\"></i>
                                Réinitialiser
                            </a>
                        </div>
                    </div>
                </form>

                <div class=\"pub-table-wrap\">
                    <table class=\"pub-table\">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Auteur</th>
                                <th>Date</th>
                                <th>Commentaires</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for post in posts %}
                                 {% set postAuthorName = post.user ? (post.user.nom ~ ' ' ~ post.user.prenom) : 'Auteur inconnu' %}
                                <tr
                                     class=\"post-row {{ selectedPostId == post.id ? 'is-selected' : '' }}\"
                                     data-post-id=\"{{ post.id }}\"
                                     data-post-title=\"{{ post.titre|e('html_attr') }}\"
                                     data-post-type=\"{{ post.type|e('html_attr') }}\"
                                      data-post-author=\"{{ postAuthorName|e('html_attr') }}\"
                                      data-post-date=\"{{ post.createdAt ? post.createdAt|date('d/m/Y H:i') : '-' }}\"
                                      data-post-content=\"{{ post.contenu|e('html_attr') }}\"
                                      data-post-image=\"{{ post.imagePath ? asset(post.imagePath) : '' }}\"
                                 >
                                    <td>
                                        {% if post.imagePath %}
                                            <img src=\"{{ asset(post.imagePath) }}\" alt=\"Miniature\" class=\"pub-thumb\">
                                        {% else %}
                                            <div class=\"pub-thumb-placeholder\">No img</div>
                                        {% endif %}
                                    </td>
                                    <td><div class=\"pub-title-cell\">{{ post.titre }}</div></td>
                                    <td><span class=\"pub-badge\">{{ post.type }}</span></td>
                                   <td>
                                      <div>{{ postAuthorName }}</div>
                                     <div class=\"pub-meta-soft\">Auteur</div>
                                    </td>
                                    <td>{{ post.createdAt ? post.createdAt|date('d/m/Y H:i') : '-' }}</td>
                                    <td><span class=\"pub-comment-count\">{{ commentsByPost[post.id]|default([])|length }}</span></td>
                                    <td>
                                        <div class=\"pub-actions\">
                                            <button
                                                type=\"button\"
                                                class=\"pub-btn-link open-edit-post-modal-btn\"
                                                data-post-id=\"{{ post.id }}\"
                                                data-post-title=\"{{ post.titre|e('html_attr') }}\"
                                                data-post-type=\"{{ post.type|e('html_attr') }}\"
                                                data-post-content=\"{{ post.contenu|e('html_attr') }}\"
                                                data-post-image=\"{{ post.imagePath ? asset(post.imagePath) : '' }}\"
                                            >
                                                <i class=\"fas fa-pen-to-square\"></i>
                                                Modifier
                                            </button>

                                            <form method=\"post\" action=\"{{ path('admin_publication_delete', {'id': post.id}) }}\" class=\"inline-form\" onsubmit=\"return confirm('Supprimer cette publication ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-post' ~ post.id) }}\">
                                                <button type=\"submit\" class=\"pub-btn pub-btn-danger\">
                                                    <i class=\"fas fa-trash\"></i>
                                                    Supprimer
                                                </button>
                                            </form>

                                            <button
                                                type=\"button\"
                                                class=\"pub-btn pub-btn-secondary open-comment-modal-btn\"
                                                data-post-id=\"{{ post.id }}\"
                                                data-post-title=\"{{ post.titre|e('html_attr') }}\"
                                            >
                                                <i class=\"fas fa-comment-dots\"></i>
                                                Commenter
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"7\" class=\"comment-empty\">Aucune publication trouvée.</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <aside class=\"admin-publications-side\">
        <div class=\"side-shell\">
            <div class=\"side-block\">
                <h3 class=\"side-title\">Aperçu sélectionné</h3>
                <p class=\"side-subtitle\">Sélectionne une publication puis modifie-la en popup.</p>
            </div>

            <div class=\"side-block\">
                {% if selectedPost %}
    {% set selectedPostAuthorName = selectedPost.user ? (selectedPost.user.nom ~ ' ' ~ selectedPost.user.prenom) : 'Auteur inconnu' %}
    <div class=\"side-post-summary\">
        {% if selectedPost.imagePath %}
            <img id=\"selected-post-image\" src=\"{{ asset(selectedPost.imagePath) }}\" alt=\"Image du post\">
        {% else %}
            <img id=\"selected-post-image\" src=\"\" alt=\"Image du post\" style=\"display:none;\">
        {% endif %}

        <div>
            <h4 class=\"side-post-title\" id=\"selected-post-title\">{{ selectedPost.titre }}</h4>
            <p class=\"side-post-meta\" id=\"selected-post-meta\">
                {{ selectedPostAuthorName }} · {{ selectedPost.type }} · {{ selectedPost.createdAt ? selectedPost.createdAt|date('d/m/Y H:i') : '-' }}
            </p>
        </div>
    </div>

                    <div class=\"side-post-actions\">
                        <button
                            type=\"button\"
                            class=\"pub-btn-link\"
                            id=\"open-side-edit-post-modal\"
                            data-post-id=\"{{ selectedPost.id }}\"
                            data-post-title=\"{{ selectedPost.titre|e('html_attr') }}\"
                            data-post-type=\"{{ selectedPost.type|e('html_attr') }}\"
                            data-post-content=\"{{ selectedPost.contenu|e('html_attr') }}\"
                            data-post-image=\"{{ selectedPost.imagePath ? asset(selectedPost.imagePath) : '' }}\"
                        >
                            <i class=\"fas fa-pen-to-square\"></i>
                            Modifier la publication
                        </button>

                        <button type=\"button\" class=\"pub-btn pub-btn-primary\" id=\"open-side-comment-modal\" data-post-id=\"{{ selectedPost.id }}\" data-post-title=\"{{ selectedPost.titre|e('html_attr') }}\">
                            <i class=\"fas fa-plus\"></i>
                            Ajouter un commentaire
                        </button>
                    </div>
                {% else %}
                    <div class=\"comment-empty\">Sélectionnez une publication.</div>
                {% endif %}
            </div>

            <div class=\"side-block\">
                <h3 class=\"side-title\">Commentaires</h3>
                <p class=\"side-subtitle\">Sélectionne un commentaire puis modifie-le en popup.</p>

                <div id=\"comments-container\">
                    {% if selectedPost %}
                        {% set currentComments = commentsByPost[selectedPost.id]|default([]) %}
                        {% if currentComments is empty %}
                            <div class=\"comment-empty\">Pas encore de commentaires pour cette publication.</div>
                        {% else %}
                            <ul class=\"comments-list\">
                                {% for comment in currentComments %}
                                    <li class=\"comment-item\">
                                        <div class=\"comment-head\">
                                            <span>{{ comment.user ? comment.user.nom ~ ' ' ~ comment.user.prenom : 'Utilisateur supprimé' }}</span>
                                            <span>{{ comment.createdAt ? comment.createdAt|date('d/m/Y H:i') : '-' }}</span>
                                        </div>
                                        <p class=\"comment-body\">{{ comment.contenu }}</p>
                                        <div class=\"comment-actions\">
                                            <button
                                                type=\"button\"
                                                class=\"pub-btn-link open-edit-comment-modal-btn\"
                                                data-comment-id=\"{{ comment.id }}\"
                                                data-comment-content=\"{{ comment.contenu|e('html_attr') }}\"
                                                data-post-id=\"{{ selectedPost.id }}\"
                                            >
                                                <i class=\"fas fa-pen-to-square\"></i>
                                                Modifier
                                            </button>

                                            <form method=\"post\" action=\"{{ path('admin_publication_comment_delete', {'id': comment.id}) }}\" class=\"inline-form\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-comment' ~ comment.id) }}\">
                                                <button type=\"submit\" class=\"pub-btn pub-btn-danger\">
                                                    <i class=\"fas fa-trash\"></i>
                                                    Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                        {% endif %}
                    {% else %}
                        <div class=\"comment-empty\">Sélectionnez une publication pour afficher les commentaires.</div>
                    {% endif %}
                </div>
            </div>
        </div>
    </aside>
</div>

<div id=\"comments-data-storage\" class=\"hidden-storage\">
    {% for post in posts %}
        <div id=\"comments-data-{{ post.id }}\">
            {% set postComments = commentsByPost[post.id]|default([]) %}
            {% if postComments is empty %}
                <div class=\"comment-empty\">Pas encore de commentaires pour cette publication.</div>
            {% else %}
                <ul class=\"comments-list\">
                    {% for comment in postComments %}
                        <li class=\"comment-item\">
                            <div class=\"comment-head\">
                                <span>{{ comment.user ? comment.user.nom ~ ' ' ~ comment.user.prenom : 'Utilisateur supprimé' }}</span>
                                <span>{{ comment.createdAt ? comment.createdAt|date('d/m/Y H:i') : '-' }}</span>
                            </div>
                            <p class=\"comment-body\">{{ comment.contenu }}</p>
                            <div class=\"comment-actions\">
                                <button
                                    type=\"button\"
                                    class=\"pub-btn-link open-edit-comment-modal-btn\"
                                    data-comment-id=\"{{ comment.id }}\"
                                    data-comment-content=\"{{ comment.contenu|e('html_attr') }}\"
                                    data-post-id=\"{{ post.id }}\"
                                >
                                    <i class=\"fas fa-pen-to-square\"></i>
                                    Modifier
                                </button>

                                <form method=\"post\" action=\"{{ path('admin_publication_comment_delete', {'id': comment.id}) }}\" class=\"inline-form\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-comment' ~ comment.id) }}\">
                                    <button type=\"submit\" class=\"pub-btn pub-btn-danger\">
                                        <i class=\"fas fa-trash\"></i>
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endfor %}
</div>

<div class=\"modal-backdrop\" id=\"create-post-modal\">
    <div class=\"pub-modal\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Créer une publication</h3>
                <p class=\"modal-subtitle\">Ajout rapide.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"create-post-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        {{ form_start(postForm, {'method': 'POST', 'multipart': true}) }}
            {{ form_errors(postForm) }}

            <div class=\"modal-grid\">
                <div>
                    {{ form_label(postForm.titre, 'Titre') }}
                    {{ form_widget(postForm.titre, {'attr': {'placeholder': 'Titre du post...', 'class': 'pub-input'}}) }}
                </div>

                <div>
                    {{ form_label(postForm.type, 'Type') }}
                    {{ form_widget(postForm.type, {'attr': {'class': 'pub-select'}}) }}
                </div>
            </div>

            <div class=\"modal-block\">
                {{ form_label(postForm.contenu, 'Contenu') }}
                {{ form_widget(postForm.contenu, {'attr': {'placeholder': 'Texte de la publication...', 'rows': 6, 'class': 'pub-textarea'}}) }}
            </div>

            <div class=\"modal-block\">
                <div class=\"pub-upload-box\">
                    <div class=\"pub-upload-title\">📷 Ajouter une image</div>
                    <div class=\"pub-upload-sub\">Choisis une image depuis ton appareil</div>

                    {{ form_widget(postForm.imagePath, {'attr': {'accept': 'image/*', 'class': 'pub-file', 'id': 'admin-post-image-input'}}) }}

                    <div id=\"admin-post-selected-file\" class=\"pub-selected-file\">Aucun fichier sélectionné</div>
                    <img id=\"admin-post-preview\" class=\"pub-preview\" alt=\"Aperçu image\">
                </div>
            </div>

            <div class=\"modal-actions\">
                <button type=\"button\" class=\"pub-btn-link\" data-close-modal=\"create-post-modal\">
                    <i class=\"fas fa-xmark\"></i>
                    Annuler
                </button>
                <button type=\"submit\" class=\"pub-btn pub-btn-primary\">
                    <i class=\"fas fa-plus\"></i>
                    Créer
                </button>
            </div>
        {{ form_end(postForm) }}
    </div>
</div>

<div class=\"modal-backdrop\" id=\"comment-modal\">
    <div class=\"pub-modal pub-modal-small\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Ajouter un commentaire</h3>
                <p class=\"modal-subtitle\" id=\"comment-modal-subtitle\">Publication sélectionnée</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"comment-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <form id=\"admin-comment-modal-form\" method=\"post\">
            <div class=\"modal-block\">
                <label class=\"pub-filter-label\" style=\"font-size:14px;\">
                    Commentaire
                    <textarea name=\"content\" class=\"pub-textarea\" rows=\"5\" placeholder=\"Votre commentaire...\" required></textarea>
                </label>
            </div>

            <div class=\"modal-actions\">
                <button type=\"button\" class=\"pub-btn-link\" data-close-modal=\"comment-modal\">
                    <i class=\"fas fa-xmark\"></i>
                    Annuler
                </button>
                <button type=\"submit\" class=\"pub-btn pub-btn-primary\">
                    <i class=\"fas fa-paper-plane\"></i>
                    Publier
                </button>
            </div>
        </form>
    </div>
</div>

<div class=\"modal-backdrop\" id=\"edit-post-modal\">
    <div class=\"pub-modal\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Modifier la publication</h3>
                <p class=\"modal-subtitle\">Modification rapide sans quitter la page.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"edit-post-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <form id=\"admin-edit-post-form\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"modal-grid\">
                <div>
                    <label class=\"pub-filter-label\" style=\"font-size:14px;\">
                        Titre
                        <input type=\"text\" name=\"titre\" id=\"edit-post-title\" class=\"pub-input\" placeholder=\"Titre du post...\" required>
                    </label>
                </div>

                <div>
                    <label class=\"pub-filter-label\" style=\"font-size:14px;\">
                        Type
                        <select name=\"type\" id=\"edit-post-type\" class=\"pub-select\" required>
                            <option value=\"Promotion\">Promotion</option>
                            <option value=\"Actualité\">Actualité</option>
                            <option value=\"Conseil\">Conseil</option>
                            <option value=\"Bon plan\">Bon plan</option>
                        </select>
                    </label>
                </div>
            </div>

            <div class=\"modal-block\">
                <label class=\"pub-filter-label\" style=\"font-size:14px;\">
                    Contenu
                    <textarea name=\"contenu\" id=\"edit-post-content\" class=\"pub-textarea\" rows=\"6\" placeholder=\"Texte de la publication...\"></textarea>
                </label>
            </div>

            <div id=\"edit-post-current-image-wrap\" class=\"modal-block\" style=\"display:none;\">
                <div class=\"pub-upload-title\">Image actuelle</div>
                <img id=\"edit-post-current-image\" class=\"pub-preview\" style=\"display:block;\" alt=\"Image actuelle\">
            </div>

            <div class=\"modal-block\">
                <div class=\"pub-upload-box\">
                    <div class=\"pub-upload-title\">📷 Changer l’image</div>
                    <div class=\"pub-upload-sub\">Choisis une nouvelle image si tu veux remplacer l’ancienne</div>

                    <input type=\"file\" name=\"imagePath\" id=\"edit-post-image-input\" class=\"pub-file\" accept=\"image/*\">
                    <div id=\"edit-post-selected-file\" class=\"pub-selected-file\">Aucun nouveau fichier sélectionné</div>
                    <img id=\"edit-post-preview\" class=\"pub-preview\" alt=\"Nouvelle image\">
                </div>
            </div>

            <div class=\"modal-actions\">
                <button type=\"button\" class=\"pub-btn-link\" data-close-modal=\"edit-post-modal\">
                    <i class=\"fas fa-xmark\"></i>
                    Annuler
                </button>
                <button type=\"submit\" class=\"pub-btn pub-btn-primary\">
                    <i class=\"fas fa-floppy-disk\"></i>
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>

<div class=\"modal-backdrop\" id=\"edit-comment-modal\">
    <div class=\"pub-modal pub-modal-small\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Modifier le commentaire</h3>
                <p class=\"modal-subtitle\">Modification rapide sans quitter la page.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"edit-comment-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <form id=\"admin-edit-comment-form\" method=\"post\">
            <div class=\"modal-block\">
                <label class=\"pub-filter-label\" style=\"font-size:14px;\">
                    Commentaire
                    <textarea name=\"content\" id=\"edit-comment-content\" class=\"pub-textarea\" rows=\"5\" placeholder=\"Modifier le commentaire...\" required></textarea>
                </label>
            </div>

            <div class=\"modal-actions\">
                <button type=\"button\" class=\"pub-btn-link\" data-close-modal=\"edit-comment-modal\">
                    <i class=\"fas fa-xmark\"></i>
                    Annuler
                </button>
                <button type=\"submit\" class=\"pub-btn pub-btn-primary\">
                    <i class=\"fas fa-floppy-disk\"></i>
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>

<div class=\"modal-backdrop\" id=\"statistics-modal\">
    <div class=\"pub-modal\" style=\"width:min(100%, 1200px); max-height:90vh;\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Statistiques avancées</h3>
                <p class=\"modal-subtitle\">Analyse détaillée des publications du front.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"statistics-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <div id=\"statistics-modal-content\" style=\"color:#dbeafe;\">
            <div style=\"padding:30px; text-align:center;\">Chargement des statistiques...</div>
        </div>
    </div>
</div>
<div class=\"modal-backdrop\" id=\"reports-modal\">
    <div class=\"pub-modal\" style=\"width:min(100%, 1100px); max-height:90vh;\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">Signalements</h3>
                <p class=\"modal-subtitle\">Liste des publications signalées par les utilisateurs.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"reports-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <div id=\"reports-modal-content\" style=\"color:#dbeafe;\">
            <div style=\"padding:30px; text-align:center;\">Chargement des signalements...</div>
        </div>
    </div>
</div>
<div class=\"modal-backdrop\" id=\"ai-optimize-modal\">
    <div class=\"pub-modal\" style=\"width:min(100%, 980px); max-height:90vh;\">
        <div class=\"modal-head\">
            <div>
                <h3 class=\"modal-title\">AI Optimize</h3>
                <p class=\"modal-subtitle\">Scan intelligent des commentaires toxiques avec Python local.</p>
            </div>
            <button type=\"button\" class=\"modal-close\" data-close-modal=\"ai-optimize-modal\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>

        <div style=\"display:flex; justify-content:flex-end; margin-bottom:18px;\">
            <button type=\"button\" class=\"pub-btn pub-btn-danger\" id=\"run-ai-optimize-btn\">
                <i class=\"fas fa-play\"></i>
                Lancer le scan
            </button>
        </div>

        <div id=\"ai-optimize-content\" style=\"color:#dbeafe;\">
            <div style=\"padding:30px; text-align:center;\">
                Clique sur <strong>Lancer le scan</strong> pour analyser les commentaires.
            </div>
        </div>
    </div>
</div>
{% endblock %}


{% block javascripts %}
<script>
    const postRows = Array.from(document.querySelectorAll('.post-row'));
    const commentsContainer = document.getElementById('comments-container');
    const commentActionBase = '{{ commentActionBase }}';
    const postQuickEditBase = '{{ postQuickEditBase }}';
    const selectedPostId = {{ selectedPostId|default(0) }};

    const selectedPostTitle = document.getElementById('selected-post-title');
    const selectedPostMeta = document.getElementById('selected-post-meta');
    const selectedPostImage = document.getElementById('selected-post-image');
    const sideEditPostBtn = document.getElementById('open-side-edit-post-modal');
    const sideCommentBtn = document.getElementById('open-side-comment-modal');

    function formatCommentAction(postId) {
        return commentActionBase.replace('/0/comment', '/' + postId + '/comment');
    }

    function formatQuickEditAction(postId) {
        return postQuickEditBase.replace('/0/quick-edit', '/' + postId + '/quick-edit');
    }

    function bindCommentEditButtons() {
        document.querySelectorAll('.open-edit-comment-modal-btn').forEach(btn => {
            btn.onclick = function () {
                const commentId = this.dataset.commentId;
                const commentContent = this.dataset.commentContent || '';
                const postId = this.dataset.postId;

                const form = document.getElementById('admin-edit-comment-form');
                const textarea = document.getElementById('edit-comment-content');

                form.action = '/admin/publications/comment/' + commentId + '/edit';
                textarea.value = commentContent;
                document.getElementById('edit-comment-modal').classList.add('is-open');

                if (postId) {
                    window.history.replaceState(null, '', '?selected=' + postId);
                }
            };
        });
    }

    function renderSelectedPost(postId) {
        const row = document.querySelector(`.post-row[data-post-id=\"\${postId}\"]`);
        if (!row) return;

        document.querySelectorAll('.post-row').forEach(r => r.classList.remove('is-selected'));
        row.classList.add('is-selected');

        const commentsData = document.getElementById(`comments-data-\${postId}`);
        if (commentsData && commentsContainer) {
            commentsContainer.innerHTML = commentsData.innerHTML;
            bindCommentEditButtons();
        }

        if (selectedPostTitle) {
            selectedPostTitle.textContent = row.dataset.postTitle || '';
        }

        if (selectedPostMeta) {
            selectedPostMeta.textContent = `\${row.dataset.postAuthor} · \${row.dataset.postType} · \${row.dataset.postDate}`;
        }

        if (selectedPostImage) {
            if (row.dataset.postImage) {
                selectedPostImage.src = row.dataset.postImage;
                selectedPostImage.style.display = 'block';
            } else {
                selectedPostImage.src = '';
                selectedPostImage.style.display = 'none';
            }
        }

        if (sideCommentBtn) {
            sideCommentBtn.dataset.postId = row.dataset.postId;
            sideCommentBtn.dataset.postTitle = row.dataset.postTitle;
        }

        if (sideEditPostBtn) {
            sideEditPostBtn.dataset.postId = row.dataset.postId;
            sideEditPostBtn.dataset.postTitle = row.dataset.postTitle;
            sideEditPostBtn.dataset.postType = row.dataset.postType;
            sideEditPostBtn.dataset.postContent = row.dataset.postContent;
            sideEditPostBtn.dataset.postImage = row.dataset.postImage;
        }
    }

    postRows.forEach(row => {
        row.addEventListener('click', (e) => {
            if (e.target.closest('button, a, form')) return;
            renderSelectedPost(row.dataset.postId);
            window.history.replaceState(null, '', `?selected=\${row.dataset.postId}`);
        });
    });

    if (selectedPostId > 0) {
        renderSelectedPost(selectedPostId);
    }

    const createPostModal = document.getElementById('create-post-modal');
const commentModal = document.getElementById('comment-modal');
const editPostModal = document.getElementById('edit-post-modal');
const editCommentModal = document.getElementById('edit-comment-modal');

const statisticsModal = document.getElementById('statistics-modal');
const statisticsModalContent = document.getElementById('statistics-modal-content');
const openStatisticsModalBtn = document.getElementById('open-statistics-modal');

const reportsModal = document.getElementById('reports-modal');
const reportsModalContent = document.getElementById('reports-modal-content');
const openReportsModalBtn = document.getElementById('open-reports-modal');

const aiOptimizeModal = document.getElementById('ai-optimize-modal');
const aiOptimizeContent = document.getElementById('ai-optimize-content');
const openAiOptimizeModalBtn = document.getElementById('open-ai-optimize-modal');
const runAiOptimizeBtn = document.getElementById('run-ai-optimize-btn');

    document.getElementById('open-create-post-modal')?.addEventListener('click', () => {
        createPostModal.classList.add('is-open');
    });

    document.querySelectorAll('[data-close-modal]').forEach(btn => {
        btn.addEventListener('click', () => {
            const modalId = btn.getAttribute('data-close-modal');
            document.getElementById(modalId)?.classList.remove('is-open');
        });
    });
 [createPostModal, commentModal, editPostModal, editCommentModal, statisticsModal, reportsModal, aiOptimizeModal].forEach(modal => {
    modal?.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('is-open');

            if (modal === statisticsModal) {
                destroyStatisticsCharts();
            }
        }
    });
});
    const adminPostImageInput = document.getElementById('admin-post-image-input');
    const adminPostSelectedFile = document.getElementById('admin-post-selected-file');
    const adminPostPreview = document.getElementById('admin-post-preview');

    adminPostImageInput?.addEventListener('change', function () {
        const file = this.files && this.files[0];

        if (!file) {
            adminPostSelectedFile.textContent = 'Aucun fichier sélectionné';
            adminPostPreview.style.display = 'none';
            adminPostPreview.src = '';
            return;
        }

        adminPostSelectedFile.textContent = file.name;

        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function (e) {
                adminPostPreview.src = e.target.result;
                adminPostPreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });

    const commentModalForm = document.getElementById('admin-comment-modal-form');
    const commentModalSubtitle = document.getElementById('comment-modal-subtitle');

    function openCommentModal(postId, postTitle) {
        if (!postId) return;
        commentModalForm.action = formatCommentAction(postId);
        commentModalSubtitle.textContent = `Publication : \${postTitle || ''}`;
        commentModal.classList.add('is-open');
    }

    document.querySelectorAll('.open-comment-modal-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            openCommentModal(btn.dataset.postId, btn.dataset.postTitle);
        });
    });

    sideCommentBtn?.addEventListener('click', function () {
        openCommentModal(this.dataset.postId, this.dataset.postTitle);
    });

    const editPostForm = document.getElementById('admin-edit-post-form');
    const editPostTitle = document.getElementById('edit-post-title');
    const editPostType = document.getElementById('edit-post-type');
    const editPostContent = document.getElementById('edit-post-content');
    const editPostCurrentImageWrap = document.getElementById('edit-post-current-image-wrap');
    const editPostCurrentImage = document.getElementById('edit-post-current-image');
    const editPostImageInput = document.getElementById('edit-post-image-input');
    const editPostSelectedFile = document.getElementById('edit-post-selected-file');
    const editPostPreview = document.getElementById('edit-post-preview');

    function openEditPostModal(postId, title, type, content, image) {
        if (!postId) return;

        editPostForm.action = formatQuickEditAction(postId);
        editPostTitle.value = title || '';
        editPostType.value = type || 'Promotion';
        editPostContent.value = content || '';

        if (image) {
            editPostCurrentImage.src = image;
            editPostCurrentImageWrap.style.display = 'block';
        } else {
            editPostCurrentImage.src = '';
            editPostCurrentImageWrap.style.display = 'none';
        }

        editPostImageInput.value = '';
        editPostSelectedFile.textContent = 'Aucun nouveau fichier sélectionné';
        editPostPreview.style.display = 'none';
        editPostPreview.src = '';

        editPostModal.classList.add('is-open');
    }

    document.querySelectorAll('.open-edit-post-modal-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            openEditPostModal(
                btn.dataset.postId,
                btn.dataset.postTitle,
                btn.dataset.postType,
                btn.dataset.postContent,
                btn.dataset.postImage
            );
        });
    });

    sideEditPostBtn?.addEventListener('click', function () {
        openEditPostModal(
            this.dataset.postId,
            this.dataset.postTitle,
            this.dataset.postType,
            this.dataset.postContent,
            this.dataset.postImage
        );
    });

    editPostImageInput?.addEventListener('change', function () {
        const file = this.files && this.files[0];

        if (!file) {
            editPostSelectedFile.textContent = 'Aucun nouveau fichier sélectionné';
            editPostPreview.style.display = 'none';
            editPostPreview.src = '';
            return;
        }

        editPostSelectedFile.textContent = file.name;

        if (file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function (e) {
                editPostPreview.src = e.target.result;
                editPostPreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });

    let statisticsCharts = [];

function destroyStatisticsCharts() {
    statisticsCharts.forEach(chart => {
        if (chart) {
            chart.destroy();
        }
    });
    statisticsCharts = [];
}

function animateCounters() {
    document.querySelectorAll('#statistics-modal-content [data-counter]').forEach(counter => {
        const target = parseFloat(counter.getAttribute('data-counter')) || 0;
        const isFloat = String(target).includes('.');
        let current = 0;
        const increment = target / 40;

        const updateCounter = () => {
            current += increment;

            if (current >= target) {
                counter.textContent = isFloat ? target.toFixed(2) : Math.round(target);
                return;
            }

            counter.textContent = isFloat ? current.toFixed(2) : Math.round(current);
            requestAnimationFrame(updateCounter);
        };

        updateCounter();
    });
}

async function ensureChartJsLoaded() {
    if (window.Chart) {
        return;
    }

    await new Promise((resolve, reject) => {
        const script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/chart.js';
        script.onload = resolve;
        script.onerror = reject;
        document.head.appendChild(script);
    });
}

function parseStatsJson(id) {
    const el = document.getElementById(id);
    if (!el) return { labels: [], values: [] };

    try {
        return JSON.parse(el.textContent);
    } catch (e) {
        return { labels: [], values: [] };
    }
}

async function initStatisticsCharts() {
    await ensureChartJsLoaded();
    destroyStatisticsCharts();
    animateCounters();

    const monthly = parseStatsJson('stats-monthly-data');
    const types = parseStatsJson('stats-type-data');
    const liked = parseStatsJson('stats-liked-data');
    const commented = parseStatsJson('stats-commented-data');
    const performance = parseStatsJson('stats-performance-data');
    
    

    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
        animation: {
            duration: 1400,
            easing: 'easeOutQuart'
        },
        plugins: {
            legend: {
                labels: {
                    color: '#dbeafe',
                    font: {
                        family: 'Poppins'
                    }
                }
            }
        },
        scales: {
            x: {
                ticks: { color: '#a8bfdc' },
                grid: { color: 'rgba(255,255,255,0.05)' }
            },
            y: {
                ticks: { color: '#a8bfdc' },
                grid: { color: 'rgba(255,255,255,0.05)' }
            }
        }
    };

    const monthlyCtx = document.getElementById('monthlyPostsChart');
    if (monthlyCtx) {
        statisticsCharts.push(new Chart(monthlyCtx, {
            type: 'line',
            data: {
                labels: monthly.labels,
                datasets: [{
                    label: 'Publications',
                    data: monthly.values,
                    tension: 0.4,
                    fill: true,
                    borderWidth: 3,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: commonOptions
        }));
    }

    const typeCtx = document.getElementById('postsTypeChart');
    if (typeCtx) {
        statisticsCharts.push(new Chart(typeCtx, {
            type: 'doughnut',
            data: {
                labels: types.labels,
                datasets: [{
                    data: types.values,
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 1400,
                    easing: 'easeOutExpo'
                },
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#dbeafe',
                            font: {
                                family: 'Poppins'
                            }
                        }
                    }
                }
            }
        }));
    }

    const likedCtx = document.getElementById('topLikedChart');
    if (likedCtx) {
        statisticsCharts.push(new Chart(likedCtx, {
            type: 'bar',
            data: {
                labels: liked.labels,
                datasets: [{
                    label: 'Likes',
                    data: liked.values,
                    borderRadius: 10
                }]
            },
            options: commonOptions
        }));
    }

    const commentedCtx = document.getElementById('topCommentedChart');
    if (commentedCtx) {
        statisticsCharts.push(new Chart(commentedCtx, {
            type: 'bar',
            data: {
                labels: commented.labels,
                datasets: [{
                    label: 'Commentaires',
                    data: commented.values,
                    borderRadius: 10
                }]
            },
            options: commonOptions
        }));
    }

    const radarCtx = document.getElementById('performanceRadarChart');
    if (radarCtx) {
        statisticsCharts.push(new Chart(radarCtx, {
            type: 'radar',
            data: {
                labels: performance.labels,
                datasets: [{
                    label: 'Score performance',
                    data: performance.values,
                    fill: true,
                    borderWidth: 2,
                    pointRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 1400,
                    easing: 'easeOutBack'
                },
                plugins: {
                    legend: {
                        labels: {
                            color: '#dbeafe'
                        }
                    }
                },
                scales: {
                    r: {
                        angleLines: { color: 'rgba(255,255,255,0.08)' },
                        grid: { color: 'rgba(255,255,255,0.08)' },
                        pointLabels: { color: '#dbeafe' },
                        ticks: {
                            color: '#dbeafe',
                            backdropColor: 'transparent'
                        }
                    }
                }
            }
        }));
    }
}

openStatisticsModalBtn?.addEventListener('click', async () => {
    statisticsModal.classList.add('is-open');
    statisticsModalContent.innerHTML = '<div style=\"padding:30px; text-align:center; color:#dbeafe;\">Chargement des statistiques...</div>';

    try {
        const response = await fetch('{{ path('admin_publication_statistics') }}', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        });

        const html = await response.text();
        statisticsModalContent.innerHTML = html;

        if (!response.ok) {
            return;
        }

        await initStatisticsCharts();
    } catch (error) {
        statisticsModalContent.innerHTML = '<div style=\"padding:30px; text-align:center; color:#ff8c8c;\">Impossible de charger les statistiques.</div>';
        console.error(error);
    }
});
document.querySelectorAll('[data-close-modal=\"statistics-modal\"]').forEach(btn => {
    btn.addEventListener('click', () => {
        destroyStatisticsCharts();
    });
});
openReportsModalBtn?.addEventListener('click', async () => {
    reportsModal.classList.add('is-open');
    reportsModalContent.innerHTML = '<div style=\"padding:30px; text-align:center; color:#dbeafe;\">Chargement des signalements...</div>';

    try {
        const response = await fetch('/admin/publications/signalements', {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        });

        const html = await response.text();
        reportsModalContent.innerHTML = html;

        if (!response.ok) {
            return;
        }

        bindReportActionButtons();
    } catch (error) {
        reportsModalContent.innerHTML = '<div style=\"padding:30px; text-align:center; color:#ff8c8c;\">Impossible de charger les signalements.</div>';
        console.error(error);
    }
});

function bindReportActionButtons() {
    document.querySelectorAll('.mark-report-treated-btn').forEach(btn => {
        btn.addEventListener('click', async () => {
            const reportId = btn.dataset.reportId;

            try {
                const response = await fetch('/admin/publications/signalement/' + reportId + '/traiter', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                if (response.ok) {
                    openReportsModalBtn?.click();
                } else {
                    alert(data.error || 'Erreur lors du traitement.');
                }
            } catch (error) {
                console.error(error);
                alert('Erreur serveur.');
            }
        });
    });

    document.querySelectorAll('.delete-report-btn').forEach(btn => {
        btn.addEventListener('click', async () => {
            const reportId = btn.dataset.reportId;

            if (!confirm('Supprimer ce signalement ?')) {
                return;
            }

            try {
                const response = await fetch('/admin/publications/signalement/' + reportId + '/delete', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                if (response.ok) {
                    openReportsModalBtn?.click();
                } else {
                    alert(data.error || 'Erreur lors de la suppression.');
                }
            } catch (error) {
                console.error(error);
                alert('Erreur serveur.');
            }
        });
    });
}

    bindCommentEditButtons();
    openAiOptimizeModalBtn?.addEventListener('click', () => {
    aiOptimizeModal.classList.add('is-open');
    aiOptimizeContent.innerHTML = `
        <div style=\"padding:30px; text-align:center;\">
            Clique sur <strong>Lancer le scan</strong> pour analyser les commentaires.
        </div>
    `;
});
function escapeHtml(value) {
    return String(value ?? '')
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/\"/g, '&quot;')
        .replace(/'/g, '&#039;');
}

runAiOptimizeBtn?.addEventListener('click', async () => {
    aiOptimizeContent.innerHTML = `
        <div style=\"padding:30px; text-align:center; color:#dbeafe;\">
            <div style=\"font-size:18px; font-weight:700; margin-bottom:10px;\">Analyse en cours...</div>
            <div>Le moteur Python local scanne tous les commentaires.</div>
        </div>
    `;

    try {
        const response = await fetch('/admin/publications/ai-optimize-comments', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        });

        const rawText = await response.text();

        let data;
        try {
            data = JSON.parse(rawText);
        } catch (e) {
            aiOptimizeContent.innerHTML = `
                <div style=\"padding:30px; text-align:center; color:#ff8c8c;\">
                    <div style=\"font-size:18px; font-weight:700; margin-bottom:12px;\">
                        Erreur serveur pendant le scan IA.
                    </div>
                    <div style=\"margin-bottom:10px;\">
                        Le backend a renvoyé du HTML au lieu de JSON.
                    </div>
                    <div style=\"white-space:pre-wrap; font-size:13px; color:#ffd0d0; text-align:left; background:rgba(255,255,255,0.04); padding:12px; border-radius:12px; max-height:260px; overflow:auto;\">
                        \${escapeHtml(rawText)}
                    </div>
                </div>
            `;
            return;
        }

        if (!response.ok) {
            aiOptimizeContent.innerHTML = `
                <div style=\"padding:30px; text-align:center; color:#ff8c8c;\">
                    <div style=\"font-size:18px; font-weight:700; margin-bottom:12px;\">
                        \${escapeHtml(data.error || 'Erreur pendant le scan IA.')}
                    </div>
                    <div style=\"white-space:pre-wrap; font-size:13px; color:#ffd0d0;\">
                        \${escapeHtml(data.details || 'Aucun détail.')}
                    </div>
                </div>
            `;
            return;
        }

        const details = Array.isArray(data.details) ? data.details : [];

        aiOptimizeContent.innerHTML = `
            <div style=\"display:grid; grid-template-columns:repeat(4,1fr); gap:16px; margin-bottom:24px;\">
                <div class=\"side-block\">
                    <div style=\"font-size:13px; color:#a8bfdc;\">Total scanné</div>
                    <div style=\"font-size:28px; font-weight:800; color:#fff;\">\${data.total}</div>
                </div>
                <div class=\"side-block\">
                    <div style=\"font-size:13px; color:#a8bfdc;\">Toxiques détectés</div>
                    <div style=\"font-size:28px; font-weight:800; color:#ff6b7d;\">\${data.flaggedCount}</div>
                </div>
                <div class=\"side-block\">
                    <div style=\"font-size:13px; color:#a8bfdc;\">Commentaires non toxiques</div>
                    <div style=\"font-size:28px; font-weight:800; color:#34d399;\">\${data.kept}</div>
                </div>
                <div class=\"side-block\">
                    <div style=\"font-size:13px; color:#a8bfdc;\">Seuil toxicité</div>
                    <div style=\"font-size:28px; font-weight:800; color:#2ea8ff;\">\${data.threshold_toxic ?? '0.60'}</div>
                </div>
            </div>

            <div class=\"side-block\">
                <h3 class=\"side-title\" style=\"margin-bottom:14px;\">Commentaires détectés par l’IA</h3>
                \${
                    details.length === 0
                        ? '<div class=\"comment-empty\">Aucun commentaire toxique détecté.</div>'
                        : `
                            <div style=\"display:grid; gap:14px;\">
                                \${details.map(item => `
                                    <div class=\"comment-item ai-flagged-comment\" data-comment-id=\"\${item.id}\">
                                        <div class=\"comment-head\" style=\"flex-wrap:wrap;\">
                                            <span><strong>ID commentaire :</strong> #\${item.id}</span>
                                            <span><strong>Score :</strong> \${(item.score * 100).toFixed(1)}%</span>
                                        </div>

                                        <div style=\"font-size:13px; color:#a8bfdc; margin-bottom:8px;\">
                                            <strong>Auteur :</strong> \${escapeHtml(item.author || 'Inconnu')}<br>
                                            <strong>Post :</strong> \${escapeHtml(item.postTitle || 'Post inconnu')}\${item.postId ? ` (#\${item.postId})` : ''}<br>
                                            <strong>Date :</strong> \${escapeHtml(item.createdAt || '-')}<br>
                                            <strong>Label :</strong> \${escapeHtml(item.label || 'toxic')}
                                        </div>

                                        <p class=\"comment-body\">\${escapeHtml(item.content ?? '')}</p>

                                        <div class=\"comment-actions\">
                                            <button
                                                type=\"button\"
                                                class=\"pub-btn pub-btn-danger ai-delete-comment-btn\"
                                                data-comment-id=\"\${item.id}\"
                                            >
                                                <i class=\"fas fa-trash\"></i>
                                                Supprimer
                                            </button>
                                        </div>
                                    </div>
                                `).join('')}
                            </div>
                        `
                }
            </div>
        `;

        bindAiDeleteButtons();

    } catch (error) {
        console.error('Erreur fetch AI:', error);
        aiOptimizeContent.innerHTML = `
            <div style=\"padding:30px; text-align:center; color:#ff8c8c;\">
                Erreur serveur pendant le scan IA.<br><br>
                <small>\${escapeHtml(error.message)}</small>
            </div>
        `;
    }
});
function bindAiDeleteButtons() {
    document.querySelectorAll('.ai-delete-comment-btn').forEach(btn => {
        btn.addEventListener('click', async () => {
            const commentId = btn.dataset.commentId;

            if (!commentId) {
                return;
            }

            if (!confirm('Supprimer ce commentaire détecté comme toxique ?')) {
                return;
            }

            btn.disabled = true;
            btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Suppression...';

            try {
                const response = await fetch('/admin/publications/ai-delete-comment/' + commentId, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                if (!response.ok) {
                    alert(data.error || 'Erreur lors de la suppression.');
                    btn.disabled = false;
                    btn.innerHTML = '<i class=\"fas fa-trash\"></i> Supprimer';
                    return;
                }

                const card = document.querySelector('.ai-flagged-comment[data-comment-id=\"' + commentId + '\"]');
                if (card) {
                    card.remove();
                }
            } catch (error) {
                console.error(error);
                alert('Erreur serveur lors de la suppression.');
                btn.disabled = false;
                btn.innerHTML = '<i class=\"fas fa-trash\"></i> Supprimer';
            }
        });
    });
}
</script>
{% endblock %}", "admin/posts/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\posts\\index.html.twig");
    }
}
