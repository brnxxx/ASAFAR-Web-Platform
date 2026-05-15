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

/* sarra/login.html.twig */
class __TwigTemplate_87dfe673949d591a664ea6a5b7a01d9e extends Template
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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sarra/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sarra/login.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sarra-css/auth.css"), "html", null, true);
        yield "\">

<div class=\"login-container\" id=\"authContainer\">

    ";
        // line 7
        yield "    <div class=\"overlay-panel\">
        <div class=\"overlay-content\" id=\"panelContent\">
            <h1 id=\"panelTitle\">WELCOME!</h1>
            <p id=\"panelText\">Connectez-vous pour continuer</p>
        </div>
    </div>

    ";
        // line 15
        yield "    <div class=\"login-right\">
        <h2>Connexion</h2>

        <form id=\"loginForm\">
<div id=\"loginErrorBox\" style=\"display:none; text-align:center; color:red;\"></div>
            <input type=\"text\" name=\"_username\"
                   value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 21, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                   class=\"form-control\"
                   placeholder=\"Email\"
                   id=\"loginEmail\"
                   autocomplete=\"off\">
            <input type=\"password\" name=\"_password\"
                   class=\"form-control\"
                   placeholder=\"Mot de passe\"
                   id=\"loginPassword\"
                   autocomplete=\"off\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
            <button class=\"btn-login\" type=\"button\" onclick=\"handleLogin()\">Se connecter</button>
        </form>

        ";
        // line 36
        yield "        <p style=\"margin-top:10px; text-align:center;\">
            <a href=\"#\" onclick=\"openForgotPassword(); return false;\" style=\"color:#667eea; font-size:13px;\">
                Mot de passe oublié ?
            </a>
        </p>

        ";
        // line 42
        if ((array_key_exists("error", $context) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 42, $this->source); })()))) {
            // line 43
            yield "            <div class=\"login-error\">Email ou mot de passe incorrect</div>
        ";
        }
        // line 45
        yield "
        ";
        // line 47
        yield "        <div id=\"faceIdSection\" style=\"margin-top:15px;\">
            <div id=\"cameraContainer\" style=\"display:none; margin-bottom:10px; text-align:center;\">
                <video id=\"video\" width=\"280\" autoplay
                       style=\"border-radius:10px; border:3px solid #00c896; display:block; margin:0 auto;\"></video>
                <canvas id=\"canvas\" style=\"display:none;\"></canvas>
                <p id=\"faceStatus\" style=\"color:#aaa; font-size:12px; margin-top:6px;\">
                    Regardez la caméra puis cliquez sur Capturer
                </p>
                <button type=\"button\" class=\"btn-login\"
                        onclick=\"captureFace()\"
                        id=\"captureBtn\"
                        style=\"background:#667eea; margin-top:8px;\">
                    Capturer mon visage
                </button>
                <button type=\"button\" onclick=\"closeFaceSection()\"
                        style=\"background:none; border:none; color:#aaa; cursor:pointer; font-size:12px; margin-top:5px; display:block; margin:6px auto 0;\">
                    ✕ Annuler
                </button>
            </div>

            <button type=\"button\" class=\"btn-login\"
                    id=\"faceIdBtn\"
                    onclick=\"openFaceId()\"
                    style=\"background:#00c896;\">
                Utiliser Face ID
            </button>
        </div>

        <p style=\"margin-top:15px;\">
            Pas encore de compte ?
            <a href=\"#\" onclick=\"toggleAuth('register'); return false;\">Créer un compte</a>
        </p>
    </div>

    ";
        // line 82
        yield "    <div class=\"login-form-left\">
        <h2>Inscription</h2>

        ";
        // line 85
        if (array_key_exists("form", $context)) {
            // line 86
            yield "            ";
            if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 87
                yield "                <div class=\"error-global\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'errors');
                yield "</div>
            ";
            }
            // line 89
            yield "
            ";
            // line 90
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register"), "attr" => ["class" => "register-form", "id" => "registerForm", "novalidate" => "novalidate"]]);
            // line 93
            yield "

            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "session", [], "any", false, false, false, 95), "flashbag", [], "any", false, false, false, 95), "all", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 96
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 97
                    yield "                    <div class=\"error\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "</div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "
            <div class=\"form-row\">
                <div class=\"input-group\">
                    ";
            // line 103
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "nom", [], "any", false, false, false, 103), 'widget', ["attr" => ["placeholder" => "Nom", "id" => "userNom"]]);
            yield "
                    <div class=\"error\" id=\"nomError\">";
            // line 104
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "nom", [], "any", false, false, false, 104), 'errors');
            yield "</div>
                </div>
                <div class=\"input-group\">
                    ";
            // line 107
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "prenom", [], "any", false, false, false, 107), 'widget', ["attr" => ["placeholder" => "Prénom", "id" => "userPrenom"]]);
            yield "
                    <div class=\"error\" id=\"prenomError\">";
            // line 108
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "prenom", [], "any", false, false, false, 108), 'errors');
            yield "</div>
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"input-group\">
                    ";
            // line 114
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "email", [], "any", false, false, false, 114), 'widget', ["attr" => ["placeholder" => "Email", "id" => "userEmail"]]);
            yield "
                    <div class=\"error\" id=\"emailError\">";
            // line 115
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "email", [], "any", false, false, false, 115), 'errors');
            yield "</div>
                </div>
                <div class=\"input-group\">
                    ";
            // line 118
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "telephone", [], "any", false, false, false, 118), 'widget', ["attr" => ["placeholder" => "Téléphone", "id" => "userTelephone"]]);
            yield "
                    <div class=\"error\" id=\"telError\">";
            // line 119
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "telephone", [], "any", false, false, false, 119), 'errors');
            yield "</div>
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"input-group\">
                    ";
            // line 125
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "plainPassword", [], "any", false, false, false, 125), "first", [], "any", false, false, false, 125), 'widget', ["attr" => ["placeholder" => "Mot de passe", "id" => "userPassword"]]);
            yield "
                    <div class=\"error\" id=\"passwordError\">";
            // line 126
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "plainPassword", [], "any", false, false, false, 126), "first", [], "any", false, false, false, 126), 'errors');
            yield "</div>
                </div>
                <div class=\"input-group\">
                    ";
            // line 129
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "plainPassword", [], "any", false, false, false, 129), "second", [], "any", false, false, false, 129), 'widget', ["attr" => ["placeholder" => "Confirmer mot de passe", "id" => "userPasswordConfirm"]]);
            yield "
                    <div class=\"error\" id=\"passwordConfirmError\">";
            // line 130
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "plainPassword", [], "any", false, false, false, 130), "second", [], "any", false, false, false, 130), 'errors');
            yield "</div>
                </div>
            </div>

            ";
            // line 134
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "plainPassword", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "errors", [], "any", false, false, false, 134)) > 0)) {
                // line 135
                yield "                <div class=\"error\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "plainPassword", [], "any", false, false, false, 135), 'errors');
                yield "</div>
            ";
            }
            // line 137
            yield "
            <div class=\"input-group\">
                ";
            // line 139
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "image", [], "any", false, false, false, 139), 'widget', ["attr" => ["id" => "userImage"]]);
            yield "
                <div class=\"error\">";
            // line 140
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "image", [], "any", false, false, false, 140), 'errors');
            yield "</div>
            </div>

            <button type=\"button\" class=\"btn-login\" id=\"inscriptionBtn\" onclick=\"handleInscription()\">
                S'inscrire
            </button>

            ";
            // line 147
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'rest');
            yield "
            ";
            // line 148
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), 'form_end');
            yield "

        ";
        } else {
            // line 151
            yield "            <div style=\"color:red;\">Formulaire non chargé</div>
        ";
        }
        // line 153
        yield "
        <p>Déjà un compte ?
            <a href=\"#\" onclick=\"toggleAuth('login'); return false;\">Se connecter</a>
        </p>
    </div>
