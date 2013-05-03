<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_d3b79b1e680bcbfe4e271c958eb77410 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    -moz-border-radius: 16px;
    -webkit-border-radius: 16px;
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  400 => 180,  393 => 178,  386 => 176,  378 => 170,  355 => 157,  348 => 153,  334 => 145,  312 => 129,  293 => 118,  285 => 115,  273 => 112,  262 => 104,  259 => 103,  240 => 92,  235 => 89,  221 => 85,  195 => 71,  191 => 69,  177 => 64,  172 => 62,  59 => 14,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  510 => 393,  500 => 389,  188 => 68,  170 => 84,  153 => 56,  34 => 5,  385 => 160,  382 => 159,  376 => 169,  374 => 157,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  339 => 146,  336 => 145,  330 => 141,  327 => 141,  322 => 138,  311 => 131,  308 => 130,  298 => 121,  292 => 121,  286 => 119,  284 => 118,  277 => 114,  272 => 111,  270 => 110,  255 => 103,  251 => 97,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  231 => 89,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 79,  206 => 77,  204 => 76,  190 => 68,  143 => 43,  140 => 42,  61 => 12,  159 => 53,  150 => 55,  135 => 69,  126 => 62,  219 => 84,  214 => 107,  211 => 106,  202 => 75,  194 => 100,  192 => 99,  174 => 59,  169 => 86,  165 => 60,  152 => 81,  148 => 46,  146 => 78,  100 => 24,  53 => 12,  161 => 84,  619 => 284,  569 => 236,  563 => 233,  558 => 230,  556 => 229,  548 => 223,  544 => 221,  538 => 220,  523 => 217,  518 => 215,  515 => 395,  512 => 394,  508 => 212,  505 => 391,  502 => 210,  499 => 209,  486 => 206,  481 => 204,  478 => 203,  474 => 202,  471 => 201,  468 => 200,  465 => 199,  452 => 196,  447 => 194,  444 => 193,  440 => 192,  437 => 191,  435 => 190,  427 => 187,  424 => 186,  417 => 182,  412 => 180,  409 => 183,  407 => 178,  404 => 177,  399 => 174,  381 => 168,  377 => 167,  369 => 165,  366 => 163,  362 => 161,  351 => 150,  349 => 149,  346 => 151,  341 => 149,  332 => 145,  328 => 144,  324 => 139,  321 => 142,  317 => 135,  305 => 125,  303 => 128,  300 => 129,  295 => 126,  289 => 120,  283 => 122,  279 => 115,  275 => 120,  271 => 111,  268 => 118,  265 => 107,  261 => 105,  248 => 96,  243 => 93,  238 => 100,  229 => 87,  220 => 93,  216 => 92,  213 => 91,  200 => 86,  185 => 67,  180 => 63,  175 => 71,  134 => 47,  129 => 50,  113 => 38,  107 => 27,  77 => 26,  70 => 19,  432 => 39,  425 => 330,  422 => 185,  418 => 327,  401 => 313,  396 => 179,  390 => 170,  388 => 177,  288 => 116,  282 => 209,  276 => 113,  274 => 206,  222 => 157,  114 => 51,  102 => 33,  97 => 23,  76 => 34,  58 => 25,  20 => 1,  71 => 22,  110 => 45,  90 => 27,  84 => 24,  67 => 18,  38 => 6,  23 => 1,  132 => 51,  124 => 48,  119 => 40,  81 => 23,  65 => 25,  63 => 24,  94 => 22,  89 => 29,  85 => 28,  75 => 29,  68 => 30,  56 => 24,  196 => 92,  183 => 97,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 58,  151 => 47,  142 => 59,  138 => 57,  136 => 71,  121 => 47,  117 => 44,  105 => 34,  91 => 37,  62 => 27,  49 => 20,  26 => 3,  28 => 3,  24 => 2,  87 => 41,  31 => 4,  25 => 5,  21 => 2,  19 => 1,  93 => 32,  88 => 20,  78 => 40,  46 => 9,  44 => 20,  27 => 3,  79 => 18,  72 => 23,  69 => 27,  47 => 21,  40 => 9,  37 => 8,  22 => 2,  246 => 104,  157 => 82,  145 => 74,  139 => 70,  131 => 42,  123 => 42,  120 => 40,  115 => 60,  111 => 59,  108 => 37,  101 => 24,  98 => 45,  96 => 30,  83 => 33,  74 => 39,  66 => 19,  55 => 24,  52 => 12,  50 => 22,  43 => 9,  41 => 19,  35 => 5,  32 => 6,  29 => 6,  209 => 79,  203 => 87,  199 => 93,  193 => 69,  189 => 71,  187 => 67,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 58,  162 => 59,  154 => 29,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 38,  122 => 23,  116 => 39,  112 => 50,  109 => 52,  106 => 51,  103 => 25,  99 => 31,  95 => 49,  92 => 43,  86 => 31,  82 => 19,  80 => 19,  73 => 20,  64 => 17,  60 => 16,  57 => 16,  54 => 21,  51 => 13,  48 => 11,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
