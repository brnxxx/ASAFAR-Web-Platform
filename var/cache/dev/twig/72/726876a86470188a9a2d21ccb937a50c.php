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

/* base.html.twig */
class __TwigTemplate_16ef852807fb7cc1173c547de0961046 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><circle cx=%2264%22 cy=%2264%22 r=%2264%22 fill=%22%230B2D4A%22/><circle cx=%2264%22 cy=%2264%22 r=%2260%22 fill=%22%2308263E%22/><text x=%2264%22 y=%2275%22 font-size=%2242%22 font-weight=%22bold%22 text-anchor=%22middle%22 fill=%22%23FFC107%22 font-family=%22Arial%22>A</text></svg>\">
<link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap\" rel=\"stylesheet\">
        <!-- Google Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap\" rel=\"stylesheet\">

        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">

        <style>

        .modal {
    display: none; /* caché au début */
    position: fixed;
    z-index: 2000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;

    background: rgba(0,0,0,0.6); /* fond sombre */
}

.modal-content {
    background: #0B2D4A;
    margin: 8% auto;
    padding: 30px;
    border-radius: 20px;
    width: 600px;
    max-width: 90%;

    box-shadow: 0 20px 50px rgba(0,0,0,0.5);
}

.closeQuiz {
    float: right;
    font-size: 28px;
    cursor: pointer;
    color: #FFC107;
}
        .quiz-btn {
    position: relative;
    color: #fff;
    font-weight: 600;
}

.quiz-btn::after {
    content: \"🎁\";
    margin-left: 5px;
    animation: bounce 1.5s infinite;
}

