<?php namespace Crowtech\Equipe\Models;

use Model;

/**
 * Model
 */
class Equipe extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sortable;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'crowtech_equipe_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
             public $attachOne = [
    'foto_pessoa' => 'System\Models\File'
    ];
    
    public $attachMany = [
        
    ];
}
