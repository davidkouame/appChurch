<?php

/* /Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/partials/site/footer.htm */
class __TwigTemplate_e5976a874c0abbd900d715069160f662480a00551efc42d300c6019e9a69374d extends Twig_Template
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
        echo "<div class=\"container\">
      <div class=\"small text-center text-muted\">Copyright &copy; 2019 - Saint Mathieu</div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
      <div class=\"small text-center text-muted\">Copyright &copy; 2019 - Saint Mathieu</div>
    </div>", "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/partials/site/footer.htm", "");
    }
}
