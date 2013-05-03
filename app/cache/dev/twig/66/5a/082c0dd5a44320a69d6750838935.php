<?php

/* PropelBundle:Collector:propel.html.twig */
class __TwigTemplate_665a082c0dd5a44320a69d6750838935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <img alt=\"Propel\" src=\"data:image/png;base64,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\" />
        <span class=\"sf-toolbar-status\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount"), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 16
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time") * 1000)), "html", null, true);
        echo " ms</span>
        </div>
";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        // line 24
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/propel/images/profiler/propel.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
        <strong>Propel</strong>
        <span class=\"count\">
            <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount"), "html", null, true);
        echo "</span>
            <span>";
        // line 29
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time") * 1000)), "html", null, true);
        echo " ms</span>
        </span>
    </span>
";
    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        // line 36
        echo "    <style type=\"text/css\">
    .SQLKeyword {
        color: blue;
        white-space: nowrap;
    }
    .SQLName {
        color: #464646;
        white-space: nowrap;
    }
    .SQLInfo, .SQLComment {
        color: gray;
        display: block;
        font-size: 0.9em;
        margin: 3px 0;
    }

    .SQLExplain {
       margin: 5px;
    }

    .SQLExplain .error {
        background-color: #F2DEDE;
        border-color: #EED3D7;
        color: #B94A48;
        padding: 8px 35px 8px 14px;
        font-weight: bold;
    }

    #content .SQLExplain h2 {
        font-size: 17px;
        margin-bottom: 0;
    }
    </style>

    <h2>Queries</h2>
    <table summary=\"Show logged queries\">
        <thead>
            <tr>
                <th>SQL queries</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 78
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount"))) {
            // line 79
            echo "            <tr><td>No queries.</td></tr>
        ";
        } else {
            // line 81
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries"));
            foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                // line 82
                echo "            <tr>
                <td>
                    <a name=\"propel-query-";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" ></a>
                    <code>";
                // line 85
                echo $this->env->getExtension('propel_syntax_extension')->formatSQL($this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "sql"));
                echo "</code>
                    ";
                // line 86
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "has", array(0 => "query"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "query"), "method") == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))))) {
                    // line 87
                    echo "                        <div class=\"SQLExplain\">
                        ";
                    // line 88
                    echo $this->env->getExtension('actions')->renderUri("PropelBundle:Panel:explain", array());
                    // line 94
                    echo "                        </div>
                    ";
                }
                // line 96
                echo "                    <div class=\"SQLInfo\">
                        Time: ";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "time"), "html", null, true);
                echo " - Memory: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "memory"), "html", null, true);
                echo " - Connection: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "connection"), "html", null, true);
                echo "

                        ";
                // line 99
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "query", 1 => (-1)), "method") != (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                    // line 100
                    echo "                            - <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "propel", "token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "connection" => $this->getAttribute((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "connection"), "query" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
                    echo "#propel-query-";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\">Explain the query</a>
                        ";
                }
                // line 102
                echo "                    </div>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 106
            echo "        ";
        }
        // line 107
        echo "        </tbody>
    </table>

    ";
        // line 110
        echo $this->env->getExtension('actions')->renderUri("PropelBundle:Panel:configuration", array());
    }

    public function getTemplateName()
    {
        return "PropelBundle:Collector:propel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 107,  211 => 106,  194 => 100,  192 => 99,  183 => 97,  169 => 86,  152 => 81,  146 => 78,  89 => 29,  71 => 22,  57 => 16,  51 => 13,  34 => 5,  31 => 4,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  196 => 92,  182 => 87,  176 => 94,  173 => 85,  170 => 84,  163 => 82,  68 => 30,  62 => 27,  28 => 3,  344 => 119,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  309 => 108,  306 => 107,  300 => 105,  297 => 104,  291 => 102,  283 => 100,  278 => 98,  274 => 97,  263 => 95,  258 => 94,  224 => 81,  136 => 71,  122 => 41,  117 => 39,  112 => 36,  109 => 52,  104 => 32,  85 => 28,  75 => 19,  58 => 25,  44 => 10,  178 => 66,  175 => 65,  161 => 84,  158 => 80,  154 => 60,  125 => 42,  121 => 50,  118 => 49,  87 => 41,  49 => 10,  46 => 9,  27 => 3,  91 => 33,  63 => 18,  385 => 160,  382 => 159,  374 => 157,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  324 => 113,  322 => 138,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  204 => 76,  199 => 93,  193 => 69,  190 => 76,  187 => 75,  180 => 96,  174 => 88,  171 => 87,  166 => 56,  159 => 53,  151 => 59,  148 => 79,  143 => 51,  140 => 58,  107 => 27,  103 => 25,  100 => 35,  97 => 34,  88 => 25,  82 => 28,  76 => 24,  61 => 15,  39 => 6,  36 => 5,  79 => 25,  72 => 18,  69 => 17,  54 => 22,  47 => 11,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  246 => 32,  164 => 58,  157 => 82,  145 => 74,  139 => 49,  131 => 45,  120 => 40,  115 => 39,  111 => 47,  108 => 37,  106 => 51,  101 => 31,  98 => 45,  92 => 43,  83 => 33,  80 => 32,  74 => 23,  66 => 19,  60 => 16,  55 => 24,  52 => 12,  50 => 22,  41 => 7,  32 => 6,  29 => 6,  409 => 183,  400 => 180,  396 => 179,  393 => 178,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  362 => 161,  355 => 157,  348 => 153,  341 => 118,  334 => 145,  327 => 114,  312 => 109,  305 => 129,  298 => 125,  293 => 118,  288 => 101,  285 => 115,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 101,  248 => 96,  243 => 92,  240 => 92,  235 => 85,  229 => 87,  221 => 85,  219 => 110,  209 => 78,  202 => 102,  195 => 71,  191 => 67,  188 => 90,  185 => 74,  177 => 64,  172 => 64,  168 => 57,  165 => 85,  162 => 54,  156 => 62,  153 => 77,  150 => 55,  147 => 75,  141 => 73,  134 => 54,  130 => 39,  123 => 61,  119 => 40,  116 => 57,  113 => 48,  105 => 34,  102 => 36,  99 => 31,  96 => 37,  90 => 42,  84 => 40,  81 => 23,  73 => 33,  70 => 15,  67 => 24,  64 => 23,  59 => 14,  53 => 12,  45 => 9,  43 => 12,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
