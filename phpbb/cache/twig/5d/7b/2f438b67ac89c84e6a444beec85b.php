<?php

/* forumlist_body.html */
class __TwigTemplate_5d7b2f438b67ac89c84e6a444beec85b extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if ((($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_CAT") && (!$this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_FIRST_ROW"))) || $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_NO_CAT"))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            // line 11
            echo "\t";
            if ((($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_CAT") || $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_FIRST_ROW")) || $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_NO_CAT"))) {
                // line 12
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 17
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_CAT")) {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_VIEWFORUM");
                    echo "\">";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_NAME");
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 18
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 26
            echo "\t";
            // line 27
            echo "
\t";
            // line 28
            if ((!$this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_CAT"))) {
                // line 29
                echo "\t\t";
                // line 30
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 31
                // line 32
                echo "\t\t\t<dl class=\"icon ";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_IMG_STYLE");
                echo "\">
\t\t\t\t<dt title=\"";
                // line 33
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_FOLDER_IMG_ALT");
                echo "\">
\t\t\t\t\t";
                // line 34
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_UNREAD_FORUM")) {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_VIEWFORUM");
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 35
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 36
                if (((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null) && $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_FEED_ENABLED"))) {
                    echo "<!-- <a class=\"feed-icon-forum\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_NAME");
                    echo "\" href=\"";
                    echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                    echo "?f=";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_ID");
                    echo "\"><img src=\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/feed.gif\" alt=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_NAME");
                    echo "\" /></a> -->";
                }
                // line 37
                echo "
\t\t\t\t\t\t";
                // line 38
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_IMAGE")) {
                    echo "<span class=\"forum-image\">";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_IMAGE");
                    echo "</span>";
                }
                // line 39
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_VIEWFORUM");
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_NAME");
                echo "</a>
\t\t\t\t\t\t";
                // line 40
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_DESC")) {
                    echo "<br />";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "FORUM_DESC");
                }
                // line 41
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "MODERATORS")) {
                    // line 42
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "L_MODERATOR_STR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "MODERATORS");
                    echo "
\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "subforum")) && $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_LIST_SUBFORUMS"))) {
                    // line 45
                    echo "\t\t\t\t\t\t\t";
                    // line 46
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "L_SUBFORUM_STR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 47
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "subforum"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute((isset($context["subforum"]) ? $context["subforum"] : null), "U_SUBFORUM");
                        echo "\" class=\"subforum";
                        if ($this->getAttribute((isset($context["subforum"]) ? $context["subforum"] : null), "S_UNREAD")) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute((isset($context["subforum"]) ? $context["subforum"] : null), "UNREAD")) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo $this->getAttribute((isset($context["subforum"]) ? $context["subforum"] : null), "SUBFORUM_NAME");
                        echo "</a>";
                        if ((!$this->getAttribute((isset($context["subforum"]) ? $context["subforum"] : null), "S_LAST_ROW"))) {
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        }
                        // line 49
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "\t\t\t\t\t\t\t";
                    // line 51
                    echo "\t\t\t\t\t\t";
                }
                // line 52
                echo "
\t\t\t\t\t\t";
                // line 53
                if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                    // line 54
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 55
                    if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "CLICKS")) {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "CLICKS");
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (((!$this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_LINK")) && $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "TOPICS"))) {
                        // line 58
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "TOPICS");
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 60
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 64
                if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "CLICKS")) {
                    // line 65
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "CLICKS");
                    echo "</span></dd>
\t\t\t\t";
                } elseif ((!$this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_IS_LINK"))) {
                    // line 67
                    echo "\t\t\t\t\t<dd class=\"topics\">";
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "TOPICS");
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 68
                    echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "POSTS");
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 70
                    if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_UNAPPROVED_TOPICS")) {
                        // line 71
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_UNAPPROVED_TOPICS");
                        echo "\">";
                        echo (isset($context["UNAPPROVED_IMG"]) ? $context["UNAPPROVED_IMG"] : null);
                        echo "</a>
\t\t\t\t\t\t";
                    } elseif ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_UNAPPROVED_POSTS")) {
                        // line 73
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_UNAPPROVED_POSTS");
                        echo "\">";
                        echo (isset($context["UNAPPROVED_POST_IMG"]) ? $context["UNAPPROVED_POST_IMG"] : null);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "LAST_POST_TIME")) {
                        echo "<dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t";
                        // line 76
                        if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_DISPLAY_SUBJECT")) {
                            // line 77
                            echo "\t\t\t\t\t\t\t";
                            // line 78
                            echo "\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_LAST_POST");
                            echo "\" title=\"";
                            echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "LAST_POST_SUBJECT");
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "LAST_POST_SUBJECT_TRUNCATED");
                            echo "</a> <br />
\t\t\t\t\t\t";
                        }
                        // line 79
                        echo " 
\t\t\t\t\t\t";
                        // line 80
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "LAST_POSTER_FULL");
                        echo "
\t\t\t\t\t\t";
                        // line 81
                        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                            echo "<a href=\"";
                            echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "U_LAST_POST");
                            echo "\">";
                            echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                            echo "</a> ";
                        }
                        echo "<br />";
                        echo $this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "LAST_POST_TIME");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "<br />&nbsp;";
                    }
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 84
                echo "\t\t\t</dl>
\t\t\t";
                // line 85
                // line 86
                echo "\t\t</li>
\t\t";
                // line 87
                // line 88
                echo "\t";
            }
            // line 89
            echo "
\t";
            // line 90
            if ($this->getAttribute((isset($context["forumrow"]) ? $context["forumrow"] : null), "S_LAST_ROW")) {
                // line 91
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 95
                // line 96
                echo "\t";
            }
            // line 97
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 99
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 101,  368 => 99,  362 => 97,  359 => 96,  358 => 95,  352 => 91,  350 => 90,  347 => 89,  344 => 88,  343 => 87,  340 => 86,  339 => 85,  336 => 84,  318 => 81,  312 => 80,  309 => 79,  299 => 78,  295 => 76,  288 => 75,  280 => 73,  270 => 70,  263 => 68,  256 => 67,  247 => 65,  245 => 64,  241 => 62,  237 => 60,  228 => 58,  219 => 56,  214 => 54,  209 => 52,  206 => 51,  204 => 50,  198 => 49,  177 => 48,  173 => 47,  167 => 46,  165 => 45,  162 => 44,  153 => 42,  138 => 39,  132 => 38,  129 => 37,  111 => 36,  108 => 35,  102 => 34,  98 => 33,  93 => 32,  89 => 30,  85 => 28,  82 => 27,  80 => 26,  67 => 19,  51 => 17,  44 => 12,  41 => 11,  40 => 10,  37 => 9,  30 => 4,  27 => 3,  22 => 2,  297 => 77,  294 => 71,  293 => 70,  290 => 69,  285 => 66,  284 => 65,  273 => 64,  272 => 71,  267 => 61,  264 => 60,  262 => 59,  259 => 58,  254 => 55,  252 => 54,  226 => 53,  225 => 52,  220 => 50,  217 => 55,  215 => 48,  212 => 53,  207 => 44,  205 => 43,  196 => 42,  185 => 41,  184 => 40,  181 => 39,  169 => 38,  166 => 37,  164 => 36,  161 => 35,  160 => 34,  157 => 33,  150 => 41,  145 => 40,  139 => 26,  136 => 25,  128 => 23,  126 => 22,  119 => 21,  112 => 20,  97 => 18,  92 => 31,  90 => 16,  87 => 29,  75 => 14,  72 => 13,  71 => 20,  63 => 18,  60 => 8,  58 => 7,  57 => 6,  54 => 5,  48 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
