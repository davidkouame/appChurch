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
\t\t\t<form class=\"modal-content\" data-request=\"onCheckValiationCreateDiplome\" data-request-files
\t\t\t\tdata-request-flash accept-charset=\"UTF8\" data-request-success=\"afterSaveDiplome()\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">Ajouter un diplôme</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Libellé <span class=\"required\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<!-- <input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleDiplome\"> -->
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"libelle\" id=\"libelleDiplome\">
\t\t\t\t\t\t\t\t<option value=\"\">Sélectionner un diplôme</option>
\t\t\t\t\t\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["diplomes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 80
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diplome"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diplome"], "denomination", []), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t\t\t\t\t\t\t\t<!-- <option value=\"autre\">Autre</option> -->
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<!-- <input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"inputAutreDiplome\" 
\t\t\t\t\t\t\tplaceholder=\"Autre\" style=\"margin-top: 14px;display: none\"> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tdébut <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t<div class=\"input-group date\" data-provide=\"datepicker\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control datepicker\" name=\"date_debut\"
\t\t\t\t\t\t\t\t\tdata-date-format=\"yyyy/mm/dd\" id=\"dateDebutDiplome\">
\t\t\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-th\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t<input type=\"date\" name=\"date_debut\" class=\"form-control\" -->
\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\tid=\"dateDebutDiplome\"> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tfin <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t<div class=\"input-group date\" data-provide=\"datepicker\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control datepicker\" name=\"date_fin\"
\t\t\t\t\t\t\t\t\tdata-date-format=\"yyyy/mm/dd\" id=\"dateFinDiplome\">
\t\t\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-th\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <input type=\"date\" name=\"date_fin\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateFinDiplome\"> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"saveDiplomssse\">Ajouter</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

\t<div class=\"modal fade\" id=\"createExperienceModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\t\taria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<form class=\"modal-content\" data-request=\"onCheckValiationCreateDiplome\" data-request-files
\t\t\t\tdata-request-flash accept-charset=\"UTF8\" data-request-success=\"afterSaveExperience()\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">Ajouter une expérience professionnelle</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div action=\"\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Libellé <span
\t\t\t\t\t\t\t\t\tclass=\"required\">*</span></label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleExperience\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tdébut <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t<div class=\"input-group date\" data-provide=\"datepicker\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control datepicker\" name=\"date_debut\"
\t\t\t\t\t\t\t\t\tdata-date-format=\"yyyy/mm/dd\" id=\"dateDebutExperience\">
\t\t\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-th\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <input type=\"date\" name=\"date_debut\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateDebutExperience\"> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tfin <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t<div class=\"input-group date\" data-provide=\"datepicker\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control datepicker\" name=\"date_fin\"
\t\t\t\t\t\t\t\t\tdata-date-format=\"yyyy/mm/dd\" id=\"dateFinExperience\">
\t\t\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-th\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <input type=\"date\" name=\"date_fin\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateFinExperience\"> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">

\t\toutAfterSaveDiplome = null;
\t\toutAfterSaveExperience = null;
\t\tvar test = \"salut les gars\";

\t\tfunction afterSaveDiplome() {
\t\t\toutAfterSaveDiplome();
\t\t}

\t\tfunction afterSaveExperience() {
\t\t\toutAfterSaveExperience();
\t\t}

