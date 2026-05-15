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

/* admin/map/location_picker.html.twig */
class __TwigTemplate_81b8dc2ffc50ad688d1a8fa1c1bc2eef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/map/location_picker.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/map/location_picker.html.twig"));

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

        yield "Sélectionner Localisation - Admin ASAFAR";
        
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
        yield "    <i class=\"fas fa-map-marker-alt\"></i> Choisir la Localisation du Hébergement
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
        yield "<div class=\"map-selector-container\">
    <div id=\"map\" class=\"map-picker\"></div>
    <div class=\"map-sidebar\">
        <div class=\"sidebar-section\">
            <label>Rechercher une adresse :</label>
            <input type=\"text\" id=\"addressSearch\" placeholder=\"Ex: Paris, France\" class=\"search-input\">
            <button onclick=\"searchAddress()\" class=\"btn-search\">
                <i class=\"fas fa-search\"></i> Rechercher
            </button>
        </div>

        <div class=\"sidebar-section\">
            <h3>Coordonnées sélectionnées :</h3>
            <div class=\"coords-display\">
                <div class=\"coord-field\">
                    <label>Latitude :</label>
                    <input type=\"number\" id=\"latInput\" step=\"0.0001\" placeholder=\"0.0000\" readonly>
                </div>
                <div class=\"coord-field\">
                    <label>Longitude :</label>
                    <input type=\"number\" id=\"lonInput\" step=\"0.0001\" placeholder=\"0.0000\" readonly>
                </div>
            </div>
        </div>

        <div class=\"sidebar-section\">
            <p style=\"font-size: 12px; color: rgba(255, 255, 255, 0.6);\">💡 Cliquez sur la carte pour placer le marqueur</p>
        </div>

        <div class=\"sidebar-actions\">
            <button onclick=\"confirmLocation()\" class=\"btn btn-primary\">
                <i class=\"fas fa-check\"></i> Confirmer la Localisation
            </button>
            <button onclick=\"clearLocation()\" class=\"btn btn-secondary\">
                <i class=\"fas fa-times\"></i> Annuler
            </button>
        </div>
    </div>
</div>

<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>

