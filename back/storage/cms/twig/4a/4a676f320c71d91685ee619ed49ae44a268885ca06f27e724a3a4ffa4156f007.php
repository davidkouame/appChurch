<?php

/* /var/www/html/appChurch/back/themes/responsiv-clean/partials/site/scriptsnavabar.htm */
class __TwigTemplate_568e64fde08a512b859c239adbbe0bdf15d4a4df78a6233c036139afabdb150d extends Twig_Template
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
        echo "<!-- Bootstrap core JavaScript -->
<script src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
<script src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>

<!-- Plugin JavaScript -->
<script src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-easing/jquery.easing.min.js");
        echo "\"></script>
<script src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/jquery.magnific-popup.min.js");
        echo "\"></script>

<!-- Custom scripts for this template -->
<!--<script src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/creative.min.js");
        echo "\"></script>-->
<script src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js");
        echo "\"></script>
<script src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "@jquery", 1 => "@framework", 2 => "@framework.extras", 3 => "assets/vendor/bootstrap.js", 4 => "assets/javascript/app.js"]);
        // line 18
        echo "\"></script>
";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "/var/www/html/appChurch/back/themes/responsiv-clean/partials/site/scriptsnavabar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  56 => 18,  54 => 12,  50 => 11,  46 => 10,  40 => 7,  36 => 6,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Bootstrap core JavaScript -->
<script src=\"{{ 'assets/vendor/jquery/jquery.min.js'|theme}}\"></script>
<script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'|theme}}\"></script>

<!-- Plugin JavaScript -->
<script src=\"{{ 'assets/vendor/jquery-easing/jquery.easing.min.js'|theme}}\"></script>
<script src=\"{{ 'assets/vendor/magnific-popup/jquery.magnific-popup.min.js'|theme }}\"></script>

<!-- Custom scripts for this template -->
<!--<script src=\"{{ 'assets/js/creative.min.js'|theme }}\"></script>-->
<script src=\"{{ 'assets/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js'|theme }}\"></script>
<script src=\"{{ [
    '@jquery',
    '@framework',
    '@framework.extras',
    'assets/vendor/bootstrap.js',
    'assets/javascript/app.js'
]|theme }}\"></script>
{% scripts %}", "/var/www/html/appChurch/back/themes/responsiv-clean/partials/site/scriptsnavabar.htm", "");
    }
}
