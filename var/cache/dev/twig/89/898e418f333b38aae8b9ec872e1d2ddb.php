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

/* admin/utilisateurs/_form.html.twig */
class __TwigTemplate_e6c692cbcdefbf354cd474512d9b75c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateurs/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateurs/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["action" => (((($tmp =         // line 2
(isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_form_edit_submit", ["id" =>         // line 3
(isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new RuntimeError('Variable "user_id" does not exist.', 3, $this->source); })())])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_form_add_submit"))), "attr" => ["id" => "backofficeUserForm", "novalidate" => "novalidate"]]);
        // line 9
        yield "

<div class=\"modal-body\">
    <div class=\"form-message\" id=\"formMessage\"></div>


<div class=\"form-row\">
    <div class=\"form-group\">
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), 'label');
        yield "
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'widget');
        yield "
        <div class=\"field-error\" id=\"prenomError\"></div>
    </div>

    <div class=\"form-group\">
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'label');
        yield "
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'widget');
        yield "
        <div class=\"field-error\" id=\"nomError\"></div>
    </div>
</div>

<div class=\"form-group\">
    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'label');
        yield "
    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'widget');
        yield "
    <div class=\"field-error\" id=\"emailError\"></div>
</div>

<div class=\"form-group\">
    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "telephone", [], "any", false, false, false, 36), 'label');
        yield "
    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "telephone", [], "any", false, false, false, 37), 'widget');
        yield "
    <div class=\"field-error\" id=\"telephoneError\"></div>
</div>

";
        // line 41
        if ((($tmp =  !(isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "<div class=\"form-row\">
    <div class=\"form-group\">
        ";
            // line 44
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "plainPassword", [], "any", false, false, false, 44), "first", [], "any", false, false, false, 44), 'label');
            yield "
        ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "plainPassword", [], "any", false, false, false, 45), "first", [], "any", false, false, false, 45), 'widget');
            yield "
        <div class=\"field-error\" id=\"plainPasswordFirstError\"></div>
    </div>

    <div class=\"form-group\">
        ";
            // line 50
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "plainPassword", [], "any", false, false, false, 50), "second", [], "any", false, false, false, 50), 'label');
            yield "
        ";
            // line 51
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "plainPassword", [], "any", false, false, false, 51), "second", [], "any", false, false, false, 51), 'widget');
            yield "
        <div class=\"field-error\" id=\"plainPasswordSecondError\"></div>
    </div>
</div>
";
        }
        // line 56
        yield "
<div class=\"form-row\">
    <div class=\"form-group\">
        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "role", [], "any", false, false, false, 59), 'label');
        yield "
        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "role", [], "any", false, false, false, 60), 'widget');
        yield "
        <div class=\"field-error\" id=\"roleError\"></div>
    </div>

    <div class=\"form-group\">
        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "statut", [], "any", false, false, false, 65), 'label');
        yield "
        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "statut", [], "any", false, false, false, 66), 'widget');
        yield "
        <div class=\"field-error\" id=\"statutError\"></div>
    </div>
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-secondary\" id=\"cancelFormBtn\">
        Annuler
    </button>

    <button type=\"submit\" class=\"btn btn-primary\">
        ";
        // line 76
        yield (((($tmp = (isset($context["is_edit"]) || array_key_exists("is_edit", $context) ? $context["is_edit"] : (function () { throw new RuntimeError('Variable "is_edit" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour") : ("Enregistrer"));
        yield "
    </button>
</div>

";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/utilisateurs/_form.html.twig";
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
        return array (  181 => 80,  174 => 76,  161 => 66,  157 => 65,  149 => 60,  145 => 59,  140 => 56,  132 => 51,  128 => 50,  120 => 45,  116 => 44,  112 => 42,  110 => 41,  103 => 37,  99 => 36,  91 => 31,  87 => 30,  78 => 24,  74 => 23,  66 => 18,  62 => 17,  52 => 9,  50 => 3,  49 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {
    action: is_edit
        ? path('admin_user_form_edit_submit', {'id': user_id})
        : path('admin_user_form_add_submit'),
    attr: {
        id: 'backofficeUserForm',
        novalidate: 'novalidate'
    }
}) }}

<div class=\"modal-body\">
    <div class=\"form-message\" id=\"formMessage\"></div>


<div class=\"form-row\">
    <div class=\"form-group\">
        {{ form_label(form.prenom) }}
        {{ form_widget(form.prenom) }}
        <div class=\"field-error\" id=\"prenomError\"></div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.nom) }}
        {{ form_widget(form.nom) }}
        <div class=\"field-error\" id=\"nomError\"></div>
    </div>
</div>

<div class=\"form-group\">
    {{ form_label(form.email) }}
    {{ form_widget(form.email) }}
    <div class=\"field-error\" id=\"emailError\"></div>
</div>

<div class=\"form-group\">
    {{ form_label(form.telephone) }}
    {{ form_widget(form.telephone) }}
    <div class=\"field-error\" id=\"telephoneError\"></div>
</div>

{% if not is_edit %}
<div class=\"form-row\">
    <div class=\"form-group\">
        {{ form_label(form.plainPassword.first) }}
        {{ form_widget(form.plainPassword.first) }}
        <div class=\"field-error\" id=\"plainPasswordFirstError\"></div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.plainPassword.second) }}
        {{ form_widget(form.plainPassword.second) }}
        <div class=\"field-error\" id=\"plainPasswordSecondError\"></div>
    </div>
</div>
{% endif %}

<div class=\"form-row\">
    <div class=\"form-group\">
        {{ form_label(form.role) }}
        {{ form_widget(form.role) }}
        <div class=\"field-error\" id=\"roleError\"></div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.statut) }}
        {{ form_widget(form.statut) }}
        <div class=\"field-error\" id=\"statutError\"></div>
    </div>
</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-secondary\" id=\"cancelFormBtn\">
        Annuler
    </button>

    <button type=\"submit\" class=\"btn btn-primary\">
        {{ is_edit ? 'Mettre à jour' : 'Enregistrer' }}
    </button>
</div>

{{ form_end(form) }}", "admin/utilisateurs/_form.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\utilisateurs\\_form.html.twig");
    }
}
