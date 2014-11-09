<?php

/* acp_forums.html */
class __TwigTemplate_69a00b523d9117726b968875ddff2177 extends Twig_Template
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
        if ((isset($context["S_EDIT_FORUM"]) ? $context["S_EDIT_FORUM"] : null)) {
            // line 6
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\t/**
\t\t* Handle displaying/hiding several options based on the forum type
\t\t*/
\t\tfunction display_options(value)
\t\t{
\t\t\t";
            // line 14
            if (((!(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null)) && (isset($context["S_FORUM_ORIG_POST"]) ? $context["S_FORUM_ORIG_POST"] : null))) {
                // line 15
                echo "\t\t\t\tif (value == ";
                echo (isset($context["FORUM_POST"]) ? $context["FORUM_POST"] : null);
                echo ")
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('type_actions', -1);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('type_actions', 1);
\t\t\t\t}
\t\t\t";
            }
            // line 24
            echo "
\t\t\t";
            // line 25
            if ((((!(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null)) && (isset($context["S_FORUM_ORIG_CAT"]) ? $context["S_FORUM_ORIG_CAT"] : null)) && (isset($context["S_HAS_SUBFORUMS"]) ? $context["S_HAS_SUBFORUMS"] : null))) {
                // line 26
                echo "\t\t\t\tif (value == ";
                echo (isset($context["FORUM_LINK"]) ? $context["FORUM_LINK"] : null);
                echo ")
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', 1);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', -1);
\t\t\t\t}
\t\t\t";
            }
            // line 35
            echo "
\t\t\tif (value == ";
            // line 36
            echo (isset($context["FORUM_POST"]) ? $context["FORUM_POST"] : null);
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t}
\t\t\telse if (value == ";
            // line 43
            echo (isset($context["FORUM_LINK"]) ? $context["FORUM_LINK"] : null);
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t}
\t\t\telse if (value == ";
            // line 50
            echo (isset($context["FORUM_CAT"]) ? $context["FORUM_CAT"] : null);
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', 1);
\t\t\t}
\t\t}

