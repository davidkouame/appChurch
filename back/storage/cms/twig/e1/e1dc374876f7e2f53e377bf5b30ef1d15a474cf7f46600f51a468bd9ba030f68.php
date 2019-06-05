<?php

/* /Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/layouts/saintmathieu.htm */
class __TwigTemplate_39654308693e139a54485383cad0a384ef063a814edae47822df2fc790090e17 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Saint Mathieu</title>

        <!-- Font Awesome Icons -->
        <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("vendor/fontawesome-free/css/all.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700\" rel=\"stylesheet\">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/magnific-popup.css");
        echo "\" rel=\"stylesheet\">

        <!-- Theme CSS - Includes Bootstrap -->
        <link href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/creative.min.css");
        echo "\" rel=\"stylesheet\">
        
        <style>
            #contact{display: none}
            button.navbar-toggler.navbar-toggler{
                display: none;
            }
        </style>

    </head>

    <body id=\"page-top\">

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "
            <!-- Content -->
            <section class=\"page-section\" id=\"contact\">
                ";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 44
        echo "            </section>

            <!-- Footer -->
            <footer class=\"bg-light py-5\">
                ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "            </footer>
        </div>

        <!-- Scripts -->
        ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/layouts/saintmathieu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 54,  99 => 53,  93 => 49,  89 => 48,  83 => 44,  81 => 43,  76 => 40,  72 => 39,  54 => 24,  48 => 21,  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Saint Mathieu</title>

        <!-- Font Awesome Icons -->
        <link href=\"{{ 'vendor/fontawesome-free/css/all.min.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700\" rel=\"stylesheet\">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href=\"{{ 'assets/vendor/magnific-popup/magnific-popup.css'|theme }}\" rel=\"stylesheet\">

        <!-- Theme CSS - Includes Bootstrap -->
        <link href=\"{{ 'assets/css/creative.min.css'|theme }}\" rel=\"stylesheet\">
        
        <style>
            #contact{display: none}
            button.navbar-toggler.navbar-toggler{
                display: none;
            }
        </style>

    </head>

    <body id=\"page-top\">

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            {% partial 'site/header' %}

            <!-- Content -->
            <section class=\"page-section\" id=\"contact\">
                {% page %}
            </section>

            <!-- Footer -->
            <footer class=\"bg-light py-5\">
                {% partial 'site/footer' %}
            </footer>
        </div>

        <!-- Scripts -->
        {% partial 'site/scripts' %}
    </body>
</html>", "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/layouts/saintmathieu.htm", "");
    }
}
