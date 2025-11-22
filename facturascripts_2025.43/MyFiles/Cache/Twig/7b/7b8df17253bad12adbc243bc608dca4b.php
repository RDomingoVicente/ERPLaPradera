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

/* EditPageOption.html.twig */
class __TwigTemplate_49f354480ae2737dffc941be9aa31007 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBgTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["__internal_parse_0"] = $this->macros["__internal_parse_0"] = $this->loadTemplate("Macro/Forms.html.twig", "EditPageOption.html.twig", 21)->unwrap();
        // line 20
        $this->parent = $this->loadTemplate("Master/MenuBgTemplate.html.twig", "EditPageOption.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        yield from $this->yieldParentBlock("bodyHeaderOptions", $context, $blocks);
        yield "
    <div class=\"container-fluid mb-3\">
        ";
        // line 26
        yield from $this->yieldParentBlock("bodyHeaderOptions", $context, $blocks);
        yield "
        <div class=\"row\">
            <div class=\"col-4 d-print-none\">
                <a href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "backPage", [], "any", false, false, false, 29), "html", null, true);
        yield "\" class=\"btn btn-sm btn-secondary\">
                    <i class=\"fa-solid fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-md-inline-block\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("back"), "html", null, true);
        yield "</span>
                </a>
                <a href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 33) . "?code=") . CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 33)), "html", null, true);
        yield "\" class=\"btn btn-sm btn-secondary\"
                   title=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        yield "\">
                    <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                </a>
            </div>
            <div class=\"col text-end\">
                <h1 class=\"h4\">
                    ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 40), "html", null, true);
        yield " <i class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 40)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["icon"] ?? null) : null), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        yield "    ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header\">
                        <span class=\"text-info\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 54), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\">
                            <input type=\"hidden\" name=\"code\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 58), "html", null, true);
        yield "\"/>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <p>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("page-option-info"), "html", null, true);
        yield "</p>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"input-group mb-3\">
                                        <span class=\"input-group-text\">
                                                <i class=\"fa-solid fa-users\"></i>
                                            </span>
                                        ";
        // line 68
        $context["userList"] = Twig\Extension\CoreExtension::merge(["" => $this->env->getFunction('trans')->getCallable()("all")], CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getUserList", [], "method", false, false, false, 68));
        // line 69
        yield "                                        ";
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_simpleSelect", ["nick", "nick", CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["fsc"] ?? null), "selectedUser", [], "any", false, false, false, 72),         // line 73
($context["userList"] ?? null), false, false, ["onChange" => "this.form.submit()"]], 69, $context, $this->getSourceContext());
        // line 76
        yield "
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <form method=\"post\" name=\"main_form\" onsubmit=\"animateSpinner('add')\">
                        ";
        // line 83
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
                        <input type=\"hidden\" name=\"action\" value=\"save\"/>
                        <input type=\"hidden\" name=\"code\" value=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 85), "html", null, true);
        yield "\"/>
                        <input type=\"hidden\" name=\"nick\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedUser", [], "any", false, false, false, 86), "html", null, true);
        yield "\"/>
                        <div class=\"table-responsive\">
                            <table class=\"table table-sm table-hover mb-0\">
                                <thead>
                                <tr>
                                    <th>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("title"), "html", null, true);
        yield "</th>
                                    <th class=\"text-center\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("display"), "html", null, true);
        yield "</th>
                                    <th>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("level"), "html", null, true);
        yield "</th>
                                    <th>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("readonly"), "html", null, true);
        yield "</th>
                                    <th width=\"150\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("decimals"), "html", null, true);
        yield "</th>
                                    <th>";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("width"), "html", null, true);
        yield "</th>
                                    <th class=\"text-end\" width=\"130\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("sort"), "html", null, true);
        yield "</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "columns", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 102
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "columns", [], "any", false, false, false, 102));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 103
                yield "                                        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_editGroupColumn", [$context["col"]], 103, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "                                </tbody>
                            </table>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"row\">
                                ";
        // line 111
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "model", [], "any", false, false, false, 111), "exists", [], "method", false, false, false, 111)) {
            // line 112
            yield "                                    <div class=\"col\">
                                        <button class=\"btn btn-spin-action btn-sm btn btn-danger\" type=\"button\"
                                                onclick=\"deleteOptions();\">
                                            <i class=\"fa-solid fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                            ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            yield "
                                        </button>
                                    </div>
                                ";
        }
        // line 120
        yield "                                <div class=\"col text-end\">
                                    <button class=\"btn btn-spin-action btn-sm btn btn-secondary\" type=\"reset\">
                                        <i class=\"fa-solid fa-undo fa-fw\" aria-hidden=\"true\"></i> ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("undo"), "html", null, true);
        yield "
                                    </button>
                                    <button class=\"btn btn-spin-action btn-sm btn-primary\" type=\"submit\">
                                        <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i> ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
        yield "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 137
        yield "    <div class=\"modal fade\" id=\"deleteOptionsModal\" tabindex=\"-1\" aria-labelledby=\"deleteOptionsModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"deleteOptionsModalLabel\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm-delete"), "html", null, true);
        yield "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
        yield "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fa-solid fa-times\"></i> ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
        yield "
                    </button>
                    <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDeleteOptionsBtn\">
                        <i class=\"fa-solid fa-check\"></i> ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
        yield "
                    </button>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 160
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        yield "    ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
    <style>
        body {
            background-color: #FAFBFC;
        }
    </style>
