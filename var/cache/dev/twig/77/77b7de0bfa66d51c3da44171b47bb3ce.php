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

/* admin/dashboard.html.twig */
class __TwigTemplate_d3c88113253aaa8138abb6ddbeb8f819 extends Template
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
            'top_bar_right' => [$this, 'block_top_bar_right'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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

        yield "Tableau de bord - Admin ASAFAR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        yield "fas fa-chart-pie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        yield "Tableau de bord";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_top_bar_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top_bar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top_bar_right"));

        // line 10
        yield "<div class=\"search-box\">
<i class=\"fas fa-search\"></i>
<input type=\"text\" placeholder=\"Rechercher...\">
</div>
<button class=\"notification-btn\">
<i class=\"fas fa-bell\"></i>
<span class=\"notification-badge\">5</span>
</button>
<button class=\"settings-btn\">
<i class=\"fas fa-cog\"></i>
</button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        // line 25
        $context["activePercent"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 25, $this->source); })()), "users", [], "any", false, false, false, 25), "total", [], "any", false, false, false, 25) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 25, $this->source); })()), "users", [], "any", false, false, false, 25), "active", [], "any", false, false, false, 25) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 25, $this->source); })()), "users", [], "any", false, false, false, 25), "total", [], "any", false, false, false, 25)) * 100))) : (0));
        // line 26
        $context["inactivePercent"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 26, $this->source); })()), "users", [], "any", false, false, false, 26), "total", [], "any", false, false, false, 26) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 26, $this->source); })()), "users", [], "any", false, false, false, 26), "inactive", [], "any", false, false, false, 26) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 26, $this->source); })()), "users", [], "any", false, false, false, 26), "total", [], "any", false, false, false, 26)) * 100))) : (0));
        // line 27
        $context["blockedPercent"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 27, $this->source); })()), "users", [], "any", false, false, false, 27), "total", [], "any", false, false, false, 27) > 0)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 27, $this->source); })()), "users", [], "any", false, false, false, 27), "blocked", [], "any", false, false, false, 27) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 27, $this->source); })()), "users", [], "any", false, false, false, 27), "total", [], "any", false, false, false, 27)) * 100))) : (0));
        // line 28
        yield "
