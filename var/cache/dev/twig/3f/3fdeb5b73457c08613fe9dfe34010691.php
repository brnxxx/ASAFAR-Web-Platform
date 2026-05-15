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

/* admin/posts/_signalements_modal_content.html.twig */
class __TwigTemplate_4bf6465640b2d51cc07e0ca6ffaaf879 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/_signalements_modal_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/_signalements_modal_content.html.twig"));

        // line 1
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "    <div style=\"padding: 30px; text-align: center; color: #a8bfdc;\">
        Aucun signalement trouvé.
    </div>
";
        } else {
            // line 6
            yield "    <div style=\"display:grid; gap:14px;\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 8
                yield "            <div style=\"background: rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.06); border-radius:18px; padding:18px;\">
                <div style=\"display:flex; justify-content:space-between; gap:12px; margin-bottom:10px; flex-wrap:wrap;\">
                    <div>
                        <div style=\"font-size:18px; font-weight:800; color:#f4f8ff;\">
                            ";
                // line 12
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "post_titre", [], "any", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["report"], "post_titre", [], "any", false, false, false, 12)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "post_titre", [], "any", false, false, false, 12), "html", null, true)) : ("Post supprimé ou introuvable"));
                yield "
                        </div>
                        <div style=\"color:#a8bfdc; font-size:13px; margin-top:4px;\">
                            Post ID: ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "post_id", [], "any", false, false, false, 15), "html", null, true);
                yield " ·
                            Auteur: ";
                // line 16
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["report"], "auteur_nom", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "auteur_nom", [], "any", false, false, false, 16) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["report"], "auteur_prenom", [], "any", false, false, false, 16)), "html", null, true)) : ("Inconnu"));
                yield " ·
                            Type: ";
                // line 17
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "post_type", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["report"], "post_type", [], "any", false, false, false, 17)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "post_type", [], "any", false, false, false, 17), "html", null, true)) : ("-"));
                yield "
                        </div>
                    </div>

                    <div style=\"display:flex; align-items:center; gap:8px; flex-wrap:wrap;\">
                        <span style=\"padding:8px 12px; border-radius:999px; background: rgba(255,191,27,0.14); color:#ffcf57; font-weight:700; font-size:12px;\">
                            ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "statut", [], "any", false, false, false, 23), "html", null, true);
                yield "
                        </span>
                        <span style=\"color:#a8bfdc; font-size:12px;\">
                            ";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "created_at", [], "any", false, false, false, 26), "html", null, true);
                yield "
                        </span>
                    </div>
                </div>

                <div style=\"margin-bottom:10px; color:#8fd2ff; font-weight:700;\">
                    Raison : ";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "raison", [], "any", false, false, false, 32), "html", null, true);
                yield "
                </div>

                <div style=\"color:#edf4ff; line-height:1.6; margin-bottom:16px;\">
                    ";
                // line 36
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["report"], "details", [], "any", false, false, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "details", [], "any", false, false, false, 36), "html", null, true)) : ("Aucun détail fourni."));
                yield "
                </div>

                <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
                    <button
                        type=\"button\"
                        class=\"pub-btn pub-btn-secondary mark-report-treated-btn\"
                        data-report-id=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "id", [], "any", false, false, false, 43), "html", null, true);
                yield "\"
                    >
                        <i class=\"fas fa-check\"></i>
                        Marquer traité
                    </button>

                    <button
                        type=\"button\"
                        class=\"pub-btn pub-btn-danger delete-report-btn\"
                        data-report-id=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["report"], "id", [], "any", false, false, false, 52), "html", null, true);
                yield "\"
                    >
                        <i class=\"fas fa-trash\"></i>
                        Supprimer
                    </button>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['report'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/posts/_signalements_modal_content.html.twig";
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
        return array (  150 => 60,  136 => 52,  124 => 43,  114 => 36,  107 => 32,  98 => 26,  92 => 23,  83 => 17,  79 => 16,  75 => 15,  69 => 12,  63 => 8,  59 => 7,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if reports is empty %}
    <div style=\"padding: 30px; text-align: center; color: #a8bfdc;\">
        Aucun signalement trouvé.
    </div>
{% else %}
    <div style=\"display:grid; gap:14px;\">
        {% for report in reports %}
            <div style=\"background: rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.06); border-radius:18px; padding:18px;\">
                <div style=\"display:flex; justify-content:space-between; gap:12px; margin-bottom:10px; flex-wrap:wrap;\">
                    <div>
                        <div style=\"font-size:18px; font-weight:800; color:#f4f8ff;\">
                            {{ report.post_titre ?? 'Post supprimé ou introuvable' }}
                        </div>
                        <div style=\"color:#a8bfdc; font-size:13px; margin-top:4px;\">
                            Post ID: {{ report.post_id }} ·
                            Auteur: {{ report.auteur_nom ? report.auteur_nom ~ ' ' ~ report.auteur_prenom : 'Inconnu' }} ·
                            Type: {{ report.post_type ?? '-' }}
                        </div>
                    </div>

                    <div style=\"display:flex; align-items:center; gap:8px; flex-wrap:wrap;\">
                        <span style=\"padding:8px 12px; border-radius:999px; background: rgba(255,191,27,0.14); color:#ffcf57; font-weight:700; font-size:12px;\">
                            {{ report.statut }}
                        </span>
                        <span style=\"color:#a8bfdc; font-size:12px;\">
                            {{ report.created_at }}
                        </span>
                    </div>
                </div>

                <div style=\"margin-bottom:10px; color:#8fd2ff; font-weight:700;\">
                    Raison : {{ report.raison }}
                </div>

                <div style=\"color:#edf4ff; line-height:1.6; margin-bottom:16px;\">
                    {{ report.details ?: 'Aucun détail fourni.' }}
                </div>

                <div style=\"display:flex; gap:10px; flex-wrap:wrap;\">
                    <button
                        type=\"button\"
                        class=\"pub-btn pub-btn-secondary mark-report-treated-btn\"
                        data-report-id=\"{{ report.id }}\"
                    >
                        <i class=\"fas fa-check\"></i>
                        Marquer traité
                    </button>

                    <button
                        type=\"button\"
                        class=\"pub-btn pub-btn-danger delete-report-btn\"
                        data-report-id=\"{{ report.id }}\"
                    >
                        <i class=\"fas fa-trash\"></i>
                        Supprimer
                    </button>
                </div>
            </div>
        {% endfor %}
    </div>
{% endif %}", "admin/posts/_signalements_modal_content.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\posts\\_signalements_modal_content.html.twig");
    }
}
