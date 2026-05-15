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

/* admin/categorie/index.html.twig */
class __TwigTemplate_684c83d9c9d2a41ad8bdc0e83b7af10e extends Template
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
            'page_icon' => [$this, 'block_page_icon'],
            'page_title' => [$this, 'block_page_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/index.html.twig"));

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

        yield "Catégories - Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_icon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_icon"));

        yield "fas fa-tags";
        
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

        yield "Gestion des Catégories";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        yield "Catégories";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "
<!-- TOOLBAR -->
<div class=\"toolbar\">
    <div class=\"toolbar-right\">
        <button class=\"btn btn-primary\" onclick=\"openModal()\">
            <i class=\"fas fa-plus\"></i> Ajouter Catégorie
        </button>
    </div>

    <div class=\"search-container\">
        <div class=\"search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"searchCategorie\" placeholder=\"Rechercher une catégorie...\">
        </div>

        <button class=\"sort-btn\" id=\"sortBtn\">
            <i class=\"fas fa-sort\"></i>
        </button>

        <div class=\"sort-menu\" id=\"sortMenu\">
    <a data-sort=\"nom_asc\">Nom ↑</a>
    <a data-sort=\"nom_desc\">Nom ↓</a>
</div>
    </div>
</div> 

<!-- TABLE -->
<div class=\"table-container\">

    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Catégories
        </div>
    </div>

    <table>
        <thead>
    <tr>
        <th>Image</th>
        <th>Nom</th>
        <th>Description</th>
        <th style=\"text-align: right;\">Actions</th>
    </tr>
</thead>

<tbody id=\"categorieTable\">
";
        // line 56
        if ((array_key_exists("categories", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 56, $this->source); })())) > 0))) {
            // line 57
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 58
                yield "        <tr>

            <!-- IMAGE -->
          <td>
    <img 
        src=\"";
                // line 63
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/loisirs/" . CoreExtension::getAttribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 63))), "html", null, true)) : (""));
                yield "\"
        width=\"60\"
        style=\"border-radius:8px;\">
</td>

            <!-- NOM -->
            <td>
                <strong>";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 70), "html", null, true);
                yield "</strong>
            </td>

            <!-- DESCRIPTION -->
            <td>
                ";
                // line 75
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 75), 0, 50) . "..."), "html", null, true)) : ("—"));
                yield "
            </td>

            <!-- ACTIONS -->
            <td>
                <div class=\"action-buttons\">

                    <button class=\"btn-action btn-edit\"
onclick='openEditModal({
    id: \"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 84), "html", null, true);
                yield "\",
    nom: \"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 85), "js"), "html", null, true);
                yield "\",
    description: \"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "description", [], "any", false, false, false, 86), "js"), "html", null, true);
                yield "\"
})'>
<i class=\"fas fa-edit\"></i>
</button>

                    <a href=\"";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                yield "\"
                       class=\"btn-action btn-delete\"
                       onclick=\"return confirm('Supprimer cette catégorie ?')\">
                        <i class=\"fas fa-trash\"></i>
                    </a>

                </div>
            </td>

        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 103
            yield "    <tr>
        <td colspan=\"4\">
            <div class=\"empty-state\">
                <i class=\"fas fa-tags\"></i>
                <h3>Aucune catégorie</h3>
                <p>Il n'y a pas encore de catégories.</p>
            </div>
        </td>
    </tr>
";
        }
        // line 113
        yield "</tbody>
    </table>

</div>

<style>

/* ================== GLOBAL FIX ================== */
*,
*::before,
*::after {
    box-sizing: border-box;
}

/* ================== TABLE ================== */
.table-container img {
    object-fit: cover;
    height: 50px;
    width: 60px;
    border-radius: 8px;
}

/* ================== MODAL ================== */
.modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(5, 20, 40, 0.75);
    backdrop-filter: blur(8px);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 999;
}

.modal-overlay.active {
    display: flex;
}

