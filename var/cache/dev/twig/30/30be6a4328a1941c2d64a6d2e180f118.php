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

/* sarra/profile.html.twig */
class __TwigTemplate_598c42c2c9d11b4a70ccaae69a026ed2 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sarra/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sarra/profile.html.twig"));

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

        yield "Mon Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
    .form-group {
        position: relative;
    }
    .error-msg {
        color: #ff4d4d;
        font-size: 12px;
        display: none;
        margin-top: 5px;
    }
    .form-group input.input-error {
        border-bottom-color: #ff4d4d !important;
    }
    .form-group input:focus {
        border-bottom-color: #d4af37;
    }
</style>
<link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sarra-css/profile.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
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

        // line 31
        yield "
<div class=\"profile-container\">
<main class=\"profile-main\">
<div class=\"profile-card\">

    <div class=\"profile-layout\">

        ";
        // line 41
        yield "        <div class=\"profile-left\">

            ";
        // line 44
        yield "            <div class=\"left-cover\">
                <div class=\"cover-pattern\"></div>
                <div class=\"cover-glow\"></div>
            </div>

            ";
        // line 50
        yield "            <div class=\"profile-image-wrapper\">
            

                ";
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 53, $this->source); })()), "image", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "<img src=\"http://localhost/uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 54, $this->source); })()), "image", [], "any", false, false, false, 54), "html", null, true);
            yield "\" class=\"profile-photo\">
                ";
        } else {
            // line 56
            yield "                    <div class=\"avatar-placeholder\">
                        <span>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 57, $this->source); })()), "prenom", [], "any", false, false, false, 57))), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 57, $this->source); })()), "nom", [], "any", false, false, false, 57))), "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        // line 60
        yield "                <form id=\"photoForm\" enctype=\"multipart/form-data\">
                    <label for=\"photoUpload\" class=\"edit-photo-btn\" title=\"Changer la photo\">
                        <i class=\"fas fa-camera\"></i>
                    </label>
                    <input type=\"file\" id=\"photoUpload\" name=\"image\" accept=\"image/*\">
                </form>
            </div>

            ";
        // line 69
        yield "            <h1 class=\"profile-name\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 69, $this->source); })()), "prenom", [], "any", false, false, false, 69), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 69, $this->source); })()), "nom", [], "any", false, false, false, 69), "html", null, true);
        yield "</h1>

            ";
        // line 72
        yield "            <div class=\"profile-meta\">
                <span class=\"gold-text\">
                    <i class=\"fas fa-calendar-alt\"></i>
                    Membre depuis ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 75, $this->source); })()), "dateInscription", [], "any", false, false, false, 75), "d M Y"), "html", null, true);
        yield "
                </span>
                <div class=\"status-badge status-";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 77, $this->source); })()), "statut", [], "any", false, false, false, 77)), "html", null, true);
        yield "\">
                    ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 78, $this->source); })()), "statut", [], "any", false, false, false, 78), "html", null, true);
        yield "
                </div>
            </div>

            ";
        // line 83
        yield "            <div class=\"trust-score-badge\">
                <div class=\"trust-header\">
                    <i class=\"fas fa-shield-alt\" style=\"color:var(--gold)\"></i>
                    <span>Score de Confiance</span>
                    <strong class=\"gold-text\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 87, $this->source); })()), "trustScore", [], "any", false, false, false, 87), "html", null, true);
        yield "/100</strong>
                </div>
                <div class=\"trust-bar\">
                    <div class=\"trust-progress\" style=\"width: ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 90, $this->source); })()), "trustScore", [], "any", false, false, false, 90), "html", null, true);
        yield "%\"></div>
                </div>
                <div class=\"trust-labels\">
                    <span>0</span>
                    <span>50</span>
                    <span>100</span>
                </div>
            </div>
";
        // line 99
        yield "<div class=\"trust-score-badge\" style=\"margin-top:15px;\">
