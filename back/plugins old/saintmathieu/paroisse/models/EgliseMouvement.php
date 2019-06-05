<?php namespace saintmathieu\Paroisse\Models;

use Model;

/**
 * Model
 */
class EgliseMouvement extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'saintmathieu_paroisse_eglise_mouvement';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'mouvement'=>['Saintmathieu\Parametrage\Models\MouvementModel','Key'=>'mouvement_id','otherKey'=>'id'],
        'eglise'=>['SaintMathieu\Parametrage\Models\EgliseModel','Key'=>'eglise_id','otherKey'=>'id'],
	];
}
