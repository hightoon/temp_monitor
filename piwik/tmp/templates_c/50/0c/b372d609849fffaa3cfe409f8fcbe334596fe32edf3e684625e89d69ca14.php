<?php

/* @Live/_dataTableViz_visitorLog.twig */
class __TwigTemplate_500cb372d609849fffaa3cfe409f8fcbe334596fe32edf3e684625e89d69ca14 extends Twig_Template
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
        $context["displayVisitorsInOwnColumn"] = (((isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget"))) ? (false) : (true));
        // line 2
        $context["displayReferrersInOwnColumn"] = (($this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "smallWidth", array())) ? (false) : (true));
        // line 3
        echo "<table class=\"dataTable\" cellspacing=\"0\" width=\"100%\" style=\"width:100%;table-layout:fixed;\">
<thead>
<tr>
    <th style=\"display:none;\"></th>
    <th id=\"label\" class=\"sortable label\" style=\"cursor: auto; width: 20%; \">
        <div id=\"thDIV\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Date")), "html", null, true);
        echo "</div>
    </th>
    ";
        // line 10
        if ((isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn"))) {
            // line 11
            echo "        <th id=\"label\" class=\"sortable label\" style=\"cursor: auto;width: 15%;\">
            <div id=\"thDIV\">";
            // line 12
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Visitors")), "html", null, true);
            echo "</div>
        </th>
    ";
        }
        // line 15
        echo "    ";
        if ((isset($context["displayReferrersInOwnColumn"]) ? $context["displayReferrersInOwnColumn"] : $this->getContext($context, "displayReferrersInOwnColumn"))) {
            // line 16
            echo "    <th id=\"label\" class=\"sortable label\" style=\"cursor: auto;width: 15%\">
        <div id=\"thDIV\">";
            // line 17
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_Referrer_URL")), "html", null, true);
            echo "</div>
    </th>
    ";
        }
        // line 20
        echo "    <th id=\"label\" class=\"sortable label\" style=\"cursor: auto;width: 60%\">
        <div id=\"thDIV\">";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnNbActions")), "html", null, true);
        echo "</div>
    </th>
</tr>
</thead>
<tbody>
";
        // line 26
        $context["cycleIndex"] = 0;
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dataTable"]) ? $context["dataTable"] : $this->getContext($context, "dataTable")), "getRows", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 28
            echo "    ";
            $context["visitHasEcommerceActivity"] = $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitEcommerceStatusIcon"), "method");
            // line 29
            echo "    ";
            $context["breakBeforeVisitorRank"] = ((((isset($context["visitHasEcommerceActivity"]) ? $context["visitHasEcommerceActivity"] : $this->getContext($context, "visitHasEcommerceActivity")) && $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorTypeIcon"), "method"))) ? (true) : (false));
            // line 30
            echo "    ";
            ob_start();
            // line 31
            echo "        ";
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "countryFlag"), "method")) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "countryFlag"), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "location"), "method"), "html", null, true);
                echo ", Provider ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "providerName"), "method"), "html", null, true);
                echo "\"/>";
            }
            // line 32
            echo "        &nbsp;
        ";
            // line 33
            if ( !$this->getAttribute($context["visitor"], "hasColumn", array(0 => "plugins"), "method")) {
                // line 34
                echo "            ";
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "browserIcon"), "method")) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "browserIcon"), "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "browser"), "method"), "html", null, true);
                    echo "\"/>";
                }
                // line 35
                echo "        ";
            } elseif ($this->getAttribute($context["visitor"], "getColumn", array(0 => "plugins"), "method")) {
                // line 36
                echo "            ";
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "browserIcon"), "method")) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "browserIcon"), "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicePlugins_BrowserWithPluginsEnabled", $this->getAttribute($context["visitor"], "getColumn", array(0 => "browser"), "method"), $this->getAttribute($context["visitor"], "getColumn", array(0 => "plugins"), "method"))), "html", null, true);
                    echo "\"/>";
                }
                // line 37
                echo "        ";
            } else {
                // line 38
                echo "            ";
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "browserIcon"), "method")) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "browserIcon"), "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("DevicePlugins_BrowserWithNoPluginsEnabled", $this->getAttribute($context["visitor"], "getColumn", array(0 => "browser"), "method"))), "html", null, true);
                    echo "\"/>";
                }
                // line 39
                echo "        ";
            }
            // line 40
            echo "        ";
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "operatingSystemIcon"), "method")) {
                echo "&nbsp;
        <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "operatingSystemIcon"), "method"), "html", null, true);
                echo "\"
             title=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "operatingSystem"), "method"), "html", null, true);
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "resolution"), "method")) {
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "resolution"), "method"), "html", null, true);
                }
                echo "\"/>";
            }
            // line 43
            echo "        ";
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorTypeIcon"), "method")) {
                // line 44
                echo "            ";
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorTypeIcon"), "method")) {
                    echo "&nbsp;-
            <img src=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorTypeIcon"), "method"), "html", null, true);
                    echo "\"
                 title=\"";
                    // line 46
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReturningVisitor")), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NVisits", $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitCount"), "method"))), "html", null, true);
                    echo "\"/>";
                }
                // line 47
                echo "        ";
            }
            // line 48
            echo "        ";
            if (( !(isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn")) || (isset($context["breakBeforeVisitorRank"]) ? $context["breakBeforeVisitorRank"] : $this->getContext($context, "breakBeforeVisitorRank")))) {
                echo "<br/><br />";
            }
            // line 49
            echo "
        ";
            // line 51
            echo "        ";
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitConverted"), "method")) {
                // line 52
                echo "            <span title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitConvertedNGoals", $this->getAttribute($context["visitor"], "getColumn", array(0 => "goalConversions"), "method"))), "html", null, true);
                echo "\" class='visitorRank'
                  ";
                // line 53
                if (( !(isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn")) || (isset($context["breakBeforeVisitorRank"]) ? $context["breakBeforeVisitorRank"] : $this->getContext($context, "breakBeforeVisitorRank")))) {
                    echo "style=\"margin-left:0;\"";
                }
                echo ">
                <img src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitConvertedIcon"), "method"), "html", null, true);
                echo "\"/>
                <span class='hash'>#</span>
                ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "goalConversions"), "method"), "html", null, true);
                echo "
                ";
                // line 57
                if ((isset($context["visitHasEcommerceActivity"]) ? $context["visitHasEcommerceActivity"] : $this->getContext($context, "visitHasEcommerceActivity"))) {
                    // line 58
                    echo "                    &nbsp;-
                    <img src=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitEcommerceStatusIcon"), "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitEcommerceStatus"), "method"), "html", null, true);
                    echo "\"/>
                ";
                }
                // line 61
                echo "            </span>
        ";
                // line 63
                echo "        ";
            } elseif ((isset($context["visitHasEcommerceActivity"]) ? $context["visitHasEcommerceActivity"] : $this->getContext($context, "visitHasEcommerceActivity"))) {
                // line 64
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitEcommerceStatusIcon"), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitEcommerceStatus"), "method"), "html", null, true);
                echo "\"/>
        ";
            }
            // line 66
            echo "
        ";
            // line 67
            if ( !(isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn"))) {
                echo "<br/><br />";
            }
            // line 68
            echo "        ";
            if ((isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn"))) {
                // line 69
                echo "            ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "pluginsIcons"), "method")) > 0)) {
                    // line 70
                    echo "                <hr/>
                ";
                    // line 71
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugins")), "html", null, true);
                    echo ":
                ";
                    // line 72
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["visitor"], "getColumn", array(0 => "pluginsIcons"), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["pluginIcon"]) {
                        // line 73
                        echo "                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["pluginIcon"], "pluginIcon", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["pluginIcon"], "pluginName", array()), true), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["pluginIcon"], "pluginName", array()), true), "html", null, true);
                        echo "\"/>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pluginIcon'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "            ";
                }
                // line 76
                echo "        ";
            }
            // line 77
            echo "    ";
            $context["visitorColumnContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 78
            echo "
    ";
            // line 79
            ob_start();
            // line 80
            echo "    <div class=\"referrer\">
        ";
            // line 81
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerType"), "method") == "website")) {
                // line 82
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_ColumnWebsite")), "html", null, true);
                echo ":
            <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerUrl"), "method"), "html", null, true);
                echo "\" rel=\"noreferrer\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerUrl"), "method"), "html", null, true);
                echo "\"
               style=\"text-decoration:underline;\">
                ";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerName"), "method"), "html", null, true);
                echo "
            </a>
        ";
            }
            // line 88
            echo "        ";
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerType"), "method") == "campaign")) {
                // line 89
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_ColumnCampaign")), "html", null, true);
                echo "
            <br/>
            ";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerName"), "method"), "html", null, true);
                echo "
            ";
                // line 92
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method"))) {
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method"), "html", null, true);
                }
                // line 93
                echo "        ";
            }
            // line 94
            echo "        ";
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerType"), "method") == "search")) {
                // line 95
                $context["keywordNotDefined"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnKeyword"))));
                // line 96
                $context["showKeyword"] = ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method")) && ($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method") != (isset($context["keywordNotDefined"]) ? $context["keywordNotDefined"] : $this->getContext($context, "keywordNotDefined"))));
                // line 97
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "searchEngineIcon"), "method")) {
                    // line 98
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "searchEngineIcon"), "method"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerName"), "method"), "html", null, true);
                    echo "\"/>
            ";
                }
                // line 100
                echo "            <span ";
                if ( !(isset($context["showKeyword"]) ? $context["showKeyword"] : $this->getContext($context, "showKeyword"))) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, (isset($context["keywordNotDefined"]) ? $context["keywordNotDefined"] : $this->getContext($context, "keywordNotDefined")), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerName"), "method"), "html", null, true);
                echo "</span>
            ";
                // line 101
                if ((isset($context["showKeyword"]) ? $context["showKeyword"] : $this->getContext($context, "showKeyword"))) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_Keywords")), "html", null, true);
                    echo ":
                <br/>
                <a href=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerUrl"), "method"), "html", null, true);
                    echo "\" rel=\"noreferrer\" target=\"_blank\" style=\"text-decoration:underline;\">
                    \"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method"), "html", null, true);
                    echo "\"</a>
            ";
                }
                // line 106
                echo "            ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeyword"), "method"), "html", null, true);
                $context["keyword"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 107
                echo "            ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerName"), "method"), "html", null, true);
                $context["searchName"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 108
                echo "            ";
                ob_start();
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeywordPosition"), "method"), "html", null, true);
                $context["position"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 109
                echo "            ";
                if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeywordPosition"), "method")) {
                    // line 110
                    echo "                <span title='";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_KeywordRankedOnSearchResultForThisVisitor", (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), (isset($context["searchName"]) ? $context["searchName"] : $this->getContext($context, "searchName")))), "html", null, true);
                    echo "' class='visitorRank'>
                                <span class='hash'>#</span>
                    ";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerKeywordPosition"), "method"), "html", null, true);
                    echo "
                            </span>
            ";
                }
                // line 115
                echo "        ";
            }
            // line 116
            echo "        ";
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "referrerType"), "method") == "direct")) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_DirectEntry")), "html", null, true);
            }
            // line 117
            echo "    </div>
    ";
            $context["referrerColumnContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 119
            echo "
    ";
            // line 120
            ob_start();
            // line 121
            echo "        <tr class=\"label";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["cycleIndex"]) ? $context["cycleIndex"] : $this->getContext($context, "cycleIndex"))), "html", null, true);
            echo "\">
        ";
            // line 122
            $context["cycleIndex"] = ((isset($context["cycleIndex"]) ? $context["cycleIndex"] : $this->getContext($context, "cycleIndex")) + 1);
            // line 123
            echo "            <td style=\"display:none;\"></td>
            <td class=\"label\">
                <strong title=\"";
            // line 125
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorType"), "method") == "new")) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewVisitor")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorsLastVisit", $this->getAttribute($context["visitor"], "getColumn", array(0 => "daysSinceLastVisit"), "method"))), "html", null, true);
            }
            echo "\">
                    ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "serverDatePrettyFirstAction"), "method"), "html", null, true);
            echo "
                    ";
            // line 127
            if ((isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget"))) {
                echo "<br/>";
            } else {
                echo "-";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "serverTimePrettyFirstAction"), "method"), "html", null, true);
            echo "</strong>
                ";
            // line 128
            if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitIp"), "method"))) {
                // line 129
                echo "                    <br/>
                <span title=\"";
                // line 130
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method"))) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_UserId")), "html", null, true);
                    echo ": ";
                    echo $this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method");
                }
                // line 131
                echo "
