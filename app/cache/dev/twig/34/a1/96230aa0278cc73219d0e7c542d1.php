<?php

/* ::base.html.twig */
class __TwigTemplate_34a196230aa0278cc73219d0e7c542d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/licweblocation/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <style>
          body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
          }
          #link_admin {
            float: right;
            font-weight: bold;
          }
          #link_admin a{
            color: #bd0000;
          }
          #link_admin a:hover{
            color: #ff1919;
          }
          textarea {
            height: 100px;
            width: 500px;
          }

        </style>
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
          <div class=\"navbar-inner\">
            <div class=\"container\">
              <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"brand\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("licweb_location.location_getlocations"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->env->getExtension('translator')->trans("project.title")), "html", null, true);
        echo "</a>
              <div class=\"nav-collapse collapse\">
                <ul class=\"nav\">
                  <li class=\"active\"><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("licweb_location.location_getlocations"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("locations")), "html", null, true);
        echo "</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </div>
        </div>
        
        <div class=\"container\">
        
            ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "        </div>
        
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "    </body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 54,  120 => 51,  115 => 6,  109 => 5,  102 => 55,  100 => 54,  96 => 52,  94 => 51,  80 => 42,  72 => 39,  38 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
