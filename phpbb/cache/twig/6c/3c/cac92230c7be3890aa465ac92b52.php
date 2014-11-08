<?php

/* acp_styles.html */
class __TwigTemplate_6c3ccac92230c7be3890aa465ac92b52 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_STYLE_DETAILS"]) ? $context["S_STYLE_DETAILS"] : null)) {
            // line 6
            echo "\t<a href=\"";
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
";
        // line 9
        if ((isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null)) {
            // line 10
            echo "<form id=\"confirm\" method=\"post\" action=\"";
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\">

<fieldset>
\t<h1>";
            // line 13
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h1>
\t<p>";
            // line 14
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>
\t";
            // line 15
            if ((isset($context["S_CONFIRM_DELETE"]) ? $context["S_CONFIRM_DELETE"] : null)) {
                // line 16
                echo "\t<label><input type=\"checkbox\" class=\"checkbox\" name=\"confirm_delete_files\" /> ";
                echo $this->env->getExtension('phpbb')->lang("DELETE_FROM_FS");
                echo "</label>
\t";
            }
            // line 18
            echo "
\t";
            // line 19
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "

\t<div style=\"text-align: center;\">
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"button2\" />&nbsp; 
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t</div>

</fieldset>

</form>
";
        } else {
            // line 30
            echo "
";
            // line 31
            if ((isset($context["L_TITLE"]) ? $context["L_TITLE"] : null)) {
                echo "<h1>";
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</h1>";
            }
            // line 32
            echo "
";
            // line 33
            if ((isset($context["L_EXPLAIN"]) ? $context["L_EXPLAIN"] : null)) {
                echo "<p>";
                echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
                echo "</p>";
            }
            // line 34
            echo "
<form id=\"acp_styles\" method=\"post\" action=\"";
            // line 35
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
";
            // line 36
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
";
            // line 37
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "

";
            // line 39
            if ((isset($context["S_STYLE_DETAILS"]) ? $context["S_STYLE_DETAILS"] : null)) {
                // line 40
                echo "\t<input type=\"hidden\" name=\"id\" value=\"";
                echo (isset($context["STYLE_ID"]) ? $context["STYLE_ID"] : null);
                echo "\" />
\t<fieldset>
\t<dl>
\t\t<dt><label for=\"name\">";
                // line 43
                echo $this->env->getExtension('phpbb')->lang("STYLE_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"name\" name=\"style_name\" value=\"";
                // line 44
                echo (isset($context["STYLE_NAME"]) ? $context["STYLE_NAME"] : null);
                echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
                // line 47
                echo $this->env->getExtension('phpbb')->lang("STYLE_PATH");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><strong>";
                // line 48
                echo (isset($context["STYLE_PATH"]) ? $context["STYLE_PATH"] : null);
                echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"name\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("COPYRIGHT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><strong>";
                // line 52
                echo (isset($context["STYLE_COPYRIGHT"]) ? $context["STYLE_COPYRIGHT"] : null);
                echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"style_parent\">";
                // line 55
                echo $this->env->getExtension('phpbb')->lang("INHERITING_FROM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><select id=\"style_parent\" name=\"style_parent\">
\t\t\t<option value=\"\"";
                // line 57
                if (((isset($context["STYLE_PARENT"]) ? $context["STYLE_PARENT"] : null) == 0)) {
                    echo " selected=\"selected\"";
                }
                echo "> - </option>
\t\t\t";
                // line 58
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "parent_styles"));
                foreach ($context['_seq'] as $context["_key"] => $context["parent_styles"]) {
                    // line 59
                    echo "\t\t\t\t<option value=\"";
                    echo $this->getAttribute((isset($context["parent_styles"]) ? $context["parent_styles"] : null), "STYLE_ID");
                    echo "\"";
                    if (($this->getAttribute((isset($context["parent_styles"]) ? $context["parent_styles"] : null), "STYLE_ID") == (isset($context["STYLE_PARENT"]) ? $context["STYLE_PARENT"] : null))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute((isset($context["parent_styles"]) ? $context["parent_styles"] : null), "SPACER");
                    echo $this->getAttribute((isset($context["parent_styles"]) ? $context["parent_styles"] : null), "STYLE_NAME");
                    echo "</option>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent_styles'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "\t\t</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"style_active\">";
                // line 64
                echo $this->env->getExtension('phpbb')->lang("STYLE_ACTIVE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"style_active\" value=\"1\"";
                // line 65
                if ((isset($context["S_STYLE_ACTIVE"]) ? $context["S_STYLE_ACTIVE"] : null)) {
                    echo " id=\"style_active\" checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("YES");
                echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"style_active\" value=\"0\"";
                // line 66
                if ((!(isset($context["S_STYLE_ACTIVE"]) ? $context["S_STYLE_ACTIVE"] : null))) {
                    echo " id=\"style_active\" checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("NO");
                echo "</label></dd>
\t</dl>
\t";
                // line 68
                if ((!(isset($context["S_STYLE_DEFAULT"]) ? $context["S_STYLE_DEFAULT"] : null))) {
                    // line 69
                    echo "\t\t<dl>
\t\t\t<dt><label for=\"style_default\">";
                    // line 70
                    echo $this->env->getExtension('phpbb')->lang("STYLE_DEFAULT");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"style_default\" value=\"1\" /> ";
                    // line 71
                    echo $this->env->getExtension('phpbb')->lang("YES");
                    echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"style_default\" name=\"style_default\" value=\"0\" checked=\"checked\" /> ";
                    // line 72
                    echo $this->env->getExtension('phpbb')->lang("NO");
                    echo "</label></dd>
\t\t</dl>
\t";
                }
                // line 75
                echo "\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
                // line 78
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
                // line 79
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 80
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />
\t\t";
                // line 81
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t</fieldset>
";
            }
            // line 84
            echo "
";
            // line 85
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "styles_list"))) {
                // line 86
                echo "\t<table class=\"table1 styles\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 89
                echo $this->env->getExtension('phpbb')->lang("STYLE_NAME");
                echo "</th>
\t\t";
                // line 90
                if ((!(isset($context["STYLES_LIST_HIDE_COUNT"]) ? $context["STYLES_LIST_HIDE_COUNT"] : null))) {
                    echo "<th width=\"10%\" style=\"white-space: nowrap; text-align: center;\">";
                    echo $this->env->getExtension('phpbb')->lang("STYLE_USED_BY");
                    echo "</th>";
                }
                // line 91
                echo "\t\t<th width=\"25%\" style=\"white-space: nowrap; text-align: center;\">";
                echo $this->env->getExtension('phpbb')->lang("ACTIONS");
                echo "</th>
\t\t";
                // line 92
                echo (isset($context["STYLES_LIST_EXTRA"]) ? $context["STYLES_LIST_EXTRA"] : null);
                echo "
\t\t<th>&nbsp;</th>
\t</tr>
\t</thead>
\t";
                // line 96
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "styles_list"));
                foreach ($context['_seq'] as $context["_key"] => $context["styles_list"]) {
                    // line 97
                    echo "\t<tbody id=\"styles-list-";
                    echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "S_ROW_COUNT");
                    echo "\">
\t<tr";
                    // line 98
                    if (($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_ID") && (!$this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_ACTIVE")))) {
                        echo " class=\"row-inactive\"";
                    }
                    echo ">
