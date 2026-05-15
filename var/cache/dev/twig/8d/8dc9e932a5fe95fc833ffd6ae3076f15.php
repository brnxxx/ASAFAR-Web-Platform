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

/* admin/posts/_statistics_modal_content.html.twig */
class __TwigTemplate_fdeac97d39c7672a781c61290d0ae26f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/_statistics_modal_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/_statistics_modal_content.html.twig"));

        // line 1
        yield "<div class=\"stats-pro-wrapper\">
    <div class=\"stats-hero\">
        <div class=\"stats-hero-left\">
            <h2>Dashboard statistiques avancées</h2>
            <p>Analyse intelligente des publications, interactions et performance globale.</p>
        </div>
        <div class=\"stats-hero-badge\">
            <span>Live Analytics</span>
        </div>
    </div>

    <div class=\"stats-kpi-grid\">
        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Total publications</div>
            <div class=\"stats-kpi-value\" data-counter=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 15, $this->source); })()), "totalPosts", [], "any", false, false, false, 15), "html", null, true);
        yield "\">0</div>
            <div class=\"stats-kpi-sub\">Nombre total des posts publiés</div>
        </div>

        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Total commentaires</div>
            <div class=\"stats-kpi-value\" data-counter=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 21, $this->source); })()), "totalComments", [], "any", false, false, false, 21), "html", null, true);
        yield "\">0</div>
            <div class=\"stats-kpi-sub\">Interactions textuelles</div>
        </div>

        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Total likes</div>
            <div class=\"stats-kpi-value\" data-counter=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 27, $this->source); })()), "totalLikes", [], "any", false, false, false, 27), "html", null, true);
        yield "\">0</div>
            <div class=\"stats-kpi-sub\">Réactions positives</div>
        </div>

        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Moyenne commentaires / post</div>
            <div class=\"stats-kpi-value\" data-counter=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 33, $this->source); })()), "avgCommentsPerPost", [], "any", false, false, false, 33), "html", null, true);
        yield "\">0</div>
            <div class=\"stats-kpi-sub\">Niveau de discussion</div>
        </div>

        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Moyenne likes / post</div>
            <div class=\"stats-kpi-value\" data-counter=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "avgLikesPerPost", [], "any", false, false, false, 39), "html", null, true);
        yield "\">0</div>
            <div class=\"stats-kpi-sub\">Popularité moyenne</div>
        </div>

        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Score engagement</div>
            <div class=\"stats-kpi-value\" data-counter=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 45, $this->source); })()), "engagementRate", [], "any", false, false, false, 45), "html", null, true);
        yield "\">0</div>
            <div class=\"stats-kpi-sub\">Likes + commentaires / publication</div>
        </div>
    </div>

    <div class=\"stats-charts-grid\">
        <div class=\"stats-chart-card stats-chart-large\">
            <div class=\"stats-card-head\">
                <h3>Évolution mensuelle des publications</h3>
                <span>Courbe dynamique</span>
            </div>
            <canvas id=\"monthlyPostsChart\"></canvas>
        </div>

        <div class=\"stats-chart-card\">
            <div class=\"stats-card-head\">
                <h3>Répartition par type</h3>
                <span>Donut chart</span>
            </div>
            <canvas id=\"postsTypeChart\"></canvas>
        </div>

        <div class=\"stats-chart-card\">
            <div class=\"stats-card-head\">
                <h3>Top publications likées</h3>
                <span>Barres</span>
            </div>
            <canvas id=\"topLikedChart\"></canvas>
        </div>

        <div class=\"stats-chart-card\">
            <div class=\"stats-card-head\">
                <h3>Top publications commentées</h3>
                <span>Barres</span>
            </div>
            <canvas id=\"topCommentedChart\"></canvas>
        </div>

        <div class=\"stats-chart-card stats-chart-large\">
            <div class=\"stats-card-head\">
                <h3>Performance globale</h3>
                <span>Radar</span>
            </div>
            <canvas id=\"performanceRadarChart\"></canvas>
        </div>
    </div>

    <div class=\"stats-tables-grid\">
        <div class=\"stats-table-card\">
            <div class=\"stats-card-head\">
                <h3>Top 5 auteurs les plus actifs</h3>
                <span>Classement</span>
            </div>

            <div class=\"stats-table-wrap\">
                <table class=\"stats-pro-table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Auteur</th>
                            <th>Publications</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topActiveAuthors"]) || array_key_exists("topActiveAuthors", $context) ? $context["topActiveAuthors"] : (function () { throw new RuntimeError('Variable "topActiveAuthors" does not exist.', 109, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 110
            yield "                            <tr>
                                <td>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "idUser", [], "any", false, false, false, 111), "html", null, true);
            yield "</td>
                                <td>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "auteur", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                                <td>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "posts_count", [], "any", false, false, false, 113), "html", null, true);
            yield "</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 115
        if (!$context['_iterated']) {
            // line 116
            yield "                            <tr>
                                <td colspan=\"3\">Aucune donnée disponible</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"stats-table-card\">
            <div class=\"stats-card-head\">
                <h3>Classement global de performance</h3>
                <span>Score = likes + commentaires</span>
            </div>

            <div class=\"stats-table-wrap\">
                <table class=\"stats-pro-table\">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Likes</th>
                            <th>Commentaires</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentPerformance"]) || array_key_exists("recentPerformance", $context) ? $context["recentPerformance"] : (function () { throw new RuntimeError('Variable "recentPerformance" does not exist.', 142, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 143
            yield "                            <tr>
                                <td>";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
                                <td>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "likes_count", [], "any", false, false, false, 145), "html", null, true);
            yield "</td>
                                <td>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "comments_count", [], "any", false, false, false, 146), "html", null, true);
            yield "</td>
                                <td><span class=\"stats-score-badge\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "score", [], "any", false, false, false, 147), "html", null, true);
            yield "</span></td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 149
        if (!$context['_iterated']) {
            // line 150
            yield "                            <tr>
                                <td colspan=\"4\">Aucune donnée disponible</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type=\"application/json\" id=\"stats-monthly-data\">
{
    \"labels\": ";
        // line 163
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["postsByMonth"]) || array_key_exists("postsByMonth", $context) ? $context["postsByMonth"] : (function () { throw new RuntimeError('Variable "postsByMonth" does not exist.', 163, $this->source); })()), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 163, $this->source); })()), "month_label", [], "any", false, false, false, 163); }));
        yield ",
    \"values\": ";
        // line 164
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["postsByMonth"]) || array_key_exists("postsByMonth", $context) ? $context["postsByMonth"] : (function () { throw new RuntimeError('Variable "postsByMonth" does not exist.', 164, $this->source); })()), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 164, $this->source); })()), "total", [], "any", false, false, false, 164) + 0); }));
        yield "
}
</script>

