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

/* pdf/facture.html.twig */
class __TwigTemplate_efa7df07a300eb44d4c0daae4d8ae182 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/facture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/facture.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 30px;
            color: #333;
        }

        .header {
            width: 100%;
            display: table;
        }

        .header-left {
            display: table-cell;
            vertical-align: middle;
        }

        .header-right {
            display: table-cell;
            text-align: right;
            vertical-align: middle;
        }

        .logo {
            width: 120px;
        }

        h1 {
            color: #0B2D4A;
            margin: 0;
        }

        .section {
            margin-top: 20px;
            padding: 12px;
            border-radius: 8px;
            background: #f5f7fa;
        }

        .section h3 {
            margin-bottom: 8px;
            color: #1E6FA8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th {
            background: #1E6FA8;
            color: white;
            padding: 8px;
        }

        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        .total {
            margin-top: 20px;
            text-align: right;
            font-size: 16px;
            font-weight: bold;
            color: #0B2D4A;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 11px;
            color: #888;
        }
    </style>
</head>

<body>

<!-- 🔵 HEADER -->
<div class=\"header\">
    <div class=\"header-left\">
<img src=\"data:image/png;base64,";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 90, $this->source); })()), "html", null, true);
        yield "\" class=\"logo\">
    </div>
    <div class=\"header-right\">
        <h1>FACTURE</h1>
    </div>
</div>

<!-- 📄 INFOS FACTURE -->
<div class=\"section\">
    <h3>Informations Facture</h3>
    <p><strong>N° :</strong> ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 100, $this->source); })()), "idReservation", [], "any", false, false, false, 100), "html", null, true);
        yield "</p>
    <p><strong>Date :</strong> ";
        // line 101
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 101, $this->source); })()), "dateReservation", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 101, $this->source); })()), "dateReservation", [], "any", false, false, false, 101), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</p>
    <p><strong>Statut :</strong> ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "statut", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 102, $this->source); })()), "statut", [], "any", false, false, false, 102), "N/A")) : ("N/A")), "html", null, true);
        yield "</p>
</div>
<div class=\"section\">
    <h3>Client</h3>

    ";
        // line 107
        if ((array_key_exists("user", $context) && (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()))) {
            // line 108
            yield "        <p><strong>Nom :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "nom", [], "any", false, false, false, 108), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "prenom", [], "any", false, false, false, 108), "html", null, true);
            yield "</p>
        <p><strong>Email :</strong> ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 109, $this->source); })()), "email", [], "any", false, false, false, 109), "html", null, true);
            yield "</p>
        <p><strong>Téléphone :</strong> ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "telephone", [], "any", false, false, false, 110), "html", null, true);
            yield "</p>
    ";
        } else {
            // line 112
            yield "        <p>Informations client indisponibles</p>
    ";
        }
        // line 114
        yield "</div>

<!-- 🧭 EXCURSION -->
<div class=\"section\">
    <h3>Excursion</h3>
    <p><strong>Titre :</strong> ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "titre", [], "any", true, true, false, 119)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 119, $this->source); })()), "titre", [], "any", false, false, false, 119), "-")) : ("-")), "html", null, true);
        yield "</p>
    <p><strong>Lieu :</strong> ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["excursion"] ?? null), "lieu", [], "any", true, true, false, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 120, $this->source); })()), "lieu", [], "any", false, false, false, 120), "-")) : ("-")), "html", null, true);
        yield "</p>
<p><strong>Date :</strong> ";
        // line 121
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 121, $this->source); })()), "date", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 121, $this->source); })()), "date", [], "any", false, false, false, 121), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</p>
</div>

<!-- 📊 DÉTAIL -->
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Total</th>
        </tr>
    </thead>

    <tbody>

        <tr>
            <td>Adulte</td>
            <td>";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 139, $this->source); })()), "nbAdultes", [], "any", false, false, false, 139), "html", null, true);
        yield "</td>
            <td>";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 140, $this->source); })()), "prixAdulte", [], "any", false, false, false, 140), "html", null, true);
        yield " TND</td>
            <td>";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 141, $this->source); })()), "nbAdultes", [], "any", false, false, false, 141) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 141, $this->source); })()), "prixAdulte", [], "any", false, false, false, 141)), "html", null, true);
        yield " TND</td>
        </tr>

        <tr>
            <td>Enfant</td>
            <td>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 146, $this->source); })()), "nbEnfants", [], "any", false, false, false, 146), "html", null, true);
        yield "</td>
            <td>";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 147, $this->source); })()), "prixEnfant", [], "any", false, false, false, 147), "html", null, true);
        yield " TND</td>
            <td>";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 148, $this->source); })()), "nbEnfants", [], "any", false, false, false, 148) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 148, $this->source); })()), "prixEnfant", [], "any", false, false, false, 148)), "html", null, true);
        yield " TND</td>
        </tr>

        <tr>
            <td>Bébé</td>
            <td>";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 153, $this->source); })()), "nbBebes", [], "any", false, false, false, 153), "html", null, true);
        yield "</td>
            <td>
                ";
        // line 155
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 155, $this->source); })()), "prixBebe", [], "any", false, false, false, 155) > 0)) {
            // line 156
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 156, $this->source); })()), "prixBebe", [], "any", false, false, false, 156), "html", null, true);
            yield " TND
                ";
        } else {
            // line 158
            yield "                    Gratuit
                ";
        }
        // line 160
        yield "            </td>
            <td>
                ";
        // line 162
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 162, $this->source); })()), "prixBebe", [], "any", false, false, false, 162) > 0)) {
            // line 163
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 163, $this->source); })()), "nbBebes", [], "any", false, false, false, 163) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 163, $this->source); })()), "prixBebe", [], "any", false, false, false, 163)), "html", null, true);
            yield " TND
                ";
        } else {
            // line 165
            yield "                    0 TND
                ";
        }
        // line 167
        yield "            </td>
        </tr>

    </tbody>
