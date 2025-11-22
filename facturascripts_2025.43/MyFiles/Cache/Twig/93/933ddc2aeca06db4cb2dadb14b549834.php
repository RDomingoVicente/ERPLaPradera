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

/* Master/EditView.html.twig */
class __TwigTemplate_28791297f81151246e70cf07612e45a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["action"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 21), "exists", [], "method", false, false, false, 21)) ? ("edit") : ("insert"));
        // line 22
        $context["fieldCount"] = 0;
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 24
            yield "    ";
            $context["fieldCount"] = (($context["fieldCount"] ?? null) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["group"], "columns", [], "any", false, false, false, 24)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
<script>
    function editViewDelete(viewName) {
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal' + viewName));

        document.getElementById('confirmDeleteBtn' + viewName).onclick = function () {
            document.querySelector(\"#form\" + viewName + \" input[name='action']\").value = \"delete\";
            document.getElementById(\"form\" + viewName).submit();
        };

        deleteModal.show();
        return false;
    }
</script>

";
        // line 42
        yield "<div class=\"row\">
    ";
        // line 43
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["header"], "method", false, false, false, 43);
        // line 44
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 44), "", ($context["fsc"] ?? null)], "method", false, false, false, 44);
        yield "
</div>

<form id=\"form";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 47), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\"
      onsubmit=\"animateSpinner('add')\">
    ";
        // line 49
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
    <input type=\"hidden\" name=\"action\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 51), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 52), "primaryColumnValue", [], "method", false, false, false, 52), "html", null, true);
        yield "\"/>
    <div class=\"";
        // line 53
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 53), "card", [], "any", false, false, false, 53)) ? ("card shadow") : (""));
        yield "\">
        <div class=\"";
        // line 54
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 54), "card", [], "any", false, false, false, 54)) ? ("card-body") : ("container-fluid"));
        yield "\">
            <div class=\"row\">
                <div class=\"col-12 text-end\">
                    ";
        // line 58
        yield "                    ";
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["statistics"], "method", false, false, false, 58);
        // line 59
        yield "                    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [($context["fsc"] ?? null)], "method", false, false, false, 59);
        yield "
                    ";
        // line 60
        if (((($context["fieldCount"] ?? null) > 30) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 60), "btnSave", [], "any", false, false, false, 60))) {
            // line 61
            yield "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            yield "</span>
                        </button>
                    ";
        }
        // line 66
        yield "                </div>
            </div>
            <div class=\"row\">
                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 70
            yield "                    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "edit", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 70)], "method", false, false, false, 70);
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "            </div>
        </div>
        <div class=\"";
        // line 74
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 74), "card", [], "any", false, false, false, 74)) ? ("card-footer p-2") : ("container-fluid"));
        yield "\">
            <div class=\"row g-2\">
                ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 76) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 76), "btnDelete", [], "any", false, false, false, 76))) {
            // line 77
            yield "                    <div class=\"col-auto\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger\"
                                onclick=\"editViewDelete('";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 79), "html", null, true);
            yield "');\">
                            <i class=\"fa-solid fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            yield "</span>
                        </button>
                    </div>
                ";
        }
        // line 85
        yield "                ";
        $context["extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 85) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 85), "btnDelete", [], "any", false, false, false, 85))) ? ("text-center") : (""));
        // line 86
        yield "                <div class=\"col ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraClass"] ?? null), "html", null, true);
        yield "\">
                    ";
        // line 88
        yield "                    ";
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["actions"], "method", false, false, false, 88);
        // line 89
        yield "                    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [false, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 89)], "method", false, false, false, 89);
        yield "
                </div>
                ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 91), "btnUndo", [], "any", false, false, false, 91)) {
            // line 92
            yield "                    <div class=\"col-auto\">
                        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                            <i class=\"fa-solid fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("undo"), "html", null, true);
            yield "</span>
                        </button>
                    </div>
                ";
        }
        // line 99
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 99), "btnSave", [], "any", false, false, false, 99)) {
            // line 100
            yield "                    <div class=\"col-auto\">
                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            yield "</span>
                        </button>
                    </div>
                ";
        }
        // line 107
        yield "            </div>
        </div>
    </div>
</form>

<br/>

";
        // line 115
        yield "<div class=\"row\">
    ";
        // line 116
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["footer"], "method", false, false, false, 116);
        // line 117
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 117), "", ($context["fsc"] ?? null)], "method", false, false, false, 117);
        yield "
</div>

