<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_ea5f3a82f3469d69b4e7ed3e62a88379 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 119,  318 => 111,  315 => 110,  309 => 108,  306 => 107,  297 => 104,  291 => 102,  278 => 98,  263 => 95,  258 => 94,  224 => 81,  104 => 37,  178 => 66,  118 => 49,  400 => 180,  393 => 178,  386 => 176,  378 => 170,  355 => 157,  348 => 153,  334 => 145,  312 => 109,  293 => 118,  285 => 115,  273 => 112,  262 => 104,  259 => 103,  240 => 92,  235 => 85,  221 => 85,  195 => 71,  191 => 67,  177 => 64,  172 => 64,  59 => 14,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  510 => 393,  500 => 389,  188 => 68,  170 => 84,  153 => 56,  34 => 5,  385 => 160,  382 => 159,  376 => 169,  374 => 157,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  339 => 146,  336 => 145,  330 => 141,  327 => 114,  322 => 138,  311 => 131,  308 => 130,  298 => 121,  292 => 121,  286 => 119,  284 => 118,  277 => 114,  272 => 111,  270 => 110,  255 => 93,  251 => 97,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  204 => 76,  190 => 76,  143 => 51,  140 => 58,  61 => 15,  159 => 53,  150 => 55,  135 => 69,  126 => 62,  219 => 84,  214 => 107,  211 => 106,  202 => 77,  194 => 100,  192 => 99,  174 => 65,  169 => 86,  165 => 60,  152 => 81,  148 => 46,  146 => 78,  100 => 36,  53 => 17,  161 => 63,  619 => 284,  569 => 236,  563 => 233,  558 => 230,  556 => 229,  548 => 223,  544 => 221,  538 => 220,  523 => 217,  518 => 215,  515 => 395,  512 => 394,  508 => 212,  505 => 391,  502 => 210,  499 => 209,  486 => 206,  481 => 204,  478 => 203,  474 => 202,  471 => 201,  468 => 200,  465 => 199,  452 => 196,  447 => 194,  444 => 193,  440 => 192,  437 => 191,  435 => 190,  427 => 187,  424 => 186,  417 => 182,  412 => 180,  409 => 183,  407 => 178,  404 => 177,  399 => 174,  381 => 168,  377 => 167,  369 => 165,  366 => 163,  362 => 161,  351 => 150,  349 => 149,  346 => 151,  341 => 118,  332 => 116,  328 => 144,  324 => 113,  321 => 112,  317 => 135,  305 => 125,  303 => 106,  300 => 105,  295 => 126,  289 => 120,  283 => 100,  279 => 115,  275 => 120,  271 => 111,  268 => 118,  265 => 96,  261 => 105,  248 => 96,  243 => 92,  238 => 100,  229 => 87,  220 => 93,  216 => 92,  213 => 91,  200 => 86,  185 => 74,  180 => 63,  175 => 65,  134 => 54,  129 => 50,  113 => 40,  107 => 27,  77 => 25,  70 => 19,  432 => 39,  425 => 330,  422 => 185,  418 => 327,  401 => 313,  396 => 179,  390 => 170,  388 => 177,  288 => 101,  282 => 209,  276 => 113,  274 => 97,  222 => 157,  114 => 51,  102 => 40,  97 => 23,  76 => 25,  58 => 14,  20 => 1,  71 => 22,  110 => 45,  90 => 27,  84 => 24,  67 => 20,  38 => 7,  23 => 1,  132 => 51,  124 => 48,  119 => 40,  81 => 23,  65 => 22,  63 => 18,  94 => 22,  89 => 29,  85 => 24,  75 => 19,  68 => 30,  56 => 24,  196 => 92,  183 => 97,  171 => 58,  166 => 56,  163 => 82,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 57,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 34,  62 => 21,  49 => 14,  26 => 3,  28 => 6,  24 => 2,  87 => 33,  31 => 4,  25 => 5,  21 => 2,  19 => 1,  93 => 32,  88 => 25,  78 => 40,  46 => 13,  44 => 9,  27 => 3,  79 => 21,  72 => 18,  69 => 17,  47 => 15,  40 => 11,  37 => 8,  22 => 2,  246 => 104,  157 => 82,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 40,  115 => 60,  111 => 47,  108 => 37,  101 => 31,  98 => 30,  96 => 35,  83 => 33,  74 => 39,  66 => 19,  55 => 13,  52 => 12,  50 => 16,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 6,  209 => 79,  203 => 87,  199 => 93,  193 => 69,  189 => 71,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 58,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 51,  103 => 25,  99 => 31,  95 => 49,  92 => 27,  86 => 31,  82 => 28,  80 => 27,  73 => 23,  64 => 23,  60 => 20,  57 => 19,  54 => 21,  51 => 13,  48 => 11,  45 => 14,  42 => 7,  39 => 6,  36 => 9,  33 => 4,  30 => 7,);
    }
}