\t\t\$(function () {

\t\t\t//////////////////////////////////////////////////////////////////
\t\t\t//===========================Event=============================//

\t\t\t\$(\"html\").removeAttr(\"font-size\");
\t\t\tvar \$j = jQuery.noConflict();
\t\t\tvar lengthTrExperience = 1;
\t\t\tvar lengthTrDiplome = 1;
\t\t\tvar dataTable = null;
\t\t\t// \$j('.datepicker').datepicker({dateFormat: 'yyyy-mm-dd'});

\t\t\t\$(\"#openModalCreateDiplome\").click(function () {
\t\t\t\t\$(\"#createDiplomeModal\").modal();
\t\t\t});

\t\t\t\$('#createDiplomeModal').on('hidden.bs.modal', function () {
\t\t\t\t\$(\"#libelleDiplome\").val(\"\");
\t\t\t\t\$(\"#dateDebutDiplome\").val(\"\");
\t\t\t\t\$(\"#dateFinDiplome\").val(\"\");
\t\t\t});

\t\t\t\$(\"#openModalCreateExperience\").click(function () {
\t\t\t\t\$(\"#createExperienceModal\").modal();
\t\t\t});

\t\t\t\$('#createExperienceModal').on('hidden.bs.modal', function () {
\t\t\t\t\$(\"#libelleExperience\").val(\"\");
\t\t\t\t\$(\"#dateDebutExperience\").val(\"\");
\t\t\t\t\$(\"#dateFinExperience\").val(\"\");
\t\t\t});

\t\t\t\$(\"#saveDiplome\").click(function () {
\t\t\t\taddDiplome();
\t\t\t});

\t\t\t\$(\"#saveExperience\").click(function () {
\t\t\t\taddExperience();
\t\t\t});

\t\t\t\$(document).on(\"click\", \".supprimerDiplome\", function () {
\t\t\t\t\$(this).parent().parent().remove();
\t\t\t});

\t\t\t\$(document).on(\"click\", \".supprimerExperience\", function () {
\t\t\t\t\$(this).parent().parent().remove();
\t\t\t});

\t\t\t\$(\"#saveParoissien\").submit(function () {
\t\t\t\tlet countDiplome = 0;
\t\t\t\tlet countExperience = 0;
\t\t\t\t\$(\".dataDiplome\").each(function (e) {
\t\t\t\t\tlet dataDiplome = \$(this);
\t\t\t\t\tlet libelleDiplome = dataDiplome
\t\t\t\t\t\t.find('.libelleDiplome')
\t\t\t\t\t\t.data('libellediplome');
\t\t\t\t\tlet dateDebutDiplome = dataDiplome
\t\t\t\t\t\t.find('.dateDebutDiplome')
\t\t\t\t\t\t.data('datedebutdiplome');
\t\t\t\t\tlet dateFinDiplome = dataDiplome
\t\t\t\t\t\t.find('.dateFinDiplome')
\t\t\t\t\t\t.data('datefindiplome');
\t\t\t\t\tlet content = '<input type=\"text\" name=\"diplomes[' + countDiplome + '][libelle]\" value=\"' + libelleDiplome + '\" hidden>';
\t\t\t\t\tcontent += '<input type=\"text\" name=\"diplomes[' + countDiplome + '][date_debut]\" value=\"' + dateDebutDiplome + '\" hidden>';
\t\t\t\t\tcontent += '<input type=\"text\" name=\"diplomes[' + countDiplome + '][date_fin]\" value=\"' + dateFinDiplome + '\" hidden>';
\t\t\t\t\tcountDiplome += 1;
\t\t\t\t\t\$(\"#saveParoissien\").append(content);
\t\t\t\t});

\t\t\t\t\$(\".dataExperience\").each(function (e) {
\t\t\t\t\tlet dataExperience = \$(this);
\t\t\t\t\tlet libelleExperience = dataExperience
\t\t\t\t\t\t.find('.libelleExperience')
\t\t\t\t\t\t.data('libelleexperience');
\t\t\t\t\tlet dateDebutExperience = dataExperience
\t\t\t\t\t\t.find('.dateDebutExperience')
\t\t\t\t\t\t.data('datedebutexperience');
\t\t\t\t\tlet dateFinExperience = dataExperience
\t\t\t\t\t\t.find('.dateFinExperience')
\t\t\t\t\t\t.data('datefinexperience');
\t\t\t\t\tlet content = '<input type=\"text\" name=\"experiences[' + countExperience + '][libelle]\" value=\"' + libelleExperience + '\" hidden>';
\t\t\t\t\tcontent += '<input type=\"text\" name=\"experiences[' + countExperience + '][date_debut]\" value=\"' + dateDebutExperience + '\" hidden>';
\t\t\t\t\tcontent += '<input type=\"text\" name=\"experiences[' + countExperience + '][date_fin]\" value=\"' + dateFinExperience + '\" hidden>';
\t\t\t\t\tcountExperience += 1;
\t\t\t\t\t\$(\"#saveParoissien\").append(content);
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t});

\t\t\t/*\$(\"#selectDiplome\").change(function(e){
\t\t\t\tif(\$(this).val() == \"autre\"){
\t\t\t\t\t\$(\"#inputAutreDiplome\").show();
\t\t\t\t}else{
\t\t\t\t\t\$(\"#inputAutreDiplome\").hide();
\t\t\t\t}
\t\t\t});*/

\t\t\t//////////////////////////////////////////////////////////////////
\t\t\t//===========================Function===========================//

\t\t\tfunction addDiplome() {
\t\t\t\tif (lengthTrDiplome == 1) {
\t\t\t\t\t\$(\"#firstTrDiplome\").empty();
\t\t\t\t}
\t\t\t\tlet tdlibelleDiplome = '<td class=\"libelleDiplome\" data-libellediplome=\"'
\t\t\t\t\t+ \$(\"#libelleDiplome\").val() + '\">' + \$(\"#libelleDiplome option:selected\").text() + '</td>';
\t\t\t\tlet tdDateDebutDiplome = '<td class=\"dateDebutDiplome\" data-datedebutdiplome=\"'
\t\t\t\t\t+ \$(\"#dateDebutDiplome\").val() + '\">' + \$(\"#dateDebutDiplome\").val() + '</td>';
\t\t\t\tlet tdDateFinDiplome = '<td class=\"dateFinDiplome\" data-datefindiplome=\"'
\t\t\t\t\t+ \$(\"#dateFinDiplome\").val() + '\">'
\t\t\t\t\t+ \$(\"#dateFinDiplome\").val() + '</td>';
\t\t\t\tvar content = '<tr scope=\"row\" class=\"dataDiplome\" data-diplome_id=\"' + lengthTrDiplome + '\">'
\t\t\t\t\t+ tdlibelleDiplome + tdDateDebutDiplome + tdDateFinDiplome +
\t\t\t\t\t'<td><a class=\"btn btn-danger supprimerDiplome\" style=\"cursor: pointer;color: #fff;\">supprimer</a></td></tr>';
\t\t\t\t\$(\"#tableDiplome tbody\").append(content);
\t\t\t\tlengthTrDiplome += 1;
\t\t\t\t\$(\"#createDiplomeModal\").modal('toggle');
\t\t\t}

\t\t\tfunction addExperience() {
\t\t\t\tif (lengthTrExperience == 1) {
\t\t\t\t\t\$(\"#firstTrExperience\").empty();
\t\t\t\t}
\t\t\t\tlet tdlibelleExperience = '<td class=\"libelleExperience\" data-libelleexperience=\"'
\t\t\t\t\t+ \$(\"#libelleExperience\").val() + '\">'
\t\t\t\t\t+ \$(\"#libelleExperience\").val() + '</td>';
\t\t\t\tlet tdDateDebutExperience = '<td class=\"dateDebutExperience\" data-datedebutexperience=\"'
\t\t\t\t\t+ \$(\"#dateDebutExperience\").val() + '\">'
\t\t\t\t\t+ \$(\"#dateDebutExperience\").val() + '</td>';
\t\t\t\tlet tdDateFinExperience = '<td class=\"dateFinExperience\" data-datefinexperience=\"'
\t\t\t\t\t+ \$(\"#dateFinExperience\").val() + '\">'
\t\t\t\t\t+ \$(\"#dateFinExperience\").val() + '</td>';
\t\t\t\tvar content = '<tr scope=\"row\" class=\"dataExperience\" data-experience_id=\"' + lengthTrExperience + '\">'
\t\t\t\t\t+ tdlibelleExperience
\t\t\t\t\t+ tdDateDebutExperience
\t\t\t\t\t+ tdDateFinExperience
\t\t\t\t\t+ '<td><a class=\"btn btn-danger supprimerExperience\" style=\"cursor: pointer;color: #fff;\">supprimer</a></td></tr>';
\t\t\t\t\$(\"#tableExperience tbody\").append(content);
\t\t\t\tlengthTrExperience += 1;
\t\t\t\t\$(\"#createExperienceModal\").modal('toggle');
\t\t\t}

\t\t\tfunction inAfterSaveDiplome() {
\t\t\t\taddDiplome();
\t\t\t}

\t\t\tfunction inAfterSaveExperience() {
\t\t\t\taddExperience();
\t\t\t}

\t\t\toutAfterSaveDiplome = inAfterSaveDiplome;
\t\t\toutAfterSaveExperience = inAfterSaveExperience;
\t\t});

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
        return array (  158 => 82,  147 => 80,  143 => 79,  121 => 59,  117 => 58,  108 => 54,  102 => 51,  98 => 49,  94 => 48,  76 => 33,  71 => 31,  65 => 29,  61 => 28,  57 => 27,  50 => 23,  39 => 15,  23 => 1,);
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
\t\t\t<form class=\"modal-content\" data-request=\"onCheckValiationCreateDiplome\" data-request-files
\t\t\t\tdata-request-flash accept-charset=\"UTF8\" data-request-success=\"afterSaveDiplome()\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">Ajouter un diplôme</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Libellé <span class=\"required\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<!-- <input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleDiplome\"> -->
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"libelle\" id=\"libelleDiplome\">
\t\t\t\t\t\t\t\t<option value=\"\">Sélectionner un diplôme</option>
\t\t\t\t\t\t\t\t{% for diplome in diplomes %}
\t\t\t\t\t\t\t\t<option value=\"{{ diplome.id }}\">{{ diplome.denomination }}</option>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t<!-- <option value=\"autre\">Autre</option> -->
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<!-- <input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"inputAutreDiplome\" 
\t\t\t\t\t\t\tplaceholder=\"Autre\" style=\"margin-top: 14px;display: none\"> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tdébut <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t<div class=\"input-group date\" data-provide=\"datepicker\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control datepicker\" name=\"date_debut\"
\t\t\t\t\t\t\t\t\tdata-date-format=\"yyyy/mm/dd\" id=\"dateDebutDiplome\">
\t\t\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-th\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\t<input type=\"date\" name=\"date_debut\" class=\"form-control\" -->
\t\t\t\t\t\t\t<!-- \t\t\t\t\t\t\t\tid=\"dateDebutDiplome\"> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tfin <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t<div class=\"input-group date\" data-provide=\"datepicker\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control datepicker\" name=\"date_fin\"
\t\t\t\t\t\t\t\t\tdata-date-format=\"yyyy/mm/dd\" id=\"dateFinDiplome\">
\t\t\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-th\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <input type=\"date\" name=\"date_fin\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateFinDiplome\"> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"saveDiplomssse\">Ajouter</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

\t<div class=\"modal fade\" id=\"createExperienceModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\t\taria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<form class=\"modal-content\" data-request=\"onCheckValiationCreateDiplome\" data-request-files
\t\t\t\tdata-request-flash accept-charset=\"UTF8\" data-request-success=\"afterSaveExperience()\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">Ajouter une expérience professionnelle</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div action=\"\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"recipient-name\" class=\"col-form-label\">Libellé <span
\t\t\t\t\t\t\t\t\tclass=\"required\">*</span></label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"libelle\" class=\"form-control\" id=\"libelleExperience\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tdébut <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t<div class=\"input-group date\" data-provide=\"datepicker\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control datepicker\" name=\"date_debut\"
\t\t\t\t\t\t\t\t\tdata-date-format=\"yyyy/mm/dd\" id=\"dateDebutExperience\">
\t\t\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-th\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <input type=\"date\" name=\"date_debut\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateDebutExperience\"> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message-text\" class=\"col-form-label\">Date
\t\t\t\t\t\t\t\tfin <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t<div class=\"input-group date\" data-provide=\"datepicker\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control datepicker\" name=\"date_fin\"
\t\t\t\t\t\t\t\t\tdata-date-format=\"yyyy/mm/dd\" id=\"dateFinExperience\">
\t\t\t\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-th\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <input type=\"date\" name=\"date_fin\" class=\"form-control\"
\t\t\t\t\t\t\t\tid=\"dateFinExperience\"> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">

\t\toutAfterSaveDiplome = null;
\t\toutAfterSaveExperience = null;
\t\tvar test = \"salut les gars\";

\t\tfunction afterSaveDiplome() {
\t\t\toutAfterSaveDiplome();
\t\t}

\t\tfunction afterSaveExperience() {
\t\t\toutAfterSaveExperience();
\t\t}

\t\t\$(function () {

\t\t\t//////////////////////////////////////////////////////////////////
\t\t\t//===========================Event=============================//

\t\t\t\$(\"html\").removeAttr(\"font-size\");
\t\t\tvar \$j = jQuery.noConflict();
\t\t\tvar lengthTrExperience = 1;
\t\t\tvar lengthTrDiplome = 1;
\t\t\tvar dataTable = null;
\t\t\t// \$j('.datepicker').datepicker({dateFormat: 'yyyy-mm-dd'});

\t\t\t\$(\"#openModalCreateDiplome\").click(function () {
\t\t\t\t\$(\"#createDiplomeModal\").modal();
\t\t\t});

\t\t\t\$('#createDiplomeModal').on('hidden.bs.modal', function () {
\t\t\t\t\$(\"#libelleDiplome\").val(\"\");
\t\t\t\t\$(\"#dateDebutDiplome\").val(\"\");
\t\t\t\t\$(\"#dateFinDiplome\").val(\"\");
\t\t\t});

\t\t\t\$(\"#openModalCreateExperience\").click(function () {
\t\t\t\t\$(\"#createExperienceModal\").modal();
\t\t\t});

\t\t\t\$('#createExperienceModal').on('hidden.bs.modal', function () {
\t\t\t\t\$(\"#libelleExperience\").val(\"\");
\t\t\t\t\$(\"#dateDebutExperience\").val(\"\");
\t\t\t\t\$(\"#dateFinExperience\").val(\"\");
\t\t\t});

\t\t\t\$(\"#saveDiplome\").click(function () {
\t\t\t\taddDiplome();
\t\t\t});

\t\t\t\$(\"#saveExperience\").click(function () {
\t\t\t\taddExperience();
\t\t\t});

\t\t\t\$(document).on(\"click\", \".supprimerDiplome\", function () {
\t\t\t\t\$(this).parent().parent().remove();
\t\t\t});

\t\t\t\$(document).on(\"click\", \".supprimerExperience\", function () {
\t\t\t\t\$(this).parent().parent().remove();
\t\t\t});

\t\t\t\$(\"#saveParoissien\").submit(function () {
\t\t\t\tlet countDiplome = 0;
\t\t\t\tlet countExperience = 0;
\t\t\t\t\$(\".dataDiplome\").each(function (e) {
\t\t\t\t\tlet dataDiplome = \$(this);
\t\t\t\t\tlet libelleDiplome = dataDiplome
\t\t\t\t\t\t.find('.libelleDiplome')
\t\t\t\t\t\t.data('libellediplome');
\t\t\t\t\tlet dateDebutDiplome = dataDiplome
\t\t\t\t\t\t.find('.dateDebutDiplome')
\t\t\t\t\t\t.data('datedebutdiplome');
\t\t\t\t\tlet dateFinDiplome = dataDiplome
\t\t\t\t\t\t.find('.dateFinDiplome')
\t\t\t\t\t\t.data('datefindiplome');
\t\t\t\t\tlet content = '<input type=\"text\" name=\"diplomes[' + countDiplome + '][libelle]\" value=\"' + libelleDiplome + '\" hidden>';
\t\t\t\t\tcontent += '<input type=\"text\" name=\"diplomes[' + countDiplome + '][date_debut]\" value=\"' + dateDebutDiplome + '\" hidden>';
\t\t\t\t\tcontent += '<input type=\"text\" name=\"diplomes[' + countDiplome + '][date_fin]\" value=\"' + dateFinDiplome + '\" hidden>';
\t\t\t\t\tcountDiplome += 1;
\t\t\t\t\t\$(\"#saveParoissien\").append(content);
\t\t\t\t});

\t\t\t\t\$(\".dataExperience\").each(function (e) {
\t\t\t\t\tlet dataExperience = \$(this);
\t\t\t\t\tlet libelleExperience = dataExperience
\t\t\t\t\t\t.find('.libelleExperience')
\t\t\t\t\t\t.data('libelleexperience');
\t\t\t\t\tlet dateDebutExperience = dataExperience
\t\t\t\t\t\t.find('.dateDebutExperience')
\t\t\t\t\t\t.data('datedebutexperience');
\t\t\t\t\tlet dateFinExperience = dataExperience
\t\t\t\t\t\t.find('.dateFinExperience')
\t\t\t\t\t\t.data('datefinexperience');
\t\t\t\t\tlet content = '<input type=\"text\" name=\"experiences[' + countExperience + '][libelle]\" value=\"' + libelleExperience + '\" hidden>';
\t\t\t\t\tcontent += '<input type=\"text\" name=\"experiences[' + countExperience + '][date_debut]\" value=\"' + dateDebutExperience + '\" hidden>';
\t\t\t\t\tcontent += '<input type=\"text\" name=\"experiences[' + countExperience + '][date_fin]\" value=\"' + dateFinExperience + '\" hidden>';
\t\t\t\t\tcountExperience += 1;
\t\t\t\t\t\$(\"#saveParoissien\").append(content);
\t\t\t\t});
\t\t\t\treturn true;
\t\t\t});

\t\t\t/*\$(\"#selectDiplome\").change(function(e){
\t\t\t\tif(\$(this).val() == \"autre\"){
\t\t\t\t\t\$(\"#inputAutreDiplome\").show();
\t\t\t\t}else{
\t\t\t\t\t\$(\"#inputAutreDiplome\").hide();
\t\t\t\t}
\t\t\t});*/

\t\t\t//////////////////////////////////////////////////////////////////
\t\t\t//===========================Function===========================//

\t\t\tfunction addDiplome() {
\t\t\t\tif (lengthTrDiplome == 1) {
\t\t\t\t\t\$(\"#firstTrDiplome\").empty();
\t\t\t\t}
\t\t\t\tlet tdlibelleDiplome = '<td class=\"libelleDiplome\" data-libellediplome=\"'
\t\t\t\t\t+ \$(\"#libelleDiplome\").val() + '\">' + \$(\"#libelleDiplome option:selected\").text() + '</td>';
\t\t\t\tlet tdDateDebutDiplome = '<td class=\"dateDebutDiplome\" data-datedebutdiplome=\"'
\t\t\t\t\t+ \$(\"#dateDebutDiplome\").val() + '\">' + \$(\"#dateDebutDiplome\").val() + '</td>';
\t\t\t\tlet tdDateFinDiplome = '<td class=\"dateFinDiplome\" data-datefindiplome=\"'
\t\t\t\t\t+ \$(\"#dateFinDiplome\").val() + '\">'
\t\t\t\t\t+ \$(\"#dateFinDiplome\").val() + '</td>';
\t\t\t\tvar content = '<tr scope=\"row\" class=\"dataDiplome\" data-diplome_id=\"' + lengthTrDiplome + '\">'
\t\t\t\t\t+ tdlibelleDiplome + tdDateDebutDiplome + tdDateFinDiplome +
\t\t\t\t\t'<td><a class=\"btn btn-danger supprimerDiplome\" style=\"cursor: pointer;color: #fff;\">supprimer</a></td></tr>';
\t\t\t\t\$(\"#tableDiplome tbody\").append(content);
\t\t\t\tlengthTrDiplome += 1;
\t\t\t\t\$(\"#createDiplomeModal\").modal('toggle');
\t\t\t}

\t\t\tfunction addExperience() {
\t\t\t\tif (lengthTrExperience == 1) {
\t\t\t\t\t\$(\"#firstTrExperience\").empty();
\t\t\t\t}
\t\t\t\tlet tdlibelleExperience = '<td class=\"libelleExperience\" data-libelleexperience=\"'
\t\t\t\t\t+ \$(\"#libelleExperience\").val() + '\">'
\t\t\t\t\t+ \$(\"#libelleExperience\").val() + '</td>';
\t\t\t\tlet tdDateDebutExperience = '<td class=\"dateDebutExperience\" data-datedebutexperience=\"'
\t\t\t\t\t+ \$(\"#dateDebutExperience\").val() + '\">'
\t\t\t\t\t+ \$(\"#dateDebutExperience\").val() + '</td>';
\t\t\t\tlet tdDateFinExperience = '<td class=\"dateFinExperience\" data-datefinexperience=\"'
\t\t\t\t\t+ \$(\"#dateFinExperience\").val() + '\">'
\t\t\t\t\t+ \$(\"#dateFinExperience\").val() + '</td>';
\t\t\t\tvar content = '<tr scope=\"row\" class=\"dataExperience\" data-experience_id=\"' + lengthTrExperience + '\">'
\t\t\t\t\t+ tdlibelleExperience
\t\t\t\t\t+ tdDateDebutExperience
\t\t\t\t\t+ tdDateFinExperience
\t\t\t\t\t+ '<td><a class=\"btn btn-danger supprimerExperience\" style=\"cursor: pointer;color: #fff;\">supprimer</a></td></tr>';
\t\t\t\t\$(\"#tableExperience tbody\").append(content);
\t\t\t\tlengthTrExperience += 1;
\t\t\t\t\$(\"#createExperienceModal\").modal('toggle');
\t\t\t}

\t\t\tfunction inAfterSaveDiplome() {
\t\t\t\taddDiplome();
\t\t\t}

\t\t\tfunction inAfterSaveExperience() {
\t\t\t\taddExperience();
\t\t\t}

\t\t\toutAfterSaveDiplome = inAfterSaveDiplome;
\t\t\toutAfterSaveExperience = inAfterSaveExperience;
\t\t});

\t</script>
</body>

</html>", "/var/www/html/appChurch/back/themes/responsiv-clean/layouts/saintmathieunavbar.htm", "");
    }
}
