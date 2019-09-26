<?php

/* /var/www/html/appChurch/back/themes/responsiv-clean/pages/ajouter-un-paroissien.htm */
class __TwigTemplate_b5a36a7b505f9b0acae3f2b79593943ce566c853bb0a20cd11a6c84a9ebb020b extends Twig_Template
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
        return "/var/www/html/appChurch/back/themes/responsiv-clean/pages/ajouter-un-paroissien.htm";
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
        return new Twig_Source("{% component 'ajouterParoissien' %}", "/var/www/html/appChurch/back/themes/responsiv-clean/pages/ajouter-un-paroissien.htm", "");
    }
}
