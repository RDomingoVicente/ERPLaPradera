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

/* Invoice2DataParser.html.twig */
class __TwigTemplate_2868b4f6cf164ba4103c9ceb79c9e5ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Invoice2DataParser.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header\">
                    <h3>
                        <i class=\"fas fa-file-invoice fa-fw\"></i> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["parse-invoice-pdf"], "method", false, false, false, 10), "html", null, true);
        yield "
                    </h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 15
        yield "                    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 15), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form\">
                        <input type=\"hidden\" name=\"action\" value=\"upload\"/>
                        
                        ";
        // line 19
        yield "                        <div class=\"form-group\">
                            <label for=\"provider\">
                                <i class=\"fas fa-building\"></i> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["supplier"], "method", false, false, false, 21), "html", null, true);
        yield "
                            </label>
                            <select class=\"form-control\" id=\"provider\" name=\"provider\" required>
                                <option value=\"\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["Selecciones proveedor"], "method", false, false, false, 24), "html", null, true);
        yield "</option>
                                <option value=\"TUDIS\">Tudis</option>
                                <option value=\"LACALLE\">Embutidos la calle</option>
                                <option value=\"GM\">Transgourmet GM</option>
                                <option value=\"BEBIDASMARTIN\">Bebidas Martin</option>
                                <option value=\"otro\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["other"], "method", false, false, false, 29), "html", null, true);
        yield "</option>
                            </select>
                            <small class=\"form-text text-muted\">
                                ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["select-supplier-to-use-correct-template"], "method", false, false, false, 32), "html", null, true);
        yield "
                            </small>
                        </div>
                        
                        ";
        // line 37
        yield "                        <div class=\"form-group\">
                            <label for=\"pdf_file\">
                                <i class=\"fas fa-file-pdf\"></i> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["select-pdf-file"], "method", false, false, false, 39), "html", null, true);
        yield "
                            </label>
                            <div class=\"custom-file\">
                                <input type=\"file\" 
                                       class=\"custom-file-input\" 
                                       id=\"pdf_file\" 
                                       name=\"pdf_file\" 
                                       accept=\"application/pdf\"
                                       required>
                                <label class=\"custom-file-label\" for=\"pdf_file\">
                                    ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["choose-file"], "method", false, false, false, 49), "html", null, true);
        yield "
                                </label>
                            </div>
                            <small class=\"form-text text-muted\">
                                ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["max-file-size-10mb"], "method", false, false, false, 53), "html", null, true);
        yield "
                            </small>
                        </div>
                        
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-upload\"></i> ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["upload-and-parse"], "method", false, false, false, 58), "html", null, true);
        yield "
                        </button>
                    </form>
                </div>
            </div>

            ";
        // line 65
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 65)) {
            // line 66
            yield "            <div class=\"card shadow\">
                <div class=\"card-header bg-success text-white\">
                    <h4>
                        <i class=\"fas fa-check-circle\"></i> ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["parse-results"], "method", false, false, false, 69), "html", null, true);
            yield "
                    </h4>
                </div>
                <div class=\"card-body\">
                    ";
            // line 74
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedProvider", [], "any", false, false, false, 74)) {
                // line 75
                yield "                    <div class=\"alert alert-info\">
                        <strong><i class=\"fas fa-building\"></i> ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["supplier"], "method", false, false, false, 76), "html", null, true);
                yield ":</strong> 
                        ";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedProvider", [], "any", false, false, false, 77)), "html", null, true);
                yield "
                    </div>
                    ";
            }
            // line 80
            yield "
                    <div class=\"row\">
                        ";
            // line 83
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 83), "issuer", [], "any", false, false, false, 83)) {
                // line 84
                yield "                        <div class=\"col-md-6 mb-3\">
                            <div class=\"card\">
                                <div class=\"card-header bg-info text-white\">
                                    <h5><i class=\"fas fa-building\"></i> ";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["supplier-info"], "method", false, false, false, 87), "html", null, true);
                yield "</h5>
                                </div>
                                <div class=\"card-body\">
                                    ";
                // line 90
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 90), "issuer", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90)) {
                    // line 91
                    yield "                                    <p><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["name"], "method", false, false, false, 91), "html", null, true);
                    yield ":</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 91), "issuer", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 93
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 93), "issuer", [], "any", false, false, false, 93), "vat_number", [], "any", false, false, false, 93)) {
                    // line 94
                    yield "                                    <p><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["vat-number"], "method", false, false, false, 94), "html", null, true);
                    yield ":</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 94), "issuer", [], "any", false, false, false, 94), "vat_number", [], "any", false, false, false, 94), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 96
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 96), "issuer", [], "any", false, false, false, 96), "address", [], "any", false, false, false, 96)) {
                    // line 97
                    yield "                                    <p><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["address"], "method", false, false, false, 97), "html", null, true);
                    yield ":</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 97), "issuer", [], "any", false, false, false, 97), "address", [], "any", false, false, false, 97), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 99
                yield "                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 103
            yield "
                        ";
            // line 105
            yield "                        <div class=\"col-md-6 mb-3\">
                            <div class=\"card\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h5><i class=\"fas fa-file-invoice-dollar\"></i> ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["invoice-info"], "method", false, false, false, 108), "html", null, true);
            yield "</h5>
                                </div>
                                <div class=\"card-body\">
                                    ";
            // line 111
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 111), "invoice_number", [], "any", false, false, false, 111)) {
                // line 112
                yield "                                    <p><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["invoice-number"], "method", false, false, false, 112), "html", null, true);
                yield ":</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 112), "invoice_number", [], "any", false, false, false, 112), "html", null, true);
                yield "</p>
                                    ";
            }
            // line 114
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 114), "date", [], "any", false, false, false, 114)) {
                // line 115
                yield "                                    <p><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["date"], "method", false, false, false, 115), "html", null, true);
                yield ":</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 115), "date", [], "any", false, false, false, 115), "html", null, true);
                yield "</p>
                                    ";
            }
            // line 117
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 117), "due_date", [], "any", false, false, false, 117)) {
                // line 118
                yield "                                    <p><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["due-date"], "method", false, false, false, 118), "html", null, true);
                yield ":</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 118), "due_date", [], "any", false, false, false, 118), "html", null, true);
                yield "</p>
                                    ";
            }
            // line 120
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 120), "amount", [], "any", false, false, false, 120)) {
                // line 121
                yield "                                    <p><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total-amount"], "method", false, false, false, 121), "html", null, true);
                yield ":</strong> 
                                        <span class=\"badge badge-success badge-lg\">
                                            ";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 123), "amount", [], "any", false, false, false, 123), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 123), "currency", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 123), "currency", [], "any", false, false, false, 123), "EUR")) : ("EUR")), "html", null, true);
                yield "
                                        </span>
                                    </p>
                                    ";
            }
            // line 127
            yield "                                </div>
                            </div>
                        </div>
                    </div>

                    ";
            // line 133
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 133), "lines", [], "any", false, false, false, 133)) {
                // line 134
                yield "                    <div class=\"card mt-3\">
                        <div class=\"card-header bg-secondary text-white\">
                            <h5><i class=\"fas fa-list\"></i> ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["invoice-lines"], "method", false, false, false, 136), "html", null, true);
                yield "</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-hover\">
                                    <thead class=\"thead-dark\">
                                        <tr>
                                            <th>";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["description"], "method", false, false, false, 143), "html", null, true);
                yield "</th>
                                            <th class=\"text-right\">";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["quantity"], "method", false, false, false, 144), "html", null, true);
                yield "</th>
                                            <th class=\"text-right\">";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["unit-price"], "method", false, false, false, 145), "html", null, true);
                yield "</th>
                                            <th class=\"text-right\">";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 146), "html", null, true);
                yield "</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 150
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 150), "lines", [], "any", false, false, false, 150));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 151
                    yield "                                        <tr>
                                            <td>";
                    // line 152
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "description", [], "any", true, true, false, 152)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "description", [], "any", false, false, false, 152), "-")) : ("-")), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "quantity", [], "any", true, true, false, 153)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 153), "-")) : ("-")), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "unit_price", [], "any", true, true, false, 154)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "unit_price", [], "any", false, false, false, 154), "-")) : ("-")), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">
                                                <strong>";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "total", [], "any", true, true, false, 156)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "total", [], "any", false, false, false, 156), "-")) : ("-")), "html", null, true);
                    yield "</strong>
                                            </td>
                                        </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 166
            yield "
                    ";
            // line 168
            yield "                    <div class=\"card mt-3\">
                        <div class=\"card-header\">
                            <h5>
                                <i class=\"fas fa-code\"></i> ";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["raw-data"], "method", false, false, false, 171), "html", null, true);
            yield "
                                <button class=\"btn btn-sm btn-outline-secondary float-right\" 
                                        onclick=\"document.getElementById('rawData').classList.toggle('d-none')\">
                                    <i class=\"fas fa-eye\"></i> ";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["show-hide"], "method", false, false, false, 174), "html", null, true);
            yield "
                                </button>
                            </h5>
                        </div>
                        <div class=\"card-body d-none\" id=\"rawData\">
                            <pre class=\"bg-light p-3\" style=\"max-height: 400px; overflow-y: auto;\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 179), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true);
            yield "</pre>
                        </div>
                    </div>

                    ";
            // line 184
            yield "                    <div class=\"mt-3\">
                        <a href=\"";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 185), "html", null, true);
            yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["parse-another"], "method", false, false, false, 186), "html", null, true);
            yield "
                        </a>
                        ";
            // line 189
            yield "                    </div>
                </div>
            </div>
            ";
        }
        // line 193
        yield "        </div>
    </div>
