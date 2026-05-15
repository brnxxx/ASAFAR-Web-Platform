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

/* ai_rapport.html.twig */
class __TwigTemplate_5c08d3f917a5201f8ac9872081dfe07b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ai_rapport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ai_rapport.html.twig"));

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

        yield "Rapport Q/P AI - Analyse Qualité/Prix";
        
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
    body { background: #0B2D4A !important; }

    .ai-page {
        min-height: 100vh;
        padding: 120px 24px 80px;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
    }

    .ai-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .ai-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .ai-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255,193,7,0.15);
        border: 1px solid rgba(255,193,7,0.3);
        padding: 8px 20px;
        border-radius: 30px;
        font-size: 13px;
        color: #FFC107;
        margin-bottom: 20px;
    }

    .ai-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 44px;
        font-weight: 800;
        color: #FFC107;
        margin: 0 0 8px;
    }

    .ai-subtitle {
        font-size: 15px;
        color: rgba(255,255,255,0.6);
        margin: 0;
    }

    /* Form */
    .ai-form-card {
        background: rgba(255,255,255,0.05);
        border: 1.5px solid rgba(255,193,7,0.12);
        border-radius: 18px;
        padding: 28px;
        margin-bottom: 28px;
    }

    .ai-form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
        align-items: end;
    }

    .ai-form-group {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .ai-form-label {
        font-size: 11px;
        font-weight: 700;
        color: rgba(255,193,7,0.8);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .ai-form-input,
    .ai-form-select {
        padding: 14px 16px;
        background: rgba(255,255,255,0.06);
        border: 1.5px solid rgba(255,193,7,0.2);
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
        outline: none;
        transition: all 0.3s ease;
    }

    .ai-form-select {
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='%23FFC107'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 16px center;
        padding-right: 40px;
    }

    .ai-form-input:focus,
    .ai-form-select:focus {
        border-color: #FFC107;
        box-shadow: 0 0 20px rgba(255,193,7,0.08);
    }

    .ai-form-select option {
        background: #0B2D4A;
        color: #fff;
    }

    .ai-submit-btn {
        padding: 14px 32px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        border: none;
        border-radius: 14px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.4s ease;
        box-shadow: 0 10px 30px rgba(255,193,7,0.2);
        font-family: 'Poppins', sans-serif;
        white-space: nowrap;
    }

    .ai-submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 50px rgba(255,193,7,0.3);
    }

    /* Winner Card */
    .winner-card {
        background: linear-gradient(135deg, rgba(11,45,74,0.9), rgba(8,38,62,0.9));
        border: 2px solid #FFC107;
        border-radius: 20px;
        padding: 32px;
        margin-bottom: 24px;
        animation: fadeInUp 0.5s ease;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .winner-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 16px;
    }

    .winner-name {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 28px;
        color: #fff;
        margin: 0 0 8px;
    }

    .winner-badge {
        display: inline-block;
        padding: 6px 14px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
    }

    .score-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-weight: 800;
    }

    .score-circle.high {
        background: rgba(52,211,153,0.15);
        color: #34D399;
        border: 2px solid rgba(52,211,153,0.4);
    }

    .score-circle.medium {
        background: rgba(255,193,7,0.15);
        color: #FFC107;
        border: 2px solid rgba(255,193,7,0.4);
    }

    .score-circle.low {
        background: rgba(239,68,68,0.15);
        color: #EF4444;
        border: 2px solid rgba(239,68,68,0.4);
    }

    .score-value {
        font-size: 26px;
        line-height: 1;
    }

    .score-label {
        font-size: 10px;
        opacity: 0.7;
    }

    .winner-meta {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-bottom: 14px;
    }

    .winner-tag {
        padding: 5px 12px;
        background: rgba(255,193,7,0.1);
        border: 1px solid rgba(255,193,7,0.25);
        border-radius: 20px;
        font-size: 12px;
        color: #FFC107;
        font-weight: 600;
    }

    .progress-bar {
        height: 6px;
        background: rgba(255,255,255,0.08);
        border-radius: 3px;
        overflow: hidden;
    }

    .progress-fill {
        height: 100%;
        border-radius: 3px;
        transition: width 0.6s ease;
    }

    .progress-fill.high { background: linear-gradient(90deg, #34D399, #10B981); }
    .progress-fill.medium { background: linear-gradient(90deg, #FFC107, #FF9800); }
    .progress-fill.low { background: linear-gradient(90deg, #EF4444, #F87171); }

    .winner-desc {
        margin-top: 14px;
        font-size: 13px;
        color: rgba(255,255,255,0.55);
        line-height: 1.6;
    }

    /* Loading */
    .loading-state {
        text-align: center;
        padding: 40px;
        color: rgba(255,255,255,0.5);
    }

    .loading-spinner {
        display: inline-block;
        width: 40px;
        height: 40px;
        border: 3px solid rgba(255,193,7,0.2);
        border-top-color: #FFC107;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* No result */
    .no-result {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,193,7,0.1);
        border-radius: 16px;
        padding: 32px;
        text-align: center;
        color: rgba(255,255,255,0.5);
    }

    @media (max-width: 700px) {
        .ai-title { font-size: 32px; }
        .ai-form-grid { grid-template-columns: 1fr; }
        .winner-header { flex-direction: column; gap: 16px; }
    }
        .card {
        background: rgba(255,255,255,0.05); border: 1.5px solid rgba(255,193,7,0.12);
        border-radius: 18px; padding: 28px; margin-bottom: 20px; animation: fadeInUp 0.5s ease;
        color: #fff;
    }
    .card-title { font-family: 'Playfair Display', Georgia, serif; font-size: 20px; color: #FFC107; margin: 0 0 8px; }
    .card-subtitle { font-size: 13px; color: rgba(255,255,255,0.5); margin: 0 0 16px; }
    .rank-table { width: 100%; border-collapse: collapse; font-size: 13px; }
    .rank-table th { text-align: left; padding: 10px 12px; background: rgba(255,193,7,0.1); color: #FFC107; font-weight: 700; font-size: 11px; text-transform: uppercase; }
    .rank-table td { padding: 10px 12px; border-bottom: 1px solid rgba(255,255,255,0.04); color: rgba(255,255,255,0.8); }
    .rank-table tr.highlight { background: rgba(255,193,7,0.08); }
    .mini-score { display: inline-block; padding: 3px 10px; border-radius: 10px; font-weight: 700; font-size: 12px; }
    .mini-score.excellent { background: rgba(52,211,153,0.2); color: #34D399; }
    .mini-score.bon { background: rgba(255,193,7,0.2); color: #FFC107; }
    .mini-score.moyen { background: rgba(239,68,68,0.2); color: #EF4444; }
    .exp-box { background: rgba(255,193,7,0.06); border: 1px solid rgba(255,193,7,0.15); border-radius: 14px; padding: 20px; }
    .exp-title { font-size: 15px; font-weight: 700; color: #FFC107; margin-bottom: 10px; }
    .exp-text { font-size: 13px; color: rgba(255,255,255,0.65); line-height: 1.7; }

</style>

<div class=\"ai-page\">
    <div class=\"ai-container\">

        <div class=\"ai-header\">
            <div class=\"ai-badge\">🤖 Intelligence Artificielle</div>
            <h1 class=\"ai-title\">Rapport Qualité/Prix AI</h1>
            <p class=\"ai-subtitle\">Analyse intelligente basée sur le meilleur rapport prix/budget de votre localisation</p>
        </div>

        ";
        // line 320
        yield "        <form id=\"ai-form\" class=\"ai-form-card\">
            <div class=\"ai-form-grid\">
                <div class=\"ai-form-group\">
                    <label class=\"ai-form-label\" for=\"ai-lieu\">📍 Localisation</label>
                    <select id=\"ai-lieu\" class=\"ai-form-select\" required>
                        <option value=\"\">Sélectionnez une localisation</option>
                        ";
        // line 326
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["localisations"]) || array_key_exists("localisations", $context) ? $context["localisations"] : (function () { throw new RuntimeError('Variable "localisations" does not exist.', 326, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 327
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            if ((((array_key_exists("selected_lieu", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["selected_lieu"]) || array_key_exists("selected_lieu", $context) ? $context["selected_lieu"] : (function () { throw new RuntimeError('Variable "selected_lieu" does not exist.', 327, $this->source); })()), "")) : ("")) == $context["loc"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        yield "                    </select>
                </div>
                <div class=\"ai-form-group\">
                    <label class=\"ai-form-label\" for=\"ai-budget\">💰 Budget (TND/nuit)</label>
                    <input id=\"ai-budget\" type=\"number\" min=\"10\" value=\"";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("selected_budget", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["selected_budget"]) || array_key_exists("selected_budget", $context) ? $context["selected_budget"] : (function () { throw new RuntimeError('Variable "selected_budget" does not exist.', 333, $this->source); })()), 200)) : (200)), "html", null, true);
        yield "\" step=\"10\" class=\"ai-form-input\" placeholder=\"Ex: 200\">
                </div>
            </div>
            <button type=\"submit\" class=\"ai-submit-btn\" style=\"width:100%; margin-top:20px;\">
                🔍 Analyser le Marché
            </button>
        </form>

        ";
        // line 342
        yield "        <div id=\"ai-result\">
            ";
        // line 343
        if (((array_key_exists("result", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 343, $this->source); })()), "success", [], "any", false, false, false, 343)) && CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "hebergement", [], "any", true, true, false, 343))) {
            // line 344
            yield "                ";
            $context["heb"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 344, $this->source); })()), "hebergement", [], "any", false, false, false, 344);
            // line 345
            yield "                ";
            $context["scoreClass"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 345, $this->source); })()), "score", [], "any", false, false, false, 345) >= 80)) ? ("high") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 345, $this->source); })()), "score", [], "any", false, false, false, 345) >= 50)) ? ("medium") : ("low"))));
            // line 346
            yield "                
                <div class=\"winner-card\">
                    <div class=\"winner-header\">
                        <div>
                            <h2 class=\"winner-name\">";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 350, $this->source); })()), "nom", [], "any", false, false, false, 350), "html", null, true);
            yield "</h2>
                            <span class=\"winner-badge\">🏆 Meilleur Q/P</span>
                        </div>
                        <div class=\"score-circle ";
            // line 353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreClass"]) || array_key_exists("scoreClass", $context) ? $context["scoreClass"] : (function () { throw new RuntimeError('Variable "scoreClass" does not exist.', 353, $this->source); })()), "html", null, true);
            yield "\">
                            <span class=\"score-value\">";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 354, $this->source); })()), "score", [], "any", false, false, false, 354), "html", null, true);
            yield "</span>
                            <span class=\"score-label\">/100</span>
                        </div>
                    </div>

                    <div class=\"winner-meta\">
                        <span class=\"winner-tag\">💰 ";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 360, $this->source); })()), "prix", [], "any", false, false, false, 360), "html", null, true);
            yield " TND</span>
                        <span class=\"winner-tag\">";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 361, $this->source); })()), "type", [], "any", false, false, false, 361), "html", null, true);
            yield "</span>
                        ";
            // line 362
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 362, $this->source); })()), "note", [], "any", false, false, false, 362)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"winner-tag\">⭐ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 362, $this->source); })()), "note", [], "any", false, false, false, 362), "html", null, true);
                yield "/5</span>";
            }
            // line 363
            yield "                    </div>

                    <div class=\"progress-bar\">
                        <div class=\"progress-fill ";
            // line 366
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreClass"]) || array_key_exists("scoreClass", $context) ? $context["scoreClass"] : (function () { throw new RuntimeError('Variable "scoreClass" does not exist.', 366, $this->source); })()), "html", null, true);
            yield "\" style=\"width:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(100, CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 366, $this->source); })()), "score", [], "any", false, false, false, 366)), "html", null, true);
            yield "%;\"></div>
                    </div>

                    ";
            // line 369
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 369, $this->source); })()), "description", [], "any", false, false, false, 369)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 370
                yield "                        <p class=\"winner-desc\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 370, $this->source); })()), "description", [], "any", false, false, false, 370), 0, 200), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["heb"]) || array_key_exists("heb", $context) ? $context["heb"] : (function () { throw new RuntimeError('Variable "heb" does not exist.', 370, $this->source); })()), "description", [], "any", false, false, false, 370)) > 200)) {
                    yield "...";
                }
                yield "</p>
                    ";
            }
            // line 372
            yield "                </div>
            ";
        } elseif ((        // line 373
array_key_exists("result", $context) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 373, $this->source); })()), "success", [], "any", false, false, false, 373))) {
            // line 374
            yield "                <div class=\"no-result\">
                    <p>ℹ️ ";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "message", [], "any", true, true, false, 375)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 375, $this->source); })()), "message", [], "any", false, false, false, 375), "Aucun résultat trouvé.")) : ("Aucun résultat trouvé.")), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 378
        yield "        </div>

    </div>
</div>

<script>
document.getElementById('ai-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const resultDiv = document.getElementById('ai-result');
    resultDiv.innerHTML = `
        <div class=\"loading-state\">
            <div class=\"loading-spinner\"></div>
            <p style=\"margin-top:16px;\">⏳ Analyse en cours...</p>
        </div>
    `;

    const lieu = document.getElementById('ai-lieu').value;
    const budget = parseFloat(document.getElementById('ai-budget').value) || 200;

    try {
        const response = await fetch('/ai/rapport-qp-analyze?_=' + Date.now(), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            },
            body: JSON.stringify({ localisation: lieu, budget: budget })
        });

        const data = await response.json();

                if (data.success && data.hebergement) {
            const heb = data.hebergement;
            const scoreClass = heb.score >= 80 ? 'high' : (heb.score >= 50 ? 'medium' : 'low');

            let tableRows = '';
            if (data.analyse) {
                data.analyse.forEach((item, index) => {
                    const budgetUtilise = ((item.prix / data.budget) * 100).toFixed(0);
                    const economie = (data.budget - item.prix).toFixed(0);
                    const isBest = item.idHebergement === heb.idHebergement;
                    const rowScoreClass = item.score >= 80 ? 'excellent' : (item.score >= 50 ? 'bon' : 'moyen');
                    
                    tableRows += `
                        <tr class=\"\${isBest ? 'highlight' : ''}\">
                            <td style=\"text-align:center;\">\${isBest ? '🏆' : index + 1}</td>
                            <td>\${isBest ? '<span style=\"color:#34D399;\">✓</span> ' : ''}<strong>\${escHtml(item.nom)}</strong><br><small>\${escHtml(item.type)}</small></td>
                            <td><strong>\${item.prix} TND</strong></td>
                            <td><small>\${budgetUtilise}%</small></td>
                            <td style=\"color:#34D399;\">+\${economie} TND</td>
                            <td><span class=\"mini-score \${rowScoreClass}\">\${item.score}</span></td>
                        </tr>
                    `;
                });
            }

            resultDiv.innerHTML = `
                <div class=\"winner-card\">
                    <div class=\"winner-header\">
                        <div><h2 class=\"winner-name\">\${escHtml(heb.nom)}</h2><span class=\"winner-badge\">🏆 Meilleur Q/P</span></div>
                        <div class=\"score-circle \${scoreClass}\"><span class=\"score-value\">\${heb.score}</span><span class=\"score-label\">/100</span></div>
                    </div>
                    <div class=\"winner-meta\">
                        <span class=\"winner-tag\">💰 \${heb.prix} TND</span>
                        <span class=\"winner-tag\">\${escHtml(heb.type)}</span>
                        \${heb.note ? `<span class=\"winner-tag\">⭐ \${heb.note}/5</span>` : ''}
                    </div>
                    <div class=\"progress-bar\"><div class=\"progress-fill \${scoreClass}\" style=\"width:\${Math.min(100, heb.score)}%;\"></div></div>
                    \${heb.description ? `<p class=\"winner-desc\">\${escHtml(heb.description).substring(0, 200)}...</p>` : ''}
                </div>
                <div class=\"card\" style=\"margin-top:20px;\">
                    <h3 class=\"card-title\">📊 Comparatif de tous les hébergements</h3>
                    <p class=\"card-subtitle\">Comment l'AI choisit le meilleur rapport qualité/prix</p>
                    <table class=\"rank-table\">
                        <thead><tr><th>#</th><th>Hébergement</th><th>Prix/nuit</th><th>Budget</th><th>Économie</th><th>Score</th></tr></thead>
                        <tbody>\${tableRows}</tbody>
                    </table>
                    <div class=\"exp-box\" style=\"margin-top:16px;\">
                        <div class=\"exp-title\">🧮 Formule de calcul</div>
                        <div class=\"exp-text\">
                            <strong>Score = (Budget - Prix) / Budget × 50 + Compétitivité × 35 + Note × 3</strong><br><br>
                            • <strong>Budget Efficiency</strong> : Plus le prix est bas par rapport au budget, meilleur est le score<br>
                            • <strong>Compétitivité</strong> : Prix comparé au moins cher de la liste<br>
                            • <strong>Note moyenne</strong> : Bonus pour les hébergements bien notés
                        </div>
                    </div>
                </div>
            `;
        }
    } catch (err) {
        resultDiv.innerHTML = `
            <div class=\"no-result\">
                <p>❌ Erreur lors de l'analyse. Veuillez réessayer.</p>
            </div>
        `;
    }
});

function escHtml(str) {
    if (!str) return '';
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
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
        return "ai_rapport.html.twig";
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
        return array (  547 => 378,  541 => 375,  538 => 374,  536 => 373,  533 => 372,  524 => 370,  522 => 369,  514 => 366,  509 => 363,  503 => 362,  499 => 361,  495 => 360,  486 => 354,  482 => 353,  476 => 350,  470 => 346,  467 => 345,  464 => 344,  462 => 343,  459 => 342,  448 => 333,  442 => 329,  427 => 327,  423 => 326,  415 => 320,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rapport Q/P AI - Analyse Qualité/Prix{% endblock %}

{% block body %}
<style>
    body { background: #0B2D4A !important; }

    .ai-page {
        min-height: 100vh;
        padding: 120px 24px 80px;
        background: radial-gradient(ellipse at 30% 50%, rgba(11,45,74,0.95) 0%, rgba(8,38,62,0.98) 50%, #051621 100%);
    }

    .ai-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .ai-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .ai-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255,193,7,0.15);
        border: 1px solid rgba(255,193,7,0.3);
        padding: 8px 20px;
        border-radius: 30px;
        font-size: 13px;
        color: #FFC107;
        margin-bottom: 20px;
    }

    .ai-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 44px;
        font-weight: 800;
        color: #FFC107;
        margin: 0 0 8px;
    }

    .ai-subtitle {
        font-size: 15px;
        color: rgba(255,255,255,0.6);
        margin: 0;
    }

    /* Form */
    .ai-form-card {
        background: rgba(255,255,255,0.05);
        border: 1.5px solid rgba(255,193,7,0.12);
        border-radius: 18px;
        padding: 28px;
        margin-bottom: 28px;
    }

    .ai-form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
        align-items: end;
    }

    .ai-form-group {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .ai-form-label {
        font-size: 11px;
        font-weight: 700;
        color: rgba(255,193,7,0.8);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .ai-form-input,
    .ai-form-select {
        padding: 14px 16px;
        background: rgba(255,255,255,0.06);
        border: 1.5px solid rgba(255,193,7,0.2);
        border-radius: 12px;
        color: #fff;
        font-size: 14px;
        font-family: 'Poppins', sans-serif;
        outline: none;
        transition: all 0.3s ease;
    }

    .ai-form-select {
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='%23FFC107'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 16px center;
        padding-right: 40px;
    }

    .ai-form-input:focus,
    .ai-form-select:focus {
        border-color: #FFC107;
        box-shadow: 0 0 20px rgba(255,193,7,0.08);
    }

    .ai-form-select option {
        background: #0B2D4A;
        color: #fff;
    }

    .ai-submit-btn {
        padding: 14px 32px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        border: none;
        border-radius: 14px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.4s ease;
        box-shadow: 0 10px 30px rgba(255,193,7,0.2);
        font-family: 'Poppins', sans-serif;
        white-space: nowrap;
    }

    .ai-submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 50px rgba(255,193,7,0.3);
    }

    /* Winner Card */
    .winner-card {
        background: linear-gradient(135deg, rgba(11,45,74,0.9), rgba(8,38,62,0.9));
        border: 2px solid #FFC107;
        border-radius: 20px;
        padding: 32px;
        margin-bottom: 24px;
        animation: fadeInUp 0.5s ease;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .winner-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 16px;
    }

    .winner-name {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: 28px;
        color: #fff;
        margin: 0 0 8px;
    }

    .winner-badge {
        display: inline-block;
        padding: 6px 14px;
        background: linear-gradient(135deg, #FFC107, #FF9800);
        color: #0B2D4A;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
    }

    .score-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-weight: 800;
    }

    .score-circle.high {
        background: rgba(52,211,153,0.15);
        color: #34D399;
        border: 2px solid rgba(52,211,153,0.4);
    }

    .score-circle.medium {
        background: rgba(255,193,7,0.15);
        color: #FFC107;
        border: 2px solid rgba(255,193,7,0.4);
    }

    .score-circle.low {
        background: rgba(239,68,68,0.15);
        color: #EF4444;
        border: 2px solid rgba(239,68,68,0.4);
    }

    .score-value {
        font-size: 26px;
        line-height: 1;
    }

    .score-label {
        font-size: 10px;
        opacity: 0.7;
    }

    .winner-meta {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-bottom: 14px;
    }

    .winner-tag {
        padding: 5px 12px;
        background: rgba(255,193,7,0.1);
        border: 1px solid rgba(255,193,7,0.25);
        border-radius: 20px;
        font-size: 12px;
        color: #FFC107;
        font-weight: 600;
    }

    .progress-bar {
        height: 6px;
        background: rgba(255,255,255,0.08);
        border-radius: 3px;
        overflow: hidden;
    }

    .progress-fill {
        height: 100%;
        border-radius: 3px;
        transition: width 0.6s ease;
    }

    .progress-fill.high { background: linear-gradient(90deg, #34D399, #10B981); }
    .progress-fill.medium { background: linear-gradient(90deg, #FFC107, #FF9800); }
    .progress-fill.low { background: linear-gradient(90deg, #EF4444, #F87171); }

    .winner-desc {
        margin-top: 14px;
        font-size: 13px;
        color: rgba(255,255,255,0.55);
        line-height: 1.6;
    }

    /* Loading */
    .loading-state {
        text-align: center;
        padding: 40px;
        color: rgba(255,255,255,0.5);
    }

    .loading-spinner {
        display: inline-block;
        width: 40px;
        height: 40px;
        border: 3px solid rgba(255,193,7,0.2);
        border-top-color: #FFC107;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* No result */
    .no-result {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,193,7,0.1);
        border-radius: 16px;
        padding: 32px;
        text-align: center;
        color: rgba(255,255,255,0.5);
    }

    @media (max-width: 700px) {
        .ai-title { font-size: 32px; }
        .ai-form-grid { grid-template-columns: 1fr; }
        .winner-header { flex-direction: column; gap: 16px; }
    }
        .card {
        background: rgba(255,255,255,0.05); border: 1.5px solid rgba(255,193,7,0.12);
        border-radius: 18px; padding: 28px; margin-bottom: 20px; animation: fadeInUp 0.5s ease;
        color: #fff;
    }
    .card-title { font-family: 'Playfair Display', Georgia, serif; font-size: 20px; color: #FFC107; margin: 0 0 8px; }
    .card-subtitle { font-size: 13px; color: rgba(255,255,255,0.5); margin: 0 0 16px; }
    .rank-table { width: 100%; border-collapse: collapse; font-size: 13px; }
    .rank-table th { text-align: left; padding: 10px 12px; background: rgba(255,193,7,0.1); color: #FFC107; font-weight: 700; font-size: 11px; text-transform: uppercase; }
    .rank-table td { padding: 10px 12px; border-bottom: 1px solid rgba(255,255,255,0.04); color: rgba(255,255,255,0.8); }
    .rank-table tr.highlight { background: rgba(255,193,7,0.08); }
    .mini-score { display: inline-block; padding: 3px 10px; border-radius: 10px; font-weight: 700; font-size: 12px; }
    .mini-score.excellent { background: rgba(52,211,153,0.2); color: #34D399; }
    .mini-score.bon { background: rgba(255,193,7,0.2); color: #FFC107; }
    .mini-score.moyen { background: rgba(239,68,68,0.2); color: #EF4444; }
    .exp-box { background: rgba(255,193,7,0.06); border: 1px solid rgba(255,193,7,0.15); border-radius: 14px; padding: 20px; }
    .exp-title { font-size: 15px; font-weight: 700; color: #FFC107; margin-bottom: 10px; }
    .exp-text { font-size: 13px; color: rgba(255,255,255,0.65); line-height: 1.7; }

</style>

<div class=\"ai-page\">
    <div class=\"ai-container\">

        <div class=\"ai-header\">
            <div class=\"ai-badge\">🤖 Intelligence Artificielle</div>
            <h1 class=\"ai-title\">Rapport Qualité/Prix AI</h1>
            <p class=\"ai-subtitle\">Analyse intelligente basée sur le meilleur rapport prix/budget de votre localisation</p>
        </div>

        {# Formulaire #}
        <form id=\"ai-form\" class=\"ai-form-card\">
            <div class=\"ai-form-grid\">
                <div class=\"ai-form-group\">
                    <label class=\"ai-form-label\" for=\"ai-lieu\">📍 Localisation</label>
                    <select id=\"ai-lieu\" class=\"ai-form-select\" required>
                        <option value=\"\">Sélectionnez une localisation</option>
                        {% for loc in localisations %}
                            <option value=\"{{ loc }}\" {% if selected_lieu|default('') == loc %}selected{% endif %}>{{ loc }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"ai-form-group\">
                    <label class=\"ai-form-label\" for=\"ai-budget\">💰 Budget (TND/nuit)</label>
                    <input id=\"ai-budget\" type=\"number\" min=\"10\" value=\"{{ selected_budget|default(200) }}\" step=\"10\" class=\"ai-form-input\" placeholder=\"Ex: 200\">
                </div>
            </div>
            <button type=\"submit\" class=\"ai-submit-btn\" style=\"width:100%; margin-top:20px;\">
                🔍 Analyser le Marché
            </button>
        </form>

        {# Résultat #}
        <div id=\"ai-result\">
            {% if result is defined and result.success and result.hebergement is defined %}
                {% set heb = result.hebergement %}
                {% set scoreClass = heb.score >= 80 ? 'high' : (heb.score >= 50 ? 'medium' : 'low') %}
                
                <div class=\"winner-card\">
                    <div class=\"winner-header\">
                        <div>
                            <h2 class=\"winner-name\">{{ heb.nom }}</h2>
                            <span class=\"winner-badge\">🏆 Meilleur Q/P</span>
                        </div>
                        <div class=\"score-circle {{ scoreClass }}\">
                            <span class=\"score-value\">{{ heb.score }}</span>
                            <span class=\"score-label\">/100</span>
                        </div>
                    </div>

                    <div class=\"winner-meta\">
                        <span class=\"winner-tag\">💰 {{ heb.prix }} TND</span>
                        <span class=\"winner-tag\">{{ heb.type }}</span>
                        {% if heb.note %}<span class=\"winner-tag\">⭐ {{ heb.note }}/5</span>{% endif %}
                    </div>

                    <div class=\"progress-bar\">
                        <div class=\"progress-fill {{ scoreClass }}\" style=\"width:{{ min(100, heb.score) }}%;\"></div>
                    </div>

                    {% if heb.description %}
                        <p class=\"winner-desc\">{{ heb.description|slice(0, 200) }}{% if heb.description|length > 200 %}...{% endif %}</p>
                    {% endif %}
                </div>
            {% elseif result is defined and not result.success %}
                <div class=\"no-result\">
                    <p>ℹ️ {{ result.message|default('Aucun résultat trouvé.') }}</p>
                </div>
            {% endif %}
        </div>

    </div>
</div>

<script>
document.getElementById('ai-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const resultDiv = document.getElementById('ai-result');
    resultDiv.innerHTML = `
        <div class=\"loading-state\">
            <div class=\"loading-spinner\"></div>
            <p style=\"margin-top:16px;\">⏳ Analyse en cours...</p>
        </div>
    `;

    const lieu = document.getElementById('ai-lieu').value;
    const budget = parseFloat(document.getElementById('ai-budget').value) || 200;

    try {
        const response = await fetch('/ai/rapport-qp-analyze?_=' + Date.now(), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            },
            body: JSON.stringify({ localisation: lieu, budget: budget })
        });

        const data = await response.json();

                if (data.success && data.hebergement) {
            const heb = data.hebergement;
            const scoreClass = heb.score >= 80 ? 'high' : (heb.score >= 50 ? 'medium' : 'low');

            let tableRows = '';
            if (data.analyse) {
                data.analyse.forEach((item, index) => {
                    const budgetUtilise = ((item.prix / data.budget) * 100).toFixed(0);
                    const economie = (data.budget - item.prix).toFixed(0);
                    const isBest = item.idHebergement === heb.idHebergement;
                    const rowScoreClass = item.score >= 80 ? 'excellent' : (item.score >= 50 ? 'bon' : 'moyen');
                    
                    tableRows += `
                        <tr class=\"\${isBest ? 'highlight' : ''}\">
                            <td style=\"text-align:center;\">\${isBest ? '🏆' : index + 1}</td>
                            <td>\${isBest ? '<span style=\"color:#34D399;\">✓</span> ' : ''}<strong>\${escHtml(item.nom)}</strong><br><small>\${escHtml(item.type)}</small></td>
                            <td><strong>\${item.prix} TND</strong></td>
                            <td><small>\${budgetUtilise}%</small></td>
                            <td style=\"color:#34D399;\">+\${economie} TND</td>
                            <td><span class=\"mini-score \${rowScoreClass}\">\${item.score}</span></td>
                        </tr>
                    `;
                });
            }

            resultDiv.innerHTML = `
                <div class=\"winner-card\">
                    <div class=\"winner-header\">
                        <div><h2 class=\"winner-name\">\${escHtml(heb.nom)}</h2><span class=\"winner-badge\">🏆 Meilleur Q/P</span></div>
                        <div class=\"score-circle \${scoreClass}\"><span class=\"score-value\">\${heb.score}</span><span class=\"score-label\">/100</span></div>
                    </div>
                    <div class=\"winner-meta\">
                        <span class=\"winner-tag\">💰 \${heb.prix} TND</span>
                        <span class=\"winner-tag\">\${escHtml(heb.type)}</span>
                        \${heb.note ? `<span class=\"winner-tag\">⭐ \${heb.note}/5</span>` : ''}
                    </div>
                    <div class=\"progress-bar\"><div class=\"progress-fill \${scoreClass}\" style=\"width:\${Math.min(100, heb.score)}%;\"></div></div>
                    \${heb.description ? `<p class=\"winner-desc\">\${escHtml(heb.description).substring(0, 200)}...</p>` : ''}
                </div>
                <div class=\"card\" style=\"margin-top:20px;\">
                    <h3 class=\"card-title\">📊 Comparatif de tous les hébergements</h3>
                    <p class=\"card-subtitle\">Comment l'AI choisit le meilleur rapport qualité/prix</p>
                    <table class=\"rank-table\">
                        <thead><tr><th>#</th><th>Hébergement</th><th>Prix/nuit</th><th>Budget</th><th>Économie</th><th>Score</th></tr></thead>
                        <tbody>\${tableRows}</tbody>
                    </table>
                    <div class=\"exp-box\" style=\"margin-top:16px;\">
                        <div class=\"exp-title\">🧮 Formule de calcul</div>
                        <div class=\"exp-text\">
                            <strong>Score = (Budget - Prix) / Budget × 50 + Compétitivité × 35 + Note × 3</strong><br><br>
                            • <strong>Budget Efficiency</strong> : Plus le prix est bas par rapport au budget, meilleur est le score<br>
                            • <strong>Compétitivité</strong> : Prix comparé au moins cher de la liste<br>
                            • <strong>Note moyenne</strong> : Bonus pour les hébergements bien notés
                        </div>
                    </div>
                </div>
            `;
        }
    } catch (err) {
        resultDiv.innerHTML = `
            <div class=\"no-result\">
                <p>❌ Erreur lors de l'analyse. Veuillez réessayer.</p>
            </div>
        `;
    }
});

function escHtml(str) {
    if (!str) return '';
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
}
</script>
{% endblock %}", "ai_rapport.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\ai_rapport.html.twig");
    }
}