.modal {
    width: 700px;
    max-height: 90vh;
    overflow-y: auto;
    border-radius: 20px;
    padding: 30px;
    background: linear-gradient(145deg, #0B2D4A, #071B2E);
    box-shadow: 0 25px 60px rgba(0,0,0,0.6);
    color: white;
    animation: modalFade 0.3s ease;
}

@keyframes modalFade {
    from { opacity: 0; transform: scale(0.9); }
    to   { opacity: 1; transform: scale(1); }
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.modal-close {
    cursor: pointer;
    font-size: 20px;
    opacity: 0.7;
}

.modal-close:hover {
    opacity: 1;
}

.modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 15px;
    margin-top: 20px;
}

/* ================== FORM ================== */
.form-group {
    margin-bottom: 15px;
}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 12px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.1);
    background: rgba(255,255,255,0.05);
    color: white;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #2FA8FF;
    box-shadow: 0 0 0 3px rgba(47,168,255,0.15);
    outline: none;
}

textarea {
    min-height: 100px;
    resize: none;
}

/* ================== BUTTON ================== */
.btn {
    padding: 12px 20px;
    border-radius: 12px;
    border: none;
    cursor: pointer;
    font-weight: 600;
}

.btn-secondary {
    background: rgba(255,255,255,0.08);
    color: white;
}

.btn-primary {
    background: linear-gradient(135deg, #FFC107, #FF8F00);
    color: black;
}

/* ================== FILE ================== */
.file-upload-box {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px;
    border-radius: 12px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.08);
}

.file-input {
    display: none;
}

.file-button {
    background: linear-gradient(135deg, #2FA8FF, #1E6FA8);
    padding: 8px 16px;
    border-radius: 10px;
    color: white;
    cursor: pointer;
}

.file-button:hover {
    background: linear-gradient(135deg, #FFC107, #FF8F00);
    color: black;
}

#file-name {
    color: #A7E3FF;
    font-size: 13px;
}

/* ================== SEARCH ================== */
.search-container {
    display: flex;
    align-items: center;
    gap: 10px;
}

/* BOX */
.search-box {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    border-radius: 16px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.08);
    backdrop-filter: blur(10px);
    width: 320px;
}

/* ICON */
.search-box i {
    color: #A7E3FF;
}

/* INPUT */
.search-box input {
    flex: 1;
    border: none;
    outline: none;
    background: transparent;
    color: white;
    font-size: 14px;
}

/* SORT BUTTON */
.sort-btn {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.08);
    background: rgba(255,255,255,0.05);
    color: #A7E3FF;
    cursor: pointer;
}

/* MENU */
.sort-menu {
    position: absolute;
    top: 60px;
    right: 0;
    background: #0B2D4A;
    border-radius: 10px;
    display: none;
    flex-direction: column;
    overflow: hidden;
}

.sort-menu.open {
    display: flex;
}

.sort-menu a {
    padding: 10px 16px;
    color: #A7E3FF;
    cursor: pointer;
}

.sort-menu a:hover {
    background: rgba(47,168,255,0.2);
}

.search-container {
    display: flex;
    align-items: center;
    gap: 10px;
    position: relative; /* 🔥 IMPORTANT */
}
.sort-menu {
    position: absolute;
    top: 50px;   /* juste sous le bouton */
    right: 0;

    background: #0B2D4A;
    border-radius: 10px;

    display: none;
    flex-direction: column;
    overflow: hidden;

    min-width: 120px;
    z-index: 10;
}
.sort-btn {
    width: 40px;
    height: 40px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.08);

    background: rgba(255,255,255,0.05);
    color: #A7E3FF;

    cursor: pointer;
    flex-shrink: 0; /* 🔥 évite qu'il bouge */
}
/* ================== ERROR ================== */
.input-error {
    border: 1px solid #ff4d4d !important;
}

.error {
    color: #ff4d4d;
    font-size: 12px;
}

</style>
<!-- MODAL -->
<div id=\"modalCategorie\" class=\"modal-overlay\">

    <div class=\"modal\">