";
        // line 101
        yield "<div class=\"trust-score-badge\" style=\"margin-top:15px;\">

    <div class=\"trust-header\">
        <i class=\"fas fa-brain\" style=\"color:#00d4ff\"></i>
        <span>Score Quiz</span>
        <strong class=\"gold-text\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuizScore"]) || array_key_exists("totalQuizScore", $context) ? $context["totalQuizScore"] : (function () { throw new RuntimeError('Variable "totalQuizScore" does not exist.', 106, $this->source); })()), "html", null, true);
        yield "</strong>
    </div>

    ";
        // line 109
        $context["percentQuiz"] = (isset($context["totalQuizScore"]) || array_key_exists("totalQuizScore", $context) ? $context["totalQuizScore"] : (function () { throw new RuntimeError('Variable "totalQuizScore" does not exist.', 109, $this->source); })());
        // line 110
        yield "    ";
        if (((isset($context["percentQuiz"]) || array_key_exists("percentQuiz", $context) ? $context["percentQuiz"] : (function () { throw new RuntimeError('Variable "percentQuiz" does not exist.', 110, $this->source); })()) > 100)) {
            $context["percentQuiz"] = 100;
        }
        // line 111
        yield "    ";
        if (((isset($context["percentQuiz"]) || array_key_exists("percentQuiz", $context) ? $context["percentQuiz"] : (function () { throw new RuntimeError('Variable "percentQuiz" does not exist.', 111, $this->source); })()) < 0)) {
            $context["percentQuiz"] = 0;
        }
        // line 112
        yield "
    <div class=\"trust-bar\">
        <div class=\"trust-progress\" style=\"width: ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentQuiz"]) || array_key_exists("percentQuiz", $context) ? $context["percentQuiz"] : (function () { throw new RuntimeError('Variable "percentQuiz" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "%\"></div>
    </div>

    <div class=\"trust-labels\">
        <span>0</span>
        <span>50</span>
        <span>100</span>
    </div>

</div>


    <div class=\"trust-header\">
        <i class=\"fas fa-star\" style=\"color:gold\"></i>
        <span>Score de Fidélité</span>
        <strong class=\"gold-text\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 129, $this->source); })()), "html", null, true);
        yield "/100</strong>
        ";
        // line 130
        if ((($tmp = (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 130, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "    <div style=\"margin-top:10px; background:#FFC107; padding:10px; border-radius:8px; color:#0B2D4A;\">Code actif :
        <strong>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 132, $this->source); })()), "code", [], "any", false, false, false, 132), "html", null, true);
            yield "</strong>
        (-";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new RuntimeError('Variable "promo" does not exist.', 133, $this->source); })()), "percent", [], "any", false, false, false, 133), "html", null, true);
            yield "%)
    </div>
";
        } else {
            // line 136
            yield "    <div style=\"margin-top:10px; background:#ccc; padding:10px; border-radius:8px;\">
        Aucun code disponible
    </div>
";
        }
        // line 140
        yield "    </div>

    ";
        // line 143
        yield "    ";
        $context["percent"] = (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 143, $this->source); })());
        // line 144
        yield "    ";
        if (((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 144, $this->source); })()) > 100)) {
            $context["percent"] = 100;
        }
        // line 145
        yield "    ";
        if (((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 145, $this->source); })()) < 0)) {
            $context["percent"] = 0;
        }
        // line 146
        yield "
    <div class=\"trust-bar\">
        <div class=\"trust-progress\" style=\"width: ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 148, $this->source); })()), "html", null, true);
        yield "%\"></div>
    </div>

    <div class=\"trust-labels\">
        <span>0</span>
        <span>50</span>
        <span>100</span>
    </div>


</div>
</div>";
        // line 160
        yield "
        ";
        // line 164
        yield "        <div class=\"profile-right\">

            ";
        // line 167
        yield "            <div class=\"right-title\">
                <div class=\"right-title-icon\">
                    <i class=\"fas fa-id-card\"></i>
                </div>
                <div>
                    <span class=\"right-title-label\">Espace personnel</span>
                    <h2 class=\"right-title-text\">Informations personnelles</h2>
                </div>
            </div>

            ";
        // line 178
        yield "            <div class=\"gold-divider\"></div>

            ";
        // line 181
        yield "            <div class=\"info-grid\">

                <div class=\"info-card\">
                    <div class=\"info-card-icon\">
                        <i class=\"fas fa-user\"></i>
                    </div>
                    <span class=\"info-label\">Nom complet</span>
                    <span class=\"info-value\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 188, $this->source); })()), "prenom", [], "any", false, false, false, 188), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 188, $this->source); })()), "nom", [], "any", false, false, false, 188), "html", null, true);
        yield "</span>
                </div>

                <div class=\"info-card\">
                    <div class=\"info-card-icon\">
                        <i class=\"fas fa-envelope\"></i>
                    </div>
                    <span class=\"info-label\">Email</span>
                    <span class=\"info-value\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 196, $this->source); })()), "email", [], "any", false, false, false, 196), "html", null, true);
        yield "</span>
                </div>

                <div class=\"info-card\">
                    <div class=\"info-card-icon\">
                        <i class=\"fas fa-phone\"></i>
                    </div>
                    <span class=\"info-label\">Téléphone</span>
                    <span class=\"info-value\">";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 204, $this->source); })()), "telephone", [], "any", false, false, false, 204), "html", null, true);
        yield "</span>
                </div>

                <div class=\"info-card\">
                    <div class=\"info-card-icon\">
                        <i class=\"fas fa-calendar-check\"></i>
                    </div>
                    <span class=\"info-label\">Date d'inscription</span>
                    <span class=\"info-value\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 212, $this->source); })()), "dateInscription", [], "any", false, false, false, 212), "d F Y"), "html", null, true);
        yield "</span>
                </div>

                <div class=\"info-card info-card-wide\">
                    <div class=\"info-card-icon\">
                        <i class=\"fas fa-lock\"></i>
                    </div>
                    <span class=\"info-label\">Mot de passe</span>
                    <div class=\"password-row\">
                        <span class=\"info-value\">••••••••••</span>
                        <button onclick=\"openModal('passwordModal')\" title=\"Changer le mot de passe\" class=\"icon-btn\">
                            <i class=\"fas fa-pen\"></i>
                        </button>
                    </div>
                </div>

            </div>

            ";
        // line 231
        yield "            <div class=\"right-actions\">
                <button class=\"action-btn edit-profile-btn\" onclick=\"openModal('editModal')\">
                    <i class=\"fas fa-pen\"></i> Modifier Profil
                </button>
                <button class=\"action-btn danger-btn\" onclick=\"openModal('deleteModal')\">
                    <i class=\"fas fa-trash\"></i> Supprimer Compte
                </button>
            </div>

        </div>";
        // line 241
        yield "
    </div>";
        // line 243
        yield "</div>";
        // line 244
        yield "</main>
