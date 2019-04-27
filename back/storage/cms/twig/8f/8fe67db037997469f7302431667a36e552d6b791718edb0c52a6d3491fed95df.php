<?php

/* /opt/lampp/htdocs/appChurch/back/themes/responsiv-clean/pages/404.htm */
class __TwigTemplate_d67e81ac92a0e86b833222b58ccfae243dacaa44ed443996e4de0a090c6e327c extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/appChurch/back/themes/responsiv-clean/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>", "/opt/lampp/htdocs/appChurch/back/themes/responsiv-clean/pages/404.htm", "");
    }
}
