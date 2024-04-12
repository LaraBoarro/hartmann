<?php namespace Crowtech\Portfolio\Models;

use Model;

/**
 * Model
 */
class Portfolio extends Model
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
    public $table = 'crowtech_portfolio_';

    /**
     * @var array Validation rules
     */
     public $belongsTo = [
    'categoria' => 'crowtech\portfolio\models\categorias'
    ];
    
    public $rules = [
    ];
    
    public $attachOne = [
    'fotoprincipal' => 'System\Models\File',
    'bannerprojeto' => 'System\Models\File'
    ];
    
    
    public $attachMany = [
        'galeria' => 'System\Models\File'
    ];
        /** Scopes **/
    public function scopeFilterCategory($query, $term) {
        return $query->whereHas('categoria', function ($q) use ($term) {
            $q->where('slug', $term);
        });
    }
}
