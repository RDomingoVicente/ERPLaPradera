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

/* Master/PanelControllerBottom.html.twig */
class __TwigTemplate_5d4248fd82a2c1209262e7d41ff53602 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/PanelController.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "Master/PanelControllerBottom.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 27
        yield "                ";
        $context["firstView"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 27));
        // line 28
        yield "                ";
        $context["firstViewName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "getViewName", [], "method", false, false, false, 28);
        // line 29
        yield "                ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [($context["firstViewName"] ?? null)], "method", false, false, false, 29);
        // line 30
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "template", [], "any", false, false, false, 30));
        yield "
            </div>
        </div>
        ";
        // line 33
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 33)) == 2)) {
            // line 34
            yield "            ";
            // line 35
            yield "            ";
            $context["secondView"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 35), 1, 1));
            // line 36
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["secondView"] ?? null), "settings", [], "any", false, false, false, 36), "active", [], "any", false, false, false, 36)) {
                // line 37
                yield "                <div class=\"row\">
                    <div class=\"col\">
                        <h3 class=\"h4 mb-2\">
                            <i class=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["secondView"] ?? null), "icon", [], "any", false, false, false, 40), "html", null, true);
                yield " me-2\" aria-hidden=\"true\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["secondView"] ?? null), "title", [], "any", false, false, false, 40), "html", null, true);
                yield "
                            ";
                // line 41
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["secondView"] ?? null), "count", [], "any", false, false, false, 41) > 0)) {
                    // line 42
                    yield "                                <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["secondView"] ?? null), "count", [], "any", false, false, false, 42), 0), "html", null, true);
                    yield "</span>
                            ";
                }
                // line 44
                yield "                        </h3>
                    </div>
                </div>
            ";
            }
            // line 48
            yield "        ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 48)) > 2)) {
            // line 49
            yield "            ";
            // line 50
            yield "            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"nav-pills-wrapper d-print-none\">
                        <ul class=\"nav nav-pills nav-pills-scroll mb-3\" id=\"mainTabs\" role=\"tablist\">
                            ";
            // line 54
            $context["contActiveTab"] = 0;
            // line 55
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 55), 1, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 55))));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 56
                yield "                                ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 56), "active", [], "any", false, false, false, 56)) {
                    // line 57
                    yield "                                    ";
                    $context["contActiveTab"] = (($context["contActiveTab"] ?? null) + 1);
                    // line 58
                    yield "                                    <li class=\"nav-item\">
                                        ";
                    // line 59
                    $context["active"] = (((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 59)) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 59) == ($context["firstViewName"] ?? null)) && (($context["contActiveTab"] ?? null) == 1)))) ? (" active") : (""));
                    // line 60
                    yield "                                        <a href=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                    yield "\" class=\"nav-link";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["disable"] ?? null), "html", null, true);
                    yield "\"
                                           data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                    yield "\">
                                            <i class=\"";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 62), "html", null, true);
                    yield " fa-fw me-1 d-none d-sm-inline\"
                                               aria-hidden=\"true\"></i>
                                            <span>";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 64), "html", null, true);
                    yield "</span>
                                            ";
                    // line 65
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 65) > 0)) {
                        // line 66
                        yield "                                                <span class=\"badge bg-secondary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 66), 0), "html", null, true);
                        yield "</span>
                                            ";
                    }
                    // line 68
                    yield "                                        </a>
                                    </li>
                                ";
                }
                // line 71
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "                        </ul>
                    </div>
                </div>
            </div>
        ";
        }
        // line 77
        yield "        <div class=\"tab-content\" id=\"mainTabsContent\">
            ";
        // line 78
        $context["contActiveTab"] = 0;
        // line 79
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 79), 1, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 79))));
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
            // line 80
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 80), "active", [], "any", false, false, false, 80)) {
                // line 81
                yield "                    ";
                $context["contActiveTab"] = (($context["contActiveTab"] ?? null) + 1);
                // line 82
                yield "                    ";
                $context["active"] = (((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 82)) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 82) == ($context["firstViewName"] ?? null)) && (($context["contActiveTab"] ?? null) == 1)))) ? (" show active") : (""));
                // line 83
                yield "                    <div class=\"tab-pane";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                yield "\" role=\"tabpanel\">
                        ";
                // line 84
                CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [$context["viewName"]], "method", false, false, false, 84);
                // line 85
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 85));
                yield "
                    </div>
                ";
            }
            // line 88
            yield "            ";
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
        // line 89
        yield "        </div>
    </div>
