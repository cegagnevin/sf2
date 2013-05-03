<?php

/* LicwebLocationBundle:Location:formEditLocation.html.twig */
class __TwigTemplate_4f042516e84574180e140d60179cfb27 extends Twig_Template
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
        echo "<form method=post action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("licweb_location.location_updatelocation", array("id" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label', (twig_test_empty($_label_ = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("location.name"))) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "

    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'label', (twig_test_empty($_label_ = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("location.street"))) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'errors');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street"), 'widget');
        echo "
    
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode"), 'label', (twig_test_empty($_label_ = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("location.zipcode"))) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode"), 'errors');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode"), 'widget');
        echo "
    
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label', (twig_test_empty($_label_ = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("location.city"))) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'errors');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "

    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation"), 'label', (twig_test_empty($_label_ = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("location.presentation"))) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation"), 'errors');
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presentation"), 'widget');
        echo "
    
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone_number"), 'label', (twig_test_empty($_label_ = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("location.phoneNumber"))) ? array() : array("label" => $_label_)));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone_number"), 'errors');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone_number"), 'widget');
        echo "

    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <br/>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    <input type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("update")), "html", null, true);
        echo "\" class=\"btn btn-danger\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "LicwebLocationBundle:Location:formEditLocation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  105 => 27,  96 => 24,  92 => 23,  87 => 21,  74 => 17,  70 => 16,  66 => 15,  61 => 13,  57 => 12,  44 => 8,  40 => 7,  35 => 5,  31 => 4,  27 => 3,  19 => 1,  166 => 58,  162 => 56,  153 => 53,  149 => 52,  146 => 51,  142 => 50,  133 => 44,  126 => 40,  121 => 38,  117 => 37,  113 => 36,  108 => 34,  104 => 33,  100 => 25,  93 => 30,  89 => 29,  83 => 20,  79 => 19,  71 => 22,  69 => 21,  63 => 18,  58 => 16,  55 => 15,  53 => 11,  48 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
