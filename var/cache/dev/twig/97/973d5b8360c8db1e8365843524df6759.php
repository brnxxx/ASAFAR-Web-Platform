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

/* components/StarRating.html.twig */
class __TwigTemplate_ec193da5ae8a49e7ccd9d0358c9974bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/StarRating.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/StarRating.html.twig"));

        // line 1
        yield "<div ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1, $this->source); })()), "html", null, true);
        yield ">
    <div style=\"display:flex; gap:4px; font-size:";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 2, $this->source); })()), 20)) : (20)), "html", null, true);
        yield "px; cursor:";
        yield (((($tmp = ((array_key_exists("interactive", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["interactive"]) || array_key_exists("interactive", $context) ? $context["interactive"] : (function () { throw new RuntimeError('Variable "interactive" does not exist.', 2, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("pointer") : ("default"));
        yield ";\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            yield "            <span class=\"";
            yield (((($tmp = ((array_key_exists("interactive", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["interactive"]) || array_key_exists("interactive", $context) ? $context["interactive"] : (function () { throw new RuntimeError('Variable "interactive" does not exist.', 4, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("star-interactive") : (""));
            yield "\"
                  data-value=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\"
                  style=\"color:";
            // line 6
            yield ((($context["i"] <= ((array_key_exists("rating", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 6, $this->source); })()), 0)) : (0)))) ? ("#FFC107") : ("rgba(255,255,255,0.2)"));
            yield "; transition:all 0.2s;\">
                ★
            </span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "    </div>
    ";
        // line 11
        if ((($tmp = ((array_key_exists("showValue", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["showValue"]) || array_key_exists("showValue", $context) ? $context["showValue"] : (function () { throw new RuntimeError('Variable "showValue" does not exist.', 11, $this->source); })()), true)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "        <small style=\"color:rgba(255,255,255,0.6);\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("rating", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 12, $this->source); })()), 0)) : (0)), "html", null, true);
            yield "/5 (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("nbNotes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["nbNotes"]) || array_key_exists("nbNotes", $context) ? $context["nbNotes"] : (function () { throw new RuntimeError('Variable "nbNotes" does not exist.', 12, $this->source); })()), 0)) : (0)), "html", null, true);
            yield " avis)</small>
    ";
        }
        // line 14
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/StarRating.html.twig";
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
        return array (  95 => 14,  87 => 12,  85 => 11,  82 => 10,  72 => 6,  68 => 5,  63 => 4,  59 => 3,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div {{ attributes }}>
    <div style=\"display:flex; gap:4px; font-size:{{ size|default(20) }}px; cursor:{{ interactive|default(false) ? 'pointer' : 'default' }};\">
        {% for i in 1..5 %}
            <span class=\"{{ interactive|default(false) ? 'star-interactive' : '' }}\"
                  data-value=\"{{ i }}\"
                  style=\"color:{{ i <= rating|default(0) ? '#FFC107' : 'rgba(255,255,255,0.2)' }}; transition:all 0.2s;\">
                ★
            </span>
        {% endfor %}
    </div>
    {% if showValue|default(true) %}
        <small style=\"color:rgba(255,255,255,0.6);\">{{ rating|default(0) }}/5 ({{ nbNotes|default(0) }} avis)</small>
    {% endif %}
</div>", "components/StarRating.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\components\\StarRating.html.twig");
    }
}
