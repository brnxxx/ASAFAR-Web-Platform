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

/* admin/base.html.twig */
class __TwigTemplate_c06abe3a99a199e19105e14c216286bf extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'page_icon' => [$this, 'block_page_icon'],
            'page_title' => [$this, 'block_page_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'top_bar_right' => [$this, 'block_top_bar_right'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Font Awesome Icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">

    <style>
        :root {
            /* Primary Blues */
            --midnight-blue: #0B2D4A;
            --ocean-blue: #1E6FA8;
            --sky-blue: #2FA8FF;
            --ice-blue: #A7E3FF;
            --light-sky: #E8F6FF;

            /* Accent Colors */
            --amber: #FFC107;
            --golden-orange: #FF8F00;
            --amber-light: #FFD54F;

            /* Neutrals */
            --dark-bg: #071B2E;
            --darker-bg: #051421;
            --card-bg: rgba(30, 111, 168, 0.08);
            --glass-bg: rgba(30, 111, 168, 0.12);
            --hover-bg: rgba(47, 168, 255, 0.08);

            /* Text */
            --text-primary: #FFFFFF;
            --text-secondary: rgba(167, 227, 255, 0.7);
            --text-muted: rgba(167, 227, 255, 0.5);

            /* Borders */
            --border-subtle: rgba(47, 168, 255, 0.15);
            --border-light: rgba(255, 193, 7, 0.2);

            /* Shadows */
            --shadow-sm: 0 2px 8px rgba(11, 45, 74, 0.3);
            --shadow-md: 0 4px 20px rgba(11, 45, 74, 0.4);
            --shadow-lg: 0 8px 40px rgba(11, 45, 74, 0.5);
            --shadow-glow-amber: 0 0 30px rgba(255, 193, 7, 0.15);
            --shadow-glow-blue: 0 0 30px rgba(47, 168, 255, 0.15);
            --shadow-glow-green: 0 0 30px rgba(52, 211, 153, 0.15);

            /* Gradients */
            --gradient-primary: linear-gradient(135deg, var(--midnight-blue) 0%, var(--ocean-blue) 100%);
            --gradient-accent: linear-gradient(135deg, var(--amber) 0%, var(--golden-orange) 100%);
            --gradient-sky: linear-gradient(135deg, var(--sky-blue) 0%, var(--ice-blue) 100%);
            --gradient-dark: linear-gradient(180deg, var(--dark-bg) 0%, var(--darker-bg) 100%);

            /* Sidebar */
            --sidebar-collapsed-width: 72px;
            --sidebar-expanded-width: 280px;

            /* Transitions */
            --transition-fast: 0.2s ease;
            --transition-medium: 0.3s ease;
            --transition-smooth: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 16px;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--gradient-dark);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        /* ========================================
           SIDEBAR
           ======================================== */
        .sidebar {
            width: var(--sidebar-collapsed-width);
            background: linear-gradient(180deg, rgba(11, 45, 74, 0.98) 0%, rgba(7, 27, 46, 0.98) 100%);
            backdrop-filter: blur(20px);
            border-right: 1px solid var(--border-subtle);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            overflow-x: hidden;
            z-index: 900;
            transition: all var(--transition-smooth);
            display: flex;
            flex-direction: column;
        }

        .sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(ellipse at 50% 0%, rgba(47, 168, 255, 0.08) 0%, transparent 50%),
                radial-gradient(ellipse at 50% 100%, rgba(255, 193, 7, 0.05) 0%, transparent 50%);
            pointer-events: none;
        }

        .sidebar:hover {
            width: var(--sidebar-expanded-width);
            box-shadow: var(--shadow-lg);
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 32px;
            padding: 24px 16px 20px;
            border-bottom: 1px solid var(--border-subtle);
            position: relative;
            z-index: 1;
            white-space: nowrap;
            overflow: hidden;
        }

        .sidebar-logo {
            width: 44px;
            height: 44px;
            min-width: 44px;
            background: var(--gradient-accent);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            color: var(--midnight-blue);
            box-shadow: var(--shadow-md), var(--shadow-glow-amber);
            transition: all var(--transition-medium);
        }

        .sidebar:hover .sidebar-logo {
            width: 48px;
            height: 48px;
            font-size: 20px;
        }

        .sidebar-title {
            font-size: 0;
            font-weight: 700;
            letter-spacing: 0.5px;
            background: var(--gradient-accent);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            opacity: 0;
            transform: translateX(-10px);
            transition: all var(--transition-medium) 0.1s;
        }

        .sidebar:hover .sidebar-title {
            font-size: 17px;
            opacity: 1;
            transform: translateX(0);
        }

        .sidebar-menu {
            list-style: none;
            position: relative;
            z-index: 1;
            flex: 1;
            padding: 8px 12px;
        }

        .menu-item {
            margin-bottom: 4px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 16px;
            color: var(--text-secondary);
            text-decoration: none;
            border-radius: 12px;
            transition: all var(--transition-smooth);
            position: relative;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 0.2px;
            white-space: nowrap;
            overflow: hidden;
        }

        .menu-link i {
            font-size: 18px;
            width: 40px;
            height: 40px;
            min-width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--glass-bg);
            border-radius: 10px;
            transition: all var(--transition-smooth);
            border: 1px solid var(--border-subtle);
        }

        .menu-link span {
            opacity: 0;
            transform: translateX(-10px);
            transition: all var(--transition-medium) 0.1s;
        }

        .sidebar:hover .menu-link span {
            opacity: 1;
            transform: translateX(0);
        }

        .menu-link:hover {
            background: var(--glass-bg);
            color: var(--sky-blue);
        }

        .menu-link:hover i {
            background: var(--gradient-sky);
            color: var(--midnight-blue);
            border-color: transparent;
            transform: scale(1.05);
            box-shadow: var(--shadow-glow-blue);
        }

        .menu-link.active {
            background: var(--gradient-accent);
            color: var(--midnight-blue);
            font-weight: 600;
            box-shadow: var(--shadow-md), var(--shadow-glow-amber);
        }

        .menu-link.active i {
            background: rgba(11, 45, 74, 0.3);
            color: var(--midnight-blue);
            border-color: transparent;
        }

        .menu-link.active span {
            opacity: 1;
            transform: translateX(0);
        }

        .menu-link::after {
            content: attr(data-tooltip);
            position: absolute;
            left: calc(100% + 12px);
            top: 50%;
            transform: translateY(-50%) translateX(-10px);
            background: var(--midnight-blue);
            color: var(--text-primary);
            padding: 10px 16px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 500;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: all var(--transition-fast);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-subtle);
            z-index: 1000;
        }

        .menu-link::before {
            content: '';
            position: absolute;
            left: calc(100% + 4px);
            top: 50%;
            transform: translateY(-50%);
            border: 6px solid transparent;
            border-right-color: var(--midnight-blue);
            opacity: 0;
            visibility: hidden;
            transition: all var(--transition-fast);
        }

        .sidebar:not(:hover) .menu-link:hover::after,
        .sidebar:not(:hover) .menu-link:hover::before {
            opacity: 1;
            visibility: visible;
            transform: translateY(-50%) translateX(0);
        }

        .sidebar-footer {
            padding: 16px;
            border-top: 1px solid var(--border-subtle);
            position: relative;
            z-index: 1;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border-radius: 12px;
            background: var(--glass-bg);
            transition: all var(--transition-medium);
            white-space: nowrap;
            overflow: hidden;
        }

        .user-avatar-small {
            width: 36px;
            height: 36px;
            min-width: 36px;
            background: var(--gradient-sky);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: var(--midnight-blue);
            font-size: 14px;
        }

        .user-info {
            opacity: 0;
            transform: translateX(-10px);
            transition: all var(--transition-medium) 0.1s;
        }

        .sidebar:hover .user-info {
            opacity: 1;
            transform: translateX(0);
        }

        .user-name {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-primary);
        }

        .user-role {
            font-size: 11px;
            color: var(--text-muted);
        }

        /* ========================================
           MAIN CONTENT
           ======================================== */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-collapsed-width);
            transition: margin-left var(--transition-smooth);
            min-height: 100vh;
        }

        .top-bar {
            background: rgba(11, 45, 74, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-subtle);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 800;
            box-shadow: var(--shadow-md);
        }

        .top-bar-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .top-bar-title {
            font-size: 22px;
            font-weight: 700;
            background: linear-gradient(135deg, var(--text-primary) 0%, var(--ice-blue) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 0.3px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .top-bar-title i {
            color: var(--sky-blue);
            -webkit-text-fill-color: var(--sky-blue);
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: var(--text-muted);
        }

        .breadcrumb a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color var(--transition-fast);
        }

        .breadcrumb a:hover {
            color: var(--sky-blue);
        }

        .breadcrumb i {
            font-size: 10px;
        }

        .top-bar-right {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .search-box {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-box input {
            width: 240px;
            padding: 10px 16px 10px 40px;
            background: var(--glass-bg);
            border: 1px solid var(--border-subtle);
            border-radius: 10px;
            color: var(--text-primary);
            font-size: 13px;
            transition: all var(--transition-medium);
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--sky-blue);
            box-shadow: var(--shadow-glow-blue);
            width: 300px;
        }

        .search-box input::placeholder {
            color: var(--text-muted);
        }

        .search-box i {
            position: absolute;
            left: 14px;
            color: var(--text-muted);
            font-size: 14px;
        }

        .notification-btn,
        .settings-btn {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--glass-bg);
            border: 1px solid var(--border-subtle);
            border-radius: 10px;
            color: var(--text-secondary);
            cursor: pointer;
            transition: all var(--transition-medium);
            position: relative;
        }

        .notification-btn:hover,
        .settings-btn:hover {
            background: var(--sky-blue);
            color: var(--midnight-blue);
            border-color: transparent;
            transform: translateY(-2px);
        }

        .notification-badge {
            position: absolute;
            top: -4px;
            right: -4px;
            width: 18px;
            height: 18px;
            background: var(--gradient-accent);
            border-radius: 50%;
            font-size: 10px;
            font-weight: 700;
            color: var(--midnight-blue);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all var(--transition-smooth);
            font-size: 14px;
            letter-spacing: 0.3px;
            text-decoration: none;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: var(--gradient-accent);
            color: var(--midnight-blue);
            box-shadow: var(--shadow-md), 0 4px 20px rgba(255, 193, 7, 0.25);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg), 0 8px 30px rgba(255, 193, 7, 0.35);
        }

        .btn-secondary {
            background: var(--glass-bg);
            color: var(--ice-blue);
            border: 1px solid var(--border-subtle);
        }

        .btn-secondary:hover {
            background: var(--gradient-sky);
            color: var(--midnight-blue);
            border-color: transparent;
            transform: translateY(-2px);
        }

        /* ========================================
           PAGE CONTENT
           ======================================== */
        .page-content {
            padding: 32px 40px;
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--border-subtle);
        }

        .content-title-group h1 {
            font-size: 28px;
            font-weight: 700;
            color: var(--text-primary);
            letter-spacing: 0.3px;
            margin-bottom: 4px;
        }

        .content-title-group p {
            font-size: 14px;
            color: var(--text-muted);
        }

        .content-actions {
            display: flex;
            gap: 12px;
        }

        /* ========================================
           STATS GRID
           ======================================== */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: var(--card-bg);
            backdrop-filter: blur(16px);
            border: 1px solid var(--border-subtle);
            border-radius: 16px;
            padding: 24px;
            position: relative;
            overflow: hidden;
            transition: all var(--transition-medium);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
        }

        .stat-card.blue::before { background: var(--gradient-sky); }
        .stat-card.amber::before { background: var(--gradient-accent); }
        .stat-card.green::before { background: linear-gradient(135deg, #34D399 0%, #10B981 100%); }
        .stat-card.purple::before { background: linear-gradient(135deg, #A78BFA 0%, #8B5CF6 100%); }

        .stat-card:hover {
            transform: translateY(-4px);
            border-color: rgba(47, 168, 255, 0.3);
            box-shadow: var(--shadow-lg);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 16px;
        }

        .stat-icon.blue { background: rgba(47, 168, 255, 0.15); color: var(--sky-blue); }
        .stat-icon.amber { background: rgba(255, 193, 7, 0.15); color: var(--amber); }
        .stat-icon.green { background: rgba(52, 211, 153, 0.15); color: #34D399; }
        .stat-icon.purple { background: rgba(167, 139, 250, 0.15); color: #A78BFA; }

        .stat-value {
            font-size: 32px;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 4px;
            line-height: 1;
        }

        .stat-label {
            font-size: 13px;
            color: var(--text-muted);
            font-weight: 500;
            margin-bottom: 12px;
        }

        .stat-change {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 6px;
        }

        .stat-change.positive { background: rgba(52, 211, 153, 0.15); color: #34D399; }
        .stat-change.negative { background: rgba(239, 68, 68, 0.15); color: #EF4444; }

        /* ========================================
           TOOLBAR
           ======================================== */
        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            gap: 20px;
            flex-wrap: wrap;
        }

        .toolbar-left { display: flex; gap: 12px; align-items: center; flex-wrap: wrap; }

        .filter-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            background: var(--glass-bg);
            border: 1px solid var(--border-subtle);
            border-radius: 10px;
            color: var(--text-secondary);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition-medium);
            text-decoration: none;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--sky-blue);
            color: var(--midnight-blue);
            border-color: transparent;
        }

        .toolbar-right { display: flex; gap: 12px; align-items: center; }

        .view-toggle {
            display: flex;
            background: var(--glass-bg);
            border: 1px solid var(--border-subtle);
            border-radius: 10px;
            overflow: hidden;
        }

        .view-btn {
            padding: 10px 14px;
            background: transparent;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .view-btn:hover { color: var(--sky-blue); }
        .view-btn.active { background: var(--sky-blue); color: var(--midnight-blue); }

        /* ========================================
           TABLE CONTAINER
           ======================================== */
        .table-container {
            background: var(--card-bg);
            backdrop-filter: blur(16px);
            border: 1px solid var(--border-subtle);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 24px;
            background: linear-gradient(135deg, rgba(30, 111, 168, 0.15) 0%, rgba(11, 45, 74, 0.3) 100%);
            border-bottom: 1px solid var(--border-subtle);
        }

        .table-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .table-title i { color: var(--amber); }
        .table-info { font-size: 13px; color: var(--text-muted); }

        table { width: 100%; border-collapse: collapse; }
        thead { background: rgba(47, 168, 255, 0.05); }

        th {
            padding: 16px 20px;
            text-align: left;
            font-weight: 600;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: var(--sky-blue);
            border-bottom: 1px solid var(--border-subtle);
        }

        th:last-child { text-align: right; }

        tbody tr {
            border-bottom: 1px solid var(--border-subtle);
            transition: all var(--transition-fast);
        }

        tbody tr:last-child { border-bottom: none; }
        tbody tr:hover { background: var(--hover-bg); }

        td {
            padding: 16px 20px;
            font-size: 14px;
            color: var(--text-secondary);
        }

        td:last-child { text-align: right; }

        /* ========================================
           USER CELL
           ======================================== */
        .user-cell { display: flex; align-items: center; gap: 14px; }

        .user-avatar {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
            position: relative;
        }

        .user-avatar.blue { background: var(--gradient-sky); color: var(--midnight-blue); }
        .user-avatar.amber { background: var(--gradient-accent); color: var(--midnight-blue); }
        .user-avatar.purple { background: linear-gradient(135deg, #A78BFA 0%, #8B5CF6 100%); color: white; }
        .user-avatar.green { background: linear-gradient(135deg, #34D399 0%, #10B981 100%); color: white; }
        .user-avatar.orange { background: linear-gradient(135deg, #FB923C 0%, #F97316 100%); color: white; }

        .user-details h4 {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 2px;
        }

        .user-details p { font-size: 12px; color: var(--text-muted); }

        .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            position: absolute;
            bottom: -2px;
            right: -2px;
            border: 2px solid var(--darker-bg);
        }

        .status-indicator.online { background: #34D399; }
        .status-indicator.offline { background: var(--text-muted); }
        .status-indicator.busy { background: #EF4444; }

        /* ========================================
           BADGES
           ======================================== */
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        .badge::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }

        .badge-success { background: rgba(52, 211, 153, 0.15); color: #34D399; border: 1px solid rgba(52, 211, 153, 0.3); }
        .badge-success::before { background: #34D399; }

        .badge-warning { background: rgba(251, 191, 36, 0.15); color: #FBBF24; border: 1px solid rgba(251, 191, 36, 0.3); }
        .badge-warning::before { background: #FBBF24; }

        .badge-danger { background: rgba(239, 68, 68, 0.15); color: #EF4444; border: 1px solid rgba(239, 68, 68, 0.3); }
        .badge-danger::before { background: #EF4444; }

        .badge-info { background: rgba(47, 168, 255, 0.15); color: var(--sky-blue); border: 1px solid rgba(47, 168, 255, 0.3); }
        .badge-info::before { background: var(--sky-blue); }

        .badge-primary { background: rgba(255, 193, 7, 0.15); color: var(--amber); border: 1px solid rgba(255, 193, 7, 0.3); }
        .badge-primary::before { background: var(--amber); }

        .badge-purple { background: rgba(167, 139, 250, 0.15); color: #A78BFA; border: 1px solid rgba(167, 139, 250, 0.3); }
        .badge-purple::before { background: #A78BFA; }

        /* ========================================
           ACTION BUTTONS
           ======================================== */
        .action-buttons { display: flex; gap: 8px; justify-content: flex-end; }

        .btn-action {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all var(--transition-medium);
            font-size: 14px;
            text-decoration: none;
        }

        .btn-view { background: rgba(47, 168, 255, 0.15); color: var(--sky-blue); border: 1px solid rgba(47, 168, 255, 0.3); }
        .btn-view:hover { background: var(--sky-blue); color: var(--midnight-blue); transform: translateY(-2px); box-shadow: var(--shadow-glow-blue); }

        .btn-edit { background: rgba(255, 193, 7, 0.15); color: var(--amber); border: 1px solid rgba(255, 193, 7, 0.3); }
        .btn-edit:hover { background: var(--gradient-accent); color: var(--midnight-blue); transform: translateY(-2px); box-shadow: var(--shadow-glow-amber); }

        .btn-delete { background: rgba(239, 68, 68, 0.15); color: #EF4444; border: 1px solid rgba(239, 68, 68, 0.3); }
        .btn-delete:hover { background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%); color: white; transform: translateY(-2px); box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3); }

        /* ========================================
           PAGINATION
           ======================================== */
        .pagination-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 24px;
            background: linear-gradient(135deg, rgba(30, 111, 168, 0.1) 0%, rgba(11, 45, 74, 0.2) 100%);
            border-top: 1px solid var(--border-subtle);
        }

        .pagination-info { font-size: 13px; color: var(--text-muted); }
        .pagination { display: flex; gap: 6px; }

        .page-btn {
            min-width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--glass-bg);
            border: 1px solid var(--border-subtle);
            border-radius: 8px;
            color: var(--text-secondary);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition-fast);
            text-decoration: none;
            padding: 0 10px;
        }

        .page-btn:hover { background: var(--sky-blue); color: var(--midnight-blue); border-color: transparent; }
        .page-btn.active { background: var(--gradient-accent); color: var(--midnight-blue); border-color: transparent; }

        /* ========================================
           EMPTY STATE
           ======================================== */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-state-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: var(--glass-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: var(--text-muted);
        }

        .empty-state h3 {
            font-size: 18px;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
        }

        .empty-state p {
            font-size: 14px;
            color: var(--text-muted);
        }

        /* ========================================
           SCROLLBAR
           ======================================== */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: rgba(47, 168, 255, 0.05); }
        ::-webkit-scrollbar-thumb { background: linear-gradient(180deg, var(--sky-blue) 0%, var(--ocean-blue) 100%); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: linear-gradient(180deg, var(--ice-blue) 0%, var(--sky-blue) 100%); }

        /* ========================================
           RESPONSIVE
           ======================================== */
        @media (max-width: 1200px) {
            .stats-grid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 1024px) {
            .sidebar { --sidebar-collapsed-width: 64px; }
            .main-content { margin-left: var(--sidebar-collapsed-width); }
            .top-bar { padding: 16px 24px; }
            .page-content { padding: 24px; }
            .search-box { display: none; }
        }

        @media (max-width: 768px) {
            .sidebar { width: 100%; height: auto; position: relative; border-right: none; border-bottom: 1px solid var(--border-subtle); }
            .sidebar:hover { width: 100%; }
            .main-content { margin-left: 0; }
            .top-bar { flex-direction: column; gap: 16px; padding: 16px; }
            .top-bar-right { width: 100%; justify-content: flex-end; }
            .content-header { flex-direction: column; align-items: flex-start; gap: 16px; }
            .stats-grid { grid-template-columns: 1fr; }
            .toolbar { flex-direction: column; align-items: stretch; }
            .toolbar-left, .toolbar-right { justify-content: center; }
            .table-container { overflow-x: auto; }
            table { min-width: 700px; }
            .pagination-container { flex-direction: column; gap: 16px; }
        }


        /*beheeeee*/
        .submenu {
    list-style: none;
    padding-left: 0;
    margin-top: 4px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s ease;
}

.menu-item.has-submenu.open .submenu {
    max-height: 300px;
}

.submenu li a {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 9px 14px 9px 20px;
    color: var(--text-secondary);
    text-decoration: none;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 500;
    transition: all var(--transition-fast);
    white-space: nowrap;
}

.submenu li a i {
    font-size: 13px;
    width: 28px;
    height: 28px;
    min-width: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--glass-bg);
    border-radius: 7px;
    border: 1px solid var(--border-subtle);
    transition: all var(--transition-fast);
}

.submenu li a:hover {
    background: var(--glass-bg);
    color: var(--sky-blue);
}

.submenu li a:hover i {
    background: var(--gradient-sky);
    color: var(--midnight-blue);
    border-color: transparent;
}

.submenu li a span {
    opacity: 0;
    transform: translateX(-8px);
    transition: opacity var(--transition-medium) 0.1s, transform var(--transition-medium) 0.1s;
}

.sidebar:hover .submenu li a span {
    opacity: 1;
    transform: translateX(0);
}
.submenu-arrow {
    width: 11px !important;
    height: 11px !important;
    min-width: 11px !important;
    margin-left: auto;
    flex-shrink: 0;
    color: var(--text-muted);
    background: none !important;
    border: none !important;
    box-shadow: none !important;
    border-radius: 0 !important;
    opacity: 0;
    transition: opacity var(--transition-medium), transform var(--transition-medium);
}

.sidebar:hover .submenu-arrow {
    opacity: 1;
}

.menu-item.has-submenu.open .submenu-arrow {
    transform: rotate(180deg);
}

.sidebar:hover .menu-link .submenu-arrow {
    opacity: 1;
}

.menu-item.has-submenu.open .submenu-arrow {
    transform: rotate(180deg);
}
    </style>

    ";
        // line 1130
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 1131
        yield "</head>
<body>
    <div class=\"admin-container\">
        <!-- Sidebar -->
        <aside class=\"sidebar\">
            <div class=\"sidebar-header\">
                <div class=\"sidebar-logo\">A</div>
                <div class=\"sidebar-title\">ASAFAR Admin</div>
            </div>

            <ul class=\"sidebar-menu\">
                <li class=\"menu-item\">
                    <a href=\"";
        // line 1143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"menu-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1143, $this->source); })()), "request", [], "any", false, false, false, 1143), "get", ["_route"], "method", false, false, false, 1143) == "admin_dashboard")) {
            yield "active";
        }
        yield "\" data-tooltip=\"Tableau de bord\">
                        <i class=\"fas fa-chart-pie\"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class=\"menu-item\">
                    <a href=\"";
        // line 1149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\" class=\"menu-link ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1149, $this->source); })()), "request", [], "any", false, false, false, 1149), "get", ["_route"], "method", false, false, false, 1149) == "admin_users")) {
            yield "active";
        }
        yield "\" data-tooltip=\"Utilisateurs\">
                        <i class=\"fas fa-users\"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>
<li class=\"menu-item has-submenu\" id=\"admin-transport-item\">
    <a href=\"javascript:void(0)\" class=\"menu-link submenu-toggle ";
        // line 1155
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1155, $this->source); })()), "request", [], "any", false, false, false, 1155), "get", ["_route"], "method", false, false, false, 1155)) && is_string($_v1 = "admin_transport") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield "\" onclick=\"toggleTransportMenu()\">
        <i class=\"fas fa-plane\"></i>
        <span>Transports</span>
        <i class=\"fas fa-chevron-down\" id=\"transport-arrow\" style=\"margin-left: auto; font-size: 10px; transition: transform 0.3s;\"></i>
    </a>
    
    <ul class=\"submenu-list\" id=\"transport-submenu\" style=\"display: none; list-style: none; padding-left: 20px; background: rgba(0,0,0,0.1);\">
        <li style=\"padding: 5px 0;\">
            <a href=\"";
        // line 1163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transports");
        yield "\" class=\"menu-link\" style=\"font-size: 13px; opacity: 0.8;\">
                <i class=\"fas fa-list-ul\" style=\"font-size: 11px; margin-right: 10px;\"></i> Catalogue
            </a>
        </li>
        <li style=\"padding: 5px 0;\">
            <a href=\"";
        // line 1168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transport_reservation_index");
        yield "\" class=\"menu-link\" style=\"font-size: 13px; opacity: 0.8;\">
                <i class=\"fas fa-ticket-alt\" style=\"font-size: 11px; margin-right: 10px;\"></i> Réservations
            </a>
        </li>
    </ul>
</li>

                <li class=\"menu-item has-submenu ";
        // line 1175
        if ((((((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1175, $this->source); })()), "request", [], "any", false, false, false, 1175), "get", ["_route"], "method", false, false, false, 1175)) && is_string($_v3 = "admin_hebergement") && str_starts_with($_v2, $_v3)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1175, $this->source); })()), "request", [], "any", false, false, false, 1175), "get", ["_route"], "method", false, false, false, 1175) == "admin_hebergements")) || (is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1175, $this->source); })()), "request", [], "any", false, false, false, 1175), "get", ["_route"], "method", false, false, false, 1175)) && is_string($_v5 = "admin_categorie_hebergement") && str_starts_with($_v4, $_v5))) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1175, $this->source); })()), "request", [], "any", false, false, false, 1175), "get", ["_route"], "method", false, false, false, 1175) == "admin_categories_hebergement")) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1175, $this->source); })()), "request", [], "any", false, false, false, 1175), "get", ["_route"], "method", false, false, false, 1175) == "admin_hebergements_categories"))) {
            yield "open";
        }
        yield "\">
                    <a href=\"#\" class=\"menu-link ";
        // line 1176
        if ((((((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1176, $this->source); })()), "request", [], "any", false, false, false, 1176), "get", ["_route"], "method", false, false, false, 1176)) && is_string($_v7 = "admin_hebergement") && str_starts_with($_v6, $_v7)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1176, $this->source); })()), "request", [], "any", false, false, false, 1176), "get", ["_route"], "method", false, false, false, 1176) == "admin_hebergements")) || (is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1176, $this->source); })()), "request", [], "any", false, false, false, 1176), "get", ["_route"], "method", false, false, false, 1176)) && is_string($_v9 = "admin_categorie_hebergement") && str_starts_with($_v8, $_v9))) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1176, $this->source); })()), "request", [], "any", false, false, false, 1176), "get", ["_route"], "method", false, false, false, 1176) == "admin_categories_hebergement")) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1176, $this->source); })()), "request", [], "any", false, false, false, 1176), "get", ["_route"], "method", false, false, false, 1176) == "admin_hebergements_categories"))) {
            yield "active";
        }
        yield "\" data-tooltip=\"Hébergements\" onclick=\"toggleSubmenu(this, event)\">
                        <i class=\"fas fa-hotel\"></i>
                        <span>Hébergements</span>
                        <svg class=\"submenu-arrow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"11\" height=\"11\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                    </a>
                    <ul class=\"submenu\">
                        <li>
                            <a href=\"";
        // line 1183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergements");
        yield "\">
                                <i class=\"fas fa-list\"></i>
                                <span>Liste Hébergements</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 1189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergements_categories");
        yield "\">
                                <i class=\"fas fa-tags\"></i>
                                <span>Catégories</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 1195
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hebergement_reservations");
        yield "\">
                                <i class=\"fas fa-calendar-check\"></i>
                                <span>Réservations</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"menu-item has-submenu\">
    <a href=\"#\" class=\"menu-link\" data-tooltip=\"Loisirs\" onclick=\"toggleSubmenu(this, event)\">
    <i class=\"fas fa-compass\"></i>
    <span>Loisirs</span>
    <svg class=\"submenu-arrow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"11\" height=\"11\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"6 9 12 15 18 9\"/></svg>
