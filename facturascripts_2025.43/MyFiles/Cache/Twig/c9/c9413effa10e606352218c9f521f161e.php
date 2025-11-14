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

/* Master/MenuTemplate.html.twig */
class __TwigTemplate_bf9f3bf3a62802d676056fc9730ceb15 extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'navbarContent' => [$this, 'block_navbarContent'],
            'navbarMenuIcon' => [$this, 'block_navbarMenuIcon'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $macros["GoogleTagManager"] = $this->macros["GoogleTagManager"] = $this->loadTemplate("Macro/GoogleTagManager.html.twig", "Master/MenuTemplate.html.twig", 20)->unwrap();
        // line 21
        yield "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::constant("FS_LANG"), 0, 2), "html", null, true);
        yield "\"
      xml:lang=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::constant("FS_LANG"), 0, 2), "html", null, true);
        yield "\">
<head>
    ";
        // line 25
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_head", [], 25, $context, $this->getSourceContext());
        yield "
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "HeadFirst"));
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
            // line 27
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_0 = $context["includeView"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 27)->unwrap()->yield($context);
            // line 28
            yield "    ";
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
        // line 29
        yield "    ";
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 37
        yield "    ";
        yield from $this->unwrap()->yieldBlock('icons', $context, $blocks);
        // line 42
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "CssBefore"));
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
            // line 43
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_1 = $context["includeView"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 43)->unwrap()->yield($context);
            // line 44
            yield "    ";
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
        // line 45
        yield "    ";
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 50
        yield "    ";
        // line 51
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["css"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 52
            yield "        <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css"], "html", null, true);
            yield "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "CssAfter"));
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
            // line 55
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_2 = $context["includeView"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 55)->unwrap()->yield($context);
            // line 56
            yield "    ";
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
        // line 57
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "JsHeadBefore"));
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
            // line 58
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_3 = $context["includeView"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 58)->unwrap()->yield($context);
            // line 59
            yield "    ";
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
        // line 60
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 67
        yield "    ";
        // line 68
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["js"], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 69
            yield "        <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["js"], "html", null, true);
            yield "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "JsHeadAfter"));
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
            // line 72
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_4 = $context["includeView"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 72)->unwrap()->yield($context);
            // line 73
            yield "    ";
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
        // line 74
        yield "    ";
        if (($context["debugBarRender"] ?? null)) {
            // line 75
            yield "        ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 75);
            yield "
    ";
        }
        // line 77
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "HeadEnd"));
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
            // line 78
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_5 = $context["includeView"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 78)->unwrap()->yield($context);
            // line 79
            yield "    ";
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
        // line 80
        yield "</head>
";
        // line 81
        yield from $this->unwrap()->yieldBlock('fullBody', $context, $blocks);
        // line 185
        yield "</html>
<!-- execution time: ";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('executionTime')->getCallable()(), "html", null, true);
        yield " s -->
";
        return; yield '';
    }

    // line 29
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <title>";
        // line 31
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 31);
        yield "</title>
        <meta name=\"description\" content=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("meta-description"), "html", null, true);
        yield "\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"generator\" content=\"FacturaScripts\"/>
        <meta name=\"robots\" content=\"noindex\"/>
    ";
        return; yield '';
    }

    // line 37
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "        <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/favicon.ico"), "html", null, true);
        yield "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"180x180\"
              href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/apple-icon-180x180.png"), "html", null, true);
        yield "\"/>
    ";
        return; yield '';
    }

    // line 45
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        yield "?v=5\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "?v=6\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/CSS/custom.css"), "html", null, true);
        yield "?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "ymd"), "html", null, true);
        yield "\"/>
    ";
        return; yield '';
    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "?v=5\"></script>
        <script src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/pace-js/pace.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/js/all.min.js"), "html", null, true);
        yield "?v=6\"></script>
        <script src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/JS/Custom.js"), "html", null, true);
        yield "?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "ymd"), "html", null, true);
        yield "\"></script>
    ";
        return; yield '';
    }

    // line 81
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        yield "    <body>
    ";
        // line 83
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_body", [], 83, $context, $this->getSourceContext());
        yield "
    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "BodyFirst"));
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
            // line 85
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_6 = $context["includeView"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 85)->unwrap()->yield($context);
            // line 86
            yield "    ";
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
        // line 87
        yield "    ";
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 151
        yield "    <div class=\"pt-3\">
        ";
        // line 152
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 166
        yield "        ";
        yield from $this->unwrap()->yieldBlock('bodyHeaderOptions', $context, $blocks);
        // line 168
        yield "    </div>
    ";
        // line 169
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 171
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "JsFooter"));
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
            // line 172
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_7 = $context["includeView"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 172)->unwrap()->yield($context);
            // line 173
            yield "    ";
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
        // line 174
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "BodyEnd"));
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
            // line 175
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_8 = $context["includeView"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 175)->unwrap()->yield($context);
            // line 176
            yield "    ";
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
        // line 177
        yield "    ";
        if (($context["debugBarRender"] ?? null)) {
            // line 178
            yield "        ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 178);
            yield "
    ";
        }
        // line 180
        yield "    <br/>
    <br/>
    <br/>
    </body>
