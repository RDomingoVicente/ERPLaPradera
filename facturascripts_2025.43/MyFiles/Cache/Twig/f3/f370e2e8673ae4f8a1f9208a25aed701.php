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

/* Login/Login.html.twig */
class __TwigTemplate_e7d8514eb350af57a71e4967d010c1ad extends Template
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
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Login/Login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-6\">
                <form action=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("login"), "html", null, true);
        yield "\" method=\"post\" class=\"form\">
                    ";
        // line 9
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
                    <input type=\"hidden\" name=\"action\" value=\"login\">
                    <div class=\"card mt-4\">
                        <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("login"), "html", null, true);
        yield "\">
                            ";
        // line 13
        $context["idfile"] = $this->env->getFunction('settings')->getCallable()("default", "idloginimage", 0);
        // line 14
        yield "                            ";
        yield CoreExtension::callMacro($macros["_self"], "macro_loadLogo", [($context["idfile"] ?? null)], 14, $context, $this->getSourceContext());
        yield "
                        </a>
                        <div class=\"card-body d-grid\">
                            <p class=\"card-text text-center\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("login-text"), "html", null, true);
        yield "</p>
                            <div class=\"mb-3\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">
                                            <i class=\"fa-solid fa-user fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                    <input type=\"text\" name=\"fsNick\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("user"), "html", null, true);
        yield "\" required autocomplete=\"off\"
                                           autofocus/>
                                </div>
                            </div>
                            <div class=\"mb-3 d-grid\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">
                                            <i class=\"fa-solid fa-key fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                    <input type=\"password\" name=\"fsPassword\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("password"), "html", null, true);
        yield "\" required autocomplete=\"off\"/>
                                </div>
                                <a href=\"#\" class=\"btn btn-link\" data-bs-toggle=\"modal\"
                                   data-bs-target=\"#newPasswordModal\">
                                    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("i-forgot-password"), "html", null, true);
        yield "
                                </a>
                            </div>
                            <button type=\"submit\" class=\"btn btn-lg btn-primary mb-4\">
                                <i class=\"fa-solid fa-arrow-right fa-beat me-1\"></i> ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("login"), "html", null, true);
        yield "
                            </button>
                        </div>
                        <div class=\"card-footer text-center\">
                            <p>
                                FacturaScripts es un software libre de contabilidad, facturación y CRM.
                                No dude en consultar la web oficial o las cuentas de facebook, twitter o youtube.
                            </p>
                            <a href=\"https://facturascripts.com\" rel=\"nofollow\" class=\"btn btn-secondary\">
                                <i class=\"fa-solid fa-question-circle me-1\"></i> facturascripts.com
                            </a>
                            <a href=\"https://www.facebook.com/facturascripts/\" rel=\"nofollow\" class=\"btn btn-outline-primary\"
                               title=\"facebook\"> <i class=\"fa-brands fa-facebook\"></i>
                            </a>
                            <a href=\"https://twitter.com/facturascripts\" rel=\"nofollow\" class=\"btn btn-outline-info\"
                               title=\"twitter\"> <i class=\"fa-brands fa-twitter\"></i>
                            </a>
                            <a href=\"https://www.youtube.com/channel/UCtsptMQYpW2wJZkvak6NYng\" rel=\"nofollow\"
                               class=\"btn btn-outline-danger\" title=\"youtube\"> <i class=\"fa-brands fa-youtube\"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form action=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("login"), "html", null, true);
        yield "\" method=\"post\" class=\"form\">
        ";
        // line 69
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
        <input type=\"hidden\" name=\"action\" value=\"change-password\">
        <div class=\"modal fade\" id=\"newPasswordModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fa-solid fa-user-lock me-2\"></i> ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new-password"), "html", null, true);
        yield "
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <a href=\"https://facturascripts.com/publicaciones/he-olvidado-mi-contrasena\" rel=\"nofollow\"
                           target=\"_blank\" class=\"btn w-100 btn-link mb-3\">
                            ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("need-help-password"), "html", null, true);
        yield "
                        </a>
                        <div class=\"mb-3\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                        <i class=\"fa-solid fa-user fa-fw\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"text\" name=\"fsNewUserPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("user"), "html", null, true);
        yield "\" required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                        <i class=\"fa-solid fa-key fa-fw\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new-password"), "html", null, true);
        yield "\" required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                        <i class=\"fa-solid fa-eye fa-fw\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd2\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("repeat-new-password"), "html", null, true);
        yield "\"
                                       required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("database"), "html", null, true);
        yield "
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                        <i class=\"fa-solid fa-database fa-fw\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"password\" name=\"fsDbPasswd\" class=\"form-control\"
                                       placeholder=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("db-password"), "html", null, true);
        yield "\" autocomplete=\"off\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
        yield "</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        return; yield '';
    }

    // line 133
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        yield "    ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
    <style>
        body {
            background-color: #333A40;
        }
    </style>
