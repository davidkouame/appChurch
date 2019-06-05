<?php

/* /Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/layouts/saintmathieunavbar.htm */
class __TwigTemplate_9ab23638c4f034fcc886a28e1ae4ace83ff32670408fd52a0802ac42f158de51 extends Twig_Template
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
        <!--        <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("vendor/fontawesome-free/css/all.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">-->

        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700\" rel=\"stylesheet\">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <!--        <link href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/magnific-popup.css");
        echo "\" rel=\"stylesheet\">-->

        <!-- Theme CSS - Includes Bootstrap -->

        <!--        <link href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">-->
        ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "        <!--        <link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" >-->

        <link href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/creative.min.css");
        echo "\" rel=\"stylesheet\">
        
        <link href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css");
        echo "\" rel=\"stylesheet\">
        
        <style>
               button.navbar-toggler.navbar-toggler{
                display: none;
            }
        </style>

    </head>

    <body id=\"page-top\">

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/headernavbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "
            <!-- Content -->
            <section class=\"page-section\" id=\"contact\" style=\"padding-bottom: 60px;\">
                ";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 50
        echo "            </section>

            <!-- Footer -->
            <footer class=\"bg-light py-5\">
                ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "            </footer>
        </div>

        <!-- Scripts -->
        ";
        // line 59
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scriptsnavabar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 60
        echo "
        <script>
            \$(document).ready(function () {
                \$(\"html\").removeAttr(\"font-size\");
                var \$j = jQuery.noConflict();
                // \$j('.datepicker').datepicker({dateFormat: 'yyyy-mm-dd'});
            });
</script>
        </script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/layouts/saintmathieunavbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 60,  118 => 59,  112 => 55,  108 => 54,  102 => 50,  100 => 49,  95 => 46,  91 => 45,  74 => 31,  69 => 29,  63 => 27,  59 => 26,  55 => 25,  48 => 21,  38 => 14,  23 => 1,);
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
        <!--        <link href=\"{{ 'vendor/fontawesome-free/css/all.min.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\">-->

        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700\" rel=\"stylesheet\">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <!--        <link href=\"{{ 'assets/vendor/magnific-popup/magnific-popup.css'|theme }}\" rel=\"stylesheet\">-->

        <!-- Theme CSS - Includes Bootstrap -->

        <!--        <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">-->
        {% partial 'site/meta' %}
        <!--        <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css'| theme}}\" >-->

        <link href=\"{{ 'assets/css/creative.min.css'|theme }}\" rel=\"stylesheet\">
        
        <link href=\"{{ 'assets/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css'|theme }}\" rel=\"stylesheet\">
        
        <style>
               button.navbar-toggler.navbar-toggler{
                display: none;
            }
        </style>

    </head>

    <body id=\"page-top\">

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            {% partial 'site/headernavbar' %}

            <!-- Content -->
            <section class=\"page-section\" id=\"contact\" style=\"padding-bottom: 60px;\">
                {% page %}
            </section>

            <!-- Footer -->
            <footer class=\"bg-light py-5\">
                {% partial 'site/footer' %}
            </footer>
        </div>

        <!-- Scripts -->
        {% partial 'site/scriptsnavabar' %}

        <script>
            \$(document).ready(function () {
                \$(\"html\").removeAttr(\"font-size\");
                var \$j = jQuery.noConflict();
                // \$j('.datepicker').datepicker({dateFormat: 'yyyy-mm-dd'});
            });
</script>
        </script>
    </body>
</html>", "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/layouts/saintmathieunavbar.htm", "");
    }
}
