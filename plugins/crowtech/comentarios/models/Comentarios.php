<?php namespace Crowtech\Comentarios\Models;

use Model;

/**
 * Model
 */
class Comentarios extends Model
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
    public $table = 'crowtech_comentarios_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
                 public $attachOne = [
    'comentario_foto' => 'System\Models\File'
    ];
    
    public $attachMany = [
        
    ];
}