<!-- Charts Row - Dynamic Data -->
<div class=\"charts-grid\">
    <!-- Chart 1 - Distribution Utilisateurs (Donut Chart with Real Data) -->
    <div class=\"chart-card chart-cyan\">
        <div class=\"chart-header\">
            <i class=\"fas fa-chart-pie\"></i>
            <h3>Distribution des Utilisateurs</h3>
        </div>
        <div class=\"chart-content chart-flex-center\">
            <div class=\"donut-chart\">
                ";
        // line 40
        yield "                <svg viewBox=\"0 0 100 100\" class=\"donut-svg\">
                    ";
        // line 41
        $context["total"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 41), "total", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 41, $this->source); })()), "users", [], "any", false, false, false, 41), "total", [], "any", false, false, false, 41), 1)) : (1));
        // line 42
        yield "                    ";
        $context["activeDeg"] = Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 42, $this->source); })()), "users", [], "any", false, false, false, 42), "active", [], "any", false, false, false, 42) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 42, $this->source); })())) * 360));
        // line 43
        yield "                    ";
        $context["inactiveDeg"] = Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 43, $this->source); })()), "users", [], "any", false, false, false, 43), "inactive", [], "any", false, false, false, 43) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 43, $this->source); })())) * 360));
        // line 44
        yield "                    ";
        $context["blockedDeg"] = Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 44, $this->source); })()), "users", [], "any", false, false, false, 44), "blocked", [], "any", false, false, false, 44) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 44, $this->source); })())) * 360));
        // line 45
        yield "                    
                    ";
        // line 47
        yield "                    <circle cx=\"50\" cy=\"50\" r=\"40\" fill=\"none\" stroke=\"#10B981\" 
                            stroke-width=\"12\" 
                            stroke-dasharray=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["activeDeg"]) || array_key_exists("activeDeg", $context) ? $context["activeDeg"] : (function () { throw new RuntimeError('Variable "activeDeg" does not exist.', 49, $this->source); })()) * 2.513), "html", null, true);
        yield " 251.3\"
                            transform=\"rotate(-90 50 50)\"
                            class=\"donut-segment-animated\"/>
                    ";
        // line 53
        yield "                    <circle cx=\"50\" cy=\"50\" r=\"40\" fill=\"none\" stroke=\"#F59E0B\" 
                            stroke-width=\"12\" 
                            stroke-dasharray=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["inactiveDeg"]) || array_key_exists("inactiveDeg", $context) ? $context["inactiveDeg"] : (function () { throw new RuntimeError('Variable "inactiveDeg" does not exist.', 55, $this->source); })()) * 2.513), "html", null, true);
        yield " 251.3\"
                            stroke-dashoffset=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(( -(isset($context["activeDeg"]) || array_key_exists("activeDeg", $context) ? $context["activeDeg"] : (function () { throw new RuntimeError('Variable "activeDeg" does not exist.', 56, $this->source); })()) * 2.513), "html", null, true);
        yield "\"
                            transform=\"rotate(-90 50 50)\"
                            class=\"donut-segment-animated\"/>
                    ";
        // line 60
        yield "                    <circle cx=\"50\" cy=\"50\" r=\"40\" fill=\"none\" stroke=\"#F43F5E\" 
                            stroke-width=\"12\" 
                            stroke-dasharray=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["blockedDeg"]) || array_key_exists("blockedDeg", $context) ? $context["blockedDeg"] : (function () { throw new RuntimeError('Variable "blockedDeg" does not exist.', 62, $this->source); })()) * 2.513), "html", null, true);
        yield " 251.3\"
                            stroke-dashoffset=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(( -((isset($context["activeDeg"]) || array_key_exists("activeDeg", $context) ? $context["activeDeg"] : (function () { throw new RuntimeError('Variable "activeDeg" does not exist.', 63, $this->source); })()) + (isset($context["inactiveDeg"]) || array_key_exists("inactiveDeg", $context) ? $context["inactiveDeg"] : (function () { throw new RuntimeError('Variable "inactiveDeg" does not exist.', 63, $this->source); })())) * 2.513), "html", null, true);
        yield "\"
                            transform=\"rotate(-90 50 50)\"
                            class=\"donut-segment-animated\"/>
                </svg>
                <div class=\"donut-center\">
                    <span class=\"donut-value stat-number\" data-target=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 68), "total", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 68, $this->source); })()), "users", [], "any", false, false, false, 68), "total", [], "any", false, false, false, 68), 0)) : (0)), "html", null, true);
        yield "\">0</span>
                    <span class=\"donut-label\">Total</span>
                </div>
            </div>
            <div class=\"donut-legend\">
                <div class=\"legend-item\">
                    <span class=\"legend-dot\" style=\"background: #10B981;\"></span>
                    <span>Actifs (";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 75), "active", [], "any", true, true, false, 75)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 75, $this->source); })()), "users", [], "any", false, false, false, 75), "active", [], "any", false, false, false, 75), 0)) : (0)), "html", null, true);
        yield ")</span>
                </div>
                <div class=\"legend-item\">
                    <span class=\"legend-dot\" style=\"background: #F59E0B;\"></span>
                    <span>Inactifs (";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 79), "inactive", [], "any", true, true, false, 79)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 79, $this->source); })()), "users", [], "any", false, false, false, 79), "inactive", [], "any", false, false, false, 79), 0)) : (0)), "html", null, true);
        yield ")</span>
                </div>
                <div class=\"legend-item\">
                    <span class=\"legend-dot\" style=\"background: #F43F5E;\"></span>
                    <span>Bloqués (";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 83), "blocked", [], "any", true, true, false, 83)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 83, $this->source); })()), "users", [], "any", false, false, false, 83), "blocked", [], "any", false, false, false, 83), 0)) : (0)), "html", null, true);
        yield ")</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart 2 - Statuts des Utilisateurs (Progress Bars with Real Data) -->
    <div class=\"chart-card chart-emerald\">
        <div class=\"chart-header\">
            <i class=\"fas fa-chart-bar\"></i>
            <h3>Statuts des Utilisateurs</h3>
        </div>
        <div class=\"chart-content\">
            <div class=\"progress-stats\">
                <div class=\"progress-item\">
                    <div class=\"progress-header\">
                        <span><i class=\"fas fa-user-check text-emerald\"></i> Utilisateurs Actifs</span>
                        <span class=\"progress-value text-emerald\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activePercent"]) || array_key_exists("activePercent", $context) ? $context["activePercent"] : (function () { throw new RuntimeError('Variable "activePercent" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "%</span>
                    </div>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill progress-emerald\" data-progress=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activePercent"]) || array_key_exists("activePercent", $context) ? $context["activePercent"] : (function () { throw new RuntimeError('Variable "activePercent" does not exist.', 103, $this->source); })()), "html", null, true);
        yield "\"></div>
                    </div>
                </div>
                <div class=\"progress-item\">
                    <div class=\"progress-header\">
                        <span><i class=\"fas fa-user-clock text-amber\"></i> Utilisateurs Inactifs</span>
                        <span class=\"progress-value text-amber\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactivePercent"]) || array_key_exists("inactivePercent", $context) ? $context["inactivePercent"] : (function () { throw new RuntimeError('Variable "inactivePercent" does not exist.', 109, $this->source); })()), "html", null, true);
        yield "%</span>
                    </div>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill progress-amber\" data-progress=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactivePercent"]) || array_key_exists("inactivePercent", $context) ? $context["inactivePercent"] : (function () { throw new RuntimeError('Variable "inactivePercent" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "\"></div>
                    </div>
                </div>
                <div class=\"progress-item\">
                    <div class=\"progress-header\">
                        <span><i class=\"fas fa-user-slash text-rose\"></i> Utilisateurs Bloqués</span>
                        <span class=\"progress-value text-rose\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedPercent"]) || array_key_exists("blockedPercent", $context) ? $context["blockedPercent"] : (function () { throw new RuntimeError('Variable "blockedPercent" does not exist.', 118, $this->source); })()), "html", null, true);
        yield "%</span>
                    </div>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill progress-rose\" data-progress=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedPercent"]) || array_key_exists("blockedPercent", $context) ? $context["blockedPercent"] : (function () { throw new RuntimeError('Variable "blockedPercent" does not exist.', 121, $this->source); })()), "html", null, true);
        yield "\"></div>
                    </div>
                </div>
                <div class=\"progress-item\">
                    <div class=\"progress-header\">
                        <span><i class=\"fas fa-user-plus text-cyan\"></i> Nouveaux ce mois</span>
                        <span class=\"progress-value text-cyan\">+";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 127), "newThisMonth", [], "any", true, true, false, 127)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 127, $this->source); })()), "users", [], "any", false, false, false, 127), "newThisMonth", [], "any", false, false, false, 127), 0)) : (0)), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill progress-cyan\" data-progress=\"";
        // line 130
        yield (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 130), "newThisMonth", [], "any", true, true, false, 130)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 130, $this->source); })()), "users", [], "any", false, false, false, 130), "newThisMonth", [], "any", false, false, false, 130), 0)) : (0)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 130, $this->source); })()), "users", [], "any", false, false, false, 130), "newThisMonth", [], "any", false, false, false, 130) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 130, $this->source); })()), "users", [], "any", false, false, false, 130), "total", [], "any", false, false, false, 130)) * 100)), "html", null, true)) : (0));
        yield "\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart 3 - Croissance (Visual Bar Chart with Real Growth) -->
    <div class=\"chart-card chart-purple\">
        <div class=\"chart-header\">
            <i class=\"fas fa-chart-line\"></i>
            <h3>Croissance Mensuelle</h3>
        </div>
        <div class=\"chart-content chart-flex-center\">
            <div class=\"growth-display\">
                <div class=\"growth-circle ";
        // line 145
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 145, $this->source); })()), "users", [], "any", false, false, false, 145), "growth", [], "any", false, false, false, 145) >= 0)) ? ("growth-positive") : ("growth-negative"));
        yield "\">
                    <span class=\"growth-value\">
                        ";
        // line 147
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 147, $this->source); })()), "users", [], "any", false, false, false, 147), "growth", [], "any", false, false, false, 147) >= 0)) ? ("+") : (""));
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 147), "growth", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 147, $this->source); })()), "users", [], "any", false, false, false, 147), "growth", [], "any", false, false, false, 147), 0)) : (0)), "html", null, true);
        yield "%
                    </span>
                    <span class=\"growth-label\">ce mois</span>
                </div>
                <div class=\"growth-icon\">
                    <i class=\"fas fa-";
        // line 152
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 152, $this->source); })()), "users", [], "any", false, false, false, 152), "growth", [], "any", false, false, false, 152) >= 0)) ? ("arrow-trend-up") : ("arrow-trend-down"));
        yield "\"></i>
                </div>
            </div>
            <div class=\"growth-stats\">
                <div class=\"growth-stat-item\">
                    <span class=\"growth-stat-label\">Total</span>
                    <span class=\"growth-stat-value\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 158), "total", [], "any", true, true, false, 158)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 158, $this->source); })()), "users", [], "any", false, false, false, 158), "total", [], "any", false, false, false, 158), 0)) : (0)), "html", null, true);
        yield "</span>
                </div>
                <div class=\"growth-stat-item\">
                    <span class=\"growth-stat-label\">Nouveaux</span>
                    <span class=\"growth-stat-value growth-positive\">+";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 162), "newThisMonth", [], "any", true, true, false, 162)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 162, $this->source); })()), "users", [], "any", false, false, false, 162), "newThisMonth", [], "any", false, false, false, 162), 0)) : (0)), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Stats Row - All User Related -->