</a>


    <ul class=\"submenu\">
    <li>
            <a href=\"";
        // line 1212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorie_index");
        yield "\">
                <i class=\"fas fa-list\"></i>
                <span>Catégories</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 1218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_excursion_index");
        yield "\">
                <i class=\"fas fa-map\"></i>
                <span>Excursions</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 1224
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\">
                <i class=\"fas fa-list\"></i>
                <span>Réservation</span>
            </a>
        </li>
        
    </ul>
</li>
                <li class=\"menu-item\">
                    <a href=\"";
        // line 1233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_posts");
        yield "\" class=\"menu-link ";
        if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1233, $this->source); })()), "request", [], "any", false, false, false, 1233), "get", ["_route"], "method", false, false, false, 1233) == "admin_posts") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1233, $this->source); })()), "request", [], "any", false, false, false, 1233), "get", ["_route"], "method", false, false, false, 1233) == "admin_gestion_posts")) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1233, $this->source); })()), "request", [], "any", false, false, false, 1233), "get", ["_route"], "method", false, false, false, 1233) == "admin_publications")) || (is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1233, $this->source); })()), "request", [], "any", false, false, false, 1233), "get", ["_route"], "method", false, false, false, 1233)) && is_string($_v11 = "admin_publication_") && str_starts_with($_v10, $_v11)))) {
            yield "active";
        }
        yield "\" data-tooltip=\"Publications\">
                        <i class=\"fas fa-newspaper\"></i>
                        <span>Publications</span>
                    </a>
                </li>
