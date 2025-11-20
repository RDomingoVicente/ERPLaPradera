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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["Seleccione proveedor"], "method", false, false, false, 24), "html", null, true);
        yield "</option>
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "providers", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 26
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "internal_name", [], "any", false, false, false, 26), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "display_name", [], "any", false, false, false, 26), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "                                <option value=\"otro\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["other"], "method", false, false, false, 28), "html", null, true);
        yield "</option>
                            </select>
                            <small class=\"form-text text-muted\">
                                ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["select-supplier-to-use-correct-template"], "method", false, false, false, 31), "html", null, true);
        yield "
                            </small>
                        </div>
                        
                        ";
        // line 36
        yield "                        <div class=\"form-group\">
                            <label for=\"pdf_file\">
                                <i class=\"fas fa-file-pdf\"></i> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["select-pdf-file"], "method", false, false, false, 38), "html", null, true);
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
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["choose-file"], "method", false, false, false, 48), "html", null, true);
        yield "
                                </label>
                            </div>
                            <small class=\"form-text text-muted\">
                                ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["max-file-size-10mb"], "method", false, false, false, 52), "html", null, true);
        yield "
                            </small>
                        </div>
                        
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-upload\"></i> ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["upload-and-parse"], "method", false, false, false, 57), "html", null, true);
        yield "
                        </button>
                    </form>
                </div>
            </div>

            ";
        // line 64
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 64)) {
            // line 65
            yield "            <div class=\"card shadow\">
                <div class=\"card-header bg-success text-white\">
                    <h4>
                        <i class=\"fas fa-check-circle\"></i> ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["parse-results"], "method", false, false, false, 68), "html", null, true);
            yield "
                    </h4>
                </div>
                <div class=\"card-body\">
                    ";
            // line 73
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedProvider", [], "any", false, false, false, 73)) {
                // line 74
                yield "                    <div class=\"alert alert-info\">
                        <strong><i class=\"fas fa-building\"></i> ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["supplier"], "method", false, false, false, 75), "html", null, true);
                yield ":</strong> 
                        ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedProvider", [], "any", false, false, false, 76)), "html", null, true);
                yield "
                    </div>
                    ";
            }
            // line 79
            yield "
                    <div class=\"row\">
                        ";
            // line 82
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 82), "issuer", [], "any", false, false, false, 82)) {
                // line 83
                yield "                        <div class=\"col-md-6 mb-3\">
                            <div class=\"card\">
                                <div class=\"card-header bg-info text-white\">
                                    <h5><i class=\"fas fa-building\"></i> ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["supplier-info"], "method", false, false, false, 86), "html", null, true);
                yield "</h5>
                                </div>
                                <div class=\"card-body\">
                                    ";
                // line 89
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 89), "issuer", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89)) {
                    // line 90
                    yield "                                    <p><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["name"], "method", false, false, false, 90), "html", null, true);
                    yield ":</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 90), "issuer", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 92
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 92), "issuer", [], "any", false, false, false, 92), "vat_number", [], "any", false, false, false, 92)) {
                    // line 93
                    yield "                                    <p><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["vat-number"], "method", false, false, false, 93), "html", null, true);
                    yield ":</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 93), "issuer", [], "any", false, false, false, 93), "vat_number", [], "any", false, false, false, 93), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 95
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 95), "issuer", [], "any", false, false, false, 95), "address", [], "any", false, false, false, 95)) {
                    // line 96
                    yield "                                    <p><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["address"], "method", false, false, false, 96), "html", null, true);
                    yield ":</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 96), "issuer", [], "any", false, false, false, 96), "address", [], "any", false, false, false, 96), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 98
                yield "                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 102
            yield "
                        ";
            // line 104
            yield "                        <div class=\"col-md-6 mb-3\">
                            <div class=\"card\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h5><i class=\"fas fa-file-invoice-dollar\"></i> ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["invoice-info"], "method", false, false, false, 107), "html", null, true);
            yield "</h5>
                                </div>
                                <div class=\"card-body\">
                                ";
            // line 111
            yield "                                    <div class=\"row\">
                                        <div class=\"col-md-6 mb-3\">
                                            <p><strong>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["supplier"], "method", false, false, false, 113), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 113), "data", [], "any", false, true, false, 113), "Proveedor", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 113), "data", [], "any", false, true, false, 113), "Proveedor", [], "any", false, false, false, 113), "-")) : ("-")), "html", null, true);
            yield "</strong></p>
                                            <p><strong>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["invoice-number"], "method", false, false, false, 114), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 114), "data", [], "any", false, true, false, 114), "N_Factura", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 114), "data", [], "any", false, true, false, 114), "N_Factura", [], "any", false, false, false, 114), "-")) : ("-")), "html", null, true);
            yield "</strong></p>
                                        </div>
                                        <div class=\"col-md-6 mb-3\">
                                            <p><strong>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["date"], "method", false, false, false, 117), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 117), "data", [], "any", false, true, false, 117), "Fecha_factura", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 117), "data", [], "any", false, true, false, 117), "Fecha_factura", [], "any", false, false, false, 117), "-")) : ("-")), "html", null, true);
            yield "</strong></p>
                                            <p><strong>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total-amount"], "method", false, false, false, 118), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 118), "data", [], "any", false, true, false, 118), "Total_factura", [], "any", true, true, false, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 118), "data", [], "any", false, true, false, 118), "Total_factura", [], "any", false, false, false, 118), "-")) : ("-")), "html", null, true);
            yield "</strong></p>
                                            <span class=\"badge badge-success badge-lg\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 119), "amount", [], "any", true, true, false, 119)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 119), "amount", [], "any", false, false, false, 119), 0)) : (0)), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 119), "currency", [], "any", true, true, false, 119)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, true, false, 119), "currency", [], "any", false, false, false, 119), "EUR")) : ("EUR")), "html", null, true);
            yield "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            // line 126
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 126), "lines", [], "any", false, false, false, 126)) {
                // line 127
                yield "                    <div class=\"card mt-3\">
                        <div class=\"card-header bg-secondary text-white\">
                            <h5><i class=\"fas fa-list\"></i> ";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["invoice-lines"], "method", false, false, false, 129), "html", null, true);
                yield "</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-hover\">
                                    <thead class=\"thead-dark\">
                                        <tr>
                                            <th>";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["description"], "method", false, false, false, 136), "html", null, true);
                yield "</th>
                                            <th class=\"text-right\">";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["quantity"], "method", false, false, false, 137), "html", null, true);
                yield "</th>
                                            <th class=\"text-right\">";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["unit-price"], "method", false, false, false, 138), "html", null, true);
                yield "</th>
                                            <th class=\"text-right\">";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 139), "html", null, true);
                yield "</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 143), "lines", [], "any", false, false, false, 143));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 144
                    yield "                                        <tr>
                                            <td>";
                    // line 145
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "description", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "description", [], "any", false, false, false, 145), "-")) : ("-")), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">";
                    // line 146
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "quantity", [], "any", true, true, false, 146)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "quantity", [], "any", false, false, false, 146), "-")) : ("-")), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">";
                    // line 147
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "unit_price", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "unit_price", [], "any", false, false, false, 147), "-")) : ("-")), "html", null, true);
                    yield "</td>
                                            <td class=\"text-right\">
                                                <strong>";
                    // line 149
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "total", [], "any", true, true, false, 149)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "total", [], "any", false, false, false, 149), "-")) : ("-")), "html", null, true);
                    yield "</strong>
                                            </td>
                                        </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 159
            yield "
                    ";
            // line 161
            yield "                    <div class=\"card mt-3\">
                        <div class=\"card-header\">
                            <h5>
                                <i class=\"fas fa-code\"></i> ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["raw-data"], "method", false, false, false, 164), "html", null, true);
            yield "
                                <button class=\"btn btn-sm btn-outline-secondary float-right\" 
                                        onclick=\"document.getElementById('rawData').classList.toggle('d-none')\">
                                    <i class=\"fas fa-eye\"></i> ";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["show-hide"], "method", false, false, false, 167), "html", null, true);
            yield "
                                </button>
                            </h5>
                        </div>
                        <div class=\"card-body d-none\" id=\"rawData\">
                            <pre class=\"bg-light p-3\" style=\"max-height: 400px; overflow-y: auto;\">";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "invoiceData", [], "any", false, false, false, 172), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true);
            yield "</pre>
                        </div>
                    </div>

                    ";
            // line 177
            yield "                    <div class=\"mt-3\">
                        <a href=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 178), "html", null, true);
            yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> ";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["parse-another"], "method", false, false, false, 179), "html", null, true);
            yield "
                        </a>
                        ";
            // line 182
            yield "                    </div>
                </div>
            </div>
            ";
        }
        // line 186
        yield "        </div>
    </div>
