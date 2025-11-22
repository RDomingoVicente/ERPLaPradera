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

/* Updater.html.twig */
class __TwigTemplate_1894602c12d64394c0590c04a41297e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["Utils"] = $this->macros["Utils"] = $this->loadTemplate("Macro/Utils.html.twig", "Updater.html.twig", 21)->unwrap();
        // line 22
        $macros["__internal_parse_0"] = $this->macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Updater.html.twig", 22)->unwrap();
        // line 20
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Updater.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "    ";
        yield from         $this->loadTemplate("Macro/Toasts.html.twig", "Updater.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 29
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["error", "critical"], "danger"], 29, $context, $this->getSourceContext());
        yield "
                ";
        // line 30
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["warning"], "warning"], 30, $context, $this->getSourceContext());
        yield "
                ";
        // line 31
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["notice"], "success"], 31, $context, $this->getSourceContext());
        yield "
                ";
        // line 32
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["info"], "info"], 32, $context, $this->getSourceContext());
        yield "
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"container\">
        <div class=\"row pt-3 pb-3\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("AdminPlugins"), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"fa-solid fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("plugins"), "html", null, true);
        yield " </span>
                    </a>
                    <a href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 47), "html", null, true);
        yield "\" class=\"btn btn-secondary\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        yield "\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 51), "ready", [], "method", false, false, false, 51)) {
            // line 52
            yield "                    <button class=\"btn btn-secondary\" type=\"button\" data-bs-toggle=\"modal\"
                            data-bs-target=\"#modalTelemetry\">
                        <i class=\"fa-solid fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("manage-installation"), "html", null, true);
            yield " </span>
                    </button>
                ";
        } else {
            // line 58
            yield "                    <button class=\"btn btn-warning\" type=\"button\" data-bs-toggle=\"modal\"
                            data-bs-target=\"#modalTelemetry\">
                        <i class=\"fa-solid fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            yield "</span>
                    </button>
                ";
        }
        // line 64
        yield "            </div>
            <div class=\"col-sm-6 text-end\">
                <h1 class=\"h3\">
                    ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("updater"), "html", null, true);
        yield "
                    <small class=\"text-info\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCoreVersion", [], "method", false, false, false, 68), "html", null, true);
        yield "</small>
                    <i class=\"fa-solid fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm\">
                <div class=\"card shadow-sm mb-4\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <thead>
                            <tr>
                                <th scope=\"col\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("component"), "html", null, true);
        yield "</th>
                                <th scope=\"col\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
        yield "</th>
                                <th scope=\"col\" class=\"text-end\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("action"), "html", null, true);
        yield "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "updaterItems", [], "any", false, false, false, 86));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            yield "                                <tr class=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "stable", [], "any", false, false, false, 87)) ? ("table-success") : ("table-warning"));
            yield "\">
                                    <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                                    <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
                                    <td class=\"text-end\">
                                        ";
            // line 91
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "mincore", [], "any", false, false, false, 91) > CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCoreVersion", [], "method", false, false, false, 91))) {
                // line 92
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("requires-core", ["%version%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "mincore", [], "any", false, false, false, 92)]), "html", null, true);
                yield "
                                        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 93
$context["item"], "downloaded", [], "any", false, false, false, 93)) {
                // line 94
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 94), "html", null, true);
                yield "?action=update&item=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 94), "html", null, true);
                yield "\"
                                               class=\"btn btn-spin-action btn-sm btn-success\"
                                               onclick=\"animateSpinner('add')\">
                                                <i class=\"fa-solid fa-rocket fa-fw\"
                                                   aria-hidden=\"true\"></i> ";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("update"), "html", null, true);
                yield "
                                            </a>
                                            <a href=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 100), "html", null, true);
                yield "?action=cancel&item=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 100), "html", null, true);
                yield "\"
                                               class=\"btn btn-spin-action btn-sm btn-warning\"
                                               onclick=\"animateSpinner('add')\">
                                                <i class=\"fa-solid fa-times fa-fw\"
                                                   aria-hidden=\"true\"></i> ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
                yield "
                                            </a>
                                        ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 106
