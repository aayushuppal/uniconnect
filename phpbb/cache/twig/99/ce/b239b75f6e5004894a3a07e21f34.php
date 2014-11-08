<?php

/* acp_ext_list.html */
class __TwigTemplate_99ceb239b75f6e5004894a3a07e21f34 extends Twig_Template
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

\t<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_EXPLAIN");
        echo "</p>

\t<fieldset class=\"quick\">
\t\t<span class=\"small\"><a href=\"";
        // line 10
        echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE_ALL");
        echo "</a> &bull; <a href=\"javascript:phpbb.toggleDisplay('version_check_settings');\">";
        echo $this->env->getExtension('phpbb')->lang("SETTINGS");
        echo "</a></span>
\t</fieldset>

\t<form id=\"version_check_settings\" method=\"post\" action=\"";
        // line 13
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\" style=\"display:none\">

\t<fieldset>
\t\t<legend>";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_VERSION_CHECK_SETTINGS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"force_unstable\">";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("FORCE_UNSTABLE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" id=\"force_unstable\" name=\"force_unstable\" class=\"radio\" value=\"1\"";
        // line 20
        if ((isset($context["FORCE_UNSTABLE"]) ? $context["FORCE_UNSTABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"force_unstable\" class=\"radio\" value=\"0\"";
        // line 21
        if ((!(isset($context["FORCE_UNSTABLE"]) ? $context["FORCE_UNSTABLE"] : null))) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" name=\"reset\" value=\"";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"set_config_version_check_force_unstable\" />
\t\t\t";
        // line 29
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t</p>
\t</fieldset>
\t</form>

\t<table class=\"table1\">
\t\t<col class=\"row1\" ><col class=\"row1\" ><col class=\"row2\" ><col class=\"row2\" >
\t<thead>
\t\t<tr>
\t\t\t<th>";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_NAME");
        echo "</th>
\t\t\t<th style=\"text-align: center; width: 20%;\">";
        // line 39
        echo $this->env->getExtension('phpbb')->lang("CURRENT_VERSION");
        echo "</th>
\t\t\t<th style=\"text-align: center; width: 10%;\">";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_OPTIONS");
        echo "</th>
\t\t\t<th style=\"text-align: center; width: 25%;\">";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_ACTIONS");
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 45
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "enabled"))) {
            // line 46
            echo "\t\t<tr>
\t\t\t<td class=\"row3\" colspan=\"4\"><strong>";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ENABLED");
            echo "</strong></td>
\t\t</tr>
\t\t";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "enabled"));
            foreach ($context['_seq'] as $context["_key"] => $context["enabled"]) {
                // line 50
                echo "\t\t<tr class=\"ext_enabled\">
\t\t\t<td><strong>";
                // line 51
                echo $this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "META_DISPLAY_NAME");
                echo "</strong></td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 53
                if ($this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "S_VERSIONCHECK")) {
                    // line 54
                    echo "\t\t\t\t<strong ";
                    if ($this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "S_UP_TO_DATE")) {
                        echo "style=\"color: #228822;\"";
                    } else {
                        echo "style=\"color: #BC2A4D;\"";
                    }
                    echo ">";
                    echo $this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "META_VERSION");
                    echo "</strong>
\t\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t";
                    echo $this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "META_VERSION");
                    echo "
\t\t\t\t";
                }
                // line 58
                echo "\t\t\t</td>
\t\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 59
                echo $this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "U_DETAILS");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DETAILS");
                echo "</a></td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 61
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["enabled"]) ? $context["enabled"] : null), "actions"));
                foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
                    // line 62
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "U_ACTION");
                    echo "\"";
                    if ($this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION_EXPLAIN")) {
                        echo " title=\"";
                        echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION_EXPLAIN");
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION");
                    echo "</a>
\t\t\t\t\t";
                    // line 63
                    if ((!$this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "S_LAST_ROW"))) {
                        echo "&nbsp;|&nbsp;";
                    }
                    // line 64
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "\t\t\t</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enabled'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t";
        }
        // line 69
        echo "
\t\t";
        // line 70
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "disabled"))) {
            // line 71
            echo "\t\t<tr>
\t\t\t<td class=\"row3\" colspan=\"4\"><strong>";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_DISABLED");
            echo "</strong></td>
\t\t</tr>
\t\t";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "disabled"));
            foreach ($context['_seq'] as $context["_key"] => $context["disabled"]) {
                // line 75
                echo "\t\t<tr class=\"ext_disabled\">
\t\t\t<td><strong>";
                // line 76
                echo $this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "META_DISPLAY_NAME");
                echo "</strong></td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 78
                if ($this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "S_VERSIONCHECK")) {
                    // line 79
                    echo "\t\t\t\t<strong ";
                    if ($this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "S_UP_TO_DATE")) {
                        echo "style=\"color: #228822;\"";
                    } else {
                        echo "style=\"color: #BC2A4D;\"";
                    }
                    echo ">";
                    echo $this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "META_VERSION");
                    echo "</strong>
\t\t\t\t";
                } else {
                    // line 81
                    echo "\t\t\t\t";
                    echo $this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "META_VERSION");
                    echo "
\t\t\t\t";
                }
                // line 83
                echo "\t\t\t</td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 85
                if ($this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "U_DETAILS")) {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "U_DETAILS");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("DETAILS");
                    echo "</a>";
                }
                // line 86
                echo "\t\t\t</td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 88
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["disabled"]) ? $context["disabled"] : null), "actions"));
                foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
                    // line 89
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "U_ACTION");
                    echo "\"";
                    if ($this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION_EXPLAIN")) {
                        echo " title=\"";
                        echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION_EXPLAIN");
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "L_ACTION");
                    echo "</a>
\t\t\t\t\t";
                    // line 90
                    if ((!$this->getAttribute((isset($context["actions"]) ? $context["actions"] : null), "S_LAST_ROW"))) {
                        echo "&nbsp;|&nbsp;";
                    }
                    // line 91
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "\t\t\t</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disabled'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t";
        }
        // line 96
        echo "\t</tbody>
\t</table>

\t<table class=\"table1\">
\t<tr>
\t\t<th>";
        // line 101
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_UPDATE_HEADLINE");
        echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row3\">";
        // line 104
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_UPDATE_EXPLAIN");
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>";
        // line 107
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_REMOVE_HEADLINE");
        echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row3\">";
        // line 110
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_REMOVE_EXPLAIN");
        echo "</td>
\t</tr>
\t</tbody>
\t</table>

";
        // line 115
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
        return "acp_ext_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 115,  348 => 110,  342 => 107,  336 => 104,  330 => 101,  323 => 96,  320 => 95,  312 => 92,  306 => 91,  302 => 90,  289 => 89,  285 => 88,  281 => 86,  273 => 85,  269 => 83,  263 => 81,  251 => 79,  249 => 78,  244 => 76,  241 => 75,  237 => 74,  232 => 72,  229 => 71,  227 => 70,  224 => 69,  221 => 68,  213 => 65,  207 => 64,  203 => 63,  190 => 62,  186 => 61,  179 => 59,  176 => 58,  170 => 56,  158 => 54,  156 => 53,  151 => 51,  148 => 50,  144 => 49,  139 => 47,  136 => 46,  134 => 45,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  103 => 29,  98 => 27,  94 => 26,  82 => 21,  74 => 20,  68 => 18,  63 => 16,  57 => 13,  47 => 10,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
