<?php

/* @VisitTime/index.twig */
class __TwigTemplate_faeb20fbed0dcf095ef236985a88a1d4dd251d6b94a9e2c5bc772f1ffc5da305 extends Twig_Template
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
        echo "<div id='leftcolumn'>
    <h2 piwik-enriched-headline>";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitTime_LocalTime")), "html", null, true);
        echo "</h2>
    ";
        // line 3
        echo (isset($context["dataTableVisitInformationPerLocalTime"]) ? $context["dataTableVisitInformationPerLocalTime"] : $this->getContext($context, "dataTableVisitInformationPerLocalTime"));
        echo "
</div>

<div id='rightcolumn'>
    <h2 piwik-enriched-headline>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("VisitTime_ServerTime")), "html", null, true);
        echo "</h2>
    ";
        // line 8
        echo (isset($context["dataTableVisitInformationPerServerTime"]) ? $context["dataTableVisitInformationPerServerTime"] : $this->getContext($context, "dataTableVisitInformationPerServerTime"));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@VisitTime/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 7,  26 => 3,  22 => 2,  19 => 1,);
    }
}