\t\t";
                    // line 99
                    if (($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "LEVEL") % 2 == 1)) {
                        // line 100
                        echo "\t\t\t";
                        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ROW_CLASS") == "row1a")) {
                            $value = "row1b";
                            $context['definition']->set('ROW_CLASS', $value);
                        } else {
                            $value = "row1a";
                            $context['definition']->set('ROW_CLASS', $value);
                        }
                        // line 101
                        echo "\t\t";
                    } else {
                        // line 102
                        echo "\t\t\t";
                        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ROW_CLASS") == "row2a")) {
                            $value = "row2b";
                            $context['definition']->set('ROW_CLASS', $value);
                        } else {
                            $value = "row2a";
                            $context['definition']->set('ROW_CLASS', $value);
                        }
                        // line 103
                        echo "\t\t";
                    }
                    // line 104
                    echo "\t\t<td class=\"";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ROW_CLASS");
                    echo "\" style=\"padding-";
                    echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                    echo ": ";
                    echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "PADDING");
                    echo "px;\">
\t\t\t";
                    // line 105
                    if ((($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_ID") && ($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "COMMENT") == "")) && $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_ACTIVE"))) {
                        // line 106
                        echo "\t\t\t\t<div class=\"default-style\" style=\"display: none; float: ";
                        echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                        echo ";\">
\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"default\" value=\"";
                        // line 107
                        echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_ID");
                        echo "\"";
                        if ($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "DEFAULT")) {
                            echo " checked=\"checked\"";
                        } else {
                            $value = 1;
                            $context['definition']->set('S_DEFAULT', $value);
                        }
                        echo " title=\"";
                        echo $this->env->getExtension('phpbb')->lang("STYLE_DEFAULT");
                        echo "\" />
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t";
                    if (($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "DEFAULT") || $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "SHOW_COPYRIGHT"))) {
                        // line 111
                        echo "\t\t\t\t<strong>";
                        echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_NAME");
                        echo "</strong>
\t\t\t\t";
                        // line 112
                        if (($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "SHOW_COPYRIGHT") && ($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "COMMENT") == ""))) {
                            echo "<span><br />";
                            echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_COPYRIGHT");
                            echo "</span>";
                        }
                        // line 113
                        echo "\t\t\t";
                    } else {
                        // line 114
                        echo "\t\t\t\t<span>";
                        echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_NAME");
                        echo "</span>
\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t";
                    if (($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "COMMENT") != "")) {
                        // line 117
                        echo "\t\t\t\t<span class=\"error\"><br />";
                        echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "COMMENT");
                        echo "</span>
