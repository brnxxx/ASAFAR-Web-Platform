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

/* emails/facture_mail.html.twig */
class __TwigTemplate_8289982ba97c0930e802a5ec9f1e829a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/facture_mail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/facture_mail.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<body style=\"font-family: Arial;\">

<h2 style=\"color:#0B2D4A;\">Paiement confirmé ✅</h2>

<p>Bonjour ";
        // line 7
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", true, true, false, 7) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true)) : ("Client"));
        yield ",</p>

<p>
    Votre réservation a été confirmée avec succès.
</p>

<p>
    <strong>Réservation :</strong> #";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "idReservation", [], "any", false, false, false, 14), "html", null, true);
        yield " <br>
    <strong>Montant :</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 15, $this->source); })()), "montantTotal", [], "any", false, false, false, 15), "html", null, true);
        yield " TND
</p>

<p>
    <strong>Excursion :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), "html", null, true);
        yield " <br>
    <strong>Lieu :</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["excursion"]) || array_key_exists("excursion", $context) ? $context["excursion"] : (function () { throw new RuntimeError('Variable "excursion" does not exist.', 20, $this->source); })()), "lieu", [], "any", false, false, false, 20), "html", null, true);
        yield "
</p>

<hr>

<p style=\"color:gray;\">
    Merci pour votre confiance ✈️
</p>

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
        return "emails/facture_mail.html.twig";
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
        return array (  81 => 20,  77 => 19,  70 => 15,  66 => 14,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<body style=\"font-family: Arial;\">

<h2 style=\"color:#0B2D4A;\">Paiement confirmé ✅</h2>

<p>Bonjour {{ user.nom ?? 'Client' }},</p>

<p>
    Votre réservation a été confirmée avec succès.
</p>

<p>
    <strong>Réservation :</strong> #{{ reservation.idReservation }} <br>
    <strong>Montant :</strong> {{ reservation.montantTotal }} TND
</p>

<p>
    <strong>Excursion :</strong> {{ excursion.titre }} <br>
    <strong>Lieu :</strong> {{ excursion.lieu }}
</p>

<hr>

<p style=\"color:gray;\">
    Merci pour votre confiance ✈️
</p>

</body>
</html>", "emails/facture_mail.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\emails\\facture_mail.html.twig");
    }
}