</div>

";
        // line 161
        yield "<div id=\"validationPopup\" class=\"popup\" style=\"display:none;\">
    <div class=\"popup-content\">
        <span class=\"close-popup\" onclick=\"closeValidationPopup()\">&times;</span>
        <h3 id=\"validationTitle\">Erreur</h3>
        <p id=\"validationMessage\"></p>
        <button class=\"btn-popup\" onclick=\"closeValidationPopup()\">OK</button>
    </div>
</div>

";
        // line 171
        yield "<div id=\"codePopup\" class=\"popup\" style=\"display:none;\">
    <div class=\"popup-content\">
        <span class=\"close-popup\" onclick=\"closeCodePopup()\">&times;</span>
        <h3>Vérification Email</h3>
        <p>Un code a été envoyé à votre email</p>
        <input type=\"text\" id=\"verificationCode\" placeholder=\"Entrer le code\" maxlength=\"6\" autocomplete=\"off\">
        <button onclick=\"verifyCode()\" id=\"verifyBtn\">Vérifier</button>
        <p id=\"codeError\" class=\"error\"></p>
    </div>
</div>

";
        // line 183
        yield "<div id=\"forgotPasswordPopup\" class=\"popup\" style=\"display:none;\">
    <div class=\"popup-content\">
        <span class=\"close-popup\" onclick=\"closeForgotPassword()\">&times;</span>

        ";
        // line 188
        yield "        <div id=\"forgotStep1\">
            <div class=\"popup-icon\">🔑</div>
            <h3>Mot de passe oublié</h3>
            <p style=\"color:#777; font-size:13px; margin-bottom:15px;\">
                Entrez votre email pour recevoir un code de réinitialisation
            </p>
            <input type=\"email\" id=\"forgotEmail\" placeholder=\"Votre email\" autocomplete=\"off\"
                   style=\"width:100%; padding:10px; border:1px solid #ddd; border-radius:6px;
                          font-size:14px; box-sizing:border-box; margin-bottom:10px;\">
            <p id=\"forgotEmailError\" class=\"error\"></p>
            <button class=\"btn-popup\" onclick=\"sendForgotCode()\" id=\"forgotSendBtn\">
                Envoyer le code
            </button>
        </div>

        ";
        // line 204
        yield "        <div id=\"forgotStep2\" style=\"display:none;\">
            <div class=\"popup-icon\">📧</div>
            <h3>Vérification</h3>
            <p style=\"color:#777; font-size:13px; margin-bottom:15px;\">
                Un code à 6 chiffres a été envoyé à <strong id=\"forgotEmailDisplay\"></strong>
            </p>
            <input type=\"text\" id=\"forgotCode\" placeholder=\"Code à 6 chiffres\"
                   maxlength=\"6\" autocomplete=\"off\"
                   style=\"width:100%; padding:10px; border:1px solid #ddd; border-radius:6px;
                          font-size:14px; box-sizing:border-box; margin-bottom:10px;
                          text-align:center; letter-spacing:6px; font-size:20px;\">
            <p id=\"forgotCodeError\" class=\"error\"></p>
            <button class=\"btn-popup\" onclick=\"verifyForgotCode()\" id=\"forgotVerifyBtn\">
                Vérifier le code
            </button>
            <button onclick=\"backToForgotStep1()\"
                    style=\"background:none; border:none; color:#aaa; cursor:pointer;
                           font-size:12px; margin-top:8px; display:block; width:100%;\">
                ← Changer d'email
            </button>
        </div>

        ";
        // line 227
        yield "        <div id=\"forgotStep3\" style=\"display:none;\">
            <div class=\"popup-icon\">🔒</div>
            <h3>Nouveau mot de passe</h3>
            <p style=\"color:#777; font-size:13px; margin-bottom:15px;\">
                Choisissez un nouveau mot de passe sécurisé
            </p>
            <input type=\"password\" id=\"newPassword\" placeholder=\"Nouveau mot de passe\"
                   autocomplete=\"off\"
                   style=\"width:100%; padding:10px; border:1px solid #ddd; border-radius:6px;
                          font-size:14px; box-sizing:border-box; margin-bottom:10px;\">
            <input type=\"password\" id=\"confirmNewPassword\" placeholder=\"Confirmer le mot de passe\"
                   autocomplete=\"off\"
                   style=\"width:100%; padding:10px; border:1px solid #ddd; border-radius:6px;
                          font-size:14px; box-sizing:border-box; margin-bottom:10px;\">
            <p id=\"forgotPasswordError\" class=\"error\"></p>
            <button class=\"btn-popup\" onclick=\"resetPassword()\" id=\"resetBtn\">
                Réinitialiser
            </button>
        </div>

        ";
        // line 248
        yield "        <div id=\"forgotStep4\" style=\"display:none;\">
            <div class=\"popup-icon\" style=\"color:#00c896;\">✅</div>
            <h3 style=\"color:#00c896;\">Mot de passe modifié !</h3>
            <p style=\"color:#777; font-size:13px; margin-bottom:15px;\">
                Votre mot de passe a été réinitialisé avec succès.
            </p>
            <button class=\"btn-popup\" onclick=\"closeForgotPassword()\" style=\"background:#00c896;\">
                Se connecter
            </button>
        </div>

    </div>
</div>

<script>
// ========== TOGGLE PANEL ==========
function toggleAuth(target) {
    const container  = document.getElementById('authContainer');
    const panelTitle = document.getElementById('panelTitle');
    const panelText  = document.getElementById('panelText');
    if (target === 'register') {
        container.classList.add('toggled');
        panelTitle.textContent = 'WELCOME BACK!';
        panelText.textContent  = 'Inscrivez-vous pour commencer';
    } else {
        container.classList.remove('toggled');
        panelTitle.textContent = 'WELCOME!';
        panelText.textContent  = 'Connectez-vous pour continuer';
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const hasErrors = document.querySelector('.login-form-left .error, .login-form-left .error-global');
    if (hasErrors && hasErrors.textContent.trim() !== '') toggleAuth('register');
});