\t\t\t";
                    }
                    // line 119
                    echo "\t\t\t";
                    if (((!$this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_ID")) && ($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "COMMENT") == ""))) {
                        // line 120
                        echo "\t\t\t\t<span class=\"style-path\"><br />";
                        echo $this->env->getExtension('phpbb')->lang("STYLE_PATH");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_PATH_FULL");
                        echo "</span>
\t\t\t";
                    }
                    // line 122
                    echo "\t\t</td>
\t\t";
                    // line 123
                    if ((!(isset($context["STYLES_LIST_HIDE_COUNT"]) ? $context["STYLES_LIST_HIDE_COUNT"] : null))) {
                        // line 124
                        echo "\t\t\t<td class=\"";
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ROW_CLASS");
                        echo " users\">";
                        echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "USERS");
                        echo "</td>
\t\t";
                    }
                    // line 126
                    echo "\t\t<td class=\"";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ROW_CLASS");
                    echo " actions\">
\t\t\t";
                    // line 127
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "actions"));
                    foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
                        // line 128
                        echo "\t\t\t\t";
                        if (($this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "S_ROW_COUNT") > 0)) {
                            echo " | ";
                        }
                        // line 129
                        echo "\t\t\t\t";
                        if ($this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "U_ACTION")) {
                            // line 130
                            echo "\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "U_ACTION");
                            echo "\"";
                            echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "U_ACTION_ATTR");
                            echo ">";
                            echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION");
                            echo "</a>
\t\t\t\t";
                        }
                        // line 132
                        echo "\t\t\t\t";
                        echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "HTML");
                        echo "
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    echo "\t\t</td>
\t\t";
                    // line 135
                    echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "EXTRA");
                    echo "
\t\t<td class=\"";
                    // line 136
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ROW_CLASS");
                    echo " mark\" width=\"20\">
\t\t\t";
                    // line 137
                    if ($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_ID")) {
                        // line 138
                        echo "\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" name=\"ids[]\" value=\"";
                        echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_ID");
                        echo "\" />
\t\t\t";
                    } else {
                        // line 140
                        echo "\t\t\t\t";
                        if (($this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "COMMENT") != "")) {
                            // line 141
                            echo "\t\t\t\t\t&nbsp;
\t\t\t\t";
                        } else {
                            // line 143
                            echo "\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" name=\"dirs[]\" value=\"";
                            echo $this->getAttribute((isset($context["styles_list"]) ? $context["styles_list"] : null), "STYLE_PATH");
                            echo "\" />
\t\t\t\t";
                        }
                        // line 145
                        echo "\t\t\t";
                    }
                    // line 146
                    echo "\t\t</td>
\t</tr>
\t</tbody>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['styles_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "\t</table>
";
            }
            // line 152
            echo "
";
            // line 153
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "extra_actions"))) {
                // line 154
                echo "\t<fieldset class=\"quick\">
\t\t";
                // line 155
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "extra_actions"));
                foreach ($context['_seq'] as $context["_key"] => $context["extra_actions"]) {
                    // line 156
                    echo "\t\t\t<input type=\"submit\" name=\"";
                    echo $this->getAttribute((isset($context["extra_actions"]) ? $context["extra_actions"] : null), "ACTION_NAME");
                    echo "\" class=\"button2\" value=\"";
                    echo $this->getAttribute((isset($context["extra_actions"]) ? $context["extra_actions"] : null), "L_ACTION");
                    echo "\" />
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_actions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "\t</fieldset>
";
            }
            // line 160
            echo "
</form>

";
        }
        // line 164
        echo "
";
        // line 165
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_styles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 165,  555 => 164,  549 => 160,  545 => 158,  534 => 156,  530 => 155,  527 => 154,  525 => 153,  522 => 152,  518 => 150,  509 => 146,  506 => 145,  500 => 143,  496 => 141,  493 => 140,  487 => 138,  485 => 137,  481 => 136,  477 => 135,  474 => 134,  465 => 132,  455 => 130,  452 => 129,  447 => 128,  443 => 127,  438 => 126,  430 => 124,  428 => 123,  425 => 122,  416 => 120,  413 => 119,  407 => 117,  404 => 116,  398 => 114,  395 => 113,  389 => 112,  384 => 111,  381 => 110,  366 => 107,  361 => 106,  359 => 105,  350 => 104,  347 => 103,  338 => 102,  335 => 101,  326 => 100,  324 => 99,  318 => 98,  313 => 97,  309 => 96,  302 => 92,  297 => 91,  291 => 90,  287 => 89,  282 => 86,  280 => 85,  277 => 84,  271 => 81,  267 => 80,  263 => 79,  259 => 78,  254 => 75,  248 => 72,  244 => 71,  239 => 70,  236 => 69,  234 => 68,  225 => 66,  217 => 65,  212 => 64,  207 => 61,  191 => 59,  187 => 58,  181 => 57,  175 => 55,  169 => 52,  164 => 51,  158 => 48,  153 => 47,  147 => 44,  142 => 43,  135 => 40,  133 => 39,  128 => 37,  124 => 36,  120 => 35,  117 => 34,  111 => 33,  108 => 32,  102 => 31,  99 => 30,  89 => 23,  85 => 22,  79 => 19,  76 => 18,  70 => 16,  68 => 15,  64 => 14,  60 => 13,  53 => 10,  51 => 9,  48 => 8,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
