<?php

/* LicwebLocationBundle:Location:locations.html.twig */
class __TwigTemplate_9aa474c51f03023659f6fc41369369ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("locations")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"well\">
        <h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("locations.add.title")), "html", null, true);
        echo "</h2>
        ";
        // line 10
        $this->env->loadTemplate("LicwebLocationBundle:Location:form.html.twig")->display($context);
        // line 11
        echo "    </div>
    
    <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("locations.list")), "html", null, true);
        echo "</h1>
    
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>";
        // line 18
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("location.name")), "html", null, true);
        echo "</th>
                <th>";
        // line 19
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("location.address")), "html", null, true);
        echo "</th>
                <th>";
        // line 20
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("location.phone")), "html", null, true);
        echo "</th>
                <th>";
        // line 21
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("location.presentation")), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 26
            echo "                ";
            // line 27
            echo "                
                <tr>
                    <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("licweb_location.location_getlocation", array("id" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "name"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "street"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "zipCode"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "city"), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "phoneNumber"), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "presentation"), "html", null, true);
            echo "</td>
                </tr>
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "        </tbody>
    </table>
        
";
    }

    public function getTemplateName()
    {
        return "LicwebLocationBundle:Location:locations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  110 => 32,  106 => 31,  98 => 30,  92 => 29,  88 => 27,  86 => 26,  82 => 25,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  55 => 13,  51 => 11,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