";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 122
            yield "    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "modal", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 122), CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 122)], "method", false, false, false, 122);
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "
";
        // line 126
        yield "<div class=\"modal fade\" id=\"deleteConfirmModal";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 126), "html", null, true);
        yield "\" tabindex=\"-1\"
     aria-labelledby=\"deleteConfirmModalLabel";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 127), "html", null, true);
        yield "\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\"
                    id=\"deleteConfirmModalLabel";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 132), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm-delete"), "html", null, true);
        yield "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
        yield "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fa-solid fa-times\"></i> ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
        yield "
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDeleteBtn";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 142), "html", null, true);
        yield "\">
                    <i class=\"fa-solid fa-check\"></i> ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm"), "html", null, true);
        yield "
                </button>
            </div>
        </div>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/EditView.html.twig";
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
        return array (  301 => 143,  297 => 142,  292 => 140,  285 => 136,  276 => 132,  268 => 127,  263 => 126,  260 => 124,  251 => 122,  247 => 121,  240 => 117,  238 => 116,  235 => 115,  226 => 107,  219 => 103,  214 => 100,  211 => 99,  204 => 95,  199 => 92,  197 => 91,  191 => 89,  188 => 88,  183 => 86,  180 => 85,  173 => 81,  168 => 79,  164 => 77,  162 => 76,  157 => 74,  153 => 72,  144 => 70,  140 => 69,  135 => 66,  129 => 63,  125 => 61,  123 => 60,  118 => 59,  115 => 58,  109 => 54,  105 => 53,  101 => 52,  97 => 51,  93 => 50,  89 => 49,  84 => 47,  77 => 44,  75 => 43,  72 => 42,  55 => 26,  48 => 24,  44 => 23,  42 => 22,  40 => 21,  38 => 20,);
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
{% set currentView = fsc.getCurrentView() %}
{% set action = currentView.model.exists() ? 'edit' : 'insert' %}
{% set fieldCount = 0 %}
{% for group in currentView.getColumns() %}
    {% set fieldCount = fieldCount + group.columns | length %}
{% endfor %}

<script>
    function editViewDelete(viewName) {
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal' + viewName));

        document.getElementById('confirmDeleteBtn' + viewName).onclick = function () {
            document.querySelector(\"#form\" + viewName + \" input[name='action']\").value = \"delete\";
            document.getElementById(\"form\" + viewName).submit();
        };

        deleteModal.show();
        return false;
    }
</script>

{# -- Row header -- #}
<div class=\"row\">
    {% set row = currentView.getRow('header') %}
    {{ row.render(currentView.getViewName(), '', fsc) | raw }}
</div>

<form id=\"form{{ currentView.getViewName() }}\" method=\"post\" enctype=\"multipart/form-data\"
      onsubmit=\"animateSpinner('add')\">
    {{ formToken() }}
    <input type=\"hidden\" name=\"action\" value=\"{{ action }}\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
    <input type=\"hidden\" name=\"code\" value=\"{{ currentView.model.primaryColumnValue() }}\"/>
    <div class=\"{{ currentView.settings.card ? 'card shadow' : '' }}\">
        <div class=\"{{ currentView.settings.card ? 'card-body' : 'container-fluid' }}\">
            <div class=\"row\">
                <div class=\"col-12 text-end\">
                    {# -- Row statistics -- #}
                    {% set row = currentView.getRow('statistics') %}
                    {{ row.render(fsc) | raw }}
                    {% if fieldCount > 30 and currentView.settings.btnSave %}
                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ trans('save') }}</span>
                        </button>
                    {% endif %}
                </div>
            </div>
            <div class=\"row\">
                {% for group in currentView.getColumns() %}
                    {{ group.edit(currentView.model) | raw }}
                {% endfor %}
            </div>
        </div>
        <div class=\"{{ currentView.settings.card ? 'card-footer p-2' : 'container-fluid' }}\">
            <div class=\"row g-2\">
                {% if fsc.hasData and currentView.settings.btnDelete %}
                    <div class=\"col-auto\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger\"
                                onclick=\"editViewDelete('{{ currentView.getViewName() }}');\">
                            <i class=\"fa-solid fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ trans('delete') }}</span>
                        </button>
                    </div>
                {% endif %}
                {% set extraClass = fsc.hasData and currentView.settings.btnDelete ? 'text-center' : '' %}
                <div class=\"col {{ extraClass }}\">
                    {# -- Row actions -- #}
                    {% set row = currentView.getRow('actions') %}
                    {{ row.render(false, currentView.getViewName()) | raw }}
                </div>
                {% if currentView.settings.btnUndo %}
                    <div class=\"col-auto\">
                        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                            <i class=\"fa-solid fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ trans('undo') }}</span>
                        </button>
                    </div>
                {% endif %}
                {% if currentView.settings.btnSave %}
                    <div class=\"col-auto\">
                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ trans('save') }}</span>
                        </button>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</form>

<br/>

{# -- Row footer -- #}
<div class=\"row\">
    {% set row = currentView.getRow('footer') %}
    {{ row.render(currentView.getViewName(), '', fsc) | raw }}
</div>

{# -- Modals -- #}
{% for group in currentView.getModals() %}
    {{ group.modal(currentView.model, currentView.getViewName()) | raw }}
{% endfor %}

{# -- Delete Confirmation Modal -- #}
<div class=\"modal fade\" id=\"deleteConfirmModal{{ currentView.getViewName() }}\" tabindex=\"-1\"
     aria-labelledby=\"deleteConfirmModalLabel{{ currentView.getViewName() }}\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\"
                    id=\"deleteConfirmModalLabel{{ currentView.getViewName() }}\">{{ trans('confirm-delete') }}</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                {{ trans('are-you-sure') }}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fa-solid fa-times\"></i> {{ trans('cancel') }}
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDeleteBtn{{ currentView.getViewName() }}\">
                    <i class=\"fa-solid fa-check\"></i> {{ trans('confirm') }}
                </button>
            </div>
        </div>
    </div>
</div>
", "Master/EditView.html.twig", "/var/www/html/Core/View/Master/EditView.html.twig");
    }
}
