<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_7239859d608c5a6d00a7ea60b492fd23 extends Twig_Template
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
        if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && ((((((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null) || (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) || (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) || (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) || (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) || (isset($context["S_DISPLAY_TOPIC_TOOLS"]) ? $context["S_DISPLAY_TOPIC_TOOLS"] : null)))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("TOPIC_TOOLS");
            echo "\" class=\"button icon-button tools-icon dropdown-trigger dropdown-select\"></span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 7
            // line 8
            echo "\t\t\t\t";
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 9
                echo "\t\t\t\t\t<li class=\"small-icon icon-";
                if ((isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 10
                echo (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ((!(isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null))) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_TOPIC_TOGGLE"]) ? $context["S_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_TOPIC_TOGGLE"]) ? $context["U_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-update-all=\".watch-topic-link\">";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t";
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 14
                echo "\t\t\t\t\t<li class=\"small-icon icon-bookmark\">
\t\t\t\t\t\t<a href=\"";
                // line 15
                echo (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null);
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                echo (isset($context["S_BOOKMARK_TOGGLE"]) ? $context["S_BOOKMARK_TOGGLE"] : null);
                echo "\" data-update-all=\".bookmark-link\">";
                echo (isset($context["S_BOOKMARK_TOPIC"]) ? $context["S_BOOKMARK_TOPIC"] : null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-bump\"><a href=\"";
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\">";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t";
            if ((isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-sendemail\"><a href=\"";
                echo (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t";
            if ((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                echo (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\">";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t";
            // line 22
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 21,  93 => 19,  82 => 18,  67 => 14,  64 => 13,  44 => 10,  35 => 9,  32 => 8,  24 => 3,  21 => 2,  1443 => 396,  1440 => 395,  1434 => 392,  1422 => 391,  1419 => 390,  1417 => 389,  1414 => 388,  1402 => 387,  1401 => 386,  1396 => 383,  1392 => 381,  1386 => 379,  1383 => 378,  1370 => 377,  1368 => 376,  1364 => 375,  1361 => 374,  1359 => 373,  1356 => 372,  1350 => 368,  1335 => 366,  1331 => 365,  1327 => 364,  1318 => 360,  1311 => 359,  1309 => 358,  1306 => 357,  1294 => 356,  1290 => 354,  1289 => 353,  1286 => 352,  1282 => 350,  1276 => 349,  1259 => 348,  1257 => 347,  1254 => 346,  1253 => 345,  1249 => 343,  1248 => 342,  1245 => 341,  1239 => 337,  1234 => 335,  1226 => 334,  1218 => 333,  1216 => 332,  1210 => 330,  1208 => 329,  1205 => 328,  1191 => 326,  1189 => 325,  1186 => 324,  1181 => 322,  1170 => 316,  1164 => 312,  1163 => 311,  1160 => 310,  1151 => 309,  1149 => 308,  1143 => 307,  1140 => 306,  1136 => 304,  1127 => 303,  1123 => 302,  1120 => 301,  1116 => 299,  1107 => 298,  1103 => 297,  1100 => 296,  1097 => 295,  1090 => 294,  1089 => 293,  1086 => 292,  1082 => 290,  1073 => 288,  1069 => 287,  1064 => 285,  1060 => 283,  1058 => 282,  1053 => 280,  1050 => 279,  1042 => 276,  1039 => 275,  1037 => 274,  1034 => 273,  1027 => 269,  1023 => 268,  1019 => 267,  1015 => 266,  1011 => 265,  1005 => 263,  998 => 259,  994 => 258,  990 => 257,  986 => 256,  982 => 255,  976 => 253,  974 => 252,  955 => 250,  952 => 249,  949 => 248,  945 => 246,  943 => 245,  933 => 242,  930 => 241,  927 => 240,  917 => 237,  914 => 236,  911 => 235,  901 => 232,  898 => 231,  895 => 230,  885 => 227,  882 => 226,  879 => 225,  869 => 222,  866 => 221,  863 => 220,  853 => 217,  850 => 216,  847 => 215,  846 => 214,  843 => 213,  840 => 212,  838 => 211,  816 => 209,  806 => 207,  803 => 206,  797 => 203,  793 => 202,  788 => 201,  782 => 198,  778 => 197,  773 => 196,  770 => 195,  768 => 194,  762 => 190,  760 => 189,  753 => 184,  747 => 183,  743 => 181,  741 => 180,  734 => 178,  716 => 177,  712 => 175,  709 => 174,  705 => 173,  702 => 172,  698 => 171,  689 => 167,  683 => 165,  680 => 164,  677 => 163,  676 => 162,  673 => 161,  671 => 160,  665 => 159,  654 => 157,  651 => 156,  646 => 155,  645 => 154,  642 => 153,  634 => 151,  631 => 150,  629 => 149,  626 => 148,  616 => 147,  606 => 146,  589 => 145,  586 => 144,  576 => 143,  572 => 141,  564 => 140,  561 => 139,  559 => 138,  556 => 137,  543 => 136,  540 => 135,  539 => 134,  524 => 132,  516 => 131,  488 => 128,  478 => 126,  475 => 125,  473 => 124,  469 => 123,  466 => 122,  457 => 116,  453 => 115,  446 => 111,  443 => 110,  435 => 107,  431 => 105,  429 => 104,  426 => 103,  420 => 100,  416 => 98,  414 => 97,  405 => 94,  398 => 92,  395 => 91,  389 => 90,  388 => 89,  375 => 87,  352 => 86,  326 => 85,  314 => 84,  296 => 83,  294 => 82,  290 => 81,  276 => 78,  272 => 77,  262 => 71,  260 => 70,  255 => 67,  251 => 65,  245 => 63,  242 => 62,  229 => 61,  227 => 60,  216 => 59,  213 => 58,  211 => 57,  208 => 56,  200 => 51,  192 => 50,  186 => 49,  182 => 48,  177 => 46,  174 => 45,  172 => 44,  169 => 43,  157 => 42,  153 => 40,  152 => 39,  149 => 38,  145 => 36,  139 => 35,  122 => 34,  120 => 33,  117 => 22,  116 => 31,  110 => 27,  104 => 20,  99 => 21,  94 => 20,  86 => 18,  84 => 17,  75 => 14,  73 => 13,  70 => 15,  57 => 9,  54 => 8,  52 => 7,  49 => 6,  43 => 5,  34 => 3,  31 => 7,  19 => 1,);
    }
}
