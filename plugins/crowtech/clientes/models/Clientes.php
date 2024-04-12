<?php namespace Crowtech\Clientes\Models;

use Model;

/**
 * Model
 */
class Clientes extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'crowtech_clientes_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
            public $attachOne = [
    
    ];
    
    public $attachMany = [
        'logocliente' => 'System\Models\File'
    ];
}