\t\t/**
\t\t* Init the wanted display functionality if javascript is enabled.
\t\t* If javascript is not available, the user is still able to properly administer.
\t\t*/
\t\tonload = function()
\t\t{
\t\t\t";
            // line 65
            if (((!(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null)) && (isset($context["S_FORUM_ORIG_POST"]) ? $context["S_FORUM_ORIG_POST"] : null))) {
                // line 66
                echo "\t\t\t\t";
                if ((isset($context["S_FORUM_POST"]) ? $context["S_FORUM_POST"] : null)) {
                    // line 67
                    echo "\t\t\t\t\tphpbb.toggleDisplay('type_actions', -1);
\t\t\t\t";
                }
                // line 69
                echo "\t\t\t";
            }
            // line 70
            echo "
\t\t\t";
            // line 71
            if ((((!(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null)) && (isset($context["S_FORUM_ORIG_CAT"]) ? $context["S_FORUM_ORIG_CAT"] : null)) && (isset($context["S_HAS_SUBFORUMS"]) ? $context["S_HAS_SUBFORUMS"] : null))) {
                // line 72
                echo "\t\t\t\t";
                if ((isset($context["S_FORUM_CAT"]) ? $context["S_FORUM_CAT"] : null)) {
                    // line 73
                    echo "\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', -1);
\t\t\t\t";
                }
                // line 75
                echo "\t\t\t";
            }
            // line 76
            echo "
\t\t\t";
            // line 77
            if ((!(isset($context["S_FORUM_POST"]) ? $context["S_FORUM_POST"] : null))) {
                // line 78
                echo "\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t";
            }
            // line 80
            echo "
\t\t\t";
            // line 81
            if ((!(isset($context["S_FORUM_CAT"]) ? $context["S_FORUM_CAT"] : null))) {
                // line 82
                echo "\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t";
            }
            // line 84
            echo "
\t\t\t";
            // line 85
            if ((!(isset($context["S_FORUM_LINK"]) ? $context["S_FORUM_LINK"] : null))) {
                // line 86
                echo "\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t";
            }
            // line 88
            echo "
\t\t\t";
            // line 89
            if ((isset($context["S_FORUM_LINK"]) ? $context["S_FORUM_LINK"] : null)) {
                // line 90
                echo "\t\t\tphpbb.toggleDisplay('forum_rules_options', -1);
\t\t\t";
            }
            // line 92
            echo "\t\t}

\t// ]]>
\t</script>

\t<a href=\"";
            // line 97
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 99
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo " ";
            if ((isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null)) {
                echo ":: ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
            }
            echo "</h1>

\t<p>";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("FORUM_EDIT_EXPLAIN");
            echo "</p>

\t";
            // line 103
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 104
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 105
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 106
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 109
            echo "
\t<form id=\"forumedit\" method=\"post\" action=\"";
            // line 110
            echo (isset($context["U_EDIT_ACTION"]) ? $context["U_EDIT_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("FORUM_SETTINGS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"forum_type\">";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("FORUM_TYPE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"forum_type\" name=\"forum_type\" onchange=\"display_options(this.options[this.selectedIndex].value);\">";
            // line 116
            echo (isset($context["S_FORUM_TYPE_OPTIONS"]) ? $context["S_FORUM_TYPE_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t";
            // line 118
            if (((!(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null)) && (isset($context["S_FORUM_ORIG_POST"]) ? $context["S_FORUM_ORIG_POST"] : null))) {
                // line 119
                echo "\t<div id=\"type_actions\">
\t\t<dl>
\t\t\t<dt><label for=\"type_action\">";
                // line 121
                echo $this->env->getExtension('phpbb')->lang("DECIDE_MOVE_DELETE_CONTENT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"type_action\" value=\"delete\"";
                // line 122
                if ((!(isset($context["S_MOVE_FORUM_OPTIONS"]) ? $context["S_MOVE_FORUM_OPTIONS"] : null))) {
                    echo " checked=\"checked\" id=\"type_action\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("DELETE_ALL_POSTS");
                echo "</label></dd>
\t\t\t";
                // line 123
                if ((isset($context["S_MOVE_FORUM_OPTIONS"]) ? $context["S_MOVE_FORUM_OPTIONS"] : null)) {
                    echo "<dd><label><input type=\"radio\" class=\"radio\" name=\"type_action\" id=\"type_action\" value=\"move\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_POSTS_TO");
                    echo "</label> <select name=\"to_forum_id\">";
                    echo (isset($context["S_MOVE_FORUM_OPTIONS"]) ? $context["S_MOVE_FORUM_OPTIONS"] : null);
                    echo "</select></dd>";
                }
                // line 124
                echo "\t\t</dl>
\t</div>
\t";
            }
            // line 127
            echo "\t";
            if ((((!(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null)) && (isset($context["S_FORUM_ORIG_CAT"]) ? $context["S_FORUM_ORIG_CAT"] : null)) && (isset($context["S_HAS_SUBFORUMS"]) ? $context["S_HAS_SUBFORUMS"] : null))) {
                // line 128
                echo "\t<div id=\"cat_to_link_actions\">
\t\t<dl>
\t\t\t<dt><label for=\"action_subforums\">";
                // line 130
                echo $this->env->getExtension('phpbb')->lang("DECIDE_MOVE_DELETE_SUBFORUMS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t";
                // line 131
                if ((isset($context["S_FORUMS_LIST"]) ? $context["S_FORUMS_LIST"] : null)) {
                    // line 132
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"action_subforums\" name=\"action_subforums\" value=\"move\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_SUBFORUMS_TO");
                    echo "</label> <select name=\"subforums_to_id\">";
                    echo (isset($context["S_FORUMS_LIST"]) ? $context["S_FORUMS_LIST"] : null);
                    echo "</select></dd>
\t\t\t";
                } else {
                    // line 134
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"action_subforums\" name=\"action_subforums\" value=\"delete\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_SUBFORUMS");
                    echo "</label></dd>
\t\t\t";
                }
                // line 136
                echo "\t\t</dl>
\t</div>
\t";
            }
            // line 139
            echo "\t<dl>
\t\t<dt><label for=\"parent\">";
            // line 140
            echo $this->env->getExtension('phpbb')->lang("FORUM_PARENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"parent\" name=\"forum_parent_id\"><option value=\"0\"";
            // line 141
            if ((!(isset($context["S_FORUM_PARENT_ID"]) ? $context["S_FORUM_PARENT_ID"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("NO_PARENT");
            echo "</option>";
            echo (isset($context["S_PARENT_OPTIONS"]) ? $context["S_PARENT_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t";
            // line 143
            if ((isset($context["S_CAN_COPY_PERMISSIONS"]) ? $context["S_CAN_COPY_PERMISSIONS"] : null)) {
                // line 144
                echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_perm_from\">";
                // line 145
                echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><select id=\"forum_perm_from\" name=\"forum_perm_from\"><option value=\"0\">";
                // line 146
                echo $this->env->getExtension('phpbb')->lang("NO_PERMISSIONS");
                echo "</option>";
                echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>
\t";
            }
            // line 149
            echo "\t<dl>
\t\t<dt><label for=\"forum_name\">";
            // line 150
            echo $this->env->getExtension('phpbb')->lang("FORUM_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_name\" name=\"forum_name\" value=\"";
            // line 151
            echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_desc\">";
            // line 154
            echo $this->env->getExtension('phpbb')->lang("FORUM_DESC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_DESC_EXPLAIN");
            echo "</span></dt>
\t\t<dd><textarea id=\"forum_desc\" name=\"forum_desc\" rows=\"5\" cols=\"45\" data-bbcode=\"true\">";
            // line 155
            echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
            echo "</textarea></dd>
\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_bbcode\"";
            // line 156
            if ((isset($context["S_DESC_BBCODE_CHECKED"]) ? $context["S_DESC_BBCODE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_smilies\"";
            // line 157
            if ((isset($context["S_DESC_SMILIES_CHECKED"]) ? $context["S_DESC_SMILIES_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_urls\"";
            // line 158
            if ((isset($context["S_DESC_URLS_CHECKED"]) ? $context["S_DESC_URLS_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_URLS");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_image\">";
            // line 161
            echo $this->env->getExtension('phpbb')->lang("FORUM_IMAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_IMAGE_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_image\" name=\"forum_image\" value=\"";
            // line 162
            echo (isset($context["FORUM_IMAGE"]) ? $context["FORUM_IMAGE"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t\t";
            // line 163
            if ((isset($context["FORUM_IMAGE_SRC"]) ? $context["FORUM_IMAGE_SRC"] : null)) {
                // line 164
                echo "\t\t\t<dd><img src=\"";
                echo (isset($context["FORUM_IMAGE_SRC"]) ? $context["FORUM_IMAGE_SRC"] : null);
                echo "\" alt=\"";
                echo $this->env->getExtension('phpbb')->lang("FORUM_IMAGE");
                echo "\" /></dd>
\t\t";
            }
            // line 166
            echo "\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_password\">";
            // line 168
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input type=\"password\" id=\"forum_password\" name=\"forum_password\" value=\"";
            // line 169
            if ((isset($context["S_FORUM_PASSWORD_SET"]) ? $context["S_FORUM_PASSWORD_SET"] : null)) {
                echo "&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;";
            }
            echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_password_confirm\">";
            // line 172
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_CONFIRM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_CONFIRM_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input type=\"password\" id=\"forum_password_confirm\" name=\"forum_password_confirm\" value=\"";
            // line 173
            if ((isset($context["S_FORUM_PASSWORD_SET"]) ? $context["S_FORUM_PASSWORD_SET"] : null)) {
                echo "&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;";
            }
            echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t";
            // line 175
            if ((isset($context["S_FORUM_PASSWORD_SET"]) ? $context["S_FORUM_PASSWORD_SET"] : null)) {
                // line 176
                echo "\t<dl>
\t\t<dt><label for=\"forum_password_unset\">";
                // line 177
                echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_UNSET");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_UNSET_EXPLAIN");
                echo "</span></dt>
\t\t<dd><input id=\"forum_password_unset\" name=\"forum_password_unset\" type=\"checkbox\" /></dd>
\t</dl>
\t";
            }
            // line 181
            echo "\t<dl>
\t\t<dt><label for=\"forum_style\">";
            // line 182
            echo $this->env->getExtension('phpbb')->lang("FORUM_STYLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"forum_style\" name=\"forum_style\"><option value=\"0\">";
            // line 183
            echo $this->env->getExtension('phpbb')->lang("DEFAULT_STYLE");
            echo "</option>";
            echo (isset($context["S_STYLES_OPTIONS"]) ? $context["S_STYLES_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t<div id=\"forum_cat_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 189
            echo $this->env->getExtension('phpbb')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"display_active\">";
            // line 191
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_ACTIVE_TOPICS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_ACTIVE_TOPICS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_active\" value=\"1\"";
            // line 192
            if ((isset($context["S_ENABLE_ACTIVE_TOPICS"]) ? $context["S_ENABLE_ACTIVE_TOPICS"] : null)) {
                echo " id=\"display_active\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_active\" value=\"0\"";
            // line 193
            if ((!(isset($context["S_ENABLE_ACTIVE_TOPICS"]) ? $context["S_ENABLE_ACTIVE_TOPICS"] : null))) {
                echo " id=\"display_active\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t<div id=\"forum_post_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 200
            echo $this->env->getExtension('phpbb')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"forum_status\">";
            // line 202
            echo $this->env->getExtension('phpbb')->lang("FORUM_STATUS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select id=\"forum_status\" name=\"forum_status\">";
            // line 203
            echo (isset($context["S_STATUS_OPTIONS"]) ? $context["S_STATUS_OPTIONS"] : null);
            echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_subforum_list\">";
            // line 206
            echo $this->env->getExtension('phpbb')->lang("LIST_SUBFORUMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LIST_SUBFORUMS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_subforum_list\" value=\"1\"";
            // line 207
            if ((isset($context["S_DISPLAY_SUBFORUM_LIST"]) ? $context["S_DISPLAY_SUBFORUM_LIST"] : null)) {
                echo " id=\"display_subforum_list\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_subforum_list\" value=\"0\"";
            // line 208
            if ((!(isset($context["S_DISPLAY_SUBFORUM_LIST"]) ? $context["S_DISPLAY_SUBFORUM_LIST"] : null))) {
                echo " id=\"display_subforum_list\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_on_index\">";
            // line 211
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_on_index\" value=\"1\"";
            // line 212
            if ((isset($context["S_DISPLAY_ON_INDEX"]) ? $context["S_DISPLAY_ON_INDEX"] : null)) {
                echo " id=\"display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_on_index\" value=\"0\"";
            // line 213
            if ((!(isset($context["S_DISPLAY_ON_INDEX"]) ? $context["S_DISPLAY_ON_INDEX"] : null))) {
                echo " id=\"display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_post_review\">";
            // line 216
            echo $this->env->getExtension('phpbb')->lang("ENABLE_POST_REVIEW");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_POST_REVIEW_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_post_review\" value=\"1\"";
            // line 217
            if ((isset($context["S_ENABLE_POST_REVIEW"]) ? $context["S_ENABLE_POST_REVIEW"] : null)) {
                echo " id=\"enable_post_review\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_post_review\" value=\"0\"";
            // line 218
            if ((!(isset($context["S_ENABLE_POST_REVIEW"]) ? $context["S_ENABLE_POST_REVIEW"] : null))) {
                echo " id=\"enable_post_review\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_quick_reply\">";
            // line 221
            echo $this->env->getExtension('phpbb')->lang("ENABLE_QUICK_REPLY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_QUICK_REPLY_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_quick_reply\" value=\"1\"";
            // line 222
            if ((isset($context["S_ENABLE_QUICK_REPLY"]) ? $context["S_ENABLE_QUICK_REPLY"] : null)) {
                echo " id=\"enable_quick_reply\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_quick_reply\" value=\"0\"";
            // line 223
            if ((!(isset($context["S_ENABLE_QUICK_REPLY"]) ? $context["S_ENABLE_QUICK_REPLY"] : null))) {
                echo " id=\"enable_quick_reply\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_indexing\">";
            // line 226
            echo $this->env->getExtension('phpbb')->lang("ENABLE_INDEXING");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_INDEXING_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_indexing\" value=\"1\"";
            // line 227
            if ((isset($context["S_ENABLE_INDEXING"]) ? $context["S_ENABLE_INDEXING"] : null)) {
                echo " id=\"enable_indexing\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_indexing\" value=\"0\"";
            // line 228
            if ((!(isset($context["S_ENABLE_INDEXING"]) ? $context["S_ENABLE_INDEXING"] : null))) {
                echo " id=\"enable_indexing\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_icons\">";
            // line 231
            echo $this->env->getExtension('phpbb')->lang("ENABLE_TOPIC_ICONS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_icons\" value=\"1\"";
            // line 232
            if ((isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null)) {
                echo " id=\"enable_icons\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_icons\" value=\"0\"";
            // line 233
            if ((!(isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                echo " id=\"enable_icons\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_recent\">";
            // line 236
            echo $this->env->getExtension('phpbb')->lang("ENABLE_RECENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_RECENT_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_recent\" value=\"1\"";
            // line 237
            if ((isset($context["S_DISPLAY_ACTIVE_TOPICS"]) ? $context["S_DISPLAY_ACTIVE_TOPICS"] : null)) {
                echo " id=\"display_recent\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_recent\" value=\"0\"";
            // line 238
            if ((!(isset($context["S_DISPLAY_ACTIVE_TOPICS"]) ? $context["S_DISPLAY_ACTIVE_TOPICS"] : null))) {
                echo " id=\"display_recent\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"topics_per_page\">";
            // line 241
            echo $this->env->getExtension('phpbb')->lang("FORUM_TOPICS_PAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_TOPICS_PAGE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"topics_per_page\" name=\"topics_per_page\" value=\"";
            // line 242
            echo (isset($context["TOPICS_PER_PAGE"]) ? $context["TOPICS_PER_PAGE"] : null);
            echo "\" size=\"4\" maxlength=\"4\" min=\"0\" max=\"9999\" /></dd>
\t\t</dl>
\t\t";
            // line 244
            // line 245
            echo "\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>";
            // line 248
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE_SETTINGS");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"enable_prune\">";
            // line 250
            echo $this->env->getExtension('phpbb')->lang("FORUM_AUTO_PRUNE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_AUTO_PRUNE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_prune\" value=\"1\"";
            // line 251
            if ((isset($context["S_PRUNE_ENABLE"]) ? $context["S_PRUNE_ENABLE"] : null)) {
                echo " id=\"enable_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_prune\" value=\"0\"";
            // line 252
            if ((!(isset($context["S_PRUNE_ENABLE"]) ? $context["S_PRUNE_ENABLE"] : null))) {
                echo " id=\"enable_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_freq\">";
            // line 255
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_FREQ");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_FREQ_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_freq\" name=\"prune_freq\" value=\"";
            // line 256
            echo (isset($context["PRUNE_FREQ"]) ? $context["PRUNE_FREQ"] : null);
            echo "\" maxlength=\"4\" size=\"4\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_days\">";
            // line 259
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_DAYS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_DAYS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_days\" name=\"prune_days\" value=\"";
            // line 260
            echo (isset($context["PRUNE_DAYS"]) ? $context["PRUNE_DAYS"] : null);
            echo "\" maxlength=\"4\" size=\"4\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_viewed\">";
            // line 263
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_VIEWED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_VIEWED_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_viewed\" name=\"prune_viewed\" value=\"";
            // line 264
            echo (isset($context["PRUNE_VIEWED"]) ? $context["PRUNE_VIEWED"] : null);
            echo "\" maxlength=\"4\" size=\"4\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_old_polls\">";
            // line 267
            echo $this->env->getExtension('phpbb')->lang("PRUNE_OLD_POLLS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("PRUNE_OLD_POLLS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"1\"";
            // line 268
            if ((isset($context["S_PRUNE_OLD_POLLS"]) ? $context["S_PRUNE_OLD_POLLS"] : null)) {
                echo " id=\"prune_old_polls\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"0\"";
            // line 269
            if ((!(isset($context["S_PRUNE_OLD_POLLS"]) ? $context["S_PRUNE_OLD_POLLS"] : null))) {
                echo " id=\"prune_old_polls\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_announce\">";
            // line 272
            echo $this->env->getExtension('phpbb')->lang("PRUNE_ANNOUNCEMENTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"1\"";
            // line 273
            if ((isset($context["S_PRUNE_ANNOUNCE"]) ? $context["S_PRUNE_ANNOUNCE"] : null)) {
                echo " id=\"prune_announce\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"0\"";
            // line 274
            if ((!(isset($context["S_PRUNE_ANNOUNCE"]) ? $context["S_PRUNE_ANNOUNCE"] : null))) {
                echo " id=\"prune_announce\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_sticky\">";
            // line 277
            echo $this->env->getExtension('phpbb')->lang("PRUNE_STICKY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"1\"";
            // line 278
            if ((isset($context["S_PRUNE_STICKY"]) ? $context["S_PRUNE_STICKY"] : null)) {
                echo " id=\"prune_sticky\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"0\"";
            // line 279
            if ((!(isset($context["S_PRUNE_STICKY"]) ? $context["S_PRUNE_STICKY"] : null))) {
                echo " id=\"prune_sticky\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_shadow_prune\">";
            // line 282
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE_SHADOW");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE_SHADOW_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_shadow_prune\" value=\"1\"";
            // line 283
            if ((isset($context["S_PRUNE_SHADOW_ENABLE"]) ? $context["S_PRUNE_SHADOW_ENABLE"] : null)) {
                echo " id=\"enable_shadow_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_shadow_prune\" value=\"0\"";
            // line 284
            if ((!(isset($context["S_PRUNE_SHADOW_ENABLE"]) ? $context["S_PRUNE_SHADOW_ENABLE"] : null))) {
                echo " id=\"enable_shadow_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_shadow_freq\">";
            // line 287
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_FREQ");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_FREQ_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_shadow_freq\" name=\"prune_shadow_freq\" value=\"";
            // line 288
            echo (isset($context["PRUNE_SHADOW_FREQ"]) ? $context["PRUNE_SHADOW_FREQ"] : null);
            echo "\" maxlength=\"4\" size=\"4\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_shadow_days\">";
            // line 291
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_DAYS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_DAYS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_shadow_days\" name=\"prune_shadow_days\" value=\"";
            // line 292
            echo (isset($context["PRUNE_SHADOW_DAYS"]) ? $context["PRUNE_SHADOW_DAYS"] : null);
            echo "\" maxlength=\"4\" size=\"4\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t<div id=\"forum_link_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 299
            echo $this->env->getExtension('phpbb')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"link_display_on_index\">";
            // line 301
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"link_display_on_index\" value=\"1\"";
            // line 302
            if ((isset($context["S_DISPLAY_ON_INDEX"]) ? $context["S_DISPLAY_ON_INDEX"] : null)) {
                echo " id=\"link_display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"link_display_on_index\" value=\"0\"";
            // line 303
            if ((!(isset($context["S_DISPLAY_ON_INDEX"]) ? $context["S_DISPLAY_ON_INDEX"] : null))) {
                echo " id=\"link_display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"forum_link\">";
            // line 306
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_link\" name=\"forum_link\" value=\"";
            // line 307
            echo (isset($context["FORUM_DATA_LINK"]) ? $context["FORUM_DATA_LINK"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"forum_link_track\">";
            // line 310
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK_TRACK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK_TRACK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"forum_link_track\" value=\"1\"";
            // line 311
            if ((isset($context["S_FORUM_LINK_TRACK"]) ? $context["S_FORUM_LINK_TRACK"] : null)) {
                echo " id=\"forum_link_track\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"forum_link_track\" value=\"0\"";
            // line 312
            if ((!(isset($context["S_FORUM_LINK_TRACK"]) ? $context["S_FORUM_LINK_TRACK"] : null))) {
                echo " id=\"forum_link_track\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t<div id=\"forum_rules_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 319
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"forum_rules_link\">";
            // line 321
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_LINK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_LINK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_rules_link\" name=\"forum_rules_link\" value=\"";
            // line 322
            echo (isset($context["FORUM_RULES_LINK"]) ? $context["FORUM_RULES_LINK"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t";
            // line 324
            if ((isset($context["FORUM_RULES_PREVIEW"]) ? $context["FORUM_RULES_PREVIEW"] : null)) {
                // line 325
                echo "\t\t<dl>
\t\t\t<dt><label>";
                // line 326
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_PREVIEW");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd>";
                // line 327
                echo (isset($context["FORUM_RULES_PREVIEW"]) ? $context["FORUM_RULES_PREVIEW"] : null);
                echo "</dd>
\t\t</dl>
\t";
            }
            // line 330
            echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_rules\">";
            // line 331
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><textarea id=\"forum_rules\" name=\"forum_rules\" rows=\"4\" cols=\"70\" data-bbcode=\"true\">";
            // line 332
            echo (isset($context["FORUM_RULES_PLAIN"]) ? $context["FORUM_RULES_PLAIN"] : null);
            echo "</textarea></dd>
\t\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_bbcode\"";
            // line 333
            if ((isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_smilies\"";
            // line 334
            if ((isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_urls\"";
            // line 335
            if ((isset($context["S_URLS_CHECKED"]) ? $context["S_URLS_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_URLS");
            echo "</label></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 341
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"update\" value=\"";
            // line 342
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 343
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 344
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif ((isset($context["S_DELETE_FORUM"]) ? $context["S_DELETE_FORUM"] : null)) {
            // line 349
            echo "
\t<a href=\"";
            // line 350
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 352
            echo $this->env->getExtension('phpbb')->lang("FORUM_DELETE");
            echo "</h1>

\t<p>";
            // line 354
            echo $this->env->getExtension('phpbb')->lang("FORUM_DELETE_EXPLAIN");
            echo "</p>

\t";
            // line 356
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 357
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 358
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 359
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 362
            echo "
\t<form id=\"acp_forum\" method=\"post\" action=\"";
            // line 363
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 366
            echo $this->env->getExtension('phpbb')->lang("FORUM_DELETE");
            echo "</legend>
\t<dl>
\t\t<dt><label>";
            // line 368
            echo $this->env->getExtension('phpbb')->lang("FORUM_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 369
            echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
            echo "</strong></dd>
\t</dl>
\t";
            // line 371
            if ((isset($context["S_FORUM_POST"]) ? $context["S_FORUM_POST"] : null)) {
                // line 372
                echo "\t\t<dl>
\t\t\t<dt><label for=\"delete_action\">";
                // line 373
                echo $this->env->getExtension('phpbb')->lang("ACTION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"delete_action\" name=\"action_posts\" value=\"delete\" checked=\"checked\" /> ";
                // line 374
                echo $this->env->getExtension('phpbb')->lang("DELETE_ALL_POSTS");
                echo "</label></dd>
\t\t\t";
                // line 375
                if ((isset($context["S_MOVE_FORUM_OPTIONS"]) ? $context["S_MOVE_FORUM_OPTIONS"] : null)) {
                    // line 376
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"action_posts\" value=\"move\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_POSTS_TO");
                    echo "</label> <select name=\"posts_to_id\">";
                    echo (isset($context["S_MOVE_FORUM_OPTIONS"]) ? $context["S_MOVE_FORUM_OPTIONS"] : null);
                    echo "</select></dd>
\t\t\t";
                }
                // line 378
                echo "\t\t</dl>
\t";
            }
            // line 380
            echo "\t";
            if ((isset($context["S_HAS_SUBFORUMS"]) ? $context["S_HAS_SUBFORUMS"] : null)) {
                // line 381
                echo "\t\t<dl>
\t\t\t<dt><label for=\"sub_delete_action\">";
                // line 382
                echo $this->env->getExtension('phpbb')->lang("ACTION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"sub_delete_action\" name=\"action_subforums\" value=\"delete\" checked=\"checked\" /> ";
                // line 383
                echo $this->env->getExtension('phpbb')->lang("DELETE_SUBFORUMS");
                echo "</label></dd>
\t\t\t";
                // line 384
                if ((isset($context["S_FORUMS_LIST"]) ? $context["S_FORUMS_LIST"] : null)) {
                    // line 385
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"action_subforums\" value=\"move\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_SUBFORUMS_TO");
                    echo "</label> <select name=\"subforums_to_id\">";
                    echo (isset($context["S_FORUMS_LIST"]) ? $context["S_FORUMS_LIST"] : null);
                    echo "</select></dd>
\t\t\t";
                }
                // line 387
                echo "\t\t</dl>
\t";
            }
            // line 389
            echo "
\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
            // line 391
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 393
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif ((isset($context["S_CONTINUE_SYNC"]) ? $context["S_CONTINUE_SYNC"] : null)) {
            // line 398
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\tvar close_waitscreen = 0;
\t\t// no scrollbars...
\t\tpopup('";
            // line 403
            echo (isset($context["UA_PROGRESS_BAR"]) ? $context["UA_PROGRESS_BAR"] : null);
            echo "', 400, 240, '_sync');
\t// ]]>
\t</script>

\t<h1>";
            // line 407
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN");
            echo "</h1>

\t<p>";
            // line 409
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN_EXPLAIN");
            echo "</p>

\t<p>";
            // line 411
            echo $this->env->getExtension('phpbb')->lang("PROGRESS_EXPLAIN");
            echo "</p>

";
        } else {
            // line 414
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\t/**
\t\t* Popup search progress bar
\t\t*/
\t\tfunction popup_progress_bar()
\t\t{
\t\t\tvar close_waitscreen = 0;
\t\t\t// no scrollbars...
\t\t\tpopup('";
            // line 424
            echo (isset($context["UA_PROGRESS_BAR"]) ? $context["UA_PROGRESS_BAR"] : null);
            echo "', 400, 240, '_sync');
\t\t}
\t// ]]>
\t</script>

\t<h1>";
            // line 429
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN");
            echo "</h1>

\t<p>";
            // line 431
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN_EXPLAIN");
            echo "</p>

\t";
            // line 433
            if ((isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null)) {
                // line 434
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 435
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 436
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 439
            echo "
\t";
            // line 440
            if ((isset($context["S_RESYNCED"]) ? $context["S_RESYNCED"] : null)) {
                // line 441
                echo "\t\t<script type=\"text/javascript\">
\t\t// <![CDATA[
\t\t\tvar close_waitscreen = 1;
\t\t// ]]>
\t\t</script>

\t\t<div class=\"successbox\">
\t\t\t<h3>";
                // line 448
                echo $this->env->getExtension('phpbb')->lang("NOTIFY");
                echo "</h3>
\t\t\t<p>";
                // line 449
                echo $this->env->getExtension('phpbb')->lang("FORUM_RESYNCED");
                echo "</p>
\t\t</div>
\t";
            }
            // line 452
            echo "
\t<p><strong>";
            // line 453
            echo (isset($context["NAVIGATION"]) ? $context["NAVIGATION"] : null);
            if ((isset($context["S_NO_FORUMS"]) ? $context["S_NO_FORUMS"] : null)) {
                echo " [<a href=\"";
                echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EDIT");
                echo "</a> | <a href=\"";
                echo (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</a>";
                if ((!(isset($context["S_LINK"]) ? $context["S_LINK"] : null))) {
                    echo " | <a href=\"";
                    echo (isset($context["U_SYNC"]) ? $context["U_SYNC"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("RESYNC");
                    echo "</a>";
                }
                echo "]";
            }
            echo "</strong></p>

\t";
            // line 455
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forums"))) {
                // line 456
                echo "\t\t<table class=\"table1 forums\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t\t<tbody>
\t\t";
                // line 459
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forums"));
                foreach ($context['_seq'] as $context["_key"] => $context["forums"]) {
                    // line 460
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"folder\">";
                    // line 461
                    echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "FOLDER_IMAGE");
                    echo "</td>
\t\t\t\t<td class=\"forum-desc\">
\t\t\t\t\t";
                    // line 463
                    if ($this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "FORUM_IMAGE")) {
                        echo "<div style=\"float: ";
                        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                        echo "; margin-right: 5px;\">";
                        echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "FORUM_IMAGE");
                        echo "</div>";
                    }
                    // line 464
                    echo "\t\t\t\t\t<strong>";
                    if ($this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "S_FORUM_LINK")) {
                        echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "FORUM_NAME");
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "U_FORUM");
                        echo "\">";
                        echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "FORUM_NAME");
                        echo "</a>";
                    }
                    echo "</strong>
\t\t\t\t\t";
                    // line 465
                    if ($this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "FORUM_DESCRIPTION")) {
                        echo "<br /><span>";
                        echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "FORUM_DESCRIPTION");
                        echo "</span>";
                    }
                    // line 466
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "S_FORUM_POST")) {
                        echo "<br /><br /><span>";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "FORUM_TOPICS");
                        echo "</strong> / ";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "FORUM_POSTS");
                        echo "</strong></span>";
                    }
                    // line 467
                    echo "\t\t\t\t</td>
\t\t\t\t<td class=\"actions\">
\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                    // line 469
                    echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                    echo "</span>
\t\t\t\t\t<span class=\"up\"><a href=\"";
                    // line 470
                    echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "U_MOVE_UP");
                    echo "\" data-ajax=\"row_up\">";
                    echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                    echo "</a></span>
\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                    // line 471
                    echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                    echo "</span>
\t\t\t\t\t<span class=\"down\"><a href=\"";
                    // line 472
                    echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "U_MOVE_DOWN");
                    echo "\" data-ajax=\"row_down\">";
                    echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                    echo "</a></span>
\t\t\t\t\t<a href=\"";
                    // line 473
                    echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "U_EDIT");
                    echo "\">";
                    echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                    echo "</a>
\t\t\t\t\t";
                    // line 474
                    if ((!$this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "S_FORUM_LINK"))) {
                        // line 475
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "U_SYNC");
                        echo "\" onclick=\"popup_progress_bar();\">";
                        echo (isset($context["ICON_SYNC"]) ? $context["ICON_SYNC"] : null);
                        echo "</a>
\t\t\t\t\t";
                    } else {
                        // line 477
                        echo "\t\t\t\t\t\t";
                        echo (isset($context["ICON_SYNC_DISABLED"]) ? $context["ICON_SYNC_DISABLED"] : null);
                        echo "
\t\t\t\t\t";
                    }
                    // line 479
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute((isset($context["forums"]) ? $context["forums"] : null), "U_DELETE");
                    echo "\">";
                    echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                    echo "</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forums'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 483
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 486
            echo "
\t<form id=\"fselect\" method=\"post\" action=\"";
            // line 487
            echo (isset($context["U_SEL_ACTION"]) ? $context["U_SEL_ACTION"] : null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t";
            // line 490
            echo $this->env->getExtension('phpbb')->lang("SELECT_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"parent_id\" onchange=\"if(this.options[this.selectedIndex].value != -1){ this.form.submit(); }\">";
            echo (isset($context["FORUM_BOX"]) ? $context["FORUM_BOX"] : null);
            echo "</select>

\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 492
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" />
\t\t";
            // line 493
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

\t<form id=\"forums\" method=\"post\" action=\"";
            // line 497
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />

\t\t<input type=\"text\" name=\"forum_name\" value=\"\" maxlength=\"255\" />
\t\t<input class=\"button2\" name=\"addforum\" type=\"submit\" value=\"";
            // line 503
            echo $this->env->getExtension('phpbb')->lang("CREATE_FORUM");
            echo "\" />
\t\t";
            // line 504
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 509
        echo "
";
        // line 510
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
        return "acp_forums.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1550 => 510,  1547 => 509,  1539 => 504,  1535 => 503,  1526 => 497,  1519 => 493,  1515 => 492,  1507 => 490,  1501 => 487,  1498 => 486,  1493 => 483,  1480 => 479,  1474 => 477,  1466 => 475,  1464 => 474,  1458 => 473,  1452 => 472,  1448 => 471,  1442 => 470,  1438 => 469,  1434 => 467,  1419 => 466,  1413 => 465,  1400 => 464,  1392 => 463,  1387 => 461,  1384 => 460,  1380 => 459,  1375 => 456,  1373 => 455,  1349 => 453,  1346 => 452,  1340 => 449,  1336 => 448,  1327 => 441,  1325 => 440,  1322 => 439,  1316 => 436,  1312 => 435,  1309 => 434,  1307 => 433,  1302 => 431,  1297 => 429,  1289 => 424,  1277 => 414,  1271 => 411,  1266 => 409,  1261 => 407,  1254 => 403,  1247 => 398,  1239 => 393,  1234 => 391,  1230 => 389,  1226 => 387,  1218 => 385,  1216 => 384,  1212 => 383,  1207 => 382,  1204 => 381,  1201 => 380,  1197 => 378,  1189 => 376,  1187 => 375,  1183 => 374,  1178 => 373,  1175 => 372,  1173 => 371,  1168 => 369,  1163 => 368,  1158 => 366,  1152 => 363,  1149 => 362,  1143 => 359,  1139 => 358,  1136 => 357,  1134 => 356,  1129 => 354,  1124 => 352,  1115 => 350,  1112 => 349,  1104 => 344,  1100 => 343,  1096 => 342,  1092 => 341,  1079 => 335,  1071 => 334,  1063 => 333,  1059 => 332,  1052 => 331,  1049 => 330,  1043 => 327,  1038 => 326,  1035 => 325,  1033 => 324,  1028 => 322,  1021 => 321,  1016 => 319,  1002 => 312,  994 => 311,  987 => 310,  981 => 307,  974 => 306,  964 => 303,  956 => 302,  949 => 301,  944 => 299,  932 => 292,  925 => 291,  917 => 288,  910 => 287,  900 => 284,  892 => 283,  885 => 282,  875 => 279,  867 => 278,  862 => 277,  852 => 274,  844 => 273,  839 => 272,  829 => 269,  821 => 268,  814 => 267,  806 => 264,  799 => 263,  791 => 260,  784 => 259,  776 => 256,  769 => 255,  759 => 252,  751 => 251,  744 => 250,  739 => 248,  734 => 245,  733 => 244,  728 => 242,  721 => 241,  711 => 238,  703 => 237,  696 => 236,  686 => 233,  678 => 232,  673 => 231,  663 => 228,  655 => 227,  648 => 226,  638 => 223,  630 => 222,  623 => 221,  613 => 218,  605 => 217,  598 => 216,  588 => 213,  580 => 212,  573 => 211,  563 => 208,  555 => 207,  548 => 206,  542 => 203,  537 => 202,  532 => 200,  518 => 193,  510 => 192,  503 => 191,  498 => 189,  487 => 183,  482 => 182,  479 => 181,  469 => 177,  466 => 176,  464 => 175,  457 => 173,  450 => 172,  442 => 169,  435 => 168,  431 => 166,  423 => 164,  421 => 163,  417 => 162,  410 => 161,  400 => 158,  392 => 157,  384 => 156,  380 => 155,  373 => 154,  367 => 151,  362 => 150,  359 => 149,  351 => 146,  344 => 145,  341 => 144,  339 => 143,  328 => 141,  323 => 140,  320 => 139,  315 => 136,  309 => 134,  301 => 132,  299 => 131,  294 => 130,  290 => 128,  287 => 127,  282 => 124,  274 => 123,  266 => 122,  261 => 121,  257 => 119,  255 => 118,  250 => 116,  245 => 115,  240 => 113,  234 => 110,  231 => 109,  225 => 106,  221 => 105,  218 => 104,  216 => 103,  211 => 101,  201 => 99,  192 => 97,  185 => 92,  181 => 90,  179 => 89,  176 => 88,  172 => 86,  170 => 85,  167 => 84,  163 => 82,  161 => 81,  158 => 80,  154 => 78,  152 => 77,  149 => 76,  146 => 75,  142 => 73,  139 => 72,  137 => 71,  134 => 70,  131 => 69,  127 => 67,  124 => 66,  122 => 65,  104 => 50,  94 => 43,  84 => 36,  81 => 35,  68 => 26,  66 => 25,  63 => 24,  50 => 15,  48 => 14,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
