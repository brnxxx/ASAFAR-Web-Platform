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

/* admin/categories_hebergement/form.html.twig */
class __TwigTemplate_6047ae158f90c8d56573f2841a84b9ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories_hebergement/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories_hebergement/form.html.twig"));

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
        yield "    <i class=\"fas fa-tags\"></i> ";
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
        yield "<div style=\"max-width: 600px; margin: 0 auto;\">
    <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px solid rgba(47, 168, 255, 0.15); border-radius: 16px; padding: 40px; overflow: hidden;\">

        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "categorie-form", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
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
        <!-- Image Upload -->
        <div class=\"form-group\" style=\"margin-bottom: 30px;\">
            <label style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Image de la Catégorie
            </label>
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: start;\">
                <div style=\"background: rgba(47, 168, 255, 0.1); border: 2px dashed rgba(47, 168, 255, 0.3); border-radius: 12px; padding: 20px; display: flex; align-items: center; justify-content: center; min-height: 220px; overflow: hidden;\">
                    <div id=\"imagePreview\" style=\"text-align: center; width: 100%;\">
                        ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 31, $this->source); })()), "imagePath", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 32, $this->source); })()), "imagePath", [], "any", false, false, false, 32), "html", null, true);
            yield "\" alt=\"Preview\" style=\"max-width: 100%; max-height: 180px; border-radius: 8px; object-fit: cover;\">
                        ";
        } else {
            // line 34
            yield "                            <div style=\"color: rgba(47, 168, 255, 0.5);\">
                                <i class=\"fas fa-image\" style=\"font-size: 44px; display: block; margin-bottom: 10px;\"></i>
                                <p style=\"font-size: 14px; margin: 0;\">Aucune image sélectionnée</p>
                            </div>
                        ";
        }
        // line 39
        yield "                    </div>
                </div>

                <div>
                    <div style=\"position: relative;\">
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "imageFile", [], "any", false, false, false, 44), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "imageFile", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "class" => "file-input", "accept" => "image/*"]]);
        // line 50
        yield "
                        <label for=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "imageFile", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        yield "\" class=\"btn-upload\">
                            <i class=\"fas fa-cloud-upload-alt\"></i>
                            <span>Choisir une image</span>
                        </label>
                    </div>
                    <p style=\"font-size: 12px; color: var(--text-secondary); margin-top: 10px; margin-bottom: 0;\">
                        Format: JPG, PNG, GIF, WebP<br>
                        Taille max: 5MB
                    </p>
                    ";
        // line 60
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "imageFile", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "errors", [], "any", false, false, false, 60)) > 0)) {
            // line 61
            yield "                        <div style=\"color: #EF4444; font-size: 12px; margin-top: 6px;\">
                            ";
            // line 62
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "imageFile", [], "any", false, false, false, 62), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 65
        yield "                </div>
            </div>
        </div>

        <!-- Nom Field -->
        <div class=\"form-group\" style=\"margin-bottom: 24px;\">
            <label for=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "nom", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Nom de la Catégorie
                <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
            </label>
            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "nom", [], "any", false, false, false, 75), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "nom", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "placeholder" => "Ex: Luxe, Budget, Eco...", "class" => "form-control"]]);
        yield "
            ";
        // line 76
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "nom", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "errors", [], "any", false, false, false, 76)) > 0)) {
            // line 77
            yield "                <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                    ";
            // line 78
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "nom", [], "any", false, false, false, 78), 'errors');
            yield "
                </div>
            ";
        }
        // line 81
        yield "        </div>

        <!-- Description Field -->
        <div class=\"form-group\" style=\"margin-bottom: 30px;\">
            <label for=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "description", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Description
            </label>
            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "description", [], "any", false, false, false, 88), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "description", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "rows" => 4, "placeholder" => "Décrivez cette catégorie d'hébergement...", "class" => "form-control"]]);
        yield "
            ";
        // line 89
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "description", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "errors", [], "any", false, false, false, 89)) > 0)) {
            // line 90
            yield "                <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                    ";
            // line 91
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "description", [], "any", false, false, false, 91), 'errors');
            yield "
                </div>
            ";
        }
        // line 94
        yield "        </div>

        <!-- Form Actions -->
        <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 20px; border-top: 2px solid rgba(47, 168, 255, 0.15);\">
            <button type=\"submit\" class=\"btn-submit\">
                <i class=\"fas fa-save\"></i>
                <span>";
        // line 100
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 100, $this->source); })()), "idCategorie", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Mettre a Jour";
        } else {
            yield "Creer";
        }
        yield "</span>
            </button>

            <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_hebergement");
        yield "\" class=\"btn-cancel\">
                <i class=\"fas fa-times\"></i>
                <span>Annuler</span>
            </a>
        </div>

        ";
        // line 109
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<style>
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
        border: 2px solid rgba(47, 168, 255, 0.15);
        border-radius: 8px;
        color: var(--text-primary);
        font-family: 'Inter', sans-serif;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    input:focus, select:focus, textarea:focus {
        outline: none !important;
        background: rgba(255, 255, 255, 0.08);
        border-color: #2FA8FF;
        box-shadow: 0 0 15px rgba(47, 168, 255, 0.2);
    }

    .file-input {
        display: none;
    }

    .btn-upload {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        width: 100%;
        padding: 16px 24px;
        background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
        color: #0B2D4A;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 15px;
        text-decoration: none;
    }

    .btn-upload:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(255, 193, 7, 0.35);
    }

    .btn-submit {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: linear-gradient(135deg, #2FA8FF 0%, #A7E3FF 100%);
        color: #0B2D4A;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(47, 168, 255, 0.35);
    }

    .btn-cancel {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: rgba(47, 168, 255, 0.1);
        color: #2FA8FF;
        border: 2px solid #2FA8FF;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-cancel:hover {
        background: #2FA8FF;
        color: #0B2D4A;
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .form-group {
            margin-bottom: 18px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const formElement = document.querySelector('.categorie-form');
    const fileInput = document.getElementById('";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "imageFile", [], "any", false, false, false, 219), "vars", [], "any", false, false, false, 219), "id", [], "any", false, false, false, 219), "html", null, true);
        yield "');
    const imagePreview = document.getElementById('imagePreview');
    const nomInput = document.getElementById('";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "nom", [], "any", false, false, false, 221), "vars", [], "any", false, false, false, 221), "id", [], "any", false, false, false, 221), "html", null, true);
        yield "');
    const descriptionInput = document.getElementById('";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "description", [], "any", false, false, false, 222), "vars", [], "any", false, false, false, 222), "id", [], "any", false, false, false, 222), "html", null, true);
        yield "');

    function showError(input, message) {
        let errorDiv = input.nextElementSibling;
        if (!errorDiv || !errorDiv.classList.contains('error-message')) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.style.cssText = 'color: #EF4444; font-size: 12px; margin-top: 6px;';
            input.parentNode.insertBefore(errorDiv, input.nextSibling);
        }
        errorDiv.innerHTML = `<i class=\"fas fa-exclamation-circle\"></i> \${message}`;
        errorDiv.style.display = 'block';
    }

    function clearError(input) {
        const errorDiv = input.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains('error-message')) {
            errorDiv.style.display = 'none';
        }
    }

    if (fileInput && imagePreview) {
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) {
                return;
            }

            const reader = new FileReader();
            reader.onload = function(event) {
                imagePreview.innerHTML = `<img src=\"\${event.target.result}\" alt=\"Preview\" style=\"max-width: 100%; max-height: 180px; border-radius: 8px; object-fit: cover;\">`;
            };
            reader.readAsDataURL(file);
        });
    }

    if (nomInput) {
        nomInput.addEventListener('input', function() {
            const value = this.value.trim();

            if (value === '') return;
            if (value.length < 3) {
                showError(this, 'Le nom de la categorie doit contenir au moins 3 caracteres');
            } else if (!/^[a-zA-ZÀ-ÿ\\s\\-']+\$/.test(value)) {
                showError(this, 'Le nom de la categorie ne doit contenir que des lettres, espaces et tirets');
            } else {
                clearError(this);
            }
        });

        nomInput.addEventListener('blur', function() {
            if (this.value.trim() === '') {
                showError(this, 'Le nom de la categorie ne doit pas etre vide');
            }
        });
    }

    if (descriptionInput) {
        descriptionInput.addEventListener('input', function() {
            const value = this.value.trim();

            if (value.length > 1000) {
                showError(this, 'La description ne doit pas depasser 1000 caracteres');
            } else {
                clearError(this);
            }
        });
    }

    if (formElement) {
        formElement.addEventListener('submit', function(event) {
            let hasError = false;

            if (nomInput) {
                const nomValue = nomInput.value.trim();
                if (nomValue === '') {
                    showError(nomInput, 'Le nom de la categorie ne doit pas etre vide');
                    hasError = true;
                } else if (nomValue.length < 3) {
                    showError(nomInput, 'Le nom de la categorie doit contenir au moins 3 caracteres');
                    hasError = true;
                } else if (!/^[a-zA-ZÀ-ÿ\\s\\-']+\$/.test(nomValue)) {
                    showError(nomInput, 'Le nom de la categorie ne doit contenir que des lettres, espaces et tirets');
                    hasError = true;
                }
            }

            if (descriptionInput) {
                const descriptionValue = descriptionInput.value.trim();
                if (descriptionValue.length > 1000) {
                    showError(descriptionInput, 'La description ne doit pas depasser 1000 caracteres');
                    hasError = true;
                }
            }

            if (fileInput && fileInput.files && fileInput.files[0]) {
                const file = fileInput.files[0];
                const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                if (!allowedTypes.includes(file.type)) {
                    alert('Veuillez televerser une image valide (JPG, PNG, GIF, WebP).');
                    hasError = true;
                }
                if (file.size > 5 * 1024 * 1024) {
                    alert('La taille de l\\'image ne doit pas depasser 5MB.');
                    hasError = true;
                }
            }

            if (hasError) {
                event.preventDefault();
            }
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
        return "admin/categories_hebergement/form.html.twig";
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
        return array (  420 => 222,  416 => 221,  411 => 219,  298 => 109,  289 => 103,  279 => 100,  271 => 94,  265 => 91,  262 => 90,  260 => 89,  256 => 88,  250 => 85,  244 => 81,  238 => 78,  235 => 77,  233 => 76,  229 => 75,  222 => 71,  214 => 65,  208 => 62,  205 => 61,  203 => 60,  191 => 51,  188 => 50,  186 => 46,  185 => 44,  178 => 39,  171 => 34,  165 => 32,  163 => 31,  152 => 22,  146 => 19,  142 => 17,  140 => 16,  134 => 13,  129 => 10,  116 => 9,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}{{ title }} - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-tags\"></i> {{ title }}
{% endblock %}

{% block content %}
<div style=\"max-width: 600px; margin: 0 auto;\">
    <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px solid rgba(47, 168, 255, 0.15); border-radius: 16px; padding: 40px; overflow: hidden;\">

        {{ form_start(form, {'attr': {'class': 'categorie-form', 'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}

        <!-- Form Errors -->
        {% if form.vars.errors|length > 0 %}
            <div style=\"background: rgba(239, 68, 68, 0.15); border: 1px solid rgba(239, 68, 68, 0.3); border-radius: 8px; padding: 15px; margin-bottom: 20px; color: #EF4444;\">
                <h4 style=\"margin: 0 0 10px 0; color: #EF4444;\">Erreurs du formulaire:</h4>
                {{ form_errors(form) }}
            </div>
        {% endif %}

        <!-- Image Upload -->
        <div class=\"form-group\" style=\"margin-bottom: 30px;\">
            <label style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Image de la Catégorie
            </label>
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: start;\">
                <div style=\"background: rgba(47, 168, 255, 0.1); border: 2px dashed rgba(47, 168, 255, 0.3); border-radius: 12px; padding: 20px; display: flex; align-items: center; justify-content: center; min-height: 220px; overflow: hidden;\">
                    <div id=\"imagePreview\" style=\"text-align: center; width: 100%;\">
                        {% if categorie.imagePath %}
                            <img src=\"{{ categorie.imagePath }}\" alt=\"Preview\" style=\"max-width: 100%; max-height: 180px; border-radius: 8px; object-fit: cover;\">
                        {% else %}
                            <div style=\"color: rgba(47, 168, 255, 0.5);\">
                                <i class=\"fas fa-image\" style=\"font-size: 44px; display: block; margin-bottom: 10px;\"></i>
                                <p style=\"font-size: 14px; margin: 0;\">Aucune image sélectionnée</p>
                            </div>
                        {% endif %}
                    </div>
                </div>

                <div>
                    <div style=\"position: relative;\">
                        {{ form_widget(form.imageFile, {
                            'attr': {
                                'id': form.imageFile.vars.id,
                                'class': 'file-input',
                                'accept': 'image/*'
                            }
                        }) }}
                        <label for=\"{{ form.imageFile.vars.id }}\" class=\"btn-upload\">
                            <i class=\"fas fa-cloud-upload-alt\"></i>
                            <span>Choisir une image</span>
                        </label>
                    </div>
                    <p style=\"font-size: 12px; color: var(--text-secondary); margin-top: 10px; margin-bottom: 0;\">
                        Format: JPG, PNG, GIF, WebP<br>
                        Taille max: 5MB
                    </p>
                    {% if form.imageFile.vars.errors|length > 0 %}
                        <div style=\"color: #EF4444; font-size: 12px; margin-top: 6px;\">
                            {{ form_errors(form.imageFile) }}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Nom Field -->
        <div class=\"form-group\" style=\"margin-bottom: 24px;\">
            <label for=\"{{ form.nom.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Nom de la Catégorie
                <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
            </label>
            {{ form_widget(form.nom, {'attr': {'id': form.nom.vars.id, 'placeholder': 'Ex: Luxe, Budget, Eco...', 'class': 'form-control'}}) }}
            {% if form.nom.vars.errors|length > 0 %}
                <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                    {{ form_errors(form.nom) }}
                </div>
            {% endif %}
        </div>

        <!-- Description Field -->
        <div class=\"form-group\" style=\"margin-bottom: 30px;\">
            <label for=\"{{ form.description.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Description
            </label>
            {{ form_widget(form.description, {'attr': {'id': form.description.vars.id, 'rows': 4, 'placeholder': 'Décrivez cette catégorie d\\'hébergement...', 'class': 'form-control'}}) }}
            {% if form.description.vars.errors|length > 0 %}
                <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                    {{ form_errors(form.description) }}
                </div>
            {% endif %}
        </div>

        <!-- Form Actions -->
        <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 20px; border-top: 2px solid rgba(47, 168, 255, 0.15);\">
            <button type=\"submit\" class=\"btn-submit\">
                <i class=\"fas fa-save\"></i>
                <span>{% if categorie.idCategorie %}Mettre a Jour{% else %}Creer{% endif %}</span>
            </button>

            <a href=\"{{ path('admin_categories_hebergement') }}\" class=\"btn-cancel\">
                <i class=\"fas fa-times\"></i>
                <span>Annuler</span>
            </a>
        </div>

        {{ form_end(form) }}
    </div>
</div>

<style>
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
        border: 2px solid rgba(47, 168, 255, 0.15);
        border-radius: 8px;
        color: var(--text-primary);
        font-family: 'Inter', sans-serif;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    input:focus, select:focus, textarea:focus {
        outline: none !important;
        background: rgba(255, 255, 255, 0.08);
        border-color: #2FA8FF;
        box-shadow: 0 0 15px rgba(47, 168, 255, 0.2);
    }

    .file-input {
        display: none;
    }

    .btn-upload {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        width: 100%;
        padding: 16px 24px;
        background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
        color: #0B2D4A;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 15px;
        text-decoration: none;
    }

    .btn-upload:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(255, 193, 7, 0.35);
    }

    .btn-submit {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: linear-gradient(135deg, #2FA8FF 0%, #A7E3FF 100%);
        color: #0B2D4A;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(47, 168, 255, 0.35);
    }

    .btn-cancel {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: rgba(47, 168, 255, 0.1);
        color: #2FA8FF;
        border: 2px solid #2FA8FF;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-cancel:hover {
        background: #2FA8FF;
        color: #0B2D4A;
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .form-group {
            margin-bottom: 18px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const formElement = document.querySelector('.categorie-form');
    const fileInput = document.getElementById('{{ form.imageFile.vars.id }}');
    const imagePreview = document.getElementById('imagePreview');
    const nomInput = document.getElementById('{{ form.nom.vars.id }}');
    const descriptionInput = document.getElementById('{{ form.description.vars.id }}');

    function showError(input, message) {
        let errorDiv = input.nextElementSibling;
        if (!errorDiv || !errorDiv.classList.contains('error-message')) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.style.cssText = 'color: #EF4444; font-size: 12px; margin-top: 6px;';
            input.parentNode.insertBefore(errorDiv, input.nextSibling);
        }
        errorDiv.innerHTML = `<i class=\"fas fa-exclamation-circle\"></i> \${message}`;
        errorDiv.style.display = 'block';
    }

    function clearError(input) {
        const errorDiv = input.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains('error-message')) {
            errorDiv.style.display = 'none';
        }
    }

    if (fileInput && imagePreview) {
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) {
                return;
            }

            const reader = new FileReader();
            reader.onload = function(event) {
                imagePreview.innerHTML = `<img src=\"\${event.target.result}\" alt=\"Preview\" style=\"max-width: 100%; max-height: 180px; border-radius: 8px; object-fit: cover;\">`;
            };
            reader.readAsDataURL(file);
        });
    }

    if (nomInput) {
        nomInput.addEventListener('input', function() {
            const value = this.value.trim();

            if (value === '') return;
            if (value.length < 3) {
                showError(this, 'Le nom de la categorie doit contenir au moins 3 caracteres');
            } else if (!/^[a-zA-ZÀ-ÿ\\s\\-']+\$/.test(value)) {
                showError(this, 'Le nom de la categorie ne doit contenir que des lettres, espaces et tirets');
            } else {
                clearError(this);
            }
        });

        nomInput.addEventListener('blur', function() {
            if (this.value.trim() === '') {
                showError(this, 'Le nom de la categorie ne doit pas etre vide');
            }
        });
    }

    if (descriptionInput) {
        descriptionInput.addEventListener('input', function() {
            const value = this.value.trim();

            if (value.length > 1000) {
                showError(this, 'La description ne doit pas depasser 1000 caracteres');
            } else {
                clearError(this);
            }
        });
    }

    if (formElement) {
        formElement.addEventListener('submit', function(event) {
            let hasError = false;

            if (nomInput) {
                const nomValue = nomInput.value.trim();
                if (nomValue === '') {
                    showError(nomInput, 'Le nom de la categorie ne doit pas etre vide');
                    hasError = true;
                } else if (nomValue.length < 3) {
                    showError(nomInput, 'Le nom de la categorie doit contenir au moins 3 caracteres');
                    hasError = true;
                } else if (!/^[a-zA-ZÀ-ÿ\\s\\-']+\$/.test(nomValue)) {
                    showError(nomInput, 'Le nom de la categorie ne doit contenir que des lettres, espaces et tirets');
                    hasError = true;
                }
            }

            if (descriptionInput) {
                const descriptionValue = descriptionInput.value.trim();
                if (descriptionValue.length > 1000) {
                    showError(descriptionInput, 'La description ne doit pas depasser 1000 caracteres');
                    hasError = true;
                }
            }

            if (fileInput && fileInput.files && fileInput.files[0]) {
                const file = fileInput.files[0];
                const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                if (!allowedTypes.includes(file.type)) {
                    alert('Veuillez televerser une image valide (JPG, PNG, GIF, WebP).');
                    hasError = true;
                }
                if (file.size > 5 * 1024 * 1024) {
                    alert('La taille de l\\'image ne doit pas depasser 5MB.');
                    hasError = true;
                }
            }

            if (hasError) {
                event.preventDefault();
            }
        });
    }
});
</script>
{% endblock %}
", "admin/categories_hebergement/form.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\categories_hebergement\\form.html.twig");
    }
}
