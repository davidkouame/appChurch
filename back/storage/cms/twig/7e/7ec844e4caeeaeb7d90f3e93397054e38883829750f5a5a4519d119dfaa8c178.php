<?php

/* /var/www/html/appChurch/back/themes/responsiv-clean/partials/site/footer.htm */
class __TwigTemplate_eb73abc1b36c0a90596eab894b1494e75398ddaff4679d2680b652a8f3fc2887 extends Twig_Template
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
        return "/var/www/html/appChurch/back/themes/responsiv-clean/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
      <div class=\"small text-center text-muted\">Copyright &copy; 2019 - Saint Mathieu</div>
    </div>", "/var/www/html/appChurch/back/themes/responsiv-clean/partials/site/footer.htm", "");
    }
}
