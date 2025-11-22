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

/* AdminPlugins.html.twig */
class __TwigTemplate_a9df4357550fc1fd84f1a731da3b8d58 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $macros["Utils"] = $this->macros["Utils"] = $this->loadTemplate("Macro/Utils.html.twig", "AdminPlugins.html.twig", 21)->unwrap();
        // line 20
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "AdminPlugins.html.twig", 20);
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
    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 29), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        yield "\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 32
        if (((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 32), "homepage", [], "any", false, false, false, 32))) {
            // line 33
            yield "                        <a class=\"btn btn-sm btn-secondary active\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 33), "html", null, true);
            yield "?defaultPage=FALSE\"
                           title=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("marked-as-homepage"), "html", null, true);
            yield "\">
                            <i class=\"fa-solid fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 38
            yield "                        <a class=\"btn btn-sm btn-secondary\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 38), "html", null, true);
            yield "?defaultPage=TRUE\"
                           title=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("mark-as-homepage"), "html", null, true);
            yield "\">
                            <i class=\"fa-regular fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 43
        yield "                </div>
                ";
        // line 44
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 45
            yield "                    <button class=\"btn btn-spin-action btn-sm btn-success\" type=\"button\" data-bs-toggle=\"modal\"
                            data-bs-target=\"#modalAddPlugin\">
                        <i class=\"fa-solid fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
            yield "</span>
                    </button>
                ";
        }
        // line 51
        yield "                <div class=\"btn-group\">
                    <a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 52), "html", null, true);
        yield "?action=rebuild&multireqtoken=";
        yield $this->env->getFunction('formToken')->getCallable()(false);
        yield "\"
                       onclick=\"animateSpinner('add')\" class=\"btn btn-spin-action btn-sm btn-warning\">
                        <i class=\"fa-solid fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("rebuild"), "html", null, true);
        yield "</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm text-end\">
                <h1 class=\"h3\">
                    ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->env->getFunction('trans')->getCallable()((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 61)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["title"] ?? null) : null))), "html", null, true);
        yield "
                    <i class=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 62)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["icon"] ?? null) : null), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-bs-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fa-solid fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("installed-plugins"), "html", null, true);
        yield "
                ";
        // line 71
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 71)) > 0)) {
            // line 72
            yield "                    <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 72)), "html", null, true);
            yield "</span>
                ";
        }
        // line 74
        yield "            </a>
        </li>
        ";
        // line 76
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 77
            yield "            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-bs-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fa-solid fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("more-plugins"), "html", null, true);
            yield "</span>
                    ";
            // line 81
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 81)) > 0)) {
                // line 82
                yield "                        <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 82)), "html", null, true);
                yield "</span>
                    ";
            }
            // line 84
            yield "                </a>
            </li>
        ";
        }
        // line 87
        yield "    </ul>
