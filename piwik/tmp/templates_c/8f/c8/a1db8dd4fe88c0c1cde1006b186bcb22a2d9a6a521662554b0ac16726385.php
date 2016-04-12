<?php

/* @Live/_totalVisitors.twig */
class __TwigTemplate_8fc8a1db8dd4fe88c0c1cde1006b186bcb22a2d9a6a521662554b0ac16726385 extends Twig_Template
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
        echo "<div id=\"visitsTotal\">
    <table class=\"dataTable\" cellspacing=\"0\">
        <thead>
        <tr>
            <th id=\"label\" class=\"sortable label\" style=\"cursor: auto;\">
                <div id=\"thDIV\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Date")), "html", null, true);
        echo "</div>
            </th>
            <th id=\"label\" class=\"sortable label\" style=\"cursor: auto;\">
                <div id=\"thDIV\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnNbVisits")), "html", null, true);
        echo "</div>
            </th>
            <th id=\"label\" class=\"sortable label\" style=\"cursor: auto;\">
                <div id=\"thDIV\">";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
        echo "</div>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class=\"\">
            <td class=\"column columnodd\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LastHours", 24)), "html", null, true);
        echo "</td>
            <td class=\"column columnodd\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["visitorsCountToday"]) ? $context["visitorsCountToday"] : $this->getContext($context, "visitorsCountToday")), "html", null, true);
        echo "</td>
            <td class=\"column columnodd\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["pisToday"]) ? $context["pisToday"] : $this->getContext($context, "pisToday")), "html", null, true);
        echo "</td>
        </tr>
        <tr class=\"\">
            <td class=\"column columnodd\">";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LastMinutes", 30)), "html", null, true);
        echo "</td>
            <td class=\"column columnodd\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["visitorsCountHalfHour"]) ? $context["visitorsCountHalfHour"] : $this->getContext($context, "visitorsCountHalfHour")), "html", null, true);
        echo "</td>
            <td class=\"column columnodd\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["pisHalfhour"]) ? $context["pisHalfhour"] : $this->getContext($context, "pisHalfhour")), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Live/_totalVisitors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  65 => 24,  61 => 23,  55 => 20,  51 => 19,  47 => 18,  38 => 12,  32 => 9,  26 => 6,  19 => 1,);
    }
}