";
        // line 400
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), 'form_start', ["attr" => ["id" => "categorieForm", "enctype" => "multipart/form-data", "novalidate" => "novalidate"]]);
        // line 406
        yield "

        <!-- HEADER -->
        <div class=\"modal-header\">
            <h3><i class=\"fas fa-tags\"></i> Ajouter une catégorie</h3>
            <div class=\"modal-close\" onclick=\"closeModal()\">✕</div>
        </div>

        <!-- BODY -->
        <div class=\"modal-body\">

            <div class=\"form-group\">
                ";
        // line 418
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()), "nom", [], "any", false, false, false, 418), 'label');
        yield "
                ";
        // line 419
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), "nom", [], "any", false, false, false, 419), 'widget');
        yield "
                <div class=\"error\">";
        // line 420
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "nom", [], "any", false, false, false, 420), 'errors');
        yield "</div>
            </div>

            <div class=\"form-group\">
                ";
        // line 424
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "description", [], "any", false, false, false, 424), 'label');
        yield "
                ";
        // line 425
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "description", [], "any", false, false, false, 425), 'widget');
        yield "
                <div class=\"error\">";
        // line 426
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 426, $this->source); })()), "description", [], "any", false, false, false, 426), 'errors');
        yield "</div>
            </div>

          <div class=\"form-group\">

    ";
        // line 431
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 431, $this->source); })()), "imageFile", [], "any", false, false, false, 431), 'label');
        yield "

    <div class=\"file-upload-box\">

        ";
        // line 435
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "imageFile", [], "any", false, false, false, 435), 'widget', ["attr" => ["class" => "file-input", "onchange" => "updateFileName(this); previewImage(event)"]]);
        // line 440
        yield "

        <label for=\"";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 442, $this->source); })()), "imageFile", [], "any", false, false, false, 442), "vars", [], "any", false, false, false, 442), "id", [], "any", false, false, false, 442), "html", null, true);
        yield "\" class=\"file-button\">
            Choisir un fichier
        </label>

        <span id=\"file-name\">Aucun fichier choisi</span>

    </div>

    <img id=\"preview\"
         style=\"margin-top:10px;width:100%;border-radius:10px;display:none;\">

</div>

        </div>

        <!-- FOOTER -->
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal()\">Annuler</button>
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        </div>

        ";
        // line 463
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 463, $this->source); })()), 'form_end');
        yield "

    </div>

