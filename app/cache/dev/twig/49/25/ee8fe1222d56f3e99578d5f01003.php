<?php

/* LicwebLocationBundle:Location:location.html.twig */
class __TwigTemplate_4925ee8fe1222d56f3e99578d5f01003 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "name"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "


    <div class=\"well\">
        <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "name"), "html", null, true);
        echo "</h1>
        
        ";
        // line 14
        $this->env->loadTemplate("LicwebLocationBundle:Location:formEditLocation.html.twig")->display($context);
        // line 15
        echo "        
        <form method=post action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("licweb_location.location_deletelocation", array("id" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id"))), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            <input type=\"submit\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->env->getExtension('translator')->trans("delete")), "html", null, true);
        echo "\" class=\"btn btn-success\" />
        </form>
        
        ";
        // line 21
        if (((!(null === (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")))) && (!(null === (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")))))) {
            // line 22
            echo "            <iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;t=m&amp;ll=";
            echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
            echo "&amp;spn=0.079082,0.145912&amp;z=12&amp;iwloc=A&amp;output=embed\"></iframe>
        ";
        }
        // line 24
        echo "    </div>
    
    <h2>";
        // line 26
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("comments")), "html", null, true);
        echo "</h2>
    
    <div class=\"well\">
        <h3>";
        // line 29
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("comments.add.title")), "html", null, true);
        echo "</h3>
        <form method=post action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("licweb_location.comment_addcomment", array("id" => $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formComment"]) ? $context["formComment"] : $this->getContext($context, "formComment")), 'enctype');
        echo ">

            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formComment"]) ? $context["formComment"] : $this->getContext($context, "formComment")), "author"), 'label', (twig_test_empty($_label_ = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("comment.author"))) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formComment"]) ? $context["formComment"] : $this->getContext($context, "formComment")), "author"), 'errors');
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formComment"]) ? $context["formComment"] : $this->getContext($context, "formComment")), "author"), 'widget');
        echo "

            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formComment"]) ? $context["formComment"] : $this->getContext($context, "formComment")), "message"), 'label', (twig_test_empty($_label_ = twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("comment.message"))) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formComment"]) ? $context["formComment"] : $this->getContext($context, "formComment")), "message"), 'errors');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formComment"]) ? $context["formComment"] : $this->getContext($context, "formComment")), "message"), 'widget');
        echo "

            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formComment"]) ? $context["formComment"] : $this->getContext($context, "formComment")), 'rest');
        echo "

            <br/>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
            <input type=\"submit\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("comments.add.button")), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
        </form>
    </div>
    
    
    
    ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 51
            echo "        <div class=\"well\">
            <h3>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author"), "html", null, true);
            echo "</h3>
            <p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "message"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "    
    
    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("licweb_location.location_getlocations"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("back")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "LicwebLocationBundle:Location:location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 58,  162 => 56,  153 => 53,  149 => 52,  146 => 51,  142 => 50,  133 => 44,  126 => 40,  121 => 38,  117 => 37,  113 => 36,  108 => 34,  104 => 33,  100 => 32,  93 => 30,  89 => 29,  83 => 26,  79 => 24,  71 => 22,  69 => 21,  63 => 18,  58 => 16,  55 => 15,  53 => 14,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
