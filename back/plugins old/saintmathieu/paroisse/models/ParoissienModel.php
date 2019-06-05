<?php namespace saintmathieu\Paroisse\Models;

use Model;

/**
 * Model
 */
class ParoissienModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'saintmathieu_paroisse_paroissien';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'ceb_id' => 'required',
        'eglise_id' => 'required',
        'nom' => 'required',
        'prenom' => 'required',
        'date_naissance' => 'required',
        'lieu_naissance' => 'required',
        'habitation' => 'required',
        'telephone' => 'required',
        'email' => 'required',
        'situationmatrimoniale' => 'required',
        'sexe' => 'required',
        'profession' => 'required',
        'nationnalite' => 'required',
    ];

    public $attachOne = [
        'logo' => \System\Models\File::class,
        'cv' => \System\Models\File::class,
	];

    public $belongsTo = [
        'ceb'=>['Saintmathieu\Parametrage\Models\CebModel','Key'=>'ceb_id','otherKey'=>'id'],
        'eglise'=>['SaintMathieu\Parametrage\Models\EgliseModel','Key'=>'eglise_id','otherKey'=>'id'],
        'situationmatrimoniale'=>['SaintMathieu\Parametrage\Models\SituationMatrimonialeModel','Key'=>'situationmatrimoniale_id','otherKey'=>'id'],
        'profession'=>['SaintMathieu\Parametrage\Models\ProfessionModel','Key'=>'profession_id','otherKey'=>'id'],
        'dernierdiplome'=>['SaintMathieu\Parametrage\Models\DiplomeModel','Key'=>'dernierdiplome_id','otherKey'=>'id'],
	];
}
