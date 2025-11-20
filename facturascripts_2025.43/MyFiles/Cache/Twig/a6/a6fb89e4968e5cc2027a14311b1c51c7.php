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

/* Dashboard.html.twig */
class __TwigTemplate_5b211f7fae2cf030d02b10c298baf40c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'sectionLinks' => [$this, 'block_sectionLinks'],
            'sectionStats' => [$this, 'block_sectionStats'],
            'sections' => [$this, 'block_sections'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["Utils"] = $this->macros["Utils"] = $this->loadTemplate("Macro/Utils.html.twig", "Dashboard.html.twig", 21)->unwrap();
        // line 20
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Dashboard.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <div class=\"bg-light pt-4 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"h4\">
                        ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 29), "name", [], "any", false, false, false, 29) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 29), "homepage", [], "any", false, false, false, 29))) {
            // line 30
            yield "                            <a class=\"btn btn-sm btn-secondary align-bottom active\"
                               href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 31), "html", null, true);
            yield "?defaultPage=FALSE\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("marked-as-homepage"), "html", null, true);
            yield "\">
                                <i class=\"fa-solid fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        } else {
            // line 35
            yield "                            <a class=\"btn btn-sm btn-secondary align-bottom\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 35), "html", null, true);
            yield "?defaultPage=TRUE\"
                               title=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("mark-as-homepage"), "html", null, true);
            yield "\">
                                <i class=\"fa-regular fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        }
        // line 40
        yield "                        <span class=\"ms-2\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 40), "html", null, true);
        yield "</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: -40px;\">
        ";
        // line 47
        yield from $this->unwrap()->yieldBlock('sectionLinks', $context, $blocks);
        // line 54
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "showBackupWarning", [], "method", false, false, false, 54)) {
            // line 55
            yield "            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"card bg-warning shadow mb-3\">
                        <div class=\"card-body\">
                            <div class=\"h3\">
                                <i class=\"fa-solid fa-save me-1\"></i> ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("dashboard-backup"), "html", null, true);
            yield "
                            </div>
                            <p class=\"card-text\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("dashboard-backup-p"), "html", null, true);
            yield "</p>
                            <ul class=\"mb-0\">
                                <li>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("dasboard-backup-li1"), "html", null, true);
            yield "</li>
                                <li>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("dasboard-backup-li2"), "html", null, true);
            yield "</li>
                                <li>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("dasboard-backup-li3"), "html", null, true);
            yield "</li>
                            </ul>
                        </div>
                        <div class=\"card-footer p-2\">
                            <a href=\"https://facturascripts.com/plugins/backup\" target=\"_blank\" rel=\"nofollow\"
                               class=\"btn btn-secondary\"> Backup
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["fsc"] ?? null), "updated", [], "any", false, false, false, 77) == false)) {
            // line 78
            yield "            <div class=\"mb-3\">
                ";
            // line 79
            yield CoreExtension::callMacro($macros["Utils"], "macro_updateInstall", [], 79, $context, $this->getSourceContext());
            yield "
            </div>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 81
($context["fsc"] ?? null), "registered", [], "any", false, false, false, 81) == false)) {
            // line 82
            yield "            <div class=\"mb-3\">
                ";
            // line 83
            yield CoreExtension::callMacro($macros["Utils"], "macro_registerInstall", [], 83, $context, $this->getSourceContext());
            yield "
            </div>
        ";
        }
        // line 86
        yield "        ";
        yield from $this->unwrap()->yieldBlock('sectionStats', $context, $blocks);
        // line 89
        yield "        ";
        yield from $this->unwrap()->yieldBlock('sections', $context, $blocks);
        // line 102
        yield "    </div>