@keyframes bounce {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            :root {
                --primary-dark: #0B2D4A;
                --primary-darker: #08263E;
                --accent-amber: #FFC107;
                --accent-orange: #FF8F00;
                --light-bg: #F4F8FC;
                --gradient-1: linear-gradient(135deg, #0B2D4A 0%, #08263E 100%);
                --gradient-2: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
            }

            html {
                scroll-behavior: smooth;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(135deg, #0B2D4A 0%, #08263E 50%, #051621 100%);
                color: var(--light-bg);
                overflow-x: hidden;
                background-attachment: fixed;
                position: relative;
            }

            body::before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background:
                    radial-gradient(circle at 20% 50%, rgba(255, 193, 7, 0.03) 0%, transparent 50%),
                    radial-gradient(circle at 80% 80%, rgba(255, 143, 0, 0.02) 0%, transparent 50%);
                pointer-events: none;
                z-index: -1;
                animation: backgroundShift 15s ease-in-out infinite;
            }

            @keyframes backgroundShift {
                0%, 100% {
                    opacity: 1;
                }
                50% {
                    opacity: 1.2;
                }
            }

            /* Navigation */
            nav {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000;
                background: rgba(8, 38, 62, 0.85);
                backdrop-filter: blur(20px);
                border-bottom: 2px solid var(--accent-amber);
                box-shadow: 0 8px 32px rgba(255, 193, 7, 0.08);
                animation: slideDown 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            nav:hover {
                background: rgba(8, 38, 62, 0.95);
                box-shadow: 0 12px 48px rgba(255, 193, 7, 0.15);
            }

            @keyframes slideDown {
                from {
                    transform: translateY(-100%);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            .nav-container {
                max-width: 1400px;
                margin: 0 auto;
                padding: 0 30px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                height: 80px;
                gap: 20px;
                flex-wrap: nowrap;
            }

            .nav-logo {
                font-size: 20px;
                font-weight: 700;
                color: var(--light-bg);
                letter-spacing: 2px;
                display: flex;
                align-items: center;
                gap: 12px;
                animation: glowPulse 3.5s ease-in-out infinite, logoFloat 3s ease-in-out infinite;
                font-family: 'Playfair Display', serif;
                transition: all 0.3s ease;
                white-space: nowrap;
                flex-shrink: 0;
            }

            .nav-logo:hover {
                letter-spacing: 2.5px;
            }

            .logo-image {
                height: 45px;
                width: auto;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                filter: drop-shadow(0 4px 12px rgba(255, 193, 7, 0.3));
                border-radius: 8px;
                flex-shrink: 0;
            }

            .nav-logo:hover .logo-image {
                transform: scale(1.12) rotate(5deg);
                filter: drop-shadow(0 8px 25px rgba(255, 193, 7, 0.5));
            }

            .logo-text {
                transition: all 0.3s ease;
                letter-spacing: 2px;
                white-space: nowrap;
            }

            .nav-logo-icon {
                width: 36px;
                height: 36px;
                background: var(--gradient-2);
                border-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 18px;
                font-weight: bold;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                box-shadow: 0 4px 15px rgba(255, 193, 7, 0.2);
            }

            .nav-logo:hover .nav-logo-icon {
                transform: scale(1.15) rotate(8deg);
                box-shadow: 0 8px 30px rgba(255, 193, 7, 0.4);
            }

            @keyframes glowPulse {
                0%, 100% { filter: drop-shadow(0 0 8px rgba(255, 193, 7, 0.3)); }
                50% { filter: drop-shadow(0 0 20px rgba(255, 143, 0, 0.5)); }
            }

            @keyframes logoFloat {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-3px); }
            }

            .nav-links {
                display: flex;
                gap: 18px;
                list-style: none;
                flex-shrink: 1;
                align-items: center;
                justify-content: flex-end;
                flex: 1;
                min-width: 0;
            }

            .nav-item {
                position: relative;
                white-space: nowrap;
                flex-shrink: 0;
            }

            .nav-links a {
                color: var(--light-bg);
                text-decoration: none;
                position: relative;
                font-weight: 500;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-size: 12px;
                letter-spacing: 0.7px;
                text-transform: uppercase;
                display: flex;
                align-items: center;
                gap: 4px;
                padding: 6px 0;
            }

            .nav-links i {
                font-size: 13px;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                color: var(--accent-amber);
            }

            .nav-links a:hover i {
                color: var(--accent-orange);
                transform: scale(1.2) rotate(10deg);
                text-shadow: 0 0 12px rgba(255, 143, 0, 0.4);
            }

            .nav-links a::before {
                content: '';
                position: absolute;
                bottom: -5px;
                left: 0;
                width: 0;
                height: 3px;
                background: var(--gradient-2);
                transition: width 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                border-radius: 3px;
                box-shadow: 0 0 10px rgba(255, 193, 7, 0.3);
            }

            .nav-links a:hover::before {
                width: 100%;
                box-shadow: 0 0 15px rgba(255, 143, 0, 0.5);
            }

            .nav-links a:hover {
                transform: translateY(-3px);
                color: var(--accent-amber);
                letter-spacing: 1.5px;
                text-shadow: 0 0 10px rgba(255, 193, 7, 0.3);
            }

            /* Dropdown Menu */
            .dropdown-toggle::after {
                content: '▼';
                font-size: 10px;
                transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                display: inline-block;
                margin-left: 4px;
            }

            .nav-item:hover .dropdown-toggle::after {
                transform: rotate(180deg) scaleY(1.2);
            }

            .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                background: rgba(8, 38, 62, 0.95);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 193, 7, 0.3);
                border-radius: 16px;
                min-width: 240px;
                list-style: none;
                padding: 12px 0;
                margin-top: 10px;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-20px);
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                box-shadow: 0 20px 50px rgba(255, 193, 7, 0.12);
            }

            .nav-item:hover .dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
                box-shadow: 0 25px 60px rgba(255, 193, 7, 0.15);
            }

            .dropdown-menu li {
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                animation: slideInDropdown 0.4s ease-out both;
            }

            .dropdown-menu li:nth-child(1) { animation-delay: 0.05s; }
            .dropdown-menu li:nth-child(2) { animation-delay: 0.1s; }
            .dropdown-menu li:nth-child(3) { animation-delay: 0.15s; }

            @keyframes slideInDropdown {
                from {
                    opacity: 0;
                    transform: translateX(-15px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            .dropdown-menu li:hover {
                background: rgba(255, 193, 7, 0.1);
                transform: translateX(10px);
                border-radius: 8px;
            }

            .dropdown-menu a {
                display: flex;
                padding: 14px 22px;
                color: var(--light-bg);
                text-decoration: none;
                font-size: 13px;
                font-weight: 400;
                letter-spacing: 0.5px;
                text-transform: none;
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-family: 'Poppins', sans-serif;
                align-items: center;
                gap: 12px;
            }

            .dropdown-menu i {
                width: 20px;
                color: var(--accent-amber);
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                text-align: center;
                font-size: 16px;
            }

            .dropdown-menu a:hover {
                color: var(--accent-orange);
                padding-left: 28px;
                font-weight: 500;
            }

            .dropdown-menu a:hover i {
                color: var(--accent-orange);
                transform: scale(1.25) rotate(15deg);
                filter: drop-shadow(0 0 8px rgba(255, 143, 0, 0.4));
            }

            .dropdown-menu a::before {
                display: none;
            }

            /* Main Content */
            main {
                margin-top: 80px;
            }

            section {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 60px 40px;
                position: relative;
                overflow: hidden;
                transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background:
                    radial-gradient(circle at 0% 0%, rgba(255, 193, 7, 0.08) 0%, transparent 50%),
                    radial-gradient(circle at 100% 100%, rgba(255, 143, 0, 0.06) 0%, transparent 50%);
                pointer-events: none;
                transition: all 0.8s ease;
                animation: backgroundPulse 8s ease-in-out infinite;
            }

            @keyframes backgroundPulse {
                0%, 100% { opacity: 0.5; }
                50% { opacity: 1; }
            }

            section:nth-child(odd) {
                background: linear-gradient(135deg, #0B2D4A 0%, #08263E 50%, #051621 100%);
            }

            section:nth-child(even) {
                background: linear-gradient(135deg, #08263E 0%, #051621 50%, #0B2D4A 100%);
                border-top: 2px solid rgba(255, 193, 7, 0.15);
            }

            .section-content {
                max-width: 1200px;
                width: 100%;
                z-index: 1;
                animation: fadeInUp 0.8s ease-out;
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(40px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .section-title {
                font-size: 48px;
                font-weight: 700;
                margin-bottom: 30px;
                background: var(--gradient-2);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                letter-spacing: 2px;
                position: relative;
                display: inline-block;
                font-family: 'Playfair Display', serif;
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                animation: titleGlow 4s ease-in-out infinite;
            }

            @keyframes titleGlow {
                0%, 100% { text-shadow: 0 0 0 rgba(255, 193, 7, 0); }
                50% { text-shadow: 0 0 20px rgba(255, 193, 7, 0.3); }
            }

            .section-content:hover .section-title {
                letter-spacing: 4px;
                transform: translateX(8px);
            }

            .section-title::after {
                content: '';
                position: absolute;
                bottom: -15px;
                left: 0;
                height: 4px;
                width: 100px;
                background: var(--gradient-2);
                border-radius: 3px;
                animation: expandWidth 1s cubic-bezier(0.34, 1.56, 0.64, 1);
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                box-shadow: 0 0 15px rgba(255, 193, 7, 0.3);
            }

            .section-content:hover .section-title::after {
                width: 150px;
                box-shadow: 0 0 25px rgba(255, 143, 0, 0.4);
            }

            @keyframes expandWidth {
                from { width: 0; }
                to { width: 100px; }
            }

            .section-description {
                font-size: 18px;
                line-height: 1.8;
                margin-bottom: 40px;
                color: rgba(244, 248, 252, 0.85);
                max-width: 700px;
                animation: fadeInUp 0.8s ease-out 0.2s both;
                font-weight: 300;
                letter-spacing: 0.5px;
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            .section-description:hover {
                color: var(--light-bg);
                letter-spacing: 0.8px;
                transform: translateY(-3px);
            }

            .cta-button {
                display: inline-block;
                padding: 16px 40px;
                background: var(--gradient-2);
                color: var(--primary-dark);
                text-decoration: none;
                border-radius: 50px;
                font-weight: 600;
                letter-spacing: 1px;
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                border: 2px solid transparent;
                position: relative;
                overflow: hidden;
                animation: fadeInUp 0.8s ease-out 0.4s both, buttonGlow 3s ease-in-out infinite;
                font-family: 'Poppins', sans-serif;
                box-shadow: 0 8px 25px rgba(255, 193, 7, 0.2);
            }

            @keyframes buttonGlow {
                0%, 100% { box-shadow: 0 8px 25px rgba(255, 193, 7, 0.2); }
                50% { box-shadow: 0 12px 35px rgba(255, 193, 7, 0.35); }
            }

            .cta-button::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: var(--accent-orange);
                z-index: -1;
                transition: left 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            .cta-button:hover {
                transform: translateY(-6px);
                box-shadow: 0 15px 45px rgba(255, 193, 7, 0.4);
                letter-spacing: 2px;
            }

            .cta-button:hover::before {
                left: 0;
            }

            /* Cards Grid */
            .features-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 30px;
                margin-top: 60px;
            }

            .feature-card {
                background: rgba(255, 255, 255, 0.04);
                backdrop-filter: blur(12px);
                border: 2px solid rgba(255, 193, 7, 0.15);
                border-radius: 24px;
                padding: 40px;
                transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
                position: relative;
                overflow: hidden;
                animation: fadeInUp 0.8s ease-out;
                animation-fill-mode: both;
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            }

            .feature-card:nth-child(1) { animation-delay: 0.2s; }
            .feature-card:nth-child(2) { animation-delay: 0.35s; }
            .feature-card:nth-child(3) { animation-delay: 0.5s; }

            .feature-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.15), transparent);
                transition: left 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
                z-index: 1;
            }

            .feature-card::after {
                content: '';
                position: absolute;
                top: -50%;
                right: -50%;
                width: 100%;
                height: 100%;
                background: radial-gradient(circle, rgba(255, 193, 7, 0.1) 0%, transparent 70%);
                opacity: 0;
                transition: all 0.6s ease;
            }

            .feature-card:hover::before {
                left: 100%;
            }

            .feature-card:hover::after {
                opacity: 1;
                top: -20%;
                right: -20%;
            }

            .feature-card:hover {
                transform: translateY(-16px) scale(1.03);
                border-color: var(--accent-amber);
                box-shadow: 0 25px 60px rgba(255, 193, 7, 0.18);
                background: rgba(255, 193, 7, 0.06);
            }

            .feature-icon {
                font-size: 48px;
                margin-bottom: 20px;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                display: inline-block;
                color: var(--accent-amber);
            }

            .feature-icon i {
                color: var(--accent-amber);
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            .feature-card:hover .feature-icon {
                transform: scale(1.3) rotate(15deg);
                color: var(--accent-orange);
                animation: bounce 0.6s ease;
            }

            .feature-card:hover .feature-icon i {
                color: var(--accent-orange);
            }

            @keyframes bounce {
                0%, 100% { transform: scale(1.3) rotate(15deg); }
                50% { transform: scale(1.4) rotate(-10deg); }
            }

            .feature-card h3 {
                font-size: 24px;
                margin-bottom: 15px;
                color: var(--accent-amber);
                letter-spacing: 1px;
                font-family: 'Playfair Display', serif;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-weight: 700;
                position: relative;
                z-index: 2;
            }

            .feature-card:hover h3 {
                color: var(--light-bg);
                letter-spacing: 1.5px;
                transform: translateX(8px);
            }

            .feature-card p {
                font-size: 16px;
                line-height: 1.7;
                color: rgba(244, 248, 252, 0.8);
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-weight: 300;
                position: relative;
                z-index: 2;
            }

            .feature-card:hover p {
                color: var(--light-bg);
                line-height: 1.8;
            }

            /* Footer */
            footer {
                background: linear-gradient(135deg, #08263E 0%, #051621 100%);
                border-top: 2px solid var(--accent-amber);
                padding: 40px;
                text-align: center;
                animation: slideUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                box-shadow: 0 -8px 32px rgba(0, 0, 0, 0.3);
            }

            footer:hover {
                box-shadow: 0 -12px 48px rgba(255, 193, 7, 0.15);
            }

            @keyframes slideUp {
                from {
                    transform: translateY(100%);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            footer p {
                color: rgba(244, 248, 252, 0.75);
                letter-spacing: 1px;
                font-weight: 300;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-family: 'Poppins', sans-serif;
            }

            footer p:hover {
                color: var(--light-bg);
                letter-spacing: 1.5px;
            }

            footer .gradient-text {
                background: var(--gradient-2);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                font-family: 'Playfair Display', serif;
                font-weight: 700;
                animation: textGlow 3s ease-in-out infinite;
            }

            @keyframes textGlow {
                0%, 100% { filter: drop-shadow(0 0 5px rgba(255, 193, 7, 0.2)); }
                50% { filter: drop-shadow(0 0 15px rgba(255, 193, 7, 0.4)); }
            }

            /* Responsive */
            @media (max-width: 768px) {
                .nav-container {
                    padding: 0 15px;
                    height: 70px;
                }

                .nav-logo {
                    font-size: 18px;
                    letter-spacing: 1.5px;
                }

                .logo-image {
                    height: 40px;
                }

                .nav-links {
                    gap: 12px;
                    font-size: 11px;
                }

                .nav-links a {
                    font-size: 11px;
                    gap: 3px;
                }

                .nav-links i {
                    font-size: 12px;
                }

                .profile-button {
                    width: 36px;
                    height: 36px;
                    font-size: 14px;
                }

                .section-title {
                    font-size: 32px;
                }

                .section-description {
                    font-size: 16px;
                }

                section {
                    padding: 40px 20px;
                    min-height: auto;
                    padding-top: 120px;
                }

                .dropdown-menu {
                    position: static;
                    opacity: 0;
                    height: 0;
                    overflow: hidden;
                    transition: all 0.3s ease;
                }

                .nav-item:hover .dropdown-menu {
                    opacity: 1;
                }
            }

            /* Floating animation */
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }

            .floating {
                animation: float 3s ease-in-out infinite;
            }

            /* Additional hover effects */
            a {
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            /* Smooth text transitions */
            span {
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            /* Pulse animation for glowing effects */
            @keyframes pulse {
                0%, 100% { opacity: 1; }
                50% { opacity: 0.8; }
            }

            /* Shimmer animation */
            @keyframes shimmer {
                0% { background-position: -1000px 0; }
                100% { background-position: 1000px 0; }
            }

            /* Enhanced scroll animations */
            @keyframes slideInFromLeft {
                from {
                    opacity: 0;
                    transform: translateX(-50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes slideInFromRight {
                from {
                    opacity: 0;
                    transform: translateX(50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes scaleIn {
                from {
                    opacity: 0;
                    transform: scale(0.95);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            /* Smooth backdrop filter transitions */
            @supports (backdrop-filter: blur(10px)) {
                nav, .dropdown-menu {
                    backdrop-filter: blur(20px);
                }
            }

            /* Enhanced mobile responsiveness with animation support */
            @media (prefers-reduced-motion: reduce) {
                * {
                    animation-duration: 0.01ms !important;
                    animation-iteration-count: 1 !important;
                    transition-duration: 0.01ms !important;
                }
            }

            /* Secondary button styling */
            a[style*=\"border: 2px solid var(--accent-amber)\"] {
                background: transparent;
                box-shadow: inset 0 0 0 1px rgba(255, 193, 7, 0.3);
            }

            a[style*=\"border: 2px solid var(--accent-amber)\"]:hover {
                background: rgba(255, 193, 7, 0.08);
                transform: translateY(-4px);
                box-shadow: inset 0 0 0 2px var(--accent-amber), 0 8px 25px rgba(255, 193, 7, 0.25);
                letter-spacing: 1.5px;
            }

            /* Profile Button */
            .profile-button {
                width: 38px;
                height: 38px;
                background: var(--gradient-2);
                border: 2px solid var(--accent-amber);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                position: relative;
                font-size: 16px;
                color: var(--primary-dark);
                box-shadow: 0 4px 15px rgba(255, 193, 7, 0.2);
                flex-shrink: 0;
            }

            .profile-button:hover {
                transform: scale(1.15);
                box-shadow: 0 8px 30px rgba(255, 193, 7, 0.4);
            }

            .profile-button::after {
                content: '';
                position: absolute;
                inset: -3px;
                background: conic-gradient(from 0deg, var(--accent-amber), var(--accent-orange), var(--accent-amber));
                border-radius: 50%;
                z-index: -1;
                opacity: 0;
                transition: opacity 0.4s ease;
                animation: profilePulse 3s ease-in-out infinite;
            }

            .profile-button:hover::after {
                opacity: 0.1;
            }

            @keyframes profilePulse {
                0%, 100% { transform: scale(1); }
                50% { transform: scale(1.05); }
            }

            /* Profile Dropdown */
            .profile-menu {
                position: absolute;
                top: 100%;
                right: 0;
                background: rgba(8, 38, 62, 0.95);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 193, 7, 0.3);
                border-radius: 16px;
                min-width: 260px;
                list-style: none;
                padding: 12px 0;
                margin-top: 10px;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-20px);
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                box-shadow: 0 20px 50px rgba(255, 193, 7, 0.12);
            }

            .profile-wrapper:hover .profile-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
                box-shadow: 0 25px 60px rgba(255, 193, 7, 0.15);
            }

            .profile-menu li {
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                animation: slideInDropdown 0.4s ease-out both;
            }

            .profile-menu li:nth-child(1) { animation-delay: 0.05s; }
            .profile-menu li:nth-child(2) { animation-delay: 0.1s; }
            .profile-menu li:nth-child(3) { animation-delay: 0.15s; }
            .profile-menu li:nth-child(4) { animation-delay: 0.2s; }
            .profile-menu li:nth-child(5) { animation-delay: 0.25s; }

            .profile-menu li:hover {
                background: rgba(255, 193, 7, 0.1);
                transform: translateX(10px);
                border-radius: 8px;
            }

            .profile-menu a {
                display: flex;
                padding: 14px 22px;
                color: var(--light-bg);
                text-decoration: none;
                font-size: 13px;
                font-weight: 400;
                letter-spacing: 0.5px;
                text-transform: none;
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-family: 'Poppins', sans-serif;
                align-items: center;
                gap: 12px;
            }

            .profile-menu i {
                width: 18px;
                color: var(--accent-amber);
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                text-align: center;
                font-size: 14px;
            }

            .profile-menu a:hover {
                color: var(--accent-orange);
                padding-left: 28px;
                font-weight: 500;
            }

            .profile-menu a:hover i {
                color: var(--accent-orange);
                transform: scale(1.3) rotate(15deg);
                filter: drop-shadow(0 0 8px rgba(255, 143, 0, 0.4));
            }

            .profile-wrapper {
                position: relative;
            }

            /* Profile header in dropdown */
            .profile-header {
                padding: 16px 22px;
                border-bottom: 1px solid rgba(255, 193, 7, 0.1);
                display: flex;
                align-items: center;
                gap: 12px;
                animation: slideInDropdown 0.4s ease-out both;
            }

            .profile-avatar {
                width: 36px;
                height: 36px;
                background: var(--gradient-2);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                color: var(--primary-dark);
                font-size: 14px;
            }

            .profile-info {
                flex: 1;
            }

            .profile-info p {
                margin: 0;
                color: var(--light-bg);
                font-size: 13px;
                font-weight: 500;
                letter-spacing: 0.5px;
            }

            .profile-info small {
                color: rgba(244, 248, 252, 0.6);
                font-size: 11px;
                display: block;
            }
/* ===== WRAPPER ===== */
.notif-wrapper {
    position: relative;
}

/* ===== BOUTON ===== */
.notif-btn {
    background: none;
    border: none;
    color: #ffb400;
    font-size: 20px;
    cursor: pointer;
    position: relative;
}

/* ===== BADGE ===== */
.notif-badge {
    position: absolute;
    top: -5px;
    right: -8px;
    background: red;
    color: white;
    font-size: 10px;
    border-radius: 50%;
    padding: 3px 6px;
}

/* ===== DROPDOWN ===== */
.notif-dropdown {
    position: absolute;
    top: 45px;
    right: 0;
    width: 320px;

    background: #0d2a3a;
    border-radius: 12px;
    padding: 15px;

    display: none;
    flex-direction: column; /* 🔥 important */

    box-shadow: 0 10px 30px rgba(0,0,0,0.4);

    max-height: 320px;
    overflow-y: auto;
    overflow-x: hidden;

    box-sizing: border-box;
    z-index: 9999;

    /* 🔥 évite héritage navbar */
    white-space: normal !important;
}

/* ===== TITRE ===== */
.notif-dropdown h4 {
    color: #ffb400;
    margin: 0 0 12px 0;
    font-size: 16px;
}

/* ===== ITEM ===== */
.notif-item {
    padding: 10px 12px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    color: white;

    cursor: pointer;
    transition: background 0.2s ease;

    display: block;
    width: 100%;
    box-sizing: border-box;

    /* 🔥 FIX PRINCIPAL */
    white-space: normal !important;
}

/* dernier item */
.notif-item:last-child {
    border-bottom: none;
}

/* hover */
.notif-item:hover {
    background: rgba(255,255,255,0.05);
}

/* ===== TEXTE ===== */
.notif-item p {
    margin: 0;

    display: block;
    width: 100%;

    font-size: 14px;
    line-height: 1.5;

    /* 🔥 wrap parfait */
    white-space: normal !important;
    word-break: break-word;
    overflow-wrap: anywhere;
}

/* ===== EMPTY ===== */
.notif-empty {
    margin: 0;
    color: white;
    font-size: 14px;
    opacity: 0.8;
}

/* ===== FIX NAVBAR (TRÈS IMPORTANT) ===== */
.nav-item.notif-wrapper {
    white-space: normal !important;
}
        </style>

        ";
        // line 1202
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 1204
        yield "
        ";
        // line 1205
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 1208
        yield "
        ";
        // line 1209
        $context["frankenphpHotReload"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1209, $this->source); })()), "request", [], "any", false, false, false, 1209), "server", [], "any", false, false, false, 1209), "get", ["FRANKENPHP_HOT_RELOAD"], "method", false, false, false, 1209);
        // line 1210
        yield "        ";
        if ((($tmp = (isset($context["frankenphpHotReload"]) || array_key_exists("frankenphpHotReload", $context) ? $context["frankenphpHotReload"] : (function () { throw new RuntimeError('Variable "frankenphpHotReload" does not exist.', 1210, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1211
            yield "        <meta name=\"frankenphp-hot-reload:url\" content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["frankenphpHotReload"]) || array_key_exists("frankenphpHotReload", $context) ? $context["frankenphpHotReload"] : (function () { throw new RuntimeError('Variable "frankenphpHotReload" does not exist.', 1211, $this->source); })()), "html", null, true);
            yield "\">
        <script src=\"https://cdn.jsdelivr.net/npm/idiomorph\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/frankenphp-hot-reload/+esm\" type=\"module\"></script>
        ";
        }
        // line 1215
        yield "    </head>
    <body>
        <!-- Navigation -->
        <nav>
            <div class=\"nav-container\">
                <div class=\"nav-logo\">
                    <img src=\"";
        // line 1221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo ASAFAR\" class=\"logo-image\">
                    <span class=\"logo-text\">ASAFAR</span>
                </div>
                <ul class=\"nav-links\">
                    <li class=\"nav-item\"><a href=\"";
        // line 1225
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "#accueil\"><i class=\"fas fa-home\"></i> Accueil</a></li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 1227
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transports");
        yield "\" data-turbo=\"false\" class=\"dropdown-toggle\"><i class=\"fas fa-plane\"></i> Transports</a>
                        <ul class=\"dropdown-menu\">
                            <li><a data-turbo=\"false\" href=\"";
        // line 1229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transports");
        yield "#transports-map\"><i class=\"fas fa-plane\"></i> Vols Premium</a></li>
                            <li><a data-turbo=\"false\" href=\"";
        // line 1230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transports");
        yield "#transports-list\"><i class=\"fas fa-ship\"></i> Croisieres</a></li>
                            <li><a data-turbo=\"false\" href=\"";
        // line 1231
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transports");
        yield "#transports-list\"><i class=\"fas fa-car\"></i> Transferts VIP</a></li>
                        </ul>
                    </li>


                    <li class=\"nav-item\">
                        <a href=\"";
        // line 1237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        yield "\" class=\"dropdown-toggle\"><i class=\"fas fa-hotel\"></i> Hebergements</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 1239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        yield "#hebergements\"><i class=\"fas fa-hotel\"></i> Hotels 5*</a></li>
                            <li><a href=\"";
        // line 1240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        yield "#hebergements\"><i class=\"fas fa-umbrella-beach\"></i> Resorts Exclusifs</a></li>
                            <li><a href=\"";
        // line 1241
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergements");
        yield "#hebergements\"><i class=\"fas fa-mountain\"></i> Chalets Luxe</a></li>
                        </ul>
                    </li>
<li class=\"nav-item\">
                        <a href=\"";
        // line 1245
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loisirs");
        yield "\" class=\"dropdown-toggle\"><i class=\"fas fa-compass\"></i> Loisirs</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 1247
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loisirs");
        yield "\"><i class=\"fas fa-theater-masks\"></i> Culturel</a></li>
                            <li><a href=\"";
        // line 1248
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loisirs");
        yield "\"><i class=\"fas fa-water\"></i> Aventure</a></li>
                            <li><a href=\"";
        // line 1249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loisirs");
        yield "\"><i class=\"fas fa-utensils\"></i> Gastronomie</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\"><a href=\"";
        // line 1252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_posts");
        yield "\"><i class=\"fas fa-newspaper\"></i> Posts</a></li>

<li class=\"nav-item\"><a href=\"#\" id=\"openQuiz\"><i class=\"fas fa-brain\"></i> Quizz</a></li>

                    <li class=\"nav-item\">
    <a href=\"";
        // line 1257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        yield "\" style=\"position:relative;\">
        <i class=\"fas fa-comment-dots\"></i>
        Réclamation
        ";
        // line 1261
        yield "    </a>
</li>
<li class=\"nav-item notif-wrapper\">
    <button type=\"button\" class=\"notif-btn\" id=\"notifBtn\">
        <i class=\"fas fa-bell\"></i>

        ";
        // line 1267
        if ((array_key_exists("notifications", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 1267, $this->source); })())) > 0))) {
            // line 1268
            yield "            <span class=\"notif-badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 1268, $this->source); })())), "html", null, true);
            yield "</span>
        ";
        }
        // line 1270
        yield "    </button>

    <div id=\"notifDropdown\" class=\"notif-dropdown\" style=\"display:none;\">
        <h4>🔔 Notifications</h4>

        ";
        // line 1275
        if (( !array_key_exists("notifications", $context) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 1275, $this->source); })())) == 0))) {
            // line 1276
            yield "            <p>Aucune notification</p>
        ";
        } else {
            // line 1278
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 1278, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 1279
                yield "<div onclick=\"window.location.href='/reclamation/mes-reclamations-page#rec-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "reclamationId", [], "any", false, false, false, 1279), "html", null, true);
                yield "'\">
    ";
                // line 1280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "message", [], "any", false, false, false, 1280), "html", null, true);
                yield "
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['n'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1283
            yield "        ";
        }
        // line 1284
        yield "    </div>
</li>

                    <li class=\"nav-item profile-wrapper\">
                        <button class=\"profile-button\" title=\"Profil Utilisateur\">
                            <i class=\"fas fa-user\"></i>
                        </button>
                        <ul class=\"profile-menu\">
                            <li class=\"profile-header\">
<li class=\"profile-header\">
    ";
        // line 1294
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1294, $this->source); })()), "user", [], "any", false, false, false, 1294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1295
            yield "        <div class=\"profile-avatar\">
            ";
            // line 1296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1296, $this->source); })()), "user", [], "any", false, false, false, 1296), "nom", [], "any", false, false, false, 1296))), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1296, $this->source); })()), "user", [], "any", false, false, false, 1296), "prenom", [], "any", false, false, false, 1296))), "html", null, true);
            yield "
        </div>
        <div class=\"profile-info\">
            <p>";
            // line 1299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1299, $this->source); })()), "user", [], "any", false, false, false, 1299), "nom", [], "any", false, false, false, 1299), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1299, $this->source); })()), "user", [], "any", false, false, false, 1299), "prenom", [], "any", false, false, false, 1299), "html", null, true);
            yield "</p>
            <small>";
            // line 1300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1300, $this->source); })()), "user", [], "any", false, false, false, 1300), "email", [], "any", false, false, false, 1300), "html", null, true);
            yield "</small>
        </div>
    ";
        } else {
            // line 1303
            yield "        <div class=\"profile-avatar\">G</div>
        <div class=\"profile-info\">
            <p>Guest</p>
            <small>Non connecté</small>
        </div>
    ";
        }
        // line 1309
        yield "</li>