";
        return; yield '';
    }

    // line 93
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        yield "    ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
    <style>
        /* Scroll horizontal para pestañas pills en móviles */
        @media (max-width: 767px) {
            .nav-pills-wrapper {
                overflow-x: auto;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
            }

            .nav-pills-scroll {
                flex-wrap: nowrap;
                white-space: nowrap;
                min-width: min-content;
            }

            .nav-pills-scroll .nav-item {
                flex-shrink: 0;
            }

            .nav-pills-scroll .nav-link {
                white-space: nowrap;
            }

            /* Indicador visual de scroll */
            .nav-pills-wrapper::-webkit-scrollbar {
                height: 4px;
            }

            .nav-pills-wrapper::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            .nav-pills-wrapper::-webkit-scrollbar-thumb {
                background: #888;
                border-radius: 2px;
            }

            .nav-pills-wrapper::-webkit-scrollbar-thumb:hover {
                background: #555;
            }
        }

        /* En pantallas grandes, comportamiento normal */
        @media (min-width: 768px) {
            .nav-pills-wrapper {
                overflow: visible;
            }

            .nav-pills-scroll {
                flex-wrap: wrap;
            }
        }
    </style>
";
        return; yield '';
    }

    // line 150
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(document).ready(function () {
            // Función para desplazar la pestaña activa a la vista
            function scrollActivePillIntoView() {
                if (window.innerWidth <= 767) {
                    var activePill = \$('.nav-pills-scroll .nav-link.active');
                    var wrapper = \$('.nav-pills-wrapper');
                    if (activePill.length && wrapper.length) {
                        var pillLeft = activePill.parent().position().left;
                        var pillWidth = activePill.parent().outerWidth();
                        var wrapperWidth = wrapper.width();
                        var scrollLeft = wrapper.scrollLeft();

                        // Centrar la pestaña activa si es posible
                        var targetScroll = pillLeft + scrollLeft - (wrapperWidth / 2) + (pillWidth / 2);
                        wrapper.animate({scrollLeft: targetScroll}, 300);
                    }
                }
            }

            // Desplazar la pestaña activa al cargar la página
            scrollActivePillIntoView();

            // Desplazar cuando se cambia de pestaña
            \$('a[data-bs-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                scrollActivePillIntoView();
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
        return "Master/PanelControllerBottom.html.twig";
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
        return array (  323 => 151,  319 => 150,  258 => 94,  254 => 93,  247 => 89,  233 => 88,  226 => 85,  224 => 84,  217 => 83,  214 => 82,  211 => 81,  208 => 80,  190 => 79,  188 => 78,  185 => 77,  178 => 72,  172 => 71,  167 => 68,  161 => 66,  159 => 65,  155 => 64,  150 => 62,  146 => 61,  138 => 60,  136 => 59,  133 => 58,  130 => 57,  127 => 56,  122 => 55,  120 => 54,  114 => 50,  112 => 49,  109 => 48,  103 => 44,  97 => 42,  95 => 41,  89 => 40,  84 => 37,  81 => 36,  78 => 35,  76 => 34,  74 => 33,  67 => 30,  64 => 29,  61 => 28,  58 => 27,  53 => 23,  49 => 22,  38 => 20,);
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
{% extends \"Master/PanelController.html.twig\" %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                {# -- First tab -- #}
                {% set firstView = fsc.views | first %}
                {% set firstViewName = firstView.getViewName() %}
                {% do fsc.setCurrentView(firstViewName) %}
                {{ include(firstView.template) }}
            </div>
        </div>
        {% if fsc.views | length == 2 %}
            {# -- Second tab -- #}
            {% set secondView = fsc.views | slice(1, 1) | first %}
            {% if secondView.settings.active %}
                <div class=\"row\">
                    <div class=\"col\">
                        <h3 class=\"h4 mb-2\">
                            <i class=\"{{ secondView.icon }} me-2\" aria-hidden=\"true\"></i> {{ secondView.title }}
                            {% if secondView.count > 0 %}
                                <span class=\"badge bg-secondary\">{{ number(secondView.count, 0) }}</span>
                            {% endif %}
                        </h3>
                    </div>
                </div>
            {% endif %}
        {% elseif fsc.views | length > 2 %}
            {# -- More than two tabs: show pills -- #}
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"nav-pills-wrapper d-print-none\">
                        <ul class=\"nav nav-pills nav-pills-scroll mb-3\" id=\"mainTabs\" role=\"tablist\">
                            {% set contActiveTab = 0 %}
                            {% for viewName, view in fsc.views | slice(1, fsc.views | length) %}
                                {% if view.settings.active %}
                                    {% set contActiveTab = contActiveTab + 1 %}
                                    <li class=\"nav-item\">
                                        {% set active = (viewName == fsc.active) or (fsc.active == firstViewName and contActiveTab == 1) ? ' active' : '' %}
                                        <a href=\"#{{ viewName }}\" class=\"nav-link{{ active }}{{ disable }}\"
                                           data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"{{ viewName }}\">
                                            <i class=\"{{ view.icon }} fa-fw me-1 d-none d-sm-inline\"
                                               aria-hidden=\"true\"></i>
                                            <span>{{ view.title }}</span>
                                            {% if view.count > 0 %}
                                                <span class=\"badge bg-secondary\">{{ number(view.count, 0) }}</span>
                                            {% endif %}
                                        </a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        {% endif %}
        <div class=\"tab-content\" id=\"mainTabsContent\">
            {% set contActiveTab = 0 %}
            {% for viewName, view in fsc.views | slice(1, fsc.views | length) %}
                {% if view.settings.active %}
                    {% set contActiveTab = contActiveTab + 1 %}
                    {% set active = (viewName == fsc.active) or (fsc.active == firstViewName and contActiveTab == 1) ? ' show active' : '' %}
                    <div class=\"tab-pane{{ active }}\" id=\"{{ viewName }}\" role=\"tabpanel\">
                        {% do fsc.setCurrentView(viewName) %}
                        {{ include(view.template) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block css %}
    {{ parent() }}
    <style>
        /* Scroll horizontal para pestañas pills en móviles */
        @media (max-width: 767px) {
            .nav-pills-wrapper {
                overflow-x: auto;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
            }

            .nav-pills-scroll {
                flex-wrap: nowrap;
                white-space: nowrap;
                min-width: min-content;
            }

            .nav-pills-scroll .nav-item {
                flex-shrink: 0;
            }

            .nav-pills-scroll .nav-link {
                white-space: nowrap;
            }

            /* Indicador visual de scroll */
            .nav-pills-wrapper::-webkit-scrollbar {
                height: 4px;
            }

            .nav-pills-wrapper::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            .nav-pills-wrapper::-webkit-scrollbar-thumb {
                background: #888;
                border-radius: 2px;
            }

            .nav-pills-wrapper::-webkit-scrollbar-thumb:hover {
                background: #555;
            }
        }

        /* En pantallas grandes, comportamiento normal */
        @media (min-width: 768px) {
            .nav-pills-wrapper {
                overflow: visible;
            }

            .nav-pills-scroll {
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
            function scrollActivePillIntoView() {
                if (window.innerWidth <= 767) {
                    var activePill = \$('.nav-pills-scroll .nav-link.active');
                    var wrapper = \$('.nav-pills-wrapper');
                    if (activePill.length && wrapper.length) {
                        var pillLeft = activePill.parent().position().left;
                        var pillWidth = activePill.parent().outerWidth();
                        var wrapperWidth = wrapper.width();
                        var scrollLeft = wrapper.scrollLeft();

                        // Centrar la pestaña activa si es posible
                        var targetScroll = pillLeft + scrollLeft - (wrapperWidth / 2) + (pillWidth / 2);
                        wrapper.animate({scrollLeft: targetScroll}, 300);
                    }
                }
            }

            // Desplazar la pestaña activa al cargar la página
            scrollActivePillIntoView();

            // Desplazar cuando se cambia de pestaña
            \$('a[data-bs-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                scrollActivePillIntoView();
            });
        });
    </script>
{% endblock %}
", "Master/PanelControllerBottom.html.twig", "/var/www/html/Core/View/Master/PanelControllerBottom.html.twig");
    }
}