";
        return; yield '';
    }

    // line 87
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        yield "        <nav class=\"navbar navbar-expand navbar-dark bg-primary sticky-top d-print-none\">
            <div class=\"container-fluid\">
            ";
        // line 90
        yield from $this->unwrap()->yieldBlock('navbarContent', $context, $blocks);
        // line 148
        yield "            </div>
        </nav>
    ";
        return; yield '';
    }

    // line 90
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        yield "                <a class=\"navbar-brand d-none d-sm-inline\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 91), "homepage", [], "any", false, false, false, 91)), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("homepage"), "html", null, true);
        yield "\">
                    <img src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/logo-white.png"), "html", null, true);
        yield "\" width=\"30\" height=\"30\"
                         class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                    <span class=\"d-none d-xl-inline-block\">";
        // line 94
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 94), "nombrecorto", [], "any", false, false, false, 94);
        yield "</span>
                </a>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"navbar-nav pt-1\">
                        ";
        // line 98
        $macros["macros"] = $this->loadTemplate("Macro/Menu.html.twig", "Master/MenuTemplate.html.twig", 98)->unwrap();
        // line 99
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menuManager"] ?? null), "getMenu", [], "method", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 100
            yield "                            ";
            yield CoreExtension::callMacro($macros["macros"], "macro_showMenu", [$context["menuItem"]], 100, $context, $this->getSourceContext());
            yield "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "                    </ul>
                    <ul class=\"navbar-nav flex-row ms-auto\">
                        ";
        // line 104
        yield from $this->unwrap()->yieldBlock('navbarMenuIcon', $context, $blocks);
        // line 145
        yield "                    </ul>
                </div>
            ";
        return; yield '';
    }

    // line 104
    public function block_navbarMenuIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "MenuIconBefore"));
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
            // line 106
            yield "                                ";
            yield from             $this->loadTemplate((($__internal_compile_9 = $context["includeView"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 106)->unwrap()->yield($context);
            // line 107
            yield "                            ";
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
        // line 108
        yield "                            <li class=\"nav-item\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
        yield "\">
                                <a class=\"nav-link";
        // line 109
        yield (((($context["template"] ?? null) == "MegaSearch.html.twig")) ? (" active") : (""));
        yield "\" href=\"MegaSearch\" id=\"menuIconSearch\">
                                    <i class=\"fa-solid fa-search\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"nav-item\" title=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help"), "html", null, true);
        yield "\">
                                <a class=\"nav-link\" id=\"menuIconHelp\" rel=\"nofollow\" target=\"_blank\"
                                   href=\"https://facturascripts.com/ayuda?controller=";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["controllerName"] ?? null), "html", null, true);
        yield "\">
                                    <i class=\"fa-solid fa-question-circle\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle mr-md-2\" href=\"#\" data-bs-toggle=\"dropdown\"
                                   aria-haspopup=\"true\" aria-expanded=\"false\" id=\"menuIconUser\" title=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("user"), "html", null, true);
        yield "\">
                                    <i class=\"fa-solid fa-user-circle fa-fw me-1\" aria-hidden=\"true\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"user-list\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 125), "url", [], "method", false, false, false, 125), "html", null, true);
        yield "\">
                                        <i class=\"fa-solid fa-user-circle fa-fw me-1\" aria-hidden=\"true\"></i> ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 126), "nick", [], "any", false, false, false, 126), "html", null, true);
        yield "
                                    </a>
                                    <a class=\"dropdown-item send-email\" href=\"SendMail\">
                                        <i class=\"fa-solid fa-envelope fa-fw me-1\" aria-hidden=\"true\"></i>
                                        ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("send-mail"), "html", null, true);
        yield "
                                    </a>
                                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "MenuIconUser"));
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
            // line 133
            yield "                                        ";
            yield from             $this->loadTemplate((($__internal_compile_10 = $context["includeView"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 133)->unwrap()->yield($context);
            // line 134
            yield "                                    ";
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
        // line 135
        yield "                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("login"), "html", null, true);
        yield "?action=logout&multireqtoken=";
        yield $this->env->getFunction('formToken')->getCallable()(false);
        yield "\">
                                        <i class=\"fa-solid fa-door-open fa-fw me-1\" aria-hidden=\"true\"></i> ";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("logout"), "html", null, true);
        yield "
                                    </a>
                                </div>
                            </li>
                            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "MenuIconAfter"));
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
            // line 142
            yield "                                ";
            yield from             $this->loadTemplate((($__internal_compile_11 = $context["includeView"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 142)->unwrap()->yield($context);
            // line 143
            yield "                            ";
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
        // line 144
        yield "                        ";
        return; yield '';
    }

    // line 152
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        yield "            ";
        yield from         $this->loadTemplate("Macro/Toasts.html.twig", "Master/MenuTemplate.html.twig", 153)->unwrap()->yield($context);
        // line 154
        yield "            ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MenuTemplate.html.twig", 154)->unwrap();
        // line 155
        yield "            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 158
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["error", "critical"], "danger"], 158, $context, $this->getSourceContext());
        yield "
                        ";
        // line 159
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["warning"], "warning"], 159, $context, $this->getSourceContext());
        yield "
                        ";
        // line 160
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["notice"], "success"], 160, $context, $this->getSourceContext());
        yield "
                        ";
        // line 161
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["info"], "info"], 161, $context, $this->getSourceContext());
        yield "
                    </div>
                </div>
            </div>
        ";
        return; yield '';
    }

    // line 166
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    // line 169
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/MenuTemplate.html.twig";
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
        return array (  874 => 169,  866 => 166,  856 => 161,  852 => 160,  848 => 159,  844 => 158,  839 => 155,  836 => 154,  833 => 153,  829 => 152,  824 => 144,  810 => 143,  807 => 142,  790 => 141,  783 => 137,  777 => 136,  774 => 135,  760 => 134,  757 => 133,  740 => 132,  735 => 130,  728 => 126,  724 => 125,  717 => 121,  708 => 115,  703 => 113,  696 => 109,  691 => 108,  677 => 107,  674 => 106,  656 => 105,  652 => 104,  645 => 145,  643 => 104,  639 => 102,  630 => 100,  625 => 99,  623 => 98,  616 => 94,  611 => 92,  604 => 91,  600 => 90,  593 => 148,  591 => 90,  587 => 88,  583 => 87,  574 => 180,  568 => 178,  565 => 177,  551 => 176,  548 => 175,  530 => 174,  516 => 173,  513 => 172,  495 => 171,  493 => 169,  490 => 168,  487 => 166,  485 => 152,  482 => 151,  479 => 87,  465 => 86,  462 => 85,  445 => 84,  441 => 83,  438 => 82,  434 => 81,  425 => 65,  421 => 64,  417 => 63,  413 => 62,  408 => 61,  404 => 60,  395 => 48,  391 => 47,  386 => 46,  382 => 45,  375 => 40,  369 => 38,  365 => 37,  355 => 32,  351 => 31,  348 => 30,  344 => 29,  337 => 186,  334 => 185,  332 => 81,  329 => 80,  315 => 79,  312 => 78,  294 => 77,  288 => 75,  285 => 74,  271 => 73,  268 => 72,  250 => 71,  241 => 69,  236 => 68,  234 => 67,  231 => 60,  217 => 59,  214 => 58,  196 => 57,  182 => 56,  179 => 55,  161 => 54,  152 => 52,  147 => 51,  145 => 50,  142 => 45,  128 => 44,  125 => 43,  107 => 42,  104 => 37,  101 => 29,  87 => 28,  84 => 27,  67 => 26,  63 => 25,  58 => 23,  54 => 22,  51 => 21,  49 => 20,);
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
{% import 'Macro/GoogleTagManager.html.twig' as GoogleTagManager %}
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"{{ constant('FS_LANG') | slice(0, 2) }}\"
      xml:lang=\"{{ constant('FS_LANG') | slice(0, 2) }}\">