</div>


";
        // line 249
        yield "<div class=\"modal-overlay\" id=\"editModal\">
    <div class=\"modal-container\">
        <button type=\"button\" class=\"modal-close-btn\" onclick=\"closeModal('editModal')\">
            <i class=\"fas fa-times\"></i>
        </button>
        <h3>Modifier Profil</h3>
        <form id=\"editProfileForm\"novalidate>
            <div class=\"form-group\">
                <label for=\"edit-nom\">Nom</label>
                <input type=\"text\" id=\"edit-nom\" name=\"nom\" value=\"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 258, $this->source); })()), "nom", [], "any", false, false, false, 258), "html", null, true);
        yield "\" placeholder=\"Entrez votre nom\">
                <span class=\"error-msg\" id=\"edit-nom-error\"></span>
            </div>
            <div class=\"form-group\">
                <label for=\"edit-prenom\">Prénom</label>
                <input type=\"text\" id=\"edit-prenom\" name=\"prenom\" value=\"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 263, $this->source); })()), "prenom", [], "any", false, false, false, 263), "html", null, true);
        yield "\" placeholder=\"Entrez votre prénom\">
                <span class=\"error-msg\" id=\"edit-prenom-error\"></span>
            </div>
            <div class=\"form-group\">
                <label for=\"edit-email\">Email</label>
                <input type=\"email\" id=\"edit-email\" name=\"email\" value=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 268, $this->source); })()), "email", [], "any", false, false, false, 268), "html", null, true);
        yield "\" placeholder=\"Entrez votre email\">
                <span class=\"error-msg\" id=\"edit-email-error\"></span>
            </div>
            <div class=\"form-group\">
                <label for=\"edit-telephone\">Téléphone</label>
                <input type=\"text\" id=\"edit-telephone\" name=\"telephone\" value=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 273, $this->source); })()), "telephone", [], "any", false, false, false, 273), "html", null, true);
        yield "\" placeholder=\"Entrez votre téléphone\">
                <span class=\"error-msg\" id=\"edit-telephone-error\"></span>
            </div>
            <div class=\"modal-actions\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeModal('editModal')\">Annuler</button>
                <button type=\"submit\" class=\"btn-save\">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

";
        // line 285
        yield "<div class=\"modal-overlay\" id=\"passwordModal\">
    <div class=\"modal-container\">
        <button type=\"button\" class=\"modal-close-btn\" onclick=\"closeModal('passwordModal')\">
            <i class=\"fas fa-times\"></i>
        </button>
        <h3>Changer Mot de Passe</h3>
        <form id=\"passwordForm\">
            <div class=\"form-group\">
                <label for=\"current-password\">Mot de passe actuel</label>
                <input type=\"password\" id=\"current-password\" name=\"current_password\" placeholder=\"Entrez le mot de passe actuel\" required>
                <div id=\"error-current_password\" style=\"color:red\"></div>

            </div>
            <div class=\"form-group\">
                <label for=\"new-password\">Nouveau mot de passe</label>
                <input type=\"password\" id=\"new-password\" name=\"new_password\" placeholder=\"Entrez le nouveau mot de passe\" required>
<div id=\"error-new_password\" style=\"color:red\"></div>

            </div>
            <div class=\"form-group\">
                <label for=\"confirm-password\">Confirmer mot de passe</label>
                <input type=\"password\" id=\"confirm-password\" name=\"confirm_password\" placeholder=\"Confirmez le nouveau mot de passe\" required>
<div id=\"error-confirm_password\" style=\"color:red\"></div>
            </div>
            <div class=\"modal-actions\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeModal('passwordModal')\">Annuler</button>
                <button type=\"submit\" class=\"btn-save\">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

";
        // line 318
        yield "<div class=\"modal-overlay\" id=\"deleteModal\">
    <div class=\"modal-container\">
        <button type=\"button\" class=\"modal-close-btn\" onclick=\"closeModal('deleteModal')\">
            <i class=\"fas fa-times\"></i>
        </button>
        <h3>Supprimer Compte</h3>
        <p class=\"warning-text\">
            <i class=\"fas fa-exclamation-triangle\"></i>
            Cette action est irréversible. Toutes vos données seront supprimées définitivement.
        </p>
<form id=\"deleteForm\">
            <div class=\"form-group\">
                <label for=\"delete-password\">Confirmer avec votre mot de passe</label>
                <input type=\"password\" id=\"delete-password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" required>
                <div id=\"error-delete_password\" style=\"color:red\"></div>
            </div>
            <div class=\"modal-actions\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeModal('deleteModal')\">Annuler</button>
                <button type=\"submit\" class=\"btn-delete\">Supprimer</button>
            </div>
        </form>
    </div>
</div>

<script>
// Validation utilities - based on User.php entity constraints
function showError(fieldId, message) {
    var field = document.getElementById(fieldId);
    var errorSpan = document.getElementById(fieldId + '-error');
    if (field && errorSpan) {
        field.classList.add('input-error');
        errorSpan.textContent = message;
        errorSpan.style.display = 'block';
    }
}

