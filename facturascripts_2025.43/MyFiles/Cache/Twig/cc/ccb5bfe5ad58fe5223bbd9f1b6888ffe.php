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

/* Master/ListController.html.twig */
class __TwigTemplate_3dceba64da6e7a009fbb6ed86b1a7b26 extends Template
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
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Master/ListController.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        yield from $this->yieldParentBlock("bodyHeaderOptions", $context, $blocks);
        yield "
    ";
        // line 24
        $context["pageData"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 24);
        // line 25
        yield "    ";
        $context["firstView"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 25));
        // line 26
        yield "    <div class=\"container-fluid mb-3 d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                ";
        // line 30
        yield "                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "menu", [], "any", false, false, false, 33)), "html", null, true);
        yield "</a>
                        </li>
                        ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 35)) {
            // line 36
            yield "                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 37)), "html", null, true);
            yield "</a>
                            </li>
                        ";
        }
        // line 40
        yield "                        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 40), "html", null, true);
        yield "</li>
                    </ol>
                </nav>
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 44), "html", null, true);
        yield "\"
                       title=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        yield "\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "name", [], "any", false, false, false, 48) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 48), "homepage", [], "any", false, false, false, 48))) {
            // line 49
            yield "                        <a class=\"btn btn-sm btn-secondary active\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 49), "html", null, true);
            yield "?defaultPage=FALSE\"
                           title=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("marked-as-homepage"), "html", null, true);
            yield "\">
                            <i class=\"fa-solid fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 54
            yield "                        <a class=\"btn btn-sm btn-secondary\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 54), "html", null, true);
            yield "?defaultPage=TRUE\"
                           title=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("mark-as-homepage"), "html", null, true);
            yield "\">
                            <i class=\"fa-regular fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 59
        yield "                </div>
                ";
        // line 61
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 61), "btnOptions", [], "any", false, false, false, 61)) {
            // line 62
            yield "                    <div class=\"btn-group\">
                        <div class=\"dropdown\">
                            <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\"
                                    data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-wrench fa-fw me-1\" aria-hidden=\"true\"></i> ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("options"), "html", null, true);
            yield "
                            </button>
                            <div class=\"dropdown-menu\">
                                <h6 class=\"dropdown-header\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("options-button-header"), "html", null, true);
            yield "</h6>
                                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 71
                yield "                                    <a class=\"dropdown-item\"
                                       href=\"EditPageOption?code=";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                yield "&url=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "model", [], "any", false, false, false, 72), "url", [], "method", false, false, false, 72)), "html", null, true);
                yield "\">
                                        <i class=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 73), "html", null, true);
                yield " fa-fw me-1\" aria-hidden=\"true\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 73), "html", null, true);
                yield "
                                        ";
                // line 74
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 74), "customized", [], "any", false, false, false, 74)) {
                    // line 75
                    yield "                                            <i class=\"fa-solid fa-user-pen ms-2\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("personalized"), "html", null, true);
                    yield "\"></i>
                                        ";
                }
                // line 77
                yield "                                    </a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "                            </div>
                        </div>
                    </div>
                ";
        }
        // line 83
        yield "            </div>
            <div class=\"col-md-5 text-end\">
                <h1 class=\"h4 mb-0 d-none d-md-inline-block\">
                    ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 86), "html", null, true);
        yield "<i class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 86), "html", null, true);
        yield " ms-3\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    ";
        // line 92
        yield "    <div class=\"nav-tabs-wrapper d-print-none\">
        <ul class=\"nav nav-tabs nav-tabs-scroll\" id=\"mainTabs\" role=\"tablist\">
            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 95
            yield "                <li class=\"nav-item\">
                    ";
            // line 96
            $context["active"] = ((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 96))) ? (" active") : (""));
            // line 97
            yield "                    <a href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "\" class=\"nav-link";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
            yield "\" data-bs-toggle=\"tab\" role=\"tab\"
                       aria-controls=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 98), "html", null, true);
            yield "\">
                        <i class=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 99), "html", null, true);
            yield " fa-fw me-1 d-none d-sm-inline\" aria-hidden=\"true\"></i>
                        ";
            // line 100
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 100)) > 15)) {
                // line 101
                yield "                            <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 101), 0, 15), "html", null, true);
                yield "...</span>
                        ";
            } else {
                // line 103
                yield "                            <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 103), "html", null, true);
                yield "</span>
                        ";
            }
            // line 105
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 105) > 0)) {
                // line 106
                yield "                            <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 106), 0), "html", null, true);
                yield "</span>
                        ";
            }
            // line 108
            yield "                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "        </ul>
    </div>
