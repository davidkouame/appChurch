<?php

/* /var/www/html/appChurch/back/themes/responsiv-clean/layouts/saintmathieunavbar.htm */
class __TwigTemplate_37ddf026d0daa91bed28a308badabc36dcb8d4a7389f340ec8909b67ce111b4a extends Twig_Template
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
        <div class=\"modal fade\" id=\"createDiplomeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\">Ajouter un diplôme</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>
              <div class=\"modal-body\">
                <form>
                  <div class=\"form-group\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Libellé:</label>
                    <input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleDiplome\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"message-text\" class=\"col-form-label\">Date début:</label>
                    <input type=\"date\" name=\"date_debut\" class=\"form-control\" id=\"dateDebutDiplome\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"message-text\" class=\"col-form-label\">Date fin:</label>
                    <input type=\"date\" name=\"date_fin\" class=\"form-control\" id=\"dateFinDiplome\">
                  </div>
                </form>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"saveDiplome\">Ajouter</button>
              </div>
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"createExperienceModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\">Ajouter une expérience professionnelle</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>
              <div class=\"modal-body\">
                <form>
                  <div class=\"form-group\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Libellé:</label>
                    <input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleExperience\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"message-text\" class=\"col-form-label\">Date début:</label>
                    <input type=\"date\" name=\"date_debut\" class=\"form-control\" id=\"dateDebutExperience\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"message-text\" class=\"col-form-label\">Date fin:</label>
                    <input type=\"date\" name=\"date_fin\" class=\"form-control\" id=\"dateFinExperience\">
                  </div>
                </form>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"saveExperience\">Ajouter</button>
              </div>
            </div>
          </div>
        </div>

        <script>
            \$(document).ready(function () {
                \$(\"html\").removeAttr(\"font-size\");
                var \$j = jQuery.noConflict();
                var lengthTr = 1;
                var dataTable = null;
                // \$j('.datepicker').datepicker({dateFormat: 'yyyy-mm-dd'});

                \$(\"#openModalCreateDiplome\").click(function(){
                    \$(\"#createDiplomeModal\").modal();
                });

                \$(\"#openModalCreateExperience\").click(function(){
                    \$(\"#createExperienceModal\").modal();
                });

                \$(\"#saveDiplome\").click(function(){
                    if(lengthTr == 1){
                        \$(\"#firstTrDiplome\").empty();
                    }
                    let tdlibelleDiplome = '<td class=\"libelleDiplome\" data-libellediplome=\"'+\$(\"#libelleDiplome\").val()+'\">'+\$(\"#libelleDiplome\").val()+'</td>';
                    let tdDateDebutDiplome = '<td class=\"dateDebutDiplome\" data-datedebutdiplome=\"'+\$(\"#dateDebutDiplome\").val()+'\">'+\$(\"#dateDebutDiplome\").val()+'</td>';
                    let tdDateFinDiplome = '<td class=\"dateFinDiplome\" data-datefindiplome=\"'+\$(\"#dateFinDiplome\").val()+'\">'+\$(\"#dateFinDiplome\").val()+'</td>';
                    var content = '<tr scope=\"row\" class=\"dataDiplome\" data-diplome_id=\"'+lengthTr+'\"><th scope=\"row\">1</th>'+tdlibelleDiplome+tdDateDebutDiplome+tdDateFinDiplome+
                    '<td><a class=\"btn btn-danger supprimerDiplome\" href=\"#\">supprimer</a><a class=\"btn btn-primary modifierDiplome\" href=\"#\">edit</a></td></tr>';
                    \$(\"#tableDiplome tbody\").append(content);
                    \$(\"#libelleDiplome\").val(\"\");
                    \$(\"#dateDebutDiplome\").val(\"\");
                    \$(\"#dateFinDiplome\").val(\"\");
                    lengthTr+=1;
                    \$(\"#createDiplomeModal\").modal('toggle');
                });

                \$(\"#saveExperience\").click(function(){
                    if(lengthTr == 0){
                        \$(\"#firstTrExperience\").empty();
                    }
                    var content = '<tr scope=\"row\"><th scope=\"row\">1</th><td>'+
                    \$(\"#libelleExperience\").val()+'</td><td>'+\$(\"#dateDebutExperience\").val()
                    +'</td><td>'+\$(\"#dateFinExperience\").val()+'</td><td><a class=\"btn btn-danger supprimerExperience\" href=\"#\">supprimer</a><a class=\"btn btn-primary modifierExperience\" href=\"#\">edit</a></td></tr>';
                    \$(\"#tableExperience tbody\").append(content);
                    \$(\"#libelleExperience\").val(\"\");
                    \$(\"#dateDebutExperience\").val(\"\");
                    \$(\"#dateFinExperience\").val(\"\");
                    lengthTr+=1;
                    \$(\"#createExperienceModal\").modal('toggle');
                });

                \$(\".supprimerDiplome\").click(function(){

                });

                \$(\".modifierDiplome\").click(function(){

                });

                \$(\"#saveParoissien\").submit(function(){
                    let datasDiplomes = [];
                    \$(\".dataDiplome\").each(function(e){
                        let dataDiplome = \$(this);
                        let libelleDiplome = dataDiplome.find('.libelleDiplome').data('libellediplome');
                        let dateDebutDiplome = dataDiplome.find('.dateDebutDiplome').data('datedebutdiplome');
                        let dateFinDiplome = dataDiplome.find('.dateFinDiplome').data('datefindiplome');
                        datasDiplomes.push({\"libelle\" : libelleDiplome, \"date_debut\": dateDebutDiplome, \"date_fin\": dateFinDiplome});
                    });
                    \$(\"input[name='diplomes'\").val(JSON.stringify(datasDiplomes));
                    // \$(\"input[name='diplomes'\").val(\"ssdfsd\");
                    return true;
                });
            });
        </script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/appChurch/back/themes/responsiv-clean/layouts/saintmathieunavbar.htm";
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

        <div class=\"modal fade\" id=\"createDiplomeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\">Ajouter un diplôme</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>
              <div class=\"modal-body\">
                <form>
                  <div class=\"form-group\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Libellé:</label>
                    <input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleDiplome\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"message-text\" class=\"col-form-label\">Date début:</label>
                    <input type=\"date\" name=\"date_debut\" class=\"form-control\" id=\"dateDebutDiplome\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"message-text\" class=\"col-form-label\">Date fin:</label>
                    <input type=\"date\" name=\"date_fin\" class=\"form-control\" id=\"dateFinDiplome\">
                  </div>
                </form>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"saveDiplome\">Ajouter</button>
              </div>
            </div>
          </div>
        </div>

        <div class=\"modal fade\" id=\"createExperienceModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\">Ajouter une expérience professionnelle</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>
              <div class=\"modal-body\">
                <form>
                  <div class=\"form-group\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Libellé:</label>
                    <input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleExperience\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"message-text\" class=\"col-form-label\">Date début:</label>
                    <input type=\"date\" name=\"date_debut\" class=\"form-control\" id=\"dateDebutExperience\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"message-text\" class=\"col-form-label\">Date fin:</label>
                    <input type=\"date\" name=\"date_fin\" class=\"form-control\" id=\"dateFinExperience\">
                  </div>
                </form>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"saveExperience\">Ajouter</button>
              </div>
            </div>
          </div>
        </div>

        <script>
            \$(document).ready(function () {
                \$(\"html\").removeAttr(\"font-size\");
                var \$j = jQuery.noConflict();
                var lengthTr = 1;
                var dataTable = null;
                // \$j('.datepicker').datepicker({dateFormat: 'yyyy-mm-dd'});

                \$(\"#openModalCreateDiplome\").click(function(){
                    \$(\"#createDiplomeModal\").modal();
                });

                \$(\"#openModalCreateExperience\").click(function(){
                    \$(\"#createExperienceModal\").modal();
                });

                \$(\"#saveDiplome\").click(function(){
                    if(lengthTr == 1){
                        \$(\"#firstTrDiplome\").empty();
                    }
                    let tdlibelleDiplome = '<td class=\"libelleDiplome\" data-libellediplome=\"'+\$(\"#libelleDiplome\").val()+'\">'+\$(\"#libelleDiplome\").val()+'</td>';
                    let tdDateDebutDiplome = '<td class=\"dateDebutDiplome\" data-datedebutdiplome=\"'+\$(\"#dateDebutDiplome\").val()+'\">'+\$(\"#dateDebutDiplome\").val()+'</td>';
                    let tdDateFinDiplome = '<td class=\"dateFinDiplome\" data-datefindiplome=\"'+\$(\"#dateFinDiplome\").val()+'\">'+\$(\"#dateFinDiplome\").val()+'</td>';
                    var content = '<tr scope=\"row\" class=\"dataDiplome\" data-diplome_id=\"'+lengthTr+'\"><th scope=\"row\">1</th>'+tdlibelleDiplome+tdDateDebutDiplome+tdDateFinDiplome+
                    '<td><a class=\"btn btn-danger supprimerDiplome\" href=\"#\">supprimer</a><a class=\"btn btn-primary modifierDiplome\" href=\"#\">edit</a></td></tr>';
                    \$(\"#tableDiplome tbody\").append(content);
                    \$(\"#libelleDiplome\").val(\"\");
                    \$(\"#dateDebutDiplome\").val(\"\");
                    \$(\"#dateFinDiplome\").val(\"\");
                    lengthTr+=1;
                    \$(\"#createDiplomeModal\").modal('toggle');
                });

                \$(\"#saveExperience\").click(function(){
                    if(lengthTr == 0){
                        \$(\"#firstTrExperience\").empty();
                    }
                    var content = '<tr scope=\"row\"><th scope=\"row\">1</th><td>'+
                    \$(\"#libelleExperience\").val()+'</td><td>'+\$(\"#dateDebutExperience\").val()
                    +'</td><td>'+\$(\"#dateFinExperience\").val()+'</td><td><a class=\"btn btn-danger supprimerExperience\" href=\"#\">supprimer</a><a class=\"btn btn-primary modifierExperience\" href=\"#\">edit</a></td></tr>';
                    \$(\"#tableExperience tbody\").append(content);
                    \$(\"#libelleExperience\").val(\"\");
                    \$(\"#dateDebutExperience\").val(\"\");
                    \$(\"#dateFinExperience\").val(\"\");
                    lengthTr+=1;
                    \$(\"#createExperienceModal\").modal('toggle');
                });

                \$(\".supprimerDiplome\").click(function(){

                });

                \$(\".modifierDiplome\").click(function(){

                });

                \$(\"#saveParoissien\").submit(function(){
                    let datasDiplomes = [];
                    \$(\".dataDiplome\").each(function(e){
                        let dataDiplome = \$(this);
                        let libelleDiplome = dataDiplome.find('.libelleDiplome').data('libellediplome');
                        let dateDebutDiplome = dataDiplome.find('.dateDebutDiplome').data('datedebutdiplome');
                        let dateFinDiplome = dataDiplome.find('.dateFinDiplome').data('datefindiplome');
                        datasDiplomes.push({\"libelle\" : libelleDiplome, \"date_debut\": dateDebutDiplome, \"date_fin\": dateFinDiplome});
                    });
                    \$(\"input[name='diplomes'\").val(JSON.stringify(datasDiplomes));
                    // \$(\"input[name='diplomes'\").val(\"ssdfsd\");
                    return true;
                });
            });
        </script>
    </body>
</html>", "/var/www/html/appChurch/back/themes/responsiv-clean/layouts/saintmathieunavbar.htm", "");
    }
}
