<?php

/* /Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/pages/ajouter-un-paroissien.htm */
class __TwigTemplate_604a5564af18332086c42802f37159a4b2e143179ef8fdcdf1b3f306c582bda7 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ajouterParoissien"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/pages/ajouter-un-paroissien.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'ajouterParoissien' %}", "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/pages/ajouter-un-paroissien.htm", "");
    }
}
