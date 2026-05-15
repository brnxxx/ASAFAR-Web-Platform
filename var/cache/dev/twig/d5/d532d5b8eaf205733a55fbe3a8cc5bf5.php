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

/* reservation/index.html.twig */
class __TwigTemplate_7acc354a18464ddc61e69bec48bf2ddd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

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

        // line 4
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "roles", [], "any", false, false, false, 4)))) {
            // line 5
            yield "        Toutes les réservations
    ";
        } else {
            // line 7
            yield "        Mes réservations
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "<div class=\"container\" style=\"max-width: 1000px; margin: 40px auto;\">
    <h1 style=\"color: #2FA8FF; margin-bottom: 30px;\">
        ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "roles", [], "any", false, false, false, 14)))) {
            // line 15
            yield "            🗓️ Toutes les réservations
        ";
        } else {
            // line 17
            yield "            🗓️ Mes Réservations
        ";
        }
        // line 19
        yield "    </h1>

    ";
        // line 21
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 21, $this->source); })())) > 0)) {
            // line 22
            yield "        <div style=\"display: grid; gap: 20px;\">
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 24
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "hebergement", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 25
                    yield "                <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px solid rgba(47, 168, 255, 0.15); border-radius: 16px; padding: 20px; display: grid; grid-template-columns: 1fr 1fr 1fr auto; gap: 20px; align-items: center;\">

                    <!-- Hébergement Info -->
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">🏨 Hébergement</p>
                        <p style=\"color: var(--text-primary); font-weight: 600; margin: 0;\">";
                    // line 30
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "hebergement", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
                    yield "</p>
                        <p style=\"color: rgba(255,255,255,0.5); margin: 3px 0; font-size: 12px;\">";
                    // line 31
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "hebergement", [], "any", false, false, false, 31), "localisation", [], "any", false, false, false, 31), "html", null, true);
                    yield "</p>
                        ";
                    // line 32
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "roles", [], "any", false, false, false, 32)))) {
                        // line 33
                        yield "                            <p style=\"color: rgba(255,255,255,0.5); margin: 3px 0; font-size: 11px;\">👤 Client ID: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idUser", [], "any", false, false, false, 33), "html", null, true);
                        yield "</p>
                        ";
                    }
                    // line 35
                    yield "                    </div>

                    <!-- Dates -->
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">📅 Dates</p>
                        <p style=\"color: var(--text-primary); font-weight: 600; margin: 0;\">
                            ";
                    // line 41
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateArrivee", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDepart", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true);
                    yield "
                        </p>
                        <p style=\"color: rgba(255,255,255,0.5); margin: 3px 0; font-size: 12px;\">
                            ";
                    // line 44
                    $context["nbNuits"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDepart", [], "any", false, false, false, 44), "diff", [CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateArrivee", [], "any", false, false, false, 44)], "method", false, false, false, 44), "days", [], "any", false, false, false, 44);
                    // line 45
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbNuits"]) || array_key_exists("nbNuits", $context) ? $context["nbNuits"] : (function () { throw new RuntimeError('Variable "nbNuits" does not exist.', 45, $this->source); })()), "html", null, true);
                    yield " nuit(s)
                        </p>
                    </div>

                    <!-- Montant et Statut -->
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">💰 Montant total</p>
                        <p style=\"color: #34D399; font-weight: 700; font-size: 18px; margin: 0;\">";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", false, false, false, 52), "html", null, true);
                    yield "€</p>
                        <div style=\"margin-top: 8px;\">
                            ";
                    // line 54
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 54) == "EN_ATTENTE")) {
                        // line 55
                        yield "                                <span style=\"display: inline-block; background: rgba(255, 193, 7, 0.2); color: #FFD54F; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-weight: 600;\">⏳ En attente</span>
                            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 56
$context["reservation"], "statut", [], "any", false, false, false, 56) == "CONFIRMEE")) {
                        // line 57
                        yield "                                <span style=\"display: inline-block; background: rgba(52, 211, 153, 0.2); color: #34D399; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-weight: 600;\">✅ Confirmée</span>
                            ";
                    } else {
                        // line 59
                        yield "                                <span style=\"display: inline-block; background: rgba(239, 68, 68, 0.2); color: #EF4444; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-weight: 600;\">❌ Annulée</span>
                            ";
                    }
                    // line 61
                    yield "                        </div>
                    </div>

                    <!-- Actions -->
                    <div style=\"display: flex; gap: 8px; flex-direction: column;\">
                        ";
                    // line 66
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "roles", [], "any", false, false, false, 66)))) {
                        // line 67
                        yield "                            <!-- Admin Actions -->
                            <form method=\"POST\" action=\"";
                        // line 68
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 68)]), "html", null, true);
                        yield "\" onsubmit=\"return confirm('Confirmer cette réservation?');\" style=\"margin: 0;\">
                                <button type=\"submit\" style=\"padding: 6px 12px; background: rgba(76, 175, 80, 0.2); color: #4CAF50; border: 1px solid #4CAF50; border-radius: 6px; cursor: pointer; font-weight: 600; font-size: 11px; width: 100%;\">
                                    ✅ Confirmer
                                </button>
                            </form>
                            <form method=\"POST\" action=\"";
                        // line 73
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 73)]), "html", null, true);
                        yield "\" onsubmit=\"return confirm('Annuler cette réservation?');\" style=\"margin: 0;\">
                                <button type=\"submit\" style=\"padding: 6px 12px; background: rgba(239, 68, 68, 0.2); color: #EF4444; border: 1px solid #EF4444; border-radius: 6px; cursor: pointer; font-weight: 600; font-size: 11px; width: 100%;\">
                                    ❌ Annuler
                                </button>
                            </form>
                        ";
                    } else {
                        // line 79
                        yield "                            <!-- Client Actions -->
                            <form method=\"POST\" action=\"";
                        // line 80
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 80)]), "html", null, true);
                        yield "\" onsubmit=\"return confirm('Êtes-vous sûr?');\" style=\"margin: 0;\">
                                <button type=\"submit\" style=\"padding: 8px 16px; background: rgba(239, 68, 68, 0.2); color: #EF4444; border: 1px solid #EF4444; border-radius: 6px; cursor: pointer; font-weight: 600; font-size: 12px;\">
                                    Annuler
                                </button>
                            </form>
                        ";
                    }
                    // line 86
                    yield "                    </div>
                </div>
                ";
                } else {
                    // line 89
                    yield "                <div style=\"background: rgba(239, 68, 68, 0.2); backdrop-filter: blur(12px); border: 2px solid rgba(239, 68, 68, 0.4); border-radius: 16px; padding: 20px; display: grid; grid-template-columns: 1fr 1fr 1fr auto; gap: 20px; align-items: center;\">
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">🏨 Hébergement</p>
                        <p style=\"color: #EF4444; font-weight: 600; margin: 0;\">Hébergement supprimé</p>
                        <p style=\"color: rgba(255,255,255,0.5); margin: 3px 0; font-size: 12px;\">Réservation #";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 93), "html", null, true);
                    yield "</p>
                    </div>
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">📅 Dates</p>
                        <p style=\"color: var(--text-primary); font-weight: 600; margin: 0;\">
                            ";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateArrivee", [], "any", false, false, false, 98), "d/m/Y"), "html", null, true);
                    yield " → ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDepart", [], "any", false, false, false, 98), "d/m/Y"), "html", null, true);
                    yield "
                        </p>
                    </div>
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">💰 Montant total</p>
                        <p style=\"color: #34D399; font-weight: 700; font-size: 18px; margin: 0;\">";
                    // line 103
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "montantTotal", [], "any", false, false, false, 103), "html", null, true);
                    yield "€</p>
                    </div>
                    <div style=\"display: flex; gap: 8px;\">
                        <form method=\"POST\" action=\"";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "idReservation", [], "any", false, false, false, 106)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Supprimer cette réservation?');\" style=\"margin: 0;\">
                            <button type=\"submit\" style=\"padding: 8px 16px; background: rgba(239, 68, 68, 0.2); color: #EF4444; border: 1px solid #EF4444; border-radius: 6px; cursor: pointer; font-weight: 600; font-size: 12px;\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                ";
                }
                // line 114
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "        </div>
    ";
        } else {
            // line 117
            yield "        <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px dashed rgba(47, 168, 255, 0.15); border-radius: 16px; padding: 60px; text-align: center;\">
            <p style=\"color: rgba(255,255,255,0.6); font-size: 16px; margin: 0;\">
                ";
            // line 119
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "roles", [], "any", false, false, false, 119)))) {
                // line 120
                yield "                    Aucune réservation pour l'instant.
                ";
            } else {
                // line 122
                yield "                    Vous n'avez pas encore de réservations.
                ";
            }
            // line 124
            yield "            </p>
            <a href=\"";
            // line 125
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
            yield "\" style=\"display: inline-block; margin-top: 20px; padding: 12px 24px; background: linear-gradient(135deg, #2FA8FF 0%, #A7E3FF 100%); color: #0B2D4A; text-decoration: none; border-radius: 8px; font-weight: 600;\">
                Découvrir les hébergements
            </a>
        </div>
    ";
        }
        // line 130
        yield "</div>
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
        return "reservation/index.html.twig";
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
        return array (  334 => 130,  326 => 125,  323 => 124,  319 => 122,  315 => 120,  313 => 119,  309 => 117,  305 => 115,  299 => 114,  288 => 106,  282 => 103,  272 => 98,  264 => 93,  258 => 89,  253 => 86,  244 => 80,  241 => 79,  232 => 73,  224 => 68,  221 => 67,  219 => 66,  212 => 61,  208 => 59,  204 => 57,  202 => 56,  199 => 55,  197 => 54,  192 => 52,  181 => 45,  179 => 44,  171 => 41,  163 => 35,  157 => 33,  155 => 32,  151 => 31,  147 => 30,  140 => 25,  137 => 24,  133 => 23,  130 => 22,  128 => 21,  124 => 19,  120 => 17,  116 => 15,  114 => 14,  110 => 12,  97 => 11,  84 => 7,  80 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
        Toutes les réservations
    {% else %}
        Mes réservations
    {% endif %}
{% endblock %}

{% block body %}
<div class=\"container\" style=\"max-width: 1000px; margin: 40px auto;\">
    <h1 style=\"color: #2FA8FF; margin-bottom: 30px;\">
        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
            🗓️ Toutes les réservations
        {% else %}
            🗓️ Mes Réservations
        {% endif %}
    </h1>

    {% if reservations|length > 0 %}
        <div style=\"display: grid; gap: 20px;\">
            {% for reservation in reservations %}
                {% if reservation.hebergement %}
                <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px solid rgba(47, 168, 255, 0.15); border-radius: 16px; padding: 20px; display: grid; grid-template-columns: 1fr 1fr 1fr auto; gap: 20px; align-items: center;\">

                    <!-- Hébergement Info -->
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">🏨 Hébergement</p>
                        <p style=\"color: var(--text-primary); font-weight: 600; margin: 0;\">{{ reservation.hebergement.nom }}</p>
                        <p style=\"color: rgba(255,255,255,0.5); margin: 3px 0; font-size: 12px;\">{{ reservation.hebergement.localisation }}</p>
                        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                            <p style=\"color: rgba(255,255,255,0.5); margin: 3px 0; font-size: 11px;\">👤 Client ID: {{ reservation.idUser }}</p>
                        {% endif %}
                    </div>

                    <!-- Dates -->
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">📅 Dates</p>
                        <p style=\"color: var(--text-primary); font-weight: 600; margin: 0;\">
                            {{ reservation.dateArrivee|date('d/m/Y') }} → {{ reservation.dateDepart|date('d/m/Y') }}
                        </p>
                        <p style=\"color: rgba(255,255,255,0.5); margin: 3px 0; font-size: 12px;\">
                            {% set nbNuits = reservation.dateDepart.diff(reservation.dateArrivee).days %}
                            {{ nbNuits }} nuit(s)
                        </p>
                    </div>

                    <!-- Montant et Statut -->
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">💰 Montant total</p>
                        <p style=\"color: #34D399; font-weight: 700; font-size: 18px; margin: 0;\">{{ reservation.montantTotal }}€</p>
                        <div style=\"margin-top: 8px;\">
                            {% if reservation.statut == 'EN_ATTENTE' %}
                                <span style=\"display: inline-block; background: rgba(255, 193, 7, 0.2); color: #FFD54F; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-weight: 600;\">⏳ En attente</span>
                            {% elseif reservation.statut == 'CONFIRMEE' %}
                                <span style=\"display: inline-block; background: rgba(52, 211, 153, 0.2); color: #34D399; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-weight: 600;\">✅ Confirmée</span>
                            {% else %}
                                <span style=\"display: inline-block; background: rgba(239, 68, 68, 0.2); color: #EF4444; padding: 4px 10px; border-radius: 4px; font-size: 12px; font-weight: 600;\">❌ Annulée</span>
                            {% endif %}
                        </div>
                    </div>

                    <!-- Actions -->
                    <div style=\"display: flex; gap: 8px; flex-direction: column;\">
                        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                            <!-- Admin Actions -->
                            <form method=\"POST\" action=\"{{ path('app_reservation_confirm', {'id': reservation.idReservation}) }}\" onsubmit=\"return confirm('Confirmer cette réservation?');\" style=\"margin: 0;\">
                                <button type=\"submit\" style=\"padding: 6px 12px; background: rgba(76, 175, 80, 0.2); color: #4CAF50; border: 1px solid #4CAF50; border-radius: 6px; cursor: pointer; font-weight: 600; font-size: 11px; width: 100%;\">
                                    ✅ Confirmer
                                </button>
                            </form>
                            <form method=\"POST\" action=\"{{ path('app_reservation_cancel', {'id': reservation.idReservation}) }}\" onsubmit=\"return confirm('Annuler cette réservation?');\" style=\"margin: 0;\">
                                <button type=\"submit\" style=\"padding: 6px 12px; background: rgba(239, 68, 68, 0.2); color: #EF4444; border: 1px solid #EF4444; border-radius: 6px; cursor: pointer; font-weight: 600; font-size: 11px; width: 100%;\">
                                    ❌ Annuler
                                </button>
                            </form>
                        {% else %}
                            <!-- Client Actions -->
                            <form method=\"POST\" action=\"{{ path('app_reservation_cancel', {'id': reservation.idReservation}) }}\" onsubmit=\"return confirm('Êtes-vous sûr?');\" style=\"margin: 0;\">
                                <button type=\"submit\" style=\"padding: 8px 16px; background: rgba(239, 68, 68, 0.2); color: #EF4444; border: 1px solid #EF4444; border-radius: 6px; cursor: pointer; font-weight: 600; font-size: 12px;\">
                                    Annuler
                                </button>
                            </form>
                        {% endif %}
                    </div>
                </div>
                {% else %}
                <div style=\"background: rgba(239, 68, 68, 0.2); backdrop-filter: blur(12px); border: 2px solid rgba(239, 68, 68, 0.4); border-radius: 16px; padding: 20px; display: grid; grid-template-columns: 1fr 1fr 1fr auto; gap: 20px; align-items: center;\">
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">🏨 Hébergement</p>
                        <p style=\"color: #EF4444; font-weight: 600; margin: 0;\">Hébergement supprimé</p>
                        <p style=\"color: rgba(255,255,255,0.5); margin: 3px 0; font-size: 12px;\">Réservation #{{ reservation.idReservation }}</p>
                    </div>
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">📅 Dates</p>
                        <p style=\"color: var(--text-primary); font-weight: 600; margin: 0;\">
                            {{ reservation.dateArrivee|date('d/m/Y') }} → {{ reservation.dateDepart|date('d/m/Y') }}
                        </p>
                    </div>
                    <div>
                        <p style=\"color: rgba(255,255,255,0.6); margin: 5px 0; font-size: 12px;\">💰 Montant total</p>
                        <p style=\"color: #34D399; font-weight: 700; font-size: 18px; margin: 0;\">{{ reservation.montantTotal }}€</p>
                    </div>
                    <div style=\"display: flex; gap: 8px;\">
                        <form method=\"POST\" action=\"{{ path('app_reservation_cancel', {'id': reservation.idReservation}) }}\" onsubmit=\"return confirm('Supprimer cette réservation?');\" style=\"margin: 0;\">
                            <button type=\"submit\" style=\"padding: 8px 16px; background: rgba(239, 68, 68, 0.2); color: #EF4444; border: 1px solid #EF4444; border-radius: 6px; cursor: pointer; font-weight: 600; font-size: 12px;\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                {% endif %}
            {% endfor %}
        </div>
    {% else %}
        <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px dashed rgba(47, 168, 255, 0.15); border-radius: 16px; padding: 60px; text-align: center;\">
            <p style=\"color: rgba(255,255,255,0.6); font-size: 16px; margin: 0;\">
                {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                    Aucune réservation pour l'instant.
                {% else %}
                    Vous n'avez pas encore de réservations.
                {% endif %}
            </p>
            <a href=\"{{ path('app_hebergements') }}\" style=\"display: inline-block; margin-top: 20px; padding: 12px 24px; background: linear-gradient(135deg, #2FA8FF 0%, #A7E3FF 100%); color: #0B2D4A; text-decoration: none; border-radius: 8px; font-weight: 600;\">
                Découvrir les hébergements
            </a>
        </div>
    {% endif %}
</div>
{% endblock %}
", "reservation/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\reservation\\index.html.twig");
    }
}