<li class=\"menu-item\">
    <a href=\"";
        // line 1239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamations");
        yield "\" 
       class=\"menu-link ";
        // line 1240
        if ((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1240, $this->source); })()), "request", [], "any", false, false, false, 1240), "get", ["_route"], "method", false, false, false, 1240)) && is_string($_v13 = "admin_reclamations") && str_starts_with($_v12, $_v13))) {
            yield "active";
        }
        yield "\" 
       data-tooltip=\"Réclamations\">
        
        <i class=\"fas fa-comment-dots\"></i>
        <span>Réclamations</span>
    </a>
</li>
                <li class=\"menu-item\">
    <a href=\"";
        // line 1248
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_whatsapp_sessions");
        yield "\" 
       class=\"menu-link ";
        // line 1249
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1249, $this->source); })()), "request", [], "any", false, false, false, 1249), "get", ["_route"], "method", false, false, false, 1249) == "admin_whatsapp_sessions")) {
            yield "active";
        }
        yield "\" 
       data-tooltip=\"Sessions WhatsApp\">
        <i class=\"fab fa-whatsapp\"></i>
        <span>Sessions WhatsApp</span>
    </a>
</li>
            </ul>

            <div class=\"sidebar-footer\">
                <div class=\"user-profile\">
                    <div class=\"user-avatar-small\">
                        ";
        // line 1260
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1260, $this->source); })()), "user", [], "any", false, false, false, 1260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1261
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1261, $this->source); })()), "user", [], "any", false, false, false, 1261), "prenom", [], "any", false, false, false, 1261), 0, 1)) . Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1261, $this->source); })()), "user", [], "any", false, false, false, 1261), "nom", [], "any", false, false, false, 1261), 0, 1))), "html", null, true);
            yield "
                        ";
        } else {
            // line 1263
            yield "                            AD
                        ";
        }
        // line 1265
        yield "                    </div>
                    <div class=\"user-info\">
                        <div class=\"user-name\">
                            ";
        // line 1268
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1268, $this->source); })()), "user", [], "any", false, false, false, 1268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1269
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1269, $this->source); })()), "user", [], "any", false, false, false, 1269), "prenom", [], "any", false, false, false, 1269) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1269, $this->source); })()), "user", [], "any", false, false, false, 1269), "nom", [], "any", false, false, false, 1269)), "html", null, true);
            yield "
                            ";
        } else {
            // line 1271
            yield "                                Admin
                            ";
        }
        // line 1273
        yield "                        </div>
                        <div class=\"user-role\">Administrateur</div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class=\"main-content\">
            <!-- Top Bar -->
            <header class=\"top-bar\">
                <div class=\"top-bar-left\">
                    <h1 class=\"top-bar-title\">
                        <i class=\"";
        // line 1286
        yield from $this->unwrap()->yieldBlock('page_icon', $context, $blocks);
        yield "\"></i>
                        ";
        // line 1287
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        // line 1288
        yield "                    </h1>
                    <nav class=\"breadcrumb\">
                        <a href=\"";
        // line 1290
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><i class=\"fas fa-home\"></i></a>
                        <i class=\"fas fa-chevron-right\"></i>
                        <span>";
        // line 1292
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        yield "</span>
                    </nav>
                </div>
                <div class=\"top-bar-right\">
                    ";
        // line 1296
        yield from $this->unwrap()->yieldBlock('top_bar_right', $context, $blocks);
        // line 1330
        yield "<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-external-link-alt\"></i>
                        <span>Déconnexion</span>
                    </a>
                </div>
            </header>

            <!-- Page Content -->
            <main class=\"page-content\">
                ";
        // line 1339
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 1340
        yield "            </main>
        </div>
    </div>

    ";
        // line 1344
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 1347
        yield "</body>
   <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js\"></script>
    <script>
