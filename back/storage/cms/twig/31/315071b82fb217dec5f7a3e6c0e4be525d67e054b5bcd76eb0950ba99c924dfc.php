<?php

/* /Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/layouts/default.htm */
class __TwigTemplate_ebf84a258c93954f66baab0b7fc46f49c23baeb342c3ef13385a8398a2acdaca extends Twig_Template
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
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        <link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" >
    </head>
    <body>

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            <header id=\"layout-header\">
                ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "            </header>

            <!-- Sidebar -->
            <section id=\"layout-sidebar\">
                ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "            </section>

            <!-- Content -->
            <section id=\"layout-content\">
                ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 23
        echo "            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
<!--                ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "-->
            </footer>
        </div>

        <!-- Scripts -->
        ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  81 => 32,  71 => 27,  65 => 23,  63 => 22,  57 => 18,  53 => 17,  47 => 13,  43 => 12,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css'| theme}}\" >
    </head>
    <body>

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            <header id=\"layout-header\">
                {% partial 'site/header' %}
            </header>

            <!-- Sidebar -->
            <section id=\"layout-sidebar\">
                {% partial 'site/sidebar' %}
            </section>

            <!-- Content -->
            <section id=\"layout-content\">
                {% page %}
            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
<!--                {% partial 'site/footer' %}-->
            </footer>
        </div>

        <!-- Scripts -->
        {% partial 'site/scripts' %}
    </body>
</html>", "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/layouts/default.htm", "");
    }
}
