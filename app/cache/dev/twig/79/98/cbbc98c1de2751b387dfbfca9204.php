<?php

/* NelmioApiDocBundle::layout.html.twig */
class __TwigTemplate_7998cbbc98c1de2751b387dfbfca9204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
    <head>
        <meta charset=\"utf-8\" />
        <!-- Always force latest IE rendering engine (even in intranet) and Chrome Frame -->
        <meta content=\"IE=edge,chrome=1\" http-equiv=\"X-UA-Compatible\" />
        <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["apiName"]) ? $context["apiName"] : $this->getContext($context, "apiName")), "html", null, true);
        echo "</title>
        <style type=\"text/css\">
            ";
        // line 9
        echo (isset($context["css"]) ? $context["css"] : $this->getContext($context, "css"));
        echo "
        </style>
        <script type=\"text/javascript\">
            ";
        // line 12
        echo (isset($context["js"]) ? $context["js"] : $this->getContext($context, "js"));
        echo "
        </script>
    </head>
    <body>
        <div id=\"header\">
            <a href=\"\"><h1>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["apiName"]) ? $context["apiName"] : $this->getContext($context, "apiName")), "html", null, true);
        echo "</h1></a>
            <div id=\"sandbox_configuration\">
                request format:
                <select id=\"request_format\">
                    <option value=\"json\"";
        // line 21
        echo ((((isset($context["defaultRequestFormat"]) ? $context["defaultRequestFormat"] : $this->getContext($context, "defaultRequestFormat")) == "json")) ? (" selected") : (""));
        echo ">JSON</option>
                    <option value=\"xml\"";
        // line 22
        echo ((((isset($context["defaultRequestFormat"]) ? $context["defaultRequestFormat"] : $this->getContext($context, "defaultRequestFormat")) == "xml")) ? (" selected") : (""));
        echo ">XML</option>
                </select>
                ";
        // line 24
        if (((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")) && twig_in_filter($this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery"), array(0 => "query", 1 => "http_basic")))) {
            // line 25
            echo "                    api key: <input type=\"text\" id=\"api_key\" value=\"\"/>
                ";
        }
        // line 27
        echo "                ";
        if (((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")) && twig_in_filter($this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery"), array(0 => "http_basic")))) {
            // line 28
            echo "                    api pass: <input type=\"text\" id=\"api_pass\" value=\"\"/>
                ";
        }
        // line 30
        echo "                ";
        if (((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")) && $this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "custom_endpoint"))) {
            // line 31
            echo "                    api endpoint: <input type=\"text\" id=\"api_endpoint\" value=\"\"/>
                ";
        }
        // line 33
        echo "            </div>
            <br style=\"clear: both;\" />
        </div>
        ";
        // line 36
        $template = $this->env->resolveTemplate((isset($context["motdTemplate"]) ? $context["motdTemplate"] : $this->getContext($context, "motdTemplate")));
        $template->display($context);
        // line 37
        echo "        <div class=\"container\" id=\"resources_container\">
            <ul id=\"resources\">
                ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "            </ul>
        </div>
        <p id=\"colophon\">
            Documentation auto-generated on ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "
        </p>
        <script type=\"text/javascript\">
            \$('.toggler').click(function() {
                \$(this).next().slideToggle('slow');
            });

            ";
        // line 50
        if ((isset($context["enableSandbox"]) ? $context["enableSandbox"] : $this->getContext($context, "enableSandbox"))) {
            // line 51
            echo "                var toggleButtonText = function (\$btn) {
                    if (\$btn.text() === 'Default') {
                        \$btn.text('Raw');
                    } else {
                        \$btn.text('Default');
                    }
                };

                var renderRawBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-raw');

                    \$container.addClass('prettyprinted');
                    \$container.html(\$('<div/>').text(rawData).html());

                    \$btn.removeClass('to-raw');
                    \$btn.addClass('to-prettify');

                    toggleButtonText(\$btn);
                };

                var renderPrettifiedBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-prettify');

                    \$container.removeClass('prettyprinted');
                    \$container.html(prettifyResponse(rawData));
                    prettyPrint && prettyPrint();

                    \$btn.removeClass('to-prettify');
                    \$btn.addClass('to-raw');

                    toggleButtonText(\$btn);
                };

                \$('.tabs li').click(function() {
                    var contentGroup = \$(this).parents('.content');

                    \$('.pane.selected', contentGroup).removeClass('selected');
                    \$('.pane.' + \$(this).data('pane'), contentGroup).addClass('selected');

                    \$('li', \$(this).parent()).removeClass('selected');
                    \$(this).addClass('selected');
                });

                var prettifyResponse = function(text) {
                    try {
                        var data = typeof text === 'string' ? JSON.parse(text) : text;
                        text = JSON.stringify(data, undefined, '  ');
                    } catch (err) {
                    }

                    // HTML encode the result
                    return \$('<div>').text(text).html();
                };

                var displayFinalUrl = function(xhr, method, url, container) {
                    container.html(method + ' ' + url);
                };

                var displayResponseData = function(xhr, container) {
                    var data = xhr.responseText;

                    container.data('raw-response', data);

                    renderPrettifiedBody(container);

                    container.parents('.pane').find('.to-prettify').text('Raw');
                    container.parents('.pane').find('.to-raw').text('Raw');
                };

                var displayResponseHeaders = function(xhr, container) {
                    var text = xhr.status + ' ' + xhr.statusText + \"\\n\\n\";
                    text += xhr.getAllResponseHeaders();

                    container.text(text);
                };

                var displayResponse = function(xhr, method, url, result_container) {
                    displayFinalUrl(xhr, method, url, \$('.url', result_container));
                    displayResponseData(xhr, \$('.response', result_container));
                    displayResponseHeaders(xhr, \$('.headers', result_container));

                    result_container.show();
                };

                \$('.pane.sandbox form').submit(function() {
                    var url = \$(this).attr('action'),
                        method = \$(this).attr('method'),
                        self = this,
                        params = {},
                        headers = {},
                        content = \$(this).find('textarea.content').val(),
                        result_container = \$('.result', \$(this).parent());

                    if (method === 'ANY') {
                        method = 'POST';
                    } else if (method.indexOf('|') !== -1) {
                        method = method.split('|').sort().pop();
                    }

                    var requestFormat = \$('#request_format').val();
                    var requestFormatMethod = '";
            // line 157
            echo twig_escape_filter($this->env, (isset($context["requestFormatMethod"]) ? $context["requestFormatMethod"] : $this->getContext($context, "requestFormatMethod")), "html", null, true);
            echo "';
                    if (requestFormatMethod == 'format_param') {
                        params['_format'] = requestFormat;
                    } else if (requestFormatMethod == 'accept_header') {
                        headers['Accept'] = 'application/' + requestFormat;
                    }

                    // retrieve all the parameters to send
                    \$('.parameters .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            params[key] = value;
                        }
                    });

                    // retrieve the additional headers to send
                    \$('.headers .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            headers[key] = value;
                        }
                    });

                    // fix parameters in URL
                    for (var key in \$.extend({}, params)) {
                        if (url.indexOf('{' + key + '}') !== -1) {
                            url = url.replace('{' + key + '}', params[key]);
                            delete params[key];
                        }
                    };

                    // disable all the fiels and buttons
                    \$('input, button', \$(this)).attr('disabled', 'disabled');

                    // append the query authentication
                    if (authentication_delivery == 'query') {
                        url += url.indexOf('?') > 0 ? '&' : '?';
                        url += api_key_parameter + '=' + \$('#api_key').val();
                    }

                    // prepare the api enpoint
                    ";
            // line 206
            if (((((isset($context["endpoint"]) ? $context["endpoint"] : $this->getContext($context, "endpoint")) == "") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", true, true)) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host"))) {
                // line 207
                echo "var endpoint = '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getBaseUrl", array(), "method"), "html", null, true);
                echo "';
                    ";
            } else {
                // line 209
                echo "var endpoint = '";
                echo twig_escape_filter($this->env, (isset($context["endpoint"]) ? $context["endpoint"] : $this->getContext($context, "endpoint")), "html", null, true);
                echo "';
                    ";
            }
            // line 211
            echo "if (\$('#api_endpoint') && \$('#api_endpoint').val() != null) {
                        endpoint = \$('#api_endpoint').val();
                    }

                    // and trigger the API call
                    \$.ajax({
                        url: endpoint + url,
                        type: method,
                        data: content.length ? content : params,
                        headers: headers,
                        crossDomain: true,
                        beforeSend: function (xhr) { 
                            if (authentication_delivery == 'http_basic') {
                                xhr.setRequestHeader('Authorization', 'Basic ' + btoa(\$('#api_key').val() + ':' + \$('#api_pass').val())); 
                            }
                        },
                        complete: function(xhr) {
                            displayResponse(xhr, method, url, result_container);

                            // and enable them back
                            \$('input:not(.content-type), button', \$(self)).removeAttr('disabled');
                        }
                    });

                    return false;
                });

                \$('.pane.sandbox').delegate('.to-raw', 'click', function(e) {
                    renderRawBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$('.pane.sandbox').delegate('.to-prettify', 'click', function(e) {
                    renderPrettifiedBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$('.pane.sandbox').delegate('.to-expand, .to-shrink', 'click', function(e) {
                    var \$headers = \$(this).parents('.result').find('.headers');
                    var \$label = \$(this).parents('.result').find('a.to-expand');

                    if (\$headers.hasClass('to-expand')) {
                        \$headers.removeClass('to-expand');
                        \$headers.addClass('to-shrink');
                        \$label.text('Shrink');
                    } else {
                        \$headers.removeClass('to-shrink');
                        \$headers.addClass('to-expand');
                        \$label.text('Expand');
                    }

                    e.preventDefault();
                });

                \$('.pane.sandbox').on('click', '.add', function() {
                    var html = \$(this).parents('.pane').find('.tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$('.pane.sandbox').on('click', '.remove', function() {
                    \$(this).parent().remove();
                });

                \$('.pane.sandbox').on('click', '.set-content-type', function(e) {
                    var html;
                    var \$element;
                    var \$headers = \$(this).parents('form').find('.headers');
                    var content_type = \$(this).prev('input.value').val();

                    e.preventDefault();

                    if (content_type.length === 0) {
                        return;
                    }

                    \$headers.find('input.key').each(function() {
                        if (\$.trim(\$(this).val().toLowerCase()) === 'content-type') {
                            \$element = \$(this).parents('p');
                            return false;
                        }
                    });

                    if (typeof \$element === 'undefined') {
                        html = \$(this).parents('.pane').find('.tuple_template').html();

                        \$element = \$headers.find('legend').after(html).next('p');
                    }

                    \$element.find('input.key').val('Content-Type');
                    \$element.find('input.value').val(content_type);

                });

                ";
            // line 309
            if (((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")) && ($this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery") == "http_basic"))) {
                // line 310
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery"), "html", null, true);
                echo "';
                ";
            } elseif (((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")) && ($this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery") == "query"))) {
                // line 312
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "delivery"), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 313
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["authentication"]) ? $context["authentication"] : $this->getContext($context, "authentication")), "name"), "html", null, true);
                echo "';
                var search = window.location.search;
                var api_key_start = search.indexOf(api_key_parameter) + api_key_parameter.length + 1;
                
                if (api_key_start > 0 ) {
                    var api_key_end = search.indexOf('&', api_key_start);

                    var api_key = -1 == api_key_end
                        ? search.substr(api_key_start)
                        : search.substring(api_key_start, api_key_end);

                    \$('#api_key').val(api_key);
                }
                ";
            } else {
                // line 327
                echo "                var authentication_delivery = false;
                ";
            }
            // line 329
            echo "            ";
        }
        // line 330
        echo "        </script>
    </body>
