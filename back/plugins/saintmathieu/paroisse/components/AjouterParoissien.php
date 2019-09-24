<?php namespace saintmathieu\Paroisse\Components;

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

class AjouterParoissien extends ComponentBase
{
    public function onRun(){
        try{
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
            
            //on vérifie si nous avons un message flash success
            if (isset(\Session::get('_flash_oc')['success'])) {
                $this->page['success'] = true;
            } else {
                $this->page['success'] = false;
            }
        } catch (Exception $ex) {
            trace_log("Une erreur lors de la récuperation des données, raison :".$ex->getMessage());
            Flas::error("Une erreur est survenue lors du processus !");
        }
    }

    public function componentDetails() {
        return [
            'name'        => 'AjouterParoissien',
            'description' => "Permet d'ajouter un paroissien dans la plateforme"
        ];
    }
    
    public function onRegister(){
        try{
            // recuperation des données
            $data = post();
            dd($data);
            
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
                    "diplome" => "required"
                ];
            
            $messages = [
                'prenom.required'    => 'Le champ prénom est obligatoire.',
                'eglise.required'    => 'Le champ église est obligatoire.',
                'date_naissance.required' => 'Le champ date de naissance est obligatoire.',
                'nationnalite.required' => 'Le champ nationnalité est obligatoire.',
                'situationmatrimoniale.required' => 'Le champ situation matrimonniale est obligatoire.',
                'diplome.required' => 'Le champ diplôme est obligatoire.',
                'telephone.unique' => 'Le champ téléphone doit ête unique.'
            ];
           

            $validation = Validator::make($data, $rules, $messages);

            if ($validation->fails()) {
                  throw new ValidationException($validation);
            }

            $paroisse = new ParoissienModel;
            $data["eglise_id"] = $data["eglise"];
            $data["ceb_id"] = $data["ceb"];
            $data["profession_id"] = $data["profession"];
            $data["situationmatrimoniale_id"] = $data["situationmatrimoniale"];
            $data["dernierdiplome_id"] = $data["diplome"];
            $data["date_naissance"] = $this->formatDate($data["date_naissance"]);
            $data["annee_bapteme"] = $this->formatDate($data["annee_bapteme"]);
            $data["date_confirmation"] = $this->formatDate($data["date_confirmation"]);
            // dd($data["date_naissance"]);
            $paroisse->fill($data);
            $paroisse->save();
//            dd("dvsvd");
//            $paroisse->eglise_id = $data["eglise"];
//            $paroisse->ceb_id = $data["ceb"];
//            $paroisse->nom = $data["nom"];
//            $paroisse->prenom = $data["prenom"];
//            $paroisse->date_naissance = $data["date_naissance"];
//            $paroisse->lieu_naissance = $data["lieu_naissance"];
//            $paroisse->habitation = $data["habitation"];
//            $paroisse->telephone = $data["telephone"];
//            $paroisse->sexe = $data["sexe"];
//            $paroisse->profession_id = $data["profession"];
//            $paroisse->lieu_bapteme = $data["lieu_bapteme"];
//            $paroisse->annee_bapteme = $data["annee_bapteme"];
//            $paroisse->lieu_confirmation = $data["lieu_confirmation"];
//            $paroisse->date_confirmation = $data["date_confirmation"];
//            $paroisse->nationnalite = $data["nationnalite"];
//            $paroisse->situationmatrimoniale_id = $data["situationmatrimoniale"];
//            $paroisse->dernierdiplome_id = $data["diplome"];
//            $paroisse->save();
            // Flash::success("Mes félicitations, votre enregistrement a été succès !");
            return Redirect::to('/success-add-paroissien');
        } catch (Exception $ex) {
            trace_log("Une erreur lors de l'enregistrement d'un paroissien, "
                    . "raison :".$ex->getMessage());
            Flash::error("Une erreur est survenue lors du processus !");
        }
        return Redirect::back();
    }
    
    private function formatDate($date){
        $time = strtotime($date);
        return date('Y-m-d',$time);
    }
}