function toggleSubmenu(link, event) {
    event.preventDefault();

    // Si la sidebar est collapsed, on l'empêche d'ouvrir
    const sidebar = document.querySelector('.sidebar');
    const isCollapsed = sidebar.matches(':not(:hover)');
    if (isCollapsed) return;

    const menuItem = link.closest('.menu-item.has-submenu');
    const isOpen = menuItem.classList.contains('open');

    // Ferme tous les autres submenus
    document.querySelectorAll('.menu-item.has-submenu.open').forEach(item => {
        item.classList.remove('open');
    });

    // Toggle le courant
    if (!isOpen) {
        menuItem.classList.add('open');
    }
}

// Ferme les submenus quand la sidebar se collapse
document.querySelector('.sidebar').addEventListener('mouseleave', function() {
    document.querySelectorAll('.menu-item.has-submenu.open').forEach(item => {
        item.classList.remove('open');
    });
});

function toggleNotif() {
    const box = document.getElementById('notifDropdown');

    if (box.style.display === 'none' || box.style.display === '') {
        box.style.display = 'block';
    } else {
        box.style.display = 'none';
    }
}
</script>
<script>
function toggleTransportMenu() {
    const submenu = document.getElementById('transport-submenu');
    const arrow = document.getElementById('transport-arrow');
    
    if (submenu.style.display === 'none') {
        submenu.style.display = 'block';
        arrow.style.transform = 'rotate(180deg)';
    } else {
        submenu.style.display = 'none';
        arrow.style.transform = 'rotate(0deg)';
    }
}