";
        // line 1311
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1311, $this->source); })()), "user", [], "any", false, false, false, 1311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1312
            yield "
    <li>
        <a href=\"";
            // line 1314
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
            yield "\">
            <i class=\"fas fa-user-circle\"></i> Mon Profil
        </a>
    </li> 

    <li>
        <a href=\"";
            // line 1320
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_mes_page");
            yield "\">
            <i class=\"fas fa-history\"></i> Mes Réclamations
        </a>
    </li>

     <li>
        <a href=\"";
            // line 1326
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_reservations_hebergements");
            yield "\">
            <i class=\"fas fa-hotel\"></i> Mes Hébergements
        </a>
    </li>
    <li>
        <a href=\"";
            // line 1331
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_reservations");
            yield "\">
            <i class=\"fas fa-compass\"></i> Mes Loisirs
        </a>
    </li>
    <li>
        <a href=\"";
            // line 1336
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_reservations_transports");
            yield "\">
            <i class=\"fas fa-ticket-alt\"></i> Mes Trajets
        </a>
    </li>

   <li>
    <a href=\"";
            // line 1342
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mes_favoris");
            yield "\">
        <i class=\"fas fa-heart\"></i> Mes Favoris
    </a>
</li>

    <li>
        <a href=\"";
            // line 1348
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
        </a>
    </li>