// ========== POPUP ==========
function showValidationPopup(title, message) {
    document.getElementById('validationTitle').innerText   = title;
    document.getElementById('validationMessage').innerText = message;
    document.getElementById('validationPopup').style.display = 'block';
}
function closeValidationPopup() { document.getElementById('validationPopup').style.display = 'none'; }
function closeCodePopup()       { document.getElementById('codePopup').style.display = 'none'; }
window.onclick = function(event) {
    if (event.target == document.getElementById('validationPopup'))     closeValidationPopup();
    if (event.target == document.getElementById('codePopup'))           closeCodePopup();
    if (event.target == document.getElementById('forgotPasswordPopup')) closeForgotPassword();
};

function handleLogin() {
    const email    = document.getElementById('loginEmail').value.trim();
    const password = document.getElementById('loginPassword').value;

    const errorBox = document.getElementById('loginErrorBox');
    errorBox.style.display = 'none';
    errorBox.innerText = '';

    if (!email) {
        errorBox.style.display = 'block';
        errorBox.innerText = \"Veuillez entrer votre email\";
        return;
    }

    if (!password) {
        errorBox.style.display = 'block';
        errorBox.innerText = \"Veuillez entrer votre mot de passe\";
        return;
    }

    fetch('/smart-login', {
        method: 'POST',
        body: new FormData(document.getElementById('loginForm'))
    })
    .then(res => res.json()) // 🔥 on supprime res.ok
    .then(data => {
if (data.status === 'FACE_REQUIRED') {

    const errorBox = document.getElementById('loginErrorBox');

    errorBox.style.display = 'block';
    errorBox.innerText = data.message || \"Vérification Face ID requise\";

    openFaceId(); // ouvre caméra

    return; // 🔥 STOP ici (important)
}
        else if (data.status === 'OK') {
            window.location.href = data.redirect_url;
        }
        else {
            errorBox.style.display = 'block';
            errorBox.innerText = data.message || \"Email ou mot de passe incorrect\";
        }
    })
    .catch(() => {
        errorBox.style.display = 'block';
        errorBox.innerText = \"Erreur serveur\";
    });
}

// ========== FACE ID ==========
let cameraStream = null;

function openFaceId() {
    const email = document.getElementById('loginEmail').value.trim();
    if (!email) {
        showValidationPopup('Erreur', \"Veuillez d'abord entrer votre email\");
        return;
    }
    document.getElementById('cameraContainer').style.display = 'block';
    document.getElementById('faceIdBtn').style.display       = 'none';
    document.getElementById('faceStatus').textContent        = 'Regardez la caméra puis cliquez sur Capturer';
    document.getElementById('captureBtn').disabled           = false;
    document.getElementById('captureBtn').textContent        = 'Capturer mon visage';

    navigator.mediaDevices.getUserMedia({ video: true })
        .then(stream => {
            cameraStream = stream;
            document.getElementById('video').srcObject = stream;
        })
        .catch(err => {
            showValidationPopup('Erreur', \"Impossible d'accéder à la caméra : \" + err.message);
            closeFaceSection();
        });
}

function closeFaceSection() {
    document.getElementById('cameraContainer').style.display = 'none';
    document.getElementById('faceIdBtn').style.display       = 'block';
    if (cameraStream) {
        cameraStream.getTracks().forEach(track => track.stop());
        cameraStream = null;
    }
}

function captureFace() {
    const email      = document.getElementById('loginEmail').value.trim();
    const video      = document.getElementById('video');
    const canvas     = document.getElementById('canvas');
    const captureBtn = document.getElementById('captureBtn');

    canvas.width  = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0);
    const imageData = canvas.toDataURL('image/jpeg');

    captureBtn.disabled    = true;
    captureBtn.textContent = 'Vérification...';
    document.getElementById('faceStatus').textContent = 'Analyse en cours...';

    fetch('/face-login', {
        method:  'POST',
        headers: { 'Content-Type': 'application/json' },
        body:    JSON.stringify({ email, image: imageData })
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'OK') {
            document.getElementById('faceStatus').textContent = 'Visage reconnu !';
            closeFaceSection();
            window.location.href = data.redirect_url;
        } else {
            document.getElementById('faceStatus').textContent = data.message;
            captureBtn.disabled    = false;
            captureBtn.textContent = 'Réessayer';
        }
    })
    .catch(() => {
        document.getElementById('faceStatus').textContent = 'Erreur de connexion';
        captureBtn.disabled    = false;
        captureBtn.textContent = 'Réessayer';
    });
}

// ========== MOT DE PASSE OUBLIÉ ==========
let forgotEmailValue = '';
let forgotToken      = '';

function openForgotPassword() {
    // Réinitialiser toutes les étapes
    showForgotStep(1);
    document.getElementById('forgotEmail').value      = '';
    document.getElementById('forgotCode').value       = '';
    document.getElementById('newPassword').value      = '';
    document.getElementById('confirmNewPassword').value = '';
    document.getElementById('forgotEmailError').innerText   = '';
    document.getElementById('forgotCodeError').innerText    = '';
    document.getElementById('forgotPasswordError').innerText = '';
    document.getElementById('forgotPasswordPopup').style.display = 'block';
}

function closeForgotPassword() {
    document.getElementById('forgotPasswordPopup').style.display = 'none';
}

function showForgotStep(step) {
    [1, 2, 3, 4].forEach(n => {
        document.getElementById('forgotStep' + n).style.display = (n === step) ? 'block' : 'none';
    });
}

function backToForgotStep1() {
    document.getElementById('forgotCode').value     = '';
    document.getElementById('forgotCodeError').innerText = '';
    showForgotStep(1);
}

// Étape 1 : envoyer le code par email
function sendForgotCode() {
    const email = document.getElementById('forgotEmail').value.trim();
    const btn   = document.getElementById('forgotSendBtn');

    document.getElementById('forgotEmailError').innerText = '';

    if (!email) {
        document.getElementById('forgotEmailError').innerText = 'Veuillez entrer votre email';
        return;
    }
    if (!/^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/.test(email)) {
        document.getElementById('forgotEmailError').innerText = 'Email invalide';
        return;
    }

    btn.disabled    = true;
    btn.textContent = 'Envoi en cours...';

    fetch('/forgot-password/send-code', {
        method:  'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body:    'email=' + encodeURIComponent(email)
    })
    .then(res => res.json())
    .then(data => {
        btn.disabled    = false;
        btn.textContent = 'Envoyer le code';
        if (data.status === 'OK') {
            forgotEmailValue = email;
            document.getElementById('forgotEmailDisplay').textContent = email;
            showForgotStep(2);
        } else {
            document.getElementById('forgotEmailError').innerText = data.message || 'Erreur lors de l\\'envoi';
        }
    })
    .catch(() => {
        btn.disabled    = false;
        btn.textContent = 'Envoyer le code';
        document.getElementById('forgotEmailError').innerText = 'Erreur de connexion';
    });
}

