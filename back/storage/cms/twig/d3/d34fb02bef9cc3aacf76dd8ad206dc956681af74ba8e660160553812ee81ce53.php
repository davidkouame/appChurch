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
        echo "description = \"Saint Mathieu Layout\" ==
<!DOCTYPE html>
<html lang=\"en\">

<head>

\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">

\t<title>Saint Mathieu</title>

\t<!-- Font Awesome Icons -->
\t<!--        <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("vendor/fontawesome-free/css/all.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">-->

\t<!-- Google Fonts -->
\t<link href=\"https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700\" rel=\"stylesheet\">
\t<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic'
\t\trel='stylesheet' type='text/css'>

\t<!-- Plugin CSS -->
\t<!--        <link href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/magnific-popup.css");
        echo "\" rel=\"stylesheet\">-->

\t<!-- Theme CSS - Includes Bootstrap -->

\t<!--        <link href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">-->
\t";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "\t<!--        <link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" >-->

\t<link href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/creative.min.css");
        echo "\" rel=\"stylesheet\">

\t<link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css");
        echo "\"
\t\trel=\"stylesheet\">

\t<style type=\"text/css\">
\t\tbutton.navbar-toggler.navbar-toggler {
\t\t\tdisplay: none;
\t\t}
\t</style>

</head>

<body id=\"page-top\">

\t<div style=\"max-width: 1403px; margin: 0 auto\">
\t\t<!-- Header -->
\t\t";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/headernavbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "
\t\t<!-- Content -->
\t\t<section class=\"page-section\" id=\"contact\" style=\"padding-bottom: 60px;\">";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        echo "</section>

\t\t<!-- Footer -->
\t\t<footer class=\"bg-light py-5\"> ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " </footer>
\t</div>

\t<!-- Scripts -->
\t";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scriptsnavabar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "
\t<div class=\"modal fade\" id=\"createDiplomeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\t\taria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">Ajouter un diplôme</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Libellé:</label>
\t\t\t\t\t\t\t<!-- <input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleDiplome\"> -->
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"libelle\" id=\"libelleDiplome\">
\t\t\t\t\t\t\t\t<option value=\"\">Sélectionner un diplôme</option>
\t\t\t\t\t\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["diplomes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diplome"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diplome"], "denomination", []), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t\t\t\t\t\t<!-- <option value=\"autre\">Autre</option> -->
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"inputAutreDiplome\" 
\t\t\t\t\t\t\tplaceholder=\"Autre\" style=\"margin-top: 14px;display: none\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tdébut:</label> <input type=\"date\" name=\"date_debut\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateDebutDiplome\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tfin:</label> <input type=\"date\" name=\"date_fin\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateFinDiplome\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"saveDiplome\">Ajouter</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"modal fade\" id=\"createExperienceModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\t\taria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">Ajouter une expérience professionnelle</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Libellé:</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleExperience\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tdébut:</label> <input type=\"date\" name=\"date_debut\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateDebutExperience\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tfin:</label> <input type=\"date\" name=\"date_fin\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateFinExperience\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"saveExperience\">Ajouter</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\t\$(document)
\t\t\t.ready(
\t\t\t\tfunction () {
\t\t\t\t\t\$(\"html\").removeAttr(\"font-size\");
\t\t\t\t\tvar \$j = jQuery.noConflict();
\t\t\t\t\tvar lengthTr = 1;
\t\t\t\t\tvar dataTable = null;
\t\t\t\t\t// \$j('.datepicker').datepicker({dateFormat: 'yyyy-mm-dd'});

\t\t\t\t\t\$(\"#openModalCreateDiplome\").click(function () {
\t\t\t\t\t\t\$(\"#createDiplomeModal\").modal();
\t\t\t\t\t});

\t\t\t\t\t\$(\"#openModalCreateExperience\").click(function () {
\t\t\t\t\t\t\$(\"#createExperienceModal\").modal();
\t\t\t\t\t});

\t\t\t\t\t\$(\"#saveDiplome\")
\t\t\t\t\t\t.click(
\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\tif (lengthTr == 1) {
\t\t\t\t\t\t\t\t\t\$(\"#firstTrDiplome\")
\t\t\t\t\t\t\t\t\t\t.empty();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// console.log(\"libelle diplome\" +\$(\"#libelleDiplome option:selected\").text());
\t\t\t\t\t\t\t\t// return false;
\t\t\t\t\t\t\t\tlet tdlibelleDiplome = '<td class=\"libelleDiplome\" data-libellediplome=\"'
\t\t\t\t\t\t\t\t\t+ \$(\"#libelleDiplome\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(\"#libelleDiplome option:selected\").text()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tlet tdDateDebutDiplome = '<td class=\"dateDebutDiplome\" data-datedebutdiplome=\"'
\t\t\t\t\t\t\t\t\t+ \$(\"#dateDebutDiplome\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(\"#dateDebutDiplome\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tlet tdDateFinDiplome = '<td class=\"dateFinDiplome\" data-datefindiplome=\"'
\t\t\t\t\t\t\t\t\t+ \$(\"#dateFinDiplome\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(\"#dateFinDiplome\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tvar content = '<tr scope=\"row\" class=\"dataDiplome\" data-diplome_id=\"' + lengthTr + '\"><th scope=\"row\">1</th>'
\t\t\t\t\t\t\t\t\t+ tdlibelleDiplome
\t\t\t\t\t\t\t\t\t+ tdDateDebutDiplome
\t\t\t\t\t\t\t\t\t+ tdDateFinDiplome
\t\t\t\t\t\t\t\t\t+ '<td><a class=\"btn btn-danger supprimerDiplome\" href=\"#\">supprimer</a><a class=\"btn btn-primary modifierDiplome\" href=\"#\">edit</a></td></tr>';
\t\t\t\t\t\t\t\t\$(\"#tableDiplome tbody\")
\t\t\t\t\t\t\t\t\t.append(content);
\t\t\t\t\t\t\t\t\$(\"#libelleDiplome\").val(\"\");
\t\t\t\t\t\t\t\t\$(\"#dateDebutDiplome\").val(\"\");
\t\t\t\t\t\t\t\t\$(\"#dateFinDiplome\").val(\"\");
\t\t\t\t\t\t\t\tlengthTr += 1;
\t\t\t\t\t\t\t\t\$(\"#createDiplomeModal\").modal(
\t\t\t\t\t\t\t\t\t'toggle');
\t\t\t\t\t\t\t});

\t\t\t\t\t\$(\"#saveExperience\")
\t\t\t\t\t\t.click(
\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\tif (lengthTr == 1) {
\t\t\t\t\t\t\t\t\t\$(\"#firstTrExperience\")
\t\t\t\t\t\t\t\t\t\t.empty();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tlet tdlibelleExperience = '<td class=\"libelleExperience\" data-libelleexperience=\"'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#libelleExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#libelleExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tlet tdDateDebutExperience = '<td class=\"dateDebutExperience\" data-datedebutexperience=\"'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#dateDebutExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#dateDebutExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tlet tdDateFinExperience = '<td class=\"dateFinExperience\" data-datefinexperience=\"'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#dateFinExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#dateFinExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tvar content = '<tr scope=\"row\" class=\"dataExperience\" data-experience_id=\"' + lengthTr + '\"><th scope=\"row\">1</th>'
\t\t\t\t\t\t\t\t\t+ tdlibelleExperience
\t\t\t\t\t\t\t\t\t+ tdDateDebutExperience
\t\t\t\t\t\t\t\t\t+ tdDateFinExperience
\t\t\t\t\t\t\t\t\t+ '<td><a class=\"btn btn-danger supprimerExperience\" href=\"#\">supprimer</a><a class=\"btn btn-primary modifierExperience\" href=\"#\">edit</a></td></tr>';
\t\t\t\t\t\t\t\t\$(\"#tableExperience tbody\")
\t\t\t\t\t\t\t\t\t.append(content);
\t\t\t\t\t\t\t\t\$(\"#libelleExperience\").val(\"\");
\t\t\t\t\t\t\t\t\$(\"#dateDebutExperience\").val(
\t\t\t\t\t\t\t\t\t\"\");
\t\t\t\t\t\t\t\t\$(\"#dateFinExperience\").val(\"\");
\t\t\t\t\t\t\t\tlengthTr += 1;
\t\t\t\t\t\t\t\t\$(\"#createExperienceModal\")
\t\t\t\t\t\t\t\t\t.modal('toggle');

\t\t\t\t\t\t\t\t/*if(lengthTr == 0){
\t\t\t\t\t\t\t\t\t\$(\"#firstTrExperience\").empty();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tvar content = '<tr scope=\"row\"><th scope=\"row\">1</th><td>'+
\t\t\t\t\t\t\t\t\$(\"#libelleExperience\").val()+'</td><td>'+\$(\"#dateDebutExperience\").val()
\t\t\t\t\t\t\t\t+'</td><td>'+\$(\"#dateFinExperience\").val()+'</td><td><a class=\"btn btn-danger supprimerExperience\" href=\"#\">supprimer</a><a class=\"btn btn-primary modifierExperience\" href=\"#\">edit</a></td></tr>';
\t\t\t\t\t\t\t\t\$(\"#tableExperience tbody\").append(content);
\t\t\t\t\t\t\t\t\$(\"#libelleExperience\").val(\"\");
\t\t\t\t\t\t\t\t\$(\"#dateDebutExperience\").val(\"\");
\t\t\t\t\t\t\t\t\$(\"#dateFinExperience\").val(\"\");
\t\t\t\t\t\t\t\tlengthTr+=1;
\t\t\t\t\t\t\t\t\$(\"#createExperienceModal\").modal('toggle');*/
\t\t\t\t\t\t\t});

\t\t\t\t\t\$(\".supprimerDiplome\").click(function () {

\t\t\t\t\t});

\t\t\t\t\t\$(\".modifierDiplome\").click(function () {

\t\t\t\t\t});

\t\t\t\t\t\$(\"#saveParoissien\")
\t\t\t\t\t\t.submit(
\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t// let datasDiplomes = [];
\t\t\t\t\t\t\t\tlet countDiplome = 0;
\t\t\t\t\t\t\t\t// let datasExperiences = [];
\t\t\t\t\t\t\t\tlet countExperience = 0;
\t\t\t\t\t\t\t\t\$(\".dataDiplome\")
\t\t\t\t\t\t\t\t\t.each(
\t\t\t\t\t\t\t\t\t\tfunction (e) {
\t\t\t\t\t\t\t\t\t\t\tlet dataDiplome = \$(this);
\t\t\t\t\t\t\t\t\t\t\tlet libelleDiplome = dataDiplome
\t\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t\t'.libelleDiplome')
\t\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t\t'libellediplome');
\t\t\t\t\t\t\t\t\t\t\tlet dateDebutDiplome = dataDiplome
\t\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t\t'.dateDebutDiplome')
\t\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t\t'datedebutdiplome');
\t\t\t\t\t\t\t\t\t\t\tlet dateFinDiplome = dataDiplome
\t\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t\t'.dateFinDiplome')
\t\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t\t'datefindiplome');
\t\t\t\t\t\t\t\t\t\t\t/*datasDiplomes
\t\t\t\t\t\t\t\t\t\t\t\t.push([
\t\t\t\t\t\t\t\t\t\t\t\t\tlibelleDiplome,
\t\t\t\t\t\t\t\t\t\t\t\t\tdateDebutDiplome,
\t\t\t\t\t\t\t\t\t\t\t\t\tdateFinDiplome]);*/
\t\t\t\t\t\t\t\t\t\t\tlet content = '<input type=\"text\" name=\"diplomes[' + countDiplome + '][libelle]\" value=\"' + libelleDiplome + '\" hidden>';
\t\t\t\t\t\t\t\t\t\t\tcontent += '<input type=\"text\" name=\"diplomes[' + countDiplome + '][date_debut]\" value=\"' + dateDebutDiplome + '\" hidden>';
\t\t\t\t\t\t\t\t\t\t\tcontent += '<input type=\"text\" name=\"diplomes[' + countDiplome + '][date_fin]\" value=\"' + dateFinDiplome + '\" hidden>';
\t\t\t\t\t\t\t\t\t\t\tcountDiplome += 1;
\t\t\t\t\t\t\t\t\t\t\t\$(
\t\t\t\t\t\t\t\t\t\t\t\t\"#saveParoissien\")
\t\t\t\t\t\t\t\t\t\t\t\t.append(
\t\t\t\t\t\t\t\t\t\t\t\t\tcontent);
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(\".dataExperience\")
\t\t\t\t\t\t\t\t.each(
\t\t\t\t\t\t\t\t\tfunction (e) {
\t\t\t\t\t\t\t\t\t\tlet dataExperience = \$(this);
\t\t\t\t\t\t\t\t\t\tlet libelleExperience = dataExperience
\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t'.libelleExperience')
\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t'libelleexperience');
\t\t\t\t\t\t\t\t\t\tlet dateDebutExperience = dataExperience
\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t'.dateDebutExperience')
\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t'datedebutexperience');
\t\t\t\t\t\t\t\t\t\tlet dateFinExperience = dataExperience
\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t'.dateFinExperience')
\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t'datefinexperience');
\t\t\t\t\t\t\t\t\t\t/*datasDiplomes
\t\t\t\t\t\t\t\t\t\t\t.push([
\t\t\t\t\t\t\t\t\t\t\t\tlibelleExperience,
\t\t\t\t\t\t\t\t\t\t\t\tdateDebutExperience,
\t\t\t\t\t\t\t\t\t\t\t\tdateFinExperience]);*/
\t\t\t\t\t\t\t\t\t\tlet content = '<input type=\"text\" name=\"experiences[' + countExperience + '][libelle]\" value=\"' + libelleExperience + '\" hidden>';
\t\t\t\t\t\t\t\t\t\tcontent += '<input type=\"text\" name=\"experiences[' + countExperience + '][date_debut]\" value=\"' + dateDebutExperience + '\" hidden>';
\t\t\t\t\t\t\t\t\t\tcontent += '<input type=\"text\" name=\"experiences[' + countExperience + '][date_fin]\" value=\"' + dateFinExperience + '\" hidden>';
\t\t\t\t\t\t\t\t\t\tcountExperience += 1;
\t\t\t\t\t\t\t\t\t\t\$(
\t\t\t\t\t\t\t\t\t\t\t\"#saveParoissien\")
\t\t\t\t\t\t\t\t\t\t\t.append(
\t\t\t\t\t\t\t\t\t\t\t\tcontent);
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t/*\$(\"#selectDiplome\").change(function(e){
\t\t\t\t\t\tif(\$(this).val() == \"autre\"){
\t\t\t\t\t\t\t\$(\"#inputAutreDiplome\").show();
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(\"#inputAutreDiplome\").hide();
\t\t\t\t\t\t}
\t\t\t\t\t});*/
\t\t\t\t});
\t</script>
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
        return array (  156 => 80,  145 => 78,  141 => 77,  121 => 59,  117 => 58,  108 => 54,  102 => 51,  98 => 49,  94 => 48,  76 => 33,  71 => 31,  65 => 29,  61 => 28,  57 => 27,  50 => 23,  39 => 15,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("description = \"Saint Mathieu Layout\" ==
<!DOCTYPE html>
<html lang=\"en\">

<head>

\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">

\t<title>Saint Mathieu</title>

\t<!-- Font Awesome Icons -->
\t<!--        <link href=\"{{ 'vendor/fontawesome-free/css/all.min.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\">-->

\t<!-- Google Fonts -->
\t<link href=\"https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700\" rel=\"stylesheet\">
\t<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic'
\t\trel='stylesheet' type='text/css'>

\t<!-- Plugin CSS -->
\t<!--        <link href=\"{{ 'assets/vendor/magnific-popup/magnific-popup.css'|theme }}\" rel=\"stylesheet\">-->

\t<!-- Theme CSS - Includes Bootstrap -->

\t<!--        <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">-->
\t{% partial 'site/meta' %}
\t<!--        <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css'| theme}}\" >-->

\t<link href=\"{{ 'assets/css/creative.min.css'|theme }}\" rel=\"stylesheet\">

\t<link href=\"{{ 'assets/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css'|theme }}\"
\t\trel=\"stylesheet\">

\t<style type=\"text/css\">
\t\tbutton.navbar-toggler.navbar-toggler {
\t\t\tdisplay: none;
\t\t}
\t</style>

</head>

<body id=\"page-top\">

\t<div style=\"max-width: 1403px; margin: 0 auto\">
\t\t<!-- Header -->
\t\t{% partial 'site/headernavbar' %}

\t\t<!-- Content -->
\t\t<section class=\"page-section\" id=\"contact\" style=\"padding-bottom: 60px;\">{% page %}</section>

\t\t<!-- Footer -->
\t\t<footer class=\"bg-light py-5\"> {% partial 'site/footer' %} </footer>
\t</div>

\t<!-- Scripts -->
\t{% partial 'site/scriptsnavabar' %}

\t<div class=\"modal fade\" id=\"createDiplomeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\t\taria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">Ajouter un diplôme</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Libellé:</label>
\t\t\t\t\t\t\t<!-- <input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleDiplome\"> -->
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"libelle\" id=\"libelleDiplome\">
\t\t\t\t\t\t\t\t<option value=\"\">Sélectionner un diplôme</option>
\t\t\t\t\t\t\t\t{% for diplome in diplomes %}
\t\t\t\t\t\t\t\t\t<option value=\"{{ diplome.id }}\">{{ diplome.denomination }}</option>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t<!-- <option value=\"autre\">Autre</option> -->
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"inputAutreDiplome\" 
\t\t\t\t\t\t\tplaceholder=\"Autre\" style=\"margin-top: 14px;display: none\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tdébut:</label> <input type=\"date\" name=\"date_debut\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateDebutDiplome\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tfin:</label> <input type=\"date\" name=\"date_fin\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateFinDiplome\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"saveDiplome\">Ajouter</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"modal fade\" id=\"createExperienceModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\t\taria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">Ajouter une expérience professionnelle</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Libellé:</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleExperience\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tdébut:</label> <input type=\"date\" name=\"date_debut\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateDebutExperience\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tfin:</label> <input type=\"date\" name=\"date_fin\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateFinExperience\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"saveExperience\">Ajouter</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\t\$(document)
\t\t\t.ready(
\t\t\t\tfunction () {
\t\t\t\t\t\$(\"html\").removeAttr(\"font-size\");
\t\t\t\t\tvar \$j = jQuery.noConflict();
\t\t\t\t\tvar lengthTr = 1;
\t\t\t\t\tvar dataTable = null;
\t\t\t\t\t// \$j('.datepicker').datepicker({dateFormat: 'yyyy-mm-dd'});

\t\t\t\t\t\$(\"#openModalCreateDiplome\").click(function () {
\t\t\t\t\t\t\$(\"#createDiplomeModal\").modal();
\t\t\t\t\t});

\t\t\t\t\t\$(\"#openModalCreateExperience\").click(function () {
\t\t\t\t\t\t\$(\"#createExperienceModal\").modal();
\t\t\t\t\t});

\t\t\t\t\t\$(\"#saveDiplome\")
\t\t\t\t\t\t.click(
\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\tif (lengthTr == 1) {
\t\t\t\t\t\t\t\t\t\$(\"#firstTrDiplome\")
\t\t\t\t\t\t\t\t\t\t.empty();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// console.log(\"libelle diplome\" +\$(\"#libelleDiplome option:selected\").text());
\t\t\t\t\t\t\t\t// return false;
\t\t\t\t\t\t\t\tlet tdlibelleDiplome = '<td class=\"libelleDiplome\" data-libellediplome=\"'
\t\t\t\t\t\t\t\t\t+ \$(\"#libelleDiplome\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(\"#libelleDiplome option:selected\").text()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tlet tdDateDebutDiplome = '<td class=\"dateDebutDiplome\" data-datedebutdiplome=\"'
\t\t\t\t\t\t\t\t\t+ \$(\"#dateDebutDiplome\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(\"#dateDebutDiplome\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tlet tdDateFinDiplome = '<td class=\"dateFinDiplome\" data-datefindiplome=\"'
\t\t\t\t\t\t\t\t\t+ \$(\"#dateFinDiplome\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(\"#dateFinDiplome\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tvar content = '<tr scope=\"row\" class=\"dataDiplome\" data-diplome_id=\"' + lengthTr + '\"><th scope=\"row\">1</th>'
\t\t\t\t\t\t\t\t\t+ tdlibelleDiplome
\t\t\t\t\t\t\t\t\t+ tdDateDebutDiplome
\t\t\t\t\t\t\t\t\t+ tdDateFinDiplome
\t\t\t\t\t\t\t\t\t+ '<td><a class=\"btn btn-danger supprimerDiplome\" href=\"#\">supprimer</a><a class=\"btn btn-primary modifierDiplome\" href=\"#\">edit</a></td></tr>';
\t\t\t\t\t\t\t\t\$(\"#tableDiplome tbody\")
\t\t\t\t\t\t\t\t\t.append(content);
\t\t\t\t\t\t\t\t\$(\"#libelleDiplome\").val(\"\");
\t\t\t\t\t\t\t\t\$(\"#dateDebutDiplome\").val(\"\");
\t\t\t\t\t\t\t\t\$(\"#dateFinDiplome\").val(\"\");
\t\t\t\t\t\t\t\tlengthTr += 1;
\t\t\t\t\t\t\t\t\$(\"#createDiplomeModal\").modal(
\t\t\t\t\t\t\t\t\t'toggle');
\t\t\t\t\t\t\t});

\t\t\t\t\t\$(\"#saveExperience\")
\t\t\t\t\t\t.click(
\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\tif (lengthTr == 1) {
\t\t\t\t\t\t\t\t\t\$(\"#firstTrExperience\")
\t\t\t\t\t\t\t\t\t\t.empty();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tlet tdlibelleExperience = '<td class=\"libelleExperience\" data-libelleexperience=\"'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#libelleExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#libelleExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tlet tdDateDebutExperience = '<td class=\"dateDebutExperience\" data-datedebutexperience=\"'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#dateDebutExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#dateDebutExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tlet tdDateFinExperience = '<td class=\"dateFinExperience\" data-datefinexperience=\"'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#dateFinExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '\">'
\t\t\t\t\t\t\t\t\t+ \$(
\t\t\t\t\t\t\t\t\t\t\"#dateFinExperience\")
\t\t\t\t\t\t\t\t\t\t.val()
\t\t\t\t\t\t\t\t\t+ '</td>';
\t\t\t\t\t\t\t\tvar content = '<tr scope=\"row\" class=\"dataExperience\" data-experience_id=\"' + lengthTr + '\"><th scope=\"row\">1</th>'
\t\t\t\t\t\t\t\t\t+ tdlibelleExperience
\t\t\t\t\t\t\t\t\t+ tdDateDebutExperience
\t\t\t\t\t\t\t\t\t+ tdDateFinExperience
\t\t\t\t\t\t\t\t\t+ '<td><a class=\"btn btn-danger supprimerExperience\" href=\"#\">supprimer</a><a class=\"btn btn-primary modifierExperience\" href=\"#\">edit</a></td></tr>';
\t\t\t\t\t\t\t\t\$(\"#tableExperience tbody\")
\t\t\t\t\t\t\t\t\t.append(content);
\t\t\t\t\t\t\t\t\$(\"#libelleExperience\").val(\"\");
\t\t\t\t\t\t\t\t\$(\"#dateDebutExperience\").val(
\t\t\t\t\t\t\t\t\t\"\");
\t\t\t\t\t\t\t\t\$(\"#dateFinExperience\").val(\"\");
\t\t\t\t\t\t\t\tlengthTr += 1;
\t\t\t\t\t\t\t\t\$(\"#createExperienceModal\")
\t\t\t\t\t\t\t\t\t.modal('toggle');

\t\t\t\t\t\t\t\t/*if(lengthTr == 0){
\t\t\t\t\t\t\t\t\t\$(\"#firstTrExperience\").empty();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tvar content = '<tr scope=\"row\"><th scope=\"row\">1</th><td>'+
\t\t\t\t\t\t\t\t\$(\"#libelleExperience\").val()+'</td><td>'+\$(\"#dateDebutExperience\").val()
\t\t\t\t\t\t\t\t+'</td><td>'+\$(\"#dateFinExperience\").val()+'</td><td><a class=\"btn btn-danger supprimerExperience\" href=\"#\">supprimer</a><a class=\"btn btn-primary modifierExperience\" href=\"#\">edit</a></td></tr>';
\t\t\t\t\t\t\t\t\$(\"#tableExperience tbody\").append(content);
\t\t\t\t\t\t\t\t\$(\"#libelleExperience\").val(\"\");
\t\t\t\t\t\t\t\t\$(\"#dateDebutExperience\").val(\"\");
\t\t\t\t\t\t\t\t\$(\"#dateFinExperience\").val(\"\");
\t\t\t\t\t\t\t\tlengthTr+=1;
\t\t\t\t\t\t\t\t\$(\"#createExperienceModal\").modal('toggle');*/
\t\t\t\t\t\t\t});

\t\t\t\t\t\$(\".supprimerDiplome\").click(function () {

\t\t\t\t\t});

\t\t\t\t\t\$(\".modifierDiplome\").click(function () {

\t\t\t\t\t});

\t\t\t\t\t\$(\"#saveParoissien\")
\t\t\t\t\t\t.submit(
\t\t\t\t\t\t\tfunction () {
\t\t\t\t\t\t\t\t// let datasDiplomes = [];
\t\t\t\t\t\t\t\tlet countDiplome = 0;
\t\t\t\t\t\t\t\t// let datasExperiences = [];
\t\t\t\t\t\t\t\tlet countExperience = 0;
\t\t\t\t\t\t\t\t\$(\".dataDiplome\")
\t\t\t\t\t\t\t\t\t.each(
\t\t\t\t\t\t\t\t\t\tfunction (e) {
\t\t\t\t\t\t\t\t\t\t\tlet dataDiplome = \$(this);
\t\t\t\t\t\t\t\t\t\t\tlet libelleDiplome = dataDiplome
\t\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t\t'.libelleDiplome')
\t\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t\t'libellediplome');
\t\t\t\t\t\t\t\t\t\t\tlet dateDebutDiplome = dataDiplome
\t\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t\t'.dateDebutDiplome')
\t\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t\t'datedebutdiplome');
\t\t\t\t\t\t\t\t\t\t\tlet dateFinDiplome = dataDiplome
\t\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t\t'.dateFinDiplome')
\t\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t\t'datefindiplome');
\t\t\t\t\t\t\t\t\t\t\t/*datasDiplomes
\t\t\t\t\t\t\t\t\t\t\t\t.push([
\t\t\t\t\t\t\t\t\t\t\t\t\tlibelleDiplome,
\t\t\t\t\t\t\t\t\t\t\t\t\tdateDebutDiplome,
\t\t\t\t\t\t\t\t\t\t\t\t\tdateFinDiplome]);*/
\t\t\t\t\t\t\t\t\t\t\tlet content = '<input type=\"text\" name=\"diplomes[' + countDiplome + '][libelle]\" value=\"' + libelleDiplome + '\" hidden>';
\t\t\t\t\t\t\t\t\t\t\tcontent += '<input type=\"text\" name=\"diplomes[' + countDiplome + '][date_debut]\" value=\"' + dateDebutDiplome + '\" hidden>';
\t\t\t\t\t\t\t\t\t\t\tcontent += '<input type=\"text\" name=\"diplomes[' + countDiplome + '][date_fin]\" value=\"' + dateFinDiplome + '\" hidden>';
\t\t\t\t\t\t\t\t\t\t\tcountDiplome += 1;
\t\t\t\t\t\t\t\t\t\t\t\$(
\t\t\t\t\t\t\t\t\t\t\t\t\"#saveParoissien\")
\t\t\t\t\t\t\t\t\t\t\t\t.append(
\t\t\t\t\t\t\t\t\t\t\t\t\tcontent);
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\$(\".dataExperience\")
\t\t\t\t\t\t\t\t.each(
\t\t\t\t\t\t\t\t\tfunction (e) {
\t\t\t\t\t\t\t\t\t\tlet dataExperience = \$(this);
\t\t\t\t\t\t\t\t\t\tlet libelleExperience = dataExperience
\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t'.libelleExperience')
\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t'libelleexperience');
\t\t\t\t\t\t\t\t\t\tlet dateDebutExperience = dataExperience
\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t'.dateDebutExperience')
\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t'datedebutexperience');
\t\t\t\t\t\t\t\t\t\tlet dateFinExperience = dataExperience
\t\t\t\t\t\t\t\t\t\t\t.find(
\t\t\t\t\t\t\t\t\t\t\t\t'.dateFinExperience')
\t\t\t\t\t\t\t\t\t\t\t.data(
\t\t\t\t\t\t\t\t\t\t\t\t'datefinexperience');
\t\t\t\t\t\t\t\t\t\t/*datasDiplomes
\t\t\t\t\t\t\t\t\t\t\t.push([
\t\t\t\t\t\t\t\t\t\t\t\tlibelleExperience,
\t\t\t\t\t\t\t\t\t\t\t\tdateDebutExperience,
\t\t\t\t\t\t\t\t\t\t\t\tdateFinExperience]);*/
\t\t\t\t\t\t\t\t\t\tlet content = '<input type=\"text\" name=\"experiences[' + countExperience + '][libelle]\" value=\"' + libelleExperience + '\" hidden>';
\t\t\t\t\t\t\t\t\t\tcontent += '<input type=\"text\" name=\"experiences[' + countExperience + '][date_debut]\" value=\"' + dateDebutExperience + '\" hidden>';
\t\t\t\t\t\t\t\t\t\tcontent += '<input type=\"text\" name=\"experiences[' + countExperience + '][date_fin]\" value=\"' + dateFinExperience + '\" hidden>';
\t\t\t\t\t\t\t\t\t\tcountExperience += 1;
\t\t\t\t\t\t\t\t\t\t\$(
\t\t\t\t\t\t\t\t\t\t\t\"#saveParoissien\")
\t\t\t\t\t\t\t\t\t\t\t.append(
\t\t\t\t\t\t\t\t\t\t\t\tcontent);
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t/*\$(\"#selectDiplome\").change(function(e){
\t\t\t\t\t\tif(\$(this).val() == \"autre\"){
\t\t\t\t\t\t\t\$(\"#inputAutreDiplome\").show();
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(\"#inputAutreDiplome\").hide();
\t\t\t\t\t\t}
\t\t\t\t\t});*/
\t\t\t\t});
\t</script>
</body>

</html>", "/var/www/html/appChurch/back/themes/responsiv-clean/layouts/saintmathieunavbar.htm", "");
    }
}
