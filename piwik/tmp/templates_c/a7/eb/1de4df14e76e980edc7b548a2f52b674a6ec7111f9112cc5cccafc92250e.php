<?php

/* @CoreAdminHome/_menu.twig */
class __TwigTemplate_a7eb1de4df14e76e980edc7b548a2f52b674a6ec7111f9112cc5cccafc92250e extends Twig_Template
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
        $context["corehome"] = $this->env->loadTemplate("@CoreHome/macros.twig");
        // line 2
        echo "
";
        // line 3
        echo $context["corehome"]->getsidebarMenu((isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu")), (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule")), (isset($context["currentAction"]) ? $context["currentAction"] : $this->getContext($context, "currentAction")));
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