<style>
    .map-selector-container {
        position: fixed;
        inset: 0;
        display: flex;
        background: #f5f5f5;
        z-index: 1000;
    }

    .map-picker {
        flex: 1;
        background: #f0f0f0;
    }

    .map-sidebar {
        width: 320px;
        background: rgba(11, 45, 74, 0.98);
        padding: 20px;
        overflow-y: auto;
        color: white;
        display: flex;
        flex-direction: column;
        gap: 20px;
        border-left: 1px solid rgba(47, 168, 255, 0.2);
    }

    .sidebar-section {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .sidebar-section label {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.7);
        font-weight: 500;
    }

    .sidebar-section h3 {
        margin: 0;
        font-size: 14px;
        color: #2FA8FF;
    }

    .search-input {
        padding: 10px 12px;
        border: 1px solid rgba(47, 168, 255, 0.3);
        border-radius: 6px;
        background: rgba(255, 255, 255, 0.08);
        color: white;
        font-size: 13px;
    }

    .search-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    .search-input:focus {
        outline: none;
        border-color: #2FA8FF;
        box-shadow: 0 0 8px rgba(47, 168, 255, 0.3);
    }

    .btn-search {
        padding: 8px 12px;
        background: rgba(47, 168, 255, 0.2);
        border: 1px solid #2FA8FF;
        border-radius: 6px;
        color: #2FA8FF;
        cursor: pointer;
        font-size: 12px;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .btn-search:hover {
        background: rgba(47, 168, 255, 0.4);
    }

    .coords-display {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .coord-field {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .coord-field label {
        font-size: 11px;
        color: rgba(255, 255, 255, 0.6);
    }

    .coord-field input {
        padding: 8px 10px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(47, 168, 255, 0.2);
        border-radius: 4px;
        color: #2FA8FF;
        font-size: 12px;
        font-weight: 600;
    }

    .coord-field input:focus {
        outline: none;
        border-color: #2FA8FF;
    }

    .sidebar-actions {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-top: auto;
    }

    .btn {
        padding: 10px 12px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 13px;
        font-weight: 500;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }

    .btn-primary {
        background: #2FA8FF;
        color: white;
    }

    .btn-primary:hover {
        background: #1e7ecf;
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: rgba(255, 255, 255, 0.7);
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.15);
        color: white;
    }

    @media (max-width: 768px) {
        .map-sidebar {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            max-height: 50%;
            border-left: none;
            border-top: 1px solid rgba(47, 168, 255, 0.2);
            border-radius: 12px 12px 0 0;
        }

        .map-picker {
            height: 50%;
        }
    }
</style>

<script>
let map;
let marker = null;
let selectedLat = null;
let selectedLon = null;

document.addEventListener('DOMContentLoaded', function() {
    // Initialiser la carte
    map = L.map('map').setView([48.8566, 2.3522], 12); // Paris par défaut

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Click sur la carte pour placer le marqueur
    map.on('click', function(e) {
        placeMarker(e.latlng.lat, e.latlng.lng);
    });
});

function placeMarker(lat, lon) {
    selectedLat = lat;
    selectedLon = lon;

    // Supprimer l'ancien marqueur
    if (marker) {
        map.removeLayer(marker);
    }

    // Créer un nouveau marqueur
    marker = L.marker([lat, lon], {
        icon: L.icon({
            iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-icon.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-shadow.png',
            iconSize: [25, 41],
            shadowSize: [41, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
        })
    }).addTo(map);

    // Mettre à jour les inputs
    document.getElementById('latInput').value = lat.toFixed(6);
    document.getElementById('lonInput').value = lon.toFixed(6);

    // Centrer sur le marqueur
    map.setView([lat, lon], 16);
}

function searchAddress() {
    const address = document.getElementById('addressSearch').value;
    if (!address) {
        alert('Veuillez entrer une adresse');
        return;
    }

    // Utiliser Nominatim (gratuit, OpenStreetMap)
    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=\${encodeURIComponent(address)}`)
        .then(response => response.json())
        .then(data => {
            if (data.length === 0) {
                alert('Adresse non trouvée');
                return;
            }

            const result = data[0];
            placeMarker(parseFloat(result.lat), parseFloat(result.lon));
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Erreur lors de la recherche');
        });
}

function confirmLocation() {
    if (selectedLat === null || selectedLon === null) {
        alert('Veuillez sélectionner une localisation en cliquant sur la carte');
        return;
    }

    console.log('📍 Envoi des coordonnées:', selectedLat, selectedLon);
    console.log('🪟 window.opener:', window.opener ? 'exists' : 'not found');

    // Envoyer les coordonnées au parent/opener (formulaire)
    if (window.opener) {
        window.opener.postMessage({
            action: 'setCoordinates',
            latitude: Number(selectedLat.toFixed(6)),
            longitude: Number(selectedLon.toFixed(6))
        }, '*');
        console.log('✅ postMessage envoyé via window.opener');
    } else if (window.parent && window.parent !== window) {
        window.parent.postMessage({
            action: 'setCoordinates',
            latitude: Number(selectedLat.toFixed(6)),
            longitude: Number(selectedLon.toFixed(6))
        }, '*');
        console.log('✅ postMessage envoyé via window.parent');
    } else {
        console.log('❌ Impossible d\\'envoyer le message');
    }

    // Afficher confirmation
    alert('✓ Localisation confirmée: ' + selectedLat.toFixed(4) + ', ' + selectedLon.toFixed(4));

    // Fermer après un délai pour laisser le temps au postMessage
    setTimeout(() => {
        window.close();
    }, 500);
}

function clearLocation() {
    if (marker) {
        map.removeLayer(marker);
        marker = null;
    }
    selectedLat = null;
    selectedLon = null;
    document.getElementById('latInput').value = '';
    document.getElementById('lonInput').value = '';
}

window.placeMarker = placeMarker;
window.searchAddress = searchAddress;
window.confirmLocation = confirmLocation;
window.clearLocation = clearLocation;
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
        return "admin/map/location_picker.html.twig";
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
        return array (  126 => 10,  113 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Sélectionner Localisation - Admin ASAFAR{% endblock %}

{% block page_title %}
    <i class=\"fas fa-map-marker-alt\"></i> Choisir la Localisation du Hébergement
{% endblock %}

{% block content %}
<div class=\"map-selector-container\">
    <div id=\"map\" class=\"map-picker\"></div>
    <div class=\"map-sidebar\">
        <div class=\"sidebar-section\">
            <label>Rechercher une adresse :</label>
            <input type=\"text\" id=\"addressSearch\" placeholder=\"Ex: Paris, France\" class=\"search-input\">
            <button onclick=\"searchAddress()\" class=\"btn-search\">
                <i class=\"fas fa-search\"></i> Rechercher
            </button>
        </div>

        <div class=\"sidebar-section\">
            <h3>Coordonnées sélectionnées :</h3>
            <div class=\"coords-display\">
                <div class=\"coord-field\">
                    <label>Latitude :</label>
                    <input type=\"number\" id=\"latInput\" step=\"0.0001\" placeholder=\"0.0000\" readonly>
                </div>
                <div class=\"coord-field\">
                    <label>Longitude :</label>
                    <input type=\"number\" id=\"lonInput\" step=\"0.0001\" placeholder=\"0.0000\" readonly>
                </div>
            </div>
        </div>

        <div class=\"sidebar-section\">
            <p style=\"font-size: 12px; color: rgba(255, 255, 255, 0.6);\">💡 Cliquez sur la carte pour placer le marqueur</p>
        </div>

        <div class=\"sidebar-actions\">
            <button onclick=\"confirmLocation()\" class=\"btn btn-primary\">
                <i class=\"fas fa-check\"></i> Confirmer la Localisation
            </button>
            <button onclick=\"clearLocation()\" class=\"btn btn-secondary\">
                <i class=\"fas fa-times\"></i> Annuler
            </button>
        </div>
    </div>
</div>

<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\" />
<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"></script>

<style>
    .map-selector-container {
        position: fixed;
        inset: 0;
        display: flex;
        background: #f5f5f5;
        z-index: 1000;
    }

    .map-picker {
        flex: 1;
        background: #f0f0f0;
    }

    .map-sidebar {
        width: 320px;
        background: rgba(11, 45, 74, 0.98);
        padding: 20px;
        overflow-y: auto;
        color: white;
        display: flex;
        flex-direction: column;
        gap: 20px;
        border-left: 1px solid rgba(47, 168, 255, 0.2);
    }

    .sidebar-section {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .sidebar-section label {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.7);
        font-weight: 500;
    }

    .sidebar-section h3 {
        margin: 0;
        font-size: 14px;
        color: #2FA8FF;
    }

    .search-input {
        padding: 10px 12px;
        border: 1px solid rgba(47, 168, 255, 0.3);
        border-radius: 6px;
        background: rgba(255, 255, 255, 0.08);
        color: white;
        font-size: 13px;
    }

    .search-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    .search-input:focus {
        outline: none;
        border-color: #2FA8FF;
        box-shadow: 0 0 8px rgba(47, 168, 255, 0.3);
    }

    .btn-search {
        padding: 8px 12px;
        background: rgba(47, 168, 255, 0.2);
        border: 1px solid #2FA8FF;
        border-radius: 6px;
        color: #2FA8FF;
        cursor: pointer;
        font-size: 12px;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .btn-search:hover {
        background: rgba(47, 168, 255, 0.4);
    }

    .coords-display {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .coord-field {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .coord-field label {
        font-size: 11px;
        color: rgba(255, 255, 255, 0.6);
    }

    .coord-field input {
        padding: 8px 10px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(47, 168, 255, 0.2);
        border-radius: 4px;
        color: #2FA8FF;
        font-size: 12px;
        font-weight: 600;
    }

    .coord-field input:focus {
        outline: none;
        border-color: #2FA8FF;
    }

    .sidebar-actions {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-top: auto;
    }

    .btn {
        padding: 10px 12px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 13px;
        font-weight: 500;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }

    .btn-primary {
        background: #2FA8FF;
        color: white;
    }

    .btn-primary:hover {
        background: #1e7ecf;
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: rgba(255, 255, 255, 0.7);
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.15);
        color: white;
    }

    @media (max-width: 768px) {
        .map-sidebar {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            max-height: 50%;
            border-left: none;
            border-top: 1px solid rgba(47, 168, 255, 0.2);
            border-radius: 12px 12px 0 0;
        }

        .map-picker {
            height: 50%;
        }
    }
</style>

<script>
let map;
let marker = null;
let selectedLat = null;
let selectedLon = null;

document.addEventListener('DOMContentLoaded', function() {
    // Initialiser la carte
    map = L.map('map').setView([48.8566, 2.3522], 12); // Paris par défaut

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Click sur la carte pour placer le marqueur
    map.on('click', function(e) {
        placeMarker(e.latlng.lat, e.latlng.lng);
    });
});

function placeMarker(lat, lon) {
    selectedLat = lat;
    selectedLon = lon;

    // Supprimer l'ancien marqueur
    if (marker) {
        map.removeLayer(marker);
    }

    // Créer un nouveau marqueur
    marker = L.marker([lat, lon], {
        icon: L.icon({
            iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-icon.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-shadow.png',
            iconSize: [25, 41],
            shadowSize: [41, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
        })
    }).addTo(map);

    // Mettre à jour les inputs
    document.getElementById('latInput').value = lat.toFixed(6);
    document.getElementById('lonInput').value = lon.toFixed(6);

    // Centrer sur le marqueur
    map.setView([lat, lon], 16);
}

function searchAddress() {
    const address = document.getElementById('addressSearch').value;
    if (!address) {
        alert('Veuillez entrer une adresse');
        return;
    }

    // Utiliser Nominatim (gratuit, OpenStreetMap)
    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=\${encodeURIComponent(address)}`)
        .then(response => response.json())
        .then(data => {
            if (data.length === 0) {
                alert('Adresse non trouvée');
                return;
            }

            const result = data[0];
            placeMarker(parseFloat(result.lat), parseFloat(result.lon));
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Erreur lors de la recherche');
        });
}

function confirmLocation() {
    if (selectedLat === null || selectedLon === null) {
        alert('Veuillez sélectionner une localisation en cliquant sur la carte');
        return;
    }

    console.log('📍 Envoi des coordonnées:', selectedLat, selectedLon);
    console.log('🪟 window.opener:', window.opener ? 'exists' : 'not found');

    // Envoyer les coordonnées au parent/opener (formulaire)
    if (window.opener) {
        window.opener.postMessage({
            action: 'setCoordinates',
            latitude: Number(selectedLat.toFixed(6)),
            longitude: Number(selectedLon.toFixed(6))
        }, '*');
        console.log('✅ postMessage envoyé via window.opener');
    } else if (window.parent && window.parent !== window) {
        window.parent.postMessage({
            action: 'setCoordinates',
            latitude: Number(selectedLat.toFixed(6)),
            longitude: Number(selectedLon.toFixed(6))
        }, '*');
        console.log('✅ postMessage envoyé via window.parent');
    } else {
        console.log('❌ Impossible d\\'envoyer le message');
    }

    // Afficher confirmation
    alert('✓ Localisation confirmée: ' + selectedLat.toFixed(4) + ', ' + selectedLon.toFixed(4));

    // Fermer après un délai pour laisser le temps au postMessage
    setTimeout(() => {
        window.close();
    }, 500);
}

function clearLocation() {
    if (marker) {
        map.removeLayer(marker);
        marker = null;
    }
    selectedLat = null;
    selectedLon = null;
    document.getElementById('latInput').value = '';
    document.getElementById('lonInput').value = '';
}

window.placeMarker = placeMarker;
window.searchAddress = searchAddress;
window.confirmLocation = confirmLocation;
window.clearLocation = clearLocation;
</script>
{% endblock %}
", "admin/map/location_picker.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\map\\location_picker.html.twig");
    }
}
