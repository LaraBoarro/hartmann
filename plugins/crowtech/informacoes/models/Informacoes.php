<?php namespace Crowtech\Informacoes\Models;

use Model;

/**
 * Model
 */
class Informacoes extends Model
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
    public $table = 'crowtech_informacoes_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $attachOne = [
        'logo' => 'System\Models\File',
        'logomobile' => 'System\Models\File',
        'bannernos' => 'System\Models\File',
        'bannerportfolio' => 'System\Models\File',
        'bannercontato' => 'System\Models\File',
        'bannerblog' => 'System\Models\File'
    ];
    
    public $attachMany = [
        
    ];
}