// Garder le menu ouvert si on est sur une route \"admin_transport\"
document.addEventListener('DOMContentLoaded', function() {
    const currentRoute = \"";
        // line 1405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1405, $this->source); })()), "request", [], "any", false, false, false, 1405), "get", ["_route"], "method", false, false, false, 1405), "html", null, true);
        yield "\";
    if (currentRoute.startsWith('admin_transport')) {
        document.getElementById('transport-submenu').style.display = 'block';
        document.getElementById('transport-arrow').style.transform = 'rotate(180deg)';
    }
});
</script>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Admin ASAFAR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1130
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1286
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

    // line 1287
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

    // line 1292
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

    // line 1296
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

        // line 1297
        yield "<div class=\"notification-wrapper\" style=\"position:relative;\">
    <button class=\"notification-btn\" onclick=\"toggleNotif()\">
        <i class=\"fas fa-bell\"></i>
        <span class=\"notification-badge\">";
        // line 1300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 1300, $this->source); })())), "html", null, true);
        yield "</span>
    </button>

    <div id=\"notifDropdown\" style=\"
        display:none;
        position:absolute;
        right:0;
        top:50px;
        width:300px;
        background:#071b2e;
        border:1px solid rgba(47,168,255,0.2);
        border-radius:12px;
        padding:10px;
        z-index:999;
        max-height:300px;
        overflow-y:auto;
    \">
        ";
        // line 1317
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 1317, $this->source); })()))) {
            // line 1318
            yield "            <p style=\"color:white;\">Aucune notification</p>
        ";
        } else {
            // line 1320
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 1320, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 1321
                yield "                <div style=\"padding:10px; border-bottom:1px solid rgba(255,255,255,0.1);\">
                    <strong>";
                // line 1322
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "message", [], "any", false, false, false, 1322), "html", null, true);
                yield "</strong><br>
                    <small>";
                // line 1323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "createdAt", [], "any", false, false, false, 1323), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['n'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1326
            yield "        ";
        }
        // line 1327
        yield "    </div>