function clearError(fieldId) {
    var field = document.getElementById(fieldId);
    var errorSpan = document.getElementById(fieldId + '-error');
    if (field && errorSpan) {
        field.classList.remove('input-error');
        errorSpan.textContent = '';
        errorSpan.style.display = 'none';
    }
}

function validateNom(value) {
    if (!value || value.trim().length === 0) {
        return \"Le nom est obligatoire\";
    }
    if (value.trim().length < 3) {
        return \"Le nom doit contenir au moins 2 caractères\";
    }
    if (!/^[A-Za-zÀ-ÿ\\s\\-]+\$/.test(value)) {
        return \"Le nom ne doit contenir que des lettres\";
    }
    return null;
}

function validatePrenom(value) {
    if (!value || value.trim().length === 0) {
        return \"Le prénom est obligatoire\";
    }
    if (value.trim().length < 3) {
        return \"Le prénom doit contenir au moins 2 caractères\";
    }
    if (!/^[A-Za-zÀ-ÿ\\s\\-]+\$/.test(value)) {
        return \"Le prénom ne doit contenir que des lettres\";
    }
    return null;
}

function validateEmail(value) {
    if (!value || value.trim().length === 0) {
        return \"Email obligatoire\";
    }
    var emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
    if (!emailRegex.test(value)) {
        return \"Email invalide\";
    }
    return null;
}

function validateTelephone(value) {
    if (!value || value.trim().length === 0) {
        return \"Téléphone obligatoire\";
    }
    var phoneRegex = /^[0-9]{8}\$/;
    if (!phoneRegex.test(value)) {
        return \"Le numéro doit contenir 8 chiffres\";
    }
    return null;
}

// Real-time validation on blur
document.getElementById('edit-nom').addEventListener('blur', function() {
    var error = validateNom(this.value);
    if (error) showError('edit-nom', error);
    else clearError('edit-nom');
});

document.getElementById('edit-prenom').addEventListener('blur', function() {
    var error = validatePrenom(this.value);
    if (error) showError('edit-prenom', error);
    else clearError('edit-prenom');
});

document.getElementById('edit-email').addEventListener('blur', function() {
    var error = validateEmail(this.value);
    if (error) showError('edit-email', error);
    else clearError('edit-email');
});

document.getElementById('edit-telephone').addEventListener('blur', function() {
    var error = validateTelephone(this.value);
    if (error) showError('edit-telephone', error);
    else clearError('edit-telephone');
});

// Form submission validation
document.getElementById('editProfileForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var isValid = true;

    var nomError = validateNom(document.getElementById('edit-nom').value);
    if (nomError) { showError('edit-nom', nomError); isValid = false; }
    else clearError('edit-nom');

    var prenomError = validatePrenom(document.getElementById('edit-prenom').value);
    if (prenomError) { showError('edit-prenom', prenomError); isValid = false; }
    else clearError('edit-prenom');

    var emailError = validateEmail(document.getElementById('edit-email').value);
    if (emailError) { showError('edit-email', emailError); isValid = false; }
    else clearError('edit-email');

    var telephoneError = validateTelephone(document.getElementById('edit-telephone').value);
    if (telephoneError) { showError('edit-telephone', telephoneError); isValid = false; }
    else clearError('edit-telephone');

    if (isValid) {
        fetch(\"";
        // line 460
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_update");
        yield "\", { method: 'POST', body: new FormData(this) })
            .then(function() { location.reload(); });
    }
});

