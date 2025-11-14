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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["select-supplier"], "method", false, false, false, 24), "html", null, true);
        yield "</option>
                                <option value=\"Tudis\">Tudis</option>
                                <option value=\"Lacalle\">Embutidos la calle</option>
                                <option value=\"orange\">Orange</option>
                                <option value=\"yoigo\">Yoigo</option>
                                <option value=\"masmovil\">MásMóvil</option>
                                <option value=\"pepephone\">Pepephone</option>
                                <option value=\"otro\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["other"], "method", false, false, false, 31), "html", null, true);
        yield "</option>
                            </select>
                            <small class=\"form-text text-muted\">
                                ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["select-supplier-to-use-correct-template"], "method", false, false, false, 34), "html", null, true);
        yield "
                            </small>
                        </div>
                        
                        ";
        // line 39
        yield "                        <div class=\"form-group\">
                            <label for=\"pdf_file\">
                                <i class=\"fas fa-file-pdf\"></i> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["select-pdf-file"], "method", false, false, false, 41), "html", null, true);
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
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["choose-file"], "method", false, false, false, 51), "html", null, true);
        yield "
                                </label>
                            </div>
                            <small class=\"form-text text-muted\">
                                ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["max-file-size-10mb"], "method", false, false, false, 55), "html", null, true);
        yield "
                            </small>
                        </div>
                        
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-upload\"></i> ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["upload-and-parse"], "method", false, false, false, 60), "html", null, true);
        yield "
                        </button>
                    </form>
                </div>
            </div>

            ";
        // line 67
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 67)) {
            // line 68
            yield "            <div class=\"card shadow\">
                <div class=\"card-header bg-success text-white\">
                    <h4>
                        <i class=\"fas fa-check-circle\"></i> ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["parse-results"], "method", false, false, false, 71), "html", null, true);
            yield "
                    </h4>
                </div>
                <div class=\"card-body\">
                    ";
            // line 76
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedProvider", [], "any", false, false, false, 76)) {
                // line 77
                yield "                    <div class=\"alert alert-info\">
                        <strong><i class=\"fas fa-building\"></i> ";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["supplier"], "method", false, false, false, 78), "html", null, true);
                yield ":</strong> 
                        ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedProvider", [], "any", false, false, false, 79)), "html", null, true);
                yield "
                    </div>
                    ";
            }
            // line 82
            yield "
                    <div class=\"row\">
                        ";
            // line 85
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 85), "issuer", [], "any", false, false, false, 85)) {
                // line 86
                yield "                        <div class=\"col-md-6 mb-3\">
                            <div class=\"card\">
                                <div class=\"card-header bg-info text-white\">
                                    <h5><i class=\"fas fa-building\"></i> ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["supplier-info"], "method", false, false, false, 89), "html", null, true);
                yield "</h5>
                                </div>
                                <div class=\"card-body\">
                                    ";
                // line 92
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 92), "issuer", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92)) {
                    // line 93
                    yield "                                    <p><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["name"], "method", false, false, false, 93), "html", null, true);
                    yield ":</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 93), "issuer", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 95
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 95), "issuer", [], "any", false, false, false, 95), "vat_number", [], "any", false, false, false, 95)) {
                    // line 96
                    yield "                                    <p><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["vat-number"], "method", false, false, false, 96), "html", null, true);
                    yield ":</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 96), "issuer", [], "any", false, false, false, 96), "vat_number", [], "any", false, false, false, 96), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 98
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 98), "issuer", [], "any", false, false, false, 98), "address", [], "any", false, false, false, 98)) {
                    // line 99
                    yield "                                    <p><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["address"], "method", false, false, false, 99), "html", null, true);
                    yield ":</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 99), "issuer", [], "any", false, false, false, 99), "address", [], "any", false, false, false, 99), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 101
                yield "                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 105
            yield "
                        ";
            // line 107
            yield "                        <div class=\"col-md-6 mb-3\">
                            <div class=\"card\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h5><i class=\"fas fa-file-invoice-dollar\"></i> ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["invoice-info"], "method", false, false, false, 110), "html", null, true);
            yield "</h5>
                                </div>
                                <div class=\"card-body\">
                                    ";
            // line 113
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 113), "invoice_number", [], "any", false, false, false, 113)) {
                // line 114
                yield "                                    <p><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["invoice-number"], "method", false, false, false, 114), "html", null, true);
                yield ":</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 114), "invoice_number", [], "any", false, false, false, 114), "html", null, true);
                yield "</p>
                                    ";
            }
            // line 116
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 116), "date", [], "any", false, false, false, 116)) {
                // line 117
                yield "                                    <p><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["date"], "method", false, false, false, 117), "html", null, true);
                yield ":</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 117), "date", [], "any", false, false, false, 117), "html", null, true);
                yield "</p>
                                    ";
            }
            // line 119
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 119), "due_date", [], "any", false, false, false, 119)) {
                // line 120
                yield "                                    <p><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["due-date"], "method", false, false, false, 120), "html", null, true);
                yield ":</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 120), "due_date", [], "any", false, false, false, 120), "html", null, true);
                yield "</p>
                                    ";
            }
            // line 122
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 122), "amount", [], "any", false, false, false, 122)) {
                // line 123
                yield "                                    <p><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total-amount"], "method", false, false, false, 123), "html", null, true);
                yield ":</strong> 
                                        <span class=\"badge badge-success badge-lg\">
                                            ";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 125), "amount", [], "any", false, false, false, 125), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 125), "currency", [], "any", true, true, false, 125)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 125), "currency", [], "any", false, false, false, 125), "EUR")) : ("EUR")), "html", null, true);
                yield "
                                        </span>
                                    </p>
                                    ";
            }
            // line 129
            yield "                                </div>
                            </div>
                        </div>
                    </div>

                    ";
            // line 135
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 135), "lines", [], "any", false, false, false, 135)) {
                // line 136
                yield "                    <div class=\"card mt-3\">
                        <div class=\"card-header bg-secondary text-white\">
                            <h5><i class=\"fas fa-list\"></i> ";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["invoice-lines"], "method", false, false, false, 138), "html", null, true);
                yield "</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-hover\">
                                    <thead class=\"thead-dark\">
                                        <tr>
                                            <th>";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["description"], "method", false, false, false, 145), "html", null, true);
                yield "</th>
                                            <th class=\"text-right\">";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["quantity"], "method", false, false, false, 146), "html", null, true);
                yield "</th>
                                            <th class=\"text-right\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["unit-price"], "method", false, false, false, 147), "html", null, true);
                yield "</th>
                                            <th class=\"text-right\">";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 148), "html", null, true);
                yield "</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 152), "lines", [], "any", false, false, false, 152));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 153
                    yield "                                        <tr>
                                            <td>";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "description", [], "any", true, true, false, 154)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "description", [], "any", false, false, false, 154), "-")) : ("-")), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">";
                    // line 155
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "quantity", [], "any", true, true, false, 155)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 155), "-")) : ("-")), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "unit_price", [], "any", true, true, false, 156)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "unit_price", [], "any", false, false, false, 156), "-")) : ("-")), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">
                                                <strong>";
                    // line 158
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "total", [], "any", true, true, false, 158)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "total", [], "any", false, false, false, 158), "-")) : ("-")), "html", null, true);
                    yield "</strong>
                                            </td>
                                        </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 168
            yield "
                    ";
            // line 170
            yield "                    <div class=\"card mt-3\">
                        <div class=\"card-header\">
                            <h5>
                                <i class=\"fas fa-code\"></i> ";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["raw-data"], "method", false, false, false, 173), "html", null, true);
            yield "
                                <button class=\"btn btn-sm btn-outline-secondary float-right\" 
                                        onclick=\"document.getElementById('rawData').classList.toggle('d-none')\">
                                    <i class=\"fas fa-eye\"></i> ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["show-hide"], "method", false, false, false, 176), "html", null, true);
            yield "
                                </button>
                            </h5>
                        </div>
                        <div class=\"card-body d-none\" id=\"rawData\">
                            <pre class=\"bg-light p-3\" style=\"max-height: 400px; overflow-y: auto;\">";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 181), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true);
            yield "</pre>
                        </div>
                    </div>

                    ";
            // line 186
            yield "                    <div class=\"mt-3\">
                        <a href=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 187), "html", null, true);
            yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> ";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["parse-another"], "method", false, false, false, 188), "html", null, true);
            yield "
                        </a>
                        ";
            // line 191
            yield "                    </div>
                </div>
            </div>
            ";
        }
        // line 195
        yield "        </div>
    </div>