$context["item"], "name", [], "any", false, false, false, 106) == "CORE") && CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 106))) {
                // line 107
                yield "                                            <button type=\"button\" class=\"btn btn-spin-action btn-warning\"
                                                    data-bs-toggle=\"modal\"
                                                    data-bs-target=\"#coreWarningModal\">";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                yield "
                                            </button>
                                        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 111
$context["item"], "stable", [], "any", false, false, false, 111)) {
                // line 112
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 112), "html", null, true);
                yield "?action=download&item=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 112), "html", null, true);
                yield "\"
                                               class=\"btn btn-spin-action btn-sm btn-secondary\"
                                               onclick=\"animateSpinner('add')\">";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                yield "
                                            </a>
                                        ";
            } else {
                // line 117
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 117), "html", null, true);
                yield "?action=download&item=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 117), "html", null, true);
                yield "\"
                                               class=\"btn btn-spin-action btn-sm btn-outline-warning\"
                                               onclick=\"animateSpinner('add')\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("beta"), "html", null, true);
                yield "
                                            </a>
                                        ";
            }
            // line 122
            yield "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 125
            yield "                                <tr class=\"table-success\">
                                    <td colspan=\"3\">
                                        <p class=\"p-2 mb-0\">✅ ";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("no-updates-now"), "html", null, true);
            yield "</p>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
                ";
        // line 135
        if ($this->env->getFunction('settings')->getCallable()("default", "enableupdatesbeta", false)) {
            // line 136
            yield "                    <hr/>
                    <div class=\"card shadow-sm mt-4 mb-4\">
                        <div class=\"card-body\">
                            <h5>
                                <i class=\"fa-solid fa-flask-vial text-danger me-2\" aria-hidden=\"true\"></i>
                                ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("updates-beta-warning"), "html", null, true);
            yield "
                            </h5>
                            <p class=\"card-text\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("updates-beta-warning-p"), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"card-footer p-2\">
                            <form method=\"post\">
                                ";
            // line 147
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
                                <input type=\"hidden\" name=\"action\" value=\"disable-beta\"/>
                                <button type=\"submit\" class=\"btn btn-sm btn-outline-secondary btn-spin-action\">
                                    ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("disable"), "html", null, true);
            yield "
                                </button>
                            </form>
                        </div>
                    </div>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 155