<script type=\"application/json\" id=\"stats-type-data\">
{
    \"labels\": ";
        // line 170
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["postsByType"]) || array_key_exists("postsByType", $context) ? $context["postsByType"] : (function () { throw new RuntimeError('Variable "postsByType" does not exist.', 170, $this->source); })()), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 170, $this->source); })()), "type", [], "any", false, false, false, 170)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 170, $this->source); })()), "type", [], "any", false, false, false, 170)) : ("Non défini")); }));
        yield ",
    \"values\": ";
        // line 171
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["postsByType"]) || array_key_exists("postsByType", $context) ? $context["postsByType"] : (function () { throw new RuntimeError('Variable "postsByType" does not exist.', 171, $this->source); })()), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 171, $this->source); })()), "total", [], "any", false, false, false, 171) + 0); }));
        yield "
}
</script>

<script type=\"application/json\" id=\"stats-liked-data\">
{
    \"labels\": ";
        // line 177
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["topLikedPosts"]) || array_key_exists("topLikedPosts", $context) ? $context["topLikedPosts"] : (function () { throw new RuntimeError('Variable "topLikedPosts" does not exist.', 177, $this->source); })()), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 177, $this->source); })()), "titre", [], "any", false, false, false, 177); }));
        yield ",
    \"values\": ";
        // line 178
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["topLikedPosts"]) || array_key_exists("topLikedPosts", $context) ? $context["topLikedPosts"] : (function () { throw new RuntimeError('Variable "topLikedPosts" does not exist.', 178, $this->source); })()), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 178, $this->source); })()), "likes_count", [], "any", false, false, false, 178) + 0); }));
        yield "
}
</script>

