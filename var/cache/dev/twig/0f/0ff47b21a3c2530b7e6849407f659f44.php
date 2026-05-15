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

/* reclamation/index.html.twig */
class __TwigTemplate_fc0f22986062a45b884004c646a4e303 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

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

        yield "Réclamation — ASAFAR";
        
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
   RECLAMATION PAGE — Style ASAFAR
══════════════════════════════════════════════ */
.reclamation-wrapper {
    min-height: 100vh;
    padding: 110px 30px 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
}

/* ── Hero ── */
.rec-hero {
    text-align: center;
    max-width: 700px;
    animation: fadeInUp 0.7s ease-out;
}
.rec-hero h1 {
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
.rec-hero p {
    font-size: 17px;
    color: rgba(244,248,252,0.75);
    line-height: 1.7;
    font-weight: 300;
}

/* ── Layout ── */
.rec-layout {
    display: grid;
    grid-template-columns: 1fr 380px;
    gap: 30px;
    width: 100%;
    max-width: 1100px;
    animation: fadeInUp 0.8s ease-out 0.15s both;
}
@media (max-width: 900px) {
    .rec-layout { grid-template-columns: 1fr; }
}

/* ── Card ── */
.rec-card {
    background: rgba(255,255,255,0.04);
    backdrop-filter: blur(14px);
    border: 1.5px solid rgba(255,193,7,0.18);
    border-radius: 24px;
    padding: 36px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.25);
    transition: border-color 0.4s ease, box-shadow 0.4s ease;
}
.rec-card:hover {
    border-color: rgba(255,193,7,0.4);
    box-shadow: 0 16px 48px rgba(255,193,7,0.1);
}
.rec-card h2 {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    font-weight: 700;
    color: #FFC107;
    margin-bottom: 28px;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.rec-card h2 i { font-size: 20px; color: #FF8F00; }

/* ── Form ── */
.rec-form-group { margin-bottom: 22px; }
.rec-form-group label {
    display: block;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: rgba(244,248,252,0.6);
    margin-bottom: 8px;
}
.rec-form-group label span.required { color: #FF8F00; margin-left: 2px; }

.rec-input, .rec-select, .rec-textarea {
    width: 100%;
    background: rgba(255,255,255,0.05);
    border: 1.5px solid rgba(255,193,7,0.2);
    border-radius: 12px;
    color: #F4F8FC;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    padding: 13px 16px;
    outline: none;
    transition: all 0.35s cubic-bezier(0.34,1.56,0.64,1);
    box-sizing: border-box;
}
.rec-input::placeholder, .rec-textarea::placeholder { color: rgba(244,248,252,0.3); }
.rec-input:focus, .rec-select:focus, .rec-textarea:focus {
    border-color: #FFC107;
    background: rgba(255,193,7,0.05);
    box-shadow: 0 0 0 3px rgba(255,193,7,0.12);
    transform: translateY(-1px);
}
.rec-select option { background: #0B2D4A; color: #F4F8FC; }
.rec-textarea { min-height: 130px; resize: vertical; line-height: 1.6; }

/* ── Type selector ── */
.rec-type-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}
.rec-type-btn {
    background: rgba(255,255,255,0.04);
    border: 1.5px solid rgba(255,193,7,0.2);
    border-radius: 14px;
    padding: 16px 10px;
    cursor: pointer;
    text-align: center;
    transition: all 0.35s cubic-bezier(0.34,1.56,0.64,1);
    color: rgba(244,248,252,0.7);
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
}
.rec-type-btn i { font-size: 22px; color: rgba(255,193,7,0.6); transition: all 0.35s ease; }
.rec-type-btn:hover {
    border-color: rgba(255,193,7,0.5);
    background: rgba(255,193,7,0.06);
    color: #FFC107;
    transform: translateY(-3px);
}
.rec-type-btn:hover i { color: #FFC107; transform: scale(1.2) rotate(8deg); }
.rec-type-btn.active {
    border-color: #FFC107;
    background: rgba(255,193,7,0.12);
    color: #FFC107;
    box-shadow: 0 6px 20px rgba(255,193,7,0.18);
    transform: translateY(-3px) scale(1.03);
}
.rec-type-btn.active i { color: #FF8F00; }

/* ── Article loader ── */
#articleGroup {
    overflow: hidden;
    max-height: 0;
    opacity: 0;
    transition: all 0.5s cubic-bezier(0.34,1.56,0.64,1);
}
#articleGroup.visible { max-height: 120px; opacity: 1; }

/* ══════════════════════════════════════════════
   SPEECH TO TEXT
══════════════════════════════════════════════ */
.desc-wrapper {
    position: relative;
}

.rec-textarea-stt {
    padding-right: 54px; /* espace pour le bouton mic */
}

.mic-btn {
    position: absolute;
    bottom: 12px;
    right: 12px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: none;
    background: rgba(255,193,7,0.15);
    color: #FFC107;
    font-size: 15px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s cubic-bezier(0.34,1.56,0.64,1);
    z-index: 10;
}
.mic-btn:hover {
    background: rgba(255,193,7,0.3);
    transform: scale(1.1);
}

/* État actif : enregistrement en cours */
.mic-btn.recording {
    background: rgba(255,82,82,0.2);
    color: #FF5252;
    animation: micPulse 1s ease-in-out infinite;
    border: 1.5px solid rgba(255,82,82,0.5);
}

@keyframes micPulse {
    0%, 100% { transform: scale(1);    box-shadow: 0 0 0 0 rgba(255,82,82,0.4); }
    50%       { transform: scale(1.12); box-shadow: 0 0 0 8px rgba(255,82,82,0); }
}

/* Barre de statut STT */
.stt-status {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 8px;
    font-size: 12px;
    color: rgba(244,248,252,0.5);
    min-height: 20px;
    transition: all 0.3s ease;
}
.stt-status.listening {
    color: #FF5252;
}
.stt-status.listening::before {
    content: '';
    width: 8px;
    height: 8px;
    background: #FF5252;
    border-radius: 50%;
    display: inline-block;
    animation: blink 0.8s ease-in-out infinite;
    flex-shrink: 0;
}
@keyframes blink {
    0%, 100% { opacity: 1; }
    50%       { opacity: 0.2; }
}

/* Transcription intermédiaire en italique */
.stt-interim {
    font-style: italic;
    color: rgba(255,193,7,0.5);
    font-size: 12px;
    margin-top: 4px;
    min-height: 18px;
    transition: all 0.2s ease;
}

/* Langue selector */
.stt-lang-row {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 8px;
}
.stt-lang-label {
    font-size: 11px;
    color: rgba(244,248,252,0.4);
    white-space: nowrap;
}
.stt-lang-select {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,193,7,0.15);
    border-radius: 8px;
    color: rgba(244,248,252,0.7);
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    padding: 4px 8px;
    outline: none;
    cursor: pointer;
    transition: all 0.3s ease;
}
.stt-lang-select:focus {
    border-color: rgba(255,193,7,0.4);
}
.stt-lang-select option { background: #0B2D4A; }

/* Bouton effacer */
.stt-clear-btn {
    background: none;
    border: 1px solid rgba(255,82,82,0.3);
    border-radius: 8px;
    color: rgba(255,82,82,0.6);
    font-size: 11px;
    padding: 4px 10px;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
    white-space: nowrap;
}
.stt-clear-btn:hover {
    background: rgba(255,82,82,0.1);
    color: #FF5252;
    border-color: rgba(255,82,82,0.6);
}

/* ── Non supporté ── */
.stt-not-supported {
    display: none;
    font-size: 11px;
    color: rgba(255,82,82,0.7);
    margin-top: 6px;
}

/* ── Submit button ── */
.rec-submit-btn {
    width: 100%;
    padding: 16px;
    background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
    color: #0B2D4A;
    border: none;
    border-radius: 14px;
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.34,1.56,0.64,1);
    box-shadow: 0 6px 20px rgba(255,193,7,0.25);
    margin-top: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}
.rec-submit-btn:hover:not(:disabled) {
    transform: translateY(-4px);
    box-shadow: 0 12px 35px rgba(255,193,7,0.4);
    letter-spacing: 2px;
}
.rec-submit-btn:disabled { opacity: 0.6; cursor: not-allowed; }

/* ── Sidebar ── */
.rec-sidebar h2 { font-size: 18px; }
.rec-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
    max-height: 600px;
    overflow-y: auto;
    padding-right: 4px;
}
.rec-list::-webkit-scrollbar { width: 4px; }
.rec-list::-webkit-scrollbar-track { background: transparent; }
.rec-list::-webkit-scrollbar-thumb { background: rgba(255,193,7,0.3); border-radius: 4px; }

.rec-item {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,193,7,0.12);
    border-radius: 14px;
    padding: 16px;
    transition: all 0.35s ease;
}
.rec-item:hover {
    border-color: rgba(255,193,7,0.35);
    background: rgba(255,193,7,0.04);
    transform: translateX(4px);
}
.rec-item-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 8px;
    margin-bottom: 8px;
}
.rec-item-sujet {
    font-size: 13px;
    font-weight: 600;
    color: #F4F8FC;
    line-height: 1.4;
    flex: 1;
}
.rec-badge {
    font-size: 10px;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 20px;
    letter-spacing: 0.8px;
    white-space: nowrap;
    flex-shrink: 0;
}
.badge-EN_ATTENTE { background: rgba(255,193,7,0.15); color: #FFC107; border: 1px solid rgba(255,193,7,0.3); }
.badge-TRAITEE    { background: rgba(76,175,80,0.15);  color: #4CAF50; border: 1px solid rgba(76,175,80,0.3); }
.badge-REFUSEE    { background: rgba(255,82,82,0.15);  color: #FF5252; border: 1px solid rgba(255,82,82,0.3); }

.rec-item-meta { display: flex; gap: 10px; flex-wrap: wrap; }
.rec-item-meta span {
    font-size: 11px;
    color: rgba(244,248,252,0.5);
    display: flex;
    align-items: center;
    gap: 4px;
}
.rec-item-meta i { font-size: 10px; color: rgba(255,193,7,0.5); }

.rec-reponse {
    margin-top: 10px;
    padding: 10px 12px;
    background: rgba(76,175,80,0.08);
    border-left: 3px solid #4CAF50;
    border-radius: 0 8px 8px 0;
    font-size: 12px;
    color: rgba(244,248,252,0.75);
    line-height: 1.5;
}

.rec-empty {
    text-align: center;
    padding: 40px 20px;
    color: rgba(244,248,252,0.4);
}
.rec-empty i {
    font-size: 40px;
    color: rgba(255,193,7,0.25);
    margin-bottom: 12px;
    display: block;
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
    z-index: 9999;
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

/* ── Spinner ── */
.rec-spinner {
    width: 18px; height: 18px;
    border: 2px solid rgba(11,45,74,0.3);
    border-top-color: #0B2D4A;
    border-radius: 50%;
    animation: spin 0.7s linear infinite;
    display: none;
}
@keyframes spin { to { transform: rotate(360deg); } }
@keyframes fadeInUp {
    from { opacity:0; transform: translateY(30px); }
    to   { opacity:1; transform: translateY(0); }
}
</style>

<div class=\"reclamation-wrapper\">

    ";
        // line 470
        yield "    <div class=\"rec-hero\">
        <h1>
            <i class=\"fas fa-comment-dots\" style=\"font-size:38px; display:block; margin-bottom:12px;
               background: linear-gradient(135deg,#FFC107,#FF8F00);
               -webkit-background-clip:text; -webkit-text-fill-color:transparent;\"></i>
            Déposer une Réclamation
        </h1>
        <p>Signalez un problème avec votre transport, hébergement ou excursion.<br>
           Notre équipe vous répond dans les 48h.</p>
    </div>

    <div class=\"rec-layout\">

        ";
        // line 484
        yield "        <div class=\"rec-card\">
            <h2><i class=\"fas fa-pen-alt\"></i> Nouvelle Réclamation</h2>

            ";
        // line 488
        yield "            <div class=\"rec-form-group\">
                <label>Type de réclamation <span class=\"required\">*</span></label>
                <div class=\"rec-type-grid\">
                    <button type=\"button\" class=\"rec-type-btn\" onclick=\"selectType('TRANSPORT', this)\">
                        <i class=\"fas fa-plane\"></i> Transport
                    </button>
                    <button type=\"button\" class=\"rec-type-btn\" onclick=\"selectType('HEBERGEMENT', this)\">
                        <i class=\"fas fa-hotel\"></i> Hébergement
                    </button>
                    <button type=\"button\" class=\"rec-type-btn\" onclick=\"selectType('LOISIR', this)\">
                        <i class=\"fas fa-compass\"></i> Excursion
                    </button>
                </div>
            </div>

            ";
        // line 504
        yield "            <div class=\"rec-form-group\" id=\"articleGroup\">
                <label>Article concerné <span class=\"required\">*</span></label>
                <select class=\"rec-select\" id=\"articleSelect\">
                    <option value=\"\">— Sélectionnez un article —</option>
                </select>
                <div id=\"articleLoader\" style=\"text-align:center; padding:8px 0; display:none;\">
                    <i class=\"fas fa-circle-notch fa-spin\" style=\"color:#FFC107;\"></i>
                    <span style=\"font-size:12px; color:rgba(244,248,252,0.5); margin-left:8px;\">Chargement...</span>
                </div>
            </div>

            ";
        // line 516
        yield "            <div class=\"rec-form-group\">
                <label>Sujet <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"rec-input\" id=\"sujet\"
                       placeholder=\"Ex : Retard de vol, Chambre non conforme...\"
                       maxlength=\"100\">
                <div style=\"text-align:right; font-size:11px; color:rgba(244,248,252,0.3); margin-top:4px;\">
                    <span id=\"sujetCount\">0</span>/100
                </div>
            </div>

            ";
        // line 529
        yield "            <div class=\"rec-form-group\">
                <label>
                    Description détaillée <span class=\"required\">*</span>
                    <span style=\"margin-left:8px; font-size:10px; color:rgba(255,193,7,0.5);
                                 font-weight:400; letter-spacing:0.5px;\">
                        — ou parlez avec le micro 🎤
                    </span>
                </label>

                <div class=\"desc-wrapper\">
                    <textarea class=\"rec-textarea rec-textarea-stt\" id=\"description\"
                              placeholder=\"Décrivez votre problème en détail (minimum 20 caractères)...\"></textarea>

                    ";
        // line 543
        yield "                    <button type=\"button\" class=\"mic-btn\" id=\"micBtn\"
                            onclick=\"toggleSpeech()\"
                            title=\"Cliquez pour parler\">
                        <i class=\"fas fa-microphone\" id=\"micIcon\"></i>
                    </button>
                </div>

                ";
        // line 551
        yield "                <div class=\"stt-interim\" id=\"sttInterim\"></div>

                ";
        // line 554
        yield "                <div style=\"display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px; margin-top:6px;\">
                    <div class=\"stt-status\" id=\"sttStatus\">
                        Cliquez sur le micro pour dicter
                    </div>
                    <div class=\"stt-lang-row\">
                        <span class=\"stt-lang-label\">Langue :</span>
                        <select class=\"stt-lang-select\" id=\"sttLang\">
                            <option value=\"fr-FR\">🇫🇷 Français</option>
                            <option value=\"ar-TN\">🇹🇳 Arabe</option>
                            <option value=\"en-US\">🇺🇸 English</option>
                            <option value=\"es-ES\">🇪🇸 Español</option>
                            <option value=\"de-DE\">🇩🇪 Deutsch</option>
                        </select>
                        <button type=\"button\" class=\"stt-clear-btn\" onclick=\"clearDescription()\">
                            <i class=\"fas fa-trash-alt\"></i> Effacer
                        </button>
                    </div>
                </div>

                ";
        // line 574
        yield "                <div class=\"stt-not-supported\" id=\"sttNotSupported\">
                    ⚠️ Votre navigateur ne supporte pas la reconnaissance vocale. Utilisez Chrome ou Edge.
                </div>
            </div>

            ";
        // line 580
        yield "            <button type=\"button\" class=\"rec-submit-btn\" id=\"submitBtn\" onclick=\"soumettreReclamation()\">
                <div class=\"rec-spinner\" id=\"spinner\"></div>
                <i class=\"fas fa-paper-plane\" id=\"submitIcon\"></i>
                <span id=\"submitText\">Envoyer la Réclamation</span>
            </button>
        </div>

        ";
        // line 588
        yield "        <div class=\"rec-card rec-sidebar\">
            <h2><i class=\"fas fa-history\"></i> Mes Réclamations</h2>
            <div class=\"rec-list\" id=\"recList\">
                <div class=\"rec-empty\">
                    <i class=\"fas fa-inbox\"></i>
                    <p>Chargement...</p>
                </div>
            </div>
        </div>

    </div>
</div>

";
        // line 602
        yield "<div class=\"rec-toast\" id=\"toast\">
    <i id=\"toastIcon\" class=\"fas fa-check-circle\"></i>
    <span id=\"toastMsg\"></span>
</div>
<!-- POPUP RECLAMATION -->
<div id=\"recModal\" style=\"
    display:none;
    position:fixed;
    top:0; left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.7);
    z-index:9999;
    align-items:center;
    justify-content:center;
\">
    <div style=\"
        background:#0B2D4A;
        padding:25px;
        border-radius:16px;
        width:400px;
        max-width:90%;
        color:white;
        position:relative;
    \">
        <span onclick=\"closeModal()\" style=\"
            position:absolute;
            top:10px;
            right:15px;
            cursor:pointer;
            font-size:20px;
        \">✖</span>

        <h3 id=\"modalSujet\"></h3>
        <p id=\"modalType\"></p>
        <p id=\"modalDate\"></p>

        <hr style=\"margin:10px 0;\">

        <p id=\"modalDescription\"></p>

        <hr style=\"margin:10px 0;\">

        <div id=\"modalReponse\"></div>
    </div>
</div>
<script>
// ══════════════════════════════════════════════════════
//  ÉTAT
// ══════════════════════════════════════════════════════
let selectedType     = '';
let selectedPriorite = 'NORMAL';
let recognition      = null;
let isListening      = false;

// ══════════════════════════════════════════════════════
//  SPEECH TO TEXT — Web Speech API (100% gratuit)
// ══════════════════════════════════════════════════════
(function initSpeech() {
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    if (!SpeechRecognition) {
        // Navigateur non compatible → cacher le bouton micro
        document.getElementById('micBtn').style.display    = 'none';
        document.getElementById('sttNotSupported').style.display = 'block';
        document.getElementById('sttStatus').style.display = 'none';
        return;
    }

    recognition = new SpeechRecognition();
    recognition.continuous    = true;   // continue à écouter sans s'arrêter
    recognition.interimResults = true;  // affiche les résultats en temps réel
    recognition.maxAlternatives = 1;

    // ── Résultat reçu ──
    recognition.onresult = function(event) {
        let interim    = '';
        let finalText  = '';

        for (let i = event.resultIndex; i < event.results.length; i++) {
            const transcript = event.results[i][0].transcript;
            if (event.results[i].isFinal) {
                finalText += transcript + ' ';
            } else {
                interim += transcript;
            }
        }

        // Ajouter le texte final dans le textarea
        if (finalText) {
            const textarea = document.getElementById('description');
            textarea.value += finalText;
        }

        // Afficher le texte intermédiaire en italique
        document.getElementById('sttInterim').textContent = interim;
    };

    // ── Fin de l'écoute ──
    recognition.onend = function() {
        // Si on était encore en mode écoute → redémarrer automatiquement
        if (isListening) {
            try { recognition.start(); } catch(e) {}
        }
    };

    // ── Erreur ──
    recognition.onerror = function(event) {
        console.error('STT error:', event.error);

        if (event.error === 'not-allowed') {
            showToast('Accès au microphone refusé. Autorisez-le dans votre navigateur.', 'error');
            stopListening();
        } else if (event.error === 'no-speech') {
            // Silence détecté → ne pas stopper, juste signaler
            document.getElementById('sttStatus').textContent = 'Silence détecté, continuez à parler...';
        } else if (event.error === 'network') {
            showToast('Erreur réseau. La reconnaissance vocale nécessite une connexion.', 'error');
            stopListening();
        }
    };

    recognition.onstart = function() {
        document.getElementById('sttInterim').textContent = '';
    };
})();

// ── Démarrer / Arrêter ──────────────────────────────
function toggleSpeech() {
    if (!recognition) return;
    isListening ? stopListening() : startListening();
}

function startListening() {
    if (!recognition) return;

    // Mettre à jour la langue
    recognition.lang = document.getElementById('sttLang').value;

    try {
        recognition.start();
        isListening = true;

        // UI → état actif
        document.getElementById('micBtn').classList.add('recording');
        document.getElementById('micIcon').className = 'fas fa-stop';
        document.getElementById('sttStatus').className = 'stt-status listening';
        document.getElementById('sttStatus').textContent = 'Écoute en cours... Parlez maintenant';
        document.getElementById('description').focus();

    } catch(e) {
        console.error('Impossible de démarrer:', e);
    }
}

function stopListening() {
    if (!recognition) return;
    isListening = false;

    try { recognition.stop(); } catch(e) {}

    // UI → état inactif
    document.getElementById('micBtn').classList.remove('recording');
    document.getElementById('micIcon').className = 'fas fa-microphone';
    document.getElementById('sttStatus').className = 'stt-status';
    document.getElementById('sttStatus').textContent = 'Enregistrement arrêté';
    document.getElementById('sttInterim').textContent = '';

    // Remettre message par défaut après 2s
    setTimeout(() => {
        if (!isListening) {
            document.getElementById('sttStatus').textContent = 'Cliquez sur le micro pour dicter';
        }
    }, 2000);
}

// ── Effacer description ─────────────────────────────
function clearDescription() {
    if (isListening) stopListening();
    document.getElementById('description').value = '';
    document.getElementById('sttInterim').textContent = '';
    document.getElementById('sttStatus').textContent = 'Cliquez sur le micro pour dicter';
    document.getElementById('sttStatus').className = 'stt-status';
}

// ── Changer la langue pendant l'écoute ─────────────
document.getElementById('sttLang').addEventListener('change', function() {
    if (isListening) {
        stopListening();
        setTimeout(startListening, 300);
    }
});

// ══════════════════════════════════════════════════════
//  TYPE
// ══════════════════════════════════════════════════════
function selectType(type, btn) {
    selectedType = type;
    document.querySelectorAll('.rec-type-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    loadArticles(type);
}

function loadArticles(type) {
    const group  = document.getElementById('articleGroup');
    const select = document.getElementById('articleSelect');
    const loader = document.getElementById('articleLoader');

    group.classList.add('visible');
    select.style.display = 'none';
    loader.style.display = 'block';
    select.innerHTML = '<option value=\"\">— Sélectionnez un article —</option>';

    fetch(`/reclamation/articles?type=\${type}`)
        .then(r => r.json())
        .then(articles => {
            loader.style.display = 'none';
            select.style.display = 'block';
            articles.forEach(a => {
                const opt = document.createElement('option');
                opt.value = a.id;
                opt.textContent = a.label;
                select.appendChild(opt);
            });
        })
        .catch(() => {
            loader.style.display = 'none';
            select.style.display = 'block';
            showToast('Erreur lors du chargement des articles', 'error');
        });
}

// ══════════════════════════════════════════════════════
//  COMPTEUR SUJET
// ══════════════════════════════════════════════════════
document.getElementById('sujet').addEventListener('input', function() {
    document.getElementById('sujetCount').textContent = this.value.length;
});

function soumettreReclamation() {
    if (isListening) stopListening();

    const sujet       = document.getElementById('sujet').value.trim();
    const description = document.getElementById('description').value.trim();
    const targetId    = document.getElementById('articleSelect').value; // 🔥 IMPORTANT
    const btn         = document.getElementById('submitBtn');

    if (!selectedType) {
        showToast('Veuillez sélectionner un type de réclamation', 'error'); return;
    }

    if (!targetId) {
        showToast('Veuillez sélectionner un article', 'error'); return;
    }

    if (!sujet || sujet.length < 5) {
        showToast('Le sujet doit contenir au moins 5 caractères', 'error'); return;
    }

    if (!description || description.length < 20) {
        showToast('La description doit contenir au moins 20 caractères', 'error'); return;
    }

    btn.disabled = true;
    document.getElementById('spinner').style.display    = 'block';
    document.getElementById('submitIcon').style.display = 'none';
    document.getElementById('submitText').textContent   = 'Envoi en cours...';

    fetch('/reclamation/soumettre', {
        method:  'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            type:        selectedType,
            sujet:       sujet,
            description: description,
            target_id:   targetId   // 🔥 ICI LA CORRECTION
        })
    })
    .then(r => r.json())
    .then(data => {
        btn.disabled = false;
        document.getElementById('spinner').style.display    = 'none';
        document.getElementById('submitIcon').style.display = 'block';
        document.getElementById('submitText').textContent   = 'Envoyer la Réclamation';

        if (data.status === 'OK') {
            showToast('✅ ' + data.message, 'success');
            resetForm();
            loadMesReclamations();
        } else {
            showToast(data.message || 'Erreur', 'error');
        }
    })
    .catch(() => {
        btn.disabled = false;
        document.getElementById('spinner').style.display    = 'none';
        document.getElementById('submitIcon').style.display = 'block';
        document.getElementById('submitText').textContent   = 'Envoyer la Réclamation';
        showToast('Erreur de connexion', 'error');
    });
}

// ══════════════════════════════════════════════════════
//  RESET
// ══════════════════════════════════════════════════════
function resetForm() {
    if (isListening) stopListening();
    selectedType     = '';
    selectedPriorite = 'NORMAL';
    document.getElementById('sujet').value            = '';
    document.getElementById('description').value      = '';
    document.getElementById('sujetCount').textContent = '0';
    document.getElementById('sttInterim').textContent = '';
    document.querySelectorAll('.rec-type-btn').forEach(b => b.classList.remove('active'));
    document.getElementById('articleGroup').classList.remove('visible');
    document.getElementById('articleSelect').innerHTML = '<option value=\"\">— Sélectionnez un article —</option>';
}

// ══════════════════════════════════════════════════════
//  MES RÉCLAMATIONS
// ══════════════════════════════════════════════════════
function loadMesReclamations() {
    const list = document.getElementById('recList');

    fetch('/reclamation/mes-reclamations')
        .then(r => r.json())
        .then(recs => {
            if (!recs.length) {
                list.innerHTML = `
                    <div class=\"rec-empty\">
                        <i class=\"fas fa-inbox\"></i>
                        <p>Aucune réclamation pour le moment</p>
                    </div>`;
                return;
            }

            const typeIcons = {
                TRANSPORT:   'fa-plane',
                HEBERGEMENT: 'fa-hotel',
                LOISIR:      'fa-compass',
            };

            list.innerHTML = recs.map(r => `
<div class=\"rec-item\" data-rec='\${JSON.stringify(r)}' onclick=\"openModal(this)\" style=\"cursor:pointer;\">                    <div class=\"rec-item-header\">
                        <span class=\"rec-item-sujet\">\${escapeHtml(r.sujet)}</span>
                        <span class=\"rec-badge badge-\${r.statut}\">\${r.statut.replace('_', ' ')}</span>
                    </div>
                    <div class=\"rec-item-meta\">
                        <span><i class=\"fas \${typeIcons[r.type] || 'fa-tag'}\"></i> \${r.type}</span>
                        <span><i class=\"fas fa-calendar-alt\"></i> \${r.date}</span>
                    </div>
\${r.reponse ? `
    <div class=\"rec-reponse\"><i class=\"fas fa-reply\"></i> \${escapeHtml(r.reponse)}</div>
    \${r.statut === 'TRAITEE' ? `
        <div style=\"margin-top:10px;\">
            \${r.satisfait === null ? `
                <p style=\"font-size:11px; color:rgba(255,255,255,0.5); margin-bottom:6px;\">Êtes-vous satisfait de la réponse ?</p>
                <button onclick=\"setSatisfait(\${r.id}, true)\"
                    style=\"background:#28a745; border:none; color:white; padding:5px 12px; border-radius:20px; cursor:pointer; margin-right:6px; font-size:11px;\">
                    👍 Oui
                </button>
                <button onclick=\"setSatisfait(\${r.id}, false)\"
                    style=\"background:#dc3545; border:none; color:white; padding:5px 12px; border-radius:20px; cursor:pointer; font-size:11px;\">
                    👎 Non
                </button>
            ` : r.satisfait ? `
                <span style=\"color:#4CAF50; font-size:12px;\">👍 Satisfait de la réponse</span>
            ` : `
                <span style=\"color:#FF5252; font-size:12px;\">👎 Pas satisfait de la réponse</span>
            `}
        </div>
    ` : ''}
` : ''}                </div>
            `).join('');
        })
        .catch(err => {
            console.error('Erreur chargement réclamations:', err);
            list.innerHTML = `
                <div class=\"rec-empty\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    <p>Erreur de chargement</p>
                </div>`;
        });
}

// ══════════════════════════════════════════════════════
//  TOAST
// ══════════════════════════════════════════════════════
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

function escapeHtml(str) {
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
}

// ══════════════════════════════════════════════════════
//  INIT
// ══════════════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', loadMesReclamations);

// Arrêter le micro si l'utilisateur quitte la page
window.addEventListener('beforeunload', () => {
    if (isListening) stopListening();
});

function setSatisfait(id, satisfait) {
    fetch(`/reclamation/\${id}/satisfaction`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ satisfait: satisfait })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            showToast(satisfait ? '👍 Merci pour votre retour !' : '👎 Retour enregistré', 'success');
            loadMesReclamations();
        }
    });
}
function openModal(el) {
    const r = JSON.parse(el.dataset.rec);

    document.getElementById('modalSujet').innerText = r.sujet;
    document.getElementById('modalType').innerText = \"Type: \" + r.type;
    document.getElementById('modalDate').innerText = \"Date: \" + r.date;
    document.getElementById('modalDescription').innerText = r.description || '';

    document.getElementById('modalReponse').innerHTML = r.reponse 
        ? \"<b>Réponse admin :</b><br>\" + r.reponse 
        : \"<i>Aucune réponse</i>\";

    document.getElementById('recModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('recModal').style.display = 'none';
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
        return "reclamation/index.html.twig";
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
        return array (  707 => 602,  692 => 588,  683 => 580,  676 => 574,  655 => 554,  651 => 551,  642 => 543,  627 => 529,  615 => 516,  602 => 504,  585 => 488,  580 => 484,  565 => 470,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réclamation — ASAFAR{% endblock %}

{% block body %}
<style>
/* ══════════════════════════════════════════════
   RECLAMATION PAGE — Style ASAFAR
══════════════════════════════════════════════ */
.reclamation-wrapper {
    min-height: 100vh;
    padding: 110px 30px 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
}

/* ── Hero ── */
.rec-hero {
    text-align: center;
    max-width: 700px;
    animation: fadeInUp 0.7s ease-out;
}
.rec-hero h1 {
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
.rec-hero p {
    font-size: 17px;
    color: rgba(244,248,252,0.75);
    line-height: 1.7;
    font-weight: 300;
}

/* ── Layout ── */
.rec-layout {
    display: grid;
    grid-template-columns: 1fr 380px;
    gap: 30px;
    width: 100%;
    max-width: 1100px;
    animation: fadeInUp 0.8s ease-out 0.15s both;
}
@media (max-width: 900px) {
    .rec-layout { grid-template-columns: 1fr; }
}

/* ── Card ── */
.rec-card {
    background: rgba(255,255,255,0.04);
    backdrop-filter: blur(14px);
    border: 1.5px solid rgba(255,193,7,0.18);
    border-radius: 24px;
    padding: 36px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.25);
    transition: border-color 0.4s ease, box-shadow 0.4s ease;
}
.rec-card:hover {
    border-color: rgba(255,193,7,0.4);
    box-shadow: 0 16px 48px rgba(255,193,7,0.1);
}
.rec-card h2 {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    font-weight: 700;
    color: #FFC107;
    margin-bottom: 28px;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.rec-card h2 i { font-size: 20px; color: #FF8F00; }

/* ── Form ── */
.rec-form-group { margin-bottom: 22px; }
.rec-form-group label {
    display: block;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: rgba(244,248,252,0.6);
    margin-bottom: 8px;
}
.rec-form-group label span.required { color: #FF8F00; margin-left: 2px; }

.rec-input, .rec-select, .rec-textarea {
    width: 100%;
    background: rgba(255,255,255,0.05);
    border: 1.5px solid rgba(255,193,7,0.2);
    border-radius: 12px;
    color: #F4F8FC;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    padding: 13px 16px;
    outline: none;
    transition: all 0.35s cubic-bezier(0.34,1.56,0.64,1);
    box-sizing: border-box;
}
.rec-input::placeholder, .rec-textarea::placeholder { color: rgba(244,248,252,0.3); }
.rec-input:focus, .rec-select:focus, .rec-textarea:focus {
    border-color: #FFC107;
    background: rgba(255,193,7,0.05);
    box-shadow: 0 0 0 3px rgba(255,193,7,0.12);
    transform: translateY(-1px);
}
.rec-select option { background: #0B2D4A; color: #F4F8FC; }
.rec-textarea { min-height: 130px; resize: vertical; line-height: 1.6; }

/* ── Type selector ── */
.rec-type-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}
.rec-type-btn {
    background: rgba(255,255,255,0.04);
    border: 1.5px solid rgba(255,193,7,0.2);
    border-radius: 14px;
    padding: 16px 10px;
    cursor: pointer;
    text-align: center;
    transition: all 0.35s cubic-bezier(0.34,1.56,0.64,1);
    color: rgba(244,248,252,0.7);
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
}
.rec-type-btn i { font-size: 22px; color: rgba(255,193,7,0.6); transition: all 0.35s ease; }
.rec-type-btn:hover {
    border-color: rgba(255,193,7,0.5);
    background: rgba(255,193,7,0.06);
    color: #FFC107;
    transform: translateY(-3px);
}
.rec-type-btn:hover i { color: #FFC107; transform: scale(1.2) rotate(8deg); }
.rec-type-btn.active {
    border-color: #FFC107;
    background: rgba(255,193,7,0.12);
    color: #FFC107;
    box-shadow: 0 6px 20px rgba(255,193,7,0.18);
    transform: translateY(-3px) scale(1.03);
}
.rec-type-btn.active i { color: #FF8F00; }

/* ── Article loader ── */
#articleGroup {
    overflow: hidden;
    max-height: 0;
    opacity: 0;
    transition: all 0.5s cubic-bezier(0.34,1.56,0.64,1);
}
#articleGroup.visible { max-height: 120px; opacity: 1; }

/* ══════════════════════════════════════════════
   SPEECH TO TEXT
══════════════════════════════════════════════ */
.desc-wrapper {
    position: relative;
}

.rec-textarea-stt {
    padding-right: 54px; /* espace pour le bouton mic */
}

.mic-btn {
    position: absolute;
    bottom: 12px;
    right: 12px;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: none;
    background: rgba(255,193,7,0.15);
    color: #FFC107;
    font-size: 15px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s cubic-bezier(0.34,1.56,0.64,1);
    z-index: 10;
}
.mic-btn:hover {
    background: rgba(255,193,7,0.3);
    transform: scale(1.1);
}

/* État actif : enregistrement en cours */
.mic-btn.recording {
    background: rgba(255,82,82,0.2);
    color: #FF5252;
    animation: micPulse 1s ease-in-out infinite;
    border: 1.5px solid rgba(255,82,82,0.5);
}

@keyframes micPulse {
    0%, 100% { transform: scale(1);    box-shadow: 0 0 0 0 rgba(255,82,82,0.4); }
    50%       { transform: scale(1.12); box-shadow: 0 0 0 8px rgba(255,82,82,0); }
}

/* Barre de statut STT */
.stt-status {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 8px;
    font-size: 12px;
    color: rgba(244,248,252,0.5);
    min-height: 20px;
    transition: all 0.3s ease;
}
.stt-status.listening {
    color: #FF5252;
}
.stt-status.listening::before {
    content: '';
    width: 8px;
    height: 8px;
    background: #FF5252;
    border-radius: 50%;
    display: inline-block;
    animation: blink 0.8s ease-in-out infinite;
    flex-shrink: 0;
}
@keyframes blink {
    0%, 100% { opacity: 1; }
    50%       { opacity: 0.2; }
}

/* Transcription intermédiaire en italique */
.stt-interim {
    font-style: italic;
    color: rgba(255,193,7,0.5);
    font-size: 12px;
    margin-top: 4px;
    min-height: 18px;
    transition: all 0.2s ease;
}

/* Langue selector */
.stt-lang-row {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 8px;
}
.stt-lang-label {
    font-size: 11px;
    color: rgba(244,248,252,0.4);
    white-space: nowrap;
}
.stt-lang-select {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,193,7,0.15);
    border-radius: 8px;
    color: rgba(244,248,252,0.7);
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    padding: 4px 8px;
    outline: none;
    cursor: pointer;
    transition: all 0.3s ease;
}
.stt-lang-select:focus {
    border-color: rgba(255,193,7,0.4);
}
.stt-lang-select option { background: #0B2D4A; }

/* Bouton effacer */
.stt-clear-btn {
    background: none;
    border: 1px solid rgba(255,82,82,0.3);
    border-radius: 8px;
    color: rgba(255,82,82,0.6);
    font-size: 11px;
    padding: 4px 10px;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
    white-space: nowrap;
}
.stt-clear-btn:hover {
    background: rgba(255,82,82,0.1);
    color: #FF5252;
    border-color: rgba(255,82,82,0.6);
}

/* ── Non supporté ── */
.stt-not-supported {
    display: none;
    font-size: 11px;
    color: rgba(255,82,82,0.7);
    margin-top: 6px;
}

/* ── Submit button ── */
.rec-submit-btn {
    width: 100%;
    padding: 16px;
    background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
    color: #0B2D4A;
    border: none;
    border-radius: 14px;
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.34,1.56,0.64,1);
    box-shadow: 0 6px 20px rgba(255,193,7,0.25);
    margin-top: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}
.rec-submit-btn:hover:not(:disabled) {
    transform: translateY(-4px);
    box-shadow: 0 12px 35px rgba(255,193,7,0.4);
    letter-spacing: 2px;
}
.rec-submit-btn:disabled { opacity: 0.6; cursor: not-allowed; }

/* ── Sidebar ── */
.rec-sidebar h2 { font-size: 18px; }
.rec-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
    max-height: 600px;
    overflow-y: auto;
    padding-right: 4px;
}
.rec-list::-webkit-scrollbar { width: 4px; }
.rec-list::-webkit-scrollbar-track { background: transparent; }
.rec-list::-webkit-scrollbar-thumb { background: rgba(255,193,7,0.3); border-radius: 4px; }

.rec-item {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,193,7,0.12);
    border-radius: 14px;
    padding: 16px;
    transition: all 0.35s ease;
}
.rec-item:hover {
    border-color: rgba(255,193,7,0.35);
    background: rgba(255,193,7,0.04);
    transform: translateX(4px);
}
.rec-item-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 8px;
    margin-bottom: 8px;
}
.rec-item-sujet {
    font-size: 13px;
    font-weight: 600;
    color: #F4F8FC;
    line-height: 1.4;
    flex: 1;
}
.rec-badge {
    font-size: 10px;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 20px;
    letter-spacing: 0.8px;
    white-space: nowrap;
    flex-shrink: 0;
}
.badge-EN_ATTENTE { background: rgba(255,193,7,0.15); color: #FFC107; border: 1px solid rgba(255,193,7,0.3); }
.badge-TRAITEE    { background: rgba(76,175,80,0.15);  color: #4CAF50; border: 1px solid rgba(76,175,80,0.3); }
.badge-REFUSEE    { background: rgba(255,82,82,0.15);  color: #FF5252; border: 1px solid rgba(255,82,82,0.3); }

.rec-item-meta { display: flex; gap: 10px; flex-wrap: wrap; }
.rec-item-meta span {
    font-size: 11px;
    color: rgba(244,248,252,0.5);
    display: flex;
    align-items: center;
    gap: 4px;
}
.rec-item-meta i { font-size: 10px; color: rgba(255,193,7,0.5); }

.rec-reponse {
    margin-top: 10px;
    padding: 10px 12px;
    background: rgba(76,175,80,0.08);
    border-left: 3px solid #4CAF50;
    border-radius: 0 8px 8px 0;
    font-size: 12px;
    color: rgba(244,248,252,0.75);
    line-height: 1.5;
}

.rec-empty {
    text-align: center;
    padding: 40px 20px;
    color: rgba(244,248,252,0.4);
}
.rec-empty i {
    font-size: 40px;
    color: rgba(255,193,7,0.25);
    margin-bottom: 12px;
    display: block;
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
    z-index: 9999;
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

/* ── Spinner ── */
.rec-spinner {
    width: 18px; height: 18px;
    border: 2px solid rgba(11,45,74,0.3);
    border-top-color: #0B2D4A;
    border-radius: 50%;
    animation: spin 0.7s linear infinite;
    display: none;
}
@keyframes spin { to { transform: rotate(360deg); } }
@keyframes fadeInUp {
    from { opacity:0; transform: translateY(30px); }
    to   { opacity:1; transform: translateY(0); }
}
</style>

<div class=\"reclamation-wrapper\">

    {# ── Hero ── #}
    <div class=\"rec-hero\">
        <h1>
            <i class=\"fas fa-comment-dots\" style=\"font-size:38px; display:block; margin-bottom:12px;
               background: linear-gradient(135deg,#FFC107,#FF8F00);
               -webkit-background-clip:text; -webkit-text-fill-color:transparent;\"></i>
            Déposer une Réclamation
        </h1>
        <p>Signalez un problème avec votre transport, hébergement ou excursion.<br>
           Notre équipe vous répond dans les 48h.</p>
    </div>

    <div class=\"rec-layout\">

        {# ═══ FORMULAIRE ═══ #}
        <div class=\"rec-card\">
            <h2><i class=\"fas fa-pen-alt\"></i> Nouvelle Réclamation</h2>

            {# Type #}
            <div class=\"rec-form-group\">
                <label>Type de réclamation <span class=\"required\">*</span></label>
                <div class=\"rec-type-grid\">
                    <button type=\"button\" class=\"rec-type-btn\" onclick=\"selectType('TRANSPORT', this)\">
                        <i class=\"fas fa-plane\"></i> Transport
                    </button>
                    <button type=\"button\" class=\"rec-type-btn\" onclick=\"selectType('HEBERGEMENT', this)\">
                        <i class=\"fas fa-hotel\"></i> Hébergement
                    </button>
                    <button type=\"button\" class=\"rec-type-btn\" onclick=\"selectType('LOISIR', this)\">
                        <i class=\"fas fa-compass\"></i> Excursion
                    </button>
                </div>
            </div>

            {# Article lié #}
            <div class=\"rec-form-group\" id=\"articleGroup\">
                <label>Article concerné <span class=\"required\">*</span></label>
                <select class=\"rec-select\" id=\"articleSelect\">
                    <option value=\"\">— Sélectionnez un article —</option>
                </select>
                <div id=\"articleLoader\" style=\"text-align:center; padding:8px 0; display:none;\">
                    <i class=\"fas fa-circle-notch fa-spin\" style=\"color:#FFC107;\"></i>
                    <span style=\"font-size:12px; color:rgba(244,248,252,0.5); margin-left:8px;\">Chargement...</span>
                </div>
            </div>

            {# Sujet #}
            <div class=\"rec-form-group\">
                <label>Sujet <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"rec-input\" id=\"sujet\"
                       placeholder=\"Ex : Retard de vol, Chambre non conforme...\"
                       maxlength=\"100\">
                <div style=\"text-align:right; font-size:11px; color:rgba(244,248,252,0.3); margin-top:4px;\">
                    <span id=\"sujetCount\">0</span>/100
                </div>
            </div>

            {# ══════════════════════════════════════
               DESCRIPTION + SPEECH TO TEXT
            ══════════════════════════════════════ #}
            <div class=\"rec-form-group\">
                <label>
                    Description détaillée <span class=\"required\">*</span>
                    <span style=\"margin-left:8px; font-size:10px; color:rgba(255,193,7,0.5);
                                 font-weight:400; letter-spacing:0.5px;\">
                        — ou parlez avec le micro 🎤
                    </span>
                </label>

                <div class=\"desc-wrapper\">
                    <textarea class=\"rec-textarea rec-textarea-stt\" id=\"description\"
                              placeholder=\"Décrivez votre problème en détail (minimum 20 caractères)...\"></textarea>

                    {# Bouton micro #}
                    <button type=\"button\" class=\"mic-btn\" id=\"micBtn\"
                            onclick=\"toggleSpeech()\"
                            title=\"Cliquez pour parler\">
                        <i class=\"fas fa-microphone\" id=\"micIcon\"></i>
                    </button>
                </div>

                {# Texte intermédiaire (résultat en temps réel) #}
                <div class=\"stt-interim\" id=\"sttInterim\"></div>

                {# Statut + langue + effacer #}
                <div style=\"display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:8px; margin-top:6px;\">
                    <div class=\"stt-status\" id=\"sttStatus\">
                        Cliquez sur le micro pour dicter
                    </div>
                    <div class=\"stt-lang-row\">
                        <span class=\"stt-lang-label\">Langue :</span>
                        <select class=\"stt-lang-select\" id=\"sttLang\">
                            <option value=\"fr-FR\">🇫🇷 Français</option>
                            <option value=\"ar-TN\">🇹🇳 Arabe</option>
                            <option value=\"en-US\">🇺🇸 English</option>
                            <option value=\"es-ES\">🇪🇸 Español</option>
                            <option value=\"de-DE\">🇩🇪 Deutsch</option>
                        </select>
                        <button type=\"button\" class=\"stt-clear-btn\" onclick=\"clearDescription()\">
                            <i class=\"fas fa-trash-alt\"></i> Effacer
                        </button>
                    </div>
                </div>

                {# Message si navigateur non compatible #}
                <div class=\"stt-not-supported\" id=\"sttNotSupported\">
                    ⚠️ Votre navigateur ne supporte pas la reconnaissance vocale. Utilisez Chrome ou Edge.
                </div>
            </div>

            {# Submit #}
            <button type=\"button\" class=\"rec-submit-btn\" id=\"submitBtn\" onclick=\"soumettreReclamation()\">
                <div class=\"rec-spinner\" id=\"spinner\"></div>
                <i class=\"fas fa-paper-plane\" id=\"submitIcon\"></i>
                <span id=\"submitText\">Envoyer la Réclamation</span>
            </button>
        </div>

        {# ═══ SIDEBAR ═══ #}
        <div class=\"rec-card rec-sidebar\">
            <h2><i class=\"fas fa-history\"></i> Mes Réclamations</h2>
            <div class=\"rec-list\" id=\"recList\">
                <div class=\"rec-empty\">
                    <i class=\"fas fa-inbox\"></i>
                    <p>Chargement...</p>
                </div>
            </div>
        </div>

    </div>
</div>

{# Toast #}
<div class=\"rec-toast\" id=\"toast\">
    <i id=\"toastIcon\" class=\"fas fa-check-circle\"></i>
    <span id=\"toastMsg\"></span>
</div>
<!-- POPUP RECLAMATION -->
<div id=\"recModal\" style=\"
    display:none;
    position:fixed;
    top:0; left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.7);
    z-index:9999;
    align-items:center;
    justify-content:center;
\">
    <div style=\"
        background:#0B2D4A;
        padding:25px;
        border-radius:16px;
        width:400px;
        max-width:90%;
        color:white;
        position:relative;
    \">
        <span onclick=\"closeModal()\" style=\"
            position:absolute;
            top:10px;
            right:15px;
            cursor:pointer;
            font-size:20px;
        \">✖</span>

        <h3 id=\"modalSujet\"></h3>
        <p id=\"modalType\"></p>
        <p id=\"modalDate\"></p>

        <hr style=\"margin:10px 0;\">

        <p id=\"modalDescription\"></p>

        <hr style=\"margin:10px 0;\">

        <div id=\"modalReponse\"></div>
    </div>
</div>
<script>
// ══════════════════════════════════════════════════════
//  ÉTAT
// ══════════════════════════════════════════════════════
let selectedType     = '';
let selectedPriorite = 'NORMAL';
let recognition      = null;
let isListening      = false;

// ══════════════════════════════════════════════════════
//  SPEECH TO TEXT — Web Speech API (100% gratuit)
// ══════════════════════════════════════════════════════
(function initSpeech() {
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    if (!SpeechRecognition) {
        // Navigateur non compatible → cacher le bouton micro
        document.getElementById('micBtn').style.display    = 'none';
        document.getElementById('sttNotSupported').style.display = 'block';
        document.getElementById('sttStatus').style.display = 'none';
        return;
    }

    recognition = new SpeechRecognition();
    recognition.continuous    = true;   // continue à écouter sans s'arrêter
    recognition.interimResults = true;  // affiche les résultats en temps réel
    recognition.maxAlternatives = 1;

    // ── Résultat reçu ──
    recognition.onresult = function(event) {
        let interim    = '';
        let finalText  = '';

        for (let i = event.resultIndex; i < event.results.length; i++) {
            const transcript = event.results[i][0].transcript;
            if (event.results[i].isFinal) {
                finalText += transcript + ' ';
            } else {
                interim += transcript;
            }
        }

        // Ajouter le texte final dans le textarea
        if (finalText) {
            const textarea = document.getElementById('description');
            textarea.value += finalText;
        }

        // Afficher le texte intermédiaire en italique
        document.getElementById('sttInterim').textContent = interim;
    };

    // ── Fin de l'écoute ──
    recognition.onend = function() {
        // Si on était encore en mode écoute → redémarrer automatiquement
        if (isListening) {
            try { recognition.start(); } catch(e) {}
        }
    };

    // ── Erreur ──
    recognition.onerror = function(event) {
        console.error('STT error:', event.error);

        if (event.error === 'not-allowed') {
            showToast('Accès au microphone refusé. Autorisez-le dans votre navigateur.', 'error');
            stopListening();
        } else if (event.error === 'no-speech') {
            // Silence détecté → ne pas stopper, juste signaler
            document.getElementById('sttStatus').textContent = 'Silence détecté, continuez à parler...';
        } else if (event.error === 'network') {
            showToast('Erreur réseau. La reconnaissance vocale nécessite une connexion.', 'error');
            stopListening();
        }
    };

    recognition.onstart = function() {
        document.getElementById('sttInterim').textContent = '';
    };
})();

// ── Démarrer / Arrêter ──────────────────────────────
function toggleSpeech() {
    if (!recognition) return;
    isListening ? stopListening() : startListening();
}

function startListening() {
    if (!recognition) return;

    // Mettre à jour la langue
    recognition.lang = document.getElementById('sttLang').value;

    try {
        recognition.start();
        isListening = true;

        // UI → état actif
        document.getElementById('micBtn').classList.add('recording');
        document.getElementById('micIcon').className = 'fas fa-stop';
        document.getElementById('sttStatus').className = 'stt-status listening';
        document.getElementById('sttStatus').textContent = 'Écoute en cours... Parlez maintenant';
        document.getElementById('description').focus();

    } catch(e) {
        console.error('Impossible de démarrer:', e);
    }
}

function stopListening() {
    if (!recognition) return;
    isListening = false;

    try { recognition.stop(); } catch(e) {}

    // UI → état inactif
    document.getElementById('micBtn').classList.remove('recording');
    document.getElementById('micIcon').className = 'fas fa-microphone';
    document.getElementById('sttStatus').className = 'stt-status';
    document.getElementById('sttStatus').textContent = 'Enregistrement arrêté';
    document.getElementById('sttInterim').textContent = '';

    // Remettre message par défaut après 2s
    setTimeout(() => {
        if (!isListening) {
            document.getElementById('sttStatus').textContent = 'Cliquez sur le micro pour dicter';
        }
    }, 2000);
}

// ── Effacer description ─────────────────────────────
function clearDescription() {
    if (isListening) stopListening();
    document.getElementById('description').value = '';
    document.getElementById('sttInterim').textContent = '';
    document.getElementById('sttStatus').textContent = 'Cliquez sur le micro pour dicter';
    document.getElementById('sttStatus').className = 'stt-status';
}

// ── Changer la langue pendant l'écoute ─────────────
document.getElementById('sttLang').addEventListener('change', function() {
    if (isListening) {
        stopListening();
        setTimeout(startListening, 300);
    }
});

// ══════════════════════════════════════════════════════
//  TYPE
// ══════════════════════════════════════════════════════
function selectType(type, btn) {
    selectedType = type;
    document.querySelectorAll('.rec-type-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    loadArticles(type);
}

function loadArticles(type) {
    const group  = document.getElementById('articleGroup');
    const select = document.getElementById('articleSelect');
    const loader = document.getElementById('articleLoader');

    group.classList.add('visible');
    select.style.display = 'none';
    loader.style.display = 'block';
    select.innerHTML = '<option value=\"\">— Sélectionnez un article —</option>';

    fetch(`/reclamation/articles?type=\${type}`)
        .then(r => r.json())
        .then(articles => {
            loader.style.display = 'none';
            select.style.display = 'block';
            articles.forEach(a => {
                const opt = document.createElement('option');
                opt.value = a.id;
                opt.textContent = a.label;
                select.appendChild(opt);
            });
        })
        .catch(() => {
            loader.style.display = 'none';
            select.style.display = 'block';
            showToast('Erreur lors du chargement des articles', 'error');
        });
}

// ══════════════════════════════════════════════════════
//  COMPTEUR SUJET
// ══════════════════════════════════════════════════════
document.getElementById('sujet').addEventListener('input', function() {
    document.getElementById('sujetCount').textContent = this.value.length;
});

function soumettreReclamation() {
    if (isListening) stopListening();

    const sujet       = document.getElementById('sujet').value.trim();
    const description = document.getElementById('description').value.trim();
    const targetId    = document.getElementById('articleSelect').value; // 🔥 IMPORTANT
    const btn         = document.getElementById('submitBtn');

    if (!selectedType) {
        showToast('Veuillez sélectionner un type de réclamation', 'error'); return;
    }

    if (!targetId) {
        showToast('Veuillez sélectionner un article', 'error'); return;
    }

    if (!sujet || sujet.length < 5) {
        showToast('Le sujet doit contenir au moins 5 caractères', 'error'); return;
    }

    if (!description || description.length < 20) {
        showToast('La description doit contenir au moins 20 caractères', 'error'); return;
    }

    btn.disabled = true;
    document.getElementById('spinner').style.display    = 'block';
    document.getElementById('submitIcon').style.display = 'none';
    document.getElementById('submitText').textContent   = 'Envoi en cours...';

    fetch('/reclamation/soumettre', {
        method:  'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            type:        selectedType,
            sujet:       sujet,
            description: description,
            target_id:   targetId   // 🔥 ICI LA CORRECTION
        })
    })
    .then(r => r.json())
    .then(data => {
        btn.disabled = false;
        document.getElementById('spinner').style.display    = 'none';
        document.getElementById('submitIcon').style.display = 'block';
        document.getElementById('submitText').textContent   = 'Envoyer la Réclamation';

        if (data.status === 'OK') {
            showToast('✅ ' + data.message, 'success');
            resetForm();
            loadMesReclamations();
        } else {
            showToast(data.message || 'Erreur', 'error');
        }
    })
    .catch(() => {
        btn.disabled = false;
        document.getElementById('spinner').style.display    = 'none';
        document.getElementById('submitIcon').style.display = 'block';
        document.getElementById('submitText').textContent   = 'Envoyer la Réclamation';
        showToast('Erreur de connexion', 'error');
    });
}

// ══════════════════════════════════════════════════════
//  RESET
// ══════════════════════════════════════════════════════
function resetForm() {
    if (isListening) stopListening();
    selectedType     = '';
    selectedPriorite = 'NORMAL';
    document.getElementById('sujet').value            = '';
    document.getElementById('description').value      = '';
    document.getElementById('sujetCount').textContent = '0';
    document.getElementById('sttInterim').textContent = '';
    document.querySelectorAll('.rec-type-btn').forEach(b => b.classList.remove('active'));
    document.getElementById('articleGroup').classList.remove('visible');
    document.getElementById('articleSelect').innerHTML = '<option value=\"\">— Sélectionnez un article —</option>';
}

// ══════════════════════════════════════════════════════
//  MES RÉCLAMATIONS
// ══════════════════════════════════════════════════════
function loadMesReclamations() {
    const list = document.getElementById('recList');

    fetch('/reclamation/mes-reclamations')
        .then(r => r.json())
        .then(recs => {
            if (!recs.length) {
                list.innerHTML = `
                    <div class=\"rec-empty\">
                        <i class=\"fas fa-inbox\"></i>
                        <p>Aucune réclamation pour le moment</p>
                    </div>`;
                return;
            }

            const typeIcons = {
                TRANSPORT:   'fa-plane',
                HEBERGEMENT: 'fa-hotel',
                LOISIR:      'fa-compass',
            };

            list.innerHTML = recs.map(r => `
<div class=\"rec-item\" data-rec='\${JSON.stringify(r)}' onclick=\"openModal(this)\" style=\"cursor:pointer;\">                    <div class=\"rec-item-header\">
                        <span class=\"rec-item-sujet\">\${escapeHtml(r.sujet)}</span>
                        <span class=\"rec-badge badge-\${r.statut}\">\${r.statut.replace('_', ' ')}</span>
                    </div>
                    <div class=\"rec-item-meta\">
                        <span><i class=\"fas \${typeIcons[r.type] || 'fa-tag'}\"></i> \${r.type}</span>
                        <span><i class=\"fas fa-calendar-alt\"></i> \${r.date}</span>
                    </div>
\${r.reponse ? `
    <div class=\"rec-reponse\"><i class=\"fas fa-reply\"></i> \${escapeHtml(r.reponse)}</div>
    \${r.statut === 'TRAITEE' ? `
        <div style=\"margin-top:10px;\">
            \${r.satisfait === null ? `
                <p style=\"font-size:11px; color:rgba(255,255,255,0.5); margin-bottom:6px;\">Êtes-vous satisfait de la réponse ?</p>
                <button onclick=\"setSatisfait(\${r.id}, true)\"
                    style=\"background:#28a745; border:none; color:white; padding:5px 12px; border-radius:20px; cursor:pointer; margin-right:6px; font-size:11px;\">
                    👍 Oui
                </button>
                <button onclick=\"setSatisfait(\${r.id}, false)\"
                    style=\"background:#dc3545; border:none; color:white; padding:5px 12px; border-radius:20px; cursor:pointer; font-size:11px;\">
                    👎 Non
                </button>
            ` : r.satisfait ? `
                <span style=\"color:#4CAF50; font-size:12px;\">👍 Satisfait de la réponse</span>
            ` : `
                <span style=\"color:#FF5252; font-size:12px;\">👎 Pas satisfait de la réponse</span>
            `}
        </div>
    ` : ''}
` : ''}                </div>
            `).join('');
        })
        .catch(err => {
            console.error('Erreur chargement réclamations:', err);
            list.innerHTML = `
                <div class=\"rec-empty\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    <p>Erreur de chargement</p>
                </div>`;
        });
}

// ══════════════════════════════════════════════════════
//  TOAST
// ══════════════════════════════════════════════════════
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

function escapeHtml(str) {
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
}

// ══════════════════════════════════════════════════════
//  INIT
// ══════════════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', loadMesReclamations);

// Arrêter le micro si l'utilisateur quitte la page
window.addEventListener('beforeunload', () => {
    if (isListening) stopListening();
});

function setSatisfait(id, satisfait) {
    fetch(`/reclamation/\${id}/satisfaction`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ satisfait: satisfait })
    })
    .then(r => r.json())
    .then(data => {
        if (data.success) {
            showToast(satisfait ? '👍 Merci pour votre retour !' : '👎 Retour enregistré', 'success');
            loadMesReclamations();
        }
    });
}
function openModal(el) {
    const r = JSON.parse(el.dataset.rec);

    document.getElementById('modalSujet').innerText = r.sujet;
    document.getElementById('modalType').innerText = \"Type: \" + r.type;
    document.getElementById('modalDate').innerText = \"Date: \" + r.date;
    document.getElementById('modalDescription').innerText = r.description || '';

    document.getElementById('modalReponse').innerHTML = r.reponse 
        ? \"<b>Réponse admin :</b><br>\" + r.reponse 
        : \"<i>Aucune réponse</i>\";

    document.getElementById('recModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('recModal').style.display = 'none';
}

</script>
{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\reclamation\\index.html.twig");
    }
}