";
        } else {
            // line 1354
            yield "
    <li>
        <a href=\"";
            // line 1356
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
            <i class=\"fas fa-sign-in-alt\"></i> Connexion
        </a>
    </li>

    <li>
        <a href=\"";
            // line 1362
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
            <i class=\"fas fa-user-plus\"></i> Inscription
        </a>
    </li>

";
        }
        // line 1368
        yield "                    </li>
                </ul>
            </div>
        </nav>

        <main>
            ";
        // line 1374
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 1375
        yield "        </main>
";
        // line 1376
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1376, $this->source); })()), "user", [], "any", false, false, false, 1376)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1377
            yield "<div id=\"quizModal\" class=\"modal\">
    <div class=\"modal-content quiz-box\">
        <span class=\"closeQuiz\">&times;</span>

        <h2>🧠 Quiz Voyage</h2>

        ";
            // line 1383
            if ((array_key_exists("questions", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 1383, $this->source); })())))) {
                // line 1384
                yield "
        <form id=\"quizForm\">

            ";
                // line 1387
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 1387, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                    // line 1388
                    yield "                <div class=\"quiz-question\"> ";
                    // line 1389
                    yield "
                    <p><strong>";
                    // line 1390
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "question", [], "any", false, false, false, 1390), "html", null, true);
                    yield "</strong></p>

                    ";
                    // line 1392
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "choices", [], "any", false, false, false, 1392));
                    foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                        // line 1393
                        yield "                        <label class=\"quiz-choice\"> ";
                        // line 1394
                        yield "                            <input 
                                type=\"radio\" 
name=\"q";
                        // line 1396
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 1396), "html", null, true);
                        yield "\"
                                value=\"";
                        // line 1397
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice"], "html", null, true);
                        yield "\"
                                data-correct=\"";
                        // line 1398
                        yield ((($context["choice"] == CoreExtension::getAttribute($this->env, $this->source, $context["q"], "answer", [], "any", false, false, false, 1398))) ? ("true") : ("false"));
                        yield "\"
                            >
                            ";
                        // line 1400
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice"], "html", null, true);
                        yield "
                        </label><br>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1403
                    yield "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['q'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1406
                yield "
            ";
                // line 1408
                yield "            <button type=\"button\" id=\"validateQuizBtn\" onclick=\"submitQuiz()\">
                Valider
            </button>

        </form>

        ";
                // line 1415
                yield "        <p id=\"scoreDisplay\">🎉 Score: 0 | +0 points</p>

        ";
            } else {
                // line 1418
                yield "            <p>Aucune question disponible 😕</p>
        ";
            }
            // line 1420
            yield "
    </div>
</div>
";
        }
        // line 1424
        yield "
        <!-- Footer -->
        <footer>
            <p>© 2026 <span class=\"gradient-text\">ASAFAR</span> - Explorez le Monde différemment</p>
            <p style=\"margin-top: 10px; font-size: 12px;\">Créé avec passion pour les voyageurs authentiques</p>
        </footer>
