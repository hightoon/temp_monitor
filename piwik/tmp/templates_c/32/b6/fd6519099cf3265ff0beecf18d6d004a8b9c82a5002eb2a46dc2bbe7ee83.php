<?php

/* @CoreHome/_indexContent.twig */
class __TwigTemplate_32b6fd6519099cf3265ff0beecf18d6d004a8b9c82a5002eb2a46dc2bbe7ee83 extends Twig_Template
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
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 2
        echo "<div class=\"pageWrap\">
<a name=\"main\"></a>
    ";
        // line 4
        $this->env->loadTemplate("@CoreHome/_notifications.twig")->display($context);
        // line 5
        echo "    <div class=\"top_controls\">
        ";
        // line 6
        $this->env->loadTemplate("@CoreHome/_periodSelect.twig")->display($context);
        // line 7
        echo "        ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.nextToCalendar"));
        echo "
        ";
        // line 8
        $this->env->resolveTemplate($context["dashboardSettingsControl"]->getTemplateFile())->display(array_merge($context, $context["dashboardSettingsControl"]->getTemplateVars()));
        // line 9
        echo "        ";
        $this->env->loadTemplate("@CoreHome/_headerMessage.twig")->display($context);
        // line 10
        echo "        ";
        echo $context["ajax"]->getrequestErrorDiv(((array_key_exists("emailSuperUser", $context)) ? (_twig_default_filter((isset($context["emailSuperUser"]) ? $context["emailSuperUser"] : $this->getContext($context, "emailSuperUser")), "")) : ("")));
        echo "
    </div>

    ";
        // line 13
        echo $context["ajax"]->getloadingDiv();
        echo "

    <div id=\"content\" class=\"home\">
        ";
        // line 16
        if ((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) {
            echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "html", null, true);
        }
        // line 17
        echo "    </div>
    <div class=\"clear\"></div>
</div>

<br/><br/>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_indexContent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  55 => 16,  49 => 13,  42 => 10,  39 => 9,  37 => 8,  32 => 7,  30 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
