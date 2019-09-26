<?php

namespace saintmathieu\Paroisse\Components;

use Cms\Classes\ComponentBase;
use saintmathieu\Parametrage\Models\CebModel;
use saintmathieu\Parametrage\Models\MouvementModel;
use saintmathieu\Parametrage\Models\ProfessionModel;
use saintmathieu\Parametrage\Models\DiplomeModel;
use Validator;
use ValidationException;
use saintmathieu\Paroisse\Models\ParoissienModel;
use saintmathieu\Parametrage\Models\EgliseModel;
use Flash;
use Redirect;
use DB;
use saintmathieu;

class AjouterParoissien extends ComponentBase
{

    public function onRun()
    {
        try {
            // chargement d'une église
            $eglises = EgliseModel::all();

            // chargement des églisements
            $mouvements = MouvementModel::all();

            // chargement des cebs
            $cebs = CebModel::all();

            // chargement des professions
            $professions = ProfessionModel::all();

            // chargement des diplômes
            $diplomes = DiplomeModel::all();

            $this->page['mouvements'] = $mouvements;
            $this->page['cebs'] = $cebs;
            $this->page['professions'] = $professions;
            $this->page['diplomes'] = $diplomes;
            $this->page['eglises'] = $eglises;

            // on vérifie si nous avons un message flash success
            if (isset(\Session::get('_flash_oc')['success'])) {
                $this->page['success'] = true;
            } else {
                $this->page['success'] = false;
            }
        } catch (Exception $ex) {
            trace_log("Une erreur lors de la récuperation des données, raison :" . $ex->getMessage());
            Flas::error("Une erreur est survenue lors du processus !");
        }
    }

    public function componentDetails()
    {
        return [
            'name' => 'AjouterParoissien',
            'description' => "Permet d'ajouter un paroissien dans la plateforme"
        ];
    }

    public function makeValidaion($data)
    {
        $rules = [
            "nom" => "required",
            "prenom" => "required",
            "eglise" => "required",
            "date_naissance" => "required|date",
            "lieu_naissance" => "required",
            "habitation" => "required",
            "telephone" => "unique:saintmathieu_paroisse_paroissien",
            "sexe" => "required",
            "profession" => "required",
            "nationnalite" => "required",
            "situationmatrimoniale" => "required",
            // "diplome" => "required"
        ];
        $messages = [
            'prenom.required' => 'Le champ prénom est obligatoire.',
            'eglise.required' => 'Le champ église est obligatoire.',
            'date_naissance.required' => 'Le champ date de naissance est obligatoire.',
            'nationnalite.required' => 'Le champ nationnalité est obligatoire.',
            'situationmatrimoniale.required' => 'Le champ situation matrimonniale est obligatoire.',
            // 'diplome.required' => 'Le champ diplôme est obligatoire.',
            'telephone.unique' => 'Le champ téléphone doit ête unique.'
        ];
        $validation = Validator::make($data, $rules, $messages);

        if ($validation->fails()) {
            throw new ValidationException($validation);
        }
    }
    
    public function saveDiplomes($diplomes, $paroissien_id){
        foreach ($diplomes as $dipl){
            $diplome = new saintmathieu\Paroisse\Models\DiplomeModel;
            $diplome->diplome_id = $dipl['libelle'];
            $diplome->date_debut = $this->formatDate($dipl['date_debut']);
            $diplome->date_fin = $this->formatDate($dipl['date_fin']);
            $diplome->paroissien_id = $paroissien_id;
            $diplome->save();
        }
    }
    
    public function createDiplomeParametrage($libelleDiplome){
        $diplome = new DiplomeModel;
        $diplome->libelle = $libelleDiplome;
        $diplome->save();
    }
    
    public function saveExperiences($experiences, $paroissien_id){
        foreach ($experiences as $exp){
            $experience = new saintmathieu\Paroisse\Models\ExperienceModel();
            $experience->libelle = $exp['libelle'];
            $experience->date_debut = $this->formatDate($exp['date_debut']);
            $experience->date_fin = $this->formatDate($exp['date_fin']);
            $experience->paroissien_id = $paroissien_id;
            $experience->save();
        }
    }

    public function onRegister()
    {
        try {
            // recuperation des données
            $data = post();
            $this->makeValidaion($data);
            $paroisse = new ParoissienModel();
            $data["eglise_id"] = $data["eglise"];
            $data["ceb_id"] = $data["ceb"];
            $data["profession_id"] = $data["profession"];
            $data["situationmatrimoniale_id"] = $data["situationmatrimoniale"];
            // $data["dernierdiplome_id"] = $data["diplome"];
            $data["date_naissance"] = $this->formatDate($data["date_naissance"]);
            $data["annee_bapteme"] = $this->formatDate($data["annee_bapteme"]);
            $data["date_confirmation"] = $this->formatDate($data["date_confirmation"]);
            DB::transaction(function () use($paroisse, $data){
                $unsetData = $data;
                $paroisse->fill($data);
                $paroisse->save();
                if(array_key_exists("diplomes", $data)){
                    unset($unsetData['diplomes']);
                    $this->saveDiplomes($data['diplomes'], $paroisse->id);
                }
                if(array_key_exists("experiences", $data)){
                    $this->saveExperiences($data['experiences'], $paroisse->id);
                }
            }, 5);
            return Redirect::to('/success-add-paroissien');
        } catch (Exception $ex) {
            trace_log("Une erreur lors de l'enregistrement d'un paroissien, " . "raison :" . $ex->getMessage());
            Flash::error("Une erreur est survenue lors du processus !");
        }
        return Redirect::back();
    }

    private function formatDate($date)
    {
        $time = strtotime($date);
        return date('Y-m-d', $time);
    }
    
    public function onCheckValiationCreateDiplome(){
        $data = post();
        $rules = [
            "libelle" => "required",
            "date_debut" => "required",
            "date_fin" => "required"
        ];
        $messages = [
            'libelle.required' => 'Le champ libellé est obligatoire.',
            'date_debut.required' => 'Le champ date début est obligatoire.',
            'date_fin.required' => 'Le champ date de fin est obligatoire.'
        ];
        $validation = Validator::make($data, $rules, $messages);
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }
    }

    public function onCheckValiationCreateExperience(){
        $data = post();
        $rules = [
            "libelle" => "required",
            "date_debut" => "required",
            "date_fin" => "required"
        ];
        $messages = [
            'libelle.required' => 'Le champ libellé est obligatoire.',
            'date_debut.required' => 'Le champ date début est obligatoire.',
            'date_fin.required' => 'Le champ date de fin est obligatoire.'
        ];
        $validation = Validator::make($data, $rules, $messages);
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }
    }
}