<script>
function submitQuiz() {
    const form = document.getElementById(\"quizForm\");
    const scoreDisplay = document.getElementById(\"scoreDisplay\");
    const button = document.getElementById(\"validateQuizBtn\");

    if (!form || !scoreDisplay || !button) return;

    const questions = document.querySelectorAll(\".quiz-question\");
    let score = 0;
    let allAnswered = true;

    // reset styles
    document.querySelectorAll(\".quiz-choice\").forEach(label => {
        label.style.color = \"\";
        label.style.fontWeight = \"\";
    });

    questions.forEach(questionBlock => {
        const checked = questionBlock.querySelector('input[type=\"radio\"]:checked');

        if (!checked) {
            allAnswered = false;
            return;
        }

        const answers = questionBlock.querySelectorAll('input[type=\"radio\"]');

        answers.forEach(input => {
            const label = input.parentElement;

            if (input.dataset.correct === \"true\") {
                label.style.color = \"green\";
                label.style.fontWeight = \"600\";
            }

            if (input.checked && input.dataset.correct !== \"true\") {
                label.style.color = \"red\";
                label.style.fontWeight = \"600\";
            }
        });

        if (checked.dataset.correct === \"true\") {
            score++;
        }
    });

    if (!allAnswered) {
        scoreDisplay.textContent = \"❌ Répondez à toutes les questions.\";
        return;
    }

    scoreDisplay.textContent = `🎉 Score: \${score} | +\${score * 10} points`;

    const formData = new FormData(form);
    formData.append(\"score\", score);

    button.disabled = true;
    button.textContent = \"Validation...\";

    fetch('/quiz/submit', {
        method: 'POST',
        body: formData
    })
    .then(res => {
        if (!res.ok) {
            throw new Error(\"Erreur serveur\");
        }
        return res.json();
    })
    .then(data => {
        if (data.error) {
            scoreDisplay.textContent = \"❌ \" + data.error;
            return;
        }

        scoreDisplay.textContent = `🎉 Score: \${data.score} | +\${data.points} points`;
    })
    .catch(() => {
        scoreDisplay.textContent = \"❌ Une erreur est survenue.\";
    })
    .finally(() => {
        button.disabled = false;
        button.textContent = \"Valider\";
    });
}
document.addEventListener(\"DOMContentLoaded\", function () {

    const modal = document.getElementById(\"quizModal\");
    const btn = document.getElementById(\"openQuiz\"); // ✅ correct
    const close = document.querySelector(\".closeQuiz\");

    if (!modal || !btn || !close) return;

    // ouvrir
    btn.addEventListener(\"click\", function (e) {
        e.preventDefault();
        modal.style.display = \"block\";
    });

    // fermer bouton X
    close.addEventListener(\"click\", function () {
        modal.style.display = \"none\";
    });

    // fermer clic dehors
    window.addEventListener(\"click\", function (e) {
        if (e.target === modal) {
            modal.style.display = \"none\";
        }
    });

});

            // Smooth scroll on nav links
            document.querySelectorAll('nav a, a[href^=\"#\"]').forEach(link => {
                link.addEventListener('click', (e) => {
                    const href = link.getAttribute('href');
                    if (href && href.startsWith('#')) {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({ behavior: 'smooth' });
                        }
                    }
                });
            });

            // Profile button interactivity
            const profileButton = document.querySelector('.profile-button');
            const profileMenu = document.querySelector('.profile-menu');

            if (profileButton && profileMenu) {
                profileButton.addEventListener('click', (e) => {
                    e.stopPropagation();
                    profileMenu.style.opacity = profileMenu.style.opacity === '1' ? '0' : '1';
                    profileMenu.style.visibility = profileMenu.style.visibility === 'visible' ? 'hidden' : 'visible';
                });

                // Close menu when clicking outside
                document.addEventListener('click', (e) => {
                    if (!e.target.closest('.profile-wrapper')) {
                        profileMenu.style.opacity = '0';
                        profileMenu.style.visibility = 'hidden';
                    }
                });

                // Close menu when clicking on menu items
                profileMenu.querySelectorAll('a').forEach(item => {
                    item.addEventListener('click', () => {
                        profileMenu.style.opacity = '0';
                        profileMenu.style.visibility = 'hidden';
                    });
                });
            }

            // Add scroll animation to elements
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.feature-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                observer.observe(card);
            });
document.getElementById(\"notifBtn\").addEventListener(\"click\", function(e) {
    e.stopPropagation();

    const d = document.getElementById(\"notifDropdown\");

    // toggle affichage
    const isOpen = d.style.display === \"block\";
    d.style.display = isOpen ? \"none\" : \"block\";

    // 👉 SI ON OUVRE → marquer comme lues
    if (!isOpen) {
        fetch('/notifications/read', {
            method: 'POST'
        })
        .then(() => {
            const badge = document.getElementById(\"notifCount\");
            if (badge) {
badge.textContent = \"0\";
badge.style.display = \"none\";
            }
        })
        .catch(() => console.error(\"Erreur notif\"));
    }
});

document.addEventListener(\"click\", function(e) {
    if (!e.target.closest(\".notif-wrapper\")) {
        document.getElementById(\"notifDropdown\").style.display = \"none\";
    }
});

        </script>
    </body>
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

        yield "ASAFAR - Explorez le Monde Différemment";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1202
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

        // line 1203
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1205
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

        // line 1206
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 1207
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1206
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1374
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  1998 => 1374,  1975 => 1206,  1964 => 1207,  1961 => 1206,  1948 => 1205,  1937 => 1203,  1924 => 1202,  1901 => 6,  1674 => 1424,  1668 => 1420,  1664 => 1418,  1659 => 1415,  1651 => 1408,  1648 => 1406,  1640 => 1403,  1631 => 1400,  1626 => 1398,  1622 => 1397,  1618 => 1396,  1614 => 1394,  1612 => 1393,  1608 => 1392,  1603 => 1390,  1600 => 1389,  1598 => 1388,  1594 => 1387,  1589 => 1384,  1587 => 1383,  1579 => 1377,  1577 => 1376,  1574 => 1375,  1572 => 1374,  1564 => 1368,  1555 => 1362,  1546 => 1356,  1542 => 1354,  1533 => 1348,  1524 => 1342,  1515 => 1336,  1507 => 1331,  1499 => 1326,  1490 => 1320,  1481 => 1314,  1477 => 1312,  1475 => 1311,  1471 => 1309,  1463 => 1303,  1457 => 1300,  1451 => 1299,  1444 => 1296,  1441 => 1295,  1439 => 1294,  1427 => 1284,  1424 => 1283,  1415 => 1280,  1410 => 1279,  1406 => 1278,  1402 => 1276,  1400 => 1275,  1393 => 1270,  1387 => 1268,  1385 => 1267,  1377 => 1261,  1371 => 1257,  1363 => 1252,  1357 => 1249,  1353 => 1248,  1349 => 1247,  1344 => 1245,  1337 => 1241,  1333 => 1240,  1329 => 1239,  1324 => 1237,  1315 => 1231,  1311 => 1230,  1307 => 1229,  1302 => 1227,  1297 => 1225,  1290 => 1221,  1282 => 1215,  1274 => 1211,  1271 => 1210,  1269 => 1209,  1266 => 1208,  1264 => 1205,  1261 => 1204,  1259 => 1202,  60 => 6,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}ASAFAR - Explorez le Monde Différemment{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><circle cx=%2264%22 cy=%2264%22 r=%2264%22 fill=%22%230B2D4A%22/><circle cx=%2264%22 cy=%2264%22 r=%2260%22 fill=%22%2308263E%22/><text x=%2264%22 y=%2275%22 font-size=%2242%22 font-weight=%22bold%22 text-anchor=%22middle%22 fill=%22%23FFC107%22 font-family=%22Arial%22>A</text></svg>\">
<link href=\"https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap\" rel=\"stylesheet\">
        <!-- Google Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap\" rel=\"stylesheet\">

        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">

        <style>

        .modal {
    display: none; /* caché au début */
    position: fixed;
    z-index: 2000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;

    background: rgba(0,0,0,0.6); /* fond sombre */
}

.modal-content {
    background: #0B2D4A;
    margin: 8% auto;
    padding: 30px;
    border-radius: 20px;
    width: 600px;
    max-width: 90%;

    box-shadow: 0 20px 50px rgba(0,0,0,0.5);
}

.closeQuiz {
    float: right;
    font-size: 28px;
    cursor: pointer;
    color: #FFC107;
}
        .quiz-btn {
    position: relative;
    color: #fff;
    font-weight: 600;
}

.quiz-btn::after {
    content: \"🎁\";
    margin-left: 5px;
    animation: bounce 1.5s infinite;
}

@keyframes bounce {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            :root {
                --primary-dark: #0B2D4A;
                --primary-darker: #08263E;
                --accent-amber: #FFC107;
                --accent-orange: #FF8F00;
                --light-bg: #F4F8FC;
                --gradient-1: linear-gradient(135deg, #0B2D4A 0%, #08263E 100%);
                --gradient-2: linear-gradient(135deg, #FFC107 0%, #FF8F00 100%);
            }

            html {
                scroll-behavior: smooth;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(135deg, #0B2D4A 0%, #08263E 50%, #051621 100%);
                color: var(--light-bg);
                overflow-x: hidden;
                background-attachment: fixed;
                position: relative;
            }

            body::before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background:
                    radial-gradient(circle at 20% 50%, rgba(255, 193, 7, 0.03) 0%, transparent 50%),
                    radial-gradient(circle at 80% 80%, rgba(255, 143, 0, 0.02) 0%, transparent 50%);
                pointer-events: none;
                z-index: -1;
                animation: backgroundShift 15s ease-in-out infinite;
            }

            @keyframes backgroundShift {
                0%, 100% {
                    opacity: 1;
                }
                50% {
                    opacity: 1.2;
                }
            }

            /* Navigation */
            nav {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000;
                background: rgba(8, 38, 62, 0.85);
                backdrop-filter: blur(20px);
                border-bottom: 2px solid var(--accent-amber);
                box-shadow: 0 8px 32px rgba(255, 193, 7, 0.08);
                animation: slideDown 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            nav:hover {
                background: rgba(8, 38, 62, 0.95);
                box-shadow: 0 12px 48px rgba(255, 193, 7, 0.15);
            }

            @keyframes slideDown {
                from {
                    transform: translateY(-100%);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            .nav-container {
                max-width: 1400px;
                margin: 0 auto;
                padding: 0 30px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                height: 80px;
                gap: 20px;
                flex-wrap: nowrap;
            }

            .nav-logo {
                font-size: 20px;
                font-weight: 700;
                color: var(--light-bg);
                letter-spacing: 2px;
                display: flex;
                align-items: center;
                gap: 12px;
                animation: glowPulse 3.5s ease-in-out infinite, logoFloat 3s ease-in-out infinite;
                font-family: 'Playfair Display', serif;
                transition: all 0.3s ease;
                white-space: nowrap;
                flex-shrink: 0;
            }

            .nav-logo:hover {
                letter-spacing: 2.5px;
            }

            .logo-image {
                height: 45px;
                width: auto;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                filter: drop-shadow(0 4px 12px rgba(255, 193, 7, 0.3));
                border-radius: 8px;
                flex-shrink: 0;
            }

            .nav-logo:hover .logo-image {
                transform: scale(1.12) rotate(5deg);
                filter: drop-shadow(0 8px 25px rgba(255, 193, 7, 0.5));
            }

            .logo-text {
                transition: all 0.3s ease;
                letter-spacing: 2px;
                white-space: nowrap;
            }

            .nav-logo-icon {
                width: 36px;
                height: 36px;
                background: var(--gradient-2);
                border-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 18px;
                font-weight: bold;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                box-shadow: 0 4px 15px rgba(255, 193, 7, 0.2);
            }

            .nav-logo:hover .nav-logo-icon {
                transform: scale(1.15) rotate(8deg);
                box-shadow: 0 8px 30px rgba(255, 193, 7, 0.4);
            }

            @keyframes glowPulse {
                0%, 100% { filter: drop-shadow(0 0 8px rgba(255, 193, 7, 0.3)); }
                50% { filter: drop-shadow(0 0 20px rgba(255, 143, 0, 0.5)); }
            }

            @keyframes logoFloat {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-3px); }
            }

            .nav-links {
                display: flex;
                gap: 18px;
                list-style: none;
                flex-shrink: 1;
                align-items: center;
                justify-content: flex-end;
                flex: 1;
                min-width: 0;
            }

            .nav-item {
                position: relative;
                white-space: nowrap;
                flex-shrink: 0;
            }

            .nav-links a {
                color: var(--light-bg);
                text-decoration: none;
                position: relative;
                font-weight: 500;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-size: 12px;
                letter-spacing: 0.7px;
                text-transform: uppercase;
                display: flex;
                align-items: center;
                gap: 4px;
                padding: 6px 0;
            }

            .nav-links i {
                font-size: 13px;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                color: var(--accent-amber);
            }

            .nav-links a:hover i {
                color: var(--accent-orange);
                transform: scale(1.2) rotate(10deg);
                text-shadow: 0 0 12px rgba(255, 143, 0, 0.4);
            }

            .nav-links a::before {
                content: '';
                position: absolute;
                bottom: -5px;
                left: 0;
                width: 0;
                height: 3px;
                background: var(--gradient-2);
                transition: width 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                border-radius: 3px;
                box-shadow: 0 0 10px rgba(255, 193, 7, 0.3);
            }

            .nav-links a:hover::before {
                width: 100%;
                box-shadow: 0 0 15px rgba(255, 143, 0, 0.5);
            }

            .nav-links a:hover {
                transform: translateY(-3px);
                color: var(--accent-amber);
                letter-spacing: 1.5px;
                text-shadow: 0 0 10px rgba(255, 193, 7, 0.3);
            }

            /* Dropdown Menu */
            .dropdown-toggle::after {
                content: '▼';
                font-size: 10px;
                transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                display: inline-block;
                margin-left: 4px;
            }

            .nav-item:hover .dropdown-toggle::after {
                transform: rotate(180deg) scaleY(1.2);
            }

            .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                background: rgba(8, 38, 62, 0.95);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 193, 7, 0.3);
                border-radius: 16px;
                min-width: 240px;
                list-style: none;
                padding: 12px 0;
                margin-top: 10px;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-20px);
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                box-shadow: 0 20px 50px rgba(255, 193, 7, 0.12);
            }

            .nav-item:hover .dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
                box-shadow: 0 25px 60px rgba(255, 193, 7, 0.15);
            }

            .dropdown-menu li {
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                animation: slideInDropdown 0.4s ease-out both;
            }

            .dropdown-menu li:nth-child(1) { animation-delay: 0.05s; }
            .dropdown-menu li:nth-child(2) { animation-delay: 0.1s; }
            .dropdown-menu li:nth-child(3) { animation-delay: 0.15s; }

            @keyframes slideInDropdown {
                from {
                    opacity: 0;
                    transform: translateX(-15px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            .dropdown-menu li:hover {
                background: rgba(255, 193, 7, 0.1);
                transform: translateX(10px);
                border-radius: 8px;
            }

            .dropdown-menu a {
                display: flex;
                padding: 14px 22px;
                color: var(--light-bg);
                text-decoration: none;
                font-size: 13px;
                font-weight: 400;
                letter-spacing: 0.5px;
                text-transform: none;
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-family: 'Poppins', sans-serif;
                align-items: center;
                gap: 12px;
            }

            .dropdown-menu i {
                width: 20px;
                color: var(--accent-amber);
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                text-align: center;
                font-size: 16px;
            }

            .dropdown-menu a:hover {
                color: var(--accent-orange);
                padding-left: 28px;
                font-weight: 500;
            }

            .dropdown-menu a:hover i {
                color: var(--accent-orange);
                transform: scale(1.25) rotate(15deg);
                filter: drop-shadow(0 0 8px rgba(255, 143, 0, 0.4));
            }

            .dropdown-menu a::before {
                display: none;
            }

            /* Main Content */
            main {
                margin-top: 80px;
            }

            section {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 60px 40px;
                position: relative;
                overflow: hidden;
                transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background:
                    radial-gradient(circle at 0% 0%, rgba(255, 193, 7, 0.08) 0%, transparent 50%),
                    radial-gradient(circle at 100% 100%, rgba(255, 143, 0, 0.06) 0%, transparent 50%);
                pointer-events: none;
                transition: all 0.8s ease;
                animation: backgroundPulse 8s ease-in-out infinite;
            }

            @keyframes backgroundPulse {
                0%, 100% { opacity: 0.5; }
                50% { opacity: 1; }
            }

            section:nth-child(odd) {
                background: linear-gradient(135deg, #0B2D4A 0%, #08263E 50%, #051621 100%);
            }

            section:nth-child(even) {
                background: linear-gradient(135deg, #08263E 0%, #051621 50%, #0B2D4A 100%);
                border-top: 2px solid rgba(255, 193, 7, 0.15);
            }

            .section-content {
                max-width: 1200px;
                width: 100%;
                z-index: 1;
                animation: fadeInUp 0.8s ease-out;
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(40px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .section-title {
                font-size: 48px;
                font-weight: 700;
                margin-bottom: 30px;
                background: var(--gradient-2);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                letter-spacing: 2px;
                position: relative;
                display: inline-block;
                font-family: 'Playfair Display', serif;
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                animation: titleGlow 4s ease-in-out infinite;
            }

            @keyframes titleGlow {
                0%, 100% { text-shadow: 0 0 0 rgba(255, 193, 7, 0); }
                50% { text-shadow: 0 0 20px rgba(255, 193, 7, 0.3); }
            }

            .section-content:hover .section-title {
                letter-spacing: 4px;
                transform: translateX(8px);
            }

            .section-title::after {
                content: '';
                position: absolute;
                bottom: -15px;
                left: 0;
                height: 4px;
                width: 100px;
                background: var(--gradient-2);
                border-radius: 3px;
                animation: expandWidth 1s cubic-bezier(0.34, 1.56, 0.64, 1);
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                box-shadow: 0 0 15px rgba(255, 193, 7, 0.3);
            }

            .section-content:hover .section-title::after {
                width: 150px;
                box-shadow: 0 0 25px rgba(255, 143, 0, 0.4);
            }

            @keyframes expandWidth {
                from { width: 0; }
                to { width: 100px; }
            }

            .section-description {
                font-size: 18px;
                line-height: 1.8;
                margin-bottom: 40px;
                color: rgba(244, 248, 252, 0.85);
                max-width: 700px;
                animation: fadeInUp 0.8s ease-out 0.2s both;
                font-weight: 300;
                letter-spacing: 0.5px;
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            .section-description:hover {
                color: var(--light-bg);
                letter-spacing: 0.8px;
                transform: translateY(-3px);
            }

            .cta-button {
                display: inline-block;
                padding: 16px 40px;
                background: var(--gradient-2);
                color: var(--primary-dark);
                text-decoration: none;
                border-radius: 50px;
                font-weight: 600;
                letter-spacing: 1px;
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                border: 2px solid transparent;
                position: relative;
                overflow: hidden;
                animation: fadeInUp 0.8s ease-out 0.4s both, buttonGlow 3s ease-in-out infinite;
                font-family: 'Poppins', sans-serif;
                box-shadow: 0 8px 25px rgba(255, 193, 7, 0.2);
            }

            @keyframes buttonGlow {
                0%, 100% { box-shadow: 0 8px 25px rgba(255, 193, 7, 0.2); }
                50% { box-shadow: 0 12px 35px rgba(255, 193, 7, 0.35); }
            }

            .cta-button::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: var(--accent-orange);
                z-index: -1;
                transition: left 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            .cta-button:hover {
                transform: translateY(-6px);
                box-shadow: 0 15px 45px rgba(255, 193, 7, 0.4);
                letter-spacing: 2px;
            }

            .cta-button:hover::before {
                left: 0;
            }

            /* Cards Grid */
            .features-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 30px;
                margin-top: 60px;
            }

            .feature-card {
                background: rgba(255, 255, 255, 0.04);
                backdrop-filter: blur(12px);
                border: 2px solid rgba(255, 193, 7, 0.15);
                border-radius: 24px;
                padding: 40px;
                transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
                position: relative;
                overflow: hidden;
                animation: fadeInUp 0.8s ease-out;
                animation-fill-mode: both;
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            }

            .feature-card:nth-child(1) { animation-delay: 0.2s; }
            .feature-card:nth-child(2) { animation-delay: 0.35s; }
            .feature-card:nth-child(3) { animation-delay: 0.5s; }

            .feature-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.15), transparent);
                transition: left 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
                z-index: 1;
            }

            .feature-card::after {
                content: '';
                position: absolute;
                top: -50%;
                right: -50%;
                width: 100%;
                height: 100%;
                background: radial-gradient(circle, rgba(255, 193, 7, 0.1) 0%, transparent 70%);
                opacity: 0;
                transition: all 0.6s ease;
            }

            .feature-card:hover::before {
                left: 100%;
            }

            .feature-card:hover::after {
                opacity: 1;
                top: -20%;
                right: -20%;
            }

            .feature-card:hover {
                transform: translateY(-16px) scale(1.03);
                border-color: var(--accent-amber);
                box-shadow: 0 25px 60px rgba(255, 193, 7, 0.18);
                background: rgba(255, 193, 7, 0.06);
            }

            .feature-icon {
                font-size: 48px;
                margin-bottom: 20px;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                display: inline-block;
                color: var(--accent-amber);
            }

            .feature-icon i {
                color: var(--accent-amber);
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            .feature-card:hover .feature-icon {
                transform: scale(1.3) rotate(15deg);
                color: var(--accent-orange);
                animation: bounce 0.6s ease;
            }

            .feature-card:hover .feature-icon i {
                color: var(--accent-orange);
            }

            @keyframes bounce {
                0%, 100% { transform: scale(1.3) rotate(15deg); }
                50% { transform: scale(1.4) rotate(-10deg); }
            }

            .feature-card h3 {
                font-size: 24px;
                margin-bottom: 15px;
                color: var(--accent-amber);
                letter-spacing: 1px;
                font-family: 'Playfair Display', serif;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-weight: 700;
                position: relative;
                z-index: 2;
            }

            .feature-card:hover h3 {
                color: var(--light-bg);
                letter-spacing: 1.5px;
                transform: translateX(8px);
            }

            .feature-card p {
                font-size: 16px;
                line-height: 1.7;
                color: rgba(244, 248, 252, 0.8);
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-weight: 300;
                position: relative;
                z-index: 2;
            }

            .feature-card:hover p {
                color: var(--light-bg);
                line-height: 1.8;
            }

            /* Footer */
            footer {
                background: linear-gradient(135deg, #08263E 0%, #051621 100%);
                border-top: 2px solid var(--accent-amber);
                padding: 40px;
                text-align: center;
                animation: slideUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                box-shadow: 0 -8px 32px rgba(0, 0, 0, 0.3);
            }

            footer:hover {
                box-shadow: 0 -12px 48px rgba(255, 193, 7, 0.15);
            }

            @keyframes slideUp {
                from {
                    transform: translateY(100%);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            footer p {
                color: rgba(244, 248, 252, 0.75);
                letter-spacing: 1px;
                font-weight: 300;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-family: 'Poppins', sans-serif;
            }

            footer p:hover {
                color: var(--light-bg);
                letter-spacing: 1.5px;
            }

            footer .gradient-text {
                background: var(--gradient-2);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                font-family: 'Playfair Display', serif;
                font-weight: 700;
                animation: textGlow 3s ease-in-out infinite;
            }

            @keyframes textGlow {
                0%, 100% { filter: drop-shadow(0 0 5px rgba(255, 193, 7, 0.2)); }
                50% { filter: drop-shadow(0 0 15px rgba(255, 193, 7, 0.4)); }
            }

            /* Responsive */
            @media (max-width: 768px) {
                .nav-container {
                    padding: 0 15px;
                    height: 70px;
                }

                .nav-logo {
                    font-size: 18px;
                    letter-spacing: 1.5px;
                }

                .logo-image {
                    height: 40px;
                }

                .nav-links {
                    gap: 12px;
                    font-size: 11px;
                }

                .nav-links a {
                    font-size: 11px;
                    gap: 3px;
                }

                .nav-links i {
                    font-size: 12px;
                }

                .profile-button {
                    width: 36px;
                    height: 36px;
                    font-size: 14px;
                }

                .section-title {
                    font-size: 32px;
                }

                .section-description {
                    font-size: 16px;
                }

                section {
                    padding: 40px 20px;
                    min-height: auto;
                    padding-top: 120px;
                }

                .dropdown-menu {
                    position: static;
                    opacity: 0;
                    height: 0;
                    overflow: hidden;
                    transition: all 0.3s ease;
                }

                .nav-item:hover .dropdown-menu {
                    opacity: 1;
                }
            }

            /* Floating animation */
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }

            .floating {
                animation: float 3s ease-in-out infinite;
            }

            /* Additional hover effects */
            a {
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            /* Smooth text transitions */
            span {
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            /* Pulse animation for glowing effects */
            @keyframes pulse {
                0%, 100% { opacity: 1; }
                50% { opacity: 0.8; }
            }

            /* Shimmer animation */
            @keyframes shimmer {
                0% { background-position: -1000px 0; }
                100% { background-position: 1000px 0; }
            }

            /* Enhanced scroll animations */
            @keyframes slideInFromLeft {
                from {
                    opacity: 0;
                    transform: translateX(-50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes slideInFromRight {
                from {
                    opacity: 0;
                    transform: translateX(50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes scaleIn {
                from {
                    opacity: 0;
                    transform: scale(0.95);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            /* Smooth backdrop filter transitions */
            @supports (backdrop-filter: blur(10px)) {
                nav, .dropdown-menu {
                    backdrop-filter: blur(20px);
                }
            }

            /* Enhanced mobile responsiveness with animation support */
            @media (prefers-reduced-motion: reduce) {
                * {
                    animation-duration: 0.01ms !important;
                    animation-iteration-count: 1 !important;
                    transition-duration: 0.01ms !important;
                }
            }

            /* Secondary button styling */
            a[style*=\"border: 2px solid var(--accent-amber)\"] {
                background: transparent;
                box-shadow: inset 0 0 0 1px rgba(255, 193, 7, 0.3);
            }

            a[style*=\"border: 2px solid var(--accent-amber)\"]:hover {
                background: rgba(255, 193, 7, 0.08);
                transform: translateY(-4px);
                box-shadow: inset 0 0 0 2px var(--accent-amber), 0 8px 25px rgba(255, 193, 7, 0.25);
                letter-spacing: 1.5px;
            }

            /* Profile Button */
            .profile-button {
                width: 38px;
                height: 38px;
                background: var(--gradient-2);
                border: 2px solid var(--accent-amber);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
                position: relative;
                font-size: 16px;
                color: var(--primary-dark);
                box-shadow: 0 4px 15px rgba(255, 193, 7, 0.2);
                flex-shrink: 0;
            }

            .profile-button:hover {
                transform: scale(1.15);
                box-shadow: 0 8px 30px rgba(255, 193, 7, 0.4);
            }

            .profile-button::after {
                content: '';
                position: absolute;
                inset: -3px;
                background: conic-gradient(from 0deg, var(--accent-amber), var(--accent-orange), var(--accent-amber));
                border-radius: 50%;
                z-index: -1;
                opacity: 0;
                transition: opacity 0.4s ease;
                animation: profilePulse 3s ease-in-out infinite;
            }

            .profile-button:hover::after {
                opacity: 0.1;
            }

            @keyframes profilePulse {
                0%, 100% { transform: scale(1); }
                50% { transform: scale(1.05); }
            }

            /* Profile Dropdown */
            .profile-menu {
                position: absolute;
                top: 100%;
                right: 0;
                background: rgba(8, 38, 62, 0.95);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 193, 7, 0.3);
                border-radius: 16px;
                min-width: 260px;
                list-style: none;
                padding: 12px 0;
                margin-top: 10px;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-20px);
                transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
                box-shadow: 0 20px 50px rgba(255, 193, 7, 0.12);
            }

            .profile-wrapper:hover .profile-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
                box-shadow: 0 25px 60px rgba(255, 193, 7, 0.15);
            }

            .profile-menu li {
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                animation: slideInDropdown 0.4s ease-out both;
            }

            .profile-menu li:nth-child(1) { animation-delay: 0.05s; }
            .profile-menu li:nth-child(2) { animation-delay: 0.1s; }
            .profile-menu li:nth-child(3) { animation-delay: 0.15s; }
            .profile-menu li:nth-child(4) { animation-delay: 0.2s; }
            .profile-menu li:nth-child(5) { animation-delay: 0.25s; }

            .profile-menu li:hover {
                background: rgba(255, 193, 7, 0.1);
                transform: translateX(10px);
                border-radius: 8px;
            }

            .profile-menu a {
                display: flex;
                padding: 14px 22px;
                color: var(--light-bg);
                text-decoration: none;
                font-size: 13px;
                font-weight: 400;
                letter-spacing: 0.5px;
                text-transform: none;
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                font-family: 'Poppins', sans-serif;
                align-items: center;
                gap: 12px;
            }

            .profile-menu i {
                width: 18px;
                color: var(--accent-amber);
                transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
                text-align: center;
                font-size: 14px;
            }

            .profile-menu a:hover {
                color: var(--accent-orange);
                padding-left: 28px;
                font-weight: 500;
            }

            .profile-menu a:hover i {
                color: var(--accent-orange);
                transform: scale(1.3) rotate(15deg);
                filter: drop-shadow(0 0 8px rgba(255, 143, 0, 0.4));
            }

            .profile-wrapper {
                position: relative;
            }

            /* Profile header in dropdown */
            .profile-header {
                padding: 16px 22px;
                border-bottom: 1px solid rgba(255, 193, 7, 0.1);
                display: flex;
                align-items: center;
                gap: 12px;
                animation: slideInDropdown 0.4s ease-out both;
            }

            .profile-avatar {
                width: 36px;
                height: 36px;
                background: var(--gradient-2);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                color: var(--primary-dark);
                font-size: 14px;
            }

            .profile-info {
                flex: 1;
            }

            .profile-info p {
                margin: 0;
                color: var(--light-bg);
                font-size: 13px;
                font-weight: 500;
                letter-spacing: 0.5px;
            }

            .profile-info small {
                color: rgba(244, 248, 252, 0.6);
                font-size: 11px;
                display: block;
            }
/* ===== WRAPPER ===== */
.notif-wrapper {
    position: relative;
}

/* ===== BOUTON ===== */
.notif-btn {
    background: none;
    border: none;
    color: #ffb400;
    font-size: 20px;
    cursor: pointer;
    position: relative;
}

/* ===== BADGE ===== */
.notif-badge {
    position: absolute;
    top: -5px;
    right: -8px;
    background: red;
    color: white;
    font-size: 10px;
    border-radius: 50%;
    padding: 3px 6px;
}

/* ===== DROPDOWN ===== */
.notif-dropdown {
    position: absolute;
    top: 45px;
    right: 0;
    width: 320px;

    background: #0d2a3a;
    border-radius: 12px;
    padding: 15px;

    display: none;
    flex-direction: column; /* 🔥 important */

    box-shadow: 0 10px 30px rgba(0,0,0,0.4);

    max-height: 320px;
    overflow-y: auto;
    overflow-x: hidden;

    box-sizing: border-box;
    z-index: 9999;

    /* 🔥 évite héritage navbar */
    white-space: normal !important;
}

/* ===== TITRE ===== */
.notif-dropdown h4 {
    color: #ffb400;
    margin: 0 0 12px 0;
    font-size: 16px;
}

/* ===== ITEM ===== */
.notif-item {
    padding: 10px 12px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    color: white;

    cursor: pointer;
    transition: background 0.2s ease;

    display: block;
    width: 100%;
    box-sizing: border-box;

    /* 🔥 FIX PRINCIPAL */
    white-space: normal !important;
}

/* dernier item */
.notif-item:last-child {
    border-bottom: none;
}

/* hover */
.notif-item:hover {
    background: rgba(255,255,255,0.05);
}

/* ===== TEXTE ===== */
.notif-item p {
    margin: 0;

    display: block;
    width: 100%;

    font-size: 14px;
    line-height: 1.5;

    /* 🔥 wrap parfait */
    white-space: normal !important;
    word-break: break-word;
    overflow-wrap: anywhere;
}

/* ===== EMPTY ===== */
.notif-empty {
    margin: 0;
    color: white;
    font-size: 14px;
    opacity: 0.8;
}

/* ===== FIX NAVBAR (TRÈS IMPORTANT) ===== */
.nav-item.notif-wrapper {
    white-space: normal !important;
}
        </style>

        {% block stylesheets %}
        {% endblock %}

        {% block javascripts %}
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}

        {% set frankenphpHotReload = app.request.server.get('FRANKENPHP_HOT_RELOAD') %}
        {% if frankenphpHotReload %}
        <meta name=\"frankenphp-hot-reload:url\" content=\"{{ frankenphpHotReload }}\">
        <script src=\"https://cdn.jsdelivr.net/npm/idiomorph\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/frankenphp-hot-reload/+esm\" type=\"module\"></script>
        {% endif %}
    </head>
    <body>
        <!-- Navigation -->
        <nav>
            <div class=\"nav-container\">
                <div class=\"nav-logo\">
                    <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo ASAFAR\" class=\"logo-image\">
                    <span class=\"logo-text\">ASAFAR</span>
                </div>
                <ul class=\"nav-links\">
                    <li class=\"nav-item\"><a href=\"{{ path('home') }}#accueil\"><i class=\"fas fa-home\"></i> Accueil</a></li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_transports') }}\" data-turbo=\"false\" class=\"dropdown-toggle\"><i class=\"fas fa-plane\"></i> Transports</a>
                        <ul class=\"dropdown-menu\">
                            <li><a data-turbo=\"false\" href=\"{{ path('app_transports') }}#transports-map\"><i class=\"fas fa-plane\"></i> Vols Premium</a></li>
                            <li><a data-turbo=\"false\" href=\"{{ path('app_transports') }}#transports-list\"><i class=\"fas fa-ship\"></i> Croisieres</a></li>
                            <li><a data-turbo=\"false\" href=\"{{ path('app_transports') }}#transports-list\"><i class=\"fas fa-car\"></i> Transferts VIP</a></li>
                        </ul>
                    </li>


                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_hebergements') }}\" class=\"dropdown-toggle\"><i class=\"fas fa-hotel\"></i> Hebergements</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('app_hebergements') }}#hebergements\"><i class=\"fas fa-hotel\"></i> Hotels 5*</a></li>
                            <li><a href=\"{{ path('app_hebergements') }}#hebergements\"><i class=\"fas fa-umbrella-beach\"></i> Resorts Exclusifs</a></li>
                            <li><a href=\"{{ path('app_hebergements') }}#hebergements\"><i class=\"fas fa-mountain\"></i> Chalets Luxe</a></li>
                        </ul>
                    </li>
<li class=\"nav-item\">
                        <a href=\"{{ path('app_loisirs') }}\" class=\"dropdown-toggle\"><i class=\"fas fa-compass\"></i> Loisirs</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('app_loisirs') }}\"><i class=\"fas fa-theater-masks\"></i> Culturel</a></li>
                            <li><a href=\"{{ path('app_loisirs') }}\"><i class=\"fas fa-water\"></i> Aventure</a></li>
                            <li><a href=\"{{ path('app_loisirs') }}\"><i class=\"fas fa-utensils\"></i> Gastronomie</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\"><a href=\"{{ path('app_posts') }}\"><i class=\"fas fa-newspaper\"></i> Posts</a></li>

<li class=\"nav-item\"><a href=\"#\" id=\"openQuiz\"><i class=\"fas fa-brain\"></i> Quizz</a></li>

                    <li class=\"nav-item\">
    <a href=\"{{ path('reclamation_index') }}\" style=\"position:relative;\">
        <i class=\"fas fa-comment-dots\"></i>
        Réclamation
        {# Badge rouge si l'utilisateur est connecté — optionnel #}
    </a>
</li>
<li class=\"nav-item notif-wrapper\">
    <button type=\"button\" class=\"notif-btn\" id=\"notifBtn\">
        <i class=\"fas fa-bell\"></i>

        {% if notifications is defined and notifications|length > 0 %}
            <span class=\"notif-badge\">{{ notifications|length }}</span>
        {% endif %}
    </button>

    <div id=\"notifDropdown\" class=\"notif-dropdown\" style=\"display:none;\">
        <h4>🔔 Notifications</h4>

        {% if notifications is not defined or notifications|length == 0 %}
            <p>Aucune notification</p>
        {% else %}
{% for n in notifications %}
<div onclick=\"window.location.href='/reclamation/mes-reclamations-page#rec-{{ n.reclamationId }}'\">
    {{ n.message }}
</div>
{% endfor %}
        {% endif %}
    </div>
</li>

                    <li class=\"nav-item profile-wrapper\">
                        <button class=\"profile-button\" title=\"Profil Utilisateur\">
                            <i class=\"fas fa-user\"></i>
                        </button>
                        <ul class=\"profile-menu\">
                            <li class=\"profile-header\">
<li class=\"profile-header\">
    {% if app.user %}
        <div class=\"profile-avatar\">
            {{ app.user.nom|first|upper }}{{ app.user.prenom|first|upper }}
        </div>
        <div class=\"profile-info\">
            <p>{{ app.user.nom }} {{ app.user.prenom }}</p>
            <small>{{ app.user.email }}</small>
        </div>
    {% else %}
        <div class=\"profile-avatar\">G</div>
        <div class=\"profile-info\">
            <p>Guest</p>
            <small>Non connecté</small>
        </div>
    {% endif %}
</li>

{% if app.user %}

    <li>
        <a href=\"{{ path('profile_index') }}\">
            <i class=\"fas fa-user-circle\"></i> Mon Profil
        </a>
    </li> 

    <li>
        <a href=\"{{ path('reclamation_mes_page') }}\">
            <i class=\"fas fa-history\"></i> Mes Réclamations
        </a>
    </li>

     <li>
        <a href=\"{{ path('app_mes_reservations_hebergements') }}\">
            <i class=\"fas fa-hotel\"></i> Mes Hébergements
        </a>
    </li>
    <li>
        <a href=\"{{ path('app_mes_reservations') }}\">
            <i class=\"fas fa-compass\"></i> Mes Loisirs
        </a>
    </li>
    <li>
        <a href=\"{{ path('app_mes_reservations_transports') }}\">
            <i class=\"fas fa-ticket-alt\"></i> Mes Trajets
        </a>
    </li>

   <li>
    <a href=\"{{ path('app_mes_favoris') }}\">
        <i class=\"fas fa-heart\"></i> Mes Favoris
    </a>
</li>

    <li>
        <a href=\"{{ path('app_logout') }}\">
            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
        </a>
    </li>

{% else %}

    <li>
        <a href=\"{{ path('app_login') }}\">
            <i class=\"fas fa-sign-in-alt\"></i> Connexion
        </a>
    </li>

    <li>
        <a href=\"{{ path('app_register') }}\">
            <i class=\"fas fa-user-plus\"></i> Inscription
        </a>
    </li>

{% endif %}
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            {% block body %}{% endblock %}
        </main>
{% if app.user %}
<div id=\"quizModal\" class=\"modal\">
    <div class=\"modal-content quiz-box\">
        <span class=\"closeQuiz\">&times;</span>

        <h2>🧠 Quiz Voyage</h2>

        {% if questions is defined and questions is not empty %}

        <form id=\"quizForm\">

            {% for q in questions %}
                <div class=\"quiz-question\"> {# ✅ AJOUT #}

                    <p><strong>{{ q.question }}</strong></p>

                    {% for choice in q.choices %}
                        <label class=\"quiz-choice\"> {# ✅ AJOUT #}
                            <input 
                                type=\"radio\" 
name=\"q{{ q.id }}\"
                                value=\"{{ choice }}\"
                                data-correct=\"{{ choice == q.answer ? 'true' : 'false' }}\"
                            >
                            {{ choice }}
                        </label><br>
                    {% endfor %}

                </div>
            {% endfor %}

            {# ✅ AJOUT ID POUR LE JS #}
            <button type=\"button\" id=\"validateQuizBtn\" onclick=\"submitQuiz()\">
                Valider
            </button>

        </form>

        {# ✅ SCORE UNIQUE #}
        <p id=\"scoreDisplay\">🎉 Score: 0 | +0 points</p>

        {% else %}
            <p>Aucune question disponible 😕</p>
        {% endif %}

    </div>
</div>
{% endif %}

        <!-- Footer -->
        <footer>
            <p>© 2026 <span class=\"gradient-text\">ASAFAR</span> - Explorez le Monde différemment</p>
            <p style=\"margin-top: 10px; font-size: 12px;\">Créé avec passion pour les voyageurs authentiques</p>
        </footer>
<script>
function submitQuiz() {
    const form = document.getElementById(\"quizForm\");
    const scoreDisplay = document.getElementById(\"scoreDisplay\");
    const button = document.getElementById(\"validateQuizBtn\");

    if (!form || !scoreDisplay || !button) return;

    const questions = document.querySelectorAll(\".quiz-question\");
    let score = 0;
    let allAnswered = true;

    // reset styles
    document.querySelectorAll(\".quiz-choice\").forEach(label => {
        label.style.color = \"\";
        label.style.fontWeight = \"\";
    });

    questions.forEach(questionBlock => {
        const checked = questionBlock.querySelector('input[type=\"radio\"]:checked');

        if (!checked) {
            allAnswered = false;
            return;
        }

        const answers = questionBlock.querySelectorAll('input[type=\"radio\"]');

        answers.forEach(input => {
            const label = input.parentElement;

            if (input.dataset.correct === \"true\") {
                label.style.color = \"green\";
                label.style.fontWeight = \"600\";
            }

            if (input.checked && input.dataset.correct !== \"true\") {
                label.style.color = \"red\";
                label.style.fontWeight = \"600\";
            }
        });

        if (checked.dataset.correct === \"true\") {
            score++;
        }
    });

    if (!allAnswered) {
        scoreDisplay.textContent = \"❌ Répondez à toutes les questions.\";
        return;
    }

    scoreDisplay.textContent = `🎉 Score: \${score} | +\${score * 10} points`;

    const formData = new FormData(form);
    formData.append(\"score\", score);

    button.disabled = true;
    button.textContent = \"Validation...\";

    fetch('/quiz/submit', {
        method: 'POST',
        body: formData
    })
    .then(res => {
        if (!res.ok) {
            throw new Error(\"Erreur serveur\");
        }
        return res.json();
    })
    .then(data => {
        if (data.error) {
            scoreDisplay.textContent = \"❌ \" + data.error;
            return;
        }

        scoreDisplay.textContent = `🎉 Score: \${data.score} | +\${data.points} points`;
    })
    .catch(() => {
        scoreDisplay.textContent = \"❌ Une erreur est survenue.\";
    })
    .finally(() => {
        button.disabled = false;
        button.textContent = \"Valider\";
    });
}
document.addEventListener(\"DOMContentLoaded\", function () {

    const modal = document.getElementById(\"quizModal\");
    const btn = document.getElementById(\"openQuiz\"); // ✅ correct
    const close = document.querySelector(\".closeQuiz\");

    if (!modal || !btn || !close) return;

    // ouvrir
    btn.addEventListener(\"click\", function (e) {
        e.preventDefault();
        modal.style.display = \"block\";
    });

    // fermer bouton X
    close.addEventListener(\"click\", function () {
        modal.style.display = \"none\";
    });

    // fermer clic dehors
    window.addEventListener(\"click\", function (e) {
        if (e.target === modal) {
            modal.style.display = \"none\";
        }
    });

});

            // Smooth scroll on nav links
            document.querySelectorAll('nav a, a[href^=\"#\"]').forEach(link => {
                link.addEventListener('click', (e) => {
                    const href = link.getAttribute('href');
                    if (href && href.startsWith('#')) {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({ behavior: 'smooth' });
                        }
                    }
                });
            });

            // Profile button interactivity
            const profileButton = document.querySelector('.profile-button');
            const profileMenu = document.querySelector('.profile-menu');

            if (profileButton && profileMenu) {
                profileButton.addEventListener('click', (e) => {
                    e.stopPropagation();
                    profileMenu.style.opacity = profileMenu.style.opacity === '1' ? '0' : '1';
                    profileMenu.style.visibility = profileMenu.style.visibility === 'visible' ? 'hidden' : 'visible';
                });

                // Close menu when clicking outside
                document.addEventListener('click', (e) => {
                    if (!e.target.closest('.profile-wrapper')) {
                        profileMenu.style.opacity = '0';
                        profileMenu.style.visibility = 'hidden';
                    }
                });

                // Close menu when clicking on menu items
                profileMenu.querySelectorAll('a').forEach(item => {
                    item.addEventListener('click', () => {
                        profileMenu.style.opacity = '0';
                        profileMenu.style.visibility = 'hidden';
                    });
                });
            }

            // Add scroll animation to elements
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.feature-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                observer.observe(card);
            });
document.getElementById(\"notifBtn\").addEventListener(\"click\", function(e) {
    e.stopPropagation();

    const d = document.getElementById(\"notifDropdown\");

    // toggle affichage
    const isOpen = d.style.display === \"block\";
    d.style.display = isOpen ? \"none\" : \"block\";

    // 👉 SI ON OUVRE → marquer comme lues
    if (!isOpen) {
        fetch('/notifications/read', {
            method: 'POST'
        })
        .then(() => {
            const badge = document.getElementById(\"notifCount\");
            if (badge) {
badge.textContent = \"0\";
badge.style.display = \"none\";
            }
        })
        .catch(() => console.error(\"Erreur notif\"));
    }
});

document.addEventListener(\"click\", function(e) {
    if (!e.target.closest(\".notif-wrapper\")) {
        document.getElementById(\"notifDropdown\").style.display = \"none\";
    }
});

        </script>
    </body>
</html>
", "base.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\base.html.twig");
    }
}