<script type=\"application/json\" id=\"stats-commented-data\">
{
    \"labels\": ";
        // line 184
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["topCommentedPosts"]) || array_key_exists("topCommentedPosts", $context) ? $context["topCommentedPosts"] : (function () { throw new RuntimeError('Variable "topCommentedPosts" does not exist.', 184, $this->source); })()), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 184, $this->source); })()), "titre", [], "any", false, false, false, 184); }));
        yield ",
    \"values\": ";
        // line 185
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["topCommentedPosts"]) || array_key_exists("topCommentedPosts", $context) ? $context["topCommentedPosts"] : (function () { throw new RuntimeError('Variable "topCommentedPosts" does not exist.', 185, $this->source); })()), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 185, $this->source); })()), "comments_count", [], "any", false, false, false, 185) + 0); }));
        yield "
}
</script>

<script type=\"application/json\" id=\"stats-performance-data\">
{
    \"labels\": ";
        // line 191
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recentPerformance"]) || array_key_exists("recentPerformance", $context) ? $context["recentPerformance"] : (function () { throw new RuntimeError('Variable "recentPerformance" does not exist.', 191, $this->source); })()), 0, 6), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 191, $this->source); })()), "titre", [], "any", false, false, false, 191); }));
        yield ",
    \"values\": ";
        // line 192
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recentPerformance"]) || array_key_exists("recentPerformance", $context) ? $context["recentPerformance"] : (function () { throw new RuntimeError('Variable "recentPerformance" does not exist.', 192, $this->source); })()), 0, 6), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 192, $this->source); })()), "score", [], "any", false, false, false, 192) + 0); }));
        yield "
}
</script>

<style>
.stats-pro-wrapper {
    display: grid;
    gap: 22px;
    animation: statsFadeIn .45s ease;
}

@keyframes statsFadeIn {
    from { opacity: 0; transform: translateY(14px); }
    to { opacity: 1; transform: translateY(0); }
}

.stats-hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    padding: 22px;
    border-radius: 24px;
    background: linear-gradient(135deg, rgba(255,255,255,0.05) 0%, rgba(46,168,255,0.08) 100%);
    border: 1px solid rgba(255,255,255,0.08);
}

.stats-hero-left h2 {
    margin: 0 0 8px;
    color: #f4f8ff;
    font-size: 28px;
    font-weight: 900;
}

.stats-hero-left p {
    margin: 0;
    color: #a8bfdc;
    font-size: 14px;
}

.stats-hero-badge {
    padding: 10px 16px;
    border-radius: 999px;
    background: linear-gradient(135deg, #00d5a6 0%, #0ea5e9 100%);
    color: white;
    font-weight: 800;
    font-size: 13px;
    white-space: nowrap;
    box-shadow: 0 10px 26px rgba(14,165,233,0.22);
}

.stats-kpi-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 16px;
}

.stats-kpi-card {
    background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.02) 100%);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 22px;
    padding: 20px;
    box-shadow: 0 14px 30px rgba(0,0,0,0.16);
    position: relative;
    overflow: hidden;
}

.stats-kpi-card::before {
    content: \"\";
    position: absolute;
    inset: 0 auto auto 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, #00d5a6 0%, #2ea8ff 50%, #ffbf1b 100%);
}

.stats-kpi-label {
    color: #9bb5d4;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 10px;
}

.stats-kpi-value {
    color: #ffffff;
    font-size: 34px;
    font-weight: 900;
    line-height: 1;
}

.stats-kpi-sub {
    color: #ffd56b;
    font-size: 12px;
    font-weight: 700;
    margin-top: 10px;
}

.stats-charts-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
}

.stats-chart-card,
.stats-table-card {
    background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.02) 100%);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 24px;
    padding: 20px;
    box-shadow: 0 14px 30px rgba(0,0,0,0.16);
}

