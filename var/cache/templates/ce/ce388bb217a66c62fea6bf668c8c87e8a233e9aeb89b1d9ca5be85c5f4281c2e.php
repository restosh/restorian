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

/* guest/index.html */
class __TwigTemplate_a46c3e73837093f965abff4de16472468b1d00baf9d72a291f0f44e505dd1f23 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta http-equiv=\"Content-Language\" content=\"en\"/>
    <meta name=\"msapplication-TileColor\" content=\"#2d89ef\">
    <meta name=\"theme-color\" content=\"#4188c9\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <meta name=\"HandheldFriendly\" content=\"True\">
    <meta name=\"MobileOptimized\" content=\"320\">
    <link rel=\"icon\" href=\"./favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>
    <title>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('param')->getCallable(), ["service.name"]), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext\">

    <link href=\"/assets/css/dashboard.css\" rel=\"stylesheet\"/>
</head>
<body>

<div id=\"content\">
    <div class=\"page\">
        <div class=\"page-single\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col col-login mx-auto\">
                        <div class=\"text-center mb-6\">
                            ";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["login-title"]), "html", null, true);
        echo "
                            <img src=\"./assets/brand/tabler.svg\" class=\"h-6\" alt=\"\">
                        </div>

                        ";
        // line 38
        echo call_user_func_array($this->env->getFunction('flashBag')->getCallable(), ["danger"]);
        echo "
                        ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>";
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "guest/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  91 => 40,  89 => 39,  85 => 38,  78 => 34,  57 => 18,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta http-equiv=\"Content-Language\" content=\"en\"/>
    <meta name=\"msapplication-TileColor\" content=\"#2d89ef\">
    <meta name=\"theme-color\" content=\"#4188c9\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <meta name=\"HandheldFriendly\" content=\"True\">
    <meta name=\"MobileOptimized\" content=\"320\">
    <link rel=\"icon\" href=\"./favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>
    <title>{{ 'service.name'|param }} - {{ pageTitle }}</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext\">

    <link href=\"/assets/css/dashboard.css\" rel=\"stylesheet\"/>
</head>
<body>

<div id=\"content\">
    <div class=\"page\">
        <div class=\"page-single\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col col-login mx-auto\">
                        <div class=\"text-center mb-6\">
                            {{ trans('login-title') }}
                            <img src=\"./assets/brand/tabler.svg\" class=\"h-6\" alt=\"\">
                        </div>

                        {{ flashBag('danger')|raw }}
                        {% block content %}{% endblock %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>", "guest/index.html", "/code/templates/guest/index.html");
    }
}