</div>

";
        // line 200
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
        return array (  432 => 200,  426 => 195,  420 => 191,  415 => 188,  411 => 187,  408 => 186,  401 => 181,  393 => 176,  387 => 173,  382 => 170,  379 => 168,  371 => 162,  361 => 158,  356 => 156,  352 => 155,  348 => 154,  345 => 153,  341 => 152,  334 => 148,  330 => 147,  326 => 146,  322 => 145,  312 => 138,  308 => 136,  305 => 135,  298 => 129,  289 => 125,  283 => 123,  280 => 122,  272 => 120,  269 => 119,  261 => 117,  258 => 116,  250 => 114,  248 => 113,  242 => 110,  237 => 107,  234 => 105,  228 => 101,  220 => 99,  217 => 98,  209 => 96,  206 => 95,  198 => 93,  196 => 92,  190 => 89,  185 => 86,  182 => 85,  178 => 82,  172 => 79,  168 => 78,  165 => 77,  162 => 76,  155 => 71,  150 => 68,  147 => 67,  138 => 60,  130 => 55,  123 => 51,  110 => 41,  106 => 39,  99 => 34,  93 => 31,  83 => 24,  77 => 21,  73 => 19,  66 => 15,  59 => 10,  51 => 4,  47 => 3,  36 => 1,);
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
                                <option value=\"\">{{ i18n.trans('select-supplier') }}</option>
                                <option value=\"Tudis\">Tudis</option>
                                <option value=\"Lacalle\">Embutidos la calle</option>
                                <option value=\"orange\">Orange</option>
                                <option value=\"yoigo\">Yoigo</option>
                                <option value=\"masmovil\">MásMóvil</option>
                                <option value=\"pepephone\">Pepephone</option>
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
