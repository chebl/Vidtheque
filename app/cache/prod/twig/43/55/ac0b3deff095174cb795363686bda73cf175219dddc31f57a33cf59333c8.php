<?php

/* GallerieAdminBundle:Photo:upload.html.twig */
class __TwigTemplate_4355ac0b3deff095174cb795363686bda73cf175219dddc31f57a33cf59333c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GallerieMediaBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GallerieMediaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
       
";
    }

    // line 8
    public function block_container($context, array $blocks = array())
    {
        // line 9
        echo "



<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("addfiles");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "files"), 'widget');
        echo "
  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
      <input type=\"submit\" value=\"uploader\">
      
    </form>
";
    }

    public function getTemplateName()
    {
        return "GallerieAdminBundle:Photo:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  54 => 14,  48 => 13,  42 => 9,  39 => 8,  32 => 4,  29 => 3,);
    }
}
