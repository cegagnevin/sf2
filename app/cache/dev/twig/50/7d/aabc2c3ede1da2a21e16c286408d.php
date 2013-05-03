<?php

/* NelmioApiDocBundle::resources.html.twig */
class __TwigTemplate_507daabc2c3ede1da2a21e16c286408d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NelmioApiDocBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) ? $context["resources"] : $this->getContext($context, "resources")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["section"] => $context["sections"]) {
            // line 5
            echo "        ";
            if (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) != "_others")) {
                // line 6
                echo "            <div id=\"section\">
            <h1>";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "html", null, true);
                echo "</h1>
        ";
            }
            // line 9
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : $this->getContext($context, "sections")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["resource"] => $context["methods"]) {
                // line 10
                echo "            <li class=\"resource\">
                <div class=\"heading\">
                    ";
                // line 12
                if ((((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) == "_others") && ((isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")) != "others"))) {
                    // line 13
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
                    echo "</h2>
                    ";
                } elseif (((isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")) != "others")) {
                    // line 15
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "html", null, true);
                    echo "</h2>
                    ";
                }
                // line 17
                echo "                </div>
                <ul class=\"endpoints\">
                    <li class=\"endpoint\">
                        <ul class=\"operations\">
                            ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 22
                    echo "                                ";
                    $this->env->loadTemplate("NelmioApiDocBundle::method.html.twig")->display($context);
                    // line 23
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 24
                echo "                        </ul>
                    </li>
                </ul>
            </li>
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
            unset($context['_seq'], $context['_iterated'], $context['resource'], $context['methods'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 29
            echo "        ";
            if (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) != "_others")) {
                // line 30
                echo "            </div>
        ";
            }
            // line 32
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['sections'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 32,  619 => 284,  569 => 236,  563 => 233,  558 => 230,  556 => 229,  548 => 223,  544 => 221,  538 => 220,  523 => 217,  518 => 215,  515 => 214,  512 => 213,  508 => 212,  505 => 211,  502 => 210,  499 => 209,  486 => 206,  481 => 204,  478 => 203,  474 => 202,  471 => 201,  468 => 200,  465 => 199,  452 => 196,  447 => 194,  444 => 193,  440 => 192,  437 => 191,  435 => 190,  427 => 187,  424 => 186,  417 => 182,  412 => 180,  409 => 179,  407 => 178,  404 => 177,  399 => 174,  381 => 168,  377 => 167,  369 => 164,  366 => 163,  362 => 162,  351 => 153,  349 => 152,  346 => 151,  341 => 148,  332 => 145,  328 => 144,  324 => 143,  321 => 142,  317 => 141,  305 => 131,  303 => 130,  300 => 129,  295 => 126,  289 => 125,  283 => 122,  279 => 121,  275 => 120,  271 => 119,  268 => 118,  265 => 117,  261 => 116,  248 => 105,  243 => 103,  238 => 100,  229 => 96,  220 => 93,  216 => 92,  213 => 91,  200 => 86,  185 => 76,  180 => 74,  175 => 71,  134 => 52,  129 => 50,  113 => 42,  107 => 39,  77 => 26,  70 => 22,  432 => 39,  425 => 330,  422 => 185,  418 => 327,  401 => 313,  396 => 312,  390 => 170,  388 => 309,  288 => 211,  282 => 209,  276 => 207,  274 => 206,  222 => 157,  114 => 51,  102 => 21,  97 => 36,  76 => 30,  58 => 22,  20 => 1,  71 => 27,  110 => 45,  90 => 15,  84 => 13,  67 => 34,  38 => 8,  23 => 1,  132 => 51,  124 => 48,  119 => 22,  81 => 30,  65 => 25,  63 => 24,  94 => 22,  89 => 31,  85 => 19,  75 => 29,  68 => 14,  56 => 9,  196 => 85,  183 => 75,  171 => 73,  166 => 68,  163 => 70,  158 => 66,  156 => 66,  151 => 64,  142 => 59,  138 => 57,  136 => 24,  121 => 47,  117 => 44,  105 => 6,  91 => 37,  62 => 17,  49 => 5,  26 => 3,  28 => 3,  24 => 2,  87 => 20,  31 => 4,  25 => 3,  21 => 2,  19 => 1,  93 => 32,  88 => 36,  78 => 10,  46 => 13,  44 => 10,  27 => 3,  79 => 31,  72 => 23,  69 => 27,  47 => 17,  40 => 9,  37 => 8,  22 => 2,  246 => 104,  157 => 30,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 48,  111 => 38,  108 => 37,  101 => 24,  98 => 33,  96 => 17,  83 => 33,  74 => 24,  66 => 20,  55 => 7,  52 => 6,  50 => 13,  43 => 6,  41 => 7,  35 => 7,  32 => 5,  29 => 3,  209 => 90,  203 => 87,  199 => 76,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 67,  154 => 29,  149 => 51,  147 => 63,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 23,  116 => 36,  112 => 50,  109 => 40,  106 => 36,  103 => 36,  99 => 5,  95 => 39,  92 => 33,  86 => 31,  82 => 12,  80 => 19,  73 => 37,  64 => 12,  60 => 9,  57 => 17,  54 => 21,  51 => 15,  48 => 9,  45 => 9,  42 => 9,  39 => 9,  36 => 7,  33 => 9,  30 => 3,);
    }
}