";
                // line 132
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorId"), "method"))) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitorID")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorId"), "method"), "html", null, true);
                }
                // line 133
                if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "latitude"), "method") || $this->getAttribute($context["visitor"], "getColumn", array(0 => "longitude"), "method"))) {
                    // line 134
                    echo "
";
                    // line 135
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "location"), "method"), "html", null, true);
                    echo "

GPS (lat/long): ";
                    // line 137
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "latitude"), "method"), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "longitude"), "method"), "html", null, true);
                }
                echo "\">
                    IP: ";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitIp"), "method"), "html", null, true);
                echo "
                    ";
                // line 139
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method"))) {
                    echo "<br/><br/>";
                    echo $this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method");
                }
                // line 140
                echo "
                    </span>";
            }
            // line 142
            echo "
                ";
            // line 143
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "provider"), "method")) {
                // line 144
                echo "                    <br/>
                    ";
                // line 145
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Provider_ColumnProvider")), "html", null, true);
                echo ":
                    <a href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "providerUrl"), "method"), "html", null, true);
                echo "\" rel=\"noreferrer\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "providerName"), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "providerUrl"), "method"), "html", null, true);
                echo "\" style=\"text-decoration:underline;\">
                        ";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "providerName"), "method"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 150
            echo "                ";
            if ($this->getAttribute($context["visitor"], "getColumn", array(0 => "customVariables"), "method")) {
                // line 151
                echo "                    <br/>
                    ";
                // line 152
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["visitor"], "getColumn", array(0 => "customVariables"), "method"));
                foreach ($context['_seq'] as $context["id"] => $context["customVariable"]) {
                    // line 153
                    echo "                        ";
                    $context["name"] = ("customVariableName" . $context["id"]);
                    // line 154
                    echo "                        ";
                    $context["value"] = ("customVariableValue" . $context["id"]);
                    // line 155
                    echo "                        <br/>
                        <acronym title=\"";
                    // line 156
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CustomVariables_CustomVariables")), "html", null, true);
                    echo " (index ";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo ")\">
                            ";
                    // line 157
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute($context["customVariable"], (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), 30)), "html", null, true);
                    echo "
                        </acronym>
                    ";
                    // line 159
                    if ((twig_length_filter($this->env, $this->getAttribute($context["customVariable"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array")) > 0)) {
                        echo ": ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute($context["customVariable"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array"), 50)), "html", null, true);
                    }
                    // line 160
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['customVariable'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "                ";
            }
            // line 162
            echo "                ";
            if ( !(isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn"))) {
                // line 163
                echo "                    <br/>
                    ";
                // line 164
                echo twig_escape_filter($this->env, (isset($context["visitorColumnContent"]) ? $context["visitorColumnContent"] : $this->getContext($context, "visitorColumnContent")), "html", null, true);
                echo "
                ";
            }
            // line 166
            echo "                ";
            if ( !(isset($context["displayReferrersInOwnColumn"]) ? $context["displayReferrersInOwnColumn"] : $this->getContext($context, "displayReferrersInOwnColumn"))) {
                // line 167
                echo "                    <br/>
                    ";
                // line 168
                echo twig_escape_filter($this->env, (isset($context["referrerColumnContent"]) ? $context["referrerColumnContent"] : $this->getContext($context, "referrerColumnContent")), "html", null, true);
                echo "
                ";
            }
            // line 170
            echo "            </td>

            ";
            // line 172
            if ((isset($context["displayVisitorsInOwnColumn"]) ? $context["displayVisitorsInOwnColumn"] : $this->getContext($context, "displayVisitorsInOwnColumn"))) {
                // line 173
                echo "                <td class=\"label\">
                    ";
                // line 174
                echo twig_escape_filter($this->env, (isset($context["visitorColumnContent"]) ? $context["visitorColumnContent"] : $this->getContext($context, "visitorColumnContent")), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 177
            echo "
            ";
            // line 178
            if ((isset($context["displayReferrersInOwnColumn"]) ? $context["displayReferrersInOwnColumn"] : $this->getContext($context, "displayReferrersInOwnColumn"))) {
                // line 179
                echo "                <td class=\"column\">
                    ";
                // line 180
                echo twig_escape_filter($this->env, (isset($context["referrerColumnContent"]) ? $context["referrerColumnContent"] : $this->getContext($context, "referrerColumnContent")), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 183
            echo "
            <td class=\"column ";
            // line 184
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitConverted"), "method") &&  !(isset($context["isWidget"]) ? $context["isWidget"] : $this->getContext($context, "isWidget")))) {
                echo "highlightField";
            }
            echo "\">
                <div class=\"visitor-log-page-list\">
                    ";
            // line 186
            if (( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorId"), "method")) &&  !$this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "hideProfileLink", array()))) {
                // line 187
                echo "                    <a class=\"visitor-log-visitor-profile-link\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ViewVisitorProfile")), "html", null, true);
                echo "\" data-visitor-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitorId"), "method"), "html", null, true);
                echo "\">
                        <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/> <span>";
                // line 188
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ViewVisitorProfile")), "html", null, true);
                // line 189
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method"))) {
                    echo ": ";
                    echo $this->getAttribute($context["visitor"], "getColumn", array(0 => "userId"), "method");
                }
                echo "</span>
                    </a>
                    ";
            }
            // line 192
            echo "                    <strong>
                        ";
            // line 193
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "actionDetails"), "method")), "html", null, true);
            echo "
                        ";
            // line 194
            if ((twig_length_filter($this->env, $this->getAttribute($context["visitor"], "getColumn", array(0 => "actionDetails"), "method")) <= 1)) {
                // line 195
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
                echo "
                        ";
            } else {
                // line 197
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
                echo "
                        ";
            }
            // line 199
            echo "                        ";
            if (($this->getAttribute($context["visitor"], "getColumn", array(0 => "visitDuration"), "method") > 0)) {
                echo "- ";
                echo $this->getAttribute($context["visitor"], "getColumn", array(0 => "visitDurationPretty"), "method");
            }
            // line 200
            echo "                    </strong>
                    <br/>
                    <ol class='visitorLog'>
                        ";
            // line 203
            $this->env->loadTemplate("@Live/_actionsList.twig")->display(array_merge($context, array("actionDetails" => $this->getAttribute($context["visitor"], "getColumn", array(0 => "actionDetails"), "method"))));
            // line 204
            echo "                    </ol>
                </div>
            </td>
        </tr>
    ";
            $context["visitorRow"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 209
            echo "
    ";
            // line 210
            echo twig_escape_filter($this->env, (isset($context["visitorRow"]) ? $context["visitorRow"] : $this->getContext($context, "visitorRow")), "html", null, true);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "@Live/_dataTableViz_visitorLog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  724 => 212,  708 => 210,  705 => 209,  698 => 204,  696 => 203,  691 => 200,  685 => 199,  679 => 197,  673 => 195,  671 => 194,  667 => 193,  664 => 192,  655 => 189,  653 => 188,  646 => 187,  644 => 186,  637 => 184,  634 => 183,  628 => 180,  625 => 179,  623 => 178,  620 => 177,  614 => 174,  611 => 173,  609 => 172,  605 => 170,  600 => 168,  597 => 167,  594 => 166,  589 => 164,  586 => 163,  583 => 162,  580 => 161,  574 => 160,  569 => 159,  564 => 157,  558 => 156,  555 => 155,  552 => 154,  549 => 153,  545 => 152,  542 => 151,  539 => 150,  533 => 147,  525 => 146,  521 => 145,  518 => 144,  516 => 143,  513 => 142,  509 => 140,  504 => 139,  500 => 138,  493 => 137,  488 => 135,  485 => 134,  483 => 133,  477 => 132,  474 => 131,  468 => 130,  465 => 129,  463 => 128,  453 => 127,  449 => 126,  441 => 125,  437 => 123,  435 => 122,  430 => 121,  428 => 120,  425 => 119,  421 => 117,  416 => 116,  413 => 115,  407 => 112,  401 => 110,  398 => 109,  392 => 108,  387 => 107,  382 => 106,  377 => 104,  373 => 103,  367 => 101,  356 => 100,  348 => 98,  346 => 97,  344 => 96,  342 => 95,  339 => 94,  336 => 93,  331 => 92,  327 => 91,  321 => 89,  318 => 88,  312 => 85,  305 => 83,  300 => 82,  298 => 81,  295 => 80,  293 => 79,  290 => 78,  287 => 77,  284 => 76,  281 => 75,  268 => 73,  264 => 72,  260 => 71,  257 => 70,  254 => 69,  251 => 68,  247 => 67,  244 => 66,  236 => 64,  233 => 63,  230 => 61,  223 => 59,  220 => 58,  218 => 57,  214 => 56,  209 => 54,  203 => 53,  198 => 52,  195 => 51,  192 => 49,  187 => 48,  184 => 47,  178 => 46,  174 => 45,  169 => 44,  166 => 43,  158 => 42,  154 => 41,  149 => 40,  146 => 39,  137 => 38,  134 => 37,  125 => 36,  122 => 35,  113 => 34,  111 => 33,  108 => 32,  97 => 31,  94 => 30,  91 => 29,  88 => 28,  71 => 27,  69 => 26,  61 => 21,  58 => 20,  52 => 17,  49 => 16,  46 => 15,  40 => 12,  37 => 11,  35 => 10,  30 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}
