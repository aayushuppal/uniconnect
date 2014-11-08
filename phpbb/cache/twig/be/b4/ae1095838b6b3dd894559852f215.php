<?php

/* jumpbox.html */
class __TwigTemplate_beb4ae1095838b6b3dd894559852f215 extends Twig_Template
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
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 3
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FORUM");
            echo "</a></p>
";
        } elseif ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
            // line 5
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_INDEX");
            echo "</a></p>
";
        } elseif ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 7
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } elseif ((isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null)) {
            // line 9
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 11
        echo "
";
        // line 12
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 13
            echo "
\t<div class=\"dropdown-container dropdown-container-";
            // line 14
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            if ((!(isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null))) {
                echo " dropdown-up";
            }
            echo " dropdown-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " dropdown-button-control\" id=\"jumpbox\">
\t\t<span title=\"";
            // line 15
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo "\" class=\"dropdown-trigger button dropdown-select\">
\t\t\t";
            // line 16
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            // line 17
            echo "\t\t</span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums"));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 22
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "FORUM_ID") != (-1))) {
                    // line 23
                    echo "\t\t\t\t\t<li>";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "level"));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "&nbsp; &nbsp;";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "LINK");
                    echo "\">";
                    echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "FORUM_NAME");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t</ul>
\t\t</div>
\t</div>

";
        } else {
            // line 31
            echo "\t<br /><br />
";
        }
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 31,  137 => 26,  131 => 25,  114 => 23,  111 => 22,  107 => 21,  101 => 17,  93 => 16,  83 => 15,  71 => 13,  69 => 12,  66 => 11,  54 => 9,  44 => 7,  24 => 3,  22 => 2,  124 => 41,  112 => 40,  97 => 30,  91 => 27,  84 => 24,  80 => 22,  74 => 14,  70 => 17,  68 => 16,  62 => 13,  57 => 11,  49 => 6,  45 => 5,  42 => 4,  34 => 5,  31 => 2,  19 => 1,);
    }
}