function openModal(id) {
    document.getElementById(id).classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeModal(id) {
    document.getElementById(id).classList.remove('active');
    document.body.style.overflow = 'auto';
}
document.querySelectorAll('.modal-overlay').forEach(function(overlay) {
    overlay.addEventListener('click', function(e) {
        if (e.target === overlay) closeModal(overlay.id);
    });
});
document.getElementById('photoUpload').addEventListener('change', function () {
    var formData = new FormData();
    formData.append('image', this.files[0]);
    fetch(\"";
        // line 481
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_update");
        yield "\", { method: 'POST', body: formData })
        .then(function() { location.reload(); });
});
// current password
document.getElementById('current-password').addEventListener('input', function() {
    document.getElementById('error-current_password').textContent = \"\";
});

// new password
document.getElementById('new-password').addEventListener('input', function() {

    if (this.value.length < 8) {
        document.getElementById('error-new_password').textContent = \"Au moins 8 caractères\";
    } else {
        document.getElementById('error-new_password').textContent = \"\";
    }
});

// confirm password
document.getElementById('confirm-password').addEventListener('input', function() {

    const newPassword = document.getElementById('new-password').value;

    if (this.value !== newPassword) {
        document.getElementById('error-confirm_password').textContent = \"Les mots de passe ne correspondent pas\";
    } else {
        document.getElementById('error-confirm_password').textContent = \"\";
    }
});
document.getElementById('passwordForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // vider anciennes erreurs
    document.getElementById('error-current_password').textContent = \"\";
    document.getElementById('error-new_password').textContent = \"\";
    document.getElementById('error-confirm_password').textContent = \"\";

    fetch(\"";
        // line 518
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_change_password");
        yield "\", {
        method: 'POST',
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {

        if (!data.success) {

            // afficher erreur sous le bon champ
            if (data.field) {
                document.getElementById('error-' + data.field).textContent = data.message;
            }

        } else {
            alert(\"Mot de passe modifié !\");
            closeModal('passwordModal');
        }

    });
});
window.addEventListener('load', function() {
    var bar = document.querySelector('.trust-progress');
    if (bar) {
        var target = bar.style.width;
        bar.style.width = '0%';
        setTimeout(function() { bar.style.width = target; }, 500);
    }
});

document.getElementById('deleteForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // vider erreur
    document.getElementById('error-delete_password').textContent = \"\";

    fetch(\"";
        // line 554
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete");
        yield "\", {
        method: 'POST',
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {

        if (!data.success) {
            document.getElementById('error-delete_password').textContent = data.message;
        } else {
            window.location.href = data.redirect;
        }

    });
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
        return "sarra/profile.html.twig";
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
        return array (  805 => 554,  766 => 518,  726 => 481,  702 => 460,  558 => 318,  524 => 285,  510 => 273,  502 => 268,  494 => 263,  486 => 258,  475 => 249,  469 => 244,  467 => 243,  464 => 241,  453 => 231,  432 => 212,  421 => 204,  410 => 196,  397 => 188,  388 => 181,  384 => 178,  372 => 167,  368 => 164,  365 => 160,  351 => 148,  347 => 146,  342 => 145,  337 => 144,  334 => 143,  330 => 140,  324 => 136,  318 => 133,  314 => 132,  311 => 131,  309 => 130,  305 => 129,  287 => 114,  283 => 112,  278 => 111,  273 => 110,  271 => 109,  265 => 106,  258 => 101,  255 => 99,  244 => 90,  238 => 87,  232 => 83,  225 => 78,  221 => 77,  216 => 75,  211 => 72,  203 => 69,  193 => 60,  186 => 57,  183 => 56,  177 => 54,  175 => 53,  170 => 50,  163 => 44,  159 => 41,  150 => 31,  137 => 30,  120 => 23,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block stylesheets %}
<style>
    .form-group {
        position: relative;
    }
    .error-msg {
        color: #ff4d4d;
        font-size: 12px;
        display: none;
        margin-top: 5px;
    }
    .form-group input.input-error {
        border-bottom-color: #ff4d4d !important;
    }
    .form-group input:focus {
        border-bottom-color: #d4af37;
    }
</style>
<link rel=\"stylesheet\" href=\"{{ asset('sarra-css/profile.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Outfit:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
{% endblock %}

{% block body %}

<div class=\"profile-container\">
<main class=\"profile-main\">
<div class=\"profile-card\">

    <div class=\"profile-layout\">

        {# ══════════════════════════════
           COLONNE GAUCHE
           ══════════════════════════════ #}
        <div class=\"profile-left\">

            {# COVER BANDEAU #}
            <div class=\"left-cover\">
                <div class=\"cover-pattern\"></div>
                <div class=\"cover-glow\"></div>
            </div>

            {# AVATAR #}
            <div class=\"profile-image-wrapper\">
            

                {% if profile.image %}
<img src=\"http://localhost/uploads/{{ profile.image }}\" class=\"profile-photo\">
                {% else %}
                    <div class=\"avatar-placeholder\">
                        <span>{{ profile.prenom|first|upper }}{{ profile.nom|first|upper }}</span>
                    </div>
                {% endif %}
                <form id=\"photoForm\" enctype=\"multipart/form-data\">
                    <label for=\"photoUpload\" class=\"edit-photo-btn\" title=\"Changer la photo\">
                        <i class=\"fas fa-camera\"></i>
                    </label>
                    <input type=\"file\" id=\"photoUpload\" name=\"image\" accept=\"image/*\">
                </form>
            </div>

            {# NOM #}
            <h1 class=\"profile-name\">{{ profile.prenom }} {{ profile.nom }}</h1>

            {# DATE + STATUT #}
            <div class=\"profile-meta\">
                <span class=\"gold-text\">
                    <i class=\"fas fa-calendar-alt\"></i>
                    Membre depuis {{ profile.dateInscription|date('d M Y') }}
                </span>
                <div class=\"status-badge status-{{ profile.statut|lower }}\">
                    {{ profile.statut }}
                </div>
            </div>

            {# TRUST SCORE #}
            <div class=\"trust-score-badge\">
                <div class=\"trust-header\">
                    <i class=\"fas fa-shield-alt\" style=\"color:var(--gold)\"></i>
                    <span>Score de Confiance</span>
                    <strong class=\"gold-text\">{{ profile.trustScore }}/100</strong>
                </div>
                <div class=\"trust-bar\">
                    <div class=\"trust-progress\" style=\"width: {{ profile.trustScore }}%\"></div>
                </div>
                <div class=\"trust-labels\">
                    <span>0</span>
                    <span>50</span>
                    <span>100</span>
                </div>
            </div>
{# FIDELITY SCORE #}
<div class=\"trust-score-badge\" style=\"margin-top:15px;\">
{# QUIZ SCORE #}
<div class=\"trust-score-badge\" style=\"margin-top:15px;\">

    <div class=\"trust-header\">
        <i class=\"fas fa-brain\" style=\"color:#00d4ff\"></i>
        <span>Score Quiz</span>
        <strong class=\"gold-text\">{{ totalQuizScore }}</strong>
    </div>

    {% set percentQuiz = totalQuizScore %}
    {% if percentQuiz > 100 %}{% set percentQuiz = 100 %}{% endif %}
    {% if percentQuiz < 0 %}{% set percentQuiz = 0 %}{% endif %}

    <div class=\"trust-bar\">
        <div class=\"trust-progress\" style=\"width: {{ percentQuiz }}%\"></div>
    </div>

    <div class=\"trust-labels\">
        <span>0</span>
        <span>50</span>
        <span>100</span>
    </div>

</div>


    <div class=\"trust-header\">
        <i class=\"fas fa-star\" style=\"color:gold\"></i>
        <span>Score de Fidélité</span>
        <strong class=\"gold-text\">{{ score }}/100</strong>
        {% if promo %}
    <div style=\"margin-top:10px; background:#FFC107; padding:10px; border-radius:8px; color:#0B2D4A;\">Code actif :
        <strong>{{ promo.code }}</strong>
        (-{{ promo.percent }}%)
    </div>
{% else %}
    <div style=\"margin-top:10px; background:#ccc; padding:10px; border-radius:8px;\">
        Aucun code disponible
    </div>
{% endif %}
    </div>

    {# 🔥 score déjà entre 0 et 100 #}
    {% set percent = score %}
    {% if percent > 100 %}{% set percent = 100 %}{% endif %}
    {% if percent < 0 %}{% set percent = 0 %}{% endif %}

    <div class=\"trust-bar\">
        <div class=\"trust-progress\" style=\"width: {{ percent }}%\"></div>
    </div>

    <div class=\"trust-labels\">
        <span>0</span>
        <span>50</span>
        <span>100</span>
    </div>


</div>
</div>{# end .profile-left #}

        {# ══════════════════════════════
           COLONNE DROITE
           ══════════════════════════════ #}
        <div class=\"profile-right\">

            {# TITRE SECTION #}
            <div class=\"right-title\">
                <div class=\"right-title-icon\">
                    <i class=\"fas fa-id-card\"></i>
                </div>
                <div>
                    <span class=\"right-title-label\">Espace personnel</span>
                    <h2 class=\"right-title-text\">Informations personnelles</h2>
                </div>
            </div>

            {# SÉPARATEUR #}
            <div class=\"gold-divider\"></div>

            {# INFO GRID #}
            <div class=\"info-grid\">

                <div class=\"info-card\">
                    <div class=\"info-card-icon\">
                        <i class=\"fas fa-user\"></i>
                    </div>
                    <span class=\"info-label\">Nom complet</span>
                    <span class=\"info-value\">{{ profile.prenom }} {{ profile.nom }}</span>
                </div>

                <div class=\"info-card\">
                    <div class=\"info-card-icon\">
                        <i class=\"fas fa-envelope\"></i>
                    </div>
                    <span class=\"info-label\">Email</span>
                    <span class=\"info-value\">{{ profile.email }}</span>
                </div>

                <div class=\"info-card\">
                    <div class=\"info-card-icon\">
                        <i class=\"fas fa-phone\"></i>
                    </div>
                    <span class=\"info-label\">Téléphone</span>
                    <span class=\"info-value\">{{ profile.telephone }}</span>
                </div>

                <div class=\"info-card\">
                    <div class=\"info-card-icon\">
                        <i class=\"fas fa-calendar-check\"></i>
                    </div>
                    <span class=\"info-label\">Date d'inscription</span>
                    <span class=\"info-value\">{{ profile.dateInscription|date('d F Y') }}</span>
                </div>

                <div class=\"info-card info-card-wide\">
                    <div class=\"info-card-icon\">
                        <i class=\"fas fa-lock\"></i>
                    </div>
                    <span class=\"info-label\">Mot de passe</span>
                    <div class=\"password-row\">
                        <span class=\"info-value\">••••••••••</span>
                        <button onclick=\"openModal('passwordModal')\" title=\"Changer le mot de passe\" class=\"icon-btn\">
                            <i class=\"fas fa-pen\"></i>
                        </button>
                    </div>
                </div>

            </div>

            {# ACTIONS CÔTE À CÔTE #}
            <div class=\"right-actions\">
                <button class=\"action-btn edit-profile-btn\" onclick=\"openModal('editModal')\">
                    <i class=\"fas fa-pen\"></i> Modifier Profil
                </button>
                <button class=\"action-btn danger-btn\" onclick=\"openModal('deleteModal')\">
                    <i class=\"fas fa-trash\"></i> Supprimer Compte
                </button>
            </div>

        </div>{# end .profile-right #}

    </div>{# end .profile-layout #}
</div>{# end .profile-card #}
</main>
</div>


{# ══ MODAL MODIFIER PROFIL ══ #}
<div class=\"modal-overlay\" id=\"editModal\">
    <div class=\"modal-container\">
        <button type=\"button\" class=\"modal-close-btn\" onclick=\"closeModal('editModal')\">
            <i class=\"fas fa-times\"></i>
        </button>
        <h3>Modifier Profil</h3>
        <form id=\"editProfileForm\"novalidate>
            <div class=\"form-group\">
                <label for=\"edit-nom\">Nom</label>
                <input type=\"text\" id=\"edit-nom\" name=\"nom\" value=\"{{ profile.nom }}\" placeholder=\"Entrez votre nom\">
                <span class=\"error-msg\" id=\"edit-nom-error\"></span>
            </div>
            <div class=\"form-group\">
                <label for=\"edit-prenom\">Prénom</label>
                <input type=\"text\" id=\"edit-prenom\" name=\"prenom\" value=\"{{ profile.prenom }}\" placeholder=\"Entrez votre prénom\">
                <span class=\"error-msg\" id=\"edit-prenom-error\"></span>
            </div>
            <div class=\"form-group\">
                <label for=\"edit-email\">Email</label>
                <input type=\"email\" id=\"edit-email\" name=\"email\" value=\"{{ profile.email }}\" placeholder=\"Entrez votre email\">
                <span class=\"error-msg\" id=\"edit-email-error\"></span>
            </div>
            <div class=\"form-group\">
                <label for=\"edit-telephone\">Téléphone</label>
                <input type=\"text\" id=\"edit-telephone\" name=\"telephone\" value=\"{{ profile.telephone }}\" placeholder=\"Entrez votre téléphone\">
                <span class=\"error-msg\" id=\"edit-telephone-error\"></span>
            </div>
            <div class=\"modal-actions\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeModal('editModal')\">Annuler</button>
                <button type=\"submit\" class=\"btn-save\">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

{# ══ MODAL MOT DE PASSE ══ #}
<div class=\"modal-overlay\" id=\"passwordModal\">
    <div class=\"modal-container\">
        <button type=\"button\" class=\"modal-close-btn\" onclick=\"closeModal('passwordModal')\">
            <i class=\"fas fa-times\"></i>
        </button>
        <h3>Changer Mot de Passe</h3>
        <form id=\"passwordForm\">
            <div class=\"form-group\">
                <label for=\"current-password\">Mot de passe actuel</label>
                <input type=\"password\" id=\"current-password\" name=\"current_password\" placeholder=\"Entrez le mot de passe actuel\" required>
                <div id=\"error-current_password\" style=\"color:red\"></div>

            </div>
            <div class=\"form-group\">
                <label for=\"new-password\">Nouveau mot de passe</label>
                <input type=\"password\" id=\"new-password\" name=\"new_password\" placeholder=\"Entrez le nouveau mot de passe\" required>
<div id=\"error-new_password\" style=\"color:red\"></div>

            </div>
            <div class=\"form-group\">
                <label for=\"confirm-password\">Confirmer mot de passe</label>
                <input type=\"password\" id=\"confirm-password\" name=\"confirm_password\" placeholder=\"Confirmez le nouveau mot de passe\" required>
<div id=\"error-confirm_password\" style=\"color:red\"></div>
            </div>
            <div class=\"modal-actions\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeModal('passwordModal')\">Annuler</button>
                <button type=\"submit\" class=\"btn-save\">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

{# ══ MODAL SUPPRIMER ══ #}
<div class=\"modal-overlay\" id=\"deleteModal\">
    <div class=\"modal-container\">
        <button type=\"button\" class=\"modal-close-btn\" onclick=\"closeModal('deleteModal')\">
            <i class=\"fas fa-times\"></i>
        </button>
        <h3>Supprimer Compte</h3>
        <p class=\"warning-text\">
            <i class=\"fas fa-exclamation-triangle\"></i>
            Cette action est irréversible. Toutes vos données seront supprimées définitivement.
        </p>
<form id=\"deleteForm\">
            <div class=\"form-group\">
                <label for=\"delete-password\">Confirmer avec votre mot de passe</label>
                <input type=\"password\" id=\"delete-password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" required>
                <div id=\"error-delete_password\" style=\"color:red\"></div>
            </div>
            <div class=\"modal-actions\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeModal('deleteModal')\">Annuler</button>
                <button type=\"submit\" class=\"btn-delete\">Supprimer</button>
            </div>
        </form>
    </div>
</div>

<script>
// Validation utilities - based on User.php entity constraints
function showError(fieldId, message) {
    var field = document.getElementById(fieldId);
    var errorSpan = document.getElementById(fieldId + '-error');
    if (field && errorSpan) {
        field.classList.add('input-error');
        errorSpan.textContent = message;
        errorSpan.style.display = 'block';
    }
}

function clearError(fieldId) {
    var field = document.getElementById(fieldId);
    var errorSpan = document.getElementById(fieldId + '-error');
    if (field && errorSpan) {
        field.classList.remove('input-error');
        errorSpan.textContent = '';
        errorSpan.style.display = 'none';
    }
}

function validateNom(value) {
    if (!value || value.trim().length === 0) {
        return \"Le nom est obligatoire\";
    }
    if (value.trim().length < 3) {
        return \"Le nom doit contenir au moins 2 caractères\";
    }
    if (!/^[A-Za-zÀ-ÿ\\s\\-]+\$/.test(value)) {
        return \"Le nom ne doit contenir que des lettres\";
    }
    return null;
}

function validatePrenom(value) {
    if (!value || value.trim().length === 0) {
        return \"Le prénom est obligatoire\";
    }
    if (value.trim().length < 3) {
        return \"Le prénom doit contenir au moins 2 caractères\";
    }
    if (!/^[A-Za-zÀ-ÿ\\s\\-]+\$/.test(value)) {
        return \"Le prénom ne doit contenir que des lettres\";
    }
    return null;
}

function validateEmail(value) {
    if (!value || value.trim().length === 0) {
        return \"Email obligatoire\";
    }
    var emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
    if (!emailRegex.test(value)) {
        return \"Email invalide\";
    }
    return null;
}

function validateTelephone(value) {
    if (!value || value.trim().length === 0) {
        return \"Téléphone obligatoire\";
    }
    var phoneRegex = /^[0-9]{8}\$/;
    if (!phoneRegex.test(value)) {
        return \"Le numéro doit contenir 8 chiffres\";
    }
    return null;
}

// Real-time validation on blur
document.getElementById('edit-nom').addEventListener('blur', function() {
    var error = validateNom(this.value);
    if (error) showError('edit-nom', error);
    else clearError('edit-nom');
});

document.getElementById('edit-prenom').addEventListener('blur', function() {
    var error = validatePrenom(this.value);
    if (error) showError('edit-prenom', error);
    else clearError('edit-prenom');
});

document.getElementById('edit-email').addEventListener('blur', function() {
    var error = validateEmail(this.value);
    if (error) showError('edit-email', error);
    else clearError('edit-email');
});

document.getElementById('edit-telephone').addEventListener('blur', function() {
    var error = validateTelephone(this.value);
    if (error) showError('edit-telephone', error);
    else clearError('edit-telephone');
});

// Form submission validation
document.getElementById('editProfileForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var isValid = true;

    var nomError = validateNom(document.getElementById('edit-nom').value);
    if (nomError) { showError('edit-nom', nomError); isValid = false; }
    else clearError('edit-nom');

    var prenomError = validatePrenom(document.getElementById('edit-prenom').value);
    if (prenomError) { showError('edit-prenom', prenomError); isValid = false; }
    else clearError('edit-prenom');

    var emailError = validateEmail(document.getElementById('edit-email').value);
    if (emailError) { showError('edit-email', emailError); isValid = false; }
    else clearError('edit-email');

    var telephoneError = validateTelephone(document.getElementById('edit-telephone').value);
    if (telephoneError) { showError('edit-telephone', telephoneError); isValid = false; }
    else clearError('edit-telephone');

    if (isValid) {
        fetch(\"{{ path('profile_update') }}\", { method: 'POST', body: new FormData(this) })
            .then(function() { location.reload(); });
    }
});

function openModal(id) {
    document.getElementById(id).classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeModal(id) {
    document.getElementById(id).classList.remove('active');
    document.body.style.overflow = 'auto';
}
document.querySelectorAll('.modal-overlay').forEach(function(overlay) {
    overlay.addEventListener('click', function(e) {
        if (e.target === overlay) closeModal(overlay.id);
    });
});
document.getElementById('photoUpload').addEventListener('change', function () {
    var formData = new FormData();
    formData.append('image', this.files[0]);
    fetch(\"{{ path('profile_update') }}\", { method: 'POST', body: formData })
        .then(function() { location.reload(); });
});
// current password
document.getElementById('current-password').addEventListener('input', function() {
    document.getElementById('error-current_password').textContent = \"\";
});

// new password
document.getElementById('new-password').addEventListener('input', function() {

    if (this.value.length < 8) {
        document.getElementById('error-new_password').textContent = \"Au moins 8 caractères\";
    } else {
        document.getElementById('error-new_password').textContent = \"\";
    }
});

// confirm password
document.getElementById('confirm-password').addEventListener('input', function() {

    const newPassword = document.getElementById('new-password').value;

    if (this.value !== newPassword) {
        document.getElementById('error-confirm_password').textContent = \"Les mots de passe ne correspondent pas\";
    } else {
        document.getElementById('error-confirm_password').textContent = \"\";
    }
});
document.getElementById('passwordForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // vider anciennes erreurs
    document.getElementById('error-current_password').textContent = \"\";
    document.getElementById('error-new_password').textContent = \"\";
    document.getElementById('error-confirm_password').textContent = \"\";

    fetch(\"{{ path('profile_change_password') }}\", {
        method: 'POST',
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {

        if (!data.success) {

            // afficher erreur sous le bon champ
            if (data.field) {
                document.getElementById('error-' + data.field).textContent = data.message;
            }

        } else {
            alert(\"Mot de passe modifié !\");
            closeModal('passwordModal');
        }

    });
});
window.addEventListener('load', function() {
    var bar = document.querySelector('.trust-progress');
    if (bar) {
        var target = bar.style.width;
        bar.style.width = '0%';
        setTimeout(function() { bar.style.width = target; }, 500);
    }
});

document.getElementById('deleteForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // vider erreur
    document.getElementById('error-delete_password').textContent = \"\";

    fetch(\"{{ path('profile_delete') }}\", {
        method: 'POST',
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {

        if (!data.success) {
            document.getElementById('error-delete_password').textContent = data.message;
        } else {
            window.location.href = data.redirect;
        }

    });
});
</script>

{% endblock %}
", "sarra/profile.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\sarra\\profile.html.twig");
    }
}
