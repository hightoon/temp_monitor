<?php

/* @Login/_formErrors.twig */
class __TwigTemplate_8c0793011b0f83c2b89ad6332d2787c72f1f479b2b8bc3e871284a906c38a6d3 extends Twig_Template
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
        echo "
";
        // line 2
        if ((array_key_exists("formErrors", $context) &&  !twig_test_empty((isset($context["formErrors"]) ? $context["formErrors"] : $this->getContext($context, "formErrors"))))) {
            // line 3
            echo "    <div class=\"message_error\">
        ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formErrors"]) ? $context["formErrors"] : $this->getContext($context, "formErrors")));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 5
                echo "            <strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                echo "</strong>: ";
                echo $context["data"];
                echo "
            <br/>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@Login/_formErrors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