";
        return; yield '';
    }

    // line 115
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        yield "    ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    ";
        // line 118
        yield "    <div class=\"tab-content pt-3\" id=\"mainTabsContent\">
        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 119));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 120
            yield "            ";
            $context["active"] = ((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 120))) ? (" show active") : (""));
            // line 121
            yield "            <div class=\"tab-pane fade";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "\" role=\"tabpanel\">
                ";
            // line 122
            CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [$context["viewName"]], "method", false, false, false, 122);
            // line 123
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 123));
            yield "
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "    </div>
";
        return; yield '';
    }

    // line 129
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        yield "    ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
    <style>
        /* Scroll horizontal para pestañas en móviles */
        @media (max-width: 767px) {
            .nav-tabs-wrapper {
                overflow-x: auto;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
                margin-bottom: -1px;
            }

            .nav-tabs-scroll {
                flex-wrap: nowrap;
                white-space: nowrap;
                border-bottom: 1px solid #dee2e6;
                min-width: min-content;
            }

            .nav-tabs-scroll .nav-item {
                flex-shrink: 0;
            }

            .nav-tabs-scroll .nav-link {
                white-space: nowrap;
            }

            /* Indicador visual de scroll */
            .nav-tabs-wrapper::-webkit-scrollbar {
                height: 4px;
            }

            .nav-tabs-wrapper::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            .nav-tabs-wrapper::-webkit-scrollbar-thumb {
                background: #888;
                border-radius: 2px;
            }

            .nav-tabs-wrapper::-webkit-scrollbar-thumb:hover {
                background: #555;
            }
        }

        /* En pantallas grandes, comportamiento normal */
        @media (min-width: 768px) {
            .nav-tabs-wrapper {
                overflow: visible;
            }

            .nav-tabs-scroll {
                flex-wrap: wrap;
            }
        }
    </style>