.stats-chart-large {
    grid-column: span 2;
}

.stats-card-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    margin-bottom: 16px;
}

.stats-card-head h3 {
    margin: 0;
    color: #f4f8ff;
    font-size: 18px;
    font-weight: 800;
}

.stats-card-head span {
    color: #8fd2ff;
    font-size: 12px;
    font-weight: 700;
    white-space: nowrap;
}

.stats-table-wrap {
    overflow-x: auto;
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,0.06);
}

.stats-pro-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 500px;
}

.stats-pro-table th {
    background: rgba(6,23,46,0.96);
    color: #8fd2ff;
    padding: 14px;
    text-align: left;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
}

.stats-pro-table td {
    padding: 12px 14px;
    color: #e5eefc;
    border-top: 1px solid rgba(255,255,255,0.05);
    font-size: 13px;
}

.stats-pro-table tr:hover td {
    background: rgba(46,168,255,0.04);
}

.stats-score-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 42px;
    padding: 6px 10px;
    border-radius: 999px;
    background: linear-gradient(135deg, #ffbf1b 0%, #ff9f0a 100%);
    color: #08233f;
    font-weight: 900;
    font-size: 12px;
}

.stats-tables-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px;
}

.stats-chart-card canvas {
    width: 100% !important;
    max-height: 320px !important;
}

@media (max-width: 1100px) {
    .stats-kpi-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .stats-charts-grid,
    .stats-tables-grid {
        grid-template-columns: 1fr;
    }

    .stats-chart-large {
        grid-column: span 1;
    }
}

