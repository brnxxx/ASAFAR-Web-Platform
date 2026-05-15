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

/* reclamation/mes-reclamations.html.twig */
class __TwigTemplate_a3bcc70e71efca98e20fb026b255076e extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/mes-reclamations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/mes-reclamations.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Mes Réclamations — ASAFAR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
/* ══════════════════════════════════════════════
   MES RÉCLAMATIONS PAGE — Style ASAFAR
══════════════════════════════════════════════ */
.mes-rec-wrapper {
    min-height: 100vh;
    padding: 110px 30px 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
}

/* ── Hero ── */
.mes-rec-hero {
    text-align: center;
    max-width: 700px;
    animation: fadeInUp 0.7s ease-out;
}
.mes-rec-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: 48px;
    font-weight: 800;
    background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    letter-spacing: 2px;
    margin-bottom: 14px;
}
.mes-rec-hero p {
    font-size: 17px;
    color: rgba(244,248,252,0.75);
    line-height: 1.7;
    font-weight: 300;
}

/* ── Stats Bar ── */
.stats-bar {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
    max-width: 1100px;
    animation: fadeInUp 0.75s ease-out 0.1s both;
}
.stat-card {
    background: rgba(255,255,255,0.04);
    backdrop-filter: blur(14px);
    border: 1.5px solid rgba(255,193,7,0.18);
    border-radius: 18px;
    padding: 20px 30px;
    text-align: center;
    flex: 1;
    min-width: 130px;
    transition: all 0.35s cubic-bezier(0.34,1.56,0.64,1);
}
.stat-card:hover {
    border-color: rgba(255,193,7,0.45);
    transform: translateY(-4px);
    box-shadow: 0 12px 35px rgba(255,193,7,0.12);
}
.stat-card .stat-num {
    font-size: 32px;
    font-weight: 800;
    background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1;
    margin-bottom: 6px;
}
.stat-card .stat-label {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: rgba(244,248,252,0.5);
}

/* ── Toolbar ── */
.rec-toolbar {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    align-items: center;
    width: 100%;
    max-width: 1100px;
    animation: fadeInUp 0.8s ease-out 0.15s both;
}
.rec-search-input {
    flex: 1;
    min-width: 200px;
    background: rgba(255,255,255,0.05);
    border: 1.5px solid rgba(255,193,7,0.2);
    border-radius: 12px;
    color: #F4F8FC;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    padding: 11px 16px 11px 42px;
    outline: none;
    transition: all 0.35s ease;
    box-sizing: border-box;
}
.rec-search-input:focus {
    border-color: #FFC107;
    background: rgba(255,193,7,0.05);
    box-shadow: 0 0 0 3px rgba(255,193,7,0.12);
}
.rec-search-input::placeholder { color: rgba(244,248,252,0.3); }
.rec-search-wrapper {
    position: relative;
    flex: 1;
    min-width: 200px;
}
.rec-search-wrapper i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255,193,7,0.5);
    font-size: 14px;
    pointer-events: none;
}
.rec-filter-select {
    background: rgba(255,255,255,0.05);
    border: 1.5px solid rgba(255,193,7,0.2);
    border-radius: 12px;
    color: #F4F8FC;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    padding: 11px 16px;
    outline: none;
    cursor: pointer;
    transition: all 0.35s ease;
}
.rec-filter-select:focus {
    border-color: #FFC107;
}
.rec-filter-select option { background: #0B2D4A; color: #F4F8FC; }
.rec-new-btn {
    padding: 11px 22px;
    background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
    color: #0B2D4A;
    border: none;
    border-radius: 12px;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.4s cubic-bezier(0.34,1.56,0.64,1);
    box-shadow: 0 4px 16px rgba(255,193,7,0.25);
    white-space: nowrap;
}
.rec-new-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 28px rgba(255,193,7,0.4);
}

/* ── Table Card ── */
.rec-table-card {
    width: 100%;
    max-width: 1100px;
    background: rgba(255,255,255,0.04);
    backdrop-filter: blur(14px);
    border: 1.5px solid rgba(255,193,7,0.18);
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0,0,0,0.25);
    animation: fadeInUp 0.85s ease-out 0.2s both;
}
.rec-table {
    width: 100%;
    border-collapse: collapse;
}
.rec-table thead tr {
    background: rgba(255,193,7,0.08);
    border-bottom: 1px solid rgba(255,193,7,0.2);
}
.rec-table thead th {
    padding: 16px 20px;
    text-align: left;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: rgba(255,193,7,0.8);
    white-space: nowrap;
}
.rec-table tbody tr {
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: all 0.3s ease;
    cursor: pointer;
}
.rec-table tbody tr:last-child { border-bottom: none; }
.rec-table tbody tr:hover {
    background: rgba(255,193,7,0.04);
    transform: translateX(4px);
}
.rec-table td {
    padding: 16px 20px;
    font-size: 13px;
    color: rgba(244,248,252,0.85);
    vertical-align: middle;
}
.rec-table td .rec-sujet-text {
    font-weight: 600;
    color: #F4F8FC;
    font-size: 14px;
    margin-bottom: 4px;
    line-height: 1.3;
}
.rec-table td .rec-desc-preview {
    font-size: 12px;
    color: rgba(244,248,252,0.45);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 280px;
}

/* ── Type icons ── */
.type-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 11px;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 20px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1);
    color: rgba(244,248,252,0.7);
    white-space: nowrap;
}
.type-pill i { font-size: 10px; color: rgba(255,193,7,0.6); }

