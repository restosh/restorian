<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* guest/login.html */
class __TwigTemplate_2736a6fecafb75bb935997799f59a4158d587f583df58cf3883ee38df773e8fe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "guest/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("guest/index.html", "guest/login.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<form class=\"card\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), ["login"]), "html", null, true);
        echo "\" method=\"post\">
    <div class=\"card-body p-6\">
        <div class=\"form-group\">
            <label class=\"form-label\">
                ";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["login-password"]), "html", null, true);
        echo ":
            </label>
            <input type=\"password\" name=\"passwd\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('input')->getCallable(), ["passwd"]), "html", null, true);
        echo "\" class=\"form-control\"
                   placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["login-password"]), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label class=\"custom-control custom-checkbox\">
                <input type=\"checkbox\" name=\"remember\" ";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('checked')->getCallable(), ["remember"]), "html", null, true);
        echo " class=\"custom-control-input\"/>
                <span class=\"custom-control-label\">";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["login-rememeber"]), "html", null, true);
        echo "</span>
            </label>
        </div>
        <div class=\"form-footer\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["login-submit"]), "html", null, true);
        echo "</button>
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "guest/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  80 => 17,  76 => 16,  69 => 12,  65 => 11,  60 => 9,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"guest/index.html\" %}

{% block content %}

<form class=\"card\" action=\"{{ url('login') }}\" method=\"post\">
    <div class=\"card-body p-6\">
        <div class=\"form-group\">
            <label class=\"form-label\">
                {{ trans('login-password') }}:
            </label>
            <input type=\"password\" name=\"passwd\" value=\"{{ 'passwd'|input }}\" class=\"form-control\"
                   placeholder=\"{{ trans('login-password') }}\">
        </div>
        <div class=\"form-group\">
            <label class=\"custom-control custom-checkbox\">
                <input type=\"checkbox\" name=\"remember\" {{ 'remember'|checked }} class=\"custom-control-input\"/>
                <span class=\"custom-control-label\">{{ trans('login-rememeber') }}</span>
            </label>
        </div>
        <div class=\"form-footer\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">{{ trans('login-submit') }}</button>
        </div>
    </div>
</form>
{% endblock %}", "guest/login.html", "/code/templates/guest/login.html");
    }
}
