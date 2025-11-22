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

/* Master/PanelController.html.twig */
class __TwigTemplate_d171f7b0a54f9dc69c98b1689eea00c3 extends Template
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
        return "Master/MenuBgTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBgTemplate.html.twig", "Master/PanelController.html.twig", 20);
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
        yield "    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col pb-2\">
                ";
        // line 30
        yield "                <nav aria-label=\"breadcrumb\" class=\"d-block d-md-none\">
                    <ol class=\"breadcrumb\">
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
        yield "                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 41), "url", ["list"], "method", false, false, false, 41), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 41)), "html", null, true);
        yield "</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                            ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 44)) {
            // line 45
            yield "                                ";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 45), "primaryDescription", [], "method", false, false, false, 45);
            yield "
                            ";
        } else {
            // line 47
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            yield "
                            ";
        }
        // line 49
        yield "                        </li>
                    </ol>
                </nav>
            ";
        // line 53
        yield "                <div class=\"btn-group\">
                    <a href=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 54), "url", ["list"], "method", false, false, false, 54), "html", null, true);
        yield "\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fa-solid fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("all"), "html", null, true);
        yield "</span>
                    </a>
                    <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 58), "url", ["edit"], "method", false, false, false, 58), "html", null, true);
        yield "\" class=\"btn btn-sm btn-secondary\"
                       title=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        yield "\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 64
        yield "                ";
        yield CoreExtension::callMacro($macros["_self"], "macro_optionsButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null)], 64, $context, $this->getSourceContext());
        yield "
                ";
        // line 66
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 66) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 66), "btnNew", [], "any", false, false, false, 66))) {
            // line 67
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 67), "url", ["new"], "method", false, false, false, 67), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\">
                        <i class=\"fa-solid fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            yield "</span>
                    </a>
                ";
        }
        // line 72
        yield "                ";
        // line 73
        yield "                ";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "getRow", ["actions"], "method", false, false, false, 73), "renderTop", [], "method", false, false, false, 73);
        yield "
                ";
        // line 75
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 75) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 75), "btnPrint", [], "any", false, false, false, 75))) {
            // line 76
            yield "                    ";
            yield CoreExtension::callMacro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 76, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 78
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("PanelController", "topButtons"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["includeView"]) {
            // line 79
            yield "                    ";
            yield from             $this->loadTemplate((($__internal_compile_0 = $context["includeView"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["path"] ?? null) : null), "Master/PanelController.html.twig", 79)->unwrap()->yield($context);
            // line 80
            yield "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['includeView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "            </div>
            ";
        // line 83
        yield "            <div class=\"col-md-auto d-none d-md-block text-end\">
                <h1 class=\"h5 mb-0\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 84)), "html", null, true);
        yield "</h1>
                ";
        // line 85
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 85)) {
            // line 86
            yield "                    <p class=\"text-info mb-3\">";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 86), "primaryDescription", [], "method", false, false, false, 86);
            yield "</p>
                ";
        } else {
            // line 88
            yield "                    <p class=\"text-info mb-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            yield "</p>
                ";
        }
        // line 90
        yield "            </div>
            <div class=\"col-md-auto d-none d-lg-block\">
                ";
        // line 92
        $context["image"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getImageUrl", [], "method", false, false, false, 92);
        // line 93
        yield "                ";
        if (Twig\Extension\CoreExtension::testEmpty(($context["image"] ?? null))) {
            // line 94
            yield "                    <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 94), "html", null, true);
            yield " fa-3x\" aria-hidden=\"true\"></i>
                ";
        } else {
            // line 96
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 96), "html", null, true);
            yield "\" class=\"img-thumbnail\"/>
                ";
        }
        // line 98
        yield "            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        yield "    ";
        $context["firstView"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 104));
        // line 105
        yield "    <div class=\"container-fluid\">
        <div class=\"row g-2\">
            ";
        // line 108
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 108)) > 1)) {
            // line 109
            yield "                <div class=\"col-12 col-lg-auto mt-lg-2\">
                    ";
            // line 111
            yield "                    <div class=\"nav nav-pills flex-row flex-lg-column overflow-x-auto\" id=\"mainTabs\" role=\"tablist\" style=\"white-space: nowrap;\">
                        ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 112));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 113
                yield "                            ";
                $context["active"] = ((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 113))) ? (" active") : (""));
                // line 114
                yield "                            ";
                $context["disable"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 114), "active", [], "any", false, false, false, 114)) ? ("") : (" disabled"));
                // line 115
                yield "                            <a class=\"nav-link";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["disable"] ?? null), "html", null, true);
                yield " text-nowrap\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                yield "-tab\" data-bs-toggle=\"pill\"
                               href=\"#";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                yield "\" role=\"tab\" aria-controls=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                yield "\" aria-expanded=\"true\">
                                <i class=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 117), "html", null, true);
                yield " fa-fw me-1 d-none d-lg-inline-block\"
                                   aria-hidden=\"true\"></i><span class=\"d-inline d-lg-inline\">";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 118), "html", null, true);
                yield "</span>
                                ";
                // line 119
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 119) > 1)) {
                    // line 120
                    yield "                                    <span class='badge bg-secondary ms-1 mt-lg-1 mb-lg-1 float-lg-end'>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 120), "html", null, true);
                    yield "</span>
                                ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 121
$context["view"], "count", [], "any", false, false, false, 121) == 1) && ($context["viewName"] != CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "getViewName", [], "method", false, false, false, 121)))) {
                    // line 122
                    yield "                                    <span class='badge bg-secondary ms-1 mt-lg-1 mb-lg-1 float-lg-end'>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 122), "html", null, true);
                    yield "</span>
                                ";
                }
                // line 124
                yield "                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "                    </div>
                </div>
            ";
        }
        // line 129
        yield "            ";
        // line 130
        yield "            ";
        $context["rightPanelClass"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 130)) > 1)) ? ("col-12 col-lg") : ("col-12"));
        // line 131
        yield "            <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rightPanelClass"] ?? null), "html", null, true);
        yield "\">
                ";
        // line 133
        yield "                <div class=\"tab-content\" id=\"mainTabsContent\">
                    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 134));
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
            // line 135
            yield "                        ";
            $context["active"] = ((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 135))) ? (" show active") : (""));
            // line 136
            yield "                        <div class=\"tab-pane fade";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "\" role=\"tabpanel\"
                             aria-labelledby=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "-tab\">
                            ";
            // line 138
            CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [$context["viewName"]], "method", false, false, false, 138);
            // line 139
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 139));
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
        // line 142
        yield "                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 148
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(document).ready(function () {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input:visible,textarea:visible\").filter(\":not([readonly='readonly']):not([disabled='disabled']):not([type='hidden']):not([type='checkbox']):not([type='radio'])\").first().focus();
            }
        });
    </script>
