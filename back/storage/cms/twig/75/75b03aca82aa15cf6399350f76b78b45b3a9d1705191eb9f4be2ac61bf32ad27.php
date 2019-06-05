<?php

/* /Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/pages/succes.htm */
class __TwigTemplate_42a1480b61d4970ecd3913b3259734044243330b1bf29b41d9a6f6cec0c1d990 extends Twig_Template
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
        echo "<style>
    /*--thank you pop starts here--*/
    .thank-you-pop{
        width:100%;
        padding:20px;
        text-align:center;
    }
    .thank-you-pop img{
        width:76px;
        height:auto;
        margin:0 auto;
        display:block;
        margin-bottom:25px;
    }

    .thank-you-pop h1{
        font-size: 42px;
        margin-bottom: 25px;
        color:#5C5C5C;
    }
    .thank-you-pop p{
        font-size: 20px;
        margin-bottom: 27px;
        color:#5C5C5C;
    }
    .thank-you-pop h3.cupon-pop{
        font-size: 25px;
        margin-bottom: 40px;
        color:#222;
        display:inline-block;
        text-align:center;
        padding:10px 20px;
        border:2px dashed #222;
        clear:both;
        font-weight:normal;
    }
    .thank-you-pop h3.cupon-pop span{
        color:#03A9F4;
    }
    .thank-you-pop a{
        display: inline-block;
        margin: 0 auto;
        padding: 9px 20px;
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        background-color: #8BC34A;
        border-radius: 17px;
    }
    .thank-you-pop a i{
        margin-right:5px;
        color:#fff;
    }
    #ignismyModal .modal-header{
        border:0px;
    }
    
    #contact{
        padding-bottom: 9px;
        padding-top: 90px;
    }
    /*--thank you pop ends here--*/

</style>

<div class=\"modal-body\" style=\"padding-bottom: 0px;padding-top: 0px;\">

    <div class=\"thank-you-pop\">
        <img src=\"http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png\" alt=\"\">
        <h1>Mes félicitations!</h1>
        <p>Votre enregistrement a été éffectué avec succès !</p>
        <h3><a href=\"";
        // line 72
        echo url("/");
        echo "\" style=\"color: #fff;cursor: pointer;text-decoration: none;\">Effectuez un nouvel enregistrement</a></h3>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/pages/succes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 72,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    /*--thank you pop starts here--*/
    .thank-you-pop{
        width:100%;
        padding:20px;
        text-align:center;
    }
    .thank-you-pop img{
        width:76px;
        height:auto;
        margin:0 auto;
        display:block;
        margin-bottom:25px;
    }

    .thank-you-pop h1{
        font-size: 42px;
        margin-bottom: 25px;
        color:#5C5C5C;
    }
    .thank-you-pop p{
        font-size: 20px;
        margin-bottom: 27px;
        color:#5C5C5C;
    }
    .thank-you-pop h3.cupon-pop{
        font-size: 25px;
        margin-bottom: 40px;
        color:#222;
        display:inline-block;
        text-align:center;
        padding:10px 20px;
        border:2px dashed #222;
        clear:both;
        font-weight:normal;
    }
    .thank-you-pop h3.cupon-pop span{
        color:#03A9F4;
    }
    .thank-you-pop a{
        display: inline-block;
        margin: 0 auto;
        padding: 9px 20px;
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        background-color: #8BC34A;
        border-radius: 17px;
    }
    .thank-you-pop a i{
        margin-right:5px;
        color:#fff;
    }
    #ignismyModal .modal-header{
        border:0px;
    }
    
    #contact{
        padding-bottom: 9px;
        padding-top: 90px;
    }
    /*--thank you pop ends here--*/

</style>

<div class=\"modal-body\" style=\"padding-bottom: 0px;padding-top: 0px;\">

    <div class=\"thank-you-pop\">
        <img src=\"http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png\" alt=\"\">
        <h1>Mes félicitations!</h1>
        <p>Votre enregistrement a été éffectué avec succès !</p>
        <h3><a href=\"{{ url('/') }}\" style=\"color: #fff;cursor: pointer;text-decoration: none;\">Effectuez un nouvel enregistrement</a></h3>

    </div>

</div>", "/Applications/MAMP/htdocs/appchurch/back/themes/responsiv-clean/pages/succes.htm", "");
    }
}
