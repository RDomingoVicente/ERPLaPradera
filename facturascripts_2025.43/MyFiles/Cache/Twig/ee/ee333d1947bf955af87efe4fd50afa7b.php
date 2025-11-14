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

/* Macro/Toasts.html.twig */
class __TwigTemplate_05f4877d3c9437c639586744eafb60ea extends Template
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
        // line 1
        yield "<div id=\"messages-toasts\" style=\"z-index: 9999; position: fixed; bottom: 2%; left: 50%; transform: translateX(-50%);\"></div>

<script>
    function setToast(message, style = 'info', title = '', time = 10000) {
        let icon = '';
        let styleBorder = '';
        let styleHeader = '';
        let role = 'status';
        let live = 'polite';
        let delay = time > 0 ? 'data-delay=\"' + time + '\"' : 'data-autohide=\"false\"';

        switch (style) {
            case 'completed':
                styleHeader = 'bg-success text-white';
                styleBorder = 'border border-success';
                icon = '<i class=\"fa-solid fa-check-circle me-1\"></i>';
                title = title !== '' ? title : '";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("completed"), "html", null, true);
        yield "';
                break;

            case 'critical':
            case 'error':
            case 'danger':
                role = 'alert';
                live = 'assertive';
                styleHeader = 'bg-danger text-white';
                styleBorder = 'border border-danger';
                icon = '<i class=\"fa-solid fa-times-circle me-1\"></i>';
                title = title !== '' ? title : '";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("common-error"), "html", null, true);
        yield "';
                break;

            case 'info':
                styleHeader = 'bg-info text-white';
                styleBorder = 'border border-info';
                icon = '<i class=\"fa-solid fa-info-circle me-1\"></i>';
                title = title !== '' ? title : '";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("info"), "html", null, true);
        yield "';
                break;

            case 'spinner':
                styleHeader = 'text-bg-info';
                styleBorder = 'border border-info';
                icon = '<div class=\"spinner-border me-2 spinner-border-sm\" role=\"status\"></div>';
                title = title !== '' ? title : '";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("processing"), "html", null, true);
        yield "';
                break;

            case 'notice':
            case 'success':
                styleHeader = 'bg-success text-white';
                styleBorder = 'border border-success';
                icon = '<i class=\"fa-solid fa-check-circle me-1\"></i>';
                title = title !== '' ? title : '";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("success"), "html", null, true);
        yield "';
                break;

            case 'warning':
                styleHeader = 'bg-warning';
                styleBorder = 'border border-warning';
                icon = '<i class=\"fa-solid fa-exclamation-circle me-1\"></i>';
                title = title !== '' ? title : '";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("warning"), "html", null, true);
        yield "';
                break;
        }

        if (message === '') {
            styleHeader += ' border-bottom-0';
        }

        let html = '<div class=\"toast toast-' + style + ' ' + styleBorder + '\" style=\"margin: 15px auto 0 auto;\" role=\"' + role + '\" aria-live=\"' + live + '\" aria-atomic=\"true\" ' + delay + '>'
            + '<div class=\"toast-header ' + styleHeader + '\">'
            + '<strong class=\"me-auto\">' + icon + title + '</strong>'
            + '<button type=\"button\" class=\"ms-4 btn btn-close ' + styleHeader + '\" data-bs-dismiss=\"toast\" aria-label=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
        yield "\">'
            + ''
            + '</button>'
            + '</div>';

            if (message !== '') {
                html += '<div class=\"toast-body\">' + message + '</div>';
            }

            html += '</div>';

        // eliminamos los toast con la clase hide
        \$('#messages-toasts .toast.hide').remove();

        // agregamos el toast al div
        \$('#messages-toasts').append(html);

        // mostramos los toast
        \$('#messages-toasts .toast').toast('show');
    }
</script>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Macro/Toasts.html.twig";
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
        return array (  125 => 68,  111 => 57,  101 => 50,  90 => 42,  80 => 35,  70 => 28,  56 => 17,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"messages-toasts\" style=\"z-index: 9999; position: fixed; bottom: 2%; left: 50%; transform: translateX(-50%);\"></div>

<script>
    function setToast(message, style = 'info', title = '', time = 10000) {
        let icon = '';
        let styleBorder = '';
        let styleHeader = '';
        let role = 'status';
        let live = 'polite';
        let delay = time > 0 ? 'data-delay=\"' + time + '\"' : 'data-autohide=\"false\"';

        switch (style) {
            case 'completed':
                styleHeader = 'bg-success text-white';
                styleBorder = 'border border-success';
                icon = '<i class=\"fa-solid fa-check-circle me-1\"></i>';
                title = title !== '' ? title : '{{ trans('completed') }}';
                break;

            case 'critical':
            case 'error':
            case 'danger':
                role = 'alert';
                live = 'assertive';
                styleHeader = 'bg-danger text-white';
                styleBorder = 'border border-danger';
                icon = '<i class=\"fa-solid fa-times-circle me-1\"></i>';
                title = title !== '' ? title : '{{ trans('common-error') }}';
                break;

            case 'info':
                styleHeader = 'bg-info text-white';
                styleBorder = 'border border-info';
                icon = '<i class=\"fa-solid fa-info-circle me-1\"></i>';
                title = title !== '' ? title : '{{ trans('info') }}';
                break;

            case 'spinner':
                styleHeader = 'text-bg-info';
                styleBorder = 'border border-info';
                icon = '<div class=\"spinner-border me-2 spinner-border-sm\" role=\"status\"></div>';
                title = title !== '' ? title : '{{ trans('processing') }}';
                break;

            case 'notice':
            case 'success':
                styleHeader = 'bg-success text-white';
                styleBorder = 'border border-success';
                icon = '<i class=\"fa-solid fa-check-circle me-1\"></i>';
                title = title !== '' ? title : '{{ trans('success') }}';
                break;

            case 'warning':
                styleHeader = 'bg-warning';
                styleBorder = 'border border-warning';
                icon = '<i class=\"fa-solid fa-exclamation-circle me-1\"></i>';
                title = title !== '' ? title : '{{ trans('warning') }}';
                break;
        }

        if (message === '') {
            styleHeader += ' border-bottom-0';
        }

        let html = '<div class=\"toast toast-' + style + ' ' + styleBorder + '\" style=\"margin: 15px auto 0 auto;\" role=\"' + role + '\" aria-live=\"' + live + '\" aria-atomic=\"true\" ' + delay + '>'
            + '<div class=\"toast-header ' + styleHeader + '\">'
            + '<strong class=\"me-auto\">' + icon + title + '</strong>'
            + '<button type=\"button\" class=\"ms-4 btn btn-close ' + styleHeader + '\" data-bs-dismiss=\"toast\" aria-label=\"{{ trans('close') }}\">'
            + ''
            + '</button>'
            + '</div>';

            if (message !== '') {
                html += '<div class=\"toast-body\">' + message + '</div>';
            }

            html += '</div>';

        // eliminamos los toast con la clase hide
        \$('#messages-toasts .toast.hide').remove();

        // agregamos el toast al div
        \$('#messages-toasts').append(html);

        // mostramos los toast
        \$('#messages-toasts .toast').toast('show');
    }
</script>", "Macro/Toasts.html.twig", "/var/www/html/Core/View/Macro/Toasts.html.twig");
    }
}
