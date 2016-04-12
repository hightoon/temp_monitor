<?php

/* @CoreHome/getDonateForm.twig */
class __TwigTemplate_40d06a8420bd9183c8b60a1a45165538af3405fdeb5774633d24502bf7f4c799 extends Twig_Template
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
        $this->env->loadTemplate("@CoreHome/_donate.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "@CoreHome/getDonateForm.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