</div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById(\"modalCategorie\");
    const form = document.getElementById('categorieForm');
    const preview = document.getElementById('preview');
    const fileNameSpan = document.getElementById(\"file-name\");

    const searchInput = document.getElementById('searchCategorie');
    const sortBtn = document.getElementById('sortBtn');
    const sortMenu = document.getElementById('sortMenu');

    let submitted = false;
    let timeout;
    let currentSort = ''; // ✅ IMPORTANT

    // ───────── MODAL ─────────
    window.openModal = function () {
        if (!modal) return;

        form?.reset();
        clearErrors();

        if (preview) preview.style.display = \"none\";
        if (fileNameSpan) fileNameSpan.innerText = \"Aucun fichier choisi\";

        modal.classList.add(\"active\");
    };

    window.closeModal = function () {
        if (!modal) return;

        modal.classList.remove(\"active\");
        clearErrors();
        submitted = false;
    };

    modal?.addEventListener(\"click\", function(e) {
        if (e.target === modal) closeModal();
    });

    // ───────── IMAGE ─────────
    window.previewImage = function (event) {
        const file = event.target.files[0];
        if (file && preview) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = \"block\";
        }
    };

    window.updateFileName = function (input) {
        if (!fileNameSpan) return;
        fileNameSpan.innerText = input.files[0]?.name || \"Aucun fichier choisi\";
    };

    // ───────── LOAD DATA (SEARCH + SORT) ─────────
    function loadCategories() {

        const url = new URL(window.location.pathname, window.location.origin);

        if (searchInput?.value) {
            url.searchParams.set('search', searchInput.value);
        }

        if (currentSort) {
            url.searchParams.set('sort', currentSort);
        }

        fetch(url)
            .then(res => res.text())
            .then(html => {
                const doc = new DOMParser().parseFromString(html, 'text/html');
                const newTable = doc.getElementById('categorieTable');

                if (newTable) {
                    document.getElementById('categorieTable').innerHTML = newTable.innerHTML;
                }
            });
    }

    // 🔍 SEARCH (debounce)
    searchInput?.addEventListener('input', () => {
        clearTimeout(timeout);
        timeout = setTimeout(loadCategories, 300);
    });

    // 🔽 SORT MENU OPEN
    sortBtn?.addEventListener('click', () => {
        sortMenu.classList.toggle('open');
    });

    // 🔽 SORT CLICK
    document.querySelectorAll('#sortMenu a').forEach(item => {
        item.addEventListener('click', function () {

            currentSort = this.dataset.sort; // ✅ FIX

            loadCategories();

            sortMenu.classList.remove('open');
        });
    });

    // ───────── EDIT ─────────
    window.openEditModal = function (data) {
        openModal();

        document.querySelector('[name\$=\"[nom]\"]').value = data.nom || '';
        document.querySelector('[name\$=\"[description]\"]').value = data.description || '';

        if (form) {
            form.action = '/admin/categorie/edit/' + data.id;
        }

        if (preview) preview.style.display = \"none\";
        if (fileNameSpan) fileNameSpan.innerText = \"Image actuelle\";
    };

    // ───────── VALIDATION ─────────
    function clearErrors() {
        if (!form) return;

        form.querySelectorAll('.error').forEach(e => e.innerHTML = '');
        form.querySelectorAll('.input-error').forEach(e => e.classList.remove('input-error'));
    }

    function validateField(field) {
        if (!submitted) return;

        const group = field.closest('.form-group');
        const error = group?.querySelector('.error');
        if (!error) return;

        let message = '';

        if (field.name.includes('[nom]') && field.value.trim().length < 3)
            message = 'Minimum 3 caractères';

        if (field.name.includes('[description]') && field.value.trim().length < 10)
            message = 'Minimum 10 caractères';

        if (message) {
            field.classList.add('input-error');
            error.innerHTML = message;
        } else {
            field.classList.remove('input-error');
            error.innerHTML = '';
        }
    }

    form?.addEventListener('submit', function(e) {
        submitted = true;
        let hasError = false;

        form.querySelectorAll('input, textarea').forEach(field => {
            validateField(field);
            if (field.classList.contains('input-error')) hasError = true;
        });

        if (hasError) e.preventDefault();
    });

    form?.querySelectorAll('input, textarea').forEach(field => {
        field.addEventListener('input', () => validateField(field));
    });

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
        return "admin/categorie/index.html.twig";
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
        return array (  684 => 463,  660 => 442,  656 => 440,  654 => 435,  647 => 431,  639 => 426,  635 => 425,  631 => 424,  624 => 420,  620 => 419,  616 => 418,  602 => 406,  600 => 400,  311 => 113,  299 => 103,  281 => 91,  273 => 86,  269 => 85,  265 => 84,  253 => 75,  245 => 70,  235 => 63,  228 => 58,  223 => 57,  221 => 56,  172 => 9,  159 => 8,  136 => 6,  113 => 5,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Catégories - Admin{% endblock %}
{% block page_icon %}fas fa-tags{% endblock %}
{% block page_title %}Gestion des Catégories{% endblock %}
{% block breadcrumb %}Catégories{% endblock %}

{% block content %}

<!-- TOOLBAR -->
<div class=\"toolbar\">
    <div class=\"toolbar-right\">
        <button class=\"btn btn-primary\" onclick=\"openModal()\">
            <i class=\"fas fa-plus\"></i> Ajouter Catégorie
        </button>
    </div>

    <div class=\"search-container\">
        <div class=\"search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"searchCategorie\" placeholder=\"Rechercher une catégorie...\">
        </div>

        <button class=\"sort-btn\" id=\"sortBtn\">
            <i class=\"fas fa-sort\"></i>
        </button>

        <div class=\"sort-menu\" id=\"sortMenu\">
    <a data-sort=\"nom_asc\">Nom ↑</a>
    <a data-sort=\"nom_desc\">Nom ↓</a>
</div>
    </div>
</div> 

<!-- TABLE -->
<div class=\"table-container\">

    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Catégories
        </div>
    </div>

    <table>
        <thead>
    <tr>
        <th>Image</th>
        <th>Nom</th>
        <th>Description</th>
        <th style=\"text-align: right;\">Actions</th>
    </tr>
</thead>

<tbody id=\"categorieTable\">
{% if categories is defined and categories|length > 0 %}
    {% for c in categories %}
        <tr>

            <!-- IMAGE -->
          <td>
    <img 
        src=\"{{ c.image ? asset('images/loisirs/' ~ c.image) }}\"
        width=\"60\"
        style=\"border-radius:8px;\">
</td>

            <!-- NOM -->
            <td>
                <strong>{{ c.nom }}</strong>
            </td>

            <!-- DESCRIPTION -->
            <td>
                {{ c.description ? c.description|slice(0, 50) ~ '...' : '—' }}
            </td>

            <!-- ACTIONS -->
            <td>
                <div class=\"action-buttons\">

                    <button class=\"btn-action btn-edit\"
onclick='openEditModal({
    id: \"{{ c.id }}\",
    nom: \"{{ c.nom|e('js') }}\",
    description: \"{{ c.description|e('js') }}\"
})'>
<i class=\"fas fa-edit\"></i>
</button>

                    <a href=\"{{ path('admin_categorie_delete', {id: c.id}) }}\"
                       class=\"btn-action btn-delete\"
                       onclick=\"return confirm('Supprimer cette catégorie ?')\">
                        <i class=\"fas fa-trash\"></i>
                    </a>

                </div>
            </td>

        </tr>
    {% endfor %}
{% else %}
    <tr>
        <td colspan=\"4\">
            <div class=\"empty-state\">
                <i class=\"fas fa-tags\"></i>
                <h3>Aucune catégorie</h3>
                <p>Il n'y a pas encore de catégories.</p>
            </div>
        </td>
    </tr>
{% endif %}
</tbody>
    </table>

</div>

<style>

/* ================== GLOBAL FIX ================== */
*,
*::before,
*::after {
    box-sizing: border-box;
}

/* ================== TABLE ================== */
.table-container img {
    object-fit: cover;
    height: 50px;
    width: 60px;
    border-radius: 8px;
}

/* ================== MODAL ================== */
.modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(5, 20, 40, 0.75);
    backdrop-filter: blur(8px);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 999;
}