<div class=\"quick-stats-grid\">
    <div class=\"quick-stat-card quick-stat-emerald\">
        <div class=\"quick-stat-icon\">
            <i class=\"fas fa-check-circle\"></i>
        </div>
        <div class=\"quick-stat-content\">
            <span class=\"quick-stat-value stat-number\" data-target=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 176), "active", [], "any", true, true, false, 176)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 176, $this->source); })()), "users", [], "any", false, false, false, 176), "active", [], "any", false, false, false, 176), 0)) : (0)), "html", null, true);
        yield "\">0</span>
            <span class=\"quick-stat-label\">Utilisateurs Actifs</span>
        </div>
        <div class=\"quick-stat-progress\">
            <div class=\"progress-fill-animated\" style=\"--progress: ";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activePercent"]) || array_key_exists("activePercent", $context) ? $context["activePercent"] : (function () { throw new RuntimeError('Variable "activePercent" does not exist.', 180, $this->source); })()), "html", null, true);
        yield "%;\"></div>
        </div>
    </div>

    <div class=\"quick-stat-card quick-stat-amber\">
        <div class=\"quick-stat-icon\">
            <i class=\"fas fa-clock\"></i>
        </div>
        <div class=\"quick-stat-content\">
            <span class=\"quick-stat-value stat-number\" data-target=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 189), "inactive", [], "any", true, true, false, 189)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 189, $this->source); })()), "users", [], "any", false, false, false, 189), "inactive", [], "any", false, false, false, 189), 0)) : (0)), "html", null, true);
        yield "\">0</span>
            <span class=\"quick-stat-label\">Utilisateurs Inactifs</span>
        </div>
        <div class=\"quick-stat-progress\">
            <div class=\"progress-fill-animated\" style=\"--progress: ";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactivePercent"]) || array_key_exists("inactivePercent", $context) ? $context["inactivePercent"] : (function () { throw new RuntimeError('Variable "inactivePercent" does not exist.', 193, $this->source); })()), "html", null, true);
        yield "%;\"></div>
        </div>
    </div>

    <div class=\"quick-stat-card quick-stat-rose\">
        <div class=\"quick-stat-icon\">
            <i class=\"fas fa-ban\"></i>
        </div>
        <div class=\"quick-stat-content\">
            <span class=\"quick-stat-value stat-number\" data-target=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 202), "blocked", [], "any", true, true, false, 202)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 202, $this->source); })()), "users", [], "any", false, false, false, 202), "blocked", [], "any", false, false, false, 202), 0)) : (0)), "html", null, true);
        yield "\">0</span>
            <span class=\"quick-stat-label\">Utilisateurs Bloqués</span>
        </div>
        <div class=\"quick-stat-progress\">
            <div class=\"progress-fill-animated\" style=\"--progress: ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["blockedPercent"]) || array_key_exists("blockedPercent", $context) ? $context["blockedPercent"] : (function () { throw new RuntimeError('Variable "blockedPercent" does not exist.', 206, $this->source); })()), "html", null, true);
        yield "%;\"></div>
        </div>
    </div>

    <div class=\"quick-stat-card quick-stat-cyan\">
        <div class=\"quick-stat-icon\">
            <i class=\"fas fa-user-plus\"></i>
        </div>
        <div class=\"quick-stat-content\">
            <span class=\"quick-stat-value\">+";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "users", [], "any", false, true, false, 215), "newThisMonth", [], "any", true, true, false, 215)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 215, $this->source); })()), "users", [], "any", false, false, false, 215), "newThisMonth", [], "any", false, false, false, 215), 0)) : (0)), "html", null, true);
        yield "</span>
            <span class=\"quick-stat-label\">Nouveaux ce mois</span>
        </div>
        <div class=\"quick-stat-progress\">
            <div class=\"progress-fill-animated\" style=\"--progress: ";
        // line 219
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 219, $this->source); })()), "users", [], "any", false, false, false, 219), "total", [], "any", false, false, false, 219) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 219, $this->source); })()), "users", [], "any", false, false, false, 219), "newThisMonth", [], "any", false, false, false, 219) / CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 219, $this->source); })()), "users", [], "any", false, false, false, 219), "total", [], "any", false, false, false, 219)) * 100)), "html", null, true)) : (0));
        yield "%;\"></div>
        </div>
    </div>
</div>

<!-- CSS Animations -->
<style>
/* Animated Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-bottom: 24px;
}

@media (max-width: 1200px) {
    .stats-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 768px) {
    .stats-grid { grid-template-columns: 1fr; }
}

/* Stat Cards Animés */
.stat-card {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    padding: 24px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.stat-card:hover {
    transform: translateY(-8px) scale(1.02);
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0;
    transition: opacity 0.4s;
}

.stat-card:hover::before {
    opacity: 1;
}

/* Cyan Card */
.stat-card.stat-cyan {
    background: linear-gradient(135deg, rgba(6, 182, 212, 0.2) 0%, rgba(6, 182, 212, 0.05) 100%);
    border: 1px solid rgba(6, 182, 212, 0.3);
    box-shadow: 0 20px 40px rgba(6, 182, 212, 0.15);
}

.stat-card.stat-cyan::before {
    background: linear-gradient(135deg, rgba(6, 182, 212, 0.3) 0%, transparent 100%);
}

.stat-icon.stat-icon-cyan {
    background: rgba(6, 182, 212, 0.2);
    color: #06B6D4;
}

/* Emerald Card */
.stat-card.stat-emerald {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.2) 0%, rgba(16, 185, 129, 0.05) 100%);
    border: 1px solid rgba(16, 185, 129, 0.3);
    box-shadow: 0 20px 40px rgba(16, 185, 129, 0.15);
}

.stat-card.stat-emerald::before {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.3) 0%, transparent 100%);
}

.stat-icon.stat-icon-emerald {
    background: rgba(16, 185, 129, 0.2);
    color: #10B981;
}

/* Amber Card */
.stat-card.stat-amber {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.2) 0%, rgba(245, 158, 11, 0.05) 100%);
    border: 1px solid rgba(245, 158, 11, 0.3);
    box-shadow: 0 20px 40px rgba(245, 158, 11, 0.15);
}

.stat-card.stat-amber::before {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.3) 0%, transparent 100%);
}

.stat-icon.stat-icon-amber {
    background: rgba(245, 158, 11, 0.2);
    color: #F59E0B;
}

/* Rose Card */
.stat-card.stat-rose {
    background: linear-gradient(135deg, rgba(244, 63, 94, 0.2) 0%, rgba(244, 63, 94, 0.05) 100%);
    border: 1px solid rgba(244, 63, 94, 0.3);
    box-shadow: 0 20px 40px rgba(244, 63, 94, 0.15);
}

.stat-card.stat-rose::before {
    background: linear-gradient(135deg, rgba(244, 63, 94, 0.3) 0%, transparent 100%);
}

.stat-icon.stat-icon-rose {
    background: rgba(244, 63, 94, 0.2);
    color: #F43F5E;
}

/* Icon Styling */
.stat-icon {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
    transition: transform 0.3s;
}

.stat-card:hover .stat-icon {
    transform: rotate(10deg) scale(1.1);
}

/* Stat Value */
.stat-value {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 4px;
}

.stat-label {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.875rem;
    margin-bottom: 12px;
}

