<?php namespace saintmathieu\Parametrage\Models;

use Model;

/**
 * Model
 */
class MouvementModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'saintmathieu_parametrage_mouvement';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
