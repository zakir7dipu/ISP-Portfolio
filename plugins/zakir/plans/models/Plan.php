<?php namespace Zakir\Plans\Models;

use Model;

/**
 * Model
 */
class Plan extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zakir_plans_items';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