.stat-change {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
}

.stat-change.positive, .stat-change:has(i.fa-check), .stat-change:has(i.fa-check-circle) {
    background: rgba(16, 185, 129, 0.2);
    color: #34D399;
}

.stat-change.negative, .stat-change:has(i.fa-exclamation-triangle) {
    background: rgba(244, 63, 94, 0.2);
    color: #F87171;
}

/* Default gray for neutral */
.stat-change:not(.positive):not(.negative):has(i.fa-pause-circle) {
    background: rgba(245, 158, 11, 0.2);
    color: #FBBF24;
}

/* Background Animation */
.stat-bg-animation {
    position: absolute;
    top: -50px;
    right: -50px;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    opacity: 0.15;
    animation: pulse 3s ease-in-out infinite;
}

.stat-cyan .stat-bg-animation { background: #06B6D4; }
.stat-emerald .stat-bg-animation { background: #10B981; }
.stat-amber .stat-bg-animation { background: #F59E0B; }
.stat-rose .stat-bg-animation { background: #F43F5E; }

@keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 0.15; }
    50% { transform: scale(1.2); opacity: 0.25; }
}

/* Entry Animation */
.stat-card {
    animation: slideUp 0.6s ease-out forwards;
    opacity: 0;
}

.stat-animated:nth-child(1) { animation-delay: 0ms; }
.stat-animated:nth-child(2) { animation-delay: 100ms; }
.stat-animated:nth-child(3) { animation-delay: 200ms; }
.stat-animated:nth-child(4) { animation-delay: 300ms; }

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Charts Grid */
.charts-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-bottom: 24px;
}

@media (max-width: 1200px) {
    .charts-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 768px) {
    .charts-grid { grid-template-columns: 1fr; }
}

/* Chart Cards */
.chart-card {
    border-radius: 20px;
    padding: 24px;
    transition: all 0.4s;
    animation: fadeIn 0.8s ease-out 0.4s both;
}

.chart-card:hover {
    transform: translateY(-4px);
}

.chart-cyan {
    background: linear-gradient(135deg, rgba(6, 182, 212, 0.15) 0%, rgba(6, 182, 212, 0.05) 100%);
    border: 1px solid rgba(6, 182, 212, 0.2);
}

.chart-emerald {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.05) 100%);
    border: 1px solid rgba(16, 185, 129, 0.2);
}

.chart-purple {
    background: linear-gradient(135deg, rgba(139, 92, 246, 0.15) 0%, rgba(139, 92, 246, 0.05) 100%);
    border: 1px solid rgba(139, 92, 246, 0.2);
}

.chart-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
}

.chart-header i {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.7);
}

.chart-header h3 {
    font-size: 1.125rem;
    font-weight: 600;
    color: white;
    margin: 0;
}

.chart-content {
    min-height: 200px;
}

.chart-flex-center {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Donut Chart SVG */
.donut-chart {
    position: relative;
    width: 140px;
    height: 140px;
    margin-bottom: 20px;
}

.donut-svg {
    transform: rotate(-90deg);
}

.donut-segment-animated {
    animation: drawSegment 1.5s ease-out forwards;
    stroke-dashoffset: 251.3;
}

@keyframes drawSegment {
    to {
        stroke-dashoffset: 0;
    }
}

.donut-center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.donut-value {
    display: block;
    font-size: 1.75rem;
    font-weight: 700;
    color: white;
}

.donut-label {
    font-size: 0.75rem;
    color: rgba(255, 255, 255, 0.6);
}

.donut-legend {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.legend-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.8);
}

.legend-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
}

/* Progress Stats */
.progress-stats {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.progress-item {
    animation: fadeIn 0.5s ease-out forwards;
    opacity: 0;
}

.progress-item:nth-child(1) { animation-delay: 0.5s; }
.progress-item:nth-child(2) { animation-delay: 0.7s; }
.progress-item:nth-child(3) { animation-delay: 0.9s; }
.progress-item:nth-child(4) { animation-delay: 1.1s; }

.progress-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
    font-size: 0.875rem;
}

.progress-header span:first-child {
    color: rgba(255, 255, 255, 0.8);
    display: flex;
    align-items: center;
    gap: 8px;
}

.progress-value {
    font-weight: 600;
}

