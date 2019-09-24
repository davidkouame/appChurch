<?php

/* /var/www/html/appChurch/back/themes/responsiv-clean/partials/site/headernavbar.htm */
class __TwigTemplate_2dac190c76c5366b6ba38376c03ac8014bb659f39a6615b0d6837cad27d3adef extends Twig_Template
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
        echo "<!-- Navigation -->
  <nav class=\"navbar navbar-expand-lg navbar-light fixed-top py-3 navbar-scrolled\" id=\"mainNav\">
    <div class=\"container\">
      <a class=\"navbar-brand js-scroll-trigger\" href=\"";
        // line 4
        echo url("/");
        echo "\">Saint Mathieu</a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
<!--      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto my-2 my-lg-0\">
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"";
        // line 11
        echo url("/");
        echo "/#about\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"";
        // line 14
        echo url("/");
        echo "/#services\">Services</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"";
        // line 17
        echo url("/");
        echo "/#portfolio\">Portfolio</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"";
        // line 20
        echo url("/");
        echo "/#contact\">Contact</a>
          </li>
        </ul>
      </div>-->
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/appChurch/back/themes/responsiv-clean/partials/site/headernavbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  50 => 17,  44 => 14,  38 => 11,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Navigation -->
  <nav class=\"navbar navbar-expand-lg navbar-light fixed-top py-3 navbar-scrolled\" id=\"mainNav\">
    <div class=\"container\">
      <a class=\"navbar-brand js-scroll-trigger\" href=\"{{ url('/') }}\">Saint Mathieu</a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
<!--      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto my-2 my-lg-0\">
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"{{ url('/') }}/#about\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"{{ url('/') }}/#services\">Services</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"{{ url('/') }}/#portfolio\">Portfolio</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"{{ url('/') }}/#contact\">Contact</a>
          </li>
        </ul>
      </div>-->
    </div>
  </nav>", "/var/www/html/appChurch/back/themes/responsiv-clean/partials/site/headernavbar.htm", "");
    }
}
