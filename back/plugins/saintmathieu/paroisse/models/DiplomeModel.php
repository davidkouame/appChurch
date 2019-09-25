<?php namespace saintmathieu\Paroisse\Models;

use Model;

/**
 * Model
 */
class DiplomeModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'saintmathieu_paroisse_diplome';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'diplome'=>['Saintmathieu\Parametrage\Models\DiplomeModel','Key'=>'diplome_id','otherKey'=>'id']
    ];
}
