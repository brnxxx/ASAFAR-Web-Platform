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

/* admin/categories_hebergement/index.html.twig */
class __TwigTemplate_d7e5e265c33d0db499dae17606a80e25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories_hebergement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories_hebergement/index.html.twig"));

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

        yield "Categories Hebergement - Admin ASAFAR";
        
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
        yield "    <i class=\"fas fa-tags\"></i> Gestion des Categories d'Hebergement
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        yield "Categories Hebergement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "<div class=\"toolbar\">
    <div class=\"toolbar-right\" style=\"margin-left: auto;\">
        <div class=\"search-box-inline category-search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"searchCategorieHebergement\" placeholder=\"Rechercher une categorie...\" aria-label=\"Rechercher une categorie\">
        </div>
        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_hebergement_create");
        yield "\" class=\"btn btn-primary js-open-category-modal\" data-modal-title=\"Ajouter une Categorie d'Hebergement\">
            <i class=\"fas fa-plus\"></i>
            <span>Ajouter</span>
        </a>
    </div>
</div>

";
        // line 25
        if ((($tmp = (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Categories d'Hebergement
        </div>
        <div class=\"table-info\">
            ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 33, $this->source); })())), "html", null, true);
            yield " categorie";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 33, $this->source); })())) > 1)) {
                yield "s";
            }
            // line 34
            yield "        </div>
    </div>

    <table id=\"categoriesHebergementTable\">
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 47, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 48
                yield "            <tr data-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 48)), "html", null, true);
                yield "\">
                <td>
                    ";
                // line 50
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "imagePath", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 51
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "imagePath", [], "any", false, false, false, 51), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 51), "html", null, true);
                    yield "\" class=\"categorie-thumb\">
                    ";
                } else {
                    // line 53
                    yield "                        <div class=\"categorie-thumb placeholder\">
                            <i class=\"fas fa-image\"></i>
                        </div>
                    ";
                }
                // line 57
                yield "                </td>
                <td>
                    <strong style=\"color: var(--text-primary);\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 59), "html", null, true);
                yield "</strong>
                </td>
                <td>
                    <small style=\"color: rgba(244, 248, 252, 0.7);\">
                        ";
                // line 63
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 64), 0, 70), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 64)) > 70)) {
                        yield "...";
                    }
                    // line 65
                    yield "                        ";
                } else {
                    // line 66
                    yield "                            <span style=\"color: rgba(244, 248, 252, 0.4);\">-</span>
                        ";
                }
                // line 68
                yield "                    </small>
                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_hebergement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 72)]), "html", null, true);
                yield "\" class=\"btn-action btn-edit js-open-category-modal\" data-modal-title=\"Modifier Categorie d'Hebergement\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"POST\" action=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_hebergement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 75)]), "html", null, true);
                yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Etes-vous sur? Cette action est irreversible.');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "idCategorie", [], "any", false, false, false, 76))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn-action btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "        </tbody>
    </table>
</div>
";
        } else {
            // line 89
            yield "<div class=\"empty-state\">
    <i class=\"fas fa-inbox\" style=\"display: block;\"></i>
    <p>Aucune categorie d'hebergement trouvee</p>
    <small style=\"color: rgba(244, 248, 252, 0.4); display: block; margin-bottom: 20px;\">Commencez par creer votre premiere categorie</small>
    <a href=\"";
            // line 93
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_hebergement_create");
            yield "\" class=\"btn btn-primary js-open-category-modal\" data-modal-title=\"Ajouter une Categorie d'Hebergement\">
        <i class=\"fas fa-plus\"></i>
        <span>Creer la premiere categorie</span>
    </a>
</div>
";
        }
        // line 99
        yield "
<div id=\"categoryHebergementModal\" class=\"category-modal-overlay\" aria-hidden=\"true\">
    <div class=\"category-modal-card\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"categoryModalTitle\">
        <div class=\"category-modal-header\">
            <h3 id=\"categoryModalTitle\">Categorie d'Hebergement</h3>
            <button type=\"button\" id=\"categoryModalClose\" class=\"category-modal-close\" aria-label=\"Fermer\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div class=\"category-modal-body\">
            <iframe id=\"categoryModalFrame\" title=\"Formulaire Categorie Hebergement\"></iframe>
        </div>
    </div>