";
        return; yield '';
    }

    // line 159
    public function macro_optionsButton($__fsc__ = null, $__firstView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 160
            yield "    ";
            $context["show"] = false;
            // line 161
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 162
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 162), "active", [], "any", false, false, false, 162) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 162)))) {
                    // line 163
                    yield "            ";
                    $context["show"] = true;
                    // line 164
                    yield "        ";
                }
                // line 165
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            yield "    ";
            if ((($context["show"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 166), "btnOptions", [], "any", false, false, false, 166))) {
                // line 167
                yield "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-sm btn-secondary me-3 dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa-solid fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-lg-inline-block\">";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("options"), "html", null, true);
                yield "</span>
                </button>
                <div class=\"dropdown-menu\">
                    <h6 class=\"dropdown-header\">";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("options-button-header"), "html", null, true);
                yield "</h6>
                    ";
                // line 176
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 176));
                foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                    // line 177
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 177), "active", [], "any", false, false, false, 177) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 177)))) {
                        // line 178
                        yield "                            <a class=\"dropdown-item\"
                               href=\"EditPageOption?code=";
                        // line 179
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                        yield "&url=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 179), "url", [], "method", false, false, false, 179)), "html", null, true);
                        yield "\">
                                <i class=\"";
                        // line 180
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 180), "html", null, true);
                        yield " fa-fw me-1\" aria-hidden=\"true\"></i> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 180), "html", null, true);
                        yield "
                                ";
                        // line 181
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 181), "customized", [], "any", false, false, false, 181)) {
                            // line 182
                            yield "                                    <i class=\"fa-solid fa-user-pen ms-2\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("personalized"), "html", null, true);
                            yield "\"></i>
                                ";
                        }
                        // line 184
                        yield "                            </a>
                        ";
                    }
                    // line 186
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                yield "                </div>
            </div>
        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 193
    public function macro_printButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 194
            yield "    <div class=\"btn-group\">
        <a href=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 195), "url", [], "method", false, false, false, 195), "html", null, true);
            yield "&action=export&option=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 195), "defaultOption", [], "method", false, false, false, 195), "html", null, true);
            yield "\"
           target=\"_blank\" class=\"btn btn-sm btn-secondary\">
            <i class=\"fa-solid fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("print"), "html", null, true);
            yield "</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split\"
                data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("more"), "html", null, true);
            yield "</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-end\">
            ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 205), "options", [], "method", false, false, false, 205));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 206
                yield "                ";
                if (($context["key"] != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 206), "defaultOption", [], "method", false, false, false, 206))) {
                    // line 207
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 207), "url", [], "method", false, false, false, 207), "html", null, true);
                    yield "&action=export&option=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 208), "html", null, true);
                    yield " fa-fw me-1\" aria-hidden=\"true\"></i>
                        ";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 209)), "html", null, true);
                    yield "
                    </a>
                ";
                }
                // line 212
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            yield "            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#advancedExportModal\">
                <i class=\"fa-solid fa-tools fa-fw me-1\" aria-hidden=\"true\"></i> ";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("advanced"), "html", null, true);
            yield "
            </a>
            ";
            // line 217
            $context["tools"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 217), "tools", [], "method", false, false, false, 217);
            // line 218
            yield "            ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["tools"] ?? null))) {
                // line 219
                yield "                <div class=\"dropdown-divider\"></div>
                ";
                // line 220
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tools"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 221
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 221), "html", null, true);
                    yield "\" target=\"_blank\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 222
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 222), "html", null, true);
                    yield " fa-fw me-1\" aria-hidden=\"true\"></i>
                        ";
                    // line 223
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 223)), "html", null, true);
                    yield "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 226
                yield "            ";
            }
            // line 227
            yield "        </div>
    </div>
    <form action=\"";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 229), "url", [], "method", false, false, false, 229), "html", null, true);
            yield "\" method=\"post\" class=\"float-start\" target=\"_blank\" onsubmit=\"animateSpinner('add')\">
        <input type=\"hidden\" name=\"action\" value=\"export\"/>
        <div class=\"modal fade\" id=\"advancedExportModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fa-solid fa-tools fa-fw me-1\" aria-hidden=\"true\"></i>
                            ";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("advanced"), "html", null, true);
            yield "
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body text-start\">
                        <div class=\"mb-3\">
                            <select name=\"option\" class=\"form-select\">
                                ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 244), "options", [], "method", false, false, false, 244));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 245
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 245)), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            yield "                            </select>
                        </div>
                        <div class=\"mb-3\">
                            ";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("format"), "html", null, true);
            yield "
                            <select name=\"idformat\" class=\"form-select\">
                                <option value=\"\">";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("default"), "html", null, true);
            yield "</option>
                                <option value=\"\">------</option>
                                ";
            // line 254
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 254), "getFormats", [CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 254)], "method", false, false, false, 254));
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 255
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "id", [], "any", false, false, false, 255), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "nombre", [], "any", false, false, false, 255), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            yield "                            </select>
                        </div>
                        <div class=\"mb-3\">
                            ";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("language"), "html", null, true);
            yield "
                            <select name=\"langcode\" class=\"form-select\">
                                <option value=\"\">";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("default"), "html", null, true);
            yield "</option>
                                <option value=\"\">------</option>
                                ";
            // line 264
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "getAvailableLanguages", [], "method", false, false, false, 264));
            foreach ($context['_seq'] as $context["code"] => $context["lang"]) {
                // line 265
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["code"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["lang"], "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            yield "                            </select>
                        </div>
                        <div class=\"text-end\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("accept"), "html", null, true);
            yield "
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/PanelController.html.twig";
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
        return array (  763 => 271,  757 => 267,  746 => 265,  742 => 264,  737 => 262,  732 => 260,  727 => 257,  716 => 255,  712 => 254,  707 => 252,  702 => 250,  697 => 247,  686 => 245,  682 => 244,  672 => 237,  661 => 229,  657 => 227,  654 => 226,  645 => 223,  641 => 222,  636 => 221,  632 => 220,  629 => 219,  626 => 218,  624 => 217,  619 => 215,  615 => 213,  609 => 212,  603 => 209,  599 => 208,  592 => 207,  589 => 206,  585 => 205,  579 => 202,  572 => 198,  564 => 195,  561 => 194,  547 => 193,  537 => 187,  531 => 186,  527 => 184,  521 => 182,  519 => 181,  513 => 180,  507 => 179,  504 => 178,  501 => 177,  497 => 176,  493 => 175,  487 => 172,  480 => 167,  477 => 166,  471 => 165,  468 => 164,  465 => 163,  462 => 162,  457 => 161,  454 => 160,  441 => 159,  426 => 149,  422 => 148,  413 => 142,  395 => 139,  393 => 138,  389 => 137,  382 => 136,  379 => 135,  362 => 134,  359 => 133,  354 => 131,  351 => 130,  349 => 129,  344 => 126,  337 => 124,  331 => 122,  329 => 121,  324 => 120,  322 => 119,  318 => 118,  314 => 117,  308 => 116,  300 => 115,  297 => 114,  294 => 113,  290 => 112,  287 => 111,  284 => 109,  281 => 108,  277 => 105,  274 => 104,  270 => 103,  262 => 98,  254 => 96,  248 => 94,  245 => 93,  243 => 92,  239 => 90,  233 => 88,  227 => 86,  225 => 85,  221 => 84,  218 => 83,  215 => 81,  201 => 80,  198 => 79,  180 => 78,  174 => 76,  171 => 75,  166 => 73,  164 => 72,  158 => 69,  152 => 67,  149 => 66,  144 => 64,  137 => 59,  133 => 58,  128 => 56,  123 => 54,  120 => 53,  115 => 49,  109 => 47,  103 => 45,  101 => 44,  93 => 41,  90 => 40,  84 => 37,  81 => 36,  79 => 35,  74 => 33,  69 => 30,  64 => 26,  61 => 25,  59 => 24,  54 => 23,  50 => 22,  39 => 20,);
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
{% extends \"Master/MenuBgTemplate.html.twig\" %}

{% block bodyHeaderOptions %}
    {{ parent() }}
    {% set pageData = fsc.getPageData() %}
    {% set firstView = fsc.views | first %}
    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col pb-2\">
                {# -- Hidden alternative page info -- #}
                <nav aria-label=\"breadcrumb\" class=\"d-block d-md-none\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">{{ trans(pageData.menu) }}</a>
                        </li>
                        {% if pageData.submenu %}
                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">{{ trans(pageData.submenu) }}</a>
                            </li>
                        {% endif %}
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ firstView.model.url('list') }}\">{{ trans(pageData.title) }}</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                            {% if fsc.hasData %}
                                {{ firstView.model.primaryDescription() | raw }}
                            {% else %}
                                {{ trans('new') }}
                            {% endif %}
                        </li>
                    </ol>
                </nav>
            {# -- Top left buttons -- #}
                <div class=\"btn-group\">
                    <a href=\"{{ firstView.model.url('list') }}\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fa-solid fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">{{ trans('all') }}</span>
                    </a>
                    <a href=\"{{ firstView.model.url('edit') }}\" class=\"btn btn-sm btn-secondary\"
                       title=\"{{ trans('refresh') }}\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                {# -- Options button -- #}
                {{ _self.optionsButton(fsc, firstView) }}
                {# -- New button -- #}
                {% if fsc.hasData and firstView.settings.btnNew %}
                    <a href=\"{{ firstView.model.url('new') }}\" class=\"btn btn-sm btn-success\">
                        <i class=\"fa-solid fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">{{ trans('new') }}</span>
                    </a>
                {% endif %}
                {# -- Action buttons -- #}
                {{ firstView.getRow('actions').renderTop() | raw }}
                {# -- Print button -- #}
                {% if fsc.hasData and firstView.settings.btnPrint %}
                    {{ _self.printButton(fsc, firstView, i18n) }}
                {% endif %}
                {% for includeView in getIncludeViews('PanelController', 'topButtons') %}
                    {% include includeView['path'] %}
                {% endfor %}
            </div>
            {# -- Top right text -- #}
            <div class=\"col-md-auto d-none d-md-block text-end\">
                <h1 class=\"h5 mb-0\">{{ trans(pageData.title) }}</h1>
                {% if fsc.hasData %}
                    <p class=\"text-info mb-3\">{{ firstView.model.primaryDescription() | raw }}</p>
                {% else %}
                    <p class=\"text-info mb-3\">{{ trans('new') }}</p>
                {% endif %}
            </div>
            <div class=\"col-md-auto d-none d-lg-block\">
                {% set image = fsc.getImageUrl() %}
                {% if image is empty %}
                    <i class=\"{{ pageData.icon }} fa-3x\" aria-hidden=\"true\"></i>
                {% else %}
                    <img src=\"{{ image }}\" alt=\"{{ fsc.title }}\" class=\"img-thumbnail\"/>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% block body %}
    {% set firstView = fsc.views | first %}
    <div class=\"container-fluid\">
        <div class=\"row g-2\">
            {# -- Left Panel -- #}
            {% if fsc.views | length > 1 %}
                <div class=\"col-12 col-lg-auto mt-lg-2\">
                    {# -- Left tabs -- #}
                    <div class=\"nav nav-pills flex-row flex-lg-column overflow-x-auto\" id=\"mainTabs\" role=\"tablist\" style=\"white-space: nowrap;\">
                        {% for viewName, view in fsc.views %}
                            {% set active = (viewName == fsc.active) ? ' active' : '' %}
                            {% set disable = view.settings.active ? '' : ' disabled' %}
                            <a class=\"nav-link{{ active }}{{ disable }} text-nowrap\" id=\"{{ viewName }}-tab\" data-bs-toggle=\"pill\"
                               href=\"#{{ viewName }}\" role=\"tab\" aria-controls=\"{{ viewName }}\" aria-expanded=\"true\">
                                <i class=\"{{ view.icon }} fa-fw me-1 d-none d-lg-inline-block\"
                                   aria-hidden=\"true\"></i><span class=\"d-inline d-lg-inline\">{{ view.title }}</span>
                                {% if view.count > 1 %}
                                    <span class='badge bg-secondary ms-1 mt-lg-1 mb-lg-1 float-lg-end'>{{ view.count }}</span>
                                {% elseif view.count == 1 and viewName != firstView.getViewName() %}
                                    <span class='badge bg-secondary ms-1 mt-lg-1 mb-lg-1 float-lg-end'>{{ view.count }}</span>
                                {% endif %}
                            </a>
                        {% endfor %}
                    </div>
                </div>
            {% endif %}
            {# -- Right Panel -- #}
            {% set rightPanelClass = (fsc.views | length > 1) ? 'col-12 col-lg' : 'col-12' %}
            <div class=\"{{ rightPanelClass }}\">
                {# -- Tab content -- #}
                <div class=\"tab-content\" id=\"mainTabsContent\">
                    {% for viewName, view in fsc.views %}
                        {% set active = (viewName == fsc.active) ? ' show active' : '' %}
                        <div class=\"tab-pane fade{{ active }}\" id=\"{{ viewName }}\" role=\"tabpanel\"
                             aria-labelledby=\"{{ viewName }}-tab\">
                            {% do fsc.setCurrentView(viewName) %}
                            {{ include(view.template) }}
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function () {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input:visible,textarea:visible\").filter(\":not([readonly='readonly']):not([disabled='disabled']):not([type='hidden']):not([type='checkbox']):not([type='radio'])\").first().focus();
            }
        });
    </script>
{% endblock %}

{% macro optionsButton(fsc, firstView) %}
    {% set show = false %}
    {% for viewName, view in fsc.views %}
        {% if view.settings.active and view.columns is not empty %}
            {% set show = true %}
        {% endif %}
    {% endfor %}
    {% if show and firstView.settings.btnOptions %}
        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-sm btn-secondary me-3 dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa-solid fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-lg-inline-block\">{{ trans('options') }}</span>
                </button>
                <div class=\"dropdown-menu\">
                    <h6 class=\"dropdown-header\">{{ trans('options-button-header') }}</h6>
                    {% for viewName, view in fsc.views %}
                        {% if view.settings.active and view.columns is not empty %}
                            <a class=\"dropdown-item\"
                               href=\"EditPageOption?code={{ viewName }}&url={{ firstView.model.url() | url_encode }}\">
                                <i class=\"{{ view.icon }} fa-fw me-1\" aria-hidden=\"true\"></i> {{ view.title }}
                                {% if view.settings.customized %}
                                    <i class=\"fa-solid fa-user-pen ms-2\" title=\"{{ trans('personalized') }}\"></i>
                                {% endif %}
                            </a>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro printButton(fsc, firstView, i18n) %}
    <div class=\"btn-group\">
        <a href=\"{{ firstView.model.url() }}&action=export&option={{ fsc.exportManager.defaultOption() }}\"
           target=\"_blank\" class=\"btn btn-sm btn-secondary\">
            <i class=\"fa-solid fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">{{ trans('print') }}</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split\"
                data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">{{ trans('more') }}</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-end\">
            {% for key, option in fsc.exportManager.options() %}
                {% if key != fsc.exportManager.defaultOption() %}
                    <a href=\"{{ firstView.model.url() }}&action=export&option={{ key }}\" class=\"dropdown-item\">
                        <i class=\"{{ option.icon }} fa-fw me-1\" aria-hidden=\"true\"></i>
                        {{ trans(option.description) }}
                    </a>
                {% endif %}
            {% endfor %}
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#advancedExportModal\">
                <i class=\"fa-solid fa-tools fa-fw me-1\" aria-hidden=\"true\"></i> {{ trans('advanced') }}
            </a>
            {% set tools = fsc.exportManager.tools() %}
            {% if tools is not empty %}
                <div class=\"dropdown-divider\"></div>
                {% for key, tool in tools %}
                    <a href=\"{{ tool.link }}\" target=\"_blank\" class=\"dropdown-item\">
                        <i class=\"{{ tool.icon }} fa-fw me-1\" aria-hidden=\"true\"></i>
                        {{ trans(tool.description) }}
                    </a>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    <form action=\"{{ firstView.model.url() }}\" method=\"post\" class=\"float-start\" target=\"_blank\" onsubmit=\"animateSpinner('add')\">
        <input type=\"hidden\" name=\"action\" value=\"export\"/>
        <div class=\"modal fade\" id=\"advancedExportModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fa-solid fa-tools fa-fw me-1\" aria-hidden=\"true\"></i>
                            {{ trans('advanced') }}
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body text-start\">
                        <div class=\"mb-3\">
                            <select name=\"option\" class=\"form-select\">
                                {% for key, option in fsc.exportManager.options() %}
                                    <option value=\"{{ key }}\">{{ trans(option.description) }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            {{ trans('format') }}
                            <select name=\"idformat\" class=\"form-select\">
                                <option value=\"\">{{ trans('default') }}</option>
                                <option value=\"\">------</option>
                                {% for format in fsc.exportManager.getFormats(firstView.model) %}
                                    <option value=\"{{ format.id }}\">{{ format.nombre }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            {{ trans('language') }}
                            <select name=\"langcode\" class=\"form-select\">
                                <option value=\"\">{{ trans('default') }}</option>
                                <option value=\"\">------</option>
                                {% for code, lang in i18n.getAvailableLanguages() %}
                                    <option value=\"{{ code }}\">{{ lang }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"text-end\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                {{ trans('accept') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endmacro %}
", "Master/PanelController.html.twig", "/var/www/html/Core/View/Master/PanelController.html.twig");
    }
}