.modal-overlay.active {
    display: flex;
}

.modal {
    width: 700px;
    max-height: 90vh;
    overflow-y: auto;
    border-radius: 20px;
    padding: 30px;
    background: linear-gradient(145deg, #0B2D4A, #071B2E);
    box-shadow: 0 25px 60px rgba(0,0,0,0.6);
    color: white;
    animation: modalFade 0.3s ease;
}

@keyframes modalFade {
    from { opacity: 0; transform: scale(0.9); }
    to   { opacity: 1; transform: scale(1); }
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.modal-close {
    cursor: pointer;
    font-size: 20px;
    opacity: 0.7;
}

.modal-close:hover {
    opacity: 1;
}

.modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 15px;
    margin-top: 20px;
}

/* ================== FORM ================== */
.form-group {
    margin-bottom: 15px;
}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 12px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.1);
    background: rgba(255,255,255,0.05);
    color: white;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #2FA8FF;
    box-shadow: 0 0 0 3px rgba(47,168,255,0.15);
    outline: none;
}

textarea {
    min-height: 100px;
    resize: none;
}

/* ================== BUTTON ================== */
.btn {
    padding: 12px 20px;
    border-radius: 12px;
    border: none;
    cursor: pointer;
    font-weight: 600;
}

.btn-secondary {
    background: rgba(255,255,255,0.08);
    color: white;
}

.btn-primary {
    background: linear-gradient(135deg, #FFC107, #FF8F00);
    color: black;
}

/* ================== FILE ================== */
.file-upload-box {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px;
    border-radius: 12px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.08);
}

.file-input {
    display: none;
}

