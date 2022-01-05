<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Profiler/toolbar.css.twig */
class __TwigTemplate_f498a0886c26efbf3f37aff9235422a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.css.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.css.twig"));

        // line 2
        $context["colors"] = ["success" => "#4F805D", "warning" => "#A46A1F", "error" => "#B0413E"];
        // line 3
        echo "
.sf-minitoolbar {
    background-color: #222;
    border-top-left-radius: 4px;
    bottom: 0;
    box-sizing: border-box;
    display: none;
    height: 36px;
    padding: 6px;
    position: fixed;
    right: 0;
    z-index: 99999;
}

.sf-minitoolbar button {
    background-color: transparent;
    padding: 0;
    border: none;
}
.sf-minitoolbar svg,
.sf-minitoolbar img {
    max-height: 24px;
    max-width: 24px;
    display: inline;
}

.sf-toolbar-clearer {
    clear: both;
    height: 36px;
}

.sf-display-none {
    display: none;
}

.sf-toolbarreset * {
    box-sizing: content-box;
    vertical-align: baseline;
    letter-spacing: normal;
    width: auto;
}

.sf-toolbarreset {
    background-color: #222;
    bottom: 0;
    box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
    color: #EEE;
    font: 11px Arial, sans-serif;
    left: 0;
    margin: 0;
    padding: 0 36px 0 0;
    position: fixed;
    right: 0;
    text-align: left;
    text-transform: none;
    z-index: 99999;
    direction: ltr;

    /* neutralize the aliasing defined by external CSS styles */
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}
.sf-toolbarreset abbr {
    border: dashed #777;
    border-width: 0 0 1px;
}
.sf-toolbarreset svg,
.sf-toolbarreset img {
    height: 20px;
    width: 20px;
    display: inline-block;
}

.sf-toolbarreset .sf-cancel-button {
    color: #444;
}

.sf-toolbarreset .hide-button {
    background: #444;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 36px;
    height: 36px;
    cursor: pointer;
    text-align: center;
    border: none;
    margin: 0;
    padding: 0;
}
.sf-toolbarreset .hide-button svg {
    max-height: 18px;
    margin-top: 1px;
}

.sf-toolbar-block {
    cursor: default;
    display: block;
    float: left;
    height: 36px;
    margin-right: 0;
    white-space: nowrap;
    max-width: 15%;
}
.sf-toolbar-block > a,
.sf-toolbar-block > a:hover {
    display: block;
    text-decoration: none;
    background-color: transparent;
    color: inherit;
}

.sf-toolbar-block span {
    display: inline-block;
}
.sf-toolbar-block .sf-toolbar-value {
    color: #F5F5F5;
    font-size: 13px;
    line-height: 36px;
    padding: 0;
}
.sf-toolbar-block .sf-toolbar-label,
.sf-toolbar-block .sf-toolbar-class-separator {
    color: #AAA;
    font-size: 12px;
}

.sf-toolbar-block .sf-toolbar-info {
    border-collapse: collapse;
    display: table;
    z-index: 100000;
}
.sf-toolbar-block hr {
    border-top: 1px solid #777;
    margin: 4px 0;
    padding-top: 4px;
}
.sf-toolbar-block .sf-toolbar-info-piece {
    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */
    border-bottom: solid transparent 3px;
    display: table-row;
}
.sf-toolbar-block .sf-toolbar-info-piece-additional,
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    display: none;
}
.sf-toolbar-block .sf-toolbar-info-group {
    margin-bottom: 4px;
    padding-bottom: 2px;
    border-bottom: 1px solid #333333;
}
.sf-toolbar-block .sf-toolbar-info-group:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 2px 5px;
    margin-bottom: 0;
}
.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {
    margin-left: 4px;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

div.sf-toolbar .sf-toolbar-block .sf-toolbar-info-piece a {
    color: #99CDD8;
    text-decoration: underline;
}
div.sf-toolbar .sf-toolbar-block a:hover {
    text-decoration: none;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    color: #AAA;
    display: table-cell;
    font-size: 11px;
    padding: 4px 8px 4px 0;
}
.sf-toolbar-block:not(.sf-toolbar-block-dump) .sf-toolbar-info-piece span {
    color: #F5F5F5;
}
.sf-toolbar-block .sf-toolbar-info-piece span {
    font-size: 12px;
}

.sf-toolbar-block .sf-toolbar-info {
    background-color: #444;
    bottom: 36px;
    color: #F5F5F5;
    display: none;
    padding: 9px 0;
    position: absolute;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #FFF;
    background-color: #666;
    padding: 3px 6px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 15px;
    min-height: 13px;
    text-align: center;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: ";
        // line 220
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 220, $this->source); })()), "success", [], "any", false, false, false, 220);
        echo ";
}
.sf-toolbar-block .sf-toolbar-status-red {
    background-color: ";
        // line 223
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 223, $this->source); })()), "error", [], "any", false, false, false, 223);
        echo ";
}
.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: ";
        // line 226
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 226, $this->source); })()), "warning", [], "any", false, false, false, 226);
        echo ";
}

