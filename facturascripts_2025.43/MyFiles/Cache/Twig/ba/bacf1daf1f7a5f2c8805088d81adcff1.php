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

/* Macro/Utils.html.twig */
class __TwigTemplate_0e86f51b487e4b54cf09ad71f16b8309 extends Template
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
        yield "
";
        // line 33
        yield "
";
        // line 45
        yield "
";
        // line 50
        yield "
";
        // line 78
        yield "
";
        return; yield '';
    }

    // line 22
    public function macro_message($__log__ = null, $__levels__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "levels" => $__levels__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 23
            yield "    ";
            $context["messages"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "read", ["master", ($context["levels"] ?? null)], "method", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "read", ["database", ($context["levels"] ?? null)], "method", false, false, false, 23));
            // line 24
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)) > 0)) {
                // line 25
                yield "        <div class=\"alert alert-dismissible alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["style"] ?? null), "html", null, true);
                yield "\" role=\"alert\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    yield "                <div>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 28);
                    yield "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                yield "        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 35
    public function macro_messageCompat($__log__ = null, $__levels__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "levels" => $__levels__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 36
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "read", [], "method", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 37
                yield "        ";
                if ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "level", [], "any", false, false, false, 37), ($context["levels"] ?? null)) && (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 37) == "master"))) {
                    // line 38
                    yield "            <div class=\"alert alert-dismissible alert-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["style"] ?? null), "html", null, true);
                    yield "\" role=\"alert\">
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                <div>";
                    // line 40
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 40);
                    yield "</div>
            </div>
        ";
                }
                // line 43
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function macro_popoverTitle($__msg__ = null, $__position__ = "auto", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "msg" => $__msg__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 48
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["msg"] ?? null)) > 0)) {
                yield "data-bs-toggle=\"popover\" data-placement=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["position"] ?? null), "html", null, true);
                yield "\" data-trigger=\"hover\" data-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
                yield "\"";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function macro_registerInstall($__link__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "link" => $__link__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 53
            yield "    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <div class=\"h4\">
                <i class=\"fa-solid fa-registered me-1\"></i> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-install-ad"), "html", null, true);
            yield "
            </div>
            <p class=\"card-text\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-install-ad-p"), "html", null, true);
            yield "</p>
        </div>
        ";
            // line 60
            if (($context["link"] ?? null)) {
                // line 61
                yield "            <div class=\"card-footer p-2\">
                <a href=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Updater"), "html", null, true);
                yield "\" class=\"btn btn-secondary\">
                    ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register"), "html", null, true);
                yield "
                </a>
                <a href=\"https://facturascripts.com/patrocinar\" target=\"_blank\" class=\"btn btn-outline-secondary\">
                    ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("become-sponsor"), "html", null, true);
                yield "
                </a>
            </div>
        ";
            } else {
                // line 70
                yield "            <div class=\"card-footer p-2\">
                <button class=\"btn btn-secondary\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modalTelemetry\">
                    ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register"), "html", null, true);
                yield "
                </button>
            </div>
        ";
            }
            // line 76
            yield "    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 80
    public function macro_updateInstall(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 81
            yield "    <div class=\"card bg-warning shadow-sm\">
        <div class=\"card-body\">
            <div class=\"h3\">
                <i class=\"fa-solid fa-cloud-download fa-beat me-1\"></i> ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("updates-available"), "html", null, true);
            yield "
            </div>
            <p class=\"card-text\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("updates-available-p"), "html", null, true);
            yield "</p>
        </div>
        <div class=\"card-footer p-2\">
            <a href=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Updater"), "html", null, true);
            yield "\" class=\"btn btn-secondary\">
                ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("update"), "html", null, true);
            yield "
            </a>
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
        return "Macro/Utils.html.twig";
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
        return array (  271 => 90,  267 => 89,  261 => 86,  256 => 84,  251 => 81,  240 => 80,  233 => 76,  226 => 72,  222 => 70,  215 => 66,  209 => 63,  205 => 62,  202 => 61,  200 => 60,  195 => 58,  190 => 56,  185 => 53,  173 => 52,  160 => 48,  147 => 47,  137 => 43,  131 => 40,  125 => 38,  122 => 37,  117 => 36,  103 => 35,  95 => 30,  86 => 28,  82 => 27,  76 => 25,  73 => 24,  70 => 23,  56 => 22,  50 => 78,  47 => 50,  44 => 45,  41 => 33,  38 => 20,);
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
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
#}

{# Muestra todos los mensajes con alguno de los niveles dados #}
{% macro message(log, levels, style) %}
    {% set messages = log.read('master', levels) | merge(log.read('database', levels)) %}
    {% if messages | length > 0 %}
        <div class=\"alert alert-dismissible alert-{{ style }}\" role=\"alert\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            {% for item in messages %}
                <div>{{ item.message | raw }}</div>
            {% endfor %}
        </div>
    {% endif %}
{% endmacro %}

{# Muestra todos los mensajes de los niveles dados, de forma que sea compatible con versiones antiguas de MiniLog #}
{% macro messageCompat(log, levels, style) %}
    {% for item in log.read() %}
        {% if item.level in levels and item.channel == 'master' %}
            <div class=\"alert alert-dismissible alert-{{ style }}\" role=\"alert\">
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                <div>{{ item.message | raw }}</div>
            </div>
        {% endif %}
    {% endfor %}
{% endmacro %}

{# Muestra los parámetros necesarios para el popover #}
{% macro popoverTitle(msg, position = 'auto') %}
    {% if msg | length > 0 %}data-bs-toggle=\"popover\" data-placement=\"{{ position }}\" data-trigger=\"hover\" data-content=\"{{ msg }}\"{% endif %}
{% endmacro %}

{# Muestra un mensaje para registrar la instalación #}
{% macro registerInstall(link = true) %}
    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <div class=\"h4\">
                <i class=\"fa-solid fa-registered me-1\"></i> {{ trans('register-install-ad') }}
            </div>
            <p class=\"card-text\">{{ trans('register-install-ad-p') }}</p>
        </div>
        {% if link %}
            <div class=\"card-footer p-2\">
                <a href=\"{{ asset('Updater') }}\" class=\"btn btn-secondary\">
                    {{ trans('register') }}
                </a>
                <a href=\"https://facturascripts.com/patrocinar\" target=\"_blank\" class=\"btn btn-outline-secondary\">
                    {{ trans('become-sponsor') }}
                </a>
            </div>
        {% else %}
            <div class=\"card-footer p-2\">
                <button class=\"btn btn-secondary\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modalTelemetry\">
                    {{ trans('register') }}
                </button>
            </div>
        {% endif %}
    </div>
{% endmacro %}

{# Muestra un mensaje para actualizar la instalación #}
{% macro updateInstall() %}
    <div class=\"card bg-warning shadow-sm\">
        <div class=\"card-body\">
            <div class=\"h3\">
                <i class=\"fa-solid fa-cloud-download fa-beat me-1\"></i> {{ trans('updates-available') }}
            </div>
            <p class=\"card-text\">{{ trans('updates-available-p') }}</p>
        </div>
        <div class=\"card-footer p-2\">
            <a href=\"{{ asset('Updater') }}\" class=\"btn btn-secondary\">
                {{ trans('update') }}
            </a>
        </div>
    </div>
{% endmacro %}", "Macro/Utils.html.twig", "/var/www/html/Core/View/Macro/Utils.html.twig");
    }
}