.file-button {
    background: linear-gradient(135deg, #2FA8FF, #1E6FA8);
    padding: 8px 16px;
    border-radius: 10px;
    color: white;
    cursor: pointer;
}

.file-button:hover {
    background: linear-gradient(135deg, #FFC107, #FF8F00);
    color: black;
}

#file-name {
    color: #A7E3FF;
    font-size: 13px;
}

/* ================== SEARCH ================== */
.search-container {
    display: flex;
    align-items: center;
    gap: 10px;
}

/* BOX */
.search-box {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    border-radius: 16px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.08);
    backdrop-filter: blur(10px);
    width: 320px;
}

/* ICON */
.search-box i {
    color: #A7E3FF;
}

/* INPUT */
.search-box input {
    flex: 1;
    border: none;
    outline: none;
    background: transparent;
    color: white;
    font-size: 14px;
}

/* SORT BUTTON */
.sort-btn {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.08);
    background: rgba(255,255,255,0.05);
    color: #A7E3FF;
    cursor: pointer;
}

/* MENU */
.sort-menu {
    position: absolute;
    top: 60px;
    right: 0;
    background: #0B2D4A;
    border-radius: 10px;
    display: none;
    flex-direction: column;
    overflow: hidden;
}

.sort-menu.open {
    display: flex;
}

.sort-menu a {
    padding: 10px 16px;
    color: #A7E3FF;
    cursor: pointer;
}

.sort-menu a:hover {
    background: rgba(47,168,255,0.2);
}

.search-container {
    display: flex;
    align-items: center;
    gap: 10px;
    position: relative; /* 🔥 IMPORTANT */
}
.sort-menu {
    position: absolute;
    top: 50px;   /* juste sous le bouton */
    right: 0;

    background: #0B2D4A;
    border-radius: 10px;

    display: none;
    flex-direction: column;
    overflow: hidden;

    min-width: 120px;
    z-index: 10;
}
.sort-btn {
    width: 40px;
    height: 40px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.08);

    background: rgba(255,255,255,0.05);
    color: #A7E3FF;

    cursor: pointer;
    flex-shrink: 0; /* 🔥 évite qu'il bouge */
}
/* ================== ERROR ================== */
.input-error {
    border: 1px solid #ff4d4d !important;
}

.error {
    color: #ff4d4d;
    font-size: 12px;
}

</style>
<!-- MODAL -->
<div id=\"modalCategorie\" class=\"modal-overlay\">

    <div class=\"modal\">
{{ form_start(form, {
    attr: {
        id: 'categorieForm',
        enctype: 'multipart/form-data',
        novalidate: 'novalidate'
    }
}) }}

        <!-- HEADER -->
        <div class=\"modal-header\">
            <h3><i class=\"fas fa-tags\"></i> Ajouter une catégorie</h3>
            <div class=\"modal-close\" onclick=\"closeModal()\">✕</div>
        </div>

        <!-- BODY -->
        <div class=\"modal-body\">

            <div class=\"form-group\">
                {{ form_label(form.nom) }}
                {{ form_widget(form.nom) }}
                <div class=\"error\">{{ form_errors(form.nom) }}</div>
            </div>

            <div class=\"form-group\">
                {{ form_label(form.description) }}
                {{ form_widget(form.description) }}
                <div class=\"error\">{{ form_errors(form.description) }}</div>
            </div>

          <div class=\"form-group\">

    {{ form_label(form.imageFile) }}

    <div class=\"file-upload-box\">

        {{ form_widget(form.imageFile, {
            attr: {
                class: 'file-input',
                onchange: 'updateFileName(this); previewImage(event)'
            }
        }) }}

        <label for=\"{{ form.imageFile.vars.id }}\" class=\"file-button\">
            Choisir un fichier
        </label>

        <span id=\"file-name\">Aucun fichier choisi</span>

    </div>

    <img id=\"preview\"
         style=\"margin-top:10px;width:100%;border-radius:10px;display:none;\">

</div>

        </div>

        <!-- FOOTER -->
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal()\">Annuler</button>
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        </div>

        {{ form_end(form) }}

    </div>