</div>

<style>
    .categorie-thumb {
        width: 64px;
        height: 48px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid rgba(47, 168, 255, 0.25);
    }

    .categorie-thumb.placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(47, 168, 255, 0.08);
        color: rgba(47, 168, 255, 0.5);
    }

    .category-search-box {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
        width: 320px;
    }

    .category-search-box i {
        color: #A7E3FF;
    }

    .category-search-box input {
        flex: 1;
        border: none;
        outline: none;
        background: transparent;
        color: white;
        font-size: 14px;
    }

    .category-search-box input::placeholder {
        color: rgba(167, 227, 255, 0.5);
    }

    .category-modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(5, 20, 33, 0.72);
        backdrop-filter: blur(6px);
        display: none;
        align-items: center;
        justify-content: center;
        padding: 24px;
        z-index: 1900;
    }

    .category-modal-overlay.active {
        display: flex;
    }

    .category-modal-card {
        width: min(960px, 100%);
        max-height: calc(100vh - 48px);
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(47, 168, 255, 0.28);
        box-shadow: 0 30px 90px rgba(0, 0, 0, 0.45);
        background: rgba(11, 45, 74, 0.98);
        animation: categoryModalIn 0.22s ease;
    }

    @keyframes categoryModalIn {
        from {
            transform: translateY(16px) scale(0.98);
            opacity: 0;
        }
        to {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }

    .category-modal-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 18px;
        border-bottom: 1px solid rgba(47, 168, 255, 0.2);
        background: rgba(7, 27, 46, 0.95);
    }

    .category-modal-header h3 {
        margin: 0;
        color: var(--text-primary);
        font-size: 16px;
        font-weight: 700;
    }

    .category-modal-close {
        width: 34px;
        height: 34px;
        border-radius: 8px;
        border: 1px solid rgba(47, 168, 255, 0.3);
        background: rgba(255, 255, 255, 0.03);
        color: var(--text-secondary);
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .category-modal-close:hover {
        color: var(--text-primary);
        border-color: rgba(47, 168, 255, 0.6);
        background: rgba(47, 168, 255, 0.12);
    }

    .category-modal-body {
        height: calc(100vh - 126px);
        min-height: 460px;
        background: rgba(5, 20, 33, 0.9);
    }

    #categoryModalFrame {
        width: 100%;
        height: 100%;
        border: 0;
        background: transparent;
    }

    @media (max-width: 768px) {
        .category-search-box {
            width: 100%;
        }

        .toolbar-right {
            width: 100%;
            flex-wrap: wrap;
        }

        .category-modal-overlay {
            padding: 10px;
        }

        .category-modal-body {
            min-height: 380px;
            height: calc(100vh - 110px);
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchCategorieHebergement');
    const rows = document.querySelectorAll('#categoriesHebergementTable tbody tr');
    const modalTriggers = document.querySelectorAll('.js-open-category-modal');
    const modal = document.getElementById('categoryHebergementModal');
    const modalTitle = document.getElementById('categoryModalTitle');
    const modalClose = document.getElementById('categoryModalClose');
    const modalFrame = document.getElementById('categoryModalFrame');
    let modalOpened = false;

    function applySearch() {
        const term = (searchInput?.value || '').toLowerCase().trim();

        rows.forEach(row => {
            const name = row.dataset.name || '';
            row.style.display = name.includes(term) ? '' : 'none';
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', applySearch);
    }

    function openModal(url, title) {
        if (!modal || !modalFrame) {
            window.location.href = url;
            return;
        }

        modalTitle.textContent = title || 'Categorie d\\'Hebergement';
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        modalOpened = true;
        modalFrame.src = url;
    }

    function closeModal() {
        if (!modal || !modalFrame) {
            return;
        }

        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        modalFrame.src = 'about:blank';
        document.body.style.overflow = '';
        modalOpened = false;
    }

    modalTriggers.forEach(function(trigger) {
        trigger.addEventListener('click', function(event) {
            event.preventDefault();
            openModal(this.href, this.dataset.modalTitle || 'Categorie d\\'Hebergement');
        });
    });

    if (modalClose) {
        modalClose.addEventListener('click', closeModal);
    }

    if (modal) {
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modalOpened) {
            closeModal();
        }
    });

    if (modalFrame) {
        modalFrame.addEventListener('load', function() {
            try {
                const frameDocument = modalFrame.contentDocument;
                if (frameDocument && !frameDocument.getElementById('categorie-hebergement-frame-style')) {
                    const cleanupStyle = frameDocument.createElement('style');
                    cleanupStyle.id = 'categorie-hebergement-frame-style';
                    cleanupStyle.textContent = [
                        '.sidebar, .top-bar { display: none !important; }',
                        '.main-content { margin-left: 0 !important; width: 100% !important; }',
                        '.page-content { padding: 18px !important; }',
                        '.content-header, .breadcrumb { display: none !important; }',
                        '.search-box, .notification-btn, .settings-btn { display: none !important; }'
                    ].join(' ');

                    frameDocument.head.appendChild(cleanupStyle);

                    const cancelButton = frameDocument.querySelector('.btn-cancel');
                    if (cancelButton) {
                        cancelButton.addEventListener('click', function(event) {
                            event.preventDefault();
                            closeModal();
                        });
                    }
                }

                const frameUrl = new URL(modalFrame.contentWindow.location.href);
                const isBackToIndex = frameUrl.pathname.endsWith('/admin/categories-hebergement') || frameUrl.pathname.endsWith('/admin/hebergements/categories');

                if (modalOpened && isBackToIndex) {
                    closeModal();
                    window.location.reload();
                }
            } catch (e) {
                // Keep modal open if iframe URL cannot be inspected.
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
        return "admin/categories_hebergement/index.html.twig";
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
        return array (  304 => 99,  295 => 93,  289 => 89,  283 => 85,  268 => 76,  264 => 75,  258 => 72,  252 => 68,  248 => 66,  245 => 65,  239 => 64,  237 => 63,  230 => 59,  226 => 57,  220 => 53,  212 => 51,  210 => 50,  204 => 48,  200 => 47,  185 => 34,  179 => 33,  170 => 26,  168 => 25,  158 => 18,  150 => 12,  137 => 11,  114 => 9,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Categories Hebergement - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-tags\"></i> Gestion des Categories d'Hebergement
{% endblock %}

{% block breadcrumb %}Categories Hebergement{% endblock %}

{% block content %}
<div class=\"toolbar\">
    <div class=\"toolbar-right\" style=\"margin-left: auto;\">
        <div class=\"search-box-inline category-search-box\">
            <i class=\"fas fa-search\"></i>
            <input type=\"text\" id=\"searchCategorieHebergement\" placeholder=\"Rechercher une categorie...\" aria-label=\"Rechercher une categorie\">
        </div>
        <a href=\"{{ path('admin_categorie_hebergement_create') }}\" class=\"btn btn-primary js-open-category-modal\" data-modal-title=\"Ajouter une Categorie d'Hebergement\">
            <i class=\"fas fa-plus\"></i>
            <span>Ajouter</span>
        </a>
    </div>
</div>

{% if categories %}
<div class=\"table-container\">
    <div class=\"table-header\">
        <div class=\"table-title\">
            <i class=\"fas fa-list\"></i>
            Liste des Categories d'Hebergement
        </div>
        <div class=\"table-info\">
            {{ categories|length }} categorie{% if categories|length > 1 %}s{% endif %}
        </div>
    </div>

    <table id=\"categoriesHebergementTable\">
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for categorie in categories %}
            <tr data-name=\"{{ categorie.nom|lower }}\">
                <td>
                    {% if categorie.imagePath %}
                        <img src=\"{{ categorie.imagePath }}\" alt=\"{{ categorie.nom }}\" class=\"categorie-thumb\">
                    {% else %}
                        <div class=\"categorie-thumb placeholder\">
                            <i class=\"fas fa-image\"></i>
                        </div>
                    {% endif %}
                </td>
                <td>
                    <strong style=\"color: var(--text-primary);\">{{ categorie.nom }}</strong>
                </td>
                <td>
                    <small style=\"color: rgba(244, 248, 252, 0.7);\">
                        {% if categorie.description %}
                            {{ categorie.description|slice(0, 70) }}{% if categorie.description|length > 70 %}...{% endif %}
                        {% else %}
                            <span style=\"color: rgba(244, 248, 252, 0.4);\">-</span>
                        {% endif %}
                    </small>
                </td>
                <td>
                    <div class=\"action-buttons\">
                        <a href=\"{{ path('admin_categorie_hebergement_edit', {'id': categorie.idCategorie}) }}\" class=\"btn-action btn-edit js-open-category-modal\" data-modal-title=\"Modifier Categorie d'Hebergement\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"POST\" action=\"{{ path('admin_categorie_hebergement_delete', {'id': categorie.idCategorie}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Etes-vous sur? Cette action est irreversible.');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ categorie.idCategorie) }}\">
                            <button type=\"submit\" class=\"btn-action btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% else %}
<div class=\"empty-state\">
    <i class=\"fas fa-inbox\" style=\"display: block;\"></i>
    <p>Aucune categorie d'hebergement trouvee</p>
    <small style=\"color: rgba(244, 248, 252, 0.4); display: block; margin-bottom: 20px;\">Commencez par creer votre premiere categorie</small>
    <a href=\"{{ path('admin_categorie_hebergement_create') }}\" class=\"btn btn-primary js-open-category-modal\" data-modal-title=\"Ajouter une Categorie d'Hebergement\">
        <i class=\"fas fa-plus\"></i>
        <span>Creer la premiere categorie</span>
    </a>
</div>
{% endif %}

<div id=\"categoryHebergementModal\" class=\"category-modal-overlay\" aria-hidden=\"true\">
    <div class=\"category-modal-card\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"categoryModalTitle\">
        <div class=\"category-modal-header\">
            <h3 id=\"categoryModalTitle\">Categorie d'Hebergement</h3>
            <button type=\"button\" id=\"categoryModalClose\" class=\"category-modal-close\" aria-label=\"Fermer\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
        <div class=\"category-modal-body\">
            <iframe id=\"categoryModalFrame\" title=\"Formulaire Categorie Hebergement\"></iframe>
        </div>
    </div>
</div>

<style>
    .categorie-thumb {
        width: 64px;
        height: 48px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid rgba(47, 168, 255, 0.25);
    }

    .categorie-thumb.placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(47, 168, 255, 0.08);
        color: rgba(47, 168, 255, 0.5);
    }

    .category-search-box {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
        width: 320px;
    }

    .category-search-box i {
        color: #A7E3FF;
    }

    .category-search-box input {
        flex: 1;
        border: none;
        outline: none;
        background: transparent;
        color: white;
        font-size: 14px;
    }

    .category-search-box input::placeholder {
        color: rgba(167, 227, 255, 0.5);
    }

    .category-modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(5, 20, 33, 0.72);
        backdrop-filter: blur(6px);
        display: none;
        align-items: center;
        justify-content: center;
        padding: 24px;
        z-index: 1900;
    }

    .category-modal-overlay.active {
        display: flex;
    }

    .category-modal-card {
        width: min(960px, 100%);
        max-height: calc(100vh - 48px);
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(47, 168, 255, 0.28);
        box-shadow: 0 30px 90px rgba(0, 0, 0, 0.45);
        background: rgba(11, 45, 74, 0.98);
        animation: categoryModalIn 0.22s ease;
    }

    @keyframes categoryModalIn {
        from {
            transform: translateY(16px) scale(0.98);
            opacity: 0;
        }
        to {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }

    .category-modal-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 18px;
        border-bottom: 1px solid rgba(47, 168, 255, 0.2);
        background: rgba(7, 27, 46, 0.95);
    }

    .category-modal-header h3 {
        margin: 0;
        color: var(--text-primary);
        font-size: 16px;
        font-weight: 700;
    }

    .category-modal-close {
        width: 34px;
        height: 34px;
        border-radius: 8px;
        border: 1px solid rgba(47, 168, 255, 0.3);
        background: rgba(255, 255, 255, 0.03);
        color: var(--text-secondary);
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .category-modal-close:hover {
        color: var(--text-primary);
        border-color: rgba(47, 168, 255, 0.6);
        background: rgba(47, 168, 255, 0.12);
    }

    .category-modal-body {
        height: calc(100vh - 126px);
        min-height: 460px;
        background: rgba(5, 20, 33, 0.9);
    }

    #categoryModalFrame {
        width: 100%;
        height: 100%;
        border: 0;
        background: transparent;
    }

    @media (max-width: 768px) {
        .category-search-box {
            width: 100%;
        }

        .toolbar-right {
            width: 100%;
            flex-wrap: wrap;
        }

        .category-modal-overlay {
            padding: 10px;
        }

        .category-modal-body {
            min-height: 380px;
            height: calc(100vh - 110px);
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchCategorieHebergement');
    const rows = document.querySelectorAll('#categoriesHebergementTable tbody tr');
    const modalTriggers = document.querySelectorAll('.js-open-category-modal');
    const modal = document.getElementById('categoryHebergementModal');
    const modalTitle = document.getElementById('categoryModalTitle');
    const modalClose = document.getElementById('categoryModalClose');
    const modalFrame = document.getElementById('categoryModalFrame');
    let modalOpened = false;

    function applySearch() {
        const term = (searchInput?.value || '').toLowerCase().trim();

        rows.forEach(row => {
            const name = row.dataset.name || '';
            row.style.display = name.includes(term) ? '' : 'none';
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', applySearch);
    }

    function openModal(url, title) {
        if (!modal || !modalFrame) {
            window.location.href = url;
            return;
        }

        modalTitle.textContent = title || 'Categorie d\\'Hebergement';
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        modalOpened = true;
        modalFrame.src = url;
    }

    function closeModal() {
        if (!modal || !modalFrame) {
            return;
        }

        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        modalFrame.src = 'about:blank';
        document.body.style.overflow = '';
        modalOpened = false;
    }

    modalTriggers.forEach(function(trigger) {
        trigger.addEventListener('click', function(event) {
            event.preventDefault();
            openModal(this.href, this.dataset.modalTitle || 'Categorie d\\'Hebergement');
        });
    });

    if (modalClose) {
        modalClose.addEventListener('click', closeModal);
    }

    if (modal) {
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modalOpened) {
            closeModal();
        }
    });

    if (modalFrame) {
        modalFrame.addEventListener('load', function() {
            try {
                const frameDocument = modalFrame.contentDocument;
                if (frameDocument && !frameDocument.getElementById('categorie-hebergement-frame-style')) {
                    const cleanupStyle = frameDocument.createElement('style');
                    cleanupStyle.id = 'categorie-hebergement-frame-style';
                    cleanupStyle.textContent = [
                        '.sidebar, .top-bar { display: none !important; }',
                        '.main-content { margin-left: 0 !important; width: 100% !important; }',
                        '.page-content { padding: 18px !important; }',
                        '.content-header, .breadcrumb { display: none !important; }',
                        '.search-box, .notification-btn, .settings-btn { display: none !important; }'
                    ].join(' ');

                    frameDocument.head.appendChild(cleanupStyle);

                    const cancelButton = frameDocument.querySelector('.btn-cancel');
                    if (cancelButton) {
                        cancelButton.addEventListener('click', function(event) {
                            event.preventDefault();
                            closeModal();
                        });
                    }
                }

                const frameUrl = new URL(modalFrame.contentWindow.location.href);
                const isBackToIndex = frameUrl.pathname.endsWith('/admin/categories-hebergement') || frameUrl.pathname.endsWith('/admin/hebergements/categories');

                if (modalOpened && isBackToIndex) {
                    closeModal();
                    window.location.reload();
                }
            } catch (e) {
                // Keep modal open if iframe URL cannot be inspected.
            }
        });
    }
});
</script>
{% endblock %}
", "admin/categories_hebergement/index.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\categories_hebergement\\index.html.twig");
    }
}