($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 155), "ready", [], "method", false, false, false, 155) == false)) {
            // line 156
            yield "                    <hr/>
                    <div class=\"mt-4 mb-3\">
                        ";
            // line 158
            yield CoreExtension::callMacro($macros["Utils"], "macro_registerInstall", [false], 158, $context, $this->getSourceContext());
            yield "
                    </div>
                ";
        }
        // line 161
        yield "            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modalTelemetry\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 167
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 167), "ready", [], "method", false, false, false, 167)) {
            // line 168
            yield "                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fa-solid fa-registered me-1\"></i>
                            ";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("registered-installation", ["%number%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 171), "id", [], "method", false, false, false, 171)]), "html", null, true);
            yield "
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                                aria-label=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            yield "\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <p>";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("registered-installation-p"), "html", null, true);
            yield "</p>
                        <p>";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("telemetry-data-to-send"), "html", null, true);
            yield "</p>
                        <a class=\"btn btn-primary float-start\" href=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 179), "html", null, true);
            yield "?action=claim-install\"
                           target=\"_blank\">
                            ";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("manage"), "html", null, true);
            yield "
                        </a>
                        <form action=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 183), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
                            ";
            // line 184
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
                            <input type=\"hidden\" name=\"action\" value=\"unlink\"/>
                            <button type=\"submit\" class=\"btn btn-danger btn-spin-action float-end\">
                                ";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("unlink"), "html", null, true);
            yield "
                            </button>
                        </form>
                    </div>
                ";
        } else {
            // line 192
            yield "                    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 192), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
                        ";
            // line 193
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
                        <input type=\"hidden\" name=\"action\" value=\"register\"/>
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">
                                <i class=\"fa-solid fa-registered me-1\"></i> ";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            yield "
                            </h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                                    aria-label=\"";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            yield "\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <p>";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-installation-p"), "html", null, true);
            yield "</p>
                            <p>";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("telemetry-data-to-send"), "html", null, true);
            yield "</p>
                            <button type=\"submit\" class=\"btn btn-primary btn-spin-action w-100\">
                                ";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            yield "
                            </button>
                        </div>
                    </form>
                ";
        }
        // line 211
        yield "            </div>
        </div>
    </div>
    ";
        // line 214
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 214)) {
            // line 215
            yield "        <div class=\"modal fade\" id=\"coreWarningModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fa-solid fa-exclamation-triangle me-1\" aria-hidden=\"true\"></i>
                            ";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("core-update-warning"), "html", null, true);
            yield "
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"mb-0\">
                            ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 227));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 228
                yield "                                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            yield "                        </ul>
                    </div>
                    <div class=\"modal-footer\">
                        ";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "updaterItems", [], "any", false, false, false, 233));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 234
                yield "                            ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 234) == "CORE") && CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 234))) {
                    // line 235
                    yield "                                <div class=\"btn-group\">
                                    <a href=\"";
                    // line 236
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 236), "html", null, true);
                    yield "?action=download&item=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 236), "html", null, true);
                    yield "&disable=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 236)), ","), "html", null, true);
                    yield "\"
                                       class=\"btn btn-spin-action btn-warning\"
                                       onclick=\"animateSpinner('add')\">";
                    // line 238
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                    yield "
                                    </a>
                                    <button type=\"button\"
                                            class=\"btn btn-spin-action btn-warning dropdown-toggle dropdown-toggle-split\"
                                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <span class=\"visually-hidden\">";
                    // line 243
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("options"), "html", null, true);
                    yield "</span>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a href=\"";
                    // line 246
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 246), "html", null, true);
                    yield "?action=download&item=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 246), "html", null, true);
                    yield "\"
                                           class=\"btn btn-warning\"
                                           onclick=\"animateSpinner('add')\">";
                    // line 248
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("do-not-disable-plugins"), "html", null, true);
                    yield "
                                        </a>
                                    </div>
                                </div>
                            ";
                }
                // line 253
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            yield "                    </div>
                </div>
            </div>
        </div>
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Updater.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  551 => 254,  545 => 253,  537 => 248,  530 => 246,  524 => 243,  516 => 238,  507 => 236,  504 => 235,  501 => 234,  497 => 233,  492 => 230,  483 => 228,  479 => 227,  470 => 221,  462 => 215,  460 => 214,  455 => 211,  447 => 206,  442 => 204,  438 => 203,  432 => 200,  426 => 197,  419 => 193,  414 => 192,  406 => 187,  400 => 184,  396 => 183,  391 => 181,  386 => 179,  382 => 178,  378 => 177,  372 => 174,  366 => 171,  361 => 168,  359 => 167,  351 => 161,  345 => 158,  341 => 156,  339 => 155,  331 => 150,  325 => 147,  318 => 143,  313 => 141,  306 => 136,  304 => 135,  298 => 131,  288 => 127,  284 => 125,  277 => 122,  271 => 119,  263 => 117,  257 => 114,  249 => 112,  247 => 111,  242 => 109,  238 => 107,  236 => 106,  231 => 104,  222 => 100,  217 => 98,  207 => 94,  205 => 93,  200 => 92,  198 => 91,  193 => 89,  189 => 88,  184 => 87,  179 => 86,  172 => 82,  168 => 81,  164 => 80,  149 => 68,  145 => 67,  140 => 64,  134 => 61,  129 => 58,  123 => 55,  118 => 52,  116 => 51,  107 => 47,  102 => 45,  97 => 43,  91 => 39,  87 => 38,  77 => 32,  73 => 31,  69 => 30,  65 => 29,  60 => 26,  57 => 25,  53 => 24,  48 => 20,  46 => 22,  44 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see http://www.gnu.org/licenses/.
 */