</div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById(\"modalCategorie\");
    const form = document.getElementById('categorieForm');
    const preview = document.getElementById('preview');
    const fileNameSpan = document.getElementById(\"file-name\");

    const searchInput = document.getElementById('searchCategorie');
    const sortBtn = document.getElementById('sortBtn');
    const sortMenu = document.getElementById('sortMenu');

    let submitted = false;
    let timeout;
    let currentSort = ''; // ✅ IMPORTANT

    // ───────── MODAL ─────────
    window.openModal = function () {
        if (!modal) return;

        form?.reset();
        clearErrors();

        if (preview) preview.style.display = \"none\";
        if (fileNameSpan) fileNameSpan.innerText = \"Aucun fichier choisi\";

        modal.classList.add(\"active\");
    };

    window.closeModal = function () {
        if (!modal) return;

        modal.classList.remove(\"active\");
        clearErrors();
        submitted = false;
    };

    modal?.addEventListener(\"click\", function(e) {
        if (e.target === modal) closeModal();
    });

    // ───────── IMAGE ─────────
    window.previewImage = function (event) {
        const file = event.target.files[0];
        if (file && preview) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = \"block\";
        }
    };

    window.updateFileName = function (input) {
        if (!fileNameSpan) return;
        fileNameSpan.innerText = input.files[0]?.name || \"Aucun fichier choisi\";
    };

    // ───────── LOAD DATA (SEARCH + SORT) ─────────
    function loadCategories() {

        const url = new URL(window.location.pathname, window.location.origin);

        if (searchInput?.value) {
            url.searchParams.set('search', searchInput.value);
        }

        if (currentSort) {
            url.searchParams.set('sort', currentSort);
        }

        fetch(url)
            .then(res => res.text())
            .then(html => {
                const doc = new DOMParser().parseFromString(html, 'text/html');
                const newTable = doc.getElementById('categorieTable');

                if (newTable) {
                    document.getElementById('categorieTable').innerHTML = newTable.innerHTML;
                }
            });
    }

    // 🔍 SEARCH (debounce)
    searchInput?.addEventListener('input', () => {
        clearTimeout(timeout);
        timeout = setTimeout(loadCategories, 300);
    });

    // 🔽 SORT MENU OPEN
    sortBtn?.addEventListener('click', () => {
        sortMenu.classList.toggle('open');
    });

    // 🔽 SORT CLICK
    document.querySelectorAll('#sortMenu a').forEach(item => {
        item.addEventListener('click', function () {

            currentSort = this.dataset.sort; // ✅ FIX

            loadCategories();

            sortMenu.classList.remove('open');
        });
    });

    // ───────── EDIT ─────────
    window.openEditModal = function (data) {
        openModal();

        document.querySelector('[name\$=\"[nom]\"]').value = data.nom || '';
        document.querySelector('[name\$=\"[description]\"]').value = data.description || '';

        if (form) {
            form.action = '/admin/categorie/edit/' + data.id;
        }

        if (preview) preview.style.display = \"none\";
        if (fileNameSpan) fileNameSpan.innerText = \"Image actuelle\";
    };

    // ───────── VALIDATION ─────────
    function clearErrors() {
        if (!form) return;

        form.querySelectorAll('.error').forEach(e => e.innerHTML = '');
        form.querySelectorAll('.input-error').forEach(e => e.classList.remove('input-error'));
    }

    function validateField(field) {
        if (!submitted) return;

        const group = field.closest('.form-group');
        const error = group?.querySelector('.error');
        if (!error) return;

        let message = '';

        if (field.name.includes('[nom]') && field.value.trim().length < 3)
            message = 'Minimum 3 caractères';

        if (field.name.includes('[description]') && field.value.trim().length < 10)
            message = 'Minimum 10 caractères';

        if (message) {
            field.classList.add('input-error');
            error.innerHTML = message;
        } else {
            field.classList.remove('input-error');
            error.innerHTML = '';
        }
    }

    form?.addEventListener('submit', function(e) {
        submitted = true;
        let hasError = false;

        form.querySelectorAll('input, textarea').forEach(field => {
            validateField(field);
            if (field.classList.contains('input-error')) hasError = true;
        });

        if (hasError) e.preventDefault();
    });

    form?.querySelectorAll('input, textarea').forEach(field => {
        field.addEventListener('input', () => validateField(field));
    });

});
</script>
{% endblock %}", "admin/categorie/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\categorie\\index.html.twig");
    }
}
