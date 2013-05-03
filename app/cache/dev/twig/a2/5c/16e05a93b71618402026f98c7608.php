<?php

/* PropelBundle:Panel:configuration.html.twig */
class __TwigTemplate_a25c16e05a93b71618402026f98c7608 extends Twig_Template
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
        echo "<h2>Propel configuration</h2>

<table summary=\"Current Propel configuration\">
    <thead>
    </thead>
    <tbody>
        <tr>
            <th>Propel version</th>
            <td>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["propel_version"]) ? $context["propel_version"] : $this->getContext($context, "propel_version")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Default connection</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["default_connection"]) ? $context["default_connection"] : $this->getContext($context, "default_connection")), "html", null, true);
        echo "</td>
        <tr>
            <th>Logging</th>
            <td>";
        // line 16
        echo (((isset($context["logging"]) ? $context["logging"] : $this->getContext($context, "logging"))) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Propel path</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Phing path</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["phing_path"]) ? $context["phing_path"] : $this->getContext($context, "phing_path")), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<h2>Propel connections</h2>

<table summary=\"Current Propel connections\">
    <thead>
        <tr>
            <th>Connection name</th>
            <th colspan=\"2\" style=\"text-align: center;\">Configuration parameters</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "datasources"));
        foreach ($context['_seq'] as $context["name"] => $context["config"]) {
            // line 40
            echo "        <tr>
            <th rowspan=\"5\" style=\"vertical-align: top;\">
                ";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "
            </th>
            <th>Adapter</th>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "adapter"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>DSN</th>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "connection"), "dsn"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Class</th>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "connection"), "classname"), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Options</th>
            <td>
                <ul>
                    ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "connection"), "options"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 60
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 62
            echo "                </ul>
            </td>
        </tr>
        <tr>
            <th>Attributes</th>
            <td>
                <ul>
                    ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "connection"), "attributes"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 70
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 72
            echo "                </ul>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 76
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "PropelBundle:Panel:configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 76,  150 => 72,  135 => 69,  126 => 62,  219 => 110,  214 => 107,  211 => 106,  202 => 102,  194 => 100,  192 => 99,  174 => 88,  169 => 86,  165 => 85,  152 => 81,  148 => 79,  146 => 78,  100 => 35,  53 => 12,  161 => 84,  619 => 284,  569 => 236,  563 => 233,  558 => 230,  556 => 229,  548 => 223,  544 => 221,  538 => 220,  523 => 217,  518 => 215,  515 => 214,  512 => 213,  508 => 212,  505 => 211,  502 => 210,  499 => 209,  486 => 206,  481 => 204,  478 => 203,  474 => 202,  471 => 201,  468 => 200,  465 => 199,  452 => 196,  447 => 194,  444 => 193,  440 => 192,  437 => 191,  435 => 190,  427 => 187,  424 => 186,  417 => 182,  412 => 180,  409 => 179,  407 => 178,  404 => 177,  399 => 174,  381 => 168,  377 => 167,  369 => 164,  366 => 163,  362 => 162,  351 => 153,  349 => 152,  346 => 151,  341 => 148,  332 => 145,  328 => 144,  324 => 143,  321 => 142,  317 => 141,  305 => 131,  303 => 130,  300 => 129,  295 => 126,  289 => 125,  283 => 122,  279 => 121,  275 => 120,  271 => 119,  268 => 118,  265 => 117,  261 => 116,  248 => 105,  243 => 103,  238 => 100,  229 => 96,  220 => 93,  216 => 92,  213 => 91,  200 => 86,  185 => 76,  180 => 96,  175 => 71,  134 => 52,  129 => 50,  113 => 42,  107 => 39,  77 => 26,  70 => 22,  432 => 39,  425 => 330,  422 => 185,  418 => 327,  401 => 313,  396 => 312,  390 => 170,  388 => 309,  288 => 211,  282 => 209,  276 => 207,  274 => 206,  222 => 157,  114 => 51,  102 => 53,  97 => 34,  76 => 24,  58 => 22,  20 => 1,  71 => 22,  110 => 45,  90 => 15,  84 => 13,  67 => 34,  38 => 6,  23 => 1,  132 => 51,  124 => 48,  119 => 22,  81 => 30,  65 => 25,  63 => 24,  94 => 22,  89 => 29,  85 => 28,  75 => 29,  68 => 14,  56 => 24,  196 => 85,  183 => 97,  171 => 87,  166 => 68,  163 => 70,  158 => 66,  156 => 66,  151 => 64,  142 => 59,  138 => 57,  136 => 24,  121 => 47,  117 => 44,  105 => 6,  91 => 37,  62 => 17,  49 => 20,  26 => 3,  28 => 3,  24 => 2,  87 => 20,  31 => 4,  25 => 3,  21 => 2,  19 => 1,  93 => 32,  88 => 45,  78 => 40,  46 => 9,  44 => 10,  27 => 3,  79 => 25,  72 => 23,  69 => 27,  47 => 17,  40 => 9,  37 => 8,  22 => 2,  246 => 104,  157 => 82,  145 => 46,  139 => 70,  131 => 42,  123 => 47,  120 => 40,  115 => 60,  111 => 59,  108 => 37,  101 => 24,  98 => 33,  96 => 17,  83 => 33,  74 => 39,  66 => 19,  55 => 7,  52 => 6,  50 => 13,  43 => 6,  41 => 7,  35 => 5,  32 => 5,  29 => 9,  209 => 90,  203 => 87,  199 => 76,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 94,  173 => 74,  168 => 72,  164 => 58,  162 => 67,  154 => 29,  149 => 51,  147 => 63,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 23,  116 => 36,  112 => 50,  109 => 40,  106 => 36,  103 => 36,  99 => 5,  95 => 49,  92 => 33,  86 => 31,  82 => 42,  80 => 19,  73 => 37,  64 => 12,  60 => 16,  57 => 17,  54 => 21,  51 => 15,  48 => 9,  45 => 9,  42 => 16,  39 => 9,  36 => 13,  33 => 4,  30 => 3,);
    }
}