";
        return; yield '';
    }

    // line 188
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(document).ready(function () {
            // Función para desplazar la pestaña activa a la vista
            function scrollActiveTabIntoView() {
                if (window.innerWidth <= 767) {
                    var activeTab = \$('.nav-tabs-scroll .nav-link.active');
                    var wrapper = \$('.nav-tabs-wrapper');
                    if (activeTab.length && wrapper.length) {
                        var tabLeft = activeTab.parent().position().left;
                        var tabWidth = activeTab.parent().outerWidth();
                        var wrapperWidth = wrapper.width();
                        var scrollLeft = wrapper.scrollLeft();

                        // Centrar la pestaña activa si es posible
                        var targetScroll = tabLeft + scrollLeft - (wrapperWidth / 2) + (tabWidth / 2);
                        wrapper.animate({ scrollLeft: targetScroll }, 300);
                    }
                }
            }

            if (document.location.hash) {
                \$(\".nav-tabs a[href=\\\\\" + document.location.hash + \"]\").tab('show');
            }

            // Desplazar la pestaña activa al cargar la página
            scrollActiveTabIntoView();

            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input[name='query']:visible\").focus();
            }
            \$('.nav-tabs a').click(function (e) {
                \$(this).tab('show');
                var scrollmem = \$('body').scrollTop();
                window.location.hash = this.hash;
                \$('html,body').scrollTop(scrollmem);
            });
            \$('a[data-bs-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                // Desplazar la pestaña activa cuando se cambia de pestaña
                scrollActiveTabIntoView();

                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                    \$(\"input[name='query']:visible\").focus();
                }
            });
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
        return "Master/ListController.html.twig";
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
        return array (  415 => 189,  411 => 188,  348 => 130,  344 => 129,  338 => 126,  320 => 123,  318 => 122,  311 => 121,  308 => 120,  291 => 119,  288 => 118,  283 => 116,  279 => 115,  272 => 111,  264 => 108,  258 => 106,  255 => 105,  249 => 103,  243 => 101,  241 => 100,  237 => 99,  231 => 98,  224 => 97,  222 => 96,  219 => 95,  215 => 94,  211 => 92,  201 => 86,  196 => 83,  190 => 79,  183 => 77,  177 => 75,  175 => 74,  169 => 73,  163 => 72,  160 => 71,  156 => 70,  152 => 69,  146 => 66,  140 => 62,  137 => 61,  134 => 59,  127 => 55,  122 => 54,  115 => 50,  110 => 49,  108 => 48,  102 => 45,  98 => 44,  90 => 40,  84 => 37,  81 => 36,  79 => 35,  74 => 33,  69 => 30,  64 => 26,  61 => 25,  59 => 24,  54 => 23,  50 => 22,  39 => 20,);
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

{% block bodyHeaderOptions %}
    {{ parent() }}
    {% set pageData = fsc.getPageData() %}
    {% set firstView = fsc.views | first %}
    <div class=\"container-fluid mb-3 d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                {# -- Page data for small devices -- #}
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">{{ trans(pageData.menu) }}</a>
                        </li>
                        {% if pageData.submenu %}
                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">{{ trans(pageData.submenu) }}</a>
                            </li>
                        {% endif %}
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ fsc.title }}</li>
                    </ol>
                </nav>
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"{{ fsc.url() }}\"
                       title=\"{{ trans('refresh') }}\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    {% if pageData.name == fsc.user.homepage %}
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
                {# -- Options button -- #}
                {% if firstView.settings.btnOptions %}
                    <div class=\"btn-group\">
                        <div class=\"dropdown\">
                            <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\"
                                    data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa-solid fa-wrench fa-fw me-1\" aria-hidden=\"true\"></i> {{ trans('options') }}
                            </button>
                            <div class=\"dropdown-menu\">
                                <h6 class=\"dropdown-header\">{{ trans('options-button-header') }}</h6>
                                {% for viewName, view in fsc.views %}
                                    <a class=\"dropdown-item\"
                                       href=\"EditPageOption?code={{ viewName }}&url={{ view.model.url() | url_encode }}\">
                                        <i class=\"{{ view.icon }} fa-fw me-1\" aria-hidden=\"true\"></i> {{ view.title }}
                                        {% if view.settings.customized %}
                                            <i class=\"fa-solid fa-user-pen ms-2\" title=\"{{ trans('personalized') }}\"></i>
                                        {% endif %}
                                    </a>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
            <div class=\"col-md-5 text-end\">
                <h1 class=\"h4 mb-0 d-none d-md-inline-block\">
                    {{ fsc.title }}<i class=\"{{ pageData.icon }} ms-3\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    {# -- Tabs -- #}
    <div class=\"nav-tabs-wrapper d-print-none\">
        <ul class=\"nav nav-tabs nav-tabs-scroll\" id=\"mainTabs\" role=\"tablist\">
            {% for viewName, view in fsc.views %}
                <li class=\"nav-item\">
                    {% set active = (viewName == fsc.active) ? ' active' : '' %}
                    <a href=\"#{{ viewName }}\" class=\"nav-link{{ active }}\" data-bs-toggle=\"tab\" role=\"tab\"
                       aria-controls=\"{{ viewName }}\" title=\"{{ view.title }}\">
                        <i class=\"{{ view.icon }} fa-fw me-1 d-none d-sm-inline\" aria-hidden=\"true\"></i>
                        {% if view.title | length > 15 %}
                            <span>{{ view.title | slice(0, 15) }}...</span>
                        {% else %}
                            <span>{{ view.title }}</span>
                        {% endif %}
                        {% if view.count > 0 %}
                            <span class=\"badge bg-secondary\">{{ number(view.count, 0) }}</span>
                        {% endif %}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
{% endblock %}

{% block body %}
    {{ parent() }}
    {# -- Tab content -- #}
    <div class=\"tab-content pt-3\" id=\"mainTabsContent\">
        {% for viewName, view in fsc.views %}
            {% set active = (viewName == fsc.active) ? ' show active' : '' %}
            <div class=\"tab-pane fade{{ active }}\" id=\"{{ viewName }}\" role=\"tabpanel\">
                {% do fsc.setCurrentView(viewName) %}
                {{ include(view.template) }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block css %}
    {{ parent() }}
    <style>
        /* Scroll horizontal para pestañas en móviles */
        @media (max-width: 767px) {
            .nav-tabs-wrapper {
                overflow-x: auto;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
                margin-bottom: -1px;
            }

            .nav-tabs-scroll {
                flex-wrap: nowrap;
                white-space: nowrap;
                border-bottom: 1px solid #dee2e6;
                min-width: min-content;
            }

            .nav-tabs-scroll .nav-item {
                flex-shrink: 0;
            }

            .nav-tabs-scroll .nav-link {
                white-space: nowrap;
            }

            /* Indicador visual de scroll */
            .nav-tabs-wrapper::-webkit-scrollbar {
                height: 4px;
            }

            .nav-tabs-wrapper::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            .nav-tabs-wrapper::-webkit-scrollbar-thumb {
                background: #888;
                border-radius: 2px;
            }

            .nav-tabs-wrapper::-webkit-scrollbar-thumb:hover {
                background: #555;
            }
        }

        /* En pantallas grandes, comportamiento normal */
        @media (min-width: 768px) {
            .nav-tabs-wrapper {
                overflow: visible;
            }

            .nav-tabs-scroll {
                flex-wrap: wrap;
            }
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function () {
            // Función para desplazar la pestaña activa a la vista
            function scrollActiveTabIntoView() {
                if (window.innerWidth <= 767) {
                    var activeTab = \$('.nav-tabs-scroll .nav-link.active');
                    var wrapper = \$('.nav-tabs-wrapper');
                    if (activeTab.length && wrapper.length) {
                        var tabLeft = activeTab.parent().position().left;
                        var tabWidth = activeTab.parent().outerWidth();
                        var wrapperWidth = wrapper.width();
                        var scrollLeft = wrapper.scrollLeft();

                        // Centrar la pestaña activa si es posible
                        var targetScroll = tabLeft + scrollLeft - (wrapperWidth / 2) + (tabWidth / 2);
                        wrapper.animate({ scrollLeft: targetScroll }, 300);
                    }
                }
            }

            if (document.location.hash) {
                \$(\".nav-tabs a[href=\\\\\" + document.location.hash + \"]\").tab('show');
            }

            // Desplazar la pestaña activa al cargar la página
            scrollActiveTabIntoView();

            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input[name='query']:visible\").focus();
            }
            \$('.nav-tabs a').click(function (e) {
                \$(this).tab('show');
                var scrollmem = \$('body').scrollTop();
                window.location.hash = this.hash;
                \$('html,body').scrollTop(scrollmem);
            });
            \$('a[data-bs-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                // Desplazar la pestaña activa cuando se cambia de pestaña
                scrollActiveTabIntoView();

                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                    \$(\"input[name='query']:visible\").focus();
                }
            });
        });
    </script>
{% endblock %}", "Master/ListController.html.twig", "/var/www/html/Core/View/Master/ListController.html.twig");
    }
}