.text-emerald { color: #10B981; }
.text-amber { color: #F59E0B; }
.text-rose { color: #F43F5E; }
.text-cyan { color: #06B6D4; }

.progress-bar {
    height: 8px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 4px;
    overflow: hidden;
}

.progress-fill {
    height: 100%;
    border-radius: 4px;
    animation: fillProgress 1.5s ease-out forwards;
    transform-origin: left;
    transform: scaleX(0);
}

.progress-emerald {
    background: linear-gradient(90deg, #10B981, #34D399);
}

.progress-amber {
    background: linear-gradient(90deg, #F59E0B, #FBBF24);
}

.progress-rose {
    background: linear-gradient(90deg, #F43F5E, #FB7185);
}

.progress-cyan {
    background: linear-gradient(90deg, #06B6D4, #22D3EE);
}

@keyframes fillProgress {
    to { transform: scaleX(1); }
}

/* Growth Display */
.growth-display {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 20px;
}

.growth-circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    animation: scaleIn 0.6s ease-out 0.5s both;
}

.growth-positive {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.3), rgba(16, 185, 129, 0.1));
    border: 3px solid #10B981;
}

.growth-negative {
    background: linear-gradient(135deg, rgba(244, 63, 94, 0.3), rgba(244, 63, 94, 0.1));
    border: 3px solid #F43F5E;
}

.growth-value {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
}

.growth-label {
    font-size: 0.625rem;
    color: rgba(255, 255, 255, 0.6);
    text-transform: uppercase;
}

.growth-icon {
    font-size: 2rem;
}

.growth-positive .growth-icon { color: #10B981; }
.growth-negative .growth-icon { color: #F43F5E; }

@keyframes scaleIn {
    from {
        transform: scale(0);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

.growth-stats {
    display: flex;
    gap: 24px;
}

.growth-stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.growth-stat-label {
    font-size: 0.75rem;
    color: rgba(255, 255, 255, 0.6);
    margin-bottom: 4px;
}

.growth-stat-value {
    font-size: 1.25rem;
    font-weight: 700;
    color: white;
}

.growth-positive {
    color: #10B981 !important;
}

.growth-negative {
    color: #F43F5E !important;
}

/* Quick Stats Grid */
.quick-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
}

@media (max-width: 1200px) {
    .quick-stats-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 768px) {
    .quick-stats-grid { grid-template-columns: 1fr; }
}

/* Quick Stat Cards */
.quick-stat-card {
    display: flex;
    flex-direction: column;
    padding: 20px;
    border-radius: 16px;
    transition: all 0.3s;
    animation: fadeIn 0.6s ease-out 0.6s both;
}

.quick-stat-card:hover {
    transform: translateX(8px);
}

.quick-stat-emerald {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.05) 100%);
    border: 1px solid rgba(16, 185, 129, 0.2);
}

.quick-stat-cyan {
    background: linear-gradient(135deg, rgba(6, 182, 212, 0.15) 0%, rgba(6, 182, 212, 0.05) 100%);
    border: 1px solid rgba(6, 182, 212, 0.2);
}

.quick-stat-purple {
    background: linear-gradient(135deg, rgba(139, 92, 246, 0.15) 0%, rgba(139, 92, 246, 0.05) 100%);
    border: 1px solid rgba(139, 92, 246, 0.2);
}

.quick-stat-amber {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.15) 0%, rgba(245, 158, 11, 0.05) 100%);
    border: 1px solid rgba(245, 158, 11, 0.2);
}

.quick-stat-rose {
    background: linear-gradient(135deg, rgba(244, 63, 94, 0.15) 0%, rgba(244, 63, 94, 0.05) 100%);
    border: 1px solid rgba(244, 63, 94, 0.2);
}

.quick-stat-icon {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 12px;
    font-size: 18px;
}

.quick-stat-emerald .quick-stat-icon {
    background: rgba(16, 185, 129, 0.2);
    color: #10B981;
}

.quick-stat-cyan .quick-stat-icon {
    background: rgba(6, 182, 212, 0.2);
    color: #06B6D4;
}

.quick-stat-purple .quick-stat-icon {
    background: rgba(139, 92, 246, 0.2);
    color: #8B5CF6;
}

.quick-stat-amber .quick-stat-icon {
    background: rgba(245, 158, 11, 0.2);
    color: #F59E0B;
}

.quick-stat-rose .quick-stat-icon {
    background: rgba(244, 63, 94, 0.2);
    color: #F43F5E;
}

.quick-stat-content {
    display: flex;
    flex-direction: column;
    gap: 4px;
    margin-bottom: 12px;
}

.quick-stat-value {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
}

.quick-stat-label {
    font-size: 0.75rem;
    color: rgba(255, 255, 255, 0.6);
}

.quick-stat-progress {
    height: 4px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 2px;
    overflow: hidden;
}

.progress-fill-animated {
    height: 100%;
    width: var(--progress);
    border-radius: 2px;
    animation: fillProgress 1s ease-out forwards;
    transform-origin: left;
    transform: scaleX(0);
}

.quick-stat-emerald .progress-fill-animated {
    background: linear-gradient(90deg, #10B981, #34D399);
}

.quick-stat-cyan .progress-fill-animated {
    background: linear-gradient(90deg, #06B6D4, #22D3EE);
}

.quick-stat-purple .progress-fill-animated {
    background: linear-gradient(90deg, #8B5CF6, #A78BFA);
}

.quick-stat-amber .progress-fill-animated {
    background: linear-gradient(90deg, #F59E0B, #FBBF24);
}

.quick-stat-rose .progress-fill-animated {
    background: linear-gradient(90deg, #F43F5E, #FB7185);
}
</style>

<!-- Counter Animation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate counters
    const counters = document.querySelectorAll('.stat-number');

    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target')) || 0;
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current).toLocaleString();
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target.toLocaleString();
            }
        };

        // Start animation after 500s
        setTimeout(updateCounter, 500);
    });

    // Animate progress bars
    const progressBars = document.querySelectorAll('[data-progress]');

    progressBars.forEach(bar => {
        const progress = bar.getAttribute('data-progress');
        setTimeout(() => {
            bar.style.width = progress + '%';
        }, 500);
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
        return "admin/dashboard.html.twig";
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
        return array (  508 => 219,  501 => 215,  489 => 206,  482 => 202,  470 => 193,  463 => 189,  451 => 180,  444 => 176,  427 => 162,  420 => 158,  411 => 152,  402 => 147,  397 => 145,  379 => 130,  373 => 127,  364 => 121,  358 => 118,  349 => 112,  343 => 109,  334 => 103,  328 => 100,  308 => 83,  301 => 79,  294 => 75,  284 => 68,  276 => 63,  272 => 62,  268 => 60,  262 => 56,  258 => 55,  254 => 53,  248 => 49,  244 => 47,  241 => 45,  238 => 44,  235 => 43,  232 => 42,  230 => 41,  227 => 40,  214 => 28,  212 => 27,  210 => 26,  208 => 25,  195 => 23,  173 => 10,  160 => 9,  137 => 7,  114 => 6,  91 => 5,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Tableau de bord - Admin ASAFAR{% endblock %}

{% block page_icon %}fas fa-chart-pie{% endblock %}
{% block page_title %}Tableau de bord{% endblock %}
{% block breadcrumb %}Accueil{% endblock %}

{% block top_bar_right %}
<div class=\"search-box\">
<i class=\"fas fa-search\"></i>
<input type=\"text\" placeholder=\"Rechercher...\">
</div>
<button class=\"notification-btn\">
<i class=\"fas fa-bell\"></i>
<span class=\"notification-badge\">5</span>
</button>
<button class=\"settings-btn\">
<i class=\"fas fa-cog\"></i>
</button>
{% endblock %}

{% block content %}
{# Calculate percentages for dynamic display #}
{% set activePercent = stats.users.total > 0 ? ((stats.users.active / stats.users.total) * 100)|round : 0 %}
{% set inactivePercent = stats.users.total > 0 ? ((stats.users.inactive / stats.users.total) * 100)|round : 0 %}
{% set blockedPercent = stats.users.total > 0 ? ((stats.users.blocked / stats.users.total) * 100)|round : 0 %}

<!-- Charts Row - Dynamic Data -->
<div class=\"charts-grid\">
    <!-- Chart 1 - Distribution Utilisateurs (Donut Chart with Real Data) -->
    <div class=\"chart-card chart-cyan\">
        <div class=\"chart-header\">
            <i class=\"fas fa-chart-pie\"></i>
            <h3>Distribution des Utilisateurs</h3>
        </div>
        <div class=\"chart-content chart-flex-center\">
            <div class=\"donut-chart\">
                {# Dynamic donut segments based on real data #}
                <svg viewBox=\"0 0 100 100\" class=\"donut-svg\">
                    {% set total = stats.users.total|default(1) %}
                    {% set activeDeg = (stats.users.active / total * 360)|round %}
                    {% set inactiveDeg = (stats.users.inactive / total * 360)|round %}
                    {% set blockedDeg = (stats.users.blocked / total * 360)|round %}
                    
                    {# Active - Emerald #}
                    <circle cx=\"50\" cy=\"50\" r=\"40\" fill=\"none\" stroke=\"#10B981\" 
                            stroke-width=\"12\" 
                            stroke-dasharray=\"{{ activeDeg * 2.513 }} 251.3\"
                            transform=\"rotate(-90 50 50)\"
                            class=\"donut-segment-animated\"/>
                    {# Inactive - Amber #}
                    <circle cx=\"50\" cy=\"50\" r=\"40\" fill=\"none\" stroke=\"#F59E0B\" 
                            stroke-width=\"12\" 
                            stroke-dasharray=\"{{ inactiveDeg * 2.513 }} 251.3\"
                            stroke-dashoffset=\"{{ -activeDeg * 2.513 }}\"
                            transform=\"rotate(-90 50 50)\"
                            class=\"donut-segment-animated\"/>
                    {# Blocked - Rose #}
                    <circle cx=\"50\" cy=\"50\" r=\"40\" fill=\"none\" stroke=\"#F43F5E\" 
                            stroke-width=\"12\" 
                            stroke-dasharray=\"{{ blockedDeg * 2.513 }} 251.3\"
                            stroke-dashoffset=\"{{ -(activeDeg + inactiveDeg) * 2.513 }}\"
                            transform=\"rotate(-90 50 50)\"
                            class=\"donut-segment-animated\"/>
                </svg>
                <div class=\"donut-center\">
                    <span class=\"donut-value stat-number\" data-target=\"{{ stats.users.total|default(0) }}\">0</span>
                    <span class=\"donut-label\">Total</span>
                </div>
            </div>
            <div class=\"donut-legend\">
                <div class=\"legend-item\">
                    <span class=\"legend-dot\" style=\"background: #10B981;\"></span>
                    <span>Actifs ({{ stats.users.active|default(0) }})</span>
                </div>
                <div class=\"legend-item\">
                    <span class=\"legend-dot\" style=\"background: #F59E0B;\"></span>
                    <span>Inactifs ({{ stats.users.inactive|default(0) }})</span>
                </div>
                <div class=\"legend-item\">
                    <span class=\"legend-dot\" style=\"background: #F43F5E;\"></span>
                    <span>Bloqués ({{ stats.users.blocked|default(0) }})</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart 2 - Statuts des Utilisateurs (Progress Bars with Real Data) -->
    <div class=\"chart-card chart-emerald\">
        <div class=\"chart-header\">
            <i class=\"fas fa-chart-bar\"></i>
            <h3>Statuts des Utilisateurs</h3>
        </div>
        <div class=\"chart-content\">
            <div class=\"progress-stats\">
                <div class=\"progress-item\">
                    <div class=\"progress-header\">
                        <span><i class=\"fas fa-user-check text-emerald\"></i> Utilisateurs Actifs</span>
                        <span class=\"progress-value text-emerald\">{{ activePercent }}%</span>
                    </div>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill progress-emerald\" data-progress=\"{{ activePercent }}\"></div>
                    </div>
                </div>
                <div class=\"progress-item\">
                    <div class=\"progress-header\">
                        <span><i class=\"fas fa-user-clock text-amber\"></i> Utilisateurs Inactifs</span>
                        <span class=\"progress-value text-amber\">{{ inactivePercent }}%</span>
                    </div>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill progress-amber\" data-progress=\"{{ inactivePercent }}\"></div>
                    </div>
                </div>
                <div class=\"progress-item\">
                    <div class=\"progress-header\">
                        <span><i class=\"fas fa-user-slash text-rose\"></i> Utilisateurs Bloqués</span>
                        <span class=\"progress-value text-rose\">{{ blockedPercent }}%</span>
                    </div>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill progress-rose\" data-progress=\"{{ blockedPercent }}\"></div>
                    </div>
                </div>
                <div class=\"progress-item\">
                    <div class=\"progress-header\">
                        <span><i class=\"fas fa-user-plus text-cyan\"></i> Nouveaux ce mois</span>
                        <span class=\"progress-value text-cyan\">+{{ stats.users.newThisMonth|default(0) }}</span>
                    </div>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill progress-cyan\" data-progress=\"{{ stats.users.newThisMonth|default(0) > 0 ? (stats.users.newThisMonth / stats.users.total * 100)|round : 0 }}\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart 3 - Croissance (Visual Bar Chart with Real Growth) -->
    <div class=\"chart-card chart-purple\">
        <div class=\"chart-header\">
            <i class=\"fas fa-chart-line\"></i>
            <h3>Croissance Mensuelle</h3>
        </div>
        <div class=\"chart-content chart-flex-center\">
            <div class=\"growth-display\">
                <div class=\"growth-circle {{ stats.users.growth >= 0 ? 'growth-positive' : 'growth-negative' }}\">
                    <span class=\"growth-value\">
                        {{ stats.users.growth >= 0 ? '+' : '' }}{{ stats.users.growth|default(0) }}%
                    </span>
                    <span class=\"growth-label\">ce mois</span>
                </div>
                <div class=\"growth-icon\">
                    <i class=\"fas fa-{{ stats.users.growth >= 0 ? 'arrow-trend-up' : 'arrow-trend-down' }}\"></i>
                </div>
            </div>
            <div class=\"growth-stats\">
                <div class=\"growth-stat-item\">
                    <span class=\"growth-stat-label\">Total</span>
                    <span class=\"growth-stat-value\">{{ stats.users.total|default(0) }}</span>
                </div>
                <div class=\"growth-stat-item\">
                    <span class=\"growth-stat-label\">Nouveaux</span>
                    <span class=\"growth-stat-value growth-positive\">+{{ stats.users.newThisMonth|default(0) }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Stats Row - All User Related -->
<div class=\"quick-stats-grid\">
    <div class=\"quick-stat-card quick-stat-emerald\">
        <div class=\"quick-stat-icon\">
            <i class=\"fas fa-check-circle\"></i>
        </div>
        <div class=\"quick-stat-content\">
            <span class=\"quick-stat-value stat-number\" data-target=\"{{ stats.users.active|default(0) }}\">0</span>
            <span class=\"quick-stat-label\">Utilisateurs Actifs</span>
        </div>
        <div class=\"quick-stat-progress\">
            <div class=\"progress-fill-animated\" style=\"--progress: {{ activePercent }}%;\"></div>
        </div>
    </div>

    <div class=\"quick-stat-card quick-stat-amber\">
        <div class=\"quick-stat-icon\">
            <i class=\"fas fa-clock\"></i>
        </div>
        <div class=\"quick-stat-content\">
            <span class=\"quick-stat-value stat-number\" data-target=\"{{ stats.users.inactive|default(0) }}\">0</span>
            <span class=\"quick-stat-label\">Utilisateurs Inactifs</span>
        </div>
        <div class=\"quick-stat-progress\">
            <div class=\"progress-fill-animated\" style=\"--progress: {{ inactivePercent }}%;\"></div>
        </div>
    </div>

    <div class=\"quick-stat-card quick-stat-rose\">
        <div class=\"quick-stat-icon\">
            <i class=\"fas fa-ban\"></i>
        </div>
        <div class=\"quick-stat-content\">
            <span class=\"quick-stat-value stat-number\" data-target=\"{{ stats.users.blocked|default(0) }}\">0</span>
            <span class=\"quick-stat-label\">Utilisateurs Bloqués</span>
        </div>
        <div class=\"quick-stat-progress\">
            <div class=\"progress-fill-animated\" style=\"--progress: {{ blockedPercent }}%;\"></div>
        </div>
    </div>

    <div class=\"quick-stat-card quick-stat-cyan\">
        <div class=\"quick-stat-icon\">
            <i class=\"fas fa-user-plus\"></i>
        </div>
        <div class=\"quick-stat-content\">
            <span class=\"quick-stat-value\">+{{ stats.users.newThisMonth|default(0) }}</span>
            <span class=\"quick-stat-label\">Nouveaux ce mois</span>
        </div>
        <div class=\"quick-stat-progress\">
            <div class=\"progress-fill-animated\" style=\"--progress: {{ stats.users.total > 0 ? (stats.users.newThisMonth / stats.users.total * 100)|round : 0 }}%;\"></div>
        </div>
    </div>
</div>

<!-- CSS Animations -->
<style>
/* Animated Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-bottom: 24px;
}

@media (max-width: 1200px) {
    .stats-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 768px) {
    .stats-grid { grid-template-columns: 1fr; }
}

/* Stat Cards Animés */
.stat-card {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    padding: 24px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.stat-card:hover {
    transform: translateY(-8px) scale(1.02);
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0;
    transition: opacity 0.4s;
}

.stat-card:hover::before {
    opacity: 1;
}

/* Cyan Card */
.stat-card.stat-cyan {
    background: linear-gradient(135deg, rgba(6, 182, 212, 0.2) 0%, rgba(6, 182, 212, 0.05) 100%);
    border: 1px solid rgba(6, 182, 212, 0.3);
    box-shadow: 0 20px 40px rgba(6, 182, 212, 0.15);
}

.stat-card.stat-cyan::before {
    background: linear-gradient(135deg, rgba(6, 182, 212, 0.3) 0%, transparent 100%);
}

.stat-icon.stat-icon-cyan {
    background: rgba(6, 182, 212, 0.2);
    color: #06B6D4;
}

/* Emerald Card */
.stat-card.stat-emerald {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.2) 0%, rgba(16, 185, 129, 0.05) 100%);
    border: 1px solid rgba(16, 185, 129, 0.3);
    box-shadow: 0 20px 40px rgba(16, 185, 129, 0.15);
}

.stat-card.stat-emerald::before {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.3) 0%, transparent 100%);
}

.stat-icon.stat-icon-emerald {
    background: rgba(16, 185, 129, 0.2);
    color: #10B981;
}

/* Amber Card */
.stat-card.stat-amber {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.2) 0%, rgba(245, 158, 11, 0.05) 100%);
    border: 1px solid rgba(245, 158, 11, 0.3);
    box-shadow: 0 20px 40px rgba(245, 158, 11, 0.15);
}

.stat-card.stat-amber::before {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.3) 0%, transparent 100%);
}

.stat-icon.stat-icon-amber {
    background: rgba(245, 158, 11, 0.2);
    color: #F59E0B;
}

/* Rose Card */
.stat-card.stat-rose {
    background: linear-gradient(135deg, rgba(244, 63, 94, 0.2) 0%, rgba(244, 63, 94, 0.05) 100%);
    border: 1px solid rgba(244, 63, 94, 0.3);
    box-shadow: 0 20px 40px rgba(244, 63, 94, 0.15);
}

.stat-card.stat-rose::before {
    background: linear-gradient(135deg, rgba(244, 63, 94, 0.3) 0%, transparent 100%);
}

.stat-icon.stat-icon-rose {
    background: rgba(244, 63, 94, 0.2);
    color: #F43F5E;
}

/* Icon Styling */
.stat-icon {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
    transition: transform 0.3s;
}

.stat-card:hover .stat-icon {
    transform: rotate(10deg) scale(1.1);
}

/* Stat Value */
.stat-value {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 4px;
}

.stat-label {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.875rem;
    margin-bottom: 12px;
}

.stat-change {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
}

.stat-change.positive, .stat-change:has(i.fa-check), .stat-change:has(i.fa-check-circle) {
    background: rgba(16, 185, 129, 0.2);
    color: #34D399;
}

.stat-change.negative, .stat-change:has(i.fa-exclamation-triangle) {
    background: rgba(244, 63, 94, 0.2);
    color: #F87171;
}

/* Default gray for neutral */
.stat-change:not(.positive):not(.negative):has(i.fa-pause-circle) {
    background: rgba(245, 158, 11, 0.2);
    color: #FBBF24;
}

/* Background Animation */
.stat-bg-animation {
    position: absolute;
    top: -50px;
    right: -50px;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    opacity: 0.15;
    animation: pulse 3s ease-in-out infinite;
}

.stat-cyan .stat-bg-animation { background: #06B6D4; }
.stat-emerald .stat-bg-animation { background: #10B981; }
.stat-amber .stat-bg-animation { background: #F59E0B; }
.stat-rose .stat-bg-animation { background: #F43F5E; }

@keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 0.15; }
    50% { transform: scale(1.2); opacity: 0.25; }
}

/* Entry Animation */
.stat-card {
    animation: slideUp 0.6s ease-out forwards;
    opacity: 0;
}

.stat-animated:nth-child(1) { animation-delay: 0ms; }
.stat-animated:nth-child(2) { animation-delay: 100ms; }
.stat-animated:nth-child(3) { animation-delay: 200ms; }
.stat-animated:nth-child(4) { animation-delay: 300ms; }

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Charts Grid */
.charts-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-bottom: 24px;
}

@media (max-width: 1200px) {
    .charts-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 768px) {
    .charts-grid { grid-template-columns: 1fr; }
}

/* Chart Cards */
.chart-card {
    border-radius: 20px;
    padding: 24px;
    transition: all 0.4s;
    animation: fadeIn 0.8s ease-out 0.4s both;
}

.chart-card:hover {
    transform: translateY(-4px);
}

.chart-cyan {
    background: linear-gradient(135deg, rgba(6, 182, 212, 0.15) 0%, rgba(6, 182, 212, 0.05) 100%);
    border: 1px solid rgba(6, 182, 212, 0.2);
}

.chart-emerald {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.05) 100%);
    border: 1px solid rgba(16, 185, 129, 0.2);
}

.chart-purple {
    background: linear-gradient(135deg, rgba(139, 92, 246, 0.15) 0%, rgba(139, 92, 246, 0.05) 100%);
    border: 1px solid rgba(139, 92, 246, 0.2);
}

.chart-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
}

.chart-header i {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.7);
}

.chart-header h3 {
    font-size: 1.125rem;
    font-weight: 600;
    color: white;
    margin: 0;
}

.chart-content {
    min-height: 200px;
}

.chart-flex-center {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Donut Chart SVG */
.donut-chart {
    position: relative;
    width: 140px;
    height: 140px;
    margin-bottom: 20px;
}

.donut-svg {
    transform: rotate(-90deg);
}

.donut-segment-animated {
    animation: drawSegment 1.5s ease-out forwards;
    stroke-dashoffset: 251.3;
}

@keyframes drawSegment {
    to {
        stroke-dashoffset: 0;
    }
}

.donut-center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.donut-value {
    display: block;
    font-size: 1.75rem;
    font-weight: 700;
    color: white;
}

.donut-label {
    font-size: 0.75rem;
    color: rgba(255, 255, 255, 0.6);
}

.donut-legend {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.legend-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.8);
}

.legend-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
}

/* Progress Stats */
.progress-stats {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.progress-item {
    animation: fadeIn 0.5s ease-out forwards;
    opacity: 0;
}

.progress-item:nth-child(1) { animation-delay: 0.5s; }
.progress-item:nth-child(2) { animation-delay: 0.7s; }
.progress-item:nth-child(3) { animation-delay: 0.9s; }
.progress-item:nth-child(4) { animation-delay: 1.1s; }

.progress-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
    font-size: 0.875rem;
}

.progress-header span:first-child {
    color: rgba(255, 255, 255, 0.8);
    display: flex;
    align-items: center;
    gap: 8px;
}

.progress-value {
    font-weight: 600;
}

.text-emerald { color: #10B981; }
.text-amber { color: #F59E0B; }
.text-rose { color: #F43F5E; }
.text-cyan { color: #06B6D4; }

.progress-bar {
    height: 8px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 4px;
    overflow: hidden;
}

.progress-fill {
    height: 100%;
    border-radius: 4px;
    animation: fillProgress 1.5s ease-out forwards;
    transform-origin: left;
    transform: scaleX(0);
}

.progress-emerald {
    background: linear-gradient(90deg, #10B981, #34D399);
}

.progress-amber {
    background: linear-gradient(90deg, #F59E0B, #FBBF24);
}

.progress-rose {
    background: linear-gradient(90deg, #F43F5E, #FB7185);
}

.progress-cyan {
    background: linear-gradient(90deg, #06B6D4, #22D3EE);
}

@keyframes fillProgress {
    to { transform: scaleX(1); }
}

/* Growth Display */
.growth-display {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 20px;
}

.growth-circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    animation: scaleIn 0.6s ease-out 0.5s both;
}

.growth-positive {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.3), rgba(16, 185, 129, 0.1));
    border: 3px solid #10B981;
}

.growth-negative {
    background: linear-gradient(135deg, rgba(244, 63, 94, 0.3), rgba(244, 63, 94, 0.1));
    border: 3px solid #F43F5E;
}

.growth-value {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
}

.growth-label {
    font-size: 0.625rem;
    color: rgba(255, 255, 255, 0.6);
    text-transform: uppercase;
}

.growth-icon {
    font-size: 2rem;
}

.growth-positive .growth-icon { color: #10B981; }
.growth-negative .growth-icon { color: #F43F5E; }

@keyframes scaleIn {
    from {
        transform: scale(0);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

.growth-stats {
    display: flex;
    gap: 24px;
}

.growth-stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.growth-stat-label {
    font-size: 0.75rem;
    color: rgba(255, 255, 255, 0.6);
    margin-bottom: 4px;
}

.growth-stat-value {
    font-size: 1.25rem;
    font-weight: 700;
    color: white;
}

.growth-positive {
    color: #10B981 !important;
}

.growth-negative {
    color: #F43F5E !important;
}

/* Quick Stats Grid */
.quick-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
}

@media (max-width: 1200px) {
    .quick-stats-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 768px) {
    .quick-stats-grid { grid-template-columns: 1fr; }
}

/* Quick Stat Cards */
.quick-stat-card {
    display: flex;
    flex-direction: column;
    padding: 20px;
    border-radius: 16px;
    transition: all 0.3s;
    animation: fadeIn 0.6s ease-out 0.6s both;
}

.quick-stat-card:hover {
    transform: translateX(8px);
}

.quick-stat-emerald {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.05) 100%);
    border: 1px solid rgba(16, 185, 129, 0.2);
}

.quick-stat-cyan {
    background: linear-gradient(135deg, rgba(6, 182, 212, 0.15) 0%, rgba(6, 182, 212, 0.05) 100%);
    border: 1px solid rgba(6, 182, 212, 0.2);
}

.quick-stat-purple {
    background: linear-gradient(135deg, rgba(139, 92, 246, 0.15) 0%, rgba(139, 92, 246, 0.05) 100%);
    border: 1px solid rgba(139, 92, 246, 0.2);
}

.quick-stat-amber {
    background: linear-gradient(135deg, rgba(245, 158, 11, 0.15) 0%, rgba(245, 158, 11, 0.05) 100%);
    border: 1px solid rgba(245, 158, 11, 0.2);
}

.quick-stat-rose {
    background: linear-gradient(135deg, rgba(244, 63, 94, 0.15) 0%, rgba(244, 63, 94, 0.05) 100%);
    border: 1px solid rgba(244, 63, 94, 0.2);
}

.quick-stat-icon {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 12px;
    font-size: 18px;
}

.quick-stat-emerald .quick-stat-icon {
    background: rgba(16, 185, 129, 0.2);
    color: #10B981;
}

.quick-stat-cyan .quick-stat-icon {
    background: rgba(6, 182, 212, 0.2);
    color: #06B6D4;
}

.quick-stat-purple .quick-stat-icon {
    background: rgba(139, 92, 246, 0.2);
    color: #8B5CF6;
}

.quick-stat-amber .quick-stat-icon {
    background: rgba(245, 158, 11, 0.2);
    color: #F59E0B;
}

.quick-stat-rose .quick-stat-icon {
    background: rgba(244, 63, 94, 0.2);
    color: #F43F5E;
}

.quick-stat-content {
    display: flex;
    flex-direction: column;
    gap: 4px;
    margin-bottom: 12px;
}

.quick-stat-value {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
}

.quick-stat-label {
    font-size: 0.75rem;
    color: rgba(255, 255, 255, 0.6);
}

.quick-stat-progress {
    height: 4px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 2px;
    overflow: hidden;
}

.progress-fill-animated {
    height: 100%;
    width: var(--progress);
    border-radius: 2px;
    animation: fillProgress 1s ease-out forwards;
    transform-origin: left;
    transform: scaleX(0);
}

.quick-stat-emerald .progress-fill-animated {
    background: linear-gradient(90deg, #10B981, #34D399);
}

.quick-stat-cyan .progress-fill-animated {
    background: linear-gradient(90deg, #06B6D4, #22D3EE);
}

.quick-stat-purple .progress-fill-animated {
    background: linear-gradient(90deg, #8B5CF6, #A78BFA);
}

.quick-stat-amber .progress-fill-animated {
    background: linear-gradient(90deg, #F59E0B, #FBBF24);
}

.quick-stat-rose .progress-fill-animated {
    background: linear-gradient(90deg, #F43F5E, #FB7185);
}
</style>

<!-- Counter Animation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate counters
    const counters = document.querySelectorAll('.stat-number');

    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target')) || 0;
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current).toLocaleString();
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target.toLocaleString();
            }
        };

        // Start animation after 500s
        setTimeout(updateCounter, 500);
    });

    // Animate progress bars
    const progressBars = document.querySelectorAll('[data-progress]');

    progressBars.forEach(bar => {
        const progress = bar.getAttribute('data-progress');
        setTimeout(() => {
            bar.style.width = progress + '%';
        }, 500);
    });
});
</script>

{% endblock %}
", "admin/dashboard.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\dashboard.html.twig");
    }
}
