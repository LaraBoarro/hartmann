<?php namespace Crowtech\Portfolio\Models;

use Model;

/**
 * Model
 */
class Categorias extends Model
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
    public $table = 'crowtech_portfolio_categorias';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $hasMany = [
    'portfolio' => 'crowtech\portfolio\models\portfolio'
    ];
}
