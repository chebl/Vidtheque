<?php

/* GallerieAdminBundle:Photo:valid.html.twig */
class __TwigTemplate_a96c49b2fc7fc0932bd8bd2ad148f55868fb19cfe1c718a464d4c29d185b5540 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "GallerieAdminBundle:Photo:valid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
