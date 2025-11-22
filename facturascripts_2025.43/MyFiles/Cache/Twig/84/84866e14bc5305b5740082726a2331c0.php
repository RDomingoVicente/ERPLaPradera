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

/* EditSettings.html.twig */
class __TwigTemplate_fbeb0de797f1708054452754aeb4a739 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
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
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "EditSettings.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        $context["pageData"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 23);
        // line 24
        yield "    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-1\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 28), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        yield "\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>
            <div class=\"col-11 text-end\">
                <h1 class=\"h4\">
                    ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 35), "html", null, true);
        yield "
                    <i class=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 36), "html", null, true);
        yield " fa-fw\" aria-hidden=\"true\"></i>
                </h1>
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
        return "EditSettings.html.twig";
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
        return array (  76 => 36,  72 => 35,  60 => 28,  54 => 24,  51 => 23,  47 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2023 Carlos Garcia Gomez <carlos@facturascripts.com>
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

{% block bodyHeaderOptions %}
    {% set pageData = fsc.getPageData() %}
    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-1\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"{{ fsc.url() }}\" title=\"{{ trans('refresh') }}\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>
            <div class=\"col-11 text-end\">
                <h1 class=\"h4\">
                    {{ fsc.title }}
                    <i class=\"{{ pageData.icon }} fa-fw\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
{% endblock %}
", "EditSettings.html.twig", "/var/www/html/Core/View/EditSettings.html.twig");
    }
}
