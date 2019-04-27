<?php namespace saintmathieu\Parametrage\Models;

use Model;

/**
 * Model
 */
class AvantageTravailModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'saintmathieu_parametrage_avantagetravail';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
