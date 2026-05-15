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

/* sarra/verify_email.html.twig */
class __TwigTemplate_159e961e8fd817b0294c4a5e1b934712 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sarra/verify_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sarra/verify_email.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "
<h2>Vérification Email</h2>

<input type=\"email\" id=\"email\" placeholder=\"Entrer votre email\">
<button onclick=\"sendCode()\">Envoyer code</button>

<div id=\"codeSection\" style=\"display:none;\">
    <input type=\"text\" id=\"code\" placeholder=\"Entrer le code\">
    <button onclick=\"verifyCode()\">Vérifier</button>
</div>

<script>
function sendCode() {
    let email = document.getElementById(\"email\").value;

    fetch(\"/send-code\", {
        method: \"POST\",
        headers: {\"Content-Type\": \"application/x-www-form-urlencoded\"},
        body: \"email=\" + email
    })
    .then(res => res.text())
    .then(data => {
document.getElementById(\"message\").textContent = data;
        document.getElementById(\"codeSection\").style.display = \"block\";
    });
}

function verifyCode() {
    let email = document.getElementById(\"email\").value;
    let code = document.getElementById(\"code\").value;

    fetch(\"/verify-code\", {
        method: \"POST\",
        headers: {\"Content-Type\": \"application/x-www-form-urlencoded\"},
        body: \"email=\" + email + \"&code=\" + code
    })
    .then(res => res.text())
    .then(data => {
document.getElementById(\"message\").textContent = data;
        if (data === \"Email vérifié\") {
            window.location.href = \"/register\";
        }
    });
}
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
        return "sarra/verify_email.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}

<h2>Vérification Email</h2>

<input type=\"email\" id=\"email\" placeholder=\"Entrer votre email\">
<button onclick=\"sendCode()\">Envoyer code</button>

<div id=\"codeSection\" style=\"display:none;\">
    <input type=\"text\" id=\"code\" placeholder=\"Entrer le code\">
    <button onclick=\"verifyCode()\">Vérifier</button>
</div>

<script>
function sendCode() {
    let email = document.getElementById(\"email\").value;

    fetch(\"/send-code\", {
        method: \"POST\",
        headers: {\"Content-Type\": \"application/x-www-form-urlencoded\"},
        body: \"email=\" + email
    })
    .then(res => res.text())
    .then(data => {
document.getElementById(\"message\").textContent = data;
        document.getElementById(\"codeSection\").style.display = \"block\";
    });
}

function verifyCode() {
    let email = document.getElementById(\"email\").value;
    let code = document.getElementById(\"code\").value;

    fetch(\"/verify-code\", {
        method: \"POST\",
        headers: {\"Content-Type\": \"application/x-www-form-urlencoded\"},
        body: \"email=\" + email + \"&code=\" + code
    })
    .then(res => res.text())
    .then(data => {
document.getElementById(\"message\").textContent = data;
        if (data === \"Email vérifié\") {
            window.location.href = \"/register\";
        }
    });
}
</script>

{% endblock %}", "sarra/verify_email.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\sarra\\verify_email.html.twig");
    }
}