// Étape 2 : vérifier le code
function verifyForgotCode() {
    const code = document.getElementById('forgotCode').value.trim();
    const btn  = document.getElementById('forgotVerifyBtn');

    document.getElementById('forgotCodeError').innerText = '';

    if (!code || code.length !== 6) {
        document.getElementById('forgotCodeError').innerText = 'Veuillez entrer un code à 6 chiffres';
        return;
    }

    btn.disabled    = true;
    btn.textContent = 'Vérification...';

    fetch('/forgot-password/verify-code', {
        method:  'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body:    'email=' + encodeURIComponent(forgotEmailValue) + '&code=' + encodeURIComponent(code)
    })
    .then(res => res.json())
    .then(data => {
        btn.disabled    = false;
        btn.textContent = 'Vérifier le code';
        if (data.status === 'OK') {
            forgotToken = data.token || '';
            showForgotStep(3);
        } else {
            document.getElementById('forgotCodeError').innerText = data.message || 'Code incorrect';
        }
    })
    .catch(() => {
        btn.disabled    = false;
        btn.textContent = 'Vérifier le code';
        document.getElementById('forgotCodeError').innerText = 'Erreur de connexion';
    });
}

// Étape 3 : réinitialiser le mot de passe
function resetPassword() {
    const newPwd     = document.getElementById('newPassword').value;
    const confirmPwd = document.getElementById('confirmNewPassword').value;
    const btn        = document.getElementById('resetBtn');

    document.getElementById('forgotPasswordError').innerText = '';

    if (!newPwd || newPwd.length < 6) {
        document.getElementById('forgotPasswordError').innerText = 'Le mot de passe doit contenir au moins 6 caractères';
        return;
    }
    if (newPwd !== confirmPwd) {
        document.getElementById('forgotPasswordError').innerText = 'Les mots de passe ne correspondent pas';
        return;
    }

    btn.disabled    = true;
    btn.textContent = 'Réinitialisation...';

    fetch('/forgot-password/reset', {
        method:  'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body:    'email='    + encodeURIComponent(forgotEmailValue)
               + '&token='    + encodeURIComponent(forgotToken)
               + '&password=' + encodeURIComponent(newPwd)
    })
    .then(res => res.json())
    .then(data => {
        btn.disabled    = false;
        btn.textContent = 'Réinitialiser';
        if (data.status === 'OK') {
            showForgotStep(4);
        } else {
            document.getElementById('forgotPasswordError').innerText = data.message || 'Erreur lors de la réinitialisation';
        }
    })
    .catch(() => {
        btn.disabled    = false;
        btn.textContent = 'Réinitialiser';
        document.getElementById('forgotPasswordError').innerText = 'Erreur de connexion';
    });
}

// ========== INSCRIPTION ==========
let formData = {};

