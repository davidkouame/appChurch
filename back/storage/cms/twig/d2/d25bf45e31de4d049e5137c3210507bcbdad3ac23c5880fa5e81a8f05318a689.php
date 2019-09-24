<?php

/* /var/www/html/appChurch/back/plugins/saintmathieu/paroisse/components/ajouterparoissien/default.htm */
class __TwigTemplate_75b0f8bdbf89d9269530fa9abcf8f5384be3a26adc5f7324a798a01b448d0741 extends Twig_Template
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
    input[type=\"date\"].form-control, input[type=\"time\"].form-control, 
    input[type=\"datetime-local\"].form-control, input[type=\"month\"].form-control{
        line-height: 138%;
    }

    .required{
        color: #d45656;
        position: relative;
        font-size: 13px;
        top: 2px;
    }


</style>
";
        // line 16
        if (($context["success"] ?? null)) {
            // line 17
            echo "<div class=\"col-md-12\">
    ";
            $_type = isset($context["type"]) ? $context["type"] : null;            $_message = isset($context["message"]) ? $context["message"] : null;            // line 18
            foreach (Flash::getMessages() as $type => $messages) {
                foreach ($messages as $message) {
                    $context["type"] = $type;                    $context["message"] = $message;                    // line 19
                    echo "    Mes féliciations, votre enregistrement est effectué avecc succès !
    ";
                }
            }
            $context["type"] = $_type;            $context["message"] = $_message;            // line 21
            echo "</div>
";
        } else {
            // line 23
            echo "<div class=\"row\" style=\"margin: 0% 8% 1% 8%;text-align: center\">
    <div class=\"col-md-12\"><h2>Inscrivez-vous </h2></div>
</div>
<form class=\"row form-elements\" data-request=\"onRegister\"  
      data-request-files data-request-flash  accept-charset=\"UTF8\" 
      enctype=\"multipart/form-data\" style=\"margin: 0px 8%;\" id=\"saveParoissien\">
      <input type=\"text\" name=\"diplomes\" id=\"diplomes\" hidden>
    <div class=\"col-md-12\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label>Nom <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre nom\" name=\"nom\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Prénoms <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre prénom\" name=\"prenom\">
            </div>
            <div class=\"form-group col-md-6\">
                <label>CEB</label>
                <select class=\"form-control\" name=\"ceb\">
                    <option value=\"\">Sélectionnez une ceb</option>
                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cebs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ceb"]) {
                // line 45
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ceb"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ceb"], "denomination", []), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ceb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Eglise <span class=\"required\">*</span></label>
                <select class=\"form-control\" name=\"eglise\">
                    <option value=\"\">Sélectionnez votre centre paroissial</option>
                    ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["eglises"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["eglise"]) {
                // line 54
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eglise"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eglise"], "denomination", []), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eglise'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Mouvements</label>
                <select class=\"form-control\" name=\"mouvement\">
                    <option value=\"\">Sélectionnez un mouvement</option>
                    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mouvements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mouvement"]) {
                // line 63
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mouvement"], "denomination", []), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mouvement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label >Date de naissance <span class=\"required\">*</span></label>
                <!--                <input type=\"date\" class=\"form-control\" name=\"date_naissance\">-->
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    <input type=\"text\" class=\"form-control datepicker\" name=\"date_naissance\" data-date-format=\"yyyy/mm/dd\">
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
            <div class=\"form-group col-md-6\">
                <label >Lieu de naissance <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre lieu de naissance\" name=\"lieu_naissance\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Habitation <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre habitation\" name=\"habitation\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Téléphone</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre télephone\" name=\"telephone\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Email</label>
                <input type=\"email\" class=\"form-control\" placeholder=\"Entrez votre email\" name=\"email\">
            </div>
            <div class=\"form-group col-md-6\">
                <label>Sexe <span class=\"required\">*</span></label>
                <select class=\"form-control\" name=\"sexe\">
                    <option value=\"\">Sélectionnez votre sexe</option>
                    <option value=\"h\">Homme</option>
                    <option value=\"f\">Féminin</option>
                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Profession <span class=\"required\">*</span></label>
                <select class=\"form-control\" name=\"profession\">
                    <option value=\"\">Sélectionnez votre profession</option>
                    ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["professions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["profession"]) {
                // line 106
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profession"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profession"], "denomination", []), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profession'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Lieu du baptême</label>
                <input type=\"text\" class=\"form-control\" name=\"lieu_bapteme\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Année du baptême</label>
                <!--<input type=\"date\" class=\"form-control\" name=\"annee_bapteme\">-->
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    <input type=\"text\" class=\"form-control datepicker\" name=\"annee_bapteme\" data-date-format=\"yyyy/mm/dd\">
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Lieu de confirmation</label>
                <input type=\"text\" class=\"form-control\" name=\"lieu_confirmation\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Année de confirmation</label>
                <!--<input type=\"date\" class=\"form-control\" name=\"date_confirmation\">-->
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    <input type=\"text\" class=\"form-control datepicker\" name=\"date_confirmation\" data-date-format=\"yyyy/mm/dd\">
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Nationnalité <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" name=\"nationnalite\">
            </div>
            <div class=\"form-group col-md-6\">
                <label>Situation matrimonniale <span class=\"required\">*</span></label>
                <select class=\"form-control\" name=\"situationmatrimoniale\">
                    <option value=\"\">Sélectionnez votre situation matrimonniale</option>
                    <option value=\"1\">Célibataire</option>
                    <option value=\"2\">Mariée</option>
                </select>
            </div>
            <div class=\"form-group col-md-12\">
                <label>Diplômes <a class=\"btn btn-danger\" id=\"openModalCreateDiplome\" href=\"#\">ajouter un diplôme</a> <!--<span class=\"required\">*</span>--></label>
                <!--<select class=\"form-control\" name=\"diplome\">
                    <option value=\"\">Sélectionnez votre dernier diplôme</option>
                    ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["diplomes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
                // line 155
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diplome"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["diplome"], "denomination", []), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                </select>-->
                <div class=\"row\">
                    <table class=\"table\" id=\"tableDiplome\">
                      <thead>
                        <tr>
                          <th scope=\"col\">#</th>
                          <th scope=\"col\">Libellé</th>
                          <th scope=\"col\">Date début</th>
                          <th scope=\"col\">Date fin</th>
                          <th scope=\"col\">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr id=\"firstTrDiplome\">
                          <th scope=\"row\" colspan=\"5\" style=\"text-align: center;\">Aucun diplôme</th>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
            <div class=\"form-group col-md-12\">
                <label>Expériences professionnelles <a class=\"btn btn-danger\" id=\"openModalCreateExperience\" href=\"#\">ajouter une expérience</a></label>
                <div class=\"row\">
                    <table class=\"table\" id=\"tableExperience\">
                      <thead>
                        <tr>
                          <th scope=\"col\">#</th>
                          <th scope=\"col\">Libellé</th>
                          <th scope=\"col\">Date début</th>
                          <th scope=\"col\">Date fin</th>
                          <th scope=\"col\">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr id=\"firstTrExperience\">
                          <th scope=\"row\" colspan=\"5\" style=\"text-align: center;\">Aucun diplôme</th>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-12 justify-content-md-center\">
        <div class=\"text-center\">
            <a class=\"btn btn-danger\" href=\"";
            // line 202
            echo url("/");
            echo "\">Annuler</a>
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        </div>
    </div>
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/appChurch/back/plugins/saintmathieu/paroisse/components/ajouterparoissien/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 202,  261 => 157,  250 => 155,  246 => 154,  198 => 108,  187 => 106,  183 => 105,  141 => 65,  130 => 63,  126 => 62,  118 => 56,  107 => 54,  103 => 53,  95 => 47,  84 => 45,  80 => 44,  57 => 23,  53 => 21,  48 => 19,  45 => 18,  42 => 17,  40 => 16,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    input[type=\"date\"].form-control, input[type=\"time\"].form-control, 
    input[type=\"datetime-local\"].form-control, input[type=\"month\"].form-control{
        line-height: 138%;
    }

    .required{
        color: #d45656;
        position: relative;
        font-size: 13px;
        top: 2px;
    }


</style>
{% if success %}
<div class=\"col-md-12\">
    {% flash %}
    Mes féliciations, votre enregistrement est effectué avecc succès !
    {% endflash %}
</div>
{% else %}
<div class=\"row\" style=\"margin: 0% 8% 1% 8%;text-align: center\">
    <div class=\"col-md-12\"><h2>Inscrivez-vous </h2></div>
</div>
<form class=\"row form-elements\" data-request=\"onRegister\"  
      data-request-files data-request-flash  accept-charset=\"UTF8\" 
      enctype=\"multipart/form-data\" style=\"margin: 0px 8%;\" id=\"saveParoissien\">
      <input type=\"text\" name=\"diplomes\" id=\"diplomes\" hidden>
    <div class=\"col-md-12\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label>Nom <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre nom\" name=\"nom\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Prénoms <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre prénom\" name=\"prenom\">
            </div>
            <div class=\"form-group col-md-6\">
                <label>CEB</label>
                <select class=\"form-control\" name=\"ceb\">
                    <option value=\"\">Sélectionnez une ceb</option>
                    {% for ceb in cebs %}
                    <option value=\"{{ ceb.id }}\">{{ ceb.denomination }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Eglise <span class=\"required\">*</span></label>
                <select class=\"form-control\" name=\"eglise\">
                    <option value=\"\">Sélectionnez votre centre paroissial</option>
                    {% for eglise in eglises %}
                    <option value=\"{{ eglise.id }}\">{{ eglise.denomination }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Mouvements</label>
                <select class=\"form-control\" name=\"mouvement\">
                    <option value=\"\">Sélectionnez un mouvement</option>
                    {% for mouvement in mouvements %}
                    <option value=\"{{ mouvement.id }}\">{{ mouvement.denomination }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label >Date de naissance <span class=\"required\">*</span></label>
                <!--                <input type=\"date\" class=\"form-control\" name=\"date_naissance\">-->
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    <input type=\"text\" class=\"form-control datepicker\" name=\"date_naissance\" data-date-format=\"yyyy/mm/dd\">
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
            <div class=\"form-group col-md-6\">
                <label >Lieu de naissance <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre lieu de naissance\" name=\"lieu_naissance\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Habitation <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre habitation\" name=\"habitation\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Téléphone</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Entrez votre télephone\" name=\"telephone\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Email</label>
                <input type=\"email\" class=\"form-control\" placeholder=\"Entrez votre email\" name=\"email\">
            </div>
            <div class=\"form-group col-md-6\">
                <label>Sexe <span class=\"required\">*</span></label>
                <select class=\"form-control\" name=\"sexe\">
                    <option value=\"\">Sélectionnez votre sexe</option>
                    <option value=\"h\">Homme</option>
                    <option value=\"f\">Féminin</option>
                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Profession <span class=\"required\">*</span></label>
                <select class=\"form-control\" name=\"profession\">
                    <option value=\"\">Sélectionnez votre profession</option>
                    {% for profession in professions %}
                    <option value=\"{{ profession.id }}\">{{ profession.denomination }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Lieu du baptême</label>
                <input type=\"text\" class=\"form-control\" name=\"lieu_bapteme\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Année du baptême</label>
                <!--<input type=\"date\" class=\"form-control\" name=\"annee_bapteme\">-->
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    <input type=\"text\" class=\"form-control datepicker\" name=\"annee_bapteme\" data-date-format=\"yyyy/mm/dd\">
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Lieu de confirmation</label>
                <input type=\"text\" class=\"form-control\" name=\"lieu_confirmation\">
            </div>
            <div class=\"form-group col-md-6\">
                <label >Année de confirmation</label>
                <!--<input type=\"date\" class=\"form-control\" name=\"date_confirmation\">-->
                <div class=\"input-group date\" data-provide=\"datepicker\">
                    <input type=\"text\" class=\"form-control datepicker\" name=\"date_confirmation\" data-date-format=\"yyyy/mm/dd\">
                    <div class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-th\"></span>
                    </div>
                </div>
            </div>
            <div class=\"form-group col-md-6\">
                <label>Nationnalité <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" name=\"nationnalite\">
            </div>
            <div class=\"form-group col-md-6\">
                <label>Situation matrimonniale <span class=\"required\">*</span></label>
                <select class=\"form-control\" name=\"situationmatrimoniale\">
                    <option value=\"\">Sélectionnez votre situation matrimonniale</option>
                    <option value=\"1\">Célibataire</option>
                    <option value=\"2\">Mariée</option>
                </select>
            </div>
            <div class=\"form-group col-md-12\">
                <label>Diplômes <a class=\"btn btn-danger\" id=\"openModalCreateDiplome\" href=\"#\">ajouter un diplôme</a> <!--<span class=\"required\">*</span>--></label>
                <!--<select class=\"form-control\" name=\"diplome\">
                    <option value=\"\">Sélectionnez votre dernier diplôme</option>
                    {% for diplome in diplomes %}
                    <option value=\"{{ diplome.id }}\">{{ diplome.denomination }}</option>
                    {% endfor %}
                </select>-->
                <div class=\"row\">
                    <table class=\"table\" id=\"tableDiplome\">
                      <thead>
                        <tr>
                          <th scope=\"col\">#</th>
                          <th scope=\"col\">Libellé</th>
                          <th scope=\"col\">Date début</th>
                          <th scope=\"col\">Date fin</th>
                          <th scope=\"col\">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr id=\"firstTrDiplome\">
                          <th scope=\"row\" colspan=\"5\" style=\"text-align: center;\">Aucun diplôme</th>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
            <div class=\"form-group col-md-12\">
                <label>Expériences professionnelles <a class=\"btn btn-danger\" id=\"openModalCreateExperience\" href=\"#\">ajouter une expérience</a></label>
                <div class=\"row\">
                    <table class=\"table\" id=\"tableExperience\">
                      <thead>
                        <tr>
                          <th scope=\"col\">#</th>
                          <th scope=\"col\">Libellé</th>
                          <th scope=\"col\">Date début</th>
                          <th scope=\"col\">Date fin</th>
                          <th scope=\"col\">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr id=\"firstTrExperience\">
                          <th scope=\"row\" colspan=\"5\" style=\"text-align: center;\">Aucun diplôme</th>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-12 justify-content-md-center\">
        <div class=\"text-center\">
            <a class=\"btn btn-danger\" href=\"{{ url('/') }}\">Annuler</a>
            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        </div>
    </div>
</form>
{% endif %}", "/var/www/html/appChurch/back/plugins/saintmathieu/paroisse/components/ajouterparoissien/default.htm", "");
    }
}