@media (max-width: 700px) {
    .stats-kpi-grid {
        grid-template-columns: 1fr;
    }

    .stats-hero {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/posts/_statistics_modal_content.html.twig";
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
        return array (  339 => 192,  335 => 191,  326 => 185,  322 => 184,  313 => 178,  309 => 177,  300 => 171,  296 => 170,  287 => 164,  283 => 163,  272 => 154,  263 => 150,  261 => 149,  254 => 147,  250 => 146,  246 => 145,  242 => 144,  239 => 143,  234 => 142,  210 => 120,  201 => 116,  199 => 115,  192 => 113,  188 => 112,  184 => 111,  181 => 110,  176 => 109,  109 => 45,  100 => 39,  91 => 33,  82 => 27,  73 => 21,  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"stats-pro-wrapper\">
    <div class=\"stats-hero\">
        <div class=\"stats-hero-left\">
            <h2>Dashboard statistiques avancées</h2>
            <p>Analyse intelligente des publications, interactions et performance globale.</p>
        </div>
        <div class=\"stats-hero-badge\">
            <span>Live Analytics</span>
        </div>
    </div>

    <div class=\"stats-kpi-grid\">
        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Total publications</div>
            <div class=\"stats-kpi-value\" data-counter=\"{{ stats.totalPosts }}\">0</div>
            <div class=\"stats-kpi-sub\">Nombre total des posts publiés</div>
        </div>

        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Total commentaires</div>
            <div class=\"stats-kpi-value\" data-counter=\"{{ stats.totalComments }}\">0</div>
            <div class=\"stats-kpi-sub\">Interactions textuelles</div>
        </div>

        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Total likes</div>
            <div class=\"stats-kpi-value\" data-counter=\"{{ stats.totalLikes }}\">0</div>
            <div class=\"stats-kpi-sub\">Réactions positives</div>
        </div>

        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Moyenne commentaires / post</div>
            <div class=\"stats-kpi-value\" data-counter=\"{{ stats.avgCommentsPerPost }}\">0</div>
            <div class=\"stats-kpi-sub\">Niveau de discussion</div>
        </div>

        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Moyenne likes / post</div>
            <div class=\"stats-kpi-value\" data-counter=\"{{ stats.avgLikesPerPost }}\">0</div>
            <div class=\"stats-kpi-sub\">Popularité moyenne</div>
        </div>

        <div class=\"stats-kpi-card\">
            <div class=\"stats-kpi-label\">Score engagement</div>
            <div class=\"stats-kpi-value\" data-counter=\"{{ stats.engagementRate }}\">0</div>
            <div class=\"stats-kpi-sub\">Likes + commentaires / publication</div>
        </div>
    </div>

    <div class=\"stats-charts-grid\">
        <div class=\"stats-chart-card stats-chart-large\">
            <div class=\"stats-card-head\">
                <h3>Évolution mensuelle des publications</h3>
                <span>Courbe dynamique</span>
            </div>
            <canvas id=\"monthlyPostsChart\"></canvas>
        </div>

        <div class=\"stats-chart-card\">
            <div class=\"stats-card-head\">
                <h3>Répartition par type</h3>
                <span>Donut chart</span>
            </div>
            <canvas id=\"postsTypeChart\"></canvas>
        </div>

        <div class=\"stats-chart-card\">
            <div class=\"stats-card-head\">
                <h3>Top publications likées</h3>
                <span>Barres</span>
            </div>
            <canvas id=\"topLikedChart\"></canvas>
        </div>

        <div class=\"stats-chart-card\">
            <div class=\"stats-card-head\">
                <h3>Top publications commentées</h3>
                <span>Barres</span>
            </div>
            <canvas id=\"topCommentedChart\"></canvas>
        </div>

        <div class=\"stats-chart-card stats-chart-large\">
            <div class=\"stats-card-head\">
                <h3>Performance globale</h3>
                <span>Radar</span>
            </div>
            <canvas id=\"performanceRadarChart\"></canvas>
        </div>
    </div>

    <div class=\"stats-tables-grid\">
        <div class=\"stats-table-card\">
            <div class=\"stats-card-head\">
                <h3>Top 5 auteurs les plus actifs</h3>
                <span>Classement</span>
            </div>

            <div class=\"stats-table-wrap\">
                <table class=\"stats-pro-table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Auteur</th>
                            <th>Publications</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in topActiveAuthors %}
                            <tr>
                                <td>{{ item.idUser }}</td>
                                <td>{{ item.auteur }}</td>
                                <td>{{ item.posts_count }}</td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"3\">Aucune donnée disponible</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"stats-table-card\">
            <div class=\"stats-card-head\">
                <h3>Classement global de performance</h3>
                <span>Score = likes + commentaires</span>
            </div>

            <div class=\"stats-table-wrap\">
                <table class=\"stats-pro-table\">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Likes</th>
                            <th>Commentaires</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in recentPerformance %}
                            <tr>
                                <td>{{ item.titre }}</td>
                                <td>{{ item.likes_count }}</td>
                                <td>{{ item.comments_count }}</td>
                                <td><span class=\"stats-score-badge\">{{ item.score }}</span></td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\">Aucune donnée disponible</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type=\"application/json\" id=\"stats-monthly-data\">
{
    \"labels\": {{ postsByMonth|map(item => item.month_label)|json_encode|raw }},
    \"values\": {{ postsByMonth|map(item => item.total + 0)|json_encode|raw }}
}
</script>

<script type=\"application/json\" id=\"stats-type-data\">
{
    \"labels\": {{ postsByType|map(item => item.type ?: 'Non défini')|json_encode|raw }},
    \"values\": {{ postsByType|map(item => item.total + 0)|json_encode|raw }}
}
</script>

<script type=\"application/json\" id=\"stats-liked-data\">
{
    \"labels\": {{ topLikedPosts|map(item => item.titre)|json_encode|raw }},
    \"values\": {{ topLikedPosts|map(item => item.likes_count + 0)|json_encode|raw }}
}
</script>

<script type=\"application/json\" id=\"stats-commented-data\">
{
    \"labels\": {{ topCommentedPosts|map(item => item.titre)|json_encode|raw }},
    \"values\": {{ topCommentedPosts|map(item => item.comments_count + 0)|json_encode|raw }}
}
</script>

<script type=\"application/json\" id=\"stats-performance-data\">
{
    \"labels\": {{ recentPerformance|slice(0, 6)|map(item => item.titre)|json_encode|raw }},
    \"values\": {{ recentPerformance|slice(0, 6)|map(item => item.score + 0)|json_encode|raw }}
}
</script>

<style>
.stats-pro-wrapper {
    display: grid;
    gap: 22px;
    animation: statsFadeIn .45s ease;
}

@keyframes statsFadeIn {
    from { opacity: 0; transform: translateY(14px); }
    to { opacity: 1; transform: translateY(0); }
}

.stats-hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    padding: 22px;
    border-radius: 24px;
    background: linear-gradient(135deg, rgba(255,255,255,0.05) 0%, rgba(46,168,255,0.08) 100%);
    border: 1px solid rgba(255,255,255,0.08);
}

