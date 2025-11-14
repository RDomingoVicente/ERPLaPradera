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

/* Macro/Menu.html.twig */
class __TwigTemplate_fed906746c947ab3325e7d4ab48ad77b extends Template
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
        return; yield '';
    }

    // line 21
    public function macro_showMenu($__menuItem__ = null, $__parent__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "menuItem" => $__menuItem__,
            "parent" => $__parent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 22
            yield "    ";
            $macros["macros"] = $this;
            // line 23
            yield "    ";
            $context["active"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "active", [], "any", false, false, false, 23)) ? (" active") : (""));
            // line 24
            yield "    ";
            $context["menuId"] = ((($context["parent"] ?? null)) ? ((($context["parent"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "name", [], "any", false, false, false, 24))) : (("menu_" . CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "name", [], "any", false, false, false, 24))));
            // line 25
            yield "
    ";
            // line 26
            if ( !($context["parent"] ?? null)) {
                // line 27
                yield "        ";
                // line 28
                yield "        <li id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["menuId"] ?? null)), "html", null, true);
                yield "\" class=\"fs-menu-item nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                ";
                // line 30
                $context["title"] = CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "title", [], "any", false, false, false, 30);
                // line 31
                yield "                <span class=\"d-md-none\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["title"] ?? null), 0, 2), "html", null, true);
                yield "</span>
                <span class=\"d-none d-md-inline-block\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</span>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["menuId"] ?? null), "html", null, true);
                yield "\">
    ";
            } else {
                // line 36
                yield "        ";
                // line 37
                yield "        <li id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["menuId"] ?? null)), "html", null, true);
                yield "\" class=\"fs-menu-item dropdown-submenu\">
            <a class=\"dropdown-item";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\" href=\"#\">
                <i class=\"fa-solid fa-folder-open fa-fw me-1\" aria-hidden=\"true\"></i> ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
                yield "
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["menuId"] ?? null), "html", null, true);
                yield "\">
    ";
            }
            // line 43
            yield "
    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "menu", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 45
                yield "        ";
                $context["extraClass"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 45)) ? (" active") : (""));
                // line 46
                yield "        ";
                $context["childId"] = ((($context["menuId"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 46));
                // line 47
                yield "
        ";
                // line 48
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "menu", [], "any", false, false, false, 48))) {
                    // line 49
                    yield "            <li id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["childId"] ?? null)), "html", null, true);
                    yield "\" class=\"fs-menu-item\">
                <a class=\"dropdown-item";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraClass"] ?? null), "html", null, true);
                    yield "\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 50), "html", null, true);
                    yield "\">
                    <i class=\"";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 51), "html", null, true);
                    yield " fa-fw me-1\" aria-hidden=\"true\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 51), "html", null, true);
                    yield "
                </a>
            </li>
        ";
                } else {
                    // line 55
                    yield "            ";
                    yield CoreExtension::callMacro($macros["macros"], "macro_showMenu", [$context["item"], ($context["menuId"] ?? null)], 55, $context, $this->getSourceContext());
                    yield "
        ";
                }
                // line 57
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "    </ul>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Macro/Menu.html.twig";
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
        return array (  170 => 58,  164 => 57,  158 => 55,  149 => 51,  143 => 50,  138 => 49,  136 => 48,  133 => 47,  130 => 46,  127 => 45,  123 => 44,  120 => 43,  115 => 41,  110 => 39,  106 => 38,  101 => 37,  99 => 36,  94 => 34,  89 => 32,  84 => 31,  82 => 30,  78 => 29,  73 => 28,  71 => 27,  69 => 26,  66 => 25,  63 => 24,  60 => 23,  57 => 22,  44 => 21,  38 => 20,);
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
     * along with this program. If not, see <http://www.gnu.org/licenses/>.
     */
#}

{% macro showMenu(menuItem, parent = '') %}
    {% import _self as macros %}
    {% set active = menuItem.active ? ' active' : '' %}
    {% set menuId = parent ? parent ~ menuItem.name : 'menu_' ~ menuItem.name %}

    {% if not parent %}
        {# Main level menu/submenu #}
        <li id=\"{{ menuId | lower }}\" class=\"fs-menu-item nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle{{ active }}\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                {% set title = menuItem.title %}
                <span class=\"d-md-none\">{{ title | slice(0, 2) }}</span>
                <span class=\"d-none d-md-inline-block\">{{ title }}</span>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"{{ menuId }}\">
    {% else %}
        {# Child level submenu #}
        <li id=\"{{ menuId | lower }}\" class=\"fs-menu-item dropdown-submenu\">
            <a class=\"dropdown-item{{ active }}\" href=\"#\">
                <i class=\"fa-solid fa-folder-open fa-fw me-1\" aria-hidden=\"true\"></i> {{ menuItem.title }}
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"{{ menuId }}\">
    {% endif %}

    {% for item in menuItem.menu %}
        {% set extraClass = item.active ? ' active' : '' %}
        {% set childId = menuId ~ '_' ~ item.name %}

        {% if item.menu is empty %}
            <li id=\"{{ childId | lower }}\" class=\"fs-menu-item\">
                <a class=\"dropdown-item{{ extraClass }}\" href=\"{{ item.url }}\">
                    <i class=\"{{ item.icon }} fa-fw me-1\" aria-hidden=\"true\"></i> {{ item.title }}
                </a>
            </li>
        {% else %}
            {{ macros.showMenu(item, menuId) }}
        {% endif %}
    {% endfor %}
    </ul>
{% endmacro %}", "Macro/Menu.html.twig", "/var/www/html/Core/View/Macro/Menu.html.twig");
    }
}
