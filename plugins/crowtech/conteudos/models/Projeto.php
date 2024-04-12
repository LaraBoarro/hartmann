<?php namespace Crowtech\Conteudos\Models;

use Model;

/**
 * Model
 */
class Projeto extends Model
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
    public $table = 'crowtech_conteudos_projetos';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        'categoria' => 'crowtech\conteudos\models\categorias'
    ];
    
    public $attachMany = [
        'galeria' => 'System\Models\File'
    ];
}