";
        return; yield '';
    }

    // line 142
    public function macro_loadLogo($__idfile__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "idfile" => $__idfile__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 143
            yield "    ";
            $context["url"] = "Dinamic/Assets/Images/horizontal-logo.png";
            // line 144
            yield "    ";
            if ((($context["idfile"] ?? null) > 0)) {
                // line 145
                yield "        ";
                $context["attached"] = $this->env->getFunction('attachedFile')->getCallable()(($context["idfile"] ?? null));
                // line 146
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["attached"] ?? null), "filename", [], "any", false, false, false, 146))) {
                    // line 147
                    yield "            ";
                    $context["url"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attached"] ?? null), "url", ["download-permanent"], "method", false, false, false, 147);
                    // line 148
                    yield "        ";
                }
                // line 149
                yield "    ";
            }
            // line 150
            yield "    <img class=\"card-img-top\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()(($context["url"] ?? null)), "html", null, true);
            yield "\" alt=\"FacturaScripts\"/>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Login/Login.html.twig";
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
        return array (  296 => 150,  293 => 149,  290 => 148,  287 => 147,  284 => 146,  281 => 145,  278 => 144,  275 => 143,  263 => 142,  250 => 134,  246 => 133,  234 => 125,  226 => 120,  217 => 114,  209 => 109,  197 => 100,  185 => 91,  174 => 83,  164 => 76,  154 => 69,  150 => 68,  121 => 42,  114 => 38,  107 => 34,  94 => 24,  84 => 17,  77 => 14,  75 => 13,  71 => 12,  65 => 9,  61 => 8,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Master/MicroTemplate.html.twig\" %}

{% block body %}
    {{ parent() }}
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-6\">
                <form action=\"{{ asset('login') }}\" method=\"post\" class=\"form\">
                    {{ formToken() }}
                    <input type=\"hidden\" name=\"action\" value=\"login\">
                    <div class=\"card mt-4\">
                        <a href=\"{{ asset('login') }}\">
                            {% set idfile = settings('default','idloginimage', 0) %}
                            {{ _self.loadLogo(idfile) }}
                        </a>
                        <div class=\"card-body d-grid\">
                            <p class=\"card-text text-center\">{{ trans('login-text') }}</p>
                            <div class=\"mb-3\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">
                                            <i class=\"fa-solid fa-user fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                    <input type=\"text\" name=\"fsNick\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"{{ trans('user') }}\" required autocomplete=\"off\"
                                           autofocus/>
                                </div>
                            </div>
                            <div class=\"mb-3 d-grid\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">
                                            <i class=\"fa-solid fa-key fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                    <input type=\"password\" name=\"fsPassword\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"{{ trans('password') }}\" required autocomplete=\"off\"/>
                                </div>
                                <a href=\"#\" class=\"btn btn-link\" data-bs-toggle=\"modal\"
                                   data-bs-target=\"#newPasswordModal\">
                                    {{ trans('i-forgot-password') }}
                                </a>
                            </div>
                            <button type=\"submit\" class=\"btn btn-lg btn-primary mb-4\">
                                <i class=\"fa-solid fa-arrow-right fa-beat me-1\"></i> {{ trans('login') }}
                            </button>
                        </div>
                        <div class=\"card-footer text-center\">
                            <p>
                                FacturaScripts es un software libre de contabilidad, facturación y CRM.
                                No dude en consultar la web oficial o las cuentas de facebook, twitter o youtube.
                            </p>
                            <a href=\"https://facturascripts.com\" rel=\"nofollow\" class=\"btn btn-secondary\">
                                <i class=\"fa-solid fa-question-circle me-1\"></i> facturascripts.com
                            </a>
                            <a href=\"https://www.facebook.com/facturascripts/\" rel=\"nofollow\" class=\"btn btn-outline-primary\"
                               title=\"facebook\"> <i class=\"fa-brands fa-facebook\"></i>
                            </a>
                            <a href=\"https://twitter.com/facturascripts\" rel=\"nofollow\" class=\"btn btn-outline-info\"
                               title=\"twitter\"> <i class=\"fa-brands fa-twitter\"></i>
                            </a>
                            <a href=\"https://www.youtube.com/channel/UCtsptMQYpW2wJZkvak6NYng\" rel=\"nofollow\"
                               class=\"btn btn-outline-danger\" title=\"youtube\"> <i class=\"fa-brands fa-youtube\"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form action=\"{{ asset('login') }}\" method=\"post\" class=\"form\">
        {{ formToken() }}
        <input type=\"hidden\" name=\"action\" value=\"change-password\">
        <div class=\"modal fade\" id=\"newPasswordModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fa-solid fa-user-lock me-2\"></i> {{ trans('new-password') }}
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <a href=\"https://facturascripts.com/publicaciones/he-olvidado-mi-contrasena\" rel=\"nofollow\"
                           target=\"_blank\" class=\"btn w-100 btn-link mb-3\">
                            {{ trans('need-help-password') }}
                        </a>
                        <div class=\"mb-3\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                        <i class=\"fa-solid fa-user fa-fw\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"text\" name=\"fsNewUserPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"{{ trans('user') }}\" required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                        <i class=\"fa-solid fa-key fa-fw\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"{{ trans('new-password') }}\" required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                        <i class=\"fa-solid fa-eye fa-fw\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd2\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"{{ trans('repeat-new-password') }}\"
                                       required autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            {{ trans('database') }}
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                        <i class=\"fa-solid fa-database fa-fw\" aria-hidden=\"true\"></i>
                                </span>
                                <input type=\"password\" name=\"fsDbPasswd\" class=\"form-control\"
                                       placeholder=\"{{ trans('db-password') }}\" autocomplete=\"off\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">{{ trans('save') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}

{% block css %}
    {{ parent() }}
    <style>
        body {
            background-color: #333A40;
        }
    </style>
{% endblock %}

{% macro loadLogo(idfile) %}
    {% set url = 'Dinamic/Assets/Images/horizontal-logo.png' %}
    {% if idfile > 0 %}
        {% set attached = attachedFile(idfile) %}
        {% if attached.filename is not empty %}
            {% set url = attached.url('download-permanent') %}
        {% endif %}
    {% endif %}
    <img class=\"card-img-top\" src=\"{{ asset(url) }}\" alt=\"FacturaScripts\"/>
{% endmacro loadLogo %}", "Login/Login.html.twig", "/var/www/html/Core/View/Login/Login.html.twig");
    }
}
