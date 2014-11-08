<?php

/* posting_poll_body.html */
class __TwigTemplate_c091cbb9df23c7b0a19f6712fd7484b3 extends Twig_Template
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
        echo "<div class=\"panel bg3\" id=\"poll-panel\">
\t<div class=\"inner\">

\t";
        // line 4
        if ((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null)) {
            // line 5
            echo "\t<p>";
            echo $this->env->getExtension('phpbb')->lang("ADD_POLL_EXPLAIN");
            echo "</p>
\t";
        }
        // line 7
        echo "
\t<fieldset class=\"fields2\">
\t";
        // line 9
        if ((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null)) {
            // line 10
            echo "\t\t";
            if ((isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null)) {
                // line 11
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"poll_delete\">";
                // line 12
                echo $this->env->getExtension('phpbb')->lang("POLL_DELETE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><label for=\"poll_delete\"><input type=\"checkbox\" name=\"poll_delete\" id=\"poll_delete\"";
                // line 13
                if ((isset($context["S_POLL_DELETE_CHECKED"]) ? $context["S_POLL_DELETE_CHECKED"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> </label></dd>
\t\t\t</dl>
\t\t";
            }
            // line 16
            echo "\t\t<dl>
\t\t\t<dt><label for=\"poll_title\">";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("POLL_QUESTION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"text\" name=\"poll_title\" id=\"poll_title\" maxlength=\"255\" value=\"";
            // line 18
            echo (isset($context["POLL_TITLE"]) ? $context["POLL_TITLE"] : null);
            echo "\" class=\"inputbox\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"poll_option_text\">";
            // line 21
            echo $this->env->getExtension('phpbb')->lang("POLL_OPTIONS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("POLL_OPTIONS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><textarea name=\"poll_option_text\" id=\"poll_option_text\" rows=\"5\" cols=\"35\" class=\"inputbox\">";
            // line 22
            echo (isset($context["POLL_OPTIONS"]) ? $context["POLL_OPTIONS"] : null);
            echo "</textarea></dd>
\t\t</dl>

\t\t<hr class=\"dashed\" />

\t\t<dl>
\t\t\t<dt><label for=\"poll_max_options\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("POLL_MAX_OPTIONS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"number\" min=\"0\" max=\"999\" name=\"poll_max_options\" id=\"poll_max_options\" size=\"3\" maxlength=\"3\" value=\"";
            // line 29
            echo (isset($context["POLL_MAX_OPTIONS"]) ? $context["POLL_MAX_OPTIONS"] : null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t<dd>";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("POLL_MAX_OPTIONS_EXPLAIN");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"poll_length\">";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("POLL_FOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label for=\"poll_length\"><input type=\"number\" min=\"0\" max=\"999\" name=\"poll_length\" id=\"poll_length\" size=\"3\" maxlength=\"3\" value=\"";
            // line 34
            echo (isset($context["POLL_LENGTH"]) ? $context["POLL_LENGTH"] : null);
            echo "\" class=\"inputbox autowidth\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</label></dd>
\t\t\t<dd>";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("POLL_FOR_EXPLAIN");
            echo "</dd>
\t\t</dl>

\t\t";
            // line 38
            if ((isset($context["S_POLL_VOTE_CHANGE"]) ? $context["S_POLL_VOTE_CHANGE"] : null)) {
                // line 39
                echo "\t\t\t<hr class=\"dashed\" />

\t\t\t<dl>
\t\t\t\t<dt><label for=\"poll_vote_change\">";
                // line 42
                echo $this->env->getExtension('phpbb')->lang("POLL_VOTE_CHANGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><label for=\"poll_vote_change\"><input type=\"checkbox\" id=\"poll_vote_change\" name=\"poll_vote_change\"";
                // line 43
                echo (isset($context["VOTE_CHANGE_CHECKED"]) ? $context["VOTE_CHANGE_CHECKED"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("POLL_VOTE_CHANGE_EXPLAIN");
                echo "</label></dd>
\t\t\t</dl>
\t\t";
            }
            // line 46
            echo "
\t";
        } elseif ((isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null)) {
            // line 48
            echo "\t\t<dl class=\"fields1\">
\t\t\t<dt><label for=\"poll_delete\">";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("POLL_DELETE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label for=\"poll_delete\"><input type=\"checkbox\" name=\"poll_delete\" id=\"poll_delete\"";
            // line 50
            if ((isset($context["S_POLL_DELETE_CHECKED"]) ? $context["S_POLL_DELETE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> </label></dd>
\t\t</dl>
\t";
        }
        // line 53
        echo "\t</fieldset>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_poll_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  139 => 46,  131 => 43,  119 => 38,  107 => 34,  96 => 30,  71 => 21,  65 => 18,  60 => 17,  49 => 13,  41 => 11,  32 => 7,  26 => 5,  166 => 70,  130 => 59,  87 => 28,  79 => 29,  69 => 24,  63 => 21,  43 => 11,  39 => 10,  320 => 99,  317 => 98,  300 => 96,  296 => 95,  278 => 90,  271 => 88,  269 => 87,  265 => 86,  261 => 85,  257 => 84,  237 => 78,  234 => 77,  228 => 75,  226 => 74,  218 => 72,  214 => 71,  209 => 70,  203 => 68,  201 => 67,  197 => 66,  193 => 65,  189 => 64,  185 => 80,  176 => 57,  172 => 73,  170 => 54,  167 => 53,  143 => 48,  136 => 61,  125 => 33,  110 => 30,  98 => 27,  94 => 26,  90 => 25,  82 => 23,  74 => 21,  70 => 20,  62 => 18,  58 => 17,  54 => 16,  25 => 5,  645 => 187,  641 => 185,  635 => 182,  630 => 181,  627 => 180,  625 => 179,  622 => 178,  618 => 176,  612 => 174,  610 => 173,  604 => 172,  599 => 171,  595 => 169,  593 => 168,  590 => 167,  584 => 164,  578 => 163,  573 => 162,  570 => 161,  568 => 160,  565 => 159,  542 => 156,  533 => 155,  530 => 154,  528 => 153,  525 => 152,  521 => 150,  519 => 149,  516 => 148,  506 => 146,  503 => 145,  495 => 143,  492 => 142,  484 => 140,  481 => 139,  473 => 137,  470 => 136,  462 => 134,  459 => 133,  451 => 131,  448 => 130,  440 => 128,  437 => 127,  436 => 126,  430 => 122,  428 => 121,  425 => 120,  420 => 117,  414 => 114,  411 => 113,  408 => 112,  401 => 108,  397 => 106,  395 => 105,  391 => 104,  381 => 102,  379 => 101,  376 => 100,  366 => 93,  357 => 92,  350 => 91,  344 => 90,  340 => 89,  336 => 88,  331 => 85,  329 => 84,  326 => 83,  321 => 80,  319 => 79,  316 => 78,  314 => 77,  310 => 75,  309 => 74,  295 => 71,  291 => 69,  290 => 94,  286 => 66,  283 => 65,  276 => 89,  262 => 62,  259 => 61,  252 => 83,  247 => 56,  238 => 54,  236 => 53,  231 => 52,  224 => 50,  219 => 48,  211 => 46,  208 => 45,  205 => 44,  186 => 63,  182 => 41,  177 => 40,  175 => 39,  171 => 37,  159 => 53,  156 => 35,  152 => 52,  149 => 64,  146 => 49,  132 => 30,  128 => 29,  126 => 42,  114 => 31,  106 => 41,  101 => 22,  100 => 21,  97 => 20,  91 => 32,  83 => 30,  78 => 22,  73 => 10,  50 => 15,  42 => 8,  33 => 8,  28 => 3,  306 => 84,  301 => 81,  287 => 93,  284 => 92,  270 => 78,  267 => 63,  253 => 76,  246 => 81,  243 => 80,  230 => 70,  227 => 51,  222 => 73,  216 => 63,  202 => 62,  199 => 61,  187 => 54,  179 => 49,  174 => 48,  169 => 46,  165 => 45,  160 => 69,  158 => 41,  155 => 34,  141 => 39,  138 => 38,  124 => 37,  121 => 39,  113 => 35,  109 => 25,  104 => 23,  102 => 33,  95 => 24,  92 => 29,  86 => 24,  81 => 14,  76 => 16,  68 => 14,  66 => 19,  57 => 16,  55 => 16,  52 => 8,  44 => 12,  36 => 9,  34 => 3,  31 => 4,  38 => 10,  24 => 4,  22 => 2,  19 => 1,);
    }
}