</div>

";
        // line 198
        yield "<script>
document.getElementById('pdf_file').addEventListener('change', function(e) {
    var fileName = e.target.files[0].name;
    var label = e.target.nextElementSibling;
    label.textContent = fileName;
});
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Invoice2DataParser.html.twig";
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
        return array (  430 => 198,  424 => 193,  418 => 189,  413 => 186,  409 => 185,  406 => 184,  399 => 179,  391 => 174,  385 => 171,  380 => 168,  377 => 166,  369 => 160,  359 => 156,  354 => 154,  350 => 153,  346 => 152,  343 => 151,  339 => 150,  332 => 146,  328 => 145,  324 => 144,  320 => 143,  310 => 136,  306 => 134,  303 => 133,  296 => 127,  287 => 123,  281 => 121,  278 => 120,  270 => 118,  267 => 117,  259 => 115,  256 => 114,  248 => 112,  246 => 111,  240 => 108,  235 => 105,  232 => 103,  226 => 99,  218 => 97,  215 => 96,  207 => 94,  204 => 93,  196 => 91,  194 => 90,  188 => 87,  183 => 84,  180 => 83,  176 => 80,  170 => 77,  166 => 76,  163 => 75,  160 => 74,  153 => 69,  148 => 66,  145 => 65,  136 => 58,  128 => 53,  121 => 49,  108 => 39,  104 => 37,  97 => 32,  91 => 29,  83 => 24,  77 => 21,  73 => 19,  66 => 15,  59 => 10,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MenuTemplate.html.twig\" %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header\">
                    <h3>
                        <i class=\"fas fa-file-invoice fa-fw\"></i> {{ i18n.trans('parse-invoice-pdf') }}
                    </h3>
                </div>
                <div class=\"card-body\">
                    {# Formulario de subida #}
                    <form action=\"{{ fsc.url() }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form\">
                        <input type=\"hidden\" name=\"action\" value=\"upload\"/>
                        
                        {# Selector de Proveedor #}
                        <div class=\"form-group\">
                            <label for=\"provider\">
                                <i class=\"fas fa-building\"></i> {{ i18n.trans('supplier') }}
                            </label>
                            <select class=\"form-control\" id=\"provider\" name=\"provider\" required>
                                <option value=\"\">{{ i18n.trans('Selecciones proveedor') }}</option>
                                <option value=\"TUDIS\">Tudis</option>
                                <option value=\"LACALLE\">Embutidos la calle</option>
                                <option value=\"GM\">Transgourmet GM</option>
                                <option value=\"BEBIDASMARTIN\">Bebidas Martin</option>
                                <option value=\"otro\">{{ i18n.trans('other') }}</option>
                            </select>
                            <small class=\"form-text text-muted\">
                                {{ i18n.trans('select-supplier-to-use-correct-template') }}
                            </small>
                        </div>
                        
                        {# Selector de archivo PDF #}
                        <div class=\"form-group\">
                            <label for=\"pdf_file\">
                                <i class=\"fas fa-file-pdf\"></i> {{ i18n.trans('select-pdf-file') }}
                            </label>
                            <div class=\"custom-file\">
                                <input type=\"file\" 
                                       class=\"custom-file-input\" 
                                       id=\"pdf_file\" 
                                       name=\"pdf_file\" 
                                       accept=\"application/pdf\"
                                       required>
                                <label class=\"custom-file-label\" for=\"pdf_file\">
                                    {{ i18n.trans('choose-file') }}
                                </label>
                            </div>
                            <small class=\"form-text text-muted\">
                                {{ i18n.trans('max-file-size-10mb') }}
                            </small>
                        </div>
                        
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-upload\"></i> {{ i18n.trans('upload-and-parse') }}
                        </button>
                    </form>
                </div>
            </div>

            {# Mostrar resultados del parseo #}
            {% if fsc.invoiceData %}
            <div class=\"card shadow\">
                <div class=\"card-header bg-success text-white\">
                    <h4>
                        <i class=\"fas fa-check-circle\"></i> {{ i18n.trans('parse-results') }}
                    </h4>
                </div>
                <div class=\"card-body\">
                    {# Mostrar proveedor seleccionado #}
                    {% if fsc.selectedProvider %}
                    <div class=\"alert alert-info\">
                        <strong><i class=\"fas fa-building\"></i> {{ i18n.trans('supplier') }}:</strong> 
                        {{ fsc.selectedProvider|upper }}
                    </div>
                    {% endif %}

                    <div class=\"row\">
                        {# Información del proveedor #}
                        {% if fsc.invoiceData.issuer %}
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"card\">
                                <div class=\"card-header bg-info text-white\">
                                    <h5><i class=\"fas fa-building\"></i> {{ i18n.trans('supplier-info') }}</h5>
                                </div>
                                <div class=\"card-body\">
                                    {% if fsc.invoiceData.issuer.name %}
                                    <p><strong>{{ i18n.trans('name') }}:</strong> {{ fsc.invoiceData.issuer.name }}</p>
                                    {% endif %}
                                    {% if fsc.invoiceData.issuer.vat_number %}
                                    <p><strong>{{ i18n.trans('vat-number') }}:</strong> {{ fsc.invoiceData.issuer.vat_number }}</p>
                                    {% endif %}
                                    {% if fsc.invoiceData.issuer.address %}
                                    <p><strong>{{ i18n.trans('address') }}:</strong> {{ fsc.invoiceData.issuer.address }}</p>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        {% endif %}

                        {# Información de la factura #}
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"card\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h5><i class=\"fas fa-file-invoice-dollar\"></i> {{ i18n.trans('invoice-info') }}</h5>
                                </div>
                                <div class=\"card-body\">
                                    {% if fsc.invoiceData.invoice_number %}
                                    <p><strong>{{ i18n.trans('invoice-number') }}:</strong> {{ fsc.invoiceData.invoice_number }}</p>
                                    {% endif %}
                                    {% if fsc.invoiceData.date %}
                                    <p><strong>{{ i18n.trans('date') }}:</strong> {{ fsc.invoiceData.date }}</p>
                                    {% endif %}
                                    {% if fsc.invoiceData.due_date %}
                                    <p><strong>{{ i18n.trans('due-date') }}:</strong> {{ fsc.invoiceData.due_date }}</p>
                                    {% endif %}
                                    {% if fsc.invoiceData.amount %}
                                    <p><strong>{{ i18n.trans('total-amount') }}:</strong> 
                                        <span class=\"badge badge-success badge-lg\">
                                            {{ fsc.invoiceData.amount }} {{ fsc.invoiceData.currency|default('EUR') }}
                                        </span>
                                    </p>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>

                    {# Líneas de la factura #}
                    {% if fsc.invoiceData.lines %}
                    <div class=\"card mt-3\">
                        <div class=\"card-header bg-secondary text-white\">
                            <h5><i class=\"fas fa-list\"></i> {{ i18n.trans('invoice-lines') }}</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-hover\">
                                    <thead class=\"thead-dark\">
                                        <tr>
                                            <th>{{ i18n.trans('description') }}</th>
                                            <th class=\"text-right\">{{ i18n.trans('quantity') }}</th>
                                            <th class=\"text-right\">{{ i18n.trans('unit-price') }}</th>
                                            <th class=\"text-right\">{{ i18n.trans('total') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for line in fsc.invoiceData.lines %}
                                        <tr>
                                            <td>{{ line.description|default('-') }}</td>
                                            <td class=\"text-right\">{{ line.quantity|default('-') }}</td>
                                            <td class=\"text-right\">{{ line.unit_price|default('-') }}</td>
                                            <td class=\"text-right\">
                                                <strong>{{ line.total|default('-') }}</strong>
                                            </td>
                                        </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {% endif %}

                    {# Datos adicionales en formato JSON #}
                    <div class=\"card mt-3\">
                        <div class=\"card-header\">
                            <h5>
                                <i class=\"fas fa-code\"></i> {{ i18n.trans('raw-data') }}
                                <button class=\"btn btn-sm btn-outline-secondary float-right\" 
                                        onclick=\"document.getElementById('rawData').classList.toggle('d-none')\">
                                    <i class=\"fas fa-eye\"></i> {{ i18n.trans('show-hide') }}
                                </button>
                            </h5>
                        </div>
                        <div class=\"card-body d-none\" id=\"rawData\">
                            <pre class=\"bg-light p-3\" style=\"max-height: 400px; overflow-y: auto;\">{{ fsc.invoiceData|json_encode(constant('JSON_PRETTY_PRINT')) }}</pre>
                        </div>
                    </div>

                    {# Botones de acción #}
                    <div class=\"mt-3\">
                        <a href=\"{{ fsc.url() }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> {{ i18n.trans('parse-another') }}
                        </a>
                        {# Aquí puedes añadir más botones como \"Crear Factura\", \"Exportar\", etc. #}
                    </div>
                </div>
            </div>
            {% endif %}
        </div>
    </div>
</div>

{# Script para mostrar nombre del archivo seleccionado #}
<script>
document.getElementById('pdf_file').addEventListener('change', function(e) {
    var fileName = e.target.files[0].name;
    var label = e.target.nextElementSibling;
    label.textContent = fileName;
});
</script>
{% endblock %}", "Invoice2DataParser.html.twig", "/var/www/html/Plugins/ParseaFacturas/View/Invoice2DataParser.html.twig");
    }
}
