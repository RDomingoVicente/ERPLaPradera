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

/* Macro/Forms.html.twig */
class __TwigTemplate_93737d7f4611a75cd656ecb104b660b6 extends Template
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
        // line 62
        yield "
";
        return; yield '';
    }

    // line 37
    public function macro_simpleInput($__id__ = null, $__name__ = null, $__value__ = null, $__type__ = "text", $__label__ = null, $__icon__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "label" => $__label__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 38
            yield "        ";
            if (($context["label"] ?? null)) {
                // line 39
                yield "            <label class=\"mb-1\" for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
                yield "</label>
        ";
            }
            // line 41
            yield "
        ";
            // line 42
            if (($context["icon"] ?? null)) {
                // line 43
                yield "            <div class=\"input-group\">
                <span class=\"input-group-text\">
                        <i class=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield " fa-fw\" aria-hidden=\"true\"></i>
                </span>
        ";
            }
            // line 48
            yield "
                <input type=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"
                        ";
            // line 50
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 50)) {
                // line 51
                yield "                            class=\"form-control\"
                        ";
            }
            // line 53
            yield "
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 55
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrValue"], "html", null, true);
                yield "\"
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield " /> ";
            // line 57
            yield "
        ";
            // line 58
            if (($context["icon"] ?? null)) {
                // line 59
                yield "            </div>
        ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 80
    public function macro_simpleSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__label__ = null, $__icon__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "allValues" => $__allValues__,
            "label" => $__label__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 81
            yield "    ";
            if (($context["label"] ?? null)) {
                // line 82
                yield "        <label class=\"mb-1\" for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
                yield "</label>
    ";
            }
            // line 84
            yield "
    ";
            // line 85
            if (($context["icon"] ?? null)) {
                // line 86
                yield "        <div class=\"input-group\">
            <span class=\"input-group-text\">
                    <i class=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield " fa-fw\" aria-hidden=\"true\"></i>
            </span>
    ";
            }
            // line 91
            yield "
        <select id=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\"
                ";
            // line 93
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 93)) {
                // line 94
                yield "                class=\"form-select\"
                ";
            }
            // line 96
            yield "
                ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 98
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrValue"], "html", null, true);
                yield "\"
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "> ";
            // line 100
            yield "
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["allValues"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 102
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                if ((($context["value"] ?? null) == $context["key"])) {
                    yield " selected=\"selected\"";
                }
                yield ">
                    ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "        </select>

    ";
            // line 108
            if (($context["icon"] ?? null)) {
                // line 109
                yield "        </div>
    ";
            }
            // line 111
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Macro/Forms.html.twig";
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
        return array (  257 => 111,  253 => 109,  251 => 108,  247 => 106,  238 => 103,  229 => 102,  225 => 101,  222 => 100,  220 => 99,  209 => 98,  205 => 97,  202 => 96,  198 => 94,  196 => 93,  190 => 92,  187 => 91,  181 => 88,  177 => 86,  175 => 85,  172 => 84,  164 => 82,  161 => 81,  143 => 80,  135 => 59,  133 => 58,  130 => 57,  128 => 56,  117 => 55,  113 => 54,  110 => 53,  106 => 51,  104 => 50,  94 => 49,  91 => 48,  85 => 45,  81 => 43,  79 => 42,  76 => 41,  68 => 39,  65 => 38,  47 => 37,  41 => 62,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * This file is part of FacturaScripts
     * Copyright (C) 2013-2019 Carlos Garcia Gomez <carlos@facturascripts.com>
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

{#
    /**
     * Creates an input form element
     *
     * @param string \$id element id attribute.
     * @param string \$name element name attribute.
     * @param string \$value the default value for the input.
     * @param string \$type the input type attribute (defaults to text) must be any valid input type attribute
     *               (https://www.w3.org/TR/2017/REC-html52-20171214/sec-forms.html#element-attrdef-input-type).
     * @param string \$label NULL if no label is set. This will add a <label> element with the string as its contents.
     * @param string \$icon string identifying a FontAwesome icon (http://fontawesome.io/icons/).
     * @param array  \$attributes an associative array of strings, extra attributes with their values
     *               (https://www.w3.org/TR/2017/REC-html52-20171214/sec-forms.html#the-input-element)
     *               it shouldn't be 'type', 'id' or 'name', as those are already given.
     */
#}
{% macro simpleInput(id, name, value, type = \"text\", label = NULL, icon = NULL, attributes = NULL) %}
        {% if label %}
            <label class=\"mb-1\" for=\"{{ name }}\">{{ label }}</label>
        {% endif %}

        {% if icon %}
            <div class=\"input-group\">
                <span class=\"input-group-text\">
                        <i class=\"{{ icon }} fa-fw\" aria-hidden=\"true\"></i>
                </span>
        {% endif %}

                <input type=\"{{ type }}\" id=\"{{ id }}\" name=\"{{ name }}\" value=\"{{ value }}\"
                        {% if attributes.class is not defined %}
                            class=\"form-control\"
                        {% endif %}

                        {% for attribute,attrValue in attributes %}
                            {{ attribute }}=\"{{ attrValue }}\"
                        {% endfor %} /> {# end input #}

        {% if icon %}
            </div>
        {% endif %}
{% endmacro %}

{#
    /**
     * Creates a Select form element
     *
     * @param string \$id element id attribute
     * @param string \$name element name attribute
     * @param string \$value the default value that will be selected (must be contained in the allValues select)
     * @param array  \$allValues an associative array with the select options (where the key is the option value and the
     *               array value is the option text.
     * @param string \$label NULL if no label is set. This will add a <label> element with the string as its contents.
     * @param string \$icon string identifying a FontAwesome icon (http://fontawesome.io/icons/).
     * @param array  \$attributes an associative array of strings, extra attributes with their values
     *               (https://www.w3.org/TR/2017/REC-html52-20171214/sec-forms.html#the-input-element)
     *               it shouldn't be 'id' or 'name', as those are already given, beware that if the class attribute is
     *               given, it will override the default ones (remember to add the \"form-control\" class for consistency.
     */
#}
{% macro simpleSelect(id, name, value, allValues = {}, label = NULL, icon = NULL, attributes = NULL) %}
    {% if label %}
        <label class=\"mb-1\" for=\"{{ name }}\">{{ label }}</label>
    {% endif %}

    {% if icon %}
        <div class=\"input-group\">
            <span class=\"input-group-text\">
                    <i class=\"{{ icon }} fa-fw\" aria-hidden=\"true\"></i>
            </span>
    {% endif %}

        <select id=\"{{ id }}\" name=\"{{ name }}\"
                {% if attributes.class is not defined %}
                class=\"form-select\"
                {% endif %}

                {% for attribute,attrValue in attributes %}
                    {{ attribute }}=\"{{ attrValue }}\"
                {% endfor %}> {# end select #}

            {% for key,option in allValues %}
                <option value=\"{{ key }}\"{% if value == key %} selected=\"selected\"{% endif %}>
                    {{ option }}
                </option>
            {% endfor %}
        </select>

    {% if icon %}
        </div>
    {% endif %}

{% endmacro %}", "Macro/Forms.html.twig", "/var/www/html/Core/View/Macro/Forms.html.twig");
    }
}