</div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1339
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1344
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1345
        yield "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js\"></script>
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
        return "admin/base.html.twig";
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
        return array (  1800 => 1345,  1787 => 1344,  1765 => 1339,  1752 => 1327,  1749 => 1326,  1740 => 1323,  1736 => 1322,  1733 => 1321,  1728 => 1320,  1724 => 1318,  1722 => 1317,  1702 => 1300,  1697 => 1297,  1684 => 1296,  1661 => 1292,  1638 => 1287,  1615 => 1286,  1593 => 1130,  1570 => 6,  1550 => 1405,  1490 => 1347,  1488 => 1344,  1482 => 1340,  1480 => 1339,  1467 => 1330,  1465 => 1296,  1458 => 1292,  1453 => 1290,  1449 => 1288,  1447 => 1287,  1443 => 1286,  1428 => 1273,  1424 => 1271,  1418 => 1269,  1416 => 1268,  1411 => 1265,  1407 => 1263,  1401 => 1261,  1399 => 1260,  1383 => 1249,  1379 => 1248,  1366 => 1240,  1362 => 1239,  1349 => 1233,  1337 => 1224,  1328 => 1218,  1319 => 1212,  1299 => 1195,  1290 => 1189,  1281 => 1183,  1269 => 1176,  1263 => 1175,  1253 => 1168,  1245 => 1163,  1232 => 1155,  1219 => 1149,  1206 => 1143,  1192 => 1131,  1190 => 1130,  63 => 6,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Admin ASAFAR{% endblock %}</title>

    <!-- Google Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Font Awesome Icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">

    <style>
        :root {
            /* Primary Blues */
            --midnight-blue: #0B2D4A;
            --ocean-blue: #1E6FA8;
            --sky-blue: #2FA8FF;
            --ice-blue: #A7E3FF;
            --light-sky: #E8F6FF;

            /* Accent Colors */
            --amber: #FFC107;
            --golden-orange: #FF8F00;
            --amber-light: #FFD54F;

            /* Neutrals */
            --dark-bg: #071B2E;
            --darker-bg: #051421;
            --card-bg: rgba(30, 111, 168, 0.08);
            --glass-bg: rgba(30, 111, 168, 0.12);
            --hover-bg: rgba(47, 168, 255, 0.08);

            /* Text */
            --text-primary: #FFFFFF;
            --text-secondary: rgba(167, 227, 255, 0.7);
            --text-muted: rgba(167, 227, 255, 0.5);

            /* Borders */
            --border-subtle: rgba(47, 168, 255, 0.15);
            --border-light: rgba(255, 193, 7, 0.2);

            /* Shadows */
            --shadow-sm: 0 2px 8px rgba(11, 45, 74, 0.3);
            --shadow-md: 0 4px 20px rgba(11, 45, 74, 0.4);
            --shadow-lg: 0 8px 40px rgba(11, 45, 74, 0.5);
            --shadow-glow-amber: 0 0 30px rgba(255, 193, 7, 0.15);
            --shadow-glow-blue: 0 0 30px rgba(47, 168, 255, 0.15);
            --shadow-glow-green: 0 0 30px rgba(52, 211, 153, 0.15);

            /* Gradients */
            --gradient-primary: linear-gradient(135deg, var(--midnight-blue) 0%, var(--ocean-blue) 100%);
            --gradient-accent: linear-gradient(135deg, var(--amber) 0%, var(--golden-orange) 100%);
            --gradient-sky: linear-gradient(135deg, var(--sky-blue) 0%, var(--ice-blue) 100%);
            --gradient-dark: linear-gradient(180deg, var(--dark-bg) 0%, var(--darker-bg) 100%);

            /* Sidebar */
            --sidebar-collapsed-width: 72px;
            --sidebar-expanded-width: 280px;

            /* Transitions */
            --transition-fast: 0.2s ease;
            --transition-medium: 0.3s ease;
            --transition-smooth: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 16px;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--gradient-dark);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        /* ========================================
           SIDEBAR
           ======================================== */
        .sidebar {
            width: var(--sidebar-collapsed-width);
            background: linear-gradient(180deg, rgba(11, 45, 74, 0.98) 0%, rgba(7, 27, 46, 0.98) 100%);
            backdrop-filter: blur(20px);
            border-right: 1px solid var(--border-subtle);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            overflow-x: hidden;
            z-index: 900;
            transition: all var(--transition-smooth);
            display: flex;
            flex-direction: column;
        }

        .sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(ellipse at 50% 0%, rgba(47, 168, 255, 0.08) 0%, transparent 50%),
                radial-gradient(ellipse at 50% 100%, rgba(255, 193, 7, 0.05) 0%, transparent 50%);
            pointer-events: none;
        }

        .sidebar:hover {
            width: var(--sidebar-expanded-width);
            box-shadow: var(--shadow-lg);
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 32px;
            padding: 24px 16px 20px;
            border-bottom: 1px solid var(--border-subtle);
            position: relative;
            z-index: 1;
            white-space: nowrap;
            overflow: hidden;
        }

        .sidebar-logo {
            width: 44px;
            height: 44px;
            min-width: 44px;
            background: var(--gradient-accent);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            color: var(--midnight-blue);
            box-shadow: var(--shadow-md), var(--shadow-glow-amber);
            transition: all var(--transition-medium);
        }

        .sidebar:hover .sidebar-logo {
            width: 48px;
            height: 48px;
            font-size: 20px;
        }

        .sidebar-title {
            font-size: 0;
            font-weight: 700;
            letter-spacing: 0.5px;
            background: var(--gradient-accent);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            opacity: 0;
            transform: translateX(-10px);
            transition: all var(--transition-medium) 0.1s;
        }

        .sidebar:hover .sidebar-title {
            font-size: 17px;
            opacity: 1;
            transform: translateX(0);
        }

        .sidebar-menu {
            list-style: none;
            position: relative;
            z-index: 1;
            flex: 1;
            padding: 8px 12px;
        }

        .menu-item {
            margin-bottom: 4px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 16px;
            color: var(--text-secondary);
            text-decoration: none;
            border-radius: 12px;
            transition: all var(--transition-smooth);
            position: relative;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 0.2px;
            white-space: nowrap;
            overflow: hidden;
        }

        .menu-link i {
            font-size: 18px;
            width: 40px;
            height: 40px;
            min-width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--glass-bg);
            border-radius: 10px;
            transition: all var(--transition-smooth);
            border: 1px solid var(--border-subtle);
        }

        .menu-link span {
            opacity: 0;
            transform: translateX(-10px);
            transition: all var(--transition-medium) 0.1s;
        }

        .sidebar:hover .menu-link span {
            opacity: 1;
            transform: translateX(0);
        }

        .menu-link:hover {
            background: var(--glass-bg);
            color: var(--sky-blue);
        }

        .menu-link:hover i {
            background: var(--gradient-sky);
            color: var(--midnight-blue);
            border-color: transparent;
            transform: scale(1.05);
            box-shadow: var(--shadow-glow-blue);
        }

        .menu-link.active {
            background: var(--gradient-accent);
            color: var(--midnight-blue);
            font-weight: 600;
            box-shadow: var(--shadow-md), var(--shadow-glow-amber);
        }

        .menu-link.active i {
            background: rgba(11, 45, 74, 0.3);
            color: var(--midnight-blue);
            border-color: transparent;
        }

        .menu-link.active span {
            opacity: 1;
            transform: translateX(0);
        }

        .menu-link::after {
            content: attr(data-tooltip);
            position: absolute;
            left: calc(100% + 12px);
            top: 50%;
            transform: translateY(-50%) translateX(-10px);
            background: var(--midnight-blue);
            color: var(--text-primary);
            padding: 10px 16px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 500;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: all var(--transition-fast);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-subtle);
            z-index: 1000;
        }

        .menu-link::before {
            content: '';
            position: absolute;
            left: calc(100% + 4px);
            top: 50%;
            transform: translateY(-50%);
            border: 6px solid transparent;
            border-right-color: var(--midnight-blue);
            opacity: 0;
            visibility: hidden;
            transition: all var(--transition-fast);
        }

        .sidebar:not(:hover) .menu-link:hover::after,
        .sidebar:not(:hover) .menu-link:hover::before {
            opacity: 1;
            visibility: visible;
            transform: translateY(-50%) translateX(0);
        }

        .sidebar-footer {
            padding: 16px;
            border-top: 1px solid var(--border-subtle);
            position: relative;
            z-index: 1;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border-radius: 12px;
            background: var(--glass-bg);
            transition: all var(--transition-medium);
            white-space: nowrap;
            overflow: hidden;
        }

        .user-avatar-small {
            width: 36px;
            height: 36px;
            min-width: 36px;
            background: var(--gradient-sky);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: var(--midnight-blue);
            font-size: 14px;
        }

        .user-info {
            opacity: 0;
            transform: translateX(-10px);
            transition: all var(--transition-medium) 0.1s;
        }

        .sidebar:hover .user-info {
            opacity: 1;
            transform: translateX(0);
        }

        .user-name {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-primary);
        }

        .user-role {
            font-size: 11px;
            color: var(--text-muted);
        }

        /* ========================================
           MAIN CONTENT
           ======================================== */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-collapsed-width);
            transition: margin-left var(--transition-smooth);
            min-height: 100vh;
        }

        .top-bar {
            background: rgba(11, 45, 74, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-subtle);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 800;
            box-shadow: var(--shadow-md);
        }

        .top-bar-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .top-bar-title {
            font-size: 22px;
            font-weight: 700;
            background: linear-gradient(135deg, var(--text-primary) 0%, var(--ice-blue) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 0.3px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .top-bar-title i {
            color: var(--sky-blue);
            -webkit-text-fill-color: var(--sky-blue);
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: var(--text-muted);
        }

        .breadcrumb a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color var(--transition-fast);
        }

        .breadcrumb a:hover {
            color: var(--sky-blue);
        }

        .breadcrumb i {
            font-size: 10px;
        }

        .top-bar-right {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .search-box {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-box input {
            width: 240px;
            padding: 10px 16px 10px 40px;
            background: var(--glass-bg);
            border: 1px solid var(--border-subtle);
            border-radius: 10px;
            color: var(--text-primary);
            font-size: 13px;
            transition: all var(--transition-medium);
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--sky-blue);
            box-shadow: var(--shadow-glow-blue);
            width: 300px;
        }

        .search-box input::placeholder {
            color: var(--text-muted);
        }

        .search-box i {
            position: absolute;
            left: 14px;
            color: var(--text-muted);
            font-size: 14px;
        }

        .notification-btn,
        .settings-btn {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--glass-bg);
            border: 1px solid var(--border-subtle);
            border-radius: 10px;
            color: var(--text-secondary);
            cursor: pointer;
            transition: all var(--transition-medium);
            position: relative;
        }

        .notification-btn:hover,
        .settings-btn:hover {
            background: var(--sky-blue);
            color: var(--midnight-blue);
            border-color: transparent;
            transform: translateY(-2px);
        }

        .notification-badge {
            position: absolute;
            top: -4px;
            right: -4px;
            width: 18px;
            height: 18px;
            background: var(--gradient-accent);
            border-radius: 50%;
            font-size: 10px;
            font-weight: 700;
            color: var(--midnight-blue);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all var(--transition-smooth);
            font-size: 14px;
            letter-spacing: 0.3px;
            text-decoration: none;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: var(--gradient-accent);
            color: var(--midnight-blue);
            box-shadow: var(--shadow-md), 0 4px 20px rgba(255, 193, 7, 0.25);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg), 0 8px 30px rgba(255, 193, 7, 0.35);
        }

        .btn-secondary {
            background: var(--glass-bg);
            color: var(--ice-blue);
            border: 1px solid var(--border-subtle);
        }

        .btn-secondary:hover {
            background: var(--gradient-sky);
            color: var(--midnight-blue);
            border-color: transparent;
            transform: translateY(-2px);
        }

        /* ========================================
           PAGE CONTENT
           ======================================== */
        .page-content {
            padding: 32px 40px;
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--border-subtle);
        }

        .content-title-group h1 {
            font-size: 28px;
            font-weight: 700;
            color: var(--text-primary);
            letter-spacing: 0.3px;
            margin-bottom: 4px;
        }

        .content-title-group p {
            font-size: 14px;
            color: var(--text-muted);
        }

        .content-actions {
            display: flex;
            gap: 12px;
        }

        /* ========================================
           STATS GRID
           ======================================== */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: var(--card-bg);
            backdrop-filter: blur(16px);
            border: 1px solid var(--border-subtle);
            border-radius: 16px;
            padding: 24px;
            position: relative;
            overflow: hidden;
            transition: all var(--transition-medium);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
        }

        .stat-card.blue::before { background: var(--gradient-sky); }
        .stat-card.amber::before { background: var(--gradient-accent); }
        .stat-card.green::before { background: linear-gradient(135deg, #34D399 0%, #10B981 100%); }
        .stat-card.purple::before { background: linear-gradient(135deg, #A78BFA 0%, #8B5CF6 100%); }

        .stat-card:hover {
            transform: translateY(-4px);
            border-color: rgba(47, 168, 255, 0.3);
            box-shadow: var(--shadow-lg);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 16px;
        }

        .stat-icon.blue { background: rgba(47, 168, 255, 0.15); color: var(--sky-blue); }
        .stat-icon.amber { background: rgba(255, 193, 7, 0.15); color: var(--amber); }
        .stat-icon.green { background: rgba(52, 211, 153, 0.15); color: #34D399; }
        .stat-icon.purple { background: rgba(167, 139, 250, 0.15); color: #A78BFA; }

        .stat-value {
            font-size: 32px;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 4px;
            line-height: 1;
        }

        .stat-label {
            font-size: 13px;
            color: var(--text-muted);
            font-weight: 500;
            margin-bottom: 12px;
        }

        .stat-change {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 6px;
        }

        .stat-change.positive { background: rgba(52, 211, 153, 0.15); color: #34D399; }
        .stat-change.negative { background: rgba(239, 68, 68, 0.15); color: #EF4444; }

        /* ========================================
           TOOLBAR
           ======================================== */
        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            gap: 20px;
            flex-wrap: wrap;
        }

        .toolbar-left { display: flex; gap: 12px; align-items: center; flex-wrap: wrap; }

        .filter-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            background: var(--glass-bg);
            border: 1px solid var(--border-subtle);
            border-radius: 10px;
            color: var(--text-secondary);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition-medium);
            text-decoration: none;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--sky-blue);
            color: var(--midnight-blue);
            border-color: transparent;
        }

        .toolbar-right { display: flex; gap: 12px; align-items: center; }

        .view-toggle {
            display: flex;
            background: var(--glass-bg);
            border: 1px solid var(--border-subtle);
            border-radius: 10px;
            overflow: hidden;
        }

        .view-btn {
            padding: 10px 14px;
            background: transparent;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .view-btn:hover { color: var(--sky-blue); }
        .view-btn.active { background: var(--sky-blue); color: var(--midnight-blue); }

        /* ========================================
           TABLE CONTAINER
           ======================================== */
        .table-container {
            background: var(--card-bg);
            backdrop-filter: blur(16px);
            border: 1px solid var(--border-subtle);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 24px;
            background: linear-gradient(135deg, rgba(30, 111, 168, 0.15) 0%, rgba(11, 45, 74, 0.3) 100%);
            border-bottom: 1px solid var(--border-subtle);
        }

        .table-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .table-title i { color: var(--amber); }
        .table-info { font-size: 13px; color: var(--text-muted); }

        table { width: 100%; border-collapse: collapse; }
        thead { background: rgba(47, 168, 255, 0.05); }

        th {
            padding: 16px 20px;
            text-align: left;
            font-weight: 600;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: var(--sky-blue);
            border-bottom: 1px solid var(--border-subtle);
        }

        th:last-child { text-align: right; }

        tbody tr {
            border-bottom: 1px solid var(--border-subtle);
            transition: all var(--transition-fast);
        }

        tbody tr:last-child { border-bottom: none; }
        tbody tr:hover { background: var(--hover-bg); }

        td {
            padding: 16px 20px;
            font-size: 14px;
            color: var(--text-secondary);
        }

        td:last-child { text-align: right; }

        /* ========================================
           USER CELL
           ======================================== */
        .user-cell { display: flex; align-items: center; gap: 14px; }

        .user-avatar {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
            position: relative;
        }

        .user-avatar.blue { background: var(--gradient-sky); color: var(--midnight-blue); }
        .user-avatar.amber { background: var(--gradient-accent); color: var(--midnight-blue); }
        .user-avatar.purple { background: linear-gradient(135deg, #A78BFA 0%, #8B5CF6 100%); color: white; }
        .user-avatar.green { background: linear-gradient(135deg, #34D399 0%, #10B981 100%); color: white; }
        .user-avatar.orange { background: linear-gradient(135deg, #FB923C 0%, #F97316 100%); color: white; }

        .user-details h4 {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 2px;
        }

        .user-details p { font-size: 12px; color: var(--text-muted); }

        .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            position: absolute;
            bottom: -2px;
            right: -2px;
            border: 2px solid var(--darker-bg);
        }

        .status-indicator.online { background: #34D399; }
        .status-indicator.offline { background: var(--text-muted); }
        .status-indicator.busy { background: #EF4444; }

        /* ========================================
           BADGES
           ======================================== */
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        .badge::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }

        .badge-success { background: rgba(52, 211, 153, 0.15); color: #34D399; border: 1px solid rgba(52, 211, 153, 0.3); }
        .badge-success::before { background: #34D399; }

        .badge-warning { background: rgba(251, 191, 36, 0.15); color: #FBBF24; border: 1px solid rgba(251, 191, 36, 0.3); }
        .badge-warning::before { background: #FBBF24; }

        .badge-danger { background: rgba(239, 68, 68, 0.15); color: #EF4444; border: 1px solid rgba(239, 68, 68, 0.3); }
        .badge-danger::before { background: #EF4444; }

        .badge-info { background: rgba(47, 168, 255, 0.15); color: var(--sky-blue); border: 1px solid rgba(47, 168, 255, 0.3); }
        .badge-info::before { background: var(--sky-blue); }

        .badge-primary { background: rgba(255, 193, 7, 0.15); color: var(--amber); border: 1px solid rgba(255, 193, 7, 0.3); }
        .badge-primary::before { background: var(--amber); }

        .badge-purple { background: rgba(167, 139, 250, 0.15); color: #A78BFA; border: 1px solid rgba(167, 139, 250, 0.3); }
        .badge-purple::before { background: #A78BFA; }

        /* ========================================
           ACTION BUTTONS
           ======================================== */
        .action-buttons { display: flex; gap: 8px; justify-content: flex-end; }

        .btn-action {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all var(--transition-medium);
            font-size: 14px;
            text-decoration: none;
        }

        .btn-view { background: rgba(47, 168, 255, 0.15); color: var(--sky-blue); border: 1px solid rgba(47, 168, 255, 0.3); }
        .btn-view:hover { background: var(--sky-blue); color: var(--midnight-blue); transform: translateY(-2px); box-shadow: var(--shadow-glow-blue); }

        .btn-edit { background: rgba(255, 193, 7, 0.15); color: var(--amber); border: 1px solid rgba(255, 193, 7, 0.3); }
        .btn-edit:hover { background: var(--gradient-accent); color: var(--midnight-blue); transform: translateY(-2px); box-shadow: var(--shadow-glow-amber); }

        .btn-delete { background: rgba(239, 68, 68, 0.15); color: #EF4444; border: 1px solid rgba(239, 68, 68, 0.3); }
        .btn-delete:hover { background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%); color: white; transform: translateY(-2px); box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3); }

        /* ========================================
           PAGINATION
           ======================================== */
        .pagination-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 24px;
            background: linear-gradient(135deg, rgba(30, 111, 168, 0.1) 0%, rgba(11, 45, 74, 0.2) 100%);
            border-top: 1px solid var(--border-subtle);
        }

        .pagination-info { font-size: 13px; color: var(--text-muted); }
        .pagination { display: flex; gap: 6px; }

        .page-btn {
            min-width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--glass-bg);
            border: 1px solid var(--border-subtle);
            border-radius: 8px;
            color: var(--text-secondary);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition-fast);
            text-decoration: none;
            padding: 0 10px;
        }

        .page-btn:hover { background: var(--sky-blue); color: var(--midnight-blue); border-color: transparent; }
        .page-btn.active { background: var(--gradient-accent); color: var(--midnight-blue); border-color: transparent; }

        /* ========================================
           EMPTY STATE
           ======================================== */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-state-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: var(--glass-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: var(--text-muted);
        }

        .empty-state h3 {
            font-size: 18px;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
        }

        .empty-state p {
            font-size: 14px;
            color: var(--text-muted);
        }

        /* ========================================
           SCROLLBAR
           ======================================== */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: rgba(47, 168, 255, 0.05); }
        ::-webkit-scrollbar-thumb { background: linear-gradient(180deg, var(--sky-blue) 0%, var(--ocean-blue) 100%); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: linear-gradient(180deg, var(--ice-blue) 0%, var(--sky-blue) 100%); }

        /* ========================================
           RESPONSIVE
           ======================================== */
        @media (max-width: 1200px) {
            .stats-grid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 1024px) {
            .sidebar { --sidebar-collapsed-width: 64px; }
            .main-content { margin-left: var(--sidebar-collapsed-width); }
            .top-bar { padding: 16px 24px; }
            .page-content { padding: 24px; }
            .search-box { display: none; }
        }

        @media (max-width: 768px) {
            .sidebar { width: 100%; height: auto; position: relative; border-right: none; border-bottom: 1px solid var(--border-subtle); }
            .sidebar:hover { width: 100%; }
            .main-content { margin-left: 0; }
            .top-bar { flex-direction: column; gap: 16px; padding: 16px; }
            .top-bar-right { width: 100%; justify-content: flex-end; }
            .content-header { flex-direction: column; align-items: flex-start; gap: 16px; }
            .stats-grid { grid-template-columns: 1fr; }
            .toolbar { flex-direction: column; align-items: stretch; }
            .toolbar-left, .toolbar-right { justify-content: center; }
            .table-container { overflow-x: auto; }
            table { min-width: 700px; }
            .pagination-container { flex-direction: column; gap: 16px; }
        }


        /*beheeeee*/
        .submenu {
    list-style: none;
    padding-left: 0;
    margin-top: 4px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.35s ease;
}

.menu-item.has-submenu.open .submenu {
    max-height: 300px;
}

.submenu li a {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 9px 14px 9px 20px;
    color: var(--text-secondary);
    text-decoration: none;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 500;
    transition: all var(--transition-fast);
    white-space: nowrap;
}

.submenu li a i {
    font-size: 13px;
    width: 28px;
    height: 28px;
    min-width: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--glass-bg);
    border-radius: 7px;
    border: 1px solid var(--border-subtle);
    transition: all var(--transition-fast);
}

.submenu li a:hover {
    background: var(--glass-bg);
    color: var(--sky-blue);
}

.submenu li a:hover i {
    background: var(--gradient-sky);
    color: var(--midnight-blue);
    border-color: transparent;
}

.submenu li a span {
    opacity: 0;
    transform: translateX(-8px);
    transition: opacity var(--transition-medium) 0.1s, transform var(--transition-medium) 0.1s;
}

.sidebar:hover .submenu li a span {
    opacity: 1;
    transform: translateX(0);
}
.submenu-arrow {
    width: 11px !important;
    height: 11px !important;
    min-width: 11px !important;
    margin-left: auto;
    flex-shrink: 0;
    color: var(--text-muted);
    background: none !important;
    border: none !important;
    box-shadow: none !important;
    border-radius: 0 !important;
    opacity: 0;
    transition: opacity var(--transition-medium), transform var(--transition-medium);
}

.sidebar:hover .submenu-arrow {
    opacity: 1;
}

.menu-item.has-submenu.open .submenu-arrow {
    transform: rotate(180deg);
}

.sidebar:hover .menu-link .submenu-arrow {
    opacity: 1;
}

.menu-item.has-submenu.open .submenu-arrow {
    transform: rotate(180deg);
}
    </style>

    {% block stylesheets %}{% endblock %}
</head>
<body>
    <div class=\"admin-container\">
        <!-- Sidebar -->
        <aside class=\"sidebar\">
            <div class=\"sidebar-header\">
                <div class=\"sidebar-logo\">A</div>
                <div class=\"sidebar-title\">ASAFAR Admin</div>
            </div>

            <ul class=\"sidebar-menu\">
                <li class=\"menu-item\">
                    <a href=\"{{ path('admin_dashboard') }}\" class=\"menu-link {% if app.request.get('_route') == 'admin_dashboard' %}active{% endif %}\" data-tooltip=\"Tableau de bord\">
                        <i class=\"fas fa-chart-pie\"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class=\"menu-item\">
                    <a href=\"{{ path('admin_users') }}\" class=\"menu-link {% if app.request.get('_route') == 'admin_users' %}active{% endif %}\" data-tooltip=\"Utilisateurs\">
                        <i class=\"fas fa-users\"></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>
<li class=\"menu-item has-submenu\" id=\"admin-transport-item\">
    <a href=\"javascript:void(0)\" class=\"menu-link submenu-toggle {% if app.request.get('_route') starts with 'admin_transport' %}active{% endif %}\" onclick=\"toggleTransportMenu()\">
        <i class=\"fas fa-plane\"></i>
        <span>Transports</span>
        <i class=\"fas fa-chevron-down\" id=\"transport-arrow\" style=\"margin-left: auto; font-size: 10px; transition: transform 0.3s;\"></i>
    </a>
    
    <ul class=\"submenu-list\" id=\"transport-submenu\" style=\"display: none; list-style: none; padding-left: 20px; background: rgba(0,0,0,0.1);\">
        <li style=\"padding: 5px 0;\">
            <a href=\"{{ path('admin_transports') }}\" class=\"menu-link\" style=\"font-size: 13px; opacity: 0.8;\">
                <i class=\"fas fa-list-ul\" style=\"font-size: 11px; margin-right: 10px;\"></i> Catalogue
            </a>
        </li>
        <li style=\"padding: 5px 0;\">
            <a href=\"{{ path('admin_transport_reservation_index') }}\" class=\"menu-link\" style=\"font-size: 13px; opacity: 0.8;\">
                <i class=\"fas fa-ticket-alt\" style=\"font-size: 11px; margin-right: 10px;\"></i> Réservations
            </a>
        </li>
    </ul>
</li>

                <li class=\"menu-item has-submenu {% if app.request.get('_route') starts with 'admin_hebergement' or app.request.get('_route') == 'admin_hebergements' or app.request.get('_route') starts with 'admin_categorie_hebergement' or app.request.get('_route') == 'admin_categories_hebergement' or app.request.get('_route') == 'admin_hebergements_categories' %}open{% endif %}\">
                    <a href=\"#\" class=\"menu-link {% if app.request.get('_route') starts with 'admin_hebergement' or app.request.get('_route') == 'admin_hebergements' or app.request.get('_route') starts with 'admin_categorie_hebergement' or app.request.get('_route') == 'admin_categories_hebergement' or app.request.get('_route') == 'admin_hebergements_categories' %}active{% endif %}\" data-tooltip=\"Hébergements\" onclick=\"toggleSubmenu(this, event)\">
                        <i class=\"fas fa-hotel\"></i>
                        <span>Hébergements</span>
                        <svg class=\"submenu-arrow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"11\" height=\"11\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"6 9 12 15 18 9\"/></svg>
                    </a>
                    <ul class=\"submenu\">
                        <li>
                            <a href=\"{{ path('admin_hebergements') }}\">
                                <i class=\"fas fa-list\"></i>
                                <span>Liste Hébergements</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_hebergements_categories') }}\">
                                <i class=\"fas fa-tags\"></i>
                                <span>Catégories</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_hebergement_reservations') }}\">
                                <i class=\"fas fa-calendar-check\"></i>
                                <span>Réservations</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"menu-item has-submenu\">
    <a href=\"#\" class=\"menu-link\" data-tooltip=\"Loisirs\" onclick=\"toggleSubmenu(this, event)\">
    <i class=\"fas fa-compass\"></i>
    <span>Loisirs</span>
    <svg class=\"submenu-arrow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"11\" height=\"11\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"6 9 12 15 18 9\"/></svg>
</a>


    <ul class=\"submenu\">
    <li>
            <a href=\"{{ path('admin_categorie_index') }}\">
                <i class=\"fas fa-list\"></i>
                <span>Catégories</span>
            </a>
        </li>
        <li>
            <a href=\"{{ path('admin_excursion_index') }}\">
                <i class=\"fas fa-map\"></i>
                <span>Excursions</span>
            </a>
        </li>
        <li>
            <a href=\"{{ path('admin_reservation_index') }}\">
                <i class=\"fas fa-list\"></i>
                <span>Réservation</span>
            </a>
        </li>
        
    </ul>
</li>
                <li class=\"menu-item\">
                    <a href=\"{{ path('admin_posts') }}\" class=\"menu-link {% if app.request.get('_route') == 'admin_posts' or app.request.get('_route') == 'admin_gestion_posts' or app.request.get('_route') == 'admin_publications' or app.request.get('_route') starts with 'admin_publication_' %}active{% endif %}\" data-tooltip=\"Publications\">
                        <i class=\"fas fa-newspaper\"></i>
                        <span>Publications</span>
                    </a>
                </li>
<li class=\"menu-item\">
    <a href=\"{{ path('admin_reclamations') }}\" 
       class=\"menu-link {% if app.request.get('_route') starts with 'admin_reclamations' %}active{% endif %}\" 
       data-tooltip=\"Réclamations\">
        
        <i class=\"fas fa-comment-dots\"></i>
        <span>Réclamations</span>
    </a>
</li>
                <li class=\"menu-item\">
    <a href=\"{{ path('admin_whatsapp_sessions') }}\" 
       class=\"menu-link {% if app.request.get('_route') == 'admin_whatsapp_sessions' %}active{% endif %}\" 
       data-tooltip=\"Sessions WhatsApp\">
        <i class=\"fab fa-whatsapp\"></i>
        <span>Sessions WhatsApp</span>
    </a>
</li>
            </ul>

            <div class=\"sidebar-footer\">
                <div class=\"user-profile\">
                    <div class=\"user-avatar-small\">
                        {% if app.user %}
                            {{ app.user.prenom|slice(0,1)|upper ~ app.user.nom|slice(0,1)|upper }}
                        {% else %}
                            AD
                        {% endif %}
                    </div>
                    <div class=\"user-info\">
                        <div class=\"user-name\">
                            {% if app.user %}
                                {{ app.user.prenom ~ ' ' ~ app.user.nom }}
                            {% else %}
                                Admin
                            {% endif %}
                        </div>
                        <div class=\"user-role\">Administrateur</div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class=\"main-content\">
            <!-- Top Bar -->
            <header class=\"top-bar\">
                <div class=\"top-bar-left\">
                    <h1 class=\"top-bar-title\">
                        <i class=\"{% block page_icon %}fas fa-chart-pie{% endblock %}\"></i>
                        {% block page_title %}Tableau de bord{% endblock %}
                    </h1>
                    <nav class=\"breadcrumb\">
                        <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fas fa-home\"></i></a>
                        <i class=\"fas fa-chevron-right\"></i>
                        <span>{% block breadcrumb %}Accueil{% endblock %}</span>
                    </nav>
                </div>
                <div class=\"top-bar-right\">
                    {% block top_bar_right %}
<div class=\"notification-wrapper\" style=\"position:relative;\">
    <button class=\"notification-btn\" onclick=\"toggleNotif()\">
        <i class=\"fas fa-bell\"></i>
        <span class=\"notification-badge\">{{ notifications|length }}</span>
    </button>

    <div id=\"notifDropdown\" style=\"
        display:none;
        position:absolute;
        right:0;
        top:50px;
        width:300px;
        background:#071b2e;
        border:1px solid rgba(47,168,255,0.2);
        border-radius:12px;
        padding:10px;
        z-index:999;
        max-height:300px;
        overflow-y:auto;
    \">
        {% if notifications is empty %}
            <p style=\"color:white;\">Aucune notification</p>
        {% else %}
            {% for n in notifications %}
                <div style=\"padding:10px; border-bottom:1px solid rgba(255,255,255,0.1);\">
                    <strong>{{ n.message }}</strong><br>
                    <small>{{ n.createdAt|date('d/m/Y H:i') }}</small>
                </div>
            {% endfor %}
        {% endif %}
    </div>
</div>
                    {% endblock %}
<a href=\"{{ path('app_logout') }}\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-external-link-alt\"></i>
                        <span>Déconnexion</span>
                    </a>
                </div>
            </header>

            <!-- Page Content -->
            <main class=\"page-content\">
                {% block content %}{% endblock %}
            </main>
        </div>
    </div>

    {% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js\"></script>
    {% endblock %}
</body>
   <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js\"></script>
    <script>
function toggleSubmenu(link, event) {
    event.preventDefault();

    // Si la sidebar est collapsed, on l'empêche d'ouvrir
    const sidebar = document.querySelector('.sidebar');
    const isCollapsed = sidebar.matches(':not(:hover)');
    if (isCollapsed) return;

    const menuItem = link.closest('.menu-item.has-submenu');
    const isOpen = menuItem.classList.contains('open');

    // Ferme tous les autres submenus
    document.querySelectorAll('.menu-item.has-submenu.open').forEach(item => {
        item.classList.remove('open');
    });

    // Toggle le courant
    if (!isOpen) {
        menuItem.classList.add('open');
    }
}

// Ferme les submenus quand la sidebar se collapse
document.querySelector('.sidebar').addEventListener('mouseleave', function() {
    document.querySelectorAll('.menu-item.has-submenu.open').forEach(item => {
        item.classList.remove('open');
    });
});

function toggleNotif() {
    const box = document.getElementById('notifDropdown');

    if (box.style.display === 'none' || box.style.display === '') {
        box.style.display = 'block';
    } else {
        box.style.display = 'none';
    }
}
</script>
<script>
function toggleTransportMenu() {
    const submenu = document.getElementById('transport-submenu');
    const arrow = document.getElementById('transport-arrow');
    
    if (submenu.style.display === 'none') {
        submenu.style.display = 'block';
        arrow.style.transform = 'rotate(180deg)';
    } else {
        submenu.style.display = 'none';
        arrow.style.transform = 'rotate(0deg)';
    }
}

// Garder le menu ouvert si on est sur une route \"admin_transport\"
document.addEventListener('DOMContentLoaded', function() {
    const currentRoute = \"{{ app.request.get('_route') }}\";
    if (currentRoute.startsWith('admin_transport')) {
        document.getElementById('transport-submenu').style.display = 'block';
        document.getElementById('transport-arrow').style.transform = 'rotate(180deg)';
    }
});
</script>
</html>
", "admin/base.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\base.html.twig");
    }
}