";
        return; yield '';
    }

    // line 47
    public function block_sectionLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        yield "            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 50
        yield CoreExtension::callMacro($macros["_self"], "macro_sectionLinks", [($context["fsc"] ?? null)], 50, $context, $this->getSourceContext());
        yield "
                </div>
            </div>
        ";
        return; yield '';
    }

    // line 86
    public function block_sectionStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        yield "            ";
        yield CoreExtension::callMacro($macros["_self"], "macro_sectionStats", [($context["fsc"] ?? null)], 87, $context, $this->getSourceContext());
        yield "
        ";
        return; yield '';
    }

    // line 89
    public function block_sections($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        yield "            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 92
        if (CoreExtension::inFilter("receipts", CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 92))) {
            // line 93
            yield "                        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_sectionReceipts", [($context["fsc"] ?? null)], 93, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 95
        yield "                    ";
        if (CoreExtension::inFilter("low-stock", CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 95))) {
            // line 96
            yield "                        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_sectionLowStock", [($context["fsc"] ?? null)], 96, $context, $this->getSourceContext());
            yield "
                    ";
        }
        // line 98
        yield "                </div>
            </div>
            ";
        // line 100
        yield CoreExtension::callMacro($macros["_self"], "macro_sectionNews", [($context["fsc"] ?? null)], 100, $context, $this->getSourceContext());
        yield "
        ";
        return; yield '';
    }

    // line 105
    public function macro_drawStatsBox($__fsc__ = null, $__group__ = null, $__color__ = null, $__ismoney__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "group" => $__group__,
            "color" => $__color__,
            "ismoney" => $__ismoney__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 106
            yield "    <div class=\"card shadow mb-3\">
        <div class=\"card-body p-2 text-white ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
            yield "\">
            <h2 class=\"h5 text-center mb-0\">
                ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(($context["group"] ?? null)), "html", null, true);
            yield "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table mb-0\">
                ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "stats", [], "any", false, false, false, 114)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["group"] ?? null)] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 115
                yield "                    <tr>
                        <td>";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()($context["key"]), "html", null, true);
                yield "</td>
                        ";
                // line 117
                $context["color"] = ((($context["value"] < 0)) ? (" text-danger") : (""));
                // line 118
                yield "                        ";
                if (($context["ismoney"] ?? null)) {
                    // line 119
                    yield "                            <td class=\"text-end";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('money')->getCallable()($context["value"]), "html", null, true);
                    yield "</td>
                        ";
                } else {
                    // line 121
                    yield "                            <td class=\"text-end\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "</td>
                        ";
                }
                // line 123
                yield "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "            </table>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 130
    public function macro_sectionLinks($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 131
            yield "    <div class=\"card shadow mb-3\">
        <div class=\"ps-3 pt-1 pe-3 pb-3\">
            <div class=\"row\">
                <div class=\"col-md\">
                    <h2 class=\"h4 mt-3 mb-1\">
                        <i class=\"fa-solid fa-plus fa-fw\"></i> ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("create"), "html", null, true);
            yield "
                    </h2>
                    <ul class=\"mb-1\">
                        ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "createLinks", [], "any", false, false, false, 139));
            foreach ($context['_seq'] as $context["link"] => $context["label"]) {
                // line 140
                yield "                            <li>
                                <a href=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["link"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()($context["label"]), "html", null, true);
                yield "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['link'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "                    </ul>
                </div>
                ";
            // line 146
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "openLinks", [], "any", false, false, false, 146)) {
                // line 147
                yield "                    <div class=\"col-md\">
                        <h2 class=\"h4 mt-3 mb-1\">
                            <i class=\"fa-solid fa-folder-open fa-fw\"></i> ";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("open"), "html", null, true);
                yield "
                        </h2>
                        <ul class=\"mb-1\">
                            ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "openLinks", [], "any", false, false, false, 152));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 153
                    yield "                                <li>
                                    ";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "type", [], "any", false, false, false, 154)), "html", null, true);
                    yield "
                                    <a href=\"";
                    // line 155
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 155), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 155), "html", null, true);
                    yield "</a>
                                    <span class=\"text-muted\">";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "date", [], "any", false, false, false, 156), "html", null, true);
                    yield "</span>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                yield "                        </ul>
                    </div>
                ";
            }
            // line 162
            yield "                <div class=\"col-md\">
                    <h2 class=\"h4 mt-3 mb-1\">
                        <i class=\"fa-solid fa-question-circle fa-fw\"></i> ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help"), "html", null, true);
            yield "
                    </h2>
                    <ul class=\"mb-1\">
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/configuracion-15\" rel=\"nofollow\"
                               target=\"_blank\">Configuración</a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/primeros-pasos-303\" rel=\"nofollow\"
                               target=\"_blank\">Primeros pasos</a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/problemas-frecuentes-469\" rel=\"nofollow\"
                               target=\"_blank\">Problemas frecuentes</a>
                        </li>
                        <li>
                            <a href=\"https://forms.gle/WhGgWWB6EbWjBNna6\" rel=\"nofollow\"
                               target=\"_blank\">Encuesta de uso 2024/25
                                <i class=\"fa-solid fa-clipboard-check\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/contacto\" rel=\"nofollow\" target=\"_blank\">Soporte
                                <i class=\"fa-regular fa-comment-dots\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 196
    public function macro_sectionLowStock($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 197
            yield "    <div class=\"card shadow mb-3\">
        <div class=\"p-3\">
            <h2 class=\"h4 mb-0\">
                <i class=\"fa-solid fa-pallet fa-fw\"></i> ";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("minimum-stock"), "html", null, true);
            yield "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover mb-0\">
                <thead>
                <tr>
                    <th>";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("reference"), "html", null, true);
            yield "</th>
                    <th>";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("warehouse"), "html", null, true);
            yield "</th>
                    <th class=\"text-end\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("minimum-stock"), "html", null, true);
            yield "</th>
                    <th class=\"text-end\">";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("available"), "html", null, true);
            yield "</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "lowStock", [], "any", false, false, false, 214));
            foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
                // line 215
                yield "                    <tr class=\"clickableRow table-danger\" data-href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "url", [], "method", false, false, false, 215), "html", null, true);
                yield "\">
                        <td>";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "referencia", [], "any", false, false, false, 216), "html", null, true);
                yield "</td>
                        <td>";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "codalmacen", [], "any", false, false, false, 217), "html", null, true);
                yield "</td>
                        <td class=\"text-end\">";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "stockmin", [], "any", false, false, false, 218)), "html", null, true);
                yield "</td>
                        <td class=\"text-end\">";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "disponible", [], "any", false, false, false, 219)), "html", null, true);
                yield "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            yield "                </tbody>
            </table>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 228
    public function macro_sectionNews($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 229
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "news", [], "any", false, false, false, 229));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 230
                yield "        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow mb-3\">
                    <div class=\"card-header\">
                        <span class=\"float-end\">";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "fecha", [], "any", false, false, false, 234), "html", null, true);
                yield "</span>
                        <a href=\"";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "url", [], "any", false, false, false, 235), "html", null, true);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, false, 235);
                yield "</a>
                    </div>
                    <div class=\"card-body p-3\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-auto\">
                                <a href=\"";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "url", [], "any", false, false, false, 240), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-outline-secondary\">
                                    <i class=\"fa-regular fa-newspaper fa-3x\"></i>
                                </a>
                            </div>
                            <div class=\"col\">";
                // line 244
                yield CoreExtension::getAttribute($this->env, $this->source, $context["news"], "body", [], "any", false, false, false, 244);
                yield "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 253
    public function macro_sectionReceipts($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 254
            yield "    <div class=\"card shadow mb-3\">
        <div class=\"p-3\">
            <span class=\"float-end badge bg-danger\">";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("unpaid"), "html", null, true);
            yield "</span>
            <h2 class=\"h4 mb-0\">
                <i class=\"fa-solid fa-dollar-sign fa-fw\"></i>
                ";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("receipts"), "html", null, true);
            yield "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover mb-0\">
                <thead>
                <tr>
                    <th>";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("customer"), "html", null, true);
            yield "</th>
                    <th>";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("observations"), "html", null, true);
            yield "</th>
                    <th class=\"text-end\">";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("amount"), "html", null, true);
            yield "</th>
                    <th class=\"text-end\">";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("expiration"), "html", null, true);
            yield "</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "receipts", [], "any", false, false, false, 273));
            foreach ($context['_seq'] as $context["_key"] => $context["receipt"]) {
                // line 274
                yield "                    <tr class=\"clickableRow table-danger\" data-href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["receipt"], "url", [], "method", false, false, false, 274), "html", null, true);
                yield "\">
                        <td>";
                // line 275
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["receipt"], "getSubject", [], "method", false, false, false, 275), "nombre", [], "any", false, false, false, 275);
                yield "</td>
                        <td>";
                // line 276
                yield CoreExtension::getAttribute($this->env, $this->source, $context["receipt"], "observaciones", [], "any", false, false, false, 276);
                yield "</td>
                        <td class=\"text-end text-nowrap\">";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["receipt"], "importe", [], "any", false, false, false, 277)), "html", null, true);
                yield "</td>
                        <td class=\"text-end text-nowrap\">";
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["receipt"], "vencimiento", [], "any", false, false, false, 278), "html", null, true);
                yield "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receipt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            yield "                </tbody>
            </table>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 287
    public function macro_sectionStats($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 288
            yield "    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 290
            yield CoreExtension::callMacro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "purchases", "bg-danger", true], 290, $context, $this->getSourceContext());
            yield "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 293
            yield CoreExtension::callMacro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "sales", "bg-success", true], 293, $context, $this->getSourceContext());
            yield "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 296
            yield CoreExtension::callMacro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "taxes", "bg-warning", true], 296, $context, $this->getSourceContext());
            yield "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 299
            yield CoreExtension::callMacro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "new-customers", "bg-info", false], 299, $context, $this->getSourceContext());
            yield "
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Dashboard.html.twig";
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
        return array (  724 => 299,  718 => 296,  712 => 293,  706 => 290,  702 => 288,  690 => 287,  680 => 281,  671 => 278,  667 => 277,  663 => 276,  659 => 275,  654 => 274,  650 => 273,  643 => 269,  639 => 268,  635 => 267,  631 => 266,  621 => 259,  615 => 256,  611 => 254,  599 => 253,  582 => 244,  575 => 240,  565 => 235,  561 => 234,  555 => 230,  550 => 229,  538 => 228,  528 => 222,  519 => 219,  515 => 218,  511 => 217,  507 => 216,  502 => 215,  498 => 214,  491 => 210,  487 => 209,  483 => 208,  479 => 207,  469 => 200,  464 => 197,  452 => 196,  415 => 164,  411 => 162,  406 => 159,  397 => 156,  391 => 155,  387 => 154,  384 => 153,  380 => 152,  374 => 149,  370 => 147,  368 => 146,  364 => 144,  353 => 141,  350 => 140,  346 => 139,  340 => 136,  333 => 131,  321 => 130,  312 => 125,  305 => 123,  299 => 121,  291 => 119,  288 => 118,  286 => 117,  282 => 116,  279 => 115,  275 => 114,  267 => 109,  262 => 107,  259 => 106,  244 => 105,  237 => 100,  233 => 98,  227 => 96,  224 => 95,  218 => 93,  216 => 92,  212 => 90,  208 => 89,  200 => 87,  196 => 86,  187 => 50,  183 => 48,  179 => 47,  173 => 102,  170 => 89,  167 => 86,  161 => 83,  158 => 82,  156 => 81,  151 => 79,  148 => 78,  146 => 77,  132 => 66,  128 => 65,  124 => 64,  119 => 62,  114 => 60,  107 => 55,  104 => 54,  102 => 47,  91 => 40,  84 => 36,  79 => 35,  70 => 31,  67 => 30,  65 => 29,  58 => 24,  54 => 23,  49 => 20,  47 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2024 Carlos Garcia Gomez <carlos@facturascripts.com>
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
{% extends \"Master/MenuBghTemplate.html.twig\" %}
{% import 'Macro/Utils.html.twig' as Utils %}

{% block body %}
    <div class=\"bg-light pt-4 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"h4\">
                        {% if fsc.getPageData().name == fsc.user.homepage %}
                            <a class=\"btn btn-sm btn-secondary align-bottom active\"
                               href=\"{{ fsc.url() }}?defaultPage=FALSE\" title=\"{{ trans('marked-as-homepage') }}\">
                                <i class=\"fa-solid fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        {% else %}
                            <a class=\"btn btn-sm btn-secondary align-bottom\" href=\"{{ fsc.url() }}?defaultPage=TRUE\"
                               title=\"{{ trans('mark-as-homepage') }}\">
                                <i class=\"fa-regular fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        {% endif %}
                        <span class=\"ms-2\">{{ fsc.title }}</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: -40px;\">
        {% block sectionLinks %}
            <div class=\"row\">
                <div class=\"col\">
                    {{ _self.sectionLinks(fsc) }}
                </div>
            </div>
        {% endblock %}
        {% if fsc.showBackupWarning() %}
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"card bg-warning shadow mb-3\">
                        <div class=\"card-body\">
                            <div class=\"h3\">
                                <i class=\"fa-solid fa-save me-1\"></i> {{ trans('dashboard-backup') }}
                            </div>
                            <p class=\"card-text\">{{ trans('dashboard-backup-p') }}</p>
                            <ul class=\"mb-0\">
                                <li>{{ trans('dasboard-backup-li1') }}</li>
                                <li>{{ trans('dasboard-backup-li2') }}</li>
                                <li>{{ trans('dasboard-backup-li3') }}</li>
                            </ul>
                        </div>
                        <div class=\"card-footer p-2\">
                            <a href=\"https://facturascripts.com/plugins/backup\" target=\"_blank\" rel=\"nofollow\"
                               class=\"btn btn-secondary\"> Backup
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% elseif fsc.updated == false %}
            <div class=\"mb-3\">
                {{ Utils.updateInstall() }}
            </div>
        {% elseif fsc.registered == false %}
            <div class=\"mb-3\">
                {{ Utils.registerInstall() }}
            </div>
        {% endif %}
        {% block sectionStats %}
            {{ _self.sectionStats(fsc) }}
        {% endblock %}
        {% block sections %}
            <div class=\"row\">
                <div class=\"col\">
                    {% if 'receipts' in fsc.sections %}
                        {{ _self.sectionReceipts(fsc) }}
                    {% endif %}
                    {% if 'low-stock' in fsc.sections %}
                        {{ _self.sectionLowStock(fsc) }}
                    {% endif %}
                </div>
            </div>
            {{ _self.sectionNews(fsc) }}
        {% endblock %}
    </div>
{% endblock %}

{% macro drawStatsBox(fsc, group, color, ismoney) %}
    <div class=\"card shadow mb-3\">
        <div class=\"card-body p-2 text-white {{ color }}\">
            <h2 class=\"h5 text-center mb-0\">
                {{ trans(group) }}
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table mb-0\">
                {% for key, value in fsc.stats[group] %}
                    <tr>
                        <td>{{ trans(key) }}</td>
                        {% set color = value < 0 ? ' text-danger' : '' %}
                        {% if ismoney %}
                            <td class=\"text-end{{ color }}\">{{ money(value) }}</td>
                        {% else %}
                            <td class=\"text-end\">{{ value }}</td>
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>
{% endmacro %}

{% macro sectionLinks(fsc) %}
    <div class=\"card shadow mb-3\">
        <div class=\"ps-3 pt-1 pe-3 pb-3\">
            <div class=\"row\">
                <div class=\"col-md\">
                    <h2 class=\"h4 mt-3 mb-1\">
                        <i class=\"fa-solid fa-plus fa-fw\"></i> {{ trans('create') }}
                    </h2>
                    <ul class=\"mb-1\">
                        {% for link, label in fsc.createLinks %}
                            <li>
                                <a href=\"{{ link }}\">{{ trans(label) }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                {% if fsc.openLinks %}
                    <div class=\"col-md\">
                        <h2 class=\"h4 mt-3 mb-1\">
                            <i class=\"fa-solid fa-folder-open fa-fw\"></i> {{ trans('open') }}
                        </h2>
                        <ul class=\"mb-1\">
                            {% for link in fsc.openLinks %}
                                <li>
                                    {{ trans(link.type) }}
                                    <a href=\"{{ link.url }}\">{{ link.name }}</a>
                                    <span class=\"text-muted\">{{ link.date }}</span>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}
                <div class=\"col-md\">
                    <h2 class=\"h4 mt-3 mb-1\">
                        <i class=\"fa-solid fa-question-circle fa-fw\"></i> {{ trans('help') }}
                    </h2>
                    <ul class=\"mb-1\">
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/configuracion-15\" rel=\"nofollow\"
                               target=\"_blank\">Configuración</a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/primeros-pasos-303\" rel=\"nofollow\"
                               target=\"_blank\">Primeros pasos</a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/problemas-frecuentes-469\" rel=\"nofollow\"
                               target=\"_blank\">Problemas frecuentes</a>
                        </li>
                        <li>
                            <a href=\"https://forms.gle/WhGgWWB6EbWjBNna6\" rel=\"nofollow\"
                               target=\"_blank\">Encuesta de uso 2024/25
                                <i class=\"fa-solid fa-clipboard-check\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/contacto\" rel=\"nofollow\" target=\"_blank\">Soporte
                                <i class=\"fa-regular fa-comment-dots\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endmacro %}

{% macro sectionLowStock(fsc) %}
    <div class=\"card shadow mb-3\">
        <div class=\"p-3\">
            <h2 class=\"h4 mb-0\">
                <i class=\"fa-solid fa-pallet fa-fw\"></i> {{ trans('minimum-stock') }}
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover mb-0\">
                <thead>
                <tr>
                    <th>{{ trans('reference') }}</th>
                    <th>{{ trans('warehouse') }}</th>
                    <th class=\"text-end\">{{ trans('minimum-stock') }}</th>
                    <th class=\"text-end\">{{ trans('available') }}</th>
                </tr>
                </thead>
                <tbody>
                {% for stock in fsc.lowStock %}
                    <tr class=\"clickableRow table-danger\" data-href=\"{{ stock.url() }}\">
                        <td>{{ stock.referencia }}</td>
                        <td>{{ stock.codalmacen }}</td>
                        <td class=\"text-end\">{{ number(stock.stockmin) }}</td>
                        <td class=\"text-end\">{{ number(stock.disponible) }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endmacro %}

{% macro sectionNews(fsc) %}
    {% for news in fsc.news %}
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow mb-3\">
                    <div class=\"card-header\">
                        <span class=\"float-end\">{{ news.fecha }}</span>
                        <a href=\"{{ news.url }}\" target=\"_blank\">{{ news.title | raw }}</a>
                    </div>
                    <div class=\"card-body p-3\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-auto\">
                                <a href=\"{{ news.url }}\" target=\"_blank\" class=\"btn btn-outline-secondary\">
                                    <i class=\"fa-regular fa-newspaper fa-3x\"></i>
                                </a>
                            </div>
                            <div class=\"col\">{{ news.body | raw }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
{% endmacro %}

{% macro sectionReceipts(fsc) %}
    <div class=\"card shadow mb-3\">
        <div class=\"p-3\">
            <span class=\"float-end badge bg-danger\">{{ trans('unpaid') }}</span>
            <h2 class=\"h4 mb-0\">
                <i class=\"fa-solid fa-dollar-sign fa-fw\"></i>
                {{ trans('receipts') }}
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover mb-0\">
                <thead>
                <tr>
                    <th>{{ trans('customer') }}</th>
                    <th>{{ trans('observations') }}</th>
                    <th class=\"text-end\">{{ trans('amount') }}</th>
                    <th class=\"text-end\">{{ trans('expiration') }}</th>
                </tr>
                </thead>
                <tbody>
                {% for receipt in fsc.receipts %}
                    <tr class=\"clickableRow table-danger\" data-href=\"{{ receipt.url() }}\">
                        <td>{{ receipt.getSubject().nombre | raw }}</td>
                        <td>{{ receipt.observaciones | raw }}</td>
                        <td class=\"text-end text-nowrap\">{{ money(receipt.importe) }}</td>
                        <td class=\"text-end text-nowrap\">{{ receipt.vencimiento }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endmacro %}

{% macro sectionStats(fsc) %}
    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
            {{ _self.drawStatsBox(fsc, 'purchases', 'bg-danger', true) }}
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            {{ _self.drawStatsBox(fsc, 'sales', 'bg-success', true) }}
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            {{ _self.drawStatsBox(fsc, 'taxes', 'bg-warning', true) }}
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            {{ _self.drawStatsBox(fsc, 'new-customers', 'bg-info', false) }}
        </div>
    </div>
{% endmacro %}", "Dashboard.html.twig", "/var/www/html/Core/View/Dashboard.html.twig");
    }
}
