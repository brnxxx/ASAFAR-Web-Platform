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

/* index.html.twig */
class __TwigTemplate_8be5f95e293a003ad65b3c87a47cb736 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

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

        yield "ASAFAR - Explorez le Monde Différemment";
        
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "
";
        // line 10
        if ((($tmp =  !((array_key_exists("alreadyPlayed", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["alreadyPlayed"]) || array_key_exists("alreadyPlayed", $context) ? $context["alreadyPlayed"] : (function () { throw new RuntimeError('Variable "alreadyPlayed" does not exist.', 10, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "<div id=\"wheelModal\" class=\"wheel-overlay\">
  <div class=\"wheel-modal\">

    <button class=\"wheel-close\" id=\"wheelClose\">&times;</button>

    <p class=\"wheel-eyebrow\">Tentez votre chance</p>
    <h3 class=\"wheel-title\">Tournez la roue !</h3>

    <div class=\"wheel-wrap\">
      <div class=\"wheel-pointer\"></div>
<canvas id=\"wheel\" width=\"340\" height=\"340\"></canvas>    </div>

    <p id=\"result\" class=\"wheel-result\"></p>

    <button id=\"spinBtn\" class=\"wheel-btn\">Tourner</button>

    <p class=\"wheel-note\">Une seule tentative par compte</p>
  </div>
</div>
";
        }
        // line 31
        yield "
<style>
.wheel-overlay {
  display: none;
  position: fixed;
  inset: 0;
  z-index: 9999;
  background: rgba(0,0,0,0.6);
  align-items: center;
  justify-content: center;
}
.wheel-overlay.active { display: flex; }

.wheel-modal {
  background: #0d2137;
  border-radius: 16px;
  width: 420px;
  padding: 28px 24px 24px;
  position: relative;
  border: 1px solid rgba(255,255,255,0.08);
  text-align: center;
}

.wheel-close {
  position: absolute;
  top: 12px; right: 14px;
  background: rgba(255,255,255,0.08);
  border: none;
  color: rgba(255,255,255,0.6);
  width: 28px; height: 28px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 18px;
  line-height: 28px;
}

.wheel-eyebrow {
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 2px;
  color: #f59e0b;
  text-transform: uppercase;
  margin: 0 0 6px;
}

.wheel-title {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin: 0 0 20px;
}

.wheel-wrap {
  position: relative;
  display: inline-block;
  margin-bottom: 20px;
}

.wheel-pointer {
  width: 0; height: 0;
  border-left: 12px solid transparent;
  border-right: 12px solid transparent;
  border-bottom: 24px solid #f59e0b;
  position: absolute;
  top: -10px; left: 50%;
  transform: translateX(-50%);
  z-index: 10;
}

#wheel {
  border-radius: 50%;
  box-shadow: 0 0 0 4px rgba(255,255,255,0.06), 0 8px 32px rgba(0,0,0,0.4);
}

.wheel-result {
  min-height: 22px;
  font-size: 14px;
  color: rgba(255,255,255,0.6);
  margin-bottom: 16px;
}

.wheel-btn {
  background: linear-gradient(135deg, #f59e0b, #ef6c00);
  color: #fff;
  border: none;
  border-radius: 50px;
  padding: 12px 40px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  width: 100%;
}
.wheel-btn:disabled { opacity: 0.5; cursor: not-allowed; }

.wheel-note {
  font-size: 11px;
  color: rgba(255,255,255,0.3);
  margin: 14px 0 0;
}
</style>



    <!-- ACCEUIL Section -->
    <section id=\"accueil\" style=\"background: linear-gradient(135deg, rgba(11, 45, 74, 0.9) 0%, rgba(8, 38, 62, 0.95) 50%, rgba(5, 22, 33, 0.98) 100%); position: relative;\">
        <div class=\"section-content\">
            <div style=\"max-width: 800px; animation: slideInFromLeft 0.8s ease-out;\">
                <h1 class=\"section-title\" style=\"font-size: 56px; line-height: 1.2; margin-bottom: 20px;\">
                    Voyager, c'est <span style=\"background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: titlePulse 3s ease-in-out infinite;\">vivre</span>
                </h1>

                <p style=\"font-size: 20px; line-height: 1.8; color: rgba(244, 248, 252, 0.9); margin-bottom: 30px; font-weight: 300; animation: fadeInUp 0.8s ease-out 0.2s both;\">
                    Chez ASAFAR, nous ne vendons pas simplement des voyages. Nous créons des histoires. Des moments qui transforment votre perspective du monde. Des souvenirs qui traversent toute une vie.
                </p>

                <p style=\"font-size: 16px; line-height: 1.8; color: rgba(244, 248, 252, 0.75); margin-bottom: 40px; animation: fadeInUp 0.8s ease-out 0.3s both; font-weight: 300;\">
                    Pendant plus de 25 ans, nous avons aidé des dizaines de milliers de voyageurs à découvrir les destinations qui les font rêver. Pas avec des packages standards. Mais avec des expériences sur mesure, pensées jusque dans les moindres détails, créées avec passion et authenticité.
                </p>

                <div style=\"display: flex; gap: 20px; flex-wrap: wrap; align-items: center; animation: fadeInUp 0.8s ease-out 0.4s both;\">
                    <a href=\"/loisirs\" class=\"cta-button\">Découvrir nos Voyages</a>
                    <a href=\"#apropos\" style=\"display: inline-block; padding: 16px 30px; color: var(--accent-amber); text-decoration: none; font-weight: 600; letter-spacing: 1px; border: 2px solid var(--accent-amber); border-radius: 50px; transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: pointer; position: relative; box-shadow: 0 4px 15px rgba(255, 193, 7, 0.15);\">
                        Notre Histoire

                        
                    </a>
                </div>
            </div>

            <div style=\"margin-top: 120px; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px;\">
                <div style=\"text-align: center; animation: scaleIn 0.8s ease-out 0.2s both; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: default;\">
                    <div style=\"font-size: 36px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px; animation: countUp 2s ease-out;\">500K+</div>
                    <p style=\"color: rgba(244, 248, 252, 0.7); font-size: 14px; letter-spacing: 1px; transition: all 0.3s ease;\">Voyageurs Satisfaits</p>
                </div>
                <div style=\"text-align: center; animation: scaleIn 0.8s ease-out 0.35s both; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: default;\">
                    <div style=\"font-size: 36px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px; animation: countUp 2s ease-out 0.2s both;\">180+</div>
                    <p style=\"color: rgba(244, 248, 252, 0.7); font-size: 14px; letter-spacing: 1px; transition: all 0.3s ease;\">Destinations</p>
                </div>
                <div style=\"text-align: center; animation: scaleIn 0.8s ease-out 0.5s both; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: default;\">
                    <div style=\"font-size: 36px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px; animation: countUp 2s ease-out 0.4s both;\">25+</div>
                    <p style=\"color: rgba(244, 248, 252, 0.7); font-size: 14px; letter-spacing: 1px; transition: all 0.3s ease;\">Années d'Expertise</p>
                </div>
            </div>
        </div>

        <style>
        .modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
}

.quiz-box {
    background: #0d2a3a;
    margin: 8% auto;
    padding: 25px;
    width: 400px;
    border-radius: 15px;
    color: white;
    text-align: left;
}

.quiz-box h2 {
    color: #ffb400;
}

.quiz-box button {
    margin-top: 15px;
    padding: 10px;
    background: #ffb400;
    border: none;
    cursor: pointer;
    width: 100%;
    font-weight: bold;
}

.closeQuiz {
    float: right;
    cursor: pointer;
    font-size: 22px;
}

            @keyframes titlePulse {
                0%, 100% { filter: drop-shadow(0 0 10px rgba(255, 193, 7, 0.3)); }
                50% { filter: drop-shadow(0 0 20px rgba(255, 143, 0, 0.5)); }
            }

            @keyframes countUp {
                from {
                    opacity: 0;
                    transform: scale(0.5);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            @keyframes slideInFromLeft {
                from {
                    opacity: 0;
                    transform: translateX(-50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
        </style>
    </section>

    <!-- TRANSPORTS Section -->
    <section id=\"transports\">
        <div class=\"section-content\">
            <div style=\"text-align: center; margin-bottom: 50px;\">
                <h1 class=\"section-title\" style=\"font-size: 48px; margin-bottom: 15px;\">Voyagez avec Style</h1>
                <p style=\"font-size: 18px; color: rgba(244, 248, 252, 0.8); max-width: 600px; margin: 0 auto;\">
                    Le voyage commence bien avant le départ. C'est pourquoi nous choisissons chaque détail du transport avec soin.
                </p>
            </div>

            <div class=\"features-grid\">
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-plane\"></i></div>
                    <h3>Vols Sélectionnés</h3>
                    <p>Nous travaillons avec les meilleures compagnies aériennes. Confort premium, services impeccables, et une ponctualité qui ne faillit jamais.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-ship\"></i></div>
                    <h3>Croisières Inoubliables</h3>
                    <p>Des itinéraires exclusifs. Des cabines spectaculaires. Des souvenirs que vous chérirez pendant des décennies.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-car\"></i></div>
                    <h3>Transferts Privés</h3>
                    <p>À chaque destination, un chauffeur attentionné vous attend. Confortablement installé, sans stress, prêt à découvrir.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HEBERGEMENTS Section -->
    <section id=\"hebergements\">
        <div class=\"section-content\">
            <div style=\"text-align: center; margin-bottom: 80px;\">
                <h1 class=\"section-title\" style=\"font-size: 48px; margin-bottom: 15px;\">Se Reposer en Beauté</h1>
                <p style=\"font-size: 18px; color: rgba(244, 248, 252, 0.8); max-width: 600px; margin: 0 auto;\">
                    Votre chambre n'est pas qu'un endroit pour dormir. C'est un sanctuaire où chaque moment compte.
                </p>
            </div>

            <div class=\"features-grid\">
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-hotel\"></i></div>
                    <h3>Hôtels Prestigieux</h3>
                    <p>Des établissements d'exception sélectionnés pour leur excellence. Chaque détail, des draps aux services du concierge, reflète la perfection.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-umbrella-beach\"></i></div>
                    <h3>Paradis Privés</h3>
                    <p>Des résidences exclusives sur les plus belles îles du monde. Plages de rêve. Tranquillité absolue. Luxe discret mais incontestable.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-mountain\"></i></div>
                    <h3>Refuges Authentiques</h3>
                    <p>Chalets de montagne, maisons de charme, villas avec vue panoramique. Des endroits qui semblent suspendus en dehors du temps.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- LOISIRS Section -->
    <section id=\"loisirs\">
        <div class=\"section-content\">
            <div style=\"text-align: center; margin-bottom: 80px;\">
                <h1 class=\"section-title\" style=\"font-size: 48px; margin-bottom: 15px;\">Vivre des Expériences</h1>
                <p style=\"font-size: 18px; color: rgba(244, 248, 252, 0.8); max-width: 600px; margin: 0 auto;\">
                    Les vraies aventures ne se trouvent dans aucun guide touristique. Elles se vivent, se respirent, se ressentent.
                </p>
            </div>

            <div class=\"features-grid\">
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-theater-masks\"></i></div>
                    <h3>Rencontres Culturelles</h3>
                    <p>Danser avec les habitants locaux. Apprendre secrets des traditions ancestrales. Comprendre vraiment la beauté d'une culture.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-water\"></i></div>
                    <h3>Aventures Enthousiasmantes</h3>
                    <p>Escalade, plongée, randonnée dans les paysages les plus spectaculaires de la planète. L'adrénaline au service de l'exploration.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-utensils\"></i></div>
                    <h3>Voyage Culinaire</h3>
                    <p>Dîner chez un chef réputé. Déguster des saveurs insoupçonnées. Chaque plateau raconte une histoire.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- RECLAMATIONS Section -->
    <section id=\"reclamations\">
        <div class=\"section-content\">
            <div style=\"text-align: center; margin-bottom: 80px;\">
                <h1 class=\"section-title\" style=\"font-size: 48px; margin-bottom: 15px;\">Votre Satisfaction, Notre Mission</h1>
                <p style=\"font-size: 18px; color: rgba(244, 248, 252, 0.8); max-width: 600px; margin: 0 auto;\">
                    Quelque chose n'a pas été à la hauteur ? Nous sommes là pour le corriger. Immédiatement, sincèrement, d'un cœur authentique.
                </p>
            </div>

            <div class=\"features-grid\">
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-headset\"></i></div>
                    <h3>Équipe Toujours Presente</h3>
                    <p>24h/24, 7j/7. Pas de bots, pas de scripts. Des personnes réelles qui écoutent vraiment votre problème.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-bolt\"></i></div>
                    <h3>Résolutions Réelles</h3>
                    <p>Nous ne trouvons pas d'excuses. Nous trouvons des solutions. Rapidement et avec sincérité.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-star\"></i></div>
                    <h3>Garantie sans Condition</h3>
                    <p>Insatisfait ? Remboursement complet ou réajustement généreux. C'est aussi simple que ça.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- A PROPOS Section -->
    <section id=\"apropos\">
        <div class=\"section-content\">
            <div style=\"text-align: center; margin-bottom: 60px;\">
                <h1 class=\"section-title\" style=\"font-size: 48px; margin-bottom: 15px;\">ASAFAR : Plus qu'une Agence</h1>
            </div>

            <div style=\"max-width: 900px; margin: 0 auto;\">
                <p style=\"font-size: 18px; line-height: 1.9; color: rgba(244, 248, 252, 0.85); margin-bottom: 30px;\">
                    ASAFAR est née d'une simple conviction : les voyages changent les gens. Pas en surface. En profondeur.
                </p>

                <p style=\"font-size: 18px; line-height: 1.9; color: rgba(244, 248, 252, 0.85); margin-bottom: 30px;\">
                    Pendant 25 ans, nous avons observé. Nous avons écouté les histoires de nos clients. Nous avons appris ce qui rend un voyage vraiment spécial. Ce n'est jamais le luxe seul. C'est l'authenticité. C'est l'inattendu. C'est se sentir accueilli, compris, valorisé.
                </p>

                <p style=\"font-size: 18px; line-height: 1.9; color: rgba(244, 248, 252, 0.85); margin-bottom: 40px;\">
                    Chaque détail de votre voyageavec ASAFAR est pensé par des gens qui aiment passionnément ce qu'ils font. Pas pour le profit. Pour la passion. Pour créer des moments magiques qui deviendront vos souvenirs les plus précieux.
                </p>

                <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-top: 60px;\">
                    <div style=\"text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px;\">25+</div>
                        <p style=\"color: rgba(244, 248, 252, 0.7);\">Années de Passion</p>
                    </div>
                    <div style=\"text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px;\">200+</div>
                        <p style=\"color: rgba(244, 248, 252, 0.7);\">Experts Voyageurs</p>
                    </div>
                    <div style=\"text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px;\">50+</div>
                        <p style=\"color: rgba(244, 248, 252, 0.7);\">Prix Prestigieux</p>
                    </div>
                </div>

                <div style=\"text-align: center; margin-top: 60px;\">
                    <a href=\"#accueil\" class=\"cta-button\">Commençons Votre Histoire</a>
                </div>
            </div>
        </div>
    </section>

   
<script>

document.addEventListener(\"DOMContentLoaded\", function () {

    // ================= SCROLL =================
    document.querySelectorAll('nav a, a[href^=\"#\"]').forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href && href.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });

    // ================= ANIMATION CARDS =================
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.feature-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        observer.observe(card);
    });


// ================= ROUE =================
(function () {

    // ── 1. Reset localStorage pour les tests (RETIRER EN PRODUCTION) ──
    // localStorage.clear();

    // ── 2. Clé du jour en heure locale ──
    function getLocalDateKey() {
        const d = new Date();
        const yyyy = d.getFullYear();
        const mm = String(d.getMonth() + 1).padStart(2, '0');
        const dd = String(d.getDate()).padStart(2, '0');
        return 'wheel_played_' + yyyy + '-' + mm + '-' + dd;
    }

    const todayKey = getLocalDateKey();

    // ── 3. Nettoyer anciennes clés ──
    try {
        Object.keys(localStorage).forEach(k => {
            if (k.startsWith('wheel_played_') && k !== todayKey) {
                localStorage.removeItem(k);
            }
        });
    } catch(e) {}


    // ── 5. Attendre que le DOM soit prêt ──
    function init() {
        const modal = document.getElementById(\"wheelModal\");
        if (!modal) return;

        const closeBtn = document.getElementById(\"wheelClose\");
        const btn      = document.getElementById(\"spinBtn\");
        const result   = document.getElementById(\"result\");
        const canvas   = document.getElementById(\"wheel\");

        if (!closeBtn || !btn || !result || !canvas) return;

        const ctx = canvas.getContext(\"2d\");
        const cx = 170, cy = 170, r = 165;

const segments = [
    { label: 'Perdu', color: '#1e3a5f' },
    { label: '+5 Point', color: '#0e7490' },
    { label: 'Perdu', color: '#1e3a5f' },
    { label: '+10 Point', color: '#0d9488' },
    { label: 'Perdu', color: '#1e3a5f' },
    { label: '+15 Point', color: '#0e7490' },
    { label: 'Perdu', color: '#1e3a5f' },
    { label: '+20 Point', color: '#f59e0b' },
];

        const n   = segments.length;
        const arc = (2 * Math.PI) / n;
        let rotation  = 0;
        let openTimer = null;
        let hasSpun   = false;

        // ── Dessin ──
        function drawWheel(rot) {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let i = 0; i < n; i++) {
                const start = rot + i * arc;
                const end   = start + arc;
                ctx.beginPath();
                ctx.moveTo(cx, cy);
                ctx.arc(cx, cy, r, start, end);
                ctx.closePath();
                ctx.fillStyle = segments[i].color;
                ctx.fill();
                ctx.strokeStyle = 'rgba(255,255,255,0.08)';
                ctx.lineWidth = 1.5;
                ctx.stroke();

                ctx.save();
                ctx.translate(cx, cy);
                ctx.rotate(start + arc / 2);
                ctx.textAlign  = 'right';
                ctx.fillStyle  = segments[i].label === 'Perdu' ? 'rgba(255,255,255,0.35)' : '#fff';
                ctx.font       = segments[i].label === 'Perdu' ? '12px sans-serif' : 'bold 14px sans-serif';
                ctx.fillText(segments[i].label, r - 14, 5);
                ctx.restore();
            }
            // Centre
            ctx.beginPath();
            ctx.arc(cx, cy, 28, 0, 2 * Math.PI);
            ctx.fillStyle   = '#0d2137';
            ctx.fill();
            ctx.strokeStyle = 'rgba(255,255,255,0.12)';
            ctx.lineWidth   = 2;
            ctx.stroke();
        }

        drawWheel(rotation);

const canPlay = ";
        // line 541
        yield (((($tmp = (isset($context["canPlayWheel"]) || array_key_exists("canPlayWheel", $context) ? $context["canPlayWheel"] : (function () { throw new RuntimeError('Variable "canPlayWheel" does not exist.', 541, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";
if (canPlay) {
    openTimer = setTimeout(() => modal.classList.add('active'), 5000);
}
        // ── Fermer sans jouer ──
        closeBtn.onclick = () => {
            clearTimeout(openTimer);
            modal.classList.remove('active');
        };

        // ── Spin ──
btn.addEventListener(\"click\", function () {
    if (hasSpun) return;

    hasSpun = true;
    btn.disabled = true;
    result.innerText = \"⏳ En cours...\";

    fetch('";
        // line 559
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_wheel_spin");
        yield "', {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(res => res.json())
    .then(data => {

        if (data.error === 'already_played') {
            localStorage.setItem(todayKey, '1');
            result.innerText = \"❌ Déjà joué aujourd'hui\";

            setTimeout(() => {
                modal.classList.remove('active');
                modal.remove();
            }, 1500);
            return;
        }

        if (data.error) {
            result.innerText = \"❌ Erreur serveur\";
            hasSpun = false;
            btn.disabled = false;
            return;
        }

        const gain = data.gain;

        // 🔥 CORRESPONDANCE CORRECTE
const pointsMap = {
    1: 5,
    2: 10,
    3: 15,
    4: 20
};

const displayPoints = pointsMap[gain] || 0;

const targetLabel = gain > 0 ? '+' + displayPoints + ' Point' : 'Perdu';

        const targetIndex = segments.findIndex(s => s.label === targetLabel);

        const finalIndex = targetIndex !== -1 ? targetIndex : 0;

        const targetAngle  = -(finalIndex * arc + arc / 2) - Math.PI / 2;
        const fullSpins    = (5 + Math.floor(Math.random() * 3)) * 2 * Math.PI;
        const finalRotation = targetAngle + fullSpins;

        const duration  = 3500;
        const startTime = performance.now();
        const startRot  = rotation;

        function ease(t) { return 1 - Math.pow(1 - t, 3); }

        function frame(now) {
            const t = Math.min((now - startTime) / duration, 1);
            rotation = startRot + (finalRotation - startRot) * ease(t);
            drawWheel(rotation);

            if (t < 1) {
                requestAnimationFrame(frame);
                return;
            }

            localStorage.setItem(todayKey, '1');

            // 🔥 RESULT CLEAN
            if (gain > 0) {
                result.innerHTML = `
                    <span style=\"color:#34d399;font-weight:600;\">
🎉 +\${displayPoints} points ajoutés !
                    </span>
                `;
            } else {
                result.innerHTML = `
                    <span style=\"color:#f87171;\">
                        😢 Perdu, réessaie demain !
                    </span>
                `;

                setTimeout(() => {
                    modal.classList.remove('active');
                    modal.remove();
                }, 3000);
            }
        }

        requestAnimationFrame(frame);
    })
    .catch(() => {
        result.innerText = \"❌ Erreur réseau\";
        hasSpun = false;
        btn.disabled = false;
    });
});
    }

    // ── Lancer après chargement du DOM ──
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
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
        return "index.html.twig";
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
        return array (  687 => 559,  666 => 541,  154 => 31,  132 => 11,  130 => 10,  127 => 9,  114 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ASAFAR - Explorez le Monde Différemment{% endblock %}

{% block stylesheets %}
{{ parent() }}
{% endblock %}
{% block body %}

{% if not (alreadyPlayed|default(false)) %}
<div id=\"wheelModal\" class=\"wheel-overlay\">
  <div class=\"wheel-modal\">

    <button class=\"wheel-close\" id=\"wheelClose\">&times;</button>

    <p class=\"wheel-eyebrow\">Tentez votre chance</p>
    <h3 class=\"wheel-title\">Tournez la roue !</h3>

    <div class=\"wheel-wrap\">
      <div class=\"wheel-pointer\"></div>
<canvas id=\"wheel\" width=\"340\" height=\"340\"></canvas>    </div>

    <p id=\"result\" class=\"wheel-result\"></p>

    <button id=\"spinBtn\" class=\"wheel-btn\">Tourner</button>

    <p class=\"wheel-note\">Une seule tentative par compte</p>
  </div>
</div>
{% endif %}

<style>
.wheel-overlay {
  display: none;
  position: fixed;
  inset: 0;
  z-index: 9999;
  background: rgba(0,0,0,0.6);
  align-items: center;
  justify-content: center;
}
.wheel-overlay.active { display: flex; }

.wheel-modal {
  background: #0d2137;
  border-radius: 16px;
  width: 420px;
  padding: 28px 24px 24px;
  position: relative;
  border: 1px solid rgba(255,255,255,0.08);
  text-align: center;
}

.wheel-close {
  position: absolute;
  top: 12px; right: 14px;
  background: rgba(255,255,255,0.08);
  border: none;
  color: rgba(255,255,255,0.6);
  width: 28px; height: 28px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 18px;
  line-height: 28px;
}

.wheel-eyebrow {
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 2px;
  color: #f59e0b;
  text-transform: uppercase;
  margin: 0 0 6px;
}

.wheel-title {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin: 0 0 20px;
}

.wheel-wrap {
  position: relative;
  display: inline-block;
  margin-bottom: 20px;
}

.wheel-pointer {
  width: 0; height: 0;
  border-left: 12px solid transparent;
  border-right: 12px solid transparent;
  border-bottom: 24px solid #f59e0b;
  position: absolute;
  top: -10px; left: 50%;
  transform: translateX(-50%);
  z-index: 10;
}

#wheel {
  border-radius: 50%;
  box-shadow: 0 0 0 4px rgba(255,255,255,0.06), 0 8px 32px rgba(0,0,0,0.4);
}

.wheel-result {
  min-height: 22px;
  font-size: 14px;
  color: rgba(255,255,255,0.6);
  margin-bottom: 16px;
}

.wheel-btn {
  background: linear-gradient(135deg, #f59e0b, #ef6c00);
  color: #fff;
  border: none;
  border-radius: 50px;
  padding: 12px 40px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  width: 100%;
}
.wheel-btn:disabled { opacity: 0.5; cursor: not-allowed; }

.wheel-note {
  font-size: 11px;
  color: rgba(255,255,255,0.3);
  margin: 14px 0 0;
}
</style>



    <!-- ACCEUIL Section -->
    <section id=\"accueil\" style=\"background: linear-gradient(135deg, rgba(11, 45, 74, 0.9) 0%, rgba(8, 38, 62, 0.95) 50%, rgba(5, 22, 33, 0.98) 100%); position: relative;\">
        <div class=\"section-content\">
            <div style=\"max-width: 800px; animation: slideInFromLeft 0.8s ease-out;\">
                <h1 class=\"section-title\" style=\"font-size: 56px; line-height: 1.2; margin-bottom: 20px;\">
                    Voyager, c'est <span style=\"background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: titlePulse 3s ease-in-out infinite;\">vivre</span>
                </h1>

                <p style=\"font-size: 20px; line-height: 1.8; color: rgba(244, 248, 252, 0.9); margin-bottom: 30px; font-weight: 300; animation: fadeInUp 0.8s ease-out 0.2s both;\">
                    Chez ASAFAR, nous ne vendons pas simplement des voyages. Nous créons des histoires. Des moments qui transforment votre perspective du monde. Des souvenirs qui traversent toute une vie.
                </p>

                <p style=\"font-size: 16px; line-height: 1.8; color: rgba(244, 248, 252, 0.75); margin-bottom: 40px; animation: fadeInUp 0.8s ease-out 0.3s both; font-weight: 300;\">
                    Pendant plus de 25 ans, nous avons aidé des dizaines de milliers de voyageurs à découvrir les destinations qui les font rêver. Pas avec des packages standards. Mais avec des expériences sur mesure, pensées jusque dans les moindres détails, créées avec passion et authenticité.
                </p>

                <div style=\"display: flex; gap: 20px; flex-wrap: wrap; align-items: center; animation: fadeInUp 0.8s ease-out 0.4s both;\">
                    <a href=\"/loisirs\" class=\"cta-button\">Découvrir nos Voyages</a>
                    <a href=\"#apropos\" style=\"display: inline-block; padding: 16px 30px; color: var(--accent-amber); text-decoration: none; font-weight: 600; letter-spacing: 1px; border: 2px solid var(--accent-amber); border-radius: 50px; transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: pointer; position: relative; box-shadow: 0 4px 15px rgba(255, 193, 7, 0.15);\">
                        Notre Histoire

                        
                    </a>
                </div>
            </div>

            <div style=\"margin-top: 120px; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px;\">
                <div style=\"text-align: center; animation: scaleIn 0.8s ease-out 0.2s both; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: default;\">
                    <div style=\"font-size: 36px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px; animation: countUp 2s ease-out;\">500K+</div>
                    <p style=\"color: rgba(244, 248, 252, 0.7); font-size: 14px; letter-spacing: 1px; transition: all 0.3s ease;\">Voyageurs Satisfaits</p>
                </div>
                <div style=\"text-align: center; animation: scaleIn 0.8s ease-out 0.35s both; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: default;\">
                    <div style=\"font-size: 36px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px; animation: countUp 2s ease-out 0.2s both;\">180+</div>
                    <p style=\"color: rgba(244, 248, 252, 0.7); font-size: 14px; letter-spacing: 1px; transition: all 0.3s ease;\">Destinations</p>
                </div>
                <div style=\"text-align: center; animation: scaleIn 0.8s ease-out 0.5s both; transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); cursor: default;\">
                    <div style=\"font-size: 36px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px; animation: countUp 2s ease-out 0.4s both;\">25+</div>
                    <p style=\"color: rgba(244, 248, 252, 0.7); font-size: 14px; letter-spacing: 1px; transition: all 0.3s ease;\">Années d'Expertise</p>
                </div>
            </div>
        </div>

        <style>
        .modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
}

.quiz-box {
    background: #0d2a3a;
    margin: 8% auto;
    padding: 25px;
    width: 400px;
    border-radius: 15px;
    color: white;
    text-align: left;
}

.quiz-box h2 {
    color: #ffb400;
}

.quiz-box button {
    margin-top: 15px;
    padding: 10px;
    background: #ffb400;
    border: none;
    cursor: pointer;
    width: 100%;
    font-weight: bold;
}

.closeQuiz {
    float: right;
    cursor: pointer;
    font-size: 22px;
}

            @keyframes titlePulse {
                0%, 100% { filter: drop-shadow(0 0 10px rgba(255, 193, 7, 0.3)); }
                50% { filter: drop-shadow(0 0 20px rgba(255, 143, 0, 0.5)); }
            }

            @keyframes countUp {
                from {
                    opacity: 0;
                    transform: scale(0.5);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            @keyframes slideInFromLeft {
                from {
                    opacity: 0;
                    transform: translateX(-50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
        </style>
    </section>

    <!-- TRANSPORTS Section -->
    <section id=\"transports\">
        <div class=\"section-content\">
            <div style=\"text-align: center; margin-bottom: 50px;\">
                <h1 class=\"section-title\" style=\"font-size: 48px; margin-bottom: 15px;\">Voyagez avec Style</h1>
                <p style=\"font-size: 18px; color: rgba(244, 248, 252, 0.8); max-width: 600px; margin: 0 auto;\">
                    Le voyage commence bien avant le départ. C'est pourquoi nous choisissons chaque détail du transport avec soin.
                </p>
            </div>

            <div class=\"features-grid\">
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-plane\"></i></div>
                    <h3>Vols Sélectionnés</h3>
                    <p>Nous travaillons avec les meilleures compagnies aériennes. Confort premium, services impeccables, et une ponctualité qui ne faillit jamais.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-ship\"></i></div>
                    <h3>Croisières Inoubliables</h3>
                    <p>Des itinéraires exclusifs. Des cabines spectaculaires. Des souvenirs que vous chérirez pendant des décennies.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-car\"></i></div>
                    <h3>Transferts Privés</h3>
                    <p>À chaque destination, un chauffeur attentionné vous attend. Confortablement installé, sans stress, prêt à découvrir.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HEBERGEMENTS Section -->
    <section id=\"hebergements\">
        <div class=\"section-content\">
            <div style=\"text-align: center; margin-bottom: 80px;\">
                <h1 class=\"section-title\" style=\"font-size: 48px; margin-bottom: 15px;\">Se Reposer en Beauté</h1>
                <p style=\"font-size: 18px; color: rgba(244, 248, 252, 0.8); max-width: 600px; margin: 0 auto;\">
                    Votre chambre n'est pas qu'un endroit pour dormir. C'est un sanctuaire où chaque moment compte.
                </p>
            </div>

            <div class=\"features-grid\">
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-hotel\"></i></div>
                    <h3>Hôtels Prestigieux</h3>
                    <p>Des établissements d'exception sélectionnés pour leur excellence. Chaque détail, des draps aux services du concierge, reflète la perfection.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-umbrella-beach\"></i></div>
                    <h3>Paradis Privés</h3>
                    <p>Des résidences exclusives sur les plus belles îles du monde. Plages de rêve. Tranquillité absolue. Luxe discret mais incontestable.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-mountain\"></i></div>
                    <h3>Refuges Authentiques</h3>
                    <p>Chalets de montagne, maisons de charme, villas avec vue panoramique. Des endroits qui semblent suspendus en dehors du temps.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- LOISIRS Section -->
    <section id=\"loisirs\">
        <div class=\"section-content\">
            <div style=\"text-align: center; margin-bottom: 80px;\">
                <h1 class=\"section-title\" style=\"font-size: 48px; margin-bottom: 15px;\">Vivre des Expériences</h1>
                <p style=\"font-size: 18px; color: rgba(244, 248, 252, 0.8); max-width: 600px; margin: 0 auto;\">
                    Les vraies aventures ne se trouvent dans aucun guide touristique. Elles se vivent, se respirent, se ressentent.
                </p>
            </div>

            <div class=\"features-grid\">
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-theater-masks\"></i></div>
                    <h3>Rencontres Culturelles</h3>
                    <p>Danser avec les habitants locaux. Apprendre secrets des traditions ancestrales. Comprendre vraiment la beauté d'une culture.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-water\"></i></div>
                    <h3>Aventures Enthousiasmantes</h3>
                    <p>Escalade, plongée, randonnée dans les paysages les plus spectaculaires de la planète. L'adrénaline au service de l'exploration.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-utensils\"></i></div>
                    <h3>Voyage Culinaire</h3>
                    <p>Dîner chez un chef réputé. Déguster des saveurs insoupçonnées. Chaque plateau raconte une histoire.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- RECLAMATIONS Section -->
    <section id=\"reclamations\">
        <div class=\"section-content\">
            <div style=\"text-align: center; margin-bottom: 80px;\">
                <h1 class=\"section-title\" style=\"font-size: 48px; margin-bottom: 15px;\">Votre Satisfaction, Notre Mission</h1>
                <p style=\"font-size: 18px; color: rgba(244, 248, 252, 0.8); max-width: 600px; margin: 0 auto;\">
                    Quelque chose n'a pas été à la hauteur ? Nous sommes là pour le corriger. Immédiatement, sincèrement, d'un cœur authentique.
                </p>
            </div>

            <div class=\"features-grid\">
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-headset\"></i></div>
                    <h3>Équipe Toujours Presente</h3>
                    <p>24h/24, 7j/7. Pas de bots, pas de scripts. Des personnes réelles qui écoutent vraiment votre problème.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-bolt\"></i></div>
                    <h3>Résolutions Réelles</h3>
                    <p>Nous ne trouvons pas d'excuses. Nous trouvons des solutions. Rapidement et avec sincérité.</p>
                </div>
                <div class=\"feature-card\">
                    <div class=\"feature-icon\"><i class=\"fas fa-star\"></i></div>
                    <h3>Garantie sans Condition</h3>
                    <p>Insatisfait ? Remboursement complet ou réajustement généreux. C'est aussi simple que ça.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- A PROPOS Section -->
    <section id=\"apropos\">
        <div class=\"section-content\">
            <div style=\"text-align: center; margin-bottom: 60px;\">
                <h1 class=\"section-title\" style=\"font-size: 48px; margin-bottom: 15px;\">ASAFAR : Plus qu'une Agence</h1>
            </div>

            <div style=\"max-width: 900px; margin: 0 auto;\">
                <p style=\"font-size: 18px; line-height: 1.9; color: rgba(244, 248, 252, 0.85); margin-bottom: 30px;\">
                    ASAFAR est née d'une simple conviction : les voyages changent les gens. Pas en surface. En profondeur.
                </p>

                <p style=\"font-size: 18px; line-height: 1.9; color: rgba(244, 248, 252, 0.85); margin-bottom: 30px;\">
                    Pendant 25 ans, nous avons observé. Nous avons écouté les histoires de nos clients. Nous avons appris ce qui rend un voyage vraiment spécial. Ce n'est jamais le luxe seul. C'est l'authenticité. C'est l'inattendu. C'est se sentir accueilli, compris, valorisé.
                </p>

                <p style=\"font-size: 18px; line-height: 1.9; color: rgba(244, 248, 252, 0.85); margin-bottom: 40px;\">
                    Chaque détail de votre voyageavec ASAFAR est pensé par des gens qui aiment passionnément ce qu'ils font. Pas pour le profit. Pour la passion. Pour créer des moments magiques qui deviendront vos souvenirs les plus précieux.
                </p>

                <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-top: 60px;\">
                    <div style=\"text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px;\">25+</div>
                        <p style=\"color: rgba(244, 248, 252, 0.7);\">Années de Passion</p>
                    </div>
                    <div style=\"text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px;\">200+</div>
                        <p style=\"color: rgba(244, 248, 252, 0.7);\">Experts Voyageurs</p>
                    </div>
                    <div style=\"text-align: center;\">
                        <div style=\"font-size: 32px; font-weight: 700; background: var(--gradient-2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 10px;\">50+</div>
                        <p style=\"color: rgba(244, 248, 252, 0.7);\">Prix Prestigieux</p>
                    </div>
                </div>

                <div style=\"text-align: center; margin-top: 60px;\">
                    <a href=\"#accueil\" class=\"cta-button\">Commençons Votre Histoire</a>
                </div>
            </div>
        </div>
    </section>

   
<script>

document.addEventListener(\"DOMContentLoaded\", function () {

    // ================= SCROLL =================
    document.querySelectorAll('nav a, a[href^=\"#\"]').forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href && href.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });

    // ================= ANIMATION CARDS =================
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.feature-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        observer.observe(card);
    });


// ================= ROUE =================
(function () {

    // ── 1. Reset localStorage pour les tests (RETIRER EN PRODUCTION) ──
    // localStorage.clear();

    // ── 2. Clé du jour en heure locale ──
    function getLocalDateKey() {
        const d = new Date();
        const yyyy = d.getFullYear();
        const mm = String(d.getMonth() + 1).padStart(2, '0');
        const dd = String(d.getDate()).padStart(2, '0');
        return 'wheel_played_' + yyyy + '-' + mm + '-' + dd;
    }

    const todayKey = getLocalDateKey();

    // ── 3. Nettoyer anciennes clés ──
    try {
        Object.keys(localStorage).forEach(k => {
            if (k.startsWith('wheel_played_') && k !== todayKey) {
                localStorage.removeItem(k);
            }
        });
    } catch(e) {}


    // ── 5. Attendre que le DOM soit prêt ──
    function init() {
        const modal = document.getElementById(\"wheelModal\");
        if (!modal) return;

        const closeBtn = document.getElementById(\"wheelClose\");
        const btn      = document.getElementById(\"spinBtn\");
        const result   = document.getElementById(\"result\");
        const canvas   = document.getElementById(\"wheel\");

        if (!closeBtn || !btn || !result || !canvas) return;

        const ctx = canvas.getContext(\"2d\");
        const cx = 170, cy = 170, r = 165;

const segments = [
    { label: 'Perdu', color: '#1e3a5f' },
    { label: '+5 Point', color: '#0e7490' },
    { label: 'Perdu', color: '#1e3a5f' },
    { label: '+10 Point', color: '#0d9488' },
    { label: 'Perdu', color: '#1e3a5f' },
    { label: '+15 Point', color: '#0e7490' },
    { label: 'Perdu', color: '#1e3a5f' },
    { label: '+20 Point', color: '#f59e0b' },
];

        const n   = segments.length;
        const arc = (2 * Math.PI) / n;
        let rotation  = 0;
        let openTimer = null;
        let hasSpun   = false;

        // ── Dessin ──
        function drawWheel(rot) {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let i = 0; i < n; i++) {
                const start = rot + i * arc;
                const end   = start + arc;
                ctx.beginPath();
                ctx.moveTo(cx, cy);
                ctx.arc(cx, cy, r, start, end);
                ctx.closePath();
                ctx.fillStyle = segments[i].color;
                ctx.fill();
                ctx.strokeStyle = 'rgba(255,255,255,0.08)';
                ctx.lineWidth = 1.5;
                ctx.stroke();

                ctx.save();
                ctx.translate(cx, cy);
                ctx.rotate(start + arc / 2);
                ctx.textAlign  = 'right';
                ctx.fillStyle  = segments[i].label === 'Perdu' ? 'rgba(255,255,255,0.35)' : '#fff';
                ctx.font       = segments[i].label === 'Perdu' ? '12px sans-serif' : 'bold 14px sans-serif';
                ctx.fillText(segments[i].label, r - 14, 5);
                ctx.restore();
            }
            // Centre
            ctx.beginPath();
            ctx.arc(cx, cy, 28, 0, 2 * Math.PI);
            ctx.fillStyle   = '#0d2137';
            ctx.fill();
            ctx.strokeStyle = 'rgba(255,255,255,0.12)';
            ctx.lineWidth   = 2;
            ctx.stroke();
        }

        drawWheel(rotation);

const canPlay = {{ canPlayWheel ? 'true' : 'false' }};
if (canPlay) {
    openTimer = setTimeout(() => modal.classList.add('active'), 5000);
}
        // ── Fermer sans jouer ──
        closeBtn.onclick = () => {
            clearTimeout(openTimer);
            modal.classList.remove('active');
        };

        // ── Spin ──
btn.addEventListener(\"click\", function () {
    if (hasSpun) return;

    hasSpun = true;
    btn.disabled = true;
    result.innerText = \"⏳ En cours...\";

    fetch('{{ path('api_wheel_spin') }}', {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(res => res.json())
    .then(data => {

        if (data.error === 'already_played') {
            localStorage.setItem(todayKey, '1');
            result.innerText = \"❌ Déjà joué aujourd'hui\";

            setTimeout(() => {
                modal.classList.remove('active');
                modal.remove();
            }, 1500);
            return;
        }

        if (data.error) {
            result.innerText = \"❌ Erreur serveur\";
            hasSpun = false;
            btn.disabled = false;
            return;
        }

        const gain = data.gain;

        // 🔥 CORRESPONDANCE CORRECTE
const pointsMap = {
    1: 5,
    2: 10,
    3: 15,
    4: 20
};

const displayPoints = pointsMap[gain] || 0;

const targetLabel = gain > 0 ? '+' + displayPoints + ' Point' : 'Perdu';

        const targetIndex = segments.findIndex(s => s.label === targetLabel);

        const finalIndex = targetIndex !== -1 ? targetIndex : 0;

        const targetAngle  = -(finalIndex * arc + arc / 2) - Math.PI / 2;
        const fullSpins    = (5 + Math.floor(Math.random() * 3)) * 2 * Math.PI;
        const finalRotation = targetAngle + fullSpins;

        const duration  = 3500;
        const startTime = performance.now();
        const startRot  = rotation;

        function ease(t) { return 1 - Math.pow(1 - t, 3); }

        function frame(now) {
            const t = Math.min((now - startTime) / duration, 1);
            rotation = startRot + (finalRotation - startRot) * ease(t);
            drawWheel(rotation);

            if (t < 1) {
                requestAnimationFrame(frame);
                return;
            }

            localStorage.setItem(todayKey, '1');

            // 🔥 RESULT CLEAN
            if (gain > 0) {
                result.innerHTML = `
                    <span style=\"color:#34d399;font-weight:600;\">
🎉 +\${displayPoints} points ajoutés !
                    </span>
                `;
            } else {
                result.innerHTML = `
                    <span style=\"color:#f87171;\">
                        😢 Perdu, réessaie demain !
                    </span>
                `;

                setTimeout(() => {
                    modal.classList.remove('active');
                    modal.remove();
                }, 3000);
            }
        }

        requestAnimationFrame(frame);
    })
    .catch(() => {
        result.innerText = \"❌ Erreur réseau\";
        hasSpun = false;
        btn.disabled = false;
    });
});
    }

    // ── Lancer après chargement du DOM ──
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
});
</script>

{% endblock %}", "index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\index.html.twig");
    }
}