</table>

<!-- 💰 TOTAL -->
<div class=\"total\">
    Total payé : ";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 175, $this->source); })()), "montantTotal", [], "any", false, false, false, 175), 2), "html", null, true);
        yield " TND
</div>

<!-- 🧾 FOOTER -->
<div class=\"footer\">
    Merci d’avoir choisi <strong>ASAFAR</strong> ✈️<br>
    Bon voyage !
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
        return "pdf/facture.html.twig";
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
        return array (  301 => 175,  291 => 167,  287 => 165,  281 => 163,  279 => 162,  275 => 160,  271 => 158,  265 => 156,  263 => 155,  258 => 153,  250 => 148,  246 => 147,  242 => 146,  234 => 141,  230 => 140,  226 => 139,  205 => 121,  201 => 120,  197 => 119,  190 => 114,  186 => 112,  181 => 110,  177 => 109,  170 => 108,  168 => 107,  160 => 102,  156 => 101,  152 => 100,  139 => 90,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 30px;
            color: #333;
        }

        .header {
            width: 100%;
            display: table;
        }

        .header-left {
            display: table-cell;
            vertical-align: middle;
        }

        .header-right {
            display: table-cell;
            text-align: right;
            vertical-align: middle;
        }

        .logo {
            width: 120px;
        }

        h1 {
            color: #0B2D4A;
            margin: 0;
        }

        .section {
            margin-top: 20px;
            padding: 12px;
            border-radius: 8px;
            background: #f5f7fa;
        }

        .section h3 {
            margin-bottom: 8px;
            color: #1E6FA8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th {
            background: #1E6FA8;
            color: white;
            padding: 8px;
        }

        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        .total {
            margin-top: 20px;
            text-align: right;
            font-size: 16px;
            font-weight: bold;
            color: #0B2D4A;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 11px;
            color: #888;
        }
    </style>
</head>

<body>

<!-- 🔵 HEADER -->
<div class=\"header\">
    <div class=\"header-left\">
<img src=\"data:image/png;base64,{{ logo }}\" class=\"logo\">
    </div>
    <div class=\"header-right\">
        <h1>FACTURE</h1>
    </div>
</div>

<!-- 📄 INFOS FACTURE -->
<div class=\"section\">
    <h3>Informations Facture</h3>
    <p><strong>N° :</strong> {{ reservation.idReservation }}</p>
    <p><strong>Date :</strong> {{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y') : '-' }}</p>
    <p><strong>Statut :</strong> {{ reservation.statut|default('N/A') }}</p>
</div>
<div class=\"section\">
    <h3>Client</h3>

    {% if user is defined and user %}
        <p><strong>Nom :</strong> {{ user.nom }} {{ user.prenom }}</p>
        <p><strong>Email :</strong> {{ user.email }}</p>
        <p><strong>Téléphone :</strong> {{ user.telephone }}</p>
    {% else %}
        <p>Informations client indisponibles</p>
    {% endif %}
</div>

<!-- 🧭 EXCURSION -->
<div class=\"section\">
    <h3>Excursion</h3>
    <p><strong>Titre :</strong> {{ excursion.titre|default('-') }}</p>
    <p><strong>Lieu :</strong> {{ excursion.lieu|default('-') }}</p>
<p><strong>Date :</strong> {{ excursion.date ? excursion.date|date('d/m/Y') : '-' }}</p>
</div>

<!-- 📊 DÉTAIL -->
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Total</th>
        </tr>
    </thead>

    <tbody>

        <tr>
            <td>Adulte</td>
            <td>{{ reservation.nbAdultes }}</td>
            <td>{{ excursion.prixAdulte }} TND</td>
            <td>{{ reservation.nbAdultes * excursion.prixAdulte }} TND</td>
        </tr>

        <tr>
            <td>Enfant</td>
            <td>{{ reservation.nbEnfants }}</td>
            <td>{{ excursion.prixEnfant }} TND</td>
            <td>{{ reservation.nbEnfants * excursion.prixEnfant }} TND</td>
        </tr>

        <tr>
            <td>Bébé</td>
            <td>{{ reservation.nbBebes }}</td>
            <td>
                {% if excursion.prixBebe > 0 %}
                    {{ excursion.prixBebe }} TND
                {% else %}
                    Gratuit
                {% endif %}
            </td>
            <td>
                {% if excursion.prixBebe > 0 %}
                    {{ reservation.nbBebes *excursion.prixBebe }} TND
                {% else %}
                    0 TND
                {% endif %}
            </td>
        </tr>

    </tbody>
</table>

<!-- 💰 TOTAL -->
<div class=\"total\">
    Total payé : {{ reservation.montantTotal|round(2) }} TND
</div>

<!-- 🧾 FOOTER -->
<div class=\"footer\">
    Merci d’avoir choisi <strong>ASAFAR</strong> ✈️<br>
    Bon voyage !
</div>

</body>
</html>", "pdf/facture.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\pdf\\facture.html.twig");
    }
}
