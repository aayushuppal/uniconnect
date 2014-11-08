<?php

/* login_forum.html */
class __TwigTemplate_4447e56380486b812cbbf72ae20f5634 extends Twig_Template
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
";
        // line 3
        if ((isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null)) {
            echo "<h2 class=\"forum-title\"><a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\">";
            echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
            echo "</a></h2>";
        }
        // line 4
        echo "
<form id=\"login_forum\" method=\"post\" action=\"";
        // line 5
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\">
";
        // line 6
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"content\">
\t\t<h2 class=\"login-title\">";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "</h2>

\t\t<p>";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("LOGIN_FORUM");
        echo "</p>

\t\t<fieldset class=\"fields1\">
\t\t\t";
        // line 16
        if ((isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null)) {
            // line 17
            echo "\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"error\">";
            // line 19
            echo (isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null);
            echo "</dd>
\t\t\t\t</dl>
\t\t\t";
        }
        // line 22
        echo "
\t\t\t<dl>
\t\t\t\t<dt><label for=\"password\">";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd><input type=\"password\" tabindex=\"1\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox narrow\" /></dd>
\t\t\t</dl>
\t\t\t";
        // line 27
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo "
\t\t\t<dl>
\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t<dd>";
        // line 30
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"submit\" name=\"login\" id=\"login\" class=\"button1\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" tabindex=\"2\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t</div>

\t</div>
</div>

</form>

";
        // line 40
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("jumpbox.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 41
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
        return "login_forum.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  112 => 40,  97 => 30,  91 => 27,  84 => 24,  80 => 22,  74 => 19,  70 => 17,  68 => 16,  62 => 13,  57 => 11,  49 => 6,  45 => 5,  42 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