.stats-hero-left h2 {
    margin: 0 0 8px;
    color: #f4f8ff;
    font-size: 28px;
    font-weight: 900;
}

.stats-hero-left p {
    margin: 0;
    color: #a8bfdc;
    font-size: 14px;
}

.stats-hero-badge {
    padding: 10px 16px;
    border-radius: 999px;
    background: linear-gradient(135deg, #00d5a6 0%, #0ea5e9 100%);
    color: white;
    font-weight: 800;
    font-size: 13px;
    white-space: nowrap;
    box-shadow: 0 10px 26px rgba(14,165,233,0.22);
}

.stats-kpi-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 16px;
}

.stats-kpi-card {
    background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.02) 100%);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 22px;
    padding: 20px;
    box-shadow: 0 14px 30px rgba(0,0,0,0.16);
    position: relative;
    overflow: hidden;
}

.stats-kpi-card::before {
    content: \"\";
    position: absolute;
    inset: 0 auto auto 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, #00d5a6 0%, #2ea8ff 50%, #ffbf1b 100%);
}

.stats-kpi-label {
    color: #9bb5d4;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 10px;
}

.stats-kpi-value {
    color: #ffffff;
    font-size: 34px;
    font-weight: 900;
    line-height: 1;
}

.stats-kpi-sub {
    color: #ffd56b;
    font-size: 12px;
    font-weight: 700;
    margin-top: 10px;
}

.stats-charts-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
}

.stats-chart-card,
.stats-table-card {
    background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.02) 100%);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 24px;
    padding: 20px;
    box-shadow: 0 14px 30px rgba(0,0,0,0.16);
}

.stats-chart-large {
    grid-column: span 2;
}

.stats-card-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    margin-bottom: 16px;
}

.stats-card-head h3 {
    margin: 0;
    color: #f4f8ff;
    font-size: 18px;
    font-weight: 800;
}

.stats-card-head span {
    color: #8fd2ff;
    font-size: 12px;
    font-weight: 700;
    white-space: nowrap;
}

.stats-table-wrap {
    overflow-x: auto;
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,0.06);
}

.stats-pro-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 500px;
}

.stats-pro-table th {
    background: rgba(6,23,46,0.96);
    color: #8fd2ff;
    padding: 14px;
    text-align: left;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
}

.stats-pro-table td {
    padding: 12px 14px;
    color: #e5eefc;
    border-top: 1px solid rgba(255,255,255,0.05);
    font-size: 13px;
}

.stats-pro-table tr:hover td {
    background: rgba(46,168,255,0.04);
}

.stats-score-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 42px;
    padding: 6px 10px;
    border-radius: 999px;
    background: linear-gradient(135deg, #ffbf1b 0%, #ff9f0a 100%);
    color: #08233f;
    font-weight: 900;
    font-size: 12px;
}

.stats-tables-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px;
}

.stats-chart-card canvas {
    width: 100% !important;
    max-height: 320px !important;
}

@media (max-width: 1100px) {
    .stats-kpi-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .stats-charts-grid,
    .stats-tables-grid {
        grid-template-columns: 1fr;
    }

    .stats-chart-large {
        grid-column: span 1;
    }
}

@media (max-width: 700px) {
    .stats-kpi-grid {
        grid-template-columns: 1fr;
    }

    .stats-hero {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>", "admin/posts/_statistics_modal_content.html.twig", "C:\\Users\\ibrnx\\Downloads\\projet final symf+java\\integfinal\\integfinal\\templates\\admin\\posts\\_statistics_modal_content.html.twig");
    }
}
