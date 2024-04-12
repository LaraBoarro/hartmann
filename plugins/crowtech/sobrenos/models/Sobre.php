<?php namespace Crowtech\SobreNos\Models;

use Model;

/**
 * Model
 */
class Sobre extends Model
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
    public $table = 'crowtech_sobrenos_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
             public $attachOne = [
    'jose_foto' => 'System\Models\File',
    'icone_um' => 'System\Models\File',
    'icone_dois' => 'System\Models\File',
    'icone_tres' => 'System\Models\File'
    ];
    
    public $attachMany = [
        
    ];
}