</div>

";
        // line 191
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
        return array (  426 => 191,  420 => 186,  414 => 182,  409 => 179,  405 => 178,  402 => 177,  395 => 172,  387 => 167,  381 => 164,  376 => 161,  373 => 159,  365 => 153,  355 => 149,  350 => 147,  346 => 146,  342 => 145,  339 => 144,  335 => 143,  328 => 139,  324 => 138,  320 => 137,  316 => 136,  306 => 129,  302 => 127,  299 => 126,  288 => 119,  282 => 118,  276 => 117,  268 => 114,  262 => 113,  258 => 111,  252 => 107,  247 => 104,  244 => 102,  238 => 98,  230 => 96,  227 => 95,  219 => 93,  216 => 92,  208 => 90,  206 => 89,  200 => 86,  195 => 83,  192 => 82,  188 => 79,  182 => 76,  178 => 75,  175 => 74,  172 => 73,  165 => 68,  160 => 65,  157 => 64,  148 => 57,  140 => 52,  133 => 48,  120 => 38,  116 => 36,  109 => 31,  102 => 28,  91 => 26,  87 => 25,  83 => 24,  77 => 21,  73 => 19,  66 => 15,  59 => 10,  51 => 4,  47 => 3,  36 => 1,);
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
                                <option value=\"\">{{ i18n.trans('Seleccione proveedor') }}</option>
                                {% for provider in fsc.providers %}
                                    <option value=\"{{ provider.internal_name }}\">{{ provider.display_name }}</option>
                                {% endfor %}
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
                                {# Basic invoice data is always visible #}
                                    <div class=\"row\">
                                        <div class=\"col-md-6 mb-3\">
                                            <p><strong>{{ i18n.trans('supplier') }}: {{ fsc.invoiceData.data.Proveedor|default('-') }}</strong></p>
                                            <p><strong>{{ i18n.trans('invoice-number') }}: {{ fsc.invoiceData.data.N_Factura|default('-') }}</strong></p>
                                        </div>
                                        <div class=\"col-md-6 mb-3\">
                                            <p><strong>{{ i18n.trans('date') }}: {{ fsc.invoiceData.data.Fecha_factura|default('-') }}</strong></p>
                                            <p><strong>{{ i18n.trans('total-amount') }}: {{ fsc.invoiceData.data.Total_factura|default('-') }}</strong></p>
                                            <span class=\"badge badge-success badge-lg\">{{ fsc.invoiceData.amount|default(0) }} {{ fsc.invoiceData.currency|default('EUR') }}</span>
                                        </div>
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
{% endblock %}
", "Invoice2DataParser.html.twig", "/var/www/html/Plugins/ParseaFacturas/View/Invoice2DataParser.html.twig");
    }
}