";
        return; yield '';
    }

    // line 90
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        yield "    ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            ";
        // line 94
        yield CoreExtension::callMacro($macros["_self"], "macro_showInstalledPlugins", [($context["fsc"] ?? null)], 94, $context, $this->getSourceContext());
        yield "
            ";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "updated", [], "any", false, false, false, 95) == false)) {
            // line 96
            yield "                <div class=\"ms-2 mt-4 me-2 mb-3\">
                    ";
            // line 97
            yield CoreExtension::callMacro($macros["Utils"], "macro_updateInstall", [], 97, $context, $this->getSourceContext());
            yield "
                </div>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["fsc"] ?? null), "registered", [], "any", false, false, false, 99) == false)) {
            // line 100
            yield "                <hr/>
                <div class=\"ms-2 mt-4 me-2 mb-3\">
                    ";
            // line 102
            yield CoreExtension::callMacro($macros["Utils"], "macro_registerInstall", [], 102, $context, $this->getSourceContext());
            yield "
                </div>
            ";
        }
        // line 105
        yield "        </div>
        ";
        // line 106
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 107
            yield "            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                ";
            // line 108
            yield CoreExtension::callMacro($macros["_self"], "macro_showAllPlugins", [($context["fsc"] ?? null)], 108, $context, $this->getSourceContext());
            yield "
            </div>
        ";
        }
        // line 111
        yield "    </div>

    ";
        // line 114
        yield "    ";
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 115
            yield "        <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 115), "html", null, true);
            yield "\" class=\"form\" enctype=\"multipart/form-data\" id=\"f_add_plugins\" method=\"post\"
              name=\"upload-plugins\" onsubmit=\"animateSpinner('add')\">
            ";
            // line 117
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
            <input type=\"hidden\" name=\"action\" value=\"upload\"/>
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">
                                <i class=\"fa-solid fa-file-zipper me-2\"></i> ";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add-new-plugin"), "html", null, true);
            yield "
                            </h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            yield "\"></button>
                        </div>
                        ";
            // line 128
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 128) < 99)) {
                // line 129
                yield "                            <div class=\"alert alert-dismissible alert-warning mb-0\">
                                ";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 130)]), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 133
            yield "                        <div class=\"modal-body\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("select-plugin-zip-file"), "html", null, true);
            yield "</label>
                                <input type=\"file\" name=\"plugin[]\" class=\"form-control\" accept=\"application/zip\" multiple required/>
                                ";
            // line 137
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 137) >= 99)) {
                // line 138
                yield "                                    <div class=\"form-text\">
                                        ";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 139)]), "html", null, true);
                yield "
                                    </div>
                                ";
            }
            // line 142
            yield "                            </div>
                            <div class=\"text-end mt-5\">
                                <button type=\"button\" class=\"btn btn-spin-action btn-secondary\" data-bs-dismiss=\"modal\">
                                    ";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            yield "
                                </button>
                                <button type=\"submit\" class=\"btn btn-spin-action btn-success\">
                                    ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("continue"), "html", null, true);
            yield "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        return; yield '';
    }

    // line 159
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 161
        if (($this->env->getFunction('config')->getCallable()("disable_rm_plugins", false) == false)) {
            // line 162
            yield "        <script>
            function deletePlugin(pluginName) {
                // Si ya existe un modal con el ID 'dynamicAdminPluginsDeleteModal', lo eliminamos
                const existingModal = document.getElementById('dynamicAdminPluginsDeleteModal');
                if (existingModal) {
                    existingModal.remove();
                }

                const adminPluginsDeleteCancel = \"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            yield "\";
                const adminPluginsDeleteConfirm = \"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            yield "\";
                const adminPluginsDeleteMessage = \"";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
            yield "\";
                const adminPluginsDeleteTitle = \"";
            // line 173
            yield $this->env->getFunction('trans')->getCallable()("confirm-delete");
            yield "\";

                // Crear el HTML del modal como string usando los parámetros
                const modalHTML = `
                    <div class=\"modal fade\" id=\"dynamicAdminPluginsDeleteModal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"dynamicAdminPluginsDeleteModalLabel\" aria-hidden=\"true\">
                      <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"dynamicAdminPluginsDeleteModalLabel\">\${adminPluginsDeleteTitle}</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                          </div>
                          <div class=\"modal-body\">
                            \${adminPluginsDeleteMessage}
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary btn-spin-action\" data-bs-dismiss=\"modal\">\${adminPluginsDeleteCancel}</button>
                            <button type=\"button\" id=\"saveDynamicAdminPluginsDeleteModalBtn\" class=\"btn btn-danger btn-spin-action\">\${adminPluginsDeleteConfirm}</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  `;

                // Insertar el modal en el body
                document.body.insertAdjacentHTML('beforeend', modalHTML);

                // Crear una instancia del modal y mostrarlo
                const myModal = new bootstrap.Modal(document.getElementById('dynamicAdminPluginsDeleteModal'));
                myModal.show();

                // Añadir comportamiento al botón de \"Guardar cambios\"
                document.getElementById('saveDynamicAdminPluginsDeleteModalBtn').addEventListener('click', function () {
                    // Ejecutar la acción de eliminar
                    animateSpinner('add');
                    window.location = \"";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 207), "html", null, true);
            yield "?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName
                        + \"\\u0026\" + \"multireqtoken=";
            // line 208
            yield $this->env->getFunction('formToken')->getCallable()(false);
            yield "\";

                    // Cierra el modal
                    myModal.hide();
                });

                // Eliminar el modal del DOM cuando se cierra
                document.getElementById('dynamicAdminPluginsDeleteModal').addEventListener('hidden.bs.modal', function () {
                    document.getElementById('dynamicAdminPluginsDeleteModal').remove();
                });
            }

            \$(document).ready(function () {
                searchList('#querySearchPlugin', '#all-plugins .wrapper-card', '.card-title');
                searchList('#querySearchInstalledPlugins', '#installed-plugins .item-plugin', '.plugin-name');

                // si los archivos son demasiado grandes, no se pueden subir
                \$(\"#f_add_plugins\").submit(function (e) {
                    let size = 0;
                    let files = document.querySelector('input[type=file]').files;
                    for (let i = 0; i < files.length; i++) {
                        size += files[i].size;
                    }

                    if (size > ";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 232), "html", null, true);
            yield " * 1024 * 1024) { // MB
                        e.preventDefault();
                        alert('";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("plugin-file-too-big", ["%size%" => CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 234)]), "html", null, true);
            yield "');
                        animateSpinner('remove');
                    }
                });
            });

            function searchList(querySelectorInput, querySelectorItem, querySelectorPluginName) {
                \$(querySelectorInput).on('keyup', function (e) {
                    const query = this.value.toLowerCase().trim();
                    \$(querySelectorItem).each(function (index, value) {
                        \$(value).toggle(\$(querySelectorPluginName, value).text().toLowerCase().trim().includes(query));
                    });
                });
            }
        </script>
    ";
        }
        return; yield '';
    }

    // line 252
    public function macro_healthStatus($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 253
            yield "    ";
            if ((($context["value"] ?? null) < 1)) {
                // line 254
                yield "        <i class=\"fa-solid fa-heart-broken\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
    ";
            } elseif ((            // line 259
($context["value"] ?? null) < 2)) {
                // line 260
                yield "        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
    ";
            } elseif ((            // line 265
($context["value"] ?? null) < 3)) {
                // line 266
                yield "        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
    ";
            } elseif ((            // line 271
($context["value"] ?? null) < 4)) {
                // line 272
                yield "        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
    ";
            } elseif ((            // line 277
($context["value"] ?? null) < 5)) {
                // line 278
                yield "        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
    ";
            } else {
                // line 284
                yield "        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 292
    public function macro_showAllPlugins($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 293
            yield "    <div class=\"p-2\">
        <input type=\"text\" class=\"form-control shadow-sm\" id=\"querySearchPlugin\" placeholder=\"";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
            yield "\"/>
    </div>
    <div class=\"row row-cols-3 ps-2 pe-2\" id=\"all-plugins\">
        ";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 297));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 298
                yield "            ";
                $context["extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 298) > 2)) ? ("border-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 298) == 0)) ? ("border-danger") : ("border-warning"))));
                // line 299
                yield "            <div class=\"col mb-2 wrapper-card\">
                <div class=\"card ";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraClass"] ?? null), "html", null, true);
                yield " shadow-sm h-100\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "idplugin", [], "any", false, false, false, 300), "html", null, true);
                yield "\">
                    <div class=\"card-body p-2\">
                        <h5 class=\"card-title\">";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 302), "html", null, true);
                yield " v";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 302), "html", null, true);
                yield "</h5>
                        <p class=\"card-text\">";
                // line 303
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 303), 0, 300), "html", null, true));
                yield "</p>
                    </div>
                    <div class=\"card-footer p-2\">
                        ";
                // line 306
                $context["extraBtnClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 306) > 2)) ? ("btn-outline-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 306) == 0)) ? ("btn-outline-danger") : ("btn-outline-warning"))));
                // line 307
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "url", [], "any", false, false, false, 307), "html", null, true);
                yield "\" class=\"btn ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraBtnClass"] ?? null), "html", null, true);
                yield "\" target=\"_blank\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
                yield "</a>
                        <span class=\"ms-2 text-danger\" title=\"";
                // line 308
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("health"), "html", null, true);
                yield "\">
                            ";
                // line 309
                yield CoreExtension::callMacro($macros["_self"], "macro_healthStatus", [CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 309)], 309, $context, $this->getSourceContext());
                yield "
                        </span>
                    </div>
                </div>
            </div>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 315
                yield "            <div class=\"text-center bg-warning rounded\">
                <h2>";
                // line 316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
                yield "</h2>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            yield "    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 322
    public function macro_showInstalledPlugins($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 323
            yield "    <div class=\"m-2 mb-3\">
        <input type=\"text\" class=\"form-control border-dark\" id=\"querySearchInstalledPlugins\"
               placeholder=\"";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
            yield "\"/>
    </div>

    <div class=\"card border-success m-2 mb-3\">
        <div class=\"card-header border-success\">";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enabled-plugins"), "html", null, true);
            yield "</div>
        ";
            // line 330
            yield CoreExtension::callMacro($macros["_self"], "macro_tablePlugins", [Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 330), function ($__plugin__) use ($context, $macros) { $context["plugin"] = $__plugin__; return CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "enabled", [], "any", false, false, false, 330); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "order", [], "any", false, false, false, 330) <=> CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "order", [], "any", false, false, false, 330)); }), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 330)], 330, $context, $this->getSourceContext());
            yield "
    </div>

    <div class=\"card border-dark m-2 mb-4\">
        <div class=\"card-header border-dark\">";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("disabled-plugins"), "html", null, true);
            yield "</div>
        ";
            // line 335
            yield CoreExtension::callMacro($macros["_self"], "macro_tablePlugins", [Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 335), function ($__plugin__) use ($context, $macros) { $context["plugin"] = $__plugin__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "enabled", [], "any", false, false, false, 335) == false); }), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 335)], 335, $context, $this->getSourceContext());
            yield "
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 339
    public function macro_tablePlugins($__pluginList__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "pluginList" => $__pluginList__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 340
            yield "    <div class=\"table-responsive\" id=\"installed-plugins\">
        <table class=\"table table-striped table-hover mb-0\">
            <thead>
            <tr>
                <th>";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("name"), "html", null, true);
            yield "</th>
                <th class=\"text-end\">";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("version"), "html", null, true);
            yield "</th>
                <th>";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
            yield "</th>
                <th class=\"text-end pe-3\">";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("actions"), "html", null, true);
            yield "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 351
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pluginList"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 352
                yield "                ";
                $context["trClass"] = "table-danger";
                // line 353
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 353)) {
                    // line 354
                    yield "                    ";
                    $context["trClass"] = "table-success";
                    // line 355
                    yield "                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "compatible", [], "any", false, false, false, 355)) {
                    // line 356
                    yield "                    ";
                    $context["trClass"] = "";
                    // line 357
                    yield "                ";
                }
                // line 358
                yield "                <tr class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["trClass"] ?? null), "html", null, true);
                yield " item-plugin\">
                    <td class=\"plugin-name\">";
                // line 359
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 359), "html", null, true);
                yield "</td>
                    <td class=\"text-end\">
                        ";
                // line 361
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 361) == 0)) {
                    // line 362
                    yield "                            <span class=\"text-danger\">v";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 362), "html", null, true);
                    yield "</span>
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 363
$context["plugin"], "version", [], "any", false, false, false, 363) < 1)) {
                    // line 364
                    yield "                            <span class=\"text-warning\">v";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 364), "html", null, true);
                    yield "</span>
                        ";
                } else {
                    // line 366
                    yield "                            v";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 366), "html", null, true);
                    yield "
                        ";
                }
                // line 368
                yield "                    </td>
                    <td>
                        ";
                // line 370
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 370), "html", null, true));
                yield "
                        ";
                // line 371
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "forja", ["url", ""], "method", false, false, false, 371)) {
                    // line 372
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "forja", ["url", ""], "method", false, false, false, 372), "html", null, true);
                    yield "\" target=\"_blank\" class=\"ms-2\">
                                ";
                    // line 373
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("more"), "html", null, true);
                    yield " <i class=\"fa-solid fa-external-link-alt\"></i>
                            </a>
                        ";
                }
                // line 376
                yield "                        <br/>
                        ";
                // line 377
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "require", [], "any", false, false, false, 377));
                foreach ($context['_seq'] as $context["_key"] => $context["requiredPluginName"]) {
                    // line 378
                    yield "                            <div class=\"badge bg-secondary\">
                                ";
                    // line 379
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("plugin-needed", ["%pluginName%" => $context["requiredPluginName"]]), "html", null, true);
                    yield "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requiredPluginName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 382
                yield "                    </td>
                    <td class=\"text-end text-nowrap\">
                        ";
                // line 384
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "hasUpdate", [], "method", false, false, false, 384)) {
                    // line 385
                    yield "                            <a href=\"Updater\" class=\"btn btn-spin-action btn-sm btn-info me-1\"
                               title=\"";
                    // line 386
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("updater"), "html", null, true);
                    yield "\">
                                <i class=\"fa-solid fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                            </a>
                        ";
                }
                // line 390
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 390)) {
                    // line 391
                    yield "                            <a class=\"btn btn-sm btn-secondary btn-spin-action\" onclick=\"animateSpinner('add');\"
                               href=\"";
                    // line 392
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                    yield "?action=disable&amp;plugin=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 392), "html", null, true);
                    yield "&amp;multireqtoken=";
                    yield $this->env->getFunction('formToken')->getCallable()(false);
                    yield "\">
                                <i class=\"fa-solid fa-toggle-off me-1\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 394
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("disable"), "html", null, true);
                    yield "</span>
                            </a>
                            <br/>
                            <small>";
                    // line 397
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("plugin-order", ["%num%" => CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "order", [], "any", false, false, false, 397)]), "html", null, true);
                    yield "</small>
                        ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 398
