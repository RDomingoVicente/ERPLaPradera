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

/* Master/MicroTemplate.html.twig */
class __TwigTemplate_be9d7031893c20585d1d50e6d41b4811 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["GoogleTagManager"] = $this->macros["GoogleTagManager"] = $this->loadTemplate("Macro/GoogleTagManager.html.twig", "Master/MicroTemplate.html.twig", 21)->unwrap();
        // line 22
        yield "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::constant("FS_LANG"), 0, 2), "html", null, true);
        yield "\" xml:lang=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::constant("FS_LANG"), 0, 2), "html", null, true);
        yield "\" >
    <head>
        ";
        // line 25
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_head", [], 25, $context, $this->getSourceContext());
        yield "
        ";
        // line 26
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 34
        yield "        ";
        yield from $this->unwrap()->yieldBlock('icons', $context, $blocks);
        // line 38
        yield "        ";
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 47
        yield "        ";
        // line 48
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["css"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 49
            yield "            <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css"], "html", null, true);
            yield "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "        ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 56
        yield "        ";
        // line 57
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["js"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 58
            yield "            <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["js"], "html", null, true);
            yield "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "        ";
        if (($context["debugBarRender"] ?? null)) {
            // line 61
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 61);
            yield "
        ";
        }
        // line 63
        yield "    </head>
    ";
        // line 64
        yield from $this->unwrap()->yieldBlock('fullBody', $context, $blocks);
        // line 85
        yield "</html>
";
        return; yield '';
    }

    // line 26
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true);
        yield "</title>
            <meta name=\"description\" content=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("meta-description"), "html", null, true);
        yield "\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <meta name=\"generator\" content=\"FacturaScripts\" />
            <meta name=\"robots\" content=\"noindex\" />
        ";
        return; yield '';
    }

    // line 34
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        yield "            <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/favicon.ico"), "html", null, true);
        yield "\" />
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/apple-icon-180x180.png"), "html", null, true);
        yield "\" />
        ";
        return; yield '';
    }

    // line 38
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "            <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        yield "?v=5\" />
            <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "?v=6\"/>
            <style>
                .btn-link {
                    text-decoration: none;
                }
            </style>
        ";
        return; yield '';
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        yield "            <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "?v=5\"></script>
            <script src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/js/all.min.js"), "html", null, true);
        yield "?v=6\"></script>
        ";
        return; yield '';
    }

    // line 64
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        yield "        <body>
            ";
        // line 66
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_body", [], 66, $context, $this->getSourceContext());
        yield "
            ";
        // line 67
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 77
        yield "            ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 79
        yield "            ";
        if (($context["debugBarRender"] ?? null)) {
            // line 80
            yield "                ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 80);
            yield "
            ";
        }
        // line 82
        yield "            <!-- execution time: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('executionTime')->getCallable()(), "html", null, true);
        yield " s -->
        </body>
    ";
        return; yield '';
    }

    // line 67
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        yield "                ";
        yield from         $this->loadTemplate("Macro/Toasts.html.twig", "Master/MicroTemplate.html.twig", 68)->unwrap()->yield($context);
        // line 69
        yield "                ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MicroTemplate.html.twig", 69)->unwrap();
        // line 70
        yield "                <div class=\"px-2 pt-2\">
                    ";
        // line 71
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["error", "critical"], "danger"], 71, $context, $this->getSourceContext());
        yield "
                    ";
        // line 72
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["warning"], "warning"], 72, $context, $this->getSourceContext());
        yield "
                    ";
        // line 73
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["notice"], "success"], 73, $context, $this->getSourceContext());
        yield "
                    ";
        // line 74
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["info"], "info"], 74, $context, $this->getSourceContext());
        yield "
                </div>
            ";
        return; yield '';
    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/MicroTemplate.html.twig";
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
        return array (  269 => 77,  261 => 74,  257 => 73,  253 => 72,  249 => 71,  246 => 70,  243 => 69,  240 => 68,  236 => 67,  227 => 82,  221 => 80,  218 => 79,  215 => 77,  213 => 67,  209 => 66,  206 => 65,  202 => 64,  195 => 54,  191 => 53,  186 => 52,  182 => 51,  170 => 40,  165 => 39,  161 => 38,  154 => 36,  149 => 35,  145 => 34,  135 => 29,  131 => 28,  128 => 27,  124 => 26,  118 => 85,  116 => 64,  113 => 63,  107 => 61,  104 => 60,  95 => 58,  90 => 57,  88 => 56,  85 => 51,  76 => 49,  71 => 48,  69 => 47,  66 => 38,  63 => 34,  61 => 26,  57 => 25,  50 => 23,  47 => 22,  45 => 21,);
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
     *
     */
#}
{% import 'Macro/GoogleTagManager.html.twig' as GoogleTagManager %}
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"{{ constant('FS_LANG') | slice(0, 2) }}\" xml:lang=\"{{ constant('FS_LANG') | slice(0, 2) }}\" >
    <head>
        {{ GoogleTagManager.head() }}
        {% block meta %}
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>{{ fsc.title }}</title>
            <meta name=\"description\" content=\"{{ trans('meta-description') }}\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <meta name=\"generator\" content=\"FacturaScripts\" />
            <meta name=\"robots\" content=\"noindex\" />
        {% endblock %}
        {% block icons %}
            <link rel=\"shortcut icon\" href=\"{{ asset('Dinamic/Assets/Images/favicon.ico') }}\" />
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('Dinamic/Assets/Images/apple-icon-180x180.png') }}\" />
        {% endblock %}
        {% block css %}
            <link rel=\"stylesheet\" href=\"{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}?v=5\" />
            <link rel=\"stylesheet\" href=\"{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}?v=6\"/>
            <style>
                .btn-link {
                    text-decoration: none;
                }
            </style>
        {% endblock %}
        {# Adds custom CSS assets #}
        {% for css in assetManager.get('css') %}
            <link rel=\"stylesheet\" href=\"{{ css }}\" />
        {% endfor %}
        {% block javascripts %}
            <script src=\"{{ asset('node_modules/jquery/dist/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}?v=5\"></script>
            <script src=\"{{ asset('node_modules/@fortawesome/fontawesome-free/js/all.min.js') }}?v=6\"></script>
        {% endblock %}
        {# Adds custom JS assets #}
        {% for js in assetManager.get('js') %}
            <script src=\"{{ js }}\"></script>
        {% endfor %}
        {% if debugBarRender %}
            {{ debugBarRender.renderHead() | raw }}
        {% endif %}
    </head>
    {% block fullBody %}
        <body>
            {{ GoogleTagManager.body() }}
            {% block messages %}
                {% include 'Macro/Toasts.html.twig' %}
                {% from 'Macro/Utils.html.twig' import message as showMessage %}
                <div class=\"px-2 pt-2\">
                    {{ showMessage(log, ['error', 'critical'], 'danger') }}
                    {{ showMessage(log, ['warning'], 'warning') }}
                    {{ showMessage(log, ['notice'], 'success') }}
                    {{ showMessage(log, ['info'], 'info') }}
                </div>
            {% endblock %}
            {% block body %}
            {% endblock %}
            {% if debugBarRender %}
                {{ debugBarRender.render() | raw }}
            {% endif %}
            <!-- execution time: {{ executionTime() }} s -->
        </body>
    {% endblock %}
</html>
", "Master/MicroTemplate.html.twig", "/var/www/html/Core/View/Master/MicroTemplate.html.twig");
    }
}