/* ── Badges ── */
.rec-badge {
    font-size: 10px;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 20px;
    letter-spacing: 0.8px;
    white-space: nowrap;
    display: inline-block;
}
.badge-EN_ATTENTE { background: rgba(255,193,7,0.15); color: #FFC107; border: 1px solid rgba(255,193,7,0.3); }
.badge-TRAITEE    { background: rgba(76,175,80,0.15);  color: #4CAF50; border: 1px solid rgba(76,175,80,0.3); }
.badge-REFUSEE    { background: rgba(255,82,82,0.15);  color: #FF5252; border: 1px solid rgba(255,82,82,0.3); }

/* ── Priorité ── */
.prio-badge {
    font-size: 10px;
    font-weight: 700;
    padding: 3px 9px;
    border-radius: 20px;
    letter-spacing: 0.5px;
    white-space: nowrap;
    display: inline-block;
}
.prio-URGENT { background: rgba(255,82,82,0.15);  color: #FF5252; border: 1px solid rgba(255,82,82,0.3); }
.prio-NORMAL { background: rgba(33,150,243,0.15); color: #64B5F6; border: 1px solid rgba(33,150,243,0.3); }
.prio-FAIBLE { background: rgba(76,175,80,0.12);  color: #81C784; border: 1px solid rgba(76,175,80,0.25); }

/* ── Action button ── */
.btn-voir {
    background: rgba(255,193,7,0.1);
    border: 1px solid rgba(255,193,7,0.3);
    border-radius: 10px;
    color: #FFC107;
    font-size: 12px;
    font-family: 'Poppins', sans-serif;
    padding: 7px 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
}
.btn-voir:hover {
    background: rgba(255,193,7,0.2);
    border-color: #FFC107;
    transform: scale(1.05);
}

/* ── Empty ── */
.rec-empty-state {
    text-align: center;
    padding: 60px 20px;
    color: rgba(244,248,252,0.4);
}
.rec-empty-state i {
    font-size: 52px;
    color: rgba(255,193,7,0.2);
    margin-bottom: 16px;
    display: block;
}
.rec-empty-state h3 {
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    color: rgba(244,248,252,0.5);
    margin-bottom: 8px;
}
.rec-empty-state p { font-size: 14px; }

/* ── MODAL ── */
.modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.75);
    z-index: 9999;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(6px);
}
.modal-overlay.open { display: flex; }
.modal-box {
    background: linear-gradient(145deg, #0d3a5c 0%, #0B2D4A 100%);
    border: 1.5px solid rgba(255,193,7,0.3);
    border-radius: 24px;
    padding: 36px;
    width: 560px;
    max-width: 92%;
    max-height: 88vh;
    overflow-y: auto;
    position: relative;
    box-shadow: 0 30px 80px rgba(0,0,0,0.5);
    animation: modalIn 0.4s cubic-bezier(0.34,1.56,0.64,1);
}
@keyframes modalIn {
    from { opacity:0; transform:translateY(30px) scale(0.96); }
    to   { opacity:1; transform:translateY(0) scale(1); }
}
.modal-box::-webkit-scrollbar { width: 4px; }
.modal-box::-webkit-scrollbar-thumb { background: rgba(255,193,7,0.3); border-radius: 4px; }
.modal-close {
    position: absolute;
    top: 16px;
    right: 20px;
    background: none;
    border: none;
    color: rgba(244,248,252,0.5);
    font-size: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    line-height: 1;
    padding: 4px;
}
.modal-close:hover { color: #FF5252; transform: rotate(90deg) scale(1.2); }
.modal-title {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    font-weight: 700;
    color: #FFC107;
    margin-bottom: 20px;
    padding-right: 30px;
    line-height: 1.3;
}
.modal-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 20px;
}
.modal-section-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: rgba(255,193,7,0.6);
    margin-bottom: 8px;
    margin-top: 20px;
}
.modal-desc {
    font-size: 14px;
    color: rgba(244,248,252,0.8);
    line-height: 1.7;
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 12px;
    padding: 14px 16px;
}
.modal-reponse {
    background: rgba(76,175,80,0.07);
    border-left: 3px solid #4CAF50;
    border-radius: 0 12px 12px 0;
    padding: 14px 16px;
    font-size: 14px;
    color: rgba(244,248,252,0.8);
    line-height: 1.7;
    white-space: pre-line;
}
.modal-no-reponse {
    font-size: 13px;
    color: rgba(244,248,252,0.35);
    font-style: italic;
    padding: 10px 0;
}
.btn-satisfait, .btn-insatisfait {
    border: none;
    background: transparent;
    font-size: 16px;
    cursor: pointer;
    transition: 0.2s;
}

.btn-satisfait:hover {
    transform: scale(1.2);
    color: #4CAF50;
}

.btn-insatisfait:hover {
    transform: scale(1.2);
    color: #FF5252;
}
.modal-satisf-area {
    margin-top: 20px;
    padding: 16px;
    background: rgba(255,255,255,0.03);
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,0.07);
}
.modal-satisf-area p {
    font-size: 13px;
    color: rgba(244,248,252,0.6);
    margin-bottom: 12px;
}
.satisf-btns { display: flex; gap: 12px; }
.btn-satisfait {
    flex: 1;
    padding: 10px;
    border: 1.5px solid rgba(76,175,80,0.4);
    background: rgba(76,175,80,0.1);
    color: #4CAF50;
    border-radius: 12px;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}
.btn-satisfait:hover {
    background: rgba(76,175,80,0.25);
    transform: translateY(-2px);
}
.btn-insatisfait {
    flex: 1;
    padding: 10px;
    border: 1.5px solid rgba(255,82,82,0.4);
    background: rgba(255,82,82,0.1);
    color: #FF5252;
    border-radius: 12px;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}
.btn-insatisfait:hover {
    background: rgba(255,82,82,0.25);
    transform: translateY(-2px);
}
.satisf-result {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    padding: 10px 14px;
    border-radius: 10px;
}
.satisf-ok  { background: rgba(76,175,80,0.1);  color: #4CAF50; }
.satisf-ko  { background: rgba(255,82,82,0.1);  color: #FF5252; }

/* ── Pagination ── */
.rec-pagination {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 20px;
    border-top: 1px solid rgba(255,255,255,0.05);
}
.page-btn {
    width: 36px;
    height: 36px;
    background: none;
    border: 1px solid rgba(255,193,7,0.2);
    border-radius: 10px;
    color: rgba(244,248,252,0.6);
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}
.page-btn:hover, .page-btn.active {
    background: rgba(255,193,7,0.15);
    border-color: #FFC107;
    color: #FFC107;
}
.page-btn:disabled {
    opacity: 0.3;
    cursor: not-allowed;
}

/* ── Toast ── */
.rec-toast {
    position: fixed;
    bottom: 30px;
    right: 30px;
    padding: 16px 24px;
    border-radius: 14px;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 500;
    color: white;
    z-index: 99999;
    transform: translateY(100px);
    opacity: 0;
    transition: all 0.5s cubic-bezier(0.34,1.56,0.64,1);
    max-width: 380px;
    display: flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.3);
}
.rec-toast.show   { transform: translateY(0); opacity: 1; }
.rec-toast.success { background: linear-gradient(135deg, #1a6b3a, #2d9a52); }
.rec-toast.error   { background: linear-gradient(135deg, #7a1a1a, #c62828); }

@keyframes fadeInUp {
    from { opacity:0; transform: translateY(30px); }
    to   { opacity:1; transform: translateY(0); }
}
</style>

<div class=\"mes-rec-wrapper\">

    ";
        // line 554
        yield "    <div class=\"mes-rec-hero\">
        <h1>
            <i class=\"fas fa-history\" style=\"font-size:38px; display:block; margin-bottom:12px;
               background: linear-gradient(135deg,#FFC107,#FF8F00);
               -webkit-background-clip:text; -webkit-text-fill-color:transparent;\"></i>
            Mes Réclamations
        </h1>
        <p>Suivez l'état de toutes vos réclamations en temps réel.<br>
           Consultez les réponses de notre équipe et donnez votre avis.</p>
    </div>

    ";
        // line 566
        yield "    <div class=\"stats-bar\" id=\"statsBar\">
        <div class=\"stat-card\">
            <div class=\"stat-num\" id=\"statTotal\">—</div>
            <div class=\"stat-label\">Total</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-num\" style=\"background: linear-gradient(135deg,#FFC107,#FF8F00); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;\" id=\"statAttente\">—</div>
            <div class=\"stat-label\">En attente</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-num\" style=\"background: linear-gradient(135deg,#4CAF50,#388E3C); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;\" id=\"statTraitee\">—</div>
            <div class=\"stat-label\">Traitées</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-num\" style=\"background: linear-gradient(135deg,#FF5252,#C62828); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;\" id=\"statRefusee\">—</div>
            <div class=\"stat-label\">Refusées</div>
        </div>
    </div>

    ";
        // line 586
        yield "    <div class=\"rec-toolbar\">
        <div class=\"rec-search-wrapper\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" class=\"rec-search-input\" id=\"searchInput\"
                   placeholder=\"Rechercher par sujet...\"
                   oninput=\"filterTable()\">
        </div>
        <select class=\"rec-filter-select\" id=\"filterStatut\" onchange=\"filterTable()\">
            <option value=\"\">Tous les statuts</option>
            <option value=\"EN_ATTENTE\">En attente</option>
            <option value=\"TRAITEE\">Traitée</option>
            <option value=\"REFUSEE\">Refusée</option>
        </select>
        <select class=\"rec-filter-select\" id=\"filterType\" onchange=\"filterTable()\">
            <option value=\"\">Tous les types</option>
            <option value=\"TRANSPORT\">Transport</option>
            <option value=\"HEBERGEMENT\">Hébergement</option>
            <option value=\"LOISIR\">Excursion</option>
        </select>
        <a href=\"";
        // line 605
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        yield "\" class=\"rec-new-btn\">
            <i class=\"fas fa-plus\"></i> Nouvelle réclamation
        </a>
    </div>

    ";
        // line 611
        yield "    <div class=\"rec-table-card\">
        <div id=\"tableContent\">
            <div class=\"rec-empty-state\">
                <i class=\"fas fa-circle-notch fa-spin\" style=\"color:rgba(255,193,7,0.4);\"></i>
                <p>Chargement de vos réclamations...</p>
            </div>
        </div>
    </div>

</div>

";
        // line 623
        yield "<div class=\"modal-overlay\" id=\"detailModal\">
    <div class=\"modal-box\">
        <button class=\"modal-close\" onclick=\"closeModal()\">
            <i class=\"fas fa-times\"></i>
        </button>
        <div class=\"modal-title\" id=\"mSujet\">—</div>
        <div class=\"modal-meta\" id=\"mMeta\"></div>

        <div class=\"modal-section-label\"><i class=\"fas fa-align-left\" style=\"margin-right:6px;\"></i>Description</div>
        <div class=\"modal-desc\" id=\"mDesc\">—</div>

        <div class=\"modal-section-label\"><i class=\"fas fa-reply\" style=\"margin-right:6px;\"></i>Réponse de l'équipe</div>
        <div id=\"mReponse\"></div>

        <div id=\"mSatisf\"></div>
    </div>
</div>

";
        // line 642
        yield "<div class=\"rec-toast\" id=\"toast\">
    <i id=\"toastIcon\" class=\"fas fa-check-circle\"></i>
    <span id=\"toastMsg\"></span>
</div>

<script>
// ══════════════════════════════════════════════
//  DONNÉES
// ══════════════════════════════════════════════
let allReclamations = [];
let filtered        = [];
const PER_PAGE      = 8;
let currentPage     = 1;
let currentRec      = null;

const TYPE_ICONS = {
    TRANSPORT:   'fa-plane',
    HEBERGEMENT: 'fa-hotel',
    LOISIR:      'fa-compass',
};

// ══════════════════════════════════════════════
//  INIT
// ══════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', function() {
    loadReclamations();
});

function loadReclamations() {
    fetch('/reclamation/mes-reclamations', {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(res => {
        if (!res.ok) {
            throw new Error(\"Erreur HTTP \" + res.status);
        }
        return res.json();
    })
    .then(data => {
        console.log(\"DATA =\", data);

        allReclamations = data;
        updateStats();
        filterTable();
    })
    .catch(err => {
        console.error(err);

        document.getElementById('tableContent').innerHTML = `
            <div class=\"rec-empty-state\">
                <i class=\"fas fa-exclamation-triangle\"></i>
                <h3>Erreur de chargement</h3>
                <p>Impossible de récupérer vos réclamations</p>
            </div>`;
    });
}

// ══════════════════════════════════════════════
//  STATS
// ══════════════════════════════════════════════
function updateStats() {
    document.getElementById('statTotal').textContent   = allReclamations.length;
    document.getElementById('statAttente').textContent = allReclamations.filter(r => r.statut === 'EN_ATTENTE').length;
    document.getElementById('statTraitee').textContent = allReclamations.filter(r => r.statut === 'TRAITEE').length;
    document.getElementById('statRefusee').textContent = allReclamations.filter(r => r.statut === 'REFUSEE').length;
}

// ══════════════════════════════════════════════
//  FILTRE + RENDU
// ══════════════════════════════════════════════
function filterTable() {
    const search = document.getElementById('searchInput').value.toLowerCase();
    const statut = document.getElementById('filterStatut').value;
    const type   = document.getElementById('filterType').value;

    filtered = allReclamations.filter(r => {
const matchSearch =
    !search ||
    r.sujet.toLowerCase().includes(search) ||
    (r.type && r.type.toLowerCase().includes(search)) ||
    (r.statut && r.statut.toLowerCase().includes(search)) ||
    (r.description && r.description.toLowerCase().includes(search));
            const matchStatut = !statut || r.statut === statut;
        const matchType   = !type   || r.type  === type;
        return matchSearch && matchStatut && matchType;
    });

    currentPage = 1;
    renderTable();
}

function renderTable() {
    const content = document.getElementById('tableContent');

    if (!filtered.length) {
        content.innerHTML = `
            <div class=\"rec-empty-state\">
                <i class=\"fas fa-inbox\"></i>
                <h3>Aucune réclamation trouvée</h3>
                <p>Essayez de modifier vos filtres ou déposez une nouvelle réclamation.</p>
            </div>`;
        return;
    }

    const totalPages = Math.ceil(filtered.length / PER_PAGE);
    const page       = filtered.slice((currentPage - 1) * PER_PAGE, currentPage * PER_PAGE);

    let rows = page.map(r => `
        <tr onclick=\"openModal(\${r.id})\">
            <td>
                <div class=\"rec-sujet-text\">\${escHtml(r.sujet)}</div>
            </td>
            <td>
                <span class=\"type-pill\">
                    <i class=\"fas \${TYPE_ICONS[r.type] || 'fa-tag'}\"></i>
                    \${r.type}
                </span>
            </td>
            <td>
                <span class=\"rec-badge badge-\${r.statut}\">\${r.statut.replace('_', ' ')}</span>
            </td>
            <td>
                <span class=\"prio-badge prio-\${r.priorite || 'NORMAL'}\">\${r.priorite || 'NORMAL'}</span>
            </td>
            <td style=\"color:rgba(244,248,252,0.5); font-size:12px; white-space:nowrap;\">
                <i class=\"fas fa-calendar-alt\" style=\"color:rgba(255,193,7,0.4); margin-right:5px;\"></i>
                \${r.date}
            </td>
            <td>
                \${r.reponse
                    ? `<span style=\"font-size:11px; color:#4CAF50;\"><i class=\"fas fa-check-circle\"></i> Répondu</span>`
                    : `<span style=\"font-size:11px; color:rgba(244,248,252,0.3);\"><i class=\"fas fa-clock\"></i> En cours</span>`}
            </td>
            <td>
    \${
        r.statut !== 'TRAITEE'
        ? `<span style=\"color:rgba(244,248,252,0.3); font-size:11px;\">—</span>`
        : r.satisfait === true
            ? `<span style=\"color:#4CAF50;\"><i class=\"fas fa-thumbs-up\"></i> Satisfait</span>`
        : r.satisfait === false
            ? `<span style=\"color:#FF5252;\"><i class=\"fas fa-thumbs-down\"></i> Insatisfait</span>`
        : `
            <button class=\"btn-satisfait\" onclick=\"event.stopPropagation(); setSatisfait(\${r.id}, true)\">
                👍
            </button>
            <button class=\"btn-insatisfait\" onclick=\"event.stopPropagation(); setSatisfait(\${r.id}, false)\">
                👎
            </button>
        `
    }
</td>
            <td>
                <button class=\"btn-voir\" onclick=\"event.stopPropagation(); openModal(\${r.id})\">
                    <i class=\"fas fa-eye\"></i> Voir
                </button>
            </td>
        </tr>
    `).join('');

    let paginationHTML = '';
    if (totalPages > 1) {
        let btns = '';
        btns += `<button class=\"page-btn\" onclick=\"goPage(\${currentPage - 1})\" \${currentPage === 1 ? 'disabled' : ''}>
            <i class=\"fas fa-chevron-left\"></i>
        </button>`;
        for (let i = 1; i <= totalPages; i++) {
            btns += `<button class=\"page-btn \${i === currentPage ? 'active' : ''}\" onclick=\"goPage(\${i})\">\${i}</button>`;
        }
        btns += `<button class=\"page-btn\" onclick=\"goPage(\${currentPage + 1})\" \${currentPage === totalPages ? 'disabled' : ''}>
            <i class=\"fas fa-chevron-right\"></i>
        </button>`;
        paginationHTML = `<div class=\"rec-pagination\">\${btns}</div>`;
    }

    content.innerHTML = `
        <table class=\"rec-table\">
            <thead>
                <tr>
                    <th>Sujet</th>
                    <th>Type</th>
                    <th>Statut</th>
                    <th>Priorité</th>
                    <th>Date</th>
                    <th>Réponse</th>
                    <th>Satisfaction</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>\${rows}</tbody>
        </table>
        \${paginationHTML}
    `;
}

function goPage(p) {
    const total = Math.ceil(filtered.length / PER_PAGE);
    if (p < 1 || p > total) return;
    currentPage = p;
    renderTable();
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// ══════════════════════════════════════════════
//  MODAL
// ══════════════════════════════════════════════
function openModal(id) {
    currentRec = allReclamations.find(r => r.id === id);
    if (!currentRec) return;
    const r = currentRec;

    document.getElementById('mSujet').textContent = r.sujet;

    document.getElementById('mMeta').innerHTML = `
        <span class=\"rec-badge badge-\${r.statut}\">\${r.statut.replace('_', ' ')}</span>
        <span class=\"type-pill\"><i class=\"fas \${TYPE_ICONS[r.type] || 'fa-tag'}\"></i> \${r.type}</span>
        <span class=\"prio-badge prio-\${r.priorite || 'NORMAL'}\">\${r.priorite || 'NORMAL'}</span>
        <span style=\"font-size:11px; color:rgba(244,248,252,0.4);\"><i class=\"fas fa-calendar-alt\" style=\"margin-right:4px;\"></i>\${r.date}</span>
    `;

    document.getElementById('mDesc').textContent = r.description || '—';

    const mReponse = document.getElementById('mReponse');
    if (r.reponse) {
        mReponse.innerHTML = `<div class=\"modal-reponse\">\${escHtml(r.reponse)}</div>`;
    } else {
        mReponse.innerHTML = `<div class=\"modal-no-reponse\"><i class=\"fas fa-hourglass-half\" style=\"margin-right:6px;\"></i>Aucune réponse pour l'instant. Notre équipe traite votre demande.</div>`;
    }

    renderSatisf(r);
    document.getElementById('detailModal').classList.add('open');
}

function renderSatisf(r) {
    const mSatisf = document.getElementById('mSatisf');

    if (r.statut !== 'TRAITEE' || !r.reponse) {
        mSatisf.innerHTML = '';
        return;
    }

    if (r.satisfait === null || r.satisfait === undefined) {
        mSatisf.innerHTML = `
            <div class=\"modal-satisf-area\">
                <p><i class=\"fas fa-star\" style=\"color:#FFC107; margin-right:6px;\"></i>Êtes-vous satisfait de la réponse de notre équipe ?</p>
                <div class=\"satisf-btns\">
                    <button class=\"btn-satisfait\" onclick=\"setSatisfait(\${r.id}, true)\">
                        <i class=\"fas fa-thumbs-up\"></i> Oui, satisfait
                    </button>
                    <button class=\"btn-insatisfait\" onclick=\"setSatisfait(\${r.id}, false)\">
                        <i class=\"fas fa-thumbs-down\"></i> Non, pas satisfait
                    </button>
                </div>
            </div>`;
    } else if (r.satisfait === true || r.satisfait === 'SATISFAIT') {
        mSatisf.innerHTML = `
            <div class=\"modal-satisf-area\">
                <div class=\"satisf-result satisf-ok\">
                    <i class=\"fas fa-thumbs-up\"></i> Vous avez indiqué être satisfait de cette réponse.
                </div>
            </div>`;
    } else {
        mSatisf.innerHTML = `
            <div class=\"modal-satisf-area\">
                <div class=\"satisf-result satisf-ko\">
                    <i class=\"fas fa-thumbs-down\"></i> Vous avez indiqué ne pas être satisfait. Notre équipe va revoir votre dossier.
                </div>
            </div>`;
    }
}

function closeModal() {
    document.getElementById('detailModal').classList.remove('open');
    currentRec = null;
}

document.getElementById('detailModal').addEventListener('click', function(e) {
    if (e.target === this) closeModal();
});

// ══════════════════════════════════════════════
//  SATISFACTION
// ══════════════════════════════════════════════
function setSatisfait(id, satisfait) {
    fetch(`/reclamation/\${id}/satisfaction`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ satisfait: satisfait })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            showToast(satisfait ? '👍 Merci pour votre retour !' : '👎 Retour enregistré. Votre dossier sera retraité.', 'success');
            const rec = allReclamations.find(r => r.id === id);
            if (rec) {
                rec.satisfait = satisfait ? true : false;
                if (currentRec && currentRec.id === id) {
                    renderSatisf(rec);
                }
            }
            renderTable();
        }
    })
    .catch(() => showToast('Erreur lors de l\\'envoi', 'error'));
}

// ══════════════════════════════════════════════
//  TOAST
// ══════════════════════════════════════════════
let toastTimer = null;
function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    toast.className = `rec-toast \${type}`;
    document.getElementById('toastMsg').textContent = message;
    document.getElementById('toastIcon').className  = type === 'success'
        ? 'fas fa-check-circle' : 'fas fa-times-circle';
    toast.classList.add('show');
    if (toastTimer) clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('show'), 4500);
}

function escHtml(str) {
    if (!str) return '';
    const d = document.createElement('div');
    d.textContent = str;
    return d.innerHTML;
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
        return "reclamation/mes-reclamations.html.twig";
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
        return array (  745 => 642,  725 => 623,  712 => 611,  704 => 605,  683 => 586,  662 => 566,  649 => 554,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Réclamations — ASAFAR{% endblock %}

{% block body %}
<style>
/* ══════════════════════════════════════════════
   MES RÉCLAMATIONS PAGE — Style ASAFAR
══════════════════════════════════════════════ */
.mes-rec-wrapper {
    min-height: 100vh;
    padding: 110px 30px 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
}

/* ── Hero ── */
.mes-rec-hero {
    text-align: center;
    max-width: 700px;
    animation: fadeInUp 0.7s ease-out;
}
.mes-rec-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: 48px;
    font-weight: 800;
    background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    letter-spacing: 2px;
    margin-bottom: 14px;
}
.mes-rec-hero p {
    font-size: 17px;
    color: rgba(244,248,252,0.75);
    line-height: 1.7;
    font-weight: 300;
}

/* ── Stats Bar ── */
.stats-bar {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
    max-width: 1100px;
    animation: fadeInUp 0.75s ease-out 0.1s both;
}
.stat-card {
    background: rgba(255,255,255,0.04);
    backdrop-filter: blur(14px);
    border: 1.5px solid rgba(255,193,7,0.18);
    border-radius: 18px;
    padding: 20px 30px;
    text-align: center;
    flex: 1;
    min-width: 130px;
    transition: all 0.35s cubic-bezier(0.34,1.56,0.64,1);
}
.stat-card:hover {
    border-color: rgba(255,193,7,0.45);
    transform: translateY(-4px);
    box-shadow: 0 12px 35px rgba(255,193,7,0.12);
}
.stat-card .stat-num {
    font-size: 32px;
    font-weight: 800;
    background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1;
    margin-bottom: 6px;
}
.stat-card .stat-label {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: rgba(244,248,252,0.5);
}

/* ── Toolbar ── */
.rec-toolbar {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    align-items: center;
    width: 100%;
    max-width: 1100px;
    animation: fadeInUp 0.8s ease-out 0.15s both;
}
.rec-search-input {
    flex: 1;
    min-width: 200px;
    background: rgba(255,255,255,0.05);
    border: 1.5px solid rgba(255,193,7,0.2);
    border-radius: 12px;
    color: #F4F8FC;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    padding: 11px 16px 11px 42px;
    outline: none;
    transition: all 0.35s ease;
    box-sizing: border-box;
}
.rec-search-input:focus {
    border-color: #FFC107;
    background: rgba(255,193,7,0.05);
    box-shadow: 0 0 0 3px rgba(255,193,7,0.12);
}
.rec-search-input::placeholder { color: rgba(244,248,252,0.3); }
.rec-search-wrapper {
    position: relative;
    flex: 1;
    min-width: 200px;
}
.rec-search-wrapper i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255,193,7,0.5);
    font-size: 14px;
    pointer-events: none;
}
.rec-filter-select {
    background: rgba(255,255,255,0.05);
    border: 1.5px solid rgba(255,193,7,0.2);
    border-radius: 12px;
    color: #F4F8FC;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    padding: 11px 16px;
    outline: none;
    cursor: pointer;
    transition: all 0.35s ease;
}
.rec-filter-select:focus {
    border-color: #FFC107;
}
.rec-filter-select option { background: #0B2D4A; color: #F4F8FC; }
.rec-new-btn {
    padding: 11px 22px;
    background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
    color: #0B2D4A;
    border: none;
    border-radius: 12px;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.4s cubic-bezier(0.34,1.56,0.64,1);
    box-shadow: 0 4px 16px rgba(255,193,7,0.25);
    white-space: nowrap;
}
.rec-new-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 28px rgba(255,193,7,0.4);
}

/* ── Table Card ── */
.rec-table-card {
    width: 100%;
    max-width: 1100px;
    background: rgba(255,255,255,0.04);
    backdrop-filter: blur(14px);
    border: 1.5px solid rgba(255,193,7,0.18);
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0,0,0,0.25);
    animation: fadeInUp 0.85s ease-out 0.2s both;
}
.rec-table {
    width: 100%;
    border-collapse: collapse;
}
.rec-table thead tr {
    background: rgba(255,193,7,0.08);
    border-bottom: 1px solid rgba(255,193,7,0.2);
}
.rec-table thead th {
    padding: 16px 20px;
    text-align: left;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: rgba(255,193,7,0.8);
    white-space: nowrap;
}
.rec-table tbody tr {
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: all 0.3s ease;
    cursor: pointer;
}
.rec-table tbody tr:last-child { border-bottom: none; }
.rec-table tbody tr:hover {
    background: rgba(255,193,7,0.04);
    transform: translateX(4px);
}
.rec-table td {
    padding: 16px 20px;
    font-size: 13px;
    color: rgba(244,248,252,0.85);
    vertical-align: middle;
}
.rec-table td .rec-sujet-text {
    font-weight: 600;
    color: #F4F8FC;
    font-size: 14px;
    margin-bottom: 4px;
    line-height: 1.3;
}
.rec-table td .rec-desc-preview {
    font-size: 12px;
    color: rgba(244,248,252,0.45);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 280px;
}

/* ── Type icons ── */
.type-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 11px;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 20px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1);
    color: rgba(244,248,252,0.7);
    white-space: nowrap;
}
.type-pill i { font-size: 10px; color: rgba(255,193,7,0.6); }

/* ── Badges ── */
.rec-badge {
    font-size: 10px;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 20px;
    letter-spacing: 0.8px;
    white-space: nowrap;
    display: inline-block;
}
.badge-EN_ATTENTE { background: rgba(255,193,7,0.15); color: #FFC107; border: 1px solid rgba(255,193,7,0.3); }
.badge-TRAITEE    { background: rgba(76,175,80,0.15);  color: #4CAF50; border: 1px solid rgba(76,175,80,0.3); }
.badge-REFUSEE    { background: rgba(255,82,82,0.15);  color: #FF5252; border: 1px solid rgba(255,82,82,0.3); }

/* ── Priorité ── */
.prio-badge {
    font-size: 10px;
    font-weight: 700;
    padding: 3px 9px;
    border-radius: 20px;
    letter-spacing: 0.5px;
    white-space: nowrap;
    display: inline-block;
}
.prio-URGENT { background: rgba(255,82,82,0.15);  color: #FF5252; border: 1px solid rgba(255,82,82,0.3); }
.prio-NORMAL { background: rgba(33,150,243,0.15); color: #64B5F6; border: 1px solid rgba(33,150,243,0.3); }
.prio-FAIBLE { background: rgba(76,175,80,0.12);  color: #81C784; border: 1px solid rgba(76,175,80,0.25); }

/* ── Action button ── */
.btn-voir {
    background: rgba(255,193,7,0.1);
    border: 1px solid rgba(255,193,7,0.3);
    border-radius: 10px;
    color: #FFC107;
    font-size: 12px;
    font-family: 'Poppins', sans-serif;
    padding: 7px 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
}
.btn-voir:hover {
    background: rgba(255,193,7,0.2);
    border-color: #FFC107;
    transform: scale(1.05);
}

/* ── Empty ── */
.rec-empty-state {
    text-align: center;
    padding: 60px 20px;
    color: rgba(244,248,252,0.4);
}
.rec-empty-state i {
    font-size: 52px;
    color: rgba(255,193,7,0.2);
    margin-bottom: 16px;
    display: block;
}
.rec-empty-state h3 {
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    color: rgba(244,248,252,0.5);
    margin-bottom: 8px;
}
.rec-empty-state p { font-size: 14px; }

/* ── MODAL ── */
.modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.75);
    z-index: 9999;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(6px);
}
.modal-overlay.open { display: flex; }
.modal-box {
    background: linear-gradient(145deg, #0d3a5c 0%, #0B2D4A 100%);
    border: 1.5px solid rgba(255,193,7,0.3);
    border-radius: 24px;
    padding: 36px;
    width: 560px;
    max-width: 92%;
    max-height: 88vh;
    overflow-y: auto;
    position: relative;
    box-shadow: 0 30px 80px rgba(0,0,0,0.5);
    animation: modalIn 0.4s cubic-bezier(0.34,1.56,0.64,1);
}
@keyframes modalIn {
    from { opacity:0; transform:translateY(30px) scale(0.96); }
    to   { opacity:1; transform:translateY(0) scale(1); }
}
.modal-box::-webkit-scrollbar { width: 4px; }
.modal-box::-webkit-scrollbar-thumb { background: rgba(255,193,7,0.3); border-radius: 4px; }
.modal-close {
    position: absolute;
    top: 16px;
    right: 20px;
    background: none;
    border: none;
    color: rgba(244,248,252,0.5);
    font-size: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    line-height: 1;
    padding: 4px;
}
.modal-close:hover { color: #FF5252; transform: rotate(90deg) scale(1.2); }
.modal-title {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    font-weight: 700;
    color: #FFC107;
    margin-bottom: 20px;
    padding-right: 30px;
    line-height: 1.3;
}
.modal-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 20px;
}
.modal-section-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: rgba(255,193,7,0.6);
    margin-bottom: 8px;
    margin-top: 20px;
}
.modal-desc {
    font-size: 14px;
    color: rgba(244,248,252,0.8);
    line-height: 1.7;
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 12px;
    padding: 14px 16px;
}
.modal-reponse {
    background: rgba(76,175,80,0.07);
    border-left: 3px solid #4CAF50;
    border-radius: 0 12px 12px 0;
    padding: 14px 16px;
    font-size: 14px;
    color: rgba(244,248,252,0.8);
    line-height: 1.7;
    white-space: pre-line;
}
.modal-no-reponse {
    font-size: 13px;
    color: rgba(244,248,252,0.35);
    font-style: italic;
    padding: 10px 0;
}
.btn-satisfait, .btn-insatisfait {
    border: none;
    background: transparent;
    font-size: 16px;
    cursor: pointer;
    transition: 0.2s;
}

.btn-satisfait:hover {
    transform: scale(1.2);
    color: #4CAF50;
}

.btn-insatisfait:hover {
    transform: scale(1.2);
    color: #FF5252;
}
.modal-satisf-area {
    margin-top: 20px;
    padding: 16px;
    background: rgba(255,255,255,0.03);
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,0.07);
}
.modal-satisf-area p {
    font-size: 13px;
    color: rgba(244,248,252,0.6);
    margin-bottom: 12px;
}
.satisf-btns { display: flex; gap: 12px; }
.btn-satisfait {
    flex: 1;
    padding: 10px;
    border: 1.5px solid rgba(76,175,80,0.4);
    background: rgba(76,175,80,0.1);
    color: #4CAF50;
    border-radius: 12px;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}
.btn-satisfait:hover {
    background: rgba(76,175,80,0.25);
    transform: translateY(-2px);
}
.btn-insatisfait {
    flex: 1;
    padding: 10px;
    border: 1.5px solid rgba(255,82,82,0.4);
    background: rgba(255,82,82,0.1);
    color: #FF5252;
    border-radius: 12px;
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}
.btn-insatisfait:hover {
    background: rgba(255,82,82,0.25);
    transform: translateY(-2px);
}
.satisf-result {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    padding: 10px 14px;
    border-radius: 10px;
}
.satisf-ok  { background: rgba(76,175,80,0.1);  color: #4CAF50; }
.satisf-ko  { background: rgba(255,82,82,0.1);  color: #FF5252; }

/* ── Pagination ── */
.rec-pagination {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 20px;
    border-top: 1px solid rgba(255,255,255,0.05);
}
.page-btn {
    width: 36px;
    height: 36px;
    background: none;
    border: 1px solid rgba(255,193,7,0.2);
    border-radius: 10px;
    color: rgba(244,248,252,0.6);
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}
.page-btn:hover, .page-btn.active {
    background: rgba(255,193,7,0.15);
    border-color: #FFC107;
    color: #FFC107;
}
.page-btn:disabled {
    opacity: 0.3;
    cursor: not-allowed;
}

/* ── Toast ── */
.rec-toast {
    position: fixed;
    bottom: 30px;
    right: 30px;
    padding: 16px 24px;
    border-radius: 14px;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 500;
    color: white;
    z-index: 99999;
    transform: translateY(100px);
    opacity: 0;
    transition: all 0.5s cubic-bezier(0.34,1.56,0.64,1);
    max-width: 380px;
    display: flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.3);
}
.rec-toast.show   { transform: translateY(0); opacity: 1; }
.rec-toast.success { background: linear-gradient(135deg, #1a6b3a, #2d9a52); }
.rec-toast.error   { background: linear-gradient(135deg, #7a1a1a, #c62828); }

@keyframes fadeInUp {
    from { opacity:0; transform: translateY(30px); }
    to   { opacity:1; transform: translateY(0); }
}
</style>

<div class=\"mes-rec-wrapper\">

    {# ── Hero ── #}
    <div class=\"mes-rec-hero\">
        <h1>
            <i class=\"fas fa-history\" style=\"font-size:38px; display:block; margin-bottom:12px;
               background: linear-gradient(135deg,#FFC107,#FF8F00);
               -webkit-background-clip:text; -webkit-text-fill-color:transparent;\"></i>
            Mes Réclamations
        </h1>
        <p>Suivez l'état de toutes vos réclamations en temps réel.<br>
           Consultez les réponses de notre équipe et donnez votre avis.</p>
    </div>

    {# ── Stats ── #}
    <div class=\"stats-bar\" id=\"statsBar\">
        <div class=\"stat-card\">
            <div class=\"stat-num\" id=\"statTotal\">—</div>
            <div class=\"stat-label\">Total</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-num\" style=\"background: linear-gradient(135deg,#FFC107,#FF8F00); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;\" id=\"statAttente\">—</div>
            <div class=\"stat-label\">En attente</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-num\" style=\"background: linear-gradient(135deg,#4CAF50,#388E3C); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;\" id=\"statTraitee\">—</div>
            <div class=\"stat-label\">Traitées</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-num\" style=\"background: linear-gradient(135deg,#FF5252,#C62828); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;\" id=\"statRefusee\">—</div>
            <div class=\"stat-label\">Refusées</div>
        </div>
    </div>

    {# ── Toolbar ── #}
    <div class=\"rec-toolbar\">
        <div class=\"rec-search-wrapper\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" class=\"rec-search-input\" id=\"searchInput\"
                   placeholder=\"Rechercher par sujet...\"
                   oninput=\"filterTable()\">
        </div>
        <select class=\"rec-filter-select\" id=\"filterStatut\" onchange=\"filterTable()\">
            <option value=\"\">Tous les statuts</option>
            <option value=\"EN_ATTENTE\">En attente</option>
            <option value=\"TRAITEE\">Traitée</option>
            <option value=\"REFUSEE\">Refusée</option>
        </select>
        <select class=\"rec-filter-select\" id=\"filterType\" onchange=\"filterTable()\">
            <option value=\"\">Tous les types</option>
            <option value=\"TRANSPORT\">Transport</option>
            <option value=\"HEBERGEMENT\">Hébergement</option>
            <option value=\"LOISIR\">Excursion</option>
        </select>
        <a href=\"{{ path('reclamation_index') }}\" class=\"rec-new-btn\">
            <i class=\"fas fa-plus\"></i> Nouvelle réclamation
        </a>
    </div>

    {# ── Table ── #}
    <div class=\"rec-table-card\">
        <div id=\"tableContent\">
            <div class=\"rec-empty-state\">
                <i class=\"fas fa-circle-notch fa-spin\" style=\"color:rgba(255,193,7,0.4);\"></i>
                <p>Chargement de vos réclamations...</p>
            </div>
        </div>
    </div>

</div>

{# ── Modal Détail ── #}
<div class=\"modal-overlay\" id=\"detailModal\">
    <div class=\"modal-box\">
        <button class=\"modal-close\" onclick=\"closeModal()\">
            <i class=\"fas fa-times\"></i>
        </button>
        <div class=\"modal-title\" id=\"mSujet\">—</div>
        <div class=\"modal-meta\" id=\"mMeta\"></div>

        <div class=\"modal-section-label\"><i class=\"fas fa-align-left\" style=\"margin-right:6px;\"></i>Description</div>
        <div class=\"modal-desc\" id=\"mDesc\">—</div>

        <div class=\"modal-section-label\"><i class=\"fas fa-reply\" style=\"margin-right:6px;\"></i>Réponse de l'équipe</div>
        <div id=\"mReponse\"></div>

        <div id=\"mSatisf\"></div>
    </div>
</div>

{# Toast #}
<div class=\"rec-toast\" id=\"toast\">
    <i id=\"toastIcon\" class=\"fas fa-check-circle\"></i>
    <span id=\"toastMsg\"></span>
</div>

<script>
// ══════════════════════════════════════════════
//  DONNÉES
// ══════════════════════════════════════════════
let allReclamations = [];
let filtered        = [];
const PER_PAGE      = 8;
let currentPage     = 1;
let currentRec      = null;

const TYPE_ICONS = {
    TRANSPORT:   'fa-plane',
    HEBERGEMENT: 'fa-hotel',
    LOISIR:      'fa-compass',
};

// ══════════════════════════════════════════════
//  INIT
// ══════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', function() {
    loadReclamations();
});

function loadReclamations() {
    fetch('/reclamation/mes-reclamations', {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(res => {
        if (!res.ok) {
            throw new Error(\"Erreur HTTP \" + res.status);
        }
        return res.json();
    })
    .then(data => {
        console.log(\"DATA =\", data);

        allReclamations = data;
        updateStats();
        filterTable();
    })
    .catch(err => {
        console.error(err);

        document.getElementById('tableContent').innerHTML = `
            <div class=\"rec-empty-state\">
                <i class=\"fas fa-exclamation-triangle\"></i>
                <h3>Erreur de chargement</h3>
                <p>Impossible de récupérer vos réclamations</p>
            </div>`;
    });
}

// ══════════════════════════════════════════════
//  STATS
// ══════════════════════════════════════════════
function updateStats() {
    document.getElementById('statTotal').textContent   = allReclamations.length;
    document.getElementById('statAttente').textContent = allReclamations.filter(r => r.statut === 'EN_ATTENTE').length;
    document.getElementById('statTraitee').textContent = allReclamations.filter(r => r.statut === 'TRAITEE').length;
    document.getElementById('statRefusee').textContent = allReclamations.filter(r => r.statut === 'REFUSEE').length;
}

// ══════════════════════════════════════════════
//  FILTRE + RENDU
// ══════════════════════════════════════════════
function filterTable() {
    const search = document.getElementById('searchInput').value.toLowerCase();
    const statut = document.getElementById('filterStatut').value;
    const type   = document.getElementById('filterType').value;

    filtered = allReclamations.filter(r => {
const matchSearch =
    !search ||
    r.sujet.toLowerCase().includes(search) ||
    (r.type && r.type.toLowerCase().includes(search)) ||
    (r.statut && r.statut.toLowerCase().includes(search)) ||
    (r.description && r.description.toLowerCase().includes(search));
            const matchStatut = !statut || r.statut === statut;
        const matchType   = !type   || r.type  === type;
        return matchSearch && matchStatut && matchType;
    });

    currentPage = 1;
    renderTable();
}

function renderTable() {
    const content = document.getElementById('tableContent');

    if (!filtered.length) {
        content.innerHTML = `
            <div class=\"rec-empty-state\">
                <i class=\"fas fa-inbox\"></i>
                <h3>Aucune réclamation trouvée</h3>
                <p>Essayez de modifier vos filtres ou déposez une nouvelle réclamation.</p>
            </div>`;
        return;
    }

    const totalPages = Math.ceil(filtered.length / PER_PAGE);
    const page       = filtered.slice((currentPage - 1) * PER_PAGE, currentPage * PER_PAGE);

    let rows = page.map(r => `
        <tr onclick=\"openModal(\${r.id})\">
            <td>
                <div class=\"rec-sujet-text\">\${escHtml(r.sujet)}</div>
            </td>
            <td>
                <span class=\"type-pill\">
                    <i class=\"fas \${TYPE_ICONS[r.type] || 'fa-tag'}\"></i>
                    \${r.type}
                </span>
            </td>
            <td>
                <span class=\"rec-badge badge-\${r.statut}\">\${r.statut.replace('_', ' ')}</span>
            </td>
            <td>
                <span class=\"prio-badge prio-\${r.priorite || 'NORMAL'}\">\${r.priorite || 'NORMAL'}</span>
            </td>
            <td style=\"color:rgba(244,248,252,0.5); font-size:12px; white-space:nowrap;\">
                <i class=\"fas fa-calendar-alt\" style=\"color:rgba(255,193,7,0.4); margin-right:5px;\"></i>
                \${r.date}
            </td>
            <td>
                \${r.reponse
                    ? `<span style=\"font-size:11px; color:#4CAF50;\"><i class=\"fas fa-check-circle\"></i> Répondu</span>`
                    : `<span style=\"font-size:11px; color:rgba(244,248,252,0.3);\"><i class=\"fas fa-clock\"></i> En cours</span>`}
            </td>
            <td>
    \${
        r.statut !== 'TRAITEE'
        ? `<span style=\"color:rgba(244,248,252,0.3); font-size:11px;\">—</span>`
        : r.satisfait === true
            ? `<span style=\"color:#4CAF50;\"><i class=\"fas fa-thumbs-up\"></i> Satisfait</span>`
        : r.satisfait === false
            ? `<span style=\"color:#FF5252;\"><i class=\"fas fa-thumbs-down\"></i> Insatisfait</span>`
        : `
            <button class=\"btn-satisfait\" onclick=\"event.stopPropagation(); setSatisfait(\${r.id}, true)\">
                👍
            </button>
            <button class=\"btn-insatisfait\" onclick=\"event.stopPropagation(); setSatisfait(\${r.id}, false)\">
                👎
            </button>
        `
    }
</td>
            <td>
                <button class=\"btn-voir\" onclick=\"event.stopPropagation(); openModal(\${r.id})\">
                    <i class=\"fas fa-eye\"></i> Voir
                </button>
            </td>
        </tr>
    `).join('');

    let paginationHTML = '';
    if (totalPages > 1) {
        let btns = '';
        btns += `<button class=\"page-btn\" onclick=\"goPage(\${currentPage - 1})\" \${currentPage === 1 ? 'disabled' : ''}>
            <i class=\"fas fa-chevron-left\"></i>
        </button>`;
        for (let i = 1; i <= totalPages; i++) {
            btns += `<button class=\"page-btn \${i === currentPage ? 'active' : ''}\" onclick=\"goPage(\${i})\">\${i}</button>`;
        }
        btns += `<button class=\"page-btn\" onclick=\"goPage(\${currentPage + 1})\" \${currentPage === totalPages ? 'disabled' : ''}>
            <i class=\"fas fa-chevron-right\"></i>
        </button>`;
        paginationHTML = `<div class=\"rec-pagination\">\${btns}</div>`;
    }

    content.innerHTML = `
        <table class=\"rec-table\">
            <thead>
                <tr>
                    <th>Sujet</th>
                    <th>Type</th>
                    <th>Statut</th>
                    <th>Priorité</th>
                    <th>Date</th>
                    <th>Réponse</th>
                    <th>Satisfaction</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>\${rows}</tbody>
        </table>
        \${paginationHTML}
    `;
}

function goPage(p) {
    const total = Math.ceil(filtered.length / PER_PAGE);
    if (p < 1 || p > total) return;
    currentPage = p;
    renderTable();
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// ══════════════════════════════════════════════
//  MODAL
// ══════════════════════════════════════════════
function openModal(id) {
    currentRec = allReclamations.find(r => r.id === id);
    if (!currentRec) return;
    const r = currentRec;

    document.getElementById('mSujet').textContent = r.sujet;

    document.getElementById('mMeta').innerHTML = `
        <span class=\"rec-badge badge-\${r.statut}\">\${r.statut.replace('_', ' ')}</span>
        <span class=\"type-pill\"><i class=\"fas \${TYPE_ICONS[r.type] || 'fa-tag'}\"></i> \${r.type}</span>
        <span class=\"prio-badge prio-\${r.priorite || 'NORMAL'}\">\${r.priorite || 'NORMAL'}</span>
        <span style=\"font-size:11px; color:rgba(244,248,252,0.4);\"><i class=\"fas fa-calendar-alt\" style=\"margin-right:4px;\"></i>\${r.date}</span>
    `;

    document.getElementById('mDesc').textContent = r.description || '—';

    const mReponse = document.getElementById('mReponse');
    if (r.reponse) {
        mReponse.innerHTML = `<div class=\"modal-reponse\">\${escHtml(r.reponse)}</div>`;
    } else {
        mReponse.innerHTML = `<div class=\"modal-no-reponse\"><i class=\"fas fa-hourglass-half\" style=\"margin-right:6px;\"></i>Aucune réponse pour l'instant. Notre équipe traite votre demande.</div>`;
    }

    renderSatisf(r);
    document.getElementById('detailModal').classList.add('open');
}

function renderSatisf(r) {
    const mSatisf = document.getElementById('mSatisf');

    if (r.statut !== 'TRAITEE' || !r.reponse) {
        mSatisf.innerHTML = '';
        return;
    }

    if (r.satisfait === null || r.satisfait === undefined) {
        mSatisf.innerHTML = `
            <div class=\"modal-satisf-area\">
                <p><i class=\"fas fa-star\" style=\"color:#FFC107; margin-right:6px;\"></i>Êtes-vous satisfait de la réponse de notre équipe ?</p>
                <div class=\"satisf-btns\">
                    <button class=\"btn-satisfait\" onclick=\"setSatisfait(\${r.id}, true)\">
                        <i class=\"fas fa-thumbs-up\"></i> Oui, satisfait
                    </button>
                    <button class=\"btn-insatisfait\" onclick=\"setSatisfait(\${r.id}, false)\">
                        <i class=\"fas fa-thumbs-down\"></i> Non, pas satisfait
                    </button>
                </div>
            </div>`;
    } else if (r.satisfait === true || r.satisfait === 'SATISFAIT') {
        mSatisf.innerHTML = `
            <div class=\"modal-satisf-area\">
                <div class=\"satisf-result satisf-ok\">
                    <i class=\"fas fa-thumbs-up\"></i> Vous avez indiqué être satisfait de cette réponse.
                </div>
            </div>`;
    } else {
        mSatisf.innerHTML = `
            <div class=\"modal-satisf-area\">
                <div class=\"satisf-result satisf-ko\">
                    <i class=\"fas fa-thumbs-down\"></i> Vous avez indiqué ne pas être satisfait. Notre équipe va revoir votre dossier.
                </div>
            </div>`;
    }
}

function closeModal() {
    document.getElementById('detailModal').classList.remove('open');
    currentRec = null;
}

document.getElementById('detailModal').addEventListener('click', function(e) {
    if (e.target === this) closeModal();
});

// ══════════════════════════════════════════════
//  SATISFACTION
// ══════════════════════════════════════════════
function setSatisfait(id, satisfait) {
    fetch(`/reclamation/\${id}/satisfaction`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ satisfait: satisfait })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            showToast(satisfait ? '👍 Merci pour votre retour !' : '👎 Retour enregistré. Votre dossier sera retraité.', 'success');
            const rec = allReclamations.find(r => r.id === id);
            if (rec) {
                rec.satisfait = satisfait ? true : false;
                if (currentRec && currentRec.id === id) {
                    renderSatisf(rec);
                }
            }
            renderTable();
        }
    })
    .catch(() => showToast('Erreur lors de l\\'envoi', 'error'));
}

// ══════════════════════════════════════════════
//  TOAST
// ══════════════════════════════════════════════
let toastTimer = null;
function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    toast.className = `rec-toast \${type}`;
    document.getElementById('toastMsg').textContent = message;
    document.getElementById('toastIcon').className  = type === 'success'
        ? 'fas fa-check-circle' : 'fas fa-times-circle';
    toast.classList.add('show');
    if (toastTimer) clearTimeout(toastTimer);
    toastTimer = setTimeout(() => toast.classList.remove('show'), 4500);
}

function escHtml(str) {
    if (!str) return '';
    const d = document.createElement('div');
    d.textContent = str;
    return d.innerHTML;
}
</script>
{% endblock %}
", "reclamation/mes-reclamations.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\reclamation\\mes-reclamations.html.twig");
    }
}
