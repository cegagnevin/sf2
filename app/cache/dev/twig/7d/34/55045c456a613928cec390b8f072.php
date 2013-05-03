<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_7d3455045c456a613928cec390b8f072 extends Twig_Template
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
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->env->loadTemplate("NelmioApiDocBundle::method.html.twig")->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 39,  425 => 330,  422 => 329,  418 => 327,  401 => 313,  396 => 312,  390 => 310,  388 => 309,  288 => 211,  282 => 209,  276 => 207,  274 => 206,  222 => 157,  114 => 51,  102 => 43,  97 => 40,  76 => 30,  58 => 22,  20 => 1,  71 => 27,  110 => 45,  90 => 48,  84 => 45,  67 => 34,  38 => 8,  23 => 1,  132 => 48,  124 => 46,  119 => 45,  81 => 30,  65 => 25,  63 => 24,  94 => 22,  89 => 31,  85 => 19,  75 => 29,  68 => 14,  56 => 9,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 50,  121 => 46,  117 => 44,  105 => 6,  91 => 37,  62 => 17,  49 => 19,  26 => 3,  28 => 3,  24 => 3,  87 => 20,  31 => 4,  25 => 3,  21 => 2,  19 => 1,  93 => 32,  88 => 36,  78 => 40,  46 => 11,  44 => 10,  27 => 3,  79 => 31,  72 => 28,  69 => 27,  47 => 17,  40 => 8,  37 => 8,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 48,  111 => 38,  108 => 37,  101 => 24,  98 => 33,  96 => 31,  83 => 33,  74 => 14,  66 => 24,  55 => 13,  52 => 13,  50 => 13,  43 => 6,  41 => 7,  35 => 7,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 50,  109 => 34,  106 => 36,  103 => 36,  99 => 5,  95 => 39,  92 => 49,  86 => 46,  82 => 22,  80 => 19,  73 => 37,  64 => 12,  60 => 6,  57 => 15,  54 => 21,  51 => 9,  48 => 9,  45 => 9,  42 => 9,  39 => 9,  36 => 7,  33 => 9,  30 => 3,);
    }
}
