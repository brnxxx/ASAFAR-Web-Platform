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

/* admin/transports/form.html.twig */
class __TwigTemplate_507b3e3ff478960894a2dff460f6065d extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/transports/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/transports/form.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        yield " - Admin ASAFAR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 6
        yield "    <i class=\"fas fa-plane\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        yield "<div style=\"max-width: 900px; margin: 0 auto;\">
    <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px solid rgba(255, 193, 7, 0.15); border-radius: 16px; padding: 40px; overflow: hidden;\">

        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "transport-form", "novalidate" => "novalidate"]]);
        yield "

        <!-- Form Errors -->
        ";
        // line 16
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "errors", [], "any", false, false, false, 16)) > 0)) {
            // line 17
            yield "            <div style=\"background: rgba(239, 68, 68, 0.15); border: 1px solid rgba(239, 68, 68, 0.3); border-radius: 8px; padding: 15px; margin-bottom: 20px; color: #EF4444;\">
                <h4 style=\"margin: 0 0 10px 0; color: #EF4444;\">Erreurs du formulaire:</h4>
                ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'errors');
            yield "
            </div>
        ";
        }
        // line 22
        yield "
        <!-- Nom and Type Row -->
        <div class=\"form-row\">
            <div class=\"form-group\">
                <label for=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Nom du Transport
                    <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                    <span class=\"char-count\" style=\"float: right; color: rgba(255, 214, 79, 0.7); font-size: 12px; font-weight: 400;\">
                        <span id=\"nomCount\">0</span>/150
                    </span>
                </label>
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "placeholder" => "Ex: Paris-Lyon", "class" => "form-control field-input", "required" => "required", "minlength" => "3", "maxlength" => "150", "data-validation" => "nom"]]);
        yield "
                <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"nomError\"></div>
                <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                    <i class=\"fas fa-check-circle\"></i>
                    <span class=\"success-text\"></span>
                </div>
                ";
        // line 39
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)) > 0)) {
            // line 40
            yield "                    <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                        ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'errors');
            yield "
                    </div>
                ";
        }
        // line 44
        yield "            </div>

            <div class=\"form-group\">
                <label for=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "type", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Type de Transport
                    <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                </label>
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "class" => "form-control select-styled transport-type-select", "required" => "required", "data-validation" => "type"]]);
        yield "
                <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"typeError\"></div>
                <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                    <i class=\"fas fa-check-circle\"></i>
                </div>
                ";
        // line 56
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "type", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "errors", [], "any", false, false, false, 56)) > 0)) {
            // line 57
            yield "                    <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                        ";
            // line 58
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58), 'errors');
            yield "
                    </div>
                ";
        }
        // line 61
        yield "            </div>
        </div>

        <!-- Prix Row -->
        <div class=\"form-group\">
            <label for=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "prix", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Prix
                <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                <span class=\"currency-symbol\" style=\"float: right; color: #FFC107; font-size: 12px; font-weight: 600;\">€</span>
            </label>
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "prix", [], "any", false, false, false, 71), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "prix", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "type" => "number", "step" => "0.01", "min" => "0", "placeholder" => "0.00", "class" => "form-control field-input", "required" => "required", "data-validation" => "prix"]]);
        yield "
            <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"prixError\"></div>
            <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                <i class=\"fas fa-check-circle\"></i>
                <span class=\"success-text\"></span>
            </div>
            ";
        // line 77
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "prix", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "errors", [], "any", false, false, false, 77)) > 0)) {
            // line 78
            yield "                <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                    ";
            // line 79
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "prix", [], "any", false, false, false, 79), 'errors');
            yield "
                </div>
            ";
        }
        // line 82
        yield "        </div>

        <!-- Description -->
        <div class=\"form-group\">
            <label for=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "description", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Description
                <span class=\"char-count\" style=\"float: right; color: rgba(255, 214, 79, 0.7); font-size: 12px; font-weight: 400;\">
                    <span id=\"descCount\">0</span>/500 caractères
                </span>
            </label>
            <small style=\"display: block; color: rgba(255, 214, 79, 0.6); font-size: 11px; margin-bottom: 8px;\">
                <i class=\"fas fa-lightbulb\"></i> Conseil: Mentionnez les villes de départ et destination pour auto-remplissage automatique
            </small>
            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "description", [], "any", false, false, false, 95), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "description", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95), "rows" => 4, "placeholder" => "Ex: Paris vers Lyon, départ 14h...", "class" => "form-control field-input", "maxlength" => "500", "data-validation" => "description"]]);
        yield "
            <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"descriptionError\"></div>
            <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                <i class=\"fas fa-check-circle\"></i>
            </div>
            ";
        // line 100
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "description", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "errors", [], "any", false, false, false, 100)) > 0)) {
            // line 101
            yield "                <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                    ";
            // line 102
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "description", [], "any", false, false, false, 102), 'errors');
            yield "
                </div>
            ";
        }
        // line 105
        yield "        </div>

        <!-- Separator -->
        <div style=\"border-top: 2px solid rgba(255, 193, 7, 0.15); margin: 30px 0;\"></div>

        <!-- Aéroports Section (AVION) -->
        <div id=\"avion-airports\" class=\"airports-section\" style=\"display: none;\">
            <p style=\"color: var(--accent-amber); font-size: 14px; font-weight: 600; margin-bottom: 20px; letter-spacing: 0.5px; text-transform: uppercase;\">
                <i class=\"fas fa-plane\"></i> Aéroports
            </p>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    <label for=\"airport-depart-display\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                        Aéroport de Départ
                        <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                    </label>
                    <select id=\"airport-depart-display\" name=\"display_aeroport_depart\" class=\"form-control select-styled airport-select\" data-validation=\"aeroportDepart\" style=\"display: block;\">
                        <option value=\"\">Sélectionnez un aéroport...</option>
                        ";
        // line 124
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 124, $this->source); })()), "aeroportDepart", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 125, $this->source); })()), "aeroportDepart", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125), "html", null, true);
            yield "\" selected>
                                ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 126, $this->source); })()), "aeroportDepart", [], "any", false, false, false, 126), "nom", [], "any", false, false, false, 126), "html", null, true);
            yield " (";
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 126, $this->source); })()), "aeroportDepart", [], "any", false, false, false, 126), "codeIata", [], "any", false, false, false, 126)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 126, $this->source); })()), "aeroportDepart", [], "any", false, false, false, 126), "codeIata", [], "any", false, false, false, 126), "html", null, true)) : ("N/A"));
            yield ")
                            </option>
                        ";
        }
        // line 129
        yield "                    </select>
                    <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"aeroportDepartError\"></div>
                    <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                        <i class=\"fas fa-check-circle\"></i>
                    </div>
                    ";
        // line 134
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "aeroportDepart", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "errors", [], "any", false, false, false, 134)) > 0)) {
            // line 135
            yield "                        <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                            ";
            // line 136
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "aeroportDepart", [], "any", false, false, false, 136), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 139
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"airport-destination-display\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                        Aéroport de Destination
                        <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                    </label>
                    <select id=\"airport-destination-display\" name=\"display_aeroport_destination\" class=\"form-control select-styled airport-select\" data-validation=\"aeroportDestination\" style=\"display: block;\">
                        <option value=\"\">Sélectionnez un aéroport...</option>
                        ";
        // line 148
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 148, $this->source); })()), "aeroportDestination", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 149
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 149, $this->source); })()), "aeroportDestination", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149), "html", null, true);
            yield "\" selected>
                                ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 150, $this->source); })()), "aeroportDestination", [], "any", false, false, false, 150), "nom", [], "any", false, false, false, 150), "html", null, true);
            yield " (";
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 150, $this->source); })()), "aeroportDestination", [], "any", false, false, false, 150), "codeIata", [], "any", false, false, false, 150)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 150, $this->source); })()), "aeroportDestination", [], "any", false, false, false, 150), "codeIata", [], "any", false, false, false, 150), "html", null, true)) : ("N/A"));
            yield ")
                            </option>
                        ";
        }
        // line 153
        yield "                    </select>
                    <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"aeroportDestinationError\"></div>
                    <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                        <i class=\"fas fa-check-circle\"></i>
                    </div>
                    <div id=\"samAirportWarning\" style=\"display: none; color: #FBBF24; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        <span>Les aéroports de départ et destination doivent être différents</span>
                    </div>
                    ";
        // line 162
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "aeroportDestination", [], "any", false, false, false, 162), "vars", [], "any", false, false, false, 162), "errors", [], "any", false, false, false, 162)) > 0)) {
            // line 163
            yield "                        <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                            ";
            // line 164
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "aeroportDestination", [], "any", false, false, false, 164), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 167
        yield "                </div>
            </div>
        </div>

        <!-- Location Section (VOITURE) -->
        <div id=\"voiture-location\" class=\"airports-section\" style=\"display: none;\">
            <p style=\"color: var(--accent-amber); font-size: 14px; font-weight: 600; margin-bottom: 20px; letter-spacing: 0.5px; text-transform: uppercase;\">
                <i class=\"fas fa-map-marker-alt\"></i> Point de Prise en Charge
            </p>

            <div class=\"form-group\">
                <label for=\"airport-pickup-display\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Point de Prise en Charge
                    <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                </label>
                <select id=\"airport-pickup-display\" name=\"display_aeroport_prise_en_charge\" class=\"form-control select-styled airport-select\" data-validation=\"aeroportPriseEnCharge\" style=\"display: block;\">
                    <option value=\"\">Sélectionnez un point...</option>
                    ";
        // line 184
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 184, $this->source); })()), "aeroportPriseEnCharge", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 185
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 185, $this->source); })()), "aeroportPriseEnCharge", [], "any", false, false, false, 185), "id", [], "any", false, false, false, 185), "html", null, true);
            yield "\" selected>
                            ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 186, $this->source); })()), "aeroportPriseEnCharge", [], "any", false, false, false, 186), "nom", [], "any", false, false, false, 186), "html", null, true);
            yield " (";
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 186, $this->source); })()), "aeroportPriseEnCharge", [], "any", false, false, false, 186), "codeIata", [], "any", false, false, false, 186)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 186, $this->source); })()), "aeroportPriseEnCharge", [], "any", false, false, false, 186), "codeIata", [], "any", false, false, false, 186), "html", null, true)) : ("N/A"));
            yield ")
                        </option>
                    ";
        }
        // line 189
        yield "                </select>
                <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"aeroportPriseEnChargeError\"></div>
                <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                    <i class=\"fas fa-check-circle\"></i>
                </div>
                ";
        // line 194
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "aeroportPriseEnCharge", [], "any", false, false, false, 194), "vars", [], "any", false, false, false, 194), "errors", [], "any", false, false, false, 194)) > 0)) {
            // line 195
            yield "                    <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                        ";
            // line 196
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "aeroportPriseEnCharge", [], "any", false, false, false, 196), 'errors');
            yield "
                    </div>
                ";
        }
        // line 199
        yield "            </div>
        </div>

        <div style=\"display: none;\">
            ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "aeroportDepart", [], "any", false, false, false, 203), 'widget');
        yield "
            ";
        // line 204
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "aeroportDestination", [], "any", false, false, false, 204), 'widget');
        yield "
            ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "aeroportPriseEnCharge", [], "any", false, false, false, 205), 'widget');
        yield "
        </div>

        <!-- Form Actions -->
        <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 20px; border-top: 2px solid rgba(255, 193, 7, 0.15);\">
            <button type=\"submit\" class=\"btn-submit\">
                <i class=\"fas fa-save\"></i>
                <span>";
        // line 212
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 212, $this->source); })()), "idTransport", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Mettre à Jour";
        } else {
            yield "Créer";
        }
        yield "</span>
            </button>

            <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transports");
        yield "\" class=\"btn-cancel\">
                <i class=\"fas fa-times\"></i>
                <span>Annuler</span>
            </a>
        </div>

        ";
        // line 221
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<style>
    .form-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .form-group {
        margin-bottom: 24px;
    }

    .form-control,
    input[type=\"text\"],
    input[type=\"number\"],
    select,
    textarea {
        width: 100%;
        padding: 12px 16px;
        background: rgba(255, 255, 255, 0.05);
        border: 2px solid rgba(255, 193, 7, 0.15);
        border-radius: 8px;
        color: var(--text-primary);
        font-family: 'Inter', sans-serif;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        font-size: 14px;
        font-weight: 500;
    }

    /* Validation success state */
    .field-input.is-valid {
        border-color: #34D399;
        background: rgba(52, 211, 153, 0.05);
    }

    .field-input.is-valid:focus {
        border-color: #34D399;
        box-shadow: 0 0 15px rgba(52, 211, 153, 0.15);
    }

    /* Validation error state */
    .field-input.is-invalid {
        border-color: #EF4444;
        background: rgba(239, 68, 68, 0.05);
    }

    .field-input.is-invalid:focus {
        border-color: #EF4444;
        box-shadow: 0 0 15px rgba(239, 68, 68, 0.15);
    }

    .validation-success {
        display: flex !important;
    }

    .validation-message {
        display: block !important;
    }

    select.select-styled {
        appearance: none;
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23FFC107' stroke-width='2'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 20px;
        padding-right: 40px;
        background-clip: padding-box;
    }

    select.select-styled option {
        background: #0B2D4A;
        color: #F4F8FC;
        padding: 10px;
    }

    /* Validation states for selects */
    select.select-styled.is-valid {
        border-color: #34D399;
        background-color: rgba(52, 211, 153, 0.05);
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2334D399' stroke-width='2'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 20px;
    }

    select.select-styled.is-valid:focus {
        border-color: #34D399;
        background-color: rgba(52, 211, 153, 0.08);
        box-shadow: 0 0 15px rgba(52, 211, 153, 0.15);
    }

    select.select-styled.is-invalid {
        border-color: #EF4444;
        background-color: rgba(239, 68, 68, 0.05);
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23EF4444' stroke-width='2'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 20px;
    }

    select.select-styled.is-invalid:focus {
        border-color: #EF4444;
        background-color: rgba(239, 68, 68, 0.08);
        box-shadow: 0 0 15px rgba(239, 68, 68, 0.15);
    }

    input:focus, textarea:focus {
        outline: none !important;
        background: rgba(255, 255, 255, 0.08);
        border-color: #FFC107;
        box-shadow: 0 0 15px rgba(255, 193, 7, 0.2);
    }

    select:focus:not(.is-valid):not(.is-invalid) {
        outline: none !important;
        background: rgba(255, 255, 255, 0.08);
        border-color: #FFC107;
        box-shadow: 0 0 15px rgba(255, 193, 7, 0.2);
    }

    /* Validation messages with smooth animations */
    .validation-message {
        animation: slideInError 0.25s ease-out;
        font-weight: 500;
    }

    .validation-success {
        animation: slideInSuccess 0.25s ease-out;
        font-weight: 500;
    }

    @keyframes slideInError {
        from {
            opacity: 0;
            transform: translateY(-8px);
            color: transparent;
        }
        to {
            opacity: 1;
            transform: translateY(0);
            color: #EF4444;
        }
    }

    @keyframes slideInSuccess {
        from {
            opacity: 0;
            transform: translateY(-8px);
            color: transparent;
        }
        to {
            opacity: 1;
            transform: translateY(0);
            color: #34D399;
        }
    }

    .airports-section {
        animation: slideInDown 0.3s ease-out;
    }

    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .detection-loader {
        display: none;
        margin-top: 8px;
        padding: 8px 12px;
        background: rgba(255, 193, 7, 0.1);
        border: 1px solid rgba(255, 193, 7, 0.3);
        border-radius: 6px;
        color: #FFC107;
        font-size: 12px;
        font-weight: 500;
        animation: fadeIn 0.3s ease;
    }

    .detection-loader i {
        margin-right: 6px;
    }

    .detection-success {
        display: none;
        margin-top: 8px;
        padding: 8px 12px;
        background: rgba(52, 211, 153, 0.1);
        border: 1px solid rgba(52, 211, 153, 0.3);
        border-radius: 6px;
        color: #34D399;
        font-size: 12px;
        font-weight: 500;
        animation: fadeIn 0.3s ease;
    }

    .detection-success i {
        margin-right: 6px;
    }

    .detection-error {
        display: none;
        margin-top: 8px;
        padding: 8px 12px;
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.3);
        border-radius: 6px;
        color: #EF4444;
        font-size: 12px;
        font-weight: 500;
        animation: fadeIn 0.3s ease;
    }

    .detection-error i {
        margin-right: 6px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-4px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn-submit {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
        color: #0B2D4A;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        font-size: 14px;
        box-shadow: 0 4px 12px rgba(255, 193, 7, 0.25);
    }

    .btn-submit:hover:not(:disabled) {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(255, 193, 7, 0.4);
    }

    .btn-submit:active:not(:disabled) {
        transform: translateY(-1px);
    }

    .btn-submit:disabled {
        opacity: 0.45;
        cursor: not-allowed;
        box-shadow: 0 2px 6px rgba(255, 193, 7, 0.1);
    }

    .btn-cancel {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: rgba(255, 193, 7, 0.1);
        color: #FFC107;
        border: 2px solid #FFC107;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-cancel:hover {
        background: #FFC107;
        color: #0B2D4A;
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    let filterDebounceTimer;
    let fieldStatusMap = {};
    let isDetectingAirports = false;
    let lastDetectionDescription = '';
    let airportChoicesLoaded = false;
    let airportChoices = [];
    const hiddenAirportFieldIds = {
        aeroportDepart: '";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 525, $this->source); })()), "aeroportDepart", [], "any", false, false, false, 525), "vars", [], "any", false, false, false, 525), "id", [], "any", false, false, false, 525), "html", null, true);
        yield "',
        aeroportDestination: '";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 526, $this->source); })()), "aeroportDestination", [], "any", false, false, false, 526), "vars", [], "any", false, false, false, 526), "id", [], "any", false, false, false, 526), "html", null, true);
        yield "',
        aeroportPriseEnCharge: '";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 527, $this->source); })()), "aeroportPriseEnCharge", [], "any", false, false, false, 527), "vars", [], "any", false, false, false, 527), "id", [], "any", false, false, false, 527), "html", null, true);
        yield "',
    };

    const validationRules = {
        nom: {
            required: true,
            minlength: 3,
            maxlength: 150,
            messages: {
                required: 'Nom requis',
                minlength: 'Min. 3 caractères',
                maxlength: 'Max. 150 caractères',
                valid: 'Nom valide ✓'
            }
        },
        type: {
            required: true,
            messages: {
                required: 'Sélectionnez un type',
                valid: 'Type sélectionné ✓'
            }
        },
        prix: {
            required: true,
            validate: (value) => {
                const num = parseFloat(value);
                return !isNaN(num) && num >= 0;
            },
            messages: {
                required: 'Prix requis',
                validate: 'Nombre positif requis',
                valid: 'Prix valide ✓'
            }
        },
        description: {
            maxlength: 500,
            messages: {
                maxlength: 'Max. 500 caractères',
                valid: 'Description valide ✓'
            }
        },
        aeroportDepart: {
            required: true,
            messages: {
                required: 'Sélectionnez un aéroport',
                valid: 'Aéroport sélectionné ✓'
            }
        },
        aeroportDestination: {
            required: true,
            messages: {
                required: 'Sélectionnez un aéroport',
                valid: 'Aéroport sélectionné ✓'
            }
        },
        aeroportPriseEnCharge: {
            required: true,
            messages: {
                required: 'Sélectionnez un point',
                valid: 'Point sélectionné ✓'
            }
        }
    };

    function validateField(fieldName, value) {
        const rule = validationRules[fieldName];
        if (!rule) return { isValid: true };

        // Check required - handle both string and numeric values
        if (rule.required) {
            const isEmpty = value === null ||
                           value === undefined ||
                           value === '' ||
                           (typeof value === 'string' && value.trim() === '');

            if (isEmpty) {
                return { isValid: false, message: rule.messages.required };
            }
        }

        if (rule.minlength && value && value.length < rule.minlength) {
            return { isValid: false, message: rule.messages.minlength };
        }

        if (rule.maxlength && value && value.length > rule.maxlength) {
            return { isValid: false, message: rule.messages.maxlength };
        }

        if (rule.validate && !rule.validate(value)) {
            return { isValid: false, message: rule.messages.validate };
        }

        return { isValid: true, message: rule.messages.valid };
    }

    function updateFieldDisplay(fieldName, isValid, message = '') {
        const fieldElement = document.querySelector(`[data-validation=\"\${fieldName}\"]`);
        if (!fieldElement) return;

        const errorElement = document.getElementById(`\${fieldName}Error`);
        const successElement = fieldElement.parentElement.querySelector('.validation-success');

        fieldStatusMap[fieldName] = isValid;

        if (isValid) {
            fieldElement.classList.remove('is-invalid');
            fieldElement.classList.add('is-valid');
            if (errorElement) {
                errorElement.textContent = '';
                errorElement.style.display = 'none';
            }
            if (successElement) {
                successElement.style.display = 'flex';
            }
        } else {
            fieldElement.classList.remove('is-valid');
            fieldElement.classList.add('is-invalid');
            if (errorElement) {
                errorElement.textContent = message;
                errorElement.style.display = 'block';
            }
            if (successElement) {
                successElement.style.display = 'none';
            }
        }

        updateSubmitButton();
    }

    function updateCharCount(inputId, countId) {
        const input = document.getElementById(inputId);
        const countElement = document.getElementById(countId);
        if (input && countElement) {
            countElement.textContent = input.value.length;
        }
    }

    function validateForm() {
        let isFormValid = true;
        const typeSelect = document.querySelector('.transport-type-select');
        const selectedType = typeSelect?.value?.toUpperCase() || '';

        // Validate basic fields
        ['nom', 'type', 'prix'].forEach(fieldName => {
            const field = document.querySelector(`[data-validation=\"\${fieldName}\"]`);
            if (field) {
                const validation = validateField(fieldName, field.value);
                updateFieldDisplay(fieldName, validation.isValid, validation.message);
                if (!validation.isValid) isFormValid = false;
            }
        });

        // Validate type-specific fields
        if (selectedType === 'AVION') {
            const departSelect = document.querySelector('[data-validation=\"aeroportDepart\"]');
            const destSelect = document.querySelector('[data-validation=\"aeroportDestination\"]');

            if (departSelect) {
                const validation = validateField('aeroportDepart', departSelect.value);
                updateFieldDisplay('aeroportDepart', validation.isValid, validation.message);
                if (!validation.isValid) isFormValid = false;
            }

            if (destSelect) {
                const validation = validateField('aeroportDestination', destSelect.value);
                const isSameAirport = departSelect?.value && destSelect?.value && departSelect.value === destSelect.value;
                const isValid = validation.isValid && !isSameAirport;
                const message = isSameAirport ? 'Aéroports différents requis' : validation.message;
                updateFieldDisplay('aeroportDestination', isValid, message);

                const samAirportWarning = document.getElementById('samAirportWarning');
                if (samAirportWarning) {
                    samAirportWarning.style.display = isSameAirport ? 'flex' : 'none';
                }

                if (!isValid) isFormValid = false;
            }
        } else if (selectedType === 'VOITURE') {
            const pickupSelect = document.querySelector('[data-validation=\"aeroportPriseEnCharge\"]');
            if (pickupSelect) {
                const validation = validateField('aeroportPriseEnCharge', pickupSelect.value);
                updateFieldDisplay('aeroportPriseEnCharge', validation.isValid, validation.message);
                if (!validation.isValid) isFormValid = false;
            }
        }

        return isFormValid;
    }

    function updateSubmitButton() {
        const typeSelect = document.querySelector('.transport-type-select');
        const selectedType = typeSelect?.value?.toUpperCase() || '';
        const submitBtn = document.querySelector('.btn-submit');
        if (!submitBtn) return;

        let requiredFields = ['nom', 'type', 'prix'];
        if (selectedType === 'AVION') {
            requiredFields = ['nom', 'type', 'prix', 'aeroportDepart', 'aeroportDestination'];
        } else if (selectedType === 'VOITURE') {
            requiredFields = ['nom', 'type', 'prix', 'aeroportPriseEnCharge'];
        }

        const allValid = requiredFields.every(field => fieldStatusMap[field] === true);
        submitBtn.disabled = !allValid;
    }

    async function loadAirportChoices(force = false) {
        if (airportChoicesLoaded && !force) {
            return;
        }

        try {
            const response = await fetch('/api/airports/choices?limit=3000', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                },
            });

            if (!response.ok) {
                return;
            }

            const data = await response.json();
            if (!data.success || !Array.isArray(data.airports)) {
                return;
            }

            airportChoices = data.airports;
            airportChoicesLoaded = true;
            hydrateAirportSelects();
        } catch (error) {
            console.warn('Unable to load airport choices:', error);
        }
    }

    function hydrateSingleAirportSelect(selectId, fieldName, placeholderText) {
        const select = document.getElementById(selectId);
        if (!select) {
            return;
        }

        const hiddenField = getAirportHiddenField(fieldName);
        const currentValue = select.value || hiddenField?.value || '';

        select.innerHTML = '';

        const placeholder = document.createElement('option');
        placeholder.value = '';
        placeholder.textContent = placeholderText;
        select.appendChild(placeholder);

        airportChoices.forEach((airport) => {
            const option = document.createElement('option');
            option.value = String(airport.id ?? '');
            option.textContent = `\${airport.nom ?? 'N/A'} (\${airport.codeIata || 'N/A'})`;
            if (currentValue && option.value === String(currentValue)) {
                option.selected = true;
            }
            select.appendChild(option);
        });

        if (currentValue) {
            select.value = String(currentValue);
            syncAirportHiddenField(fieldName, String(currentValue));
        }
    }

    function hydrateAirportSelects() {
        hydrateSingleAirportSelect('airport-depart-display', 'aeroportDepart', 'Sélectionnez un aéroport...');
        hydrateSingleAirportSelect('airport-destination-display', 'aeroportDestination', 'Sélectionnez un aéroport...');
        hydrateSingleAirportSelect('airport-pickup-display', 'aeroportPriseEnCharge', 'Sélectionnez un point...');
    }

    function getAirportHiddenField(fieldName) {
        const hiddenId = hiddenAirportFieldIds[fieldName];
        if (hiddenId) {
            const byId = document.getElementById(hiddenId);
            if (byId) {
                return byId;
            }
        }

        return document.querySelector(`input[name\$=\"[\${fieldName}]\"]`);
    }

    function syncAirportHiddenField(fieldName, value) {
        const hiddenField = getAirportHiddenField(fieldName);
        if (hiddenField) {
            hiddenField.value = value || '';
        }
    }

    function setupFieldListeners() {
        // Nom field
        const nomInput = document.querySelector('input[data-validation=\"nom\"]');
        if (nomInput) {
            nomInput.addEventListener('input', function() {
                updateCharCount(this.id, 'nomCount');
                const validation = validateField('nom', this.value);
                updateFieldDisplay('nom', validation.isValid, validation.message);
                updateSubmitButton();
            });

            nomInput.addEventListener('blur', function() {
                const validation = validateField('nom', this.value);
                updateFieldDisplay('nom', validation.isValid, validation.message);
            });
        }

        // Prix field
        const prixInput = document.querySelector('input[data-validation=\"prix\"]');
        if (prixInput) {
            prixInput.addEventListener('keypress', function(e) {
                if (!/[0-9.]/.test(e.key) && e.key !== 'Backspace' && e.key !== 'Delete') {
                    e.preventDefault();
                }
            });

            prixInput.addEventListener('input', function() {
                const validation = validateField('prix', this.value);
                updateFieldDisplay('prix', validation.isValid, validation.message);
                updateSubmitButton();
            });

            prixInput.addEventListener('blur', function() {
                const validation = validateField('prix', this.value);
                updateFieldDisplay('prix', validation.isValid, validation.message);
            });
        }

        // Description field
        const descInput = document.querySelector('textarea[data-validation=\"description\"]');
        if (descInput) {
            descInput.addEventListener('input', function() {
                updateCharCount(this.id, 'descCount');
                const validation = validateField('description', this.value);
                updateFieldDisplay('description', validation.isValid, validation.message);
                updateSubmitButton();
            });

            descInput.addEventListener('blur', function() {
                const validation = validateField('description', this.value);
                updateFieldDisplay('description', validation.isValid, validation.message);
            });
        }

        // Type select
        const typeSelect = document.querySelector('.transport-type-select');
        if (typeSelect) {
            typeSelect.addEventListener('change', function() {
                const validation = validateField('type', this.value);
                updateFieldDisplay('type', validation.isValid, validation.message);
                updateAirportFields();
                const typeSpecificFields = ['aeroportDepart', 'aeroportDestination', 'aeroportPriseEnCharge'];
                typeSpecificFields.forEach(field => {
                    const errorElement = document.getElementById(`\${field}Error`);
                    if (errorElement) {
                        errorElement.style.display = 'none';
                    }
                    fieldStatusMap[field] = false;
                });
                setTimeout(() => {
                    validateForm();
                    updateSubmitButton();
                }, 100);
            });
        }

        // Airport display selects: sync to hidden Symfony form fields
        const airportSelects = document.querySelectorAll('.airport-select');
        airportSelects.forEach(select => {
            select.addEventListener('change', function() {
                const fieldName = this.getAttribute('data-validation');
                if (fieldName) {
                    syncAirportHiddenField(fieldName, this.value);
                    const validation = validateField(fieldName, this.value);
                    updateFieldDisplay(fieldName, validation.isValid, validation.message);

                    if (fieldName === 'aeroportDepart') {
                        const destSelect = document.querySelector('[data-validation=\"aeroportDestination\"]');
                        if (destSelect && destSelect.value) {
                            validateForm();
                        }
                    }
                    if (fieldName === 'aeroportDestination') {
                        const departSelect = document.querySelector('[data-validation=\"aeroportDepart\"]');
                        if (departSelect && departSelect.value) {
                            validateForm();
                        }
                    }

                    updateSubmitButton();
                }
            });
        });

        // Form submit
        const form = document.querySelector('.transport-form');
        if (form) {
            form.addEventListener('submit', function(e) {
                const isValid = validateForm();
                if (!isValid) {
                    e.preventDefault();
                    const firstError = document.querySelector('.is-invalid');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    return false;
                }
            });
        }
    }

    function updateAirportFields() {
        const typeSelect = document.querySelector('.transport-type-select');
        const selectedType = typeSelect?.value?.toUpperCase() || '';

        const avionSection = document.getElementById('avion-airports');
        const voitureSection = document.getElementById('voiture-location');

        if (selectedType === 'AVION') {
            avionSection.style.display = 'block';
            voitureSection.style.display = 'none';
            loadAirportChoices();
            const pickupSelect = document.querySelector('[data-validation=\"aeroportPriseEnCharge\"]');
            if (pickupSelect) {
                pickupSelect.value = '';
            }
            syncAirportHiddenField('aeroportPriseEnCharge', '');
        } else if (selectedType === 'VOITURE') {
            avionSection.style.display = 'none';
            voitureSection.style.display = 'block';
            loadAirportChoices();
            const departSelect = document.querySelector('[data-validation=\"aeroportDepart\"]');
            const destinationSelect = document.querySelector('[data-validation=\"aeroportDestination\"]');
            if (departSelect) {
                departSelect.value = '';
            }
            if (destinationSelect) {
                destinationSelect.value = '';
            }
            syncAirportHiddenField('aeroportDepart', '');
            syncAirportHiddenField('aeroportDestination', '');
        } else {
            avionSection.style.display = 'none';
            voitureSection.style.display = 'none';
            const departSelect = document.querySelector('[data-validation=\"aeroportDepart\"]');
            const destinationSelect = document.querySelector('[data-validation=\"aeroportDestination\"]');
            const pickupSelect = document.querySelector('[data-validation=\"aeroportPriseEnCharge\"]');
            if (departSelect) {
                departSelect.value = '';
            }
            if (destinationSelect) {
                destinationSelect.value = '';
            }
            if (pickupSelect) {
                pickupSelect.value = '';
            }
            syncAirportHiddenField('aeroportDepart', '');
            syncAirportHiddenField('aeroportDestination', '');
            syncAirportHiddenField('aeroportPriseEnCharge', '');
        }
    }

    let descriptionDebounceTimer;

    async function smartDetectCitiesFromDescription() {
        const descInput = document.querySelector('textarea[data-validation=\"description\"]');
        const typeSelect = document.querySelector('.transport-type-select');
        const description = descInput?.value || '';
        const type = typeSelect?.value || '';

        // Basic validation
        if (!description.trim() || type.toUpperCase() !== 'AVION') {
            hideDetectionLoading();
            return;
        }

        // Prevent duplicate requests for same description
        if (lastDetectionDescription === description.trim()) {
            return;
        }

        // Prevent multiple simultaneous requests
        if (isDetectingAirports) {
            return;
        }

        isDetectingAirports = true;
        lastDetectionDescription = description.trim();

        // Show loading state
        showDetectionLoading();

        try {
            const response = await fetch('/api/detect-airports', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    description: description
                }),
                signal: AbortSignal.timeout(5000) // 5 second timeout
            });

            if (!response.ok) {
                const errorData = await response.json().catch(() => ({}));
                const errorMsg = errorData.message || 'Detection failed. Try format: \"Paris to Lyon\"';
                showDetectionError(errorMsg);
                isDetectingAirports = false;
                hideDetectionLoading();
                return;
            }

            const data = await response.json();

            if (!data.success || !data.airports || !data.cities) {
                const errorMsg = data.message || 'No matching cities found';
                showDetectionError(errorMsg);
                isDetectingAirports = false;
                hideDetectionLoading();
                return;
            }

            const departureCity = data.cities.departure;
            const destinationCity = data.cities.destination;

            // Validate cities
            if (!departureCity || !destinationCity) {
                showDetectionError('Invalid city data received');
                isDetectingAirports = false;
                hideDetectionLoading();
                return;
            }

            // Get display selects
            const departSelect = document.getElementById('airport-depart-display');
            const destSelect = document.getElementById('airport-destination-display');

            // Validate selects exist
            if (!departSelect || !destSelect) {
                console.warn('Airport selects not found');
                isDetectingAirports = false;
                hideDetectionLoading();
                return;
            }

            let departureUpdated = false;
            let destinationUpdated = false;

            // Update departure airports
            if (data.airports[departureCity] && data.airports[departureCity].length > 0) {
                departureUpdated = populateAirportSelect(departSelect, data.airports[departureCity], departureCity);
            }

            // Update destination airports
            if (data.airports[destinationCity] && data.airports[destinationCity].length > 0) {
                destinationUpdated = populateAirportSelect(destSelect, data.airports[destinationCity], destinationCity);
            }

            // Show success and re-validate the form
            if (departureUpdated && destinationUpdated) {
                showDetectionSuccess(departureCity, destinationCity);
                // Re-validate both airports and departments
                validateForm();
                // Update submit button with current field statuses
                updateSubmitButton();
            } else {
                showDetectionError('Could not populate airport fields');
            }

        } catch (error) {
            if (error.name === 'AbortError') {
                showDetectionError('Request timeout. Please try again.');
            } else {
                console.error('Detection error:', error);
                showDetectionError('Error detecting airports. Please try again.');
            }
        } finally {
            isDetectingAirports = false;
            hideDetectionLoading();
        }
    }

    function showDetectionLoading() {
        const desc = document.querySelector('textarea[data-validation=\"description\"]');
        if (desc && desc.parentElement) {
            let loader = desc.parentElement.querySelector('.detection-loader');
            if (!loader) {
                loader = document.createElement('div');
                loader.className = 'detection-loader';
                desc.parentElement.appendChild(loader);
            }
            loader.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Détection en cours...';
            loader.style.display = 'block';
        }
    }

    function hideDetectionLoading() {
        const loader = document.querySelector('.detection-loader');
        if (loader) {
            loader.style.display = 'none';
        }
    }

    function showDetectionSuccess(departureCity, destinationCity) {
        const desc = document.querySelector('textarea[data-validation=\"description\"]');
        if (desc && desc.parentElement) {
            clearDetectionFeedback();
            let success = document.createElement('div');
            success.className = 'detection-success';
            success.innerHTML = `<i class=\"fas fa-check-circle\"></i> Détecté: <strong>\${departureCity}</strong> → <strong>\${destinationCity}</strong>`;
            desc.parentElement.appendChild(success);
            success.style.display = 'block';
            setTimeout(() => {
                if (success.parentElement) {
                    success.remove();
                }
            }, 4000);
        }
    }

    function showDetectionError(message) {
        const desc = document.querySelector('textarea[data-validation=\"description\"]');
        if (desc && desc.parentElement) {
            clearDetectionFeedback();
            let error = document.createElement('div');
            error.className = 'detection-error';
            error.innerHTML = `<i class=\"fas fa-exclamation-circle\"></i> \${message}`;
            desc.parentElement.appendChild(error);
            error.style.display = 'block';
        }
    }

    function clearDetectionFeedback() {
        const desc = document.querySelector('textarea[data-validation=\"description\"]');
        if (desc && desc.parentElement) {
            const existing = desc.parentElement.querySelector('.detection-success, .detection-error');
            if (existing) {
                existing.remove();
            }
        }
    }

    function populateAirportSelect(selectElement, airportList, cityName) {
        if (!selectElement || !airportList || !Array.isArray(airportList) || airportList.length === 0) {
            console.warn('Invalid airport data for city:', cityName);
            return false;
        }

        try {
            selectElement.innerHTML = '';

            // Add placeholder option
            const placeholderOption = document.createElement('option');
            placeholderOption.value = '';
            placeholderOption.textContent = 'Sélectionnez un aéroport...';
            placeholderOption.disabled = true;
            selectElement.appendChild(placeholderOption);

            // Add airport options
            let firstOptionValue = null;
            airportList.forEach((airport) => {
                if (airport && airport.id !== null && airport.id !== undefined && airport.nom) {
                    const option = document.createElement('option');
                    option.value = airport.id;
                    option.textContent = `\${airport.nom} (\${airport.codeIata || 'N/A'})`;
                    selectElement.appendChild(option);

                    if (firstOptionValue === null) {
                        firstOptionValue = airport.id;
                    }
                }
            });

            // Auto-select first airport
            if (firstOptionValue !== null) {
                selectElement.value = firstOptionValue;
                const fieldName = selectElement.getAttribute('data-validation');

                if (fieldName) {
                    syncAirportHiddenField(fieldName, firstOptionValue);

                    const validation = validateField(fieldName, firstOptionValue);
                    updateFieldDisplay(fieldName, validation.isValid, validation.message);
                }

                selectElement.dispatchEvent(new Event('change', { bubbles: true }));
                return true;
            }

        } catch (error) {
            console.error('Error populating airport select:', error);
        }
        return false;
    }

    document.addEventListener('DOMContentLoaded', function() {
        loadAirportChoices();
        updateAirportFields();
        setupFieldListeners();

        ['aeroportDepart', 'aeroportDestination', 'aeroportPriseEnCharge'].forEach(fieldName => {
            const displayField = document.querySelector(`[data-validation=\"\${fieldName}\"]`);
            if (displayField) {
                syncAirportHiddenField(fieldName, displayField.value);
            }
        });

        validateForm();

        updateCharCount('";
        // line 1240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1240, $this->source); })()), "nom", [], "any", false, false, false, 1240), "vars", [], "any", false, false, false, 1240), "id", [], "any", false, false, false, 1240), "html", null, true);
        yield "', 'nomCount');
        updateCharCount('";
        // line 1241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1241, $this->source); })()), "description", [], "any", false, false, false, 1241), "vars", [], "any", false, false, false, 1241), "id", [], "any", false, false, false, 1241), "html", null, true);
        yield "', 'descCount');

        const descInput = document.querySelector('textarea[data-validation=\"description\"]');
        if (descInput) {
            descInput.addEventListener('input', function() {
                clearTimeout(descriptionDebounceTimer);
                if (this.value.trim().length >= 5) {
                    descriptionDebounceTimer = setTimeout(() => {
                        smartDetectCitiesFromDescription();
                    }, 500);
                } else {
                    hideDetectionLoading();
                }
            });

            descInput.addEventListener('blur', function() {
                if (this.value.trim().length >= 5) {
                    clearTimeout(descriptionDebounceTimer);
                    smartDetectCitiesFromDescription();
                }
            });
        }

        const typeSelect = document.querySelector('.transport-type-select');
        if (typeSelect) {
            typeSelect.addEventListener('change', function() {
                setTimeout(() => {
                    if (this.value.toUpperCase() === 'AVION') {
                        smartDetectCitiesFromDescription();
                    }
                }, 100);
            });
        }
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
        return "admin/transports/form.html.twig";
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
        return array (  1523 => 1241,  1519 => 1240,  803 => 527,  799 => 526,  795 => 525,  488 => 221,  479 => 215,  469 => 212,  459 => 205,  455 => 204,  451 => 203,  445 => 199,  439 => 196,  436 => 195,  434 => 194,  427 => 189,  419 => 186,  414 => 185,  412 => 184,  393 => 167,  387 => 164,  384 => 163,  382 => 162,  371 => 153,  363 => 150,  358 => 149,  356 => 148,  345 => 139,  339 => 136,  336 => 135,  334 => 134,  327 => 129,  319 => 126,  314 => 125,  312 => 124,  291 => 105,  285 => 102,  282 => 101,  280 => 100,  272 => 95,  260 => 86,  254 => 82,  248 => 79,  245 => 78,  243 => 77,  234 => 71,  226 => 66,  219 => 61,  213 => 58,  210 => 57,  208 => 56,  200 => 51,  193 => 47,  188 => 44,  182 => 41,  179 => 40,  177 => 39,  168 => 33,  158 => 26,  152 => 22,  146 => 19,  142 => 17,  140 => 16,  134 => 13,  129 => 10,  116 => 9,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}{{ title }} - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-plane\"></i> {{ title }}
{% endblock %}

{% block content %}
<div style=\"max-width: 900px; margin: 0 auto;\">
    <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px solid rgba(255, 193, 7, 0.15); border-radius: 16px; padding: 40px; overflow: hidden;\">

        {{ form_start(form, {'attr': {'class': 'transport-form', 'novalidate': 'novalidate'}}) }}

        <!-- Form Errors -->
        {% if form.vars.errors|length > 0 %}
            <div style=\"background: rgba(239, 68, 68, 0.15); border: 1px solid rgba(239, 68, 68, 0.3); border-radius: 8px; padding: 15px; margin-bottom: 20px; color: #EF4444;\">
                <h4 style=\"margin: 0 0 10px 0; color: #EF4444;\">Erreurs du formulaire:</h4>
                {{ form_errors(form) }}
            </div>
        {% endif %}

        <!-- Nom and Type Row -->
        <div class=\"form-row\">
            <div class=\"form-group\">
                <label for=\"{{ form.nom.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Nom du Transport
                    <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                    <span class=\"char-count\" style=\"float: right; color: rgba(255, 214, 79, 0.7); font-size: 12px; font-weight: 400;\">
                        <span id=\"nomCount\">0</span>/150
                    </span>
                </label>
                {{ form_widget(form.nom, {'attr': {'id': form.nom.vars.id, 'placeholder': 'Ex: Paris-Lyon', 'class': 'form-control field-input', 'required': 'required', 'minlength': '3', 'maxlength': '150', 'data-validation': 'nom'}}) }}
                <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"nomError\"></div>
                <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                    <i class=\"fas fa-check-circle\"></i>
                    <span class=\"success-text\"></span>
                </div>
                {% if form.nom.vars.errors|length > 0 %}
                    <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                        {{ form_errors(form.nom) }}
                    </div>
                {% endif %}
            </div>

            <div class=\"form-group\">
                <label for=\"{{ form.type.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Type de Transport
                    <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                </label>
                {{ form_widget(form.type, {'attr': {'id': form.type.vars.id, 'class': 'form-control select-styled transport-type-select', 'required': 'required', 'data-validation': 'type'}}) }}
                <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"typeError\"></div>
                <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                    <i class=\"fas fa-check-circle\"></i>
                </div>
                {% if form.type.vars.errors|length > 0 %}
                    <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                        {{ form_errors(form.type) }}
                    </div>
                {% endif %}
            </div>
        </div>

        <!-- Prix Row -->
        <div class=\"form-group\">
            <label for=\"{{ form.prix.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Prix
                <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                <span class=\"currency-symbol\" style=\"float: right; color: #FFC107; font-size: 12px; font-weight: 600;\">€</span>
            </label>
            {{ form_widget(form.prix, {'attr': {'id': form.prix.vars.id, 'type': 'number', 'step': '0.01', 'min': '0', 'placeholder': '0.00', 'class': 'form-control field-input', 'required': 'required', 'data-validation': 'prix'}}) }}
            <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"prixError\"></div>
            <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                <i class=\"fas fa-check-circle\"></i>
                <span class=\"success-text\"></span>
            </div>
            {% if form.prix.vars.errors|length > 0 %}
                <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                    {{ form_errors(form.prix) }}
                </div>
            {% endif %}
        </div>

        <!-- Description -->
        <div class=\"form-group\">
            <label for=\"{{ form.description.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Description
                <span class=\"char-count\" style=\"float: right; color: rgba(255, 214, 79, 0.7); font-size: 12px; font-weight: 400;\">
                    <span id=\"descCount\">0</span>/500 caractères
                </span>
            </label>
            <small style=\"display: block; color: rgba(255, 214, 79, 0.6); font-size: 11px; margin-bottom: 8px;\">
                <i class=\"fas fa-lightbulb\"></i> Conseil: Mentionnez les villes de départ et destination pour auto-remplissage automatique
            </small>
            {{ form_widget(form.description, {'attr': {'id': form.description.vars.id, 'rows': 4, 'placeholder': 'Ex: Paris vers Lyon, départ 14h...', 'class': 'form-control field-input', 'maxlength': '500', 'data-validation': 'description'}}) }}
            <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"descriptionError\"></div>
            <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                <i class=\"fas fa-check-circle\"></i>
            </div>
            {% if form.description.vars.errors|length > 0 %}
                <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                    {{ form_errors(form.description) }}
                </div>
            {% endif %}
        </div>

        <!-- Separator -->
        <div style=\"border-top: 2px solid rgba(255, 193, 7, 0.15); margin: 30px 0;\"></div>

        <!-- Aéroports Section (AVION) -->
        <div id=\"avion-airports\" class=\"airports-section\" style=\"display: none;\">
            <p style=\"color: var(--accent-amber); font-size: 14px; font-weight: 600; margin-bottom: 20px; letter-spacing: 0.5px; text-transform: uppercase;\">
                <i class=\"fas fa-plane\"></i> Aéroports
            </p>

            <div class=\"form-row\">
                <div class=\"form-group\">
                    <label for=\"airport-depart-display\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                        Aéroport de Départ
                        <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                    </label>
                    <select id=\"airport-depart-display\" name=\"display_aeroport_depart\" class=\"form-control select-styled airport-select\" data-validation=\"aeroportDepart\" style=\"display: block;\">
                        <option value=\"\">Sélectionnez un aéroport...</option>
                        {% if transport.aeroportDepart %}
                            <option value=\"{{ transport.aeroportDepart.id }}\" selected>
                                {{ transport.aeroportDepart.nom }} ({{ transport.aeroportDepart.codeIata ?: 'N/A' }})
                            </option>
                        {% endif %}
                    </select>
                    <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"aeroportDepartError\"></div>
                    <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                        <i class=\"fas fa-check-circle\"></i>
                    </div>
                    {% if form.aeroportDepart.vars.errors|length > 0 %}
                        <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                            {{ form_errors(form.aeroportDepart) }}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"airport-destination-display\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                        Aéroport de Destination
                        <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                    </label>
                    <select id=\"airport-destination-display\" name=\"display_aeroport_destination\" class=\"form-control select-styled airport-select\" data-validation=\"aeroportDestination\" style=\"display: block;\">
                        <option value=\"\">Sélectionnez un aéroport...</option>
                        {% if transport.aeroportDestination %}
                            <option value=\"{{ transport.aeroportDestination.id }}\" selected>
                                {{ transport.aeroportDestination.nom }} ({{ transport.aeroportDestination.codeIata ?: 'N/A' }})
                            </option>
                        {% endif %}
                    </select>
                    <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"aeroportDestinationError\"></div>
                    <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                        <i class=\"fas fa-check-circle\"></i>
                    </div>
                    <div id=\"samAirportWarning\" style=\"display: none; color: #FBBF24; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        <span>Les aéroports de départ et destination doivent être différents</span>
                    </div>
                    {% if form.aeroportDestination.vars.errors|length > 0 %}
                        <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                            {{ form_errors(form.aeroportDestination) }}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Location Section (VOITURE) -->
        <div id=\"voiture-location\" class=\"airports-section\" style=\"display: none;\">
            <p style=\"color: var(--accent-amber); font-size: 14px; font-weight: 600; margin-bottom: 20px; letter-spacing: 0.5px; text-transform: uppercase;\">
                <i class=\"fas fa-map-marker-alt\"></i> Point de Prise en Charge
            </p>

            <div class=\"form-group\">
                <label for=\"airport-pickup-display\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Point de Prise en Charge
                    <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                </label>
                <select id=\"airport-pickup-display\" name=\"display_aeroport_prise_en_charge\" class=\"form-control select-styled airport-select\" data-validation=\"aeroportPriseEnCharge\" style=\"display: block;\">
                    <option value=\"\">Sélectionnez un point...</option>
                    {% if transport.aeroportPriseEnCharge %}
                        <option value=\"{{ transport.aeroportPriseEnCharge.id }}\" selected>
                            {{ transport.aeroportPriseEnCharge.nom }} ({{ transport.aeroportPriseEnCharge.codeIata ?: 'N/A' }})
                        </option>
                    {% endif %}
                </select>
                <div class=\"validation-message\" style=\"display: none; color: #EF4444; font-size: 12px; margin-top: 5px;\" id=\"aeroportPriseEnChargeError\"></div>
                <div class=\"validation-success\" style=\"display: none; color: #34D399; font-size: 12px; margin-top: 5px; align-items: center; gap: 6px;\">
                    <i class=\"fas fa-check-circle\"></i>
                </div>
                {% if form.aeroportPriseEnCharge.vars.errors|length > 0 %}
                    <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                        {{ form_errors(form.aeroportPriseEnCharge) }}
                    </div>
                {% endif %}
            </div>
        </div>

        <div style=\"display: none;\">
            {{ form_widget(form.aeroportDepart) }}
            {{ form_widget(form.aeroportDestination) }}
            {{ form_widget(form.aeroportPriseEnCharge) }}
        </div>

        <!-- Form Actions -->
        <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 20px; border-top: 2px solid rgba(255, 193, 7, 0.15);\">
            <button type=\"submit\" class=\"btn-submit\">
                <i class=\"fas fa-save\"></i>
                <span>{% if transport.idTransport %}Mettre à Jour{% else %}Créer{% endif %}</span>
            </button>

            <a href=\"{{ path('admin_transports') }}\" class=\"btn-cancel\">
                <i class=\"fas fa-times\"></i>
                <span>Annuler</span>
            </a>
        </div>

        {{ form_end(form) }}
    </div>
</div>

<style>
    .form-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .form-group {
        margin-bottom: 24px;
    }

    .form-control,
    input[type=\"text\"],
    input[type=\"number\"],
    select,
    textarea {
        width: 100%;
        padding: 12px 16px;
        background: rgba(255, 255, 255, 0.05);
        border: 2px solid rgba(255, 193, 7, 0.15);
        border-radius: 8px;
        color: var(--text-primary);
        font-family: 'Inter', sans-serif;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        font-size: 14px;
        font-weight: 500;
    }

    /* Validation success state */
    .field-input.is-valid {
        border-color: #34D399;
        background: rgba(52, 211, 153, 0.05);
    }

    .field-input.is-valid:focus {
        border-color: #34D399;
        box-shadow: 0 0 15px rgba(52, 211, 153, 0.15);
    }

    /* Validation error state */
    .field-input.is-invalid {
        border-color: #EF4444;
        background: rgba(239, 68, 68, 0.05);
    }

    .field-input.is-invalid:focus {
        border-color: #EF4444;
        box-shadow: 0 0 15px rgba(239, 68, 68, 0.15);
    }

    .validation-success {
        display: flex !important;
    }

    .validation-message {
        display: block !important;
    }

    select.select-styled {
        appearance: none;
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23FFC107' stroke-width='2'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 20px;
        padding-right: 40px;
        background-clip: padding-box;
    }

    select.select-styled option {
        background: #0B2D4A;
        color: #F4F8FC;
        padding: 10px;
    }

    /* Validation states for selects */
    select.select-styled.is-valid {
        border-color: #34D399;
        background-color: rgba(52, 211, 153, 0.05);
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2334D399' stroke-width='2'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 20px;
    }

    select.select-styled.is-valid:focus {
        border-color: #34D399;
        background-color: rgba(52, 211, 153, 0.08);
        box-shadow: 0 0 15px rgba(52, 211, 153, 0.15);
    }

    select.select-styled.is-invalid {
        border-color: #EF4444;
        background-color: rgba(239, 68, 68, 0.05);
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23EF4444' stroke-width='2'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 20px;
    }

    select.select-styled.is-invalid:focus {
        border-color: #EF4444;
        background-color: rgba(239, 68, 68, 0.08);
        box-shadow: 0 0 15px rgba(239, 68, 68, 0.15);
    }

    input:focus, textarea:focus {
        outline: none !important;
        background: rgba(255, 255, 255, 0.08);
        border-color: #FFC107;
        box-shadow: 0 0 15px rgba(255, 193, 7, 0.2);
    }

    select:focus:not(.is-valid):not(.is-invalid) {
        outline: none !important;
        background: rgba(255, 255, 255, 0.08);
        border-color: #FFC107;
        box-shadow: 0 0 15px rgba(255, 193, 7, 0.2);
    }

    /* Validation messages with smooth animations */
    .validation-message {
        animation: slideInError 0.25s ease-out;
        font-weight: 500;
    }

    .validation-success {
        animation: slideInSuccess 0.25s ease-out;
        font-weight: 500;
    }

    @keyframes slideInError {
        from {
            opacity: 0;
            transform: translateY(-8px);
            color: transparent;
        }
        to {
            opacity: 1;
            transform: translateY(0);
            color: #EF4444;
        }
    }

    @keyframes slideInSuccess {
        from {
            opacity: 0;
            transform: translateY(-8px);
            color: transparent;
        }
        to {
            opacity: 1;
            transform: translateY(0);
            color: #34D399;
        }
    }

    .airports-section {
        animation: slideInDown 0.3s ease-out;
    }

    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .detection-loader {
        display: none;
        margin-top: 8px;
        padding: 8px 12px;
        background: rgba(255, 193, 7, 0.1);
        border: 1px solid rgba(255, 193, 7, 0.3);
        border-radius: 6px;
        color: #FFC107;
        font-size: 12px;
        font-weight: 500;
        animation: fadeIn 0.3s ease;
    }

    .detection-loader i {
        margin-right: 6px;
    }

    .detection-success {
        display: none;
        margin-top: 8px;
        padding: 8px 12px;
        background: rgba(52, 211, 153, 0.1);
        border: 1px solid rgba(52, 211, 153, 0.3);
        border-radius: 6px;
        color: #34D399;
        font-size: 12px;
        font-weight: 500;
        animation: fadeIn 0.3s ease;
    }

    .detection-success i {
        margin-right: 6px;
    }

    .detection-error {
        display: none;
        margin-top: 8px;
        padding: 8px 12px;
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.3);
        border-radius: 6px;
        color: #EF4444;
        font-size: 12px;
        font-weight: 500;
        animation: fadeIn 0.3s ease;
    }

    .detection-error i {
        margin-right: 6px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-4px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn-submit {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
        color: #0B2D4A;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        font-size: 14px;
        box-shadow: 0 4px 12px rgba(255, 193, 7, 0.25);
    }

    .btn-submit:hover:not(:disabled) {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(255, 193, 7, 0.4);
    }

    .btn-submit:active:not(:disabled) {
        transform: translateY(-1px);
    }

    .btn-submit:disabled {
        opacity: 0.45;
        cursor: not-allowed;
        box-shadow: 0 2px 6px rgba(255, 193, 7, 0.1);
    }

    .btn-cancel {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: rgba(255, 193, 7, 0.1);
        color: #FFC107;
        border: 2px solid #FFC107;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-cancel:hover {
        background: #FFC107;
        color: #0B2D4A;
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    let filterDebounceTimer;
    let fieldStatusMap = {};
    let isDetectingAirports = false;
    let lastDetectionDescription = '';
    let airportChoicesLoaded = false;
    let airportChoices = [];
    const hiddenAirportFieldIds = {
        aeroportDepart: '{{ form.aeroportDepart.vars.id }}',
        aeroportDestination: '{{ form.aeroportDestination.vars.id }}',
        aeroportPriseEnCharge: '{{ form.aeroportPriseEnCharge.vars.id }}',
    };

    const validationRules = {
        nom: {
            required: true,
            minlength: 3,
            maxlength: 150,
            messages: {
                required: 'Nom requis',
                minlength: 'Min. 3 caractères',
                maxlength: 'Max. 150 caractères',
                valid: 'Nom valide ✓'
            }
        },
        type: {
            required: true,
            messages: {
                required: 'Sélectionnez un type',
                valid: 'Type sélectionné ✓'
            }
        },
        prix: {
            required: true,
            validate: (value) => {
                const num = parseFloat(value);
                return !isNaN(num) && num >= 0;
            },
            messages: {
                required: 'Prix requis',
                validate: 'Nombre positif requis',
                valid: 'Prix valide ✓'
            }
        },
        description: {
            maxlength: 500,
            messages: {
                maxlength: 'Max. 500 caractères',
                valid: 'Description valide ✓'
            }
        },
        aeroportDepart: {
            required: true,
            messages: {
                required: 'Sélectionnez un aéroport',
                valid: 'Aéroport sélectionné ✓'
            }
        },
        aeroportDestination: {
            required: true,
            messages: {
                required: 'Sélectionnez un aéroport',
                valid: 'Aéroport sélectionné ✓'
            }
        },
        aeroportPriseEnCharge: {
            required: true,
            messages: {
                required: 'Sélectionnez un point',
                valid: 'Point sélectionné ✓'
            }
        }
    };

    function validateField(fieldName, value) {
        const rule = validationRules[fieldName];
        if (!rule) return { isValid: true };

        // Check required - handle both string and numeric values
        if (rule.required) {
            const isEmpty = value === null ||
                           value === undefined ||
                           value === '' ||
                           (typeof value === 'string' && value.trim() === '');

            if (isEmpty) {
                return { isValid: false, message: rule.messages.required };
            }
        }

        if (rule.minlength && value && value.length < rule.minlength) {
            return { isValid: false, message: rule.messages.minlength };
        }

        if (rule.maxlength && value && value.length > rule.maxlength) {
            return { isValid: false, message: rule.messages.maxlength };
        }

        if (rule.validate && !rule.validate(value)) {
            return { isValid: false, message: rule.messages.validate };
        }

        return { isValid: true, message: rule.messages.valid };
    }

    function updateFieldDisplay(fieldName, isValid, message = '') {
        const fieldElement = document.querySelector(`[data-validation=\"\${fieldName}\"]`);
        if (!fieldElement) return;

        const errorElement = document.getElementById(`\${fieldName}Error`);
        const successElement = fieldElement.parentElement.querySelector('.validation-success');

        fieldStatusMap[fieldName] = isValid;

        if (isValid) {
            fieldElement.classList.remove('is-invalid');
            fieldElement.classList.add('is-valid');
            if (errorElement) {
                errorElement.textContent = '';
                errorElement.style.display = 'none';
            }
            if (successElement) {
                successElement.style.display = 'flex';
            }
        } else {
            fieldElement.classList.remove('is-valid');
            fieldElement.classList.add('is-invalid');
            if (errorElement) {
                errorElement.textContent = message;
                errorElement.style.display = 'block';
            }
            if (successElement) {
                successElement.style.display = 'none';
            }
        }

        updateSubmitButton();
    }

    function updateCharCount(inputId, countId) {
        const input = document.getElementById(inputId);
        const countElement = document.getElementById(countId);
        if (input && countElement) {
            countElement.textContent = input.value.length;
        }
    }

    function validateForm() {
        let isFormValid = true;
        const typeSelect = document.querySelector('.transport-type-select');
        const selectedType = typeSelect?.value?.toUpperCase() || '';

        // Validate basic fields
        ['nom', 'type', 'prix'].forEach(fieldName => {
            const field = document.querySelector(`[data-validation=\"\${fieldName}\"]`);
            if (field) {
                const validation = validateField(fieldName, field.value);
                updateFieldDisplay(fieldName, validation.isValid, validation.message);
                if (!validation.isValid) isFormValid = false;
            }
        });

        // Validate type-specific fields
        if (selectedType === 'AVION') {
            const departSelect = document.querySelector('[data-validation=\"aeroportDepart\"]');
            const destSelect = document.querySelector('[data-validation=\"aeroportDestination\"]');

            if (departSelect) {
                const validation = validateField('aeroportDepart', departSelect.value);
                updateFieldDisplay('aeroportDepart', validation.isValid, validation.message);
                if (!validation.isValid) isFormValid = false;
            }

            if (destSelect) {
                const validation = validateField('aeroportDestination', destSelect.value);
                const isSameAirport = departSelect?.value && destSelect?.value && departSelect.value === destSelect.value;
                const isValid = validation.isValid && !isSameAirport;
                const message = isSameAirport ? 'Aéroports différents requis' : validation.message;
                updateFieldDisplay('aeroportDestination', isValid, message);

                const samAirportWarning = document.getElementById('samAirportWarning');
                if (samAirportWarning) {
                    samAirportWarning.style.display = isSameAirport ? 'flex' : 'none';
                }

                if (!isValid) isFormValid = false;
            }
        } else if (selectedType === 'VOITURE') {
            const pickupSelect = document.querySelector('[data-validation=\"aeroportPriseEnCharge\"]');
            if (pickupSelect) {
                const validation = validateField('aeroportPriseEnCharge', pickupSelect.value);
                updateFieldDisplay('aeroportPriseEnCharge', validation.isValid, validation.message);
                if (!validation.isValid) isFormValid = false;
            }
        }

        return isFormValid;
    }

    function updateSubmitButton() {
        const typeSelect = document.querySelector('.transport-type-select');
        const selectedType = typeSelect?.value?.toUpperCase() || '';
        const submitBtn = document.querySelector('.btn-submit');
        if (!submitBtn) return;

        let requiredFields = ['nom', 'type', 'prix'];
        if (selectedType === 'AVION') {
            requiredFields = ['nom', 'type', 'prix', 'aeroportDepart', 'aeroportDestination'];
        } else if (selectedType === 'VOITURE') {
            requiredFields = ['nom', 'type', 'prix', 'aeroportPriseEnCharge'];
        }

        const allValid = requiredFields.every(field => fieldStatusMap[field] === true);
        submitBtn.disabled = !allValid;
    }

    async function loadAirportChoices(force = false) {
        if (airportChoicesLoaded && !force) {
            return;
        }

        try {
            const response = await fetch('/api/airports/choices?limit=3000', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                },
            });

            if (!response.ok) {
                return;
            }

            const data = await response.json();
            if (!data.success || !Array.isArray(data.airports)) {
                return;
            }

            airportChoices = data.airports;
            airportChoicesLoaded = true;
            hydrateAirportSelects();
        } catch (error) {
            console.warn('Unable to load airport choices:', error);
        }
    }

    function hydrateSingleAirportSelect(selectId, fieldName, placeholderText) {
        const select = document.getElementById(selectId);
        if (!select) {
            return;
        }

        const hiddenField = getAirportHiddenField(fieldName);
        const currentValue = select.value || hiddenField?.value || '';

        select.innerHTML = '';

        const placeholder = document.createElement('option');
        placeholder.value = '';
        placeholder.textContent = placeholderText;
        select.appendChild(placeholder);

        airportChoices.forEach((airport) => {
            const option = document.createElement('option');
            option.value = String(airport.id ?? '');
            option.textContent = `\${airport.nom ?? 'N/A'} (\${airport.codeIata || 'N/A'})`;
            if (currentValue && option.value === String(currentValue)) {
                option.selected = true;
            }
            select.appendChild(option);
        });

        if (currentValue) {
            select.value = String(currentValue);
            syncAirportHiddenField(fieldName, String(currentValue));
        }
    }

    function hydrateAirportSelects() {
        hydrateSingleAirportSelect('airport-depart-display', 'aeroportDepart', 'Sélectionnez un aéroport...');
        hydrateSingleAirportSelect('airport-destination-display', 'aeroportDestination', 'Sélectionnez un aéroport...');
        hydrateSingleAirportSelect('airport-pickup-display', 'aeroportPriseEnCharge', 'Sélectionnez un point...');
    }

    function getAirportHiddenField(fieldName) {
        const hiddenId = hiddenAirportFieldIds[fieldName];
        if (hiddenId) {
            const byId = document.getElementById(hiddenId);
            if (byId) {
                return byId;
            }
        }

        return document.querySelector(`input[name\$=\"[\${fieldName}]\"]`);
    }

    function syncAirportHiddenField(fieldName, value) {
        const hiddenField = getAirportHiddenField(fieldName);
        if (hiddenField) {
            hiddenField.value = value || '';
        }
    }

    function setupFieldListeners() {
        // Nom field
        const nomInput = document.querySelector('input[data-validation=\"nom\"]');
        if (nomInput) {
            nomInput.addEventListener('input', function() {
                updateCharCount(this.id, 'nomCount');
                const validation = validateField('nom', this.value);
                updateFieldDisplay('nom', validation.isValid, validation.message);
                updateSubmitButton();
            });

            nomInput.addEventListener('blur', function() {
                const validation = validateField('nom', this.value);
                updateFieldDisplay('nom', validation.isValid, validation.message);
            });
        }

        // Prix field
        const prixInput = document.querySelector('input[data-validation=\"prix\"]');
        if (prixInput) {
            prixInput.addEventListener('keypress', function(e) {
                if (!/[0-9.]/.test(e.key) && e.key !== 'Backspace' && e.key !== 'Delete') {
                    e.preventDefault();
                }
            });

            prixInput.addEventListener('input', function() {
                const validation = validateField('prix', this.value);
                updateFieldDisplay('prix', validation.isValid, validation.message);
                updateSubmitButton();
            });

            prixInput.addEventListener('blur', function() {
                const validation = validateField('prix', this.value);
                updateFieldDisplay('prix', validation.isValid, validation.message);
            });
        }

        // Description field
        const descInput = document.querySelector('textarea[data-validation=\"description\"]');
        if (descInput) {
            descInput.addEventListener('input', function() {
                updateCharCount(this.id, 'descCount');
                const validation = validateField('description', this.value);
                updateFieldDisplay('description', validation.isValid, validation.message);
                updateSubmitButton();
            });

            descInput.addEventListener('blur', function() {
                const validation = validateField('description', this.value);
                updateFieldDisplay('description', validation.isValid, validation.message);
            });
        }

        // Type select
        const typeSelect = document.querySelector('.transport-type-select');
        if (typeSelect) {
            typeSelect.addEventListener('change', function() {
                const validation = validateField('type', this.value);
                updateFieldDisplay('type', validation.isValid, validation.message);
                updateAirportFields();
                const typeSpecificFields = ['aeroportDepart', 'aeroportDestination', 'aeroportPriseEnCharge'];
                typeSpecificFields.forEach(field => {
                    const errorElement = document.getElementById(`\${field}Error`);
                    if (errorElement) {
                        errorElement.style.display = 'none';
                    }
                    fieldStatusMap[field] = false;
                });
                setTimeout(() => {
                    validateForm();
                    updateSubmitButton();
                }, 100);
            });
        }

        // Airport display selects: sync to hidden Symfony form fields
        const airportSelects = document.querySelectorAll('.airport-select');
        airportSelects.forEach(select => {
            select.addEventListener('change', function() {
                const fieldName = this.getAttribute('data-validation');
                if (fieldName) {
                    syncAirportHiddenField(fieldName, this.value);
                    const validation = validateField(fieldName, this.value);
                    updateFieldDisplay(fieldName, validation.isValid, validation.message);

                    if (fieldName === 'aeroportDepart') {
                        const destSelect = document.querySelector('[data-validation=\"aeroportDestination\"]');
                        if (destSelect && destSelect.value) {
                            validateForm();
                        }
                    }
                    if (fieldName === 'aeroportDestination') {
                        const departSelect = document.querySelector('[data-validation=\"aeroportDepart\"]');
                        if (departSelect && departSelect.value) {
                            validateForm();
                        }
                    }

                    updateSubmitButton();
                }
            });
        });

        // Form submit
        const form = document.querySelector('.transport-form');
        if (form) {
            form.addEventListener('submit', function(e) {
                const isValid = validateForm();
                if (!isValid) {
                    e.preventDefault();
                    const firstError = document.querySelector('.is-invalid');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    return false;
                }
            });
        }
    }

    function updateAirportFields() {
        const typeSelect = document.querySelector('.transport-type-select');
        const selectedType = typeSelect?.value?.toUpperCase() || '';

        const avionSection = document.getElementById('avion-airports');
        const voitureSection = document.getElementById('voiture-location');

        if (selectedType === 'AVION') {
            avionSection.style.display = 'block';
            voitureSection.style.display = 'none';
            loadAirportChoices();
            const pickupSelect = document.querySelector('[data-validation=\"aeroportPriseEnCharge\"]');
            if (pickupSelect) {
                pickupSelect.value = '';
            }
            syncAirportHiddenField('aeroportPriseEnCharge', '');
        } else if (selectedType === 'VOITURE') {
            avionSection.style.display = 'none';
            voitureSection.style.display = 'block';
            loadAirportChoices();
            const departSelect = document.querySelector('[data-validation=\"aeroportDepart\"]');
            const destinationSelect = document.querySelector('[data-validation=\"aeroportDestination\"]');
            if (departSelect) {
                departSelect.value = '';
            }
            if (destinationSelect) {
                destinationSelect.value = '';
            }
            syncAirportHiddenField('aeroportDepart', '');
            syncAirportHiddenField('aeroportDestination', '');
        } else {
            avionSection.style.display = 'none';
            voitureSection.style.display = 'none';
            const departSelect = document.querySelector('[data-validation=\"aeroportDepart\"]');
            const destinationSelect = document.querySelector('[data-validation=\"aeroportDestination\"]');
            const pickupSelect = document.querySelector('[data-validation=\"aeroportPriseEnCharge\"]');
            if (departSelect) {
                departSelect.value = '';
            }
            if (destinationSelect) {
                destinationSelect.value = '';
            }
            if (pickupSelect) {
                pickupSelect.value = '';
            }
            syncAirportHiddenField('aeroportDepart', '');
            syncAirportHiddenField('aeroportDestination', '');
            syncAirportHiddenField('aeroportPriseEnCharge', '');
        }
    }

    let descriptionDebounceTimer;

    async function smartDetectCitiesFromDescription() {
        const descInput = document.querySelector('textarea[data-validation=\"description\"]');
        const typeSelect = document.querySelector('.transport-type-select');
        const description = descInput?.value || '';
        const type = typeSelect?.value || '';

        // Basic validation
        if (!description.trim() || type.toUpperCase() !== 'AVION') {
            hideDetectionLoading();
            return;
        }

        // Prevent duplicate requests for same description
        if (lastDetectionDescription === description.trim()) {
            return;
        }

        // Prevent multiple simultaneous requests
        if (isDetectingAirports) {
            return;
        }

        isDetectingAirports = true;
        lastDetectionDescription = description.trim();

        // Show loading state
        showDetectionLoading();

        try {
            const response = await fetch('/api/detect-airports', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    description: description
                }),
                signal: AbortSignal.timeout(5000) // 5 second timeout
            });

            if (!response.ok) {
                const errorData = await response.json().catch(() => ({}));
                const errorMsg = errorData.message || 'Detection failed. Try format: \"Paris to Lyon\"';
                showDetectionError(errorMsg);
                isDetectingAirports = false;
                hideDetectionLoading();
                return;
            }

            const data = await response.json();

            if (!data.success || !data.airports || !data.cities) {
                const errorMsg = data.message || 'No matching cities found';
                showDetectionError(errorMsg);
                isDetectingAirports = false;
                hideDetectionLoading();
                return;
            }

            const departureCity = data.cities.departure;
            const destinationCity = data.cities.destination;

            // Validate cities
            if (!departureCity || !destinationCity) {
                showDetectionError('Invalid city data received');
                isDetectingAirports = false;
                hideDetectionLoading();
                return;
            }

            // Get display selects
            const departSelect = document.getElementById('airport-depart-display');
            const destSelect = document.getElementById('airport-destination-display');

            // Validate selects exist
            if (!departSelect || !destSelect) {
                console.warn('Airport selects not found');
                isDetectingAirports = false;
                hideDetectionLoading();
                return;
            }

            let departureUpdated = false;
            let destinationUpdated = false;

            // Update departure airports
            if (data.airports[departureCity] && data.airports[departureCity].length > 0) {
                departureUpdated = populateAirportSelect(departSelect, data.airports[departureCity], departureCity);
            }

            // Update destination airports
            if (data.airports[destinationCity] && data.airports[destinationCity].length > 0) {
                destinationUpdated = populateAirportSelect(destSelect, data.airports[destinationCity], destinationCity);
            }

            // Show success and re-validate the form
            if (departureUpdated && destinationUpdated) {
                showDetectionSuccess(departureCity, destinationCity);
                // Re-validate both airports and departments
                validateForm();
                // Update submit button with current field statuses
                updateSubmitButton();
            } else {
                showDetectionError('Could not populate airport fields');
            }

        } catch (error) {
            if (error.name === 'AbortError') {
                showDetectionError('Request timeout. Please try again.');
            } else {
                console.error('Detection error:', error);
                showDetectionError('Error detecting airports. Please try again.');
            }
        } finally {
            isDetectingAirports = false;
            hideDetectionLoading();
        }
    }

    function showDetectionLoading() {
        const desc = document.querySelector('textarea[data-validation=\"description\"]');
        if (desc && desc.parentElement) {
            let loader = desc.parentElement.querySelector('.detection-loader');
            if (!loader) {
                loader = document.createElement('div');
                loader.className = 'detection-loader';
                desc.parentElement.appendChild(loader);
            }
            loader.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Détection en cours...';
            loader.style.display = 'block';
        }
    }

    function hideDetectionLoading() {
        const loader = document.querySelector('.detection-loader');
        if (loader) {
            loader.style.display = 'none';
        }
    }

    function showDetectionSuccess(departureCity, destinationCity) {
        const desc = document.querySelector('textarea[data-validation=\"description\"]');
        if (desc && desc.parentElement) {
            clearDetectionFeedback();
            let success = document.createElement('div');
            success.className = 'detection-success';
            success.innerHTML = `<i class=\"fas fa-check-circle\"></i> Détecté: <strong>\${departureCity}</strong> → <strong>\${destinationCity}</strong>`;
            desc.parentElement.appendChild(success);
            success.style.display = 'block';
            setTimeout(() => {
                if (success.parentElement) {
                    success.remove();
                }
            }, 4000);
        }
    }

    function showDetectionError(message) {
        const desc = document.querySelector('textarea[data-validation=\"description\"]');
        if (desc && desc.parentElement) {
            clearDetectionFeedback();
            let error = document.createElement('div');
            error.className = 'detection-error';
            error.innerHTML = `<i class=\"fas fa-exclamation-circle\"></i> \${message}`;
            desc.parentElement.appendChild(error);
            error.style.display = 'block';
        }
    }

    function clearDetectionFeedback() {
        const desc = document.querySelector('textarea[data-validation=\"description\"]');
        if (desc && desc.parentElement) {
            const existing = desc.parentElement.querySelector('.detection-success, .detection-error');
            if (existing) {
                existing.remove();
            }
        }
    }

    function populateAirportSelect(selectElement, airportList, cityName) {
        if (!selectElement || !airportList || !Array.isArray(airportList) || airportList.length === 0) {
            console.warn('Invalid airport data for city:', cityName);
            return false;
        }

        try {
            selectElement.innerHTML = '';

            // Add placeholder option
            const placeholderOption = document.createElement('option');
            placeholderOption.value = '';
            placeholderOption.textContent = 'Sélectionnez un aéroport...';
            placeholderOption.disabled = true;
            selectElement.appendChild(placeholderOption);

            // Add airport options
            let firstOptionValue = null;
            airportList.forEach((airport) => {
                if (airport && airport.id !== null && airport.id !== undefined && airport.nom) {
                    const option = document.createElement('option');
                    option.value = airport.id;
                    option.textContent = `\${airport.nom} (\${airport.codeIata || 'N/A'})`;
                    selectElement.appendChild(option);

                    if (firstOptionValue === null) {
                        firstOptionValue = airport.id;
                    }
                }
            });

            // Auto-select first airport
            if (firstOptionValue !== null) {
                selectElement.value = firstOptionValue;
                const fieldName = selectElement.getAttribute('data-validation');

                if (fieldName) {
                    syncAirportHiddenField(fieldName, firstOptionValue);

                    const validation = validateField(fieldName, firstOptionValue);
                    updateFieldDisplay(fieldName, validation.isValid, validation.message);
                }

                selectElement.dispatchEvent(new Event('change', { bubbles: true }));
                return true;
            }

        } catch (error) {
            console.error('Error populating airport select:', error);
        }
        return false;
    }

    document.addEventListener('DOMContentLoaded', function() {
        loadAirportChoices();
        updateAirportFields();
        setupFieldListeners();

        ['aeroportDepart', 'aeroportDestination', 'aeroportPriseEnCharge'].forEach(fieldName => {
            const displayField = document.querySelector(`[data-validation=\"\${fieldName}\"]`);
            if (displayField) {
                syncAirportHiddenField(fieldName, displayField.value);
            }
        });

        validateForm();

        updateCharCount('{{ form.nom.vars.id }}', 'nomCount');
        updateCharCount('{{ form.description.vars.id }}', 'descCount');

        const descInput = document.querySelector('textarea[data-validation=\"description\"]');
        if (descInput) {
            descInput.addEventListener('input', function() {
                clearTimeout(descriptionDebounceTimer);
                if (this.value.trim().length >= 5) {
                    descriptionDebounceTimer = setTimeout(() => {
                        smartDetectCitiesFromDescription();
                    }, 500);
                } else {
                    hideDetectionLoading();
                }
            });

            descInput.addEventListener('blur', function() {
                if (this.value.trim().length >= 5) {
                    clearTimeout(descriptionDebounceTimer);
                    smartDetectCitiesFromDescription();
                }
            });
        }

        const typeSelect = document.querySelector('.transport-type-select');
        if (typeSelect) {
            typeSelect.addEventListener('change', function() {
                setTimeout(() => {
                    if (this.value.toUpperCase() === 'AVION') {
                        smartDetectCitiesFromDescription();
                    }
                }, 100);
            });
        }
    });
</script>

{% endblock %}
", "admin/transports/form.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\transports\\form.html.twig");
    }
}
