<?php

/* NelmioApiDocBundle::method.html.twig */
class __TwigTemplate_ab46821832c1c36d3731ad0e1d0161da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "method")), "html", null, true);
        echo " operation\">
    <div class=\"heading toggler";
        // line 2
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "deprecated")) {
            echo " deprecated";
        }
        echo "\">
    <h3>
        <span class=\"http_method\">
            <a>";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "method")), "html", null, true);
        echo "</a>
        </span>

        ";
        // line 8
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "deprecated")) {
            // line 9
            echo "        <span class=\"deprecated\">
            <a>DEPRECATED</a>
        </span>
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "https")) {
            // line 15
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nelmioapidoc/image/lock.png"), "html", null, true);
            echo "\" class=\"icon\" alt=\"HTTPS\" />
        ";
        }
        // line 17
        echo "        ";
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "authentication")) {
            // line 18
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nelmioapidoc/image/keys.png"), "html", null, true);
            echo "\" class=\"icon\" alt=\"Needs authentication\" />
        ";
        }
        // line 20
        echo "
        <span class=\"path\">
            ";
        // line 22
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "host", array(), "any", true, true)) {
            // line 23
            echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "https")) ? ("https://") : ("http://"));
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "host"), "html", null, true);
        }
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "uri"), "html", null, true);
        echo "
        </span>
    </h3>
    <ul class=\"options\">
        ";
        // line 30
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "description", array(), "any", true, true)) {
            // line 31
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "description"), "html", null, true);
            echo "</li>
        ";
        }
        // line 33
        echo "    </ul>
    </div>

    <div class=\"content\" style=\"display: ";
        // line 36
        if ((array_key_exists("displayContent", $context) && ((isset($context["displayContent"]) ? $context["displayContent"] : $this->getContext($context, "displayContent")) == true))) {
            echo "display";
        } else {
            echo "none";
        }
        echo ";\">
        <ul class=\"tabs\">
            <li class=\"selected\" data-pane=\"content\">Documentation</li>
            ";
        // line 39
        if ((isset($context["enableSandbox"]) ? $context["enableSandbox"] : $this->getContext($context, "enableSandbox"))) {
            // line 40
            echo "                <li data-pane=\"sandbox\">Sandbox</li>
            ";
        }
        // line 42
        echo "        </ul>

        <div class=\"panes\">
            <div class=\"pane content selected\">
            ";
        // line 46
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "documentation", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "documentation"))))) {
            // line 47
            echo "                <h4>Documentation</h4>
                <div>";
            // line 48
            echo $this->env->getExtension('nelmio_api_doc')->markdown($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "documentation"));
            echo "</div>
            ";
        }
        // line 50
        echo "
            ";
        // line 51
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "requirements", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "requirements"))))) {
            // line 52
            echo "                <h4>Requirements</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Requirement</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "requirements"));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 64
                echo "                            <tr>
                                <td>";
                // line 65
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "</td>
                                <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "requirement"), "html", null, true);
                echo "</td>
                                <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "dataType"), "html", null, true);
                echo "</td>
                                <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "description"), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 71
            echo "                    </tbody>
                </table>
            ";
        }
        // line 74
        echo "
            ";
        // line 75
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "filters", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "filters"))))) {
            // line 76
            echo "                <h4>Filters</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Information</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "filters"));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 86
                echo "                        <tr>
                            <td>";
                // line 87
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "</td>
                            <td>
                                <table>
                                ";
                // line 90
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 91
                    echo "                                    <tr>
                                        <td>";
                    // line 92
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 93
                    echo twig_escape_filter($this->env, trim(strtr(twig_jsonencode_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array("\\\\" => "\\")), "\""), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 96
                echo "                                </table>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 100
            echo "                    </tbody>
                </table>
            ";
        }
        // line 103
        echo "
            ";
        // line 104
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parameters", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "parameters"))))) {
            // line 105
            echo "                <h4>Parameters</h4>
                <table class='fullwidth'>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Required?</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 116
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "parameters"));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 117
                echo "                            ";
                if ((!$this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "readonly"))) {
                    // line 118
                    echo "                                <tr>
                                    <td>";
                    // line 119
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 120
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "dataType"), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 121
                    echo (($this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "required")) ? ("true") : ("false"));
                    echo "</td>
                                    <td>";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "description"), "html", null, true);
                    echo "</td>
                                </tr>
                            ";
                }
                // line 125
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 126
            echo "                    </tbody>
                </table>
            ";
        }
        // line 129
        echo "
            ";
        // line 130
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "response", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "response"))))) {
            // line 131
            echo "                <h4>Return</h4>
                <table class='fullwidth'>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 141
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "response"));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 142
                echo "                            <tr>
                                <td>";
                // line 143
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "</td>
                                <td>";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "dataType"), "html", null, true);
                echo "</td>
                                <td>";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "description"), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 148
            echo "                    </tbody>
                </table>
            ";
        }
        // line 151
        echo "
            ";
        // line 152
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "statusCodes", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "statusCodes"))))) {
            // line 153
            echo "                <h4>Status Codes</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Status Code</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 162
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "statusCodes"));
            foreach ($context['_seq'] as $context["status_code"] => $context["descriptions"]) {
                // line 163
                echo "                        <tr>
                            <td><a href=\"http://en.wikipedia.org/wiki/HTTP_";
                // line 164
                echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
                echo "<a/></td>
                            <td>
                                <ul>
                                    ";
                // line 167
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["descriptions"]) ? $context["descriptions"] : $this->getContext($context, "descriptions")));
                foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
                    // line 168
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 170
                echo "                                </ul>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status_code'], $context['descriptions'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 174
            echo "                    </tbody>
                </table>
            ";
        }
        // line 177
        echo "
            ";
        // line 178
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "cache", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "cache"))))) {
            // line 179
            echo "                <h4>Cache</h4>
                <div>";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "cache"), "html", null, true);
            echo "s</div>
            ";
        }
        // line 182
        echo "
            </div>

            ";
        // line 185
        if ((isset($context["enableSandbox"]) ? $context["enableSandbox"] : $this->getContext($context, "enableSandbox"))) {
            // line 186
            echo "                <div class=\"pane sandbox\">
                    <form method=\"";
            // line 187
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "method")), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "uri"), "html", null, true);
            echo "\">
                        <fieldset class=\"parameters\">
                            <legend>Input</legend>
                            ";
            // line 190
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "requirements", array(), "any", true, true)) {
                // line 191
                echo "                                <h4>Requirements</h4>
                                ";
                // line 192
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "requirements"));
                foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                    // line 193
                    echo "                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"";
                    // line 194
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                    echo "\" placeholder=\"Key\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" placeholder=\"";
                    // line 196
                    if ($this->getAttribute((isset($context["infos"]) ? $context["infos"] : null), "description", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "description"), "html", null, true);
                    } else {
                        echo "Value";
                    }
                    echo "\" /> <span class=\"remove\">-</span>
                                    </p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 199
                echo "                            ";
            }
            // line 200
            echo "                            ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "filters", array(), "any", true, true)) {
                // line 201
                echo "                                <h4>Filters</h4>
                                ";
                // line 202
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "filters"));
                foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                    // line 203
                    echo "                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"";
                    // line 204
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                    echo "\" placeholder=\"Key\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" placeholder=\"";
                    // line 206
                    if ($this->getAttribute((isset($context["infos"]) ? $context["infos"] : null), "description", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "description"), "html", null, true);
                    } else {
                        echo "Value";
                    }
                    echo "\" /> <span class=\"remove\">-</span>
                                    </p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 209
                echo "                            ";
            }
            // line 210
            echo "                            ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parameters", array(), "any", true, true)) {
                // line 211
                echo "                                <h4>Parameters</h4>
                                ";
                // line 212
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "parameters"));
                foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                    // line 213
                    echo "                                ";
                    if ((!$this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "readonly"))) {
                        // line 214
                        echo "                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"";
                        // line 215
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                        echo "\" placeholder=\"Key\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" placeholder=\"";
                        // line 217
                        if ($this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "dataType")) {
                            echo "[";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "dataType"), "html", null, true);
                            echo "] ";
                        }
                        if ($this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "description")) {
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "description"), "html", null, true);
                        } else {
                            echo "Value";
                        }
                        echo "\" /> <span class=\"remove\">-</span>
                                    </p>
                                ";
                    }
                    // line 220
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 221
                echo "                                <button class=\"add\">New parameter</button>
                            ";
            }
            // line 223
            echo "
                        </fieldset>

                        <fieldset class=\"headers\">
                            <legend>Headers</legend>

                            ";
            // line 229
            if ((isset($context["acceptType"]) ? $context["acceptType"] : $this->getContext($context, "acceptType"))) {
                // line 230
                echo "                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key\" value=\"Accept\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" value=\"";
                // line 233
                echo twig_escape_filter($this->env, (isset($context["acceptType"]) ? $context["acceptType"] : $this->getContext($context, "acceptType")), "html", null, true);
                echo "\" /> <span class=\"remove\">-</span>
                                </p>
                            ";
            }
            // line 236
            echo "
                            <p class=\"tuple\">
                                <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                                <span>=</span>
                                <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                            </p>

                            <button class=\"add\">New header</button>
                        </fieldset>

                        <fieldset class=\"request-content\">
                            <legend>Content</legend>

                            <textarea class=\"content\" placeholder=\"Content set here will override the parameters that do not match the url\"></textarea>

                            <p class=\"tuple\">
                                <input type=\"text\" class=\"key content-type\" value=\"Content-Type\" disabled=\"disabled\" />
                                <span>=</span>
                                <input type=\"text\" class=\"value\" placeholder=\"Value\" />
                                <button class=\"set-content-type\">Set header</button> <small>Replaces header if set</small>
                            </p>
                        </fieldset>

                        <div class=\"buttons\">
                            <input type=\"submit\" value=\"Try!\" />
                        </div>
                    </form>

                    <script type=\"text/x-tmpl\" class=\"tuple_template\">
                    <p class=\"tuple\">
                        <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                        <span>=</span>
                        <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                    </p>
                    </script>

                    <div class=\"result\">
                        <h4>Request URL</h4>
                        <pre class=\"url\"></pre>

                        <h4>Response Headers&nbsp;<small>[<a href=\"\" class=\"to-expand\">Expand</a>]</small></h4>
                        <pre class=\"headers to-expand\"></pre>

                        <h4>Response Body&nbsp;<small>[<a href=\"\" class=\"to-raw\">Raw</a>]</small></h4>
                        <pre class=\"response prettyprint\"></pre>
                    </div>
                </div>
            ";
        }
        // line 284
        echo "        </div>
    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::method.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 284,  569 => 236,  563 => 233,  558 => 230,  556 => 229,  548 => 223,  544 => 221,  538 => 220,  523 => 217,  518 => 215,  515 => 214,  512 => 213,  508 => 212,  505 => 211,  502 => 210,  499 => 209,  486 => 206,  481 => 204,  478 => 203,  474 => 202,  471 => 201,  468 => 200,  465 => 199,  452 => 196,  447 => 194,  444 => 193,  440 => 192,  437 => 191,  435 => 190,  427 => 187,  424 => 186,  417 => 182,  412 => 180,  409 => 179,  407 => 178,  404 => 177,  399 => 174,  381 => 168,  377 => 167,  369 => 164,  366 => 163,  362 => 162,  351 => 153,  349 => 152,  346 => 151,  341 => 148,  332 => 145,  328 => 144,  324 => 143,  321 => 142,  317 => 141,  305 => 131,  303 => 130,  300 => 129,  295 => 126,  289 => 125,  283 => 122,  279 => 121,  275 => 120,  271 => 119,  268 => 118,  265 => 117,  261 => 116,  248 => 105,  243 => 103,  238 => 100,  229 => 96,  220 => 93,  216 => 92,  213 => 91,  200 => 86,  185 => 76,  180 => 74,  175 => 71,  134 => 52,  129 => 50,  113 => 42,  107 => 39,  77 => 26,  70 => 22,  432 => 39,  425 => 330,  422 => 185,  418 => 327,  401 => 313,  396 => 312,  390 => 170,  388 => 309,  288 => 211,  282 => 209,  276 => 207,  274 => 206,  222 => 157,  114 => 51,  102 => 43,  97 => 36,  76 => 30,  58 => 22,  20 => 1,  71 => 27,  110 => 45,  90 => 48,  84 => 30,  67 => 34,  38 => 8,  23 => 1,  132 => 51,  124 => 48,  119 => 46,  81 => 30,  65 => 25,  63 => 24,  94 => 22,  89 => 31,  85 => 19,  75 => 29,  68 => 14,  56 => 9,  196 => 85,  183 => 75,  171 => 73,  166 => 68,  163 => 70,  158 => 66,  156 => 66,  151 => 64,  142 => 59,  138 => 57,  136 => 50,  121 => 47,  117 => 44,  105 => 6,  91 => 37,  62 => 17,  49 => 14,  26 => 3,  28 => 3,  24 => 2,  87 => 20,  31 => 4,  25 => 3,  21 => 2,  19 => 1,  93 => 32,  88 => 36,  78 => 40,  46 => 13,  44 => 10,  27 => 3,  79 => 31,  72 => 23,  69 => 27,  47 => 17,  40 => 9,  37 => 8,  22 => 2,  246 => 104,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 48,  111 => 38,  108 => 37,  101 => 24,  98 => 33,  96 => 31,  83 => 33,  74 => 24,  66 => 20,  55 => 13,  52 => 13,  50 => 13,  43 => 6,  41 => 7,  35 => 7,  32 => 5,  29 => 3,  209 => 90,  203 => 87,  199 => 76,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 67,  154 => 65,  149 => 51,  147 => 63,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 50,  109 => 40,  106 => 36,  103 => 36,  99 => 5,  95 => 39,  92 => 33,  86 => 31,  82 => 22,  80 => 19,  73 => 37,  64 => 12,  60 => 18,  57 => 17,  54 => 21,  51 => 15,  48 => 9,  45 => 9,  42 => 9,  39 => 9,  36 => 7,  33 => 9,  30 => 3,);
    }
}