</html>
";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 39,  425 => 330,  422 => 329,  418 => 327,  401 => 313,  396 => 312,  390 => 310,  388 => 309,  288 => 211,  282 => 209,  276 => 207,  274 => 206,  222 => 157,  114 => 51,  102 => 43,  97 => 40,  76 => 30,  58 => 22,  20 => 1,  71 => 27,  110 => 45,  90 => 48,  84 => 45,  67 => 34,  38 => 8,  23 => 1,  132 => 48,  124 => 46,  119 => 45,  81 => 30,  65 => 25,  63 => 24,  94 => 22,  89 => 31,  85 => 19,  75 => 29,  68 => 14,  56 => 9,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 50,  121 => 46,  117 => 44,  105 => 6,  91 => 37,  62 => 17,  49 => 19,  26 => 3,  28 => 7,  24 => 3,  87 => 20,  31 => 4,  25 => 3,  21 => 2,  19 => 1,  93 => 32,  88 => 36,  78 => 40,  46 => 11,  44 => 10,  27 => 3,  79 => 31,  72 => 28,  69 => 27,  47 => 17,  40 => 8,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 48,  111 => 38,  108 => 37,  101 => 24,  98 => 33,  96 => 31,  83 => 33,  74 => 14,  66 => 24,  55 => 13,  52 => 13,  50 => 13,  43 => 6,  41 => 7,  35 => 7,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 50,  109 => 34,  106 => 36,  103 => 36,  99 => 5,  95 => 39,  92 => 49,  86 => 46,  82 => 22,  80 => 19,  73 => 37,  64 => 12,  60 => 6,  57 => 15,  54 => 21,  51 => 9,  48 => 9,  45 => 9,  42 => 9,  39 => 12,  36 => 7,  33 => 9,  30 => 3,);
    }
}
