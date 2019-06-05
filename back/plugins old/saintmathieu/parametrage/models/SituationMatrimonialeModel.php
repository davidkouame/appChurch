<?php namespace saintmathieu\Parametrage\Models;

use Model;

/**
 * Model
 */
class SituationMatrimonialeModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'saintmathieu_parametrage_situation_matrimoniale';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