function handleInscription() {
    const email = document.getElementById('user_email').value.trim();
    const btn   = document.getElementById('inscriptionBtn');

    if (!email) { showValidationPopup('Erreur', 'Veuillez entrer votre email'); return; }
    if (btn) { btn.disabled = true; btn.textContent = 'Vérification...'; }

    fetch('/validate-register', {
        method: 'POST',
        body:   new FormData(document.getElementById('registerForm'))
    })
    .then(res => res.json())
    .then(data => {
        if (data.valid) {
            fetch('/check-email', {
                method:  'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body:    'email=' + encodeURIComponent(email)
            })
            .then(res => res.text())
            .then(result => {
                if (result === 'OK') {
                    sendVerificationCode(email, btn);
                } else {
                    document.getElementById('user_email').classList.add('input-error');
                    document.getElementById('emailError').innerHTML = result;
                    if (btn) { btn.disabled = false; btn.textContent = \"S'inscrire\"; }
                }
            });
        } else {
            document.open();
            document.write(data.html);
            document.close();
        }
    })
    .catch(() => {
        showValidationPopup('Erreur', 'Erreur de connexion au serveur');
        if (btn) { btn.disabled = false; btn.textContent = \"S'inscrire\"; }
    });
}

function sendVerificationCode(email, btn) {
    fetch('/send-code', {
        method:  'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body:    'email=' + encodeURIComponent(email)
    })
    .then(res => res.text())
    .then(data => {
        if (data === 'Code envoyé') {
            formData.email = email;
            document.getElementById('codePopup').style.display = 'block';
            if (btn) { btn.disabled = false; btn.textContent = \"S'inscrire\"; }
        } else {
            showValidationPopup('Erreur', data);
            if (btn) { btn.disabled = false; btn.textContent = \"S'inscrire\"; }
        }
    })
    .catch(() => {
        showValidationPopup('Erreur', 'Erreur de connexion');
        if (btn) { btn.disabled = false; btn.textContent = \"S'inscrire\"; }
    });
}

function verifyCode() {
    const code      = document.getElementById('verificationCode').value;
    const verifyBtn = document.getElementById('verifyBtn');

    if (!code || code.length !== 6) {
        document.getElementById('codeError').innerText = 'Veuillez entrer un code à 6 chiffres';
        return;
    }
    if (verifyBtn) { verifyBtn.disabled = true; verifyBtn.textContent = 'Vérification...'; }

    fetch('/verify-code', {
        method:  'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body:    'email=' + encodeURIComponent(formData.email) + '&code=' + encodeURIComponent(code)
    })
    .then(res => res.text())
    .then(data => {
        if (data === 'Email vérifié') {
            document.getElementById('codePopup').style.display = 'none';
            document.getElementById('registerForm').submit();
        } else {
            document.getElementById('codeError').innerText = data;
            if (verifyBtn) { verifyBtn.disabled = false; verifyBtn.textContent = 'Vérifier'; }
        }
    })
    .catch(() => {
        document.getElementById('codeError').innerText = 'Erreur de connexion';
        if (verifyBtn) { verifyBtn.disabled = false; verifyBtn.textContent = 'Vérifier'; }
    });
}
</script>

<style>






.input-error { border: 2px solid red !important; }
.error { color: red; font-size: 12px; margin-top: 5px; }
.error-global {
    color: red; font-size: 14px; text-align: center;
    margin-bottom: 10px; padding: 10px;
    background-color: #ffe6e6; border-radius: 6px;
}
.popup {
    position: fixed; top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.6);
    z-index: 1000; display: flex;
    align-items: center; justify-content: center;
}
.popup-content {
    background: white; padding: 30px; width: 350px;
    border-radius: 10px; text-align: center;
    position: relative; box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}
.close-popup { position: absolute; right: 15px; top: 5px; font-size: 24px; cursor: pointer; color: #999; }
.close-popup:hover { color: #333; }
.btn-popup {
    width: 100%; padding: 12px; background: #667eea;
    color: white; border: none; border-radius: 6px;
    cursor: pointer; font-size: 16px; margin-top: 15px;
}
.btn-popup:hover { background: #5568d3; }

/* ── Icône popup mot de passe oublié ── */
.popup-icon {
    font-size: 36px;
    margin-bottom: 10px;
    display: block;
}

/* ── Input code OTP centré ── */
#forgotCode {
    letter-spacing: 8px;
    font-size: 22px !important;
    font-weight: bold;
    text-align: center;
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
        return "sarra/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  433 => 248,  411 => 227,  387 => 204,  370 => 188,  364 => 183,  351 => 171,  340 => 161,  331 => 153,  327 => 151,  321 => 148,  317 => 147,  307 => 140,  303 => 139,  299 => 137,  293 => 135,  291 => 134,  284 => 130,  280 => 129,  274 => 126,  270 => 125,  261 => 119,  257 => 118,  251 => 115,  247 => 114,  238 => 108,  234 => 107,  228 => 104,  224 => 103,  219 => 100,  213 => 99,  204 => 97,  199 => 96,  195 => 95,  191 => 93,  189 => 90,  186 => 89,  180 => 87,  177 => 86,  175 => 85,  170 => 82,  134 => 47,  131 => 45,  127 => 43,  125 => 42,  117 => 36,  110 => 31,  97 => 21,  89 => 15,  80 => 7,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<link rel=\"stylesheet\" href=\"{{ asset('sarra-css/auth.css') }}\">

<div class=\"login-container\" id=\"authContainer\">

    {# ========== PANEL BLEU ========== #}
    <div class=\"overlay-panel\">
        <div class=\"overlay-content\" id=\"panelContent\">
            <h1 id=\"panelTitle\">WELCOME!</h1>
            <p id=\"panelText\">Connectez-vous pour continuer</p>
        </div>
    </div>

    {# ========== LOGIN ========== #}
    <div class=\"login-right\">
        <h2>Connexion</h2>

        <form id=\"loginForm\">
<div id=\"loginErrorBox\" style=\"display:none; text-align:center; color:red;\"></div>
            <input type=\"text\" name=\"_username\"
                   value=\"{{ last_username|default('') }}\"
                   class=\"form-control\"
                   placeholder=\"Email\"
                   id=\"loginEmail\"
                   autocomplete=\"off\">
            <input type=\"password\" name=\"_password\"
                   class=\"form-control\"
                   placeholder=\"Mot de passe\"
                   id=\"loginPassword\"
                   autocomplete=\"off\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <button class=\"btn-login\" type=\"button\" onclick=\"handleLogin()\">Se connecter</button>
        </form>

        {# ========== LIEN MOT DE PASSE OUBLIÉ ========== #}
        <p style=\"margin-top:10px; text-align:center;\">
            <a href=\"#\" onclick=\"openForgotPassword(); return false;\" style=\"color:#667eea; font-size:13px;\">
                Mot de passe oublié ?
            </a>
        </p>

        {% if error is defined and error %}
            <div class=\"login-error\">Email ou mot de passe incorrect</div>
        {% endif %}

        {# ========== FACE ID ========== #}
        <div id=\"faceIdSection\" style=\"margin-top:15px;\">
            <div id=\"cameraContainer\" style=\"display:none; margin-bottom:10px; text-align:center;\">
                <video id=\"video\" width=\"280\" autoplay
                       style=\"border-radius:10px; border:3px solid #00c896; display:block; margin:0 auto;\"></video>
                <canvas id=\"canvas\" style=\"display:none;\"></canvas>
                <p id=\"faceStatus\" style=\"color:#aaa; font-size:12px; margin-top:6px;\">
                    Regardez la caméra puis cliquez sur Capturer
                </p>
                <button type=\"button\" class=\"btn-login\"
                        onclick=\"captureFace()\"
                        id=\"captureBtn\"
                        style=\"background:#667eea; margin-top:8px;\">
                    Capturer mon visage
                </button>
                <button type=\"button\" onclick=\"closeFaceSection()\"
                        style=\"background:none; border:none; color:#aaa; cursor:pointer; font-size:12px; margin-top:5px; display:block; margin:6px auto 0;\">
                    ✕ Annuler
                </button>
            </div>

            <button type=\"button\" class=\"btn-login\"
                    id=\"faceIdBtn\"
                    onclick=\"openFaceId()\"
                    style=\"background:#00c896;\">
                Utiliser Face ID
            </button>
        </div>

        <p style=\"margin-top:15px;\">
            Pas encore de compte ?
            <a href=\"#\" onclick=\"toggleAuth('register'); return false;\">Créer un compte</a>
        </p>
    </div>

    {# ========== REGISTER ========== #}
    <div class=\"login-form-left\">
        <h2>Inscription</h2>

        {% if form is defined %}
            {% if form_errors(form) %}
                <div class=\"error-global\">{{ form_errors(form) }}</div>
            {% endif %}

            {{ form_start(form, {
                action: path('app_register'),
                attr: { class: 'register-form', id: 'registerForm', novalidate: 'novalidate' }
            }) }}

            {% for label, messages in app.session.flashbag.all %}
                {% for message in messages %}
                    <div class=\"error\">{{ message }}</div>
                {% endfor %}
            {% endfor %}

            <div class=\"form-row\">
                <div class=\"input-group\">
                    {{ form_widget(form.nom, { attr: { placeholder: 'Nom', id: 'userNom' } }) }}
                    <div class=\"error\" id=\"nomError\">{{ form_errors(form.nom) }}</div>
                </div>
                <div class=\"input-group\">
                    {{ form_widget(form.prenom, { attr: { placeholder: 'Prénom', id: 'userPrenom' } }) }}
                    <div class=\"error\" id=\"prenomError\">{{ form_errors(form.prenom) }}</div>
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"input-group\">
                    {{ form_widget(form.email, { attr: { placeholder: 'Email', id: 'userEmail' } }) }}
                    <div class=\"error\" id=\"emailError\">{{ form_errors(form.email) }}</div>
                </div>
                <div class=\"input-group\">
                    {{ form_widget(form.telephone, { attr: { placeholder: 'Téléphone', id: 'userTelephone' } }) }}
                    <div class=\"error\" id=\"telError\">{{ form_errors(form.telephone) }}</div>
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"input-group\">
                    {{ form_widget(form.plainPassword.first, { attr: { placeholder: 'Mot de passe', id: 'userPassword' } }) }}
                    <div class=\"error\" id=\"passwordError\">{{ form_errors(form.plainPassword.first) }}</div>
                </div>
                <div class=\"input-group\">
                    {{ form_widget(form.plainPassword.second, { attr: { placeholder: 'Confirmer mot de passe', id: 'userPasswordConfirm' } }) }}
                    <div class=\"error\" id=\"passwordConfirmError\">{{ form_errors(form.plainPassword.second) }}</div>
                </div>
            </div>

            {% if form.plainPassword.vars.errors|length > 0 %}
                <div class=\"error\">{{ form_errors(form.plainPassword) }}</div>
            {% endif %}

            <div class=\"input-group\">
                {{ form_widget(form.image, { attr: { id: 'userImage' } }) }}
                <div class=\"error\">{{ form_errors(form.image) }}</div>
            </div>

            <button type=\"button\" class=\"btn-login\" id=\"inscriptionBtn\" onclick=\"handleInscription()\">
                S'inscrire
            </button>

            {{ form_rest(form) }}
            {{ form_end(form) }}

        {% else %}
            <div style=\"color:red;\">Formulaire non chargé</div>
        {% endif %}

        <p>Déjà un compte ?
            <a href=\"#\" onclick=\"toggleAuth('login'); return false;\">Se connecter</a>
        </p>
    </div>
</div>

{# ========== POPUP VALIDATION ========== #}
<div id=\"validationPopup\" class=\"popup\" style=\"display:none;\">
    <div class=\"popup-content\">
        <span class=\"close-popup\" onclick=\"closeValidationPopup()\">&times;</span>
        <h3 id=\"validationTitle\">Erreur</h3>
        <p id=\"validationMessage\"></p>
        <button class=\"btn-popup\" onclick=\"closeValidationPopup()\">OK</button>
    </div>
</div>

{# ========== POPUP VERIFICATION EMAIL ========== #}
<div id=\"codePopup\" class=\"popup\" style=\"display:none;\">
    <div class=\"popup-content\">
        <span class=\"close-popup\" onclick=\"closeCodePopup()\">&times;</span>
        <h3>Vérification Email</h3>
        <p>Un code a été envoyé à votre email</p>
        <input type=\"text\" id=\"verificationCode\" placeholder=\"Entrer le code\" maxlength=\"6\" autocomplete=\"off\">
        <button onclick=\"verifyCode()\" id=\"verifyBtn\">Vérifier</button>
        <p id=\"codeError\" class=\"error\"></p>
    </div>
</div>

{# ========== POPUP MOT DE PASSE OUBLIÉ ========== #}
<div id=\"forgotPasswordPopup\" class=\"popup\" style=\"display:none;\">
    <div class=\"popup-content\">
        <span class=\"close-popup\" onclick=\"closeForgotPassword()\">&times;</span>

        {# ÉTAPE 1 : saisir l'email #}
        <div id=\"forgotStep1\">
            <div class=\"popup-icon\">🔑</div>
            <h3>Mot de passe oublié</h3>
            <p style=\"color:#777; font-size:13px; margin-bottom:15px;\">
                Entrez votre email pour recevoir un code de réinitialisation
            </p>
            <input type=\"email\" id=\"forgotEmail\" placeholder=\"Votre email\" autocomplete=\"off\"
                   style=\"width:100%; padding:10px; border:1px solid #ddd; border-radius:6px;
                          font-size:14px; box-sizing:border-box; margin-bottom:10px;\">
            <p id=\"forgotEmailError\" class=\"error\"></p>
            <button class=\"btn-popup\" onclick=\"sendForgotCode()\" id=\"forgotSendBtn\">
                Envoyer le code
            </button>
        </div>

        {# ÉTAPE 2 : saisir le code #}
        <div id=\"forgotStep2\" style=\"display:none;\">
            <div class=\"popup-icon\">📧</div>
            <h3>Vérification</h3>
            <p style=\"color:#777; font-size:13px; margin-bottom:15px;\">
                Un code à 6 chiffres a été envoyé à <strong id=\"forgotEmailDisplay\"></strong>
            </p>
            <input type=\"text\" id=\"forgotCode\" placeholder=\"Code à 6 chiffres\"
                   maxlength=\"6\" autocomplete=\"off\"
                   style=\"width:100%; padding:10px; border:1px solid #ddd; border-radius:6px;
                          font-size:14px; box-sizing:border-box; margin-bottom:10px;
                          text-align:center; letter-spacing:6px; font-size:20px;\">
            <p id=\"forgotCodeError\" class=\"error\"></p>
            <button class=\"btn-popup\" onclick=\"verifyForgotCode()\" id=\"forgotVerifyBtn\">
                Vérifier le code
            </button>
            <button onclick=\"backToForgotStep1()\"
                    style=\"background:none; border:none; color:#aaa; cursor:pointer;
                           font-size:12px; margin-top:8px; display:block; width:100%;\">
                ← Changer d'email
            </button>
        </div>

        {# ÉTAPE 3 : nouveau mot de passe #}
        <div id=\"forgotStep3\" style=\"display:none;\">
            <div class=\"popup-icon\">🔒</div>
            <h3>Nouveau mot de passe</h3>
            <p style=\"color:#777; font-size:13px; margin-bottom:15px;\">
                Choisissez un nouveau mot de passe sécurisé
            </p>
            <input type=\"password\" id=\"newPassword\" placeholder=\"Nouveau mot de passe\"
                   autocomplete=\"off\"
                   style=\"width:100%; padding:10px; border:1px solid #ddd; border-radius:6px;
                          font-size:14px; box-sizing:border-box; margin-bottom:10px;\">
            <input type=\"password\" id=\"confirmNewPassword\" placeholder=\"Confirmer le mot de passe\"
                   autocomplete=\"off\"
                   style=\"width:100%; padding:10px; border:1px solid #ddd; border-radius:6px;
                          font-size:14px; box-sizing:border-box; margin-bottom:10px;\">
            <p id=\"forgotPasswordError\" class=\"error\"></p>
            <button class=\"btn-popup\" onclick=\"resetPassword()\" id=\"resetBtn\">
                Réinitialiser
            </button>
        </div>

        {# ÉTAPE 4 : succès #}
        <div id=\"forgotStep4\" style=\"display:none;\">
            <div class=\"popup-icon\" style=\"color:#00c896;\">✅</div>
            <h3 style=\"color:#00c896;\">Mot de passe modifié !</h3>
            <p style=\"color:#777; font-size:13px; margin-bottom:15px;\">
                Votre mot de passe a été réinitialisé avec succès.
            </p>
            <button class=\"btn-popup\" onclick=\"closeForgotPassword()\" style=\"background:#00c896;\">
                Se connecter
            </button>
        </div>

    </div>
</div>

<script>
// ========== TOGGLE PANEL ==========
function toggleAuth(target) {
    const container  = document.getElementById('authContainer');
    const panelTitle = document.getElementById('panelTitle');
    const panelText  = document.getElementById('panelText');
    if (target === 'register') {
        container.classList.add('toggled');
        panelTitle.textContent = 'WELCOME BACK!';
        panelText.textContent  = 'Inscrivez-vous pour commencer';
    } else {
        container.classList.remove('toggled');
        panelTitle.textContent = 'WELCOME!';
        panelText.textContent  = 'Connectez-vous pour continuer';
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const hasErrors = document.querySelector('.login-form-left .error, .login-form-left .error-global');
    if (hasErrors && hasErrors.textContent.trim() !== '') toggleAuth('register');
});

// ========== POPUP ==========
function showValidationPopup(title, message) {
    document.getElementById('validationTitle').innerText   = title;
    document.getElementById('validationMessage').innerText = message;
    document.getElementById('validationPopup').style.display = 'block';
}
function closeValidationPopup() { document.getElementById('validationPopup').style.display = 'none'; }
function closeCodePopup()       { document.getElementById('codePopup').style.display = 'none'; }
window.onclick = function(event) {
    if (event.target == document.getElementById('validationPopup'))     closeValidationPopup();
    if (event.target == document.getElementById('codePopup'))           closeCodePopup();
    if (event.target == document.getElementById('forgotPasswordPopup')) closeForgotPassword();
};

function handleLogin() {
    const email    = document.getElementById('loginEmail').value.trim();
    const password = document.getElementById('loginPassword').value;

    const errorBox = document.getElementById('loginErrorBox');
    errorBox.style.display = 'none';
    errorBox.innerText = '';

    if (!email) {
        errorBox.style.display = 'block';
        errorBox.innerText = \"Veuillez entrer votre email\";
        return;
    }

    if (!password) {
        errorBox.style.display = 'block';
        errorBox.innerText = \"Veuillez entrer votre mot de passe\";
        return;
    }

    fetch('/smart-login', {
        method: 'POST',
        body: new FormData(document.getElementById('loginForm'))
    })
    .then(res => res.json()) // 🔥 on supprime res.ok
    .then(data => {
if (data.status === 'FACE_REQUIRED') {

    const errorBox = document.getElementById('loginErrorBox');

    errorBox.style.display = 'block';
    errorBox.innerText = data.message || \"Vérification Face ID requise\";

    openFaceId(); // ouvre caméra

    return; // 🔥 STOP ici (important)
}
        else if (data.status === 'OK') {
            window.location.href = data.redirect_url;
        }
        else {
            errorBox.style.display = 'block';
            errorBox.innerText = data.message || \"Email ou mot de passe incorrect\";
        }
    })
    .catch(() => {
        errorBox.style.display = 'block';
        errorBox.innerText = \"Erreur serveur\";
    });
}

// ========== FACE ID ==========
let cameraStream = null;

function openFaceId() {
    const email = document.getElementById('loginEmail').value.trim();
    if (!email) {
        showValidationPopup('Erreur', \"Veuillez d'abord entrer votre email\");
        return;
    }
    document.getElementById('cameraContainer').style.display = 'block';
    document.getElementById('faceIdBtn').style.display       = 'none';
    document.getElementById('faceStatus').textContent        = 'Regardez la caméra puis cliquez sur Capturer';
    document.getElementById('captureBtn').disabled           = false;
    document.getElementById('captureBtn').textContent        = 'Capturer mon visage';

    navigator.mediaDevices.getUserMedia({ video: true })
        .then(stream => {
            cameraStream = stream;
            document.getElementById('video').srcObject = stream;
        })
        .catch(err => {
            showValidationPopup('Erreur', \"Impossible d'accéder à la caméra : \" + err.message);
            closeFaceSection();
        });
}

function closeFaceSection() {
    document.getElementById('cameraContainer').style.display = 'none';
    document.getElementById('faceIdBtn').style.display       = 'block';
    if (cameraStream) {
        cameraStream.getTracks().forEach(track => track.stop());
        cameraStream = null;
    }
}

function captureFace() {
    const email      = document.getElementById('loginEmail').value.trim();
    const video      = document.getElementById('video');
    const canvas     = document.getElementById('canvas');
    const captureBtn = document.getElementById('captureBtn');

    canvas.width  = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0);
    const imageData = canvas.toDataURL('image/jpeg');

    captureBtn.disabled    = true;
    captureBtn.textContent = 'Vérification...';
    document.getElementById('faceStatus').textContent = 'Analyse en cours...';

    fetch('/face-login', {
        method:  'POST',
        headers: { 'Content-Type': 'application/json' },
        body:    JSON.stringify({ email, image: imageData })
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'OK') {
            document.getElementById('faceStatus').textContent = 'Visage reconnu !';
            closeFaceSection();
            window.location.href = data.redirect_url;
        } else {
            document.getElementById('faceStatus').textContent = data.message;
            captureBtn.disabled    = false;
            captureBtn.textContent = 'Réessayer';
        }
    })
    .catch(() => {
        document.getElementById('faceStatus').textContent = 'Erreur de connexion';
        captureBtn.disabled    = false;
        captureBtn.textContent = 'Réessayer';
    });
}

// ========== MOT DE PASSE OUBLIÉ ==========
let forgotEmailValue = '';
let forgotToken      = '';

function openForgotPassword() {
    // Réinitialiser toutes les étapes
    showForgotStep(1);
    document.getElementById('forgotEmail').value      = '';
    document.getElementById('forgotCode').value       = '';
    document.getElementById('newPassword').value      = '';
    document.getElementById('confirmNewPassword').value = '';
    document.getElementById('forgotEmailError').innerText   = '';
    document.getElementById('forgotCodeError').innerText    = '';
    document.getElementById('forgotPasswordError').innerText = '';
    document.getElementById('forgotPasswordPopup').style.display = 'block';
}

function closeForgotPassword() {
    document.getElementById('forgotPasswordPopup').style.display = 'none';
}

function showForgotStep(step) {
    [1, 2, 3, 4].forEach(n => {
        document.getElementById('forgotStep' + n).style.display = (n === step) ? 'block' : 'none';
    });
}

function backToForgotStep1() {
    document.getElementById('forgotCode').value     = '';
    document.getElementById('forgotCodeError').innerText = '';
    showForgotStep(1);
}

// Étape 1 : envoyer le code par email
function sendForgotCode() {
    const email = document.getElementById('forgotEmail').value.trim();
    const btn   = document.getElementById('forgotSendBtn');

    document.getElementById('forgotEmailError').innerText = '';

    if (!email) {
        document.getElementById('forgotEmailError').innerText = 'Veuillez entrer votre email';
        return;
    }
    if (!/^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/.test(email)) {
        document.getElementById('forgotEmailError').innerText = 'Email invalide';
        return;
    }

    btn.disabled    = true;
    btn.textContent = 'Envoi en cours...';

    fetch('/forgot-password/send-code', {
        method:  'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body:    'email=' + encodeURIComponent(email)
    })
    .then(res => res.json())
    .then(data => {
        btn.disabled    = false;
        btn.textContent = 'Envoyer le code';
        if (data.status === 'OK') {
            forgotEmailValue = email;
            document.getElementById('forgotEmailDisplay').textContent = email;
            showForgotStep(2);
        } else {
            document.getElementById('forgotEmailError').innerText = data.message || 'Erreur lors de l\\'envoi';
        }
    })
    .catch(() => {
        btn.disabled    = false;
        btn.textContent = 'Envoyer le code';
        document.getElementById('forgotEmailError').innerText = 'Erreur de connexion';
    });
}

// Étape 2 : vérifier le code
function verifyForgotCode() {
    const code = document.getElementById('forgotCode').value.trim();
    const btn  = document.getElementById('forgotVerifyBtn');

    document.getElementById('forgotCodeError').innerText = '';

    if (!code || code.length !== 6) {
        document.getElementById('forgotCodeError').innerText = 'Veuillez entrer un code à 6 chiffres';
        return;
    }

    btn.disabled    = true;
    btn.textContent = 'Vérification...';

    fetch('/forgot-password/verify-code', {
        method:  'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body:    'email=' + encodeURIComponent(forgotEmailValue) + '&code=' + encodeURIComponent(code)
    })
    .then(res => res.json())
    .then(data => {
        btn.disabled    = false;
        btn.textContent = 'Vérifier le code';
        if (data.status === 'OK') {
            forgotToken = data.token || '';
            showForgotStep(3);
        } else {
            document.getElementById('forgotCodeError').innerText = data.message || 'Code incorrect';
        }
    })
    .catch(() => {
        btn.disabled    = false;
        btn.textContent = 'Vérifier le code';
        document.getElementById('forgotCodeError').innerText = 'Erreur de connexion';
    });
}

// Étape 3 : réinitialiser le mot de passe
function resetPassword() {
    const newPwd     = document.getElementById('newPassword').value;
    const confirmPwd = document.getElementById('confirmNewPassword').value;
    const btn        = document.getElementById('resetBtn');

    document.getElementById('forgotPasswordError').innerText = '';

    if (!newPwd || newPwd.length < 6) {
        document.getElementById('forgotPasswordError').innerText = 'Le mot de passe doit contenir au moins 6 caractères';
        return;
    }
    if (newPwd !== confirmPwd) {
        document.getElementById('forgotPasswordError').innerText = 'Les mots de passe ne correspondent pas';
        return;
    }

    btn.disabled    = true;
    btn.textContent = 'Réinitialisation...';

    fetch('/forgot-password/reset', {
        method:  'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body:    'email='    + encodeURIComponent(forgotEmailValue)
               + '&token='    + encodeURIComponent(forgotToken)
               + '&password=' + encodeURIComponent(newPwd)
    })
    .then(res => res.json())
    .then(data => {
        btn.disabled    = false;
        btn.textContent = 'Réinitialiser';
        if (data.status === 'OK') {
            showForgotStep(4);
        } else {
            document.getElementById('forgotPasswordError').innerText = data.message || 'Erreur lors de la réinitialisation';
        }
    })
    .catch(() => {
        btn.disabled    = false;
        btn.textContent = 'Réinitialiser';
        document.getElementById('forgotPasswordError').innerText = 'Erreur de connexion';
    });
}

// ========== INSCRIPTION ==========
let formData = {};

function handleInscription() {
    const email = document.getElementById('user_email').value.trim();
    const btn   = document.getElementById('inscriptionBtn');

    if (!email) { showValidationPopup('Erreur', 'Veuillez entrer votre email'); return; }
    if (btn) { btn.disabled = true; btn.textContent = 'Vérification...'; }

    fetch('/validate-register', {
        method: 'POST',
        body:   new FormData(document.getElementById('registerForm'))
    })
    .then(res => res.json())
    .then(data => {
        if (data.valid) {
            fetch('/check-email', {
                method:  'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body:    'email=' + encodeURIComponent(email)
            })
            .then(res => res.text())
            .then(result => {
                if (result === 'OK') {
                    sendVerificationCode(email, btn);
                } else {
                    document.getElementById('user_email').classList.add('input-error');
                    document.getElementById('emailError').innerHTML = result;
                    if (btn) { btn.disabled = false; btn.textContent = \"S'inscrire\"; }
                }
            });
        } else {
            document.open();
            document.write(data.html);
            document.close();
        }
    })
    .catch(() => {
        showValidationPopup('Erreur', 'Erreur de connexion au serveur');
        if (btn) { btn.disabled = false; btn.textContent = \"S'inscrire\"; }
    });
}

function sendVerificationCode(email, btn) {
    fetch('/send-code', {
        method:  'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body:    'email=' + encodeURIComponent(email)
    })
    .then(res => res.text())
    .then(data => {
        if (data === 'Code envoyé') {
            formData.email = email;
            document.getElementById('codePopup').style.display = 'block';
            if (btn) { btn.disabled = false; btn.textContent = \"S'inscrire\"; }
        } else {
            showValidationPopup('Erreur', data);
            if (btn) { btn.disabled = false; btn.textContent = \"S'inscrire\"; }
        }
    })
    .catch(() => {
        showValidationPopup('Erreur', 'Erreur de connexion');
        if (btn) { btn.disabled = false; btn.textContent = \"S'inscrire\"; }
    });
}

function verifyCode() {
    const code      = document.getElementById('verificationCode').value;
    const verifyBtn = document.getElementById('verifyBtn');

    if (!code || code.length !== 6) {
        document.getElementById('codeError').innerText = 'Veuillez entrer un code à 6 chiffres';
        return;
    }
    if (verifyBtn) { verifyBtn.disabled = true; verifyBtn.textContent = 'Vérification...'; }

    fetch('/verify-code', {
        method:  'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body:    'email=' + encodeURIComponent(formData.email) + '&code=' + encodeURIComponent(code)
    })
    .then(res => res.text())
    .then(data => {
        if (data === 'Email vérifié') {
            document.getElementById('codePopup').style.display = 'none';
            document.getElementById('registerForm').submit();
        } else {
            document.getElementById('codeError').innerText = data;
            if (verifyBtn) { verifyBtn.disabled = false; verifyBtn.textContent = 'Vérifier'; }
        }
    })
    .catch(() => {
        document.getElementById('codeError').innerText = 'Erreur de connexion';
        if (verifyBtn) { verifyBtn.disabled = false; verifyBtn.textContent = 'Vérifier'; }
    });
}
</script>

<style>






.input-error { border: 2px solid red !important; }
.error { color: red; font-size: 12px; margin-top: 5px; }
.error-global {
    color: red; font-size: 14px; text-align: center;
    margin-bottom: 10px; padding: 10px;
    background-color: #ffe6e6; border-radius: 6px;
}
.popup {
    position: fixed; top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.6);
    z-index: 1000; display: flex;
    align-items: center; justify-content: center;
}
.popup-content {
    background: white; padding: 30px; width: 350px;
    border-radius: 10px; text-align: center;
    position: relative; box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}
.close-popup { position: absolute; right: 15px; top: 5px; font-size: 24px; cursor: pointer; color: #999; }
.close-popup:hover { color: #333; }
.btn-popup {
    width: 100%; padding: 12px; background: #667eea;
    color: white; border: none; border-radius: 6px;
    cursor: pointer; font-size: 16px; margin-top: 15px;
}
.btn-popup:hover { background: #5568d3; }

/* ── Icône popup mot de passe oublié ── */
.popup-icon {
    font-size: 36px;
    margin-bottom: 10px;
    display: block;
}

/* ── Input code OTP centré ── */
#forgotCode {
    letter-spacing: 8px;
    font-size: 22px !important;
    font-weight: bold;
    text-align: center;
}
</style>
{% endblock %}
", "sarra/login.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\sarra\\login.html.twig");
    }
}
