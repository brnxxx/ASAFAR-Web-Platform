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

/* transports/mobile_detail.html.twig */
class __TwigTemplate_39d6a31af445582c9dfddf200601f92a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transports/mobile_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transports/mobile_detail.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <title>Mon Voyage - ASAFAR</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&family=Playfair+Display:wght@700&display=swap\" rel=\"stylesheet\">
    <style>
        :root {
            --m-navy: #051621;
            --m-sky: #2FA8FF;
            --m-amber: #FFC107;
        }
        body {
            margin: 0; padding: 0;
            background: var(--m-navy);
            color: #F4F8FC;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .header {
            padding: 40px 25px;
            background: linear-gradient(180deg, rgba(47, 168, 255, 0.15) 0%, transparent 100%);
            text-align: center;
        }
        .logo { font-family: 'Playfair Display'; color: var(--m-amber); font-size: 28px; }
        
        .card {
            margin: -20px 20px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 30px;
            animation: slideUp 0.6s ease-out;
        }
        
        .ticket-type {
            text-transform: uppercase; font-size: 12px; font-weight: 800;
            letter-spacing: 2px; color: var(--m-sky); margin-bottom: 10px;
        }
        
        .route-info {
            display: flex; align-items: center; justify-content: space-between;
            margin: 20px 0;
        }
        .city { font-size: 24px; font-weight: 800; }
        .plane-icon { color: var(--m-amber); font-size: 20px; }
        
        .details-grid {
            display: grid; grid-template-columns: 1fr 1fr; gap: 20px;
            margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
        }
        .detail-item label { font-size: 10px; text-transform: uppercase; color: #BED1E0; }
        .detail-item div { font-size: 14px; font-weight: 600; }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <div class=\"logo\">ASAFAR</div>
        <p style=\"font-size: 12px; opacity: 0.7;\">Votre itinéraire numérique</p>
    </div>

    <div class=\"card\">
        <div class=\"ticket-type\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 72, $this->source); })()), "type", [], "any", false, false, false, 72), "html", null, true);
        yield "</div>
        <h2 style=\"margin:0; font-family:'Playfair Display'\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 73, $this->source); })()), "nom", [], "any", false, false, false, 73), "html", null, true);
        yield "</h2>
        
        <div class=\"route-info\">
            <div class=\"city\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "departure", [], "any", false, true, false, 76), "codeIata", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 76, $this->source); })()), "departure", [], "any", false, false, false, 76), "codeIata", [], "any", false, false, false, 76), "DEP")) : ("DEP")), "html", null, true);
        yield "</div>
            <div class=\"plane-icon\">✈</div>
            <div class=\"city\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transport"] ?? null), "destination", [], "any", false, true, false, 78), "codeIata", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 78, $this->source); })()), "destination", [], "any", false, false, false, 78), "codeIata", [], "any", false, false, false, 78), "ARR")) : ("ARR")), "html", null, true);
        yield "</div>
        </div>

        <div style=\"background: rgba(47, 168, 255, 0.1); padding: 15px; border-radius: 15px; font-size: 13px;\">
            ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 0, 100), "html", null, true);
        yield "...
        </div>

        <div class=\"details-grid\">
            <div class=\"detail-item\">
                <label>Prix Payé</label>
                <div style=\"color: var(--m-amber)\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 88, $this->source); })()), "prix", [], "any", false, false, false, 88), "html", null, true);
        yield " TND</div>
            </div>
            <div class=\"detail-item\">
                <label>Date Voyage</label>
                <div>";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d M Y"), "html", null, true);
        yield "</div>
            </div>
            <div class=\"detail-item\">
                <label>Status</label>
                <div style=\"color: #48C774\">● Confirmé</div>
            </div>
            <div class=\"detail-item\">
                <label>Référence</label>
                <div>#ASF-";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100), "html", null, true);
        yield "</div>
            </div>
        </div>
    </div>

    <div style=\"text-align: center; padding: 20px; font-size: 11px; opacity: 0.5;\">
        ASAFAR Mobility - Bon voyage !
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "transports/mobile_detail.html.twig";
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
        return array (  169 => 100,  158 => 92,  151 => 88,  142 => 82,  135 => 78,  130 => 76,  124 => 73,  120 => 72,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/transport/mobile_detail.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <title>Mon Voyage - ASAFAR</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&family=Playfair+Display:wght@700&display=swap\" rel=\"stylesheet\">
    <style>
        :root {
            --m-navy: #051621;
            --m-sky: #2FA8FF;
            --m-amber: #FFC107;
        }
        body {
            margin: 0; padding: 0;
            background: var(--m-navy);
            color: #F4F8FC;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .header {
            padding: 40px 25px;
            background: linear-gradient(180deg, rgba(47, 168, 255, 0.15) 0%, transparent 100%);
            text-align: center;
        }
        .logo { font-family: 'Playfair Display'; color: var(--m-amber); font-size: 28px; }
        
        .card {
            margin: -20px 20px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 30px;
            animation: slideUp 0.6s ease-out;
        }
        
        .ticket-type {
            text-transform: uppercase; font-size: 12px; font-weight: 800;
            letter-spacing: 2px; color: var(--m-sky); margin-bottom: 10px;
        }
        
        .route-info {
            display: flex; align-items: center; justify-content: space-between;
            margin: 20px 0;
        }
        .city { font-size: 24px; font-weight: 800; }
        .plane-icon { color: var(--m-amber); font-size: 20px; }
        
        .details-grid {
            display: grid; grid-template-columns: 1fr 1fr; gap: 20px;
            margin-top: 30px; border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
        }
        .detail-item label { font-size: 10px; text-transform: uppercase; color: #BED1E0; }
        .detail-item div { font-size: 14px; font-weight: 600; }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <div class=\"logo\">ASAFAR</div>
        <p style=\"font-size: 12px; opacity: 0.7;\">Votre itinéraire numérique</p>
    </div>

    <div class=\"card\">
        <div class=\"ticket-type\">{{ transport.type }}</div>
        <h2 style=\"margin:0; font-family:'Playfair Display'\">{{ transport.nom }}</h2>
        
        <div class=\"route-info\">
            <div class=\"city\">{{ transport.departure.codeIata|default('DEP') }}</div>
            <div class=\"plane-icon\">✈</div>
            <div class=\"city\">{{ transport.destination.codeIata|default('ARR') }}</div>
        </div>

        <div style=\"background: rgba(47, 168, 255, 0.1); padding: 15px; border-radius: 15px; font-size: 13px;\">
            {{ transport.description|slice(0, 100) }}...
        </div>

        <div class=\"details-grid\">
            <div class=\"detail-item\">
                <label>Prix Payé</label>
                <div style=\"color: var(--m-amber)\">{{ transport.prix }} TND</div>
            </div>
            <div class=\"detail-item\">
                <label>Date Voyage</label>
                <div>{{ \"now\"|date(\"d M Y\") }}</div>
            </div>
            <div class=\"detail-item\">
                <label>Status</label>
                <div style=\"color: #48C774\">● Confirmé</div>
            </div>
            <div class=\"detail-item\">
                <label>Référence</label>
                <div>#ASF-{{ transport.id }}</div>
            </div>
        </div>
    </div>

    <div style=\"text-align: center; padding: 20px; font-size: 11px; opacity: 0.5;\">
        ASAFAR Mobility - Bon voyage !
    </div>
</body>
</html>", "transports/mobile_detail.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\transports\\mobile_detail.html.twig");
    }
}
