<?php

/* @UserSettings/index.twig */
class __TwigTemplate_80678e1c1b0ffcb2ad8d96aa47ac19fd17ae07a171ab9ed635c6a8b4cdd5153f extends Twig_Template
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
    ";
        // line 2
        if ( !twig_test_empty(((array_key_exists("dataTablePlugin", $context)) ? (_twig_default_filter((isset($context["dataTablePlugin"]) ? $context["dataTablePlugin"] : $this->getContext($context, "dataTablePlugin")))) : ("")))) {
            // line 3
            echo "    <h2 piwik-enriched-headline>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugins")), "html", null, true);
            echo "</h2>
    ";
            // line 4
            echo (isset($context["dataTablePlugin"]) ? $context["dataTablePlugin"] : $this->getContext($context, "dataTablePlugin"));
            echo "
    ";
        }
        // line 6
        echo "</div>

<div id='rightcolumn'>
    ";
        // line 9
        if ( !twig_test_empty(((array_key_exists("dataTableResolution", $context)) ? (_twig_default_filter((isset($context["dataTableResolution"]) ? $context["dataTableResolution"] : $this->getContext($context, "dataTableResolution")))) : ("")))) {
            // line 10
            echo "    <h2 piwik-enriched-headline>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Resolution_Resolutions")), "html", null, true);
            echo "</h2>
    ";
            // line 11
            echo (isset($context["dataTableResolution"]) ? $context["dataTableResolution"] : $this->getContext($context, "dataTableResolution"));
            echo "
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ( !twig_test_empty(((array_key_exists("dataTableConfiguration", $context)) ? (_twig_default_filter((isset($context["dataTableConfiguration"]) ? $context["dataTableConfiguration"] : $this->getContext($context, "dataTableConfiguration")))) : ("")))) {
            // line 15
            echo "    <h2 piwik-enriched-headline>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Resolution_Configurations")), "html", null, true);
            echo "</h2>
    ";
            // line 16
            echo (isset($context["dataTableConfiguration"]) ? $context["dataTableConfiguration"] : $this->getContext($context, "dataTableConfiguration"));
            echo "
    ";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@UserSettings/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  61 => 16,  56 => 15,  54 => 14,  51 => 13,  46 => 11,  41 => 10,  39 => 9,  34 => 6,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