#}
{% extends \"Master/MenuTemplate.html.twig\" %}
{% import 'Macro/Utils.html.twig' as Utils %}
{% from 'Macro/Utils.html.twig' import messageCompat as showMessage %}

{% block messages %}
    {% include 'Macro/Toasts.html.twig' %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                {{ showMessage(log, ['error', 'critical'], 'danger') }}
                {{ showMessage(log, ['warning'], 'warning') }}
                {{ showMessage(log, ['notice'], 'success') }}
                {{ showMessage(log, ['info'], 'info') }}
            </div>
        </div>
    </div>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row pt-3 pb-3\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a href=\"{{ asset('AdminPlugins') }}\" class=\"btn btn-secondary\">
                        <i class=\"fa-solid fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">{{ trans('plugins') }} </span>
                    </a>
                    <a href=\"{{ fsc.url() }}\" class=\"btn btn-secondary\" title=\"{{ trans('refresh') }}\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                {% if fsc.telemetryManager.ready() %}
                    <button class=\"btn btn-secondary\" type=\"button\" data-bs-toggle=\"modal\"
                            data-bs-target=\"#modalTelemetry\">
                        <i class=\"fa-solid fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">{{ trans('manage-installation') }} </span>
                    </button>
                {% else %}
                    <button class=\"btn btn-warning\" type=\"button\" data-bs-toggle=\"modal\"
                            data-bs-target=\"#modalTelemetry\">
                        <i class=\"fa-solid fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">{{ trans('register-installation') }}</span>
                    </button>
                {% endif %}
            </div>
            <div class=\"col-sm-6 text-end\">
                <h1 class=\"h3\">
                    {{ trans('updater') }}
                    <small class=\"text-info\">{{ fsc.getCoreVersion() }}</small>
                    <i class=\"fa-solid fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm\">
                <div class=\"card shadow-sm mb-4\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <thead>
                            <tr>
                                <th scope=\"col\">{{ trans('component') }}</th>
                                <th scope=\"col\">{{ trans('description') }}</th>
                                <th scope=\"col\" class=\"text-end\">{{ trans('action') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for item in fsc.updaterItems %}
                                <tr class=\"{{ item.stable ? 'table-success' : 'table-warning' }}\">
                                    <td>{{ item.name }}</td>
                                    <td>{{ item.description }}</td>
                                    <td class=\"text-end\">
                                        {% if item.mincore > fsc.getCoreVersion() %}
                                            {{ trans('requires-core', {'%version%': item.mincore}) }}
                                        {% elseif item.downloaded %}
                                            <a href=\"{{ fsc.url() }}?action=update&item={{ item.id }}\"
                                               class=\"btn btn-spin-action btn-sm btn-success\"
                                               onclick=\"animateSpinner('add')\">
                                                <i class=\"fa-solid fa-rocket fa-fw\"
                                                   aria-hidden=\"true\"></i> {{ trans('update') }}
                                            </a>
                                            <a href=\"{{ fsc.url() }}?action=cancel&item={{ item.id }}\"
                                               class=\"btn btn-spin-action btn-sm btn-warning\"
                                               onclick=\"animateSpinner('add')\">
                                                <i class=\"fa-solid fa-times fa-fw\"
                                                   aria-hidden=\"true\"></i> {{ trans('cancel') }}
                                            </a>
                                        {% elseif item.name == 'CORE' and fsc.coreUpdateWarnings %}
                                            <button type=\"button\" class=\"btn btn-spin-action btn-warning\"
                                                    data-bs-toggle=\"modal\"
                                                    data-bs-target=\"#coreWarningModal\">{{ trans('download') }}
                                            </button>
                                        {% elseif item.stable %}
                                            <a href=\"{{ fsc.url() }}?action=download&item={{ item.id }}\"
                                               class=\"btn btn-spin-action btn-sm btn-secondary\"
                                               onclick=\"animateSpinner('add')\">{{ trans('download') }}
                                            </a>
                                        {% else %}
                                            <a href=\"{{ fsc.url() }}?action=download&item={{ item.id }}\"
                                               class=\"btn btn-spin-action btn-sm btn-outline-warning\"
                                               onclick=\"animateSpinner('add')\">{{ trans('beta') }}
                                            </a>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% else %}
                                <tr class=\"table-success\">
                                    <td colspan=\"3\">
                                        <p class=\"p-2 mb-0\">✅ {{ trans('no-updates-now') }}</p>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
                {% if settings('default', 'enableupdatesbeta', false) %}
                    <hr/>
                    <div class=\"card shadow-sm mt-4 mb-4\">
                        <div class=\"card-body\">
                            <h5>
                                <i class=\"fa-solid fa-flask-vial text-danger me-2\" aria-hidden=\"true\"></i>
                                {{ trans('updates-beta-warning') }}
                            </h5>
                            <p class=\"card-text\">{{ trans('updates-beta-warning-p') }}</p>
                        </div>
                        <div class=\"card-footer p-2\">
                            <form method=\"post\">
                                {{ formToken() }}
                                <input type=\"hidden\" name=\"action\" value=\"disable-beta\"/>
                                <button type=\"submit\" class=\"btn btn-sm btn-outline-secondary btn-spin-action\">
                                    {{ trans('disable') }}
                                </button>
                            </form>
                        </div>
                    </div>
                {% elseif fsc.telemetryManager.ready() == false %}
                    <hr/>
                    <div class=\"mt-4 mb-3\">
                        {{ Utils.registerInstall(false) }}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modalTelemetry\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                {% if fsc.telemetryManager.ready() %}
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fa-solid fa-registered me-1\"></i>
                            {{ trans('registered-installation', {'%number%': fsc.telemetryManager.id()}) }}
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                                aria-label=\"{{ trans('close') }}\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <p>{{ trans('registered-installation-p') }}</p>
                        <p>{{ trans('telemetry-data-to-send') }}</p>
                        <a class=\"btn btn-primary float-start\" href=\"{{ fsc.url() }}?action=claim-install\"
                           target=\"_blank\">
                            {{ trans('manage') }}
                        </a>
                        <form action=\"{{ fsc.url() }}\" method=\"post\" onsubmit=\"animateSpinner('add')\">
                            {{ formToken() }}
                            <input type=\"hidden\" name=\"action\" value=\"unlink\"/>
                            <button type=\"submit\" class=\"btn btn-danger btn-spin-action float-end\">
                                {{ trans('unlink') }}
                            </button>
                        </form>
                    </div>
                {% else %}
                    <form action=\"{{ fsc.url() }}\" method=\"post\" onsubmit=\"animateSpinner('add')\">
                        {{ formToken() }}
                        <input type=\"hidden\" name=\"action\" value=\"register\"/>
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">
                                <i class=\"fa-solid fa-registered me-1\"></i> {{ trans('register-installation') }}
                            </h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                                    aria-label=\"{{ trans('close') }}\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <p>{{ trans('register-installation-p') }}</p>
                            <p>{{ trans('telemetry-data-to-send') }}</p>
                            <button type=\"submit\" class=\"btn btn-primary btn-spin-action w-100\">
                                {{ trans('register-installation') }}
                            </button>
                        </div>
                    </form>
                {% endif %}
            </div>
        </div>
    </div>
    {% if fsc.coreUpdateWarnings %}
        <div class=\"modal fade\" id=\"coreWarningModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fa-solid fa-exclamation-triangle me-1\" aria-hidden=\"true\"></i>
                            {{ trans('core-update-warning') }}
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"mb-0\">
                            {% for message in fsc.coreUpdateWarnings %}
                                <li>{{ message }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div class=\"modal-footer\">
                        {% for item in fsc.updaterItems %}
                            {% if item.name == 'CORE' and fsc.coreUpdateWarnings %}
                                <div class=\"btn-group\">
                                    <a href=\"{{ fsc.url() }}?action=download&item={{ item.id }}&disable={{ fsc.coreUpdateWarnings | keys | join(',') }}\"
                                       class=\"btn btn-spin-action btn-warning\"
                                       onclick=\"animateSpinner('add')\">{{ trans('download') }}
                                    </a>
                                    <button type=\"button\"
                                            class=\"btn btn-spin-action btn-warning dropdown-toggle dropdown-toggle-split\"
                                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <span class=\"visually-hidden\">{{ trans('options') }}</span>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-end\">
                                        <a href=\"{{ fsc.url() }}?action=download&item={{ item.id }}\"
                                           class=\"btn btn-warning\"
                                           onclick=\"animateSpinner('add')\">{{ trans('do-not-disable-plugins') }}
                                        </a>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "Updater.html.twig", "/var/www/html/Core/View/Updater.html.twig");
    }
}