$context["plugin"], "compatible", [], "any", false, false, false, 398)) {
                    // line 399
                    yield "                            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "hasUpdate", [], "method", false, false, false, 399)) {
                        // line 400
                        yield "                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-sm btn-warning dropdown-toggle\"
                                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        ";
                        // line 403
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        yield "
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"Updater\">
                                            <i class=\"fa-solid fa-cloud-download-alt fa-fw me-1\" aria-hidden=\"true\"></i>
                                            ";
                        // line 408
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("update"), "html", null, true);
                        yield "
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\"
                                           href=\"";
                        // line 412
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                        yield "?action=enable&amp;plugin=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 412), "html", null, true);
                        yield "&amp;multireqtoken=";
                        yield $this->env->getFunction('formToken')->getCallable()(false);
                        yield "\">
                                            <i class=\"fa-solid fa-check fa-fw me-1\" aria-hidden=\"true\"></i>
                                            ";
                        // line 414
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        yield "
                                        </a>
                                    </div>
                                </div>
                            ";
                    } else {
                        // line 419
                        yield "                                <a class=\"btn btn-sm btn-success btn-spin-action\" onclick=\"animateSpinner('add');\"
                                   href=\"";
                        // line 420
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                        yield "?action=enable&amp;plugin=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 420), "html", null, true);
                        yield "&amp;multireqtoken=";
                        yield $this->env->getFunction('formToken')->getCallable()(false);
                        yield "\">
                                    <i class=\"fa-solid fa-toggle-on me-1\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                        // line 422
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        yield "</span>
                                </a>
                            ";
                    }
                    // line 425
                    yield "                        ";
                } else {
                    // line 426
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "compatibilityDescription", [], "method", false, false, false, 426), "html", null, true);
                    yield "
                        ";
                }
                // line 428
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 428) == false) && ($this->env->getFunction('config')->getCallable()("disable_rm_plugins", false) == false))) {
                    // line 429
                    yield "                            <a class=\"btn btn-sm btn-danger ms-2 btn-spin-action\" href=\"#\"
                               title=\"";
                    // line 430
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
                    yield "\" onclick=\"deletePlugin('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 430), "html", null, true);
                    yield "');\">
                                <i class=\"fa-solid fa-trash-alt\" aria-hidden=\"true\"></i>
                            </a>
                        ";
                }
                // line 434
                yield "                    </td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 437
                yield "                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>";
                // line 438
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
                yield "</b></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 441
            yield "            </tbody>
        </table>
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
        return "AdminPlugins.html.twig";
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
        return array (  956 => 441,  947 => 438,  944 => 437,  937 => 434,  928 => 430,  925 => 429,  922 => 428,  916 => 426,  913 => 425,  907 => 422,  898 => 420,  895 => 419,  887 => 414,  878 => 412,  871 => 408,  863 => 403,  858 => 400,  855 => 399,  853 => 398,  849 => 397,  843 => 394,  834 => 392,  831 => 391,  828 => 390,  821 => 386,  818 => 385,  816 => 384,  812 => 382,  803 => 379,  800 => 378,  796 => 377,  793 => 376,  787 => 373,  782 => 372,  780 => 371,  776 => 370,  772 => 368,  766 => 366,  760 => 364,  758 => 363,  753 => 362,  751 => 361,  746 => 359,  741 => 358,  738 => 357,  735 => 356,  732 => 355,  729 => 354,  726 => 353,  723 => 352,  718 => 351,  711 => 347,  707 => 346,  703 => 345,  699 => 344,  693 => 340,  680 => 339,  671 => 335,  667 => 334,  660 => 330,  656 => 329,  649 => 325,  645 => 323,  633 => 322,  626 => 319,  617 => 316,  614 => 315,  603 => 309,  599 => 308,  590 => 307,  588 => 306,  582 => 303,  576 => 302,  569 => 300,  566 => 299,  563 => 298,  558 => 297,  552 => 294,  549 => 293,  537 => 292,  525 => 284,  517 => 278,  515 => 277,  508 => 272,  506 => 271,  499 => 266,  497 => 265,  490 => 260,  488 => 259,  481 => 254,  478 => 253,  466 => 252,  444 => 234,  439 => 232,  412 => 208,  408 => 207,  371 => 173,  367 => 172,  363 => 171,  359 => 170,  349 => 162,  347 => 161,  342 => 160,  338 => 159,  323 => 148,  317 => 145,  312 => 142,  306 => 139,  303 => 138,  301 => 137,  296 => 135,  292 => 133,  286 => 130,  283 => 129,  281 => 128,  276 => 126,  271 => 124,  261 => 117,  255 => 115,  252 => 114,  248 => 111,  242 => 108,  239 => 107,  237 => 106,  234 => 105,  228 => 102,  224 => 100,  222 => 99,  217 => 97,  214 => 96,  212 => 95,  208 => 94,  201 => 91,  197 => 90,  191 => 87,  186 => 84,  180 => 82,  178 => 81,  174 => 80,  169 => 77,  167 => 76,  163 => 74,  157 => 72,  155 => 71,  151 => 70,  140 => 62,  136 => 61,  127 => 55,  119 => 52,  116 => 51,  110 => 48,  105 => 45,  103 => 44,  100 => 43,  93 => 39,  88 => 38,  81 => 34,  76 => 33,  74 => 32,  66 => 29,  57 => 24,  53 => 23,  48 => 20,  46 => 21,  39 => 20,);
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
{% extends \"Master/MenuBghTemplate.html.twig\" %}
{% import 'Macro/Utils.html.twig' as Utils %}

{% block bodyHeaderOptions %}
    {{ parent() }}
    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"{{ fsc.url() }}\" title=\"{{ trans('refresh') }}\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    {% if fsc.getPageData()['name'] == fsc.user.homepage %}
                        <a class=\"btn btn-sm btn-secondary active\" href=\"{{ fsc.url() }}?defaultPage=FALSE\"
                           title=\"{{ trans('marked-as-homepage') }}\">
                            <i class=\"fa-solid fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    {% else %}
                        <a class=\"btn btn-sm btn-secondary\" href=\"{{ fsc.url() }}?defaultPage=TRUE\"
                           title=\"{{ trans('mark-as-homepage') }}\">
                            <i class=\"fa-regular fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                </div>
                {% if config('disable_add_plugins', false) == false %}
                    <button class=\"btn btn-spin-action btn-sm btn-success\" type=\"button\" data-bs-toggle=\"modal\"
                            data-bs-target=\"#modalAddPlugin\">
                        <i class=\"fa-solid fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">{{ trans('add') }}</span>
                    </button>
                {% endif %}
                <div class=\"btn-group\">
                    <a href=\"{{ fsc.url() }}?action=rebuild&multireqtoken={{ formToken(false) }}\"
                       onclick=\"animateSpinner('add')\" class=\"btn btn-spin-action btn-sm btn-warning\">
                        <i class=\"fa-solid fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">{{ trans('rebuild') }}</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm text-end\">
                <h1 class=\"h3\">
                    {{ trans(fsc.getPageData()['title']) | capitalize }}
                    <i class=\"{{ fsc.getPageData()['icon'] }}\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-bs-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fa-solid fa-box-open fa-fw\" aria-hidden=\"true\"></i> {{ trans('installed-plugins') }}
                {% if fsc.pluginList | length > 0 %}
                    <span class=\"badge bg-secondary\">{{ fsc.pluginList | length }}</span>
                {% endif %}
            </a>
        </li>
        {% if config('disable_add_plugins', false) == false %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-bs-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fa-solid fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">{{ trans('more-plugins') }}</span>
                    {% if fsc.remotePluginList | length > 0 %}
                        <span class=\"badge bg-secondary\">{{ fsc.remotePluginList | length }}</span>
                    {% endif %}
                </a>
            </li>
        {% endif %}
    </ul>
{% endblock %}

{% block body %}
    {{ parent() }}
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            {{ _self.showInstalledPlugins(fsc) }}
            {% if fsc.updated == false %}
                <div class=\"ms-2 mt-4 me-2 mb-3\">
                    {{ Utils.updateInstall() }}
                </div>
            {% elseif fsc.registered == false %}
                <hr/>
                <div class=\"ms-2 mt-4 me-2 mb-3\">
                    {{ Utils.registerInstall() }}
                </div>
            {% endif %}
        </div>
        {% if config('disable_add_plugins', false) == false %}
            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                {{ _self.showAllPlugins(fsc) }}
            </div>
        {% endif %}
    </div>

    {# Modal for add new plugins #}
    {% if config('disable_add_plugins', false) == false %}
        <form action=\"{{ fsc.url() }}\" class=\"form\" enctype=\"multipart/form-data\" id=\"f_add_plugins\" method=\"post\"
              name=\"upload-plugins\" onsubmit=\"animateSpinner('add')\">
            {{ formToken() }}
            <input type=\"hidden\" name=\"action\" value=\"upload\"/>
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">
                                <i class=\"fa-solid fa-file-zipper me-2\"></i> {{ trans('add-new-plugin') }}
                            </h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ trans('close') }}\"></button>
                        </div>
                        {% if fsc.getMaxFileUpload() < 99 %}
                            <div class=\"alert alert-dismissible alert-warning mb-0\">
                                {{ trans('help-server-accepts-filesize', {'%size%': fsc.getMaxFileUpload()}) }}
                            </div>
                        {% endif %}
                        <div class=\"modal-body\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">{{ trans('select-plugin-zip-file') }}</label>
                                <input type=\"file\" name=\"plugin[]\" class=\"form-control\" accept=\"application/zip\" multiple required/>
                                {% if fsc.getMaxFileUpload() >= 99 %}
                                    <div class=\"form-text\">
                                        {{ trans('help-server-accepts-filesize', {'%size%': fsc.getMaxFileUpload()}) }}
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"text-end mt-5\">
                                <button type=\"button\" class=\"btn btn-spin-action btn-secondary\" data-bs-dismiss=\"modal\">
                                    {{ trans('cancel') }}
                                </button>
                                <button type=\"submit\" class=\"btn btn-spin-action btn-success\">
                                    {{ trans('continue') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    {% endif %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% if config('disable_rm_plugins', false) == false %}
        <script>
            function deletePlugin(pluginName) {
                // Si ya existe un modal con el ID 'dynamicAdminPluginsDeleteModal', lo eliminamos
                const existingModal = document.getElementById('dynamicAdminPluginsDeleteModal');
                if (existingModal) {
                    existingModal.remove();
                }

                const adminPluginsDeleteCancel = \"{{ trans('cancel') }}\";
                const adminPluginsDeleteConfirm = \"{{ trans('delete') }}\";
                const adminPluginsDeleteMessage = \"{{ trans('are-you-sure') }}\";
                const adminPluginsDeleteTitle = \"{{ trans('confirm-delete')|raw }}\";

                // Crear el HTML del modal como string usando los parámetros
                const modalHTML = `
                    <div class=\"modal fade\" id=\"dynamicAdminPluginsDeleteModal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"dynamicAdminPluginsDeleteModalLabel\" aria-hidden=\"true\">
                      <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"dynamicAdminPluginsDeleteModalLabel\">\${adminPluginsDeleteTitle}</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                          </div>
                          <div class=\"modal-body\">
                            \${adminPluginsDeleteMessage}
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary btn-spin-action\" data-bs-dismiss=\"modal\">\${adminPluginsDeleteCancel}</button>
                            <button type=\"button\" id=\"saveDynamicAdminPluginsDeleteModalBtn\" class=\"btn btn-danger btn-spin-action\">\${adminPluginsDeleteConfirm}</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  `;

                // Insertar el modal en el body
                document.body.insertAdjacentHTML('beforeend', modalHTML);

                // Crear una instancia del modal y mostrarlo
                const myModal = new bootstrap.Modal(document.getElementById('dynamicAdminPluginsDeleteModal'));
                myModal.show();

                // Añadir comportamiento al botón de \"Guardar cambios\"
                document.getElementById('saveDynamicAdminPluginsDeleteModalBtn').addEventListener('click', function () {
                    // Ejecutar la acción de eliminar
                    animateSpinner('add');
                    window.location = \"{{ fsc.url() }}?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName
                        + \"\\u0026\" + \"multireqtoken={{ formToken(false) }}\";

                    // Cierra el modal
                    myModal.hide();
                });

                // Eliminar el modal del DOM cuando se cierra
                document.getElementById('dynamicAdminPluginsDeleteModal').addEventListener('hidden.bs.modal', function () {
                    document.getElementById('dynamicAdminPluginsDeleteModal').remove();
                });
            }

            \$(document).ready(function () {
                searchList('#querySearchPlugin', '#all-plugins .wrapper-card', '.card-title');
                searchList('#querySearchInstalledPlugins', '#installed-plugins .item-plugin', '.plugin-name');

                // si los archivos son demasiado grandes, no se pueden subir
                \$(\"#f_add_plugins\").submit(function (e) {
                    let size = 0;
                    let files = document.querySelector('input[type=file]').files;
                    for (let i = 0; i < files.length; i++) {
                        size += files[i].size;
                    }

                    if (size > {{ fsc.getMaxFileUpload() }} * 1024 * 1024) { // MB
                        e.preventDefault();
                        alert('{{ trans('plugin-file-too-big', {'%size%': fsc.getMaxFileUpload()}) }}');
                        animateSpinner('remove');
                    }
                });
            });

            function searchList(querySelectorInput, querySelectorItem, querySelectorPluginName) {
                \$(querySelectorInput).on('keyup', function (e) {
                    const query = this.value.toLowerCase().trim();
                    \$(querySelectorItem).each(function (index, value) {
                        \$(value).toggle(\$(querySelectorPluginName, value).text().toLowerCase().trim().includes(query));
                    });
                });
            }
        </script>
    {% endif %}
{% endblock %}

{% macro healthStatus(value) %}
    {% if value < 1 %}
        <i class=\"fa-solid fa-heart-broken\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
    {% elseif value < 2 %}
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
    {% elseif value < 3 %}
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
    {% elseif value < 4 %}
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
    {% elseif value < 5 %}
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-regular fa-heart\"></i>
    {% else %}
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
        <i class=\"fa-solid fa-heart\"></i>
    {% endif %}
{% endmacro %}

{% macro showAllPlugins(fsc) %}
    <div class=\"p-2\">
        <input type=\"text\" class=\"form-control shadow-sm\" id=\"querySearchPlugin\" placeholder=\"{{ trans('search') }}\"/>
    </div>
    <div class=\"row row-cols-3 ps-2 pe-2\" id=\"all-plugins\">
        {% for plugin in fsc.remotePluginList %}
            {% set extraClass = plugin.health > 2 ? 'border-success' : plugin.health == 0 ? 'border-danger' : 'border-warning' %}
            <div class=\"col mb-2 wrapper-card\">
                <div class=\"card {{ extraClass }} shadow-sm h-100\" id=\"{{ plugin.idplugin }}\">
                    <div class=\"card-body p-2\">
                        <h5 class=\"card-title\">{{ plugin.name }} v{{ plugin.version }}</h5>
                        <p class=\"card-text\">{{ plugin.description | slice(0, 300) | nl2br }}</p>
                    </div>
                    <div class=\"card-footer p-2\">
                        {% set extraBtnClass = plugin.health > 2 ? 'btn-outline-success' : plugin.health == 0 ? 'btn-outline-danger' : 'btn-outline-warning' %}
                        <a href=\"{{ plugin.url }}\" class=\"btn {{ extraBtnClass }}\" target=\"_blank\">{{ trans('add') }}</a>
                        <span class=\"ms-2 text-danger\" title=\"{{ trans('health') }}\">
                            {{ _self.healthStatus(plugin.health) }}
                        </span>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"text-center bg-warning rounded\">
                <h2>{{ trans('no-data') }}</h2>
            </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro showInstalledPlugins(fsc) %}
    <div class=\"m-2 mb-3\">
        <input type=\"text\" class=\"form-control border-dark\" id=\"querySearchInstalledPlugins\"
               placeholder=\"{{ trans('search') }}\"/>
    </div>

    <div class=\"card border-success m-2 mb-3\">
        <div class=\"card-header border-success\">{{ trans('enabled-plugins') }}</div>
        {{ _self.tablePlugins(fsc.pluginList | filter(plugin => plugin.enabled)|sort((a, b) => a.order <=> b.order), fsc.url()) }}
    </div>

    <div class=\"card border-dark m-2 mb-4\">
        <div class=\"card-header border-dark\">{{ trans('disabled-plugins') }}</div>
        {{ _self.tablePlugins(fsc.pluginList | filter(plugin => plugin.enabled == false), fsc.url()) }}
    </div>
{% endmacro %}

{% macro tablePlugins(pluginList, url) %}
    <div class=\"table-responsive\" id=\"installed-plugins\">
        <table class=\"table table-striped table-hover mb-0\">
            <thead>
            <tr>
                <th>{{ trans('name') }}</th>
                <th class=\"text-end\">{{ trans('version') }}</th>
                <th>{{ trans('description') }}</th>
                <th class=\"text-end pe-3\">{{ trans('actions') }}</th>
            </tr>
            </thead>
            <tbody>
            {% for plugin in pluginList %}
                {% set trClass = 'table-danger' %}
                {% if plugin.enabled %}
                    {% set trClass = 'table-success' %}
                {% elseif plugin.compatible %}
                    {% set trClass = '' %}
                {% endif %}
                <tr class=\"{{ trClass }} item-plugin\">
                    <td class=\"plugin-name\">{{ plugin.name }}</td>
                    <td class=\"text-end\">
                        {% if plugin.version == 0 %}
                            <span class=\"text-danger\">v{{ plugin.version }}</span>
                        {% elseif plugin.version < 1 %}
                            <span class=\"text-warning\">v{{ plugin.version }}</span>
                        {% else %}
                            v{{ plugin.version }}
                        {% endif %}
                    </td>
                    <td>
                        {{ plugin.description | nl2br }}
                        {% if plugin.forja('url', '') %}
                            <a href=\"{{ plugin.forja('url', '') }}\" target=\"_blank\" class=\"ms-2\">
                                {{ trans('more') }} <i class=\"fa-solid fa-external-link-alt\"></i>
                            </a>
                        {% endif %}
                        <br/>
                        {% for requiredPluginName in plugin.require %}
                            <div class=\"badge bg-secondary\">
                                {{ trans('plugin-needed', {'%pluginName%': requiredPluginName}) }}
                            </div>
                        {% endfor %}
                    </td>
                    <td class=\"text-end text-nowrap\">
                        {% if plugin.hasUpdate() %}
                            <a href=\"Updater\" class=\"btn btn-spin-action btn-sm btn-info me-1\"
                               title=\"{{ trans('updater') }}\">
                                <i class=\"fa-solid fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                            </a>
                        {% endif %}
                        {% if plugin.enabled %}
                            <a class=\"btn btn-sm btn-secondary btn-spin-action\" onclick=\"animateSpinner('add');\"
                               href=\"{{ url }}?action=disable&amp;plugin={{ plugin.name }}&amp;multireqtoken={{ formToken(false) }}\">
                                <i class=\"fa-solid fa-toggle-off me-1\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">{{ trans('disable') }}</span>
                            </a>
                            <br/>
                            <small>{{ trans('plugin-order', {'%num%': plugin.order}) }}</small>
                        {% elseif plugin.compatible %}
                            {% if plugin.hasUpdate() %}
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-sm btn-warning dropdown-toggle\"
                                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        {{ trans('enable') }}
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"Updater\">
                                            <i class=\"fa-solid fa-cloud-download-alt fa-fw me-1\" aria-hidden=\"true\"></i>
                                            {{ trans('update') }}
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\"
                                           href=\"{{ url }}?action=enable&amp;plugin={{ plugin.name }}&amp;multireqtoken={{ formToken(false) }}\">
                                            <i class=\"fa-solid fa-check fa-fw me-1\" aria-hidden=\"true\"></i>
                                            {{ trans('enable') }}
                                        </a>
                                    </div>
                                </div>
                            {% else %}
                                <a class=\"btn btn-sm btn-success btn-spin-action\" onclick=\"animateSpinner('add');\"
                                   href=\"{{ url }}?action=enable&amp;plugin={{ plugin.name }}&amp;multireqtoken={{ formToken(false) }}\">
                                    <i class=\"fa-solid fa-toggle-on me-1\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">{{ trans('enable') }}</span>
                                </a>
                            {% endif %}
                        {% else %}
                            {{ plugin.compatibilityDescription() }}
                        {% endif %}
                        {% if plugin.enabled == false and config('disable_rm_plugins', false) == false %}
                            <a class=\"btn btn-sm btn-danger ms-2 btn-spin-action\" href=\"#\"
                               title=\"{{ trans('delete') }}\" onclick=\"deletePlugin('{{ plugin.name }}');\">
                                <i class=\"fa-solid fa-trash-alt\" aria-hidden=\"true\"></i>
                            </a>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>{{ trans('no-data') }}</b></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endmacro %}", "AdminPlugins.html.twig", "/var/www/html/Core/View/AdminPlugins.html.twig");
    }
}
