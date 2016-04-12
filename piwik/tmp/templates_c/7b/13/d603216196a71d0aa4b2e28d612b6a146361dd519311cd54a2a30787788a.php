<?php

/* @CoreHome/_menu.twig */
class __TwigTemplate_7b13d603216196a71d0aa4b2e28d612b6a146361dd519311cd54a2a30787788a extends Twig_Template
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
        // line 11
        echo "
";
        // line 26
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
<div class=\"Menu--dashboard\">

    <ul class=\"Menu-tabList\">
        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["level1"] => $context["level2"]) {
            // line 43
            echo "            <li id=\"";
            if ($this->getAttribute($context["level2"], "_url", array(), "any", true, true)) {
                echo $this->getAttribute($this, "getId", array(0 => $this->getAttribute($context["level2"], "_url", array())), "method");
            }
            echo "\">
                <a ";
            // line 44
            if ($this->getAttribute($context["level2"], "_url", array(), "any", true, true)) {
                echo "href=\"#";
                echo $this->getAttribute($this, "getFirstUrl", array(0 => $this->getAttribute($context["level2"], "_url", array())), "method");
                echo "\"";
            }
            // line 45
            echo "                   onclick=\"return piwikMenu.onItemClick(this);\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($context["level1"])), "html", null, true);
            echo "
                   <span class=\"hidden\">
                     ";
            // line 47
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_Menu")), "html", null, true);
            echo "
                   </span>
                </a>
                <ul>
                ";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["level2"]);
            foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                // line 52
                echo "                    ";
                if (($this->getAttribute($context["urlParameters"], "_url", array(), "any", true, true) &&  !twig_test_iterable($this->getAttribute($context["urlParameters"], "_url", array())))) {
                    // line 53
                    echo "                        ";
                    echo $this->getAttribute($this, "groupedItem", array(0 => $context["name"], 1 => $this->getAttribute($context["urlParameters"], "_url", array())), "method");
                    echo "
                    ";
                } elseif ((twig_slice($this->env,                 // line 54
$context["name"], 0, 1) != "_")) {
                    // line 55
                    echo "                        ";
                    echo $this->getAttribute($this, "submenuItem", array(0 => $context["name"], 1 => $this->getAttribute($context["urlParameters"], "_url", array())), "method");
                    echo "
                    ";
                }
                // line 57
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
                </ul>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['level1'], $context['level2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        <li id=\"Searchmenu\">
            <span piwik-quick-access></span>
        </li>
    </ul>

</div>
<div class=\"nav_sep\"></div>
";
    }

    // line 1
    public function getsubmenuItem($__name__ = null, $__url__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "url" => $__url__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((twig_slice($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 0, 1) != "_")) {
                // line 3
                echo "        <li>
            <a href='#";
                // line 4
                echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), 1), "html", null, true);
                echo "'
               onclick='return piwikMenu.onItemClick(this);'>
                ";
                // line 6
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
                echo "
            </a>
        </li>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function getgroupedItem($__name__ = null, $__group__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "group" => $__group__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "    <li>
        <div piwik-menudropdown show-search=\"true\" menu-title=\"";
            // line 14
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html_attr");
            echo "\">
            ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 16
                echo "                <a class=\"item\"
                   href='#";
                // line 17
                echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute($context["item"], "url", array()))), 1), "html", null, true);
                echo "'
                   ";
                // line 18
                if ($this->getAttribute($context["item"], "tooltip", array())) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tooltip", array()), "html_attr");
                    echo "\"";
                }
                // line 19
                echo "                   onclick='return piwikMenu.onItemClick(this);'>
                    ";
                // line 20
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getAttribute($context["item"], "name", array()))), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </div>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 27
    public function getgetId($__urlParameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "urlParameters" => $__urlParameters__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            if (twig_test_iterable((isset($context["urlParameters"]) ? $context["urlParameters"] : $this->getContext($context, "urlParameters")))) {
                // line 29
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array((isset($context["urlParameters"]) ? $context["urlParameters"] : $this->getContext($context, "urlParameters")))), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getgetFirstUrl($__urlParameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "urlParameters" => $__urlParameters__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            if (twig_test_iterable((isset($context["urlParameters"]) ? $context["urlParameters"] : $this->getContext($context, "urlParameters")))) {
                // line 35
                echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array((isset($context["urlParameters"]) ? $context["urlParameters"] : $this->getContext($context, "urlParameters")))), 1), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CoreHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 35,  246 => 34,  235 => 33,  223 => 29,  221 => 28,  210 => 27,  197 => 23,  188 => 20,  185 => 19,  179 => 18,  175 => 17,  172 => 16,  168 => 15,  164 => 14,  161 => 13,  149 => 12,  133 => 6,  128 => 4,  125 => 3,  122 => 2,  110 => 1,  99 => 62,  90 => 58,  84 => 57,  78 => 55,  76 => 54,  71 => 53,  68 => 52,  64 => 51,  57 => 47,  51 => 45,  45 => 44,  38 => 43,  34 => 42,  28 => 38,  25 => 32,  22 => 26,  19 => 11,);
    }
}