<head>
    {{ GoogleTagManager.head() }}
    {% for includeView in getIncludeViews('MenuTemplate', 'HeadFirst') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% block meta %}
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <title>{{ fsc.title | raw }}</title>
        <meta name=\"description\" content=\"{{ trans('meta-description') }}\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"generator\" content=\"FacturaScripts\"/>
        <meta name=\"robots\" content=\"noindex\"/>
    {% endblock %}
    {% block icons %}
        <link rel=\"shortcut icon\" href=\"{{ asset('Dinamic/Assets/Images/favicon.ico') }}\"/>
        <link rel=\"apple-touch-icon\" sizes=\"180x180\"
              href=\"{{ asset('Dinamic/Assets/Images/apple-icon-180x180.png') }}\"/>
    {% endblock %}
    {% for includeView in getIncludeViews('MenuTemplate', 'CssBefore') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% block css %}
        <link rel=\"stylesheet\" href=\"{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}?v=5\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}?v=6\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('Dinamic/Assets/CSS/custom.css') }}?v={{ 'now' | date('ymd') }}\"/>
    {% endblock %}
    {# Adds custom CSS assets #}
    {% for css in assetManager.get('css') %}
        <link rel=\"stylesheet\" href=\"{{ css }}\"/>
    {% endfor %}
    {% for includeView in getIncludeViews('MenuTemplate', 'CssAfter') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% for includeView in getIncludeViews('MenuTemplate', 'JsHeadBefore') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% block javascripts %}
        <script src=\"{{ asset('node_modules/jquery/dist/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}?v=5\"></script>
        <script src=\"{{ asset('node_modules/pace-js/pace.min.js') }}\"></script>
        <script src=\"{{ asset('node_modules/@fortawesome/fontawesome-free/js/all.min.js') }}?v=6\"></script>
        <script src=\"{{ asset('Dinamic/Assets/JS/Custom.js') }}?v={{ 'now' | date('ymd') }}\"></script>
    {% endblock %}
    {# Adds custom JS assets #}
    {% for js in assetManager.get('js') %}
        <script src=\"{{ js }}\"></script>
    {% endfor %}
    {% for includeView in getIncludeViews('MenuTemplate', 'JsHeadAfter') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% if debugBarRender %}
        {{ debugBarRender.renderHead() | raw }}
    {% endif %}
    {% for includeView in getIncludeViews('MenuTemplate', 'HeadEnd') %}
        {% include includeView['path'] %}
    {% endfor %}
</head>
{% block fullBody %}
    <body>
    {{ GoogleTagManager.body() }}
    {% for includeView in getIncludeViews('MenuTemplate', 'BodyFirst') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% block navbar %}
        <nav class=\"navbar navbar-expand navbar-dark bg-primary sticky-top d-print-none\">
            <div class=\"container-fluid\">
            {% block navbarContent %}
                <a class=\"navbar-brand d-none d-sm-inline\" href=\"{{ asset(fsc.user.homepage) }}\" title=\"{{ trans('homepage') }}\">
                    <img src=\"{{ asset('Dinamic/Assets/Images/logo-white.png') }}\" width=\"30\" height=\"30\"
                         class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                    <span class=\"d-none d-xl-inline-block\">{{ fsc.empresa.nombrecorto | raw }}</span>
                </a>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"navbar-nav pt-1\">
                        {% import 'Macro/Menu.html.twig' as macros %}
                        {% for menuItem in menuManager.getMenu() %}
                            {{ macros.showMenu(menuItem) }}
                        {% endfor %}
                    </ul>
                    <ul class=\"navbar-nav flex-row ms-auto\">
                        {% block navbarMenuIcon %}
                            {% for includeView in getIncludeViews('MenuTemplate', 'MenuIconBefore') %}
                                {% include includeView['path'] %}
                            {% endfor %}
                            <li class=\"nav-item\" title=\"{{ trans('search') }}\">
                                <a class=\"nav-link{{ template == 'MegaSearch.html.twig' ? ' active' : '' }}\" href=\"MegaSearch\" id=\"menuIconSearch\">
                                    <i class=\"fa-solid fa-search\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"nav-item\" title=\"{{ trans('help') }}\">
                                <a class=\"nav-link\" id=\"menuIconHelp\" rel=\"nofollow\" target=\"_blank\"
                                   href=\"https://facturascripts.com/ayuda?controller={{ controllerName }}\">
                                    <i class=\"fa-solid fa-question-circle\" aria-hidden=\"true\"></i>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle mr-md-2\" href=\"#\" data-bs-toggle=\"dropdown\"
                                   aria-haspopup=\"true\" aria-expanded=\"false\" id=\"menuIconUser\" title=\"{{ trans('user') }}\">
                                    <i class=\"fa-solid fa-user-circle fa-fw me-1\" aria-hidden=\"true\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"user-list\">
                                    <a class=\"dropdown-item\" href=\"{{ fsc.user.url() }}\">
                                        <i class=\"fa-solid fa-user-circle fa-fw me-1\" aria-hidden=\"true\"></i> {{ fsc.user.nick }}
                                    </a>
                                    <a class=\"dropdown-item send-email\" href=\"SendMail\">
                                        <i class=\"fa-solid fa-envelope fa-fw me-1\" aria-hidden=\"true\"></i>
                                        {{ trans('send-mail') }}
                                    </a>
                                    {% for includeView in getIncludeViews('MenuTemplate', 'MenuIconUser') %}
                                        {% include includeView['path'] %}
                                    {% endfor %}
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"{{ asset('login') }}?action=logout&multireqtoken={{ formToken(false) }}\">
                                        <i class=\"fa-solid fa-door-open fa-fw me-1\" aria-hidden=\"true\"></i> {{ trans('logout') }}
                                    </a>
                                </div>
                            </li>
                            {% for includeView in getIncludeViews('MenuTemplate', 'MenuIconAfter') %}
                                {% include includeView['path'] %}
                            {% endfor %}
                        {% endblock %}
                    </ul>
                </div>
            {% endblock %}
            </div>
        </nav>
    {% endblock %}
    <div class=\"pt-3\">
        {% block messages %}
            {% include 'Macro/Toasts.html.twig' %}
            {% from 'Macro/Utils.html.twig' import message as showMessage %}
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        {{ showMessage(log, ['error', 'critical'], 'danger') }}
                        {{ showMessage(log, ['warning'], 'warning') }}
                        {{ showMessage(log, ['notice'], 'success') }}
                        {{ showMessage(log, ['info'], 'info') }}
                    </div>
                </div>
            </div>
        {% endblock %}
        {% block bodyHeaderOptions %}
        {% endblock %}
    </div>
    {% block body %}
    {% endblock %}
    {% for includeView in getIncludeViews('MenuTemplate', 'JsFooter') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% for includeView in getIncludeViews('MenuTemplate', 'BodyEnd') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% if debugBarRender %}
        {{ debugBarRender.render() | raw }}
    {% endif %}
    <br/>
    <br/>
    <br/>
    </body>
{% endblock %}
</html>
<!-- execution time: {{ executionTime() }} s -->
", "Master/MenuTemplate.html.twig", "/var/www/html/Core/View/Master/MenuTemplate.html.twig");
    }
}
