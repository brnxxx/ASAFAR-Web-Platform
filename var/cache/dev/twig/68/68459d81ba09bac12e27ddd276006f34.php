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

/* admin/hebergements/form.html.twig */
class __TwigTemplate_39e4639291621e0a70d0e431c1f9bf5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hebergements/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hebergements/form.html.twig"));

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
        yield "    <i class=\"fas fa-hotel\"></i> ";
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
        yield "<div id=\"hebergementAiWorkspace\"
    data-existing-image-path=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["hebergement"] ?? null), "imagePath", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 11, $this->source); })()), "imagePath", [], "any", false, false, false, 11), "")) : ("")), "html_attr");
        yield "\"
    data-existing-gallery-images=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["hebergement"] ?? null), "galleryImages", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 12, $this->source); })()), "galleryImages", [], "any", false, false, false, 12), [])) : ([]))), "html_attr");
        yield "\"
    data-is-create=\"";
        // line 13
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 13, $this->source); })()), "idHebergement", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("0") : ("1"));
        yield "\"
    style=\"max-width: 900px; margin: 0 auto;\">
    <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px solid rgba(47, 168, 255, 0.15); border-radius: 16px; padding: 40px; overflow: hidden;\">

        ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => "hebergement-form", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "

        <!-- Form Errors -->
        ";
        // line 20
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20)) > 0)) {
            // line 21
            yield "            <div style=\"background: rgba(239, 68, 68, 0.15); border: 1px solid rgba(239, 68, 68, 0.3); border-radius: 8px; padding: 15px; margin-bottom: 20px; color: #EF4444;\">
                <h4 style=\"margin: 0 0 10px 0; color: #EF4444;\">Erreurs du formulaire:</h4>
                ";
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'errors');
            yield "
            </div>
        ";
        }
        // line 26
        yield "
        <!-- Image Upload Section -->
        <div class=\"form-group\" style=\"margin-bottom: 30px;\">
            <label style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Image de l'Hebergement
            </label>
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: start;\">
                <!-- Image Preview -->
                <div style=\"background: rgba(47, 168, 255, 0.1); border: 2px dashed rgba(47, 168, 255, 0.3); border-radius: 12px; padding: 20px; display: flex; align-items: center; justify-content: center; min-height: 250px; overflow: hidden;\">
                    <div id=\"imagePreview\" style=\"text-align: center; width: 100%;\">
                        ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 36, $this->source); })()), "imagePath", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 37, $this->source); })()), "imagePath", [], "any", false, false, false, 37), "html", null, true);
            yield "\" alt=\"Preview\" style=\"max-width: 100%; max-height: 200px; border-radius: 8px; object-fit: cover;\">
                        ";
        } else {
            // line 39
            yield "                            <div style=\"color: rgba(47, 168, 255, 0.5);\">
                                <i class=\"fas fa-image\" style=\"font-size: 48px; display: block; margin-bottom: 10px;\"></i>
                                <p style=\"font-size: 14px;\">Aucune image sélectionnée</p>
                            </div>
                        ";
        }
        // line 44
        yield "                    </div>
                </div>

                    <!-- Galerie Upload Section -->
                    <div class=\"form-group\" style=\"margin-bottom: 30px;\">
                        <label style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                            Galerie Photos
                        </label>
                        <div style=\"background: rgba(47, 168, 255, 0.08); border: 2px dashed rgba(47, 168, 255, 0.25); border-radius: 12px; padding: 20px;\">
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "galleryImages", [], "any", false, false, false, 53), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 55
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "galleryImages", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "class" => "form-control file-input file-input-gallery", "accept" => "image/*", "multiple" => "multiple"]]);
        // line 60
        yield "
                            <label for=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "galleryImages", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        yield "\" class=\"btn-upload\" style=\"margin-bottom: 14px;\">
                                <i class=\"fas fa-images\"></i>
                                <span>Ajouter plusieurs photos</span>
                            </label>
                            <p style=\"font-size: 12px; color: var(--text-secondary); margin-top: 0; margin-bottom: 14px;\">
                                Plus il y a de photos, plus l'IA peut classer celles qui attirent le mieux les clients.
                            </p>
                            <div id=\"galleryPreview\" style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 12px;\">
                                ";
        // line 69
        $context["existingGalleryImages"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["hebergement"] ?? null), "galleryImages", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 69, $this->source); })()), "galleryImages", [], "any", false, false, false, 69), [])) : ([]));
        // line 70
        yield "                                ";
        if ((($tmp = (isset($context["existingGalleryImages"]) || array_key_exists("existingGalleryImages", $context) ? $context["existingGalleryImages"] : (function () { throw new RuntimeError('Variable "existingGalleryImages" does not exist.', 70, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["existingGalleryImages"]) || array_key_exists("existingGalleryImages", $context) ? $context["existingGalleryImages"] : (function () { throw new RuntimeError('Variable "existingGalleryImages" does not exist.', 71, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["galleryImage"]) {
                // line 72
                yield "                                        <div data-gallery-existing=\"1\" style=\"position: relative; border-radius: 10px; overflow: hidden; min-height: 110px; background: rgba(11, 45, 74, 0.2); border: 1px solid rgba(47, 168, 255, 0.15);\">
                                            <img src=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(Twig\Extension\CoreExtension::trim($context["galleryImage"], "/")), "html", null, true);
                yield "\" alt=\"Galerie ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73), "html", null, true);
                yield "\" style=\"width: 100%; height: 100%; object-fit: cover; display: block;\">
                                        </div>
                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['galleryImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            yield "                                ";
        } else {
            // line 77
            yield "                                    <div id=\"galleryPreviewEmpty\" style=\"grid-column: 1 / -1; color: rgba(47, 168, 255, 0.5); text-align: center; padding: 20px 0;\">
                                        <i class=\"fas fa-images\" style=\"font-size: 34px; display: block; margin-bottom: 8px;\"></i>
                                        <p style=\"margin: 0; font-size: 13px;\">Aucune photo de galerie sélectionnée</p>
                                    </div>
                                ";
        }
        // line 82
        yield "                            </div>
                        </div>
                    </div>

                <!-- Upload Input -->
                <div>
                    <div style=\"position: relative;\">
                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "imagePath", [], "any", false, false, false, 89), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 91
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "imagePath", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91), "class" => "file-input", "accept" => "image/*"]]);
        // line 95
        yield "
                        <label for=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "imagePath", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96), "html", null, true);
        yield "\" class=\"btn-upload\">
                            <i class=\"fas fa-cloud-upload-alt\"></i>
                            <span>Choisir une image</span>
                        </label>
                    </div>
                    <p style=\"font-size: 12px; color: var(--text-secondary); margin-top: 10px; margin-bottom: 0;\">
                        Format: JPG, PNG, GIF, WebP<br>
                        Taille max: 5MB
                    </p>
                </div>
            </div>
        </div>

        <!-- Nom and Type Row -->
        <div class=\"form-row\">
            <div class=\"form-group\">
                <label for=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "nom", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Nom de l'Hebergement
                    <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                </label>
                ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "nom", [], "any", false, false, false, 116), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "nom", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116), "placeholder" => "Ex: Villa Luxe", "class" => "form-control"]]);
        yield "
                ";
        // line 117
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "nom", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "errors", [], "any", false, false, false, 117)) > 0)) {
            // line 118
            yield "                    <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                        ";
            // line 119
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "nom", [], "any", false, false, false, 119), 'errors');
            yield "
                    </div>
                ";
        }
        // line 122
        yield "            </div>

            <div class=\"form-group\">
                <label for=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "type", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Type d'Hebergement
                </label>
                ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "type", [], "any", false, false, false, 128), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "type", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128), "class" => "form-control select-styled"]]);
        yield "
            </div>
        </div>

        <!-- Localisation and Categorie Row -->
        <div class=\"form-row\">
            <div class=\"form-group\">
                <label for=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "localisation", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Localisation
                    <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                </label>
                ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "localisation", [], "any", false, false, false, 139), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "localisation", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "id", [], "any", false, false, false, 139), "class" => "form-control select-styled"]]);
        yield "
            </div>

            <div class=\"form-group\">
                <label for=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "categorie", [], "any", false, false, false, 143), "vars", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Categorie
                </label>
                ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "categorie", [], "any", false, false, false, 146), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "categorie", [], "any", false, false, false, 146), "vars", [], "any", false, false, false, 146), "id", [], "any", false, false, false, 146), "class" => "form-control select-styled"]]);
        yield "
            </div>
        </div>

        <!-- Location Picker Section -->
        <div class=\"form-group\" style=\"background: rgba(47, 168, 255, 0.08); border: 2px solid rgba(47, 168, 255, 0.2); border-radius: 12px; padding: 20px; margin-bottom: 24px;\">
            <label style=\"display: block; margin-bottom: 15px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                🗺️ Localisation Exacte (Latitude & Longitude)
            </label>

            <!-- Latitude and Longitude Row -->
            <div class=\"form-row\" style=\"margin-bottom: 15px;\">
                <div class=\"form-group\">
                    <label style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                        Latitude
                    </label>
                    <input type=\"text\" id=\"latitudeInput\" placeholder=\"0.0000\" readonly style=\"width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 2px solid rgba(47, 168, 255, 0.15); border-radius: 8px; color: var(--text-primary); font-family: 'Inter', sans-serif; cursor: not-allowed;\">
                    ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "latitude", [], "any", false, false, false, 163), 'widget');
        yield "
                </div>
                <div class=\"form-group\">
                    <label style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                        Longitude
                    </label>
                    <input type=\"text\" id=\"longitudeInput\" placeholder=\"0.0000\" readonly style=\"width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 2px solid rgba(47, 168, 255, 0.15); border-radius: 8px; color: var(--text-primary); font-family: 'Inter', sans-serif; cursor: not-allowed;\">
                    ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "longitude", [], "any", false, false, false, 170), 'widget');
        yield "
                </div>
            </div>

            <!-- Map Button -->
            <button type=\"button\" class=\"btn-map-picker\" onclick=\"openMapPicker()\" style=\"width: 100%; margin-bottom: 10px;\">
                <i class=\"fas fa-map-marker-alt\"></i>
                Choisir l'emplacement sur la Carte
            </button>

            <div id=\"coordsStatus\" style=\"font-size: 12px; color: #2FA8FF; display: none; padding: 10px; background: rgba(47, 168, 255, 0.1); border-radius: 8px; text-align: center;\">
                ✓ Coordonnées sélectionnées
            </div>
        </div>

        <!-- Description -->
        <div class=\"form-group\">
            <label for=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "description", [], "any", false, false, false, 187), "vars", [], "any", false, false, false, 187), "id", [], "any", false, false, false, 187), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Description
                <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
            </label>
            ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "description", [], "any", false, false, false, 191), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "description", [], "any", false, false, false, 191), "vars", [], "any", false, false, false, 191), "id", [], "any", false, false, false, 191), "rows" => 4, "placeholder" => "Décrivez votre hebergement...", "class" => "form-control"]]);
        yield "
            ";
        // line 192
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "description", [], "any", false, false, false, 192), "vars", [], "any", false, false, false, 192), "errors", [], "any", false, false, false, 192)) > 0)) {
            // line 193
            yield "                <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                    ";
            // line 194
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "description", [], "any", false, false, false, 194), 'errors');
            yield "
                </div>
            ";
        }
        // line 197
        yield "        </div>

        <!-- AI Assistant -->
        <div style=\"background: linear-gradient(135deg, rgba(11, 45, 74, 0.95), rgba(10, 39, 64, 0.9)); border: 1px solid rgba(47, 168, 255, 0.2); border-radius: 16px; padding: 22px; margin-bottom: 24px; box-shadow: 0 12px 30px rgba(0,0,0,0.18);\">
            <div style=\"display: flex; justify-content: space-between; gap: 18px; align-items: flex-start; flex-wrap: wrap; margin-bottom: 16px;\">
                <div>
                    <div style=\"display: inline-flex; align-items: center; gap: 8px; color: #A7E3FF; font-size: 12px; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 8px;\">
                        <i class=\"fas fa-wand-magic-sparkles\"></i>
                        Assistant IA
                    </div>
                    <h3 style=\"margin: 0; color: #FFFFFF; font-size: 20px;\">Optimisation automatique des photos et de la description</h3>
                    <p style=\"margin: 8px 0 0; color: rgba(255,255,255,0.72); line-height: 1.6; max-width: 720px;\">
                        L'IA analyse la photo principale et la galerie, estime ce qui attire le plus les clients, puis propose une description plus vendeuse.
                    </p>
                </div>
                <button type=\"button\" id=\"aiAnalyzeBtn\" class=\"btn-submit\" style=\"white-space: nowrap;\">
                    <i class=\"fas fa-bolt\"></i>
                    <span>Analyser avec l'IA</span>
                </button>
            </div>

            <div id=\"aiStatus\" style=\"display: none; margin-bottom: 16px; padding: 12px 14px; border-radius: 10px; background: rgba(47, 168, 255, 0.12); color: #A7E3FF; font-size: 14px;\"></div>

            <div id=\"aiResult\" style=\"display: none; border-radius: 14px; background: rgba(255,255,255,0.03); border: 1px solid rgba(47,168,255,0.12); padding: 18px;\">
                <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 14px; margin-bottom: 16px;\">
                    <div style=\"background: rgba(47,168,255,0.08); border-radius: 12px; padding: 14px;\">
                        <div style=\"font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: rgba(255,255,255,0.55); margin-bottom: 6px;\">Score photo</div>
                        <div id=\"aiScore\" style=\"font-size: 34px; font-weight: 700; color: #34D399;\">0</div>
                    </div>
                    <div style=\"background: rgba(47,168,255,0.08); border-radius: 12px; padding: 14px;\">
                        <div style=\"font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: rgba(255,255,255,0.55); margin-bottom: 6px;\">Photo couverture</div>
                        <div id=\"aiCoverPhoto\" style=\"font-size: 16px; font-weight: 600; color: #FFFFFF; line-height: 1.5;\">-</div>
                    </div>
                    <div style=\"background: rgba(47,168,255,0.08); border-radius: 12px; padding: 14px;\">
                        <div style=\"font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: rgba(255,255,255,0.55); margin-bottom: 6px;\">Résumé</div>
                        <div id=\"aiSummary\" style=\"font-size: 15px; font-weight: 500; color: #FFFFFF; line-height: 1.5;\">-</div>
                    </div>
                </div>

                <div style=\"display: grid; grid-template-columns: 1.25fr 0.95fr; gap: 16px;\">
                    <div style=\"background: rgba(255,255,255,0.02); border-radius: 12px; padding: 14px; border: 1px solid rgba(47,168,255,0.08);\">
                        <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin-bottom: 10px;\">Description proposée</div>
                        <div id=\"aiDescription\" style=\"font-size: 14px; color: rgba(255,255,255,0.9); line-height: 1.7; white-space: pre-line;\"></div>
                        <button type=\"button\" id=\"applyAiDescriptionBtn\" class=\"btn-ai-apply\" style=\"margin-top: 14px; padding: 10px 18px; font-size: 13px;\">
                            <i class=\"fas fa-arrow-down\"></i>
                            <span>Utiliser cette description</span>
                        </button>
                    </div>

                    <div style=\"background: rgba(255,255,255,0.02); border-radius: 12px; padding: 14px; border: 1px solid rgba(47,168,255,0.08);\">
                        <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin-bottom: 10px;\">Photos les plus attractives</div>
                        <ul id=\"aiBestPhotos\" style=\"margin: 0; padding-left: 18px; color: rgba(255,255,255,0.88); line-height: 1.65;\"></ul>
                        <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin: 16px 0 10px;\">Remarques par photo</div>
                        <ul id=\"aiPhotoRemarks\" style=\"margin: 0; padding-left: 18px; color: rgba(255,255,255,0.88); line-height: 1.65;\"></ul>
                        <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin: 16px 0 10px;\">Photos à améliorer</div>
                        <ul id=\"aiPhotosToImprove\" style=\"margin: 0; padding-left: 18px; color: rgba(255,255,255,0.88); line-height: 1.65;\"></ul>
                        <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin: 16px 0 10px;\">Photos manquantes</div>
                        <ul id=\"aiMissingPhotos\" style=\"margin: 0; padding-left: 18px; color: rgba(255,255,255,0.88); line-height: 1.65;\"></ul>
                    </div>
                </div>

                <div style=\"margin-top: 16px; background: rgba(47,168,255,0.06); border-radius: 12px; padding: 14px;\">
                    <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin-bottom: 8px;\">Conseils actionnables</div>
                    <ul id=\"aiRecommendations\" style=\"margin: 0; padding-left: 18px; color: rgba(255,255,255,0.88); line-height: 1.65;\"></ul>
                </div>
            </div>
        </div>

        <!-- Prix and Disponibilite Row -->
        <div class=\"form-row\">
            <div class=\"form-group\">
                <label for=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "prixParNuit", [], "any", false, false, false, 268), "vars", [], "any", false, false, false, 268), "id", [], "any", false, false, false, 268), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Prix par Nuit
                </label>
                ";
        // line 271
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "prixParNuit", [], "any", false, false, false, 271), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "prixParNuit", [], "any", false, false, false, 271), "vars", [], "any", false, false, false, 271), "id", [], "any", false, false, false, 271), "type" => "number", "step" => "0.01", "min" => "0", "placeholder" => "0.00", "class" => "form-control"]]);
        yield "
            </div>

            <div class=\"form-group\">
                <label for=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "disponibilite", [], "any", false, false, false, 275), "vars", [], "any", false, false, false, 275), "id", [], "any", false, false, false, 275), "html", null, true);
        yield "\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Disponibilite
                </label>
                ";
        // line 278
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "disponibilite", [], "any", false, false, false, 278), 'widget', ["attr" => ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "disponibilite", [], "any", false, false, false, 278), "vars", [], "any", false, false, false, 278), "id", [], "any", false, false, false, 278), "class" => "form-control select-styled"]]);
        yield "
            </div>
        </div>

        <!-- Form Actions -->
        <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 20px; border-top: 2px solid rgba(47, 168, 255, 0.15);\">
            <button id=\"createSubmitBtn\" type=\"submit\" class=\"btn-submit\">
                <i class=\"fas fa-save\"></i>
                <span>";
        // line 286
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 286, $this->source); })()), "idHebergement", [], "any", false, false, false, 286)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Mettre a Jour";
        } else {
            yield "Creer";
        }
        yield "</span>
            </button>

            <a href=\"";
        // line 289
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergements");
        yield "\" class=\"btn-cancel\">
                <i class=\"fas fa-times\"></i>
                <span>Annuler</span>
            </a>
        </div>

        <input type=\"hidden\" id=\"aiScoreInput\" name=\"ai_score\" value=\"0\">
        <input type=\"hidden\" id=\"aiAnalyzedInput\" name=\"ai_analyzed\" value=\"0\">
        ";
        // line 297
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 297, $this->source); })()), "idHebergement", [], "any", false, false, false, 297)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 298
            yield "            <div id=\"aiGateHint\" style=\"margin-top: 14px; color: #FCA5A5; font-size: 13px;\">
                Analyse IA obligatoire: pour creer cet hebergement, le score doit etre strictement superieur a 60/100.
            </div>
        ";
        }
        // line 302
        yield "
        ";
        // line 303
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), 'form_end');
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
        border: 2px solid rgba(47, 168, 255, 0.15);
        border-radius: 8px;
        color: var(--text-primary);
        font-family: 'Inter', sans-serif;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-map-picker {
        width: 100%;
        padding: 12px 16px;
        background: rgba(47, 168, 255, 0.3);
        border: 2px solid #2FA8FF;
        border-radius: 8px;
        color: #2FA8FF;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        font-size: 13px;
    }

    .btn-map-picker:hover {
        background: rgba(47, 168, 255, 0.5);
    }

    select.select-styled {
        appearance: none;
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%232FA8FF' stroke-width='2'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 20px;
        padding-right: 40px;
    }

    select.select-styled option {
        background: #0B2D4A;
        color: white;
    }

    input:focus, select:focus, textarea:focus {
        outline: none !important;
        background: rgba(255, 255, 255, 0.08);
        border-color: #2FA8FF;
        box-shadow: 0 0 15px rgba(47, 168, 255, 0.2);
    }

    /* File Input Styling */
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

    .btn-ai-apply {
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

    .btn-ai-apply:hover {
        background: #2FA8FF;
        color: #0B2D4A;
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const formElement = document.querySelector('.hebergement-form');
    const workspace = document.getElementById('hebergementAiWorkspace');
    const fileInput = document.getElementById('";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 477, $this->source); })()), "imagePath", [], "any", false, false, false, 477), "vars", [], "any", false, false, false, 477), "id", [], "any", false, false, false, 477), "html", null, true);
        yield "');
    const galleryInput = document.getElementById('";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 478, $this->source); })()), "galleryImages", [], "any", false, false, false, 478), "vars", [], "any", false, false, false, 478), "id", [], "any", false, false, false, 478), "html", null, true);
        yield "');
    const imagePreview = document.getElementById('imagePreview');
    const galleryPreview = document.getElementById('galleryPreview');
    const latInput = document.getElementById('latitudeInput');
    const lonInput = document.getElementById('longitudeInput');
    const coordsStatus = document.getElementById('coordsStatus');
    const descriptionInput = document.getElementById('";
        // line 484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 484, $this->source); })()), "description", [], "any", false, false, false, 484), "vars", [], "any", false, false, false, 484), "id", [], "any", false, false, false, 484), "html", null, true);
        yield "');
    const nomInput = document.getElementById('";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 485, $this->source); })()), "nom", [], "any", false, false, false, 485), "vars", [], "any", false, false, false, 485), "id", [], "any", false, false, false, 485), "html", null, true);
        yield "');
    const typeInput = document.getElementById('";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 486, $this->source); })()), "type", [], "any", false, false, false, 486), "vars", [], "any", false, false, false, 486), "id", [], "any", false, false, false, 486), "html", null, true);
        yield "');
    const localisationInput = document.getElementById('";
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 487, $this->source); })()), "localisation", [], "any", false, false, false, 487), "vars", [], "any", false, false, false, 487), "id", [], "any", false, false, false, 487), "html", null, true);
        yield "');
    const prixInput = document.getElementById('";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 488, $this->source); })()), "prixParNuit", [], "any", false, false, false, 488), "vars", [], "any", false, false, false, 488), "id", [], "any", false, false, false, 488), "html", null, true);
        yield "');
    const disponibiliteInput = document.getElementById('";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 489, $this->source); })()), "disponibilite", [], "any", false, false, false, 489), "vars", [], "any", false, false, false, 489), "id", [], "any", false, false, false, 489), "html", null, true);
        yield "');
    const aiAnalyzeBtn = document.getElementById('aiAnalyzeBtn');
    const aiStatus = document.getElementById('aiStatus');
    const aiResult = document.getElementById('aiResult');
    const aiScore = document.getElementById('aiScore');
    const aiCoverPhoto = document.getElementById('aiCoverPhoto');
    const aiSummary = document.getElementById('aiSummary');
    const aiDescription = document.getElementById('aiDescription');
    const aiBestPhotos = document.getElementById('aiBestPhotos');
    const aiPhotoRemarks = document.getElementById('aiPhotoRemarks');
    const aiPhotosToImprove = document.getElementById('aiPhotosToImprove');
    const aiMissingPhotos = document.getElementById('aiMissingPhotos');
    const aiRecommendations = document.getElementById('aiRecommendations');
    const applyAiDescriptionBtn = document.getElementById('applyAiDescriptionBtn');
    const aiScoreInput = document.getElementById('aiScoreInput');
    const aiAnalyzedInput = document.getElementById('aiAnalyzedInput');
    const createSubmitBtn = document.getElementById('createSubmitBtn');
    const aiGateHint = document.getElementById('aiGateHint');
    const isCreateMode = workspace?.dataset?.isCreate === '1';
    let currentAiDescription = '';

    if (applyAiDescriptionBtn) {
        applyAiDescriptionBtn.disabled = true;
        applyAiDescriptionBtn.style.opacity = '0.55';
        applyAiDescriptionBtn.style.cursor = 'not-allowed';
    }

    function updateCreateGate(scoreValue, analyzed) {
        if (!isCreateMode || !createSubmitBtn) {
            return;
        }

        const numericScore = Number.isFinite(Number(scoreValue)) ? Number(scoreValue) : 0;
        const canCreate = analyzed && numericScore > 60;

        createSubmitBtn.disabled = !canCreate;
        createSubmitBtn.style.opacity = canCreate ? '1' : '0.5';
        createSubmitBtn.style.cursor = canCreate ? 'pointer' : 'not-allowed';

        if (aiGateHint) {
            aiGateHint.style.color = canCreate ? '#86EFAC' : '#FCA5A5';
            aiGateHint.textContent = canCreate
                ? `Score IA \${Math.round(numericScore)}/100 valide. Creation autorisee.`
                : 'Analyse IA obligatoire: pour creer cet hebergement, le score doit etre strictement superieur a 60/100.';
        }
    }

    function showAiStatus(message, isError = false) {
        if (!aiStatus) {
            return;
        }

        aiStatus.textContent = message;
        aiStatus.style.display = 'block';
        aiStatus.style.background = isError ? 'rgba(239, 68, 68, 0.14)' : 'rgba(47, 168, 255, 0.12)';
        aiStatus.style.color = isError ? '#FCA5A5' : '#A7E3FF';
    }

    function renderList(target, items, fallbackText) {
        if (!target) {
            return;
        }

        target.innerHTML = '';

        if (!Array.isArray(items) || items.length === 0) {
            const li = document.createElement('li');
            li.textContent = fallbackText;
            target.appendChild(li);
            return;
        }

        items.forEach(function(item) {
            const li = document.createElement('li');
            if (typeof item === 'string') {
                li.textContent = item;
            } else if (item && typeof item === 'object') {
                const label = item.label || item.name || 'Photo';
                const sceneLabel = item.sceneLabel || item.scene || '';
                const remark = item.remark || item.comment || '';
                const why = item.why || item.reason || '';
                const action = item.action || '';
                const score = typeof item.score === 'number' ? ` (\${item.score}/100)` : '';
                const sceneSuffix = sceneLabel ? ` [\${sceneLabel}]` : '';
                if (remark && action) {
                    li.textContent = `\${label}\${sceneSuffix}\${score} — \${remark} Action: \${action}`;
                } else if (remark) {
                    li.textContent = `\${label}\${sceneSuffix}\${score} — \${remark}`;
                } else if (why && action) {
                    li.textContent = `\${label}\${sceneSuffix}\${score} — \${why} Action: \${action}`;
                } else if (why) {
                    li.textContent = `\${label}\${sceneSuffix}\${score} — \${why}`;
                } else if (action) {
                    li.textContent = `\${label}\${sceneSuffix}\${score} — Action: \${action}`;
                } else {
                    li.textContent = `\${label}\${sceneSuffix}\${score}`;
                }
            }
            target.appendChild(li);
        });
    }

    function applyAiResult(data) {
        if (!aiResult || !aiScore || !aiCoverPhoto || !aiSummary || !aiDescription) {
            return;
        }

        const finalScore = Number(data.score ?? 0);
        currentAiDescription = String(data.descriptionSuggestion || '').trim();
        aiResult.style.display = 'block';
        aiScore.textContent = String(finalScore);
        aiCoverPhoto.textContent = data.bestCoverPhoto || 'Photo principale';
        aiSummary.textContent = data.recommendationSummary || 'Analyse terminée.';
        aiDescription.textContent = currentAiDescription;
        if (applyAiDescriptionBtn) {
            const canApply = currentAiDescription !== '';
            applyAiDescriptionBtn.disabled = !canApply;
            applyAiDescriptionBtn.style.opacity = canApply ? '1' : '0.55';
            applyAiDescriptionBtn.style.cursor = canApply ? 'pointer' : 'not-allowed';
        }
        if (aiScoreInput) {
            aiScoreInput.value = String(finalScore);
        }
        if (aiAnalyzedInput) {
            aiAnalyzedInput.value = '1';
        }
        updateCreateGate(finalScore, true);
        renderList(aiBestPhotos, data.bestPhotos || [], 'Aucune photo analysée.');
        renderList(aiPhotoRemarks, data.photoRemarks || [], 'Aucune remarque photo disponible.');
        renderList(aiPhotosToImprove, data.photosToImprove || [], 'Aucune photo critique à améliorer.');
        renderList(aiMissingPhotos, data.missingPhotos || [], 'Aucune photo manquante détectée.');
        renderList(aiRecommendations, data.recommendations || [], 'Aucune recommandation.');
    }

    function getLabelFromPath(path) {
        const cleaned = String(path || '').split('?')[0].split('#')[0];
        const parts = cleaned.split('/').filter(Boolean);
        const fileName = parts.length > 0 ? parts[parts.length - 1] : cleaned;
        return fileName.replace(/\\.[^.]+\$/, '') || 'Photo';
    }

    function analyzeImageBlob(blob) {
        return new Promise(function(resolve) {
            if (!blob) {
                resolve(null);
                return;
            }

            const image = new Image();
            const objectUrl = URL.createObjectURL(blob);

            image.onload = function() {
                try {
                    const canvas = document.createElement('canvas');
                    canvas.width = image.naturalWidth || image.width || 0;
                    canvas.height = image.naturalHeight || image.height || 0;

                    if (!canvas.width || !canvas.height) {
                        URL.revokeObjectURL(objectUrl);
                        resolve(null);
                        return;
                    }

                    const context = canvas.getContext('2d', { willReadFrequently: true });
                    if (!context) {
                        URL.revokeObjectURL(objectUrl);
                        resolve({ width: canvas.width, height: canvas.height, brightness: null, contrast: null });
                        return;
                    }

                    context.drawImage(image, 0, 0);
                    const sampleWidth = Math.min(canvas.width, 36);
                    const sampleHeight = Math.min(canvas.height, 36);
                    const stepX = Math.max(1, Math.floor(canvas.width / sampleWidth));
                    const stepY = Math.max(1, Math.floor(canvas.height / sampleHeight));
                    const values = [];

                    for (let x = 0; x < canvas.width; x += stepX) {
                        for (let y = 0; y < canvas.height; y += stepY) {
                            const pixel = context.getImageData(x, y, 1, 1).data;
                            values.push((0.299 * pixel[0]) + (0.587 * pixel[1]) + (0.114 * pixel[2]));
                        }
                    }

                    if (values.length === 0) {
                        URL.revokeObjectURL(objectUrl);
                        resolve({ width: canvas.width, height: canvas.height, brightness: null, contrast: null });
                        return;
                    }

                    const mean = values.reduce(function(sum, value) {
                        return sum + value;
                    }, 0) / values.length;

                    const variance = values.reduce(function(sum, value) {
                        return sum + Math.pow(value - mean, 2);
                    }, 0) / values.length;

                    URL.revokeObjectURL(objectUrl);
                    resolve({
                        width: canvas.width,
                        height: canvas.height,
                        brightness: Math.round(mean),
                        contrast: Math.round(Math.sqrt(variance))
                    });
                } catch (error) {
                    URL.revokeObjectURL(objectUrl);
                    resolve(null);
                }
            };

            image.onerror = function() {
                URL.revokeObjectURL(objectUrl);
                resolve(null);
            };

            image.src = objectUrl;
        });
    }

    function analyzeImageUrl(url) {
        return new Promise(function(resolve) {
            if (!url) {
                resolve(null);
                return;
            }

            const image = new Image();
            image.crossOrigin = 'anonymous';

            image.onload = function() {
                try {
                    const canvas = document.createElement('canvas');
                    canvas.width = image.naturalWidth || image.width || 0;
                    canvas.height = image.naturalHeight || image.height || 0;

                    if (!canvas.width || !canvas.height) {
                        resolve(null);
                        return;
                    }

                    const context = canvas.getContext('2d', { willReadFrequently: true });
                    if (!context) {
                        resolve({ width: canvas.width, height: canvas.height, brightness: null, contrast: null });
                        return;
                    }

                    context.drawImage(image, 0, 0);
                    const sampleWidth = Math.min(canvas.width, 36);
                    const sampleHeight = Math.min(canvas.height, 36);
                    const stepX = Math.max(1, Math.floor(canvas.width / sampleWidth));
                    const stepY = Math.max(1, Math.floor(canvas.height / sampleHeight));
                    const values = [];

                    for (let x = 0; x < canvas.width; x += stepX) {
                        for (let y = 0; y < canvas.height; y += stepY) {
                            const pixel = context.getImageData(x, y, 1, 1).data;
                            values.push((0.299 * pixel[0]) + (0.587 * pixel[1]) + (0.114 * pixel[2]));
                        }
                    }

                    if (values.length === 0) {
                        resolve({ width: canvas.width, height: canvas.height, brightness: null, contrast: null });
                        return;
                    }

                    const mean = values.reduce(function(sum, value) {
                        return sum + value;
                    }, 0) / values.length;

                    const variance = values.reduce(function(sum, value) {
                        return sum + Math.pow(value - mean, 2);
                    }, 0) / values.length;

                    resolve({
                        width: canvas.width,
                        height: canvas.height,
                        brightness: Math.round(mean),
                        contrast: Math.round(Math.sqrt(variance))
                    });
                } catch (error) {
                    resolve(null);
                }
            };

            image.onerror = function() {
                resolve(null);
            };

            image.src = url;
        });
    }

    function buildRemark(label, metrics, sourceType, type, location, isMainPhoto, index) {
        const cleanLabel = label || `Photo \${index + 1}`;
        const aspect = metrics && metrics.width && metrics.height ? (metrics.width / metrics.height) : 0;
        const brightness = metrics?.brightness ?? null;
        const contrast = metrics?.contrast ?? null;
        const lowerLabel = cleanLabel.toLowerCase();
        const typeName = type ? type.toLowerCase() : 'hébergement';

        if (lowerLabel.includes('chambre') || lowerLabel.includes('room') || lowerLabel.includes('bed')) {
            return `\${cleanLabel}: bonne photo pour rassurer sur le confort du \${typeName}.`;
        }

        if (lowerLabel.includes('piscine') || lowerLabel.includes('pool') || lowerLabel.includes('plage') || lowerLabel.includes('beach') || lowerLabel.includes('vue')) {
            return `\${cleanLabel}: image très vendeuse, elle peut beaucoup aider à attirer les clients.`;
        }

        if (lowerLabel.includes('menu') || lowerLabel.includes('restaurant') || lowerLabel.includes('petit') || lowerLabel.includes('breakfast')) {
            return `\${cleanLabel}: utile pour vendre l’expérience et pas seulement la chambre.`;
        }

        if (brightness !== null && brightness < 90) {
            return `\${cleanLabel}: photo un peu sombre, à refaire en lumière naturelle pour mieux vendre \${location || 'le logement'}.`;
        }

        if (contrast !== null && contrast < 22) {
            return `\${cleanLabel}: contraste faible, la photo paraît moins nette et moins dynamique.`;
        }

        if (aspect > 1.15 && aspect < 1.9) {
            return `\${cleanLabel}: bon format pour une annonce, surtout en couverture.`;
        }

        if (aspect > 0 && aspect < 0.9) {
            return `\${cleanLabel}: cadrage vertical, correcte en galerie mais moins forte en couverture.`;
        }

        if (isMainPhoto) {
            return `\${cleanLabel}: bonne base comme photo principale \${sourceType === 'existing' ? 'actuelle' : 'nouvelle'}.`;
        }

        return `\${cleanLabel}: photo utile pour compléter l'annonce et montrer plus de détails.`;
    }

    async function buildLocalFallbackResult() {
        const selectedMainFile = fileInput?.files?.[0] || null;
        const selectedGalleryFiles = Array.from(galleryInput?.files || []);
        const existingMain = (workspace?.dataset?.existingImagePath || '').trim();

        let existingGallery = [];
        try {
            const parsed = JSON.parse(workspace?.dataset?.existingGalleryImages || '[]');
            if (Array.isArray(parsed)) {
                existingGallery = parsed.filter(function(item) {
                    return typeof item === 'string' && item.trim() !== '';
                });
            }
        } catch (error) {
            existingGallery = [];
        }

        const photos = [];
        const analyzableItems = [];

        if (selectedMainFile) {
            analyzableItems.push({
                label: 'Nouvelle photo principale',
                sourceType: 'upload',
                file: selectedMainFile,
                isMainPhoto: true
            });
        } else if (existingMain !== '') {
            analyzableItems.push({
                label: getLabelFromPath(existingMain) || 'Photo principale actuelle',
                sourceType: 'existing',
                url: existingMain,
                isMainPhoto: true
            });
        }

        selectedGalleryFiles.forEach(function(file, index) {
            analyzableItems.push({
                label: file?.name ? getLabelFromPath(file.name) : `Nouvelle galerie \${index + 1}`,
                sourceType: 'upload',
                file: file,
                isMainPhoto: false
            });
        });

        existingGallery.forEach(function(path, index) {
            analyzableItems.push({
                label: getLabelFromPath(path) || `Galerie existante \${index + 1}`,
                sourceType: 'existing',
                url: path,
                isMainPhoto: false
            });
        });

        const analyzedItems = [];
        for (let index = 0; index < analyzableItems.length; index++) {
            const item = analyzableItems[index];
            const metrics = item.sourceType === 'upload'
                ? await analyzeImageBlob(item.file)
                : await analyzeImageUrl(item.url);

            const width = metrics?.width ?? 0;
            const height = metrics?.height ?? 0;
            const brightness = metrics?.brightness ?? null;
            const contrast = metrics?.contrast ?? null;
            const aspect = height > 0 ? width / height : 0;

            let score = 48;
            if (width >= 1400) {
                score += 18;
            } else if (width >= 1000) {
                score += 10;
            } else if (width > 0) {
                score -= 10;
            }

            if (aspect >= 1.15 && aspect <= 1.9) {
                score += 10;
            } else if (aspect > 0 && aspect < 0.9) {
                score -= 8;
            }

            if (brightness !== null) {
                if (brightness >= 100 && brightness <= 190) {
                    score += 8;
                } else if (brightness < 90) {
                    score -= 10;
                } else {
                    score -= 4;
                }
            }

            if (contrast !== null) {
                if (contrast >= 24 && contrast <= 95) {
                    score += 6;
                } else if (contrast < 20) {
                    score -= 6;
                }
            }

            score = Math.max(0, Math.min(100, score));

            const remark = buildRemark(item.label, metrics, item.sourceType, type, location, item.isMainPhoto, index);
            const why = score >= 70
                ? 'Bonne photo à garder en avant.'
                : score >= 50
                    ? 'Correcte mais perfectible.'
                    : 'À retravailler en priorité.';
            const action = score >= 70
                ? 'Conserve-la comme photo forte dans l’annonce.'
                : score >= 50
                    ? 'Essaie un cadrage plus large et une meilleure lumière.'
                    : 'Refais-la avec plus de lumière naturelle et un angle plus clair.';

            analyzedItems.push({
                label: item.label,
                score: score,
                width: width,
                height: height,
                brightness: brightness,
                contrast: contrast,
                remark: remark,
                why: why,
                action: action,
                isMainPhoto: item.isMainPhoto
            });
        }

        analyzedItems.sort(function(a, b) {
            return (b.score || 0) - (a.score || 0);
        });

        analyzedItems.forEach(function(item, index) {
            photos.push({
                label: item.label,
                rank: index + 1,
                why: item.why
            });
        });

        const photoCount = analyzedItems.length;
        const name = (nomInput?.value || '').trim();
        const type = (typeInput?.value || '').trim();
        const location = (localisationInput?.value || '').trim();
        const price = (prixInput?.value || '').trim();
        const desc = (descriptionInput?.value || '').trim();

        let score = 40;
        score += Math.min(20, photoCount * 4);
        score += name ? 8 : 0;
        score += type ? 6 : 0;
        score += location ? 8 : 0;
        score += price ? 4 : 0;
        score += desc.length >= 80 ? 8 : (desc.length >= 30 ? 4 : 0);
        if (analyzedItems.length > 0) {
            const averagePhotoScore = analyzedItems.reduce(function(sum, item) {
                return sum + (item.score || 0);
            }, 0) / analyzedItems.length;
            score += Math.round(averagePhotoScore / 10);
        }
        score = Math.max(0, Math.min(100, score));

        const photoRemarks = analyzedItems.map(function(item) {
            return {
                label: item.label,
                score: item.score,
                remark: item.remark,
                why: item.why,
                action: item.action
            };
        });

        const photosToImprove = analyzedItems
            .filter(function(item) {
                return (item.score || 0) < 62;
            })
            .map(function(item) {
                return {
                    label: item.label,
                    why: item.remark,
                    action: item.action
                };
            });

        if (photosToImprove.length === 0 && analyzedItems.length > 0) {
            const weakest = analyzedItems[analyzedItems.length - 1];
            photosToImprove.push({
                label: weakest.label,
                why: weakest.remark,
                action: weakest.action
            });
        }

        const missingPhotos = [];
        if (photoCount < 3) {
            missingPhotos.push('Ajouter une vue d\\'ensemble du logement.');
            missingPhotos.push('Ajouter une photo de la salle de bain.');
            missingPhotos.push('Ajouter une photo extérieure (façade/terrasse/vue).');
        }

        const currentLabels = analyzedItems.map(function(item) {
            return item.label.toLowerCase();
        }).join(' ');

        if (!currentLabels.includes('chambre')) {
            missingPhotos.push('Ajouter une photo claire de la chambre principale.');
        }
        if (!currentLabels.includes('salon') && !currentLabels.includes('living') && !currentLabels.includes('séjour') && !currentLabels.includes('sejour')) {
            missingPhotos.push('Ajouter une photo du salon ou de la pièce de vie.');
        }
        if (!currentLabels.includes('bain') && !currentLabels.includes('bath')) {
            missingPhotos.push('Ajouter une photo de la salle de bain.');
        }
        if (!currentLabels.includes('vue') && !currentLabels.includes('terrasse') && !currentLabels.includes('balcon') && !currentLabels.includes('extérieur') && !currentLabels.includes('exterieur')) {
            missingPhotos.push('Ajouter une photo extérieure ou une vue depuis le logement.');
        }
        if (!currentLabels.includes('menu') && !currentLabels.includes('restaurant') && !currentLabels.includes('petit')) {
            missingPhotos.push('Ajouter une photo d’ambiance ou de repas si tu veux mieux vendre l’expérience.');
        }

        const uniqueMissingPhotos = Array.from(new Set(missingPhotos));

        const descriptionSuggestion = [
            `\${name || 'Cet hébergement'} est un \${type ? type.toLowerCase() : 'logement'} situé à \${location || 'un emplacement pratique'}.`,
            `\${price ? `Disponible à partir de \${price}€ par nuit,` : 'Il offre'} un bon niveau de confort pour un séjour agréable.`,
            analyzedItems.length > 0
                ? `La photo la plus forte actuellement est \${analyzedItems[0].label}, ce qui aide à capter l’attention dès le premier coup d’œil.`
                : 'Ajoute une photo principale forte pour donner tout de suite envie de réserver.',
            photoCount >= 4
                ? 'La galerie met bien en valeur les espaces clés et rassure les clients avant réservation.'
                : 'Ajoute encore quelques photos des pièces principales pour augmenter la confiance et le taux de réservation.'
        ].join(' ');

        const recommendationSummary = photoCount >= 4
            ? `Analyse locale très solide pour ce \${type || 'hébergement'}: plusieurs photos permettent déjà de comparer les points forts et les points à retravailler.`
            : `Analyse locale en cours de renforcement pour ce \${type || 'hébergement'}: il manque encore quelques angles pour vendre l'annonce plus fort.`;

        return {
            score: score,
            bestCoverPhoto: analyzedItems[0]?.label || 'Photo principale',
            bestPhotos: photos,
            photoRemarks: photoRemarks,
            photosToImprove: photosToImprove,
            missingPhotos: uniqueMissingPhotos,
            descriptionSuggestion: descriptionSuggestion,
            recommendationSummary: recommendationSummary,
            recommendations: [
                'Garde la meilleure photo en couverture.',
                'Ajoute des angles variés: chambre, salon, salle de bain, extérieur.',
                'Vérifie luminosité et netteté avant publication.'
            ],
            analysisMode: 'local-fallback'
        };
    }

    function renderGalleryPreview(files) {
        if (!galleryPreview) {
            return;
        }

        galleryPreview.querySelectorAll('[data-preview-item=\"1\"]').forEach(function(node) {
            node.remove();
        });

        const emptyState = document.getElementById('galleryPreviewEmpty');
        if (emptyState) {
            emptyState.remove();
        }

        const selectedFiles = Array.from(files || []);
        if (selectedFiles.length === 0) {
            if (!galleryPreview.querySelector('[data-gallery-existing=\"1\"]')) {
                const fallback = document.createElement('div');
                fallback.id = 'galleryPreviewEmpty';
                fallback.style.gridColumn = '1 / -1';
                fallback.style.color = 'rgba(47, 168, 255, 0.5)';
                fallback.style.textAlign = 'center';
                fallback.style.padding = '20px 0';
                fallback.innerHTML = '<i class=\"fas fa-images\" style=\"font-size: 34px; display: block; margin-bottom: 8px;\"></i><p style=\"margin: 0; font-size: 13px;\">Aucune photo de galerie sélectionnée</p>';
                galleryPreview.appendChild(fallback);
            }
            return;
        }

        selectedFiles.forEach(function(file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const wrapper = document.createElement('div');
                wrapper.setAttribute('data-preview-item', '1');
                wrapper.style.position = 'relative';
                wrapper.style.borderRadius = '10px';
                wrapper.style.overflow = 'hidden';
                wrapper.style.minHeight = '110px';
                wrapper.style.background = 'rgba(11, 45, 74, 0.2)';
                wrapper.style.border = '1px solid rgba(47, 168, 255, 0.15)';
                wrapper.innerHTML = `<img src=\"\${event.target.result}\" alt=\"Aperçu\" style=\"width: 100%; height: 100%; object-fit: cover; display: block;\">`;
                galleryPreview.appendChild(wrapper);
            };
            reader.readAsDataURL(file);
        });
    }

    // Image preview
    if (fileInput) {
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    imagePreview.innerHTML = `<img src=\"\${event.target.result}\" alt=\"Preview\" style=\"max-width: 100%; max-height: 200px; border-radius: 8px; object-fit: cover;\">`;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    if (galleryInput) {
        galleryInput.addEventListener('change', function(e) {
            renderGalleryPreview(e.target.files);
        });
    }

    let aiAnalyzeInFlight = false;

    if (aiAnalyzeBtn && formElement && aiAnalyzeBtn.dataset.aiAnalyzeBound !== '1') {
        aiAnalyzeBtn.dataset.aiAnalyzeBound = '1';

        aiAnalyzeBtn.addEventListener('click', async function(event) {
            event.preventDefault();
            event.stopPropagation();

            if (aiAnalyzeInFlight) {
                return;
            }

            aiAnalyzeInFlight = true;
            const formData = new FormData(formElement);
            formData.append('ai_existing_image_path', workspace?.dataset?.existingImagePath || '');
            formData.append('ai_existing_gallery_images', workspace?.dataset?.existingGalleryImages || '[]');
            formData.set('ai_nom', nomInput?.value?.trim() || '');
            formData.set('ai_type', typeInput?.value?.trim() || '');
            formData.set('ai_localisation', localisationInput?.value?.trim() || '');
            formData.set('ai_description', descriptionInput?.value?.trim() || '');
            formData.set('ai_prixParNuit', prixInput?.value?.trim() || '');
            formData.set('ai_disponibilite', disponibiliteInput?.value?.trim() || '');

            aiAnalyzeBtn.disabled = true;
            aiAnalyzeBtn.style.opacity = '0.75';
            showAiStatus('Analyse en cours...');

            try {
                let data = null;
                let lastErrorMessage = '';

                for (let attempt = 1; attempt <= 2; attempt++) {
                    const response = await fetch('";
        // line 1180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_ai_analyze");
        yield "', {
                        method: 'POST',
                        body: formData,
                        credentials: 'same-origin',
                        cache: 'no-store',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    });

                    const rawResponse = await response.text();
                    let parsed = null;

                    if (rawResponse.trim() !== '') {
                        try {
                            parsed = JSON.parse(rawResponse);
                        } catch (parseError) {
                            parsed = null;
                        }
                    }

                    if (response.ok && parsed && typeof parsed === 'object') {
                        data = parsed;
                        break;
                    }

                    if (!response.ok) {
                        lastErrorMessage = (parsed && (parsed.error || parsed.details))
                            ? `\${parsed.error || 'Erreur serveur'}\${parsed.details ? ` (\${parsed.details})` : ''}`
                            : `HTTP \${response.status} \${response.statusText}`;
                    } else {
                        lastErrorMessage = 'Réponse invalide du serveur (JSON attendu).';
                    }

                    if (attempt < 2) {
                        showAiStatus('Réponse instable détectée, nouvelle tentative...');
                    }
                }

                if (!data) {
                    const fallbackData = buildLocalFallbackResult();
                    applyAiResult(fallbackData);
                    showAiStatus('Analyse locale affichée.');
                } else {
                    applyAiResult(data);
                    showAiStatus(data.analysisMode === 'openai' ? 'Analyse IA générée avec vision.' : 'Analyse locale générée. Branche OPENAI_API_KEY pour la vision avancée.');
                }
            } catch (error) {
                console.error(error);
                const fallbackData = buildLocalFallbackResult();
                applyAiResult(fallbackData);
                showAiStatus('Analyse locale affichée.');
            } finally {
                aiAnalyzeInFlight = false;
                aiAnalyzeBtn.disabled = false;
                aiAnalyzeBtn.style.opacity = '1';
            }
        });
    }

    if (applyAiDescriptionBtn && descriptionInput) {
        applyAiDescriptionBtn.addEventListener('click', function(event) {
            event.preventDefault();
            event.stopPropagation();

            const descriptionValue = currentAiDescription || (aiDescription?.textContent || '').trim();
            if (descriptionValue === '') {
                showAiStatus('Aucune description IA disponible. Lance d\\'abord l\\'analyse.', true);
                return;
            }

            const targetDescriptionField = descriptionInput || document.querySelector('textarea[name\$=\"[description]\"]');
            if (!targetDescriptionField) {
                showAiStatus('Champ Description introuvable dans le formulaire.', true);
                return;
            }

            targetDescriptionField.value = descriptionValue;
            targetDescriptionField.dispatchEvent(new Event('input', { bubbles: true }));
            targetDescriptionField.dispatchEvent(new Event('change', { bubbles: true }));
            targetDescriptionField.focus();
            showAiStatus('Description injectee dans le champ Description.', false);
        });
    }

    if (formElement) {
        formElement.addEventListener('submit', function(event) {
            if (!isCreateMode) {
                return;
            }

            const score = Number(aiScoreInput?.value || 0);
            const analyzed = (aiAnalyzedInput?.value || '0') === '1';
            if (!analyzed || score <= 60) {
                event.preventDefault();
                showAiStatus('Creation bloquee: lance l\\'analyse IA et obtiens un score strictement superieur a 60/100.', true);
                updateCreateGate(score, analyzed);
            }
        });
    }

    updateCreateGate(Number(aiScoreInput?.value || 0), (aiAnalyzedInput?.value || '0') === '1');

    // Location Picker
    let mapWindowListener = null;
    window.openMapPicker = function() {
        const mapWindow = window.open('/admin/map/location-picker', 'locationPicker', 'width=1000,height=800');

        // Créer un listener unique
        mapWindowListener = function(event) {
            console.log('📨 Message reçu:', event.data);

            if (event.data && event.data.action === 'setCoordinates') {
                console.log('✅ setCoordinates message valide');

                latInput.value = event.data.latitude;
                lonInput.value = event.data.longitude;
                console.log('✓ Champs d\\'affichage mis à jour:', latInput.value, lonInput.value);

                // Also update the actual hidden form fields
                const latField = document.getElementById('";
        // line 1301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1301, $this->source); })()), "latitude", [], "any", false, false, false, 1301), "vars", [], "any", false, false, false, 1301), "id", [], "any", false, false, false, 1301), "html", null, true);
        yield "');
                const lonField = document.getElementById('";
        // line 1302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1302, $this->source); })()), "longitude", [], "any", false, false, false, 1302), "vars", [], "any", false, false, false, 1302), "id", [], "any", false, false, false, 1302), "html", null, true);
        yield "');
                console.log('🔍 latField ID:', '";
        // line 1303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1303, $this->source); })()), "latitude", [], "any", false, false, false, 1303), "vars", [], "any", false, false, false, 1303), "id", [], "any", false, false, false, 1303), "html", null, true);
        yield "', 'exists:', !!latField);
                console.log('🔍 lonField ID:', '";
        // line 1304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1304, $this->source); })()), "longitude", [], "any", false, false, false, 1304), "vars", [], "any", false, false, false, 1304), "id", [], "any", false, false, false, 1304), "html", null, true);
        yield "', 'exists:', !!lonField);

                if (latField) {
                    latField.value = event.data.latitude;
                    console.log('✓ latField.value =', latField.value);
                }
                if (lonField) {
                    lonField.value = event.data.longitude;
                    console.log('✓ lonField.value =', lonField.value);
                }

                coordsStatus.style.display = 'block';
                console.log('✓ Coordonnées reçues et sauvegardées:', event.data.latitude, event.data.longitude);

                // Retirer le listener après réception
                window.removeEventListener('message', mapWindowListener);
            } else {
                console.log('⚠️ Message ignoré - pas d\\'action setCoordinates');
            }
        };

        // Ajouter le listener
        window.addEventListener('message', mapWindowListener);

        // Vérifier si la fenêtre s'est ferméepour nettoyer
        const checkInterval = setInterval(() => {
            if (!mapWindow || mapWindow.closed) {
                clearInterval(checkInterval);
                // Retirer le listener si la fenêtre est fermée
                if (mapWindowListener) {
                    window.removeEventListener('message', mapWindowListener);
                }
            }
        }, 500);
    };

    // Check if coordinates already set
    if (latInput.value && lonInput.value) {
        coordsStatus.style.display = 'block';
    }

    // Rest of the validation code...
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
        let errorDiv = input.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains('error-message')) {
            errorDiv.style.display = 'none';
        }
    }

    // Nom validation
    if (nomInput) {
        nomInput.addEventListener('input', function() {
            const value = this.value.trim();

            if (value === '') return;
            if (value.length < 3) {
                showError(this, 'Le nom doit contenir au moins 3 caractères');
            } else if (!/^[a-zA-ZÀ-ÿ\\s\\-\\']+\$/.test(value)) {
                showError(this, 'Le nom ne doit contenir que des lettres, espaces et tirets');
            } else {
                clearError(this);
            }
        });

        nomInput.addEventListener('blur', function() {
            if (this.value === '') {
                showError(this, 'Le nom ne doit pas être vide');
            }
        });
    }

    // Localisation validation
    if (localisationInput) {
        localisationInput.addEventListener('change', function() {
            if (this.value === '') {
                showError(this, 'Sélectionnez une localisation');
            } else {
                clearError(this);
            }
        });
    }

    // Description validation
    if (descriptionInput) {
        descriptionInput.addEventListener('input', function() {
            const value = this.value.trim();

            if (value === '') return;
            if (value.length < 10) {
                showError(this, 'La description doit contenir au moins 10 caractères');
            } else if (value.length > 1000) {
                showError(this, 'La description ne doit pas dépasser 1000 caractères');
            } else {
                clearError(this);
            }
        });

        descriptionInput.addEventListener('blur', function() {
            if (this.value === '') {
                showError(this, 'La description ne doit pas être vide');
            }
        });
    }

    // Prix validation
    if (prixInput) {
        prixInput.addEventListener('input', function() {
            const value = this.value;

            if (value === '') return;
            if (isNaN(value) || value < 0) {
                showError(this, 'Le prix par nuit doit être positif');
            } else {
                clearError(this);
            }
        });
    }

    if (formElement) {
        formElement.addEventListener('submit', function(event) {
            // Log coordinates before submit
            console.log('📋 FORM SUBMISSION DEBUG:');
            console.log('  latInput.value:', document.getElementById('latitudeInput')?.value);
            console.log('  lonInput.value:', document.getElementById('longitudeInput')?.value);

            const latField = document.getElementById('";
        // line 1441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1441, $this->source); })()), "latitude", [], "any", false, false, false, 1441), "vars", [], "any", false, false, false, 1441), "id", [], "any", false, false, false, 1441), "html", null, true);
        yield "');
            const lonField = document.getElementById('";
        // line 1442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1442, $this->source); })()), "longitude", [], "any", false, false, false, 1442), "vars", [], "any", false, false, false, 1442), "id", [], "any", false, false, false, 1442), "html", null, true);
        yield "');
            console.log('  hidden latField.value (";
        // line 1443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1443, $this->source); })()), "latitude", [], "any", false, false, false, 1443), "vars", [], "any", false, false, false, 1443), "id", [], "any", false, false, false, 1443), "html", null, true);
        yield "):', latField?.value);
            console.log('  hidden lonField.value (";
        // line 1444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1444, $this->source); })()), "longitude", [], "any", false, false, false, 1444), "vars", [], "any", false, false, false, 1444), "id", [], "any", false, false, false, 1444), "html", null, true);
        yield "):', lonField?.value);

            let hasError = false;

            if (nomInput) {
                const nomValue = nomInput.value.trim();
                if (nomValue === '') {
                    showError(nomInput, 'Le nom ne doit pas être vide');
                    hasError = true;
                } else if (nomValue.length < 3) {
                    showError(nomInput, 'Le nom doit contenir au moins 3 caractères');
                    hasError = true;
                } else if (!/^[a-zA-ZÀ-ÿ\\s\\-']+\$/.test(nomValue)) {
                    showError(nomInput, 'Le nom ne doit contenir que des lettres, espaces et tirets');
                    hasError = true;
                }
            }

            if (localisationInput && localisationInput.value === '') {
                showError(localisationInput, 'Sélectionnez une localisation');
                hasError = true;
            }

            if (descriptionInput) {
                const descriptionValue = descriptionInput.value.trim();
                if (descriptionValue === '') {
                    showError(descriptionInput, 'La description ne doit pas être vide');
                    hasError = true;
                } else if (descriptionValue.length < 10) {
                    showError(descriptionInput, 'La description doit contenir au moins 10 caractères');
                    hasError = true;
                } else if (descriptionValue.length > 1000) {
                    showError(descriptionInput, 'La description ne doit pas dépasser 1000 caractères');
                    hasError = true;
                }
            }

            if (prixInput && prixInput.value !== '' && (isNaN(prixInput.value) || Number(prixInput.value) < 0)) {
                showError(prixInput, 'Le prix par nuit doit être positif');
                hasError = true;
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
        return "admin/hebergements/form.html.twig";
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
        return array (  1771 => 1444,  1767 => 1443,  1763 => 1442,  1759 => 1441,  1619 => 1304,  1615 => 1303,  1611 => 1302,  1607 => 1301,  1483 => 1180,  789 => 489,  785 => 488,  781 => 487,  777 => 486,  773 => 485,  769 => 484,  760 => 478,  756 => 477,  579 => 303,  576 => 302,  570 => 298,  568 => 297,  557 => 289,  547 => 286,  536 => 278,  530 => 275,  523 => 271,  517 => 268,  444 => 197,  438 => 194,  435 => 193,  433 => 192,  429 => 191,  422 => 187,  402 => 170,  392 => 163,  372 => 146,  366 => 143,  359 => 139,  352 => 135,  342 => 128,  336 => 125,  331 => 122,  325 => 119,  322 => 118,  320 => 117,  316 => 116,  309 => 112,  290 => 96,  287 => 95,  285 => 91,  284 => 89,  275 => 82,  268 => 77,  265 => 76,  246 => 73,  243 => 72,  225 => 71,  222 => 70,  220 => 69,  209 => 61,  206 => 60,  204 => 55,  203 => 53,  192 => 44,  185 => 39,  179 => 37,  177 => 36,  165 => 26,  159 => 23,  155 => 21,  153 => 20,  147 => 17,  140 => 13,  136 => 12,  132 => 11,  129 => 10,  116 => 9,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}{{ title }} - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-hotel\"></i> {{ title }}
{% endblock %}

{% block content %}
<div id=\"hebergementAiWorkspace\"
    data-existing-image-path=\"{{ hebergement.imagePath|default('')|e('html_attr') }}\"
    data-existing-gallery-images=\"{{ (hebergement.galleryImages|default([]))|json_encode|e('html_attr') }}\"
    data-is-create=\"{{ hebergement.idHebergement ? '0' : '1' }}\"
    style=\"max-width: 900px; margin: 0 auto;\">
    <div style=\"background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(12px); border: 2px solid rgba(47, 168, 255, 0.15); border-radius: 16px; padding: 40px; overflow: hidden;\">

        {{ form_start(form, {'attr': {'class': 'hebergement-form', 'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}

        <!-- Form Errors -->
        {% if form.vars.errors|length > 0 %}
            <div style=\"background: rgba(239, 68, 68, 0.15); border: 1px solid rgba(239, 68, 68, 0.3); border-radius: 8px; padding: 15px; margin-bottom: 20px; color: #EF4444;\">
                <h4 style=\"margin: 0 0 10px 0; color: #EF4444;\">Erreurs du formulaire:</h4>
                {{ form_errors(form) }}
            </div>
        {% endif %}

        <!-- Image Upload Section -->
        <div class=\"form-group\" style=\"margin-bottom: 30px;\">
            <label style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Image de l'Hebergement
            </label>
            <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: start;\">
                <!-- Image Preview -->
                <div style=\"background: rgba(47, 168, 255, 0.1); border: 2px dashed rgba(47, 168, 255, 0.3); border-radius: 12px; padding: 20px; display: flex; align-items: center; justify-content: center; min-height: 250px; overflow: hidden;\">
                    <div id=\"imagePreview\" style=\"text-align: center; width: 100%;\">
                        {% if hebergement.imagePath %}
                            <img src=\"{{ hebergement.imagePath }}\" alt=\"Preview\" style=\"max-width: 100%; max-height: 200px; border-radius: 8px; object-fit: cover;\">
                        {% else %}
                            <div style=\"color: rgba(47, 168, 255, 0.5);\">
                                <i class=\"fas fa-image\" style=\"font-size: 48px; display: block; margin-bottom: 10px;\"></i>
                                <p style=\"font-size: 14px;\">Aucune image sélectionnée</p>
                            </div>
                        {% endif %}
                    </div>
                </div>

                    <!-- Galerie Upload Section -->
                    <div class=\"form-group\" style=\"margin-bottom: 30px;\">
                        <label style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                            Galerie Photos
                        </label>
                        <div style=\"background: rgba(47, 168, 255, 0.08); border: 2px dashed rgba(47, 168, 255, 0.25); border-radius: 12px; padding: 20px;\">
                            {{ form_widget(form.galleryImages, {
                                'attr': {
                                    'id': form.galleryImages.vars.id,
                                    'class': 'form-control file-input file-input-gallery',
                                    'accept': 'image/*',
                                    'multiple': 'multiple'
                                }
                            }) }}
                            <label for=\"{{ form.galleryImages.vars.id }}\" class=\"btn-upload\" style=\"margin-bottom: 14px;\">
                                <i class=\"fas fa-images\"></i>
                                <span>Ajouter plusieurs photos</span>
                            </label>
                            <p style=\"font-size: 12px; color: var(--text-secondary); margin-top: 0; margin-bottom: 14px;\">
                                Plus il y a de photos, plus l'IA peut classer celles qui attirent le mieux les clients.
                            </p>
                            <div id=\"galleryPreview\" style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 12px;\">
                                {% set existingGalleryImages = hebergement.galleryImages|default([]) %}
                                {% if existingGalleryImages %}
                                    {% for galleryImage in existingGalleryImages %}
                                        <div data-gallery-existing=\"1\" style=\"position: relative; border-radius: 10px; overflow: hidden; min-height: 110px; background: rgba(11, 45, 74, 0.2); border: 1px solid rgba(47, 168, 255, 0.15);\">
                                            <img src=\"{{ asset(galleryImage|trim('/')) }}\" alt=\"Galerie {{ loop.index }}\" style=\"width: 100%; height: 100%; object-fit: cover; display: block;\">
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    <div id=\"galleryPreviewEmpty\" style=\"grid-column: 1 / -1; color: rgba(47, 168, 255, 0.5); text-align: center; padding: 20px 0;\">
                                        <i class=\"fas fa-images\" style=\"font-size: 34px; display: block; margin-bottom: 8px;\"></i>
                                        <p style=\"margin: 0; font-size: 13px;\">Aucune photo de galerie sélectionnée</p>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                <!-- Upload Input -->
                <div>
                    <div style=\"position: relative;\">
                        {{ form_widget(form.imagePath, {
                            'attr': {
                                'id': form.imagePath.vars.id,
                                'class': 'file-input',
                                'accept': 'image/*'
                            }
                        }) }}
                        <label for=\"{{ form.imagePath.vars.id }}\" class=\"btn-upload\">
                            <i class=\"fas fa-cloud-upload-alt\"></i>
                            <span>Choisir une image</span>
                        </label>
                    </div>
                    <p style=\"font-size: 12px; color: var(--text-secondary); margin-top: 10px; margin-bottom: 0;\">
                        Format: JPG, PNG, GIF, WebP<br>
                        Taille max: 5MB
                    </p>
                </div>
            </div>
        </div>

        <!-- Nom and Type Row -->
        <div class=\"form-row\">
            <div class=\"form-group\">
                <label for=\"{{ form.nom.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Nom de l'Hebergement
                    <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                </label>
                {{ form_widget(form.nom, {'attr': {'id': form.nom.vars.id, 'placeholder': 'Ex: Villa Luxe', 'class': 'form-control'}}) }}
                {% if form.nom.vars.errors|length > 0 %}
                    <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                        {{ form_errors(form.nom) }}
                    </div>
                {% endif %}
            </div>

            <div class=\"form-group\">
                <label for=\"{{ form.type.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Type d'Hebergement
                </label>
                {{ form_widget(form.type, {'attr': {'id': form.type.vars.id, 'class': 'form-control select-styled'}}) }}
            </div>
        </div>

        <!-- Localisation and Categorie Row -->
        <div class=\"form-row\">
            <div class=\"form-group\">
                <label for=\"{{ form.localisation.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Localisation
                    <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
                </label>
                {{ form_widget(form.localisation, {'attr': {'id': form.localisation.vars.id, 'class': 'form-control select-styled'}}) }}
            </div>

            <div class=\"form-group\">
                <label for=\"{{ form.categorie.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Categorie
                </label>
                {{ form_widget(form.categorie, {'attr': {'id': form.categorie.vars.id, 'class': 'form-control select-styled'}}) }}
            </div>
        </div>

        <!-- Location Picker Section -->
        <div class=\"form-group\" style=\"background: rgba(47, 168, 255, 0.08); border: 2px solid rgba(47, 168, 255, 0.2); border-radius: 12px; padding: 20px; margin-bottom: 24px;\">
            <label style=\"display: block; margin-bottom: 15px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                🗺️ Localisation Exacte (Latitude & Longitude)
            </label>

            <!-- Latitude and Longitude Row -->
            <div class=\"form-row\" style=\"margin-bottom: 15px;\">
                <div class=\"form-group\">
                    <label style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                        Latitude
                    </label>
                    <input type=\"text\" id=\"latitudeInput\" placeholder=\"0.0000\" readonly style=\"width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 2px solid rgba(47, 168, 255, 0.15); border-radius: 8px; color: var(--text-primary); font-family: 'Inter', sans-serif; cursor: not-allowed;\">
                    {{ form_widget(form.latitude) }}
                </div>
                <div class=\"form-group\">
                    <label style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                        Longitude
                    </label>
                    <input type=\"text\" id=\"longitudeInput\" placeholder=\"0.0000\" readonly style=\"width: 100%; padding: 12px 16px; background: rgba(255, 255, 255, 0.05); border: 2px solid rgba(47, 168, 255, 0.15); border-radius: 8px; color: var(--text-primary); font-family: 'Inter', sans-serif; cursor: not-allowed;\">
                    {{ form_widget(form.longitude) }}
                </div>
            </div>

            <!-- Map Button -->
            <button type=\"button\" class=\"btn-map-picker\" onclick=\"openMapPicker()\" style=\"width: 100%; margin-bottom: 10px;\">
                <i class=\"fas fa-map-marker-alt\"></i>
                Choisir l'emplacement sur la Carte
            </button>

            <div id=\"coordsStatus\" style=\"font-size: 12px; color: #2FA8FF; display: none; padding: 10px; background: rgba(47, 168, 255, 0.1); border-radius: 8px; text-align: center;\">
                ✓ Coordonnées sélectionnées
            </div>
        </div>

        <!-- Description -->
        <div class=\"form-group\">
            <label for=\"{{ form.description.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                Description
                <span style=\"color: #FF6B6B; font-weight: 700;\">*</span>
            </label>
            {{ form_widget(form.description, {'attr': {'id': form.description.vars.id, 'rows': 4, 'placeholder': 'Décrivez votre hebergement...', 'class': 'form-control'}}) }}
            {% if form.description.vars.errors|length > 0 %}
                <div style=\"color: #EF4444; font-size: 12px; margin-top: 5px;\">
                    {{ form_errors(form.description) }}
                </div>
            {% endif %}
        </div>

        <!-- AI Assistant -->
        <div style=\"background: linear-gradient(135deg, rgba(11, 45, 74, 0.95), rgba(10, 39, 64, 0.9)); border: 1px solid rgba(47, 168, 255, 0.2); border-radius: 16px; padding: 22px; margin-bottom: 24px; box-shadow: 0 12px 30px rgba(0,0,0,0.18);\">
            <div style=\"display: flex; justify-content: space-between; gap: 18px; align-items: flex-start; flex-wrap: wrap; margin-bottom: 16px;\">
                <div>
                    <div style=\"display: inline-flex; align-items: center; gap: 8px; color: #A7E3FF; font-size: 12px; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 8px;\">
                        <i class=\"fas fa-wand-magic-sparkles\"></i>
                        Assistant IA
                    </div>
                    <h3 style=\"margin: 0; color: #FFFFFF; font-size: 20px;\">Optimisation automatique des photos et de la description</h3>
                    <p style=\"margin: 8px 0 0; color: rgba(255,255,255,0.72); line-height: 1.6; max-width: 720px;\">
                        L'IA analyse la photo principale et la galerie, estime ce qui attire le plus les clients, puis propose une description plus vendeuse.
                    </p>
                </div>
                <button type=\"button\" id=\"aiAnalyzeBtn\" class=\"btn-submit\" style=\"white-space: nowrap;\">
                    <i class=\"fas fa-bolt\"></i>
                    <span>Analyser avec l'IA</span>
                </button>
            </div>

            <div id=\"aiStatus\" style=\"display: none; margin-bottom: 16px; padding: 12px 14px; border-radius: 10px; background: rgba(47, 168, 255, 0.12); color: #A7E3FF; font-size: 14px;\"></div>

            <div id=\"aiResult\" style=\"display: none; border-radius: 14px; background: rgba(255,255,255,0.03); border: 1px solid rgba(47,168,255,0.12); padding: 18px;\">
                <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 14px; margin-bottom: 16px;\">
                    <div style=\"background: rgba(47,168,255,0.08); border-radius: 12px; padding: 14px;\">
                        <div style=\"font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: rgba(255,255,255,0.55); margin-bottom: 6px;\">Score photo</div>
                        <div id=\"aiScore\" style=\"font-size: 34px; font-weight: 700; color: #34D399;\">0</div>
                    </div>
                    <div style=\"background: rgba(47,168,255,0.08); border-radius: 12px; padding: 14px;\">
                        <div style=\"font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: rgba(255,255,255,0.55); margin-bottom: 6px;\">Photo couverture</div>
                        <div id=\"aiCoverPhoto\" style=\"font-size: 16px; font-weight: 600; color: #FFFFFF; line-height: 1.5;\">-</div>
                    </div>
                    <div style=\"background: rgba(47,168,255,0.08); border-radius: 12px; padding: 14px;\">
                        <div style=\"font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: rgba(255,255,255,0.55); margin-bottom: 6px;\">Résumé</div>
                        <div id=\"aiSummary\" style=\"font-size: 15px; font-weight: 500; color: #FFFFFF; line-height: 1.5;\">-</div>
                    </div>
                </div>

                <div style=\"display: grid; grid-template-columns: 1.25fr 0.95fr; gap: 16px;\">
                    <div style=\"background: rgba(255,255,255,0.02); border-radius: 12px; padding: 14px; border: 1px solid rgba(47,168,255,0.08);\">
                        <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin-bottom: 10px;\">Description proposée</div>
                        <div id=\"aiDescription\" style=\"font-size: 14px; color: rgba(255,255,255,0.9); line-height: 1.7; white-space: pre-line;\"></div>
                        <button type=\"button\" id=\"applyAiDescriptionBtn\" class=\"btn-ai-apply\" style=\"margin-top: 14px; padding: 10px 18px; font-size: 13px;\">
                            <i class=\"fas fa-arrow-down\"></i>
                            <span>Utiliser cette description</span>
                        </button>
                    </div>

                    <div style=\"background: rgba(255,255,255,0.02); border-radius: 12px; padding: 14px; border: 1px solid rgba(47,168,255,0.08);\">
                        <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin-bottom: 10px;\">Photos les plus attractives</div>
                        <ul id=\"aiBestPhotos\" style=\"margin: 0; padding-left: 18px; color: rgba(255,255,255,0.88); line-height: 1.65;\"></ul>
                        <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin: 16px 0 10px;\">Remarques par photo</div>
                        <ul id=\"aiPhotoRemarks\" style=\"margin: 0; padding-left: 18px; color: rgba(255,255,255,0.88); line-height: 1.65;\"></ul>
                        <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin: 16px 0 10px;\">Photos à améliorer</div>
                        <ul id=\"aiPhotosToImprove\" style=\"margin: 0; padding-left: 18px; color: rgba(255,255,255,0.88); line-height: 1.65;\"></ul>
                        <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin: 16px 0 10px;\">Photos manquantes</div>
                        <ul id=\"aiMissingPhotos\" style=\"margin: 0; padding-left: 18px; color: rgba(255,255,255,0.88); line-height: 1.65;\"></ul>
                    </div>
                </div>

                <div style=\"margin-top: 16px; background: rgba(47,168,255,0.06); border-radius: 12px; padding: 14px;\">
                    <div style=\"font-size: 13px; font-weight: 700; color: #A7E3FF; margin-bottom: 8px;\">Conseils actionnables</div>
                    <ul id=\"aiRecommendations\" style=\"margin: 0; padding-left: 18px; color: rgba(255,255,255,0.88); line-height: 1.65;\"></ul>
                </div>
            </div>
        </div>

        <!-- Prix and Disponibilite Row -->
        <div class=\"form-row\">
            <div class=\"form-group\">
                <label for=\"{{ form.prixParNuit.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Prix par Nuit
                </label>
                {{ form_widget(form.prixParNuit, {'attr': {'id': form.prixParNuit.vars.id, 'type': 'number', 'step': '0.01', 'min': '0', 'placeholder': '0.00', 'class': 'form-control'}}) }}
            </div>

            <div class=\"form-group\">
                <label for=\"{{ form.disponibilite.vars.id }}\" style=\"display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-primary); letter-spacing: 0.5px;\">
                    Disponibilite
                </label>
                {{ form_widget(form.disponibilite, {'attr': {'id': form.disponibilite.vars.id, 'class': 'form-control select-styled'}}) }}
            </div>
        </div>

        <!-- Form Actions -->
        <div style=\"display: flex; gap: 15px; margin-top: 40px; padding-top: 20px; border-top: 2px solid rgba(47, 168, 255, 0.15);\">
            <button id=\"createSubmitBtn\" type=\"submit\" class=\"btn-submit\">
                <i class=\"fas fa-save\"></i>
                <span>{% if hebergement.idHebergement %}Mettre a Jour{% else %}Creer{% endif %}</span>
            </button>

            <a href=\"{{ path('admin_hebergements') }}\" class=\"btn-cancel\">
                <i class=\"fas fa-times\"></i>
                <span>Annuler</span>
            </a>
        </div>

        <input type=\"hidden\" id=\"aiScoreInput\" name=\"ai_score\" value=\"0\">
        <input type=\"hidden\" id=\"aiAnalyzedInput\" name=\"ai_analyzed\" value=\"0\">
        {% if not hebergement.idHebergement %}
            <div id=\"aiGateHint\" style=\"margin-top: 14px; color: #FCA5A5; font-size: 13px;\">
                Analyse IA obligatoire: pour creer cet hebergement, le score doit etre strictement superieur a 60/100.
            </div>
        {% endif %}

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
        border: 2px solid rgba(47, 168, 255, 0.15);
        border-radius: 8px;
        color: var(--text-primary);
        font-family: 'Inter', sans-serif;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-map-picker {
        width: 100%;
        padding: 12px 16px;
        background: rgba(47, 168, 255, 0.3);
        border: 2px solid #2FA8FF;
        border-radius: 8px;
        color: #2FA8FF;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        font-size: 13px;
    }

    .btn-map-picker:hover {
        background: rgba(47, 168, 255, 0.5);
    }

    select.select-styled {
        appearance: none;
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%232FA8FF' stroke-width='2'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 20px;
        padding-right: 40px;
    }

    select.select-styled option {
        background: #0B2D4A;
        color: white;
    }

    input:focus, select:focus, textarea:focus {
        outline: none !important;
        background: rgba(255, 255, 255, 0.08);
        border-color: #2FA8FF;
        box-shadow: 0 0 15px rgba(47, 168, 255, 0.2);
    }

    /* File Input Styling */
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

    .btn-ai-apply {
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

    .btn-ai-apply:hover {
        background: #2FA8FF;
        color: #0B2D4A;
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const formElement = document.querySelector('.hebergement-form');
    const workspace = document.getElementById('hebergementAiWorkspace');
    const fileInput = document.getElementById('{{ form.imagePath.vars.id }}');
    const galleryInput = document.getElementById('{{ form.galleryImages.vars.id }}');
    const imagePreview = document.getElementById('imagePreview');
    const galleryPreview = document.getElementById('galleryPreview');
    const latInput = document.getElementById('latitudeInput');
    const lonInput = document.getElementById('longitudeInput');
    const coordsStatus = document.getElementById('coordsStatus');
    const descriptionInput = document.getElementById('{{ form.description.vars.id }}');
    const nomInput = document.getElementById('{{ form.nom.vars.id }}');
    const typeInput = document.getElementById('{{ form.type.vars.id }}');
    const localisationInput = document.getElementById('{{ form.localisation.vars.id }}');
    const prixInput = document.getElementById('{{ form.prixParNuit.vars.id }}');
    const disponibiliteInput = document.getElementById('{{ form.disponibilite.vars.id }}');
    const aiAnalyzeBtn = document.getElementById('aiAnalyzeBtn');
    const aiStatus = document.getElementById('aiStatus');
    const aiResult = document.getElementById('aiResult');
    const aiScore = document.getElementById('aiScore');
    const aiCoverPhoto = document.getElementById('aiCoverPhoto');
    const aiSummary = document.getElementById('aiSummary');
    const aiDescription = document.getElementById('aiDescription');
    const aiBestPhotos = document.getElementById('aiBestPhotos');
    const aiPhotoRemarks = document.getElementById('aiPhotoRemarks');
    const aiPhotosToImprove = document.getElementById('aiPhotosToImprove');
    const aiMissingPhotos = document.getElementById('aiMissingPhotos');
    const aiRecommendations = document.getElementById('aiRecommendations');
    const applyAiDescriptionBtn = document.getElementById('applyAiDescriptionBtn');
    const aiScoreInput = document.getElementById('aiScoreInput');
    const aiAnalyzedInput = document.getElementById('aiAnalyzedInput');
    const createSubmitBtn = document.getElementById('createSubmitBtn');
    const aiGateHint = document.getElementById('aiGateHint');
    const isCreateMode = workspace?.dataset?.isCreate === '1';
    let currentAiDescription = '';

    if (applyAiDescriptionBtn) {
        applyAiDescriptionBtn.disabled = true;
        applyAiDescriptionBtn.style.opacity = '0.55';
        applyAiDescriptionBtn.style.cursor = 'not-allowed';
    }

    function updateCreateGate(scoreValue, analyzed) {
        if (!isCreateMode || !createSubmitBtn) {
            return;
        }

        const numericScore = Number.isFinite(Number(scoreValue)) ? Number(scoreValue) : 0;
        const canCreate = analyzed && numericScore > 60;

        createSubmitBtn.disabled = !canCreate;
        createSubmitBtn.style.opacity = canCreate ? '1' : '0.5';
        createSubmitBtn.style.cursor = canCreate ? 'pointer' : 'not-allowed';

        if (aiGateHint) {
            aiGateHint.style.color = canCreate ? '#86EFAC' : '#FCA5A5';
            aiGateHint.textContent = canCreate
                ? `Score IA \${Math.round(numericScore)}/100 valide. Creation autorisee.`
                : 'Analyse IA obligatoire: pour creer cet hebergement, le score doit etre strictement superieur a 60/100.';
        }
    }

    function showAiStatus(message, isError = false) {
        if (!aiStatus) {
            return;
        }

        aiStatus.textContent = message;
        aiStatus.style.display = 'block';
        aiStatus.style.background = isError ? 'rgba(239, 68, 68, 0.14)' : 'rgba(47, 168, 255, 0.12)';
        aiStatus.style.color = isError ? '#FCA5A5' : '#A7E3FF';
    }

    function renderList(target, items, fallbackText) {
        if (!target) {
            return;
        }

        target.innerHTML = '';

        if (!Array.isArray(items) || items.length === 0) {
            const li = document.createElement('li');
            li.textContent = fallbackText;
            target.appendChild(li);
            return;
        }

        items.forEach(function(item) {
            const li = document.createElement('li');
            if (typeof item === 'string') {
                li.textContent = item;
            } else if (item && typeof item === 'object') {
                const label = item.label || item.name || 'Photo';
                const sceneLabel = item.sceneLabel || item.scene || '';
                const remark = item.remark || item.comment || '';
                const why = item.why || item.reason || '';
                const action = item.action || '';
                const score = typeof item.score === 'number' ? ` (\${item.score}/100)` : '';
                const sceneSuffix = sceneLabel ? ` [\${sceneLabel}]` : '';
                if (remark && action) {
                    li.textContent = `\${label}\${sceneSuffix}\${score} — \${remark} Action: \${action}`;
                } else if (remark) {
                    li.textContent = `\${label}\${sceneSuffix}\${score} — \${remark}`;
                } else if (why && action) {
                    li.textContent = `\${label}\${sceneSuffix}\${score} — \${why} Action: \${action}`;
                } else if (why) {
                    li.textContent = `\${label}\${sceneSuffix}\${score} — \${why}`;
                } else if (action) {
                    li.textContent = `\${label}\${sceneSuffix}\${score} — Action: \${action}`;
                } else {
                    li.textContent = `\${label}\${sceneSuffix}\${score}`;
                }
            }
            target.appendChild(li);
        });
    }

    function applyAiResult(data) {
        if (!aiResult || !aiScore || !aiCoverPhoto || !aiSummary || !aiDescription) {
            return;
        }

        const finalScore = Number(data.score ?? 0);
        currentAiDescription = String(data.descriptionSuggestion || '').trim();
        aiResult.style.display = 'block';
        aiScore.textContent = String(finalScore);
        aiCoverPhoto.textContent = data.bestCoverPhoto || 'Photo principale';
        aiSummary.textContent = data.recommendationSummary || 'Analyse terminée.';
        aiDescription.textContent = currentAiDescription;
        if (applyAiDescriptionBtn) {
            const canApply = currentAiDescription !== '';
            applyAiDescriptionBtn.disabled = !canApply;
            applyAiDescriptionBtn.style.opacity = canApply ? '1' : '0.55';
            applyAiDescriptionBtn.style.cursor = canApply ? 'pointer' : 'not-allowed';
        }
        if (aiScoreInput) {
            aiScoreInput.value = String(finalScore);
        }
        if (aiAnalyzedInput) {
            aiAnalyzedInput.value = '1';
        }
        updateCreateGate(finalScore, true);
        renderList(aiBestPhotos, data.bestPhotos || [], 'Aucune photo analysée.');
        renderList(aiPhotoRemarks, data.photoRemarks || [], 'Aucune remarque photo disponible.');
        renderList(aiPhotosToImprove, data.photosToImprove || [], 'Aucune photo critique à améliorer.');
        renderList(aiMissingPhotos, data.missingPhotos || [], 'Aucune photo manquante détectée.');
        renderList(aiRecommendations, data.recommendations || [], 'Aucune recommandation.');
    }

    function getLabelFromPath(path) {
        const cleaned = String(path || '').split('?')[0].split('#')[0];
        const parts = cleaned.split('/').filter(Boolean);
        const fileName = parts.length > 0 ? parts[parts.length - 1] : cleaned;
        return fileName.replace(/\\.[^.]+\$/, '') || 'Photo';
    }

    function analyzeImageBlob(blob) {
        return new Promise(function(resolve) {
            if (!blob) {
                resolve(null);
                return;
            }

            const image = new Image();
            const objectUrl = URL.createObjectURL(blob);

            image.onload = function() {
                try {
                    const canvas = document.createElement('canvas');
                    canvas.width = image.naturalWidth || image.width || 0;
                    canvas.height = image.naturalHeight || image.height || 0;

                    if (!canvas.width || !canvas.height) {
                        URL.revokeObjectURL(objectUrl);
                        resolve(null);
                        return;
                    }

                    const context = canvas.getContext('2d', { willReadFrequently: true });
                    if (!context) {
                        URL.revokeObjectURL(objectUrl);
                        resolve({ width: canvas.width, height: canvas.height, brightness: null, contrast: null });
                        return;
                    }

                    context.drawImage(image, 0, 0);
                    const sampleWidth = Math.min(canvas.width, 36);
                    const sampleHeight = Math.min(canvas.height, 36);
                    const stepX = Math.max(1, Math.floor(canvas.width / sampleWidth));
                    const stepY = Math.max(1, Math.floor(canvas.height / sampleHeight));
                    const values = [];

                    for (let x = 0; x < canvas.width; x += stepX) {
                        for (let y = 0; y < canvas.height; y += stepY) {
                            const pixel = context.getImageData(x, y, 1, 1).data;
                            values.push((0.299 * pixel[0]) + (0.587 * pixel[1]) + (0.114 * pixel[2]));
                        }
                    }

                    if (values.length === 0) {
                        URL.revokeObjectURL(objectUrl);
                        resolve({ width: canvas.width, height: canvas.height, brightness: null, contrast: null });
                        return;
                    }

                    const mean = values.reduce(function(sum, value) {
                        return sum + value;
                    }, 0) / values.length;

                    const variance = values.reduce(function(sum, value) {
                        return sum + Math.pow(value - mean, 2);
                    }, 0) / values.length;

                    URL.revokeObjectURL(objectUrl);
                    resolve({
                        width: canvas.width,
                        height: canvas.height,
                        brightness: Math.round(mean),
                        contrast: Math.round(Math.sqrt(variance))
                    });
                } catch (error) {
                    URL.revokeObjectURL(objectUrl);
                    resolve(null);
                }
            };

            image.onerror = function() {
                URL.revokeObjectURL(objectUrl);
                resolve(null);
            };

            image.src = objectUrl;
        });
    }

    function analyzeImageUrl(url) {
        return new Promise(function(resolve) {
            if (!url) {
                resolve(null);
                return;
            }

            const image = new Image();
            image.crossOrigin = 'anonymous';

            image.onload = function() {
                try {
                    const canvas = document.createElement('canvas');
                    canvas.width = image.naturalWidth || image.width || 0;
                    canvas.height = image.naturalHeight || image.height || 0;

                    if (!canvas.width || !canvas.height) {
                        resolve(null);
                        return;
                    }

                    const context = canvas.getContext('2d', { willReadFrequently: true });
                    if (!context) {
                        resolve({ width: canvas.width, height: canvas.height, brightness: null, contrast: null });
                        return;
                    }

                    context.drawImage(image, 0, 0);
                    const sampleWidth = Math.min(canvas.width, 36);
                    const sampleHeight = Math.min(canvas.height, 36);
                    const stepX = Math.max(1, Math.floor(canvas.width / sampleWidth));
                    const stepY = Math.max(1, Math.floor(canvas.height / sampleHeight));
                    const values = [];

                    for (let x = 0; x < canvas.width; x += stepX) {
                        for (let y = 0; y < canvas.height; y += stepY) {
                            const pixel = context.getImageData(x, y, 1, 1).data;
                            values.push((0.299 * pixel[0]) + (0.587 * pixel[1]) + (0.114 * pixel[2]));
                        }
                    }

                    if (values.length === 0) {
                        resolve({ width: canvas.width, height: canvas.height, brightness: null, contrast: null });
                        return;
                    }

                    const mean = values.reduce(function(sum, value) {
                        return sum + value;
                    }, 0) / values.length;

                    const variance = values.reduce(function(sum, value) {
                        return sum + Math.pow(value - mean, 2);
                    }, 0) / values.length;

                    resolve({
                        width: canvas.width,
                        height: canvas.height,
                        brightness: Math.round(mean),
                        contrast: Math.round(Math.sqrt(variance))
                    });
                } catch (error) {
                    resolve(null);
                }
            };

            image.onerror = function() {
                resolve(null);
            };

            image.src = url;
        });
    }

    function buildRemark(label, metrics, sourceType, type, location, isMainPhoto, index) {
        const cleanLabel = label || `Photo \${index + 1}`;
        const aspect = metrics && metrics.width && metrics.height ? (metrics.width / metrics.height) : 0;
        const brightness = metrics?.brightness ?? null;
        const contrast = metrics?.contrast ?? null;
        const lowerLabel = cleanLabel.toLowerCase();
        const typeName = type ? type.toLowerCase() : 'hébergement';

        if (lowerLabel.includes('chambre') || lowerLabel.includes('room') || lowerLabel.includes('bed')) {
            return `\${cleanLabel}: bonne photo pour rassurer sur le confort du \${typeName}.`;
        }

        if (lowerLabel.includes('piscine') || lowerLabel.includes('pool') || lowerLabel.includes('plage') || lowerLabel.includes('beach') || lowerLabel.includes('vue')) {
            return `\${cleanLabel}: image très vendeuse, elle peut beaucoup aider à attirer les clients.`;
        }

        if (lowerLabel.includes('menu') || lowerLabel.includes('restaurant') || lowerLabel.includes('petit') || lowerLabel.includes('breakfast')) {
            return `\${cleanLabel}: utile pour vendre l’expérience et pas seulement la chambre.`;
        }

        if (brightness !== null && brightness < 90) {
            return `\${cleanLabel}: photo un peu sombre, à refaire en lumière naturelle pour mieux vendre \${location || 'le logement'}.`;
        }

        if (contrast !== null && contrast < 22) {
            return `\${cleanLabel}: contraste faible, la photo paraît moins nette et moins dynamique.`;
        }

        if (aspect > 1.15 && aspect < 1.9) {
            return `\${cleanLabel}: bon format pour une annonce, surtout en couverture.`;
        }

        if (aspect > 0 && aspect < 0.9) {
            return `\${cleanLabel}: cadrage vertical, correcte en galerie mais moins forte en couverture.`;
        }

        if (isMainPhoto) {
            return `\${cleanLabel}: bonne base comme photo principale \${sourceType === 'existing' ? 'actuelle' : 'nouvelle'}.`;
        }

        return `\${cleanLabel}: photo utile pour compléter l'annonce et montrer plus de détails.`;
    }

    async function buildLocalFallbackResult() {
        const selectedMainFile = fileInput?.files?.[0] || null;
        const selectedGalleryFiles = Array.from(galleryInput?.files || []);
        const existingMain = (workspace?.dataset?.existingImagePath || '').trim();

        let existingGallery = [];
        try {
            const parsed = JSON.parse(workspace?.dataset?.existingGalleryImages || '[]');
            if (Array.isArray(parsed)) {
                existingGallery = parsed.filter(function(item) {
                    return typeof item === 'string' && item.trim() !== '';
                });
            }
        } catch (error) {
            existingGallery = [];
        }

        const photos = [];
        const analyzableItems = [];

        if (selectedMainFile) {
            analyzableItems.push({
                label: 'Nouvelle photo principale',
                sourceType: 'upload',
                file: selectedMainFile,
                isMainPhoto: true
            });
        } else if (existingMain !== '') {
            analyzableItems.push({
                label: getLabelFromPath(existingMain) || 'Photo principale actuelle',
                sourceType: 'existing',
                url: existingMain,
                isMainPhoto: true
            });
        }

        selectedGalleryFiles.forEach(function(file, index) {
            analyzableItems.push({
                label: file?.name ? getLabelFromPath(file.name) : `Nouvelle galerie \${index + 1}`,
                sourceType: 'upload',
                file: file,
                isMainPhoto: false
            });
        });

        existingGallery.forEach(function(path, index) {
            analyzableItems.push({
                label: getLabelFromPath(path) || `Galerie existante \${index + 1}`,
                sourceType: 'existing',
                url: path,
                isMainPhoto: false
            });
        });

        const analyzedItems = [];
        for (let index = 0; index < analyzableItems.length; index++) {
            const item = analyzableItems[index];
            const metrics = item.sourceType === 'upload'
                ? await analyzeImageBlob(item.file)
                : await analyzeImageUrl(item.url);

            const width = metrics?.width ?? 0;
            const height = metrics?.height ?? 0;
            const brightness = metrics?.brightness ?? null;
            const contrast = metrics?.contrast ?? null;
            const aspect = height > 0 ? width / height : 0;

            let score = 48;
            if (width >= 1400) {
                score += 18;
            } else if (width >= 1000) {
                score += 10;
            } else if (width > 0) {
                score -= 10;
            }

            if (aspect >= 1.15 && aspect <= 1.9) {
                score += 10;
            } else if (aspect > 0 && aspect < 0.9) {
                score -= 8;
            }

            if (brightness !== null) {
                if (brightness >= 100 && brightness <= 190) {
                    score += 8;
                } else if (brightness < 90) {
                    score -= 10;
                } else {
                    score -= 4;
                }
            }

            if (contrast !== null) {
                if (contrast >= 24 && contrast <= 95) {
                    score += 6;
                } else if (contrast < 20) {
                    score -= 6;
                }
            }

            score = Math.max(0, Math.min(100, score));

            const remark = buildRemark(item.label, metrics, item.sourceType, type, location, item.isMainPhoto, index);
            const why = score >= 70
                ? 'Bonne photo à garder en avant.'
                : score >= 50
                    ? 'Correcte mais perfectible.'
                    : 'À retravailler en priorité.';
            const action = score >= 70
                ? 'Conserve-la comme photo forte dans l’annonce.'
                : score >= 50
                    ? 'Essaie un cadrage plus large et une meilleure lumière.'
                    : 'Refais-la avec plus de lumière naturelle et un angle plus clair.';

            analyzedItems.push({
                label: item.label,
                score: score,
                width: width,
                height: height,
                brightness: brightness,
                contrast: contrast,
                remark: remark,
                why: why,
                action: action,
                isMainPhoto: item.isMainPhoto
            });
        }

        analyzedItems.sort(function(a, b) {
            return (b.score || 0) - (a.score || 0);
        });

        analyzedItems.forEach(function(item, index) {
            photos.push({
                label: item.label,
                rank: index + 1,
                why: item.why
            });
        });

        const photoCount = analyzedItems.length;
        const name = (nomInput?.value || '').trim();
        const type = (typeInput?.value || '').trim();
        const location = (localisationInput?.value || '').trim();
        const price = (prixInput?.value || '').trim();
        const desc = (descriptionInput?.value || '').trim();

        let score = 40;
        score += Math.min(20, photoCount * 4);
        score += name ? 8 : 0;
        score += type ? 6 : 0;
        score += location ? 8 : 0;
        score += price ? 4 : 0;
        score += desc.length >= 80 ? 8 : (desc.length >= 30 ? 4 : 0);
        if (analyzedItems.length > 0) {
            const averagePhotoScore = analyzedItems.reduce(function(sum, item) {
                return sum + (item.score || 0);
            }, 0) / analyzedItems.length;
            score += Math.round(averagePhotoScore / 10);
        }
        score = Math.max(0, Math.min(100, score));

        const photoRemarks = analyzedItems.map(function(item) {
            return {
                label: item.label,
                score: item.score,
                remark: item.remark,
                why: item.why,
                action: item.action
            };
        });

        const photosToImprove = analyzedItems
            .filter(function(item) {
                return (item.score || 0) < 62;
            })
            .map(function(item) {
                return {
                    label: item.label,
                    why: item.remark,
                    action: item.action
                };
            });

        if (photosToImprove.length === 0 && analyzedItems.length > 0) {
            const weakest = analyzedItems[analyzedItems.length - 1];
            photosToImprove.push({
                label: weakest.label,
                why: weakest.remark,
                action: weakest.action
            });
        }

        const missingPhotos = [];
        if (photoCount < 3) {
            missingPhotos.push('Ajouter une vue d\\'ensemble du logement.');
            missingPhotos.push('Ajouter une photo de la salle de bain.');
            missingPhotos.push('Ajouter une photo extérieure (façade/terrasse/vue).');
        }

        const currentLabels = analyzedItems.map(function(item) {
            return item.label.toLowerCase();
        }).join(' ');

        if (!currentLabels.includes('chambre')) {
            missingPhotos.push('Ajouter une photo claire de la chambre principale.');
        }
        if (!currentLabels.includes('salon') && !currentLabels.includes('living') && !currentLabels.includes('séjour') && !currentLabels.includes('sejour')) {
            missingPhotos.push('Ajouter une photo du salon ou de la pièce de vie.');
        }
        if (!currentLabels.includes('bain') && !currentLabels.includes('bath')) {
            missingPhotos.push('Ajouter une photo de la salle de bain.');
        }
        if (!currentLabels.includes('vue') && !currentLabels.includes('terrasse') && !currentLabels.includes('balcon') && !currentLabels.includes('extérieur') && !currentLabels.includes('exterieur')) {
            missingPhotos.push('Ajouter une photo extérieure ou une vue depuis le logement.');
        }
        if (!currentLabels.includes('menu') && !currentLabels.includes('restaurant') && !currentLabels.includes('petit')) {
            missingPhotos.push('Ajouter une photo d’ambiance ou de repas si tu veux mieux vendre l’expérience.');
        }

        const uniqueMissingPhotos = Array.from(new Set(missingPhotos));

        const descriptionSuggestion = [
            `\${name || 'Cet hébergement'} est un \${type ? type.toLowerCase() : 'logement'} situé à \${location || 'un emplacement pratique'}.`,
            `\${price ? `Disponible à partir de \${price}€ par nuit,` : 'Il offre'} un bon niveau de confort pour un séjour agréable.`,
            analyzedItems.length > 0
                ? `La photo la plus forte actuellement est \${analyzedItems[0].label}, ce qui aide à capter l’attention dès le premier coup d’œil.`
                : 'Ajoute une photo principale forte pour donner tout de suite envie de réserver.',
            photoCount >= 4
                ? 'La galerie met bien en valeur les espaces clés et rassure les clients avant réservation.'
                : 'Ajoute encore quelques photos des pièces principales pour augmenter la confiance et le taux de réservation.'
        ].join(' ');

        const recommendationSummary = photoCount >= 4
            ? `Analyse locale très solide pour ce \${type || 'hébergement'}: plusieurs photos permettent déjà de comparer les points forts et les points à retravailler.`
            : `Analyse locale en cours de renforcement pour ce \${type || 'hébergement'}: il manque encore quelques angles pour vendre l'annonce plus fort.`;

        return {
            score: score,
            bestCoverPhoto: analyzedItems[0]?.label || 'Photo principale',
            bestPhotos: photos,
            photoRemarks: photoRemarks,
            photosToImprove: photosToImprove,
            missingPhotos: uniqueMissingPhotos,
            descriptionSuggestion: descriptionSuggestion,
            recommendationSummary: recommendationSummary,
            recommendations: [
                'Garde la meilleure photo en couverture.',
                'Ajoute des angles variés: chambre, salon, salle de bain, extérieur.',
                'Vérifie luminosité et netteté avant publication.'
            ],
            analysisMode: 'local-fallback'
        };
    }

    function renderGalleryPreview(files) {
        if (!galleryPreview) {
            return;
        }

        galleryPreview.querySelectorAll('[data-preview-item=\"1\"]').forEach(function(node) {
            node.remove();
        });

        const emptyState = document.getElementById('galleryPreviewEmpty');
        if (emptyState) {
            emptyState.remove();
        }

        const selectedFiles = Array.from(files || []);
        if (selectedFiles.length === 0) {
            if (!galleryPreview.querySelector('[data-gallery-existing=\"1\"]')) {
                const fallback = document.createElement('div');
                fallback.id = 'galleryPreviewEmpty';
                fallback.style.gridColumn = '1 / -1';
                fallback.style.color = 'rgba(47, 168, 255, 0.5)';
                fallback.style.textAlign = 'center';
                fallback.style.padding = '20px 0';
                fallback.innerHTML = '<i class=\"fas fa-images\" style=\"font-size: 34px; display: block; margin-bottom: 8px;\"></i><p style=\"margin: 0; font-size: 13px;\">Aucune photo de galerie sélectionnée</p>';
                galleryPreview.appendChild(fallback);
            }
            return;
        }

        selectedFiles.forEach(function(file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const wrapper = document.createElement('div');
                wrapper.setAttribute('data-preview-item', '1');
                wrapper.style.position = 'relative';
                wrapper.style.borderRadius = '10px';
                wrapper.style.overflow = 'hidden';
                wrapper.style.minHeight = '110px';
                wrapper.style.background = 'rgba(11, 45, 74, 0.2)';
                wrapper.style.border = '1px solid rgba(47, 168, 255, 0.15)';
                wrapper.innerHTML = `<img src=\"\${event.target.result}\" alt=\"Aperçu\" style=\"width: 100%; height: 100%; object-fit: cover; display: block;\">`;
                galleryPreview.appendChild(wrapper);
            };
            reader.readAsDataURL(file);
        });
    }

    // Image preview
    if (fileInput) {
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    imagePreview.innerHTML = `<img src=\"\${event.target.result}\" alt=\"Preview\" style=\"max-width: 100%; max-height: 200px; border-radius: 8px; object-fit: cover;\">`;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    if (galleryInput) {
        galleryInput.addEventListener('change', function(e) {
            renderGalleryPreview(e.target.files);
        });
    }

    let aiAnalyzeInFlight = false;

    if (aiAnalyzeBtn && formElement && aiAnalyzeBtn.dataset.aiAnalyzeBound !== '1') {
        aiAnalyzeBtn.dataset.aiAnalyzeBound = '1';

        aiAnalyzeBtn.addEventListener('click', async function(event) {
            event.preventDefault();
            event.stopPropagation();

            if (aiAnalyzeInFlight) {
                return;
            }

            aiAnalyzeInFlight = true;
            const formData = new FormData(formElement);
            formData.append('ai_existing_image_path', workspace?.dataset?.existingImagePath || '');
            formData.append('ai_existing_gallery_images', workspace?.dataset?.existingGalleryImages || '[]');
            formData.set('ai_nom', nomInput?.value?.trim() || '');
            formData.set('ai_type', typeInput?.value?.trim() || '');
            formData.set('ai_localisation', localisationInput?.value?.trim() || '');
            formData.set('ai_description', descriptionInput?.value?.trim() || '');
            formData.set('ai_prixParNuit', prixInput?.value?.trim() || '');
            formData.set('ai_disponibilite', disponibiliteInput?.value?.trim() || '');

            aiAnalyzeBtn.disabled = true;
            aiAnalyzeBtn.style.opacity = '0.75';
            showAiStatus('Analyse en cours...');

            try {
                let data = null;
                let lastErrorMessage = '';

                for (let attempt = 1; attempt <= 2; attempt++) {
                    const response = await fetch('{{ path('admin_hebergement_ai_analyze') }}', {
                        method: 'POST',
                        body: formData,
                        credentials: 'same-origin',
                        cache: 'no-store',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    });

                    const rawResponse = await response.text();
                    let parsed = null;

                    if (rawResponse.trim() !== '') {
                        try {
                            parsed = JSON.parse(rawResponse);
                        } catch (parseError) {
                            parsed = null;
                        }
                    }

                    if (response.ok && parsed && typeof parsed === 'object') {
                        data = parsed;
                        break;
                    }

                    if (!response.ok) {
                        lastErrorMessage = (parsed && (parsed.error || parsed.details))
                            ? `\${parsed.error || 'Erreur serveur'}\${parsed.details ? ` (\${parsed.details})` : ''}`
                            : `HTTP \${response.status} \${response.statusText}`;
                    } else {
                        lastErrorMessage = 'Réponse invalide du serveur (JSON attendu).';
                    }

                    if (attempt < 2) {
                        showAiStatus('Réponse instable détectée, nouvelle tentative...');
                    }
                }

                if (!data) {
                    const fallbackData = buildLocalFallbackResult();
                    applyAiResult(fallbackData);
                    showAiStatus('Analyse locale affichée.');
                } else {
                    applyAiResult(data);
                    showAiStatus(data.analysisMode === 'openai' ? 'Analyse IA générée avec vision.' : 'Analyse locale générée. Branche OPENAI_API_KEY pour la vision avancée.');
                }
            } catch (error) {
                console.error(error);
                const fallbackData = buildLocalFallbackResult();
                applyAiResult(fallbackData);
                showAiStatus('Analyse locale affichée.');
            } finally {
                aiAnalyzeInFlight = false;
                aiAnalyzeBtn.disabled = false;
                aiAnalyzeBtn.style.opacity = '1';
            }
        });
    }

    if (applyAiDescriptionBtn && descriptionInput) {
        applyAiDescriptionBtn.addEventListener('click', function(event) {
            event.preventDefault();
            event.stopPropagation();

            const descriptionValue = currentAiDescription || (aiDescription?.textContent || '').trim();
            if (descriptionValue === '') {
                showAiStatus('Aucune description IA disponible. Lance d\\'abord l\\'analyse.', true);
                return;
            }

            const targetDescriptionField = descriptionInput || document.querySelector('textarea[name\$=\"[description]\"]');
            if (!targetDescriptionField) {
                showAiStatus('Champ Description introuvable dans le formulaire.', true);
                return;
            }

            targetDescriptionField.value = descriptionValue;
            targetDescriptionField.dispatchEvent(new Event('input', { bubbles: true }));
            targetDescriptionField.dispatchEvent(new Event('change', { bubbles: true }));
            targetDescriptionField.focus();
            showAiStatus('Description injectee dans le champ Description.', false);
        });
    }

    if (formElement) {
        formElement.addEventListener('submit', function(event) {
            if (!isCreateMode) {
                return;
            }

            const score = Number(aiScoreInput?.value || 0);
            const analyzed = (aiAnalyzedInput?.value || '0') === '1';
            if (!analyzed || score <= 60) {
                event.preventDefault();
                showAiStatus('Creation bloquee: lance l\\'analyse IA et obtiens un score strictement superieur a 60/100.', true);
                updateCreateGate(score, analyzed);
            }
        });
    }

    updateCreateGate(Number(aiScoreInput?.value || 0), (aiAnalyzedInput?.value || '0') === '1');

    // Location Picker
    let mapWindowListener = null;
    window.openMapPicker = function() {
        const mapWindow = window.open('/admin/map/location-picker', 'locationPicker', 'width=1000,height=800');

        // Créer un listener unique
        mapWindowListener = function(event) {
            console.log('📨 Message reçu:', event.data);

            if (event.data && event.data.action === 'setCoordinates') {
                console.log('✅ setCoordinates message valide');

                latInput.value = event.data.latitude;
                lonInput.value = event.data.longitude;
                console.log('✓ Champs d\\'affichage mis à jour:', latInput.value, lonInput.value);

                // Also update the actual hidden form fields
                const latField = document.getElementById('{{ form.latitude.vars.id }}');
                const lonField = document.getElementById('{{ form.longitude.vars.id }}');
                console.log('🔍 latField ID:', '{{ form.latitude.vars.id }}', 'exists:', !!latField);
                console.log('🔍 lonField ID:', '{{ form.longitude.vars.id }}', 'exists:', !!lonField);

                if (latField) {
                    latField.value = event.data.latitude;
                    console.log('✓ latField.value =', latField.value);
                }
                if (lonField) {
                    lonField.value = event.data.longitude;
                    console.log('✓ lonField.value =', lonField.value);
                }

                coordsStatus.style.display = 'block';
                console.log('✓ Coordonnées reçues et sauvegardées:', event.data.latitude, event.data.longitude);

                // Retirer le listener après réception
                window.removeEventListener('message', mapWindowListener);
            } else {
                console.log('⚠️ Message ignoré - pas d\\'action setCoordinates');
            }
        };

        // Ajouter le listener
        window.addEventListener('message', mapWindowListener);

        // Vérifier si la fenêtre s'est ferméepour nettoyer
        const checkInterval = setInterval(() => {
            if (!mapWindow || mapWindow.closed) {
                clearInterval(checkInterval);
                // Retirer le listener si la fenêtre est fermée
                if (mapWindowListener) {
                    window.removeEventListener('message', mapWindowListener);
                }
            }
        }, 500);
    };

    // Check if coordinates already set
    if (latInput.value && lonInput.value) {
        coordsStatus.style.display = 'block';
    }

    // Rest of the validation code...
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
        let errorDiv = input.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains('error-message')) {
            errorDiv.style.display = 'none';
        }
    }

    // Nom validation
    if (nomInput) {
        nomInput.addEventListener('input', function() {
            const value = this.value.trim();

            if (value === '') return;
            if (value.length < 3) {
                showError(this, 'Le nom doit contenir au moins 3 caractères');
            } else if (!/^[a-zA-ZÀ-ÿ\\s\\-\\']+\$/.test(value)) {
                showError(this, 'Le nom ne doit contenir que des lettres, espaces et tirets');
            } else {
                clearError(this);
            }
        });

        nomInput.addEventListener('blur', function() {
            if (this.value === '') {
                showError(this, 'Le nom ne doit pas être vide');
            }
        });
    }

    // Localisation validation
    if (localisationInput) {
        localisationInput.addEventListener('change', function() {
            if (this.value === '') {
                showError(this, 'Sélectionnez une localisation');
            } else {
                clearError(this);
            }
        });
    }

    // Description validation
    if (descriptionInput) {
        descriptionInput.addEventListener('input', function() {
            const value = this.value.trim();

            if (value === '') return;
            if (value.length < 10) {
                showError(this, 'La description doit contenir au moins 10 caractères');
            } else if (value.length > 1000) {
                showError(this, 'La description ne doit pas dépasser 1000 caractères');
            } else {
                clearError(this);
            }
        });

        descriptionInput.addEventListener('blur', function() {
            if (this.value === '') {
                showError(this, 'La description ne doit pas être vide');
            }
        });
    }

    // Prix validation
    if (prixInput) {
        prixInput.addEventListener('input', function() {
            const value = this.value;

            if (value === '') return;
            if (isNaN(value) || value < 0) {
                showError(this, 'Le prix par nuit doit être positif');
            } else {
                clearError(this);
            }
        });
    }

    if (formElement) {
        formElement.addEventListener('submit', function(event) {
            // Log coordinates before submit
            console.log('📋 FORM SUBMISSION DEBUG:');
            console.log('  latInput.value:', document.getElementById('latitudeInput')?.value);
            console.log('  lonInput.value:', document.getElementById('longitudeInput')?.value);

            const latField = document.getElementById('{{ form.latitude.vars.id }}');
            const lonField = document.getElementById('{{ form.longitude.vars.id }}');
            console.log('  hidden latField.value ({{ form.latitude.vars.id }}):', latField?.value);
            console.log('  hidden lonField.value ({{ form.longitude.vars.id }}):', lonField?.value);

            let hasError = false;

            if (nomInput) {
                const nomValue = nomInput.value.trim();
                if (nomValue === '') {
                    showError(nomInput, 'Le nom ne doit pas être vide');
                    hasError = true;
                } else if (nomValue.length < 3) {
                    showError(nomInput, 'Le nom doit contenir au moins 3 caractères');
                    hasError = true;
                } else if (!/^[a-zA-ZÀ-ÿ\\s\\-']+\$/.test(nomValue)) {
                    showError(nomInput, 'Le nom ne doit contenir que des lettres, espaces et tirets');
                    hasError = true;
                }
            }

            if (localisationInput && localisationInput.value === '') {
                showError(localisationInput, 'Sélectionnez une localisation');
                hasError = true;
            }

            if (descriptionInput) {
                const descriptionValue = descriptionInput.value.trim();
                if (descriptionValue === '') {
                    showError(descriptionInput, 'La description ne doit pas être vide');
                    hasError = true;
                } else if (descriptionValue.length < 10) {
                    showError(descriptionInput, 'La description doit contenir au moins 10 caractères');
                    hasError = true;
                } else if (descriptionValue.length > 1000) {
                    showError(descriptionInput, 'La description ne doit pas dépasser 1000 caractères');
                    hasError = true;
                }
            }

            if (prixInput && prixInput.value !== '' && (isNaN(prixInput.value) || Number(prixInput.value) < 0)) {
                showError(prixInput, 'Le prix par nuit doit être positif');
                hasError = true;
            }

            if (hasError) {
                event.preventDefault();
            }
        });
    }

});
</script>

{% endblock %}
", "admin/hebergements/form.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\hebergements\\form.html.twig");
    }
}