";
        return; yield '';
    }

    // line 169
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        function deleteOptions() {
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteOptionsModal'));
            
            document.getElementById('confirmDeleteOptionsBtn').onclick = function() {
                animateSpinner('add');
                document.main_form.action.value = 'delete';
                document.main_form.submit();
            };
            
            deleteModal.show();
        }
    </script>
";
        return; yield '';
    }

    // line 186
    public function macro_editGroupColumn($__col__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "col" => $__col__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 187
            yield "    <tr>
        <td title=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("title"), "html", null, true);
            yield "\">
            <input type=\"text\" class=\"form-control\" name=\"";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 189), "html", null, true);
            yield "-title\"
                   placeholder=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "title", [], "any", false, false, false, 190)), "html", null, true);
            yield "\" autocomplete=\"off\"/>
        </td>
        <td class=\"text-center\">
            ";
            // line 193
            yield CoreExtension::callMacro($macros["_self"], "macro_editGroupColumnDisplay", [($context["col"] ?? null)], 193, $context, $this->getSourceContext());
            yield "
        </td>
        <td title=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("level"), "html", null, true);
            yield "\">
            <input type=\"number\" class=\"form-control\" name=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 196), "html", null, true);
            yield "-level\" min=\"0\" max=\"99\" step=\"1\"
                   value=\"";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "level", [], "any", false, false, false, 197), "html", null, true);
            yield "\"/>
        </td>
        <td title=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("readonly"), "html", null, true);
            yield "\">
            ";
            // line 200
            yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_simpleSelect", [(CoreExtension::getAttribute($this->env, $this->source,             // line 201
($context["col"] ?? null), "name", [], "any", false, false, false, 201) . "-readonly"), (CoreExtension::getAttribute($this->env, $this->source,             // line 202
($context["col"] ?? null), "name", [], "any", false, false, false, 202) . "-readonly"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 203
($context["col"] ?? null), "widget", [], "any", false, false, false, 203), "readonly", [], "any", false, false, false, 203), ["true" => $this->env->getFunction('trans')->getCallable()("yes"), "false" => $this->env->getFunction('trans')->getCallable()("no"), "dinamic" => $this->env->getFunction('trans')->getCallable()("auto")], false, false, []], 200, $context, $this->getSourceContext());
            // line 207
            yield "
        </td>
        <td title=\"";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("decimals"), "html", null, true);
            yield "\">
            ";
            // line 210
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "widget", [], "any", false, false, false, 210), "gridFormat", [], "method", false, false, false, 210))) {
                // line 211
                yield "                <input type=\"number\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 211), "html", null, true);
                yield "-decimal\" min=\"0\" max=\"7\" step=\"1\"
                       value=\"";
                // line 212
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "widget", [], "any", false, false, false, 212), "decimal", [], "any", false, false, false, 212), "html", null, true);
                yield "\" class=\"form-control\"/>
            ";
            }
            // line 214
            yield "        </td>
        <td title=\"";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("width"), "html", null, true);
            yield "\">
            ";
            // line 216
            yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_simpleSelect", [(CoreExtension::getAttribute($this->env, $this->source,             // line 217