.sf-toolbar-block.sf-toolbar-status-green {
    background-color: ";
        // line 230
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 230, $this->source); })()), "success", [], "any", false, false, false, 230);
        echo ";
    color: #FFF;
}
.sf-toolbar-block.sf-toolbar-status-red {
    background-color: ";
        // line 234
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 234, $this->source); })()), "error", [], "any", false, false, false, 234);
        echo ";
    color: #FFF;
}
.sf-toolbar-block.sf-toolbar-status-yellow {
    background-color: ";
        // line 238
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 238, $this->source); })()), "warning", [], "any", false, false, false, 238);
        echo ";
    color: #FFF;
}

.sf-toolbar-block-request .sf-toolbar-status {
    color: #FFF;
    display: inline-block;
    font-size: 14px;
    height: 36px;
    line-height: 36px;
    padding: 0 10px;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a {
    background-color: transparent;
    text-decoration: none;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {
    text-decoration: underline;
}
.sf-toolbar-block-request .sf-toolbar-redirection-status {
    font-weight: normal;
    padding: 2px 4px;
    line-height: 18px;
}
.sf-toolbar-block-request .sf-toolbar-info-piece span.sf-toolbar-redirection-method {
    font-size: 12px;
    height: 17px;
    line-height: 17px;
    margin-right: 5px;
}

.sf-toolbar-block-ajax .sf-toolbar-icon {
    cursor: pointer;
}

.sf-toolbar-status-green .sf-toolbar-label,
.sf-toolbar-status-yellow .sf-toolbar-label,
.sf-toolbar-status-red .sf-toolbar-label {
    color: #FFF;
}
.sf-toolbar-status-green svg path,
.sf-toolbar-status-green svg .sf-svg-path,
.sf-toolbar-status-red svg path,
.sf-toolbar-status-red svg .sf-svg-path,
.sf-toolbar-status-yellow svg path,
.sf-toolbar-status-yellow svg .sf-svg-path {
    fill: #FFF;
}
.sf-toolbar-block-config svg path,
.sf-toolbar-block-config svg .sf-svg-path {
    fill: #FFF;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
    height: 36px;
    padding: 0 7px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sf-toolbar-block-request .sf-toolbar-icon {
    padding-left: 0;
    padding-right: 0;
}

.sf-toolbar-block .sf-toolbar-icon img,
.sf-toolbar-block .sf-toolbar-icon svg {
    border-width: 0;
    position: relative;
    top: 8px;
    vertical-align: baseline;
}

.sf-toolbar-block .sf-toolbar-icon img + span,
.sf-toolbar-block .sf-toolbar-icon svg + span {
    margin-left: 4px;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {
    margin-left: 4px;
}

.sf-toolbar-block:hover,
.sf-toolbar-block.hover {
    position: relative;
}
.sf-toolbar-block:hover .sf-toolbar-icon,
.sf-toolbar-block.hover .sf-toolbar-icon {
    background-color: #444;
    position: relative;
    z-index: 10002;
}
.sf-toolbar-block-ajax.hover .sf-toolbar-info {
    z-index: 10001;
}
.sf-toolbar-block:hover .sf-toolbar-info,
.sf-toolbar-block.hover .sf-toolbar-info {
    display: block;
    padding: 10px;
    max-width: 480px;
    max-height: 480px;
    word-wrap: break-word;
    overflow: hidden;
    overflow-y: auto;
}
.sf-toolbar-info-piece b.sf-toolbar-ajax-info {
    color: #F5F5F5;
}
.sf-toolbar-ajax-requests {
    table-layout: auto;
    width: 100%;
}
.sf-toolbar-ajax-requests td {
    background-color: #444;
    border-bottom: 1px solid #777;
    color: #F5F5F5;
    font-size: 12px;
    padding: 4px;
}
.sf-toolbar-ajax-requests tr:last-child td {
    border-bottom: 0;
}
.sf-toolbar-ajax-requests th {
    background-color: #222;
    border-bottom: 0;
    color: #AAA;
    font-size: 11px;
    padding: 4px;
}
.sf-ajax-request-url {
    max-width: 250px;
    line-height: 9px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a {
    text-decoration: none;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {
    text-decoration: underline;
}
.sf-ajax-request-duration {
    text-align: right;
}
.sf-ajax-request-loading {
    animation: sf-blink .5s ease-in-out infinite;
}
@keyframes sf-blink {
    0% { background: #222; }
    50% { background: #444; }
    100% { background: #222; }
}

.sf-toolbar-block.sf-toolbar-block-dump .sf-toolbar-info {
    max-width: none;
    width: 100%;
    position: fixed;
    box-sizing: border-box;
    left: 0;
}

.sf-toolbar-block-dump pre.sf-dump {
    background-color: #222;
    border-color: #777;
    border-radius: 0;
    margin: 6px 0 12px 0;
}
.sf-toolbar-block-dump pre.sf-dump:last-child {
    margin-bottom: 0;
}
.sf-toolbar-block-dump pre.sf-dump .sf-dump-search-wrapper {
    margin-bottom: 5px;
}
.sf-toolbar-block-dump pre.sf-dump span.sf-dump-search-count {
    color: #333;
    font-size: 12px;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece {
    display: block;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {
    color: #AAA;
    margin-left: 4px;
}
.sf-toolbar-block-dump .sf-toolbar-info img {
    display: none;
}

/* Responsive Design */
.sf-toolbar-icon .sf-toolbar-label,
.sf-toolbar-icon .sf-toolbar-value {
    display: none;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {
    display: inline-block;
}

/* Legacy Design - these styles are maintained to make old panels look
   a bit better on the new toolbar */
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    color: #AAA;
    font-size: 12px;
}
.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {
    color: #FFF;
}

@media (min-width: 768px) {

    .sf-toolbar-icon .sf-toolbar-label,
    .sf-toolbar-icon .sf-toolbar-value {
        display: inline;
    }

    .sf-toolbar-block .sf-toolbar-icon img,
    .sf-toolbar-block .sf-toolbar-icon svg {
        top: 6px;
    }
    .sf-toolbar-block-time .sf-toolbar-icon svg,
    .sf-toolbar-block-memory .sf-toolbar-icon svg {
        display: none;
    }
    .sf-toolbar-block-time .sf-toolbar-icon svg + span,
    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {
        margin-left: 0;
    }

    .sf-toolbar-block .sf-toolbar-icon {
        padding: 0 10px;
    }
    .sf-toolbar-block-time .sf-toolbar-icon {
        padding-right: 5px;
    }
    .sf-toolbar-block-memory .sf-toolbar-icon {
        padding-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-icon {
        padding-left: 0;
        padding-right: 0;
    }
    .sf-toolbar-block-request .sf-toolbar-label {
        margin-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-status + svg {
        margin-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-icon svg + .sf-toolbar-label {
        margin-left: 0;
     }
    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {
        margin-right: 10px;
    }

    .sf-toolbar-block-request:hover .sf-toolbar-info {
        max-width: none;
    }

    .sf-toolbar-block .sf-toolbar-info-piece b {
        font-size: 12px;
    }
    .sf-toolbar-block .sf-toolbar-info-piece span {
        font-size: 13px;
    }

    .sf-toolbar-block-right {
        float: right;
        margin-left: 0;
        margin-right: 0;
    }
}

@media (min-width: 1024px) {
    .sf-toolbar-block .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
        display: inline;
    }

    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {
        display: none;
    }
}

/***** Error Toolbar *****/
.sf-error-toolbar .sf-toolbarreset {
    background: #222;
    color: #f5f5f5;
    font: 13px/36px Arial, sans-serif;
    height: 36px;
    padding: 0 15px;
    text-align: left;
}

.sf-error-toolbar .sf-toolbarreset svg {
    height: auto;
}

.sf-error-toolbar .sf-toolbarreset a {
    color: #99cdd8;
    margin-left: 5px;
    text-decoration: underline;
}

.sf-error-toolbar .sf-toolbarreset a:hover {
    text-decoration: none;
}

.sf-error-toolbar .sf-toolbarreset .sf-toolbar-icon {
    float: left;
    padding: 5px 0;
    margin-right: 10px;
}

.sf-full-stack {
    left: 0px;
    font-size: 12px;
}

/***** Media query print: Do not print the Toolbar. *****/
@media print {
    .sf-toolbar {
        display: none !important;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 238,  290 => 234,  283 => 230,  276 => 226,  270 => 223,  264 => 220,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# when updating any of these colors, do the same in profiler.css.twig #}
{% set colors = { 'success': '#4F805D', 'warning': '#A46A1F', 'error': '#B0413E' } %}

.sf-minitoolbar {
    background-color: #222;
    border-top-left-radius: 4px;
    bottom: 0;
    box-sizing: border-box;
    display: none;
    height: 36px;
    padding: 6px;
    position: fixed;
    right: 0;
    z-index: 99999;
}

.sf-minitoolbar button {
    background-color: transparent;
    padding: 0;
    border: none;
}
.sf-minitoolbar svg,
.sf-minitoolbar img {
    max-height: 24px;
    max-width: 24px;
    display: inline;
}

.sf-toolbar-clearer {
    clear: both;
    height: 36px;
}

.sf-display-none {
    display: none;
}

.sf-toolbarreset * {
    box-sizing: content-box;
    vertical-align: baseline;
    letter-spacing: normal;
    width: auto;
}

.sf-toolbarreset {
    background-color: #222;
    bottom: 0;
    box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
    color: #EEE;
    font: 11px Arial, sans-serif;
    left: 0;
    margin: 0;
    padding: 0 36px 0 0;
    position: fixed;
    right: 0;
    text-align: left;
    text-transform: none;
    z-index: 99999;
    direction: ltr;

    /* neutralize the aliasing defined by external CSS styles */
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}
.sf-toolbarreset abbr {
    border: dashed #777;
    border-width: 0 0 1px;
}
.sf-toolbarreset svg,
.sf-toolbarreset img {
    height: 20px;
    width: 20px;
    display: inline-block;
}

.sf-toolbarreset .sf-cancel-button {
    color: #444;
}

.sf-toolbarreset .hide-button {
    background: #444;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 36px;
    height: 36px;
    cursor: pointer;
    text-align: center;
    border: none;
    margin: 0;
    padding: 0;
}
.sf-toolbarreset .hide-button svg {
    max-height: 18px;
    margin-top: 1px;
}

.sf-toolbar-block {
    cursor: default;
    display: block;
    float: left;
    height: 36px;
    margin-right: 0;
    white-space: nowrap;
    max-width: 15%;
}
.sf-toolbar-block > a,
.sf-toolbar-block > a:hover {
    display: block;
    text-decoration: none;
    background-color: transparent;
    color: inherit;
}

.sf-toolbar-block span {
    display: inline-block;
}
.sf-toolbar-block .sf-toolbar-value {
    color: #F5F5F5;
    font-size: 13px;
    line-height: 36px;
    padding: 0;
}
.sf-toolbar-block .sf-toolbar-label,
.sf-toolbar-block .sf-toolbar-class-separator {
    color: #AAA;
    font-size: 12px;
}

.sf-toolbar-block .sf-toolbar-info {
    border-collapse: collapse;
    display: table;
    z-index: 100000;
}
.sf-toolbar-block hr {
    border-top: 1px solid #777;
    margin: 4px 0;
    padding-top: 4px;
}
.sf-toolbar-block .sf-toolbar-info-piece {
    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */
    border-bottom: solid transparent 3px;
    display: table-row;
}
.sf-toolbar-block .sf-toolbar-info-piece-additional,
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    display: none;
}
.sf-toolbar-block .sf-toolbar-info-group {
    margin-bottom: 4px;
    padding-bottom: 2px;
    border-bottom: 1px solid #333333;
}
.sf-toolbar-block .sf-toolbar-info-group:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 2px 5px;
    margin-bottom: 0;
}
.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {
    margin-left: 4px;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

div.sf-toolbar .sf-toolbar-block .sf-toolbar-info-piece a {
    color: #99CDD8;
    text-decoration: underline;
}
div.sf-toolbar .sf-toolbar-block a:hover {
    text-decoration: none;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    color: #AAA;
    display: table-cell;
    font-size: 11px;
    padding: 4px 8px 4px 0;
}
.sf-toolbar-block:not(.sf-toolbar-block-dump) .sf-toolbar-info-piece span {
    color: #F5F5F5;
}
.sf-toolbar-block .sf-toolbar-info-piece span {
    font-size: 12px;
}

.sf-toolbar-block .sf-toolbar-info {
    background-color: #444;
    bottom: 36px;
    color: #F5F5F5;
    display: none;
    padding: 9px 0;
    position: absolute;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #FFF;
    background-color: #666;
    padding: 3px 6px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 15px;
    min-height: 13px;
    text-align: center;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: {{ colors.success|raw }};
}
.sf-toolbar-block .sf-toolbar-status-red {
    background-color: {{ colors.error|raw }};
}
.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: {{ colors.warning|raw }};
}

.sf-toolbar-block.sf-toolbar-status-green {
    background-color: {{ colors.success|raw }};
    color: #FFF;
}
.sf-toolbar-block.sf-toolbar-status-red {
    background-color: {{ colors.error|raw }};
    color: #FFF;
}
.sf-toolbar-block.sf-toolbar-status-yellow {
    background-color: {{ colors.warning|raw }};
    color: #FFF;
}

.sf-toolbar-block-request .sf-toolbar-status {
    color: #FFF;
    display: inline-block;
    font-size: 14px;
    height: 36px;
    line-height: 36px;
    padding: 0 10px;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a {
    background-color: transparent;
    text-decoration: none;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {
    text-decoration: underline;
}
.sf-toolbar-block-request .sf-toolbar-redirection-status {
    font-weight: normal;
    padding: 2px 4px;
    line-height: 18px;
}
.sf-toolbar-block-request .sf-toolbar-info-piece span.sf-toolbar-redirection-method {
    font-size: 12px;
    height: 17px;
    line-height: 17px;
    margin-right: 5px;
}

.sf-toolbar-block-ajax .sf-toolbar-icon {
    cursor: pointer;
}

.sf-toolbar-status-green .sf-toolbar-label,
.sf-toolbar-status-yellow .sf-toolbar-label,
.sf-toolbar-status-red .sf-toolbar-label {
    color: #FFF;
}
.sf-toolbar-status-green svg path,
.sf-toolbar-status-green svg .sf-svg-path,
.sf-toolbar-status-red svg path,
.sf-toolbar-status-red svg .sf-svg-path,
.sf-toolbar-status-yellow svg path,
.sf-toolbar-status-yellow svg .sf-svg-path {
    fill: #FFF;
}
.sf-toolbar-block-config svg path,
.sf-toolbar-block-config svg .sf-svg-path {
    fill: #FFF;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
    height: 36px;
    padding: 0 7px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sf-toolbar-block-request .sf-toolbar-icon {
    padding-left: 0;
    padding-right: 0;
}

.sf-toolbar-block .sf-toolbar-icon img,
.sf-toolbar-block .sf-toolbar-icon svg {
    border-width: 0;
    position: relative;
    top: 8px;
    vertical-align: baseline;
}

.sf-toolbar-block .sf-toolbar-icon img + span,
.sf-toolbar-block .sf-toolbar-icon svg + span {
    margin-left: 4px;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {
    margin-left: 4px;
}

.sf-toolbar-block:hover,
.sf-toolbar-block.hover {
    position: relative;
}
.sf-toolbar-block:hover .sf-toolbar-icon,
.sf-toolbar-block.hover .sf-toolbar-icon {
    background-color: #444;
    position: relative;
    z-index: 10002;
}
.sf-toolbar-block-ajax.hover .sf-toolbar-info {
    z-index: 10001;
}
.sf-toolbar-block:hover .sf-toolbar-info,
.sf-toolbar-block.hover .sf-toolbar-info {
    display: block;
    padding: 10px;
    max-width: 480px;
    max-height: 480px;
    word-wrap: break-word;
    overflow: hidden;
    overflow-y: auto;
}
.sf-toolbar-info-piece b.sf-toolbar-ajax-info {
    color: #F5F5F5;
}
.sf-toolbar-ajax-requests {
    table-layout: auto;
    width: 100%;
}
.sf-toolbar-ajax-requests td {
    background-color: #444;
    border-bottom: 1px solid #777;
    color: #F5F5F5;
    font-size: 12px;
    padding: 4px;
}
.sf-toolbar-ajax-requests tr:last-child td {
    border-bottom: 0;
}
.sf-toolbar-ajax-requests th {
    background-color: #222;
    border-bottom: 0;
    color: #AAA;
    font-size: 11px;
    padding: 4px;
}
.sf-ajax-request-url {
    max-width: 250px;
    line-height: 9px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a {
    text-decoration: none;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {
    text-decoration: underline;
}
.sf-ajax-request-duration {
    text-align: right;
}
.sf-ajax-request-loading {
    animation: sf-blink .5s ease-in-out infinite;
}
@keyframes sf-blink {
    0% { background: #222; }
    50% { background: #444; }
    100% { background: #222; }
}

.sf-toolbar-block.sf-toolbar-block-dump .sf-toolbar-info {
    max-width: none;
    width: 100%;
    position: fixed;
    box-sizing: border-box;
    left: 0;
}

.sf-toolbar-block-dump pre.sf-dump {
    background-color: #222;
    border-color: #777;
    border-radius: 0;
    margin: 6px 0 12px 0;
}
.sf-toolbar-block-dump pre.sf-dump:last-child {
    margin-bottom: 0;
}
.sf-toolbar-block-dump pre.sf-dump .sf-dump-search-wrapper {
    margin-bottom: 5px;
}
.sf-toolbar-block-dump pre.sf-dump span.sf-dump-search-count {
    color: #333;
    font-size: 12px;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece {
    display: block;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {
    color: #AAA;
    margin-left: 4px;
}
.sf-toolbar-block-dump .sf-toolbar-info img {
    display: none;
}

/* Responsive Design */
.sf-toolbar-icon .sf-toolbar-label,
.sf-toolbar-icon .sf-toolbar-value {
    display: none;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {
    display: inline-block;
}

/* Legacy Design - these styles are maintained to make old panels look
   a bit better on the new toolbar */
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    color: #AAA;
    font-size: 12px;
}
.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {
    color: #FFF;
}

@media (min-width: 768px) {

    .sf-toolbar-icon .sf-toolbar-label,
    .sf-toolbar-icon .sf-toolbar-value {
        display: inline;
    }

    .sf-toolbar-block .sf-toolbar-icon img,
    .sf-toolbar-block .sf-toolbar-icon svg {
        top: 6px;
    }
    .sf-toolbar-block-time .sf-toolbar-icon svg,
    .sf-toolbar-block-memory .sf-toolbar-icon svg {
        display: none;
    }
    .sf-toolbar-block-time .sf-toolbar-icon svg + span,
    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {
        margin-left: 0;
    }

    .sf-toolbar-block .sf-toolbar-icon {
        padding: 0 10px;
    }
    .sf-toolbar-block-time .sf-toolbar-icon {
        padding-right: 5px;
    }
    .sf-toolbar-block-memory .sf-toolbar-icon {
        padding-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-icon {
        padding-left: 0;
        padding-right: 0;
    }
    .sf-toolbar-block-request .sf-toolbar-label {
        margin-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-status + svg {
        margin-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-icon svg + .sf-toolbar-label {
        margin-left: 0;
     }
    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {
        margin-right: 10px;
    }

    .sf-toolbar-block-request:hover .sf-toolbar-info {
        max-width: none;
    }

    .sf-toolbar-block .sf-toolbar-info-piece b {
        font-size: 12px;
    }
    .sf-toolbar-block .sf-toolbar-info-piece span {
        font-size: 13px;
    }

    .sf-toolbar-block-right {
        float: right;
        margin-left: 0;
        margin-right: 0;
    }
}

@media (min-width: 1024px) {
    .sf-toolbar-block .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
        display: inline;
    }

    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {
        display: none;
    }
}

/***** Error Toolbar *****/
.sf-error-toolbar .sf-toolbarreset {
    background: #222;
    color: #f5f5f5;
    font: 13px/36px Arial, sans-serif;
    height: 36px;
    padding: 0 15px;
    text-align: left;
}

.sf-error-toolbar .sf-toolbarreset svg {
    height: auto;
}

.sf-error-toolbar .sf-toolbarreset a {
    color: #99cdd8;
    margin-left: 5px;
    text-decoration: underline;
}

.sf-error-toolbar .sf-toolbarreset a:hover {
    text-decoration: none;
}

.sf-error-toolbar .sf-toolbarreset .sf-toolbar-icon {
    float: left;
    padding: 5px 0;
    margin-right: 10px;
}

.sf-full-stack {
    left: 0px;
    font-size: 12px;
}

/***** Media query print: Do not print the Toolbar. *****/
@media print {
    .sf-toolbar {
        display: none !important;
    }
}
", "@WebProfiler/Profiler/toolbar.css.twig", "/Users/programming/Documents/Semestre3/PHP/metropolis/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar.css.twig");
    }
}