($context["col"] ?? null), "name", [], "any", false, false, false, 217) . "-numcolumns"), (CoreExtension::getAttribute($this->env, $this->source,             // line 218
($context["col"] ?? null), "name", [], "any", false, false, false, 218) . "-numcolumns"), CoreExtension::getAttribute($this->env, $this->source,             // line 219
($context["col"] ?? null), "numcolumns", [], "any", false, false, false, 219), ["0" => $this->env->getFunction('trans')->getCallable()("auto"), "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10", "11" => "11", "12" => "12"], false, false, []], 216, $context, $this->getSourceContext());
            // line 223
            yield "
        </td>
        <td title=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("sort"), "html", null, true);
            yield "\">
            <input type=\"number\" name=\"";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 226), "html", null, true);
            yield "-order\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "order", [], "any", false, false, false, 226), "html", null, true);
            yield "\" class=\"form-control text-end\"/>
        </td>
    </tr>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 231
    public function macro_editGroupColumnDisplay($__col__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "col" => $__col__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 232
            yield "    <div class=\"btn-group\" role=\"group\">
        ";
            // line 233
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 233) == "start")) {
                // line 234
                yield "            <input type=\"radio\" class=\"btn-check\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 234), "html", null, true);
                yield "-display\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 234), "html", null, true);
                yield "-start-display\" value=\"start\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-secondary\" for=\"";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 235), "html", null, true);
                yield "-start-display\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("left"), "html", null, true);
                yield "\">
                <i class=\"fa-solid fa-align-left\"></i>
            </label>
        ";
            } else {
                // line 239
                yield "            <input type=\"radio\" class=\"btn-check\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 239), "html", null, true);
                yield "-display\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 239), "html", null, true);
                yield "-start-display\" value=\"start\" autocomplete=\"off\">
            <label class=\"btn btn-outline-secondary\" for=\"";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 240), "html", null, true);
                yield "-start-display\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("left"), "html", null, true);
                yield "\">
                <i class=\"fa-solid fa-align-left\"></i>
            </label>
        ";
            }
            // line 244
            yield "
        ";
            // line 245
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 245) == "center")) {
                // line 246
                yield "            <input type=\"radio\" class=\"btn-check\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 246), "html", null, true);
                yield "-display\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 246), "html", null, true);
                yield "-center-display\" value=\"center\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-secondary\" for=\"";
                // line 247
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 247), "html", null, true);
                yield "-center-display\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("center"), "html", null, true);
                yield "\">
                <i class=\"fa-solid fa-align-center\"></i>
            </label>
        ";
            } else {
                // line 251
                yield "            <input type=\"radio\" class=\"btn-check\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 251), "html", null, true);
                yield "-display\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 251), "html", null, true);
                yield "-center-display\" value=\"center\" autocomplete=\"off\">
            <label class=\"btn btn-outline-secondary\" for=\"";
                // line 252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 252), "html", null, true);
                yield "-center-display\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("center"), "html", null, true);
                yield "\">
                <i class=\"fa-solid fa-align-center\"></i>
            </label>
        ";
            }
            // line 256
            yield "
        ";
            // line 257
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 257) == "end")) {
                // line 258
                yield "            <input type=\"radio\" class=\"btn-check\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 258), "html", null, true);
                yield "-display\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 258), "html", null, true);
                yield "-end-display\" value=\"end\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-secondary\" for=\"";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 259), "html", null, true);
                yield "-end-display\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("right"), "html", null, true);
                yield "\">
                <i class=\"fa-solid fa-align-right\"></i>
            </label>
        ";
            } else {
                // line 263
                yield "            <input type=\"radio\" class=\"btn-check\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 263), "html", null, true);
                yield "-display\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 263), "html", null, true);
                yield "-end-display\" value=\"end\" autocomplete=\"off\">
            <label class=\"btn btn-outline-secondary\" for=\"";
                // line 264
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 264), "html", null, true);
                yield "-end-display\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("right"), "html", null, true);
                yield "\">
                <i class=\"fa-solid fa-align-right\"></i>
            </label>
        ";
            }
            // line 268
            yield "
        ";
            // line 269
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "display", [], "any", false, false, false, 269) == "none")) {
                // line 270
                yield "            <input type=\"radio\" class=\"btn-check\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 270), "html", null, true);
                yield "-display\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 270), "html", null, true);
                yield "-none-display\" value=\"none\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-secondary\" for=\"";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 271), "html", null, true);
                yield "-none-display\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("hide"), "html", null, true);
                yield "\">
                <i class=\"fa-solid fa-eye-slash\"></i>
            </label>
        ";
            } else {
                // line 275
                yield "            <input type=\"radio\" class=\"btn-check\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 275), "html", null, true);
                yield "-display\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 275), "html", null, true);
                yield "-none-display\" value=\"none\" autocomplete=\"off\">
            <label class=\"btn btn-outline-secondary\" for=\"";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["col"] ?? null), "name", [], "any", false, false, false, 276), "html", null, true);
                yield "-none-display\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("hide"), "html", null, true);
                yield "\">
                <i class=\"fa-solid fa-eye-slash\"></i>
            </label>
        ";
            }
            // line 280
            yield "    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EditPageOption.html.twig";
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
        return array (  625 => 280,  616 => 276,  609 => 275,  600 => 271,  593 => 270,  591 => 269,  588 => 268,  579 => 264,  572 => 263,  563 => 259,  556 => 258,  554 => 257,  551 => 256,  542 => 252,  535 => 251,  526 => 247,  519 => 246,  517 => 245,  514 => 244,  505 => 240,  498 => 239,  489 => 235,  482 => 234,  480 => 233,  477 => 232,  465 => 231,  453 => 226,  449 => 225,  445 => 223,  443 => 219,  442 => 218,  441 => 217,  440 => 216,  436 => 215,  433 => 214,  428 => 212,  423 => 211,  421 => 210,  417 => 209,  413 => 207,  411 => 203,  410 => 202,  409 => 201,  408 => 200,  404 => 199,  399 => 197,  395 => 196,  391 => 195,  386 => 193,  380 => 190,  376 => 189,  372 => 188,  369 => 187,  357 => 186,  336 => 170,  332 => 169,  319 => 161,  315 => 160,  303 => 152,  297 => 149,  290 => 145,  283 => 141,  277 => 137,  263 => 125,  257 => 122,  253 => 120,  246 => 116,  240 => 112,  238 => 111,  231 => 106,  225 => 105,  216 => 103,  211 => 102,  207 => 101,  200 => 97,  196 => 96,  192 => 95,  188 => 94,  184 => 93,  180 => 92,  176 => 91,  168 => 86,  164 => 85,  159 => 83,  150 => 76,  148 => 73,  147 => 72,  145 => 69,  143 => 68,  133 => 61,  127 => 58,  120 => 54,  110 => 48,  106 => 47,  93 => 40,  84 => 34,  80 => 33,  75 => 31,  70 => 29,  64 => 26,  58 => 24,  54 => 23,  49 => 20,  47 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2023 Carlos Garcia Gomez <carlos@facturascripts.com>
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
{% extends \"Master/MenuBgTemplate.html.twig\" %}
{% from 'Macro/Forms.html.twig' import simpleSelect as simpleSelect %}

{% block bodyHeaderOptions %}
    {{ parent() }}
    <div class=\"container-fluid mb-3\">
        {{ parent() }}
        <div class=\"row\">
            <div class=\"col-4 d-print-none\">
                <a href=\"{{ fsc.backPage }}\" class=\"btn btn-sm btn-secondary\">
                    <i class=\"fa-solid fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-md-inline-block\">{{ trans('back') }}</span>
                </a>
                <a href=\"{{ fsc.url() ~ '?code=' ~ fsc.selectedViewName }}\" class=\"btn btn-sm btn-secondary\"
                   title=\"{{ trans('refresh') }}\">
                    <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                </a>
            </div>
            <div class=\"col text-end\">
                <h1 class=\"h4\">
                    {{ fsc.title }} <i class=\"{{ fsc.getPageData()['icon'] }}\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
{% endblock %}

{% block body %}
    {{ parent() }}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header\">
                        <span class=\"text-info\">{{ fsc.selectedViewName }}</span>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\">
                            <input type=\"hidden\" name=\"code\" value=\"{{ fsc.selectedViewName }}\"/>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <p>{{ trans('page-option-info') }}</p>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"input-group mb-3\">
                                        <span class=\"input-group-text\">
                                                <i class=\"fa-solid fa-users\"></i>
                                            </span>
                                        {% set userList = {'': trans('all')} | merge(fsc.getUserList()) %}
                                        {{ simpleSelect(
                                            'nick',
                                            'nick',
                                            fsc.selectedUser,
                                            userList,
                                            FALSE,
                                            FALSE,
                                            {'onChange': 'this.form.submit()'}) }}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <form method=\"post\" name=\"main_form\" onsubmit=\"animateSpinner('add')\">
                        {{ formToken() }}
                        <input type=\"hidden\" name=\"action\" value=\"save\"/>
                        <input type=\"hidden\" name=\"code\" value=\"{{ fsc.selectedViewName }}\"/>
                        <input type=\"hidden\" name=\"nick\" value=\"{{ fsc.selectedUser }}\"/>
                        <div class=\"table-responsive\">
                            <table class=\"table table-sm table-hover mb-0\">
                                <thead>
                                <tr>
                                    <th>{{ trans('title') }}</th>
                                    <th class=\"text-center\">{{ trans('display') }}</th>
                                    <th>{{ trans('level') }}</th>
                                    <th>{{ trans('readonly') }}</th>
                                    <th width=\"150\">{{ trans('decimals') }}</th>
                                    <th>{{ trans('width') }}</th>
                                    <th class=\"text-end\" width=\"130\">{{ trans('sort') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for group in fsc.columns %}
                                    {% for col in group.columns %}
                                        {{ _self.editGroupColumn(col) }}
                                    {% endfor %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"row\">
                                {% if fsc.model.exists() %}
                                    <div class=\"col\">
                                        <button class=\"btn btn-spin-action btn-sm btn btn-danger\" type=\"button\"
                                                onclick=\"deleteOptions();\">
                                            <i class=\"fa-solid fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                            {{ trans('delete') }}
                                        </button>
                                    </div>
                                {% endif %}
                                <div class=\"col text-end\">
                                    <button class=\"btn btn-spin-action btn-sm btn btn-secondary\" type=\"reset\">
                                        <i class=\"fa-solid fa-undo fa-fw\" aria-hidden=\"true\"></i> {{ trans('undo') }}
                                    </button>
                                    <button class=\"btn btn-spin-action btn-sm btn-primary\" type=\"submit\">
                                        <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i> {{ trans('save') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {# -- Delete Options Confirmation Modal -- #}
    <div class=\"modal fade\" id=\"deleteOptionsModal\" tabindex=\"-1\" aria-labelledby=\"deleteOptionsModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"deleteOptionsModalLabel\">{{ trans('confirm-delete') }}</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    {{ trans('are-you-sure') }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fa-solid fa-times\"></i> {{ trans('cancel') }}
                    </button>
                    <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDeleteOptionsBtn\">
                        <i class=\"fa-solid fa-check\"></i> {{ trans('delete') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block css %}
    {{ parent() }}
    <style>
        body {
            background-color: #FAFBFC;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        function deleteOptions() {
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteOptionsModal'));
            
            document.getElementById('confirmDeleteOptionsBtn').onclick = function() {
                animateSpinner('add');
                document.main_form.action.value = 'delete';
                document.main_form.submit();
            };
            
            deleteModal.show();
        }
    </script>
{% endblock %}

{% macro editGroupColumn(col) %}
    <tr>
        <td title=\"{{ trans('title') }}\">
            <input type=\"text\" class=\"form-control\" name=\"{{ col.name }}-title\"
                   placeholder=\"{{ trans(col.title) }}\" autocomplete=\"off\"/>
        </td>
        <td class=\"text-center\">
            {{ _self.editGroupColumnDisplay(col) }}
        </td>
        <td title=\"{{ trans('level') }}\">
            <input type=\"number\" class=\"form-control\" name=\"{{ col.name }}-level\" min=\"0\" max=\"99\" step=\"1\"
                   value=\"{{ col.level }}\"/>
        </td>
        <td title=\"{{ trans('readonly') }}\">
            {{ simpleSelect(
                col.name ~ '-readonly',
                col.name ~ '-readonly',
                col.widget.readonly,
                {'true':trans('yes'), 'false':trans('no'), 'dinamic':trans('auto')},
                FALSE,
                FALSE,
                {}) }}
        </td>
        <td title=\"{{ trans('decimals') }}\">
            {% if col.widget.gridFormat() is not empty %}
                <input type=\"number\" name=\"{{ col.name }}-decimal\" min=\"0\" max=\"7\" step=\"1\"
                       value=\"{{ col.widget.decimal }}\" class=\"form-control\"/>
            {% endif %}
        </td>
        <td title=\"{{ trans('width') }}\">
            {{ simpleSelect(
                col.name ~ '-numcolumns',
                col.name ~ '-numcolumns',
                col.numcolumns,
                {'0':trans('auto'), '1':'1', '2':'2', '3':'3', '4':'4', '5':'5', '6':'6', '7':'7', '8':'8', '9':'9', '10':'10', '11':'11', '12':'12'},
                FALSE,
                FALSE,
                {}) }}
        </td>
        <td title=\"{{ trans('sort') }}\">
            <input type=\"number\" name=\"{{ col.name }}-order\" value=\"{{ col.order }}\" class=\"form-control text-end\"/>
        </td>
    </tr>
{% endmacro %}

{% macro editGroupColumnDisplay(col) %}
    <div class=\"btn-group\" role=\"group\">
        {% if col.display == 'start' %}
            <input type=\"radio\" class=\"btn-check\" name=\"{{ col.name }}-display\" id=\"{{ col.name }}-start-display\" value=\"start\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-secondary\" for=\"{{ col.name }}-start-display\" title=\"{{ trans('left') }}\">
                <i class=\"fa-solid fa-align-left\"></i>
            </label>
        {% else %}
            <input type=\"radio\" class=\"btn-check\" name=\"{{ col.name }}-display\" id=\"{{ col.name }}-start-display\" value=\"start\" autocomplete=\"off\">
            <label class=\"btn btn-outline-secondary\" for=\"{{ col.name }}-start-display\" title=\"{{ trans('left') }}\">
                <i class=\"fa-solid fa-align-left\"></i>
            </label>
        {% endif %}

        {% if col.display == 'center' %}
            <input type=\"radio\" class=\"btn-check\" name=\"{{ col.name }}-display\" id=\"{{ col.name }}-center-display\" value=\"center\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-secondary\" for=\"{{ col.name }}-center-display\" title=\"{{ trans('center') }}\">
                <i class=\"fa-solid fa-align-center\"></i>
            </label>
        {% else %}
            <input type=\"radio\" class=\"btn-check\" name=\"{{ col.name }}-display\" id=\"{{ col.name }}-center-display\" value=\"center\" autocomplete=\"off\">
            <label class=\"btn btn-outline-secondary\" for=\"{{ col.name }}-center-display\" title=\"{{ trans('center') }}\">
                <i class=\"fa-solid fa-align-center\"></i>
            </label>
        {% endif %}

        {% if col.display == 'end' %}
            <input type=\"radio\" class=\"btn-check\" name=\"{{ col.name }}-display\" id=\"{{ col.name }}-end-display\" value=\"end\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-secondary\" for=\"{{ col.name }}-end-display\" title=\"{{ trans('right') }}\">
                <i class=\"fa-solid fa-align-right\"></i>
            </label>
        {% else %}
            <input type=\"radio\" class=\"btn-check\" name=\"{{ col.name }}-display\" id=\"{{ col.name }}-end-display\" value=\"end\" autocomplete=\"off\">
            <label class=\"btn btn-outline-secondary\" for=\"{{ col.name }}-end-display\" title=\"{{ trans('right') }}\">
                <i class=\"fa-solid fa-align-right\"></i>
            </label>
        {% endif %}

        {% if col.display == 'none' %}
            <input type=\"radio\" class=\"btn-check\" name=\"{{ col.name }}-display\" id=\"{{ col.name }}-none-display\" value=\"none\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-secondary\" for=\"{{ col.name }}-none-display\" title=\"{{ trans('hide') }}\">
                <i class=\"fa-solid fa-eye-slash\"></i>
            </label>
        {% else %}
            <input type=\"radio\" class=\"btn-check\" name=\"{{ col.name }}-display\" id=\"{{ col.name }}-none-display\" value=\"none\" autocomplete=\"off\">
            <label class=\"btn btn-outline-secondary\" for=\"{{ col.name }}-none-display\" title=\"{{ trans('hide') }}\">
                <i class=\"fa-solid fa-eye-slash\"></i>
            </label>
        {% endif %}
    </div>
{% endmacro %}", "EditPageOption.html.twig", "/var/www/html/Core/View/EditPageOption.html.twig");
    }
}
